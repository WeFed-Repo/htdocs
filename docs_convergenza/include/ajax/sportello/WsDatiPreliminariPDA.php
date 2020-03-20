<?php
header('content-type: application/json; charset=utf-8');

$isOK = mt_rand(0, 9) < 9;

if (!$isOK) {
    echo <<<EOD
{
    "esito": {
        "codice": "2",
        "descrizione": "Non ci sono date disponibili"
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
    "date": [
        {
            "data": "24/03/2014"
        },
        {
            "data": "25/03/2014"
        },
        {
            "data": "26/03/2014"
        }
    ]
}
EOD;
}
