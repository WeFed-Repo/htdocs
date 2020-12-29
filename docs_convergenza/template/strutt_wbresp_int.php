<?php
	// Raccolta "framework"

	$tpl = $_GET["tpl"];
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->




<html class="no-js" lang=""> <!--<![endif]-->


<head>
	<title>Lorem ipsum - dolor sit amet</title>
	



<meta name="description"
	content="Conto Corrente + Conto di Deposito Webank: Zero spese, Interessi vantaggiosi e Trasferisci quando vuoi Liquidità tra deposito e Conto corrente online">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	


<link rel="stylesheet" href="/wbresp/css/bootstrap.min.css?a=435">

<link rel="stylesheet" href="/wbresp/css/bootstrap-theme.css?a=435">
<link rel="stylesheet" href="/wbresp/css/bootstrap-slider.min.css?a=435">
<link rel="stylesheet" href="/wbresp/css/font-awesome.min.css?a=435" />
<link rel="stylesheet" href="/wbresp/css/awesome-bootstrap-checkbox.min.css?a=435" />
<link rel="stylesheet" href="/wbresp/css/awesome-bootstrap-checkbox-styles.min.css?a=435" />
<link rel="stylesheet" href="/wbresp/css/bootstrap-select.min.css?a=435" />

<!--  <link rel="stylesheet" href="/wbresp/css/main.css?a=435"> -->
<link rel="stylesheet" href="/wbresp/css/base.css?a=435">


<link rel="stylesheet" href="/wbresp/css/contenuti.css?a=435">

<link rel="stylesheet" href="/wbresp/css/buttons.css?a=435">


<script src="/wbresp/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="/wbresp/js/vendor/jquery-1.11.2.min.js"></script> 
</head>
<body>
	






<!--DOVE SONO = app02svi7:webank700 -->


<script type="text/javascript">
	function checkUserAndPwdNew(userValue, pwdValue) {
		var check = true;
	
		check =  !((userValue.length == 0) || (userValue.toLowerCase() == "codice cliente") || (userValue.toLowerCase() == "codice utente") || (userValue.toLowerCase() == "user id") || (userValue.toLowerCase() == "idCl"));
		
		check = check && !((pwdValue.length == 0) || (pwdValue.toLowerCase() == "password"))
		
		return check;
	}
	$(function () {
		$("#buttonEntra").click(function() {
			if (checkUserAndPwdNew($("#idCl").prop("value"), $("#pwd1b").prop("value"))) {
				$("#toplogin").submit();
			}
		});
		
		$("#idCl, #pwd1b").keypress(function(event) {
			if (event.which == 13) {
				if (checkUserAndPwdNew($("#idCl").prop("value"), $("#pwd1b").prop("value"))) {
					event.preventDefault();
					$("#toplogin").submit();
				}
			}
		});
	} );
</script>

<div id="modalBlockLogin">
	<div id="modalBlockLoginContent">
		<div class="formLogin">
			<a class="btn-c-accesso btn-c" id="accessoClientiMob">ACCESSO CLIENTI</a>
			<span id="accessoClientiMobForm"></span>
		</div>
	</div>
