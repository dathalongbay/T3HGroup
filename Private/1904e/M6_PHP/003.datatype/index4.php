<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Kiểu dữ liệu dạng mảng ( array )
    Kiểu dữ liệu mảng dùng để chứa nhiều giá trị
    Khác với kiểu số nguyên , số thực , chuỗi , boolean chỉ chứa 1 giá trị đơn
    Thì mảng có thể chứa được nhiều giá trị
    để khai báo mảng sẽ sử dụng từ khoá array()
    hoặc [] ( ngoặc vuông chỉ sử dụng trong PHP7)
    chú ý : không thể echo được mảng
    nếu muốn xem mảng thì dùng hàm var_dump()
    hoặc sử dụng hàm print_r() hàm này thì thường được dùng với thẻ pre của html
    để phân tách các phần tử trong mảng sẽ sử dụng dấu ,
</pre>

<?php
$arr1 = array(1,2,3,4,5);
$arr2 = array("A", "B", "C", "D", "E");
$arr3 = array(true, false, false, true);

var_dump($arr1);

echo "<pre>";
print_r($arr1);
echo "</pre>";

echo "<pre>";
print_r($arr2);
echo "</pre>";

echo "<pre>";
print_r($arr3);
echo "</pre>";
?>
</body>
</html>