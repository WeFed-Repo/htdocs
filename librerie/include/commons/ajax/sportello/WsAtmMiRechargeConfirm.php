<?php header('content-type: application/json; charset=utf-8'); ?>
<?php $isOK = true;?>
<?php if (!$isOK && $_POST['forzaAddebito'] !='true') { ?>
{"messaggio":"funzione non disponibile","esito":"ko_alert", "force": "1"}	
<?php } ?>
<?php if (!$isOK && $_POST['forzaAddebito'] =='true') { ?>
{"messaggio":"funzione non disponibile","esito":"ko_alert"}	
<?php } ?>
<?php if ($isOK) { ?>
{"numSalvato":"ok","esito":"ok", "numeroCRO": 27852237}
<?php } ?>