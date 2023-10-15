<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginStyle.css">
    <title>Document</title>
</head>
<body>
<form action="db.php" method="POST">
    <div id="log">
        <center><h4>Bejelentkezés</h4></center>
        <label>Cégnév</label><input type="text" name="cegnev" ><br>
        <label>Cégjegyzékszám</label><input type="text" name="cegszam" ><br>
        <label>Jelszó</label><input type="password" name="password" ><br>
        <button type="submit" name="loginBtn">Login</button>
        <br><br><br> 
        <a href="#" onclick="register()" >Nincs regisztrálva a cége? Itt tud regisztrálni!</a>
    </div>

    <div id="regis">
        <center><h4>Register</h4></center>
        <label>Cégnév</label><input type="text" name="cegnev" ><br>
        <label>Cégjegyzékszám</label><input type="text" name="cegszam" ><br>
        <label>Jelszó</label><input type="password" name="password" ><br>
        <Button type="submit" name="registerBtn">Register</Button><br><br><br>
        <a href="#" onclick="login()" >Regisztrálták már a cégét? Itt tud bejelentkezni!</a>
    </div>
    <a href="./mainPage.php">Vissza a föoldalra.</a>
</form>

<script src="jquery.js"></script>   
<script>
function register(){
    document.getElementById('log').style.display = "none";
    document.getElementById('regis').style.display = "block";
}

function login(){
    document.getElementById('regis').style.display = "none";
    document.getElementById('log').style.display = "block";
    }

</script>
</body>
</html>