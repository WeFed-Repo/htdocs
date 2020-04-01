<?php virtual('/youwebbusiness/layout/oggetti/selettore/selettore_rapporti/oggetto.php'); ?>

<?php 

tabs_obj(
	array(
		array('label'=>'Dettaglio', 'link'=>'tpl_finanziamenti_rateali'),
		array('label'=>'Ammortamento','link'=>'tpl_finanziamenti_rateali_ammortamento'),
		array('label'=>'Pre Ammortamento','link'=>'tpl_finanziamenti_rateali_pre_ammortamento'),
    ),  'tabsContenuti mb-0'
);

 ?>