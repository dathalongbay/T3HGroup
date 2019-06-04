<?php
/**
 * Database nằm trong namespace root
 *
 */
class Database {
    public static function test() {
        echo '<br>' . __METHOD__;
    }

    public function database2() {

        $userController = new \App\Controllers\Admin\UserController();
        $userController->test1();

    }
}