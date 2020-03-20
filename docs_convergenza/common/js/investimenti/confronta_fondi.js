
var datiFondi = {}, datiFondo={}, fondo={}, dati_confronta={};
var datiTabellaConfronta = [], datiTabellaRendRischio=[], datiTabellaCosti=[], datiTabellaComposizione = [], datiTabellaArea=[], datiTabellaSett=[];
var data_asset1=[], data_asset2=[];
var codFidaArray =[];
//fesConfCont = $("#fesConfrontaCont");

function ret_invest_confronta_fondi(inputData){	//priv_fes_ricera_resp.js
	
	$('#tableAreaGeo0,#tableAreaGeo1,#tableDistSett0,#tableDistSett1,#noteRicerca').hide();
	$("#idSezioneGrafico,#idSezioneTableConfronta,#idSezioneAccordion").addClass("loading");
	
	var fesConfContHtml = caricaFesConfCont(inputData);
	$("#idSezioneGrafico").before(fesConfContHtml);
	initTooltip();
	
	$("#fesConfrontaCont,#idSezioneGrafico,#idSezioneTableConfronta,#idSezioneAccordion,#noteRicerca").show();
	$("#idSezioneGrafico,#idSezioneTableConfronta,#idSezioneAccordion").removeClass("loading");
	
}

