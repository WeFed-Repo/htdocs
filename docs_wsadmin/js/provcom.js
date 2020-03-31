ProvCom = {};

/**
 * @description Effettua la chiamata ajax al server
 * @param String Nome del metodo GET o POST
 * @param String Url per la chiamata al server senza cgi
 * @param Function Nome della funzione che bisogna eseguire in caso di risposta positiva
 * @param Function Nome della funzione che bisogna eseguire in caso di risposta negativa
 * @param Array Contiene i parametri che bisogna passare al server per effettuare la chiamata
 */
ProvCom.AJAXGenericCall = function(method, url, successFunc, failureFunc, parameters) {
	jqAJAXCall('post', null, cgi_script + url, successFunc, failureFunc, parameters);
}

ProvCom.updateComuni = function(idDiv, idProv, nameSelect, idSelect, fraz, label) {
	var parameters = 'provincia=' + $(idProv).value + '&idSelect=' + idSelect + '&nameSelect=' + nameSelect + '&frazioni=' + fraz + '&label=' + label;
	ProvCom.AJAXGenericCall('POST', '/aoladmin/jsp/common/comuni.jsp', function(data) {ProvCom.sucCallbackFields(data, idDiv)}, function(data) {ProvCom.failureCallbackFields(data, idDiv)}, parameters);
}

ProvCom.sucCallbackFields = function(data, idDiv) {
	$('#' + idDiv).html(data);
	impostaValoriSelect();
}

ProvCom.failureCallbackFields = function(data, idDiv) {
	$('#' + idDiv).html(data);
}