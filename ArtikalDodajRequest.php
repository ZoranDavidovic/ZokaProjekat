<?php

declare(strict_types=1);

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'ExecuteQuery.php';

$sifra = $_POST['Sifra'];
$naziv = $_POST['Naziv'];
$jedinicaMjere = 'kg';//$_POST['JedinicaMjere'];
$barkod = $_POST['Barkod'];
$plu_kod = $_POST['PLU_KOD'];

$artikal = executeQuery("
INSERT INTO Artikal (Sifra, Naziv, JedinicaMjere, Barkod, PLU_KOD)
VALUES ('$sifra', '$naziv', '$jedinicaMjere', '$barkod', '$plu_kod');
");

if ($artikal === true) {
	//Artikal uspjesno dodat
	header('Location: Artikli.php');
} else {
	// Nije kreiran artikal
	exit("ERROR");
}
