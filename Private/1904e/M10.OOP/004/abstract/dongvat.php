<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 06/09/2019
 * Time: 6:45 PM
 */

abstract class Dongvat {


    public abstract function tenloai();

    public abstract function thongtin();

    public function khainiem() {
        echo "Từ \"animal\" xuất phát từ tiếng Latin animalis, có nghĩa là \"có thở\".[1] 
        Trong sử dụng ngôn ngữ giao tiếp hàng ngày, từ \"động vật\" thường bị sử dụng sai -
         từ \"động vật\" đó dùng để chỉ tất cả các thành viên của giới Animalia trừ con người. Theo nghĩa sinh học, 
        \"động vật\" dùng để chỉ tất cả các thành viên của giới Animalia, bao gồm cả con người.";
    }

}