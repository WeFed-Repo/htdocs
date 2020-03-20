var datiMifidIn = {}; 
var datiAdeVer = {}, methodAdeVer = '', stringa_N = 'N', stringa_S = 'S', stringa_F = 'F', stringa_Fondo = 'Fondo', stringa_Sicav = 'Sicav', stringa_EUR = 'EUR', stringa_failure = 'failure';
var isAdever = "true"; // inserire il codice di richiesta ADEVER
var docOn = 0;


var newRepoAbilitati=false;
var newRepoAbilitatiSott=false;

var swDepositiUrl = wrp_script_direct + "/investimenti/DepositiJson.action" + "?cf=" + Math.random(),
	swFondiUrl = wrp_script_direct + "/investimenti/IsalFundJson.action" + "?cf=" + Math.random(), 
	swFondiSwitch = wrp_script_direct + "/investimenti/FesTabellaSwitchJson.action" + "?cf=" + Math.random(),
	swFondiPreview = wrp_script_direct + "/investimenti/SwitchFundPreviewJson.action";

function apriNewDocumenti(tipoDocRequest) {
	
	$("form[name='formPdf'] input[name='tipoDocumento']").val(tipoDocRequest);
	$("form[name='formPdf']").attr("action",wrp_script + "/investimenti/ApriDocumenti.action?isPDF=true");
	$("form[name='formPdf']").submit();
	
}


function formatDecimal(number,dec){
	if (dec===undefined) {
		dec = 2;
	}
	
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

var linkConfermaAdeVer = function() {
	unbindEvent("#confermaAdeVer","click");
	
	
	var errors = erroriAdever();
	
	if (errors.length) {
		setHasErrors(errors, "#sezioneAdeVer");
		$(errors[0].field).trigger('focus');
		bindEvent("#confermaAdeVer","click",linkConfermaAdeVer);
	} else {
		chiamataAdeVer();
	}

	return (!errors.length);
}

var linkConfermaFatca = function() {
	
	unbindEvent("#confermaFatca","click");
	
	var errors 			= [], 
		chkBoxDocFatca 	= $("#checkDocFatca"), 
		chkBoxDatiFatca = $("#checkDatiFatca");
	
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
		bindEvent("#confermaFatca","click",linkConfermaFatca);
	} else {
		chiamataFatca();
	}
	
	return (!errors.length);
}


var swRevFundToSwitch = function(data) {
	// Sequenza di rielaborazioni
	if(fundData.switchFund.codicesocieta != '1')
	{
		// Decidi quale tooltip mostrare
		$("#speseinput").attr("data-tooltip", "#tooltipSPESEIN1");
		$("#speseinput").hide();
		$("#speseindesc").html("GRATIS");
	}
	if (fundData.codicesocietagestione == 777)
		data.scontopercom = 0;
	$("#form01 input[name=gestioneFondoSwitch]").val(data.gestione);
	$("#form01 input[name=numeroQuote]").val(fundData.dettagli[fundData.selectedDetail].quote);
	$("#form01 input[name=quoteTotali]").val(fundData.dettagli[fundData.selectedDetail].quote); 
	$("#form01 input[name=codiceSocietaDiGestione ]").val(fundData.codicesocietagestione);
	$("#form01 input[name=codiceFondo]").val(fundData.codicefondo);
	$("#form01 input[name=numeroContratto]").val(fundData.dettagli[fundData.selectedDetail].contratto);
	$("#form01 input[name=importoRata]").val(fundData.dettagli[fundData.selectedDetail].importorata); 
	$("#form01 input[name=rateResidue]").val(fundData.dettagli[fundData.selectedDetail].rateresidue); 
	$("#form01 input[name=descrizioneFondo]").val(fundData.nomefondo);
	$("#form01 input[name=controvalore]").val(fundData.dettagli[fundData.selectedDetail].controvalore);
	$("#form01 input[name=controvaloreValuta]").val(fundData.dettagli[fundData.selectedDetail].controvalore);
	$("#form01 input[name=NAV]").val(fundData.nav);
	$("#form01 input[name=dataNAV]").val(fundData.datanav);
	$("#form01 input[name=tipoInvestimento]").val(fundData.dettagli[fundData.selectedDetail].tipo);
	$("#form01 input[name=valutaFondo]").val(fundData.tipodivisa);	
	$("#form01 input[name=valoreQuotaFondoSwitch]").val(data.nav);  
	$("#form01 input[name=dataCambioValuta]").val(fundData.datacambio);     
	$("#form01 input[name=dataValoreQuotaFondoSwitch]").val(data.dataPrezzoQuota);
	$("#form01 input[name=valutaFondoSwitch]").val(data.val);   
	
	var pos = 0;
	if(data.pir!=undefined && data.pir == "S"){
		pos = 33; 
	}
	$("#form01 input[name=descrizioneFondoSwitch]").val(data.nome.substring(pos));
	$("#form01 input[name=categoriaFondoSwitch]").val(data.category);
	$("#form01 input[name=ingressoFondoSwitch]").val($("#speseindesc").html());
	$("#form01 input[name=uscitaFondoSwitch]").val(data.uscita);   
	$("#form01 input[name=dirittiFondoSwitch]").val(data.swicth);
	$("#form01 input[name=isotminFondoSwitch]").val(data.isotmin);  
	$("#form01 input[name=isotsucFondoSwitch]").val(data.isotsuc);
	$("#form01 input[name=descrSocietaGestione]").val(data.descSocieta);  
	$("#form01 input[name=percScontoCom]").val(data.scontopercom);
	$("#form01 input[name=reinvestimento]").val(data.reinvestimento);
	$("#form01 input[name=obbligoCedola]").val(data.obbligoCedola);
	$("#form01 input[name=Fondosicav]").val(data.fondosicav);	
	$("#form01 input[name=cfam ]").val(fundData.codfamfondo);   
	$("#form01 input[name=codiceAzione ]").val(fundData.codazionefondo);
	$("#form01 input[name=isin ]").val(fundData.isin);
	$("#form01 input[name=cambio ]").val(fundData.cambio);
	$("#form01 input[name=codiceFondoSwitch ]").val(data.codicecomparto);
	$("#form01 input[name=codiceInternoSwitch ]").val(data.codiceInterno);
	$("#form01 input[name=speseFisse ]").val(data.swicth);
	
	
	
	if(fundData.isnotaspeseingresso!=null && fundData.isnotaspeseingresso=="true") {
		viewNoteCommis();
	}
	
}

function resetViewNoteCommis() {

	$("#tooltipSPESEIN1").html("");

	$("#speseinput").attr("data-tooltip", "#tooltipSPESEIN2");
	$("#speseindesc").html("Vedi Prospetto"); 
	
//  	$("#speseinput").hide();
	
	$("#tooltipNoteComm").hide();
	$("#tooltipNoteCommMsg").empty();
	
}


function viewNoteCommis() {
	$("#speseinput").attr("data-tooltip", "#tooltipSPESEIN1");
	$($("#speseinput").attr("data-tooltip") ).html(fundData.notaspeseingresso);
	
}


function requestTmp() {
	$('tempi').innerHTML = "";
	var societa = $("input[name=codiceSocietaDiGestione]").val();
	var numero_casuale=Math.random();
		
	$('form01').action = wrp_script+"/FMP/tempistiche.jsp?cf="+numero_casuale+"&idSicav="+societa+"&tipoOp=Switch";
	
	$('form01').request({			
			onFailure: function() { errorPage();},
			onSuccess: function(t) {$('tempi').innerHTML = t.responseText;obscurateAll(1);openAlert('layeralert3');}
			});
}



function startSwitchSelect() {
	
	$("#switchProcediButton a").click(function() {

		if(swForm[0]["controlloFatca"].value=="true") {
			if(controlloFacta()) {
				$("#erroreFormAnteprima").hide();
				datiFatca = getDatiFacta();
//				alert(getDatiFacta());
				//proseguiFatca="OK";
			} else {
				$("#erroreFormAnteprima").show();
				//proseguiFatca="KO";
			}
		} else {
			$("#erroreFormAnteprima").hide();
			//proseguiFatca="OK";
		}	
		prosegui();
			
	});
		
	$("#fondotoswitch").hide();
	$("#tooltipNoteComm").hide();
}



function chiusurapiano(value) {
	$("#form01 input[name=chiusuraPiano ]").val(value);
}

