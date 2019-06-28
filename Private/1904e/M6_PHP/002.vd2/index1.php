<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    In ra chuỗi trong PHP
    có 2 cách : cách 1 để chuỗi trong nháy kép ""
</pre>
<?php
echo "<br> Hà nội";
echo "<br> Đà nẵng";
echo "<br> Hồ chí minh";
?>
<pre>
    In ra chuỗi trong PHP
    có 2 cách : cách 2 để chuỗi trong nháy kép ''
</pre>
<?php
echo '<br> Hà nội';
echo '<br> Đà nẵng';
echo '<br> Hồ chí minh';
?>

<pre>
    Yêu cầu : in ra chuỗi : chào 'hà nội'
    để giải quyết có 2 cách làm chính :
    Nguyên tắc 1 là dùng nháy kép để bao nháy đơn hay ngược lại là nháy đơn để bao nháy kép
    Nguyên tắc 2 là dùng ký tự escape để phân biệt nháy báo chuối và nháy xuất ra
    nháy xuất ra màn hình phải được đặt sau escape \ vd \' , \"
</pre>
<?php echo "<br> chào 'hà nội'"; ?>
<pre>
    dấu \ được hiểu là ký tự escape
    chuỗi trong php phải được đặt trong '' hay ""
    nếu bản thân chuỗi cần in ra có ' hay "
    thì php sẽ không phân biệt đâu là nháy để bao chuỗi
    đâu là nháy để in ra
    => ký tự nháy cần in ra phải được đặt sau dấu escape \ để php có thể phân biệt thành công
</pre>
<?php echo '<br> chào \'hà nội\''; ?>

<pre>
    Yêu cầu : in ra chuỗi : chào "hà nội"
</pre>
<?php echo '<br>chào "hà nội"'; ?>
<?php echo "<br>chào \"hà nội\""; ?>
</body>
</html>