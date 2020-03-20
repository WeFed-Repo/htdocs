var datiMifid = {}, datiSelect={}, datiPreview={}, datiRiepilogo = {}, datiConferma={}; 
var struts2NamespaceVal	="/investywb";
var obskeyVal = "nav_priv_wbx_vendita_new"; 	//nav_priv_wbx_vendita
var fromPage 			= "", isFondoSicav="true";

//var idxDettaglioFondo = -1, idPicPac = -1;
var string_punto = ".", string_EUR="EUR", string_SELL="SELL", string_vuoto="";

function visualizzaSelect(){
	$("#sectionSelect").addClass("loading");
	Finance.loadDepositData(startOnLoad, ajaxErrorHttp);
}

function loadFondi(dep){
	loadFondi_Common(dep, string_SELL);
}

//settato nel init_vendita quando cambia fondo del select
function loadDettagliFondi(){
	loadDettagliFondi_Common();
	
}	
	

function picpacSelect(){
	var ele = $(this);
	picpacSelect_Common(ele);
	
	
	//TODO - indietro da preview
//	if(undefined != formBeanVendita.deposito){
//		if(string_vuoto != formBeanVendita.deposito){
//			var elemDepVendita = $("#elencoDeposito").find("a[class*='selectorOptions'][value='" + formBeanVendita.deposito +"']");
//			var idDepVendita = elemDepVendita.attr('id');
//			$("#sceltaRapporto").find("."+string_selectorOptions).removeClass("selected");
//			formBeanVendita.deposito = string_vuoto;	//per fare tutto giro di trigger e mettere Fondo al base di desposito
//			$("#"+idDepVendita).trigger("click");
//		}
//		else if(string_vuoto != formBeanVendita.codiceIsin){
//			var elemFondoVendita = $("#elencoFondi").find("div[class*='spsel-option'][data-value='" + formBeanVendita.codiceIsin +"']");
//			var idFondoVendita   = elemFondoVendita.attr('id');
//			formBeanVendita.codiceIsin = string_vuoto;
//			$("#"+idFondoVendita).trigger("click");
//		}
//		else if(string_vuoto != formBeanVendita.quoteTotali){
//			var elemRadioVendita = $("#dettaglioPicPac").find("[type='radio'][value='" + formBeanVendita.quoteTotali +"']");
//			var idRadioVendita = elemRadioVendita.attr('id');
//			formBeanVendita.quoteTotali = string_vuoto;
//			$("#"+idRadioVendita).prop('checked', true);
//			$("#"+idRadioVendita).trigger("click");
//		}
//		else if(string_vuoto != formBeanVendita.tipoVendita){
////			var elemOptionVendita = $("#quoteimp").find("option[value='" + formBeanVendita.tipoVendita +"']");
//			$("#quoteimp").val(formBeanVendita.tipoVendita);
//			formBeanVendita.tipoVendita = string_vuoto;
//			$("#quoteimp").trigger("change");
//		}
//	}
	
	//da ptf
	if(string_vuoto != Finance.status.deposito){
		var elemDepVendita = $("#elencoDeposito").find("a[class*='selectorOptions'][value='" + Finance.status.deposito +"']");
		var idDepVendita = elemDepVendita.attr('id');
		$("#sceltaRapporto").find("."+string_selectorOptions).removeClass("selected");
		Finance.status.deposito = string_vuoto;
		$("#"+idDepVendita).trigger("click");
		
	}
	else if(string_vuoto != Finance.status.codiceIsin){
		var elemFondoVendita = $("#elencoFondi").find("div[class*='spsel-option'][data-value='" + Finance.status.codiceIsin +"']");
		var idFondoVendita   = elemFondoVendita.attr('id');
		Finance.status.codiceIsin = string_vuoto;
		$("#"+idFondoVendita).trigger("click");
	}
	else{
		//error da preview
		if(string_vuoto != esitoPreview){
			showErrorTop(true, "E", msgPreview);
			formBeanPreview.deposito = string_vuoto;
			esitoPreview = "";	//reset per nascondere se cambia fondo/deposito
			msgPreview = "";
		}
	}
}
	

