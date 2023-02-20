<?php

declare(strict_types=1);

ini_set('display_errors', 1);
error_reporting(E_ALL);

require '../ExecuteQuery.php';

$raspolozivaKolicina = $_POST['RaspolozivaKolicina'];
$lokacija = $_POST['Lokacija'];
$artikalId = $_POST['ArtikalId'];
$lagerId = $_POST['LagerId'];

$lager = executeQuery("
	UPDATE Lager SET
	                  ArtikalId = '$artikalId',
	                  RaspolozivaKolicina = '$raspolozivaKolicina',
	                  Lokacija = '$lokacija'
	WHERE LagerId = $lagerId
	");

if ($lager === true) {
	//Lager uspjesno izmjenjen
	header('Location:Lager.php');
} else {
	// Nije izmjenjen lager
	exit("ERROR");
}
