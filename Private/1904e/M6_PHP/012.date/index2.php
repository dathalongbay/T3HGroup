<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    Cú pháp :
    mktime(hour,minute,second,month,day,year)
    Hàm này sẽ tạo ra thời gian ở dạng linux timestamp

    => Để chuyển thời gian dạng linux về dạng time đọc được thì sẽ
    sử dụng date("định dạng time", "thời gian linux");
</pre>

<?php
$time1 = mktime(12,12,00,1,1,2000);
echo "<bt> time1 : " . $time1;
$human_time = date("Y-m-d H:i:s", $time1);
echo "<br> Chuyển thời gian linux về thời gian đọc được " . $human_time;

/**
 * Hàm strtotime(time,now)
 * chuyển 1 thời gian đọc được về thời gian linux
 */
echo "<br> Chuyển thời gian người đọc về lại dạng linux timestamp " . strtotime($human_time);
?>
</body>
</html>