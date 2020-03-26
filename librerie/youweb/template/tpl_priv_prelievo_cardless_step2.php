					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							29/06/2017	
						</div>
					</div>
					
					
					
					




 

<script type="text/javascript">
	$(document).ready(function(){
		$('#pin').attr('autocomplete', 'off');
		$('#codiceOtp').attr('autocomplete', 'off');
		$('#contentLeft table tr.FDR').show();
		$('#btnConferma').click(function() 
		{
	        $.blockUI({ 
	            theme:     true, 
	            title:    'Richiesta in corso', 
	            message:  '<p style="font-size:10pt"><br />Attendere prego...</p><br /><br />' 
	            /*timeout:   2000*/ 
	        });
    	});
    	$('#pin').keyup(function() {
		if ($(this).val().length == 0) {
    		$('#popupConferma').attr('disabled', true);
  		} else {
  		
    		$('#popupConferma').attr('disabled', false);
  		}
  	}); 
	});
</script>

<form id="formAperturaPrelievoCardless" method="post" action="/WEBHT/carte/prelievoCardlessEsito.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="9a3fd78d0a4ba7343506e6b6d94d13f8"></div>
	<div class="riquadro clearfix">
		
		
		
		




	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
	</div>






<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag prelievoCardless">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Prelievo Cardless</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				







		<div class="contentPagina">
			<p style="text-align: center;"><img src="/HT/IMAGES/CONTENUTI/CARDLESS/step2.gif" alt=""></p>
		</div>



			</div>
		
	
</div>
		








	


		<div class="divForm riepilogoFDR">
			<p style="padding:10px; margin-bottom:10px">
				
					
					
						Nel seguito viene riportata la richiesta di apertura rapporto che stai per <b>firmare digitalmente in quanto titolare del certificato di firma digitale gi&agrave; rilasciato</b>. Per procedere con la sottoscrizione leggi il documento in tutte le sue parti e procedi con l'apposizione delle firme seguendo le istruzioni riportate nel seguito.
					
				
			</p>
			<div class="section">
				<div class="bs-example form-horizontal hidden-xs">
				
					
					
					
					<div id="documentoPDF" style="margin-bottom:10px;"><embed id="embedId" src="/WEBHT/carte/prelievoCardlessContrattoServlet" style="width:100%; height:500px; border: 1px solid #666"></div>
					



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
	
	if (isMobileBrowser() || !detectAcrobatPlugin()) {
		var pdfPlugin = "/HT/JS/pdfjs/web/viewer.html?file=";
		var iframe = $("<iframe scrolling=\"yes\" allowfullscreen webkitallowfullscreen></iframe>");
		iframe.attr({
			"id" : "embedId",

			"src" : pdfPlugin + encodeURIComponent("/WEBHT/carte/prelievoCardlessContrattoServlet"),
			"style" : "height: 400px; width: 100%", /* width: 700px */
		});

		div.prepend(iframe);
	}
	else {
		var embed = $("<embed></embed>");
		embed.attr({
			"id" : "embedId",
			"src" : "/WEBHT/carte/prelievoCardlessContrattoServlet",
			"style" : "width:100%; height:500px; border: 1px solid #666"
		});
		div.prepend(embed);
	}

}
$(function() {
	load();
});
</script>

				</div>
				<div class="section hidden-sm hidden-md hidden-lg">
					<h3 class="titleSection">Proposta di contratto</h3>
					<div class="bs-example form-horizontal">
						<div class="form-group clearfix">
							<div class="col-xs-12 padding-bottom10">
								Clicca sul link sottostante per scaricare la proposta di contratto per l'attivazione del Servizi Prelievo Cardless
							</div>
							<div class="col-xs-12">
								<img src="/HT/IMAGES/ico_pdf2.gif" alt="">&nbsp;
								<a href="/WEBHT/carte/prelievoCardlessContrattoServlet" target="_blank">Proposta di contratto</a>
							</div>
						</div>
					</div>
				</div>
				<div class="section">
					<h3 class="titleSection">Firma digitale del contratto</h3>
					<div class="bs-example form-horizontal">
						<div class="form-group clearfix">
							<div class="form-field-resume col-xs-12">
								Inserisci i flag per confermare l'apposizione della tua firma digitale negli spazi presenti del documento sopra riportato:
							</div>
							<div class="form-field-resume col-xs-12">
								<span class="floatl">
									<input type="checkbox" name="condizioniNormative" value="on">
									<b>Firma delle Condizioni Normative</b>
								</span>
							</div>
							<div class="form-field-resume col-xs-12">
								<div style="width:100%; height: 130px; overflow: auto; background: #fff; margin-bottom: 5px;">
									Dichiaro di approvare specificamente, anche ai sensi e per gli effetti di cui all'articolo 1341 2&deg; comma del Codice Civile, le seguenti clausole di cui alla presente Proposta tutte come contenute nella stessa:<br><br>"Norme che regolano il "Servizio "Prelievo CardLess"":<br>- Art. 8, comma 1 (esclusione di responsabilit&agrave; della Banca);<br>- Art. 8, comma 2 (obblighi e responsabilit&agrave; del Cliente);<br>- Art. 11, comma 2 (blocco del Servizio);<br>- Art. 14 (recesso e risoluzione del contratto).
								</div>
							</div>
							<div class="form-field-resume col-xs-12">	
								<span class="floatl">
									<input type="checkbox" name="clausoleVessatorie" value="on">
									<b>Firma delle clausole sottoposte ad approvazione specifica ex art.1341 , 2&deg; comma del Codice Civile</b>
								</span>
							</div>

<!-- 								<div class="form-field-resume col-xs-12"> -->
<!-- 									<span class="floatl"> -->


<!-- 									</span> -->
<!-- 								</div> -->

						</div>
						<div class="form-field-resume col-xs-12 margin-bottom5">	
							Inserisci i codici richiesti e clicca su CONFERMA per procedere:
						</div>
						<div class="form-group clearfix">
							<div class="form-field-input col-sm-6 col-xs-12">
								<div class="col-xs-1">
									<b>PIN</b>
								</div>
								<div class="col-xs-11">
									<input type="password" name="pin" value="" id="pin" class="form-control wauto" autocomplete="off">
									Inserisci lo stesso PIN che utilizzi per accedere al YouWeb
								</div>
							</div>
							<div class="form-field-input col-sm-6 col-xs-12 padding-top-xs-10">
								
									
									
										<div class="col-sm-3 col-xs-4">
											<img src="/HT/IMAGES/OTPWT.png" style="margin-top:-6px;" title="" alt="">
										</div>
										<div class="col-sm-9 col-xs-8">
											<input type="text" name="codiceOTP" maxlength="6" size="10" value="" id="codiceOtp" class="form-control wauto" autocomplete="off">
											<a href="#" onclick="javascript:window.open('/HT/HTML/HelpOtp.html','help','width=500,height=350,resizable=yes,scrollbars=yes');return false;">
												<img src="/HT/IMAGES/nGrafica/i_help.png" style="margin-bottom:-3px;margin-left:5px" title="Help On Line" alt="Help On Line">
											</a>
										</div>
											
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="pull-right">
		
		
				
				
			
				<input type="submit" name="esito" value="Conferma" id="btnConferma" class="btn btn-primary execute" alt="Conferma">
					
		
		
	</div>
</form>