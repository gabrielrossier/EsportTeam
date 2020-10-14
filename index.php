
<?php
session_start();

require_once "controller/player.php";
require_once "controller/team.php";

$controller = $_GET['controller'] . "Controller";
$action = $_GET['action'];
$id = intval($_GET['id']);
if (empty($controller) || empty($action)) {
    require_once "view/homepage.view.php";
} else {
    if (class_exists($controller)) {
        $ctr = new $controller();
        if (method_exists($ctr, $action)) {
            if ($id) {
                $ctr->$action($id);
            } else {
                $ctr->$action();
            }
        } else {
            require_once "view/errors/404.view.php";
        }
    } else {
        require_once "view/errors/404.view.php";
    }
}
?>