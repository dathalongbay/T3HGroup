<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    break tiến ngắt vòng lặp ngay lập tức
</pre>

<?php
for($i = 1; $i <= 10; $i++) {

    if ($i == 6) {
        break;
    }

    echo "<br>" . $i;
}
?>
</body>
</html>