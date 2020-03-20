
var datiMifidOut = {};




var hideTableTitle = function(){
	// Nasconde la tabella
	swSearchResults.show();
	swSwitchRecap.hide();
}



// Raccolta dati fondi per deposito
var swLoadDatiDeposito = function () {
	$("#warningBox").hide();
	$("#tooltipNoteComm").hide();
	swFundData.hide();
	swFund.hide();
	swFundOutput.hide();
	swFundDataSelector.hide();
	swFundOperation.hide();
	swFundToWrap.hide();
	$('#mifid2Tabella9').hide();
	$("#form01").addClass("loading");
	
	Finance.loadFundData( $("#switchDeposito").val(), "SWITCH", successFondiHandler, errorFondiHandler);
	// Reset degli elementi in pagina
//	$.ajax({
//		url: swFondiUrl,
//		data: {
//			deposito: $("#switchDeposito").val(),
//			type: "SWITCH"
//		},
//		dataType: "json",
//		success: function(data){
//
//			if(data.esito =="OK" && data.messaggioesito != "noFund")
//			{
//				isalFund = data.fondi;
//				// Svuota e popola la select coi dati ricevuti
//				swFund.find("option").remove();
//				swFundCount = 0;
//				$.each(isalFund,function(i,v){
//					var opt = $("<option>").attr("value",i).html(v.nomefondo);
//					if (i==0) opt.attr("selected",true);
//					swFundOutput.html(v.nomefondo); 
//					swFund.append(opt);
//					swFundCount++;
//				});
//				
//				if (Finance.status.codiceIsin!=null) {
//					$("#switchFund").val(Finance.status.codiceIsin);
//					$("#switchFund").attr("disabled","disabled");
//					Finance.status.codiceIsin = null;
//				}	
//				
//				if (swFundCount>1)
//				{
//					swFund.show();
//					swFundOutput.hide();
//				}
//				else
//				{
//					swFund.hide();
//					swFundOutput.show();
//				}
//				
//				swFund.trigger("change");
//				// Sblocca l'interfaccia 
//				$("#form01").removeClass("loading");
//			}
//			else
//			{
//				// Messaggio errore
//				$("#form01").removeClass("loading");
//				$("#warningBox").show();
//			}	
//		}
//	});

}

var successFondiHandler = function(data){
	if(data.esito =="OK" && data.messaggioesito != "noFund")
	{
		isalFund = data.fondi;
		// Svuota e popola la select coi dati ricevuti
		swFund.find("option").remove();
		swFundCount = 0;
		$.each(isalFund,function(i,v){
			var opt = $("<option>").attr("value",i).html(v.nomefondo);
			if (i==0) opt.attr("selected",true);
			swFundOutput.html(v.nomefondo); 
			swFund.append(opt);
			swFundCount++;
		});
		
		if (Finance.status.codiceIsin!=null) {
			$("#switchFund").val(Finance.status.codiceIsin);
			$("#switchFund").attr("disabled","disabled");
			Finance.status.codiceIsin = null;
		}	
		
		if (swFundCount>1)
		{
			swFund.show();
			swFundOutput.hide();
		}
		else
		{
			swFund.hide();
			swFundOutput.show();
		}
		
		swFund.trigger("change");
		// Sblocca l'interfaccia 
		$("#form01").removeClass("loading");
	}
	else
	{
		// Messaggio errore
		$("#form01").removeClass("loading");
		$("#warningBox").show();
	}	
}

var  errorFondiHandler = function(request, status, error) {
//	if(status == "timeout"){
//		if(Finance.prova <4 ){
//			Finance.prova ++;
//			Finance.chiamataIsal(  $("#switchDeposito").val(), "SWITCH", successFondiHandler, errorFondiHandler,Finance.cf,Finance.prova);
//		}
//		else{
//			errorFondiHandler(request, "error", "Proxy Error");
//		}
//	}
//	else{
		$("#form01").removeClass("loading");
		$("#warningBox").show();
//	}
	
}

