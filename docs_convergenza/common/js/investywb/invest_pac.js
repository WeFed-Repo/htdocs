var datiMifid = {}, datiSelect={}, datiPreview={}, datiRiepilogo = {}, datiConferma={}; 
var struts2NamespaceVal	="/investywb";
var obskeyVal = "nav_priv_wbx_vers_agg_pac_new"; 
var fromPage 			= "", isFondoSicav="true";

var idxDettaglioFondo = -1, idPicPac = -1;
var string_punto = ".", string_EUR="EUR", string_PAC = "PAC", string_0="0", string_Z="Z", string_spazio=" ", string_picpac="picpac", string_S="S";
var	string_SICAV="SICAV", string_Fondo="Fondo", string_true="true";
var codiceSocietaMappa = {'Etica_Sgr_Spa': {'newCodSoc':'777', 'oldCodSoc':'6'}	};
var errors = [];
var docOn = 0;
var showNumContratto = false;

function visualizzaSelect(){
	$("#sectionSelect").addClass("loading");
	Finance.loadDepositData(startOnLoad, ajaxErrorHttp);		//invest_common.js
}


function loadFondi(dep){
	loadFondi_Common(dep, string_PAC);
}

//settato nel init_vendita quando cambia fondo del select
function loadDettagliFondi(){
	
	showNumContratto = false;	//reset quando cambia fondo
	
	var isPac = true;
	loadDettagliFondi_Common(isPac);
	
	var isinSel = $("#spselCTAinput").val();
	var fondoSel = Finance.fundData.fondi[isinSel];
	
	$(".hasPac").show();
	for (var idx=0; idx < fondoSel.dettagli.length; idx++) {
		chiamataDettaglioPac(fondoSel, idx);
	}
	
	
}	

function picpacSelect(){
	var ele = $(this);
	picpacSelect_Common(ele);
	
	var isinSel = $("#spselCTAinput").val();
	var fondoSel = Finance.fundData.fondi[isinSel];
	var idName = ele.attr('id');	//picpacX
	var idx = idName.substr(string_picpac.length);
	$('#percScontoCom').val(fondoSel.dettagli[idx].sconto);	//0 se flag check Etica
}

