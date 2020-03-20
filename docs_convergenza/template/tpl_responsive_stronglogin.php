<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="it" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="description" content=""/>
<meta http-equiv="x-ua-compatible" content="IE=edge" >

<!-- MOBILE -->
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<!-- Allows fullscreen mode from the Homescreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Sets the color of the text/battery, wireless icons etc -->
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>
<meta name="format-detection" content="telephone=no">
<meta http-equiv="x-ua-compatible" content="IE=edge" >
<!-- / MOBILE -->

<!-- FAVICON -->
<link rel="icon" href="/WB/fe/img/favicon.ico">
<link rel="manifest" href="/manifest.json">
<meta name="apple-mobile-web-app-title" content="Webank Resp">
<meta name="application-name" content="Webank Resp">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">  
<!-- / FAVICON -->

<!-- CSS -->
<link rel="stylesheet" media="all" href="/common/fe/assets/bootstrap/bootstrap.css">
<link rel="stylesheet" media="all" href="/common/fe/assets/jquery/jquery-ui_ng.min.css">
<link rel="stylesheet" media="all" href="/common/fe/css/main.css?v=161220">

<!-- Css strutturale -->
<link href="/WB/fe/css/webank_struttura.css?v=161220" rel="stylesheet" type="text/css" media="all">
<link href="/WB/fe/css/webank_base.css?v=161220" rel="stylesheet" type="text/css" media="all">
<link href="/WB/fe/css/webank_generic.css?v=161220" rel="stylesheet" type="text/css" media="all">

<link href="/WB/fe/css/webank_skin.css?v=161220" rel="stylesheet" type="text/css" media="screen" />
<link href="/common/fe/css/print.css?v=161220" rel="stylesheet" type="text/css" media="print" />
<!-- / CSS -->

	



<script type="text/javascript">
	// Variabili per ambiente, riporta le chiavi del navigatore selezionate 
	var navIndex = ['0'];

	var sectionTitle = "Webank";

	// Variabili per emulazione
	var cgi_script = "/webankpri";
	var imgPath = '/img/ret/';
	var pDis = true;
	var pCP = false;
	var abilOroCap = true;
	var isWebank = true;
	var hasCarte = false;
	var isComunita200Mov = true;
	var rbfLinkObj = {
		'bonifico': 'BON',
		'giroconto': 'GIR',
		'carta': 'PRJ'
	};
</script>

<!-- JS -->
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.dataTables.dateIT.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.dataTables.altImg.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.dataTables.formattedNum.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.form.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery.blockUI.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jquery/jquery-ui.selectToUISlider.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/bootstrap/bootstrap-table.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/ie10-viewport.js"></script>
<script type="text/javascript" language="javascript" src="/common/fe/assets/jsapi.js "></script>
<script type="text/javascript" language="javascript" src="/common/fe/js/funzioni_convergenza.js?v=161220"></script>
<script type="text/javascript" language="javascript" src="/HT/fe/js/script/funzioniYW.js?v=161220"></script>

<script type="text/javascript" language="javascript" src="/WB/fe/js/general_utilities.js?v=161220"></script>

<!-- JS LIBRERIE (non includere in sviluppo) -->
<!-- <script type="text/javascript" src="/WB/fe/js/priv_librerie.js"></script>  -->
<!-- FINE JS LIBRERIE --> 




<!-- <script type="text/javascript">
	if (navIndex.length>2)
		{ sectionTitle = menuData[navIndex[0]].voices[navIndex[1]].title;}
	else if (navIndex.length==1)
		{ sectionTitle = menuData[navIndex[0]].title;}
</script>
 -->
<!-- /JS -->

<script type="text/javascript">
function getPathImages() { return "/WB/IMAGES/";}
function getPathImagesFe() { return "/WB/fe/img/";}
function getPathContext() {	return "/WEBWB";}
function getKBanca() {	return "";}
function getLineaTol() {	return "";}


</script>

	
	<title></title>

<!-- <title>YouWeb full</title> -->
</head>

