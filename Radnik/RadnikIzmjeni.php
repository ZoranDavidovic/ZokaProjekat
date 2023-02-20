<?php
declare(strict_types=1);

ini_set('display_errors', 1);
error_reporting(E_ALL);

require '../ExecuteQuery.php';

$radnik = executeQuery("SELECT * FROM Radnik WHERE RadnikId = " . $_GET['RadnikId']);
$radnik = $radnik->fetch_assoc();

$korisnici = executeQuery("SELECT * FROM Korisnik");
$role = executeQuery("SELECT * FROM Rola");
?>


<html lang = "en">
   <body>

      <h2>Izmjeni radnika</h2>

      <div class = "container">

         <form class = "form-signin" role = "form" action = "RadnikIzmjeniRequest.php?RadnikId=<?= $radnik['RadnikId'] ?>" method = "post">
			 <select name="KorisnikId">
				 <?php
				 // use a while loop to fetch data
				 // from the $all_categories variable
				 // and individually display as an option
				 while ($korisnik = mysqli_fetch_array(
					 $korisnici,MYSQLI_ASSOC)):;
					 ?>
					 <option value="<?php echo $korisnik["KorisnikId"];
					 // The value we usually set is the primary key
					 ?>">
						 <?php echo $korisnik["KorisnickoIme"];
						 // To show the category name to the user
						 ?>
					 </option>
				 <?php
				 endwhile;
				 // While loop must be terminated
				 ?>
			 </select>
			 </br>
			 <input type = "text" name = "Ime" placeholder = "Ime" required value="<?= $radnik['Ime'] ?>"></br>
			 <input type = "text" name = "Prezime" placeholder = "Prezime" required value="<?= $radnik['Prezime'] ?>"></br>
			 <input type = "text" name = "BrojTelefona" placeholder = "BrojTelefona" required value="<?= $radnik['BrojTelefona'] ?>"></br>
			 <input type = "text" name = "Adresa" placeholder = "Adresa" required value="<?= $radnik['Adresa'] ?>"></br>
			 <input type = "text" name = "Grad" placeholder = "Grad" required value="<?= $radnik['Grad'] ?>"></br>
			 <input type = "text" name = "Email" placeholder = "Email" required value="<?= $radnik['Email'] ?>"></br>
			 <input type = "text" name = "JMBG" placeholder = "JMBG" required value="<?= $radnik['JMBG'] ?>"></br>
			 <select name="RolaId" >
				 <?php
				 // use a while loop to fetch data
				 // from the $all_categories variable
				 // and individually display as an option
				 while ($rola = mysqli_fetch_array(
					 $role,MYSQLI_ASSOC)):;
					 ?>
					 <option value="<?php echo $rola["RolaId"];
					 // The value we usually set is the primary key
					 ?>">
						 <?php echo $rola["NazivRole"];
						 // To show the category name to the user
						 ?>
					 </option>
				 <?php
				 endwhile;
				 // While loop must be terminated
				 ?>
			 </select>

            <button class = "btn btn-lg btn-primary btn-block" type = "submit"
               name = "registracija">Sacuvaj izmjene</button>
         </form>
      </div>

	  <?php //var_dump($radnik); 
	  //header("Location: Radnik.php");
	  ?>

   </body>
</html>