function caricaFesConfCont(inputData){
	var fesConfContHtml = "", divShowTestoVal = "", showTestoConfronta="", divInfoFondoVal = "", altroFondoCodFida= "";
	var hrefChiudo  = "", showChiudo = "";
	var imgSrc = "", imgTitle = "", showImgFondo = "", showNomeFondo = "", hrefSchedaFondo="";
	var hrefLinkConBV = "", showLinkConBV = "";
	var showWithBest = "", testoWithBest = "", iconaBest="";
	var toolTipTitle = "", showToolTip = "", showTesto="";	//TODO tooltip per confronta
	
	fesConfContHtml += ("<div class=\"row\"> ");
	
	codFidaArray = inputData.codFida.split("\|");
	if(codFidaArray.length>1){
		showTestoConfronta = "display:block";
	}
	else{
		showTestoConfronta = "display:none";
	}
	divShowTestoVal = divTxtConfronta.replace("showTestoConfronta",showTestoConfronta);
	fesConfContHtml += divShowTestoVal;
	fesConfContHtml += divTabConfFondiPre;
	
	datiFondi = $.parseJSON(datiFondiStr);	//da ConfrontaFondi.jsp
	if(undefined == datiFondi){
		showError(true, "E", "l'operazione di Confronta fondi non &egrave; possibile al momento");
		return "";
	}
	
	for(var idx=0; idx < 2 ; idx++){
		divInfoFondoVal = divInfoFondo.replace(/{{index}}/g, idx);
		
		if(codFidaArray[idx]!=undefined){
			datiFondo = datiFondi[codFidaArray[idx]];
			fondo = $.parseJSON(datiFondo.fondo);
			
			if(codFidaArray.length>1){
				altroFondoCodFida = $.parseJSON(datiFondi[codFidaArray[idx^1]].fondo).codFida;
				altroFondoCodFida= altroFondoCodFida.replace("$","&#36;");
				hrefChiudo = "javascript:fesNewConf('" + altroFondoCodFida + "'"+ ",false);";
				showChiudo = "display:block";
			}
			else{
				hrefChiudo = "javascript:;";
				showChiudo = "display:none";
			}
			
			imgSrc	= (fondo.pathImgGruppo.indexOf("common")<0?"/common":"") + fondo.pathImgGruppo;
			imgTitle = fondo.nomeFondo;
			showImgFondo = "display:block";
			showNomeFondo = "display:block";
			
			fondo.codFida= fondo.codFida.replace("$","&#36;");			//non funziona se ci sono simboli speciali
			if(undefined!=datiFondo.bestFund){
				datiFondo.bestFund= datiFondo.bestFund.replace("$","&#36;");
			}
			
			
			hrefSchedaFondo = "javascript:fesFondoShow({   'codicesocieta'	: '" + fondo.codSocietaComparti + 
														"', 'codicecomparto': '" + fondo.ccmp + 
														"', 'divisa'		: '" + fondo.valutaRif +
														"', 'fondosicav'	: '" + fondo.fondiSicav +
														"','codicefida'		: '"  + fondo.codFida + "'});" ;
			
			if(datiFondo.wBest){	//confronta fondi ma non con migliore  della categoria
				if(datiFondo.linkConBV){	//confronta con migliore fondo
					hrefLinkConBV 	= "javascript:fesNewConf('" + fondo.codFida + "|" + datiFondo.bestFund + "'"+ ",true);";
					showLinkConBV 	= "display:block";
					showWithBest 	= "display:none";
					testoWithBest 	= "";
					iconaBest 		= "display:none";
					toolTipTitle 	= toolTipWithBest;
					showToolTip 	= "display:block";
				}
				else{	//fondo selezionta è migliore della categoria (selezionata da pagina ricerca e non tramite confronta del pagina di confronta)
					hrefLinkConBV 	= "javascript:;";
					showLinkConBV 	= "display:none";
					showWithBest 	= "display:block";
					testoWithBest 	= testoFondoBest;
					iconaBest 		= "display:block";
					toolTipTitle 	= toolTipBest;
					showToolTip 	= "display:block";
				}
			}
			else{ 	//migliore fondo
				if(1 == idx){
					hrefLinkConBV 	= "javascript:;";
					showLinkConBV 	= "display:none";
					showWithBest 	= "display:block";
					testoWithBest 	= testoFondoBest;
					iconaBest 		= "display:block";
					toolTipTitle 	= toolTipBest;
					showToolTip 	= "display:block";
				}
				else{ //non da visualizzare dati per confrontare con migliore fondo nel colonna 1 perchè colonna 2 è gia il milore fondo 
					hrefLinkConBV 	= "javascript:;";
					showLinkConBV 	= "display:none";
					showWithBest 	= "display:none";
					testoWithBest 	= "";
					iconaBest 		= "display:none";
					toolTipTitle 	= "";
					showToolTip 	= "display:none";
				}	
			}
			showTesto		= "display:none";
		}	
		else{	//solo un fondo selezionato, quindi colonna 2 deve essere vuota con solo testo
			hrefChiudo 		= "javascript:";
			showChiudo 		= "display:none";
			imgSrc			= "";
			imgTitle 		= "";
			showImgFondo 	= "display:none";
			showNomeFondo 	= "display:none";
			hrefSchedaFondo = "javascript:";
			hrefLinkConBV 	= "javascript:";
			showLinkConBV 	= "display:none";
			showWithBest 	= "display:none";
			iconaBest 		= "display:none";
			testoWithBest 	= "Seleziona un'altro fondo dalla pagina di ricerca";
			if(datiFondi[codFidaArray[idx^1]].linkConBV){
				testoWithBest += " oppure confronta con il miglior fondo della categoria";
			}
			toolTipTitle 	= "";
			showToolTip 	= "display:none";
			showTesto		= "display:block";
		}
			
		divInfoFondoVal = divInfoFondoVal.replace("hrefChiudo_"		+ idx, hrefChiudo);
		divInfoFondoVal = divInfoFondoVal.replace("showChiudo_"		+ idx, showChiudo);
		
		divInfoFondoVal = divInfoFondoVal.replace("imgSrc_"			+ idx, imgSrc);
		divInfoFondoVal = divInfoFondoVal.replace("imgTitle_"		+ idx, imgTitle);
		divInfoFondoVal = divInfoFondoVal.replace("showImgFondo_"	+ idx, showImgFondo);
		
		divInfoFondoVal = divInfoFondoVal.replace("nomeFondo_"		+ idx, imgTitle);
		divInfoFondoVal = divInfoFondoVal.replace("hrefSchedaFondo_"+ idx, hrefSchedaFondo);  
		divInfoFondoVal = divInfoFondoVal.replace("showNomeFondo_"	+ idx, showNomeFondo);
		
		divInfoFondoVal = divInfoFondoVal.replace("hrefLinkConBV_"	+ idx, hrefLinkConBV);
		divInfoFondoVal = divInfoFondoVal.replace("showLinkConBV_"	+ idx, showLinkConBV);
		
		divInfoFondoVal = divInfoFondoVal.replace("showWithBest_"	+ idx, showWithBest);
		divInfoFondoVal = divInfoFondoVal.replace("testoWithBest_"	+ idx, testoWithBest);
		divInfoFondoVal = divInfoFondoVal.replace("iconaBest_"		+ idx, iconaBest);
		
		divInfoFondoVal = divInfoFondoVal.replace("toolTipTitle_"	+ idx, toolTipTitle);
		divInfoFondoVal = divInfoFondoVal.replace("showToolTip_"	+ idx, showToolTip);
		divInfoFondoVal = divInfoFondoVal.replace("showTesto_"		+ idx, showTesto);

		fesConfContHtml += divInfoFondoVal;
		
	}
	fesConfContHtml += divTabConfFondiPost;
		
	//initTooltip();
	setDatiConfronta("1 anno",datiFondi.anno1);
	nomeValore1 = $.parseJSON(datiFondi[codFidaArray[0]].fondo).nomeFondo;
	nomeValore2 = "-";
	if(codFidaArray.length >1){
		nomeValore2 = $.parseJSON(datiFondi[codFidaArray[1]].fondo).nomeFondo;
	}
	
	setDatiConfronta("YTD",	  datiFondi.YTD);
	setDatiConfronta("3 mesi",datiFondi.mesi3);
	setDatiConfronta("6 mesi",datiFondi.mesi6);
	setDatiConfronta("3 anni",datiFondi.anno3);
	setDatiConfronta("5 anni",datiFondi.anno5);
	
	caricaTabellaConfronta();
	
	//fesConfContHtml +=divSezioneGrafico;
	return fesConfContHtml;
	
}


