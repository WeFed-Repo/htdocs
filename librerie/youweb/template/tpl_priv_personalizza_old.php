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

	<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/jquery-ui_ng.min.css" />


<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/bootstrap.min.css"  />
<link media="screen, print" rel="stylesheet" type="text/css" href="/HT/CSS/bootstrap.height.plugin.css" />

	<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/ie10-viewport.css"  />

<link media="screen" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-main.css?v=161220"  />
 

	<link media="screen and (max-width: 544px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-xxs-mobile.css?v=161220" />
	<link media="screen and (max-width: 767px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-xs-mobile.css?v=161220" />
	<link media="screen and (min-width: 768px)" rel="stylesheet" type="text/css" href="/HT/CSS/youWeb-sm-desktop.css?v=161220" />






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


<script type="text/javascript" language="javascript" src="/HT/JS/script/funzioniYW.js?v=161220"></script>






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
function getLineaTol() {	return "IDT";}
</script>


	
	<title>YouWeb</title>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			






<div class="topbar hidden-xs">
	<div class="container">
			
			
			
        <div>
			<div class="buttons">
				<div class="ico logout pull-right">
					<a href="#" id="frmLogout" class="" title="Esci" onclick="$('form#logout').submit(); return false;"> </a>
				</div>
				
					<div class="ico pref pull-right" id="prefer">
						<a href="/WEBHT/homepagePreferenze.do" title="Personalizza"></a>
					</div>
				
				<div class="ico print pull-right">
					<a onclick="javascript:window.print();" title="Stampa" href="#"></a>
				</div>
				
				
   				<div class="ico tooltips pull-right">
					<a href="#" id="tooltipHelp"  title="Help" onclick="javascript:showAllHelp(); return false"> </a>
				</div>
			</div>
			<div  class="ico user-info pull-right">
        	 	<div><strong>Mauro Luca Tallo</strong></div>
         		
					<div>
						<span>Ultimo accesso:</span>
						<strong>
							18/05/2017			
							&nbsp;
							13:44
						</strong>
					</div>			
				
			</div>
     	</div>
     </div>
 </div><!--  .topbar -->

			










 





<header id="topNav">
        
	<div class="hidden-xs">
			<div class="col-sm-80 col-sm-offset-20 col-xs-12">
        		<div class="navbar nav-main">
        		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="true"> 
        		<span class="sr-only">Toggle navigation</span> 
        		<span class="icon-bar"></span> 
        		<span class="icon-bar"></span> 
        		<span class="icon-bar"></span> 
        		</button>
        		
        		<nav id="bs-navbar" class="navbar-collapse collapse in" aria-expanded="true">
					<ul id="topMain" class="nav nav-pills nav-main">
						
					
							

							
							<li class="mega-menu dropdown ">
								<a href="#" class="dropdown-toggle"	title="CONTI E DEPOSITI" >
									<div class="ico conti_depositi">&nbsp;</div>
									<strong>CONTI E DEPOSITI</strong>
								</a>
								
								 
								 
								 
								 
								 
								  <ul id="bs-navbar" class="dropdown-menu three-col  ">
								  
								  	<li>
								  		<div class="row">
										  	<div  class="menu-col">
										  		<ul>
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cc/movimentiConto.do" title="Saldo e movimenti">Saldo e movimenti</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/prestitiMutui/dettaglioPrestitiMutui.do" title="Finanziamenti">Finanziamenti</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cc/dettaglioInteressiConto.do" title="Interessi e spese">Interessi e spese</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cc/pannelloRapporti.do" title="Pannello Rapporti">Pannello Rapporti</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/av/adeguataVerificaLista.do" title="Adeguata Verifica">Adeguata Verifica</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cc/bilancioMensile.do" title="Bilancio mensile">Bilancio mensile</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
																</ul>
																</div>
																<div class="menu-col">
																<ul>
															
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cc/gestioneCategorie.do" title="Gestione categorie">Gestione categorie</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cc/creazioneCategorie.do" title="Creazione categorie">Creazione categorie</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																<span>Conto deposito</span>
																											  						
													  		</li>
										  				
										  			
		
										  			
										  				<ul class="terzo_livello">
										  				
										  					<li>
											  					<a href="/WEBHT/cd/contoDepositoVincolaRiepilogo.do" title="Vincola">Vincola</a>
										  					</li>
										  				
										  					<li>
											  					<a href="/WEBHT/cd/contoDepositoITuoiVincoli.do" title="I tuoi vincoli">I tuoi vincoli</a>
										  					</li>
										  				
										  					<li>
											  					<a href="/WEBHT/cd/listaContiAppoggio.do" title="Conti di appoggio">Conti di appoggio</a>
										  					</li>
										  				
										  				</ul>
										  			
												  	
												  		
											  	</ul>
											</div>
								  		
											<div class="menu-col">
												<div class="menu-info"> 
														
															
															<h3>Potrebbe interessarti</h3>
															<div>
																<p style="text-align: center;"><a title="YouApp" onclick="javascript:goToPage('/news/dettaglio.do?id=737');" href="#"><img title="YouApp" src="/HT/IMAGES/CONTENUTI/Menu_Comm_youapp.png" alt="YouApp" width="200" height="58" /></a></p>
