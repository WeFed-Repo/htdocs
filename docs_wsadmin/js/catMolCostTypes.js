var ICON_SPACE_ODD = "/img/icon_space_odd.gif";
var ICON_SPACE_EVEN = "/img/icon_space_even.gif";
var JSP_PREFACE = "/wetools/bankingadmin/";
var TIP_COST_ARRAY = ['Fisso', 'A percentuale', 'A scaglione'];
var PRES_PERC_ARRAY = ['no', 'si_fisso', 'si_scaglione'];
var PRES_PERC_LABEL_ARRAY = ['No', 'S&igrave; (fissa)', 'S&igrave; (a scaglione)'];

String.prototype.replaceAll = function(pcFrom, pcTo) {

	var i = this.indexOf(pcFrom);
	var c = this;
	while (i > -1) {
		c = c.replace(pcFrom, pcTo);
		i = c.indexOf(pcFrom);
	}
	return c;
}

function isInternetExplorer() {
	  
	if (document.all) {
		return true;
	}
	else {
	    return false;
	}
}

function globalSetAttr(isIE, field, attributeName, attributeValue) {
	
	field = $(field);
	field.attr(attributeName, attributeValue);
}

function globalGetAttr(isIE, field, attributeName) {
	
	field = $(field);
	return field.attr(attributeName);
}

function changeTab(index, size) {

	$('#selectedTab').val('' + index);
	for (var i = 1; i <= size; i++) {
		var liElement = $('#li_'+i);
		var divElement = $('#view_'+i);
		if (i == index) {
			liElement.attr('class', 'formTabOn');
			divElement.css({display: 'block'});
		}
		else {
			liElement.attr('class', 'formTabOff');
			divElement.css({display: 'none'});
	    }
    }
}

function copyRow(field, index) {
	
	if (field == 'CF') {
		$('#Codice_CF').val($('#code_cf_' + index).val());
		$('#Valore_Costo_CF').val($('#cost_cf_' + index).val());
	}
	else if (field == 'CP') {
		$('#Codice_CP').val($('#code_cp_' + index).val());
		$('#Valore_Perc_CP').val($('#val_perc_cp_' + index).val());
	}
	else if (field == 'CS') {
		$('#Codice_CS').val($('#code_cs_' + index).val());
		$('#Presenza_Perc_CS').val($('#pres_perc_cs_' + index).val());
		$('#Valore_Perc_CS').val($('#val_perc_cs_' + index).val());
		if ($('#val_perc_cs_' + index).is('[disabled]')) {
			$('#Valore_Perc_CS').attr('readonly', 'readonly');
		}
		$('#Numero_Range_CS').val($('#num_range_cs_' + index).val());
	}
}

function copyIndiceRow(nomeTasso,nomeIndice,tipoIndice,idIndice,valoreIndice) {
	
	$('#Nome_tasso').val(nomeTasso);
	$('#Nome_indice').val(nomeIndice);
	$('#Tipo_indice').prop('selectedIndex', tipoIndice);		
	$('#Id_indice').val(idIndice);
	$('#Valore_indice').val(valoreIndice);
	
}

function clearFields(field) {

	$('#Update_'+field).val('Aggiungi');
	if (field == 'CF') {
		$('#Codice_CF').val('');
		$('#Valore_Costo_CF').val('');
	}
	else if (field == 'CP') {
		$('#Codice_CP').val('');
		$('#Valore_Perc_CP').val('');
	}
	else if (field == 'CS') {
		$('#Codice_CS').val('');
		$('#Presenza_Perc_CS').val('');
		$('#Valore_Perc_CS').val('');
		$('#Numero_Range_CS').val('');
	}
}		

