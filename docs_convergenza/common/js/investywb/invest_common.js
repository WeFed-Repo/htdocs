
var datiMifidPdfInv="",datiMifidPdfDisInv="";
var infoTempistiche = {}, datiTempistiche = {};
var codSocNumDec = {};
var struts2NamespaceVal="/investywb";
var idxDettaglioFondo = -1, idPicPac = -1;
var investFolderName = '/investywb';

var string_CINQUE_0			="00000", 			string_UNDICI_0		="00000000000",  string_EMPTY="", 	string_vuoto="";
var string_selectorOptions	="selectorOptions", string_spsel_option	="spsel-option";
var string_SICAV			="SICAV", 			string_Fondo		="Fondo"
var string_F				="F",			 	string_S			="S", 			string_N="N",		string_0="0";
	
var dirFissTooltipVal = "<b>Spese amministrative</b> trattenute in misura fissa dal soggetto incaricato dei pagamenti \
						(banca corrispondente nel caso di Sicav e fondi diritto estero) o dalle societ&agrave; di gestione 										\
						(nel caso di fondi di diritto italiano) per l'<b>esecuzione</b> di ogni <b>singola operazione</b> 										\
						(sottoscrizione, rimborso, stacco cedola). " ;

var codiceSocietaMappa = {
		// 'descCodSoc'				  :	{'newCodSoc':'valoreNuova','oldCodSoc':'valoreNuovo'}

		'FIL_Inv_Mgmt_Lux_SA' 		  : {	'newCodSoc' : '90002',		'oldCodSoc' : '155'		},
		'Anima_Asset_Management_Ltd'  : {	'newCodSoc' : '144',		'oldCodSoc' : '144'		},
		'JPMorgan_Funds' 			  : {	'newCodSoc' : '200',		'oldCodSoc' : '111'		},
		'JPI_Funds' 				  : {	'newCodSoc' : '222',		'oldCodSoc' : '117'		},
		'Carmignac_Gestione_SA' 	  : {	'newCodSoc' : '125',		'oldCodSoc' : '125'		},
		'Etica_Sgr_Spa' 			  : {	'newCodSoc' : '777',		'oldCodSoc' : '6'		},
		'Carmignac_Gest_Luxemb_SA'    : {	'newCodSoc' : '126',		'oldCodSoc' : '126'		},
		'Eurizon_Capital_Sgr' 		  : {	'newCodSoc' : '300',		'oldCodSoc' : '4'		},
		'Epsilon_Associati_Sgr_Spa'   : {	'newCodSoc' : '666',		'oldCodSoc' : '3'		},
		'Anima_Sgr_Spa' 			  : {	'newCodSoc' : '888',		'oldCodSoc' : '1'		},
		'Amundi_Funds' 				  : {	'newCodSoc' : '7017',		'oldCodSoc' : '178'		},
		'ThreadNeedle_Asset_Mgmt_Ltd' : {	'newCodSoc' : '114',		'oldCodSoc' : '114'		},
		'Schroder_Inv_Mgmt' 		  : {	'newCodSoc' : '902',		'oldCodSoc' : '101'		},
		'Pictet' 					  : {	'newCodSoc' : '901',		'oldCodSoc' : '000'		}
	}

//condiviso tra Vendita/Switch/Ver agg PAC
//data=Finance.depositData
function startOnLoad(data){
	showErrorTop(false, null, null);
	if (data.esito=="OK") {
		var tempAgenzia = "", tempDeposito="", tempDepCompleto="", tempIdx=-1;
		var keys = Object.keys(data.depositi).sort();
		for (var idx=0; idx<keys.length; idx++){	//var dep in keys
			var dep = keys[idx];
			var rappDaElenco = dep.split("\/");
			if(rappDaElenco[0] != tempAgenzia || rappDaElenco[1]!=tempDeposito){
				tempIdx++; // = idx;
				$("<span>", {"class":"group", "id":"dep_"+tempIdx}).appendTo("#elencoDeposito");	//.html(data.depositi[keys[0]])
			}
			
			if(rappDaElenco[2] =="0"){
//				$("<a>", {"class":"selectorOptions" + (idx==0?" first selected":""), "id":"dep_"+tempIdx+""+idx+"_ALL", "value":dep})
//					.html("<strong>"+rappDaElenco[0]+"/"+rappDaElenco[1]+ " - tutti i sottodepositi" + " - "+
//							$.parseJSON(data.depositi[dep]).intestatario + "</strong> " )
//					.appendTo("#dep_"+tempIdx);
				
//				$("<div>", {"class":"" + (idx==0?" ":""), "id":"dep_"+tempIdx+""+idx+"_ALL", "value":dep})
				$("<div>", {"class":"" + (idx==0?" ":""), "id":"dep_"+tempIdx+"_ALL", "value":dep})
				.html("<strong>"+rappDaElenco[0]+"/"+rappDaElenco[1]+ " - tutti i sottodepositi" + " - "+
						$.parseJSON(data.depositi[dep]).intestatario + "</strong> " )
				.appendTo("#dep_"+tempIdx);
			}
			
//			$("<a>", {"class":"selectorOptions", "id":"dep_"+tempIdx+""+idx+"_"+rappDaElenco[2], "value":dep})
			$("<a>", {"class":"selectorOptions", "id":"dep_"+tempIdx+"_"+rappDaElenco[2], "value":dep})
				.html("<strong>"+rappDaElenco[0]+"/"+rappDaElenco[1]+"/"+rappDaElenco[2] + " - "+ $.parseJSON(data.depositi[dep]).intestatario + "</strong> ")
				.appendTo("#dep_"+tempIdx);
			
			tempAgenzia  = rappDaElenco[0];
			tempDeposito = rappDaElenco[1];
		}
		
		createSelectRapp('sceltaRapporto', 'deposito', refreshDeposito);
		//$("#deposito").val() settato tramite funzione_convergenza.js
		
		$(".hasFondo").show();
	}
	else 
	{
		$(".hasFondo").hide();
		
		$("#messaggio").html(data.messaggio);
		$("#errorBox").show();
		showErrorTop(true, "E", data.messaggio);
		
		window.scrollTo(0, 0);
		$("#boxSuccesso").hide();
		$("#sectionSelect").removeClass("loading");
	}
//	$("#sectionSelect").removeClass("loading");
}

//condiviso tra Vendita/Switch/Ver agg PAC
function ajaxErrorHttp(request, status, error) {
	$(".hasFondo").hide();
	showErrorTop(false, null, null);
		switch (error) {
			case "Not Found":
				$("#warningBox").empty();
				$("#messaggio").html("Errore: Server non trovato");
				$("#errorBox").show();
				window.scrollTo(0, 0);
//				$("form[name=sellFundForm]").hide();
				break;
			case "Proxy Error":
				$("#warningBox").empty();
				$("#messaggio").html("Errore: Server non raggiungibile");
				$("#errorBox").show();
				window.scrollTo(0, 0);
//				$("form[name=sellFundForm]").hide();
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
//				$("form[name=sellFundForm]").hide();
		}
		
		$("#sezioneDep").removeClass("loading");
		$(".hasFondo").removeClass("loading");
		$("#sectionSelect").removeClass("loading");
}

//Chiamata nel tutti JS ma chiamata JSOn finisce spesso dopo tutte
function requestMargine(deposito, showEsito) {
	var msg = "Disponibilita attuale non disponibile";
	var margineVal = 'Dato non disponibile';
	$.ajax({
		url : wrp_script_direct + investFolderName 	+ "/MargUtilFinanceJson.action" + "?cf=" + Math.random(),
		dataType : "json",
		data : {
			deposito : deposito
		},
		success : function(dataOutJSON, status, jqXHR) { // jqXHR.statusText="OK";
			// status="success"
			if (200 == jqXHR.status) {
				// alert(dataOutJSON.data.stato);
				try {
					margineVal = dataOutJSON.data.Margine;
					var margineTlTp="";
					
					/*data-title="
						08/07/2016: <strong><span id=&quot;tot_investibile_1&quot;>4.213,46</span>&amp;nbsp;?</strong>
						<br>11/07/2016: <strong><span id=&quot;tot_investibile_1a&quot;>4.213,46</span>&amp;nbsp;?</strong> <br>12/07/2016:
						<strong><span id=&quot;tot_investibile_2&quot;>4.213,46</span>&amp;nbsp;?</strong>
						<br>13/07/2016: <strong><span id=&quot;tot_investibile_3&quot;>4.213,46</span>&amp;nbsp;?</strong>
						<br>14/07/2016: <strong><span id=&quot;tot_investibile_4&quot;>4.213,46</span>&amp;nbsp;?</strong>
					"*/
					$("#margine").attr("data-title","");
					
					var idx=1;
					if(dataOutJSON.data) {
						Object.keys(dataOutJSON.data).sort().forEach(function(k){
							v = dataOutJSON.data[k];
							if("Margine"!=k) {
								if("MargineT"!=k ) {
									var values = v.split("-");
									if(values.length>3){	//saldo negativo
										margineTlTp+=values[2] + " : " + "<strong><span id='tot_investibile_" + (idx) + "' >-"  + values[1] + "  " +  values[3] + "</span></strong><br>";
									}
									else{
										margineTlTp+=values[1] + " : " + "<strong><span id='tot_investibile_" + (idx) + "' >"  + values[0] + "  " +  values[2] + "</span></strong><br>";
									}
									idx++;
							} else {
								var datiMargine = dataOutJSON.data.MargineT.split("-");
								margineVal =  datiMargine[0] + " " + datiMargine[2] + " al " +datiMargine[1];
								
								if(datiMargine.length>3){	//saldo negativo 
									margineVal =  "-" + datiMargine[1] + " " + datiMargine[3] + " al " +datiMargine[2];
								}
							}
						}
						});
						
						$("#margine").attr("data-title",margineTlTp);
					}
//					if(dataOutJSON.data) {
//						$.each(dataOutJSON.data, function(k, v){
//							if("Margine"!=k) {
//								if("MargineT"!=k ) {
//									var values = v.split("-");
//									if(values.length>3){	//saldo negativo
//										margineTlTp+=values[2] + " : " + "<strong><span id='tot_investibile_" + (idx) + "' >-"  + values[1] + "  " +  values[3] + "</span></strong><br>";
//									}
//									else{
//										margineTlTp+=values[1] + " : " + "<strong><span id='tot_investibile_" + (idx) + "' >"  + values[0] + "  " +  values[2] + "</span></strong><br>";
//									}
//									idx++;
//							} else {
//								var datiMargine = dataOutJSON.data.MargineT.split("-");
//								margineVal =  datiMargine[0] + " " + datiMargine[2] + " al " +datiMargine[1];
//								
//								if(datiMargine.length>3){	//saldo negativo 
//									margineVal =  "-" + datiMargine[1] + " " + datiMargine[3] + " al " +datiMargine[2];
//								}
//							}
//						}
//						});
//						
//						$("#margine").attr("data-title",margineTlTp);
//					}
					
				} catch (err) {
//					showErrorTop(false, null, null);	//per evitare nascondere errore se chiamata finisce dopo
				}

				if ("false" == showEsito) {
//					showErrorTop(false, null, null);	//per evitare nascondere errore se chiamata finisce dopo
				}

				$('#margine').text( margineVal);
			} else {
				showErrorTop(true, "W", msg);
			}
		},
		error : function(jqXHR, status, errorThrown) {
			showErrorTop(true, "W", msg);
		}
		,complete: function(){
			if($("#sezioneDep").length){	
				$("#sezioneDep").removeClass("loading");
			}
			//rata residue calcolata al base della disponibilta di saldo - Ver Agg PAC
			if($("#numVersamentiTxt").length && showNumContratto && idPicPac!=-1){	
				var isinSel = $("#spselCTAinput").val();
				var fondoSel = Finance.fundData.fondi[isinSel];
				calcolaRateResidueDaMargine(fondoSel, idPicPac);
			}
		
		}
	});

	$('#margine').text(margineVal);// check to comment

}



