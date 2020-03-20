Disclaimer = {};

Disclaimer.inizialize = function() {
}

Disclaimer.inizialize();

/**
 * @description Effettua la chiamata ajax al server
 * @param String Nome del metodo GET o POST
 * @param String Url per la chiamata al server senza cgi
 * @param Function Nome della funzione che bisogna eseguire in caso di risposta positiva
 * @param Function Nome della funzione che bisogna eseguire in caso di risposta negativa
 * @param Array Contiene i parametri che bisogna passare al server per effettuare la chiamata
 */
Disclaimer.AJAXGenericCall = function(method, url, successFunc, failureFunc, parameters) {
	jqAJAXCall(method, 'json', wrp_script_direct + url, successFunc, failureFunc, parameters);
}

//INIZIO Disclaimer usato per STRUTS2

Disclaimer.loadDisclaimerResp = function(idResult, id_disclaimer, idError) {	
	var parameters = 'id_disclaimer=' + id_disclaimer + '&cf=' + Math.random();
	Disclaimer.AJAXGenericCall('post', '/common/loadDisclaimer.action',

	function(data) {
		Disclaimer.sucCallback(data, idResult)
	},
	
	function(data) {
		Disclaimer.failureCallback(data, idError)
	},

	parameters);
}

//FINE Disclaimer usato per STRUTS2

Disclaimer.loadDisclaimer = function(idResult, id_disclaimer, idError) {
	
	// Caricamento
	// setLoadingOnObject(this.idOnSetResult);

	var parameters = 'id_disclaimer=' + id_disclaimer + '&cf=' + Math.random();
	Disclaimer.AJAXGenericCall('post', '/common/loadDisclaimer.do',

	function(data) {
		Disclaimer.sucCallback(data, idResult)
	},
	
	function(data) {
		Disclaimer.failureCallback(data, idError)
	},

	parameters);
}

Disclaimer.sucCallback = function(data, idResult) {
	// $('#validate').val(data.isEsito);
	// alert($('#validate').val());

	if (data.isEsito) {
		// unsetLoadingOnObject(this.idOnSetResult);
		$('#' + idResult).html(data.template);

	} else {
		// unsetLoadingOnObject(this.idOnSetResult);
		$('#' + idResult).html('Errore in pagina!!');
	}
}

Disclaimer.failureCallback = function(data, idError) {
	$('#' + idError).html('');
}

function jqAJAXCallSync(method, type, url, successFunc, failureFunc, parameters) {
	var ajaxOptions = {
	    type : method,
	    url : url
	};
	// 'json', 'xml', 'html'
	if (type) {
		ajaxOptions.dataType = type;
	}
	if (successFunc) {
		ajaxOptions.success = successFunc;
	}
	if (failureFunc) {
		ajaxOptions.failure = failureFunc;
	}
	if (failureFunc) {
		ajaxOptions.error = failureFunc;
	}
	if (parameters) {
		ajaxOptions.data = parameters
	}

	ajaxOptions.async = false;

	$.ajax(ajaxOptions);
}