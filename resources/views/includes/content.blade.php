<input id="pac-input" class="controls" type="text" placeholder="Search Box">
<div id="map"></div>
<div>
    <?php
    for($i = 0; $i < count($coords); $i++){
//        $id = $coords[$i][0];
        echo '<h1 class="test" onmouseover="doAnimation(' . $i . ')" onmouseout="stopAnimation(' . $i . ')" >' . $coords[$i][1] . '</h1><hr>';
    }
    ?>
</div>
