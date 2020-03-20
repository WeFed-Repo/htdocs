var mainErrore = false;
var idsQuestions = [];
var errorsQuestions = [];
var requiredQuestions = [];

function addIdQuestion(id) {
	idsQuestions.push(id);
}

function addErrorQuestion(error) {
	errorsQuestions.push(error);
}

function addRequiredQuestion(required) {
	requiredQuestions.push(required);
}

function changeCheckValue(element) {
	element = $(element);
	var newValue = (element.is(':checked')) ? 'yes' : 'no';
	element.val(newValue);
}

function changeDisableStatus(value, selectId) {
	var label = $('#' + selectId + '_label');
	if (!label) {
		label = $('#' + selectId.toLowerCase() + '_td');
	}
	var labelValue = label.html();
	var labelSize = labelValue.length;
	if ( labelValue.indexOf('*') == (labelSize - 1) ) {
		labelValue = labelValue.substring(0, (labelSize - 1));
	}
	if (value == 'yes') {
		labelValue += '*';
	}
	else {
		$('#' + selectId).prop('selectedIndex', 0);
	}
	label.html(labelValue);
	if (value == 'yes') {
		$('#' + selectId).removeAttr('disabled');
	}
	else {
		$('#' + selectId).attr('disabled', 'disabled');
	}
}

function inviaRichiestaPriv() {
	
	mainErrore = false;
	with (document.richiestaRegistrazione) {
		var prefCellulareJQ = $(prefCellulare);
		var cellulareJQ = $(cellulare);
		if ( (prefCellulareJQ.val() == "") || (cellulareJQ.val() == "") ) {
			seleziona('cellulare','Inserisci il numero di cellulare');
	    } 
		else if (prefCellulareJQ.val().length < 3) {
			seleziona('cellulare','Il prefisso cellulare deve contenere tre numeri');
		}
		else {
	    	if(cellulareJQ.val().length < 6)
	    		seleziona('cellulare', 'Il cellulare deve contenere almeno 6 numeri');
	    	if(!isNumeric(prefCellulareJQ.val()))
	    		seleziona('cellulare', 'Il prefisso deve contenere solo numeri');
	    	if(!isNumeric(cellulareJQ.val()))
	    		seleziona('cellulare', 'Il cellulare deve contenere solo numeri');
	    }
		var emailJQ = $(email);
		if (emailJQ.val() == "") {
			seleziona('email','valorizzare il campo email');
	    } else {
	    	if(!isEmail(emailJQ.val()))
	    		seleziona('email', 'valorizzare il campo email con una mail valida');
	    	if(emailJQ.val().length > 50)
	    		seleziona('email', 'nel campo email sono permessi massimo 50 caratteri');
	    }	
		var capJQ = $(cap);
		if ( $('#cap').length && (capJQ.val() != "") ) {
			if(!isNumeric(capJQ.val()))
				seleziona('cap', 'Il cap deve contenere solo numeri');
		}
		var prefTelefonoJQ = $(prefTelefono);
		if ( $('#prefTelefono').length && (prefTelefonoJQ.val() != "") ) {
			if(!isNumeric(prefTelefonoJQ.val()))
				seleziona('telefono2', 'Il telefono deve contenere solo numeri');
		}
		var telefono2JQ = $(telefono2);
		if ( $('#telefono2') && (telefono2JQ.val() != "") ){
			if(!isNumeric(telefono2JQ.val()))
				seleziona('telefono2', 'Il telefono deve contenere solo numeri');
		}
		if ($('#fisico').length && $('#streaming').length  && !$('#fisico').is(':checked') && !$('#streaming').is(':checked') ) {
			seleziona('categoria', 'Selezionare la modalita che voi seguire l&rsquo;evento ');
		}
		
		var radioYes = $('#D7_yes');
		var radioNo = $('#D7_no');
		if (radioYes.length  && radioNo.length  && !radioYes.is(':checked') && !radioNo.is(':checked')) {
			evidenzia("D7");
			
		}
		var radioYes = $('#D8_yes');
		var radioNo = $('#D8_no');
		if (radioYes.length  && radioNo.length && !radioYes.is(':checked') && !radioNo.is(':checked')) {
			evidenzia("D8");
		}
		
		
		for(var i=0; i < idsQuestions.length; i++) {
			var questionElement = $('#'+idsQuestions[i]);
			if (questionElement.length && questionElement[0].tagName.toLowerCase() == 'select') {
				if (questionElement.val() == "") {
					seleziona(idsQuestions[i], errorsQuestions[i]);
				}
			}
			else {
				var radioYes = $('#'+idsQuestions[i] + '_yes');
				var radioNo = $('#'+idsQuestions[i] + '_no');
				if (radioYes && radioNo && !radioYes.is(':checked') && !radioNo.is(':checked')) {
					seleziona(idsQuestions[i], errorsQuestions[i]);
				}
			}
		}		
	}
}

