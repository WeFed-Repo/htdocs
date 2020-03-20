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
    "cartaRicaricabile": {
        "BPMCard": false,
        "area": 0,
        "banca": 19,
        "card27": false,
        "codiceFiscale": "",
        "cognome": "",
        "commissioneSuOperazione": 0,
        "commissioni": 0,
        "id": 0,
        "idTransazione": "",
        "id_anagrafica": 0,
        "incomplete": false,
        "intestatario": "Tizio Caio",
        "nome": "",
        "number": "1234567890123451",
        "numberToShow": "***3451",
        "site": 0,
        "subType": "CASH_GENERIC",
        "type": "CASH",
        "userId": "0143039"
    }
}
EOD;
}