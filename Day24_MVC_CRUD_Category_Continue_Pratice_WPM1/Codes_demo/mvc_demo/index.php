<?php

$controller = isset($_GET['controller']) ? $_GET['controller'] :
    'category'; //category
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller = ucfirst($controller);
$controller .= "Controller";
$path_controller = "controllers/$controller.php";
if (!file_exists($path_controller)) {
  die("Trang bạn tìm ko tồn tại");
}
require_once "$path_controller";

$obj = new $controller();

if (!method_exists($obj, $action)) {
  die("Không tồn tại phương thức $action trong class $controller");
}
$obj->$action();
