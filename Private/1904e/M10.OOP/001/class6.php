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

    // phương thức khởi tạo
    public function __construct()
    {
        echo "<br>" . __METHOD__;
    }

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




