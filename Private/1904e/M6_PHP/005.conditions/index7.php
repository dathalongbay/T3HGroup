<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$month = date('m');

echo '$month : ' . $month;

switch ($month) {
    case '01':
        echo "<br>mùa xuân";
        break;
    case '02':
        echo "<br>mùa xuân";
        break;
    case '03':
        echo "<br>mùa xuân";
        break;
    case '04':
        echo "<br>mùa hạ";
        break;
    case '05':
        echo "<br>mùa hạ";
        break;
    case '06':
        echo "<br>mùa hạ";
        break;
    case '07':
        echo "<br>mùa thu";
        break;
    case '08':
        echo "<br>mùa thu";
        break;
    case '09':
        echo "<br>mùa thu";
        break;
    case '10':
        echo "<br>mùa đông";
        break;
    case '11':
        echo "<br>mùa đông";
        break;
    case '12':
        echo "<br>mùa đông";
        break;
    default:
        echo "<br> Không xác định được mùa";
}

?>
</body>
</html>