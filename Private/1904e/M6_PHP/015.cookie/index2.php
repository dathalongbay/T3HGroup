
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>Xóa cookie</h1>
<pre>
    Để xóa cookie bạn cần đặt thời gian quá hạn của nó đã qua
    ví dụ đã qua 1 giờ
    time() sẽ lấy ra thời gian hiện tại
    còn time() - 3600 sẽ lấy ra thời gian cách đây 1 giờ
</pre>

<?php
/**
 * Khởi tạo cookie
 */
$cookie_name = "username";
$cookie_value = "admin";
$time = time() + (86400 * 30);
setcookie($cookie_name, $cookie_value, $time);
/**
 * In ra cookie trước khi xoá
 */
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";



?>


</body>
</html>