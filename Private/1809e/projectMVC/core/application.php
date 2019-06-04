<?php
class Application {

    public function __construct()
    {

    }

    public function run() {

        // http://localhost/github/1809ephpmvc/index.php?controller=post&action=edit&id=1
        echo '<pre>';
        print_r($_REQUEST);
        echo '</pre>';

        /**
         * Sử dụng lệnh require_once hay include_once
         * để khởi tạo class controller tương ứng với tham số controller từ trên trình duyệt
         * ví dụ
         * http://localhost/1809ephpmvc/index.php
         * http://localhost/1809ephpmvc/index.php?controller=post&action=edit&id=1
         * $controllerClass = new PostController();
         * http://localhost/1809ephpmvc/index.php?controller=category&action=index&id=1
         * http://localhost/1809ephpmvc/index.php?controller=category&action=create&id=1
         * http://localhost/1809ephpmvc/index.php?controller=category&action=edit&id=1
         * http://localhost/1809ephpmvc/index.php?controller=category&action=delete&id=1
         * $controllerClass = new CategoryController();
         * http://localhost/1809ephpmvc/index.php?controller=comment&action=edit&id=1
         * $controllerClass = new CommentController();
         */
        require_once  CONTROLLER_PATH."/ErrorController.php";
        require_once  CONTROLLER_PATH."/IndexController.php";
        if (isset($_REQUEST['controller']) && ($_REQUEST['controller'])) {
            $controllerName = ucfirst($_REQUEST['controller']) . 'Controller';
            $actionName =$_REQUEST['action'] . 'Action';
        } else {
            $controllerName = 'IndexController';
        }

        $controllerPath = CONTROLLER_PATH . '/' . $controllerName . '.php';
        if (file_exists($controllerPath)) {
            require_once $controllerPath;
        }
        if (class_exists($controllerName)) {
            $controller = new $controllerName();

            if(method_exists($controller,$actionName)){
                $controller->$actionName();
            }else{
                $controller = new ErrorController();
                 $controller->index();
            }

        } else {
            $controller = new ErrorController();
        }





    }


}



