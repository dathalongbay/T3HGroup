<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$location = 10;
$gender = 1;
?>
<form name="demo" action="" method="post">

    <p>
        <label>Địa điểm</label>
        <select name="location">
            <option value="">Chọn địa điểm</option>
            <option value="1" <?php echo ($location == 1) ? "selected" : "" ?>>bắc ninh</option>
            <option value="2" <?php echo ($location == 2) ? "selected" : "" ?>>bắc giang</option>
            <option value="3" <?php echo ($location == 3) ? "selected" : "" ?>>quảng ninh</option>
            <option value="4" <?php echo ($location == 4) ? "selected" : "" ?>>hải phòng</option>
            <option value="5" <?php echo ($location == 5) ? "selected" : "" ?>>nam định</option>
            <option value="6" <?php echo ($location == 6) ? "selected" : "" ?>>thanh hoá</option>
            <option value="7" <?php echo ($location == 7) ? "selected" : "" ?>>nghệ an</option>
            <option value="8" <?php echo ($location == 8) ? "selected" : "" ?>>lào cai</option>
            <option value="9" <?php echo ($location == 9) ? "selected" : "" ?>>hà nam</option>
            <option value="10" <?php echo ($location == 10) ? "selected" : "" ?>>hà nội</option>
        </select>
    </p>

    <p>
        <label>Giới tính</label>
        <input type="radio" name="gender" value="0" <?php echo ($gender == 1) ? "checked" : "" ?>> Nữ
        <input type="radio" name="gender" value="1" <?php echo ($gender == 1) ? "checked" : "" ?> > Nam

    </p>
</form>

</body>
</html>