var STRINGA_TUTTI =''
var ESITI_PAGAMENTI 		= "2310";	//it.itecons.actions.iface.ActionFunctionIds.ESITI_PAGAMENTI = "2310"
var ESITI_AL_BENEFICIARIO 	= "2320";//it.itecons.actions.iface.ActionFunctionIds.ESITI_AL_BENEFICIARIO = "2320"
var ESITI_INCASSI			= "3330";	// it.itecons.actions.iface.ActionFunctionIds.ESITI_INCASSI_SEPA = "3330"
var ESITI_SEDA 				= "3345";   //it.itecons.actions.iface.ActionFunctionIds.ESITI_SEDA = "3345"
var ESITI_ESTRAZIONI_SEDA   = "3346";	//it.itecons.actions.iface.ActionFunctionIds.ESITI_ESTRAZIONI_SEDA = "3346"

$(document).ready(function() {
	STRINGA_TUTTI=$('#tutti').text();	
	initComboBanche();
	initComboConti();
	
	$('#intestatario').change(function() { changeIntestatario(); });
	$('#banca').change(function() { changeBanca(); });
	$('#rapporto').change(function() { changeConto(); });
	$('#bottoneFiltro').click(showParameters);
	
	reopenParameters();
		
	var idIntestatario = $('#intestatario')[0].value;
	detailIntestatario(intestatari[idIntestatario]);
	
	var preselBanca = $('#idComboBanca').val();
	var preselRapporto = $('#idComboRapporto').val();
		
	populateBanche(idIntestatario);
	populateConti(idIntestatario, preselBanca);
	if($('#banca')[0] != undefined){
		$('#banca')[0].value = preselBanca;
		if($('#banca')[0].length==2){
			$('#banca')[0].value=$('#banca')[0].lastChild.value;
			preselBanca=$('#banca')[0].value;
		}
	}
	if($('#rapporto')[0] != undefined){
		$('#rapporto')[0].value = preselRapporto;
		if($('#rapporto')[0].length==2){
			$('#rapporto')[0].value=$('#rapporto')[0].item(1).value;
			preselRapporto=$('#rapporto')[0].value;
			changeConto();
		}
	}
});

function changeIntestatario() {
		
	var idIntestatario = $('#intestatario')[0].value;
	populateBanche(idIntestatario);
	$('#idComboBanca').val('');
	$('#abi').val('');
	
	populateConti(idIntestatario, '');
	$('#idComboRapporto').val('');
	
			
	// se l'intestatario e' valido popolo i suoi dettagli altrimenti li svuoto
	if(idIntestatario != '') {
		detailIntestatario(intestatari[idIntestatario]);
	} else { 
		detailIntestatario(null);
	}
}

function changeBanca() {
	var idIntestatario =   $('#intestatario')[0].value;
	var idBanca = $('#banca')[0].value;
	
	var abi = findAbi(idIntestatario, idBanca);
	$('#abi').val(abi);
	$('#idComboBanca').val(idBanca);
	
	populateConti(idIntestatario, idBanca);
	$('#idComboRapporto').val('');
	
}

function changeConto() {
	
	var selectedConto =  $('#rapporto')[0].value;
	
	if (selectedConto == '') {
		$('#idComboRapporto')[0].value=selectedConto;
	} 
	else {
		for(var tempIntestatario in intestatari) 
		{
			for(var tempBanca in intestatari[tempIntestatario]['banche']) 
			{
				for(var tempConto in intestatari[tempIntestatario]['banche'][tempBanca]['conti']) 
				{
					if (tempConto == selectedConto) 
					{
						detailIntestatario(intestatari[tempIntestatario]);
						
						populateBanche(tempIntestatario)
						populateConti(tempIntestatario, tempBanca);
						
						$('#intestatario')[0].value = tempIntestatario
						$('#intestatario').change();
						
						$('#banca')[0].value = tempBanca;
						$('#banca').change();
												
						$('#rapporto')[0].value=selectedConto;
						$('#idComboRapporto')[0].value=selectedConto;
						
						
						return;
					}
				}
			}
		}
	}
}

function cleanSelect(select) {
	for(var i = select.options.length-1; i >= 0; i--) {
		select.options[i] = null;
	}
}

