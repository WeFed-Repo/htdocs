<!-- titolo -->
<div class="with-stepper">
	<h1>
		Profilatura Utenti
	</h1>
</div>

<?php 
$tmp = $_GET['tpl'];
$is_gestioneGruppi = $tmp=='tpl_profilatura_utenti.php'||$tmp=='tpl_profilatura_utenti_modifica.php'||$tmp=='tpl_profilatura_utenti_abilitazioni.php';
tabs_obj(
	array(
		array('label'=>'Gestione Gruppi','active'=>$is_gestioneGruppi,'link'=>'tpl_profilatura_utenti'),
		array('label'=>'Creazione Utenti','link'=>'tpl_profilatura_utenti_crea'),
		array('label'=>'Elenco Utenti','link'=>'tpl_profilatura_utenti_elenco'),
		array('label'=>'Gestione Dispositivi','link'=>'tpl_profilatura_utenti_gestione'),
		array('label'=>'Gestione Iter Autorizzativo','link'=>'tpl_profilatura_utenti_iter')
	)
);
?>