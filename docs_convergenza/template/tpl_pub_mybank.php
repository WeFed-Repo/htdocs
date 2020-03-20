<!DOCTYPE html>
<html lang="it">

<head>
	<title>Webank</title>
	<meta charset="utf-8">
<!-- MOBILE -->
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

	
	<meta name="description" content=""/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<meta http-equiv="Content-Language" content="it"> 
<meta name="script" http-equiv="Content-Script-Type" content="text/javascript"> 
<meta name="script" http-equiv="Content-Style-Type" content="text/css"> 
<link href="/WB/fe/css/uniform.css" rel="stylesheet" type="text/css"> 
<link href="/WB/fe/css/pub_home_mybank.css" rel="stylesheet" type="text/css"> 
<link href="/WB/fe/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
<!--[if IE 7]> 
<link rel="stylesheet" href="/WB/fe/css/font-awesome-ie7.min.css"> 
<![endif]--> 
<script src="/common/fe/assets/jquery/jquery.js" type="text/javascript"></script>
<script src="/WB/fe/js/pub_home_mybank.js" type="text/javascript"></script> 
<script src="/WB/fe/js/pub_check_form_mybank.js" type="text/javascript"></script> 
<script src="/WB/fe/js/uniform.js" type="text/javascript"></script> 
<script type="text/javascript" language="javascript"> 

var cgi_host = 'webanksvi7web.webank.local'; 
var cgi_protocol = 'https://'; 
var login_action_privati = '/webankpri/login/privata.do?&amp;cf=0.48257947'; 
var login_host_privati = cgi_protocol + cgi_host + login_action_privati; 

function goWB() { 
var form = document.getElementById("MyBankFormPrivati"); 
form.action=login_host_privati; 
form.IDAlleato.value="HOME_PRIV"; 
form.Servizio.value=""; 

if(checkLoginForm(form)) { 
form.submit(); 
} 
} 

function cancel() { 
var form = document.getElementById("MyBankFormPrivati"); 
form.action ='/webankpub/mybank/myBankAnnulla.do'; 
form.submit(); 
} 

</script> 

</head> 

<body> 
<div id="ttBox" style="display: none;">
	<div class="arrow top"></div>
	<div id="ttCont">
		<a id="ttClose" href="javascript:;"></a>
		<div id="ttContText"></div>
	</div>
	<div class="arrow bottom"></div>
</div>

<div id="testa"> 
	<div id="wrapperHome"> 
		<div id="headercontainerFlat"> 
			<img alt="" class="printlogoNew" src="/WB/fe/img/logo_print.gif"> 
			<h1>
				<a href="#"><img alt="" class="logo" src="/WB/fe/img/logo_login.png?a=454"></a>
			</h1> 
			<span class="headerSeparator"></span> 
			<img alt="" src="/WB/fe/img/header_pubblico_right_mybank.png" class="logoMyBank flRight"> 
		</div> 
		<div id="content"> 
			<div class="tabWrapper" id="mainTab"> 
<script language="JavaScript">
<!--MM: CONTROLLI FORM CONTATTO--> 

function checklet(obj) { 
num=obj.value;
name=obj.name;
err = "false";
if(num=='') return err;
for(var i=0; i<num.length; i++) {
if( (num.charAt(i)>='0') && (num.charAt(i)<='9')) {
err = "true" ;
alert("Il "+name+" non deve contenere numeri!");
obj.focus();
obj.select();
break;
} 
}
return err;
}

function validate() {
var i =0
var errore = "false";

if ( errore =="false") {
if(document.invio_segnalazione.nome.value == "") {
errore = "true";
alert ( "Inserire il nome");
document.invio_segnalazione.nome.focus();
}
}
if ( errore == "false") {
if (document.invio_segnalazione.pubblico.value=="yes")
errore = checklet (document.invio_segnalazione.nome);
}
if ( errore =="false") {
if(document.invio_segnalazione.e_mail.value == "") {
errore = "true";
alert ( "Inserire l'indirizzo e-mail");
document.invio_segnalazione.e_mail.focus();
msgflag="true";
}
} 
if ( errore == "false") {
document.invio_segnalazione.submit()
}
}

var green_number = '800 060 070';

function getGreenNumber() {
document.write(green_number);
}

