<?php
declare(strict_types=1);

ini_set('display_errors', 1);
error_reporting(E_ALL);

require '../ExecuteQuery.php';

$radnici = executeQuery("SELECT * FROM Radnik");
$artikli = executeQuery("SELECT * FROM Artikal");
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

      <h2 class="py-5">Kreiraj racun</h2>

      <div class = "container">

         <form class = "form-signin" role = "form" action = "RacunDodajRequest.php" method = "post">
			 <select class="form-select" style="width:400px; margin:auto" name="RadnikId">
				 <?php
				 // use a while loop to fetch data
				 // from the $all_categories variable
				 // and individually display as an option
				 while ($radnik = mysqli_fetch_array(
					 $radnici,MYSQLI_ASSOC)):;
					 ?>
					 <option value="<?php echo $radnik["RadnikId"];
					 // The value we usually set is the primary key
					 ?>">
						 <?php echo $radnik["Ime"] . ' ' . $radnik["Prezime"];
						 // To show the category name to the user
						 ?>
					 </option>
				 <?php
				 endwhile;
				 // While loop must be terminated
				 ?>
			 </select>
			 </br>
			 <select class="form-select" style="width:400px; margin:auto" name="Stavka[0][ArtikalId]">
				 <?php
				 // use a while loop to fetch data
				 // from the $all_categories variable
				 // and individually display as an option
				 while ($artikal = mysqli_fetch_array(
					 $artikli,MYSQLI_ASSOC)):;
					 ?>
					 <option value="<?php echo $artikal["ArtikalId"];
					 // The value we usually set is the primary key
					 ?>">
						 <?php echo $artikal['Naziv'];
						 // To show the category name to the user
						 ?>
					 </option>
				 <?php
				 endwhile;
				 //header("Location: Racun.php");
				 ?>
			 </select>
			 </br>
			 <div class="row" style="width:400px; margin:auto">
			 <input class="form-control my-4"  type = "text" name = "Stavka[0][Cijena]" placeholder = "Cijena" required autofocus></br>
			 <input class="form-control mb-4"  type = "text" name = "Stavka[0][Kolicina]" placeholder = "Količina" required></br>

            <button class = "btn btn-lg btn-success btn-block" type = "submit"
               name = "registracija">Kreiraj artikal</button>	   
         </form>
		 </div>
      </div>

	  <a href="Racun.php"> <button class = "btn btn-lg btn-outline-success btn-block my-5">Odustani od kreiranja računa</button></a>
	  

   </body>
</html>
