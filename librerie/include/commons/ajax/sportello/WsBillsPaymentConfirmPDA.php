<?php header('content-type: application/json; charset=utf-8'); ?>
<?php $isOK = true;?>
<?php if (!$isOK) { ?>
{"messaggio":"funzione non disponibile prova","esito":"ko_alert"}	
<?php } ?>
<?php if ($isOK) { ?>
{"esito":"ok","feedback" : "testo messaggio"}
<?php } ?>