<?php
// Invio l'header JSON
header('content-type: application/json; charset=utf-8');

// Carico le variabili POST necessarie
$fumatore = (isset($_POST['fumatore']))? $_POST['fumatore'] : null;
$capitale = (isset($_POST['capitale']) && is_numeric($_POST['capitale']))? intval($_POST['capitale']) : null;

// Verifico le variabili e, se OK, restituisco il JSON
if ($fumatore != null && $capitale != null
	&& in_array($fumatore, array(0, 20, 99))
	&& in_array($capitale, array(50000, 100000, 150000, 200000, 250000), true)) {
	
	sleep(1);

	$perc = 2;
	
	if ($capitale < 150000) {
		$mese = 'null';
		$anno = $capitale * $perc * 36 / 10000;
	}
	else {
		$mese = $capitale * $perc * 3 / 10000;
		$anno = $mese * 12;
	}
	
?>{
	"mese": <?php echo $mese ?>,
	"anno": <?php echo $anno ?>
}<?php } ?>