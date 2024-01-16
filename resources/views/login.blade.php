<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Bejelentkezés</title>
</head>
<body>
    <style></style>
    
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Bejelentkezés</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
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
                                <button class="btn btn-primary">Bejelentkezés</button>
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