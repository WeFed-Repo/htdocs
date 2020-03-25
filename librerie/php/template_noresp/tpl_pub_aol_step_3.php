<div id="aolcontainer">
<!-- CONTENITORE PRINCIPALE -->
	<div id="aolleft">
		<!-- ESEMPIO GESTIONE ERRORI NON COPIARE -->
		<script type="text/javascript">
			//Esempio di setting di alcuni errori
			errori = false;
			function esempioErrori()
			{
				if (errori)
				{
					parent.location.href = "/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_4.php";
					unsetError('professione');
					return 0;
				}
				setError('professione','Lorem');
				setError('settore','Lorem');
				setError('lavoro','Lorem');
				setError('altro','Lorem');
				setError('tipo_doc_int3','Lorem');
				setError('iban2','Lorem');
				
				//Per togliere gli errori utilizzare unsetError con gli stessi parametri (id del campo)
				errori = true;
			}
		</script>

		
		<!-- FINE ESEMPIO GESTIONE ERRORI NON COPIARE -->
		
		<script type="text/javascript">
		function showDett(obj) 
		 { 
			var radioId =$(obj).closest('fieldset').find('.blockradio');
			if(!radioId.hasClass('opened')) radioId.addClass('opened');
			else{radioId.removeClass('opened');}
			if($('.btnCont')) {$('.btnCont:first').hide()};
			
		 }
		
		<!-- ESEMPIO DI COME DEVONO COMPARIRE I BLOCCHI DEL SECONDO INTESTATARIO -->
		//la funzione che segue &egrave; solo esemplificativa per mostrare i diversi blocchi nel secondo intestatario
		
		</script>
		<form name="step3">
			<div class="aolAccContent">
				<!--
				<div class="aolblock">
					<h3>PROCEDURA DI IDENTIFICAZIONE</h3>
					<div class="aolblockwrapper">
					<p>La normativa antiriciclaggio(D.Lgs 231/07) prevede che la banca verifichi l'identit&agrave; delle persone che aprono per la prima volta un conto Webank.<br />Tutti i nuovi clienti devono quindi scegliere una modalit&agrave; di identificazione tra quelle previste.</p>
					<strong>MARIO GIORDANO</strong><p>ha dichiarato di essere gi&agrave; cliente Webank, quindi non dovr&agrave;  effettuare la procedura di identificazione.

Gli altri intestatari devono scegliere una modalit&agrave; di identificazione tra quelle indicate.</p>
					<fieldset class="fullwidthradio lastrow identificazioneCont" id="identificazioneCont">
						<div class="blockradio">
							<label>
								<input type="radio"  onclick="showDett(this);" class="identificazione" title="Lorem ipsum dolor sit amet" name="identificazione" value="bonifico">
								<span class="optiontextmini">tramite bonificos<p class="minitext nobottpad">
								Ogni intestatario deve effettuare un bonifico di 100 &euro; da un conto corrente intestato a suo nome o cointestato. Accrediteremo la somma versata sul tuo conto corrente dopo l'apertura. Sono accettati anche i bonifici da conti BancoPosta. 
								</p></span>
							</label>
							<span class="dett" >
									<strong>MARIO GIORDANO</strong>
									<p class="minitext">
									Inserisci l'iBAN del conto corrente dal quale farai il bonifico.
									</p>
									<fieldset>
										<span class="label">IBAN*</span>
										<input type="text"  id="iban" maxlength="27">
										<script defer="defer" type="text/javascript">setCounterOnField("iban",27);</script>
									<span class="errortext">lorem</span>
									</fieldset>
							</span>
						</div>
						<div class="blockradio">
							<label>
								<input type="radio" onclick="showDett(this);" class="identificazione" title="Lorem ipsum dolor sit amet" name="identificazione" value="agenzia">
								<span class="optiontextmini tolltipclick"><span class="flLeft"><strong class="flLeft">in un'agenzia del Gruppo Bipiemme</strong><span class="labelConsigliato"></span></span>
								<p class="minitext nobottpad">
								Gli intestatari dovranno recarsi in un'agenzia del Gruppo Bipiemme(Banca poplare di Milano; Banca di Legnano; Banca Popolare di Mantova) a firmare i documenti di apertura conto davanti ad un nostro incaricato. 
								</p></span>
								
							</label>
							
							<a href="javascript:;" onclick ="$('listagenzia2').show();" class="openpop">vuoi sapere qual'&egrave; l'agenzia pi&ugrave; vicina a te?</a>
							<div id="listagenzia2" style="display:none;" class="btnCont">
									<fieldset class="lastrow">
										<span class="label">Comune</span>
										<input type="text" name="" value="">
										<span class="errortext">Lorem</span>
									</fieldset>
									<fieldset class="btn lastrow">
										<a class="greenbutton" href="javascript:;" title="cerca" onclick="javascript:window.open('connect.php?page=str_pub_pop_agenzia.php','main1','width=450,height=410,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes')"><span>cerca</span></a>
									</fieldset>
							</div>
						</div>
				
					<span class="errortext">lorem</span>
					</fieldset>
					</div><img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
				</div>
				-->
				
				<!-- BLOCCO IDENTIFICAZIONE MONOINTESTATARIO-->
				<!-- div class="aolblock">
					<h3>IDENTIFICAZIONE</h3>
					<div class="aolblockwrapper">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
						<div id="listagenzia" class="btnCont listagenzia" style="display:block">
							<fieldset class="lastrow">
								<label class="searchAg"><strong class="flLeft">Cerca l'agenzia pi&ugrave; vicina</strong></label>
								<input type="text" name="" value="" placeholder="indica il tuo Comune" id="comuneAgenzia">
								<span class="errortext">Lorem</span>
							</fieldset>
							<fieldset class="btn lastrow">
								<a class="greenbutton" href="javascript:;" title="cerca" onclick="javascript:window.open('connect.php?page=str_pub_pop_agenzia.php','main1','width=450,height=410,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes')"><span>cerca</span></a>
							</fieldset> 
							<br class="clear"><br>
						</div>
						<fieldset class="fullwidth check lastrow">
						   <label><input type="checkbox"  class="modBonificoInput"><span class="">Non hai la possibilit&agrave; di recarti in agenzia?</span></label>
						</fieldset>
						<div id="modBonificoId" class="modBonifico" style="display:none">
							<p>Dovrai effettuare l'identificazione nel seguendo modo:</p>
							<fieldset class="fullwidthradio lastrow tolltipclick">
								<img src="/wscmn/img/ico2inf_attivalo.gif"  class="flLeft"/>
								<div class="optiontextmini">
									<strong>fai un bonifico di 100&euro;</strong> da un conto a te intestato o cointestato. Ti accrediteremo la somma versata sul tuo conto corrente dopo l'apertura.
									Se non hai un conto corrente o se ne hai uno 
									<span class="closed">
										<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti1"><span class="uniqTooltipPos"> <a href="javascript:;">aperto online</a></span>
											<span class="uniqTooltipInnerHTML">
												<p>Scegli questa modalit&agrave; di identificazione se hai un conto corrente presso:<br>
												- un istituto di monetica elettronica<br>
								- una filiale online di banca territoriale<br>
								- una banca online (Fineco Bank, IWBank, ING DIRECT, CheBanca!, B@nca 24 - 7, SediciBanca, Binck Bank).<br>
											</p>
												</span>
										</span>
									</span>, devi necessariamente recarti in un'agenzia Bipiemme.<br class="clear"><br>
									<fieldset class="shortInput">
											<span class="label">IBAN*</span>
											<input placeholder="indica l'IBAN del conto dal quale farai il bonifico" type="text"  id="iban2" maxlength="27">
											<script defer="defer" type="text/javascript">setCounterOnField("iban2",27);</script>
										<span class="errortext">lorem</span>
									</fieldset>
								</div>
							</fieldset>
							<br class="clear">
							<div id="OtherDoc1_MonoId">
								<img src="/wscmn/img/ico2inf_attivalo.gif"  class="flLeft"/>
								<div class="optiontextmini">
									<strong>inserisci</strong> i dati di un <strong>documento di identit&agrave; diverso</strong> da quello precedentemente fornito.<br class="clear"><br>
								</div>
								<div class="aolblockwrapper">
									<fieldset class="flLeft">
										<span class="label">Tipo di documento*</span>
										<span id="selectDocumento">
											<select id="tipo_doc_int3" onchange="removeTooltip(click, $('#numero_doc_int3'));emptyFields(this)">
												<option selected value="1">Patente</option>
												<option value="2">Passaporto</option>
											</select>
											<span class="errortext">seleziona</span>
										</span>
									</fieldset>
									<fieldset class="tolltipclick">
										<span class="label"><span>Numero*</span></span>
											<span class="closed">
													<span id="numero" class="uniqTooltipText over fixed" ><span class="uniqTooltipPos"> <input id="numero_doc_int3" type="text" style="display:inline" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,0)};" onkeyup="removeTooltip(click, $('#numero'));restoreTooltipN(click,this,0)">
															<span class="errortext">Lorem</span></span>
													<span class="uniqTooltipInnerHTML">
															<p></p>
													</span>
													</span>
											</span>
										<span class="errortext">Lorem</span>
									</fieldset>
									<fieldset class="tolltipclick">
										<span class="label"><span>Data di rialscio*</span></span>
										<div id="divDataEmissione3" class="anchorTooltip">
											<div class="fieldblock">
												<span class="closed">
													<span id="rilascio" class="uniqTooltipText over fixed"><span class="uniqTooltipPos"> <input type="text" id="gg_emissione_int3" onclick="removeOpt(this,'gg');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione3')};" onkeyup="removeTooltip(click, $('#divDataEmissione3 .uniqTooltip'));restoreTooltipD(click,this,1,'divDataEmissione3')" class="opzionale" value="gg" style="width:25px">
															<span class="errortext">Lorem</span></span>
													<span class="uniqTooltipInnerHTML">
															<p></p>
													</span>
													</span>
												</span>
											</div>
											<span class="separator">/</span>
											<div class="fieldblock">
												<span class="closed">
													<span id="rilascio2" class="uniqTooltipText over fixed" ><span class="uniqTooltipPos"> <input type="text" id="mm_emissione_int3" onclick="removeOpt(this,'mm');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione3')};" onkeyup="removeTooltip(event, $('#divDataEmissione3 .uniqTooltip'));" class="opzionale" value="mm" style="width:25px">
															<span class="errortext">Lorem</span></span>
													<span class="uniqTooltipInnerHTML">
															<p></p>
													</span>
													</span>
												</span>
												<span class="errortext">Lorem</span>
											</div>
											<span class="separator">/</span>
											<div class="fieldblock">
												<span class="closed">
													<span id="rilascio3" class="uniqTooltipText over fixed"><span class="uniqTooltipPos"> <input type="text" id="aa_emissione_int3" onclick="removeOpt(this,'aaaa');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione3')};" onkeyup="removeTooltip(event, $('#divDataEmissione3 .uniqTooltip'));" class="opzionale" value="aaaa" style="width:50px">
															<span class="errortext">Lorem</span></span>
													<span class="uniqTooltipInnerHTML">
															<p></p>
													</span>
													</span>
												</span>
												<span class="errortext">Lorem</span>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<span class="label">Stato di rilascio*</span>
										<select>
											<option selected value="1">seleziona</option>
										</select>
										<span class="errortext">Lorem</span>
									</fieldset>
									<fieldset class="lastrow">
										<span class="label">Provincia di rilascio*</span>
										<input type="text"  />
										<span class="errortext">Lorem</span>
									</fieldset>
									<fieldset class="lastrow">
										<span class="label">Comune di rilascio*</span>
										<input type="text"/>
										<span class="errortext">Lorem</span>
									</fieldset><br class="clear"><br>
								</div>
								<a href="javascript:;" id="noDocOptLink_MonoId" onclick="$('#noDocOpt_MonoId').show();$(this).hide()">Non hai il documento?</a>
								
								<div class="noDocOpt" id="noDocOpt_MonoId" style="display:none">
									<div>
										<div class="optiontextmini">
											Non hai a disposizione in questo momento un secondo numero? <a href="javascript:;">Salva in bozza</a> e completa pi&ugrave; tardi
										</div>
									</div>
									<div>
										<div class="optiontextmini">
											Non possiedi nessuno dei documenti indicati? <a href="javascript:;" onclick="$('#noDocOptLink_MonoId').show();$('#noDocOpt_MonoId').hide(); $('#OtherDoc1_MonoId').hide();$('#OtherDoc2_MonoId').show();">Scegli altro documento</a>
										</div>
									</div>
								</div>
							</div>
							<div id="OtherDoc2_MonoId" style="display:none">
								<img src="/wscmn/img/ico2inf_attivalo.gif"  class="flLeft"/>
								<div class="optiontextmini">
									<strong>Non possiedi nessuno dei documenti indicati? Scegli altro documento</strong>
									<p>Lorem ipsum dolor sit amet, lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, lorem ipsum dolor sit amet.</p>
									<fieldset class="lastrow shortInput">
										<select>
											<option selected="" value="1">Seleziona</option>
											<option selected="" value="2">lorem ipsum</option>
										</select>
										<span class="errortext">Lorem</span>
									</fieldset><br class="clear"><br>
									<a href="javascript:;" onclick="$('#OtherDoc1_MonoId').show();$('#OtherDoc2_MonoId').hide();" class="docBack">Torna all'inseriemnto del documento standard</a>
								</div>
								
							</div>
						</div>
					</div>
				</div -->
				<!-- FINE BLOCCO IDENTIFICAZIONE MONOINTESTATARIO-->
				
				<!-- BLOCCO IDENTIFICAZIONE PLURIINTESTATARIO-->
				<p>Ai sensi della <strong>normativa antiriciclaggio</strong> (d.lgs 231/07) sei tenuto a compiere alcuni adempimenti e a fornire dichiarazioni e informazioni personali.<br>Ti ricordiamo che il rilascio di false informazioni oppure omissioni pu&ograve; comportare conseguenze anche di natura penale.<br>
