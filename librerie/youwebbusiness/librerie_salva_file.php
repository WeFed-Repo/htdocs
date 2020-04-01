<?php
	
	$fname = $_POST["fname"];
	$fcont = $_POST["fcont"];

	$basefolder = "./html_statico/";

	file_put_contents($basefolder.$fname,$fcont);
	
?>
{
	"esito":"ok",
	"msg": "Creato file <?php print ($fname); ?>"
}