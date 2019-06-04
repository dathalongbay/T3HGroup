<?php
/**
 * Created by PhpStorm.
 * User: T3H
 * Date: 1/7/2019
 * Time: 6:30 PM
 */

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
    if(isset($_REQUEST['thamso1']) && isset($_REQUEST['thamso2'])){

        echo 'Tong :' . $val =$_REQUEST['thamso1'] + $_REQUEST['thamso2'];
        echo '<br>';
        echo 'Hieu :'. $val1 =$_REQUEST['thamso1'] - $_REQUEST['thamso2'];
        echo '<br>';
        echo 'Tich :'. $val2 =$_REQUEST['thamso1'] * $_REQUEST['thamso2'];
        echo '<br>';
        echo 'Thuong :'. $val3 =$_REQUEST['thamso1'] / $_REQUEST['thamso2'];
    }else{
        echo 'ERROR!';
    }


