<?php
	header('content-type: application/json; charset=utf-8');
	
	// set the default timezone to use. Available since PHP 5.1
	date_default_timezone_set('Europe/Rome');

	$data = date("Ymd");
?>{
    "errore": "",
    "data": "<?php echo $data ?>"
}