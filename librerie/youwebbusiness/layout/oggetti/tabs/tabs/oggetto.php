<!--
NOTE: Per la voce aperta di default: eliminare la classe .collapsed da card-header
-->

<?php 
$tabs = array(
    array('label'=>'Tab Link active','active'=>true)
);
$tabs[] = array('label'=>'Tab disabled ','disabled'=>true);
for ($i = 1; $i <= 6; $i++) { $tabs[] = array('label'=>'Tab Link '.$i); }
tabs_obj($tabs);
?>
