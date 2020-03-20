
	        <div class="container-fluid">
	          <div class="row">
	            <div class="col-xs-12">
	                <div class="formGenerico borderFormRounded">
		
		<!-- Blocco con introduzione -->
		<div class="row">
			<div class="col-xs-12">
				<p>Per autorizzare l'operazione, conferma utilizzando la tua <strong>app di sicurezza</strong></p>
			</div>
		</div>
		<hr>
		<!-- Fine blocco introduzione -->
		<!-- Blocco "timeout" -->
		
		<!-- Fine blocco "timeout" -->
	    <!-- Form di richiesta -->
		<div class="formGeneric" id="bloccoAttesaPush">
			
				<!--RIGA DIVISA IN QUATTRO CAMPI -->
				<div class="row otpdesc app">
					<div class="col-xs-12 col-sm-6">
						<span class="introtext">Abbiamo inviato una notifica push <strong>sul tuo smartphone</strong> con l'app di sicurezza installata: fai <strong>tap sulla notifica</strong>.</span>
						<div class="center hidden-xs"><img src="/wscmn/fe/img/token_app_finger.png"></div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<span class="introtext">Inserisci il tuo <strong>PIN</strong> o usa <strong data-toggle="tooltip" title="" class="txthelp inited" data-original-title="Se il tuo smartphone supporta la funzione, puoi impostare la <strong>conferma sull'app</strong> tramite 
										la tua <strong>impronta digitale</strong>, al posto dell'inserimento del Pin.
										Per <strong>scegliere</strong> se utilizzare l'impronta digitale o il Pin vai nella sezione &quot;imposta strumento di sicurezza&quot; 
										della tua app">
										l'impronta digitale
						</strong> 
						per confermare.</span>
						<div class="center hidden-xs"><img src="/wscmn/fe/img/token_app_insert.png"></div>
					</div>
				</div>
				<!-- Form di richiesta -->
				<div class="row">
					<div class="col-xs-12">
						<a href="javascript:;" class="openinfo" id="infoOtpOpener"><i class="icon icon-info_fill icon-2x"></i><span data-toggle="tooltip" class="txthelp inited" title="" data-original-title="Per autorizzare l'operazione devi utilizzare lo smartphone su cui hai installato <strong>l'app di sicurezza</strong>.
			<br>
			<br>
			Accertati che la connessione dati del tuo smartphone sia attiva: in questo caso <strong>ricevi automaticamente una notifica push</strong>, 
			anche senza bisogno di aprire l'app sullo smartphone. Tappando sulla notifica, l'operazione viene autorizzata.
			<br>
			<br>
			Se non ricevi la notifica push perchè il tuo <strong>smartphone è offline</strong>
			<ul>
				<li>clicca sul <strong>bottone &quot;usa Genera codice token&quot;</strong> di questa pagina</li>
				<li>apri <strong>l'app  Webank
										</strong> sul tuo smartphone</li>
				<li>vai alla funzione <strong>&quot;Genera codice token&quot; dell'app</strong></li>
				<li>inserisci <strong>nella pagina successiva</strong> il codice generato dall'app.</li>
			</ul>
			Se hai bisogno di assistenza puoi chiamare il <strong>numero verde 800 060 070</strong>">Problemi con l'operazione?</span></a>
					</div>
				</div>
				
				<div class="row">
					<div class="col-xs-12 center">
						<h3>Non hai ricevuto la notifica push?</h3>
						<div class="form-group btnWrapper">
							<div class="btn-align-center">
								<a href="javascript:;" id="btnGeneraTok" class="btn btn-default" onclick="$('#bloccoGenerazioneManuale').show();
															 $('#bloccoAttesaPush').hide();
															 $('#conferma').show();
															 $('#btnReturnPush').show();
															 ">
										<span>usa "Genera codice token"</span>
									</a>
								<br class="clear">
							</div>
						</div>
					</div>
				</div>
			
		 </div>
		<!-- Form di richiesta -->
	
		<!-- Form di richiesta -->
		<div class="formGeneric" id="bloccoGenerazioneManuale" style="display:none">
			<!--RIGA DIVISA IN QUATTRO CAMPI -->
				<div class="row otpdesc app">
					<div class="col-xs-12 col-sm-4">
													<span class="introtext">Apri l'app e, vai su &lt;<strong>icona della rotellina</strong>&gt; e quindi su "Genera codice token".</span>
												<div class="center hidden-xs"><img src="/wscmn/fe/img/token_app_genera.png"></div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<span class="introtext">
							Inserisci il tuo <strong>PIN</strong> sull'app oppure usa 
							<strong data-toggle="tooltip" title="" class="txthelp inited" data-original-title="Se il tuo smartphone supporta la funzione, puoi impostare la <strong>conferma sull'app</strong> tramite 
										la tua <strong>impronta digitale</strong>, al posto dell'inserimento del Pin.
										Per <strong>scegliere</strong> se utilizzare l'impronta digitale o il Pin vai nella sezione &quot;imposta strumento di sicurezza&quot; 
										della tua app">
									l'impronta digitale
							</strong> 
							per confermare.
						</span>
						<div class="center hidden-xs"><img src="/wscmn/fe/img/token_app_insert.png"></div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<span class="introtext">Inserisci qui sotto il codice token che viene in questo modo generato dall'app.</span>
						<div class="center hidden-xs"><img src="/wscmn/fe/img/token_app_codice.png"></div>
					</div>
				</div>
				<!-- Form di richiesta -->
				<div class="row">
					<div class="col-xs-12 col-sm-8">
						<a href="javascript:;" class="openinfo" id="infoOtpOpener"><i class="icon icon-info_fill icon-2x"></i><span data-toggle="tooltip" class="txthelp inited" title="" data-original-title="Per autorizzare l'operazione devi utilizzare lo smartphone su cui hai installato <strong>l'app di sicurezza</strong>.
			<br>
			<br>
			Accertati che la connessione dati del tuo smartphone sia attiva: in questo caso <strong>ricevi automaticamente una notifica push</strong>, 
			anche senza bisogno di aprire l'app sullo smartphone. Tappando sulla notifica, l'operazione viene autorizzata.
			<br>
			<br>
			Se non ricevi la notifica push perchè il tuo <strong>smartphone è offline</strong>
			<ul>
				<li>clicca sul <strong>bottone &quot;usa Genera codice token&quot;</strong> di questa pagina</li>
				<li>apri <strong>l'app  Webank
										</strong> sul tuo smartphone</li>
				<li>vai alla funzione <strong>&quot;Genera codice token&quot; dell'app</strong></li>
				<li>inserisci <strong>nella pagina successiva</strong> il codice generato dall'app.</li>
			</ul>
			Se hai bisogno di assistenza puoi chiamare il <strong>numero verde 800 060 070</strong>">Problemi con l'operazione?</span></a>
					</div>
					<div class="col-sm-4 col-xs-12 otpGroup">
						<label class="control-label" for="codiceotp">Codice Otp</label>
						<input type="password" name="otp" id="codiceotp" class="form-control clear-x" min="0" max="99999999999">	
					</div>
				</div>					
						 </div>
		 <hr>
	</div>
	<!-- Fine controllo TOKEN -->            </div>
	            <!-- pulsante per annullare (singolo)-->
	            <div class="col-xs-12">
	              <div class="form-group btnWrapper">
	                <div class="btn-align-left">
						
						<a type="button" class="btn btn-primary" id="btnReturnPush" onclick="$('#bloccoAttesaPush').show(); 
									 $('#bloccoGenerazioneManuale').hide();
									 $('#conferma').hide();
									 $(this).hide(); 
									 $('#btnGeneraTok').removeClass('btn btn-default').addClass('btn btn-primary');">Torna a app online
						</a>
	                </div>
	                <div class="btn-align-right">
	                  <a type="button" class="btn btn-default" data-dismiss="modal">Annulla</a>
	                  <a type="button" class="btn btn-primary" id="conferma" style="" data-dismiss="modal" onclick="transferOtp();vai('INVIA2')">Conferma</a>
	                </div>
	                <br class="clear">
	              </div>
	            </div>
	            <!-- pulsante per annullare (singolo) -->
	          </div>
	        </div>
