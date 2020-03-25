<?php
	header('content-type: application/json; charset=utf-8');

    sleep(1);
	
	// set the default timezone to use. Available since PHP 5.1
	date_default_timezone_set('Europe/Rome');
	$data = date("d\/m\/Y");

?>{
	"errore": "",
	"esito": "ok",
	"contoCorrente": {
		"saldo": "910.96",
		"margine": "625.21",
		"dataMargine": "<?php echo $data ?>",
		"margineTrasf": "625.21",
		"dataMargineTrasf": "<?php echo $data ?>"
	},
	"contoDeposito": {
		"saldo": "2000.00",
		"margine": "2000.00",
		"margineNoPreav": "2000.00"
	}
}