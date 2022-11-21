<?php

session_start();
session_unset();
session_destroy();


if(isset($_GET["currentSite"])){
    echo "test1";
    if($_GET["currentSite"] == "julius"){
        header("location: ../PersonalSites/julius.php");
    }
    else if($_GET["currentSite"] == "cornelius"){
        header("location: ../PersonalSites/cornelius.php");
        exit();
    }
    else if($_GET["currentSite"] == "olivia"){
        header("location: ../PersonalSites/olivia.php");
        exit();
    }
}
else{
    header("location: ../../index.php");
    exit();
}
