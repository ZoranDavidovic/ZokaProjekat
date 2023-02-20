<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Promijeni sifru</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
   rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
   <body class="p-2 bg-opacity-25 text-center text-success" style=" background-image: linear-gradient(to right, #81b29a, #f2cc8f);">

      <h3 class="py-5 fw-bold">Promjeni šifru</h3>

      <div class = "container">
         <div class="row" style="width:400px; margin:auto">
         <form class = "form-signin" role = "form" action = "PromjeniSifruRequest.php" method = "post">
            <input class="form-control" type = "text" name = "KorisnickoIme" placeholder = "Korisničko ime" required autofocus></br>
            <input class="form-control" type = "password" name = "Sifra" placeholder = "Nova šifra" required> <br>

            <button class = "btn btn-lg btn-success btn-block mb-5" type = "submit"
               name = "login">Promijeni</button>
         </form>
         </div>
      </div>

   </body>
</html>