function setDatiConfronta(chiave, arraySrc){
	//Grafico
	var arrayDest = [];
	$.each(arraySrc, function(idx) {
		var tempJson = {};
		tempJson.chiave = new Date(arraySrc[idx].chiave_anno, arraySrc[idx].chiave_mese);
		tempJson.valore1 = arraySrc[idx].valore1;
		tempJson.valore2 = arraySrc[idx].valore2;
		
		arrayDest[idx] = tempJson;
	});
	
	dati_confronta[chiave] = arrayDest;
	
	
}

function fesFondoShow1(params){
	//priv_fes_fondo_resp.js manca:
	if(!$("#fesFondoWrap").length)
	{
		fesFondoWrap = $("<div>").attr({"id": "fesFondoWrap"});
		$("#contenuti").append(fesFondoWrap);
	}
	else
	{
		fesFondoWrap.empty();
	}
	// Nasconde la ricerca
	$("#fesRicWrap").hide();
//	$("#fesLeftSel").hide();
	
	fesFondoShow(params);	//ma non è responive, quindi spacca la pagina
}

function caricaTabellaConfronta(){
	
	if(codFidaArray.length == 1){
		for(var j=0; j<31; j++){
			$("#col" + j +"2").hide();
		}
	}
	else{
		for(var j=0; j<31; j++){
			$("#col" + j +"2").show();
		}
	}
	//remove benchmark rows (if present before)
	$('tr[id^="row7_"]').remove();
	
	for(var idx=0; idx < 2 ; idx++){
		if(codFidaArray[idx]!=undefined){
			datiFondo = datiFondi[codFidaArray[idx]];
			fondo = $.parseJSON(datiFondo.fondo);
			
			$("#nomeFondo"+idx).text(fondo.nomeFondo);
			$("#iconaOpr"+idx).attr("data-fundname", fondo.nomeFondo);
			$("#iconaOpr"+idx).attr("codicesocieta", fondo.codSocietaComparti);
			$("#iconaOpr"+idx).attr("codicecomparto", fondo.ccmp);
			$("#iconaOpr"+idx).attr("divisa", fondo.valutaRif);
			$("#iconaOpr"+idx).attr("fondosicav", fondo.fondiSicav);
			
			$("#tipoStru"+idx).text(fondo.asset);
			$("#isin"+idx).text(fondo.codIsin);
			$("#classe"+idx).text(fondo.classe);
			
			$("#rating"+idx).empty();
			for(var r=0; r<fondo.rating; r++){
				$("#rating"+idx).append(divImgCorono.replace("Rating", fondo.rating));
			}
			
			$("#catAsg"+idx).text(fondo.catAssogestioni);
			$("#catBr"+idx).text(fondo.nomeCategoriaBrating);
			
			//benchmark - start
			if(0 == idx){
				var benchmark0  =  $.parseJSON(datiFondo.benchmark);
				var imax = benchmark0.length;
				var altroFondo = {}, benchmark1=[];
				if(codFidaArray.length>1){
					benchmark1 = $.parseJSON(datiFondi[codFidaArray[idx^1]].benchmark);
				}
				if(benchmark1.length > benchmark0.length) {
					imax = benchmark1.length;
				}
//				imax = imax - 1;
				if(imax > 1){
					for(var idxBenchmark=0; idxBenchmark<imax; idxBenchmark++){
						var divBenchmarkVal = divBenchmark.replace(/{{index}}/g, idxBenchmark);
						var tempVal0 = "-";
						if(benchmark0.length>idxBenchmark){
							tempVal0 = benchmark0[idxBenchmark].nomeIndice + "<br/>" + benchmark0[idxBenchmark].percentualeIndice;
						}
						divBenchmarkVal		= divBenchmarkVal.replace("benchmark0"+idxBenchmark+"Val", tempVal0);
						var styleCol2 = "display:none";
						if(codFidaArray.length > 1){
							var tempVal1 = "-";
							styleCol2 = "display:block";
							if(benchmark1.length>idxBenchmark){
								tempVal1 = benchmark1[idxBenchmark].nomeIndice + "<br/>" + benchmark1[idxBenchmark].percentualeIndice;
							}
							divBenchmarkVal		= divBenchmarkVal.replace("benchmark1"+idxBenchmark+"Val", tempVal1);
						}
						divBenchmarkVal		= divBenchmarkVal.replace("showCol7"+idxBenchmark+"2", styleCol2);
						
						$("#row7").after(divBenchmarkVal);
					}
				}
			}
			//benchmark - end
			
			$("#divisa"+idx).text(fondo.valutaRif);
			
			$("#distProv"+idx).empty();
			var disProvVal = divImgOK;
			if(0 == fondo.dividendi){
				disProvVal = divImgKO;
			}
			$("#distProv"+idx).append(disProvVal);
			
			$("#pac"+idx).empty();
			var pacVal = divImgOK;
			if("S" != fondo.pacComp){
				pacVal = divImgKO;
			}
			$("#pac"+idx).append(pacVal);
			
		}
	}
	
	var altroFondo = null;
	fondo = $.parseJSON(datiFondi[codFidaArray[0]].fondo);
	if(codFidaArray.length>1){
		altroFondo =  $.parseJSON(datiFondi[codFidaArray[1]].fondo);
	}
	
	caricaTabellaRendRischio(fondo, altroFondo);
	caricaDatiAreaGeoSettore(fondo, altroFondo);
	
}
	
