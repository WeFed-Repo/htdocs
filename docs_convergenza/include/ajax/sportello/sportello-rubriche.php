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
	echo <<<EOD
{
  "esito": {
    "codice": "0",
    "descrizione": ""
  },
  "rubricaTelefonica": [
    {
      "nome": "roby",
      "numero": "0893784",
      "operatore": "TIM",
      "prefisso": "392"
    },
    {
      "nome": "Nando",
      "numero": "6485913",
      "operatore": "TIM",
      "prefisso": "335"
    },
    {
      "nome": "Uccia",
      "numero": "2943814",
      "operatore": "VODAF",
      "prefisso": "347"
    },
    {
      "nome": "Donatella",
      "numero": "0469099",
      "operatore": "VODAF",
      "prefisso": "347"
    },
    {
      "nome": "AllarmeDona",
      "numero": "4424680",
      "operatore": "VODAF",
      "prefisso": "345"
    },
    {
      "nome": "Nicola",
      "numero": "2379500",
      "operatore": "TIM",
      "prefisso": "338"
    }
  ],
  "rubricaBeneficiari": [
    {
      "nome": "AVV. NICOLA CELLA",
      "iban": "IT25G0569601609000003132X43",
      "intestazione": "NICOLA CELLA"
    },
    {
      "nome": "CHIARA RESTELLI",
      "iban": "IT89R0558401749000000017966",
      "intestazione": "CHIARA RESTELLI"
    },
    {
      "nome": "CIPRIANO VERTEMARA",
      "iban": "IT61N0558401749000000081911",
      "intestazione": "CIPRIANO VERTEMARA"
    },
    {
      "nome": "DANIELA PIVATO",
      "iban": "IT42L0558401650000000032661",
      "intestazione": "DANIELA PIVATO"
    },
    {
      "nome": "DONATELLA VERTEMARA",
      "iban": "IT36O0316901600000309429215",
      "intestazione": "DONATELLA VERTEMARA"
    },
    {
      "nome": "DONATELLA VERTEMARA",
      "iban": "IT06H0558401650000000032924",
      "intestazione": "DONATELLA VERTEMARA"
    },
    {
      "nome": "INIZIATIVE IMM. TOSCANE FINARNO",
      "iban": "IT50P0303201615010000001308",
      "intestazione": "INIZIATIVE IMMOBILIARI TOSCANE FINARNO",
      "note": "PI09704310151"
    },
    {
      "nome": "INIZIATIVE IMMOBILIARI TOSCANE FINARNO",
      "iban": "IT50P0303201615010000001308",
      "intestazione": "INIZIATIVE IMMOBILIARI TOSCANE FINARNO"
    },
    {
      "nome": "ISTITUTO IMMACOLATA CONCEZIONE",
      "iban": "IT25Z0351201602000000001718",
      "intestazione": "ISTITUTO IMMACOLATA CONCEZIONE"
    },
    {
      "nome": "LA ZOLLA",
      "iban": "IT24D0351201614000000052320",
      "intestazione": "ASILO LA ZOLLA",
      "note": "ASILO BRUNO"
    },
    {
      "nome": "LA ZOLLA",
      "iban": "IT24D0351201614000000052320",
      "intestazione": "ASILO LA ZOLLA"
    },
    {
      "nome": "MASSIMO PERELLI",
      "iban": "IT10F0558401650000000032708",
      "intestazione": "MASSIMO PERELLI"
    },
    {
      "nome": "NAVA DANILO",
      "iban": "IT75Y0558401749000000000001",
      "intestazione": "DANILO NAVA"
    },
    {
      "nome": "PATRIZIA BERNARDI",
      "iban": "IT31Z0558401650000000032897",
      "intestazione": "PATRIZIA BERNARDI"
    },
    {
      "nome": "ROBERTA MARELLA",
      "iban": "IT57I0310401606000000100776",
      "intestazione": "ROBERTA MARELLA"
    },
    {
      "nome": "VERTEMARA CIPRIANO",
      "iban": "IT43A0200834070000004665208",
      "intestazione": "CIPRIANO VERTEMARA"
    }
  ],
  "rubricaPrepagate": [
    {
      "nome": "Restelli",
      "note": "test",
      "numeroCarta": "4082009509828301",
      "tipo": "jeans"
    },
    {
      "nome": "Vertemara",
      "note": "attiva",
      "numeroCarta": "5359218000001697",
      "tipo": "kjeans"
    },
    {
      "nome": "Fabio Rob",
      "note": "prova atm",
      "numeroCarta": "0238409328403284",
      "tipo": "atm"
    },
    {
      "nome": "Prova Atm nome",
      "note": "prova atm",
      "numeroCarta": "9455501229",
      "tipo": "atm"
    }
  ],
  "rubricaTesseraATM":[]
}
EOD;
}