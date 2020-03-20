
var pacBuyFundSelectBeanJson ={},
	//pacBuyFundSelectRequestJson	='',
	pacBuyFundPreviewBeanJson ='',
	pacBuyFundConfirmBeanJson ='',
	pacBuyFundPreviewRequestJson = '',
	pacBuyFundPreviewFatcaRequestJson ='';
var situazionePacJson = {}, tempNumContratto='';
var bankName = '';			//Preview
var index = '';
var docOn = 0;
var codiceSocietaMappa = {'Etica_Sgr_Spa': {'newCodSoc':'777', 'oldCodSoc':'6'}	};
var datiMifid = {}; 
var datiAdeVer = {}, methodAdeVer = '', stringa_N = 'N', stringa_S = 'S', stringa_F = 'F', stringa_Fondo = 'Fondo', stringa_Sicav = 'Sicav', stringa_EUR = 'EUR', stringa_failure = 'failure';
var isAdeVer = "true";
var fromProsegui = false;
var totContratti = -1;
var newRepoAbilitati=false;
var newRepoAbilitatiSott=false;



function apriNewDocumenti(tipoDocRequest) {
	
	$("form[name='formPdf'] input[name='tipoDocumento']").val(tipoDocRequest);
	$("form[name='formPdf']").attr("action",wrp_script + "/investimenti/ApriDocumenti.action?isPDF=true");
	$("form[name='formPdf']").submit();
	
}

function initializaPacBuyFundSelect(datiSituazionePac){
	showError(false,null,null);
	showError2(false,null,null);
	showError3(false,null,null);
	situazionePacJson = datiSituazionePac;
	Finance.loadDepositData(startLoadPacBuyFundSelect, showError); //showError(true,"W",msg);
//    $("#buyFundPacForm").removeClass("loading");
}

var linkModifica = function() {
	
	if ($('#sezioneFatca').is(':visible')) {
		$('#sezioneFatca').toggle();
	}
	
	if ($('#sezioneAdeVer').is(':visible')) {
		salvaDatiAdeVer();
		$('#sezioneAdeVer').toggle();
	}
	
	bindEvent('#prosegui',"click",linkProsegui);
	unbindEvent("#modifica","click");
	
	proseguiModificaToggle();
	$('#wrapperOut').hide();
	
	proseguiModificaTogglePre();
}

var linkProsegui = function() {
	$('#wrapperOut').show();
	$('#wrapperOut').trigger('focus');
	$('#wrapperOut').addClass("loading");
    unbindEvent('#prosegui',"click");
	if($('#esenzioneDivId').is(':visible')){
		if($("#esenzione").is(':checked')){
			$('#esenzioneEtica').val('S');
		}
		else{
			$('#esenzioneEtica').val('N');
		}
		$('#percScontoCom').val('0');
	}
	else{
		$('#esenzioneEtica').val('');
	}
	fromProsegui = true;
	prosegui();
}

function startLoadPacBuyFundSelect(inputData){
	if(inputData.esito == "WARNING"){
		showError(true,"E",inputData.messaggio);
		$("#sezioneReipilogo,#situazionePac,#prosegui,#modifica").hide();
		$("#buyFundPacForm").removeClass("loading");
		return;
	}
	else if(inputData.esito == "KO"){
		showError(true,"E",inputData.messaggio);
		$("#sezioneReipilogo,#situazionePac,#prosegui,#modifica").hide();
		$("#buyFundPacForm").removeClass("loading");
		return;
	}
	$('#erroreForm').hide();
	pacBuyFundSelectBeanJson.depositJson = inputData;
	popolaDepositiMargine(pacBuyFundSelectBeanJson.depositJson);
	
	//SituazionePAC
	if(situazionePacJson!=undefined && situazionePacJson!=''){
		var depSel = situazionePacJson.deposito;
		if(depSel!=undefined && depSel !='' && depSel!='null'){
			if($('#elencoDepositi').is(':visible')){
				$('#elencoDepositi').val(depSel);
			}
			$('#deposito').val(depSel);
			requestMargine($('#deposito').val(),"false");
		}
		situazionePacJson.deposito = '';
	}
	
	$("#buyFundPacForm").removeClass("loading");
	
	$("#idInfoFondi").addClass("loading");
	$("#situazionePac,#prosegui").hide();
	Finance.loadFundData( $("#deposito").val(), "PAC", successoFondo, erroreFondo);
	
	$('#elencoDepositi').change(function(){
		showError(false,null,null);
		showError2(false,null,null);
		showError3(false,null,null);
		$("#idInfoFondi").show();
		$("#idInfoFondi").addClass("loading");
		$('#deposito').val($('#elencoDepositi :selected').val());
		$('#deposito').text($('#elencoDepositi :selected').text());
		requestMargine($('#deposito').val(),"false");
		Finance.loadFundData( $("#deposito").val(), "PAC", successoFondo, erroreFondo);
		
	});
	
	$('#elencoFondi').change(function(){
		showError(false,null,null);
		showError2(false,null,null);
		showError3(false,null,null);
		$("#idInfoFondi").addClass("loading");
		$("#situazionePac,#prosegui").hide();
		$('#fondo').val($('#elencoFondi :selected').val());
		$('#fondo').text($('#elencoFondi :selected').text());
		caricaFondi(JSON.stringify(Finance.fundData.fondi[$('#fondo').val()]));
		$("#idInfoFondi").removeClass("loading");
	});
	
	$('#apriScheda').click(function() {
		apriSchedaFondoFida();
	});
	
	spinnerVersamenti();
	$('#numeroBanca').val(pacBuyFundSelectBeanJson.numeroBanca);
	
	$('#situazionePac').click(function() {
		situazionePacFn();
	});
	
	$('#modifica').hide();
	
	
	$('#prosegui').click(linkProsegui);
	
	
//	$('#modifica').click(function() {
//		if ($('#sezioneFatca').is(':visible')) {
//			$('#sezioneFatca').toggle();
//		}
//		
//		if ($('#sezioneAdeVer').is(':visible')) {
//			salvaDatiAdeVer();
//			$('#sezioneAdeVer').toggle();
//		}
//		proseguiModificaToggle();
//	});
	
	$('#confermaFatca').click(function() {
		var errors 			= [], 
			chkBoxDocFatca 	= $("#checkDocFatca"), 
			chkBoxDatiFatca = $("#checkDatiFatca")
			;
		
		if (! chkBoxDocFatca.is(':checked')) {  
            errors.push({ field: chkBoxDocFatca, text: "Prendi visione dell'informativa FATCA aprendo il relativo pdf." });
            setHasErrors(errors, "#sezioneFatca");
		}
		if (! chkBoxDatiFatca.is(':checked')) {  
            errors.push({ field: chkBoxDatiFatca, text: "Conferma le dichiarazioni rilasciate." });
            setHasErrors(errors, "#sezioneFatca");
		}
		if (errors.length) {
			$(errors[0].field).trigger('focus');
		}
		else{
			chiamataFatca();
		}
		
		return (!errors.length);
	});
	
	//adever - 4/4
	$('#confermaAdeVer').click(function() {
		var errors = erroriAdever();
		
		if (errors.length) {
			setHasErrors(errors, "#sezioneAdeVer");
			$(errors[0].field).trigger('focus');
		} else {
			chiamataAdeVer();
		}

		return (!errors.length);
	});
	
	$('#linkDocCostiOneriIncentInv').click(
			function() {
				//IE non scarica PDF perche GET has variabile con lunghezza troppo alta
				var mapForm    = document.createElement("form");
				mapForm.id	   = "frmPdfMifidInv";
				mapForm.style  = "display:none";	//apertura di PDF visualizza elementi nel footer
				mapForm.target = "Map";
				mapForm.method = "POST"; // or "post" if appropriate
				mapForm.action = wrp_script + "/investimenti/PdfMifid2CostiInducement.action";

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
//				open(wrp_script + "/investimenti/PdfMifid2CostiInducement.action?dMifid="+ datiMifidPdfInv + "&isPDF=true");
			});
	
}


function popolaDepositiMargine(jsonBean){
	if(Object.keys(jsonBean.depositi).length > 1){
		$('#elencoDepositi').empty();
		var keys = Object.keys(jsonBean.depositi).sort();
		for (var dep in keys){
			$("#elencoDepositi").append($('<option>').val(keys[dep]).text(jsonBean.depositi[keys[dep]]));
		}
		
		$('#deposito').val($('#elencoDepositi :selected').val());
		$('#deposito').text($('#elencoDepositi :selected').text());
		
		$('#elencoDepositi').show();
		$('#deposito').hide();
	}
	else{ 
		$.each(jsonBean.depositi, function(key, value) {
			$('#deposito').val(key);
			$('#deposito').text(value);
		});
		
		$('#deposito').show();
	}
	requestMargine($('#deposito').val(),"false");
}

