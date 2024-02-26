<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url("/css/admin.css")}}">

    <title>Admin felület</title>
</head>
<body>
@if (Session::has ('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get ('success')}}
                    </div>
                    @endif

                    <h1>Felhasználók</h1>
<table class="table table-hover">

<thead>

    <th>ID</th>

  <th>Cégnév</th>

  <th>Cégjegyzékszám</th>

  <th>Jelszó</th>

  <th>Művelet</th>

</thead>

<tbody>
@foreach($users as $user)

    <tr>

        <td>{{$user->id}}</td>

      <td>{{$user->cegnev}} </td>

      <td>{{$user->cegszam}} </td>

      <td>{{$user->jelszo}}</td>

      <td><a onclick="return confirm('Biztos törölni akarod?')" href="{{url('/delete/'.$user->id) }}">Törlés</a> </td>


    </tr>
@endforeach

</tbody>

</table>
<h1>Helyszínek</h1>
<div class="container">
  <div class="row">
@foreach($posts as $post)
<div class="col-2">
  <div class="card" style="width: 18rem;">
  <img src='{{$post->kep}}' class="card-img-top" >
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
</div>
  @endforeach
  </div>
  </div>
<div class="text-center">
                        <small><a href="/">Vissza a főoldalra</a></small>
                    </div>
</body>
</html>