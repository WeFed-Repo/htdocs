<?php
header('content-type: application/json; charset=utf-8');

sleep(1);

$isActive = mt_rand(0, 9) < 6
	? "true"
	: "false";

echo <<<EOD
{
    "errore": "",
    "esito": "ok",
    "isDescrSaved": true,
    "contoCorrente": {
        "saldo": "-1520.32",
        "margine": "-1520.32"
    },
    "contoDeposito": {
        "saldo": "2745.39",
        "margine": "2745.39",
        "margineNoPreav": "2745.39",
        "saldoFresh": "*#*ND"
    },
    "isActive": $isActive
}
EOD;