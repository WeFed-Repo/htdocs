<?php
$codicemutuo = $_GET["codicemutuo"];
?>
<div id="leftcontent">	
<div class="maincontenttopper"></div>
	<!-- titolo -->
	<?php virtual("/librerie/include/commons/titoli/pub_wb_int_tit_003.php"); ?>
	<!--fine  titolo -->
	
	<!--- CALCOLATORE MUTUI -->
	<script type="text/javascript" src="/js/calcolatore_mutui.js"></script>
	<div id="calcolatoremutui">
	</div>
	<script type="text/javascript">
	var mCodice = "",
			mUrl = "/librerie/include/commons/ajax/calcolatore_mutui.php",
			mValoreimmobile = "",
			mImportomutuo = "",
			mDurata = "",
			mAssicurazioni = "",
			mFinalita  = "Acquisto",
			mPrimacasa = "SI",
			mPagetopost  = "/webankpub/wb/simulazioneMutui.do?tabId=nav_pub_wb_finanziamenti_nw%26richiedi=%26OBS_KEY=pro_wbn_mutui_nw1%26KEY4=pro4_calcola_rata";
			
			$(window).on("load",mCalcShow);
	</script>
	<script defer="defer" type="text/javascript">
	
</div>
<?php 
	virtual ("/librerie/php/str_right_pub_wb.php");
?>
