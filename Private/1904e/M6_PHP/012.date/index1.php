<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    Timezone là múi giờ
    Giờ việt nam múi giờ là : "Asia/Ho_Chi_Minh"
    Link các múi giờ của châu á : https://www.php.net/manual/en/timezones.asia.php
    Link các múi giờ của thế giới : https://www.php.net/manual/en/timezones.php
    Nếu muốn lấy giờ hiện tại chính xác thì cần đặt đúng giờ của zone đó
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    Nếu muốn chuyển múi giờ thì cần thay đổi tham số trong hàm date_default_timezone_set()
    Mình sẽ có 2 kiểu lấy giờ trong PHP :
    Kiểu 1 là kiểu cho người đọc
    Kiểu thứ 2 là kiểu giờ của linux
</pre>

<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

echo "<br> Giờ cho người đọc : " . date("H:i:s d/m/Y");
echo "<br> Giờ của linux ( timestamp )  : " . time();


?>
</body>
</html>