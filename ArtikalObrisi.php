<?php

declare(strict_types=1);

require_once 'ExecuteQuery.php';

$artikalId = $_GET['ArtikalId'];

$rezultat = executeQuery("DELETE FROM Artikal WHERE ArtikalId = $artikalId");

if ($rezultat) {
	// Uspjesno je obrisan artikal
	header('Location: Artikli.php');
} else {
	exit("Greska pri brisanju");
}
