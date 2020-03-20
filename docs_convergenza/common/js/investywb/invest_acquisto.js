//Investimenti - Acquisto - start
var investFolderName = '/investywb';
var obskeyVal = "nav_priv_wbx_acquisto_new"; 	
var fromPage 			= "", isFondoSicav="true";

var firstCallToPac = false; // Caricare dati nel sezione PAC solo prima volta
var bankName = ''; // Preview
var buyFundSelectBeanJson = '', buyFundSelectRequestJson = '',cedola={};
var depositoCustomer = '', stringa_N = 'N', stringa_S = 'S', stringa_F = 'F';
var stringa_Fondo = 'Fondo', stringa_Sicav = 'Sicav', stringa_EUR = 'EUR', stringa_failure = 'failure';
var listaDepPIR = '', erroreDepPIR = '';
var inputData_PIC_PAC;
var errors = [], msgError = "";

var docOn = 0;
var newRepoAbilitati = false;
var newRepoAbilitatiSott = false;
var fromProsegui = false;
var isMultiplo = true; // pianoReduced.versMultipoRata=="Y";

var ctrlSpinRata = function controlSpinnerRata(event, ui) {

	showError(false, null, null);
	var rataNew = ui.value; // $('#spinnerRata').val();
	var pianoReduced = $.parseJSON($('#selectPac :selected').val());
	var ratePac = pianoReduced.numRate;

	if (event.target.value < rataNew) { // up

		// $("#erroreForm").hide();

		if (codiceSocietaMappa.Anima_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta
				|| codiceSocietaMappa.Etica_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta
				|| codiceSocietaMappa.Eurizon_Capital_Sgr.newCodSoc == buyFundSelectBeanJson.codiceSocieta) {

			var periodo = $.parseJSON($('#descrizionePeriodo').val());
			ratePac = periodo.numero_periodi * pianoReduced.numAnni;
		}

		if (pianoReduced.numRateIni > 0) {
			// investimentoIniziale($('#spinnerRata').val(), $(
			// "#spinnerIniziale").val());
			investimentoIniziale(rataNew, $("#spinnerIniziale").val());
		} else {
			if (isMultiplo) {
				calcolaMultiplo(pianoReduced, rataNew, true);
			}
		}

		investimentoTotale(rataNew, ratePac);

	} else { // down

		// $("#erroreForm").hide();
		showError(false, null, null);
		if (parseFloat($('#spinnerRata').val()) == parseFloat(pianoReduced.impRataIni)) {
			var msg = "L&#39;importo della rata non pu&ograve; essere inferiore a "
					+ pianoReduced.impRataIni + " Euro";
			showError(true, "W", msg);
		}
		if (codiceSocietaMappa.Anima_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta
				|| codiceSocietaMappa.Etica_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta
				|| codiceSocietaMappa.Eurizon_Capital_Sgr.newCodSoc == buyFundSelectBeanJson.codiceSocieta) {
			var periodo = $.parseJSON($('#descrizionePeriodo').val());
			ratePac = periodo.numero_periodi * pianoReduced.numAnni;
		}

		if (pianoReduced.numRateIni > 0) {
			investimentoIniziale(rataNew, $("#spinnerIniziale").val());
		} else {
			if (isMultiplo) {
				calcolaMultiplo(pianoReduced, rataNew, true);
			}
		}

		investimentoTotale(rataNew, ratePac);

	}

}

var ctrlSpinInit = function controlSpinnerIniziale(event, ui) {

	showError(false, null, null);
	var verNew = ui.value;
	var pianoReduced = $.parseJSON($('#selectPac :selected').val());
	var ratePac = pianoReduced.numRateIni > 0 ? pianoReduced.numRate : 1000000;

	if (event.target.value < ui.value) { // up

		if ((parseInt(verNew) - 1 - parseInt(ratePac)) >= 0) {
			var msg = "La durata del piano prescelta (" + pianoReduced.numAnni
					+ " anni) non prevede pi&ugrave; di " + ratePac + " rate";
			showError(true, "W", msg);
			$('#spinnerIniziale').val(verNew - 1);
		} else {
			if (pianoReduced.numRateIni > 0) {
				investimentoIniziale($('#spinnerRata').val(), verNew);
			} else {
				investimentoInizialeRataInitZero(verNew);
			}
			// investimentoTotale($('#spinnerRata').val(),ratePac);
		}

	} else { // down

		if (parseInt($('#spinnerIniziale').val()) == (parseInt(pianoReduced.numRateIni))) {
			var msg = "Il numero di versamenti iniziali non pu&ograve; essere inferiore a "
					+ pianoReduced.numRateIni;
			showError(true, "W", msg);
		} else {

			if (pianoReduced.numRateIni > 0) {
				investimentoIniziale($('#spinnerRata').val(), verNew);
			} else {
				investimentoInizialeRataInitZero(verNew);
			}
		}
	}
}

//var linkModifica = function() {
//	if ($('#reinvestimentoOut').is(':visible')) {
//		$('#reinvestimentoOut').toggle();
//	}
//	if ($('#sezioneFatca').is(':visible')) {
//		$('#sezioneFatca').toggle();
//	}
//
//	if ($('#sezioneAdeVer').is(':visible')) {
//		salvaDatiAdeVer();
//		$('#sezioneAdeVer').toggle();
//	}
//
//	bindEvent('#prosegui', "click", linkProsegui);
//	unbindEvent("#modifica", "click");
//	// $('#prosegui').removeAttr('disabled');
//
////	proseguiModificaToggle();
////	$('#wrapperOut').hide();
////	proseguiModificaTogglePre();
//}

var linkProsegui = function() {
//	$('#wrapperOut').show();
//	$('#wrapperOut').trigger('focus');
//	$('#wrapperOut').addClass("loading");
	showError(false, null, null);
	unbindEvent('#prosegui', "click");
//	$('#prosegui').attr('disabled', 'disabled');
	$('#buyFundForm').addClass("loading");
	
	var flagReinveastimentoNo = $('#cedolaSicavReinvNo');
	var flagReinveastimentoSi = $('#cedolaSicavReinvSi');
	
	errors = [], msgError="";
	var radioPolizza = $("#noPolizza"), chkBoxSintColl = $("#docSintColl"), chkBoxDatiPersonali = $("#docdatiPers");

	if ($('#polizzaPac').is(':visible')) {
		if ($('#promoEurizonFormBottom').is(':hidden')) {
			errors.push({
				field : radioPolizza,
				text : "Per proseguire devi indicare una scelta"
			});
			setHasErrors(errors, "#formEurizonPromo1");
		} else {
			if (!chkBoxSintColl.is(':checked')) {
				errors
						.push({
							field : chkBoxSintColl,
							text : "Per aderire devi confermare la presa visione e accettazione"
						});
				// doc1ErrorErr.removeAttr('data-tooltip');
			}

			if (!chkBoxDatiPersonali.is(':checked')) {
				errors.push({
					field : chkBoxDatiPersonali,
					text : "Per aderire devi dare il consenso"
				});
				// doc2ErrorErr.removeAttr('data-tooltip');
			}
			setHasErrors(errors, "#formEurizonPromo");
		}
	}

	if (stringa_S == $('#pir').val()) {
		if (!listaDepPIR[$('#deposito').val()]) {
			var arrayDeposito = $('#deposito').val().split("/");
			if (arrayDeposito[2] != "0") { // TODO - verificare per
											// mono-intestatario
				erroreDepPIR = "<b>ATTENZIONE: ERRORE SOTTO DEPOSITO</b><br>Ti ricordiamo che un Fondo PIR non pu&ograve; essere sottoscritto su un sotto-deposito diverso da quella a te intestato.";
			}
			showError(true, "E", erroreDepPIR);
//			$('#wrapperOut').removeClass("loading");
//			$('#wrapperOut').hide();
			$('#prosegui').removeAttr('disabled');
			bindEvent("#prosegui", "click", linkProsegui);
			$('#buyFundForm').removeClass("loading");
			return;
		}
	}
	
	
	if (stringa_S == buyFundSelectBeanJson.reinvestimento) {
		
		var errMsg = "Per proseguire occorre dichiarare la destinazione dei proventi";
		
		if (stringa_S == buyFundSelectBeanJson.obbligoCedola) {
			if (!flagReinveastimentoNo.is(':checked')) {
				
//				showError(true, "E", errMsg);
				
				errors
						.push({
							field : flagReinveastimentoNo,
							text : errMsg
						});
				setHasErrors(errors, "#flgReinvId");
				msgError = msgError + "<br>" + errMsg;
			}
		} else if (stringa_N == buyFundSelectBeanJson.obbligoCedola) {
			if (!flagReinveastimentoNo.is(':checked') && !flagReinveastimentoSi.is(':checked')) {
				
//				showError(true, "E", errMsg);
				
				errors
						.push({
							field : flagReinveastimentoSi,
							text : errMsg
						});
				setHasErrors(errors, "#flgReinvId");
				msgError = msgError + "<br>" + errMsg;
			}
		}
	}
		

	

	if ($('#esenzioneDivId').is(':visible')) {
		if ($("#esenzione").is(':checked')) {
			$('#esenzioneEtica').val('S');
		} else {
			$('#esenzioneEtica').val('N');
		}
		
		buyFundSelectBeanJson.perScontoComm = "0";
		
	}
	
	prosegui();
	
	if (errors.length) {
		bindEvent("#prosegui", "click", linkProsegui);
		$('#buyFundForm').removeClass("loading");
		$(errors[0].field).trigger('focus');
		showError(true, "E", msgError);
	} else {
		$('#reinvestimentoSicav').val(buyFundSelectBeanJson.reinvestimento);
	}

	return (!errors.length);

}



function acqOnLoad(inputData) {

	$.ajax({
				url : wrp_script_direct + investFolderName 	+ "/AcquistoFondoSicavJson.action" + "?cf="+ Math.random(),
				dataType : "json",
				data : inputData,
				success : function(dataOutJSON, status, jqXHR) { // jqXHR.statusText="OK";
					// status="success"
					var msg = "L&apos;operazione di Acquisto per il fondo selezionato non &egrave; al momento possibile";
					if (200 == jqXHR.status) {
						// alert(dataOutJSON.data.stato);
						try {
							buyFundSelectBeanJson = $.parseJSON( dataOutJSON.data.buyFundSelectBeanJson);
							buyFundSelectRequestJson = dataOutJSON.data.buyFundSelectRequestJson;
							cedola = dataOutJSON.data.cedola;

							if ("warning" == buyFundSelectBeanJson.action) {
								showError(true, "E",buyFundSelectBeanJson.errorMessage);
								$(	"#sezioneReipilogo,#sezioneDatiOrdine,#prosegui,#modifica")	.hide();
							}

							else if ("failure" == buyFundSelectBeanJson.action) {
								$(	"#sezioneReipilogo,#sezioneDatiOrdine,#prosegui,#modifica")	.hide();
								// showError(true,"E",buyFundSelectBeanJson.errorMessage);
								showError(true, "E", msg);
							} else if ("no_custodia" == buyFundSelectBeanJson.action) {
								$(	"#sezioneReipilogo,#sezioneDatiOrdine,#prosegui,#modifica")	.hide();
								// showError(true,"E",buyFundSelectBeanJson.errorMessage);
								showError(true, "E",	buyFundSelectBeanJson.errorMessage);
							} else {
								showError(false, null, null);

								buyFundSelectBeanJson.fondiSicavDesc = ("F" == buyFundSelectBeanJson.fondosicav) ? "Fondo": ("S" == buyFundSelectBeanJson.fondosicav) ? "Sicav"	: "";
								buyFundSelectBeanJson.dataNavDesc = $.datepicker.formatDate('dd/mm/yy', new Date(buyFundSelectBeanJson.dataNAV));
								buyFundSelectBeanJson.navDesc = "";
//								if (buyFundSelectBeanJson.nav.toString().indexOf(".") == -1) { // locale it come 21,926
//									buyFundSelectBeanJson.navDesc = buyFundSelectBeanJson.nav.toFixed(2);
//								} else if (buyFundSelectBeanJson.nav.toString().indexOf(",") == -1) { // locale en come 21.926
//									buyFundSelectBeanJson.navDesc = buyFundSelectBeanJson.nav.toString().split('.')[0].replace(/,/g, '.')	+ ','+ buyFundSelectBeanJson.nav.toFixed(2).split('.')[1];
//								}
								buyFundSelectBeanJson.navDesc = parseFloat(buyFundSelectBeanJson.nav).toLocaleString("it-IT", {minimumFractionDigits:2, maximumFractionDigits:2});
								listaDepPIR = dataOutJSON.data.listaDepPIR;
								erroreDepPIR = dataOutJSON.data.erroreDepPIR;
								startLoad();
							}
						} catch (err) {
							var msg = "L&apos;operazione di Acquisto per il fondo selezionato non &egrave; al momento possibile";
							showError(true, "E", msg);
							$(	"#sezioneReipilogo,#sezioneDatiOrdine,#prosegui,#modifica")	.hide();
						}
					} else {
						var msg = "L&apos;operazione di Acquisto per il fondo selezionato non &egrave; al momento possibile";
						showError(true, "E", msg);
						$(	"#sezioneReipilogo,#sezioneDatiOrdine,#prosegui,#modifica")	.hide();
					}
				},
				error : function(jqXHR, status, errorThrown) {
					var msg = "l'operazione di Acquisto per fondo selezionato non &egrave; al momento possibile";
					showError(true, "E", msg);
					$(	"#sezioneReipilogo,#sezioneDatiOrdine,#prosegui,#modifica")	.hide();
				},
				complete : function() {
					//startLoad();
					$("#formGroup").removeClass("loading");
					
					if(esitoRet=='KO') { 
						showError(true, "E", messaggioRet); 
					}
				}
			});

}


