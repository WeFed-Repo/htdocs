AdeVer = {};

AdeVer.inizialize = function() {
	this.attesaScritturaCampo = 0;
	this.callAttribute = null;
	this.idSelectDes = null;
	this.value = null;
}

AdeVer.inizialize();

/**
 * @description Effettua la chiamata ajax al server
 * @param String Nome del metodo GET o POST
 * @param String Url per la chiamata al server senza cgi
 * @param Function Nome della funzione che bisogna eseguire in caso di risposta positiva
 * @param Function Nome della funzione che bisogna eseguire in caso di risposta negativa
 * @param Array Contiene i parametri che bisogna passare al server per effettuare la chiamata
 */
AdeVer.AJAXGenericCall = function(method, url, successFunc, failureFunc, parameters) {
	jqAJAXCall('post', null, wrp_script_direct + url, successFunc, failureFunc, parameters);
}

AdeVer.parserJson = function(data) {
	return data;
};

AdeVer.loadFields = function(method, field, accountId) {
	var parameters = 'method=' + method + '&field=' + field + '&accountId=' + accountId + '&cf=' + Math.random();
	AdeVer.AJAXGenericCall('POST', '/adever/loadFields.action', AdeVer.sucCallbackFields, AdeVer.failureCallbackFields, parameters);
}

AdeVer.loadFieldsAcc = function(method, field, sezione, numInt, gianos) {
	var parameters = 'method=' + method + '&field=' + field + '&sezione=' + sezione + '&numInt=' + numInt + '&gianos=' + gianos + '&cf=' + Math.random();
	AdeVer.AJAXGenericCall('POST', '/adever/loadFields.do', AdeVer.sucCallbackFields, AdeVer.failureCallbackFields, parameters);
}

AdeVer.sucCallbackFields = function(data) {
	AdeVer.displayFields(data);
}

AdeVer.failureCallbackFields = function(data) {
	$('#adever').html(data);
}

AdeVer.displayFields = function(res) {
	$('#adever').html(res);
	initTooltip();
	impostaValoriSelect();
}


AdeVer.populateSelectWithValue = function(method, field, selectRic, idSelectDes, valueSelected, valueDes) {

	var parameters = 'valueSelected=' + valueSelected;
	parameters += '&method=' + method + '&field=' + field + '&cf=' + Math.random();

	AdeVer.AJAXGenericCall('POST', '/adever/loadFields.action', function(data) {
		AdeVer.sucCallbackPopulateSelectWithValue(data, idSelectDes, valueDes)
	}, AdeVer.failureCallbackPopulateSelectWithValue, parameters);
}

AdeVer.sucCallbackPopulateSelectWithValue = function(data, idSelectDes, valueDes) {
	AdeVer.displayPopulateSelectWithValue(data, idSelectDes, valueDes);
};

AdeVer.failureCallbackPopulateSelectWithValue = function(data) {
	// TODO Gestione fallimento
};

AdeVer.displayPopulateSelectWithValue = function(data, idSelectDes, valueSelect) {

	if (data.isEsito) {

		var sel = $('#' + idSelectDes);
		if (sel.is(':disabled')) {
			sel.removeAttr('disabled');
			sel.val('-');
		}

		var vet = data.vetResult;
		var sizeTit = vet.length;

		for (var i = 0; i < sizeTit; i++) {
			sel.append($('<option>').val(vet[i].codice + '|' + vet[i].desc).text(vet[i].desc));
		}

		if (valueSelect != null && valueSelect != '-' && valueSelect != 'null') {
			impostaValoreSelect(idSelectDes, valueSelect);
		}

	} else {
		// TODO Gestione fallimento
	}
};

