<?php
declare(strict_types=1);

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '../ExecuteQuery.php';
require_once '../ProvjeriKorisnika.php';

$radnici = executeQuery("SELECT * FROM Radnik JOIN Korisnik ON Radnik.KorisnikId = Korisnik.KorisnikId");
$korisnikJeAdmin = korisnikJeAdmin();
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Radnik</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
   rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <style>
	a:hover{
		opacity:0.7;
	}
   </style>
</head>
   <body>

	  <nav class="navbar navbar-expand-lg bg-success text-white">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav fw-bolder container">
        <a style="color:#f4f1de" class="nav-link active" aria-current="page" href="../Artikli.php">Artikli</a>
        <a style="color:#f4f1de" class="nav-link border-bottom" href="../Radnik/Radnik.php">Radnik</a>
        <a style="color:#f4f1de" class="nav-link" href="../Racun/Racun.php">Račun</a>
        <a style="color:#f4f1de" class="nav-link" href="../Lager/Lager.php">Lager</a>
        <a style="color:#f4f1de" class="nav-link border rounded" href="RadnikDodaj.php">Dodaj radnika</a>
		<a style="color:#f4f1de" class="nav-link border rounded mx-3" href="../Logout.php">Log out</a>
		
      </div>
    </div>
  </div>
</nav>
<?php
		 
		 while ($radnik = mysqli_fetch_array(
			 $radnici,MYSQLI_ASSOC)):;
			 ?>
        <table class="table table-success table-striped">
				<tr>
					<th width="180">Ime</th>
					<th width="180">Prezime</th>
					<th width="180">Naziv</th>
					<th width="180">BrojTelefona</th>
					<th width="180">Adresa</th> 
					<th width="180">Grad</th> 
					<th width="180">Email</th> 
					<th width="180">Uredi</th> 
					<th width="180">Obriši</th> 

				</tr>

		<tr>
			  <td>
				  <?php echo $radnik["Ime"];
				  ?>
			  </td>
			  <td>
				  <?php echo $radnik["Prezime"];
				  ?>
			  </td>
			  <td>
				  <?php echo $radnik["BrojTelefona"];
				  ?>
			  </td>
			  <td>
				  <?php echo $radnik["Adresa"];
				  ?>
			  </td>
			  <td>
				  <?php echo $radnik["Grad"];
				  ?>
			  </td>
			  <td>
				  <?php echo $radnik["Email"];
				  ?>
			  </td>
			  <td>
				  <?php echo $radnik["KorisnickoIme"];
				  ?>
			  </td>
			  
		  <?php
			  if ($korisnikJeAdmin):
			  ?>
				 <td> <a href="RadnikIzmjeni.php?RadnikId=<?= $radnik['RadnikId']?>"><button class="btn btn-outline-success">Izmjena</button></a></td>
				  <td><a href="RadnikObrisi.php?RadnikId=<?= $radnik['RadnikId']?>"><button class="btn btn-outline-success">Obriši</button></a></td>
	    </tr>
		</table>
		  <?php
		  endif;
		  ?>
	  		</br>
		  <?php
		  endwhile;
		  // While loop must be terminated
		  ?>
      </div>

	  <!--Footer-->
 <footer class="py-2 bg-success " style="color:#f4f1de">
        <div class="container">
			<div class="row mb-6">
			<div class="col-md-6">
                <h3>LOGO</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Pariatur similique minus sint nam ducimus
                    quibusdam <br> possimus aliquid illum magni libero.</p>
            </div>
            <div class="col-md-6">
                <h3>Email Newsletter</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <form>
                    <input class="form-control my-2" style="width:250px"  type="email" placeholder="Enter email..." class="email">
                    <input type="submit" value="Subscribe" class="btn submit mb-2" style=" background-image: linear-gradient(to right, #ff9f1c, #ffbf69);">
                </form>
            </div>
			</div>
			<div class="container text-dark bg-success-subtle">
                <p  class="d-flex p-3 text-center align-items-center" style="margin:auto">
                    Copyright &copy: 2019, All Rights Reserved
                </p>
            </div>
		</div>
    </footer>


	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   </body>
</html>
