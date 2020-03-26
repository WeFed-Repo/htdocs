<?php
	$pag = $_GET["pag"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">







<html xmlns="http://www.w3.org/1999/xhtml" lang="it-IT" xml:lang="it-IT">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	







	<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/fe/css/jquery-ui_ng.min.css" />


<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/fe/css/bootstrap.min.css"  />
<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/fe/css/bootstrap.height.plugin.css" />

	<link media="screen" rel="stylesheet" type="text/css" href="/HT/fe/css/ie10-viewport.css"  />

<link media="screen" rel="stylesheet" type="text/css" href="/HT/fe/css/youWeb-main.css?v=161229"  />
 

	<link media="screen and (max-width: 544px)" rel="stylesheet" type="text/css" href="/HT/fe/css/youWeb-xxs-mobile.css?v=161229" />
	<link media="screen and (max-width: 767px)" rel="stylesheet" type="text/css" href="/HT/fe/css/youWeb-xs-mobile.css?v=161229" />
	<link media="screen and (min-width: 768px)" rel="stylesheet" type="text/css" href="/HT/fe/css/youWeb-sm-desktop.css?v=161229" />






	<link media="print" rel="stylesheet" type="text/css" href="/HT/fe/css/print.css" />


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
	<style>
<!--
.logo {
    display: block;
    width: 71px;
    height: 44px;
    background-image: url(/HT/fe/img/logo_youweb.png);
    margin: 15px 0 0 30px;
}


#topNav {
    background: #FFF;
    /* width: 100%; */
    margin: 0px;
    display: block;
    overflow: visible;
    padding: 0 300px 0 105px;
    float: left;
}

ul#topMain {
    margin: 0 auto;
    text-align: center;
    width: 750px;
}
ul#topMain>li {
    list-style: none;
    float: left;
    margin-bottom: 0px!important;
    margin: 38px 7px 0 7px;
    font-weight: 600;
}
ul#topMain .ico {display:none} 
.contLogoDesk {
    width: 105px;
    height: 82px;
    float: left;
    margin-left: -105px;
    border-bottom: solid 2px #ebeef0;
    margin-bottom: -2px;
}
-->
.contImpDxDeskX {
    background-color: #0E977F;
    width: 100px;
    height: 80px;
    margin-right: -100px;
    float: right;
    right: 0;
}
#headerDesktop.headerDesktopX {padding: 0 100px 0 105px;}
</style>

<!--div class="header" style="box-shadow: none;">
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
 			</div--><!--  .topbar -->
 			<!--div id="topNav">
	 			<div class="container">
	 			<div class="logo">
						<span>Banco BPM</span>
					</div>
		 			<div class="col-xs-9 col-xs-offset-3">
		        		<div class="navbar nav-main">
			        		<nav class="nav-main">
								<ul id="topMain" class="nav nav-pills nav-main">
												
												<li class="navIcon active" style="text-transform:uppercase;">
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
											
													
												
												<li class="navIcon " style="text-transform:uppercase;">
													<a href="/strutt_priv_f24_frameset.php?pag=pagamento_f24_elem_identificativi&lev1=pagamenti&wdg=06|02" target="_parent" title="Modulo F24 elem. ident."><div class="ico_pagamento_f24 ico">&nbsp;</div>
													<strong>
														Modulo F24 elem. ident.
													</strong></a>
												</li>
											
													
												
												<li class="navIcon " style="text-transform:uppercase;">
													<a href="/strutt_priv_f24_frameset.php?pag=pagamento_f24_accise&lev1=pagamenti&wdg=06|02" target="_parent" title="Modulo F24 accise"><div class="ico_pagamento_f24 ico">&nbsp;</div>
													<strong>
														Modulo F24 accise
													</strong></a>
												</li>
											
													
												
												<li class="navIcon " style="text-transform:uppercase;">
													<a href="/strutt_priv_f24_frameset.php?pag=pagamento_f24_riepilogo&lev1=pagamenti&wdg=06|02" target="_parent" title="Riepilogo f24"><div class="ico_ultime_disposizioni ico">&nbsp;</div>
													<strong>
														Riepilogo f24
													</strong></a>
												</li>
											
													
												
												<li class="navIcon " style="text-transform:uppercase;">
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
		</div-->
		
		
		
