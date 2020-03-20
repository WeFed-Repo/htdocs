var datiMifid = {}; 


function formatDecimal(number,dec){
	if(dec===undefined)
		dec = 2;
	return number.toFixed(dec).toString().replace(".", ",");
}

function stringToFloat(str){
	return parseFloat(str.replace(",","."));
}

function cleanZero(str) {
	var result = str;
	if (str.slice(str.length-1)=="0")
		result = str.slice(0, str.length-1);
	return result;
}

function importo2quote(importo, valuta, cambio, nav) {
	output = $("<span>").append("corrispondenti a ");
	if (valuta!="EUR")
		output.append($("<strong />").text(formatDecimal(importo*cambio)).append(" " + valuta)).append(" e a ");
	
	var idFondo = $("#selFondo").val();
	var fondo = Finance.fundData.fondi[idFondo];
	output.append($("<strong />").text(formatDecimal(importo*cambio/nav,getNumDec(fondo.codicesocietagestione))));
	output.append(" quote");
	return output;
}

function quote2importo(quote, valuta, cambio, nav) {
	importo = nav*quote/cambio;
	output = $("<span>").append("corrispondenti a ");
	if (valuta!="EUR")
		output.append($("<strong />").text(formatDecimal(importo*cambio)).append(" " + valuta)).append(" e a ");
	output.append($("<strong />").text(formatDecimal(importo) + " EUR"));
	return output;
}

function loadFondi(){
	$("#warningBox").hide();
	$("#errorBox").hide(); $("#messaggio").html("");
	//$("div.form-group").hide();	
	//$("#dettaglioPicPac").hide();
	//$(".dettaglioPac").hide();
	$("#formWrapper").parent().addClass("loading");
	Finance.depositData.type = "altro";
	$(".depositoTitoli").html($("#deposito").val());
	Finance.loadFundData( $("#deposito").val(), "SELL",
			successFondiHandler		//timeout 1/3
//			function (jsonData) {
//   				$("#selFondo").empty();
//   				//jsonData.fondi = $.parseJSON(jsonData.fondiStr);
//   				if (!$.isEmptyObject(jsonData) && jsonData.esito == "OK" && jsonData.hasOwnProperty("fondi")) {
//   					$("input[name=numeroFondi]").val(Object.keys(jsonData.fondi).length);
//   					for (var fund in jsonData.fondi)
//   						$("<option>", {value:fund}).text(jsonData.fondi[fund].nomefondo).appendTo("#selFondo");
//   					if (Finance.status.codiceIsin!=null) {
//   						$("#selFondo").val(Finance.status.codiceIsin);
//   						Finance.status.codiceIsin = null;
//   					}
//   				} else
//   					$("input[name=numeroFondi]").val(0);
//   				
//   				if ($("input[name=numeroFondi]").val()==0) {
//   					$("div.form-group").hide();
//   					$("#depositoBlock").parent().parent().parent().show();
//   					$("#selFondo").parent().hide();
//   					$("#warningBox").show();
//	   			} else {
//	   				$("#selFondo").parent().show();
//					$("div.form-group").show();
//					$("#selFondo").trigger("change");
//	   			}
//				$("#formWrapper").parent().removeClass("loading");
//					
//			}
		,ajaxErrorHttp);
}

//timeout 2/3
function successFondiHandler(jsonData){
	$("#selFondo").empty();
		//jsonData.fondi = $.parseJSON(jsonData.fondiStr);
		if (!$.isEmptyObject(jsonData) && jsonData.esito == "OK" && jsonData.hasOwnProperty("fondi")) {
			$("input[name=numeroFondi]").val(Object.keys(jsonData.fondi).length);
			for (var fund in jsonData.fondi)
				$("<option>", {value:fund}).text(jsonData.fondi[fund].nomefondo).appendTo("#selFondo");
			if (Finance.status.codiceIsin!=null) {
				$("#selFondo").val(Finance.status.codiceIsin);
				Finance.status.codiceIsin = null;
			}
		} else
			$("input[name=numeroFondi]").val(0);
		
		if ($("input[name=numeroFondi]").val()==0) {
			$("div.form-group").hide();
			$("#depositoBlock").parent().parent().parent().show();
			$("#selFondo").parent().hide();
			$("#warningBox").show();
		} else {
			$("#selFondo").parent().show();
		$("div.form-group").show();
		$("#selFondo").trigger("change");
		}
	$("#formWrapper").parent().removeClass("loading");
}


function ajaxErrorHttp(request, status, error) {
	//timeout 3/3
//	if(status == "timeout"){
//		if(Finance.prova <4 ){
//			Finance.prova ++;
//			Finance.chiamataIsal($("#deposito").val(), "SELL", successFondiHandler, ajaxErrorHttp,Finance.cf,Finance.prova);
//		}
//		else{
//			ajaxErrorHttp(request, "error", "Proxy Error");
//		}
//	}
//	else{ 
		switch (error) {
			case "Not Found":
				$("#warningBox").empty();
				$("#messaggio").html("Errore: Server non trovato");
				$("#errorBox").show();
				window.scrollTo(0, 0);
				$("form[name=sellFundForm]").hide();
				break;
			case "Proxy Error":
				$("#warningBox").empty();
				$("#messaggio").html("Errore: Server non raggiungibile");
				$("#errorBox").show();
				window.scrollTo(0, 0);
				$("form[name=sellFundForm]").hide();
				break;
	//		case "Not Found":
	//			$("#warningBox").empty();
	//			$("#messaggio").html("Errore: Server non raggiungibile");
	//			$("#errorBox").show();
	//			window.scrollTo(0, 0);
	//			$("#formWrapper").parent().removeClass("loading").hide();
	//			$("#formWrapper").hide();
	//			break;
			default:
				$("#warningBox").empty();
				$("#messaggio").html("Errore sconosciuto");
				$("#errorBox").show();
				window.scrollTo(0, 0);
				$("form[name=sellFundForm]").hide();
		}
//	}
}