// Dettagli del fondo 
var swFundDetail = function() {
	swFundToWrap.hide();
	if($(this).val()=="") {

		swDeposito.trigger("change");
	}
	else
	{	

	// Rimostra il selettore e resetta tutto
	swQuotes.val(0).trigger("change");
	$("#switchQuoteSelInput").show();
	$("#switchQuoteSelOutput").hide();
	swSearchResults.hide();
	// swSearchButtonWrap.show();
	swSwitchRecap.hide();

	fundData = isalFund[$(this).val()];
	if($(this).val() == null){	//Fondo presente in ptf per Switch ma non in ISaldi
		$("#form01").removeClass("loading");
		$("#form01").hide();
		$("#messaggio").html("Portafoglio non e' aggiornata perche' fondo selezionato non esiste piu nel portafoglio");
		$("#errorBox").show();
		
		return;
	}
	// Compila i campi nascosti per la spedizione
	swForm[0]["codice"].value = fundData.codicefondo;
	swForm[0]["divisa"].value = fundData.tipodivisa;
	swForm[0]["codAzione"].value = fundData.codazionefondo;
	swForm[0]["codSocieta"].value = fundData.codicesocietagestione;
	// Codice del messaggio 
//	setTTCommMsg(fundData);
	
	swDivisa.html("EUR");

		
	if (typeof swFundDescOutput == "undefined") {
			swFundDescOutput = function(label,valore,defclass) {

				defclass =  (defclass) ? defclass : "col-sm-6 col-xs-12";
				var field = $("<div>").addClass(defclass);
				field.append(
						$("<label>").addClass("control-label-output").html(label),
						$("<span>").addClass("output").html(valore)
					);
				return field;
			}
	}

	swFundDataFields = swFundData.find("span.output");
	// Nav
	swFundDataFields.eq(0).html(formattaNumeriOutput(fundData.nav) + " " + fundData.tipodivisa);
//	swFundData.find("span.datanav").html(dateFormat(fundData.datanav,"dd/mm/yyyy"));
	swFundData.find("span.datanav").html(fundData.datanav);

	// Strumento
	var tipoStrumentoHtml = $("#tipologia").html().substring($("#tipologia").eq(0).text().trim().length);
	swFundDataFields.eq(1).html((fundData.strumento=="F")? "Fondo" + tipoStrumentoHtml : "Sicav" + tipoStrumentoHtml);
	$("#infoPir").hide();
	var pir = fundData.pir;
	if(pir != undefined && pir=="S"){
		swFundDataFields.eq(1).html("Fondo PIR" + tipoStrumentoHtml);
		$("#infoPir").show();
	}
	
	// Link scheda fondo
//	var schedaFondoLink = wrp_script + "/wbOnetoone/2l/jsp/FMP/fida/ricerca.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto&codicesocieta="+ fundData.codicesocietagestione +"&codicecomparto="+ fundData.codicefondo +"&fondosicav="+ fundData.strumento +"&divisa=" + fundData.tipodivisa + "&codicefida="+ fundData.codicefida +"&fondo=true&codiceIsin=" + fundData.isin;
	var schedaFondoLink = wrp_script + "/wbOnetoone/2l/action/investimenti/RicercaFondi.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_switch&codicesocieta="+ fundData.codicesocietagestione +"&codicecomparto="+ fundData.codicefondo +"&fondosicav="+ fundData.strumento +"&divisa=" + fundData.tipodivisa + "&codicefida=" + (fundData.codicefida!=undefined?fundData.codicefida:"")  +"&fondo=true&codiceIsin=" + fundData.isin;
	swFundDataFields.eq(2).empty().append($("<a>").html("Mostra scheda fondo").addClass("btn btn-primary").attr({"href":schedaFondoLink,"target":"_self"}));
	

	if (fundData.dettagli.length > 1)
	{
		// Multiselettore
		swMultiSel = $("<div>").addClass("borderFormRounded");
		
		$.each(fundData.dettagli,function(i,v){
			
			var selectorWrap = $("<div>").addClass("radiogroup " + ((i+1) %2 == 1 ?  "dispari" : "pari"));

			// Selettore con titolatura
			var swRadioLabel = $("<span>").addClass("text").html((v.tipo == "PAC") ? "quote provenienti da " + v.tipo + " n. <strong>" + v.contratto + "</strong>" : "quote provenienti da acquisto unico");
			var swRadio = $("<div>").addClass("radio inline bigtext").append($("<label>").addClass("textWrapper").append(
					$("<input>").attr({"type":"radio","value":i,"name":"radioFundSelector"}).click(function(){
						// Rimuove il selettore
						swFundDataSelector.hide();
						var index = $(this).val();
						fundData.selectedDetail = $(this).val();
						swFundRecap({
							"tipo" : fundData.dettagli[index].tipo,
							"contratto": fundData.dettagli[index].contratto,
							"importorata": fundData.dettagli[index].importorata + " " + fundData.tipodivisa,
							"rateresidue": fundData.dettagli[index].rateresidue,
							"quote":fundData.dettagli[index].quote,
							"controvalore":fundData.dettagli[index].controvalore + " " + fundData.tipodivisa
						});
					}),
					swRadioLabel
				));

			selectorWrap.append(
					$("<div>").addClass("form-group").append(
						$("<div>").addClass("row").append($("<div>").addClass("col-xs-12").append(swRadio)))).append(
							$("<div>").addClass("form-group").append(
								$("<div>").addClass("row").append(
									swFundDescOutput("N. quote/azioni nel portafoglio selezionato",v.quote),
									swFundDescOutput("Controvalore",v.controvalore + " " +  fundData.tipodivisa)
						))
			);

			// SOLO PAC
			if (v.tipo == "PAC")
				selectorWrap.append($("<div>").addClass("form-group").append(
					$("<div>").addClass("row").append(
						swFundDescOutput("Importo rata",v.importorata + " " +  fundData.tipodivisa),
						swFundDescOutput("Rate residue",v.rateresidue)
				)));

			swMultiSel.append(selectorWrap);

		})
		swSwitchRecap.hide();
		swFundOperation.hide();
		swSearchButton.addClass("btn-disabled");

		swFundDataSelector.empty().show().append($("<div>").addClass("row").append($("<div>").addClass("col-xs-12").append($("<label>").addClass("control-label-output").html("Seleziona un elemento"),swMultiSel)));
	} else {
		fundData.selectedDetail = 0;
		swFundRecap({
			"tipo" : fundData.dettagli[0].tipo,
			"contratto": fundData.dettagli[0].contratto,
			"importorata": fundData.dettagli[0].importorata + " " + fundData.tipodivisa,
			"rateresidue": fundData.dettagli[0].rateresidue,
			"quote":fundData.dettagli[0].quote,
			"controvalore":fundData.dettagli[0].controvalore + " " + fundData.tipodivisa
		})

	}
	swFundData.show();
	$("input[name=radioPirRimborsoTotale]").change(showSelectEstPAC);
	}
	
	$('#mifid2Tabella9').hide();
}


