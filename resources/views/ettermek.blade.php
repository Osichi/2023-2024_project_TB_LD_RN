<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <title>Éttermek</title>
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
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/"><span class="text-success" id="MEH">MEH </span>Minden egy helyen</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/" onclick="scrollToWelcome()">Főoldal</a>
          </li>
          @if (Session::has('nev'))
          <li class="nav-item" style="color: red;">
            Üdv {{Session::get('nev')}}
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/profile">Profilom</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/feltoltes">Feltöltés</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">Kijelentkezés</a>
          </li>
          @elseif (Session::has('admin'))
          <li class="nav-item">
            Üdv {{Session::get('admin')}}
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">Kijelentkezés</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin">Admin panel</a>
          </li>
          @else
          <li class="nav-item active">
            <a class="nav-link" href="/login">Bejelentkezés</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/register">Regisztráció</a>
          </li>
          @endif
          <li class="nav-item active">
            <a class="nav-link" href="#team" onclick="scrollToRolunk()">Rólunk</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#contact" onclick="scrollTocontact()">Elérhetőségek</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <style>
    * {
      font-family: montserrat;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Poppins, sans-serif;
    }

    body {
      background: #002721;
      color: white;

    }


    .navbar-nav a {
      position: relative;
      font-size: 18px;
      color: #00816D;
      font-weight: 500;
      text-decoration: none;
      margin-left: 40px;
    }

    .navbar-nav a::before {
      content: '';
      position: absolute;
      top: 100%;
      left: 0;
      width: 0;
      height: 2px;
      background: #002721;
      transition: .3s;
    }

    .navbar-nav a:hover::before {
      width: 100%;
      color: #002721;
    }

    .navbar-light .navbar-brand {
      color: #000;
      font-size: 25px;
      text-transform: uppercase;
      font-weight: 700;
      letter-spacing: 2px;
    }

    .navbar-light .navbar-brand:focus,
    .navbar-light .navbar-brand:hover {
      color: #00816D;
    }

    .navbar-light .navbar-nav .navbar-link {
      color: #00816D;
    }
  </style>

  @foreach($posts as $post)
  <div class="card" style="width: 18rem;">
    <img src='{{$post->kep}}' class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">{{$post->nev}}</h5>
      <ul>
        <li>{{$post->telefonszam}}</li>
        <li>{{$post->cim}}</li>
        <li>{{$post->kategoria}}</li>
      </ul>
      <a href="{{$post->weboldal}}" class="btn btn-primary">Online elérhetőség</a>
      @if(Session::has('admin'))
      <a href="{{url('/deleteLoc/'.$post->id) }}" onclick="return confirm('Biztos törölni akarod?')" class="btn btn-danger">Törlés</a>
      @endif
    </div>
  </div>
  @endforeach

</body>

</html>