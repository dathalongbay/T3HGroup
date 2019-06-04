<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form name="convertdungluong" action="" method="post">
    <P>
        <label>Gigabyte :</label>
        <input type="text" name="capacity" value="<?php
        if (isset($_REQUEST['capacity'])){
            echo $_REQUEST['capacity'];
        }else{
            echo '';
        }
        ?>" placeholder="Nhập vào dung lượng cần chuyển từ gigabyte">
    </P>
    <P>
        <input type="submit" name="submit" value="submit">
    </P>
</form>

<?php
/**
 * Chuyển từ gigabyte
 * 1 - thành megabyte
 * 2 - thành byte
 * 3 - thành bit
 */

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
if (isset($_REQUEST['capacity'])) {
    echo 'megabyte:' . $val = $_REQUEST['capacity'] * 1024;
    echo '<br>';
    echo 'byte:' . $val = $_REQUEST['capacity'] * 1024 * 1024;
    echo '<br>';
    echo 'bit:' . $val = $_REQUEST['capacity'] * 1024 * 1024 * 1024;
}else{
    echo 'ERROR';
}
?>
</body>
</html>