var swFundRecap = function(data){

	// Aggiorna i dati del contratto
	swForm[0]["tipocontratto"].value = data.tipo;
	
	// Popola il recap con i dati e lo mostra con la parte operativa
	var outputFields = swFundOperation.find("span.output");
	swFundDataSelector.hide();
	
	if (data.tipo == "PAC"){
		outputFields.eq(0).html(data.contratto);
		outputFields.eq(1).html(data.importorata);
		outputFields.eq(2).html(data.rateresidue);
		swFundOperation.find(".pac").show();
	}
	else
	{
		swFundOperation.find(".pac").hide();
	}
	var visquote = data.quote.toString().replace(".",",");
	outputFields.eq(3).html(visquote);
	// Valuta nel controvalore
	if (fundData.tipodivisa != "EUR") data.controvalore =data.controvalore + "<br><span class='note'>corrispondenti a <strong>"+ (fundData.dettagli[0].controvaloredivisa) + " EUR</strong><br> al cambio del "+ fundData.datacambio + "</span>";

	outputFields.eq(4).html(data.controvalore);

	// Assegna il corretto numero di decimali a seconda di quelli presenti nelle quote
	var quotedecimali = getNumDec(fundData.codicesocietagestione);
	/*
	if (visquote.split(",")[1]) quotedecimali = visquote.split(",")[1].length;
	*/
	swQuoteDec.attr("maxlength",quotedecimali);


	// Sblocca il pulsante 
	swSearchButton.removeClass("btn-disabled");
	swFundOperation.show();

}

var swQuotesChange = function(){

	if(typeof fundData != "undefined")
	{
		fundData.valQuotexImporto =0;
		fundData.valImportoxQuote =0;
	}

	//	Nasconde tutti
	$(".swQuotesSel").hide();
	$("#estinzioneSicav").hide();
	$("#sezionePirRimborsoTotale").hide();
	$("input[name=pirRimborsoTotale]").val(" ");
	
	// Resetta tutto
	$("#switchQuoteSelInput input[type=text]").val("");
	$("#switchQuoteSelInput input[type=radio]").attr("checked",false);
	$("#switchQuoteImporto, #switchImportoQuote").parents(".output").hide();

	switch($(this).val()) {
    case "1":
    		// CASO PAC
      	 	if(swForm[0]["tipocontratto"].value == "PAC") {
	       	 	if(fundData.strumento == "F")
	       	 		$("#switchQuotes1").show();
	       	 	else
	       	 		$("#estinzioneSicav").show();
			}
      	 	//else //TODO check
			swSearchButtonWrap.show();
			
			$("input[name=pirRimborsoTotale]").val(" ");
 		    if(fundData.pir != undefined && fundData.pir == 'S'){
 				$("#sezionePirRimborsoTotale").show();
 				$("#radioPirRimborsoTotaleSi").prop("checked", true);
 				$("#radioPirRimborsoTotaleSi").trigger("change");
 			}
 		    
        break;
    case "2":
    	$("#switchQuotes2").show();
    	$("#switchQuotes2 .output").hide();
    	swSearchButtonWrap.show();

      	break;

    case "3":
    	$("#switchQuotes3").show();
		$("#switchQuotes3 .output").hide();
		swSearchButtonWrap.show();

    	break;

    default:
        	swSearchButtonWrap.hide();
        break;
	}
	


}

