<section>
    <div class="titolo">
        <h1>
            <div class="row">
                <div class="col-sm-8">
                    <!-- TITOLO -->
                    <span>Conferma proposte di consulenza</span>
                    <!-- /TITOLO -->
                </div>
            </div>
        </h1>
    </div>
</section>
<div class="wrapper-app-style">
<section>
    <p>Di seguito puoi aprire ed esaminare le varie sezioni di approfondimento e compilare i campi necessari per proseguire.</p>
</section>
<section>
   <! --NUOVO STEPPER  -->
   <div class="box-stepper">
		<div class="row noMargin">
			<div class="col-xs-12 col-sm-12">
                <div class="row box-txt-stepper">
					<div class="col-xs-3 txt-stepper done"><span>Proposta</span></div>
					<div class="col-xs-3 txt-stepper attivo"><span>Approfondimenti</span></div>
					<div class="col-xs-3 txt-stepper"><span>Firma</span></div>
					<div class="col-xs-3 txt-stepper"><span>Conclusione</span></div>
				</div>
				<div class="row box-number-stepper">
                    <div class="col-xs-3 number-stepper done"><span>1</span></div>
                    <div class="col-xs-3 number-stepper attivo"><span>2</span></div>
                    <div class="col-xs-3 number-stepper"><span>3</span></div>
                    <div class="col-xs-3 number-stepper"><span>4</span></div>
                </div>
                <div class="row box-line-stepper">
                    <div class="col-xs-3 col-sm-3 line-stepper done"></div>
                    <div class="col-xs-3 col-sm-3 line-stepper"></div>
                    <div class="col-xs-3  col-sm-3 line-stepper"></div>
                    
                </div> 
			</div>
		</div>
	</div>
</section>