function populateBanche(intestatario) {
	var banche = new Array();
	
	if (intestatario == '') {
		for(var tempIntestatario in intestatari) {
			for(var tempBanca in intestatari[tempIntestatario]['banche']) {
			//Tolgo il caso in cui un intestatario non ha banche
				if(tempBanca!=''){
					banche[tempBanca] = intestatari[tempIntestatario]['banche'][tempBanca];
				}
			}
		}
	}	else {
		for(var tempBanca in intestatari[intestatario]['banche']) {
			banche[tempBanca] = intestatari[intestatario]['banche'][tempBanca];
		}
	}
	if($('#banca')[0] != undefined){
		var selectBanche = $('#banca')[0];
		cleanSelect(selectBanche);
		selectBanche.options[selectBanche.length] = new Option(STRINGA_TUTTI, '');
		for(var i in banche) {
			var banca = banche[i];
			selectBanche.options[selectBanche.length] = new Option(banca['descrizione'], banca['idBanca']);
		}
	}
}

function populateConti(intestatario, banca) {
	var conti = new Array();
	if (intestatario == '' && banca == '') {
		for(var tempIntestatario in intestatari) {
			for(var tempBanca in intestatari[tempIntestatario]['banche']) {
				for(var tempConto in intestatari[tempIntestatario]['banche'][tempBanca]['conti']) {
				//Tolgo il caso in cui un intestatario non ha banche e non ha conti
					if(tempConto!=''){
						conti[tempConto] = intestatari[tempIntestatario]['banche'][tempBanca]['conti'][tempConto];
					}
					
				}
			}
		}
	}
	else if (intestatario == '' && banca != '') {
		for(var tempIntestatario in intestatari) {
			if (intestatari[tempIntestatario]['banche'][banca]) {
				for(var tempConto in intestatari[tempIntestatario]['banche'][banca]['conti']) {
					conti[tempConto] = intestatari[tempIntestatario]['banche'][banca]['conti'][tempConto];
				}
			}
		}
	}
	else if (intestatario != '' && banca == '') {
		for(var tempBanca in intestatari[intestatario]['banche']) {
			for(var tempConto in intestatari[intestatario]['banche'][tempBanca]['conti']) {
				conti[tempConto] = intestatari[intestatario]['banche'][tempBanca]['conti'][tempConto];
			}
		}
	}
	else if (intestatario != undefined && intestatario != '' && banca != undefined && banca != '') {
		conti = intestatari[intestatario]['banche'][banca]['conti'];
	}
	
	if($('#rapporto')[0] != undefined){
		var selectConto=$('#rapporto')[0];
		cleanSelect(selectConto);
		selectConto.options[selectConto.length] = new Option(STRINGA_TUTTI, '');
		for(var i in conti) {
			var conto = conti[i];
			selectConto.options[selectConto.length] = new Option(conto['descCc'], i);
		}
	}
}

function detailIntestatario(){
	var id_Func = $('#id_Func_Action').val();
	var intestatario = intestatari[$('#intestatario')[0].value];
	switch (id_Func){
	case ESITI_PAGAMENTI:	//it.itecons.actions.iface.ActionFunctionIds.ESITI_PAGAMENTI = "2310"
		detailIntestatario_Esiti_Pag(intestatario);
		break;
	case ESITI_AL_BENEFICIARIO:	//it.itecons.actions.iface.ActionFunctionIds.ESITI_AL_BENEFICIARIO = "2320"
		detailIntestatario_Esiti_Ben(intestatario);
	case ESITI_SEDA:
		detailIntestatario_Esiti_Pag(intestatario);
		break;
	case ESITI_ESTRAZIONI_SEDA:
		detailIntestatario_Esiti_Pag(intestatario);
		break;
	case ESITI_INCASSI:
		detailIntestatario_Esiti_Pag(intestatario);
		break;
	
	}
}

function detailIntestatario_Esiti_Pag(intestatario) {
	
	var txtSia = $('#sia')[0];
	
	if (intestatario != null && intestatario != undefined) {
		var sia = intestatario['sia'];
		
		if (txtSia != null) {
			txtSia.value = sia;
		}
	}else{
		if (txtSia != null) {
			txtSia.value = '';
		}
	}
}