function getChiusuraPiano() {
	var val = "";
	if ($("#form01 input[name=ChiusuraPiano]:checked").val()!=undefined)
		val = $("#form01 input[name=ChiusuraPiano]:checked").val().toUpperCase();
	if (val == "SI")
		return "S";
	if (val == "NO")
		return "N";
	return "";
}

function getDatiFacta() {
	var numInt  = swForm[0]["numIntestatari"].value;
	var datiFatca ="";
	
	if(numInt>1) {
		for(var i=0; i<numInt; i++) {
			var ndg = $('NDG' + i).value;
			var tin =	$('maskedField' + i).value;				
			var codNaz = $('#selectResidenzaFiscale' + i).find('option:selected').val();
			if(datiFatca.length>0){
				datiFatca = datiFatca + "|" + ndg + "/" + codNaz + "/noValue";
			} else {
				datiFatca = ndg + "/" + codNaz + "/noValue";
			}
		}
	} else {
		var ndg = $('NDG1').value;
		var tin =	$('maskedField1').value;
		var codNaz = $('#selectResidenzaFiscale1').find('option:selected').val();
		datiFatca = ndg + "/" + codNaz + "/noValue";		
	}
	return datiFatca;
}

function prospetto(value) {
	docOn |= value;
	var docType = {1:"kiid",2:"sot"};
	
	apriNewDocumenti(docType[value]);
	
	//	document.switchFormFund.checkProspetto.disabled=false;
	if(docOn==3 ){
		$("#form01 input[name=checkProspetto]").prop("disabled",false);
	}
}


function resetErrorMsg() {
	$("#erroreForm").hide();
	$("#erroreFormAnteprima").hide();
}

function controlloImporto(){
	
	var impCompleto = fundData.valImportoxQuote;
	var impMinimo = new Number($("#form01 input[name=isotsucFondoSwitch]").val());
	
	if(impCompleto < impMinimo){
		$("#erroreForm").show();
		$("#messaggioForm").html("L'importo deve essere pari o maggiore dell'importo minimo successivo");
		return "KO";
	}
	return "OK";
}


function controlloQuoteAnte() {		
	
	var calContrQ = fundData.valImportoxQuote;
	var impMinimo = new Number($("#form01 input[name=isotsucFondoSwitch]").val());
	
	if(calContrQ<impMinimo){
		$("#erroreForm").show();
		$("#messaggioForm").html("Il controvalore delle quote inserite deve essere pari o maggiore dell&#39;importo minimo successivo");
		return "KO";
	}
	return "OK";
}

function controlloQuoteTotali() {			
	var impMinimo = new Number($("#form01 input[name=isotsucFondoSwitch]").val());
	var conValue = new Number($("#form01 input[name=controvalore]").val().replace(".","").replace(',','.'));
	if((impMinimo - conValue)>0) {
		$("#erroreForm").show();
//		$("#messaggioForm").html("il controvalore deve essere pari o maggiore dell'importo minimo successivo");
		$("#messaggioForm").html("Il valore dell&#39;importo deve essere uguale o  maggiore dell&#39;importo minimo sottoscrizioni successive");
		return "KO";
	}
	return "OK";
}

function controlloDepositoPerPIR() {			
	
	if(!listaDepPIR[$("#switchDeposito").val()]) {
		$("#erroreForm").show();
		$("#messaggioForm").html(erroreDepPIR);
		return "KO";
	}
	return "OK";
}



function prosegui(){
	$("#erroreForm").hide();
	
	unbindEvent("#switchChangeFund","click");   
	

	var importo = swImporto.val();
	var decImporto = swImportoDec.val();
	var numero_casuale=Math.random();

	docOn = 0;
	
	if(""==importo)
		importo=0;
	if(""==decImporto)
		decImporto=0;
	
	var quot = swQuote.val();
	var decquot = swQuoteDec.val();
	
	if(""==quot)
		quot=0;
	if(""==decquot)
		decquot=0;
	
	if( fundData.tipodivisa!="EUR") {
		$("#form01 input[name=controvalore]").val(fundData.dettagli[fundData.selectedDetail].controvaloredivisa);
	    $("#form01 input[name=valoreImportoAlCambio]").val(fundData.dettagli[fundData.selectedDetail].controvalorevaluta);
	    
	    
	    //console.log("fundData.tipoDivisa<" + fundData.tipoDivisa + ">");
	}
	
	if($("#switchQuotes").val()==1 && controlloQuoteTotali()!='OK' ) {
		return;
	}
	
	if($("#switchQuotes").val()==2 && controlloImporto()!='OK' ) {
		return;
	}
	
	else if($("#switchQuotes").val()==3 && controlloQuoteAnte()!='OK' ) {
		return;
	}
	
	
	if(fundData.switchFund.pir=='S' && controlloDepositoPerPIR()!='OK') {
		return;
	}

	$("#switchProcediButton").hide();
	$("#switchTempisticheButton").show();
	
	//setLoadingOn(swForm[0]);
//	$('#form01').addClass("loading");    
	if(!$('#wrapperLoading').hasClass("loading")) {
	 $('#wrapperLoading').addClass("loading");
	}
	
	//MIFID - 1
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
		 controValore = parseFloat(fundData.valImportoxQuote);
	 }
	
	$.ajax({
		url: swFondiPreview,
		data: {
			
			cf:numero_casuale,
			deposito: $("#switchDeposito").val(),
			codiceFondo:fundData.codicefondo,
			quoteTotali:fundData.dettagli[fundData.selectedDetail].quote,				
			tipoVendita:$("#form01 select[name=tipoVendita]").find("option:selected").val(),
			importo:importo,
			decImporto:decImporto,
			quote:quot,
			decQuote:decquot,
			codiceSocietaDiGestione:fundData.codicesocietagestione,
			numeroQuote:fundData.dettagli[fundData.selectedDetail].quote,
			tipoInvestimento:fundData.dettagli[fundData.selectedDetail].tipo,
			numeroContratto:fundData.dettagli[fundData.selectedDetail].contratto,
			codiceFondoSwitch:fundData.switchFund.codicecomparto,
			fondoSicav:fundData.strumento,
			valutaFondo:fundData.tipodivisa,
			valutaFondoSwitch:fundData.switchFund.val,				
			valoreQuotePerImporto:swImportoQuote.val(),
			chiusuraPiano:getChiusuraPiano(),
			percScontoCom:fundData.switchFund.scontopercom,
			cfam:fundData.switchFund.codfamfondo,
			reinvestimento:fundData.switchFund.reinvestimento,
			obbligoCedola:fundData.switchFund.obbligoCedola,
			codiceInternoSwitch:fundData.switchFund.codiceInterno,
//			datiFatca:datiFatca,
//			controlloFatca:swForm[0]["controlloFatca"].value,
			datiFatca:'',
			controlloFatca:"false",
			valoreQuotePerImporto : fundData.valQuotexImporto,
			valoreImportoPerquote : fundData.valImportoxQuote,
			valoreImportoAlCambio : $("#form01 input[name=valoreImportoAlCambio]").val(),
			codiceIsin: $("#form01 input[name=isin ]").val()
			,controValoreOrigine	: controValore					//MIFID - 2
			,pirRimborsoTotale		: $("input[name=pirRimborsoTotale]").val()
		},
		dataType: "json",
		success: function(data){
			
			$("#form01 input[name=importo ]").val(importo);
			$("#form01 input[name=decImporto ]").val(decImporto);
			$("#form01 input[name=quote ]").val(quot);
			$("#form01 input[name=decQuote ]").val(decquot);
			$("#form01 input[name=tipoVendita ]").val($("#form01 select[name=tipoVendita]").find("option:selected").val());
			$("#form01 input[name=descrModRimborso ]").val($("#form01 select[name=tipoVendita]").find("option:selected").text());
			$("#form01 input[name=valoreQuotePerImporto ]").val(fundData.valQuotexImporto);
			$("#form01 input[name=valoreImportoPerQuote ]").val(fundData.valImportoxQuote);

			if (data.esito == "KO") {
				$("#messaggio").html(data.messaggio);
				$("#errorBox").show();
				$("#form01").hide();
				$("#warning").hide();
			} else if (data.esito == "KO-FS") {
				$("#errorBox").hide();
				$("#warning").hide();
				$("#messaggioForm").html(data.messaggio);
				$("#erroreForm").show();
			} else {
				generatePreview(data.previewData, data.attributeData);
				$("#switchConferma").show();
			}
			//unsetLoadingOn(swForm[0]);
			$('#wrapperLoading').removeClass("loading");   
			
			if(typeof swForm[0]["fatca"] != "undefined") {
				$("#form01 input[name=controlloFatca]").val( $("#form01 input[name=fatca]").val());
			}
			
			//if($("#form01 input[name=reinvestimento]").val()=="S")
			//	$('#reinvestimentoOut').show();
			
		},
		error: function(){
			//unsetLoadingOn(swForm[0]);
			$('#wrapperLoading').removeClass("loading");
			//visualizzare blocco errore
			alert("Si sono verificati errori.\nRiprovare in seguito.");

		},
		complete : function() {bindEvent("#switchChangeFund","click",hideTableTitle);}
	});
}


