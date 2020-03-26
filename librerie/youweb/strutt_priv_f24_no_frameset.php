<?php
	$pag = $_GET["pag"];
	$lev1 = $_GET["lev1"];
	$strutt = $_GET["strutt"];
	if (empty($strutt)) $strutt = "2col";
	
	if (!isset($pag)) $pag = "placeholder";

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


	
	<title>YouWeb - Pagamento F24</title>
</head>
<body>
<div class="wrapper">
	<div class="header" >
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">







<html xmlns="http://www.w3.org/1999/xhtml" lang="it-IT" xml:lang="it-IT">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	







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


	
	<title>headerF24</title>
	
	

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


	<script type="text/javascript">
		function printContent() {
            var fr1 = parent['frF24Center'];
   	        var fr2 = fr1.frames[0];
   	        var fr3 = fr2.frames[0];
   	       	if (fr3.name != "footerFrame") {
   	       		fr3.focus();
				fr3.print();
   	       	} else {
   	       		fr2.focus();
				fr2.print();
   	       	}
		}
	</script>
</head>	
<body style="zoom:1">
	<div class="wrapper">
		<div class="header" style="box-shadow: none;">
			<div class="topbar">
				<div class="container">
					
					<div>
					
						<div class="buttons">
							<div class="ico logout pull-right">
								<a href="#" id="frmLogout" class="" title="Esci" onclick="javascript:top.window.close(); return false;"> </a>
							</div>
							<div class="ico print pull-right">
								<a onclick="javascript:printContent(); return false;" title="Stampa" href="#"></a>
							</div>
						</div>

							<div class="ico user-info pull-right">
								<div><strong>Fabrizio Domanin</strong></div>
				         	
							<span>Ultimo accesso:</span>
							<strong>
								16/03/2017			
								&nbsp;
								17:37
							</strong>
							
							</div>			

							
						
					</div>
				</div>
 			</div><!--  .topbar -->
 			<div id="topNav">
	 			<div class="container">
	 			<div class="logo">
						<span>Banco BPM</span>
					</div>
		 			<div class="col-xs-9 col-xs-offset-3">
		        		<div class="navbar nav-main">
			        		<nav class="nav-main">
								<ul id="topMain" class="nav nav-pills nav-main">
									
									
										
											
													
												
													
													
												
												<li class="navIcon <?php if ($pag == "pagamento_f24_intro") print("active");?>" style="text-transform:uppercase;">
													<a href="/strutt_priv_f24_no_frameset.php?pag=pagamento_f24_intro&lev1=pagamenti&wdg=06|02" target="_parent" title="Introduzione"><div class="ico_riepilogo ico">&nbsp;</div>
													<strong>
														Introduzione
													</strong></a>
												</li>
											
													
												
												<li class="navIcon " style="text-transform:uppercase;">
													<a href="/strutt_priv_f24_frameset.php?pag=pagamento_f24_modulo&lev1=pagamenti&wdg=06|02" target="_parent" title="Modulo F24"><div class="ico_pagamento_f24 ico">&nbsp;</div>
													<strong>
														Modulo F24
													</strong></a>
												</li>
											
													
												
												<li class="navIcon " style="text-transform:uppercase;">
													<a href="/strutt_priv_f24_frameset.php?pag=pagamento_f24_semplificato&lev1=pagamenti&wdg=06|02" target="_parent" title="Modulo F24 Semplificato"><div class="ico_pagamento_f24 ico">&nbsp;</div>
													<strong>
														Modulo F24 Semplificato
													</strong></a>
												</li>
											
													
												
												<li class="navIcon <?php if ($pag == "pagamento_f24_elem_identificativi") print("active");?>" style="text-transform:uppercase;">
													<a href="/strutt_priv_f24_frameset.php?pag=pagamento_f24_elem_identificativi&lev1=pagamenti&wdg=06|02" target="_parent" title="Modulo F24 elem. ident."><div class="ico_pagamento_f24 ico">&nbsp;</div>
													<strong>
														Modulo F24 elem. ident.
													</strong></a>
												</li>
											
													
												
												<li class="navIcon <?php if ($pag == "pagamento_f24_accise") print("active");?>" style="text-transform:uppercase;">
													<a href="/strutt_priv_f24_frameset.php?pag=pagamento_f24_accise&lev1=pagamenti&wdg=06|02" target="_parent" title="Modulo F24 accise"><div class="ico_pagamento_f24 ico">&nbsp;</div>
													<strong>
														Modulo F24 accise
													</strong></a>
												</li>
											
													
												
												<li class="navIcon <?php if ($pag == "pagamento_f24_riepilogo") print("active");?>" style="text-transform:uppercase;">
													<a href="/strutt_priv_f24_frameset.php?pag=pagamento_f24_riepilogo&lev1=pagamenti&wdg=06|02" target="_parent" title="Riepilogo f24"><div class="ico_ultime_disposizioni ico">&nbsp;</div>
													<strong>
														Riepilogo f24
													</strong></a>
												</li>
											
													
												
												<li class="navIcon <?php if ($pag == "pagamento_f24_lista") print("active");?>" style="text-transform:uppercase;">
													<a href="/strutt_priv_f24_frameset.php?pag=pagamento_f24_lista&lev1=pagamenti&wdg=06|02" target="_parent" title="Lista contribuenti"><div class="ico_gestione_beneficiari ico">&nbsp;</div>
													<strong>
														Lista contribuenti
													</strong></a>
												</li>
											
										
									
								</ul>
							</nav>
						</div>
					</div>
				</div>
	      	</div>
		</div>
	</div>