function linkProsegui() {
	
	unbindEvent("#prosegui","click");	//per evitare doppio click
//	$("#wrapperLoading").addClass("loading");
	
	var toprosegui = false;
	var errors = [];
	$("#messaggio").empty();
	$("#errorBox").hide();
	
	switch ($("#quoteimp").val()) {
	
		case "imp":
			if ($("#vendImportoField").val()=="" && $("#vendImportoDecField").val()=="") {
				$("#messaggio").html("Per proseguire bisogna inserire l'importo da vendere");
				$("#errorBox").show();
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
				errors.push({
					field : $("#importoQuoteErr"),	
					text : "Per proseguire bisogna inserire le quote da vendere"
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
			} 
			else{
				toprosegui = true;
			}
			break;
		
		}
	//TODO - copy-paste con valori in . prende come decimale 
	if (toprosegui) {
		
//		$("#codiceSocietaDiGestione")	.val(fondoSel.codicesocietagestione);			// loadDettagliFondi
//		$("#descrizioneFondo")			.val(fondoSel.nomefondo);						// loadDettagliFondi
//		$("#deposito")					.val();											// startOnLoad - createSelectRapp
//		$("#codiceFondo")				.val(fondoSel.codicefondo);						// loadDettagliFondi
//		$("#numeroContratto")			.val(fondoSel.dettagli[idx].contratto);			// picpacSelect
//		$("#chiusuraPiano")				.val();											// picpacSelect
//		$("#importo")					.val();											// keydown
//		$("#quote")						.val($("#quote").text());						// keydown
//		$("#fondoSicav")				.val(fondoSel.strumento);						// loadDettagliFondi
//		$("#tipoInvestimento")			.val(fondoSel.dettagli[idx].tipo);				// picpacSelect
//		$("#tipoInvestimento")			.val(fondoSel.dettagli[idx].tipo);				// picpacSelect
//		$("#pirRimborsoTotale")			.val(" ");										// valore default - radio non serve piu
		
		esitoPreview = "";	//reset per nascondere se cambia fondo/deposito
		msgPreview = "";
		
		$("#numeroAppropriatezza").val("0");
		$("#sellFundForm").attr("action","VenditaFondoPreview.action?"+"cf=" + Math.random() + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
		$("#sellFundForm").submit();
		
	} else  {
		esitoPreview = "";	//reset per nascondere se cambia fondo/deposito
		msgPreview = "";
		bindEvent("#prosegui","click",linkProsegui);
		$("#sectionSelect").removeClass("loading");
	}
	
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
	data.preview = $.parseJSON(datiPreviewStr);
	data.datiMifid = $.parseJSON(datiMifidStr);
	datiPreview = data.preview;
	datiMifid = data.datiMifid;
	
//	$.ajax({
//        type: "POST",
//        url: wrp_script_direct + struts2NamespaceVal + "/VenditaFondoPreviewJson.action" + "?cf=" + Math.random(),
//        data: {}, 	//$("form[name=sellFundForm]").serialize()
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
     	   } else {
     		   $("#errorBox").hide();$("#messaggio").html("");
     		   $("#warningBox").hide();
     		   
//     		   $("#preview").show();
     		   $("#sezionePir").hide();	//TODO - verifica se serve
     		   
//     		   datiPreview = data.preview;
     		   
     		   Finance.tempistiche("VE", datiPreview.codiceSocGestione); //Preview.jsp
     		   
     		   //MIFID2
//     		   datiMifid = data.datiMifid;
     		   if(datiMifid == undefined){
     			   datiMifid = {};
     		   }
     		   
     		   datiMifid.strumentoFinanziario = datiPreview.descrizioneFondo;	//nomeFondo; //Finance.fundData.fondi[$("#selFondo").val()].nomefondo;	PreviewJSP
     		   var importoIT = datiPreview.importo.replace(".","").replace(",",".");
     		   datiMifid.controvaloreOperazione = parseFloat(importoIT).toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &euro;";
     		   
     		   
     		   $('#linkDocCostiOneriIncentDisInv').click(function() {
     			 //IE non scarica PDF perche GET has variabile con lunghezza troppo alta
						var mapForm    = document.createElement("form");
						mapForm.id	   = "frmPdfMifidDisInv";
						mapForm.style  = "display:none";	//apertura di PDF visualizza elementi nel footer
						mapForm.target = "Map";
						mapForm.method = "POST"; // or "post" if appropriate
						mapForm.action = wrp_script + struts2NamespaceVal + "/PdfMifid2CostiInducementV.action" + "?cf=" + Math.random();

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
		       	   });
     		   
     		   if(datiMifid.datiCostiAnnuale == undefined){
		        		   datiMifid.datiCostiAnnuale = [
		        				 {descCostiAnnuale:"Spese una tantum &#8208; Uscita"	,importoCostiAnnuale:""					,percentualeCostiAnnuale:""},
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
     		   
     		showDatiMifid2_tab9(datiMifid);
     		
     		showDatiPreview();
     		
     	   }
//        },
//        error: function(data) {
//     	   //TODO - tornare indietro e visualizzare errore msg 
//     	   
//        	$("#sectionPreview").hide();
////     	   $("form[name=sellFundFormPreview]").hide();
//     	   $("#errorBox").show();
//     	   window.scrollTo(0, 0);
//     	   $("#warningBox").hide();
//        },
//        complete : function() {  
////     	   bindEvent("#prosegui","click",linkProsegui); 
//     	   $("#sectionPreview").removeClass("loading");
//     	   
//        }
//      });
     	  $("#sectionPreview").removeClass("loading");
}


function showDatiPreview(){
	$("#indietroBtnPre").click(indietroDaPreview);
	$("#confermaBtnPre").click(confermaDaPreview);

	$("#numeroAppropriatezza").val(datiPreview.numeroAppropriatezza);
	 
	resetHasErrors($("#checkIncentiviDis").parent().parent().parent());
	$("#checkIncentiviDis").click(function() {
		resetHasErrors($("#checkIncentiviDis").parent().parent().parent());
	});
}



function indietroDaPreview() {
//	$("#riepilogo").hide();
//	$("form[name=sellFundForm]").show();
	
//	$("#numeroAppropriatezza").val("-1");
	$("#sellFundFormPreview").attr("action","VenditaFondo.action?"+"cf=" + Math.random() + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
	$("#sellFundFormPreview").submit();
}

function confermaDaPreview() {
	
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
		$("form[name=sellFundFormPreview]").attr("action","VenditaFondoRiepilogo.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
		$("form[name=sellFundFormPreview]").trigger('submit');
	}
	
}


function visualizzaRiepilogo(numeroAppropriatezza){
	$("#sectionRiepilogo").show().addClass("loading");
	
	$.ajax({
        type: "POST",
        url: wrp_script_direct + struts2NamespaceVal + "/VenditaFondoRiepilogoJson.action" + "?cf=" + Math.random(),
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
	       		$("#nomeFondo")	.text(datiRiepilogo.descrizioneFondo);
	       		$("#tipoStrumento")	.text(string_S == datiRiepilogo.fondoSicav ? string_SICAV : string_Fondo);
	       		$("#quote")		.text(datiRiepilogo.quote);
	       		$("#dataOpr")	.text(datiRiepilogo.dataOperazione);
	       		$("#importo")	.text(datiRiepilogo.importo + " EUR");
	       		$("#dataValuta").text(datiRiepilogo.dataValuta);
	       		
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
     	   
        }
      });
	
	$("#indietroBtnRep").click(indietroDaRiepilogo);
	$("#confermaBtnRep").click(confermaDaRiepilogo);
	
}

function indietroDaRiepilogo() {
	//TODO - passare parametro per recupera bean and visualizzare pagina
	$("#sellFundFormRiepilogo").attr("action","VenditaFondoPreview.action?"+"cf=" + Math.random() + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
	$("#sellFundFormRiepilogo").submit();
}

function confermaDaRiepilogo() {
	$("#sellFundFormRiepilogo").attr("action","VenditaFondoConfirm.action?"+"cf=" + Math.random() + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
	$("#sellFundFormRiepilogo").submit();
}


function visualizzaConferma(numeroAppropriatezza){
	$("#sectionConferma").addClass("loading");
	
	$.ajax({
        type: "POST",
        url: wrp_script_direct + struts2NamespaceVal + "/VenditaFondoConfirmJson.action" + "?cf=" + Math.random(),
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
//	       		$("#numeroAppropriatezza").val(datiConferma.numeroAppropriatezza);		//veriica se serve a settare a 0
	       		
	       		//TODO - /investywb
//	       		printPdfOrdine();
//	       		$("#stampa").attr("href","javascript:window.print()");	//TODO - non ci sono info nella pagina
	       		
	       		$("#situazioneOrdini").attr("href", wrp_script + "/wbOnetoone/2l/action/investimenti/SituazioneOrdiniFund.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_situaz_ordini");
	       		$("#portafoglio").attr("href", wrp_script + "/wbOnetoone/2l/action/investimenti/PortafoglioInvestimenti.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_strum_in_portaf");
	       		
	       		$(".boxesito").removeClass("negativo").addClass("positivo");
	       		
	       		Finance.tempistiche("VE", datiConferma.codiceSocGestione); 
//	       		$("#conferma").show();
        	}
        },
        error: function(data) {
     	   //TODO - tornare indietro e visualizzare errore msg 
     	   
//     	   $("#conferma").hide();
     	   $("form[name=sellFundFormRiepilogo]").hide();
//     	   $("#errorBox").show();
     	   $(".boxesito").removeClass("positivo").addClass("negativo");
     	   $("#messaggio").html(data.messaggio);
     	   window.scrollTo(0, 0);
     	   $(".confermaOK").hide();
        },
        complete : function() {  
//         	   bindEvent("#prosegui","click",linkProsegui); 
     	   $("#sectionConferma").removeClass("loading");
     	   
        }
      });
}

//Come richeistra da commerciale
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

