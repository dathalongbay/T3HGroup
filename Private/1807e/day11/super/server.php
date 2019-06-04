<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1> $_SERVER </h1>
    <?php
    echo "<br> duong dan url cua file dang chay - ";
    echo $_SERVER['PHP_SELF'];
    echo "<br> domain - ";
    echo $_SERVER['SERVER_NAME'];
    echo "<br> domain - ";
    echo $_SERVER['HTTP_HOST'];
    echo "<br> duong dan url khong co file - ";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br> trinh duyet - ";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br> script name - ";
    echo $_SERVER['SCRIPT_NAME'];
    ?>
    <?php
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";
    ?>

</body>
</html>