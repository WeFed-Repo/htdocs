Firma = {};

Firma.inizialize = function() {
	this.sezione = '';
}

Firma.inizialize();

/**
 * @description Effettua la chiamata ajax al server
 * @param String Nome del metodo GET o POST
 * @param String Url per la chiamata al server senza cgi
 * @param Function Nome della funzione che bisogna eseguire in caso di risposta positiva
 * @param Function Nome della funzione che bisogna eseguire in caso di risposta negativa
 * @param Array Contiene i parametri che bisogna passare al server per effettuare la chiamata
 */
Firma.AJAXGenericCall = function(method, url, successFunc, failureFunc, parameters) {
	jqAJAXCall('post', null, cgi_script + url, successFunc, failureFunc, parameters);
}

Firma.salvaDati = function(){
	var parameters = $('#modificaDatiForm').serializeArray();
	Firma.AJAXGenericCall('POST', '/fdr/salvaDatiModifica.do?cf=' + Math.random(), Firma.sucCallbackFields2, Firma.failureCallbackFields, parameters);
}

Firma.goToStepN = function(numStep) {
	this.sezione = 'step' + numStep;	
	var parameters = $('#modificaDatiForm').serializeArray();
	Firma.AJAXGenericCall('POST', '/fdr/RichiestaFirmaDigitale.do?comando='+ this.sezione + '&cf=' + Math.random(), Firma.sucCallbackFields, Firma.failureCallbackFields, parameters);
}

Firma.confermaPin = function() {
	this.sezione = 'attivazioneFirma';

	var parameters = '&cf=' + Math.random();

	// FIXME setLoadingOnObject(this.sezione);
	Firma.AJAXGenericCall('POST', '/fdr/confermaPin.do', Firma.sucCallbackFields, Firma.failureCallbackFields, parameters);
}

Firma.inviaOtp = function() {
	this.sezione = 'inserisciCodiciFirma';

	var parameters = '&cf=' + Math.random();

	// FIXME setLoadingOnObject(this.sezione);
	Firma.AJAXGenericCall('POST', '/fdr/inviaOtpFirma.do', Firma.sucCallbackFields, Firma.failureCallbackFields, parameters);
}

Firma.archiviaDocumento = function(codicePratica, idTipoProdotto, idWorkFlowPratica) {
	this.sezione = 'archiviaDocumento' + codicePratica;

	var parameters = '&codicePratica=' + codicePratica + '&idTipoProdotto=' + idTipoProdotto + '&idWorkFlowPratica=' + idWorkFlowPratica + '&cf=' + Math.random();

	// FIXME setLoadingOnObject(this.sezione);
	Firma.AJAXGenericCall('POST', '/admin/ArchiviaDocumento.do', 
			
	function(data) {
		Firma.sucCallbackArchiviazione(data, 'archiviaDocumento' + codicePratica, codicePratica);
	},
	
	function(data) {
		Firma.failureCallbackArchiviazione(data, 'archiviaDocumento' + codicePratica, codicePratica);
	},
			
	parameters);
}

Firma.sucCallbackArchiviazione = function(data, sez, codicePratica) {
	// FIXME unsetLoadingOnObject(sez);
	$('.' + codicePratica).html('<img src="/img/ret/ico_spuntina_prest.gif">');
}

Firma.failureCallbackArchiviazione = function(data, sez, codicePratica) {
	// FIXME unsetLoadingOnObject(sez);
	$('.' + codicePratica).html('<img src="/ico2inf_off.gif">');
}

Firma.sucCallbackFields = function(data) {
	Firma.displayFields(data);
}

Firma.sucCallbackFields2 = function(data) {
	goToStep();
}

Firma.failureCallbackFields = function(data) {
	Firma.displayFields(data);
}

Firma.displayFields = function(data) {
	// FIXME unsetLoadingOnObject(this.sezione);
	$('#' + this.sezione).html(data);
}

function richiediOtp(idSezione){
	Firma.inviaOtp();
	$('#' + idSezione).show();
}

function conferma(idForm){
	var err = '';
	
	if($('#pin').val() == null || $('#pin').val() == ''){
		err = err + '<li>pin di firma non valido</li>';
	}
	
	if($('#otp').val() == null || $('#otp').val() == ''){
		err = err + '<li>codice di controllo non valido</li>';
	}

	if(err != ''){
		$('#errC').html = err;
		if($('#erroreFirma').length){
			$('#erroreFirma').show();
		}
		
	} else {
		if($('#erroreFirma').length){
			$('#erroreFirma').hide();
		}
		
		$('#' + idForm).submit();
	}	
}