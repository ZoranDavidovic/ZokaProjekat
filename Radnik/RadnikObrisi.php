<?php

declare(strict_types=1);

require_once '../ExecuteQuery.php';

$radnikId = $_GET['RadnikId'];

$rezultat = executeQuery("DELETE FROM Radnik WHERE RadnikId = $radnikId");

if ($rezultat) {
	// Uspjesno je obrisan radnik
	header('Location: Radnik.php');
} else {
	exit("Greska pri brisanju");
}