function changeFundSelect(){
	$("#warningBox").hide();
	$("#errorBox").hide();$("#messaggio").html("");
	var idFondo = $("#selFondo").val();
	if(idFondo == null){	//Fondo presente in ptf per Vendita ma non in ISaldi
		$("#warningBox").empty();
		$("#messaggio").html("Portafoglio non e' aggiornata perche' fondo non esiste piu nel portafoglio");
		$("#errorBox").show();
		window.scrollTo(0, 0);
		$("form[name=sellFundForm]").hide();
		return;
	}
	var fondo = Finance.fundData.fondi[idFondo];
	$(".fondoSelezione").html(fondo.nomefondo);
//	$("#nQuote").val(0).trigger("change");
	$("input[name=codiceFondo]").val(fondo.codicefondo);
	$("input[name=codiceSocietaDiGestione]").val(fondo.codicesocietagestione);
	$("input[name=fondoSicav]").val(fondo.strumento);
	$("input[name=NAV]").val(fondo.nav);
	$("input[name=dataNAV]").val(fondo.datanav);
	$("input[name=codiceIsin]").val(fondo.isin);
	$("input[name=descrizioneFondo]").val(fondo.nomefondo);
	$("input[name=divisa]").val(fondo.tipodivisa);
	$("input[name=codiceFamiglia]").val(fondo.codfamfondo);
	$("input[name=cambio]").val(fondo.cambio);
	$("input[name=dataCambioValuta]").val(fondo.datacambio);
	$("input[name=speseFisse]").val(fondo.speseRimborso);
	$("input[name=checkIncentiviDis]").prop("checked",false);
	//
	$("#dettaglioPicPac").hide();
	$("#dettaglioMultiPac").hide();
	$("#selQuoteImp").hide();
	$("#nQuote").val(0).trigger("change");
	
//	var obs = "OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto";
//	var params = "&codiceIsin="+ idFondo +"&fondo=true";
//	var hrefValue = wrp_script + "/wbOnetoone/2l/jsp/FMP/fida/ricerca.action?" + obs + params;
	var obs = "OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vendita";
	var params = "&codiceInterno="+ fondo.codicefondo +"&fondo=true";										// "&codiceIsin="+ idFondo +"&fondo=true"; //bugfix per 3 fondi con ISIN duplicato
	var hrefValue = wrp_script + "/wbOnetoone/2l/action/investimenti/RicercaFondi.action?" + obs + params;
	$("#apriSchedaFondo").attr("href",hrefValue);
	
	//PIR
	var tipoStrumentoHtml = $(".tipoStrumento").html().substring($(".tipoStrumento").eq(0).text().trim().length);
	if (Finance.fundData.fondi[idFondo].strumento == "F")
		$(".tipoStrumento").html("Fondo" + tipoStrumentoHtml);
	else
		$(".tipoStrumento").html("Sicav" + tipoStrumentoHtml);
	
	$("input[name=pir]").val("N");
	$("#infoPir,#infoPir").hide();	//Select e Preview hanno stesso nome
	if (Finance.fundData.fondi[idFondo].pir != undefined && Finance.fundData.fondi[idFondo].pir == "S"){
		$(".tipoStrumento").html("Fondo PIR" + tipoStrumentoHtml);
		$("#infoPir,#infoPir").show();
		$("input[name=pir]").val("S");
	}
	
	$(".valoreQuota").html(cleanZero(formatDecimal(fondo.nav,3))+" "+ fondo.tipodivisa);
	$(".dataNAV").html(fondo.datanav);
	if (fondo.dettagli.length==1) {
		$("input[name=tipoInvestimento]").val(fondo.dettagli[0].tipo);
		$("input[name=numeroContratto]").val(fondo.dettagli[0].contratto);
		$("input[name=controvalore]").val(fondo.dettagli[0].controvalore.replace(".",""));
		$("input[name=numeroQuote]").val(fondo.dettagli[0].quote);
		$("#dettaglioPicPac").show();
		$(".quoteFondo").html(formatDecimal(fondo.dettagli[0].quote,getNumDec(fondo.codicesocietagestione)).replace(".",","));
		$(".controvaloreFondo").html(fondo.dettagli[0].controvalore+" "+ fondo.tipodivisa);
		if (fondo.dettagli[0].controvaloredivisa!="\u221E") {
			$("input[name=controvaloreValuta]").val(fondo.dettagli[0].controvaloredivisa);
			$("<span>").attr("class","note")
				.append(fondo.dettagli[0].controvaloredivisa + " EUR")
				.append(" al cambio del " + fondo.datacambio)
				.appendTo($(".controvaloreFondo").append("<br />"));
		} else
			$("input[name=controvaloreValuta]").val("inf");

		if (fondo.dettagli[0].tipo=="PIC") {
			$("input[name=importoRata]").val(0);
			$("input[name=rateResidue]").val(0);
			$(".dettaglioPac").hide();
		}
		if (fondo.dettagli[0].tipo=="PAC") {
			$("input[name=importoRata]").val(fondo.dettagli[0].importorata);
			$("input[name=rateResidue]").val(fondo.dettagli[0].rateresidue);
			$("input[name=numeroContratto]").val(fondo.dettagli[0].contratto);
			$(".contrattoPac").html(fondo.dettagli[0].contratto);
			$(".rataPac").html(fondo.dettagli[0].importorata);
			$(".rateResiduePac").html(fondo.dettagli[0].rateresidue);
			$(".dettaglioPac").show();
		}
		$("input[name=sconto]").val(fondo.dettagli[0].sconto);
	} else {
		$("#radioList").html("");
		$("input[name=importoRata]").val(0);
		$("input[name=rateResidue]").val(0);
		$("input[name=tipoInvestimento]").val(0);
		$("input[name=numeroContratto]").val(0);
		$("input[name=controvalore]").val(0);
		$("input[name=controvaloreValuta]").val(0);
		for (var i=0; i<fondo.dettagli.length; i++) {
			curr = fondo.dettagli[i];
			var radioText = templateRadioGroupPIC;
			var radioRate = "";
			if (curr.tipo == "PAC" ) {
				radioText = templateRadioGroupPAC.replace("{{contratto}}", curr.contratto);
				radioRate = templateRadioGroupRate.replace("{{importoRata}}",curr.importorata)
					.replace("{{rateResidue}}", curr.rateresidue);
			}
			var output = templateRadioGroup.replace("{{parita}}", ((i+1) %2 == 1 ?  "dispari" : "pari"))
				.replace("{{riga}}",(i+1))
				.replace("{{valore}}", i)
				.replace("{{text}}", radioText)
				.replace("{{rate}}", radioRate)
				.replace("{{quote}}", formatDecimal(curr.quote, getNumDec(fondo.codicesocietagestione)))
				.replace("{{controvalore}}", curr.controvalore + " "+fondo.tipodivisa);
			$("#radioList").append(output);
		}
		$("#dettaglioMultiPac").show();
		$("input[type=radio][name=multiSel]").change(onchangeFundRadioPIC);
	}
	$("#selQuoteImp").show();
}

