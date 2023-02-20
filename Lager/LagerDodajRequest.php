<?php

declare(strict_types=1);

ini_set('display_errors', 1);
error_reporting(E_ALL);

require '../ExecuteQuery.php';

$raspolozivaKolicina = $_POST['RaspolozivaKolicina'];
$lokacija = $_POST['Lokacija'];
$artikalId = $_POST['ArtikalId'];

$lager = executeQuery("
INSERT INTO Lager (ArtikalId, RaspolozivaKolicina, Lokacija)
VALUES ($artikalId, '$raspolozivaKolicina', '$lokacija');
");

if ($lager === true) {
	//Lager uspjesno dodat
	header('Location: /projects/zoka/Lager/Lager.php');
} else {
	// Nije kreiran lager
	exit("ERROR");
}
