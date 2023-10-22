<?php
    session_start();
    if(isset($_SESSION["user"])){
        http_response_code(403);
        header("location: mainPage.php");
        exit();
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
        <form action="../backend/loginLogic.php" method="post">
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
        <a href="registration.php">Nem regisztrált még? Itt tud regisztrálni!</a><br>
        <a href="mainPage.php">Vissza a főoldalra.</a>
    </div>
</body>
</html>