function caricaTabellaRendRischio(fondo, altroFondo){
	
		 var colonneTabRendRischio = [
				{
					field   : 'descTitolo',
					title   : '',
					'class'	: 'left',
					width	: '26%'
				},
				{
					field   : 'fondo0',
					title   : '', 
					'class'	: 'txtAlCenter',
					width	: '37%'
				},
				{
					field   : 'fondo1',
					title   : '',
					'class'	: 'txtAlCenter',
					width	: '37%'
				}
			  ];
		 
		 $('#tableRendRischio').bootstrapTable({
				data	 : {}, 
				columns	 : colonneTabRendRischio,
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
				showHeader : false			
		 });
		 
	//	 datiTabellaConfronta = [];
		 var datiRendRischio0 = caricaDatiRendRischio(fondo);
		 var datiRendRischio1 = caricaDatiRendRischio(altroFondo);
		 for(var i=0; i<11; i++){
			 var jsonRiga = {descTitolo: "<strong>"+tabColDescRendRischio[i]+"</strong>", fondo0: datiRendRischio0[i], fondo1:datiRendRischio1[i]};
			 if(8 == i){
				 jsonRiga.descTitolo = divToolTipSharpe;
			 }
			 else if(9 == i){
				 jsonRiga.descTitolo = divToolTipRQuadro;
			 }
			 else if(10 == i){
				 jsonRiga.descTitolo = divToolTipBeta;
			 }
			 datiTabellaRendRischio[i] = jsonRiga;
		 }
		 
		 $('#tableRendRischio').bootstrapTable('load', datiTabellaRendRischio);

		 
		 $('#tableCosti').bootstrapTable({
				data	 : {}, 
				columns	 : colonneTabRendRischio,
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
				showHeader : false			
		 });
		 
		 var datiCosti0 = caricaDatiCosti(fondo);
		 var datiCosti1 = caricaDatiCosti(altroFondo);
		 for(var i=0; i<4; i++){
			 var jsonRiga = {descTitolo: "<strong>"+tabColDescCosti[i]+"</strong>", fondo0: datiCosti0[i], fondo1:datiCosti1[i]};
			 datiTabellaCosti[i] = jsonRiga;
		 }
		 $('#tableCosti').bootstrapTable('load', datiTabellaCosti); 
		 
		 
		 $('#tableComposizione').bootstrapTable({
				data	 : {}, 
				columns	 : colonneTabRendRischio,
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
				showHeader : false			
		 });
		 var datiComp0 = caricaDatiComp(fondo,1);
		 var datiComp1 = caricaDatiComp(altroFondo,2);
		 for(var i=0; i<2; i++){
			 var jsonRiga = {descTitolo: "<strong>"+tabColDesComp[i]+"</strong>", fondo0: datiComp0[i], fondo1:datiComp1[i] }; //, '_fondo0_id':"grafico_asset1", '_fondo1_id':"grafico_asset2"
			 if(1 == i){
				 jsonRiga._fondo0_id="grafico_asset1";
				 jsonRiga._fondo1_id="grafico_asset2";
			 }
			 datiTabellaComposizione[i] = jsonRiga;
		 }
		 $('#tableComposizione').bootstrapTable('load', datiTabellaComposizione); 
	}