function onchangeFundRadioPIC(){
	var idFondo = $("#selFondo").val();
	var fondo = Finance.fundData.fondi[idFondo];
	var sel = fondo.dettagli[$("input[name=multiSel]:checked").val()];
	$("input[name=tipoInvestimento]").val(sel.tipo);
	$("input[name=numeroContratto]").val(sel.contratto);
	$("input[name=controvalore]").val(sel.controvalore.replace(".",""));
	$("input[name=controvaloreValuta]").val((sel.controvaloredivisa=="\u221E") ? "inf" : sel.controvaloredivisa);
	$("input[name=numeroQuote]").val(sel.quote);
	$(".quoteFondo").html(formatDecimal(sel.quote,getNumDec(sel.codicesocietagestione)).replace(".",","));	//TODO - da verificare
	$(".controvaloreFondo").html(sel.controvalore+" "+ fondo.tipodivisa);
	if (sel.tipo=="PIC") {
		$("input[name=importoRata]").val(0);
		$("input[name=rateResidue]").val(0);
		$(".dettaglioPac").hide();
	}
	if (sel.tipo=="PAC") {
		$("input[name=importoRata]").val(sel.importorata);
		$("input[name=rateResidue]").val(sel.rateresidue);
		$(".contrattoPac").html(sel.contratto);
		$(".rataPac").html(sel.importorata);
		$(".rateResiduePac").html(sel.rateresidue);
		$(".dettaglioPac").show();
	}
}

function onkeyCheckNumber(event){
	var keys = [37,39,9,13,8,46];
	var check = ($.inArray(event.keyCode,keys)>-1 || !isNaN(event.key) || event.key=="," && event.target.value.indexOf(",")==-1);
	
	if (!(check)) {
		event.preventDefault();
	} else {
		var decimali = event.target.value.split(",");
		var idFondo = $("#selFondo").val();
		var fondo = Finance.fundData.fondi[idFondo];
		var ndigit = decimali.length>1 && $.inArray(event.keyCode,keys)==-1 ? decimali[1].length+1 : 0;
		var maxDecimali = "inserisciQuote"==event.currentTarget.name ? getNumDec(fondo.codicesocietagestione) :2;
		
		if ( ndigit>maxDecimali ) {
			event.preventDefault();
		}
		
	}
}

function editImporto(event){
	if ($(this).val()!="")
		$("p.note.dettaglicampo").show();
	else
		$("p.note.dettaglicampo").hide();
	var importo = parseFloat($(this).val().replace(",",".")).toFixed(2);
	var valQuot = new Number($("input[name=NAV]").val());
	var cambio = new Number( ($("input[name=divisa]").val()=="EUR") ? 1 : $("input[name=cambio]").val() );
	var cam = (importo*cambio).toFixed(2);
	
	var idFondo = $("#selFondo").val();
	var fondo = Finance.fundData.fondi[idFondo];
	var resTot = (importo/valQuot*cambio).toFixed(getNumDec(fondo.codicesocietagestione));
	$("input[name=valoreImportoAlCambio]").val(cam);
	$("input[name=valoreQuotePerImporto]").val(resTot);
	$("input[name=valoreImportoPerQuote]").val(importo);
	
	$("#riepilogoVendita").html(formatDecimal(importo*1)+" EUR ")
		.append(importo2quote(importo,$("input[name=divisa]").val(), cambio, valQuot).text());
	$("#calcQuote").html(importo2quote(importo,$("input[name=divisa]").val(), cambio, valQuot));
	$("input[name=importo]").val($(this).val().split(",")[0]);
	$("input[name=decImporto]").val($(this).val().split(",")[1]);

}

