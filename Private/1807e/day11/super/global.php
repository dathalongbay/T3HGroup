<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1> $GLOBAL trong php </h1>
<?php
$x = 10;
$y = 20;
$z = 30;
$w = 40;

function tinhtong() {
    echo '<br> x la : ' . $GLOBALS['x'];
    echo '<br> y la : ' . $GLOBALS['y'];

    $GLOBALS['w'] = 100;

    echo "<pre>";
    print_r($GLOBALS);
    echo "</pre>";
}

tinhtong();
echo '<br> ngoai ham w ';
echo $GLOBALS['w'];


?>

</body>
</html>