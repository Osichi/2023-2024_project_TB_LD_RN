<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="mainPageStyle.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>mainPage</h1>
    </div>
    <nav>
        <?php if (isset($_SESSION["user"])) {
            echo "Üdvözöllek ".$_SESSION['user']."!";
            echo "<a href='profilePage.php'>Profilom</a>";
            echo"<a href='../backend/logout.php'>Kilépés</a>";
    }
    else {
        echo"<a class='link-info' href='registration.php'>Regisztráció</a>";
        echo"<a class='link-success' href='login.php'>Belépés</a>";}?>
    
    </nav>
</body>
</html>