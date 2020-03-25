	<script type="text/javascript">
		function showDett(obj) {
			
			if (obj.value == 'bonifico') {
			$('#identificazioneBonifico').addClass('opened');
			$('#identificazioneAgenzia').removeClass('opened');
			} else {
			$('#identificazioneAgenzia').addClass('opened');
			$('#identificazioneBonifico').removeClass('opened');
			}
			offSetDoc()
			//resetDett(obj);
		} 
		</script>
<div id="aolcontainer">
	<div id="aolleft">
		<form name="form" autocomplete="off">
			<div class="aolFormContent">
				<fieldset>
					<legend>Modalit&agrave; di identificazione</legend>
					<p>Per legge siamo tenuti a verificare l'identit&agrave; di tutti i nuovi intestatari: scelgi la modalit&agrave; che preferisci.</p>
					<div class="row-fluid" id="identificazioneCont">
						<div id="identificazioneBonifico">
							<label>
								<input type="radio" class="identificazione" id="modalita_riconoscimento1" onclick="showDett(this);" value="bonifico" name="modalita_riconoscimento">
								<strong>Tramite bonifico</strong> (se hai un conto corrente aperto presso l'agenzia di un'altra banca)
							</label>
							<div class="dett">
								<span class="minitext">Ogni intestatario deve effettuare un bonifico di 100 &euro; da un conto corrente intestato a suo nome o cointestato. Accrediteremo la somma versata sul tuo conto corrente dopo l'apertura.</span>
								<br/><br/>
								<strong>SARA STREPPONI</strong><br/>
								<span>Inserisci l'IBAN del conto corrente dal quale farai il bonifico.</span><br><br>
								<div class="row-fluid">
									<div class="span6">
										<label>IBAN*</label>
										<input type="text" id="ibanclientebon_int1" value="" maxlength="27" name="ibanclientebon_int1">
										<script type="text/javascript" defer="defer">setCounterOnField("ibanclientebon_int1",27);</script>
										<span class="errortext">Compila</span>
										<a href="#" onclick="$('#ibanOk').show()" class="flRight">Verifica Iban</a>
									</div>
									<div class="span6" style="display:none" id="ibanOk">
										<label>&nbsp;</label><br class="clear" />
										IBAN corretto
									</div>
								</div>
							
							</div>
						</div>
						<br/>
						<div id="identificazioneAgenzia">
							<label>
								<input type="radio" class="identificazione" id="modalita_riconoscimento2" onclick="showDett(this);" value="agenzia" name="modalita_riconoscimento">
								<strong>Tramite un'agenzia del gruppo Bipiemme</strong>(se non possiedi un conto o ne hai uno aperto <span class="small" data-tooltip="Scegli questa modalit&agrave; di identificazione se hai un conto corrente presso una di queste banche:<ul><li>lorem ipsum</li></ul>">online</span>)

							</label>
							<div class="dett">
								<span class="minitext">
								Gli intestatari dovranno recarsi in un'agenzia del Gruppo Bipiemme (Banca popolare di Milano; Banca di Legnano; Banca Popolare di Mantova) a firmare i documenti di apertura conto davanti ad un nostro incaricato.
								</span>
								<a class="openpop" onclick="$('listagenzia').show();" href="javascript:;">vuoi sapere qual'&egrave; l'agenzia pi&ugrave; vicina a te?</a>
								<br class="clear" />
								<div style="display:none;" class="row-fluid" id="listagenzia">
									<div class="span6 fieldBlock">
										<label>Comune</label>
										<input type="text" value="" id="comuneAgenzia" name="comuneAgenzia">
										<span class="errortext">Compila</span>
									</div>
									<div class="span6">
										<label>&nbsp;</label><br class="clear" />
										<a title="cerca" onclick="openListaAgenzie('/webankpub/wb/cstPopup/do/aol/ricercaAgenzia.do?BV_UseBVCookie=Yes');" href="javascript:;" class="greenbutton"><span>cerca</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</fieldset>
				<div class="lineSeparator"></div>
				<fieldset>
					<legend>Documento d'identit&agrave;</legend>
					<div class="row-fluid spaceBottom">
						<div class="span6">
							<div class="row-fluid">
								<div class="span6 fieldBlock">
									<label>Tipo di documento</label>
									<select id="tipo_doc_int1">
										<option value="1" selected="">Carta d'identit&agrave;</option>
										<option value="2">Patente</option>
										<option value="3">Passaporto</option>
									</select>
									<span class="errortext">Scegli</span>
								</div>
								<div class="span6 fieldBlock">
									<label>Numero</label>
									<input type="text" id="numero_doc_int1" data-tooltip="">
									<span class="" id=""></span>
									<span class="errortext">Scegli</span>
								</div>
							</div>
						</div>
						<div class="span6 fieldBlock">
							<label>Stato di rilascio</label>
							<select><option>seleziona</option></select>
							<span class="errortext">Scegli</span>
						</div>
					</div>
					<div class="row-fluid spaceBottom">
						<div class="span6">
							<div class="row-fluid">
								<div class="span6 fieldBlock">
									<label>Provincia di rilascio</label>
									<input type="text">
									<span class="errortext">Compila</span>
								</div>
							</div>
						</div>
						<div class="span6 fieldBlock">
							<label>Comune di rilascio</label>
							<input type="text">
							<span class="errortext">Compila</span>
						</div>
					</div>
					<div class="row-fluid spaceBottom">
						<div class="span6">
							<div id="divDataEmissione1" class="span6 fieldBlock" data-tooltip="">
								<label>Data di rilascio</label>
									<div class="row-fluid">
										<div class="span3 fieldBlock">
											<input type="text" placeholder="gg" name="gg_emissione_int1" maxlength="2" id="gg_emissione_int1">
											<span class="errortext">Compila</span>
										</div>
										<div class="span1">
											<span class="separator">/</span>
										</div>	
										<div class="span3 fieldBlock">
											<input type="text" placeholder="mm" name="mm_emissione_int1" maxlength="2" id="mm_emissione_int1">
											<span class="errortext">Compila</span>
										</div>
										<div class="span1">
											<span class="separator">/</span>
										</div>	
										<div class="span4 fieldBlock">
											<input type="text" placeholder="aaaa" name="aa_emissione_int1" maxlength="4" id="aa_emissione_int1">
											<span class="errortext">Compila</span>
										</div>
									</div>
									<span class="errortext"></span>
							</div>
						</div>
						<div class="span6">
							<div id="divDataScadenza1" class="span6 fieldBlock" data-tooltip="">
								<label>Data di scadenza</label>
								<div class="row-fluid">
									<div class="span3 fieldBlock">
										<input type="text" placeholder="gg" name="gg_scadenza_int1" maxlength="2" id="gg_scadenza_int1">
										<span class="errortext">Compila</span>
									</div>
									<div class="span1">
										<span class="separator">/</span>
									</div>	
									<div class="span3 fieldBlock">
										<input type="text" placeholder="mm" name="mm_scadenza_int1" maxlength="2" id="mm_scadenza_int1">
										<span class="errortext">Compila</span>
									</div>
									<div class="span1">
										<span class="separator">/</span>
									</div>	
									<div class="span4 fieldBlock">
										<input type="text" placeholder="aaaa" name="aa_scadenza_int1" maxlength="4" id="aa_scadenza_int1">
										<span class="errortext">Compila</span>
									</div>
								</div>
								<span class="errortext"></span>
							</div>
						</div>
					</div>
				</fieldset>
				<div class="lineSeparator"></div>
				<fieldset>
					<legend>Normativa antiriciclaggio</legend>
					<p>Ai sensi della normativa antiriclaggio (D.L. 231/07) sei tenuto a fornirci alcune informazioni. <a class="small" data-tooltip="Ti ricordiamo che il rilascio di false informazioni od omissioni comporta conseguenze anche di natura penale. " href="javascript:;"><img src="/img/img_or_tooltip_off.gif" alt=""></a></p>
					<div class="row-fluid spaceBottom">
						<div class="span6 fieldBlock">
							<label>Utilizzo del conto</label>
							<select>
								<option selected="" value="">--seleziona--</option>
								<option value="2">lorem</option>
								<option value="3"></option>
							</select>
							<span class="errortext">Seleziona</span>
						</div>
					</div>
					<div class="row-fluid spaceBottom">
						<div class="span12 fieldBlock">
							<span class="label">Titolare effettivo</span><a class="small" data-tooltip="Per Titolare Effettivo s'intende la persona fisica per conto della quale &egrave; realizzata un'operazione o un'attivit&agrave; (D.lgs. n° 231/07).')" href="javascript:;"><img src="/img/img_or_tooltip_off.gif" alt=""></a>
							<label><input type="checkbox" value="" name="">Dichiaro di essere il Titolare Effettivo del conto e di agire esclusivamente per mio conto.</label>
							<span class="errortext">Seleziona</span>
						</div>
					</div>
					<div class="row-fluid spaceBottom">
						<div class="span6 fieldBlock">
							<label>Professione</label>
							<select>
								<option selected="" value="">--seleziona--</option>
								<option value="2">lorem</option>
								<option value="3"></option>
							</select>
							<span class="errortext">Seleziona</span>
						</div>
						<div class="span6 fieldBlock">
							<label>Settore lavorativo</label>
							<select>
								<option selected="" value="">--seleziona--</option>
								<option value="2">lorem</option>
								<option value="3"></option>
							</select>
							<span class="errortext">Seleziona</span>
						</div>
					</div>
					<div class="row-fluid spaceBottom">
						<div class="span12 fieldBlock">
							<label>Dettaglio settore</label>
							<select class="disabled" disabled="disabled">
								<option selected="" value="">--seleziona--</option>
								<option value="2">lorem</option>
								<option value="3"></option>
							</select>
							<span class="errortext">Seleziona</span>
						</div>
					</div>
					<div class="row-fluid spaceBottom">
						<div class="span6 fieldBlock">
							<label>Stato di svolgimento dell'attivit&agrave;</label>
							<select>
								<option selected="" value="">--seleziona--</option>
								<option value="2">lorem</option>
								<option value="3"></option>
							</select>
							<span class="errortext">Seleziona</span>
						</div>
						<div class="span6 fieldBlock">
							<label>Provincia di svolgimento dell'attivit&agrave;</label>
							<select>
								<option selected="" value="">--seleziona--</option>
								<option value="2">lorem</option>
								<option value="3"></option>
							</select>
							<span class="errortext">Seleziona</span>
						</div>
					</div>
					<div class="row-fluid spaceBottom">
						<div class="span6 fieldBlock">
							<label>Reddito annuo netto</label>
							<select>
								<option selected="" value="">--seleziona--</option>
								<option value="2">lorem</option>
								<option value="3"></option>
							</select>
							<span class="errortext">Seleziona</span>
						</div>
						<div class="span6 fieldBlock">
							<label>Origine del reddito</label>
							<select>
								<option selected="" value="">--seleziona--</option>
								<option value="2">lorem</option>
								<option value="3"></option>
							</select>
							<span class="errortext">Seleziona</span>
						</div>
					</div>
					<div class="row-fluid spaceBottom">
						<div class="span6 fieldBlock">
							<label>Origine dei fondi</label><a class="small" data-tooltip="Per 'origine dei fondi' si intende il capitale che impieghi sul conto corrente proveniente da fonti anche diverse dal reddito di lavoro (es. rendite immobiliari)" href="javascript:;"><img src="/img/img_or_tooltip_off.gif" alt=""></a>
							<select>
								<option selected="" value="">--seleziona--</option>
								<option value="2">lorem</option>
								<option value="3"></option>
							</select>
							<span class="errortext">Seleziona</span>
						</div>
						<div class="span6">
							<label>Sei una persona politicamente esposta?</label>
							<span><strong>Prima di rispondere</strong> <span data-tooltip="Si intendono Persone Politicamente Esposti i cittadini di stati Comunitari od Extracomunitari che hannno ricoperto cariche politicamente rilevanti, o i loro parenti, ad esempio gli incarichi di : Capi di Stato, capi di Governo, vice Ministri, sottosegretari, parlamentari, membri delle Corti Supreme, delle Corti Costituzionali e di altri OrganiGiudiziari di alto livello, membri delle Corti dei Conti e dei Consigli di Amministrazione delle Banche Centrali, ambasciatori, incaricati di affari e gli Ufficiali di alto livello delle forze armate, membri degli Organi di Amministrazione, direzione o vigilanza delle imprese possedute dallo Stato, Funzionari/Organi titolari di posizioni di alto livello di enti comunitari e internazionali, familiari diretti di PEP e soggetti che notoriamente intrattengono stretti legami con i PEP (D.Lgs. n. 231/2007) Si intendono Persone Politicamente Esposti i cittadini di stati Comunitari od Extracomunitari che hannno ricoperto cariche politicamente rilevanti, o i loro parenti, ad esempio gli incarichi di : Capi di Stato, capi di Governo, vice Ministri, sottosegretari, parlamentari, membri delle Corti Supreme, delle Corti Costituzionali e di altri OrganiGiudiziari di alto livello, membri delle Corti dei Conti e dei Consigli di Amministrazione delle Banche Centrali, ambasciatori, incaricati di affari e gli Ufficiali di alto livello delle forze armate, membri degli Organi di Amministrazione, direzione o vigilanza delle imprese possedute dallo Stato, Funzionari/Organi titolari di posizioni di alto livello di enti comunitari e internazionali, familiari diretti di PEP e soggetti che notoriamente intrattengono stretti legami con i PEP (D.Lgs. n. 231/2007) Si intendono Persone Politicamente Esposti i cittadini di stati Comunitari od Extracomunitari che hannno ricoperto cariche politicamente rilevanti, o i loro parenti, ad esempio gli incarichi di : Capi di Stato, capi di Governo, vice Ministri, sottosegretari, parlamentari, membri delle Corti Supreme, delle Corti Costituzionali e di altri OrganiGiudiziari di alto livello, membri delle Corti dei Conti e dei Consigli di Amministrazione delle Banche Centrali, ambasciatori, incaricati di affari e gli Ufficiali di alto livello delle forze armate, membri degli Organi di Amministrazione, direzione o vigilanza delle imprese possedute dallo Stato, Funzionari/Organi titolari di posizioni di alto livello di enti comunitari e internazionali, familiari diretti di PEP e soggetti che notoriamente intrattengono stretti legami con i PEP (D.Lgs. n. 231/2007) Si intendono Persone Politicamente Esposti i cittadini di stati Comunitari od Extracomunitari che hannno ricoperto cariche politicamente rilevanti, o i loro parenti, ad esempio gli incarichi di : Capi di Stato, capi di Governo, vice Ministri, sottosegretari, parlamentari, membri delle Corti Supreme, delle Corti Costituzionali e di altri OrganiGiudiziari di alto livello, membri delle Corti dei Conti e dei Consigli di Amministrazione delle Banche Centrali, ambasciatori, incaricati di affari e gli Ufficiali di alto livello delle forze armate, membri degli Organi di Amministrazione, direzione o vigilanza delle imprese possedute dallo Stato, Funzionari/Organi titolari di posizioni di alto livello di enti comunitari e internazionali, familiari diretti di PEP e soggetti che notoriamente intrattengono stretti legami con i PEP (D.Lgs. n. 231/2007) Si intendono Persone Politicamente Esposti i cittadini di stati Comunitari od Extracomunitari che hannno ricoperto cariche politicamente rilevanti, o i loro parenti, ad esempio gli incarichi di : Capi di Stato, capi di Governo, vice Ministri, sottosegretari, parlamentari, membri delle Corti Supreme, delle Corti Costituzionali e di altri OrganiGiudiziari di alto livello, membri delle Corti dei Conti e dei Consigli di Amministrazione delle Banche Centrali, ambasciatori, incaricati di affari e gli Ufficiali di alto livello delle forze armate, membri degli Organi di Amministrazione, direzione o vigilanza delle imprese possedute dallo Stato, Funzionari/Organi titolari di posizioni di alto livello di enti comunitari e internazionali, familiari diretti di PEP e soggetti che notoriamente intrattengono stretti legami con i PEP (D.Lgs. n. 231/2007) " class="large">leggi la definizione</span></span>
							<div class="row-fluid fieldBlock">
								<label class="span6"><input type="radio" id="">no</label>
								<label class="span6"><input type="radio" id="">si</label>
								<span class="errortext">Seleziona</span>
							</div>
						</div>
					</div>
				</fieldset>
				<div class="lineSeparator"></div>
				<fieldset>
					<legend>Informazioni aggiuntive</legend>
					<div class="row-fluid spaceBottom">
						<div class="span6">
							<label>Componenti nucleo familiare</label>
							<select>
								<option selected="" value="">--seleziona--</option>
								<option value="2">lorem</option>
								<option value="3"></option>
							</select>
						</div>
						<div class="span6">
							<span class="label">Amministratore patrimonio familiare</span>
							<label class="span6"><input type="radio" id="">no</label>
							<label class="span6"><input type="radio" id="">si</label>
						</div>
					</div>
					<div class="row-fluid spaceBottom">
						<div class="span6">
							<label>Ttitolo di studio</label>
							<select>
								<option selected="" value="">--seleziona--</option>
								<option value="2">lorem</option>
								<option value="3"></option>
							</select>
						</div>
						<div class="span6">
							<label>Abitazione</label>
							<select>
								<option selected="" value="">--seleziona--</option>
								<option value="2">lorem</option>
								<option value="3"></option>
							</select>
						</div>
					</div>
					<div class="row-fluid spaceBottom">
						<span class="label">Prodotti gi&agrave; posseduti</label>
						<div class="row-fluid">
							<div class="span6">
								<label class="radiocont"><input type="checkbox" id="">lorem</label>
								<label class="radiocont"><input type="checkbox" id="">lorem</label>
								<label class="radiocont"><input type="checkbox" id="">lorem</label>
							</div>
							<div class="span6">
								<label class="radiocont"><input type="checkbox" id="">lorem</label>
								<label class="radiocont"><input type="checkbox" id="">lorem</label>
								<label class="radiocont"><input type="checkbox" id="">lorem</label>
							</div>
						</div>
					</div>
				</fieldset>
				
			</div>
		</form>
		<br class="clear"/>
	<div class="aolButton" id="aolButtonLine">
			<div class="row-fluid">
				<div class="span3">
					<a href="#" class="flLeft">indietro</a>
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
		<div>
			<div class="leftit">
				<h2>SODDISFATTO O RIMBORSATO</h2>
				<div class="gen">
					<p>Puoi recedere dall'apertura del conto entro 14 giorni senza oneri n&acute; penali <a href="#">Leggi il documento</a></p>
				</div>
			 </div>
		</div>
		<div id="limiteDx" style="clear:left"></div>
		<div style="float:left">
			<div id="precontrattualeDx">
				<div class="lineSeparatorR"></div>
				<div class="leftit">
					<h2><a onclick="switchAolDoclist(this);" href="javascript:;" class="closed">DOCUMENTAZIONE PRECONTRATTUALE</a></h2>
				</div>
				<div id="aoldoclist" style="display:none">
					<ul>
						<li><a href="#1" target="blank" onclick="setVisitedLink(this)">Foglio Informativo</a></li>
						<li><a href="#2" target="blank" onclick="setVisitedLink(this)">Condizioni generali</a></li>
						<li><a href="#3" target="blank" onclick="setVisitedLink(this)">Modulo richiesta</a></li>
						<li><a href="#4" target="blank" onclick="setVisitedLink(this)">Documento di sintesi</a></li>
						<li><a href="#5" target="blank" onclick="setVisitedLink(this)">Informativa precontrattuale servizi a distanza</a></li>
						<li><a href="#6" target="blank" onclick="setVisitedLink(this)">Principali diritti del cliente</a></li>
						<li><a href="#7" target="blank" onclick="setVisitedLink(this)">Guida pratica al conto</a></li>
						<li class="last"><a href="#8" target="blank" onclick="setVisitedLink(this)">Guida pratica e modulo per ricorrere all'Arbitro</a></li>
					</ul>
				</div>
			</div>
			
			<div id="ContentCarrelloDx" style="width:100%;clear:left;">
				<div id="elencoCarrelloDx" style="width:200px;clear:left;">
					<div id="">
						<div class="leftit"><h2>Il tuo conto</h2></div>
						<ul class="elencoprodotti">
					<li>
						<span class="productname">Conto corrente</span>
						<span>Zero canone</span>
						<span>Zero commissioni bancarie</span>
					</li>
					<li>
						<span class="productname">Deposito e linee vincolate</span>
						<span>1,10% tasso base</span>
						<span>Accreditamento trimestrale interessi</span>
						<span class="boxedgreen">
							<span><strong>3,5%</strong> sui depositi a 12 mesi</span>
						</span>
					</li>
					<li>
						<span class="productname">Pacchetto paperless</span>
						<span>Firma digitale</span>
					</li>
					<li id=""  class="addDeposito prodHidden"
						<span class="productname">Deposito titoli</span>
					</li>
					<li id=""  class="addBancomat prodHidden"
						<span class="productname">Bancomat</span>
					</li>
					<li id="" class="addCC prodHidden"
						<span class="productname">Carta di credito</span>
					</li>
					<li id="" class="addCJ prodHidden"
						<span class="productname">Carta jeans</span>
					</li>
				</ul>
					</div>
				</div>
			</div>	
		</div>
		<div id="nextStepLine">
			<div class="lineSeparatorR"></div>
				<div class="leftit">
					<h2>HAI TERMINATO LA RICHIESTA.</h2>
				</div>
				<div class="gen">
					<p class="nextText1">Nel prossimo step dovrai solo scaricare il contratto.</p>
					<span class="nextText2">Per procedere all'apertura del conto, firmalo e spediscilo appena possibile.</span>
				</div>
		</div>
	</div>
</div>