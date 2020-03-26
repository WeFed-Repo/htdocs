<?php
	$wdg = $_GET["wdg"];
	$wdgel = explode('|', $wdg);
?>
<div id="contentLeft" class="col-sm-20 hidden-print spalla hidden-xs">
<?php
	foreach ($wdgel as &$wdgfile) {

   	 	virtual("/include/oggetti/Widget/widget_".$wdgfile."/oggetto.php");

	}
?>
</div>