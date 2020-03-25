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

<body class="bgfp loginant" onload="javascript: openPopOverLayer('sicurezza','fixed');">
	
	
<!-- BOX LOGIN ANTICIPATA IN OVERLAYER -->		
		<div id="sicurezza" style="display: none;">

			<div class="boxtitle2"></div>
			
			<div class="boxbody logant">
				<div id="contenuti">
				
				<!-- PARAGRAFO INTRODUTTIVO -->
				<p><strong>Benvenuto Lorem Ipsum,</strong><br />di seguito sono elencati tutti gli adempimenti necessari per poter operare con Webank a partire dal 20 dicembre.</p>

				
				<!-- PRIMO BOX -->
				<div class="sicurezzabox">

					<h1><img src="/img/ret/sicurezza_dot_1.gif" alt="" />Modifica password iniziale</h1>
					<table class="text01">
						<tr>
							<td>
								<p>
									Ut quis pede sit amet libero sollicitudin pharetra. Proin <strong>dapibus orci ac urna</strong>.
								</p>
								<p>
									Ut quis pede sit amet libero <strong>sollicitudin pharetra</strong>.
								</p>
								<ul>
									<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
									<li>Lorem ipsum dolor sit amet</li>
									<li>Consectetur adipiscing elit 1,2,3,4.</li>
								</ul>
							</td>
						</tr>
					</table>
					
					<!-- INIZIO CODICE--> 
					
							
					
					<!-- ESEMPIO BOX CON TESTO CHE COMPARE -->
					<br class="clear" />
					<div class="boxedform">
					<p>
						Lorem ipsum dolor sit amet consctetur adipiscing elit. Summa cum laude. Lauro ti sum. Simca sum laude cum lorem.Lorem ipsum dolor sit amet consctetur adipiscing elit. Summa cum laude. Lauro ti sum. Simca sum laude cum lorem.
					</p>
					
					<p id="pToShow" style="display:none; clear:both;">
						Lorem dolor amet consectetur adipiscing elit. Summa cum laude. <a href="#">Lorem dolor</a> amet consectetur adipiscing elit. Summa cum laude. Lorem dolor amet consectetur adipiscing elit. Summa cum laude. Lorem dolor amet consectetur <strong>adipiscing</strong> elit. Summa cum laude.
					</p>
					<div class="tithelp">
							<div class="helpleftblack">Dolor amet lorem ipsum</div>
							<br class="clear"/>
					</div>
					
					<form method="" action="#">
					<table>
						<tr>
							<td class="label">Lorem ipsum dolor<br />(5 amet)</td>
							<td class="field"><input type="password" /></td>
						</tr>
					</table>
					</form>
					<div class="fooform">
						<div class="fooformright">
							<div><a title="certifica in seguito" class="btnformright" href="javascript:schippaCellulareAcc();void(0)">
									<img alt="" src="/img/ret/btn_left_ar.gif"/>
									<span>lorem ipsum</span>
									<img alt="" src="/img/ret/btn_right_ar.gif"/>
								</a>
							</div>
							<br class="clear"/>
						</div>	
					</div>
				</div>	
				<!-- FINE ESEMPIO BOX CON TESTO CHE COMPARE -->
					
						
					<!-- FINE CODICE-->
					
					<br class="clear" />
					<?php virtual ("/librerie/include/commons/form/form_black_060_priv.html"); ?>
					
					
					<div class="boxseparator">&nbsp;</div>
					
				</div>
				
				<!-- SECONDO BOX -->
				
				<!-- ALERT SECONDO BOX -->
				<div style="display: none;top: 560px; left: 85px;" id="layeralert2" class="layeralert2">
					<div class="head"></div>
					<div class="body">
						<div class="important">
							<h3 class="verde">LOREM IPSUM</h3>
							<p>Lorem ipsum dolor sit amet,lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem. Lorem ipsum dolor sit amet,lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem. Lorem ipsum dolor sit amet,lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem. </p>
							<br class="clear"/>
							<form action="#" method="">
								<table>										
										<tr>
											<td class="radio"><input type="radio"/></td>
											<td class="label">Lorem ipsum dolor sit amet sit amet consectetur.</td>
											<td class="radio"><input type="radio"/></td>
											<td class="label">Lorem adipiscing elit adipiscing.</td>
										</tr>										
								</table>
							</form>
							<br class="clear"/>
							<a href="javascript:;" onclick="javascript: closeAlert('layeralert2','sicurezza')" class="btnformright" title="Lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt=""/><span>Lorem ipsum</span><img src="/img/ret/btn_right_ar.gif" alt=""/></a><a href="#1" class="btnformright" title="Lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt=""/><span>Lorem ipsum</span><img src="/img/ret/btn_right_ar.gif" alt=""/></a>
							<br class="clear"/>
						</div>
					</div>
					<div class="foot"></div>
					
				</div>
				<!-- FINE ALERT SECONDO BOX -->
				
			
				<div class="sicurezzabox">
					<h1><img src="/img/ret/sicurezza_dot_2.gif" alt="" />CERTIFICAZIONE DATI PERSONALI</h1>
					<table class="text01">						
								<tr>
									<td>

										<p>
											Ti chiediamo di certificare la tua <strong>identit&agrave; digitale</strong>, ovvero di fornirci alcuni dati che utlizzeremo nell'ambito del
											<strong><a href="">Programma Sicurezza</a>.</strong>
											Si tratta di una serie di iniziative che abbiamo messo in campo per consentirti di utlizzare il tuo 
											<strong>internet banking in tutta sicurezza</strong> ed evitare frodi informatiche. I dati non saranno in alcun modo utilizzati per fini 
											promozionali.
											<br/> <br/>

										</p>
									</td>
								</tr>
					</table>
					<div id="attivazioneDiv" style="display: block">
	<strong>Per procedere alla certificazione, TIENI ACCESO IL CELLULARE!</strong>

	
		<form id="formAttivazione">
			<input type="hidden" name="sms_commerciali" value="no" />
			<input type="hidden" name="check_agreement" value="yes" />
		
			<div id="ErroriValidazione" style="display: none">
				<div class="boxtop"><img border="0" alt="" src="/img/ret/box_msgtop.jpg"/></div>
				<div class="boxtxt"><p class="box_mess"><img border="0" class="dx" alt="" src="/img/ret/img_or_form.gif"/><img border="0" alt="" src="/img/ret/box_attenzione.jpg"/><br/>
					<strong>Errore compilazione dati Cellulare</strong>

					<br/><br/>
					</p>
					<ul class="alert" id="errori.ul"></ul>
					<br class="clear" />
				</div>
				<br class="clear" />
				<div class="boxbottom"><img border="0" alt="" src="/img/ret/box_msgbottom.jpg"/></div>	
			
			</div>
			<div class="tithelp">

				<div class="helpleftblack">Inserisci e certifica il tuo numero di cellulare</div>
				<div align="right" class="BvTableHeaderHelp"><a class="hlp" href="#1">help</a><a href="#1"><img alt="help" src="/img/ret/ico2or_help2.gif" /></a><br class="clear" /></div>
				<br class="clear" />
			</div>
			<table id="tabordini3" class="canvas">
				<tr> 
					<td>Numero cellulare</td>
					<td>
						<input id="prefisso_cell" name="prefisso_cell" size="3" maxlength="3" value="" />&nbsp;
						<input id="numero_cell" name="numero_cell" size="15" maxlength="7" value="" /> &nbsp; &nbsp; 
					</td>

					<td>Operatore</td>
					<td>
						<select id="operatore_cell" name="operatore">

							<option value="TIM">Tim</option>

							<option value="TRE">Tre</option>

							<option value="WIND">Wind</option>

							<option value="VODAF">Vodafone</option>

							<option value="COOP">Coop Voce</option>

							<option value="CONAD">Conad Insim</option>

							<option value="BT">BT Mobile</option>

							<option value="POSTE">Poste Mobile</option>

							<option value="UNO">Uno Mobile</option>

							<option value="MTV">Mtv Mobile</option>

							<option value="FASTWEB">Fastweb Mobile</option>

							<option value="DAILY">Daily Telecom Mobile</option>

							<option value="TELEPASS">Telepass Mobile</option>

							<option value="AMOBILE">A-Mobile</option>

							<option value="ALTRO">Altro...</option>

						</select>
					</td>

				</tr> 
			</table>
			<div class="fooform">
				<div class="fooformright">
					<div>
						<a title="certifica ora" class="btnformright" href="javascript:generaOTPAcc();void(0)">
							<img alt="" src="/img/ret/btn_left_ar.gif"/>
							<span>certifica ora</span>
							<img alt="" src="/img/ret/btn_right_ar.gif"/>

						</a>
					</div>

					<div>
						<a title="certifica in seguito" class="btnformright" href="javascript:schippaCellulareAcc();void(0)">
							<img alt="" src="/img/ret/btn_left_ar.gif"/>
							<span>certifica in seguito</span>
							<img alt="" src="/img/ret/btn_right_ar.gif"/>
						</a>

					</div>
					<br class="clear"/>
				</div>	
			</div>
		</form>
 

		<div id="formCertificazioneLoading" style="display: none">		
			<form id="formCertificazione" onsubmit="">
				<p>
					Ti abbiamo inviato al numero di telefono indicato un sms con il codice di controllo necessario per completare la certificazione.
					<a href="javascript:unlockFields('formAttivazione');javascript:document.location.href=cgi_script+'/loginanticipata/welcomePage.do';void(0);">Vuoi correggere il numero?</a><br/>

					Inserisci il codice nel campo sotto.
				</p>
				<div class="fooform">
					<div class="fooformright">
						<div id="btnSoftSwitch">
							<a class="btnevid1" href="javascript:void(0);" onclick="javascript:schippaCellulareSoftAcc();void(0)" >
								<img alt="" src="/img/ret/btn_left_sm1.gif"/>
								<span>Non hai ricevuto l'sms?</span>
								<img alt="" src="/img/ret/btn_right_sm1.gif"/>

							</a>
						</div>
					</div>
				</div>
				<br class="clear" />
				<div class="tithelp">
					<div class="helpleftblack">Inserisci il codice di controllo&nbsp;&nbsp;<span id="mostraCodice"></span></div>
					<br class="clear"/>

				</div>				
				<table id="" class="canvas">
					<tr> 
						<td width="100" class="right">Codice di controllo</td>
						<td width="400" class="left">
							<input type="text" class="medio" name="cod_controllo_cell" id="cod_controllo_cell" size="40"/>
						</td>
					</tr>
				</table>

			</form>
			<div class="fooform" id="formCertificazioneDisplay">
				<div class="fooformright">
					<a title="certifica" class="btnformright" href="javascript:void(0);" onclick="javascript:certificaCellulareAcc();void(0)">
						<img alt="" src="/img/ret/btn_left_ar.gif" />
						<span>certifica</span>
						<img alt="" src="/img/ret/btn_right_ar.gif" />
					</a>

				</div>
			</div>
		</div>
	<br class="clear" />
