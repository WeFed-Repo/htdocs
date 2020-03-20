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
    "validita":"24",
    "scadenza":"11/2014",
    "uso":"ldkaslsda",
    "tipoAlimentazione":"fasfas",
    "classe":"",
    "provincia": "FU",
    "regione": "Lombardia",
    "potenza":"",
    "tassa":"110,14",
    "sanzioni":"5,00",
    "commissioni": "1,45",
    "totale": "117,44",
    "interessi":"3,45",
    "codiceFiscale":"",
    "immatricolazione":"",
    "idTransazione":"1234567890"
}
EOD;
}