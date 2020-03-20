<div id="mainSection">
	<script id="templateRows" type="text/x-jsrender" data-jsv-tmpl="jsvTmpl">
		<tr tmindex="0" role="row" class="odd tmrowsearch">
			<td>{{:RagioneSociale}}</td>
			<td class="text-center">
				{{if isAttivata}}
				Attivata
				{{else}}
				Attivabile
				{{/if}}
			</td>
			<td class="col-sm-2 center">
				{{if isAttivata}}
				&nbsp;
				{{else}}
				<button data-Identifier="{{:Identifier.Crypt}}" class="btn btn-primary invoice activetm" type="button">Attiva</button>
				{{/if}}
			</td>
		</tr>
	</script>
	<script id="rowHead" type="text/x-jsrender" data-jsv-tmpl="jsvTmpl">
		<tr role="row" class="">
			<th tabindex="0" rowspan="1" colspan="1" style="width: 0px;">Ragione Sociale</th>
			<th tabindex="0" rowspan="1" colspan="1" style="width: 0px;">Stato Azienda</th>
			<th tabindex="0" rowspan="1" colspan="1" style="width: 0px;">Richiedi Attivazione</th>
		</tr>
	</script>
	<script id="listItem" type="text/x-jsrender" data-jsv-tmpl="jsvTmpl">
		<div class="tabellaSelezioneCC">
			<div class="table-responsive tabSelezioneCC">
				<div class="dataTables_wrapper">
					<table class="table table-striped">
						<tbody>
							{{for Items tmpl="#templateRows"/}}
						</tbody>
						<thead>
							{{include tmpl="#rowHead"/}}
						</thead>
					</table>
				</div>
			</div>
		</div>
	</script>
	<script id="listItemEmpty" type="text/x-jsrender">
		<div class="tabellaSelezioneCC">
			<div class="table-responsive tabSelezioneCC">
				<div class="dataTables_wrapper">
					<table class="table table-striped">
						<tbody>
							<tr tmindex="0" role="row" class="odd tmrowsearch">
								<td colspan="3">Non ci sono Aziende</td>
							</tr>
						</tbody>
						<thead>
							{{include tmpl="#rowHead"/}}
						</thead>
					</table>
				</div>
			</div>
		</div>
	</script>



	<script type="text/javascript">

		$(function () {

			var localResources = {
				'exception':'Il servizio non &#232; al momento disponibile. Riprovare pi&#249; tardi.',
				'sdk.popup.button.chiudi': 'Annulla', //se voglio reimpostare il title del bottone Chiudi del popup
				'otp.Mismatch': 'Pin errato',
				'otp.BadCartStatus': 'Stato del carrello errato',
				'otp.BadRequestor': 'Richiedente errato',
				'otp.Disabled': 'Disattivato',
				'otp.NextToken':'Richiesto next token',
				'otp.Repeated': 'Passcode usato precedentemente',
				'otp.SystemError': 'Errore di sistema',
				'youinvoice.access.no.accounts': 'Non ci sono aziende abilitate',

	'RES_YI_ERR_VEBA00001':'VEBA00001: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00002':'VEBA00002: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00003':'VEBA00003: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00004':'VEBA00004: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00005':'VEBA00005: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00007':'VEBA00007: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00008':'VEBA00008: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00009':'VEBA00009: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00010':'VEBA00010: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00011':'VEBA00011: Il cliente risulta gi&#224; associato ad un prodotto YouInvoice',
	'RES_YI_ERR_VEBA00012':'VEBA00012: Si richiede di procedere con la richiesta di attivazione dal giorno successivo in quanto &#232; gi&#224; in corso nella giornata  una chiusura Youinvoice per questa azienda',
	'RES_YI_ERR_VEBA00013':'VEBA00013: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00014':'VEBA00014: La categoria economica associata all&#39; azienda che sta effettuando la richiesta di attivazione al servizio non &#232; attualmente abilitata. Rivolgersi alla filiale.',
	'RES_YI_ERR_VEBA00015':'VEBA00015: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00016':'VEBA00016: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00017':'VEBA00017: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00018':'VEBA00018: Anomalia nel recupero dei dati anagrafici, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00019':'VEBA00019: Anomalia nel recupero dei dati anagrafici, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00020':'VEBA00020: Anomalia nel recupero dei dati anagrafici, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00021':'VEBA00021: Anomalia nel recupero dei dati anagrafici, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00022':'VEBA00022: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00023':'VEBA00023: Anomalia nel recupero dei dati anagrafici, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00024':'VEBA00024: Anomalia nel recupero dei dati anagrafici, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00025':'VEBA00025: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00026':'VEBA00026: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00027':'VEBA00027: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00028':'VEBA00028: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00029':'VEBA00029: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00030':'VEBA00030: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00031':'VEBA00031: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00032':'VEBA00032: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00033':'VEBA00033: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00034':'VEBA00034: L&#39; azienda per cui si sta facendo l&#39;attivazione del servizio &#232; catalogata come persona Fisica. Non e&#39; possibile procedere con l&#39;attivazione. Rivolgersi alla filiale',
	'RES_YI_ERR_VEBA00035':'VEBA00035: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA00036':'VEBA00036: &quot;Servizio non attivabile con l&#39; utenza utilizzata, devono essere verificati i poteri di firma presenti in anagrafe. Contattare l&#39; Assistenza Clienti&quot;',
	'RES_YI_ERR_VEBA08888':'VEBA08888: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti',
	'RES_YI_ERR_VEBA09999':'VEBA09999: Si &#232; verificato un problema tecnico, contattare l&#39; Assistenza Clienti'




			};
			sdk.resource.set(localResources);


		});
	</script>

	<div id="679c8686b0ea4707b0be13adde366df1_1" style="">

		<div id="esitoMain">

			<div id="areaAziende" style="">
				<div class="riquadro clearfix">
					<div class="clearfix">
						<div class="flag riepilogo">&nbsp;</div>
						<h1>Attivazione YouInvoice</h1>
					</div>
					
	<div id="679c8686b0ea4707b0be13adde366df1_2" style="display: none;">
		<div id="errorPanel" class="col-xs-12 messagePanel error" style="display: none; margin-bottom: 0; margin-top: 0;">
			<h3 class="titleSection">Errore</h3>
			<p>
				</p><ul id="message"></ul>
			<p></p>
		</div>

		<div id="warnPanel" class="col-xs-12 messagePanel waiting" style="display: none; margin-bottom: 0; margin-top: 0;">
			<h3 class="titleSection">Attenzione</h3>
			<p>
				</p><ul id="message"></ul>
			<p></p>
		</div>
		<div id="infoPanel" class="col-xs-12 messagePanel alert" style="display: none; margin-bottom: 0; margin-top: 0;">
			<h3 class="titleSection">Attenzione</h3>
			<p>
				</p><ul id="message"></ul>
			<p></p>
		</div>
		<div id="successPanel" class="col-xs-12 messagePanel success" style="display: none; margin-bottom: 0; margin-top: 0;">
			<h3 class="titleSection">Esito operazione</h3>
			<p>
				</p><ul id="message"></ul>
			<p></p>
		</div>


		<script type="text/javascript">
			$(function() {
				var me = $('#679c8686b0ea4707b0be13adde366df1_2');

				var errorPanel = $('#errorPanel', me);
				var warnPanel = $('#warnPanel', me);
				var infoPanel = $('#infoPanel', me);
				var successPanel = $('#successPanel', me);


				var hideAll = function() {
					errorPanel.hide();
					warnPanel.hide();
					infoPanel.hide();
					successPanel.hide();
				};

				var getTargetPanel = function(errorObject) {
					var toRet = errorPanel;
					// in base a cosa capisco quale pannello devo aprire o chiudere ?
					if (errorObject && errorObject.Messages) {
						
						switch (errorObject.Messages[0].Severity) {
							case 1:
								toRet = infoPanel;
								break;
							case 2:
								toRet = warnPanel;
								break;
							case 3:
								toRet = errorPanel;
								break;
							case 4:
								toRet = successPanel;
								break;
							default:
								toRet = errorPanel;
						}
					}
					// in base a cosa capisco quale pannello devo aprire o chiudere ?
					return toRet;
				};

				var messageBuilder = function (errorObject) {
					if (!errorObject)
						return '';
					var resource = errorObject.ResourceKey || errorObject.ErrorMessageRes || errorObject.MessageRes;
					var message = errorObject.Message || errorObject.ErrorMessage;
					if (resource) {
						var toRet = sdk.resource.get(resource);
						if (toRet.formatUnicorn && errorObject.ResourceFormatParameters) {
							toRet = toRet.formatUnicorn(errorObject.ResourceFormatParameters);
						}
						return toRet;
					} else {
						return message;
					}

				};

				var showMessage = function (errorObject) {

					hideAll();
					if (errorObject && errorObject.Messages) {
						var targetPanel = getTargetPanel(errorObject);
						var strMsg = '';
						$.each(errorObject.Messages,
							function (i, data) {
								strMsg += '<li>' + messageBuilder(data) + '</li>';
							});
						$('#message', targetPanel).html(strMsg);
						targetPanel.show();
						me.show();
						window.location.href = '#679c8686b0ea4707b0be13adde366df1_2';
					} else {
						//TODO: aggiunta David chiedere conferma!!!
						var targetPanel1 = getTargetPanel(errorObject);
						var strMsg1 = '';
						strMsg1 += '<li>Errore generico</li>';
						$('#message', targetPanel1).html(strMsg1);
						targetPanel1.show();
						me.show();
						window.location.href = '#679c8686b0ea4707b0be13adde366df1_2';
					}
				};

				var show = function() {
					me.show();
				};

				var hide = function() {
					me.hide();
				};


				hide();

				sdk.utils.pubsub.register('messagePanel.renderError', showMessage);
				sdk.utils.pubsub.register('messagePanel.hide', hide);
				sdk.utils.pubsub.register('messagePanel.show', show);


			});
		</script>
	</div>


					<div class="section clearfix">
						<h3 class="titleSection">Elenco Aziende</h3>
					</div>

					<div id="listAziende" style="display: block;"><div class="tabellaSelezioneCC">
			<div class="table-responsive tabSelezioneCC">
				<div class="dataTables_wrapper">
					<table class="table table-striped">
						<tbody>
							
		<tr tmindex="0" role="row" class="odd tmrowsearch">
			<td>AUTOMOBILE CLUB MODENA</td>
			<td class="text-center">
				
				Attivabile
				
			</td>
			<td class="col-sm-2 center">
				
				<button data-identifier="GxaOCnTcXcRH/lS/UbPDi+z3P1IvXIXliCiJV+iCss3SoXvEA8MYXTndJUKSNmVx" class="btn btn-primary invoice activetm" type="button">Attiva</button>
				
			</td>
		</tr>

						</tbody>
						<thead>
							
		<tr role="row" class="">
			<th tabindex="0" rowspan="1" colspan="1" style="width: 0px;">Ragione Sociale</th>
			<th tabindex="0" rowspan="1" colspan="1" style="width: 0px;">Stato Azienda</th>
			<th tabindex="0" rowspan="1" colspan="1" style="width: 0px;">Richiedi Attivazione</th>
		</tr>

						</thead>
					</table>
				</div>
			</div>
		</div></div>

				</div>
			</div>

			<div id="areaPinPad" style="display:none">
				<div class="riquadro clearfix">
					<div class="clearfix">
						<div class="flag riepilogo">&nbsp;</div>
						<h1>Accettazione Disclaimer</h1>
					</div>
					
	<div id="679c8686b0ea4707b0be13adde366df1_3" style="display: none;">
		<div id="errorPanel" class="col-xs-12 messagePanel error" style="display: none; margin-bottom: 0; margin-top: 0;">
			<h3 class="titleSection">Errore</h3>
			<p>
				</p><ul id="message"></ul>
			<p></p>
		</div>

		<div id="warnPanel" class="col-xs-12 messagePanel waiting" style="display: none; margin-bottom: 0; margin-top: 0;">
			<h3 class="titleSection">Attenzione</h3>
			<p>
				</p><ul id="message"></ul>
			<p></p>
		</div>
		<div id="infoPanel" class="col-xs-12 messagePanel alert" style="display: none; margin-bottom: 0; margin-top: 0;">
			<h3 class="titleSection">Attenzione</h3>
			<p>
				</p><ul id="message"></ul>
			<p></p>
		</div>
		<div id="successPanel" class="col-xs-12 messagePanel success" style="display: none; margin-bottom: 0; margin-top: 0;">
			<h3 class="titleSection">Esito operazione</h3>
			<p>
				</p><ul id="message"></ul>
			<p></p>
		</div>


		<script type="text/javascript">
			$(function() {
				var me = $('#679c8686b0ea4707b0be13adde366df1_3');

				var errorPanel = $('#errorPanel', me);
				var warnPanel = $('#warnPanel', me);
				var infoPanel = $('#infoPanel', me);
				var successPanel = $('#successPanel', me);


				var hideAll = function() {
					errorPanel.hide();
					warnPanel.hide();
					infoPanel.hide();
					successPanel.hide();
				};

				var getTargetPanel = function(errorObject) {
					var toRet = errorPanel;
					// in base a cosa capisco quale pannello devo aprire o chiudere ?
					if (errorObject && errorObject.Messages) {
						
						switch (errorObject.Messages[0].Severity) {
							case 1:
								toRet = infoPanel;
								break;
							case 2:
								toRet = warnPanel;
								break;
							case 3:
								toRet = errorPanel;
								break;
							case 4:
								toRet = successPanel;
								break;
							default:
								toRet = errorPanel;
						}
					}
					// in base a cosa capisco quale pannello devo aprire o chiudere ?
					return toRet;
				};

				var messageBuilder = function (errorObject) {
					if (!errorObject)
						return '';
					var resource = errorObject.ResourceKey || errorObject.ErrorMessageRes || errorObject.MessageRes;
					var message = errorObject.Message || errorObject.ErrorMessage;
					if (resource) {
						var toRet = sdk.resource.get(resource);
						if (toRet.formatUnicorn && errorObject.ResourceFormatParameters) {
							toRet = toRet.formatUnicorn(errorObject.ResourceFormatParameters);
						}
						return toRet;
					} else {
						return message;
					}

				};

				var showMessage = function (errorObject) {

					hideAll();
					if (errorObject && errorObject.Messages) {
						var targetPanel = getTargetPanel(errorObject);
						var strMsg = '';
						$.each(errorObject.Messages,
							function (i, data) {
								strMsg += '<li>' + messageBuilder(data) + '</li>';
							});
						$('#message', targetPanel).html(strMsg);
						targetPanel.show();
						me.show();
						window.location.href = '#679c8686b0ea4707b0be13adde366df1_3';
					} else {
						//TODO: aggiunta David chiedere conferma!!!
						var targetPanel1 = getTargetPanel(errorObject);
						var strMsg1 = '';
						strMsg1 += '<li>Errore generico</li>';
						$('#message', targetPanel1).html(strMsg1);
						targetPanel1.show();
						me.show();
						window.location.href = '#679c8686b0ea4707b0be13adde366df1_3';
					}
				};

				var show = function() {
					me.show();
				};

				var hide = function() {
					me.hide();
				};


				hide();

				sdk.utils.pubsub.register('messagePanel.renderError', showMessage);
				sdk.utils.pubsub.register('messagePanel.hide', hide);
				sdk.utils.pubsub.register('messagePanel.show', show);


			});
		</script>
	</div>

					<div class="clearfix"></div>

					<div style="padding-left: 10px;">
						<br>
	<div class="contentPagina">
		<div class="clearfix">
			<p>Informativa per l'accesso e l'utilizzo del Servizio YouInvoice - profilatura "Base" </p>
		</div>
		<div class="clearfix">
			<div class="clearfix">Gentile Cliente</div>
			nell’ambito del Servizio "YouBusiness Web", la Banca mette <strong>gratuitamente</strong> a Sua disposizione un servizio denominato YouInvoice con profilatura "Base" (di seguito: "Servizio"), fruibile attraverso il portale di YouInvoice e avente funzionalità di base per la gestione in <strong>formato elettronico</strong> delle fatture emesse e ricevute.
		</div>
		<br>
		<div class="clearfix">
			La presente informativa, che La preghiamo di esaminare accuratamente descrive sinteticamente le caratteristiche essenziali e le condizioni di utilizzo del Servizio, fermo restando che per gli ulteriori dettagli operativi si rinvia al Manuale Utente del Servizio presente nel menù "Voci di Menù" di YouInvoice.
			<br>Resta espressamente inteso che l’utilizzo del Servizio implica la piena conoscenza della presente informativa e che, con la presa visione della stessa, se ne accettano integralmente i contenuti.
		</div>
		<br>
		<div class="clearfix">
			La funzionalità è fruibile previa autenticazione, come di consueto, al Servizio "YouBusiness Web" accedendo al menù YouInvoice presente sotto la voce  "Documenti e Fatture"; in questo modo Le sarà consentito:
		</div>
		<div class="clearfix">
			<ul>
				<li class="col-xs-11">Compilare (in modalità data entry o importando un flusso) tutti i dati necessari per la generazione di <strong>Fatture Elettroniche Attive</strong> in formato digitale "XML", aggiornato alle regole tecniche per la predisposizione dei dati delle fatture emesse tempo per tempo previste a norma di legge, il cui flusso potrà essere esportato su proprio supporto; </li>
				<li class="col-xs-11">Ottenere la ricezione, direttamente all’interno del Servizio, delle <strong>Fatture Elettroniche Passive</strong> trasmesse dai Suoi fornitori, previa comunicazione agli stessi di un apposito "codice destinatario" che Le verrà assegnato seguendo le istruzioni indicate nel Manuale Utente del Servizio. Ricevute le fatture, potrà disporne il pagamento, tramite i consueti canali di pagamento messi a disposizione dal Servizio "YouBusiness Web".</li>
			</ul>
		</div>

		<br>
		<div class="clearfix">
			Per i dettagli operativi sulle modalità di compilazione e di esportazione dei flussi elettronici, di ricezione degli stessi e per l’assegnazione del "codice destinatario", può consultare il Manuale Utente del Servizio.
		</div>
		<br>
		<div class="clearfix">
			Nei limiti di quanto riportato nella presente informativa, nel Manuale Utente del Servizio e nelle condizioni di contrattuali che regolano il Servizio "YouBusiness Web", la Banca Le concede una licenza limitata, non esclusiva, non cedibile, non trasferibile, gratuita, di fruire del Servizio per le finalità sopra indicate.
		</div>
		<br>
		<div class="clearfix">
			Richiamiamo, tuttavia, la Sua attenzione sulla circostanza che le funzionalità di gestione delle fatture accessibili tramite il Servizio <strong style="text-decoration: underline;">non integrano il ciclo completo della fatturazione elettronica attiva e passiva</strong>. Per la trasmissione delle fatture elettroniche attive e la conservazione a norma delle fatture elettroniche attive e passive – obbligatoria in caso di utilizzo di "fatturazione elettronica" – Lei dovrà dotarsi di ulteriori piattaforme, reperibili sul mercato, come pure a Sua scelta sottoscrivere l’apposito upgrade del servizio offerto dalla Banca, denominato "YouInvoice" con profilatura "Plus", che sarà disciplinato da apposito contratto. Per ricevere ulteriori informazioni in merito al servizio di gestione documentale completo può recarsi presso la Sua Filiale o richiedere informazioni tramite il portale pubblico <span style="color:#a7cea7">www.YouInvoice.it</span>.
			<br>Con l’utilizzo del Servizio, Lei prende atto ed accetta che la fruizione delle funzionalità correlate allo stesso potrà essere oggetto di sospensione o interruzione, in tutto o in parte, del Servizio, sia per consentire interventi tecnici di natura ordinaria o straordinaria, sia per cause di forza maggiore o che esulino dal controllo della Banca.
		</div>
		<br>
		<div class="clearfix">
			In virtù di esigenze di carattere tecnico, la Banca si riserva, inoltre, la facoltà di modificare le caratteristiche e le funzionalità del Servizio anche senza preavviso o Sua preventiva accettazione.
		</div>
		<br>
		<div class="clearfix">
			Resta inteso che la Banca non risponderà in alcun modo della correttezza dei dati inseriti nell’applicazione, garantendo esclusivamente la corrispondenza tra quanto inserito e ricevuto dalla piattaforma e quanto presente nel documento elettronico, e restando essa estranea: i) ai dati comunque da Lei trattati tramite il Servizio; ii) alle esigenze e/o alle finalità per cui il Servizio viene da Lei utilizzato; iii) ai rapporti da Lei intrattenuti con soggetti terzi in relazione o in connessione con i dati comunque trattati tramite il Servizio. 
			<br>Resta inteso altresì che Lei resta unico responsabile e in via esclusiva della correttezza, liceità, completezza e accuratezza dei dati comunque trattati attraverso l’utilizzo del Servizio e Titolare del trattamento di tutti i dati personali che elabora attraverso l’interfaccia web. 
		</div>
		<br>
		<div class="clearfix">
			Fatti salvi i limiti inderogabili di legge, la Banca declina ogni responsabilità per danni di qualsivoglia genere e natura, diretti e indiretti, ivi inclusa la perdita dei dati di Sua titolarità, che Le dovessero derivare dall’utilizzo del Servizio. 
		</div>
		<br>
		<div class="clearfix">
			Tutti i diritti di proprietà intellettuale sul Servizio, sul software che ne sta alla base e sul portale web attraverso cui esso è fruibile sono e restano di proprietà della Banca e/o dei suoi eventuali aventi causa.
		</div>
		<br>
		<div class="clearfix">
			Segnaliamo infine che la dismissione per qualsiasi motivo del Servizio "YouBusiness Web" comporterà, in assenza di preventivo salvataggio dei dati presenti nel Servizio, come eventuali flussi di fatturazione inseriti o ricevuti al momento della dismissione, la perdita degli stessi. Resta, in tal caso, espressamente inteso che nessuna responsabilità potrà essere attribuita alla Banca.
		</div>
	</div>
					</div>

					<div>
						<div class="section clearfix">
							<h3 class="titleSection">Conferma Disclaimer</h3>
							<div class="bs-example form-horizontal">
								<div class="form-group">
									<div class="col-xs-12">
										<div id="pinpadHolder"></div>
										
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="pull-right margin-bottom20">
					<input name="btnAccedi" id="btnAccedi" class="btn btn-primary  disabled" type="button" value="Accedi">
				</div>
			</div>

			<div id="areaEsito" style="display: none;">
				
	<div id="679c8686b0ea4707b0be13adde366df1_4">
		<div class="riquadro clearfix">
			<div class="clearfix">
				<div class="flag riepilogo">&nbsp;</div>
				<h1>Esito Attivazione</h1>
			</div>
			<div id="connectionok">
				<div class="col-xs-12 messagePanel success" style="display: block; display: inline; margin-bottom: 0;margin-top: 0;">
					<h3 class="titleSection">Esito operazione</h3>
					<p><strong>L'attivazione dell'azienda è stata correttamente portata a termine</strong></p>
				</div>
			</div>
		</div>
		<div class="pull-right margin-bottom20">
			<input name="btnTornaAttivazione" id="btnTornaAttivazione" class="btn btn-primary " type="button" value="TORNA ALL'ATTIVAZIONE">
			<input name="btnAccediYouInvoice" id="btnAccediYouInvoice" class="btn btn-primary " type="button" value="ACCEDI A YOUINVOICE">
		</div>
		<script type="text/javascript">
			$(function () {
				var me = $('#679c8686b0ea4707b0be13adde366df1_4');
				$("#btnTornaAttivazione", me).click(function () {
					var destination = {urlmenu: '/Youbiz.Sdk.Web/YouInvoice/Attiva'};
					sdk.utils.navigateFormByParamUrlMenu(destination);
				});

				$("#btnAccediYouInvoice", me).click(function () {
					var destination = {urlmenu: '/Youbiz.Sdk.Web/YouInvoice/Home'};
					sdk.utils.navigateFormByParamUrlMenu(destination);
				});
			});
		</script>
	</div>

			</div>

		</div>

		<script type="text/javascript">


			$(function() {

				var me = $('#679c8686b0ea4707b0be13adde366df1_1');
				var _internalParameterSetCart;
				var urls = {
					'urlElencoAziende': '/Youbiz.Sdk.Web/YouInvoice/AttivaService/ListAziende',
					'urlPreparaCarrello': '/Youbiz.Sdk.Web/YouInvoice/AttivaService/SetCart',
					'urlConferma': '/Youbiz.Sdk.Web/YouInvoice/AttivaService/Activate'
				};
				var areaPinPad = $('#areaPinPad', me);
				var areaAziende = $('#areaAziende', me);
				var areaEsito = $('#areaEsito', me);
				var elencoPanelAziende = $("#listAziende", me);

				//Funzione interna per fixedpathimageotp
				var _internalFixedParam = function (inputParam, changeParam) {
					if (inputParam) {
						return inputParam.replace(/9999/g, changeParam);
					}
					return inputParam;
				};
				//Funzione che nasconde tutte le areee
				var hideAllArea = function () {
					areaAziende.hide();
					areaPinPad.hide();
					areaEsito.hide();
					elencoPanelAziende.hide();
					elencoPanelAziende.html();
					$("#btnAccedi", me).addClass("disabled");
					$(".btn.btn-primary.activetm", me).removeClass('disabled');
				};

				var showEsito = function (parameter) {
					sdk.utils.pubsub.send('youinvoice.hideAllArea', hideAllArea);
					if (parameter) {
						if (parameter.Value == true) {
							areaEsito.show();
						} else {
							//????
						}
					}
				};

				var showPinPad = function (paramCartInfo) {
					var holder = $("#pinpadHolder", me);
					holder.empty();
					holder.html('<div id="pinpad"><input id="field-otp-hidden" /></div>');
					//debugger;
					/*
						Tipi di pinpad:
							0:pinpad tipo old
							1:pinpad Tipo new
							2:pinpad Tipo Testuale
					*/
					sdk.utils.pubsub.send('youinvoice.hideAllArea', hideAllArea);


					//$("#field-otp-hidden", me)[0].value = "";
					var secType = 9999;
					if (paramCartInfo.SecureType != null) {
						secType = paramCartInfo.SecureType;
					}
					var inputPathTokenImage = _internalFixedParam('/Youbiz.Sdk.Web/Contents/00000/it-IT/Images/pp/dispositivo_9999.gif?v=117', secType);

					if (paramCartInfo != null) {
						paramCartInfo.pinpadMode = 0;
						paramCartInfo.pathTokenImg = inputPathTokenImage;
					}

					var paramOptions = {
						cartInfo: paramCartInfo,
						pinpadDisclaimer: ' Attiva Azienda ',
						idInputHidden: "field-otp-hidden",
						param: { ctrPinLenght: function (bEnabled) { if (bEnabled) { $("#btnAccedi", me).removeClass('disabled'); } else { $("#btnAccedi", me).addClass('disabled');};}}
					}
					$("#pinpad", me).pinpadnew(paramOptions);

					areaPinPad.show();


					$("#btnAccedi", me).click(function () {
						//debugger;
						var valueToSubmit = $("#field-otp-hidden", me);
						var param = { otpCode: valueToSubmit[0].value };
						sdk.net.json(urls.urlConferma,
							param,
							{
								successHandler: function (caller, data, jsonResponse, warningObject) {
									sdk.utils.pubsub.send('youinvoice.showEsito', jsonResponse);
								},
								errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
									sdk.utils.pubsub.send('youinvoice.setCart', _internalParameterSetCart);
									//debugger;
									sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
								}
							});
					});


				};

				//Chiamata alla set carrello e se ok chiama area PinPad
				var setCart = function (parameter) {
					//debugger;
					sdk.utils.pubsub.send('messagePanel.hide');
					var newParam = { Attivabili: [{ Identifier: { Crypt: parameter } }] };
					sdk.net.json(urls.urlPreparaCarrello,
						newParam,
						{
							successHandler: function (caller, data, jsonResponse, warningObject) {
								//debugger;
								sdk.utils.pubsub.send('youinvoice.showPinPad', jsonResponse);
							},
							errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
								//debugger;
								sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
								$(".btn.btn-primary.activetm", me).removeClass('disabled');
							}
						});
				};

				var showAziende = function (aziende) {
					elencoPanelAziende.html();
					elencoPanelAziende.show();

					//aziende = [];

					if (aziende) {
						var arrayAziende = { 'Items': [] };
						if (aziende.Attivate != null) {
							$(aziende.Attivate).each(function (index, value) {
								value.isAttivata = true;
								arrayAziende.Items.push(value);
							});
						}
						if (aziende.Attivabili != null) {
							$(aziende.Attivabili).each(function (index, value) {
								value.isAttivata = false;
								arrayAziende.Items.push(value);
							});
						}

						var templateListaAziende;
						if (arrayAziende.Items.length > 0) {
							templateListaAziende = $.templates("#listItem");
						} else {
							templateListaAziende = $.templates("#listItemEmpty");//Attivo template con "nessuna azienda aziende"
						}
						var htmlListaAziende = '';
						htmlListaAziende = $(templateListaAziende.render(arrayAziende));

						//Catturo evento bottone attiva
						var action = {
							attivaItems: function (parameter) {
								_internalParameterSetCart = parameter;
								sdk.utils.pubsub.send('youinvoice.setCart', parameter);
							}
						}
						$(".btn.btn-primary.activetm", htmlListaAziende).on("click", function () {
							$(this).addClass('disabled');
							var data = $(this).attr('data-Identifier');
							action.attivaItems(data);
						});
						elencoPanelAziende.html(htmlListaAziende);
					} else {

						var templateListaAziende = $.templates("#listItemEmpty");//Attivo template con "nessuna azienda aziende"
						var htmlListaAziende = '';
						htmlListaAziende = $(templateListaAziende.render({ 'Items': [] }));
						elencoPanelAziende.html(htmlListaAziende);
					}

				}

				var listAziende = function () {
					sdk.utils.pubsub.send('messagePanel.hide');
					sdk.utils.pubsub.send('youinvoice.hideAllArea', hideAllArea);

					sdk.net.json(urls.urlElencoAziende,
						null,
						{
							successHandler: function (caller, data, jsonResponse, warningObject) {
								sdk.utils.pubsub.send('youinvoice.showAziende', jsonResponse);
								areaAziende.show();
							},
							errorHandler: function (response, jqXHR, textStatus, errorThrown, errorObject) {
								areaAziende.show();
								sdk.utils.pubsub.send('messagePanel.renderError', errorObject);
							}
						});
				};

				me.show();


				//AREA REGISTER
				sdk.utils.pubsub.register('youinvoice.hideAllArea', hideAllArea);
				sdk.utils.pubsub.register('youinvoice.getListaAziende', listAziende);
				sdk.utils.pubsub.register('youinvoice.showAziende', showAziende);
				sdk.utils.pubsub.register('youinvoice.setCart', setCart);
				sdk.utils.pubsub.register('youinvoice.showPinPad', showPinPad);
				sdk.utils.pubsub.register('youinvoice.showEsito', showEsito);
				//AREA REGISTER

				//AREA SEND
				sdk.utils.pubsub.send('youinvoice.getListaAziende');
				//AREA SEND

				//hideAllArea();
				//listAziende();

			});





		</script>

	</div>
</div>