<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $key => $value) {
    echo '<br>' . $key . ' --- ' . $value;
}

foreach ($colors as $value) {
    echo '<br>' . $value;
}
?>