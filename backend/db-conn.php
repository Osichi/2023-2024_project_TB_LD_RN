<?php

$hostName = "localhost";
$dbUser = "root";
$dbPwd = "";
$dbName = "project";

$conn = mysqli_connect($hostName, $dbUser, $dbPwd, $dbName);
if(!$conn){
    http_response_code(500);
    die("something went wrong server side;");
}

?>