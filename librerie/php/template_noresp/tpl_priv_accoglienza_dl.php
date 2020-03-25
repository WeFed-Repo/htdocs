<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>LIBRERIE Bpm &raquo; Template struttura &raquo; Pagina interna privata</title>
	 <!-- INIZIO CODICE--> 
	<?php virtual ("/wscmn/css/include_css_priv.html"); ?>
	<?php virtual ("/js/include_js_priv.html"); ?>
	<!-- FINE CODICE--> 
</head>
<body class="bgfp obs">
<!-- BOX SICUREZZA IN OVERLAYER -->		
		<div id="sicurezza">
			<div class="boxtitle">
				<div class="phonebox"><p>Servizio clienti nazionale<span>800 060 070</span></p></div>
				<p>Lorem ipsum <span>Dolor Sit</span> amet consectetur <span>Elit</span></p>
			</div>
			<div class="sicurezzabox">
				<div class="boxbody">
					<div id="contenuti">
						<p>Gentile Nome,<br>
						<br>
						eccoti gli strumenti che ti permetteranno di comunicare e operare in modo completamente digitale, senza dover stampare e spedire moduli e contratti.Ti chiediamo di completare alcuni adempimenti per essere subito operativo al 100%</p>
						<!-- FASCIONE DIGITAL LIFE -->
						<div class="fascione dl">
							<!--<h3>Webank paperless</h3>
							<h4>Entra subito in un mondo senza pi&ugrave; carta da stampare e spedire</h4>-->
							<img src="/img/ret/accoglienza_firma_digitale.jpg" alt=""/>
						</div>
						
						
						<!-- FINE FASCIONE DIGITAL LIFE -->
						<h1>Posta elettronica certificata</h1>
						<table class="tOutput">
							<tr>
								<td>Ecco la tua PEC: <strong>mario.rossifumagallicarulli@wepecmail.it</strong></td>
								<td>Potrai accedere alla tua casella dalla <strong>MyHome</strong></td>
							</tr>
						</table>
						<h1>Domanda segreta</h1>
						<p>Scegli una domanda segreta di cui solo tu conosci la risposta.<br>
						Ti sarà utile  per recuperare i tuoi dati di accesso al conto (user ID e password).</p>
						<div class="formGeneric">
							<form class="formCentered" autocomplete="off">
								<fieldset class="row">
									<label class="nomefield">Domanda segreta:</label>
									<select type="text">
										<option selected value="">--Seleziona--</option>
									</select>
								</fieldset>
								<fieldset class="row">
									<label class="nomefield">Risposta</label>
									<input type="text" placeholder="Risposta">
								</fieldset>
							</form>
							<div class="aButtoncons formCentered">
								<a class="aButton"><span>Salva</span></a>
							</div>
							<br class="clear">
						</div>
						
						
						
						
						<!-- FIRMA DIGITALE -->
						<h1>Firma digitale</h1>
						<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. </p>
						<p>Scegli e conferma il tuo Codice di Firma per attivare la tua firma digitale.<br>
						Importante: scegli un codice di 8 cifre facile da ricordare e memorizzalo con attenzione, ti servirà per tutte le richieste di prodotti e servizi Webank</p>
						<ul class="pdfLink">
							<li><a href="#">Manuale operativo</a></li>
							<li><a href="#">Istruzioni utilizzo certificati</a></li>
							<li><a href="#">Condizioni generali</a></li>
						</ul>
						<br class="clear">
						<!-- FORM ERRORE -->
						<div id="ErroriValidazione">
							<div class="boxtxt">
								<p class="box_mess"><img border="0" class="dx" alt="" src="/wscmn/img/ico2inf_errorform.gif"/><img border="0" alt="" src="/img/ret/box_attenzione.jpg"/><br/>
								<br/><br/>
								Lorem ipsum dolor sit amet,<br/>
								consectetuer adipiscing elit, sed diam nonummy nibh euismod (tincidunt), ut laoreet dolore magna aliquam erat volutpat. <br/>
								Ut wisi enim ad minim veniam, <strong>QUIS NOSTRUD EXERCI TATION ULLACORPER</strong>. Lorem ipsum dolor sit amet,
								consectetuer adipiscing elit, sed diam nonummy nibh euismod (tincidunt).</p> 
								<br/>
								<p class="box_mess">
									lkasd askjdlasjdalsd <span class="alert">sdlajsdaksdlas skdj laksjd lkasjkldjalsj d</span>
								</p>
								<ul class="alert">
									<li>Lorem ipsum dolor sit amet</li>
									<li>Lorem ipsum dolor sit amet</li>
									<li>Lorem ipsum dolor sit amet</li>
									<li>Lorem ipsum dolor sit amet</li>
									<li>Lorem ipsum dolor sit amet</li>
								</ul>
								
							</div>
						</div>
						<br class="clear" />
						<!-- FINE FORM ERRORE -->
						<!-- FORM -->
						<div class="formGeneric">
							<form class="formCentered" autocomplete="off">
								<fieldset class="row">
									<label class="nomefield">Scegli la tua FIRMA DIGITALE:</label>
									<input type="text" placeholder="inserisci 8 cifre" maxlength="8">
									<span class="text">il codice deve essere composto di 8 caratteri numerici</span>
								</fieldset>
								<fieldset class="row error">
									<label class="nomefield">Ripeti la tua FIRMA DIGITALE:</label>
									<input type="text" placeholder="Digita di nuovo le 8 cifre" maxlength="8">
								</fieldset>
							</form>
							<div class="aButtoncons formCentered">
								<a class="aButton" onclick="$(this).parent('.aButtoncons').hide();$('#controlloOtp').show()"><span>Conferma</span></a>
							</div>
							<br class="clear">
						</div>
						
						<!-- / FORM -->
						<!-- FORM OTP CONTROLLO -->
						<div id="controlloOtp" style="display:none">
							<div class="formGeneric">
								<form class="formCentered" autocomplete="off">
									<fieldset class="row tolltipclick">
										<label class="nomefield ico">Codice di controllo (SMS):&nbsp;</label>
										<span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti2"><span class="uniqTooltipPos"> <a href="javascript:;"><span class="icohelp"><img src="/img/ret/ico2or_help2.gif" class="help"></span></a></span>
											<span class="uniqTooltipInnerHTML">
											<p>Inserisci il codice di controllo che hai ricevuto in questo momento sul tuo cellulare; se non l'hai ricevuto clicca su "inviami un nuovo codice di controllo"
											</p>
											</span></span></span>
										<input type="text">
										<a href="#">Inviami un nuovo codice di controllo</a>
									</fieldset>
								</form>
								<div class="aButtoncons formCentered">
									<a class="aButton" onclick="$('#goHome').removeClass('buttDis');$('#boxEsito').show()"><span>Attiva firma</span></a>
								</div>
								<br class="clear" />
							</div>
						
						</div>
						<!-- Box Conferma -->
						<div class="boxesito positivo" style="display:none" id="boxEsito">
							<div class="middle"><span class="imgCont"></span>
							<div class="text">
								<p class="noPaddbottom"><strong>Conferma</strong><br>
								At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
								et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
								</div>
							</div>
						</div>
						<!-- Fine box conferma -->
						
						<!-- / FORM OTP CONTROLLO -->
						<br class="clear"></br>
						
						<div class="aBigButtoncons">
							<a class="aButton aBigButton buttDis" id="goHome"><span>vai alla MyHome</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="boxend"></div>
		</div>
		
<!-- FINE BOX SICUREZZA IN OVERLAYER -->		


<!-- PAGINA STANDARD (SOSTITUIRE CON QUALSIASI COSA)-->
<div id="testa" style="text-align: center;">
	     <img src="/img/ret/str_myhome_ss.gif">
</div>
<!-- FINE PAGINA STANDARD (SOSTITUIRE CON QUALSIASI COSA NEL BODY) -->

</body>
</html>