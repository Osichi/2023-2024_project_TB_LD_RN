<?php
            $cegnev = $_POST["nev"];
            $cegszam = $_POST["jegyzekszam"];
            $jelszoelso = $_POST["jelszo"];
            $jelszomegint = $_POST["jelszo_check"];

            $passwordhash = password_hash($jelszoelso, PASSWORD_DEFAULT);

            $errors = array();
            if(empty($cegnev) OR empty($cegszam) OR empty($jelszoelso) OR empty($jelszomegint)){
                http_response_code(400);
                array_push($errors, "Minden mezőt ki kell tölteni.");
                exit();
            }
            if(strlen($jelszoelso)<8){
                http_response_code(400);
                array_push($errors, "Jelszónak legalább 8 karakterből kell állnia.");
                exit();
            }
            if($jelszoelso !== $jelszomegint){
                http_response_code(400);
                array_push($errors, "A két jelszó nem egyezik meg.");
                exit();
            }

            require_once "db-conn.php";
            $query = "SELECT * FROM registeredcorps WHERE cegjegyzekszam = '$cegszam'";
            $eredmeny = mysqli_query($conn, $query);
            $row = mysqli_num_rows($eredmeny);
            if($row>0){
                http_response_code(400);
                array_push($errors, "Ez a cég már regisztrálva van!");
                exit();
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
                    http_response_code(200);
                    echo "<div class='alert alert-success'>Sikeresen regisztrált!</div>";
                    header("location: ../frontend/login.php");
                }else{
                    http_response_code(500);
                    die("Something went wrong server side");
                }
            }

?>