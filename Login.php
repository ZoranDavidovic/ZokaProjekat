<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login stranica</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
   rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="p-2 bg-opacity-25 text-center text-success" style=" background-image: linear-gradient(to right, #81b29a, #f2cc8f);">
      <div>
      <h1 class="py-5 fw-bold">Ulogujte se!</h1>

   <div class = "container">
      <div class="row" style="width:400px; margin:auto">
         <form class = "form-signin" role = "form" action = "LoginRequest.php" method = "post">
            <label class="form-label" style="float:left">Unesite korisničko ime:</label><br>
            <input class="form-control" type = "text" name = "KorisnickoIme" placeholder = "Korisničko ime" required autofocus ></br>

            <label class="form-label" style="float:left">Unesite šifru:</label><br>
            <input class="form-control" type = "password" name = "Sifra" placeholder = "Šifra" required><br><br>

            <button class = "btn btn-lg btn-success btn-block mb-5" type = "submit"
               name = "login">Login</button>
         </form>

      </div>
      <div>
<label class="fs-5 text-center"> Nemate nalog?</label>
<a href="Registracija.php"> <button class = "btn btn-lg btn-outline-success btn-block">Registrujte se!</button></a>

</div>
        
   </div>
   <a href="PromjeniSifru.php"><button class = "btn btn-lg btn-outline-success btn-block mt-3">Zaboravili ste šifru</button></a>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
