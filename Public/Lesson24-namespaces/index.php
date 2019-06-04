<?php
/**
 * Created by PhpStorm.
 * User: T3H
 * Date: 11/25/2018
 * Time: 3:15 PM
 */
$site_path = dirname(__FILE__);
define('SITE_PATH', $site_path);
define('IS_ADMIN', 0);
define('APP_PATH', SITE_PATH.'/app');
define('CONTROLLER_PATH', SITE_PATH.'/app/controllers');
define('CONTROLLER_PATH1', SITE_PATH.'/app/controllers/admin');
define('CONTROLLER_PATH2', SITE_PATH.'/app/controllers/member');
define('CONTROLLER_PATH3', SITE_PATH.'/app/controllers/publics');
define('MODEL_PATH', SITE_PATH.'/app/models');
define('MODEL_PATH1', SITE_PATH.'/app/models/admin');
define('MODEL_PATH2', SITE_PATH.'/app/models/member');
define('MODEL_PATH3', SITE_PATH.'/app/models/publics');
define('VIEW_PATH', SITE_PATH.'/app/views');
define('CORE_PATH', SITE_PATH.'/core');
define('DB_PATH', SITE_PATH.'/core/database');
define('HELPER_PATH', SITE_PATH.'/core/helper');
define('URL', 'http://localhost/phpmvcbyme/phpmvc/');
define('URL_ASSETS', URL.'assets/');
spl_autoload_register(function ($class_name) {
    $paths = array(SITE_PATH, APP_PATH, CONTROLLER_PATH,CONTROLLER_PATH1,CONTROLLER_PATH2,
        CONTROLLER_PATH3, MODEL_PATH1, MODEL_PATH2, MODEL_PATH3,MODEL_PATH, VIEW_PATH, CORE_PATH, DB_PATH, HELPER_PATH);
    foreach ($paths as $class_file_path) {
        $full_path = $class_file_path.'/'.$class_name.'.php';
        if (file_exists($full_path)) {
            require $full_path;
        }
    }
});

Database::test();

$db = new Database();
$db->database2();

/**
 * Cách 1
 */
$app1 = new \App\Application();
$app1->test1();

/**
 * Cách 2
 */
use App\Application;
$app = new Application();
$app->test1();