function successoFondo(fundData){
	$("#elencoFondi").empty();
	if(!$.isEmptyObject(fundData) && "OK" == fundData.esito && fundData.hasOwnProperty("fondi")) {
		if(0 == Object.keys(fundData.fondi).length){
			txtFondo = '';
			esito = "W";
			msgEsito = "Nel deposito titoli selezionato non sono presenti piani di accumulo sui fondi";
			erroreFondo(txtFondo, esito, msgEsito);
		}
		else{
			for(var fund in fundData.fondi) {
				$("#elencoFondi").append("<option value='"+fund+"'>"+fundData.fondi[fund].nomefondo+"</option>");
			}
		
			$('#fondo').val($('#elencoFondi :selected').val());
			$('#fondo').text($('#elencoFondi :selected').text());
			$('#elencoFondi').show();
			$('#fondo').hide();
			caricaFondi(JSON.stringify(fundData.fondi[$('#fondo').val()]));
			$("#idInfoFondi").show();
			showError2(false,null,null);
		}
	}
	else{
		txtFondo = '';
		esito = "W";
		msgEsito = "Nel deposito titoli selezionato non sono presenti piani di accumulo sui fondi";
		erroreFondo(txtFondo, esito, msgEsito);
	}
	$("#idInfoFondi").removeClass("loading");
	
	//cambia deposito per Situazione PAC - OLD

	//SituazionePAC
	if(situazionePacJson!=undefined && situazionePacJson!=''){
		if(situazionePacJson.deposito == ''){
			var numContratto = situazionePacJson.codIsin;
			var fondoSeleted = ''; 
			if(numContratto!=undefined && numContratto !='' && numContratto != 'null'){
				for(var fund in  Finance.fundData.fondi) {
					var tmpFond =  Finance.fundData.fondi[fund];
					if(situazionePacJson.codIsin != ''){
						for (var i=0; i<tmpFond.dettagli.length; i++) {
							if(tmpFond.dettagli[i].contratto == numContratto){
								situazionePacJson.codIsin = '';
								fondoSeleted = fund;
								tempNumContratto = numContratto;
								break;
							}
						}
					}
				}
				if(situazionePacJson.codIsin == ''){
					$('#elencoFondi').val(fondoSeleted).change();
				}
			}	
		}
	}
	
}

function erroreFondo(txtFondo, esito, msgEsito){	
//	if(esito == "timeout"){
//		if(Finance.prova <4 ){
//			Finance.prova ++;
//			Finance.chiamataIsal(   $("#deposito").val(), "PAC", successoFondo, erroreFondo,Finance.cf,Finance.prova);
//		}
//		else{
//			erroreFondo(txtFondo, "E", msgEsito);
//		}
//	}
//	else{
		$("#idInfoFondi").hide();
		showError2(true,esito,msgEsito);
		$("#situazionePac,#prosegui").hide();
//	}
}

function caricaFondi(fondo){
	
	var fondoSelected = $.parseJSON(fondo);
	if(codiceSocietaMappa.Etica_Sgr_Spa.newCodSoc == fondoSelected.codicesocietagestione){
		$("#esenzioneDivId").show();
	}
	else{
		$("#esenzioneDivId").hide();
	}
	$("#idCampiFondi").empty();
	for (var i=0; i<fondoSelected.dettagli.length; i++) {
		if(fondoSelected.dettagli[i].rateresidue == '0' && fondoSelected.dettagli[i].tipo_contratto != 'Z'){	//Z=contratto PASS
			continue;	
		}
		var output = templateRadioGroupContratto 
							.replace("{{contratto}}", 		fondoSelected.dettagli[i].contratto)
							.replace("{{parametroModulo}}", fondoSelected.dettagli[i].contratto)
							.replace("{{controValue}}", 	fondoSelected.dettagli[i].rateTotaliPiano * fondoSelected.dettagli[i].importorata)
							.replace("{{importoRata}}", 	fondoSelected.dettagli[i].importorata)
							.replace("{{rateVersate}}", 	fondoSelected.dettagli[i].rateSottoscritte)
							.replace("{{rateResidue}}", 	fondoSelected.dettagli[i].rateresidue)
							.replace(/{{num}}/g,			i)
							.replace("{{numVersamentiOut}}", 1)
		;
		
		$("#idCampiFondi").append(output);
		var numVerAgg = fondoSelected.dettagli[i].rateresidue;
		if(fondoSelected.dettagli[i].tipo_contratto == 'Z'){
			var margineValIT = $('#margine').text().indexOf("EUR")>0? $('#margine').text().split(" EUR")[0]: "0,0";
			var margineNum = parseInt(margineValIT.replace(",","."));
			numVerAgg = parseInt(margineNum/fondoSelected.dettagli[i].importorata);
		}
		spinnerVersamenti(i, numVerAgg, fondoSelected.dettagli[i].rateresidue);
		
		$('#contratto_'+i).change(function() {
			if ($(this).is(':checked')) {
				var idx = $(this).attr('id').split("_")[1];
				$('#codiceFondo').val(fondoSelected.codicefondo); //codInt
				$('#codiceSocietaDiGestione').val(fondoSelected.codicesocietagestione);
				$('#percScontoCom').val(fondoSelected.dettagli[idx].sconto);
				$('#importoRata').val(fondoSelected.dettagli[idx].importorata);
				$('#numVersamenti').val($('#numVersamenti_'+idx).val());
				$('#numeroContratto').val(fondoSelected.dettagli[idx].contratto);
				$('#fondosicav').val(fondoSelected.strumento);
				$('#cfam').val(fondoSelected.codfamfondo);
				$('#numeroAnniPiano').val(fondoSelected.dettagli[idx].descrizioneanni);
				$('#rateSottoscritte').val(fondoSelected.dettagli[idx].rateSottoscritte);
				$('#rateTotali').val(fondoSelected.dettagli[idx].rateTotaliPiano);
				
				index = idx;
			}
			showError2(false,null,null);
		});	
		$('#descrSocietaGestione').val(fondoSelected.descrizioneSocietaGestione);
		$('#speseFisse').val(fondoSelected.spese);
		$('#divisa').val(fondoSelected.tipodivisa);
		$('#navValore').val(fondoSelected.nav);
		
	}
	totContratti = fondoSelected.dettagli.length;	//per toggle Pre
		
	if($("#idCampiFondi").is(':empty')){
		showError3(true,"W","Rate residue 0. Scegli altro fondo.");
		$("#situazionePac,#prosegui").hide();
	}
	else{
		$("#idCampiFondi input:radio:first").prop('checked', true).change();	//change to 1st available
		$("#situazionePac,#prosegui").show();
	}
	
	$('#apriScheda').show();
	$('#idCampiFondi').show();
	
	if(situazionePacJson!=undefined && situazionePacJson!=''){
		if(situazionePacJson.codIsin == ''){
			var tempSituazionePac = situazionePacJson.situazionePac;
			if(tempSituazionePac!=undefined && tempSituazionePac !='' && tempSituazionePac=='true'){
				for (var i=0; i<fondoSelected.dettagli.length; i++) {
					if(fondoSelected.dettagli[i].contratto == tempNumContratto){
						$('#contratto_'+i).prop('checked', true).change();
						 situazionePacJson.situazionePac = '';
						 tempNumContratto = '';
					}
				}
			}
		}
	}
	
	//PIR
	var tipoStrumentoHtml = $("#tipologia").html().substring($("#tipologia").eq(0).text().trim().length);
	var tipoFondo = '';
	if(fondoSelected.strumento == "F"){
		tipoFondo = "Fondo";
	}
	else{
		tipoFondo = "Sicav";
	}
	$('#pir').val("N");
	$('#tipologia').html(tipoFondo + tipoStrumentoHtml);
	$("#infoPir").hide();
	if(fondoSelected.pir != undefined && fondoSelected.pir == 'S'){
		tipoFondo += " PIR";
		$('#tipologia').html(tipoFondo + tipoStrumentoHtml);
		$("#infoPir").show();
		$('#pir').val("S");
	}
}

function spinnerVersamenti(num, rateResidue, rateResidueFondo){
	if(num == undefined) return;
	setSpinner({
				idInput : '#numVersamenti' + '_'+num ,
				min	 	: 1,
				max		: rateResidue
				, decimals:0
			});
	$('#numVersamenti' + '_'+num).val(1);
	$('#spinnerNumVerDivId' + '_'+num + ' .ui-spinner-up').click(function() {
		showError2(false,null,null);
		var numVer = parseInt($('#numVersamenti' + '_'+num).val());
//		var rateResidue = parseInt($('#rateResidue').text());
		if(numVer > rateResidue){					//contratti PASS
			var msg = "Non puoi inserire un numero maggiore di rate"; 		//di quelle residue: " + rateResidue;
			if(rateResidueFondo == 0){
				msg+= ": " + rateResidue + " calcolato con disponibilita e importo rata";
			}
			else{
				msg+= " di quelle residue:" + rateResidue;
			}
			showError2(true,"E",msg);
		}
		else{
			if(numVer == rateResidue){					
				var msg = "Non puoi inserire un numero maggiore di rate";
				if(rateResidueFondo == 0){	//contratti PASS
					msg+= ": " + rateResidue + " calcolato con disponibilita e importo rata";
				}
				else{
					msg+= " di quelle residue:" + rateResidue;
				}
				showError2(true,"W",msg);
			}
			
			$('#numVersamentiOut' + '_'+num).text($('#numVersamenti' + '_'+num).val());
			
			if($("#contratto_"+num).is(":checked")){
				$('#numVersamenti').val($('#numVersamenti' + '_'+num).val());	//aggiorna solo se proprio radio selezionato
			}
			
		}
	});
	
	$('#spinnerNumVerDivId' + '_'+num + ' .ui-spinner-down').click(function() {
		showError2(false,null,null);
		if($('#numVersamenti' + '_'+num).val() == 1){
			var msg = "Il numero di versamenti iniziali non pu&ograve; essere inferiore a 1";
			showError2(true,"W",msg);
		}
		$('#numVersamentiOut' + '_'+num).text($('#numVersamenti' + '_'+num).val());
		
		if($("#contratto_"+num).is(":checked")){
			$('#numVersamenti').val($('#numVersamenti' + '_'+num).val());
		}
	});
	
	
	$('#numVersamenti' + '_'+num).bind('keydown', function(e){
		showError2(false,null,null);
		if(109 == e.keyCode || 110 == e.keyCode || 189 == e.keyCode || 190 == e.keyCode){	//formatto numerico ma evitare - o .
			 e.preventDefault();
		}
		
		else if(8 != e.keyCode && 46 !=e.keyCode && isNaN(e.key)){		//backspace e delete
//			var msg = "Puoi inserire un numero intero tra 1 e rate residue: " + rateResidue ;
//			showError2(true,"W",msg);
			e.preventDefault();
		}
	});
	
	$('#numVersamenti' + '_'+num).bind('keyup', function(e){
//		console.log(e.key + ',' + e.keyCode + ',' + $('#numVersamenti' + '_'+num).val());
		showError2(false,null,null);
		if(109 == e.keyCode || 110 == e.keyCode || 189 == e.keyCode || 190 == e.keyCode){	//formatto numerico ma evitare - o .
			 e.preventDefault();
		}
		else if(8 != e.keyCode && 46 !=e.keyCode && isNaN(e.key)){		//backspace e delete
			//var msg = "Puoi inserire un numero intero tra 1 e rate residue: " + rateResidue ;
			//showError2(true,"W",msg);
			e.preventDefault();
		}
		else{ 
			var numVer = $('#numVersamenti' + '_'+num).val();
			if(numVer =="" || isNaN(numVer)){
				var msg = "Puoi inserire un numero intero tra 1 e "; //rate residue: " + rateResidue 
				if(rateResidueFondo == 0){		//contratti PASS
					msg+= rateResidue + " calcolato con disponibilita e importo rata";
				}
				else{
					msg+= " rate residue:" + rateResidue;
				}
				showError2(true,"E",msg);
				$('#numVersamenti' + '_'+num).val("1");
				if($("#contratto_"+num).is(":checked")){
					$('#numVersamenti').val("1");
				}
				$('#numVersamentiOut' + '_'+num).text("1");
			}
			else if(parseInt(numVer) > parseInt(rateResidue)){
				var msg = "Non puoi inserire un numero maggiore di rate";
				if(rateResidueFondo == 0){
					msg+= ":" + rateResidue + " calcolato con disponibilita e importo rata";
				}
				else{
					msg+= " di quelle residue:" + rateResidue;
				}
				showError2(true,"E",msg);
				$('#numVersamenti' + '_'+num).val(rateResidue);
				if($("#contratto_"+num).is(":checked")){
					$('#numVersamenti').val(rateResidue);
				}
				$('#numVersamentiOut' + '_'+num).text(rateResidue);
			}
			else{
				if(parseInt(numVer) == parseInt(rateResidue)){					
					var msg = "Non puoi inserire un numero maggiore di rate";
					if(rateResidueFondo == 0){	//contratti PASS
						msg+= ": " + rateResidue + " calcolato con disponibilita e importo rata";
					}
					else{
						msg+= " di quelle residue:" + rateResidue;
					}
					showError2(true,"W",msg);
				}
				$('#numVersamenti' + '_'+num).val(numVer);
				if($("#contratto_"+num).is(":checked")){
					$('#numVersamenti').val(numVer);
				}
				$('#numVersamentiOut' + '_'+num).text(numVer);
			}	
		}
	});
}

