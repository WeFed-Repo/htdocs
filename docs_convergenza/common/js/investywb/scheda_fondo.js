
var elencodati = {}, fondo={}, dati_sintesi = [], societa = "", codSocieta = "", nome_indice = "";
var serieStoriche = {}, datiTabellaRendimenti = [];
var stringa_S = "S", stringa_N = "N", stringa_A = "A", stringa_si="si", stringa_no="no";

var dati_graficofondo =  {};
var data_assetallocation=[], dati_distribuzione= [], dati_settori = [], dati_topten = [], dati_esposizione=[];
var ultimiTreFondi = [];

function js_ret_invest_schedaFondo(inputData){
	elencodati = $.parseJSON(elencodatiStr);	//da Scheda_Fondo.jsp
	
	if(fromPage.length==undefined){	//da simulatore PAC
		elencodati.isConsulatare =true;
	}
	else if(null == isFondoSicav /*|| (fromPage!=undefined && fromPage.indexOf("Confirm")>0)*/ ){	//quando arriva da RicercaFondi o pagina di Conferma
		fromPage = "";
		$("#fromPage").val("");
	}
	if ( (fromPage !="" && fromPage!="null") && (elencodati.isConsulatare || fromPage.indexOf("Confirm")<0) ){
		$(".SFIndietro").text("Torna indietro");
	}
	else{
		$(".SFIndietro").text("Torna a ricerca");
	}
	
	$(".SFIndietro").click(function(){
		if (fromPage !="" && fromPage!="null" && (fromPage.indexOf("Confirm")<0))	//$("#fromPage").val()
		{
			if(fromPage.length==undefined){				//da simulatore PAC
				location.href = $("#fromPage").val();
			}
			else{
				if(inputJSON!=undefined && inputJSON!="" && inputJSON!=null && inputJSON!="null"){	//tornare a sim pac con filtri pre-selezionati
					fromPage = fromPage + '&jsonsimulatorepac=' + JSON.stringify(inputJSON).replace(/"/g,"'")
				}
				//SF da Ptf modello con browser IE
				if(fromPage.indexOf("fondievoluzione")>0){
					fromPage = fromPage.replace("fondievoluzione.webank.it",window.location.hostname + "" + wrp_script + "/wbOnetoone/mffida/servlet")
									   .replace("index","index.action");
				}
				location.href = fromPage;
			}
		}
		else{
			initializzaRicerca({"fromPage":fromPage, "codSocieta":""});
			$("#fesFondoWrap").hide();
			$("#fesRicWrap").show();
		}
	});
	
	if(undefined!=elencodati.dataAggiornamento){
		$("#idDataAggiornamento").text("dati al: "+ elencodati.dataAggiornamento);
	}
	
	fondo = $.parseJSON(elencodati.fondo);
	$("#idImgSoc").attr("src",  (fondo.pathImgGruppo.indexOf("common")<0?"/common":"") + fondo.pathImgGruppo);
	$("#idNomeFondo").text(fondo.nomeFondo);
	
	//sezionePir
	if(fondo.pir != undefined && fondo.pir == 'S'){	
		$("#infoPir").html("Fondo PIR <br>" + $("#infoPir").html() );
		$("#infoPir").show();
	}
	
	$(".SFAlert").attr("href", "javascript:document.location.href=wrp_script + '/wbOnetoone/2l/jsp/FMP/resp/alert/alertAttiviFondiSicav.action?isin=" + fondo.codIsin + "&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_sf_alert'");
//	$("#idWL")   .attr("href", "javascript:document.location.href=wrp_script + '/wbOnetoone/2l/jsp/FMP/alert/impostaAlertFondiSicav.do?isin=" + fondo.codIsin + "&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_sf_alert'");
	
	watchListFunzione();
	
	//Rating
//	var fondoRating = "-";
	$("#idSFRating").empty();
	for(var r=1; r<=5; r++){
//		fondoRating = fondoRating.replace("-","");
		$("#idSFRating")
//		.append(fondoRating)
		.append("<i class=\"icon icon-corona" + ( (r<=fondo.rating)?" icon-corona-on":"") + "\"></i>");
	}
//	$("#idSFRating").append(fondoRating);
	$("#idSFTxtRating").text(fondo.rating);
	
	//Operativita
	if(true == elencodati.isConsulatare && true==elencodati.isNoCompra){ //da simulatore PAC
//		$("#idSFCompra,#idSFVendi,#idSFSwitch").hide();	//ci sono 2 volte, quindi usa class
		$(".SFCompra,.SFVendi,.SFSwitch").hide();
	}
	else{ 
//		$(".SFCompra").attr("href", "javascript:document.location.href=wrp_script + '/wbOnetoone/2l/action/investimenti/BuyFundSelect.action?codInt=" + fondo.codInt + "&codIsin=" + fondo.codIsin + "&divisa=" + fondo.valutaRif + "&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto'");
		$(".SFCompra").attr("href", "javascript:document.location.href=wrp_script + '/wbOnetoone/2l/action/investywb/AcquistoFondo.action?codInt=" + fondo.codInt + "&codIsin=" + fondo.codIsin + "&divisa=" + fondo.valutaRif + "&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto_new'");
		$(".SFCompra").show();
		
		if(true == elencodati.sellButton){
//			$(".SFVendi").attr("href", "javascript:document.location.href=wrp_script + '/wbOnetoone/2l/action/investimenti/SellFundSelect.action?codIsin=" + fondo.codIsin + "&type=sell&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vendita'");
			$(".SFVendi").attr("href", "javascript:document.location.href=wrp_script + '/wbOnetoone/2l/action/investywb/VenditaFondo.action?codIsin=" + fondo.codIsin + "&type=sell&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vendita_new'");
			$(".SFVendi").show();
		}
		else{
			$(".SFVendi").attr("href","javascript:");
			$(".SFVendi").hide();
		}
		
		if(true == elencodati.switchButton){
//			$(".SFSwitch").attr("href", "javascript:document.location.href=wrp_script + '/wbOnetoone/2l/action/investimenti/SwitchFundSelect.action?codIsin=" + fondo.codIsin + "&type=switch&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_switch'");
			$(".SFSwitch").attr("href", "javascript:document.location.href=wrp_script + '/wbOnetoone/2l/action/investywb/SwitchFondo.action?codIsin=" + fondo.codIsin + "&type=switch&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_switch_new'");
			$(".SFSwitch").show();
		}
		else{
			$(".SFSwitch").attr("href","javascript:");
			$(".SFSwitch").hide();
		}
	}
	
	resizeTab('sfTab',0);	//serve per cambiare scheda
	
	//Sintesi
	var valuesAreValid = false;
	var indexesAreValid = false;
	dati_sintesi = [];
	serieStoriche = $.parseJSON(elencodati.serieStoriche);
	$.each(serieStoriche,  function(idx){
		var sintesi = {};
		sintesi.chiave = new Date(serieStoriche[idx].dataPrezzo);
		sintesi.valore = '' + serieStoriche[idx].navEuroRett;
		sintesi.indice = '' + serieStoriche[idx].navCatEuroRett;
		sintesi.valuta = fondo.valutaRif;
		
		if(elencodati.isValuta){
			sintesi.valoredollari = '' + serieStoriche[idx].navRett;
		}
		
		//TODO - controlla solo ultimo ??
		if (sintesi.valore != 0.0) {
			valuesAreValid = true;
		}
		if (sintesi.indice != 0.0) {
			indexesAreValid = true;
		}
		
		dati_sintesi.push(sintesi);
	});
	
	if (!valuesAreValid || !indexesAreValid) {	//TODO - controlla solo ultimo ??
		dati_sintesi = [];
	}
	
	$("#idSFTipologia")	.text(fondo.asset);
	$("#idSFIsin")		.text(fondo.codIsin);
	$("#idSFCatAssog")	.text(fondo.catAssogestioni);
	$("#idSFCatBrating").text(fondo.nomeCategoriaBrating);
	
	$("#isSFRowBM").hide();
	var listaBenchmark = $.parseJSON(elencodati.listaBenchmark);
	if(listaBenchmark !=null){
		$("#idSFBenchmark").text("");
		$.each(listaBenchmark,  function(idx){
			var valoreBM = "" + listaBenchmark[idx].percentualeIndice + "% " + listaBenchmark[idx].nomeIndice + " ";
			$("#idSFBenchmark").text($("#idSFBenchmark").text() + valoreBM);
		});
		$("#isSFRowBM").show();
	}
	
	if(undefined != fondo.dataLancio && null!=fondo.dataLancio && "null"!=fondo.dataLancio){
		$("#idSFDatalancio").text($.datepicker.formatDate('dd/mm/yy', new Date(fondo.dataLancio)));
	}
	if(undefined != fondo.patrimonio && null!=fondo.patrimonio){
		$("#idSFPatrimonio").text("" + parseFloat(fondo.patrimonio).toLocaleString("it-IT",{minimumFractionDigits:3, maximumFractionDigits:3}));
	}
	
	$("#idSFValutaCop").text(stringa_no);
	if(stringa_S == fondo.risCambio){
		$("#idSFValutaCop").text(stringa_si);
	}

	$("#idSFDistProv").text(stringa_no);
	if(1 == fondo.dividendi){
		$("#idSFDistProv").text(stringa_si);
	}
	
	if(undefined != fondo.dataPrezzo && null!=fondo.dataPrezzo ){
		$("#idSFDataPrezzo").text("Val quota/NAV al " + $.datepicker.formatDate('dd/mm/yy', new Date(fondo.dataPrezzo)));
	}
	
	$("#idSFValutaRif") .text(verificaInput(fondo.valutaRif, 		 "-", false, 0,0));
	$("#idSFValutaBase").text(verificaInput(fondo.valutaBase, 		 "-", false, 0,0));
	$("#idSFPerDiv")	.text(verificaInput(fondo.perDividendi, 	 "-", false, 0,0));
	$("#idSFFiscPerc")	.text(verificaInput(fondo.fiscalita, 	 	 "-", true,  1,3));
	$("#idSFLastPrice")	.text(verificaInput(fondo.nav, 	 			 "-", true,  2,3) + " " + fondo.valutaRif );
	
	
	var colonneTabRendimenti = [
			{
				field   : 'descTitolo',
				title   : ''
				//'class'	: 'left'
			},
			{
				field   : 'ytd',
				title   : 'YTD'
			},
			{
				field   : '1a',
				title   : '1A'
			},
			{
				field   : '3a',
				title   : '3A'
			},
			{
				field   : '5a',
				title   : '5A'
			}
		  ];
	
	$('#idSFTableRendimenti').bootstrapTable({
			data	 : {}, 
			columns	 : colonneTabRendimenti,
			rowStyle : function(row, index) {
							if(index % 2 == 0)	{ return {classes: 'dispari'}	}
							else 				{ return {classes: 'pari'	}	}
						}			
	 });
	
	 datiTabellaRendimenti = [];
	 datiTabellaRendimenti[datiTabellaRendimenti.length] = {'descTitolo':"<b>Fondo</b>", 
			 												'ytd': "<b>" + verificaInput(fondo.performanceInizioAnno,"-", true, 3,3) + "</b>", 
			 												'1a':  "<b>" + verificaInput(fondo.performance1Aa, 		 "-", true, 3,3) + "</b>", 
			 												'3a':  "<b>" + verificaInput(fondo.performance3Aa, 		 "-", true, 3,3) + "</b>", 
			 												'5a':  "<b>" + verificaInput(fondo.performance5Aa, 		 "-", true, 3,3) + "</b>"
	 													};
	 
	 var listaCategoria = $.parseJSON(elencodati.listaCategoria);
	 $.each(listaCategoria, function(idx){ 
		 datiTabellaRendimenti[datiTabellaRendimenti.length] = {'descTitolo':"Categoria", 
																'ytd': verificaInput(listaCategoria[idx].perInAnn,"-", true, 3,3), 
																'1a':  verificaInput(listaCategoria[idx].per1Aa,  "-", true, 3,3), 
																'3a':  verificaInput(listaCategoria[idx].per3Aa,  "-", true, 3,3), 
																'5a':  verificaInput(listaCategoria[idx].per5Aa,  "-", true, 3,3) 
																};
	 });
	 
	 $('#idSFTableRendimenti').bootstrapTable('load', datiTabellaRendimenti);
	
	 //Asset allocation	
	 data_assetallocation = [];
	 $('#idSFAssetAlloc').hide();
	 if(undefined!=elencodati.activeAssetAllocation && true == elencodati.activeAssetAllocation){
		 data_assetallocation = [
									{chiave: "Azioni",		 valore: fondo.perAzionario,	   color: '#8E0C0C'},
									{chiave: "Obbligazioni", valore: fondo.perObbligazionario, color: '#003262'},
									{chiave: "Liquidita'",	 valore: fondo.perLiquidita,	   color: '#ABB9BF'},
									{chiave: "Altro",		 valore: fondo.perAltro,		   color: '#333333'}
								];
		 $('#idSFAssetAlloc').show();
	 }
	 
	 $("#idSFPolGest").text( verificaInput(fondo.polGest, "-", false, 0, 0 ) );
	
	
	 //PIC 
	 var datiTabPIC = [];
	 var invMinimo 		= fondo.invMinimo 		+ " " + fondo.valutaRif;
	 var invSuccessivo 	= fondo.invSuccessivo 	+ " " + fondo.valutaRif;
	 if(fondo.iresMin>0 && (fondo.codSocietaComparti==125 ||fondo.codSocietaComparti==126)){	//Carmignac
		 invMinimo = "1 Quota";
		 if(100 == fondo.iresMin){
			 invSuccessivo = "1 Quota";
		 }
		 else{
			 invSuccessivo = ""+ fondo.iresMin + " Quota"
		 }
	 }
	 datiTabPIC[datiTabPIC.length] = {'descCol':"<strong>Investimento minimo iniziale  </strong>", 'valCol': invMinimo 		};
	 datiTabPIC[datiTabPIC.length] = {'descCol':"<strong>Investimento minimo successivo</strong>", 'valCol': invSuccessivo 	};
	 
	 caricaTabellaBS('Investimento in unica soluzione (PIC)', '#idSFTablePIC', datiTabPIC);
	 
	 //PAC
	 var datiTabPAC = [];
	 if(undefined != fondo.pacComp && stringa_N == fondo.pacComp){
		 datiTabPAC[datiTabPAC.length] = {'descCol':"Per questo fondo non &egrave; prevista la modalit&agrave; di sottoscrizione PAC", 'valCol': ""	};
	 }
	 else{
		 datiTabPAC[datiTabPAC.length] = {'descCol':"<strong>Importo minimo rata</strong>", 'valCol': verificaInput(elencodati.importoMinimoRata, "-", false, 0, 0 ) };
		 datiTabPAC[datiTabPAC.length] = {'descCol':"<strong><span class=\"txthelp\" title=\"&Egrave; l'<b>importo minimo</b> iniziale, \
																							multiplo della rata periodica, \
																							richiesto all'attivazione di un \
																							piano di accumulo del capitale (PAC).\" \
													data-toggle=\"tooltip\">Versamento minimo iniziale</span></strong>", 
										'valCol': verificaInput(elencodati.versamentoMinimoIniziale, "-", false, 0, 0 ) 	};
		 
		 datiTabPAC[datiTabPAC.length] = {'descCol':"<strong>Versamento rata</strong>", 'valCol': verificaInput(elencodati.versamentoRata, "-", false, 0, 0 )  };
		 datiTabPAC[datiTabPAC.length] = {'descCol':"<strong>Durata piano</strong>", 'valCol': verificaInput(elencodati.durataPiano, "-", false, 0, 0 ) };
	 }
	 
	 caricaTabellaBS('Piano di accumulo (PAC)', '#idSFTablePAC', datiTabPAC);
	 if(undefined != fondo.pacComp && stringa_N == fondo.pacComp){
		 $("#idSFTablePAC tbody tr td:nth-child(1)").attr('colspan',2);
		 $("#idSFTablePAC tbody tr td:nth-child(2)").attr('style',"display:none");
	 }
	 
	 //Comm
	 var datiTabComm = [];
	 var commGestioneVal = "-", noteCommJson = {};
	 if(undefined!=fondo.commGestione && fondo.commGestione >0){
		 if(undefined != elencodati.noteComm){
			 commGestioneVal = verificaInput(fondo.commGestione, "-", true, 0, 3 ) + "%";
			 noteCommJson = $.parseJSON(elencodati.noteComm);
			 if(undefined != noteCommJson && undefined != noteCommJson.notaSpeseGestione && "" != noteCommJson.notaSpeseGestione){
				 commGestioneVal = "<span class=\"txthelp\" title=\"" 	+ 
				 					noteCommJson.notaSpeseGestione 	 	+ 
				 					" \" data-toggle=\"tooltip\"> " 	+   
				 					parseFloat(fondo.commGestione).toLocaleString("it-IT",{minimumFractionDigits:0, maximumFractionDigits:3})	+ "%" + 
				 					"</span>";
			 }
		 }
	 }
	 datiTabComm[datiTabComm.length] = {'descCol':"<strong><span class=\"txthelp\" title=\"&Egrave; la <b>commissione</b> trattenuta annualmente dalla societ&agrave; di gestione \
																						    o dalla Sicav come remunerazione per l'<b>attivit&agrave; di gestione</b>. \
																						    &Egrave; calcolata giornalmente in percentuale sul patrimonio del fondo \
																		                    o del comparto Essendo prelevata direttamente, il valore quota (fondi di diritto italiano) \
																		                    o il NAV (Sicav o fondi di diritto estero) sono pubblicati al netto della commissione.\" \
													data-toggle=\"tooltip\">Commissione di gestione annuale</span></strong>", 
										'valCol': commGestioneVal 	};
	 var commIngressoVal = "-";
	 if(undefined != fondo.commIngresso && fondo.commIngresso > 0){
		 commIngressoVal = verificaInput(fondo.commIngresso, "-", true, 0, 3 ) + "%" ;
	 }
	 datiTabComm[datiTabComm.length] = {'descCol':"<strong>Commissione di ingresso max da prospetto</strong>", 'valCol': commIngressoVal  };
	 
	 var commIngressoWbVal = "-";
	 if(undefined != fondo.commIngressoWb){
		 commIngressoWbVal = fondo.commIngressoWb;
		 noteCommJson = $.parseJSON(elencodati.noteComm);
		 if(undefined != noteCommJson && undefined != noteCommJson.notaSpeseIngresso && "" != noteCommJson.notaSpeseIngresso){
			 commIngressoWbVal = "<span class=\"txthelp\" title=\"" + noteCommJson.notaSpeseIngresso + " \" data-toggle=\"tooltip\"> " 	+ fondo.commIngressoWb + "</span>";
		 }
	 }
	 datiTabComm[datiTabComm.length] = {'descCol':"<strong>Commissione di ingresso WeBank</strong>", 'valCol': commIngressoWbVal ,_descCol_class:"posi", _valCol_class:"posi"};
	 
	 var commPerformanceVal = "-";
	 if(undefined!=fondo.commPerformance && fondo.commPerformance >0){
		 commPerformanceVal = verificaInput(elencodati.commPerformance, "-", true, 0, 3 )
	 }
	 datiTabComm[datiTabComm.length] = {'descCol':"<strong>Commissione di performance</strong>", 'valCol': commPerformanceVal  };
	 
	 var commUscitaTxt = "<strong>Commissione di uscita</strong>", commUscitaVal = "-";
	 if("222" == elencodati.codiceSocieta && stringa_A == fondo.ctaz ){	//JPI_Funds
		 commUscitaTxt = "<strong> <span class=\"txthelp\" title=\"In caso di rimborso di azioni di classe A verranno applicate, direttamente dalla Sicav, delle commissioni di uscita pari allo 0,5%, solo ai nuovi clienti (s'intende coloro che alla data del 15/02/2014 non possedevano n&egrave; azioni di classe A n&egrave; azioni di classe D).\" data-toggle=\"tooltip\"> " +  
		 				"Commissione di uscita</span></strong>";
	 }
	 commUscitaVal = verificaInput(elencodati.uscita, "-", false, 0, 0 );
	 datiTabComm[datiTabComm.length] = {'descCol':commUscitaTxt, 'valCol': commUscitaVal  };
	 
	 datiTabComm[datiTabComm.length] = {'descCol':"<strong>Commissione di switch</strong>", 'valCol': verificaInput(elencodati["switch"], "-", false, 0, 0 )  };
	 
	 if(undefined!= elencodati.notaPac && "NO_INFO"!= elencodati.notaPac){
		 var toolTipPacTxt = "<strong><span class=\"txthelp\" title=\" ";
		 if(undefined != elencodati.notaPac && "" != elencodati.notaPac){
			 toolTipPacTxt = toolTipPacTxt + elencodati.notaPac + "<br>";
		 }
		 
		 toolTipPacTxt = toolTipPacTxt + "Per i Pac attivati con la promozione &quot;Zero Commissioni&quot;, le commissioni di sottoscrizione non saranno applicabili per tutta la durata del piano di accumulo e fino alla conclusione dello stesso.";
		 toolTipPacTxt = toolTipPacTxt +  " \" data-toggle=\"tooltip\"> Leggi l'informativa sulle commissioni di sottoscrizione di un PAC </span></strong>" ;
		 datiTabComm[datiTabComm.length] = {'descCol': toolTipPacTxt, "valCol":"" , _descCol_id:"idSFTShow", _valCol_id:"idSFTTHide"};
	 }
	 
	 caricaTabellaBS('Commissioni', '#idSFTableComm', datiTabComm);
	 if( $("#idSFTShow").is(":visible")){
		 $("#idSFTShow").attr('colspan',2);
		 $("#idSFTTHide").hide();
	 }
	 
	 //Dir Fiss
	 var datiTabDirFis = [];
	 var dirFissTooltipVal = "<strong> <span class=\"txthelp\" title=\" <b>Spese amministrative</b> trattenute in misura fissa dal soggetto incaricato dei pagamenti \
	 																	(banca corrispondente nel caso di Sicav e fondi diritto estero) o dalle societ&agrave; di gestione \
																		(nel caso di fondi di diritto italiano) per l'<b>esecuzione</b> di ogni <b>singola operazione</b> \
																		(sottoscrizione, rimborso, stacco cedola). " +
							" \" data-toggle=\"tooltip\"> Diritti Fissi </span></strong>" ;
	 
	 datiTabDirFis[datiTabDirFis.length] = {'descCol':"<strong>Sottoscrizione PIC</strong>", 'valCol': verificaInput(elencodati.spese, "-", false, 0, 0)   };
	 datiTabDirFis[datiTabDirFis.length] = {'descCol':"<strong>Rimborso</strong>", 			 'valCol': verificaInput(elencodati.rimborso, "-", false, 0, 0)   };
	 
	 if(undefined!= fondo.pacComp && stringa_S == fondo.pacComp){
		 var dirFisPACVal = "-";
		 if(undefined != elencodati.pac){
			 dirFisPACVal = elencodati.pac;
		 }
		 
		 
		 noteCommJson = $.parseJSON(elencodati.noteComm);
		 
		 
		 if(undefined != noteCommJson && undefined != noteCommJson.notaPac && "" != noteCommJson.notaPac){
			 
			 var toolTipOnOff= true;
			 var oggi = new Date();
			 
			 
			 if(noteCommJson.notaPacDa ) {
				 try {
					 
					 var notaPacDa = new Date($.trim(noteCommJson.notaPacDa));
					 
					 toolTipOnOff = oggi.getTime()>=notaPacDa.getTime();
				 }
				 catch(err) {}
			 }
			 
			 if(toolTipOnOff && noteCommJson.notaPacA ) {
				 try {
					 var notaPacA = new Date($.trim(noteCommJson.notaPacA));
					 
					 toolTipOnOff = notaPacA.getTime()>=oggi.getTime();
				 } 
				 catch(err) {}
			 }
			 
			 if(toolTipOnOff) {
				 dirFisPACVal = "<span class=\"txthelp\" title=\" " + noteCommJson.notaPac  + " \" data-toggle=\"tooltip\"> " + elencodati.pac + "</span>";
			 }
		 }
		  
		 datiTabDirFis[datiTabDirFis.length] = {'descCol':"<strong>Prima sottoscrizione PAC e rate successive</strong>", 'valCol': dirFisPACVal   };
	 }
	 
	 datiTabDirFis[datiTabDirFis.length] = {'descCol':"<strong>Switch</strong>", 			 'valCol': verificaInput(elencodati["switch"], "-", false, 0, 0)   };
	 datiTabDirFis[datiTabDirFis.length] = {'descCol':"<strong>Stacco cedola</strong>", 	 'valCol': verificaInput(elencodati.cedola,    "-", false, 0, 0)   };
	 
	 
	 caricaTabellaBS(dirFissTooltipVal, '#idSFTableDirFis', datiTabDirFis);
	
	 societa 	= fondo.codSocietaComparti;
	 codSocieta	= fondo.codSocietaGest;
	 nome_indice = elencodati.nome_indice;
	 Finance.tempisticheSchedaFondo(societa);
	
//	 $("#idSFTempNote").hide(); //disposiz.js
	 
	 $("#idSFIsNoteOperative").hide();
	 if(true == elencodati.isNoteOperative){
		 $("#idSFIsNoteOperative").show();
	 }
	
	 // -----------------------------------------------TAB Grafico e Rendimenti 
	caricaTabGraficoRend();
	carcicaTabelleGrafRend();

	caricaTabRatingRischio();
	caricaTabComposizione();
	caricaTabSocietaGestione();
	 
	showUltimiTreFondi(elencodati.ultimiTreFondi);	//TODO - verifica se va bene da inputdata o direttamente da JSP
	 
//	$("#fesFondoWrap").after($("#noteRicerca"));
	$("#idUrlData,#idPannello").show();
	
	window.scrollTo(0, 0);	//Se Ricerca ha Fondo giu con scroll, SF apre a quel posizione
	
}

function verificaInput(campo, valoreDefault, isDecimale, minDec, maxDec){
	if(undefined == campo || null == campo && ""!=campo){
		return valoreDefault;
	}
	else{
		if(isDecimale){
			return "" + parseFloat(campo).toLocaleString("it-IT",{minimumFractionDigits:minDec, maximumFractionDigits:maxDec});
		}
		else{
			return campo;
		}
	}
	return valoreDefault;
}

function caricaTabellaBS(descTitolo, idTabella, datiTab){
	 var colonneTab = [
			{ field   : 'descCol', title   : descTitolo},
			{ field   : 'valCol' , title   : '' , 'class'	: 'right'	}
		];

	 $(idTabella).bootstrapTable({
								data	 : {}, 
								columns	 : colonneTab,
								rowStyle : function(row, index) {
										if(index % 2 == 0){ 
												return {classes: 'dispari'}	
										}
										else { return {classes: 'pari'	}	}
									}
								});
		
	 $(idTabella).bootstrapTable('load', datiTab);
	 $(idTabella).find("thead tr th:nth-child(1)").attr('colspan',2);
	 $(idTabella).find("thead tr th:nth-child(2)").attr('style',"display:none");
}

function caricaTabGraficoRend(){
	dati_graficofondo = {};
	loadSeries($.parseJSON(elencodati.serieYTD)			.serieYTD, 			'YTD', 	  dati_graficofondo);
	loadSeries($.parseJSON(elencodati.serieThreeMonths)	.serieThreeMonths,	'3 mesi', dati_graficofondo);
	loadSeries($.parseJSON(elencodati.serieSixMonths)	.serieSixMonths, 	'6 mesi', dati_graficofondo);
	loadSeries($.parseJSON(elencodati.serieOneYear)		.serieOneYear, 		'1 anno', dati_graficofondo);
	loadSeries($.parseJSON(elencodati.serieThreeYear)	.serieThreeYear, 	'3 anni', dati_graficofondo);
	loadSeries($.parseJSON(elencodati.serieFiveYear)	.serieFiveYear, 	'5 anni', dati_graficofondo);
}

function loadSeries(serieArray, key, dati_graficofondo) {
	if ( (serieArray != null) && (serieArray.length > 0) ) {
		for (var i=0;i<serieArray.length;i++) {
			serieArray[i].chiave = new Date(serieArray[i].chiave);
		}
		dati_graficofondo[key] = serieArray;
	}
}

function carcicaTabelleGrafRend(){
	caricaTabellaRendCumulPerc();
	caricaTabellaRendAnnSolPerc();
//	caricaTabellaRendProvDist();
	caricaTabellaRendPerQuart();
}

function caricaTabellaRendCumulPerc(){
	var colonneTab = [
		{ field   : 'descCol', 	title   : ''},
		{ field   : 'ytd' , 	title   : 'YTD' , 	  'class'	: 'center'	},
		{ field   : '1S' , 		title   : '1S' , 	  'class'	: 'center'	},
		{ field   : '1M' , 		title   : '1M' , 	  'class'	: 'center'	},
		{ field   : '3M' , 		title   : '3M' , 	  'class'	: 'center'	},
		{ field   : '6M' , 		title   : '6M' , 	  'class'	: 'center'	},
		{ field   : '1A' , 		title   : '1A' , 	  'class'	: 'center'	},
		{ field   : '3A' , 		title   : '3A' , 	  'class'	: 'center'	},
		{ field   : '5A' , 		title   : '5A' , 	  'class'	: 'center'	},
		{ field   : '3Aa' , 	title   : '3A ann.' , 'class'	: 'center'	},
		{ field   : '5Aa' , 	title   : '5A ann.' , 'class'	: 'center'	}
	];
	$("#idSFTableRendCumulPerc").bootstrapTable({
		data	 : {}, 
		columns	 : colonneTab,
		rowStyle : function(row, index) {
				if(index % 2 == 0){ 
						return {classes: 'dispari'}	
				}
				else { return {classes: 'pari'	}	}
			}
		});
	var datiTab = [];
	datiTab[datiTab.length] = {'descCol':"<strong>Fondo</strong>", 
								'ytd': "<strong>" + verificaInput(fondo.performanceInizioAnno,"-", true, 2,2) 	+ "</strong>",
								'1S' : "<strong>" + verificaInput(fondo.performance1Ss,		"-", true, 2,2)		+ "</strong>", 
								'1M' : "<strong>" + verificaInput(fondo.performance1Mm,		"-", true, 2,2)		+ "</strong>", 
								'3M' : "<strong>" + verificaInput(fondo.performance3Mm,		"-", true, 2,2)		+ "</strong>",  
								'6M' : "<strong>" + verificaInput(fondo.performance6Mm,		"-", true, 2,2)		+ "</strong>", 
								'1A' : "<strong>" + verificaInput(fondo.performance1Aa, 		"-", true, 2,2)	+ "</strong>", 
								'3A' : "<strong>" + verificaInput(fondo.performance3Aa, 		"-", true, 2,2)	+ "</strong>",  
								'5A' : "<strong>" + verificaInput(fondo.performance5Aa, 		"-", true, 2,2)	+ "</strong>", 
								'3Aa': "<strong>" + verificaInput(fondo.per3AAnnualizzata, 	"-", true, 2,2)		+ "</strong>", 
								'5Aa': "<strong>" + verificaInput(fondo.per5AAnnualizzata, 	"-", true, 2,2) 	+ "</strong>"
							};
	var listaCategoria = $.parseJSON(elencodati.listaCategoria);
	$.each(listaCategoria, function(idx){ 
		datiTab[datiTab.length] = {'descCol':"Categoria", 
									'ytd': verificaInput(listaCategoria[idx].perInAnn,			"-", true, 2,2), 
									'1S' : verificaInput(listaCategoria[idx].per1Ss,			"-", true, 2,2), 
									'1M' : verificaInput(listaCategoria[idx].per1Mm,			"-", true, 2,2), 
									'3M' : verificaInput(listaCategoria[idx].per3Mm,			"-", true, 2,2), 
									'6M' : verificaInput(listaCategoria[idx].per6Mm,			"-", true, 2,2), 
									'1A' : verificaInput(listaCategoria[idx].per1Aa, 			"-", true, 2,2), 
									'3A' : verificaInput(listaCategoria[idx].per3Aa,  			"-", true, 2,2), 
									'5A' : verificaInput(listaCategoria[idx].per5Aa,  			"-", true, 2,2),
									'3Aa': verificaInput(listaCategoria[idx].per3AAnnualizzata, "-", true, 2,2), 
									'5Aa': verificaInput(listaCategoria[idx].per5AAnnualizzata, "-", true, 2,2)
								};
	 });
	datiTab[datiTab.length] = {'descCol':"Differenza", 
								'ytd': verificaInput(elencodati.diffYtd,		"-", true, 2,2), 
								'1S' : verificaInput(elencodati.diff1Ss,		"-", true, 2,2), 
								'1M' : verificaInput(elencodati.diff1Mm,		"-", true, 2,2), 
								'3M' : verificaInput(elencodati.diff3Mm,		"-", true, 2,2), 
								'6M' : verificaInput(elencodati.diff6Mm,		"-", true, 2,2), 
								'1A' : verificaInput(elencodati.diff1Aa, 		"-", true, 2,2), 
								'3A' : verificaInput(elencodati.diff3Aa, 		"-", true, 2,2), 
								'5A' : verificaInput(elencodati.diff5Aa, 		"-", true, 2,2),
								'3Aa': verificaInput(elencodati.diff3Aann, 		"-", true, 2,2), 
								'5Aa': verificaInput(elencodati.diff5Aann, 		"-", true, 2,2) 
							};
	$("#idSFTableRendCumulPerc").bootstrapTable('load', datiTab);
}

function caricaTabellaRendAnnSolPerc(){
	
	var colonneTab = [];
	var annoCorrente = $.parseJSON(elencodati.AnnoCorrente);
	if(undefined != annoCorrente){
		colonneTab[colonneTab.length] = { field   : 'descCol', 	title   : ''};
		
		$.each(annoCorrente, function(idx){
			colonneTab[colonneTab.length] = { field   : 'idAnnoSolPerc_'+annoCorrente[idx] , 	title   : annoCorrente[idx] , 	  'class'	: 'center'	};
		});
		
		$("#idSFTableRendAnnSolPerc").bootstrapTable({
			data	 : {}, 
			columns	 : colonneTab,
			rowStyle : function(row, index) {
					if(index % 2 == 0){ 
							return {classes: 'dispari'}	
					}
					else { return {classes: 'pari'	}	}
				}
			});
		
		var rendAnnSolPercTxt = ["Fondo", "Categoria", "Differenza"];
		var rendAnnSolPercRowFondoVal = ["",fondo.performanceInizioAnnoS,fondo.performance1AaS,fondo.performance2AaS,fondo.performance3AaS,fondo.performance4AaS,
										 fondo.performance5AaS, 	  fondo.performance6AaS,fondo.performance7AaS,fondo.performance8AaS,fondo.performance9AaS];
		var rendAnnSolPercRowCatVal = ["",'perSInAnn', 'perS1Aa', 'perS2Aa', 'perS3Aa', 'perS4Aa', 'perS5Aa', 'perS6Aa', 'perS7Aa', 'perS8Aa', 'perS9Aa'];
		var rendAnnSolPercRowDiffVal = ["",elencodati.diffYtdS, elencodati.diff1AaS, elencodati.diff2AaS, elencodati.diff3AaS, elencodati.diff4AaS
										, elencodati.diff5AaS, elencodati.diff6AaS, elencodati.diff7AaS, elencodati.diff8AaS, elencodati.diff9AaS];
		var datiTab = [];
		
		var tempJson = {};
		$.each(colonneTab, function(idx){
			if(undefined == tempJson[colonneTab[0].field]){ 
				tempJson[colonneTab[idx].field] = "<strong>" + rendAnnSolPercTxt[0] + "</strong>" ;
				return true;
			}
			tempJson[colonneTab[idx].field] = "<strong>" + verificaInput(rendAnnSolPercRowFondoVal[idx],"-", true, 2,2) 	+ "</strong>";
		});
		datiTab[datiTab.length] = tempJson;
		
		var listaCategoria = $.parseJSON(elencodati.listaCategoria);
		$.each(listaCategoria, function(indexVal){ 
			var tempJson = {};
			$.each(colonneTab, function(idx){
				if(undefined == tempJson[colonneTab[0].field]){ 
					tempJson[colonneTab[idx].field] = rendAnnSolPercTxt[1]  ;
					return true;
				}
				tempJson[colonneTab[idx].field] =verificaInput(listaCategoria[indexVal][rendAnnSolPercRowCatVal[idx]],	"-", true, 2,2) ;
			});
			datiTab[datiTab.length] = tempJson;
		});
		
		tempJson = {};
		$.each(colonneTab, function(idx){
				if(undefined == tempJson[colonneTab[0].field]){ 
					tempJson[colonneTab[idx].field] = rendAnnSolPercTxt[2] ;
					return true;
				}
				tempJson[colonneTab[idx].field] =verificaInput(rendAnnSolPercRowDiffVal[idx],"-", true, 2,2) ;

			});
		datiTab[datiTab.length] = tempJson;
		

	$("#idSFTableRendAnnSolPerc").bootstrapTable('load', datiTab);
	
	var datiTabRendProvDist = [];
	var rendProvDistVal = ["",elencodati.dividendi0, elencodati.dividendi1, elencodati.dividendi2, elencodati.dividendi3, elencodati.dividendi4
								 , elencodati.dividendi5, elencodati.dividendi6, elencodati.dividendi7, elencodati.dividendi8, elencodati.dividendi9];
	
	$("#idSFTableRendProvDist").bootstrapTable({
		data	 : {}, 
		columns	 : colonneTab,
		rowStyle : function(row, index) {
				if(index % 2 == 0){ 
						return {classes: 'dispari'}	
				}
				else { return {classes: 'pari'	}	}
			}
		});

	tempJson = {};
	$.each(colonneTab, function(idx){
			if(undefined == tempJson[colonneTab[0].field]){ 
				tempJson[colonneTab[idx].field] = "<strong>" + rendAnnSolPercTxt[0] + "</strong>" ;
				return true;
			}
			tempJson[colonneTab[idx].field] = verificaInput(rendProvDistVal[idx],"-", true, 2,2) ;

		});
	datiTabRendProvDist[datiTabRendProvDist.length] = tempJson;
	$("#idSFTableRendProvDist").bootstrapTable('load', datiTabRendProvDist);
	}
}



function caricaTabellaRendPerQuart(){
	var colonneTab = [
		{ field   : 'descCol', 	title   : ''},
		{ field   : '5A' , 		title   : '5A' , 	  'class'	: 'center'	},
		{ field   : '4A' , 		title   : '4A' , 	  'class'	: 'center'	},
		{ field   : '3A' , 		title   : '3A' , 	  'class'	: 'center'	},
		{ field   : '2A' , 		title   : '2A' , 	  'class'	: 'center'	},
		{ field   : '1A' , 		title   : '1A' , 	  'class'	: 'center'	}
		
	];
	$("#idSFTableRendPerQuart").bootstrapTable({
		data	 : {}, 
		columns	 : colonneTab,
		rowStyle : function(row, index) {
				if(index % 2 == 0){ 
						return {classes: 'dispari'}	
				}
				else { return {classes: 'pari'	}	}
			}
		});
	var datiTab = [];
	var datiRigaVal = ["", fondo.quartile5Anno, fondo.quartile4Anno, fondo.quartile3Anno, fondo.quartile2Anno, fondo.quartile1Anno];
	var tempJson = {};
	for(var rowIdx=1; rowIdx<=4; rowIdx++){
		tempJson = {};
		$.each(colonneTab, function(idx){
			if(undefined == tempJson[colonneTab[0].field]){ 
				tempJson[colonneTab[idx].field] =  rowIdx+"&deg; quartile";
				return true;
			}
			if(undefined != datiRigaVal[idx] && rowIdx == datiRigaVal[idx]){
				tempJson[colonneTab[idx].field] = "<i class=\"icon icon-check-ok_table\"></i>";
			}
			else{
				tempJson[colonneTab[idx].field] = "-";
			}
		});
		datiTab[datiTab.length] = tempJson;
	}
	
	
	$("#idSFTableRendPerQuart").bootstrapTable('load', datiTab);
}

function caricaTabRatingRischio(){
	$("#idRRNumRating").text(verificaInput(fondo.gradoRischio,"-", false, 0,0) );
	
	var colonneTab = [
		{ field   : 'descCol', 	title   : ''},
		{ field   : 'anno0' , 	title   : ''+verificaInput(elencodati.dataRif0,"-", false, 0,0) , 	  'class'	: 'center'	},
		{ field   : 'anno1' , 	title   : ''+verificaInput(elencodati.dataRif1,"-", false, 0,0) , 	  'class'	: 'center'	},
		{ field   : 'anno2' , 	title   : ''+verificaInput(elencodati.dataRif2,"-", false, 0,0) , 	  'class'	: 'center'	},
		{ field   : 'anno3' , 	title   : ''+verificaInput(elencodati.dataRif3,"-", false, 0,0) , 	  'class'	: 'center'	},
		{ field   : 'anno4' , 	title   : ''+verificaInput(elencodati.dataRif4,"-", false, 0,0) , 	  'class'	: 'center'	}
		
	];
	$("#idRRTableRatingScore").bootstrapTable({
		data	 : {}, 
		columns	 : colonneTab,
		rowStyle : function(row, index) {
				if(index % 2 == 0){ 
						return {classes: 'dispari'}	
				}
				else { return {classes: 'pari'	}	}
			}
		});
	var datiTab = [];
	datiTab[datiTab.length] = {'descCol':"<strong><span class=\"txthelp\" data-toggle=\"tooltip\" 																					\
											title=\"<b>RATING</b>: &egrave; un <b>giudizio sintetico</b>, rappresentato da &quot;corone&quot; 								\
													su una scala da 5 (migliori) a 1 (peggiori), attribuito da BRating ai prodotti di risparmio gestito (Fondi e Sicav).	\
													Il procedimento parte dall'<b>analisi qualitativa</b> delle caratteristiche d'<b>investimento</b> per giungere ad una 	\
													<b>valutazione quantitativa</b> basata sulla posizione del <b>singolo fondo</b> nella categoria di appartenenza,		\
													ordinata sulla base di parametri di rendimento e rischio.\">															\
										Rating del fondo</span></strong>" , 
								'anno0' : "<strong>" + verificaInput(elencodati.rating0,		"-", false, 0,0) + "</strong>", 
								'anno1' : "<strong>" + verificaInput(elencodati.rating1,		"-", false, 0,0) + "</strong>", 
								'anno2' : "<strong>" + verificaInput(elencodati.rating2,		"-", false, 0,0) + "</strong>", 
								'anno3' : "<strong>" + verificaInput(elencodati.rating3,		"-", false, 0,0) + "</strong>", 
								'anno4' : "<strong>" + verificaInput(elencodati.rating4,		"-", false, 0,0) + "</strong>" 
							};
	datiTab[datiTab.length] = {'descCol':"<strong><span class=\"txthelp\" data-toggle=\"tooltip\"  																		\
											title=\"<b>SCORE</b>: &egrave; la sintesi del modello di valutazione della qualit&agrave; gestionale mediante l'assegnazione di \
													un <b>punteggio</b> da 100 (migliore) a 1 (peggiore) ai fondi e alle Sicav presenti in ciascuna categoria BRating. 		\
													&Egrave; un <b>criterio oggettivo</b> di <b>valutazione</b> fondato su un algoritmo matematico che 						\
													combina indicatori statistici di rendimento e rischio espressi in un definito	orizzonte temporale.\">					\
										Score categoria</span></strong>", 
								'anno0' : verificaInput(elencodati.scoring0,		"-", false, 0,0), 
								'anno1' : verificaInput(elencodati.scoring1,		"-", false, 0,0), 
								'anno2' : verificaInput(elencodati.scoring2,		"-", false, 0,0), 
								'anno3' : verificaInput(elencodati.scoring3,		"-", false, 0,0), 
								'anno4' : verificaInput(elencodati.scoring4,		"-", false, 0,0) 
								};
	$("#idRRTableRatingScore").bootstrapTable('load', datiTab);
	
	$("#idRRCatBRating").text(fondo.nomeCategoriaBrating);
	
	var colonneTabRRAnalisi = [
		{ field   : 'descCol', 	title   : ''},
		{ field   : '1A' , 	title   : '1A', 	  'class'	: 'center'	},
		{ field   : '3A' , 	title   : '3A', 	  'class'	: 'center'	},
		{ field   : '5A' , 	title   : '5A' , 	  'class'	: 'center'	}
	];
	$("#idRRTableAnalisi").bootstrapTable({
		data	 : {}, 
		columns	 : colonneTabRRAnalisi,
		rowStyle : function(row, index) {
				if(index % 2 == 0){ 
						return {classes: 'dispari'}	
				}
				else { return {classes: 'pari'	}	}
			}
		});
	var datiTabRRAnalisi = [];
	datiTabRRAnalisi[datiTabRRAnalisi.length] = {'descCol':"<strong><span class=\"txthelp\" data-toggle=\"tooltip\"  									\
													title=\"<b>RENDIMENTO</b>: &egrave; il rendimento a 1, 3, 5 anni conseguito dal fondo.\"> Rendimento (EUR)</span></strong>", 
												'1A' : "<strong>" + verificaInput(fondo.rend1Ann,"-", true, 0,2) + " &#37;" + "</strong>", 
												'3A' : "<strong>" + verificaInput(fondo.rend3Ann,"-", true, 0,2) + " &#37;" + "</strong>", 
												'5A' : "<strong>" + verificaInput(fondo.rend5Ann,"-", true, 0,2) + " &#37;" + "</strong>"
							};
	datiTabRRAnalisi[datiTabRRAnalisi.length] = {'descCol':"<strong><span class=\"txthelp\" data-toggle=\"tooltip\"  									\
															title=\"<b>VOLATILIT&Agrave;</b>: indica la <b>variabilit&agrave;</b>  del <b>rendimento</b> del fondo nel tempo \
																	e rappresenta quindi la tendenza del valore quota/NAV a discostarsi dal valore medio nel periodo 		\
																	considerato (1, 3, 5, 10 anni).	Quanto pi&ugrave; alta &egrave; la volatilit&agrave;, tanto maggiore 	\
																	&egrave; stata l'oscillazione del valore quota/NAV nel periodo di riferimento.							\
																	Maggiore &egrave; la volatilit&agrave; di un fondo, pi&ugrave; il fondo &egrave; rischioso.\"> 			\
														Volatilit&agrave;</span></strong>", 
												'1A' : verificaInput(fondo.vol1Ann,"-", true, 0,2) + " &#37;", 
												'3A' : verificaInput(fondo.vol3Ann,"-", true, 0,2) + " &#37;", 
												'5A' : verificaInput(fondo.vol5Ann,"-", true, 0,2) + " &#37;" 
												};
	datiTabRRAnalisi[datiTabRRAnalisi.length] = {'descCol':"<strong><span class=\"txthelp\" data-toggle=\"tooltip\"  									\
															title=\"<b>INDICE DI SHARPE</b>: &egrave; un indice usato per valutare l'<b>efficienza</b> della <b>gestione</b> \
																	calcolato come rapporto tra il differenziale di rendimento di un fondo rispetto ad un'attivit&agrave; 	\
																	priva di rischio (in genere il tasso d'interesse sui titoli di Stato) e il rischio corso				\
																 	(deviazione standard). <b>Maggiore</b> &egrave; l'<b>indice di Sharpe</b>, <b>migliore</b> &egrave; la	\
																	<b>performance</b> storica del fondo corretta per il rischio e quindi l'efficienza della gestione.\"> 	\		\
														Indice di Sharpe</span></strong>", 
												'1A' : verificaInput(fondo.sharpe1,"-", true, 0,3), 
												'3A' : verificaInput(fondo.sharpe3,"-", true, 0,3), 
												'5A' : verificaInput(fondo.sharpe5,"-", true, 0,3) 
											};
	datiTabRRAnalisi[datiTabRRAnalisi.length] = {'descCol':"<strong><span class=\"txthelp\" data-toggle=\"tooltip\"  									\
															title=\"<b>INDICE DI SORTINO</b>: &egrave; un indice usato per valutare l'efficienza della gestione calcolato come \
																 	rapporto tra il differenziale di rendimento di un fondo rispetto ad un'attivit&agrave; priva di rischio	   \
																 	(in genere il tasso d'interesse sui titoli di Stato) e il rischio corso (misurato con il downside risk).   \
																	Maggiore &egrave;  l'indice di Sortino, migliore &egrave; la performance storica del fondo corretta per il \
																	rischio e quindi l'efficienza della gestione.\"> Indice di Sortino </span></strong>", 
												'1A' : verificaInput(fondo.sortino1,"-", true, 0,3), 
												'3A' : verificaInput(fondo.sortino3,"-", true, 0,3), 
												'5A' : verificaInput(fondo.sortino5,"-", true, 0,3) 
											};

	$("#idRRTableAnalisi").bootstrapTable('load', datiTabRRAnalisi);
	
	var colonneTabRRAnalisiRischio = [
		{ field   : 'descCol', 	title   : ''},
		{ field   : '3A' , 	title   : '3A', 	  'class'	: 'center'	}
	];
	$("#idRRTableAnalisiRischio").bootstrapTable({
		data	 : {}, 
		columns	 : colonneTabRRAnalisiRischio,
		rowStyle : function(row, index) {
				if(index % 2 == 0){ 
						return {classes: 'dispari'}	
				}
				else { return {classes: 'pari'	}	}
			}
		});
	var datiTabRRAnalisiRischio = [];
	datiTabRRAnalisiRischio[datiTabRRAnalisiRischio.length] = {'descCol':"<span class=\"txthelp\" data-toggle=\"tooltip\" 									\
																		title=\"<b>BETA</b>: &egrave; un <b>indicatore</b> che esprime l'<b>elasticit&agrave; dei movimenti</b>\
																				del fondo rispetto a quelli dell'<b>indice</b> di <b>riferimento</b> (benchmark). L'indice di \
																				riferimento ha un valore di Beta pari a 1. Un fondo con Beta maggiore di 1 tende ad			  \
																	 			amplificare i movimenti del mercato, mentre con un Beta inferiore a 1 tende a smorzarli. 	  \
																				L'amplificazione sar&agrave; tanto maggiore quanto pi&ugrave; elevato sar&agrave; il Beta.	  \
																				Ad esempio: a fronte di un incremento del 10% dell'indice di riferimento, un fondo con Beta	  \
																	 			pari a 1,1 salirebbe tendenzialmente dell'11%, mentre in caso di flessione dell'indice del 10%,\
																				tendenzialmente perderebbe l'11%.\"> Beta", 
																'3A' : verificaInput(fondo.beta,"-", true, 0,3) 
															};
	datiTabRRAnalisiRischio[datiTabRRAnalisiRischio.length] = {'descCol':"<span class=\"txthelp\" data-toggle=\"tooltip\"  													\
																		title=\"<b>R-QUADRO</b>: &egrave; un indicatore di quanto il <b>comportamento</b> di un fondo sia 	\
																			riconducibile all'<b>andamento</b> dell'indice di riferimento (benchmark).  &Egrave; utile per	\
																	 		valutare se la gestione del fondo &egrave; passiva (ovvero replica il benchmark) o attiva.		\
																	 		Il valore dell'indicatore varia da 0 a 1 dove 1 indica che il fondo ha perfettamente replicato 	\
																			il parametro di riferimento. Pi&ugrave; il valore &egrave; elevato, maggiore &egrave;  			\
																			l'adattamento del fondo al parametro di riferimento.\"> R-Quadro", 
																'3A' : verificaInput(fondo.rQuadro,"-", true, 0,3) 
															};
	datiTabRRAnalisiRischio[datiTabRRAnalisiRischio.length] = {'descCol':"<span class=\"txthelp\" data-toggle=\"tooltip\"  									\
																		title=\"<b>TRACKING ERROR VOLATILY (TEV)</b>: esprime la <b>volatilit&agrave;</b> dei rendimenti 	\
																			differenziali di un fondo rispetto all'indice di riferimento (benchmark). Quanto pi&ugrave; 	\
																			il valore della TEV si avvicina a zero tanto pi&ugrave; vi sar&agrave; correlazione tra 		\
																			l'andamento del fondo e il suo benchmark. In tal caso si pu&ograve; dire che il prodotto &egrave; \
																			a gestione passiva, cio&egrave;	che replica l'indice di riferimento. Quanto pi&ugrave; la TEV	\
																	  		&egrave; elevata, tanto pi&ugrave; la gestione del	fondo &egrave; stata attiva.\">				\
																	  	Tracking Error Volatility", 
																'3A' : verificaInput(fondo.trkError,"-", true, 0,3) 
																};
	$("#idRRTableAnalisiRischio").bootstrapTable('load', datiTabRRAnalisiRischio);
	
	$("#idRRTableAnalisiEff").bootstrapTable({
		data	 : {}, 
		columns	 : colonneTabRRAnalisiRischio,
		rowStyle : function(row, index) {
				if(index % 2 == 0){ 
						return {classes: 'dispari'}	
				}
				else { return {classes: 'pari'	}	}
			}
		});
	var datiTabRRAnalisiEff = [];
	datiTabRRAnalisiEff[datiTabRRAnalisiEff.length] = {'descCol':"<span class=\"txthelp\" data-toggle=\"tooltip\"  									\
																		title=\"<b>ALFA</b>: indica la capacit&agrave; del gestore di battere sistematicamente l'indice di \
																			riferimento (benchmark). Maggiore &egrave; l'Alfa e pi&ugrave; elevata &egrave; la capacit&agrave; \
																			del gestore di ottenere statisticamente rendimenti positivi rispetto al benchmark. L'Alfa 		\
																			pu&ograve; essere anche negativo nel caso in cui il fondo tenda a sottoperformare stabilmente 	\
																			il benchmark.\"> Alfa", 
														'3A' : verificaInput(fondo.alpha,"-", true, 0,3) 
													};
	datiTabRRAnalisiEff[datiTabRRAnalisiEff.length] = {'descCol':"<span class=\"txthelp\" data-toggle=\"tooltip\"  															\
																		title=\"<b>INFORMATION RATIO</b>: indicatore che <b>misura l'extra rendimento</b> ottenuto dalla 	\
																			gestione di un fondo rispetto al proprio benchmark in relazione al rischio assunto. Valori 		\
																			positivi di Information Ratio sono indicatori di gestione attiva &quot;efficiente&quot;, 		\
																			valori tendenti a zero sono tipici di una gestione che replica il benchmark (gestione passiva), \
																			valori negativi sono indicatori di gestione senza valore aggiunto.\"> Information Ratio", 
														'3A' : verificaInput(fondo.infRateo,"-", true, 0,3) 
													};
	datiTabRRAnalisiEff[datiTabRRAnalisiEff.length] = {'descCol':"<span class=\"txthelp\" data-toggle=\"tooltip\"  															 \
																		title=\"<b>INDICE DI TREYNOR</b>: &egrave; un <b>indice di rischio finanziario</b> che utilizza il 	 \
																			<b>Beta</b> come indice di rischio a differenza dell'indice di Sharpe che utilizza la 			 \
																			deviazione standard. Un indice di Treynor elevato &egrave; indicatore di elevata capacit&agrave; \
																			del portafoglio di remunerare l'esposizione al rischio sistematico di mercato (Beta).\">		 \			\
																Indice di Treynor", 
														'3A' : verificaInput(fondo.idxTreynor,"-", true, 0,3) + " &#37;"
													};
	$("#idRRTableAnalisiEff").bootstrapTable('load', datiTabRRAnalisiEff);
}

function caricaTabComposizione(){
	$("#idCompAA").hide();
	if(undefined != elencodati.activeAssetAllocation && true==elencodati.activeAssetAllocation){
		$("#idCompAA").show();
	}
	
	$("#idCompDG").hide();
	dati_distribuzione = [];
	if(undefined != elencodati.listaDistribGeo){
		var listaDistribGeo = $.parseJSON(elencodati.listaDistribGeo);
		if(undefined != listaDistribGeo && null != listaDistribGeo && 0!=listaDistribGeo.length){
			$.each(listaDistribGeo, function(idx){
				var distrib = {};
				distrib.chiave = "" + listaDistribGeo[idx].descComposizione.replace("'","\'");
				distrib.valore = "" + listaDistribGeo[idx].valore;
				distrib.color  = "" + listaDistribGeo[idx].colore;
				dati_distribuzione.push(distrib);
			});
			$("#idCompDG").show();
		}
	}

	$("#idCompDS").hide();
	dati_settori = [];
	if(undefined != elencodati.listaDistribSett){
		var listaDistribSett = $.parseJSON(elencodati.listaDistribSett);
		if(undefined != listaDistribSett && null != listaDistribSett && 0!=listaDistribSett.length){
			$.each(listaDistribSett, function(idx){
				var distrib = {};
				distrib.chiave = "" + listaDistribSett[idx].descComposizione.replace("'","\'");
				distrib.valore = "" + listaDistribSett[idx].valore;
				distrib.color  = "" + listaDistribSett[idx].colore;
				dati_settori.push(distrib);
			});
			$("#idCompDS").show();
		}
	}
	
	$("#idCompTT").hide();
	dati_topten = [];
	if(undefined != elencodati.listaTopTen && 300!=fondo.codSocietaComparti){	//Eurizon
		var listaTopTen = $.parseJSON(elencodati.listaTopTen);
		if(undefined != listaTopTen && null != listaTopTen && 0!=listaTopTen.length){
			var index = 0;
			var size = graphColors.length;
			$.each(listaTopTen, function(idx){
				var distrib = {};
				distrib.chiave = "" + listaTopTen[idx].descrizioneTitolo.replace("'","\'");
				distrib.valore = "" + listaTopTen[idx].valore;
				if (index == size) {
					index = 0;
				}
				distrib.color  = "" + graphColors[index];
				dati_topten.push(distrib);
				index++;
			});
			$("#idCompTT").show();
		}
	}
	
	$("#idCompEV").hide();
	dati_esposizione = [];
	if(undefined != elencodati.listaEsposValuta){
		var listaEsposValuta = $.parseJSON(elencodati.listaEsposValuta);
		if(undefined != listaEsposValuta && null != listaEsposValuta && 0!=listaEsposValuta.length){
			$.each(listaEsposValuta, function(idx){
				var distrib = {};
				distrib.chiave = "" + listaEsposValuta[idx].descComposizione.replace("'","\'");
				distrib.valore = "" + listaEsposValuta[idx].valore;
				distrib.color  = "" + listaEsposValuta[idx].colore;
				dati_esposizione.push(distrib);
			});
			$("#idCompEV").show();
		}
	}
	
	var colonneTabCompRating = [];
	if(undefined != elencodati.ratings && null!=elencodati.ratings && ""!=elencodati.ratings){
		var ratings = $.parseJSON(elencodati.ratings);
		if(undefined != ratings && null != ratings ){
			$.each(ratings, function(key,value){
				colonneTabCompRating[colonneTabCompRating.length] = { field : key , title : value , 'class'	: 'center'	};
			});
		}
	}
	$("#idCompTableQC").bootstrapTable({
		data	 : {}, 
		columns	 : colonneTabCompRating,
		rowStyle : function(row, index) {
				if(index % 2 == 0){ 
						return {classes: 'dispari'}	
				}
				else { return {classes: 'pari'	}	}
			}
		});
	var datiTabCompRating = [], tempJson = {};
	if(undefined != elencodati.listaQualitaCredito && null!=elencodati.listaQualitaCredito && ""!=elencodati.listaQualitaCredito){
		var listaQualitaCredito = $.parseJSON(elencodati.listaQualitaCredito);
		if(undefined != listaQualitaCredito && null != listaQualitaCredito){
			$.each(colonneTabCompRating, function(idx){
				var defVal = "-";
				if(undefined != listaQualitaCredito[colonneTabCompRating[idx].field]){
					defVal = "" + verificaInput(listaQualitaCredito[colonneTabCompRating[idx].field].valore,"-", true, 0,2) + " &#37;";
				}
				tempJson[colonneTabCompRating[idx].field] = defVal;
			});
			datiTabCompRating[datiTabCompRating.length] = tempJson;
		}
		
	}
	$("#idCompTableQC").bootstrapTable('load', datiTabCompRating);
	
}

function caricaTabSocietaGestione(){
	if(undefined!=elencodati.sicav && null!=elencodati.sicav && ""!=elencodati.sicav ){ 
		var sicav = $.parseJSON(elencodati.sicav);
		if(undefined!=sicav){
			$("#idSGNomeSocieta").text(sicav.nome);
			$("#idSGShortDesc").html(sicav.descrizioneBreve);
			$("#idSGDesc").html(sicav.descrizione);
			$("#idSGFonte").html("Fonte: " + sicav.link);
			$("#idSGAddressId").html(sicav.address);
			
			if(undefined!=sicav.documenti && null!=sicav.documenti && sicav.documenti.length>0) {
				
				$.each(sicav.documenti, function(idx){ 
					$("#idSGLegalDocs").append("<li><a target='_blank' href='" + wrp_script_direct + "/investimenti/ApriDocumenti.action?tipoDocumento=" 
												+ sicav.documenti[idx].nome + "&keyDocumento=" + fondo.codIsin + "' class='btn-icon'><i class='icon icon-file_pdf'></i><span>" +
							 					sicav.documenti[idx].path + (sicav.documenti[idx].nome.indexOf("pinf")<0?fondo.codIsin:"") + "</span></a></li>") ;
				});
				
			}
//			textAccordionInit2();
		}
	}
}

var textAccordionInit2 = function() {
    $(".text-accordion .text-term").not("[data-inited=true]").attr("data-inited","true").click( function(){ 
    	$(this).parents(".text-accordion").toggleClass("opened");
    	if($(this).parents(".text-accordion").hasClass("opened")){
    		$("#idSGDescAccord").html("riduci");
    	}
    	else{
    		$("#idSGDescAccord").html("leggi di pi&ugrave;");
    	}
    });
}

function watchListFunzione(){
	$("*[data-modal-action='addToWatchlist']").click(function(){
		// Apre la modale
		$("#addToWlSelectForm").addClass("loading");
		$("#addToWl").modal("show");
		
		loadWatchlistSF();	//watchlist.js
		
		// "Resetta" la modale
		$("#addToWlSelectForm").removeClass("loading").show();
		$("#addToWlSelectConfirm").hide();
	});

	$('.btn-annulla').click(function() {
		$("#addToWl").modal("hide");
	});

	// aggiunge a Watchlist
	$("#addToWlBtn").click(function(){
		addToWL_IcoOpr($("#wlSingoloModal").val(), $("#wlSingoloModal").text(), fondo.codInt,"", "InsertFundIntoWLJson.action");
		

	});
	
	$("#wlSelect").change(function(){
		$("#wlSingolo").val($('#wlSelect :selected').val());
		$("#wlSingolo").text($('#wlSelect :selected').text());
	});
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

function showUltimiTreFondi(ultimiTreFondiStr){
	if(undefined!= ultimiTreFondiStr && null!=ultimiTreFondiStr && ""!=ultimiTreFondiStr){
		ultimiTreFondi = $.parseJSON(ultimiTreFondiStr);

			var divSFUFVal = "", ultimoFondoIdx=-1 ;
			$.each(ultimiTreFondi, function(idx){
				if(fondo.codIsin == ultimiTreFondi[idx].codIsin || 3==idx){
					return true;
				}
				ultimoFondoIdx++;
				divSFUFVal = divSFUF.replace(/{{index}}/g, ultimoFondoIdx);
				divSFUFVal = divSFUFVal.replace("{{SFUFNomeFondo}}", ultimiTreFondi[idx].nomeFondo);
				

				
				var fondoRating = "";
				for(var r=0; r<ultimiTreFondi[idx].rating; r++){
					fondoRating = fondoRating + ("<i class=\"icon icon-corona icon-corona-on\"></i>");
				}
				if("" == fondoRating){
					fondoRating = "-";
				}
				divSFUFVal = divSFUFVal.replace("{{SFUFRating}}", fondoRating);
				
				$("#idSFUF"+ultimoFondoIdx).append(divSFUFVal);
				$("#idSFUFConfronta"+ultimoFondoIdx).click(function(){
					fesConfSelected=[fondo.codFida, ultimiTreFondi[idx].codFida];
					$("#fesFondoWrap").hide();
					$("#tabConfronta .leftelement").trigger("click");
				});
				
			});
			$("#idSFUltimiTreFondi").hide();
			if(ultimoFondoIdx>=0){
				$("#idSFUltimiTreFondi").show();
			}
			
//		}
		
		
	}
}

function loadWatchlistSF() {
	$.ajax({
		url : wrp_script_direct + "/investimenti/WatchListFundSelect.action" + "?cf=" + Math.random(),
		dataType : "json",
		data : {},
		success : function(dataOutJSON, status, jqXHR) { 
						var msg = "Si &egrave; verificato un errore di connessione";
						if (200 == jqXHR.status) {
							if(dataOutJSON.action == "SUCCESS") {
								var datiJsonVal = {};
								if(dataOutJSON.elencoWatchListJson.length>1){
									var listaWL = [];
									$.each(dataOutJSON.elencoWatchListJson, function(key, value) {
										var wlObj = {"idWatchListFund": value.id, "nameWatchListFund":value.name};
										listaWL.push(wlObj);
									});
									datiJsonVal.listaWL = JSON.stringify(listaWL);
								}
								else{
									var unicaListaWL = {"idWatchListFund": dataOutJSON.elencoWatchListJson[0].id, "nameWatchListFund":dataOutJSON.elencoWatchListJson[0].name};
									datiJsonVal.unicaListaWL = JSON.stringify(unicaListaWL);
								}
								showWatchList_IcoOpr(datiJsonVal);
							}
							else if(dataOutJSON.action == "failure"){
								setWlMessaggio("negativo",dataOutJSON.errorMessage!=undefined && dataOutJSON.errorMessage!="" ? dataOutJSON.errorMessage : msg);
							}
						}
						else {
							setWlMessaggio("negativo",dataOutJSON.errorMessage!=undefined && dataOutJSON.errorMessage!="" ? dataOutJSON.errorMessage : msg);
						}
		},
		error : function(jqXHR, status, errorThrown) {
			var msg = "Si &egrave; verificato un errore di connessione";
			setWlMessaggio("negativo", msg);
		},
		complete : function(jqXHR, status) {
			$("#fullPageWl").removeClass("loading");
		}
	});
}


var divSFUF = "<div class=\"fundBox\">																									\
					<h4 id=\"idSFUFNomeFondo{{index}}\">{{SFUFNomeFondo}}</h4>															\
					<div class=\"control-label txthelp\" data-toggle=\"tooltip\" 														\
						 title=\"Il <b>rating</b> &egrave; un <b>giudizio sintetico</b>, rappresentato su una scala da 1 a 5 'corone', 	\
								attribuito da BRating ai prodotti di risparmio gestito (fondi e Sicav). 								\
								Il procedimento parte dall'<b>analisi qualitativa</b> delle caratteristiche d'<b>investimento</b> 		\
								per giungere a una valutazione <b>quantitativa</b> basata sulla posizione del singolo <b>fondo</b> 		\
								nella categoria di appartenenza, ordinata sulla base di parametri di rendimento e rischio.\">			\
						Rating FIDA																										\
					</div>																												\
					<div class=\"rating large\"><div id=\"idSFUFRating{{index}}\">{{SFUFRating}} </div></div>											\
					<div class=\"form-group btnWrapper\">																				\
							<div class=\"btn-align-right\">																				\
				                <a type=\"button\" class=\"btn btn-primary\"  id=\"idSFUFConfronta{{index}}\">Confronta</a>	\
				           	</div>																										\
						</div>																											\
					<br class=\"clear\">																								\
				</div>";
