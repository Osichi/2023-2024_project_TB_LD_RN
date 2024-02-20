<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{url('css/loginreg.css')}}">

    <title>Bejelentkezés</title>
</head>

<body>


    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form>
                <label for="chk" aria-hidden="true">Regisztráció</label>
                <small>Hozzon létre egy új fiókot!</small>
                <input type="text" name="txt" placeholder="Cégnév" required="">
                <input type="email" name="email" placeholder="Cégjegyzékszám" required="">
                <input type="password" name="pswd" placeholder="Jelszó" required="">
                <button>Regisztráció</button>
                <a href="/" class="link">Vissza a főoldalra!</a>
            </form>
        </div>

        <div class="login">
            <form>
                <label for="chk" aria-hidden="true">Bejelentkezés</label>
                <small>Lépjen be meglévő fiókjába!</small>
                <input type="email" name="email" placeholder="Cégjegyzékszám" required="">
                <input type="password" name="pswd" placeholder="Jelszó" required="">
                <button>Belépés</button>
                <a href="/">Vissza a főoldalra!</a>
            </form>
        </div>
        
    </div>
</body>

</html>