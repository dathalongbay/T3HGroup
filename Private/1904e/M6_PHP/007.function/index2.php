<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Viết 1 function tính lương nhân viên
    có 2 tham số truyền vào hàm là : lương tháng và số ngày công
    sau đó trả về mức lương thực nhận của nhân viên đó
    Mặc định số ngày công trên 1 tháng là 24 được tính là đủ công
    ví dụ : lương tháng 10 triệu
    số ngày công là 12
    => lương thực lĩnh là 5 triệu

    Lý thuyết
    để khai báo hàm trong php sử dụng từ khóa :
    function tên_hàm($thamso1 , $thamso2, $thamso3 ...) {

        // code thực thi trong hàm
        return $ketqua;
    }

    Hàm : Input là đầu vào của hàm
    Hàm : Output là đầu ra
    tại sao dùng hàm : khi làm 1 công việc gồm nhiều bước và nhiều dòng code
    thì sẽ sử dụng hàm để tránh việc phải viết lại các dòng code tương tự
    ví dụ là tính chu vi hình vuông
    sau này khi cần sử dụng chỉ cần gọi hàm tính chu vi hình vuông
</pre>


<?php


function tinhluong($luongthang,$songaycong) {

    $luongthuclinh = ($luongthang*$songaycong)/24;
    return $luongthuclinh;
}
// gọi hàm
$x = 10000000;
$y = 12;
echo "<br> Lương tháng của bạn là : " . tinhluong($x, $y);

?>


</body>
</html>