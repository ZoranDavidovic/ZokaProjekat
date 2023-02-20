<?php
declare(strict_types=1);

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'ExecuteQuery.php';

$role = executeQuery("SELECT * FROM Rola");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registracija</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
   rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>


<body class="bg-success p-2 text-success bg-opacity-25 text-center">

<h1 class="py-5 fw-bold">Dobrodošli na web sajt</h1>
<h2 class="fs-3 pb-5">Registruj se!</h2>

<div class = "container">
   <div class="row" style="width:400px; margin:auto">
      <form class = "form-signin" role = "form" action = "RegistracijaRequest.php" method = "post">
         <label class="form-label" style="float:left">Unesite korisničko ime:</label><br>
            <input  class="form-control" type = "text" name = "KorisnickoIme" placeholder = "Korisničko ime" required autofocus></br>
         <label class="form-label" style="float:left">Unesite šifru:</label><br>
            <input class="form-control" type = "password" name = "Sifra" placeholder = "Šifra" required></br></br>
    
         <button class = "btn btn-lg btn-success btn-block mb-5"type = "submit"
         name = "registracija">Kreiraj nalog</button>
      </form>

   </div>

   
</div>


<div>
<label class="fs-5 text-center"> Imate već nalog?</label>
<a href="Login.php"> <button class = "btn btn-lg btn-outline-success btn-block">Ulogujte se!</button></a>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

