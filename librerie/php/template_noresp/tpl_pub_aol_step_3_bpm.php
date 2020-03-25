<div id="aolcontainer">
	<div id="aolleft">
		<form id="aol" name="aol" action="" method="post" autocomplete="off">
		<input type="hidden" name="fromPageName" value="wsPUaol3.jsp" class="hidden">
			<div class="aolAccContent">
			Ai sensi della <strong>normativa antiriciclaggio</strong> (d.lgs 231/07) sei tenuto a compiere alcuni adempimenti e a fornire dichiarazioni e informazioni personali.<br>
			Ti ricordiamo che il rilascio di false informazioni oppure omissioni pu&ograve; comportare conseguenze anche di natura penale.<br>
			<br>
				<div class="aolblock">
					<h3>PROCEDURA DI IDENTIFICAZIONE</h3>
					<p>
						Tutti i <b>nuovi clienti</b> devono scegliere una modalit&agrave; di identificazione tra quelle previste.
					</p>
					<fieldset class="fullwidthradio lastrow identificazioneCont" id="identificazioneCont">
						<!-- IDENTIFICAZIONE TRAMITE BONIFICO -->
						<div class="blockradio" id="identificazioneBonifico">
							<label>
								<input type="radio" name="modalita_riconoscimento" value="bonifico" onclick="showDett(this);" id="modalita_riconoscimento1" class="identificazione">
								<span class="optiontextmini"><strong>tramite bonifico</strong> (se hai un conto corrente aperto presso l'agenzia di una banca territoriale)
									<p class="minitext nobottpad">Ogni intestatario deve effettuare un bonifico di 100 &euro; da un conto corrente intestato a suo nome o cointestato. Accrediteremo la somma versata sul tuo conto corrente dopo l'apertura.</p>
								</span>
							</label>
							<span class="dett" >
								<!-- per ogni cliente che deve fare il riconcoscimento -->
								<strong>SARA STREPPONI</strong>
								<p class="minitext">Inserisci l'IBAN del conto corrente dal quale farai il bonifico.</p>
								<fieldset>
									<span class="label">IBAN*</span>
									<input type="text" name="ibanclientebon_int1" maxlength="27" value="" id="ibanclientebon_int1">
									<script defer="defer" type="text/javascript">setCounterOnField("ibanclientebon_int1",27);</script>
									<span class="errortext">Compila</span>
								</fieldset>
								<!-- per ogni cliente che deve fare il riconcoscimento -->
							</span>
						</div>
						<br class="clear" />
						<!-- IDENTIFICAZIONE TRAMITE AGENZIA -->
						<div class="blockradio" id="identificazioneAgenzia">
							<label>
								<input type="radio" name="modalita_riconoscimento" value="agenzia" onclick="showDett(this);" id="modalita_riconoscimento2" class="identificazione">
								<span class="optiontextmini tolltipclick"><strong>in un'agenzia del Gruppo Bipiemme</strong>  
								(se non possiedi un conto corrente oppure ne hai uno 
								<span class="closed">
									<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti0">
									<span class="uniqTooltipPos"> <a href="javascript:;"> aperto online</a></span>
										<span class="uniqTooltipInnerHTML">
											Scegli questa modalità di identificazione se hai un conto corrente presso una di queste banche:<br>
											<ul>
												<li>FINECO BANK</li>
												<li>IWBANK</li>
												<li>ING DIRECT</li>
												<li>CHEBANCA! </li>
												<li>BANCA 24-7</li>
												<li>SEDICIBANCA </li>
												<li>BINCK BANK</li>
											</ul>
											o presso un istituto di moneta elettronica (IMEL)
										</span>
									</span>
								</span>)
								<p class="minitext nobottpad">
									Gli intestatari dovranno recarsi in un'agenzia del Gruppo Bipiemme (Banca popolare di Milano; Banca di Legnano; Banca Popolare di Mantova;) a firmare i documenti di apertura conto davanti ad un nostro incaricato.
									
								</p>
								</span>
							</label>
							<span class="dett">
								<p class="minitext">Seleziona la banca in cui farai l'identificazione.</p>
								<fieldset>
									<span class="label">Banca gruppo Bipiemme*</span>
									<select name="tipo_age_ric" id="tipo_age_ric">
										<option value="">seleziona</option>
										<option value="Banca Popolare di Milano">Banca Popolare di Milano</option>
										<option value="Banca di Legnano">Banca di Legnano</option>
										<option value="Banca Popolare di Mantova">Banca Popolare di Mantova</option>
									</select>
									<span class="errortext">Seleziona</span>
								</fieldset>
							</span>
							<a href="javascript:;" onclick ="$('listagenzia').show();" class="openpop">vuoi sapere qual' è l'agenzia pi&ugrave; vicina a te?</a>
							<div id="listagenzia" class="btnCont" style="display:none;" >
								<fieldset class="lastrow">
									<span class="label">Comune</span>
									<input type="text" name="comuneAgenzia" id="comuneAgenzia" value="">
									<span class="errortext">Compila</span>
								</fieldset>
								<fieldset class="btn lastrow">
									<a class="greenbutton" href="javascript:;" onclick="openListaAgenzie('/webankpub/wb/cstPopup/do/aol/ricercaAgenzia.do?BV_UseBVCookie=Yes');" title="cerca"><span>cerca</span></a>
								</fieldset>
							</div>
						</div>
						<span class="errortext">Compila</span>
					</fieldset>
				</div>
				<div class="aolblock">
					<h3>INFORMAZIONI SUI PRODOTTI SCELTI</h3>
					<div class="aolblockwrapper">
						<p>Per la  normativa antiriciclaggio devi specificare il tipo di utilizzo che farai dei prodotti scelti  insieme al conto.</p>
						<div id="adeverCJ" class="fieldblock">
							<p class="grey">Utilizzo della carta ricaricabile CartaJe@ns</p>
							<fieldset id="adeverRadioCj" class="fullwidthradio lastrow identificazioneCont">
								<fieldset class="fullwidth" style="min-height:20px">
									<label><input type="radio" name="usoContoCj" value="1|per esigenze familiari" id="usoContoCj"><span class="optiontext">per esigenze familiari</span></label>
								</fieldset>
								<fieldset class="fullwidth" style="min-height:20px">
									<label><input type="radio" name="usoContoCj" value="5|per esigenze professionali" id="usoContoCj"><span class="optiontext">per esigenze professionali</span></label>
								</fieldset>
								<span class="errortext">Seleziona</span>
							</fieldset>
						</div>
						<p>Per fornire dichiarazioni diverse dalle scelte indicate, contattaci.</p>
					</div>
					<img class="promobottom" src="/img/str_aol_dacompilarebot.gif">
				</div>
				<!-- INFORMAZIONE ATTIVITA' ECONOMICA -->
				<div class="aolblock">
					<h3>DICHIARAZIONI E INFORMAZIONI PERSONALI</h3>
					<p>&nbsp;</p>
						<div class="aolblockwrapper">
							<div class="aolAcc expanded">
								<div class="aolAccContent">
									<div id="adever1" class="fieldblock"></div>
									<script type="text/javascript">
										AdeVer.loadFieldsAol('CONTO_CORRENTE', 'all', '1', '1');
									</script>
									<h3 class="subTitle">Informazioni aggiuntive (opzionali)</h3>
									<fieldset style="width: 160px;">
										<span class="label">Componenti nucleo familiare</span>
										<div class="fieldblock">
											<select name="numeroComponentiAv_int1" id="numeroComponentiAv_int1" style="width:116px"><option value="">seleziona</option>
												<option value="1|1">1</option>
												<option value="2|2">2</option>
												<option value="3|3">3</option>
												<option value="4|4">4</option>
												<option value="5|Più di 4">Più di 4</option>
											</select>
											<span class="errortext">Seleziona</span>
										</div>
									</fieldset>
									<fieldset style="width:127px">
										<span style="width: 90px;" class="label">Amministratore dei fondi familiari</span>
										<label style="width:40px;"><input type="radio" name="amministrazionePatrimonioAv_int1" value="1" id="amministrazionePatrimonioAv_int1"><span class="optiontext">s&igrave;</span></label>
										<label style="width:40px;"><input type="radio" name="amministrazionePatrimonioAv_int1" value="0" id="amministrazionePatrimonioAv_int1"><span class="optiontext">no</span></label>
										<span class="errortext">Compila</span>
									</fieldset>
									<fieldset>
										<span class="label">Abitazione</span>
										<div class="fieldblock">
											<select name="abitazioneAv_int1" id="abitazioneAv_int1"><option value="">seleziona</option>
												<option value="1|Casa di proprietà">Casa di proprietà</option>
												<option value="2|Affitto">Affitto</option>
												<option value="3|Presso parenti/conoscenti">Presso parenti/conoscenti</option>
												<option value="4|Altro">Altro</option></select>
											<span class="errortext">Seleziona</span>
										</div>
									</fieldset>
									<br class="clear">
									<fieldset class="fullwidth lastrow check">
										<span class="label">Prodotti già posseduti</span>
										<span class="column">
											<label>
												<input type="checkbox" name="prodottiBancariAv_int1" value="1|Conto corrente/conto di deposito" id="prodottiBancariAv_int1"><span class="optiontextmini">Conto corrente/conto di deposito</span>
											</label>
											<label>
												<input type="checkbox" name="prodottiBancariAv_int1" value="2|Azioni/Obbligazioni" id="prodottiBancariAv_int1"><span class="optiontextmini">Azioni/Obbligazioni</span>
											</label>
											<label>
												<input type="checkbox" name="prodottiBancariAv_int1" value="3|Fondi comuni" id="prodottiBancariAv_int1"><span class="optiontextmini">Fondi comuni</span>
											</label>
										</span>
										<span class="column">
											<label>
												<input type="checkbox" name="prodottiBancariAv_int1" value="4|Derivati" id="prodottiBancariAv_int1"><span class="optiontextmini">Derivati</span>
											</label>
											<label>
												<input type="checkbox" name="prodottiBancariAv_int1" value="5|Prodotti assicurativi" id="prodottiBancariAv_int1"><span class="optiontextmini">Prodotti assicurativi</span>
											</label>
											<label>
												<input type="checkbox" name="prodottiBancariAv_int1" value="6|Carte di credito" id="prodottiBancariAv_int1"><span class="optiontextmini">Carte di credito</span>
											</label>
										</span>
										<span class="errortext">Compila</span>
									</fieldset>
								</div>
							</div>
						</div>
						<img class="promobottom" src="/img/str_aol_dacompilarebot.gif">
				</div>
			</div>
			<div class="filettobutton linked">
				<a href="#" title="indietro" class="backLinked">indietro</a>
				<a href="#" title="Vuoi continuare pi&ugrave; tardi?" class="bozzaLinked"><span>Vuoi continuare pi&ugrave; tardi?</span></a>
				<a href="javascript:valida(1, false);" title="avanti" class="greenbutton"><span>avanti</span></a>
			</div>
		</form>
	</div>
	<div id="aolright">
		<div class="leftit"><img alt="Il tuo conto" src="/img/tit_tuo_conto.gif"></div>
		<div class="gen">
			<ul class="elencoprodotti">
				<li>
					<span class="productname">Conto corrente</span>
					<span>Zero canone e zero commissioni.</span>
				</li>
				<li>
					<span class="productname">Deposito di risparmio</span>
					<span>Ottieni un rendimento più alto sui tuoi risparmi con le linee vincolate a 3, 6 o 12 mesi</span>
					<span class="boxedgreen"><span>Tasso 3.50 su tutte le linee vincolate</span></span>
				</li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="leftit">
			<img src="/img/tit_haiaggiunto.gif"  alt="Hai aggiunto" />
		</div>
		<div class="gen">
			<ul class="elencoprodotti">
				<li>
					<span>Carta bancomat</span>
					<span>Carta Je@ns</span>
				</li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="leftit">
			<img src="/img/tit_serve_aiuto.gif"  alt="Ti serve aiuto?" />
		</div>
		<div class="gen">
			<ul class="elencosimple">	
				<li><img alt="numero verde" src="/img/img_or_nverde_dx.gif" /><p>Luned&igrave; - venerd&igrave;: 8.30 - 20.30 sabato: 9.00 - 17.00</p></li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="gen">
			<ul class="elencosimple callmeback">
				<li><img alt="Webank ti richiama" src="/img/img_or_operatore_sm.gif" /><a href="javascript:;" onclick="openPopOverLayer('callmeback', 'floating'); valorizzaCalendario(2)">Webank ti richiama</a></li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="leftit">
			<a href="javascript:;" onclick="switchAolDoclist(this);"><img src="/img/tit_documentazione_closed.gif"  alt="Documentazione" /></a>
		</div>
		<div id="aoldoclist" style="display:none">
			<ul>
				<li><a href="/webankpub/aol/wbPDFFoglioInformativo.do?BV_UseBVCookie=Yes&cod=1.02.0" onclick="setVisitedLink(this);" target="blank">Foglio Informativo</a></li>
				<li><a href="/doc/COND_GENERALI_BANCA.pdf" onclick="setVisitedLink(this);" target="blank">Condizioni generali</a></li>
				<li><a href="/wbx/res/doc/contratto_webank_fs.pdf" onclick="setVisitedLink(this);" target="blank">Modulo richiesta</a></li>
				<li><a href="/doc/DDSContoWebank.pdf" onclick="setVisitedLink(this);" target="blank">Documento di sintesi</a></li>
				<li><a href="/doc/nsf/informativa_precontrattuale_art_190.pdf" onclick="setVisitedLink(this);" target="blank">Informativa precontrattuale servizi a distanza</a></li>
				<li><a href="/wbx/res/doc/Principali_diritti_cliente_Webank.pdf" onclick="setVisitedLink(this);" target="blank">Principali diritti del cliente</a></li>
				<li><a href="/doc/GuidaConto_WEB.pdf" onclick="setVisitedLink(this);" target="blank">Guida pratica al conto</a></li>
				<li><a href="/doc/Guida_arbitro_finanziario.pdf" onclick="setVisitedLink(this);" target="blank">Guida pratica e modulo per ricorrere all'Arbitro</a></li>
				<li><a href="/doc/contratto_carta_jeans_FS.pdf" onclick="setVisitedLink(this);" target="blank">Modulo di richiesta Carta Je@ns</a></li>
				<li><a href="/webankpub/aol/wbPDFFoglioInformativo.do?BV_UseBVCookie=Yes&cod=4.15.0" onclick="setVisitedLink(this);" onclick="setVisitedLink(this);" target="blank">Foglio informativo Carta Je@ns</a></li>
				
			</ul>
		
			<h4>Per  apertura deposito titoli</h4>
			<ul>
				<li><a href="/doc/nsf/ModuloRichiestaDT_fs.pdf" onclick="setVisitedLink(this);" target="blank">Richiesta deposito titoli</a></li>
				<li><a href="/doc/nsf/CondizioniGeneraliSI_fs.pdf" onclick="setVisitedLink(this);" target="blank">Condizioni generali</a></li>
				<li><a href="/doc/DDSDepositoTitoli.pdf" onclick="setVisitedLink(this);" target="blank">Documento di sintesi</a></li>
				<li><a href="/doc/nsf/Mifid.pdf" onclick="setVisitedLink(this);" target="blank">Informativa Mifid</a></li>
				<li><a href="/doc/Consob_Guida_alla_Conciliazione.pdf" onclick="setVisitedLink(this);" target="blank">Guida Camera di Conciliazione della CONSOB</a></li>
			</ul>
		</div>
	</div>
</div>