//condiviso tra Vendita/Switch/Ver agg PAC
function refreshDeposito(rapp) {
	showErrorTop(false, null, null);
	
	$("#sezioneDep").addClass("loading");
	$(".hasFondo").addClass("loading");
	
	var agenziaRapp = rapp.value.split("\/")[0];
	var depositoRapp = rapp.value.split("\/")[1];
	
//	//agenziaRapp.padStart(5,"0") non funziona con browser IE
//	$.ajax({ 
//		url : wrp_script_direct + struts2NamespaceVal + "/TotInvestibile.action?rubrica=" +  
//								(string_CINQUE_0+agenziaRapp).slice(-5) + (string_UNDICI_0+depositoRapp).slice(-11),
//		dataType : "json",
//		success  : function(data) {  
//			renderTotLiquidita(data);
//		}
//		,complete: function(){
//			$("#sezioneDep").removeClass("loading");
//		}
//	});
	
	requestMargine($('#deposito').val(), "false");
	
	
	var contoRapp = $.parseJSON(Finance.depositData.depositi[$("#deposito").val()]).conto; //agn - conto - div
	
	$("#idContoRapporto").text(contoRapp.split("-")[1].trim());
	$("#idNumDescAgenziaRapporto").text(agenziaRapp + " - Webank"); //TODO - mettere desc da excel/file di config
	
	datiSelect.deposito = rapp.value;
	loadFondi(rapp.value);
	
}

//condiviso tra Vendita/Switch/Ver agg PAC
//function renderTotLiquidita(data) {
//	var jsdata="";
//	var totinvest = "Dato non disponibile";
//	var i = 0;
//
//	if (data!=undefined && data.data!=undefined && data.data.valore!=null && data.data.valore!= undefined && data.data.valore.length>0) {
//		jsdata = data.data.valore;
//		totinvest = jsdata[4].availablebalance + (jsdata[4].currency=='EUR'?" &euro;": " "+jsdata[4].currency) + " al " + jsdata[4].data;
//	}
//	
//	$("#saldoDispText").html(totinvest);
//	$("#saldoDispTooltip").html("");
//
//	if( jsdata!=undefined ) {
//		totinvest="";
//		$.each(jsdata,function(idx,fld) {
//			i++;
//			totinvest += (i>1?"<br/>":"")
//				+ fld.data 
//				+ ": <strong><span id=" + "tot_investibile_".concat( String(i==2?"1a":(i>2?(i-1):i)) ) + ">" 
//				+ fld.availablebalance 
//				+ "</span> " 
//				+ (fld.currency=="EUR"?"&euro;":fld.currency)
//				+ "</strong>";
//		});
//	}
//		
//	$("#saldoDispTooltip").html(totinvest);
//	$("#saldoDispTooltip").removeClass("inited");
//	initTooltip();	//di framework
//
//}

//condiviso tra Vendita/Switch/Ver agg PAC
function loadFondi_Common(dep, tipo){	//dep
	$(".hasFondo").show();
	$("#formFondo").show();
	$("#warningBox").hide();
	Finance.loadFundData( dep, tipo, successFondiHandler, ajaxErrorHttp);
	
}

//condiviso tra Vendita/Switch/Ver agg PAC
//Finance.fundData=jsonData;
function successFondiHandler(jsonData){
	showErrorTop(false, null, null);
	$("#fondo").empty();
	if (!$.isEmptyObject(jsonData) && jsonData.esito == "OK" && jsonData.hasOwnProperty("fondi")) {
		
		$("<input>", {"type":"hidden", "id":"spselCTAinput", "name":"spselCTAinput"}).appendTo("#fondo");
		$("<div>", {"class":"spsel-options", "id":"elencoFondi"}).appendTo("#fondo");
		
		//usa cosi per visualizzare fondi con nomi in ordine alfabetico
		var idx= -1;
		$.each(jsonData.fondi,function(isin,fundJson){
			idx++;
			$("<div>", {"class":"spsel-option", "id":"div_fund_"+idx, "data-value":isin})	//spsel-option selected
				.appendTo("#elencoFondi");
			
			$("<a>", {"class":"spsel-addel btn-icon", "id":"a_div_fund_"+idx, "data-isin":isin, "data-fundname":fundJson.nomefondo})
				.html("<i class='icon icon-info'></i>")
				.appendTo("#div_fund_"+idx);
			
			$("<a>", {"class":"spsel-option-el", "id":"aa_div_fund_"+idx})
				.html(fundJson.nomefondo + " (ISIN: " + isin + " )")
				.appendTo("#div_fund_"+idx);
		});
		
		//quando cambia fondo
		$("#fondo").spSel(function(){
			$("#dettaglioPicPac").addClass("loading");
			loadDettagliFondi();
			$("#dettaglioPicPac").removeClass("loading");
		});
		
		//Modal di scheda fondo
		$("#fondo .spsel-addel.btn-icon").click(function(e){
			e.stopPropagation();
			fesFondoShow({"codiceIsin":$(this).attr("data-isin"), "showButtonContainer":false});	//TODO - change /investimento a /investywb
			$("#modalFondo").modal("show");
//			$(".btn-console").hide();	//verifica se funziona
		});
		
		//quando carica pagina
		if($("#div_fund_0").length){
			$("#div_fund_0").trigger("click");
		}
		
		$("#prosegui").click(linkProsegui);
		
	} 
	else{
		$(".hasFondo").hide();
		window.scrollTo(0, 0);
		$("#warningBox").show();
	}
		
	$(".hasFondo").removeClass("loading");
	$("#sectionSelect").removeClass("loading");
}


