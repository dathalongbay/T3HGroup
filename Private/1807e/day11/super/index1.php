<?php
/**
 * PHP variables scope
 * Phạm vi của biến
 */

// biến x ở ngoài hàm nên được coi là biến toàn cục
$x = 1;
/**
 *
 *
 * @param $a tham số của 1 hàm
 * @param $b tham số của 1 hàm
 */
function tinhtong($a, $b) {
    // biến y là biến cục bộ và chỉ có ảnh hưởng ở trong hàm
    $y = 5;
    echo '<br> bien y :' . $y;

    $c = $a + $b;
    return $c;

}

tinhtong(1, 2, $x);
echo '<br> bien x o ngoai ham ' . $x;