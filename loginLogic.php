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