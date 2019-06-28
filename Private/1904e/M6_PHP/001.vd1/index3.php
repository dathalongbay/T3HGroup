<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Nhúng cú pháp php vào trong trong code html
    Nhưng phải nhớ rằng đuôi file luôn luôn là .php
    Cú pháp của php : ?php ?
    - Lệnh echo trong php là lệnh xuất ra màn hình
    - Các câu lệnh php phải luôn kết thúc bằng dấu ;
    - echo thẻ html
</pre>

<?php
echo "<br> Chào php";
// echo trực tiếp ra thẻ html
// trong câu lệnh echo ra chuỗi nếu dùng nháy kép " bên ngoài thì các thẻ html phải sử dụng nháy đơn ' và ngược lại
echo "<p style='color:red'> Chào php </p>";
?>

<pre>
    Cách số 2 chỉ in ra chuỗi trong php còn thẻ html thì để bên ngoài
    bao cú pháp ?php ?
</pre>
<p style='color:red'><?php echo "Chào php"; ?></p>

</body>
</html>