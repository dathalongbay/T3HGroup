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

class Ga extends Dongvat {

    public function tenloai() {
        echo "tôi là gà";
    }


    public function thongtin() {
        echo "gà là loài 2 chân năng từ 1 đến 3 cân tùy giống gà";
    }

}