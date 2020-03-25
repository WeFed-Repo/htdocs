<script type="text/javascript">	
	$(function () {
				$("#dateToMask").mask("99/99/9999");
			});
</script>
<h1>Cartimpronta one</h1>
<ul class="tabGeneric">
	<li><span class="tabBorder"><span class="tabGradient"><a href="">lorem ipsum dolor</a></span></span></li>
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
							<form id="formRichiestaFirma" autocomplete="off">
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
														<input type="text" value="12/12/1900" id="dateToMask">
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
						<?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_323.php");?>
						
						<div class="titform"><h2>Normativa antiriciclaggio</h2></div>
						<div class="boxform">
						<?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_324.php");?>
						</div>
						<div class="btnc aButtoncons" id="btnProsegui2"><a href="javascript:;" class="nextstep first aButton" onclick="$('#btnModifica2').show();$('#btnProsegui2').hide();disableForm(this,'contformrichiesta');stepRichiesta(this);"><span>prosegui</span></a></div>
						<div class="btnc aButtoncons" style="display:none" id="btnModifica2"><a href="javascript:;" class="backstep second modifica" onclick="$('#btnModifica2').hide();$('#btnProsegui2').show();disableForm(this,'contformrichiesta');stepRichiesta(this);"><span>modifica</span></a></div>
						<br class="clear" />
					  </div>
					  <div id="contformrichiestaoutput" style="display:none">
						<p>Cartimpronta ONE &egrave; la carta di credito a zero canone annuale, zero commissioni e con tutti i vantaggi dei circuiti MasterCard e Visa. Ti ricordiamo che l'emissione &egrave; sempre soggetta a valutazione da parte della Banca.</p>
						<?php virtual("/librerie/include/commons/boxeditoriali/box_black_priv_323_output.php");?>
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
					<form id="" class="formGeneric" autocomplete="off">
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
						</div></form></div>
				 </div>	
					<br/>		
							<form action="#" autocomplete="off">
					
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
							<strong>Ho preso visione del Manuale Operativo- condizioni generali e istruzioni uso della Firma Digitale.</strong><br/>
				Potrai attivare la Firma Digitale dopo aver inviato il contratto firmato.  
				
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
								<p><strong>STAMPA IL CONTRATTO DELLA CARTA e il CONTRATTO DI FIRMA DIGITALE.</strong><br/></p>
								<ul class="pdfinline nopadd">
									<li>
											<a onclick="$(this).next().css('visibility','visible')" id="contratto" href="javascript:;" class="printDoc">stampa il contratto</a>
											<img style="visibility:hidden" src="/img/img_or_visited.gif" class="visitedImgStep">
										</li>
								</ul>
							</div>
							<div class="text">
								<p><strong>FIRMA E SPEDISCI </strong> i <strong>contratti</strong> insieme alla  </strong>fotocopia del documento di identit&agrave; </strong> in corso di validit&agrave; che ci hai indicato, a :<br/>Webank<br/>via Massaua 4,<br/>20146 Milano<br /><br class="clear" /><br />
									Dopo aver ricevuto il contratto, potrai attivare la Firma Digitale
								</p>
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
							Una volta ricevuta la carta, attivala chiamando il Numero Verde che trovi indicato nella lettera allegata nella busta di spedizione.
					
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