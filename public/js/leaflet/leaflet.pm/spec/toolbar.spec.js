/* eslint import/no-extraneous-dependencies: ["error", {"devDependencies": true}] */
const test = require('tape');
const L = require('leaflet');

test('TOOLBAR', (t) => {
    const mapContainer = document.createElement('DIV');
    document.body.appendChild(mapContainer);
    const map = L.map(mapContainer);

    map.pm.addControls({
        position: 'bottomright',
        deleteLayer: false,
    });

    const toolbar = mapContainer.querySelector('.leaflet-pm-toolbar');
    t.ok(document.body.contains(toolbar), 'Toolbar is in DOM');

    const toolbarPosBottom = toolbar.parentNode.classList.contains('leaflet-bottom');
    const toolbarPosRight = toolbar.parentNode.classList.contains('leaflet-right');
    t.ok((toolbarPosRight && toolbarPosBottom), 'Toolbar is correctly positioned');

    const drawPolyButton = toolbar.querySelector('.icon-polygon');
    t.ok(document.body.contains(drawPolyButton), 'Polygon Button is added');

    const deleteLayerButton = toolbar.querySelector('.icon-delete');
    t.notOk(document.body.contains(deleteLayerButton), 'Remove Button is not added');

    t.end();
});
