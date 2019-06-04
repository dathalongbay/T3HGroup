<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$day = isset($_REQUEST['day']) ? (int) $_REQUEST['day'] : '';
$month = isset($_REQUEST['month']) ? (int) $_REQUEST['month'] : '';
$year = isset($_REQUEST['year']) ? (int) $_REQUEST['year'] : '';

if (isset($_REQUEST['day']) && isset($_REQUEST['month']) && isset($_REQUEST['year'])) {
    $current_day_timestamp = time();
    $current_day = date("d/m/Y",time());
    echo '<br> $current_day_timestamp : ' .  $current_day_timestamp;
    echo '<br> $current_day : ' .  $current_day;

    echo '<br> Ngày hiện tại : ' . date('d', time());
    echo '<br> Tháng hiện tại : ' . date('m', time());
    echo '<br> Năm hiện tại : ' . date('Y', time());
    $birthday_in_curent_year = $day.'/'.$month.'/'.date('Y', time());
    echo '<br> Sinh nhật của người đó trong năm nay : ' . $birthday_in_curent_year;
    $dtime = DateTime::createFromFormat("d/m/Y", $birthday_in_curent_year);
    $timestamp = $dtime->getTimestamp();
    echo '<br> Sinh nhật của người đó trong năm nay theo timestamp : ' . $timestamp;
    echo '<br> Đã qua sinh nhật hay chưa : ';

    $thoi_gian_den_sinh_nhat = 0;
    if ($current_day_timestamp > $timestamp) {
        echo '<br>' . 'Ôi qua sinh nhật rồi';
        $sinh_nhat_nam_sau = $day.'/'.$month.'/'.(date('Y', time()) + 1);
        echo '<br> Sinh nhật năm sau : ' . $sinh_nhat_nam_sau;
        $next_birth = DateTime::createFromFormat("d/m/Y", $sinh_nhat_nam_sau);
        $next_birth_timestamp = $next_birth->getTimestamp();
        echo '<br> Sinh nhật của người đó trong năm sau theo timestamp : ' . $next_birth_timestamp;
        $thoi_gian_den_sinh_nhat = $next_birth_timestamp - $current_day_timestamp;
    } else {
        echo '<br>' . 'Sắp đến sinh nhật';
        $thoi_gian_den_sinh_nhat = $timestamp - $current_day_timestamp;
    }

    echo '<br> Thời gian đến sinh nhật sắp tới theo s : ' . $thoi_gian_den_sinh_nhat;
    echo '<br> Thời gian đến sinh nhật sắp tới theo phút: ' . (int) ($thoi_gian_den_sinh_nhat/60);
    echo '<br> Thời gian đến sinh nhật sắp tới theo giờ: ' . (int) ($thoi_gian_den_sinh_nhat/(60*60));
    echo '<br> Thời gian đến sinh nhật sắp tới theo ngày: ' . (int) ($thoi_gian_den_sinh_nhat/(60*60*24));

}

?>

<form name="convertdungluong" action="" method="post">
    <P>
        <label>Nhập ngày sinh :</label>
        <input type="text" name="day" value="<?php echo $day; ?>">
    </P>
    <P>
        <label>Nhập tháng sinh :</label>
        <input type="text" name="month" value="<?php echo $month; ?>">
    </P>
    <P>
        <label>Nhập năm sinh :</label>
        <input type="text" name="year" value="<?php echo $year; ?>">
    </P>
    <P>
        <input type="submit" name="submit" value="submit">
    </P>
</form>
<p>Tính xem còn bao nhiêu ngày nữa là đến sinh nhật của người ấy</p>
<?php
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

?>
</body>
</html>