function situazionePacFn(){
	
	var hrefScedaFondo = "javascript:document.location.href=";
	hrefScedaFondo += "wrp_script";
	hrefScedaFondo += "+'/wbOnetoone/2l/action/investimenti/SituazionePac.action";
	hrefScedaFondo += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_sitauz_pac&idItem=wb_portafoglio_fondi";
	hrefScedaFondo += "&deposito="+$('#deposito').val() + "'";
	$("#situazionePac").attr("href",hrefScedaFondo);
	
}


function apriSchedaFondoFida(){
	var codIsin = $('#fondo').val(); 
	var hrefScedaFondo = "javascript:document.location.href=";
	hrefScedaFondo += "wrp_script";
//	hrefScedaFondo += "+'/wbOnetoone/2l/jsp/FMP/fida/ricerca.action";
//	hrefScedaFondo += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto";
	hrefScedaFondo += "+'/wbOnetoone/2l/action/investimenti/RicercaFondi.action";
	hrefScedaFondo += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vers_agg_pac";
	hrefScedaFondo += "&codiceIsin="+codIsin+"&fondo=true'";
	$("#apriScheda").attr("href",hrefScedaFondo);
}


function prosegui(){
	
	docOn = 0;
	
	var inputData = { "deposito" 				: $('#deposito').val()
					, "cfam"	 				: $('#cfam').val()
					, "percScontoCom"			: $('#percScontoCom').val()
					, "fondosicav"				: $('#fondosicav').val()
					, "rataSicav"				: "true"
					, "codiceFondo"				: $('#codiceFondo').val()
					, "codiceSocietaDiGestione"	: $('#codiceSocietaDiGestione').val()
					, "importoRata"				: $('#importoRata').val()
					, "codicePiano"				: $('#codicePiano').val()
					, "numeroContratto"			: $('#numeroContratto').val()
					, "numVersamenti"			: $('#numVersamenti').val()
					, "esenzioneEtica" 			: $('#esenzioneEtica').val()
					, "rateTotali"				: $('#rateTotali').val()
					, "codiceCliente"			: $('#codiceCliente').val()
	};
	initializaDatiOrdineOutput(inputData);
}


function initializaDatiOrdineOutput(inputData){
	
	if( fromProsegui )  {
		fromProsegui = false;
		proseguiModificaTogglePre();
	}
	
	$.ajax({
		url: wrp_script_direct + "/investimenti/PacBuyFundPreviewJson.action" + "?cf=" + Math.random(),
    	dataType: "json",
        data: inputData,
        success: function (dataOutJSON, status, jqXHR) {	//jqXHR.statusText="OK"; status="success"
        			if(200 == jqXHR.status){
        				pacBuyFundPreviewBeanJson = $.parseJSON(dataOutJSON.data.pacBuyFundPreviewBeanJson);
        				pacBuyFundPreviewRequestJson = $.parseJSON(dataOutJSON.data.pacBuyFundPreviewRequestJson);
        				
        				if(pacBuyFundPreviewBeanJson == undefined || pacBuyFundPreviewBeanJson == null || pacBuyFundPreviewBeanJson == ""){
//        					showError(true,"E",msg);
//        					$('#datiOrdineOutput').hide();
        					showError(true,"E",pacBuyFundPreviewBeanJson.errorMessage);
        					$('#wrapperOut').removeClass("loading");
							$('#wrapperOut').hide();
							proseguiModificaTogglePre();
							bindEvent('#prosegui',"click",linkProsegui);
        				}
        				else if("failure" == pacBuyFundPreviewBeanJson.action){
//        					$("#sezioneReipilogo,#situazionePac,#prosegui,#modifica").hide();
//        					$('#datiOrdineOutput').hide();
        					showError(true,"E",pacBuyFundPreviewBeanJson.errorMessage);
        					$('#wrapperOut').removeClass("loading");
							$('#wrapperOut').hide();
							proseguiModificaTogglePre();
							bindEvent('#prosegui',"click",linkProsegui);
        				}
        				else{ 
        					if("warning" == pacBuyFundPreviewBeanJson.action && "0" == pacBuyFundPreviewRequestJson.numeroAppropriatezza){
//	        					$("#sezioneReipilogo,#situazionePac,#prosegui,#modifica").hide();
//	        					$('#datiOrdineOutput').hide();
	        					showError(true,"W",pacBuyFundPreviewBeanJson.errorMessage);
	        					$('#wrapperOut').removeClass("loading");
								$('#wrapperOut').hide();
								proseguiModificaTogglePre();
								bindEvent('#prosegui',"click",linkProsegui);
        					}
        					else{
        						showError(false,null,null);
        						showError2(false,null,null);
        					}
        					caricaDatiOrdineOutput(); 
    		        		proseguiModificaToggle();
    		        		bindEvent("#modifica","click",linkModifica);
        				}
        			}
        			else{
        				var msg = "Proseguire non &egrave; possibile al momento";
        				showError(true,"E",msg);
//        				$('#datiOrdineOutput').hide();
        				$('#wrapperOut').removeClass("loading");
						$('#wrapperOut').hide();
						proseguiModificaTogglePre();
        			}
        },
        error: function (jqXHR, status, errorThrown) {
                    var msg = "Proseguire non &egrave; possibile al momento";
           	        showError(true,"E",msg);
//           	    $('#datiOrdineOutput').hide();
           	        $('#wrapperOut').removeClass("loading");
					$('#wrapperOut').hide();
					proseguiModificaTogglePre();
        },
        complete: function (jqXHR, status){ 
//        			$('#prosegui').removeAttr('disabled');
//        			$('#datiOrdineOutput').removeClass("loading");
//        			$("#buyFundPacForm").removeClass("loading");
        			$('#wrapperOut').removeClass("loading");
        }
	});
}

