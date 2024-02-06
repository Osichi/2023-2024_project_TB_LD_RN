<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Bejelentkezés</title>
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,400;0,6..12,500;0,6..12,700;1,6..12,400;1,6..12,500;1,6..12,700&display=swap');

        body {
            font-family: 'Nunito Sans', sans-serif;
            background-color: #002721;
        }

        a{
            text-decoration: none;
            color: #00816D;
        }
        a:hover{
            text-decoration: underline;
        }

        .bg-holder {
            position: absolute;
            width: 100%;
            min-height: 100%;
            top: 0;
            left: 0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .btn{
            font-size: 0.8rem;
            font-weight: 700;
            background-color: #00816D;
            border: #00816D;
        }

        .btn i{
            vertical-align: text-top;
        }

        .btn:hover{
            box-shadow: 0 0 25px #0B9983;
            color: #00816D;
        }

        h3{
            color: #00816D;
        }
        
        .form-control{
            border: 1px solid #002721;
        }       

        .form-control:focus{    
            box-shadow: none;
            border: 1px solid #002721;
        }

        #formCheck::before{
            background: #ececec;
        }

        #formCheck{
            border: #002721;
        }

        #formCheck:focus {
            box-shadow: none;
        }

        .form-check-label{
            color: #00816D;
        }

        .text-secondary{
            color: #00816D;
        }
        .text-center{
            color: #00816D;
        }
        

        .divider-content-center{
            position: absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            background-color: #fff;
            font-size: 0.8rem;
            font-weight: 500;
            color:#00816D;
            background-color: #002721;
        }
        .divider{
            margin: 2rem 0;
        }
        .btn-outline-custom{
            border: 1px solid #002721;
            background-color:#00816D ;
            color: #002721;
        }
        .btn-outline-custom:hover{
            color: #00816D;
            border-color: #002721;
            background-color: #002721;
        }
        
    </style>

                    @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                    @endif

    <div class="row vh-100 g-0">
        <!--leftside-->
        <div class="col-lg-6 position-relative d-none d-lg-block">
            <div class="bg-holder" style="background-image:url(./imgs/4419038.jpg)"></div>
        </div>
        <!--/leftside-->

        <!--jobbside-->
        <div class="col-lg-6">
            <div class="row align-items-center justify-content-center h-100 g-0 px4 px-sm-0">
                <div class="col col-sm-6 col-lg-7 col-xl-6">

                    <!--Logo--->
                    <a href="#" class="d-flex justify-content-center mb-6">
                        <img src="./imgs/logo.png" alt="" width="400">
                    </a>
                    <!--/Logo--->

                    <div class="text-center mb-5">
                        <h3 class="fw-bold">Belépés</h3>
                        <p class="text">Lépj be meglévő fiókodba</p>
                    </div>

                    
                    <!--form  -->
                    <form action="{{ route('login') }}" method="POST">
                    @csrf
                        <div class="input-group mb-3">
                            
                            <input type="text" class="form-control form-control-lg fs-6" placeholder="Cégjegyzékszám" id="cegszam" name="cegszam">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                            <i class='bx bx-lock-alt'></i>
                            </span>
                            <input type="password" name="jelszo" id="jelszo" class="form-control form-control-lg fs-6" placeholder="Jelszó">
                        </div>
                        <div class="input-group mb-3 display-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label"><small>Emlékezzen rám</small></label>
                            </div>
                            <div>
                                <small><a href="">Elfelejtette a jelszavát?</a></small>
                            </div>
                        </div>
                        <button class="btn btn-lg w-100 mb-3">Belépés</button>
                    </form>
                    <!--/form  -->

                    <div class="text-center">
                        <small>Nincs még fiókja? <a href="/register" class="fw-bold">Létrehozás</a></small>
                    </div>
                    <div class="text-center">
                        <small><a href="/">Vissza a főoldalra</a></small>
                    </div>
                </div>
            </div>
        </div>
        <!--/jobbside-->

    </div>
</body>

</html>