<body>
	


 
<!-- HEADING -->
<header class="headerFixed">
	<div class="wrapper">
		<div class="container-fluid">
			<div class="printlogoNew">
				<img src="/WB/fe/img/logo_print.gif">
			</div>
			<!-- HEADER DESKTOP -->			
			<div class="row hidden-xs hidden-sm no-gutter-left">
				<div class="col-md-3 col-md-offset-0 ">
					<div id="logoWrap">
						<a href="/WEBWB/homepage.do" title="Torna all'homepage"><img src="/WB/fe/img/logo_bank.png"></a>
					</div>
				</div>
				<div class="col-md-9">
					<div class="userMenu">
						<ul class="userMenuConsole">
							<li><a class="userMenuLink telLink" href="tel:800060070"><i class="icon icon-numeroverde_desktop"></i><span class="userMenuLabel">800 060 070</span></a></li>
							<!-- <li><a class="userMenuLink" href="#"><i class="icon icon-consultare_desktop"></i><span class="userMenuLabel">Consultare e disporre</span></a></li> -->
							<li><a class="userMenuLink" href="#" onclick="$('form#logout').submit(); return false;"><i class="icon icon-esci_desktop"></i><span class="userMenuLabel">Esci</span></a></li>
						</ul>
						<ul class="userMenuInfo">
							<li class="nameConto"><span></span></li>
<!-- 							<li><a href="#"><i class="icon icon-imieidati_desktop"></i><span>I miei dati</span></a></li>
							<li><a href="#"><i class="icon icon-alert_desktop"></i><span>Alert</span></a></li>
							<li><a href="#"><i class="icon icon-sicurezza_desktop"></i><span>Sicurezza</span></a></li>
 -->						</ul>
					</div>
					<ul id="userMenuMobile">
						<li><span class="nameConto"></span></li>
<!-- 						<li><a href="#"><span>I miei dati</span><i class="icon icon-imieidati_mobile"></i></a></li>
						<li><a href="#"><span>Alert</span><i class="icon icon-alert_mobile"></i></a></li>
						<li><a href="#"><span>Sicurezza</span><i class="icon icon-sicurezza_mobile"></i></a></li>
 -->						<!-- <li><a href="#"><span>Consultare e disporre</span><i class="icon icon-consultare_mobile"></i></a></li> -->
						<li><a href="#" title="Esci" onclick="$('form#logout').submit(); return false;"><span>Esci</span><i class="icon icon-esci_mobile"></i></a></li>
					</ul>
				</div>
			</div>
			<!-- FINE HEADER DESKTOP -->
			
			<!-- HEADER MOBILE -->
			<div class="headerMobile">
				<div class="row hidden-md hidden-lg no-gutter">
					<div class="col-xs-2">
						<a class="headbtn menuopen btn-icon"><i class="icon icon-menu"></i></a>
					</div>
					<div class="col-xs-8">
						<span id="logomyhome" onclick="document.location.reload(true);"><img src="/WB/fe/img/logo_mobile.png"></span>
						<span id="sectionName" onclick="document.location.reload(true);"><script type="text/javascript">getCodeOf(sectionTitle);</script></span>
					</div>
					<div class="col-xs-2">
						<a class="headbtn usermenuopen btn-icon"><i class="icon icon-user"></i></a>
					</div>
				</div>
			</div>
			<!-- FINE HEADER MOBILE -->
		</div>
	</div>
	<form action="/WEBWB/logout.do" name="frmLogout" id="logout" method="post" target="_top" style="display:none;">
	<div style="display: none">
		<input type="hidden" name="logoutExitPage" value="../WB/fe/logout.html" />
		<input type="hidden" name="logoutKey" value="pPbwAaNjwP2QzW7z" />
	</div>
	</form>
</header>		
<br/>
<!-- FINE HEADING -->
	
	<div id="main">
		<div class="wrapper">
			<div class="container-fluid">
				







<form id="otpLoginEsito" method="post" action="/WEBWB/otpLoginEsito.do">
<input type="hidden" name="hashOtp" value="875f40c1e4ac441df11733350581dc58b954996c" id="hashOtp" />
<input type="hidden" name="abi" value="05034" id="abi" />

	<script type="text/javascript" language="JavaScript">
		if (navigator.cookieEnabled == false) {
			document.write('<div class="box-esito messagePanel error" style="display:block"><h3 class="titleSection">Attenzione</h3><p><strong>Per accedere al sito abilitare i cookie.</strong></p></div>');
		} 
	</script>

	<noscript>
		