<div id="headerDesktop" class="headerDesktopX">
	<!-- Header SX -->
	<div class="contLogoDesk">
		<a href="#!" class="logoYouWeb" title="Torna all'homepage"></a>
	</div>
	<!-- END Header SX -->

	<!-- Header Center -->
	<div class="contMenuDesk">
		<ul id="firstMenu" class="firstMenuDesk">
			<!-- Introduzione -->
			<li>
				<a href="/strutt_priv_f24_no_frameset.php?pag=pagamento_f24_intro&lev1=pagamenti&wdg=06|02" title="INTRODUZIONE">
					<span>INTRODUZIONE</span>
				</a>
			</li>			
			<!-- END Introduzione -->
			
			<!-- Modulo F24 -->
			<li>
				<a href="/strutt_priv_new_f24_frameset.php?pag=pagamento_f24_modulo&lev1=pagamenti&wdg=06|02" title="MODULO F24">MODULO F24</a>	
			</li>			
			<!-- END Modulo F24 -->

			<!-- Modulo F24 Semplificato -->
			<li>
				<a href="/strutt_priv_new_f24_frameset.php?pag=pagamento_f24_semplificato&lev1=pagamenti&wdg=06|02" title="MODULO F24 SEMPLIFICATO">MODULO F24<br>SEMPLIFICATO</a>	
			</li>
			<!-- END Modulo F24 Semplificato -->

			<!-- Modulo F24 elem. ident. -->
			<li>
				<a href="/strutt_priv_new_f24_frameset.php?pag=pagamento_f24_elem_identificativi&lev1=pagamenti&wdg=06|02" title="MODULO F24 ELEM. IDENT.">MODULO F24<br>ELEM. IDENT.</a>
			</li>
			<!-- END Modulo F24 elem. ident. -->

			<!-- Modulo F24 accise -->
			<li>
				<a href="/strutt_priv_new_f24_frameset.php?pag=pagamento_f24_accise&lev1=pagamenti&wdg=06|02" title="MODULO F24 ACCISE">MODULO F24<br> ACCISE</a>
			</li>
			<!-- END Modulo F24 accise -->	

			<!-- Riepilogo f24 -->		
			<li>
				<a href="/strutt_priv_new_f24_frameset.php?pag=pagamento_f24_riepilogo&lev1=pagamenti&wdg=06|02" title="RIEPILOGO F24">RIEPILOGO<br>F24</a>
			</li>	
			<!-- END Riepilogo f24 -->	

			<!-- Lista contribuenti -->
			<li>
				<a href="/strutt_priv_new_f24_frameset.php?pag=pagamento_f24_lista&lev1=pagamenti&wdg=06|02" title="LISTA CONTRIBUENTI">LISTA<br>CONTRIBUENTI</a>
			</li>
			<!-- END Lista contribuenti -->
		</ul>
	</div>
	
	<!--END Header Center -->

<!-- Header DX -->
	<div class="contImpDxDesk contImpDxDeskX">

	<!-- Icon X -->
		<div class="containerIconHeadDX">
			
			<span>
				<a href="#" class="iconExit" title="Esci">
					<span class="icon icon-logout"></span>
				</a>
			</span>
		</div-->
	<!-- END Icon X -->
	
	<!-- Header DX Icona User -->                   
		<!--div class="dropdown">
			<a href="#" class="dropdown-toggle iconUserDx" type="button" data-toggle="dropdown" title="Dati personali">
				<span class="icon icon-user"></span>
			</a>
			<ul class="dropdown-menu headerDxUserMenu">
				<li>
					<span class="triangoloUser"></span>
					<span id="intestazioniUserIcon">
						<p class="introUser">
							Benvenuta
						</p> 
						<p class="nameUser">
							Teresa Colombo
						</p>
						<p class="infoAccessUser">
							Ultima visita
							<span class="infoAccessUser2">15 MAR 2017 17:40</span>
						</p> 
					</span>
				</li>
				<li></li>
				<li><a href="#!" title="Il mio profilo">Il mio profilo</a></li>
				<li><a href="#!" title="I miei contatti">I miei contatti</a></li>
				<li><a href="#!" title="Il  mio calendario">Il  mio calendario</a></li>
				<li><a href="#!" title="Aiuto">Aiuto</a></li>
			</ul>
		</div-->
	<!--END  Header DX Icona User -->

	<!-- HEADER DX Icona Impostazioni -->               
		<!--div class="dropdown">
			<a href="#" class="dropdown-toggle iconImpostazioneDx" type="button" data-toggle="dropdown" title="Strumenti">
			<span class="icon icon-settings"></span>
			</a>
			<ul class="dropdown-menu headerDxIconImp">
				<li><span class="triangoloImp"></span></li>
				<li><a href="#!" title="Personalizza Homepage">Personalizza Homepage</a></li>
				<li><a href="#!" title="Rapporti in primo piano">Rapporti in primo piano</a></li>
				<li><a href="#!" title="Modifica link preferiti">Modifica link preferiti</a></li>
				<li><a href="#!" title="Stampa">Stampa</a></li>
			</ul>
		</div-->
	<!-- END Icona Impostazioni -->

	<!-- Icon Exit -->
		<!--div class="containerIconHeadDX">
			<span>
				<span class="separator"></span>
			</span>
			<span>
				<a href="#" class="iconExit" title="Esci">
					<span class="icon icon-logout"></span>
				</a>
			</span>
		</div-->
	<!-- END Icon Exit -->


	
	</div>
<!-- END Header DX -->
</div>

		
</body>
</html>



	