</div>
	<br /><br />								
	<div id="attivazioneDivMail" style="display: block">
		<form id="formAttivazioneEmail">
			<div class="tithelp">
				<div class="helpleftblack">Certifica il tuo indirizzo email</div>
				<div align="right" class="BvTableHeaderHelp"><a class="hlp" href="#1">help</a><a href="#1"><img alt="help" src="/img/ret/ico2or_help2.gif" /></a><br class="clear" /></div>
				<br class="clear" />
			</div>
			<table id="tabordini3" class="canvas">
				<tr>

					<td>indirizzo email</td>
					<td>
						<input id="newEmailAddress" name="newEmailAddress" type="text" size="39" value="MICHELE.GUIDOTTI@STUDIOGUIDOTTI.IT" />
					</td>
				</tr>
			</table>
		</form>
		
		<div id="formAttivazioneEmailLoading" class="fooform">

			<div id="formAttivazioneEmailDisplay" class="fooformright">
				<div>
					<a title="certifica ora" class="btnformright" href="javascript:generaOTPMailAcc();void(0)">
						<img alt="" src="/img/ret/btn_left_ar.gif"/>
						<span>certifica ora</span>
						<img alt="" src="/img/ret/btn_right_ar.gif"/>
					</a>
				</div>

				<div style="display:block">
					<a title="certifica in seguito" class="btnformright" href="javascript:skipEmailAcc();void(0)">
						<img alt="" src="/img/ret/btn_left_ar.gif"/>
						<span>certifica in seguito</span>
						<img alt="" src="/img/ret/btn_right_ar.gif"/>
					</a>
				</div>
				<br class="clear"/>

			</div>	
		</div>
	
		<div id="divCertificazioneEmail" style="display:none; float:left;">			
			<p id="testoSoloMail" style="display:none">
				Ti abbiamo inviato via E-MAIL un codice di controllo necessario per completare la certificazione. 
			</p>
			<p id="testoMailSms" style="display:none">
				Ti abbiamo inviato via SMS e E-MAIL i codici di controllo necessari per completare la certificazione. 
			</p>
			<div class="tithelp">
				<div class="helpleftblack" id="insSoloMail" style="display:none">Inserisci il codice di controllo</div>

				<div class="helpleftblack" id="insMailSms" style="display:none">Inserisci i codici di controllo</div>
				<br class="clear"/>
			</div>

			<form id="formCertificazioneEmail" onsubmit="">
				<table id="" class="canvas">
					<tr> 
						<td width="100" class="right">Codice Email</td>
						<td width="400" class="left">

								<input type="text" class="medio" name="emailOtp" id="emailOTP" size="40"/>
						</td>
					</tr>
				</table>
				<table id="tableOtpSms" class="canvas" style="display:none;">
					<tr> 
						<td width="100" class="right">Codice Sms</td>
						<td width="400" class="left">
							<input type="text" class="medio" name="smsOtp" id="smsOTP" size="40"/>	
						</td>

					</tr>
				</table>
			</form>
			<div class="fooform" id="formCertificazioneEmailLoading" >
				<div class="fooformright">

				<div id="formCertificazioneEmailDisplay"><a title="certifica" class="btnformright"  href="#" onclick="javascript:certificaEmailAcc();void(0)" ><img alt="" src="/img/ret/btn_left_ar.gif"/><span>certifica</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a></div>
				<br class="clear"/>
				</div>	
			</div>

									
		</div>		
	</div>			
				</div>			
			
					<div class="boxseparator">&nbsp;</div>
				
				
				<!-- TERZO  BOX -->
				<div class="sicurezzabox">
					<h1><img src="/img/ret/sicurezza_dot_3.gif" alt="" />Adempimenti di legge e informative</h1>
					
					<!-- CONTENITORE DELLA DICHIARAZIONE -->
					<div class="dichiarazione">
						<table class="text01">
							<tr>
								<td>
									<h3 class="squaredotted">Consenso al trattamento dei dati personali</h3>
									<p>ai sensi dell'art. 23 del decreto legislativo 30 giugno 2008 n&deg; 196 codice in materia di protezione dati personali<br /><br />Con riferimento all'<a href="#">informativa trattamento dati personali</a> inviata via posta con le comunicazioni obbligatorie, le chiediamo il Suo consenso al trattamento dei dati personali.<br /><br />&Eacute; sufficiente che barri le seguenti caselle se desidera ch i suoi dati siano:<br /><br />Utilizzati per l'invio, da parte della Banca, di comunicazioni concernenti l'offerta di prodotti o servizi del Gruppo Bipiemme e per elaborazione di studi e di ricerche di mercato</p>
								</td>
							</tr>
							<tr>
								<td>
									<form method="" action="">
										<input type="radio" /><label>do il consenso</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"><label>nego il consenso</label>
								</td>
							</tr>
							<tr>
								<td>
									<br /><p>Utilizzati per l'invio, da parte della Banca, di comunicazioni concernenti l'offerta di prodotti o servizi di soggetti terzi</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="radio" /><label>do il consenso</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"><label>nego il consenso</label>
								</td>
							</tr>
							<tr>
								<td>
									<br /><p>Cominicati a societ&agrave; terze ai fini di promozione di prodotti e servizi e ricerche di mercato</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="radio" /><label>do il consenso</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"><label>nego il consenso</label>
									</form>
								</td>
							</tr>
						</table>
						
						<div class="fooform">
						<div class="fooformtop"></div>
				<div class="fooformright">
					<div>
						<a title="certifica ora" class="btnformright" href="javascript:generaOTPAcc();void(0)">
							<img alt="" src="/img/ret/btn_left_ar.gif"/>
							<span>certifica ora</span>
							<img alt="" src="/img/ret/btn_right_ar.gif"/>

						</a>
					</div>

					<div>
						<a title="certifica in seguito" class="btnformright" href="javascript:schippaCellulareAcc();void(0)">
							<img alt="" src="/img/ret/btn_left_ar.gif"/>
							<span>certifica in seguito</span>
							<img alt="" src="/img/ret/btn_right_ar.gif"/>
						</a>

					</div>
					<br class="clear"/>
				</div>	
			</div>
					</div>

										
					
					<div class="dichiarazione">
					<div class="filetto_tratteggiato"><img src="/img/ret/1px.gif" /></div>
						<table class="text01">
							<tr>
								<td>
									<h3 class="squaredotted">Normativa antiriciclaggio</h3>
									<p>			
				Ai sensi della vigente normativa antiriciclaggio (D.Lgs. 231/07) il Cliente è obbligato a fornire alla Banca alcune dichiarazioni ed informazioni. 
				Ti ricordiamo che il rilascio di false informazioni od omissioni <strong>comporta conseguenze anche di natura penale</strong>. Prima di procedere ti invitiamo a prendere visione dell'<a href="javascript:openInfoPrivacyAdeguataVerifica();void(0)">Informativa sul trattamento dei dati personali</a>.
				I dati forniti di seguito devono ritenersi integrati (sempre per le finalità di cui alla normativa antiriciclaggio) con i dati forniti alla Banca in relazione ai rapporti bancari, finanziari e di investimento.				
			</p>
			<p>			
				Per fornire ulteriori o diverse dichiarazioni, devi chiamare il numero verde 800 060 070. 				
			</p>

								</td>
							</tr>						
						</table>
						<div class="tithelp">
					<div class="helpleftblack">Professione svolta</div>					
					<br class="clear" /></div>
					<div>
						<table class="canvas">
							<tr> 
								<td class="right" width="100">Professione</td>
								<td><strong>Dato già fornito a Wetrade</strong></td>
								<td>Settore</td>
								<td><strong>Dato già fornito a Wetrade</strong></td>
							</tr> 	
						</table>
					</div>					
					<br/>
					<div class="tithelp">
						<div class="helpleftblack">Natura e scopo dei rapporti con Webank</div>	
						<br class="clear"/>
					</div>
					<div>
						<table class="canvas">
							<tr> 
								<td class="right" width="100">Natura e scopo dei rapporti</td>
								<td><strong>Dato già fornito a Wetrade</strong></td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr> 	
						</table>
					</div>
					<br/>
					<div class="tithelp">
					<div class="helpleftblack">Titolare Effettivo dei rapporti con Webank						
						<span class="tooltip">
							<a href="#1" onmouseover="nascondi('lampa1');" onmouseout="vedi('lampa1');">
								<img id="lampa1" class="lampa" src="/img/ret/lampa_off.gif"/>
								<span>
									<span>
										<span>
												<ul>

													<li>
														Per "titolare effettivo" si  intende la persona fisica per conto della quale &egrave; realizzata un'operazione o un'attivit&agrave;, in altre parole la persona destinataria ultima degli effetti delle operazioni finanziarie o il beneficiario economico delle predette operazioni.
													</li>
													<li>
														I titolari effettivi possono essere pi&ugrave; di uno, per esempio in caso di rapporto cointestato. Se ciascuno dei cointestatari agisce per conto proprio, ognuno deve ritenersi "titolare effettivo" ed &egrave; tenuto dunque a dichiararlo a Webank.
													</li>

												</ul>
										</span>
									</span>
								</span>
							</a>
						</span>
					</div>
					
					<br class="clear"/>
					</div>
					<div> 
					<table class="canvas">
						<tr>	
							<td>
								<div class="nobor3">
									<input type="radio" class="nobor3" value="titolare" name="radiobutton" id="titolare"/>   Dichiaro di essere il Titolare Effettivo ai sensi del D.Lgs. 231/07 e di agire esclusivamente per mio conto.
								</div>
								<br class="clear" />
						    	<div class="nobor3">

						    		<input type="radio" class="nobor3" value="nonTitolare" name="radiobutton" id="nonTitolare"/> Dichiaro di <strong>NON</strong> essere il Titolare Effettivo ai sensi del D.Lgs. 231/07 e di agire per conto di terzi.
						    	</div>
						    </td>
						</tr>
					</table>
					</div>
					
					<div class="fooform">

						<div class="fooformtop"></div>
						<div class="fooformright">					
							<div>
								<a title="conferma in seguito" class="btnformright" href="#1" onclick="AdeguataVerifica();void(0);">
									<img alt="" src="/img/ret/btn_left_ar.gif"/>
									<span>dichiara ora</span>
									<img alt="" src="/img/ret/btn_right_ar.gif"/>
								</a>
							</div>

							<div style="display: block">
								<a title="conferma" class="btnformright" href="#1" onclick="SkipAdeguataVerifica();void(0);">
									<img alt="" src="/img/ret/btn_left_ar.gif"/>
									<span>dichiara in seguito</span>
									<img alt="" src="/img/ret/btn_right_ar.gif"/>
								</a>
							</div>
							<br class="clear"/>

						</div>	
					</div>
					</div>
					
					<div class="dichiarazione">
					<div class="filetto_tratteggiato"><img src="/img/ret/1px.gif" /></div>
						<table class="text01">
							<tr>
								<td>
									<h3 class="squaredotted">Segnalazione perdite in derivati</h3>
									<p>
										Lorem ipsum dolor sit amet, lorem ipsum dolor sit <strong>amet dolor sit amet</strong> Lorem ipsum dolor sit amet, lorem ipsum dolor sit <strong>amet dolor sit amet</strong>:
									</p>
									<ul>
										<li>1234567890123456</li>
										<li>1234567890123456</li>
										<li>1234567890123456</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>
									<form id="">
										<input id="" name="" value="" type="checkbox" />&nbsp;<label>Prendo visione delle modifiche contrattuali per tutti i rapporti sopra elencati</label>
									</form>
								</td>
							</tr>
							
						</table>
						
						<div class="fooform">
						<div class="fooformtop"></div>
				<div class="fooformright">
					<div>
						<a title="certifica ora" class="btnformright" href="javascript:generaOTPAcc();void(0)">
							<img alt="" src="/img/ret/btn_left_ar.gif"/>
							<span>certifica ora</span>
							<img alt="" src="/img/ret/btn_right_ar.gif"/>

						</a>
					</div>

					<div>
						<a title="certifica in seguito" class="btnformright" href="javascript:schippaCellulareAcc();void(0)">
							<img alt="" src="/img/ret/btn_left_ar.gif"/>
							<span>certifica in seguito</span>
							<img alt="" src="/img/ret/btn_right_ar.gif"/>
						</a>

					</div>
					<br class="clear"/>
				</div>	
			</div>
					</div>
					
					<div class="dichiarazione">
					<div class="filetto_tratteggiato"><img src="/img/ret/1px.gif" /></div>
						<table class="text01">
							<tr>
								<td>
									<h3 class="squaredotted">Prendi visione dell'INFORMATIVA MIFID</h3>
									<p>
										<strong>MIFID</strong>, la Normativa Europea sui mercati e sui servizi di investimento, ha introdotto nel <strong>2007</strong>
										nuove regole per rendere <strong>più trasparenti</strong> i rapporti con gli investitori.<br />
										A tal fine, <strong>è necessario che tu prenda visione del documento MIFID</strong> che contiene una serie di dati
										e informazioni sulla banca e sui rischi generali degli investimenti.<br />						
										<strong>Prendi visione</strong> dell'<a href="javascript:openMIFID();void(0)">Informativa MIFID.</a>
									</p>
								</td>
							</tr>
							<tr>
								<td>
									<form id="formAderisciMifid" action="">
										<input name="aderiscoPoi" value="" type="hidden" />						
										<input id="checkBoxMifid" name="checkMifid" value="S" disabled="disabled" type="checkbox" />&nbsp;<label>Dichiaro che la Banca mi ha reso disponibile l'Informativa MIFID che riporta anche una sezione dedicata ai principali rischi sugli investimenti.</label>
									</form>
								</td>
							</tr>
							
						</table>
						
						
						<div class="fooform">
						<div class="fooformtop"></div>
				<div class="fooformright">
					<div>
						<a title="certifica ora" class="btnformright" href="javascript:generaOTPAcc();void(0)">
							<img alt="" src="/img/ret/btn_left_ar.gif"/>
							<span>certifica ora</span>
							<img alt="" src="/img/ret/btn_right_ar.gif"/>

						</a>
					</div>

					<div>
						<a title="certifica in seguito" class="btnformright" href="javascript:schippaCellulareAcc();void(0)">
							<img alt="" src="/img/ret/btn_left_ar.gif"/>
							<span>certifica in seguito</span>
							<img alt="" src="/img/ret/btn_right_ar.gif"/>
						</a>

					</div>
					<br class="clear"/>
				</div>	
			</div>
					</div>
					
					<div class="boxseparator">&nbsp;</div>
				</div>
				</div>
			</div>
			<div class="boxend"></div>
		</div>
		
<!-- FINE BOX SICUREZZA IN OVERLAYER -->		





<!-- PAGINA STANDARD (SOSTITUIRE CON QUALSIASI COSA)-->
<div id="testa" style="text-align: center;">
	     <img src="/img/ret/str_home_inserimento.gif" />
</div>
<!-- FINE PAGINA STANDARD (SOSTITUIRE CON QUALSIASI COSA NEL BODY) -->

</body>
</html>