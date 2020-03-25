<script type="text/javascript">	
	$(function () {
				$("#dateToMask").mask("99/99/9999");
			});
</script>
<h1>Cartimpronta one</h1>
<ul class="tabGeneric">
	<li>
		<span class="tabBorder"><span class="tabGradient"><a href="">lorem ipsum dolor</a></span></span>
	</li>
	<li><span class="tabBorder"><span class="tabGradient"><a href="">lorem ipsum dolor</a></span></span></li>
	<li class="active"><span class="tabBorder"><span class="tabGradient"><a href="">lorem</a></span></span></li>
</ul>
<div class="filettoGenericoVerticale">
	<div class="filettoGenericCorner">
		<div class="paddMedium">
			<div class="boxrichiesta">
				<div class="steprichiesta on">
					<div class="steprichiestatit">
						<img alt="Lorem ipsum dolor" src="/img/ret/str_tit_uno_on.gif">
						<h2 class="richiestaTit">Lorem ipsum dolor</h2>
						<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
					</div>
					<div class="formGeneric steprichiestacont">
						<br/>
						<div id="formRichiestaFirmaStep1">
							<form id="formRichiestaFirma">
								<div id="docRichiestaFirma">
									<div class="row-fluid">
										<div class="span4">
											<label class="nomefield">Lorem ipsum</label>
											<span class="output">Lorem ipsum dolor</span>
											<span class="output">data di rilascio/ultimo rinnovo 12/05/2011</span>
										</div>
										<div class="span4">
											<label class="nomefield">&nbsp;</label>
										</div>
										<div class="span4">
											<a class="underline" href="javascript:;" onclick="$('#docRichiestaFirma').hide();$('#modDocRichiestaFirma').show();">Lorem ipsum dolor</a>
										</div>
									</div>
								</div>
								<div id="modDocRichiestaFirma" style="display:none">
									<div class="borderLeftgrey">
										<div class="row-fluid">
											<div class="span4">
												<label class="nomefield">Lorem ipsum</label>
												<select><option>lorem</option><option>lorem</option></select>
											</div>
											<div class="span4">
												<label class="nomefield">Lorem ipsum</label>
												<input type="text" value="lorem">
											</div>
											<div class="span4">
												<label class="nomefield">Lorem ipsum</label>
												<div class="row-fluid noMargbottom">
													<div class="span6">
														<input type="text" id="dateToMask" value="12/12/2012">
														<br/><br/>
														<a class="underline indent" href="javascript:;" onclick="$('#modDocRichiestaFirma').hide();$('#docRichiestaFirma').show();">Lorem ipsum dolor</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<br/><br/>
								</div>
								<div id="indRichiestaFirma">
									<div class="row-fluid">
										<div class="span4">
											<label class="nomefield">Lorem ipsum</label>
											<span class="output">Lorem ipsum dolor</span>
										</div>
										<div class="span4"><label class="nomefield">&nbsp;</label></div>
										<div class="span4">
											<a class="underline textbottom" href="javascript:;" onclick="$('#indRichiestaFirma').hide();$('#modIndRichiestaFirma').show();">Lorem ipsum dolor</a>
										</div>
									</div>
								</div>
								<div id="modIndRichiestaFirma" class="borderLeftgrey" style="display:none">
									<div class="row-fluid">
										<div class="span4">
											<label class="nomefield">Lorem ipsum</label>
											<input type="text" value="lorem ipsum">
										</div>
										<div class="span4">
											<label class="nomefield">Lorem ipsum <span>(facoltativo)</span></label>
											<input type="text" placeholder="nome e cognome o nome azienda">
										</div>
										<div class="span4">
											<label class="nomefield">Lorem ipsum</label>
											<select><option>lorem</option><option>lorem</option></select>
										</div>
									</div>
									<div class="row-fluid">
										<div class="span4">
											<div class="row-fluid noMargbottom">
												<div class="span6">
													<label class="nomefield">Lorem ipsum</label>
													<select><option>lorem</option><option>lorem</option></select>
												</div>
											</div>
										</div>
										<div class="span4">
											<label class="nomefield">Lorem ipsum</label>
											<select><option>lorem</option><option>lorem</option></select>
										</div>
										<div class="span4">
											<div class="row-fluid noMargbottom">
												<div class="span6">
													<label class="nomefield">Lorem ipsum</label>
														<select><option>lorem</option><option>lorem</option></select>
													    <br/><br/>
														<a class="underline indent" href="javascript:;" onclick="$('#modIndRichiestaFirma').hide();$('#indRichiestaFirma').show();">Lorem ipsum dolor</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
							<div id="btnProsegui1" class="btnc aButtoncons"><a onclick="$('#formRichiestaFirmaStep1').hide();$('#formRichiestaFirmaStep1output').show();stepRichiesta(this);" class="nextstep first aButton" href="javascript:;"><span>lorem</span></a></div>
						</div>
						<div id="formRichiestaFirmaStep1output" style="display:none">
							<strong>Lorem ipsum dolor sit lorem ipsum dolor</strong>
						</div>
					</div>
				</div>
				<div class="steprichiesta off">
					<div class="steprichiestatit">
						<img alt="Compila la richiesta" src="/img/ret/str_tit_due_off.png">
						<h2 class="richiestaTit">Completa i dati</h2>
						<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
						<span style="display:none"><a onclick="$('#btnModifica2').hide();$('#btnProsegui2').show();stepRichiesta(this);disableForm(this,'contformrichiesta')" class="backstep second modifica" href="javascript:;">modifica</a></span>
					</div>
					<div class="formGeneric steprichiestacont">
					  <div id="contformrichiesta" style="display:none"> 
						<p>Cartimpronta ONE &egrave; la carta di credito a zero canone annuale, zero commissioni e con tutti i vantaggi dei circuiti MasterCard e Visa. Ti ricordiamo che l'emissione &egrave; sempre soggetta a valutazione da parte della Banca.</p>
						<strong>Per ricevere la carta soddisfa almeno UNO di questi requisiti:</strong>
						<p>
						- saldo del conto pari o superiore a 5.000 Euro<br/>
						- accredito dello stipendio da almeno due mesi<br/>
						- accrediti mensili pari o superiori a 1.500 Euro negli ultimi due mesi  
						</p>
						<div class="boxesito attenzione">
							<div class="middle"><span class="imgCont"></span>
							<div class="text"><p class="noPaddbottom">Al momento non hai i requisiti per ricevere la carta di credito. Puoi inoltrare la richiesta e non appena raggiunti uno dei requisiti riceverai il contratto da firmare e spedire.</p></div>
							</div>
						</div>
						<form id="formrichiesta1">
							<div class="row-fluid">
								<div class="span6">
									<label class="nomefield">Intestatario</label>
									<span class="output">Lorem ipsum</span>
								</div>
								<div class="span6">
									<label class="nomefield">Conto di addebito</label>
									<span class="output">CC 00599 0000013336 EUR</span>
								</div>
							</div>
							<div class="row-fluid">
								<div class="span6">
									<label class="nomefield">Motivo della richiesta</label>
									<select><option>lorem ipsum</option><option>lorem ipsum</option><option>lorem ipsum</option></select>
								</div>
								<div class="span6">
									<label class="nomefield">Carta da estinguere</label>
									<span class="output">XXXX2245</span>
								</div>
							</div>
							<div class="row-fluid tolltipclick">
								<div class="radiocont tolltipclick span6">
									<span class="nomefield">Circuito</span>
									<div class="row-fluid">
										<label class="span6"><input type="radio" name="carta" value="Mastercard">Mastercard<br> 
											<span class="closed">
												<span id="consigliato" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}">
												<span class="uniqTooltipPos"><a href="javascript:;" class="underline textbottom">(Consigliato da Webank)</a>
													<span class="uniqTooltipInnerHTML">lorem ipsum dolor sit </span>
												</span>
												</span>
											</span>
										</label>
										<label class="span6"><input type="radio" name="carta" value="Visa">Visa</label>
									</div>
								</div>
								<div class="span6">
									<label class="nomefield ico">Limiti di spese</label>
									<span class="iconahelp">
										<span class="closed">
											<span id="documenti7" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
											<span class="uniqTooltipPos"><a href="javascript:;"><img src="/img/ret/ico2or_help2.gif" class="help"></a>
												<span class="uniqTooltipInnerHTML">lorem ipsum dolor sit </span>
											</span>
											</span>
										</span>
									</span>
										<div class="row-fluid">
											<div class="span6">
												<select><option>seleziona</option><option>100</option></select>
											</div>
											<div class="span6">
												<br>
												<span>Salvo valutazione di Webank</span>
											</div>
										</div>
								</div>
							</div>
							<div class="row-fluid">
								<label class="nomefield">Indirizzo di spedizione</label>
								<span class="output">Via tal dei tali N°5<br>
								Lorem ipsum lorem ipsum <strong>lorem ipsum</strong> lorem ipsum</span>
							</div>
							<div class="row-fluid">
								<label class="left nomefield">Note</label>
								<input type="text" name="" placeholder="facoltativo">
							</div>
							<div class="disabledField">
								<span class="nomefield">Privacy</span>
								<span class="text">Consenso al trattamento dei miei dati previsto previsto dall' <a href="javascript:;" onclick="ableinput(this)" target="_blank">informativa sui sistemi di informazione creditizi privati</a></span>
								<div class="tolltipclick row-fluid">
									<div class="radiocont span6">
										<div class="row-fluid">
											<div class="span6">
												<span class="closed">
													<span id="consenso1" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed' &amp;&amp; $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
														<span class="uniqTooltipPos">
															<a href="javascript:;"><label><span class="hovfin"></span><input type="radio" name="consenso" id="consenso" disabled="">do il consenso</label></a>
															<span class="uniqTooltipInnerHTML">
																<p>prima di fornire il consenso devi leggere l'informativa privacy</p>
															</span>
														</span>
													</span>
												</span>
											</div>
											<div class="span6">
												<span class="closed">
													<span id="consenso2" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed' &amp;&amp; $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
														<span class="uniqTooltipPos">
															<a href="javascript:;"><label><span class="hovfin"></span><input type="radio" name="consenso" id="noconsenso" disabled="">non do il consenso</label></a>
															<span class="uniqTooltipInnerHTML">
																<p>prima di fornire il consenso devi leggere l'informativa privacy</p>
															</span>
														</span>
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row-fluid tolltipclick disabledField">	
								<label class="nomefield">Informativa:</label>
								<span class="closed">
									<span onclick="if(this.parentNode.className=='closed'&amp;&amp; $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="informative2">
										 <span class="uniqTooltipPos">
											<a class="hovfincont" href="javascript:;"><span class="hovfin"></span><input type="checkbox" disabled="" id="contratto2"></a>
											<span class="uniqTooltipInnerHTML">
												<p>per procedere occorre prendere visione</p>
											</span>
										 </span>
									</span>
								</span>
								<span class="text">Dichiaro di aver preso visione dopo averlo stampato e/o salvato su supporto durevole <a target="_blank" onclick="ableinput(this)" href="javascript:;">"la Documentazione Precontrattuale"</a>(documento di sintesi e informativa precontrattuale).<br> Puoi consultare se desideri anche il <a href="#" target="_blank">Foglio informativo</a> </span>
							</div>
							<div class="row-fluid">
								<legend>Attivazione</legend>
								<label><input type="checkbox" class="placeholder"><span class="text nopadd">Dopo aver ricevuto la carta e il relativo Pin la attiverò chiamamando il numero verde indicato nella lettera di spedizione</span></label>
							</div>
							
							<div class="row-fluid">
									<label class="nomefield">Recesso:</label>
									<span class="text nopadd">Puoi recedere dalla richiesta della carta entro 14 giorni senza oneri penali. <a href="#">Leggi il documento</a></span>
							</div>
							<br class="clear">
						</form>
						<div class="boxform">
						<br>
