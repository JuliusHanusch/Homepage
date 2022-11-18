<?php

if (isset($_POST["submit"])){

    echo "it works";

    $name = $_POST["name"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name, $username, $pwd, $pwdRepeat) !== false){
        header("location: ../InternalArea/intern.php?error=emptyinput");
        exit();
    }

    if(invalidUid($username) !== false){
        header("location: ../InternalArea/intern.php?error=invaliduid");
        exit();
    }

    if(pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../InternalArea/intern.php?error=passwordmatch");
        exit();
    }
    
    if(uidExists($conn, $username) !== false){
        header("location: ../InternalArea/intern.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $username, $pwd);



}
else {
    header("location: ../InternalArea/intern.php");
    exit();
}