function caricaDatiOrdineOutput(){
	
	if(pacBuyFundPreviewRequestJson != undefined && pacBuyFundPreviewRequestJson != null && pacBuyFundPreviewRequestJson != ""){
		
		$("form[name=formPdf] > input[name=keyDocumento]").val($("#elencoFondi").val());   // per ricerca documento KIID
		
		
		if("true" == pacBuyFundPreviewRequestJson.isFacta){
			
			$('#checkDocFatca').attr('disabled','disabled');
			resetHasErrors("#sezioneFatca");
			$('#checkDocFatca,#checkDatiFatca').click(function() {
				resetHasErrors("#sezioneFatca");
			});
			
			
			$('#linkDocFatca').click(function() {
				if(! $('#checkDocFatca').is(':checked')){
					 $('#checkDocFatca').removeAttr('disabled');
					 resetErrors('#checkDocFatca');
				}
				open(wrp_script + "/common/apriDocumento.action?id=" + pacBuyFundPreviewRequestJson.idDocFacta + "&prodotto=" + pacBuyFundPreviewRequestJson.idTypeFacta + "&isPDF=true");
	  		});
			
//			$('#sezioneAdeVer').hide();
			$('#sezioneFatca').show();
			$('#idDisclaimerFatca').html(pacBuyFundPreviewBeanJson.disclaimerFatca);
			
			caricaDatiFatcaIntestatario(pacBuyFundPreviewRequestJson);
			
			return;
			
		}  else if ( isAdeVer == pacBuyFundPreviewRequestJson.isAdeVer) {
			
			resetHasErrors("#sezioneAdeVer");
			if($('#deposito').val().split("/")[2] !="0"){
				if(! listaDepPIR[$('#deposito').val()]){
					showError(true, "E", (pacBuyFundPreviewRequestJson.errorMessage ? pacBuyFundPreviewRequestJson.errorMessage : "Per poter operare &egrave; necessario compilare l&apos;Adeguata Verifica sul sottodeposito del proprio cointestatario"));
					proseguiModificaToggle();
					return;
				}
				else{
					showError(false, null, null);
				}
			}
			$('#sezioneAdeVer').show();
			if(undefined != datiAdeVer.numint && datiAdeVer.deposito == $('#deposito').val()){	
//				$('#sezioneAdeVer').removeClass("loading");
			}
			else{
				if(stringa_F == $("#fondosicav").val()) {
					methodAdeVer = 'FONDI';
				}
				else{
					methodAdeVer = 'SICAV'
				}
				AdeVer.loadFields(methodAdeVer, 'all', $("#deposito").val());
			}
//			$('#sezioneFatca').hide();
			return;
		}
	}
	
	
	
//	depositoCustomer = pacBuyFundPreviewRequestJson.depositoCustomer;
//	$('#chiave').val(pacBuyFundPreviewRequestJson.numeroRegistrazione);
	
	bankName = "WeBank";
	$('.bankName').text(bankName);
	
	if(Finance.fundData.fondi[$('#fondo').val()].pir != undefined && Finance.fundData.fondi[$('#fondo').val()].pir == 'S'){
		$("#sezionePir").show();
		$("#checkboxPir").prop("checked", false);
	}
	
	if( (pacBuyFundPreviewBeanJson.adeguatezza != undefined && pacBuyFundPreviewBeanJson.adeguatezza !=null && pacBuyFundPreviewBeanJson.adeguatezza.length > 0) ||
		(pacBuyFundPreviewBeanJson.conflitti   != undefined && pacBuyFundPreviewBeanJson.conflitti !=null && pacBuyFundPreviewBeanJson.conflitti.length > 0)   || 
		(pacBuyFundPreviewBeanJson.messaggi    != undefined && pacBuyFundPreviewBeanJson.messaggi!=null && pacBuyFundPreviewBeanJson.messaggi.length > 0)){
		
		//check verifica se msg non contiene caratere strane come à (&agrave;)
		popolaListaDaArray("#listaAdeguatezza",pacBuyFundPreviewBeanJson.adeguatezza, false, "","messaggio"); //codice
		popolaListaDaArray("#listaConflitti"  ,pacBuyFundPreviewBeanJson.conflitti	 , false, "","messaggio");
		
		$('#idAvvertenze').show();
	}
	
//	if(pacBuyFundPreviewBeanJson.inducement != undefined && pacBuyFundPreviewBeanJson.inducement!=null && pacBuyFundPreviewBeanJson.inducement.length>0){ 
//		//popolaListaDaArray("#listaInducement" ,pacBuyFundPreviewBeanJson.inducement , false, "","messaggio");
//		$('#idInducement').show();
//	}
	$('#idInducement').show();
	testoTempistiche(pacBuyFundPreviewBeanJson);
	$('#btnTempistiche').click(function() { 	
		Finance.tempistiche("AQ", pacBuyFundPreviewBeanJson.codiceSocieta);
	});
	
	//MIFID2 	
	 datiMifid = pacBuyFundPreviewRequestJson.datiMifid;	
	 if(datiMifid == undefined){
		 datiMifid = {};
		 datiMifid.codiceSocieta = pacBuyFundPreviewBeanJson.codiceSocieta;
	 }
	 var investimentoIniziale = parseFloat($('#importoRata').val()) * parseFloat($('#numVersamenti').val());
	 
	datiMifid.strumentoFinanziario = Finance.fundData.fondi[$('#fondo').val()].nomefondo;
	datiMifid.controvaloreOperazione = parseFloat(investimentoIniziale).toLocaleString("it-IT",{minimumFractionDigits:2}) + " &euro;";
	
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
//				 {descCostiAnnuale:"<b>Costi del servizio</b>"			,importoCostiAnnuale:""			,percentualeCostiAnnuale:""},
				 {descCostiAnnuale:"Spese una tantum &#8208; Uscita"	,importoCostiAnnuale:"0.00"		,percentualeCostiAnnuale:"0.00"},
//				 {descCostiAnnuale:"<b>Costi del prodotto</b>"			,importoCostiAnnuale:""			,percentualeCostiAnnuale:""},
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
	datiMifid.totaleImportoControvaloreLordo	 = parseFloat(investimentoIniziale);
	datiMifid.totalePercentualeControvaloreLordo = parseFloat(100);
	
	showDatiMifid2_tab8(datiMifid);
	
	var idTxt = '', txtConferma2 = '', elencoTermini = [], txtDoc2='';
	if("F" == pacBuyFundPreviewBeanJson.fondosicav){
		$('#txtInfoFondo1').show();
		$('#txtInfoFondo2').show();
		idTxt = "Documentazione obbligatoria";
		
		elencoTermini[0] = "confermi l&#39;autorizzazione generale gi&#224; rilasciata a "+ bankName +" di operare in <strong>conflitto di interessi</strong>";
		elencoTermini[1] = "confermi di aver <strong>letto e approvato specificatamente</strong>, ai sensi dell&#39;art. 1341 del c.c., <strong>le seguenti clausole</strong> del Regolamento di gestione del fondo: &#8220;Denominazione e durata dei Fondi&#8221;, &#8220;Compiti e responsabilit&#224; della Banca Depositaria&#8221;, &#8220;Partecipazione al Fondo&#8221;, &#8220;Quote e certificati di partecipazione&#8221;, &#8220;Rimborso delle quote&#8221;, &#8220;Valore unitario della quota e sua pubblicazione&#8221;, &#8220;Modifiche del Regolamento&#8221;, &#8220;Liquidazione del Fondo&#8221; e &#8220;Spese ed oneri a carico dei Partecipanti e di ciascun Fondo&#8221;.";

		txtConferma2 = " societ&#224; di gestione del fondo ";
		txtDoc2 	 = ' al fondo ';
	}
	else if("S" == pacBuyFundPreviewBeanJson.fondosicav){
		idTxt = "Prospetto informativo";
		$('#txtDoc1').show();
			
		elencoTermini[0] = "confermi l&#39;autorizzazione generale gi&#224; rilasciata a " + bankName + " di operare in <strong>conflitto di interessi</strong>";
		elencoTermini[1] = "dichiari di essere debitamente informato circa la natura e le caratteristiche della Sicav e di essere consapevole dei rischi derivanti dal relativo investimento; a tale riguardo dichiari di aver letto, compreso ed accettare quanto previsto nella documentazione relativa alla Sicav (Prospetto Semplificato, Prospetto Completo, Statuto, Modulo di sottoscrizione)";
		elencoTermini[2] = "dichiari di avere <strong>autonomamente valutato le condizioni economiche dell&#39;operazione di investimento</strong> in oggetto e di averle trovate appropriate rispetto alle proprie aspettative di risultato";
		elencoTermini[3] = "dichiari di essere consapevole che gli ordini di investimento o disinvestimento conferiti in un giorno non lavorativo si considerano pervenuti il primo giorno lavorativo successivo";
		elencoTermini[4] = "confermi le tue dichiarazioni circa le tue precedenti esperienze ed attuali conoscenze nell&#39;ambito degli investimenti in strumenti finanziari.";
		
		txtConferma2 = " Sicav ";
		txtDoc2 = ' alla Sicav ';
	}	
	$('#idTxtDoc').text(idTxt);
	$('#txtDoc2').text(txtDoc2);
	
	//sezioneDichiarazioni();
	
	resetHasErrors("#idDocumentazione");	//nascondere checkbox fianco campo di errore dopo carica della pagina
	resetHasErrors("#idAvvertenze");
	resetHasErrors("#idInducement");
//	resetHasErrors("#idConsensoDatiPersonali");
	
	if(! $('#checkProspetto').is(':checked')){
		addTxtTooltip('#checkLinkProspetto',"Per proseguire occorre avere preso visione del documento relativo al prospetto informativo"); // check : prospetto solo per sicav .. per fondo si chiama docuemnto obbligatorio
	}
	$('#checkProspetto').attr('disabled','disabled');
	$('#checkProspetto').click(function() {
		if($(this).is(':checked')){   
			$(this).attr('disabled','disabled');
		}
	});
	$('#linkDocObb').click(function() {
		docOn |= 1;
		if(docOn==3 ){
			 $('#checkProspetto').removeAttr('disabled');
			 resetErrors('#checkProspetto');		// check
			 removeTxtTooltip('#checkLinkProspetto');
		}
		
		if(newRepoAbilitati==false) {
			open(wrp_script + "/common/apriDocumento.action?id=" + pacBuyFundPreviewRequestJson.idDocProspetto + "&prodotto=" + pacBuyFundPreviewRequestJson.idTypeProspetto + "&isPDF=true");
		} else {
			apriNewDocumenti("kiid");
		}
		
		
	});
	
	$('#linkDocObb1').click(function() {
		docOn |= 2;
		if(docOn==3){
			 $('#checkProspetto').removeAttr('disabled');
			 resetErrors('#checkProspetto');		// check
			 removeTxtTooltip('#checkLinkProspetto');
		}
		
		
		if(newRepoAbilitatiSott==false) {
			open(wrp_script + "/common/apriDocumento.action?id=" + pacBuyFundPreviewRequestJson.idDocModulo + "&prodotto=" + pacBuyFundPreviewRequestJson.idTypeProspetto + "&isPDF=true");
		} else {
			apriNewDocumenti("sot");
		}
		
		
	});
	
	
	$("#linkDocObb").text("Informazioni chiave per l\'investitore (KIID) " + $("#elencoFondi").val());
	$("#linkDocObb1").text("Modulo di sottoscrizione " + $("#elencoFondi").val());

	
	if(0 == elencoTermini.length){
			elencoTermini[0] = "confermi di aver letto nuovamente la documentazione relativa al fondo ed in particolare di quanto previsto in ordine alle modalit&#224; di effettuazione delle operazioni successive alla prima sottoscrizione";
			elencoTermini[1] = "autorizzi " + bankName + " a compiere tutto quanto necessario per eseguire l&#39;operazione di investimento richiesta; autorizzi altres&#236; l&#39;addebito sul conto corrente collegato al deposito titoli precedentemente scelto di quanto necessario per eseguire l&#39;operazione";
			elencoTermini[2] = "confermi l&#39;autorizzazione generale gi&#224; rilasciata a " + bankName + " di operare in conflitto di interessi";
			elencoTermini[3] = "dichiari di avere autonomamente valutato le condizioni economiche dell&#39;operazione di investimento in oggetto e di averle trovate appropriate rispetto alle proprie aspettative di risultato";
			elencoTermini[4] = "confermi le tue dichiarazioni circa le tue precedenti esperienze ed attuali conoscenze nell&#39;ambito degli investimenti in strumenti finanziari.";
	}
	
	$("#listaTerminiConferma").empty();
	$.each(elencoTermini, function(idx){
		$('#listaTerminiConferma').append("<li>" + elencoTermini[idx] );
	});
	
	$('#txtConferma2').html(txtConferma2);
	
	//reset errori quando checkbox o radio sono selezionati
	$('#checkAvvertenze').click(function() {
		resetHasErrors("#idAvvertenze");
	});
	$('#checkIncentivi').click(function() {
		resetHasErrors("#idInducement");
	});
	$('#checkProspetto').click(function() {
		resetHasErrors("#idDocumentazione");
	});
	
	$('#sezionePir').click(function() {
		resetHasErrors("#sezionePir");
	});
	
	
	$("input[name=checkLimitazioni]").click(function() {
		resetHasErrors($("input[name=checkLimitazioni]").parent().parent().parent().parent());
	});
	
	$("input[name=checkMandatoSIP]").click(function() {
		resetHasErrors($("input[name=checkMandatoSIP]").parent().parent().parent().parent());
	});
	
	
	$("input[name=checkPrivacyOICVM]").click(function() {
		resetHasErrors($("input[name=checkPrivacyOICVM]").parent().parent().parent().parent());
	});
	
	
	$('#numeroAppropriatezza').val(pacBuyFundPreviewRequestJson.numeroAppropriatezza);
	
	
	$('#conferma').click(function() {					//$( "#buyFundForm" ).submit(function( event ) {
		var errors 				= [], 
			chkBoxAvvertenze 	= $("#checkAvvertenze"), 
			chkBoxIncentivi 	= $("#checkIncentivi"),
			chkBoxProspetto 	= $("#checkProspetto")
		;
		
		
		if ($('#sezionePir').is(':visible')) {
			if (!$("#checkboxPir").is(':checked')) {
				prosegui = Boolean(prosegui && false);
				errors.push({
							field : $("#checkboxPir"),
							text : "Per proseguire occorre dichiarare di non essere titolare di altri fondi PIR"
						});
				setHasErrors(errors, $("#sezionePir"));
			}
		}
		
		
		
		
		if($('#idInducement').is(':visible')){
			if (! chkBoxIncentivi.is(':checked')) {  
                errors.push({ field: chkBoxIncentivi, text: "Per proseguire occorre dichiarare di avere preso visione delle informazioni relative ai Costi, Oneri e Incentivi" });
                setHasErrors(errors, "#idInducement");
                if($("#sezioneCostiInducementInv").find(".panel-collapse.collapse.in").length==0) {
    				$("#sezioneCostiInducementInv i").first(".icon .icon-arrow_down").trigger("click");
    			}
			}
		}
		
		if($('#idAvvertenze').is(':visible')){
			if (! chkBoxAvvertenze.is(':checked')) {  
                errors.push({ field: chkBoxAvvertenze, text: "Per proseguire occorre dichiarare di aver preso visione delle informazioni relative alla Liquidit&agrave; e conflitto di interessi" });
                setHasErrors(errors, "#idAvvertenze");
			}
		}
		
		if(! chkBoxProspetto.is(':disabled')){
			errors.push({ field: chkBoxProspetto, text: "Per proseguire occorre avere preso visione del documento relativo al prospetto informativo" }); // check : per sicav si chiama prospetto inf .. per fondo si chiama doc obb
			setHasErrors(errors, "#idDocumentazione");
		}
		
		if(! chkBoxProspetto.is(':checked')){
			 errors.push({ field: chkBoxProspetto, text: "Per proseguire occorre dichiarare di avere preso visione dell'intera documentazione informativa" });
			 setHasErrors(errors, "#idDocumentazione");
		}
		
		
		var checkLimitazioni = $("input[name=checkLimitazioni]");
		if(!checkLimitazioni.is(':checked')) {
			errors.push({
				field : checkLimitazioni.parent().parent().parent(),
				text : "Per proseguire occorre dichiarare di avere preso visione dell'informativa OICVM"
			});
			setHasErrors(errors, checkLimitazioni.parent().parent().parent());
			
		}
		
		var checkMandatoSIP = $("input[name=checkMandatoSIP]");
		if(!checkMandatoSIP.is(':checked')) {
			errors.push({
				field : checkMandatoSIP.parent().parent().parent(),
				text : "Per proseguire occorre dichiarare di avere preso visione dell'informativa OICVM"
			});
			setHasErrors(errors, checkMandatoSIP.parent().parent().parent());
			
		}
		
		var checkPrivacyOICVM = $("input[name=checkPrivacyOICVM]");
		if(!checkPrivacyOICVM.is(':checked')) {
			errors.push({
				field : checkPrivacyOICVM.parent().parent().parent(),
				text : "Per proseguire occorre dichiarare di avere preso visione dell'informativa OICVM"
			});
			setHasErrors(errors, checkPrivacyOICVM.parent().parent().parent());
			
		}						
		
		
		if(errors.length) {
			//$(errors[0].field).trigger('focus');
			$("html, body").animate({ scrollTop: errors[0].field.offset().top }, "fast");
		}
		else{
			conferma();
		}
	
		return (!errors.length);
	});
	
}

