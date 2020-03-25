<?php
	$sidemenubannerxml = "1";

	if ($tpl =="tpl_pub_piattaforme_di_trading_wb.php" || $tpl =="tpl_pub_tcube_wb.php" || $tpl =="tpl_pub_trading_desk_pro_wb.php")
	{
		$sidemenubannerxml = "2";
	}
	
	if ($tpl =="tpl_pub_mutui_wb.php" || $tpl =="tpl_pub_mutui_assicuraz_wb.php")
	{
		$sidemenubannerxml = "3";
	}
	
	if ($tpl =="tpl_pub_piattaforme_wb.php" || $tpl =="tpl_pub_t3_wb.php")
	{
		$sidemenubannerxml = "4";
	}
	
	if ($tpl =="tpl_pub_corsi_wb.php" || $tpl =="tpl_pub_scheda_evento_wb.php" || $tpl =="tpl_pub_corsi_strategie_wb.php" || $tpl == "tpl_pub_guide_manuali_wb.php" || $tpl == "tpl_pub_registrazione_newsletter_wb.php" || $tpl == "tpl_pub_registrazione_newsletter_esito_wb.php")
	{
		$sidemenubannerxml = "5";
	}
	
	
?>
<!-- BANNER -->
<div class="banner" id="sidemenubanner">
	<div class="car_conto">
		<h5>In primo piano!</h5>
		<div><a id="titoloBanner" href="" title=""></a></div>
		<div id="testoBanner" class="tx"></div>
	</div>
</div>

<script type="text/javascript" defer="defer">
	$(document).ready(function() {
       $.get('http://libreriewebank/swf/xml/submenu_col_sx_data2.xml', function(xml) {
           $(xml).find('item').each(function() {
               var titoloBanner = $('#titoloBanner');
			   var testoBanner = $('#testoBanner');
			   var linkXML = $(xml).find('item').eq(0).attr('link');
			   var titleXML = $(xml).find('item').eq(0).attr('titolo');
			   
			   titoloBanner.attr('href', linkXML);
			   titoloBanner.attr('title', titleXML);
			   titoloBanner.html('<strong>' + titleXML  + '</strong>');
			   var testo = '';
			   testo += $(xml).find('item txt').eq(0).text();
			   testoBanner.html(testo);
           })
       });
   });


	
</script>
<!-- / BANNER -->