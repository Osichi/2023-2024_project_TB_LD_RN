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
    <title>Regisztrálás</title>
</head>
<body>
    <div class="container">

        <form action="registrationLogic.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="nev" placeholder="Cég neve">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="jegyzekszam" placeholder="Cégjegyzékszám">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="jelszo" placeholder="Jelszó">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="jelszo_check" placeholder="Jelszó megint">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Regisztrálás" name="registerSubmit">
            </div>
        </form>
        <a href="mainPage.php">Vissza a főoldalra.</a>
    </div>
</body>
</html>