function chiamataDettaglioPac(fondoSel, idx){
	
	var returnVal = true;
	$.ajax({
		url: wrp_script_direct + struts2NamespaceVal + "/DettaglioPacJson.action" + "?cf=" + Math.random(),
    	dataType: "json",
        data: { 	codiceIsin 		: fondoSel.isin ,
				  	codiceFondo		: fondoSel.codicefondo ,
					codiceCliente	: fondoSel.codiceCliente ,
					progressivoPac	: fondoSel.dettagli[idx].progressivoPac ,	
					fondoSicav		: fondoSel.fondoSicav ,	
					codAzioneFondo	: fondoSel.codazionefondo,
					deposito		: $('#deposito').val(),
					type			: "SIT",
					addRataPac		: fondoSel.dettagli[idx].addRataPac
				},
        success: function (dataOutJSON, status, jqXHR) {
        	if(200 == jqXHR.status){
        		var dettPacJson = dataOutJSON.fondi[fondoSel.isin];
        		fondoSel.dettagli[idx].descrizioneanni  = dettPacJson.descrizioneanni;
        		fondoSel.dettagli[idx].importorata 	 	= dettPacJson.importorata;
        		fondoSel.dettagli[idx].rateSottoscritte = dettPacJson.rateSottoscritte;
        		fondoSel.dettagli[idx].rateresidue 	 	= dettPacJson.rateresidue;
        		fondoSel.dettagli[idx].rateTotaliPiano  = dettPacJson.rateTotaliPiano;
        		
       			if(string_0 == fondoSel.dettagli[idx].rateresidue && string_Z != fondoSel.dettagli[idx].tipo_contratto){	
            			$("#parentPicPac"+idx).hide();		//verifica se funziona
            			returnVal= false;
        		}
       			else{
       				var invTot = fondoSel.dettagli[idx].importorata * fondoSel.dettagli[idx].rateTotaliPiano;
       				var invTotDivisa = "", importoRataDivisa = "";
       				if(string_EUR != fondoSel.tipodivisa){
       					var cambio = (0== fondoSel.cambio)? 1: fondoSel.cambio;
       					invTotDivisa 	  = " che corrisponde a " + (invTot 							/ cambio) + " " + fondoSel.tipodivisa;
       					importoRataDivisa = " che corrisponde a " + (fondoSel.dettagli[idx].importorata / cambio) + " " + fondoSel.tipodivisa;
       				}
       				
       				$("#idInvTot"	  +idx).text(invTot 							+ string_spazio + string_EUR + invTotDivisa);
       				$("#idRateVersate"+idx).text(fondoSel.dettagli[idx].rateSottoscritte);
       				$("#idImportoRata"+idx).text(fondoSel.dettagli[idx].importorata + string_spazio + string_EUR + importoRataDivisa);
       				$("#idRateResidue"+idx).text(fondoSel.dettagli[idx].rateresidue);
       				
       				//rata residue calcolata al base della disponibilta di saldo
       				calcolaRateResidueDaMargine(fondoSel, idx);
       				
       			}
       			
       			Finance.fundData.fondi[fondoSel.isin] = fondoSel;
        	}
        }
//		,error: function(){}	//TODO
		,complete: function(){
			showNumContratto = showNumContratto ||returnVal;
			if(idx == (fondoSel.dettagli.length -1) ){
				
				//quando carica pagina da Menu
				if(!showNumContratto){
					$(".hasPac").hide();
					showErrorTop(true, "W", "Rate residue 0. Scegli altro fondo.");
				}
				else{
					popolaDatiSelect(fondoSel, idPicPac);	//selectpicpac
				}
				
				//errore da preview
				if(string_vuoto != esitoPreview){
					showErrorTop(true, "E", msgPreview);
					esitoPreview = "";	//reset per nascondere se cambia fondo/deposito
					msgPreview = "";
				}
				//TODO - indietro da preview
				
				//arriva da Situazione Pac
				if(string_vuoto != isSitPac && string_true == isSitPac){
					if(string_vuoto != depositoSitPac){
						var elemDepSitPac = $("#elencoDeposito").find("a[class*='selectorOptions'][value='" + depositoSitPac +"']");
						var idDepSitPac = elemDepSitPac.attr('id');
						$("#sceltaRapporto").find("."+string_selectorOptions).removeClass("selected");
						$("#"+idDepSitPac).trigger("click");	//$(jqc(idDepSitPac))
						depositoSitPac = string_vuoto;	//per evitare loop
					}
					else if(string_vuoto != codIsinSitPac){
						var elemFondoSimPac = $("#elencoFondi").find("div[class*='spsel-option'][data-value='" + codIsinSitPac +"']");
						var idFondoSitPac = elemFondoSimPac.attr('id');
						$("#"+idFondoSitPac).trigger("click");
						codIsinSitPac = string_vuoto;	//per evitare loop
					}
					else if(string_vuoto != numContractSitPac){
						var elemRadioSitPac = $("#dettaglioPicPac").find("[type='radio'][value='" + numContractSitPac +"']");
						var idRadioSitPac = elemRadioSitPac.attr('id');
						idRadioSitPac.prop('checked', true);
						numContractSitPac = string_vuoto;
						isSitPac = string_vuoto;
					}
				}
			}
		}
	});
}

//rata residue calcolata al base della disponibilta di saldo
function calcolaRateResidueDaMargine(fondoSel, idx){
	fondoSel.dettagli[idx].rateresidueCalc = fondoSel.dettagli[idx].rateresidue;
	var saldoDisp = "0";
	var saldoDispTxt = $('#margine').text();
	var saldoDispArr = saldoDispTxt.split(string_spazio);
	if(saldoDispArr.length>0 && saldoDispTxt!= "'Dato non disponibile"){	//requestMargine() non finisce in tempo
		saldoDisp = saldoDispArr[0].replace(".","").replace(",",".");
		fondoSel.dettagli[idx].rateresidueCalc = parseInt(saldoDisp/fondoSel.dettagli[idx].importorata);
	}
	Finance.fundData.fondi[fondoSel.isin] = fondoSel;
}


