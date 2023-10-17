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

        <?php
            $cegnev = $_POST["nev"];
            $cegszam = $_POST["jegyzekszam"];
            $jelszoelso = $_POST["jelszo"];
            $jelszomegint = $_POST["jelszo_check"];

            $passwordhash = password_hash($jelszoelso, PASSWORD_DEFAULT);

            $errors = array();
            if(empty($cegnev) OR empty($cegszam) OR empty($jelszoelso) OR empty($jelszomegint)){
                array_push($errors, "Minden mezőt ki kell tölteni.");
            }
            if(strlen($jelszoelso)<8){
                array_push($errors, "Jelszónak legalább 8 karakterből kell állnia.");
            }
            if($jelszoelso !== $jelszomegint){
                array_push($errors, "A két jelszó nem egyezik meg.");
            }

            require_once "db-conn.php";
            $query = "SELECT * FROM registeredcorps WHERE cegjegyzekszam = '$cegszam'";
            $eredmeny = mysqli_query($conn, $query);
            $row = mysqli_num_rows($eredmeny);
            if($row>0){
                array_push($errors, "Ez a cég már regisztrálva van!");
            }


            if(count($errors)>0){
                foreach($errors as $error){
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }else{
                require_once "db-conn.php";
                $query = "INSERT INTO registeredcorps (cegnev, cegjegyzekszam, jelszo) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt, $query);
                if($prepareStmt){
                    mysqli_stmt_bind_param($stmt, "sss", $cegnev, $cegszam, $passwordhash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>Sikeresen regisztrált!</div>";
                    header("location: login.php");
                }else{
                    die("Something went wrong server side");
                }
            }


        ?>
    
        <form action="registration.php" method="post">
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