function checkFields(field) {

	var resultMessage = '';
	var resultEmptyMessage = 'Tutti i campi devono essere valorizzati';
	var maxlength = '1000';
	var noFunction = 'javascript:;';
	var tinyFunc = 'tinyPopup(this.id);';
	var isIE = isInternetExplorer();
	var selectMessage = 'seleziona per la rimozione';
	if (field == 'CF') {
		var codice = $('#Codice_CF');
		var valore = $('#Valore_Costo_CF');
		if (codice.val() != '' && valore.val() != '') {
			resultMessage = checkFieldIntegrity(field);
		}
		else {
			resultMessage = resultEmptyMessage;
		}
		if (resultMessage == '') {		
			var bodyCF = $('#body_CF');
			var CFSize = $('#CFSize');
			var tableSize = parseInt(CFSize.val());
			var trClass = ((tableSize % 2) == 0) ? 'listOdd' : 'listEven';
			var icon_space = ((tableSize % 2) == 0) ? ICON_SPACE_ODD : ICON_SPACE_EVEN;
			
			var row = $('<tr class="'+trClass+'"></tr>');
			
			var cellCode = $('<td></td>');
			var inputNodeCodeId = 'code_cf_' + tableSize;
			var inputNodeCode = $('<input type="text" id="'+inputNodeCodeId+'" name="'+inputNodeCodeId+'" value="'+codice.val()+'" style="width:60px;" />');
			cellCode.append(inputNodeCode);
			row.append(cellCode);
			
			var cellType = $('<td style="display:none;"></td>');
			var inputNodeTypeId = 'type_cf_' + tableSize;
			var inputNodeType = $('<input type="text" id="'+inputNodeTypeId+'" name="'+inputNodeTypeId+'" value="' + TIP_COST_ARRAY[0] + '" readonly="readonly" />');
			cellType.append(inputNodeType);
			row.append(cellType);	
			
			var cellPP = $('<td style="display:none;"></td>');
			var inputNodePPId = 'pres_perc_cf_' + tableSize;
			var inputNodePP = $('<input type="text" id="'+inputNodePPId+'" name="'+inputNodePPId+'" value="No" readonly="readonly" />');
			cellPP.append(inputNodePP);
			row.append(cellPP);	

			var cellValue = $('<td></td>');
			var inputNodeValueId = 'cost_cf_' + tableSize;
			var inputNodeValue = $('<input type="text" id="'+inputNodeValueId+'" name="'+inputNodeValueId+'" value="'+valore.val()+'" />');
			cellValue.append(inputNodeValue);
			row.append(cellValue);
			
			var cellAction = $('<td></td>');
			var funcDupToCall = "copyRow('CF'," + tableSize + ");";
			var cellAAction = $('<a href="'+noFunction+'" onclick="'+funcDupToCall+'"></a>');
			var cellImgDupAction = $('<img src="/img/icon_copy.gif" title="duplica riga" border="1" class="actionIcon" />');
			cellAAction.append(cellImgDupAction);
			cellAction.append(cellAAction);
			var cellImgSpace = $('<img src="'+icon_space+'" border="0" class="actionIcon" />');
			cellAction.append(cellImgSpace);
			var funcDelToCall = "addToDeleteList('cf'," + tableSize + ",'');";
			var cellDelAction = $('<a id="cf_icon_'+tableSize+'" href="'+noFunction+'" onclick="'+funcDelToCall+'"></a>');
			var cellImgDelAction = $('<img src="/img/icon_delete.gif" title="'+selectMessage+'" border="1" class="actionIcon" />');
			cellDelAction.append(cellImgDelAction);
			cellAction.append(cellDelAction);			
			row.append(cellAction);
			
			bodyCF.append(row);
			CFSize.val((tableSize + 1) + '');
		}
	}
	else if (field == 'CP') {
		var codice = $('#Codice_CP');
		var valore = $('#Valore_Perc_CP');
		if (codice.val() != '' && valore.val() != '') {
			resultMessage = checkFieldIntegrity(field);
		}
		else {
			resultMessage = resultEmptyMessage;
		}
		if (resultMessage == '') {
			var bodyCP = $('#body_CP');
			var CPSize = $('#CPSize');
			var tableSize = parseInt(CPSize.val());
			var trClass = ((tableSize % 2) == 0) ? 'listOdd' : 'listEven';
			var icon_space = ((tableSize % 2) == 0) ? ICON_SPACE_ODD : ICON_SPACE_EVEN;
			
			var row = $('<tr class="'+trClass+'"></tr>');
			
			var cellCode = $('<td></td>');
			var inputNodeCodeId = 'code_cp_' + tableSize;
			var inputNodeCode = $('<input type="text" id="'+inputNodeCodeId+'" name="'+inputNodeCodeId+'" value="'+codice.val()+'" style="width:60px;" />');
			cellCode.append(inputNodeCode);
			row.append(cellCode);
			
			var cellType = $('<td style="display:none;"></td>');
			var inputNodeTypeId = 'type_cp_' + tableSize;
			var inputNodeType = $('<input type="text" id="'+inputNodeTypeId+'" name="'+inputNodeTypeId+'" value="'+TIP_COST_ARRAY[1]+'" readonly="readonly" />');
			cellType.append(inputNodeType);
			row.append(cellType);	

			var cellPP = $('<td style="display:none;"></td>');
			var inputNodePPId = 'pres_perc_cp_' + tableSize;
			var inputNodePP = $('<input type="text" id="'+inputNodePPId+'" name="'+inputNodePPId+'" value="'+PRES_PERC_LABEL_ARRAY[1]+'" readonly="readonly" />');
			cellPP.append(inputNodePP);
			row.append(cellPP);
			
			var cellValue = $('<td></td>');
			var inputNodeValueId = 'val_perc_cp_' + tableSize;
			var inputNodeValue = $('<input type="text" id="'+inputNodeValueId+'" name="'+inputNodeValueId+'" value="'+valore.val()+'" />');
			cellValue.append(inputNodeValue);
			row.append(cellValue);

			var cellAction = $('<td></td>');
			var funcDupToCall = "copyRow('CP'," + tableSize + ");";
			var cellAAction = $('<a href="'+noFunction+'" onclick="'+funcDupToCall+'"></a>');
			var cellImgDupAction = $('<img src="/img/icon_copy.gif" title="duplica riga" border="1" class="actionIcon" />');
			cellAAction.append(cellImgDupAction);
			cellAction.append(cellAAction);
			var cellImgSpace = $('<img src="'+icon_space+'" border="0" class="actionIcon" />');
			cellAction.append(cellImgSpace);
			var funcDelToCall = "addToDeleteList('cp'," + tableSize + ",'');";
			var cellDelAction = $('<a id="cp_icon_'+tableSize+'" href="'+noFunction+'" onclick="'+funcDelToCall+'"></a>');
			var cellImgDelAction = $('<img src="/img/icon_delete.gif" title="'+selectMessage+'" border="1" class="actionIcon" />');
			cellDelAction.append(cellImgDelAction);
			cellAction.append(cellDelAction);			
			row.append(cellAction);			
			
			bodyCP.append(row);
			CPSize.val((tableSize + 1) + '');
		}		
	}
	else if (field == 'CS') {
		var codice = $('#Codice_CS');
		var type = $('#Tipologia_CS');
		var presPerc = $('#Presenza_Perc_CS');
		var valPerc = $('#Valore_Perc_CS');
		var numeroRange = $('#Numero_Range_CS');
		var nrVal = parseInt(numeroRange.val());
		var presPercValue = $('#Presenza_Perc_CS').val();
		var CSSize = $('#CSSize');
		var tableSize = parseInt(CSSize.val());
		var result = (codice.val() != '' && type.val() != '' && presPercValue != '' && numeroRange.val() != '');
		if (result && presPercValue == PRES_PERC_ARRAY[1]) {
			result = (valPerc.val() != '');
		}
		if (result) {	
			resultMessage = checkFieldIntegrity(field);
		}
		else {
			resultMessage = resultEmptyMessage;
		}
		if (resultMessage == '') {
			var bodyCS = $('#body_CS');
			var trClass = ((tableSize % 2) == 0) ? 'listOdd' : 'listEven';
			var icon_space = ((tableSize % 2) == 0) ? ICON_SPACE_ODD : ICON_SPACE_EVEN;

			var row = $('<tr id="tr_cs_' + tableSize + '_0" class="'+trClass+'"></tr>');
				
			var cellCode = $('<td id="td_code_cs_'+tableSize+'" rowspan="'+nrVal+'"></td>');
			var inputNodeCodeId = 'code_cs_' + tableSize;
			var inputNodeCode = $('<input type="text" id="'+inputNodeCodeId+'" name="'+inputNodeCodeId+'" value="'+codice.val()+'" style="width:60px;" />');
			cellCode.append(inputNodeCode);
			row.append(cellCode);

			var cellType = $('<td style="display:none;" id="td_type_cs_'+tableSize+'" rowspan="'+nrVal+'"></td>');
			var inputNodeTypeId = 'type_cs_' + tableSize;
			var inputNodeType = $('<input type="text" id="'+inputNodeTypeId+'" name="'+inputNodeTypeId+'" value="'+type.val()+'" style="width:70px;" readonly="readonly" />');
			cellType.append(inputNodeType);
			row.append(cellType);	
			
			var cellPP = $('<td id="td_pres_perc_cs_'+tableSize+'" rowspan="'+nrVal+'"></td>');
			var selectNodePPId = 'pres_perc_cs_' + tableSize;
			var selectNodePP = $('<select id="'+selectNodePPId+'" name="'+selectNodePPId+'" ></select>');
			selectNodePP.append($('<option value="'+PRES_PERC_ARRAY[0]+'"></option>').html(PRES_PERC_LABEL_ARRAY[0]));
			selectNodePP.append($('<option value="'+PRES_PERC_ARRAY[1]+'"></option>').html(PRES_PERC_LABEL_ARRAY[1]));
			selectNodePP.append($('<option value="'+PRES_PERC_ARRAY[2]+'"></option>').html(PRES_PERC_LABEL_ARRAY[2]));
			selectNodePP.val(presPercValue);
			selectNodePP.change(function() {
				changeCSView(tableSize);
			});
			cellPP.append(selectNodePP);
			row.append(cellPP);		
	
			var cellPercValue = $('<td id="td_val_perc_cs_'+tableSize+'" rowspan="'+nrVal+'"></td>');
			var inputNodePercValueId = 'val_perc_cs_' + tableSize;
			var inputNodePercValue = $('<input type="text" id="'+inputNodePercValueId+'" name="'+inputNodePercValueId+'" value="'+valPerc.val()+'" style="width:100px;" />');
			cellPercValue.append(inputNodePercValue);
			row.append(cellPercValue);
			
			var numRange = $('<td id="td_num_range_cs_'+tableSize+'" rowspan="'+nrVal+'"></td>');
			var inputNodeNumRangeId = 'num_range_cs_' + tableSize;
			var inputNodeNumRange = $('<input type="text" id="'+inputNodeNumRangeId+'" name="'+inputNodeNumRangeId+'" value="'+numeroRange.val()+'" style="width:70px;" readonly="readonly" />');
			numRange.append(inputNodeNumRange);
			row.append(numRange);					
			
			for (var index=0; index < nrVal; index++) {
				
				if (index > 0) {
					row = $('<tr id="tr_cs_' + tableSize + '_' + index + '" class="'+trClass+'"></tr>');
				}
			
				addSemiRow(row, tableSize, index, noFunction, selectMessage, icon_space);

				bodyCS.append(row);
			}
			CSSize.val((tableSize + 1) + '');
			changeCSView(tableSize);
		}		
	}	
	if (resultMessage.length == 0) {
		clearFields(field);
	}
	else {
		alert(resultMessage);
	}
}

