<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    Loop mảng đa chiều
    Yêu cầu : in được ra tên của các quốc gia và thành phố của nó
</pre>

<ul>
    <li>Trung quốc</li>
    <li>Bắc kinh</li>
    <li>Thâm quyết</li>
    <li>Thành đô</li>
</ul>
<ul>
    <li>Hàn quốc</li>
    <li>Seun</li>
</ul>
<ul>
    <li>nhật bản</li>
    <li>tokyo</li>
</ul>
...

<?php
$array3 = array();
$array3["china"] = array("name" => "trung quốc", "city" => array("bắc kinh", "thâm quyến", "thành đô"));
$array3["korea"] = array("name" => "hàn quốc", "city" => array("seun"));
$array3["japan"] = array("name" => "nhật bản", "city" => array("tokyo", "kyoto"));
$array3["vn"] = array("name" => "việt nam", "city" => array("hà nội", "hồ chí minh"));

echo "<pre>";
print_r($array3);
echo "</pre>";

foreach($array3 as $keyCountry => $country) {
    foreach ($country as $keyCities => $cities) {
        if ($keyCities == "city") {
            foreach ($cities as $keyCity => $city) {
                echo "<br> " . $city;
            }
        }
    }
}


?>
</body>
</html>