</div>
<div class="fixedPosition">
	<div  id="topContent">
		<div class="container">
			<div class="row">
				<ul>
					<li id="deskLoginContent">

						<a class="btn-c-accesso btn-c" id="accessoClienti">
							ACCESSO CLIENTI
						</a>
						<div class="formLogin" id="formLoginNav">
							<!-- ATTENZIONE IL FORM DI LOGIN E' DUPLICATO PER LA VERSIONE MOBILE -->
							<form role="form" method="post" action="https://webanksvi7web.webank.local/webankpri/login/privata.do" name="toplogin" id="toplogin" autocomplete="off">
								<input style="display:none;" type="text" name="fkuser"/>
								<input style="display:none;" type="password" name="fkpwd"/>
								<div class="wrapper-login">
									<div class="row">
										<div class="col-xs-5">USERID</div>
										<div class="col-xs-7">
											<span class="serveAiuto"><a href="/webankpub/wbresp/t1/serve_aiuto.do">Serve aiuto?</a></span>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<input type="tel" value="" name="username" pattern="[0-9]*" required tabid="1" id="idCl" maxlength="8" autocomplete="off"/>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 mrg">PASSWORD</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<input type="password" value="" name="password" id="pwd1b" required tabid="2" maxlength="16" autocomplete="off"/>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="radio">
												<input type="radio" id="azioneCondisp" checked value="full" name="loginType"/>
												<label for="azioneCondisp">Consultare e disporre</label>
											</div>
											<div class="radio">
												<input type="radio" id="azioneConsultare" value="info" name="loginType"/>
												<label for="azioneConsultare">Consultare</label>
											</div>
										</div>
									</div>
									<div class="row mrg">
										<div class="col-xs-12">
											<a class="btn-whlit btn-whlit-arrow fleft uppercase" href="javascript:;" id="buttonEntra">ENTRA</a>
										</div>
									</div>
								</div>
								<input name="service" value="WEBANK" type="hidden">
								<input name="browser" value="" type="hidden">
								<input name="versione" value="" type="hidden">
								<input name="initClick" value="" type="hidden">
								<input name="Servizio" value="" type="hidden">
								<input name="multiwebapp" value="yes" type="hidden">
								<input src="/img/ret/pixel_trasp.gif?a=435" type="image" width="0" height="0" class="hiddenInput">
								<input name="IDAlleato" value="HOME_PRIV" type="hidden">
							</form>
						</div>

					</li>
					<li>
						<a href="https://webanksvi7web.webank.local/statopratica" class="btn-c-stato btn-c">
							STATO DI APERTURA CONTO
						</a>
					</li>
					<!--li>
						<a class="btn-c-search btn-c">
							CERCA NEL SITO
						</a>
					</li-->
				</ul>
			</div>

		</div>
	</div>
	<nav class="navbar navbar-inverse navbar-fixed-top navTwo" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar first"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar last"></span>
				</button>

				<a href="javascript:;" class="accessoClientiMobLink icoButton">ACCEDI</a>
				<a class="navbar-brand" href="/webankpub/wbresp/home.do"><img src="/wbresp/img/header/logo.png?a=435" alt="Banca Online Webank" /></a>
				<img class="navbar-brand-print" src="/wbresp/img/print/lg_stampa.jpg?a=435" alt="Banca Online Webank" />
			</div>

			<div id="navbar" class="collapse navbar-collapse js-navbar-collapse ">
				<ul class="nav navbar-nav">

					<li class="dropdown dropdown-large active">

						<a href="#" class="dropdown-toggle dropdown-arrow" data-toggle="dropdown" id="panelMenuButton">Prodotti</a>
						<div class="dropdown-menu dropdown-menu-large row dspTbl" id="panelMenu">
							<img src="/wbresp/img/header/punta.png?a=435" id="triangle" />
							<div class="box-shadow-wrapper">
								<div class="col-xs-12 col-md-3 col no-padding dspTblCell grayBackground">
									<div class="dropdown-large-lbl pnmn active" id="pnmn1"><a href="/webankpub/wbresp/t1/conto_webank.do">Conto Webank</a></div>
									<div class="dropdown-large-lbl pnmn" id="pnmn2"><a href="/webankpub/wbresp/t1/carte_di_credito.do">Carte</a></div>
									<div class="dropdown-large-lbl pnmn" id="pnmn3"><a href="/webankpub/wbresp/trading.do">Trading</a></div>
									<div class="dropdown-large-lbl pnmn" id="pnmn4"><a href="/webankpub/wbresp/t1/investimenti.do">Investimenti</a></div>
									<div class="dropdown-large-lbl pnmn" id="pnmn5"><a href="/webankpub/wbresp/t1/mutuo.do">Mutuo Webank</a></div>
									<div class="dropdown-large-lbl pnmn" id="pnmn6"><a href="/webankpub/wbresp/t1/prestiti_e_fidi.do">Prestiti e Fidi</a></div>
									<div class="dropdown-large-lbl pnmn" id="pnmn7"><a href="/webankpub/wbresp/t1/assicurazioni.do">Assicurazioni</a></div>
									<div class="dropdown-large-lbl tabletCustomDiv"></div>
									<div class="dropdown-large-lbl tabletCustom"><a href="https://magazine.webank.it">MAGAZINE</a></div>
									<div class="dropdown-large-lbl tabletCustom"><a href="https://labancachevorrei.webank.it">VIDEO</a></div>
									<div class="dropdown-large-lbl tabletCustom"><a href="/webankpub/wbresp/all_eventi.do">EVENTI E CORSI</a></div>
									<div class="dropdown-large-lbl tabletCustom hidden-xs"><a href="/webankpub/wbresp/t1/mobile_banking.do">APP MOBILE BANKING</a></div>
									<div class="dropdown-large-lbl tabletCustom hidden-xs"><a href="/webankpub/wbresp/t1/mobile_trading.do">APP MOBILE TRADING</a></div>
									<div class="dropdown-large-lbl tabletCustomDiv"></div>
									<div class="dropdown-large-lbl tabletCustom"><a href="https://webanksvi7web.webank.local/statopratica">STATO APERTURA CONTO</a></div>
								</div>
								<div class="col-md-9 no-padding dspTblCell hidden-sm hidden-xs"> <!-- hidden-burger -->
									<div class="dropdown-large-view pnmnv" id="pnmn1v">
										<div class="dleft">
											<h2>Conto Webank</h2>
											<p>
												Tutto quello che cerchi in un unico conto.<br>
												<b>Conto Webank</b> &egrave; il conto corrente <b>a zero spese</b>, accessibile ovunque tu sia e in grado di rispondere a tutte le tue esigenze: operazioni bancarie direttamente online, carte di pagamento con canone gratuito, soluzioni per la <b>gestione dei tuoi risparmi</b> e i più efficaci <b>strumenti di investimento</b>.
											</p>
										</div>
										<div class="bottomLink">
											<a class="btn-whlit btn-whlit-arrow btn-245 fleft uppercase inlineB" href="/webankpub/wbresp/t1/conto_webank.do">Scopri di pi&ugrave;</a>
											<a class="btn-grlit btn-grlit-arrow btn-245 fleft uppercase inlineB" href="javascript:apriConto();">Apri Conto Webank</a>
										</div>
										<div class="dright">
											<img src="/wbresp/img/header/navigator/contocorrenteper.png?a=435" alt="Conto Webank" title="Conto Webank" />
										</div>
									</div>
									<div class="dropdown-large-view hiddenDiv pnmnv" id="pnmn2v">
										<div class="dleft">
											<h2>Carte</h2>
											<p>
												Webank ti offre un'ampia scelta di <b>carte di pagamento</b>.<br>
												<b>Carte di debito, carte di credito e ricaricabili</b> con <b>canone gratuito</b>, per ogni tua esigenza di spesa.<br>
												Per gli acquisti di ogni giorno come per lo shopping online, sempre con massima comodit&agrave; e semplicit&agrave;.
											</p>
										</div>
										<div class="bottomLink">
											<a class="btn-whlit btn-whlit-arrow btn-245 fleft uppercase inlineB" href="/webankpub/wbresp/t1/carte_di_credito.do">Scopri di pi&ugrave;</a>
											<a class="btn-grlit btn-grlit-arrow btn-245 fleft uppercase inlineB" href="javascript:apriConto();">Apri Conto Webank</a>
										</div>
										<div class="dright">
											<img src="/wbresp/img/header/navigator/carte.png?a=435"  alt="Carte" title="Carte" />
										</div>
									</div>
									<div class="dropdown-large-view hiddenDiv pnmnv" id="pnmn3v">
										<div class="dleft">
											<h2>Trading</h2>
											<p>
												Sei un trader esperto che ha bisogno di una piattaforma pi&ugrave; <b>performante</b> e <b>commissioni migliori</b>?<p>
												Cerchi <b>strumenti semplici</b> e un <b>team di specialisti</b> per muovere i primi passi?<p>
												Sei alla ricerca di <b>nuovi mercati</b> su cui investire?<p>
												<b>Qualunque sia il tuo trading, Webank &egrave; la soluzione</b>.
											</p>
										</div>
										<div class="bottomLink">
											<a class="btn-whlit btn-whlit-arrow btn-245 fleft uppercase inlineB" href="/webankpub/wbresp/trading.do">Scopri di pi&ugrave;</a>
											<a class="btn-grlit btn-grlit-arrow btn-245 fleft uppercase inlineB" href="javascript:apriContoTrading();">Apri Conto Webank</a>
										</div>
										<div class="dright">
											<img src="/wbresp/img/header/navigator/trading.png?a=435" alt="Trading" title="Trading" />
										</div>
									</div>
									<div class="dropdown-large-view hiddenDiv pnmnv" id="pnmn4v">
										<div class="dleft">
											<h2>Investimenti</h2>
											<p>
												Investire con Webank &egrave; semplice e conveniente:<br>
												le migliori opportunit&agrave; di investimento con una vasta scelta di Fondi e SICAV delle Case di Gestione leader globali del risparmio gestito.
											</p>
										</div>
										<div class="bottomLink">
											<a class="btn-whlit btn-whlit-arrow btn-245 fleft uppercase inlineB" href="/webankpub/wbresp/t1/investimenti.do">Scopri di pi&ugrave;</a>
											<a class="btn-grlit btn-grlit-arrow btn-245 fleft uppercase inlineB" href="javascript:apriConto();">Apri Conto Webank</a>
										</div>
										<div class="dright">
											<img src="/wbresp/img/header/navigator/investimenti.png?a=435" alt="Investimenti" title="Investimenti" />
										</div>
									</div>
	
									<div class="dropdown-large-view hiddenDiv pnmnv" id="pnmn5v">
										<div class="dleft">
											<h2>Mutuo Webank</h2>
											<p>
												Stai pensando di <b>acquistare casa</b><!-- oppure di <b>rinnovarla</b>-->?<br>
												Qualunque sia la tua esigenza, <b>ti seguiremo passo passo</b> fino alla stipula del mutuo. E anche dopo.<br>
												E se vuoi <b>rottamare il tuo vecchio mutuo</b>, Webank ha la proposta giusta per te.
											</p>
										</div>
										<div class="bottomLink">
											<a class="btn-whlit btn-whlit-arrow btn-245 fleft uppercase inlineB" href="/webankpub/wbresp/t1/mutuo.do">Scopri di pi&ugrave;</a>
											<a class="btn-grlit btn-grlit-arrow btn-245 fleft uppercase inlineB" href="/webankpub/wbresp/calcolatore_mutuo.do">Calcola la rata</a>
										</div>
										<div class="dright">
											<img src="/wbresp/img/header/navigator/mutui.png?a=435"  alt="Mutuo Webank" title="Mutuo Webank" />
										</div>
									</div>
	
									<div class="dropdown-large-view hiddenDiv pnmnv" id="pnmn6v">
										<div class="dleft">
											<h2>Prestiti e fidi</h2>
											<p>
												Webank ti aiuta per le piccole spese e i grandi progetti.<br>
												<b>Prestito</b> Webank &egrave; la soluzione per ogni esigenza di spesa. Tasso fisso, zero spese e l'erogazione direttamente sul tuo conto.<br>
												<b>Fido</b> Webank ti consente di gestire con pi&ugrave; elasticit&agrave; il saldo del tuo conto, per tutte le eventualit&agrave;.
											</p>
										</div>
										<div class="bottomLink">
											<a class="btn-whlit btn-whlit-arrow btn-245 fleft uppercase inlineB" href="/webankpub/wbresp/t1/prestiti_e_fidi.do">Scopri di pi&ugrave;</a>
											<a class="btn-grlit btn-grlit-arrow btn-245 fleft uppercase inlineB" href="javascript:apriConto();">Apri Conto Webank</a>
										</div>
										<div class="dright">
											<img src="/wbresp/img/header/navigator/prestiti.png?a=435" alt="Prestiti e fidi" title="Prestiti e fidi" />
										</div>
									</div>
	
									<div class="dropdown-large-view hiddenDiv pnmnv" id="pnmn7v">
										<div class="dleft">
											<h2>Assicurazioni</h2>
											<p>
												Puoi contare su Webank anche per la tua tranquillit&agrave; ogni giorno.<br>
												Bastano pochi clic per scegliere tra una <b>vasta gamma di polizze</b>: vita, salute, viaggi, auto e moto.
											</p>
										</div>
										<div class="bottomLink">
											<a class="btn-whlit btn-whlit-arrow btn-245 fleft uppercase inlineB" href="/webankpub/wbresp/t1/assicurazioni.do">Scopri di pi&ugrave;</a>
											<a class="btn-grlit btn-grlit-arrow btn-245 fleft uppercase inlineB" href="javascript:apriConto();">Apri Conto Webank</a>
										</div>
										<div class="dright">
											<img src="/wbresp/img/header/navigator/assicurazioni.png?a=435" alt="Assicurazioni" title="Assicurazioni" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<a href="https://magazine.webank.it">Magazine</a>
					</li>
					<li>
						<a href="https://magazine.webank.it/video-library-webank/">Video</a>
					</li>

					<li>

						<a href="/webankpub/wbresp/all_eventi.do">Eventi e corsi</a>
					</li>

					<li class="dropdown dropdown-large">

						<a href="#" class="dropdown-toggle dropdown-arrow" data-toggle="dropdown" id="panelMenu2Button">Le nostre app</a>
						<div class="dropdown-menu dropdown-menu-large row dspTbl" id="panelMenu2">
							<img src="/wbresp/img/header/punta.png?a=435" id="triangle2" />
							<div class="box-shadow-wrapper">
								<div class="col-xs-12 col-md-3 col no-padding dspTblCell grayBackground">
									<div class="dropdown-large-lbl anmn active" id="anmn1"><a href="/webankpub/wbresp/t1/mobile_banking.do">Mobile Banking</a></div>
									<div class="dropdown-large-lbl anmn" id="anmn2"><a href="/webankpub/wbresp/t1/mobile_trading.do">Mobile Trading</a></div>
								</div>
								<div class="col-md-9 no-padding dspTblCell hidden-sm hidden-xs"> <!-- hidden-burger -->
									<div class="dropdown-large-view anmnv" id="anmn1v">
										<div class="dleft">
											<h2>Mobile banking</h2>
											<p>
												L'app per <b>smartphone</b> e <b>tablet</b> per gestire 24 ore al giorno la tua operativit&agrave;.<br /><br />
												Consulti il tuo saldo, i movimenti ed esegui le principali operazioni di <b>banking</b>.
											</p>
										</div>
										<div class="bottomLink">
											<a class="btn-whlit btn-whlit-arrow btn-245 fleft uppercase inlineB" href="/webankpub/wbresp/t1/mobile_banking.do">Scopri di pi&ugrave;</a>
											<a href="#" target="_blank"><img src="/wbresp/img/app/btn_appgallery.png?a=435" id="nav-appgallery-link" /></a>
											<a href="https://itunes.apple.com/it/app/webank/id306283651?mt=8" target="_blank"><img src="/wbresp/img/app/btn_apple.png?a=435" id="nav-apple-link" /></a>
											<a href="https://play.google.com/store/apps/details?id=com.opentecheng.android.webank&hl=it" target="_blank"><img src="/wbresp/img/app/btn_google.png?a=435" id="nav-google-link" /></a>
											
										</div>
										<div class="dright">
											<img src="/wbresp/img/header/navigator/mobile-banking.png?a=435" alt="Conto Webank" title="Le nostre App" />
										</div>
									</div>
	
									<div class="dropdown-large-view hiddenDiv anmnv" id="anmn2v">
										<div class="dleft">
											<h2>Mobile trading</h2>
											<p>
												<b>T3 Webank, il tuo trading in mobilit&agrave;</b><br /><br />
												Con Webank hai una selezione di app performanti e intuitive per gestire al meglio i tuoi investimenti. Scopri T3 per mobile: l'App che permette di seguire l'andamento del mercato e fare trading ovunque tu sia. La tua finestra sui mercati finanziari&hellip; tutto a portata di un tap.
											</p>
										</div>
										<div class="bottomLink">
											<a class="btn-whlit btn-whlit-arrow btn-245 fleft uppercase inlineB" href="/webankpub/wbresp/t1/mobile_trading.do">Scopri di pi&ugrave;</a>
											<a href="https://itunes.apple.com/it/app/t3-webank-per-ipad/id499579486?ls=1&mt=8" target="_blank"><img src="/wbresp/img/app/btn_apple.png?a=435" id="nav-apple-link" /></a>
											<a href="https://play.google.com/store/apps/details?id=it.soltec.atcube" target="_blank"><img src="/wbresp/img/app/btn_google.png?a=435" id="nav-google-link" /></a>
										</div>
										<div class="dright">
											<img src="/wbresp/img/header/navigator/mobile-trading.png?a=435" alt="Carte" title="Carte" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="dropdown dropdown-large hidden-lg hidden-md">
						<a href="https://webanksvi7web.webank.local/statopratica" id="accessoClientiMobLink">Stato apertura conto</a>
					</li>
					<li class="dropdown dropdown-large" id="openChatWrapper">
						<div id="openChat">
						</div>
					</li>
				</ul>
			</div><!--/.navbar-collapse -->
		</div>
	</nav>