//Preview
function popolaListaDaArray(idLista, nomeArray, check, prop1, prop2){
	$(idLista).empty();
	if(nomeArray!=undefined && nomeArray!=null && nomeArray.length!=0){
		//$(idLista+'Valore').val(JSON.stringify(nomeArray));
		$.each(nomeArray, function(idx, obj) {
			if(check){
				//property to check
			}
			else{
				var valore ='';
				if(obj.hasOwnProperty(prop1)){
					valore += obj[prop1] + "-";
				}
				if(obj.hasOwnProperty(prop2)){
					valore += obj[prop2];
				}
				 $(idLista).append("<li>"+valore+"</li>");
			}
		});
	}
}

function testoTempistiche(jsonBean){
	var soggTemp = '', oreTemp = '';
	if("F" == jsonBean.fondosicav){
		soggTemp = ' alla SGR ';
	}
	else if("S" == jsonBean.fondosicav){
		soggTemp = ' al soggetto incaricato dei pagamenti ';
	}
	$('.soggTemp').text(soggTemp);
}

function addTxtTooltip(idLable, tooltip){
	if(tooltip){
		$(idLable).attr("data-original-title", tooltip);
	}
	else{
		removeTxtTooltip(idLable);
	}
}

function removeTxtTooltip(idLable){
	$(idLable).removeClass("txthelp"); 
	$(idLable).addClass("text"); 
	$(idLable).attr("data-toggle","");
	$(idLable).attr("data-original-title", '');
}

//function sezioneDichiarazioni(){
//		if("S" == pacBuyFundPreviewBeanJson.fondosicav){
//			if(codiceSocietaMappa.Schroder_Inv_Mgmt.newCodSoc == pacBuyFundPreviewBeanJson.codiceSocieta){	//101 -> 902	
//				//sezioneSottoscrizione();	//TODO ??
//			}
//			
//			$('#txtDichiarazioni').html("Dichiarazioni e prese d&#39;atto");	//d&#39;atto
//		}
//		else{
//			 $('#txtDichiarazioni').text("Dichiarazioni di conferme");
//		}
//		$('#idTxtDisclaimer').html(pacBuyFundPreviewBeanJson.disclaimer);
//		$('#idSezioneDichiarazioni').show();	//TODO ??
//	
//}
//
//function sezioneSottoscrizione(){
//	$('#custCognomeNome').text(depositoCustomer.surname + ' ' + depositoCustomer.name);
//	$('#custDeposito').text($('#deposito').text());
//	$('#custNascita').text(depositoCustomer.birthday + ' ' + depositoCustomer.birthplace);
//	$('#custProvincia').text(depositoCustomer.birthProvince);
//	$('#custCittadinanza').text(depositoCustomer.residenceState);
//	$('#custResidenza').text(depositoCustomer.residenceAddress);
//	$('#custCAP').text(depositoCustomer.residenceZip);
//	$('#custResidenzaComune').text(depositoCustomer.residenceCity);
//	$('#custResidenzaProvincia').text(depositoCustomer.residenceProvince);
//	$('#custRecapito').text(depositoCustomer.mailAddress);
//	$('#custRecapitoCAP').text(depositoCustomer.mailZip);
//	$('#custRecapitoComune').text(depositoCustomer.mailCity);
//	$('#custRecapitoProvincia').text(depositoCustomer.mailProvince);
//	$('#custEmail').text(depositoCustomer.emailAddress);
//	$('#custNomeComparto').text(buyFundSelectBeanJson.nomeComparto); 
//	$('#custNumQuote').text("");
//	
//	$('#idSezioneSottoscrizione').show();
//}

