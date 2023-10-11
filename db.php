<?php
session_start();
$connection = mysqli_connect("localhost","root","","project" );
if(isset($_POST['registerBtn']))
{
    $cegnev = $_REQUEST['cegnev'];
    $cegszam = $_REQUEST['cegszam'];
    $password = $_REQUEST['password'];

    $insert_query= "INSERT INTO registeredcorps(cegnev, cegjegyzekszam, jelszo) VALUES('$cegnev','$cegszam','$password')";
    $insert_query_run = mysqli_query($connection, $insert_query);

    if($insert_query_run)
    {
        $_SESSION['status']= "Data inserted succesfully";
        header('location: index.php');
       
    }
    else{
        $_SESSION['status']="data not inserted succesfully";
        header('location: index.php');
        
    }
}
?>