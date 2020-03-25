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
											<!--<a class="underline" href="javascript:;" onclick="$('#docRichiestaFirma').hide();$('#modDocRichiestaFirma').show();">Lorem ipsum dolor</a>-->
											<a class="underline" href="javascript:;" onclick="openPopOverLayer('layeralert2b', 'floating', 1)">Lorem ipsum dolor</a>
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
														<input type="text" value="XX/XX/XXXX">
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
							<div class="row-fluid">
									<label class="nomefield">Normativa FATCA</label>
									<span class="text nopadd">Per la normativa Fatca, che prevede un accordo bilaterale Italia e Stati Uniti, devi indicare sei hai un indirizzo di corrispondenza estero o diverso da quello primario e se hai una seconda residenza fiscale <a onclick="openPopOverLayer('layeralert2', 'floating', 1)" href="javascript:;">Inserisci qui i dati (singolo)</a> - <a onclick="openPopOverLayer('layeralert2b', 'fixed', 1)" href="javascript:;">Inserisci qui i dati (cointestatario)</a></span>
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
							 <div class="btnc aButtoncons"><a href="javascript:;" class="nextstep aButton" onclick="stepRichiesta(this,'true');$('contformrichiesta').hide();$('contformrichiestaoutput').show();$('#contformrichiesta2').hide();$('#contformrichiesta2output').show();"><span>invia la richiesta</span></a></div>
						<br class="clear" />
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
					   <strong class="verde">Prossimi passi per attivare e iniziare a utilizzare la tua carta:</strong>
					   <br class="clear" /><br/>
					   <div class="boxstepCont">
							<div class="boxstep">
								
								<div class="top"><span class="angololeft"></span><span class="angoloright"></span></div>
								<div class="middle">
								<div class="half text">
								<p class="noPaddbottom"><strong>STAMPA IL CONTRATTO</strong><br/>
									<strong>Firmalo e spedisci insieme alla fotocopia della patente a :</strong><br/>Webank<br/>via Massaua 4,<br/>20146 Milano<br class="clear" />
								</p>
								<ul class="pdfinline nopadd">
									<li><a id="contratto" href="#" class="printDoc">stampa il contratto</a></li>
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
								<p><strong>ATTIVA IL BANCOMAT</strong><br/>
								Una volta ricevuto il contratto ti invieremo all'indirizzo di posta da te indicato:<br/>
								una busta contenente la Carta e le istruzioni per attivarla. 
						
								</p>
								
								</div>
							</div>
								<div class="bottom"><span class="angololeft"></span><span class="angoloright"></span></div>
							</div>
							</div>
						
					   </div><br class="clear" />
					</div>
				</div>
				<div class="stepbottom"></div>
			</div>
		</div>
	</div>
</div>

