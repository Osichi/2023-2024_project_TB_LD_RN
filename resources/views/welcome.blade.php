<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/777beffd71.js" crossorigin="anonymous"></script>
  <title>Minden Egy Helyen</title>
</head>

<body>
  <script>
    function scrollToWelcome() {
      var welcomeSection = document.getElementById('welcome');
      if (welcomeSection) {
        welcomeSection.scrollIntoView({
          behavior: 'smooth'
        });
      }
    }

    function scrollToRolunk() {
      var rolunkSection = document.getElementById('team');
      if (rolunkSection) {
        rolunkSection.scrollIntoView({
          behavior: 'smooth'
        });
      }
    }

    function scrollToContact() {
      var contactkSection = document.getElementById('contact');
      if (contactSection) {
        contactSection.scrollIntoView({
          behavior: 'smooth'
        });
      }
    }
    window.addEventListener("scroll", function() {
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);
    })
  </script>

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


    .navbar-brand .text-warning {
      color: #00816D;
    }

    .btn-warning {
      color: white;
      background: #00816D;
      border: #00816D;
    }

    .btn-warning:hover {
      color: white;
      background: #002721;
      border: #002721;
    }

    .section-padding {
      padding: 100px 0;
    }

    .carousel-item {
      height: 100vh;
      min-height: 300px;
    }

    .carousel-caption {
      bottom: 220px;
      z-index: 2;
      opacity: 1;
    }

    .carousel-caption h5 {
      font-size: 45px;
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-top: 25px;
      opacity: 1;
    }

    .carousel-caption p {
      width: 60%;
      margin: auto;
      font-size: 18px;
      line-height: 1.9;
      opacity: 1;
    }

    .carousel-inner::before {
      content: '';
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.7);
      z-index: 1;
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

    .w-100 {
      height: 100vh;
    }

    .services .card-body i {
      font-size: 50px;
    }

    .team .card-body i {
      font-size: 20px;
    }

    .portfolio .card {
      box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);
    }

    .team .card {
      box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);
    }

    .img-fluid {
      max-width: 100%;
      height: 200px;
      border-radius: 50%;
    }

    .img-fluid:hover {
      opacity: 0.8;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-item {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      padding: 12px 16px;
      z-index: 1;
    }

    .dropdown:hover .dropdown-item {
      display: block;
      border: none;
    }



    .card {
      border: none;
      border-radius: 0;
      box-shadow: 2px;
    }

    .image-wrapper {
      height: 22vw;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .image-wrapper img {
      max-width: 100%;
      max-height: 100%;
    }

    .card-wrapper {
      display: flex;
      box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);
    }

    .lapok .card {
      margin: 0 .5em;
      width: calc(100%/3);

    }

    /* === Responsive css ===*/

    @media only screen and (min-width: 767px) and (max-width:991px) {
      .carousel-caption {
        bottom: 370px;
      }

      .carousel-caption p {
        width: 100%;
      }

      .card {
        margin-bottom: 30px;
      }

      .img-area img {
        width: 100%;
      }
    }

    @media only screen and (max-width: 767px) {
      .navbar-nav {
        text-align: center;
      }

      .carousel-caption {
        bottom: 125px;
      }

      .carousel-caption h5 {
        font-size: 17px;
      }

      .carousel-caption a {
        padding: 10px 15px;
      }

      .carousel-caption p {
        width: 100%;
        line-height: 1.6;
        font-size: 12px;
      }

      .about-text {
        padding-top: 50px;
      }

      .card {
        margin-bottom: 30px;
      }

    }
  </style>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><span class="text-success" id="MEH">MEH </span>Minden egy helyen</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#carouselExampleCaptions" onclick="scrollToWelcome()">Főoldal</a>
          </li>
          @if (Session::has('nev'))
          <li class="nav-item" style="color: red;">
            Üdv {{Session::get('nev')}}
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/profile">Profilom</a>
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown menü
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Elem 1</a>
              <a class="dropdown-item" href="#">Elem 2</a>
              <a class="dropdown-item" href="#">Elem 3</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <script>
    var msg = '{{Session::get('
    alert ')}}';
    var exist = '{{Session::has('
    alert ')}}';
    if (exist) {
      alert(msg);
    }
  </script>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 " src="./imgs/ezgif-3-ae21c7af7c.jpg" alt="...">
        <div class="carousel-caption">
          <h5 class="animate__animated animate__zoomIn animate__delay-0.5s">Éttermek</h5>
          <p class="animate__animated animate__flipInX animate__delay-0.5s">Találd meg kedvenc éttermedet Szegeden és környékén! </p>
          <p class="animate__animated animate__flipInX animate__delay-0.5s"><a href="/resources/views/etterem.blade.php" class="btn btn-warning mt-3">Irány az éttermekhez!</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./imgs/center.jpg" alt="...">
        <div class="carousel-caption">
          <h5 class="animate__animated animate__zoomIn animate__delay-0.5s">Bárok</h5>
          <p class="animate__animated animate__zoomIn animate__delay-0.5s">Találd meg számodra a legjobb választást egy hétvégi iszogatásra, baráti összejövetelre vagy egy kis erezd el a hajadra.</p>
          <p class="animate__animated animate__zoomIn animate__delay-0.5s"><a href="#" class="btn btn-warning mt-3">Irány a bárokhoz!</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./imgs/fooldal2.webp" alt="...">
        <div class="carousel-caption">
          <h5 class="animate__animated animate__zoomIn animate__delay-0.5s">Büfék</h5>
          <p class="animate__animated animate__zoomIn animate__delay-0.5s">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum dolores dolor
            repellat quasi expedita doloribus veniam repudiandae aut itaque, consequuntur
            laudantium nostrum nobis tempora eveniet voluptatum eos assumenda mollitia veritatis,
            numquam sed esse? Animi, quam sit eligendi fugiat quaerat doloribus tenetur dolor
            vero quibusdam soetur ipsum accusantium eius quos! Inventore, fugiat tempora</p>
          <p class="animate__animated animate__zoomIn animate__delay-0.5s"><a href="#" class="btn btn-warning mt-3">Irány a büfékhez!</a></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Előző</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Következő</span>
    </button>
  </div>
  </div>



  <!--A szekciókról -->
  <section id="about" class="about section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
          <div class="about-img">
            <img src="./imgs/logo.png" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
          <div class="about-text">
            <h2>A legjobb teljesítményt <br> nyújtva</h2>
            <p>Feladatunk és célunk, hogy a legjobb teljesítményt nyújtsuk az érdeklődőknek akik a számukra ideális helyet keresik egy születés napi ebédhez vagy ivászathoz, vagy csak
              szimplán kajálnának egy jót. A weboldal az egyszerűbb keresésen alapszik, hogy az ember az adott városban a legjobban értékelt helyeket könnyedén megtalálja. Célunk hogy az éttermek
              úgy lássák, hogy van értelme regisztrálni a cégüket, mert a könnyeb keresésnek hála az eldugodtabb helyek is könnyedén megtalálhatók!
            </p>
            <a href="#" class="btn btn-warning">Tudj meg többet!</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Szolgáltatásaink  section -->


  <!-- porfolio section -->

  <section id="portfolio" class="portfolio section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Legjobb éttermek!</h2>
            <p>A hónap legjobb értékelését kapott éttermek Szegeden!<br> Itt láthatod a legjobb éttermeket amelyek talán kedvedre lesznek!</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb4">
                <img src="./imgs/fooldal.jpg" alt="" class="img img-fluid">
              </div>
              <h3 class="card-title">Vitrin Szeged</h3>
              <div class="stars">
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <p class="lead">Hogyha egy előkelőbb helyet keresel a hétvégi italozásra, itt megtaláltad!</p>
              <button class="btn btn-warning">Learn more</button>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb4">
                <img src="./imgs/logo.png" alt="" class="img-fluid">
              </div>
              <h3 class="card-title">Building make</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quasi quidem impedit delectus, consectetur quae est perferendis harum commodi reprehenderit!</p>
              <button class="btn btn-warning">Learn more</button>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb4">
                <img src="./imgs/logo.png" alt="" class="img-fluid">
              </div>
              <h3 class="card-title">Building make</h3>
              <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quasi quidem impedit delectus, consectetur quae est perferendis harum commodi reprehenderit!</p>
              <button class="btn btn btn-warning">Learn more</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--Carousel kártyák tudja a tököm minekXD-->









  <!-- csapat section -->

  <section id="team" class="team section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2 id="rolunk">Fejlesztői csapatunk</h2>
            <p>Csapatunk életének termése, sok vér és verejték által létrehozott mestermű,<br> amely most napvilágot lát és meghódítja apádat!!!</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card text-center">
            <div class="card-body">
              <img src="./imgs/Balazs.jpg" alt="" class="img-fluid rounded-circle">
              <h3 class="card-title py-2">Trájer Balázs</h3>
              <p class="card-text">A weboldal megálmodója, a dizájn és a fontend ATYJA, TERVEZŐJE. Senior frontend munkatárs!!!!</p>
              <p class="socials">
                <a href="https://twitter.com/BalazsTrajer" target="_blank"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="https://www.facebook.com/balazs.trajer/" target="_blank"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="https://www.linkedin.com/in/tr%C3%A1jer-bal%C3%A1zs-7205712b0/" target="_blank"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="https://www.instagram.com/idontknowwhatwouldbemyname/" target="_blank"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
          <div class="card text-center">
            <div class="card-body">
              <img src="./imgs/Norbert.jpg" alt="" class="img-fluid rounded-circle">
              <h3 class="card-title py-2">Rácz Norbert</h3>
              <p class="card-text">Valamit a háttrében matat, de senki sem érti hogy micsodát! Backend munkatárs!</p>
              <p class="socials">
                <a href="https://twitter.com/NorbertRussov" target="_blank"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="https://www.facebook.com/racz.norbert.7" target="_blank"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="https://www.linkedin.com/in/norbert-rácz-057b21248/" target="_blank"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="https://www.instagram.com/norbertrussov/?hl=en" target="_blank"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
          <div class="card text-center">
            <div class="card-body">
              <img src="./imgs/Dominik.jpg" alt="" class="img-fluid rounded-circle">
              <h3 class="card-title py-2">Lipták Dominik</h3>
              <p class="card-text">Frontend gyakornoki munkatárs, a frontend munkálataiban és a tartalom feltöltésében segétkezik!</p>
              <p class="socials">
                <a href="" target="_blank"><i class="bi bi-twitter text-dark mx-1"></i></a>
                <a href="https://www.facebook.com/liptak.dominik02" target="_blank"><i class="bi bi-facebook text-dark mx-1"></i></a>
                <a href="" target="_blank"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                <a href="https://www.instagram.com/liptakdominik02/" target="_blank"><i class="bi bi-instagram text-dark mx-1"></i></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Elérhetőségek section -->

  <section id="contact" class="contact-section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Vedd fel velünk a kapcsolatot!</h2>
            <p>Ha van valami ötleted vagy észrevételed, itt jelezheted!</p>
          </div>
        </div>
      </div>
      <div class="row m-0">
        <div class="col-md-12 p-0 pt-4 pb-4">
          <form action="#" class="bg-light p-4.m-auto">
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <input type="text" class="form-control" required placeholder="Teljes neved">
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <input type="email" class="form-control" required placeholder="Email címed">
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-3">
                  <textarea rows="3" required class="form-control" placeholder="A cég neve"></textarea>
                </div>
              </div>

              <button class="btn btn-warning btn-lg btn-block mt-3">Küldés</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Lábjegyzet -->

  <footer class="bg-dark p-2 text-center">
    <div class="container">
      <p class="text-white">Minden egy helyen @MEH</p>
    </div>
  </footer>



</body>

</html>