<?php
declare(strict_types=1);

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'ExecuteQuery.php';

$artikal = executeQuery("SELECT * FROM Artikal WHERE ArtikalId = " . $_GET['ArtikalId']);
$artikal = $artikal->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Artikli</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
   rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
   <body class="p-2 bg-opacity-25 text-center text-success" style=" background-image: linear-gradient(to right, #e9edc9, #d4a373);">

      <h2 class="py-5">Izmjeni artikal</h2>

      <div class = "container">
      <div class="row mb-3" style="width:400px; margin:auto">
         <form class = "form-signin" role = "form" action = "ArtikalIzmjeniRequest.php" method = "post">
			 <input name="ArtikalId" value="<?= $_GET['ArtikalId'] ?>" hidden>
            <input class="form-control mb-4" value="<?= $artikal['Sifra'] ?>" type = "text" name = "Sifra" placeholder = "Sifra" required autofocus></br>
            <input class="form-control mb-4" value="<?= $artikal['Naziv'] ?>" type = "text" name = "Naziv" placeholder = "Naziv" required></br>
			 <input class="form-control mb-4" value="<?= $artikal['JedinicaMjere'] ?>" type = "text" name = "JedinicaMjere" placeholder = "Jedinica mjere" required></br>
			 <input class="form-control mb-4" value="<?= $artikal['Barkod'] ?>" type = "text" name = "Barkod" placeholder = "Barkod" required></br>
			 <input class="form-control mb-4" value="<?= $artikal['PLU_KOD'] ?>" type = "text" name = "PLU_KOD" placeholder = "PLU_KOD" required></br>
            <button class = "btn btn-lg btn-success btn-block" type = "submit"
               name = "registracija">Izmjeni artikal</button>
         </form>
         </div>
      </div>

      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   </body>
</html>
