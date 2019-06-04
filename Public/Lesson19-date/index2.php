<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    Các ký hiệu định dạng thời gian :
    d - ngày trong tháng (01 đến 31)
    m - tháng (01 đến 12)
    Y - năm
    l - ngày trong tuần
    H - giờ hệ 24h (00 to 23)
    h - giờ hệ 12h (01 to 12)
    i - phút (00 to 59)
    s - giấy (00 to 59)
    a - sáng hay tối (am or pm)

    hàm date('định dạng thời gian', 'timestamp');
    nếu không truyền timestamp thì sẽ lấy mặc định là thời gian hiện tại
</pre>
<?php
echo '<br> date("d") :' . date("d");
echo '<br> date("m") :' . date("m");
echo '<br> date("Y") :' . date("Y");
echo '<br> date("l") :' . date("l");
echo '<br> date("H") :' . date("H");
echo '<br> date("h") :' . date("h");
echo '<br> date("i") :' . date("i");
echo '<br> date("s") :' . date("s");
echo '<br> date("d/m/Y") :' . date("d/m/Y");
echo '<br> date("d-m-Y") :' . date("d-m-Y");
echo '<br> date("H:i:s d/m/Y") :' . date("H:i:s d/m/Y");
?>




</body>
</html>