function caricaDatiRendRischio(fondoParam){
	var datiRendRischio = ["-","-","-","-","-","-","-","-","-","-","-"];
	if(null!=fondoParam){
		fondoParam.nav = 		(undefined!= fondoParam.nav 		&& null!=fondoParam.nav 		&& ""!=fondoParam.nav) 		  ? fondoParam.nav 		  : 0;
		fondoParam.dataPrezzo = (undefined!= fondoParam.dataPrezzo 	&& null!=fondoParam.dataPrezzo 	&& ""!=fondoParam.dataPrezzo) ? fondoParam.dataPrezzo : new Date().getTime();
		
		var navVal = "" + 
					parseFloat(fondoParam.nav).toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2}) +
						"<br/><span style=\"color:#C0C0C0\"> al " + 
						$.datepicker.formatDate('dd/mm/y', new Date(fondoParam.dataPrezzo)) + //TODO verifca se serve UTC
						"</span>";
		
		fondoParam.performanceInizioAnno = 	(undefined!= fondoParam.performanceInizioAnno 	&& null!=fondoParam.performanceInizioAnno 	&& ""!=fondoParam.performanceInizioAnno) 	? fondoParam.performanceInizioAnno 	: 0;
		fondoParam.performance6Mm = 		(undefined!= fondoParam.performance6Mm 			&& null!=fondoParam.performance6Mm 			&& ""!=fondoParam.performance6Mm) 			? fondoParam.performance6Mm 		: 0;
		fondoParam.performance1Aa = 		(undefined!= fondoParam.performance1Aa 			&& null!=fondoParam.performance1Aa 			&& ""!=fondoParam.performance1Aa) 			? fondoParam.performance1Aa 		: 0;
		fondoParam.performance3Aa = 		(undefined!= fondoParam.performance3Aa 			&& null!=fondoParam.performance3Aa 			&& ""!=fondoParam.performance3Aa) 			? fondoParam.performance3Aa 		: 0;
		fondoParam.performance5Aa = 		(undefined!= fondoParam.performance5Aa 			&& null!=fondoParam.performance5Aa 			&& ""!=fondoParam.performance5Aa) 			? fondoParam.performance5Aa 		: 0;
		fondoParam.vol1Ann = 				(undefined!= fondoParam.vol1Ann 				&& null!=fondoParam.vol1Ann 				&& ""!=fondoParam.vol1Ann) 					? fondoParam.vol1Ann 				: 0;
		fondoParam.vol3Ann = 				(undefined!= fondoParam.vol3Ann 				&& null!=fondoParam.vol3Ann 				&& ""!=fondoParam.vol3Ann) 					? fondoParam.vol3Ann 				: 0;
		fondoParam.sharpe1 = 				(undefined!= fondoParam.sharpe1 				&& null!=fondoParam.sharpe1 				&& ""!=fondoParam.sharpe1) 					? fondoParam.sharpe1 				: 0;
		fondoParam.rQuadro = 				(undefined!= fondoParam.rQuadro 				&& null!=fondoParam.rQuadro 				&& ""!=fondoParam.rQuadro) 					? fondoParam.rQuadro				: 0;
		fondoParam.beta = 					(undefined!= fondoParam.beta 					&& null!=fondoParam.beta 					&& ""!=fondoParam.beta) 					? fondoParam.beta 					: 0;
		
		var ytd 	  = "" + parseFloat(fondoParam.performanceInizioAnno).toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2}) + "&#37;";
		var rend6mesi = "" + parseFloat(fondoParam.performance6Mm)		 .toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2}) + "&#37;";
		var rend1anno = "" + parseFloat(fondoParam.performance1Aa)		 .toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2}) + "&#37;";
		var rend3anni = "" + parseFloat(fondoParam.performance3Aa)		 .toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2}) + "&#37;";
		var rend5anni = "" + parseFloat(fondoParam.performance5Aa)		 .toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2}) + "&#37;";
		var vol1anno  = "" + parseFloat(fondoParam.vol1Ann)				 .toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2}) + "&#37;";
		var vol3anni  = "" + parseFloat(fondoParam.vol3Ann)				 .toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2}) + "&#37;";
		var sharpe    = "" + parseFloat(fondoParam.sharpe1)				 .toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2}) ;
		var rquadro   = "" + parseFloat(fondoParam.rQuadro)				 .toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2}) ;
		var beta 	  = "" + parseFloat(fondoParam.beta)				 .toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2}) ;
		
		datiRendRischio = [];
		datiRendRischio[datiRendRischio.length] = navVal;
		datiRendRischio[datiRendRischio.length] = ytd;
		datiRendRischio[datiRendRischio.length] = rend6mesi;
		datiRendRischio[datiRendRischio.length] = rend1anno;
		datiRendRischio[datiRendRischio.length] = rend3anni;
		datiRendRischio[datiRendRischio.length] = rend5anni;
		datiRendRischio[datiRendRischio.length] = vol1anno;
		datiRendRischio[datiRendRischio.length] = vol3anni;
		datiRendRischio[datiRendRischio.length] = sharpe;
		datiRendRischio[datiRendRischio.length] = rquadro;
		datiRendRischio[datiRendRischio.length] = beta;
	}
	return datiRendRischio;
}	

