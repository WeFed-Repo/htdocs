<form id="formProposta" method="post" action="/WEBHT/investimenti/consulenza/propostaContrattoFDR.do">




















<div style="margin-right:120px" class="clearfix">
	
		
		
				










	<h1>
		
			
			
				<div class="hidden-print hidden-xxs flag info">&nbsp;</div>
			
		
		
			
		
		
			
		
			
				
 					<span>Conferma contratto di consulenza</span>
 					
				
				
				
				
					
				
			
			
			
			
		
	</h1>
	
	



		
	
</div>	
	
		
		
			<div class="row">
				<div class="col-xs-12 hidden-xs hidden-print">
					








	<!-- 
	noContentPagina: se valorizzato, non crea il div contentPagina
	 -->
	 
	
	
	
		
				<div class="contentPagina">
		
					<p style="text-align: center;"><img src="/HT/IMAGES/INVESTIMENTI/CONSULENZA/step3_firma.gif" alt="" width="637" height="57"></p>
		
				</div>
		
	
	
	


				</div>
			</div>
		
	










	










	
		<!-- TABELLA RIEPILOGO PROPOSTA -->
		










		<div class="nosort tabellaProfilo">
			<table class="table">
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
						<th>Data proposta</th>
						<th>Data scadenza</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="oCenter">
							
							SCLAVO MAURO/ZWIRNER MARIA EMMA
						</td>
						<td class="oCenter">85</td>
						<td class="oCenter">03/08/2020</td>
						<td class="oCenter">07/08/2020</td>
					</tr>
				</tbody>
			</table>
		</div>
	<div class="bs-example padding10">
		<span>Prendo atto:</span>
		<ul>
			<li>della tempistica di inserimento degli ordini a mercato sotto riportata, determinata al fine di evitare scoperti sul conto corrente di regolamento delle operazioni</li>
			<li>che la data di esecuzione delle operazioni potrebbe essere diversa da quanto indicato nella Proposta qualora, per cause non imputabili alla Banca, si verifichi un ritardo nella valuta di regolamento dei disinvestimenti indicati</li>
			<li>che a causa della differenza temporale tra il conferimento dell'ordine ed il momento della sua esecuzione, il prezzo del prodotto/ strumento finanziario potrebbe divergere rispetto a quello rilevato al momento dell'invio della Proposta. Sono altresì consapevole che procedendo con l'operazione darò incarico di eseguire gli ordini relativi ai prodotti/strumenti finanziari di seguito indicati e che gli ordini saranno eseguiti secondo i tempi indicati nella Proposta, fatti salvi eventuali ritardi non imputabili alla Banca, per le ragioni in precedenza esposte.</li>
		</ul>
		</div>
		<!-- DOWNLOAD PDF PER MOBILE -->
		<div id="downloadPdfMobile" style="display: none;">
			<br>
			<p>Puoi scaricare e salvare sul tuo device una copia PDF dell'Informativa Pre Contrattuale:</p>
			<table style="width: 100%;">
				<tbody><tr>
					<td class="oCenter" style="width: 100%; background-color: white;">
						<div class="divDettaglio">
							<div>
								<a href="/WEBHT/investimenti/consulenza/propostaDownloadPdf?tipoDocumento=CPC" target="_blank"><img src="/HT/IMAGES/ico_pdf2.gif" alt="" style="vertical-align: middle;">&nbsp;Informativa Pre Contrattuale85</a>
							</div>
						</div>
					</td>
				</tr>
			</tbody></table>
		</div>
		
		<!-- BOX OPERAZIONI -->
		<br>
		
		
		
		
		<div id="documentoPDF" style="margin-bottom:10px;"><iframe scrolling="yes" allowfullscreen="" webkitallowfullscreen="" id="embedId" title="Contratto Proposta" src="/HT/JS/pdfjs/web/viewer.html?file=%2FWEBHT%2Finvestimenti%2Fconsulenza%2FpropostaDownloadPdf%3Ftype%3Dinline%26tipoDocumento%3DCPC" style="height: 400px; width: 100%"></iframe></div>
		



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



		<!-- BOX DI PIN/OTP -->
	<div class="section clearfix">
		<h3 class="titleSection">
			
			











	
		Firma digitale del contratto
	
	
	
	


 
		</h3>
		<div class="form-group clearfix margin-top5">
		
			<div class="padding10">
				<input type="checkbox" name="flgAdeguataVerifica" value="on" id="adeguataVerificaFlg">
				<label for="adeguataVerificaFlg">Firma delle domande conoscitive per l'adeguata verifica </label>
			</div>
		
			<div class="form-group clearfix" style="margin-top: 20px;">
			<div class="form-field-resume col-xs-12 margin-bottom5">	
				<div class="form-field-input col-xs-6 clear-padding">
					<div class="form-field-input">
							<b>PIN</b>
							<input type="password" name="pin" value="" id="pin" class="form-control wauto" autocomplete="off">
			   			    <div class="pull-left margin-top10">
								Inserisci lo stesso PIN che hai utilizzato <br>per accedere al YouWeb
							</div>
						</div>
					</div>
				
				
					
					
						<div class="form-field-input col-xs-6 clear-padding">
							<div class="form-field-input">
								<img src="/HT/fe/img/OTPWT.png" title="" alt="">
								<input type="text" name="codiceOTP" maxlength="6" size="10" value="" id="codiceOtp" class="form-control wauto" autocomplete="off">
								<a href="#" onclick="javascript:OpenHelp('/HT/HTML/HelpOtp.html')">
									<img src="/HT/fe/img/i_help.png" style="margin-top:0px;margin-left:3px" title="Help On Line" alt="Help On Line">
								</a>
							</div>
						</div>
						
									
			</div>
			</div>
		</div>
	</div>
</div>

	<div class="actions pull-right ">
		<input type="button" name="" value="Indietro" onclick="document.location.href = getPathContext() + '/investimenti/consulenza/propostaConfermaApprofondimenti.do';" class="btn btn-primary">
				
				
			
				<input type="submit" name="conferma" tabindex="2" value="Conferma" id="conferma" class="btn btn-primary execute">
					
				
	
	
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