<div class="no-javascript show" role="alert">
	<div>
		Per accedere è necessario abilitare i controlli JavaScript.
	</div>
</div>
	</noscript>

	
	
		
		<section>
			




<input type="hidden" name="hashOtp" value="875f40c1e4ac441df11733350581dc58b954996c" id="hashOtp">



	
	

<div id="otpSoftwareOnlineNoPin" class="formGenerico borderFormRounded" style="display: none">
	<!-- Blocco con introduzione -->
	<div class="row">
		<div class="col-xs-12">
			<p>Per autorizzare l'accesso, conferma utilizzando la tua <strong>app di sicurezza</strong></p>
		</div>
	</div>
	<hr>
	<!-- Fine blocco introduzione -->
	<!-- Blocco "timeout" -->
	<!-- Fine blocco "timeout" -->

    <!-- Form di richiesta -->
	<div class="formGenerico">
		<!--RIGA DIVISA IN QUATTRO CAMPI -->
		<div class="row otpdesc app">
			<div class="col-xs-12 col-sm-6">
				<span class="introtext">Abbiamo inviato una notifica push <strong>sul tuo smartphone</strong> con l'app di sicurezza installata: fai <strong>tap sulla notifica</strong>.</span>
				<div class="center hidden-xs"><img src="/WB/fe/img/token_app_finger.png"></div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<span class="introtext">Inserisci il tuo <strong>PIN</strong> o usa <strong data-toggle="tooltip" class="txthelp" title="Se il tuo smartphone supporta la funzione, puoi impostare la <strong>conferma sull'app</strong> tramite 
																																		la tua <strong>impronta digitale</strong>, al posto dell'inserimento del Pin.
																																		Per <strong>scegliere</strong> se utilizzare l'impronta digitale o il Pin vai nella sezione &quot;imposta strumento di sicurezza&quot; 
																																		della tua app">l'impronta digitale</strong> 
																																		per confermare.
				</span>
				<div class="center hidden-xs">
					<img src="/WB/fe/img/token_app_insert.png">
				</div>
			</div>
		</div>
			<!-- Form di richiesta -->
			<div class="row">
				<div class="col-xs-12">
					<a href="javascript:;" class="openinfo" id="infoOtpOpener">
						<i class="icon icon-info_fill icon-2x"></i>
						<span data-toggle="tooltip" class="txthelp" title="Per autorizzare l'operazione devi utilizzare lo smartphone su cui hai installato <strong>l'app di sicurezza</strong>.<br><br>Accertati che la connessione dati del tuo smartphone sia attiva: in questo caso <strong>ricevi automaticamente una notifica push</strong>, anche senza bisogno di aprire l'app sullo smartphone. Tappando sulla notifica, l'operazione viene autorizzata.<br><br>Se non ricevi la notifica push perchè il tuo <strong>smartphone è offline</strong>
																			<ul>
																				<li>clicca sul <strong>bottone &quot;usa Genera codice token&quot;</strong> di questa pagina</li>
																				<li>apri <strong>l'app  Webank</strong> sul tuo smartphone</li>
																				<li>vai alla funzione <strong>&quot;Genera codice token&quot; dell'app</strong></li>
																				<li>inserisci <strong>nella pagina successiva</strong> il codice generato dall'app.</li>
																			</ul>
																			Se hai bisogno di assistenza puoi chiamare il <strong>numero verde 800 060 070</strong>">
							Problemi con l'operazione?
						</span>
					</a>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 center">
					<h3>Non hai ricevuto la notifica push?</h3>
					<div class="form-group btnWrapper">
						<div class="btn-align-center">
							<a href="javascript:;" id="btnGeneraTok" class="btn btn-default" onclick="javascript:cambioStatoOperazioneDaAutorizzare(this);">
								<span>usa "Genera codice token"</span>
							</a>
							<br class="clear">
						</div>
					</div>
				</div>
			</div>
	 </div>
	<!-- Form di richiesta -->
</div>


