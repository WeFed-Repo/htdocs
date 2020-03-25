<h1>Info e gestione carta</h1>

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
						<img src="/img/ret/str_tit_uno_on.gif" alt="Lorem ipsum dolor">
						<h2 class="richiestaTit">Lorem ipsum dolor</h2>
						<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
						<span style="display:none"><a href="javascript:;" class="backstep second modifica" onclick="$('#btnModifica1').hide();$('#btnProsegui1').show();stepRichiesta(this);disableForm(this,'contformrichiesta')">modifica</a></span>
					</div>
		
					<div class="formGeneric steprichiestacont">
					  <div id="contformrichiesta">  
					<form id="formrichiesta1">
						<div class="row-fluid">
							<div class="span6">
								<label class="nomefield">Intestazione carta:</label>
								<span class="output">Lorem ipsum</span>
							</div>
							<div class="span6">
								<label class="nomefield">Conto di appoggio:</label>
								<span class="output">CC 00599 0000013336 EUR</span>
							</div>
						</div>
						
						<!--solo se si possiede già il bancomat -->
						<div class="row-fluid">
							<div class="span6">
								<label class="nomefield">Motivo della richiesta:</label>
								<select disabled=""><option>lorem ipsum</option><option>lorem ipsum</option></select>
							</div>
							<div class="span6">
								<label class="nomefield">Bancomat da estinguere:</label>
								<span class="output">1333653422</span>
							</div>
						</div>
						
						<div class="row-fluid">
							<div class="span6">
								<label class="nomefield">Massimali di spesa:</label>
								<span class="output">1500 al giorno/2500 al mese</span>
							</div>
						<div class="span6 tolltipclick">
						<label class="nomefield">
						<span class="closed">
							<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="massimali">
									<span class="uniqTooltipPos">
										<a class="underline" href="javascript:;">Vedi dettagli</a>
											<span class="uniqTooltipInnerHTML">
												<p>
													</p><table class="piattrad">	
														<tbody><tr>
															<td class="grey">Tipologia </td>		
															<td class="grey center thfiletto">Al giorno </td>
															<td class="grey center">Al mese </td>		
														</tr>
														<tr>
															<td class="greyleft">
																<img class="padbot" src="/img/ret/quad_pic_blu.gif" alt="">
																		<span class="closed">
																		<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="maxutilizzo">
																				<span class="uniqTooltipPos">
																					<a href="javascript:;"><strong>Max utilizzo carta</strong></a>
																						<span class="uniqTooltipInnerHTML">
																							<p>
																								Per  "Max utilizzo carta " si intende la cifra totale che puoi spendere con il bancomat, ovvero la somma dei vari tipi di utilizzo (prelievo e pagamenti).
																							ESEMPIO. Se il tuo massimale mensile è di 2000  €,  prelevando 1200 €, ti restano 800 € per i tuoi pagamenti.
																							</p>
																						</span>
																				</span>
																		</span>
																</span>
															</td>
															<td class="right">1500 €</td>
															<td class="right">2000 €</td>
														</tr>
														<tr>
															<td class="greyleft"><img class="padbot" src="/img/ret/quad_pic_blu.gif" alt="">Max prelievo circuito Bancomat</td>
															<td class="right">500 €</td>
															<td class="right">1500 €</td>
														</tr>
														<tr>
															<td class="greyleft"><img class="padbot" src="/img/ret/quad_pic_blu.gif" alt="">Max prelievo circuito Cirrus (tra Italia ed estero)</td>
															<td class="right">250 €</td>
															<td class="right">1000 €</td>
														</tr>
														<tr>
															<td class="greyleft"><img class="padbot" src="/img/ret/quad_pic_blu.gif" alt="">Max pagamento circuito PagoBancomat</td>
															<td class="right">1000 €</td>
															<td class="right">1000 €</td>
														</tr>
														<tr>
															<td class="greyleft"><img class="padbot" src="/img/ret/quad_pic_blu.gif" alt="">Max pagamento circuito Maestro (tra Italia ed estero)</td>
															<td class="right">500 €</td>
															<td class="right">1000 €</td>
														</tr>
													</tbody></table>
												<p></p>
											</span>
									</span>
							</span>
						</span>
						</label>
					</div>
						
						</div>
						
						<div id="indirizzosped">
							<div class="row-fluid">
								<div class="span6">
									<label class="nomefield">Indirizzo di spedizione:</label>
									<span class="output">lorem ipsum dolor sit</span>
								</div>
								<div class="span6 tolltipclick">
									<label class="nomefield">
									<a onclick="if(!$(this).hasClass('disabled')) {$('#indirizzosped').hide();$('#indirizzomod').show()}" href="javascript:;" class="underline linkTodisable">Cambia indirizzo</a>
									<span class="iconahelp">
									<span class="closed">
												<span id="indirizzo" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}">
													<span class="uniqTooltipPos">
														<a href="javascript:;"><img class="help" src="/img/ret/ico2or_help2.gif"></a>
														<span class="uniqTooltipInnerHTML">
															<p>Puoi cambiare indirizzo di spedizione cliccando sul link. La modifica dell'indirizzo  non comporta il cambio in anagrafe.</p>
														</span>
													</span>
												</span>
									</span>
									</span></label>
									<span class="output"><strong></strong></span>
								</div>
							</div>
					   </div>
					<div class="borderLeftgrey" style="display:none" id="indirizzomod">
						<div class="row-fluid">
							<label class="nomefield">Indirizzo di Spedizione:</label>
							<span>La modifica è valida soltanto per la spedizione della carta, ma non implica il cambio dell'indirizzo presente in anagrafe.</span>
						</div>
						<div class="row-fluid">
							<label class="nomefield">Destinatario</label>
							<span>Mario Rossi</span>
						</div>
						<div class="row-fluid">
							<div class="span6">
								<label class="nomefield">Spedizione presso:</label>
								<input type="text" disabled="">
							</div>
							<div class="span6">
								<label class="nomefield">Indirizzo:</label>
								<input type="text" disabled="">
							</div>
						</div>
						<div class="row-fluid">
							<div class="span4">
								<label class="nomefield">Provincia:</label>
								<select disabled=""><option>lorem</option><option>lorem</option></select>
							</div>
							<div class="span4">
								<label class="nomefield">Città:</label>
								<select disabled=""><option>lorem</option><option>lorem</option></select>
							</div>
							<div class="span4">
								<label class="nomefield">CAP:</label>
								<select disabled=""><option>lorem</option><option>lorem</option></select>
							</div>
						</div>
						<div class="row-fluid">
							<a class="disabled flRight" href="javascript:;"><span>lorem ipsum</span></a>
						</div>
					</div>
					
					
					<div class="row-fluid">
						<span class="nomefield">Modalità di invio</span>
						<div class="row-fluid">		
							<div class="span6">
								<label><input type="radio" onclick="$('#spedizioneHidden').hide()" name="spedizione" value="Posta raccomandata" disabled="">Posta raccomandata<br> </label>
								<span>Gratuita in  6/7 gg lavorativi</span>
							</div>
							<div class="span6">
								<label><input type="radio" onclick="$('#spedizioneHidden').show()" name="spedizione" value="Corriere" disabled="">Corriere</label>
								<span>Gratuita in 2/3gg lavorativi</span>
							</div>
						</div>
					</div>
					
					<div style="display:none" id="spedizioneHidden">
						<div class="tolltipclick span6">
						<label class="nomefield ico">Numero di Telefono:</label>
						<span class="iconahelp">
						<span class="closed">
								<span id="spedizione" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}">
									<span class="uniqTooltipPos">
										<a href="javascript:;"><img class="help" src="/img/ret/ico2or_help2.gif"></a>
										<span class="uniqTooltipInnerHTML">
											<p>Il numero serve al corriere per contattarti in caso di contrattempi nella consegna.</p>
										</span>
									</span>
								</span>
						</span>
						</span>
						
						<input type="text" disabled="">
						
						
						</div>
					
					</div>
					
					<div class="row-fluid">
						<label class="nomefield">Note:</label>
						<input type="text" name="" placeholder="facoltativo" disabled="">
					</div>
					
					<div class="tolltipclick row-fluid disabledField">
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
						<span class="text nopadd">Dichiaro di aver preso visione dopo averlo stampato e/o salvato su supporto durevole <a target="_blank" onclick="ableinput(this)" href="javascript:;">"la Documentazione Precontrattuale"</a>(documento di sintesi e informativa precontrattuale).<br> Puoi consultare se desideri anche il <a href="#" target="_blank">Foglio informativo</a> </span>
					</div>
					<div class="row-fluid">
						<label class="nomefield">Recesso:</label>
						<span class="text nopadd">Puoi recedere dalla richiesta della carta entro 14 giorni senza oneri penali. <a href="#">Leggi il documento</a></span>
					</div>
					<br class="clear">
				</form>
						<div id="btnProsegui1" class="btnc aButtoncons"><a onclick="$('#btnModifica1').show();$('#btnProsegui1').hide();disableForm(this,'contformrichiesta');stepRichiesta(this);" class="nextstep first aButton" href="javascript:;"><span>prosegui</span></a></div>
						<div id="btnModifica1" style="display:none" class="btnc aButtoncons"><a onclick="$('#btnModifica1').hide();$('#btnProsegui1').show();disableForm(this,'contformrichiesta');stepRichiesta(this);" class="backstep second modifica" href="javascript:;"><span>modifica</span></a></div>

						  
						</div>
						<div style="display:none" id="contformrichiestaoutput">
							<form id="formrichiesta1">
								<fieldset class="first">
									<label class="nomefield">Intestazione carta:</label>
									<span class="output">Lorem ipsum</span>
								</fieldset>
								<fieldset>
									<label class="nomefield">Conto di addebito:</label>
									<span class="output">CC 00599 0000013336 EUR</span>
								</fieldset>
								
								<fieldset class="first">
									<label class="nomefield">Massimali di spesa:</label>
									<span class="output">1000 al giorno/2500 al mese</span>
								</fieldset>
								<fieldset class="first">
									<label class="nomefield">Indirizzo di spedizione:</label>
									<span class="output">lorem ipsum</span>
								</fieldset>
								<fieldset>
									<label class="nomefield"> Modalità di invio:</label>
									<span class="output">lorem ipsum</span>
									<span>Gratuita in  6/7 gg lavorativi</span>
								</fieldset>
								<fieldset class="first">
									<label class="nomefield">Numero di Telefono:</label>
									<span class="output">lorem ipsum</span>
								</fieldset>
								<fieldset class="row">
									<label class="nomefield">Note:</label>
									<span class="output">lorem ipsum</span>
								</fieldset>
								<fieldset class="row">
									<legend class="vatop left">Informativa</legend>
									<span class="output">lorem ipsum</span>
									
								</fieldset>
								<fieldset class="first">
									<legend>Attivazione:</legend>
									<span class="output">lorem ipsum</span>
								</fieldset>
								<br class="clear">
								
								<fieldset class="tolltipclick row">
									<label class="nomefield">Firma digitale remota:</label>
									<span class="output">lorem </span>	
								</fieldset>
							</form>
							</div>
						
					 <br class="clear">
					</div>
		
		<!--contenuto da caricare come risposta di output visualizzazione e comparsa solo simulate-->
	   
				</div>
				<div class="steprichiesta off last">
    <div class="steprichiestatit">
		<img alt="lorem ipsum" src="/img/ret/str_tit_due_off.png">
		<h2 class="richiestaTit">Lorem ipsum</h2>
		<span class="icospunta" style="display:none"><img src="/img/ret/ico2inf_spunta.png"></span>
	</div>
	<div class="formGeneric steprichiestacont">
	  <div id="contformrichiesta2" style="display:none">
		<strong>Clorem ipsum dolor sit</strong><br/><br/>
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
		   
		  </form>
		  <div class="btnc aButtoncons" id="btnProsegui2"><a href="javascript:;" class="nextstep first aButton" onclick="$('#contformrichiesta,#contformrichiesta2').hide();stepRichiesta(this,true);$('#contformrichiestaoutput,#contformrichiesta2output').show();"><span>prosegui</span></a></div>
		</div>
		<div id="contformrichiesta2output" style="display:none">
			<div class="boxesito positivo">
	<div class="top"><span class="angololeft"></span><span class="angoloright"></span></div>
	<div class="middle"><span class="imgCont"></span>
	<div class="text"><p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p></div>
	
	</div>
	<div class="bottom"><span class="angololeft"></span><span class="angoloright"></span></div>
