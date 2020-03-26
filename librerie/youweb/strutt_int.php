<?php

	$pag = $_GET["pag"];
	if (!isset($pag)) $pag = "placeholder";

	$pagtypecont = ($pag=="login" || $pag=="recupera_codici"|| $pag=="recupera_codici_identificativo")? "mainContent" : "content2col";

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
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
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery.dataTables.natural.js"></script>


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
<body>
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
		
		</div>
		<div class="main row">
			<div class="container">
				<!-- CONTENITORE PRINCIPALE -->
				<?php 
					// Acquisizione del  template

					virtual ("/template_int/tpl_int_".$pag.".php") ;

				?>	
				<!-- FINE CONTENITORE PRINCIPALE -->
			</div>
		</div>
	</div><!--  .wrapper -->
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
	
	<div class="col-xs-12 margin-top5 margin-bottom5">
		<div class="col-xs-6 text-center"><a href="/WEBHT/serviziPerTe/disableResponsive.do?curl=/messaggio/ingresso.do" title="Sito YouWeb per PC"><strong>Sito YouWeb per PC</strong></a></div>
		<div class="col-xs-6 text-center"><a href="http://www.bancopopolare.it/media/BP_Privacy_Policy.pdf" target="_blank">Privacy</a></div>
	</div>
	
</div>
<div class="row footer hidden-xs">
	<div class="container">
		<div class="clearfix">
		<div class="col-xs-6">
			
			
			<div class="assistenza clearfix" style="margin:0">
				<h4>Assistenza Clienti</h4>
				<a href="/WEBHT/info/contattaci.do"><img src="/HT/IMAGES/nGrafica/posta.png" class="hidden-print" /> </a>
				<div>
					Numero verde:&nbsp;<strong>800.024.024</strong><br/>
					Email:&nbsp;<a href="/WEBHT/info/contattaci.do"><strong>assistenza.clienti@bancopopolare.it</strong></a>
				</div> 
			</div>
			
			<div class="riferimenti  clearfix hidden-print">
					<a href="/WEBHT/serviziPerTe/riferimenti.do" ><img src="/HT/IMAGES/nGrafica/filiale.png" class="hidden-print" /> </a>
				<div style="margin-bottom:0;">
					Per qualsiasi altra esigenza &egrave; a tua disposizione<br>
				il <strong>Direttore NOME COGNOME</strong> presso la tua filiale di riferimento. 
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
</body>
</html>