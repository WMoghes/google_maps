<script>
    var map;
    var markers = [];
function initMap() {
    var locations = {!! json_encode($coords) !!};
    console.log(locations);
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: new google.maps.LatLng(30.044381, 31.235723),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var infowindow = new google.maps.InfoWindow({});
    var marker = []; var i;
    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(parseFloat(locations[i][3]), parseFloat(locations[i][2])),
            map: map
        });
        markers.push(marker);
//        console.log(locations[i][3], locations[i][2], locations[i][1]);
        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][1]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
}
//console.log(markers);
//google.maps.event.addDomListener(window, "load", initMap);

function animationForMyLocation(index) {
    if (markers[index].getAnimation() != google.maps.Animation.BOUNCE) {
        markers[index].setAnimation(google.maps.Animation.BOUNCE);
    }
}
function stopAnimationForMyLocation(index) {
    if (markers[index].getAnimation() == google.maps.Animation.BOUNCE) {
        markers[index].setAnimation(null);
    }
}

function doAnimation(el) {
    animationForMyLocation(el);
//    console.log(el);
}
function stopAnimation(el) {
    stopAnimationForMyLocation(el);
//    console.log(el);
}

</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlI4ywKIA-kxHfTCDteY1xIjmQojvRAAw&callback=initMap">
</script>