function addSemiRow(row, tableSize, index, noFunction, selectMessage, icon_space) {
	
	var minImp = $('<td></td>');
	var inputNodeMinImpId = 'min_imp_cs_' + tableSize + '_' + index;
	var inputNodeMinImp = $('<input type="text" id="'+inputNodeMinImpId+'" name="'+inputNodeMinImpId+'" style="width:100px;" />');
	minImp.append(inputNodeMinImp);
	row.append(minImp);
	
	var maxImp = $('<td></td>');
	var inputNodeMaxImpId = 'max_imp_cs_' + tableSize + '_' + index;
	var inputNodeMaxImp = $('<input type="text" id="'+inputNodeMaxImpId+'" name="'+inputNodeMaxImpId+'" style="width:100px;" />');
	maxImp.append(inputNodeMaxImp);
	row.append(maxImp);	

	var percScag = $('<td></td>');
	var inputNodePercScagId = 'perc_scag_cs_' + tableSize + '_' + index;
	var inputNodePercScag = $('<input type="text" id="'+inputNodePercScagId+'" name="'+inputNodePercScagId+'" style="width:65px;" />');
	percScag.append(inputNodePercScag);
	row.append(percScag);

	var valoreCosto = $('<td></td>');
	var inputNodeValCostId = 'cost_cs_' + tableSize + '_' + index;
	var inputNodeValCost = $('<input type="text" id="'+inputNodeValCostId+'" name="'+inputNodeValCostId+'" style="width:65px;" />');
	valoreCosto.append(inputNodeValCost);
	row.append(valoreCosto);

	var cellAction = $('<td></td>');
	var funcDupToCall = "copyRow('CS','" + tableSize + "');";
	var cellAAction = $('<a href="'+noFunction+'" onclick="'+funcDupToCall+'"></a>');
	var cellImgDupAction = $('<img src="/img/icon_copy.gif" title="duplica riga" border="1" class="actionIcon" />');
	cellAAction.append(cellImgDupAction);
	cellAction.append(cellAAction);
	var cellImgSpace = $('<img src="'+icon_space+'" border="0" class="actionIcon" />');
	cellAction.append(cellImgSpace);
	var funcDelToCall = "addToDeleteList('cs','" + tableSize + '_' + index + "','');";
	var cellDelAction = $('<a id="cs_icon_'+tableSize+'_'+index+'" href="'+noFunction+'" onclick="'+funcDelToCall+'"></a>');
	var cellImgDelAction = $('<img src="/img/icon_delete.gif" title="'+selectMessage+'" border="1" class="actionIcon" />');
	cellDelAction.append(cellImgDelAction);
	cellAction.append(cellDelAction);	
	var cellImgBisSpace = $('<img src="'+icon_space+'" border="0" class="actionIcon" />');
	cellAction.append(cellImgBisSpace);
	var funcAddToCall = "addRowToList("+tableSize+",'"+noFunction+"','"+selectMessage+"','"+icon_space+"');";
	var cellAddAction = $('<a id="cs_iconadd_'+tableSize+'_'+index+'" href="'+noFunction+'" onclick="'+funcAddToCall+'"></a>');
	var cellImgAddAction = $('<img src="/img/icon_add.gif" title="Aggiungi riga" border="1" class="actionIcon" />');
	cellAddAction.append(cellImgAddAction);
	cellAction.append(cellAddAction);
	row.append(cellAction);
}