<form id="formrichiesta2">
	<div class="row-fluid tolltipclick">
		<span class="autosize">Per questa normativa sei tenuto a fornire alla Banca alcune informazioni obbligatorie</span>
	    <span class="iconahelp">
		<span class="closed">
					<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti5">
						<span class="uniqTooltipPos">
							<a href="javascript:;"><img src="/img/ret/ico2or_help2.gif" class="help"></a>
							<span class="uniqTooltipInnerHTML">
								<p>

Ai sensi della normativa antiriciclaggio (D.Lgs. 231/07) il Cliente

è obbligato a fornire alla Banca alcune dichiarazioni e informazioni.Ti ricordiamo che il rilascio di false informazioni od omissioni comporta conseguenze anche di natura penale. I dati forniti di seguito devono ritenersi integrati (sempre per le finalità di cui alla normativa antiriciclaggio) con i dati forniti alla Banca in relazione ai rapporti bancari, finanziari e di investimento.
</p>
							</span>
						</span>
					</span>
		</span>
		</span>
		<!--<span class="underline">Informativa trattamento dati personali</span>-->
	</div>
	<div class="row-fluid">
		<label class="nomefield">Utilizzo della carta</label>
		<div class="radiocont">
			<label class="span4"><input type="radio" name="motivo" disabled="">per esigenze familiari</label>
			<label class="span4"><input type="radio" name="motivo" disabled="">per esigenze di finanziamento</label>
			<label class="span4"><input type="radio" name="motivo" disabled="">per esigenze professionali</label>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label class="nomefield">Professione</label>
			<select disabled="">
				<option>Seleziona</option>
				<option>Lorem</option>
			</select>
		</div>
	
		<div class="span6">
			<label class="nomefield">Settore dell'attività lavorativa</label>
			<select disabled="">
				<option>Seleziona</option>
				<option>Lorem</option>
			</select>
		</div>
	</div>
	<div class="row-fluid">
		<label class="nomefield">Dettaglio settore</label>
		<select disabled="">
			<option>Seleziona</option>
			<option>Lorem</option>
		</select>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label class="nomefield">Stato di svolgimento</label>
			<select disabled="">
				<option>Seleziona</option>
				<option>Lorem</option>
			</select>
		</div>
		<div class="span6">
			<label class="nomefield">Provincia di svolgimento</label>
			<select disabled="">
				<option>Seleziona</option>
				<option>Lorem</option>
			</select>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<label class="nomefield">Reddito annuo netto</label>
			<select disabled="">
				<option>Seleziona</option>
				<option>Lorem</option>
			</select>
		</div>
		<div class="span6">
			<label class="nomefield">Dichiarazione origine del reddito</label>
			<select disabled="">
				<option>Seleziona</option>
				<option>Lorem</option>
			</select>
		</div>
	 </div>
	 
	 
	 
	 <div class="row-fluid">
		 <div class="tolltipclick span6">
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
			
			<select disabled="">
				<option>Seleziona</option>
				<option>Lorem</option>
			</select>
		</div>
		 <div class="tolltipclick span6">
			<label class="nomefield nopadd">Persona politicamente esposta</label>
			<span class="text nofl dotted">Importante: prima di rispondere leggi la <span class="closed">
					<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti6">
					   <span class="uniqTooltipPos">
							<a href="javascript:;">definzione</a>
							<span class="uniqTooltipInnerHTML">
								<p>Si intendono Persone Politicamente Esposti i cittadini di stati Comunitari od Extracomunitari che hannno ricoperto cariche politicamente rilevanti, o i loro parenti, ad esempio gli incarichi di : Capi di Stato, capi di Governo, vice Ministri, sottosegretari, parlamentari, membri delle Corti Supreme, delle Corti Costituzionali e di altri OrganiGiudiziari di alto livello, membri delle Corti dei Conti e dei Consigli di Amministrazione delle Banche Centrali, ambasciatori, incaricati di affari e gli Ufficiali di alto livello delle forze armate, membri degli Organi di Amministrazione, direzione o vigilanza delle imprese possedute dallo Stato, Funzionari/Organi titolari di posizioni di alto livello di enti comunitari e internazionali, familiari diretti di PEP e soggetti che notoriamente intrattengono stretti legami con i PEP (D.Lgs. n. 231/2007)
									Si intendono Persone Politicamente Esposti i cittadini di stati Comunitari od Extracomunitari che hannno ricoperto cariche politicamente rilevanti, o i loro parenti, ad esempio gli incarichi di : Capi di Stato, capi di Governo, vice Ministri, sottosegretari, parlamentari, membri delle Corti Supreme, delle Corti Costituzionali e di altri OrganiGiudiziari di alto livello, membri delle Corti dei Conti e dei Consigli di Amministrazione delle Banche Centrali, ambasciatori, incaricati di affari e gli Ufficiali di alto livello delle forze armate, membri degli Organi di Amministrazione, direzione o vigilanza delle imprese possedute dallo Stato, Funzionari/Organi titolari di posizioni di alto livello di enti comunitari e internazionali, familiari diretti di PEP e soggetti che notoriamente intrattengono stretti legami con i PEP (D.Lgs. n. 231/2007)
									Si intendono Persone Politicamente Esposti i cittadini di stati Comunitari od Extracomunitari che hannno ricoperto cariche politicamente rilevanti, o i loro parenti, ad esempio gli incarichi di : Capi di Stato, capi di Governo, vice Ministri, sottosegretari, parlamentari, membri delle Corti Supreme, delle Corti Costituzionali e di altri OrganiGiudiziari di alto livello, membri delle Corti dei Conti e dei Consigli di Amministrazione delle Banche Centrali, ambasciatori, incaricati di affari e gli Ufficiali di alto livello delle forze armate, membri degli Organi di Amministrazione, direzione o vigilanza delle imprese possedute dallo Stato, Funzionari/Organi titolari di posizioni di alto livello di enti comunitari e internazionali, familiari diretti di PEP e soggetti che notoriamente intrattengono stretti legami con i PEP (D.Lgs. n. 231/2007)
									Si intendono Persone Politicamente Esposti i cittadini di stati Comunitari od Extracomunitari che hannno ricoperto cariche politicamente rilevanti, o i loro parenti, ad esempio gli incarichi di : Capi di Stato, capi di Governo, vice Ministri, sottosegretari, parlamentari, membri delle Corti Supreme, delle Corti Costituzionali e di altri OrganiGiudiziari di alto livello, membri delle Corti dei Conti e dei Consigli di Amministrazione delle Banche Centrali, ambasciatori, incaricati di affari e gli Ufficiali di alto livello delle forze armate, membri degli Organi di Amministrazione, direzione o vigilanza delle imprese possedute dallo Stato, Funzionari/Organi titolari di posizioni di alto livello di enti comunitari e internazionali, familiari diretti di PEP e soggetti che notoriamente intrattengono stretti legami con i PEP (D.Lgs. n. 231/2007)
									Si intendono Persone Politicamente Esposti i cittadini di stati Comunitari od Extracomunitari che hannno ricoperto cariche politicamente rilevanti, o i loro parenti, ad esempio gli incarichi di : Capi di Stato, capi di Governo, vice Ministri, sottosegretari, parlamentari, membri delle Corti Supreme, delle Corti Costituzionali e di altri OrganiGiudiziari di alto livello, membri delle Corti dei Conti e dei Consigli di Amministrazione delle Banche Centrali, ambasciatori, incaricati di affari e gli Ufficiali di alto livello delle forze armate, membri degli Organi di Amministrazione, direzione o vigilanza delle imprese possedute dallo Stato, Funzionari/Organi titolari di posizioni di alto livello di enti comunitari e internazionali, familiari diretti di PEP e soggetti che notoriamente intrattengono stretti legami con i PEP (D.Lgs. n. 231/2007)
								
								</p>
								
							</span>
						</span>
					</span>
				</span>
			</span>
			<div class="radiocont row-fluid">
				<label class="span3"><input type="radio" name="pol" disabled="">no</label>
				<label class="span3"><input type="radio" name="pol" disabled="">si</label>
			</div>
		</div>
	</div>
