<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div>1 . Tạo ra 1 form có 1 ô input nhập vào url của 1 hình ảnh cụ thể
    sau khi nhập xong và click vào nút submit => nếu ảnh đó tồn tại sẽ download ảnh đó về
    thư mục images cùng cấp với
    file index.php này
    Gợi ý : sử dụng CURL để giải quyết vấn đề
    search google
</div>

<?php
if (isset($_POST['url'])) {
    $url = $_POST['url'];

    $pathinfo = pathinfo($url);
    $img_name =  $pathinfo['filename'].'.'.$pathinfo['extension'];

    $saveto = dirname(__FILE__).'/images/'.$img_name;

    $ch = curl_init ($url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
    $raw=curl_exec($ch);
    curl_close ($ch);
    if(file_exists($saveto)){
        unlink($saveto);
    }
    $fp = fopen($saveto,'x');
    fwrite($fp, $raw);
    fclose($fp);

    if (file_exists($saveto)) {
        echo '<p style="color:red">Tải thành công</p>';
    }
}
?>

<div>
    <form name="curl" method="post" action="">
        <p>
            <label>Hình ảnh</label>
            <input type="text" name="url" value="">
        </p>
        <p>
            <input type="submit" name="submit" value="Download">
        </p>
    </form>
</div>

</body>
</html>