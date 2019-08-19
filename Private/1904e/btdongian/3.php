<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

$locations = array();
$locations[1] = "bac ninh";
$locations[2] = "bac giang";
$locations[3] = "quang ninh";
$locations[4] = "hai phong";
$locations[5] = "nam dinh";
$locations[6] = "thanh hoa";
$locations[7] = "nghe an";
$locations[8] = "lao cai";
$locations[9] = "ha nam";
$locations[10] = "ha noi";


$location = 10;
$gender = 1;
?>
<form name="demo" action="" method="post">

    <p>
        <label>Địa điểm</label>
        <select name="location">
            <option value="">Chọn địa điểm</option>
            <?php foreach($locations as $locations_key => $locations_value) : ?>
                <option value="<?php echo $locations_key ?>" <?php if ($location == $locations_key) { echo "selected"; } else { echo ""; } ?>><?php echo $locations_value ?></option>
            <?php endforeach; ?>
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