function addRowToList(index, noFunction, selectMessage, icon_space) {
	
	var td_code = $('#td_code_cs_'+index);
	var td_type = $('#td_type_cs_'+index);
	var td_pp = $('#td_pres_perc_cs_'+index);
	var td_vp = $('#td_val_perc_cs_'+index);
	var td_nr = $('#td_num_range_cs_'+index);
	var numRange = $('#num_range_cs_'+index);
	var currentIndex = parseInt(numRange.val());
	var lastIndex = currentIndex - 1;
	var nextIndex = currentIndex + 1;
	var newRowSpan = nextIndex + '';
	var lastRow = $('#tr_cs_'+index+'_'+lastIndex);
	var trClass = ((index % 2) == 0) ? 'listOdd' : 'listEven';
	var row = $('<tr id="tr_cs_' + index + '_' + currentIndex + '" class="'+trClass+'"></tr>');
	addSemiRow(row, index, currentIndex, noFunction, selectMessage, icon_space);
	td_code.attr('rowspan', newRowSpan);
	td_type.attr('rowspan', newRowSpan);
	td_pp.attr('rowspan', newRowSpan);
	td_vp.attr('rowspan', newRowSpan);
	td_nr.attr('rowspan', newRowSpan);
	numRange.val(newRowSpan);
	row.insertAfter(lastRow);
	changeCSView(index);
}

