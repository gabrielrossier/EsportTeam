<?php

class teamController{

    public function getList()
    {
        
        if($_SESSION['width']<400){
            require "./view/team/teamsMobile.php";
        }
        else
        {
            require "./view/team/teams.php";
        }
    }
    public function create()
    {
        if($_SESSION['width']<400){
            require "./view/team/createMobile.php";
        }
        else
        {
            require "./view/team/create.php";
        }
    }





}




?>