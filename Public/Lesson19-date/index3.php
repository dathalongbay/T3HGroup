<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Timezone</h1>
<pre>
 Sử dụng hàm date_default_timezone_set()
    1 số múi giờ thông dụng xem tại đây
    https://www.php.net/manual/en/timezones.php
    https://www.php.net/manual/en/timezones.asia.php
</pre>

<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>

</body>
</html>