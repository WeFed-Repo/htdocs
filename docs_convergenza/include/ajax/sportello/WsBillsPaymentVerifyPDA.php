<?php
header('content-type: application/json; charset=utf-8');

$isOK = mt_rand(0, 9) < 9;

if (!$isOK) {
	echo <<<EOD
{
    "esito": {
        "codice": "2",
        "descrizione": "Verificare l'importo, la divisa ed il numero del MAV/RAV."
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
    "messaggio":"lorem ipsum",
    "testoContoTerzi" : "testo messaggio da mostrare"
}
EOD;
}
