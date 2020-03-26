<?php
	$tipo = $_GET["tipo"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<head>
	<!--
	<base href="https://youwebcard.bancopopolare.it/">
	-->
	<meta charset="utf-8">
	<meta name="language" content="it"> 
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
	<meta name="HandheldFriendly" content="True"> 	
	<meta name="MobileOptimized" content="320"> 		
	<meta http-equiv="cleartype" content="on"> 			
	<meta name="description" content="YouWeb - Banco BPM">	
	<meta name="format-detection" content="telephone=no">		
	<meta name="apple-mobile-web-app-title" content="YouWeb"> 
	<meta name="application-name" content="YouWeb">               
	<meta name="msapplication-TileColor" content="#003B79">		


	<link rel="apple-touch-icon" href="/HT/IMAGES/favicon/apple-touch-icon.png">		                          
	<link rel="apple-touch-icon" sizes="76x76" href="/HT/IMAGES/favicon/apple-touch-icon-76.png">    
	<link rel="apple-touch-icon" sizes="120x120" href="/HT/IMAGES/favicon/apple-touch-icon-120.png">   
	<link rel="apple-touch-icon" sizes="152x152" href="/HT/IMAGES/favicon/apple-touch-icon-152.png">   
	<link rel="apple-touch-icon" sizes="167x167" href="/HT/IMAGES/favicon/apple-touch-icon-167.png">   
	<link rel="apple-touch-icon" sizes="180x180" href="/HT/IMAGES/favicon/apple-touch-icon-180.png">   
	<meta name="msapplication-square150x150logo" content="/HT/IMAGES/favicon/touch-icon-150.png">  
	<meta name="msapplication-square310x310logo" content="/HT/IMAGES/favicon/touch-icon-310.png">  
	<meta name="msapplication-square70x70logo" content="/HT/IMAGES/favicon/touch-icon-70.png">    
	<link rel="shortcut icon" href="/HT/IMAGES/favicon.ico" type="image/x-icon">
	<link rel="icon" sizes="128x128" href="/HT/IMAGES/favicon/touch-icon-128.png" type="image/png">  
	<link rel="icon" sizes="192x192" href="/HT/IMAGES/favicon/touch-icon-192.png" type="image/png">  

	
	<!-- CSS -->
 	<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/fe/css/jquery-ui_ng.min.css">
	<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/fe/css/bootstrap.min.css">
	<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/fe/css/bootstrap.height.plugin.css">
	<link media="screen" rel="stylesheet" type="text/css" href="/HT/fe/css/ie10-viewport.css">
	<link media="screen" rel="stylesheet" type="text/css" href="/HT/fe/css/youWeb-main.css?v=161229">
	
	<link media="screen and (max-width: 991px)" rel="stylesheet" type="text/css" href="/HT/fe/css/youWeb-xs-mobile-struttura.css?v=161229">
	<link media="screen and (min-width: 992px)" rel="stylesheet" type="text/css" href="/HT/fe/css/youWeb-sm-desktop-struttura.css?v=161229">

	<link media="screen and (max-width: 544px)" rel="stylesheet" type="text/css" href="/HT/fe/css/youWeb-xxs-mobile.css?v=161229">
	<link media="screen and (max-width: 991px)" rel="stylesheet" type="text/css" href="/HT/fe/css/youWeb-xs-mobile.css?v=161229">
	<link media="screen and (min-width: 992px)" rel="stylesheet" type="text/css" href="/HT/fe/css/youWeb-sm-desktop.css?v=161229">

	<!--CSS AGGIUNTO PER STILIZZARE SITO COME INDICAZIONI UI -->
	<link media="screen" rel="stylesheet" type="text/css" href="/HT/fe/css/redesign.css">
	
	<link media="print" rel="stylesheet" type="text/css" href="/HT/fe/css/print.css">

	<!--[if IE 8]>
	<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/fe/css/ie8.css" />
	<![endif]-->

	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery-migrate-1.0.0.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery-ui.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/script/ie10-viewport.js"></script> 
	<script type="text/javascript" language="javascript" src="/HT/fe/js/script/jsapi.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.dataTables.dateIT.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.dataTables.altImg.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.dataTables.formattedNum.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.form.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery.blockUI.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/jquery/jquery-ui.selectToUISlider.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script type="text/javascript" language="javascript" src="/HT/fe/js/script/html5.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/fe/js/script/respond.min.js"></script>
	<![endif]-->
	<script type="text/javascript" language="javascript" src="/HT/fe/js/script/funzioniYW.js?v=161229"></script>
	<script type="text/javascript" language="javascript" src="/HT/JS/bonificoJavascript.js"></script>
	<script type="text/javascript" language="javascript" src="/HT/fe/js/script/struttura.js"></script>

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
	function getPathImages() { return "/HT/fe/css/";}
	function getPathContext() {	return "/WEBHT";}
	function getKBanca() {	return "1";}
	function getLineaTol() {	return "";}
	</script>
	<link href="https://ajax.googleapis.com/ajax/static/modules/gviz/1.0/core/tooltip.css" rel="stylesheet" type="text/css"></head>


	<title>Librerie YouWeb</title>
	
	<style>
	body {background-color:#f3f7f9; background-image:none;}
	header {position:static;}

	/* STILI PER LIBRERIE OGGETTI */
	#main {margin:0 auto; max-width:1200px; }
	.main {margin-top:0 !important;}
	h1 {background:none; border-bottom:0; text-transform:none; box-shadow: none; font-size:25px; color: #6689af;padding: 15px 0px;font-weight: bold;margin: 0;font-size: 32px;}
	h1 span {color:#000;}
	#mainContent {background:#fff;float:none;padding: 15px;}
	#mainContent h2.oggettolib {color:#fff; background-color:#666; padding:5px; font-weight:bold;padding-left:30px}

	a.libBtn {width:32px;height:32px; margin: 0 10px 0 5px;background:#6689af; text-align:center; line-height:32px;padding:0;border-radius:50%;display:inline-block;}
	a.libBtn img {display:inline-block; margin-top:5px;}
	</style>

</head>

<body>
	<div id="main">
	<header>
		<h1><a href="index.php" class="libBtn"><img src="/lib_img/lib_btn_back.png"></a>Librerie YouWeb - <span><?php print($tipo); ?></span></h1>
	</header>
	<div class="wrapper">
		<!-- MAIN WRAPPER -->
		<div class="main">
			<div class="container">
				<?php
				if ($tipo != "Widget" && $tipo != "Widget home") { ?>
					<div id="mainContent">
						<div class="riquadro">
					<?php
						// Elenca gli oggetti usando il nome della cartella
						$basefolder = "include/oggetti/".$tipo;
						$elencocart = array();  
						$dh = opendir($basefolder);
					        while (($file = readdir($dh)) !== false) { 
					            if( ($file !='.')&&($file !='..') ){
					            	$elencocart[] = $file;
					           } 
						    } 
					    closedir($dh); 

					    // Elenco delle tipologie di oggetti (riassunto)
						asort($elencocart);
						foreach ($elencocart as $tipooggetto) {
					   	?>
							
							<!-- Blocco oggetto -->
							<div class="row">
								<div class="col-xs-12">
									<h2 href="/index_catalogo.php?tipo=<?php print $tipooggetto; ?>" class="oggettolib"><?php print $tipooggetto; ?></h2>
									<?php virtual ("/include/oggetti/".$tipo."/".$tipooggetto."/oggetto.php") ?>
								</div>
							</div>
							<!-- Fine blocco oggetto -->
						<?php 	
						}
					?>
						</div>
					</div>

					<?php }
				else
				{ 
					if ($tipo == "Widget") {
						?>
						<style>
							#spalla {float:left !important;margin:0 !important; padding-bottom:0 !important; padding-top:0 !important}
							#spalla h2.oggettolib {padding:15px !important;background:#ddd !important; color:#000;}
						</style>
						<div id="spalla">
								<?php
									// Elenca gli oggetti usando il nome della cartella
									$basefolder = "include/oggetti/".$tipo;
									$elencocart = array();  
									$dh = opendir($basefolder);
										while (($file = readdir($dh)) !== false) { 
											if( ($file !='.')&&($file !='..') ){
												$elencocart[] = $file;
										   } 
										} 
									closedir($dh); 

									// Elenco delle tipologie di oggetti (riassunto)
									asort($elencocart);
									foreach ($elencocart as $tipooggetto) {
										if (substr($tipooggetto,7,1) == "N") {
									?>
											<!-- Blocco oggetto -->
											<h2 href="/index_catalogo.php?tipo=<?php print $tipooggetto; ?>" class="oggettolib"><?php print $tipooggetto; ?></h2>
											<?php virtual ("/include/oggetti/".$tipo."/".$tipooggetto."/oggetto.php") ?>
											<!-- Fine blocco oggetto -->
										<?php 	
										}
									}
								?>
						</div>

						<?php
					}
					else
						{
						if ($tipo == "Widget home") {
						?>
						<div id="mainContent">
							<div class="dashboard-widgets">
								<?php
									// Elenca gli oggetti usando il nome della cartella
									$basefolder = "include/oggetti/".$tipo;
									$elencocart = array();  
									$dh = opendir($basefolder);
										while (($file = readdir($dh)) !== false) { 
											if( ($file !='.')&&($file !='..') ){
												$elencocart[] = $file;
										   } 
										} 
									closedir($dh); 

									// Elenco delle tipologie di oggetti (riassunto)
									asort($elencocart);
									foreach ($elencocart as $tipooggetto) {
										if (substr($tipooggetto,0,3) == "NEW") {
									?>
											<h2 href="/index_catalogo.php?tipo=<?php print $tipooggetto; ?>" class="oggettolib"><?php print $tipooggetto; ?></h2>
											<div class="row" style="max-width:500px">
												<div class="col-xs-12">
													<!-- Blocco oggetto -->
													<?php virtual ("/include/oggetti/".$tipo."/".$tipooggetto."/oggetto.php") ?>
													<!-- Fine blocco oggetto -->
												</div>
											</div>
										
										<?php 	
										}
									}
								?>
							</div>
						</div>

						<?php
					}
					else
					{	
						?>
								<?php
									// Elenca gli oggetti usando il nome della cartella
									$basefolder = "include/oggetti/".$tipo;
									$elencocart = array();  
									$dh = opendir($basefolder);
										while (($file = readdir($dh)) !== false) { 
											if( ($file !='.')&&($file !='..') ){
												$elencocart[] = $file;
										   } 
										} 
									closedir($dh); 

									// Elenco delle tipologie di oggetti (riassunto)
									asort($elencocart);
									foreach ($elencocart as $tipooggetto) {
										if (substr($tipooggetto,0,3) == "NEW") {
									?>
											<!-- Blocco oggetto -->
											<h2 href="/index_catalogo.php?tipo=<?php print $tipooggetto; ?>" class="oggettolib"><?php print $tipooggetto; ?></h2>
											<?php virtual ("/include/oggetti/".$tipo."/".$tipooggetto."/oggetto.php") ?>
											<!-- Fine blocco oggetto -->
										<?php 	
										}
									}
								?>
					



						<?php
					}
					}
				 }
				?>


		    </div>
		</div>
	</div>
</body>
</body>
</html>