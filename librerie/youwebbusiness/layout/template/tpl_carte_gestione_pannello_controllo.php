<!-- NOTE: le classe .read-mode e .write-mode mostrano o nascondono
gli elementi quando si è in modalità modifica. -->

<div class="with-stepper">
	<h1> Panello di controllo <button type="button" class="btn-icon-help" data-modal-open="panello_controllo_modal"></button> </h1>
</div>
<?php modal_demo($id='panello_controllo_modal',$title="Panello di controllo");?>

<div class="c-pannello-controllo no-margin-section">

<?php

	virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/box_carta_selezionata.php');

	virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/box_titolare.php');

	virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/box_tipo_addebito.php');

	virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/box_limiti_utilizzo.php');

	virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/box_websafe.php');

	virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/box_geosafe.php');

	virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/box_merchant_control.php');

	virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/box_calendar_control.php');

	virtual('/youwebbusiness/layout/template/tpl_carte_gestione_pannello_controllo/pulsantiera_generica.php');

?>

</div>
