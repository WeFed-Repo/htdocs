<?php
header('content-type: application/json; charset=utf-8');

$isOK = mt_rand(0, 9) < 9;

if (!$isOK) {
    echo <<<EOD
{
    "esito": {
        "codice": "2",
        "descrizione": "Si &egrave; verificato un errore: non ci sono tessere valide."
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
    "ListaTagli": [
        {
            "descriz": "SETT URBANO",
            "importo": "11,30",
            "dataval": "24/03/2014"
        },
        {
            "descriz": "MENSILE URBANO",
            "importo": "13,30",
            "dataval": "24/03/2014"
        },
        {
            "descriz": "SETT URBANO",
            "importo": "11,30",
            "dataval": "24/03/2014"
        },
        {
            "descriz": "SETT URBANO",
            "importo": "11,30",
            "dataval": "24/03/2014"
        },
        {
            "descriz": "SETT URBANO",
            "importo": "11,30",
            "dataval": "24/03/2014"
        },
        {
            "descriz": "SETT URBANO",
            "importo": "11,30",
            "dataval": "24/03/2014"
        },
        {
            "descriz": "SETT URBANO",
            "importo": "11,30",
            "dataval": "24/03/2014"
        },
        {
            "descriz": "SETT URBANO",
            "importo": "11,30",
            "dataval": "24/03/2014"
        }
    ],
    "idTransazione": "00059908660"
}
EOD;
}