function changeCSView(tableSize) {
	
	var value = $('#pres_perc_cs_'+tableSize).val();
	var numRange = parseInt($('#num_range_cs_'+tableSize).val());
	if (value == PRES_PERC_ARRAY[0]) {
		$('#val_perc_cs_' + tableSize).attr('disabled', 'disabled');
		for (var index = 0; index < numRange; index++) {
			$('#perc_scag_cs_' + tableSize + '_' + index).attr('disabled', 'disabled');
			$('#cost_cs_' + tableSize + '_' + index).removeAttr('disabled');
		}
	}
	else if (value == PRES_PERC_ARRAY[1]) {
		$('#val_perc_cs_' + tableSize).removeAttr('disabled');
		for (var index = 0; index < numRange; index++) {
			$('#perc_scag_cs_' + tableSize + '_' + index).attr('disabled', 'disabled');
			$('#cost_cs_' + tableSize + '_' + index).attr('disabled', 'disabled');
		}
	}
	else if (value == PRES_PERC_ARRAY[2]) {
		$('#val_perc_cs_' + tableSize).attr('disabled', 'disabled');
		for (var index = 0; index < numRange; index++) {
			$('#perc_scag_cs_' + tableSize + '_' + index).removeAttr('disabled');
			$('#cost_cs_' + tableSize + '_' + index).attr('disabled', 'disabled');
		}
	}
}