function caricaDatiCosti(fondoParam){
	var datiCosti = ["-","-","-","-"];
	if(null!=fondoParam){
		
		fondoParam.commGestione  = 	(undefined!= fondoParam.commGestione 	&& null!=fondoParam.commGestione 	&& ""!=fondoParam.commGestione) 	? fondoParam.commGestione 	: 0;
		fondoParam.invMinimo 	 = 	(undefined!= fondoParam.invMinimo 		&& null!=fondoParam.invMinimo 		&& ""!=fondoParam.invMinimo) 		? fondoParam.invMinimo 		: 0;
		fondoParam.invSuccessivo = 	(undefined!= fondoParam.invSuccessivo 	&& null!=fondoParam.invSuccessivo	&& ""!=fondoParam.invSuccessivo)	? fondoParam.invSuccessivo	: 0;
		
		datiCosti = [];
		datiCosti[datiCosti.length] = fondoParam.commIngressoWb;
		datiCosti[datiCosti.length] = "" + parseFloat(fondoParam.commGestione) .toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2}) + "&#37;";
		datiCosti[datiCosti.length] = "" + parseFloat(fondoParam.invMinimo)    .toLocaleString("it-IT",{minimumFractionDigits:0, maximumFractionDigits:0}) + "&euro;";
		datiCosti[datiCosti.length] = "" + parseFloat(fondoParam.invSuccessivo).toLocaleString("it-IT",{minimumFractionDigits:0, maximumFractionDigits:0}) + "&euro;";
	}
	return datiCosti;
}

function caricaDatiComp(fondoParam, ind){
	var datiComposizione = ["-","-"];
	if(null!=fondoParam){
		
		fondoParam.patrimonio = 	(undefined!= fondoParam.patrimonio 	&& null!=fondoParam.patrimonio	&& ""!=fondoParam.patrimonio)	? fondoParam.patrimonio	: 0;
		
		datiComposizione = [];
		datiComposizione[datiComposizione.length] = "" + parseFloat(fondoParam.patrimonio) .toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2}) + " " + fondoParam.valutaRif;
		
		var data_asset = [ 	{chiave: "Azioni", 		 valore: fondoParam.perAzionario, 		color: '#8E0C0C'},
			            	{chiave: "Obbligazioni", valore: fondoParam.perObbligazionario, color: '#003262'},
			            	{chiave: "Liquidita'",   valore: fondoParam.perLiquidita, 		color: '#ABB9BF'},
			            	{chiave: "Altro", 		 valore: fondoParam.perAltro, 			color: '#333333'}
			          ];
		if(1 == ind){
			data_asset1 = data_asset;
		}
		else if(2 == ind){
			data_asset2 = data_asset;
		}
		datiComposizione[datiComposizione.length] = data_asset;
		//id per td come grafico_asset1 e grafico_asset2  //bootstrap-table.js riga 1483 item['_' + field + '_id']
	}
	return datiComposizione;
}	

function caricaDatiAreaGeoSettore(fondo, altroFondo){
	
	 var colonneTabAreaGeoSettore = [
			{
				field   : 'descComposizione'
			},
			{
				field   : 'distrGeoValore',
				'class'	: 'txtAlRight'
			}
		  ];
	 
	 datiTabellaArea = [];
	 caricaDatiAreaGeo(datiFondi[codFidaArray[0]].area, 1, colonneTabAreaGeoSettore);
	 if(codFidaArray.length>1){
		 caricaDatiAreaGeo(datiFondi[codFidaArray[1]].area, 2, colonneTabAreaGeoSettore);
	 }
	 
	 
	 datiTabellaSett=[];
	 caricaDatiDistSettore(datiFondi[codFidaArray[0]].settore, 1, colonneTabAreaGeoSettore);
	 if(codFidaArray.length>1){
		 caricaDatiDistSettore(datiFondi[codFidaArray[1]].settore, 2, colonneTabAreaGeoSettore);
	 }
	 
}


function caricaDatiAreaGeo(inputParam, idx,colonneTabAreaGeoSettore){
	var datiTabellaAreaGeo = [];
	if(null!=inputParam){
		var area  =  $.parseJSON(inputParam);
		var imax = area.length;
		if(imax>1){
			for(var i=0; i<imax; i++){
				var jsonRiga = {descComposizione: "<strong>"+area[i].descComposizione+"</strong>", 
								distrGeoValore: "<strong>" + parseFloat(area[i].valore).toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2}) + "&#37;</strong>" 
							   };
				datiTabellaAreaGeo[i] = jsonRiga;
			}
			
			 $('#tableAreaGeo'+idx).bootstrapTable({
					data	 : {}, 
					columns	 : colonneTabAreaGeoSettore,
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
					showHeader : false			
			 });
			$('#tableAreaGeo'+idx).bootstrapTable('load', datiTabellaAreaGeo);
			$('#tableAreaGeo'+idx).show();
			$('#tableAreaGeoNoShow'+idx).hide();
		}
		else{
			$('#tableAreaGeo'+idx).hide();
			$('#tableAreaGeoNoShow'+idx).show();
		}
	}
	datiTabellaArea[datiTabellaArea.length] = datiTabellaAreaGeo;
}	

