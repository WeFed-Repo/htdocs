					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							22/05/2017	
						</div>
					</div>
					
					
					
					



<div class="riquadro clearfix">


<div class="clearfix">
	
		
<div class="col-xs-12 hidden-xs hidden-print">
				
		<div class="contentPagina">
			<div style="text-align: center;"><img src="/HT/IMAGES/wizard_step_4_contratto.gif" alt=""></div>
		</div>



</div>
		
	
</div>









	









	

<form id="formInvestimentiDossier" method="post" action="/WEBHT/investimenti/dossierAttivazioneContrattoFDR.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="be776d5de9f0804a5280185880571628"></div>
	<div id="formContoDepositoAttivazione" class="divForm riepilogoFDR">
		<p style="padding:10px; margin-bottom:10px">
		
			
			
				Nel seguito viene riportata la richiesta di apertura rapporto che stai per <b>firmare digitalmente in quanto titolare del certificato di firma digitale gi&agrave; rilasciato</b>. Per procedere con la sottoscrizione leggi il documento in tutte le sue parti e procedi con l'apposizione delle firme seguendo le istruzioni riportate nel seguito.
			
		
		</p>
		<div class="section">
			<div class="bs-example form-horizontal">

		
		
		
		<div id="documentoPDF" style="margin-bottom:10px;"><embed id="embedId" src="/WEBHT/investimenti/dossierFDRPdf" style="width:100%; height:500px; border: 1px solid #666"></div>
		



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

			"src" : pdfPlugin + encodeURIComponent("/WEBHT/investimenti/dossierFDRPdf"),
			"style" : "height: 400px; width: 100%", /* width: 700px */
		});

		div.prepend(iframe);
	}
	else {
		var embed = $("<embed></embed>");
		embed.attr({
			"id" : "embedId",
			"src" : "/WEBHT/investimenti/dossierFDRPdf",
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
		<div class="section">
			<h3 class="titleSection">
				
				








		
			Firma digitale del contratto
		
		
		


			</h3>
			<div class="bs-example form-horizontal">
				<div class="form-group clearfix">
					<div class="form-field-resume col-xs-12">
						Inserisci i flag per confermare l'apposizione della tua firma digitale negli spazi presenti del documento sopra riportato:
					</div>
					<div class="form-field-resume col-xs-12">
						<span class="floatl">
							<input type="checkbox" name="condizioniNormative" value="on">
							<b>Firma delle Condizioni di Adesione, delle Norme Contrattuali e delle Condizioni Economiche relative all'Offerta "Dossier Titoli e Servizi d'Investimento"</b>
						</span>
					</div>
					<div class="form-field-resume col-xs-12">
						<div style="width:100%; height: 182px; overflow: auto; background: #fff; margin-bottom: 5px;">
							Dichiara di approvare specificamente, anche ai sensi e per gli effetti di cui all'articolo 1341 2&deg; comma del Codice Civile, le seguenti clausole di cui alla presente Proposta, tutte come contenute nella stessa e nelle Norme Contrattuali:<br><br>Condizioni generali di adesione all'Offerta "DOSSIER TITOLI E SERVIZI DI INVESTIMENTO":<br>- Art. 3 (effetto della chiusura dei rapporti necessariamente ricompresi nella Convenzione);<br>- Art. 4 (facolt&agrave; di modifica da parte della Banca delle norme e condizioni dei rapporti oggetto della Convenzione).<br><br>Condizioni generali di adesione all'Offerta "DOSSIER TITOLI E SERVIZI DI INVESTIMENTO". Norme contrattuali relative al: "Dossier - Deposito a custodia e/o amministrazione di  titoli e strumenti finanziari -":<br>- Art. 5 (vendita dei titoli in caso di inadempimento del cliente);<br>- Art. 7 (recesso);<br>- Art. 9 (facolt&agrave; di disporre separatamente del deposito);<br>- Art. 13 (sub deposito di titoli emessi o circolanti all'estero);<br>e ai sensi e per gli effetti dell'art.85 D.lgs. TUF - la seguente clausola delle norme di cui sopra:<br>- Art. 11 (sub-deposito dei titoli cartacei presso societ&agrave; di gestione accentrata).<br><br>Condizioni generali di adesione all'Offerta "DOSSIER TITOLI E SERVIZI D'INVESTIMENTO" Norme contrattuali relative al "Servizio di negoziazione per conto proprio, esecuzione, ricezione e trasmissione ordini, collocamento".<br>- Art. 1, comma 2 (Autorizzazione ad agire in nome proprio  e per conto del Cliente);<br>- Art. 2, comma 3 (Autorizzazione all'esecuzione di ordini al di fuori dei mercati regolamentati);<br>- Art. 9  (Conflitti d'interesse);<br>- Art. 11 comma 6 (Approvazione tacita del rendiconto);<br>- Art. 17 (Recesso dal contratto);<br>- Art. 18 (Clausola risolutiva espressa);<br>- Art. 19, commi 2 e 3 (Modifiche unilaterali al contratto);<br>- Art. 20, comma 1 (Esonero da responsabilit&agrave; della Banca);<br>- Art. 22, comma 1(Procedure di conciliazione e arbitrato).<br><br>Norme speciali relative all'operativit&agrave; in strumenti finanziaria derivati ammessi alla quotazione in un mercato regolamentato:<br>- Art.25, comma 1 (Facolt&agrave; di non dare corso all'ordine);<br>- Art.25, comma 2 (Esonero da responsabilit&agrave; della Banca);<br>- Art.26 (Approvazione tacita del rendiconto);<br>- Art.27  (Impegno a mantenere un conto speciale vincolato ed un deposito speciale vincolato);<br>- Art.28 comma 2 (facolt&agrave; della Banca di prelevare di propria iniziativa i margini iniziali di garanzia);<br>- Art.28 comma 7 (chiusura delle posizioni in essere in caso di inadempimento del cliente);<br>- Art.29 comma 4 (Facolt&agrave; di variare le modalit&agrave; di calcolo dei margini iniziali di garanzia);<br>- Art.30 comma 4 (Liquidazione d'ufficio delle posizioni in caso di inadempimento del Cliente);<br>- Art.36 (Liquidazione d'ufficio delle posizioni contrattuali);<br>- Art.39 (Estinzione delle posizioni in caso di recesso);<br>- Art.40 (Clausola risolutiva espressa).<br><br>Norme speciali relative ai clienti accreditati:<br>- Art.42 (Norme applicabili ai clienti accreditati).<br><br>Condizioni generali di adesione all'Offerta "DOSSIER TITOLI E SERVIZI DI INVESTIMENTO" Norme contrattuali relative  al  "Servizio You Call":<br>- Art. 4 (facolt&agrave; per la Banca di sospendere o abolire il Servizio);<br>- Art. 7, commi 2 e 3 (modalit&agrave; di esecuzione dei Servizio e facolt&agrave; di modifica per la Banca);<br>- Art. 10 (prova delle comunicazioni effettuate ed intercorse in utilizzo dei Servizio);<br>- Art. 11 (responsabilit&agrave; della Banca);<br>- Art. 12 (facolt&agrave; di recesso e risoluzione per la Banca);<br>- Art. 14 (ordine di non pagare assegni).<br><br>Sezione I - Utilizzo del Servizio con opzione YouAlert:<br>- Art. 18, comma 2 (facolt&agrave; per la Banca di utilizzare il numero di telefono cellulare per l'inoltro di comunicazioni);<br>- Art. 22 (prova degli accessi effettuati in utilizzo del servizio). 
						</div>
					</div>
					<div class="form-field-resume col-xs-12">	
						<span class="floatl">
							<input type="checkbox" name="clausoleVessatorie" value="on">
							<b>Firma per presa visione e accettazione delle clausole sottoposte ad approvazione specifica ex art.1341 , 2&deg; comma del Codice Civile</b>
						</span>
					</div>
					<div class="form-field-resume col-xs-12">
						<span class="floatl">
							<input type="checkbox" name="adeguataVerifica" value="on">
							<b>Firma delle risposte alle domande conoscitive per l'adeguata verifica</b>
						</span>
					</div>
					
				</div>
				<div class="form-group clearfix">
					<div class="form-field-resume col-xs-12 margin-bottom5">	
						Inserisci i codici richiesti e clicca su CONFERMA per procedere:
					</div>
					<div class="form-field-input col-xs-12 col-sm-6">
						<div class="floatl">
							<b>PIN</b>
						</div>
						<div class="floatl margin-left10 margin-right10">
							<input type="password" name="pin" value="" id="pin" class="form-control wauto" autocomplete="off">
						</div>
						<div class="floatl">
							Inserisci lo stesso PIN che hai utilizzato <br>per accedere al YouWeb
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-6">
						<span class="floatl">
							<img src="/HT/fe/img/OTPW.png" style="margin-top:-6px;" title="" alt="">
						</span>
						<span class="floatl margin-left10">
							<input type="text" name="codiceOtp" maxlength="6" size="10" value="" id="codiceOtp" class="form-control wauto" autocomplete="off">
						</span>
						<span class="floatl">
							<a href="#" onclick="javascript:window.open('/HT/HTML/HelpOtp.html','help','width=500,height=350,resizable=yes,scrollbars=yes');return false;">
								<img src="/HT/fe/img/i_help.png" style="margin-bottom:-3px;margin-left:5px" title="Help On Line" alt="Help On Line">
							</a>
						</span>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</form>
</div>
<div class="pull-right">
	<input type="button" name="richiediModulo" value="Conferma" id="richiediModulo" class="btn btn-primary execute">
</div>
<script type="text/javascript">
$(document).ready(function(){
	$('#pin').attr('autocomplete', 'off');
	$('#codiceOtp').attr('autocomplete', 'off');
	$('#contentLeft table tr.FDR').show();
	
	$('#richiediModulo').click(function() { 
	        $.blockUI({ 
	            theme:     true, 
	            title:    'Richiesta in corso', 
	            message:  '<p style="font-size:10pt"><br />Attendere prego...</p><br /><br />' 
	            /*timeout:   2000*/ 
	        });
	        $('#formInvestimentiDossier').submit();
    	}); 
})
</script>