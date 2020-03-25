<?php header('content-type: application/json; charset=utf-8'); ?>
<?php $isOK = true;?>
<?php if (!$isOK) { ?>
{"messaggio":"Si &egrave; verificato un errore: lorem ipsum.","esito":"ko_alert"}
<?php } ?>
<?php if ($isOK) { ?>
{"esito":"ok","intestatario":"sara strepponi","testoContoTerzi" : "testo messaggio da mostrare"}
<?php } ?>