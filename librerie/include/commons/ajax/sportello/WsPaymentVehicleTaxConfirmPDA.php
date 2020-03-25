<?php header('content-type: application/json; charset=utf-8'); ?>
<?php $isOK = true;?>
<?php if (!$isOK && $_POST['forzaAddebito'] !='true') { ?>
{"messaggio":"funzione non disponibile","esito":"ko_alert", "force": "1"}	
<?php } ?>
<?php if ($isOK) { ?>
{"esito":"ok","tipoDisposizione":"BolloAuto", "cro": 27852237}
<?php } ?>