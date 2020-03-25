<!-- ESEMPIO DI SETTING ERRORI: NON COPIARE solo per emulare e presentare le diverse casistiche -->
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
						offSetDoc();
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
						inputEl.each(function() {
						if(!$(this).hasClass('disabled')) {$(this).prop("disabled", true);$(this).attr('class','disabled')} else{$(this).prop("disabled", false);$(this).attr('class','')} //disabilita i campi
						})
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
							if (counter==5){unSetClass();riceviCodici($('confermaBtn'),'esitoKoCell');disableForm('leftMail');$('riceviMailBtn').hide();$('btnInvioOTPMailDisabled').show()}
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
<div id="aolcontainer">
	<div id="aolleft">
		<form name="form" autocomplete="off">
			<div class="aolFormContent">
				<fieldset>
					<legend>Numero di cellulare ed email</legend>
					<p>Indica e certifica il tuo numero di cellulare ed il tuo indirizzo email: &egrave; necessario per ricevere velocemente i tuoi codici di accesso al conto.</p>
					<div class="boxLight"><p>Assicurati d'avere <strong>a disposizione</strong> il cellulare e l'email: <strong>ti invieremo un codice di controllo</strong> per confermare i tuoi dati.</p></div>
					<div class="row-fluid spaceBottom datatocertificate" id="numeroCellulare">
						<div class="span6">
							<div id="leftCell">
								<div id="cellulareInt" class="row-fluid">
									<div class="span6 fieldBlock">
										<label>Numero di cellulare</label>
										<input type="text" id="telefono_int1" placeholder="es:333123456789" maxlength="" name="telefono_int1">
										<span class="errortext"></span>
									</div>
									<div class="span6 fieldBlock">
										<label>Operatore</label>
										<select class="inputStep2 altri" id="operatore_int1" name="operatore_int1"><option value="">Seleziona</option>
											<option value="Wind">Wind</option>
											<option value="">lorem ipsum</option>
											<option value=""></option>
											<option value=""></option>
											<option value=""></option>
											<option value="ALTRO">Altro...</option>
										</select>
										<span class="errortext"></span>
									</div>
								</div>	
							</div>
						</div>
						<div id="btnInvioOTPCell" class="span6 hiddenCert">
							<label>&nbsp;</label><br class="clear">
							<a class="greenbutton" href="javascript:;" title="ricevi codice via sms" onclick="riceviCodici(this,'inCodiceOTPCell');$('#skipMailDis').hide();$('#skipMail').show();$('#mail_int1').prop('disabled',false);$('#mail_int1').removeClass('disabled'); $('#btnInvioOTPMailDisabled').hide();$('#btnInvioOTPMail').show();setClass();disableForm('leftCell')" id="riceviCellBtn"><span>ricevi codice via sms</span></a>
						</div>
						<div id="inCodiceOTPCell" class="hiddenCert row-fluid" style="display:none">
							<div class="span6 flRight">
								<div class="fieldBlock">
									<label>Inserisci codice (ricevuto sul numero indicato)</label>
									<br class="clear">
									<input type="text" value="" id="codiceCell">
									<span class="errortext"></span>
									<a href="#">Richiedi un nuovo codice</a>
								</div>
								<div class="row-fluid fieldBlock">
									<div class="span7">&nbsp;</div>
									<div class="conferma error span5"><a onclick="unSetClass();riceviCodici(this,'esitoOkCell')" title="conferma" href="javascript:;" class="greenbutton marginL" id="confermaBtn"><span>conferma</span></a><span class="errortext">lorem ipsum</span></div>
								</div>
							</div>
							<div class="msgbottom span6 fieldBlock">
								<img alt="" src="/img/ico2inf_attenzione.gif">
								<div>Il codice non arriva?.<br>
								Puoi:
								<ul><li>saltare e <a onclick="riceviCodici(this,'step3Cellpost');disableForm('leftMail');$('riceviMailBtn').hide();$('riceviMailBtnDis').show()" href="javascript:;"> compleatre pi&ugrave; tardi</a></li>
									<li><a onclick="disableForm('leftCell');riceviCodici(this,'btnInvioOTPCell')" href="javascript:;">modificare</a> il numero di cellulare inserito</li>
								</ul>
								</div>
							</div>
						</div>
						<div id="esitoOkCell" style="display:none;" class="hiddenCert span6">
							<div class="boxesito positivo">
								<div class="middle"><span class="imgCont"></span>
									<div class="text">
										<div class="row-fluid">
											<div class="span12">
												<p><strong>Lorem ipsum dolor sit amet adipiscig</strong></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="esitoKoCell" style="display:none;" class="hiddenCert span6">
							<div class="boxesito negativo">
								<div class="middle"><span class="imgCont"></span>
									<div class="text">
										<div class="row-fluid">
											<div class="span12">
												<p><strong>Lorem ipsum dolor sit amet adipiscig</strong></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row-fluid spaceBottom datatocertificate" id="indirizzoMail">
						<div class="span6" id="leftMail">
							<div id="mailInt" class="fieldBlock">
								<label>Email</label>
								<input type="text" id="mail_int1" name="mail_int1" disabled="disabled" class="disabled">
								<span class="errortext"></span>
							</div>
							
							
						</div>
						<div class="fieldBlock span6" id="btnInvioOTPMailDisabled">
							<label>&nbsp;</label><br class="clear"/>
							<a title="ricevi codice via mail" href="javascript:;" class="disabledbutton"><span>ricevi codice via mail</span></a><br class="clear" />
						</div>
						<div class="fieldBlock span6 hiddenCert" id="btnInvioOTPMail" style="display:none">
							<label>&nbsp;</label><br class="clear"/>
							<a class="greenbutton" href="javascript:;" title="ricevi codice via mail" onclick="riceviCodici(this,'inCodiceOTPMail');setClass();disableForm('leftMail')" id="riceviMailBtn"><span>ricevi codice via mail</span></a>
						</div>
						<div id="inCodiceOTPMail" style="display:none;" class="hiddenCert">
							<div class="span6 flRight">
								<div class="fieldBlock">
									<label>Inserisci codice (ricevuto alla mail indicata)</label>
									<br class="clear">
									<input type="text" value="" id="codiceCell">
									<span class="errortext"></span>
									<a href="#">Richiedi un nuovo codice</a>
								</div>
								<div class="row-fluid fieldBlock">
									<div class="span7">&nbsp;</div>
									<div class="conferma fieldBlock error span5"><a onclick="unSetClass();riceviCodici(this,'esitoOkMail')" title="conferma" href="javascript:;" class="greenbutton marginL"><span>conferma</span></a><span class="errortext">lorem ipsum</span></div>
								</div>
							</div>
							<div class="msgbottom span6">
								<img alt="" src="/img/ico2inf_attenzione.gif"/>
								<div>Il codice non arriva?.<br>
									Puoi:
									<ul>
										<li>saltare e <a onclick="riceviCodici(this,'step3Cellpost');disableForm('leftMail');$('riceviMailBtn').hide();$('riceviMailBtnDis').show()" href="javascript:;"> compleatre pi&ugrave; tardi</a></li>
										<li><a onclick="disableForm('leftMail');riceviCodici(this,'btnInvioOTPMail')" href="javascript:;">modificare</a>l'indirizzo mail inserito</li>
									</ul>
								</div>
							</div>
						</div>
						<div id="esitoOkMail" style="display:none;" class="hiddenCert span6">
							<div class="boxesito positivo">
								<div class="middle"><span class="imgCont"></span>
									<div class="text">
										<div class="row-fluid">
											<div class="span12">
												<p><strong>Lorem ipsum dolor sit amet adipiscig</strong></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="esitoKoMail" style="display:none;" class="hiddenCert span6">
							<div class="boxesito negativo">
								<div class="middle"><span class="imgCont"></span>
									<div class="text">
										<div class="row-fluid">
											<div class="span12">
												<p><strong>Lorem ipsum dolor sit amet adipiscig</strong></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</fieldset>
				<div class="lineSeparator"></div>
				<fieldset>
					<legend>Indirizzo</legend>
					<div class="row-fluid spaceBottom">
						<div class="span6">
							<label>Indirizzo di residenza</label>
							<div class="row-fluid">
								<div class="span4 fieldBlock">	
									<select id="qualif_int1" name="qualif_int1">
										<option>Via</option>
										<option>Contrada</option>
									</select>
									<span class="errortext"></span>
								</div>
								<div class="span8 fieldBlock">	
									<input type="text" id="via_int1" value="" name="via_int1">
									<span class="errortext"></span>
								</div>
							</div>
						</div>
						<div class="span6">
							<div class="row-fluid">
								<div class="span2 fieldBlock">	
									<label>Num.</label>
									<input type="text" id="civico_int1" value="" name="civico_int1">
									<span class="errortext"></span>
								</div>
								<div class="span10">	
									<label>Presso (facoltativo)</label>
									<input type="text" id="presso_int1" value="" name="presso_int1" placeholder="nome o cognome o nome azienda">
								</div>
							</div>
						</div>
					</div>
					<div class="row-fluid spaceBottom">
						<div class="span6">
							<div class="row-fluid">
								<div class="span4 fieldBlock">	
									<label>Provincia</label>
									<input type="text" id="provincia_int1" name="provincia_int1">
									<span class="errortext"></span>
								</div>
								<div class="span8 fieldBlock">	
									<label>Comune</label>
									<input type="text" id="comune_int1" value="" name="comune_int1">
									<span class="errortext"></span>
								</div>
							</div>
						</div>
						<div class="span6">
							<div class="row-fluid">
								<div class="span4 fieldBlock">	
									<label>CAP</label>
									<input type="text" id="cap_int1" value="" name="cap_int1">
									<span class="errortext"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="row-fluid expandable" id="divIndirizzoCorrispondenza1">
						<div class="expander">
							<a class="btn" onclick="switchExp(this)" href="javascript:;"> </a>
							<span>Indirizzo di corrispondenza (se diverso da residenza). A questo indirizzo verr&agrave; inviata la documentazione contrattuale per tutti gli intestatari.</span>
						</div>
						<div class="expandableCont">
							<div class="row-fluid spaceBottom">
								<div class="span6">
									<label>Indirizzo di residenza</label>
									<div class="row-fluid">
										<div class="span4 fieldBlock">	
											<select id="" name="">
												<option>Via</option>
												<option>Contrada</option>
											</select>
											<span class="errortext"></span>
										</div>
										<div class="span8 fieldBlock">	
											<input type="text" id="" value="" name="">
											<span class="errortext"></span>
										</div>
									</div>
								</div>
								<div class="span6">
									<div class="row-fluid">
										<div class="span2 fieldBlock">	
											<label>Num.</label>
											<input type="text" id="" value="" name="">
											<span class="errortext"></span>
										</div>
										<div class="span10 fieldBlock">	
											<label>Presso(facoltativo)</label>
											<input type="text" id="presso_int1" value="" name="presso_int1" placeholder="nome o cognome o nome azienda">
											<span class="errortext"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="row-fluid spaceBottom">
								<div class="span6">
									<div class="row-fluid">
										<div class="span4 fieldBlock">	
											<label>Provincia</label>
											<input type="text" id="" name="">
											<span class="errortext"></span>
										</div>
										<div class="span8 fieldBlock">	
											<label>Comune</label>
											<input type="text" id="" value="" name="">
											<span class="errortext"></span>
										</div>
									</div>
								</div>
								<div class="span6">
									<div class="row-fluid">
										<div class="span4 fieldBlock">	
											<label>CAP</label>
											<input type="text" id="" value="" name="">
											<span class="errortext"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row-fluid expandable" id="divIndirizzoCorrispondenza2">
						<div class="expander">
							<a class="btn" onclick="switchExp(this)" href="javascript:;"> </a>
							<span>Indirizzo per la centrale di allarme interbancaria (se diverso da residenza)</span>
						</div>
						<div class="expandableCont">
							<div class="row-fluid spaceBottom">
								<div class="span6">
									<label>Indirizzo di residenza</label>
									<div class="row-fluid">
										<div class="span4 fieldBlock">	
											<select id="" name="">
												<option>Via</option>
												<option>Contrada</option>
											</select>
											<span class="errortext"></span>
										</div>
										<div class="span8 fieldBlock">	
											<input type="text" id="" value="" name="">
											<span class="errortext"></span>
										</div>
									</div>
								</div>
								<div class="span6">
									<div class="row-fluid">
										<div class="span2 fieldBlock">	
											<label>Num.</label>
											<input type="text" id="" value="" name="">
											<span class="errortext"></span>
										</div>
										<div class="span10 fieldBlock">	
											<label>Presso(facoltativo)</label>
											<input type="text" id="presso_int1" value="" name="presso_int1" placeholder="nome o cognome o nome azienda">
											<span class="errortext"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="row-fluid spaceBottom">
								<div class="span6">
									<div class="row-fluid">
												<div class="span4 fieldBlock">	
													<label>Provincia</label>
													<input type="text" id="" name="">
													<span class="errortext"></span>
												</div>
												<div class="span8 fieldBlock">	
													<label>Comune</label>
													<input type="text" id="" value="" name="">
													<span class="errortext"></span>
												</div>
									</div>
								</div>
								<div class="span6">
											<div class="row-fluid">
												<div class="span4 fieldBlock">	
													<label>CAP</label>
													<input type="text" id="" value="" name="">
													<span class="errortext"></span>
												</div>
												
											</div>
								</div>
							</div>
						</div>
					</div>
				</fieldset>
				<div class="lineSeparator"></div>
				<fieldset class="noPaddBott">
					<div class="row-fluid expandable" id="">
						<div class="expander">
							<a class="btn" onclick="switchExp(this)" href="javascript:;"> </a>
							<span><strong>Altri recapiti telefonici (facoltativi)</strong></span>
						</div>
						<div class="expandableCont">
							<div class="row-fluid spaceBottom">
								<div class="span6">
									<label>Telefono casa</label>
									<div class="row-fluid">
										<div class="span12">	
											<input type="text">
										</div>
									</div>
								</div>
								<div class="span6">
									<label>Telefono ufficio</label>
									<div class="row-fluid">
										<div class="span12">	
											<input type="text">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</fieldset>
				<div class="lineSeparator"></div>
				<fieldset>
					<legend>Consenso all'utilizzo dei recapiti (numeri di telefono ed email) per cominuciazioni con la banca</legend>
					<p class="expandable">L'operativit&agrave; a distanza caratterizza tutti i servizi offerti da Webank S.p.A. Per poter comunicare con te per email o per telefono necessitiamo del tuo consenso. In caso contrario, saremo impossibilitati a procedere all'apertura del conto.<br/>
						<a href="javascript:;" class="expander" onclick="switchExp(this)">Leggi di pi&ugrave;</a>
						<span class="expandableCont" id="consensoRecapiti">Con il tuo consenso, inoltre, dichiari e garantisci che il tuo computer permette la stampa, il salvataggio in formato elettronico (supporto durevole) per il recupero della copia integrale e conforme di tutti i documenti inviati o messi a disposizione da Webank per tutta la durata dei rapporti. </span>
					</p>
					<div class="row-fluid fieldBlock">
						<label class="span4"><input type="radio" id="comunicazioniPCons" name="">do il consenso</label>
						<label class="span4"><input type="radio" onclick ="$(this).prop('checked', false);" id="comunicazioniPCons" name="" class="small" data-tooltip="Non dando il consenso non &egrave; possibile procedere con l'apertura del conto.">nego il consenso</label>
						<br class="clear">
						<span class="errortext">Seleziona</span>
					</div>
				</fieldset>
			</div>
		</form>
		<br class="clear"/>
		<div class="aolButton" id="aolButtonLine">
				<div class="row-fluid">
					<div class="span3">
						<a href="#" class="flLeft aButtonBack">indietro</a>
					</div>
					<div class="span5">
						<a href="#" class="aTextLink">Vuoi continuare pi&ugrave; tardi?</a>
					</div>
					<div class="span4">
						<a class="aButton flRight" href="javascript:;" onclick="esempioErrori()"><span>Conferma</span></a>
					</div>
				</div>
		</div>	
	</div>
		<!--SPALLA DI DESTRA-->
	<div id="aolright">
		<div>
			<div class="leftit">
				<h2>SODDISFATTO O RIMBORSATO</h2>
				<div class="gen">
					<p>Puoi recedere dall'apertura del conto entro 14 giorni senza oneri n&eacute; penali <a href="#">Leggi il documento</a></p>
				</div>
			 </div>
		</div>
		<div id="limiteDx" style="clear:left"></div>
		<div id="precontrattualeDx">
			<div class="lineSeparatorR"></div>
			<div class="leftit">
				<h2><a onclick="switchAolDoclist(this);" href="javascript:;" class="closed">DOCUMENTAZIONE PRECONTRATTUALE</a></h2>
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
					<li class="last"><a href="#8" target="blank" onclick="setVisitedLink(this)">Guida pratica e modulo per ricorrere all'Arbitro</a></li>
				</ul>
			</div>
		</div>
		<div id="nextStepLine">
				<div class="lineSeparatorR"></div>
					<div class="leftit nextStep">
						<h2>NEL PROSSIMO STEP</h2>
					 </div>
					 <div class="gen">
						<p class="nextText1">potrai personalizzare il tuo conto.</p>
						<span class="nextText2">scegli il prodotto che preferisci
						tra: </span><span class="nextText3">bancomat, deposito titoli,
		carta di credito o carta ricaribile.</span>
					 </div>
		</div>
	
	</div>
	<!--FINE SPALLA DI DESTRA-->
</div>