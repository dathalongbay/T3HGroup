<?php
class Student {


    /**
     * khai báo các thuộc tính
     * của class
     * thuộc tính chỉ tính chất đặc điểm
     * của class đó
     */

    /**
     * Thuộc tính có giới hạn truy cập là public
     * thì có thể truy cập ở mọi nơi
     * 1 - bên ngoài class
     * 2 - class kế thừa
     * 3 - bản thân trong class đó
     * @var string
     */
    private $name1 = "demo public 1";



    public function getInfo() {
        echo "<br>" . __METHOD__;
        // Bên trong class
        return $this->name1;
    }


}

class ChildStudent extends Student {

    public function getParentInfo() {
        echo "<br>" . __METHOD__;
        // truy cập thuộc tính từ bên trong của class kế thừa
        return $this->name1;
    }
}

/**
 * Bên ngoài của class
 *
 */
$an = new Student();
// truy cập từ bên ngoài class
//echo "<br>" . $an->name1;

// truy cập từ bên trong class
echo "<br>" . $an->getInfo();

// truy cập từ class kế thừa
//$child = new ChildStudent();
//echo "<br>" . $child->getParentInfo();

/**
 * Kết luận : thuộc tính va phương thức có giới hạn là private
 * thì có thể truy cập từ bên trong class đo mà ko thể truy cập từ bên ngoài
 * class và class kế thừa
 */
