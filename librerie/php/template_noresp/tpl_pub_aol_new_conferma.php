<div id="aolcontainer" class="aolcontainerall">
	<div id="aolleft" class="aolleftall">
		<div class="aolFormContent">
			<h2>Complimenti, hai inserito correttamente la richiesta di apertura del conto.</h2>
			<p><strong>Salva</strong> la documentazione contrattuale, <strong>stampa e inviaci</strong>  il contratto <strong>per aprire il conto</strong>. Ti invieremo un' <strong>email</strong> con il riepilogo di tutte le istruzioni.</p>
			<strong>Salva la documentazione contrattuale</strong><br>
			
			<div class="confermaAolStep">	
				<p>Salva sul tuo computer i documenti contrattuali. Se non riesci a salvarli, ti manderemo comunque una email con tutti i documenti da stampare.</p>
				<div class="formCenteredwrapper">
					<div id="salvaDoc" class="aolButton">
						<a href="javascript:;" class="aButton flCenter" onclick="openPopOverLayer('downloadDoc', 'floating');"><span>salva la documentazione</span></a>
					</div>
					<div id="salvaDocOk" class="aolButton" style="display:none">
						<div class="boxesito positivo">
							<div class="middle"><span class="imgCont"></span>
								<div class="text">
									<div class="row-fluid">
										<div class="span12">
											<p><strong>Documentazione salvata</strong></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="salvaDocKo" class="aolButton" style="display:none">
						<div class="boxesito attenzione">
							<div class="middle"><span class="imgCont"></span>
								<div class="text">
									<div class="row-fluid">
										<div class="span12">
											<p><strong>

Ti abbiamo inviato una email con i documenti contrattuali  e con le istruzioni per completare l'apertura del conto.
</strong></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<div class="lineSeparator"></div>
			
			<div class="confermaAolStep">
				<p><strong>Stampa il contratto</strong></p>
				<div class="formCenteredwrapper">
					<div id="stampaContrattoDis" class="aolButton">
						<a href="javascript:;" class="aButton flCenter buttDis"><span>stampa il contratto</span></a>
					</div>
					<div id="stampaContratto" class="aolButton" style="display:none">
						<a href="javascript:;" class="aButton flCenter"><span>stampa il contratto</span></a>
					</div>
				</div>
				<div id="stampaContrattoKo" class="" style="display:none">
						Controlla l'indirizzo lorem.ipsum@libero.it.<br/> Ti abbiamo inviato la mail con tutti i documenti da stampare.
				</div>
			</div>
		
			<div class="lineSeparator"></div>
			
			<div class="confermaAolStep">
				<p><strong>Firma e spedisci il contratto</strong></p>
				<p>Firma il contratto in tutte le sue parti.<br/>
				Spedisci i seguenti documenti a <strong>Webank, Via Massaua 4 20146 Milano:</strong>
				</p>
				<ul>
					<li>contratto firmato</li>
					<li> fotocopia del documento d'identit&agrave; che hai indicato nella richiesta</li>
					<li> fotocopia del tuo Codice Fiscale</li>
				</ul>
			</div>
			<div class="lineSeparator"></div>
			<div class="confermaAolStep">
				<p><strong>Completa l'identificazione</strong></p>
				<p>Ricordati di fare il bonifico dii 100&euro; da un conto corrente intestato a tuo nome oppure cointestato. Accrediteremo la somma versata sul tuo conto corrente dopo l'apertura.</p>
			</div>
		</div>
	</div>
</div>
<!-- OVERLAY STEP! -->
	<div id="downloadDoc" class="overlayer" style="display:none">
		<div class="abbandono aol">
			<div class="overlayerbody">
				<h2>Salvataggio della documentazione contrattuale</h2>
				<div class="formCenteredwrapper">
					<div id="aolButtonLine" class="aolButton" id="">
						<a href="javascript:;" class="aButton flCenter" target ='_blank' onclick="$('#linkDownloadDis').hide();$('#linkDownload').show()"><span>scarica documentazione</span></a>
					</div>
				</div>
				<p><strong>Scarica e salva</strong> sul tuo computer la documentazione contrattuale, che contiene:
				Documento di sintesi, Foglio Informativo, Condizioni generali, Informativa precontrattuale servizi a distanza, Principali diritti del cliente, Modulo di richiesta, Condizioni generali Firma digitale e PEC, Modulo di richiesta Firma digitale e PEC.</p>
				<p>Indica se sei riuscito a salvare i documenti; in caso contrario ti invieremo un'email con la documentazione allegata.</p>
				<div class="row-fluid" id="linkDownloadDis">
					<div id="" class="linkdisabled span6">
						<span>ho salvato correttamente la documentazione</span>
					</div>
					<div id="" class="linkdisabled span6">
						<span>non sono riuscito a salvare,inviatemi la documentazione via email</span>
					</div>
				</div>
				<div class="row-fluid" id="linkDownload" style="display:none">
					<div id="" class="linkdisabled span6">
						<a href="javascript:;" onclick="closePopOverLayer('downloadDoc');$('#salvaDoc,#stampaContrattoDis').hide();$('#salvaDocOk,#stampaContratto').show();">ho salvato correttamentela documentazione</a>
					</div>
					<div id="" class="linkdisabled span6">
						<a href="javascript:;" onclick="closePopOverLayer('downloadDoc');$('#salvaDoc,#stampaContrattoDis').hide();$('#salvaDocKo,#stampaContrattoKo').show();">non sono riuscito a salvare,inviatemi la documentazione via email</a>
					</div>
				</div>
			</div>
		</div>
			
	</div>

<!-- FINE OVERLAY STEP1 -->	