<br></p>
				
				<div class="aolblock">
					<h3>PROCEDURA DI IDENTIFICAZIONE</h3>
					<br class="clear">
					<p>Per completare la richiesta di apertura conto, tutti gli intestatari devono identificarsi recandosi presso una <strong>qualsiasi agenzia BPM</strong> o effettuando un <strong>bonifico bancario</strong>.</p>	
					<div id="divIdentificazione1" class="fieldblock modBonifico">
						<fieldset class="withInput lastrow">
							<label><input type="radio" id="isbpmcliente_int1" onclick="$('numConto1').hide();" value="NO" name="isbpmcliente_int1" ><span class="optiontext">Agenzia BPM<br></span><br class="clear"></label>							
						</fieldset><br class="clear">
						<p class="paddLef">Vuoi sapere qual &egrave; l'agenzia <strong>BPM</strong> pi&ugrave; vicina? <a href="javascript:;" title="cerca" onclick="javascript:window.open('connect.php?page=str_pub_pop_agenzia.php','main1','width=450,height=410,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes')">Cerca agenzia</a>.</p>
						<fieldset class="withInput lastrow">
							<label style="margin-top:15px"><input type="radio" id="isbpmcliente_int1" onclick="$('numConto1').show()" value="SI" name="isbpmcliente_int1"><span class="optiontext">Bonifico</span><br class="clear"></label>
						</fieldset>
						<fieldset class="fullwidthradio lastrow tolltipclick" style="display: none;" id="numConto1">
							<img src="/wscmn/img/ico2inf_attivalo.gif" class="flLeft">
							
							<div class="optiontextmini">
								fare un <strong>bonifico</strong> da 100 &euro; da un conto intestato o cointestato a tuo nome. 
								Accrediteremo l'importo sul tuo nuovo Conto Webank. Se non possiedi un conto corrente oppure ne hai uno 
								<span class="closed">
									<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti2"><span class="uniqTooltipPos"> <a href="javascript:;">aperto online</a></span>
										<span class="uniqTooltipInnerHTML">
											Si intendono i conti correnti aperti presso:<br>
											- un istituto di monetica elettronica<br>
											- una filiale online di banca territoriale<br>
											- una banca online (Fineco Bank, IWBank, ING DIRECT, CheBanca!, B@nca 24 - , SediciBanca, Binck Bank).<br>
										</span>
									</span>
								</span>
								, devi necessariamente procedere all'identificazione in agenzia.<br class="clear"><br>
								
								
								<fieldset class="shortInput"><div class="fieldCounter"></div>
										<strong>PLUTO PIPPO</strong>
										<input value="" placeholder="indica l'IBAN del conto dal quale farai il bonifico" type="text" name="ibanclientebon_int1" id="ibanclientebon_int1" maxlength="27">
										<script defer="defer" type="text/javascript">setCounterOnField("ibanclientebon_int1",27);</script>
									<span class="errortext">Verifica</span>
								</fieldset>
								<fieldset class="shortInput"><div class="fieldCounter"></div>
										<strong>PLUTO PIPPO</strong>
										<input value="" placeholder="indica l'IBAN del conto dal quale farai il bonifico" type="text" name="ibanclientebon_int2" id="ibanclientebon_int2" maxlength="27">
										<script defer="defer" type="text/javascript">setCounterOnField("ibanclientebon_int2",27);</script>
									<span class="errortext">Verifica</span>
								</fieldset>
								
							</div>
							<br class="clear"><br>
							
							<div class="aolblockwrapper">
							<div class="aolAcc expanded">
								<div class="aolAccTop">
									<a class="aolAccTitle small" id="intestatario1" onclick="switchExp(this,true);" href="javascript:;">
											<span class="titoloAcc">Intestatario 1 - Lorem ipsum dolor sit amet </span>
											<span href="javascript:;" class="accButt"></span>
											<span class="errortext"></span>
									</a>
								</div>
								<div class="clear"></div>
								<div class="aolAccContent">
									<div id="blockDocIndentita1">				
										<img src="/wscmn/img/ico2inf_attivalo.gif" class="flLeft">
										<div class="optiontextmini">
										indicare un altro <strong>documento d'identit&agrave;</strong> (diverso da quello che hai precedentemente inserito)<br class="clear"><br>
										</div>				
										<fieldset>
											<span class="label">Tipo di documento*</span>
											<select name="tipo_doc2_int1" onchange="removeTooltip(click, $('#numero1'));removeTooltip(click, $('#divDataEmissione1 .uniqTooltip'));emptyFields(this);" id="tipo_doc2_int1"><option value="Patente">Patente</option>
												<option value="Passaporto">Passaporto</option></select>
											<span class="errortext">Seleziona</span>
										</fieldset>
				
										<fieldset class="tolltipclick">
					<span class="label"><span>Numero*</span></span>
					<span class="closed">
						<span id="numero1" class="uniqTooltipText over fixed" >
							<span class="uniqTooltipPos">
							<input type="text" name="numero_doc2_int1" maxlength="16" value="" onkeyup="removeTooltip(click, $('#numero1'));restoreTooltipN(click,this,0)" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,0)};" id="numero_doc_int1" style="display:inline">
							<span class="errortext">Compila</span>
							</span>
							<span class="uniqTooltipInnerHTML">
									<p></p>
							</span>
						</span>
					</span>
				</fieldset>
		
										<fieldset class="tolltipclick">
											<span class="label"><span>Data di rilascio*</span></span>
											
											<div id="divDataEmissione1" class="anchorTooltip">
												
												<div class="fieldblock">
													<span class="closed">
														<span id="rilascio11" class="uniqTooltipText over fixed"><span class="uniqTooltipPos"> 
															<input type="text" name="gg_emissione2_int1" maxlength="2" value="gg" onclick="removeOpt(this,'gg')" onkeyup="removeOpt(this,'gg');nextFocus(this, mm_emissione2_int1,'gg', 2);removeTooltip(click, $('#divDataEmissione1 .uniqTooltip'));restoreTooltipD(click,this,1,'divDataEmissione1');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione1')};" id="gg_emissione2_int1" style="width:25px;" class="opzionale">
															<span class="uniqTooltipInnerHTML">
																<p></p>
															</span>
														</span>
														</span>
													</span>
													<span class="errortext">Compila</span>
												</div>
												
												<span class="separator">/</span>
												
												<div class="fieldblock">
													<span class="closed">
														<span id="rilascio21" class="uniqTooltipText over fixed">
															<span class="uniqTooltipPos">
																<input type="text" name="mm_emissione2_int1" maxlength="2" value="mm" onclick="removeOpt(this,'mm')" onkeyup="removeOpt(this,'mm');nextFocus(this, aa_emissione2_int1,'mm', 2);removeTooltip(click, $('#divDataEmissione1 .uniqTooltip'));restoreTooltipD(click,this,1,'divDataEmissione1');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione1')};" id="mm_emissione2_int1" style="width:25px;" class="opzionale">
															</span>
															<span class="uniqTooltipInnerHTML">
																	<p></p>
															</span>
														</span>
													</span>
													<span class="errortext">Compila</span>
												</div>
												<span class="separator">/</span>
												
												<div class="fieldblock">
													<span class="closed">
														<span id="rilascio31" class="uniqTooltipText over fixed">
															<span class="uniqTooltipPos"> 
																<input type="text" name="aa_emissione2_int1" maxlength="4" value="aaaa" onclick="removeOpt(this,'aaaa')" onkeyup="removeTooltip(event, $('#divDataEmissione1 .uniqTooltip'));" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione1')};" id="aa_emissione2_int1" style="width:50px;" class="opzionale">
																<span class="uniqTooltipInnerHTML">
																		<p></p>
																</span>
															</span>
														</span>
													</span>
													<span class="errortext">Compila</span>
												</div>
											</div>
											<span class="errortext"></span>
										</fieldset>
					
										<fieldset>
											<span class="label">Stato di rilascio*</span>
											<select name="stato_emissione2_int1" onchange="checkStato(this.value,'provincia_emissione2_int1','comune_emissione2_int1');" id="stato_emissione2_int1"><option value="">seleziona</option>
												
													<option value="ABU DHABI">ABU DHABI</option>
												
													<option value="AFGHANISTAN">AFGHANISTAN</option>
												
													<option value="AFRICA PORTOGHESE">AFRICA PORTOGHESE</option>
												
													<option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
												
													<option value="AJMAN">AJMAN</option>
												
													<option value="ALBANIA">ALBANIA</option>
												
													<option value="ALGERIA">ALGERIA</option>
												
													<option value="AMERICA BRITANNICA">AMERICA BRITANNICA</option>
												
													<option value="AMERICA FRANCESE">AMERICA FRANCESE</option>
												
													<option value="ANDORRA">ANDORRA</option>
												
													<option value="ANGOLA">ANGOLA</option>
												
													<option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
												
													<option value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
												
													<option value="APOLIDE">APOLIDE</option>
												
													<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
												
													<option value="ARGENTINA">ARGENTINA</option>
												
													<option value="ARMENIA">ARMENIA</option>
												
													<option value="ARUBA">ARUBA</option>
												
													<option value="ASIA PORTOGHESE">ASIA PORTOGHESE</option>
												
													<option value="AUSTRALIA">AUSTRALIA</option>
												
													<option value="AUSTRIA">AUSTRIA</option>
												
													<option value="AZERBAIGIAN">AZERBAIGIAN</option>
												
													<option value="BAHAMA">BAHAMA</option>
												
													<option value="BAHREIN">BAHREIN</option>
												
													<option value="BANGLADESH">BANGLADESH</option>
												
													<option value="BARBADOS">BARBADOS</option>
												
													<option value="BELGIO">BELGIO</option>
												
													<option value="BELIZE">BELIZE</option>
												
													<option value="BENIN">BENIN</option>
												
													<option value="BERMUDA">BERMUDA</option>
												
													<option value="BHUTAN">BHUTAN</option>
												
													<option value="BIELORUSSIA">BIELORUSSIA</option>
												
													<option value="BOLIVIA">BOLIVIA</option>
												
													<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
												
													<option value="BOTSWANA">BOTSWANA</option>
												
													<option value="BRASILE">BRASILE</option>
												
													<option value="BRUNEI">BRUNEI</option>
												
													<option value="BULGARIA">BULGARIA</option>
												
													<option value="BURKINA FASO">BURKINA FASO</option>
												
													<option value="BURUNDI">BURUNDI</option>
												
													<option value="CAMERUN">CAMERUN</option>
												
													<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
												
													<option value="CANADA">CANADA</option>
												
													<option value="CAPO VERDE">CAPO VERDE</option>
												
													<option value="CAYMAN ISLANDS">CAYMAN ISLANDS</option>
												
													<option value="CENTROAFRICANA REP.">CENTROAFRICANA REP.</option>
												
													<option value="CIAD">CIAD</option>
												
													<option value="CILE">CILE</option>
												
													<option value="CINA REP.POP.">CINA REP.POP.</option>
												
													<option value="CIPRO">CIPRO</option>
												
													<option value="COLOMBIA">COLOMBIA</option>
												
													<option value="CONGO">CONGO</option>
												
													<option value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
												
													<option value="COREA DEL NORD">COREA DEL NORD</option>
												
													<option value="COREA DEL SUD">COREA DEL SUD</option>
												
													<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
												
													<option value="COSTARICA">COSTARICA</option>
												
													<option value="CROAZIA">CROAZIA</option>
												
													<option value="CUBA">CUBA</option>
												
													<option value="DANIMARCA">DANIMARCA</option>
												
													<option value="DOMINICA">DOMINICA</option>
												
													<option value="DOMINICANA REP.">DOMINICANA REP.</option>
												
													<option value="DUBAI">DUBAI</option>
												
													<option value="ECUADOR">ECUADOR</option>
												
													<option value="EGITTO">EGITTO</option>
												
													<option value="EMIRATI ARABI UNITI">EMIRATI ARABI UNITI</option>
												
													<option value="ERITREA">ERITREA</option>
												
													<option value="ESTONIA">ESTONIA</option>
												
													<option value="ETIOPIA">ETIOPIA</option>
												
													<option value="FILIPPINE">FILIPPINE</option>
												
													<option value="FINLANDIA">FINLANDIA</option>
												
													<option value="FRANCIA">FRANCIA</option>
												
													<option value="FUIJAYRAH">FUIJAYRAH</option>
												
													<option value="GABON">GABON</option>
												
													<option value="GAMBIA">GAMBIA</option>
												
													<option value="GEORGIA">GEORGIA</option>
												
													<option value="GERMANIA">GERMANIA</option>
												
													<option value="GHANA">GHANA</option>
												
													<option value="GIAMAICA">GIAMAICA</option>
												
													<option value="GIAPPONE">GIAPPONE</option>
												
													<option value="GIBILTERRA">GIBILTERRA</option>
												
													<option value="GIBUTI">GIBUTI</option>
												
													<option value="GIORDANIA">GIORDANIA</option>
												
													<option value="GRECIA">GRECIA</option>
												
													<option value="GRENADA">GRENADA</option>
												
													<option value="GROENLANDIA">GROENLANDIA</option>
												
													<option value="GUADALUPA">GUADALUPA</option>
												
													<option value="GUATEMALA">GUATEMALA</option>
												
													<option value="GUERNSEY">GUERNSEY</option>
												
													<option value="GUINEA">GUINEA</option>
												
													<option value="GUINEA BISSAU">GUINEA BISSAU</option>
												
													<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
												
													<option value="GUYANA">GUYANA</option>
												
													<option value="HAITI">HAITI</option>
												
													<option value="HONDURAS">HONDURAS</option>
												
													<option value="HONG KONG">HONG KONG</option>
												
													<option value="INDIA">INDIA</option>
												
													<option value="INDONESIA">INDONESIA</option>
												
													<option value="IRAN">IRAN</option>
												
													<option value="IRAQ">IRAQ</option>
												
													<option value="IRLANDA">IRLANDA</option>
												
													<option value="ISLANDA">ISLANDA</option>
												
													<option value="ISOLA DELLA RIUNIONE">ISOLA DELLA RIUNIONE</option>
												
													<option value="ISOLA MAN">ISOLA MAN</option>
												
													<option value="ISOLA MAURIZIO">ISOLA MAURIZIO</option>
												
													<option value="ISOLE COMORE">ISOLE COMORE</option>
												
													<option value="ISOLE FAR OER">ISOLE FAR OER</option>
												
													<option value="ISOLE FIJI">ISOLE FIJI</option>
												
													<option value="ISOLE SALOMONE">ISOLE SALOMONE</option>
												
													<option value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
												
													<option value="ISOLE VERGINI U.S.A.">ISOLE VERGINI U.S.A.</option>
												
													<option value="ISRAELE">ISRAELE</option>
												
													<option value="ITALIA" selected="selected">ITALIA</option>
												
													<option value="JERSEY">JERSEY</option>
												
													<option value="JUGOSLAVIA">JUGOSLAVIA</option>
												
													<option value="KAMPUCHEA">KAMPUCHEA</option>
												
													<option value="KAZAKISTAN">KAZAKISTAN</option>
												
													<option value="KENYA">KENYA</option>
												
													<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
												
													<option value="KIRIBATI">KIRIBATI</option>
												
													<option value="KOSSOVO">KOSSOVO</option>
												
													<option value="KUWAIT">KUWAIT</option>
												
													<option value="LAOS">LAOS</option>
												
													<option value="LESOTHO">LESOTHO</option>
												
													<option value="LETTONIA">LETTONIA</option>
												
													<option value="LIBANO">LIBANO</option>
												
													<option value="LIBERIA">LIBERIA</option>
												
													<option value="LIBIA">LIBIA</option>
												
													<option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
												
													<option value="LITUANIA">LITUANIA</option>
												
													<option value="LUSSEMBURGO">LUSSEMBURGO</option>
												
													<option value="MACEDONIA">MACEDONIA</option>
												
													<option value="MADAGASCAR">MADAGASCAR</option>
												
													<option value="MALAWI">MALAWI</option>
												
													<option value="MALAYSIA">MALAYSIA</option>
												
													<option value="MALDIVE">MALDIVE</option>
												
													<option value="MALI">MALI</option>
												
													<option value="MALTA">MALTA</option>
												
													<option value="MAROCCO">MAROCCO</option>
												
													<option value="MARSHALL">MARSHALL</option>
												
													<option value="MARTINICA">MARTINICA</option>
												
													<option value="MAURITANIA">MAURITANIA</option>
												
													<option value="MESSICO">MESSICO</option>
												
													<option value="MOLDAVIA">MOLDAVIA</option>
												
													<option value="MONGOLIA">MONGOLIA</option>
												
													<option value="MONTENEGRO">MONTENEGRO</option>
												
													<option value="MOZAMBICO">MOZAMBICO</option>
												
													<option value="MYANMAR">MYANMAR</option>
												
													<option value="N.C.">N.C.</option>
												
													<option value="NAMIBIA">NAMIBIA</option>
												
													<option value="NAURU">NAURU</option>
												
													<option value="NEPAL">NEPAL</option>
												
													<option value="NICARAGUA">NICARAGUA</option>
												
													<option value="NIGER">NIGER</option>
												
													<option value="NIGERIA">NIGERIA</option>
												
													<option value="NORVEGIA">NORVEGIA</option>
												
													<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
												
													<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
												
													<option value="OCEANIA AUSTRALIANA">OCEANIA AUSTRALIANA</option>
												
													<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
												
													<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
												
													<option value="OCEANIA FRANCESE">OCEANIA FRANCESE</option>
												
													<option value="OCEANIA NEOZELANDESE">OCEANIA NEOZELANDESE</option>
												
													<option value="OLANDA">OLANDA</option>
												
													<option value="OMAN">OMAN</option>
												
													<option value="PAKISTAN">PAKISTAN</option>
												
													<option value="PANAMA">PANAMA</option>
												
													<option value="PAPUA - NUOVA  GUINEA">PAPUA - NUOVA  GUINEA</option>
												
													<option value="PARAGUAY">PARAGUAY</option>
												
													<option value="PERU'">PERU'</option>
												
													<option value="POLONIA">POLONIA</option>
												
													<option value="PORTOGALLO">PORTOGALLO</option>
												
													<option value="PORTORICO">PORTORICO</option>
												
													<option value="POSSEDIMENTI U.S.A.">POSSEDIMENTI U.S.A.</option>
												
													<option value="PRINCIPATO DI MONACO">PRINCIPATO DI MONACO</option>
												
													<option value="QATAR">QATAR</option>
												
													<option value="RAS EL KHAIMAH">RAS EL KHAIMAH</option>
												
													<option value="REGNO UNITO">REGNO UNITO</option>
												
													<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
												
													<option value="REPUBBLICA SLOVACCA">REPUBBLICA SLOVACCA</option>
												
													<option value="ROMANIA">ROMANIA</option>
												
													<option value="RUSSIA">RUSSIA</option>
												
													<option value="RWANDA">RWANDA</option>
												
													<option value="SAINT LUCIA">SAINT LUCIA</option>
												
													<option value="SALVADOR">SALVADOR</option>
												
													<option value="SAMOA">SAMOA</option>
												
													<option value="SAN MARINO">SAN MARINO</option>
												
													<option value="SANT'ELENA">SANT'ELENA</option>
												
													<option value="SAO TOME E PRINCIPE">SAO TOME E PRINCIPE</option>
												
													<option value="SENEGAL">SENEGAL</option>
												
													<option value="SERBIA">SERBIA</option>
												
													<option value="SERBIA AND MONTENEGRO">SERBIA AND MONTENEGRO</option>
												
													<option value="SEYCHELLES">SEYCHELLES</option>
												
													<option value="SHARJAH">SHARJAH</option>
												
													<option value="SIERRA LEONE">SIERRA LEONE</option>
												
													<option value="SINGAPORE">SINGAPORE</option>
												
													<option value="SIRIA">SIRIA</option>
												
													<option value="SLOVENIA">SLOVENIA</option>
												
													<option value="SOMALIA">SOMALIA</option>
												
													<option value="SPAGNA">SPAGNA</option>
												
													<option value="SRI LANKA">SRI LANKA</option>
												
													<option value="ST. VINCENT E GRENADINE">ST. VINCENT E GRENADINE</option>
												
													<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
												
													<option value="SUDAFRICANA REP.">SUDAFRICANA REP.</option>
												
													<option value="SUDAN">SUDAN</option>
												
													<option value="SURINAME">SURINAME</option>
												
													<option value="SVEZIA">SVEZIA</option>
												
													<option value="SVIZZERA">SVIZZERA</option>
												
													<option value="SWAZILAND">SWAZILAND</option>
												
													<option value="TAGIKISTAN">TAGIKISTAN</option>
												
													<option value="TAIWAN">TAIWAN</option>
												
													<option value="TANZANIA">TANZANIA</option>
												
													<option value="TERRITORI AUTONOMI PALESTINA">TERRITORI AUTONOMI PALESTINA</option>
												
													<option value="TERRITORIO BRITANNICO OCEANO I">TERRITORIO BRITANNICO OCEANO I</option>
												
													<option value="THAILANDIA">THAILANDIA</option>
												
													<option value="TOGO">TOGO</option>
												
													<option value="TONGA">TONGA</option>
												
													<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
												
													<option value="TUNISIA">TUNISIA</option>
												
													<option value="TURCHIA">TURCHIA</option>
												
													<option value="TURKMENISTAN">TURKMENISTAN</option>
												
													<option value="TURKS E CAICOS">TURKS E CAICOS</option>
												
													<option value="TUVALU'">TUVALU'</option>
												
													<option value="UCRAINA">UCRAINA</option>
												
													<option value="UGANDA">UGANDA</option>
												
													<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
												
													<option value="UNGHERIA">UNGHERIA</option>
												
													<option value="URUGUAY">URUGUAY</option>
												
													<option value="UZBEKISTAN">UZBEKISTAN</option>
												
													<option value="VANUATU">VANUATU</option>
												
													<option value="VENEZUELA">VENEZUELA</option>
												
													<option value="VIETNAM">VIETNAM</option>
												
													<option value="YEMEN">YEMEN</option>
												
													<option value="ZAMBIA">ZAMBIA</option>
												
													<option value="ZIMBABWE">ZIMBABWE</option></select>
											<span class="errortext">Seleziona</span>
										</fieldset>
					
										<br class="clear">
					
										<fieldset class="lastrow">
											<span class="label">Provincia di rilascio*</span>
											<select name="provincia_emissione2_int1" onchange="ProvCom.updateComuni('divComuneEmissione1', 'provincia_emissione2_int1', 'comune_emissione2_int1', 'comune_emissione2_int1', 'no', 'Comune di rilascio*');" id="provincia_emissione2_int1"><option value="">seleziona</option>
												
													<option value="AG">AG</option>
												
													<option value="AL">AL</option>
												
													<option value="AN">AN</option>
												
													<option value="AO">AO</option>
												
													<option value="AP">AP</option>
												
													<option value="AQ">AQ</option>
												
													<option value="AR">AR</option>
												
													<option value="AT">AT</option>
												
													<option value="AV">AV</option>
												
													<option value="BA">BA</option>
												
													<option value="BG">BG</option>
												
													<option value="BI">BI</option>
												
													<option value="BL">BL</option>
												
													<option value="BN">BN</option>
												
													<option value="BO">BO</option>
												
													<option value="BR">BR</option>
												
													<option value="BS">BS</option>
												
													<option value="BT">BT</option>
												
													<option value="BZ">BZ</option>
												
													<option value="CA">CA</option>
												
													<option value="CB">CB</option>
												
													<option value="CE">CE</option>
												
													<option value="CH">CH</option>
												
													<option value="CI">CI</option>
												
													<option value="CL">CL</option>
												
													<option value="CN">CN</option>
												
													<option value="CO">CO</option>
												
													<option value="CR">CR</option>
												
													<option value="CS">CS</option>
												
													<option value="CT">CT</option>
												
													<option value="CZ">CZ</option>
												
													<option value="EN">EN</option>
												
													<option value="FC">FC</option>
												
													<option value="FE">FE</option>
												
													<option value="FG">FG</option>
												
													<option value="FI">FI</option>
												
													<option value="FM">FM</option>
												
													<option value="FR">FR</option>
												
													<option value="GE">GE</option>
												
													<option value="GO">GO</option>
												
													<option value="GR">GR</option>
												
													<option value="IM">IM</option>
												
													<option value="IS">IS</option>
												
													<option value="KR">KR</option>
												
													<option value="LC">LC</option>
												
													<option value="LE">LE</option>
												
													<option value="LI">LI</option>
												
													<option value="LO">LO</option>
												
													<option value="LT">LT</option>
												
													<option value="LU">LU</option>
												
													<option value="MB">MB</option>
												
													<option value="MC">MC</option>
												
													<option value="ME">ME</option>
												
													<option value="MI">MI</option>
												
													<option value="MN">MN</option>
												
													<option value="MO">MO</option>
												
													<option value="MS">MS</option>
												
													<option value="MT">MT</option>
												
													<option value="NA">NA</option>
												
													<option value="NO">NO</option>
												
													<option value="NU">NU</option>
												
													<option value="OG">OG</option>
												
													<option value="OR">OR</option>
												
													<option value="OT">OT</option>
												
													<option value="PA">PA</option>
												
													<option value="PC">PC</option>
												
													<option value="PD">PD</option>
												
													<option value="PE">PE</option>
												
													<option value="PG">PG</option>
												
													<option value="PI">PI</option>
												
													<option value="PN">PN</option>
												
													<option value="PO">PO</option>
												
													<option value="PR">PR</option>
												
													<option value="PT">PT</option>
												
													<option value="PU">PU</option>
												
													<option value="PV">PV</option>
												
													<option value="PZ">PZ</option>
												
													<option value="RA">RA</option>
												
													<option value="RC">RC</option>
												
													<option value="RE">RE</option>
												
													<option value="RG">RG</option>
												
													<option value="RI">RI</option>
												
													<option value="RM">RM</option>
												
													<option value="RN">RN</option>
												
													<option value="RO">RO</option>
												
													<option value="SA">SA</option>
												
													<option value="SI">SI</option>
												
													<option value="SO">SO</option>
												
													<option value="SP">SP</option>
												
													<option value="SR">SR</option>
												
													<option value="SS">SS</option>
												
													<option value="SV">SV</option>
												
													<option value="TA">TA</option>
												
													<option value="TE">TE</option>
												
													<option value="TN">TN</option>
												
													<option value="TO">TO</option>
												
													<option value="TP">TP</option>
												
													<option value="TR">TR</option>
												
													<option value="TS">TS</option>
												
													<option value="TV">TV</option>
												
													<option value="UD">UD</option>
												
													<option value="VA">VA</option>
												
													<option value="VB">VB</option>
												
													<option value="VC">VC</option>
												
													<option value="VE">VE</option>
												
													<option value="VI">VI</option>
												
													<option value="VR">VR</option>
												
													<option value="VS">VS</option>
												
													<option value="VT">VT</option>
												
													<option value="VV">VV</option></select>
											<span class="errortext">Seleziona</span>
										</fieldset>
					
										<div id="divComuneEmissione1">
										<fieldset class="lastrow">
											<span class="label">Comune di rilascio*</span>
											<select name="comune_emissione2_int1" id="comune_emissione2_int1"><option value="">seleziona</option></select>
											<span class="errortext">Seleziona</span>
										</fieldset>
										</div>
					
										<br class="clear"><br>
										<a href="javascript:;" id="linkNoDocIndentita1" onclick="$('#blockEscapeDoc1').show();$(this).hide()">Non hai due diversi documenti d'identit&agrave;?</a>							
									</div>
									<div id="blockEscapeDoc1" class="noDocOpt" style="display:none">
										<div>
											<div class="optiontextmini">
												Se in questo momento non hai a portata di mano un secondo documento d'identit&agrave;, puoi <strong><a href="/webankpub/aol/registrazioneLogin.do?BV_UseBVCookie=Yes&amp;numPag=3&amp;&amp;funz=bozze&amp;fromAol=yes&amp;CNT_TARGET=Privati&amp;OBS_KEY=pro_wbn_apri_conto_webank" title="Vuoi continuare pi&ugrave; tardi?">salvare la richiesta di apertura conto</a> e continuare pi&ugrave; tardi</strong>.
											</div>
										</div>
										<div>
											<div class="optiontextmini">
												Non possiedi due diversi documenti d'identit&agrave;? <a href="javascript:;" onclick="$('#blockChooseOtherDoc1').show();$('#blockEscapeDoc1').hide();$('#blockDocIndentita1').hide();">Scegli un altro documento</a>
											</div>
										</div>
									</div>	
									<br class="clear">
									<div id="blockChooseOtherDoc1" style="display: none;">
										<img src="/wscmn/img/ico2inf_attivalo.gif" class="flLeft">
										<div class="optiontextmini">
											<strong>Non possiedi due diversi documenti d'identit&agrave;?</strong>
											<p>In alternativa, scegli uno dei documenti che ti elenchiamo di seguito. Dovrai allegarne una copia insieme alla documentazione da spedire.</p>
											<fieldset class="row">
												<select name="altroDoc_int1" id="altroDoc_int1"><option value="">seleziona</option>
													
													<option value="1">Patente nautica</option>
													
													<option value="2">Licenza di porto d'armi</option>
													
													<option value="3">Libretto di pensione</option>
													
													<option value="4">Patentino di abilitazione alla conduzione di impianti termici</option>
													
													<option value="5">Tessera di riconoscimento rilasciata da un'amministrazione dello Stato</option>
													
													<option value="6">Attestazione timbrata e sottoscritta da una Banca territoriale</option>
													
													<option value="7">Rogito</option>
													
													<option value="8">Testamento</option>
													
													<option value="9">Atto di vendita auto registrato al P.R.A</option>
													
													<option value="10">Atto costitutivo di societ&agrave;</option>
													
													<option value="11">Certificato di firma digitale</option>
													
													<option value="13">Certificato di residenza</option>
													
													<option value="12">Bolletta intestata</option></select>
												<span class="errortext">Seleziona</span>
											</fieldset><br class="clear"><br>
											<a href="javascript:;" onclick="$('#blockDocIndentita1,#linkNoDocIndentita1').show();$('#blockChooseOtherDoc1').hide();resetblockDocIndentita(1);" class="docBack">Annulla</a>
										</div>
									</div>								
									</div>
								</div>
								
								<div class="aolAcc">
								<div class="aolAccTop">
									<a class="aolAccTitle small" id="intestatario1" onclick="switchExp(this,true);" href="javascript:;">
											<span class="titoloAcc">Intestatario 2 - Lorem ipsum dolor sit amet </span>
											<span href="javascript:;" class="accButt"></span>
											<span class="errortext"></span>
									</a>
								</div>
								<div class="clear"></div>
								<div class="aolAccContent">
									<div id="blockDocIndentita2">				
										<img src="/wscmn/img/ico2inf_attivalo.gif" class="flLeft">
										<div class="optiontextmini">
										indicare un altro <strong>documento d'identit&agrave;</strong> (diverso da quello che hai precedentemente inserito)<br class="clear"><br>
										</div>				
										<fieldset>
											<span class="label">Tipo di documento*</span>
											<select name="tipo_doc2_int1" onchange="removeTooltip(click, $('#numero1'));removeTooltip(click, $('#divDataEmissione1 .uniqTooltip'));emptyFields(this);" id="tipo_doc2_int1"><option value="Patente">Patente</option>
												<option value="Passaporto">Passaporto</option></select>
											<span class="errortext">Seleziona</span>
										</fieldset>
				
										<fieldset class="tolltipclick">
											<span class="label"><span>Numero*</span></span>
											<span class="closed">
												<span id="numero1" class="uniqTooltipText over fixed">
													<span class="uniqTooltipPos">
													<input type="text" name="numero_doc2_int1" maxlength="16" value="" onkeyup="removeTooltip(click, $('#numero1'));restoreTooltipN(click,this,0)" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,0)};" id="numero_doc2_int1" style="display:inline">
													<span class="errortext">Compila</span>
													</span>
													<span class="uniqTooltipInnerHTML">
															<p></p>
													</span>
												</span>
											</span>
										</fieldset>
		
										<fieldset class="tolltipclick">
											<span class="label"><span>Data di rilascio*</span></span>
											
											<div id="divDataEmissione1" class="anchorTooltip">
												
												<div class="fieldblock">
													<span class="closed">
														<span id="rilascio11" class="uniqTooltipText over fixed"><span class="uniqTooltipPos"> 
															<input type="text" name="gg_emissione2_int1" maxlength="2" value="gg" onclick="removeOpt(this,'gg')" onkeyup="removeOpt(this,'gg');nextFocus(this, mm_emissione2_int1,'gg', 2);removeTooltip(click, $('#divDataEmissione1 .uniqTooltip'));restoreTooltipD(click,this,1,'divDataEmissione1');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione1')};" id="gg_emissione2_int1" style="width:25px;" class="opzionale">
															<span class="uniqTooltipInnerHTML">
																<p></p>
															</span>
														</span>
														</span>
													</span>
													<span class="errortext">Compila</span>
												</div>
												
												<span class="separator">/</span>
												
												<div class="fieldblock">
													<span class="closed">
														<span id="rilascio21" class="uniqTooltipText over fixed">
															<span class="uniqTooltipPos">
																<input type="text" name="mm_emissione2_int1" maxlength="2" value="mm" onclick="removeOpt(this,'mm')" onkeyup="removeOpt(this,'mm');nextFocus(this, aa_emissione2_int1,'mm', 2);removeTooltip(click, $('#divDataEmissione1 .uniqTooltip'));restoreTooltipD(click,this,1,'divDataEmissione1');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione1')};" id="mm_emissione2_int1" style="width:25px;" class="opzionale">
															</span>
															<span class="uniqTooltipInnerHTML">
																	<p></p>
															</span>
														</span>
													</span>
													<span class="errortext">Compila</span>
												</div>
												<span class="separator">/</span>
												
												<div class="fieldblock">
													<span class="closed">
														<span id="rilascio31" class="uniqTooltipText over fixed">
															<span class="uniqTooltipPos"> 
																<input type="text" name="aa_emissione2_int1" maxlength="4" value="aaaa" onclick="removeOpt(this,'aaaa')" onkeyup="removeTooltip(event, $('#divDataEmissione1 .uniqTooltip'));" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione1')};" id="aa_emissione2_int1" style="width:50px;" class="opzionale">
																<span class="uniqTooltipInnerHTML">
																		<p></p>
																</span>
															</span>
														</span>
													</span>
													<span class="errortext">Compila</span>
												</div>
											</div>
											<span class="errortext"></span>
										</fieldset>
					
										<fieldset>
											<span class="label">Stato di rilascio*</span>
											<select name="stato_emissione2_int1" onchange="checkStato(this.value,'provincia_emissione2_int1','comune_emissione2_int1');" id="stato_emissione2_int1"><option value="">seleziona</option>
												
													<option value="ABU DHABI">ABU DHABI</option>
												
													<option value="AFGHANISTAN">AFGHANISTAN</option>
												
													<option value="AFRICA PORTOGHESE">AFRICA PORTOGHESE</option>
												
													<option value="AFRICA SPAGNOLA">AFRICA SPAGNOLA</option>
												
													<option value="AJMAN">AJMAN</option>
												
													<option value="ALBANIA">ALBANIA</option>
												
													<option value="ALGERIA">ALGERIA</option>
												
													<option value="AMERICA BRITANNICA">AMERICA BRITANNICA</option>
												
													<option value="AMERICA FRANCESE">AMERICA FRANCESE</option>
												
													<option value="ANDORRA">ANDORRA</option>
												
													<option value="ANGOLA">ANGOLA</option>
												
													<option value="ANTIGUA E BARBUDA">ANTIGUA E BARBUDA</option>
												
													<option value="ANTILLE OLANDESI">ANTILLE OLANDESI</option>
												
													<option value="APOLIDE">APOLIDE</option>
												
													<option value="ARABIA SAUDITA">ARABIA SAUDITA</option>
												
													<option value="ARGENTINA">ARGENTINA</option>
												
													<option value="ARMENIA">ARMENIA</option>
												
													<option value="ARUBA">ARUBA</option>
												
													<option value="ASIA PORTOGHESE">ASIA PORTOGHESE</option>
												
													<option value="AUSTRALIA">AUSTRALIA</option>
												
													<option value="AUSTRIA">AUSTRIA</option>
												
													<option value="AZERBAIGIAN">AZERBAIGIAN</option>
												
													<option value="BAHAMA">BAHAMA</option>
												
													<option value="BAHREIN">BAHREIN</option>
												
													<option value="BANGLADESH">BANGLADESH</option>
												
													<option value="BARBADOS">BARBADOS</option>
												
													<option value="BELGIO">BELGIO</option>
												
													<option value="BELIZE">BELIZE</option>
												
													<option value="BENIN">BENIN</option>
												
													<option value="BERMUDA">BERMUDA</option>
												
													<option value="BHUTAN">BHUTAN</option>
												
													<option value="BIELORUSSIA">BIELORUSSIA</option>
												
													<option value="BOLIVIA">BOLIVIA</option>
												
													<option value="BOSNIA ERZEGOVINA">BOSNIA ERZEGOVINA</option>
												
													<option value="BOTSWANA">BOTSWANA</option>
												
													<option value="BRASILE">BRASILE</option>
												
													<option value="BRUNEI">BRUNEI</option>
												
													<option value="BULGARIA">BULGARIA</option>
												
													<option value="BURKINA FASO">BURKINA FASO</option>
												
													<option value="BURUNDI">BURUNDI</option>
												
													<option value="CAMERUN">CAMERUN</option>
												
													<option value="CAMPIONE D'ITALIA">CAMPIONE D'ITALIA</option>
												
													<option value="CANADA">CANADA</option>
												
													<option value="CAPO VERDE">CAPO VERDE</option>
												
													<option value="CAYMAN ISLANDS">CAYMAN ISLANDS</option>
												
													<option value="CENTROAFRICANA REP.">CENTROAFRICANA REP.</option>
												
													<option value="CIAD">CIAD</option>
												
													<option value="CILE">CILE</option>
												
													<option value="CINA REP.POP.">CINA REP.POP.</option>
												
													<option value="CIPRO">CIPRO</option>
												
													<option value="COLOMBIA">COLOMBIA</option>
												
													<option value="CONGO">CONGO</option>
												
													<option value="CONGO REPUBBLICA DEMOCRATICA">CONGO REPUBBLICA DEMOCRATICA</option>
												
													<option value="COREA DEL NORD">COREA DEL NORD</option>
												
													<option value="COREA DEL SUD">COREA DEL SUD</option>
												
													<option value="COSTA D'AVORIO">COSTA D'AVORIO</option>
												
													<option value="COSTARICA">COSTARICA</option>
												
													<option value="CROAZIA">CROAZIA</option>
												
													<option value="CUBA">CUBA</option>
												
													<option value="DANIMARCA">DANIMARCA</option>
												
													<option value="DOMINICA">DOMINICA</option>
												
													<option value="DOMINICANA REP.">DOMINICANA REP.</option>
												
													<option value="DUBAI">DUBAI</option>
												
													<option value="ECUADOR">ECUADOR</option>
												
													<option value="EGITTO">EGITTO</option>
												
													<option value="EMIRATI ARABI UNITI">EMIRATI ARABI UNITI</option>
												
													<option value="ERITREA">ERITREA</option>
												
													<option value="ESTONIA">ESTONIA</option>
												
													<option value="ETIOPIA">ETIOPIA</option>
												
													<option value="FILIPPINE">FILIPPINE</option>
												
													<option value="FINLANDIA">FINLANDIA</option>
												
													<option value="FRANCIA">FRANCIA</option>
												
													<option value="FUIJAYRAH">FUIJAYRAH</option>
												
													<option value="GABON">GABON</option>
												
													<option value="GAMBIA">GAMBIA</option>
												
													<option value="GEORGIA">GEORGIA</option>
												
													<option value="GERMANIA">GERMANIA</option>
												
													<option value="GHANA">GHANA</option>
												
													<option value="GIAMAICA">GIAMAICA</option>
												
													<option value="GIAPPONE">GIAPPONE</option>
												
													<option value="GIBILTERRA">GIBILTERRA</option>
												
													<option value="GIBUTI">GIBUTI</option>
												
													<option value="GIORDANIA">GIORDANIA</option>
												
													<option value="GRECIA">GRECIA</option>
												
													<option value="GRENADA">GRENADA</option>
												
													<option value="GROENLANDIA">GROENLANDIA</option>
												
													<option value="GUADALUPA">GUADALUPA</option>
												
													<option value="GUATEMALA">GUATEMALA</option>
												
													<option value="GUERNSEY">GUERNSEY</option>
												
													<option value="GUINEA">GUINEA</option>
												
													<option value="GUINEA BISSAU">GUINEA BISSAU</option>
												
													<option value="GUINEA EQUATORIALE">GUINEA EQUATORIALE</option>
												
													<option value="GUYANA">GUYANA</option>
												
													<option value="HAITI">HAITI</option>
												
													<option value="HONDURAS">HONDURAS</option>
												
													<option value="HONG KONG">HONG KONG</option>
												
													<option value="INDIA">INDIA</option>
												
													<option value="INDONESIA">INDONESIA</option>
												
													<option value="IRAN">IRAN</option>
												
													<option value="IRAQ">IRAQ</option>
												
													<option value="IRLANDA">IRLANDA</option>
												
													<option value="ISLANDA">ISLANDA</option>
												
													<option value="ISOLA DELLA RIUNIONE">ISOLA DELLA RIUNIONE</option>
												
													<option value="ISOLA MAN">ISOLA MAN</option>
												
													<option value="ISOLA MAURIZIO">ISOLA MAURIZIO</option>
												
													<option value="ISOLE COMORE">ISOLE COMORE</option>
												
													<option value="ISOLE FAR OER">ISOLE FAR OER</option>
												
													<option value="ISOLE FIJI">ISOLE FIJI</option>
												
													<option value="ISOLE SALOMONE">ISOLE SALOMONE</option>
												
													<option value="ISOLE VERGINI BRITANNICHE">ISOLE VERGINI BRITANNICHE</option>
												
													<option value="ISOLE VERGINI U.S.A.">ISOLE VERGINI U.S.A.</option>
												
													<option value="ISRAELE">ISRAELE</option>
												
													<option value="ITALIA" selected="selected">ITALIA</option>
												
													<option value="JERSEY">JERSEY</option>
												
													<option value="JUGOSLAVIA">JUGOSLAVIA</option>
												
													<option value="KAMPUCHEA">KAMPUCHEA</option>
												
													<option value="KAZAKISTAN">KAZAKISTAN</option>
												
													<option value="KENYA">KENYA</option>
												
													<option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
												
													<option value="KIRIBATI">KIRIBATI</option>
												
													<option value="KOSSOVO">KOSSOVO</option>
												
													<option value="KUWAIT">KUWAIT</option>
												
													<option value="LAOS">LAOS</option>
												
													<option value="LESOTHO">LESOTHO</option>
												
													<option value="LETTONIA">LETTONIA</option>
												
													<option value="LIBANO">LIBANO</option>
												
													<option value="LIBERIA">LIBERIA</option>
												
													<option value="LIBIA">LIBIA</option>
												
													<option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
												
													<option value="LITUANIA">LITUANIA</option>
												
													<option value="LUSSEMBURGO">LUSSEMBURGO</option>
												
													<option value="MACEDONIA">MACEDONIA</option>
												
													<option value="MADAGASCAR">MADAGASCAR</option>
												
													<option value="MALAWI">MALAWI</option>
												
													<option value="MALAYSIA">MALAYSIA</option>
												
													<option value="MALDIVE">MALDIVE</option>
												
													<option value="MALI">MALI</option>
												
													<option value="MALTA">MALTA</option>
												
													<option value="MAROCCO">MAROCCO</option>
												
													<option value="MARSHALL">MARSHALL</option>
												
													<option value="MARTINICA">MARTINICA</option>
												
													<option value="MAURITANIA">MAURITANIA</option>
												
													<option value="MESSICO">MESSICO</option>
												
													<option value="MOLDAVIA">MOLDAVIA</option>
												
													<option value="MONGOLIA">MONGOLIA</option>
												
													<option value="MONTENEGRO">MONTENEGRO</option>
												
													<option value="MOZAMBICO">MOZAMBICO</option>
												
													<option value="MYANMAR">MYANMAR</option>
												
													<option value="N.C.">N.C.</option>
												
													<option value="NAMIBIA">NAMIBIA</option>
												
													<option value="NAURU">NAURU</option>
												
													<option value="NEPAL">NEPAL</option>
												
													<option value="NICARAGUA">NICARAGUA</option>
												
													<option value="NIGER">NIGER</option>
												
													<option value="NIGERIA">NIGERIA</option>
												
													<option value="NORVEGIA">NORVEGIA</option>
												
													<option value="NUOVA CALEDONIA">NUOVA CALEDONIA</option>
												
													<option value="NUOVA ZELANDA">NUOVA ZELANDA</option>
												
													<option value="OCEANIA AUSTRALIANA">OCEANIA AUSTRALIANA</option>
												
													<option value="OCEANIA BRITANNICA">OCEANIA BRITANNICA</option>
												
													<option value="OCEANIA DEGLI STATI UNITI">OCEANIA DEGLI STATI UNITI</option>
												
													<option value="OCEANIA FRANCESE">OCEANIA FRANCESE</option>
												
													<option value="OCEANIA NEOZELANDESE">OCEANIA NEOZELANDESE</option>
												
													<option value="OLANDA">OLANDA</option>
												
													<option value="OMAN">OMAN</option>
												
													<option value="PAKISTAN">PAKISTAN</option>
												
													<option value="PANAMA">PANAMA</option>
												
													<option value="PAPUA - NUOVA  GUINEA">PAPUA - NUOVA  GUINEA</option>
												
													<option value="PARAGUAY">PARAGUAY</option>
												
													<option value="PERU'">PERU'</option>
												
													<option value="POLONIA">POLONIA</option>
												
													<option value="PORTOGALLO">PORTOGALLO</option>
												
													<option value="PORTORICO">PORTORICO</option>
												
													<option value="POSSEDIMENTI U.S.A.">POSSEDIMENTI U.S.A.</option>
												
													<option value="PRINCIPATO DI MONACO">PRINCIPATO DI MONACO</option>
												
													<option value="QATAR">QATAR</option>
												
													<option value="RAS EL KHAIMAH">RAS EL KHAIMAH</option>
												
													<option value="REGNO UNITO">REGNO UNITO</option>
												
													<option value="REPUBBLICA CECA">REPUBBLICA CECA</option>
												
													<option value="REPUBBLICA SLOVACCA">REPUBBLICA SLOVACCA</option>
												
													<option value="ROMANIA">ROMANIA</option>
												
													<option value="RUSSIA">RUSSIA</option>
												
													<option value="RWANDA">RWANDA</option>
												
													<option value="SAINT LUCIA">SAINT LUCIA</option>
												
													<option value="SALVADOR">SALVADOR</option>
												
													<option value="SAMOA">SAMOA</option>
												
													<option value="SAN MARINO">SAN MARINO</option>
												
													<option value="SANT'ELENA">SANT'ELENA</option>
												
													<option value="SAO TOME E PRINCIPE">SAO TOME E PRINCIPE</option>
												
													<option value="SENEGAL">SENEGAL</option>
												
													<option value="SERBIA">SERBIA</option>
												
													<option value="SERBIA AND MONTENEGRO">SERBIA AND MONTENEGRO</option>
												
													<option value="SEYCHELLES">SEYCHELLES</option>
												
													<option value="SHARJAH">SHARJAH</option>
												
													<option value="SIERRA LEONE">SIERRA LEONE</option>
												
													<option value="SINGAPORE">SINGAPORE</option>
												
													<option value="SIRIA">SIRIA</option>
												
													<option value="SLOVENIA">SLOVENIA</option>
												
													<option value="SOMALIA">SOMALIA</option>
												
													<option value="SPAGNA">SPAGNA</option>
												
													<option value="SRI LANKA">SRI LANKA</option>
												
													<option value="ST. VINCENT E GRENADINE">ST. VINCENT E GRENADINE</option>
												
													<option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option>
												
													<option value="SUDAFRICANA REP.">SUDAFRICANA REP.</option>
												
													<option value="SUDAN">SUDAN</option>
												
													<option value="SURINAME">SURINAME</option>
												
													<option value="SVEZIA">SVEZIA</option>
												
													<option value="SVIZZERA">SVIZZERA</option>
												
													<option value="SWAZILAND">SWAZILAND</option>
												
													<option value="TAGIKISTAN">TAGIKISTAN</option>
												
													<option value="TAIWAN">TAIWAN</option>
												
													<option value="TANZANIA">TANZANIA</option>
												
													<option value="TERRITORI AUTONOMI PALESTINA">TERRITORI AUTONOMI PALESTINA</option>
												
													<option value="TERRITORIO BRITANNICO OCEANO I">TERRITORIO BRITANNICO OCEANO I</option>
												
													<option value="THAILANDIA">THAILANDIA</option>
												
													<option value="TOGO">TOGO</option>
												
													<option value="TONGA">TONGA</option>
												
													<option value="TRINIDAD E TOBAGO">TRINIDAD E TOBAGO</option>
												
													<option value="TUNISIA">TUNISIA</option>
												
													<option value="TURCHIA">TURCHIA</option>
												
													<option value="TURKMENISTAN">TURKMENISTAN</option>
												
													<option value="TURKS E CAICOS">TURKS E CAICOS</option>
												
													<option value="TUVALU'">TUVALU'</option>
												
													<option value="UCRAINA">UCRAINA</option>
												
													<option value="UGANDA">UGANDA</option>
												
													<option value="UMM AL QAIWAIN">UMM AL QAIWAIN</option>
												
													<option value="UNGHERIA">UNGHERIA</option>
												
													<option value="URUGUAY">URUGUAY</option>
												
													<option value="UZBEKISTAN">UZBEKISTAN</option>
												
													<option value="VANUATU">VANUATU</option>
												
													<option value="VENEZUELA">VENEZUELA</option>
												
													<option value="VIETNAM">VIETNAM</option>
												
													<option value="YEMEN">YEMEN</option>
												
													<option value="ZAMBIA">ZAMBIA</option>
												
													<option value="ZIMBABWE">ZIMBABWE</option></select>
											<span class="errortext">Seleziona</span>
										</fieldset>
					
										<br class="clear">
					
										<fieldset class="lastrow">
											<span class="label">Provincia di rilascio*</span>
											<select name="provincia_emissione2_int1" onchange="ProvCom.updateComuni('divComuneEmissione1', 'provincia_emissione2_int1', 'comune_emissione2_int1', 'comune_emissione2_int1', 'no', 'Comune di rilascio*');" id="provincia_emissione2_int1"><option value="">seleziona</option>
												
													<option value="AG">AG</option>
												
													<option value="AL">AL</option>
												
													<option value="AN">AN</option>
												
													<option value="AO">AO</option>
												
													<option value="AP">AP</option>
												
													<option value="AQ">AQ</option>
												
													<option value="AR">AR</option>
												
													<option value="AT">AT</option>
												
													<option value="AV">AV</option>
												
													<option value="BA">BA</option>
												
													<option value="BG">BG</option>
												
													<option value="BI">BI</option>
												
													<option value="BL">BL</option>
												
													<option value="BN">BN</option>
												
													<option value="BO">BO</option>
												
													<option value="BR">BR</option>
												
													<option value="BS">BS</option>
												
													<option value="BT">BT</option>
												
													<option value="BZ">BZ</option>
												
													<option value="CA">CA</option>
												
													<option value="CB">CB</option>
												
													<option value="CE">CE</option>
												
													<option value="CH">CH</option>
												
													<option value="CI">CI</option>
												
													<option value="CL">CL</option>
												
													<option value="CN">CN</option>
												
													<option value="CO">CO</option>
												
													<option value="CR">CR</option>
												
													<option value="CS">CS</option>
												
													<option value="CT">CT</option>
												
													<option value="CZ">CZ</option>
												
													<option value="EN">EN</option>
												
													<option value="FC">FC</option>
												
													<option value="FE">FE</option>
												
													<option value="FG">FG</option>
												
													<option value="FI">FI</option>
												
													<option value="FM">FM</option>
												
													<option value="FR">FR</option>
												
													<option value="GE">GE</option>
												
													<option value="GO">GO</option>
												
													<option value="GR">GR</option>
												
													<option value="IM">IM</option>
												
													<option value="IS">IS</option>
												
													<option value="KR">KR</option>
												
													<option value="LC">LC</option>
												
													<option value="LE">LE</option>
												
													<option value="LI">LI</option>
												
													<option value="LO">LO</option>
												
													<option value="LT">LT</option>
												
													<option value="LU">LU</option>
												
													<option value="MB">MB</option>
												
													<option value="MC">MC</option>
												
													<option value="ME">ME</option>
												
													<option value="MI">MI</option>
												
													<option value="MN">MN</option>
												
													<option value="MO">MO</option>
												
													<option value="MS">MS</option>
												
													<option value="MT">MT</option>
												
													<option value="NA">NA</option>
												
													<option value="NO">NO</option>
												
													<option value="NU">NU</option>
												
													<option value="OG">OG</option>
												
													<option value="OR">OR</option>
												
													<option value="OT">OT</option>
												
													<option value="PA">PA</option>
												
													<option value="PC">PC</option>
												
													<option value="PD">PD</option>
												
													<option value="PE">PE</option>
												
													<option value="PG">PG</option>
												
													<option value="PI">PI</option>
												
													<option value="PN">PN</option>
												
													<option value="PO">PO</option>
												
													<option value="PR">PR</option>
												
													<option value="PT">PT</option>
												
													<option value="PU">PU</option>
												
													<option value="PV">PV</option>
												
													<option value="PZ">PZ</option>
												
													<option value="RA">RA</option>
												
													<option value="RC">RC</option>
												
													<option value="RE">RE</option>
												
													<option value="RG">RG</option>
												
													<option value="RI">RI</option>
												
													<option value="RM">RM</option>
												
													<option value="RN">RN</option>
												
													<option value="RO">RO</option>
												
													<option value="SA">SA</option>
												
													<option value="SI">SI</option>
												
													<option value="SO">SO</option>
												
													<option value="SP">SP</option>
												
													<option value="SR">SR</option>
												
													<option value="SS">SS</option>
												
													<option value="SV">SV</option>
												
													<option value="TA">TA</option>
												
													<option value="TE">TE</option>
												
													<option value="TN">TN</option>
												
													<option value="TO">TO</option>
												
													<option value="TP">TP</option>
												
													<option value="TR">TR</option>
												
													<option value="TS">TS</option>
												
													<option value="TV">TV</option>
												
													<option value="UD">UD</option>
												
													<option value="VA">VA</option>
												
													<option value="VB">VB</option>
												
													<option value="VC">VC</option>
												
													<option value="VE">VE</option>
												
													<option value="VI">VI</option>
												
													<option value="VR">VR</option>
												
													<option value="VS">VS</option>
												
													<option value="VT">VT</option>
												
													<option value="VV">VV</option></select>
											<span class="errortext">Seleziona</span>
										</fieldset>
					
										<div id="divComuneEmissione1">
										<fieldset class="lastrow">
											<span class="label">Comune di rilascio*</span>
											<select name="comune_emissione2_int1" id="comune_emissione2_int1"><option value="">seleziona</option></select>
											<span class="errortext">Seleziona</span>
										</fieldset>
										</div>
					
										<br class="clear"><br>
										<a href="javascript:;" id="linkNoDocIndentita2" onclick="$('#blockEscapeDoc2').show();$(this).hide()">Non hai due diversi documenti d'identit&agrave;?</a>							
									</div>
									<div id="blockEscapeDoc2" class="noDocOpt" style="display:none">
										<div>
											<div class="optiontextmini">
												Se in questo momento non hai a portata di mano un secondo documento d'identit&agrave;, puoi <strong><a href="/webankpub/aol/registrazioneLogin.do?BV_UseBVCookie=Yes&amp;numPag=3&amp;&amp;funz=bozze&amp;fromAol=yes&amp;CNT_TARGET=Privati&amp;OBS_KEY=pro_wbn_apri_conto_webank" title="Vuoi continuare pi&ugrave; tardi?">salvare la richiesta di apertura conto</a> e continuare pi&ugrave; tardi</strong>.
											</div>
										</div>
										<div>
											<div class="optiontextmini">
												Non possiedi due diversi documenti d'identit&agrave;? <a href="javascript:;" onclick="$('#blockChooseOtherDoc2').show();$('#blockEscapeDoc2').hide();$('#blockDocIndentita2').hide();">Scegli un altro documento</a>
											</div>
										</div>
									</div>	
									<br class="clear">
									<div id="blockChooseOtherDoc2" style="display: none;">
										<img src="/wscmn/img/ico2inf_attivalo.gif" class="flLeft">
										<div class="optiontextmini">
											<strong>Non possiedi due diversi documenti d'identit&agrave;?</strong>
											<p>In alternativa, scegli uno dei documenti che ti elenchiamo di seguito. Dovrai allegarne una copia insieme alla documentazione da spedire.</p>
											<fieldset class="row">
												<select name="altroDoc_int1" id="altroDoc_int1"><option value="">seleziona</option>
													
													<option value="1">Patente nautica</option>
													
													<option value="2">Licenza di porto d'armi</option>
													
													<option value="3">Libretto di pensione</option>
													
													<option value="4">Patentino di abilitazione alla conduzione di impianti termici</option>
													
													<option value="5">Tessera di riconoscimento rilasciata da un'amministrazione dello Stato</option>
													
													<option value="6">Attestazione timbrata e sottoscritta da una Banca territoriale</option>
													
													<option value="7">Rogito</option>
													
													<option value="8">Testamento</option>
													
													<option value="9">Atto di vendita auto registrato al P.R.A</option>
													
													<option value="10">Atto costitutivo di societ&agrave;</option>
													
													<option value="11">Certificato di firma digitale</option>
													
													<option value="13">Certificato di residenza</option>
													
													<option value="12">Bolletta intestata</option></select>
												<span class="errortext">Seleziona</span>
											</fieldset><br class="clear"><br>
											<a href="javascript:;" onclick="$('#blockDocIndentita2,#linkNoDocIndentita2').show();$('#blockChooseOtherDoc2').hide();resetblockDocIndentita(2);" class="docBack">Annulla</a>
										</div>
									</div>								
									</div>
								</div>

								
						</div>	
							
						</fieldset>
			
						
						<span class="errortext">Seleziona</span>
					</div>
					
					<div class="clear"></div>
					
					
					
					
					
					
					<div class="aolblockwrapper">
						
						<div id="modBonificoId_Pluri" class="modBonifico" style="display:none">
							<p><strong>I nuovi clienti</strong> dovranno effettuare l'identificazione nel seguendo modo:</p>
							<fieldset class="fullwidthradio lastrow tolltipclick">
								<img src="/wscmn/img/ico2inf_attivalo.gif"  class="flLeft"/>
								<div class="optiontextmini">
									<strong>ogni intestatario deve fare un bonifico di 100&euro;</strong> da un conto intestato a suo nome o cointestato. Accrediteremo la somma versata sul conto corrente dopo l'apertura.
									Se non avete un conto corrente o se ne avete uno 
									<span class="closed">
										<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti2"><span class="uniqTooltipPos"> <a href="javascript:;">aperto online</a></span>
											<span class="uniqTooltipInnerHTML">
												<p>Scegli questa modalit&agrave; di identificazione se hai un conto corrente presso:<br>
												- un istituto di monetica elettronica<br>
								- una filiale online di banca territoriale<br>
								- una banca online (Fineco Bank, IWBank, ING DIRECT, CheBanca!, B@nca 24 - 7, SediciBanca, Binck Bank).<br>
											</p>
												</span>
										</span>
									</span>, dovete necessariamente recarti in un'agenzia Bipiemme.<br class="clear"><br>
									<fieldset class="shortInput" style="margin-right:8px">
											<strong>Mario Rossi</strong>
											<input placeholder="indica l'IBAN del conto dal quale farai il bonifico" type="text"  id="iban3" maxlength="27">
											<script defer="defer" type="text/javascript">setCounterOnField("iban3",27);</script>
										<span class="errortext">lorem</span>
									</fieldset>
									<fieldset class="shortInput">
											<strong>Laura Rossi</strong>
											<input placeholder="indica l'IBAN del conto dal quale farai il bonifico" type="text"  id="iban4" maxlength="27">
											<script defer="defer" type="text/javascript">setCounterOnField("iban4",27);</script>
										<span class="errortext">lorem</span>
									</fieldset>
								</div>
							</fieldset>
							
							<br class="clear">
							<div id="OtherDoc1_PluriId">
								<img src="/wscmn/img/ico2inf_attivalo.gif"  class="flLeft"/>
								<div class="optiontextmini">
									<strong>inserisci</strong> i dati di un <strong>documento di identit&agrave; diverso</strong> da quello precedentemente fornito.<br class="clear"><br>
								</div>
								<div class="aolAcc expanded">
									<div class="aolAccTop">
										<a class="aolAccTitle small" id="intestatario1" onclick="switchExp(this,true);" href="javascript:;">
												<span class="titoloAcc">Intestatario 1 - Lorem ipsum dolor sit amet </span>
												<span href="javascript:;" class="accButt"></span>
												<span class="errortext"></span>
										</a>
									</div>
									<div class="aolAccContent">
										<div class="aolblockwrapper">
											<fieldset class="flLeft">
												<span class="label">Tipo di documento*</span>
												<span id="selectDocumento1">
													<select id="tipo_doc_int1" onchange="removeTooltip(click, $('#numero_doc_int1'));emptyFields(this)">
														<option selected value="1">Patente</option>
														<option value="2">Passaporto</option>
													</select>
													<span class="errortext">seleziona</span>
												</span>
											</fieldset>
											<fieldset class="tolltipclick">
												<span class="label"><span>Numero*</span></span>
													<span class="closed">
															<span id="numero1" class="uniqTooltipText over fixed" ><span class="uniqTooltipPos"> <input id="numero_doc_int1" type="text" style="display:inline" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,0)};" onkeyup="removeTooltip(click, $('#numero1'));restoreTooltipN(click,this,0)">
																	<span class="errortext">Lorem</span></span>
															<span class="uniqTooltipInnerHTML">
																	<p></p>
															</span>
															</span>
													</span>
												<span class="errortext">Lorem</span>
											</fieldset>
											<fieldset class="tolltipclick">
												<span class="label"><span>Data di rialscio*</span></span>
												<div id="divDataEmissione1" class="anchorTooltip">
													<div class="fieldblock">
														<span class="closed">
															<span id="rilascio_Pluri" class="uniqTooltipText over fixed"><span class="uniqTooltipPos"> <input type="text" id="gg_emissione_int1" onclick="removeOpt(this,'gg');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione1')};" onkeyup="removeTooltip(click, $('#divDataEmissione1 .uniqTooltip'));restoreTooltipD(click,this,1,'divDataEmissione1')" class="opzionale" value="gg" style="width:25px">
																	<span class="errortext">Lorem</span></span>
															<span class="uniqTooltipInnerHTML">
																	<p></p>
															</span>
															</span>
														</span>
													</div>
													<span class="separator">/</span>
													<div class="fieldblock">
														<span class="closed">
															<span id="rilascio2_Pluri" class="uniqTooltipText over fixed" ><span class="uniqTooltipPos"> <input type="text" id="mm_emissione_int1" onclick="removeOpt(this,'mm');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione1')};" onkeyup="removeTooltip(event, $('#divDataEmissione1 .uniqTooltip'));" class="opzionale" value="mm" style="width:25px">
																	<span class="errortext">Lorem</span></span>
															<span class="uniqTooltipInnerHTML">
																	<p></p>
															</span>
															</span>
														</span>
														<span class="errortext">Lorem</span>
													</div>
													<span class="separator">/</span>
													<div class="fieldblock">
														<span class="closed">
															<span id="rilascio1" class="uniqTooltipText over fixed"><span class="uniqTooltipPos"> <input type="text" id="aa_emissione_int1" onclick="removeOpt(this,'aaaa');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione1')};" onkeyup="removeTooltip(event, $('#divDataEmissione1 .uniqTooltip'));" class="opzionale" value="aaaa" style="width:50px">
																	<span class="errortext">Lorem</span></span>
															<span class="uniqTooltipInnerHTML">
																	<p></p>
															</span>
															</span>
														</span>
														<span class="errortext">Lorem</span>
													</div>
												</div>
											</fieldset>
											<fieldset>
												<span class="label">Stato di rilascio*</span>
												<select>
													<option selected value="1">seleziona</option>
												</select>
												<span class="errortext">Lorem</span>
											</fieldset>
											<fieldset class="lastrow">
												<span class="label">Provincia di rilascio*</span>
												<input type="text"  />
												<span class="errortext">Lorem</span>
											</fieldset>
											<fieldset class="lastrow">
												<span class="label">Comune di rilascio*</span>
												<input type="text"/>
												<span class="errortext">Lorem</span>
											</fieldset><br class="clear"><br>
										</div>
										<a href="javascript:;" id="noDocOptLink_PluriId" onclick="$('#noDocOpt_PluriId').show();$(this).hide()">Non hai il documento?</a>
								
										<div class="noDocOpt" id="noDocOpt_PluriId" style="display:none">
											<div>
												<div class="optiontextmini">
													Non hai a disposizione in questo momento un secondo numero? <a href="javascript:;">Salva in bozza</a> e completa pi&ugrave; tardi
												</div>
											</div>
											<div>
												<div class="optiontextmini">
													Non possiedi nessuno dei documenti indicati? <a href="javascript:;" onclick="$('#noDocOptLink_PluriId').show();$('#noDocOpt_PluriId').hide(); $('#OtherDoc1_PluriId').hide();$('#OtherDoc2_PluriId').show();">Scegli altro documento</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="aolAcc">
									<div class="aolAccTop">
										<a class="aolAccTitle small" id="intestatario2" onclick="switchExp(this,true);" href="javascript:;">
												<span class="titoloAcc">Intestatario 2 - Lorem ipsum dolor sit amet </span>
												<span href="javascript:;" class="accButt"></span>
												<span class="errortext"></span>
										</a>
									</div>
									<div class="aolAccContent">
										<div class="aolblockwrapper">
											<fieldset class="flLeft">
												<span class="label">Tipo di documento*</span>
												<span id="selectDocumento2">
													<select id="tipo_doc_int2" onchange="removeTooltip(click, $('#numero_doc_int2'));emptyFields(this)">
														<option selected value="1">Patente</option>
														<option value="2">Passaporto</option>
													</select>
													<span class="errortext">seleziona</span>
												</span>
											</fieldset>
											<fieldset class="tolltipclick">
												<span class="label"><span>Numero*</span></span>
													<span class="closed">
															<span id="numero2" class="uniqTooltipText over fixed" ><span class="uniqTooltipPos"> <input id="numero_doc_int2" type="text" style="display:inline" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,0)};" onkeyup="removeTooltip(click, $('#numero2'));restoreTooltipN(click,this,0)">
																	<span class="errortext">Lorem</span></span>
															<span class="uniqTooltipInnerHTML">
																	<p></p>
															</span>
															</span>
													</span>
												<span class="errortext">Lorem</span>
											</fieldset>
											<fieldset class="tolltipclick">
												<span class="label"><span>Data di rialscio*</span></span>
												<div id="divDataEmissione2" class="anchorTooltip">
													<div class="fieldblock">
														<span class="closed">
															<span id="rilascio2" class="uniqTooltipText over fixed"><span class="uniqTooltipPos"> <input type="text" id="gg_emissione_int2" onclick="removeOpt(this,'gg');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione2')};" onkeyup="removeTooltip(click, $('#divDataEmissione2 .uniqTooltip'));restoreTooltipD(click,this,1,'divDataEmissione2')" class="opzionale" value="gg" style="width:25px">
																	<span class="errortext">Lorem</span></span>
															<span class="uniqTooltipInnerHTML">
																	<p></p>
															</span>
															</span>
														</span>
													</div>
													<span class="separator">/</span>
													<div class="fieldblock">
														<span class="closed">
															<span id="rilascio2_Pluri" class="uniqTooltipText over fixed" ><span class="uniqTooltipPos"> <input type="text" id="mm_emissione_int2" onclick="removeOpt(this,'mm');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione2')};" onkeyup="removeTooltip(event, $('#divDataEmissione2 .uniqTooltip'));" class="opzionale" value="mm" style="width:25px">
																	<span class="errortext">Lorem</span></span>
															<span class="uniqTooltipInnerHTML">
																	<p></p>
															</span>
															</span>
														</span>
														<span class="errortext">Lorem</span>
													</div>
													<span class="separator">/</span>
													<div class="fieldblock">
														<span class="closed">
															<span id="rilascio2" class="uniqTooltipText over fixed"><span class="uniqTooltipPos"> <input type="text" id="aa_emissione_int2" onclick="removeOpt(this,'aaaa');" onfocus="if($(this).closest('closed')) {switchContenutoTooltip(click,this,1,'divDataEmissione2')};" onkeyup="removeTooltip(event, $('#divDataEmissione2 .uniqTooltip'));" class="opzionale" value="aaaa" style="width:50px">
																	<span class="errortext">Lorem</span></span>
															<span class="uniqTooltipInnerHTML">
																	<p></p>
															</span>
															</span>
														</span>
														<span class="errortext">Lorem</span>
													</div>
												</div>
											</fieldset>
											<fieldset>
												<span class="label">Stato di rilascio*</span>
												<select>
													<option selected value="1">seleziona</option>
												</select>
												<span class="errortext">Lorem</span>
											</fieldset>
											<fieldset class="lastrow">
												<span class="label">Provincia di rilascio*</span>
												<input type="text"  />
												<span class="errortext">Lorem</span>
											</fieldset>
											<fieldset class="lastrow">
												<span class="label">Comune di rilascio*</span>
												<input type="text"/>
												<span class="errortext">Lorem</span>
											</fieldset><br class="clear"><br>
										</div>
										<a href="javascript:;" id="noDocOptLink_PluriId" onclick="$('#noDocOpt_PluriId').show();$(this).hide()">Non hai il documento?</a>
								
										<div class="noDocOpt" id="noDocOpt_PluriId" style="display:none">
											<div>
												<div class="optiontextmini">
													Non hai a disposizione in questo momento un secondo numero? <a href="javascript:;">Salva in bozza</a> e completa pi&ugrave; tardi
												</div>
											</div>
											<div>
												<div class="optiontextmini">
													Non possiedi nessuno dei documenti indicati? <a href="javascript:;" onclick="$('#noDocOptLink_PluriId').show();$('#noDocOpt_PluriId').hide(); $('#OtherDoc1_PluriId').hide();$('#OtherDoc2_PluriId').show();">Scegli altro documento</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="OtherDoc2_PluriId" style="display:none">
								<img src="/wscmn/img/ico2inf_attivalo.gif"  class="flLeft"/>
								<div class="optiontextmini">
									<strong>Non possiedi nessuno dei documenti indicati? Scegli altro documento</strong>
									<p>Lorem ipsum dolor sit amet, lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, lorem ipsum dolor sit amet.</p>
									<fieldset class="lastrow">
										<select>
											<option selected="" value="1">Seleziona</option>
											<option selected="" value="2">lorem ipsum</option>
										</select>
										<span class="errortext">Lorem</span>
									</fieldset><br class="clear"><br>
									<a href="javascript:;" onclick="$('#OtherDoc1_PluriId').show();$('#OtherDoc2_PluriId').hide();" class="docBack">Torna all'inseriemnto del documento standard</a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<!-- FINE BLOCCO IDENTIFICAZIONE PLURIINTESTATARIO-->
				
				
				<div class="aolblockpromo">
					<h3>INFORMAZIONI SUI PRODOTTI SCELTI</h3>
					<div class="aolblockwrapper">
					<p>Per la  normativa antiriciclaggio devi specificare il tipo di utilizzo che farai dei prodotti scelti  insieme al conto.</p>
					<p class="grey">Utilizzo del deposito titoli</p>
					<fieldset class="fullwidth" style="min-height:20px">
						<label>
							<input type="radio" name="depositoTitoli"><span class="optiontext">per esigenze di investimento</span>
						</label>
					</fieldset>
					<fieldset class="fullwidth" style="min-height:20px">
						<label>
							<input type="radio" name="depositoTitoli"><span class="optiontext">per attivit&agrave; di trading </span>
						</label>
					</fieldset>
					<p class="grey">Utilizzo della carta ricaricabile CartaJe@ns</p>
					<fieldset class="fullwidth" style="min-height:20px">
						<label>
							<input type="radio" name="cartaRicaricabile"><span class="optiontext">per esigenze familiari</span>
						</label>
					</fieldset>
					<fieldset class=" fullwidth" style="min-height:20px">
						<label>
							<input type="radio" name="cartaRicaricabile"><span class="optiontext">per esigenze professionali</span>
						</label>
					</fieldset>
					<p>Per fornire dichiarazioni diverse dalle scelte indicate, contattaci.</p>
				</div><img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
				</div>
				
				<div class="aolblockpromo">
					<h3>Informazioni su attivit&agrave; economica</h3>
					<div class="aolblockwrapper">
					<p>La banca &egrave; tenuta a raccogliere le seguenti informazioni per definire il profilo personale del cliente. La raccolta 
