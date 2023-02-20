<?php

declare(strict_types=1);

require_once 'ExecuteQuery.php';

function korisnikJeUlogovan()
{
	return isset($_COOKIE['KorisnikId']);
}

function korisnikJeAdmin()
{
	if (! isset($_COOKIE['KorisnikId'])) {
		return false;
	}

	$korisnikId = $_COOKIE['KorisnikId'];
	$korisnik = executeQuery("SELECT * FROM Korisnik WHERE KorisnikId = $korisnikId AND RolaId = 1");

	return $korisnik->num_rows > 0;
}
