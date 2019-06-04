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
        <form name="hr" action="index.php" method="post">
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
        /**
         * Khai báo giá trị mặc định
         */
        $net = $gross = 0;
        $medical = 1.5/100;
        $money_bao_hiem_y_te = 0;
        $social = 8/100;
        $money_bao_hiem_xa_hoi  = 0;
        $work = 1/100;
        $money_bao_hiem_that_nghiep = 0;
        $money_tong_ba_bao_hiem  = 0;
        $money_thu_nhap_sau_bao_hiem  = 0;
        $personal = 9000000;
        $quantity_family  = 0;
        $family = 3600000;
        $money_chiu_thue_thu_nhap_ca_nhan  = 0;
        $khung_chiu_thue  = 0;
        $money_dong_thue_thu_nhap_ca_nhan  = 0;

        /**
         * In ra $_POST
         */
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        /**
         * Submit dữ liệu đi mới tính toán
         */
        if (isset($_POST['submit_btn']) && ($_POST['submit_btn'] == 'submit') ) {
            /**
             * Lương gross
             */
            $gross = isset($_POST['gross']) ? $_POST['gross'] : 0;

            /**
             * % bảo hiểm y tế
             */
            $medical = isset($_POST['medical']) ? $_POST['medical'] : 0;

            /**
             * % bảo hiểm xã hội
             */
            $social = isset($_POST['social']) ? $_POST['social'] : 0;

            /**
             * % bảo hiểm thất nghiệp
             */
            $work = isset($_POST['work']) ? $_POST['work'] : 0;

            /**
             * Giảm trừ cá nhân
             */
            $personal = isset($_POST['personal']) ? $_POST['personal'] : 0;

            /**
             * Giảm trừ gia cảnh
             */
            $family = isset($_POST['family']) ? $_POST['family'] : 0;

            /**
             * số lượng người phụ thuộc
             */
            $quantity_family = isset($_POST['quantity_family']) ? $_POST['quantity_family'] : 0;


            /**
             * Okay bắt đầu tính toán nhé
             */

            /**
             * Số tiền đóng bảo hiểm y tế
             */
            $money_bao_hiem_y_te = ($medical/100)*$gross;

            /**
             * Số tiền đóng bảo hiểm xã hội
             */
            $money_bao_hiem_xa_hoi = ($social/100)*$gross;

            /**
             * Số tiền đóng bảo hiểm thất nghiệp
             */
            $money_bao_hiem_that_nghiep = ($work/100)*$gross;

            /**
             * Tổng tiền 3 loại bảo hiểm
             */
            $money_tong_ba_bao_hiem = $money_bao_hiem_y_te + $money_bao_hiem_xa_hoi + $money_bao_hiem_that_nghiep;

            /**
             * thu nhập sau khi khấu trừ bảo hiểm
             */
            $money_thu_nhap_sau_bao_hiem = $gross - $money_tong_ba_bao_hiem;

            /**
             * tính thu nhập phải chịu thuế
             * */
            if ($money_thu_nhap_sau_bao_hiem > 9000000) {
                $money_chiu_thue_thu_nhap_ca_nhan = $gross - $money_tong_ba_bao_hiem - $personal - ($family*$quantity_family);
            } else {
                $money_chiu_thue_thu_nhap_ca_nhan = 0;
            }

            if ( ($money_chiu_thue_thu_nhap_ca_nhan > 0) && ($money_chiu_thue_thu_nhap_ca_nhan <= 5000000) ) {
                $khung_chiu_thue = 5/100;
            } elseif( ($money_chiu_thue_thu_nhap_ca_nhan > 5000000) && ($money_chiu_thue_thu_nhap_ca_nhan <= 10000000) ) {
                $khung_chiu_thue = 10/100;
            } elseif( ($money_chiu_thue_thu_nhap_ca_nhan > 10000000) && ($money_chiu_thue_thu_nhap_ca_nhan <= 18000000) ) {
                $khung_chiu_thue = 15/100;
            } elseif( ($money_chiu_thue_thu_nhap_ca_nhan > 18000000) && ($money_chiu_thue_thu_nhap_ca_nhan <= 32000000) ) {
                $khung_chiu_thue = 20/100;
            } elseif( ($money_chiu_thue_thu_nhap_ca_nhan > 32000000) && ($money_chiu_thue_thu_nhap_ca_nhan <= 52000000) ) {
                $khung_chiu_thue = 25/100;
            } elseif( ($money_chiu_thue_thu_nhap_ca_nhan > 52000000) && ($money_chiu_thue_thu_nhap_ca_nhan <= 80000000) ) {
                $khung_chiu_thue = 30/100;
            } elseif( ($money_chiu_thue_thu_nhap_ca_nhan > 80000000) ) {
                $khung_chiu_thue = 35/100;
            } else {
                $khung_chiu_thue = 0;
            }

            /**
             * số tiền phải đóng thuế thu nhập cá nhân
             */
            $money_dong_thue_thu_nhap_ca_nhan = $khung_chiu_thue*$money_chiu_thue_thu_nhap_ca_nhan;


            /**
             * lương thực tế net
             */
            $net = $gross - $money_tong_ba_bao_hiem - $money_dong_thue_thu_nhap_ca_nhan;

        }
        ?>
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">1. Lương gross : <?php echo $gross ?></p>
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">2. Phần trăm bảo hiểm y tế : <?php echo $medical ?></p>
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">3. Bảo hiểm y tế : <?php echo $money_bao_hiem_y_te ?></p>
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">4. Phần trăm bảo hiểm xã hội : <?php echo $social ?></p>
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">5. Bảo hiểm xã hội : <?php echo $money_bao_hiem_xa_hoi ?></p>
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">6. Phần trăm bảo hiểm thất nghiệp : <?php echo $work ?></p>
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">7. Bảo hiểm thất nghiệp : <?php echo $money_bao_hiem_that_nghiep ?></p>
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">8. Tổng 3 bảo hiểm : <?php echo $money_tong_ba_bao_hiem ?></p>
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">9. Thu nhập sau khi trừ bảo hiểm : <?php echo $money_thu_nhap_sau_bao_hiem ?></p>
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">10. Giảm trừ cá nhân : <?php echo $personal ?></p>
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">11. Số người phụ thuộc : <?php echo $quantity_family ?></p>
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">12. Giàm trừ theo 1 người phụ thuộc : <?php echo $family ?></p>
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">13. Tổng giảm trừ người phụ thuộc : <?php echo ($family*$quantity_family) ?></p>
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">14. Thu nhập chịu thuế : <?php echo $money_chiu_thue_thu_nhap_ca_nhan ?></p>
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">15. Khung chịu thuế : <?php echo $khung_chiu_thue ?></p>
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">16. Số tiền thuế thu nhập cá nhân phải đóng : <?php echo $money_dong_thue_thu_nhap_ca_nhan ?></p>
        <p id="net" style="color: #f7941d; margin: 30px; font-size: 24px">17. Lương net : <?php echo $net ?></p>
        <div style="height: 200px"></div>
    </div>
</div>


</body>
</html>