di tali informazioni &egrave; richiesta per leggere una completa identificazione e un'aggiornata conoscenza del cliente.</p>
				<div class="aolAcc expanded">
					<div class="aolAccTop">
						<a class="aolAccTitle small" id="intestatario1" onclick="switchExp(this,true);" href="javascript:;" >
								<span class="titoloAcc">Intestatario 1 - Lorem ipsum dolor sit amet </span>
								<span href="javascript:;" class="accButt" ></span>
								<span class="errortext"></span>
						</a>
					</div>
					<div class="aolAccContent">
						<fieldset class="tolltipclick">
							<span class="label"><span>Professione*</span>
								<span class="closed">
									<span id="cellulare" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, '570', 'aolleft')}"><span class="uniqTooltipPos"> <a href="javascript:;" class="noborder"><img src="/img/img_or_tooltip_off.gif" alt=""/></a></span>
									<span class="uniqTooltipInnerHTML">
									<ol>
										<li>Si intendono Persone Politicamente Esposte le persone fische che occupano o hanno occupato importanti cariche pubbliche e cio&egrave;:capi di Stato,capi di Governo,Ministri e Vice Ministri o Sottosegretari;parlamentari;membri delle corti supreme, delle corti costituzionali e di altri organi giudiziari di alto livello le cui decisioni non sono soggette a ulteriore appello, salvo in circostanze eccezionali;membri delle Corti dei conti e dei consigli di amministrazione delle banche centrali;ambasciatori, incaricati d'affari e ufficiali di alto livello delle forze armate;membri degli organi di amministrazione, direzione o vigilanza delle imprese possedute dallo Stato.
										In nessuna delle categorie sopra specificate rientrano i funzionari di livello medio o inferiore. Le categorie suuindicate comprendono, laddove applicabili, le posizioni a livello europeo e internazionale.</li>
										<li>Si intendono familiari diretti: il coniuge, i figli e i loro coniugi;coloro che nell'ultimo quinquennio hanno convissuto con i soggetti precendetemente indicati;i genitori.</li>
										<li>Si intende per "persona che intrattiene stretti legami con la Persona politicamente esposta": 
										qualsiasi persona fisica che ha notoriamente la titolarit&agrave; effettiva congiunta di entit&agrave; giuridiche 
										o qualsiasi altra stretta relazione d'affari con una persona politicamente esposta;qualsiasi persona 
										fisica che sia unica titolare effettiva di entit&agrave; giuridiche o soggetti giuridici notoriamente 
										creati di fatto a beneficio della persona politicamente esposta.(D.lgs 231/2007)</li>
									</ol>
									</span>
								</span>
							</span>
							<select id="professione">
								<option selected value="1">seleziona</option>
								<option value="2">lorem ipsum</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset>
							<span class="label">Settore*</span>
							<select id="settore">
								<option selected value="1">seleziona</option>
								<option value="2">lorem ipsum</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset>
							<span class="label">Stato svolgimento*</span>
							<select>
								<option selected value="1">seleziona</option>
								<option value="2">lorem ipsum</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset>
							<span class="label">Provincia di svolgimento*</span>
							<!-- ATTENZIONE! LE FUNZIONI GOOGLE-LIKE SONO SOLO ESEMPLIFICATIVE -->
							<style>
								#aolcontainer form fieldset div.suggestions {position:absolute;z-index:99;border:solid 1px #999; background-color: #fff; padding: 3px}
								#aolcontainer form fieldset div.suggestions a {float:left; clear:left; width: 232px; padding: 3px; color: #666; text-decoration:none}
								#aolcontainer form fieldset div.suggestions a:hover {background-color: #dedede}
							</style>
							<input type="text" id="suggestionField" onclick = "$('suggestionSample').show(); addEvent(this,'blur',function(){setTimeout(function(){$('suggestionSample').fade({duration:0.3});},50);})" />
							<div class="suggestions" id="suggestionSample" style="display:none">
								<a href="javascript:;" onclick="$('suggestionField').focus()" ><strong>Lo</strong>rei</a>
								<a href="javascript:;" onclick="$('suggestionField').focus()"><strong>Lo</strong>rem ipsum</a>
								<a href="javascript:;" onclick="$('suggestionField').focus()">Gorex ipsuma</a>
								<a href="javascript:;" onclick="$('suggestionField').focus()">Worey</a>
							</div>
							<!-- FINE ATTENZIONE! LE FUNZIONI GOOGLE-LIKE SONO SOLO ESEMPLIFICATIVE -->
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset>
							<span class="label">Reddito annuo netto*</span>
							<select>
								<option selected value="1">seleziona</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset class="fullwidth lastrow check">
							<span class="label">Origine del patrimonio*</span>
							<span class="column">
								<label>
									<input type="checkbox" title="Lorem ipsum dolor sit amet" id="lavoro"><span class="optiontextmini">Reddito da lavoro</span>
									
								</label>
								<label>
									<input type="checkbox" title="Lorem ipsum dolor sit amet" id="investimenti"><span class="optiontextmini">Rendite da investimenti</span>
									
								</label>
								<label>
									<input type="checkbox" title="Lorem ipsum dolor sit amet" id="vendite"><span class="optiontextmini">Vendita beni immobili</span>
									
								</label>
							</span>
							<span class="column">
								<label>
									<input type="checkbox" title="Lorem ipsum dolor sit amet" id="eredit&agrave;"><span class="optiontextmini">Eredit&agrave;/donazione</span>
									
								</label>
								<label>
									<input type="checkbox" title="Lorem ipsum dolor sit amet" id="altro"><span class="optiontextmini">Altro</span>
									
								</label>
								
							</span>
							<span class="errortext">Lorem</span>
						</fieldset>
						<br class="clear"/>
						<h3 class="subTitle">Informazioni aggiuntive (opzionali)</h3>
						<fieldset style="width: 160px;">
						<span class="label">Componenti nucleo familiare</span>
						<div class="fieldblock">
							<select style="width:116px" id="selectComponenti"/>
								<option selected value="">lorem</option>
								<option value="1">Lorem ipsum</option>
							</select>
							<span class="errortext">Seleziona</span>
						</div>
						</fieldset>
						<fieldset style="width:127px">
							<span class="label" style="width: 90px;">Amministratore patrimonio familiare</span>
							<label style="width:40px;"><input type="radio" name="amministratore" id=""><span class="optiontext">Si</span></label>
							<label style="width:40px;"><input type="radio" name="amministratore" ><span class="optiontext">No</span></label>
							<span class="errortext">Compila</span>
						</fieldset>
						<fieldset>
						<span class="label">Abitazione</span>
						<div class="fieldblock">
							<select  id="abitazione"/>
								<option selected value="">lorem</option>
								<option value="1">Lorem ipsum</option>
							</select>
							<span class="errortext">Seleziona</span>
						</div>
						</fieldset>
						<br class="clear">
						<fieldset class="fullwidth lastrow check error">
							<span class="label">Prodotti gi&agrave; posseduti</span>
							<span class="column">
								<label>
									<input type="checkbox" title="Lorem ipsum dolor sit amet" id=""><span class="optiontextmini">Conto corrente/conto di deposito</span>
									
								</label>
								<label>
									<input type="checkbox" title="Lorem ipsum dolor sit amet" id=""><span class="optiontextmini">Azioni/Obbligazioni</span>
									
								</label>
								<label>
									<input type="checkbox" title="Lorem ipsum dolor sit amet" id=""><span class="optiontextmini">Fondi comuni</span>
									
								</label>
							</span>
							<span class="column">
								<label>
									<input type="checkbox" title="Lorem ipsum dolor sit amet" id=""><span class="optiontextmini">Derivati</span>
									
								</label>
								<label>
									<input type="checkbox" title="Lorem ipsum dolor sit amet" id=""><span class="optiontextmini">Prodotti assicurativi</span>
								</label>
								<label>
									<input type="checkbox" title="Lorem ipsum dolor sit amet" id=""><span class="optiontextmini">Carte di credito</span>
								</label>
							</span>
							<span class="errortext">Lorem</span>
						</fieldset>
					</div>
				</div>
					<div class="aolAcc">
					<div class="aolAccTop">
						<a class="aolAccTitle small" id="intestatario2" onclick="switchExp(this,true);" title="Espandi">
							<span class="titoloAcc">Intestatario 2 - Lorem ipsum dolor sit amet</span>
							<span href="javascript:;" class="accButt" ></span>
							<span class="errortext"></span>
						</a>
					</div>
						<div class="aolAccContent">
						<fieldset>
							<span class="label">Professione*</span>
							<select id="professione">
								<option selected value="1">seleziona</option>
								<option value="2">lorem ipsum</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset>
							<span class="label">Settore*</span>
							<select id="settore">
								<option selected value="1">seleziona</option>
								<option value="2">lorem ipsum</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset>
							<span class="label">Stato svolgimento*</span>
							<select>
								<option selected value="1">seleziona</option>
								<option value="2">lorem ipsum</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset>
							<span class="label">Provincia di svolgimento*</span>
							<!-- ATTENZIONE! LE FUNZIONI GOOGLE-LIKE SONO SOLO ESEMPLIFICATIVE -->
							<style>
								#aolcontainer form fieldset div.suggestions {position:absolute;z-index:99;border:solid 1px #999; background-color: #fff; padding: 3px}
								#aolcontainer form fieldset div.suggestions a {float:left; clear:left; width: 232px; padding: 3px; color: #666; text-decoration:none}
								#aolcontainer form fieldset div.suggestions a:hover {background-color: #dedede}
							</style>
							<input type="text" id="suggestionField" onclick = "$('suggestionSample').show(); addEvent(this,'blur',function(){setTimeout(function(){$('suggestionSample').fade({duration:0.3});},50);})" />
							<div class="suggestions" id="suggestionSample" style="display:none">
								<a href="javascript:;" onclick="$('suggestionField').focus()" ><strong>Lo</strong>rei</a>
								<a href="javascript:;" onclick="$('suggestionField').focus()"><strong>Lo</strong>rem ipsum</a>
								<a href="javascript:;" onclick="$('suggestionField').focus()">Gorex ipsuma</a>
								<a href="javascript:;" onclick="$('suggestionField').focus()">Worey</a>
							</div>
							<!-- FINE ATTENZIONE! LE FUNZIONI GOOGLE-LIKE SONO SOLO ESEMPLIFICATIVE -->
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset>
							<span class="label">Reddito annuo netto*</span>
							<select>
								<option selected value="1">seleziona</option>
							</select>
							<span class="errortext">Lorem</span>
						</fieldset>
						<fieldset class="fullwidth lastrow check">
							<span class="label">Origine del patrimonio*</span>
							<span class="column">
								<label>
									<input type="checkbox" title="Lorem ipsum dolor sit amet" id="lavoro"><span class="optiontextmini">Reddito da lavoro</span>
									
								</label>
								<label>
									<input type="checkbox" title="Lorem ipsum dolor sit amet" id="investimenti"><span class="optiontextmini">Rendite da investimenti</span>
									
								</label>
								<label>
									<input type="checkbox" title="Lorem ipsum dolor sit amet" id="vendite"><span class="optiontextmini">Vendita beni immobili</span>
									
								</label>
							</span>
							<span class="column">
								<label>
									<input type="checkbox" title="Lorem ipsum dolor sit amet" id="eredit&agrave;"><span class="optiontextmini">Eredit&agrave;/donazione</span>
									
								</label>
								<label>
									<input type="checkbox" title="Lorem ipsum dolor sit amet" id="altro"><span class="optiontextmini">Altro</span>
									
								</label>
								
							</span>
							<span class="errortext">Lorem</span>
						</fieldset>
						
					
					</div>
				</div>
				
				</div><img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
			
			</div>
		
		<div class="filettobutton linked">
			<a class="backLinked" href="/connect.php?page=str_aol_pub_wb.php&amp;tpl=tpl_pub_aol_step_0.php" title="indietro">indietro</a>
			<a class="bozzaLinked" href="javascript:;" title="Vuoi continuare pi&ugrave; tardi?" onclick="javascript:esempioErrori();"><span>Vuoi continuare pi&ugrave; tardi?</span></a>
			<a class="greenbutton" href="javascript:;" title="avanti" onclick="javascript:esempioErrori();"><span>avanti</span></a>
		</div>
		</form>
		</div>
	</div>
