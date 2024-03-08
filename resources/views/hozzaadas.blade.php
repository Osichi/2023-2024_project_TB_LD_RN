<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Hozzáadás</title>
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
                        <form action="{{ route('feltolt') }}" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg fs-6" placeholder="Név" id="nev" name="nev" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg fs-6" placeholder="Telefonszám" id="teloszam" name="teloszam">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg fs-6" placeholder="Cím" id="cim" name="cim" required>
                            </div>
                            <div class="input-group mb-3">
                            <select class="form-select" aria-label="Default select example" id="kategoria" name="kategoria" required>
                            <option selected>Kategória</option>
                            <option value="Bár">Bár</option>
                            <option value="Étterem">Étterem</option>
                            <option value="Kajálda">Kajálda</option>
                            </select>
                            </div>
                            <div class="input-group mb-3">
                            <textarea class="form-control" placeholder="Leírás"  id="leiras" name="leiras"></textarea>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg fs-6" placeholder="Kép" id="kep" name="kep" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg fs-6" placeholder="Weboldal címe" id="weboldal" name="weboldal" required>
                            </div>
                            <button class="btn btn-lg w-100 mb-3">Feltöltés</button>
                        </form>
</body>
</html>