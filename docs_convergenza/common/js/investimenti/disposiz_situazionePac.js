
var situazionePacSelectBeanJson = '',
	situazionePacSelectRequestJson	= {},
	pacBuyFundPreviewBeanJson ='',
	pacBuyFundConfirmBeanJson ='',
	pacBuyFundPreviewRequestJson = '',
	pacBuyFundPreviewFatcaRequestJson ='';
var situazionePacJson = {};
var bankName = '';			//Preview
var index = '';
var codiceSocietaMappa = { 
							'Etica_Sgr_Spa': {'newCodSoc':'777', 'oldCodSoc':'6'}
};
var datiFondiSitPac = [], idxVerPac = -1;
var obskeyVal = "nav_priv_wbx_vers_agg_pac_new"; //nav_priv_wbx_vers_agg_pac

function initializaSituazionePacSelect(datiSituazionePac){
	showError(false,null,null);
	showError2(false,null,null);
//	$("#fondi").show();
//	$("#fondi").addClass("loading");
	situazionePacSelectRequestJson.deposito = datiSituazionePac.deposito;
	$.ajax({
		url: wrp_script_direct + "/investimenti/SituazionePacSelectJson.action" + "?cf=" + Math.random(),
    	dataType: "json",
        data: datiSituazionePac	,
        success: function (dataOutJSON, status, jqXHR) {	//jqXHR.statusText="OK"; status="success"
        			var msg = "l'operazione di Acquisto per fondo selezionato non &egrave; possibile al momento";
        			if(200 == jqXHR.status){
        				situazionePacSelectBeanJson = $.parseJSON(dataOutJSON.data.situazionePacSelectBeanJson);
        				//buyFundSelectRequestJson = $.parseJSON(dataOutJSON.data.buyFundSelectRequestJson);

        				if("warning" == situazionePacSelectBeanJson.action){
        					showError(true,"E",situazionePacSelectBeanJson.errorMessage);
        					$("#sezioneReipilogo,#fondi").hide();
        				}
        				
        				else if("failure" == situazionePacSelectBeanJson.action){
        					$("#sezioneReipilogo,#fondi").hide();
        					showError(true,"E",msg);
        				}
        				else{
            				showError(false,null,null);
            				
            				if(Object.keys(situazionePacSelectBeanJson.listaDepositi).length > 1){
            					$('#elencoDepositi').show();
            					$('#deposito').hide();
            					$("#elencoDepositi").empty();
            					$.each(situazionePacSelectBeanJson.listaDepositi, function(key, value) {
            			            $("#elencoDepositi").append($('<option>').val(key).text(value));
            			        });
            					
            					$('#deposito').val($('#elencoDepositi :selected').val());
            					$('#deposito').text($('#elencoDepositi :selected').text());
            					
            					$('#elencoDepositi').change(function(){
            						$('#deposito').val($('#elencoDepositi :selected').val());
            						$('#deposito').text($('#elencoDepositi :selected').text());
            						showError(false,null,null);
            						showError2(false,null,null);
            						$("#fondi").show();
            						$("#fondi").addClass("loading");
            						Finance.loadFundData( $("#deposito").val(), "SIT", successoFondo, erroreFondo);
            					});
            				}
            				else{ 
            					$.each(situazionePacSelectBeanJson.listaDepositi, function(key, value) {
            						$('#deposito').val(key);
            						$('#deposito').text(value);
            					});
            					$('#deposito').show();
            				}
            				$("#fondi").show();
            				$("#fondi").addClass("loading");
            				Finance.loadFundData( $("#deposito").val(), "SIT", successoFondo, erroreFondo);
        				}
        			}
        			else{
        				var msg = "l'operazione di Situazione Pac per deposito selezionato non &egrave; possibile al momento";
        				showError(true,"E",msg);
        				$("#sezioneReipilogo,#fondi").hide();
        			}
        },
        error: function (jqXHR, status, errorThrown) {
        			var msg = "l'operazione di Situazione Pac per deposito selezionato non &egrave; possibile al momento";
                    showError(true,"E",msg);
           	        $("#sezioneReipilogo,#fondi").hide();
        },
        complete: function(){ 
        			$("#situazionePacForm").removeClass("loading");
        			/*setTimeout(function(){$("#buyFundForm").removeClass("loading");}, 10000);*/
        }
	});
	
	
	
}


