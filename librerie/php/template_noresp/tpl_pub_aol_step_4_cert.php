<div id="aolcontainer">
<!-- CONTENITORE PRINCIPALE -->
	<div id="aolleft">
		<form>
		<!--BLOCCO PER LA CERTIFICAZIONE -->
		<div class="aolblock">
			<img src="/img/tit_codici_accesso_speed.gif"  alt="Codici di accesso speed"  class="margneg"/>
			<div class="aolblockwrapper">
				<p>Vuoi <strong>ricevere</strong> i codici di accesso al tuo conto <strong>senza attendere i tempi</strong> delle spedizioni postali?
				Confermaci il numero di cellulare e la email; ti invieremo <strong>i codici di accesso via mail ed sms</strong> subito dopo l'apertura del conto, che avverr&agrave; dopo che ci hai inviato il contratto firmato. 
				</p>
				<div class="boxLight">
					<img src="/img/str_bgtop_box_light.gif" />
					<div class="boxLightMiddle">
						
						<strong>MARIO GIORDANO</strong><br />
						<strong>MARIO ROSSI</strong>
						<p>assicuratevi di avere a disposizione il cellulare e la mail: vi invieremo un <strong>codice di controllo</strong> per confermare i dati di ciascun intestatario.<br /> Se non potete farlo ora, &egrave; possibile <a href="#">completare pi&ugrave; tardi</a> la compilazione della richiesta.</p>
					</div>
					<img src="/img/str_bgbottom_box_light.gif" />
				</div>
				<br class="clear" />
				<div class="boxalert post" id="boxNonUni" style="display:none">
					<div class="top"></div>
						<div class="middle">
							<span class="imgCont"></span>
							<p>Poich&egrave; il tuo numero di cellulare risulta gi&agrave; presente nei nostri sistemi associato ad un codice fiscale diverso da quello indicato, <strong>spediremo a ciascun nuovo intestatario i codici di accesso via posta.</strong></p>
						</div>
					<div class="bottom"></div>
				</div>
				
				<br class="clear" />
				
				<!-- ESEMPIO DI SETTING ERRORI: NON COPIARE -->
				<script type="text/javascript">
					<!-- ESEMPIO DI NUMERO TELEFONO NON UNIVOCO: NON COPIARE -->
					uni = false;
					function checkUni()
					{
					if(uni){riceviCodici($('riceviCellBtn'),'step2Cell');setClass();disableForm('leftCell');return 0;}
					openPopOverLayer('alertNonUni', 'floating');
					uni = true;
					}
					function riceviCodici(btn,id) 
					{
						$(btn).closest('div.hiddenCert').hide();
						$(id).show();
					}	
						
					function setClass()	
					{	
						
						var campiLeft = $('#certificazioniAol fieldset.left.lastrow');
						campiLeft.attr('class', 'left lastrow marginR');//aggiunge più padding a destra
					}	
					
					function unSetClass()
					{	
						var campiLeft = $('#certificazioniAol fieldset.left.lastrow');
						campiLeft.attr('class', 'left lastrow');//aggiunge più padding a destra
						
					}
					function disableForm(id){
						var inputEl = $('#'+ id).find('input,select');
						if($(!'inputEl:disabled')) {inputEl.attr('disabled','disabled');inputEl.attr('class','disabled')}else{inputEl.('disabled','');inputEl.cattr('class','')} //disabilita i campi
					}	
						
						//Esempio di setting di alcuni errori
						errori = true;
						var counter=0;
						function esempioErrori()
						{
							if (!errori)
							{
							riceviCodici($('confermaBtn'));
							return 0;
							}
							if(errori)
							{
							counter++;
							if (counter<5){setViewElement('codiceCell');setError('codiceCell','Codice errato');}
							if (counter==5){unSetClass();riceviCodici($('confermaBtn'),'step3Cellko');disableForm('leftMail');$('riceviMailBtn').hide();$('riceviMailBtnDis').show()}
							//Per togliere gli errori utilizzare unsetError con gli stessi parametri (id del campo)
							}
						}
				
					<!-- FINE ESEMPIO DI SETTING ERRORI: NON COPIARE -->
					<!-- la funzione seguente è solo un esempio per mostrare i diversi errori -->
					function esempiosubmit()
					{
					if(!($('step3Cell').style.display=='none') && $('rightMail').style.display=='block'){setViewElement('riceviMailBtn');setError('riceviMailBtn', 'richiedi codice')}
				    if(!($('step3Cell').style.display=='none') && !($('step3Mail').style.display=='none')){setViewElement('nextcert');setError('nextcert', 'Se vuoi ricevere i codici di accesso speed devi confermare i dati di tutti gli intestatari')}
					 if(($('step3Cell').style.display=='none') && ($('step3Mail').style.display=='none')){openPopOverLayer('alertNoCert', 'floating');}
					}
				</script>
				<!-- blocco primo intestatario-->
				<div id="certificazioniAol" class="certificazioniContainer">
					<strong>MARIO GIORDANO</strong>
					<br class="clear" />
					
					<div class="intro"><img src="/img/img_or_smartphone.gif"  alt="Verifica e conferma il tuo numero di cellulare"/><span>Verifica e conferma il tuo numero di cellulare</span></div>
					<br class="clear" />
					<div id="numeroCellulare" class="datatocertificate">
						<fieldset class="left lastrow" id="leftCell">
							<span class="label">Numero cellulare</span>
							<div id="tuttaLaData">
								<div class="fieldblock">
									<input type="text" style="width:32px" value="333" id="cellPre">
									
								</div>
								<div class="fieldblock">
									<input type="text" style="width:69px" value="333333" id="cellNum">
								</div>
								<div class="fieldblock">
									<span class="errorIE">
										<select id="selectOperatore" style="width:120px" value="TIM" id="operatore">
											<option value="" selected="">operatore</option>
											<option value="1">Lorem ipsum</option>
										</select>
									</span>
								</div>
							</div>
						</fieldset>
						<div class="hiddenCert" style="display:block" id="rightCell">
							<fieldset class="right lastrow">
								<a id="riceviCellBtn" onclick="riceviCodici(this,'step2Cell');setClass();disableForm('leftCell')" title="ricevi codice via sms" href="javascript:;" class="greenbutton" id="riceviCellBtn"><span>ricevi codice via sms</span></a>
								
								<a title="ricevi codice via sms" href="javascript:;" class="disabledbutton" id="riceviCellBtnDis" style="display:none"><span>ricevi codice via sms</span></a>
							</fieldset>
						</div>
						
						<!-- step invio codice per cellulare -->
						<div style="display:none" class="hiddenCert" id="step2Cell">
							<fieldset class="right lastrow">
								<span class="label">Inserisci codice (inviato al numero di cellulare indicato)</span>
								<br class="clear">
								<input type="text" id="codiceCell" value="">
								<span class="errortext"></span>
								
							</fieldset>
							<fieldset class="right lastrow error"><div class="conferma"><a id="confermaBtn" class="greenbutton marginL" href="javascript:;" title="conferma" onclick="unSetClass();riceviCodici(this,'step3Cell')"><span>conferma</span></a><span class="errortext">lorem ipsum</span></div></fieldset>
							
							<br class="clear">
							<div class="msgbottom"><img src="/img/ico2inf_attenzione.gif" alt=""/>
								<div>Il codice non arriva? Controlla il numero di cellulare inserito e <a href="">richiedi qui un nuovo codice</a>.<br />
								In alternativa puoi:
								<ul><li>proseguire nella richiesta <a href="javascript:;" onclick="riceviCodici(this,'step3Cellpost');disableForm('leftMail');$('riceviMailBtn').hide();$('riceviMailBtnDis').show()">saltando questo passaggio</a> (ti invieremo i codici di accesso via posta)</li>
								<li><a href="javascript:;" onclick="disableForm('leftCell');riceviCodici(this,'rightCell')">modificare</a> il numero di cellulare</li>
								</ul>
								</div>
							</div>
						</div>
						<!-- FINE step invio codice per cellulare -->
						
						<!-- step inseriemnto andato a buon fine -->
						<div class="hiddenCert" style="display:none;" id="step3Cell">
							<fieldset class="right lastrow">
								<div class="boxalert posi">
									<div class="top"></div>
									<div class="middle">
										<span class="imgCont"></span>
										<strong>Hai confermato il tuo numero di cellulare.</strong>
									</div>
									<div class="bottom"></div>
								</div>
							 </fieldset>
						 </div>
						  <!-- FINE step inseriemnto andato a buon fine -->
						
						<div class="hiddenCert" style="display:none;" id="step3Cellko">
							<fieldset class="right lastrow" id="leftCell">
								<div class="boxalert nega">
									<div class="top"></div>
									<div class="middle">
										<span class="imgCont"></span>
										<strong>Non &egrave; stato possibile confermare il tuo numero di cellulare.</strong><br class="clear"/>
										<p>Spediremo a tutti gli intestatari i codici di accesso via posta, dopo l'apertura del conto.</p>
									</div>
									<div class="bottom"></div>
								</div>
							 </fieldset>
						 </div>
						<div class="hiddenCert" style="display:none;" id="step3Cellpost">
							<fieldset class="right lastrow" id="">
								<div class="boxalert post">
									<div class="top"></div>
									<div class="middle">
										<span class="imgCont"></span>
										<strong>Hai deciso di non confermare il tuo numero di cellulare.</strong><br class="clear"/>
										<p>Spediremo a tutti gli intestatari i codici di accesso via posta, dopo l'apertura del conto.</p>
									</div>
									<div class="bottom"></div>
								</div>
							 </fieldset>
						 </div>
					</div>
					<br class="clear" />
					<div class="intro"><img src="/img/img_or_chiocciola.gif"  alt="Verifica e conferma la tua mail"/><span>Verifica e conferma la tua mail</span></div>
					<br class="clear" />
					<div id="indirizzoMail" class="datatocertificate">
						
						<fieldset class="left lastrow" id="leftMail">
							<span class="label">Email</span>
							<input type="text" value="esempio@libero.it">
						</fieldset>
						<div class="hiddenCert" id="rightMail" style="display:block">
							<fieldset class="right lastrow">
								<a id="riceviMailBtn" onclick="riceviCodici(this,'step2Mail');setClass();disableForm('leftMail')" title="ricevi codice via mail" href="javascript:;" class="greenbutton"><span>ricevi codice via mail</span></a>
								<a style="display:none" id="riceviMailBtnDis" class="disabledbutton" href="javascript:;" title="ricevi codice via mail"><span>ricevi codice via mail</span></a>
								<span class="errortext">Lorem</span>
							</fieldset>
						</div>
						<!-- step invio codice per mail -->
						<div class="hiddenCert" style="display:none;" id="step2Mail">
							<fieldset class="right lastrow">
								<span class="label">Inserisci codice(inviato alla mail indicata)</span>
								<br class="clear" />
								<input type="text" value="" id="codiceMail">
								<!--<a onclick="esempioErrori()" title="conferma" href="javascript:;" class="greenbutton" id="confermaBtn2"><span>conferma</span></a>-->
								
							</fieldset>
							<fieldset class="right lastrow"><div class="conferma"><a onclick="unSetClass();riceviCodici(this,'step3Mail'); $('btnNextIntestatario').show()" href="javascript:;" class="greenbutton marginL"><span>conferma</span></a><span class="errortext">Lorem</span></div></fieldset>
							<br class="clear">
							<div class="msgbottom"><img src="/img/ico2inf_attenzione.gif" alt=""/>
								<div>Il codice non arriva? Controlla l'indirizzo email inserito e <a href="">richiedi qui un nuovo codice</a>.<br />
								In alternativa puoi:
								<ul><li>proseguire nella richiesta <a href="javascript:;" onclick="riceviCodici(this,'step3Mailpost');disableForm('leftCell');$('riceviCellBtn').hide();$('riceviCellBtnDis').show()">saltando questo passaggio</a> (ti invieremo i codici di accesso via posta)</li>
								<li><a href="javascript:;" onclick="disableForm('leftMail');riceviCodici(this,'rightMail')">modificare</a> il numero di cellulare</li>
								</ul>
								</div>
							</div>
						</div>
						<!-- FINE step invio codice per mail -->
						<div class="hiddenCert" style="display:none;" id="step3Mail">
							<fieldset class="right lastrow">
								<div class="boxalert posi">
									<div class="top"></div>
									<div class="middle">
										<span class="imgCont"></span>
										<strong>Hai confermato il tuo indirizzo mail.</strong>
									</div>
									<div class="bottom"></div>
								</div>
							 </fieldset>
						 </div>
							<div class="hiddenCert" style="display:none;" id="step3Mailpost">
								<fieldset class="right lastrow">
									<div class="boxalert post">
										<div class="top"></div>
										<div class="middle">
											<span class="imgCont"></span>
											<strong>Hai deciso di non confermare il tuo numero di cellulare.</strong><br class="clear"/>
											<p>Spediremo a tutti gli intestatari i codici di accesso via posta, dopo l'apertura del conto.</p>
										</div>
										<div class="bottom"></div>
									</div>
								 </fieldset>
							</div>
								<div class="hiddenCert" style="display:none;" id="step3Mailko">
									<fieldset class="right lastrow" id="leftCell">
										<div class="boxalert nega">
											<div class="top"></div>
											<div class="middle">
												<span class="imgCont"></span>
												<strong>Non &egrave; stato possibile confermare il tuo indirizzo email.</strong><br class="clear"/>
												<p>Spediremo a tutti gli intestatari i codici di accesso via posta, dopo l'apertura del conto.</p>
											</div>
											<div class="bottom"></div>
										</div>
									 </fieldset>
						 </div>
					</div>
					<div class="buttonright" id="btnNextIntestatario" style="display:none">
					<fieldset class="allrow">
						<a class="greenbutton" href="javascript:;" title="conferma i dati dell'intestatario 2" onclick="$('.certificazioniContainer:first').remove();$('certificazioniAol').show()" id="nextcert"><span>conferma i dati dell'intestatario 2</span></a>
							<br class="clear" />
							<span class="errortext"></span>
					</fieldset>
					</div>
				</div>
				
				<!-- FINE blocco primo intestatario-->
				
				
				
				<!-- blocco secondo intestatario-->
				<div id="certificazioniAol" class="certificazioniContainer" style="display:none">
					<strong>SECONDO INTESTATARIO</strong>
					<br class="clear" />
					
					<div class="intro"><img src="/img/img_or_smartphone.gif"  alt="Verifica e conferma il tuo numero di cellulare"/><span>Verifica e conferma il tuo numero di cellulare</span></div>
					<br class="clear" />
					<div id="numeroCellulare" class="datatocertificate">
						<fieldset class="left lastrow" id="leftCell">
							<span class="label">Numero cellulare</span>
							<div id="tuttaLaData">
								<div class="fieldblock">
									<input type="text" style="width:32px" value="4444" id="cellPre">
									
								</div>
								<div class="fieldblock">
									<input type="text" style="width:69px" value="44444" id="cellNum">
								</div>
								<div class="fieldblock">
									<span class="errorIE">
										<select id="selectOperatore" style="width:120px" value="TIM" id="operatore">
											<option value="" selected="">operatore</option>
											<option value="1">Lorem ipsum</option>
										</select>
									</span>
								</div>
							</div>
						</fieldset>
						<div class="hiddenCert" style="display:block" id="rightCell">
							<fieldset class="right lastrow">
								<a id="riceviCellBtn" onclick="checkUni()" title="ricevi codice via sms" href="javascript:;" class="greenbutton" id="riceviCellBtn"><span>ricevi codice via sms</span></a>
								<a title="ricevi codice via sms" href="javascript:;" class="disabledbutton" id="riceviCellBtnDis" style="display:none"><span>ricevi codice via sms</span></a>
							</fieldset>
						</div>
						
						<!-- step invio codice per cellulare -->
						<div style="display:none" class="hiddenCert" id="step2Cell">
							<fieldset class="right lastrow">
								<span class="label">Inserisci codice (inviato al numero di cellulare indicato)</span>
								<br class="clear">
								<input type="text" id="codiceCell" value="">
								<span class="errortext"></span>
								<!--<a id="confermaBtn" class="greenbutton marginL" href="javascript:;" title="conferma" onclick="unSetClass();riceviCodici(this,'step3Cell')"><span>conferma</span></a>-->
								<a id="confermaBtn" class="greenbutton marginL" href="javascript:;" title="conferma" onclick="esempioErrori()"><span>conferma</span></a>
								<br class="clear">
							</fieldset>
							<br class="clear">
							<div class="msgbottom"><img src="/img/ico2inf_attenzione.gif" alt=""/>
								<div>Il codice non arriva? Controlla il numero di cellulare inserito e <a href="">richiedi qui un nuovo codice</a>.<br />
								In alternativa puoi:
								<ul><li>proseguire nella richiesta <a href="javascript:;" onclick="riceviCodici(this,'step3Cellpost');disableForm('leftMail');$('riceviMailBtn').hide();$('riceviMailBtnDis').show()">saltando questo passaggio</a> (ti invieremo i codici di accesso via posta)</li>
								<li><a href="javascript:;" onclick="disableForm('leftCell');riceviCodici(this,'rightCell')">modificare</a> il numero di cellulare</li>
								</ul>
								</div>
							</div>
						</div>
						<!-- FINE step invio codice per cellulare -->
						
						<!-- step inseriemnto andato a buon fine -->
						<div class="hiddenCert" style="display:none;" id="step3Cell">
							<fieldset class="right lastrow">
								<div class="boxalert posi">
									<div class="top"></div>
									<div class="middle">
										<span class="imgCont"></span>
										<strong>Hai confermato il tuo numero di cellulare.</strong>
									</div>
									<div class="bottom"></div>
								</div>
							 </fieldset>
						 </div>
						  <!-- FINE step inseriemnto andato a buon fine -->
						
						<div class="hiddenCert" style="display:none;" id="step3Cellko">
						<fieldset class="right lastrow" id="leftCell">
							<div class="boxalert nega">
								<div class="top"></div>
								<div class="middle">
									<span class="imgCont"></span>
									<strong>Non &egrave; stato possibile confermare il tuo numero di cellulare.</strong><br class="clear"/>
									<p>Spediremo a tutti gli intestatari i codici di accesso via posta, dopo l'apertura del conto.</p>
								</div>
								<div class="bottom"></div>
							</div>
						 </fieldset>
						 </div>
						<div class="hiddenCert" style="display:none;" id="step3Cellpost">
							<fieldset class="right lastrow" id="">
								<div class="boxalert post">
									<div class="top"></div>
									<div class="middle">
										<span class="imgCont"></span>
										<strong>Hai deciso di non confermare il tuo numero di cellulare.</strong><br class="clear"/>
										<p>Spediremo a tutti gli intestatari i codici di accesso via posta, dopo l'apertura del conto.</p>
									</div>
									<div class="bottom"></div>
								</div>
							 </fieldset>
						 </div>
					</div>
					<br class="clear" />
					<div class="intro"><img src="/img/img_or_chiocciola.gif"  alt="Verifica e conferma la tua mail"/><span>Verifica e conferma la tua mail</span></div>
					<br class="clear" />
					<div id="indirizzoMail" class="datatocertificate">
						
						<fieldset class="left lastrow" id="leftMail">
							<span class="label">Email</span>
							<input type="text" value="esempio@libero.it">
						</fieldset>
						<div class="hiddenCert" id="rightMail" style="display:block">
							<fieldset class="right lastrow">
								<a id="riceviMailBtn" onclick="riceviCodici(this,'step2Mail');setClass();disableForm('leftMail')" title="ricevi codice via mail" href="javascript:;" class="greenbutton"><span>ricevi codice via mail</span></a>
								<a style="display:none" id="riceviMailBtnDis" class="disabledbutton" href="javascript:;" title="ricevi codice via mail"><span>ricevi codice via mail</span></a>
								<span class="errortext">Lorem</span>
							</fieldset>
						</div>
						<!-- step invio codice per mail -->
						<div class="hiddenCert" style="display:none;" id="step2Mail">
							<fieldset class="right lastrow">
								<span class="label">Inserisci codice(inviato alla mail indicata)</span>
								<br class="clear" />
								<input type="text" value="" id="codiceMail">
								<!--<a onclick="esempioErrori()" title="conferma" href="javascript:;" class="greenbutton" id="confermaBtn2"><span>conferma</span></a>-->
								<a onclick="unSetClass();riceviCodici(this,'step3Mail'); $('btnNextIntestatario').show()" href="javascript:;" class="greenbutton marginL"><span>conferma</span></a>
								<br class="clear" />
							</fieldset>
							<br class="clear">
							<div class="msgbottom"><img src="/img/ico2inf_attenzione.gif" alt=""/>
								<div>Il codice non arriva? Controlla l'indirizzo email inserito e <a href="">richiedi qui un nuovo codice</a>.<br />
								In alternativa puoi:
								<ul><li>proseguire nella richiesta <a href="javascript:;" onclick="riceviCodici(this,'step3Mailpost');disableForm('leftCell');$('riceviCellBtn').hide();$('riceviCellBtnDis').show()">saltando questo passaggio</a> (ti invieremo i codici di accesso via posta)</li>
								<li><a href="javascript:;" onclick="disableForm('leftMail');riceviCodici(this,'rightMail')">modificare</a> il numero di cellulare</li>
								</ul>
								</div>
							</div>
						</div>
						<!-- FINE step invio codice per mail -->
						<div class="hiddenCert" style="display:none;" id="step3Mail">
							<fieldset class="right lastrow">
								<div class="boxalert posi">
									<div class="top"></div>
									<div class="middle">
										<span class="imgCont"></span>
										<strong>Hai confermato il tuo indirizzo mail.</strong>
									</div>
									<div class="bottom"></div>
								</div>
							 </fieldset>
						 </div>
							<div class="hiddenCert" style="display:none;" id="step3Mailpost">
								<fieldset class="right lastrow">
									<div class="boxalert post">
										<div class="top"></div>
										<div class="middle">
											<span class="imgCont"></span>
											<strong>Hai deciso di non confermare il tuo numero di cellulare.</strong><br class="clear"/>
											<p>Spediremo a tutti gli intestatari i codici di accesso via posta, dopo l'apertura del conto.</p>
										</div>
										<div class="bottom"></div>
									</div>
								 </fieldset>
							</div>
								<div class="hiddenCert" style="display:none;" id="step3Mailko">
									<fieldset class="right lastrow" id="leftCell">
										<div class="boxalert nega">
											<div class="top"></div>
											<div class="middle">
												<span class="imgCont"></span>
												<strong>Non &egrave; stato possibile confermare il tuo indirizzo email.</strong><br class="clear"/>
												<p>Spediremo a tutti gli intestatari i codici di accesso via posta, dopo l'apertura del conto.</p>
											</div>
											<div class="bottom"></div>
										</div>
									 </fieldset>
						 </div>
					</div>
					<div class="buttonright" id="btnNextIntestatario" style="display:none">
						<a class="greenbutton" href="javascript:;" title="conferma i dati dell'intestatario 2" onclick="" id="riceviCellBtn"><span>conferma i dati dell'intestatario 2</span></a>
					</div>
				</div>
				
				<!-- FINE blocco secondo intestatario-->
			</div>
		</div>
		<!--BLOCCO PER LA CERTIFICAZIONE -->
		<a href="javascript:;" onclick="javascript:aolAccOpenAll(this);" class="allAccOpener">Apri tutti</a>
		
		<!-- BLOCCO DATI GENERALI -->
		<div class="aolAcc">
			<div class="aolAccTop">
				<a class="aolAccTitle" id="datiGenerali" href="javascript:;" title="Espandi" onclick="switchExp(this,true);">
					<span class="titoloAcc">dati generali</span>
					<span class="accButt"> </span>
					<span class="errortext"></span>
				</a>
			</div>
			<div class="aolAccContent">
				<div class="aolblock ">
					<h3>Intestazione conto</h3>
					<div class="aolblockwrapper">
					<div class="outputblock">
						<fieldset class="output">
							<span class="label">Numero intestatari: <span class="output">2</span></span>
						</fieldset>
					</div>
					<h3>Dati anagrafici intestatario</h3>
					<div class="outputblock">
						<fieldset class="output">
							<span class="label">Nome</span>
							<span class="output">Mario Lorem</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Cognome</span>
							<span class="output">Ipsum dolor sit</span>
						</fieldset>
						<fieldset class="output" style="width:200px">
							<span class="label">Data di nascita</span>
							<span class="output">07/12/1978</span>
						</fieldset>
						<fieldset class="output" style="width:87px">
							<span class="label">Sesso</span>
							<span class="output">M</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Codice fiscale</span>
							<span class="output">ZZZRIR78T07C523E</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Email</span>
							<span class="output">mario.mario@webank.it</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Numero di cellulare</span>
							<span class="output">333/9928323</span>
						</fieldset>
					</div>
					<h3>Codici promozioni e convenzioni</h3>
					<div class="outputblock">
						<fieldset class="output">
							<span class="label">Codice promozione</span>
							<span class="output">CV9812373123</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Codice presentatore</span>
							<span class="output">CV9812373123</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Codice promotore</span>
							<span class="output">CV9812373123</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Nome e cognome promotore</span>
							<span class="output">Lorem dolor</span>
						</fieldset>
					</div>
					<h3>Adempimenti per normativa antiriciclaggio</h3>
					<div class="outputblock">
						<fieldset class="output">
							<span class="label">Utilizzo del conto</span>
							<span class="output">CV9812373123</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Titolare effettivo</span>
							<span class="output">Si</span>
						</fieldset>
					</div>
					<div class="filettobutton">
						<a title="modifica i dati" href="/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_0.php" class="greenbutton"><span>modifica i dati</span></a>
					</div>
					</div>
					<img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
				</div>
			
			</div>
		</div>
		<!-- BLOCCO DATI GENERALI -->
		
		<!-- BLOCCO PRIMO INTESTATARIO -->
		<div class="aolAcc">
			<div class="aolAccTop">
				<a class="aolAccTitle" id="intestatario1" href="javascript:;" title="Espandi" onclick="switchExp(this,true);">
					<span class="titoloAcc">Completa i tuoi dati - Lorem ipsum dolor sit am...</span>
					<span class="accButt"> </span>
					<span class="errortext"></span>
				</a>
			</div>
			<div class="aolAccContent">
			<!-- BLOCCO PER 1 INTESTATARIO -->
			<!-- Informazioni personali -->
				<div class="aolblock ">
					<h3>Informazioni personali</h3>
					<div class="aolblockwrapper">
					<div class="outputblock">
						<fieldset class="output">
							<span class="label">Stato di nascita</span>
							<span class="output">Italia</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Cittadinanza</span>
							<span class="output">Italiana</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Provincia di nascita</span>
							<span class="output">Milano</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Comune di nascita</span>
							<span class="output">Milano</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Titolo di studio</span>
							<span class="output">Laurea</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Come conosci Webank?</span>
							<span class="output">Amici</span>
						</fieldset>
					</div>
					<h3>Documento di identità</h3>
					<div class="outputblock">
						<fieldset class="output">
							<span class="label">Tipo di documento</span>
							<span class="output">Patente</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Numero</span>
							<span class="output">1234567890</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Data di rilascio</span>
							<span class="output">11/10/2010</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Stato di rilascio</span>
							<span class="output">Italia</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Provincia di rilascio</span>
							<span class="output">Milano</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Comune di rilascio</span>
							<span class="output">Milano</span>
						</fieldset>
					</div>
					<h3>Recapiti</h3>
					<div class="outputblock">
						<fieldset class="output">
							<span class="label">Indirizzo di residenza</span>
							<span class="output">Via Cavour 125</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Cap</span>
							<span class="output">20124</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Provincia</span>
							<span class="output">Milano</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Comune</span>
							<span class="output">Milano</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Indirizzo di corrispondenza</span>
							<span class="output">Uguale a indirizzo di residenza</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Indirizzo per la centrale di allarme interbancaria</span>
							<span class="output">Uguale a indirizzo di residenza</span>
						</fieldset>
					</div>
					<div class="filettobutton">
						<a title="modifica i dati" href="/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_1.php" class="greenbutton"><span>modifica i dati</span></a>
					</div>
				</div><img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
				</div>
			<!-- fine Recapiti -->
			</div>
		</div>
		<!-- FINE BLOCCO PRIMO INTESTATARIO -->
		<!-- BLOCCO SECONDO INTESTATARIO -->
		<div class="aolAcc">
			<div class="aolAccTop">
				<a class="aolAccTitle" id="intestatario2"  href="javascript:;" title="Espandi" onclick="switchExp(this,true);">
					<span class="titoloAcc">Completa i tuoi dati - Saular spezzoni ipsum ...</span>
					<span href="javascript:;" class="accButt"> </span>
					<span class="errortext"></span>
				</a>
			</div>
			<div class="aolAccContent">
			<!-- Informazioni personali -->
				<div class="aolblock ">
				<div class="aolblockwrapper">
				<h3>Dati anagrafici intestatario</h3>
				<div class="outputblock">
					<fieldset class="output">
						<span class="label">Nome</span>
						<span class="output">Mario Lorem</span>
					</fieldset>
					<fieldset class="output">
						<span class="label">Cognome</span>
						<span class="output">Ipsum dolor sit</span>
					</fieldset>
					<fieldset class="output" style="width:200px">
						<span class="label">Data di nascita</span>
						<span class="output">07/12/1978</span>
					</fieldset>
					<fieldset class="output" style="width:87px">
						<span class="label">Sesso</span>
						<span class="output">M</span>
					</fieldset>
					<fieldset class="output">
						<span class="label">Codice fiscale</span>
						<span class="output">ZZZRIR78T07C523E</span>
					</fieldset>
					<fieldset class="output">
						<span class="label">Email</span>
						<span class="output">mario.mario@webank.it</span>
					</fieldset>
					<fieldset class="output">
						<span class="label">Numero di cellulare</span>
						<span class="output">333/9928323</span>
					</fieldset>
				</div>
					<h3>Informazioni personali</h3>
					<div class="outputblock">
						<fieldset class="output">
							<span class="label">Stato di nascita</span>
							<span class="output">Italia</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Cittadinanza</span>
							<span class="output">Italiana</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Provincia di nascita</span>
							<span class="output">Milano</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Comune di nascita</span>
							<span class="output">Milano</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Titolo di studio</span>
							<span class="output">Laurea</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Come conosci Webank?</span>
							<span class="output">Amici</span>
						</fieldset>
					</div>
					<h3>Documento di identità</h3>
					<div class="outputblock">
						<fieldset class="output">
							<span class="label">Tipo di documento</span>
							<span class="output">Patente</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Numero</span>
							<span class="output">1234567890</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Data di rilascio</span>
							<span class="output">11/10/2010</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Stato di rilascio</span>
							<span class="output">Italia</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Provincia di rilascio</span>
							<span class="output">Milano</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Comune di rilascio</span>
							<span class="output">Milano</span>
						</fieldset>
					</div>
					<h3>Recapiti</h3>
					<div class="outputblock">
						<fieldset class="output">
							<span class="label">Indirizzo di residenza</span>
							<span class="output">Via Cavour 125</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Cap</span>
							<span class="output">20124</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Provincia</span>
							<span class="output">Milano</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Comune</span>
							<span class="output">Milano</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Indirizzo di corrispondenza</span>
							<span class="output">Uguale a indirizzo di residenza</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Indirizzo per la centrale di allarme interbancaria</span>
							<span class="output">Uguale a indirizzo di residenza</span>
						</fieldset>
					</div>
					<div class="filettobutton">
						<a title="modifica i dati" href="/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_1.php" class="greenbutton"><span>modifica i dati</span></a>
					</div>
				</div><img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
				</div>
			<!-- fine Recapiti -->
			</div>
		</div>
		<!-- FINE BLOCCO SECONDO INTESTATARIO -->
		
		
		<!-- COMPONI IL TUO CONTO -->
		<div class="aolAcc">
			<div class="aolAccTop">
				<a class="aolAccTitle" href="javascript:;" title="Espandi" onclick="switchExp(this,true);">
					<span class="titoloAcc">Componi il tuo conto</span>
					<span class="accButt"> </span>
					<span class="errortext"></span>
				</a>
			</div>
			<div class="aolAccContent">
			<!-- Informazioni personali -->
				<div class="aolblock ">
					<h3>Conto webank comprende</h3>
					<div class="aolblockwrapper">
					<div class="outputblock">
						<div class="product">
							<span class="productitle">Conto corrente e deposito a risparmio</span>
							<div class="productconfig">
								<span class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span>
							</div>
						</div>
						<div class="product">
							<span class="productitle">Estratto conto e contabili</span>
							<div class="productconfig">
								<span class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								<br />- lorem ispum: <span class="green">online gratuita</span>
								</span>
							</div>
						</div>
						<div class="product">
							<span class="productitle">Deposito titoli</span>
							<div class="productconfig">
								<span class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								<br />- lorem ispum: <span class="green">online gratuita</span><br/>
								- lorem ispum: <span class="green">lorem ipsum</span>
								<br/>
								- lorem ispum: <span class="green">lorem ipsum</span>
								<br/>
								- lorem ispum: <span class="green">lorem ipsum</span>
								<br/>
								- lorem ispum: <span class="green">lorem ipsum</span>
								<br/>
								- lorem ispum: <span class="green">lorem ipsum</span>
								</span>
							</div>
						</div>
						<div class="product">
							<span class="productitle">Sportello telefonico</span>
							<div class="productconfig">
								<span class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span>
							</div>
						</div>
						<div class="product">
							<span class="productitle">Programma sicurezza</span>
							<div class="productconfig">
								<span class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span>
							</div>
						</div>
					</div>
					<h3>Hai aggiunto al tuo conto</h3>
					<div class="outputblock">
						<div class="product">
							<span class="productitle">Carta jeans la carta ricaricabile</span>
							<div class="productconfig">
								<span class="subtitle">- lorem ispum: <span class="green">lorem ipsum</span></span>
							</div>
						</div>
						
					</div>
					<div class="filettobutton">
						<a title="modifica i dati" href="/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_2.php" class="greenbutton"><span>modifica i dati</span></a>
					</div>
				</div><img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
				</div>
			<!-- fine Recapiti -->
			</div>
		</div>
		<!-- FINE COMPONI IL TUO CONTO -->
		
		<!-- BLOCCO IDENTIFICA GLI INTESTATARI -->
		<div class="aolAcc">
			<div class="aolAccTop">
				<a class="aolAccTitle" href="javascript:;" title="Espandi" onclick="switchExp(this,true);">
					<span class="titoloAcc">Identifica gli intestatari</span>
					<span class="accButt"> </span>
					<span class="errortext"></span>
				</a>
			</div>
			<div class="aolAccContent">
			<!-- Informazioni personali -->
				<div class="aolblock ">
					<h3>Informazioni per lorem ipsum dolor sit amet</h3>
					<div class="aolblockwrapper">
					<div class="outputblock">
						<h4 class="subtitle">Informazioni su attività economica</h4>
						<fieldset class="output">
							<span class="label">Professione</span>
							<span class="output">Lorem ipsum</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Settore</span>
							<span class="output">Ipsum dolor sit</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Stato di svolgimento</span>
							<span class="output">Italia</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Provincia di svolgimento</span>
							<span class="output">Italia</span>
						</fieldset>
						<fieldset class="output fullwidth">
							<span class="label">Reddito annuo netto</span>
							<span class="output">da 15.000 a 30.000</span>
						</fieldset>
						<fieldset class="output fullwidth">
							<span class="label">Origine del patrimonio</span>
							<span class="output">
								Reddito da lavoro<br>
								Vendita beni immobili
							</span>
						</fieldset>
					</div>
					<div class="outputblock">
						<h4 class="subtitle">Informazioni pre procedura di identificazione</h4>
						<fieldset class="output fullwidth">
							<span class="label">La procedura di identificazione verr&agrave; effettuata</span>
							<span class="output">Facendo un bonifico IBAN IT8272827467482828282837282738</span>
						</fieldset>
					</div>
					<h3>Informazioni per Stephen Maki Lorem dolor ipsum sit</h3>
					<div class="outputblock">
						<h4 class="subtitle">Informazioni su attività economica</h4>
						<fieldset class="output">
							<span class="label">Professione</span>
							<span class="output">Lorem ipsum</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Settore</span>
							<span class="output">Ipsum dolor sit</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Stato di svolgimento</span>
							<span class="output">Italia</span>
						</fieldset>
						<fieldset class="output">
							<span class="label">Provincia di svolgimento</span>
							<span class="output">Italia</span>
						</fieldset>
						<fieldset class="output fullwidth">
							<span class="label">Reddito annuo netto</span>
							<span class="output">da 15.000 a 30.000</span>
						</fieldset>
						<fieldset class="output fullwidth">
							<span class="label">Origine del patrimonio</span>
							<span class="output">
								Reddito da lavoro<br>
								Vendita beni immobili
							</span>
						</fieldset>
					</div>
					<div class="outputblock">
						<h4 class="subtitle">Informazioni pre procedura di identificazione</h4>
						<fieldset class="output fullwidth">
							<span class="label">La procedura di identificazione verr&agrave; effettuata</span>
							<span class="output">Facendo un bonifico IBAN IT8272827467482828282837282738</span>
						</fieldset>
					</div>
					<div class="filettobutton">
						<a title="modifica i dati" href="/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_3.php" class="greenbutton"><span>modifica i dati</span></a>
					</div>
				</div><img src="/img/str_aol_dacompilarebot.gif"  class="promobottom"/>
				</div>
			<!-- fine Recapiti -->
			</div>
		</div>
		<!-- FINE BLOCCO IDENTIFICA GLI INTESTATARI -->
		
		
		<!-- PULSANTIERA FINALE -->
		<div class="filettobutton linked">
			<a title="indietro" href="/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_3.php" class="backLinked">indietro</a>
			<a onclick="" title="Vuoi continuare pi&ugrave; tardi?" href="javascript:;" class="bozzaLinked"><span>Vuoi continuare pi&ugrave; tardi?</span></a>
			<a onclick="javascript:esempiosubmit();" title="avanti" href="javascript:;" class="greenbutton"><span>avanti</span></a>
		</div>
		<!-- FINE PULSANTIERA FINALE -->
		
		
		
		</form>
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
						<span>In più per te <strong>120 &euro;</strong> di buoni acquisto MediaWorld!</span>
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
		<div id="aoldoclist" style="display:none">
				<ul>
					<li><a href="#1" target="blank" onclick="setVisitedLink(this)">Foglio Informativo</a></li>
					<li><a href="#2" target="blank" onclick="setVisitedLink(this)">Condizioni generali</a></li>
					<li><a href="#3" target="blank" onclick="setVisitedLink(this)">Modulo richiesta</a></li>
					<li><a href="#4" target="blank" onclick="setVisitedLink(this)">Documento di sintesi</a></li>
					<li><a href="#5" target="blank" onclick="setVisitedLink(this)">Informativa precontrattuale servizi a distanza</a></li>
					<li><a href="#6" target="blank" onclick="setVisitedLink(this)">Principali diritti del cliente</a></li>
					<li><a href="#7" target="blank" onclick="setVisitedLink(this)">Guida pratica al conto</a></li>
					<li><a href="#8" target="blank" onclick="setVisitedLink(this)">Guida pratica e modulo per ricorrere all'Arbitro</a></li>
				</ul>
				<h4>Per  apertura deposito titoli</h4>
				<ul>
					<li><a href="#9" target="blank" onclick="setVisitedLink(this)">Richiesta deposito titoli</a></li>
					<li><a href="#10" target="blank" onclick="setVisitedLink(this)">Condizioni generali</a></li>
					<li><a href="#11" target="blank" onclick="setVisitedLink(this)">Documentidi sintesi</a></li>
					<li><a href="#12" target="blank" onclick="setVisitedLink(this)">Informativa Mifid</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- OVERLAY PER NUMERO NON UNIVOCO -->
		<div id="alertNonUni" class="overlayer" style="display:none">
			<div class="abbandono aol">
				<div class="overlayertitle">
					<img src="/img/tit_wb_prima_procedere.gif"  alt="Prima di procedere" />
					<a href="#" onclick="closePopOverLayer('alertNonUni')" class="chiudi" id="close"></a>
					
					<span></span>
				</div>
				<div class="overlayerbody">
					<span class="sep"></span>
					<p><strong>Il numero di cellulare indicato &egrave; gi&agrave; presente nei nostri sistemi ma associato ad un altro codice fiscale.</strong> </p>
					<p><strong>Se vuoi ricevere i codici di accesso speed, devi modificare il numero di cellulare e confermarlo.</strong></p>
					<p>In alternativa, puoi proseguire la compliazione saltando questo passaggio(invieremo a tutti gli intestatari codici di accesso via posta). </p>
					<div class="buttonCont">
						<a title="salta questo passaggio"  onclick="closePopOverLayer('alertNonUni');$('boxNonUni').show();disableForm('leftMail');disableForm('leftCell');$('riceviCellBtn').hide();$('riceviCellBtnDis').show();$('riceviMailBtn').hide();$('riceviMailBtnDis').show();" href="javascript:;" class="bozzaLinked"><span>salta questo passaggio</span></a>
						<a title="modifica numero" onclick="closePopOverLayer('alertNonUni');setError('tuttaLaData');"  href="javascript:;" class="greenbutton"><span>modifica numero</span></a>
					</div>
				</div>
				
			</div>
		</div>
