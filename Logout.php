<?php

declare(strict_types=1);

require 'ExecuteQuery.php';

setcookie("KorisnikId", "", time()-3600);

header("Location: Login.php");