function loadDettagliPicPac_Common(isPac){		//isPac==true solo da invest_pac.js (Ver Agg PAC)
	idPicPac = -1;
	$("#dettaglioPicPac").empty();
	var isinSel = $("#spselCTAinput").val();
	var fondoSel = Finance.fundData.fondi[isinSel];
	var intestatariSel = $.parseJSON(Finance.depositData.depositi[$("#deposito").val()]).intestatario;
	
//	$("#idQuoteTotale").text(formatDecimal(fondoSel.quoteTotale,getNumDec(fondoSel.codicesocietagestione)));
	
	$("#tipoStrumento") .text(string_S == fondoSel.strumento ? string_SICAV : string_Fondo);
	$("#idQuoteTotale").text(parseFloat(fondoSel.quoteTotale)
							.toLocaleString("it-IT",{minimumFractionDigits:getNumDec(fondoSel.codicesocietagestione),
													 maximumFractionDigits:getNumDec(fondoSel.codicesocietagestione)}) );
	
	$("#idControValoreEurTotale").text(fondoSel.contraValoreTotale);
	if(string_EUR != fondoSel.tipodivisa){
		$("#idControValoreEurTotale").text(fondoSel.controvaloreDivisaTotale);
		$("<span>").attr("class","note") 
			.append(fondoSel.contraValoreTotale + " " + fondoSel.tipodivisa)
			.append(" al cambio del " + fondoSel.datacambio)
			.appendTo($("#idControValoreEurTotale").append("<br />"));
	}
	
	$("#idNav").text(formatDecimal(fondoSel.nav) + " " + fondoSel.tipodivisa);
	
	var divPicPacVal = "";
	for (var idx=0; idx < fondoSel.dettagli.length; idx++) {
		
//		if(undefined!=isPac && true==isPac){				//isPac==true solo da invest_pac.js (Ver Agg PAC)
//			if(fondoSel.dettagli[idx].rateresidue == '0' && fondoSel.dettagli[idx].tipo_contratto != 'Z'){	//Z=contratto PASS
//				continue;	
//			}
//		}
		
		divPicPacVal = templatePicPac.replace("",			"");
		
		var txtRadioVal = "";
		if(undefined!=isPac && true==isPac){				//isPac==true solo da invest_pac.js (Ver Agg PAC)
			divPicPacVal = divPicPacVal	 .replace("{{txtRadio}}" , "<strong>Contratto numero " + fondoSel.dettagli[idx].contratto +"</strong")
										 .replace("{{numContratto}}" , fondoSel.dettagli[idx].contratto);
		}
		else{
			divPicPacVal = divPicPacVal	 .replace("{{txtRadio}}" , templateTxtRadio.replace("",""))
										 .replace("{{numContratto}}" , parseFloat(fondoSel.dettagli[idx].quote)
							 											.toLocaleString("it-IT",{minimumFractionDigits:getNumDec(fondoSel.codicesocietagestione),
							 																	maximumFractionDigits:getNumDec(fondoSel.codicesocietagestione)}));	
			//quando torno indietro da preview, cerca con questo valore
		
			divPicPacVal = divPicPacVal	 .replace("{{quote}}",			parseFloat(fondoSel.dettagli[idx].quote)
												 						.toLocaleString("it-IT",{minimumFractionDigits:getNumDec(fondoSel.codicesocietagestione),
												 												 maximumFractionDigits:getNumDec(fondoSel.codicesocietagestione)}))
										 .replace("{{contravalore}}",	string_EUR == fondoSel.tipodivisa ? 
												 						fondoSel.dettagli[idx].controvalore :
												 						fondoSel.dettagli[idx].controvaloredivisa + " " + string_EUR +
												 						" <i> per " + fondoSel.dettagli[idx].controvalore)
										 .replace("{{divisa}}"		,	string_EUR == fondoSel.tipodivisa ? string_EUR : " "+fondoSel.tipodivisa + "</i>");
		}
		
		if("PIC" == fondoSel.dettagli[idx].tipo){
			divPicPacVal = divPicPacVal	 .replace("{{testoPicPac}}"	,	"Saldo da acquisto singolo (PIC) - " + intestatariSel)
										 .replace("{{hasPac}}"		,   "none")
										 .replace("{{showDettPac1}}"	,   "")	//
										 .replace("{{showDettPac}}"	,"");
		}
		else{
			
			var invTotaleDivisa="", importoRataDivisa = "";
			if(string_EUR != fondoSel.tipodivisa){
				var cambio = (0== fondoSel.cambio)? 1: fondoSel.cambio;
				importoRataDivisa = parseFloat( fondoSel.dettagli[idx].importorata / cambio) 
											.toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2}) + " " + fondoSel.tipodivisa ;
				invTotaleDivisa   = parseFloat( (fondoSel.dettagli[idx].importorata * fondoSel.dettagli[idx].rateTotaliPiano) / cambio) 
											.toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2}) +  " " + fondoSel.tipodivisa ;
			}
			
			
			if(undefined!=isPac && true==isPac){				//isPac==true solo da invest_pac.js (Ver Agg PAC)
				var divDettPac1 = templateDettPac1	//.replace(/{{num}}/g,		idx)
													.replace("{{invTotale}}", 	fondoSel.dettagli[idx].rateTotaliPiano * fondoSel.dettagli[idx].importorata)	//TODO - da formattare
													.replace("{{rateVersate}}", fondoSel.dettagli[idx].rateSottoscritte)
													.replace("{{invTotaleDivisa}}", string_EUR == fondoSel.tipodivisa ? "" : invTotaleDivisa)
													;
				
				divPicPacVal = divPicPacVal  .replace("{{showDettPac1}}"	,   divDettPac1);
			}
			else{
				divPicPacVal = divPicPacVal	 .replace("{{testoPicPac}}"	,	"Saldo da acquisto (PAC n. " + fondoSel.dettagli[idx].contratto +") - " + intestatariSel);
				divPicPacVal = divPicPacVal  .replace("{{showDettPac1}}"	,"");
			}
			
			
			var divDettPac = templateDettPac	//.replace(/{{num}}/g,		idx)
											.replace("{{importoRata}}", fondoSel.dettagli[idx].importorata)	//
											.replace("{{rateResidue}}", fondoSel.dettagli[idx].rateresidue)
											.replace("{{importoRataDivisa}}", string_EUR == fondoSel.tipodivisa ? "" : importoRataDivisa)
											;
											
//			divPicPacVal = divPicPacVal	 .replace("{{testoPicPac}}"	,	"Saldo da acquisto (PAC n. " + fondoSel.dettagli[idx].contratto +") - " + intestatariSel)
			divPicPacVal = divPicPacVal  .replace("{{showDettPac}}"	,   divDettPac);
			divPicPacVal = divPicPacVal  .replace("{{hasPac}}"		,   "");
		}
		divPicPacVal = divPicPacVal.replace(/{{num}}/g,			idx);
		$("#dettaglioPicPac").append(divPicPacVal);
	}
	
	$(".hasPac").show();
	if(string_EMPTY == divPicPacVal){
		$(".hasPac").hide();
	}
	
	$("input[type=radio][name=picpac]").click(picpacSelect);
	
	if($("#picpac0").length){
		$("#picpac0").prop("checked",true);	//prima selezionato come default
		$("#picpac0").trigger("click");		//picpacSelect
	}
	
}


//chiamat da loadDettagliFondi()
function loadDettagliFondi_Common(isPac){
	showErrorTop(false, null, null);
	loadDettagliPicPac_Common(isPac);
	
	
	var isinSel = $("#spselCTAinput").val();
	var fondoSel = Finance.fundData.fondi[isinSel];
	
	if($("#quoteimp").length){	
		
	
		$("#quoteimp").change(function(){
			isinSel = $("#spselCTAinput").val();
			fondoSel = Finance.fundData.fondi[isinSel];
			
			$("#selimp,#selquo,#estinzionePac,#estinzioneSicav,.importoDaQuoteDiv").hide();
			$('#vendQuoteField, #vendQuoteDecField, #vendImportoField, #vendImportoDecField,#quoteImporto,#importoQuote').val("");
			$("#quoteImporto,#importoQuote").text("");
			$("#vendQuoteField, #vendQuoteDecField").prop('disabled',false);
			$("#warningMsg, #warningMsgQuo").text("");
			$("#quoteDaImporto, #importoDaQuote, .importoDaQuoteDiv").text("");
			resetHasErrors($("#importoQuoteErr").parent());
			
			if(formBeanPreview==null || typeof formBeanPreview == "undefined" || (typeof formBeanPreview !== "undefined" && undefined == formBeanPreview.deposito)){
				showErrorTop(false, null, null);
			}
			
			if(string_EUR != fondoSel.tipodivisa){
				$(".importoDaQuoteDiv").show();
			}
			
			//errore/indietro di preview
//			if(typeof esitoPreview !== "undefined" && typeof formBeanPreview !== "undefined" && 
//					string_vuoto == formBeanPreview.tipoVendita && string_vuoto != esitoPreview){
//				showErrorTop(true, "E", msgPreview);
//			}
			
			if($(this).val()=="imp") {
				$("#selimp").show();
			}
			else
			{
				if ($(this).val()=="tutto") {
					var quoteTot = $("#quoteTotali").val();
					$("#vendQuoteField").val(quoteTot.split(",")[0]);
					$("#vendQuoteDecField").val(quoteTot.split(",")[1]);
					$("#importoDaQuote").text($("#controvalore").val());
					if(string_EUR != fondoSel.tipodivisa){
						$(".importoDaQuoteDiv").text("Controvalore: " + fondoSel.dettagli[idPicPac].controvalore + " "+ fondoSel.tipodivisa);
					}
					$("#importo").val($("#controvalore").val()); //.replace(".","").replace(",","."));
					$("#quote").val(quoteTot); 					//.replace(".","").replace(",","."));
					$("#vendQuoteField, #vendQuoteDecField").prop('disabled',true);
					
					var isinSel = $("#spselCTAinput").val();
					var fondoSel = Finance.fundData.fondi[isinSel];
					if("PAC" == fondoSel.dettagli[idPicPac].tipo){
						if("F" == fondoSel.strumento){
							$("#estinzionePac").show(); 
						}
						else{
							$("#estinzioneSicav").show();
						}
					}  
					
					
				}
				$("#selquo").show();
			}
			$("#tipoVendita").val($(this).val());			//preview - cics - conferma mail
			
		}).trigger("change")	//quando carica pagina 
		;
		
		var isTextSelected=false, txtSelectedVal="";
		//se seleziona testo e scrive, deve soprascrivere il valore
		$('#vendQuoteField, #vendQuoteDecField, #vendImportoField, #vendImportoDecField').bind('select', function(event) {
			isTextSelected=true;
			txtSelectedVal=window.getSelection().toString();
		});
		
		//TODO - copy-paste da mouse lascia "." - da sisteamare
		$('#vendQuoteField, #vendQuoteDecField, #vendImportoField, #vendImportoDecField').bind('paste', function(event) {
			if(verificaImporto(event)){
				return;
			}
		});
		
		$('#vendQuoteField, #vendQuoteDecField, #vendImportoField, #vendImportoDecField').bind('keydown', function(event) {
			
			$("#warningMsg, #warningMsgQuo").text("");
			
			//evitare caratteri speciali come +-.
			if(verificaImporto(event)){
				return;
			}
			
			if(isTextSelected){
				origVal = event.target.value;
				event.target.value = origVal.substring(0,origVal.indexOf(txtSelectedVal)) + origVal.substring(origVal.indexOf(txtSelectedVal)+txtSelectedVal.length);
			}
			isTextSelected=false;
			
			//evitare superare max lunghezza permettibile
			var isinSel = $("#spselCTAinput").val();
			var fondoSel = Finance.fundData.fondi[isinSel];
			var maxDecimali = "quoteDec"  ==event.currentTarget.name ? getNumDec(fondoSel.codicesocietagestione) :
							  "importoDec"==event.currentTarget.name ? 2 : 10;
			var ndigit = event.target.value.length + 1;
			var eventChiave = event.key, eventValore = event.target.value;
			var isBkspDel = false;
			if(8 == event.keyCode || 127 == event.keyCode){		//Bksp, canc key
				eventChiave = "";
				eventValore = eventValore.substr(0, eventValore.length-1);
				isBkspDel = true;
			}
			if (ndigit > maxDecimali && !isBkspDel) {	//cancellare ok con backspace o del
				event.preventDefault();
				$("#warningMsg, #warningMsgQuo").text("Campo ha limite di massimo " + maxDecimali + " cifre");
			}
			
			
			//eviatare di superare max valori
				var maxVal   = "", prevIntVal="", prevDecVal = "", currentVal="", navValQ = 1, navValI = 1;
				if("quoteNum"  == event.currentTarget.name){
					maxVal 	   = $("#quoteTotali").val().replace(".","").replace(",",".");
					prevIntVal = eventValore;
					prevDecVal = $("#vendQuoteDecField").val();
					currentVal = prevIntVal + "" + eventChiave + "." + prevDecVal;
					navValI		= fondoSel.nav;
				}
				else if("importoNum" == event.currentTarget.name){
					maxVal     = $("#controvalore").val().replace(".","").replace(",",".");
					prevIntVal = eventValore;
					prevDecVal = $("#vendImportoDecField").val();
					currentVal = prevIntVal + "" + eventChiave + "." + prevDecVal;
					navValQ		= fondoSel.nav;
				}
				else if("quoteDec" == event.currentTarget.name){
					maxVal    = $("#quoteTotali").val().replace(".","").replace(",",".");
					prevIntVal = $("#vendQuoteField").val();
					prevDecVal = eventValore;
					currentVal = prevIntVal + "." + prevDecVal + "" + eventChiave ;
					navValI	   = fondoSel.nav;
				}
				else if("importoDec" == event.currentTarget.name){
					maxVal    = $("#controvalore").val().replace(".","").replace(",",".");
					prevIntVal = $("#vendImportoField").val();
					prevDecVal = eventValore;
					currentVal = prevIntVal + "." + prevDecVal + "" + eventChiave ;
					navValQ		= fondoSel.nav;
				}
				if(string_punto == currentVal){		//cancella numero digitato per evitare NaN
					currentVal = 0;
				}
				if(parseFloat(currentVal) > parseFloat(maxVal)){
					event.preventDefault();
					$("#warningMsg, #warningMsgQuo").text("Valore superato di massimo:" + formatDecimal(parseFloat(maxVal))); //show message "Numero quote maggiore del contratto"
				}
				else{
					
					var valoreQuote = parseFloat(currentVal)/ (navValQ!=1? (navValQ/fondoSel.cambio) : navValQ);		//nav in divisa per importo
					$("#quoteDaImporto").text( parseFloat(valoreQuote)		
													.toLocaleString("it-IT",{minimumFractionDigits:getNumDec(fondoSel.codicesocietagestione), 
																			maximumFractionDigits:getNumDec(fondoSel.codicesocietagestione)}));
					$("#quote").val($("#quoteDaImporto").text());
					
					var multiplicatore = fondoSel.nav;
					if(string_EUR != fondoSel.tipodivisa){
						multiplicatore = (fondoSel.nav / fondoSel.cambio);
					}
					var valoreImporto = valoreQuote * multiplicatore;
					
					$("#importoDaQuote").text(parseFloat( valoreImporto)						
													.toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2}));
					$("#importo").val($("#importoDaQuote").text());
					
					if(string_EUR != fondoSel.tipodivisa){
						
						multiplicatore = navValI * fondoSel.cambio;
						if("quoteNum"  == event.currentTarget.name || "quoteDec" == event.currentTarget.name){
							multiplicatore = (navValI);	//nav è in divisia
						}
						$(".importoDaQuoteDiv").text("Controvalore: " + 
														parseFloat((parseFloat(currentVal) * multiplicatore))
															.toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2})
														+ " "+ fondoSel.tipodivisa);
					}
				}
				
				resetHasErrors($("#importoQuoteErr").parent());
		});
		
		
		$('input[name=estPAC]').click(function() {
			$("#chiusuraPiano").val($(this).val());
			resetHasErrors($("#estinzionePacErr").parent());
		});
	
	}
	
	$("#cfam")						.val(fondoSel.codfamfondo);				//conferma - disci worm
	$("#codiceIsin")				.val(isinSel);							//preview - kiid, conferma - print pdf
	$("#codiceSocietaDiGestione")	.val(fondoSel.codicesocietagestione);	//preview - tempistiche, cics 
	$("#codiceFondo")				.val(fondoSel.codicefondo);				//preview - cics
	$("#codiceTitolo")				.val(fondoSel.codiceTitolo);			//preview - cics
	$("#dataNAV")					.val(fondoSel.datanav);					//conferma - print pdf
	$("#descrizioneFondo")			.val(fondoSel.nomefondo);				//preview - mifid
	$("#descrSocietaGestione")		.val(fondoSel.descrizioneSocietaGestione);	//conferma - mail vendita
	$("#divisa")					.val(fondoSel.tipodivisa);				//riepilogo - switch
	$("#speseFisse")				.val(fondoSel.speseRimborso);			//conferma - mail vendita
	$("#fondoSicav")				.val(fondoSel.strumento);				//preview - cics
	$("#NAV")						.val(fondoSel.nav);						//conferma - print pdf
	
}

