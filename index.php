
<?php
session_start();

?>

<?php
require_once "controller/playerController.php";
require_once "controller/teamController.php";
require_once "controller/mainController.php";

if(!isset($_SESSION["width"]))
{
   $mc = new  mainController();
   $mc->selectVersion();
}
$controller = $_GET['controller'] . "Controller";
$action = $_GET['action'];
$id = intval($_GET['id']);
if (empty($controller) || empty($action)) {
    if($_SESSION['width']<400){
        require_once "view/homepageMobile.view.php";
    }
    else
    {
        require_once "view/homepage.view.php";
    }
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
            require_once "view/homepage.view.php";
        }
    } else {
        require_once "view/errors/404.view.php";
    }
}
?>