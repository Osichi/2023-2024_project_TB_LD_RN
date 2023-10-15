<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
<nav>
    <?php
        if (isset($_SESSION['cegnev'])){
            echo"<p>".$_SESSION['cegnev']."</p>";
        }
    ?>
    <a href="login.php">Belépés</a>   
</nav>
</body>
</html>