<?php
	
	$fname = $_POST["fname"];
	$fcont = $_POST["fcont"];

	$basefolder = "./html_statico/";

	file_put_contents($basefolder.$fname,$fcont);
	
	do {
		if (file_exists($basefolder.$fname)) {
			?>
			{
				"esito":"ok",
				"msg": "Creato file <?php print ($fname); ?>"
			}
			<?php
			break;
		}
	} while(!file_exists($basefolder.$fname));
?>
