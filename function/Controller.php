<?php


class Controller
{

    public function invoke(){
        if($_GET['route']== "login" ){
            $this->login();
        }elseif ($_GET['route']=="postlogin"){
            $this->postlogin();
        }elseif ($_GET['route']=="register"){
            $this->register();
        }elseif ($_GET['route']=="listuser"){
            $this->listuser();
        }else{
            echo "404 Not Found";
        }
    }

    public function login(){
        include_once("views/demo/login.php");
    }
    public function postlogin(){
        include_once("views/demo/postLogin.php");
    }

    public function register(){
        include_once ("views/demo/create-account.php");
    }

    public function listuser(){
        include_once("views/demo/list-user.php");
    }
}
$controller = new Controller();
$controller->invoke();