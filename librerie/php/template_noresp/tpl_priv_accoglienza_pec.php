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

<body class="bgfp obs" >
<!-- BOX SICUREZZA IN OVERLAYER -->		
		<div id="sicurezza">
			<div class="boxtitle">
				<div class="phonebox"><p>Servizio clienti nazionale<span>800 060 070</span></p></div>
				<p>Lorem ipsum <span>Dolor Sit</span> amet consectetur <span>Elit</span></p>
			</div>
			<div class="boxbody">
				<div id="contenuti">
				
				
					<!-- CAMBIO PASSWORD INIZIALE -->
					<div class="sicurezzabox">
						<h1>Cambia la password iniziale</h1>
						<p>Per motivi di sicurezza ti chiediamo di modificare la password iniziale.</p>
						<!-- PEC: PASSWORD SEGNAPOSTO -->
						<div class="formGeneric">
							<form class="formCentered" autocomplete="off">
								<fieldset class="row">
									<label class="nomefield">Password iniziale:</label>
									<input type="password" placeholder="5 cifre" maxlength="5" pattern="[0-9]*">
									<span class="text">digita la password iniziale che usi adesso</span>
								</fieldset>
								<fieldset class="row">
									<label class="nomefield">Digita la NUOVA PASSWORD:</label>
									<input type="password" placeholder="min 8 max 16 caratteri" maxlength="16">
									<span class="text">la nuova password deve avere minimo 8 - massimo 16 caratteri, e almeno una cifra numerica</span>
								</fieldset>
								<fieldset class="row">
									<label class="nomefield">Conferma la NUOVA PASSWORD:</label>
									<input type="password" placeholder="" maxlength="16">
									<span class="text">digita di nuovo la password</span>
								</fieldset>
							</form>
						</div>
						<div class="aButtoncons formCentered">
							<a class="aButton"><span>Conferma</span></a>
						</div>
					</div>
					<!-- FINE PEC PASSWORD-->
					
					
					<div class="sicurezzabox">
						<h1>Scegli la tua password di I livello</h1>
						<p>Crea la tua password di accesso definitiva. Potrai utilizzarla dal prossimo accesso al sito. </p>
						<!-- PEC: SCEGLI PASSWORD ERRORE -->
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
						<div class="boxesito attenzione">
								<div class="middle"><span class="imgCont"></span>
								<div class="text">
									<p class="noPaddbottom"><strong>Lorem ipsum dolor sit amet</strong><br>
									At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
									et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
									</div>
								</div>
							</div>
						<!-- FINE PEC: SCEGLI ERRORE -->
						<!-- PEC: PASSWORD SEGNAPOSTO -->
						<div class="formGeneric">
							<form class="formCentered" autocomplete="off">
								<fieldset class="row">
									<label class="nomefield">Scegli la NUOVA PASSWORD:</label>
									<input type="password" placeholder="min 8 max 16 caratteri" maxlength="16">
									<span class="text">la nuova password deve avere minimo 8 massimo 16 caratteri, e almeno una cifra numerica</span>
								</fieldset>
								<fieldset class="row">
									<label class="nomefield">Conferma la NUOVA PASSWORD:</label>
									<input type="password" placeholder="" maxlength="16">
									<span class="text">digita di nuovo la password che hai scelto</span>
								</fieldset>
							</form>
						</div>
						<div class="aButtoncons formCentered">
							<a class="aButton"><span>Conferma</span></a>
						</div>
						<!-- FINE PEC PASSWORD-->
						<!-- PEC: CONFERMA -->
						<div class="boxesito positivo">
								<div class="middle"><span class="imgCont"></span>
								<div class="text">
									<p class="noPaddbottom"><strong>Lorem ipsum dolor sit amet</strong><br>
									At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
									et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
									</div>
								</div>
							</div>
							
							<div class="boxesito negativo">
								<div class="middle"><span class="imgCont"></span>
								<div class="text">
									<p class="noPaddbottom"><strong>Lorem ipsum dolor sit amet</strong><br>
									At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
									et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
									</div>
								</div>
							</div>
					</div>
					<!-- FINE PEC: CONFERMA -->
					
					
					<div class="sicurezzabox">
						<h1>Certifica i tuoi recapiti</h1>
						<p>Ti chiediamo di certificare la tua identità digitale, così potrai tutelare ulteriormentela sicurezza del tuo conto con il <a href="#">Programma Sicurezza</a>.</p>
						<!-- CERT. CELLULARE -->
						<div class="formGeneric">
							<form autocomplete="off">
								<fieldset class="first">
									<div class="fieldWrap" style="width:30%">
										<label class="nomefield">Prefisso int.:</label>
										<input type="text" placeholder="++0039" maxlength="7">
									</div>
									<div class="fieldWrap" style="width:20%">
										<label class="nomefield">Prefisso:</label>
										<input type="text" placeholder="" maxlength="3">
									</div>
									<div class="fieldWrap" style="width:49%">
										<label class="nomefield">Numero di cellulare:</label>
										<input type="text" placeholder="" maxlength="16" pattern="[0-9]*">
									</div>
								</fieldset>
								<fieldset>
									<label class="nomefield">Operatore:</label>
									<select>
										<option value="-">-- Seleziona operatore --</option>
									</select>
								</fieldset>
								<fieldset id="smsCode" style="display:none">
									<label class="nomefield">Inserisci il codice di controllo che ti abbiamo inviato via SMS al numero che hai indicato:</label>
									<input type="text" placeholder="Scrivi qui il codice che ti abbiamo inviato" maxlength="16">
									<span class="text">Non hai ricevuto il codice? <a href="#">Chiedine un altro</a></span>
								</fieldset>
							</form>
						</div>
						<div class="aButtoncons formCentered">
							<a class="aButton" onclick="$('#smsCode').show();$('#smsCert').css('display','');$(this).hide()"><span>Conferma</span></a>
							<a class="aButton" id="smsCert" style="display:none"><span>Certifica</span></a>
						</div>
						<!-- FINE CERT. CELLULARE -->
						
						
						<!-- CERT. EMAIL -->
						<div class="formGeneric">
							<form class="formCentered" autocomplete="off">
								<fieldset class="row">
									<label class="nomefield">Certifica il tuo indirizzo email:</label>
									<input type="text">
								</fieldset>
								<fieldset class="row" id="emailCode" style="display:none">
									<label class="nomefield">Inserisci il codice di controllo che ti abbiamo inviato all'indirizzo email che hai indicato:</label>
									<input type="text" placeholder="Scrivi qui il codice che ti abbiamo inviato" maxlength="16">
									<span class="text">Non hai ricevuto il codice? <a href="#">Chiedine un altro</a></span>
								</fieldset>
							</form>
						</div>
						<div class="aButtoncons formCentered">
							<a class="aButton" onclick="$('#emailCode').show();$('#emailCert').css('display','');$(this).hide()"><span>Conferma</span></a>
							<a class="aButton" id="emailCert" style="display:none"><span>Certifica</span></a>
						</div>
						<!-- FINE CERT. EMAIL -->
					</div>
					
					<div class="sicurezzabox">
						<h1>Adempimenti di legge e informative</h1>
						<h2>MIFID</h2>
						<p>MIFID, la Normativa Europea sui mercati e sui servizi di investimento, ha introdotto nel 2007 nuove regole per rendere più trasparenti i rapporti con gli investitori. A tal fine, è necessario che tu prenda visione del seguente documento:</p>
						<!-- MIFID -->
						<div class="formGeneric">
							<form autocomplete="off">
								<fieldset class="row">
									<label><input type="checkbox">Dichiaro che la Banca mi ha reso disponibile l'<a href="#">Informativa MIFID</a> che riporta una sezione dedicata ai principali rischi sugli investimenti</label>
								</fieldset>
							</form>
						</div>
						<div class="aButtoncons formCentered">
							<a class="aButton"><span>Conferma</span></a>
						</div>
						<!-- FINE MIFID -->
						
						
						
						<h2>Questionario MIFID</h2>
						<p>Compila il questionario MiFID per definire il tuo livello di esperienza e conoscenza in materia di investimenti</p>
						<!-- QUEST. MIFID -->
						<div class="informativa">
							<p>
								In esecuzione alla Normativa MiFID è stato predisposto un questionario, a cui ti chiediamo di rispondere, per consentirci di verificare il tuo livello di esperienza e conoscenza. Tra le diverse classificazioni previste dalla normativa Webank classifica "al dettaglio" la propria clientela. Al riguardo ti ricordiamo che la protezione dell'Investitore esige una collaborazione attiva da parte del Cliente. Per questo motivo richiamiamo la tua attenzione sull'importanza dell'accuratezza delle risposte fornite. Il questionario si compone di domande relative alla tua esperienza/conoscenza sugli strumenti finanziari e sui servizi di investimento e va compilato in ogni sua parte (non sono ammesse risposte parziali). In caso di rapporto cointestato, le risposte si intendono fornite congiuntamente da tutti gli intestatari. Una volta compilato il questionario, ti sarà mostrato il tuo livello di esperienza e conoscenza in materia di investimenti sulla base dei profili definiti dalla Banca. 
							</p>
						</div>
						<div class="aButtoncons formCentered">
							<a class="aButton"><span>Prosegui</span></a>
						</div>
						
						<h2>Informativa trattamento dei dati personali</h2>
						<p>Webank ha recepito la nuova informativa in tema di trattamento dei dati personali del Gruppo Banca Popolare di Milano. L'introduzione e la presa visione dell'informativa presentata non apporteranno alcuna modifica a quanto da te precedentemente espresso relativamente al trattamento dei dati personali a fini commerciali.</p>
						<!-- INFORMATIVA -->
						<div class="formGeneric">
							<form autocomplete="off">
								<fieldset class="row">
									<label><input type="checkbox">Dichiaro di aver preso visione della nuova <a href="#">informativa sul trattamento dei dati personali</a></label>
								</fieldset>
							</form>
						</div>
						<div class="aButtoncons formCentered">
							<a class="aButton"><span>Conferma</span></a>
						</div>
						<!-- FINE INFORMATIVA -->
						
						<h2>Variazione condizioni "Estratto conto e contabili online"</h2>
						<p>A gennaio 2010, i documenti oggetto del servizio Estratto Conto e contabili online potranno essere consultati entro 24 mesi dal giorno in cui sono resi disponibili al cliente, nell'area privata del sito. Dopo tale data, i documenti saranno eliminati dall'archivio.<br>
						Il cliente ha tuttavia facoltà di richiedere alla banca, per iscritto, i documenti relativi a estratti conto corrente e deposito titoli.</p>
						<!-- CONDIZIONI -->
						<div class="formGeneric">
							<form sautocomplete="off">
								<fieldset class="row">
									<label><input type="checkbox">Prendo visione della variazione contrattuale (Vedi "Sezione IV - art. 2 - Caratteristiche principali del servizio Estratto conto e contabili online" )</label>
								</fieldset>
							</form>
						</div>
						<div class="aButtoncons formCentered">
							<a class="aButton"><span>Conferma</span></a>
						</div>
						<!-- FINE CONDIZIONI -->
						
						<h2>Dichiarazione sulle operazioni con passivit&agrave; potenziale</h2>
						<p>Il cliente dichiara di aver ricevuto e scaricato su supporto durevole la comunicazione relativa alla "Proposta di Modifica Unilaterale del Contratto" inerente le posizioni aperte e scoperte su operazioni con passività potenziali. La Proposta s'intenderà tacitamente accettata in mancanza di esercizio del diritto di recesso entro 60 giorni dal ricevimento della predetta comunicazione. </p>
						<!-- OPERAZIONI -->
						<div class="formGeneric">
							<form sautocomplete="off">
								<fieldset class="row">
									<label><input type="checkbox">Prendo visione delle modifiche contrattuali</label>
								</fieldset>
							</form>
						</div>
						<div class="aButtoncons formCentered">
							<a class="aButton"><span>Conferma</span></a>
							<br class="clear">
							<a href="#">voglio confermare in seguito</a>
						</div>
						<!-- FINE OPERAZIONI -->
						
						<h2>Normativa antiriciclaggio</h2>
						<p>Per la vigente normativa antiriciclaggio (D.Lgs. 231/07) sei tenuto a fornire alla Banca alcune dichiarazioni e informazioni.<br>
						Ti ricordiamo che il rilascio di false informazioni od omissioni comporta conseguenze anche di natura penale. I dati forniti di seguito devono ritenersi integrati con i dati forniti alla Banca in relazione ai rapporti bancari, finanziari e di investimento.</p>
						<ul class="pdfLink">
							<li><a href="#">Informativa sul trattamento dei dati personali</a></li>
						</ul>
						<br class="clear">
						<!-- ANTIRICICLAGGIO -->
						<div class="formGeneric">
							<form>
								<fieldset class="row tolltipclick">
									<span class="autosize">Per questa normativa sei tenuto a fornire alla Banca alcune informazioni obbligatorie</span>
									<span class="iconahelp">
									<span class="closed">
												<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti5">
													<span class="uniqTooltipPos">
														<a href="javascript:;"><img src="/img/ret/ico2or_help2.gif" class="help"></a>
														<span class="uniqTooltipInnerHTML">
															<p>Ai sensi della normativa antiriciclaggio (D.Lgs. 231/07) il Cliente è obbligato a fornire alla Banca alcune dichiarazioni e informazioni.Ti ricordiamo che il rilascio di false informazioni od omissioni comporta conseguenze anche di natura penale. I dati forniti di seguito devono ritenersi integrati (sempre per le finalità di cui alla normativa antiriciclaggio) con i dati forniti alla Banca in relazione ai rapporti bancari, finanziari e di investimento.								</p>
														</span>
													</span>
												</span>
									</span>
									</span>
									<span class="underline">Informativa trattamento dati personali</span>
								</fieldset>
								<fieldset class="row">
									<label class="nomefield">Utilizzo della carta</label>
									<div class="radiocont">
										<label class="trecolonne"><input type="radio" name="motivo">per esigenze familiari</label>
										<label class="trecolonne"><input type="radio" name="motivo">per esigenze di finanziamento</label>
										<label class="trecolonne"><input type="radio" name="motivo">per esigenze professionali</label>
									   </div>
								</fieldset>
								<fieldset class="first">
									<label class="nomefield">Professione</label>
									<select>
										<option>Seleziona</option>
										<option>Lorem</option>
									</select>
								</fieldset>
								<fieldset>
									<label class="nomefield">Settore dell'attività lavorativa</label>
									<select>
										<option>Seleziona</option>
										<option>Lorem</option>
									</select>
								</fieldset>
								<fieldset class="row">
									<label class="nomefield">Dettaglio settore</label>
									<select>
										<option>Seleziona</option>
										<option>Lorem</option>
									</select>
								</fieldset>
								<fieldset class="first">
									<label class="nomefield">Stato di svolgimento</label>
									<select>
										<option>Seleziona</option>
										<option>Lorem</option>
									</select>
								</fieldset>
								<fieldset>
									<label class="nomefield">Provincia di svolgimento</label>
									<select>
										<option>Seleziona</option>
										<option>Lorem</option>
									</select>
								</fieldset>
								<fieldset class="first">
									<label class="nomefield">Reddito annuo netto</label>
									<select>
										<option>Seleziona</option>
										<option>Lorem</option>
									</select>
								</fieldset>
								<fieldset>
									<label class="nomefield">Dichiarazione origine del reddito</label>
									<select>
										<option>Seleziona</option>
										<option>Lorem</option>
									</select>
								</fieldset>
								 <fieldset class="tolltipclick first">
									<label class="nomefield ico">Origine dei fondi</label>
										<span class="iconahelp">
											<span class="closed">
											<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti7">
											<span class="uniqTooltipPos"><a href="javascript:;"><img class="help" src="/img/ret/ico2or_help2.gif"></a>
												<span class="uniqTooltipInnerHTML">lorem ipsum dolor sit </span>
											</span>
											</span>
										</span>
										</span>
									
									<select>
										<option>Seleziona</option>
										<option>Lorem</option>
									</select>
								</fieldset>
								<fieldset class="tolltipclick">
									<label class="nomefield ico">Persona politicamente esposta</label>
										<span class="iconahelp">
										<span class="closed">
											<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti6">
											   <span class="uniqTooltipPos">
													<a href="javascript:;"><img class="help" src="/img/ret/ico2or_help2.gif"></a>
													<span class="uniqTooltipInnerHTML">
														<p>Si intendono Persone Politicamente Espost i cittadini di stati Comunitari od Extracomunitari che hannno ricoperto cariche politicamente rilevanti, o i loro parenti, ad esempio gli incarichi di : Capi di Stato, capi di Governo, vice Ministri, sottosegretari, parlamentari, membri delle Corti Supreme, delle Corti Costituzionali e di altri OrganiGiudiziari di alto livello, membri delle Corti dei Conti e dei Consigli di Amministrazione delle Banche Centrali, ambasciatori, incaricati di affari e gli Ufficiali di alto livello delle forze armate, membri degli Organi di Amministrazione, direzione o vigilanza delle imprese possedute dallo Stato, Funzionari/Organi titolari di posizioni di alto livello di enti comunitari e internazionali, familiari diretti di PEP e soggetti che notoriamente intrattengono stretti legami con i PEP (D.Lgs. n. 231/2007)</p>
													</span>
												</span>
											</span>
										</span>
										</span>
									<div class="radiocont">
										<label class="trecolonne"><input type="radio" name="pol">no</label>
										<label class="trecolonne"><input type="radio" name="pol">si</label>
										</div>
								</fieldset>
								<fieldset class="row">
									<legend>Titolare effettivo dei rapporti con Webank</legend>
									<label><input type="radio" name="pol"><strong>SI</strong>: Dichiaro di essere il Titolare Effettivo ai sensi del D.Lgs. 231/07 e di agire esclusivamente per mio conto.</label>
									<label><input type="radio" name="pol"><strong>NO</strong>: Dichiaro di NON essere il Titolare Effettivo ai sensi del D.Lgs. 231/07 e di agire per conto di terzi.</label>
								</fieldset>
							</form>
						</div>
						<div class="aButtoncons formCentered">
							<a class="aButton"><span>Conferma</span></a>
							<br class="clear">
							<a href="#">voglio confermare in seguito</a>
						</div>
						<!-- FINE ANTIRICICLAGGIO -->
					</div>
					
					<div class="sicurezzabox">
						<h1>Invio originale del contratto che regola l'apertura del conto Webank</h1>
						<h2>Ricezione copia del contratto per l'apertura del Conto Webank</h2>
						<p>Ti abbiamo inviato per posta l'originale, a firma della Banca, del contratto che regola l'apertura del conto corrente con WeBank. Questo contratto sostituisce quanto inviato in precedenza a causa di un nostro errore materiale di spedizione. Ai fini dell'apertura dei rapporti con la nostra banca deve, pertanto, ritenersi valido l'originale inviato in quanto esattamente conforme alle tue precedenti richieste e proposte contrattuali.</p>
						<!-- INVIO ORIGINALE -->
						<div class="formGeneric">
							<form sautocomplete="off">
								<fieldset class="row">
									<label><input type="checkbox">Dichiaro di aver ricevuto l'originale a firma della banca, riguardante il contratto che regola l'apertura del conto corrente con WeBank</label>
								</fieldset>
							</form>
						</div>
						<div class="aButtoncons formCentered">
							<a class="aButton"><span>Conferma</span></a>
							<br class="clear">
							<a href="#">voglio confermare in seguito</a>
						</div>
						<!-- FINE INVIO ORIGINALE  -->
					</div>
					<div class="sicurezzabox">
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
									<label id="cbDocs"><input type="checkbox" disabled>Dichiaro di aver preso visione dei <a href="javascript:;" onclick="$('#cbDocs').find('input').attr('disabled',false);">documenti di Condizioni generali- Manuale operativo - Istruzioni utilizzo PEC</a> </label>
								</fieldset>
							</form>
						</div>
						<div class="aBigButtoncons">
							<a class="aButton aBigButton"><span>Attiva la tua casella PEC</span></a>
						</div>
						<p><a href="#">voglio attivarla in seguito</a></p>
					</div>
					</div>
					
					<div class="sicurezzabox">
					<h2>Domanda segreta</h2>
					<p>Scegli una domanda segreta di cui solo tu conosci la risposta.<br>
					Ti sarà utile  per recuperare i tuoi dati di accesso al conto (user ID e password).</p>
					<!-- DOMANDA SEGRETA -->
					<!-- CERT. CELLULARE -->
						<div class="formGeneric">
							<form autocomplete="off" class="formCentered">
								<fieldset class="row">
									<label class="nomefield">Domanda segreta:</label>
									<select>
										<option value="-">-- seleziona --</option>
									</select>
								</fieldset>
								<fieldset class="row">
									<label class="nomefield">Risposta:</label>
									<input type="text" placeholder="">
								</fieldset>
							</form>
						</div>
						<div class="aButtoncons formCentered">
							<a class="aButton"><span>Salva</span></a>
						</div>
						<!-- FINE CERT. CELLULARE -->
					<!-- FINE DOMANDA SEGRETA -->
					</div>
				</div>
			</div>
			<div class="boxend"></div>
		</div>
		
<!-- FINE BOX SICUREZZA IN OVERLAYER -->		

</body>
</html>