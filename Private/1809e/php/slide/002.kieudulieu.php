<?php
// 1 số nguyên
$int = 3;

// 2 số thực
$float = 3.15;

// 3 chuỗi
$string = 'nguyen van a';

// 4 boolean
$boolean1 = true;
$boolean2 = false;

// 5 dạng mảng
$array_string = array(
    'nguyen van a',
    'nguyen van b',
    'nguyen van c'
);

$array_age = array(
    21,22,19
);
// dạng mảng chứa các phần tử hỗn hợp
// mảng chứa các phẩn tử phân tách nhau bằng ,
$array_misc = array('nguyen van a', 19, 'nguyen van b', 22, true, 3.15, $array_string, $array_age);

// 6 php object
class Student {

    // khai báo các thuộc tính
    public $name;
    public $age;
    public $location;

    // hàm khởi tạo của class
    public function __construct($name, $age, $location)
    {
        $this->name = $name;
        $this->age = $age;
        $this->location = $location;
    }

}
// Khởi tạo 1 đối tượng trong PHP
$tuan_anh = new Student('nguyen tuan anh', 21, 'ha noi');
// Khởi tạo 1 đối tượng trong PHP
$huong = new Student('nguyen diem huong', 22, 'thai nguyen');

// 7 NULL
$null = NULL;

// 8 Resource

// in ra 1 biến
echo '<br> biến số nguyên ' . $int;
echo '<br> biến số thực ' . $float;
echo '<br> biến số chuỗi  ' . $string;
//echo '<br> biến dạng mảng  ' . $array_misc;
//echo '<br> biến dạng object  ' . $tuan_anh;

// in ra bằng print_r
echo '<br> in ra print_r ';

echo '<br> biến số nguyên ' . print_r($int, true);
echo '<br> biến số thực ' . print_r($float, true);
echo '<br> biến số chuỗi  ' . print_r($string, true);
echo '<br> biến dạng mảng  ' . print_r($array_misc);
echo '<br> biến dạng object  ' . print_r($tuan_anh);

echo '<pre>';
print_r($array_misc);
echo '</pre>';

echo '<pre>';
print_r($tuan_anh);
echo '</pre>';

// lệnh debug lỗi
echo '<br> var_dump()';
var_dump($int);
echo '<br> var_dump()';
var_dump($float);
echo '<br> var_dump()';
var_dump($string);
echo '<br> var_dump()';
var_dump($boolean1);
echo '<br> var_dump()';
var_dump($null);
echo '<br> var_dump()';
var_dump($array_misc);
echo '<br> var_dump()';
var_dump($tuan_anh);
die; exit();



