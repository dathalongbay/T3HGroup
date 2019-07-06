<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
     Phạm vi của biến trong PHP
    https://freetuts.net/xay-dung-ham-trong-php-11.html
</pre>

<?php
function tinhluong($luongthang,$songaycong) {

    // những biến khai báo trong hàm sẽ là biến cục bộ
    $tongngaycong = 24;
    /**
     * Tham số trong hàm sẽ là biến cục bộ
     */
    $luongthuclinh = ($luongthang*$songaycong)/$tongngaycong;
    return $luongthuclinh;
}
// gọi hàm

/**
 * Biến khai báo ngoài hàm
 * là biến toàn cục
 */
$x = 10000000;
$y = 12;
echo "<br> Lương tháng của bạn là : " . tinhluong($x, $y);
?>

</body>
</html>