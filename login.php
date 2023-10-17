<?php
    session_start();
    if(isset($_SESSION["user"])){
        header("location: mainPage.php");

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="regisLoginStyle.css">
    <title>Bejelentkezés</title>
</head>
<body>
    <div class="container">

    <?php
            if(isset($_POST["loginSubmit"])){
                $cegnev = $_POST["cegnev"];
                $cegszam = $_POST["jegyzekszam"];
                $jelszo = $_POST["jelszo"];
                require_once "db-conn.php";
                $query = "SELECT * FROM registeredcorps WHERE cegjegyzekszam = '$cegszam'";
                $eredmeny = mysqli_query($conn, $query);
                $user = mysqli_fetch_array($eredmeny, MYSQLI_ASSOC);
                if($user){
                    if(password_verify($jelszo, $user["jelszo"])){
                        session_start();
                        $_SESSION["user"] ="$cegnev";
                        header("location: mainPage.php");
                        die();
                    }else{
                        echo "<div class='alert alert-danger'>Jelszó nem egyezik</div>";
                    }
                }else{
                    echo "<div class='alert alert-danger'>Jegyzékszám nem egyezik</div>";
                }
            }
        ?>
        <form action="login.php" method="post">
        <div class="form-group">
                <input type="text" class="form-control" name="cegnev" placeholder="Cégnév">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="jegyzekszam" placeholder="Cégjegyzékszám">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="jelszo" placeholder="Jelszó">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Bejelentkezés" name="loginSubmit">
            </div>
        </form>
        <a href="mainPage.php">Vissza a főoldalra.</a>
    </div>
</body>
</html>