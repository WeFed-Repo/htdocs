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
    "esito": {
        "codice": "0",
        "descrizione": ""
    },
    "tagli":[{
        "valore":"2,00",
        "commissione":"0,00"
    }, {
        "valore":"8,00",
        "commissione":"0,00"
    }, {
        "valore":"10,00",
        "commissione":"0,00"
    }, {
        "valore":"20,00",
        "commissione":"0,00"
    }]
}
EOD;
}