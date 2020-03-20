var datiSelect={}, datiMifid = {}, datiMifidIn={}, datiPreview={}, datiRiepilogo = {}, datiConferma={}; 
var struts2NamespaceVal	="/investywb";
var obskeyVal = "nav_priv_wbx_switch_new"; 	//nav_priv_wbx_switch
//var idxDettaglioFondo = -1, idPicPac = -1;
var fromPage 			= "", isFondoSicav="true";
var string_punto = ".", string_spazio=" ";
var string_SWITCH = "SWITCH", string_SWOUT="SWOUT", string_SWIN="SWIN", string_EUR="EUR";
var docOn = 0;
var errors = [];

function switchSelect(){
	$("#sectionSelect").addClass("loading");
	Finance.loadDepositData(startOnLoad, ajaxErrorHttp);
}


function loadFondi(dep){
	loadFondi_Common(dep, string_SWITCH);
}

//settato nel spSel quando cambia fondo del select
function loadDettagliFondi(){
	
	//annulla fondo destinazione se selezionato da prima
	$("#fondoDest").addClass("nosel").removeClass("spsel-hasicon");
	$("#fondoDest .spsel-option.spsel-selected").empty();
	$("<a>", {"class":"spsel-option-el"})
		.html("Seleziona fondo di destinazione")
		.appendTo("#fondoDest .spsel-option.spsel-selected");
	
	$("#modalFundSelect").modal("hide");	
	$("#fondoDest .spsel-option-el").click(openFundSearch);
	$("#formFondoDest").hide();
	
	loadDettagliFondi_Common();
	
//	$("input[type=radio][name=picpac]").click(picpacSelect);
//	if($("#picpac0").length){
//		$("#picpac0").prop("checked",true);	//prima selezionato come default
//		$("#picpac0").trigger("click");		//picpacSelect
//	}
}

function picpacSelect(){
	var ele = $(this);
	picpacSelect_Common(ele);

	//da ptf
	if(string_vuoto != Finance.status.depositoSelezionato){
		var elemDepVendita = $("#elencoDeposito").find("a[class*='selectorOptions'][value='" + Finance.status.depositoSelezionato +"']");
		var idDepVendita = elemDepVendita.attr('id');
		$("#sceltaRapporto").find("."+string_selectorOptions).removeClass("selected");
		Finance.status.depositoSelezionato = string_vuoto;
		$("#"+idDepVendita).trigger("click");
		
	}
	else if(string_vuoto != Finance.status.codiceIsin){
		var elemFondoVendita = $("#elencoFondi").find("div[class*='spsel-option'][data-value='" + Finance.status.codiceIsin +"']");
		var idFondoVendita   = elemFondoVendita.attr('id');
		Finance.status.codiceIsin = string_vuoto;
		$("#"+idFondoVendita).trigger("click");
	}
	else{
		if(string_vuoto != esitoPreview){			//error da preview
			showErrorTop(true, "E", msgPreview);
			formBeanPreview.deposito = string_vuoto;
			esitoPreview = "";	//reset per nascondere se cambia fondo/deposito
			msgPreview = "";
		}
	}
	
}


function openFundSearch(){
	$("#modalFundSelect").modal("show");	//RicercaFondoModal.jsp
	initializzaRicerca();					//invest_ricerca.js
//	loadFondoDestinazion();
}

//da spel quando cambia fondo di origine 
//function loadFondoDestinazion(){
//	
//}