<div id="otpSoftwareOffline" style="display: none">
	<div class="formGenerico borderFormRounded">
		<!-- Blocco con introduzione -->
		<div class="row">
			<div class="col-xs-12">
				<p>Per autorizzare l'accesso, conferma utilizzando la tua <strong>app di sicurezza</strong></p>
			</div>
		</div>
		<hr>
		<!-- Fine blocco introduzione -->
		
		<div class="formGenerico">
			<!--RIGA DIVISA IN QUATTRO CAMPI -->
				<div class="row otpdesc app">
					<div class="col-xs-12 col-sm-4">
						<span class="introtext">Apri l'app e, vai su &lt;<strong>icona della rotellina</strong>&gt; e quindi su "Genera codice token".</span>
						<div class="center hidden-xs"><img src="/WB/fe/img/token_app_genera.png"></div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<span class="introtext">
							Inserisci il tuo <strong>PIN</strong> sull'app oppure usa 
							<strong data-toggle="tooltip" class="txthelp" title="Se il tuo smartphone supporta la funzione, puoi impostare la <strong>conferma sull'app</strong> tramite 
																						  la tua <strong>impronta digitale</strong>, al posto dell'inserimento del Pin.
																						  Per <strong>scegliere</strong> se utilizzare l'impronta digitale o il Pin vai nella sezione &quot;imposta strumento di sicurezza&quot; della tua app">
							l'impronta digitale
							</strong> 
							per confermare.
						</span>
						<div class="center hidden-xs"><img src="/WB/fe/img/token_app_insert.png"></div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<span class="introtext">Inserisci qui sotto il codice token che viene in questo modo generato dall'app.</span>
						<div class="center hidden-xs"><img src="/WB/fe/img/token_app_codice.png"></div>
					</div>
				</div>
				<!-- Form di richiesta -->
				<div class="row">
					<div class="col-xs-12 col-sm-8">
						<a href="javascript:;" class="openinfo" id="infoOtpOpener">
							<i class="icon icon-info_fill icon-2x"></i>
							<span data-toggle="tooltip" class="txthelp" title="Per autorizzare l'operazione devi utilizzare lo smartphone su cui hai installato <strong>l'app di sicurezza</strong>.
																	 			<br><br>
																				Accertati che la connessione dati del tuo smartphone sia attiva: in questo caso <strong>ricevi automaticamente una notifica push</strong>, 
																				anche senza bisogno di aprire l'app sullo smartphone. Tappando sulla notifica, l'operazione viene autorizzata.
																				<br><br>
																				Se non ricevi la notifica push perchè il tuo <strong>smartphone è offline</strong>
																				<ul>
																					<li>clicca sul <strong>bottone &quot;usa Genera codice token&quot;</strong> di questa pagina</li>
																					<li>apri <strong>l'app  Webank</strong> sul tuo smartphone</li>
																					<li>vai alla funzione <strong>&quot;Genera codice token&quot; dell'app</strong></li>
																					<li>inserisci <strong>nella pagina successiva</strong> il codice generato dall'app.</li>
																				</ul>
																				Se hai bisogno di assistenza puoi chiamare il <strong>numero verde 800 060 070</strong>">
							Problemi con l'operazione?</span>
						</a>
					</div>
					<div class="col-sm-4 col-xs-12 otpGroup">
						<label class="control-label" for="codiceOTP">Codice OTP</label>
						<div class="editable-input">
							<input type="number" name="codiceOTP" id="codiceOTP" class="form-control clear-x" min="0" max="99999999999" autocomplete="off" autofocus>
						</div>
						<br />
						







	

</div>
				</div>					
			</div>		
		</div>
		<section>
			<div class="form-group btnWrapper clearfix">
				<div class="btn-align-right">
					<div>
						
						<button id="confermaOtpSoftwareOffline" type="button" class="btn btn-primary" onclick="javascript:verificaOperazioneDaAutorizzare(this);" tabindex="2" alt="Accedi">Accedi</button>
					</div>
				</div>
			</div>
		</section>
</div>	

		</section>
	
	
	
</form>



	 
		
