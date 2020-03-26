<?php
	$wdg = $_GET["wdg"];
	$wdgel = explode('|', $wdg);
?>
<div id="spalla">
<a id="spallaswitch"><i class="icon icon-freccia_dx"></i><i class="icon icon-freccia_sx"></i></a>

<?php
		
	// LINK RAPIDI, SEMPRE PER PRIMO	
	virtual("/include/oggetti/Widget/widget_N02/oggetto.php");

	// Accoda i widget selezionati tranne il primo
	foreach ($wdgel as &$wdgfile) {
		if ($wdgfile != "02") {
   	 		virtual("/include/oggetti/Widget/widget_N".$wdgfile."/oggetto.php");
   	 	}
	}
?>
</div>