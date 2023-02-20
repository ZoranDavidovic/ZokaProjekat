<?php

declare(strict_types=1);

ini_set('display_errors', 1);
error_reporting(E_ALL);

require '../ExecuteQuery.php';

$radnik = $_POST['RadnikId'];
$datum = date('Y-m-d h:i:s');
$brojRacuna = 55;//$_POST['BrojRacuna'];
$ukupniIznos = 0;
$iznosBezPDV = 0;
$iznosPDV = 0;

$racun = executeQuery("
INSERT INTO Racun (RadnikIzdao, DatumRacuna, BrojRacuna, UkupniIznos, IznosPDV, IznosBezPDV)
VALUES ($radnik, '$datum', '$brojRacuna', $ukupniIznos, $iznosPDV, $iznosBezPDV);
");

$racunId = executeQuery('SELECT MAX(RacunId) AS RacunId FROM Racun');
$racunId = $racunId->fetch_assoc()['RacunId'];
$cijenaTotal = 0;
foreach ($_POST['Stavka'] as $stavka) {
	$artikalId = $stavka['ArtikalId'];
	$kolicina = $stavka['Kolicina'];
	$cijena = $stavka['Cijena'];

	$cijenaTotal += $cijena * $kolicina;

	$stavka = executeQuery("
INSERT INTO RacunStavka (RacunId, ArtikalId, Kolicina, Cijena)
VALUES ($racunId, $artikalId, $kolicina, $cijena);
");
}

$cijenaTotalSaPDV = $cijenaTotal * 1.17;
$PDV = $cijenaTotalSaPDV - $cijenaTotal;

executeQuery("UPDATE Racun SET
                 UkupniIznos = $cijenaTotalSaPDV,
				 IznosBezPDV = $cijenaTotal,
                 IznosPDV = $PDV
				WHERE RacunId = $racunId
                 ");

if ($racun === true) {
	//Lager uspjesno dodat
	header('Location: Racun.php');
} else {
	// Nije kreiran lager
	exit("ERROR");
}
