<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
	<title>Webank - la banca online dal 1999</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Language" content="it" />
	<link href="/css/ret/priv_login2.css" rel="stylesheet" type="text/css" media="screen" />
	<script src="/wscmn/js/ret/priv_login.js" type="text/javascript"></script>
	<script src="/wscmn/js/jquery.js" type="text/javascript"></script>
</head>
<body>
<div class="page100">
	<div id="testa"> 
		<div id="header"> 
    		<div id="ctnloghi">
				<img src="/img/lg_webank.png" alt="Webank.it" title="Webank.it" />
   			</div>		
			<div class="dati">Benvenuta, <span class="bolt">CECI ORIETTA</span><br />Data ultimo accesso: 29/04/2011 - h. 06:50:19<br/><a href="#" class="esci"><img title="Esci" alt="Esci" src="/img/ret/btn_esci.gif" /></a></div>
			<br class="clear" />
		</div>		
	</div>
		<div id="contenuti2"> 											
			<div id="avvisosicurezza"><img title="Novit&agrave; programma sicurezza" alt="Novit&agrave; programma sicurezza" src="/img/ret/visual_psl.gif"/></div>
			<script type="text/javascript">
				var cgi_script = '/webankpri';
				var cgi_host = 'webankfixweb.webank.local';
				var cgi_protocol = 'https://';

				function openDemo(url)
				{
					window.open(url,'demoiln','width=759,height=450,scrollbars=no,resizable=no');
				}
				var value= "null";

				function invia()
				{
					var _screenWdt = document.body.clientWidth + 21;			
					document.ChangeTypeUser.submit();
				}

				/*
					In caso di utenti amministrativi o di utenti business la data di nascita non
					viene mostrata per cui il focus va sul primo dei due pin2
				
				*/		
				function focuss() {
					try { 			
						document.ChangeTypeUser.giorno.focus();
					} catch(err) {			
						document.ChangeTypeUser.pwd1.focus();
					}				
				}
	
				addEvent(window, 'load', focuss);
				var parent = new Object();
				parent.frames = new Array();
				parent.frames[0] = top;
				parent.frames[1] = top;
				
				function checkData(giorno,mese,anno) {				
						return checkGiorno(giorno) && checkMese(mese)&& checkAnno(anno);								 
					}
		
				function checkAnno(anno) {
					var check = true;
					if ((anno == "") || (anno.length < 4)) {
						alert ("Attenzione, l'anno deve essere composto di 4 cifre.");
						check = false;
					}
					return check;
				}
				
				function checkGiorno(giorno) {
					var check = true;
					if ((giorno == "") ||
						(giorno > 31) ||
						(giorno < 1)) {
						alert ("Attenzione, il giorno deve essere compreso tra 1 e 31.");
						check = false;
					}
					return check;
				}
				
				function checkMese(mese) {
					var check = true;
					if ((mese == "") ||
						(mese > 12) ||
						(mese < 1)) {
						alert ("Attenzione, il mese deve essere compreso tra 1 e 12.");
						check = false;
					}
					return check;
				}
				
				$(function () {
					// $('#giornoLogin').trigger('focus');
					// $('#giornoLogin').html(11);
				});
			</script>
			
			
			<form name="ChangeTypeUser" onSubmit="return checkData(ChangeTypeUser.giorno.value,ChangeTypeUser.mese.value,ChangeTypeUser.anno.value)"  method="post" target="_self" action="/webankpri/login/Pin2.do?BV_UseBVCookie=Yes&amp;cf=0.09449226050489679">
				<input type="hidden" name="BV_UseBVCookie" value="Yes" />
				<input type="hidden" name="step" value="ok" />
				<input type="hidden" name="invia" value="validate" />
				<div class="box6">
					<div class="box6b">
						<div class="imgdx3">												
							<img src="/img/ret/carta.jpg" alt="Carta Servizi" title="Carta Servizi"/>				
						</div>
						<div class="txtleft">				
							Gentile Cliente, per motivi di sicurezza, ti chiediamo di inserire la <strong>data di nascita</strong> e <strong>UNO</strong> dei 32 codici	della <strong>password di ll&deg; livello</strong>.<br/><br/>La password &egrave; stampata su una tessera plastificata chiamata<strong> CARTA SERVIZI TELEMATICI</strong> che ti &egrave; stata inviata in precedenza.
						</div>
						<br /><br class="clear"/>
						<div id="sicur">
							<p>Programma sicurezza</p>
						</div>
						<div class="tithelp">
							<div class="BvTableHeaderHelp" align="right">
								<a href="javascript:pop_up_int('/webankpri/common/ExternalHelp.jsp?cf=0.015029786656936328&key=PRGSIC&fromLogin=true');">
									<img height="16" width="16" alt="" src="/img/ret/help.gif"/>
								</a>
								<a href="javascript:pop_up_int('/webankpri/common/ExternalHelp.jsp?cf=0.11919889074744772&key=PRGSIC&fromLogin=true');" class="hlp">help</a>
								<br class="clear"/>
							</div>
							<br class="clear"/>
						</div>
						<br class="clear"/>
						<div class="pindata2">
							<p class="data_titolo">Data di nascita</p>
							<p class="data_testo">Inserisci la tua data di nascita   
								<input id="giornoLogin" type="text" name="giorno" placeholder="gg" class="data1" pattern="[0-9]*" maxlength="2"  autofocus />
								<!--input type="password" name="giorno" placeholder="gg" class="data1" pattern="[0-9]*" maxlength="2" onkeyup="javascript:spostaFocus(giorno,bkGiorno,mese,2)" onfocus="select()" onchange="bkGiorno.value=value" AUTOCOMPLETE="Off" autofocus /-->
								/ 
								<input type="password" name="mese" placeholder="mm"  class="data1" pattern="[0-9]*" maxlength="2" onkeyup="javascript:spostaFocus(mese,bkMese,anno,2)" onfocus="select()" onchange="bkMese.value=value" AUTOCOMPLETE="Off"/> 
								/ 
								<input type="password" name="anno" placeholder="aaaa"   class="data2" pattern="[0-9]*" maxlength="4" onkeyup="javascript:spostaFocus(anno,bkAnno,pwd1,4)" onfocus="select()" onchange="bkAnno.value=value" AUTOCOMPLETE="Off"/>
							</p>
						</div>
						<input type="hidden" value="" name="bkGiorno" class="text"/>
						<input type="hidden" value="" name="bkAnno" class="text"/>
						<input type="hidden" value="" name="bkMese" class="text"/>
						<br class="clear"/>
						<div class="pintxt">
							<p class="pin_testo2">Password II livello</p>
							<p class="pin_testo" id="Password di II livello">Inserisci la <strong class="negativo">SECONDA</strong> e <strong class="negativo">TERZA</strong> cifra del codice <strong class="negativo">30</strong> della tua <strong>Carta Servizi Telematici</strong></p>
						</div>
						<div class="pincode">
							<img height="21" border="0" width="17" alt="" class="aster pinfirst" src="/img/ret/pin_aster.gif"/>
							<input type="password" class="pin pincenter" name="pwd1" id="pwd1" maxlength="1"  pattern="[0-9]*" onchange="bkPwd1.value = value" onfocus="select()" />
							<input type="password" class="pin pincenter" name="pwd2" id="pwd2" maxlength="1" onfocus="select()" pattern="[0-9]*"/>
							<img height="21" border="0" width="17" alt="" class="aster pinlast" src="/img/ret/pin_aster.gif"/>
							<br class="clear"/>
							<img height="12" border="0" width="104" alt="" class="posizione" src="/img/ret/pin_posiz.jpg"/> 
						</div>
						<input class="text" type="hidden" name="bkPwd1"/>
						<br class="clear"/>			
						<div class="fooform">
							<div class="fooformleftb">
								<div class="text">
									<img class="richpin2" alt="" src="/img/ret/ico_richpin2.jpg"/>
									<a class="richpin2" href="javascript:callJSP('/login/richiedi_conferma_carta.jsp',null,null)">Hai perso la carta dei Servizi Telematici?</a><br />
									<a class="richpin2" href="#">Vuoi accedere solo per consultare il tuo conto?</a>
									<br class="clear" />
								</div>
							</div>				
							<div class="fooformrightb">
								<div>
									<a class="btnformright" title="conferma" onclick="return checkData(ChangeTypeUser.giorno.value,ChangeTypeUser.mese.value,ChangeTypeUser.anno.value)" href="javascript:invia();" >
										<img alt="" src="/img/ret/btn_left_ar.gif"/>
										<span>conferma</span>
										<img alt="" src="/img/ret/btn_right_ar.gif"/>
									</a>
								</div>
								<br class="clear"/>
							</div>
							<br class="clear"/>
						</div>
						<div class="vuoto"></div>
					</div>				
					<input type="image" name="invia"  src="/img/pixel_trasp.gif" />
				</div>
			</form>
		</div>	
		<br class="clear" />
		<div id="footer">
			<p>&copy; WeBank S.p.A. - P.IVA 13191900151 - Gruppo Bipiemme</p>
		</div>	
</div>
</body>
</html>


