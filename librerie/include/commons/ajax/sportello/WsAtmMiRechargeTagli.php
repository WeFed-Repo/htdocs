<?php header('content-type: application/json; charset=utf-8'); ?>
<?php $isOK = true;?>
<?php if (!$isOK) { ?>
{"messaggio":"Si &egrave; verificato un errore: non ci sono tessere valide.","esito":"ko_alert"}
<?php } ?>
<?php if ($isOK) { ?>
{"esito":"ok","ListaTagli":[{"descriz":"SETT URBANO","importo":"11,30","dataval":"24/03/2014"},{"descriz":"MENSILE URBANO","importo":"13,30","dataval":"24/03/2014"},{"descriz":"SETT URBANO","importo":"11,30","dataval":"24/03/2014"},{"descriz":"SETT URBANO","importo":"11,30","dataval":"24/03/2014"},{"descriz":"SETT URBANO","importo":"11,30","dataval":"24/03/2014"},{"descriz":"SETT URBANO","importo":"11,30","dataval":"24/03/2014"},{"descriz":"SETT URBANO","importo":"11,30","dataval":"24/03/2014"},{"descriz":"SETT URBANO","importo":"11,30","dataval":"24/03/2014"}],"idTransazione":"00059908660"}
<?php } ?>
