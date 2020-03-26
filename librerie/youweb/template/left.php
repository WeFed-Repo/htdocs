<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!--
	<base href="https://youwebcard.bancopopolare.it/">
	-->
	<meta charset="utf-8">
	<meta name="language" content="it"> 
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
	<meta name="HandheldFriendly" content="True" /> 	
	<meta name="MobileOptimized" content="320" /> 		
	<meta http-equiv="cleartype" content="on"> 			
	<meta name="description" content="YouWeb - Banco BPM">	
	<meta name="format-detection" content="telephone=no">		
	<meta name="apple-mobile-web-app-title" content="YouWeb"> 
	<link rel="apple-touch-icon" href="/HT/IMAGES/favicon/apple-touch-icon.png">		                          
	<link rel="apple-touch-icon" sizes="76x76"   href="/HT/IMAGES/favicon/apple-touch-icon-76.png" />    
	<link rel="apple-touch-icon" sizes="120x120" href="/HT/IMAGES/favicon/apple-touch-icon-120.png" />   
	<link rel="apple-touch-icon" sizes="152x152" href="/HT/IMAGES/favicon/apple-touch-icon-152.png" />   
	<link rel="apple-touch-icon" sizes="167x167" href="/HT/IMAGES/favicon/apple-touch-icon-167.png" />   
	<link rel="apple-touch-icon" sizes="180x180" href="/HT/IMAGES/favicon/apple-touch-icon-180.png" />   

	<link rel="shortcut icon" href='/HT/IMAGES/favicon.ico' type="image/x-icon" />
	<link rel="icon" sizes="128x128" href="/HT/IMAGES/favicon/touch-icon-128.png" type="image/png" />  
	<link rel="icon" sizes="192x192" href="/HT/IMAGES/favicon/touch-icon-192.png" type="image/png" />  

	<meta name="application-name" content="YouWeb" />               
	<meta name="msapplication-TileColor" content="#003B79" />		
	<meta name="msapplication-square150x150logo" content="/HT/IMAGES/favicon/touch-icon-150.png" />  
	<meta name="msapplication-square310x310logo" content="/HT/IMAGES/favicon/touch-icon-310.png" />  
	<meta name="msapplication-square70x70logo" content="/HT/IMAGES/favicon/touch-icon-70.png" />     

	<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/jquery-ui_ng.min.css" />
	<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/bootstrap.min.css"  />
	
	
	<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/bootstrap.height.plugin.css" />
	<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/ie10-viewport.css"  />
	<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-main.css?v=161229"  />
	<link media="screen and (max-width: 544px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-xxs-mobile.css?v=161229" />
	<link media="screen and (max-width: 767px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-xs-mobile.css?v=161229" />
	<link media="screen and (min-width: 768px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-sm-desktop.css?v=161229" />

	
	<link media="print" rel="stylesheet" type="text/css" href="/HT/CSS/print.css" />

	<!--[if IE 8]>
	<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/CSS/ie8.css" />
	<![endif]-->

	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-migrate-1.0.0.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/script/ie10-viewport.js"></script> 
	<script type="text/javascript" language="javascript" src="/HT/JS/script/jsapi.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.dateIT.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.altImg.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.formattedNum.js"></script>


	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.form.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.blockUI.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.selectToUISlider.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script type="text/javascript" language="javascript" src="/HT/JS/script/html5.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/JS/script/respond.min.js"></script>
	<![endif]-->
	<script type="text/javascript" language="javascript" src="/HT/JS/script/funzioniYW.js?v=161229"></script>
	<script>
	$(document).ready(function(e) {
		var resizeTimer;
		var servVal = false;
		$(window).resize(function () {
			if ( servVal != isMobile() && location.href.search('login') ==-1) {
				clearTimeout(resizeTimer);
				resizeTimer = setTimeout(function() {
					
					$.post(getPathContext()+'/common/refreshBreakpoint.do', { device: getBreakpoint()}, function(response, status) { 
						servVal = isMobile();
					});
				}, 500);
			}
		});
	});
	</script>

	<script type="text/javascript">
	function getPathImages() { return "/HT/IMAGES/";}
	function getPathContext() {	return "/WEBHT";}
	function getKBanca() {	return "1";}
	function getLineaTol() {	return "";}
	</script>
	<title>YouWeb</title>
