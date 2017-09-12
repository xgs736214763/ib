const DragMixin = {
    _initDraggableLayer() {
        // temporary coord variable for delta calculation
        this._tempDragCoord = null;

        // add CSS class
        const el = this._layer._path;
        L.DomUtil.addClass(el, 'leaflet-pm-draggable');

        this._layer.on('mousedown', this._dragMixinOnMouseDown, this);
    },
    _dragMixinOnMouseUp() {
        const el = this._layer._path;

        // re-enable map drag
        this._layer._map.dragging.enable();

        // clear up mousemove event
        this._layer._map.off('mousemove', this._dragMixinOnMouseMove, this);

        // clear up mouseup event
        this._layer.off('mouseup', this._dragMixinOnMouseUp, this);

        // if no drag happened, don't do anything
        if(!this._dragging) {
            return false;
        }

        // show markers again
        this._initMarkers();

        // timeout to prevent click event after drag :-/
        // TODO: do it better as soon as leaflet has a way to do it better :-)
        window.setTimeout(() => {
            // set state
            this._dragging = false;
            L.DomUtil.removeClass(el, 'leaflet-pm-dragging');

            // fire pm:dragend event
            this._layer.fire('pm:dragend');

            // fire edit
            this._fireEdit();
        }, 10);

        return true;
    },
    _dragMixinOnMouseMove(e) {
        const el = this._layer._path;

        if(!this._dragging) {
            // set state
            this._dragging = true;
            L.DomUtil.addClass(el, 'leaflet-pm-dragging');

            // bring it to front to prevent drag interception
            this._layer.bringToFront();

            // disbale map drag
            this._layer._map.dragging.disable();

            // hide markers
            this._markerGroup.clearLayers();

            // fire pm:dragstart event
            this._layer.fire('pm:dragstart');
        }

        this._onLayerDrag(e);
    },
    _dragMixinOnMouseDown(e) {
        // save for delta calculation
        this._tempDragCoord = e.latlng;

        this._layer.on('mouseup', this._dragMixinOnMouseUp, this);

        // listen to mousemove on map (instead of polygon),
        // otherwise fast mouse movements stop the drag
        this._layer._map.on('mousemove', this._dragMixinOnMouseMove, this);
    },
    dragging() {
        return this._dragging;
    },

    _onLayerDrag(e) {
        // latLng of mouse event
        const latlng = e.latlng;

        // delta coords (how far was dragged)
        const deltaLatLng = {
            lat: latlng.lat - this._tempDragCoord.lat,
            lng: latlng.lng - this._tempDragCoord.lng,
        };

        // create the new coordinates array
        let coords;

        if(this._layer instanceof L.Polygon) {
            coords = this._layer._latlngs[0];
        } else {
            coords = this._layer._latlngs;
        }

        const newLatLngs = coords.map((currentLatLng) => {
            const c = {
                lat: currentLatLng.lat + deltaLatLng.lat,
                lng: currentLatLng.lng + deltaLatLng.lng,
            };
            return c;
        });

        // set new coordinates and redraw
        this._layer.setLatLngs(newLatLngs).redraw();

        // save current latlng for next delta calculation
        this._tempDragCoord = latlng;

        // fire pm:dragstart event
        this._layer.fire('pm:drag');
    },
};
