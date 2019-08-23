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


    /**
     * Phương thức
     */

    public function printInfo() {

        echo "<br>" . __METHOD__;
        echo "<br>tên : " . $this->name;
        echo "<br>tuổi : " . $this->age;
        echo "<br>địa điểm : " . $this->location;
        echo "<br>điểm tổng kết : " . $this->point;

    }

}

// khởi tạo đối tượng từ class
$tuan = new Student();

/**
 * muốn in ra cấu trúc của 1 đối tượng
 */
echo "<pre>";
print_r($tuan);
echo "</pre>";

// gọi đến 1 method trong class
$tuan->printInfo();

// gọi đến các thuộc tính của class từ bên ngoài class
echo "<br> ----- " . $tuan->name;
echo "<br> ----- " . $tuan->age;
echo "<br> ----- " . $tuan->location;
echo "<br> ----- " . $tuan->point;