<p>YouApp &egrave; l'applicazione che ti permette di ritrovare&nbsp;tutte le funzioni&nbsp;di YouWeb sul tuo <strong>smartphone</strong> e sul tuo <strong>tablet</strong>. YouApp&nbsp; &egrave; semplice, completa e...sempre con te.<br /><br /><a title="YouApp" onclick="javascript:goToPage('/news/dettaglio.do?id=737');" href="#"><strong>Scopri di pi&ugrave;!</strong></a></p>
															</div>
															
														
															
														
															
														
															
														
															
														
															
														
															
														
												</div>
											</div>
										</div>
									</li>
								  </ul>
							</li>
					
					
							

							
							<li class="mega-menu dropdown ">
								<a href="#" class="dropdown-toggle"	title="PAGAMENTI" >
									<div class="ico pagamenti">&nbsp;</div>
									<strong>PAGAMENTI</strong>
								</a>
								
								 
								 
								 
								 
								 
								  <ul id="bs-navbar" class="dropdown-menu three-col  ">
								  
								  	<li>
								  		<div class="row">
										  	<div  class="menu-col">
										  		<ul>
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/pagamenti/ultimeDisposizioni.do" title="Ultime disposizioni">Ultime disposizioni</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/pagamenti/listaBeneficiari.do" title="Gestione beneficiari">Gestione beneficiari</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/pagamenti/bonificoSepa.do" title="Bonifico ordinario">Bonifico ordinario</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/pagamenti/bonificoDetrazione.do" title="Bonifico per detrazioni">Bonifico per detrazioni</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/pagamenti/trasferimentoConti.do" title="Trasferimento tra conti">Trasferimento tra conti</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/pagamenti/ricaricaDati.do" title="Ricarica telefonica">Ricarica telefonica</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/pagamenti/f24.do" title="Pagamento F24">Pagamento F24</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/pagamenti/bollettiniPostali.do" title="Bollettino Postale">Bollettino Postale</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/pagamenti/mav.do" title="Bollettino MAV">Bollettino MAV</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/pagamenti/rav.do" title="Bollettino RAV">Bollettino RAV</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/serviziPerTe/coordinateIban.do" title="Coordinate IBAN">Coordinate IBAN</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
																</ul>
																</div>
																<div class="menu-col">
																<ul>
															
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/pagamenti/bolletta.do" title="Utenze">Utenze</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/pagamenti/buoniInps.do" title="Richiesta Voucher Inps">Richiesta Voucher Inps</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cc/delegheRid.do" title="Domiciliazioni">Domiciliazioni</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cc/statoAssegni.do" title="Assegni">Assegni</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cc/accreditoStipendio.do" title="Accredito stipendio">Accredito stipendio</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/pagamenti/ricaricaMediaset.do" title="Mediaset Premium">Mediaset Premium</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/pagamenti/bolloAuto.do" title="Bollo Auto">Bollo Auto</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/pagamenti/freccia.do" title="Bollettino Freccia">Bollettino Freccia</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/pagamenti/bonificoContinuativoCompilazione.do" title="Bonifico ripetitivo">Bonifico ripetitivo</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/pagamenti/bonificoContinuativoLista.do" title="Lista bonifici ripetitivi">Lista bonifici ripetitivi</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/pagamenti/cbill.do" title="CBILL - pagoPA">CBILL - pagoPA</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
												  		
											  	</ul>
											</div>
								  		
											<div class="menu-col">
												<div class="menu-info"> 
														
															
														
															
															<h3>Potrebbe interessarti</h3>
															<div>
																<p style="text-align: center;"><a title="Bonifico per detrazione" onclick="javascript:goToPage('/news/dettaglio.do?id=1198');" href="#"><img title="Menu_Comm_BolloAuto" src="/HT/IMAGES/CONTENUTI/Menu_Comm_BolloAuto.png" alt="Menu_Comm_BolloAuto" width="200" height="58" /></a></p>
<p>Pagare il bollo auto non &egrave; mai stato cos&igrave; semplice, <strong>ora anche in Piemonte!</strong><br /><br /><a title="Trasferimento tra conti" onclick="javascript:goToPage('/news/dettaglio.do?id=1198');" href="#"><strong>Scopri di pi&ugrave;!</strong></a></p>
															</div>
															
														
															
														
															
														
															
														
															
														
															
														
												</div>
											</div>
										</div>
									</li>
								  </ul>
							</li>
					
					
							

							
							<li class="mega-menu dropdown ">
								<a href="#" class="dropdown-toggle"	title="CARTE" >
									<div class="ico carte">&nbsp;</div>
									<strong>CARTE</strong>
								</a>
								
								 
								 
								 
								 
								 
								  <ul id="bs-navbar" class="dropdown-menu three-col  ">
								  
								  	<li>
								  		<div class="row">
										  	<div  class="menu-col">
										  		<ul>
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cartaConto/riepilogoCartaConto.do" title="Le mie carte">Le mie carte</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cartaConto/movimenti.do" title="Movimenti">Movimenti</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cartaConto/ricaricaCarta.do" title="Ricarica Carta">Ricarica Carta</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cartaConto/scaricaCarta.do" title="Scarica Carta">Scarica Carta</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cartaConto/autoricarica.do" title="Ricarica automatica">Ricarica automatica</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
																</ul>
																</div>
																<div class="menu-col">
																<ul>
															
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cartaConto/cambioPinCarta.do" title="Cambio PIN carta">Cambio PIN carta</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																<span>Ricarica PostePay</span>
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cartaConto/pannelloControllo.do" title="Pannello controllo">Pannello controllo</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cartaConto/cartaSi.do" title="Portale CartaSi">Portale CartaSi</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cartaConto/agosducato.do" title="Portale Agos Ducato">Portale Agos Ducato</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
												  		
											  	</ul>
											</div>
								  		
											<div class="menu-col">
												<div class="menu-info"> 
														
															
														
															
														
															
															<h3>Potrebbe interessarti</h3>
															<div>
																<p style="text-align: center;"><a title="Servizio Alert" onclick="javascript:goToPage('/sm/riepilogo.do');" href="#"><img title="Servizio Alert" src="/HT/IMAGES/CONTENUTI/Menu_Comm_alert.png" alt="Servizio Alert" width="200" height="58" /></a></p>
<p>Scopri la comodit&agrave; del <strong>servizio Alert</strong>: un sms, una mail o una notifica via YouApp ti avvisa, ad esempio,&nbsp;ad ogni movimento&nbsp;del&nbsp;tuo conto o&nbsp;alla variazione&nbsp;dei tuoi titoli preferiti.<br /><br /><a title="Sezione YouAlert" onclick="javascript:goToPage('/sm/riepilogo.do');" href="#"><strong>Scopri di pi&ugrave;!</strong></a></p>
															</div>
															
														
															
														
															
														
															
														
															
														
												</div>
											</div>
										</div>
									</li>
								  </ul>
							</li>
					
					
							

							
							<li class="mega-menu dropdown ">
								<a href="#" class="dropdown-toggle"	title="ALERT" >
									<div class="ico alert hidden-xs">&nbsp;</div>
									<strong>ALERT</strong>
								</a>
								
								 
								 
								 
								 
								 
								  <ul id="bs-navbar" class="dropdown-menu three-col  ">
								  
								  	<li>
								  		<div class="row">
										  	<div  class="menu-col">
										  		<ul>
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/sm/riepilogo.do" title="Pannello Alert">Pannello Alert</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/sm/bonifici.do" title="Info bonifico">Info bonifico</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/sm/ricarica.do" title="Info ricarica">Info ricarica</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/sm/carte.do" title="Info carte">Info carte</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/sm/conto.do" title="Info conto">Info conto</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
																</ul>
																</div>
																<div class="menu-col">
																<ul>
															
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/sm/dossier.do" title="Info dossier">Info dossier</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/sm/titoli.do" title="Info titoli">Info titoli</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/sm/fondi.do" title="Info fondi">Info fondi</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/sm/indiciCambi.do" title="Cambi e indici">Cambi e indici</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/sm/recedi.do" title="Recedi">Recedi</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
												  		
											  	</ul>
											</div>
								  		
											<div class="menu-col">
												<div class="menu-info"> 
														
															
														
															
														
															
														
															
															<h3>Potrebbe interessarti</h3>
															<div>
																<p style="text-align: center;"><a title="Personalizza la tua Home Page" onclick="javascript:goToPage('/news/dettaglio.do?id=1004');" href="#"><img title="Personalizza la tua Home Page" src="/HT/IMAGES/CONTENUTI/Menu_Comm_PersonalizzaHome.png" alt="Personalizza la tua Home Page" width="200" height="58" /></a></p>