function detailIntestatario_Esiti_Ben(intestatario) {
	
	var txtSia = $('#sia')[0];
	var txtCuc = $('#cuc')[0];
	if (intestatario != null && intestatario != undefined) {
		var sia = intestatario['sia'];
		var cuc = intestatario['cuc'];
		
		if (txtSia != null) {
			txtSia.value = sia;
			txtCuc.value = cuc;
		}
	}	
	else {
		if (txtSia != null) {
			txtSia.value = '';
			txtCuc.value = '';
		}
	}
}



function findAbi(intestatario, bancaId) {
	
	if (bancaId == '') 
		return '';
	else {
		for(var tempIntestatario in intestatari) 
			for(var tempBanca in intestatari[tempIntestatario]['banche'])		{
			 if (tempBanca != '')	 {
			 	if (tempBanca == bancaId)
			 		return intestatari[tempIntestatario]['banche'][tempBanca]['abi'];
			 }
			}
	}
}

function initComboBanche() {
	populateBanche('');
}

function initComboConti() {
	populateConti('','');
	
}

function showParameters(){
	var id_Func = $('#id_Func_Action').val();
	var flag=false;
	var statoAv = $('#statoAvanzate').val();
	if (statoAv != null && statoAv != '' && statoAv=='aperto'){
		flag=false;
		$('#statoAvanzate').val('');
	} else{
		flag=true;
		$('#statoAvanzate').val('aperto');
	}
	
	switch (id_Func){
	case ESITI_PAGAMENTI:	//it.itecons.actions.iface.ActionFunctionIds.ESITI_PAGAMENTI = "2310"
		showParameters_Esiti_Pag(flag);
		break;
	case ESITI_AL_BENEFICIARIO:	//it.itecons.actions.iface.ActionFunctionIds.ESITI_AL_BENEFICIARIO = "2320"
		showParameters_Esiti_Ben(flag);
		break;
	case ESITI_INCASSI:
		showParameters_Esiti_Pag(flag);
		break;
	case ESITI_SEDA: //3345
	case ESITI_ESTRAZIONI_SEDA: //3346
		showParameters_Esiti_Seda(flag);
		break;
	}
	
	switchBottoneFiltro(flag);
}

function switchBottoneFiltro(flag){
	var btn = $('#bottoneFiltro')[0];
	if (flag) {
		btn.value="<< " + BTN_AVANZATE_TEXT; 
	}
	else	{
		btn.value=">> " + BTN_AVANZATE_TEXT;
	}
}
function showParameters_Esiti_Pag(flag) {
	$('#riga-filtro-1').toggleClass('nascosto', !flag);
	$('#tab-parametri-1').toggleClass('nascosto', !flag);
	$('#riga-filtro-2').toggleClass('nascosto', !flag);
	$('#tab-parametri-2').toggleClass('nascosto', !flag);
	$('#tab-parametri-3').toggleClass('nascosto', !flag);
}
function showParameters_Esiti_Ben(flag) {
	$('#riga-filtro-1').toggleClass('nascosto', !flag);
	$('#tab-parametri-1').toggleClass('nascosto', !flag);
}
function showParameters_Esiti_Seda(flag){
	$('#riga-filtro-1').toggleClass('nascosto',!flag);
	$('#tab-parametri-1').toggleClass('nascosto',!flag);
	$('#riga-filtro-2').toggleClass('nascosto',!flag);
}




function reopenParameters() {
	var id_Func = $('#id_Func_Action').val();
	var flag=false;
	var statoAv = $('#statoAvanzate').val();
	if (statoAv != null && statoAv != '' && statoAv=='aperto'){
		var fields = $('#tab-parametri-1').find(":input");
		for(var i = 0; i< fields.length;i++){
			if($.trim(fields[i].value).length>0){
				flag = true;				
				break;
			}		
		}
		if(flag == false){
			$('#statoAvanzate').val('chiuso');
		}
		
	}else{
		flag=false;
	}
	
	switch (id_Func){
		case ESITI_PAGAMENTI:	//it.itecons.actions.iface.ActionFunctionIds.ESITI_PAGAMENTI = "2310"
			showParameters_Esiti_Pag(flag);
			reopenParameters_Esiti_Pag(flag);
			break;
		case ESITI_AL_BENEFICIARIO:	//it.itecons.actions.iface.ActionFunctionIds.ESITI_AL_BENEFICIARIO = "2320"
			showParameters_Esiti_Ben(flag)
			reopenParameters_Esiti_Ben(flag);
			break;
		case ESITI_INCASSI:
			showParameters_Esiti_Pag(flag);
			break;
		case ESITI_SEDA:
		case ESITI_ESTRAZIONI_SEDA: //3346
			showParameters_Esiti_Seda(flag);
			reopenParameters_Esiti_Seda(flag);
	}
	
	switchBottoneFiltro(flag);
}