function editQuote(event){
	if ($(this).val()!="")
		$("p.note.dettaglicampo").show();
	else
		$("p.note.dettaglicampo").hide();
	
	var idFondo = $("#selFondo").val();
	var fondo = Finance.fundData.fondi[idFondo];
	var quote = parseFloat($(this).val().replace(",",".")).toFixed(getNumDec(fondo.codicesocietagestione));
	var valQuot = new Number($("input[name=NAV]").val());
	var cambio = new Number( ($("input[name=divisa]").val()=="EUR") ? 1 : $("input[name=cambio]").val() );
	var cam = quote*valQuot.toFixed(2);
	var result = quote*valQuot;
	var resTot = (result/cambio).toFixed(2);
	$("input[name=valoreImportoAlCambio]").val(cam);
	$("input[name=valoreImportoPerQuote]").val(resTot);
	$("input[name=valoreQuotePerImporto]").val(quote);
	$("#riepilogoVendita").html(quote.replace(".",",") + " quote ")								//formatDecimal(quote*1)
		.append(quote2importo(quote,$("input[name=divisa]").val(), cambio, valQuot).text());
	$("#calcImporto").html(quote2importo(quote,$("input[name=divisa]").val(), cambio, valQuot));
	$("input[name=quote]").val($(this).val().split(",")[0]);
	$("input[name=decQuote]").val($(this).val().split(",")[1]);
}

function selectTipoVendita(){
	
	if($("#dettaglioMultiPac").is(":visible") && !$("input[name=multiSel]").is(":checked")){
		$("#messaggio").html("Scegli quali quote vuoi vendere");
		$("#errorBox").show();
		window.scrollTo(0, 0);
		$("#nQuote").val(0);//.trigger("change");
		return;
	}
	
	$("input[name=tipoVendita]").val($(this).val());
	$("#selQuoteImp .nQuote").hide();
	$("#estinzioneSicav").hide();
	$("input[name=quoteTotali]").val(0);
	$("input[name=chiusuraPiano]").val("");
	$("input[name=estPAC]").prop('checked', false);
	$("input[name=importo]").val(0);
	$("input[name=decImporto]").val(0);
	$("input[name=quote]").val(0);
	$("input[name=decQuote]").val(0);
	
	$("#sezionePirRimborsoTotale").hide();
	$("input[name=pirRimborsoTotale]").val(" ");
	$('#estPACNo').removeAttr('disabled');
	$("#estPACSi").prop("checked", false);
	$("#estPACNo").prop("checked", false);
	$("#nQuoteTesto").hide();
	
	switch ($(this).val()) {

		// Tutte 
		case "1":
			$("#selQuoteImp").show();
			if ($("input[name=tipoInvestimento]").val()=="PAC") {
				if ($("input[name=fondoSicav]").val()=="F")
					$(".selTutte").show();
				else
					$("#estinzioneSicav").show();
			} else {
				$(".selTutte").hide();
				$("#estinzioneSicav").hide();
			}
			var quote = $("input[name=numeroQuote]").val();
			$("input[name=quoteTotali]").val(quote);
			var valQuot = new Number($("input[name=NAV]").val());
			var cambio = new Number( ($("input[name=divisa]").val()=="EUR") ? 1 : $("input[name=cambio]").val() );
			var cam = quote*valQuot.toFixed(2);
			var result = quote*valQuot;
			var resTot = (result/cambio).toFixed(2);
			$("input[name=valoreImportoAlCambio]").val(cam);
			$("input[name=valoreImportoPerQuote]").val(resTot);
			$("input[name=valoreQuotePerImporto]").val(quote);
			$("#riepilogoVendita").html(formatDecimal(resTot*1)+" EUR ")
				.append(importo2quote(resTot,$("input[name=divisa]").val(), cambio, valQuot).text());
			
			$("input[name=pirRimborsoTotale]").val(" ");
 		    if(Finance.fundData.fondi[$("#selFondo").val()].pir != undefined && Finance.fundData.fondi[$("#selFondo").val()].pir == 'S'){
 				$("#sezionePirRimborsoTotale").show();
 				$("#radioPirRimborsoTotaleSi").prop("checked", true);
 				$("#radioPirRimborsoTotaleSi").trigger("change");
 			}
			
		break;  

		// Importo 
		case "2":
			$("#selQuoteImp .selImporto").show();
			$("p.note.dettaglicampo").hide();
			$("input[name=inserisciImporto]").val("");
		break; 

		// Quote 
		case "3":
			$("#selQuoteImp .selQuote").show();
			$("p.note.dettaglicampo").hide();
			$("input[name=inserisciQuote]").val("");
			var codSoc = $("input[name=codiceSocietaDiGestione]").val();
			if("144" == codSoc || "888"  == codSoc){	//solo per Anima
				$("#nQuoteTesto").show();
			}
		break; 
	}
}

// Estinzione PAC
function selectEstPAC(){
	$("input[name=chiusuraPiano]").val($(this).val());
	$(".estinzionePac").html(($(this).val()=="S")?"Si":"No");
}

// Estinzione PIR deve estinguere PAC (se un pac)
function showSelectEstPAC(){
	if($(".selTutte").is(":visible")){
		if("S" == $(this).val()){
			$("#estPACNo").attr('disabled', 'disabled');
			$("#estPACSi").prop("checked", true);
			$("#estPACSi").trigger("change");
		}
		else{
			$('#estPACNo').removeAttr('disabled');
			$("#estPACSi").prop("checked", false);
			$("#estPACNo").prop("checked", false);
			$("input[name=chiusuraPiano]").val("");
		}
	}
	$("input[name=pirRimborsoTotale]").val($(this).val());
}

