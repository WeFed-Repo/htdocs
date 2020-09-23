<section>
    <div class="titolo">
        <h1>
            <div class="row">
                <div class="col-sm-8">
                    <!-- TITOLO --><span>Conferma proposta di consulenza</span>
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
					<div class="col-xs-3 txt-stepper attivo"><span>Proposta</span></div>
					<div class="col-xs-3 txt-stepper"><span>Approfondimenti</span></div>
					<div class="col-xs-3 txt-stepper"><span>Firma</span></div>
					<div class="col-xs-3 txt-stepper"><span>Conclusione</span></div>
				</div>
				<div class="row box-number-stepper">
                    <div class="col-xs-3 number-stepper attivo"><span>1</span></div>
                    <div class="col-xs-3 number-stepper"><span>2</span></div>
                    <div class="col-xs-3 number-stepper"><span>3</span></div>
                    <div class="col-xs-3 number-stepper"><span>4</span></div>
                </div>
                <div class="row box-line-stepper">
                    <div class="col-xs-3 col-sm-3 line-stepper"></div>
                    <div class="col-xs-3 col-sm-3 line-stepper"></div>
                    <div class="col-xs-3  col-sm-3 line-stepper"></div>
                </div> 
			</div>
		</div>
	</div>
</section>
<section>
	<div class="formWrapper">
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
                        <td class="oCenter">SCLAVO MAURO/ZWIRNER MARIA EMMA</td>
                        <td class="oCenter">85</td>
                        <td class="oCenter">03/08/2020</td>
                        <td class="oCenter">07/08/2020</td>
                    </tr>
                </tbody>
            </table>
        </div>
		<p>Di seguito puoi trovare una copia della Proposta di consulenza che puoi scaricare e salvare sul tuo PC:</p>
		<div class="alignCenter">
			<a target="_blank" href="/WEBHT/investimenti/consulenza/propostaDownloadPdf?tipoDocumento=PC">
				<i class="icon icon-file_pdf_fill colorVer"></i> 
				<span class="btnLink">
					Proposta di consulenza 85
				</span>
			</a>
		</div>
		</div>
	</div>
</section>

<section>
    <div id="documentoPDF"></div>
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

				"title" : "Proposta Commerciale",

				"src" : pdfPlugin + encodeURIComponent("/WEBHT/investimenti/consulenza/propostaDownloadPdf?type=inline&tipoDocumento=PC"),
				"style" : "height: 400px; width: 100%", /* width: 700px */
			});

		div.prepend(iframe);
			

	}
	$(function() {
		load();
	});
	</script>
	<form id="formProposta" method="post" action="/WEBHT/investimenti/consulenza/propostaConfermaApprofondimenti.do"></form>
	<form id="goBack" method="post" action="/WEBHT/investimenti/consulenza/proposteDaConfermare.do"></form>
</section>
<section>
	<div class="form-group btnWrapper clearfix">
		<div class="btn-align-right flRight">
		   
			<input type="button" id="rifiutaProposta" class="btn btn-primary" title="Rifiuta" value="Rifiuta">
			<input type="button" id="avanti" class="btn btn-primary" title="prosegui" value="prosegui">
			<input type="button" id="indietro" class="btn btn-default flLeft" title="Indietro" value="Indietro">
		</div>
	</div>
</section>
</div>
<script type="text/javascript">
$(document).ready(function(){
	
	ricaricaRifiutaProposta = function() {
		chiudiRifiutaProposta();
		goToPage('/investimenti/consulenza.do');
	}
	
	var chiudiRifiutaProposta = function() {
		$('#dialogRifiutaProposta').dialog('close');
	}
	
	$(function() {
		$('#embedIdBgd').hide();
		var urlAjax = getPathContext()
				+ '/investimenti/consulenza/rifiutaPropostaPopUp.do';
		$('#rifiutaProposta')
				.ajaxDialog(
						'dialogRifiutaProposta',
						urlAjax,
						{
							title : '',
							close : function() {
								//$('#embedId').show();
								//$('#embedIdBgd').hide();
								$
										.blockUI({
											theme : true,
											title : 'Richiesta in corso',
											message : '<div class="padding20" style="font-size:10pt">Attendere prego...</div>'
										/*timeout:   2000*/
										});
								goToPage('/investimenti/consulenza.do');
							},
							open : function() {
								$('#embedId').hide();
								$('#embedIdBgd').show();
							}
						});
	});
	
	$('#avanti').click(function(){
		$('#formProposta').submit();
	});
	
	$('#indietro').click(function(){
		$('#goBack').submit();
	});
	
});
</script>
	
		
		