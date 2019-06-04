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

<div class="container">
    <div class="row">
        <div style="height: 100px">
        </div>
    </div>
    <div class="row">
        <div style="color: red">

            <p>Bảo hiểm y tế = 1.5/100 * lương gross</p>
            <p>Bảo hiểm xã hội = 8/100 * lương gross</p>
            <p>Bảo hiểm thất nghiệp = 1/100 * lương gross</p>
            <p>Bảo hiểm = ( bảo hiểm y tế + bảo hiểm xã hội + bảo hiểm thất nghiệp)</p>
            <p>Thu nhập chịu thuế = Thu nhập gross - Bảo hiểm - Giảm trừ cá nhân 9 triệu - ( số người phụ thuộc * 3.6 triệu )</p>
            <p>Thuế thu nhập cá nhân = (Thu nhập chịu thuế * % theo khung chịu thuế)</p>
            <p>Thu nhập net = Tổng thu nhập - Bảo hiểm - Thuế thu nhập cá nhân</p>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>bậc</th>
                    <th>thu nhập chịu thuế/tháng</th>
                    <th>Phần trăm tính thuế</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>nhỏ hơn hay bằng 5.000.000</td>
                    <td>5%</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>từ 5.000.000 đến 10.000.000</td>
                    <td>10%</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>trên 10.000.000 đến 18.000.000</td>
                    <td>15%</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>trên 18.000.000 đến 32.000.000</td>
                    <td>20%</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>trên 32.000.000 đến 52.000.000</td>
                    <td>25%</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>trên 52.000.000 đến 80.000.000</td>
                    <td>30%</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>trên 80.000.000</td>
                    <td>35%</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <form name="hr" action="index2.php" method="post">
            <div class="form-group">
                <label>Thu nhập gross</label>
                <input type="text" name="gross" class="form-control" value="<?php
                echo isset($_POST['gross']) ? $_POST['gross'] : 0 ?>">
            </div>
            <div class="form-group">
                <label>Bảo hiểm y tế %</label>
                <input type="text" name="medical" class="form-control" value="1.5">
            </div>
            <div class="form-group">
                <label>Bảo hiểm xã hội %</label>
                <input type="text" name="social" class="form-control" value="8">
            </div>
            <div class="form-group">
                <label>Bảo hiểm thất nghiệp %</label>
                <input type="text" name="work" class="form-control" value="1">
            </div>
            <p>Giảm trừ gia cảnh</p>
            <div class="form-group">
                <label>Giảm trừ cá nhân 9.000.000</label>
                <input type="text" name="personal" class="form-control" value="9000000">
            </div>
            <div class="form-group">
                <label>Giảm trừ người phụ thuộc</label>
                <input type="text" name="family" class="form-control" value="3600000">
            </div>
            <div class="form-group">
                <label>Số người phụ thuộc</label>
                <input type="text" name="quantity_family" class="form-control" value="<?php
                echo isset($_POST['quantity_family']) ? $_POST['quantity_family'] : 0 ?>">
            </div>

            <button name="submit_btn" type="submit" class="btn btn-default" value="submit">GROSS -> NET</button>
        </form>
    </div>
    <div class="row">

        <?php
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";


        if ( isset($_POST['submit_btn']) && ($_POST['submit_btn'] == 'submit') ) {

            $gross = $_POST['gross'];




        }


        ?>
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">Lương net : 0</p>
        <div style="height: 200px"></div>
    </div>
</div>


</body>
</html>
