<script>
    (function(window, mapster){
        // map options
        var options = mapster.MAP_OPTIONS,
        element = document.getElementById('map'),
        // map
        map = mapster.create(element, options);
        var marker_1 = map.addMarker({
            lat: 30.044381,
            lng: 31.235723,
            draggable: true,
            event: {
                name: 'click',
                callback: function(e){
                    alert('I clicked');
                    console.log(e);
                }
            },
            icon: 'https://cdn1.iconfinder.com/data/icons/Map-Markers-Icons-Demo-PNG/48/Map-Marker-Ball-Pink.png'
        });

        var marker_2 = map.addMarker({
            lat: 30.045129,
            lng: 31.234854,
            content: '<h1>this is test</h1>',
            icon: 'https://cdn1.iconfinder.com/data/icons/Map-Markers-Icons-Demo-PNG/48/Map-Marker-Ball-Pink.png'
        });

        map._removeMarker(marker_2);
        console.log(map.findMarkerByLat(30.044381));
        map.zoom(16);
    }(window, window.Mapster || (window.Mapster = {})));
</script>