//Estinzione PIR deve estinguere PAC (se un pac)
function showSelectEstPAC(){
	if($("#switchQuotes1").is(":visible")){
		if("S" == $(this).val()){
			$("#estPACNo").attr('disabled', 'disabled');
			$("#estPACSi").prop("checked", true);
			//$("#estPACSi").trigger("change");
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


// Carica la tabella e attiva la ricerca
var swGetTable = function(){

	// Se il bottone non e' disabilitato
	if(!$(this).hasClass("btn-disabled")){

		// Set controlli prima dello switch


		resetErrors(swForm);

		var errors = [];
		if (swQuotes.val()=="0")
		{
			errors.push({ field: swQuotes, text: "Seleziona quante quote vuoi vendere"});
		}
		else
		{
			// Casistiche con select valorizzata
			switch(swQuotes.val()) {
		    case "1":
		    		if(fundData.dettagli[fundData.selectedDetail].tipo == "PAC") {
			       	 
		    			// Indicazione non fornita
		    			if (swForm.find("[name=ChiusuraPiano]:checked").length<=0 && fundData.strumento=="F") {
		    				errors.push({ field: swForm.find("[name=ChiusuraPiano]").parent().parent().parent().parent().parent(), text: "Per proseguire bisogna selezionare se si vuole anche estinguere il PAC" });
		    			}
		    		}
		        break;
		    case "2":
		    	// Importo
		    	$("#switchQuotes2").show();

		    		if((swImporto.val() == "" || swImporto.val() == "0") && (swImportoDec.val() == "" || swImportoDec.val() == "0"))
		    		{
		    			errors.push({ field: swImporto.parents(".swQuotesSel"), text: "Specificare un importo valido"});
		    		}
		    		else
		    		{
		    				
		    			if(parseFloat(swImporto.val()+"."+ swImportoDec.val())>parseFloat(fundData.dettagli[fundData.selectedDetail].controvaloredivisa.replace(".","").replace(",",".")))
		    			errors.push({ field: swImporto.parents(".swQuotesSel"), text: "L'importo deve essere pari o minore del controvalore"});
		    		}
	
		      	break;

		    case "3":
		    	// Quote
				$("#switchQuotes3").show();

					if((swQuote.val() == "" || swQuote.val() == "0") && (swQuoteDec.val() == "" || swQuoteDec.val() == "0"))
		    		{
		    			errors.push({ field: swImporto.parent(), text: "Specificare le quote"});
		    		}
		    		else
		    		{
		    				
		    			if(parseFloat(swQuote.val()+"."+ swQuoteDec.val())>parseFloat(fundData.dettagli[fundData.selectedDetail].quote))
		    			errors.push({ field: swQuote.parent(), text: "Le quote devono essere pari o minore a quelle possedute"});
		    		}

		    	break;

		    default:
		        	
		    	/* TODO RESET TUTTI I CAMPI */
		        break;
			}


		}	


		if (errors.length>0){
			setHasErrors(errors, '#form01');
			}
		else
		{

			// Trasforma il selettore quote in un campo di output
			$("#switchQuoteSelInput").hide();
			
			// Output quote
			swQuotesMsg = "";
			switch(swQuotes.val()) {
		    case "1":
		    		swQuotesMsg= swQuotesMsg + "Tutte le quote nel deposito selezionato.";
		    		if ($("#form01 input[name=ChiusuraPiano]:checked") && fundData.dettagli[fundData.selectedDetail].tipo == "PAC" && fundData.strumento=="F") {
		    			swQuotesMsg = swQuotesMsg + " Chiusura PAC: <strong>" + $("#form01 input[name=ChiusuraPiano]:checked").val().toUpperCase() +"</strong>";
		    		}
		        break;

		    case "2":
		    		var impoVend = fundData.valImportoxQuote.replace(".",","); 	// parseFloat(swImporto.val() + "." + swImportoDec.val());
			    	swQuotesMsg= swQuotesMsg + (impoVend) + " EUR";					//formattaNumero
					swQuotesMsg= swQuotesMsg + "<br><span class='note'>corrispondenti a " + swImportoQuote.html().replace(".",",") + " quote<br>" ;
					// swQuotesMsg= swQuotesMsg + "e <strong>"+ (impoVend * fundData.cambio).toFixed(2) + " " + fundData.tipodivisa + " </strong> al cambio del "+fundData.datacambio+"</span>";
		
		    	break;

		    case "3":

			    	// Importo da quote
//			    	swQuotesMsg= swQuotesMsg + ( formattaNumero(parseFloat(swQuote.val() + "." + swQuoteDec.val()).toFixed(3)) + " ");
			    	swQuotesMsg= swQuotesMsg + fundData.valQuotexImporto.replace(".",",");
					swQuotesMsg= swQuotesMsg + "<br><span class='note'>corrispondenti a " + swQuoteImporto.html().replace(".",",") + " EUR <br>";
					// swQuotesMsg= swQuotesMsg + "e " + (fundData.valImportoxQuote*fundData.cambio).toFixed(2) + " "+ fundData.tipodivisa + " al cambio del " + fundData.datacambio;
				
		    	break;


			}
			$("#switchQuoteSelOutput").show();
			swQuoteSelOutput.html(swQuotesMsg);


			// Blocca la console
			$("#form01").addClass("loading");

			//TODO - check when dettagli.length>1
			//MIFID2 - 1/4
			
			var controValore = "";
			if(fundData.valImportoxQuote == 0){
				var importoTotale = fundData.dettagli[0].controvalore;
				if(fundData.tipodivisa != "EUR"){
					importoTotale = fundData.dettagli[0].controvaloredivisa;
				}
				 var valoreIT = importoTotale.split(",");
				 var valoreITInteger = valoreIT[0].split(".");
				 var valoreEn = "";
				 for(var idx=0; idx<valoreITInteger.length; idx++){
					 valoreEn += valoreITInteger[idx];
				 }
				 if(valoreIT.length>1){
					 valoreEn += "." + valoreIT[1];
				 }
				 controValore = parseFloat(valoreEn);
			 }
			 else{
				 controValore =  parseFloat(fundData.valImportoxQuote);
			 }
			$("#errorBox").hide();
			
			
			// Allestisce l'array di dati da postare
			var dataToPost = {
					codice:swForm[0]["codice"].value,			//codInt
					valutaRif:swForm[0]["divisa"].value,
					codAzione:swForm[0]["codAzione"].value,
					codSocieta:swForm[0]["codSocieta"].value,
					descrizione: $("#descrizione").val(),
					macroCat: $("#macroCat").val(),
					codRating: $("#codRating").val(),
					fesRendimento: $("#fesRendimento").val(),
					dividendi: $("#dividendi").val()
					,controValoreFondoOrigine 	: controValore		//MIFID2 - 2/4
					,scontoFondoOrigine 		: fundData.dettagli[0].sconto
					,depositoSelezionato		: $("#switchDeposito").val()
//					,codiceFondo				: 		//TODO codiceComparto
					}

			$.ajax({
				url: swFondiSwitch,
				dataType: "json",
				type: "POST",
				data: dataToPost,
				success: function(data)
				{
					if(data.esito != "OK"){
						$("#messaggio").html(data.esito);
			    		$("#errorBox").show();
			    		swFundToWrap.hide();
			    		$("#form01").removeClass("loading");
					}
					else{
					// Rimuove il bottone di ricerca
					swSearchButtonWrap.hide();

					// Carica i dati dei comparti
					swDataSwitchAll = data.data;
					swDataSwitch = [];
					fesSearchData = data.statistiche;
					
					var currCode = $("#switchFund").val();

					// Appende ai dati il pulsantino per la selezione
					if (typeof swDataSwitchAll != "undefined") {
						$.each(swDataSwitchAll,function(i,v){
							if(v.isin == currCode)
								return;
							var pir='';
							if (v.pir!=undefined && v.pir == "S"){
								v.nome = "<span class=\"labelpir\">PIR</span>" + v.nome;
								pir = v.pir;
							}
							v.selezione = "<a href=\"javascript:;\" onclick=\"swGetFundToSwitch("+v.codiceInterno+")\">seleziona</a>";
							v.rendimento1a=v.rendimento1a.replace(".",",");
							v.nav=v.nav.replace(".",",");
							v.fesRating = "<div class=\"rating\">";
							v.indexAss = i;
							// Rating
							for (x=1;x<=5;x++) v.fesRating += "<i class=\"icon icon-corona"+ ((x<=v.rating)? " icon-corona-on" : "") +"\"></i>";
							v.fesRating += "</div>";
							swDataSwitch.push(v);
						});
					}

					// Crea e riempie la tabella dei risultati nell'apposito wrapper
					var swTable = $("<table>").addClass("sortableTable").attr("id","tabellaswitch");
					swTable.append($("<thead>").append($("<tr>").append(
						$("<th>").attr({"data-field":"nome","data-sortable":"true"}).html("Nome"),
						$("<th>").attr({"data-field":"fesRating","data-sortable":"true"}).html("Rating"),
						$("<th>").attr({"data-field":"assogestioni","data-sortable":"true"}).html("Cat. Assogestioni"),
						$("<th>").attr({"data-field":"rendimento1a","data-sortable":"true"}).html("Rend. 1A%"),
						$("<th>").attr({"data-field":"nav","data-sortable":"true"}).html("NAV"),
						$("<th>").attr({"data-field":"divisa","data-sortable":"true"}).html("VAL"),
						$("<th>").attr({"data-field":"selezione","data-sortable":"false"}).html("")
					)));

					swSearchTableWrapper.empty().append(swTable);
					styleSortTable();

					swTable.bootstrapTable({
			            data: swDataSwitch,
			            sortable: true,
			            sortOrder: "asc",
			            sortName: "nome",
			            pagination : "true",
			            paginationVAlign : "top",
			            pageSize: 15,
			            pageList: [15, 30, 60, 'tutti'],
						rowStyle: function(row, index) {
							if(index % 2 == 0)
							{
								return {
									classes: 'dispari'
								}
							}
							else {
								return {
									classes: 'pari'
								}
							}
						   }
			        });
			       	
					/*
					var switchTb = new TableOrderer('switch', {
							data: swDataSwitch,
							cellsClasses: ["first", "center", "center", "center"],
							paginate: true
						});
					switchTb.orderTable('fesRating', 'desc');
					*/			
					// var switchTb = swTable;		
					$("#form01").removeClass("loading");
					
					swSearchResults.show();

					
					//MIFID - 3/4
					datiMifidOut = data.datiMifid;	//{};
			 		if(datiMifidOut == undefined){
			 			datiMifidOut = {};
//			 			datiMifidOut.codiceSocieta = fundData.codicesocietagestione;
			 		}
			 		
			 		datiMifidOut.strumentoFinanziario = fundData.nomefondo;
			 		if(datiMifidOut.datiCostiAnnuale == undefined){
			      		   datiMifidOut.datiCostiAnnuale = [
//			      				 {descCostiAnnuale:"<b>Costi del servizio</b>"			,importoCostiAnnuale:""					,percentualeCostiAnnuale:""},
			      				 {descCostiAnnuale:"Spese una tantum &#8208; Uscita"	,importoCostiAnnuale:""					,percentualeCostiAnnuale:""},
//			      				 {descCostiAnnuale:"<b>Costi del prodotto</b>"			,importoCostiAnnuale:""					,percentualeCostiAnnuale:""},
			      				 {descCostiAnnuale:"Spese una tantum &#8208; Uscita"	,importoCostiAnnuale:"0,00 &euro;"		,percentualeCostiAnnuale:"0,00 &#37;"}
			      			];		 
			      		   datiMifidOut.totaleImportoCosti	 = ""
			 	           datiMifidOut.totalePercentualeCosti = "";
			      		   
			      		  datiMifidOut.datiIncentiviAnnuale = [
			      			{descIncentiviAnnuale:"Una tantum"	,importoIncentiviAnnuale:"0,00 &euro;"	,percentualeIncentiviAnnuale:"0,00 &#37;"},
			      			{descIncentiviAnnuale:"Ricorrenti"	,importoIncentiviAnnuale:"0,00 &euro;"	,percentualeIncentiviAnnuale:"0,00 &#37;"}
			      		];
			      		datiMifidOut.totaleImportoIncentiviAnnuale	 = ""
				        datiMifidOut.totalePercentualeIncentiviAnnuale = "";
					 }
					 datiMifidOut.controvaloreOperazione = parseFloat(controValore).toLocaleString("it-IT",{minimumFractionDigits:2}) + " &euro;";
					 
					 $('#linkDocCostiOneriIncentDisInv').click(function() {
						 
						 var mapForm 		= document.createElement("form");
							mapForm.target 	= "Map";
							mapForm.id		= "frmPdfMifidDisInv";
							mapForm.style	= "display:none";	//apertura di PDF visualizza elementi nel footer
							mapForm.method 	= "POST"; // or "post" if appropriate
							mapForm.action 	= wrp_script + "/investimenti/PdfMifid2CostiInducementV.action";

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
//    						open(wrp_script + "/investimenti/PdfMifid2CostiInducementV.action?dMifid="+ datiMifidPdfDisInv + "&isPDF=true");
					 });
					 showDatiMifid2_tab9(datiMifidOut);
					 if($("#mifid2Tabella9").is(":visible")) {
						 $("input[name=checkIncentiviDis]").prop('checked', false);
						 		resetHasErrors($("input[name=checkIncentiviDis]").parent().parent().parent());
						 		$("input[name=checkIncentiviDis]").click(function() {
						 			resetHasErrors($("input[name=checkIncentiviDis]").parent().parent().parent());
						 		});
						 }
					}
				}
			});
			
			swFundToWrap.show();
			
			
			//MIFID2 - 3/3
		}
	}
	
	
}


var swGetFundToSwitch = function(index){

	// raccoglie il dato dall'indice
	fundData.switchFund = null;
	var i = 0;
	while(fundData.switchFund == null || i<swDataSwitch.length) {
		if (swDataSwitch[i].codiceInterno == index)
			fundData.switchFund = swDataSwitch[i];
		i++;
	}
	//fundData.switchFund = swDataSwitch[i];

	// Rielabora eventuali dati per proporli
	if (typeof swRevFundToSwitch !="undefined") swRevFundToSwitch(fundData.switchFund);

	// Valorizza i dati
	$.each(swSwitchRecap.find("span.output"),function(i,v){
		v = $(v);
		
		// Inserire valuta
		var htmlcode = fundData.switchFund[v.attr("data-field")];
		if (v.attr("data-field") == "isotmin" || v.attr("data-field") == "isotsuc") 
			htmlcode = htmlcode + " EUR";
		else if (v.attr("data-field") == "nav") 
			htmlcode = htmlcode + " " + fundData.tipodivisa;

		//<span class="labelpir">PIR</span>
		else if(v.attr("data-field") == "nome"){
			var pos = 0;
			if(fundData.switchFund.pir!=undefined && fundData.switchFund.pir == "S"){
				pos = 33;
			}
			htmlcode = htmlcode.substring(pos);
			fundData.switchFund[v.attr("data-field")] =  htmlcode;
		}
		
		if(v.attr("data-field") == "tipologia"){
			var tipoStrumentoHtml = v.html().substring(v.text().trim().length);
			var fondoSicav = "Sicav";
			if(fundData.switchFund["fondosicav"] == "F"){
				fondoSicav = "Fondo";
			}
			v.html(fondoSicav + tipoStrumentoHtml);
			$("#infoPir2").hide();
			if(fundData.switchFund.pir!=undefined && fundData.switchFund.pir == "S"){
				fondoSicav = "Fondo PIR";
				v.html(fondoSicav + tipoStrumentoHtml);
				$("#infoPir2").show();
			}
		}
		else{
			v.html(htmlcode);
		}

	});

	
	// Nasconde la tabella e mostra i dati per lo switch effettivo	
	swSearchResults.hide();
	// Sistema il recap prima di mostrarlo
	$("#switchProcediButton").show();
	$("#switchConferma").hide();
	$("#erroreForm").hide();
	
	swSwitchRecap.show();
	$("#switchTempisticheButton").hide();

}



// Funzioni di filtro sui vari campi
numberFilter = function(){
	var field = $(this);
	var fVal = field.val();
	var filteredVal = "";

	fundData.valQuotexImporto = fundData.valImportoxQuote = 0;

	$.each(fVal.split(""),function(i,v){
		if (("0123456789").indexOf(v)>=0)
			filteredVal = filteredVal + v;
	});	
	
	field.val(filteredVal);

	var corrispondenza = "";

	// A seconda dell'id del campo fa un refresh o l'altro
	if(field.attr("id").indexOf("Importo")>=0)
	{
		if ((swImporto.val()=="" || swImporto.val()=="0") && (swImportoDec.val()=="" || swImportoDec.val()=="0"))	
		{	
			$("#switchQuotes2 .output").hide();
		}	
		else
		{	
			// Determina quanti decimali
			var numDecimali =  getNumDec(fundData.codicesocietagestione);
			/*
			if(fundData.codicesocietagestione=="101" ||fundData.codicesocietagestione=="110") numDecimali = 2;
            */
			
			// Aggiorna quote
			var importoInput = parseFloat(swImporto.val() +"." + swImportoDec.val()).toFixed(2);
			fundData.valImportoxQuote = importoInput;
			
			if (fundData.tipodivisa == "EUR")
			{
				fundData.valQuotexImporto = (importoInput/fundData.nav).toFixed(numDecimali);
			}
			else
			{
				fundData.valQuotexImporto = (importoInput /(fundData.nav / fundData.cambio)).toFixed(numDecimali);
			}

			swImportoQuote.html(fundData.valQuotexImporto.toString().replace(".",","));

			corrispondenza = "corrispondenti a " +  fundData.valQuotexImporto + " quote";
			fundData.dettagli[fundData.selectedDetail].controvalorevaluta = (parseFloat(fundData.valQuotexImporto * fundData.nav)).toFixed(2);
			if (fundData.tipodivisa != "EUR") {
				corrispondenza = corrispondenza + "<br>e " + fundData.dettagli[fundData.selectedDetail].controvalorevaluta + " " + fundData.tipodivisa +" al cambio del " + fundData.datacambio;
			}
			$("#switchQuotes2 .output").html(corrispondenza).show();

		}
	}
	else
	{
		if ((swQuote.val()=="" || swQuote.val()=="0") && (swQuoteDec.val()=="" || swQuoteDec.val()=="0"))	
		{	
			$("#switchQuotes3 .output").hide();
		}	
		else
		{	
			// Determina quanti decimali
			var numDecimali = getNumDec(fundData.codicesocietagestione);
			
			// Aggiorna importo 
			var quoteInput = parseFloat(swQuote.val()+"." + swQuoteDec.val()).toFixed(numDecimali);
			fundData.valQuotexImporto = quoteInput;

			if (fundData.tipodivisa == "EUR")
			{
				fundData.valImportoxQuote = (quoteInput*fundData.nav).toFixed(2);
			}
			else
			{
				fundData.valImportoxQuote = (quoteInput*(fundData.nav / fundData.cambio)).toFixed(2);
			}
			swQuoteImporto.html(fundData.valImportoxQuote.toString().replace(".",","));

			corrispondenza = "corrispondenti a " +  fundData.valImportoxQuote.toString().replace(".",",") + " EUR";
			fundData.dettagli[fundData.selectedDetail].controvalorevaluta = (parseFloat(fundData.valQuotexImporto * fundData.nav)).toFixed(2);
			if (fundData.tipodivisa != "EUR") corrispondenza = corrispondenza + "<br>e "+ fundData.dettagli[fundData.selectedDetail].controvalorevaluta + " " + fundData.tipodivisa +" al cambio del " + fundData.datacambio;

			$("#switchQuotes3 .output").html(corrispondenza).show();
		}
	}
}


// Inizializzazioni campi e parti funzionali
$(function(){

	swDeposito  = $("#switchDeposito").on("change",swLoadDatiDeposito);

	swFund = $("#switchFund").change(swFundDetail);
	swFundOutput = $("#switchFundOutput").hide();
	
	swFundData = $("#switchFundData");
	swFundDataSelector = $("#switchFundDataSelector");
	swFundOperation = $("#switchFundOperation"); 
	swSearchButtonWrap = $("#switchSearchButton").hide();
	swSearchButton = swSearchButtonWrap.find("a.btn").click(swGetTable);
	swSearchResults = $("#switchSearchResults");
	swSwitchRecap = $("#switchSwitchRecap");
	swQuotes = $("#switchQuotes").on("change",swQuotesChange);
	swSearchTableWrapper = $("#switchSearchTableWrapper");
	swDivisa = $(".viewdivisa")
	swQuoteSelOutput = $("#switchQuoteSelOutput .output")
	swFundToWrap = $("#switchToFundWrapper");

	$("#switchQuoteSelOutput a").click(function(click){

		swFundToWrap.hide();		
		// Rimostra il selettore
		$("#switchQuoteSelInput").show();

		// Nasconde l'output
		$("#switchQuoteSelOutput").hide();

		// Nasconde la tabella
		swSearchResults.hide();
		swSwitchRecap.hide();

		// Mostra il pulsante 
		swSearchButtonWrap.show();

	});


	$("#switchChangeFund").click(hideTableTitle);



	// Attiva i meccanismi di ricalcolo
	swImporto = $("#switchImporto").on("keyup",numberFilter);
	swImportoDec= $("#switchImportoDec").on("keyup",numberFilter);
	swImportoQuote = $("#switchImportoQuote");

	swQuote = $("#switchQuote").on("keyup",numberFilter);
	swQuoteDec = $("#switchQuoteDec").on("keyup",numberFilter);
	swQuoteImporto = $("#switchQuoteImporto");


	// Campi del form nascosti per la spedizione
	swForm = $("#form01");
	
	$.ajax({
	    url: swDepositiUrl,
	    data: {},
	    dataType: "json",
	    success: function(data) {
	    	if (data.esito == "OK") {
		        var keys = Object.keys(data.depositi).sort();
		        if (keys.length==1) {
		            var block = $("#switchDeposito").parent();
		            $("#switchDeposito").remove();
		            block.append($("<span>", {class:"output"}).html(data.depositi[keys[0]]));
		            block.append($("<input>", {id:"switchDeposito", name:"switchDeposito", type:"hidden", value:keys[0]}));
		        } else {
		        	for (var dep in keys)
						$("<option>", {value:keys[dep]}).html(data.depositi[keys[dep]]).appendTo("#switchDeposito");
//		            for (var dep in data.depositi)
//		            	$("<option>", {value:dep}).html(data.depositi[dep]).prependTo("#switchDeposito");
		            $("#switchDeposito").val(keys[0]);
		        }
		        if (Finance.status.depositoSelezionato != null) {
					$("#switchDeposito").val(Finance.status.depositoSelezionato);
					Finance.status.deposito = null;
				}
		        
		        if(data.listaDepPIR!=null) {
		        		listaDepPIR=data.listaDepPIR;
		        		if(data.erroreDepPIR!=null ) {
		        			erroreDepPIR=data.erroreDepPIR;
		        		}
		        }
		        
		        
		    	if (swFund.val() != "") {
		    		swFund.trigger("change");
		    	} else {
		    		swLoadDatiDeposito();
		    	}
	    	} else {
	    		$("#form01").hide();
	    		$("#warningBox").hide();
	    		$("#messaggio").html(data.messaggio);
	    		$("#errorBox").show();
	    	}
	    	
	    }
	});
	

	/* FUNZIONI EREDITATE DALLA RICERCA */
	
	// Autocomplete googlestyle
	// Ricerca nome o ISIN
	$.fn.magicSearch = function(callBack)
	{
		var msfield = $(this);
		msfield.wrap($("<div>").addClass("magicSearch"));
		// Appende il pulsante per la ricerca, di fianco al campo stesso
		var msButton = $("<a>").addClass("msButton icon icon-r-dettaglio").attr({"href":"javascript:;","title":"ricerca"});
		msButton.click(function()
			{
				// Se deve fare il reset, lo fa, altrimenti parte con la ricerca.
				if($(this).hasClass("reset"))
				{
					$(this).removeClass("reset icon-delete_table");
					$(this).addClass("icon-r-dettaglio");
					msfield.val("");
					if(callBack) callBack();
				}
				else
				{
					msOptList.hide();
					if(callBack) callBack();
					$(this).removeClass("icon-r-dettaglio");
					$(this).addClass("reset icon-delete_table");
				}
			}
		)
		
		var msOptList = $("<ul>").addClass("msList").hide();
		msfield.parent().append(msButton,msOptList);	
		msfield.on("keyup",function(e){
			msButton.removeClass("reset");
			e.preventDefault();
			if (msfield.val().length >= 2)
			{
				if(e.keyCode == 13) {
					msButton.click();
				}
				else
				{
					//Svuota l'elemento
					msOptList.empty();
					if(typeof swDataSwitch !="undefined")
					{	
						$.each(swDataSwitch,function (i,v)
						{
							// Se il criterio di ricerca corrisponde, riduce o allunga la lista
							if(v.nome.toLowerCase().indexOf(msfield.val().toLowerCase()) >=0 ){
								if (v.pir!=undefined && v.pir == "S"){
									v.nome = v.nome.indexOf("</span>")>-1 ? v.nome.substring(v.nome.indexOf("</span>")+7):  v.nome ;
								}
								var elem = $("<li>").append("<strong>"+ v.nome + "</strong><br>ISIN:" + v.isin).attr("href","javascript:;");
								elem.click(function() {
									var mSB = $(this).parents(".magicSearch");
									mSB.find("input").val(v.nome);
									mSB.find("ul").hide();
									$(mSB.find(".msbutton")).trigger("click");
									}
								);
								msOptList.append(elem);
							}

						});
					}
					msOptList.show();
				}
			}
			else
			{
				msOptList.hide();
			}
		}); 
		
		msfield.on("blur",function(){setTimeout(function(){msOptList.hide()},300)});
	
	}
	$("#descrizione").magicSearch(swGetTable);


	// Bottoni 
	$.each($(".btnMultiSel"), function(i,v)
	{
		var fDiv = $(v);
		var fesInitStatusText = (fDiv.parents("#fesSearchLeftForm")[0]) ? fDiv.parent().find("label.nomefield").html() : "Seleziona...";
		fDiv.append($("<span>").html(fesInitStatusText));
		var fDivReset = $("<a>").addClass("icon icon-close_inverted_fill reset").attr({"href":"javascript:;","title":"Resetta criterio di ricerca"}).hide();
		fDivReset.click(function()
			{
				fDiv = $(this).parent(".btnMultiSel");
				fDiv.find("input").val("");
				fDiv.find("span").html(fesInitStatusText);
				fDiv.find("a").hide();
				swGetTable();
			}
		)
		if (fDiv.parents("#fesSearchLeftForm")[0])
			{
				fDiv.prepend(fDivReset)
			}
		else
			{
				fDiv.append(fDivReset)
			}
		fDiv.find("span").click(function()
			{
				// Apre il pannello di selezione, raccogliendo i dati
				fesSelect($(this).parent(".btnMultiSel"));
			}
		);
		// Se il bottone ha un valore nel "value", lo precompila ed inizializza
		if (fDiv.find("input").val()!="")
		{
			var vArr = fDiv.find("input").val().split(",");
			var vtw = (vArr.length > 1) ? vArr.length + " elementi selezionati" : fesConf[fDiv.find("input").attr("name")][fDiv.find("input").val()].nome;
			fDiv.find("span").html(vtw);
			// Mostra il reset
			fDivReset.show();
		}
		
	});

	

	// Overlay per il selettore (modale)
	fesSelConfirm = $("<a>").addClass("btn btn-primary").attr("href","javascript:;");
	fesSelConfirm.click(function(){
		if (!(fesCurrentField == "fesRendimento"))
			{
				// Aggiorna lo stato del campo coi dati selezionati
				var fValueArr = new Array();
				$.each(fesSelContForm.find("input[name=fesSelected]:checked"), function(i,v)
					{
						fValueArr.push($(v).val());
					}
				);
				fesCurrentButton.find("input[type=hidden]").val(fValueArr.join(","));
				var fesSpanText = "";
					if (fValueArr.length>0){
							if (fValueArr.length>1) 
							{ 	
								fesSpanText = fValueArr.length + " elementi selezionati" 
							}
							else
							{
								fesSpanText = fesConf[fesCurrentButton.find("input[type=hidden]").attr("name")][fValueArr[0]].nome;	
							} 
						}
					else
					{
						fesSpanText = "Seleziona..."
					}
				fesCurrentButton.find(".reset").show();
				fesCurrentButton.find("span").html(fesSpanText);
				// Mostra l'etichetta top se in spalla sinistra
				if(fesCurrentButton.parent(".fesAdvFiltro").length) fesCurrentButton.parent(".fesAdvFiltro").addClass("active");
			}
		else
			{
				if (fesSliderSelect.find("option:selected").val() != "")
				{
					// Aggiorna lo stato del campo coi dati selezionati
					fesCurrentButton.find("input[type=hidden]").val(fesSliderSelect.find("option:selected").val() + "|" + fesSliderDal.val() + "|" + fesSliderAl.val());
					fesCurrentButton.find("span").html(fesConf[fesCurrentField][fesSliderSelect.find("option:selected").val()].periodo + "<span style=\"display: none;\">("+  fesSliderDal.val() + "% - "+ fesSliderAl.val() +"%)</span>");
					fesCurrentButton.parent(".fesAdvFiltro").addClass("active");
					fesCurrentButton.find(".reset").show();
				}
			}
		fesSelOl.modal("hide");	
		swGetTable();
	});
	fesSelCont = $("<div>").addClass("fesSelCont");
	fesSelBlock = $("<div>").addClass("btn-align-center").append(fesSelConfirm);

	fesSelOl = getModal({
        id:"fesSelector",
        titolo:"",
        body: [fesSelCont, fesSelBlock]
        });
	/* FINE FUNZIONI EREDITATE DALLA RICERCA */
	fesSelTitle = fesSelOl.find("h2.modal-title");

});