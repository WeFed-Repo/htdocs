<?php
	header('content-type: application/json; charset=utf-8');
	$isOttobre = false;
	if ($isOttobre) {
?>
{"movMese":{"catEnt":[{"id":"5","label":"Compravendita titoli","valore":706}],"catUsc":[{"id":"28","label":"Compravendita titoli","valore":-730},{"id":"-1","label":"Altri addebiti","valore":-67.2}],"listaEnt":{"20161003":{"num":1,"tot":706}},"listaUsc":{"20161003":{"num":1,"tot":-730},"20161004":{"num":1,"tot":-57.2},"20161006":{"num":1,"tot":-10}},"saldo":{"20161002":933.12,"20161003":909.12,"20161005":851.92}},"saldoIniziale":933.12,"saldoFinale":841.92}

<?php
	} else {
?>{
"movMese":{"catEnt":[{"id":"49","label":"Operatività overnight e prestito titoli","valore":75.67},{"id":"21","label":"Trasferimenti da conto derivati","valore":2424581}],"catUsc":[{"id":"48","label":"Operatività overnight e prestito titoli","valore":-19.67},{"id":"37","label":"Ricariche","valore":-40},{"id":"26","label":"RID e addebiti diretti Sepa","valore":-710.1},{"id":"-1","label":"Altri addebiti","valore":-639.87}],"listaEnt":{"20161010":{"num":1,"tot":2424581},"20161007":{"num":1,"tot":75.67}},"listaUsc":{"20161011":{"num":1,"tot":-71},"20161010":{"num":2,"tot":-402.45},"20161017":{"num":1,"tot":-27},"20161019":{"num":1,"tot":-30},"20161018":{"num":2,"tot":-639.1},"20161020":{"num":1,"tot":-10},"20161005":{"num":1,"tot":-210.42},"20161007":{"num":1,"tot":-19.67}},"saldo":{"20161004":35697.52,"20161006":35487.1,"20161009":35543.1,"20161010":2459721.65,"20161016":2459650.65,"20161017":2459623.65,"20161018":2458984.55,"20161019":2458954.55}},"saldoIniziale":35697.519999999815,"saldoFinale":2458944.55
}<?php
	}
?>