function wbScrollTo(obj) {
	var x = $(obj).position();
	
	$('html, body').animate(
		{scrollTop: x.top}
		,500
		,"linear"
		,function(){window.scrollTo(x.left,x.top);}
	);
	
}

function docFatca(banca){
	
	var id = document.buyFundForm.idDocFacta.value;
	var prodotto = document.buyFundForm.idTypeFacta.value;
			if(banca==1){
			open("/wscmn/doc/InformativaFatcaBPM.pdf");
			document.buyFundForm.checkDocFatca.disabled=false;
			}else if(banca==19){
			var link = wrp_script+ "/common/apriDocumento.do?id=" + id + "&prodotto=" + prodotto + "&isPDF=true"; 
			open(link);
			document.buyFundForm.checkDocFatca.disabled=false;
			}
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




function caricaDatiFatcaIntestatario(previewRequestJson){
	
	if(previewRequestJson.listaIntestatariFatca!=undefined && previewRequestJson.listaIntestatariFatca.length>1){
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
		$('#intestDataNascita_'+index).text(intestatarioFatca.dataNascita);
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
			}).appendTo('#form01');
			
			$('<input>').attr({
			    type: 	'hidden',
			    id: 	'residenzaFiscale'+j+'_int1_'+index,
			    name: 	'residenzaFiscale'+j+'_int1_'+index
			}).appendTo('#form01');
			
		}
		
	});
}


function controlloFacta(){	
	
	var mesCheckDocFatca = $('messaggioCheckDocFatca');
	var mesResidenzaFatca = $('messaggioResidenzaFatca');
	var mesTinFatca = $('messaggioTinFatca');
	var mesCheckDatiFatca = $('messaggioCheckDatiFatca');
	
	mesCheckDocFatca.style.display = 'none';
	mesResidenzaFatca.style.display = 'none';
	mesTinFatca.style.display = 'none';
	mesCheckDatiFatca.style.display = 'none';
	
	var errorForm = $('erroreFormAnteprima');
	
	var numInt  = $("input[name=numIntestatari]").val();
	if(!$("input[name=checkDocFatca]").is(':checked')){
		errorForm.style.display = '';
		mesCheckDocFatca.style.display = '';
		mesCheckDocFatca.innerHTML = "Prendi visione dell'informativa FATCA aprendo il relativo pdf.";
		return false;
		}
	
	if(numInt>1){			

			for(var i=0; i<numInt; i++){
				if($('#selectResidenzaFiscale' + i).find('option:selected').text() == '-- seleziona --'){
					errorForm.style.display = '';
					mesResidenzaFatca.style.display = '';
					mesResidenzaFatca.innerHTML = "Seleziona il paese di residenza fiscale";
					wbScrollTo('#erroreFormAnteprima');
					////errorForm.scrollTo();
					return false;
				}
			}
			
			for(var i=0; i<numInt; i++){
				var regexTin = '^[A-Z0-9]{2}[ \-][A-Z0-9]{7}';
				if($('#selectResidenzaFiscale' + i).find('option:selected').text().indexOf('STATI UNITI') >= 0){
					if($('maskedField' + i).value==''){
						errorForm.style.display = '';
						mesTinFatca.style.display = '';
						mesTinFatca.innerHTML = "Inserisci il Tax Identification Number (TIN).";
						wbScrollTo('#erroreFormAnteprima');
						////errorForm.scrollTo();
						return false;
					}else if(!$('maskedField' + i).value.match(regexTin)){
						errorForm.style.display = '';
						mesTinFatca.style.display = '';
						mesTinFatca.innerHTML = "Il Tax Identification Number (TIN) inserito non &egrave; corretto. Verifica e riprova.";
						wbScrollTo('#erroreFormAnteprima');
						////errorForm.scrollTo();
						return false;
					}
				}
			}
	} else {
		
		if($('#selectResidenzaFiscale1').find('option:selected').text() == '-- seleziona --'){
					
					errorForm.style.display = '';
					mesResidenzaFatca.style.display = '';
					mesResidenzaFatca.innerHTML = "Seleziona il paese di residenza fiscale";
					wbScrollTo('#erroreFormAnteprima');
					////errorForm.scrollTo();
					return false;
				}
		
		var regexTin = '^[A-Z0-9]{2}[ \-][A-Z0-9]{7}';
				if($('#selectResidenzaFiscale1').find('option:selected').text().indexOf('STATI UNITI') >= 0){
					if($('maskedField1').value==''){
						errorForm.style.display = '';
						mesTinFatca.style.display = '';
						mesTinFatca.innerHTML = "Inserisci il Tax Identification Number (TIN).";
						wbScrollTo('#erroreFormAnteprima');
						////errorForm.scrollTo();
						return false;
					}else if(!$('maskedField1').value.match(regexTin)){
						errorForm.style.display = '';
						mesTinFatca.style.display = '';
						mesTinFatca.innerHTML = "Il Tax Identification Number (TIN) inserito non &egrave; corretto. Verifica e riprova.";
						wbScrollTo('#erroreFormAnteprima');
						////errorForm.scrollTo();
						return false;
					}
				}
	}
	if(!$("input[name=checkDocFatca]").is(':checked')){
				errorForm.style.display = '';
				mesCheckDatiFatca.style.display = '';
				mesCheckDatiFatca.innerHTML = "Conferma le dichiarazioni rilasciate.";
				
				return false;
	}	
	return true;
}

//TODO - da verificare	adever 3/4
function indietro(){
	if ($('#sezioneAdeVer').is(':visible')) {
		salvaDatiAdeVer();
		$('#sezioneAdeVer').toggle();
	}
}