<p>YouWeb si adatta alle tue esigenze e ti permette di&nbsp;<strong>accedere&nbsp;pi&ugrave; velocemente</strong> alle funzioni che utilizzi con maggiore frequenza.<br /><br /><a title="Personalizza la tua Home Page" onclick="javascript:goToPage('/news/dettaglio.do?id=1004');" href="#"><strong>Scopri di pi&ugrave;!</strong></a></p>
															</div>
															
														
															
														
															
														
															
														
												</div>
											</div>
										</div>
									</li>
								  </ul>
							</li>
					
					
							

							
							<li class="mega-menu dropdown ">
								<a href="#" class="dropdown-toggle"	title="POSTA PERSONALE" >
									<div class="ico posta_personale">&nbsp;</div>
									<strong>POSTA PERSONALE</strong>
								</a>
								
								 
								 
								 	
								 		
								 		
											 
								 		
								 	
								 
								 
								 
								 
								  <ul id="bs-navbar" class="dropdown-menu col-xs-7 col-xs-offset-2   ">
								  
								  	<li>
								  		<div class="row">
										  	<div  class="menu-col">
										  		<ul>
												  	
										  			
										  				
													  		<li >
													  			
													  			
														  			<a href="/WEBHT/postaPersonale/nuoviDocumenti.do" title="Posta in arrivo">Posta in arrivo</a>
													  			
													  			
													  			
													  		</li>
										  					
										  				
										  				
										  			
		
										  			
												  	
										  			
										  				
													  		<li >
													  			
													  			
														  			<a href="/WEBHT/postaPersonale/vediAllarmiRapporti.do" title="Info posta">Info posta</a>
													  			
													  			
													  			
													  		</li>
										  					
										  				
										  				
										  			
		
										  			
												  	
										  			
										  				
													  		<li >
													  			
													  			
														  			<a href="/WEBHT/postaPersonale/archivio.do" title="Archivio">Archivio</a>
													  			
													  			
													  			
													  		</li>
										  					
										  				
										  				
										  			
		
										  			
												  	
										  			
										  				
													  		<li >
													  			
													  			
														  			<a href="/WEBHT/postaPersonale/richieste.do" title="Contratti e Proposte">Contratti e Proposte</a>
													  			
													  			
													  			
													  		</li>
										  					
										  				
										  				
										  			
		
										  			
												  	
										  			
										  				
													  		<li >
													  			
													  			
														  			<a href="/WEBHT/postaPersonale/contrattiProposte.do" title="Contratti e Proposte (New)">Contratti e Proposte (New)</a>
													  			
													  			
													  			
													  		</li>
										  					
										  				
										  				
										  			
		
										  			
												  	
												  		
											  	</ul>
											</div>
								  		
											<div class="menu-col">
												<div class="menu-info"> 
														
															
														
															
														
															
														
															
														
															
															<h3>Potrebbe interessarti</h3>
															<div>
																<p style="text-align: center;"><a title="Pannello Rapporti" onclick="javascript:goToPage('/news/dettaglio.do?id=1008');" href="#"><img title="Pannello Rapporti" src="/HT/IMAGES/CONTENUTI/Menu_Comm_PannelloRapporti.png" alt="Pannello Rapporti" width="200" height="58" /></a></p>
<p>Sai che in un'unica pagina trovi il <strong>riepilogo di tutti i rapporti</strong> che hai in essere con la Banca e che puoi anche <strong>modificare</strong>&nbsp;<strong>i massimali&nbsp;dei bonifici</strong>&nbsp;fatti online?<br /><br /><a title="Pannello Rapporti" onclick="javascript:goToPage('/news/dettaglio.do', 'id', '1008');" href="#"><strong>Scopri di pi&ugrave;!</strong></a></p>
															</div>
															
														
															
														
															
														
												</div>
											</div>
										</div>
									</li>
								  </ul>
							</li>
					
					
							

							
							<li class="mega-menu dropdown ">
								<a href="#" class="dropdown-toggle"	title="INVESTIMENTI" >
									<div class="ico investimenti">&nbsp;</div>
									<strong>INVESTIMENTI</strong>
								</a>
								
								 
								 
								 
								 
								 
								  <ul id="bs-navbar" class="dropdown-menu three-col  ">
								  
								  	<li>
								  		<div class="row">
										  	<div  class="menu-col">
										  		<ul>
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/investimenti/news.do" title="Situazione">Situazione</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/investimenti/titoliPreferiti.do" title="Titoli preferiti">Titoli preferiti</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/investimenti/titoliDossier.do" title="Il tuo portafoglio">Il tuo portafoglio</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/investimenti/ordiniMovimenti.do" title="Ordini e movimenti">Ordini e movimenti</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/investimenti/portafoglioSimulato.do" title="Portafoglio simulato">Portafoglio simulato</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/investimenti/mifid.do" title="Questionario Mifid">Questionario Mifid</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/investimenti/aperturaTol.do" title="Linea di Trading">Linea di Trading</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/investimenti/analisiTecnica.do" title="Analisi">Analisi</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
																</ul>
																</div>
																<div class="menu-col">
																<ul>
															
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/investimenti/indici.do" title="Indici">Indici</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/investimenti/posizioneFiscale.do" title="Posizione fiscale">Posizione fiscale</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cc/posizionePatrimoniale.do" title="Posizione patrimoniale">Posizione patrimoniale</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/investimenti/cambiForm.do" title="Cambi">Cambi</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																<span>Fondi</span>
																											  						
													  		</li>
										  				
										  			
		
										  			
										  				<ul class="terzo_livello">
										  				
										  					<li>
											  					<a href="/WEBHT/investimenti/fondiRicerca.do" title="Ricerca e analisi">Ricerca e analisi</a>
										  					</li>
										  				
										  					<li>
											  					<a href="/WEBHT/investimenti/fondiOrdiniElenco.do" title="Ordini">Ordini</a>
										  					</li>
										  				
										  					<li>
											  					<a href="/WEBHT/investimenti/fondiPreferitiElenco.do" title="Fondi preferiti">Fondi preferiti</a>
										  					</li>
										  				
										  				</ul>
										  			
												  	
												  		
											  	</ul>
											</div>
								  		
											<div class="menu-col">
												<div class="menu-info"> 
														
															
														
															
														
															
														
															
														
															
														
															
															<h3>Potrebbe interessarti</h3>
															<div>
																<p style="text-align: center;"><a title="Accesso Easy o Full" onclick="javascript:goToPage('/news/dettaglio.do?id=21');" href="#"><img title="Menu_Comm_PostaPersonale" src="/HT/IMAGES/CONTENUTI/Menu_Comm_PostaPersonale.png" alt="Menu_Comm_PostaPersonale" width="200" height="58" /></a></p>