var linkProsegui = function () {
	
	unbindEvent("#prosegui","click");
	$("#wrapperLoading").addClass("loading");
	
	
	var toprosegui = false;
	switch ($("#nQuote").val()) {
		case "0":
			$("#messaggio").html("Per proseguire bisogna selezionare la quantit&agrave; di quote o importo");
			$("#errorBox").show();
			window.scrollTo(0, 0);
			break;
		case "1":
			if ($("input[name=tipoInvestimento]").val()=="PAC" && $("input[name=chiusuraPiano]").val()=="" && $("input[name=fondoSicav]").val()=="F") {
				$("#messaggio").html("Per proseguire bisogna selezionare Si o No per estinguere il PAC");
				$("#errorBox").show();
				window.scrollTo(0, 0);
				toprosegui = false;
			} else{
				toprosegui = true;
				var quoteTot = parseFloat($("input[name=numeroQuote]").val());
				var quoteTemp = formatDecimal(quoteTot,getNumDec(Finance.fundData.fondi[$("#selFondo").val()].codicesocietagestione)).replace(".",",");	//TODO - da verificare
				$("input[name=quote]").val(quoteTemp.split(",")[0]);
				$("input[name=decQuote]").val(quoteTemp.split(",")[1]);
			}
			break;
		case "2":
			if ($("input[name=inserisciImporto]").val()=="") {
				$("#messaggio").html("Per proseguire bisogna inserire l'importo da vendere");
				$("#errorBox").show();
				window.scrollTo(0, 0);
				toprosegui = false;
			} else if (stringToFloat($("input[name=inserisciImporto]").val()) > stringToFloat($("input[name=controvalore]").val())) {
				$("#messaggio").html("Numero quote maggiore del contratto");
				$("#errorBox").show();
				window.scrollTo(0, 0);
				toprosegui = false;
			} 
			/*else if (stringToFloat($("input[name=inserisciImporto]").val()) == stringToFloat($("input[name=controvalore]").val()) 
					&& $("input[name=tipoInvestimento]").val()=="PAC" && !$(".selTutte").is(":visible") && !$("#estinzioneSicav").is(":visible")
			) {
				if ($("input[name=fondoSicav]").val()=="F")
					$(".selTutte").show();
				else
					$("#estinzioneSicav").show();
				if(Finance.fundData.fondi[$("#selFondo").val()].pir != undefined && Finance.fundData.fondi[$("#selFondo").val()].pir == 'S'){
	 				$("#sezionePirRimborsoTotale").show();
	 				$("#radioPirRimborsoTotaleSi").prop("checked", true);
	 				$("#radioPirRimborsoTotaleSi").trigger("change");
	 			}
				$("#messaggio").html("Vuoi anche estinguere il PAC?");
				$("#errorBox").show();
				window.scrollTo(0, 0);
				prosegui = false;
			}*/
			else{
				toprosegui = true;
				var quoteTot = parseFloat($("input[name=valoreQuotePerImporto]").val());
				var quoteTemp = formatDecimal(quoteTot,getNumDec(Finance.fundData.fondi[$("#selFondo").val()].codicesocietagestione)).replace(".",",");	//TODO - da verificare
				$("input[name=quote]").val(quoteTemp.split(",")[0]);
				$("input[name=decQuote]").val(quoteTemp.split(",")[1]);
				
			}
			break;
		case "3":
			if ($("input[name=inserisciQuote]").val()=="") {
				$("#messaggio").html("Per proseguire bisogna inserire le quote da vendere");
				$("#errorBox").show();
				window.scrollTo(0, 0);
				toprosegui = false;
			} else if (stringToFloat($("input[name=inserisciQuote]").val()) > stringToFloat($("input[name=numeroQuote]").val())) {
				$("#messaggio").html("Numero quote maggiore del contratto");
				$("#errorBox").show();
				window.scrollTo(0, 0);
				toprosegui = false;
			} 
			/*else if (stringToFloat($("input[name=inserisciQuote]").val()) == stringToFloat($("input[name=numeroQuote]").val())
					&& $("input[name=tipoInvestimento]").val()=="PAC" && !$(".selTutte").is(":visible") && !$("#estinzioneSicav").is(":visible")
			) {
				if ($("input[name=fondoSicav]").val()=="F")
					$(".selTutte").show();
				else
					$("#estinzioneSicav").show();
				if(Finance.fundData.fondi[$("#selFondo").val()].pir != undefined && Finance.fundData.fondi[$("#selFondo").val()].pir == 'S'){
	 				$("#sezionePirRimborsoTotale").show();
	 				$("#radioPirRimborsoTotaleSi").prop("checked", true);
	 				$("#radioPirRimborsoTotaleSi").trigger("change");
	 			}

				$("#messaggio").html("Vuoi anche estinguere il PAC?");
				$("#errorBox").show();
				window.scrollTo(0, 0);
				prosegui = false;
			} */
			else
				toprosegui = true;
			break;
		}
	//TODO - copy-paste con valori in . prende come decimale 
	if (toprosegui) {
		$("#warningBox").hide();
		$("#errorBox").hide(); $("#messaggio").html("");
		if ($("input[name=chiusuraPiano]").val()=="")
			$(".estinzionePac").text("No");
		var codiceSocGestione = Finance.fundData.fondi[$("#selFondo").val()].codicesocietagestione;
		var ajaxData = $("form[name=sellFundForm]").serialize();
		
		Finance.tempistiche("VE",codiceSocGestione);
		
		$("form[name=sellFundForm] :input").prop("disabled",true);
		
	    $.ajax({
	           type: "POST",
	           url: wrp_script_direct + "/investimenti/SellFundPreviewJson.action" + "?cf=" + Math.random(),
	           data: ajaxData, 
	           success: function(data) {
	        	   
	        	   $("form[name=sellFundForm] :input").prop("disabled",false);
	        	   
	        	   if (data.esito == "KO" ) {
	        		   var msg = "Si &egrave; verificato un errore di connessione";
	        		   if(data.messaggio == null || data.messaggio == undefined || data.messaggio == ""){ 
	        			   data.messaggio = msg;
	        		   }
	        		   $("#messaggio").html(data.messaggio);
	        		   $("#errorBox").show();
	        		   window.scrollTo(0, 0);
		        	   $("#warningBox").hide();
	        	   } else {
	        		   $("#errorBox").hide();$("#messaggio").html("");
	        		   $("#warningBox").hide();
	        		   $("form[name=sellFundForm]").hide();
	        		   
	        		   $("#riepilogo").show();
	        		   $("#sezionePir").hide();	//,#sezionePirRimborsoTotale
	        		   
//	        		   if(Finance.fundData.fondi[$("#selFondo").val()].pir != undefined && Finance.fundData.fondi[$("#selFondo").val()].pir == 'S'){
//	        				$("#sezionePir").show();
//	        				$("#checkboxPir").prop("checked", false);
	        				
//	        				if($("#nQuote").val() == 1){
//	        					$("#sezionePirRimborsoTotale").show();
//	        				}
//	        				else{
//	        					$("#sezionePirRimborsoTotale").hide();
//	        				}
//	        			}
//	        		   else{
//	        			   $("#sezionePir").hide();	//,#sezionePirRimborsoTotale
//	        		   }
	        		   
	        		   //MIFID2
	        		   datiMifid = data.datiMifid;	//{}; 
	        		   if(datiMifid == undefined){
	        			   datiMifid = {};
//	        			   datiMifid.codiceSocieta = codiceSocGestione;
	        		   }
	        		   
	        		   datiMifid.strumentoFinanziario = Finance.fundData.fondi[$("#selFondo").val()].nomefondo;
	        		   datiMifid.controvaloreOperazione = parseFloat($("input[name=valoreImportoPerQuote]").val()).toLocaleString("it-IT",{minimumFractionDigits:2}) + " &euro;";
	        		   
	        		   
	        		   $('#linkDocCostiOneriIncentDisInv').click(function() {
	        			 //IE non scarica PDF perche GET has variabile con lunghezza troppo alta
							var mapForm    = document.createElement("form");
							mapForm.id	   = "frmPdfMifidDisInv";
							mapForm.style  = "display:none";	//apertura di PDF visualizza elementi nel footer
							mapForm.target = "Map";
							mapForm.method = "POST"; // or "post" if appropriate
							mapForm.action = wrp_script + "/investimenti/PdfMifid2CostiInducementV.action" + "?cf=" + Math.random();

							var mapInput = document.createElement("input");
							mapInput.type = "text";
							mapInput.name = "dMifid";
							mapInput.value = datiMifidPdfDisInv;
							var mapInput2 = document.createElement("input");
							mapInput2.type = "text";
							mapInput2.name = "isPDF";
							mapInput2.value = "true";
							mapForm.appendChild(mapInput);
							mapForm.appendChild(mapInput2);
							document.body.appendChild(mapForm);
							mapForm.submit();
							$("#frmPdfMifidDisInv").remove();	//apertura di PDF ogni volta aggiunge il form nel footer
//			       						open(wrp_script + "/investimenti/PdfMifid2CostiInducementV.action?dMifid="+ datiMifidPdfDisInv + "&isPDF=true");
			       	   });
	        		   
	        		   if(datiMifid.datiCostiAnnuale == undefined){
			        		   datiMifid.datiCostiAnnuale = [
//			        				 {descCostiAnnuale:"<b>Costi del servizio</b>"			,importoCostiAnnuale:""					,percentualeCostiAnnuale:""},
			        				 {descCostiAnnuale:"Spese una tantum &#8208; Uscita"	,importoCostiAnnuale:""					,percentualeCostiAnnuale:""},
//			        				 {descCostiAnnuale:"<b>Costi del prodotto</b>"			,importoCostiAnnuale:""					,percentualeCostiAnnuale:""},
			        				 {descCostiAnnuale:"Spese una tantum &#8208; Uscita"	,importoCostiAnnuale:"0,00 &euro;"		,percentualeCostiAnnuale:"0,00 &#37;"}
			        		];		 
			        		   datiMifid.totaleImportoCosti	 = ""
			   	        		datiMifid.totalePercentualeCosti = "";
			        		   
			        		datiMifid.datiIncentiviAnnuale = [
			        			{descIncentiviAnnuale:"Una tantum"	,importoIncentiviAnnuale:"0,00 &euro;"	,percentualeIncentiviAnnuale:"0,00 &#37;"},
			        			{descIncentiviAnnuale:"Ricorrenti"	,importoIncentiviAnnuale:"0,00 &euro;"	,percentualeIncentiviAnnuale:"0,00 &#37;"}
			        		];
			        		datiMifid.totaleImportoIncentiviAnnuale	 = ""
				        	datiMifid.totalePercentualeIncentiviAnnuale = "";
	        		   }
	        		   
//	        		datiMifid.totaleImportoControvaloreLordo	 = parseFloat($("input[name=valoreImportoPerQuote]").val()); 
//	        		datiMifid.totalePercentualeControvaloreLordo = parseFloat(100);
	        		showDatiMifid2_tab9(datiMifid);
	        		   
	        		$("input[name=numeroAppropriatezza]").val(data.preview.numeroAppropriatezza);
	        	   }
	           },
	           error: function(data) {
	        	   
	        	   $("form[name=sellFundForm] :input").prop("disabled",false);
	        	   
	        	   $("#riepilogo").hide();
	        	   $("form[name=sellFundForm]").hide();
	        	   $("#errorBox").show();
	        	   window.scrollTo(0, 0);
	        	   $("#warningBox").hide();
	           },
	           complete : function() {  
	        	   bindEvent("#prosegui","click",linkProsegui); 
	        	   $("form[name=sellFundForm] :input").prop("disabled",false);
	        	   $("#wrapperLoading").removeClass("loading");
	        	   
	           }
	         });
	} else  {
		bindEvent("#prosegui","click",linkProsegui);
		$("#wrapperLoading").removeClass("loading");
	}
	//TODO - se errore servizio o campi obbligatorie - verifica se fa scroll verso primo errore
}

