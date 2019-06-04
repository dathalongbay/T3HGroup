<?php
session_start();

$site_path = dirname(__FILE__);
define('SITE_PATH', $site_path);
define('IS_ADMIN', 0);
define('APP_PATH', SITE_PATH.'/app');
define('CONTROLLER_PATH', SITE_PATH.'/app/controllers');
define('MODEL_PATH', SITE_PATH.'/app/models');
define('VIEW_PATH', SITE_PATH.'/app/views');
define('CORE_PATH', SITE_PATH.'/core');
define('DB_PATH', SITE_PATH.'/core/database');
define('HELPER_PATH', SITE_PATH.'/core/helper');
define('URL', 'http://localhost/github/1809ephpmvc/');
define('URL_ASSETS', URL.'assets/');

$application_path = CORE_PATH . '/' . 'application.php';
include_once $application_path;
$app = new Application();

$app->run();




