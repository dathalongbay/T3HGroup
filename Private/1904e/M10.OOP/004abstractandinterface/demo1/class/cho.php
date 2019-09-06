<?php
/**
 * Created by PhpStorm.
 * User: datdo
 * Date: 8/31/2019
 * Time: 7:16 PM
 */

include_once "../abstract/dongvat.php";
include_once "../interface/an.php";
include_once "../interface/keu.php";
include_once "../interface/sinhsan.php";

class Cho extends Dongvat implements An , Keu , Sinhsan {


    public function tenloai() {
        echo "tôi là chó";
    }


    public function thongtin() {
        echo "chó là loài 4 chân chạy nhanh. chó được nuôi làm thú cưng và trông nhà";
    }


    public function toi_nay_an_gi()
    {
        // TODO: Implement toi_nay_an_gi() method.
        echo "chó nhà nghèo ăn cám , chó nhà giàu ăn thịt bò";
    }


    public function keu_nhu_the_nao()
    {
        // TODO: Implement keu_nhu_the_nao() method.
        echo "chó kêu gâu gâu";
    }

    public function thongtinsinhsan()
    {
        // TODO: Implement thongtinsinhsan() method.
        echo "chó đẻ con. thời gian mang thai mỗi lứa khoảng 3 tháng";
    }
}