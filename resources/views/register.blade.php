<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztáció</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Regisztáció</h1>
                </div>
                <div class="card-body">
                    @if (Session::has ('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get ('success')}}
                    </div>
                    @endif
                    <form action="{{route ('register')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="cegnev" class="form-label">Cégnév</label>
                            <input type="text" name="cegnev" class="form-control" id="cegnev" placeholder="Cégnév" required>
                        </div>
                        <div class="mb-3">
                            <label for="cegszam" class="form-label">Cégjegyzékszám</label>
                            <input type="text" name="cegszam" class="form-control" id="cegszam" placeholder="Cégjegyzékszám" required>
                        </div>
                        <div class="mb-3">
                            <label for="jelszo" class="form-label">Jelszó</label>
                            <input type="password" name="jelszo" class="form-control" id="jelszo" placeholder="********" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">Regisztáció</button>
                            </div>
                        </div>
                        
                    </form>
                    <div class="mb-3">
                        <div class="d-grid">
                            <a href="/"><button class="btn btn-primary" style="width: 100%;">Vissza a főoldalra</button></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>