function verificaChkBox(sezione, chkBox, txt){
	if (! chkBox.is(':checked')) {  
        errors.push({ field: chkBox, text: txt});
        setHasErrors(errors, sezione);
	}
}

function proseguiModificaTogglePre(){
	$('#situazionePac,#modifica,#prosegui').toggle();
	if(Object.keys(pacBuyFundSelectBeanJson.depositJson.depositi).length > 1){
		$('#elencoDepositi,#deposito').toggle();
	}
	if(Object.keys(Finance.fundData.fondi).length > 0 ){
		$('#elencoFondi,#fondo').toggle();
	}
//	$('#spinnerNumVerDivId' +'_'+ index +',#numVersamentiOut'+'_'+ index).toggle();
	
	if($('#esenzioneDivId').is(':visible')){
		if($('#esenzione').attr('disabled')!== undefined ){
			$('#esenzione').removeAttr('disabled');
		}
		else{
			$('#esenzione').attr('disabled','disabled');
		}
	}
//	if($('#contratto' +'_'+ index).attr('disabled')!== undefined ){
//		$('#contratto' +'_'+ index).removeAttr('disabled');
//	}
//	else{
//		$('#contratto' +'_'+ index).attr('disabled','disabled');
//	}
	
	//nascondere altri contratti
	if($("#wrapperOut").is(":visible")){
		for(var idxContartto=0; idxContartto<totContratti; idxContartto++){
			$('#contratto' +'_'+ idxContartto).attr('disabled','disabled');
			$('#spinnerNumVerDivId' +'_'+ idxContartto +',#numVersamentiOut'+'_'+ idxContartto).toggle();
		}
	}
	else {		//if($("#prosegui").is(":visible"))
		for(var idxContartto=0; idxContartto<totContratti; idxContartto++){
			if($('#contratto' +'_'+ idxContartto).attr('disabled')!== undefined){
				$('#contratto' +'_'+ idxContartto).removeAttr('disabled');
				$('#spinnerNumVerDivId' +'_'+ idxContartto +',#numVersamentiOut'+'_'+ idxContartto).toggle();
			}
		}
	}
	
	
//	if(pacBuyFundPreviewRequestJson != undefined && pacBuyFundPreviewRequestJson != null && pacBuyFundPreviewRequestJson != ""){
//		if("true" == pacBuyFundPreviewRequestJson.isFacta || "true" == pacBuyFundPreviewRequestJson.isAdeVer){
//			$('#datiOrdineOutput').toggle();
//		}
//	}
//	$('#datiOrdineOutput').toggle();
	if($('#wrapperOut').is(":visible")){
		$("html, body").animate({ scrollTop: $("#sezioneReipilogo").offset().top }, "fast");
	}
}	

function proseguiModificaToggle(){
	if(pacBuyFundPreviewRequestJson != undefined && pacBuyFundPreviewRequestJson != null && pacBuyFundPreviewRequestJson != ""){
		if("true" == pacBuyFundPreviewRequestJson.isFacta || "true" == pacBuyFundPreviewRequestJson.isAdeVer){
			$('#datiOrdineOutput').toggle();
		}
	}
	
	$('#datiOrdineOutput').toggle();
}

function conferma(){
	

	
	$('#depositoValore').val($('#deposito').val());
	$('#nomeFondo').val($('#fondo').text());
	$('#numeroRiferimentoMifid').val(datiMifid.numeroRiferimento);
	var url = "PacBuyFundConfirm.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vers_agg_pac";
	$('#buyFundPacForm').attr('action', url);
	$("#buyFundPacForm").submit();
	
}


function initializaPacBuyFundConfirm(inputData){
	
	$.ajax({
		url: wrp_script_direct + "/investimenti/PacBuyFundConfirmJson.action" + "?cf=" + Math.random(),
    	dataType: "json",
        data: inputData	,
        success: function (dataOutJSON, status, jqXHR) {	//jqXHR.statusText="OK"; status="success"
        			var msg = "Si &egrave; verificato un errore di connessione";
        			if(200 == jqXHR.status){
        				pacBuyFundConfirmBeanJson = $.parseJSON(dataOutJSON.data.pacBuyFundConfirmBeanJson);
//        				pacBuyFundConfirmRequestJson = $.parseJSON(dataOutJSON.data.pacBuyFundConfirmRequestJson);
        				
        				if(pacBuyFundConfirmBeanJson == undefined || pacBuyFundConfirmBeanJson == null || pacBuyFundConfirmBeanJson == ""){
        					$("#sezioneReipilogo,#sezioneBtnContainer").hide();
        					showError(true,"E",msg);
        				}
        				else if("failure" == pacBuyFundConfirmBeanJson.action){
        					$("#sezioneReipilogo,#sezioneBtnContainer").hide();
        					showError(true,"E",pacBuyFundConfirmBeanJson.errorMessage);
        				}
        				else{
//        					showError(false,null,null);
        					
        					var esitoOK = popolaEsito(pacBuyFundConfirmBeanJson);
        					if(esitoOK){
        						
        						pacBuyFundConfirmBeanJson.fondosicav = inputData.fondosicav;
        						pacBuyFundConfirmBeanJson.pir = inputData.pir;
			        			popolaReipilogoDati(pacBuyFundConfirmBeanJson);
			        			
			        			
			        			var hrefPtf = "javascript:document.location.href=";
			        				hrefPtf += "wrp_script";
			        				hrefPtf += "+'/wbOnetoone/2l/action/investimenti/PortafoglioInvestimenti.action";
			        				hrefPtf += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_strum_in_portaf'";
			        			$("#portafoglio").attr("href",hrefPtf);
			        			
			        			var hrefSituazioneOrdini = "javascript:document.location.href=";
								hrefSituazioneOrdini += "wrp_script" + "+'/wbOnetoone/2l/action/investimenti/";
								hrefSituazioneOrdini += "SituazioneOrdiniFund.action";
								hrefSituazioneOrdini += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_situaz_ordini'";
								$("#situazioneOrdini").attr("href",	hrefSituazioneOrdini);
			        			
			        			var hrefNuovoFondo  = "javascript:document.location.href=";
			        			hrefNuovoFondo += "wrp_script";
			        			hrefNuovoFondo += "+'/wbOnetoone/2l/action/investimenti/PacBuyFundSelect.action";
			        			hrefNuovoFondo += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vers_agg_pac'";
			        			$("#pacBuyFundSelectId").attr("href",hrefNuovoFondo);
        					}	
        				}
        			}
        			else{
        				$("#sezioneReipilogo,#sezioneBtnContainer").hide();
    					showError(true,"E",msg);
        			}
        },
        error: function (jqXHR, status, errorThrown) {
        				var msg = "Si &egrave; verificato un errore di connessione";
        				$("#sezioneReipilogo,#sezioneBtnContainer").hide();
        				showError(true,"E",msg);
        },
        complete: function(jqXHR, status){ 
	        		$("#pacBuyFundConfirm").removeClass("loading");
        }
	});
	
}


function popolaEsito(jsonBean){
	if("SUCCESS" == jsonBean.action && 0 != jsonBean.numRegistrazione){
		
		$('#errorBorder').addClass("positivo");
		
		var titoloEsito = "ORDINE INSERITO";
		
		var testo1 = "Il numero di registrazione dell&#39;ordine &egrave; <strong>" + jsonBean.numRegistrazione + 
				 "</strong><br> A conferma dell&#39;ordine ti stiamo inviando anche <strong>una email.</strong>";
		
		var testo2 = "L&#39;ordine sar&agrave; inviato";
		if("F" == jsonBean.fondosicav){
			testo2 += " alla societ&agrave; di gestione ";
		}
		else if("S" == jsonBean.fondosicav){
			testo2 += " al soggetto incaricato dei pagamenti ";
		}
		
		if(jsonBean.dataOperazione!=null && "" != jsonBean.dataOperazione){
			var dataOp = $.datepicker.formatDate('dd/mm/yy',$.datepicker.parseDate( "yymmdd", jsonBean.dataOperazione));
			testo2 += " il " + dataOp + " alle ore 18.00.";	
		}
		
		$('#titoloEsito').text(titoloEsito);
		$('#messaggio').html(testo1);
		$('#testoEsito2').html(testo2);
		
		return true;
	}
	else{
		$('#errorBorder').addClass("negativo");
		$('#titoloEsito').text("ORDINE NON INSERITO");
		$('#messaggio').html("Numero Registrazione non valorizzato");
	}

	return false;
	
}

function popolaReipilogoDati(jsonBean){
	$('#deposito').text(jsonBean.deposito);
	$('#deposito').val(jsonBean.deposito);
	requestMargine(jsonBean.deposito,"true");
	$('#fondo').text(jsonBean.descrizioneFondo);
	$('#parametroModulo').text(jsonBean.numeroContratto); 
	$('#controValue').text(jsonBean.investimentoTotale + " EUR"); 
	$('#importoRata').text(jsonBean.importoRata + " EUR");
	$('#rateVersate').text(jsonBean.rateSottoscritte);
	$('#rateResidue').text(jsonBean.rateResidue);	
	$('#numVersamenti').text(jsonBean.numVersamenti);
	
	//PIR
	var tipoStrumentoHtml = $("#tipologia").html().substring($("#tipologia").eq(0).text().trim().length);
	var tipoFondo = "Sicav";
	if(jsonBean.fondosicav == "F"){
		tipoFondo = "Fondo";
	}
	$('#tipologia').html(tipoFondo + tipoStrumentoHtml);
	$("#infoPir").hide();
	if(pacBuyFundConfirmBeanJson.pir != undefined && pacBuyFundConfirmBeanJson.pir == 'S'){
		tipoFondo = "Fondo PIR";
		$('#tipologia').html(tipoFondo + tipoStrumentoHtml);
		$("#infoPir").show();
	}
}


