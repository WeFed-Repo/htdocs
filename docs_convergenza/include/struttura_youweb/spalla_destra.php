<?php
	$wdg = $_GET["wdg"];
	$wdgel = explode('|', $wdg);
?>
<div id="spalla">
<a id="spallaswitch"><i class="icon icon-arrow_right"></i><i class="icon icon-arrow_left"></i></a>

<?php

	// LINK RAPIDI, SEMPRE PER PRIMO
	virtual("/include/oggetti/Widget/Verona/widget_N02/oggetto.php");

?>

<?php
	// virtual("/include/oggetti/Widget/Verona/widget_N22/oggetto.php");
?>
	<?php
		virtual("/include/oggetti/Widget/commons/widget_ban/oggetto.php");
		// Accoda i widget selezionati tranne il primo
		/* foreach ($wdgel as &$wdgfile) {
			if ($wdgfile != "02") {
	   	 		virtual("/include/oggetti/Widget/Verona\widget_N".$wdgfile."/oggetto.php");
	   	 	}
		}*/

		// virtual("/include/oggetti/Widget/Verona/widget_N23/oggetto.php");
	?>
</div>