</form>						</div>
<div id="btnProsegui2" class="btnc aButtoncons"><a onclick="$('#btnModifica2').show();$('#btnProsegui2').hide();disableForm(this,'contformrichiesta');stepRichiesta(this);" class="nextstep first aButton" href="javascript:;"><span>prosegui</span></a></div>
<div id="btnModifica2" style="display:none" class="btnc aButtoncons"><a onclick="$('#btnModifica2').hide();$('#btnProsegui2').show();disableForm(this,'contformrichiesta');stepRichiesta(this);" class="backstep second modifica" href="javascript:;"><span>modifica</span></a></div>
<br class="clear" />
					 </div>
					</div>
				</div>
				<div class="steprichiesta off">
					 <div class="steprichiestatit">
						<img src="/img/ret/str_tit_tre_off.png" alt="" />
						<h2 class="richiestaTit">Tutto &egrave; pi&ugrave; veloce con la firma digitale</h2>
						<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
					</div>
					<div class="formGeneric steprichiestacont">
						<div style="display:none" id="contformrichiesta2">
							<div class="boxgenericgrey">
					<div class="logoCont"><img class="logo" src="/img/ret/logo_digitallife.png"></div>
					<div class="boxgenerictext">
					<br>
					<h2>Entra nella Digital Life di Webank: richiedi la firma digitale, &egrave; GRATIS!</h2>
					<p>Abbiamo introdotto l'utilizzo della firma digitale per darti un servizio sempre più veloce ed efficiente.
				Puoi così firmare online i contratti che finora hai dovuto firmare manualmente e inviarci per posta.
				 <br> <br>
				 <strong>Inviaci il contratto</strong> firmato. Potrai <strong>firmare online</strong> le successive richieste di prodotti!</p>
					<form id="" class="formGeneric">
						<div class="tolltipclick row-fluid disabledField">
						  <span class="closed">
								<span onclick="if(this.parentNode.className=='closed' &amp;&amp; $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="informative">
									<span class="uniqTooltipPos">
										<a class="hovfincont" href="javascript:;"><span class="hovfin"></span><input type="checkbox" disabled="" id=""></a>
										<span class="uniqTooltipInnerHTML">
											<p>Devi prima leggere il manuale operativo della Firma</p>
										</span>
									</span>
											  
								</span>
						 </span>
						 <span class="text">Dichiaro di aver letto <a href="javascript:;" onclick="ableinput(this)" target="_blank">Manuale operativo - Condizioni generali e istruzion d'uso della Firma Digitale</a></span>
						
						</div>
					</form>
					</div>
				 </div>			<br>
							<form action="#">
					
					<div class="pintxt">
					<p class="pin_testo2">Lorem ipsum</p>
					  <p class="pin_testo">Inserisci la <strong class="negativo">TERZA</strong> 
						e <strong class="negativo">QUARTA</strong> cifra del codice <strong class="negativo">12</strong> 
						della tua <strong>Carta Servizi Telematici</strong></p>
					</div>
					<div class="pincode">
					  <input type="password" class="pin pinfirst" name="" maxlength="1">
					  <img width="17" height="21" border="0" alt="" class="aster pincenter" src="/img/ret/pin_aster.gif"><img width="17" height="21" border="0" alt="" class="aster pincenter" src="/img/ret/pin_aster.gif">
					  <input type="password" class="pin pinlast" name="" maxlength="1">
					   <br class="clear">
					  <img width="104" height="12" border="0" alt="" class="posizione" src="/img/ret/pin_posiz.jpg"> 	  
					</div>
				 <br class="clear">
				   
				  </form><div class="btnc aButtoncons"><a onclick="stepRichiesta(this,'true');$('contformrichiesta').hide();$('contformrichiestaoutput').show();$('#contformrichiesta2').hide();$('#contformrichiesta2output').show();" class="nextstep aButton" href="javascript:;"><span>invia la richiesta</span></a></div>
						<br class="clear"></div>
						<div style="display: none;" id="contformrichiesta2output">
							<strong>Ho preso visione del Manuale Operativo- condizioni generali e istruzioni uso della Firma Digitale.<br/>
				Potrai attivare la Firma Digitale dopo aver inviato il contratto firmato.  
				</strong>
						</div>
					</div>
					
				 </div>
				 	<div class="steprichiesta last off">
					<div class="steprichiestatit">
						<img src="/img/ret/str_tit_quattro_off.png" alt="Stampa il contratto" />
						<h2 class="richiestaTit">Stampa il contratto</h2>
						<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
					</div>
					<div class="steprichiestacont">
						<div id="contformrichiesta3output" style="display:none">
						<?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_270.php");?>
					   <br class="clear" />
					   <strong class="verde">Prossimi passi per attivare e iniziare a utilizzare la tua carta:</strong>
					   <br class="clear" /><br/>
					   <div class="boxstepCont">
						<div class="boxstep">
							
							<div class="top"><span class="angololeft"></span><span class="angoloright"></span></div>
							<div class="middle">
							<div class="text">
							<p><strong>INVIA UNA COPIA DELLA PATENTE A QUESTO INDIRIZZO EMAIL: webank@webank.it</strong><br/>
							Oppure:<br/>
							- fax n. 02/43450599 <br/>
							- posta: WeBank Spa - Via Massaua, 4 - 20146 Milano (Mi)
							</p>
							<p>La fotocopia dovr&agrave; essere leggibile e chiara in ogni sua parte. La tua foto perfettamente riconoscibile. </p>
							</div>
						</div>
							<div class="bottom"><span class="angololeft"></span><span class="angoloright"></span></div>
						</div>
						</div>
						
						<div class="boxstepCont">
						<div class="boxstep">
							
							<div class="top"><span class="angololeft"></span><span class="angoloright"></span></div>
							<div class="middle">
							<div class="text">
							<p><strong>SODDISFA UNO DI QUESTI REQUISITI</strong><br/>
							- saldo del conto pari o superiore a 5.000 Euro<br/>
							- accredito dello stipendio da almeno due mesi<br/>
							- accrediti mensili pari o superiori a 1.500 Euro negli ultimi due mesi 
					
							</p>
							<p>Non appenena raggiungi uno dei tre requisiti, ti invieremo il contratto di Carta e di Firma Digitale all'indirizzo di posta da te indicato.</p>
							
							</div>
						</div>
							<div class="bottom"><span class="angololeft"></span><span class="angoloright"></span></div>
						</div>
						</div>
						
					   </div>
					   <br class="clear" />
					</div>
				</div>
				<div class="stepbottom"></div>
			</div>
		</div>
	</div>
</div>