</body>
</html>



	
					
		



 
<div class="container">
	<div class="breadcrumb pull-right" >
		
		
			<span>Pagamento F24</span>
			
			<span>Introduzione</span>
			
	</div>
</div>

		
		<p class="pull-left visible-xs-block hidden-print">
           	<button id="menu-mobile" type="button" class="btn-menu" data-toggle="offcanvas" >
           	<span class="icon-bar"></span> 
       		<span class="icon-bar"></span> 
       		<span class="icon-bar"></span> 
           	</button>
         </p>
         
	</div>
	<div class="main row row-offcanvas row-offcanvas-left">
		<div class="container">
			<!-- FINE CONTENUTO F24 -->
			<?php virtual ("/template/tpl_priv_".$pag.".php"); ?>

			<!-- CONTENUTO F24 -->


			<div class="col-xs-6 col-sm-3 sidebar-offcanvas hidden-print" id="sidebar">
				<div class="sidebar-container">
			 		<div class="list-group">
						

















	<!-- top navbar -->

	<div class="container visible-xs-block">
		<div class="row sidebar-menu" >
			<!-- sidebar -->
			
				
				<ul data-offset-top="120"   class="nav nav-stacked">
				
				
					<li onclick="apriMenuResponsive(this)" id="menu_0" class="">
						<a href="#"  >
							<strong>Pagamento F24</strong> 
						</a>
						<ul class="menu-child">
							
								<li class="ico_riepilogo" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/f24/introduzione.do" title="Introduzione">Introduzione</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_pagamento_f24" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/f24/modulo.do" title="Modulo F24">Modulo F24</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_pagamento_f24" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/f24/moduloSemplificato.do" title="Modulo F24 Semplificato">Modulo F24 Semplificato</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_pagamento_f24" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/f24/moduloAuto.do" title="Modulo F24 elem. ident.">Modulo F24 elem. ident.</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_pagamento_f24" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/f24/moduloAccise.do" title="Modulo F24 accise">Modulo F24 accise</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_ultime_disposizioni" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/f24/riepilogo.do" title="Riepilogo f24">Riepilogo f24</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_gestione_beneficiari" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/f24/contribuenti.do " title="Lista contribuenti">Lista contribuenti</a>
											
											
										
										
												
								</li>
								
								
							
						</ul>
						<hr>
					</li>
				
			</ul>
			<div style="margin-left: 10px; margin-right: 10px; margin-top: 60px;"> 
				<hr class="hr-menu"/>
			</div>
			<ul class="nav nav-stacked">
				<li class="logout" style="margin-bottom: 5px;">
					<a href="#" id="frmLogout" class="" title="Esci" onclick="$('form#logout').submit(); return false;">
						<strong>Esci</strong>
					</a>
					<hr/>
				</li>
			</ul>
			
			<!-- content area -->
			<div class="col-xs-12 col-sm-8 col-md-9 content"></div>
		</div>
		<form action="/WEBHT/logout.do" name="frmLogout" id="logout" method="post" target="_top">
			<div style="display: none">
				<input type="hidden" name="logoutExitPage" value="https://youwebcard.bancopopolare.it/logout.html" />
				<input type="hidden" name="logoutKey" value="" />
			</div>
		</form>
		<script>
			function apriMenuResponsive(item){
				$('ul.nav > li').each(function(){
					if($(this).attr('id') == $(item).attr('id')){
						$(item).find('ul.menu-child').toggle( function(){
						var newHeight = $('.sidebar-menu').height();
						$('.sidebar-container').css('min-height', newHeight);
						
						});
					}else{
						$(this).find('ul.menu-child').hide('slow');
					}
				})

			}
		</script>

	</div>

					</div>
				</div>
	        </div>
	        
		</div>	
	</div>