function indietro() {
	$("#riepilogo").hide();
	$("form[name=sellFundForm]").show();
}

function conferma() {
	
	$("#errorBox").hide();$("#messaggio").html("");
	$("#warningBox").hide();
	
	var errors = [];
	if ($('#sezionePir').is(':visible')) {
		if (!$("#checkboxPir").is(':checked')) {
			errors.push({
						field : $("#checkboxPir"),
						text : "Per proseguire occorre dichiarare di non essere titolare di altri fondi PIR"
					});
			setHasErrors(errors, "#sezionePir");
		}
	}
	
	var checkIncentiviDis = $("input[name=checkIncentiviDis]");
	if(!checkIncentiviDis.is(':checked')) {
//		prosegui = Boolean(prosegui && false);
		errors.push({
			field : checkIncentiviDis.parent().parent().parent(),
			text : "Per proseguire occorre dichiarare di avere preso visione delle informazioni relative agli incentivi"
		});
		setHasErrors(errors, checkIncentiviDis.parent().parent().parent());
		if($("#sezioneCostiInducementDisInv").find(".panel-collapse.collapse.in").length==0) {
			$("#sezioneCostiInducementDisInv i").first(".icon .icon-arrow_down").trigger("click");
		}
	} else {
		$("input[name=checkIncentivi]").val("on");
	}
	
	if (errors.length) {
		$(errors[0].field).trigger('focus');
	}
	else{
		$("form[name=sellFundForm]").attr("action","SellFundConfirm.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vendita");
		$("form[name=sellFundForm]").trigger('submit');
	}
	
}

