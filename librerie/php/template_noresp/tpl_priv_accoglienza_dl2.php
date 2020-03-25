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
						<!-- FINE FASCIONE DIGITAL LIFE -->
						<h1>Cambia il tuo numero di cellulare</h1>
						<div class="boxesito attenzione">
							<div class="middle"><span class="imgCont"></span>
							<div class="text">
								<p class="noPaddbottom"><strong>Lorem ipsum dolor sit amet</strong><br>
								At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
								et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
								</div>
							</div>
						</div>
						
						<div class="formGeneric">
							<form autocomplete="off">
								<fieldset class="row">
									<div style="width:30%" class="fieldWrap">
										<label class="nomefield">&nbsp;</label>
										<strong>Inserisci un altro numero di cellulare</strong>
									</div>
									<div style="width:10%" class="fieldWrap">
										<label class="nomefield">Prefisso int.:</label>
										<input type="text" maxlength="7" placeholder="++0039">
									</div>
									<div style="width:10%" class="fieldWrap">
										<label class="nomefield">Prefisso:</label>
										<input type="text" maxlength="3" placeholder="">
									</div>
									<div style="width:20%" class="fieldWrap">
										<label class="nomefield">Numero di cellulare:</label>
										<input type="text" maxlength="16" placeholder="">
									</div>
									<div style="width:30%" class="fieldWrap">
										<label class="nomefield">Operatore:</label>
										<select>
											<option value="-">-- Seleziona operatore --</option>
										</select>
									</div>
								</fieldset>
							</form>
							<div class="aButtoncons formCentered">
								<a onclick="$('#smsCode').show()" class="aButton"><span>Conferma</span></a>
							</div>
							<br class="clear">
						</div>
						
						<div class="formGeneric" id="smsCode" style="display:none">
							<fieldset class="row">
									<label class="nomefield">Inserisci il codice di controllo che ti abbiamo inviato via SMS al numero che hai indicato:</label>
									<div style="width:50%" class="fieldWrap">
										<input type="text" maxlength="16" placeholder="Scrivi qui il codice che ti abbiamo inviato">
										<span class="text">Non hai ricevuto il codice? <a href="#">Chiedine un altro</a></span>
									</div>
							</fieldset>
							<div class="aButtoncons formCentered">
								<a class="aButton"><span>Certifica</span></a>
							</div>
							<br class="clear">
						</div>
						
						<div class="fascione dl">
							<img alt="" src="/img/ret/accoglienza_firma_digitale.jpg">
						</div>
						
						<h1>FIRMA DIGITALE</h1>
						<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. </p>
						<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. </p>
						<ul class="pdfLink">
							<li><a href="#">Manuale operativo</a></li>
							<li><a href="#">Istruzioni utilizzo certificati</a></li>
							<li><a href="#">Condizioni generali</a></li>
						</ul>
						<br class="clear">
						<div class="formGeneric">
							<form autocomplete="off" class="formCentered">
								<fieldset class="row">
									<label class="nomefield">Scegli la tua FIRMA DIGITALE:</label>
									<input type="text" maxlength="8" placeholder="inserisci 8 cifre">
									<span class="text">il codice deve essere composto di 8 caratteri numerici</span>
								</fieldset>
								<fieldset class="row error">
									<label class="nomefield">Ripeti la tua FIRMA DIGITALE:</label>
									<input type="text" maxlength="8" placeholder="Digita di nuovo le 8 cifre">
								</fieldset>
							</form>
							<div class="aButtoncons formCentered">
								<a onclick="$(this).parent('.aButtoncons').hide();$('#controlloOtp').show()" class="aButton"><span>Conferma</span></a>
							</div>
							<br class="clear">
						</div>
						
						<div style="display:none" id="controlloOtp">
							<div class="formGeneric">
								<form autocomplete="off" class="formCentered">
									<fieldset class="row tolltipclick">
										<label class="nomefield ico">Codice di controllo (SMS):&nbsp;</label>
										<span class="closed"><span id="documenti2" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}"><span class="uniqTooltipPos"> <a href="javascript:;"><span class="icohelp"><img class="help" src="/img/ret/ico2or_help2.gif"></span></a></span>
											<span class="uniqTooltipInnerHTML">
											<p>Inserisci il codice di controllo che hai ricevuto in questo momento sul tuo cellulare; se non l'hai ricevuto clicca su "inviami un nuovo codice di controllo"
											</p>
											</span></span></span>
										<input type="text">
										<a href="#">Inviami un nuovo codice di controllo</a>
									</fieldset>
								</form>
								<div class="aButtoncons formCentered">
									<a onclick="$('#goHome').removeClass('buttDis');$('#boxEsito').show()" class="aButton"><span>Attiva firma</span></a>
								</div>
								<br class="clear">
							</div>
						
						</div>
						
						<div id="boxEsito" style="display:none" class="boxesito positivo">
							<div class="middle"><span class="imgCont"></span>
							<div class="text">
								<p class="noPaddbottom"><strong>Conferma</strong><br>
								At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
								et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
								</div>
							</div>
						</div>
						
					<div class="sicurezzabox" id="atttivaOra">
						<h2>Attiva subito la tua casella PEC</h2>
						<div class="infoBox promo">
							<p>
								Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude.<br> 							<br>
								<strong>Lorem ipsum dolor</strong>:
							</p>
							<ul>
								<li>Lorem ipsum dolor sit amet consectetur.</li>
								<li>Adipiscing elit summa cum laude ipsum dolor sit amet consectetur.</li>
								<li>Cum laude adipiscing <strong>ipsum</strong> dolor sit amet consectetur.</li>
								<li>Lorem ipsum dolor sit amet consectetur.</li>
							</ul>
							<div class="formGeneric">
								<p>Lorem ipsum dolor  <strong>012345678</strong> et amet <strong>012345678</strong><br>
								<br>Lorem ipsum depauperat summa cum laude pastafis dolor amte consectetur. Lorem ipsum depauperat summa cum laude pastafis dolor amte consectetur. Lorem ipsum depauperat summa cum laude pastafis dolor amte consectetur. Lorem ipsum depauperat summa cum laude pastafis dolor amte consectetur. </p>
								<form autocomplete="off">
									<fieldset class="row">
										<label id="cbDocs"><input type="checkbox" disabled="" onclick="$('#attivaBtn').removeClass('buttDis');">Dichiaro di aver preso visione dei <a onclick="$('#cbDocs').find('input').attr('disabled',false);" href="javascript:;">documenti di Condizioni generali- Manuale operativo - Istruzioni utilizzo PEC</a> </label>
									</fieldset>
								</form>
							</div>
							<div class="aBigButtoncons">
								<a class="aButton aBigButton buttDis" id="attivaBtn" onclick="if(!$(this).hasClass('buttDis')){$('#boxEsito2').show();$('#atttivaOra').hide()}"><span>Attiva ora la tua casella PEC</span></a>
							</div>
							<p style="text-align:center"><a href="#">voglio attivarla in seguito</a></p>
						</div>
					</div>
					<div id="boxEsito2" style="display:none" class="boxesito positivo">
							<div class="middle"><span class="imgCont"></span>
							<div class="text">
								<p class="noPaddbottom"><strong>Conferma</strong><br>
								At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
								et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
								</div>
							</div>
					</div>
					<div class="aBigButtoncons">
							<a id="goHome" class="aButton aBigButton"><span>vai alla MyHome</span></a>
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