function reopenParameters_Esiti_Pag(flag){
	var field = document.forms[0].elements['filtroEsiti.tipoEsito'];
	if (field.style.removeProperty) {
		field.style.removeProperty ("border-color");
	}else{
		field.style.removeAttribute ("borderColor");
	}
	field = document.forms[0].elements['filtroEsiti.statoPagamento'];
	if (field.style.removeProperty) {
		field.style.removeProperty ("border-color");
	}else{
		field.style.removeAttribute ("borderColor");
	}
}
function reopenParameters_Esiti_Ben(flag){
	
}
function reopenParameters_Esiti_Seda(flag){

}

/*function showCalendar(calendarioTarget, inputTarget,mameField) 
{
	$('div.calendario:not(.nascosto)').addClass('nascosto');
	$(calendarioTarget).removeClass('nascosto');
	
	$('body').data('calendarioTarget',calendarioTarget);
	$('body').data('inputTarget',inputTarget);
	if (mameField.indexOf('\[')==-1)
	{
		objDate= 'document.' + form + '[\'' + mameField + '\']';
	}
	else
	{
		//trovo il nome dell'oggetto
		objDate = form + "_" + inpDate.replace(/\./g, "_");
		objDate= objDate.replace(/\[/g, "_");
		objDate= objDate.replace(/\]/g, "_");
	}
	
}*/

/*
shadowing della funzione calendar in calendario.js
*/
//function Calendar(year,month,day,status) {
	
//	var calendarioTarget = $('body').data('calendarioTarget');
//	var inputTarget = $('body').data('inputTarget');
  
//  $('body').removeData('calendarioTarget');
//  $('body').removeData('inputTarget');
	
//	if (status != 'Cancel') {
				
		/*if (day.substring(0,1)=='0')	{
			day=day.substring(1,2);
		}
	
		if (month.substring(0,1)=='0')	{
			month=month.substring(1,2);
		}*/
		
//		if (year < 1920)	{
//			year=1920;
//		}
		
		//setto il valore
//		var dataInput = day + "/" + month + "/" + year;
		
//		inputTarget = inputTarget.replace(".","\\\\.");
		
//		var a = $(inputTarget);
//		a.val(dataInput);
				
		// Controllo se nell'Input Text ci sono delle funzioni nell'onchange, se ci sono le faccio chiamare
//		var eventoOnChange = eval(objDate).onchange;
//		if (eventoOnChange != null)eventoOnChange();
//	}
	
	//chiudo il calendario
//	$(calendarioTarget).addClass('nascosto');
//}

function checkSoloEsiti() {
	var checkEsiti = $('#esitononincrociato').is(':checked');
	
	$('#rapporto')[0].selectedIndex = 0;
	$('#tipo_dato')[0].selectedIndex = 0;
	
	$('#rapporto')[0].disabled = checkEsiti;
	$('#tipo_dato')[0].disabled = checkEsiti;
} 

function onlyDate(evento) { 
	
	if(window.event || !evento.which) // IE o NE?	
		tasto = evento.keyCode; // per IE
	else if(evento)  // netscape
		tasto = evento.which;

	// gestione caso tasto backspace e tab
	if (tasto == 8 || tasto == 9 )
		return true;
	
	if (tasto < 47 || tasto > 57 )
		return false;

	return true;  
}

function confrontaDate(data_dal, data_al)
{
	if ((data_dal =='') || (data_al==''))
		return true;

	var ANNO_DAL = data_dal.substr(6,4);
	var MESE_DAL = eval(data_dal.substr(3,2)-1);
	var GIORNO_DAL = data_dal.substr(0,2);
	var ANNO_AL = data_al.substr(6,4);
	var MESE_AL = (data_al.substr(3,2)-1);
	var GIORNO_AL = data_al.substr(0,2);
	var dal = new Date(ANNO_DAL, MESE_DAL, GIORNO_DAL );
	var al = new Date(ANNO_AL, MESE_AL, GIORNO_AL );

	if (al < dal)
		return false;
	else
		return true;
}