</div>	
<div id="divFooter" class="clearfix">
	






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
		<div class="col-xs-6 text-center"><a href="/WEBHT/serviziPerTe/disableResponsive.do?curl=/pagamenti/f24/introduzione.do" title="Sito YouWeb per PC"><strong>Sito YouWeb per PC</strong></a></div>
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
					Per qualsiasi altra esigenza &egrave; a tua disposizione<br>
				il <strong>Gestore BELLO GIUSEPPE</strong> presso la tua filiale di riferimento. 
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

	<div class="hidden" id="tooltip_popover">

		<div id="help_sharpe" class="bottom" data-auto="false">
<h3 class="popover-title">Sharpe</h3>
<div class="popover-content">L'indice di Sharpe misura l'efficienza della gestione ed &egrave; pari al rapporto tra l'extra-rendimento del Fondo/Comparto rispetto ad un'attivit&agrave; non rischiosa e la sua volatilit&agrave;. Evidenzia quindi quale rendimento &egrave; stato prodotto, in eccesso al rendimento di un'attivit&agrave; priva di rischio, per unit&agrave; di rischio derivante dalla detenzione del Fondo/Comparto.</div>
</div>

		<div id="help_alpha" class="bottom" data-auto="false">
<h3 class="popover-title">Alpha di Jensen</h3>
<div class="popover-content">L'alpha di Jensen &egrave; il rendimento incrementale di un fondo rispetto alla performance attesa. Un alpha positivo indica che il fondo ha una performance migliore rispetto a quanto atteso in relazione al suo beta, mentre un alpha negativo significa che il fondo ha una performance peggiore rispetto a quanto atteso in relazione al suo beta. L'alpha di Jensen &egrave; interpretata quindi come una misura di selectivity, cio&egrave; della capacit&agrave; del Gestore nella selezione dei titoli pi&ugrave; "performanti"</div>
</div>

		<div id="help_beta" class="bottom" data-auto="false">
<h3 class="popover-title">Beta</h3>
<div class="popover-content">L'indice Beta misura la sensibilit&agrave; di un fondo alle oscillazioni del mercato. Per definizione il beta del mercato &egrave; pari a 1,00. Un coefficiente beta di 1,1 indica che il fondo pu&ograve; ottenere una performance del 10% migliore/peggiore rispetto all'indice di mercato in caso di rialzo/ribasso.</div>
</div>

		<div id="help_rischio" class="bottom" data-auto="false">
<h3 class="popover-title">Rischio</h3>
<div class="popover-content">La rischiosit&agrave; di uno strumento &egrave; basata sull&rsquo;Indicatore sintetico di rischio (SRRI) presente nel KIID e suddiviso in 6 classi qualitative, dove l&rsquo;indicatore 1 e 2 rappresentano il rischio 1 &ldquo;Minimo&rdquo; fino ad arrivare al rischio 6 &ldquo;Alto&rdquo;.</div>
</div>

		<div id="help_rating" class="bottom" data-auto="false">
<h3 class="popover-title">Rating</h3>
<div class="popover-content">Il rating calcolato da Deus Technology &egrave; un indicatore quantitativo di scoring, su scala da 1 a 5, che si basa sulla combinazione di vari elementi (lo Sharpe, la Volatilit&agrave;, il Max Drow Down - perdita massima maturata rispetto al valore di picco registrato - e il Mean Return - il ritorno atteso dall&rsquo;investimento-) atti a comparare rendimento e rischio del fondo su vari orizzonti temporali. Lo strumento potrebbe essere <span style="text-decoration: underline;">privo di rating</span> in caso manchino i dati sufficienti per il calcolo, esempio: fondi che hanno meno di 3 anni di serie storica.</div>
</div>

		<div id="help_volatilita" class="bottom" data-auto="false">
<h3 class="popover-title">Volatilit&agrave;</h3>
<div class="popover-content">La Volatilit&agrave; &egrave; la variabilit&agrave; del rendimento del fondo nel tempo e rappresenta quindi la tendenza dei valori della quota a discostarsi dal valore medio nel periodo considerato. Maggiore &egrave; la volatilit&agrave; di un fondo, pi&ugrave; il fondo &egrave; rischioso.</div>
</div>

		<div id="help_addPref" class="bottom">
<h3 class="popover-title">Aggiungi contenuti <br />alla home page</h3>
<div class="popover-content">Puoi selezionare una funzione tra quelle disponibili qui sotto e trascinarla verso destra. Il pannello scelto sar&agrave; visualizzato gi&agrave; in accesso alla tua pagina iniziale. A fine operazione, ricordati di cliccare su "Salva" a fondo pagina.</div>
</div>

		<div id="help_refresh" class="left">
<h3 class="popover-title">Aggiorna dati</h3>
<div class="popover-content">Cliccando su questa icona, aggiorni i dati presenti in questa tabella.</div>
</div>

		<div id="help_informationRatio" class="bottom" data-auto="false">
