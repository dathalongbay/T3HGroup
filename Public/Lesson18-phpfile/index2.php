<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
Đọc file trong PHP

<pre>
    Để mở một file ta dùng cú pháp sau: fopen($path, $option).
    Trong đó $path là đường dẫn đến file cần mở, $option là quyền cho phép thao tác trên file.
    Các option phổ biến .
    r (mở 1 file cho mục đích chỉ đọc )
    r+(mở 1 file cho mục đích đọc và ghi)
    w (mở 1 file cho việc chỉ ghi nội dung vào file )
    w+ (mở 1 file cho mục đích đọc và ghi . Nếu file này tồn tại thì nội dung cũ sẽ bị xóa đi và ghi lại nội dung mới, còn nếu file chưa tồn tại thì nó tạo file mới)
    a (Mở dưới dạng append dữ liệu, chỉ có write và nếu file tồn tại nó sẽ ghi tiếp nội dung phía dưới, ngược lại nếu file không tồn tại nó tạo file mới)
    a+ Mở dưới dạng append dữ liệu, bao gồm write và read. Nếu file tồn tại nó sẽ ghi tiếp nội dung phía dưới, ngược lại nếu file không tồn tại nó tạo file mới
</pre>
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
/**
 * Để đọc hết tất cả file ta dùng hàm fread($fp, $size),
 * trong đó $fp là đối tượng lúc mở file còn $size là kích cỡ của file cần đọc.
 * Để lấy kích cỡ của file cần đọc ta dùng hàm filesize($path)
 */
echo fread($myfile,filesize("webdictionary.txt"));
/**
 *  Để đóng file ta dùng hàm fclose($myfile) trong đó $myfile là đối tượng trả về lúc bạn mở file.
 */
fclose($myfile);
?>

</body>
</html>