<div class="layeralert3 ui-draggable" id="layeralert2" style="display: none;">
	<div class="head handle" onmouseover="" style="cursor: move;"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closePopOverLayer('layeralert2')"></div>
	<div class="body">
	<div class="formGeneric">
		<div class="row-fluid">
			<div class="span12">
				<h2 class="colorBank">ADEMPIMENTI NORMATIVA FATCA</h2>
			</div>
		</div>		
		<div class="row-fluid">
			<div class="span12">
				<span>I dati riportati non saranno usati dalla Banca. Sono tutti <strong>facoltativi</strong>.</span>
			</div>
		</div><br><br>
		<div class="row-fluid">
			<div class="span12">
				<h3 class="colorBank">Residenza fiscale (da compilare solo se hai una seconda residenza)</h3>
			</div>
		</div>		
		<div class="row-fluid">
			<div class="span6 no-desktop">
				<label class="nomefield ico">Paese di residenza fiscale</label>
				<span class="iconahelp"><img class="help" src="/img/ret/ico2or_help2.gif"></span><br class="clear">
				<span class="output">Lorem ipsum dolo</span>
			</div>
		
			<div class="span6 no-desktop">
				<label class="nomefield">Altra residenza fiscale (facoltativa)</label>
				<select name="residenzaFiscale_int1" onchange="if($('#residenzaFiscale_int1 option:selected').text().indexOf('STATI UNITI')>= 0) {$('#tin1').show();$('#TIN_int1').focus()}" id="residenzaFiscale_int1"><option value="">Seleziona</option><option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option></select>
			</div>
		</div>
		<script>
			$(function (){
			 $.mask.definitions['_']='[^\'\']'; //definisco tutti i caratteri alfanumerici e simboli della tastiera
				$("#TIN_int1").mask("__-_______", {completed: function(){$("#TIN_int1").val($("#TIN_int1").val().toUpperCase())} });
			})
		</script>
		<div class="row-fluid" id='tin1' style="display:none">
			<div class="span6 no-desktop">
				<label class="nomefield">Taxpayer Identification Number (Tin)</label>
				<input type="text" name="TIN_int1" maxlength="10" value="" id="TIN_int1" style="text-transform:uppercase">
			</div>
		</div>	
		<br><br>
		<div class="row-fluid">
			<div class="span12">
				<h3 class="colorBank">Altro indirizzo di corrispondenza (anche estero)</h3>
			</div>
		</div>		
		<div class="row-fluid">
			<div class="span6 no-desktop">
				<label class="nomefield">Stato</label>
				<select>
					<option>Seleziona</option>
					<option>Lorem</option>
				</select>
			</div>		
			<div class="span6 no-desktop">
				<label class="nomefield">Indirizzo</label>
				<input type="text" placeholder="Es. Viale Monte Bianco 4">
			</div>
		</div>
		<div class="row-fluid">
			<div class="span3 no-desktop">
				<label class="nomefield">Provincia</label>
				<input type="text">
			</div>
			<div class="span6 no-desktop">
				<label class="nomefield">Comune</label>
				<input type="text">
			</div>			
			<div class="span3 no-desktop">
				<label class="nomefield">CAP</label>
				<input type="text">
			</div>
		</div>
		<br><br>		
		<div class="fooform">
			<div class="fooformleft">
				<div><a href="javascript:;" class="btnformleft" title="lorem" id="" onclick="closePopOverLayer('layeralert2');"><img src="/img/ret/btn_left_bi.gif" alt=""><span>annulla</span><img src="/img/ret/btn_right_bi.gif" alt=""></a></div>
			</div>
			<div class="fooformright">
				<div><a href="javascript:;" class="btnformright nextstep first" title="lorem" id="" onclick="closePopOverLayer('layeralert2');disableForm($('#btnProsegui'),'contformrichiesta');$('#btnProsegui1').hide();$('#btnModifica1').show();stepRichiesta($('#btnProsegui'));"><img src="/img/ret/btn_left_ar.gif" alt=""><span>prosegui</span><img src="/img/ret/btn_right_ar.gif" alt=""></a></div>
			</div>
		</div><br class="clear">
		</div>
	</div>
	<div class="foot"></div>
</div>

