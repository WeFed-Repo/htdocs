//IMPOSTAZIONE CALENDARIO
var minDateInizio = "+3D";
var today = new Date();
var dayToday = today.getDay();	
//se oggi e' mercoledi' o giovedi'
if(dayToday == 3 || dayToday == 4){
	minDateInizio = "+5D";
}

var arr_giorni_da_escludere = ["Sabato","Domenica"];
var arr_giorni_settimana = ["Domenica","Lunedì","Martedì","Mercoledì","Giovedì","Venerdì","Sabato"];

//var arr_giorni_blocco = ["21/11/2018","22/11/2018","23/11/2018","24/11/2018","25/11/2018"];

function disabilitaGiorni(date) {
	var string = $.datepicker.formatDate('dd/mm/yy', date);
	for (var i = 0; i < arr_giorni_blocco.length; i++) {
		 if (arr_giorni_blocco.indexOf(string) != -1 ) {
			 return false;
		 } 
	 }
	return true;
}
//DAL
$(function () {
	
	//la variabile dataChiusuraEC è calcolata sulla standardImport.jsp
    var dateEvidentiStringa = dataChiusuraEC;
    /* FINE STRINGA IN ARRIVO DAL BACKEND */
    // Conversione della stringa in formato ISO
    var dateEvidenti = [];
    $.each(dateEvidentiStringa.split(","),function(i,v){
        var dataSplit = v.split("|");
        dateEvidenti.push(dataSplit[2] + "-" + dataSplit[1] + "-" + dataSplit[0]);
    });
	
	$("#dataInizio").mask("99/99/9999");
	$("#dataInizio").datepicker({
		minDate: minDateInizio,
		maxDate: "+3M",
		showOtherMonths: true,
		showOn: "button",
		prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
		nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
		buttonImage: "/img/ret/pixel_trasp.gif",
		buttonImageOnly:true,
		beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
		beforeShowDay: function(date) {
			//if(!disabilitaGiorni(date))
				//return [false];
			var dt = $.datepicker.noWeekends(date);
			if(!dt[0]){
				return dt;
			} else {				
				return [true,($.inArray(date.format("isoDate"),dateEvidenti)>=0 ? "evidente" : "")];
			}
        },
		onSelect: function(selectedDate) {
			$("#dataFine").datepicker("option", "minDate", selectedDate);
			$("#dataFine").val("");
			$("#intervalloRevoca #dataInizioValiditaPlafond").val(selectedDate);
			initializeCal();
		},
	    onClose: function(){
	    	$('#datePickerWrapper').modal('hide');
	    }
    });	
});

//AL
$(function () {
	
	
	//la variabile dataChiusuraEC è calcolata sulla standardImport.jsp
    var dateEvidentiStringa = dataChiusuraEC;
    /* FINE STRINGA IN ARRIVO DAL BACKEND */
    // Conversione della stringa in formato ISO
    var dateEvidenti = [];
    $.each(dateEvidentiStringa.split(","),function(i,v){
        var dataSplit = v.split("|");
        dateEvidenti.push(dataSplit[2] + "-" + dataSplit[1] + "-" + dataSplit[0]);
    });
	
	$("#dataFine").mask("99/99/9999");
	$("#dataFine").datepicker({
		minDate: minDateInizio,
		maxDate: "+3M",
		showOtherMonths: true,
		showOn: "button",
		prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
		nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
		buttonImage: "/img/ret/pixel_trasp.gif",
		buttonImageOnly:true,
		beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
		beforeShowDay: function(date) {
			//if(!disabilitaGiorni(date))
				//return [false];
			var dt = $.datepicker.noWeekends(date);
			if(!dt[0]){
				return dt;
			} else {				
				return [true,($.inArray(date.format("isoDate"),dateEvidenti)>=0 ? "evidente" : "")];
			}
        },
		onSelect: function(selectedDate) {
			$("#dataInizio").datepicker("option", "maxDate", selectedDate);
			$("#intervalloRevoca #dataFineValiditaPlafond").val(selectedDate);
			initializeCal();
		},
	    onClose: function(){
	    	$('#datePickerWrapper').modal('hide');
	    }
    });	
	appendDatePickerIcon('datepickerScadenza');
});


function initializeCal(){
	appendDatePickerIcon('dataInizio');
	appendDatePickerIcon('dataFine');
}

$(function () {
	initializeCal();
});

//FINE IMPOSTAZIONE CALENDARIO

//RADIO BUTTONS KCLASSIC (se esistenti)
$("input[name='tiporichiesta']").on("click", function(){
	var sTl = $("#selTipoLinea");
	if (this.value == "1"){
		sTl.show();
	}else{
		sTl.hide();
		$("#intervalloRevoca").hide();
		$("input[name='validitaPlafond']").val("secondalinea");
		$("input[name='tipoValiditaPlafond']").attr("checked", false);
		$("#dataInizio").val('');
		$("#dataFine").val('');
		$("#intervalloRevoca #dataFineValiditaPlafond").val('');
		$("#intervalloRevoca #dataInizioValiditaPlafond").val('');
	}
});
	
