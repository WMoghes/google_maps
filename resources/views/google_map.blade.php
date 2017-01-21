<!DOCTYPE html>
<html>
<head>
    <title>Google Maps</title>
    <style>
        #map {
            height: 700px;
            width: 1000px
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div id="map"></div>
    </div>
</div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlI4ywKIA-kxHfTCDteY1xIjmQojvRAAw&sensor=false"></script>﻿

@include('google_includes.mapster')
@include('google_includes.map-options')
@include('google_includes.scripts')
</body>
</html>