function linkProsegui() {
	
	unbindEvent("#prosegui","click");	//per evitare doppio click
//	$("#wrapperLoading").addClass("loading");
	
	var toprosegui = false;
	errors = [];
	$("#messaggio").empty();
	$("#errorBox").hide();
	
	switch ($("#quoteimp").val()) {
	
		case "imp":
			if ($("#vendImportoField").val()=="" && $("#vendImportoDecField").val()=="") {
				$("#messaggio").html("Per proseguire bisogna inserire l'importo da vendere");
				$("#errorBox").show();
//				window.scrollTo(0, 0);
				errors.push({
					field : $("#importoQuoteErr"),	
					text : "Per proseguire bisogna inserire l'importo da vendere"
				});
				setHasErrors(errors, $("#importoQuoteErr"));
			} 
			else{
				toprosegui = true;
			}
			break;
		case "quo":
			if ($("#vendQuoteField").val()=="" && $("#vendQuoteDecField").val()=="") {
				$("#messaggio").html("Per proseguire bisogna inserire le quote da vendere");
				$("#errorBox").show();
//				window.scrollTo(0, 0);
				errors.push({
					field : $("#importoQuoteErr"),	
					text : "er proseguire bisogna inserire le quote da vendere"
				});
				setHasErrors(errors, $("#importoQuoteErr"));
			}
			else
				toprosegui = true;
			break;
		case "tutto":
			if ( $("#fondoSicav").val() =="F" && $("#tipoInvestimento").val() == "PAC" && $("#chiusuraPiano").val()=="" ) {
				$("#messaggio").html("Per proseguire bisogna selezionare Si o No per estinguere il PAC");
				$("#errorBox").show();
				errors.push({
					field : $("#estinzionePacErr"),	
					text : "Per proseguire bisogna selezionare Si o No per estinguere il PAC"
				});
				setHasErrors(errors, $("#estinzionePacErr"));
//				window.scrollTo(0, 0);
			} 
			else{
				toprosegui = true;
			}
			break;
		
		}
	
	//Fondo Dest non selezionato
	if(undefined == datiSelect.fundDest){
		$("#messaggio").html($("#messaggio").html()+"<br>Per proseguire, seleziona fondo di destinazione");
		$("#errorBox").show();
//		window.scrollTo(0, 0);
		toprosegui = false;
		errors.push({
			field : $("#fondoDestErr"),	
			text : "Per proseguire, seleziona fondo di destinazione"
		});
		setHasErrors(errors, $("#fondoDestErr"));
	}
	else{ 
		//Cedola - se esiste deve essere selezionata
		if(constant_S == datiSelect.fundDest.reinvestimento && "" == datiSelect.fundDest.datiCedola.resFlagReinvestimento){ 
			var flagReinvestimento = $("input[name=flagReinvestimento]");
			if(!flagReinvestimento.is(':checked')){
				toprosegui = false;
				errors.push({
					field : $("#noObbligoCedola"),	//flagReinvestimento.parent().parent().parent()
					text : "Per proseguire occorre dichiarare la destinazione dei proventi"
				});
				setHasErrors(errors, $("#noObbligoCedola"));
				$("#messaggio").html($("#messaggio").html() + "<br> Per proseguire occorre dichiarare la destinazione dei proventi");
				$("#errorBox").show();
			}
		}
		
		//controllo per deposito PIR
		if(constant_S == datiSelect.fundDest.pir && controlloDepositoPerPIR($("#deposito").val())!='OK') {
			toprosegui = false;
			errors.push({
				field : $("#fondoDestErr"),	
				text : Finance.depositData.erroreDepPIR
			});
			setHasErrors(errors, $("#fondoDestErr"));
			$("#messaggio").html($("#messaggio").html() + "<br>"+ Finance.depositData.erroreDepPIR);
			$("#errorBox").show();
		}
		
		//controllo per importo minimo
		var importoNumber = $("#importo").val().replace(".","").replace(",",".");
		if(parseFloat(importoNumber) < datiSelect.fundDest.isotsuc){
			toprosegui = false;
			
			errors.push({
				field : $("#importoQuoteErr"),	
				text : "L'importo/controvalore delle quote inserite deve essere pari o maggiore dell'importo minimo successivo"
			});
			setHasErrors(errors, $("#importoQuoteErr"));
			$("#messaggio").html($("#messaggio").html() + "<br>L'importo/controvalore delle quote inserite deve essere pari o maggiore dell'importo minimo successivo");
			$("#errorBox").show();
		}
		
	}
	
	
	//TODO - copy-paste con valori in . prende come decimale 
	if (toprosegui) {
		
//		$("#chiusuraPiano")				.val();											// loadDettagliFondi
//		$("#codiceIsinSwitch")			.val(datiSelect.fundDest.isin);					// invest_ricerca.js - fundSelected
//		$("#codiceSocietaDiGestione")	.val(fondoSel.codicesocietagestione);			// loadDettagliFondi
//		$("#codiceTitolo")				.val(fondoSel.codiceTitolo);					// loadDettagliFondi
//		$("#codiceTitoloSwitch")		.val(datiSelect.fundDest.codiceInterno);		// invest_ricerca.js - fundSelected
//		$("#dataNAV")					.val(fondoSel);									// loadDettagliFondi
//		$("#dataNAVSwitch")				.val(datiSelect.fundDest.dataPrezzoQuota);		// invest_ricerca.js - fundSelected
//		$("#descrizioneFondo")			.val(fondoSel.nomefondo);						// loadDettagliFondi				- serve per mifid
//		$("#descrizioneFondoSwitch")	.val(fondoSel.nomefondo);						// invest_ricerca.js - fundSelected	- serve per mifid
//		$("#deposito")					.val(datiSelect.fundDest.codiceInterno);		// createSelectRapp
//		$("#fondoSicav")				.val(fondoSel.strumento);						// loadDettagliFondi
//		$("#NAV")						.val(fondoSel.strumento);						// loadDettagliFondi
//		$("#NAVSwitch")					.val(datiSelect.fundDest.nav);					// invest_ricerca.js - fundSelected
//		$("#numeroContratto")			.val(fondoSel.dettagli[idx].contratto);			// picpacSelect
//		$("#percScontoCom")				.val(datiSelect.fundDest.scontopercom);			// invest_ricerca.js - fundSelected
//		$("#pirRimborsoTotale")			.val(" ");										// valore default - radio non serve piu
//		$("#quote")						.val($("#quoteDaImporto").text());				// keydown - con ","
//		$("#tipoInvestimento")			.val(fondoSel.dettagli[idx].tipo);				// picpacSelect
		
//		$("#importo")					.val();											// keydown							 - serve per mifid
		
//		$("#checkFatca")				.val("false");	//solo per test
//		$("#checkAdever")				.val("false");	//solo per test
		
		$("#numeroAppropriatezza").val("0");
		$("#switchFundForm").attr("action","SwitchFondoPreview.action?"+"cf=" + Math.random() + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
		$("#switchFundForm").submit();
		
	} else  {
		bindEvent("#prosegui","click",linkProsegui);
		$("#sectionSelect").removeClass("loading");
	}
	
}

function controlloDepositoPerPIR(deposito) {			
	
	if(!Finance.depositData.listaDepPIR[deposito]) {
		return "KO";
	}
	return "OK";
}


function visualizzaPreview(){
	$("#warningBox").hide();
	$("#errorBox").hide(); 
	$("#messaggio").html("");
	$("#sectionPreview").show().addClass("loading");
	//var codiceSocGestione = Finance.fundData.fondi[$("#selFondo").val()].codicesocietagestione;
//	Finance.tempistiche("VE",codiceSocGestione); //Preview.jsp
	
	var data = {};
	data.esito = esitoPreview;
	data.messaggio = msgPreview;
	
	
//	$.ajax({
//        type: "POST",
//        url: wrp_script_direct + struts2NamespaceVal + "/SwitchFondoPreviewJson.action" + "?cf=" + Math.random(), 
//        data: {}, 
//        success: function(data) {
     	   
	if (data.esito == "KO" ) {
		//TODO - tornare indietro e visualizzare errore msg 
		var msg = "Si &egrave; verificato un errore di connessione";
		if(data.messaggio == null || data.messaggio == undefined || data.messaggio == ""){ 
			data.messaggio = msg;
		}
		$("#messaggio").html(data.messaggio);
		$("#errorBox").show();
		window.scrollTo(0, 0);
		$("#warningBox").hide();
		$("#sectionPreview").hide();
    } 
	else {
		$("#errorBox").hide();$("#messaggio").html("");
		$("#warningBox").hide();

//		$("#preview").show();
		$("#sezionePir").hide();	//TODO - verifica se serve 

		data.preview = $.parseJSON(datiPreviewStr);
		data.datiMifid = $.parseJSON(datiMifidStr);
		data.datiMifidIn = $.parseJSON(datiMifidInStr);


		datiPreview = data.preview;
		datiMifid = data.datiMifid;
		datiMifidIn = data.datiMifidIn;
     	
		if(string_S == datiPreview.fondoSicav){
			Finance.tempistiche("SW_CL:SW_CMP", datiPreview.codiceSocGestione);
		}
		else{
			Finance.tempistiche("SW",datiPreview.codiceSocGestione);
		}
		
		 showDatiMifid(data.datiMifid,   string_SWOUT);
		 showDatiMifid(data.datiMifidIn, string_SWIN);
		 
		 showDatiPreview();
     	
		 $("#numeroAppropriatezza").val(datiPreview.numeroAppropriatezza);
     }
     $("#sectionPreview").removeClass("loading");
     
}


function showDatiMifid(inputDatiMifid, tipo){
	if(inputDatiMifid == undefined){
		inputDatiMifid = {};
	  }
	
	var importoIT = datiPreview.importo.replace(".","").replace(",",".");
	inputDatiMifid.controvaloreOperazione = parseFloat(importoIT).toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &euro;";
	   
	var btnName = "#linkDocCostiOneriIncentInv", frmName = "", actionName = "", valueName = "";
	
	if(string_SWOUT==tipo){
		
		inputDatiMifid.strumentoFinanziario = datiPreview.descrizioneFondo;
		
		if(inputDatiMifid.datiCostiAnnuale == undefined){
			inputDatiMifid.datiCostiAnnuale = [
			 				 	{descCostiAnnuale:"Spese una tantum &#8208; Uscita"		,importoCostiAnnuale:""				,percentualeCostiAnnuale:""},
			 				 	{descCostiAnnuale:"Spese una tantum &#8208; Uscita"		,importoCostiAnnuale:"0,00 &euro;"	,percentualeCostiAnnuale:"0,00 &#37;"}
			 				 	];		 
			inputDatiMifid.totaleImportoCosti	 = ""
			inputDatiMifid.totalePercentualeCosti = "";
 		   
			inputDatiMifid.datiIncentiviAnnuale = [
					 			{descIncentiviAnnuale:"Una tantum"						,importoIncentiviAnnuale:"0,00 &euro;"	,percentualeIncentiviAnnuale:"0,00 &#37;"},
					 			{descIncentiviAnnuale:"Ricorrenti"						,importoIncentiviAnnuale:"0,00 &euro;"	,percentualeIncentiviAnnuale:"0,00 &#37;"}
					 			];
			inputDatiMifid.totaleImportoIncentiviAnnuale	 = ""
			inputDatiMifid.totalePercentualeIncentiviAnnuale = "";
		}
		
		showDatiMifid2_tab9(inputDatiMifid);
		
		btnName   = "#linkDocCostiOneriIncentDisInv";
//		frmName    = "frmPdfMifidDisInv";
//		actionName = "PdfMifid2CostiInducementV.action";
//		valueName  = datiMifidPdfDisInv;
		
		
	}
	else{
		inputDatiMifid.strumentoFinanziario   = datiPreview.descrizioneFondoSwitch;
		
		if(inputDatiMifid.datiCostiServizio == undefined){
			 inputDatiMifid.datiCostiServizio = [
							 {descCostiServizio:"Costi del servizio"				,importoCostiServizio:""			,percentualeCostiServizio:""},
							 {descCostiServizio:"Spese una tantum &#8208; ingresso"	,importoCostiServizio:""			,percentualeCostiServizio:""},
							 {descCostiServizio:"Spese correnti"					,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"},
							 {descCostiServizio:"Spese per operazioni"				,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"},
							 {descCostiServizio:"Costi accessori"					,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"},
							 {descCostiServizio:"Spese per servizi accessori"		,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"},
							 
							 {descCostiServizio:"Costi del prodotto"				,importoCostiServizio:""			,percentualeCostiServizio:""},
							 {descCostiServizio:"Spese una tantum &#8208; ingresso"	,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"},
							 {descCostiServizio:"Spese correnti"					,importoCostiServizio:""			,percentualeCostiServizio:""},
							 {descCostiServizio:"Spese per operazioni"				,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"},
							 {descCostiServizio:"Costi accessori"					,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"}
							 ];
			
			inputDatiMifid.totaleImportoCostiServizio	  = ""
			inputDatiMifid.totalePercentualeCostiServizio = "";
			 
			inputDatiMifid.datiCostiAnnuale = [
							 {descCostiAnnuale:"Spese una tantum &#8208; Uscita"	,importoCostiAnnuale:""				,percentualeCostiAnnuale:""},
							 {descCostiAnnuale:"Spese una tantum &#8208; Uscita"	,importoCostiAnnuale:"0.00"			,percentualeCostiAnnuale:"0.00"}
							 ];		 
			
			inputDatiMifid.datiIncentiviAnnuale = [
		 					{descIncentiviAnnuale:"Una tantum"						,importoIncentiviAnnuale:"0.00"		,percentualeIncentiviAnnuale:"0.00"},
		 					{descIncentiviAnnuale:"Ricorrenti"						,importoIncentiviAnnuale:""			,percentualeIncentiviAnnuale:""}
		 					];
			 
			inputDatiMifid.totaleImportoIncentiviAnnuale		= ""
			inputDatiMifid.totalePercentualeIncentiviAnnuale = "";
			
			inputDatiMifid.datiControvaloreLordo = [
							{descControvaloreLordo:"Commissioni di uscita"			,importoControvaloreLordo:""		,percentualeControvaloreLordo:""},
							{descControvaloreLordo:"Commissioni di ingresso"		,importoControvaloreLordo:""		,percentualeControvaloreLordo:""},
							{descControvaloreLordo:"Altre commissioni"				,importoControvaloreLordo:""		,percentualeControvaloreLordo:""}
							];
		 }
		inputDatiMifid.importoControvaloreLordo	 		 = inputDatiMifid.controvaloreOperazione;
		inputDatiMifid.percentualeControvaloreLordo 	 = "100,00 &#37;";
		inputDatiMifid.totaleImportoControvaloreLordo	 = parseFloat(datiPreview.importo.replace(".","").replace(",","."));
		inputDatiMifid.totalePercentualeControvaloreLordo = parseFloat(100);
		
		showDatiMifid2_tab8(inputDatiMifid);
	}
	
	$(btnName).click(
			function() {
				
				var idName = $(this).attr('id');
				if("linkDocCostiOneriIncentDisInv" == idName){
					actionName = "PdfMifid2CostiInducementV.action";
					valueName  = datiMifidPdfDisInv;
					frmName    = "frmPdfMifidDisInv";
				}
				else if("linkDocCostiOneriIncentInv" == idName){
					actionName = "PdfMifid2CostiInducement.action"
					valueName = datiMifidPdfInv;
					frmName = "frmPdfMifidInv"
				}
				
				//IE non scarica PDF perche GET has variabile con lunghezza troppo alta
				var mapForm    = document.createElement("form");
				mapForm.id	   = frmName; 
				mapForm.style  = "display:none";	//apertura di PDF visualizza elementi nel footer
				mapForm.target = "_blank";
				mapForm.method = "POST"; // or "post" if appropriate
				mapForm.action = wrp_script + struts2NamespaceVal + "/" + actionName;

				var mapInput = document.createElement("input");
				mapInput.type = "text";
				mapInput.name = "dMifid";
				mapInput.value = valueName;
				var mapInput2 = document.createElement("input");
				mapInput2.type = "text";
				mapInput2.name = "isPDF";
				mapInput2.value = "true";
				mapForm.appendChild(mapInput);
				mapForm.appendChild(mapInput2);
				mapForm.style="display:none";
				document.body.appendChild(mapForm);
				mapForm.submit();
				$("#"+frmName).remove();	//apertura di PDF ogni volta aggiunge il form nel footer
//				open(wrp_script + "/investimenti/PdfMifid2CostiInducement.action?dMifid="+ datiMifidPdfInv + "&isPDF=true");
		});
	
}


function showDatiPreview(){
	
	$("#checkAvvertenze").prop('checked', false);
	resetHasErrors($("#checkAvvertenze").parent().parent().parent());
	$("#checkAvvertenze").click(function() {
		resetHasErrors($("#checkAvvertenze").parent().parent().parent());
	});
	
	$("#messaggiAdeguatezza").hide();
	if ( (datiPreview.adeguatezza!=undefined && datiPreview.adeguatezza!=null && datiPreview.adeguatezza.length>0) || 
		 (datiPreview.conflitti  !=undefined && datiPreview.conflitti  !=null && datiPreview.conflitti.length  >0) ) 
//			|| (datiPreview.messaggi!=undefined && datiPreview.messaggi!=null && datiPreview.messaggi.length>0))
	{
		$("#messaggiAdeguatezza ul").empty();
		
		if(datiPreview.adeguatezza!=undefined && datiPreview.adeguatezza!=null && datiPreview.adeguatezza.length>0){
			for (var i=0; i<datiPreview.adeguatezza.length; i++){
				$("<li>").html(datiPreview.adeguatezza[i]).appendTo("#messaggiAdeguatezza ul");	
			}
		}
			
		if(datiPreview.conflitti!=undefined && datiPreview.conflitti!=null && datiPreview.conflitti.length>0){
			for (var i=0; i<datiPreview.conflitti.length; i++){
				$("<li>").html(datiPreview.conflitti[i]).appendTo("#messaggiAdeguatezza ul");
			}
		}
			
		$("#messaggiAdeguatezza").show();		
		
	}
	
	
	if(string_S == datiPreview.fondoSicav) {
		$(".isFund").hide();
		$(".isSicav").show();
	} else {
		$(".isSicav").hide();
		$(".isFund").show();
	}
	
	$("#linkDocObb.linkProspetto") .attr("href","javascript:prospetto(1,'" + datiPreview.codiceIsinSwitch + "');");
	$("#linkDocObb1.linkProspetto").attr("href","javascript:prospetto(2,'" + datiPreview.codiceIsinSwitch + "');");
	
	$("#linkDocObb") .text("Informazioni chiave per l\'investitore (KIID) " + datiPreview.codiceIsinSwitch);
	$("#linkDocObb1").text("Modulo di sottoscrizione " 						+ datiPreview.codiceIsinSwitch);
	
	
	$("#checkProspetto").prop('checked', false);
	resetHasErrors($("#checkProspetto").parent().parent().parent());
	$("#checkProspetto").click(function() {
		resetHasErrors($("#checkProspetto").parent().parent().parent());
		$("#checkProspetto").prop('disabled', true);
	});
	
	$("#checkLimitazioni").prop('checked', false);
	resetHasErrors($("#checkLimitazioni").parent().parent().parent().parent());
	$("#checkLimitazioni").click(function() {
		resetHasErrors($("#checkLimitazioni").parent().parent().parent().parent());
	});
	
	$("#checkMandatoSIP").prop('checked', false);
	resetHasErrors($("#checkMandatoSIP").parent().parent().parent().parent());
	$("#checkMandatoSIP").click(function() {
		resetHasErrors($("#checkMandatoSIP").parent().parent().parent().parent());
	});
	
	
	$("#checkPrivacyOICVM").prop('checked', false);
	resetHasErrors($("#checkPrivacyOICVM").parent().parent().parent().parent());
	$("#checkPrivacyOICVM").click(function() {
		resetHasErrors($("#checkPrivacyOICVM").parent().parent().parent().parent());
	});
	
	$("#checkIncentiviDis").prop('checked', false);
	resetHasErrors($("#checkIncentiviDis").parent().parent().parent());
	$("#checkIncentiviDis").click(function() {
		resetHasErrors($("#checkIncentiviDis").parent().parent().parent());
	});
	
	$("#checkIncentivi").prop('checked', false);
	resetHasErrors($("#checkIncentivi").parent().parent().parent());
	$("#checkIncentivi").click(function() {
		resetHasErrors($("#checkIncentivi").parent().parent().parent());
	});
	
	
	
	$("#indietroBtnPre").click(indietroDaPreview);
	$("#confermaBtnPre").click(confermaDaPreview);

	$("#numeroAppropriatezza").val(datiPreview.numeroAppropriatezza);
	 
	
}


function indietroDaPreview() {
//	$("#riepilogo").hide();
//	$("form[name=sellFundForm]").show();
	
	$("#numeroAppropriatezza").val("0");
	$("#switchFundFormPreview").attr("action","SwitchFondo.action?"+"cf=" + Math.random() + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
	$("#switchFundFormPreview").submit();
}

function confermaDaPreview() {
	
	$("#errorBox").hide();$("#messaggio").html("");
	$("#warningBox").hide();
	
	errors = [];
//	if ($('#sezionePir').is(':visible')) {
//		if (!$("#checkboxPir").is(':checked')) {
//			errors.push({
//						field : $("#checkboxPir"),
//						text : "Per proseguire occorre dichiarare di non essere titolare di altri fondi PIR"
//					});
//			setHasErrors(errors, "#sezionePir");
//		}
//	}
	
//	var checkIncentiviDis = $("#checkIncentiviDis");
//	if(!checkIncentiviDis.is(':checked')) {
////		prosegui = Boolean(prosegui && false);
//		errors.push({
//			field : checkIncentiviDis.parent().parent().parent(),
//			text : "Per proseguire occorre dichiarare di avere preso visione delle informazioni relative agli incentivi"
//		});
//		setHasErrors(errors, checkIncentiviDis.parent().parent().parent());
//		if($("#sezioneCostiInducementDisInv").find(".panel-collapse.collapse.in").length==0) {
//			$("#sezioneCostiInducementDisInv i").first(".icon .icon-arrow_down").trigger("click");
//		}
//	} else {
//		$("input[name=checkIncentivi]").val("on");
//	}
	
	
	var flgInvDis = checkMandatoryFlag("checkIncentiviDis","Per proseguire occorre dichiarare di avere preso visione delle informazioni relative agli incentivi");
	if(flgInvDis){
		if($("#sezioneCostiInducementDisInv").find(".panel-collapse.collapse.in").length==0) {
			$("#sezioneCostiInducementDisInv i").first(".icon .icon-arrow_down").trigger("click");
		}
	}
	else {
		$("input[name=checkIncentivi]").val("on");
	}
	
	var flgInv = checkMandatoryFlag("checkIncentivi","Per proseguire occorre dichiarare di avere preso visione delle informazioni relative ai Costi, Oneri e Incentivi");
	if(flgInv){
		if($("#sezioneCostiInducementInv").find(".panel-collapse.collapse.in").length==0) {
			$("#sezioneCostiInducementInv i").first(".icon .icon-arrow_down").trigger("click");
		}
	}
	
	if($("#messaggiAdeguatezza").is(":visible") ) {
		checkMandatoryFlag("checkAvvertenze", "Per proseguire occorre dichiarare di avere preso visione delle avvertenze");
	}
	
	var checkProspetto = $("#checkProspetto");
	if(!$("#checkProspetto").is(":disabled") ) {
		errors.push({
			field : checkProspetto.parent().parent().parent(),
			text : "Per proseguire occorre avere preso visione del documento relativo al prospetto informativo"
		});
		setHasErrors(errors, checkProspetto.parent().parent().parent());
	}
	
	checkMandatoryFlag("checkProspetto" , "Per proseguire occorre dichiarare di avere preso visione dell'intera documentazione informativa");
	
	checkMandatoryFlag("checkLimitazioni" , "Per proseguire occorre dichiarare di avere preso visione dell'informativa OICVM");
	checkMandatoryFlag("checkMandatoSIP"  , "Per proseguire occorre dichiarare di avere preso visione dell'informativa OICVM");
	checkMandatoryFlag("checkPrivacyOICVM", "Per proseguire occorre dichiarare di avere preso visione dell'informativa OICVM");
	
	
	if (errors.length) {
		$(errors[0].field).trigger('focus');
	}
	else{
		$("#numeroRiferimentoMifid").val(datiMifid.numeroRiferimento + "," + datiMifidIn.numeroRiferimento);
		
		$("form[name=switchFundFormPreview]").attr("action","SwitchFondoRiepilogo.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
		$("form[name=switchFundFormPreview]").trigger('submit');
	}
	
}


function checkMandatoryFlag(idFieldName, errMsg){
	var idField = $("#"+idFieldName);
	if(!idField.is(':checked')){
		errors.push({
			field : idField.parent().parent().parent(),
			text : errMsg
		});
		setHasErrors(errors, idField.parent().parent().parent());
		return true;
	}
	return false;
}


function visualizzaRiepilogo(numeroAppropriatezza){
	$("#sectionRiepilogo").show().addClass("loading");
	
	$.ajax({
        type: "POST",
        url: wrp_script_direct + struts2NamespaceVal + "/SwitchFondoRiepilogoJson.action" + "?cf=" + Math.random(),
        data: {"numeroAppropriatezza": ""+numeroAppropriatezza}, 
        success: function(data) {
        	 if (data.esito == "KO" ) {
       		   //TODO - tornare indietro e visualizzare errore msg 
       		   var msg = "Si &egrave; verificato un errore di connessione";
       		   if(data.messaggio == null || data.messaggio == undefined || data.messaggio == ""){ 
       			   data.messaggio = msg;
       		   }
       		   $("#messaggio").html(data.messaggio);
       		   $("#errorBox").show();
       		   window.scrollTo(0, 0);
       		   $("#sectionRiepilogo").hide(); 
       	   	} 
        	else {
       		   	$("#errorBox").hide();$("#messaggio").html("");
       		   	datiRiepilogo = data.riepilogo;
       		   
	       		$("#deposito")	.text(datiRiepilogo.deposito);
	       		$("#tipoStrumento")	.text(string_S == datiRiepilogo.fondoSicav ? string_SICAV : string_Fondo);
	       		$("#nomeFondo")	.text(datiRiepilogo.descrizioneFondo);
	       		$("#isin")		.text(datiRiepilogo.codiceIsin);
	       		$("#quote")		.text(datiRiepilogo.quote);	
	       		$("#importo")	.text(datiRiepilogo.importo + " EUR");
	       		$("#nav")		.text(parseFloat(datiRiepilogo.NAV).toLocaleString("it-IT",{minimumFractionDigits:2})	////,maximumFractionDigits:2
	       								+ string_spazio + datiRiepilogo.divisa); 
//	       		$("#tipoFondo")	.text(string_S == datiRiepilogo.fondoSicav ? string_SICAV : string_Fondo);
	       		$("#dataOpr")	.text(datiRiepilogo.dataOperazione);
	       		$("#dataValuta").text(datiRiepilogo.dataValuta);
	       		$(".idDestDataNav").text(datiRiepilogo.dataNAV);
	       		
	       		$("#nomeFondoSw").text(datiRiepilogo.descrizioneFondoSwitch);
	       		$("#isinSw")	 .text(datiRiepilogo.codiceIsinSwitch);
//	       		$("#quoteSw")	 .text(formatDecimal(parseFloat(datiRiepilogo.quoteSwitch), getNumDec(datiRiepilogo.codiceSocietaDiGestione)));	//TODO
//	       		$("#importoSw")	 .text(datiRiepilogo.importo + " EUR");
	       		$("#navSw")		 .text(datiRiepilogo.NAVSwitch + string_spazio + datiRiepilogo.divisaSwitch);
	       		$("#socGestSw")	 .text(datiRiepilogo.descrSocietaGestione);
	       		$("#catAssogSw") .text(datiRiepilogo.catAssogestioni);
	       		$("#commGestSw") .text(datiRiepilogo.commGestione);
	       		$("#commIngrSw") .text(datiRiepilogo.commIngresso);
	       		$("#commUsctSw") .text(datiRiepilogo.commUscita);
	       		$("#dirFissiSw") .text(datiRiepilogo.dirFissi);
	       		
	       		if(string_S == datiRiepilogo.flagReinv){
	       			$("#dirFisssiCedolaSw").show();
	       			$("#dirFissiDivSw") .text(datiRiepilogo.dirFissiDiv);
	       		}
	       		
	       		
	       		$("#numeroAppropriatezza").val(datiRiepilogo.numeroAppropriatezza);	
//	       		$("#riepilogo").show();
        	}
        },
        error: function(data) {
     	   //TODO - tornare indietro e visualizzare errore msg 
     	   
//     	   $("#riepilogo").hide();
//     	   $("form[name=sellFundFormRiepilogo]").hide();
     	   $("#errorBox").show();$("#messaggio").html(data.messaggio);
     	   window.scrollTo(0, 0);
     	  $("#sectionRiepilogo").hide();
        },
        complete : function() {  
//         	   bindEvent("#prosegui","click",linkProsegui); 
     	   $("#sectionRiepilogo").removeClass("loading");
     	  $(".modal-backdrop").remove(); //modal di OTP - se arrivi indietro da Conferma
        }
      });
	
	$("#indietroBtnRep").click(indietroDaRiepilogo);
	$("#btnProsegui").click(confermaDaRiepilogo);
	
}

function indietroDaRiepilogo() {
	//TODO - passare parametro per recupera bean and visualizzare pagina
	$("#switchFundFormRiepilogo").attr("action","SwitchFondoPreview.action?"+"cf=" + Math.random() + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
	$("#switchFundFormRiepilogo").submit();
}

function confermaDaRiepilogo() {
	$("#switchFundFormRiepilogo").attr("action","SwitchFondoConfirm.action?"+"cf=" + Math.random() + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
	$("#switchFundFormRiepilogo").submit();
}


function visualizzaConferma(numeroAppropriatezza){
	$("#sectionConferma").addClass("loading");
	
	$.ajax({
        type: "POST",
        url: wrp_script_direct + struts2NamespaceVal + "/SwitchFondoConfirmJson.action" + "?cf=" + Math.random(),
        data: {"numeroAppropriatezza": ""+numeroAppropriatezza}, 
        success: function(data) {
        	 if (data.esito == "KO" ) {
       		   //TODO - tornare indietro e visualizzare errore msg 
       		   var msg = "Si &egrave; verificato un errore di connessione";
       		   if(data.messaggio == null || data.messaggio == undefined || data.messaggio == ""){ 
       			   data.messaggio = msg;
       		   }
       		   $("#txtConferma").html("Attenzione");
       		   $("#messaggio").html(data.messaggio);
       		   $(".boxesito").removeClass("positivo").addClass("negativo");
       		   window.scrollTo(0, 0);
       		   $(".confermaOK").hide();
       	   	} 
        	else {
       		   
       		   	datiConferma = data.datiConferma;
       		   
//	       		$("#deposito")	.text(datiConferma.deposito);
//	       		$("#nomeFondo")	.text(datiConferma.descrizioneFondo);
//	       		$("#quote")		.text(formatDecimal(datiConferma.quote));	//TODO
//	       		$("#dataOpr")	.text(datiConferma.dataOperazione);
//	       		$("#importo")	.text(formatDecimal(datiConferma.importo) + " EUR");	//TODO
//	       		$("#dataValuta").text(datiConferma.dataValuta);
	       		
       		   	$("#dataOperazione")	.text(datiConferma.dataOperazione);
	       		$("#numRegistrazione")	.text(datiConferma.numRegistrazione);
	       		
	       		if(string_S == datiConferma.fondoSicav) {
	       			$(".isFund").hide();
	       			$(".isSicav").show();
	       		} else {
	       			$(".isSicav").hide();
	       			$(".isFund").show();
	       		}
	       		
//	       		$("#numeroAppropriatezza").val(datiConferma.numeroAppropriatezza);		//veriica se serve a settare a 0
	       		
	       		//TODO - /investywb
//	       		printPdfOrdine();
//	       		$("#stampa").attr("href","javascript:window.print()");	//TODO - non ci sono info nella pagina
	       		
	       		$("#situazioneOrdini").attr("href", wrp_script + "/wbOnetoone/2l/action/investimenti/SituazioneOrdiniFund.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_situaz_ordini");
	       		$("#portafoglio").attr("href", wrp_script + "/wbOnetoone/2l/action/investimenti/PortafoglioInvestimenti.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_strum_in_portaf");
	       		
	       		$(".boxesito").removeClass("negativo").addClass("positivo");
	       		
	       		if(string_S == datiConferma.fondoSicav){
	    			Finance.tempistiche("SW_CL:SW_CMP", datiConferma.codiceSocGestione);
	    		}
	    		else{
	    			Finance.tempistiche("SW",datiConferma.codiceSocGestione);
	    		}
//	       		$("#conferma").show();
        	}
        },
        error: function(data) {
     	   //TODO - tornare indietro e visualizzare errore msg 
     	   
//     	   $("#conferma").hide();
     	   $("#switchFundFormRiepilogo").hide();
     	   $("#errorBox").show();
     	   $(".boxesito").removeClass("positivo").addClass("negativo");
     	   $("#messaggio").html(data.messaggio);
     	   window.scrollTo(0, 0);
//     	   $(".confermaOK").hide();
        },
        complete : function() {  
//         	   bindEvent("#prosegui","click",linkProsegui); 
     	   $("#sectionConferma").removeClass("loading");
     	   $(".modal-backdrop").remove(); //modal di OTP
        }
      });
}


//function printPdfOrdine(){
//	 $('#stampa').click(function() {
//			 //IE non scarica PDF perche GET has variabile con lunghezza troppo alta
//				var mapForm    = document.createElement("form");
//				mapForm.id	   = "frmPdfOrdineVendita";
//				mapForm.style  = "display:none";	//apertura di PDF visualizza elementi nel footer
//				mapForm.target = "Map";
//				mapForm.method = "POST"; // or "post" if appropriate
//				mapForm.action = wrp_script + "/investywb/PrintOrdineVenditaFondo.action" + "?cf=" + Math.random();
//
//				var mapInput = document.createElement("input");
//				mapInput.type = "text";
//				mapInput.name = "datiOrdine";
//				mapInput.value = JSON.stringify(datiConferma);
//				var mapInput2 = document.createElement("input");
//				mapInput2.type = "text";
//				mapInput2.name = "isPDF";
//				mapInput2.value = "true";
//				mapForm.appendChild(mapInput);
//				mapForm.appendChild(mapInput2);
//				document.body.appendChild(mapForm);
//				mapForm.submit();
//				$("#frmPdfOrdineVendita").remove();	//apertura di PDF ogni volta aggiunge il form nel footer
//       	   });
//}

