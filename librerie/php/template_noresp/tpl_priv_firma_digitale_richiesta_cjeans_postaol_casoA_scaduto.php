<script type="text/javascript">	
	$(function () {
				$("#dateToMask").mask("99/99/9999");
			});
</script>
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
			<span class="icospunta" style="display:none"><img src="/img/ret/ico2inf_spunta.png"></span>
		</div>
	
		<div class="formGeneric steprichiestacont">
			<br>
			<div id="formRichiestaFirmaStep1">
				<form id="formRichiestaFirma">
					<div class="boxesito attenzione">
						<div class="middle"><span class="imgCont"></span>
							<div class="text">
								<p class="noPaddbottom"><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
								et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
							</div>
						</div>
					</div>
					<div id="modDocRichiestaFirma">
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
											<input type="text" id="dateToMask" value="12/12/2012" onkeyup="if($(this).val()!='__/__/____') {$('#btnProsegui1Dis').hide();$('#btnProsegui1').show();}">
										</div>
									</div>
								</div>
							</div>
						</div>
						<br><br>
					</div>
					<div id="indRichiestaFirma">
						<div class="row-fluid">
							<div class="span4">
								<label class="nomefield">Lorem ipsum</label>
								<span class="output">Lorem ipsum dolor</span>
							</div>
							<div class="span4"><label class="nomefield">&nbsp;</label></div>
							<div class="span4">
								<a onclick="$('#indRichiestaFirma').hide();$('#modIndRichiestaFirma').show();" href="javascript:;" class="underline textbottom">Lorem ipsum dolor</a>
							</div>
						</div>
					</div>
					
					<div style="display:none" class="borderLeftgrey" id="modIndRichiestaFirma">
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
										<br><br>
										<a onclick="$('#modIndRichiestaFirma').hide();$('#indRichiestaFirma').show();" href="javascript:;" class="underline indent">Lorem ipsum dolor</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
				<div class="btnc aButtoncons" id="btnProsegui1Dis"><a class="aButton buttDis"><span>lorem ipsum</span></a></div>
				<div style="display:none" class="btnc aButtoncons" id="btnProsegui1"><a href="javascript:;" class="nextstep first aButton" onclick="$('#formRichiestaFirmaStep1').hide();$('#formRichiestaFirmaStep1output').show();stepRichiesta(this);"><span>lorem ipsum</span></a></div>
			</div>
			<div style="display:none" id="formRichiestaFirmaStep1output">
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
						<form id="formrichiesta1">
							<div class="row-fluid">
								<label class="nomefield">Intestazione carta:</label>
								<span class="output">Lorem ipsum</span>
							</div>
							<div class="row-fluid">
								<label class="nomefield">Contabili:</label>
								<span class="output">online,gratuite (potrai modificare la modalit&agrave; di ricezione successivamente)</span>
							</div>
							<div id="indirizzosped">
								<div class="row-fluid">
									<div class="span6">
										<label class="nomefield">Indirizzo di spedizione:</label>
										<span class="output">lorem ipsum dolor sit</span>
									</div>
									<div class="span6">
										<label class="nomefield">
											<a class="underline linkTodisable" href="javascript:;" onclick="if(!$(this).hasClass('disabled')) {$('indirizzosped').hide();$('indirizzomod').show()}">Cambia indirizzo</a>
											<span class="iconahelp">
												<span class="closed">
													<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="indirizzo">
														<span class="uniqTooltipPos">
															<a href="javascript:;"><img src="/img/ret/ico2or_help2.gif" class="help"></a>
															<span class="uniqTooltipInnerHTML">
																<p>Puoi cambiare indirizzo di spedizione cliccando sul link. La modifica dell'indirizzo  non comporta il cambio in anagrafe.</p>
															</span>
														</span>
													</span>
												</span>
											</span>
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
								<div class="row-fluid"><a href="javascript:;" class="disabled flRight"><span>lorem ipsum</span></a></div>
							</div>
							<div class="row-fluid">
								<span class="nomefield">Modalit&agrave; di invio</span>
								<div class="row-fluid">		
									<div class="span6">
										<label><input type="radio" value="Posta raccomandata" name="spedizione" onclick="$('#spedizioneHidden').hide()">Posta raccomandata<br> </label>
										<span>Gratuita in  6/7 gg lavorativi</span>
									</div>
									<div class="span6">
										<label><input type="radio" value="Corriere" name="spedizione" onclick="$('#spedizioneHidden').show()">Corriere</label>
										<span>Gratuita in 2/3gg lavorativi</span>
									</div>
								</div>
							</div>
							<div id="spedizioneHidden" style="display:none">
								<div class="row-fluid">	
										<div class="tolltipclick span6">
											<label class="nomefield ico">Numero di Telefono:</label>
											<span class="iconahelp">
											<span class="closed">
													<span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="spedizione">
														<span class="uniqTooltipPos">
															<a href="javascript:;"><img src="/img/ret/ico2or_help2.gif" class="help"></a>
															<span class="uniqTooltipInnerHTML">
																<p>Il numero serve al corriere per contattarti in caso di contrattempi nella consegna.</p>
															</span>
														</span>
													</span>
											</span>
											</span>
											<input type="text">
										</div>
									<div class="span6">
										<label class="nomefield">Addebito spese:</label>
										<select><option>XXXXXXXXXX</option><option>XXXXXXXXXX</option></select>
									</div>
								</div>
							</div>
							<div class="row-fluid">	
								<label class="left nomefield">Note:</label>
								<input type="text" placeholder="facoltativo" name="">
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
				 </div>
					 <div class="steprichiesta off">
						 <div class="steprichiestatit">
							<img src="/img/ret/str_tit_tre_off.png" alt="Entra nella Digital Life" />
							<h2 class="richiestaTit">Tutto &egrave; pi&ugrave; veloce con la firma digitale</h2>
							<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
						</div>
						<div class="formGeneric steprichiestacont">
							<div id="contformrichiesta2" style="display:none">
								<?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_325.php");?>
								<br/>
								<?php virtual("/librerie/include/commons/form/form_black_001_priv.html");?>
								 <div class="btnc aButtoncons"><a href="javascript:;" class="nextstep aButton" onclick="stepRichiesta(this,'true');$('contformrichiesta').hide();$('contformrichiestaoutput').show();$('#contformrichiesta2').hide();$('#contformrichiesta2output').show();"><span>invia la richiesta</span></a></div><br class="clear" />
							</div>
							<div id="contformrichiesta2output" style="display: none;">
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
						   <strong class="verde">Prossimi passi per attivare e iniziare a utilizzare il tuo Bancomat:</strong>
						   <br class="clear" /><br/>
						   <div class="boxstepCont">
							<div class="boxstep">
								
								<div class="top"><span class="angololeft"></span><span class="angoloright"></span></div>
								<div class="middle">
								<div class="half text">
									<p class="noPaddbottom"><strong>STAMPA IL CONTRATTO</strong><br/>
										<strong>Firmalo e spedisci insieme alla fotocopia della patente a :</strong>
										<br/>Webank<br/>via Massaua 4,<br/>20146 Milano<br class="clear" />
									</p>
									<ul class="pdfinline nopadd">
										<li><a id="contratto" href="#" class="printDoc">stampa il contratto</a></li>
									</ul>
								</div>
								<div class="text">
									<p class="noPaddbottom">Ti avvisiamo che senza la copia del documento di identit&agrave; valido,  la carta richiesta non sar&agrave; spedita. </p>
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
								<p><strong>ATTIVA LA CARTA</strong><br/>
								Una volta ricevuto il contratto ti invieremo all'indirizzo di posta da te indicato:<br/>
								una busta contenente il Bancomat e le istruzioni per attivarlo.
								</p>
								
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