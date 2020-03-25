<!-- INIZIO CODICE-->
<?php 

	if ($customer != "bus" && $bank != 'ca' && $bank != 'bm') {
		virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_050.html");
	}
	else {
		virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_050_bus.html");
	}

	if ($customer == "bus")	{
		virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_040e.html");
	}
	else {
		virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_040.html");
	}
?>
<!-- FINE CODICE-->
<br class="clear">
<!-- INIZIO CODICE-->
<?php 
	virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_060.php");
?>
<!-- FINE CODICE-->