<p><strong>Posta Personale</strong> &egrave; il servizio che ti permette di ricevere in formato pdf i tuoi documenti bancari <strong>risparmiando soldi e carta</strong>! Scopri il servizio e la comodit&agrave; di avere&nbsp;<strong>il tuo archivio digitale sempre a tua disposizione</strong>.<br /><br /><a title="Accesso Easy o Full" onclick="javascript:goToPage('/news/dettaglio.do?id=21');" href="#"><strong>Scopri di pi&ugrave;!</strong></a></p>
															</div>
															
														
															
														
												</div>
											</div>
										</div>
									</li>
								  </ul>
							</li>
					
					
							

							
							<li class="mega-menu dropdown ">
								<a href="#" class="dropdown-toggle"	title="SERVIZI PER TE" >
									<div class="ico servizi_per_te">&nbsp;</div>
									<strong>SERVIZI PER TE</strong>
								</a>
								
								 
								 
								 
								 
								 
								  <ul id="bs-navbar" class="dropdown-menu three-col  ">
								  
								  	<li>
								  		<div class="row">
										  	<div  class="menu-col">
										  		<ul>
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/serviziPerTe/ilTuoProfilo.do" title="Il tuo profilo">Il tuo profilo</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/serviziPerTe/rapportiPredefiniti.do" title="Rapporti in primo piano">Rapporti in primo piano</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/serviziPerTe/contatti.do" title="Gestione contatti">Gestione contatti</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/serviziPerTe/ilMioCalendario.do" title="Il mio calendario">Il mio calendario</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/serviziPerTe/richiestaAppuntamentoCompilazione.do" title="Richiedi appuntamento">Richiedi appuntamento</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/investimenti/dossierApri.do" title="Apri Dossier Titoli">Apri Dossier Titoli</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
																</ul>
																</div>
																<div class="menu-col">
																<ul>
															
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/cartaConto/youCardApri.do" title="Richiedi la YouCard">Richiedi la YouCard</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/news/elenco.do" title="News">News</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/serviziPerTe/scaricoCertificato.do" title="Scarico certificato">Scarico certificato</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/serviziPerTe/sicurezzaInfo.do" title="Sicurezza YouWeb">Sicurezza YouWeb</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																	
																		<a href="/WEBHT/info/contattaci.do" title="Contattaci">Contattaci</a>
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																		<a href="#" title="YouShop" onclick="javascript:OpenWindow('/WEBHT/youshop/login.do','_blank','');">YouShop</a>
																	
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
										  			
										  				
										  				
													  		
													  		<li>
																
																
																	
																	
																		<a href="#" title="YouWin" onclick="javascript:OpenWindow(getPathContext() + '/serviziPerTe/youWin.do','_blank','');">YouWin</a>
																	
																	
																	
																
																
																											  						
													  		</li>
										  				
										  			
		
										  			
												  	
												  		
											  	</ul>
											</div>
								  		
											<div class="menu-col">
												<div class="menu-info"> 
														
															
														
															
														
															
														
															
														
															
														
															
														
															
															<h3>Potrebbe interessarti</h3>
															<div>
																<p style="text-align: center;"><a title="Bonifico per detrazione" onclick="javascript:goToPage('/news/dettaglio.do?id=1097');" href="#"><img title="Menu_Comm_BonificoDetrazione" src="/HT/IMAGES/CONTENUTI/Menu_Comm_BonificoDetrazioni.png" alt="Menu_Comm_BonificoDetrazione" width="200" height="58" /></a></p>
<p>Sai che da YouWeb puoi anche disporre <strong>bonifici fiscali</strong> per <strong>&ldquo;Ristrutturazione edilizia&rdquo;</strong> e per <strong>&ldquo;Risparmio energetico&rdquo;</strong>?<br /><br /><a title="Bonifico per detrazioni" onclick="javascript:goToPage('/news/dettaglio.do?id=1097');" href="#"><strong>Scopri di pi&ugrave;!</strong></a></p>
															</div>
															
														
												</div>
											</div>
										</div>
									</li>
								  </ul>
							</li>
					
				</ul>
				
				</nav>
				
			</div>
      	</div>
    </div>
     <div class="container">
     	
     	<div class="logo  col-xs-12" id="logo">
    		
			<a href="/WEBHT/homepage.do" title="Torna all'homepage"><span>Banco BPM</span></a>
		</div>
	</div>

</header>


<script>
$(document).ready(function(){
	 $(document).on("click", function(event){
	 
        var $trigger = $(".dropdown");
        if($trigger !== event.target && !$trigger.has(event.target).length){
       		$('.sub-open').click(); 	
    
        }            	
    });
})
</script>	
			
		
			<p class="pull-left visible-xs-block">
            	<button id="menu-mobile" type="button" class="btn-menu" data-toggle="offcanvas" >
            	<span class="icon-bar"></span> 
        		<span class="icon-bar"></span> 
        		<span class="icon-bar"></span> 
            	</button>
          	</p>
          	
		</div>
		<div class="main row row-offcanvas row-offcanvas-left">
			<div class="container">
				<div id="contentLeft" class="col-sm-20 hidden-print spalla hidden-xs">
					





<div class="riquadro">


	
	


<h1>
	
		<div class="flag hidden-xxs pannelloPreferenzeSpalla">&nbsp;</div>
	
	
		Pannelli disponibili
	
</h1>
	<div id="addPref"></div>

	<ol id="spallaPreferenzeHP">
		
			<li data-tipo="Riepilogo" style="margin-bottom: 5px; padding-bottom: 5px;">
				<img  src="/HT/IMAGES/nGrafica/Riepilogo.png"  class="handler"/>
			</li>
		
			<li data-tipo="RiepilogoCarte" style="margin-bottom: 5px; padding-bottom: 5px;">
				<img  src="/HT/IMAGES/nGrafica/RiepilogoCarte.png"  class="handler"/>
			</li>
		
			<li data-tipo="Calendario" style="margin-bottom: 5px; padding-bottom: 5px;">
				<img  src="/HT/IMAGES/nGrafica/Calendario.png"  class="handler"/>
			</li>
		
	</ol>
