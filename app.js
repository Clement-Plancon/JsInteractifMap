let $map = document.querySelector('#map')

class LeafletMap {

    load(element) {
        L.map(element)
    }

}

const initMap = function() {
    let map = new LeafletMap()
    map.load($map)
}

if ($map !== null) {
    initMap()
}

let mymap = L.map('map').setView([51.505, -0.09], 13);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    accessToken: 'pk.eyJ1IjoiY2xlbTEyMyIsImEiOiJja3Y4NjFzejgwbGMxMnJxdXBkOGsycGNlIn0.Geq-rDGWXPV5Qp3Awg0Gaw',
    id: 'mapbox.streets'
}).addTo(mymap);

L.popup()
    .setLatLng(51.505, -0.09)
    .setContent('<p>Hello world!<br />This is a nice popup.</p>')
    .openOn(map);