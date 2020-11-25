<?php 

class mainController{

    function selectVersion()
    {
        require "./view/main/version.php";
    }
    function setMobile()
    {
        $_SESSION["width"] = 300;
        require "./view/homepageMobile.view.php";



    }
    function setComputer()
    {
        $_SESSION["width"] = 500;
        require "./view/homepage.view.php";


    }
}


?>