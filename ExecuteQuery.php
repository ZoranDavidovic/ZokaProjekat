<?php

declare(strict_types=1);

function executeQuery(string $query)
{
	$server = "localhost";
	$korisnickoIme = "root";
	$sifra = "";
	$baza = "ZZoka";

	$konekcija = new mysqli($server, $korisnickoIme, $sifra, $baza);

	// Provjera konekcije
	if ($konekcija->connect_error) {
		die("Konekcija sa bazom nije uspjela: " . $konekcija->connect_error);
	}

	return $konekcija->query($query);
}
