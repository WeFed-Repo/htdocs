var sel = new Array();
newsel = new Array();
emptysel = new Array();
var globalFlag = false;
var JSP_PREFACE = "/wetools/bankingadmin/";

function memMulti(ss) {
	
	ss = $(ss);
	var options = ss.find('option');
	newsel = $('<select></select>');
	for (var i = 0; i < options.length; i++) {
		if(allTr.eq(i).attr('selected') == 'selected') {
			newsel[newsel.length] = i;
		}
	}
	if (sel.length == 1 && newsel.length == 1 && newsel[0] == sel[0]) {
		ss.options[newsel[0]].selected = false;
		sel.length = 0;
	} 
	else {
		sel = newsel.concat(emptysel);
	}
}
function selMulti(ss) {
	
	var ultimo = 'nessuno';
	for (var i = 0; i < ss.options.length; i++) {
		if(ss.options[i].selected) {
			ultimo = i;
		}
	}
	for (i = 0; i < ss.options.length; i++) {
		ss.options[i].selected = false;
	}
	for (i = 0; i< sel.length; i++) {
		ss.options[sel[i]].selected = true;
	}
	if (ultimo != 'nessuno') {
		ss.options[ultimo].selected = !ss.options[ultimo].selected;
	}
}

function controlla_estensione(fieldId,ext) {

	var field = $('#'+fieldId);
	try {
		var fieldvalue = field.val();
		var extArray = ext.split(",");
		var i = 0;
		for (; i < extArray.length; i++) {
			if (fieldvalue.endsWith(extArray[i])) {
				i = extArray.length + 1;
		    } 
		}  
		if (i == extArray.length) {
			alert("Il file deve avere estensione " + ext);
				field.val('');
		}
	}
	catch(e) {
			alert("Errore in catMolProducts - metodo controlla_estensione - fieldId: " + fieldId + ", ext: " + ext);
	}
} 

