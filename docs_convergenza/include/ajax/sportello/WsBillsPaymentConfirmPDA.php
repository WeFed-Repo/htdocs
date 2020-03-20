<?php
header('content-type: application/json; charset=utf-8');

$isOK = mt_rand(0, 9) < 9;

if (!$isOK) {
    echo <<<EOD
{
    "esito": {
        "codice": "2",
        "descrizione": "Funzione non disponibile prova"
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
    "feedback": "testo messaggio"
}
EOD;
}