$("input[name='tipoValiditaPlafond']").on("click", function(){
	var iR = $("#intervalloRevoca");
	if (this.value == "1"){
		$("input[name='validitaPlafond']").val("temporanea");
		iR.show();
	}else{
		$("#dataInizio").val('');
		$("#dataFine").val('');
		$("#intervalloRevoca #dataFineValiditaPlafond").val('');
		$("#intervalloRevoca #dataInizioValiditaPlafond").val('');
		$("input[name='validitaPlafond']").val("revoca");
		iR.hide();
	}
});

function isEmpty(s){
	return ((s==null) || (s.length==0))
}

function checkNum(nn){
	str = new String (nn);
	con = 0;
	for(var k=0; k < str.length; k++){
		var c = nn.charAt(k);
		if (!(c >= '0'  &&  c <= '9')){
			con ++;
			return false;
		}else{
			if (k == (str.length-1)){
				return true;
			}
		}
	}
}

function checkLen(nn){
	str = new String (nn);
	if (str.length != 4) 
		return false;
	else
		return true;
}

function checkPlafond(nn){
	return !isEmpty(nn) && checkNum(nn) && !(nn<500 | nn>7800);
}

function checkChecked(aField){
	for (var r=0; r < aField.length; r++){
		if (aField[r].checked){
			return true;
		}
	}
	return false;
}

function getCheckedValues(aField){
	var v = "";
	for(var i=0; i < aField.length; i++){
		if (aField[i].checked){
			v = aField[i].value;
		}
	}
	return v;
}

function prosegui(){
	var form = document.getElementById("inviaRichiesta");
	var numcar4 = form.nuCarta4.value;
	var importo = form.nuImporto.value;
	
	if(isEmpty(numcar4)){
		alert("Inserire le ultime 4 cifre della carta");
		return;
	} else if(!checkNum(numcar4)){
		alert("Inserire solo numeri nel campo ultime 4 cifre della carta");
		return;
	}else if(!checkLen(numcar4)){
		alert("Inserire 4 numeri nel campo ultime 4 cifre della carta");
		return;
	}else if(isEmpty(importo)){
		alert("Inserire l'importo");
		return;
	}else if(!checkNum(importo)){
		alert("Inserire solo numeri nel campo importo");
		return;
	}else if(getCheckedValues(form.tiporichiesta) == "1" && !checkPlafond(importo)){
		alert("Inserire un importo compreso tra 500 euro e 7800 euro");
		return;		
	}else{
	   form.numerocarta.value = numcar4;
	   form.submit();
	}
}

function prosegui2(){
	var form = document.getElementById("inviaRichiesta");
	var numcar4 = form.nuCarta4.value;
	var importo = form.nuImporto.value;
	if (isEmpty(numcar4)){
		alert("Inserire le ultime 4 cifre della carta");
		return;
	}else if(getCheckedValues(form.tiporichiesta) == ""){
		alert("Selezionare la richiesta");
		return;
	}else if(!checkNum(numcar4)){
		alert("Inserire solo numeri nel campo ultime 4 cifre della carta");
		return;
	}else if(!checkLen(numcar4)){
		alert("Inserire 4 numeri nel campo ultime 4 cifre della carta");
		return;
	}else if(isEmpty(importo)){
		alert("Inserire l'importo");
		return;
	}else if(!checkNum(importo)){
		alert("Inserire solo numeri nel campo importo");
		return;
	}else if(getCheckedValues(form.tiporichiesta) == "1" && !checkPlafond(importo)){
		alert("Inserire un importo compreso tra 500 euro e 7800 euro");
		return;		
	} else {
	   form.numerocarta.value = numcar4;
	   form.submit();
	}
}