//invest_comm.js: showErrorTop  scheda_fondo.js: showError
//function showError(show, tipo, msg) {
//	if (!show) {
//		$('#erroreForm').hide();
//	} else {
//		var errorBorderClass = ''
//		// , errorIconType = ''
//		;
//		if ("E" == tipo) {
//			errorBorderClass = 'negativo';
//			// errorIconType = 'icon icon-alert_error icon-2x';
//		} else if ("W" == tipo) {
//			errorBorderClass = 'attenzione';
//			// errorIconType = 'icon icon-alert_caution icon-2x';
//		}
//		$("#errorBorder").addClass(errorBorderClass);
//		// $("#errorType").attr('class',errorIconType);
//		$("#messaggio").html(msg);
//		$('#erroreForm').show();
//		window.scrollTo(0, 0);
//	}
//}


function popolaDatiSelect(fondoSel, idPicPac){
	
	setSpinnerVersamenti(fondoSel, idPicPac);
	
	$('#esenzioneEtica').val('');
	$("#esenzioneDivId").hide();
	if(codiceSocietaMappa.Etica_Sgr_Spa.newCodSoc == fondoSel.codicesocietagestione){
		$("#esenzioneDivId").show();
		
		$("#esenzione").click(checkFlagEsenzione);
	}
	
	$("#descrizioneanni").val(fondoSel.dettagli[idPicPac].descrizioneanni);
	$("#importoRata")	.val(fondoSel.dettagli[idPicPac].importorata);
	$("#numVersamenti")	.val($('#numVersamentiTxt').val());
	$("#rateVersate")	.val(fondoSel.dettagli[idPicPac].rateSottoscritte);
	$("#rateResidue")	.val(fondoSel.dettagli[idPicPac].rateresidue);
	$("#rateTotali")	.val(fondoSel.dettagli[idPicPac].rateTotaliPiano);
	
	$("#descrSocietaGestione").val(fondoSel.descrizioneSocietaGestione);
	$("#speseFisse")		.val(fondoSel.spese);
	$("#NAV")				.val(fondoSel.nav);
}