function conferma() {
	
	var prosegui = true;
	var messAnteprima = $('messaggioAnteprima');
	var errorForm = $('erroreFormAnteprima');
	$("#form01").find($(".with-errors")).hide();
	$("#form01").find($(".has-error")).removeClass("has-error");
	
	var errors = [];
	
	if($("input[name=Fondosicav]").val()=="F" && $("select[name=sorifinsel] option").size()>1) {
	
		//setScopRapSorifin(document.getElementById("sorifinsel"));
		//setScopRapSorifin(document.getElementById("scorapsel"));
		$("input[name=sorifin]").val($("select[name=sorifinsel]").val());
		$("input[name=scorap]").val($("select[name=scorapsel]").val());
		
		var scorafin = ($("input[name=sorifin]").val().trim()=="" || $("input[name=scorap]").val().trim()=="");
		
		if(scorafin) {
			prosegui = Boolean(prosegui && false);
			$("input[name=sorifin]").parent().parent().parent()
				.addClass("has-error")
				.find(".with-errors").show();
			
//			errors.push({
//				field : $("input[name=sorifin]").parent().parent().parent(),
//				text : "L'operazione supera i 5000 Euro per proseguire occorre rispondere alle domande relative alla normativa antiriciclaggio"
//			});
		 }
	 
	}	
	
	
	
	//TODO 1 - errors.push
	var flagReinvestimento = $("input[name=flagReinvestimento]");
	if($("input[name=reinvestimento]").val()!="S"){
		prosegui = Boolean(prosegui && true);
	} 
	else if ($("input[name=flagReinv]").val()=="" && 
			($("input[name=obbligoCedola]").val()=="S" || $("input[name=obbligoCedola]").val()=="N"))
	{
		if(!flagReinvestimento.is(':checked')){
			prosegui = Boolean(prosegui && false);
//			flagReinvestimento.parent().parent().parent().addClass("has-error").find(".with-errors").show();
			errors.push({
				field : $("#noObbligoCedola"),	//flagReinvestimento.parent().parent().parent()
				text : "Per proseguire occorre dichiarare la destinazione dei proventi"
			});
			setHasErrors(errors, $("#noObbligoCedola"));
		}		
	} 
//	else if ($("input[name=flagReinv]").val()=="" && $("input[name=obbligoCedola]").val()=="N"){ 
//		if(!flagReinvestimento.is(':checked')){
//			prosegui = Boolean(prosegui && false);
////			flagReinvestimento.parent().parent().parent().addClass("has-error").find(".with-errors").show();
//			errors.push({
//				field : flagReinvestimento.parent().parent().parent(),
//				text : "Per proseguire occorre dichiarare la destinazione dei proventi"
//			});
//			setHasErrors(errors, flagReinvestimento.parent().parent().parent());
//		}
//	}

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
	
	if($("input[name=messaggiAvvertenze]").val()=="OK" ) {
		var checkAvvertenze = $("input[name=checkAvvertenze]");
		if(!checkAvvertenze.is(':checked')) {
			prosegui = Boolean(prosegui && false);
//			checkAvvertenze.parent().parent().parent().addClass("has-error").find(".with-errors").show();
			errors.push({
				field : checkAvvertenze.parent().parent().parent(),
				text : "Per proseguire occorre dichiarare di avere preso visione delle avvertenze"
			});
			setHasErrors(errors, checkAvvertenze.parent().parent().parent());
		}
	}
	
	if($("input[name=messaggiInducement]").val()=="OK" ) {
		
		var checkIncentiviDis = $("input[name=checkIncentiviDis]");
		if(!checkIncentiviDis.is(':checked')) {
			prosegui = Boolean(prosegui && false);
			errors.push({
				field : checkIncentiviDis.parent().parent().parent(),
				text : "Per proseguire occorre dichiarare di avere preso visione delle informazioni relative ai Costi, Oneri e Incentivi"
			});
			setHasErrors(errors, checkIncentiviDis.parent().parent().parent());
			if($("#sezioneCostiInducementDisInv").find(".panel-collapse.collapse.in").length==0) {
				$("#sezioneCostiInducementDisInv i").first(".icon .icon-arrow_down").trigger("click");
			}
		}
		
		var checkIncentivi = $("input[name=checkIncentivi]");
		if(!checkIncentivi.is(':checked')) {
			prosegui = Boolean(prosegui && false);
			errors.push({
				field : checkIncentivi.parent().parent().parent(),
				text : "Per proseguire occorre dichiarare di avere preso visione delle informazioni relative ai Costi, Oneri e Incentivi"
			});
			setHasErrors(errors, checkIncentivi.parent().parent().parent());
			if($("#sezioneCostiInducementInv").find(".panel-collapse.collapse.in").length==0) {
				$("#sezioneCostiInducementInv i").first(".icon .icon-arrow_down").trigger("click");
			}
		}
		
	}
	
	/*
	if($("input[name=messaggiInducement]").val()=="OK" ){
		var checkIncentivi = $("input[name=checkIncentivi]");
		if(!checkIncentivi.is(':checked')) {
			prosegui = Boolean(prosegui && false);
			checkIncentivi.parent().parent().parent()
				.addClass("has-error")
				.find(".with-errors").show();
			////errorForm.scrollTo();
		}
	}
	*/
	
	
	var checkLimitazioni = $("input[name=checkLimitazioni]");
	if(!checkLimitazioni.is(':checked')) {
		prosegui = Boolean(prosegui && false);
		errors.push({
			field : checkLimitazioni.parent().parent().parent(),
			text : "Per proseguire occorre dichiarare di avere preso visione dell'informativa OICVM"
		});
		setHasErrors(errors, checkLimitazioni.parent().parent().parent());
		
	}
	
	var checkMandatoSIP = $("input[name=checkMandatoSIP]");
	if(!checkMandatoSIP.is(':checked')) {
		prosegui = Boolean(prosegui && false);
		errors.push({
			field : checkMandatoSIP.parent().parent().parent(),
			text : "Per proseguire occorre dichiarare di avere preso visione dell'informativa OICVM"
		});
		setHasErrors(errors, checkMandatoSIP.parent().parent().parent());
		
	}
	
	var checkPrivacyOICVM = $("input[name=checkPrivacyOICVM]");
	if(!checkPrivacyOICVM.is(':checked')) {
		prosegui = Boolean(prosegui && false);
		errors.push({
			field : checkPrivacyOICVM.parent().parent().parent(),
			text : "Per proseguire occorre dichiarare di avere preso visione dell'informativa OICVM"
		});
		setHasErrors(errors, checkPrivacyOICVM.parent().parent().parent());
		
	}
	
	var checkProspetto = $("input[name=checkProspetto]");
	if(!$("input[name=checkProspetto]").is(":disabled") ) {
		prosegui = Boolean(prosegui && false);
//			checkProspetto.parent().parent().parent()				.addClass("has-error")				.find(".with-errors").show()				.html("Per proseguire occorre avere preso visione del documento relativo al prospetto informativo");
		errors.push({
			field : checkProspetto.parent().parent().parent(),
			text : "Per proseguire occorre avere preso visione del documento relativo al prospetto informativo"
		});
		setHasErrors(errors, checkProspetto.parent().parent().parent());
	}
	
	if(!$("input[name=checkProspetto]").is(':checked')){
		prosegui = Boolean(prosegui && false);
//			checkProspetto.parent().parent().parent()				.addClass("has-error")				.find(".with-errors").show()				.html("Per proseguire occorre dichiarare di avere preso visione dell'intera documentazione informativa");
		errors.push({
			field : checkProspetto.parent().parent().parent(),
			text : "Per proseguire occorre dichiarare di avere preso visione dell'intera documentazione informativa"
		});
		setHasErrors(errors, checkProspetto.parent().parent().parent());
	}

	
	if($("input[name=primaSottoscrizione]").val()=="S"){
		if($(".isPrivacy").is(':visible')){
			var flagPrivacy = $("input[name=flagPrivacy]"); 
			if($("input[name=Fondosicav]").val()=="F"){
				if(!flagPrivacy.is(":checked")){
					prosegui = Boolean(prosegui && false);
					flagPrivacy.parent().parent().parent()
						.addClass("has-error")
						.find(".with-errors").show();
				}
			}
			
			var dichiarazioni = $("input[name=dichiarazioni]");
			if (!dichiarazioni.is(":checked")){		
				prosegui = Boolean(prosegui && false);
				dichiarazioni.parent().parent().parent()
					.addClass("has-error")
					.find(".with-errors").show();
			}
		}
	}else if($("input[name=primaSottoscrizione]").val()=="N"){
		prosegui = Boolean(prosegui && true);
	}
	

	
		if( prosegui ){
			var deposito = $("#switchDeposito").val();
			var Fondosicav = fundData.switchFund.fondosicav;
			var flagReinvestimento ="";
			
			if(document.switchFundForm.reinvestimento.value=="S"){
			  	if(document.switchFundForm.flagReinv.value=="" && document.switchFundForm.obbligoCedola.value=="N"){
					if(document.switchFundForm.flagReinvestimento[0].checked)
						flagReinvestimento = document.switchFundForm.flagReinvestimento[0].value;
					else if(document.switchFundForm.flagReinvestimento[1].checked)
						flagReinvestimento = document.switchFundForm.flagReinvestimento[1].value;
				}else if(document.switchFundForm.flagReinv.value=="" && document.switchFundForm.obbligoCedola.value=="S"){
//					if(document.switchFundForm.flagReinvestimento[1].checked)	//TODO - check [0] or [1]  //1667 mette $("input[name=flagReinvestimento]")[1].checked=true;
						flagReinvestimento = document.switchFundForm.flagReinvestimento.value;	//TODO - check [0] or [1]
				}else
					flagReinvestimento = document.switchFundForm.flagReinv.value;
			}
			
			$("#form01 input[name=deposito]").val($("#switchDeposito").val());	//passato a conferma
			$("#form01 input[name=Fondosicav]").val(Fondosicav);							//passato a conferma
			$("#form01 input[name=flagReinvestimento]").val(flagReinvestimento);
			
			$("#numeroRiferimentoMifid").val(datiMifidOut.numeroRiferimento + "," + datiMifidIn.numeroRiferimento);
			
	   		//var paramsSerialized = swForm.serialize();
	   		$("form[name=switchFundForm]").attr("method", "post");
	//	   	$("form[name=switchFundForm]").attr("action","SwitchFundConfirm.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_switch&deposito=" +deposito +"&Fondosicav="+Fondosicav+"&flagReinvestimento="+flagReinvestimento + "&");
		   	$("form[name=switchFundForm]").attr("action","SwitchFundConfirm.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_switch&");
		   	$("form[name=switchFundForm]").submit();
	}
	else{
		if (errors.length) {
			$(errors[0].field).trigger('focus');
		}
	}
	
//	if( prosegui ){
//		var deposito = swDeposito.val();
//		var Fondosicav = fundData.switchFund.fondosicav;
//		var flagReinvestimento ="";
//		
//		if(document.switchFundForm.reinvestimento.value=="S"){
//		  	if(document.switchFundForm.flagReinv.value=="" && document.switchFundForm.obbligoCedola.value=="N"){
//				if(document.switchFundForm.flagReinvestimento[0].checked)
//					flagReinvestimento = document.switchFundForm.flagReinvestimento[0].value;
//				else if(document.switchFundForm.flagReinvestimento[1].checked)
//					flagReinvestimento = document.switchFundForm.flagReinvestimento[1].value;
//			}else if(document.switchFundForm.flagReinv.value=="" && document.switchFundForm.obbligoCedola.value=="S"){
//				if(document.switchFundForm.flagReinvestimento.checked)
//					flagReinvestimento = document.switchFundForm.flagReinvestimento.value;
//			}else
//				flagReinvestimento = document.switchFundForm.flagReinv.value;
//		}
//
//   		//var paramsSerialized = swForm.serialize();
//   		$("form[name=switchFundForm]").attr("method", "post");
//	   	$("form[name=switchFundForm]").attr("action","SwitchFundConfirm.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_switch&deposito=" +deposito +"&Fondosicav="+Fondosicav+"&flagReinvestimento="+flagReinvestimento + "&");
//	   	$("form[name=switchFundForm]").submit();
//	}	
	
	
}