function caricaDatiDistSettore(inputParam, idx,colonneTabAreaGeoSettore){
	var datiTabellaSettore = [];
	if(null!=inputParam){
		var settore = $.parseJSON(inputParam);
		var imax = settore.length;
		if(imax>1){
			for(var i=0; i<imax; i++){
				var jsonRiga = {descComposizione: "<strong>"+settore[i].descComposizione+"</strong>", 
								distrGeoValore: "<strong>" + parseFloat(settore[i].valore).toLocaleString("it-IT",{minimumFractionDigits:2, maximumFractionDigits:2}) + "&#37;</strong>" 
							   };
				datiTabellaSettore[i] = jsonRiga;
			}
			
			 $('#tableDistSett'+idx).bootstrapTable({
					data	 : {}, 
					columns	 : colonneTabAreaGeoSettore,
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
					showHeader : false			
			 });
			$('#tableDistSett'+idx).bootstrapTable('load', datiTabellaSettore);
			$('#tableDistSett'+idx).show();
			$('#tableDistSettNoShow'+idx).hide();
		}
		else{
			$('#tableDistSett'+idx).hide();
			$('#tableDistSettNoShow'+idx).show();
		}
	}
	datiTabellaSett[datiTabellaSett.length] = datiTabellaSettore;
}	


function showError(show, tipo, msg) {
	if (!show) {
		$('#erroreForm').hide();
	} else {
		var errorBorderClass = '';
		if ("E" == tipo) {
			errorBorderClass = 'negativo';
		} else if ("W" == tipo) {
			errorBorderClass = 'attenzione';
		}
		$("#errorBorder").addClass(errorBorderClass);
		$("#messaggio").html(msg);
		$('#erroreForm').show();
		window.scrollTo(0, 0);
	}
}

var testoFondoBest = "Fondo migliore della sua categoria";
var toolTipWithBest = "Il confronto sar&aacute; effettuato con il fondo della stessa categoria Assogestioni del fondo ricercato, con il <strong>miglior rating</strong> e il <strong>miglior rendimento a 3 anni</strong>";
var toolTipBest = "&Eacute; il fondo della stessa categoria Assogestioni del fondo ricercato con il <strong>miglior rating</strong> e il <strong>miglior rendimento a 3 anni</strong>";

var divImgCorono = "<img src=\"/wscmn/img/ret/fes_corona_fida_small.gif\" alt=\"{{Rating}}\" >";

var divImgOK = "<img src=\"/wscmn/img/ico2inf_ok.gif\" title alt />";
var divImgKO = "<img src=\"/wscmn/img/ico2inf_ko.gif\" title alt />";

var divBenchmark = " <tr class=\"dispari benchmarkClass\" id=\"row7_{{index}}\">	\
						<td><strong>Benchmark Ufficiale</strong></td>	\
						<td class=\"txtAlCenter\"><span id=\"benchmark0{{index}}\">benchmark0{{index}}Val</span></td>	\
						<td class=\"txtAlCenter\"> \
							<div id=\"col7{{index}}2\" style=\"showCol7{{index}}2\">	\
								<span id=\"benchmark1{{index}}\">benchmark1{{index}}Val</span>	\
							</div> \
						</td>	\
					</tr>	\
					";