function setSpinnerVersamenti(fondoSel, idx){
	
	var rateResidue     = parseInt(fondoSel.dettagli[idx].rateresidue);
	var rateResidueCalc = parseInt(fondoSel.dettagli[idx].rateresidueCalc);
	var rateFinale = (rateResidueCalc < rateResidue) ? rateResidueCalc : rateResidue;
	
	//Contratto PASS
	if(string_0 == fondoSel.dettagli[idx].rateresidue && string_Z == fondoSel.dettagli[idx].tipo_contratto){
		rateFinale = rateResidueCalc;
	}
	
	if(undefined != $('#numVersamentiTxt').spinner( "instance" )){
		$('#numVersamentiTxt').spinner( "destroy" );	//setSpinner non funziona se cambi fondo
	}
	
	setSpinner({
		idInput : '#numVersamentiTxt',
		min	 	: 1,
		max		: rateFinale,
		decimals:0,
		spin	: changeSpinValue
	});
	
	$('#numVersamentiTxt').val(1);
	$("#importo").val( parseInt($('#numVersamentiTxt').val()) * fondoSel.dettagli[idx].importorata);
	$("#importoDaRate").text( parseFloat( $("#importo").val()) .toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) );
	
	$('#numVersamentiTxt').bind('keydown', function(event){
		if(verificaImporto(event)){			//solo 0-9/Del/Bksp
			return;
		}
	});
	
	$('#numVersamentiTxt').bind('paste', function(event) {
		if(verificaImporto(event)){
			return;
		}
	});
	
	$('#numVersamentiTxt').bind('keyup', function(e){
	
		var numVer = $('#numVersamentiTxt').val();	//TODO- check if valore scritto presente
		checkNumVersamenti(fondoSel, idx, numVer);
		numVer = $('#numVersamentiTxt').val();		//valore aggiornato
		
//		rateResidue     = parseInt(fondoSel.dettagli[idx].rateresidue);
//		rateResidueCalc = parseInt(fondoSel.dettagli[idx].rateresidueCalc);
//		rateFinale = (rateResidueCalc < rateResidue) ? rateResidueCalc : rateResidue;
//		
//		if(string_vuoto == numVer){			//se cancellata valore di num Ver
//			var msg = "Puoi inserire un numero intero tra 1 e ";
//			if(rateResidueCalc != 0 && (rateResidueCalc < rateResidue)){		
//				msg+= rateResidueCalc + " calcolato con disponibilita e importo rata";
//			}
//			else{
//				msg+= " rate residue:" + rateResidue;
//			}
//			
//			showError(true,"E",msg);
//			$('#numVersamentiTxt').val("1");
//		}
//		else if(rateResidueCalc <= rateResidue && numVer >= rateResidueCalc){
//			var msg = "Non puoi inserire un numero maggiore di rate";
//			if(rateResidueCalc != 0){
//				msg+= ":" + rateResidueCalc + " calcolato con disponibilita e importo rata";
//			}
//			else{
//				msg+= " di quelle residue:" + rateResidue;
//			}
//			
//			showError(true,"E",msg);
//			if(numVer == rateResidueCalc){
//				showError(true,"W",msg);
//			}
//			
//			$('#numVersamentiTxt').val(rateFinale);
//		
//		}
//		else{
			$("#importo").val(parseInt(numVer) * fondoSel.dettagli[idx].importorata);
			
			$("#importoDaRate").text( parseFloat( $("#importo").val()) .toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}));
			if(string_EUR != fondoSel.tipodivisa){
				var cambio = (0== fondoSel.cambio)? 1: fondoSel.cambio;
				$(".importoDaRateDivisa").text( (parseFloat($("#importo").val()) / cambio) .toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2})
						+ " "+ fondoSel.tipodivisa);
			}
//		}
			
			$("#numVersamenti")	.val(numVer);
	});
	
	
}


function changeSpinValue(event, ui){
	
	var isinSel = $("#spselCTAinput").val();
	var fondoSel = Finance.fundData.fondi[isinSel];
	var numVer = parseInt(ui.value);
	
	if(event.target.value <= ui.value) {  // up
		checkNumVersamenti(fondoSel, idPicPac, numVer);
	}
	else { // down
		checkNumVersamenti(fondoSel, idPicPac, numVer);
	}
	
	$("#numVersamenti")	.val(numVer);	//campo hidden di form per submit
	
	$("#importo").val( numVer * fondoSel.dettagli[idPicPac].importorata); 
	$("#importoDaRate").text( parseFloat( $("#importo").val()) .toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) );
}


