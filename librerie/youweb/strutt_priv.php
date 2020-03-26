<?php
	$pag = $_GET["pag"];
	$lev1 = $_GET["lev1"];
	$strutt = $_GET["strutt"];
	if (empty($strutt)) $strutt = "2col";
	
	if (!isset($pag)) $pag = "placeholder";

?><!DOCTYPE html> 
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
	<script type="text/javascript" language="javascript" src="/HT/JS/bonificoJavascript.js"></script>
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

<body>
	<div class="wrapper">
		<div class="header">
			<!-- DESKTOP -->
				<!-- TOP BAR DESKTOP  -->
				<?php virtual ("/include/struttura/topbar_desktop.php") ?>
				<!-- TOP BAR --> 
				<!-- HEADER MENU DESKTOP-->
				<?php virtual ("/include/struttura/header_menu_desktop.php") ?>
				<!-- / HEADER MENU DESKTOP-->
			<!-- /DESKTOP -->
			<!-- MOBILE -->
				<?php virtual ("/include/struttura/header_mobile.php") ?>
			<!-- / MOBILE -->
			<!-- HEADER MOBILE -->
				
			<!-- FINE HEADER MOBILE -->
        </div>
		
		<!-- MAIN WRAPPER -->
		<div class="main row row-offcanvas row-offcanvas-left">
			<div class="container">
				
				<?php if ($strutt == "2col") {
				?>
				<!-- SPALLA SINISTRA -->
					<?php virtual ("/include/struttura/spalla_sinistra.php") ?>
				<!-- / SPALLA SINISTRA-->
				<?php
					}
				?>
				<!-- CONTENITORE PRINCIPALE -->
				<div id="mainContent" class="center <?php if($strutt == "2col"){ print ("col-sm-80 col-xs-12"); } else { print ("col-xs-12"); } ?>">

					<?php 
						// Acquisizione del  template

						virtual ("/template/tpl_priv_".$pag.".php") ;

					?>	
				</div>
				<!-- SPAZIO PER I CONTENUTI -->
				
				

				<!-- MENU MOBILE -->
				<?php virtual ("/include/struttura/menu_mobile.php") ?>
				<!-- / MENU MOBILE -->
							
		    </div>
		</div>
		<!-- FINE MAIN WRAPPER -->
	</div>

	

	<!-- FOOTER -->
	<?php virtual ("/include/struttura/footer_help.php") ?>
	<!-- /FOOTER -->

	<!--
	<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-draggable ui-resizable" tabindex="-1" role="dialog" aria-describedby="dialogLinkRapidi" aria-labelledby="ui-id-1" style="display: none; position: absolute;">
	   <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix ui-draggable-handle"><span id="ui-id-1" class="ui-dialog-title">Link rapidi</span><button type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only ui-dialog-titlebar-close" role="button" title="Close"><span class="ui-button-icon-primary ui-icon ui-icon-closethick"></span><span class="ui-button-text">Close</span></button></div>
	   <div id="dialogLinkRapidi" class="ui-dialog-content ui-widget-content" style="max-height: 753px;"></div>
	   <div class="ui-resizable-handle ui-resizable-n" style="z-index: 90;"></div>
	   <div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div>
	   <div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div>
	   <div class="ui-resizable-handle ui-resizable-w" style="z-index: 90;"></div>
	   <div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div>
	   <div class="ui-resizable-handle ui-resizable-sw" style="z-index: 90;"></div>
	   <div class="ui-resizable-handle ui-resizable-ne" style="z-index: 90;"></div>
	   <div class="ui-resizable-handle ui-resizable-nw" style="z-index: 90;"></div>
	</div>
	-->

</body>
</html>