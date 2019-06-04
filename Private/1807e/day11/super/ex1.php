<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $h = date('H');

    if ($h > 18) {
        echo '<h1>toi da the h1</h1>';
    }
    $name = 'abc';

    if ($h > 18) { // ngoac mo if ?>
        <h1>xin chao <?php echo $name; ?></h1>
    <?php } // ngoac dong cua if
    ?>


    <?php
    // if mở
    if ($h > 18) {   ?>





    <?php } //if đóng
    ?>



    <table class="table">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        </tbody>
    </table>


    <h1> lech foreach php </h1>

    <?php
    $array = array();
    $array[] = array('ho' => 'nguyen', 'ten' => 'minh', 'email' => 'abc 1 ');
    $array[] = array('ho' => 'nguyen', 'ten' => 'tuan', 'email' => 'abc 2');
    $array[] = array('ho' => 'nguyen', 'ten' => 'viet', 'email' => 'abc 3');
    ?>

    <table class="table">
        <thead>
        <tr>
            <th>họ</th>
            <th>ten</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>

            <?php
            // foreach mở
            foreach ($array as $item)  { ?>
                <tr>
                    <td><?php echo $item['ho'] ?></td>
                    <td><?php echo $item['ten'] ?></td>
                    <td><?php echo $item['email'] ?></td>
                </tr>
            <?php } // foreach đóng
            ?>


        <!--<tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>-->
        </tbody>
    </table>









</body>
</html>