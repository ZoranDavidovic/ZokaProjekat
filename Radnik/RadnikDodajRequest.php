<?php

declare(strict_types=1);

ini_set('display_errors', 1);
error_reporting(E_ALL);

require '../ExecuteQuery.php';

$korisnikId = $_POST['KorisnikId'];
$ime = $_POST['Ime'];
$prezime = $_POST['Prezime'];
$brojTelefona = $_POST['BrojTelefona'];
$adresa = $_POST['Adresa'];
$grad = $_POST['Grad'];
$email = $_POST['Email'];
$jmbg = $_POST['JMBG'];

$radnik = executeQuery("
	INSERT INTO Radnik (Ime, Prezime, BrojTelefona, Adresa, Grad, Email, JMBG, KorisnikId)
	VALUES ('$ime', '$prezime', '$brojTelefona', '$adresa', '$grad', '$email', '$jmbg', $korisnikId);
	");

if ($radnik === true) {
	//Radnik uspjesno dodat
	header('Location: Radnik.php');
} else {
	// Nije kreiran radnik
	exit("ERROR");
}
