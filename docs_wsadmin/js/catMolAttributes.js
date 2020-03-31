var ICON_SPACE_ODD = "/img/icon_space_odd.gif";
var ICON_SPACE_EVEN = "/img/icon_space_even.gif";
var JSP_PREFACE = "/wetools/bankingadmin/";

var tc_IP_Array = [], tc_AR_Array = [], vc_IP_Array = [], vc_AR_Array = [], vp_IP_Array = [], vp_AR_Array = [];

String.prototype.replaceAll = function(pcFrom, pcTo) {

	var i = this.indexOf(pcFrom);
	var c = this;
	while (i > -1) {
		c = c.replace(pcFrom, pcTo);
		i = c.indexOf(pcFrom);
	}
	return c;
}


String.prototype.trim = function() {    
    
    return this.replace(/^s+/g,'').replace(/s+$/g,'');    
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

function arrangeCostArray(inputId) {
	
	var input = $('#'+inputId).val();
	if ( (input.length > 0) && (input.charAt(0) != ';') ) {
		input = ";" + input;
	}
	var outputArray = input.split(';');
	for (var index = 0; index < outputArray.length; index++) {
		outputArray[index] = outputArray[index].trim();
	}
	return outputArray;
}

function initializeCostArrays() {
 
	tc_IP_Array = arrangeCostArray('tc_IP_Array');
	tc_AR_Array = arrangeCostArray('tc_AR_Array');
	vc_IP_Array = arrangeCostArray('vc_IP_Array');
	vc_AR_Array = arrangeCostArray('vc_AR_Array');
	vp_IP_Array = arrangeCostArray('vp_IP_Array');
	vp_AR_Array = arrangeCostArray('vp_AR_Array');
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
	
	if (field == 'LTV') {
		$('#Codice_LTV').val($('#code_ltv_' + index).val());
		$('#Nome_LTV').val($('#nome_ltv_' + index).val());
		$('#Descrizione_LTV').val($('#desc_ltv_' + index).val());
		$('#SotTit_LTV').val($('#sotTit_ltv_' + index).val());
		$('#VarTas_LTV').val($('#varTas_ltv_' + index).val());
		$('#Loan_LTV').val($('#loan_ltv_' + index).val());
	}
	else if (field == 'promo') {
		$('#Codice_promo').val($('#code_promo_' + index).val());
		$('#Nome_promo').val($('#nome_promo_' + index).val());
		$('#Descrizione_promo').val($('#desc_promo_' + index).val());
		$('#SotTit_promo').val($('#sotTit_promo_' + index).val());
		$('#VarTas_promo').val($('#varTas_promo_' + index).val());
	}
	else if (field == 'conv') {
		$('#Codice_conv').val($('#code_conv_' + index).val());
		$('#Nome_conv').val($('#nome_conv_' + index).val());
		$('#Descrizione_conv').val($('#desc_conv_' + index).val());
		$('#SotTit_conv').val($('#sotTit_conv_' + index).val());
		$('#VarTas_conv').val($('#varTas_conv_' + index).val());
		//$('#data_val_conv').val($('#data_val_conv_' + index).val());
	}
	else if (field == 'polizza') {
		$('#Codice_polizza').val($('#code_polizza_' + index).val());
		$('#Ordinamento_polizza').val($('#ordinamento_polizza_' + index).val());
		$('#Nome_polizza').val($('#nome_polizza_' + index).val());
		$('#Descrizione_polizza').val($('#desc_polizza_' + index).val());
		$('#Uso_taeg_polizza').val($('#uso_taeg_polizza_' + index).val());
		$('#Visibilita_polizza').val($('#visibilita_polizza_' + index).val());
		$('#Tipo_polizza').val($('#tipo_polizza_' + index).val());
		$('#SotTit_polizza').val($('#sotTit_polizza_' + index).val());
		$('#Costo_polizza').val($('#costo_polizza_' + index).val());
	}
	else if (field == 'delta_tasso') {
		$('#Codice_delta_tasso').val($('#code_delta_tasso_' + index).val());
		$('#Ordinamento_delta_tasso').val($('#ordinamento_delta_tasso_' + index).val());
		$('#Nome_delta_tasso').val($('#nome_delta_tasso_' + index).val());
		$('#Descrizione_delta_tasso').val($('#desc_delta_tasso_' + index).val());
		$('#SotTit_delta_tasso').val($('#sotTit_delta_tasso_' + index).val());
		$('#Combinazione_delta_tasso').val($('#combinazione_delta_tasso_' + index).val());
		$('#Valore_delta_tasso').val($('#valore_delta_tasso_' + index).val());
	}	
	else if (field == 'final') {
		$('#Codice_final').val($('#code_final_' + index).val());
		$('#Nome_final').val($('#nome_final_' + index).val());
		$('#Descrizione_final').val($('#desc_final_' + index).val());
		$('#SotTit_final').val($('#sotTit_final_' + index).val());
		$('#Valore_final').val($('#valore_final_' + index).val());
	}	
	else if (field == 'CI') {
		$('#Codice_CI').val($('#code_ci_' + index).val());
		$('#Desc_CI').val($('#desc_ci_' + index).val());
		$('#Type_CI').val($('#type_ci_' + index).val());
		$('#ImportoMinimo_CI').val($('#imp_min_ci_' + index).val());
		$('#ImportoMassimo_CI').val($('#imp_max_ci_' + index).val());
		$('#ValoreCosto_CI').val($('#val_costo_ci_' + index).val());
		$('#Valore_Perc_CI').val($('#val_perc_ci_' + index).val());
	}
	else if (field == 'CP') {
		$('#Codice_CP').val($('#code_cp_' + index).val());
		$('#Desc_CP').val($('#desc_cp_' + index).val());
		$('#Type_CP').val($('#type_cp_' + index).val());
		$('#ImportoMinimo_CP').val($('#imp_min_cp_' + index).val());
		$('#ImportoMassimo_CP').val($('#imp_max_cp_' + index).val());
		$('#ValoreCosto_CP').val($('#val_costo_cp_' + index).val());
		$('#Valore_Perc_CP').val($('#val_perc_cp_' + index).val());
	}
	else if (field == 'CR') {
		$('#Codice_CR').val($('#code_cr_' + index).val());
		$('#Desc_CR').val($('#desc_cr_' + index).val());
		$('#Type_CR').val($('#type_cr_' + index).val());
		$('#ImportoMinimo_CR').val($('#imp_min_cr_' + index).val());
		$('#ImportoMassimo_CR').val($('#imp_max_cr_' + index).val());
		$('#ValoreCosto_CR').val($('#val_costo_cr_' + index).val());
		$('#Valore_Perc_CR').val($('#val_perc_cr_' + index).val());
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
	if (field == 'LTV') {
		$('#Codice_LTV').val('');
		$('#Nome_LTV').val('');
		$('#Descrizione_LTV').val('');
		$('#SotTit_LTV').val('');
		$('#VarTas_LTV').val('');
		$('#Loan_LTV').val('');
	}
	else if (field == 'promo') {
		$('#Codice_promo').val('');
		$('#Nome_promo').val('');
		$('#Descrizione_promo').val('');
		$('#SotTit_promo').val('');
		$('#VarTas_promo').val('');
	}
	else if (field == 'conv') {
		$('#Codice_conv').val('');
		$('#Nome_conv').val('');
		$('#Descrizione_conv').val('');
		$('#SotTit_conv').val('');
		$('#VarTas_conv').val('');
		//$('#data_val_conv').val('');
	}
	else if (field == 'polizza') {
		$('#Codice_polizza').val('');
		$('#Ordinamento_polizza').val('');		
		$('#Nome_polizza').val('');
		$('#Descrizione_polizza').val('');
		$('#Uso_taeg_polizza').val('yes');
		$('#Visibilita_polizza').val('Web');
		$('#Tipo_polizza').val('1');
		$('#SotTit_polizza').val('');
		$('#Costo_polizza').val('');
	}
	else if (field == 'delta_tasso') {
		$('#Codice_delta_tasso').val('');
		$('#Ordinamento_delta_tasso').val('');		
		$('#Nome_delta_tasso').val('');
		$('#Descrizione_delta_tasso').val('');
		$('#SotTit_delta_tasso').val('');		
		$('#Combinazione_delta_tasso').val('Selezionalo sul record');
		$('#Valore_delta_tasso').val('');
	}	
	else if (field == 'indice') {
		$('#Nome_tasso').val('');
		$('#Nome_indice').val('');
		$('#Tipo_indice').prop('selectedIndex', 0);
		$('#Id_indice').val('');
		$('#Valore_indice').val('');
	}
	else if (field == 'final') {
		$('#Codice_final').val('');
		$('#Nome_final').val('');
		$('#Descrizione_final').val('');
		$('#SotTit_final').val('');
		$('#Valore_final').val('');
	}	
	else if (field == 'CI') {
		$('#Codice_CI').val('');
		$('#Desc_CI').val('');
		$('#Type_CI').val('');
		$('#ImportoMinimo_CI').val('');
		$('#ImportoMassimo_CI').val('');
		$('#ValoreCosto_CI').val('');
		$('#Valore_Perc_CI').val('');
	}
	else if (field == 'CP') {
		$('#Codice_CP').val('');
		$('#Desc_CP').val('');
		$('#Type_CP').val('');
		$('#ImportoMinimo_CP').val('');
		$('#ImportoMassimo_CP').val('');
		$('#ValoreCosto_CP').val('');
		$('#Valore_Perc_CP').val('');
	}
	else if (field == 'CR') {
		$('#Codice_CR').val('');
		$('#Desc_CR').val('');
		$('#Type_CR').val('');
		$('#ImportoMinimo_CR').val('');
		$('#ImportoMassimo_CR').val('');
		$('#ValoreCosto_CR').val('');
		$('#Valore_Perc_CR').val('');
	}	
}		

function checkFields(field) {

	var resultMessage = '';
	var resultEmptyMessage = "Tutti i campi devono essere valorizzati";
	var maxlength = '1000';
	var noFunction = 'javascript:;';
	var tinyFunc = 'tinyPopup(this.id);';
	var isIE = isInternetExplorer();
	var selectMessage = "seleziona per l'eliminazione";
	if (field == 'LTV') {
		var codice = $('#Codice_LTV');
		var nome = $('#Nome_LTV');
		var descrizione = $('#Descrizione_LTV');
		var sotTit = $('#SotTit_LTV');
		var varTas = $('#VarTas_LTV');
		var loan = $('#Loan_LTV');
		var risultato = (codice.val() != '' && nome.val() != '' && descrizione.val() != '' && sotTit.val() != '' && varTas.val() != '' && loan.val() != '');
		if (!risultato) {
			resultMessage = resultEmptyMessage;
		}
		else {
			var bodyLTV = $('#body_LTV');
			var ltvSize = $('#ltvSize');
			var tableSize = parseInt(ltvSize.val());
			var trClass = ((tableSize % 2) == 0) ? 'listOdd' : 'listEven';
			var icon_space = ((tableSize % 2) == 0) ? ICON_SPACE_ODD : ICON_SPACE_EVEN;
			
			var row = $('<tr class="'+trClass+'"></tr>');
			
			var cellCode = $('<td></td>');
			var inputNodeCodeId = 'code_ltv_' + tableSize;
			var inputNodeCode = $('<input type="text" id="'+inputNodeCodeId+'" name="'+inputNodeCodeId+'" value="'+codice.val()+'" style="width:50px;" />');
			cellCode.append(inputNodeCode);
			row.append(cellCode);
			
			var cellNome = $('<td></td>');
			var inputNodeNomeId = 'nome_ltv_' + tableSize;
			var inputNodeNome = $('<input type="text" id="'+inputNodeNomeId+'" name="'+inputNodeNomeId+'" value="'+nome.val()+'" />');
			cellNome.append(inputNodeNome);
			row.append(cellNome);	
			
			var cellDesc = $('<td></td>');
			var inputNodeDescId = 'desc_ltv_' + tableSize;
			var inputNodeDesc = $('<input type="text" readonly="readonly" maxlength="'+maxlength+'" onfocus="'+tinyFunc+'" id="'+inputNodeDescId+'" name="'+inputNodeDescId+'" value="'+descrizione.val()+'" />');
			cellDesc.append(inputNodeDesc);
			row.append(cellDesc);

			var cellSotTit = $('<td></td>');
			var inputNodeSotTitId = 'sotTit_ltv_' + tableSize;
			var inputNodeSotTit = $('<input type="text" maxlength="'+maxlength+'" id="'+inputNodeSotTitId+'" name="'+inputNodeSotTitId+'" value="'+sotTit.val()+'" />');
			cellSotTit.append(inputNodeSotTit);
			row.append(cellSotTit);

			var cellVarTas = $('<td></td>');
			var inputNodeVarTasId = 'varTas_ltv_' + tableSize;
			var inputNodeVarTas = $('<input type="text" id="'+inputNodeVarTasId+'" name="'+inputNodeVarTasId+'" value="'+varTas.val()+'" />');
			cellVarTas.append(inputNodeVarTas);
			row.append(cellVarTas);
	
			var cellLoan = $('<td></td>');
			var inputNodeLoanId = 'loan_ltv_' + tableSize;
			var inputNodeLoan = $('<input type="text" id="'+inputNodeLoanId+'" name="'+inputNodeLoanId+'" value="'+loan.val()+'" />');
			cellLoan.append(inputNodeLoan);
			row.append(cellLoan);

			
			var cellAction = $('<td></td>');
			var funcDupToCall = "copyRow('LTV'," + tableSize + ");";
			var cellAAction = $('<a href="'+noFunction+'" onclick="'+funcDupToCall+'"></a>');
			var cellImgDupAction = $('<img src="/img/icon_copy.gif" title="duplica riga" border="1" class="actionIcon" />');
			cellAAction.append(cellImgDupAction);
			cellAction.append(cellAAction);
			var cellImgSpace = $('<img src="'+icon_space+'" border="0" class="actionIcon" />');
			cellAction.append(cellImgSpace);
			var funcDelToCall = "addToDeleteList('ltv'," + tableSize + ",'');";
			var cellDelAction = $('<a id="ltv_icon_'+tableSize+'" href="'+noFunction+'" onclick="'+funcDelToCall+'"></a>');
			var cellImgDelAction = $('<img src="/img/icon_delete.gif" title="'+selectMessage+'" border="1" class="actionIcon" />');
			cellDelAction.append(cellImgDelAction);
			cellAction.append(cellDelAction);			
			row.append(cellAction);
			
			bodyLTV.append(row);
			ltvSize.val((tableSize + 1) + '');
		}
	}
	else if (field == 'promo') {
		var codice = $('#Codice_promo');
		var nome = $('#Nome_promo');
		var descrizione = $('#Descrizione_promo');
		var sotTit = $('#SotTit_promo');
		var varTas = $('#VarTas_promo');
		var risultato = (codice.val() != '' && nome.val() != '' && descrizione.val() != '' && sotTit.val() != '' && varTas.val() != '');
		if (!risultato) {
			resultMessage = resultEmptyMessage;
		}
		else {		
			var bodyPromo = $('#body_promo');
			var promoSize = $('#promoSize');
			var tableSize = parseInt(promoSize.val());
			var trClass = ((tableSize % 2) == 0) ? 'listOdd' : 'listEven';
			var icon_space = ((tableSize % 2) == 0) ? ICON_SPACE_ODD : ICON_SPACE_EVEN;
			
			var row = $('<tr class="'+trClass+'"></tr>');
			
			var cellCode = $('<td></td>');
			var inputNodeCodeId = 'code_promo_' + tableSize;
			var inputNodeCode = $('<input type="text" id="'+inputNodeCodeId+'" name="'+inputNodeCodeId+'" value="'+codice.val()+'" style="width:50px;" />');
			cellCode.append(inputNodeCode);
			row.append(cellCode);
			
			var cellNome = $('<td></td>');
			var inputNodeNomeId = 'nome_promo_' + tableSize;
			var inputNodeNome = $('<input type="text" id="'+inputNodeNomeId+'" name="'+inputNodeNomeId+'" value="'+nome.val()+'" />');
			cellNome.append(inputNodeNome);
			row.append(cellNome);

			var cellDesc = $('<td></td>');
			var inputNodeDescId = 'desc_promo_' + tableSize;
			var inputNodeDesc = $('<input type="text" readonly="readonly" maxlength="'+maxlength+'" onfocus="'+tinyFunc+'" id="'+inputNodeDescId+'" name="'+inputNodeDescId+'" value="'+descrizione.val()+'" />');
			cellDesc.append(inputNodeDesc);
			row.append(cellDesc);
			
			var cellSotTit = $('<td></td>');
			var inputNodeSotTitId = 'sotTit_promo_' + tableSize;
			var inputNodeSotTit = $('<input type="text" maxlength="'+maxlength+'" id="'+inputNodeSotTitId+'" name="'+inputNodeSotTitId+'" value="'+sotTit.val()+'" />');
			cellSotTit.append(inputNodeSotTit);
			row.append(cellSotTit);

			var cellVarTas = $('<td></td>');
			var inputNodeVarTasId = 'varTas_promo_' + tableSize;
			var inputNodeVarTas = $('<input type="text" id="'+inputNodeVarTasId+'" name="'+inputNodeVarTasId+'" value="'+varTas.val()+'" />');
			cellVarTas.append(inputNodeVarTas);
			row.append(cellVarTas);

			var cellAction = $('<td></td>');
			var funcDupToCall = "copyRow('promo'," + tableSize + ");";
			var cellAAction = $('<a href="'+noFunction+'" onclick="'+funcDupToCall+'"></a>');
			var cellImgDupAction = $('<img src="/img/icon_copy.gif" title="duplica riga" border="1" class="actionIcon" />');
			cellAAction.append(cellImgDupAction);
			cellAction.append(cellAAction);
			var cellImgSpace = $('<img src="'+icon_space+'" border="0" class="actionIcon" />');
			cellAction.append(cellImgSpace);
			var funcDelToCall = "addToDeleteList('promo'," + tableSize + ",'');";
			var cellDelAction = $('<a id="promo_icon_'+tableSize+'" href="'+noFunction+'" onclick="'+funcDelToCall+'"></a>');
			var cellImgDelAction = $('<img src="/img/icon_delete.gif" title="'+selectMessage+'" border="1" class="actionIcon" />');
			cellDelAction.append(cellImgDelAction);
			cellAction.append(cellDelAction);			
			row.append(cellAction);			
			
			bodyPromo.append(row);
			promoSize.val((tableSize + 1) + '');
		}		
	}
	else if (field == 'conv') {
		var codice = $('#Codice_conv');
		var nome = $('#Nome_conv');
		var descrizione = $('#Descrizione_conv');
		var sotTit = $('#SotTit_conv');
		var varTas = $('#VarTas_conv');
		//var dataValConv = $('#data_val_conv');
		var risultato = (codice.val() != '' && nome.val() != '' && descrizione.val() != '' && sotTit.val() != '' && varTas.val() != ''
			//&& dataValConv.val() != '' 
				);
		if (!risultato) {
			resultMessage = resultEmptyMessage;
		}
		else {		
			var bodyConv = $('#body_conv');
			var convSize = $('#convSize');
			var tableSize = parseInt(convSize.val());
			var trClass = ((tableSize % 2) == 0) ? 'listOdd' : 'listEven';
			var icon_space = ((tableSize % 2) == 0) ? ICON_SPACE_ODD : ICON_SPACE_EVEN;
			
			var row = $('<tr class="'+trClass+'"></tr>');
			
			var cellCode = $('<td></td>');
			var inputNodeCodeId = 'code_conv_' + tableSize;
			var inputNodeCode = $('<input type="text" id="'+inputNodeCodeId+'" name="'+inputNodeCodeId+'" value="'+codice.val()+'" style="width:50px;" />');
			cellCode.append(inputNodeCode);
			row.append(cellCode);

			var cellNome = $('<td></td>');
			var inputNodeNomeId = 'nome_conv_' + tableSize;
			var inputNodeNome = $('<input type="text" id="'+inputNodeNomeId+'" name="'+inputNodeNomeId+'" value="'+nome.val()+'" />');
			cellNome.append(inputNodeNome);
			row.append(cellNome);	
			
			/*var cellData = $('<td></td>');
			var inputNodeDataId = 'data_val_conv_' + tableSize;
			var inputNodeData = $('<input type="text" class="withIco" id="'+inputNodeDataId+'" name="'+inputNodeDataId+'" value="'+dataValConv.val()+'" />');
			cellData.append(inputNodeData);
			row.append(cellData);	
			
			inputNodeData.datepicker({
				showOn: "button",
				buttonImage: "/img/btn_pickdate_priv.gif",
				buttonImageOnly: true,
				minDate: 1,
				maxDate: "+1M +10D",
				dateFormat: "dd/mm/yy",
				showOtherMonths: true
			}); */
			
			var cellDesc = $('<td></td>');
			var inputNodeDescId = 'desc_conv_' + tableSize;
			var inputNodeDesc = $('<input type="text" readonly="readonly" maxlength="'+maxlength+'" onfocus="'+tinyFunc+'" id="'+inputNodeDescId+'" name="'+inputNodeDescId+'" value="'+descrizione.val()+'" />');
			cellDesc.append(inputNodeDesc);
			row.append(cellDesc);			
	
			var cellSotTit = $('<td></td>');
			var inputNodeSotTitId = 'sotTit_conv_' + tableSize;
			var inputNodeSotTit = $('<input type="text" maxlength="'+maxlength+'" id="'+inputNodeSotTitId+'" name="'+inputNodeSotTitId+'" value="'+sotTit.val()+'" />');
			cellSotTit.append(inputNodeSotTit);
			row.append(cellSotTit);

			var cellVarTas = $('<td></td>');
			var inputNodeVarTasId = 'varTas_conv_' + tableSize;
			var inputNodeVarTas = $('<input type="text" id="'+inputNodeVarTasId+'" name="'+inputNodeVarTasId+'" value="'+varTas.val()+'" />');
			cellVarTas.append(inputNodeVarTas);
			row.append(cellVarTas);

			var cellAction = $('<td></td>');
			var funcDupToCall = "copyRow('conv'," + tableSize + ");";
			var cellAAction = $('<a href="'+noFunction+'" onclick="'+funcDupToCall+'"></a>');
			var cellImgDupAction = $('<img src="/img/icon_copy.gif" title="duplica riga" border="1" class="actionIcon" />');
			cellAAction.append(cellImgDupAction);
			cellAction.append(cellAAction);
			var cellImgSpace = $('<img src="'+icon_space+'" border="0" class="actionIcon" />');
			cellAction.append(cellImgSpace);
			var funcDelToCall = "addToDeleteList('conv'," + tableSize + ",'');";
			var cellDelAction = $('<a id="conv_icon_'+tableSize+'" href="'+noFunction+'" onclick="'+funcDelToCall+'"></a>');
			var cellImgDelAction = $('<img src="/img/icon_delete.gif" title="'+selectMessage+'" border="1" class="actionIcon" />');
			cellDelAction.append(cellImgDelAction);
			cellAction.append(cellDelAction);			
			row.append(cellAction);				
		
			bodyConv.append(row);
			convSize.val((tableSize + 1) + '');
		}	
		

	}
	else if (field == 'polizza') {
		var codice = $('#Codice_polizza');
		var ordinamento = $('#Ordinamento_polizza');
		var nome = $('#Nome_polizza');
		var descrizione = $('#Descrizione_polizza');
		var sotTit = $('#SotTit_polizza');
		var usoTaeg = $('#Uso_taeg_polizza');
		var visibilita = $('#Visibilita_polizza');
		var tipo = $('#Tipo_polizza');
		var costo = $('#Costo_polizza');
		var risultato = (codice.val() != '' && ordinamento.val() != '' && nome.val() != '' && descrizione.val() != '' && sotTit.val() != '' && costo.val() != '');
		if (!risultato) {
			resultMessage = resultEmptyMessage;
		}
		else {		
			var bodyPolizza = $('#body_polizza');
			var polizzaSize = $('#polizzaSize');
			var tableSize = parseInt(polizzaSize.val());
			var trClass = ((tableSize % 2) == 0) ? 'listOdd' : 'listEven';
			var icon_space = ((tableSize % 2) == 0) ? ICON_SPACE_ODD : ICON_SPACE_EVEN;
			
			var row = $('<tr class="'+trClass+'"></tr>');
			
			var cellCode = $('<td></td>');
			var inputNodeCodeId = 'code_polizza_' + tableSize;
			var inputNodeCode = $('<input type="text" id="'+inputNodeCodeId+'" name="'+inputNodeCodeId+'" value="'+codice.val()+'" style="width:50px;" />');
			cellCode.append(inputNodeCode);
			row.append(cellCode);

			var cellOrdinamento = $('<td></td>');
			var inputNodeOrdinamentoId = 'ordinamento_polizza_' + tableSize;
			var inputNodeOrdinamento = $('<input type="text" id="'+inputNodeOrdinamentoId+'" name="'+inputNodeOrdinamentoId+'" value="'+ordinamento.val()+'" style="width:50px;" />');
			cellOrdinamento.append(inputNodeOrdinamento);
			row.append(cellOrdinamento);			
		
			var cellNome = $('<td></td>');
			var inputNodeNomeId = 'nome_polizza_' + tableSize;
			var inputNodeNome = $('<input type="text" id="'+inputNodeNomeId+'" name="'+inputNodeNomeId+'" value="'+nome.val()+'" />');
			cellNome.append(inputNodeNome);
			row.append(cellNome);
			
			var cellDesc = $('<td></td>');
			var inputNodeDescId = 'desc_polizza_' + tableSize;
			var inputNodeDesc = $('<input type="text" style="width:120px;" readonly="readonly" maxlength="'+maxlength+'" onfocus="'+tinyFunc+'" id="'+inputNodeDescId+'" name="'+inputNodeDescId+'" value="'+descrizione.val()+'" />');
			cellDesc.append(inputNodeDesc);
			row.append(cellDesc);
	
			var cellSotTit = $('<td></td>');
			var inputNodeSotTitId = 'sotTit_polizza_' + tableSize;
			var inputNodeSotTit = $('<input type="text" maxlength="'+maxlength+'" id="'+inputNodeSotTitId+'" name="'+inputNodeSotTitId+'" value="'+sotTit.val()+'" />');
			cellSotTit.append(inputNodeSotTit);
			row.append(cellSotTit);			

			var cellUsoTaeg = $('<td></td>');
			var selNodeUsoTaegId = 'uso_taeg_polizza_' + tableSize;
			var selNodeUsoTaeg = $('<select name="'+selNodeUsoTaegId+'" id="'+selNodeUsoTaegId+'"></select>');
			var optionTaeg1 = $('<option value="yes">s\u00EC</option>');
			selNodeUsoTaeg.append(optionTaeg1);
			var secondSelected = (usoTaeg.val() == 'no') ? ' selected="selected"' : '';
			var optionTaeg2 = $('<option value="no"'+secondSelected+'>no</option>');
			selNodeUsoTaeg.append(optionTaeg2);
			cellUsoTaeg.append(selNodeUsoTaeg);
			row.append(cellUsoTaeg);	
			
			var cellVisibilita = $('<td></td>');
			var selNodeVisibilitaId = 'visibilita_polizza_' + tableSize;
			var selNodeVisibilita = $('<select name="'+selNodeVisibilitaId+'" id="'+selNodeVisibilitaId+'"></select>');
			var optionVis1 = $('<option value="Web">Web</option>');
			selNodeVisibilita.append(optionVis1);
			var secondSelected = (visibilita.val() == '599') ? ' selected="selected"' : '';
			var optionVis2 = $('<option value="599"'+secondSelected+'>599</option>');
			selNodeVisibilita.append(optionVis2);
			cellVisibilita.append(selNodeVisibilita);
			row.append(cellVisibilita);

			var cellTipo = $('<td></td>');
			var selNodeTipoId = 'tipo_polizza_' + tableSize;
			var selNodeTipo = $('<select name="'+selNodeTipoId+'" id="'+selNodeTipoId+'"></select>');
			var optionTipo1 = $('<option value="1">annuale</option>');
			selNodeVisibilita.append(optionTipo1);
			var secondSelected = (tipo.val() == '0') ? ' selected="selected"' : '';
			var optionTipo2 = $('<option value="0"'+secondSelected+'>una tantum</option>');
			selNodeVisibilita.append(optionTipo2);
			selNodeTipo.append(selNodeVisibilita);
			row.append(selNodeTipo);

			var cellCosto = $('<td></td>');
			var inputNodeCostoId = 'costo_polizza_' + tableSize;
			var inputNodeCosto = $('<input type="text" style="width:40px;" id="'+inputNodeCostoId+'" name="'+inputNodeCostoId+'" value="'+costo.val()+'" />');
			cellCosto.append(inputNodeCosto);
			row.append(cellCosto);
	
			var cellLinkPdfCond = $('<td></td>');
			var pdfCondValue = 'link_pdf_cond_polizza_' + tableSize;
			var pdfCondFunction = "controlla_estensione('" + pdfCondValue + "','.pdf');";
			var inputNodeLinkPdfCond = $('<input type="file" style="width:175px;" id="'+pdfCondValue+'" name="'+pdfCondValue+'" onchange="'+pdfCondFunction+'" />');
			cellLinkPdfCond.append(inputNodeLinkPdfCond);
			row.append(cellLinkPdfCond);
			
			var cellLinkPdfInf = $('<td></td>');
			var pdfInfValue = 'link_pdf_inf_polizza_' + tableSize;
			var pdfInfFunction = "controlla_estensione('" + pdfInfValue + "','.pdf');";
			var inputNodeLinkPdfInf = $('<input type="file" style="width:175px;" id="'+pdfInfValue+'" name="'+pdfInfValue+'" onchange="'+pdfInfFunction+'" />');
			cellLinkPdfInf.append(inputNodeLinkPdfInf);
			row.append(cellLinkPdfInf);
			
			var cellAction = $('<td></td>');
			var funcDupToCall = "copyRow('polizza'," + tableSize + ");";
			var cellAAction = $('<a href="'+noFunction+'" onclick="'+funcDupToCall+'"></a>');
			var cellImgDupAction = $('<img src="/img/icon_copy.gif" title="duplica riga" border="1" class="actionIcon" />');
			cellAAction.append(cellImgDupAction);
			cellAction.append(cellAAction);
			var cellImgSpace = $('<img src="'+icon_space+'" border="0" class="actionIcon" />');
			cellAction.append(cellImgSpace);
			var funcDelToCall = "addToDeleteList('polizza'," + tableSize + ",'');";
			var cellDelAction = $('<a id="polizza_icon_'+tableSize+'" href="'+noFunction+'" onclick="'+funcDelToCall+'"></a>');
			var cellImgDelAction = $('<img src="/img/icon_delete.gif" title="'+selectMessage+'" border="1" class="actionIcon" />');
			cellDelAction.append(cellImgDelAction);
			cellAction.append(cellDelAction);			
			row.append(cellAction);				
			
			bodyPolizza.append(row);
			polizzaSize.val((tableSize + 1) + '');
		}	
	}
	else if (field == 'delta_tasso') {
		var codice = $('#Codice_delta_tasso');
		var ordinamento = $('#Ordinamento_delta_tasso');
		var nome = $('#Nome_delta_tasso');
		var descrizione = $('#Descrizione_delta_tasso');
		var sottotitolo = $('#SotTit_delta_tasso');
		var combinazione = $('#Combinazione_delta_tasso');
		var valore = $('#Valore_delta_tasso');
		var risultato = (codice.val() != '' && ordinamento.val() != '' && nome.val() != '' && descrizione.val() != '' && sottotitolo != '' && combinazione.val() != '' && valore.val() != '');
		if (!risultato) {
			resultMessage = resultEmptyMessage;
		}
		else {		
			var bodyDeltaTasso = $('#body_delta_tasso');
			var deltaTassoSize = $('#deltaTassoSize');
			var tableSize = parseInt(deltaTassoSize.val());
			var trClass = ((tableSize % 2) == 0) ? 'listOdd' : 'listEven';
			var icon_space = ((tableSize % 2) == 0) ? ICON_SPACE_ODD : ICON_SPACE_EVEN;
			
			var row = $('<tr class="'+trClass+'"></tr>');
			
			var cellCode = $('<td></td>');
			var inputNodeCodeId = 'code_delta_tasso_' + tableSize;
			var inputNodeCode = $('<input type="text" id="'+inputNodeCodeId+'" name="'+inputNodeCodeId+'" value="'+codice.val()+'" style="width:50px;" />');
			cellCode.append(inputNodeCode);
			row.append(cellCode);

			var cellOrdinamento = $('<td></td>');
			var inputNodeOrdinamentoId = 'ordinamento_delta_tasso_' + tableSize;
			var inputNodeOrdinamento = $('<input type="text" id="'+inputNodeOrdinamentoId+'" name="'+inputNodeOrdinamentoId+'" value="'+ordinamento.val()+'" style="width:50px;" />');
			cellOrdinamento.append(inputNodeOrdinamento);
			row.append(cellOrdinamento);
			
			var cellNome = $('<td></td>');
			var inputNodeNomeId = 'nome_delta_tasso_' + tableSize;
			var inputNodeNome = $('<input type="text" id="'+inputNodeNomeId+'" name="'+inputNodeNomeId+'" value="'+nome.val()+'" />');
			cellNome.append(inputNodeNome);
			row.append(cellNome);

			var cellDesc = $('<td></td>');
			var inputNodeDescId = 'desc_delta_tasso_' + tableSize;
			var inputNodeDesc = $('<input type="text" readonly="readonly" maxlength="'+maxlength+'" onfocus="'+tinyFunc+'" id="'+inputNodeDescId+'" name="'+inputNodeDescId+'" value="'+descrizione.val()+'" />');
			cellDesc.append(inputNodeDesc);
			row.append(cellDesc);

			var cellSotTit = $('<td></td>');
			var inputNodeSotTitId = 'sotTit_delta_tasso_' + tableSize;
			var inputNodeSotTit = $('<input type="text" maxlength="'+maxlength+'" id="'+inputNodeSotTitId+'" name="'+inputNodeSotTitId+'" value="'+sottotitolo.val()+'" />');
			cellSotTit.append(inputNodeSotTit);
			row.append(cellSotTit);	

			var cellComb = $('<td></td>');
			var inputNodeCombId = 'combinazione_delta_tasso_' + tableSize;
			var inputNodeComb = $('<input type="text" maxlength="'+maxlength+'" id="'+inputNodeCombId+'" name="'+inputNodeCombId+'" value="'+combinazione.val()+'" />');
			cellComb.append(inputNodeComb);
			row.append(cellComb);	

			var cellValore = $('<td></td>');
			var inputNodeValoreId = 'valore_delta_tasso_' + tableSize;
			var inputNodeValore = $('<input type="text" maxlength="'+maxlength+'" id="'+inputNodeValoreId+'" name="'+inputNodeValoreId+'" value="'+valore.val()+'" />');
			cellValore.append(inputNodeValore);
			row.append(cellValore);	
			
			var cellAction = $('<td></td>');
			var funcDupToCall = "copyRow('delta_tasso'," + tableSize + ");";
			var cellAAction = $('<a href="'+noFunction+'" onclick="'+funcDupToCall+'"></a>');
			var cellImgDupAction = $('<img src="/img/icon_copy.gif" title="duplica riga" border="1" class="actionIcon" />');
			cellAAction.append(cellImgDupAction);
			cellAction.append(cellAAction);
			var cellImgFirstSpace = $('<img src="'+icon_space+'" border="0" class="actionIcon" />');
			cellAction.append(cellImgFirstSpace);
			var funcOpenPopupToCall = "openPopup(" + tableSize + ");";
			var cellOpenPopupAction = $('<a href="'+noFunction+'" onclick="'+funcOpenPopupToCall+'"></a>');
			var cellOpenPopupImgAction = $('<img src="/img/abtn_checkin.gif" title="aggrega polizze" border="1" class="actionIcon" />');
			cellOpenPopupAction.append(cellOpenPopupImgAction);
			cellAction.append(cellOpenPopupAction);
			var cellImgSecondSpace = $('<img src="'+icon_space+'" border="0" class="actionIcon" />');
			cellAction.append(cellImgSecondSpace);
			var funcDelToCall = "addToDeleteList('delta_tasso'," + tableSize + ",'');";
			var cellDelAction = $('<a id="delta_tasso_icon_'+tableSize+'" href="'+noFunction+'" onclick="'+funcDelToCall+'"></a>');
			var cellImgDelAction = $('<img src="/img/icon_delete.gif" title="'+selectMessage+'" border="1" class="actionIcon" />');
			cellDelAction.append(cellImgDelAction);
			cellAction.append(cellDelAction);			
			row.append(cellAction);				
			
			bodyDeltaTasso.append(row);
			deltaTassoSize.val((tableSize + 1) + '');
		}	
	}	
	else if (field == "indice") {
		var nome = $('#Nome_tasso').val();
		var nomeTrim = nome.replaceAll(" ", "");
		var listOfNomiTassi = $('#list_of_nomi_tassi');
		var listOfNomiTassiValue = listOfNomiTassi.val();
		var array = listOfNomiTassiValue.split(";");
		if(array.indexOf(String(nomeTrim)) == -1){
		 listOfNomiTassi.val(listOfNomiTassiValue + nomeTrim + ";");
		}
		var nomeIndice = $('#Nome_indice').val();
		var tipoIndice = $('#Tipo_indice').val();
		var selectedIndex = $('#Tipo_indice')[0].selectedIndex;
		var idIndice = $('#Id_indice').val();
		var valoreIndice = $('#Valore_indice').val();
		var icon_space = "";
		var risultato = (nome != '' && idIndice != '' && valoreIndice != '' && nomeIndice != '' && tipoIndice != '');	
		if (!risultato) {
			resultMessage = resultEmptyMessage;
		}
		else {		
			var bodyIndice = $('#body_indice');
			var indiceSize = $('#indiceSize');
			var tableSize = parseInt(indiceSize.val());
			var nomeTasso = $('#nome_tasso_' + nomeTrim);
			var secondRow;
			var flag = 1;
			var counter = 0;
			while (flag > 0) {
				counter++;
				var testInput = $('#id_indice_' + nomeTrim + '_' + counter);
				flag = (testInput.length);
			}	
			var row;			
			if (nomeTasso.length == 0) {
				var trClass = ((tableSize % 2) == 0) ? 'listOdd' : 'listEven';
				icon_space = ((tableSize % 2) == 0) ? ICON_SPACE_ODD : ICON_SPACE_EVEN;
				
				var row = $('<tr id="tr_'+nomeTrim+'_1" class="'+trClass+'"></tr>');
				
				var cellName = $('<td rowspan="1" id="td_'+nomeTrim+'"></td>');
				var inputNodeNameId = 'nome_tasso_' + nomeTrim;
				var inputNodeName = $('<input type="text" id="'+inputNodeNameId+'" name="'+inputNodeNameId+'" value="'+nome+'" />');
				cellName.append(inputNodeName);
				row.append(cellName);

				bodyIndice.append(row);
				indiceSize.val((tableSize + 1) + '');
				secondRow = row;
			}
			else {
				var cellName = $('#td_' + nomeTrim);
				var newSpan = parseInt(globalGetAttr(isIE, cellName, 'rowspan')) + 1;
				globalSetAttr(isIE, cellName, 'rowspan', '' + newSpan);
				var tabellaIndice = $('#table_indice');
				var position = getRowPosition(tabellaIndice, nomeTrim, (counter - 1));
				secondRow = $('<tr></tr>');
				var precRow = $('#tr_' + nomeTrim + '_' + (counter - 1));
				var precRowClass = globalGetAttr(isIE, precRow, 'class');
				icon_space = (precRowClass == 'listOdd') ? ICON_SPACE_ODD : ICON_SPACE_EVEN;
				secondRow.attr('class', precRowClass);
				secondRow.attr('id', 'tr_' + nomeTrim + '_' + counter);
				tabellaIndice.find('tr').eq(position).after(secondRow);
			}
			var cellNomeIndice = $('<td></td>');
			var inputNodeNomeIndiceId = 'nome_indice_' + nomeTrim + '_' + counter;
			var inputNodeNomeIndice = $('<input type="text" id="'+inputNodeNomeIndiceId+'" name="'+inputNodeNomeIndiceId+'" value="'+nomeIndice+'" />');
			cellNomeIndice.append(inputNodeNomeIndice);
			secondRow.append(cellNomeIndice);
			
			var cellTipoIndice = $('<td></td>');
			var selNodeTipoId = 'tipo_indice_' + nomeTrim + '_' + counter;
			var selNodeTipo = $('<select name="'+selNodeTipoId+'" id="'+selNodeTipoId+'"></select>');
			var optionTipo1 = $('<option value="diretto">diretto</option>');
			selNodeTipo.append(optionTipo1);
			var secondSelected = (tipoIndice == 'a durata') ? ' selected="selected"' : '';
			var optionTipo2 = $('<option value="a durata"'+secondSelected+'>a durata</option>');
			selNodeTipo.append(optionTipo2);
			cellTipoIndice.append(selNodeTipo);
			secondRow.append(cellTipoIndice);

			var cellId = $('<td></td>');
			var inputNodeIdId = 'id_indice_' + nomeTrim + '_' + counter;
			var inputNodeId = $('<input type="text" id="'+inputNodeIdId+'" name="'+inputNodeIdId+'" value="'+idIndice+'" />');
			cellId.append(inputNodeId);
			secondRow.append(cellId);
		
			var cellValore = $('<td></td>');
			var inputNodeValoreId = 'valore_indice_' + nomeTrim + '_' + counter;
			var inputNodeValore = $('<input type="text" maxlength="'+maxlength+'" id="'+inputNodeValoreId+'" name="'+inputNodeValoreId+'" value="'+valoreIndice+'" />');
			cellValore.append(inputNodeValore);
			secondRow.append(cellValore);	

			var cellAction = $('<td></td>');
			var funcDupToCall = "copyIndiceRow('" + nome + "','" + nomeIndice + "'," + selectedIndex + ",'" + idIndice + "','" + valoreIndice + "');";
			var cellAAction = $('<a href="'+noFunction+'" onclick="'+funcDupToCall+'"></a>');
			var cellImgDupAction = $('<img src="/img/icon_copy.gif" title="duplica riga" border="1" class="actionIcon" />');
			cellAAction.append(cellImgDupAction);
			cellAction.append(cellAAction);
			var cellImgSpace = $('<img src="'+icon_space+'" border="0" class="actionIcon" />');
			cellAction.append(cellImgSpace);
			var funcDelToCall = "addToDeleteList('indice'," + counter + ",'" + nome + "_');";
			var cellDelAction = $('<a id="indice_icon_'+nomeTrim+'_'+counter+'" href="'+noFunction+'" onclick="'+funcDelToCall+'"></a>');
			var cellImgDelAction = $('<img src="/img/icon_delete.gif" title="'+selectMessage+'" border="1" class="actionIcon" />');
			cellDelAction.append(cellImgDelAction);
			cellAction.append(cellDelAction);			
			secondRow.append(cellAction);
		}	
	}
	else if (field == 'final') {
		var codice = $('#Codice_final');
		var nome = $('#Nome_final');
		var descrizione = $('#Descrizione_final');
		var sotTit = $('#SotTit_final');
		var valore = $('#Valore_final');
		var risultato = (codice.val() != '' && nome.val() != '' && descrizione.val() != '' && sotTit.val() != '' && valore.val() != '');	
		if (!risultato) {
			resultMessage = resultEmptyMessage;
		}
		else {		
			var bodyFinal = $('#body_final');
			var finalSize = $('#finalSize');
			var tableSize = parseInt(finalSize.val());
			var trClass = ((tableSize % 2) == 0) ? 'listOdd' : 'listEven';
			icon_space = ((tableSize % 2) == 0) ? ICON_SPACE_ODD : ICON_SPACE_EVEN;
			
			var row = $('<tr class="'+trClass+'"></tr>');
			
			var cellCode = $('<td></td>');
			var inputNodeCodeId = 'code_final_' + tableSize;
			var inputNodeCode = $('<input type="text" id="'+inputNodeCodeId+'" name="'+inputNodeCodeId+'" value="'+codice.val()+'" style="width:50px;" />');
			cellCode.append(inputNodeCode);
			row.append(cellCode);
			
			var cellNome = $('<td></td>');
			var inputNodeNomeId = 'nome_final_' + tableSize;
			var inputNodeNome = $('<input type="text" id="'+inputNodeNomeId+'" name="'+inputNodeNomeId+'" value="'+nome.val()+'" />');
			cellNome.append(inputNodeNome);
			row.append(cellNome);

			var cellDesc = $('<td></td>');
			var inputNodeDescId = 'desc_final_' + tableSize;
			var inputNodeDesc = $('<input type="text" readonly="readonly" maxlength="'+maxlength+'" onfocus="'+tinyFunc+'" id="'+inputNodeDescId+'" name="'+inputNodeDescId+'" value="'+descrizione.val()+'" />');
			cellDesc.append(inputNodeDesc);
			row.append(cellDesc);
			
			var cellSotTit = $('<td></td>');
			var inputNodeSotTitId = 'sotTit_final_' + tableSize;
			var inputNodeSotTit = $('<input type="text" maxlength="'+maxlength+'" id="'+inputNodeSotTitId+'" name="'+inputNodeSotTitId+'" value="'+sotTit.val()+'" />');
			cellSotTit.append(inputNodeSotTit);
			row.append(cellSotTit);
			
			var cellVarTas = $('<td></td>');
			var inputNodeVarTasId = 'valore_final_' + tableSize;
			var inputNodeVarTas = $('<input type="text" id="'+inputNodeVarTasId+'" name="'+inputNodeVarTasId+'" value="'+valore.val()+'" />');
			cellVarTas.append(inputNodeVarTas);
			row.append(cellVarTas);

			var cellAction = $('<td></td>');
			var funcDupToCall = "copyRow('final'," + tableSize + ");";
			var cellAAction = $('<a href="'+noFunction+'" onclick="'+funcDupToCall+'"></a>');
			var cellImgDupAction = $('<img src="/img/icon_copy.gif" title="duplica riga" border="1" class="actionIcon" />');
			cellAAction.append(cellImgDupAction);
			cellAction.append(cellAAction);
			var cellImgSpace = $('<img src="'+icon_space+'" border="0" class="actionIcon" />');
			cellAction.append(cellImgSpace);
			var funcDelToCall = "addToDeleteList('final'," + tableSize + ",'');";
			var cellDelAction = $('<a id="final_icon_'+tableSize+'" href="'+noFunction+'" onclick="'+funcDelToCall+'"></a>');
			var cellImgDelAction = $('<img src="/img/icon_delete.gif" title="'+selectMessage+'" border="1" class="actionIcon" />');
			cellDelAction.append(cellImgDelAction);
			cellAction.append(cellDelAction);			
			row.append(cellAction);	
			
			bodyFinal.append(row);
			finalSize.val((tableSize + 1) + '');
		}	
	}	
	else if (field == 'CI') {
		var codice = $('#Codice_CI');
		var descrizione = $('#Desc_CI');
		var type = $('#Type_CI');
		var impMin = $('#ImportoMinimo_CI');
		var impMax = $('#ImportoMassimo_CI');
		var valCosto = $('#ValoreCosto_CI');
		var valPerc = $('#Valore_Perc_CI');
		if ( codice.val() != '' && descrizione.val() != '' && type.val() != '' && impMin.val() != '' && impMax.val() != '') {
			resultMessage = checkFieldIntegrity(field);
		}
		else {
			resultMessage = resultEmptyMessage;
		}
		if (resultMessage == '') {		
			var bodyCI = $('#body_CI');
			var ciSize = $('#ciSize');
			var tableSize = parseInt(ciSize.val());
			var trClass = ((tableSize % 2) == 0) ? 'listOdd' : 'listEven';
			var icon_space = ((tableSize % 2) == 0) ? ICON_SPACE_ODD : ICON_SPACE_EVEN;
			
			var row = $('<tr class="'+trClass+'"></tr>');
			
			var cellCode = $('<td></td>');
			var inputNodeCodeId = 'code_ci_' + tableSize;
			var inputNodeCode = $('<input type="text" id="'+inputNodeCodeId+'" name="'+inputNodeCodeId+'" value="'+codice.val()+'" style="width:60px;" />');
			cellCode.append(inputNodeCode);
			row.append(cellCode);
			
			var cellDesc = $('<td></td>');
			var inputNodeDescId = 'desc_ci_' + tableSize;
			var inputNodeDesc = $('<input type="text" id="'+inputNodeDescId+'" name="'+inputNodeDescId+'" value="'+descrizione.val()+'" />');
			cellDesc.append(inputNodeDesc);
			row.append(cellDesc);			
			
			var cellType = $('<td></td>');
			var inputNodeTypeId = 'type_ci_' + tableSize;
			var findCostFunction = "findNewCostValues('type_ci_"+tableSize+"','val_costo_ci_"+tableSize+"','val_perc_ci_"+tableSize+"');";
			var inputNodeType = $('<select id="'+inputNodeTypeId+'" name="'+inputNodeTypeId+'" onchange="'+findCostFunction+'"></select>');
			for (var index = 0; index < tc_IP_Array.length; index++) {
				var typeValue = tc_IP_Array[index];
				var typeLabel = (index == 0) ? 'Seleziona' : typeValue;
				inputNodeType.append($('<option value="'+typeValue+'"></td>').html(typeLabel));
			}
			inputNodeType.val(type.val());
			cellType.append(inputNodeType);
			row.append(cellType);	
			
			var cellImpMin = $('<td></td>');
			var inputNodeImpMinId = 'imp_min_ci_' + tableSize;
			var inputNodeImpMin = $('<input type="text" id="'+inputNodeImpMinId+'" name="'+inputNodeImpMinId+'" value="'+impMin.val()+'" />');
			cellImpMin.append(inputNodeImpMin);
			row.append(cellImpMin);

			var cellImpMax = $('<td></td>');
			var inputNodeImpMaxId = 'imp_max_ci_' + tableSize;
			var inputNodeImpMax = $('<input type="text" id="'+inputNodeImpMaxId+'" name="'+inputNodeImpMaxId+'" value="'+impMax.val()+'" />');
			cellImpMax.append(inputNodeImpMax);
			row.append(cellImpMax);

			var cellValCosto = $('<td></td>');
			var inputNodeValCostoId = 'val_costo_ci_' + tableSize;
			var inputNodeValCosto = $('<input type="text" id="'+inputNodeValCostoId+'" name="'+inputNodeValCostoId+'" value="'+valCosto.val()+'" disabled="disabled" />');
			cellValCosto.append(inputNodeValCosto);
			row.append(cellValCosto);
			
			var cellValPerc = $('<td></td>');
			var inputNodeValPercId = 'val_perc_ci_' + tableSize;
			var inputNodeValPerc = $('<input type="text" id="'+inputNodeValPercId+'" name="'+inputNodeValPercId+'" value="'+valPerc.val()+'" disabled="disabled" />');
			cellValPerc.append(inputNodeValPerc);
			row.append(cellValPerc);			
			
			var cellAction = $('<td></td>');
			var funcDupToCall = "copyRow('CI'," + tableSize + ");";
			var cellAAction = $('<a href="'+noFunction+'" onclick="'+funcDupToCall+'"></a>');
			var cellImgDupAction = $('<img src="/img/icon_copy.gif" title="duplica riga" border="1" class="actionIcon" />');
			cellAAction.append(cellImgDupAction);
			cellAction.append(cellAAction);
			var cellImgSpace = $('<img src="'+icon_space+'" border="0" class="actionIcon" />');
			cellAction.append(cellImgSpace);
			var funcDelToCall = "addToDeleteList('ci'," + tableSize + ",'');";
			var cellDelAction = $('<a id="ci_icon_'+tableSize+'" href="'+noFunction+'" onclick="'+funcDelToCall+'"></a>');
			var cellImgDelAction = $('<img src="/img/icon_delete.gif" title="'+selectMessage+'" border="1" class="actionIcon" />');
			cellDelAction.append(cellImgDelAction);
			cellAction.append(cellDelAction);			
			row.append(cellAction);
			
			bodyCI.append(row);
			ciSize.val((tableSize + 1) + '');
		}
	}	
	else if (field == 'CP') {
		var codice = $('#Codice_CP');
		var descrizione = $('#Desc_CP');
		var type = $('#Type_CP');
		var impMin = $('#ImportoMinimo_CP');
		var impMax = $('#ImportoMassimo_CP');
		var valCosto = $('#ValoreCosto_CP');
		var valPerc = $('#Valore_Perc_CP');
		if ( codice.val() != '' && descrizione.val() != '' && type.val() != '' && impMin.val() != '' && impMax.val() != '' ) {
			resultMessage = checkFieldIntegrity(field);
		}
		else {
			resultMessage = resultEmptyMessage;
		}
		if (resultMessage == '') {			
			var bodyCP = $('#body_CP');
			var cpSize = $('#cpSize');
			var tableSize = parseInt(cpSize.val());
			var trClass = ((tableSize % 2) == 0) ? 'listOdd' : 'listEven';
			var icon_space = ((tableSize % 2) == 0) ? ICON_SPACE_ODD : ICON_SPACE_EVEN;
			
			var row = $('<tr class="'+trClass+'"></tr>');
			
			var cellCode = $('<td></td>');
			var inputNodeCodeId = 'code_cp_' + tableSize;
			var inputNodeCode = $('<input type="text" id="'+inputNodeCodeId+'" name="'+inputNodeCodeId+'" value="'+codice.val()+'" style="width:60px;" />');
			cellCode.append(inputNodeCode);
			row.append(cellCode);
			
			var cellDesc = $('<td></td>');
			var inputNodeDescId = 'desc_cp_' + tableSize;
			var inputNodeDesc = $('<input type="text" id="'+inputNodeDescId+'" name="'+inputNodeDescId+'" value="'+descrizione.val()+'" />');
			cellDesc.append(inputNodeDesc);
			row.append(cellDesc);			
			
			var findCostFunction = "findNewCostValues('type_cp_"+tableSize+"','val_costo_cp_"+tableSize+"','val_perc_cp_"+tableSize+"');";
			var cellType = $('<td></td>');
			var inputNodeTypeId = 'type_cp_' + tableSize;
			var inputNodeType = $('<select id="'+inputNodeTypeId+'" name="'+inputNodeTypeId+'" onchange="'+findCostFunction+'"></select>');
			for (var index = 0; index < tc_IP_Array.length; index++) {
				var typeValue = tc_IP_Array[index];
				var typeLabel = (index == 0) ? 'Seleziona' : typeValue;
				inputNodeType.append($('<option value="'+typeValue+'"></td>').html(typeLabel));
			}
			inputNodeType.val(type.val());
			cellType.append(inputNodeType);
			row.append(cellType);	
			
			var cellImpMin = $('<td></td>');
			var inputNodeImpMinId = 'imp_min_cp_' + tableSize;
			var inputNodeImpMin = $('<input type="text" id="'+inputNodeImpMinId+'" name="'+inputNodeImpMinId+'" value="'+impMin.val()+'" />');
			cellImpMin.append(inputNodeImpMin);
			row.append(cellImpMin);
			
			var cellImpMax = $('<td></td>');
			var inputNodeImpMaxId = 'imp_max_cp_' + tableSize;
			var inputNodeImpMax = $('<input type="text" id="'+inputNodeImpMaxId+'" name="'+inputNodeImpMaxId+'" value="'+impMax.val()+'" />');
			cellImpMax.append(inputNodeImpMax);
			row.append(cellImpMax);			

			var cellValCosto = $('<td></td>');
			var inputNodeValCostoId = 'val_costo_cp_' + tableSize;
			var inputNodeValCosto = $('<input type="text" id="'+inputNodeValCostoId+'" name="'+inputNodeValCostoId+'" value="'+valCosto.val()+'" disabled="disabled" />');
			cellValCosto.append(inputNodeValCosto);
			row.append(cellValCosto);
			
			var cellValPerc = $('<td></td>');
			var inputNodeValPercId = 'val_perc_cp_' + tableSize;
			var inputNodeValPerc = $('<input type="text" id="'+inputNodeValPercId+'" name="'+inputNodeValPercId+'" value="'+valPerc.val()+'" disabled="disabled" />');
			cellValPerc.append(inputNodeValPerc);
			row.append(cellValPerc);			
			
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
			cpSize.val((tableSize + 1) + '');
		}
	}
	else if (field == 'CR') {
		var codice = $('#Codice_CR');
		var descrizione = $('#Desc_CR');
		var type = $('#Type_CR');
		var impMin = $('#ImportoMinimo_CR');
		var impMax = $('#ImportoMassimo_CR');
		var valCosto = $('#ValoreCosto_CR');
		var valPerc = $('#Valore_Perc_CR');
		if ( codice.val() != '' && descrizione.val() != '' && type.val() != '' && impMin.val() != '' && impMax.val() != '' ) {
			resultMessage = checkFieldIntegrity(field);
		}
		else {
			resultMessage = resultEmptyMessage;
		}
		if (resultMessage == '') {		
			var bodyCR = $('#body_CR');
			var crSize = $('#crSize');
			var tableSize = parseInt(crSize.val());
			var trClass = ((tableSize % 2) == 0) ? 'listOdd' : 'listEven';
			var icon_space = ((tableSize % 2) == 0) ? ICON_SPACE_ODD : ICON_SPACE_EVEN;
			
			var row = $('<tr class="'+trClass+'"></tr>');
			
			var cellCode = $('<td></td>');
			var inputNodeCodeId = 'code_cr_' + tableSize;
			var inputNodeCode = $('<input type="text" id="'+inputNodeCodeId+'" name="'+inputNodeCodeId+'" value="'+codice.val()+'" style="width:60px;" />');
			cellCode.append(inputNodeCode);
			row.append(cellCode);
			
			var cellDesc = $('<td></td>');
			var inputNodeDescId = 'desc_cr_' + tableSize;
			var inputNodeDesc = $('<input type="text" id="'+inputNodeDescId+'" name="'+inputNodeDescId+'" value="'+descrizione.val()+'" />');
			cellDesc.append(inputNodeDesc);
			row.append(cellDesc);			
			
			var findCostFunction = "findNewCostValues('type_cr_"+tableSize+"','val_costo_cr_"+tableSize+"','val_perc_cr_"+tableSize+"');";
			var cellType = $('<td></td>');
			var inputNodeTypeId = 'type_cr_' + tableSize;
			var inputNodeType = $('<select id="'+inputNodeTypeId+'" name="'+inputNodeTypeId+'" onchange="'+findCostFunction+'"></select>');
			for (var index = 0; index < tc_AR_Array.length; index++) {
				var typeValue = tc_AR_Array[index];
				var typeLabel = (index == 0) ? 'Seleziona' : typeValue;
				inputNodeType.append($('<option value="'+typeValue+'"></td>').html(typeLabel));
			}
			inputNodeType.val(type.val());
			cellType.append(inputNodeType);
			row.append(cellType);	
			
			var cellImpMin = $('<td></td>');
			var inputNodeImpMinId = 'imp_min_cr_' + tableSize;
			var inputNodeImpMin = $('<input type="text" id="'+inputNodeImpMinId+'" name="'+inputNodeImpMinId+'" value="'+impMin.val()+'" />');
			cellImpMin.append(inputNodeImpMin);
			row.append(cellImpMin);

			var cellImpMax = $('<td></td>');
			var inputNodeImpMaxId = 'imp_max_cr_' + tableSize;
			var inputNodeImpMax = $('<input type="text" id="'+inputNodeImpMaxId+'" name="'+inputNodeImpMaxId+'" value="'+impMax.val()+'" />');
			cellImpMax.append(inputNodeImpMax);
			row.append(cellImpMax);
			
			var cellValCosto = $('<td></td>');
			var inputNodeValCostoId = 'val_costo_cr_' + tableSize;
			var inputNodeValCosto = $('<input type="text" id="'+inputNodeValCostoId+'" name="'+inputNodeValCostoId+'" value="'+valCosto.val()+'" disabled="disabled" />');
			cellValCosto.append(inputNodeValCosto);
			row.append(cellValCosto);
			
			var cellValPerc = $('<td></td>');
			var inputNodeValPercId = 'val_perc_cr_' + tableSize;
			var inputNodeValPerc = $('<input type="text" id="'+inputNodeValPercId+'" name="'+inputNodeValPercId+'" value="'+valPerc.val()+'" disabled="disabled" />');
			cellValPerc.append(inputNodeValPerc);
			row.append(cellValPerc);			
			
			var cellAction = $('<td></td>');
			var funcDupToCall = "copyRow('CR'," + tableSize + ");";
			var cellAAction = $('<a href="'+noFunction+'" onclick="'+funcDupToCall+'"></a>');
			var cellImgDupAction = $('<img src="/img/icon_copy.gif" title="duplica riga" border="1" class="actionIcon" />');
			cellAAction.append(cellImgDupAction);
			cellAction.append(cellAAction);
			var cellImgSpace = $('<img src="'+icon_space+'" border="0" class="actionIcon" />');
			cellAction.append(cellImgSpace);
			var funcDelToCall = "addToDeleteList('cr'," + tableSize + ",'');";
			var cellDelAction = $('<a id="cr_icon_'+tableSize+'" href="'+noFunction+'" onclick="'+funcDelToCall+'"></a>');
			var cellImgDelAction = $('<img src="/img/icon_delete.gif" title="'+selectMessage+'" border="1" class="actionIcon" />');
			cellDelAction.append(cellImgDelAction);
			cellAction.append(cellDelAction);			
			row.append(cellAction);
			
			bodyCR.append(row);
			crSize.val((tableSize + 1) + '');
		}
	}	
	if (resultMessage.length == 0) {
		clearFields(field);
	}
	else {
		alert(resultMessage);
	}
}

function checkFieldIntegrity(field) {
	
	var resultMessage = '';
	if (field == 'CI') {
		if (isNotANumber($('#ImportoMinimo_CI').val())) {
			resultMessage = 'Il campo "Importo minimo" deve essere numerico';
		}
		else if (isNotANumber($('#ImportoMassimo_CI').val())) {
			resultMessage = 'Il campo "Importo massimo" deve essere numerico';
		}
	}
	else if (field == 'CP') {
		if (isNotANumber($('#ImportoMinimo_CP').val())) {
			resultMessage = 'Il campo "Importo minimo" deve essere numerico';
		}
		else if (isNotANumber($('#ImportoMassimo_CP').val())) {
			resultMessage = 'Il campo "Importo massimo" deve essere numerico';
		}
	}
	else if (field == 'CR') {
		if (isNotANumber($('#ImportoMinimo_CR').val())) {
			resultMessage = 'Il campo "Importo minimo" deve essere numerico';
		}
		else if (isNotANumber($('#ImportoMassimo_CR').val())) {
			resultMessage = 'Il campo "Importo massimo" deve essere numerico';
		}
	}
	return resultMessage;
}

function isNotANumber(value) {
	
	value = value.replace('.', '').replaceAll(',', '.');
	return isNaN(value);
}

function controlla_estensione(fieldId,ext) {

	var field = $('$'+fieldId);
	try {
		var fieldValue = field.va();
		var extArray = ext.split(",");
		var i = 0;
		for (; i < extArray.length; i++) {
			if (fieldValue.endsWith(extArray[i])) {
				i = extArray.length + 1;
		    } 
		}  
		if (i == extArray.length) {
			alert("Il file deve avere estensione " + ext);
				field.val("");
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

function findNewCostValues(typeId, costId, percId) {
	
	var typeValue = $('#'+typeId).val();
	var costElement = $('#'+costId);
	var percElement = $('#'+percId);
	var coupleValue = ['', ''];
	if (typeValue != '') {
		coupleValue = getCoupleValue(typeValue);
	}
	costElement.val(coupleValue[0]);
	percElement.val(coupleValue[1]);
}

function getCoupleValue(typeValue) {
	
	var coupleValue = ['', ''];
	var size = tc_IP_Array.length;
	for (var index = 0; index < size; index++) {
		if (typeValue == tc_IP_Array[index]) {
			coupleValue[0] = vc_IP_Array[index];
			coupleValue[1] = vp_IP_Array[index];
			index = size;
		}
	}
	return coupleValue;
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
		icon.html('<img class="actionIcon" src="/img/icon_undelete.gif" title="deseleziona per l\'eliminazione" border="1" >');
	}
	else {
		var secondStep = firstStep + matchString.length;
		var thirdStep = fieldListValue.length;
		fieldList.val(fieldListValue.substring(0, firstStep) + fieldListValue.substring(secondStep, thirdStep));
		icon.html('<img class="actionIcon" src="/img/icon_delete.gif" title="seleziona per l\'eliminazione" border="1" >');
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