function plafondControlli(){
	// Inizializzazione array errori
	var errors = [];
	
	// Acquisizione dei campi
	var form = $("#inviaRichiesta");
	var importoVal = form.find("input[name=nuImporto]").val();
	var importo = form.find("input[name=nuImporto]");
	var tiporichiesta = form.find("input[name=tiporichiesta]");
	var tipoValiditaPlafond = form.find("input[name=tipoValiditaPlafond]");
	var inizio = $("#dataInizio").val();
	var tipologiaCarta = $("#tipologiaCarta").val();
	var fine = $("#dataFine").val();
	var action = form.find("input[name=actionType]").val();
	
	if($("#checkinfo").length){
		if(!$('#toolID').hasClass('closeable')){
			if (!$("#checkinfo").is(':checked')) {
				errors.push({ field: $("#checkinfo"), text: "Seleziona" });
			}
		}else if(!$("#checkinfo").is(':checked')) {
			errors.push({ field: $("#checkinfo"), text: "Prima di procedere, occorre prendere visione dell'informativa, aprendo il relativo pdf" });
		}
	}else if(action.indexOf("inviaRichiesta") == -1){
	
		if (tiporichiesta.length > 1){
			if($("#ricWrap")){
				if (getCheckedValues(tiporichiesta) == "" && tipologiaCarta != 1){
					errors.push({ field: $("#tiporichiesta_label"), text: "Selezionare la richiesta" });
				}
			}
			
			if(!checkPlafond(importoVal)){
				errors.push({ field: $("#nuImporto_label"), text: "L'importo deve essere compreso tra 500 e 7.800 &euro;" });
			}
			
			if($("#ricWrapTipo")){
				if(getCheckedValues(tipoValiditaPlafond) == "" && getCheckedValues(tiporichiesta)== 1){
						errors.push({ field: $("#tipoValiditaPlafond_label"), text: "Selezionare la tipologia" });
				}
			}
			
			if(getCheckedValues(tipoValiditaPlafond)== 1){
				if((isEmpty(inizio) || inizio == "gg/mm/aaaa") || (isEmpty(fine) || fine == "gg/mm/aaaa")){
					errors.push({ field: $("#data_label"), text: "Inserisci sia la data di inizio che la data di fine validit&agrave;" });
				}
			}
			
		}else{
			
			if($("#ricWrapTipo")){
				if(getCheckedValues(tipoValiditaPlafond) == ""){
						errors.push({ field: $("#tipoValiditaPlafond_label"), text: "Selezionare la tipologia" });
				}
			}
			
			if(getCheckedValues(tipoValiditaPlafond)== 1){
				if((isEmpty(inizio) || inizio == "gg/mm/aaaa") || (isEmpty(fine) || fine == "gg/mm/aaaa")){
					errors.push({ field: $("#data_label"), text: "Inserisci sia la data di inizio che la data di fine validit&agrave;" });
				}
			}
			
			if(!checkPlafond(importoVal)){
				errors.push({ field: $("#nuImporto_label"), text: "L'importo deve essere compreso tra 500 e 7.800 &euro;" });
			}
		}
	}
	
	// Effettuare qui i vari controlli e fare il push dei vari errori
	if (errors.length > 0)	{
		setHasErrors(errors, "#inviaRichiesta");
	}else{
		$("input[name=numerocarta]").val($("input[name=numcar4]").val());
		if(getCheckedValues(tiporichiesta)==2){
			tipoValiditaPlafond.eq(0).attr("checked", true);
		}
			
		form.submit();
	}
}

function displayTipoValiditaPlafond() {
	var validitaPlafond = $("input[name='validitaPlafond']").val();
	var sTl = $("#selTipoLinea");
	var iR = $("#intervalloRevoca");
	if (validitaPlafond == "temporanea"){
		sTl.show();
		iR.show();
		$("input[name='tipoValiditaPlafond']")[1].checked = true;
		
	}else if(validitaPlafond == "revoca"){
		iR.hide();
		sTl.show();
		$("input[name='tipoValiditaPlafond']")[0].checked = true;
		
	}else if(validitaPlafond == "secondalinea"){
		$("input[name='tiporichiesta']")[0].checked = false;
		$("input[name='tiporichiesta']")[1].checked = false;
		$("input[name='tipoValiditaPlafond']")[0].checked = false;
		$("input[name='tipoValiditaPlafond']")[1].checked = false;
		iR.hide();
		sTl.hide();
	}

	if($("#tipologiaCarta").val() == "1"){
		$("input[name='tiporichiesta']")[0].checked = true;
	}
	
	if(validitaPlafond == "revoca" || validitaPlafond == "temporanea"){
		$("input[name='tiporichiesta']")[0].checked = true;
		sTl.show();
	}else if(validitaPlafond != 'null'){
		$("input[name='tiporichiesta']")[1].checked = true;
	}
}

//accetta solo numeri
function replaceIfNotDigit(str) {
    return str.replace(/[^0-9]/g, "");
}

//salta i caratteri speciali
function replaceSpecialChar(str) {
    return str.replace(/[^\w\s]/gi, "");
}

// Abilitazione del checkbox
$("#pdfLink").on("click", function(){
	var cb = $("#checkinfo");
	$('#toolID').removeClass('closeable');
	$('#toolID').removeClass('hovfin');
	cb.prop("disabled",false);
});

$("#pControlli").click(plafondControlli);

$(document).ready(function(){
	var tipologiaCarta = $("#tipologiaCarta").val();
	
	if($('#tiporichiestaPl').is(':checked')){
		if(tipologiaCarta != 1){
			$("#ricWrap").show();
		}
		else{
			$("#selTipoLinea").show();
		}
		if($('#tipoValiditaPlafondTemp').is(':checked')){
			$("#selTipoLinea").show();
			$("#intervalloRevoca").show();
		}
	}
});