<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Cú pháp thay thế của lệnh if else
    Link gốc :
    https://www.php.net/manual/en/control-structures.alternative-syntax.php
</pre>

<?php
$age = 19;
if ($age > 18) {
    echo "<br> Người trưởng thành";
}

$tuoi = 19;
if ($tuoi > 18) :
    echo "<br> Người trưởng thành";
endif;
?>
</body>
</html>