AdeVer.populateSelect = function(method, field, selectRic, idSelectDes) {

	var valueSelected = AdeVer.getValueSelect(selectRic);

	// Gestire COUNTRY -> descrizione = ITALIA
	if (valueSelected == '-' || (field == 'COUNTRY' && valueSelected.split('|')[0] != '86')) {
		$('#' + idSelectDes).attr('disabled', 'disabled');
		$('#' + idSelectDes).val("-");
	} else {
		var parameters = 'valueSelected=' + valueSelected;
		parameters += '&method=' + method + '&field=' + field + '&cf=' + Math.random();

		AdeVer.AJAXGenericCall('POST', '/adever/loadFields.action',

		function(data) {
			AdeVer.sucCallbackPopulateSelect(data, idSelectDes)
		},

		function(data) {
			AdeVer.failureCallbackPopulateSelect(data, idSelectDes)
		}, parameters);
	}
}

AdeVer.sucCallbackPopulateSelect = function(data, idSelectDes) {
	AdeVer.displayPopulateSelect(data, idSelectDes);
};

AdeVer.failureCallbackPopulateSelect = function(data, idSelectDes) {
	// TODO Gestione fallimento
};

AdeVer.displayPopulateSelect = function(res, idSelectDes) {
	if (res.isEsito == "true") {
		var sel = $('#' + idSelectDes);

		sel[0].options.length = 0;
		sel[0].disabled = "";
		sel[0].value = "-";

		var vet = res.vetResult;
		var sizeTit = vet.length;

		sel.append($('<option>').val('-').html('seleziona'));

		for (var i = 0; i < sizeTit; i++) {
			sel.append($('<option>').val(vet[i].codice + '|' + vet[i].desc).html(vet[i].desc));
		}
	} else {
		AdeVer.failureCallbackPopulateSelect();
	}
};

AdeVer.assignValue = function(obj, idField, concatenate) {
	idField = jqc(idField);
	var valueId = $(idField)[0].value, obj = $(obj)[0];
	if (obj.checked) {
		$(idField)[0].value = valueId + obj.value + ';';
	} else {
		$(idField)[0].value = valueId.replace(obj.value + ';', '');
	}
}

AdeVer.assignValueAol = function(obj, idField, concatenate) {
	var valueId = document.getElementById(idField).value;
	if (obj.checked) {
		document.getElementById(idField).value = valueId + obj.value + '#';
	} else {
		document.getElementById(idField).value = valueId.replace(obj.value + '#', '');
	}
}

AdeVer.impostaRadio = function(nameField, value) {
	$('#' + nameField + '_' + value).attr('checked', 'checked')
}

AdeVer.impostaRadioAol = function(int, idField, value) {
	var array = value.split('#');
	var s = '';
	for ( var i = 0; i < array.length; i++) {
		if (array[i] != null && array[i] != '') {
			document.getElementById(int + '|' + array[i]).checked = true;
			s = s + array[i] + '#';
		}
	}
	document.getElementById(idField).value = s;
}

AdeVer.setCheckedValue = function(idObj, value) {
	var obj = document.getElementsByName(idObj);
	for (var i = 0; i < obj.length; i++) {
		if (obj[i].value == value)
			obj[i].checked = true;
	}
}

AdeVer.getValueSelect = function(idSelectObj) {
	idObj = $(jqc(idSelectObj));
	if (idObj.length) {
		index = idObj[0].selectedIndex;
		val = idObj[0].options[index].value;
		return val;
	}
};

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

AdeVer.reset = function(method, suffix) {
	$('#dettaglioSettoreAv' + suffix).removeAttr('disabled');
	$('#dettaglioSettoreAv' + suffix).val('-');
	
	$('#statoAttivitaAv' + suffix).removeAttr('disabled');
	$('#statoAttivitaAv' + suffix).val('86|ITALIA');
	AdeVer.populateSelect(method, 'COUNTRY', 'statoAttivitaAv' + suffix, 'provinciaAttivitaAv' + suffix);
	$('#provinciaAttivitaAv' + suffix).removeAttr('disabled');
		
	$('#origineRedditoAv' + suffix).removeAttr('disabled');
	$('#origineRedditoAv' + suffix).val('-');
	
	$('#redditoAnnuoAv' + suffix).removeAttr('disabled');
	$('#redditoAnnuoAv' + suffix).val('-');
	
	$('#originePatrimonioAv' + suffix).removeAttr('disabled');
	$('#originePatrimonioAv' + suffix).val('-');
	
	$('#patrimonioAv' + suffix).removeAttr('disabled');
	$('#patrimonioAv' + suffix).val('-');
}

