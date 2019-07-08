<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
   Mảng kết hợp là mảng mà key là 1 chuỗi và số hoặc chuỗi
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
/**
 * truy xuất vào mảng kết hợp
 */
echo "<br>" . $array2["hn"];
echo "<br>" . $array2["th"];
echo "<br>" . $array2["na"];
echo "<br>" . $array2["ht"];
echo "<br>" . $array2["hc"];

// thay đổi giá trị của phần tử
$array2["hn"] = "thu đô hà nội";
echo "<pre>";
print_r($array2);
echo "</pre>";
?>

</body>
</html>