</div>
	

<!-- INIZIO TEMPLATE DI PAGINA -->
<?php 
	
	if (!empty($tpl)) virtual("/template/template_wbresp/".$tpl); 
	
?>
<!-- FINE TEMPLATE DI PAGINA -->

			
<footer>
    <div class="splitter bgreen">
        <div class="container">
            <div class="row">                
				<nav class="col-md-2 col-sm-4 col-xs-6 boxPad">
					<ul class="list-unstyled">
						<li class="firstROW">CHI SIAMO</li>
						<li><a href="/webankpub/wbresp/t2/chi_siamo.do">Webank in breve</a></li>
						<li><a href="/webankpub/wbresp/t2/dati_societari.do">Dati societari</a></li>
					</ul>
				</nav>
				<nav class="col-md-2 col-sm-4 col-xs-6 boxPad">
					<ul class="list-unstyled">
						<li class="firstROW">PRODOTTI</li>
						<li><a href="/webankpub/wbresp/t1/conto_webank.do">Conto Webank</a></li>
						<li><a href="/webankpub/wbresp/t1/carte_di_credito.do">Carte</a></li>
						<li><a href="/webankpub/wbresp/trading.do">Trading</a></li>
						<li><a href="/webankpub/wbresp/t1/investimenti.do">Investimenti</a></li>
						<li><a href="/webankpub/wbresp/t1/mutuo.do">Mutuo Webank</a></li>
						<li><a href="/webankpub/wbresp/t1/prestiti_e_fidi.do">Prestiti e fidi</a></li>
						<li><a href="/webankpub/wbresp/t1/assicurazioni.do">Assicurazioni</a></li>
					</ul>
				</nav>
				<div class="clearfix visible-xs-block"></div>
				<nav class="col-md-2 col-sm-4 col-xs-6 boxPad">
					<ul class="list-unstyled">
						<li class="firstROW">CONTATTI</li>
						<li><a href="/webankpub/wbresp/t2/contatti.do">Come contattarci</a></li>
						<li><a href="/webankpub/wbresp/dialoga_con_webank.do">Dialoga con Webank</a></li>
						<li><a href="/webankpub/wbresp/t2/in_diretta_con_webank.do">In diretta con Webank</a></li>
						<li><a href="/webankpub/wbresp/t2/numeri_utili.do">Numeri utili</a></li>
						<li><a href="/webankpub/wbresp/sales_team.do">Sales Team</a></li>
						<li><a href="https://labancachevorrei.webank.it">La banca che vorrei</a></li>
						<li>&nbsp;</li>
					</ul>
				</nav>
				<div class="clearfix visible-sm-block"></div> 
				 <nav class="col-md-2 col-sm-4 col-xs-6 boxPad">
					<ul class="list-unstyled">
						<li class="firstROW">PRIVACY</li>
						<li><a href="/webankpub/wbresp/t2/privacy.do">Direttive e decreti</a></li>
						<li><a href="/webankpub/wbresp/t2/informativa.do">Informativa</a></li>
						<li><a href="/webankpub/wbresp/t2/codice_deontologico.do">Codice deontologico</a></li>
					</ul>
				</nav>
				<div class="clearfix visible-xs-block"></div> 
				<nav class="col-md-2 col-sm-4 col-xs-6 boxPad">
					<ul class="list-unstyled">
						<li class="firstROW">SICUREZZA</li>
						<li><a href="/webankpub/wbresp/t2/sicurezza.do">La sicurezza</a></li>
						<li><a href="/webankpub/wbresp/t2/minacce_del_web.do">Le minacce del web</a></li>
						<li><a href="/webankpub/wbresp/t2/strumenti_sicurezza.do">Gli strumenti per la sicurezza</a></li>
						<li><a href="/webankpub/wbresp/t2/protezione_servizio.do">La protezione del servizio</a></li>
					</ul>
				</nav>
				<nav class="col-md-2 col-sm-4 col-xs-6 boxPad">
					<ul class="list-unstyled">
