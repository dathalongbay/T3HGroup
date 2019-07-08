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
// cách 1
$array2 = array();
$array2["hn"] = "hà nội";
$array2["th"] = "thanh hoá";
$array2["na"] = "nghệ an";
$array2["ht"] = "hà tĩnh";
$array2["hc"] = "hồ chí minh";
$array2[12] = "long an";

// cách 2
$array2 = array("hn" => "hà nội", "th" => "thanh hoá", "na" => "nghệ an");

echo "<pre>";
print_r($array2);
echo "</pre>";
?>

</body>
</html>