//function successoFondo_OLD(fundData){
//
//	if(!$.isEmptyObject(fundData) && "OK" == fundData.esito && fundData.hasOwnProperty("fondi")) {
//		if(0 == Object.keys(fundData.fondi).length){
//			txtFondo = '';
//			esito = "W";
//			msgEsito = "Nel deposito titoli selezionato non sono presenti piani di accumulo sui fondi";
//			erroreFondo(txtFondo, esito, msgEsito);
//		}
//		else{
//			
//			var datiFondiSitPac = [],  idx=0;
//			for(var fund in fundData.fondi) {
//				var fondoJson = fundData.fondi[fund];
//				
//				for (var j=0; j<fondoJson.dettagli.length; j++) {
//					var fondo={};
//					
//					fondo.nome = fondoJson.nomefondo;
//					if(true == fondoJson.collocato || true == fondoJson.collocatoSell || true == fondoJson.collocatoSwitch){
////						var hrefScedaFondo = "../../jsp/FMP/fida/ricerca.action";
////						hrefScedaFondo += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto";
//						var hrefScedaFondo = "../../action/investimenti/RicercaFondi.action";
//						hrefScedaFondo += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_sitauz_pac";
//						hrefScedaFondo += "&codiceIsin="+fund+"&fondo=true";
//						hrefScedaFondo += "&idItem=wb_portafoglio_fondi";	//per mantere menu sinistra di prima
//						fondo.nome 			= "<a href=" + hrefScedaFondo +" >" + fondoJson.nomefondo + " </a>";
//					}
//					
//					var statoPianoPac	= '-';
//					var codiceStatoPianoPac = fondoJson.dettagli[j].statoPianoPac;
//					if(codiceStatoPianoPac!=null && codiceStatoPianoPac!=undefined && codiceStatoPianoPac!=''){
//						if(codiceStatoPianoPac == "E"){
//							statoPianoPac = "ESTINTO";
//						}
//						else {
//							fondo.prossimoivers = fondoJson.dettagli[j].dataScadenza;
//							if(codiceStatoPianoPac == "A"){
//								statoPianoPac = "ATTIVO <br> (RATA AUTOMATICA)";
//							}
//							else if(codiceStatoPianoPac == "M"){
//								statoPianoPac = "ATTIVO <br> (RATA MANUALE)";
//								fondo.prossimoivers = "-";
//							} 
//							else if (codiceStatoPianoPac == "S") {
//								statoPianoPac = "SOSPESO";
//							}
//						}
//					}
//					
//					fondo.stato 	 	= statoPianoPac;
//					fondo.rata 		 	= fondoJson.dettagli[j].importorata;
//					fondo.ratetotali 	= fondoJson.dettagli[j].rateTotaliPiano + "<br>" + fondoJson.dettagli[j].descrizioneanni;
//					fondo.versamenti 	= fondoJson.dettagli[j].rateSottoscritte;
//					fondo.rateresidue 	= fondoJson.dettagli[j].rateresidue;
//					fondo.nquote 		= parseFloat(fondoJson.dettagli[j].quote).toLocaleString("it-IT") + "<br>" +
//										  (fondoJson.dettagli[j].controvalore != "" && fondoJson.dettagli[j].controvalore != undefined ?
//												  fondoJson.dettagli[j].controvalore + " EUR" : "-");
//					fondo.ncontratto 	= fondoJson.dettagli[j].contratto;
//					
//					fondo.versa 		= ' ';
//					if(codiceStatoPianoPac != "E" && fondoJson.dettagli[j].addRataPac =='S'){
//						var hrefVersaPac = "PacBuyFundSelect.action";
//						hrefVersaPac += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vers_agg_pac";
//						hrefVersaPac += "&deposito="+$('#deposito').val() +"&codIsin="+fondo.ncontratto +"&situazionePac=true" ;
//						var redirectHtml 	= "<a id=\"versa_" + fondo.ncontratto + "\" href=" + hrefVersaPac + " class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-arrow_emphasis_filled\"></i></a>";
//						fondo.versa = redirectHtml;
//					}
//					fondo.descrizione = fondoJson.nomefondo;
//					datiFondiSitPac[idx++] = fondo;
//					
//				}
//			}
//			
//			
//			var colonneTab =	[
//
//				{
//					field : 'nome',
//					sortName: 'descrizione',
//					title : 'Nome',
//					sortable : true,
//					order : 'asc'
//				},
//				{
//					field : 'stato',
//					title : 'Stato',
//					sortable : true,
//					'class'	: 'center'
//				},
//				{
//					field : 'rata',
//					title : 'Rata',
//					titleTooltip: 'Importo Rata',
//					sortable : true,
//					'class'	: 'center'
//				},
//				{
//					field : 'ratetotali',
//					title : 'N.rate tot <br> Durata',
//					titleTooltip: 'Numero Rate Totale e Durata in anni',
//					sortable : true,
//					'class'	: 'right'
//				},
//				{
//					field : 'versamenti',
//					title : 'Vers. <br> eff. ',
//					titleTooltip: 'Versamenti effettuati',
//					sortable : true,
//					'class'	: 'right'
//				},
//				{
//					field : 'rateresidue',
//					title : 'Rate res.',
//					titleTooltip: 'Rate residue',
//					sortable : true,
//					'class'	: 'right'
//				},
//				{
//					field : 'prossimoivers',
//					title : 'Prox versam.',
//					titleTooltip: 'Prossimo versamento',
//					sortable : true,
//					'class'	: 'center'
//				},
//				{
//					field : 'nquote',
//					title : 'N. quote <br> Controv. EUR',
//					titleTooltip: 'Numero di quote e Contravalore in Euro',
//					sortable : true,
//					'class'	: 'right'
//				},
//				{
//					field : 'ncontratto',
//					title : 'Contratto n.',
//					sortable : true,
//					'class'	: 'center'
//				},
//				{
//					field : 'versa',
//					title : 'Versa',
////					sortable : true,
//				},
//				
//		];
//			
//			$('#tableFondi').bootstrapTable({
//		        data			 : {}
//		        ,sortOrder		 : "asc",
//	            sortName		 : "descrizione",
//	            pagination 		 : "true",
//	            paginationVAlign : "top",
//	            pageSize		 : 15,
//	            pageList		 : [15, 30, 60, 'tutti'],
//		        rowStyle		 : function(row, index) {
//										if(index % 2 == 0)
//										{
//											return {
//												classes: 'dispari'
//											}
//										}
//										else {
//											return {
//												classes: 'pari'
//											}
//										}
//									}
//			,columns			: colonneTab
//			 });
//			$('#tableFondi').bootstrapTable('load', datiFondiSitPac);  
//		}
//	}
//	else{
//		txtFondo = '';
//		esito = "W";
//		msgEsito = "Nel deposito titoli selezionato non sono presenti piani di accumulo sui fondi";
//		erroreFondo(txtFondo, esito, msgEsito);
//	}
//	$("#fondi").removeClass("loading");
//}


