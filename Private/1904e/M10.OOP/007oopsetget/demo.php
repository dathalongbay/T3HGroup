<?php
/**
 * Created by PhpStorm.
 * User: datdo
 * Date: 9/1/2019
 * Time: 2:45 PM
 */

class User
{
    public $firstname;

    public $lastname;

    public $password;

    /**
     * Phương thức này được tự động gọi khi gán giá trị cho 1 thuộc tính bất kỳ
     *
     * @param $key
     *
     * @param $value
     */
    function __set($key, $value){

        echo $key;
        if ($key == 'lastname'){
            $this->lastname = ucfirst($value);
        }

        if ($key == 'firstname'){
            $this->firstname = ucfirst($value);
        }
    }

    /**
     * Phương thức này được gọi tự động khi truy cập đến 1 thuộc tính bất kỳ
     *
     * @param $key
     * @return string
     */
    function __get($key){
        if ($key == 'password'){
            return md5($this->password);
        }

        if ($key == 'fullname'){
            return $this->firstname . " " . $this->lastname;
        }
    }

}


/**
 * không giống như 1 số method bình thường
 * các magic method sẽ được gọi khi 1 hành động xảy ra
 * ví dụ __construct() được gọi khi ta khởi tạo đối tượng
 * bằng từ khóa new
 * __set() được tự động gọi khi gán giá trị cho thuộc tính
 * __get() được tự động gọi khi truy cập lấy giá trị thuộc tính
 */
$class = new User();
$class->lastname = 'do xuan';
$class->firstname = 'dat';
$class->password = '12345';
echo "<br> lastname : " . $class->lastname;
echo "<br> firstname : " . $class->firstname;
echo "<br> password : " . $class->password;