<?php

$hostName = "localhost";
$dbUser = "root";
$dbPwd = "";
$dbName = "project";

$conn = mysqli_connect($hostName, $dbUser, $dbPwd, $dbName);
if(!$conn){
    die("something went wrong server side;");
}

?>