function checkNumVersamenti(fondoSel, idx, numVer){
	var rateResidue     = parseInt(fondoSel.dettagli[idx].rateresidue);
	var rateResidueCalc = parseInt(fondoSel.dettagli[idx].rateresidueCalc);
	var rateFinale = (rateResidueCalc < rateResidue) ? rateResidueCalc : rateResidue;
	
	//Contratto PASS
	if(string_0 == fondoSel.dettagli[idx].rateresidue && string_Z == fondoSel.dettagli[idx].tipo_contratto){
		rateFinale = rateResidueCalc;
	}
	
	var msg = "";
	if(string_vuoto == numVer){			//se cancellata valore di num Ver
		msg = "Puoi inserire un numero intero tra 1 e ";
		if(rateResidueCalc != 0 && (rateResidueCalc < rateResidue)){		
			msg+= rateResidueCalc + " calcolato con disponibilita e importo rata";
		}
		else{
			msg+= " rate residue:" + rateResidue;
		}
		
		showErrorTop(true,"E",msg);
		$('#numVersamentiTxt').val("1");
	}
	else {	//if(rateResidueCalc <= rateResidue )
		
		if(numVer >= rateFinale){
			msg = "Non puoi inserire un numero maggiore di rate";
			if(rateResidueCalc<rateResidue && rateResidueCalc != 0){
				msg+= ":" + rateResidueCalc + " calcolato con disponibilita e importo rata";
			}
			else{
				msg+= " di quelle residue:" + rateResidue;
			}
			
			showErrorTop(true,"E",msg);
			if(numVer == rateFinale){
				showErrorTop(true,"W",msg);
			}
			
			$('#numVersamentiTxt').val(rateFinale);
		}
		else if(1 == numVer || 0 == numVer){
			msg = "Il numero di versamenti iniziali non pu&ograve; essere inferiore a 1";
			showErrorTop(true,"W",msg);
			$('#numVersamentiTxt').val(1);
		}
		
	}
}

function checkFlagEsenzione(){
	
	if($(this).is(':checked')){
		$('#esenzioneEtica').val('S');
	}
	else{
		$('#esenzioneEtica').val('N');
	}
	$('#percScontoCom').val('0');
}



