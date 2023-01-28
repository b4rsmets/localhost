<?php
namespace functions;
class mainController
{

    public function getRoute(){
        if($_GET['route']=='afisha'){
            require_once "./views/mainpage.php";
        }
        if($_GET['route']=='film'){
            require_once "./views/film.php";
        }
        if($_GET['route']=='soon'){
            require_once "./views/soon-cinema.php";
        }

    }
}