</script>

				<br />
				<div class="homeTop contentTab" id="tabPrivati" style="display: none;">
					<div class="homeRight"> 
						<div class="ancoraT bckColorOvelayer"> 
							<div class="headerLogin"><span>Login</span></div> 
							<div class="boxLogin"> 
								<form method="post" action="" id="MyBankFormPrivati"> 
									<input type="hidden" value="WEBANK" name="service"/> 
									<input type="hidden" name="Servizio"/> 
									<input type="hidden" value="full" name="loginType"/> 
									<input type="hidden" value="b65d9144-9885-4611-bc90-11a50f25f4f6" name="myBankToken"/> 

									<input name="IDAlleato" value="HOME_PRIV" type="hidden"> 

									<!-- necessario per gestione retry su errori --> 
									<input type="hidden" value="b65d9144-9885-4611-bc90-11a50f25f4f6" name="token"> 
									<!-- necessario per gestione retry su errori --> 


									<div class="form-width"> 
										<div class="rowInput" id="div_username"> 
											<div class="form-item"> 
												<label>User ID</label><br class="clear"> 
												<input id="username" type="text" maxlength="8" size="8" value="" name="username" data-error="" class="uniform-input text" tabindex="3"> 

											</div> 
										</div> 
										<div class="rowInput"> 
											<div class="form-item" id="div_password"> 
												<label>Password</label><span><a href="javascript:;" onclick="openPopOverLayer('layerPasswordRecuperoPriv', 'fixed', 4)" tabindex="5">Hai perso la password?</a></span><br class="clear"> 
												<input type="password" autocomplete="off" maxlength="16" size="10" value="" name="password" id="password" data-error="" class="uniform-input password" tabindex="4"> 
											</div> 
										</div> 

										<div class="rowButton"> 
											<a href="javascript:cancel();" class="uniformBtn greyBtn" ><i class="icon-angle-left icon-before"></i>Annulla</a> 
											<a href="javascript:goWB();" class="uniformBtn flRight" >Entra<i class="icon-angle-right icon-after"></i></a> 
										</div> 
									</div> 
								</form> 
							</div> 
						</div> 
				<!--visual dinamico home dx --> 
						<div class="bannerPromoRight" id=""> 
							<div id=""> 
								<img src="/common/fe/img/pixel_trasp.gif" alt="Lorem ipsum dolor sit"> 
							</div> 
						</div> 
					</div> 
					
					<div class="homeLeft"> 
						<div class="accordion"> 
				<!--VISUAL DINAMICO --> 
							<div id=""> 
								<img src="/common/fe/img/pixel_trasp.gif" alt="Lorem ipsum dolor sit">
							</div> 
				<!--FINE VISUAL DINAMICO --> 
							<div class="accordionMenu"> 
								<div> 
									<h3>Istruzioni di accesso<i class="icon-chevron-up"></i><i class="icon-chevron-down"></i></h3> 
									<div class="accordion-item"> 
										<p>Per accedere a <strong>Webank e concludere il tuo acquisto online tramite circuito MyBank</strong>:</p> 
										<ul> 
											<li>Inserisci <strong>User ID</strong> di 7 cifre e <strong>password</strong></li> 
											<li>clicca su "<strong>Entra</strong>"</li> 
										</ul> 
										<p>Nella pagina successiva dovrai inserire un codice generato dal tuo strumento di Strong Authentication</strong></p> 
									</div> 
								</div> 

								<div> 
									<h3>SERVE AIUTO?<i class="icon-chevron-up"></i><i class="fa icon-chevron-down"></i></h3> 
									<div class="accordion-item"> 
										<p><strong>Hai perso lo user ID?</strong><br/>Per riaverlo manda un <strong>fax</strong> allo <strong>02 43 45 05 99</strong> con nome, cognome e numero di conto corrente.</p> 
										<p><strong>Hai dimenticato la password di I livello?</strong><br/>Il sistema di sicurezza blocca l'accesso <strong>dopo 5 tentativi</strong> non riusciti. Chiamaci al numero verde <strong>800 060 070</strong>: <strong>riattiveremo la tua password iniziale</strong> (se l'hai persa, te la invieremo ancora). Tutto quello che devi fare per entrare ancora in Webank &egrave; <strong>inserirla insieme allo user ID</strong> e infine sostituirla con una nuova password di I livello.</p> 
										<p><strong>L'accesso a Webank &egrave; stato bloccato?</strong><br/> </p> 
									</div> 
								</div> 
							</div> 
						</div> 
					</div> 
					
				</div> 
			</div> 
		</div> 
	</div> 
</div> 

<!--layer smarrito password privati --> 
<div class="layeralert" id="layerPasswordRecuperoPriv" style="display: none;"> 
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layerPasswordRecuperoPriv').dragHandle = new Draggable('layerPasswordRecuperoPriv',{handle: 'handle'}, { scroll: window });"> 
		<i class="icon-user"></i><span class="privati">PRIVATI</span><a onclick="closePopOverLayer('layerPasswordRecuperoPriv')" href="javascript:;" class="closeLayer"><i class="icon-remove-circle"></i></a>
	</div> 
	<div class="body"> 
		<strong>PASSWORD DI I LIVELLO SMARRITA O BLOCCATA</strong> 
		<p>Se hai smarrito, dimenticato o bloccato la password con cui accedi normalmente al sito, devi chiedere la riattivazione della password iniziale di 5 cifre rivolgendoti direttamente alla tua agenzia. 
		Potrai cos&igrave; accedere nuovamente al sito con la password iniziale, che dovrai modificare al successivo primo accesso con una nuova password di primo livello di tua scelta. 
		Puoi invece continuare ad utilizzare la tua Carta Servizi Telematici che contiene i 32 codici della password di secondo livello.</p> 
	</div> 
</div>

<!-- footer -->
<div id="footer">
	<p>Banco BPM S.p.A. - Piazza F. Meda, 4 - 20121 Milano - tel. 0277001 - Rappresentante del Gruppo IVA Banco BPM Partita IVA 10537050964<br>
	Iscrizione al Registro IVASS (01 gennaio 2017 n&deg; D0000563706) - Gruppo Bancario Banco BPM. Tutti i diritti riservati.</p><br />
</div>
<!-- /footer -->
</body>
</html>