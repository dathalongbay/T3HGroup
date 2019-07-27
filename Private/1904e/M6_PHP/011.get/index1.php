<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    $_GET trong PHP thì nó có 2 tác dụng :
    1 - lấy những tham số từ URL xuống
    2 - lấy những dữ liệu post đi từ form có method của form là get
    =>
    1 - www.abc.com?name=nguyenvana&email=nguyenvana@gmail.com&age=21
    những cái giá trị sau dấu ? trên URL được gọi là query string
    có thể lấy giá trị của những tham số từ URL xuống
    URL trên máy thầy :
    http://localhost/T3HGroupNew/Private/1904e/M6_PHP/011.get/index1.php?name=nguyenvana&email=nguyenvana@gmail.com&age=21
    nếu URL không có giá trị đằng sau ? hoặc không có ?
    thì $_GET sẽ là 1 mảng rỗng
</pre>

<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";

/**
 * lấy từng giá trị trong $_GET thì sẽ lấy giá trị như trong 1 mảng
 * $_GET là 1 mảng
 */
if (isset($_GET["name"])) {
    echo "<br>" . $_GET["name"];
}
if (isset($_GET["age"])) {
    echo "<br>" . $_GET["age"];
}
if (isset($_GET["email"])) {
    echo "<br>" . $_GET["email"];
}
?>
</body>
</html>