</div>

				</div>
				<div id="mainContent" class="center col-sm-80 col-xs-12">
					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage" />
						<div class="pull-right">
							  
							18/05/2017	
						</div>
					</div>
					
					
					
					



<div class="clearfix" >
	<div class="col-xs-12">
		<img src="/HT/IMAGES/nGrafica/header_pref.png" width="100%" />
	</div>
	<div class="col-xs-3">
		<img src="/HT/IMAGES/nGrafica/spalla_pref.png" width="100%" style="margin-top:24px" />
	</div>
	<div class="col-xs-9"  id="homepage_pref">
		<div id="removePref"></div>
		<ol id="col1" class="col-xs-6" style="min-height:200px;  margin-top: 17px;">
			
	
				<li data-tipo="Movimenti" style="padding-bottom:5px; margin-bottom:5px;">
					<img src="/HT/IMAGES/nGrafica/Movimenti.png" class="handler" />
				</li>
			
	
				<li data-tipo="PostaPersonale" style="padding-bottom:5px; margin-bottom:5px;">
					<img src="/HT/IMAGES/nGrafica/PostaPersonale.png" class="handler" />
				</li>
			
	
				<li data-tipo="Portafoglio" style="padding-bottom:5px; margin-bottom:5px;">
					<img src="/HT/IMAGES/nGrafica/Portafoglio.png" class="handler" />
				</li>
			
			
		</ol>
		<ol id="col2" class="col-xs-6" style="  margin-top: 17px;">
			
			<li data-tipo="SintesiPatrimoniale" style="padding-bottom:5px; margin-bottom:5px;">
				<img src="/HT/IMAGES/nGrafica/SintesiPatrimoniale.png"  class="handler" />
			</li>
			
			<li data-tipo="TitoliPreferiti" style="padding-bottom:5px; margin-bottom:5px;">
				<img src="/HT/IMAGES/nGrafica/TitoliPreferiti.png"  class="handler" />
			</li>
			
			<li data-tipo="Indici" style="padding-bottom:5px; margin-bottom:5px;">
				<img src="/HT/IMAGES/nGrafica/Indici.png"  class="handler" />
			</li>
			
		</ol>
	</div>
</div>
<div class="pull-right">
	<button class="btn btn-primary" onclick="javascript:goToPage('/homepage.do')">Torna all'homepage</button>
	<button id="salva" class="btn btn-primary execute disabled" onclick="save()">Salva</button>
</div>

<div id="allarmePersonalizza" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title" id="myModalLabel">Errore nel salvataggio</h4>
        </div>
        <div class="modal-body">
        
          <p>Puoi scegliere al massimo 6 box tra quelli disponibili.</p>

        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
</div>

<script>


function save(){
	var blocchi = [];
	$('#homepage_pref > ol').each(function(col_index){
		var col = col_index;
		$(this).find('li').each(function(row_index){
			var row = row_index;
			var tipo = $(this).attr("data-tipo");
			var elemento = {"col":col, "row":row, "tipo":tipo};
			blocchi.push(elemento)
		})
	});
	$('.messagePanel').remove();
	var blocchi_json = "point="+JSON.stringify(blocchi);
	$.post(getPathContext() + '/saveHomepage.do', blocchi_json, function(ret) {
		if(ret[0] == "OK"){
			var div = "<div class=\"col-xs-12 messagePanel success\" style=\"display: block;\"><h3 class=\"titleSection\">"+ret[1]+"</h3><div><strong>"+ret[2]+"</strong></div>";
		}else{
			var div = "<div class=\"col-xs-12 messagePanel error\" style=\"display: block;\"><h3 class=\"titleSection\">"+ret[1]+"</h3><div><strong>"+ret[2]+"</strong></div>";
			$('#modalErrore').modal(options)
		}
	
		
		
		$("#mainContent").prepend(div);
		$("html, body").animate({ scrollTop: 0 }, "slow");
	}, 'json');
}


$(document).ready(function(){
	 $(function() {
    $( "ol" ).sortable({
       opacity: 0.5,
       connectWith: "ol",
       handle:".handler",
       placeholder: "sortable-placeholder",
       cancel: '.last-el-class',
      update: function( event, ui ) {
     	 var numero_box = parseInt($("ol#col1 li").length) + parseInt($("ol#col2 li").length);
      		if(numero_box < 2){
      			$("#salva").addClass("disabled");
      		}else{
      			$("#salva").removeClass("disabled");
      		}
      },
       stop: function( event, ui ) {
 			var col1_lenght = $("#col1 li").size();
 			var col2_lenght = $("#col2 li").size();
 			var totale_elementi = col1_lenght + col2_lenght;  
 			if( totale_elementi > 6){
// 				$('#myModal').modal('show');
 				$(this).sortable('cancel');
				 $('#allarmePersonalizza').modal()
 			}
       }
    }).disableSelection();
  });

})

