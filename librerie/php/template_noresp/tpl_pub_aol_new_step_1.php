<!-- ESEMPIO DI SETTING ERRORI: NON COPIARE -->
<script type="text/javascript">
	//Esempio di setting di alcuni errori
	errori = false;
	function esempioErrori()
	{
		if (errori)
		{
			//parent.location.href = "/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_1.php";
			//openPopOverLayer('convenzione', 'floating');
			unsetError('nome_int1');
			unsetError('cognome_int1');
		return 0;
		}
		setViewElement('nome_int1');
		setError('nome_int1');
		setError('cognome_int1');
		setError('sesso_int1');
		setError('tuttaLaData','lorem ipsum');
		setError('gg_nascita_int1');
		setError('codicefiscale_int1');
		setError('provincia_nascita_int1');
		setError('comune_nascita_int1');
		setError('stato_nascita_int1');
		setError('cittadinanza_int1');
		setError('informativaPrivacy');
		setError('intestatario2');
		setError('informativaPre');
		setError('comunicazioniPCons');
		
		//setError('aa_nascita_int1');
		//Per togliere gli errori utilizzare unsetError con gli stessi parametri (id del campo)
		errori = true;
	}
</script>
<!-- FINE ESEMPIO DI SETTING ERRORI: NON COPIARE -->


