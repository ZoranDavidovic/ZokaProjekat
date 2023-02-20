<?php

declare(strict_types=1);

require_once '../ExecuteQuery.php';

$lagerId = $_GET['LagerId'];

$rezultat = executeQuery("DELETE FROM Lager WHERE LagerId = $lagerId");

if ($rezultat) {
	// Uspjesno je obrisan lager
	header('Location: Lager.php');
} else {
	exit("Greska pri brisanju");
}