<script type="text/javascript">
function getPathImages() { return "/WB/IMAGES/";}
function getPathImagesFe() { return "/WB/fe/img/";}
function getPathContext() {	return "/WEBWB";}
function getKBanca() {	return "";}
function getLineaTol() {	return "";}


</script>

		<script type="text/javascript">
			var idTask;
			var countPollOperazioneDaAbilitare = 0;

			var urlStatoOperazioneDaAutorizzare = getPathContext() + "/statoOperazioneDaAutorizzare.do";
			function getStatoOperazioneDaAutorizzare(button) {
				$.getJSON(urlStatoOperazioneDaAutorizzare, {
					hashOtp : $('#hashOtp').val()
				}).done(
					function(data) {
						/*
						***	Manca da gestire il caso "Strong token software notifica + codice sblocco app online" della classe #otpSoftwareOnlinePin				
						*/
						if (data.esito == "VP") {
							$("#otpLoginEsito").submit();
						} else if (data.esito == "RI") {
							$('#otpSoftwareOnlineNoPin').show();
							idTask = setTimeout(getStatoOperazioneDaAutorizzare, 5000,button);
						} else if (data.esito == "VM") {
							$("#otpSoftwareOnlineNoPin").hide();
							$("#otpSoftwareOffline").show();
							$("#codiceOTP").focus();
						}
					}).fail(function(jqxhr, textStatus, error) {
						$("#otpSoftwareOnlineNoPin").hide();
						$("#otpSoftwareOffline").show();
						$("#codiceOTP").focus();
				})
			};

			var urlCambioStatoOperazioneDaAutorizzare = getPathContext() + "/cambioStatoOperazioneDaAutorizzare.do";
			function cambioStatoOperazioneDaAutorizzare(button) {
				clearTimeout(idTask);
				$.getJSON(urlCambioStatoOperazioneDaAutorizzare, {hashOtp : $('#hashOtp').val()})
				.done(function(data) {
					getStatoOperazioneDaAutorizzare();
				})
			};

			var urlVerificaOperazioneDaAutorizzare = getPathContext() + "/verificaOperazioneDaAutorizzare.do";
			function verificaOperazioneDaAutorizzare(button) {
				$("#otpLoginEsito").submit();
			};

			$(document).ready(function() {
				getStatoOperazioneDaAutorizzare();
			});
		</script>
	 
	
 

			</div>
		</div>
	</div>
	<!-- FOOTER -->
	




 

<!-- FOOTER -->
<footer class="footerFixed">
	<div class="footermenu">
		<div class="wrapper">
			<ul>
				<li>
					<a href="/WEBWB/wb/content/trasparenza.do" title="Trasparenza"><img src="/WB/fe/img/img_trasparenza_menu_footer.png" alt="Qui informazioni sulla trasparenza"></a>
					
				</li>
				<li>
					<a href="/WEBWB/wb/content/eventi.do" title="Eventi e corsi">Eventi e corsi</a>
					
				</li>				
				<li>
					<a href="/WEBWB/serviziPerTe/trasparenza/fogliInformativi.do" title="Fogli informativi">Fogli informativi</a>
					
				</li>
				<li>
					<a href="/WEBWB/footer/flagPrivacy.do" title="Privacy">Privacy</a>
					
				</li>
				<li>
					<a href="/WEBWB/wb/content/reclami.do" title="Reclami">Reclami</a>
					
				</li>	
			</ul>
		</div>
	</div>	
	<div class="wrapper">
		<p>Banco BPM S.p.A. - Piazza F. Meda, 4 - 20121 Milano - tel. 0277001 - Rappresentante del Gruppo IVA Banco BPM Partita IVA 10537050964<br>
		Iscrizione al Registro IVASS (01 gennaio 2017 n° D0000563706) - Gruppo Bancario Banco BPM. Tutti i diritti riservati.</p>
	</div>
</footer>			
<!-- /FOOTER -->

	<!-- / FOOTER -->

	<form action="/WEBWB/logout.do" name="frmLogout" id="logout" method="post" target="_top">
		<div style="display: none">
			<input type="hidden" name="logoutExitPage" value="../WB/fe/logout.html" />
			<input type="hidden" name="logoutKey" value="pPbwAaNjwP2QzW7z" />
		</div>
	</form>
</body>
</html>