<?php

declare(strict_types=1);

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'ExecuteQuery.php';

$sifra = $_POST['Sifra'];
$naziv = $_POST['Naziv'];
$jedinicaMjere = $_POST['JedinicaMjere'];
$barkod = $_POST['Barkod'];
$plu_kod = $_POST['PLU_KOD'];
$artikalId = $_POST['ArtikalId'];

$artikal = executeQuery("
	UPDATE Artikal SET
	                  Sifra = '$sifra',
	                  Naziv = '$naziv',
	                  JedinicaMjere = '$jedinicaMjere',
	                  Barkod = '$barkod',
	                  PLU_KOD = '$plu_kod'
	WHERE ArtikalId = $artikalId
	");

if ($artikal === true) {
	//Artikal uspjesno izmjenjen
	header('Location: Artikli.php');
} else {
	// Nije kreiran artikal
	exit("ERROR");
}