<div id="aolcontainer">
	<!--AOL CONTENUTI DI SINISTRA -->
	<div id="aolleft">
		<form name="form" autocomplete="off">
			<!--informazioni personali -->
			<div class="aolFormContent">
				<fieldset>
					<legend>Intestatari</legend>
				<!--struttura mezza colonna campo intero -->
					<div class="row-fluid spaceBottom">
						<div class="span6">
							<div class="row-fluid">
								<div class="span12 fieldBlock">
									<label>A quante persone vuoi intestare il conto?</label>
									<select id="num_intestatari">
										<option value="" selected="">solo a me</option>
										<option value="">a me ed a un'altra persona</option>
										<option value="">a me e ad altre due persone</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="aolAcc expanded">			
						<div class="aolAccTop" style="display:none">
							<a class="aolAccTitle" id="intestatario1" onclick="switchExp(this,true);" href="javascript:;" title="Espandi">
								<span class="titoloAcc">Intestatario 1 - Lorem ipsum dolor sit amet</span>
								<span href="javascript:;" class="accButt" ></span>
								<span class="errortext"></span>
							</a>
						</div>
						<div class="aolAccContent">
							<div class="row-fluid spaceBottom">
								<div class="span6">
									<div class="row-fluid">
										<div class="span12 fieldBlock">
											<label class="withIco">Nome</label><a href="javascript:;" data-tooltip="Scrivi il tuo nome per esteso, come &egrave; scritto sul documento di identit&agrave;." class="small"><img alt="" src="/img/img_or_tooltip_off.gif"/></a>
											<input type="text" id="nome_int1" value="" name="nome_int1">
											<span class="errortext">Compila</span>
										</div>
									</div>
								</div>
								<div class="span6">
										<div class="row-fluid">
											<div class="span12 fieldBlock">
												<label class="withIco">Cognome</label><a href="javascript:;" data-tooltip="Scrivi il tuo cognome per esteso, come &egrave; scritto sul documento di identit&agrave;." class="small"><img alt="" src="/img/img_or_tooltip_off.gif"/></a>
												<input type="text" id="cognome_int1" value="" name="cognome_int1">
												<span class="errortext">Compila</span>
											</div>
										</div>
								</div>
							</div>
							<div class="row-fluid spaceBottom">
									<div class="span6">
										<div class="row-fluid">
											<div class="span3 fieldBlock">
												<label>Sesso</label>
												<select id="sesso_int1"><option>--</option><option>F</option><option>M</option></select>
												<span class="errortext">Seleziona</span>
											</div>
											<div class="span9 fieldBlock" id="tuttaLaData">
												<label>Data di nascita</label>
												<div class="row-fluid">
													<div class="span3 fieldBlock">
														<input type="text"id="gg_nascita_int1" maxlength="2" name="gg_nascita_int1" placeholder="gg">
														<span class="errortext">Compila</span>
													</div>
													<div class="span1">
														<span class="separator">/</span>
													</div>	
													<div class="span3 fieldBlock">
														<input type="text" id="mm_nascita_int1" maxlength="2" name="mm_nascita_int1" placeholder="mm">
														<span class="errortext">Compila</span>
													</div>
													<div class="span1">
														<span class="separator">/</span>
													</div>	
													<div class="span4 fieldBlock">
														<input type="text" id="aa_nascita_int1" maxlength="4" name="aa_nascita_int1"  placeholder="aaaa">
														<span class="errortext">Compila</span>
													</div>
												</div>
												<span class="errortext"></span>
											</div>
										</div>
									</div>
									<div class="span6">
										<div class="row-fluid">
											<div class="span12 fieldBlock">
												<label>Codice fiscale</label>
												<input type="text" maxlength="16" id="codicefiscale_int1" value=""/>
												<script type="text/javascript" defer="defer">setCounterOnField("codicefiscale_int1",16);</script>
												<span class="errortext">Compila</span>
											</div>
										</div>
									</div>
								</div>
							
								<!--struttura riga intera divisa in due colonne con la prima colonna non al 100%-->
							<div class="row-fluid spaceBottom">
									<div class="span6">
										<label>Provincia di nascita</label>
										<div class="row-fluid">
											<div class="span7 fieldBlock">
												<input type="text" id="provincia_nascita_int1">
												<span class="errortext">Compila</span>
											</div>
										</div>
									</div>
									<div class="span6">
										<div class="row-fluid">
											<div class="span12 fieldBlock ">
												<label>Comune di nascita</label>
												<input type="text" id="comune_nascita_int1">
												<span class="errortext">Compila</span>
											</div>
										</div>
									</div>
								</div>
							
							<div class="row-fluid spaceBottom">
									<div class="span6">
										<div class="row-fluid">
											<div class="span12 fieldBlock">
												<label>Stato di nascita</label>
												<select id="stato_nascita_int1" value="" name="stato_nascita_int1">
													<option>seleziona</option><option>TERRITORIO BRITANNICO OCEANO UNO</option>
												</select>
												<span class="errortext">Seleziona</span>
											</div>
										</div>
									</div>
									<div class="span6">
										<div class="row-fluid">
											<div class="span12 fieldBlock">
												<label>Cittadinanza</label>
												<select id="cittadinanza_int1" value="" name="cittadinanza_int1">
													<option>seleziona</option><option>TERRITORIO BRITANNICO OCEANO UNO</option>
												</select>
												<span class="errortext">Seleziona</span>
											</div>
										</div>
									</div>
								</div>
							<div class="expandable">
								<div class="row-fluid spaceTop">
									<div class="span6">
										<div class="row-fluid">
											<div class="span12 fieldBlock expander">
												<label><input type="checkbox" name="" value="" onclick="switchExp(this)">Sei gi&agrave; un cliente Webank?</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row-fluid expandableCont" id="agenziaContent_int3">
									<div class="span6">
										<div class="row-fluid">
											<div class="span6 fieldBlock">
												<label>Agenzia</label>
												<select>
													<option>-seleziona -</option>
												</select>
												<span class="errortext">Seleziona</span>
											</div>
											<div class="span6 fieldBlock">
												<label>Numero conto</label>
												<input type="text">
												<span class="errortext">Compila</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row-fluid" id="agenziaContent_int1" style="display:none">
								<div class="span6">
									<div class="row-fluid">
										<div class="span6 fieldBlock">
											<label>Agenzia</label>
											<select>
												<option>-seleziona -</option>
											</select>
											<span class="errortext">Seleziona</span>
										</div>
										<div class="span6 fieldBlock">
											<label>Numero conto</label>
											<input type="text">
											<span class="errortext">Compila</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--blocco secondo intestatario -->
					<div class="aolAcc" style="display:none">
						<div class="aolAccTop">
							<a class="aolAccTitle" id="intestatario2" title="Espandi" onclick="switchExp(this,true);setViewElement('intestatario2');" href="javascript:;">
								<span class="titoloAcc">Intestatario 2</span>
								<span class="accButt"></span>
								<span class="errortext">Compila</span>
							</a>
						</div>
							<div class="aolAccContent">
							<div class="row-fluid spaceBottom">
									<div class="span6">
										<div class="row-fluid">
													<div class="span12 fieldBlock">
														<label>Nome</label> <a href="javascript:;" data-tooltip="Scrivi il tuo nome per esteso, come &egrave; scritto sul documento di identit&agrave;." class="small"><img alt="" src="/img/img_or_tooltip_off.gif"/></a>
														<input type="text" id="nome_int2" value="" name="nome_int1">
														<span class="errortext">Compila</span>
													</div>
										</div>
									</div>
									<div class="span6">
										<div class="row-fluid">
											<div class="span12 fieldBlock">
												<label>Cognome</label><a href="javascript:;" data-tooltip="Scrivi il tuo cognome per esteso, come &egrave; scritto sul documento di identit&agrave;." class="small"><img alt="" src="/img/img_or_tooltip_off.gif"/></a>
												<input type="text" id="cognome_int2" value="" name="cognome_int1">
												<span class="errortext">Compila</span>
											</div>
										</div>
									</div>
							</div>
							<div class="row-fluid spaceBottom">
									<div class="span6">
										<div class="row-fluid">
											<div class="span3 fieldBlock">
												<label>Sesso</label>
												<select id="sesso_int1"><option>--</option><option>F</option><option>M</option></select>
												<span class="errortext">Seleziona</span>
											</div>
											<div class="span9 fieldBlock" id="tuttaLaData">
												<label>Data di nascita</label>
												<div class="row-fluid">
													<div class="span3 fieldBlock">
														<input type="text" class="opzionale" id="gg_nascita_int2" maxlength="2" name="gg_nascita_int2" placeholder="gg">
														<span class="errortext">Compila</span>
													</div>
													<div class="span1">
														<span class="separator">/</span>
													</div>	
													<div class="span3 fieldBlock">
														<input type="text" class="opzionale"  id="mm_nascita_int2" maxlength="2" name="mm_nascita_int2" placeholder="mm">
														<span class="errortext">Compila</span>
													</div>
													<div class="span1">
														<span class="separator">/</span>
													</div>	
													<div class="span4 fieldBlock">
														<input type="text" class="opzionale" id="aa_nascita_int2" maxlength="4" name="aa_nascita_int2"  placeholder="aaaa">
														<span class="errortext">Compila</span>
													</div>
												</div>
												<span class="errortext"></span>
											</div>
										</div>
									</div>
									<div class="span6">
										<div class="row-fluid">
											<div class="span12 fieldBlock">
												<label>Codice fiscale</label>
												<input type="text" maxlength="16" id="codicefiscale2" value=""/>
												<script type="text/javascript" defer="defer">setCounterOnField("codicefiscale2",16);</script>
												<span class="errortext">Compila</span>
											</div>
										</div>
									</div>
								</div>
							
								<!--struttura riga intera divisa in due colonne con la prima colonna non al 100%-->
							<div class="row-fluid spaceBottom">
									<div class="span6">
										<label>Provincia di nascita</label>
										<div class="row-fluid">
											<div class="span7 fieldBlock">
												<input type="text">
												<span class="errortext">Compila</span>
											</div>
										</div>
									</div>
									<div class="span6">
										<div class="row-fluid">
											<div class="span12 fieldBlock ">
												<label>Comune di nascita</label>
												<input type="text">
												<span class="errortext">Compila</span>
											</div>
										</div>
									</div>
								</div>
							
							<div class="row-fluid spaceBottom">
									<div class="span6">
										<div class="row-fluid">
											<div class="span12 fieldBlock">
												<label>Stato di nascita</label>
												<select id="stato_nascita_int2" value="" name="stato_nascita_int1">
													<option>seleziona</option><option>TERRITORIO BRITANNICO OCEANO UNO</option>
												</select>
												<span class="errortext">Seleziona</span>
											</div>
										</div>
									</div>
									<div class="span6">
										<div class="row-fluid">
											<div class="span12 fieldBlock">
												<label>Cittadinanza</label>
												<select id="cittadinanza_int2" value="" name="cittadinanza_int1">
													<option>seleziona</option><option>TERRITORIO BRITANNICO OCEANO UNO</option>
												</select>
												<span class="errortext">Seleziona</span>
											</div>
										</div>
									</div>
								</div>
							
							<div class="expandable">
								<div class="row-fluid spaceTop">
									<div class="span6">
										<div class="row-fluid">
											<div class="span12 fieldBlock expander">
												<label><input type="checkbox" name="" value="" onclick="switchExp(this)">Sei gi&agrave; un cliente Webank?</label>
											</div>
										</div>
									</div>
								</div>
								<div class="row-fluid expandableCont" id="agenziaContent_int3">
									<div class="span6">
										<div class="row-fluid">
											<div class="span6 fieldBlock">
												<label>Agenzia</label>
												<select>
													<option>-seleziona -</option>
												</select>
												<span class="errortext">Seleziona</span>
											</div>
											<div class="span6 fieldBlock">
												<label>Numero conto</label>
												<input type="text">
												<span class="errortext">Compila</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!--fine blocco secondo intestatario -->
				
					<!--blocco terzo intestatario -->
					<div class="aolAcc" style="display:none">
						<div class="aolAccTop">
							<a class="aolAccTitle" id="intestatario3" title="Espandi" onclick="switchExp(this,true);setViewElement('intestatario3');" href="javascript:;">
								<span class="titoloAcc">Intestatario 3</span>
								<span class="accButt"> </span>
								<span class="errortext"></span>
							</a>
						</div>
							<div class="aolAccContent">
							<div class="row-fluid spaceBottom">
									<div class="span6">
										<div class="row-fluid">
													<div class="span12 fieldBlock">
														<label>Nome</label> <a href="javascript:;" data-tooltip="Scrivi il tuo nome per esteso, come &egrave; scritto sul documento di identit&agrave;." class="small"><img alt="" src="/img/img_or_tooltip_off.gif"/></a>
														<input type="text" id="nome_int3" value="" name="nome_int3">
														<span class="errortext">Compila</span>
													</div>
										</div>
									</div>
									<div class="span6">
										<div class="row-fluid">
											<div class="span12 fieldBlock">
												<label>Cognome</label><a href="javascript:;" data-tooltip="Scrivi il tuo cognome per esteso, come &egrave; scritto sul documento di identit&agrave;." class="small"><img alt="" src="/img/img_or_tooltip_off.gif"/></a>
												<input type="text" id="cognome_int3" value="" name="cognome_int3">
												<span class="errortext">Compila</span>
											</div>
										</div>
									</div>
							</div>
							<div class="row-fluid spaceBottom">
									<div class="span6">
										<div class="row-fluid">
											<div class="span3 fieldBlock">
												<label>Sesso</label>
												<select id="sesso_int1"><option>--</option><option>F</option><option>M</option></select>
												<span class="errortext">Seleziona</span>
											</div>
											<div class="span9 fieldBlock" id="tuttaLaData">
												<label>Data di nascita</label>
												<div class="row-fluid">
													<div class="span3 fieldBlock">
														<input type="text" class="opzionale" id="gg_nascita_int3" maxlength="2" name="gg_nascita_int3" placeholder="gg">
														<span class="errortext">Compila</span>
													</div>
													<div class="span1">
														<span class="separator">/</span>
													</div>	
													<div class="span3 fieldBlock">
														<input type="text" class="opzionale"  id="mm_nascita_int3" maxlength="2" name="mm_nascita_int3" placeholder="mm">
														<span class="errortext">Compila</span>
													</div>
													<div class="span1">
														<span class="separator">/</span>
													</div>	
													<div class="span4 fieldBlock">
														<input type="text" class="opzionale" id="aa_nascita_int3" maxlength="4" name="aa_nascita_int3"  placeholder="aaaa">
														<span class="errortext">Compila</span>
													</div>
												</div>
												<span class="errortext"></span>
											</div>
										</div>
									</div>
									<div class="span6">
										<div class="row-fluid">
											<div class="span12 fieldBlock">
												<label>Codice fiscale</label>
												<input type="text" maxlength="16" id="codicefiscale3" value=""/>
												<script type="text/javascript" defer="defer">setCounterOnField("codicefiscale3",16);</script>
												<span class="errortext">Compila</span>
											</div>
										</div>
									</div>
								</div>
							
								<!--struttura riga intera divisa in due colonne con la prima colonna non al 100%-->
							<div class="row-fluid spaceBottom">
									<div class="span6">
										<label>Provincia di nascita</label>
										<div class="row-fluid">
											<div class="span7 fieldBlock">
												<input type="text">
												<span class="errortext">Compila</span>
											</div>
										</div>
									</div>
									<div class="span6">
										<div class="row-fluid">
											<div class="span12 fieldBlock ">
												<label>Comune di nascita</label>
												<input type="text">
												<span class="errortext">Compila</span>
											</div>
										</div>
									</div>
								</div>
							
							<div class="row-fluid spaceBottom">
									<div class="span6">
										<div class="row-fluid">
											<div class="span12 fieldBlock">
												<label>Stato di nascita</label>
												<select id="stato_nascita_int3" value="" name="stato_nascita_int3">
													<option>seleziona</option><option>TERRITORIO BRITANNICO OCEANO UNO</option>
												</select>
												<span class="errortext">Seleziona</span>
											</div>
										</div>
									</div>
									<div class="span6">
										<div class="row-fluid">
											<div class="span12 fieldBlock">
												<label>Cittadinanza</label>
												<select id="cittadinanza_int3" value="" name="cittadinanza_int3">
													<option>seleziona</option><option>TERRITORIO BRITANNICO OCEANO UNO</option>
												</select>
												<span class="errortext">Seleziona</span>
											</div>
										</div>
									</div>
								</div>
							
							<div class="expandable">
									<div class="row-fluid spaceTop">
										<div class="span6">
											<div class="row-fluid">
												<div class="span12 fieldBlock expander">
													<label><input type="checkbox" name="" value="" onclick="switchExp(this)">Sei gi&agrave; un cliente Webank?</label>
												</div>
											</div>
										</div>
									</div>
									<div class="row-fluid expandableCont" id="agenziaContent_int3">
										<div class="span6">
											<div class="row-fluid">
												<div class="span6 fieldBlock">
													<label>Agenzia</label>
													<select>
														<option>-seleziona -</option>
													</select>
													<span class="errortext">Seleziona</span>
												</div>
												<div class="span6 fieldBlock">
													<label>Numero conto</label>
													<input type="text">
													<span class="errortext">Compila</span>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>
					</div>
					<!--fine blocco terzo intestatario -->
				</fieldset>
			<!--FINE informazioni personali -->
				<div class="lineSeparator"></div>
			
				<!--codice promo -->
				<fieldset class="noPaddBott">
					<div class="expandable">
						<legend>
							<span class="expander">
								<a class="btn" onclick="switchExp(this)" href="javascript:;"></a>
								Hai un codice promozionale?
							</span>
						</legend>
						<div class="expandableCont">
							<div class="row-fluid">
								<div class="span4">
									<label>Codice convenzione</label>
									<input type="text">
								</div>
								<div class="span4">
									<label>Codice convenzione</label>
									<input type="text">
								</div>
								<div class="span4">
									<label>Codice convenzione</label>
									<input type="text">
								</div>
								</div>
						</div>
					</div>
				</fieldset>
				<!--fine codice promo -->
				<div id="precontrattualeSx">
					<div class="lineSeparator"></div>
					<!--doc precontrattuale -->
					<fieldset>
						<legend>Documentazione precontrattuale</legend>
						<div class="row-fluid">
							<div class="span12 fieldBlock">
								<label><input type="checkbox" name="" value="" id="informativaPre" class="textInput"><span>Dichiaro di aver preso visione, stampato o salvato copia completa della documentazione precontrattuale disponibile qui a fianco.</span></label>
								<span class="errortext">Seleziona</span>
							</div>
						</div>
					</fieldset>
				</div>
				<div class="lineSeparator"></div>
				<!--informativa precontrattuale -->
				<fieldset>
					<legend>Informativa e consensi sul trattamento dei dati personali</legend>
						<div class="row-fluid spaceBottom">
							<div class="span12">
								<textarea class="" name="textarea" readonly="readonly">INFORMATIVA TRATTAMENTO DEI DATI PERSONALI DEL GRUPPO BIPIEMME AI SENSI DELL'ART. 13 DEL DECRETO LEGISLATIVO 30 GIUGNO 2003 N.196 CODICE IN MATERIA DI PROTEZIONE DEI DATI PERSONALI WeBank S.p.A. utilizza i Suoi dati personali che Lei stesso ha fornito o che sono stati comunicati alla banca da terzi. La presente informativa si riferisce altres&igrave; ai trattamenti effettuati dalle societ&agrave; del Gruppo Bipiemme.                                                                                                        FINALIT&agrave; E MODALIT&agrave; DI TRATTAMENTO I Suoi dati personali sono trattati in modo prevalentemente automatizzato per la gestione dei servizi da Lei richiesti. Le finalit&agrave; per le quali vengono trattati sono: - l'esecuzione degli obblighi derivanti dai rapporti contrattuali e precontrattuali instaurati con la banca, ivi inclusi i necessari controlli preliminari sulla veridicit&agrave; dei dati da Lei comunicati; - l'adempiere o l'esigere l'adempimento di obblighi di normativa e di vigilanza. Per questi trattamenti, al fine di meglio fornire i servizi da Lei richiesti, i Suoi dati possono essere trattati, limitatamente ai soli dati necessari, anche dalle altre societ&agrave; del Gruppo Bipiemme Il conferimento dei dati personali per tali finalit&agrave; &egrave; obbligatorio e non richiede il consenso dell'Interessato. Il rifiuto a fornire i dati comporta l'impossibilit&agrave; per la banca di instaurare e dare esecuzione ai predetti servizi. Nell'ambito dell'esecuzione delle attivit&agrave; sopra descritte, in alcuni casi e solo se ci&ograve; &egrave; strettamente necessario, i dati possono essere anche di natura sensibile. I Suoi dati personali, inoltre, potranno essere trattati, previo Suo espresso consenso, per le seguenti finalit&agrave; funzionali: - la rilevazione del grado di soddisfazione della clientela, - l'elaborazione di studi e ricerche di mercato, - la promozione di prodotti e servizi di Webank e delle societ&agrave; del Gruppo Bipiemme - la promozione di prodotti e servizi di terzi I Suoi dati saranno trattati dai dipendenti e collaboratori, interni ed esterni, della banca a ci&ograve; formalmente incaricati ai sensi del Codice Privacy, e da strutture delle societ&agrave; del Gruppo Bipiemme che svolgono, per conto dello stesso, compiti tecnici, di supporto e di controllo aziendale.          COMUNICAZIONE DEI DATI WeBank La informa che i Suoi dati personali potranno essere comunicati a: - societ&agrave; del Gruppo Bipiemme per l'adempimento di obblighi di legge e contrattuali, ci&ograve; con particolare riferimento alle informazioni relative alle operazioni da Lei poste in essere ai sensi della normativa antiriciclaggio (ex art. 41 D.lgs. 231/2007); - societ&agrave; terze incaricate di svolgere attivit&agrave; contrattuali o funzionali a quelle della banca, cos&igrave; come descritte nel paragrafo &quot;Finalit&agrave; e Modalit&agrave; del Trattamento&quot;; - soggetti operanti all'estero, nell'esecuzione di operazioni bancarie e finanziarie dirette verso banche, istituti di credito o intermediari finanziari esteri anche appartenenti a Paesi esteri extra UE; - sistemi di informazione creditizia e per i necessari controlli preliminari sulla veridicit&agrave; dei dati ed in particolare a CRIF Spa, con sede in Bologna, via Fantin n.1-3, in qualit&agrave; di societ&agrave; di rilevazione dei rischi creditizi e di insolvenze, nell'esecuzione di servizi o necessit&agrave; legati al mondo bancario e finanziario.                       DIRITTI DEGLI INTERESSATI Il Codice Privacy Le attribuisce il diritto di chiedere quali sono i Suoi dati personali che la banca conserva, come ne &egrave; venuta in possesso e per quali fini; oppure di chiederne la correzione, se errati, o la cancellazione semplicemente scrivendo a Banca Popolare di Milano, in qualit&agrave; di Capogruppo, presso l'ufficio Privacy Officer - Piazza F. Meda, 4 - 20121 Milano. Il Privacy Officer, su delega delle singola societ&agrave; del Gruppo Bipiemme, garantisce che le misure di sicurezza poste in essere dalle stesse sono fra loro omogenee. Il Titolare del trattamento dei dati personali &egrave; WeBank S.p.A., in persona del legale rappresentante pro-tempore domiciliato per la carica presso la sede sociale della societ&agrave;, in Milano, Via Massaua, n. 4. Il Responsabile del trattamento &eacute; il Dott. Elisabetta Calmasini domiciliata per la carica presso la sede sociale della societ&agrave;. L'elenco completo dei Responsabili, delle societ&agrave; del Gruppo Bipiemme e delle societ&agrave; terze alle quali vengono comunicati i Suoi dati per l'esecuzione di obblighi contrattuali &egrave; disponibile presso la nostra Sede, le agenzie o sul sito internet della banca, www.webank.it
								</textarea>
								<a class="linkSmall flRight" href="#">Stampa informativa</a>
							</div>
						</div>
					<div class="row-fluid spaceBottom">
						<div class="span12 fieldBlock">
							<label><input type="checkbox" name="" value="" id="informativaPrivacy">Dichiaro di aver preso visione, stampato o salvato l'informativa Privacy</label>
							<span class="errortext">Seleziona</span>
						</div>
					</div>
					<div class="row-fluid spaceBottom">
						<span class="span6 textSmall">Per comunicazioni della Banca riguardanti prodotti e servizi del Gruppo Bipiemme e per studi e ricerche di mercato</span>
						<div class="fieldBlock span6" id="comunicazioniPCons">
							<label><input type="radio" id="comunicazioniPCons">do il consenso</label>
							<label class="flRight"><input type="radio" id="comunicazioniPCons">non do il consenso</label>
							<span class="errortext">Seleziona</span>
						</div>
						
					</div>
					<div class="row-fluid spaceBottom">
						<span class="span6 textSmall">Per comunicazione della Banca riguardanti prodotti o di servizi di soggetti terzi</span>
						<div class="fieldBlock span6">
							<label><input type="radio" id="comunicazioniPCons">do il consenso</label>
							<label class="flRight"><input type="radio" id="comunicazioniPCons">non do il consenso</label>
							<span class="errortext">Seleziona</span>
						</div>
					</div>
					<div class="row-fluid">
						<span class="span6 textSmall">Per comunicazioni a societ&agrave; terze ai fini della promozione di prodotti o di servizi e di ricerche di mercato</span>
						<div class="fieldBlock span6">
							<label><input type="radio" id="comunicazioniPCons">do il consenso</label>
							<label class="flRight"><input type="radio" id="comunicazioniPCons">non do il consenso</label>
							<span class="errortext">Seleziona</span>
						</div>
					</div>
				</fieldset>
			</div>
		</form>
		<br class="clear"/>
		<div class="aolButton" id="aolButtonLine">
			<div class="row-fluid">
				<div class="span3">
					&nbsp;
				</div>
				<div class="span5">
					<a href="#" class="aTextLink">Vuoi continuare pi&ugrave; tardi?</a>
				</div>
				<div class="span4">
					<a class="aButton flRight" href="javascript:;" onclick="esempioErrori()"><span>Conferma</span></a>
				</div>
			</div>
		</div>	
	</div>
	
	<div id="aolright"> 
			<!--BLOCCO PROMO -->
			<div class="gen">
				<div id="boxpromocont">
					<div class="boxpromoright  paddbott">
						<a href="javascript:;"><img src="/img/ban_promosm_marzo2012_ct_top.gif"/></a>
						<div class="promoopen">
							<a href="javascript:;">Verifica le condizioni</a>
							<span class="condizionidetailsOverlayer" style="display:none;">null</span>
							<img src="null"  alt="" />
						</div>
					</div>
					<div class="boxpromoright ">
						<a href="javascript:;"><img src="/img/ban_promosm_marzo2012_ct_bottom.gif"/></a>
						<div class="promoopen">
							<a href="javascript:;" class="showConditionOverlayer" data-AnchorPosition = "rTrT">Verifica le condizioni</a>
							
							<div class="condizionidetailsOverlayer" style="display:none">
								<a href="javascript:;" class="closeOverlayer"><img src="/img/ico_lightBox_close.gif" alt=""/></a>
								<p class="nextText1">CON LA PROMOZIONE “LOREM IPSUM” HAI DIRITTO A:</p>
								<ul><li>tasso di interesse promozionale del <strong>3,50% lordo annuo sulle linee vincolate </strong>
  con scadenza a 3/6/12 mesi, attivate entro il dd/mm/yyyy;</li>
							<li>lorem ipsum dolor sit</li><li>lorem ipsum dolor sit</li><li>lorem ipsum dolor sit</li><li>lorem ipsum dolor sit</li>
								</ul>
								<a class="linkRegolamento" href="#">Leggi il regolamento completo</a>
							</div>
							<!img src="/wbx/res/promConv/img/str_promoopenbottom.gif"  alt="" />
							<!--<img src="/img/str_promoopenbottom_white.gif"  alt="" />-->
						</div>
					</div>
				</div>
			</div>
			<!--FINE BLOCCO PROMO -->
		    <div class="lineSeparatorR"></div>
			
			<!--BLOCCO COSA TI SERVE -->
			<div>
				<div class="leftit">
					<h2>COSA TI SERVE</h2>
				 </div>
				 <div class="gen">
					<ul class="elencodoc">
						<li>Documento d'identit&agrave;</li>
						<li>Codice fiscale</li>
						<li>Mobile Phone</li>
						<li class="last">IBAN di un tuo conto corrente, se lo possiedi</li>
					</ul>
				</div>
			</div>
			<!--FINE  COSA TI SERVE -->
			
			<!--LISTA DOCUMENTI -->
			<div id="limiteDx" style="clear:left"></div>
			<div id="precontrattualeDx">
				<div class="lineSeparatorR"></div>
				<?php virtual("/librerie/include/commons/boxeditoriali/pub_aol_001.php"); ?>
			</div>
			<!--FINE LISTA DOCUMENTI -->
			<div id="nextStepLine">
				<div class="lineSeparatorR"></div>
				<div class="leftit nextStep">
					<h2>NEL PROSSIMO STEP</h2>
				 </div>
				 <div class="gen">
					<p class="nextText1">indicherai i tuoi recapiti.</p>
					<span class="nextText2">Tieni a portata di mano:: </span><ul class="nextText3"><li>- telefono cellulare</li> <li>- indirizzo email facilmente consultabile</li></ul>
				 </div>
			</div>
			
	</div>
</div>