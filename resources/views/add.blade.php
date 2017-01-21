<!DOCTYPE html>
<html>
<head>
    <title>Google Maps</title>
    <style>
        #map {
            height: 500px;
            width: 900px;
        }
        .controls {
            width: 400px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <input id="pac-input" class="controls" type="text" placeholder="Search Box">
        <div id="map"></div>
    </div>
</div>
@include('includes.script_toAdd')
</body>
</html>