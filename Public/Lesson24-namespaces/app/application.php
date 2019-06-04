<?php
namespace App;

// Import Namespace với bí danh
/*use App\Models\Admin\UserModel as UM1;
use App\Models\Member\UserModel as UM2;*/

// Import namespace
use App\Models\Admin\UserModel;
class Application {

    public static function test() {
        echo '<br>' . __METHOD__;
    }

    public function test1() {
        echo '<br>' . __METHOD__;

        /**
         * Cách 1 không cần import namespace
         */
        /*$userModel = new \App\Models\Admin\UserModel();
        $userModel->test1();*/

        // Bi danh
        /*$userModel = new UM2();
        $userModel->test1();*/

        /**
         * Cách 2 import namespace
         */
        $userModel = new UserModel();
        $userModel->test1();
    }


}