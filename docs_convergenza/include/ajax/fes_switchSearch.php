<?php
   header("content-type: application/json; charset=utf-8");
   // Simula il tempo di esecuzione della chiamata
   // sleep(1);
   virtual("/core/base.php");
?>
[
	<?php for($x=0;$x<30;$x++) { 
		if ($x>0) print ",";
		?>
		{
			"cb": "<input type='radio' name='fundRadioSel' data-isin='<?php print rand(1000000000,1999999999);?>' data-fundname='<?php print randomText(7,3); ?>' >",
			"nome": "<?php print randomText(7,3); ?>",
			"rating": <?php print rand(0,5);?>,
	        "assogestioni": "<?php print randomText(5,2); ?>",
	       	"rend":<?php print rand(-50,50);?>,
			"nav":<?php print rand(0,99990)/1000;?>,
	        "val": "EUR"
		}
	<?php
	}
	?>
]