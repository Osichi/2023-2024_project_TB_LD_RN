<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Profil</title>
</head>
<body>

@if (Session::has ('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get ('success')}}
                    </div>
                    @endif
                    <h1>{{Session::get('nev')}} proiflja</h1>
                    <form action="{{route ('update') }}" method="put">
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
                            <label for="jelszo" class="form-label">Jelszó</label>
                            <input type="password" name="jelszo" class="form-control" id="jelszo" value="{{Session::get('jelszo')}}" required>
                            <input type="checkbox" onclick="jelszoHide()">Jelszó megjelenítése
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Adatok frissítése</button>
                            </div>
                        </div>
                        
                    </form>
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
                    </script>
</body>
</html>