function checkFieldIntegrity(field) {
	
	var resultMessage = '';
	if (field == 'CF') {
		if (isNotANumber($('#Valore_Costo_CF').val())) {
			resultMessage = 'Il campo "Valore costo" deve essere numerico';
		}
	}
	else if (field == 'CP') {
		if (isNotANumber($('#Valore_Perc_CP').val())) {
			resultMessage = 'Il campo "Valore % su importo" deve essere numerico';
		}
	}
	else if (field == 'CS') {
		if (isNotANumber($('#Valore_Perc_CS').val())) {
			resultMessage = 'Il campo "Valore % su importo" deve essere numerico';
		}
		else if (isNotANumber($('#Numero_Range_CS').val())) {
			resultMessage = 'Il campo "Numero range" deve essere numerico';
		}
	}
	return resultMessage;
}

function isNotANumber(value) {
	
	value = value.replace('.', '').replaceAll(',', '.');
	return isNaN(value);
}

function changeVIView(value) {
	
	var viField = $('#Valore_Perc_CS');
	if (value == PRES_PERC_ARRAY[0] || value == PRES_PERC_ARRAY[2]) {
		viField.val('');
		viField.attr('readonly', 'readonly');
	}
	else {
		viField.removeAttr('readonly');
	}
}

function controlla_estensione(fieldId,ext) {

	var field = $('$'+fieldId);
	try {
		var fieldValue = field.va();
		var extArray = ext.split(',');
		var i = 0;
		for (; i < extArray.length; i++) {
			if (fieldValue.endsWith(extArray[i])) {
				i = extArray.length + 1;
		    } 
		}  
		if (i == extArray.length) {
			alert("Il file deve avere estensione " + ext);
				field.val('');
		}
	}
	catch(e) {
			alert("Errore in catMolAttributes - metodo controlla_estensione - fieldId: " + fieldId + ", ext: " + ext);
	}
} 

function getRowPosition(tabella, nome, prec) {
	
	tabella = $(tabella);
	var matchId = 'tr_' + nome + '_' + prec;
	var allTr = tabella.find('tr');
	var rowLength = allTr.length;

	var position = 1;
	for (index=1;index<rowLength;index++) {
		var currRow = allTr.eq(index);
		if (currRow.attr('id') == matchId) {
			position = index;
			index = rowLength;
		}
	}
	return position;
}

function openPopup(index) {

	url = JSP_PREFACE + "jsp/catalogoMol/polizzePopup.jsp?index="+index;
	try {
		window.open(url,'padre','width=400,height=500,scrollbars=yes');
	}
	catch(e) {
		alert(e.message);
	}
}