</script>


				</div>
						
				<div class="col-xs-6 col-sm-3 sidebar-offcanvas hidden-print" id="sidebar">
					<div class="sidebar-container">
				 		<div class="list-group">
							

















	<!-- top navbar -->

	<div class="container visible-xs-block">
		<div class="row sidebar-menu" >
			<!-- sidebar -->
			
				
				<ul data-offset-top="120"   class="nav nav-stacked">
				
				
					<li onclick="apriMenuResponsive(this)" id="menu_0" class="conti_depositi">
						<a href="#"  >
							<strong>CONTI E DEPOSITI</strong> 
						</a>
						<ul class="menu-child">
							
								<li class="ico_saldo_e_movimenti" >
									
										
											
											
											
												<a href="/WEBHT/cc/movimentiConto.do" title="Saldo e movimenti">Saldo e movimenti</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_finanziamenti" >
									
										
											
											
											
												<a href="/WEBHT/prestitiMutui/dettaglioPrestitiMutui.do" title="Finanziamenti">Finanziamenti</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_profit_loss" >
									
										
											
											
											
												<a href="/WEBHT/cc/dettaglioInteressiConto.do" title="Interessi e spese">Interessi e spese</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_pannello_rapporti hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/cc/pannelloRapporti.do" title="Pannello Rapporti">Pannello Rapporti</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_questionario_mifid" >
									
										
											
											
											
												<a href="/WEBHT/av/adeguataVerificaLista.do" title="Adeguata Verifica">Adeguata Verifica</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_bilancio_mensile" >
									
										
											
											
											
												<a href="/WEBHT/cc/bilancioMensile.do" title="Bilancio mensile">Bilancio mensile</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_gestione_categorie" >
									
										
											
											
											
												<a href="/WEBHT/cc/gestioneCategorie.do" title="Gestione categorie">Gestione categorie</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_creazione_categorie" >
									
										
											
											
											
												<a href="/WEBHT/cc/creazioneCategorie.do" title="Creazione categorie">Creazione categorie</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="" >
									
										
										<span>Conto deposito</span>
												
								</li>
								
								
						  				
						  					<li>
							  					<a href="/WEBHT/cd/contoDepositoVincolaRiepilogo.do" class="terzo-livello" title="Vincola">Vincola</a>
						  					</li>
						  				
						  					<li>
							  					<a href="/WEBHT/cd/contoDepositoITuoiVincoli.do" class="terzo-livello" title="I tuoi vincoli">I tuoi vincoli</a>
						  					</li>
						  				
						  					<li>
							  					<a href="/WEBHT/cd/listaContiAppoggio.do" class="terzo-livello" title="Conti di appoggio">Conti di appoggio</a>
						  					</li>
						  				
					  			
							
						</ul>
						<hr>
					</li>
				
					<li onclick="apriMenuResponsive(this)" id="menu_1" class="pagamenti">
						<a href="#"  >
							<strong>PAGAMENTI</strong> 
						</a>
						<ul class="menu-child">
							
								<li class="ico_ultime_disposizioni" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/ultimeDisposizioni.do" title="Ultime disposizioni">Ultime disposizioni</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_gestione_beneficiari" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/listaBeneficiari.do" title="Gestione beneficiari">Gestione beneficiari</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_disponi_bonifico" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/bonificoSepa.do" title="Bonifico ordinario">Bonifico ordinario</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_disponi_bonifico" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/bonificoDetrazione.do" title="Bonifico per detrazioni">Bonifico per detrazioni</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/trasferimentoConti.do" title="Trasferimento tra conti">Trasferimento tra conti</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_ricarica_cellulare" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/ricaricaDati.do" title="Ricarica telefonica">Ricarica telefonica</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_pagamento_f24 hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/f24.do" title="Pagamento F24">Pagamento F24</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_bollettini_postali" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/bollettiniPostali.do" title="Bollettino Postale">Bollettino Postale</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_bollettino_mav" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/mav.do" title="Bollettino MAV">Bollettino MAV</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_bollettino_rav" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/rav.do" title="Bollettino RAV">Bollettino RAV</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_coord_iban" >
									
										
											
											
											
												<a href="/WEBHT/serviziPerTe/coordinateIban.do" title="Coordinate IBAN">Coordinate IBAN</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_utenze" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/bolletta.do" title="Utenze">Utenze</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/buoniInps.do" title="Richiesta Voucher Inps">Richiesta Voucher Inps</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_domiciliazioni" >
									
										
											
											
											
												<a href="/WEBHT/cc/delegheRid.do" title="Domiciliazioni">Domiciliazioni</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_assegni" >
									
										
											
											
											
												<a href="/WEBHT/cc/statoAssegni.do" title="Assegni">Assegni</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_accredito_stipendio hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/cc/accreditoStipendio.do" title="Accredito stipendio">Accredito stipendio</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_ricarica_mediaset" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/ricaricaMediaset.do" title="Mediaset Premium">Mediaset Premium</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/bolloAuto.do" title="Bollo Auto">Bollo Auto</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_bollettino_freccia" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/freccia.do" title="Bollettino Freccia">Bollettino Freccia</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_disponi_bonifico_ripetitivo" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/bonificoContinuativoCompilazione.do" title="Bonifico ripetitivo">Bonifico ripetitivo</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_lista_bonifici_ripetitivi" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/bonificoContinuativoLista.do" title="Lista bonifici ripetitivi">Lista bonifici ripetitivi</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_cbill" >
									
										
											
											
											
												<a href="/WEBHT/pagamenti/cbill.do" title="CBILL - pagoPA">CBILL - pagoPA</a>
											
											
										
										
												
								</li>
								
								
							
						</ul>
						<hr>
					</li>
				
					<li onclick="apriMenuResponsive(this)" id="menu_2" class="carte">
						<a href="#"  >
							<strong>CARTE</strong> 
						</a>
						<ul class="menu-child">
							
								<li class="ico_riepilogo" >
									
										
											
											
											
												<a href="/WEBHT/cartaConto/riepilogoCartaConto.do" title="Le mie carte">Le mie carte</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_carte_movimenti" >
									
										
											
											
											
												<a href="/WEBHT/cartaConto/movimenti.do" title="Movimenti">Movimenti</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_carte_ricarica" >
									
										
											
											
											
												<a href="/WEBHT/cartaConto/ricaricaCarta.do" title="Ricarica Carta">Ricarica Carta</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_carte_scarica" >
									
										
											
											
											
												<a href="/WEBHT/cartaConto/scaricaCarta.do" title="Scarica Carta">Scarica Carta</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_carte_autoricarica" >
									
										
											
											
											
												<a href="/WEBHT/cartaConto/autoricarica.do" title="Ricarica automatica">Ricarica automatica</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_cambio_pin" >
									
										
											
											
											
												<a href="/WEBHT/cartaConto/cambioPinCarta.do" title="Cambio PIN carta">Cambio PIN carta</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="" >
									
										
										<span>Ricarica PostePay</span>
												
								</li>
								
								
							
								<li class="ico_pannello_controllo" >
									
										
											
											
											
												<a href="/WEBHT/cartaConto/pannelloControllo.do" title="Pannello controllo">Pannello controllo</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_portale_carta_si hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/cartaConto/cartaSi.do" title="Portale CartaSi">Portale CartaSi</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_portale_agos_ducato hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/cartaConto/agosducato.do" title="Portale Agos Ducato">Portale Agos Ducato</a>
											
											
										
										
												
								</li>
								
								
							
						</ul>
						<hr>
					</li>
				
					<li onclick="apriMenuResponsive(this)" id="menu_3" class="alert hidden-xs">
						<a href="#"  >
							<strong>ALERT</strong> 
						</a>
						<ul class="menu-child">
							
								<li class="" >
									
										
											
											
											
												<a href="/WEBHT/sm/riepilogo.do" title="Pannello Alert">Pannello Alert</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_disponi_bonifico" >
									
										
											
											
											
												<a href="/WEBHT/sm/bonifici.do" title="Info bonifico">Info bonifico</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_finanziamenti" >
									
										
											
											
											
												<a href="/WEBHT/sm/ricarica.do" title="Info ricarica">Info ricarica</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_info_carte" >
									
										
											
											
											
												<a href="/WEBHT/sm/carte.do" title="Info carte">Info carte</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_info_conto" >
									
										
											
											
											
												<a href="/WEBHT/sm/conto.do" title="Info conto">Info conto</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_situazione_dossier" >
									
										
											
											
											
												<a href="/WEBHT/sm/dossier.do" title="Info dossier">Info dossier</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_situazione_titoli" >
									
										
											
											
											
												<a href="/WEBHT/sm/titoli.do" title="Info titoli">Info titoli</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_i_tuoi_fondi" >
									
										
											
											
											
												<a href="/WEBHT/sm/fondi.do" title="Info fondi">Info fondi</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_cambi" >
									
										
											
											
											
												<a href="/WEBHT/sm/indiciCambi.do" title="Cambi e indici">Cambi e indici</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_recedi" >
									
										
											
											
											
												<a href="/WEBHT/sm/recedi.do" title="Recedi">Recedi</a>
											
											
										
										
												
								</li>
								
								
							
						</ul>
						<hr>
					</li>
				
					<li onclick="apriMenuResponsive(this)" id="menu_4" class="posta_personale">
						<a href="#"  >
							<strong>POSTA PERSONALE</strong> 
						</a>
						<ul class="menu-child">
							
								<li class="posta_personale" >
									
										
											
											
											
												<a href="/WEBHT/postaPersonale/nuoviDocumenti.do" title="Posta in arrivo">Posta in arrivo</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_info_posta hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/postaPersonale/vediAllarmiRapporti.do" title="Info posta">Info posta</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_archivio" >
									
										
											
											
											
												<a href="/WEBHT/postaPersonale/archivio.do" title="Archivio">Archivio</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_posizione_complessiva hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/postaPersonale/richieste.do" title="Contratti e Proposte">Contratti e Proposte</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="" >
									
										
											
											
											
												<a href="/WEBHT/postaPersonale/contrattiProposte.do" title="Contratti e Proposte (New)">Contratti e Proposte (New)</a>
											
											
										
										
												
								</li>
								
								
							
						</ul>
						<hr>
					</li>
				
					<li onclick="apriMenuResponsive(this)" id="menu_5" class="investimenti">
						<a href="#"  >
							<strong>INVESTIMENTI</strong> 
						</a>
						<ul class="menu-child">
							
								<li class="ico_news hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/investimenti/news.do" title="Situazione">Situazione</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_situazione_titoli hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/investimenti/titoliPreferiti.do" title="Titoli preferiti">Titoli preferiti</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_il_tuo_portafoglio" >
									
										
											
											
											
												<a href="/WEBHT/investimenti/titoliDossier.do" title="Il tuo portafoglio">Il tuo portafoglio</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_gestione_ordini hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/investimenti/ordiniMovimenti.do" title="Ordini e movimenti">Ordini e movimenti</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_portafoglio_simulato hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/investimenti/portafoglioSimulato.do" title="Portafoglio simulato">Portafoglio simulato</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_questionario_mifid hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/investimenti/mifid.do" title="Questionario Mifid">Questionario Mifid</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_linea_di_trading hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/investimenti/aperturaTol.do" title="Linea di Trading">Linea di Trading</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_analisi_tecnica hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/investimenti/analisiTecnica.do" title="Analisi">Analisi</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_indici hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/investimenti/indici.do" title="Indici">Indici</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_posizione_fiscale hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/investimenti/posizioneFiscale.do" title="Posizione fiscale">Posizione fiscale</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_gestione_patrimoniale" >
									
										
											
											
											
												<a href="/WEBHT/cc/posizionePatrimoniale.do" title="Posizione patrimoniale">Posizione patrimoniale</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_cambi hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/investimenti/cambiForm.do" title="Cambi">Cambi</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="hidden-xs" >
									
										
										<span>Fondi</span>
												
								</li>
								
								
						  				
						  					<li>
							  					<a href="/WEBHT/investimenti/fondiRicerca.do" class="terzo-livello" title="Ricerca e analisi">Ricerca e analisi</a>
						  					</li>
						  				
						  					<li>
							  					<a href="/WEBHT/investimenti/fondiOrdiniElenco.do" class="terzo-livello" title="Ordini">Ordini</a>
						  					</li>
						  				
						  					<li>
							  					<a href="/WEBHT/investimenti/fondiPreferitiElenco.do" class="terzo-livello" title="Fondi preferiti">Fondi preferiti</a>
						  					</li>
						  				
					  			
							
						</ul>
						<hr>
					</li>
				
					<li onclick="apriMenuResponsive(this)" id="menu_6" class="servizi_per_te">
						<a href="#"  >
							<strong>SERVIZI PER TE</strong> 
						</a>
						<ul class="menu-child">
							
								<li class="ico_il_tuo_profilo" >
									
										
											
											
											
												<a href="/WEBHT/serviziPerTe/ilTuoProfilo.do" title="Il tuo profilo">Il tuo profilo</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_rapporti_predefiniti" >
									
										
											
											
											
												<a href="/WEBHT/serviziPerTe/rapportiPredefiniti.do" title="Rapporti in primo piano">Rapporti in primo piano</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_gestione_contatti" >
									
										
											
											
											
												<a href="/WEBHT/serviziPerTe/contatti.do" title="Gestione contatti">Gestione contatti</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_posizione_complessiva" >
									
										
											
											
											
												<a href="/WEBHT/serviziPerTe/ilMioCalendario.do" title="Il mio calendario">Il mio calendario</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/serviziPerTe/richiestaAppuntamentoCompilazione.do" title="Richiedi appuntamento">Richiedi appuntamento</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_apri_dossier_titoli hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/investimenti/dossierApri.do" title="Apri Dossier Titoli">Apri Dossier Titoli</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/cartaConto/youCardApri.do" title="Richiedi la YouCard">Richiedi la YouCard</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="ico_news" >
									
										
											
											
											
												<a href="/WEBHT/news/elenco.do" title="News">News</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="hidden-xs" >
									
										
											
											
											
												<a href="/WEBHT/serviziPerTe/scaricoCertificato.do" title="Scarico certificato">Scarico certificato</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="" >
									
										
											
											
											
												<a href="/WEBHT/serviziPerTe/sicurezzaInfo.do" title="Sicurezza YouWeb">Sicurezza YouWeb</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="" >
									
										
											
											
											
												<a href="/WEBHT/info/contattaci.do" title="Contattaci">Contattaci</a>
											
											
										
										
												
								</li>
								
								
							
								<li class="hidden-xs" >
									
										
											
											
												<a href="#" title="YouShop" onclick="javascript:OpenWindow('/WEBHT/youshop/login.do','_blank','');">YouShop</a>
											
											
											
										
										
												
								</li>
								
								
							
								<li class="hidden-xs" >
									
										
											
											
												<a href="#" title="YouWin" onclick="javascript:OpenWindow(getPathContext() + '/serviziPerTe/youWin.do','_blank','');">YouWin</a>
											
											
											
										
										
												
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
				<input type="hidden" name="logoutKey" value="5qsjDfnLQK7MXowt" />
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
		<div class="col-xs-6 text-center"><a href="/WEBHT/serviziPerTe/disableResponsive.do?curl=/homepagePreferenze.do" title="Sito YouWeb per PC"><strong>Sito YouWeb per PC</strong></a></div>
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
					Per qualsiasi altra esigenza è a tua disposizione<br>
				il <strong>Direttore GIORGIO TERNO</strong> presso la tua filiale di riferimento. 
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

		<div id="help_logo" class="right">
