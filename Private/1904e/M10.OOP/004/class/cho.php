<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 06/09/2019
 * Time: 6:53 PM
 */
include_once "../abstract/dongvat.php";

/**
 * Class Cho
 * bất kể class nào khi extend từ abstract class
 * thì phải viết lại code thực thi cho các method
 * abstract của class cha
 */
class Cho extends Dongvat {

    public function tenloai() {
        echo "tôi là chó";
    }


    public function thongtin() {
        echo "chó là loài 4 chân chạy nhanh. chó được nuôi làm thú cưng và trông nhà";
    }

}