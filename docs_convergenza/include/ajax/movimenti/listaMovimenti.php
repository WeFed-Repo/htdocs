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
	$timestamp = time();
	$dayseconds = 24 * 60 * 60;
	$num = 0;

	while ($num < 10) {
		$weekday = date('w', $timestamp);
		if ($weekday > 0 && $weekday < 6) {
			$date[$num++] = $timestamp * 1000;
		}
		$timestamp -= $dayseconds;
	}

	echo <<<EOD
{
  "esito": {
    "codice": "0",
    "descrizione": ""
  },
  "lista": [
    {
      "id": "1",
      "dataC": {$date[1]},
      "dataV": {$date[0]},
      "descB": "SPESA PAGOBANCOMAT",
      "descE": "SCHEMA: CORE NUM.DD: 000000042641951 ID CREDITORE: LU96ZZZ0000000000000000058 CREDITORE: PAYPAL EUROPE S.A.R.L. ET CIE S.C.A ID MANDATO: 5TSJ224NUAASD DEBITORE: Mario Rossi 1001330590841 PAYPAL",
      "val": -244200
    },
    {
      "id": "2",
      "dataC": {$date[0]},
      "dataV": {$date[2]},
      "descB": "ADDEBITO PREAUTORIZZATO",
      "descE": "SCHEMA: CORE NUM.DD: 000000042641951 ID CREDITORE: LU96ZZZ0000000000000000058 CREDITORE: PAYPAL EUROPE S.A.R.L. ET CIE S.C.A ID MANDATO: 5TSJ224NUAASD DEBITORE: Mario Rossi 1001330590841 PAYPAL",
      "val": 244200
    },
    {
      "id": "3",
      "dataC": {$date[0]},
      "dataV": {$date[2]},
      "descB": "BONIFICO SEPA IN ENTRATA",
      "descE": "",
      "val": -23200
    },
    {
      "id": "4",
      "dataC": {$date[1]},
      "dataV": {$date[3]},
      "descB": "RATA FINANZIAMENTO",
      "descE": "SCHEMA: CORE NUM.DD: 000000042641951 ID CREDITORE: LU96ZZZ0000000000000000058 CREDITORE: PAYPAL EUROPE S.A.R.L. ET CIE S.C.A ID MANDATO: 5TSJ224NUAASD DEBITORE: Mario Rossi 1001330590841 PAYPAL",
      "val": -6400
    },
    {
      "id": "5",
      "dataC": {$date[2]},
      "dataV": {$date[4]},
      "descB": "BONIFICO SEPA IN USCITA",
      "descE": "",
      "val": 3300
    },
    {
      "id": "6",
      "dataC": {$date[3]},
      "dataV": {$date[5]},
      "descB": "SPESA PAGOBANCOMAT",
      "descE": "SCHEMA: CORE NUM.DD: 000000042641951 ID CREDITORE: LU96ZZZ0000000000000000058 CREDITORE: PAYPAL EUROPE S.A.R.L. ET CIE S.C.A ID MANDATO: 5TSJ224NUAASD DEBITORE: Mario Rossi 1001330590841 PAYPAL",
      "val": -200
    },
    {
      "id": "7",
      "dataC": {$date[4]},
      "dataV": {$date[6]},
      "descB": "SPESA PAGOBANCOMAT",
      "descE": "",
      "val": 4200
    },
    {
      "id": "8",
      "dataC": {$date[4]},
      "dataV": {$date[6]},
      "descB": "BONIFICO SEPA IN USCITA",
      "descE": "SCHEMA: CORE NUM.DD: 000000042641951 ID CREDITORE: LU96ZZZ0000000000000000058 CREDITORE: PAYPAL EUROPE S.A.R.L. ET CIE S.C.A ID MANDATO: 5TSJ224NUAASD DEBITORE: Mario Rossi 1001330590841 PAYPAL",
      "val": 6300
    },
    {
      "id": "9",
      "dataC": {$date[5]},
      "dataV": {$date[7]},
      "descB": "BONIFICO SEPA IN USCITA",
      "descE": "SCHEMA: CORE NUM.DD: 000000042641951 ID CREDITORE: LU96ZZZ0000000000000000058 CREDITORE: PAYPAL EUROPE S.A.R.L. ET CIE S.C.A ID MANDATO: 5TSJ224NUAASD DEBITORE: Mario Rossi 1001330590841 PAYPAL",
      "val": 7200
    },
    {
      "id": "10",
      "dataC": {$date[6]},
      "dataV": {$date[8]},
      "descB": "SPESA PAGOBANCOMAT",
      "descE": "",
      "val": 9900
    },
    {
      "id": "11",
      "dataC": {$date[6]},
      "dataV": {$date[8]},
      "descB": "BONIFICO SEPA IN USCITA",
      "descE": "",
      "val": 9900
    },
    {
      "id": "12",
      "dataC": {$date[6]},
      "dataV": {$date[8]},
      "descB": "ADDEBITO PREAUTORIZZATO",
      "descE": "SCHEMA: CORE NUM.DD: 000000042641951 ID CREDITORE: LU96ZZZ0000000000000000058 CREDITORE: PAYPAL EUROPE S.A.R.L. ET CIE S.C.A ID MANDATO: 5TSJ224NUAASD DEBITORE: Mario Rossi 1001330590841 PAYPAL",
      "val": 9900
    },
    {
      "id": "13",
      "dataC": {$date[7]},
      "dataV": {$date[9]},
      "descB": "BONIFICO SEPA IN USCITA",
      "descE": "",
      "val": 9900
    },
    {
      "id": "14",
      "dataC": {$date[7]},
      "dataV": {$date[9]},
      "descB": "SPESA PAGOBANCOMAT",
      "descE": "SCHEMA: CORE NUM.DD: 000000042641951 ID CREDITORE: LU96ZZZ0000000000000000058 CREDITORE: PAYPAL EUROPE S.A.R.L. ET CIE S.C.A ID MANDATO: 5TSJ224NUAASD DEBITORE: Mario Rossi 1001330590841 PAYPAL",
      "val": 9900
    },
    {
      "id": "15",
      "dataC": {$date[7]},
      "dataV": {$date[9]},
      "descB": "BONIFICO SEPA IN USCITA",
      "descE": "SCHEMA: CORE NUM.DD: 000000042641951 ID CREDITORE: LU96ZZZ0000000000000000058 CREDITORE: PAYPAL EUROPE S.A.R.L. ET CIE S.C.A ID MANDATO: 5TSJ224NUAASD DEBITORE: Mario Rossi 1001330590841 PAYPAL",
      "val": 9900
    }
  ],
  "completo": false,
  "saldoC": 22000,
  "saldoD": 2222,
  "intest": "Mario Rossi"
}
EOD;
}