/*****************************************************************************************************************************************************
 * Gestione della professione
 ****************************************************************************************************************************************************/

AdeVer.checkProfession = function(method, suffix) {
	if (AdeVer.hasReddito('professioneAv' + suffix)) {
		AdeVer.reset(method, suffix);	
	} else {
		
		if(!AdeVer.hasTae('professioneAv' + suffix)){
			$('#dettaglioSettoreAv' + suffix).val('-');
			$('#dettaglioSettoreAv' + suffix).attr('disabled', 'disabled');
		} else {
			$('#dettaglioSettoreAv' + suffix).removeAttr('disabled');
			$('#dettaglioSettoreAv' + suffix).val('-');
		}
		
		$('#statoAttivitaAv' + suffix).val('-');
		$('#statoAttivitaAv' + suffix).attr('disabled', 'disabled');
		$('#provinciaAttivitaAv' + suffix).val('-');
		$('#provinciaAttivitaAv' + suffix).attr('disabled', 'disabled');
		$('#origineRedditoAv' + suffix).val('-');
		$('#origineRedditoAv' + suffix).attr('disabled', 'disabled');

		$('#redditoAnnuoAv' + suffix).val('-');
		$('#originePatrimonioAv' + suffix).val('-');
		$('#patrimonioAv' + suffix).val('-');
	}
}

/*****************************************************************************************************************************************************
 ****************************************************************************************************************************************************/

function validaAdeverAjax() {

	var hasError = false;
	var hasRed = AdeVer.hasReddito('professioneAv_ric');
	var hasTae = AdeVer.hasTae('professioneAv_ric');

	if ($('#usoConto_ric')[0].value == '-') {
		addValidationError('lbusoConto', 'Selezionare il campo "Utilizzo della carta"', true);
		hasError = true;
	}

	if ($('#professioneAv_ric')[0].value == '-') {
		addValidationError('lbprofessioneAv_ric', 'Selezionare il campo "Professione"', true);
		hasError = true;
	}

	if ($('#redditoAnnuoAv_ric')[0].value == '-') {
		addValidationError('lbredditoAnnuoAv_ric', 'Selezionare il campo "Reddito annuo netto"', true);
		hasError = true;
	}

	if (hasTae && $('#dettaglioSettoreAv_ric')[0].value == '-') {
		addValidationError('lbdettaglioSettoreAv_ric', 'Selezionare il campo "Dettaglio settore"', true);
		hasError = true;
	}

	if (hasRed && $('#statoAttivitaAv_ric')[0].value == '-') {
		addValidationError('lbstatoAttivitaAv_ric', 'Selezionare il campo "Stato di svolgimento"', true);
		hasError = true;
	}

	if (hasRed && $('#statoAttivitaAv_ric')[0].value.split('|')[1] == 'ITALIA' && $('#provinciaAttivitaAv_ric')[0].value == '-') {
		addValidationError('lbprovinciaAttivitaAv_ric', 'Selezionare il campo "Provincia di svolgimento"', true);
		hasError = true;
	}

	if ($('#originePatrimonioAv_ric')[0].value == '-') {
		addValidationError('lboriginePatrimonioAv_ric', 'Selezionare il campo "Origine dei fondi"', true);
		hasError = true;
	}

	if (hasRed && $('#origineRedditoAv_ric')[0].value == '-') {
		addValidationError('lborigineRedditoAv_ric', 'Selezionare il campo "Dichiarazione origine del reddito"', true);
		hasError = true;
	}

	if (!$('#politicEspostaAv_ric_S').is(':checked') && !$('#politicEspostaAv_ric_N').is(':checked')) {
		addValidationError('lbpoliticEspostaAv_ric', 'Selezionare il campo "Persona politicamente esposta"', true);
		hasError = true;
	}

	return hasError;
}