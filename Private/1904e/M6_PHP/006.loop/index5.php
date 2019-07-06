<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    continue chuyển vòng lặp sang lần chạy tiếp theo
</pre>

<?php
for($i = 1; $i <= 10; $i++) {

    if ($i == 6) {
        continue;
    }

    echo "<br>" . $i;
}
?>
</body>
</html>