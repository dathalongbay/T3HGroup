<?php

// khai báo class
class Student {


    /**
     * khai báo các thuộc tính
     * của class
     * thuộc tính chỉ tính chất đặc điểm
     * của class đó
     */

    public $name = "nguyen quang tuan";

    public $age = 21;

    public $location = "ha noi";

    public $point = 7;


}

// khởi tạo đối tượng từ class
$tuan = new Student();

/**
 * muốn in ra cấu trúc của 1 đối tượng
 */
echo "<pre>";
print_r($tuan);
echo "</pre>";

