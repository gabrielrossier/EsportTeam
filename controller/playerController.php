
<?php 

class playerController{


    function login()
    {
        if($_SESSION['width']<1000){
            require "./view/player/loginMobile.php";
        }
        else
        {
            require "./view/player/login.php";
        }
    }
} 

?>