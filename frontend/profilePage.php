<?php
    session_start();
    if(!isset($_SESSION["user"])){
        http_response_code(403);
        header("location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilom</title>
</head>
<body>
    <h1>Profile page</h1>
</body>
</html>