</div>						   <br class="clear">
						   <strong class="verde">Prossimi passi per attivare e iniziare a utilizzare il tuo Bancomat:</strong>
						   <br class="clear"><br>
						   <div class="boxstepCont">
							<div class="boxstep">
								
								<div class="top"><span class="angololeft"></span><span class="angoloright"></span></div>
								<div class="middle">
								<div class="half text">
									<p class="noPaddbottom"><strong>STAMPA IL CONTRATTO</strong><br>
										<strong>Firmalo e spedisci insieme ad una fotocopia di un documento di identit&agrave; valido a:</strong>
										<br>Webank<br>via Massaua 4,<br>20146 Milano<br class="clear"/>
									</p>
									<ul class="pdfinline nopadd">
										<li><a class="printDoc" href="#" id="contratto">stampa il contratto</a></li>
									</ul>
								</div>
								<div class="text">
									<p class="noPaddbottom">Ti avvisiamo che senza la copia del documento di identit&agrave; valido,  la carta richiesta non sar&agrave; spedita.</p>
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
								<p class="noPaddbottom"><strong>ATTIVA LA CARTA</strong><br>
								Una volta ricevuto il contratto ti invieremo all'indirizzo di posta da te indicato:<br>
								una busta contenente il Bancomat e le istruzioni per attivarlo.
								</p>
								
								</div>
							</div>
								<div class="bottom"><span class="angololeft"></span><span class="angoloright"></span></div>
							</div>
							</div><br class="clear" />
		</div>
	</div>
 </div>
 <div class="stepbottom"></div>
			</div>
		</div>
	</div>
</div>