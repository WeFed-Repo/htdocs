<?php header('content-type: application/json; charset=utf-8'); ?>
<?php
$esito = true;
If ($esito == false) :
?>

{"ESITO":"KO","MSG_ERRORE_TOP":"testo errore top","MSG_ERRORE_BOTTOM":"testo errore bottom"}

<?php EndIf; ?>
<?php
If ($esito == true) :
?>

{"ESITO":"OK"}

<?php EndIf; ?>

