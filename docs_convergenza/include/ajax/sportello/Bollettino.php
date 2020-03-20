<?php
header('content-type: application/json; charset=utf-8');

$isOK = mt_rand(0, 9) < 7;

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
    }
}
END;
}