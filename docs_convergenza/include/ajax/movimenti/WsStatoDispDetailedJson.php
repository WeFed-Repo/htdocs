<?php
header('content-type: application/json; charset=utf-8');

$isOK = mt_rand(0, 99) < 99;

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
	echo <<<END
{
    "esito": {
        "codice": "0",
        "descrizione": ""
    },
    "Beneficiario":"Michela Moretti",
    "Causale":"Saldo affitto ",
    "IBAN":"IT76A0760114300001004128524",
    "Banca":"POSTE ITALIANE SPA"
}
END;
}