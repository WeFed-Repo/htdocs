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
						<img src="/img/ret/str_tit_uno_on.gif" alt="Lorem ipsum dolor">
						<h2 class="richiestaTit">Lorem ipsum dolor</h2>
						<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
						<span style="display:none"><a href="javascript:;" class="backstep second modifica" onclick="$('#btnModifica1').hide();$('#btnProsegui1').show();stepRichiesta(this);disableForm(this,'contformrichiesta')">modifica</a></span>
					</div>
		
					<div class="formGeneric steprichiestacont">
					  <div id="contformrichiesta"> 
						<p>Cartimpronta ONE è la carta di credito a zero canone annuale, zero commissioni e con tutti i vantaggi dei circuiti MasterCard e Visa. Ti ricordiamo che l'emissione è sempre soggetta a valutazione da parte della Banca.</p>
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
							<div class="row-fluid tolltipclick">
								<div class="radiocont tolltipclick span6">
									<span class="nomefield">Circuito</span>
									<div class="row-fluid">
										<label class="span6"><input type="radio" value="Mastercard" name="carta">Mastercard<br> 
											<span class="closed">
												<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'large')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="consigliato">
												<span class="uniqTooltipPos"><a class="underline textbottom" href="javascript:;">(Consigliato da Webank)</a>
													<span class="uniqTooltipInnerHTML">lorem ipsum dolor sit </span>
												</span>
												</span>
											</span>
										</label>
										<label class="span6"><input type="radio" value="Visa" name="carta">Visa</label>
									</div>
								</div>
								<div class="span6">
									<label class="nomefield ico">Limiti di spese</label>
									<span class="iconahelp">
										<span class="closed">
											<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti7">
											<span class="uniqTooltipPos"><a href="javascript:;"><img class="help" src="/img/ret/ico2or_help2.gif"></a>
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
												<br/>
												<span class="txtSize10">Salvo valutazione di Webank</span>
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
								<input type="text" placeholder="facoltativo" name="">
							</div>
							<div class="disabledField">
								<span class="nomefield">Privacy</span>
								<span class="text">Consenso al trattamento dei miei dati previsto previsto dall' <a target="_blank" onclick="ableinput(this)" href="javascript:;">informativa sui sistemi di informazione creditizi privati</a></span>
								<div class="tolltipclick row-fluid">
									<div class="radiocont span6">
										<div class="row-fluid">
											<div class="span6">
												<span class="closed">
													<span onclick="if(this.parentNode.className=='closed' &amp;&amp; $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="consenso1">
														<span class="uniqTooltipPos">
															<a href="javascript:;"><label><span class="hovfin"></span><input type="radio" disabled="" id="consenso" name="consenso">do il consenso</label></a>
															<span class="uniqTooltipInnerHTML">
																<p>prima di fornire il consenso devi leggere l'informativa privacy</p>
															</span>
														</span>
													</span>
												</span>
											</div>
											<div class="span6">
												<span class="closed">
													<span onclick="if(this.parentNode.className=='closed' &amp;&amp; $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="consenso2">
														<span class="uniqTooltipPos">
															<a href="javascript:;"><label><span class="hovfin"></span><input type="radio" disabled="" id="noconsenso" name="consenso">non do il consenso</label></a>
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
									<span id="informative2" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed'&& $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
										 <span class="uniqTooltipPos">
											<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" id="contratto2" disabled></a>
											<span class="uniqTooltipInnerHTML">
												<p>per procedere occorre prendere visione</p>
											</span>
										 </span>
									</span>
								</span>
								<span class="text">Dichiaro di aver preso visione dopo averlo stampato e/o salvato su supporto durevole <a href="javascript:;" onclick="ableinput(this)" target="_blank">&quot;la Documentazione Precontrattuale&quot;</a>(documento di sintesi e informativa precontrattuale).<br/> Puoi consultare se desideri anche il <a target="_blank" href="#">Foglio informativo</a> </span>
							</div>
							<div class="row-fluid">
								<legend>Attivazione</legend>
								<label><input type="checkbox" class="placeholder"><span class="text nopadd">Dopo aver ricevuto la carta e il relativo Pin la attiverò chiamamando il numero verde indicato nella lettera di spedizione</span></label>
							</div>
							
							<div class="row-fluid">
									<label class="nomefield">Recesso:</label>
									<span class="text nopadd">Puoi recedere dalla richiesta della carta entro 14 giorni senza oneri penali. <a href="#">Leggi il documento</a></span>
							</div>
							<br class="clear" />
						</form>
						<div class="titform"><h2>Normativa antiriciclaggio</h2></div>
						<div class="boxform formGeneric">
						<?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_324.php");?>
						</div>
						 <div class="btnc aButtoncons" id="btnProsegui2"><a href="javascript:;" class="nextstep first aButton" onclick="$('#btnModifica2').show();$('#btnProsegui2').hide();disableForm(this,'contformrichiesta');stepRichiesta(this);"><span>prosegui</span></a></div>
						<div class="btnc aButtoncons" style="display:none" id="btnModifica2"><a href="javascript:;" class="backstep second modifica" onclick="$('#btnModifica2').hide();$('#btnProsegui2').show();disableForm(this,'contformrichiesta');stepRichiesta(this);"><span>modifica</span></a></div>
						<br class="clear" />
					  </div>
					  <div id="contformrichiestaoutput" style="display:none">
							<form id="formrichiesta1">
								<div class="row-fluid">
									<div class="span6">
										<label class="nomefield">Intestazione carta:</label>
										<span class="output">Lorem ipsum</span>
									</div>
									<div class="span6">
										<label class="nomefield">Contabili, estratto conto:</label>
										<span class="output">online,gratuite (potrai modificare la modalità di ricezione successivamente)</span>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span6">
										<label class="nomefield">Indirizzo di spedizione:</label>
										<span class="output">lorem ipsum</span>
									</div>
									<div class="span6">
										<label class="nomefield"> Modalit&agrave; di invio:</label>
										<span class="output">lorem ipsum</span>
										<span>Gratuita in  6/7 gg lavorativi</span>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span6">
										<label class="nomefield">Numero di Telefono:</label>
										<span class="output">lorem ipsum</span>
									</div>
									<div class="span6">
										<label class="nomefield">Note:</label>
										<span class="output">lorem ipsum</span>
									</div>
								</div>
								
								<div class="row-fluid">
									<legend>Attivazione:</legend>
									<span class="output">lorem ipsum</span>
								</div>
								<br class="clear">
								<div class="row-fluid">
									<legend>Informativa</legend>
									<span class="output">lorem ipsum</span>
								</div>
								<div class="tolltipclick row-fluid">
									<label class="nomefield">Firma digitale remota:</label>
									<span class="output">lorem</span>	
								</div>
							
							
							</form>
							<div class="titform"><h2>Normativa antiriciclaggio</h2></div>
							<div class="boxform">
									<form id="formrichiesta2" class="formGeneric">
									<div class="row-fluid">
										<label class="nomefield">Utilizzo della carta:</label>
										<span class="output">lorem ipsum</span>
									</div>
									<div class="row-fluid">
										<div class="span6">
											<label class="nomefield">Professione:</label>
											<span class="output">lorem ipsum</span>
										</div>
										<div class="span6">
											<label class="nomefield">Settore dell'attività lavorativa:</label>
											<span class="output">lorem ipsum</span>
										</div>
									</div>
									<div class="row-fluid">
										<div class="span6">
											<label class="nomefield">Dettaglio settore:</label>
											<span class="output">lorem ipsum</span>
										</div>
										<div class="span6">
											<label class="nomefield">Stato di svolgimento:</label>
											<span class="output">lorem ipsum</span>
										</div>
									</div>
									
									<div class="row-fluid">
										<div class="span6">
											<label class="nomefield">Provincia di svolgimento:</label>
											<span class="output">lorem ipsum</span>
										</div>
										<div class="span6">
											<label class="nomefield">Reddito annuo netto:</label>
											<span class="output">lorem ipsum</span>
										</div>
									</div>
									
									<div class="row-fluid">
										<div class="span6">
											<label class="nomefield">Dichiarazione origine del reddito:</label>
											<span class="output">lorem ipsum</span>
										</div>
										 <div class="span6">
											<label class="nomefield">Origine dei fondi:</label>
											<span class="output">lorem ipsum</span>
										</div>
									</div>
									
									<div class="row-fluid">
										<label class="nomefield">Persona politicamente esposta:</label>
										<span class="output">lorem ipsum</span>
									</div>
								</form>
						</div>
					  </div>
					 
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
	
	<div class="middle"><span class="imgCont"></span>
	<div class="text"><p class="noPaddbottom"><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p></div>
	
	</div>
	
</div>						   <br class="clear">
						   <strong class="verde">Prossimi passi per attivare e iniziare a utilizzare il tuo Bancomat:</strong>
						   <br class="clear"><br>
						   <div class="boxstepCont">
							<div class="boxstep">
								
								<div class="top"><span class="angololeft"></span><span class="angoloright"></span></div>
								<div class="middle">
									<div class="half text">
										<p class="nopadd"><strong>STAMPA IL CONTRATTO</strong><br>
											<strong>Firmalo e spedisci insieme alla fotocopia della patente a:</strong>
											<br>Webank<br>via Massaua 4,<br>20146 Milano<br><br class="clear"><br>
										</p>
										<ul class="pdfinline nopadd">
											<li>
												<a onclick="$(this).next().css('visibility','visible')" id="contratto" href="javascript:;" class="printDoc">stampa il contratto</a>
												<img style="visibility:hidden" src="/img/img_or_visited.gif" class="visitedImgStep">
											</li>
										</ul>
									</div>
									<div class="text">
										<p>Ti avvisiamo che senza la copia del documento di identit&agrave; valido,  la carta richiesta non sar&agrave; spedita. </p>
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
								<p><strong>ATTIVA LA CARTA</strong><br>
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