<form id="formProposta" method="post" action="/WEBHT/investimenti/consulenza/propostaConfermaVerifica.do">
	<section>
	<div class="formWrapper">
		<section>
			<div class="form-group">
				<div class="table-responsive"> 
					<table class="table table-striped dataTable no-footer" role="grid">
						<colgroup>
							<col width="40%">
							<col width="20%">
							<col width="20%">
							<col width="20%">
						</colgroup>
						<thead>
							<tr>
								<th>Servizio</th>
								<th>Numero proposta</th>
								<th class="oCenter">Data proposta</th>
								<th class="oCenter">Data scadenza</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd">
								<td>
									SCLAVO MAURO/ZWIRNER MARIA EMMA
								</td>
								<td>85</td>
								<td class="oCenter">03/08/2020</td>
								<td class="oCenter">07/08/2020</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</section>
		<section>
			<!-- DOWNLOAD PDF PER MOBILE -->
			<div id="downloadPdfMobile" style="display: none;">
					<p>Puoi scaricare e salvare sul tuo device una copia PDF dell'Informativa Pre Ordine:</p>
					<div class="alignCenter">
						<a target="_blank" href="/WEBHT/investimenti/consulenza/propostaDownloadPdf?tipoDocumento=IPO">
							<i class="icon icon-file_pdf_fill colorVer"></i> 
							<span class="btnLink">
							   Informativa Pre Ordine 85
							</span>
						</a>
					</div>
			</div>
		</section>
		<!-- SEZIONE CON SLIDER -->
		<div id="accordion" class="accordion nosort ui-accordion ui-widget ui-helper-reset" role="tablist">
			<h3 class="infoPreOrdine ui-accordion-header ui-state-default ui-accordion-icons ui-accordion-header-active ui-state-active ui-corner-top" role="tab" accordion="true" id="ui-id-31" aria-controls="ui-id-32" aria-selected="true" aria-expanded="true" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span>
				<i class="icon icon-3x icon-accordion_down"></i>
				<i class="icon icon-3x icon-accordion_up"></i>
				<a href="#">Informativa sugli ordini</a>
			</h3>
			<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" role="tabpanel" id="ui-id-32" aria-labelledby="ui-id-31" aria-hidden="false" style="display: block;">
				<div class="row">
					<div class="col-sm-9 col-xs-12">
						<div class="divForm" id="propostaconsulenza">
							 <div id="documentoPDF" style="margin-bottom:10px;">
								<iframe scrolling="yes" allowfullscreen="" webkitallowfullscreen="" id="embedId" title="Informativa Pre-Ordine" src="/WEBHT/investimenti/consulenza/propostaDownloadPdf?type=inline&amp;tipoDocumento=IPO" style="height: 400px;width: 100%;"></iframe>
							</div>
						</div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="formGenerico">
                            <div class="form-group form-field-input">
                                <label for="informativaPreOrdine">
                                    <input class="flLeft" type="checkbox" name="informativaPreOrdine" value="on">
                                    <span class="flLeft text-checkbox">
                                        Dichiaro di aver preso atto delle avvertenze riportate sul documento "Informativa sugli ordini"
                                    </span>
                                </label>
                                <label for="kidFlag1">
                                    <input class="flLeft" type="checkbox" name="kidFlag1" value="on" disabled="disabled" id="kidFlag1">
                                    <span class="flLeft text-checkbox">
                                        Dichiaro di aver preso visione del documento sintetico dello strumento contenente le informazioni chiave (KID/KIID) e di averne acquisito copia su supporto duraturo.
                                    </span>
                                </label>
                                <div class="documenti format-spunta">
								<ul>
									<li>
										<a target="_blank" class="moduloKid" data-clicked="false" href="#">
											<span class="glyph glyph-uread_pdf" title="glyph-uread_pdf"></span>
											<span class="glyph glyph-read_pdf" title="glyph-read_pdf"></span>
											<span class="text">Informazione Chiave (KID/KIID IT0005086191)</span>
										</a>
									</li>
									<li>
										<a target="_blank" class="moduloKid" data-clicked="false" href="#">
											<span class="glyph glyph-uread_pdf" title="glyph-uread_pdf"></span>
											<span class="glyph glyph-read_pdf" title="glyph-read_pdf"></span>
											<span class="text">Informazione Chiave (KID/KIID IT0005126815)</span>
										</a>
									</li>
								</ul>
                                </div>
                            </div>
                           
                        </div>
					</div>
				</div>
			</div>
			<h3 class="adeguataVerifica ui-accordion-header ui-state-default ui-accordion-icons ui-corner-all" role="tab" accordion="true" id="ui-id-33" aria-controls="ui-id-34" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
				<i class="icon icon-3x icon-accordion_down"></i>
				<i class="icon icon-3x icon-accordion_up"></i>
				<a href="#">Normativa Antiriciclaggio</a>
			</h3>
			<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" role="tabpanel" id="ui-id-34" aria-labelledby="ui-id-33" aria-hidden="true" style="display: none;">
				<section>
					<input type="hidden" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.pepIniziale" id="pepIniziale0" value="false">
					<div class="formWrapper">
						<!-- PREAMBOLO -->
						<div class="form-group">
							<h3 class="titleSection titleForm">
								Normativa antiriciclaggio
							</h3>
						</div>
						<!-- IN CASO NON SIA INSERITO IL NOME NON MOSTRO IL MESSAGGIO -->
						<h3 class="titleSection labelIntestazioneSelezioneCC">ZWIRNER MARIA EMMA</h3>
								<span>Gentile ZWIRNER MARIA EMMA,</span>
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12">
									<p>Ai fini della normativa antiriciclaggio (D-Lgs. 231/07 e successive integrazioni e modifiche) sei tenuto a fornire alcune informazioni
										<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=2543')" class="text-underline btn-icon hidden-xs">obbligatorie</a>
		
											<script type="text/javascript">
										$(function() {
											if ($("#helpDialog").length==0) {
												var helpDialog = $("<div>", {
														"class": "modal fade helpDialog",
														"id": "helpDialog",
														"tabindex": "-1",
														"role": "dialog",
														"aria-labelledby": "myLargeModalLabel"});
												var modalContent = $("<div>").addClass("modal-content");
												helpDialog.append($("<div>").addClass("modal-dialog")
														.append(modalContent));
												modalContent.append($("<div>").addClass("modal-header clearfix")
														.append($("<button>", {
															"type": "button",
															"class": "close",
															"data-dismiss": "modal",
															"aria-label": "Close"})
															.append($("<span>", {
																"aria-hidden":"true"}).html("&times;"))));
												modalContent.append($("<div>").addClass("modal-body"));
												$("body").prepend(helpDialog);
											}
										});
										</script>
										relative ai rapporti da te intrattenuti con la Banca.<br><br>La normativa sopra citata impone ai clienti di fornire tutte le informazioni necessarie e aggiornate e prevede sanzioni penali a loro carico nel caso in cui le stesse siano false. </p>
								</div>
						</div>
						<!-- FINE PREAMBOLO -->
						<!--SCOPO PREVALENTE DEL RAPPORTO, CASO YW E CASO WB -->
						<div class="form-group">		
							<div class="row">
								<div class="form-field-input col-sm-6 col-xs-12">
									<label class="control-label" for="scopo0">Scopo prevalente del rapporto Fondi</label>
									<select id="scopo0" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.valoreSpecificoRapporto[0].rispostaSelezionata" "="" class="fixed-size form-control">
											<option value="">Seleziona</option>
											
												<option value="01">
													Risparmio
												</option>
											
												<option value="02">
													Finanziamento
												</option>
											
												<option value="03">
													Investimento
												</option>
											
												<option value="04">
													Servizi vari
												</option>
											
												<option value="05">
													Gestione necessità familiari
												</option>
											
										</select>
								</div>
								<div class="form-field-input col-sm-6 col-xs-12">
									<label class="control-label" for="scopo0">Scopo prevalente del rapporto Sicav</label>
									<select id="scopo0" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.valoreSpecificoRapporto[1].rispostaSelezionata" "="" class="fixed-size form-control">
											<option value="">Seleziona</option>
											
												<option value="01">
													Risparmio
												</option>
											
												<option value="02">
													Finanziamento
												</option>
											
												<option value="03">
													Investimento
												</option>
											
												<option value="04">
													Servizi vari
												</option>
											
												<option value="05">
													Gestione necessità familiari
												</option>
											
										</select>	
								</div>
							</div>
						</div>
						<div class="form-group">
							<h3 class="titleSection titleForm">Informazioni personali</h3>
						</div>
						<!--TITOLARE EFFETTIVO -->
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12">
									<label class="control-label">
										<strong>Titolare effettivo: </strong>
										<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=1801')" class="no-underline btn-icon hidden-xs"><i class="icon icon-info_fill"></i></a>
										<script type="text/javascript">
										$(function() {
											if ($("#helpDialog").length==0) {
												var helpDialog = $("<div>", {
														"class": "modal fade helpDialog",
														"id": "helpDialog",
														"tabindex": "-1",
														"role": "dialog",
														"aria-labelledby": "myLargeModalLabel"});
												var modalContent = $("<div>").addClass("modal-content");
												helpDialog.append($("<div>").addClass("modal-dialog")
														.append(modalContent));
												modalContent.append($("<div>").addClass("modal-header clearfix")
														.append($("<button>", {
															"type": "button",
															"class": "close",
															"data-dismiss": "modal",
															"aria-label": "Close"})
															.append($("<span>", {
																"aria-hidden":"true"}).html("&times;"))));
												modalContent.append($("<div>").addClass("modal-body"));
												$("body").prepend(helpDialog);
											}
										});
										</script>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="form-field-input col-xs-12">
									<label>
										<input class="flLeft" type="checkbox" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.titolareEffettivoRapporto" value="true" id="titEff0">
										<input type="hidden" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.titolareEffettivoRapporto" value="false" id="titEffHidden0">
										<span class="flLeft text-checkbox-mobile">Dichiaro di essere il titolare effettivo dei rapporti a me intestati e di agire esclusivamente per mio conto.</span>
									</label>
								</div>
							</div>
						</div>
						<!--PERSONA POLITICAMENTE ESPOSTA  -->
						<div class="form-group">				
							<div class="row">
								<div class="col-xs-12">
									<label class="control-label">
										<strong>Sei una persona politicamente esposta? </strong>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="form-field-input col-xs-12">
									<label>
										Importante: le "persone politicamente esposte" (PeP) sono: le persone fisiche che occupano o hanno occupato importanti cariche pubbliche nonchè i loro familiari diretti o coloro con i quali tali persone intrattengono notoriamente stretti legami.
										<br>
									</label>
									<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=1802')" class="text-underline btn-icon hidden-xs">LEGGI LA DEFINIZIONE COMPLETA</a>
									<script type="text/javascript">
										$(function() {
											if ($("#helpDialog").length==0) {
												var helpDialog = $("<div>", {
														"class": "modal fade helpDialog",
														"id": "helpDialog",
														"tabindex": "-1",
														"role": "dialog",
														"aria-labelledby": "myLargeModalLabel"});
												var modalContent = $("<div>").addClass("modal-content");
												helpDialog.append($("<div>").addClass("modal-dialog")
														.append(modalContent));
												modalContent.append($("<div>").addClass("modal-header clearfix")
														.append($("<button>", {
															"type": "button",
															"class": "close",
															"data-dismiss": "modal",
															"aria-label": "Close"})
															.append($("<span>", {
																"aria-hidden":"true"}).html("&times;"))));
												modalContent.append($("<div>").addClass("modal-body"));
												$("body").prepend(helpDialog);
											}
										});
									</script>
								</div>
							</div>
							<div class="row">
								<div class="form-field-input col-xs-6 col-sm-2">
									<input type="radio" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.pep" value="true" class="sfondoForm" id="pepSi0">
									<label for="pepSi0">Sì </label>
								</div>
								<div class="form-field-input col-xs-6 col-sm-2">
									<input type="radio" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.pep" value="false" class="sfondoForm" id="pepNo0" checked="checked">
									<label for="pepNo0">No </label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="form-field-input col-sm-6 col-xs-12">
									<label class="control-label" for="secondaCittadinanza0">Seconda cittadinanza </label>
									<select id="secondaCittadinanza0" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.secondaNazione" class="fixed-size form-control">
										<option value="-">Seleziona</option>
										
											<option value="676">
												ABU DHABI
											</option>
										
											<option value="905">
												AFGHANISTAN
											</option>
										
											<option value="846">
												AFRICA DEL SUD OVEST - NAMIBIA
											</option>
										
											<option value="801">
												AFRICA SPAGNOLA
											</option>
										
											<option value="677">
												AJMAN
											</option>
										
											<option value="786">
												ALAND ISOLE
											</option>
										
											<option value="658">
												ALBANIA
											</option>
										
											<option value="803">
												ALGERIA
											</option>
										
											<option value="955">
												AMERICAN SAMOA
											</option>
										
											<option value="639">
												ANDORRA
											</option>
										
											<option value="849">
												ANGOLA
											</option>
										
											<option value="712">
												ANGUILLA
											</option>
										
											<option value="739">
												ANTIGUA E BARBUDA
											</option>
										
											<option value="908">
												ARABIA SAUDITA
											</option>
										
											<option value="737">
												ARGENTINA
											</option>
										
											<option value="781">
												ARMENIA
											</option>
										
											<option value="641">
												ARUBA
											</option>
										
											<option value="666">
												ASCENSION
											</option>
										
											<option value="950">
												AUSTRALIA
											</option>
										
											<option value="628">
												AUSTRIA
											</option>
										
											<option value="780">
												AZERBAIGIAN
											</option>
										
											<option value="815">
												AZZORRE ISOLE
											</option>
										
											<option value="728">
												BAHAMA
											</option>
										
											<option value="940">
												BAHREIN
											</option>
										
											<option value="943">
												BANGLADESH
											</option>
										
											<option value="718">
												BARBADOS
											</option>
										
											<option value="602">
												BELGIO
											</option>
										
											<option value="704">
												BELIZE
											</option>
										
											<option value="822">
												BENIN
											</option>
										
											<option value="729">
												BERMUDA
											</option>
										
											<option value="918">
												BHUTAN
											</option>
										
											<option value="764">
												BIELORUSSIA
											</option>
										
											<option value="734">
												BOLIVIA
											</option>
										
											<option value="784">
												BONAIRE SAINT EUSTATIUS AND SABA
											</option>
										
											<option value="694">
												BOSNIA ERZEGOVINA
											</option>
										
											<option value="841">
												BOTSWANA
											</option>
										
											<option value="732">
												BRASILE
											</option>
										
											<option value="944">
												BRUNEI DARUSSALAM
											</option>
										
											<option value="657">
												BULGARIA
											</option>
										
											<option value="810">
												BURKINA FASO
											</option>
										
											<option value="830">
												BURUNDI
											</option>
										
											<option value="924">
												CAMBOGIA (CAMPUCEA)
											</option>
										
											<option value="824">
												CAMERUN
											</option>
										
											<option value="612">
												CAMPIONE D'ITALIA
											</option>
										
											<option value="702">
												CANADA
											</option>
										
											<option value="709">
												CAYMAN ISOLE
											</option>
										
											<option value="669">
												CHAFARINAS
											</option>
										
											<option value="812">
												CIAD
											</option>
										
											<option value="733">
												CILE
											</option>
										
											<option value="939">
												CIPRO
											</option>
										
											<option value="636">
												CITTA DEL VATICANO
											</option>
										
											<option value="662">
												CLIPPERTON
											</option>
										
											<option value="725">
												COLOMBIA
											</option>
										
											<option value="858">
												COMORE
											</option>
										
											<option value="829">
												CONGO REPUBBLICA DEMOCRATICA
											</option>
										
											<option value="828">
												CONGO REPUBBLICA POPOLARE
											</option>
										
											<option value="933">
												COREA DEL NORD
											</option>
										
											<option value="934">
												COREA DEL SUD
											</option>
										
											<option value="819">
												COSTA D'AVORIO
											</option>
										
											<option value="716">
												COSTARICA
											</option>
										
											<option value="761">
												CROAZIA
											</option>
										
											<option value="719">
												CUBA
											</option>
										
											<option value="785">
												CURACAO
											</option>
										
											<option value="609">
												DANIMARCA
											</option>
										
											<option value="708">
												DOMINICA
											</option>
										
											<option value="678">
												DUBAI
											</option>
										
											<option value="730">
												ECUADOR
											</option>
										
											<option value="806">
												EGITTO
											</option>
										
											<option value="714">
												EL SALVADOR
											</option>
										
											<option value="848">
												ERITREA
											</option>
										
											<option value="690">
												ESTONIA
											</option>
										
											<option value="832">
												ETIOPIA
											</option>
										
											<option value="615">
												FALKLAND
											</option>
										
											<option value="929">
												FILIPPINE
											</option>
										
											<option value="625">
												FINLANDIA
											</option>
										
											<option value="601">
												FRANCIA
											</option>
										
											<option value="679">
												FUIJAYRAH
											</option>
										
											<option value="827">
												GABON
											</option>
										
											<option value="814">
												GAMBIA
											</option>
										
											<option value="767">
												GEORGIA
											</option>
										
											<option value="820">
												GHANA
											</option>
										
											<option value="741">
												GIAMAICA
											</option>
										
											<option value="935">
												GIAPPONE
											</option>
										
											<option value="611">
												GIBILTERRA
											</option>
										
											<option value="859">
												GIBUTI
											</option>
										
											<option value="907">
												GIORDANIA
											</option>
										
											<option value="667">
												GOUGH
											</option>
										
											<option value="632">
												GRECIA
											</option>
										
											<option value="705">
												GRENADA
											</option>
										
											<option value="703">
												GROENLANDIA
											</option>
										
											<option value="643">
												GUADALUPA
											</option>
										
											<option value="626">
												GUAM
											</option>
										
											<option value="711">
												GUATEMALA
											</option>
										
											<option value="740">
												GUAYANA FRANCESE
											</option>
										
											<option value="617">
												GUERNSEY C.I.
											</option>
										
											<option value="816">
												GUINEA
											</option>
										
											<option value="851">
												GUINEA BISSAU
											</option>
										
											<option value="826">
												GUINEA EQUATORIALE
											</option>
										
											<option value="727">
												GUYANA
											</option>
										
											<option value="720">
												HAITI
											</option>
										
											<option value="788">
												HEARD E MCDONALD ISOLE
											</option>
										
											<option value="713">
												HONDURAS
											</option>
										
											<option value="945">
												HONG KONG
											</option>
										
											<option value="916">
												INDIA
											</option>
										
											<option value="927">
												INDONESIA
											</option>
										
											<option value="904">
												IRAN
											</option>
										
											<option value="903">
												IRAQ
											</option>
										
											<option value="608">
												IRLANDA
											</option>
										
											<option value="621">
												ISLANDA
											</option>
										
											<option value="619">
												ISOLA DI MAN
											</option>
										
											<option value="613">
												ISOLE CANARIE
											</option>
										
											<option value="622">
												ISOLE CAROLINE
											</option>
										
											<option value="685">
												ISOLE CHAGOS
											</option>
										
											<option value="956">
												ISOLE COOK
											</option>
										
											<option value="850">
												ISOLE DEL CAPO VERDE
											</option>
										
											<option value="620">
												ISOLE FAEROER
											</option>
										
											<option value="960">
												ISOLE FIGI
											</option>
										
											<option value="646">
												ISOLE MARSHALL
											</option>
										
											<option value="742">
												ISOLE VERGINI BRITANNICHE
											</option>
										
											<option value="971">
												ISOLE WAKE
											</option>
										
											<option value="906">
												ISRAELE
											</option>
										
											<option value="618">
												JERSEY
											</option>
										
											<option value="769">
												KAZAKISTAN
											</option>
										
											<option value="835">
												KENYA
											</option>
										
											<option value="782">
												KIRGHIZISTAN
											</option>
										
											<option value="966">
												KIRIBATI
											</option>
										
											<option value="909">
												KUWAIT
											</option>
										
											<option value="921">
												LAOS
											</option>
										
											<option value="831">
												LESOTHO
											</option>
										
											<option value="691">
												LETTONIA
											</option>
										
											<option value="901">
												LIBANO
											</option>
										
											<option value="818">
												LIBERIA
											</option>
										
											<option value="805">
												LIBIA
											</option>
										
											<option value="637">
												LIECHTENSTEIN
											</option>
										
											<option value="692">
												LITUANIA
											</option>
										
											<option value="603">
												LUSSEMBURGO
											</option>
										
											<option value="930">
												MACAO
											</option>
										
											<option value="695">
												MACEDONIA
											</option>
										
											<option value="840">
												MADAGASCAR
											</option>
										
											<option value="674">
												MADEIRA
											</option>
										
											<option value="839">
												MALAWI
											</option>
										
											<option value="942">
												MALAYSIA
											</option>
										
											<option value="928">
												MALDIVE
											</option>
										
											<option value="809">
												MALI
											</option>
										
											<option value="631">
												MALTA
											</option>
										
											<option value="648">
												MARIANNE (ISOLE)
											</option>
										
											<option value="802">
												MAROCCO
											</option>
										
											<option value="642">
												MARTINICA
											</option>
										
											<option value="808">
												MAURITANIA
											</option>
										
											<option value="844">
												MAURIZIO
											</option>
										
											<option value="665">
												MAYOTTE
											</option>
										
											<option value="670">
												MELILLA
											</option>
										
											<option value="710">
												MESSICO
											</option>
										
											<option value="644">
												MICRONESIA
											</option>
										
											<option value="634">
												MIDWAY ISOLE
											</option>
										
											<option value="765">
												MOLDAVIA
											</option>
										
											<option value="638">
												MONACO
											</option>
										
											<option value="931">
												MONGOLIA
											</option>
										
											<option value="698">
												MONTENEGRO
											</option>
										
											<option value="635">
												MONTSERRAT
											</option>
										
											<option value="852">
												MOZAMBICO
											</option>
										
											<option value="919">
												MYANMAR
											</option>
										
											<option value="961">
												NAURU
											</option>
										
											<option value="937">
												NEPAL
											</option>
										
											<option value="715">
												NICARAGUA
											</option>
										
											<option value="811">
												NIGER
											</option>
										
											<option value="823">
												NIGERIA
											</option>
										
											<option value="633">
												NIUE - SAVAGE
											</option>
										
											<option value="787">
												NORFOLK ISOLE
											</option>
										
											<option value="623">
												NORVEGIA
											</option>
										
											<option value="684">
												NUOVA CALEDONIA
											</option>
										
											<option value="951">
												NUOVA ZELANDA
											</option>
										
											<option value="952">
												OCEANIA BRITANNICA
											</option>
										
											<option value="958">
												OCEANIA DEGLI STATI UNITI
											</option>
										
											<option value="912">
												OMAN
											</option>
										
											<option value="604">
												PAESI BASSI O OLANDA
											</option>
										
											<option value="915">
												PAKISTAN
											</option>
										
											<option value="279">
												PALESTINA, TERRITORI AUTONOMI
											</option>
										
											<option value="717">
												PANAMA
											</option>
										
											<option value="963">
												PAPUA E NUOVA GUINEA
											</option>
										
											<option value="735">
												PARAGUAY
											</option>
										
											<option value="671">
												PENON DE ALHUCEMAS
											</option>
										
											<option value="672">
												PENON DE VELEZ DE LA GOMERA
											</option>
										
											<option value="731">
												PERU'
											</option>
										
											<option value="953">
												POLINESIA FRANCESE
											</option>
										
											<option value="653">
												POLONIA
											</option>
										
											<option value="629">
												PORTOGALLO
											</option>
										
											<option value="649">
												PORTORICO
											</option>
										
											<option value="941">
												QATAR
											</option>
										
											<option value="680">
												RAS EL KHAIMAN
											</option>
										
											<option value="607">
												REGNO UNITO
											</option>
										
											<option value="936">
												REP. CINA NAZ. (TAIWAN)
											</option>
										
											<option value="651">
												REPUBBLICA CECA
											</option>
										
											<option value="825">
												REPUBBLICA CENTRAFRICANA
											</option>
										
											<option value="775">
												REPUBBLICA DEL KOSOVO
											</option>
										
											<option value="645">
												REPUBBLICA DI PALAU
											</option>
										
											<option value="606">
												REPUBBLICA DI SAN MARINO
											</option>
										
											<option value="721">
												REPUBBLICA DOMINICANA
											</option>
										
											<option value="605">
												REPUBBLICA FED.DI GERMANIA
											</option>
										
											<option value="932">
												REPUBBLICA POPOLARE CINESE
											</option>
										
											<option value="843">
												REPUBBLICA SUDAFRICANA
											</option>
										
											<option value="833">
												REUNION
											</option>
										
											<option value="656">
												ROMANIA
											</option>
										
											<option value="845">
												RUANDA
											</option>
										
											<option value="762">
												RUSSIA
											</option>
										
											<option value="860">
												S.ELENA
											</option>
										
											<option value="614">
												SAHARA OCCIDENTALE
											</option>
										
											<option value="790">
												SAINT BARTHELEMY
											</option>
										
											<option value="706">
												SAINT LUCIA
											</option>
										
											<option value="964">
												SALOMONE
											</option>
										
											<option value="954">
												SAMOA OCCIDENTALE
											</option>
										
											<option value="853">
												SAO TOME' E PRINCIPE
											</option>
										
											<option value="854">
												SEICELLE
											</option>
										
											<option value="813">
												SENEGAL
											</option>
										
											<option value="697">
												SERBIA
											</option>
										
											<option value="681">
												SHARJAH
											</option>
										
											<option value="817">
												SIERRA LEONE
											</option>
										
											<option value="926">
												SINGAPORE
											</option>
										
											<option value="783">
												SINT MAARTEN (DUTCH PART)
											</option>
										
											<option value="902">
												SIRIA
											</option>
										
											<option value="652">
												SLOVACCHIA
											</option>
										
											<option value="693">
												SLOVENIA
											</option>
										
											<option value="834">
												SOMALIA
											</option>
										
											<option value="630">
												SPAGNA
											</option>
										
											<option value="917">
												SRI LANKA
											</option>
										
											<option value="616">
												ST. KITTS E NEVIS
											</option>
										
											<option value="661">
												ST. MARTIN SETTENTRIONALE
											</option>
										
											<option value="683">
												ST. PIERRE E MIQUELON
											</option>
										
											<option value="701">
												STATI UNITI D'AMERICA
											</option>
										
											<option value="807">
												SUDAN
											</option>
										
											<option value="738">
												SURINAME
											</option>
										
											<option value="789">
												SVALBARD E JAN MAYEN ISOLE
											</option>
										
											<option value="624">
												SVEZIA
											</option>
										
											<option value="627">
												SVIZZERA
											</option>
										
											<option value="847">
												SWAZILAND - NGWANE
											</option>
										
											<option value="772">
												TAGIKISTAN
											</option>
										
											<option value="837">
												TANZANIA
											</option>
										
											<option value="861">
												TERRIT.BRIT.OCC.
											</option>
										
											<option value="743">
												TERRITORI FRANCESI DEL SUD
											</option>
										
											<option value="744">
												TERRITORIO ANTARTICO BRITANNICO
											</option>
										
											<option value="920">
												THAILANDIA
											</option>
										
											<option value="946">
												TIMOR
											</option>
										
											<option value="821">
												TOGO
											</option>
										
											<option value="675">
												TOKELAU
											</option>
										
											<option value="962">
												TONGA
											</option>
										
											<option value="723">
												TRINIDAD E TOBAGO
											</option>
										
											<option value="668">
												TRISTAN DE CUNHA
											</option>
										
											<option value="804">
												TUNISIA
											</option>
										
											<option value="938">
												TURCHIA
											</option>
										
											<option value="777">
												TURKMENISTAN
											</option>
										
											<option value="640">
												TURKS E CAICOS
											</option>
										
											<option value="965">
												TUVALU
											</option>
										
											<option value="763">
												UCRAINA
											</option>
										
											<option value="836">
												UGANDA
											</option>
										
											<option value="682">
												UMM AL QAIWAIN
											</option>
										
											<option value="655">
												UNGHERIA
											</option>
										
											<option value="736">
												URUGUAY
											</option>
										
											<option value="778">
												UZBEKISTAN
											</option>
										
											<option value="957">
												VANUATU
											</option>
										
											<option value="726">
												VENEZUELA
											</option>
										
											<option value="660">
												VERGINI AMERICANE (ISOLE)
											</option>
										
											<option value="922">
												VIETNAM
											</option>
										
											<option value="707">
												VINCENT E GRENADINE
											</option>
										
											<option value="647">
												WALLIS E FUTUNA
											</option>
										
											<option value="913">
												YEMEN
											</option>
										
											<option value="838">
												ZAMBIA
											</option>
										
											<option value="842">
												ZIMBABWE
											</option>
										
									</select>
								</div>
							</div>
						</div>				
						<!-- DOMANDE -->
						<div class="form-group">
							<h3 class="titleSection titleForm"> Profilo professionale e patrimoniale</h3>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="form-field-input col-sm-6 col-xs-12">
									<label class="control-label" for="professione0">Professione </label>
									<select id="professione0" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.professione" onchange="checkProfessione(0, false)" class="fixed-size professione form-control">
										<option value="-">Seleziona</option>
										
											<option value="01">
												Imprenditore
											</option>
										
											<option value="02">
												Lavoratore autonomo
											</option>
										
											<option value="04">
												Lavoratore dipendente
											</option>
										
											<option value="03">
												Libero professionista
											</option>
										
											<option value="06">
												Non occupato
											</option>
										
											<option value="05">
												Pensionato
											</option>
										
											<option value="07">
												Soggetto apicale
											</option>
										
									</select>
								</div>
								<div class="form-field-input col-sm-6 col-xs-12">
									<label class="control-label" for="attEconomica0"> Dettaglio settore
										<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=2541')" class="no-underline btn-icon hidden-xs"><i class="icon icon-info_fill"></i></a>
										<script type="text/javascript">
										$(function() {
											if ($("#helpDialog").length==0) {
												var helpDialog = $("<div>", {
														"class": "modal fade helpDialog",
														"id": "helpDialog",
														"tabindex": "-1",
														"role": "dialog",
														"aria-labelledby": "myLargeModalLabel"});
												var modalContent = $("<div>").addClass("modal-content");
												helpDialog.append($("<div>").addClass("modal-dialog")
														.append(modalContent));
												modalContent.append($("<div>").addClass("modal-header clearfix")
														.append($("<button>", {
															"type": "button",
															"class": "close",
															"data-dismiss": "modal",
															"aria-label": "Close"})
															.append($("<span>", {
																"aria-hidden":"true"}).html("&times;"))));
												modalContent.append($("<div>").addClass("modal-body"));
												$("body").prepend(helpDialog);
											}
										});
										</script>
									</label>
									<select id="attEconomica0" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.codAttivitaEconomica" class="form-control" style="display: none;"><option value="">-</option><option value="771">agenzie viaggio e intermediari dei trasporti</option><option value="660">alberghi e pubblici esercizi</option><option value="014">allevamento, caccia, silvicoltura e pesca</option><option value="993">altri agenti, mediatori e consulenti non ancora classificati (es. agenti sportivi)</option><option value="984">altri servizi personali non altrove classificati (servizi delle pompe funebri, di cremazione, di agenzie matrim., ecc.)</option><option value="732">autotrasportatori di contante, titoli e valori c/ terzi</option><option value="829">bancari</option><option value="463">carpenteria e costruzioni in legno, lavori in legno per edilizia</option><option value="010">coltivazione prodotti agricoli e olio</option><option value="619">commercio altri prodotti non alimentari</option><option value="649">commercio antiquariato e oggetti d'arte</option><option value="654">commercio armi e munizioni</option><option value="600">commercio combustibili, minerali, prodotti chimici e carburanti</option><option value="613">commercio legname e materiale da costruzione</option><option value="653">commercio libri, giornali, cancelleria</option><option value="614">commercio macchine, attrezzature, veicoli</option><option value="620">commercio materiale di recupero</option><option value="611">commercio materie prime agricole, animali vivi</option><option value="615">commercio mobili, elettrodomestici, tv, casalinghi e ferramenta</option><option value="621">commercio orologi, gioielleria, argenteria</option><option value="617">commercio prodotti alimentari, bevande, tabacco</option><option value="618">commercio prodotti farmaceutici, cosmetici, profumi</option><option value="616">commercio prodotti tessili, abbigliamento, calzature</option><option value="500">edilizia, opere pubbliche e demolizione immobili</option><option value="005">forze dell ordine/forze armate</option><option value="493">prodotti cinematografia e fotografia</option><option value="473">prodotti stampa ed editoria</option><option value="430">prodotti tessili, pelle, pellicce, abbigliamento</option><option value="460">produzione biancheria per la casa e arredamento</option><option value="450">produzione calzature</option><option value="410">produzione di prodotti alimentari e prodotti a base di tabacco</option><option value="494">produzione giocattoli e articoli sportivi</option><option value="491">produzione gioielli e oreficeria</option><option value="490">produzione legno, sughero</option><option value="320">produzione macchine agricole e industriali</option><option value="330">produzione macchine per ufficio, elaboratori, strumenti di precisione, ottica, orologi</option><option value="340">produzione materiale elettrico</option><option value="230">produzione materiali da costruzione, vetro, ceramica, produzione, estrazione e ricerca di sali</option><option value="210">produzione metalli</option><option value="350">produzione mezzi di trasporto</option><option value="467">produzione mobili in legno e giunco, materassi</option><option value="495">produzione penne, timbri e prodotti di cancelleria</option><option value="250">produzione prodotti chimici, farmaceutici, vernici, fibre artificiali e sintetiche</option><option value="110">produzione prodotti energetici (carbone, petrolio, energia elettrica, gas, raccolta, depurazione e distribuzione acqua)</option><option value="480">produzione prodotti in gomma, plastica e pneumatici</option><option value="492">produzione strumenti musicali</option><option value="440">produzione tappeti, tappezzerie</option><option value="012">produzione vino</option><option value="470">produzione, trasformazione carta e cartone</option><option value="832">professioni amministrativo/contabili (commercialisti, ragionieri, periti commerciali, amm.condominio, revisori, ecc)</option><option value="990">professioni giuridico/legali (avvocati, notai)</option><option value="992">professioni in discipline religiose e teologiche</option><option value="971">professioni sportive e artistiche</option><option value="991">professioni tecnico/scientifiche (architetti, ingegneri, chimici, biologi, agronomi, periti, geometri, ecc.)</option><option value="001">pubblica amministrazione e magistrati</option><option value="671">riparazione auto, moto e biciclette</option><option value="672">riparazione calzature, articoli cuoio, elettrodomestici</option><option value="972">sale corse, case da gioco</option><option value="760">servizi connessi ai trasporti (gestione porti, autostrade, stazioni di servizio, controllo e pesatura merci)</option><option value="630">servizi degli intermediari del commercio (agenti, rappresentanti e agenzie di mediazione del commercio)</option><option value="790">servizi delle comunicazioni e professioni linguistiche, letterarie (giornalisti, scrittori, ecc.)</option><option value="834">servizi di affari immobiliari (agenti immobiliari)</option><option value="831">servizi di consulenza tributaria, del lavoro, direzionale, organizzativa, tecnica, ecc.</option><option value="773">servizi di custodia e deposito</option><option value="731">servizi di custodia valori</option><option value="981">servizi di lavanderia e tintoria</option><option value="840">servizi di noleggio e locazione</option><option value="833">servizi di pubblicita</option><option value="940">servizi di ricerca e sviluppo</option><option value="920">servizi disinfezione, pulizia e nettezza urbana</option><option value="710">servizi ferroviari, tram, metro, autobus di linea</option><option value="830">servizi finanziari e assicurativi (consul. finanz. e assic., prom. finanz. , agenti finanz., broker, mediat. cred. ecc.)</option><option value="930">servizi insegnamento</option><option value="960">servizi istituzioni sociali, delle associazioni professionali e delle organizzazioni economiche e sindacali</option><option value="982">servizi parrucchieri barbieri e istituti di bellezza</option><option value="724">servizi per oleodotto e gasdotto</option><option value="970">servizi ricreativi e culturali(discoteche, circhi, luna park, ecc.)</option><option value="950">servizi sanitari destinabili alla vendita</option><option value="983">servizi studi fotografici</option><option value="722">servizi trasporti di persone e merci</option><option value="740">servizi trasporti marittimi, cabotaggio, aerei</option></select>
									<input type="hidden" id="descAttEconomica0" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.descAttivitaEconomica">
								</div>
							</div>
						</div>
						<!-- qui va ultima professione svolta, se profilo di rischio alto/scaduto e pensionato -->
						<div class="form-group">				
							<div class="row">
								<div class="form-field-input col-sm-6 col-xs-12">
									<label class="control-label" for="nazione0">Stato di svolgimento </label>
									<select id="nazione0" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.nazioneAttivitaLavorativa" onchange="checkNazione(0)" class="fixed-size form-control">
										<option value="-">Seleziona</option>
										
											<option value="238">
												ABU DHABI
											</option>
										
											<option value="002">
												AFGHANISTAN
											</option>
										
											<option value="239">
												AJMAN (EMIRATI ARABI UNITI)
											</option>
										
											<option value="292">
												ALAND ISOLE
											</option>
										
											<option value="087">
												ALBANIA
											</option>
										
											<option value="003">
												ALGERIA
											</option>
										
											<option value="252">
												AMERICANE DEL PACIFICO - ISOLE
											</option>
										
											<option value="004">
												ANDORRA
											</option>
										
											<option value="133">
												ANGOLA
											</option>
										
											<option value="209">
												ANGUILLA
											</option>
										
											<option value="180">
												ANTARTIDE
											</option>
										
											<option value="197">
												ANTIGUA E BARBUDA
											</option>
										
											<option value="251">
												ANTILLE OLANDESI
											</option>
										
											<option value="005">
												ARABIA SAUDITA
											</option>
										
											<option value="006">
												ARGENTINA
											</option>
										
											<option value="266">
												ARMENIA
											</option>
										
											<option value="212">
												ARUBA
											</option>
										
											<option value="227">
												ASCENSIONE - ISOLE
											</option>
										
											<option value="007">
												AUSTRALIA
											</option>
										
											<option value="008">
												AUSTRIA
											</option>
										
											<option value="268">
												AZERBAIGIAN
											</option>
										
											<option value="234">
												AZZORRE - ISOLE
											</option>
										
											<option value="160">
												BAHAMAS - ISOLE
											</option>
										
											<option value="169">
												BAHREIN - ISOLE
											</option>
										
											<option value="130">
												BANGLADESH
											</option>
										
											<option value="118">
												BARBADOS - ISOLE
											</option>
										
											<option value="009">
												BELGIO
											</option>
										
											<option value="198">
												BELIZE
											</option>
										
											<option value="158">
												BENIN
											</option>
										
											<option value="207">
												BERMUDA - ISOLE
											</option>
										
											<option value="097">
												BHUTAN
											</option>
										
											<option value="264">
												BIELORUSSIA
											</option>
										
											<option value="010">
												BOLIVIA
											</option>
										
											<option value="295">
												BONAIRE SAINT EUSTATIUS AND SABA
											</option>
										
											<option value="274">
												BOSNIA ERZEGOVINA
											</option>
										
											<option value="098">
												BOTSWANA
											</option>
										
											<option value="280">
												BOUVET ISLANDS
											</option>
										
											<option value="011">
												BRASILE
											</option>
										
											<option value="012">
												BULGARIA
											</option>
										
											<option value="142">
												BURKINA FASO (EX ALTO VOLTA)
											</option>
										
											<option value="025">
												BURUNDI
											</option>
										
											<option value="135">
												CAMBOGIA
											</option>
										
											<option value="119">
												CAMERUN
											</option>
										
											<option value="139">
												CAMPIONE D ITALIA
											</option>
										
											<option value="013">
												CANADA
											</option>
										
											<option value="100">
												CANARIE - ISOLE
											</option>
										
											<option value="188">
												CAPO VERDE - ISOLE
											</option>
										
											<option value="256">
												CAROLINE - ISOLE
											</option>
										
											<option value="211">
												CAYMAN - ISOLE
											</option>
										
											<option value="143">
												CENTRAFRICANA REPUBBLICA
											</option>
										
											<option value="246">
												CEUTA (DIP. SPAGN. D AFRICA)
											</option>
										
											<option value="230">
												CHAFARINAS - ISOLE
											</option>
										
											<option value="255">
												CHAGOS - ISOLE
											</option>
										
											<option value="282">
												CHRISTMAS ISLANDS
											</option>
										
											<option value="144">
												CIAD
											</option>
										
											<option value="015">
												CILE
											</option>
										
											<option value="016">
												CINA REPUBBLICA POPOLARE
											</option>
										
											<option value="101">
												CIPRO REPUBBLICA
											</option>
										
											<option value="093">
												CITTA DEL VATICANO
											</option>
										
											<option value="223">
												CLIPPERTON
											</option>
										
											<option value="281">
												COCOS (KEELING) ISLANDS
											</option>
										
											<option value="017">
												COLOMBIA
											</option>
										
											<option value="176">
												COMORE - ISOLE
											</option>
										
											<option value="145">
												CONGO
											</option>
										
											<option value="018">
												CONGO REP. DEM.
											</option>
										
											<option value="237">
												COOK - ISOLE
											</option>
										
											<option value="074">
												COREA DEL NORD (REPUBBLICA DEMOCRATICA POPOLARE)
											</option>
										
											<option value="084">
												COREA DEL SUD (REPUBBLICA DI)
											</option>
										
											<option value="146">
												COSTA D AVORIO
											</option>
										
											<option value="019">
												COSTA RICA
											</option>
										
											<option value="261">
												CROAZIA
											</option>
										
											<option value="020">
												CUBA
											</option>
										
											<option value="296">
												CURACAO
											</option>
										
											<option value="021">
												DANIMARCA
											</option>
										
											<option value="175">
												DIP.BRIT. D OCEANIA (PITCAIRN)
											</option>
										
											<option value="192">
												DOMINICA
											</option>
										
											<option value="063">
												DOMINICANA REPUBBLICA
											</option>
										
											<option value="240">
												DUBAY
											</option>
										
											<option value="024">
												ECUADOR
											</option>
										
											<option value="023">
												EGITTO
											</option>
										
											<option value="064">
												EL SALVADOR REPUBBLICA
											</option>
										
											<option value="277">
												ERITREA
											</option>
										
											<option value="257">
												ESTONIA
											</option>
										
											<option value="026">
												ETIOPIA
											</option>
										
											<option value="204">
												FAER OER - FAEROERNE FOROYAR
											</option>
										
											<option value="190">
												FALKLAND O MALVINE - ISOLE
											</option>
										
											<option value="161">
												FIGI
											</option>
										
											<option value="027">
												FILIPPINE - ISOLE
											</option>
										
											<option value="028">
												FINLANDIA
											</option>
										
											<option value="029">
												FRANCIA
											</option>
										
											<option value="241">
												FUJAYRAH
											</option>
										
											<option value="157">
												GABON
											</option>
										
											<option value="164">
												GAMBIA REPUBBLICA
											</option>
										
											<option value="267">
												GEORGIA
											</option>
										
											<option value="094">
												GERMANIA REPUBBLICA FEDERALE
											</option>
										
											<option value="112">
												GHANA
											</option>
										
											<option value="082">
												GIAMAICA
											</option>
										
											<option value="088">
												GIAPPONE
											</option>
										
											<option value="102">
												GIBILTERRA
											</option>
										
											<option value="113">
												GIBUTI REPUBBLICA
											</option>
										
											<option value="122">
												GIORDANIA
											</option>
										
											<option value="228">
												GOUGH (SANT ELENA)
											</option>
										
											<option value="032">
												GRECIA
											</option>
										
											<option value="156">
												GRENADA
											</option>
										
											<option value="200">
												GROENLANDIA
											</option>
										
											<option value="214">
												GUADALUPA INDIPENDENTE
											</option>
										
											<option value="154">
												GUAM
											</option>
										
											<option value="033">
												GUATEMALA
											</option>
										
											<option value="123">
												GUAYANA FRANCESE
											</option>
										
											<option value="201">
												GUERNSEY - ISOLA
											</option>
										
											<option value="185">
												GUINEA BISSAU REPUBBLICA
											</option>
										
											<option value="167">
												GUINEA EQUATORIALE
											</option>
										
											<option value="137">
												GUINEA REPUBBLICA POPOLARE
											</option>
										
											<option value="159">
												GUYANA
											</option>
										
											<option value="034">
												HAITI
											</option>
										
											<option value="284">
												HEARD E MCDONALD ISLANDS
											</option>
										
											<option value="035">
												HONDURAS
											</option>
										
											<option value="103">
												HONG KONG
											</option>
										
											<option value="114">
												INDIA
											</option>
										
											<option value="129">
												INDONESIA
											</option>
										
											<option value="039">
												IRAN
											</option>
										
											<option value="038">
												IRAQ
											</option>
										
											<option value="040">
												IRLANDA REPUBBLICA DEMOCRATICA
											</option>
										
											<option value="041">
												ISLANDA
											</option>
										
											<option value="182">
												ISRAELE
											</option>
										
											<option value="086" selected="">
												ITALIA
											</option>
										
											<option value="202">
												JERSEY - ISOLA
											</option>
										
											<option value="269">
												KAZAKISTAN
											</option>
										
											<option value="116">
												KENYA
											</option>
										
											<option value="270">
												KIRGHIZISTAN
											</option>
										
											<option value="194">
												KIRIBATI REPUBBLICA
											</option>
										
											<option value="291">
												KOSOVO
											</option>
										
											<option value="126">
												KUWAIT
											</option>
										
											<option value="136">
												LAOS
											</option>
										
											<option value="089">
												LESOTHO
											</option>
										
											<option value="258">
												LETTONIA
											</option>
										
											<option value="095">
												LIBANO
											</option>
										
											<option value="044">
												LIBERIA
											</option>
										
											<option value="045">
												LIBIA
											</option>
										
											<option value="090">
												LIECHTENSTEIN
											</option>
										
											<option value="259">
												LITUANIA
											</option>
										
											<option value="092">
												LUSSEMBURGO
											</option>
										
											<option value="059">
												MACAO
											</option>
										
											<option value="278">
												MACEDONIA
											</option>
										
											<option value="104">
												MADAGASCAR REPUBBLICA
											</option>
										
											<option value="235">
												MADEIRA
											</option>
										
											<option value="056">
												MALAWI REPUBBLICA
											</option>
										
											<option value="106">
												MALAYSIA
											</option>
										
											<option value="127">
												MALDIVE - ISOLE
											</option>
										
											<option value="149">
												MALI REPUBBLICA
											</option>
										
											<option value="105">
												MALTA
											</option>
										
											<option value="203">
												MAN-ISOLA
											</option>
										
											<option value="219">
												MARIANNE - ISOLE
											</option>
										
											<option value="107">
												MAROCCO
											</option>
										
											<option value="217">
												MARSHALL - ISOLE
											</option>
										
											<option value="213">
												MARTINICA - ISOLA
											</option>
										
											<option value="141">
												MAURITANIA
											</option>
										
											<option value="128">
												MAURIZIO - ISOLE
											</option>
										
											<option value="226">
												MAYOTTE - ISOLE
											</option>
										
											<option value="231">
												MELILLA (DIP. SPAGN. D AFRICA)
											</option>
										
											<option value="046">
												MESSICO
											</option>
										
											<option value="177">
												MIDWAY - ISOLE
											</option>
										
											<option value="265">
												MOLDAVIA
											</option>
										
											<option value="110">
												MONGOLIA
											</option>
										
											<option value="290">
												MONTENEGRO
											</option>
										
											<option value="208">
												MONTSERRAT
											</option>
										
											<option value="134">
												MOZAMBICO
											</option>
										
											<option value="206">
												NAMIBIA-AFRICA DEL SUD OVEST
											</option>
										
											<option value="109">
												NAURU
											</option>
										
											<option value="125">
												NEGARA BRUNEI DARUSSALAM
											</option>
										
											<option value="115">
												NEPAL
											</option>
										
											<option value="047">
												NICARAGUA
											</option>
										
											<option value="150">
												NIGER
											</option>
										
											<option value="117">
												NIGERIA REPUBBLICA
											</option>
										
											<option value="205">
												NIUE O SAVAGE
											</option>
										
											<option value="285">
												NORFOLK ISLANDS
											</option>
										
											<option value="048">
												NORVEGIA
											</option>
										
											<option value="253">
												NUOVA CALEDONIA
											</option>
										
											<option value="049">
												NUOVA ZELANDA
											</option>
										
											<option value="050">
												PAESI BASSI - OLANDA
											</option>
										
											<option value="036">
												PAKISTAN
											</option>
										
											<option value="216">
												PALAU REPUBBLICA
											</option>
										
											<option value="279">
												PALESTINA
											</option>
										
											<option value="051">
												PANAMA
											</option>
										
											<option value="186">
												PAPUA NUOVA GUINEA
											</option>
										
											<option value="052">
												PARAGUAY
											</option>
										
											<option value="232">
												PENON DE ALHUCEMAS - ISOLE (DI
											</option>
										
											<option value="233">
												PENON DE VELEZ DE LA GOMERA (D
											</option>
										
											<option value="053">
												PERU
											</option>
										
											<option value="225">
												POLINESIA FRANCESE
											</option>
										
											<option value="054">
												POLONIA
											</option>
										
											<option value="055">
												PORTOGALLO
											</option>
										
											<option value="091">
												PRINCIPATO DI MONACO
											</option>
										
											<option value="220">
												PUERTO RICO
											</option>
										
											<option value="168">
												QATAR
											</option>
										
											<option value="242">
												RAS AL KHAIMAH
											</option>
										
											<option value="031">
												REGNO UNITO DI GRAN BRETAGNA I
											</option>
										
											<option value="275">
												REPUBBLICA CECA
											</option>
										
											<option value="078">
												REPUBBLICA SUDAFRICANA
											</option>
										
											<option value="247">
												RIUNIONE - ISOLA(DIP. FRANC. D
											</option>
										
											<option value="061">
												ROMANIA
											</option>
										
											<option value="151">
												RUANDA
											</option>
										
											<option value="262">
												RUSSIA (FEDERAZIONE DI)
											</option>
										
											<option value="166">
												SAHARA OCCIDENTALE
											</option>
										
											<option value="293">
												SAINT BARTHELEMY
											</option>
										
											<option value="195">
												SAINT CHRISTOPHER-NEVIS
											</option>
										
											<option value="199">
												SAINT LUCIA
											</option>
										
											<option value="222">
												SAINT MARTIN
											</option>
										
											<option value="248">
												SAINT PIERRE E MIQUELON
											</option>
										
											<option value="196">
												SAINT VINCENT E GRENADINE
											</option>
										
											<option value="191">
												SALOMONE - ISOLE
											</option>
										
											<option value="148">
												SAMOA AMERICANE
											</option>
										
											<option value="131">
												SAMOA OCCIDENTALI
											</option>
										
											<option value="037">
												SAN MARINO
											</option>
										
											<option value="254">
												SANT ELENA
											</option>
										
											<option value="187">
												SAO TOME E PRINCIPE
											</option>
										
											<option value="189">
												SEICELLE - ISOLE
											</option>
										
											<option value="152">
												SENEGAL
											</option>
										
											<option value="289">
												SERBIA
											</option>
										
											<option value="243">
												SHARJAH
											</option>
										
											<option value="153">
												SIERRA LEONE
											</option>
										
											<option value="147">
												SINGAPORE
											</option>
										
											<option value="294">
												SINT MAARTEN (DUTCH PART)
											</option>
										
											<option value="065">
												SIRIA
											</option>
										
											<option value="276">
												SLOVACCHIA
											</option>
										
											<option value="260">
												SLOVENIA
											</option>
										
											<option value="066">
												SOMALIA
											</option>
										
											<option value="283">
												SOUTH GEORGIA E SOUTH SANDWICH
											</option>
										
											<option value="067">
												SPAGNA
											</option>
										
											<option value="085">
												SRI LANKA/CEYLON
											</option>
										
											<option value="215">
												STATI FEDERATI DI MICRONESIA
											</option>
										
											<option value="069">
												STATI UNITI D AMERICA
											</option>
										
											<option value="297">
												SUD SUDAN
											</option>
										
											<option value="070">
												SUDAN REPUBBLICA DEMOCRATICA
											</option>
										
											<option value="163">
												SULTANATO DI OMAN
											</option>
										
											<option value="124">
												SURINAME
											</option>
										
											<option value="286">
												SVALBARD E JAN MAYEN ISLANDS
											</option>
										
											<option value="068">
												SVEZIA
											</option>
										
											<option value="071">
												SVIZZERA
											</option>
										
											<option value="138">
												SWAZILAND
											</option>
										
											<option value="272">
												TAGIKISTAN
											</option>
										
											<option value="022">
												TAIWAN
											</option>
										
											<option value="057">
												TANZANIA
											</option>
										
											<option value="183">
												TERR ANTARTICO FRANCESE
											</option>
										
											<option value="245">
												TERRIT.BRITAN.OCEANO IND.
											</option>
										
											<option value="072">
												THAILANDIA
											</option>
										
											<option value="287">
												TIMOR-LESTE
											</option>
										
											<option value="155">
												TOGO REPUBBLICA
											</option>
										
											<option value="162">
												TONGA
											</option>
										
											<option value="120">
												TRINIDAD E TOBAGO REPUBBLICA
											</option>
										
											<option value="229">
												TRISTAN DA CUNHA
											</option>
										
											<option value="075">
												TUNISIA
											</option>
										
											<option value="076">
												TURCHIA
											</option>
										
											<option value="273">
												TURKMENISTAN
											</option>
										
											<option value="210">
												TURKS E CAICOS
											</option>
										
											<option value="193">
												TUVALU - ISOLE
											</option>
										
											<option value="263">
												UCRAINA
											</option>
										
											<option value="132">
												UGANDA
											</option>
										
											<option value="244">
												UMM AL QAIWAIN
											</option>
										
											<option value="077">
												UNGHERIA
											</option>
										
											<option value="083">
												UNION OF MYANMAR (EX BIRMANIA)
											</option>
										
											<option value="236">
												UNIONE TOKELAU - ISOLE
											</option>
										
											<option value="080">
												URUGUAY
											</option>
										
											<option value="271">
												UZBEKISTAN
											</option>
										
											<option value="121">
												VANUATU
											</option>
										
											<option value="081">
												VENEZUELA
											</option>
										
											<option value="221">
												VERGINI - ISOLE AMERICANE
											</option>
										
											<option value="249">
												VERGINI - ISOLE BRITANNICHE
											</option>
										
											<option value="062">
												VIET NAM REPUBBLICA SOCIALISTA
											</option>
										
											<option value="178">
												WAKE - ISOLA
											</option>
										
											<option value="218">
												WALLIS E FUTUNA- ISOLE
											</option>
										
											<option value="042">
												YEMEN REPUBBLICA ARABA
											</option>
										
											<option value="058">
												ZAMBIA
											</option>
										
											<option value="073">
												ZIMBABWE
											</option>
										
									</select>
								</div>
								<div class="form-field-input col-sm-6 col-xs-12">		
									<label class="control-label" for="provincia0"> Provincia di svolgimento </label>
									<select id="provincia0" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.provinciaAttivitaLavorativa" class="fixed-size provincia form-control">
										<option value="-">Seleziona</option>
										
											<option value="AG">
												Agrigento
											</option>
										
											<option value="AL">
												Alessandria
											</option>
										
											<option value="AN">
												Ancona
											</option>
										
											<option value="AO">
												Aosta
											</option>
										
											<option value="AR">
												Arezzo
											</option>
										
											<option value="AP">
												Ascoli Piceno
											</option>
										
											<option value="AT">
												Asti
											</option>
										
											<option value="AV">
												Avellino
											</option>
										
											<option value="BA">
												Bari
											</option>
										
											<option value="BT">
												Barletta-Andria-Trani
											</option>
										
											<option value="BL">
												Belluno
											</option>
										
											<option value="BN">
												Benevento
											</option>
										
											<option value="BG">
												Bergamo
											</option>
										
											<option value="BI">
												Biella
											</option>
										
											<option value="BO">
												Bologna
											</option>
										
											<option value="BZ">
												Bolzano
											</option>
										
											<option value="BS">
												Brescia
											</option>
										
											<option value="BR">
												Brindisi
											</option>
										
											<option value="CA">
												Cagliari
											</option>
										
											<option value="CL">
												Caltanissetta
											</option>
										
											<option value="CB">
												Campobasso
											</option>
										
											<option value="CE">
												Caserta
											</option>
										
											<option value="CT">
												Catania
											</option>
										
											<option value="CZ">
												Catanzaro
											</option>
										
											<option value="CH">
												Chieti
											</option>
										
											<option value="CO">
												Como
											</option>
										
											<option value="CS">
												Cosenza
											</option>
										
											<option value="CR">
												Cremona
											</option>
										
											<option value="KR">
												Crotone
											</option>
										
											<option value="CN">
												Cuneo
											</option>
										
											<option value="EN">
												Enna
											</option>
										
											<option value="FM">
												Fermo
											</option>
										
											<option value="FE">
												Ferrara
											</option>
										
											<option value="FI">
												Firenze
											</option>
										
											<option value="FU">
												Fiume
											</option>
										
											<option value="FG">
												Foggia
											</option>
										
											<option value="FC">
												Forli'/Cesena
											</option>
										
											<option value="FR">
												Frosinone
											</option>
										
											<option value="GE">
												Genova
											</option>
										
											<option value="GO">
												Gorizia
											</option>
										
											<option value="GR">
												Grosseto
											</option>
										
											<option value="IM">
												Imperia
											</option>
										
											<option value="IS">
												Isernia
											</option>
										
											<option value="AQ">
												L'Aquila
											</option>
										
											<option value="SP">
												La Spezia
											</option>
										
											<option value="LT">
												Latina
											</option>
										
											<option value="LE">
												Lecce
											</option>
										
											<option value="LC">
												Lecco
											</option>
										
											<option value="LI">
												Livorno
											</option>
										
											<option value="LO">
												Lodi
											</option>
										
											<option value="LU">
												Lucca
											</option>
										
											<option value="MC">
												Macerata
											</option>
										
											<option value="MN">
												Mantova
											</option>
										
											<option value="MS">
												Massa Carrara
											</option>
										
											<option value="MT">
												Matera
											</option>
										
											<option value="ME">
												Messina
											</option>
										
											<option value="MI">
												Milano
											</option>
										
											<option value="MO">
												Modena
											</option>
										
											<option value="MB">
												Monza-Brianza
											</option>
										
											<option value="NA">
												Napoli
											</option>
										
											<option value="NO">
												Novara
											</option>
										
											<option value="NU">
												Nuoro
											</option>
										
											<option value="OR">
												Oristano
											</option>
										
											<option value="PD">
												Padova
											</option>
										
											<option value="PA">
												Palermo
											</option>
										
											<option value="PR">
												Parma
											</option>
										
											<option value="PV">
												Pavia
											</option>
										
											<option value="PG">
												Perugia
											</option>
										
											<option value="PU">
												Pesaro Urbino
											</option>
										
											<option value="PE">
												Pescara
											</option>
										
											<option value="PC">
												Piacenza
											</option>
										
											<option value="PI">
												Pisa
											</option>
										
											<option value="PT">
												Pistoia
											</option>
										
											<option value="PL">
												Pola
											</option>
										
											<option value="PN">
												Pordenone
											</option>
										
											<option value="PZ">
												Potenza
											</option>
										
											<option value="PO">
												Prato
											</option>
										
											<option value="RG">
												Ragusa
											</option>
										
											<option value="RA">
												Ravenna
											</option>
										
											<option value="RC">
												Reggio Calabria
											</option>
										
											<option value="RE">
												Reggio Emilia
											</option>
										
											<option value="RI">
												Rieti
											</option>
										
											<option value="RN">
												Rimini
											</option>
										
											<option value="RM">
												Roma
											</option>
										
											<option value="RO">
												Rovigo
											</option>
										
											<option value="SA">
												Salerno
											</option>
										
											<option value="SS">
												Sassari
											</option>
										
											<option value="SV">
												Savona
											</option>
										
											<option value="SI">
												Siena
											</option>
										
											<option value="SR">
												Siracusa
											</option>
										
											<option value="SO">
												Sondrio
											</option>
										
											<option value="SU">
												Sud Sardegna
											</option>
										
											<option value="TA">
												Taranto
											</option>
										
											<option value="TE">
												Teramo
											</option>
										
											<option value="TR">
												Terni
											</option>
										
											<option value="TO">
												Torino
											</option>
										
											<option value="TP">
												Trapani
											</option>
										
											<option value="TN">
												Trento
											</option>
										
											<option value="TV">
												Treviso
											</option>
										
											<option value="TS">
												Trieste
											</option>
										
											<option value="UD">
												Udine
											</option>
										
											<option value="VA">
												Varese
											</option>
										
											<option value="VE">
												Venezia
											</option>
										
											<option value="VB">
												Verbano-Cusio-Ossola
											</option>
										
											<option value="VC">
												Vercelli
											</option>
										
											<option value="VR">
												Verona
											</option>
										
											<option value="VV">
												Vibo Valentia
											</option>
										
											<option value="VI">
												Vicenza
											</option>
										
											<option value="VT">
												Viterbo
											</option>
										
											<option value="ZA">
												Zara
											</option>
										
									</select>	
								</div>		
							
							</div>
						</div>
						<div class="form-group">				
							<div class="row">
								<div class="form-field-input col-sm-6 col-xs-12">
									<label class="control-label" for="redditoAnnuoNetto0">Reddito annuo </label>
									<select id="redditoAnnuoNetto0" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.codRedditoAnnuoNetto" onchange="checkReddito(0, true)" class="fixed-size reddito form-control">
										<option value="">Seleziona</option>
										
											<option value="01">
												FINO A 10.000 EURO
											</option>
										
											<option value="02">
												DA 10.001 A 25.000 EURO
											</option>
										
											<option value="03">
												DA 25.001 A 40.000 EURO
											</option>
										
											<option value="04">
												DA 40.001 A 75.000 EURO
											</option>
										
											<option value="05">
												DA 75.001 A 500.000 EURO
											</option>
										
											<option value="06">
												DA 500.001 A 2.500.000 EURO
											</option>
										
											<option value="07">
												OLTRE 2.500.000 EURO
											</option>
										
											<option value="08">
												PRIVO DI REDDITO/ALTRO
											</option>
										
									</select>
								</div>
								<!-- qui va note del reddito -->
								<div class="form-field-input col-sm-6 col-xs-12" id="note10" style="display: none;">
									<label class="control-label" for="noteRedditoAnnuoNetto0">Note Reddito annuo </label>
									<input type="text" id="noteRedditoAnnuoNetto0" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.noteRedditoAnnuoNetto" class="fixed-size form-control" maxlength="100" value="">
								</div>
							</div>
						</div>
						<!-- qui va origine del reddito -->
						<div class="form-group">				
							<div class="row">
								<div class="form-field-input col-sm-6 col-xs-12">
									<label class="control-label" for="origineReddito0">Origine del reddito </label>
									<select id="origineReddito0" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.origineReddito" onchange="checkOrigineReddito(0, true)" class="fixed-size originereddito form-control">
										<option value="">Seleziona</option>
										
											<option value="01">
												LAVORO DIPENDENTE
											</option>
										
											<option value="02">
												LAVORO AUTONOMO
											</option>
										
											<option value="03">
												RENDITE IMMOBILIARI
											</option>
										
											<option value="04">
												RENDITE FONDIARIE
											</option>
										
											<option value="05">
												REDDITI FINANZIARI
											</option>
										
											<option value="06">
												PENSIONE
											</option>
										
											<option value="07">
												ALTRO
											</option>
										
									</select>
								</div>
								<!-- qui va note dell'origine del reddito -->
								<div class="form-field-input col-sm-6 col-xs-12" id="note20" style="display: none;">
									<label class="control-label" for="noteOrigineReddito0">Note Origine del reddito </label>
									<input type="text" id="noteOrigineReddito0" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.noteOrigineReddito" class="fixed-size form-control" maxlength="100" value="">
								</div>
							</div>
						</div>
						
						<div class="form-group">				
							<div class="row">
								<div class="form-field-input col-sm-6 col-xs-12">
									<label class="control-label" for="patrimonio0">
											Patrimonio 
											<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=1803')" class="no-underline btn-icon hidden-xs"><i class="icon icon-info_fill"></i></a>
								
											<script type="text/javascript">
											$(function() {
												if ($("#helpDialog").length==0) {
													var helpDialog = $("<div>", {
															"class": "modal fade helpDialog",
															"id": "helpDialog",
															"tabindex": "-1",
															"role": "dialog",
															"aria-labelledby": "myLargeModalLabel"});
													var modalContent = $("<div>").addClass("modal-content");
													helpDialog.append($("<div>").addClass("modal-dialog")
															.append(modalContent));
													modalContent.append($("<div>").addClass("modal-header clearfix")
															.append($("<button>", {
																"type": "button",
																"class": "close",
																"data-dismiss": "modal",
																"aria-label": "Close"})
																.append($("<span>", {
																	"aria-hidden":"true"}).html("&times;"))));
													modalContent.append($("<div>").addClass("modal-body"));
													$("body").prepend(helpDialog);
												}
											});
											</script>
									</label>
									<select id="patrimonio0" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.codPatrimonio" onchange="checkPatrimonio(0, true)" class="fixed-size patrimonio form-control">
										<option value="">Seleziona</option>
										
											<option value="01">
												FINO A 100.000 EURO
											</option>
										
											<option value="02">
												DA 100.001 A 300.000 EURO
											</option>
										
											<option value="03">
												DA 300.001 A 1.000.000 EURO
											</option>
										
											<option value="04">
												DA 1.000.001 A 3.000.000 EURO
											</option>
										
											<option value="05">
												DA 3.000.001 A 10.000.000 EURO
											</option>
										
											<option value="06">
												OLTRE 10.000.000 EURO
											</option>
										
											<option value="07">
												PRIVO DI PATRIMONIO/ALTRO
											</option>
										
									</select>
								</div>
								<!-- qui va note del patrimonio -->
								<div class="form-field-input col-sm-6 col-xs-12" id="note30" style="display: none;">
										<label class="control-label" for="notePatrimonio0">Note Patrimonio </label>
										<input type="text" id="notePatrimonio0" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.notePatrimonio" class="fixed-size form-control" maxlength="100" value="">
								</div>
							</div>
						</div>
						<!-- qui va origine del patrimonio (orig. fondi) -->
						<div class="form-group">				
							<div class="row">
								<div class="form-field-input col-sm-6 col-xs-12">
									<label class="control-label" for="originePatrimonio0">
											Origine del patrimonio 
											<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=2542')" class="no-underline btn-icon hidden-xs"><i class="icon icon-info_fill"></i></a>
											<script type="text/javascript">
											$(function() {
												if ($("#helpDialog").length==0) {
													var helpDialog = $("<div>", {
															"class": "modal fade helpDialog",
															"id": "helpDialog",
															"tabindex": "-1",
															"role": "dialog",
															"aria-labelledby": "myLargeModalLabel"});
													var modalContent = $("<div>").addClass("modal-content");
													helpDialog.append($("<div>").addClass("modal-dialog")
															.append(modalContent));
													modalContent.append($("<div>").addClass("modal-header clearfix")
															.append($("<button>", {
																"type": "button",
																"class": "close",
																"data-dismiss": "modal",
																"aria-label": "Close"})
																.append($("<span>", {
																	"aria-hidden":"true"}).html("&times;"))));
													modalContent.append($("<div>").addClass("modal-body"));
													$("body").prepend(helpDialog);
												}
											});
											</script>
									</label>
									<select id="originePatrimonio0" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.origineFondi" onchange="checkOriginePatrimonio(0, true)" class="fixed-size originepatrimonio form-control">
										<option value="">Seleziona</option>
										
											<option value="01">
												REDDITI DI LAVORO AUTONOMO
											</option>
										
											<option value="02">
												REDDITI DI LAVORO DIPENDENTE
											</option>
										
											<option value="03">
												RENDITE FONDIARIE
											</option>
										
											<option value="04">
												REDDITI FINANZIARI
											</option>
										
											<option value="05">
												REDDITI D'IMPRESA
											</option>
										
											<option value="06">
												LASCITO\EREDITA'\DONAZIONE
											</option>
										
											<option value="07">
												ALTRO/ REDDITI DIVERSI (PLUSVALENZE, PREMI, LOTTERIE, INDENNITA', ECC.)
											</option>
										
									</select>
								</div>
								<!-- qui va note dell'origine del patrimonio -->
								<div class="form-field-input col-sm-6 col-xs-12" id="note40" style="display: none;">
									<label class="control-label" for="noteOriginePatrimonio0">Note Origine del patrimonio </label>
									<input type="text" id="noteOriginePatrimonio0" name="propostaConferma.listaCointestatari[0].adeguataVerificaForm.noteOriginePatrimonio" class="fixed-size form-control" maxlength="100" value="">
								</div>
							</div>
						</div>
						<!-- qui va altre attività (solo monitoraggio alto/scaduto) -->
					</div>
				</section>
				<script>
						//js per checkbox titolare effettivo
						$("input[id^='titEff']").each(function(){
							var indice1 = $(this).attr("id").substring(6)
							if ($('#titEff' + indice1).checked) {
								$('#titEffHidden' + indice1).disabled = true;
							}
						});

						$(document).ready(function() 
						{
							//js per flag persona politicamente esposta (con selettore per indice per ogni cointestatario, senza passarlo dall'html)
							$("input[id^='pepIniziale']").each(function(){
								var indice = $(this).attr("id").substring(11);
								if ($(this).val() == "true") {
									$('#pepNo' + indice).attr('disabled', true);
								} else  {
									$('#pepNo' + indice).attr('disabled', false);
								}
							});
						
							var activeId = 0;
							
							if ($("input[name='kidFlag1']:checked").length==1) {
								$("input[name='kidFlag1']").attr("disabled", false);
							}
							
							var toActivate = 'infoPreOrdine';
							$('.accordion h3[accordion="true"]').each(function(i, div) {
								var el_c = $(div).attr("class");
								if (toActivate == el_c) {
									activeId = i;
								} 
							});
							
							if( /Android|webOS|iPhone|iPad|iPod/i.test(navigator.userAgent) ) {
								$('#downloadPdfMobile').css('display', 'inline');
							}
							
							$('.accordion').each(function(i, div) 
							{
								$(div).accordion({
										active: activeId, //tutti aperti in caso di errore				
										animated: ($.browser.msie && parseInt($.browser.version) <= 6) ? false : 'slide',
										heightStyle: "content",
										collapsible: true
								});
							});
							
							$('.attEconomica').each(function(i, div) {
								$('#attEconomica' + i).combobox({
									idHiddenInput: 'descAttEconomica' + i
								});
							});
							
							var mostra = 'false';
							
							$('.professione').each(function(i, div) {
								checkProfessione(i, mostra);
							});
							
							/* 		$('.provincia').each(function(i, element) {
								checkNazione(i);
							}); */
							
							$('.reddito').each(function(i, div) {
								checkReddito(i, false);
							}); 
							
							$('.originereddito').each(function(i, div) {
								checkOrigineReddito(i, false);
							});
							
							$('.patrimonio').each(function(i, div) {
								checkPatrimonio(i, false);
							});
							
							$('.originepatrimonio').each(function(i, div) {
								checkOriginePatrimonio(i, false);
							});
							
						});
						
						function checkNazione(index) {
							var value = $('#nazione' + index).val();
							if (value != '086') { // diverso da italia
								$('#provincia' + index).val('');
								$('#provincia' + index).attr('disabled', 'disabled');
							} else {
								$('#provincia' + index).removeAttr('disabled');
							}
						}

						function checkNazioneCorrispondenza() {
							var value = $('#nazioneSelect').val();

							$('#comuneCorrispondenza').val('');
							$('#capCorrispondenza').val('');
							$('#indirizzoCorrispondenza').val('');

							if (value != '') { // diverso da italia			
								$('#provinciaCorrispondenza').val('');
								$('#provinciaCorrispondenza').attr('disabled', 'disabled');
								$('#provinciaCorrispondenza').css('background-color', '#C0C0C0');
							} else {
								$('#provinciaCorrispondenza').removeAttr('disabled');
								$('#provinciaCorrispondenza').css('background-color', '');
							}
						}
						
						$('.moduloCondizioni').on('click',function(){
							$(this).parent().parent().next('tr').find('input[type="checkbox"]').removeAttr("disabled");
						;
						})
						
						//Se la professione corrisponde a PENSIONATO o NON OCCUPATO vengono inibiti i successivi 3 campi	
						function checkProfessione(index, mostra) {
							var value = $('#professione' + index).val();
							if (value == '05' || value == '06') 
							{
								$('#provincia' + index).val('');
								$('#provincia' + index).attr('disabled', 'disabled');
								$('#nazione' + index).val('086');
								$('#nazione' + index).attr('disabled', 'disabled');
								$('#nazioneRapporti' + index).val('');
								$('#nazioneRapporti' + index).attr('disabled', 'disabled');
								$('#nazioneRapporti' + index).css('background-color', '#C0C0C0');
								if (value=='06')
								{
									$('#attEconomica' + index).val('');
									$('#attEconomica' + index).combobox('disable');
									var combobox = $('#attEconomica' + index).siblings('.ui-combobox');
									combobox.find('input, button').prop('disabled', true);
									combobox.find('input, button').val('');
								}else {
									$('#attEconomica' + index).combobox('enable');
									var combobox = $('#attEconomica' + index).siblings('.ui-combobox');
									combobox.find('input, button').prop('disabled', false);
								}
								
							}
							else 
							{
								$('#attEconomica' + index).combobox('enable');
								$('#nazione' + index).removeAttr('disabled');
								$('#nazioneRapporti' + index).removeAttr('disabled');
								$('#nazioneRapporti' + index).css('background-color', '');			
								checkNazione(index);
								$('#attEconomica' + index).combobox('enable');
								var combobox = $('#attEconomica' + index).siblings('.ui-combobox');
								combobox.find('input, button').prop('disabled', false);
							}
						
							//controllo aggiuntivo per profilo ALTO/SCADUTO, mostro "Ultima professione svolta" se ha scelto PENSIONATO
							if (mostra)
							{
								if (value=='05'){
									$('#ultimaprofpens' + index).show();
								}
								else{
									$('#ultimaprofpens' + index).hide();
									$('#ultimaprofpens' + index).find('#ultimaProfessione' + index).val("-");
								}
							}
						}
						
						//Se viene selezionato "PRIVO DI REDDITO/ALTRO" viene visualizzato "Note del reddito"
						function checkReddito(index, svuota) {
							var value = $('#redditoAnnuoNetto' + index).val();
							if (value == '08')
							{
								$('#note1' + index).show();
							}
							else
							{
								$('#note1' + index).hide();
							}
							if (svuota)
							{
								$('#noteRedditoAnnuoNetto' + index).val('');
							}
						}
						
						//Se viene selezionato "ALTRO" viene visualizzato "Note dell'origine del reddito"
						function checkOrigineReddito(index, svuota) {
							var value = $('#origineReddito' + index).val();
							if (value == '07')
							{
								$('#note2' + index).show();
							}
							else
							{
								$('#note2' + index).hide();
							}
							if (svuota)
							{
								$('#noteOrigineReddito' + index).val('');
							}
						}
						
						//Se viene selezionato "PRIVO DI PATRIMONIO/ALTRO" viene visualizzato "Note del patrimonio"
						function checkPatrimonio(index, svuota) {
							var value = $('#patrimonio' + index).val();
							if (value == '07')
							{
								$('#note3' + index).show();
							}
							else
							{
								$('#note3' + index).hide();
							}
							if (svuota)
							{
								$('#notePatrimonio' + index).val('');
							}
						}
						
						//Se viene selezionato "ALTRO/REDDITI DIVERSI" viene visualizzato "Note dell'origine del patrimonio"
						function checkOriginePatrimonio(index, svuota) {
							var value = $('#originePatrimonio' + index).val();
							if (value == '07')
							{
								$('#note4' + index).show();
							}
							else
							{
								$('#note4' + index).hide();
							}
							if (svuota)
							{
								$('#noteOriginePatrimonio' + index).val('');
							}
						}

						
						// js per campo attività economica		
						var oldValue = "";
						$(function( $, undefined ) {
							$.widget( "ui.combobox", {
								version: "@VERSION",
								widgetEventPrefix: "combobox",
								uiCombo: null,
								uiInput: null,
								_wasOpen: false,
								_create: function() {
									var self = this,
										select = this.element.hide(),
										input, wrapper;
										
									input = this.uiInput =
										$( "<input />" )
											.insertAfter(select)
											.addClass("ui-widget ui-widget-content  ui-combobox-input form-control")
											.val(select.children(':selected').text())
											.attr('tabindex', select.attr( 'tabindex'))
											.attr('aria-autocomplete', 'inline')
											.css('width', '90%');
											
									wrapper = this.uiCombo = 
										input.wrap( '<span>' )
										.parent()
										.addClass( 'ui-combobox' )
										.insertAfter( select );
										
									input.autocomplete({
										delay: 0,
										minLength: 0,
										appendTo: wrapper,
										source: $.proxy( this, "_linkSelectList" ),
										select: function(event, ui) {
											$(this).attr('title', ui.item.value);
										}
									});
								
									input.focusin(function() {
										oldValue = $(this).val();
										$(this).val("");
									});
								
									input.focusout(function() {
										$(this).val(oldValue);
									});
						
									$( "<button>" )
										.attr( "tabIndex", -1 )
										.attr( "type", "button" )
										.insertAfter( input )
										.button({
											icons: {
												primary: "ui-icon-triangle-1-s"
											},
											text: false})
										.append('<i class="icon icon-arrow_down"></i>')
										.removeClass("ui-corner-all")
										.addClass("ui-button-icon ui-combobox-button dropdown-arrow");
						
									// Our items have HTML tags.  The default rendering uses text()
									// to set the content of the <a> tag.  We need html().
									input.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
										ul.attr('role','listbox')
										.attr('aria-expanded','true');
										
										return $( "<li>" )
											.attr('class', item.option.className)
											.attr('role', 'option')
											.append( $( "<a>" ).html( item.label ) )
											.appendTo( ul );
									};
									this._on( this._events );
								},
						
								_linkSelectList: function( request, response ) {
									var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), 'i' );
									response( this.element.children('option:not([style*="display: none"])').map(function() {  
										var text = $( this ).text();
										var value = $(this).attr('value');
										var id = $(this).attr('id');
							
										if ( this.value && ( !request.term || matcher.test(text) ) ) {
											var optionData = {
												label: text,
												value: text,
												id:id,
												option: this
										};
										if (request.term) {
											optionData.label = text.replace(
											new RegExp(
												"(?![^&;]+;)(?!<[^<>]*)(" +
												$.ui.autocomplete.escapeRegex(request.term) +
												")(?![^<>]*>)(?![^&;]+;)", "gi"),
												"<strong>$1</strong>");
										}
										return optionData;
										}}));
								},
						
								_events: {
									"autocompletechange input" : function(event, ui) {
										var $el = $(event.currentTarget);
										var changedOption = ui.item ? ui.item.option : null;
										if ( !ui.item ) {
											var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( $el.val() ) + "$", "i" ),
											valid = false,
											matchContains = null,
											iContains = 0,
											iSelectCtr = -1,
											iSelected = -1,
											optContains = null;
											if (this.options.autofillsinglematch) {
												matchContains = new RegExp($.ui.autocomplete.escapeRegex($el.val()), "i");
											}
						
											this.element.children( "option" ).each(function() {
												var t = $(this).text();
												if ( t.match( matcher ) ) {
													this.selected = valid = true;
													return false;
												}
												if (matchContains) {
													// look for items containing the value
													iSelectCtr++;
													if (t.match(matchContains)) {
													iContains++;
													optContains = $(this);
													iSelected = iSelectCtr;
													}
												}
											});
						
											if ( !valid ) {
												// autofill option:  if there is just one match, then select the matched option
												if (iContains == 1) {
													changedOption = optContains[0];
													changedOption.selected = true;
													var t2 = optContains.text();
													$el.val(t2);
													$el.data('ui-autocomplete').term = t2;
													this.element.prop('selectedIndex', iSelected);
											
												} else {
													// remove invalid value, as it didn't match anything
													$el.val( '' );
													// Internally, term must change before another search is performed
													// if the same search is performed again, the menu won't be shown
													// because the value didn't actually change via a keyboard event
													$el.data( 'ui-autocomplete' ).term = '';
						
													this.element.prop('selectedIndex', -1);
												}
											}
										}
						
										this._trigger( "change", event, {
											item: changedOption
										});
									},
						
						
								"autocompleteselect input": function( event, ui ) {
										ui.item.option.selected = true;
										oldValue = $(ui.item.option).text();
										
										// set della descrizione
										$("#descAttEconomica0").val($(ui.item.option).text());
								
										this._trigger( "select", event, {
											item: ui.item.option
										});
									},
						
									"autocompleteopen input": function ( event, ui ) {
										this.uiCombo.children('.ui-autocomplete')
											.outerWidth(this.uiCombo.outerWidth(true));
									},
						
									"mousedown .ui-combobox-button" : function ( event ) {
										this._wasOpen = this.uiInput.autocomplete("widget").is(":visible");
									},
						
									// click sul triangolo che apre la combobox 
									"click .ui-combobox-button" : function( event ) {
										this.uiInput.focus();
										// close if already visible
										if (this._wasOpen)
											return;
										// pass empty string as value to search for, displaying all results
										this.uiInput.autocomplete("search", "");
									}
								},
						
								value: function ( newVal ) {
									var select = this.element,
										valid = false,
										selected;
						
									if ( !arguments.length ) {
										selected = select.children( ":selected" );
										return selected.length > 0 ? selected.val() : null;
									}
						
									select.prop('selectedIndex', -1);
									select.children('option').each(function() {
										if ( this.value == newVal ) {
											this.selected = valid = true;
											return false;
										}
									});
						
									if ( valid ) {
										this.uiInput.val(select.children(':selected').text());
										this.uiInput.attr('title', select.children(':selected').text())
									} else {
										this.uiInput.val( "" );
										this.element.prop('selectedIndex', -1);
									}
								},
						
								_destroy: function () {
									this.element.show();
									this.uiCombo.replaceWith( this.element );
								},
						
								widget: function () {
									return this.uiCombo;
								},
						
								_getCreateEventData: function() {
									return {
										select: this.element,
										combo: this.uiCombo,
										input: this.uiInput
									};
								}
							});
							
							$('#attEconomica' + '0').combobox();
						}(jQuery));

					</script>
				<section>
					<input type="hidden" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.pepIniziale" id="pepIniziale1" value="false">
					<div class="formWrapper">
							<!-- PREAMBOLO -->
							<div class="form-group">
								<h3 class="titleSection titleForm">Normativa antiriciclaggio</h3>
							</div>
							<!-- IN CASO NON SIA INSERITO IL NOME NON MOSTRO IL MESSAGGIO -->
							<h3 class="titleSection labelIntestazioneSelezioneCC">SCLAVO MAURO</h3>
							Gentile SCLAVO MAURO,
							<div class="form-group">
								<div class="row">
									<div class="col-xs-12">
										<p>Ai fini della normativa antiriciclaggio (D-Lgs. 231/07 e successive integrazioni e modifiche) sei tenuto a fornire alcune informazioni
										<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=2543')" class="text-underline btn-icon hidden-xs">obbligatorie</a>
										<script type="text/javascript">
										$(function() {
											if ($("#helpDialog").length==0) {
												var helpDialog = $("<div>", {
														"class": "modal fade helpDialog",
														"id": "helpDialog",
														"tabindex": "-1",
														"role": "dialog",
														"aria-labelledby": "myLargeModalLabel"});
												var modalContent = $("<div>").addClass("modal-content");
												helpDialog.append($("<div>").addClass("modal-dialog")
														.append(modalContent));
												modalContent.append($("<div>").addClass("modal-header clearfix")
														.append($("<button>", {
															"type": "button",
															"class": "close",
															"data-dismiss": "modal",
															"aria-label": "Close"})
															.append($("<span>", {
																"aria-hidden":"true"}).html("&times;"))));
												modalContent.append($("<div>").addClass("modal-body"));
												$("body").prepend(helpDialog);
											}
										});
										</script>
										relative ai rapporti da te intrattenuti con la Banca.<br><br>La normativa sopra citata impone ai clienti di fornire tutte le informazioni necessarie e aggiornate e prevede sanzioni penali a loro carico nel caso in cui le stesse siano false. 
										</p>
									</div>
								</div>
							</div>
							<!-- FINE PREAMBOLO -->
							<!--SCOPO PREVALENTE DEL RAPPORTO, CASO YW E CASO WB -->
							<div class="form-group">		
								<div class="row">
									<div class="form-field-input col-sm-6 col-xs-12">
										<label class="control-label" for="scopo1">Scopo prevalente del rapporto Fondi</label>
										<select id="scopo1" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.valoreSpecificoRapporto[0].rispostaSelezionata" "="" class="fixed-size form-control">
											<option value="">Seleziona</option>
											
												<option value="01">
													Risparmio
												</option>
											
												<option value="02">
													Finanziamento
												</option>
											
												<option value="03">
													Investimento
												</option>
											
												<option value="04">
													Servizi vari
												</option>
											
												<option value="05">
													Gestione necessità familiari
												</option>
											
										</select>	
									</div>
									<div class="form-field-input col-sm-6 col-xs-12">
										<label class="control-label"for="scopo1">Scopo prevalente del rapporto Sicav </label>
										<select id="scopo1" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.valoreSpecificoRapporto[1].rispostaSelezionata" "="" class="fixed-size form-control">
												<option value="">Seleziona</option>
												
													<option value="01">
														Risparmio
													</option>
												
													<option value="02">
														Finanziamento
													</option>
												
													<option value="03">
														Investimento
													</option>
												
													<option value="04">
														Servizi vari
													</option>
												
													<option value="05">
														Gestione necessità familiari
													</option>
												
											</select>
									</div>
								</div>
							</div>
					        <div class="form-group">
								<h3 class="titleSection titleForm">Informazioni personali </h3>
							</div>
							<!--TITOLARE EFFETTIVO -->
							<div class="form-group">
								<div class="row">
									<div class="col-xs-12">
										<label class="control-label">
											<strong>Titolare effettivo: </strong>
											<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=1801')" class="no-underline btn-icon hidden-xs"><i class="icon icon-info_fill"></i></a>
											<script type="text/javascript">
											$(function() {
												if ($("#helpDialog").length==0) {
													var helpDialog = $("<div>", {
															"class": "modal fade helpDialog",
															"id": "helpDialog",
															"tabindex": "-1",
															"role": "dialog",
															"aria-labelledby": "myLargeModalLabel"});
													var modalContent = $("<div>").addClass("modal-content");
													helpDialog.append($("<div>").addClass("modal-dialog")
															.append(modalContent));
													modalContent.append($("<div>").addClass("modal-header clearfix")
															.append($("<button>", {
																"type": "button",
																"class": "close",
																"data-dismiss": "modal",
																"aria-label": "Close"})
																.append($("<span>", {
																	"aria-hidden":"true"}).html("&times;"))));
													modalContent.append($("<div>").addClass("modal-body"));
													$("body").prepend(helpDialog);
												}
											});
											</script>
										</label>
									</div>
								</div>
								<div class="row">
									<div class="form-field-input col-xs-12">
										<label>
											<input class="flLeft" type="checkbox" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.titolareEffettivoRapporto" value="true" id="titEff1">
											<input type="hidden" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.titolareEffettivoRapporto" value="false" id="titEffHidden1">
											<span class="flLeft text-checkbox-mobile">Dichiaro di essere il titolare effettivo dei rapporti a me intestati e di agire esclusivamente per mio conto.</span>
										</label>
									</div>
								</div>
											
				
						<!--PERSONA POLITICAMENTE ESPOSTA  -->
						<div class="form-group">				
							<div class="row">
								<div class="col-xs-12">
									<label class="control-label">
										<strong>Sei una persona politicamente esposta? </strong>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="form-field-input col-xs-12">
									<label>
										Importante: le "persone politicamente esposte" (PeP) sono: le persone fisiche che occupano o hanno occupato importanti cariche pubbliche nonchè i loro familiari diretti o coloro con i quali tali persone intrattengono notoriamente stretti legami.
										<br>
									</label>
									<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=1802')" class="text-underline btn-icon hidden-xs">LEGGI LA DEFINIZIONE COMPLETA</a>
									<script type="text/javascript">
									$(function() {
										if ($("#helpDialog").length==0) {
											var helpDialog = $("<div>", {
													"class": "modal fade helpDialog",
													"id": "helpDialog",
													"tabindex": "-1",
													"role": "dialog",
													"aria-labelledby": "myLargeModalLabel"});
											var modalContent = $("<div>").addClass("modal-content");
											helpDialog.append($("<div>").addClass("modal-dialog")
													.append(modalContent));
											modalContent.append($("<div>").addClass("modal-header clearfix")
													.append($("<button>", {
														"type": "button",
														"class": "close",
														"data-dismiss": "modal",
														"aria-label": "Close"})
														.append($("<span>", {
															"aria-hidden":"true"}).html("&times;"))));
											modalContent.append($("<div>").addClass("modal-body"));
											$("body").prepend(helpDialog);
										}
									});
									</script>
								</div>
							</div>
							<div class="row">
								<div class="form-field-input col-xs-6 col-sm-2">
									<input type="radio" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.pep" value="true" class="sfondoForm" id="pepSi1">
									<label for="pepSi1">Sì </label>
								</div>
								<div class="form-field-input col-xs-6 col-sm-2">
									<input type="radio" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.pep" value="false" class="sfondoForm" id="pepNo1" checked="checked">
									<label for="pepNo1">No </label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="form-field-input col-sm-6 col-xs-12">
									<label class="control-label" for="secondaCittadinanza1">Seconda cittadinanza </label>
									<select id="secondaCittadinanza1" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.secondaNazione" class="fixed-size form-control">
										<option value="-">Seleziona</option>
										
											<option value="676">
												ABU DHABI
											</option>
										
											<option value="905">
												AFGHANISTAN
											</option>
										
											<option value="846">
												AFRICA DEL SUD OVEST - NAMIBIA
											</option>
										
											<option value="801">
												AFRICA SPAGNOLA
											</option>
										
											<option value="677">
												AJMAN
											</option>
										
											<option value="786">
												ALAND ISOLE
											</option>
										
											<option value="658">
												ALBANIA
											</option>
										
											<option value="803">
												ALGERIA
											</option>
										
											<option value="955">
												AMERICAN SAMOA
											</option>
										
											<option value="639">
												ANDORRA
											</option>
										
											<option value="849">
												ANGOLA
											</option>
										
											<option value="712">
												ANGUILLA
											</option>
										
											<option value="739">
												ANTIGUA E BARBUDA
											</option>
										
											<option value="908">
												ARABIA SAUDITA
											</option>
										
											<option value="737">
												ARGENTINA
											</option>
										
											<option value="781">
												ARMENIA
											</option>
										
											<option value="641">
												ARUBA
											</option>
										
											<option value="666">
												ASCENSION
											</option>
										
											<option value="950">
												AUSTRALIA
											</option>
										
											<option value="628">
												AUSTRIA
											</option>
										
											<option value="780">
												AZERBAIGIAN
											</option>
										
											<option value="815">
												AZZORRE ISOLE
											</option>
										
											<option value="728">
												BAHAMA
											</option>
										
											<option value="940">
												BAHREIN
											</option>
										
											<option value="943">
												BANGLADESH
											</option>
										
											<option value="718">
												BARBADOS
											</option>
										
											<option value="602">
												BELGIO
											</option>
										
											<option value="704">
												BELIZE
											</option>
										
											<option value="822">
												BENIN
											</option>
										
											<option value="729">
												BERMUDA
											</option>
										
											<option value="918">
												BHUTAN
											</option>
										
											<option value="764">
												BIELORUSSIA
											</option>
										
											<option value="734">
												BOLIVIA
											</option>
										
											<option value="784">
												BONAIRE SAINT EUSTATIUS AND SABA
											</option>
										
											<option value="694">
												BOSNIA ERZEGOVINA
											</option>
										
											<option value="841">
												BOTSWANA
											</option>
										
											<option value="732">
												BRASILE
											</option>
										
											<option value="944">
												BRUNEI DARUSSALAM
											</option>
										
											<option value="657">
												BULGARIA
											</option>
										
											<option value="810">
												BURKINA FASO
											</option>
										
											<option value="830">
												BURUNDI
											</option>
										
											<option value="924">
												CAMBOGIA (CAMPUCEA)
											</option>
										
											<option value="824">
												CAMERUN
											</option>
										
											<option value="612">
												CAMPIONE D'ITALIA
											</option>
										
											<option value="702">
												CANADA
											</option>
										
											<option value="709">
												CAYMAN ISOLE
											</option>
										
											<option value="669">
												CHAFARINAS
											</option>
										
											<option value="812">
												CIAD
											</option>
										
											<option value="733">
												CILE
											</option>
										
											<option value="939">
												CIPRO
											</option>
										
											<option value="636">
												CITTA DEL VATICANO
											</option>
										
											<option value="662">
												CLIPPERTON
											</option>
										
											<option value="725">
												COLOMBIA
											</option>
										
											<option value="858">
												COMORE
											</option>
										
											<option value="829">
												CONGO REPUBBLICA DEMOCRATICA
											</option>
										
											<option value="828">
												CONGO REPUBBLICA POPOLARE
											</option>
										
											<option value="933">
												COREA DEL NORD
											</option>
										
											<option value="934">
												COREA DEL SUD
											</option>
										
											<option value="819">
												COSTA D'AVORIO
											</option>
										
											<option value="716">
												COSTARICA
											</option>
										
											<option value="761">
												CROAZIA
											</option>
										
											<option value="719">
												CUBA
											</option>
										
											<option value="785">
												CURACAO
											</option>
										
											<option value="609">
												DANIMARCA
											</option>
										
											<option value="708">
												DOMINICA
											</option>
										
											<option value="678">
												DUBAI
											</option>
										
											<option value="730">
												ECUADOR
											</option>
										
											<option value="806">
												EGITTO
											</option>
										
											<option value="714">
												EL SALVADOR
											</option>
										
											<option value="848">
												ERITREA
											</option>
										
											<option value="690">
												ESTONIA
											</option>
										
											<option value="832">
												ETIOPIA
											</option>
										
											<option value="615">
												FALKLAND
											</option>
										
											<option value="929">
												FILIPPINE
											</option>
										
											<option value="625">
												FINLANDIA
											</option>
										
											<option value="601">
												FRANCIA
											</option>
										
											<option value="679">
												FUIJAYRAH
											</option>
										
											<option value="827">
												GABON
											</option>
										
											<option value="814">
												GAMBIA
											</option>
										
											<option value="767">
												GEORGIA
											</option>
										
											<option value="820">
												GHANA
											</option>
										
											<option value="741">
												GIAMAICA
											</option>
										
											<option value="935">
												GIAPPONE
											</option>
										
											<option value="611">
												GIBILTERRA
											</option>
										
											<option value="859">
												GIBUTI
											</option>
										
											<option value="907">
												GIORDANIA
											</option>
										
											<option value="667">
												GOUGH
											</option>
										
											<option value="632">
												GRECIA
											</option>
										
											<option value="705">
												GRENADA
											</option>
										
											<option value="703">
												GROENLANDIA
											</option>
										
											<option value="643">
												GUADALUPA
											</option>
										
											<option value="626">
												GUAM
											</option>
										
											<option value="711">
												GUATEMALA
											</option>
										
											<option value="740">
												GUAYANA FRANCESE
											</option>
										
											<option value="617">
												GUERNSEY C.I.
											</option>
										
											<option value="816">
												GUINEA
											</option>
										
											<option value="851">
												GUINEA BISSAU
											</option>
										
											<option value="826">
												GUINEA EQUATORIALE
											</option>
										
											<option value="727">
												GUYANA
											</option>
										
											<option value="720">
												HAITI
											</option>
										
											<option value="788">
												HEARD E MCDONALD ISOLE
											</option>
										
											<option value="713">
												HONDURAS
											</option>
										
											<option value="945">
												HONG KONG
											</option>
										
											<option value="916">
												INDIA
											</option>
										
											<option value="927">
												INDONESIA
											</option>
										
											<option value="904">
												IRAN
											</option>
										
											<option value="903">
												IRAQ
											</option>
										
											<option value="608">
												IRLANDA
											</option>
										
											<option value="621">
												ISLANDA
											</option>
										
											<option value="619">
												ISOLA DI MAN
											</option>
										
											<option value="613">
												ISOLE CANARIE
											</option>
										
											<option value="622">
												ISOLE CAROLINE
											</option>
										
											<option value="685">
												ISOLE CHAGOS
											</option>
										
											<option value="956">
												ISOLE COOK
											</option>
										
											<option value="850">
												ISOLE DEL CAPO VERDE
											</option>
										
											<option value="620">
												ISOLE FAEROER
											</option>
										
											<option value="960">
												ISOLE FIGI
											</option>
										
											<option value="646">
												ISOLE MARSHALL
											</option>
										
											<option value="742">
												ISOLE VERGINI BRITANNICHE
											</option>
										
											<option value="971">
												ISOLE WAKE
											</option>
										
											<option value="906">
												ISRAELE
											</option>
										
											<option value="618">
												JERSEY
											</option>
										
											<option value="769">
												KAZAKISTAN
											</option>
										
											<option value="835">
												KENYA
											</option>
										
											<option value="782">
												KIRGHIZISTAN
											</option>
										
											<option value="966">
												KIRIBATI
											</option>
										
											<option value="909">
												KUWAIT
											</option>
										
											<option value="921">
												LAOS
											</option>
										
											<option value="831">
												LESOTHO
											</option>
										
											<option value="691">
												LETTONIA
											</option>
										
											<option value="901">
												LIBANO
											</option>
										
											<option value="818">
												LIBERIA
											</option>
										
											<option value="805">
												LIBIA
											</option>
										
											<option value="637">
												LIECHTENSTEIN
											</option>
										
											<option value="692">
												LITUANIA
											</option>
										
											<option value="603">
												LUSSEMBURGO
											</option>
										
											<option value="930">
												MACAO
											</option>
										
											<option value="695">
												MACEDONIA
											</option>
										
											<option value="840">
												MADAGASCAR
											</option>
										
											<option value="674">
												MADEIRA
											</option>
										
											<option value="839">
												MALAWI
											</option>
										
											<option value="942">
												MALAYSIA
											</option>
										
											<option value="928">
												MALDIVE
											</option>
										
											<option value="809">
												MALI
											</option>
										
											<option value="631">
												MALTA
											</option>
										
											<option value="648">
												MARIANNE (ISOLE)
											</option>
										
											<option value="802">
												MAROCCO
											</option>
										
											<option value="642">
												MARTINICA
											</option>
										
											<option value="808">
												MAURITANIA
											</option>
										
											<option value="844">
												MAURIZIO
											</option>
										
											<option value="665">
												MAYOTTE
											</option>
										
											<option value="670">
												MELILLA
											</option>
										
											<option value="710">
												MESSICO
											</option>
										
											<option value="644">
												MICRONESIA
											</option>
										
											<option value="634">
												MIDWAY ISOLE
											</option>
										
											<option value="765">
												MOLDAVIA
											</option>
										
											<option value="638">
												MONACO
											</option>
										
											<option value="931">
												MONGOLIA
											</option>
										
											<option value="698">
												MONTENEGRO
											</option>
										
											<option value="635">
												MONTSERRAT
											</option>
										
											<option value="852">
												MOZAMBICO
											</option>
										
											<option value="919">
												MYANMAR
											</option>
										
											<option value="961">
												NAURU
											</option>
										
											<option value="937">
												NEPAL
											</option>
										
											<option value="715">
												NICARAGUA
											</option>
										
											<option value="811">
												NIGER
											</option>
										
											<option value="823">
												NIGERIA
											</option>
										
											<option value="633">
												NIUE - SAVAGE
											</option>
										
											<option value="787">
												NORFOLK ISOLE
											</option>
										
											<option value="623">
												NORVEGIA
											</option>
										
											<option value="684">
												NUOVA CALEDONIA
											</option>
										
											<option value="951">
												NUOVA ZELANDA
											</option>
										
											<option value="952">
												OCEANIA BRITANNICA
											</option>
										
											<option value="958">
												OCEANIA DEGLI STATI UNITI
											</option>
										
											<option value="912">
												OMAN
											</option>
										
											<option value="604">
												PAESI BASSI O OLANDA
											</option>
										
											<option value="915">
												PAKISTAN
											</option>
										
											<option value="279">
												PALESTINA, TERRITORI AUTONOMI
											</option>
										
											<option value="717">
												PANAMA
											</option>
										
											<option value="963">
												PAPUA E NUOVA GUINEA
											</option>
										
											<option value="735">
												PARAGUAY
											</option>
										
											<option value="671">
												PENON DE ALHUCEMAS
											</option>
										
											<option value="672">
												PENON DE VELEZ DE LA GOMERA
											</option>
										
											<option value="731">
												PERU'
											</option>
										
											<option value="953">
												POLINESIA FRANCESE
											</option>
										
											<option value="653">
												POLONIA
											</option>
										
											<option value="629">
												PORTOGALLO
											</option>
										
											<option value="649">
												PORTORICO
											</option>
										
											<option value="941">
												QATAR
											</option>
										
											<option value="680">
												RAS EL KHAIMAN
											</option>
										
											<option value="607">
												REGNO UNITO
											</option>
										
											<option value="936">
												REP. CINA NAZ. (TAIWAN)
											</option>
										
											<option value="651">
												REPUBBLICA CECA
											</option>
										
											<option value="825">
												REPUBBLICA CENTRAFRICANA
											</option>
										
											<option value="775">
												REPUBBLICA DEL KOSOVO
											</option>
										
											<option value="645">
												REPUBBLICA DI PALAU
											</option>
										
											<option value="606">
												REPUBBLICA DI SAN MARINO
											</option>
										
											<option value="721">
												REPUBBLICA DOMINICANA
											</option>
										
											<option value="605">
												REPUBBLICA FED.DI GERMANIA
											</option>
										
											<option value="932">
												REPUBBLICA POPOLARE CINESE
											</option>
										
											<option value="843">
												REPUBBLICA SUDAFRICANA
											</option>
										
											<option value="833">
												REUNION
											</option>
										
											<option value="656">
												ROMANIA
											</option>
										
											<option value="845">
												RUANDA
											</option>
										
											<option value="762">
												RUSSIA
											</option>
										
											<option value="860">
												S.ELENA
											</option>
										
											<option value="614">
												SAHARA OCCIDENTALE
											</option>
										
											<option value="790">
												SAINT BARTHELEMY
											</option>
										
											<option value="706">
												SAINT LUCIA
											</option>
										
											<option value="964">
												SALOMONE
											</option>
										
											<option value="954">
												SAMOA OCCIDENTALE
											</option>
										
											<option value="853">
												SAO TOME' E PRINCIPE
											</option>
										
											<option value="854">
												SEICELLE
											</option>
										
											<option value="813">
												SENEGAL
											</option>
										
											<option value="697">
												SERBIA
											</option>
										
											<option value="681">
												SHARJAH
											</option>
										
											<option value="817">
												SIERRA LEONE
											</option>
										
											<option value="926">
												SINGAPORE
											</option>
										
											<option value="783">
												SINT MAARTEN (DUTCH PART)
											</option>
										
											<option value="902">
												SIRIA
											</option>
										
											<option value="652">
												SLOVACCHIA
											</option>
										
											<option value="693">
												SLOVENIA
											</option>
										
											<option value="834">
												SOMALIA
											</option>
										
											<option value="630">
												SPAGNA
											</option>
										
											<option value="917">
												SRI LANKA
											</option>
										
											<option value="616">
												ST. KITTS E NEVIS
											</option>
										
											<option value="661">
												ST. MARTIN SETTENTRIONALE
											</option>
										
											<option value="683">
												ST. PIERRE E MIQUELON
											</option>
										
											<option value="701">
												STATI UNITI D'AMERICA
											</option>
										
											<option value="807">
												SUDAN
											</option>
										
											<option value="738">
												SURINAME
											</option>
										
											<option value="789">
												SVALBARD E JAN MAYEN ISOLE
											</option>
										
											<option value="624">
												SVEZIA
											</option>
										
											<option value="627">
												SVIZZERA
											</option>
										
											<option value="847">
												SWAZILAND - NGWANE
											</option>
										
											<option value="772">
												TAGIKISTAN
											</option>
										
											<option value="837">
												TANZANIA
											</option>
										
											<option value="861">
												TERRIT.BRIT.OCC.
											</option>
										
											<option value="743">
												TERRITORI FRANCESI DEL SUD
											</option>
										
											<option value="744">
												TERRITORIO ANTARTICO BRITANNICO
											</option>
										
											<option value="920">
												THAILANDIA
											</option>
										
											<option value="946">
												TIMOR
											</option>
										
											<option value="821">
												TOGO
											</option>
										
											<option value="675">
												TOKELAU
											</option>
										
											<option value="962">
												TONGA
											</option>
										
											<option value="723">
												TRINIDAD E TOBAGO
											</option>
										
											<option value="668">
												TRISTAN DE CUNHA
											</option>
										
											<option value="804">
												TUNISIA
											</option>
										
											<option value="938">
												TURCHIA
											</option>
										
											<option value="777">
												TURKMENISTAN
											</option>
										
											<option value="640">
												TURKS E CAICOS
											</option>
										
											<option value="965">
												TUVALU
											</option>
										
											<option value="763">
												UCRAINA
											</option>
										
											<option value="836">
												UGANDA
											</option>
										
											<option value="682">
												UMM AL QAIWAIN
											</option>
										
											<option value="655">
												UNGHERIA
											</option>
										
											<option value="736">
												URUGUAY
											</option>
										
											<option value="778">
												UZBEKISTAN
											</option>
										
											<option value="957">
												VANUATU
											</option>
										
											<option value="726">
												VENEZUELA
											</option>
										
											<option value="660">
												VERGINI AMERICANE (ISOLE)
											</option>
										
											<option value="922">
												VIETNAM
											</option>
										
											<option value="707">
												VINCENT E GRENADINE
											</option>
										
											<option value="647">
												WALLIS E FUTUNA
											</option>
										
											<option value="913">
												YEMEN
											</option>
										
											<option value="838">
												ZAMBIA
											</option>
										
											<option value="842">
												ZIMBABWE
											</option>
										
									</select>
								</div>
							</div>
						</div>
						<!-- DOMANDE -->
						<div class="form-group">
								<h3 class="titleSection titleForm">Profilo professionale e patrimoniale</h3>
						</div>
						<div class="form-group">
								<div class="row">
									<div class="form-field-input col-sm-6 col-xs-12">
										<label class="control-label" for="professione1">Professione </label>
										<select id="professione1" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.professione" onchange="checkProfessione(1, false)" class="fixed-size professione form-control">
													<option value="-">Selziona</option>
													
														<option value="01">
															Imprenditore
														</option>
													
														<option value="02">
															Lavoratore autonomo
														</option>
													
														<option value="04">
															Lavoratore dipendente
														</option>
													
														<option value="03">
															Libero professionista
														</option>
													
														<option value="06">
															Non occupato
														</option>
													
														<option value="05">
															Pensionato
														</option>
													
														<option value="07">
															Soggetto apicale
														</option>
													
												</select>
									</div>
									<div class="form-field-input col-sm-6 col-xs-12">
													<label class="control-label" for="attEconomica1">
														Dettaglio settore 
													    <a href="javascript:OpenHelp('/WEBHT/help/page.do?id=2541')" class="no-underline btn-icon hidden-xs"><i class="icon icon-info_fill"></i></a>
														<script type="text/javascript">
														$(function() {
															if ($("#helpDialog").length==0) {
																var helpDialog = $("<div>", {
																		"class": "modal fade helpDialog",
																		"id": "helpDialog",
																		"tabindex": "-1",
																		"role": "dialog",
																		"aria-labelledby": "myLargeModalLabel"});
																var modalContent = $("<div>").addClass("modal-content");
																helpDialog.append($("<div>").addClass("modal-dialog")
																		.append(modalContent));
																modalContent.append($("<div>").addClass("modal-header clearfix")
																		.append($("<button>", {
																			"type": "button",
																			"class": "close",
																			"data-dismiss": "modal",
																			"aria-label": "Close"})
																			.append($("<span>", {
																				"aria-hidden":"true"}).html("&times;"))));
																modalContent.append($("<div>").addClass("modal-body"));
																$("body").prepend(helpDialog);
															}
														});
														</script>
													</label>
												<select id="attEconomica1" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.codAttivitaEconomica" class="form-control" style="display: none;"><option value="">-</option><option value="771">agenzie viaggio e intermediari dei trasporti</option><option value="660">alberghi e pubblici esercizi</option><option value="014">allevamento, caccia, silvicoltura e pesca</option><option value="993">altri agenti, mediatori e consulenti non ancora classificati (es. agenti sportivi)</option><option value="984">altri servizi personali non altrove classificati (servizi delle pompe funebri, di cremazione, di agenzie matrim., ecc.)</option><option value="732">autotrasportatori di contante, titoli e valori c/ terzi</option><option value="829">bancari</option><option value="463">carpenteria e costruzioni in legno, lavori in legno per edilizia</option><option value="010">coltivazione prodotti agricoli e olio</option><option value="619">commercio altri prodotti non alimentari</option><option value="649">commercio antiquariato e oggetti d'arte</option><option value="654">commercio armi e munizioni</option><option value="600">commercio combustibili, minerali, prodotti chimici e carburanti</option><option value="613">commercio legname e materiale da costruzione</option><option value="653">commercio libri, giornali, cancelleria</option><option value="614">commercio macchine, attrezzature, veicoli</option><option value="620">commercio materiale di recupero</option><option value="611">commercio materie prime agricole, animali vivi</option><option value="615">commercio mobili, elettrodomestici, tv, casalinghi e ferramenta</option><option value="621">commercio orologi, gioielleria, argenteria</option><option value="617">commercio prodotti alimentari, bevande, tabacco</option><option value="618">commercio prodotti farmaceutici, cosmetici, profumi</option><option value="616">commercio prodotti tessili, abbigliamento, calzature</option><option value="500">edilizia, opere pubbliche e demolizione immobili</option><option value="005">forze dell ordine/forze armate</option><option value="493">prodotti cinematografia e fotografia</option><option value="473">prodotti stampa ed editoria</option><option value="430">prodotti tessili, pelle, pellicce, abbigliamento</option><option value="460">produzione biancheria per la casa e arredamento</option><option value="450">produzione calzature</option><option value="410">produzione di prodotti alimentari e prodotti a base di tabacco</option><option value="494">produzione giocattoli e articoli sportivi</option><option value="491">produzione gioielli e oreficeria</option><option value="490">produzione legno, sughero</option><option value="320">produzione macchine agricole e industriali</option><option value="330">produzione macchine per ufficio, elaboratori, strumenti di precisione, ottica, orologi</option><option value="340">produzione materiale elettrico</option><option value="230">produzione materiali da costruzione, vetro, ceramica, produzione, estrazione e ricerca di sali</option><option value="210">produzione metalli</option><option value="350">produzione mezzi di trasporto</option><option value="467">produzione mobili in legno e giunco, materassi</option><option value="495">produzione penne, timbri e prodotti di cancelleria</option><option value="250">produzione prodotti chimici, farmaceutici, vernici, fibre artificiali e sintetiche</option><option value="110">produzione prodotti energetici (carbone, petrolio, energia elettrica, gas, raccolta, depurazione e distribuzione acqua)</option><option value="480">produzione prodotti in gomma, plastica e pneumatici</option><option value="492">produzione strumenti musicali</option><option value="440">produzione tappeti, tappezzerie</option><option value="012">produzione vino</option><option value="470">produzione, trasformazione carta e cartone</option><option value="832">professioni amministrativo/contabili (commercialisti, ragionieri, periti commerciali, amm.condominio, revisori, ecc)</option><option value="990">professioni giuridico/legali (avvocati, notai)</option><option value="992">professioni in discipline religiose e teologiche</option><option value="971">professioni sportive e artistiche</option><option value="991">professioni tecnico/scientifiche (architetti, ingegneri, chimici, biologi, agronomi, periti, geometri, ecc.)</option><option value="001">pubblica amministrazione e magistrati</option><option value="671">riparazione auto, moto e biciclette</option><option value="672">riparazione calzature, articoli cuoio, elettrodomestici</option><option value="972">sale corse, case da gioco</option><option value="760">servizi connessi ai trasporti (gestione porti, autostrade, stazioni di servizio, controllo e pesatura merci)</option><option value="630">servizi degli intermediari del commercio (agenti, rappresentanti e agenzie di mediazione del commercio)</option><option value="790">servizi delle comunicazioni e professioni linguistiche, letterarie (giornalisti, scrittori, ecc.)</option><option value="834">servizi di affari immobiliari (agenti immobiliari)</option><option value="831">servizi di consulenza tributaria, del lavoro, direzionale, organizzativa, tecnica, ecc.</option><option value="773">servizi di custodia e deposito</option><option value="731">servizi di custodia valori</option><option value="981">servizi di lavanderia e tintoria</option><option value="840">servizi di noleggio e locazione</option><option value="833">servizi di pubblicita</option><option value="940">servizi di ricerca e sviluppo</option><option value="920">servizi disinfezione, pulizia e nettezza urbana</option><option value="710">servizi ferroviari, tram, metro, autobus di linea</option><option value="830">servizi finanziari e assicurativi (consul. finanz. e assic., prom. finanz. , agenti finanz., broker, mediat. cred. ecc.)</option><option value="930">servizi insegnamento</option><option value="960">servizi istituzioni sociali, delle associazioni professionali e delle organizzazioni economiche e sindacali</option><option value="982">servizi parrucchieri barbieri e istituti di bellezza</option><option value="724">servizi per oleodotto e gasdotto</option><option value="970">servizi ricreativi e culturali(discoteche, circhi, luna park, ecc.)</option><option value="950">servizi sanitari destinabili alla vendita</option><option value="983">servizi studi fotografici</option><option value="722">servizi trasporti di persone e merci</option><option value="740">servizi trasporti marittimi, cabotaggio, aerei</option></select>
												<input type="hidden" id="descAttEconomica1" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.descAttivitaEconomica">
											</div>
									<!-- qui va ultima professione svolta, se profilo di rischio alto/scaduto e pensionato -->
								</div>
					    </div>
						<div class="form-group">				
							<div class="row">
								<div class="form-field-input col-sm-6 col-xs-12">
									<label class="control-label" for="nazione1">Stato di svolgimento </label>
									<select id="nazione1" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.nazioneAttivitaLavorativa" onchange="checkNazione(1)" class="fixed-size form-control">
										<option value="-">Seleziona</option>
										
											<option value="238">
												ABU DHABI
											</option>
										
											<option value="002">
												AFGHANISTAN
											</option>
										
											<option value="239">
												AJMAN (EMIRATI ARABI UNITI)
											</option>
										
											<option value="292">
												ALAND ISOLE
											</option>
										
											<option value="087">
												ALBANIA
											</option>
										
											<option value="003">
												ALGERIA
											</option>
										
											<option value="252">
												AMERICANE DEL PACIFICO - ISOLE
											</option>
										
											<option value="004">
												ANDORRA
											</option>
										
											<option value="133">
												ANGOLA
											</option>
										
											<option value="209">
												ANGUILLA
											</option>
										
											<option value="180">
												ANTARTIDE
											</option>
										
											<option value="197">
												ANTIGUA E BARBUDA
											</option>
										
											<option value="251">
												ANTILLE OLANDESI
											</option>
										
											<option value="005">
												ARABIA SAUDITA
											</option>
										
											<option value="006">
												ARGENTINA
											</option>
										
											<option value="266">
												ARMENIA
											</option>
										
											<option value="212">
												ARUBA
											</option>
										
											<option value="227">
												ASCENSIONE - ISOLE
											</option>
										
											<option value="007">
												AUSTRALIA
											</option>
										
											<option value="008">
												AUSTRIA
											</option>
										
											<option value="268">
												AZERBAIGIAN
											</option>
										
											<option value="234">
												AZZORRE - ISOLE
											</option>
										
											<option value="160">
												BAHAMAS - ISOLE
											</option>
										
											<option value="169">
												BAHREIN - ISOLE
											</option>
										
											<option value="130">
												BANGLADESH
											</option>
										
											<option value="118">
												BARBADOS - ISOLE
											</option>
										
											<option value="009">
												BELGIO
											</option>
										
											<option value="198">
												BELIZE
											</option>
										
											<option value="158">
												BENIN
											</option>
										
											<option value="207">
												BERMUDA - ISOLE
											</option>
										
											<option value="097">
												BHUTAN
											</option>
										
											<option value="264">
												BIELORUSSIA
											</option>
										
											<option value="010">
												BOLIVIA
											</option>
										
											<option value="295">
												BONAIRE SAINT EUSTATIUS AND SABA
											</option>
										
											<option value="274">
												BOSNIA ERZEGOVINA
											</option>
										
											<option value="098">
												BOTSWANA
											</option>
										
											<option value="280">
												BOUVET ISLANDS
											</option>
										
											<option value="011">
												BRASILE
											</option>
										
											<option value="012">
												BULGARIA
											</option>
										
											<option value="142">
												BURKINA FASO (EX ALTO VOLTA)
											</option>
										
											<option value="025">
												BURUNDI
											</option>
										
											<option value="135">
												CAMBOGIA
											</option>
										
											<option value="119">
												CAMERUN
											</option>
										
											<option value="139">
												CAMPIONE D ITALIA
											</option>
										
											<option value="013">
												CANADA
											</option>
										
											<option value="100">
												CANARIE - ISOLE
											</option>
										
											<option value="188">
												CAPO VERDE - ISOLE
											</option>
										
											<option value="256">
												CAROLINE - ISOLE
											</option>
										
											<option value="211">
												CAYMAN - ISOLE
											</option>
										
											<option value="143">
												CENTRAFRICANA REPUBBLICA
											</option>
										
											<option value="246">
												CEUTA (DIP. SPAGN. D AFRICA)
											</option>
										
											<option value="230">
												CHAFARINAS - ISOLE
											</option>
										
											<option value="255">
												CHAGOS - ISOLE
											</option>
										
											<option value="282">
												CHRISTMAS ISLANDS
											</option>
										
											<option value="144">
												CIAD
											</option>
										
											<option value="015">
												CILE
											</option>
										
											<option value="016">
												CINA REPUBBLICA POPOLARE
											</option>
										
											<option value="101">
												CIPRO REPUBBLICA
											</option>
										
											<option value="093">
												CITTA DEL VATICANO
											</option>
										
											<option value="223">
												CLIPPERTON
											</option>
										
											<option value="281">
												COCOS (KEELING) ISLANDS
											</option>
										
											<option value="017">
												COLOMBIA
											</option>
										
											<option value="176">
												COMORE - ISOLE
											</option>
										
											<option value="145">
												CONGO
											</option>
										
											<option value="018">
												CONGO REP. DEM.
											</option>
										
											<option value="237">
												COOK - ISOLE
											</option>
										
											<option value="074">
												COREA DEL NORD (REPUBBLICA DEMOCRATICA POPOLARE)
											</option>
										
											<option value="084">
												COREA DEL SUD (REPUBBLICA DI)
											</option>
										
											<option value="146">
												COSTA D AVORIO
											</option>
										
											<option value="019">
												COSTA RICA
											</option>
										
											<option value="261">
												CROAZIA
											</option>
										
											<option value="020">
												CUBA
											</option>
										
											<option value="296">
												CURACAO
											</option>
										
											<option value="021">
												DANIMARCA
											</option>
										
											<option value="175">
												DIP.BRIT. D OCEANIA (PITCAIRN)
											</option>
										
											<option value="192">
												DOMINICA
											</option>
										
											<option value="063">
												DOMINICANA REPUBBLICA
											</option>
										
											<option value="240">
												DUBAY
											</option>
										
											<option value="024">
												ECUADOR
											</option>
										
											<option value="023">
												EGITTO
											</option>
										
											<option value="064">
												EL SALVADOR REPUBBLICA
											</option>
										
											<option value="277">
												ERITREA
											</option>
										
											<option value="257">
												ESTONIA
											</option>
										
											<option value="026">
												ETIOPIA
											</option>
										
											<option value="204">
												FAER OER - FAEROERNE FOROYAR
											</option>
										
											<option value="190">
												FALKLAND O MALVINE - ISOLE
											</option>
										
											<option value="161">
												FIGI
											</option>
										
											<option value="027">
												FILIPPINE - ISOLE
											</option>
										
											<option value="028">
												FINLANDIA
											</option>
										
											<option value="029">
												FRANCIA
											</option>
										
											<option value="241">
												FUJAYRAH
											</option>
										
											<option value="157">
												GABON
											</option>
										
											<option value="164">
												GAMBIA REPUBBLICA
											</option>
										
											<option value="267">
												GEORGIA
											</option>
										
											<option value="094">
												GERMANIA REPUBBLICA FEDERALE
											</option>
										
											<option value="112">
												GHANA
											</option>
										
											<option value="082">
												GIAMAICA
											</option>
										
											<option value="088">
												GIAPPONE
											</option>
										
											<option value="102">
												GIBILTERRA
											</option>
										
											<option value="113">
												GIBUTI REPUBBLICA
											</option>
										
											<option value="122">
												GIORDANIA
											</option>
										
											<option value="228">
												GOUGH (SANT ELENA)
											</option>
										
											<option value="032">
												GRECIA
											</option>
										
											<option value="156">
												GRENADA
											</option>
										
											<option value="200">
												GROENLANDIA
											</option>
										
											<option value="214">
												GUADALUPA INDIPENDENTE
											</option>
										
											<option value="154">
												GUAM
											</option>
										
											<option value="033">
												GUATEMALA
											</option>
										
											<option value="123">
												GUAYANA FRANCESE
											</option>
										
											<option value="201">
												GUERNSEY - ISOLA
											</option>
										
											<option value="185">
												GUINEA BISSAU REPUBBLICA
											</option>
										
											<option value="167">
												GUINEA EQUATORIALE
											</option>
										
											<option value="137">
												GUINEA REPUBBLICA POPOLARE
											</option>
										
											<option value="159">
												GUYANA
											</option>
										
											<option value="034">
												HAITI
											</option>
										
											<option value="284">
												HEARD E MCDONALD ISLANDS
											</option>
										
											<option value="035">
												HONDURAS
											</option>
										
											<option value="103">
												HONG KONG
											</option>
										
											<option value="114">
												INDIA
											</option>
										
											<option value="129">
												INDONESIA
											</option>
										
											<option value="039">
												IRAN
											</option>
										
											<option value="038">
												IRAQ
											</option>
										
											<option value="040">
												IRLANDA REPUBBLICA DEMOCRATICA
											</option>
										
											<option value="041">
												ISLANDA
											</option>
										
											<option value="182">
												ISRAELE
											</option>
										
											<option value="086" selected="">
												ITALIA
											</option>
										
											<option value="202">
												JERSEY - ISOLA
											</option>
										
											<option value="269">
												KAZAKISTAN
											</option>
										
											<option value="116">
												KENYA
											</option>
										
											<option value="270">
												KIRGHIZISTAN
											</option>
										
											<option value="194">
												KIRIBATI REPUBBLICA
											</option>
										
											<option value="291">
												KOSOVO
											</option>
										
											<option value="126">
												KUWAIT
											</option>
										
											<option value="136">
												LAOS
											</option>
										
											<option value="089">
												LESOTHO
											</option>
										
											<option value="258">
												LETTONIA
											</option>
										
											<option value="095">
												LIBANO
											</option>
										
											<option value="044">
												LIBERIA
											</option>
										
											<option value="045">
												LIBIA
											</option>
										
											<option value="090">
												LIECHTENSTEIN
											</option>
										
											<option value="259">
												LITUANIA
											</option>
										
											<option value="092">
												LUSSEMBURGO
											</option>
										
											<option value="059">
												MACAO
											</option>
										
											<option value="278">
												MACEDONIA
											</option>
										
											<option value="104">
												MADAGASCAR REPUBBLICA
											</option>
										
											<option value="235">
												MADEIRA
											</option>
										
											<option value="056">
												MALAWI REPUBBLICA
											</option>
										
											<option value="106">
												MALAYSIA
											</option>
										
											<option value="127">
												MALDIVE - ISOLE
											</option>
										
											<option value="149">
												MALI REPUBBLICA
											</option>
										
											<option value="105">
												MALTA
											</option>
										
											<option value="203">
												MAN-ISOLA
											</option>
										
											<option value="219">
												MARIANNE - ISOLE
											</option>
										
											<option value="107">
												MAROCCO
											</option>
										
											<option value="217">
												MARSHALL - ISOLE
											</option>
										
											<option value="213">
												MARTINICA - ISOLA
											</option>
										
											<option value="141">
												MAURITANIA
											</option>
										
											<option value="128">
												MAURIZIO - ISOLE
											</option>
										
											<option value="226">
												MAYOTTE - ISOLE
											</option>
										
											<option value="231">
												MELILLA (DIP. SPAGN. D AFRICA)
											</option>
										
											<option value="046">
												MESSICO
											</option>
										
											<option value="177">
												MIDWAY - ISOLE
											</option>
										
											<option value="265">
												MOLDAVIA
											</option>
										
											<option value="110">
												MONGOLIA
											</option>
										
											<option value="290">
												MONTENEGRO
											</option>
										
											<option value="208">
												MONTSERRAT
											</option>
										
											<option value="134">
												MOZAMBICO
											</option>
										
											<option value="206">
												NAMIBIA-AFRICA DEL SUD OVEST
											</option>
										
											<option value="109">
												NAURU
											</option>
										
											<option value="125">
												NEGARA BRUNEI DARUSSALAM
											</option>
										
											<option value="115">
												NEPAL
											</option>
										
											<option value="047">
												NICARAGUA
											</option>
										
											<option value="150">
												NIGER
											</option>
										
											<option value="117">
												NIGERIA REPUBBLICA
											</option>
										
											<option value="205">
												NIUE O SAVAGE
											</option>
										
											<option value="285">
												NORFOLK ISLANDS
											</option>
										
											<option value="048">
												NORVEGIA
											</option>
										
											<option value="253">
												NUOVA CALEDONIA
											</option>
										
											<option value="049">
												NUOVA ZELANDA
											</option>
										
											<option value="050">
												PAESI BASSI - OLANDA
											</option>
										
											<option value="036">
												PAKISTAN
											</option>
										
											<option value="216">
												PALAU REPUBBLICA
											</option>
										
											<option value="279">
												PALESTINA
											</option>
										
											<option value="051">
												PANAMA
											</option>
										
											<option value="186">
												PAPUA NUOVA GUINEA
											</option>
										
											<option value="052">
												PARAGUAY
											</option>
										
											<option value="232">
												PENON DE ALHUCEMAS - ISOLE (DI
											</option>
										
											<option value="233">
												PENON DE VELEZ DE LA GOMERA (D
											</option>
										
											<option value="053">
												PERU
											</option>
										
											<option value="225">
												POLINESIA FRANCESE
											</option>
										
											<option value="054">
												POLONIA
											</option>
										
											<option value="055">
												PORTOGALLO
											</option>
										
											<option value="091">
												PRINCIPATO DI MONACO
											</option>
										
											<option value="220">
												PUERTO RICO
											</option>
										
											<option value="168">
												QATAR
											</option>
										
											<option value="242">
												RAS AL KHAIMAH
											</option>
										
											<option value="031">
												REGNO UNITO DI GRAN BRETAGNA I
											</option>
										
											<option value="275">
												REPUBBLICA CECA
											</option>
										
											<option value="078">
												REPUBBLICA SUDAFRICANA
											</option>
										
											<option value="247">
												RIUNIONE - ISOLA(DIP. FRANC. D
											</option>
										
											<option value="061">
												ROMANIA
											</option>
										
											<option value="151">
												RUANDA
											</option>
										
											<option value="262">
												RUSSIA (FEDERAZIONE DI)
											</option>
										
											<option value="166">
												SAHARA OCCIDENTALE
											</option>
										
											<option value="293">
												SAINT BARTHELEMY
											</option>
										
											<option value="195">
												SAINT CHRISTOPHER-NEVIS
											</option>
										
											<option value="199">
												SAINT LUCIA
											</option>
										
											<option value="222">
												SAINT MARTIN
											</option>
										
											<option value="248">
												SAINT PIERRE E MIQUELON
											</option>
										
											<option value="196">
												SAINT VINCENT E GRENADINE
											</option>
										
											<option value="191">
												SALOMONE - ISOLE
											</option>
										
											<option value="148">
												SAMOA AMERICANE
											</option>
										
											<option value="131">
												SAMOA OCCIDENTALI
											</option>
										
											<option value="037">
												SAN MARINO
											</option>
										
											<option value="254">
												SANT ELENA
											</option>
										
											<option value="187">
												SAO TOME E PRINCIPE
											</option>
										
											<option value="189">
												SEICELLE - ISOLE
											</option>
										
											<option value="152">
												SENEGAL
											</option>
										
											<option value="289">
												SERBIA
											</option>
										
											<option value="243">
												SHARJAH
											</option>
										
											<option value="153">
												SIERRA LEONE
											</option>
										
											<option value="147">
												SINGAPORE
											</option>
										
											<option value="294">
												SINT MAARTEN (DUTCH PART)
											</option>
										
											<option value="065">
												SIRIA
											</option>
										
											<option value="276">
												SLOVACCHIA
											</option>
										
											<option value="260">
												SLOVENIA
											</option>
										
											<option value="066">
												SOMALIA
											</option>
										
											<option value="283">
												SOUTH GEORGIA E SOUTH SANDWICH
											</option>
										
											<option value="067">
												SPAGNA
											</option>
										
											<option value="085">
												SRI LANKA/CEYLON
											</option>
										
											<option value="215">
												STATI FEDERATI DI MICRONESIA
											</option>
										
											<option value="069">
												STATI UNITI D AMERICA
											</option>
										
											<option value="297">
												SUD SUDAN
											</option>
										
											<option value="070">
												SUDAN REPUBBLICA DEMOCRATICA
											</option>
										
											<option value="163">
												SULTANATO DI OMAN
											</option>
										
											<option value="124">
												SURINAME
											</option>
										
											<option value="286">
												SVALBARD E JAN MAYEN ISLANDS
											</option>
										
											<option value="068">
												SVEZIA
											</option>
										
											<option value="071">
												SVIZZERA
											</option>
										
											<option value="138">
												SWAZILAND
											</option>
										
											<option value="272">
												TAGIKISTAN
											</option>
										
											<option value="022">
												TAIWAN
											</option>
										
											<option value="057">
												TANZANIA
											</option>
										
											<option value="183">
												TERR ANTARTICO FRANCESE
											</option>
										
											<option value="245">
												TERRIT.BRITAN.OCEANO IND.
											</option>
										
											<option value="072">
												THAILANDIA
											</option>
										
											<option value="287">
												TIMOR-LESTE
											</option>
										
											<option value="155">
												TOGO REPUBBLICA
											</option>
										
											<option value="162">
												TONGA
											</option>
										
											<option value="120">
												TRINIDAD E TOBAGO REPUBBLICA
											</option>
										
											<option value="229">
												TRISTAN DA CUNHA
											</option>
										
											<option value="075">
												TUNISIA
											</option>
										
											<option value="076">
												TURCHIA
											</option>
										
											<option value="273">
												TURKMENISTAN
											</option>
										
											<option value="210">
												TURKS E CAICOS
											</option>
										
											<option value="193">
												TUVALU - ISOLE
											</option>
										
											<option value="263">
												UCRAINA
											</option>
										
											<option value="132">
												UGANDA
											</option>
										
											<option value="244">
												UMM AL QAIWAIN
											</option>
										
											<option value="077">
												UNGHERIA
											</option>
										
											<option value="083">
												UNION OF MYANMAR (EX BIRMANIA)
											</option>
										
											<option value="236">
												UNIONE TOKELAU - ISOLE
											</option>
										
											<option value="080">
												URUGUAY
											</option>
										
											<option value="271">
												UZBEKISTAN
											</option>
										
											<option value="121">
												VANUATU
											</option>
										
											<option value="081">
												VENEZUELA
											</option>
										
											<option value="221">
												VERGINI - ISOLE AMERICANE
											</option>
										
											<option value="249">
												VERGINI - ISOLE BRITANNICHE
											</option>
										
											<option value="062">
												VIET NAM REPUBBLICA SOCIALISTA
											</option>
										
											<option value="178">
												WAKE - ISOLA
											</option>
										
											<option value="218">
												WALLIS E FUTUNA- ISOLE
											</option>
										
											<option value="042">
												YEMEN REPUBBLICA ARABA
											</option>
										
											<option value="058">
												ZAMBIA
											</option>
										
											<option value="073">
												ZIMBABWE
											</option>
										
									</select>
								</div>
								<div class="form-field-input col-sm-6 col-xs-12">
								   <label class="control-label" for="provincia1">Provincia di svolgimento </label>
									<select id="provincia1" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.provinciaAttivitaLavorativa" class="fixed-size provincia form-control">
													<option value="-">Seleziona</option>
													
														<option value="AG">
															Agrigento
														</option>
													
														<option value="AL">
															Alessandria
														</option>
													
														<option value="AN">
															Ancona
														</option>
													
														<option value="AO">
															Aosta
														</option>
													
														<option value="AR">
															Arezzo
														</option>
													
														<option value="AP">
															Ascoli Piceno
														</option>
													
														<option value="AT">
															Asti
														</option>
													
														<option value="AV">
															Avellino
														</option>
													
														<option value="BA">
															Bari
														</option>
													
														<option value="BT">
															Barletta-Andria-Trani
														</option>
													
														<option value="BL">
															Belluno
														</option>
													
														<option value="BN">
															Benevento
														</option>
													
														<option value="BG">
															Bergamo
														</option>
													
														<option value="BI">
															Biella
														</option>
													
														<option value="BO">
															Bologna
														</option>
													
														<option value="BZ">
															Bolzano
														</option>
													
														<option value="BS">
															Brescia
														</option>
													
														<option value="BR">
															Brindisi
														</option>
													
														<option value="CA">
															Cagliari
														</option>
													
														<option value="CL">
															Caltanissetta
														</option>
													
														<option value="CB">
															Campobasso
														</option>
													
														<option value="CE">
															Caserta
														</option>
													
														<option value="CT">
															Catania
														</option>
													
														<option value="CZ">
															Catanzaro
														</option>
													
														<option value="CH">
															Chieti
														</option>
													
														<option value="CO">
															Como
														</option>
													
														<option value="CS">
															Cosenza
														</option>
													
														<option value="CR">
															Cremona
														</option>
													
														<option value="KR">
															Crotone
														</option>
													
														<option value="CN">
															Cuneo
														</option>
													
														<option value="EN">
															Enna
														</option>
													
														<option value="FM">
															Fermo
														</option>
													
														<option value="FE">
															Ferrara
														</option>
													
														<option value="FI">
															Firenze
														</option>
													
														<option value="FU">
															Fiume
														</option>
													
														<option value="FG">
															Foggia
														</option>
													
														<option value="FC">
															Forli'/Cesena
														</option>
													
														<option value="FR">
															Frosinone
														</option>
													
														<option value="GE">
															Genova
														</option>
													
														<option value="GO">
															Gorizia
														</option>
													
														<option value="GR">
															Grosseto
														</option>
													
														<option value="IM">
															Imperia
														</option>
													
														<option value="IS">
															Isernia
														</option>
													
														<option value="AQ">
															L'Aquila
														</option>
													
														<option value="SP">
															La Spezia
														</option>
													
														<option value="LT">
															Latina
														</option>
													
														<option value="LE">
															Lecce
														</option>
													
														<option value="LC">
															Lecco
														</option>
													
														<option value="LI">
															Livorno
														</option>
													
														<option value="LO">
															Lodi
														</option>
													
														<option value="LU">
															Lucca
														</option>
													
														<option value="MC">
															Macerata
														</option>
													
														<option value="MN">
															Mantova
														</option>
													
														<option value="MS">
															Massa Carrara
														</option>
													
														<option value="MT">
															Matera
														</option>
													
														<option value="ME">
															Messina
														</option>
													
														<option value="MI">
															Milano
														</option>
													
														<option value="MO">
															Modena
														</option>
													
														<option value="MB">
															Monza-Brianza
														</option>
													
														<option value="NA">
															Napoli
														</option>
													
														<option value="NO">
															Novara
														</option>
													
														<option value="NU">
															Nuoro
														</option>
													
														<option value="OR">
															Oristano
														</option>
													
														<option value="PD">
															Padova
														</option>
													
														<option value="PA">
															Palermo
														</option>
													
														<option value="PR">
															Parma
														</option>
													
														<option value="PV">
															Pavia
														</option>
													
														<option value="PG">
															Perugia
														</option>
													
														<option value="PU">
															Pesaro Urbino
														</option>
													
														<option value="PE">
															Pescara
														</option>
													
														<option value="PC">
															Piacenza
														</option>
													
														<option value="PI">
															Pisa
														</option>
													
														<option value="PT">
															Pistoia
														</option>
													
														<option value="PL">
															Pola
														</option>
													
														<option value="PN">
															Pordenone
														</option>
													
														<option value="PZ">
															Potenza
														</option>
													
														<option value="PO">
															Prato
														</option>
													
														<option value="RG">
															Ragusa
														</option>
													
														<option value="RA">
															Ravenna
														</option>
													
														<option value="RC">
															Reggio Calabria
														</option>
													
														<option value="RE">
															Reggio Emilia
														</option>
													
														<option value="RI">
															Rieti
														</option>
													
														<option value="RN">
															Rimini
														</option>
													
														<option value="RM">
															Roma
														</option>
													
														<option value="RO">
															Rovigo
														</option>
													
														<option value="SA">
															Salerno
														</option>
													
														<option value="SS">
															Sassari
														</option>
													
														<option value="SV">
															Savona
														</option>
													
														<option value="SI">
															Siena
														</option>
													
														<option value="SR">
															Siracusa
														</option>
													
														<option value="SO">
															Sondrio
														</option>
													
														<option value="SU">
															Sud Sardegna
														</option>
													
														<option value="TA">
															Taranto
														</option>
													
														<option value="TE">
															Teramo
														</option>
													
														<option value="TR">
															Terni
														</option>
													
														<option value="TO">
															Torino
														</option>
													
														<option value="TP">
															Trapani
														</option>
													
														<option value="TN">
															Trento
														</option>
													
														<option value="TV">
															Treviso
														</option>
													
														<option value="TS">
															Trieste
														</option>
													
														<option value="UD">
															Udine
														</option>
													
														<option value="VA">
															Varese
														</option>
													
														<option value="VE">
															Venezia
														</option>
													
														<option value="VB">
															Verbano-Cusio-Ossola
														</option>
													
														<option value="VC">
															Vercelli
														</option>
													
														<option value="VR">
															Verona
														</option>
													
														<option value="VV">
															Vibo Valentia
														</option>
													
														<option value="VI">
															Vicenza
														</option>
													
														<option value="VT">
															Viterbo
														</option>
													
														<option value="ZA">
															Zara
														</option>
													
												</select>					
								</div>
							</div>
						</div>
						<div class="form-group">				
							<div class="row">
							<div class="form-field-input col-sm-6 col-xs-12">
								<label class="control-label" for="redditoAnnuoNetto1">Reddito annuo</label>
								<select id="redditoAnnuoNetto1" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.codRedditoAnnuoNetto" onchange="checkReddito(1, true)" class="fixed-size reddito form-control">
									<option value="">seleziona</option>
									
										<option value="01">
											FINO A 10.000 EURO
										</option>
									
										<option value="02">
											DA 10.001 A 25.000 EURO
										</option>
									
										<option value="03">
											DA 25.001 A 40.000 EURO
										</option>
									
										<option value="04">
											DA 40.001 A 75.000 EURO
										</option>
									
										<option value="05">
											DA 75.001 A 500.000 EURO
										</option>
									
										<option value="06">
											DA 500.001 A 2.500.000 EURO
										</option>
									
										<option value="07">
											OLTRE 2.500.000 EURO
										</option>
									
										<option value="08">
											PRIVO DI REDDITO/ALTRO
										</option>
									
								</select>
							</div>
							<!-- qui va note del reddito -->
							<div class="form-field-input col-sm-6 col-xs-12" id="note11" style="display: none;">
								<label class="control-label" for="noteRedditoAnnuoNetto1">Note Reddito annuo </label>
								<input type="text" id="noteRedditoAnnuoNetto1" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.noteRedditoAnnuoNetto" class="fixed-size form-control" maxlength="100" value="">
						
						    </div>
				        </div>
				
						<!-- qui va origine del reddito -->
						<div class="form-group">				
							<div class="row">
								<div class="form-field-input col-sm-6 col-xs-12">
									<label class="control-label" for="origineReddito1">Origine del reddito </label>
									<select id="origineReddito1" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.origineReddito" onchange="checkOrigineReddito(1, true)" class="fixed-size originereddito form-control">
										<option value="">seleziona</option>
										
											<option value="01">
												LAVORO DIPENDENTE
											</option>
										
											<option value="02">
												LAVORO AUTONOMO
											</option>
										
											<option value="03">
												RENDITE IMMOBILIARI
											</option>
										
											<option value="04">
												RENDITE FONDIARIE
											</option>
										
											<option value="05">
												REDDITI FINANZIARI
											</option>
										
											<option value="06">
												PENSIONE
											</option>
										
											<option value="07">
												ALTRO
											</option>
										
									</select>
								</div>
								<!-- qui va note dell'origine del reddito -->
								<div class="form-field-input col-sm-6 col-xs-12" id="note21" style="display: none;">
									<label class="control-label" for="noteOrigineReddito1">Note Origine del reddito </label>
									<input type="text" id="noteOrigineReddito1" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.noteOrigineReddito" class="fixed-size form-control" maxlength="100" value="">
								</div>
							</div>
						</div>
						<div class="form-group">				
							<div class="row">
								<div class="form-field-input col-sm-6 col-xs-12">
									<label class="control-label" for="patrimonio1">
									Patrimonio 
									<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=1803')" class="no-underline btn-icon hidden-xs"><i class="icon icon-info_fill"></i></a>
									<script type="text/javascript">
									$(function() {
										if ($("#helpDialog").length==0) {
											var helpDialog = $("<div>", {
													"class": "modal fade helpDialog",
													"id": "helpDialog",
													"tabindex": "-1",
													"role": "dialog",
													"aria-labelledby": "myLargeModalLabel"});
											var modalContent = $("<div>").addClass("modal-content");
											helpDialog.append($("<div>").addClass("modal-dialog")
													.append(modalContent));
											modalContent.append($("<div>").addClass("modal-header clearfix")
													.append($("<button>", {
														"type": "button",
														"class": "close",
														"data-dismiss": "modal",
														"aria-label": "Close"})
														.append($("<span>", {
															"aria-hidden":"true"}).html("&times;"))));
											modalContent.append($("<div>").addClass("modal-body"));
											$("body").prepend(helpDialog);
										}
									});
									</script>
									</label>
								<select id="patrimonio1" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.codPatrimonio" onchange="checkPatrimonio(1, true)" class="fixed-size patrimonio form-control">
										<option value="">seleziona</option>
								
									<option value="01">
										FINO A 100.000 EURO
									</option>
								
									<option value="02">
										DA 100.001 A 300.000 EURO
									</option>
								
									<option value="03">
										DA 300.001 A 1.000.000 EURO
									</option>
								
									<option value="04">
										DA 1.000.001 A 3.000.000 EURO
									</option>
								
									<option value="05">
										DA 3.000.001 A 10.000.000 EURO
									</option>
								
									<option value="06">
										OLTRE 10.000.000 EURO
									</option>
								
									<option value="07">
										PRIVO DI PATRIMONIO/ALTRO
									</option>
								
									</select>
								</div>
								<!-- qui va note del patrimonio -->
								<div class="form-field-input col-sm-6 col-xs-12" id="note31" style="display: none;">
									<label class="control-label" for="notePatrimonio1">Note Patrimonio </label>
									<input type="text" id="notePatrimonio1" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.notePatrimonio" class="fixed-size form-control" maxlength="100" value="">

								</div>
							</div>
						</div>
						<!-- qui va origine del patrimonio (orig. fondi) -->
						<div class="form-group">				
							<div class="row">
								<div class="form-field-input col-sm-6 col-xs-12">
									<label class="control-label" for="originePatrimonio1">
										Origine del patrimonio 
										<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=2542')" class="no-underline btn-icon hidden-xs"><i class="icon icon-info_fill"></i></a>
										<script type="text/javascript">
										$(function() {
											if ($("#helpDialog").length==0) {
												var helpDialog = $("<div>", {
														"class": "modal fade helpDialog",
														"id": "helpDialog",
														"tabindex": "-1",
														"role": "dialog",
														"aria-labelledby": "myLargeModalLabel"});
												var modalContent = $("<div>").addClass("modal-content");
												helpDialog.append($("<div>").addClass("modal-dialog")
														.append(modalContent));
												modalContent.append($("<div>").addClass("modal-header clearfix")
														.append($("<button>", {
															"type": "button",
															"class": "close",
															"data-dismiss": "modal",
															"aria-label": "Close"})
															.append($("<span>", {
																"aria-hidden":"true"}).html("&times;"))));
												modalContent.append($("<div>").addClass("modal-body"));
												$("body").prepend(helpDialog);
											}
										});
										</script>
									</label>
									<select id="originePatrimonio1" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.origineFondi" onchange="checkOriginePatrimonio(1, true)" class="fixed-size originepatrimonio form-control">
									<option value="">Seleziona</option>
								
									<option value="01">
										REDDITI DI LAVORO AUTONOMO
									</option>
								
									<option value="02">
										REDDITI DI LAVORO DIPENDENTE
									</option>
								
									<option value="03">
										RENDITE FONDIARIE
									</option>
								
									<option value="04">
										REDDITI FINANZIARI
									</option>
								
									<option value="05">
										REDDITI D'IMPRESA
									</option>
								
									<option value="06">
										LASCITO\EREDITA'\DONAZIONE
									</option>
								
									<option value="07">
										ALTRO/ REDDITI DIVERSI (PLUSVALENZE, PREMI, LOTTERIE, INDENNITA', ECC.)
									</option>
								
										</select>
								</div>
								<div class="form-field-input col-sm-6 col-xs-12" id="note41" style="display: none;">
									<!-- qui va note dell'origine del patrimonio -->
									<label for="noteOriginePatrimonio1">Note Origine del patrimonio </label>
									<input type="text" id="noteOriginePatrimonio1" name="propostaConferma.listaCointestatari[1].adeguataVerificaForm.noteOriginePatrimonio" class="fixed-size form-control" maxlength="100" value="">
								</div>		
							</div>
						</div>
						<!-- qui va altre attività (solo monitoraggio alto/scaduto) -->
				    </div>
			    </section>	

				<script>
					//js per checkbox titolare effettivo
					$("input[id^='titEff']").each(function(){
						var indice1 = $(this).attr("id").substring(6)
						if ($('#titEff' + indice1).checked) {
							$('#titEffHidden' + indice1).disabled = true;
						}
					});

					$(document).ready(function() 
					{
						//js per flag persona politicamente esposta (con selettore per indice per ogni cointestatario, senza passarlo dall'html)
						$("input[id^='pepIniziale']").each(function(){
							var indice = $(this).attr("id").substring(11);
							if ($(this).val() == "true") {
								$('#pepNo' + indice).attr('disabled', true);
							} else  {
								$('#pepNo' + indice).attr('disabled', false);
							}
						});
					
						var activeId = 0;
						
						if ($("input[name='kidFlag1']:checked").length==1) {
							$("input[name='kidFlag1']").attr("disabled", false);
						}
						
						var toActivate = 'infoPreOrdine';
						$('.accordion h3[accordion="true"]').each(function(i, div) {
							var el_c = $(div).attr("class");
							if (toActivate == el_c) {
								activeId = i;
							} 
						});
						
						if( /Android|webOS|iPhone|iPad|iPod/i.test(navigator.userAgent) ) {
							$('#downloadPdfMobile').css('display', 'inline');
						}
						
						$('.accordion').each(function(i, div) 
						{
							$(div).accordion({
									active: activeId, //tutti aperti in caso di errore				
									animated: ($.browser.msie && parseInt($.browser.version) <= 6) ? false : 'slide',
									heightStyle: "content",
									collapsible: true
							});
						});
						
						$('.attEconomica').each(function(i, div) {
							$('#attEconomica' + i).combobox({
								idHiddenInput: 'descAttEconomica' + i
							});
						});
						
						var mostra = 'false';
						
						$('.professione').each(function(i, div) {
							checkProfessione(i, mostra);
						});
						
						/*$('.provincia').each(function(i, element) {
							checkNazione(i);
						}); */
						
						$('.reddito').each(function(i, div) {
							checkReddito(i, false);
						}); 
						
						$('.originereddito').each(function(i, div) {
							checkOrigineReddito(i, false);
						});
						
						$('.patrimonio').each(function(i, div) {
							checkPatrimonio(i, false);
						});
						
						$('.originepatrimonio').each(function(i, div) {
							checkOriginePatrimonio(i, false);
						});
						
					});
					
					function checkNazione(index) {
						var value = $('#nazione' + index).val();
						if (value != '086') { // diverso da italia
							$('#provincia' + index).val('');
							$('#provincia' + index).attr('disabled', 'disabled');
						} else {
							$('#provincia' + index).removeAttr('disabled');
						}
					}

					function checkNazioneCorrispondenza() {
						var value = $('#nazioneSelect').val();

						$('#comuneCorrispondenza').val('');
						$('#capCorrispondenza').val('');
						$('#indirizzoCorrispondenza').val('');

						if (value != '') { // diverso da italia			
							$('#provinciaCorrispondenza').val('');
							$('#provinciaCorrispondenza').attr('disabled', 'disabled');
							$('#provinciaCorrispondenza').css('background-color', '#C0C0C0');
						} else {
							$('#provinciaCorrispondenza').removeAttr('disabled');
							$('#provinciaCorrispondenza').css('background-color', '');
						}
					}
					
					$('.moduloCondizioni').on('click',function(){
						$(this).parent().parent().next('tr').find('input[type="checkbox"]').removeAttr("disabled");
					;
					})
					
					//Se la professione corrisponde a PENSIONATO o NON OCCUPATO vengono inibiti i successivi 3 campi	
					function checkProfessione(index, mostra) {
						var value = $('#professione' + index).val();
						if (value == '05' || value == '06') 
						{
							$('#provincia' + index).val('');
							$('#provincia' + index).attr('disabled', 'disabled');
							$('#nazione' + index).val('086');
							$('#nazione' + index).attr('disabled', 'disabled');
							$('#nazioneRapporti' + index).val('');
							$('#nazioneRapporti' + index).attr('disabled', 'disabled');
							$('#nazioneRapporti' + index).css('background-color', '#C0C0C0');
							if (value=='06')
							{
								$('#attEconomica' + index).val('');
								$('#attEconomica' + index).combobox('disable');
								var combobox = $('#attEconomica' + index).siblings('.ui-combobox');
								combobox.find('input, button').prop('disabled', true);
								combobox.find('input, button').val('');
							}else {
								$('#attEconomica' + index).combobox('enable');
								var combobox = $('#attEconomica' + index).siblings('.ui-combobox');
								combobox.find('input, button').prop('disabled', false);
							}
							
						}
						else 
						{
							$('#attEconomica' + index).combobox('enable');
							$('#nazione' + index).removeAttr('disabled');
							$('#nazioneRapporti' + index).removeAttr('disabled');
							$('#nazioneRapporti' + index).css('background-color', '');			
							checkNazione(index);
							$('#attEconomica' + index).combobox('enable');
							var combobox = $('#attEconomica' + index).siblings('.ui-combobox');
							combobox.find('input, button').prop('disabled', false);
						}
					
						//controllo aggiuntivo per profilo ALTO/SCADUTO, mostro "Ultima professione svolta" se ha scelto PENSIONATO
						if (mostra)
						{
							if (value=='05'){
								$('#ultimaprofpens' + index).show();
							}
							else{
								$('#ultimaprofpens' + index).hide();
								$('#ultimaprofpens' + index).find('#ultimaProfessione' + index).val("-");
							}
						}
					}
					
					//Se viene selezionato "PRIVO DI REDDITO/ALTRO" viene visualizzato "Note del reddito"
					function checkReddito(index, svuota) {
						var value = $('#redditoAnnuoNetto' + index).val();
						if (value == '08')
						{
							$('#note1' + index).show();
						}
						else
						{
							$('#note1' + index).hide();
						}
						if (svuota)
						{
							$('#noteRedditoAnnuoNetto' + index).val('');
						}
					}
					
					//Se viene selezionato "ALTRO" viene visualizzato "Note dell'origine del reddito"
					function checkOrigineReddito(index, svuota) {
						var value = $('#origineReddito' + index).val();
						if (value == '07')
						{
							$('#note2' + index).show();
						}
						else
						{
							$('#note2' + index).hide();
						}
						if (svuota)
						{
							$('#noteOrigineReddito' + index).val('');
						}
					}
					
					//Se viene selezionato "PRIVO DI PATRIMONIO/ALTRO" viene visualizzato "Note del patrimonio"
					function checkPatrimonio(index, svuota) {
						var value = $('#patrimonio' + index).val();
						if (value == '07')
						{
							$('#note3' + index).show();
						}
						else
						{
							$('#note3' + index).hide();
						}
						if (svuota)
						{
							$('#notePatrimonio' + index).val('');
						}
					}
					
					//Se viene selezionato "ALTRO/REDDITI DIVERSI" viene visualizzato "Note dell'origine del patrimonio"
					function checkOriginePatrimonio(index, svuota) {
						var value = $('#originePatrimonio' + index).val();
						if (value == '07')
						{
							$('#note4' + index).show();
						}
						else
						{
							$('#note4' + index).hide();
						}
						if (svuota)
						{
							$('#noteOriginePatrimonio' + index).val('');
						}
					}

					
					// js per campo attività economica		
					var oldValue = "";
					$(function( $, undefined ) {
						$.widget( "ui.combobox", {
							version: "@VERSION",
							widgetEventPrefix: "combobox",
							uiCombo: null,
							uiInput: null,
							_wasOpen: false,
							_create: function() {
								var self = this,
									select = this.element.hide(),
									input, wrapper;
									
								input = this.uiInput =
									$( "<input />" )
										.insertAfter(select)
										.addClass("ui-widget ui-widget-content  ui-combobox-input form-control")
										.val(select.children(':selected').text())
										.attr('tabindex', select.attr( 'tabindex'))
										.attr('aria-autocomplete', 'inline')
										.css('width', '90%');
										
								wrapper = this.uiCombo = 
									input.wrap( '<span>' )
									.parent()
									.addClass( 'ui-combobox' )
									.insertAfter( select );
									
								input.autocomplete({
									delay: 0,
									minLength: 0,
									appendTo: wrapper,
									source: $.proxy( this, "_linkSelectList" ),
									select: function(event, ui) {
										$(this).attr('title', ui.item.value);
									}
								});
							
								input.focusin(function() {
									oldValue = $(this).val();
									$(this).val("");
								});
							
								input.focusout(function() {
									$(this).val(oldValue);
								});
					
								$( "<button>" )
									.attr( "tabIndex", -1 )
									.attr( "type", "button" )
									.insertAfter( input )
									.button({
										icons: {
											primary: "ui-icon-triangle-1-s"
										},
										text: false})
									.append('<i class="icon icon-arrow_down"></i>')
									.removeClass("ui-corner-all")
									.addClass("ui-button-icon ui-combobox-button dropdown-arrow");
					
								// Our items have HTML tags.  The default rendering uses text()
								// to set the content of the <a> tag.  We need html().
								input.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
									ul.attr('role','listbox')
									.attr('aria-expanded','true');
									
									return $( "<li>" )
										.attr('class', item.option.className)
										.attr('role', 'option')
										.append( $( "<a>" ).html( item.label ) )
										.appendTo( ul );
								};
								this._on( this._events );
							},
					
							_linkSelectList: function( request, response ) {
								var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), 'i' );
								response( this.element.children('option:not([style*="display: none"])').map(function() {  
									var text = $( this ).text();
									var value = $(this).attr('value');
									var id = $(this).attr('id');
						
									if ( this.value && ( !request.term || matcher.test(text) ) ) {
										var optionData = {
											label: text,
											value: text,
											id:id,
											option: this
									};
									if (request.term) {
										optionData.label = text.replace(
										new RegExp(
											"(?![^&;]+;)(?!<[^<>]*)(" +
											$.ui.autocomplete.escapeRegex(request.term) +
											")(?![^<>]*>)(?![^&;]+;)", "gi"),
											"<strong>$1</strong>");
									}
									return optionData;
									}}));
							},
					
							_events: {
								"autocompletechange input" : function(event, ui) {
									var $el = $(event.currentTarget);
									var changedOption = ui.item ? ui.item.option : null;
									if ( !ui.item ) {
										var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( $el.val() ) + "$", "i" ),
										valid = false,
										matchContains = null,
										iContains = 0,
										iSelectCtr = -1,
										iSelected = -1,
										optContains = null;
										if (this.options.autofillsinglematch) {
											matchContains = new RegExp($.ui.autocomplete.escapeRegex($el.val()), "i");
										}
					
										this.element.children( "option" ).each(function() {
											var t = $(this).text();
											if ( t.match( matcher ) ) {
												this.selected = valid = true;
												return false;
											}
											if (matchContains) {
												// look for items containing the value
												iSelectCtr++;
												if (t.match(matchContains)) {
												iContains++;
												optContains = $(this);
												iSelected = iSelectCtr;
												}
											}
										});
					
										if ( !valid ) {
											// autofill option:  if there is just one match, then select the matched option
											if (iContains == 1) {
												changedOption = optContains[0];
												changedOption.selected = true;
												var t2 = optContains.text();
												$el.val(t2);
												$el.data('ui-autocomplete').term = t2;
												this.element.prop('selectedIndex', iSelected);
										
											} else {
												// remove invalid value, as it didn't match anything
												$el.val( '' );
												// Internally, term must change before another search is performed
												// if the same search is performed again, the menu won't be shown
												// because the value didn't actually change via a keyboard event
												$el.data( 'ui-autocomplete' ).term = '';
					
												this.element.prop('selectedIndex', -1);
											}
										}
									}
					
									this._trigger( "change", event, {
										item: changedOption
									});
								},
					
					
							"autocompleteselect input": function( event, ui ) {
									ui.item.option.selected = true;
									oldValue = $(ui.item.option).text();
									
									// set della descrizione
									$("#descAttEconomica0").val($(ui.item.option).text());
							
									this._trigger( "select", event, {
										item: ui.item.option
									});
								},
					
								"autocompleteopen input": function ( event, ui ) {
									this.uiCombo.children('.ui-autocomplete')
										.outerWidth(this.uiCombo.outerWidth(true));
								},
					
								"mousedown .ui-combobox-button" : function ( event ) {
									this._wasOpen = this.uiInput.autocomplete("widget").is(":visible");
								},
					
								// click sul triangolo che apre la combobox 
								"click .ui-combobox-button" : function( event ) {
									this.uiInput.focus();
									// close if already visible
									if (this._wasOpen)
										return;
									// pass empty string as value to search for, displaying all results
									this.uiInput.autocomplete("search", "");
								}
							},
					
							value: function ( newVal ) {
								var select = this.element,
									valid = false,
									selected;
					
								if ( !arguments.length ) {
									selected = select.children( ":selected" );
									return selected.length > 0 ? selected.val() : null;
								}
					
								select.prop('selectedIndex', -1);
								select.children('option').each(function() {
									if ( this.value == newVal ) {
										this.selected = valid = true;
										return false;
									}
								});
					
								if ( valid ) {
									this.uiInput.val(select.children(':selected').text());
									this.uiInput.attr('title', select.children(':selected').text())
								} else {
									this.uiInput.val( "" );
									this.element.prop('selectedIndex', -1);
								}
							},
					
							_destroy: function () {
								this.element.show();
								this.uiCombo.replaceWith( this.element );
							},
					
							widget: function () {
								return this.uiCombo;
							},
					
							_getCreateEventData: function() {
								return {
									select: this.element,
									combo: this.uiCombo,
									input: this.uiInput
								};
							}
						});
						
						$('#attEconomica' + '1').combobox();
					}(jQuery));

				</script>
			</div>
			<h3 class="ui-accordion-header ui-state-default ui-accordion-icons ui-corner-all" role="tab" accordion="true" id="ui-id-35" aria-controls="ui-id-36" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
					<i class="icon icon-3x icon-accordion_down"></i>
					<i class="icon icon-3x icon-accordion_up"></i>
					<a href="#">Informativa OICR</a>
			</h3>
			<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" role="tabpanel" id="ui-id-36" aria-labelledby="ui-id-35" aria-hidden="true" style="display: none;">
					<div class="row">
						<div class="col-xs-12">
							Con riferimento alla sottoscrizione di OICR di cui alla presente Proposta di Consulenza,  <br>
							<div clas="form-group form-field-input">
								<label class="control-label" for="oicrFlag1" class="">
									<input class="flLeft" type="checkbox" name="oicrFlag1" value="on">
									<span class="flLeft text-checkbox">
										<strong>dichiaro</strong> di aver preso visione dei moduli di sottoscrizione e dei KIID relativi agli OICR in sottoscrizione, di averne acquisito copia su supporto duraturo e di essere informato che copia del prospetto è disponibile gratuitamente presso la sede e le dipendenze del collocatore nonchè sul sito Internet della Sicav o SGR. Dichiaro inoltre di accettare integralmente il contenuto dei moduli di sottoscrizione. Prendo altresì atto ed accetto espressamente le seguenti limitazioni operative:
										<ul>
											<li>il regolamento delle operazioni prevede come mezzo di pagamento esclusivamente il bonifico alla Sicav o SGR con addebito del mio conto corrente indicato nella Proposta;
											</li>
											<li>non è possibile sottoscrivere mediante adesione a piani di accumulo (PAC);
											</li>
											<li>non è possibile richiedere l'emissione dei certificati fisici rappresentativi delle azioni/quote;
											</li>
											<li>in caso di sottoscrizione di quote/azioni di OICR a distribuzione dei proventi, questi verranno accreditati sul mio conto corrente indicato nella Proposta: non è possibile il reinvestimento automatico dei proventi
											</li>
										</ul>
									</span>
								</label>
								<label class="control-label" for="oicrFlag2">
									<input class="flLeft" type="checkbox" name="oicrFlag2" value="on">
									<span class="flLeft text-checkbox">
										<strong>dichiaro</strong> di conferire mandato al SIP ad operare in nome proprio e per mio conto, come specificato nei relativi moduli di sottoscrizione che ho visionato ed acquisito su supporto duraturo
									</span>
								</label>
								<label class="control-label" for="oicrFlag3">
									<input class="flLeft" type="checkbox" name="oicrFlag3" value="on">
									<span class="flLeft text-checkbox">
										<strong>dichiaro</strong> di autorizzare il trattamento dei miei dati personali e di accettare le previsioni in materia di privacy così come illustrate nei moduli di sottoscrizione che ho visionato ed acquisito su supporto duraturo 
									</span>
								</label>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
	</section>
	<section>
		<div class="form-group btnWrapper clearfix">
			<div class="btn-align-right">
				<input type="button" id="indietro" class="btn btn-default xs-small-col" title="Indietro" value="Indietro">
				<input type="submit" value="prosegui" class="btn btn-primary xs-large-col" alt="prosegui">
			</div>
		</div>
	</section>
