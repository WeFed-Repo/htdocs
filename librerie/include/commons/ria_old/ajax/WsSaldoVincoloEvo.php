<?php
	header('content-type: application/json; charset=utf-8');
	$cc = isset($_GET['idNumeroConto'])? $_GET['idNumeroConto'] : '00000 - 0000005059 - EUR';
	switch ($cc) {
		case '00000 - 0000005059 - EUR':
?>{
    "sogliaContoEvoMin": "1.000,00",
    "sogliaContoEvoMax": "5.000,00",
    "sogliaContoEvoMinFormat": "1000.00",
    "sogliaContoEvoMaxFormat": "5000.00",
    "saldoDisponibile": "1.000,00",
    "saldoDisponibileFormat": "1000.00",
    "capitaleRisparmiato": "1000,00",
    "capitaleRisparmiatoFormat": "1000.00",
    "datiLineeVincolate": "10,00",
    "datiLineeVincolateFormat": "10.00",
    "listaVersamenti": [
        {
            "dataInserimento": "25/06/2013",
            "dataPrimo": "01/07/2013",
            "dataUltimo": null,
            "id": null,
            "importo": 100,
            "numRateAddebitate": 1,
            "numRateTotale": 6,
            "periodicita": "MENSILE",
            "progressivo": 1
        },
        {
            "dataInserimento": "29/07/2013",
            "dataPrimo": "01/08/2013",
            "dataUltimo": "31/12/9999",
            "id": null,
            "importo": 4.32,
            "numRateAddebitate": 0,
            "numRateTotale": 0,
            "periodicita": "MENSILE",
            "progressivo": 2
        }
    ],
    "esito": "ok"
}<?php
		break;
		case '00000 - 0000005060 - EUR': // Conto EVO con capitale risparmiato a 5000 euro
?>{
    "sogliaContoEvoMin": "250,00",
    "sogliaContoEvoMinFormat": "250.00",
    "sogliaContoEvoMax": "",
    "sogliaContoEvoMaxFormat": "",
    "saldoDisponibile": "32.663,16",
    "saldoDisponibileFormat": "32663.16",
    "capitaleRisparmiato": "1000,00",
    "capitaleRisparmiatoFormat": "1000.00",
    "capitaleRisparmiatoParteLibera": "145,00",
    "capitaleRisparmiatoParteLiberaFormat": "145.00",
    "capitaleRisparmiatoParteObiettivi": "855,00",
    "capitaleRisparmiatoParteObiettiviFormat": "855.00",
    "datiLineeVincolate": "30,00",
    "datiLineeVincolateFormat": "30.00",
    "sogliaMinimaDefault": "250.00",
    "listaVersamenti": [
        {
            "dataInserimento": "25/06/2013",
            "dataPrimo": "01/07/2013",
            "dataUltimo": null,
            "id": null,
            "importo": 100,
            "numRateAddebitate": 1,
            "numRateTotale": 6,
            "periodicita": "MENSILE",
            "progressivo": 1
        },
        {
            "dataInserimento": "29/07/2013",
            "dataPrimo": "01/08/2013",
            "dataUltimo": "31/12/9999",
            "id": null,
            "importo": 4.32,
            "numRateAddebitate": 0,
            "numRateTotale": 0,
            "periodicita": "MENSILE",
            "progressivo": 2
        }
    ],
    "esito": "ok"
}<?php
		break;
		case '00000 - 0000005061 - EUR': // Conto EVO con capitale risparmiato a 5000 euro
?>{
    "sogliaContoEvoMin": "250,00",
    "sogliaContoEvoMinFormat": "250.00",
    "sogliaContoEvoMax": "",
    "sogliaContoEvoMaxFormat": "",
    "saldoDisponibile": "1000,00",
    "saldoDisponibileFormat": "1000.00",
    "capitaleRisparmiato": "0,00",
    "capitaleRisparmiatoFormat": "0.00",
    "capitaleRisparmiatoParteLibera": "0,00",
    "capitaleRisparmiatoParteLiberaFormat": "0.00",
    "capitaleRisparmiatoParteObiettivi": "0,00",
    "capitaleRisparmiatoParteObiettiviFormat": "0.00",
    "datiLineeVincolate": "10,00",
    "datiLineeVincolateFormat": "10.00",
    "sogliaMinimaDefault": "250.00",
    "listaVersamenti": [
        {
            "dataInserimento": "25/06/2013",
            "dataPrimo": "01/07/2013",
            "dataUltimo": null,
            "id": null,
            "importo": 100,
            "numRateAddebitate": 1,
            "numRateTotale": 6,
            "periodicita": "MENSILE",
            "progressivo": 1
        },
        {
            "dataInserimento": "29/07/2013",
            "dataPrimo": "01/08/2013",
            "dataUltimo": "31/12/9999",
            "id": null,
            "importo": 4.32,
            "numRateAddebitate": 0,
            "numRateTotale": 0,
            "periodicita": "MENSILE",
            "progressivo": 2
        }
    ],
    "esito": "ok"
}<?php
	}
?>