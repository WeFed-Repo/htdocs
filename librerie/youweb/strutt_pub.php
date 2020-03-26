<?php

	$pag = $_GET["pag"];
	if (!isset($pag)) $pag = "placeholder";

	$pagtypecont = ($pag=="login" || $pag=="recupera_codici"|| $pag=="recupera_codici_identificativo")? "mainContent" : "content2col";

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
	<head>
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

		<?php
		if ($pagtypecont =="mainContent") {
		?>
			<!-- FINE HOME PAGE -->
			<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/CSS/equal-height-columns.css" />
			<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/bootstrap.min.css"  />
			<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/bootstrap.height.plugin.css" />
			<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/ie10-viewport.css"  />
			<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-main.css?v=161229"  />
			<link media="screen and (max-width: 544px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-xxs-mobile.css?v=161229" />
			<link media="screen and (max-width: 767px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-xs-mobile.css?v=161229" />
			<link media="screen and (min-width: 768px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-sm-desktop.css?v=161229" />
			<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/jquery.cookiebar.css" />
			<!--[if IE 8]>
			<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/CSS/ie8.css" />
			<![endif]-->
			<!-- HOME PAGE -->
		<?php
		}
		else
		{
		?>
			<!-- PAGINE INTERNE -->
			<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/CSS/jquery-ui_ng.css" />
			<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/CSS/bootstrap.min.css" />
			<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/CSS/essentials.css" />
			<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/CSS/header-default.css" />
			<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-main.css"  />
			<link media="screen and (max-width: 768px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-xs-mobile.css" />
			<link media="screen and (min-width: 769px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-sm-desktop.css" />
			<!--[if gt IE 8]><!-->
			<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/vis.css" />
			<!--<![endif]-->

			<!--[if IE 8]>
			<link media="screen,print" rel="stylesheet" type="text/css" href="/HT/CSS/ie8.css" />
			<![endif]-->
			<!-- FINE PAGINE INTERNE -->
		<?php
		}
		?>
		
		<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/JS/jquery/bootstrap.min.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/JS/am/afp-prod2.js"></script>	
		<script type="text/javascript" src="/HT/JS/cookieBar/jquery.cookiebar.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/JS/cookieBar/bp.cookiebar.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/JS/js.cookie.js"></script>
		<script type="text/javascript" language="javascript" src="/HT/JS/script/funzioniYW.js"></script>
		
		<title>YouWeb full</title>
	</head>
	<body style="zoom: 1;">
		<div class="wrapper">
			<div class="header">
				<div class="topbar hidden-xs">
					<div class="container">
					</div>
				</div>
				<header id="topNav">
					<div class="container">
						<div class="logo">
							<span>Banco BPM</span>
						</div>
					</div>
				</header>
			</div>
			<div class="main row">
				<div class="container">
					<div id="contentLeft" class="col-sm-20 hidden-xs hidden-print spalla">
						<div class="riquadro clearfix">
							<div class="box_body faq">
								<h1>
									<div class="flag hidden-xxs assistenza">&nbsp;</div>
									Bisogno di aiuto?
								</h1>
								<img src="/HT/IMAGES/GRAFICA/img_assistenza.gif" class="support_picture" title="Assistenza" alt="Assistenza" />
								<ul class="link-list">
									<li><a href="/faq.html" title="Leggi le FAQ">Leggi le FAQ</a></li>
									<li><a href="/assistenza.html" title="Contatta l'assistenza">Contatta l'assistenza</a></li>
									<li><a href="/WEBHT/RecuperoCodici" title="Recupera codici">Recupera codici</a></li>
								</ul>
							</div>
							<div class="box_bottom">&nbsp;</div>
						</div>
						<div class="riquadro clearfix">
							<h1>
								<div class="flag hidden-xxs info">&nbsp;</div>
								Sicurezza
							</h1>
							<ul class="link-list">
								<li><a href="/WEBHT/infoSicurezza.do">Info sicurezza</a></li>
								<li><a href="/compatibilita.html">Requisiti di sistema</a></li>
							</ul>
							<p class="oCenter">
								<a href="/compatibilita.html">
								<img src="/HT/IMAGES/CONTENUTI/Requisiti.png" border="0" title="Requisiti di compatibilità" alt="Requisiti di compatibilità" />
								</a>
							</p>
						</div>
					</div>
					<div id="<?php print ($pagtypecont); ?>" class="col-sm-80 col-xs-12 login">
						<?php 
						// Acquisizione del  template
						virtual ("/template_pub/tpl_pub_".$pag.".php") ;
						?>	
					</div>
				</div>
			</div>
		</div>
		<div id="divFooter">
			<div class="row footer visible-xs">
				<div class="assistenza col-xs-8">
					<h4 style="margin-bottom:4px">Assistenza Clienti</h4>
					<a href="/WEBHT/serviziPerTe/riferimenti.do" >
					<img src="/HT/IMAGES/nGrafica/posta.png" alt="contatti" title="contatti" class="image-responsive" style="float:left" />
					</a>
					<div style="margin-left:40px">
						Numero verde:&nbsp;<strong>800.024.024</strong><br/>
						Email:&nbsp;<a href="/WEBHT/info/contattaci.do"><strong>assistenza.clienti@bancopopolare.it</strong></a>			
					</div>
				</div>
			</div>
			<div class="row footer hidden-xs">
				<div class="container">
					<div class="clearfix">
						<div class="col-xs-6">
							<div class="assistenza clearfix" style="margin:25px">
								<h4>Assistenza Clienti</h4>
								<a href="/WEBHT/info/contattaci.do"><img src="/HT/IMAGES/nGrafica/posta.png" class="hidden-print" /> </a>
								<div>
									Numero verde:&nbsp;<strong>800.024.024</strong><br/>
									Email:&nbsp;<a href="/WEBHT/info/contattaci.do"><strong>assistenza.clienti@bancopopolare.it</strong></a>
								</div>
							</div>
						</div>
						<div class="col-xs-4 col-xs-offset-2">
							<div class="footer-logo pull-right"> 
								<img src="/HT/IMAGES/nGrafica/logo_footer_bbpm.png" class="pull-right" title="BANCO BPM" alt="BANCO BPM" />
							</div>
						</div>
					</div>
					<div class="col-xs-12 oCenter hidden-print" style="position:absolute; bottom:7px;">
						&copy; 2000-2017&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright  - 
						<a href="http://www.bancopopolare.it/media/BP_Privacy_Policy.pdf" target="_blank" style="font-weight:normal;">Privacy</a>
					</div>
				</div>
			</div>
		</div>

		
		<script type="text/javascript">
			function getPathImages() { return "/HT/IMAGES/";}
			function getPathContext() {	return "/WEBHT";}
			function getKBanca() {	return "";}
			function getLineaTol() {	return "";}
		</script>

		<script type="text/javascript">
			var cookieName = 'userAccess';
			var crtAccess = 'https://youwebcertificato.bancopopolare.it/';
			var cookieAccess = Cookies.get(cookieName);

			window.reloadPage = function() {
				if (cookieAccess!=null
					&& cookieAccess!=undefined
					&& crtAccess!="") {
					window.location.href = crtAccess;
				}
			
				
			}
			removeCookieAccess = function() {
				Cookies.remove(cookieName, {
					domain: getDomainCookie(),
					path: '/',
					secure: false,
				});
			}
			createCookieAccess = function() {
				Cookies.set(cookieName, 'CRT', {
					domain: getDomainCookie(),
					expires: 1200,
					path: '/',
					secure: false,
				});
			}
			window.getDomainCookie = function() {
				var domain = String(window.location.hostname);
				var cookieDomain = domain;
				if (isIPaddress(cookieDomain)==false) {
					var explodedDomain = domain.split(".");
					cookieDomain = "."+explodedDomain.slice(-2).join(".");
					
					if (cookieDomain==undefined) {
						cookieDomain = domain.replace('www','');
					}
				}
				return cookieDomain;
			}
			window.isIPaddress = function(ipaddress) {  
				if (/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.test(ipaddress)) {  
					return true;
				}
				return false;  
			}
			
			
				/* reloadPage(); */
			
			
		</script>
		<script type="text/javascript" language="JavaScript">
			$(window).resize(function () {
			$('#device').attr('value', getBreakpoint());
			if (isMobile()) {
				document.title = "YouWeb"; 
				$("#loginFrame").removeClass("row-eq-height"); 
				
			} 
			
				}).resize();
		</script>
		
	</body>
</html>