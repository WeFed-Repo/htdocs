<?php
header('content-type: application/json; charset=utf-8');

$isOK = mt_rand(0, 9) < 9;

/*
 * esito: "OK" o "KO"
 */

if ($isOK) {
	echo <<<EOD
{
    "esito": "OK"
}
EOD;
} else {
	echo <<<EOD
{
	"esito": "KO"
}
EOD;
}
