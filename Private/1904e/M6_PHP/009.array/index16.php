<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    array_values() chuyển mảng thành 1 mảng tuần tự bằng cách lấy ra tất cả các value trong mảng đó
</pre>
<?php
$array2 = array();
$array2["hn"] = "hà nội";
$array2["th"] = "thanh hoá";
$array2["na"] = "nghệ an";
$array2["ht"] = "hà tĩnh";
$array2["hc"] = "hồ chí minh";
$array2[12] = "long an";

echo "<pre>";
print_r($array2);
echo "</pre>";

$newArray = array_values($array2);

echo "<pre>";
print_r($newArray);
echo "</pre>";
?>

</body>
</html>