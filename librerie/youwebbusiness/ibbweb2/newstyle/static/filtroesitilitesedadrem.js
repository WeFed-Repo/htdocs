var STRINGA_TUTTI = '';

$(document).ready(function() {
	STRINGA_TUTTI=$('#tutti').text();	
	initComboBanche();
	initComboConti();
	
	$('#intestatario').change(function() { changeIntestatario(); });
	if($('#banca')[0]!=undefined ){
		$('#banca').change(function() { changeBanca(); });
	}
	if($('#rapporto')[0]!=undefined){
		$('#rapporto').change(function() { changeConto(); });
	}
	var idIntestatario =   $('#intestatario')[0].value;
	var preselBanca = '';
	var preselRapporto = '';
	if($('#idComboBanca').val()!=undefined){
		var preselBanca = $('#idComboBanca').val();
	}
	if($('#idComboRapporto').val()!=undefined){
		var preselRapporto = $('#idComboRapporto').val();
	}
		
	populateBanche(idIntestatario);
	populateConti(idIntestatario, preselBanca);
	if($('#rapporto')[0]!=undefined){
		$('#rapporto')[0].value = preselRapporto;
	}
	if($('#banca')[0]!=undefined ){
		$('#banca')[0].value = preselBanca;
	}
	enableImgCerca(false);
});

function changeIntestatario() {
		
	var idIntestatario = $('#intestatario')[0].value;
	populateBanche(idIntestatario);
	$('#idComboBanca').val('');
	$('#abi').val('');
	
	populateConti(idIntestatario, '');
	$('#idComboRapporto').val('');
			
	enableImgCerca(true);
}

function changeBanca() {
	var idIntestatario =   $('#intestatario')[0].value;
	var idBanca = $('#banca')[0].value;
	
	var abi = findAbi(idIntestatario, idBanca);
	$('#abi').val(abi);
	$('#idComboBanca').val(idBanca);
	
	populateConti(idIntestatario, idBanca);
	$('#idComboRapporto').val('');
	
	enableImgCerca(true);
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
	
	enableImgCerca(true);
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
	
	var selectBanche = $('#banca')[0];
	if (typeof selectBanche != 'undefined')
	{
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
	else if (intestatario != '' && banca != '') {
		conti = intestatari[intestatario]['banche'][banca]['conti'];
	}
		
	var selectConto=$('#rapporto')[0];
	if (typeof selectConto != 'undefined')
	{
		cleanSelect(selectConto);
		selectConto.options[selectConto.length] = new Option(STRINGA_TUTTI, '');
		for(var i in conti) {
			var conto = conti[i];
			selectConto.options[selectConto.length] = new Option(conto['descCc'], i);
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

function enableImgCerca(value) {

	if (value) {
		$('#imgricerca').attr("src", '/ibbweb2/static/images/'+CURRENT_ABI+'/refreshcontext-enabled.gif');
	}
	else { 
		$('#imgricerca').attr("src", '/ibbweb2/static/images/'+CURRENT_ABI+'/refreshcontext-disabled.gif');
	}

	$('#imgricerca').attr("disabled",!value);
}
function setReadOnlyContoField(){
    var fieldRapportoBanca = document.forms[0].elements['filtroEsitiSedaRemuneration.idRapportoBanca'];
    if ((typeof fieldRapportoBanca == 'undefined') || (fieldRapportoBanca == null)) { return; }
    var fieldTipoEsito = document.forms[0].elements['filtroEsitiSedaRemuneration.tipoEsito'];
    if ((typeof fieldTipoEsito != 'undefined') && (fieldTipoEsito != null) && (fieldTipoEsito.value == 'SE')) {
		fieldRapportoBanca.disabled = true;
 		fieldRapportoBanca.value = "";
 		fieldRapportoBanca.style.backgroundColor = "#e0e0e0";
 		if ((typeof document.forms[0].elements['filtroEsitiSedaRemuneration.idComboRapporto'] != 'undefined') && (document.forms[0].elements['filtroEsitiSedaRemuneration.idComboRapporto'] != null)) {
 		    document.forms[0].elements['filtroEsitiSedaRemuneration.idComboRapporto'].value = "";
 		}
	}else{
		fieldRapportoBanca.disabled = false;
 		fieldRapportoBanca.style.backgroundColor = "#ffffff";
	}
	
}