function addToDeleteList(preface, index, addString) {
	
	var fieldName = preface + "_icon_" + addString + index;
	var matchString = addString + index + "-";
	var icon = $('#'+fieldName);
	var fieldListName = preface + "DeletedList";
	var fieldList = $('#'+fieldListName);
	var fieldListValue = fieldList.val();
	var firstStep = fieldListValue.indexOf(matchString);
	if (firstStep == -1) {
		fieldList.val((fieldListValue + matchString));
		icon.html('<img class="actionIcon" src="/img/icon_undelete.gif" title="deseleziona per la rimozione" border="1" >');
	}
	else {
		var secondStep = firstStep + matchString.length;
		var thirdStep = fieldListValue.length;
		fieldList.val(fieldListValue.substring(0, firstStep) + fieldListValue.substring(secondStep, thirdStep));
		icon.html('<img class="actionIcon" src="/img/icon_delete.gif" title="seleziona per la rimozione" border="1" >');
	}
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

function sendAlert(field) {
	
	alert("Il campo " + field + " non \u00E9 editabile in fase di modifica");
}

String.prototype.endsWith = function(str) {
	return (this.match(str+"$")==str)
}

function setAsNoAction() {
	$('action').value = 'noAction';
}

function checkAllPageFields(formId) {
	
	var cfResults = '', cpResults = '', csResults = '';
	
	var codePreface = 'code_cf_', index = 0, allCodes = '';
	var deleteList = $('#cfDeletedList').val();
	while ($('#'+codePreface+index).length > 0) {
		var code = $('#'+codePreface+index).val();
		var delFlag = index + '-';
		if (deleteList.indexOf(delFlag) == -1) {
			if (code == '') {
				cfResults += 'em';
			}
			else {
				if (allCodes.indexOf(code + ';') > -1) {
					cfResults += 'cd';
				}
				allCodes += (code + ';');
			}
			cfResults += checkAsNumericField($('#cost_cf_'+index).val());
		}
		index++;
	}
	
	codePreface = 'code_cp_';
	deleteList = $('#cpDeletedList').val();
	index = 0;
	allCodes = '';
	while ($('#'+codePreface+index).length > 0) {
		var code = $('#'+codePreface+index).val();
		var delFlag = index + '-';
		if (deleteList.indexOf(delFlag) == -1) {
			if (code == '') {
				cpResults += 'em';
			}
			else {
				if (allCodes.indexOf(code + ';') > -1) {
					cpResults += 'cd';
				}
				allCodes += (code + ';');
			}
			cpResults += checkAsNumericField($('#val_perc_cp_'+index).val());
		}
		index++;
	}	
	
	codePreface = 'code_cs_';
	deleteList = $('#csDeletedList').val();
	index = 0;
	allCodes = '';
	while ($('#'+codePreface+index).length > 0) {
		var code = $('#'+codePreface+index).val();
		if (code == '') {
			csResults += 'em';
		}
		else {
			if (allCodes.indexOf(code + ';') > -1) {
				csResults += 'cd';
			}
			allCodes += (code + ';');
		}
		var presPerc = $('#pres_perc_cs_'+index).val();
		if (presPerc == PRES_PERC_ARRAY[1]) {
			csResults += checkAsNumericField($('#val_perc_cs_'+index).val());
		}
		var groupSize = parseInt($('#num_range_cs_'+index).val());
		for (var subIndex=0; subIndex < groupSize; subIndex++) {
			var delFlag = index + '_' + subIndex + '-';
			if (deleteList.indexOf(delFlag) == -1) {
				csResults += checkAsNumericField($('#min_imp_cs_'+index+'_'+subIndex).val());
				csResults += checkAsNumericField($('#max_imp_cs_'+index+'_'+subIndex).val());
				if (presPerc == PRES_PERC_ARRAY[0]) {
					csResults += checkAsNumericField($('#cost_cs_'+index+'_'+subIndex).val());
				}
				else if (presPerc == PRES_PERC_ARRAY[2]) {
					csResults += checkAsNumericField($('#perc_scag_cs_'+index+'_'+subIndex).val());
				}
			}
		}
		index++;
	}	
	
	var message = addMessage(cfResults, 'Costi fissi');
	message += addMessage(cpResults, 'Costi a percentuale');
	message += addMessage(csResults, 'Costi a scaglione');
	
	if (message.length > 0) {
		alert(message);
	}
	else {
		$('#'+formId).submit();
	}
}

function checkAsNumericField(field) {
	
	var results = '';
	if (field == '') {
		results += 'em';
	}
	else {
		field = field.replaceAll('.', '').replaceAll(',', '.');
		if (isNaN(field)) {
			results += 'nm';
		}
	}
	return results;
}

function addMessage(result, field) {
	
	var message = '';
	var emptyMessage = 'Uno o pi\u00F9 campi non sono valorizzati.\r\n';
	var numericMessage = 'Uno o pi\u00F9 campi non sono nel corretto formato numerico.\r\n';
	var codeDuplicatedMessage = 'Uno o pi\u00F9 campi codice sono duplicati.\r\n';
	if (result.length > 0) {
		message += 'Tab "' + field + '":\r\n';
		if (result.indexOf('em') > -1) {
			message += emptyMessage;
		}
		if (result.indexOf('nm') > -1) {
			message += numericMessage;
		}
		if (result.indexOf('cd') > -1) {
			message += codeDuplicatedMessage;
		}		
		message += '\r\n';
	}
	return message;
}