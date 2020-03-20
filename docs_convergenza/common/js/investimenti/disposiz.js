
var datiMifidPdfInv="",datiMifidPdfDisInv="";
var infoTempistiche = {}, datiTempistiche = {};
var codSocNumDec = {};

//var codSocNumDec = {"174"  :2,
//		"175"  :2,
//		"188"  :2,
//		"189"  :2,
//		"190"  :2,
//		"191"  :2,
//		"192"  :2,
//		"800"  :2,
//		"801"  :2,
//		"7002"  :2,
//		"7003"  :2,
//		"7016"  :2,
//		"7031"  :2,
//		"102":4,
//		"103":4,
//		"107":4,
//		"146":4,
//		"153":4,
//		"162":4,
//		"185":4,
//		"7005":4};


function getNumDec(codSoc){
	var numDec='3';
	$.each(codSocNumDec, function(i,v){
		if(codSoc==i){
			numDec=v ;return false;}
	});
	
	return parseInt(numDec);
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
            url: wrp_script_direct + "/investimenti/TempisticheJson.action" + "?cf=" + Math.random(),
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
			url: wrp_script_direct + "/investimenti/DepositiJson.action" + "?cf=" + Math.random(),
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
		
		var urlChiamata = "IsalFundJson.action";
		if("SIT" == opType){
			urlChiamata = "IsaldiJson.action";
		}
		
		$.ajax({
			url: wrp_script_direct + "/investimenti/" + urlChiamata + "?cf=" + cf,		//timeout 3/4
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
            url: wrp_script_direct + "/investimenti/TempisticheJson.action" + "?cf=" + Math.random(),
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