//condiviso tra Vendita/Switch/Ver agg PAC
//radio per ordine selezionato di fondo
function picpacSelect_Common(ele){
	//TODO - input hidden formbean values
	if (ele.is(':checked')) {
		var idName = ele.attr('id');	//picpacX
		var idx = idName.substr("picpac".length);
		idxDettaglioFondo = idx;
		var isinSel = $("#spselCTAinput").val();
		var fondoSel = Finance.fundData.fondi[isinSel];
		
		$("#quoteTotali")				.val(parseFloat(fondoSel.dettagli[idx].quote)
												.toLocaleString("it-IT",{minimumFractionDigits:getNumDec(fondoSel.codicesocietagestione),
																		 maximumFractionDigits:getNumDec(fondoSel.codicesocietagestione)}));
		
		$("#controvalore")				.val(fondoSel.dettagli[idx].controvalore);
		if(string_EUR != fondoSel.tipodivisa){
			$("#controvalore")			.val(fondoSel.dettagli[idx].controvaloredivisa);
		}
		
		$("#numeroContratto")			.val(fondoSel.dettagli[idx].contratto);	//preview - cics
		$("#tipoInvestimento")			.val(fondoSel.dettagli[idx].tipo);		//preview - cics
		
		idPicPac = idx;
		datiSelect.fundOrig = fondoSel;
		
	}
}

var templatePicPac = '<div class="col-xs-12 nolabel" id="parentPicPac{{num}}">									\
						<div class="radio inline">																\
							<label class="textWrapper">															\
								<input type="radio" name="picpac" id="picpac{{num}}" value="{{numContratto}}">	\
								<span class="text" id="txtRadio{{num}}">										\
									{{txtRadio}}																\
								</span>																			\
							</label>																			\
						</div>																					\
						<div class="formGenerico borderFormRounded" style="display:{{hasPac}}">					\
							{{showDettPac1}}																	\
							{{showDettPac}}																		\
						</div>																					\
					</div>';

var templateTxtRadio =  '<strong>N.ro quote: {{quote}} ({{contravalore}} {{divisa}})</strong>					\
						 <br>{{testoPicPac}}																	\
						';

var templateDettPac = ' 																						\
																												\
							<div class="form-group">															\
								<div class="row" id="pac{{num}}">												\
									<div class="col-xs-12 col-sm-6">											\
										<label class="control-label-output">Importo rata</label>				\
										<span  class="output" id="idImportoRata{{num}}">{{importoRata}}</span>	\
									</div>																		\
									<div class="col-xs-12 col-sm-6">											\
										<label class="control-label-output">Rate residue</label>				\
										<span  class="output" id="idRateResidue{{num}}">{{rateResidue}}</span>	\
									</div>																		\
								</div>																			\
								<p class="note dettaglicampo" id="idImportoRataDiv{{num}}">{{importoRataDivisa}}</p>	\
							</div>																				\
																												\
					';

var templateDettPac1 = ' 																						\
																												\
							<div class="form-group">															\
								<div class="row" id="pac{{num}}">												\
									<div class="col-xs-12 col-sm-6">											\
										<label class="control-label-output">Investimento totale</label>			\
										<span  class="output" id="idInvTot{{num}}">{{invTotale}}</span>			\
									</div>																		\
									<div class="col-xs-12 col-sm-6">											\
										<label class="control-label-output">Rate versate</label>				\
										<span  class="output" id="idRateVersate{{num}}">{{rateVersate}}</span>	\
									</div>																		\
								</div>																			\
								<p class="note dettaglicampo" id="idInvTotDiv{{num}}">{{invTotaleDivisa}}</p>	\
							</div>																				\
																												\
					';


function prospetto(value, isin) {
	docOn |= value;
	var docType = {1:"kiid",2:"sot"};
	
	apriNewDocumenti(docType[value], isin);
	
	if(docOn==3 && !$('#checkProspetto').is(':checked')){
		$("#checkProspetto").prop("disabled",false);
	}
}

function apriNewDocumenti(tipoDocRequest, isin) {
	
	var mapForm    = document.createElement("form");
	mapForm.id	   = "formPdf"; 
	mapForm.style  = "display:none";	//apertura di PDF visualizza elementi nel footer
	mapForm.target = "_blank";
	mapForm.method = "POST"; // or "post" if appropriate
	mapForm.action = wrp_script + struts2NamespaceVal + "/ApriDocumenti.action" ;
	
	var mapInput = document.createElement("input");
	mapInput.type = "text";
	mapInput.name = "tipoDocumento";
	mapInput.value = tipoDocRequest;
	var mapInput2 = document.createElement("input");
	mapInput2.type = "text";
	mapInput2.name = "isPDF";
	mapInput2.value = "true";
	var mapInput3 = document.createElement("input");
	mapInput3.type = "text";
	mapInput3.name = "keyDocumento";
	mapInput3.value = isin;
	mapForm.appendChild(mapInput);
	mapForm.appendChild(mapInput2);
	mapForm.appendChild(mapInput3);
	mapForm.style="display:none";
	document.body.appendChild(mapForm);
	mapForm.submit();
	$("#formPdf").remove();	//apertura di PDF ogni volta aggiunge il form nel footer
	
}

function showErrorTop(show, tipo, msg, errorBox) {
	if(undefined == errorBox){
		errorBox = "errorBox"
	}
	if (!show) {
		$('#'+errorBox).hide();
	} else {
		var errorBorderClass = '';
		if ("E" == tipo) {
			$("#errorBorder").removeClass('attenzione');
			errorBorderClass = 'negativo';
		} else if ("W" == tipo) {
			errorBorderClass = 'attenzione';
			$("#errorBorder").removeClass('negativo');
		}
		$("#errorBorder").addClass(errorBorderClass);
		$("#messaggio").html(msg);
		$('#'+errorBox).show();
		window.scrollTo(0, 0);
	}
}

function getNumDec(codSoc){
	var numDec='3';
	$.each(codSocNumDec, function(i,v){
		if(codSoc==i){
			numDec=v ;return false;}
	});
	
	return parseInt(numDec);
}


function formatDecimal(number,dec){
	if(dec===undefined)
		dec = 2;
	return number.toFixed(dec).toString().replace(".", ",");
}