<h3 class="popover-title">Homepage</h3>
<div class="popover-content">Cliccando sul logo YouWeb, torni sempre alla tua pagina iniziale da qualsiasi sezione tu stia navigando.</div>
</div>

		<div id="help_removePref" class="bottom">
<h3 class="popover-title">Elimina contenuti dalla home page</h3>
<div class="popover-content">Qui trovi i contenuti presenti nella tua pagina iniziale. Per eliminarli puoi cliccare sui singoli pannelli e trascinarli verso la colonna di sinistra. A fine operazione,  ricordati di cliccare su "Salva" a fondo pagina.</div>
</div>

		<div id="help_benchmark" class="bottom" data-auto="false">
<h3 class="popover-title">Benchmark</h3>
<div class="popover-content">Indice o insieme di indici che sintetizza l'andamento dei mercati in cui investe il Fondo/Comparto. Fornisce un'indicazione del profilo rischio-rendimento atteso dell'investimento. Per i fondi di diritto italiano, il benchmark indicato nella scheda &egrave; quello dichiarato nel prospetto informativo del Fondo/Comparto ed &egrave; convertito in euro. Per i fondi esteri, per cui non esiste tale obbligo, &egrave; stato scelto un benchmark in coerenza con la categoria di appartenenza del Fondo/Comparto, cos&igrave; da permettere ugualmente un'analisi ed un confronto con un parametro di riferimento.</div>
</div>

		<div id="help_trackingError" class="bottom" data-auto="false">
