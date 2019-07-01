<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Câu lệnh rẽ nhánh có nhiều điều kiện
    cú pháp
    if ( điều kiện 1) {
        các câu lệnh sẽ chạy khi điều kiện 1 đúng
    } elseif (điều kiện 2) {
        các câu lệnh sẽ chạy khi điều kiện 2 đúng
    } elseif (điều kiện 3) {
        các câu lệnh sẽ chạy khi điều kiện 3 đúng
    } else {
        các câu lệnh sẽ chạy khi mà các điều kiện đều sai
    }
</pre>

<?php
$tuoi = 35;
if ( ($tuoi > 0 ) && ($tuoi < 18)) {
    echo "<br> trẻ em";
} elseif ( ($tuoi >= 18 ) && ($tuoi < 30) ) {
    echo "<br> thanh niên";
} elseif ( ($tuoi >= 30 ) && ($tuoi < 50) ) {
    echo "<br> trung niên";
} else {
    echo "<br> tuổi già";
}
?>
</body>
</html>