<?php

if (isset($_POST["submit"])){

    echo "it works";

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
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