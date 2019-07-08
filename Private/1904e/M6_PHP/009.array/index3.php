<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
   Mảng đa chiều là mảng mà phần tử trong mảng là 1 mảng
    Mảng đa chiều là mảng lồng mảng
</pre>

<?php
$array3 = array();
$array3["china"] = array("name" => "trung quốc", "city" => array("bắc kinh", "thâm quyến", "thành đô"));
$array3["korea"] = array("name" => "hàn quốc", "city" => array("seun"));
$array3["japan"] = array("name" => "nhật bản", "city" => array("tokyo", "kyoto"));
$array3["vn"] = array("name" => "việt nam", "city" => array("hà nội", "hồ chí minh"));

echo "<pre>";
print_r($array3);
echo "</pre>";


?>

</body>
</html>