// OnLoad
function startOnLoad(data){
	if (data.esito=="OK") {
		// Radio selezione multipla (verificare eventuali eventi)
		$("input[type=radio][name=multiSel]").click(function(){
			// Inserire qui eventuali inizializzazioni
			$("#selQuoteImp").show();
		});
		var keys = Object.keys(data.depositi).sort();
		if (keys.length==1) {
			$("#depositoBlock").empty();
			$("<span>", {class:"output"}).html(data.depositi[keys[0]]).appendTo("#depositoBlock");
			$("<input>", {id:"deposito", name:"deposito", type:"hidden", value:keys[0]}).appendTo("#depositoBlock");
		} else {
			for (var dep in keys)
				$("<option>", {value:keys[dep]}).html(data.depositi[keys[dep]]).appendTo("#deposito");
//			for (var dep in Finance.depositData.depositi)
//				$("<option>", {value:dep}).html(data.depositi[dep]).prependTo("#deposito");
			$("#deposito").val(keys[0]);
		}
		if (Finance.status.deposito != null) {
			$("#deposito").val(Finance.status.deposito);
			Finance.status.deposito = null;
		}
	    // inizializza fondi
	    //loadFondi();
	    $("#deposito").change(loadFondi).trigger("change");
	    $("#selFondo").change(changeFundSelect);
	    $("#nQuote").change(selectTipoVendita);
	    $("#prosegui").click(linkProsegui);
	    $("#indietro").click(indietro);
	    $("#conferma").click(conferma);
	    $("input[name=inserisciImporto]").keydown(onkeyCheckNumber);
	    $("input[name=inserisciImporto]").keyup(editImporto);
	    $("input[name=inserisciQuote]").keydown(onkeyCheckNumber);
	    $("input[name=inserisciQuote]").keyup(editQuote);
	    //$("input[name=inserisciImporto]").change(onkeyCheckNumber);
	    //$("input[name=inserisciQuote]").change(onkeyCheckNumber);
	    $("input[name=estPAC]").change(selectEstPAC);
	    $("input[name=radioPirRimborsoTotale]").change(showSelectEstPAC);
	    
	} else {
		$("#messaggio").html(data.messaggio);
		$("#errorBox").show();
		window.scrollTo(0, 0);
		$("#boxSuccesso").hide();
		$("#riepilogo").hide();
		$("form[name=sellFundForm]").hide();
	}
	
	$("input[name=checkIncentiviDis]").prop('checked', false);
	resetHasErrors($("input[name=checkIncentiviDis]").parent().parent().parent());
	$("input[name=checkIncentiviDis]").click(function() {
		resetHasErrors($("input[name=checkIncentiviDis]").parent().parent().parent());
	});
	
}


/*
 * Action confirm
 */

