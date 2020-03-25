<?php header('content-type: application/json; charset=utf-8'); ?>
<?php $isOK = true;?>
<?php if (!$isOK) { ?>
{"messaggio":"non ci sono date disponibili","esito":"ko_alert"}
<?php } ?>
<?php if ($isOK) { ?>
{"esito":"ok","date":[{"data":"24/03/2014"},{"data":"25/03/2014"},{"data":"26/03/2014"}]}
<?php } ?>
