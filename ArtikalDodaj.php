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

      <h2 class="py-5">Dodaj artikal</h2>
      

      <div class = "container">
      <div class="row" style="width:400px; margin:auto">

         <form class = "form-signin" role = "form" action = "ArtikalDodajRequest.php" method = "post">
            <input class="form-control"  type = "text" name = "Sifra" placeholder = "Sifra" required autofocus></br>
            <input class="form-control"  type = "text" name = "Naziv" placeholder = "Naziv" required></br>
			   <input class="form-control"  type = "text" name = "JedinicaMjere" placeholder = "Jedinica mjere" required></br>
			   <input class="form-control"  type = "text" name = "Barkod" placeholder = "Barkod" required></br>
			   <input class="form-control"  type = "text" name = "PLU_KOD" placeholder = "PLU_KOD" required></br>
            <button class = "btn btn-lg btn-success btn-block mb-5" type = "submit"
               name = "registracija">Kreiraj artikal</button>
         </form>
      </div>
      </div>

      <div>
      <a href="Artikli.php"> <button class = "btn btn-lg btn-outline-success btn-block">Nazad na pregled artikala</button></a>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   </body>
</html>
