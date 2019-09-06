<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 06/09/2019
 * Time: 6:54 PM
 */
include_once "../abstract/dongvat.php";

include_once "../interface/an.php";
include_once "../interface/keu.php";
include_once "../interface/sinhsan.php";

class Meo extends Dongvat {

    public function tenloai() {
        echo "tôi là mèo";
    }


    public function thongtin() {
        echo "tôi là mèo có 4 chân hay nằm góc bếp";
    }
}