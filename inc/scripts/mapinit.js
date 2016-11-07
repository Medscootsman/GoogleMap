/**
 * Created by 1607084 on 07/11/2016.
 */
function load() {
    var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(47.6145, -122.3418),
        zoom: 13,
        mapTypeId: 'roadmap'
    });
}