<h1>Info e richiesta carta</h1>
<div class="divtabellalist">		 			
	<table class="tabellalist" border="0">
		<tr>
				<td class="off first" id="box5tab1">						
					<a href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_carte_scheda_prodotto_bpm.php" title="Scheda prodotto">scheda prodotto</a>
				</td>
				<td class="on" id="box5tab2">						
						<a href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_richiesta_carte_bpm.php" title="Richiesta carta">richiesta carta</a>
				</td>
				<td class="end">&nbsp;</td>						
		</tr>
	</table>
</div>	
<div id="box5ctntab2" style="visibility: visible;">
	<div class="boxrichiesta">
		<div class="steprichiesta on">
			<div class="steprichiestatit">
				<img alt="Lorem ipsum dolor" src="/img/ret/str_tit_uno_on.gif">
				<h2 class="richiestaTit">Richiedi il bancomat</h2>
				<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
				<span style="display:none"><a href="javascript:;" class="backstep second modifica" onclick="$('#btnModifica1').hide();$('#btnProsegui1').show();stepRichiesta(this);disableForm(this,'contformrichiesta')">modifica</a></span>

			</div>
			<div class="formGeneric steprichiestacont">
				<br/>
					<div id="contformrichiesta">
						<div class="row-fluid">
							<div class="span9 paddTopMedium">Procedi con la richiesta e segui le istruzioni: riceverai il <strong>bancomat</strong> e il <strong>Pin</strong> al tuo indirizzo di spedizione.</div>
							<div class="span3">
								<div class="box_dx">
									<strong>Ti serve aiuto?</strong><br>
									<span class="num_verde"><i class="icon-phone"></i>800 880 088</span>
								</div>
							</div>
						</div>
						<br class="clear"><br>
						<div id="ErroriValidazione">
							<div class="boxtop"><img  border="0" alt="" src="/img/ret/box_msgtop.jpg"/></div>
							<br class="clear" />
							<div class="boxtxt"><p class="box_mess"><img border="0" class="dx" alt="" src="/wscmn/img/ico2inf_errorform.gif"/><img border="0" alt="" src="/img/ret/box_attenzione.jpg"/><br/>
								<br>
								<ul class="alert">
									<li>Lorem ipsum dolor sit amet</li>
								</ul>
							</div>
						</div>
						<form id="formRichiestaBancomat">
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
							<div class="row-fluid">
								<div class="span6">
									<label class="nomefield">Massimali di spesa:</label>
									<span class="output">1500 al giorno/2500 al mese</span>
								</div>
								<div class="span6 tolltipclick">
										<label class="nomefield">
											<span class="closed">
			<span id="massimali" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}">
					<span class="uniqTooltipPos">
						<a href="javascript:;" class="underline">Vedi dettagli</a>
							<span class="uniqTooltipInnerHTML">
								<p>
									<table class="piattrad">	
										<tr>
											<td class="grey">Tipologia </td>		
											<td class="grey center thfiletto">Al giorno </td>
											<td class="grey center">Al mese </td>		
										</tr>
										<tr>
											<td class="greyleft">
												<img alt="" src="/img/ret/quad_pic_blu.gif" class="padbot">
														<span class="closed">
														<span id="maxutilizzo" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}">
																<span class="uniqTooltipPos">
																	<a href="javascript:;"><strong>Max utilizzo carta</strong></a>
																		<span class="uniqTooltipInnerHTML">
																			<p>
																				Per  &quot;Max utilizzo carta &quot; si intende la cifra totale che puoi spendere con il bancomat, ovvero la somma dei vari tipi di utilizzo (prelievo e pagamenti).
																			ESEMPIO. Se il tuo massimale mensile &egrave; di 2000  &euro;,  prelevando 1200 &euro;, ti restano 800 &euro; per i tuoi pagamenti.
																			</p>
																		</span>
																</span>
														</span>
												</span>
											</td>
											<td class="right">1500 &euro;</td>
											<td class="right">2000 &euro;</td>
										</tr>
										<tr>
											<td class="greyleft"><img alt="" src="/img/ret/quad_pic_blu.gif" class="padbot">Max prelievo circuito Bancomat</td>
											<td class="right">500 &euro;</td>
											<td class="right">1500 &euro;</td>
										</tr>
										<tr>
											<td class="greyleft"><img alt="" src="/img/ret/quad_pic_blu.gif" class="padbot">Max prelievo circuito Cirrus (tra Italia ed estero)</td>
											<td class="right">250 &euro;</td>
											<td class="right">1000 &euro;</td>
										</tr>
										<tr>
											<td class="greyleft"><img alt="" src="/img/ret/quad_pic_blu.gif" class="padbot">Max pagamento circuito PagoBancomat</td>
											<td class="right">1000 &euro;</td>
											<td class="right">1000 &euro;</td>
										</tr>
										<tr>
											<td class="greyleft"><img alt="" src="/img/ret/quad_pic_blu.gif" class="padbot">Max pagamento circuito Maestro (tra Italia ed estero)</td>
											<td class="right">500 &euro;</td>
											<td class="right">1000 &euro;</td>
										</tr>
									</table>
								</p>
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
									<div class="span6">
										<label class="nomefield">
										<a class="underline linkTodisable" href="javascript:;" onclick="if(!$(this).hasClass('disabled')) {$('#indirizzosped').hide();$('#indirizzomod').show()}">Cambia indirizzo</a>
										</label>
										<span class="output"><strong></strong></span>
									</div>
								</div>
							</div>
							<div id="indirizzomod" style="display:none" class="borderLeftgrey">
								<div class="row-fluid">
									<label class="nomefield">Indirizzo di Spedizione:</label>
									<span>La modifica &egrave; valida soltanto per la spedizione della carta, ma non implica il cambio dell'indirizzo presente in anagrafe.</span>
								</div>
								<div class="row-fluid">
									<label class="nomefield">Destinatario</label>
									<span>Mario Rossi</span>
								</div>
								<div class="row-fluid">
									<div class="span6">
										<label class="nomefield">Spedizione presso:</label>
										<input type="text">
									</div>
									<div class="span6">
										<label class="nomefield">Indirizzo:</label>
										<input type="text">
									</div>
								</div>
								<div class="row-fluid">
									<div class="span4">
										<label class="nomefield">Provincia:</label>
										<select><option>lorem</option><option>lorem</option></select>
									</div>
									<div class="span4">
										<label class="nomefield">Citt&agrave;:</label>
										<select><option>lorem</option><option>lorem</option></select>
									</div>
									<div class="span4">
										<label class="nomefield">CAP:</label>
										<select><option>lorem</option><option>lorem</option></select>
									</div>
								</div>
								<div class="row-fluid"><a href="javascript:;" class="flRight" onclick="$('#indirizzosped').show();$('#indirizzomod').hide()"><span>lorem ipsum</span></a></div>
							</div>
							<div class="row-fluid">
								<span class="nomefield">Modalit&agrave; di consegna</span>
								<div class="row-fluid">		
									<div class="span6">
										<label><input class="margBottomLarge" type="radio" value="Posta raccomandata" name="spedizione" onclick="$('#spedizioneHidden').hide()">Posta raccomandata<br> </label>
										<span>Gratuita in  6/7 gg lavorativi</span><br>
										<span><strong>costo di spedizione</strong>: 5,00 &euro;</span>

									</div>
									<div class="span6">
										<label><input class="margBottomLarge" type="radio" value="Corriere" name="spedizione" onclick="$('#spedizioneHidden').show()">Corriere</label>
										<span>Gratuita in 2/3gg lavorativi</span><br>
										<span><strong>costo di spedizione</strong>: 7,50 &euro;</span>
									</div>
								</div>
							</div>
	
							<div id="spedizioneHidden" style="display:none" class="row-fluid">
								<div class="tolltipclick span6">
								<label class="nomefield ico">Recapito telefonico:</label>
								<span class="iconahelp">
								<span class="closed">
										<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="spedizione">
											<span class="uniqTooltipPos">
												<a href="javascript:;"><img src="/img/ret/ico2or_help2.gif" class="help"></a>
												<span class="uniqTooltipInnerHTML">
													<p>Il recapito pu&ograve; servire al corriere per contattarti in caso di contrattempi nella consegna.</p>
												</span>
											</span>
										</span>
								</span>
								</span>
								
								<input type="text">
								
								</span>
								</div>
							
							</div>
							<div class="row-fluid">
								<label class="nomefield">Note:</label>
								<input type="text" placeholder="facoltativo" name="">
							</div>
							<div class="tolltipclick row-fluid disabledField errore">
									<label class="nomefield">Informativa:</label>
									<span class="closed">
										<span id="informative2" class="uniqTooltipText over fixed" onclick="if(this.parentNode.className=='closed'&& $(this).find('input').is(':disabled')) {createUniqTooltip(event, this, 'small')} else {removeUniqTooltip(event, this)}">
											 <span class="uniqTooltipPos">
												<a href="javascript:;" class="hovfincont"><span class="hovfin"></span><input type="checkbox" id="contratto2" disabled></a>
												<span class="uniqTooltipInnerHTML">
													<p>Prima di procedere, occorre prendere visione dell'informativa precontrattuale, aprendo il relativo Pdf, salvandolo e/o stampandolo in modo da poterlo conservare</p>
												</span>
											</span>
										</span>
									</span>
									<span class="text nopadd">Dichiaro di aver preso visione dopo averlo stampato e/o salvato su supporto durevole <a href="javascript:;" onclick="ableinput(this)" target="_blank">&quot;la Documentazione Precontrattuale&quot;</a>(documento di sintesi e informativa precontrattuale).<br/> Puoi consultare se desideri anche il <a target="_blank" href="#">Foglio informativo</a> </span>
							</div>
							<div class="row-fluid">	
									<label class="nomefield">Diritto di recesso:</label>
									<span class="text nopadd">In caso di conclusione del contratto puoi recedere senza penali e senza spese entro 14 giorni dalla ricezione della conferma di accettazione della tua richiesta. Per maggiori dettagli leggi <a href="#"> l'informativa sui contratti a distanza.</a></span>
							</div>
							<br class="clear" />
						</form>
						<div class="btnc aButtoncons" id="btnProsegui2"><a href="javascript:;" class="nextstep first aButton" onclick="$('#btnModifica2').show();$('#btnProsegui2').hide();disableForm(this,'contformrichiesta');stepRichiesta(this);"><span>prosegui</span></a></div>
						<div class="btnc aButtoncons" style="display:none" id="btnModifica2"><a href="javascript:;" class="backstep second modifica" onclick="$('#btnModifica2').hide();$('#btnProsegui2').show();disableForm(this,'contformrichiesta');stepRichiesta(this);"><span>modifica</span></a></div>
					</div>
					<div style="display:none" id="contformrichiestaoutput">
							<form id="formrichiesta1">
								<fieldset class="first">
									<label class="nomefield">Intestazione carta:</label>
									<span class="output">Lorem ipsum</span>
								</fieldset>
								<fieldset>
									<label class="nomefield">Conto di appoggio:</label>
									<span class="output">CC 00599 0000013336 EUR</span>
								</fieldset>
								
								<fieldset class="first">
									<label class="nomefield">Massimali di spesa:</label>
									<span class="output">1000 al giorno/2500 al mese</span>
								</fieldset>
								<fieldset>
									<label class="nomefield"> Modalità di consegna:</label>
									<span class="output">lorem ipsum</span>
									<span>Gratuita in  6/7 gg lavorativi</span>
								</fieldset>
								<fieldset class="first">
									<label class="nomefield">Indirizzo di spedizione:</label>
									<span class="output">lorem ipsum</span>
								</fieldset>
								
								<fieldset class="row">
									<label class="nomefield">Informativa precontrattuale:</label>
									<span class="output">lorem ipsum</span>
								</fieldset>
								<fieldset class="row">
									<label class="nomefield">Email:</label>
									<span class="output">lorem ipsum</span>
								</fieldset>
								
							</form>
							</div>

			</div>
		</div>
		<div class="steprichiesta off last">
			<div class="steprichiestatit">
				<img alt="lorem ipsum" src="/img/ret/str_tit_due_off.png">
				<h2 class="richiestaTit">Invia la richiesta e stampa il contratto</h2>
				<span class="icospunta" style="display:none"><img src="/img/ret/ico2inf_spunta.png"></span>
			</div>
			<div class="formGeneric steprichiestacont">
				 <div id="contformrichiesta2" style="display:none">
					Inserisci la<strong> password di II livello </strong> e invia la richiesta della carta<br/><br/>
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
					<div class="btnc aButtoncons" id="btnProsegui2"><a href="javascript:;" class="nextstep first aButton" onclick="$('#contformrichiesta,#contformrichiesta2').hide();stepRichiesta(this,true);$('#contformrichiestaoutput,#contformrichiesta2output').show();"><span>invia la richiesta</span></a></div>

				 </div>
				 <div id="contformrichiesta2output" style="display:none">
					<div class="boxesito positivo">
						<div class="middle"><span class="imgCont"></span>
						<div class="text"><p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
						et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p></div>
						</div>
					</div>
					 <br class="clear">
					<strong class="verde">COSA RESTA DA FARE</strong><br class="clear"><br>
					   <div class="boxstepCont">
							<div class="boxstep">
								<div class="top"><span class="angololeft"></span><span class="angoloright"></span></div>
								<div class="middle">
								<div class="half text">
									<p class="noPaddbottom"><strong>STAMPA E FIRMA IL CONTRATTO</strong><br><br>
										Una copia del contratto ti &egrave; stata inviata via mail.<br><br>
										<strong>Spediscilo a:</strong>
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
							</div>
						</div>
					 <br class="clear">
					<strong class="verde">HAI BISOGNO D'AIUTO?</strong><br class="clear"><br>
					<p>Per parlare con gli operatori bisogna identificarsi: tieni a portata di mano lo <strong>user ID</strong> e la <strong>password di II livello</strong> del tuo conto.</p>
					<div class="paddBottomMedium minHeight50 txtAlCenter">
						<span><img src="/img/ret/num_ver_bank.png"></span>
					</div>
					<div class="txtAlCenter paddBottomLarge">Lorem ipsum<br><a href="" class="colorBank">lorem ipsum</a></div>
					</div>
			</div>
		</div>
		<div class="stepbottom"></div>
	</div>

</div>