<h3 class="popover-title">L'Information Ratio</h3>
<div class="popover-content">L'Information Ratio consente di valutare la capacit&agrave; del gestore di sovraperformare il benchmark, in relazione al rischio assunto. E&acute; calcolato rapportando il differenziale di rendimento tra fondo e indice di riferimento, alla Tracking Error Volatility che indica la volatilit&agrave; dei rendimenti differenziali di un fondo rispetto ad un indice di riferimento. Un information ratio positivo indica una gestione attiva "efficiente", il Fondo/Comparto ha cio&egrave; battuto il benchmark</div>
</div>

		<div id="help_trackingError" class="bottom" data-auto="false">
<h3 class="popover-title">Tracking error volatility</h3>
<div class="popover-content">La tracking error volatility &egrave; la volatilit&agrave; della differenza tra il rendimento del Fondo/Comparto e il rendimento del benchmark. Pi&ugrave; la volatilit&agrave; del tracking error &egrave; elevata pi&ugrave; l'andamento del Fondo/Comparto si discosta da quello del benchmark. La sua assenza &egrave; da attribuire ad una storicit&agrave; non sufficiente del Fondo/Comparto.</div>
</div>

		<div id="help_benchmark" class="bottom" data-auto="false">
<h3 class="popover-title">Benchmark</h3>
<div class="popover-content">Indice o insieme di indici che sintetizza l'andamento dei mercati in cui investe il Fondo/Comparto. Fornisce un'indicazione del profilo rischio-rendimento atteso dell'investimento. Per i fondi di diritto italiano, il benchmark indicato nella scheda &egrave; quello dichiarato nel prospetto informativo del Fondo/Comparto ed &egrave; convertito in euro. Per i fondi esteri, per cui non esiste tale obbligo, &egrave; stato scelto un benchmark in coerenza con la categoria di appartenenza del Fondo/Comparto, cos&igrave; da permettere ugualmente un'analisi ed un confronto con un parametro di riferimento.</div>
</div>

		<div id="help_commissioniGestione" class="bottom" data-auto="false">
<h3 class="popover-title">Commissione di gestione</h3>
<div class="popover-content">E' il costo fisso del servizio di gestione. E' indicato come percentuale annua di quanto investito nel fondo ed &egrave; pagato dal risparmiatore indipendentemente dal risultato ottenuto.</div>
</div>

		<div id="help_rquadro" class="bottom" data-auto="false">
<h3 class="popover-title">R-Quadro</h3>
<div class="popover-content">E' un indicatore che riflette la percentuale di oscillazione di un fondo riconducibile a oscillazioni nel benchmark di quel fondo. Un R-quadro pari a 1 indica che tutte le oscillazioni del fondo possono essere ricondotte alle oscillazioni dell'indice.</div>
</div>

		<div id="help_importoSottoscrizione" class="bottom" data-auto="false">
<h3 class="popover-title">R-Quadro</h3>
<div class="popover-content">Indipendentemente dalla divisa di denominazione del fondo/sicav l&rsquo;importo da indicare per la sottoscrizione &egrave; sempre in euro.</div>
</div>

		<div id="help_removePref" class="bottom">
<h3 class="popover-title">Elimina contenuti dalla home page</h3>
<div class="popover-content">Qui trovi i contenuti presenti nella tua pagina iniziale. Per eliminarli puoi cliccare sui singoli pannelli e trascinarli verso la colonna di sinistra. A fine operazione,  ricordati di cliccare su "Salva" a fondo pagina.</div>
</div>

		<div id="help_logo" class="right">
<h3 class="popover-title">Homepage</h3>
<div class="popover-content">Cliccando sul logo YouWeb, torni sempre alla tua pagina iniziale da qualsiasi sezione tu stia navigando.</div>
</div>

		<div id="help_prefer" class="bottom">
<h3 class="popover-title">Preferenze</h3>
<div class="popover-content">Personalizza la tua pagina iniziale scegliendo i contenuti per te pi&ugrave; importanti.</div>
</div>

		<div id="help_btnRicerca" class="left">
<h3 class="popover-title">Imposta parametri</h3>
<div class="popover-content">Grazie ai parametri puoi affinare la tua ricerca indicando, ad esempio, un importo minimo e massimo o un pi&ugrave; preciso riferimento temporale.</div>
</div>

		<div id="help_selezionaCC" class="top">
<h3 class="popover-title">Rapporti</h3>
<div class="popover-content">Cliccando su questa freccia, accedi a tutti i tuoi conti. Se vuoi invece modificare l'ordine con cui vengono visualizzati, vai alla sezione <a href="/WEBHT/serviziPerTe/rapportiPredefiniti.do">Servizi per te &gt; Rapporti in primo piano.</a></div>
</div>

	</div>

</div>
</body>
</html>