function refreshDepositoAcq(rapp) {
	showError(false, null, null);
	$("#sezioneDep").addClass("loading");
//	$(".hasFondo").addClass("loading");
	
	var agenziaRapp = rapp.value.split("\/")[0];
	var depositoRapp = rapp.value.split("\/")[1];
	
	//TODO - verifica se funziona con browser IE
//	$.ajax({ 
//		url : wrp_script_direct + struts2NamespaceVal + "/TotInvestibile.action?rubrica=" +  agenziaRapp.padStart(5,"0") + depositoRapp.padStart(11,"0"),
//		dataType : "json",
//		success  : function(data) {  
//			renderTotLiquidita(data);
//		}
//		,complete: function(){
//			$("#sezioneDep").removeClass("loading");
//		}
//	});
	
//	var contoRapp = $.parseJSON(Finance.depositData.depositi[$("#deposito").val()]).conto; //agn - conto - div
	
	$("#idContoRapporto").text(buyFundSelectBeanJson.listaDepositi[$('#deposito').val()].split('-')[1].trim());
	$("#idNumDescAgenziaRapporto").text(agenziaRapp + " - Webank"); //TODO - mettere desc da excel/file di config
	
	requestMargine($('#deposito').val(), "false");
	
//	setTimeout(function(){$("#sezioneDep").removeClass("loading");},1000);
	
//	loadFondi(rapp.value);  per vendita
	
}

function getElencoDepositi() {
	return $("#elencoDeposito").find('.selectorOptions');
}


