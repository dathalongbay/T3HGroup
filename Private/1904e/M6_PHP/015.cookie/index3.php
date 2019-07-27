<?php

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
/**
 * Xoá cookie bằng cách đặt thời gian sống cho nó là 1 thời gian đã qua
 * time() là thời gian hiện tại
 * time() - 3600 là cách đây 1 giờ
 * session sẽ tự chết
 */
$time = time() - 360000;
setcookie("username", "", $time);
/**
 * In ra cookie sau khi xóa
 */
echo "<br>Sau khi xoá";
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";