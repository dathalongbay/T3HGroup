<?php
include_once "app/controllers/controller.php";
include_once "app/controllers/backend/index.php";
include_once "app/controllers/backend/post.php";
include_once "app/controllers/frontend/index.php";
include_once "app/controllers/frontend/post.php";

/**
 * Muốn khởi tạo 1 đổi tượng từ class
 * IndexController nằm trong folder app/controllers/backend
 * Việc đầu tiên ?
 */
// nạp namespace bằng use cách 2
use \App\Controllers\Backend\IndexController;

$indexController = new IndexController();
$indexController->getInfo();