function opendownload(name, url)  {
	
	docwin = window.open(url, name, 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width=560,height=600');
	docwin.focus();
}

function verifyDim(field, fieldName, fieldType, dim) {
	
	var value = field.val();
	if (value.length > dim) {
		alert("Il campo '" + fieldName + "' si estende su un massimo di " + dim + " " + fieldType);
		field.val('');
	}
}

function verifySingleField(fieldName, fieldLabelName, fieldValue) {
	
	var result = false;
	if ($('#'+fieldName).val() == fieldValue) {
		$('#'+fieldLabelName).attr('class','labelError');
		result = true;
		if (globalFlag == false) {
			globalFlag = true;
			$('#'+fieldName).focus();
		}
	}
	else {
		$('#'+fieldLabelName).attr('class','label');
	}
	return result;
}

function verifyFields(form,objectToModify) {
	
	var result = false;
	globalFlag = false;
	if (objectToModify == "prodotto") {
		if (verifySingleField("codiceProdotto", "codiceProdottoLabel", "")) {
			result = true;
		}
		if (verifySingleField("nomeProdotto", "nomeProdottoLabel", "")) {
			result = true;
		}
		if (verifySingleField("sotTitProdotto", "sotTitProdottoLabel", "")) {
			result = true;
		}
		if (verifySingleField("descProdotto", "descProdottoLabel", "")) {
			result = true;
		}
		if (verifySingleField("gifProdotto", "gifProdottoLabel", "") && (($("alias_gifProdotto") == null) || verifySingleField("alias_gifProdotto", "gifProdottoLabel",  ""))) {
			result = true;
		}
		else {
			$('#gifProdottoLabel').attr('class','label');
		}
		if (verifySingleField("tipoCatalogo", "tipoCatalogoLabel", "")) {
			result = true;
		}	
		if (verifySingleField("ordineVisualizzazione", "ordineVisualizzazioneLabel", "")) {
			result = true;
		}
		if (atLeastOneRadioChecked("finalita", "finalitaLabel")) {
			result = true;
		}
		if (verifySingleField("durataMinima", "durataMinimaLabel", "")) {
			result = true;
		}		
		if (verifySingleField("durataMassima", "durataMassimaLabel", "")) {
			result = true;
		}
		if (verifySingleField("granularita", "granularitaLabel", "")) {
			result = true;
		}
		if (verifySingleField("importoMinimo", "importoMinimoLabel", "")) {
			result = true;
		}		
		if (verifySingleField("importoMassimo", "importoMassimoLabel", "")) {
			result = true;
		}
		if (atLeastOneRadioChecked("periodoRate", "periodoRateLabel")) {
			result = true;
		}
		if (verifySingleField("tipoTasso", "tipoTassoLabel", "")) {
			result = true;
		}		
		var tipoTassoValue = $("#tipoTasso").val();
		if ((tipoTassoValue.indexOf("CAP") != -1) && verifySingleField("tassoMassimoApplicabile", "tassoMassimoApplicabileLabel", "")) {
			result = true;
		}
		else {
			$("#tassoMassimoApplicabileLabel").attr('class', 'label');
		}
		if (verifySingleField("modalitaVariazioneTasso", "modalitaVariazioneTassoLabel", "")) {
			result = true;
		}
		if (atLeastOneRadioChecked("pacchettiPolizzeDisponibili", "pacchettiPolizzeDisponibiliLabel")) {
			result = true;
		} 
		if (verifySingleField("linkFi", "linkFiLabel", "")) {
			result = true;
		}
		if (verifySingleField("linkPdf", "linkPdfLabel", "") && (($("#alias_linkPdf").length == 0) || verifySingleField("alias_linkPdf", "linkPdfLabel", ""))) {
			result = true;
		}
		else {
			$("#linkPdfLabel").attr('class', 'label');
		}
	}
	else {
		if (verifySingleField("idLinea", "idLineaLabel", "")) {
			result = true;
		}
		if (verifySingleField("durataFino", "durataFinoLabel", "")) {
			result = true;
		}
		if (verifySingleField("importoFino", "importoFinoLabel", "")) {
			result = true;
		}
		if (verifySingleField("codProdFics", "codProdFicsLabel", "")) {
			result = true;
		}
		if (verifySingleField("codAccFics", "codAccFicsLabel", "")) {
			result = true;
		}
		if (verifySingleField("spreadBase", "spreadBaseLabel", "")) {
			result = true;
		}	
		if (verifySingleField("spreadFinProd", "spreadFinProdLabel", "")) {
			result = true;
		}
		if (verifySingleField("speseIstr", "speseIstrLabel", "")) {
			result = true;
		}	
		if (verifySingleField("spesePer", "spesePerLabel", "")) {
			result = true;
		}
		if (verifySingleField("speseRic", "speseRicLabel", "")) {
			result = true;
		}
		if (verifySingleField("tipoTasso", "tassoBaseLabel", "FISSO") && verifySingleField("tassoBase", "tassoBaseLabel", "")) {
			result = true;
		}		
	}
	if (result == true) {
		alert("Tutti i campi della sezione '" + objectToModify + "' devono essere valorizzati. Correggere i campi evidenziati");
	}
	else {
		form.submit();
	}
	return result;
}

function atLeastOneRadioChecked(fieldName, fieldLabelName) {
	
	var fieldSize = document.getElementsByName(fieldName).length;
	var result = true;
	for (var index = 0; index < fieldSize; index++) {
		if (document.getElementsByName(fieldName)[index].checked) {
			result = false;
			index = fieldSize;
		}
	}
	if (result) {
		$('#'+fieldLabelName).attr('class','labelError');
	}
	else {
		$('#'+fieldLabelName).attr('class','label');
	}	
	return result;
}

function updateField(changedField,matchingLabel,fieldName) {
	
	var field = $('#'+fieldName);
	if (changedField.val() == matchingLabel) {
		field.removeAttr('disabled');
	}
	else {
		field.attr('disabled', 'disabled');
	}
}

function updateScontoTotale() {
	
	var scontoTotale = $('#scontoTotale');
	var ltvValue = $('#ltv').val();
	var convValue = $('#conv').val();
	var promoValue = $('#promo').val();
	var deltaTassoValue = $('#deltaTasso').val();
	var newValue = parseFloat("0.00");
	try {
		newValue = newValue + parseFloat(ltvValue.substring(ltvValue.indexOf(":") + 1));
	}
	catch(e) {}
	try {
		newValue = newValue + parseFloat(convValue.substring(convValue.indexOf(":") + 1));
	}
	catch(e) {}
	try {
		newValue = newValue + parseFloat(promoValue.substring(promoValue.indexOf(":") + 1));
	}
	catch(e) {}	
	try {
		newValue = newValue + parseFloat(deltaTassoValue.substring(deltaTassoValue.indexOf(':') + 1));
	}
	catch(e) {}		
	scontoTotale.val(arrotonda(newValue));
	updateSpreadFinito();
}

function updateTassoBase() {
	
	var isNotFixed = $('#isNotFixed').val();
	if (isNotFixed == "true") {
		var spreadBase = $('#spreadBase').val();
		var indice = $('#indice').val();
		if ((spreadBase != '') && (indice != '') && (indice.indexOf(':') != -1)) {
			try {
				var tassoBase = $('#tassoBase');
				var valore = indice.substring(indice.indexOf(':') + 1);
				spreadBase = spreadBase.replace(',', '.');
				tassoBase.val(arrotondaSuTreCifre(parseFloat(spreadBase) + parseFloat(valore)));
			}
			catch(e) {}
		}
	}
}

function updateSpreadFinito() {
	
	var spreadBase = $('#spreadBase').val();
	var scontoTotale = $('#scontoTotale').val();
	if ((spreadBase != '') && (scontoTotale != '')) {
		try {	
			var spreadFinito = $('#spreadFinProd');
			spreadBase = spreadBase.replace(',', '.');
			spreadFinito.val(arrotonda(parseFloat(spreadBase) + parseFloat(scontoTotale)));
			updateTassoFinito();
		}
		catch(e) {}
	}
}

function updateTassoFinito() {
	
	var isNotFixed = $('#isNotFixed').val();
	if (isNotFixed == "true") {
		var spreadFinito = $('#spreadFinProd').val();
		var indice = $('#indice').val();
		if ((spreadFinito != '') && (indice != '') && (indice.indexOf(':') != -1)) {
			try {
				var tassoFinito = $('#tassoFinitoProdotto');
				var valore = indice.substring(indice.indexOf(":") + 1);
				spreadFinito = spreadFinito.replace(',', '.');
				tassoFinito.val(arrotondaSuTreCifre(parseFloat(spreadFinito) + parseFloat(valore)));
			}
			catch(e) {}
		}
	}	
}

function arrotonda(numero) { 
	
	var result = Math.round(numero*100)/100;
	var resultString = "" + result;
	var pos = resultString.indexOf(".");
	var length = resultString.length;
	if (pos == -1) {
		resultString = resultString + ".00";
	}
	else if ((length - pos) < 3) {
		for (index = 0; index < (pos + 3 - length); index++) {
			resultString = (resultString + "0");
		}
	}
	return resultString;
} 

function arrotondaSuTreCifre(numero) { 
	
	var result = Math.round(numero*1000)/1000;
	var resultString = "" + result;
	var pos = resultString.indexOf(".");
	var length = resultString.length;
	if (pos == -1) {
		resultString = resultString + ".000";
	}
	else if ((length - pos) < 4) {
		for (index = 0; index < (pos + 4 - length); index++) {
			resultString = (resultString + "0");
		}
	}
	return resultString;
} 

function tinyPopup(inputId) {
	
	var inputField = $('#'+inputId);
	url = JSP_PREFACE + "jsp/catalogoMol/tinyPopup.jsp?inputId="+inputId;
	inputField.blur();
	try {
		window.open(url,'padre','width=600,height=370,scrollbars=yes');
	}
	catch(e) {
		alert(e.message);
	}		
}

String.prototype.endsWith = function(str) {
	return (this.match(str+"$")==str)
}

function setAsNoAction() {
	$('#action').val('noAction');
}