function evidenzia(field) {
	var divElement = $('#div__' + field);
	if(divElement.length) {
		divElement.addClass('error');
		mainErrore = true;
	}
}

function inviaRichiesta(formId) {
	
	mainErrore = false;
	//toglie tutti gli errori
	allinputdivs = $('#'+formId+' div');
	for (var i=0; i<allinputdivs.length; i++) {
		allinputdivs.eq(i).removeClass('error');
	}
	with (document.richiestaRegistrazione) {
		var nomeJQ = $(nome);
		if ((nomeJQ.val() == "")||(nomeJQ.val().length > 50)) {
			evidenzia('nome');
	    }
		var cognomeJQ = $(cognome);
		if ((cognomeJQ.val() == "")||(cognomeJQ.val().length > 50)) {
			evidenzia('cognome');
	    }
		if(($('#liberatoria').length && !$('#liberatoria').is(':checked')) ||!$('#liberatoria').length ){
			evidenzia('liberatoria');
		}
		
		var sex = null;
		if (($('#sesso_f')!= null)&&($('#sesso_f').is(':checked'))) {
			sex = 'F';
		}
		else if (($('#sesso_m')!= null)&&($('#sesso_m').is(':checked'))) {
			sex = 'M';
		}
		else {
			evidenzia('sesso');
	    }
		
	
		if ($('#isCliente_si').length && $('#isCliente_no').length && !$('#isCliente_no').is(':checked') && !$('#isCliente_si').is(':checked')) {
			evidenzia('isCliente');
		}
		
		if ($('#fisico').length && $('#streaming').length  && !$('#fisico').is(':checked') && !$('#streaming').is(':checked') ) {
			evidenzia('categoria');
		}
	
		
		var dataNascita = null;
		if (($('#ggNascita').length)&&($('#mmNascita').length)&&($('#annoNascita').length)){
			var ggNascitaJQ = $(ggNascita);
			var mmNascitaJQ = $(mmNascita);
			var annoNascitaJQ = $(annoNascita);
			if( !dateIsValid(ggNascitaJQ.val(), mmNascitaJQ.val(), annoNascitaJQ.val()) ) {
				evidenzia('nascita');
			}
			dataNascita = ggNascitaJQ.val() + '/' + mmNascitaJQ.val() + '/' + annoNascitaJQ.val();
		}
		var codicefiscaleJQ = $('#codicefiscale');
		if ( codicefiscaleJQ.length && codicefiscaleJQ.val() == "") {
			evidenzia('codicefiscale');
		}
		else if( codicefiscaleJQ.length && dataNascita && sex ) {
			if ( !fiscalCodeIsValid(codicefiscaleJQ.val(), cognomeJQ.val(), nomeJQ.val(), dataNascita, sex) ) {
				evidenzia('codicefiscale');
			}
		}
		var prefCellulareJQ = $(prefCellulare);
		var cellulareJQ = $(cellulare);
		if ( (prefCellulareJQ.val() == "") || 
			 (cellulareJQ.val() == "") ) {
			evidenzia('cellulare');
	    }
		else if (prefCellulareJQ.val().length < 3) {
			evidenzia('cellulare');
		}		
		else {
			if(cellulareJQ.val().length < 6)
				evidenzia('cellulare');
			if(!isNumeric(prefCellulareJQ.val()))
				evidenzia('cellulare');
			if(!isNumeric(cellulareJQ.val()))
				evidenzia('cellulare');
		}
		var emailJQ = $(email);
		if (emailJQ.val() == "") {
			evidenzia('email');
	    } else {
	    	if((!isEmail(emailJQ.val()))||(emailJQ.val().length > 50))
	    		evidenzia('email');
	    }
		var capJQ = $('#cap');
		if (capJQ.length && (capJQ.val() != "") ) {
			if(!isNumeric(capJQ.val()))
				evidenzia('cap');
		}
		var prefTelefonoJQ = $(prefTelefono);
		if (($('#prefTelefono').length)&&(prefTelefonoJQ.val() != "")) {
			if(!isNumeric(prefTelefonoJQ.val()))
				evidenzia('telefono2');
		}
		var telefono2JQ = $(telefono2);
		if (($('#telefono2').length)&&(telefono2JQ.val() != "")) {
			if(!isNumeric(telefono2JQ.val()))
				evidenzia('telefono2');
		}

		for(var i=0; i < idsQuestions.length; i++) {
			var questionElement = $('#'+idsQuestions[i]);
			if (questionElement.length && questionElement[0].tagName.toLowerCase() == 'select') {
				if (questionElement.val() == "") {
					evidenzia(idsQuestions[i]);
				}
			}
			else {
				var radioYes = $('#'+idsQuestions[i] + '_yes');
				var radioNo = $('#'+idsQuestions[i] + '_no');
				if (radioYes.length && radioNo.length && !radioYes.is(':checked') && !radioNo.is(':checked')) {
					evidenzia(idsQuestions[i]);
				}
			}
		}
	}
	if (!mainErrore) {
		// submit del form
		$('#'+formId).submit();
	} 	
}

