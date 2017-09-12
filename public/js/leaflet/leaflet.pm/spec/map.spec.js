/* eslint import/no-extraneous-dependencies: ["error", {"devDependencies": true}] */
const test = require('tape');
const L = require('leaflet');

test('MAP', (t) => {
    const mapContainer = document.createElement('DIV');
    document.body.appendChild(mapContainer);
    const map = L.map(mapContainer);

    map.pm.addControls();

    const toolbar = mapContainer.querySelector('.leaflet-pm-toolbar');
    t.ok(document.body.contains(toolbar), 'Map added controls');

    map.pm.toggleGlobalEditMode();

    t.ok(map.pm.globalEditEnabled(), 'Global Edit Mode enabled');

    t.end();
});