function showError(show, tipo, msg){
//	$("#buyFundPacForm").removeClass("loading");
	if(!show){
		$('#erroreForm').hide();
	}
	else{
		var errorBorderClass = '';
		if("E" == tipo){
			errorBorderClass = 'negativo';
		}
		else if("W" == tipo){
			errorBorderClass = 'attenzione';
		}
		$("#errorBorder").addClass(errorBorderClass);
		$("#messaggio").html(msg);
		$('#erroreForm').show();
		window.scrollTo(0, 0);
	}
}

function showError2(show, tipo, msg){
	if(!show){
		$('#erroreForm2').hide();
	}
	else{
		var errorBorderClass = '';
		if("E" == tipo){
			errorBorderClass = 'negativo';
		}
		else if("W" == tipo){
			errorBorderClass = 'attenzione';
		}
		$("#errorBorder2").addClass(errorBorderClass);
		$("#messaggio2").html(msg);
		$('#erroreForm2').show();
	}
}

function showError3(show, tipo, msg){
	if(!show){
		$('#errorBorder3').hide();
	}
	else{
		var errorBorderClass = '';
		if("E" == tipo){
			errorBorderClass = 'negativo';
		}
		else if("W" == tipo){
			errorBorderClass = 'attenzione';
		}
		$("#errorBorder3").addClass(errorBorderClass);
		$("#messaggio3").html(msg);
		$('#errorBorder3').show();
	}
}

function requestMargine(deposito, showEsito){
	var margineVal = 'Dato non disponibile';
	$.ajax({
			url: wrp_script_direct + "/investimenti/MargUtilFinanceJson.action" + "?cf=" + Math.random(),	
        	dataType: "json",
            data: {	deposito: deposito },
            success: function (dataOutJSON, status, jqXHR) {	//jqXHR.statusText="OK"; status="success"
            			if(200 == jqXHR.status){
            				margineVal = dataOutJSON.data.Margine;
            				if("false" == showEsito){
            					showError(false,null,null);
            				}
            				$('#margine').text(margineVal + ' EUR');
            			}
            			else{
            				var msg = "Disponibilita attuale non disponibile";
            				showError(true,"W",msg);
            			}
            },
            error: function (jqXHR, status, errorThrown) {
                        var msg = "Disponibilita attuale non disponibile";
               	        showError(true,"W",msg);
            }
	});
	$('#margine').text(margineVal);	//check to comment
}


var templateRadioGroupContratto=" \
	<div class=\"form-group\"> \
		<div class=\"row\"> \
			<div class=\"col-xs-12\"> \
			    <div class=\"radio inline bigtext\"> \
					<label class=\"textWrapper\"> \
					      <input type=\"radio\" name=\"multiSel\" id=\"contratto_{{num}}\" value=\"{{num}}\" /> \
					      <span class=\"text\"> Contratto n. {{contratto}}</span>		\
					</label> \
				</div> \
			</div> \
		</div> \
	</div> \
	<div class=\"form-group\"> \
		<div class=\"row\"> \
			<div class=\"col-sm-12 col-sm-4 \"> \
				<label class=\"control-label-output\">Numero contratto PAC</label> \
				<span class=\"output\">{{parametroModulo}}</span> \
			</div> \
			<div class=\"col-xs-12 col-sm-4\"> \
				<label class=\"control-label-output\">Investimento totale</label> \
				<span class=\"output\" id=\"controValue_{{num}}\">{{controValue}}</span> \
			</div> \
			<div class=\"col-xs-12 col-sm-4\"> \
				<label class=\"control-label-output\">Importo rata</label>  \
				<span class=\"output\" id=\"importoRata_{{num}}\" name=\"importoRata\">{{importoRata}} EUR </span> \
			</div> \
		</div> \
	</div> \
	<div class=\"form-group\"> \
		<div class=\"row\"> \
			<div class=\"col-xs-12 col-sm-4\"> \
				<label class=\"control-label-output\">Rate versate</label>  \
				<span class=\"output\" id=\"rateVersate_{{num}}\">{{rateVersate}} </span> \
			</div> \
			<div class=\"col-xs-12 col-sm-4\"> \
				<label class=\"control-label-output\">Rate residue</label> \
				<span class=\"output\" id=\"rateResidue_{{num}}\" name=\"rateResidue\">{{rateResidue}}</span> \
			</div> \
			<div class=\"col-xs-12 col-sm-4 required\"> \
				<label 	class=\"control-label-output\">Numero versamenti aggiuntivi</label>  \
				<div id=\"spinnerNumVerDivId_{{num}}\"> \
					<input id=\"numVersamenti_{{num}}\" type=\"number\" name=\"numVersamenti_{{num}}\" class=\"form-control spinner\" > \
				</div> \
				<span class=\"output\" id=\"numVersamentiOut_{{num}}\" style=\"display: none;\">{{numVersamentiOut}}</span>	\
			</div> \
		</div> \
	</div> \
	";


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

function caricaDatiFatcaIntestatario(previewRequestJson){
	
	if(previewRequestJson.listaIntestatariFatca!=undefined ){
		if(previewRequestJson.listaIntestatariFatca.length>1){
			$('#sezioneFatcaMultiInt').show();
		}

		$('#sezioneFatcaDatiInt').empty();
		jQuery('<div/>', {
					    id: 'accordion',
					    'class': "panel-group",
						role: "tablist",
						'aria-multiselectable':"true"
					}).appendTo('#sezioneFatcaDatiInt');
					
		var divAccordionVal = '';
		
		$.each(previewRequestJson.listaIntestatariFatca, function(index, intestatarioFatca){ 
			
			divAccordionVal = divAccordion.replace(/{{index}}/g,index);
			
			divAccordionVal = divAccordionVal.replace(/{{nomeCognome}}/g,intestatarioFatca.nome + ' ' + intestatarioFatca.cognome);
			
			divAccordionVal = divAccordionVal.replace('intestNomeCognome',	'intestNomeCognome_'	+index);
			divAccordionVal = divAccordionVal.replace('intestDataNascita',	'intestDataNascita_'	+index);
			divAccordionVal = divAccordionVal.replace('intestLuogoNascita',	'intestLuogoNascita_'	+index);
			divAccordionVal = divAccordionVal.replace('intestTelefono',		'intestTelefono_'		+index);
			divAccordionVal = divAccordionVal.replace('intestCittadinaza',	'intestCittadinaza_'	+index);
			divAccordionVal = divAccordionVal.replace('intestIndirizzoRes',	'intestIndirizzoRes_'	+index);
			divAccordionVal = divAccordionVal.replace('intestIndirizziCorr','intestIndirizziCorr_'	+index); 
			divAccordionVal = divAccordionVal.replace('modaldis',			'modaldis_'	+index); 
			
			$('#accordion').append(divAccordionVal);
			$('#intestNomeCognome_'+index).text(intestatarioFatca.nome + ' ' + intestatarioFatca.cognome);
			$('#intestDataNascita_'+index).text($.datepicker.formatDate('dd/mm/yy', new Date(intestatarioFatca.dataNascita)));
			$('#intestLuogoNascita_'+index).text(intestatarioFatca.luogoNascita);
			$('#intestTelefono_'+index).text(intestatarioFatca.telefono);
			$('#intestCittadinaza_'+index).text(intestatarioFatca.cittadinanza);
			$('#intestIndirizzoRes_'+index).text( intestatarioFatca.residenza 		+ ', ' + intestatarioFatca.residenzaCap 	 + ', ' + intestatarioFatca.residenzaCitta 		+ ' (' + intestatarioFatca.residenzaProvincia 		+ ')');
			$('#intestIndirizziCorr_'+index).text(intestatarioFatca.corrispondenza 	+ ', ' + intestatarioFatca.corrispondenzaCap + ', ' + intestatarioFatca.corrispondenzaCitta + ' (' + intestatarioFatca.corrispondenzaProvincia 	+ ')');
	
			for(var j=2; j<=4; j++){
				$('<input>').attr({
				    type: 	'hidden',
				    id: 	'TIN'+j+'_int1_'+index,
				    name: 	'TIN'+j+'_int1_'+index
				}).appendTo('#buyFundPacForm');
				
				$('<input>').attr({
				    type: 	'hidden',
				    id: 	'residenzaFiscale'+j+'_int1_'+index,
				    name: 	'residenzaFiscale'+j+'_int1_'+index
				}).appendTo('#buyFundPacForm');
				
			}
			
		});
	}
}

