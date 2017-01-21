<script>
    (function(window, google, mapster){
        mapster.MAP_OPTIONS = {
            center : {
                lat: 30.044381,
                lng: 31.235723
            },
            zoom: 10,
            disableDefaultUI: false,
            scrollwheel: true,
//            maxZoom: 10,
//            minZoom: 5,
            draggable: true,
            mapTypeId: 'roadmap',
            zoomControlOptions: {
                position: google.maps.ControlPosition.TOP_RIGHT,
                style: google.maps.ZoomControlStyle.DEFAULT
            }
        };
    }(window, google, window.Mapster || (window.Mapster = {})));
</script>