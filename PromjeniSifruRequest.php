<?php

declare(strict_types=1);

require 'ExecuteQuery.php';

$korisnickoIme = $_POST['KorisnickoIme'];
$sifra = password_hash($_POST['Sifra'], PASSWORD_DEFAULT);

$rezultat = executeQuery("SELECT * FROM Korisnik WHERE KorisnickoIme='$korisnickoIme'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Promjena šifre</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
   rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <body>
      <div class="text-center" style=" background-image: linear-gradient(to right, #e9edc9, #d4a373); height:740px">

         <h2 class="text-success py-5 text-center">Nova šifra je postavljena!</h2>

         <a href="Login.php"><button class="btn btn-outline-success text-center">Nazad na Log in</button></a>
    

      </div>




<?php

if ($rezultat->num_rows > 0) {
	$korisnikId = $rezultat->fetch_assoc()['KorisnikId'];

	executeQuery("UPDATE Korisnik SET Sifra = '$sifra' WHERE KorisnikId = $korisnikId");
	exit();
	
} else {
	// Nije pronadjen korisnik sa odgovarajucim korisnickim imenom
	exit("NEMA KORISNIKA");
}

?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   </body>
</html>

