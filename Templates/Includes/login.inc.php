<?php

if (isset($_POST["submit"])){

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];


    require_once 'dbh.inc.php';

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once 'functions.inc.php';


    if(emptyInputLogin($username, $pwd) !== false){
        header("location: ../InternalArea/login.php?error=emptyinput");
        exit();
    }


    loginUser($conn, $username, $pwd);


}
else{
    header("location: ../InternalArea/login.php");
}