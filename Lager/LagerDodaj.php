<?php
declare(strict_types=1);

ini_set('display_errors', 1);
error_reporting(E_ALL);

require '../ExecuteQuery.php';

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

      <h2 class="py-4">Dodaj lager</h2>

      <div class = "container">        

         <form class = "form-signin" role = "form" action = "/projects/zoka/Lager/LagerDodajRequest.php" method = "post">
			 <select  class="form-select" style="width:400px; margin:auto"  name="ArtikalId">
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
						 <?php echo $artikal["Naziv"];
						 // To show the category name to the user
						 ?>
					 </option>
				 <?php
				 endwhile;
				 // While loop must be terminated
				 ?>
			 </select>
			 </br>
			 <div class="row mb-3" style="width:400px; margin:auto">
            <input class="form-control mb-4" type = "text" name = "RaspolozivaKolicina" placeholder = "Raspoloživa količina" required autofocus></br>
            <input class="form-control mb-4" type = "text" name = "Lokacija" placeholder = "Lokacija" required></br>
				</div>

            <button class = "btn btn-lg btn-success btn-block mb-3" type = "submit"
               name = "registracija">Dodaj lager</button>
         </form>
		 <a href="Lager.php"> <button class = "btn btn-lg btn-outline-success btn-block">Odustani od dodavanja radnika</button></a>
      </div>


	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   </body>
</html>
