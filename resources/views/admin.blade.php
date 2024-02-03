<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Admin felület</title>
</head>
<body>
@if (Session::has ('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get ('success')}}
                    </div>
                    @endif
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
<div class="text-center">
                        <small><a href="/">Vissza a főoldalra</a></small>
                    </div>
</body>
</html>