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
    <h1>Hủy toàn bộ session php</h1>

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

<?php
/**
 * Chỉnh sửa thông tin trong session
 *
 */
$_SESSION["user_location"] = "Hồ chí minh";
?>

    <div>
        <h1>Thông tin user là : </h1>
        <p>Tên người dùng : <?php echo $_SESSION["user_name"] ?></p>
        <p>Email người dùng : <?php echo $_SESSION["user_email"] ?></p>
        <p>Địa chỉ người dùng : <?php echo $_SESSION["user_location"] ?></p>
    </div>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>
</body>
</html>