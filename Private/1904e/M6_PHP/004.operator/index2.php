<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Toán tử rút gọn
    Khi 1 biến + , - , * , chia , chia lấy dư , nối chuỗi với chính bản thân nó
    thì ta sẽ có toán tử rút gọn
</pre>

<?php
// cách viết bình thường
$a = 5;
$a = $a + 5;
$a = $a - 5;
$a = $a / 5;
$a = $a * 5;
$a = $a % 5;

// cách viết rút gọn
$b = 5;
$b += 5;
$b -= 5;
$b /= 5;
$b *= 5;
$b %= 5;

?>
</body>
</html>