function isNumeric(string){
    var RE = /^\d+$/;
    return (RE.test(string));
}

function isEmail(string){
	var RE = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-]{2,})+\.)+([a-zA-Z0-9]{2,})+$/;
    return (RE.test(string));
}

function dateIsValid(dd, mm, yyyy) {

	var dateIsValid = false;
	try {
		var serverDate = new Date();
		var dateToCheck = new Date();
		var month = mm - 1;
		dateToCheck.setFullYear(yyyy);
		dateToCheck.setMonth(month,dd);
		var difference = serverDate - dateToCheck;
		if ( (month == dateToCheck.getMonth()) && (difference > 0) ) {
			dateIsValid = true;
		}
	}
	catch(e) {
		dateIsValid = false;
	}
	return dateIsValid;
}

function fiscalCodeIsValid(inputFiscalCode, cognome, nome, dataNascita, sesso) {

	var fiscalCodeIsValid = false;
	try {
		inputFiscalCode = inputFiscalCode.toUpperCase();
		var firstPart = inputFiscalCode.substring(0, 11);
		var calculatedFiscalCode = calcoloCodFis(cognome, nome, dataNascita, sesso);
		fiscalCodeIsValid = (firstPart == calculatedFiscalCode);
	}
	catch(e) {
		fiscalCodeIsValid = false;
	}
	return fiscalCodeIsValid;
}	

function calcoloCodFis(cognome, nome, dataNascita, sesso) {

	cognome = cognome.toUpperCase();
	nome = nome.toUpperCase();
	ggmmaa = dataNascita.split("/");
	sesso = sesso.toUpperCase();
	//CodiceComune = CodiceComune.toUpperCase();

	//	qui costruisco il codice
	var txtCodFis = "";
    
	//	RICAVO IL COGNOME (1-3)
	var vocali = "";
	var consonanti = "";
	for (var i = 0; i < cognome.length; i++) {
		a = cognome.charAt(i);
		if (/[AEIOU]/.test(a)) {
			vocali += a;
		}
		if (/[BCDFGHJKLMNPQRSTVWXYZ]/.test(a)) {
			consonanti += a;
		}
	}
	consonanti = (consonanti + vocali + "XXX").substr(0,3);
	txtCodFis = consonanti; 
    
	//	RICAVO IL NOME (4-6)
	vocali = "";
	consonanti = "";
	for (var i = 0; i < nome.length; i++) {
		a = nome.charAt(i);
		if (/[AEIOU]/.test(a)) {
			vocali += a;
		}
		if (/[BCDFGHJKLMNPQRSTVWXYZ]/.test(a)) {
			consonanti += a;
		}
	}
	if (consonanti.length > 3) {
		//	isolo la prima, terza e quarta consonante
		consonanti = consonanti.charAt(0) + consonanti.substr(2,2);
	} 
	else {
		consonanti = (consonanti + vocali + "XXX").substr(0,3);
	}
	txtCodFis += consonanti;
    
	//	Anno di nascita (7-8)
	aa = String(10000 + parseFloat(ggmmaa[2])).substr(3);
	txtCodFis += aa;
    
	//	Mese di nascita (9)
	txtCodFis += (" ABCDEHLMPRST").charAt(ggmmaa[1]);
    
	//	Giorno di nascita e sesso (10-11)
	sesso = (sesso == "F")?140:100;
	gg = String(parseFloat(ggmmaa[0]) + sesso).substr(1);
	txtCodFis += gg;

	//controlli non attualmente possibili
	return (txtCodFis);

}

