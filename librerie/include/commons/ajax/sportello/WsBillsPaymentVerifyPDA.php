<?php header('content-type: application/json; charset=utf-8'); ?>
<?php $isOK = true;?>
<?php if (!$isOK) { ?>
{"messaggio":"Verificare l'importo, la divisa ed il numero del MAV/RAV.","esito":"ko_alert"}
<?php } ?>
<?php if ($isOK) { ?>
{"messaggio":"lorem ipsum","esito":"ok","testoContoTerzi" : "testo messaggio da mostrare"}
<?php } ?>
