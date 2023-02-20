<?php

declare(strict_types=1);

require 'ExecuteQuery.php';

$korisnickoIme = $_POST['KorisnickoIme'];
$sifra = $_POST['Sifra'];

$rezultat = executeQuery("SELECT * FROM Korisnik WHERE KorisnickoIme='$korisnickoIme'");

if ($rezultat->num_rows > 0) {
	$korisnik = $rezultat->fetch_array();

	$hash = $korisnik['Sifra'];

	if (password_verify($sifra, $hash)) {
		// Ako se sifre podudaraju, ulogovacemo korisnika
		header("Location: Artikli.php");

		setcookie('KorisnikId', $korisnik['KorisnikId'], time()+3600);
	} else {
		
		header("Location: Login.php");
		

		
		//exit("SIFRE SE NE PODUDARAJU");
	}
} else {
	// Nije pronadjen korisnik sa odgovarajucim korisnickim imenom
	exit("NEMA KORISNIKA");
}



