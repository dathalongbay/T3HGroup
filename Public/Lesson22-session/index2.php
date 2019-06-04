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
    <h1>Tạo session trong php</h1>

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

    /**
     * In ra mảng $_SESSION để xem thông tin
     */
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    ?>
</body>
</html>