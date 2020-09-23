<section>
	<div class="titolo">
		<h1>
			<div class="row">
				<div class="col-sm-8">
					<!-- TITOLO -->
					<span>Conferma contratto di consulenza</span>
					<!-- /TITOLO -->
				</div>
			</div>
		</h1>
	</div>
</section>
<div class="wrapper-app-style">
<section>
   <! --NUOVO STEPPER  -->
   <div class="box-stepper">
		<div class="row noMargin">
			<div class="col-xs-12 col-sm-12">
                <div class="row box-txt-stepper">
					<div class="col-xs-3 txt-stepper done"><span>Proposta</span></div>
					<div class="col-xs-3 txt-stepper done"><span>Approfondimenti</span></div>
					<div class="col-xs-3 txt-stepper attivo"><span>Firma</span></div>
					<div class="col-xs-3 txt-stepper"><span>Conclusione</span></div>
				</div>
				<div class="row box-number-stepper">
                    <div class="col-xs-3 number-stepper done"><span>1</span></div>
                    <div class="col-xs-3 number-stepper done"><span>2</span></div>
                    <div class="col-xs-3 number-stepper attivo"><span>3</span></div>
                    <div class="col-xs-3 number-stepper"><span>4</span></div>
                </div>
                <div class="row box-line-stepper">
                    <div class="col-xs-3 col-sm-3 line-stepper done"></div>
                    <div class="col-xs-3 col-sm-3 line-stepper done"></div>
                    <div class="col-xs-3  col-sm-3 line-stepper"></div>
                    
                </div> 
			</div>
		</div>
	</div>