function initPaginaRiepilogo() {
	
	$("#warningBox").hide();
	$("#errorBox").hide(); 
	$("#messaggio").html("");
	
	if (esito == "KO" ) {
		   //TODO - tornare indietro e visualizzare errore msg 
		 
		   $("#messaggio").html(messaggio);
		   $(".boxesito").removeClass("positivo").addClass("negativo");
		   window.scrollTo(0, 0);
		   $("#btnProsegui").hide();
		   
	   	}  else {
	   		

	   		$("#deposito")				.text(datiRplg.deposito);
	   		$('#tipoStrumento')			.text(string_S == datiRplg.fondoSicav? string_SICAV : string_Fondo); 
			$('#descrizioneFondo')		.text(datiRplg.descrizioneFondo);
			$("#categoriaFondo")		.text(datiRplg.categoriaFondo);
			$("#speseGestione")			.text(datiRplg.speseGestione);
			$("#periodoProventi")		.text(datiRplg.periodoCedola);	//periodoProventi
			$("#descrSocietaGestione")	.text(datiRplg.descrSocietaGestione);
			$("#speseGestione")			.text(datiRplg.speseGestione);
			
			if ('9' == datiRplg.codiceFamiglia) {
				$('#notaSpeseGestione').text(	" (0,20% nel periodo di sottoscrizione)");
			}
			
			
			$("#speseIngresso")			.text(datiRplg.speseIngresso);
			$("#speseUscita")			.text(datiRplg.speseUscita);
			$("#speseFisse")			.text(datiRplg.speseFisse);
			$("#dirittiCedola")			.text(datiRplg.dirittiCedola);
			$("#verIniziale")			.text(datiRplg.verIniziale);
//			$("#destProventi")			.text(datiRplg.destProventi);
			$("#importo")				.text(parseFloat(datiRplg.importo).toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " EUR");

			if(datiRplg.tipoInvestimento=='PIC') {
				$("#tipoInvestimento").text(datiRplg.tipoInvestimento);
				$('#isPac').hide();
				$('#importoRataDiv').hide();
			} else {
				
				var pictet = codiceSocietaMappa.Pictet.newCodSoc == datiRplg.codiceSocietaDiGestione;
				var pacrini0 = "S"==sessionStorage.getItem("pacrini0");
				var versInitText = !pacrini0 ? " EUR (pari a " + datiRplg.numeroRateVersate + " rate)" : " EUR";
				
				
				$("#tipoInvestimento").text("piano di accumulo (PAC)");
				$("#importoRata").text(datiRplg.importoRata + " EUR");
				
				if('F'==datiRplg.fondoSicav) {
					$(".isSicav").hide();
					$("#rateVersInitVers").text('Rate versate');
					$("#verIniziale").text(datiRplg.numeroRateVersate + " pari a " + datiRplg.importoPacSicav + " EUR");
					$("#rateResidue").text(parseInt(datiRplg.numeroRatePiano) - parseInt(datiRplg.numeroRateVersate));
				} else {
					$("#verIniziale").text(datiRplg.importoPacSicav + " EUR");
					if(pacrini0) {
						$('.isNotRataIni0').hide();
					}
				}
				
				$("#rate").text(datiRplg.numeroRatePiano);
				
				var pianoInvest = datiRplg.numeroRatePiano + (datiRplg.numeroRatePiano> 1 ? " versamenti" : " versamento");
				
				if (("S" == datiRplg.fondoSicav) || 
					("F" == datiRplg.fondoSicav && 
						(codiceSocietaMappa.Epsilon_Associati_Sgr_Spa.newCodSoc == datiRplg.codiceSocietaDiGestione || codiceSocietaMappa.Eurizon_Capital_Sgr.newCodSoc == datiRplg.codiceSocietaDiGestione))) {
					
					pianoInvest= pianoInvest + "<br>" + $.parseJSON(datiRplg.descrizionePeriodo).descrizione_periodo;
					
				} else {
					pianoInvest = datiRplg.numeroAnniPiano + (datiRplg.numeroAnniPiano> 1 ? " anni" : " anno");
				}
				
				$("#pianoInvest").html(pianoInvest);
				
				
				$($("#importo").closest('div').children()[0]).text('Investimento totale (PAC)');
				
				if ("N" == datiRplg.anticipoRate) {
					
					invTot = '(include vers. iniz.)';
				
					var importoTot = parseFloat(datiRplg.importo) + parseFloat(datiRplg.importoPacSicav);
	
					$('#importo').text(	importoTot.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")  + ' EUR ' + invTot);
				}
				
			}
			
			
			$('#lblQuotaDataNav').html('Valore quota'+ ' / NAV.del ' + $.datepicker.formatDate('dd/mm/yy', new Date(datiRplg.dataNAV)));
			$('#nav').text(parseFloat(datiRplg.nav).toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + ' ' + datiRplg.divisa);
			
			$('#numeroAppropriatezza').val(datiRplg.numeroAppropriatezza);
			
			$(".hasCedola").hide();
			if(string_vuoto != datiRplg.flagReinvestimento) {
				$(".hasCedola").show();
				if(string_S == datiRplg.flagReinvestimento){
					$("#destProventi")			.text("Reinvestimento nel fondo/comparto");
				}
				else if(string_N == datiRplg.flagReinvestimento){
					$("#destProventi")			.text("Accredito in conto");
				}
			}
	   	}
	
	
	$("#indietroBtnRep").click(function(){
		
		daPreview += $("#numeroAppropriatezza").val();
		
		$("<input />").attr("type", "hidden")
        .attr("name", "PREVIEW")
        .attr("value", daPreview)
        .appendTo("#acquistoRiepilogo");
		$("<input />").attr("type", "hidden")
        .attr("name", "codInt")
        .attr("value", datiRplg.codiceTitolo)
        .appendTo("#acquistoRiepilogo");
		$("<input />").attr("type", "hidden")
        .attr("name", "codIsin")
        .attr("value", datiRplg.codiceIsin)
        .appendTo("#acquistoRiepilogo");
		$("<input />").attr("type", "hidden")
        .attr("name", "divisa")
        .attr("value", datiRplg.divisa)
        .appendTo("#acquistoRiepilogo");
		
		$("#acquistoRiepilogo").attr("action","AcquistoFondo.action?"+"cf=" + Math.random() + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
		$("#acquistoRiepilogo").submit();
	});
	
}

function  confermaRiepilogo(){
	
	$('#acquistoRiepilogo').addClass("loading");	//quando non c'e OTP
//	window.setTimeout(function(){
		$('#acquistoRiepilogo').attr('action',"AcquistoFondoConfirm.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=" + obskeyVal)
								.submit();
//	},10000); //prova per lentezza di server
}


function visualizzaPreview() {
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
    	$("#errorBox").hide();
    	$("#messaggio").html("");
		$("#warningBox").hide();

//		$("#preview").show();
//		$("#sezionePir").hide();	//TODO - verifica se serve 
		
		
		showDatiPreview();
		
		
    }
	
	$("#sectionPreview").removeClass("loading");
}



var linkConferma = function() { 
    
    $("#sectionPreview").addClass("loading");
	unbindEvent('#conferma','click');
	
	errors = [];
	var chkBoxAvvertenze = $("input[name=checkAvvertenze]");
	var chkBoxIncentivi = $("input[name=checkIncentivi]");

	var chkBoxProspetto = $("#checkProspetto");
	var radioPrivacyNo = $("#flagPrivacyNo");

	$("#acquistoFundFormPreview").find($(".has-error")).removeClass("has-error");

	if ($('#sezionePir').is(':visible')) {
		if (!$("#checkboxPir").is(':checked')) {
			errors
					.push({
						field : $("#checkboxPir"),
						text : "Per proseguire occorre dichiarare di non essere titolare di altri fondi PIR"
					});
			setHasErrors(errors, "#sezionePir");
		}
	}

	if ($('#idInducement').is(':visible')) {
		if (!chkBoxIncentivi.is(':checked')) {
			errors
					.push({
						field : chkBoxIncentivi.parent()
								.parent().parent(),
						text : "Per proseguire occorre dichiarare di avere preso visione delle informazioni relative ai Costi, Oneri e Incentivi"
					});
			setHasErrors(errors, chkBoxIncentivi.parent()
					.parent().parent());
			if ($("#sezioneCostiInducementInv").find(	".panel-collapse.collapse.in").length == 0) {
				$("#sezioneCostiInducementInv i").first(".icon .icon-arrow_down").trigger("click");
			}

		}
	}

	if ($('#idAvvertenze').is(':visible')) {
		if (!chkBoxAvvertenze.is(':checked')) {
			errors
					.push({
						field : chkBoxAvvertenze,
						text : "Per proseguire occorre dichiarare di aver preso visione delle informazioni relative alla Liquidit&agrave; e conflitto di interessi"
					});
			setHasErrors(errors, "#idAvvertenze");
		}
	}

	var checkLimitazioni = $("input[name=checkLimitazioni]");
	if (!checkLimitazioni.is(':checked')) {
		errors
				.push({
					field : checkLimitazioni.parent().parent().parent(),
					text : "Per proseguire occorre dichiarare di avere preso visione dell'informativa OICVM"
				});
		setHasErrors(errors, checkLimitazioni.parent().parent().parent());

	}

	var checkMandatoSIP = $("input[name=checkMandatoSIP]");
	if (!checkMandatoSIP.is(':checked')) {
		errors
				.push({
					field : checkMandatoSIP.parent()
							.parent().parent(),
					text : "Per proseguire occorre dichiarare di avere preso visione dell'informativa OICVM"
				});
		setHasErrors(errors, checkMandatoSIP.parent()
				.parent().parent());

	}

	var checkPrivacyOICVM = $("input[name=checkPrivacyOICVM]");
	if (!checkPrivacyOICVM.is(':checked')) {
		errors
				.push({
					field : checkPrivacyOICVM.parent()
							.parent().parent(),
					text : "Per proseguire occorre dichiarare di avere preso visione dell'informativa OICVM"
				});
		setHasErrors(errors, checkPrivacyOICVM.parent()
				.parent().parent());

	}

	if (!chkBoxProspetto.is(':disabled')) {
		errors
				.push({
					field : chkBoxProspetto,
					text : "Per proseguire occorre avere preso visione del documento relativo al prospetto informativo"
				}); // check : per sicav si chiama prospetto
		// inf .. per fondo si chiama doc obb
		setHasErrors(errors, "#idDocumentazione");
		// conferma = "KO";
	}

	if (!chkBoxProspetto.is(':checked')) {
		errors
				.push({
					field : chkBoxProspetto,
					text : "Per proseguire occorre dichiarare di avere preso visione dell'intera documentazione informativa"
				});
		setHasErrors(errors, "#idDocumentazione");
		// conferma = "KO";
	}

	if ($('#idConsensoDatiPersonali').is(':visible')) {
		if (!$('#flagPrivacySi').is(':checked')
				&& !$('#flagPrivacyNo').is(':checked')) {
			errors
					.push({
						field : radioPrivacyNo,
						text : "Per proseguire occorre dichiarare di dare o meno il consenso al trattamento dei dati personali"
					});
			setHasErrors(errors, "#idConsensoDatiPersonali");
			// conferma = "KO";
		}
	}

	if (errors.length) {
		$("#sectionPreview").removeClass("loading");
		$(errors[0].field).trigger('focus');
	} else {
		conferma();
	}

	bindEvent('#conferma','click',linkConferma);
	return (!errors.length);

}


function showDatiPreview() {
	
	$('#numeroAppropriatezza').val(buyFundPreviewBeanJson.numeroAppropriatezza);
	$("#strumentoFinanziarioInv").text(buyFundPreviewBeanJson.descrSocietaGestione);
//	$("#strumentoFinanziarioInv").text(buyFundPreviewBeanJson.codiceIsin);
	$("#controvaloreOperazioneInv").text(buyFundPreviewBeanJson.importo + " EUR");
	
	$("form[name='formPdf'] input[name='keyDocumento']").val(buyFundPreviewBeanJson.codiceIsin);
	$("#linkDocObb").text("Informazioni chiave per l\'investitore (KIID) " + buyFundPreviewBeanJson.codiceIsin);
	$("#linkDocObb1").text("Modulo di sottoscrizione " + buyFundPreviewBeanJson.codiceIsin);
	
	
	$('#checkProspetto').attr('disabled', 'disabled');
	$('#checkProspetto').click(function() {
		if ($(this).is(':checked')) {
			$(this).attr('disabled', 'disabled');
		}
	});
	
	$("#indietro2").click(function(){
		
		$("<input />").attr("type", "hidden")
        .attr("name", "codInt")
        .attr("value", codiceTitolo)
        .appendTo("#acquistoFundFormPreview");
		
		$("<input />").attr("type", "hidden")
        .attr("name", "codIsin")
        .attr("value", codiceIsin)
        .appendTo("#acquistoFundFormPreview");
		
		$("<input />").attr("type", "hidden")
        .attr("name", "divisa")
        .attr("value", divisa)
        .appendTo("#acquistoFundFormPreview");
		
		$("#acquistoFundFormPreview").attr("action","AcquistoFondo.action?"+"cf=" + Math.random() + "&OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+obskeyVal);
		$("#acquistoFundFormPreview").submit();
	});
	
	
	Finance.tempistiche("AQ",buyFundPreviewBeanJson.codiceSocietaDiGestione);
	showDatiMifid();
	
	$('#linkDocCostiOneriIncentInv').click(function() {
		
		var mapForm = document.createElement("form");
		mapForm.id = "frmPdfMifidInv";
		mapForm.style = "display:none";
		mapForm.target = "_blank";
		mapForm.method = "POST"; // or "post" if appropriate
		mapForm.action = wrp_script + investFolderName	+ "/PdfMifid2CostiInducement.action";

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

		$("#frmPdfMifidInv").remove();

		
	});
	
	if ((buyFundPreviewRequestJson.adeguatezza != undefined && buyFundPreviewRequestJson.adeguatezza 	!= null && buyFundPreviewRequestJson.adeguatezza.length > 0) || 
			(buyFundPreviewRequestJson.conflitti 	!= undefined && buyFundPreviewRequestJson.conflitti 	!= null && buyFundPreviewRequestJson.conflitti.length 	 > 0) || 
			(buyFundPreviewRequestJson.messaggi 	!= undefined && buyFundPreviewRequestJson.messaggi 	!= null && buyFundPreviewRequestJson.messaggi.length 	 > 0)) {
			// 
			popolaListaDaArray("#listaAdeguatezza", buyFundPreviewRequestJson.adeguatezza, false, "", "messaggio"); // codice
			popolaListaDaArray("#listaConflitti", buyFundPreviewRequestJson.conflitti,     false, "", "messaggio");
			// 

			$("#checkAvvertenze").prop("checked", false);
			$('#idAvvertenze').show();
		}
	
	
	$('#linkDocObb').click(
			function() {
				docOn |= 1;
				if (docOn == 3 && !$('#checkProspetto').is(':checked')) {
					$('#checkProspetto').removeAttr('disabled');
					resetErrors('#checkProspetto'); // check
					removeTxtTooltip('#checkLinkProspetto');
				}

				if (newRepoAbilitati == false) {
					open(wrp_script + "/common/apriDocumento.action?id="
							+ buyFundPreviewRequestJson.idDocProspetto
							+ "&prodotto="
							+ buyFundPreviewRequestJson.idTypeProspetto
							+ "&isPDF=true");
				} else {
					apriNewDocumenti("kiid");
				}

			});

	$('#linkDocObb1').click(
			function() {
				docOn |= 2;
				if (docOn == 3 && !$('#checkProspetto').is(':checked')) {
					$('#checkProspetto').removeAttr('disabled');
					resetErrors('#checkProspetto'); // check
					removeTxtTooltip('#checkLinkProspetto');
				}

				if (newRepoAbilitatiSott == false) {
					open(wrp_script + "/common/apriDocumento.action?id="
							+ buyFundPreviewRequestJson.idDocModulo
							+ "&prodotto="
							+ buyFundPreviewRequestJson.idTypeProspetto
							+ "&isPDF=true");
				} else {
					apriNewDocumenti("sot");
				}

			});
	
// var conferma = "OK";
	

	  bindEvent('#conferma','click', linkConferma);

		$('#checkIncentivi').click(function() {
			resetHasErrors("#idInducement");
		});
	
		$('#checkAvvertenze').click(function() {
			resetHasErrors($("#idAvvertenze"));
		});

		$('#checkProspetto').click(function() {
			resetHasErrors("#idDocumentazione");
		});
		
		
		$("input[name=checkLimitazioni]").prop('checked', false);
		resetHasErrors($("input[name=checkLimitazioni]").parent().parent().parent()	.parent());
		$("input[name=checkLimitazioni]").click(function() {
					resetHasErrors($("input[name=checkLimitazioni]").parent().parent().parent().parent());
				});
	
		$("input[name=checkMandatoSIP]").prop('checked', false);
		resetHasErrors($("input[name=checkMandatoSIP]").parent().parent().parent().parent());
		$("input[name=checkMandatoSIP]").click(
				function() {
					resetHasErrors($("input[name=checkMandatoSIP]").parent().parent().parent().parent());
				});
	
		$("input[name=checkPrivacyOICVM]").prop('checked', false);
		resetHasErrors($("input[name=checkPrivacyOICVM]").parent().parent().parent().parent());
		$("input[name=checkPrivacyOICVM]").click(
				function() {
					resetHasErrors($("input[name=checkPrivacyOICVM]").parent().parent().parent().parent());
				});
		
		
		
	
}   



function conferma() {
	
	$('#numeroRiferimentoMifid').val(datiMifid.numeroRiferimento);
	
//	window.setTimeout(function(){
		$("#acquistoFundFormPreview").attr("action", "AcquistoFondoRiepilogo.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto_new");
		$("#acquistoFundFormPreview").submit();
//	},10000); //prova per lentezza di server
	
}

function showDatiMifid() {

	$('#idInducement').show();
//	datiMifid = buyFundPreviewRequestJson.datiMifid;
	
	if (datiMifid == undefined) {
		datiMifid = {};
		// datiMifid.codiceSocieta = buyFundSelectBeanJson.codiceSocieta;
	}

	datiMifid.strumentoFinanziario = buyFundPreviewBeanJson.descrizioneFondo; //buyFundSelectBeanJson.nomeComparto; descrizioneFondo

	var controValore = "";   // controvalore da bean
	
//	if ("S"==buyFundSelectBeanJson.pac)
//		controValore = buyFundSelectBeanJson.investimentoIniziale;
//	else {
//		controValore = buyFundSelectBeanJson.importo;
//		if (buyFundSelectBeanJson.enableBuyNoEur) {
//			controValore = buyFundSelectBeanJson.importoValuta;
//		}
//	}
	
	 datiMifid.controvaloreOperazione = parseFloat(buyFundPreviewBeanJson.importo).toLocaleString("it-IT",{minimumFractionDigits:2}) + " &euro;";
	 
		
	 if(datiMifid.datiCostiServizio == undefined){
		 datiMifid.datiCostiServizio = [
			 {descCostiServizio:"Costi del servizio"			,importoCostiServizio:"0,00 &euro;"		,percentualeCostiServizio:"0,00 &#37;"},
			 {descCostiServizio:"Spese una tantum &#8208; ingresso"	,importoCostiServizio:"0,00 &euro;"		,percentualeCostiServizio:"0,00 &#37;"},
			 {descCostiServizio:"Spese correnti"					,importoCostiServizio:"0,00 &euro;"		,percentualeCostiServizio:"0,00 &#37;"},
			 {descCostiServizio:"Spese per operazioni"				,importoCostiServizio:"0,00 &euro;"		,percentualeCostiServizio:"0,00 &#37;"},
			 {descCostiServizio:"Costi accessori"					,importoCostiServizio:"0,00 &euro;"		,percentualeCostiServizio:"0,00 &#37;"},
			 {descCostiServizio:"Spese per servizi accessori"		,importoCostiServizio:"0,00 &euro;"		,percentualeCostiServizio:"0,00 &#37;"},
			 
			 {descCostiServizio:"Costi del prodotto"			,importoCostiServizio:"<b>0,00 &euro;</b>"		,percentualeCostiServizio:"<b>0,00 &#37;</b>"},
			 {descCostiServizio:"Spese una tantum &#8208; ingresso"	,importoCostiServizio:"0,00 &euro;"		,percentualeCostiServizio:"0,00 &#37;"},
			 {descCostiServizio:"Spese correnti"					,importoCostiServizio:"0,00 &euro;"		,percentualeCostiServizio:"0,00 &#37;"},
			 {descCostiServizio:"Spese per operazioni"				,importoCostiServizio:"0,00 &euro;"		,percentualeCostiServizio:"0,00 &#37;"},
			 {descCostiServizio:"Costi accessori"					,importoCostiServizio:"0,00 &euro;"		,percentualeCostiServizio:"0,00 &#37;"}
			 
		 ];
		 datiMifid.totaleImportoCostiServizio	  = ""
		 datiMifid.totalePercentualeCostiServizio = "";
		 
		datiMifid.datiCostiAnnuale = [
//				 {descCostiAnnuale:"<b>Costi del servizio</b>"			,importoCostiAnnuale:""					,percentualeCostiAnnuale:"0,00 &#37;"},
				 {descCostiAnnuale:"Spese una tantum &#8208; Uscita"	,importoCostiAnnuale:"0,00 &euro;"		,percentualeCostiAnnuale:"0,00 &#37;"},
//				 {descCostiAnnuale:"<b>Costi del prodotto</b>"			,importoCostiAnnuale:""					,percentualeCostiAnnuale:"0,00 &#37;"},
				 {descCostiAnnuale:"Spese una tantum &#8208; Uscita"	,importoCostiAnnuale:"0,00 &euro;"		,percentualeCostiAnnuale:"0,00 &#37;"}
		];		 
		
		datiMifid.datiIncentiviAnnuale = [
			{descIncentiviAnnuale:"Una tantum"	,importoIncentiviAnnuale:"0,00 &euro;"	,percentualeIncentiviAnnuale:"0,00 &#37;"},
			{descIncentiviAnnuale:"Ricorrenti"	,importoIncentiviAnnuale:"0,00 &euro;"	,percentualeIncentiviAnnuale:"0,00 &#37;"}
		];
		datiMifid.totaleImportoIncentiviAnnuale		= "0,00 &euro;"
		datiMifid.totalePercentualeIncentiviAnnuale = "0,00 &#37;";
		
		datiMifid.datiControvaloreLordo = [
			{descControvaloreLordo:"Commissioni di uscita"	,importoControvaloreLordo:"0,00 &euro;"	,percentualeControvaloreLordo:"0,00 &#37;"},
			{descControvaloreLordo:"Commissioni di ingresso",importoControvaloreLordo:"0,00 &euro;"	,percentualeControvaloreLordo:"0,00 &#37;"},
			{descControvaloreLordo:"Altre commissioni"		,importoControvaloreLordo:"0,00 &euro;"	,percentualeControvaloreLordo:"0,00 &#37;"}
		];
	 }
	
	datiMifid.importoControvaloreLordo	 		 = datiMifid.controvaloreOperazione;
	datiMifid.percentualeControvaloreLordo 		 = "100,00 &#37;";
	datiMifid.totaleImportoControvaloreLordo	 = parseFloat(buyFundPreviewBeanJson.importo);
	datiMifid.totalePercentualeControvaloreLordo = parseFloat(100);
	
	
	showDatiMifid2_tab8(datiMifid);
	
	
	
	
}

function startLoad() {

	$('#erroreForm').hide(); // nasconde sezione di errore
//	$('#datiRiepilogo').text(	$('#datiRiepilogo').text() + ' '	+ buyFundSelectBeanJson.fondiSicavDesc);
	popolaReipilogoDati(buyFundSelectBeanJson, buyFundSelectRequestJson);

	// solo in sezione di prima visualizza
	if (buyFundSelectRequestJson.noteComm != undefined) {
		conditionalTooltip(
				buyFundSelectRequestJson.noteComm.notaSpeseIngressoDa,
				buyFundSelectRequestJson.noteComm.notaSpeseIngressoA,
				'#commIngresso',
				buyFundSelectRequestJson.noteComm.notaSpeseIngresso);
		conditionalTooltip(
				buyFundSelectRequestJson.noteComm.notaSpeseGestioneDa,
				buyFundSelectRequestJson.noteComm.notaSpeseGestioneA,
				'#commGestione',
				buyFundSelectRequestJson.noteComm.notaSpeseGestione);
	} else {
		removeTooltip('#commIngresso');
		removeTooltip('#commGestione');
	}

	popolaDettDestProventi(buyFundSelectBeanJson);
	popolaDepositiMargine(buyFundSelectBeanJson);

	//var elencoDepositi = getElencoDepositi;
	
	// visualizzazione del primo deposito per acquisto pir 
	$("#pir").val(buyFundSelectBeanJson.pir);
	if (buyFundSelectBeanJson.pir == "S" && $("#elencoDeposito").find('.selectorOptions').length > 0) {

		$("#elencoDeposito").find('.selectorOptions.selected').removeClass('selected');
		
		$.each($("#elencoDeposito").find('.selectorOptions'),function() {
			if( $(this).attr('value')) {
				if (listaDepPIR[$(this).attr('value')]) {
					$(this).addClass('selected');
					$(this).trigger("click");
					return false;
				} 
			}
		});
		
	}

	if ('S' == buyFundSelectBeanJson.pac) {
		var modInvestimentoTooltip = "<b>Pic</b>. E' la sigla di Piano di investimento di capitale. Con questa opzione acquisti quote di un fondo o azioni di una sicav in <b>un'unica soluzione</b>.<BR/><b>Pac</b>. E' la sigla di Piano di accumulo del capitale. Investi nel fondo o nella sciav tramite <b>versamenti periodici</b>, anche di piccoli importi.";
		addTooltip('#modInvestimentoTxt', modInvestimentoTooltip);
		$('#radiobuttonPic').prop('checked', true);
	} else {
		removeTooltip('#modInvestimentoTxt');
		$('#isPac').hide();
		$('#isNotPac').show();
	}

	// Importo senza decimale e valore negativi
	$('#importoPic').bind('keydown', function(e) {
		resetHasErrors($("#importoPic").parent().parent().parent().parent().parent().parent());
		verificaImporto(e);
	});

	// check - $fromCart 117->222 111->200
	if ((codiceSocietaMappa.JPMorgan_Funds.newCodSoc == buyFundSelectBeanJson.codiceSocieta
			|| codiceSocietaMappa.JPI_Funds.newCodSoc == buyFundSelectBeanJson.codiceSocieta || codiceSocietaMappa.Carmignac_Gestione_SA.newCodSoc == buyFundSelectBeanJson.codiceSocieta)
			&& buyFundSelectBeanJson.divisa != "EUR") {
		$("#importoPicDivisa").text(buyFundSelectBeanJson.divisa);
		$("#importoPicDivisa").val(buyFundSelectBeanJson.divisa);
		var divisaTooltip = "Per garantire l'accettazione dell'ordine entro i minimi di sottoscrizione e dei diritti fissi previsti, &egrave; stato adottato un cambio conservativo al fine di tener conto di eventuali oscillazioni del cambio stesso";
		addTooltip("#importoPicTxt", divisaTooltip);

		$('#importoPic').bind('keyup change', function() {
			calcoloImportoDivisa();
		});
	} else {
		$("#importoPicDivisa").text('EUR');
		removeTooltip("#importoPicTxt");
	}

	if (codiceSocietaMappa.Anima_Asset_Management_Ltd.newCodSoc == buyFundSelectBeanJson.codiceSocieta
			&& "x" == buyFundSelectBeanJson.codiceFamiglia) {
		$("#cedolaSicavId").show();
		$("#cedolaSicavRadioId").show();
	}

	if (codiceSocietaMappa.Etica_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta) {
		$("#esenzioneDivId").show();
	}

//	$('#modifica').hide();
	// check : forse solo dentro abilitaPac
	$('#polizza').val('');// check :$polizza
//	$('#controlloFatca').val('false');
	$('#docSintColl').attr('disabled', 'disabled');
	$('#docdatiPers').attr('disabled', 'disabled');

	$('#radiobuttonPic').click(function() {

		$("#lblimpminprisott").show();
		$("#lblimpminsottsucc").show();
		$("#lblimpmininvinitpac,#lblimpminratainitpac").hide();

		$("#bloccoPic").show();
		$("#bloccoPac").hide();
		$("#polizzaPac").hide();

		abilitaPic();

	});

	$('#radiobuttonPac').click(function() {

		$("#lblimpminprisott").hide();
		$("#lblimpminsottsucc").hide();
		$("#lblimpmininvinitpac, #lblimpminratainitpac").show();

		$("#bloccoPac").show();
		$("#bloccoPic").hide();

		abilitaPac();

	});

	$('#selectPac,#selectPeriodo').change(function() {
		caricaImporto();
	});

	$('#selectPeriodoEpsilon,#selectPeriodoSicav').change(function() {
		cambiaPiani('#' + $(this).attr('id'));
		caricaImporto();
	});

	$('#prosegui').click(linkProsegui);
	//
	// $('#modifica').click(linkModifica);

	$('#noPolizza').click(function() {
		$(this).prop('checked', false);
		$("#promoEurizonFormBottom").hide();
		$("#polizzaPac").hide();
		$('#polizza').val('N');
		resetHasErrors("#formEurizonPromo");
		resetHasErrors("#formEurizonPromo1");
	});

	$('#siPolizza')
			.click(
					function() {
						$("#promoEurizonFormBottom").show();
						$('#polizza').val('S');
						resetHasErrors("#formEurizonPromo");
						resetHasErrors("#formEurizonPromo1");

						if (!$('#docSintColl').is(':checked')) {
							addTxtTooltip(
									'#checkFirst',
									"Prima di procerdere occorre prendere visione obbligatoria del Documento di Sintesi della polizza, aprendo il relativo pdf, salvandolo e/o stampandolo per poterlo conservare.");
						}

						if (!$('#docdatiPers').is(':checked')) {
							addTxtTooltip(
									'#checkSecond',
									"Prima di procerdere occorre prendere visione obbligatoria del Consenso Privacy, salvandolo e/o stampandolo per poterlo conservare.");
						}
					});

	// una volta selezionata la presa visione disabilito l'input
	$('#docSintColl, #docdatiPers').click(function() {
		if ($(this).is(':checked')) {
			$(this).attr('disabled', 'disabled');
			resetHasErrors($(this).parent().parent().parent());
		}

	});

	$('#linkPolAssicDoc')
			.click(
					function() {
						if (buyFundSelectRequestJson.idDocPolizza != undefined
								&& buyFundSelectRequestJson.idDocPolizza != ''
								&& buyFundSelectRequestJson.idTypeProspetto != undefined
								&& buyFundSelectRequestJson.idTypeProspetto != '') {
							open(wrp_script
									+ "/common/apriDocumento.action?id="
									+ buyFundSelectRequestJson.idDocPolizza
									+ "&prodotto="
									+ buyFundSelectRequestJson.idTypeProspetto
									+ "&isPDF=true");
						} else {
							showError(true, "W", "Documento non esiste");
						}
					});

	$('#linkPolSinDoc').click(
			function() {
				if (!$('#docSintColl').is(':checked')) {
					$('#docSintColl').removeAttr('disabled');
					resetErrors('#docSintColl'); // check
					removeTxtTooltip('#checkFirst');
				}
				open(wrp_script + "/common/apriDocumento.action?id="
						+ buyFundSelectRequestJson.idDocSintesi + "&prodotto="
						+ buyFundSelectRequestJson.idTypeProspetto
						+ "&isPDF=true");
			});

	$('#linkPolPrivDoc').click(
			function() {
				if (!$('#docdatiPers').is(':checked')) {
					$('#docdatiPers').removeAttr('disabled');
					resetErrors('#docdatiPers');
					removeTxtTooltip('#checkSecond');
				}
				// check : stesso doc di sintesi - solo ancor a ultima pagina
				open(wrp_script + "/common/apriDocumento.action?id="
						+ buyFundSelectRequestJson.idDocPrivacy + "&prodotto="
						+ buyFundSelectRequestJson.idTypePrivacy + "&anchor="
						+ buyFundSelectRequestJson.privacyAnchor
						+ "&isPDF=true");
			});

	if ("S" == buyFundSelectBeanJson.reinvestimento) {
			
			$('#cedolaSicavReinvSi').prop('checked', false);
			$('#cedolaSicavReinvNo').prop('checked', false);
			$('#textFlgReinv').hide();
			$('#textFlgReinv').find('.col-xs-12').html(	"<p class='note'></p>");
			
			
	
			if ("" == cedola.resFlagReinvestimento) {
				if (stringa_N == buyFundSelectBeanJson.obbligoCedola) {
//					$('#cedolaSicavRadioId').show();
					if (codiceSocietaMappa.FIL_Inv_Mgmt_Lux_SA.newCodSoc == buyFundSelectBeanJson.codiceSocieta) {
						$('#textFlgReinv').find('.col-xs-12').html(
										"<p class='note'><strong>Nota:</strong> nell&apos;opzione accredito, si ricorda che per cedole pari ad un controvalore inferiore a 50 USD, Fidelity proceder&agrave; al reinvestimento in quote.</p>");
						$('#textFlgReinv').show();
					}
				} else if (stringa_S == buyFundSelectBeanJson.obbligoCedola) {
//					$('#cedolaSicavRadioId').show();
//					$('#cedolaSicavReinvSi').parent().hide();
					$('#cedolaSicavReinvSi, #cedolaSicavReinvNo').attr('disabled', 'disabled');
					$('#cedolaSicavReinvNo').prop('checked', true);
					$('#flagReinvestimento').val(stringa_N);
				}
			} else if (stringa_S == cedola.resFlagReinvestimento) {
				$('#textFlgReinv').find('.col-xs-12').html(
								"<p class='note'>Per variare la scelta fatta in fase di prima sottoscrizione (accredito sul conto corrente) inviare un fax al n. 045.8217263 indicando la nuova volont&agrave;.</p>");
				$('#textFlgReinv').show();
				$('#flagReinvestimento').val(stringa_S);
				$('#cedolaSicavReinvSi').prop('checked', true);
				$('#cedolaSicavReinvSi, #cedolaSicavReinvNo').attr('disabled', 'disabled');
//				$('#cedolaSicavRadioId').show();
//				$('#cedolaSicavReinvNo').parent().hide();
				
			} else if (stringa_N == cedola.resFlagReinvestimento) {
				$('#textFlgReinv').find('.col-xs-12').html(
								"<p class='note'>Per variare la scelta fatta in fase di prima sottoscrizione (accredito sul conto corrente) inviare un fax al n. 045.8217263 indicando la nuova volont&agrave;.</p>");
				$('#textFlgReinv').show();
				$('#flagReinvestimento').val(stringa_N);
				$('#cedolaSicavReinvNo').prop('checked', true);
				$('#cedolaSicavReinvNo, #cedolaSicavReinvSi').attr('disabled', 'disabled');
//				$('#cedolaSicavRadioId').show();
//				$('#cedolaSicavReinvSi').parent().hide();
			}
			$('#cedolaSicavId').show();
		}

		$('#cedolaSicavReinvSi').click(function() {
			$('#flagReinvestimento').val(stringa_S);
			resetHasErrors("#cedolaSicavId");
		});
		$('#cedolaSicavReinvNo').click(function() {
			$('#flagReinvestimento').val(stringa_N);
			resetHasErrors("#cedolaSicavId");
		});
	
	
	    if(acqFrm!=null && acqFrm!='null') {
	    	initFromSessione();
	    }
	
	
}

function initFromSessione( ) {
	
	// inizializzare i valori della pagina con quelli presenti in daPreview
	
	//codint, isin, divisa
	
	   if("PAC"==acqFrm.tipoInvestimento) {
		   
		   $('#radiobuttonPac').trigger('click');
		 
		   
		   // selezione deposito
		   $.each($('#elencoDeposito > span.group > a.selectorOptions'), function() { 
			   
			   if($(this).attr('value')==acqFrm.deposito) {
				   $(this).trigger('click');
			   }
		    });
		   
		   $.each($('#selectPeriodoSicav option'), function() { 
			   if(acqFrm.periodoPiano==$(this).text().substr(0,1)) {
				    $('#selectPeriodoSicav').val($(this).val());
				    $('#selectPeriodoSicav').trigger('change');
				    return true;
			   }
			});
		   
		   $.each($('#selectPac option'), function() { 
			   if(acqFrm.descrizionePianoPac==$(this).text()) {
				    $('#selectPac').val($(this).val());
				    $('#selectPac').trigger('change');
				    return true;
			   }
			});  
		 
		   
		   $('#spinnerRata').val(acqFrm.importoRata);
		   $('#spinnerIniziale').val(acqFrm.numeroRateVersate); 
		   
		   investimentoIniziale(acqFrm.importoRata, acqFrm.numeroRateVersate);
		   investimentoTotale(acqFrm.importoRata, acqFrm.numeroRatePiano);
		   
		   
		   if($('#polizzaPac').is(':visible')) {
			   if('N'==acqFrm.polizza) {
				   $('#noPolizza').trigger('click');
				   
			   } else {
				   $('#siPolizza').trigger('click');
				   
				   $('#docSintColl').removeAttr('disabled');
				   $('#docdatiPers').removeAttr('disabled');
				   
				   $('#docSintColl').trigger('click');
				   $('#docdatiPers').trigger('click');
				   
				   $('#docSintColl').attr('disabled', 'disabled');
				   $('#docdatiPers').attr('disabled', 'disabled');
				   $('#promoEurizonFormBottom').show();
				   
			   }
		   }
		   
		   
	   } else {
	
		   $('#radiobuttonPic').trigger('click');
		   $('#importoPic').val(acqFrm.importo);
		   $('#importoPic').trigger('keydown');
		   
	   }
	
	
		if($('#cedolaSicavId').is(':visible')) {
			if('N'==acqFrm.flagReinvestimento) {
				$('#cedolaSicavReinvNo').trigger('click');
			} else {
				$('#cedolaSicavReinvSi').trigger('click');
			}
		}
	
	
	
}


// Funzionalita simile per campi di importoMinIni e importoMinSuc
function importoMin(jsonBean, idName, jsonField, percentageValue) {
	if (jsonBean.enableBuyNoEur) {
		$(idName).text(new Number(jsonField).valueOf() + ' ' + jsonBean.divisa);
	} else {
		//	
		if ((codiceSocietaMappa.Carmignac_Gestione_SA.newCodSoc == jsonBean.codiceSocieta
				|| codiceSocietaMappa.Carmignac_Gest_Luxemb_SA.newCodSoc == jsonBean.codiceSocieta || codiceSocietaMappa.Amundi_Funds.newCodSoc == jsonBean.codiceSocieta)
				&& jsonBean.iresmin > 0) {

			var numDirFissi = new Number(jsonBean.dirittiFissi.substring(0, 2));
			var impSuc = jsonBean.nav * percentageValue / 100;
			var impSucFin = Math.ceil(impSuc) + numDirFissi;

			if (jsonBean.divisa != 'EUR' && idName == '#importoMinIni') {
				impSucFin += Math.ceil(jsonBean.nav * 0.10);
			}

			$(idName).text(impSucFin + " EUR");
		} else {
			$(idName).text(new Number(jsonField).valueOf() + ' EUR');
		}
	}
}

function checkDate(dateTocheck, startDate, endDate) {
	return (startDate != null && endDate != null && startDate <= dateTocheck && dateTocheck <= endDate);
}

function addTooltip(idLable, tooltip) {
	// $(idLable).attr("class","control-label-output txthelp closeable");
	// $(idLable).attr("data-toggle","tooltip");
	$(idLable).attr("data-title", tooltip);
}

function conditionalTooltip(startDate, endDate, idLable, tooltip) {
	if (tooltip) {
		if (checkDate(new Date().getTime(), new Date(startDate).getTime(),
				new Date(endDate).getTime())) {
			addTooltip(idLable, tooltip);
		} else {
			removeTooltip(idLable);
		}
	} else {
		removeTooltip(idLable);
	}
}

function removeTooltip(idLable) {
	// $(idLable).attr("class","control-label-output");
	$(idLable).removeClass("txthelp");
	$(idLable).removeClass("closeable");

	$(idLable).attr("data-toggle", "");
	$(idLable).attr("data-title", '');
	$(idLable).off('click shown');
}

// nasconde/visualizza sezione di errore/warning/successo
// show = true/false; tipo="E"(error)/"W"(warning)/"S"(success)
function showError(show, tipo, msg) {
	if (!show) {
		$('#erroreForm').hide();
		$("#messaggio").html("");
	} else {
		var errorBorderClass = ''
		// , errorIconType = ''
		;
		if ("E" == tipo) {
			errorBorderClass = 'negativo';
			// errorIconType = 'icon icon-alert_error icon-2x';
		} else if ("W" == tipo) {
			errorBorderClass = 'attenzione';
			// errorIconType = 'icon icon-alert_caution icon-2x';
		}
		$("#errorBorder").addClass(errorBorderClass);
		// $("#errorType").attr('class',errorIconType);
		$("#messaggio").html(msg);
		$('#erroreForm').show();
		window.scrollTo(0, 0);
	}
}

function abilitaPic() {
	// $("#radiobuttonPic").prop("checked", true); //DA VERIFICARE
	// $("#radiobuttonPac").prop("checked", false);

	sessionStorage.removeItem("pacrini0");

	$('#lblimpminsottsucc').show();
	$('#importoMinSuc').show();

	if (codiceSocietaMappa.Eurizon_Capital_Sgr.newCodSoc == buyFundSelectBeanJson.codiceSocieta) {
		resetDatiPolizza(); // check todo
	}

	$('#dirFissi').text(buyFundSelectBeanJson.dirittiFissi);
	$('#dirFissi').val(buyFundSelectBeanJson.dirittiFissi);
	// $('#dirittiFissi').text(buyFundSelectBeanJson.dirittiFissi); //check - se
	// serve e se serve value ?
	importoMin(buyFundSelectBeanJson, '#importoMinIni',
			buyFundSelectBeanJson.isotmin, 100);
	importoMin(buyFundSelectBeanJson, '#importoMinSuc',
			buyFundSelectBeanJson.isotsuc, buyFundSelectBeanJson.iresmin);

	// $('versamentiPacOutPost').style.display = 'none';
	// $('versamentiPacOutPostFirst').style.display = 'none';
}

function abilitaPac() {
	// $("#radiobuttonPic").prop("checked", false);
	// $("#radiobuttonPac").prop("checked", true);

	$('#lblimpminsottsucc').hide();
//	$('#importoMinSuc').hide();

//	if (codiceSocietaMappa.Epsilon_Associati_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta) {
//		$('#importoMinSuc').text(buyFundSelectBeanJson.iresmin); // DIVISA ??
//		// check
//	} else {
//		importoMin(buyFundSelectBeanJson, '#importoMinSuc',
//				buyFundSelectBeanJson.isotsuc, buyFundSelectBeanJson.iresmin);
//	}

	$('#dirFissi').text(buyFundSelectBeanJson.spesePac);
	$('#dirFissi').val(buyFundSelectBeanJson.spesePac);
	// $('#dirittiFissi').text(buyFundSelectBeanJson.spesePac); //check - se
	// serve e se serve value ?

	selectPeriodo("#selectPeriodoSicav", buyFundSelectBeanJson.listaPeriodi);
	$("#selectPeriodoSicav").show();
	cambiaPiani("#selectPeriodoSicav");

	caricaImporto();
	$('#importoMinSuc').text($("#spinnerRata").val() + " EUR");

	// check - se serve per tutto il metodo già presente in caricaImporto();
	// if (!firstCallToPac) {
	// firstCallToPac = true;
	// spinnerRataInitialize();
	// spinnerVerInitialize();
	// }

	if (codiceSocietaMappa.Eurizon_Capital_Sgr.newCodSoc == buyFundSelectBeanJson.codiceSocieta) {
		$("#polizzaPac").show();

	}

}

function cambiaPiani(idSelect) {
	var obj = {
		nota : "",
		notaVersamento : ''
	};
	$("#selectPac").empty();

	// var codPianoValore = $(idSelect +' :selected').val();
	var periodo = $.parseJSON($(idSelect + ' :selected').val());
	var codPianoValore = periodo.id_periodo;
	$.each(buyFundSelectBeanJson.listaPiani,
					function(index, piano) {
						var desc = piano.descrTotale;
						var pianoReduced = {
							'importoIniziale' : piano.importoIniziale,
							'tipoPiano' : piano.tipoPiano,
							'impRataSuc' : piano.impRataSuc,
							'descrTotale' : piano.descrTotale,
							'codicePiano' : piano.codicePiano,
							'numAnni' : piano.numAnni,
							'numRateIni' : piano.numRateIni,
							'impRataIni' : piano.impRataIni,
							'numRate' : piano.numRate,
							'anticipoRate' : piano.anticipoRate,
							'versMultipoRata' : piano.versMultipoRata,
							'incrMinRata' : piano.incrMinRata
						};

						var value = JSON.stringify(pianoReduced);
						var codicePiano = piano.codicePiano;
						var checkValore = $.trim(piano.idPeriodo);
						var addOption = false;
						if ("#selectPeriodo" == idSelect) {
							addOption = true;

							if (codiceSocietaMappa.Epsilon_Associati_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta) {
								// checkValore = codicePiano.slice(-1);

								showNota(piano, checkValore, obj);
							} else if ("S" == buyFundSelectBeanJson.fondosicav) {
								// if (codiceSocietaMappa.Amundi_Funds.newCodSoc
								// == buyFundSelectBeanJson.codiceSocieta) {
								// checkValore = codicePiano.substring(3, 4);
								// } else {
								// checkValore = codicePiano.substring(1, 2);
								// }
								showNota(piano, checkValore, obj);

								$("#importoMinSuc").val(piano.importoIniziale);

								if (codiceSocietaMappa.ThreadNeedle_Asset_Mgmt_Ltd.newCodSoc != buyFundSelectBeanJson.codiceSocieta) {
									$("#sogliaImportoPacSicav").val(piano.importoIniziale);
								} else {
									$("#sogliaImportoPacSicav").val("0");
								}
							} else {
								showNota(piano, "M", obj);
							}

						} else if ("#selectPeriodoEpsilon" == idSelect) {
							if (codPianoValore == codicePiano) {
								addOption = true;
								showNota(piano, "M", obj);
								$("#sogliaImportoPacSicav").val(
										piano.importoIniziale);
							}
						} else if ("#selectPeriodoSicav" == idSelect) {
							// if (codiceSocietaMappa.Amundi_Funds.newCodSoc ==
							// buyFundSelectBeanJson.codiceSocieta) {
							// checkValore = codicePiano.substring(3, 4);
							// } else {
							// checkValore = codicePiano.substring(1, 2);
							// }
							if (codPianoValore == checkValore) {
								addOption = true;
								showNota(piano, "M", obj);
								$("#sogliaImportoPacSicav").val(
										piano.importoIniziale);
							}
						}
						if (addOption) {
							$("#selectPac").append(
									$('<option>').val(value).text(desc));
						}

					});

	// ordina lista pac
	var optsSelPac = $("#selectPac option");
	$("#selectPac").empty();
	// console.log(optsSelPac);

	optsSelPac.sort(function(a, b) {
		var at = parseInt(($.parseJSON($(a).val())).numRate);
		var bt = parseInt(($.parseJSON($(b).val())).numRate);
		return (at > bt ? 1 : (at < bt ? -1 : 0));
	});

	optsSelPac.appendTo($("#selectPac"));
	// console.log(optsSelPac);

	$("#selectPac").get(0).selectedIndex = 0;

	var descPeriodoVal = '', descPeriodoTxt = '';
	// $("#descrizionePeriodo").val($("#selectPeriodoSicav :selected").val());
	// $("#descrizionePeriodo").text($("#selectPeriodoSicav :selected").text());

	if ("#selectPeriodo" == idSelect) {
		descPeriodoVal = $("#selectPeriodo :selected").val();
		descPeriodoTxt = $("#selectPeriodo :selected").text();
	} else if ("#selectPeriodoEpsilon" == idSelect) {
		descPeriodoVal = $("#selectPeriodoEpsilon :selected").val();
		descPeriodoTxt = $("#selectPeriodoEpsilon :selected").text();
	} else if ("#selectPeriodoSicav" == idSelect) {
		descPeriodoVal = $("#selectPeriodoSicav :selected").val();
		descPeriodoTxt = $("#selectPeriodoSicav :selected").text();
	}

	$("#descrizionePeriodo").val(descPeriodoVal);
	$("#descrizionePeriodo").text(descPeriodoTxt);

	addTooltip('#importoRataTxt', obj.nota);
	addTooltip('#importoInizialeTxt', obj.notaVersamento);

}

function pacImpMinInvInit(pianoReduced) {

	var impMinInvInit = pianoReduced.numRateIni * pianoReduced.impRataIni;

	if (impMinInvInit < pianoReduced.importoIniziale) {
		impMinInvInit = pianoReduced.importoIniziale;
	}

	return impMinInvInit;
}

function caricaImporto() {
	var pianoReduced = $.parseJSON($('#selectPac :selected').val());
	var ratePac = pianoReduced.numRate;

	$("#spinnerRata").val(pianoReduced.impRataIni);
	$("#anniPac").val(pianoReduced.numAnni);

	if (codiceSocietaMappa.Anima_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta
			|| codiceSocietaMappa.Etica_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta
			|| codiceSocietaMappa.Eurizon_Capital_Sgr.newCodSoc == buyFundSelectBeanJson.codiceSocieta) {
		var periodo = $.parseJSON($('#descrizionePeriodo').val());
		ratePac = periodo.numero_periodi * pianoReduced.numAnni;

	}

	var numRateIni = pianoReduced.numRateIni;
	// if( numRateIni==0 && "S"== buyFundSelectBeanJson.fondosicav ){
	// numRateIni = "1";
	// }

	$("#importoMinIni").text(pacImpMinInvInit(pianoReduced) + " EUR");

	if (numRateIni > 0) {
		sessionStorage.setItem("pacrini0", "N");
		$("#importoInizialeTxt").text("Numero versamenti iniziali"); // lblinvestimentoIniziale
		$("#lblinvestimentoIniziale").show();
		investimentoIniziale(pianoReduced.impRataIni, numRateIni);
	} else {
		sessionStorage.setItem("pacrini0", "S");
		$("#importoInizialeTxt").text("Investimento iniziale (PAC)");
		$("#lblinvestimentoIniziale").hide();
		$("#investimentoIniziale").hide();
	}

	investimentoTotale(pianoReduced.impRataIni, ratePac);
	// investimentoIniziale(pianoReduced.impRataIni, numRateIni);
	// investimentoTotale(pianoReduced.impRataIni, ratePac);

	if ($('#radiobuttonPac').is(':checked')) {
		var pianoReduced = $.parseJSON($('#selectPac :selected').val());

		$('#anticipoRate').val(pianoReduced.anticipoRate);
		
		$("#versamentiPacOutPostFirst").show();
		if (stringa_N != pianoReduced.anticipoRate) {
			$("#versamentiPacOutPostFirst")
					.text(
							"Avvertenza: il versamento iniziale decurta la durata del PAC (numero versamenti).");
		} else {
			$("#versamentiPacOutPostFirst")
					.text(
							"Avvertenza: il versamento iniziale non decurta la durata del PAC (numero versamenti).");
		}

	}

	spinnerRataInitialize();
	spinnerVerInitialize();

	// impostazione iniziale solo per pac ad importo
	if ($('#isPac').is(":visible")) {

		var pianoReduced = $.parseJSON($('#selectPac :selected').val());

		if (1 > pianoReduced.numRateIni && isMultiplo) {
			calcolaMultiplo(pianoReduced, parseFloat($("#spinnerRata").val()),
					true);
		}

	}

}

function investimentoInizialeRataInitZero(valore) {
	$("#investimentoIniziale").text(valore + ' EUR');
	$("#investimentoIniziale").val(valore);

}

function investimentoIniziale(rata, verIni) {
	
	resetHasErrors($('#investimentoIniziale').parent());
	
	var tot = parseFloat(rata) * parseFloat(verIni);
	
	$("#investimentoIniziale").text(tot + ' EUR');
	$("#investimentoIniziale").val(tot);
	$("#investimentoIniziale").show();

	// $("#importoPacSicav").val(tot); check serve ?
	// $("#invIniOut").text(tot + ' EUR'); //check - in preview
}

function investimentoTotale(rata, numAnni) {
	var tot = parseFloat(rata) * parseFloat(numAnni);
	
	
	$("#investimentoTotale").text(tot + ' EUR');
	$("#investimentoTotale").val(tot);
	$("#investimentoTotale").show();

	$("#ratePac").val(numAnni); // serve nel submit
	// $("#invTotOut").text(tot + ' EUR'); //check - in preview
}

function depAssNoAss(reset) {
	var depAss = false;
	var result = $.grep(buyFundSelectBeanJson.depositiConnAss, function(
			depositoToSearch) {
		return depositoToSearch == $('#deposito').val();
	});
	if (result.length > 0) {
		depAss = true;
	}
	if (!depAss || reset) {
		if (!depAss) {
			$('#polizzaPac').hide(); // check
		} else if ($('#radiobuttonPac').is(':checked')) {
			$('#polizzaPac').show(); // check
		}
		resetDatiPolizza();
	}
	return depAss;
}

function showNota(piano, valore, obj) {
	if ("M" == valore) {
		// obj.cod = piano.importoIniziale;
		// obj.tip = piano.tipoPiano;
		obj.nota = piano.note;
		obj.notaVersamento = piano.note_versamenti;
		$("#anticipoRate").text(piano.anticipoRate); // check
	}
}

function selectPeriodo(idSelect, listaPeriodi) {
	$(idSelect).empty();
	$.each(listaPeriodi, function(index, periodo) {
		var desc = periodo.descrizione_periodo;
		var value = '';
		if ("#selectPeriodo" == idSelect) {
			// value = ''+ periodo.numero_periodi + '*' + periodo.id_periodo +
			// '*' + periodo.descrizione_periodo;
			value = JSON.stringify(periodo);
			// if('M' == periodo.id_periodo){$(idSelect).val(value);}
		} else {
			value = periodo.id_periodo;
		}
		value = JSON.stringify(periodo);
		$(idSelect).append($('<option>').val(value).text(desc));
		if ('M' == periodo.id_periodo) {
			$(idSelect).val(value);
		}
	});

	$("#descrizionePeriodo").val($(idSelect).find(":selected").val());
//	$("#descrizionePeriodo").text($(idSelect).find(":selected").text());
}

function spinnerRataInitialize() {
	setSpinner({
		idInput : '#spinnerRata',
		min : parseFloat(($.parseJSON($('#selectPac :selected').val())).impRataIni),
		step : parseFloat(($.parseJSON($('#selectPac :selected').val())).impRataSuc),
		spin : ctrlSpinRata
	// ,numberFormat:"n"

	});

}

function spinnerMinVal(currMin, rata) {
	var newMin = currMin;
	var mod = currMin % rata;

	if (mod > 0) {
		mod = (currMin + rata) % rata;
		newMin = (currMin + rata) - mod;
	}

	return newMin;
}

function calcolaMultiplo(pianoReduced, ratacurr, updateSpinner) {
	// var ratacurr = parseFloat($('#spinnerRata').val());
	var investinitcurr = parseFloat($("#spinnerIniziale").val());

	var mod = investinitcurr % ratacurr;
	var totale = investinitcurr - mod;

	if (totale < pacImpMinInvInit(pianoReduced)) {

		investinitcurr = pacImpMinInvInit(pianoReduced) + ratacurr;
		mod = investinitcurr % ratacurr;
		totale = investinitcurr - mod;

	}

	if (updateSpinner == true) {

		$("#spinnerVerDivId").empty();
		$("#spinnerVerDivId")
				.append(
						"<input id=\"spinnerIniziale\" type=\"text\" name=\"spinnerIniziale\" class=\"form-control spinner\" readonly=\"readonly\">");

		setSpinner({
			idInput : '#spinnerIniziale',
			min : spinnerMinVal(pacImpMinInvInit(pianoReduced), ratacurr),
			step : ratacurr,
			spin : ctrlSpinInit
		});
	}

	investimentoInizialeRataInitZero(totale);
	$("#spinnerIniziale").val(parseInt(totale));

}

function spinnerVerInitialize() {

	var pianoReduced = $.parseJSON($('#selectPac :selected').val());
	var numRateIni = pianoReduced.numRateIni;

	if (numRateIni > 0) {
		$("#spinnerIniziale").val(numRateIni);
	} else {
		$("#spinnerIniziale").val(pacImpMinInvInit(pianoReduced));
		investimentoInizialeRataInitZero($("#spinnerIniziale").val());
	}

	setSpinner({
		idInput : '#spinnerIniziale',
		min : numRateIni > 0 ? numRateIni : pacImpMinInvInit(pianoReduced),
		step : numRateIni > 0 ? 1 : $('#spinnerRata').val(),
		spin : ctrlSpinInit

	});

}


function calcoloImportoDivisa() {
	// $('#importoPic').text($('#importoPic').val());
	var imp = new Number($('#importoPic').val());
	var data = buyFundSelectBeanJson.dataCambio.replace(/\./g, '/'); // $('#dataCambio').val().replace('.','/');
	var cambio = new Number(buyFundSelectBeanJson.cambio.replace(',', '.'));
	var impSucFin = ((imp / cambio) * 1.06).toFixed(0);
	$('#importoPicDivisa').text($('#importoPicDivisa').val()); // + "
																// corrispondenti
																// a " +
																// impSucFin + "
																// EUR al cambio
																// del " + data
	$('#importoValuta').val(impSucFin);
	$('#importoDivisa').val(imp);
	$('#divisa').val(buyFundSelectBeanJson.divisa); 		// campo hidden per pagina di conferma
	$('#dataCambio').val(buyFundSelectBeanJson.dataCambio); // campo hidden per pagina di conferma
	$('#importoPicDivisaTxt').text(" corrispondenti a " + impSucFin + " EUR al cambio del " + data);
}

function prosegui() {

	docOn = 0;
	inputData_PIC_PAC={};
	
	if ( ($('#radiobuttonPac').is(':checked') ? proseguiPAC() : proseguiPIC()) ) {
		
		$.each(inputData_PIC_PAC,function(k,v) {
			   if(k!=undefined && k!=null && k!="" && v!=undefined && v!=null && v!="" && !$.isArray(v) && !$.isPlainObject(v)) { 
					      $("<input />").attr("type", "hidden")
					          .attr("name", k)
					          .attr("value", v)
					          .appendTo("#buyFundForm");
			   }
				
			});
		
		var listaDepOK = false;
		var sottoDepVal = $("#deposito").val().split("/")[2];
		if(string_0 == sottoDepVal || listaDepPIR[$("#deposito").val()]){
			listaDepOK = true;
		}
		$("#listaDepPIRDep").val(""+listaDepOK);	//preview - adever - verifica deposito
		
		$("<input />").attr("type", "hidden").attr("name", "divisa").attr("value", buyFundSelectBeanJson.divisa).appendTo("#buyFundForm");
		$("<input />").attr("type", "hidden").attr("name", "cf").attr("value", Math.random()).appendTo("#buyFundForm");
		$("<input />").attr("type", "hidden").attr("name", "cart").attr("value", cart).appendTo("#buyFundForm");
		
		
//		window.setTimeout(function(){
			$("#buyFundForm").attr("action", "AcquistoFondoPreview.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto_new");
			$("#buyFundForm").submit();

//		},10000); //prova per lentezza di server
		
	}
	
	
//	bindEvent("#prosegui", "click", linkProsegui);
//	$('#buyFundForm').removeClass("loading");
	
	
}

function proseguiPIC() {
//	var errors = [];
	var msg = "";
	var avanti = errors.length==0?true:false;
	var imp = $('#importoPic').val();
	var datiFatca = '';
	if (imp == '') {
		msg = "Inserire l&#39;importo";
//		showError(true, "E", msg);
		avanti = false;
		
		errors.push({
				field : $("#importoPic"),
				text : "Inserire l&#39;importo"
			});
		setHasErrors(errors, "#importoPic");
		msgError = msgError + "<br>" + msg;
		
	} else {
		imp = parseInt(imp).toString(); // copy paste di . è ancora possibile,
										// quindi recuperare solo integer parte
		$('#importoPic').val(imp);
		var impSuc = buyFundSelectBeanJson.isotsuc;
		if ((codiceSocietaMappa.Carmignac_Gestione_SA.newCodSoc == buyFundSelectBeanJson.codiceSocieta
				|| codiceSocietaMappa.Carmignac_Gest_Luxemb_SA.newCodSoc == buyFundSelectBeanJson.codiceSocieta || codiceSocietaMappa.Amundi_Funds.newCodSoc == buyFundSelectBeanJson.codiceSocieta)
				&& (buyFundSelectBeanJson.iresmin != 0)) {

			var dirf = new Number(buyFundSelectBeanJson.dirittiFissi.substring(	0, 2));
			impSuc = Math.ceil(buyFundSelectBeanJson.nav	* (buyFundSelectBeanJson.iresmin / 100) + dirf);

		}

		var difImporti = imp - impSuc;

		if (difImporti < 0) {
			// var msg = "Il valore dell&#39;importo deve essere uguale o
			// superiore all&#39;importo minimo di " + impSuc;
			msg = "L&#39;importo deve essere uguale o  maggiore dell&#39;importo minimo sottoscrizioni successive";
//			showError(true, "E", msg);
			errors.push({
				field : $("#importoPic"),
				text : "L&#39;importo deve essere uguale o  maggiore dell&#39;importo minimo sottoscrizioni successive"
			});
			setHasErrors(errors, "#importoPic");
			msgError = msgError + "<br>" + msg;
			avanti = false;
		}

		if (codiceSocietaMappa.Anima_Asset_Management_Ltd.newCodSoc == buyFundSelectBeanJson.codiceSocieta 	&& "x" == buyFundSelectBeanJson.codiceFamiglia) {
			if ($('#cedolaSicavReinvSi').is(':checked')) {
				$('#reinvestimentoSicav').val("S");
				$('#textCedSicav').text("Voglio reinvestirli automaticamente");
			} else if ($('#cedolaSicavReinvNo').is(':checked')) {
				$('#reinvestimentoSicav').val("N");
				$('#textCedSicav').text("Voglio l'accredito della cedola sul C/C");
			} else {
				var msg = "E' necessario selezionare la destinazione dei proventi";
//				showError(true, "E", msg);
				msgError = msgError + "<br>" + msg;
				avanti = false;
			}
		}

	}

	if (avanti) {
		showError(false, null, null);

		$('#isNotPac').text($('#radiobuttonPicTxt').text());
		var impValTxt = $('#importoPic').val() + ' EUR';
		if (buyFundSelectBeanJson.enableBuyNoEur) {
			impValTxt = '' + $('#importoPic').val() + ' '
					+ buyFundSelectBeanJson.divisa
			// + ' corrispondenti a ' + $('#importoValuta').val() + " EUR al
			// cambio del " + $('#dataCambio').val()
			;
		}
		$('#importoPicOut').text(impValTxt);

		var tipoInvestimento = "PIC";
		var periodoPiano = '';
		var codicePiano = '';
		var numeroAnniPiano = '';
		var enableBuyFund = buyFundSelectBeanJson.enableBuyFund;
		var descSocietaDiGestione = $('#societaGestione').text();
		var importo = $('#importoPic').val();
		var tipoPiano = '';
		if (buyFundSelectBeanJson.enableBuyNoEur) {
			importo = $('#importoValuta').val();
		}

		if (codiceSocietaMappa.Eurizon_Capital_Sgr.newCodSoc == buyFundSelectBeanJson.codiceSocieta) {
			enableBuyFund = "false"
		}

		
		inputData_PIC_PAC = {
			"importo" : importo,
			"importoRata" : $("#spinnerRata").val(),    // in form
//			"importoPacSicav" : $("#investimentoIniziale").val(), // in form
			"tipoPiano" : tipoPiano,
			"periodoPiano" : periodoPiano,
			"decimale" : "000",
			"flagPrivacy" : "",
			"codiceSocietaDiGestione" : buyFundSelectBeanJson.codiceSocieta,
			"descrSocietaDiGestione" : descSocietaDiGestione,
			"codiceFondo" : buyFundSelectBeanJson.codiceComparto,
//			"deposito" : $('#deposito').val(),
//			"flagReinvestimento" : "",
			"tipoInvestimento" : tipoInvestimento,
			"codicePiano" : codicePiano,
			"numeroAnniPiano" : numeroAnniPiano,
			"numeroRatePiano" : "",
			"numeroRateVersate" : "",
			"enableBuyFund" : enableBuyFund,
			"fondoSicav" : buyFundSelectBeanJson.fondosicav,
			"codiceFamiglia" : buyFundSelectBeanJson.codiceFamiglia,
//			"esenzioneEtica" : $('#esenzioneEtica').val(),
			"percScontoCom" : buyFundSelectBeanJson.perScontoComm,
			"scontoPac" : buyFundSelectBeanJson.scontoPac,
//			"reinvestimentoSicav" : $('#reinvestimentoSicav').val(),
			"obbligoCedola" : buyFundSelectBeanJson.obbligoCedola,
			"codInt" : buyFundSelectRequestJson.codInt,
			"controlloFatca" : "false", // check TODO controlloFatca
//			"datiFatca" : datiFatca // check TODO
			"nav" : buyFundSelectBeanJson.nav,
			"dataNAV" : buyFundSelectBeanJson.dataNAV,
			"categoriaFondo":buyFundSelectBeanJson.categoriaFondo,
			"speseGestione" : buyFundSelectBeanJson.spesegestione,
			"dirittiFissi":buyFundSelectBeanJson.dirittiFissi,
			"speseIngresso": buyFundSelectBeanJson.speseIngresso,
			"speseUscita": buyFundSelectBeanJson.speseUscita,
			"dirittiCedola":buyFundSelectBeanJson.dirittiCedola,
			"periodoCedola":buyFundSelectBeanJson.periodoCedola,
			"scorap":buyFundSelectBeanJson.scorap,
			"sorifin":buyFundSelectBeanJson.sorifin,
			"iresmin": buyFundSelectBeanJson.iresmin,
			"irimmin": buyFundSelectBeanJson.irimmin,
			"isotmin": buyFundSelectBeanJson.isotmin,
			"isotsuc": buyFundSelectBeanJson.isotsuc
			
			//"periodProventi": ""
			// ,"codiceFamiglia":buyFundSelectBeanJson.codiceFamiglia //cfam
			// ,"PAC" : buyFundSelectBeanJson.pac //non usata
			// ,"categoria" : buyFundSelectBeanJson.categoriaFondo //non usata
			,"descrizioneFondo" : buyFundSelectBeanJson.nomeComparto //non usata
			// ,"descrizionePeriodo" : $("#descrizionePeriodo").val()
//			,"polizza" : $('#polizza').val()

		};
		
//		initializaDatiOrdineOutput(inputdata);
	} else {
		$('#buyFundForm').removeClass("loading");
		bindEvent('#prosegui', "click", linkProsegui);
		// $('#prosegui').removeAttr('disabled');

		// setTimeout(function() {
		// $('#datiOrdineOutput').removeClass("loading");
		// $('#buyFundForm').removeClass("loading");
		// }, 1000);
	}
	
	return avanti;

}

function resetDatiPolizza() {
	$('#polizza').val('');
	$("#siPolizza").prop("checked", false);
	$("#noPolizza").prop("checked", false);

	$("#promoEurizonFormBottom").hide();

}

function verificaVerIni(importoIniziale) {
	// var pianoReduced = $.parseJSON($('#selectPac :selected').val());

	// check orginale verificaEtica non usa variabile difVerTotali
	var difVerTotali = parseFloat($("#investimentoTotale").val()) - parseFloat(importoIniziale);
	var difImporti = parseFloat($("#investimentoIniziale").val()) - parseFloat(importoIniziale);
	if (difVerTotali < 0 || difImporti < 0) {
		var numVerNec = '';
		if (difVerTotali < 0) {
			numVerNec = 1000 / ($('#spinnerRata').val());
		}
		var msg = "Il versamento iniziale deve essere pari ad almeno " + importoIniziale	+ " &euro;. Per rispettare l'importo di primo versamento, aumenta il numero di rate o il loro importo.";
		showError(true, "E", msg);
//		var errors = [];
		
		errors.push({
					field : $("#investimentoIniziale"),
					text : msg
				});
		setHasErrors(errors, "#investimentoIniziale");
		return false;
	}
	return true;
}

function proseguiPAC() {
	var avanti = true;
	var pianoReduced = $.parseJSON($('#selectPac :selected').val());

	pianoReduced.importoIniziale = pacImpMinInvInit(pianoReduced);

	if (codiceSocietaMappa.Anima_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta
			|| codiceSocietaMappa.Etica_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta) {
		avanti = verificaVerIni(pianoReduced.importoIniziale); // verificaEtica
	} else if (codiceSocietaMappa.Epsilon_Associati_Sgr_Spa.newCodSoc == buyFundSelectBeanJson.codiceSocieta) { // #selectPeriodoEpsilon
		avanti = verificaVerIni("1000"); // verificaEpsilon
	}
	if ("S" == buyFundSelectBeanJson.fondosicav) { // #selectPeriodoSicav check
		// :else
		var importoIniziale = $("#sogliaImportoPacSicav").val();
		if (codiceSocietaMappa.Carmignac_Gestione_SA.newCodSoc == buyFundSelectBeanJson.codiceSocieta
				|| codiceSocietaMappa.Carmignac_Gest_Luxemb_SA.newCodSoc == buyFundSelectBeanJson.codiceSocieta) {
			importoIniziale = new Number(Math.ceil(buyFundSelectBeanJson.nav));
		}
		avanti = verificaVerIni(importoIniziale); // verificaSicav
	}

	avanti=(errors.length==0?true:false);

	if (avanti) {
		showError(false, null, null);

		$('#isNotPac').text($('#radiobuttonPacTxt').text());
//		$('#selectPacOut').text(pianoReduced.descrTotale);

//		$('#selectPeriodoOut').text($("#descrizionePeriodo").text());
//		$('#selectPeriodoOut').val($("#descrizionePeriodo").val());

//		$('#spinnerRataOut').text($("#spinnerRata").val());
//		$('#spinnerInizialeOut').text($('#spinnerIniziale').val());

		var tipoInvestimento = "PAC";
		var periodoPiano = '';
		var codicePiano = '';
		var numeroAnniPiano = '';
		var enableBuyFund = buyFundSelectBeanJson.enableBuyFund;
		var descSocietaDiGestione = $('#societaGestione').text();
		var importo = $("#spinnerRata").val();
		var tipoPiano = '';

		if ("S" == buyFundSelectBeanJson.pac) {
			numeroAnniPiano = pianoReduced.numAnni;
			tipoPiano = pianoReduced.tipoPiano;
			codicePiano = pianoReduced.codicePiano;
			var periodo = $.parseJSON($("#descrizionePeriodo").val());
			periodoPiano = periodo.id_periodo;
		}

		if (codiceSocietaMappa.Eurizon_Capital_Sgr.newCodSoc == buyFundSelectBeanJson.codiceSocieta) {
			enableBuyFund = "false";
		}

		$('#descrizionePianoPac').val(pianoReduced.descrTotale);//
		
		inputData_PIC_PAC = {
//			"polizza" : $('#polizza').val(),
			"importo" : $("#investimentoTotale").val(),
			"importoRata" : importo,
			"importoPacSicav" : $("#investimentoIniziale").val(),
			"tipoPiano" : tipoPiano,
			"periodoPiano" : periodoPiano,
			"decimale" : "000",
			"flagPrivacy" : "",
			"codiceSocietaDiGestione" : buyFundSelectBeanJson.codiceSocieta,
			"descrSocietaDiGestione" : descSocietaDiGestione,
			"codiceFondo" : buyFundSelectBeanJson.codiceComparto,
//			"deposito" : $('#deposito').val(),
			"flagReinvestimento" : "",
			"tipoInvestimento" : tipoInvestimento,
			"codicePiano" : codicePiano,
			"numeroAnniPiano" : numeroAnniPiano,
			"numeroRatePiano" : $("#ratePac").val(),
			"numeroRateVersate" : $('#spinnerIniziale').val(),
			"enableBuyFund" : enableBuyFund,
			"fondoSicav" : buyFundSelectBeanJson.fondosicav,
//			"esenzioneEtica" : $('#esenzioneEtica').val(),
			"percScontoCom" : buyFundSelectBeanJson.perScontoComm,
			"scontoPac" : buyFundSelectBeanJson.scontoPac,
//			"reinvestimentoSicav" : $('#reinvestimentoSicav').val(),
			"obbligoCedola" : buyFundSelectBeanJson.obbligoCedola,
			"codiceFamiglia":buyFundSelectBeanJson.codiceFamiglia //cfam
			,	"controlloFatca" : "false" // controlloFatca //check TODO
			// , "datiFatca":datiFatca //check TODO
			// ,"PAC" : buyFundSelectBeanJson.pac //non usata
			// ,"categoria" : buyFundSelectBeanJson.categoriaFondo //non usata
			// ,"nomeComparto" : buyFundSelectBeanJson.nomeComparto //non usata
			// ,"descrizionePeriodo" : $("#descrizionePeriodo").val()
			,"codInt" : buyFundSelectRequestJson.codInt,
			"nav" : buyFundSelectBeanJson.nav,
			"dataNAV" : buyFundSelectBeanJson.dataNAV,
			"categoriaFondo":buyFundSelectBeanJson.categoriaFondo,
			"speseGestione" : buyFundSelectBeanJson.spesegestione,
			"dirittiFissi":buyFundSelectBeanJson.dirittiFissi,
			"speseIngresso": buyFundSelectBeanJson.speseIngresso,
			"speseUscita": buyFundSelectBeanJson.speseUscita,
			"dirittiCedola":buyFundSelectBeanJson.dirittiCedola,
			"periodoCedola":buyFundSelectBeanJson.periodoCedola,
			"scorap":buyFundSelectBeanJson.scorap,
			"sorifin":buyFundSelectBeanJson.sorifin,
			"iresmin": buyFundSelectBeanJson.iresmin,
			"irimmin": buyFundSelectBeanJson.irimmin,
			"isotmin": buyFundSelectBeanJson.isotmin,
			"isotsuc": buyFundSelectBeanJson.isotsuc,
			"descrizioneFondo" : buyFundSelectBeanJson.nomeComparto
		};
//		initializaDatiOrdineOutput(inputdata);
		
	} else {
		$('#buyFundForm').removeClass("loading");
		bindEvent('#prosegui', "click", linkProsegui);
		// $('#prosegui').removeAttr('disabled');

		// setTimeout(function() {
		// $('#datiOrdineOutput').removeClass("loading");
		// $('#buyFundForm').removeClass("loading");
		// }, 1000);
	}
	
	return avanti;
}

function addTxtTooltip(idLable, tooltip) {
	// $(idLable).attr("class","txthelp closeable");
	// $(idLable).attr("data-toggle","tooltip");
	if (tooltip) {
		$(idLable).attr("data-original-title", tooltip);
	} else {
		removeTxtTooltip(idLable);
	}
}

function removeTxtTooltip(idLable) {
	// $(idLable).attr("class","text");
	$(idLable).removeClass("txthelp");
	$(idLable).addClass("text");
	$(idLable).attr("data-toggle", "");
	$(idLable).attr("data-original-title", '');
	// $(idLable).off('click shown');
}

function proseguiModificaTogglePre() {
	$('#modifica,#prosegui,#indietro').toggle();

	if (Object.keys(buyFundSelectBeanJson.listaDepositi).length > 1) {
		$('#elencoDepositi,#deposito').toggle();
	}

	if ('S' == buyFundSelectBeanJson.pac) {
		$('#isPac,#isNotPac').toggle();
	}

	if ($('#radiobuttonPic').is(':checked')) {
		$('#importoPicDivId,#importoPicOut').toggle();
	} else if ($('#radiobuttonPac').is(':checked')) {
		$('#selectPac,#selectPacOut').toggle();

		$('#selectPeriodoSicav').toggle();
		$('selectPeriodoTxt,#selectPeriodoOut').toggle();
		$(	'#spinnerRataDivId,#spinnerVerDivId,#spinnerRataOut,#spinnerInizialeOut')
				.toggle();

	} else if ($('#isNotPac').is(':visible')) {
		$('#importoPicDivId,#importoPicOut').toggle();
	}

	if ($('#esenzioneDivId').is(':visible')) {
		// $('#esenzioneDivId').show();

		if ($('#esenzione').attr('disabled') !== undefined) {
			$('#esenzione').removeAttr('disabled');
		} else {
			$('#esenzione').attr('disabled', 'disabled');
		}
		// $('#esenzione').val("014"); //014
	}

	if (codiceSocietaMappa.Anima_Asset_Management_Ltd.newCodSoc == buyFundSelectBeanJson.codiceSocieta) {
		$('#cedolaSicavId label,#cedolaSicavRadioId,#textCedSicav').toggle();
	}

	if ($('#formEurizonPromo1').is(':visible')) {
		if ($('#siPolizza').attr('disabled') !== undefined) {
			$('#siPolizza').removeAttr('disabled');
			$('#noPolizza').removeAttr('disabled');
		} else {
			$('#siPolizza').attr('disabled', 'disabled');
			$('#noPolizza').attr('disabled', 'disabled');
		}

	}

	// if (buyFundPreviewRequestJson != undefined
	// && buyFundPreviewRequestJson != null
	// && buyFundPreviewRequestJson != "") {
	// if ("true" == buyFundPreviewRequestJson.isFacta || "true" ==
	// buyFundPreviewRequestJson.isAdeVer ) {
	// $('#datiOrdineOutput').toggle();
	// }
	// }
	// $('#datiOrdineOutput').toggle();
	//
	if ($('#wrapperOut').is(":visible")) {
		$("html, body").animate({
			scrollTop : $("#sezioneDatiOrdine").offset().top
		}, "fast");
	}

}

// Preview
function popolaListaDaArray(idLista, nomeArray, check, prop1, prop2) {
	$(idLista).empty();
	if (nomeArray != undefined && nomeArray != null && nomeArray.length != 0) {
		// $(idLista + 'Valore').val(JSON.stringify(nomeArray));
		$.each(nomeArray, function(idx, obj) {
			if (check) {
				// property to check
			} else {
				var valore = '';
				if (obj.hasOwnProperty(prop1)) {
					valore += obj[prop1] + "-";
				}
				if (obj.hasOwnProperty(prop2)) {
					valore += obj[prop2];
				}
				$(idLista).append("<li>" + valore + "</li>");
			}
		});
	}
}

function popolaReipilogoDati(jsonBean, jsonRequestBean) {

//	var tipoStrumentoHtml = $('#tipologia').html().substring($('#tipologia').text().trim().length);
	var tipoFondo = jsonBean.fondiSicavDesc;
	$('#pir').val("N");
	$('#tipologia').html(tipoFondo);
	$("#infoPir").hide();

	if (jsonBean.pir != undefined && jsonBean.pir == 'S') { // sezionePir
		tipoFondo = "Fondo PIR";
		$('#tipologia').html(tipoFondo);
		$("#infoPir").show();
		$('#pir').val("S");
	}
	// $('#tipologia').text(tipoFondo);
	// $('#tipologia').html(tipoFondo + $('#tipologia').html());

	$('#tipologia2').text(jsonBean.fondiSicavDesc);
//	$('#descTipo').text(jsonBean.nomeComparto); //modalFondoLabel
	$("#fondoIsin").val(jsonBean.codisin);
	$("#fondo").attr("data-isin",jsonBean.codisin);
	$("#fondo").parent().find("span.spsel-option-el").text(jsonBean.nomeComparto);
//	$('#modalFondoLabel').text(jsonBean.nomeComparto); //modalFondoLabel

	var hrefScedaFondo = "javascript:document.location.href=";
	hrefScedaFondo += "wrp_script";

	// hrefScedaFondo += "+'/wbOnetoone/2l/jsp/FMP/fida/ricerca.action";
	// hrefScedaFondo +=
	// "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto";
	// hrefScedaFondo += "&codiceIsin=" + jsonBean.codisin + "&fondo=true'";

	hrefScedaFondo += "+'/wbOnetoone/2l/action/investimenti/RicercaFondi.action";
	hrefScedaFondo += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto";
	if (jsonRequestBean != null && jsonRequestBean != undefined
			&& jsonRequestBean.codInt != undefined
			&& "null" != jsonRequestBean.codInt && "" != jsonRequestBean.codInt) {
		hrefScedaFondo += "&codiceInterno=" + jsonRequestBean.codInt
				+ "&fondo=true'"; // bugfix per 3 fondi con ISIN duplicato
	} else {
		hrefScedaFondo += "&codiceIsin=" + jsonBean.codisin + "&fondo=true'";
	}

	$("#descTipo").attr("href", hrefScedaFondo);

//	$("form[name='formPdf'] input[name='keyDocumento']").val(jsonBean.codisin);

	$("#dataNav").text($("#dataNav").text() + jsonBean.dataNavDesc);
	$('#nav').text(jsonBean.navDesc + ' ' + jsonBean.divisa);
	$('#societaGestione').text(jsonBean.societaGestione);
	$('#categoriaFondo').text(jsonBean.categoriaFondo);
	importoMin(jsonBean, '#importoMinIni', jsonBean.isotmin, 100);
	importoMin(jsonBean, '#importoMinSuc', jsonBean.isotsuc, jsonBean.iresmin);
	$('#speseIngresso').text(jsonBean.speseIngresso);
	$('#speseIngresso').val(jsonBean.speseIngresso);
	$('#speseGestione').text(jsonBean.spesegestione); // small g ??
	$('#speseGestione').val(jsonBean.spesegestione); // small g ??

	$("#linkDocObb").text("Informazioni chiave per l\'investitore (KIID) " + codIsin);
	$("#linkDocObb1").text("Modulo di sottoscrizione " + codIsin);

	var valoreSpeseUscita = '';
	var tooltipSpeseUscita = '';
	if (9 != jsonBean.codiceFamiglia && 117 != jsonBean.codiceFamiglia) {
		removeTooltip('#commUscita');
	}
	if (9 == jsonBean.codiceFamiglia) {
		valoreSpeseUscita = 'Dettaglio';
		tooltipSpeseUscita = "<ul><li>uscita 1&ordm; anno 3,50%</li><li>uscita 2&ordm; anno 3,00%</li><li>uscita 3&ordm; anno 2,50% </li><li>uscita 4&ordm; anno 1,50% </li><li>uscita 5&ordm; anno 1,00% </li></ul>";
	} else {
		valoreSpeseUscita = jsonBean.speseUscita;
		if (117 == jsonBean.codiceFamiglia) {
			tooltipSpeseUscita = "In caso di rimborso di azioni di classe A verranno applicate, direttamente dalla Sicav, delle commissioni di uscita pari allo 0,5%, solo ai nuovi clienti (s'intende coloro che alla data del 15/02/2014 non possedevano n&egrave; azioni di classe A n&egrave; azioni di classe D).";
		}
	}
	$('#speseUscita').text(valoreSpeseUscita);
	$('#speseUscita').val(valoreSpeseUscita);
	if (tooltipSpeseUscita != '') {
		addTooltip('#commUscita', tooltipSpeseUscita);
	}

	var dirittiFissiTxt = '';

	if (buyFundSelectRequestJson.noteComm != undefined && buyFundSelectRequestJson.noteComm.notaPacDa != undefined ) {
		dirittiFissiTxt = 'Diritti fissi di banca corrispondente';
		conditionalTooltip(buyFundSelectRequestJson.noteComm.notaPacDa,
				buyFundSelectRequestJson.noteComm.notaPacA, '#dirFissiTxt',
				buyFundSelectRequestJson.noteComm.notaPac);
	} else {
		dirittiFissiTxt = 'Diritti fissi';
//		removeTooltip('#dirFissiTxt');		
		addTooltip('#dirFissiTxt', dirFissTooltipVal);
	}

	$('#dirFissiTxt').text(dirittiFissiTxt);
	$('#dirFissi').text(jsonBean.dirittiFissi);
	$('#dirFissi').val(jsonBean.dirittiFissi);
	
	if(cedola.reqMezzoPagamentoCedola !=undefined) {
		
		$("#mezzoPagamentoCedola").val(cedola.reqMezzoPagamentoCedola);
		$("#coordinatePagamentoCedola").val(cedola.reqCoordinatePagamentoCedola);
			
	}

}

function popolaDettDestProventi(jsonBean) {
	$('#periodoCedola').text(jsonBean.periodoCedola);
	$('#dirittiCedola').text(jsonBean.dirittiCedola);
//	$('#periodoCedola').val(jsonBean.periodoCedola);
//	$('#dirittiCedola').val(jsonBean.dirittiCedola);
	if ("S" == jsonBean.reinvestimento) {
		$.each([0,1],function(i){
		$('#dettDestProventi_' + i).show();
		});
		addTooltip('#dirFissiCedolaTxt', dirFissTooltipVal);
	}
}

function popolaDepositiMargine(data) {
	var tempAgenzia = "", tempDeposito="", tempDepCompleto="", tempIdx=-1;
	var keys = Object.keys(data.listaDepositi).sort();
	
//	$('#elencoDeposito').show();
	$('#deposito').hide();
	$("#elencoDeposito").empty();
	
	$.each(keys,function(idx,value) {
//		var dep = data.depositi[keys];
		
		var rappCorr = value.split("\/");
		
		if(rappCorr[0] != tempAgenzia || rappCorr[1]!=tempDeposito){
			tempIdx++;
			$("<span>", {"class":"group", "id":"dep_"+tempIdx}).appendTo("#elencoDeposito");	//.html(data.depositi[keys[0]])
		}
		
		
		if(rappCorr[2] =="0"){
			$("<div>", {"class":"" + (idx==0?" ":""), "id":"dep_"+tempIdx+"_ALL", "value":value})
			.html("<strong>"+rappCorr[0]+"/"+rappCorr[1]+ " - tutti i sottodepositi" + " - "+
					data.listaDepositiIntestatari[value] + "</strong> " )
			.appendTo("#dep_"+tempIdx);
		}
		
//		if(rappCorr[2] =="0"){
//			$("<a>", {"class":"selectorOptions" + (idx==0?" first:selected ":""), "id":"dep_"+tempIdx+"_ALL", "value":value})
//				.html("<strong>"+rappCorr[0]+"/"+rappCorr[1]+ "/"+rappCorr[2] + " - " + data.listaDepositiIntestatari[value]  + "</strong><br>")
//				.appendTo("#dep_"+tempIdx);
//			
//		} else {
		
			$("<a>", {"class":"selectorOptions", "id":"dep_"+tempIdx+"_"+rappCorr[2], "value":value})
				.html("<strong>"+rappCorr[0]+"/"+rappCorr[1]+"/"+rappCorr[2] + " - " +data.listaDepositiIntestatari[value] + "</strong><br>")
				.appendTo("#dep_"+tempIdx);
//		}	
	
		tempAgenzia  = rappCorr[0];
		tempDeposito = rappCorr[1];
		
	});
	
	createSelectRapp('sceltaRapporto', 'deposito', refreshDepositoAcq);
	
	
}


function testoTempistiche(jsonBean) {
	var soggTemp = '', oreTemp = '';
	if ("F" == jsonBean.fondosicav) {
		soggTemp = ' alla SGR ';
		// oreTemp = ' 21.30 ';
	} else if ("S" == jsonBean.fondosicav) {
		soggTemp = ' al soggetto incaricato dei pagamenti ';
		// oreTemp = ' 21.00 ';
	}
	$('.soggTemp').text(soggTemp);
	// $('.oreTemp').text(oreTemp);

}

function sezioneConsensoDatiPersonali() {
	var txtSi = "", txtNo = "", codSoc = "";
	if (codiceSocietaMappa.Anima_Sgr_Spa.newCodSoc == buyFundPreviewBeanJson.codiceSocieta) {
		codSoc = " Anima SGR ";
	} else if (codiceSocietaMappa.Epsilon_Associati_Sgr_Spa.newCodSoc == buyFundPreviewBeanJson.codiceSocieta) {
		codSoc = " Epsilon SGR ";
	} else if (codiceSocietaMappa.Eurizon_Capital_Sgr.newCodSoc == buyFundPreviewBeanJson.codiceSocieta) {
		codSoc = " Eurizon Capital SGR ";
	} else if (codiceSocietaMappa.Etica_Sgr_Spa.newCodSoc == buyFundPreviewBeanJson.codiceSocieta) {
		codSoc = " Etica SGR ";
	}

	txtSi = "dare il consenso ad"
			+ codSoc
			+ "all&#39;utilizzo dei miei dati per le finalit&#224; sopra indicate.";
	txtNo = "non " + txtSi;
	$('#txtFlagPrivacySi').html(txtSi);
	$('#txtFlagPrivacyNo').html(txtNo);
	$('#txtDisclaimerPrivacy').html(buyFundPreviewBeanJson.disclaimerPrivacy);

	// Privacy per ora non da visualizzare
	// $('#idConsensoDatiPersonali').show();
}


function apriNewDocumenti(tipoDocRequest) {

	$("form[name='formPdf'] input[name='tipoDocumento']").val(tipoDocRequest);
	$("form[name='formPdf']").attr("action", 	wrp_script + investFolderName + "/ApriDocumenti.action?isPDF=true");
	$("form[name='formPdf']").submit();

}

var divAccordion = " \
			<div id=\"panel_{{index}}\" class=\"panel panel-default \"> \
				<div id=\"heading_{{index}}\" class=\"panel-heading\" role=\"tab\"> \
					<h4 id=\"title_{{index}}\" class=\"panel-title\"> \
						<a id=\"toggle_{{index}}\" data-toggle=\"collapse\" href=\"#collapse_{{index}}\" aria-expanded=\"true\" aria-controls=\"collapse_{{index}}\" class=\"collapsed\"> \
							{{nomeCognome}} \
							<i class=\"icon icon-arrow_down\"></i><i class=\"icon icon-arrow_up\"></i> \
						</a> \
					</h4> \
				</div> \
				<div id=\"collapse_{{index}}\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"heading_{{index}}\" aria-expanded=\"true\" style=\"\"> \
					<div id=\"panelbody_{{index}}\" class=\"panel-body\"> \
						<div class=\"formGenerico borderFormRounded\"> \
							<div class=\"form-group\"> \
								<div class=\"row\"> \
									<div class=\"col-sm-12\"> \
										<label class=\"control-label-output\">Nome Cognome</label>  \
										<span class=\"output\" id=\"intestNomeCognome\"></span> \
									</div> \
								</div> \
								<div class=\"row\"> \
									<div class=\"col-sm-6\"> \
										<label class=\"control-label-output\">Data di nascita</label>  \
										<span class=\"output\" id=\"intestDataNascita\"></span> \
									</div> \
									<div class=\"col-sm-6\"> \
										<label class=\"control-label-output\">Luogo di nascita</label>  \
										<span class=\"output\" id=\"intestLuogoNascita\"></span> \
									</div> \
								</div> \
								<div class=\"row\"> \
									<div class=\"col-sm-6\"> \
										<label class=\"control-label-output\">Telefono</label>  \
										<span class=\"output\" id=\"intestTelefono\"></span> \
									</div> \
									<div class=\"col-sm-6\"> \
										<label class=\"control-label-output\">Cittadinanza</label>  \
										<span class=\"output\" id=\"intestCittadinaza\"></span> \
									</div> \
								</div> \
								<div class=\"row\"> \
									<div class=\"col-sm-6\"> \
										<label class=\"control-label-output\">Indirizzo di residenza</label>  \
										<span class=\"output\" id=\"intestIndirizzoRes\"></span> \
									</div> \
									<div class=\"col-sm-6\"> \
										<label class=\"control-label-output\">Indirizzo di corrispondenza</label>  \
										<span class=\"output\" id=\"intestIndirizziCorr\"></span> \
									</div> \
								</div> \
								<div class=\"row\"> \
									<div class=\"col-sm-12\"> \
										<p>Alla luce di tali normative, ti chiediamo di \
											<a class=\"linkTodisable\" 			id=\"modaldis\" 		data-backdrop=\"static\" data-toggle=\"modal\" data-target=\"#layeralert2\" onclick=\"loadData(this.id);\" style=\"text-decoration:underline;color:#6f8f0a\" > \
											dichiarare il/i tuo/tuoi Paese/i di residenza fiscale.</a> \
											<a class=\"linkTodisable disabled\" 	id=\"modaldisabled\" 	data-backdrop=\"static\" style=\"display: none;\"> \
											dichiarare il/i tuo/tuoi Paese/i di residenza fiscale.</a> \
										</p> \
									</div> \
								</div> \
							</div> \
						</div> \
					</div> \
				</div> \
			</div>";

// Investimenti - Acquisto - end
