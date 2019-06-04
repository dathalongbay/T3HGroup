<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>In ra giá trị của 1 session</h1>

    <?php
    /**
     * Tạo ra 2 biến session trong PHP
     */
    $_SESSION["user_name"] = "admin";
    $_SESSION["user_email"] = "admin@gmail.com";

    /**
     * Hoặc gán 1 biến vào $_SESSION
     */

    $location = "hà nội";
    $_SESSION["user_location"] = $location;
    ?>

<div>
    <h1>Thông tin user là : </h1>
    <p>Tên người dùng : <?php echo $_SESSION["user_name"] ?></p>
    <p>Email người dùng : <?php echo $_SESSION["user_email"] ?></p>
    <p>Địa chỉ người dùng : <?php echo $_SESSION["user_location"] ?></p>
</div>
</body>
</html>