<!-- 						<li class="firstROW">TRASPARENZA</li> -->
						<li class="firstROW"><a href="/webankpub/wbresp/t2/fogli_informativi.do"><img src="/wbresp/img/img_trasparenza_footer.png" class="" alt="" /></a></li>
						<li><a href="/webankpub/wbresp/t2/fogli_informativi.do">Fogli informativi</a></li>
						<li><a href="/webankpub/wbresp/t2/documenti_precontrattuali.do">Documenti precontrattuali</a></li>
						<li><a href="/webankpub/wbresp/t2/rilevazione_tassi_effettivi.do">Rilevazione tassi effettivi</a></li>
						<li><a href="/webankpub/wbresp/t2/indicatore_sintetico_di_costo.do">Indicatore sintetico di costo</a></li>
						<li><a href="/webankpub/wbresp/t2/aggiornamenti_psd.do">Aggiornamenti PSD</a></li>
						<li><a href="/webankpub/wbresp/t2/guide_pratiche.do">Guide pratiche</a></li>
						<li><a href="/webankpub/wbresp/t2/collocamenti_titoli_stato.do">Collocamenti titoli di stato</a></li>
						<li><a href="/webankpub/wbresp/t2/reclami_ricorsi_conciliazione.do">Reclami ricorsi e conciliazione</a></li>
						<li><a href="/webankpub/wbresp/t2/rapporti_dormienti.do">Rapporti dormienti</a></li>
					</ul>
				</nav>                   
            </div>
			<div class="row">				
				<nav>
					<ul class="list-unstyled">
						<!--
						<li class="firstROW socialTitle">ISCRIVITI ALLA NEWSLETTER</li>
							<li>
								<div class="newsletterbox">
									<input type="text" name="newsletter-email" id="newsletter-email" placeholder="Inserisci la tua email...">
									<a href="javascript:void()" id="newsletter-btn">ISCRIVITI</a>
								</div>
							</li>
							<li>&nbsp;</li>
						-->	
						<li class="firstROW socialBlock">SEGUICI SUI NOSTRI CANALI SOCIAL</li>
						<li class="firstROW  hidden-md hidden-lg"></li>
						<li class="socialBlock">
							<a title="Seguici su Facebook" href="https://www.facebook.com/webank" target="_blank"><img src="/wbresp/img/btn/share-fb.png" alt="Condividi su Facebook" /></a>
							<a title="Seguici su twitter" href="https://www.twitter.com/webank" target="_blank"><img src="/wbresp/img/btn/share-tw.png" alt="Condividi su Twitter" /></a>
							<a title="Seguici su LinkedIn" href="https://www.linkedin.com/company/webank" target="_blank"><img src="/wbresp/img/btn/share-ln.png" alt="Seguici su LinkedIn" /></a>
							
							<a title="Seguici su YouTube" href="https://www.youtube.com/webanktv" target="_blank"><img src="/wbresp/img/btn/share-yt.png" alt="Condividi su Youtube" /></a>
						</li>
					</ul>
				</nav>
			</div>			
        </div>
    </div>
    <div class="splitter bblack">
        <div class="container">
            <div class="row footerInfo">
	            <span vocab="http://schema.org/" typeof="Organization">
				    <span property="name">Banca Popolare di Milano S.p.A.</span> -
				    <span property="address" typeof="PostalAddress">
				        <span property="streetAddress">Piazza F. Meda, 4</span>
				        <span property="postalCode">20121</span>
				        <span property="addressLocality">Milano, Italia</span>
				    </span>
				</span> - P.IVA 01906000201<br />
				Gruppo Banco BPM. Societ&agrave; soggetta a direzione e coordinamento di Banco BPM S.p.A. Tutti i diritti riservati.
			</div>
        </div>
    </div>
</footer>

			






<script src="/wbresp/js/vendor/bootstrap.min.js"></script>
<script src="/wbresp/js/vendor/jquery.smooth-scroll.min.js"></script>
<script src="/wbresp/js/vendor/jquery.touchSwipe.min.js"></script>
<script src="/wbresp/js/bootstrap-slider.min.js"></script>
<script src="/wbresp/js/vendor/jquery.viewportchecker.min.js"></script>
<script src="/wbresp/js/bootstrap-select.min.js"></script>
<script src="/wbresp/js/main.js"></script>
<script src="/wbresp/js/utilities.js"></script>




	<script type="text/javascript">
		function apriConto() {
			var urlApriConto = "/webankpub/aol/contocorrentewebank.jsp";
			window.location = urlApriConto;
		};
		function apriContoTrading() {
			var urlApriContoTrading = "/webankpub/aol/contocorrentewebank.jsp";
			window.location = urlApriContoTrading;
		}
	</script>
	
	<!-- Cookie bar -->
	<script src="/wbresp/js/cookiebar.js"></script>
	<!-- Cookie bar -->


</body>
</html>
