<?php

$serverName = "rdbms.strato.de";
$dbUsername = "dbu1685182";
$dbPassword = "310500Database";
$dbName = "dbs9205526";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}