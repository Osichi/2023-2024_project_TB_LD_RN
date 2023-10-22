<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>mainPage</h1>
    </div>

    <ul>
        <?php if (isset($_SESSION["user"])) {
        echo"<li style='color:red;'>".$_SESSION['user']."</li>";
        echo"<li><a href='../backend/logout.php'>Kilépés</a></li>";}
    else {
        echo"<li><a href='registration.php'>Regisztráció</a></li>";
        echo"<li><a href='login.php'>Belépés</a></li>";}?>
    </ul>

</body>
</html>