function verificaImporto(e) {
	if ( (e.keyCode>=48 && e.keyCode<=57)  || 	//0-9
		 (e.keyCode>=96 && e.keyCode<=105) ||	//0-9 numpad
		 (8 == e.keyCode || 127 == e.keyCode)	//bksp e Canc
	) {
		return false;
	}
		e.preventDefault();
		return true;
}


var Finance = { 
	
	tempistiche : function (tipoOp, codiceSocGestione) {
		var tipoOperazione = "Vendita";
		switch (tipoOp.toUpperCase()) {
			case "VE": tipoOperazione = "Vendita"; break;
			case "AQ": tipoOperazione = "Acquisto"; break;
			case "SW": tipoOperazione = "Switch"; break;
			case "SW_CL": tipoOperazione = "Switch - cambio classe"; break;
			case "SW_CMP": tipoOperazione = "Switch - cambio comparto"; break;
			case "SW_CL:SW_CMP": tipoOperazione = "Switch - cambio classe:Switch - cambio comparto"; break;
			default:
				tipoOP = "VE";
		}
		$.ajax({
			url: (wrp_script_direct==undefined ? wrp_invest_direct : wrp_script_direct) + struts2NamespaceVal + "/DatiTempisticheJson.action" + "?cf=" + Math.random(),
            data: { idSicav: codiceSocGestione },
   			dataType: "json",
            success: function (data) {
            			if(tipoOp != "SW_CL:SW_CMP"){
            				var calendario = data.data[tipoOp];
    						var tempi = "";
                    		for (giorno in calendario) {
                        		var indice = (giorno==0) ? "OGGI" : "+"+giorno+"GG";
                        		var dettagli = "";
                        		var stato = "stato ordine: <strong>inviato</strong>";
                        		for (operazione in calendario[giorno]) {
                            		var desc = calendario[giorno][operazione].descEvento;
                            		if (/stato\sordine/i.test(desc))
                                		stato = desc;
                            		else
                                		dettagli = dettagli+"<li>"+desc+"</li>";
                           		}
                           		tempi = tempi + Finance.Templates.dateTempistiche
                                   		.replace("{{giorno}}", indice)
                                   		.replace("{{stato}}", stato)
                                   		.replace("{{lista}}", dettagli)
        	                            .replace("{{styleMin}}", "");
                       		}
//                    		$("h2.modal-title").html(tipoOperazione);	//quando ci sono altre modal nel pagina p.e. Fondo PIR
                    		$("#modalTitle").html(tipoOperazione);
                    		$("#tempi1").html(tempi);
            			}
            			else{ 
            				tipoOpArr = tipoOp.split(":");
	                		var calendario = data.data[tipoOpArr[0]];
							var tempi = "";
	                		for (giorno in calendario) {
	                    		var indice = (giorno==0) ? "OGGI" : "+"+giorno+"GG";
	                    		var dettagli = "";
	                    		var stato = "stato ordine: <strong>inviato</strong>";
	                    		for (operazione in calendario[giorno]) {
	                        		var desc = calendario[giorno][operazione].descEvento;
	                        		if (/stato\sordine/i.test(desc))
	                            		stato = desc;
	                        		else
	                            		dettagli = dettagli+"<li>"+desc+"</li>";
	                       		}
	                       		tempi = tempi + Finance.Templates.dateTempistiche
	                               		.replace("{{giorno}}", indice)
	                               		.replace("{{stato}}", stato)
	                               		.replace("{{lista}}", dettagli)
	            	                    .replace("{{styleMin}}", "");
	                   		}
//	                		$("h2.modal-title").html("Switch");
	                		$("#modalTitle").html("Switch");
	                		$("#heading1").show(); 
	                		$("#heading1").html(tipoOperazione.split(":")[0]);
	                		$("#tempi1").html(tempi);
	                		
	                		var calendario = data.data[tipoOpArr[1]];
							var tempi = "";
	                		for (giorno in calendario) {
	                    		var indice = (giorno==0) ? "OGGI" : "+"+giorno+"GG";
	                    		var dettagli = "";
	                    		var stato = "stato ordine: <strong>inviato</strong>";
	                    		for (operazione in calendario[giorno]) {
	                        		var desc = calendario[giorno][operazione].descEvento;
	                        		if (/stato\sordine/i.test(desc))
	                            		stato = desc;
	                        		else
	                            		dettagli = dettagli+"<li>"+desc+"</li>";
	                       		}
	                       		tempi = tempi + Finance.Templates.dateTempistiche
	                               		.replace("{{giorno}}", indice)
	                               		.replace("{{stato}}", stato)
	                               		.replace("{{lista}}", dettagli)
	                               		.replace("{{styleMin}}", "");
	                   		}
	                		$("#row2").show();
	                		$("#heading2").html(tipoOperazione.split(":")[1]);
	                		$("#tempi2").html(tempi);
            			}
            		}
            //TODO
            //success - statuscode = 200 ??
            //,error: function() ??
		});
		
	},
	
	loadDepositData : function(successHandler, errorHandler) {
		if (successHandler === undefined)
			successHandler = function(){};
		if (errorHandler === undefined)
			errorHandler=function(){};
			
		$.ajax({
			url: wrp_script_direct + struts2NamespaceVal + "/ListaDepositiJson.action" + "?cf=" + Math.random(),
   			data: {},
   			dataType: "json",
   			success: [function(data) { 
   					Finance.depositData=data;
   				}
   			].concat(successHandler),
   			error: errorHandler,
   		});
		return Finance.depositData;
	},
	
	cf	: 0,	//timeout 1/4
	prova : 0,
	chiamataIsal :function(deposit, opType, successHandler, errorHandler,cf, provaNumero){
		Finance.prova = provaNumero;
		$.ajax({
			url: wrp_script_direct + struts2NamespaceVal + "/ListaFondiJson.action" + "?cf=" + cf,		//timeout 3/4
   			data: {
   				deposito: deposit,
   				type: opType
   			},
   			dataType: "json",
   			success: [function(data) { Finance.fundData=data; }].concat(successHandler),
   			error: errorHandler
//   			,timeout:9000	//timeout 4/4
		});
	},
	
	loadFundData : function(deposit, opType, successHandler, errorHandler) {
		if (successHandler === undefined)
			successHandler = function(){};
		if (errorHandler === undefined)
			errorHandler=function(){};	
		Finance.cf = Math.random();		//timeout 2/4
		Finance.prova = 1;
		Finance.chiamataIsal(deposit, opType, successHandler, errorHandler,Finance.cf,Finance.prova);
	},
	
	
//	loadFundData : function(deposit, opType, successHandler, errorHandler) {
//		if (successHandler === undefined)
//			successHandler = function(){};
//		if (errorHandler === undefined)
//			errorHandler=function(){};	
//		$.ajax({
//			url: wrp_script_direct + "/investimenti/IsalFundJson.action" + "?cf=" + Math.random(),
//   			data: {
//   				deposito: deposit,
//   				type: opType
//   			},
//   			dataType: "json",
//   			success: [function(data) { Finance.fundData=data; }].concat(successHandler),
//   			error: errorHandler
//		});
//	},
	
	//data
	depositData : {},
	fundData : {},
	
	
	//Templates
	Templates : {
		dateTempistiche : " \
			<div class=\"tempo\" style={{styleMin}}> \
				<div class=\"milestone\"><span class=\"dot\"></span>{{giorno}}</div> \
				<div class=\"contenuto\"> \
					<div class=\"titolo\">{{stato}}</div> \
					<ul>{{lista}}</ul> \
				</div> \
			</div> "
	},
	
	tempisticheSchedaFondo : function (codiceSocGestione) {

		$.ajax({
            url: wrp_script_direct + struts2NamespaceVal + "/DatiTempisticheJson.action" + "?cf=" + Math.random(),
            data: { idSicav: codiceSocGestione },
   			dataType: "json",
            success: function (data) {
            			datiTempistiche = data.data;
            			$.each(datiTempistiche, function(chiave,valore){ 
            				tipoOp = ""+chiave;
            				if("maxRows" == tipoOp || "note" == tipoOp){
            					return true;
            				}
            				switch (tipoOp.toUpperCase()) {
            				case "VE": tipoOperazione = "Vendita"; break;
            				case "AQ": tipoOperazione = "Acquisto"; break;
            				case "SW": tipoOperazione = "Switch"; break;
            				case "SW_CL": tipoOperazione = "Switch - cambio classe"; break;
            				case "SW_CMP": tipoOperazione = "Switch - cambio comparto"; break;
            				case "SW_CL:SW_CMP": tipoOperazione = "Switch - cambio classe:Switch - cambio comparto"; break;
            				default:
            					tipoOP = "VE";
            				}
            	
//            			if(tipoOp != "SW_CL:SW_CMP"){
            				var calendario = data.data[tipoOp];
    						var tempi = "";
    						infoTempistiche = calendario;
    						var styleVal = ""; 										//maxDay=-1, 
//    						$.each(infoTempistiche, function(key,value){ 
//    							if(key>maxDay){maxDay=key;} 
//    						});
                    		for (var idx=0; idx<=datiTempistiche.maxRows; idx++) {	//giorno in calendario
                    			var giorno = idx;
                        		var indice = (giorno==0) ? "OGGI" : "+"+giorno+"GG";
                        		var dettagli = "";
                        		var stato = "stato ordine: <strong>inviato</strong>";
                        		styleVal = "";
                        		if(undefined!= calendario[giorno]){ 
	                        		for (operazione in calendario[giorno]) {
	                            		var desc = calendario[giorno][operazione].descEvento;
	                            		if (/stato\sordine/i.test(desc))
	                                		stato = desc;
	                            		else{ 
	                                		dettagli = dettagli+"<li>"+desc+"</li>";
	                            		}
	                           		}
	                        		tempi = tempi + Finance.Templates.dateTempistiche
                               		.replace("{{giorno}}", indice)
                               		.replace("{{stato}}", stato)
                               		.replace("{{lista}}", dettagli)
                               		.replace("{{styleMin}}", styleVal		);
                        		}
//                        		else{
//                        			styleVal = "width:10%";
//                        			stato = "<br><br>";
//                        		}
//                           		tempi = tempi + Finance.Templates.dateTempistiche
//                                   		.replace("{{giorno}}", indice)
//                                   		.replace("{{stato}}", stato)
//                                   		.replace("{{lista}}", dettagli)
//                                   		.replace("{{styleMin}}", styleVal		);
                       		}
//                    		$("h2.modal-title").html(tipoOperazione);	//quando ci sono altre modal nel pagina p.e. Fondo PIR	
//                    		$("#modalTitle").html(tipoOperazione);
                    		if("AQ" == tipoOp.toUpperCase()){
                    			$("#tempiAcq").addClass("tempi"+Object.keys(calendario).length);
                    			$("#tempiAcq").html(tempi);
                    		}
                    		else if("VE" == tipoOp.toUpperCase()){
                    			$("#tempiVen").addClass("tempi"+Object.keys(calendario).length);
                    			$("#tempiVen").html(tempi);
                    		}
                    		else if("SW_CL" == tipoOp.toUpperCase()){
                    			$("#tempiSwitchCClass").addClass("tempi"+Object.keys(calendario).length);
                    			$("#tempiSwitchCClass").html(tempi);
                    			$("#idSwitchCClass").show();
                    			$("#idSwitch").hide();
                    		}
                    		else if("SW_CMP" == tipoOp.toUpperCase()){
                    			$("#tempiSwitchCComp").addClass("tempi"+Object.keys(calendario).length);
                    			$("#tempiSwitchCComp").html(tempi);
                    			$("#idSwitchCComp").show();
                    			$("#idSwitch").hide();
                    		}
                    		else if("SW" == tipoOp.toUpperCase()){
                    			$("#tempiSwitch").addClass("tempi"+Object.keys(calendario).length);
                    			$("#tempiSwitch").html(tempi);
                    			$("#idSwitch").show();
                    			$("#idSwitchCClass,#idSwitchCComp").hide();
                    		}
//            			}
            			
            			});
            			$("#idSFTempNote").hide(); 
            			
            			if(undefined!=datiTempistiche.note && ""!=datiTempistiche.note){
            				$("#idSFTempNote").html($.parseJSON(datiTempistiche.note));
            				$("#idSFTempNote").show();
            			}
            }
            //TODO
            //success - statuscode = 200 ??
            //,error: function() ??
		});
		
	}
};

