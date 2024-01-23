<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="welcome.css">
        <title>Minden Egy Helyen</title>

        
</head>
<body>
    <style>
    </style>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-warning">MEH </span>Minden egy helyen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#welcome">Főoldal</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/login">Bejelentkezés</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/register">Regisztráció</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Rólunk</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Elérhetőségek</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="resources/views/1es.jpg"   alt="First slide">
      <div>
      <h5>Vlami</h5>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum dolores dolor
         repellat quasi expedita doloribus veniam repudiandae aut itaque, consequuntur 
         laudantium nostrum nobis tempora eveniet voluptatum eos assumenda mollitia veritatis,
          numquam sed esse? Animi, quam sit eligendi fugiat quaerat doloribus tenetur dolor
           vero quibusdam soetur ipsum accusantium eius quos! Inventore, fugiat tempora</p>
           </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/public/imgs/logo.jpg" alt="Second slide">
      <h5>Vlami</h5>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum dolores dolor
         repellat quasi expedita doloribus veniam repudiandae aut itaque, consequuntur 
         laudantium nostrum nobis tempora eveniet voluptatum eos assumenda mollitia veritatis,
          numquam sed esse? Animi, quam sit eligendi fugiat quaerat doloribus tenetur dolor
           vero quibusdam soetur ipsum accusantium eius quos! Inventore, fugiat tempora</p>
           </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/public/imgs/logo_trial.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</body>
</html>