function loadConfirm(jsonData) {
	if (jsonData.esito == "OK") {
		Finance.tempistiche("VE",jsonData.data.codiceSocGestione);
		$("#numRegistrazione").html(jsonData.data.numRegistrazione);
		$(".dataOperazione").html(jsonData.data.dataOperazione);
		
		var tipoStrumentoHtml = $(".tipoStrumento").html().substring($(".tipoStrumento").eq(0).text().trim().length);
		if (jsonData.data.fondoSicav == "F") {
			$("#messaggioFondo").show();
			$(".tipoStrumento").html("Fondo" + tipoStrumentoHtml);
		} 
		else {
			$("#messaggioSicav").show();
			$(".tipoStrumento").html("Sicav" + tipoStrumentoHtml);
		}
		$("#infoPir").hide();
		if (jsonData.pir != undefined && jsonData.pir == "S"){
			$(".tipoStrumento").html("Fondo PIR" + tipoStrumentoHtml);
			$("#infoPir").show();
		}
		
		if (jsonData.data.codiceSocGestione==1 && jsonData.data.codiceIsin!="IT0004786395")
			if (jsonData.data.numeroBanca==19)
				$("#messaggioAnimaSgrBanca19").show();
			else
				$("messaggioAnimaSgr").show();
		$(".depositoTitoli").html(jsonData.data.deposito);
		$(".fondoSelezione").html(jsonData.data.descrizioneFondo);	
		$(".dataNAV").html(jsonData.data.dataNAV);
		$(".valoreQuota").html(cleanZero(formatDecimal(stringToFloat(jsonData.data.NAV),3)) + " " + jsonData.data.divisa);
		$(".quoteFondo").html(jsonData.data.numeroQuote.replace(".",","));
		$(".controvaloreFondo").html(jsonData.data.controvalore + " " + jsonData.data.divisa);
		var cambio = (jsonData.data.divisa=="EUR") ? 1 : jsonData.data.valoreImportoAlCambio/jsonData.data.valoreImportoPerQuote;
		var quote = parseFloat(jsonData.data.quote.replace(',','.'));	//TODO - da valorizzare "quote" e decQuote in tutti 3 casi 
		$("#riepilogoVenditaSx").parent().empty().html(cleanZero(formatDecimal(quote,dec=3)) + " quote ")
			.append(quote2importo(jsonData.data.valoreQuotePerImporto, jsonData.data.divisa, cambio, jsonData.data.NAV).text())		//$("#riepilogoVenditaDx").html(jsonData.data.valoreImportoPerQuote.replace(".",",") + " "+ jsonData.data.divisa);
		if (jsonData.data.tipoInvestimento=="PAC") {
			if (jsonData.data.chiusuraPac=="")
				jsonData.data.chiusuraPac = "N";
			$(".rataPac").html(jsonData.data.importoRata);
			$(".rateResiduePac").html(jsonData.data.rateResidue);
			$(".contrattoPac").html(jsonData.data.numContrattoPAC);
			$(".estinzionePac").html((jsonData.data.chiusuraPac=="S")?"Si":"No");
			$(".dettaglioPac").show();
		} else
			$(".dettaglioPac").hide();
		$("#stampa").attr("href","javascript:window.print()");
		$("#vendi").attr("href", "SellFundSelect.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vendita");
		$("#situazioneOrdini").attr("href", wrp_script + "/wbOnetoone/2l/action/investimenti/SituazioneOrdiniFund.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_situaz_ordini");
		$("#portafoglio").attr("href", "PortafoglioInvestimenti.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_strum_in_portaf");
	} else {
		$("#messaggio").html(jsonData.messaggio);
		$("#errorBox").show();
		window.scrollTo(0, 0);
		$("#boxSuccesso").hide();
		$("#riepilogo").hide();
	}
}


var templateRadioGroup=" \
	<div class=\"radiogroup {{parita}}\"> \
		<div class=\"form-group\"> \
			<div class=\"row\"> \
				<div class=\"col-xs-12\"> \
				    <div class=\"radio inline bigtext\"> \
						<label class=\"textWrapper\"> \
						      <input type=\"radio\" name=\"multiSel\" id=\"radiogroup_{{riga}}\" value=\"{{valore}}\" /> \
						      {{text}} \
						</label> \
					</div> \
				</div> \
			</div> \
		</div> \
		<div class=\"form-group\"> \
			<div class=\"row\"> \
				<div class=\"col-sm-6 \"> \
					<label class=\"control-label-output\">N. quote/azioni nel portafoglio selezionato</label> \
					<span class=\"output\">{{quote}}</span> \
				</div> \
				<div class=\"col-sm-6\"> \
					<label class=\"control-label-output\">Controvalore</label> \
					<span class=\"output\">{{controvalore}}</span> \
				</div> \
			</div> \
		</div> \
		{{rate}} \
	</div>";

var templateRadioGroupRate=" \
	<div class=\"form-group\"> \
	   <div class=\"row\"> \
	       <div class=\"col-xs-6\"> \
	           <label class=\"control-label-output\">Importo rata</label> \
	           <span class=\"output\">{{importoRata}}</span> \
	       </div> \
	       <div class=\"col-xs-6\"> \
	           <label class=\"control-label-output\">Rate residue</label> \
	           <span class=\"output\">{{rateResidue}}</span> \
	       </div> \
	    </div> \
	</div>";

var templateRadioGroupPAC="<span class=\"text\">quote provenienti da PAC n. <strong>{{contratto}}</strong></span>";
var templateRadioGroupPIC="<span class=\"text\">quote provenienti da acquisto unico</span>";