<!-- PANNELLO DI DESTRA -->	
	<div id="aolright">
		<!-- caso A -->
		<div class="leftit">
		<img src="/img/tit_tuo_conto.gif"  alt="Il tuo conto" />
		</div>
		<div class="gen">
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
					<span class="productname">Sportello telefonico</span>
					<span>Servizio gratuito</span>
				</li>
				<li>
					<span class="promogreen">
						<span>In pi&ugrave; per te <strong>120 &euro;</strong> di buoni acquisto MediaWorld!</span>
					</span>
				</li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="leftit">
			<img src="/img/tit_haiaggiunto.gif"  alt="Hai aggiunto" />
		</div>
		<div class="gen">
			<ul class="elencoprodotti" id="prodottiAggiunti">
				<li>
					<span class="productname">Bancomat</span>
				</li>
				<li>
					<span class="productname">Carta di credito</span>
				</li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="leftit">
			<img src="/img/tit_serve_aiuto.gif"  alt="Ti serve aiuto?" />
		</div>
		<div class="gen">
			<ul class="elencosimple">	
				<li><img alt="numero verde" src="/img/img_or_nverde_dx.gif" /><p>Luned&igrave; - venerd&igrave;: 9.00 - 20.00 sabato: 9.00 - 17.00</p></li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="gen">
			<ul class="elencosimple callmeback">
			<li><img alt="Webank ti richiama" src="/img/img_or_operatore_sm.gif" /><a href="javascript:;" onclick="openPopOverLayer('callmeback', 'floating');">Webank ti richiama</a>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="leftit">
			<a href="javascript:;" onclick="switchAolDoclist(this);"><img src="/img/tit_documentazione_closed.gif"  alt="Documentazione" /></a>
		</div>
		<div id="aoldoclist" style="display:none" class="accordion">
				<div class="subaoldoclist expanded">
					<h4><a href="javascript:;"  onclick="switchExp(this,true);">Conto corrente</a></h4>
					<ul>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Foglio Informativo</a></li>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Condizioni generali</a></li>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Modulo richiesta</a></li>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Documento di sintesi</a></li>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Informativa precontrattuale servizi a distanza</a></li>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Principali diritti del cliente</a></li>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Guida pratica al conto</a></li>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Guida pratica e modulo per ricorrere all'Arbitro</a></li>
					</ul>	
				</div>
				<div class="subaoldoclist">
					<h4><a href="javascript:;"  onclick="switchExp(this,true);">Firma digitale e PEC</a></h4>
					<ul>	
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Modulo richiesta FDR e PEC</a></li>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Condizioni generali FDR e PEC</a></li>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Manuale operativo FDR e PEC</a></li>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Istruzioni utilizzo certificati</a></li>
					</ul>
				</div>
				<div class="subaoldoclist">
					<h4><a href="javascript:;"  onclick="switchExp(this,true);">Deposito titoli</a></h4>
					<ul>	
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Modulo richiestaDeposito titoli</a></li>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Documento di sintesi deposito titoli</a></li>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Informativa Mifid</a></li>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Guida Camera di Conciliazione della CONSOB</a></li>
					</ul>
				</div>
				<div class="subaoldoclist">
					<h4><a href="javascript:;"  onclick="switchExp(this,true);">Bancomat</a></h4>
					<ul>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Modulo richiesta Bancomat</a></li>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Foglio Informativo Bancomat</a></li>
					</ul>
				</div>
				<div class="subaoldoclist">
					<h4><a href="javascript:;"  onclick="switchExp(this,true);">CartaJe@ns</a></h4>
					<ul>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Modulo richiesta CartaJe@ns</a></li>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Foglio Informativo CartaJe@ns</a></li>
					</ul>
				</div>
				<div class="subaoldoclist">
					<h4><a href="javascript:;"  onclick="switchExp(this,true);">Cartimpronta</a></h4>
					<ul>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Foglio informativo</a></li>
						<li><a href="#" onclick="setVisitedLink(this);" target="blank">Modulo di richiesta</a></li>
					</ul>
				</div>
		</div>
		</div>
	</div>
