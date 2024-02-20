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
        <div class="signup">
            <div class="main">
                @if (Session::has ('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get ('success')}}
                </div>
                @elseif(Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get ('error')}}
                </div>
                @endif
                <input type="checkbox" id="chk" aria-hidden="true">

                <div class="signup">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <label for="chk" aria-hidden="true">Sign up</label>
                        <input type="text" placeholder="Cégjegyzékszám" id="cegszam" name="cegszam" required>
                        <input type="text" placeholder="Cégnév" id="cegnev" name="cegnev" required>
                        <input type="password" placeholder="Jelszó" id="jelszo" name="jelszo" required>
                        <button>Regisztráció</button>
                        <a href="/" class="link">Vissza a főoldalra!</a>
                    </form>
                </div>

                <div class="login">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <label for="chk" aria-hidden="true">Login</label>
                        <input type="text" placeholder="Cégjegyzékszám" id="cegszam" name="cegszam" required>
                        <input type="password" name="jelszo" id="jelszo" placeholder="Jelszó" required>
                        <button>Belépés</button>
                        <a href="/">Vissza a főoldalra!</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>