<?php
$codicemutuo = $_GET["codicemutuo"];
?>
<div id="leftcontent" class="promo">	
<div class="maincontenttopper"></div>
	<!-- titolo -->
	<?php virtual("/librerie/include/commons/titoli/pub_wb_int_tit_003.php"); ?>
	<!--fine  titolo -->
	
	<!--- CALCOLATORE MUTUI -->
	<div id="calcolatoremutui"></div>
	
	<script defer="defer" type="text/javascript">
	
	//Funzione SIFR da mettere nel blocco dedicato per il titolo (ovviamente vanno messi gli stili)
	
	// fine funzione SIFR da mettere nel blocco dedicato per il titolo
	

	// Funzioni per autoadattamento da includere in pub_generic.js
	// oppure da lasciare in pagina
	/*function setCalcolatoreHeight(altezza)
		{
		document.getElementById("content").style.height = altezza+50+'px';
		document.getElementById("leftcontent").style.height = altezza+50+'px';
		document.getElementById("calcolatore_mutui").height = altezza;
		}*/
	// fine funzioni per autoadattamento
	
			  
	// SWF Object
  	var calcolatoremutui = new  SWFObject("/swf/calcolatore_mutui.swf?codicemutuo=<?php print $codicemutuo;?>", "calcolatore_mutui", "560", "400", "8", "#FFFFFF");
	calcolatoremutui.addParam("quality", "high");		
	calcolatoremutui.addParam("wmode", "transparent");
	//calcolatoremutui.addParam("allowscriptaccess", "samedomain");
	calcolatoremutui.addParam("menu", "false");
	calcolatoremutui.addParam("scale", "noscale"); 
	//calcolatoremutui.addVariable("overstretch","fit");
	calcolatoremutui.addParam("FlashVars","xmlfile=/swf/xml/mutui_dati.php&pagetopost=/connect.php?page=str_interna_pub_wb.php%26tpl=tpl_pub_mutui_richiesta.php%26strutt=nonavig%26");

	//eventualmente per passare alla pagina di "dettaglio" usare la seguente istruzione
	// calcolatoremutui.addParam("FlashVars","xmlfile=/swf/xml/mutui_dati.php&pagetopost=/connect.php?page=str_interna_pub_wb.php%26tpl=tpl_priv_mutui_cat_prod.php&codicemutuo=xxxyyy");
	
	calcolatoremutui.write("calcolatoremutui");
	// Fine SWF Object
	</script>
	<!--- / CALCOLATORE MUTUI -->
	
<div></div>
</div>
<?php 
	virtual ("/librerie/php/str_right_pub_wb.php");
?>