<h3 class="popover-title">Tracking error volatility</h3>
<div class="popover-content">La tracking error volatility &egrave; la volatilit&agrave; della differenza tra il rendimento del Fondo/Comparto e il rendimento del benchmark. Pi&ugrave; la volatilit&agrave; del tracking error &egrave; elevata pi&ugrave; l'andamento del Fondo/Comparto si discosta da quello del benchmark. La sua assenza &egrave; da attribuire ad una storicit&agrave; non sufficiente del Fondo/Comparto.</div>
</div>

		<div id="help_volatilita" class="bottom" data-auto="false">
<h3 class="popover-title">Volatilit&agrave;</h3>
<div class="popover-content">La Volatilit&agrave; &egrave; la variabilit&agrave; del rendimento del fondo nel tempo e rappresenta quindi la tendenza dei valori della quota a discostarsi dal valore medio nel periodo considerato. Maggiore &egrave; la volatilit&agrave; di un fondo, pi&ugrave; il fondo &egrave; rischioso.</div>
</div>

		<div id="help_rating" class="bottom" data-auto="false">
<h3 class="popover-title">Rating</h3>
<div class="popover-content">Il rating calcolato da Deus Technology &egrave; un indicatore quantitativo di scoring, su scala da 1 a 5, che si basa sulla combinazione di vari elementi (lo Sharpe, la Volatilit&agrave;, il Max Drow Down - perdita massima maturata rispetto al valore di picco registrato - e il Mean Return - il ritorno atteso dall&rsquo;investimento-) atti a comparare rendimento e rischio del fondo su vari orizzonti temporali. Lo strumento potrebbe essere <span style="text-decoration: underline;">privo di rating</span> in caso manchino i dati sufficienti per il calcolo, esempio: fondi che hanno meno di 3 anni di serie storica.</div>
</div>

		<div id="help_informationRatio" class="bottom" data-auto="false">
<h3 class="popover-title">L'Information Ratio</h3>
<div class="popover-content">L'Information Ratio consente di valutare la capacit&agrave; del gestore di sovraperformare il benchmark, in relazione al rischio assunto. E&acute; calcolato rapportando il differenziale di rendimento tra fondo e indice di riferimento, alla Tracking Error Volatility che indica la volatilit&agrave; dei rendimenti differenziali di un fondo rispetto ad un indice di riferimento. Un information ratio positivo indica una gestione attiva "efficiente", il Fondo/Comparto ha cio&egrave; battuto il benchmark</div>
</div>

		<div id="help_refresh" class="left">
<h3 class="popover-title">Aggiorna dati</h3>
<div class="popover-content">Cliccando su questa icona, aggiorni i dati presenti in questa tabella.</div>
</div>

		<div id="help_importoSottoscrizione" class="bottom" data-auto="false">
<h3 class="popover-title">R-Quadro</h3>
<div class="popover-content">Indipendentemente dalla divisa di denominazione del fondo/sicav l&rsquo;importo da indicare per la sottoscrizione &egrave; sempre in euro.</div>
</div>

		<div id="help_rquadro" class="bottom" data-auto="false">
<h3 class="popover-title">R-Quadro</h3>
<div class="popover-content">E' un indicatore che riflette la percentuale di oscillazione di un fondo riconducibile a oscillazioni nel benchmark di quel fondo. Un R-quadro pari a 1 indica che tutte le oscillazioni del fondo possono essere ricondotte alle oscillazioni dell'indice.</div>
</div>

		<div id="help_commissioniGestione" class="bottom" data-auto="false">
<h3 class="popover-title">Commissione di gestione</h3>
<div class="popover-content">E' il costo fisso del servizio di gestione. E' indicato come percentuale annua di quanto investito nel fondo ed &egrave; pagato dal risparmiatore indipendentemente dal risultato ottenuto.</div>
</div>

		<div id="help_addPref" class="bottom">
<h3 class="popover-title">Aggiungi contenuti <br />alla home page</h3>
<div class="popover-content">Puoi selezionare una funzione tra quelle disponibili qui sotto e trascinarla verso destra. Il pannello scelto sar&agrave; visualizzato gi&agrave; in accesso alla tua pagina iniziale. A fine operazione, ricordati di cliccare su "Salva" a fondo pagina.</div>
</div>

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