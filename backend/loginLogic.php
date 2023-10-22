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
                    if($user["cegnev"] == $cegnev){
                            if(password_verify($jelszo, $user["jelszo"])){
                                session_start();
                                $_SESSION["user"] ="$cegnev";
                                http_response_code(200);
                                header("location: ../frontend/mainPage.php");
                                die();
                            }else{
                                http_response_code(400);
                                echo "<div class='alert alert-danger'>Jelszó nem egyezik</div>";
                                exit();
                            }
                    }else{
                        http_response_code(400);
                        echo "<div class='alert alert-danger'>Nem található ilyen cégnév!</div>";
                        exit();
                    }
                }else{
                    http_response_code(400);
                    echo "<div class='alert alert-danger'>Jegyzékszám nem létezik</div>";
                    exit();
                }
            }
?>