</section>
<form id="formProposta" method="post" action="/WEBHT/investimenti/consulenza/propostaContrattoFDR.do">
		<section>
			<div class="form-group">
				<div class="table-responsive">
					<!-- TABELLA RIEPILOGO PROPOSTA -->
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
			<span>Prendo atto:</span>
			<ul>
				<li>della tempistica di inserimento degli ordini a mercato sotto riportata, determinata al fine di evitare scoperti sul conto corrente di regolamento delle operazioni</li>
				<li>che la data di esecuzione delle operazioni potrebbe essere diversa da quanto indicato nella Proposta qualora, per cause non imputabili alla Banca, si verifichi un ritardo nella valuta di regolamento dei disinvestimenti indicati</li>
				<li>che a causa della differenza temporale tra il conferimento dell'ordine ed il momento della sua esecuzione, il prezzo del prodotto/ strumento finanziario potrebbe divergere rispetto a quello rilevato al momento dell'invio della Proposta. Sono altresì consapevole che procedendo con l'operazione darò incarico di eseguire gli ordini relativi ai prodotti/strumenti finanziari di seguito indicati e che gli ordini saranno eseguiti secondo i tempi indicati nella Proposta, fatti salvi eventuali ritardi non imputabili alla Banca, per le ragioni in precedenza esposte.</li>
			</ul>
		</section>
	    <section>
			<!-- DOWNLOAD PDF PER MOBILE -->
			<div id="downloadPdfMobile" style="display: none;">
				<p>Puoi scaricare e salvare sul tuo device una copia PDF dell'Informativa Pre Ordine:</p>
					<div class="alignCenter">
						<a target="_blank" href="/WEBHT/investimenti/consulenza/propostaDownloadPdf?tipoDocumento=CPC">
							<i class="icon icon-file_pdf_fill colorVer"></i> 
							<span class="btnLink">
								Informativa Pre Contrattuale
							</span>
						</a>
					</div>
			</div>
	    </section>
	    <section>
			<div id="documentoPDF" style="margin-bottom:10px;"></div>
			<script type="text/javascript">
				window.detectAcrobatPlugin = function() {
					var isInstalled = false;
					var version = null;
					if ("ActiveXObject" in window) {
						var control = null;
						try {
							// AcroPDF.PDF is used by version 7 and later
							control = new ActiveXObject('AcroPDF.PDF');
						} catch (e) {
							// Do nothing
						}
						if (!control) {
							try {
								// PDF.PdfCtrl is used by version 6 and earlier
								control = new ActiveXObject('PDF.PdfCtrl');
							} catch (e) {
								return;
							}
						}
						if (control) {
							isInstalled = true;
							version = control.GetVersions().split(',');
							version = version[0].split('=');
							version = parseFloat(version[1]);
						}
					}
					else {
						// Check navigator.plugins for "Adobe Acrobat" or "Adobe PDF Plug-in"*
						if (navigator && navigator.mimeTypes) {
							if ("application/pdf" in navigator.mimeTypes) {
								isInstalled = true; 
							}
						}
					}
					return isInstalled;
				};
				window.isMobileBrowser = function () {
					if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
						return true;
					}
				}

				window.load = function () {
					var div = $("#documentoPDF");
					var pdfPlugin = "/HT/JS/pdfjs/web/viewer.html?file=";
					var iframe = $("<iframe scrolling=\"yes\" allowfullscreen webkitallowfullscreen></iframe>");
					iframe.attr({
							"id" : "embedId",

							"title" : "Contratto Proposta",

							"src" : pdfPlugin + encodeURIComponent("/WEBHT/investimenti/consulenza/propostaDownloadPdf?type=inline&tipoDocumento=CPC"),
							"style" : "height: 400px; width: 100%", /* width: 700px */
						});

					div.prepend(iframe);
						

				}
				$(function() {
					load();
				});
			</script>
		</section>
        <section>
			<div class="row">
				<div class="col-xs-12">
					<h3 class="titleSection">Firma digitale del contratto</h3>
					<div class="form-group form-field-input">
						<label class="control-label" for="adeguataVerificaFlg">
							<input class="flLeft" type="checkbox" name="flgAdeguataVerifica" value="on" id="adeguataVerificaFlg">
							<span class="flLeft text-checkbox-mobile">
								Firma delle domande conoscitive per l'adeguata verifica
							</span>
						</label>
					</div>
				</div>
			</div>
		</section>
		<section>
		  <div class="box-otp">
		  <div class="form-group">
		  	<div class="row">
					<div class="form-field-input col-xs-12 col-sm-4">
						<div class="form-field">
							<label class="control-label">Inserisci lo stesso PIN che hai utilizzato per accedere al YouWeb</label>
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-4">
						<label class="control-label">Pin</label>
						<input type="password" name="pin" value="" id="pin" class="form-control wauto" autocomplete="off">
				    </div>
					<div class="form-field-input col-xs-12 col-sm-4">
						<div class="form-field-input">
								<img src="/HT/fe/img/OTPWT.png">
								<input type="text" name="codiceOTP" maxlength="6" size="10" value="" id="codiceOtp" class="form-control wauto" autocomplete="off">
								<a href="#" onclick="javascript:OpenHelp('/HT/HTML/HelpOtp.html')">

										<i class="icon icon-info_fill icon-2x"></i>
								</a>
						</div>
					</div>
			</div>	
		  </div>
			</div>
		</section>
		<section>
				
	    <section>
		<div class="form-group btnWrapper clearfix">
			<div class="btn-align-right">
				<input class="btn btn-default xs-small-col" type="button" name="" value="Indietro" onclick="document.location.href = getPathContext() + '/investimenti/consulenza/propostaConfermaApprofondimenti.do';" class="btn btn-primary">
				<input class="btn btn-primary xs-large-col" type="submit" name="conferma" tabindex="2" value="Conferma" id="conferma" class="btn btn-primary execute">
			</div>		
		</div>	
			</section>
	</form>
<script type="text/javascript">
$(document).ready(function(){
	$('#pin').attr('autocomplete', 'off');
	$('#codiceOtp').attr('autocomplete', 'off');
	
	if( /Android|webOS|iPhone|iPad|iPod/i.test(navigator.userAgent) ) {
		$('#downloadPdfMobile').css('display', 'inline');
	}
	
	$('#pin').keyup(function() {
		if ($(this).val().length == 0) {
    		$('#popupConferma').attr('disabled', true);
  		} else {
  		
    		$('#popupConferma').attr('disabled', false);
  		}
  	});
	
	$('#conferma').click(function() { 
	        $.blockUI({ 
	            theme:     true, 
	            title:    'Richiesta in corso', 
	            message:  '<p style="font-size:10pt"><br />Attendere prego...</p><br /><br />' 
	            /*timeout:   2000*/ 
	        }); 
    	}); 
})
</script>
</div>