</div>
<!-- OVERLAY PER CALLMEBACK -->
			<div id="callmeback" class="overlayer" style="display:none">
				<div class="overlayertitle">
					<a id="close" class="chiudi" ;="" onclick="closePopOverLayer('callmeback')" href="#"></a>
					<span id="helptxt">Hai bisogno di aiuto per completare il form? <br />lasciaci il tuo numero di telefono e ti richiameremo noi quando vuoi tu!</span>
				</div>
				<div class="overlayerbody">
				<span class="sep"></span>
					<!-- secondo blocco-->
					<div class="contact">
						
						<div class="contactcont" id="formcont">
							<form action="#" method="post">
								<div class="fieldblocklayer error">
									<label>Numero di telefono</label>
									<input type="text" isdatepicker="true">
									<br class="clear">
									<span class="error">Lorem</span>
								</div>
								<div id="calendario" class="fieldblocklayer middle error">
									<label>Giorno</label>
									<script type="text/javascript">DatePickerControl.createDp ('datepicker1',"20110517|20110518|20110519");</script>
									
									<br class="clear">
									<span class="error">Lorem</span>
								</div>
								<div class="fieldblocklayer dx error">
									<label>Fascia oraria</label>
									<select name="orario" id="orario" style="visibility: visible;"><option value="09.00-10.00">09.00-10.00</option><option value="10.00-11.00">10.00-11.00</option><option value="11.00-12.00">11.00-12.00</option><option value="12.00-13.00">12.00-13.00</option><option value="13.00-14.00">13.00-14.00</option><option value="14.00-15.00">14.00-15.00</option><option value="15.00-16.00">15.00-16.00</option><option value="16.00-17.00">16.00-17.00</option><option value="17.00-18.00">17.00-18.00</option><option value="18.00-19.00">18.00-19.00</option><option value="19.00-20.00">19.00-20.00</option></select>
									<br class="clear">
									<span class="error">Lorem</span>
								</div>
								<br class="clear">
								<br />
								<br />
								<div class="fieldblocklayer">
									<label>Codice</label><a class="rightlink" href="#">Crea nuovo codice</a>
									<img class="imgCaptcha" src="/img/bg_captcha3.gif">
									
								</div>
								<div class="fieldblocklayer middle bottom error">
									<label>Inserisci codice</label>
									<input type="text" class="lenghtmiddle" isdatepicker="true">
									<br class="clear">
									<span class="error">Lorem</span>
									
									<br><br>
									
								</div>
								<div class="fieldblocklayer dx">
									<a onclick="this.parentNode.parentNode.parentNode.style.display='none'; document.getElementById('helptxt').style.display='none'; document.getElementById('msgtxt').style.display='block'" class="greenbutton" href="javascript:;"><span>Contattami</span></a>
								</div>
							</form>
						
							
						
						</div>
						<div class="contactbox small" style="display:none" id="msgtxt">
							<img alt="" src="/img/str_bg_overlayer_abb_top_sm.gif">
							<div class="contactcont">
									
								<div class="contactText">
										Abbiamo ricevuto la tua richiesta di contatto, <br />ti richiameremo nel giorno e nell'ora da te indicati.
										
								</div>
							</div>
							<img alt="" src="/img/str_bg_overlayer_abb_bot_sm.gif">
						</div>
						
					</div>
				</div>
			</div>
			<!-- FINE OVERLAY PER CALLMEBACK -->