</form>
<form id="goBack" method="post" action="/WEBHT/investimenti/consulenza/propostaConferma.do?svuotaForm=true"></form>

<script type="text/javascript">
	$(document).ready(function() {
		
		var activeId = 0;
		var numKid = 2;
		
		//Apertura dell'accordion desiderato settato nel resultBean
		var toActivate = 'infoPreOrdine';
		$('.accordion h3[accordion="true"]').each(function(i, div) {
 			var el_c = $(div).attr("class");
			if (toActivate == el_c) {
				activeId = i;
			} 
		});
		
		$(function() {
			$("#accordion").accordion({
				animated: 'slide',
				heightStyle: "content",
				active: activeId,
				collapsible: true
			});
		});
		
		$('.moduloKid').click(function() {
			$(this).attr('data-clicked', 'true');
			if ($('.moduloKid[data-clicked="true"]').length == numKid) {
				$('#kidFlag1').removeAttr('disabled');
			} 
		});
		
		$('.moduloGP').click(function() {
			$(this).attr('data-clicked', 'true');
			if ($('.moduloGP[data-clicked="true"]').length === 3) {
				$('#flgGP').removeAttr('disabled');
			} 
		});
		
		//js per checkbox titolare effettivo
		$("input[id^='titEff']").each(function(){
			var indice1 = $(this).attr("id").substring(6)
			if ($('#titEff' + indice1).checked) {
				$('#titEffHidden' + indice1).disabled = true;
			}
		});
		
		//js per flag persona politicamente esposta (con selettore per indice per ogni cointestatario, senza passarlo dall'html)
// 		$("input[id^='pepIniziale']").each(function(){
// 			var indice = $(this).attr("id").substring(11)
// 			if ($(this).val() == "true") {
// 				$('#pepNo' + indice).attr('disabled', true);
// 			} else  {
// 				$('#pepNo' + indice).attr('disabled', false);
// 			}
// 		});
		
		$('.professione').each(function(i, div) {
			checkProfessione(i);
		});
	
		if ($("input[name='kidFlag1']:checked").length==1) {
			$("input[name='kidFlag1']").attr("disabled", false);
		}
		
		if( /Android|webOS|iPhone|iPad|iPod/i.test(navigator.userAgent) ) {
			$('#downloadPdfMobile').css('display', 'inline');
		}
		
		
		$('.attEconomica').each(function(i, div) {
			$('#attEconomica' + i).combobox({
				idHiddenInput: 'descAttEconomica' + i
			});
		});
		
//  		$('.provincia').each(function(i, element) {
// 			checkNazione(i);
// 		}); 
		
		//Se la professione corrisponde a PENSIONATO o NON OCCUPATO vengono inibiti i successivi 3 campi	
		function checkProfessione(index) {
			var value = $('#professione' + index).val();
			if (value == '05' || value == '06') 
			{
				$('#provincia' + index).val('');
				$('#provincia' + index).attr('disabled', 'disabled');
				$('#provincia' + index).css('background-color', '#C0C0C0');
				$('#nazione' + index).val('086');
				$('#nazione' + index).attr('disabled', 'disabled');
				$('#nazione' + index).css('background-color', '#C0C0C0');
				$('#nazioneRapporti' + index).val('');
				$('#nazioneRapporti' + index).attr('disabled', 'disabled');
				$('#nazioneRapporti' + index).css('background-color', '#C0C0C0');
				if (value=='06')
				{
					$('#attEconomica' + index).val('');
					$('#attEconomica' + index).combobox('disable');
				}
				else
				{
					$('#attEconomica' + index).combobox('enable');
				}
			}
			else 
			{
				$('#attEconomica' + index).combobox('enable');
				$('#nazione' + index).removeAttr('disabled');
				$('#nazione' + index).css('background-color', '');	 
				$('#nazioneRapporti' + index).removeAttr('disabled');
				$('#nazioneRapporti' + index).css('background-color', '');			
				checkNazione(index);
			}
		}
		
		$('#indietro').click(function(){
			$('#goBack').submit();
		});
	});
	
	function checkNazione(index) {
		var value = $('#nazione' + index).val();
		if (value != '086') { // diverso da italia
			$('#provincia' + index).val('');
			$('#provincia' + index).attr('disabled', 'disabled');
			$('#provincia' + index).css('background-color', '#C0C0C0');
		} else {
			$('#provincia' + index).removeAttr('disabled');
			$('#provincia' + index).css('background-color', '');
		}
	}

	function checkNazioneCorrispondenza() {
		var value = $('#nazioneSelect').val();

		$('#comuneCorrispondenza').val('');
		$('#capCorrispondenza').val('');
		$('#indirizzoCorrispondenza').val('');

		if (value != '') { // diverso da italia			
			$('#provinciaCorrispondenza').val('');
			$('#provinciaCorrispondenza').attr('disabled', 'disabled');
			$('#provinciaCorrispondenza').css('background-color', '#C0C0C0');
		} else {
			$('#provinciaCorrispondenza').removeAttr('disabled');
			$('#provinciaCorrispondenza').css('background-color', '');
		}
	}
	
// 	$('.moduloCondizioni').on('click',function(){
// 		$(this).parent().parent().next('tr').find('input[type="checkbox"]').removeAttr("disabled");
// 	;
// 	})
	
</script>
</div>