function linkProsegui() {
	
	unbindEvent("#prosegui","click");	//per evitare doppio click
	$("#sectionSelect").addClass("loading");
	
	var toprosegui = false;
	if(showNumContratto){
		toprosegui = true;
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
		
		$("#numeroAppropriatezza").val("0");
		$("#pacFundForm").attr("action","PacAcquistoFondoPreview.action?"+"cf=" + Math.random() + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
		$("#pacFundForm").submit();
		
	} else  {
		bindEvent("#prosegui","click",linkProsegui);
		$("#sectionSelect").removeClass("loading");
		 window.scrollTo(0, 0);
	}
	
}


function visualizzaPreview(){
	$("#warningBox").hide();
	$("#errorBox").hide(); 
	$("#messaggio").html("");
	$("#sectionPreview").show().addClass("loading");

	var data = {};
	data.esito = esitoPreview;
	data.messaggio = msgPreview;
	
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
     		 
     		   data.preview = $.parseJSON(datiPreviewStr);
     		   data.datiMifid = $.parseJSON(datiMifidStr);
     			
     		   datiPreview = data.preview;
     		   
     		   Finance.tempistiche("AQ", datiPreview.codiceSocGestione); //Preview.jsp
     		   
     		   //MIFID2
     		   datiMifid = data.datiMifid;
     		   if(datiMifid == undefined){
     			   datiMifid = {};
     		   }
     		   
     		   datiMifid.strumentoFinanziario = datiPreview.descrizioneFondo;	//nomeFondo; //Finance.fundData.fondi[$("#selFondo").val()].nomefondo;	PreviewJSP
     		   var importoIT = datiPreview.importo.replace(".","").replace(",",".");
     		   datiMifid.controvaloreOperazione = parseFloat(importoIT).toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &euro;";
     		   
     		   
     		   $('#linkDocCostiOneriIncentInv').click(function() {
     			 //IE non scarica PDF perche GET has variabile con lunghezza troppo alta
						var mapForm    = document.createElement("form");
						mapForm.id	   = "frmPdfMifidInv";
						mapForm.style  = "display:none";	//apertura di PDF visualizza elementi nel footer
						mapForm.target = "Map";
						mapForm.method = "POST"; // or "post" if appropriate
						mapForm.action = wrp_script + struts2NamespaceVal + "/PdfMifid2CostiInducement.action" + "?cf=" + Math.random();

						var mapInput = document.createElement("input");
						mapInput.type = "text";
						mapInput.name = "dMifid";
						mapInput.value = datiMifidPdfInv;
						var mapInput2 = document.createElement("input");
						mapInput2.type = "text";
						mapInput2.name = "isPDF";
						mapInput2.value = "true";
						mapForm.appendChild(mapInput);
						mapForm.appendChild(mapInput2);
						document.body.appendChild(mapForm);
						mapForm.submit();
						$("#frmPdfMifidInv").remove();	//apertura di PDF ogni volta aggiunge il form nel footer
		       	   });
     		   
     		  if(datiMifid.datiCostiServizio == undefined){
     				datiMifid.datiCostiServizio = [
     					 {descCostiServizio:"Costi del servizio"				,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"},
     					 {descCostiServizio:"Spese una tantum &#8208; ingresso"	,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"},
     					 {descCostiServizio:"Spese correnti"					,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0,00"},
     					 {descCostiServizio:"Spese per operazioni"				,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0,00"},
     					 {descCostiServizio:"Costi accessori"					,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0,00"},
     					 {descCostiServizio:"Spese per servizi accessori"		,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0,00"},
     					 
     					 {descCostiServizio:"Costi del prodotto"				,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"},
     					 {descCostiServizio:"Spese una tantum &#8208; ingresso"	,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"},
     					 {descCostiServizio:"Spese correnti"					,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"},
     					 {descCostiServizio:"Spese per operazioni"				,importoCostiServizio:"0.00;"		,percentualeCostiServizio:"0.00"},
     					 {descCostiServizio:"Costi accessori"					,importoCostiServizio:"0.00 "		,percentualeCostiServizio:"0.00"}
     					 
     				 ];
     				 datiMifid.totaleImportoCostiServizio	  = "0.00"
     				 datiMifid.totalePercentualeCostiServizio = "0.00";
     				 
     				datiMifid.datiCostiAnnuale = [
//     						 {descCostiAnnuale:"<b>Costi del servizio</b>"			,importoCostiAnnuale:""			,percentualeCostiAnnuale:""},
     						 {descCostiAnnuale:"Spese una tantum &#8208; Uscita"	,importoCostiAnnuale:"0.00"		,percentualeCostiAnnuale:"0.00"},
//     						 {descCostiAnnuale:"<b>Costi del prodotto</b>"			,importoCostiAnnuale:""			,percentualeCostiAnnuale:""},
     						 {descCostiAnnuale:"Spese una tantum &#8208; Uscita"	,importoCostiAnnuale:"0.00"		,percentualeCostiAnnuale:"0.00 "}
     				];		 
     				
     				datiMifid.datiIncentiviAnnuale = [
     					{descIncentiviAnnuale:"Una tantum"	,importoIncentiviAnnuale:"0.00"	,percentualeIncentiviAnnuale:"0.00"},
     					{descIncentiviAnnuale:"Ricorrenti"	,importoIncentiviAnnuale:"0.00"	,percentualeIncentiviAnnuale:"0.00"}
     				];
     				datiMifid.totaleImportoIncentiviAnnuale		= "0.00"
     				datiMifid.totalePercentualeIncentiviAnnuale = "0.00";
     				
     				datiMifid.datiControvaloreLordo = [
     					{descControvaloreLordo:"Commissioni di uscita"	,importoControvaloreLordo:"0.00"	,percentualeControvaloreLordo:"0.00"},
     					{descControvaloreLordo:"Commissioni di ingresso",importoControvaloreLordo:"0.00"	,percentualeControvaloreLordo:"0.00"},
     					{descControvaloreLordo:"Altre commissioni"		,importoControvaloreLordo:"0.00"	,percentualeControvaloreLordo:"0.00"}
     				];
     			}
     			datiMifid.importoControvaloreLordo	 		 = datiMifid.controvaloreOperazione;
     			datiMifid.percentualeControvaloreLordo 		 = "100,00 &#37";
     			datiMifid.totaleImportoControvaloreLordo	 = parseFloat(datiPreview.importo.replace(".","").replace(",","."));
     			datiMifid.totalePercentualeControvaloreLordo = parseFloat(100);
     		   
     		showDatiMifid2_tab8(datiMifid);
     		
     		showDatiPreview();
     		
     	   }
    $("#sectionPreview").removeClass("loading");
        
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
	
	$("#linkDocObb.linkProspetto") .attr("href","javascript:prospetto(1,'"+datiPreview.codiceIsin+"');");
	$("#linkDocObb1.linkProspetto").attr("href","javascript:prospetto(2,'"+datiPreview.codiceIsin+"');");
	
	$("#linkDocObb") .text("Informazioni chiave per l\'investitore (KIID) " + datiPreview.codiceIsin);
	$("#linkDocObb1").text("Modulo di sottoscrizione " 						+ datiPreview.codiceIsin);
	
	
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
	
	$("#numeroAppropriatezza").val("0");
	$("#pacFundFormPreview").attr("action","PacAcquistoFondo.action?"+"cf=" + Math.random() + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
	$("#pacFundFormPreview").submit();
}

function confermaDaPreview() {
	
	$("#errorBox").hide();$("#messaggio").html("");
	$("#warningBox").hide();
	
	errors = [];
	if ($('#sezionePir').is(':visible')) {
		if (!$("#checkboxPir").is(':checked')) {
			errors.push({
						field : $("#checkboxPir"),
						text : "Per proseguire occorre dichiarare di non essere titolare di altri fondi PIR"
					});
			setHasErrors(errors, "#sezionePir");
		}
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
		$("#numeroRiferimentoMifid").val(datiMifid.numeroRiferimento);
		
		$("form[name=pacFundFormPreview]").attr("action","PacAcquistoFondoRiepilogo.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
		$("form[name=pacFundFormPreview]").trigger('submit');
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
        url: wrp_script_direct + struts2NamespaceVal + "/PacAcquistoFondoRiepilogoJson.action" + "?cf=" + Math.random(),
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
       		   
	       		$("#deposito")			.text(datiRiepilogo.deposito);
	       		$("#nomeFondo")			.text(datiRiepilogo.descrizioneFondo);
	       		$("#isin")				.text(datiRiepilogo.codiceIsin);
	       		$("#tipoStrumento")		.text(string_S == datiRiepilogo.fondoSicav ? string_SICAV : string_Fondo);
	       		$("#socGest")			.text(datiRiepilogo.descrSocietaGestione);
	       		$("#numeroContratto")	.text(datiRiepilogo.numeroContratto);
	       		$("#importo")			.text(parseFloat(datiRiepilogo.importo).toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) 	+ string_spazio + string_EUR);
	       		$("#importoRata")		.text(parseFloat(datiRiepilogo.importoRata).toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + string_spazio + string_EUR);
	       		$("#numVersamenti")		.text(datiRiepilogo.numVersamenti);
	       		$("#rateVersate")		.text(datiRiepilogo.rateVersate);
	       		$("#rateResidue")		.text(datiRiepilogo.rateResidue);
	       		
//	       		$("#dataOpr")	.text(datiRiepilogo.dataOperazione);
//	       		$("#dataValuta").text(datiRiepilogo.dataValuta);
	       		
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
//	$("#confermaBtnRep").click(confermaDaRiepilogo);
	
}

function indietroDaRiepilogo() {
	//TODO - passare parametro per recupera bean and visualizzare pagina
	$("#pacFundFormRiepilogo").attr("action","PacAcquistoFondoPreview.action?"+"cf=" + Math.random() + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
	$("#pacFundFormRiepilogo").submit();
}

//JSP
function confermaDaRiepilogo() {
	$("#pacFundFormRiepilogo").attr("action","PacAcquistoFondoConfirm.action?"+"cf=" + Math.random() + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
	$("#pacFundFormRiepilogo").submit();
}


function visualizzaConferma(numeroAppropriatezza){
	$("#sectionConferma").addClass("loading");
	
	$.ajax({
        type: "POST",
        url: wrp_script_direct + struts2NamespaceVal + "/PacAcquistoFondoConfirmJson.action" + "?cf=" + Math.random(),
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
	       		
	       		Finance.tempistiche("AQ", datiConferma.codiceSocGestione);
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


