<?php
$isSessionExpired = mt_rand(0, 99) < 5;

if ($isSessionExpired) {
	header('content-type: text/html; charset=utf-8');
	echo <<<EOD
<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Sessione scaduta</title>
    </head>
    <body>
        <form>
            <label for="j_username">Username</label>
            <input type="text" id="j_username" name="j_username">
        </form>
    </body>
</html>
EOD;
} else {
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
		date_default_timezone_set('Europe/Rome');

		$date = [];
		$timestamp = time();
		$dayseconds = 24 * 60 * 60;
		$num = 0;

		while ($num < 10) {
			$weekday = date('w', $timestamp);
			if ($weekday > 0 && $weekday < 6) {
				$date[$num++] = $timestamp * 1000;
			}
			$timestamp += $dayseconds;
		}

		echo <<<EOD
{
    "esito": {
        "codice": "0",
        "descrizione": ""
    },
    "authCode": {
        "cod1": 2,
        "cod2": 4,
        "numCode": 20
    },
    "ctrlOtp": true,
    "bollettino": {
        "primaData": {$date[0]},
        "tipo": [
            896,
            674
        ],
        "maxImporto": 0,
        "commissione": 0
    },
    "auto": {
        "presaVisione": false,
        "regione": [
            "Abruzzo",
            "Basilicata",
            "Campania",
            "Emilia Romagna",
            "Friuli Venezia Giulia",
            "Lazio",
            "Liguria",
            "Lombardia",
            "Marche",
            "Piemonte",
            "Prov. Aut. di Bolzano",
            "Puglia",
            "Sardegna",
            "Sicilia",
            "Toscana",
            "Umbria",
            "Valle D'Aosta"
        ],
        "tipoVeicolo": [
            {
                "codice": "AU",
                "descrizione": "Autoveicolo"
            }, 
            {
                "codice": "MO",
                "descrizione": "Motociclo"
            }
        ]
    },
    "bonifico": {
        "dataValuta": [
            {$date[0]},
            {$date[1]},
            {$date[2]},
            {$date[3]},
            {$date[4]},
            {$date[5]},
            {$date[6]},
            {$date[7]},
            {$date[8]},
            {$date[9]}
        ],
        "maxImportoIta": 20000,
        "commissioneIta": 0.5
    },
    "giroconto": {
        "dataValuta": [
            {$date[0]},
            {$date[1]},
            {$date[2]},
            {$date[3]},
            {$date[4]},
            {$date[5]},
            {$date[6]},
            {$date[7]},
            {$date[8]},
            {$date[9]}
        ],
        "maxImportoIta": 20000,
        "commissioneIta": 0.5
    },
    "prepagata": {
        "tipo": [
            {
                "descrizione": "bir",
                "limite": 2500
            },
            {
                "descrizione": "jeans",
                "limite": 2500
            },
            {
                "descrizione": "kjeans",
                "limite": 2500
            },
            {
                "descrizione": "inrete",
                "limite": 3000
            },
            {
                "descrizione": "poste",
                "limite": 1500
            }
        ]
    },
    "mavRav": {
        "dataValuta": [
            {$date[0]},
            {$date[1]},
            {$date[2]}
        ]
    },
    "strongAuth": "A",
    "conto": [
        {
            "numero": "00599 - 0000002075 - EUR",
            "iban": "IT38W0340201749000000002075"
        }, 
        {
            "numero": "00599 - 0000004215 - EUR",
            "iban": "IT26L0340201749000000004215"
        }, 
        {
            "numero": "00599 - 0000002075 - EUR",
            "iban": "IT38W0340201749000000002075"
        }
    ]
}
EOD;
	}
}