</head>


	<div class="wrapper">
		<div class="header">
			
        </div>
		
		<!-- MAIN WRAPPER -->
		<div class="main row row-offcanvas row-offcanvas-left">
			<div class="container">
				<!-- SPALLA SINISTRA -->
					<div id="contentLeft" class="col-sm-20 hidden-print spalla hidden-xs" style="border:1px solid #ff0000">

<span style="font-size:20px;font-weight:bold">CONTI E DEPOSITI</span><br>
<strong>Saldo e movimenti</strong><br>
<?php virtual ("/include/left_wdg/widget01.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<hr>
<strong>Finanziamenti</strong><br>
<?php virtual ("/include/left_wdg/widget01.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Interessi e spese</strong><br>
<?php virtual ("/include/left_wdg/widget01.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Pannello Rapporti</strong><br>
<?php virtual ("/include/left_wdg/widget01.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Adeguata Verifica</strong><br>
<?php virtual ("/include/left_wdg/widget01.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Bilancio mensile</strong><br>
<?php virtual ("/include/left_wdg/widget01.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

<hr>
<strong>Gestione categorie</strong><br>
<?php virtual ("/include/left_wdg/widget01.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

<hr>
<strong>Creazione categorie</strong><br>
<?php virtual ("/include/left_wdg/widget01.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Vincola</strong><br>
<?php virtual ("/include/left_wdg/widget05.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>
<?php virtual ("/include/left_wdg/widget04.php") ?>


<hr>
<strong>I tuoi vincoli</strong><br>
<?php virtual ("/include/left_wdg/widget05.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

<hr>
<strong>Conti di appoggio</strong><br>
<?php virtual ("/include/left_wdg/widget05.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

</div>

<div id="contentLeft" class="col-sm-20 hidden-print spalla hidden-xs" style="border:1px solid #ff0000;margin-left:10px">
<span style="font-size:20px;font-weight:bold;text-transform:uppercase">pagamenti</span><br>
<strong>Ultime disposizioni</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Gestione beneficiari</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

<hr>
<strong>Bonifico ordinario</strong><br>
<?php virtual ("/include/left_wdg/widget07.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>


<hr>
<strong>Bonifico per detrazioni</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

<hr>
<strong>Trasferimento tra conti</strong><br>
<?php virtual ("/include/left_wdg/widget08.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Ricarica telefonica</strong><br>
<?php virtual ("/include/left_wdg/widget09.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

<hr>
<strong>F24</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Bollettino Postale</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget10.php") ?>

<hr>
<strong>Bollettino MAV</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

<hr>
<strong>Bollettino RAV</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

<hr>
<strong>Coordinate IBAN</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Utenze</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

<hr>
<strong>Richiesta Voucher Inps</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Domiciliazioni</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Assegni</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Accredito stipendio</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Mediaset Premium</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Bollo Auto</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget10.php") ?>

<hr>
<strong>Bollettino Freccia</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

<hr>
<strong>Tasse universitarie</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Bonifico ripetitivo</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

<hr>
<strong>Lista bonifici ripetitivi</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>


<hr>
<strong>CBILL - pagoPA</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget10.php") ?>

<hr>
<strong>Equitalia - Pagamenti</strong><br>
<?php virtual ("/include/left_wdg/widget06.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
</div>

<div id="contentLeft" class="col-sm-20 hidden-print spalla hidden-xs" style="border:1px solid #ff0000;margin-left:10px">
<span style="font-size:20px;font-weight:bold;text-transform:uppercase">carte</span><br>
<strong>Le mie carte</strong><br>
<?php virtual ("/include/left_wdg/widget11.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Movimenti</strong><br>
<?php virtual ("/include/left_wdg/widget11.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Ricarica Carta</strong><br>
<?php virtual ("/include/left_wdg/widget11.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Scarica Carta</strong><br>
<?php virtual ("/include/left_wdg/widget11.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Ricarica automatica</strong><br>
<?php virtual ("/include/left_wdg/widget11.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Cambio PIN carta</strong><br>
<?php virtual ("/include/left_wdg/widget11.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Pannello controllo</strong><br>
<?php virtual ("/include/left_wdg/widget11.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Layout bancomat</strong><br>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Portale CartaSi</strong><br>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>
</div>



<div id="contentLeft" class="col-sm-20 hidden-print spalla hidden-xs" style="border:1px solid #ff0000;margin-left:10px">
<span style="font-size:20px;font-weight:bold;text-transform:uppercase">alert</span><br>
<strong>Pannello Alert</strong><br>
<?php virtual ("/include/left_wdg/widget12.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>
<hr>
<strong>Aderisci a YouAlert</strong><br>
<?php virtual ("/include/left_wdg/widget12.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Info bonifico</strong><br>
<?php virtual ("/include/left_wdg/widget12.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Info ricarica</strong><br>
<?php virtual ("/include/left_wdg/widget12.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Info carte</strong><br>
<?php virtual ("/include/left_wdg/widget12.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

<hr>
<strong>Info conto</strong><br>
<?php virtual ("/include/left_wdg/widget12.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

<hr>
<strong>Info dossier</strong><br>
<?php virtual ("/include/left_wdg/widget12.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

<hr>
<strong>Info titoli</strong><br>
<?php virtual ("/include/left_wdg/widget12.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

<hr>
<strong>Info fondi</strong><br>
<?php virtual ("/include/left_wdg/widget12.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

<hr>
<strong>Cambi e indici</strong><br>
<?php virtual ("/include/left_wdg/widget12.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

<hr>
<strong>Recedi</strong><br>
<?php virtual ("/include/left_wdg/widget12.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
</div>



<div id="contentLeft" class="col-sm-20 hidden-print spalla hidden-xs" style="border:1px solid #ff0000;margin-left:10px">
<span style="font-size:20px;font-weight:bold;text-transform:uppercase">posta personale</span><br>
<strong>Posta in arrivo</strong><br>
<?php virtual ("/include/left_wdg/widget13.php") ?>
<?php virtual ("/include/left_wdg/widget14.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>

<hr>
<strong>Info posta</strong><br>
<?php virtual ("/include/left_wdg/widget13.php") ?>
<?php virtual ("/include/left_wdg/widget14.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Archivio</strong><br>
<?php virtual ("/include/left_wdg/widget13.php") ?>
<?php virtual ("/include/left_wdg/widget14.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Contratti e Proposte</strong><br>
<?php virtual ("/include/left_wdg/widget13.php") ?>
<?php virtual ("/include/left_wdg/widget14.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

</div>



<div id="contentLeft" class="col-sm-20 hidden-print spalla hidden-xs" style="border:1px solid #ff0000;margin-left:10px">
<span style="font-size:20px;font-weight:bold;text-transform:uppercase">investimenti</span><br>
<strong>Situazione</strong><br>
<?php virtual ("/include/left_wdg/widget15.php") ?>
<?php virtual ("/include/left_wdg/widget16.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Titoli preferiti</strong><br>
<?php virtual ("/include/left_wdg/widget15.php") ?>
<?php virtual ("/include/left_wdg/widget16.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Il tuo portafoglio</strong><br>
<?php virtual ("/include/left_wdg/widget15.php") ?>
<?php virtual ("/include/left_wdg/widget16.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Ordini e movimenti</strong><br>
<?php virtual ("/include/left_wdg/widget15.php") ?>
<?php virtual ("/include/left_wdg/widget16.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Portafoglio simulato</strong><br>
<?php virtual ("/include/left_wdg/widget15.php") ?>
<?php virtual ("/include/left_wdg/widget16.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Questionario Mifid</strong><br>
<?php virtual ("/include/left_wdg/widget15.php") ?>
<?php virtual ("/include/left_wdg/widget16.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Linea di Trading</strong><br>
<?php virtual ("/include/left_wdg/widget15.php") ?>
<?php virtual ("/include/left_wdg/widget16.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Analisi</strong><br>
<?php virtual ("/include/left_wdg/widget15.php") ?>
<?php virtual ("/include/left_wdg/widget16.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Indici</strong><br>
<?php virtual ("/include/left_wdg/widget15.php") ?>
<?php virtual ("/include/left_wdg/widget16.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Posizione fiscale</strong><br>
<?php virtual ("/include/left_wdg/widget15.php") ?>
<?php virtual ("/include/left_wdg/widget16.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Posizione patrimoniale</strong><br>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Cambi</strong><br>
<?php virtual ("/include/left_wdg/widget15.php") ?>
<?php virtual ("/include/left_wdg/widget16.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Ricerca e analisi</strong><br>
<?php virtual ("/include/left_wdg/widget15.php") ?>
<?php virtual ("/include/left_wdg/widget16.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Ordini</strong><br>
<?php virtual ("/include/left_wdg/widget15.php") ?>
<?php virtual ("/include/left_wdg/widget16.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>

<hr>
<strong>Fondi preferiti</strong><br>
<?php virtual ("/include/left_wdg/widget15.php") ?>
<?php virtual ("/include/left_wdg/widget16.php") ?>
<?php virtual ("/include/left_wdg/widget02.php") ?>
</div>



<div id="contentLeft" class="col-sm-20 hidden-print spalla hidden-xs" style="border:1px solid #ff0000;margin-left:10px">
<span style="font-size:20px;font-weight:bold;text-transform:uppercase">servizi per te</span><br>
<strong>Il tuo profilo</strong><br>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget17.php") ?>
<?php virtual ("/include/left_wdg/widget18.php") ?>

<hr>
<strong>Rapporti in primo piano</strong><br>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget03.php") ?>
<?php virtual ("/include/left_wdg/widget17.php") ?>
<?php virtual ("/include/left_wdg/widget18.php") ?>

<hr>
<strong>Gestione contatti</strong><br>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget17.php") ?>
<?php virtual ("/include/left_wdg/widget18.php") ?>

<hr>
<strong>Il mio calendario</strong><br>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget17.php") ?>
<?php virtual ("/include/left_wdg/widget18.php") ?>

<hr>
<strong>Richiedi appuntamento</strong><br>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget17.php") ?>
<?php virtual ("/include/left_wdg/widget18.php") ?>

<hr>
<strong>Apri Conto Corrente</strong><br>
<?php virtual ("/include/left_wdg/widget10.php") ?>
<?php virtual ("/include/left_wdg/widget17.php") ?>
<?php virtual ("/include/left_wdg/widget18.php") ?>

<hr>
<strong>Apri Dossier Titoli</strong><br>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget10.php") ?>
<?php virtual ("/include/left_wdg/widget17.php") ?>
<?php virtual ("/include/left_wdg/widget18.php") ?>

<hr>
<strong>Apri Conto Deposito</strong><br>
<?php virtual ("/include/left_wdg/widget03.php") ?>
<?php virtual ("/include/left_wdg/widget10.php") ?>
<?php virtual ("/include/left_wdg/widget17.php") ?>
<?php virtual ("/include/left_wdg/widget18.php") ?>

<hr>
<strong>Richiedi la YouCard</strong><br>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget10.php") ?>
<?php virtual ("/include/left_wdg/widget17.php") ?>
<?php virtual ("/include/left_wdg/widget18.php") ?>

<hr>
<strong>News</strong><br>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget17.php") ?>
<?php virtual ("/include/left_wdg/widget18.php") ?>

<hr>
<strong>Scarico certificato</strong><br>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget17.php") ?>
<?php virtual ("/include/left_wdg/widget18.php") ?>

<hr>
<strong>Sicurezza YouWeb</strong><br>
<span style="color:#ff0000;font-size:30px">no spalla sinistra!!!!!!!!!</span>


<hr>
<strong>Contattaci</strong><br>
<?php virtual ("/include/left_wdg/widget02.php") ?>
<?php virtual ("/include/left_wdg/widget17.php") ?>
<?php virtual ("/include/left_wdg/widget18.php") ?>

<hr>
<strong>YouShop</strong><br>
<span style="color:#ff0000;font-size:30px">Sito esterno</span>

<hr>
<strong>YouWin</strong><br>
<span style="color:#ff0000;font-size:30px">Sito esterno</span>
</div>

				<!-- / SPALLA SINISTRA-->

							
		    </div>
		</div>
		<!-- FINE MAIN WRAPPER -->
	</div>

	

	<!-- FOOTER -->
	
	<!-- /FOOTER -->

</body>
</html>