function confrontaImporto(importo_dal, importo_al)
{
	if ((importo_dal=='') || (importo_al==''))
		return true;

	var newimporto_dal = importo_dal.replace(/,/g,".");
	var newimporto_al = importo_al.replace(/,/g,".");

	if (Number(newimporto_dal) <= Number(newimporto_al))
		return true;
	else 
		return false;
}
function setReadOnlyField(){
 	
 	if(document.forms[0].elements['filtroEsiti.tipoEsito'] !== undefined && document.forms[0].elements['filtroEsiti.tipoEsito'].value=='SE'){
 		document.forms[0].elements['filtroEsiti.idRapportoBanca'].disabled=true;
 		document.forms[0].elements['filtroEsiti.idRapportoBanca'].value="";
 		document.forms[0].elements['filtroEsiti.idComboRapporto'].value="";
 		document.forms[0].elements['filtroEsiti.idRapportoBanca'].style.color = "#e0e0e0";
 		document.forms[0].elements['filtroEsiti.ricercaPerDistintaAttivo'].disabled=true;
 		document.forms[0].elements['filtroEsiti.ricercaPerDistintaAttivo'].checked=false;
 		document.forms[0].elements['filtroEsiti.statoPagamento'].disabled=true;
 		document.forms[0].elements['filtroEsiti.statoPagamento'].value="";
 		document.forms[0].elements['filtroEsiti.statoPagamento'].style.color = "#e0e0e0";
 		/*
 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioA'].readOnly = true;
 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioA'].disabled = true;
 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioA'].style.color = "#e0e0e0";
 		*/
 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioA'].value="";
	 	document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioDa'].value="";
	 	document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneA'].value="";
	 	document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneDa'].value="";
	 	document.forms[0].elements['filtroEsiti.ricercaDistinta.importoA'].value = "";
	 	document.forms[0].elements['filtroEsiti.ricercaDistinta.importoDa'].value = "";
 		lockFieldByName('filtroEsiti.ricercaDistinta.dataInvioA', true, true);
 		lockFieldByName('filtroEsiti.ricercaDistinta.dataInvioDa', true, true);
 		lockFieldByName('filtroEsiti.ricercaDistinta.dataEsecuzioneA', true, true);
 		lockFieldByName('filtroEsiti.ricercaDistinta.dataEsecuzioneDa', true, true);
 		lockFieldByName('filtroEsiti.ricercaDistinta.importoA', true, true);
 		lockFieldByName('filtroEsiti.ricercaDistinta.importoDa', true, true);
 		/*
 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioDa'].readOnly = true;
 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioDa'].style.color = "#e0e0e0";
 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneA'].disabled = true;
 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneA'].style.color = "#e0e0e0";
 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneDa'].readOnly = true;
 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneDa'].disabled = true;
 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneDa'].style.color = "#e0e0e0";
 		document.forms[0].elements['filtroEsiti.ricercaDistinta.importoA'].readOnly = true;
 		document.forms[0].elements['filtroEsiti.ricercaDistinta.importoA'].style.color = "#e0e0e0";
 		document.forms[0].elements['filtroEsiti.ricercaDistinta.importoDa'].readOnly = true;
 		document.forms[0].elements['filtroEsiti.ricercaDistinta.importoDa'].style.color = "#e0e0e0";
 		*/
	 	document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioA'].value="";
	 	document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioDa'].value="";
	 	document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneA'].value="";
	 	document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneDa'].value="";
	 	document.forms[0].elements['filtroEsiti.ricercaDistinta.importoA'].value = "";
	 	document.forms[0].elements['filtroEsiti.ricercaDistinta.importoDa'].value = "";
 	}
 	else{
 		if( ( document.forms[0].elements['filtroEsiti.ricercaPerDistintaAttivo'].checked == false
 				&& document.forms[0].elements['filtroEsiti.ricercaPerSottoDistintaAttivo'] == undefined) ||
 				
 				(document.forms[0].elements['filtroEsiti.ricercaPerDistintaAttivo'].checked == false
 				&& document.forms[0].elements['filtroEsiti.ricercaPerSottoDistintaAttivo'] !== undefined &&
 					document.forms[0].elements['filtroEsiti.ricercaPerSottoDistintaAttivo'].checked == false )) {
 			
 			document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioA'].value="";
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioDa'].value="";
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneA'].value="";
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneDa'].value="";
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.importoA'].value = "";
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.importoDa'].value = "";
 			
 			document.forms[0].elements['filtroEsiti.ricercaPerDistintaAttivo'].disabled=false;
 			
 			lockFieldByName('filtroEsiti.ricercaDistinta.dataInvioA', true, true);
 			lockFieldByName('filtroEsiti.ricercaDistinta.dataInvioDa', true, true);
 			lockFieldByName('filtroEsiti.ricercaDistinta.dataEsecuzioneA', true, true);
 			lockFieldByName('filtroEsiti.ricercaDistinta.dataEsecuzioneDa', true, true);
 			lockFieldByName('filtroEsiti.ricercaDistinta.importoA', true, true);
 			lockFieldByName('filtroEsiti.ricercaDistinta.importoDa', true, true);
 			/*
 			document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioA'].readOnly = true;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioA'].disabled=true;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioA'].style.color = "#e0e0e0";
	 		*/
 			
 			/*
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioDa'].readOnly = true;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioDa'].disabled=true;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioDa'].style.color = "#e0e0e0";
	 		*/
 			
 			/*
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneA'].readOnly = true;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneA'].disabled=true;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneA'].style.color = "#e0e0e0";
	 		*/
 			
 			/*
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneDa'].readOnly = true;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneDa'].disabled=true;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneDa'].style.color = "#e0e0e0";
	 		*/
 			
 			/*
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.importoA'].readOnly = true;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.importoA'].style.color = "#e0e0e0";
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.importoDa'].readOnly = true;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.importoDa'].style.color = "#e0e0e0";
	 		*/
 			
	 		
	 	
	 		
 		}
 		else{
	 		document.forms[0].elements['filtroEsiti.ricercaPerDistintaAttivo'].disabled=false;
	 		/*
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioA'].readOnly = false;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioA'].disabled = false;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioA'].style.color = "#ffffff";
	 		*/
	 		lockFieldByName('filtroEsiti.ricercaDistinta.dataInvioA', false, false);
	 		lockFieldByName('filtroEsiti.ricercaDistinta.dataInvioDa', false, false);
	 		lockFieldByName('filtroEsiti.ricercaDistinta.dataEsecuzioneA', false, false);
	 		lockFieldByName('filtroEsiti.ricercaDistinta.dataEsecuzioneDa', false, false);
	 		lockFieldByName('filtroEsiti.ricercaDistinta.importoA', false, false);
	 		lockFieldByName('filtroEsiti.ricercaDistinta.importoDa', false, false);
	 		/*
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioDa'].readOnly = false;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioDa'].disabled = false;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataInvioDa'].style.color = "#ffffff";
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneA'].readOnly = false;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneA'].disabled = false;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneA'].style.color = "#ffffff";
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneDa'].readOnly = false;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneDa'].disabled = false;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.dataEsecuzioneDa'].style.color = "#ffffff";
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.importoA'].readOnly = false;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.importoA'].style.color = "#ffffff";
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.importoDa'].readOnly = false;
	 		document.forms[0].elements['filtroEsiti.ricercaDistinta.importoDa'].style.color = "#ffffff";
	 		*/
 		}
 		if (document.forms[0].elements['filtroEsiti.statoPagamento'] !== undefined){
 			document.forms[0].elements['filtroEsiti.statoPagamento'].disabled=false;
 		 	document.forms[0].elements['filtroEsiti.statoPagamento'].style.backgroundColor = "#ffffff";
 		}
 		document.forms[0].elements['filtroEsiti.idRapportoBanca'].disabled=false;
 		/*document.forms[0].elements['filtroEsiti.idRapportoBanca'].style.backgroundColor = "#ffffff";*/
 	}
 }


function emptyField(empty){
	if(document.forms[0].elements[empty].readOnly==true){
		document.forms[0].elements[empty].value="";
	}
}



if(this.ckecked) { this.form.elements['filtroEsiti.ricercaPerSottoDistintaAttivo'].checked = false; }