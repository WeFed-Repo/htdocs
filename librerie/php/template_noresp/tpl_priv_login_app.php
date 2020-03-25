
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
<head>
	<title>Webank - la banca online dal 1999</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Language" content="it" />

	<link href="/css/ret/priv_login2.css" rel="stylesheet" type="text/css" media="screen" />
	<script type="text/javascript" src="/wscmn/js/jquery.js"></script>
	<script type="text/javascript" src="/wscmn/js/priv_generic.js"></script>
	<script src="/wscmn/js/ret/priv_login.js" type="text/javascript"></script>
	
	<meta name="script" http-equiv="Content-Script-Type" content="text/javascript" />
	<meta name="script" http-equiv="Content-Style-Type" content="text/css" />

	<!-- FINE CODICE-->
	<script type="text/javascript"> 
		var currentTab = 'nav_priv_wbx_myhome';
	</script>
	
</head>
<body> 
<div class="page100">
	<div id="testa"> 
	
		<div id="header"> 
    		<div id="ctnloghi">
    			<img src="/img/ret/logo_webank.gif" alt="Webank.it" title="Webank.it" />
   			</div>		
   			
   			<div class="dati">
				Benvenuto, 
				<span class="bolt"> </span>
				<br>
				Data ultimo accesso: 23/03/2016 - h. 11:20:04
				<br>
				
				<a class="esci" href="/webankpri/wbOnetoone/chiudi_servizio.jsp?cf=0.9818076950252488">
					<img src="/img/ret/btn_esci.gif" alt="Esci" title="Esci">
				</a>
			</div>
			<br class="clear">
		</div>
		<br class="clear" />
	</div>
		
		
	<div id="content">
		<div id="contenuti2"> 											
			


			<div id="avvisosicurezza">
				<img title="Novit&agrave; Programma Sicurezza" alt="Novit&agrave; Programma Sicurezza" src="/img/ret/visual_psl.gif?a=0"/>
			</div>

			<script type="text/javascript" src="/functions/onetoone/testata.js">

			</script>

			<form name="insertOtp" >		
			<input type="hidden" name="BV_UseBVCookie" value="Yes" />
			<input type="hidden" name="step" value="ok" />
			<input type="hidden" name="invia" value="validate" />
			<div class="box6">
				<div class="box6b">
					
					<!-- Testo introduttivo -->
					<div>
						<p id="tokenIntro">
							Gentile Cliente, per motivi di sicurezza, ti chiediamo di autorizzare l'operazione utilizzando la tua <strong>App di sicurezza</strong>.
						</p>

						<div id="token" class="aButtoncons formCenteredBtn">
							<p>Non hai visualizzato la notifica push?</p>
							<a href="javascript:;" class="aButton" id=""><span>Usa funzione genera token</span></a>
						</div>
					</div>
					<!-- Fine testo introduttivo -->
					<hr>
					
					<!-- Attesa Push -->
					<div id="tokenPush">
						<div class="formotp">
							<div class="row-fluid otpdesc">
								<div class="span12 center">
									<span>Fai tap sulla notifica di richiesta autorizzazione<br>che hai ricevuto sulla tua App di sicurezza</span>
									<div class="center"><img src="/wscmn/fe/img/token_app_genera.png"></div>
								</div>
								<div class="row-fluid otpconsole">
									<div class="span12 paddTopMedium">
										<a href="#1" class="openinfo" id="infoOtpOpener">Problemi con l'operazione?</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Fine attesa Push -->
					<hr>

					<!-- TOKEN ONLINE -->
					<div id ="tokenOnline" >
						<div class="formotp">
							<div class="formGeneric">
											
									<!--RIGA DIVISA IN QUATTRO CAMPI -->
									<div class="row-fluid otpdesc">
										<div class="span4">
											<span class="introtext"><strong>1.</strong> Apri l'app e scegli "Genera codice Token".</span>
											<div class="center"><img src="/wscmn/fe/img/token_app_genera.png"></div>
										</div>
										<div class="span4">
											<span class="introtext"><strong>2.</strong> Inserisci il <span data-tooltip="Lorem ipsum dolor sit amet consectetur adipiscing elit" class="txthelp">codice PIN</span> e conferma oppure utilizza il <span data-tooltip="Lorem ipsum dolor sit amet consectetur adipiscing elit" class="txthelp">fingerprint</span>.</span>
											<div class="center"><img src="/wscmn/fe/img/token_app_insert.png"></div>
										</div>
										<div class="span4">
											<span class="introtext"><strong>3.</strong>  Inserisci qua il codice Token generato</span>
											<div class="center"><img src="/wscmn/fe/img/token_app_codice.png"></div>
										</div>
									</div>
									<div class="row-fluid">
										<div class="span8">
											&nbsp;
										</div>
										<div class="span4 otpGroup">
											<label for="codiceotp" class="nomefield">Codice Token</label>
											<input id="codiceotp" type="text" maxlength="11">
										</div>
									</div>
								
								<div class="row-fluid otpconsole">
									<div class="span6 paddTopMedium">
										<a href="#1" class="openinfo" id="infoOtpOpener">Problemi con l'operazione?</a>
									</div>
									<div class="span6">	
										<div class="btnc aButtoncons">
											<div class="aButtonconsRight">
												<a href="javascript:;" class="aButton" title="Torna a token online" id="tokenOnlineBack"><span>Torna a token online</span></a>
												<a href="javascript:;" class="aButton" title="Accedi" id="tokenAccedi"><span>Accedi</span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- FINE TOKEN ONLINE -->
					
				</div>
			</form>
		</div>
	</div>	
	<br class="clear" />
	<div id="footer">
		<p>Banca Popolare di Milano Società Cooperativa a r.l. Piazza F. Meda, 4 - 20121 Milano - tel. 02 77001 - P.IVA 00715120150 Gruppo Bipiemme. Tutti i diritti riservati.</p>
	</div>	
</div>
	<iframe id="iframe" height="10" src="" frameborder="0" width="10" scrolling="no"></iframe>
</body>
</html>


