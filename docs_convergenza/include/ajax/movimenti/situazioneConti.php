<?php
header('content-type: application/json; charset=utf-8');

$isOK = mt_rand(0, 9) < 9;

if (!$isOK) {
	echo <<<EOD
{
  "esito": {
    "codice": "1",
    "descrizione": "Errore caricamento dati"
  }
}
EOD;
} else {
	echo <<<EOD
{
    "saldo": "*#*ND",
    "margine": "*#*ND",
    "dataT1": "02062016",
    "dataT2": "03062016",
    "dataT3": "06062016",
    "margineT1": "4219.210",
    "margineT2": "4219.210",
    "margineT3": "4219.210",
    "fido": "0.00",
    "intestatario": "*#*ND",
    "numero": "*#*ND",
    "iban": "*#*ND",
    "testo": "*#*ND",
    "loyalty": "*#*ND",
    "colUtente": "*#*ND",
    "colConto": "*#*ND",
    "dataMargine": "*#*ND",
    "custodiaTitoli": "*#*ND",
    "lv": "*#*ND",
    "evo": "*#*ND"
}
EOD;
}