function erroreFondo(txtFondo, esito, msgEsito){	
//	if(esito == "timeout"){
//		if(Finance.prova <4 ){
//			Finance.prova ++;
//			Finance.chiamataIsal($("#deposito").val(), "SIT", successoFondo, erroreFondo,Finance.cf,Finance.prova);
//		}
//		else{
//			erroreFondo(txtFondo, "E", "Proxy Error");
//		}
//	}
//	else{
		$("#fondi").hide();
		showError2(true,esito,msgEsito);
//	}
}

function showError(show, tipo, msg){
	if(!show){
		$('#erroreForm').hide();
	}
	else{
		var errorBorderClass = ''
			;
		if("E" == tipo){
			errorBorderClass = 'negativo';
		}
		else if("W" == tipo){
			errorBorderClass = 'attenzione';
		}
		$("#errorBorder").addClass(errorBorderClass);
		$("#messaggio").html(msg);
		$('#erroreForm').show();
		window.scrollTo(0,0);
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

//ico 4/

function successoFondo(fundData){

	if(!$.isEmptyObject(fundData) && "OK" == fundData.esito && fundData.hasOwnProperty("fondi")) {
		if(0 == Object.keys(fundData.fondi).length){
			txtFondo = '';
			esito = "W";
			msgEsito = "Nel deposito titoli selezionato non sono presenti piani di accumulo sui fondi";
			erroreFondo(txtFondo, esito, msgEsito);
		}
		else{
			
			datiFondiSitPac = [],  idx=0;
			for(var fund in fundData.fondi) {
				var fondoJson = fundData.fondi[fund];
				
				for (var j=0; j<fondoJson.dettagli.length; j++) {
					var fondo={};
					
					fondo.nome = fondoJson.nomefondo;
					if(true == fondoJson.collocato || true == fondoJson.collocatoSell || true == fondoJson.collocatoSwitch){
//						var hrefScedaFondo = "../../jsp/FMP/fida/ricerca.action";
//						hrefScedaFondo += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto";
						var hrefScedaFondo = "../../action/investywb/RicercaFondi.action";
						hrefScedaFondo += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_sitauz_pac";
						hrefScedaFondo += "&codiceIsin="+fund+"&fondo=true";
						hrefScedaFondo += "&idItem=wb_portafoglio_fondi";	//per mantere menu sinistra di prima
						fondo.nome 			= "<a href=" + hrefScedaFondo +" >" + fondoJson.nomefondo + " </a>";
					}
					
					var statoPianoPac	= '-';
					var codiceStatoPianoPac = fondoJson.dettagli[j].statoPianoPac;
					if(codiceStatoPianoPac!=null && codiceStatoPianoPac!=undefined && codiceStatoPianoPac!=''){
						if(codiceStatoPianoPac == "E"){
							statoPianoPac = "ESTINTO";
						}
						else {
//							fondo.prossimoivers = fondoJson.dettagli[j].dataScadenza;
							if(codiceStatoPianoPac == "A"){
								statoPianoPac = "ATTIVO <br> (RATA AUTOMATICA)";
							}
							else if(codiceStatoPianoPac == "M"){
								statoPianoPac = "ATTIVO <br> (RATA MANUALE)";
								fondo.prossimoivers = "-";
							} 
							else if (codiceStatoPianoPac == "S") {
								statoPianoPac = "SOSPESO";
							}
						}
					}
					
					fondo.stato 	 	= statoPianoPac;
					
					fondo.divisa		= fondoJson.tipodivisa;
					fondo.nav			= ("" + fondoJson.nav).replace(".",",");	//formatDecimal
					fondo.dataNav		= fondoJson.datanav;
					fondo.navDataNav	= fondo.nav + "<br>" + fondoJson.datanav;
					
//					fondo.rata 		 	= fondoJson.dettagli[j].importorata;
//					fondo.ratetotali 	= fondoJson.dettagli[j].rateTotaliPiano + "<br>" + fondoJson.dettagli[j].descrizioneanni;
//					fondo.versamenti 	= fondoJson.dettagli[j].rateSottoscritte;
//					fondo.rateresidue 	= fondoJson.dettagli[j].rateresidue;
					
					fondo.nquote 		= parseFloat(fondoJson.dettagli[j].quote).toLocaleString("it-IT") + "<br>" +
										  (fondoJson.dettagli[j].controvalore != "" && fondoJson.dettagli[j].controvalore != undefined ?
												  fondoJson.dettagli[j].controvalore + " EUR" : "-");
//					fondo.ncontratto 	= fondoJson.dettagli[j].contratto;
					
//					var divDettaglioPacVal = divDettaglioPac.replace(/{{idx}}/g,j);
//					fondo.ncontratto 	= " <div class=\"text-accordion\"> " + 
//										  " 	<a id=\"idNumContratto\" "+j + " class=\"text-term\" onclick=\"expandDettgalioPac();\"><i class=\"icon icon-row_expand\"></i><i class=\"icon icon-row_contract\"></i>" +
//										  			fondoJson.dettagli[j].contratto + 
//										  "		</a>" +
//										  "  	<div class=\"text-definition\"> " + 
//										  		divDettaglioPacVal	+ 
//										  "		</div>" + 
//										  " </div>";
					fondo.ncontratto 	= " <div class=\"\"> " + fondoJson.dettagli[j].contratto + "<br>" +
										  " 	<a id=\"idNumContratto"+ idx + "\" class=\"\" onclick=\"expandDettaglioPac(this);\">" +
										  			"dettaglio PAC" + 
										  "		</a>" +
										  " </div>";

//					fondo.versa 		= ' ';
					fondo.icoope 		= "";
					fondo.hrefVersaPac  = "";
					if(codiceStatoPianoPac != "E" && fondoJson.dettagli[j].addRataPac =='S'){
						var hrefVersaPac = "PacAcquistoFondo.action";	//PacBuyFundSelect
						hrefVersaPac += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY="+ obskeyVal;
						hrefVersaPac += "&deposito="+$('#deposito').val() +"&codIsin="+fund + "&numContratto="+fondoJson.dettagli[j].contratto +"&situazionePac=true" ;
						
//						var redirectHtml 	= "<a id=\"versa_" + fondo.ncontratto + "\" href=" + hrefVersaPac + " class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-arrow_emphasis_filled\"></i></a>";
//						fondo.versa = redirectHtml;
					
						fondo.hrefVersaPac = hrefVersaPac;
//						fondo.icoope = "<a class=\"linkVai\" title=\"scegli l'operazione da effettuare\" href=\"javascript:;\" id=\"icoOpe"+ idx + "\"" +
//										" codicesocieta=\""+ fondoJson.codicesocietagestione +"\" codicecomparto=\""+ fondoJson.codicecomparto +"\" divisa=\""+ fondoJson.tipodivisa +"\" fondosicav=\""+""+"\" data-fundname=\""+ fondoJson.nomefondo+"\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a>";
					}
					fondo.icoope = 	"<a class=\"linkVai\" title=\"scegli l'operazione da effettuare\" href=\"javascript:;\" id=\"icoOpe"+ idx + "\"" +
									" codicesocieta=\""+ fondoJson.codicesocietagestione +"\" codicecomparto=\""+ fondoJson.codicecomparto +"\" divisa=\""+ fondoJson.tipodivisa +"\" fondosicav=\""+""+
									"\" data-fundname=\""+ fondoJson.nomefondo+"\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a>";

					fondo.descrizione = fondoJson.nomefondo;
					
					fondo.addRataPac	 = fondoJson.dettagli[j].addRataPac;
					fondo.codiceIsin	 = fund;
					fondo.codiceFondo 	 = fondoJson.codicefondo;
					fondo.codiceCliente  = fondoJson.codiceCliente;
					fondo.progressivoPac = fondoJson.dettagli[j].progressivoPac;
					fondo.fondoSicav 	 = fondoJson.fondoSicav;
					fondo.codAzioneFondo = fondoJson.codazionefondo;
					
					datiFondiSitPac[idx++] = fondo;
					
				}
			}
			
			
			var colonneTab =	[

				//per tablet - ico 1/
				{
					field   : 'icoope',
					title   : '',
					'class'	: 'icopad center visible-xs hidden-sm hidden-md hidden-lg hidden-xl'
				}
				,{
					field : 'nome',
					sortName: 'descrizione',
					title : 'Nome',
					sortable : true,
					order : 'asc'
				},
				{
					field : 'stato',
					title : 'Stato',
					sortable : true,
					'class'	: 'center'
				},
				{
					field : 'divisa',
					title : 'Divisa',
					sortable : true,
					'class'	: 'center'
				},
				{
					field : 'navDataNav',
					title : 'NAV',
					sortable : true,
					'class'	: 'center'
				},
//				{
//					field : 'rata',
//					title : 'Rata',
//					titleTooltip: 'Importo Rata',
//					sortable : true,
//					'class'	: 'center'
//				},
//				{
//					field : 'ratetotali',
//					title : 'N.rate tot <br> Durata',
//					titleTooltip: 'Numero Rate Totale e Durata in anni',
//					sortable : true,
//					'class'	: 'right'
//				},
//				{
//					field : 'versamenti',
//					title : 'Vers. <br> eff. ',
//					titleTooltip: 'Versamenti effettuati',
//					sortable : true,
//					'class'	: 'right'
//				},
//				{
//					field : 'rateresidue',
//					title : 'Rate res.',
//					titleTooltip: 'Rate residue',
//					sortable : true,
//					'class'	: 'right'
//				},
//				{
//					field : 'prossimoivers',
//					title : 'Prox versam.',
//					titleTooltip: 'Prossimo versamento',
//					sortable : true,
//					'class'	: 'center'
//				},
				{
					field : 'nquote',
					title : 'N. quote <br> Controv. EUR',
					titleTooltip: 'Numero di quote e Contravalore in Euro',
					sortable : true,
					'class'	: 'right'
				},
				{
					field : 'ncontratto',
					title : 'Contratto n. <br> e dettaglio PAC',
					sortable : true,
					'class'	: 'center'
				},
				 // ico 2/
				{
					field   : 'icoope',
					title   : '',
					'class'	: 'icopad center nosmall'
				}
//				,{
//					field : 'versa',
//					title : 'Versa',
//				}
				
		];
			
			$('#tableFondi').bootstrapTable({
		        data			 : {}
		        ,sortOrder		 : "asc",
	            sortName		 : "descrizione",
	            pagination 		 : "true",
	            paginationVAlign : "top",
	            pageSize		 : 15,
	            pageList		 : [15, 30, 60, 'tutti'],
		        rowStyle		 : function(row, index) {
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
			,columns			: colonneTab
			 });
			$('#tableFondi').bootstrapTable('load', datiFondiSitPac);  
			
			$(".linkVai").click(openIconaOpr);	// ico 3/
			
//			$(".linkVai").click(fesIcoOpeOverlay);
//			$(".linkVai").click(function(){openIconaOpr()});
			
			
		}
	}
	else{
		txtFondo = '';
		esito = "W";
		msgEsito = "Nel deposito titoli selezionato non sono presenti piani di accumulo sui fondi";
		erroreFondo(txtFondo, esito, msgEsito);
	}
	$("#fondi").removeClass("loading");
}

function openIconaOpr(){
	idxVerPac = -1;
	fesIcoOpeOverlay.call(($(this)));		//priv_fes.js
	var idVal = $(this).attr('id');
	idxVerPac = idVal.substr("icoOpe".length);	//icona_operativa.js
	
}

//function showDettaglioPacModal(){
//	//Pulisci data vecchia (se presente)
//	$("#importoRata, #dataProxVer, #rateVersate, #rateResidue, #rateTotale ,#durataAnni").text("");
//	
//	var fondoDettaglioPac = datiFondiSitPac[idxVerPac];
//	//TODO - JSON
//	$.ajax({
//		url: wrp_script_direct + "/investimenti/DettaglioPacJson.action" + "?cf=" + Math.random(),
//    	dataType: "json",
//        data: { 	codiceIsin 		: fondoDettaglioPac.codiceIsin ,
//				  	codiceFondo		: fondoDettaglioPac.codiceFondo ,
//					codiceCliente	: fondoDettaglioPac.codiceCliente ,
//					progressivoPac	: fondoDettaglioPac.progressivoPac ,	
//					fondoSicav		: fondoDettaglioPac.fondoSicav ,	
//					codAzioneFondo	: fondoDettaglioPac.codAzioneFondo,
//					deposito		: $('#deposito').val(),
//					type			: "SIT",
//					addRataPac		: fondoDettaglioPac.addRataPac},
//        success: function (dataOutJSON, status, jqXHR) {
//        	if(200 == jqXHR.status){
//				$("#modalErroreForm").hide();
//				var dettPacJson = dataOutJSON.fondi[fondoDettaglioPac.codiceIsin];
//				$("#importoRata").text(dettPacJson.importorata);
//				$("#proxVer").hide();
//				if(datiFondiSitPac[idxVerPac].hrefVersaPac != ""){
//					$("#proxVer").show();
//					$("#dataProxVer").text(dettPacJson.dataScadenza);
//				}
//				$("#rateVersate").text(dettPacJson.rateSottoscritte);
//				$("#rateResidue").text(dettPacJson.rateresidue);
//				$("#rateTotale") .text(dettPacJson.rateTotaliPiano);
//				$("#durataAnni") .text(dettPacJson.descrizioneanni);
//				$("#sezioneDettaglio").show();
//			}
//			else{
//				$("#modalErroreForm").show();
//				$("#sezioneDettaglio").hide();
//			}
//        },
//        error: function (jqXHR, status, errorThrown) {
//        	
//        },
//        complete: function(){
//        	$("#dettaglioPac").modal("show");
//        }
//	});
//
//}

function expandDettaglioPac(obj){
	var idVal = $(obj).attr('id');	// $(this)
	var idRiga = idVal.substr("idNumContratto".length);
	
	var parentTr = $(obj).parent().parent().parent();
	
	//TODO - 
	if( $("#dettPac"+idRiga).length ){
		if($("#dettPac"+idRiga).is(":visible")){
			$("#dettPac"+idRiga).hide();
		}
		else{
			$("#dettPac"+idRiga).show();
		}
		
	}
	else{
		$(parentTr).after( $("<tr>", { "id":"dettPac"+idRiga}) );
		$("#dettPac"+idRiga).show();
		$("<td>", {"id":"dettPacCol"+idRiga, "colspan":"7"}).appendTo("#dettPac"+idRiga);
		
		var divDettaglioPacVal = divDettaglioPac.replace(/{{idx}}/g,idRiga);
		$(divDettaglioPacVal).appendTo("#dettPacCol"+idRiga);
		$("#sezioneDettaglio"+idRiga).show().addClass("loading");
	
	
	//Pulisci data vecchia (se presente)
	$("#importoRata, #dataProxVer, #rateVersate, #rateResidue, #rateTotale ,#durataAnni").text("");
	
	var fondoDettaglioPac = datiFondiSitPac[idRiga];
	//TODO - JSON
	$.ajax({
		url: wrp_script_direct + "/investimenti/DettaglioPacJson.action" + "?cf=" + Math.random(),
    	dataType: "json",
        data: { 	codiceIsin 		: fondoDettaglioPac.codiceIsin ,
				  	codiceFondo		: fondoDettaglioPac.codiceFondo ,
					codiceCliente	: fondoDettaglioPac.codiceCliente ,
					progressivoPac	: fondoDettaglioPac.progressivoPac ,	
					fondoSicav		: fondoDettaglioPac.fondoSicav ,	
					codAzioneFondo	: fondoDettaglioPac.codAzioneFondo,
					deposito		: $('#deposito').val(),
					type			: "SIT",
					addRataPac		: fondoDettaglioPac.addRataPac},
        success: function (dataOutJSON, status, jqXHR) {
        	if(200 == jqXHR.status){
//				$("#modalErroreForm").hide();
				var dettPacJson = dataOutJSON.fondi[fondoDettaglioPac.codiceIsin];
				$("#importoRata"+idRiga).text(dettPacJson.importorata + " " + fondoDettaglioPac.divisa);
				$("#proxVer"+idRiga).hide();
				if(datiFondiSitPac[idRiga].hrefVersaPac != ""){
					$("#proxVer"+idRiga).show();
					$("#dataProxVer"+idRiga).text(dettPacJson.dataScadenza);
					if(datiFondiSitPac[idRiga].prossimoivers == "-"){	//PASS
						$("#dataProxVer"+idRiga).text(datiFondiSitPac[idRiga].prossimoivers);
					}
				}
				$("#rateVersate"+idRiga).text(dettPacJson.rateSottoscritte);
				$("#rateResidue"+idRiga).text(dettPacJson.rateresidue);
				$("#rateTotale"+idRiga) .text(dettPacJson.rateTotaliPiano);
				$("#durataAnni"+idRiga) .text(dettPacJson.descrizioneanni);
				$("#sezioneDettaglio"+idRiga).show();
			}
			else{
//				$("#modalErroreForm").show();
				$("#sezioneDettaglio"+idRiga).hide();
			}
        },
        error: function (jqXHR, status, errorThrown) {
        	$("#sezioneDettaglio"+idRiga).hide();
        },
        complete: function(){
        	$("#sezioneDettaglio"+idRiga).removeClass("loading");
        }
	});
	
	}
	
	
	
}

var divDettaglioPac = "<div class=\"formGenerico borderFormRounded\" id=\"sezioneDettaglio{{idx}}\">	\
						<div class=\"form-group\">												\
							<div class=\"row\">													\
								<div class=\"col-sm-6\">										\
									<label class=\"control-label-output\">Importo Rata</label> 	\
									<span class=\"output\" id=\"importoRata{{idx}}\"></span> 	\
								</div> 	\
								<div class=\"col-sm-6\" id=\"proxVer{{idx}}\" style=\"display:none\"> 	\
									<label class=\"control-label-output\">Prossimo versamento</label>  	\
									<span class=\"output\" id=\"dataProxVer{{idx}}\"></span> 	\
								</div> 	\
							</div> 	\
						</div> 	\
						<div class=\"form-group\"> 	\
							<div class=\"row\"> 	\
								<div class=\"col-sm-6\"> 	\
									<label class=\"control-label-output\">Rate Versate</label>  	\
									<span class=\"output\"id=\"rateVersate{{idx}}\"></span> 	\
								</div> 	\
								<div class=\"col-sm-6\"> 	\
									<label class=\"control-label-output\">Rate residue</label>  	\
									<span class=\"output\" id=\"rateResidue{{idx}}\"></span> 	\
								</div> 	\
							</div> 	\
						</div> 	\
						<div class=\"form-group\"> 	\
							<div class=\"row\"> 	\
								<div class=\"col-sm-6\"> 	\
									<label class=\"control-label-output\">Rate Totale</label>  	\
									<span class=\"output\" id=\"rateTotale{{idx}}\"></span> 	\
								</div> 	\
								<div class=\"col-sm-6\"> 	\
									<label class=\"control-label-output\">Durata in anni</label> 	\
									<span class=\"output\" id=\"durataAnni{{idx}}\"></span> 	\
								</div> 	\
							</div> 	\
						</div> 	\
					</div>";
