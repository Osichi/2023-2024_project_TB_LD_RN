<?php
session_start();
$connection = mysqli_connect("localhost","root","","project" );
if(isset($_POST['registerBtn']))
{
    $cegnev = $_REQUEST['cegnev'];
    $cegszam = $_REQUEST['cegszam'];
    $password = $_REQUEST['password'];

    $checkQuery = "SELECT * FROM registeredcorps WHERE cegjegyzekszam ='$cegszam'";
    $checkQueryEredmeny = mysqli_query($connection, $checkQuery);
    if(mysqli_num_rows($checkQueryEredmeny) == 0){
            $insert_query= "INSERT INTO registeredcorps(cegnev, cegjegyzekszam, jelszo) VALUES('$cegnev','$cegszam','$password')";
            $insert_query_run = mysqli_query($connection, $insert_query);
        
            
    }
    else{
        echo '<script>alert("Ez a cég már regisztrálva van!")</script>';
    }
}
?>