<!-- FINE OVERLAY PER NUMERO NON UNIVOCO -->	

<!-- OVERLAY PER NON AZIONE UTENTE -->
		<div id="alertNoCert" class="overlayer" style="display:none">
			<div class="abbandono aol">
				<div class="overlayertitle">
					<img src="/img/tit_wb_prima_procedere.gif"  alt="Prima di procedere" />
					<a href="#" onclick="closePopOverLayer('alertNoCert')" class="chiudi" id="close"></a>
					
					<span></span>
				</div>
				<div class="overlayerbody">
					<span class="sep"></span>
					<p><strong>Confermaci ora il numero di cellulare e la mail!</strong> </p>
					<p>Ti invieremo cosi i codici di accesso su cellulare e mail e potrai accedere più velocemente al tuo conto..</p>
					<p>Se non puoi farlo ora, puoi saltare questo passaggio e proseguire con la compilazione della richiesta ma riceverai i codici con spedizione postale. </p>
					<div class="buttonCont">
						<a title="salta questo passaggio" onclick="closePopOverLayer('alertNoCert');" href="/connect.php?page=str_aol_pub_wb.php&amp;tpl=tpl_pub_aol_step_5.php" class="bozzaLinked"><span>salta questo passaggio</span></a>
						<a title="conferma ora i tuoi dati" onclick="closePopOverLayer('alertNoCert');"  href="javascript:;" class="greenbutton"><span>conferma ora i tuoi dati</span></a>
					</div>
				</div>
				
			</div>
		</div>
<!-- FINE OVERLAY PER NON AZIONE UTENTE -->	