var divToolTipSharpe  = "<strong><span class=\"txthelp\" data-toggle=\"tooltip\" title=\"<strong>INDICE DI SHARPE</strong>: &egrave; un indice usato per valutare l'efficienza della gestione calcolato come rapporto tra il differenziale di rendimento di un fondo rispetto ad un'attivit&agrave; priva di rischio (in genere il tasso d'interesse sui titoli di Stato) e il rischio corso (deviazione standard). <strong>Maggiore &egrave; l'indice di Sharpe, migliore &egrave; la performance</strong> storica del fondo corretta per il rischio e quindi l'efficienza della gestione. \">Indice di Sharpe</span></strong>";
var divToolTipRQuadro = "<strong><span class=\"txthelp\" data-toggle=\"tooltip\" title=\"<strong>R-QUADRO</strong>: &egrave; un indicatore di quanto il comportamento di un fondo sia riconducibile all'<strong>andamento</strong> dell'indice di riferimento (benchmark). &Egrave; utile per valutare se la gestione del fondo &egrave; passiva (ovvero replica il benchmark) o attiva. Il valore dell'indicatore varia da 0 a 1 dove 1 indica che il fondo ha perfettamente replicato il parametro di riferimento. Pi&ugrave; il valore &egrave; elevato, maggiore &egrave; l'adattamento del fondo al parametro di riferimento.\">R-Quadro</span></strong>"; 
var divToolTipBeta    = "<strong><span class=\"txthelp\" data-toggle=\"tooltip\" title=\"<strong>BETA</strong>: &egrave; un <strong>indicatore</strong> che esprime l'<strong>elasticit&agrave; dei movimenti</strong> del fondo rispetto a quelli dell'<strong>indice</strong> di <strong>riferimento</strong> (benchmark). L'indice di riferimento ha un valore di Beta pari a 1. Un fondo con Beta maggiore di 1 tende ad amplificare i movimenti del mercato, mentre con un Beta inferiore a 1 tende a smorzarli. L'amplificazione sar&agrave; tanto maggiore quanto pi&ugrave; elevato sar&agrave; il Beta. Ad esempio: a fronte di un incremento del 10% dell'indice di riferimento, un fondo con Beta pari a 1,1 salirebbe tendenzialmente dell'11%, mentre in caso di flessione dell'indice del 10%, tendenzialmente perderebbe l'11%.\">Beta</span></strong>"

var tabColDescRendRischio = ["Val quota/NAV", 			"Rendimento da inizio anno (YTD)", 	"Rendimento 6 mesi", 			"Rendimento 1 anno", 			"Rendimento 3 anni", "Rendimento 5 anni", "Volatilit&agrave; 1 anno", "Volatilit&agrave; 3 anni", "Indice di Sharpe", "R-Quadro", "Beta"];	
var tabColDescCosti 	  = ["Commissioni di ingresso", "Commiss. di gestione annua", 		"Investimento min. iniziale", 	"Investimento min. successivo"];	
var tabColDesComp 		  = ["Patrimonio fondo (mln)", 	"Asset allocation"];	
var graphDesc			  = ["Azioni",					"Obbligazioni",						"Liquidita'",					"Altro"];



var divTxtConfronta = "<div class=\"col-sm-3\" id=\"idTxtConfrontaLabel\">	\
						<h4 style=\"showTestoConfronta\">Stai confrontando:</h4>							\
					  </div>												\
					  ";

var divTabConfFondiPre = "  <div class=\"col-sm-9\">	\
							<table>					\
				 				<tbody>				\
				 					<tr> 			\
				 		";

var divTabConfFondiPost = "			</tr>			\
			 					 </tbody>			\
			 					</table>			\
			 				</div>					\
				 	";


var divInfoFondo = "<td class=\"td-fondo\" width=\"50%\" id=\"infoFondo_{{index}}\">					\
				 			<a 	class=\"flRight\" href=\"hrefChiudo_{{index}};\" id=\"chiudo_{{index}}\" style=\"showChiudo_{{index}}\">	\
				 				<i class=\"icon icon-chiudi_table\"></i>								\
				 			</a>																		\
				 			<img src=\"imgSrc_{{index}}\" class=\"fes_cfr_imgsocges\" title=\"imgTitle_{{index}} id=\"imgFondo_{{index}}\" style=\"showImgFondo_{{index}}\">		\
               					<a class=\"fundName\" href=\"hrefSchedaFondo_{{index}}\" id=\"descFondo_{{index}}\" style=\"showNomeFondo_{{index}}\">nomeFondo_{{index}}</a>	\
               				</img>	\
               				<div id=\"confrontaDescFondo_{{index}}\"> 									\
               					<a id=\"idLinkConBV_{{index}}\" href=\"hrefLinkConBV_{{index}};\" style=\"showLinkConBV_{{index}}\"> Confronta con il miglior fondo della categoria </a>	\
               					<span class=\"migliore\"  style=\"showWithBest_{{index}}\">	\
               						<i class=\"icon icon-small-like\" style=\"iconaBest_{{index}}\"></i >	\
               						<span id=\"idWithBest_{{index}}\" class=\"txthelp inited\" data-toggle=\"tooltip\" data-title=\"toolTipTitle_{{index}}\"> Fondo migliore della sua categoria </span>			\
               					</span>			\
               					<span style=\"showTesto_{{index}}\">	testoWithBest_{{index}} </span>\
               				</div> \
				 		</td>	\
					";


var tabellaConfrontaColDesc = ["", 
								"Sintesi", 
								"Tipologia strumento", "Isin", "Classe", "Rating", "Categoria Assogestioni", "Categoria Brating", "Valuta di riferimento", "Distribuzione di proventi", "PAC",
								"Rendimento e rischio"
								
								];

