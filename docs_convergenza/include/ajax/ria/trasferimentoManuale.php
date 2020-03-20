<?php
header('content-type: application/json; charset=utf-8');

sleep(1);

// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('Europe/Rome');
$data = date("d\/m\/Y");

echo <<<EOD
{
    "errore": "",
    "esito": "ok",
    "contoCorrente": {
        "saldo": "910.96",
        "margine": "625.21",
        "dataMargine": "$data",
        "margineTrasf": "625.21",
        "dataMargineTrasf": "$data"
    },
    "contoDeposito": {
        "saldo": "2000.00",
        "margine": "2000.00",
        "margineNoPreav": "2000.00"
    },
    "contoDerivati": {
        "saldo": "0.00",
        "margine": "85123704.89"
    }
}
EOD;
