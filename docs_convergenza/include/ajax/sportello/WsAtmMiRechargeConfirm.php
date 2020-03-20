<?php
header('content-type: application/json; charset=utf-8');

$isOK = mt_rand(0, 9) < 9;

if (!$isOK && $_POST['forzaAddebito'] != 'true') {
    echo <<<EOD
{
    "esito": {
        "codice": "2",
        "descrizione": "Funzione non disponibile"
    },
    "force": "1"
}
EOD;
} else if (!$isOK && $_POST['forzaAddebito'] == 'true') {
    echo <<<EOD
{
    "esito": {
        "codice": "2",
        "descrizione": "Funzione non disponibile"
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
    "numSalvato": "ok",
    "numeroCRO": 27852237
}
EOD;
}

