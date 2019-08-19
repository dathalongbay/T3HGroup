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
            <option value="1" <?php if ($location == 1) { echo "selected"; } else { echo ""; } ?>>bắc ninh</option>
            <option value="2" <?php if ($location == 2) { echo "selected"; } else { echo ""; } ?>>bắc giang</option>
            <option value="3" <?php if ($location == 3) { echo "selected"; } else { echo ""; } ?>>quảng ninh</option>
            <option value="4" <?php if ($location == 4) { echo "selected"; } else { echo ""; } ?>>hải phòng</option>
            <option value="5" <?php if ($location == 5) { echo "selected"; } else { echo ""; } ?>>nam định</option>
            <option value="6" <?php if ($location == 6) { echo "selected"; } else { echo ""; } ?>>thanh hoá</option>
            <option value="7" <?php if ($location == 7) { echo "selected"; } else { echo ""; } ?>>nghệ an</option>
            <option value="8" <?php if ($location == 8) { echo "selected"; } else { echo ""; } ?>>lào cai</option>
            <option value="9" <?php if ($location == 9) { echo "selected"; } else { echo ""; } ?>>hà nam</option>
            <option value="10" <?php if ($location == 10) { echo "selected"; } else { echo ""; } ?>>hà nội</option>
        </select>
    </p>

    <p>
        <label>Giới tính</label>
        <input type="radio" name="gender" value="0" <?php if ($gender == 0) { echo "checked"; } else { echo ""; } ?>> Nữ
        <input type="radio" name="gender" value="1" <?php if ($gender == 1) { echo "checked"; } else { echo ""; } ?> > Nam

    </p>
</form>

</body>
</html>