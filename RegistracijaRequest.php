<?php

declare(strict_types=1);

require 'ExecuteQuery.php';

$korisnickoIme = $_POST['KorisnickoIme'];
$sifra = password_hash($_POST['Sifra'], PASSWORD_DEFAULT);
$rolaId = 1;


$korisnik = executeQuery("
INSERT INTO Korisnik (KorisnickoIme, Sifra, RolaId)
VALUES ('$korisnickoIme', '$sifra', $rolaId);
");


//var_dump($sifra);
//var_dump($_POST['Sifra']);
if ($korisnik === true) {
	$korisnik = executeQuery("SELECT KorisnikId FROM Korisnik WHERE KorisnickoIme='$korisnickoIme'");
	$korisnikId = $korisnik->fetch_assoc()['KorisnikId'];
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
	setcookie('KorisnikId', $korisnikId, time()+3600);
	header("Location: Login.php");
} else {
	// Nije kreiran korisnik
	exit("NEMA KORISNIKA");
}
