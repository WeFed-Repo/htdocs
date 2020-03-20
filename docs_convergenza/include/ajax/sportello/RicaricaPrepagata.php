<?php
header('content-type: application/json; charset=utf-8');

$isOK = mt_rand(0, 9) < 9;
$isSmash = !isset($_POST['codiceOTPConSMS']) && mt_rand(0, 9) < 2;

if (!$isOK) {
	echo <<<EOD
{
    "esito": {
        "codice": "1",
        "descrizione": "Errore caricamento dati"
    }
}
EOD;
} else if ($isSmash) {
	echo <<<END
{
    "esito": {
        "codice": "GENERATE_PASSWORD",
        "descrizione": ""
    }
}
END;
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