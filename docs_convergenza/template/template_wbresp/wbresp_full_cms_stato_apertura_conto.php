<link rel="stylesheet" href="/wbresp/css/stato-apertura-conto.css">
<div class="stato-apertura-conto mainContent">
	<div class="stato-apertura-conto container">
			<div class="row rowArea1">

				<!-- colonna centrale -->
				<div class="col-lg-12 col-md-12 col-sm-12">



							<div class="stato-apertura-conto basic-content">
								<h2>Segui lo stato della pratica di apertura conto</h2>

                <div class="row">
                  <div class="steps">
                      <div class="step step1 step_ok">
                        <h5>1</h5>
                        <h6>Invio del contratto</h6>
                        <p>
                          Alla ricezione della richiesta procediamo a inviarti via email il contratto e le istruzioni per:
                        </p>
                        <ul>
                          <li>firmare e consegnare il contratto</li>
                          <li>identificare gli intestatari</li>
                        </ul>
                      </div>

                      <div class="step step2 step_do">
                        <h5>2</h5>
                        <h6>Verifica dei dati</h6>
                        <p>
                          Alla ricezione del contratto ti avvisiamo via SMS, verifichiamo i dati e eventuali informazioni mancanti
                        </p>
                      </div>

                      <div class="step step3 step_ko">
                        <h5>3</h5>
                        <h6>Apertura del conto</h6>
                        <p>
                          Ti avvisiamo via SMS e via email dell'apertura del conto e spediamo (in buste separate e tempi diversi):
                        </p>
                        <ul>
                          <li>contratto</li>
                          <li>numero conto corrente</li>
                          <li>IBAN</li>
                          <li>codici di accesso</li>
                          <li>bancomat</li>
                        </ul>
                      </div>

                      <div class="step step4 step_ko">
                        <h5>4</h5>
                        <h6>Inizia ad operare</h6>
                        <p>
                          Entra in Webank e comincia ad operare:
                        </p>
                        <ul>
                          <li>fai i versamente con il tuo nuovo IBAN</li>
                          <li>richiedi assegni, carte di credito e ricaricabili</li>
                          <li>trasloca il vecchio conto</li>
                          <li>fai tutte le operazioni</li>
                        </ul>
                      </div>
                  </div>

                </div>

                <p style="margin-bottom:20px; margin-top:20px;">Entra in quest'area riservata per vedere a che punto &egrave; la richiesta di apertura del tuo nuovo Conto Webank.<br />
                Inserisci il codice fiscale ed il codice OTP ricevuto via SMS:</p>
	
				<div class="row">
				<form action="stato-apertura-conto-ko.html" method="POST" id="formStatoAperturaconto" name="formStatoAperturaconto" class="form-group stato-apertura-conto"  autocomplete="off">
					<div class="col-xs-12 hidden-xs hidden-sm">
						<div class="row">
							<div class="col-sm-6 col-lg-4">
								<p>1. Inserisci il tuo <strong>codice fiscale</strong></p>
							</div>
							<div class="col-sm-6 col-lg-8">
								<div class="otpenabled" style="display:none">
									<p>2. Inserisci il tuo codice OTP <strong>ricevuto via SMS</strong></p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-lg-4">
						<label for="codiceFiscale">Codice fiscale</label>
                        <input type="text" name="codiceFiscale" value="" id="codiceFiscale" class="textinput form-control" maxlength="16" />
					</div>
					<div class="col-sm-6 col-lg-4">
						<div class="otpenabled" style="display:none">
							 <label for="otp">Codice OTP</label>
		                      <input type="text" name="otp" value="" id="otp" class="textinput form-control"/>
		                      <div class="nota"><a href="#" id="recuperaOtp">Rinvia codice OTP</a></div>
	                     </div>
					</div>
					<div class="col-sm-12 col-lg-4">
					 	<button id="btn-invia" class="btn-grlit btn-grlit-arrow btn-fs14 uppercase">Prosegui</button>
					</div>
				  </form>
                </div>
				
				<h4>Hai altri dubbi? Trova qui le tue risposte</h4>
                <div class="spacer"></div>
				<div class="domande">

					  <div class="domanda">
					    <h5>Come faccio a sapere se avete ricevuto il contratto e il bonifico di identificazione? <span class="espandi">Espandi</span><span class="comprimi">Comprimi</span></h5>
					    <p>Nell'area <b>Segui la pratica di apertura conto</b> trovi le date in cui riceviamo i documenti e i bonifici. Tieni presente che, di solito, riceviamo il contratto e i documenti circa una settimana dopo l'invio.
					    </p>
					  </div>

					  <div class="domanda">
					    <h5>Il bonifico di identificazione &egrave; stato stornato perch&eacute; manca il codice identificativo.
					Che cosa vuol dire? E che cosa faccio adesso? <span class="espandi">Espandi</span> <span class="comprimi">Comprimi</span></h5>
					    <p>Per fare l'identificazione gli intestatari del conto devono inserire il loro codice identificativo nella causale del bonifico. Se manca il codice, o se &egrave; sbagliato, il bonifico viene stornato e la somma riaccreditata sul conto di provenienza nel giro di una settimana.
					Per fare l'identificazione devi fare un altro bonifico. Trovi il codice identificativo sull'email che hai ricevuto dopo aver inviato la richiesta di apertura del conto e nella sezione Dati anagrafici del contratto.</p>
					  </div>

					  <div class="domanda">
					    <h5>Che cosa succede quando viene aperto il conto? <span class="espandi">Espandi</span> <span class="comprimi">Comprimi</span></h5>
					    <p>Ti avvisiamo via sms e via email. Sull'email trovi tutto quello che serve per gestire il conto e un riepilogo di quello che ricevi successivamente per posta. </p>
					  </div>

					  <div class="domanda">
					    <h5>Come e quando ricevo i codici di accesso al conto? <span class="espandi">Espandi</span> <span class="comprimi">Comprimi</span></h5>
					    <p>Se tutti gli intestatari hanno <b>confermato</b> il numero di <b>cellulare</b> e l'indirizzo <b>email</b> durante la richiesta, vi invieremo i codici di accesso (user ID e password iniziale) per sms ed email subito dopo l'apertura del conto. Diversamente te li invieremo per posta.
					Se, invece, i dati non sono stati confermati verr&agrave; richiesto <b>obbligatoriamente</b> di farlo al primo accesso.  </p>
					  </div>

					  <div class="domanda">
					    <h5>Posso fare i bonifici usando il codice IBAN che ho usato per il bonifico di identificazione? <span class="espandi">Espandi</span> <span class="comprimi">Comprimi</span></h5>
					    <p>No. L'IBAN che ti indichiamo per l'identificazione non &egrave; quello del tuo nuovo conto corrente. Puoi cominciare a fare versamenti sul tuo nuovo conto quando lo avremo aperto e ti avremo comunicato l'IBAN e tutte le altre coordinate bancarie.</p>
					  </div>

					  <div class="domanda">
					    <h5>Ho gi&agrave; fatto richiesta di Conto Webank. Posso togliere uno dei cointestatari? <span class="espandi">Espandi</span> <span class="comprimi">Comprimi</span></h5>
					    <p>No, non &egrave; possibile. Puoi fare la richiesta di apertura di un altro conto corrente.</p>
					  </div>

					  <div class="domanda">
					    <h5>Ho fatto il bonifico di identificazione: quando sar&agrave; versato sul mio conto? <span class="espandi">Espandi</span> <span class="comprimi">Comprimi</span></h5>
					    <p>Accreditiamo il bonifico sul tuo nuovo conto dopo circa una settimana dall'apertura. </p>
					  </div>

					  <div class="domanda">
					    <h5>Dove trovo il codice IBAN del mio Conto Webank? <span class="espandi">Espandi</span> <span class="comprimi">Comprimi</span></h5>
					    <p>Nell'email che ricevi subito dopo l'apertura del conto e sulla prima pagina del contratto. </p>
					  </div>

					  <div class="domanda">
					    <h5>Ho ricevuto il bancomat ma non posso attivarlo perch&eacute; non ho ancora i codici del conto corrente:
					come posso fare? <span class="espandi">Espandi</span> <span class="comprimi">Comprimi</span></h5>
					    <p>Ti chiediamo di avere un p&ograve; di pazienza e aspettare i codici di accesso. Per ragioni di sicurezza ti inviamo user ID e password, le carte e gli altri documenti in buste separate. Potresti riceverle in ordine diverso. Tieni presente che i tempi di consegna vanno da 7 a 10 giorni dalla spedizione. Una volta ricevuti i codici puoi fare l'accesso e attivare il bancomat seguendo le istruzioni che hai ricevuto insieme alla carta. </p>
					  </div>

					  <div class="domanda">
					    <h5>Avete aperto il mio conto. Quando posso ricevere libretto assegni e carta di credito?
					Quando trasferite i miei RID? <span class="espandi">Espandi</span> <span class="comprimi">Comprimi</span></h5>
					    <p>Puoi richiedere il libretto assegni e la carta di credito entrando in Webank con i codici di accesso. Ti avvisiamo via email quando le richieste vengono accettate dopo la valutazione della banca. Una volta aperto il nuovo conto puoi anche richiedere il trasloco dei tuoi addebiti diretti dal vecchio conto corrente. </p>
					  </div>

					</div>


				</div>

	</div>
	<!-- /colonna centrale -->




</div>
	</div> <!-- /container -->
</div>