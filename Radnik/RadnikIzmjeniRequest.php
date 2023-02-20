<?php

declare(strict_types=1);

ini_set('display_errors', 1);
error_reporting(E_ALL);

require '../ExecuteQuery.php';

$radnikId = $_GET['RadnikId'];
$radnik = executeQuery('SELECT * FROM Radnik WHERE RadnikId = ' . $radnikId);

$korisnikId = $_POST['KorisnikId'];
$ime = $_POST['Ime'];
$prezime = $_POST['Prezime'];
$brojTelefona = $_POST['BrojTelefona'];
$adresa = $_POST['Adresa'];
$grad = $_POST['Grad'];
$email = $_POST['Email'];
$jmbg = $_POST['JMBG'];

$radnik = executeQuery("
	UPDATE Radnik SET
	                  Ime = '$ime',
	                  Prezime = '$prezime',
	                  BrojTelefona = '$brojTelefona',
	                  Adresa = '$adresa',
	                  Grad = '$grad',
	                  Email = '$email',
	                  JMBG = '$jmbg'
	WHERE RadnikId = $radnikId
	");

if ($radnik === true) {
	//Radnik uspjesno dodat
	header('Location: Radnik.php');
} else {
	// Nije kreiran radnik
	exit("ERROR");
}
