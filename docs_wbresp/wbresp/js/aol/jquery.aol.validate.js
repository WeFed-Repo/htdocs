/* globals $:false, AJAXGenericCall:false */
"use strict";
$(function() {

	// Valida presenza convenzione
	$.validator.addMethod('requiredConvenzione', function(value, element, args) {
		var cod_presentatore = $("[name='" + args[0] + "']").val();
		if ((cod_presentatore !== null && cod_presentatore !== '') && (value === null || value === '')) {
			return false;
		} else {
			return true;
		}
	}, $.validator.format("Inserisci"));

	// Valida codice convenzione
	$.validator.addMethod('validaConvenzione', function(value, element) {
		if (this.optional(element)) {
			return true;
		}
		return validaConvenzione(value);

	}, $.validator.format("Verifica"));

	// Valida codice promotore
	$.validator.addMethod('validaPromotore', function(value, element) {
		if (this.optional(element)) {
			return true;
		}
		return validaPromotore(value);

	}, $.validator.format("Verifica"));

	// Valida codice presentatore
	$.validator.addMethod('requiredPresentatore', function(value, element, args) {
		var cod_prom_conv = $("[name='" + args[0] + "']").val();
		if(cod_prom_conv.toUpperCase().indexOf("MGM") !== -1 &&  (value === null || value === '')) {
			return false;
		} else {
			return true;
		}
	}, $.validator.format("Inserisci"));
	
	// Valida codice presentatore
	$.validator.addMethod('validaPresentatore', function(value, element) {
		if (this.optional(element)) {
			return true;
		}
		return validaPresentatore(value);
		
	}, $.validator.format("Verifica"));
	
	// Valida coerenza codice fiscale paese di nascita
	$.validator.addMethod('validaPaese', function(value, element, args) {
		if (this.optional(element)) {
			return true;
		}
		return validaPaeseComune(value, 'P', args[0]);

	}, $.validator.format("Verifica"));
	
	// Valida coerenza codice fiscale e comune nascita
	$.validator.addMethod('validaComune', function(value, element, args) {
		if (this.optional(element)) {
			return true;
		}
		return validaPaeseComune(value, 'C', args[0], args[1]);

	}, $.validator.format("Verifica"));

	// Valida codice IBAN
	$.validator.addMethod('validaIban', function(value, element) {
		if (this.optional(element)) {
			return true;
		}
		return validaIban(value);

	}, $.validator.format("Verifica"));

	// Valida codice IBAN no IMEL
	$.validator.addMethod('validaIbanNoImel', function(value, element) {
		if (this.optional(element)) {
			return true;
		}
		return validaIbanNoImel(value);

	}, $.validator.format("L\'IBAN che hai indicato &egrave; riferito a un Istituto da cui non &egrave; consentita l\'identificazione tramite bonifico. Per proseguire, inserisci l\'IBAN di un conto corrente aperto presso una Banca italiana."));
});

var validaIbanNoImel = function(value) {
	var isValid = false;

	var parameters = 'iban=' + value;
	AJAXGenericCall('POST', '/aol/validaIban.do',

	function(data) {
		if (data.isValid) {
			if (data.isItaliano) {
				isValid = data.isNotInBlackList;
			}
		}
		
		return isValid;
	},

	function() {
		isValid = false;
	},

	parameters);

	return isValid;
};

var validaIban = function(value) {
	var isValid = false;

	var parameters = 'iban=' + value;
	AJAXGenericCall('POST', '/aol/validaIban.do',

	function(data) {
		if (data.isValid) {
			isValid = data.isItaliano;
		}
	},

	function() {
		isValid = false;
	},

	parameters);

	return isValid;
};

var validaConvenzione = function(value) {
	var isValid = false;

	var parameters = 'codice=' + value;
	AJAXGenericCall('POST', '/aol/validaConvenzione.do',

	function(data) {
		isValid = data.isValid;
	},

	function() {
		isValid = false;
	},

	parameters);

	return isValid;
};

var validaPromotore = function(value) {
	var isValid = false;

	var parameters = 'codice=' + value;
	AJAXGenericCall('POST', '/aol/validaPromotore.do',

	function(data) {
		isValid = data.isValid;
	},

	function() {
		isValid = false;
	},

	parameters);

	return isValid;
};

var validaPresentatore = function(value) {
	var isValid = false;

	var parameters = 'codice=' + value;
	AJAXGenericCall('POST', '/aol/validaPresentatore.do',

	function(data) {
		isValid = data.isValid;
	},

	function() {
		isValid = false;
	},

	parameters);

	return isValid;
};

var validaPaeseComune = function(value, codice, idCodiceFiscale, idProvincia) {
	var isValid = false;

	var parameters = 'valore=' + value +  '&codice=' + codice +  '&codiceFiscale=' + $(idCodiceFiscale).val() +  '&valoreProvincia=' + $(idProvincia).val();
	AJAXGenericCall('POST', '/aol/validaPaeseComune.do',

	function(data) {
		isValid = data.isValid;
	},

	function() {
		isValid = false;
	},

	parameters);

	return isValid;
};