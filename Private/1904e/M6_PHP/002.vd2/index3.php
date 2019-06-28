<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Biến trong PHP
    Biến là thứ,cái,khái niệm,đối tượng ... dùng để chứa giá trị như số hoặc chuỗi
    và biến có đặc điểm là thay đổi trong quá trình chạy
    Biến trong PHP bắt đầu $
    Tên biến trong PHP phải bắt đầu bằng 1 chữ cái
    Tên biến thì chỉ nên chứa chữ số hoặc chữ cái hay ký tự _ mà không chứa
    những ký tự đặc biệt
    Tên biết không được phép chép chứa dấu tiếng việt hay dấu cách
    trong php nối chuỗi thì dùng dấu .
</pre>
<?php
$ten = "nguyen quang anh";
$tuoi = 18;
$quehuong = "hà nội";

echo "<br> tên là : " . $ten;
echo "<br> tuổi là : " . $tuoi;
echo "<br> quê hương là : " . $quehuong;

?>

<pre>
    Nếu trong "" mà in ra tên của biến
    thì php sẽ hiểu trong nháy kép đó là biến
    Nếu trong '' mà in ra tên của biến
    thì php sẽ hiểu trong nháy đơn đó đơn thuẩn chỉ là 1 chuỗi bình thường
</pre>
<?php echo "<br> $ten : $ten"; ?>
<?php echo '<br> $ten : $ten'; ?>
</body>
</html>