function viewServerValidation() {
	var fieldsErrors = $('#fieldsErrors');
	if ( fieldsErrors.length && (fieldsErrors.val().length > 0) ) {
		var fieldsErrorsArray = fieldsErrors.val().split(':');
		for (var index = 0; index < fieldsErrorsArray.length; index++) {
			var fieldId = fieldsErrorsArray[index];
			var divElement = $('#div__' + fieldId);
			if(divElement != null)
				divElement.addClass('error');
		}
	}
}

function seleziona(nameFld,errFld) {
	addValidationError(nameFld+"_td",errFld);
	if (mainErrore == true) {
		$('#errorsSection').css('display', 'block');
	}
	mainErrore = true;
}

function updateComuni(idDiv, provObj, nameSelect, idSelect, fraz, label) {
	updateComuni(idDiv, provObj, nameSelect, idSelect, fraz, label, null, null);
}

function updateComuni(idDiv, provObj, nameSelect, idSelect, fraz, label, selValue) {
	updateComuni(idDiv, provObj, nameSelect, idSelect, fraz, label, selValue, null);
}

function updateComuni(idDiv, provObj, nameSelect, idSelect, fraz, label, selValue, style) {
	provObj = $(provObj);
	if (provObj.prop('selectedIndex') == 0) {
		$('#'+idSelect).prop('selectedIndex', 0);
		$('#'+idSelect).attr('disabled', 'disabled');
	}
	else {
		$('#'+idSelect).removeAttr('disabled');
		prov = provObj.val();
		var div_id=idDiv;
		var url='/wb/ajax/comuni.jsp';
		var params='provincia=' + prov + '&idSelect='+idSelect+'&nameSelect='+nameSelect+'&frazioni='+fraz+'&label='+label;
		if(selValue != null)
			params = params + '&selValue=' + selValue;
		if(style != null)
			params = params + '&style=' + style;
		var wait_html='<p style=\"color:#666666; padding:6px\">Richiesta in corso...</p>';
		sendRequest(div_id, url, params, null, wait_html);
	}
}

function updateComuniPriv(idDiv, prov, nameSelect, idSelect, fraz, label, selValue) {
	
	var div_id = idDiv;
	var url = '/wbOnetoone/wbblack/ajax/comuni.jsp';
	var params = 'provincia=' + prov + '&idSelect=' + idSelect + '&nameSelect=' + nameSelect + '&frazioni=' + fraz + '&label=' + label + '&selValue=' + selValue;
	var wait_html = '<p style=\"color:#666666; padding:6px\">Richiesta in corso...</p>';
	sendRequest(div_id, url, params, null, wait_html);
	if ($('#'+idSelect).length) {
		if (prov != "") {
			$('#'+idSelect).attr('disabled', '');
		}
		else {
			$('#'+idSelect).attr('disabled', 'disabled');
		}
	}
}

function mySpostaFocus(obj, next, e) {
	var keys = [8, 9, 16, 17, 18, 19, 20, 27, 33, 34, 35, 36, 37, 38, 39, 40, 45, 46, 144, 145];
	keys = $(keys);
	e = $.event.fix(e);
	var objJQ = $(obj);
	var nextJQ = $(next);
	if($.inArray(e.which, keys) == -1 && objJQ.val().length==objJQ.attr('maxlength')){
		nextJQ.trigger('focus');
	}
} 

function clearDateField(field) {
	field = $(field);
	if (isNaN(field.val())) {
		field.val('');
	}
}