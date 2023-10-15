<?php
session_start();
$connection = mysqli_connect("localhost","root","","project" );

#register
if(isset($_POST['registerBtn']))
{
    $cegnev = $_REQUEST['cegnev'];
    $cegszam = $_REQUEST['cegszam'];
    $password = $_REQUEST['password'];

    $registerQuery = "SELECT * FROM registeredcorps WHERE cegjegyzekszam ='$cegszam'";
    $registerQueryEredmeny = mysqli_query($connection, $registerQuery);
    if(mysqli_num_rows($registerQueryEredmeny) == 0){
            $insert_query= "INSERT INTO registeredcorps(cegnev, cegjegyzekszam, jelszo) VALUES('$cegnev','$cegszam','$password')";
            $insert_query_run = mysqli_query($connection, $insert_query);
            header("location: ./login.php");
            
    }
    else{
        echo '<script>
        alert("Ez a cég már regisztrálva van!");
        window.location.href="./login.php";
        </script>';
    }
}

#login
if(isset($_POST['loginBtn']))
{
    $cegnev = $_REQUEST['cegnev'];
    $cegszam = $_REQUEST['cegszam'];
    $password = $_REQUEST['password'];

    $loginQuery = "SELECT * FROM registeredcorps WHERE cegnev = '$cegnev' and cegjegyzekszam = '$cegszam' AND jelszo = '$password' ";
    $loginQueryEredmeny = mysqli_query($connection, $loginQuery);
    $count = mysqli_num_rows($loginQueryEredmeny);
    if($count == 1){
        $_SESSION['cegnev'] = $logincegnev;
        header("location: ./mainPage.php");
    }
    else{
        echo "<script>
        alert('{$count}');
        window.location.href='./login.php';
        </script>";
    }
}
?>