<!-- PARAGRAFI ESPANDIBILI -->

		<div class="layeralert3 ui-draggable" id="layeralert2b" style="display: none;">
			<div class="head handle" onmouseover="" style="cursor: move;"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closePopOverLayer('layeralert2b')"></div>
			<div class="body">
			<div class="formGeneric">
				<div class="row-fluid">
					<div class="span12">
						<h2 class="colorBank">ADEMPIMENTI NORMATIVA FATCA</h2>
					</div>
				</div>		
				<div class="row-fluid">
					<div class="span12">
						<span>I dati riportati non saranno usati dalla Banca. Sono tutti <strong>facoltativi</strong>.</span>
					</div>
				</div><br><br>
				
				<div class="expandables">
					<div class="expandable">
						<h4><a href="javascript:;" onclick="javascript: expandArgument (this);"><img src="/wscmn/img/ico1gr_indaperto.gif"></a>PRIMO INTESTATARIO</h4>
						<div>
							<div class="row-fluid">
								<div class="span12">
									<h3 class="colorBank">Residenza fiscale (da compilare solo se hai una seconda residenza)</h3>
								</div>
							</div>		
							<div class="row-fluid">
								<div class="span6 no-desktop">
									<label class="nomefield ico">Paese di residenza fiscale</label>
									<span class="iconahelp" data-tooltip="Lorem ipsum dolor sit amet consectetur adipiscing elit"><img class="help" src="/img/ret/ico2or_help2.gif"></span><br class="clear">
									<span class="output">ITALIA</span>
								</div>
							
								<div class="span6 no-desktop">
									<label class="nomefield">Altra residenza fiscale (facoltativa)</label>
									<select name="residenzaFiscale_int2" onchange="if($('#residenzaFiscale_int2 option:selected').text().indexOf('STATI UNITI')>= 0) {$('#tin2').show();$('#TIN_int2').focus()}" id="residenzaFiscale_int2"><option value="">Seleziona</option><option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option></select>
								</div>
							</div>
							<script>
								$(function (){
								 $.mask.definitions['_']='[^\'\']'; //definisco tutti i caratteri alfanumerici e simboli della tastiera
									$("#TIN_int2").mask("__-_______", {completed: function(){$("#TIN_int2").val($("#TIN_int2").val().toUpperCase())} });
								})
							</script>
							<div class="row-fluid" id='tin2' style="display:none">
								<div class="span6 no-desktop">
									<label class="nomefield">Taxpayer Identification Number (Tin)</label>
									<input type="text" name="TIN_int2" maxlength="10" value="" id="TIN_int2" style="text-transform:uppercase">
								</div>
							</div>	
							<br><br>
							<div class="row-fluid">
								<div class="span12">
									<h3 class="colorBank">Altro indirizzo di corrispondenza (anche estero)</h3>
								</div>
							</div>		
							<div class="row-fluid">
								<div class="span6 no-desktop">
									<label class="nomefield">Stato</label>
									<select>
										<option>Seleziona</option>
										<option>Lorem</option>
									</select>
								</div>		
								<div class="span6 no-desktop">
									<label class="nomefield">Indirizzo</label>
									<input type="text" placeholder="Es. Viale Monte Bianco 4">
								</div>
							</div>
							<div class="row-fluid">
								<div class="span3 no-desktop">
									<label class="nomefield">Provincia</label>
									<input type="text">
								</div>
								<div class="span6 no-desktop">
									<label class="nomefield">Comune</label>
									<input type="text">
								</div>			
								<div class="span3 no-desktop">
									<label class="nomefield">CAP</label>
									<input type="text">
								</div>
							</div>
						</div>	
					</div><br>
					<div class="filettoGenericoOrizzontale02"></div><br>
					<div class="expandable">
						<h4><a href="javascript:;" onclick="javascript: expandArgument (this);"><img src="/wscmn/img/ico1gr_indchiuso.gif"></a>SECONDO INTESTATARIO</h4>
						<div style="display:none;">
							<div class="row-fluid">
								<div class="span12">
									<h3 class="colorBank">Residenza fiscale (da compilare solo se hai una seconda residenza)</h3>
								</div>
							</div>		
							<div class="row-fluid">
								<div class="span6 no-desktop">
									<label class="nomefield ico">Paese di residenza fiscale</label>
									<span class="iconahelp" data-tooltip="Lorem ipsum dolor sit amet consectetur adipiscing elit"><img class="help" src="/img/ret/ico2or_help2.gif"></span><br class="clear">
									<span class="output">ITALIA</span>
								</div>
							
								<div class="span6 no-desktop">
									<label class="nomefield">Altra residenza fiscale (facoltativa)</label>
									<select name="residenzaFiscale_int3" onchange="if($('#residenzaFiscale_int3 option:selected').text().indexOf('STATI UNITI')>= 0) {$('#tin3').show();$('#TIN_int3').focus()}" id="residenzaFiscale_int3"><option value="">Seleziona</option><option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option></select>
								</div>
							</div>
							<script>
								$(function (){
								 $.mask.definitions['_']='[^\'\']'; //definisco tutti i caratteri alfanumerici e simboli della tastiera
									$("#TIN_int3").mask("__-_______", {completed: function(){$("#TIN_int3").val($("#TIN_int3").val().toUpperCase())} });
								})
							</script>
							<div class="row-fluid" id='tin3' style="display:none">
								<div class="span6 no-desktop">
									<label class="nomefield">Taxpayer Identification Number (Tin)</label>
									<input type="text" name="TIN_int3" maxlength="10" value="" id="TIN_int3" style="text-transform:uppercase">
								</div>
							</div>	
							<br><br>
							<div class="row-fluid">
								<div class="span12">
									<h3 class="colorBank">Altro indirizzo di corrispondenza (anche estero)</h3>
								</div>
							</div>		
							<div class="row-fluid">
								<div class="span6 no-desktop">
									<label class="nomefield">Stato</label>
									<select>
										<option>Seleziona</option>
										<option>Lorem</option>
									</select>
								</div>		
								<div class="span6 no-desktop">
									<label class="nomefield">Indirizzo</label>
									<input type="text" placeholder="Es. Viale Monte Bianco 4">
								</div>
							</div>
							<div class="row-fluid">
								<div class="span3 no-desktop">
									<label class="nomefield">Provincia</label>
									<input type="text">
								</div>
								<div class="span6 no-desktop">
									<label class="nomefield">Comune</label>
									<input type="text">
								</div>			
								<div class="span3 no-desktop">
									<label class="nomefield">CAP</label>
									<input type="text">
								</div>
							</div>
						</div>	
					</div>
					<div class="filettoGenericoOrizzontale02"></div><br>
					<div class="expandable">
						<h4><a href="javascript:;" onclick="javascript: expandArgument (this);"><img src="/wscmn/img/ico1gr_indchiuso.gif"></a>SECONDO INTESTATARIO</h4>
						<div style="display:none;">
							<div class="row-fluid">
								<div class="span12">
									<h3 class="colorBank">Residenza fiscale (da compilare solo se hai una seconda residenza)</h3>
								</div>
							</div>		
							<div class="row-fluid">
								<div class="span6 no-desktop">
									<label class="nomefield ico">Paese di residenza fiscale</label>
									<span class="iconahelp" data-tooltip="Lorem ipsum dolor sit amet consectetur adipiscing elit"><img class="help" src="/img/ret/ico2or_help2.gif"></span><br class="clear">
									<span class="output">ITALIA</span>
								</div>
							
								<div class="span6 no-desktop">
									<label class="nomefield">Altra residenza fiscale (facoltativa)</label>
									<select name="residenzaFiscale_int3" onchange="if($('#residenzaFiscale_int3 option:selected').text().indexOf('STATI UNITI')>= 0) {$('#tin3').show();$('#TIN_int3').focus()}" id="residenzaFiscale_int3"><option value="">Seleziona</option><option value="STATI UNITI D'AMERICA">STATI UNITI D'AMERICA</option></select>
								</div>
							</div>
							<script>
								$(function (){
								 $.mask.definitions['_']='[^\'\']'; //definisco tutti i caratteri alfanumerici e simboli della tastiera
									$("#TIN_int3").mask("__-_______", {completed: function(){$("#TIN_int3").val($("#TIN_int3").val().toUpperCase())} });
								})
							</script>
							<div class="row-fluid" id='tin3' style="display:none">
								<div class="span6 no-desktop">
									<label class="nomefield">Taxpayer Identification Number (Tin)</label>
									<input type="text" name="TIN_int3" maxlength="10" value="" id="TIN_int3" style="text-transform:uppercase">
								</div>
							</div>	
							<br><br>
							<div class="row-fluid">
								<div class="span12">
									<h3 class="colorBank">Altro indirizzo di corrispondenza (anche estero)</h3>
								</div>
							</div>		
							<div class="row-fluid">
								<div class="span6 no-desktop">
									<label class="nomefield">Stato</label>
									<select>
										<option>Seleziona</option>
										<option>Lorem</option>
									</select>
								</div>		
								<div class="span6 no-desktop">
									<label class="nomefield">Indirizzo</label>
									<input type="text" placeholder="Es. Viale Monte Bianco 4">
								</div>
							</div>
							<div class="row-fluid">
								<div class="span3 no-desktop">
									<label class="nomefield">Provincia</label>
									<input type="text">
								</div>
								<div class="span6 no-desktop">
									<label class="nomefield">Comune</label>
									<input type="text">
								</div>			
								<div class="span3 no-desktop">
									<label class="nomefield">CAP</label>
									<input type="text">
								</div>
							</div>
						</div>	
					</div>
				</div>
					<br><br>		
				<div class="fooform">
					<div class="fooformleft">
						<div><a href="javascript:;" class="btnformleft" title="lorem" id="" onclick="closePopOverLayer('layeralert2b');"><img src="/img/ret/btn_left_bi.gif" alt=""><span>annulla</span><img src="/img/ret/btn_right_bi.gif" alt=""></a></div>
					</div>
					<div class="fooformright">
						<div><a href="javascript:;" class="btnformright nextstep first" title="lorem" id="" onclick="closePopOverLayer('layeralert2b');disableForm($('#btnProsegui'),'contformrichiesta');$('#btnProsegui1').hide();$('#btnModifica1').show();stepRichiesta($('#btnProsegui'));"><img src="/img/ret/btn_left_ar.gif" alt=""><span>prosegui</span><img src="/img/ret/btn_right_ar.gif" alt=""></a></div>
					</div>
				</div><br class="clear">
				</div>
			</div>
			<div class="foot"></div>
		</div>
		
	