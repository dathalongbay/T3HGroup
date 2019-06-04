<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Cookie được sử dụng để nhận diện người dùng
    Cookie là 1 file nhỏ được server nhúng vào máy tính của người dùng
    Mỗi lần máy tính đó gửi request đến server nó cũng sẽ gửi cookie đến
    Với PHP bạn có thể tạo và lấy giá trị của cookie
    Để tạo mới cookie bạn sử dụng hàm setcookie()
    Cú pháp :
    setcookie(name, value, expire, path, domain, secure, httponly);
    Chỉ có tham số name đầu tiên là bắt buộc phải truyền vào
    còn các tham số sau đó có thể truyền hoặc không

</pre>

<?php
/**
 * Thời gian 1 ngày là 86400 giây
 * Cookie bên dưới sẽ sống trong 30 ngày
 */
$cookie_name = "username";
$cookie_value = "admin";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<?php
/**
 * Xem tất cả các cookie
 */
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>
<?php
/**
 * Truy cập vào 1 cookie
 */
if(!isset($_COOKIE["username"])) {
    echo '<br> Cookie $_COOKIE["username"] chưa được tạo';
} else {
    echo '<br>Giá trị của $_COOKIE["username"] là : ' . $_COOKIE["username"];
}
?>
</body>
</html>