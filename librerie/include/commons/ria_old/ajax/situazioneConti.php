<?php
	header('content-type: application/json; charset=utf-8');
	
	// set the default timezone to use. Available since PHP 5.1
	date_default_timezone_set('Europe/Rome');

	$dataT0 = date("d\\\/m\\\/Y");
	$dataBonifico = date("Ymd");
	
	// ----- DETTAGLIO -----
	if (isset($_GET['dett'])) {
		if (isset($_GET['ct']) && $_GET['dett'] == 4) {
?>{
    "dataT1": "<?php echo date("dmY", strtotime($dataBonifico . ' +1 days')) ?>",
    "dataT2": "<?php echo date("dmY", strtotime($dataBonifico . ' +2 days')) ?>",
    "dataT3": "<?php echo date("dmY", strtotime($dataBonifico . ' +3 days')) ?>",
    "margineT1": "1561.230",
    "margineT2": "8384.010",
    "margineT3": "44.120"
}<?php
		}
		elseif (isset($_GET['cc'])) { // Conto corrente
			if ($_GET['dett'] == 1) {  // Dettagli box con loyalty
				switch ($_GET['cc']) {
					default: // Webank
?>{
    "saldo": "62123123.45",
    "margine": "62123123.45",
	"dataMargine": "<?php echo $dataT0 ?>",
                        "fido": "1000000.00",
    "intestatario": "LOREM IPSUM DOLOR SIT AMET",
    "numero": "0000002070",
    "iban": "IT56R0340201749000000002070",
    "testo": "Hai tempo fino al 25 luglio per accumulare punti.",
    "loyalty": "1354",
    "colUtente": "*#*ND",
    "colConto": "*#*ND",
    "dataMargine": "<?php echo $dataT0 ?>",
    "custodiaTitoli": "false"
}<?php
					break;
				}
			}
			elseif ($_GET['dett'] == 2) {  // Dettagli box senza loyalty
				switch ($_GET['cc']) {
					case '00000 - 0000003541 - EUR': // xxxBanking - conto BE 1 card
?>{
    "saldo": "4001236.25",
	"dataMargine": "<?php echo $dataT0 ?>",
    "dataT1": "*#*ND",
    "dataT2": "*#*ND",
    "dataT3": "*#*ND",
    "margine": "1021238.26",
    "margineT1": "*#*ND",
    "margineT2": "*#*ND",
    "margineT3": "*#*ND",
                        "fido": "1000000.00",
    "lv": "9999.00",
    "intestatario": "LOREM IPSUM DOLOR SIT AMET",
    "numero": "0000003541",
    "iban": "IT12R0558401600000000003541",
    "testo": "Hai tempo fino al 25 luglio per accumulare punti.",
    "loyalty": "*#*ND",
    "colUtente": "true",
    "colConto": "true"
}<?php
					break;
					case '00000 - 0000055468 - EUR': // xxxBanking - conto BPM contabili disattive
?>{
    "saldo": "-12612344.57",
    "margine": "-11612344.57",
	"dataMargine": "<?php echo $dataT0 ?>",
    "dataT1": "*#*ND",
    "dataT2": "*#*ND",
    "dataT3": "*#*ND",
    "margineT1": "*#*ND",
    "margineT2": "*#*ND",
    "margineT3": "*#*ND",
    "fido": "9999999.00",
    "lv": "0.00",
    "intestatario": "LOREM IPSUM DOLOR SIT AMET",
    "numero": "0000055468",
    "iban": "IT09O0558401600000000055468",
    "testo": "Hai tempo fino al 25 luglio per accumulare punti.",
    "loyalty": "*#*ND",
    "colUtente": "true",
    "colConto": "false",
	"evo": "*#*ND"
}<?php
					break;
					case '00000 - 0000055469 - EUR': // xxxBanking - conto BPM contabili disattive
?>{
    "saldo": "12612344.57",
    "margine": "11612344.57",
	"dataMargine": "<?php echo $dataT0 ?>",
    "dataT1": "*#*ND",
    "dataT2": "*#*ND",
    "dataT3": "*#*ND",
    "margineT1": "*#*ND",
    "margineT2": "*#*ND",
    "margineT3": "*#*ND",
    "fido": "9999999.00",
    "lv": "111110.00",
    "intestatario": "LOREM IPSUM DOLOR SIT AMET",
    "numero": "0000055468",
    "iban": "IT09O0558401600000000055468",
    "testo": "Hai tempo fino al 25 luglio per accumulare punti.",
    "loyalty": "*#*ND",
    "colUtente": "true",
    "colConto": "false",
	"evo": "*#*ND"
}<?php
					break;
					case '00000 - 0000003541 - EUR': // xxxBanking - conto BPM contabili disattive
?>{
    "saldo": "12612344.57",
    "margine": "11612344.57",
	"dataMargine": "<?php echo $dataT0 ?>",
    "dataT1": "*#*ND",
    "dataT2": "*#*ND",
    "dataT3": "*#*ND",
    "margineT1": "*#*ND",
    "margineT2": "*#*ND",
    "margineT3": "*#*ND",
    "fido": "9999.00",
    "lv": "9999.00",
    "intestatario": "LOREM IPSUM DOLOR SIT AMET",
    "numero": "0000055468",
    "iban": "IT09O0558401600000000055468",
    "testo": "Hai tempo fino al 25 luglio per accumulare punti.",
    "loyalty": "*#*ND",
    "colUtente": "true",
    "colConto": "false"
}<?php
					break;
					case '00000 - 0000005059 - EUR': // xxxBanking - conto con EVO
					?>{
	"colConto": "false",
	"colUtente": "true",
    "saldo": "100000.00",
    "margine": "500.00",
	"dataMargine": "<?php echo $dataT0 ?>",
    "dataT1": "*#*ND",
    "dataT2": "*#*ND",
    "dataT3": "*#*ND",
    "margineT1": "*#*ND",
    "margineT2": "*#*ND",
    "margineT3": "*#*ND",
    "fido": "1000.00",
    "lv": "0.00",
    "intestatario": "MARIO ROSSI",
    "numero": "0000005059",
    "iban": "IT09O0558401600000000005059",
    "testo": "Hai tempo fino al 25 luglio per accumulare punti.",
    "loyalty": "*#*ND"
}<?php
					break;
					case '00000 - 0000005060 - EUR': // xxxBanking - conto con EVO
					?>{
	"colConto": "true",
	"colUtente": "true",
    "saldo": "1250.00",
	"dataMargine": "<?php echo $dataT0 ?>",
    "dataT1": "*#*ND",
    "dataT2": "*#*ND",
    "dataT3": "*#*ND",
    "margine": "1250.00",
    "margineT1": "*#*ND",
    "margineT2": "*#*ND",
    "margineT3": "*#*ND",
                        "fido": "1000000.00",
    "lv": "30.00",
    "intestatario": "MARIO ROSSI",
    "numero": "0000005060",
    "iban": "IT09O0558401600000000005060",
    "testo": "Hai tempo fino al 25 luglio per accumulare punti.",
    "loyalty": "*#*ND"
}<?php
					break;
					case '00000 - 0000005061 - EUR': // xxxBanking - conto con EVO
					?>{
	"colConto": "true",
	"colUtente": "true",
    "saldo": "1000.00",
	"dataMargine": "<?php echo $dataT0 ?>",
    "dataT1": "*#*ND",
    "dataT2": "*#*ND",
    "dataT3": "*#*ND",
    "margine": "500.00",
    "margineT1": "*#*ND",
    "margineT2": "*#*ND",
    "margineT3": "*#*ND",
                        "fido": "1000000.00",
    "lv": "10.00",
    "intestatario": "MARIO ROSSI",
    "numero": "0000005061",
    "iban": "IT09O0558401600000000005061",
    "testo": "Hai tempo fino al 25 luglio per accumulare punti.",
    "loyalty": "*#*ND"
}<?php
					break;
					case '00000 - 0000003387 - EUR': // xxxBanking - Freeway | fido + lv
					case '00000 - 0000003388 - EUR': // xxxBanking - Freeway | fido
					case '00000 - 0000003389 - EUR': // xxxBanking - Freeway | lv
					case '00000 - 0000003390 - EUR': // xxxBanking - Freeway
?>{
    "saldo": "4001236.25",
	"dataMargine": "07\/02\/2013",
	"dataMargineTrasf": "07\/02\/2013",
    "dataT1": "*#*ND",
    "dataT2": "*#*ND",
    "dataT3": "*#*ND",
    "margine": "1021238.26",
    "margineT1": "*#*ND",
    "margineT2": "*#*ND",
    "margineT3": "*#*ND",<?php
						if ($_GET['cc'] == '00000 - 0000003387 - EUR') {
?>	"fido": "9999.00",
    "lv": "9999.00",<?php
						} elseif ($_GET['cc'] == '00000 - 0000003388 - EUR') {
?>	"fido": "9999.00",
    "lv": "*#*ND",<?php
						} elseif ($_GET['cc'] == '00000 - 0000003389 - EUR') {
                            ?>    "fido": "1000000.00",
    "lv": "9999.00",<?php
						} else { //00000 - 0000003390 - EUR
                            ?>    "fido": "1000000.00",
    "lv": "*#*ND",<?php
						}
?>	"intestatario": "LOREM IPSUM DOLOR SIT AMET",
    "numero": "0000003541",
    "iban": "IT12R0558401600000000003541",
    "testo": "Hai tempo fino al 25 luglio per accumulare punti.",
    "loyalty": "*#*ND",
    "colUtente": "true",
    "colConto": "true",
	"custodiaTitoli": "true",
	"margineTrasf": "5681.69"
}<?php
					break;
					default: // Webank
?>{
    "saldo": "4001236.25",
	"dataMargine": "<?php echo $dataT0 ?>",
    "dataT1": "*#*ND",
    "dataT2": "*#*ND",
    "dataT3": "*#*ND",
    "margine": "1021238.26",
    "margineT1": "*#*ND",
    "margineT2": "*#*ND",
    "margineT3": "*#*ND",
                        "fido": "1000000.00",
    "lv": "*#*ND",
    "intestatario": "LOREM IPSUM DOLOR SIT AMET",
    "numero": "0000003541",
    "iban": "IT12R0558401600000000003541",
    "testo": "Hai tempo fino al 25 luglio per accumulare punti.",
    "loyalty": "*#*ND",
    "colUtente": "true",
    "colConto": "true",
	"dataMargineTrasf": "<?php echo $dataT0 ?>",
	"custodiaTitoli": "true",
	"margineTrasf": "5681.69"
}<?php
				}
			}
			elseif ($_GET['dett'] == 3) { // Solo loyalty
?>{
    "saldo": "*#*ND",
    "margine": "*#*ND",
                "fido": "1000000.00",
    "intestatario": "*#*ND",
    "numero": "*#*ND",
    "iban": "*#*ND",
    "testo": "*#*ND",
    "loyalty": "1658",
    "colUtente": "*#*ND",
    "colConto": "*#*ND",
    "custodiaTitoli": "*#*ND"
    "dataMargine": "*#*ND",
}<?php
			}
			elseif ($_GET['dett'] == 4) {
?>{
    "dataT1": "<?php echo date("dmY", strtotime($dataBonifico . ' +1 days')) ?>",
    "dataT2": "<?php echo date("dmY", strtotime($dataBonifico . ' +2 days')) ?>",
    "dataT3": "<?php echo date("dmY", strtotime($dataBonifico . ' +3 days')) ?>",
    "margineT1": "750.231",
    "margineT2": "857.010",
    "margineT3": "545.000"
}<?php
			}
		}
		elseif (isset($_GET['cd'])) { // Conto deposito
			if (isset($_GET['lv']) && $_GET['lv'] == 'true') { // Box linee vincolate
?>{
    "vincoli": {
        "3": {
            "testTooltip": null,
            "link": null,
            "dataSpromo": "30\/06\/2010",
            "gifSmall": null,
            "gifLarge": null,
            "gifNav": null,
            "std": "1,50",
            "plus": "0",
            "stdNetto": "1,095",
            "plusNetto": "0",
            "codice": "NVIN003599",
            "datas": "20\/07\/2011",
            "dataa": "21\/04\/2011",
            "isNonSvinc": "N",
            "isPlus": "N",
            "isFresh": "N",
            "durataVinc": "3",
            "saldoFresh": "*#*ND"
        },
        "6": {
            "testTooltip": null,
            "link": null,
            "dataSpromo": "30\/06\/2010",
            "gifSmall": null,
            "gifLarge": null,
            "gifNav": null,
            "std": "2,00",
            "plus": "0",
            "stdNetto": "1,46",
            "plusNetto": "0",
            "codice": "NVIN006599",
            "datas": "20\/10\/2011",
            "dataa": "21\/04\/2011",
            "isNonSvinc": "N",
            "isPlus": "N",
            "isFresh": "N",
            "isNew": "N",
            "durataVinc": "6",
            "saldoFresh": "*#*ND"
        }
        ,"12": {
            "testTooltip": null,
            "link": null,
            "dataSpromo": "15\/07\/2011",
            "gifSmall": "/wbx/upload/tassi/ria_bgtasso03PA.gif",
            "gifLarge": "/wbx/upload/tassi/ria_boxofferte03.jpg",
            "gifNav": null,
            "std": "2,46",
            "plus": "2,60",
            "stdNetto": "1,942",
            "plusNetto": "2,135",
            "codice": "NVIN018599",
            "datas": "20\/04\/2012",
            "dataa": "21\/04\/2011",
            "isNonSvinc": "N",
            "isPlus": "S",
            "isFresh": "N",
            "isNew": "N",
            "durataVinc": "12",
            "saldoFresh": "*#*ND"
        }<?php
				switch ($_GET['cd']) {
					case '00596 - 0000099102 - EUR': // Extra Money - saldo positivo - pos0
					case '00596 - 0000099103 - EUR': // Extra Money - saldo positivo - senza0
					case '00596 - 0000099123 - EUR': // Extra Money - saldo positivo - senza2
?>		,"15": {
            "testTooltip": null,
            "link": null,
            "dataSpromo": "15\/07\/2011",
            "gifSmall": "/wbx/upload/tassi/ria_bgtasso03CO.gif",
            "gifLarge": "/wbx/upload/tassi/ria_boxofferte03.jpg",
            "gifNav": null,
            "std": "2,46",
            "plus": "2,60",
            "stdNetto": "1,942",
            "plusNetto": "2,135",
            "codice": "NVIN018599",
            "datas": "20\/04\/2012",
            "dataa": "21\/04\/2011",
            "isNonSvinc": "N",
            "isPlus": "S",
            "isFresh": "N",
            "isNew": "N",
            "durataVinc": "15",
            "saldoFresh": "*#*ND"
        }<?php
					break;
				}

				switch ($_GET['cd']) {
					case '00596 - 0000099101 - EUR': // Extra Money - saldo zero
?>		,"99": {
            "testTooltip": null,
            "link": null,
            "dataSpromo": "10\/06\/2011",
            "gifSmall": "/wbx/upload/tassi/ria_bgtassoEXM.gif",
            "gifLarge": null,
            "gifNav": null,
            "std": "3,00",
            "plus": "0",
            "stdNetto": "2,742",
            "plusNetto": "0",
            "codice": "NVIN012FM1",
            "datas": "20\/04\/2012",
            "dataa": "21\/04\/2011",
            "isNonSvinc": "N",
            "isPlus": "N",
            "isFresh": "S",
            "isNew": "N",
            "durataVinc": "12",
            "saldoFresh": "0"
        }<?php
					break;
					case '00596 - 0000099102 - EUR': // Extra Money - saldo positivo - pos0
					case '00596 - 0000099112 - EUR': // Extra Money - saldo positivo - pos1
					case '00596 - 0000081080 - EUR': // Extra Money - saldo positivo
?>		,"99": {
            "testTooltip": null,
            "link": null,
            "dataSpromo": "10\/06\/2011",
            "gifSmall": "/wbx/upload/tassi/ria_bgtassoEXM.gif",
            "gifLarge": null,
            "gifNav": null,
            "std": "3,00",
            "plus": "0",
            "stdNetto": "2,742",
            "plusNetto": "0",
            "codice": "NVIN012FM1",
            "datas": "20\/04\/2012",
            "dataa": "21\/04\/2011",
            "isNonSvinc": "N",
            "isPlus": "N",
            "isFresh": "S",
            "isNew": "N",
            "durataVinc": "12",
            "saldoFresh": "123412"
        }<?php
					break;
				}
				
				switch ($_GET['cd']) {
					case '00596 - 0000099102 - EUR': // Extra Money - saldo positivo - pos0
					case '00596 - 0000099112 - EUR': // Extra Money - saldo positivo - pos1
					case '00596 - 0000099103 - EUR': // Extra Money - saldo positivo - senza0
					case '00596 - 0000099113 - EUR': // Extra Money - saldo positivo - senza1
?>		,"18": {
            "testTooltip": "Prova testo linea 18 mesi",
            "link": null,
            "dataSpromo": "15\/07\/2011",
            "gifSmall": "/wbx/upload/tassi/ria_bgtassoMW.gif",
            "gifLarge": "/wbx/upload/tassi/ria_boxofferteMW.gif",
            "gifNav": null,
            "std": "3,50",
            "plus": "0",
            "stdNetto": "2,955",
            "plusNetto": "0",
            "codice": "NVIN018599",
            "datas": "20\/04\/2012",
            "dataa": "21\/04\/2011",
            "isNonSvinc": "S",
            "isPlus": "N",
            "isFresh": "N",
            "isNew": "N",
            "durataVinc": "12",
            "saldoFresh": "*#*ND",
            "minVinc": "200.00",
            "nomeNonSvinc": "MediaWorld",
            "testTootip": "MediaWorld 12 mesi"
        }<?php
				}
?>	},
    "premiato": "0",
	"inScadenza": {
		"rendimento": "90.27",
		"data": "16/06/2014",
		"valore": "90.00"
	}
}<?php
			}
			else { // Box conto deposito
				switch ($_GET['cd']) {
					case '00000 - 0000003388 - EUR': // xxxBanking - conto Freeway
?>{
    "intestatario": "LOREM IPSUM DOLOR SIT AMET",
    "numero": "0000001640",
    "iban": "IT10G0558433080000000001640",
    "testo": "",
    "guadagnoNetto": "0.00",
    "tassi": {
        "1,026": {
            "da": "0",
            "a": "0"
        }
    }
}<?php		
					break;
					default: // Webank
?>{
    "intestatario": "LOREM IPSUM DOLOR SIT AMET",
    "numero": "0000002070",
    "iban": "IT56V0340200001000000002070",
    "testo": "",
    "guadagnoNetto": "0.00",
    "tassi": {
        "1,026": {
            "da": "0",
            "a": "1000000"
        }
    }
}<?php		
				}
			}
		}
		elseif (isset($_GET['cder'])) { // Conto derivati
?>{
    "margineImpegnato": "0.00",
    "profitLoss": "0.00"
}<?php
		}
	}
	// ----- SALDI E MARGINI -----
	else {
		if (isset($_GET['ct'])) { // Conto tecnico
			if (isset($_GET['cder'])) { // CT +DER
?>{
    "dataBonifico": "<?php echo $dataBonifico ?>",
    "contoCorrente": {
        "dataMargine": "*#*ND",
        "dataMargineTrasf": "*#*ND",
		"fido": "9999999.00",
		"lv": "*#*ND",
        "saldo": null,
        "margine": null,
        "custodiaTitoli": "*#*ND",
        "margineTrasf": "0.00"
    },
    "contoDeposito": {
        "margineNoPreav": "*#*ND",
        "saldo": "*#*ND",
        "margine": "*#*ND"
    },
    "contoDerivati": {
        "saldo": "12312311.00",
        "margine": "12312311.00"
    },
    "contoTecnico": {
        "intestatario": "LOREM IPSUM DOLOR SIT AMET",
        "dataMargine": "<?php echo $dataT0 ?>",
        "saldo": "-1231235.63",
        "margine": "-1231215.63"
    },
    "lineeVincolate": {
        "inScadenza": "*#*ND",
        "totale": "0.00"
    }
}<?php
			}
			else { // CT
?>{
    "dataBonifico": "<?php echo $dataBonifico ?>",
    "contoCorrente": {
        "dataMargine": "*#*ND",
        "dataMargineTrasf": "*#*ND",
		"fido": "9999999.00",
		"lv": "99999999.00",
        "saldo": null,
        "margine": null,
        "custodiaTitoli": "*#*ND",
        "margineTrasf": "0.00"
    },
    "contoDeposito": {
        "margineNoPreav": "*#*ND",
        "saldo": "*#*ND",
        "margine": "*#*ND"
    },
    "contoDerivati": {
        "saldo": "*#*ND",
        "margine": "*#*ND"
    },
    "contoTecnico": {
        "intestatario": "LOREM IPSUM DOLOR SIT AMET",
        "dataMargine": "<?php echo $dataT0 ?>",
        "saldo": "12313856.98",
        "margine": "12313856.98"
    },
    "lineeVincolate": {
        "inScadenza": "*#*ND",
        "totale": "0.00"
    }
}<?php
			}
		}
		elseif (isset($_GET['cder'])) {
			if (isset($_GET['cd'])) { // CC +DEP +DER
?>{
    "dataBonifico": "<?php echo $dataBonifico ?>",
    "contoCorrente": {
        "dataMargine": "<?php echo $dataT0 ?>",
        "dataMargineTrasf": "<?php echo $dataT0 ?>",
		"fido": "9999999.00",
		"lv": "*#*ND",
        "saldo": "12314415.86",
        "margine": "12396287.72",
        "custodiaTitoli": "true",
        "margineTrasf": "5681.69",
		"iban": "IT56R0340201749000000002070"
    },
    "contoDeposito": {
        "margineNoPreav": "43366.0000002",
        "saldo": "4312366.00",
        "margine": "42212366.00"
    },
    "contoDerivati": {
        "saldo": "0.00",
        "margine": "85123704.89"
    },
    "contoTecnico": {
        "intestatario": "*#*ND",
        "dataMargine": "*#*ND",
        "saldo": "*#*ND",
        "margine": "*#*ND"
    },
    "lineeVincolate": {
        "inScadenza": {
            "rendimento": "90.27",
            "data": "16/06/2016",
            "valore": "90.00"
        },
        "totale": "110.00"
    }
}<?php
			}
			else { // CC +DER
?>{
    "dataBonifico": "<?php echo $dataBonifico ?>",
    "contoCorrente": {
        "dataMargine": "<?php echo $dataT0 ?>",
        "dataMargineTrasf": "<?php echo $dataT0 ?>",
		"fido": "9999999.00",
		"lv": "99999999.00",
        "saldo": "65926.96",
        "margine": "65926.96",
        "custodiaTitoli": "true",
        "margineTrasf": "65926.96",
		"evo": "*#*ND"
    },
    "contoDeposito": {
        "margineNoPreav": "*#*ND",
        "saldo": "*#*ND",
        "margine": "*#*ND"
    },
    "contoDerivati": {
        "saldo": "0.00",
        "margine": "0.00"
    },
    "contoTecnico": {
        "intestatario": "*#*ND",
        "dataMargine": "*#*ND",
        "saldo": "*#*ND",
        "margine": "*#*ND"
    },
    "lineeVincolate": {
        "inScadenza": "*#*ND",
        "totale": "0.00"
    }
}<?php
			}
		}
		elseif (isset($_GET['evo'])) { // CC + EVO
?>{
    "dataBonifico": "<?php echo $dataBonifico ?>",
    "contoCorrente": {
        "dataMargine": "<?php echo $dataT0 ?>",
        "dataMargineTrasf": "<?php echo $dataT0 ?>",<?php
			if ($_GET['cc'] == '00000 - 0000005059 - EUR') {
?>		"fido": "100.00",
		"lv": "500.00",
		"evo": "0.00",
		<?php
			}  else { //00000 - 0000003390 - EUR
?>		"fido": "99999999.99",
		"lv": "*#*ND",<?php
			}
?>		"saldo": "1000.00",
        "margine": "999.99",
        "custodiaTitoli": "*#*ND",
        "margineTrasf": "999.99",
		"margineTrasfVevo": "399.99"
    },
    "contoDeposito": {
        "margineNoPreav": "*#*ND",
        "saldo": "*#*ND",
        "margine": "*#*ND"
    },
    "contoDerivati": {
        "saldo": "*#*ND",
        "margine": "*#*ND"
    },
    "contoTecnico": {
        "intestatario": "*#*ND",
        "dataMargine": "*#*ND",
        "saldo": "*#*ND",
        "margine": "*#*ND"
    },
    "lineeVincolate": {
        "inScadenza": "*#*ND",
        "totale": "0.00"
    },
	"risparmioEvoluto": {
        "saldo": "0.00",
		"margine": "20.00"
    }
}<?php
			}
		
		
		else { // CC +DEP
?>{
    "dataBonifico": "<?php echo $dataBonifico ?>",
    "contoCorrente": {
        "dataMargine": "<?php echo $dataT0 ?>",
        "dataMargineTrasf": "<?php echo $dataT0 ?>",<?php
			if ($_GET['cc'] == '00000 - 0000003387 - EUR') {
?>		"fido": "9999999.00",
		"lv": "99999999.00",<?php
			} elseif ($_GET['cc'] == '00000 - 0000003388 - EUR') {
?>		"fido": "9999999.00",
		"lv": "*#*ND",<?php
			} elseif ($_GET['cc'] == '00000 - 0000003389 - EUR') {
                ?>        "fido": "1000000.00",
		"lv": "99999999.00",<?php
			} else { //00000 - 0000003390 - EUR
                ?>        "fido": "1000000.00",
		"lv": "*#*ND",<?php
			}
?>		"saldo": "1198.99",
        "margine": "1198.99",
        "custodiaTitoli": "*#*ND",
        "margineTrasf": "1198.99",
		"iban": "IT56R0340201749000000002070"
    },
    "contoDeposito": {
        "margineNoPreav": "200.0000002",
        "saldo": "1150.30",
        "margine": "550.10"
    },
    "contoDerivati": {
        "saldo": "*#*ND",
        "margine": "*#*ND"
    },
    "contoTecnico": {
        "intestatario": "*#*ND",
        "dataMargine": "*#*ND",
        "saldo": "*#*ND",
        "margine": "*#*ND"
    },
	"lineeVincolate": {
        "inScadenza": {
            "rendimento": "90.27",
            "data": "16/06/2014",
            "valore": "90.00"
        },
        "totale": "190.00"
    }
	
}<?php
		}
	}
?>