function showDatiMifid2_tab8(datiMifid) { 
	
	//IE non scarica PDF perche lunghezza è troppo
//	var datiMifidTemp = Object.assign({},datiMifid);
//	for(var idx=0; idx<datiMifidTemp.datiCostiServizio.length; idx++){
//		delete datiMifidTemp.datiCostiServizio[idx].descCostiServizio;
//	}
//	for(var idx=0; idx<datiMifidTemp.datiCostiAnnuale.length; idx++){
//		delete datiMifidTemp.datiCostiAnnuale[idx].descCostiAnnuale;
//	}
//	for(var idx=0; idx<datiMifidTemp.datiIncentiviAnnuale.length; idx++){
//		delete datiMifidTemp.datiIncentiviAnnuale[idx].descIncentiviAnnuale;
//	}
//	for(var idx=0; idx<datiMifidTemp.datiControvaloreLordo.length; idx++){
//		delete datiMifidTemp.datiControvaloreLordo[idx].descControvaloreLordo;
//	}
	
	datiMifidPdfInv = JSON.stringify(datiMifid).replace(/&euro;/g,'').replace(/&#37;/,'');   
	caricaTabellaMifid(datiMifid,"SOT");
	
	   $('#strumentoFinanziarioInv').text(datiMifid.strumentoFinanziario);
	   $('#controvaloreOperazioneInv').html(datiMifid.controvaloreOperazione);
	   
	   var colonneTabCostiServizio = [
							{
								field   : 'descCostiServizio',
								title   : 'Costi e oneri del servizio',
								'class'	: 'left'
							},
							{
								field   : 'importoCostiServizio',
								title   : 'Valore &euro;', 
								'class'	: 'right'
							},
							{
								field   : 'percentualeCostiServizio',
								title   : 'Valore &#37;',
								'class'	: 'right'
							}
						  ];
	
	   //$('#tableCostiServizio').bootstrapTable("destroy");
	   $('#tableCostiServizio').bootstrapTable({
									data	 : {}, //datiMifid.datiCostiServizio,
									columns	 : colonneTabCostiServizio,
									rowStyle : function(row, index) {
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
												},
									onPostBody : function(){
										if($('#tableCostiServizio').html().indexOf("tfoot") == -1){
											$('#tableCostiServizio').html($('#tableCostiServizio').html() + '<tfoot><tr class="totali">'
													  + '          <td class="left">Totale</td>'
													  + '		   <td class="right" id="totaleImportoCostiServizio"></td>'
													  + '		   <td class="right" id="totalePercentualeCostiServizio"></td>'
													  + '		</tr>'
													  + '</tfoot>');
										}
										
									}
	   });
	   $('#tableCostiServizio').bootstrapTable('load', datiMifid.datiCostiServizio);
	   
	   $('#totaleImportoCostiServizio').html(datiMifid.totaleImportoCostiServizio);
	   $('#totalePercentualeCostiServizio').html(datiMifid.totalePercentualeCostiServizio);
	
	   
	   var colonneTabCostiAnnuale = [
								{
									field : 'descCostiAnnuale',
									title : 'Costi e oneri su base annuale',
									'class'	: 'left'
								},
								{
									field : 'importoCostiAnnuale',
									title : 'Valore &euro;',  //&#8364;
									'class'	: 'right'
								},
								{
									field : 'percentualeCostiAnnuale',
									title : 'Valore &#37;',
									'class'	: 'right'
								}
							  ];
	   
//	   $('#tableCostiAnnuale').bootstrapTable("destroy");
	   $('#tableCostiAnnuale').bootstrapTable({
					data	 : {},
					columns	 : colonneTabCostiAnnuale,
					rowStyle : function(row, index) {
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
	   $('#tableCostiAnnuale').bootstrapTable('load', datiMifid.datiCostiAnnuale);  
	   
	var colonneTabIncentiviAnnuale = [
								{
									field : 'descIncentiviAnnuale',
									title : 'Incentivi su base annuale',
									'class'	: 'left'
								},
								{
									field : 'importoIncentiviAnnuale',
									title : 'Valore &euro;',  //&#8364;
									'class'	: 'right'
								},
								{
									field : 'percentualeIncentiviAnnuale',
									title : 'Valore &#37;',
									'class'	: 'right'
								}
							  ];
	
//	$('#tableIncentiviAnnuale').bootstrapTable("destroy");
	   $('#tableIncentiviAnnuale').bootstrapTable({
										data	 : datiMifid.datiIncentiviAnnuale,
										columns	 : colonneTabIncentiviAnnuale,
										rowStyle : function(row, index) {
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
													},
										onPostBody : function(){
											if($('#tableIncentiviAnnuale').html().indexOf("tfoot") == -1){
												$('#tableIncentiviAnnuale').html($('#tableIncentiviAnnuale').html() + '<tfoot><tr class="totali">'
																								  + '          <td class="left">Totale</td>'
																								  + '		   <td class="right" id="totaleImportoIncentiviAnnuale"></td>'
																								  + '		   <td class="right" id="totalePercentualeIncentiviAnnuale"></td>'
																								  + '		</tr>'
																								  + '</tfoot>');
											}
										}			
								});
	   $('#tableIncentiviAnnuale').bootstrapTable('load', datiMifid.datiIncentiviAnnuale);  
	   
	   $('#totaleImportoIncentiviAnnuale').html(datiMifid.totaleImportoIncentiviAnnuale);
	   $('#totalePercentualeIncentiviAnnuale').html(datiMifid.totalePercentualeIncentiviAnnuale);
		
	   
	   var colonneTabControvaloreLordo = [
			{
				field : 'descControvaloreLordo',
				title : 'Controvalore lordo investito',
				'class'	: 'left'
			},
			{
				field : 'importoControvaloreLordo',
				title : datiMifid.importoControvaloreLordo,  //&#8364;
				'class'	: 'right'
			},
			{
				field : 'percentualeControvaloreLordo',
				title : datiMifid.percentualeControvaloreLordo,
				'class'	: 'right'
			}
		  ];

//	   $('#tableControvaloreLordo').bootstrapTable("destroy");
		$('#tableControvaloreLordo').bootstrapTable({
							data	 : {},
							columns	 : colonneTabControvaloreLordo,
							rowStyle : function(row, index) {
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
							/*
							,onPostBody : function(){
								if($('#tableControvaloreLordo').html().indexOf("tfoot") == -1){
									$('#tableControvaloreLordo').html($('#tableControvaloreLordo').html() + '<tfoot><tr class="totali">'
																					  + '          <td class="left">Totale</td>'
																					  + '		   <td class="right" id="totaleImportoControvaloreLordo"></td>'
																					  + '		   <td class="right" id="totalePercentualeControvaloreLordo"></td>'
																					  + '		</tr>'
																					  + '</tfoot>');
								}
							}
							*/
					});
		$('#tableControvaloreLordo').bootstrapTable('load', datiMifid.datiControvaloreLordo);
		$('#tableControvaloreLordo tr:eq(0) th:eq(1)').html(datiMifid.importoControvaloreLordo);	//se importo e' modificato 
		
		$('#totaleImportoControvaloreLordo').html(datiMifid.totaleImportoControvaloreLordo);
		$('#totalePercentualeControvaloreLordo').html(datiMifid.totalePercentualeControvaloreLordo);

	   
	   $("#mifid2Tabella8").show();		
	   initTooltip(); //funzione di libreria per visualizzare Tooltip
}

function showDatiMifid2_tab9(datiMifid) { 
	
	 $('#strumentoFinanziario').text(datiMifid.strumentoFinanziario);
	 $('#controvaloreOperazione').html(datiMifid.controvaloreOperazione);

	 datiMifidPdfDisInv = JSON.stringify(datiMifid).replace(/&euro;/g,'').replace(/&#37;/,'');
	 caricaTabellaMifid(datiMifid, "RIM");
	   
	   var colonneTabCosti = [
							{
								field   : 'descCostiAnnuale',
								title   : 'Costi e oneri su base annuale',
								'class'	: 'left'
							},
							{
								field   : 'importoCostiAnnuale',
								title   : 'Valore &euro;',  //&#8364;
								'class'	: 'right'
							},
							{
								field   : 'percentualeCostiAnnuale',
								title   : 'Valore &#37;',
								'class'	: 'right'
							}
						  ];
	
//	   $('#tableCosti').bootstrapTable("destroy");
	   $('#tableCosti').bootstrapTable({
									data	 : {},
									columns	 : colonneTabCosti,
									rowStyle : function(row, index) {
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
												},
									onPostBody : function(){
										if($('#tableCosti').html().indexOf("tfoot") == -1){
											$('#tableCosti').html($('#tableCosti').html() + '<tfoot><tr class="totali">'
																					  + '          <td class="left">Totale</td>'
																					  + '		   <td class="right" id="totaleImportoCosti"></td>'
																					  + '		   <td class="right" id="totalePercentualeCosti"></td>'
																					  + '		</tr>'
																					  + '</tfoot>');
										}
									}		
	   });
	   $('#tableCosti').bootstrapTable('load', datiMifid.datiCostiAnnuale);
	   
	   $('#totaleImportoCosti').html(datiMifid.totaleImportoCosti);
	   $('#totalePercentualeCosti').html(datiMifid.totalePercentualeCosti);
	
	   var colonneTabIncentivi = [
								{
									field : 'descIncentiviAnnuale',
									title : 'Incentivi su base annuale',
									'class'	: 'left'
								},
								{
									field : 'importoIncentiviAnnuale',
									title : 'Valore &euro;',  //&#8364;
									'class'	: 'right'
								},
								{
									field : 'percentualeIncentiviAnnuale',
									title : 'Valore &#37;',
									'class'	: 'right'
								}
							  ];
	
//	   $('#tableIncentivi').bootstrapTable("destroy");
	   $('#tableIncentivi').bootstrapTable({
										data	 : {},
										columns	 : colonneTabIncentivi,
										rowStyle : function(row, index) {
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
													},
										onPostBody : function(){
											if($('#tableIncentivi').html().indexOf("tfoot") == -1){
												$('#tableIncentivi').html($('#tableIncentivi').html() + '<tfoot><tr class="totali">'
																								  + '          <td class="left">Totale</td>'
																								  + '		   <td class="right" id="totaleImportoIncentivi"></td>'
																								  + '		   <td class="right" id="totalePercentualeIncentivi"></td>'
																								  + '		</tr>'
																								  + '</tfoot>');
											}
										}			
								});
	   $('#tableIncentivi').bootstrapTable('load', datiMifid.datiIncentiviAnnuale);
	   
	   $('#totaleImportoIncentivi').html(datiMifid.totaleImportoIncentiviAnnuale);
	   $('#totalePercentualeIncentivi').html(datiMifid.totalePercentualeIncentiviAnnuale);
								
	   $("#mifid2Tabella9").show();		
	   initTooltip();	//funzione di libreria per visualizzare Tooltip
}


function caricaTabellaMifid(datiMifid, tipo){
	
	var importoCostiServizio = "", percentualeCostiServizio = "", percentualeIncentiviAnnuale = "",importoCostiAnnuale="", importoCosti="";

	
	if(tipo == "SOT"){
		var tooltipPrefisso = "<span class=\"txthelp\"><strong class=\"closeable\" data-title=\"tooltip_testo\" data-toggle=\"tooltip\" data-original-title=\"\" title=\"\">";
		var tooltiSuffisso = "</strong></span>";
		
		var tooltipCostiServizioSpeseOpr =  "Nel caso di <b>sottoscrizione di un Comparto di SICAV</b> questa voce comprende il <b>Diritto fisso</b> d'intervento applicato " +
											"dal Soggetto Incaricato dei Pagamenti in misura fissa per singola operazione. <br>" +
											"I costi indicati sono applicati e prelevati direttamente sul controvalore investito.";
		
		var tooltipCostiProdottoSpeseTantum = 	"Questa voce comprende sia le <b>Commissioni d'ingresso</b> che il <b>Diritto fisso</b> " +
												"(spesa d'intervento della SGR o del Soggetto Incaricato dei Pagamenti - SIP - per le SICAV)." +
												"<br>" +
												"I costi indicati sono applicati e prelevati " +
												"<b>per operazione</b> direttamente sul controvalore investito, in misura percentuale nel caso delle commissioni d'ingresso " +
												"e in misura fissa nel caso del diritto fisso.";
		
		var tooltipCostiProdottoSpeseCorr =	"Questa voce comprende sia la <b>Commissione di Gestione annuale</b> " +
											"(pu&#242; ricomprendere anche una Commissione di Distribuzione laddove previsto dal Prospetto) " + 
											"che gli <b>Oneri Amministrativi</b> sostenuti dal Fondo/SICAV, " +
											"come esposti e definiti nel KIID e nel Prospetto Informativo.<br> " +
											"I costi indicati sono annuali e sono sostenuti dal sottoscrittore " +
											"in forma indiretta sul NAV giornaliero/settimanale del Fondo/Comparto, gi&#224; pubblicato al netto delle suddette spese.";
		
		var tooltipCostiProdottoSpeseOpr = 	"Questa voce comprende tutti i costi sostenuti dal Fondo/Comparto per la movimentazione dello stesso " +
							    			"(ad es. acquisto e vendita di strumenti finanziari, commissioni  di intermediazione, etc.)." +
							    			"<br>" +
							    			"I costi indicati sono annuali e sono sostenuti dal sottoscrittore in forma indiretta sul NAV giornaliero/settimanale del Fondo/Comparto, " +
							    			"gi&#224; pubblicato al netto delle suddette spese.";
		
		var tooltipCostiProdottoCostiAcc = 	"Questa voce comprende le <b>Commissioni di Performance</b> " +
											"legate al rendimento del Fondo/SICAV, calcolate dalla Casa di Gestione secondo le modalit&#224; indicate nel prospetto informativo." +
											"<br>" +
											"I costi indicati sono annuali e sono sostenuti dal sottoscrittore in forma indiretta sul NAV giornaliero/settimanale del Fondo/Comparto, " +
											"gi&#224; pubblicato al netto delle suddette spese.";
		
		for(var idx=0; idx<datiMifid.datiCostiServizio.length; idx++){
			
			datiMifid.datiCostiServizio[idx].descCostiServizio			= datiMifid.datiCostiServizio[idx].descCostiServizio.toLowerCase();
			datiMifid.datiCostiServizio[idx].descCostiServizio			= datiMifid.datiCostiServizio[idx].descCostiServizio.charAt(0).toUpperCase() + datiMifid.datiCostiServizio[idx].descCostiServizio.slice(1);
			
			datiMifid.datiCostiServizio[idx].importoCostiServizio		= parseFloat(datiMifid.datiCostiServizio[idx].importoCostiServizio)		.toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &euro;";
			datiMifid.datiCostiServizio[idx].percentualeCostiServizio	= parseFloat(datiMifid.datiCostiServizio[idx].percentualeCostiServizio)	.toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &#37;";
			if(idx == 0 || idx == 6){
				datiMifid.datiCostiServizio[idx].descCostiServizio			= "<b>" + datiMifid.datiCostiServizio[idx].descCostiServizio 		+ "</b>";
				datiMifid.datiCostiServizio[idx].importoCostiServizio		= "<b>" + datiMifid.datiCostiServizio[idx].importoCostiServizio 	+ "</b>";
				datiMifid.datiCostiServizio[idx].percentualeCostiServizio	= "<b>" + datiMifid.datiCostiServizio[idx].percentualeCostiServizio + "</b>";
			}
			else if(idx == 7){
				datiMifid.datiCostiServizio[idx].descCostiServizio			= tooltipPrefisso.replace("tooltip_testo",tooltipCostiProdottoSpeseTantum) + datiMifid.datiCostiServizio[idx].descCostiServizio + tooltiSuffisso;
			}
			else if(idx == 8){
				datiMifid.datiCostiServizio[idx].descCostiServizio			= tooltipPrefisso.replace("tooltip_testo",tooltipCostiProdottoSpeseCorr) + datiMifid.datiCostiServizio[idx].descCostiServizio + tooltiSuffisso;
			}
			else if(idx == 9){
				datiMifid.datiCostiServizio[idx].descCostiServizio			= tooltipPrefisso.replace("tooltip_testo",tooltipCostiProdottoSpeseOpr) + datiMifid.datiCostiServizio[idx].descCostiServizio + tooltiSuffisso;
			}
			else if(idx == 10){
				datiMifid.datiCostiServizio[idx].descCostiServizio			= tooltipPrefisso.replace("tooltip_testo",tooltipCostiProdottoCostiAcc) + datiMifid.datiCostiServizio[idx].descCostiServizio + tooltiSuffisso;
			}
		}
		datiMifid.totaleImportoCostiServizio							= parseFloat(datiMifid.totaleImportoCostiServizio)					 .toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &euro;";
		datiMifid.totalePercentualeCostiServizio						= parseFloat(datiMifid.totalePercentualeCostiServizio)				 .toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &#37;";
		
		
		var tooltipCostiSpeseUscita = "Le commissioni di uscita esposte sono le massime applicabili in caso di uscita dall'investimento durante il primo anno se previsto " +
									  "nel KIID e applicate dall'Intermediario.";
		
		var servizioCostiAnnuale = {descCostiAnnuale:"<b>Costi del servizio</b>"			,importoCostiAnnuale:""					,percentualeCostiAnnuale:""};
		var prodottoCostiAnnuale = {descCostiAnnuale:"<b>Costi del prodotto</b>"			,importoCostiAnnuale:""					,percentualeCostiAnnuale:""};
		datiMifid.datiCostiAnnuale.splice(0,0,servizioCostiAnnuale);
		datiMifid.datiCostiAnnuale.splice(2,0,prodottoCostiAnnuale);
		for(var idx=0; idx<datiMifid.datiCostiAnnuale.length; idx++){
			
			if(idx%2 != 0){
				datiMifid.datiCostiAnnuale[idx].descCostiAnnuale			= datiMifid.datiCostiAnnuale[idx].descCostiAnnuale.toLowerCase();
				datiMifid.datiCostiAnnuale[idx].descCostiAnnuale			= datiMifid.datiCostiAnnuale[idx].descCostiAnnuale.charAt(0).toUpperCase() + datiMifid.datiCostiAnnuale[idx].descCostiAnnuale.slice(1);
				datiMifid.datiCostiAnnuale[idx].descCostiAnnuale		= tooltipPrefisso.replace("tooltip_testo",tooltipCostiSpeseUscita) + datiMifid.datiCostiAnnuale[idx].descCostiAnnuale + tooltiSuffisso; 		// + "&#42";
				datiMifid.datiCostiAnnuale[idx].importoCostiAnnuale		= parseFloat(datiMifid.datiCostiAnnuale[idx].importoCostiAnnuale)		.toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &euro;";
				datiMifid.datiCostiAnnuale[idx].percentualeCostiAnnuale	= parseFloat(datiMifid.datiCostiAnnuale[idx].percentualeCostiAnnuale)	.toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &#37;";
			}
		}
		
		datiMifid.totaleImportoIncentiviAnnuale							= parseFloat(datiMifid.totaleImportoIncentiviAnnuale)					 .toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &euro;";
		datiMifid.totalePercentualeIncentiviAnnuale						= parseFloat(datiMifid.totalePercentualeIncentiviAnnuale)				 .toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &#37;";
		
		var tooltipIncentiviTantum = "Questa voce comprende le retrocessioni riconosciute una tantum dalla Casa di Gestione all'Intermediario sulla Commissione d'Ingresso e sulla Commissione di uscita, laddove previste e se applicate.";
		var tooltipIncentiviRicorrenti = "Questa voce comprende le retrocessioni riconosciute dalla Casa di Gestione all'Intermediario sulla Commissione di Gestione annuale " +
										"(pu&#242; ricomprendere anche una Commissione di Distribuzione laddove previsto dal Prospetto).";
		for(var idx=0; idx<datiMifid.datiIncentiviAnnuale.length; idx++){
			datiMifid.datiIncentiviAnnuale[idx].importoIncentiviAnnuale		= parseFloat(datiMifid.datiIncentiviAnnuale[idx].importoIncentiviAnnuale).toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &euro;";
			datiMifid.datiIncentiviAnnuale[idx].percentualeIncentiviAnnuale	= parseFloat(datiMifid.datiIncentiviAnnuale[idx].percentualeIncentiviAnnuale).toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &#37;";
			
			if(idx==0){
				datiMifid.datiIncentiviAnnuale[idx].descIncentiviAnnuale	= tooltipPrefisso.replace("tooltip_testo",tooltipIncentiviTantum) + datiMifid.datiIncentiviAnnuale[idx].descIncentiviAnnuale + tooltiSuffisso;
			}
			else{
				datiMifid.datiIncentiviAnnuale[idx].descIncentiviAnnuale	= tooltipPrefisso.replace("tooltip_testo",tooltipIncentiviRicorrenti) + datiMifid.datiIncentiviAnnuale[idx].descIncentiviAnnuale + tooltiSuffisso;
			}
		}
		
		var tooltipControvaloreLordo = "Le commissioni di uscita esposte sono le massime applicabili in caso di uscita dall'investimento durante il primo anno se previsto  "+
									   "nel KIID e applicate dall'Intermediario.";
		for(var idx=0; idx<datiMifid.datiControvaloreLordo.length; idx++){
			
			datiMifid.totaleImportoControvaloreLordo						= datiMifid.totaleImportoControvaloreLordo + parseFloat(datiMifid.datiControvaloreLordo[idx].importoControvaloreLordo);
			datiMifid.totalePercentualeControvaloreLordo					= datiMifid.totalePercentualeControvaloreLordo + parseFloat(datiMifid.datiControvaloreLordo[idx].percentualeControvaloreLordo) ;
			if(idx == 0){
				datiMifid.datiControvaloreLordo[idx].descControvaloreLordo			= tooltipPrefisso.replace("tooltip_testo",tooltipControvaloreLordo) + datiMifid.datiControvaloreLordo[idx].descControvaloreLordo + tooltiSuffisso; 		// + "&#42";
			}
			if(parseFloat(datiMifid.datiControvaloreLordo[idx].importoControvaloreLordo) == 0){
				datiMifid.datiControvaloreLordo[idx].importoControvaloreLordo		= "&#8208;" + parseFloat(datiMifid.datiControvaloreLordo[idx].importoControvaloreLordo).toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &euro;";
				datiMifid.datiControvaloreLordo[idx].percentualeControvaloreLordo	= "&#8208;" + parseFloat(datiMifid.datiControvaloreLordo[idx].percentualeControvaloreLordo).toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &#37;";
			}
			else{
				datiMifid.datiControvaloreLordo[idx].importoControvaloreLordo		= parseFloat(datiMifid.datiControvaloreLordo[idx].importoControvaloreLordo).toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &euro;";
				datiMifid.datiControvaloreLordo[idx].percentualeControvaloreLordo	= parseFloat(datiMifid.datiControvaloreLordo[idx].percentualeControvaloreLordo).toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &#37;";
			}
		}
		
		datiMifid.totaleImportoControvaloreLordo						= parseFloat(datiMifid.totaleImportoControvaloreLordo)					 .toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &euro;";
		datiMifid.totalePercentualeControvaloreLordo					= parseFloat(datiMifid.totalePercentualeControvaloreLordo)				 .toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &#37;";
		
		
		
	}
	else if(tipo == "RIM"){
		var tooltipPrefisso = "<span class=\"txthelp\"><strong class=\"closeable\" data-title=\"tooltip_testo\" data-toggle=\"tooltip\" data-original-title=\"\" title=\"\">";
		var tooltiSuffisso = "</strong></span>";
		
		var tooltipCostiSpeseUscita = "Le commissioni di uscita esposte sono le massime applicabili in caso di uscita dall'investimento durante il primo anno se previsto " +
		  							  "nel KIID e applicate dall'Intermediario.";
		var tooltipIncentiviTantum 		= "Questa voce comprende le retrocessioni riconosciute una tantum dalla Casa di Gestione all'Intermediario sulla Commissione d'Ingresso e sulla Commissione di uscita, laddove previste e se applicate.";
		var tooltipIncentiviRicorrenti = "Questa voce comprende le retrocessioni riconosciute dalla Casa di Gestione all'Intermediario sulla Commissione di Gestione annuale " +
										"(pu&#242; ricomprendere anche una Commissione di Distribuzione laddove previsto dal Prospetto).";
		
		var servizioCostiAnnuale = {descCostiAnnuale:"<b>Costi del servizio</b>"			,importoCostiAnnuale:""					,percentualeCostiAnnuale:""};
		var prodottoCostiAnnuale = {descCostiAnnuale:"<b>Costi del prodotto</b>"			,importoCostiAnnuale:""					,percentualeCostiAnnuale:""};
		datiMifid.datiCostiAnnuale.splice(0,0,servizioCostiAnnuale);
		datiMifid.datiCostiAnnuale.splice(2,0,prodottoCostiAnnuale);
		for(var idx=0; idx<datiMifid.datiCostiAnnuale.length; idx++){
			
			datiMifid.datiCostiAnnuale[idx].descCostiAnnuale			= datiMifid.datiCostiAnnuale[idx].descCostiAnnuale.toLowerCase();
			datiMifid.datiCostiAnnuale[idx].descCostiAnnuale			= datiMifid.datiCostiAnnuale[idx].descCostiAnnuale.charAt(0).toUpperCase() + datiMifid.datiCostiAnnuale[idx].descCostiAnnuale.slice(1);
			if(idx%2 != 0){
				datiMifid.datiCostiAnnuale[idx].descCostiAnnuale		= tooltipPrefisso.replace("tooltip_testo",tooltipCostiSpeseUscita) + datiMifid.datiCostiAnnuale[idx].descCostiAnnuale + tooltiSuffisso; 		// + "&#42";
				datiMifid.datiCostiAnnuale[idx].importoCostiAnnuale		= parseFloat(datiMifid.datiCostiAnnuale[idx].importoCostiAnnuale)		.toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &euro;";
				datiMifid.datiCostiAnnuale[idx].percentualeCostiAnnuale	= parseFloat(datiMifid.datiCostiAnnuale[idx].percentualeCostiAnnuale)	.toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &#37;";
			}
		}
		datiMifid.totaleImportoCosti							= parseFloat(datiMifid.totaleImportoCosti)					 .toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &euro;";
		datiMifid.totalePercentualeCosti						= parseFloat(datiMifid.totalePercentualeCosti)				 .toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &#37;";
				
		for(var idx=0; idx<datiMifid.datiIncentiviAnnuale.length; idx++){
			if(idx==0){
				datiMifid.datiIncentiviAnnuale[idx].descIncentiviAnnuale	= tooltipPrefisso.replace("tooltip_testo",tooltipIncentiviTantum) + datiMifid.datiIncentiviAnnuale[idx].descIncentiviAnnuale + tooltiSuffisso;
			}
			else{
				datiMifid.datiIncentiviAnnuale[idx].descIncentiviAnnuale	= tooltipPrefisso.replace("tooltip_testo",tooltipIncentiviRicorrenti) + datiMifid.datiIncentiviAnnuale[idx].descIncentiviAnnuale + tooltiSuffisso;
			}
			datiMifid.datiIncentiviAnnuale[idx].importoIncentiviAnnuale		= parseFloat(datiMifid.datiIncentiviAnnuale[idx].importoIncentiviAnnuale).toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &euro;";
			datiMifid.datiIncentiviAnnuale[idx].percentualeIncentiviAnnuale	= parseFloat(datiMifid.datiIncentiviAnnuale[idx].percentualeIncentiviAnnuale).toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &#37;";
		}
		datiMifid.totaleImportoIncentiviAnnuale							= parseFloat(datiMifid.totaleImportoIncentiviAnnuale)					 .toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &euro;";
		datiMifid.totalePercentualeIncentiviAnnuale						= parseFloat(datiMifid.totalePercentualeIncentiviAnnuale)				 .toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2}) + " &#37;";
		
	}
}

function bindEvent(selector, eventAction, bindFunction) {
	$(selector).on(eventAction,bindFunction);
	$(selector).removeAttr('disabled');
}


function unbindEvent(selector,eventAction) {
	$(selector).off(eventAction);
	$(selector).attr("disabled","disabled");
}


function iHistoryBackDisable() {
	
	history.pushState(null, null, document.URL);
	window.addEventListener('popstate', function () {
	    history.pushState(null, null, document.URL);
	});
	
}

