<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/profile.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Profil</title>
</head>

<body>

    @if (Session::has ('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get ('success')}}
    </div>
    @elseif(Session::has('error'))
    <div class="alert alert-danger" role="alert">
        {{Session::get ('error')}}
    </div>
    @endif
    <h1>{{Session::get('nev')}} profilja</h1>
    <div class="container">
        <div class="row">
            <div class="col-12" id="">
                <h2>Profilkép módosítása</h2>
                <img class="img-fluid" src="{{Session::get('profilkep')}}" alt="kep" width=100px>
                <form action="{{route('updatePic')}}" method="post" class="">
                    @csrf
                    <div class="">
                        <label for="kep" class="form-label">Profilképnek csak linket lehet megadni!</label>
                        <input class="form-control" type="text" id="kep" name="kep" value="{{Session::get('profilkep')}}" required>
                    </div>
                    <div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Kép feltöltése </button>
                        </div>
                    </div>
                </form>
            </div>
        

    
            <div class="col-12">
                <h2>Adatok módosítása</h2>
                <form action="{{route ('update') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="cegnev" class="form-label">Cégnév</label>
                        <input type="text" name="cegnev" class="form-control" id="cegnev" value="{{Session::get('nev')}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="cegszam" class="form-label">Cégjegyzékszám</label>
                        <input type="text" name="cegszam" class="form-control" id="cegszam" value="{{Session::get('cegszam')}}" required>
                    </div>

                    <div class="mb-3">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Adatok frissítése</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <h2>Jelszó módosítása</h2>
                <form action="{{route('updatePWD')}}" method="post">
                    <div class="mb-3">
                        @csrf
                        <label for="jelszo" class="form-label">Jelelegi jelszó</label>
                        <input type="password" name="jelszo" class="form-control" id="jelszo" placeholder='******' required>
                        <input type="checkbox" onclick="jelszoHide()">Jelszó megjelenítése
                        <br>
                        <label for="">Új jelszó</label>
                        <input type="password" name="ujjelszo" class="form-control" id="ujjelszo" placeholder="******" required>
                        <input type="checkbox" onclick="ujJelszoHide()">Jelszó megjelenítése
                    </div>
                    <div class="mb-3">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Jelszó frissítése</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div>
        <h1 style="color:red;">Veszél zóna!</h1>
    </div>

    <div class="text-center">
        <small><a href="/">Vissza a főoldalra</a></small>
    </div>

    <script>
        function jelszoHide() {
            var x = document.getElementById("jelszo");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function ujJelszoHide() {
            var x = document.getElementById("ujjelszo");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>