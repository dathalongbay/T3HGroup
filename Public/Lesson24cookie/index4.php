<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
1 số máy tính cài đặt tool chặn cookie
vây muốn kiểm tra xem trình duyệt có chặn cookie hay không ta làm như sau

<?php
// Đặt 1 cookie để thử test
setcookie("test_cookie", "test", time() + 3600, '/');
?>

<?php
if(count($_COOKIE) > 0) {
    echo "Cookies có hoạt động";
} else {
    echo "Cookies không hoạt động";
}
?>
</body>
</html>