function loadMaskField(val){
	if($('#selectResidenzaFiscale' + val).find('option:selected').text().indexOf('STATI UNITI') >= 0) {
		$('#maskedFieldId' + val).show();
		$.mask.definitions['_'] ='[^\'\']'; //definisco tutti i caratteri alfanumerici e simboli della tastiera
		$('#maskedField'+val).mask("__-_______", {completed: function(){$('#maskedField'+val).val($('#maskedField'+val).val().toUpperCase())} })
		
		$('#maskedField' + val).focus();
	} else
		$('#maskedFieldId' + val).hide();
}


function setScopRapSorifin(htmlsel) {

	if(htmlsel.getAttribute("id")=="sorifinsel") {
		document.switchFundForm.sorifin.value=htmlsel[htmlsel.selectedIndex].value;
	} else if(htmlsel.getAttribute("id")=="scorapsel") {
		document.switchFundForm.scorap.value=htmlsel[htmlsel.selectedIndex].value;
	}
}
	
//
// Compilazione Preview
//

function chiamataFatca() {

	var objDatiFatcaJsonArray = {};
	//	datiFatca =tin + "/" + codNaz + "/" +numTin + "/"+ndg +"/" + stato +"/" + indirizzo + "/" + provincia + "/" + comune +"/" + cap;	
	if(jsonPreviewAttributes!=undefined && jsonPreviewAttributes.listaIntestatariFatca!=undefined ){
		for(var j=0; j<jsonPreviewAttributes.listaIntestatariFatca.length; j++){
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
			} else
				datiFatcaJsonArray[0] = { codiceUIC : $("#nazioneFiscaleLayer").val() 
										  ,tin 	    : $("#tinLayer").val()
							  			};
			
			objDatiFatcaJsonArray[j] = datiFatcaJsonArray;
			
		}
	}

	var tipoInvestimento = 'PIC';
	if($('#radiobuttonPac').is(':checked')) {
		tipoInvestimento = 'PAC';
	}
	

	$('#wrapperLoading').addClass("loading");
	
	$.ajax({
		url: wrp_script + "/investimenti/VerificaFatca.action" + "?cf=" + Math.random(),
    	dataType: "json",
        data: {'datiFatcaJsonArray' 	: JSON.stringify(objDatiFatcaJsonArray)	//datiFatcaJsonArray
        	  ,'codiceFondo'			: fundData.codicefondo  
        	  ,'codiceSocietaDiGestione': fundData.codicesocietagestione
//        	  ,'deposito'				: $('input[name=switchDeposito]').val()
        	  ,'deposito'				: $("#switchDeposito").val()
        	  ,'fondosicav'				: fundData.strumento 
        	  ,'tipoInvestimento'		: tipoInvestimento
        	 },
        
        success: function (dataOutJSON, status, jqXHR) {	//jqXHR.statusText="OK"; status="success"
        			var msg = "Si &egrave; verificato un errore di connessione";
        			if(200 == jqXHR.status){
        				buyFundPreviewFatcaRequestJson = $.parseJSON(dataOutJSON.data.buyFundPreviewFatcaRequestJson);
        				if(buyFundPreviewFatcaRequestJson == undefined || buyFundPreviewFatcaRequestJson == null || buyFundPreviewFatcaRequestJson == ""){
        					showError(true,"E",buyFundPreviewFatcaRequestJson.errorMessage);
        				} else if("failure" == buyFundPreviewFatcaRequestJson.action){
        					showError(true,"E",buyFundPreviewFatcaRequestJson.errorMessage);
        				} else {
        					showError(false,null,null);
        					jsonPreviewAttributes.FactaKO = jsonPreviewAttributes.FactaKO ;
        					prosegui();
        				}
        			} else
        				showError(true,"E",msg);
        },
        error: function (jqXHR, status, errorThrown) {
        			var msg = "Si &egrave; verificato un errore di connessione";
           	        showError(true,"E",msg);
           	       
        },
        complete : function () {
        	bindEvent("#confermaFatca","click",linkConfermaFatca);
        	$('#wrapperLoading').removeClass("loading");
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
	datiAdeVer.deposito = $('#switchDeposito').val();
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
	$('#sezioneAdeVer').removeClass("loading");
		
}


function chiamataAdeVer() {
	
	$('#wrapperLoading').addClass("loading");
	
	salvaDatiAdeVer();
	
	$.ajax({
		url : wrp_script + "/investimenti/VerificaAdeVer.action" + "?cf=" + Math.random(),
		dataType : "json",
		data : { 'datiAdeVer' : JSON.stringify(datiAdeVer),
				'deposito' 	 : $("#switchDeposito").val(),
				'fondosicav' : fundData.switchFund.fondosicav},
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
				} else {
					if("SUCCESS" == dataOutJSON.action && dataOutJSON.msg !=undefined && "Y" == dataOutJSON.msg){ 
						showError(false, null, null);
						$('#sezioneAdeVer,#modifica,#prosegui,#indietro, #ifadeverko').toggle();
						prosegui();
					} else{
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

		},
		complete : function() {  
				bindEvent("#confermaAdeVer","click",linkConfermaAdeVer); 
				$('#wrapperLoading').removeClass("loading");
				}
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

//nasconde/visualizza sezione di errore/warning/successo
//show = true/false; tipo="E"(error)/"W"(warning)/"S"(success)
function showError(show, tipo, msg){
	if(!show){
		$('#errorBox').hide();
	}
	else{
		var errorBorderClass = ''
//			, errorIconType = ''
			;
		if("E" == tipo){
			errorBorderClass = 'negativo';
//			errorIconType    = 'icon icon-alert_error icon-2x';
		}
		else if("W" == tipo){
			errorBorderClass = 'attenzione';
//			errorIconType    = 'icon icon-alert_caution icon-2x';
		}
//		$("#errorBorder").addClass(errorBorderClass);
//		$("#errorType").attr('class',errorIconType);
		$("#messaggio").html(msg);
		$('#errorBox').show();
		window.scrollTo(0,0);
	}
}


function generatePreview(jsonPreview, jsonAttributes) {
	window.jsonPreviewData = jsonPreview;
	window.jsonPreviewAttributes = jsonAttributes;
	
	$("form[name=formPdf] > input[name=keyDocumento]").val(fundData.switchFund.isin);   // per ricerca documento KIID
	
	if(jsonAttributes.isFatca) {
		caricaDatiFatcaIntestatario(jsonAttributes);
		$("#disclaimerFatca").html(jsonPreview.disclaimerFatca);
		$("#ifadeverko").hide();	//$("#switchConferma").find("section").hide();
		$('#sezioneAdeVer').hide();
		$("#sezioneFatca").show();
		$('#linkDocFatca').click(function() {
			if(! $('#checkDocFatca').is(':checked')){
				 $('#checkDocFatca').removeAttr('disabled');
				 resetErrors('#checkDocFatca');
			}
			open(wrp_script + "/common/apriDocumento.action?id=" + jsonAttributes.idDocFacta + "&prodotto=" + jsonAttributes.idTypeFacta + "&isPDF=true");
  		});
		
		$('#confermaFatca').click(linkConfermaFatca);
		
	} else if ( isAdever == jsonAttributes.isAdeVer) {
		$("#sezioneFatca").hide();
		resetHasErrors("#sezioneAdeVer");
		
		if($('#switchDeposito').val().split("/")[2] !="0"){
			if(! listaDepPIR[$('#switchDeposito').val()]){
				showError(true, "E", (jsonAttributes.errorMessage ? jsonAttributes.errorMessage : "Per poter operare &egrave; necessario compilare l&apos;Adeguata Verifica sul sottodeposito del proprio cointestatario"));
			}
			else{
				showError(false, null, null);
			}
		}
		$('#sezioneAdeVer').show(); $('#sezioneAdeVer').addClass("loading");
		if(undefined != datiAdeVer.numint && datiAdeVer.deposito == $('#switchDeposito').val()){	
			$('#sezioneAdeVer').removeClass("loading");
		}  
		else {
			if(stringa_F == jsonPreview.fondosicav) {
				methodAdeVer = 'FONDI';
			}
			else{
				methodAdeVer = 'SICAV'
			}
			
			AdeVer.loadFields(methodAdeVer, 'all', $("#switchDeposito").val());    
			$("#ifadeverko").hide();
			
			$('#confermaAdeVer').click(linkConfermaAdeVer);
		}
	} else {
		
		if(jsonPreview.fondosicav=="S" && jsonPreview.codiceSocGestione!=144){
			Finance.tempistiche("SW_CL:SW_CMP" ,jsonPreview.codiceSocGestione);
		}
		else{
			Finance.tempistiche("SW",jsonPreview.codiceSocGestione);
		}
		
		var bankName = "";
		if (jsonPreview.numeroBanca == 1) {
			$(".bankName").text("Banca Popolare di Milano");
			$(".bancaWebank").hide();
		} else if (jsonPreview.numeroBanca == 19) {
			$(".bankName").text("WeBank");
			$(".bancaNoWebank").hide();
		} else if (jsonPreview.numeroBanca == 4) {
			$(".bankName").text("Banca di Legnano");
			$(".bancaWebank").hide();
		} else if (jsonPreview.numeroBanca == 15) {
			$(".bankName").text("Cassa di Risparmio di Alessandria");
			$(".bancaWebank").hide();
		} else if (jsonPreview.numeroBanca == 18) {
			$(".bankName").text("Banca Popolare di Mantova");
			$(".bancaWebank").hide();
		}
		
		$('#pirOrigine').val("N");
		$('#pirSwitch').val("N");
		//radio PIR
//		$("#sezionePirRimborsoTotale").hide();
		if( fundData.pir!=undefined && fundData.pir == "S")
		{
//			if(fundData.switchFund.pir==undefined || fundData.switchFund.pir == "N"){
//				$("#sezionePirRimborsoTotale").show();
//			}
			$('#pirOrigine').val("S");
		}
		
		$("#sezionePir").hide();
		if(fundData.switchFund.pir!=undefined && fundData.switchFund.pir == "S"){
			$("#sezionePir").show();
			$("#checkboxPir").prop("checked", false);
			$('#pirSwitch').val("S");
		}
		
		if (jsonPreview.adeguatezza && jsonPreview.adeguatezza.length>0 || 
				jsonPreview.conflitti && jsonPreview.conflitti.length>0 || 
				jsonPreview.messaggi && jsonPreview.messaggi.length>0)
			$("input[name=messaggiAvvertenze]").val("OK");
		else
			$("input[name=messaggiAvvertenze]").val("KO");
			
//		if (jsonPreview.inducement.length>0)
//			$("input[name=messaggiInducement]").val("OK");
//		else
//			$("input[name=messaggiInducement]").val("KO");
		$("input[name=messaggiInducement]").val("OK");
		$("input[name=fatca]").val(jsonAttributes.isFatca);
		$("input[name=idDocFacta]").val(jsonAttributes.idDocFacta);
		$("input[name=idTypeFacta]").val(jsonAttributes.idTypeFacta);
		$("input[name=numIntestatari]").val((jsonAttributes.listaIntestatariFatca) ? jsonAttributes.listaIntestatariFatca.length : 0);
		
		/*
		if(jsonPreview.fondosicav=="F"  && jsonPreview.obbligoAdv && jsonPreview.obbligoAdv=="S") {
			$("#previewAntiriciclaggio").show();
			for (var i=0; i<jsonPreview.sorifin.length; i++)
				$("select[name=sorifinsel]").append($("<option>",{value:jsonPreview.sorifin[i].id, text:jsonPreview.sorifin[i].domanda}));
			for (var j=0; i<jsonPreview.scorap.length; i++)
				$("select[name=scorapsel]").append($("<option>",{value:jsonPreview.scorap[i].id, text:jsonPreview.scorap[i].domanda}));
		} else
			$("#previewAntiriciclaggio").hide();
		*/
		
		if(jsonPreview.fondosicav=="S") {
			$(".isFund").hide();
			$(".isSicav").show();
		} else {
			$(".isSicav").hide();
			$(".isFund").show();
		}
			
		
		$("input[name=flagReinvestimento]").prop('checked', false);
		resetHasErrors($("#noObbligoCedola"));
		$("input[name=flagReinvestimento]").click(function() {
			resetHasErrors($("#noObbligoCedola"));
		});
		
		$("#checkboxPir").prop("checked", false);
		$('#checkboxPir').click(function() {
			resetHasErrors("#sezionePir");
		});
		$("input[name=checkAvvertenze]").prop('checked', false);
		resetHasErrors($("input[name=checkAvvertenze]").parent().parent().parent());
		// reset errori quando checkbox o radio sono selezionati
		$("input[name=checkAvvertenze]").click(function() {
			resetHasErrors($("input[name=checkAvvertenze]").parent().parent().parent());
		});
		
		$("input[name=checkIncentivi]").prop('checked', false);
		resetHasErrors($("input[name=checkIncentivi]").parent().parent().parent());
		$("input[name=checkIncentivi]").click(function() {
			resetHasErrors($("input[name=checkIncentivi]").parent().parent().parent());
		});
		
		
//		$("input[name=checkIncentiviDis]").prop('checked', false);
//		resetHasErrors($("input[name=checkIncentiviDis]").parent().parent().parent());
//		$("input[name=checkIncentiviDis]").click(function() {
//			resetHasErrors($("input[name=checkIncentiviDis]").parent().parent().parent());
//		});
		
		$("input[name=checkProspetto]").prop('checked', false);
		resetHasErrors($("input[name=checkProspetto]").parent().parent().parent());
		$("input[name=checkProspetto]").click(function() {
			resetHasErrors($("input[name=checkProspetto]").parent().parent().parent());
			$("input[name=checkProspetto]").prop('disabled', true);
		});
		
		$("input[name=checkLimitazioni]").prop('checked', false);
		resetHasErrors($("input[name=checkLimitazioni]").parent().parent().parent().parent());
		$("input[name=checkLimitazioni]").click(function() {
			resetHasErrors($("input[name=checkLimitazioni]").parent().parent().parent().parent());
		});
		
		$("input[name=checkMandatoSIP]").prop('checked', false);
		resetHasErrors($("input[name=checkMandatoSIP]").parent().parent().parent().parent());
		$("input[name=checkMandatoSIP]").click(function() {
			resetHasErrors($("input[name=checkMandatoSIP]").parent().parent().parent().parent());
		});
		
		
		$("input[name=checkPrivacyOICVM]").prop('checked', false);
		resetHasErrors($("input[name=checkPrivacyOICVM]").parent().parent().parent().parent());
		$("input[name=checkPrivacyOICVM]").click(function() {
			resetHasErrors($("input[name=checkPrivacyOICVM]").parent().parent().parent().parent());
		});
		
		if ( (jsonPreview.adeguatezza!=undefined && jsonPreview.adeguatezza!=null && jsonPreview.adeguatezza.length>0) || 
			 (jsonPreview.conflitti!=undefined && jsonPreview.conflitti!=null && jsonPreview.conflitti.length>0) || 
			 (jsonPreview.messaggi!=undefined && jsonPreview.messaggi!=null && jsonPreview.messaggi.length>0))
			$("#messaggiAdeguatezza").show();
		else
			$("#messaggiAdeguatezza").hide();
		
		$("#messaggiAdeguatezza ul").empty();
		if(jsonPreview.adeguatezza!=undefined && jsonPreview.adeguatezza!=null && jsonPreview.adeguatezza.length>0)
			for (var i=0; i<jsonPreview.adeguatezza.length; i++)
				$("<li>").html(jsonPreview.adeguatezza[i]).appendTo("#messaggiAdeguatezza ul");	
		if(jsonPreview.conflitti!=undefined && jsonPreview.conflitti!=null && jsonPreview.conflitti.length>0)
			for (var i=0; i<jsonPreview.conflitti.length; i++)
				$("<li>").html(jsonPreview.conflitti[i]).appendTo("#messaggiAdeguatezza ul");
		if(jsonPreview.messaggi!=undefined && jsonPreview.messaggi!=null && jsonPreview.messaggi.length>0)
			for (var i=0; i<jsonPreview.messaggi.length; i++)
				$("<li>").html(jsonPreview.messaggi[i]).appendTo("#messaggiAdeguatezza ul");
		
//		if (jsonPreview.inducement)
//			$("#dichiarazioneIncentivi").show();
//		else
//			$("#dichiarazioneIncentivi").hide();
//		$("#dichiarazioneIncentivi ul").empty();
		//if(jsonPreview.inducement)
		//	for (var i=0; i<jsonPreview.inducement.length; i++)
		//		$("<li>").html(jsonPreview.inducement[i]).appendTo("#dichiarazioneIncentivi ul");
		
		$("#dichiarazioneIncentivi").show();
		//MIFID2	
		 datiMifidIn = jsonPreview.datiMifid;	
		 if(datiMifidIn == undefined){
			 datiMifidIn = {};
//			 datiMifidIn.codiceSocieta = jsonPreview.codiceSocGestione;
		 }
		 
		 var controValore = "";
		 if(fundData.valImportoxQuote == 0){
			 var importoTotale = fundData.dettagli[0].controvalore;
			 if(fundData.tipodivisa != "EUR"){
					importoTotale = fundData.dettagli[0].controvaloredivisa;
				}
			 datiMifidIn.controvaloreOperazione = importoTotale;
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
			 datiMifidIn.controvaloreOperazione = parseFloat(fundData.valImportoxQuote).toLocaleString("it-IT",{minimumFractionDigits:2});
			 controValore = parseFloat(fundData.valImportoxQuote);
		 }
		 datiMifidIn.controvaloreOperazione += " &euro;";
		 
		 datiMifidIn.strumentoFinanziario = fundData.switchFund.nome;
		 
		 
		 if(datiMifidIn.datiCostiServizio == undefined){
			 datiMifidIn.datiCostiServizio = [
				 {descCostiServizio:"Costi del servizio"				,importoCostiServizio:""				,percentualeCostiServizio:""},
				 {descCostiServizio:"Spese una tantum &#8208; ingresso"	,importoCostiServizio:""				,percentualeCostiServizio:""},
				 {descCostiServizio:"Spese correnti"					,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"},
				 {descCostiServizio:"Spese per operazioni"				,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"},
				 {descCostiServizio:"Costi accessori"					,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"},
				 {descCostiServizio:"Spese per servizi accessori"		,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"},
				 
				 {descCostiServizio:"Costi del prodotto"			,importoCostiServizio:""				,percentualeCostiServizio:""},
				 {descCostiServizio:"Spese una tantum &#8208; ingresso"	,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"},
				 {descCostiServizio:"Spese correnti"					,importoCostiServizio:""				,percentualeCostiServizio:""},
				 {descCostiServizio:"Spese per operazioni"				,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"},
				 {descCostiServizio:"Costi accessori"					,importoCostiServizio:"0.00"		,percentualeCostiServizio:"0.00"}
				 
			 ];
			 datiMifidIn.totaleImportoCostiServizio	  = ""
			 datiMifidIn.totalePercentualeCostiServizio = "";
			 
			datiMifidIn.datiCostiAnnuale = [
	//				 {descCostiAnnuale:"<b>Costi del servizio</b>"			,importoCostiAnnuale:""					,percentualeCostiAnnuale:""},
					 {descCostiAnnuale:"Spese una tantum &#8208; Uscita"	,importoCostiAnnuale:""					,percentualeCostiAnnuale:""},
	//				 {descCostiAnnuale:"<b>Costi del prodotto</b>"			,importoCostiAnnuale:""					,percentualeCostiAnnuale:""},
					 {descCostiAnnuale:"Spese una tantum &#8208; Uscita"	,importoCostiAnnuale:"0.00"		,percentualeCostiAnnuale:"0.00"}
			];		 
			
			datiMifidIn.datiIncentiviAnnuale = [
				{descIncentiviAnnuale:"Una tantum"	,importoIncentiviAnnuale:"0.00"	,percentualeIncentiviAnnuale:"0.00"},
				{descIncentiviAnnuale:"Ricorrenti"	,importoIncentiviAnnuale:""				,percentualeIncentiviAnnuale:""}
			];
			datiMifidIn.totaleImportoIncentiviAnnuale		= ""
			datiMifidIn.totalePercentualeIncentiviAnnuale = "";
			
			datiMifidIn.datiControvaloreLordo = [
				{descControvaloreLordo:"Commissioni di uscita"	,importoControvaloreLordo:""	,percentualeControvaloreLordo:""},
				{descControvaloreLordo:"Commissioni di ingresso",importoControvaloreLordo:""	,percentualeControvaloreLordo:""},
				{descControvaloreLordo:"Altre commissioni"		,importoControvaloreLordo:""	,percentualeControvaloreLordo:""}
			];
		 }
		 
		datiMifidIn.importoControvaloreLordo	 		 = datiMifidIn.controvaloreOperazione;
		datiMifidIn.percentualeControvaloreLordo 		 = "100,00 &#37;";
		datiMifidIn.totaleImportoControvaloreLordo	 = parseFloat(controValore);
		datiMifidIn.totalePercentualeControvaloreLordo = parseFloat(100);
		
		showDatiMifid2_tab8(datiMifidIn);
		
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
				mapForm.style="display:none";
				document.body.appendChild(mapForm);
				mapForm.submit();
				$("#frmPdfMifidInv").remove();	//apertura di PDF ogni volta aggiunge il form nel footer
//				open(wrp_script + "/investimenti/PdfMifid2CostiInducement.action?dMifid="+ datiMifidPdfInv + "&isPDF=true");
		});
		
		if(jsonPreview.codiceSocGestione!="90002")	//155
			$(".socGestioneFidelity").hide();
		
		$("#siObbligoCedola,#noObbligoCedola,#siReinvestimento,#noReinvestimento").hide();
		
		if($("#form01 input[name=reinvestimento]").val()=="S"){ 
			if(jsonPreview.flagReinvestimento=="" && jsonPreview.obbligoCedola=="N") {
				$('#noObbligoCedola').show();
			} 
			else if(jsonPreview.flagReinvestimento=="" && jsonPreview.obbligoCedola=="S") {
				$("#noObbligoCedola").show();
				$("#noObbligoCedola").find("div")[0].style.display="none";
				$("input[name=flagReinvestimento]")[1].checked=true;
			} 
			else if(jsonPreview.flagReinvestimento=="S") {
				$("#siReinvestimento").show();
				$("input[name=flagReinv]").val("S");
			} 
			else if(jsonPreview.flagReinvestimento=="N") {
				$("#noReinvestimento").show();
				$("input[name=flagReinv]").val("N");
			} 
		}
		
		
		$("#linkDocObb.linkProspetto") .attr("href","javascript:prospetto(1);");
		$("#linkDocObb1.linkProspetto").attr("href","javascript:prospetto(2);");
		
		$("#linkDocObb").text("Informazioni chiave per l\'investitore (KIID) " + fundData.switchFund.isin);
		$("#linkDocObb1").text("Modulo di sottoscrizione " + fundData.switchFund.isin);
		
		$(".isPrivacy").hide();
		$(".privacyDisclaimer").val(function(index,val) { return val + jsonPreview.disclaimerPrivacy; } );
		//$(".disclaimer").append(jsonPreview.disclaimer);
		$(".isDisclaimer").show();
//		$('#idTxtDisclaimer').html(jsonPreview.disclaimer);
		
		//if (jsonPreview.info=="PRIMA" && jsonPreview.fondosicav=="F") {
		if (jsonPreview.fondosicav=="F") {
			$("input[name=primaSottoscrizione]").val("S");
			switch (jsonPreview.codiceSocGestione){
				case 888:
					$(".socEtica").hide();
					$(".socEpsilon").hide();
					$(".socEurizonCapital").hide();
					$(".socAnima").show();
					break;
				case 777:
					$(".socAnima").hide();
					$(".socEpsilon").hide();
					$(".socEurizonCapital").hide();
					$(".socEtica").show();
					break;
				case 666:	//3
					$(".socAnima").hide();
					$(".socEtica").hide();
					$(".socEurizonCapital").hide();
					$(".socEpsilon").show();
					break;
				case 300:		//4
					$(".socAnima").hide();
					$(".socEtica").hide();
					$(".socEpsilon").hide();
					$(".socEurizonCapital").show();
					break;
			}
		} 
		//else if (jsonPreview.info=="PRIMA" && jsonPreview.fondosicav=="S") {
		else if (jsonPreview.fondosicav=="S") {
			$("input[name=primaSottoscrizione]").val("S");
			$("#altraSottoscrizione").hide();
			if (jsonPreview.codiceSocGestione==902) {	//101
				$(".custNome").text(jsonAttributes.customer.surname + " " + jsonAttributes.customer.name);
				$(".custDeposito").text(jsonPreview.deposito);
				$(".custDataLuogoNascita").text(jsonAttributes.customer.birthday + " " + jsonAttributes.customer.birthplace);
				$(".custProvinciaNascita").text(jsonAttributes.customer.residenceProvince);
				$(".custCittadinanza").text(jsonAttributes.customer.residenceState);
				$(".custResidenza").text(jsonAttributes.customer.residenceAddress);
				$(".custResidenzaCAP").text(jsonAttributes.customer.residenceZip);
				$(".custResidenzaComune").text(jsonAttributes.customer.residenceCity);
				$(".custResidenzaProvincia").text(jsonAttributes.customer.residenceProvince);
				$(".custRecapito").text(jsonAttributes.customer.mailAddress);
				$(".custRecapitoCAP").text(jsonAttributes.customer.mailZip);
				$(".custRecapitoComune").text(jsonAttributes.customer.mailCity);
				$(".custRecapitoProvincia").text(jsonAttributes.customer.mailProvince);
				$(".custEmail").text(jsonAttributes.customer.emailAddress);
				$(".nomeComparto").text(jsonAttributes.nomeComparto);
				//$(".socSchroder").show();
			} else
				$(".socSchroder").hide();
		} else {
			//$("#primaSottoscrizione").hide();
			$("input[name=primaSottoscrizione]").val("N");
			if(jsonPreview.codiceSocGestione == 107) {	//??
				$(".not107").hide();
			}	
		}
		$("#sezioneFatca").hide();
		$('#sezioneAdeVer').hide();
		$("#ifadeverko").show();
		
		$("input[name=numeroAppropriatezza]").val(jsonPreview.numeroAppropriatezza);
	}
}


//
//  Compilazione Conferma
//

function requestTmp(societa){
	var numero_casuale=Math.random();
	$('switchFund').action = wrp_script+"/FMP/tempistiche.jsp?cf="+numero_casuale+"&idSicav="+societa+"&tipoOp=Switch";
	$('switchFund').request({			
		onFailure: function() { errorPage();},
		onSuccess: function(t) {$('tempi').innerHTML = t.responseText;obscurateAll(1);openAlert('layeralert3');}
	});
}

function errorPage(){
	$("#errorBox").innerHTML = "Dato non disponibile";
	$("#errorBox").show();
	$("#boxSuccesso").hide();
	$(".riepilogoOrdine").hide();
}

function loadConfirm(data) {
	if (data.esito == "KO") {
		$("#messaggio").html(data.messaggio);
		$("#errorBox").show();
		$("#boxSuccesso").hide();
		$("section.riepilogoOrdine").hide();
		$("#warning").hide();
	} 
	else{
		if(data.fondosicav=="S" && data.codiceSocGestione!=144){
			Finance.tempistiche("SW_CL:SW_CMP" ,data.codiceSocGestione);
		}
		else{
			Finance.tempistiche("SW",data.codiceSocGestione);
		}
		
		$(".modRimborso-1").hide();
		$(".modRimborso-2").hide();
		$(".modRimborso-3").hide();
		$(".isFund").hide();
		$(".isSicav").hide();
		$(".isPAC").hide();
		data.ingressoFondoSwitch = (data.ingressoFondoSwitch!=undefined && data.ingressoFondoSwitch!="") ? data.ingressoFondoSwitch : "Zero";
		for (var field in data)
			$("."+field).text(data[field]);
		$(".isotsucFondoSwitch").html(data.isotsucFondoSwitch + " " +data.valutaFondo);
		$(".NAV").html(cleanZero(formatDecimal(parseFloat(data.NAV),3))+ " " + data.valutaFondo);
		if (data.fondosicav == "F")
			$(".isFund").show();
		else
			$(".isSicav").show();
	
		//PIR
		if(data.pirOrigine != undefined && data.pirOrigine == "S"){
			$("#tipologiaStrumentoFondoOut").text("Fondo PIR");
		}
		if(data.pirSwitch != undefined && data.pirSwitch == "S"){
			$("#tipologiaStrumentoSwitch").text("Fondo PIR");
		}
		
		if (data.tipoInvestimento == "PAC")
			$(".isPAC").show();
		$(".controvalore").text(data.controvalore + " " + data.valutaFondo);	
		$(".chiusuraPac").text( (data.chiusuraPac == "S") ? "SI" : "NO" );
		$(".modRimborso-"+data.modRimborso).show();
		if(data.valutaFondo=="EUR") {
			$(".valoreImportoPerQuote").html( data.valoreImportoPerQuote.replace('.',',')+ " " 
					+ data.valutaFondo+"</strong> corrispondenti a <strong>" 
					+ data.valoreQuotePerImporto.replace('.',',') + "</strong> quote" );
			$(".valoreQuotePerImporto").html( "<strong>" + data.valoreQuotePerImporto.replace('.',',')
					+"</strong> corrispondenti a <strong>" + data.valoreImportoPerQuote.replace('.',',')
					+ " " + data.valutaFondo + "</strong>" );
		} else {
			$(".valoreImportoPerQuote").html( data.valoreImportoPerQuote.replace('.',',')
					+ " EUR</strong> corrispondenti a <strong>"
					+data.valoreImportoAlCambio.replace('.',',')+ " " + data.valutaFondo
					+"</strong> &nbsp;al cambio del " + data.dataCambioValuta
					+" e a <strong>" + data.valoreQuotePerImporto.replace('.',',') + "</strong> quote" );
			$(".valoreQuotePerImporto").html( "<strong>" + data.valoreQuotePerImporto.replace('.',',')
					+"</strong> corrispondenti a <strong>" + data.valoreImportoPerQuote.replace('.',',')
					+" EUR</strong> e a <strong>" + data.valoreImportoAlCambio.replace('.',',')
					+" " + data.valutaFondo + "</strong> &nbsp;al cambio del " + data.dataCambioValuta);			
		}
		$(".numeroQuote").text(cleanZero(confirmJson.numeroQuote.replace('.',',')));
		$(".valoreQuotaFondoSwitch").html(data.valoreQuotaFondoSwitch.replace(".",",")+" "+data.valutaFondoSwitch);
	}	
}