function chiamataFatca(){
//	$("#buyFundPacForm").addClass("loading");
	//controlli se campi sono valorizzati al base di numero interstatari
	//controlloFactaRcs o controlloFacta
	
	var objDatiFatcaJsonArray = {};
	//	datiFatca =tin + "/" + codNaz + "/" +numTin + "/"+ndg +"/" + stato +"/" + indirizzo + "/" + provincia + "/" + comune +"/" + cap;	
	if(pacBuyFundPreviewRequestJson!=undefined && pacBuyFundPreviewRequestJson.listaIntestatariFatca!=undefined){
		for(var j=0; j<pacBuyFundPreviewRequestJson.listaIntestatariFatca.length; j++){
			var datiFatcaJsonArray = [];
			if(undefined == $("#tinLayer") || undefined == $("#tinLayer").val() ){
				for(var i=2,idx=0 ; i<=4 ; i++, idx++) {
					var idTin = "TIN"+i+"_int1_"+j;
					var idRes = "residenzaFiscale"+i+"_int1_"+j;
					if( $('#' + idRes).val() != undefined && $('#' + idRes).val() != '')
					{
						var valoreRes = $('#' + idRes).val();
						var valoreResArray = $('#' + idRes).val().split("|");
						datiFatcaJsonArray[idx] = {  codNazione 	: valoreResArray[0]
										  			,descNazione 	: valoreResArray[1]
										  			,flagCadTin		: valoreResArray[2]
										  			,tin			: $('#' + idTin).val()
										 		};
					}
				}
			}
			else{
				datiFatcaJsonArray[0] = { codiceUIC : $("#nazioneFiscaleLayer").val() 
										  ,tin 	    : $("#tinLayer").val()
							  			};
			}
			
			objDatiFatcaJsonArray[j] = datiFatcaJsonArray;
			
		}
	}
		
	var tipoInvestimento = 'PAC';
	$.ajax({
		url: wrp_script_direct + "/investimenti/VerificaFatca.action" + "?cf=" + Math.random(),
    	dataType: "json",
        data: {'datiFatcaJsonArray' 	: JSON.stringify(objDatiFatcaJsonArray)	//datiFatcaJsonArray
        	  ,'codiceFondo'			: pacBuyFundSelectBeanJson.codiceComparto
        	  ,'codiceSocietaDiGestione': pacBuyFundSelectBeanJson.codiceSocieta
        	  ,'deposito'				: $('#deposito').val()
        	  ,'fondosicav'				: pacBuyFundSelectBeanJson.fondosicav 
        	  ,'tipoInvestimento'		: tipoInvestimento
        	 },
        
        success: function (dataOutJSON, status, jqXHR) {	//jqXHR.statusText="OK"; status="success"
        			var msg = "Si &egrave; verificato un errore di connessione";
        			if(200 == jqXHR.status){
        				pacBuyFundPreviewFatcaRequestJson = $.parseJSON(dataOutJSON.data.buyFundPreviewFatcaRequestJson);
        				if(pacBuyFundPreviewFatcaRequestJson == undefined || pacBuyFundPreviewFatcaRequestJson == null || pacBuyFundPreviewFatcaRequestJson == ""){
        					showError(true,"E",msg);
        				}
        				else if("failure" == pacBuyFundPreviewFatcaRequestJson.action){
        					showError(true,"E",pacBuyFundPreviewFatcaRequestJson.errorMessage);
        				}
        				else{
        					showError(false,null,null);
        					pacBuyFundPreviewRequestJson.FactaKO = pacBuyFundPreviewFatcaRequestJson.FactaKO ;
        					$('#sezioneFatca').toggle();
        					proseguiModificaToggle();
        					prosegui();
        				}
        			}
        			else{
        				showError(true,"E",msg);
        			}
        },
        error: function (jqXHR, status, errorThrown) {
        			var msg = "Si &egrave; verificato un errore di connessione";
           	        showError(true,"E",msg);
        }
	});
}

//adever 3/4
function salvaDatiAdeVer(){
	datiAdeVer = {};
	datiAdeVer.usoConto = $('#usoConto').val();
	datiAdeVer.numint 	= $('#numint').val();
	
	if(datiAdeVer.numint!=undefined && datiAdeVer.numint!=null && datiAdeVer.numint!= ""){
		var elencoInt = {}, datiInt = {}, nome_cognome = '';
		for(var idx=0; idx<datiAdeVer.numint; idx++){
			nome_cognome = $('#nomecognome' + (idx+1)).val().replace(/ /g,"_");
			datiInt = {};
			datiInt.professioneAv 		=  $('#professioneAv_int' 		+ (idx+1)).val();
			datiInt.dettaglioSettoreAv 	=  $('#dettaglioSettoreAv_int' 	+ (idx+1)).val();
			datiInt.statoAttivitaAv 	=  $('#statoAttivitaAv_int' 	+ (idx+1)).val();
			datiInt.provinciaAttivitaAv =  $('#provinciaAttivitaAv_int'	+ (idx+1)).val();
			datiInt.redditoAnnuoAv 		=  $('#redditoAnnuoAv_int' 		+ (idx+1)).val();
			datiInt.origineRedditoAv	=  $('#origineRedditoAv_int' 	+ (idx+1)).val();
			datiInt.originePatrimonioAv	=  $('#originePatrimonioAv_int' + (idx+1)).val();
			datiInt.politicEspostaAv	=  $('input[name=politicEspostaAv_int' + (idx+1) + ']:checked').val();
			//TODO - StringEscapeUtils
			elencoInt[nome_cognome] 	= datiInt;
		}
		datiAdeVer.elencoInt	= elencoInt;
	}
	datiAdeVer.deposito = $('#deposito').val();
}

//Chiamata da adever.js
function impostaValoriSelect() {
	
		salvaDatiAdeVer();
		
		//visualizza errore nel select senza valore e nasconde errore nel select con valore
		if(datiAdeVer.numint!=undefined && datiAdeVer.numint!=null && datiAdeVer.numint!= ""){
			var nome_cognome = '';
			for(var idx=0; idx<datiAdeVer.numint; idx++){
				resetAdeverError('#professioneAv'   	 +'_int'	+ (idx+1));
				resetAdeverError('#dettaglioSettoreAv'   +'_int'	+ (idx+1));
				resetAdeverError('#cittadinanza2Av'   	 +'_int'	+ (idx+1));
				resetAdeverError('#redditoAnnuoAv'   	 +'_int'	+ (idx+1));
				resetAdeverError('#originePatrimonioAv'  +'_int'	+ (idx+1));
				resetAdeverError('#origineRedditoAv'   	 +'_int'	+ (idx+1));
				resetAdeverError('input[name=politicEspostaAv'   	 +'_int'	+ (idx+1) + ']');
				resetAdeverError('#statoAttivitaAv'   	 +'_int'	+ (idx+1));
				resetAdeverError('#provinciaAttivitaAv'  +'_int'	+ (idx+1));
				
				//default stato=Italia
				nome_cognome = $('#nomecognome' + (idx+1)).val().replace(/ /g,"_");
				impostaValoreSelect('statoAttivitaAv'    +'_int' 	+ (idx+1), '86|ITALIA');
				AdeVer.populateSelectWithValue(methodAdeVer, 'COUNTRY', 'statoAttivitaAv'  +'_int'+(idx+1), 'provinciaAttivitaAv'  +'_int'+(idx+1), '86|ITALIA', datiAdeVer.elencoInt[nome_cognome].provinciaAttivitaAv);
			
			}
			resetAdeverError('#usoConto');
		}
}


function chiamataAdeVer() {
	
	salvaDatiAdeVer();
	
	$.ajax({
		url : wrp_script_direct + "/investimenti/VerificaAdeVer.action" + "?cf=" + Math.random(),
		dataType : "json",
		data : { 'datiAdeVer' : JSON.stringify(datiAdeVer),
				'deposito' 	 : $('#deposito').val(),
				'fondosicav' : $('#fondosicav').val()},
		success : function(dataOutJSON, status, jqXHR) { 
			var msg = "Si &egrave; verificato un errore di connessione";
			if (200 == jqXHR.status && dataOutJSON.action!= undefined) {

				if ("failure" == dataOutJSON.action) {
					if(dataOutJSON.msg !=undefined && stringa_N == dataOutJSON.msg){
						showError(true, "E", dataOutJSON.errorCode + ":" + dataOutJSON.errorMsg);
					}
					else if(dataOutJSON.errorMessage !=undefined && "" != dataOutJSON.errorMessage){
						showError(true, "E", dataOutJSON.errorMessage);
					}
					else{
						showError(true, "E", msg);
					}
				} 
				else {
					if("SUCCESS" == dataOutJSON.action && dataOutJSON.msg !=undefined && "Y" == dataOutJSON.msg){ 
						showError(false, null, null);
						$('#sezioneAdeVer').toggle();
						proseguiModificaToggle();
						prosegui();
					}
					else{
						showError(true, "E", msg);
					}
				}
			} else {
				showError(true, "E", msg);
			}
		},
		error : function(jqXHR, status, errorThrown) {
			var msg = "Si &egrave; verificato un errore di connessione";
			showError(true, "E", msg);
		}
//        ,complete: function (jqXHR, status){ 
//			$('#buyFundPacForm').removeClass("loading");
//        }
	});
}


function resetAdeverError(idSelect){
	if(idSelect.indexOf('#')>-1){ 		//select
		$(idSelect).change(function() {
			if($(idSelect).val()!="-" || true == $(idSelect).is(':disabled')){
	//			resetHasErrors($(idSelect).parent().parent());
				var wrapper = $(idSelect).parent();
			    wrapper.removeClass("has-error");
			    wrapper.find(".help-block.with-errors").remove();
			    
			    //Cambia professione, canncella errore evidenziato per tutti (serve se Pensionato/Non occupato da cancellare errori sul settore, prov e origine reddito)
			    if(idSelect.indexOf("#professioneAv") == 0){
					var idPannelloInt =  "#pannelloAdvSogg" + idSelect.substring("#professioneAv".length) ;
					$(idPannelloInt + " .has-error").removeClass("has-error");
					$(idPannelloInt + " .help-block.with-errors").remove();
				}
			}
			else{
				var errors = [];
			    errors.push({
			        field : $(idSelect + '_label'),
			        text : getMsgErroreVuoto('')
			    });
				setHasErrors(errors, $(idSelect).parent());
			}
		});
	}
	else{	//radio
		$(idSelect).click(function() {
			if($(idSelect)[0].checked || $(idSelect)[1].checked){
				var wrapper = $(idSelect).parent().parent().parent().parent().parent();
			    wrapper.removeClass("has-error");
			    wrapper.find(".help-block.with-errors").remove();
			}
			else{
				var errors = [];
			    errors.push({
			        field : $(idSelect + '_label'),
			        text : getMsgErroreVuoto('')
			    });
				setHasErrors(errors, $(idSelect).parent().parent().parent().parent().parent());
			}
		});
	}
}
