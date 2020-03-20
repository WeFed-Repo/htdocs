
/*
JSON.stringify(compraConf)
"{
	"data":[
	{"codicefida":"CADYVOL","cfam":"-","casadigestione":"7017","acquistato":false,"ctaz":"S",
		"acquisto":{"importorata":200,"numerorateiniziali":4,"versamentiTotali":36,"periodicita":"M","investimentotale":8000,"investimentoiniziale":800},
		"nomefondo":"Amundi F. Absolute Volatility Arbitrage SE EUR","fondosicav":"S",
		"periodicita":{
			"T":{"idpiano":"AM","numerorateiniziali":3,"codicepiano":"7017C","tipopiano":"A,B,D,E,F","numeroratepiano":"12,20,40,60,80","importoinizialepac":100,"numeroannipiano":"3,5,10,15,20","importoratainiziale":100,"importoratasuccessiva":100},
			"M":{"idpiano":"AM","numerorateiniziali":3,"codicepiano":"7017A","tipopiano":"C,E,G,H,I","numeroratepiano":"36,60,120,180,240","importoinizialepac":100,"numeroannipiano":"3,5,10,15,20","importoratainiziale":100,"importoratasuccessiva":100}},
	"divisa":"EUR","descrcasadigestione":"Amundi Luxembourg S.A.","cancellato":false,"datalancio":"2005-09-15","anticiporate":"N","isin":"LU0228157680"},
	{"codicefida":"AMFFE24","cfam":"-","casadigestione":"7017","acquistato":false,"ctaz":"F",
		"acquisto":{"importorata":200,"numerorateiniziali":4,"versamentiTotali":36,"periodicita":"M","investimentotale":8000,"investimentoiniziale":800},
		"nomefondo":"Amundi F. Absolute Volatility Arbitrage FE EUR","fondosicav":"S",
		"periodicita":{
			"T":{"idpiano":"AM","numerorateiniziali":3,"codicepiano":"7017C","tipopiano":"A,B,D,E,F","numeroratepiano":"12,20,40,60,80","importoinizialepac":100,"numeroannipiano":"3,5,10,15,20","importoratainiziale":100,"importoratasuccessiva":100},
			"M":{"idpiano":"AM","numerorateiniziali":3,"codicepiano":"7017A","tipopiano":"C,E,G,H,I","numeroratepiano":"36,60,120,180,240","importoinizialepac":100,"numeroannipiano":"3,5,10,15,20","importoratainiziale":100,"importoratasuccessiva":100}},
		"divisa":"EUR","descrcasadigestione":"Amundi Luxembourg S.A.","cancellato":false,"datalancio":"2011-07-13","anticiporate":"N","isin":"LU0557857082"}]}"
*/

function simPac_acqOnLoad(inputData){
	
	

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
						buyFundSelectBeanJson.navDesc = parseFloat(buyFundSelectBeanJson.nav).toLocaleString("it-IT", {minimumFractionDigits:2, maximumFractionDigits:2});
						listaDepPIR = dataOutJSON.data.listaDepPIR;
						erroreDepPIR = dataOutJSON.data.erroreDepPIR;
						simPac_startLoad();
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
			$("#formGroup").removeClass("loading");
			
			if(esitoRet=='KO') { 
				showError(true, "E", messaggioRet); 
			}
		}
	});
	
}

function simPac_startLoad() {
	
	startLoad();
	
	//verifica se buyFundSelectBeanJson.pac="S"
	$('#radiobuttonPic').parent().parent().hide();
	$('#radiobuttonPac').trigger("click");
	
//	var simPacPeriodicitaValDaCart = {id_periodo: fondoSelDaCart.acquisto.periodicita, numero_periodi: fondoSelDaCart.acquisto.versamentiTotali, descrizione_periodo: fondoSelDaCartDescPeriodo, tipo_piano: null};
	$.each(buyFundSelectBeanJson.listaPeriodi, function(index, periodo) {
		if(periodo.id_periodo == fondoSelDaCart.acquisto.periodicita){
			$("#selectPeriodoSicav").val(JSON.stringify(periodo));
			$("#descrizionePeriodo").val(JSON.stringify(periodo));
			return false;
		}
	});
	
	$('#selectPac > option').each(function() {
		if( $.parseJSON( $(this).val()).numRate == fondoSelDaCart.acquisto.versamentiTotali){
			$("#selectPac").val($(this).val());
			return false;
		}
	});
	caricaImporto();
	
	//cambiaPiani()
//	var idx = -1;
//	var fondoSelDaCartPeriod = fondoSelDaCart.periodicita[fondoSelDaCart.acquisto.periodicita];
//	var numeroratepianoArray = fondoSelDaCartPeriod.numeroratepiano.split(",");
//	$.each(numeroratepianoArray, function(index, value){
//		if(value == fondoSelDaCart.acquisto.versamentiTotali) {
//			idx = index;
//			return false;
//		}
//	});
//	
//	
//	var simPacDurataVal = {
//							'importoIniziale' 	: fondoSelDaCartPeriod.importoinizialepac,
//							'tipoPiano' 		: fondoSelDaCartPeriod.tipopiano,
//							'impRataSuc' 		: fondoSelDaCartPeriod.importoratasuccessiva,
//							'descrTotale' 		: fondoSelDaCartPeriod.numeroannipiano.split(",")[idx] + " anno/i",
//							'codicePiano' 		: fondoSelDaCartPeriod.codicepiano,
//							'numAnni' 			: fondoSelDaCartPeriod.numeroannipiano.split(",")[idx],
//							'numRateIni' 		: fondoSelDaCartPeriod.numerorateiniziali,
//							'impRataIni' 		: fondoSelDaCartPeriod.importoratainiziale,
//							'numRate' 			: fondoSelDaCartPeriod.numeroratepiano.split(",")[idx],
//							'anticipoRate' 		: fondoSelDaCartPeriod.anticiporate,
//							'versMultipoRata' 	: "N",
//							'incrMinRata' 		: ""
//						};
//	$("#selectPac").val(simPacDurataVal);
	
//	$("#spinnerRata")			.val(fondoSelDaCart.acquisto.importorata);
//	$("#spinnerIniziale")		.val(fondoSelDaCart.acquisto.numerorateiniziali);
//	$("#investimentoIniziale")	.text(fondoSelDaCart.acquisto.investimentoiniziale + " " + fondoSelDaCart.divisa);
//	$("#investimentoTotale")	.text(fondoSelDaCart.acquisto.investimentotale 	   + " " + fondoSelDaCart.divisa);
	
	$("#selectPeriodoSicav, #selectPac, #spinnerRata, #spinnerIniziale").attr('disabled', 'disabled');
	$("#spinnerRata")	 .spinner({disabled: "disabled"});
	$("#spinnerIniziale").spinner({disabled: "disabled" });
	$("#cart").val(JSON.stringify(simPacCart));
	
	$('#indietro').click(function() {
		var conto = $('#deposito').val();
		var hrefSimCartPAC = "javascript:document.location.href=";
		hrefSimCartPAC += "wrp_script";
		hrefSimCartPAC += "+'/wbOnetoone/2l/action/investimenti/SimCartPAC.action";
		hrefSimCartPAC += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_pacsimulatore";
		hrefSimCartPAC += "&conto="+conto+"'";
		$("#indietro").attr("href",hrefSimCartPAC);
	});
}


