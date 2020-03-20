<?php
header('content-type: application/json; charset=utf-8');

$isOK = mt_rand(0, 9) < 9;
$isRI = mt_rand(0, 9) < 7;

/*
 * esito: "OK" o "KO"
 * hashOtp: stringa da ritornare come parametro nella chiamata checkPush
 * statoOperazione:
 * - "RI": continua con le chiamate checkPush
 * - "VM": la checkPush non deve partire e viene chiesto l'inserimento manuale del codice OTP
 */

if ($isOK) {
	if ($isRI) {
		echo <<<EOD
{
    "esito": "OK",
    "statoOperazione": "RI",
    "hashOtp": "AAVAARYEWREWEVR"
}
EOD;
	} else {
		echo <<<EOD
{
    "esito": "OK",
    "statoOperazione": "VM",
    "hashOtp": "AAVAARYEWREWEVR"
}
EOD;
	}
} else {
	echo <<<EOD
{
	"esito": "KO"
}
EOD;
}
