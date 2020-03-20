/* globals $:false, AJAXGenericCall:false, impostaValoreSelect:false */
/* exported AdeVer */
"use strict";
var AdeVer = {};
AdeVer.loadFieldsAol = function(method, field, sezione, numInt) {
	var parameters = 'method=' + method + '&field=' + field + '&sezione=' + sezione + '&numInt=' + numInt + '&cf=' + Math.random();
	AJAXGenericCall('POST', '/adever/loadFields.do', function(data) {
		$('#adever' + sezione).html(data);
	}, function() {
	}, parameters);
};
AdeVer.populateSelect = function(method, field, idSelectRic, idSelectDes, valueDes) {
	var valueSelected = $('#' + idSelectRic + ' option:selected').val();
	// Gestire COUNTRY -> descrizione = ITALIA
	if (valueSelected === '' || (field === 'COUNTRY' && valueSelected.split('|')[0] !== '86')) {
		$('#' + idSelectDes).prop('disabled', true).val('');
	} else {
		var parameters = 'valueSelected=' + valueSelected;
		parameters += '&method=' + method + '&field=' + field + '&cf=' + Math.random();
		AJAXGenericCall('POST', '/adever/loadFields.do', function(data) {
			if (data.isEsito) {
				var sel = $('#' + idSelectDes);
				var vet = data.vetResult;
				var sizeTit = vet.length;
				if (sel.is(':disabled')) {
					sel.prop('disabled', false);
				}
				// Reset
				$('#' + idSelectDes).empty();
				$('#' + idSelectDes).append($('<option>', {
				    value : '',
				    text : 'seleziona'
				}));
				for (var i = 0; i < sizeTit; i++) {
					$('#' + idSelectDes).append($('<option>', {
					    value : vet[i].codice + '|' + vet[i].desc,
					    text : vet[i].desc
					}));
				}
				if (valueDes) {
					impostaValoreSelect(idSelectDes, valueDes);
				}
			}
		}, function() {
		}, parameters);
	}
};

AdeVer.reset = function(method, suffix) {
	
	$(
    '#redditoAnnuoAv' + suffix + 
    ', #originePatrimonioAv' + suffix + 
    ', #statoAttivitaAv' + suffix + 
    ', #origineRedditoAv' + suffix + 
    ', #dettaglioSettoreAv' + suffix + 
    ', #originePatrimonioAv' + suffix + 
    ', #provinciaAttivitaAv' + suffix)
    .val('').prop('disabled', false).removeClass('error').nextAll('label.error').remove();
	
	$('#statoAttivitaAv' + suffix).val('86|ITALIA');
	AdeVer.populateSelect(method, 'COUNTRY', 'statoAttivitaAv' + suffix, 'provinciaAttivitaAv' + suffix);
}

AdeVer.checkProfession = function(method, suffix) {
	if (AdeVer.hasReddito('professioneAv' + suffix)) {
		AdeVer.reset(method, suffix);	
	} else {
		
		if(!AdeVer.hasTae('professioneAv' + suffix)){
			$('#dettaglioSettoreAv' + suffix).val('').prop('disabled', true).removeClass('error').nextAll('label.error').remove();;
		} else {
			$('#dettaglioSettoreAv' + suffix).val('').prop('disabled', false).removeClass('error').nextAll('label.error').remove();;
		}
		
		$(
		'#statoAttivitaAv' + suffix + 
		', #origineRedditoAv' + suffix + 
		', #provinciaAttivitaAv' + suffix)
		.val('').prop('disabled', true).removeClass('error').nextAll('label.error').remove();
		
		$(
		'#redditoAnnuoAv' + suffix + 
		', #originePatrimonioAv' + suffix)
		.val('').prop('disabled', false).removeClass('error').nextAll('label.error').remove();	
	}
}

AdeVer.hasReddito = function(fieldId) {
	if (!$('#' + fieldId).length || $('#' + fieldId).val() == null) {
		return false;
	} else {
		var type = parseInt($('#' + fieldId).val().split('|')[0]);
		switch (type) {
		case 6: // Non occupato
			return false;
		case 5: // Pensionato
			return false;
		default:
			return true;
		}
	}
}

AdeVer.hasTae = function(fieldId) {
	if (!$('#' + fieldId).length || $('#' + fieldId).val() == null) {
		return false;
	} else {
		var type = parseInt($('#' + fieldId).val().split('|')[0]);
		switch (type) {
		case 6: // Non occupato
			return false;
		default:
			return true;
		}
	}
}
