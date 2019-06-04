<?php
/**
 * Mảng đa chiều
 */
$multi = array(
    array('ten_tp' => 'ha noi', 'quan' => array(
        array('ten_quan' => 'thanh xuan', 'phuong' => array(
            array('ten_phuong' => '1'),
            array('ten_phuong' => '2'),
            array('ten_phuong' => '3'),
        )),
        array('ten_quan' => 'tay ho', 'phuong' => array(

        )),
        array('ten_quan' => 'hoan kiem', 'phuong' => array(

        )),
    )),
    array('ten_tp' => 'ho chi minh', 'quan' => array(

    )),
    array('ten_tp' => 'da nang', 'quan' => array(

    )),
    array('ten_tp' => 'hai phong', 'quan' => array(

    )),
);

/**
 * Mảng đa chiều đơn giản là dạnh mảng lồng mảng
 * lúc này mỗi phần tử của mảng là 1 mảng con
 * có thể lồng nhiều mảng con khác 
 */
echo '<pre>';
print_r($multi);
echo '</pre>';


