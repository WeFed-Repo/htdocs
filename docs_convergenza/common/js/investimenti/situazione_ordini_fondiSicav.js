/**
 * 
 */


	/* Esempio di automazione per personalizzazione delle colonne della tabella */
	// CONFIGURAZIONE COLONNE della tabella

//	wrp_script="/webankpri/goToInvest";
//	wrp_script_direct="/webankpri/goToInvestDirect";

//	var URL_RICERCA = wrp_script_direct +"/investimenti/ImovFundJson.action?rand=";
	var URL_RICERCA = wrp_script_direct +"/investimenti/InquiryMovimentiFSJson.action?rand=";
	var URL_REVOCA_ORDINE = wrp_script_direct +"/investimenti/RevocaOrdineJson.action?rand=";
	var URL_SCHEDA_FONDO = wrp_script + "/wbOnetoone/2l/action/investimenti/RicercaFondi.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&fondo=true&codiceInterno=";
	
	var datiOrdineRevoca =  {};
	var datiMifid = {};
	
	var tableCols = {
		"nome" : {
			"class" : "left",
			"data-sortable" : "true",
			"fullname" : "Nome fondo",
			"data-sort-name": "nomeord"
		},
		"deposito" : {
			"class" : "left",
			"data-sortable" : "false",
			"fullname" : "Deposito titoli"
		},
		"datainserimento" : {
			"class" : "left",
			"data-sortable" : "true",
			"fullname" : "Data ins.",
			"data-sort-name": "dataord"
		},
		"tipooperazione" : {
			"class" : "left",
			"data-sortable" : "true",
			"fullname" : "Tipo oper."
		},
		"statoordine" : {
			"class" : "left",
			"data-sortable" : "true",
			"fullname" : "Stato ordine"
		},
		"importo" : {
			"class" : "left",
			"data-sortable" : "false",
			"fullname" : "Contr. Euro"
		},
		"quote" : {
			"class" : "left",
			"data-sortable" : "false",
			"fullname" : "Quote/ Azioni"
		},
		"valore" : {
			"class" : "left",
			"data-sortable" : "false",
			"fullname" : "NAV"
		},
		"dett" : {
			"class" : "center",
			"data-sortable" : "false",
			"fullname" : "Dett."
		},
		"azioni" : {
			"class" : "center",
			"data-sortable" : "false",
			"fullname" : "Azioni"
		},
		"canale" : {
			"class" : "center",
			"data-sortable" : "false",
			"fullname" : "Canale"
		},
		"valuta" : {
			"class" : "left",
			"data-sortable" : "true",
			"fullname" : "Valuta"
		},
		"societadigestione" : {
			"class" : "left",
			"data-sortable" : "true",
			"fullname" : "Societ&agrave; di gestione"
		},
		"isin" : {
			"class" : "left",
			"data-sortable" : "true",
			"fullname" : "ISIN"
		}

	}

	var tableColSel = {
		"sintesi" : [ "nome", "deposito", "datainserimento", "tipooperazione",
				"statoordine", "importo", "quote", "valore", "dett", "azioni",
				"canale" ],
		"personalizza" : [ "nome", "deposito", "datainserimento",
				"tipooperazione", "statoordine", "importo", "quote", "valore",
				"dett", "azioni", "canale" ]
	}

	
 	$(document).ready(function() {

 		loadSocGestAndDepositi();
 		$("#tipoRicerca").val('D'); //ricerca per Deposito 
 		//TODO
// 		$("#tipoRicerca").change(function() {
// 			
// 			if ($(this).val() == "R") {  // ricerca per numero di registrazione
// 				$("#socGestSelect .icon.icon-alert_error_fill").trigger('click');
// 				$("idStrumPeriodo").hide();
// 				$("idSocOperStato").hide();
// 				$("idDepositoTitoli").hide();
// 				$("sezNumReg").show();
// 				$("#numeroRegistrazione").val("");
// 				
// 			} else {
// 				$("sezNumReg").hide();
// 				$("idStrumPeriodo").show();
// 				$("idSocOperStato").show();
// 				$("idDepositoTitoli").show();
// 				$("#numeroRegistrazione").val("");
// 			}
// 			
// 		});
 		
		// Conferma nella modale
		$("#btnCercaSg").click(function() {// Trasferisce il contenuto del
											// campo nell'input corrispondente
					$("#socGestSelect").multiselector("value",$("#caseGestioneOl").val());
					// Chiude la modale
					$("#layerSg").modal("hide");
		});

		// Switch periodo
		$("#switchPeriodo").click(function() {
			$("#periodoSelect, #periodoDate").toggle();
		});
		
		makeDalDatePicker(null,0);
		makeAlDatePicker(null,0);

		$('#dpPeriodoAl').datepicker().on('change', function (ev) {
			var ggmmaaaa= $(this).val().split('/');
			$('#dpPeriodoDal').datepicker( "destroy" );
			   makeDalDatePicker(null,new Date(parseInt(ggmmaaaa[2]),  parseInt(ggmmaaaa[1]) - 1 , parseInt(ggmmaaaa[0]) ));
		});
		
		$('#dpPeriodoDal').datepicker().on('change', function (ev) {
			var ggmmaaaa= $(this).val().split('/');
			$('#dpPeriodoAl').datepicker( "destroy" );
			   makeAlDatePicker(new Date(parseInt(ggmmaaaa[2]),  parseInt(ggmmaaaa[1]) - 1 , parseInt(ggmmaaaa[0]) ),0);
		});

		
		
		// Select personalizzazione
		$("#colPersSelect").change(function() {

			switch ($(this).val()) {
				case "personalizza":
					// Mostra l'overlay di personalizzazione
					$("#layerPers").modal("show");
					break;
	
				default: getTableOrdini();
					break;
			}

		});
		
		$("#btnInvio").click(getTableOrdini);

		// Popola l'elenco di tutte le colonne per la personalizzazione
		var cpw = $("#colPersWrap");
		$.each(tableCols,	function(k, v) {
					var label = $("<label>").html(v.fullname);
					var input = $("<input>").attr({
						"type" : "checkbox",
						"value" : k,
						"name" : "colPersCb"
					});
					if ($.inArray(k, tableColSel.personalizza) >= 0) {
						input.attr("checked", false);
					}
					
					label.prepend(input);
					cpw.append($("<div>").addClass("col-sm-6 col-xs-12").append(label));
				});

		// Blocca il numero di colonne inseribili

		// Conferma personalizzazione
		$("#colPersConferma").click(function() {

				// Controlli ed esito
				var cpe = $("#colPersErrore").hide();
				var checkedInp = $("#colPersWrap input:checked");
				var errors = "";
				if (checkedInp.length <= 0) {
					errors = "Occorre selezionare almeno 1 valore.";
				}
				if (checkedInp.length > 7) {
					errors = "Non &egrave; possibile selezionare pi&ugrave; di <strong>7 colonne</strong>.";
				}

				if (errors.length <= 0) {
					// Inserisce le colonne della personalizzazione
					tableColSel.personalizza = new Array();
					$.each(checkedInp, function(i, v) {
						tableColSel.personalizza.push($(v).val());
					});
					$("#layerPers").modal("hide");
					getTableOrdini();
				} else {
					// Mostra l'errore
					cpe.find("p").html(errors)
					cpe.show();
				}

			});
		
		
        $('#modalAnnullaSi').click(function () {
               
        	inviaDatiRevoca();
        	  
 	});
        
      $('#btnToExcel').click (function tabToExcel() {
        	var url = wrp_script + "/FMP/situazioneOrdiniToExcel.jsp?isPDF=true&isXLS=true";
        	window.location.href = url; 
        });
      
 });
	

	
	
	
	
	
	
	
	
	
	var setWlMessaggio = function (tipomsg,testo) {
		var msgW = $("#messaggioSOF").show();
		msgW.find(".messaggioTesto").empty().append($("<p>").html(testo));
		msgW.find(".boxesito").removeClass("positivo negativo attenzione").addClass(tipomsg);
	}
	
	
	
	var selectorWrapper = function() {
        var el = $(this);
        if (!el.hasClass("disabled")) {
            var elPar = el.parents(".selector-wrap");
            if (elPar.attr("data-input-type") == "radio") {
                // Replica il comportamento esclusivo dei radio button
                elPar.find(".selector-box").not(".disabled").removeClass("selected");
                el.addClass("selected");
            } else {
                // Replica il comportamento di un checkbox (attiva o disattiva )
                el.toggleClass("selected");
            }
            var impField = elPar.find("input[name=" + elPar.attr("data-input-name") + "]");
            var impVal = [];
            $.each(elPar.find(".selector-box.selected"), function() {
                impVal.push($(this).attr("data-value"));
            });
            impField.val(impVal);
        }
    }

	
	var buildTabella = function (data) {
		var tHead = $("<tr>");
		$.each(tableColSel[$("#colPersSelect").val()], function(k, v) {
			var tcoldata = tableCols[v];
			var tcol=$("<th>").attr({
				"data-field" : v,
				"data-sortable" : tcoldata["data-sortable"]
			}).addClass(tcoldata["class"]).html(tcoldata.fullname);
			
			if (tcoldata["data-sort-name"]) {
				tcol.attr({"data-sort-name": tcoldata["data-sort-name"]});
			}
			
			tHead.append(tcol);
		});

		var rTable = $("<table>").addClass("sortableTable fixed").attr(	{
					"data-sortable" : "true",
					"cellpadding" : 0,
					"cellspacing" : 0,
					"border" : 0
		});
		var rTableWrap = $("#resultTable");
		rTableWrap.find("table").bootstrapTable("destroy");
		rTableWrap.empty().append(rTable.append($("<thead>").append(tHead)));

		// Creazione della tabella
		rTable.bootstrapTable({
			data : {},
			sortName : "datainserimento",
			sortOrder : "desc",
			pagination : "true",
			pageSize : 15,
			pageList : [ 15, 30, 60, 'tutti' ],
			rowStyle : function(row, index) {
				if (index % 2 == 0) {
					return {
						classes : 'dispari'
					}
				} else {
					return {
						classes : 'pari'
					}
				}
			},
			
			onPostBody : styleSortTable,
			
		});
		
		rTable.bootstrapTable('load', data?data:[]);
	}
	
	
	function makeAlDatePicker (mnDate,mxDate) {
		
		$("#dpPeriodoAl").mask("99/99/9999");
		$("#dpPeriodoAl").datepicker({
				beforeShowDay : highlightDays,
				// beforeShowDay: noHolidays, //si applica se si vuole che i
				// fine sttimana e festivi non siano delezionabili
				minDate : mnDate,
				maxDate: mxDate,
				showOtherMonths : true,
				showOn : "button",
				prevText : "<i class=\"icon icon-arrow_left\" title=\"mese precedente\"></i>",
				nextText : "<i class=\"icon icon-arrow_right\" title=\"mese successivo\"></i>",
				buttonImage : cmn_web_context + "/fe/img/pixel_trasp.gif",
				buttonImageOnly : true,
				beforeShow : renderPickDateMobile
		});
		
		appendDatePickerIcon('dpPeriodoAl');
		
	}
	
	function  makeDalDatePicker (mnDate,mxDate) {
	
		$("#dpPeriodoDal").mask("99/99/9999");
		$("#dpPeriodoDal")	.datepicker({
				beforeShowDay : highlightDays,
				// beforeShowDay: noHolidays, //si applica se si vuole che i
				// fine sttimana e festivi non siano delezionabili
				minDate : mnDate,
				maxDate: mxDate,
				showOtherMonths : true,
				showOn : "button",
				prevText : "<i class=\"icon icon-arrow_left\" title=\"mese precedente\"></i>",
				nextText : "<i class=\"icon icon-arrow_right\" title=\"mese successivo\"></i>",
				buttonImage : cmn_web_context + "/fe/img/pixel_trasp.gif",
				buttonImageOnly : true,
				beforeShow : renderPickDateMobile
		});

		appendDatePickerIcon('dpPeriodoDal');
		
	}
	
	// Erogazione della tabella (con posting del form)
	var getTableOrdini = function() {

		// Blocco del contenitore con loading
		$("#messaggioSOF").hide();
		unbindEvent("#btnInvio","click");
		$("#results").show().addClass("loading");
		$("#ricercaOrdini").addClass("loading");
		
		if( setRicercaFields()==false ) {
			$("#results").hide();
			buildTabella();
			$("#results, #ricercaOrdini").removeClass("loading");
			bindEvent("#btnInvio","click",getTableOrdini);
			return;
		}
		

		// Ricezione dei dati con chiamata
		$.ajax({
			url : URL_RICERCA + Math.random() ,
			dataType : "json",
			data : $("#ricercaOrdini").serialize(),
			success : function(data) {

				if("success"==data.actionRet) {
					// Aggiornamento dei dati
					$("#fondiTrovati").html(data.trovati);
	
					// Assemblaggio dell'heading (con raccolta della
					// personalizzazione)
					
					var dcorr = [];
					
					$.each(data.data.data,function(i,v) {
						var gma = v.datainserimento.split('/');
						v.dataord = new Date(parseInt(gma[2]), parseInt(gma[1])-1,parseInt(gma[0])).getTime();
						v.nomeord = v.nome.substring(v.nome.indexOf('Fondo"')+ 'Fondo"'.length +1,v.nome.indexOf('</a>'));
						dcorr.push(v);
					}); 
					
					buildTabella(dcorr);
					
				} else {
					setWlMessaggio("negativo",data.message);
					buildTabella();
				}

			},
			error: function(jqXHR, status, errorThrown){
				setWlMessaggio("negativo",errorThrown);
			},
			complete : function(jqXHR, status) {
				$("#results, #ricercaOrdini").removeClass("loading");
				bindEvent("#btnInvio","click",getTableOrdini);
			}
		});
	}
	
	
	inquiryMIFID = function(numReg,deposito,tipoOpr, controvaloreOperazione, nomeFondo, codSocieta, nomeFondoSW, dataInserimento, primaChiamata) {
		
		 $("#layerDettLabel").addClass("loading");
		
		//per tutte ordini di Switch prima di 28-12-2018, GESPRO deve recuperare con /01 e /02
		var ordineInsDateMilliSec = $.datepicker.parseDate("dd/mm/yy",dataInserimento).getTime();
		var testDateMilliSec = $.datepicker.parseDate("dd/mm/yy","28/12/2018").getTime();
		var isInsDateBeforeTest = (ordineInsDateMilliSec - testDateMilliSec) < 0 ? true : false; 
		var controValOperFormat =parseFloat(controvaloreOperazione).toLocaleString("it-IT",{minimumFractionDigits:2,maximumFractionDigits:2});
		
		
		if(tipoOpr.indexOf("Switch")>=0 && isInsDateBeforeTest && primaChiamata){		//Switch / Switch IN / Switch OUT
			numReg = numReg + "/01";
		}
		
			var inputData = { 
				'deposito'		 		: deposito,
				'numeroRegistrazione'	: numReg,
				'controvaloreOperazione': controvaloreOperazione,
				'codiceSocietaDiGestione': codSocieta
			};
			$.ajax({
				url : wrp_script_direct + "/investimenti/InquiryMifidXSIJson.action?cf=" + Math.random(),	//wrp_script +"/FMP/imovFundJSP.do?"; 
				dataType : "json",
				data : inputData,
				success : function(dataOutJSON, status, jqXHR) { // jqXHR.statusText="OK"; // status="success"
					var msg = "Si &egrave; verificato un errore di connessione";
					if (200 == jqXHR.status) {
						
						if(dataOutJSON.esito == "OK") {
							datiMifid = dataOutJSON.data;
							
							if(tipoOpr == 'Rimborso' || (tipoOpr == 'Switch' && primaChiamata ) || tipoOpr == 'Switch OUT') {		//tipoOpr == 'Switch' && numReg.indexOf("/01")>0
								
								showDatiMifidTab9(datiMifid,controValOperFormat, nomeFondo);

								if(numReg.indexOf("/01")>0){		//tipoOpr == 'Switch' && 
									var numRegIn = numReg.split("/")[0] + "/02";
									inquiryMIFID(numRegIn,deposito,'Switch IN', controvaloreOperazione, nomeFondoSW, codSocieta, nomeFondoSW, dataInserimento, false); 
								}
								else{
									$('#costiInducementInv').hide();
								}
								$('#costiInducementDisInv').show();
							} else {		//Sottoscrizione || Rata PAC || Switch IN || Switch prima di 28/12/2018
								
								showDatiMifidTab8(datiMifid,controValOperFormat, nomeFondo);
								
								if(numReg.indexOf("/02")>0){			//tipoOpr == 'Switch' && 
									$('#costiInducementDisInv').show();
								}
								else{
									$('#costiInducementDisInv').hide();
								}
								$('#costiInducementInv').show();
							}
							$('#sezioneMifid').show();
						} else{
							$('#sezioneMifid').hide();
					  } 
					} else{
						$('#sezioneMifid').hide();
					} 
					
				},
				error : function(jqXHR, status, errorThrown) {
					$('#sezioneMifid').hide();
				},
				complete : function(jqXHR, status) {
					$("#layerDettLabel").removeClass("loading");
				}
			});
		
	}
	
	
	var viewDettOrdini = function(paramStr) {
		var EURO=" &euro;";
		var params = paramStr.split('*');
		var aTipoOperSwi=['Switch', 'Switch IN', 'Switch OUT'];
		var aTipoOperPacSotRim=['Sottoscrizione','Rimborso','SottoscrizionePac','Rata PAC'];
		
		var numReg;
		var tipoOpr;
		var codSocieta;
		
		$("#layerDettLabel").text(params[0]);
		$("#dettDtOperazione").text(params[5]);
		$("#dettNrReg").text(params[2]);
		$("#dettSocGest").text(params[1]);
		$("#dettNrContr").text(params[3]=="0"?'-':params[3]);
		
		$("#dettStrumFinanz").text(params[1]);
		$("#dettValOperazione").text(params[1] + EURO);
		
		//MIFID2
		if( $.inArray(params[4],aTipoOperSwi)>=0 ||  $.inArray(params[4],aTipoOperPacSotRim)>=0)	 {
				numReg = params[2];
				tipoOpr = params[4] ;
				
			    codSocieta = $.inArray(params[4],aTipoOperPacSotRim)>=0 ? -1 : params[9];
				 
				inquiryMIFID(numReg,params[10], tipoOpr, params[11], params[0], codSocieta, params[12], params[6],true);
		
		}
		
		$("#layerDett").modal("show"); 

	}

	
	
	function setRicercaFields() {
		
		var dataDa="";
		var dataA="";
		var dataDaGgMmYyyy="";
		var dataAGgMmYyyy="";
		
		$("#orderType").val("Uname");
		$("#numPage").val("0");
	
		if( $("#tipoRicerca").val() == 'D'){
			$("#numeroRegistrazione").val(0);
		} else {
			
			var numberOnly = /\[^0-9]/g;
			if ($("#numeroRegistrazione").val().length==0 || numberOnly.test($("#numeroRegistrazione").val())==true) {
				setWlMessaggio("negativo","Inserire Numero di registrazione");
				return false;
			}
			
			$("#tipoOperazione").val("tutte");
			$("#societaGestione").val("");
			$("#deposito").val("allDeposit");
			$("#fondoSicavPIR").val("T"); 
			$("#stato").val("tutti"); 
			
		}
		
		if($("#tipoOperazione").val() != "tutte") {
			orderType = 'UdataIns';
		}
		
		$("#numeroOrdini").val("tutti");
		
		$("#periodo").val("SI"); 		
		
		$("#checkNumOrd").val(10);	
		
		if($("#periodoSelect").is(":visible") || $("#tipoRicerca").val()!='D') {
			
			var oggi = new Date();
			
			 dataDa = $("#periodoSelect > select option:selected").val();
			 dataA = oggi.getDate() + "/" + (oggi.getMonth()+1)  + "/" + oggi.getFullYear();
			 
		} else {
			
			dataDa = $("#dpPeriodoDal").val();
			dataA = $("#dpPeriodoAl").val();
			
		}
		
		dataDaGgMmYyyy= dataDa.split("/");
		$("#giornoDa").val(dataDaGgMmYyyy[0]);
		$("#meseDa").val(dataDaGgMmYyyy[1]);
		$("#annoDa").val(dataDaGgMmYyyy[2]);
		
		 dataAGgMmYyyy= dataA.split("/");
		 
		 $("#giornoA").val(dataAGgMmYyyy[0]);
		 $("#meseA").val(dataAGgMmYyyy[1]);
		 $("#annoA").val(dataAGgMmYyyy[2]);
		 
		 if (1>$.trim($("#societaGestione").val()).length) {
			 $("#societaGestione").val("tutte");
		 }
		 
		 $("#typeResearch").val( $("#tipoRicerca").val());
		 
		 return true;
		 
	}
	
	
	var confermaRevoca = function(datiOrdineTabella) {
		// Inserire qui il controllo per l'erogazione della modale
		$('#modalAnnullaOrdine').modalPlus();

		datiOrdineRevoca = {};
		
		$.each(datiOrdineTabella, function(k,v){
			datiOrdineRevoca[k]=v;
		});
		
		$("#modalAnnullaOrdineLAbel").html("Revoca " + (datiOrdineRevoca["tipoOperazione"] == undefined ? "" : "<strong>" + datiOrdineRevoca["tipoOperazione"] + "</strong>"));
		$("#modalAnnullaOrdineLAbel").attr("style","text-align:center;");
		$("#modalTestoConferma").html("Conferma revoca ordine num.:" + (datiOrdineRevoca["numreg"] == undefined ? "" : "<strong>" + datiOrdineRevoca["numreg"] + "</strong>"));

	}

	function bindEvent(selector, eventAction, bindFunction) {
		$(selector).on(eventAction,bindFunction);
		$(selector).removeAttr('disabled');
	}


	function unbindEvent(selector,eventAction) {
		$(selector).off(eventAction);
		$(selector).attr("disabled","disabled");
	}
	
		
	// TRASMISSIONE ANNULLO ORDINE INSERITO  
	function inviaDatiRevoca() {

		if(!datiOrdineRevoca) {
			 
			$('#modalAnnullaOrdine').modalPlus('showError',"Errore dati errati. Ripetere l&apos;operazione.");
			return;
			
		}
  
		$("#modalAnnullaOrdine").addClass("loading");
		
	   $.ajax({
		   url:URL_REVOCA_ORDINE + Math.random() ,
		   	dataType : "json",
			data : datiOrdineRevoca, 
	         success: function(data) {
	          
	        	 if(data.actionRet == 'success' ) {
						$('#modalAnnullaOrdine').modalPlus('showMessage','L&#39;ordine &#232; stato annullato');
						
						$("#modalAnnullaOrdine").on("hide.bs.modal",function() {
							$("#modalAnnullaOrdine").off("hide.bs.modal"); 
							getTableOrdini();
						});
						
				 } else {
						$('#modalAnnullaOrdine').modalPlus('showError',data.message);
				}
					
			 },
			 error:function(jqXHR, status, errorThrown) {
				 $('#modalAnnullaOrdine').modalPlus('showError','Errore durante l&apos;elaborazione della procedura. Riprovare più tardi.');
		     },
			 complete :function(jqXHR, status) {
				
				 datiOrdineRevoca=undefined;
				 
				 $("#modalAnnullaOrdine").removeClass("loading");
				 
			}
	   });
	   
	   
	}
	
		
			function loadSocGestAndDepositi () {
				
				$.ajax({
					url		: wrp_script_direct + "/investimentipv/SituazioneOrdiniFSInitJson.action" ,
					dataType	: "json",
					data		: {
						messaggio : "Errore di connessione"
					},
					success	: function(resp, status, jqXHR) { 
						
						if (200 == jqXHR.status) {
							if(resp.data.action == "success") {
								
								$("#deposito").empty();
								$("#depositi").val("");
								$("#deposito").append($('<option>').val("allDeposit").text("Tutti i depositi titoli"));
								$("#numdepositi").val(0);
								
								$.each(resp.data.depositi, function(i, value) {
									$("#deposito").append($('<option>').val(value).text(value));
									$("#depositi").val($("#depositi").val() + ( i>0 ? "," : "" )  + value );
									$("#numdepositi").val(parseInt($("#numdepositi").val()) + 1);
								});
								
								$("#lstCaseGestione div.selector-box").remove();
								
								var lsSocGest='';
								
								$.each(resp.data.socGest, function(i, value) {
									lsSocGest += "<div class=\"selector-box \" data-value=\"" + value.codGruppo + "\" data-name=\"" + value.nomeGruppo + "\">";
									lsSocGest += "<img src=\"\/common" + value.ImgPath + "\" class=\"img100\">";
									lsSocGest += "<span class=\"definition\">" + value.nomeGruppo + "</span>";
									lsSocGest += "</div>";
								});
								
								$("#lstCaseGestione").append(lsSocGest);
								
								$(".selector-wrap .selector-box").click(selectorWrapper);
								
								
							} else if(resp.data.action == "error"){
								setWlMessaggio("negativo", resp.data.messaggio);
							}
							
						} else {
							setWlMessaggio("negativo", resp.data.messaggio);
						}
						
					},
					error : function(jqXHR, status, errorThrown) {
						setWlMessaggio("negativo", "Si &egrave; verificato un errore di connessione");
					},
					complete : function(jqXHR, status) {
						
					}
				});
				
			}	
			
			function schedaFondo(cdI) {
				var mHref = URL_SCHEDA_FONDO + cdI + "&cf=" + Math.random();
				window.location.href= mHref;
			}

			
			
			function caricaTabellaMifid(datiMifid, tipo) {

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
			
			
			function showDatiMifidTab8(datiMifid,controvaloreOperazione,nomeFondo) { 
				
				caricaTabellaMifid(datiMifid,"SOT");
				
				   $('#strumentoFinanziarioInv').text(nomeFondo);
				   $('#controvaloreOperazioneInv').html(controvaloreOperazione + " &euro;");
				   
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
				   
//				   $('#tableCostiAnnuale').bootstrapTable("destroy");
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
				
//				$('#tableIncentiviAnnuale').bootstrapTable("destroy");
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

//				   $('#tableControvaloreLordo').bootstrapTable("destroy");
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
										
								});
					$('#tableControvaloreLordo').bootstrapTable('load', datiMifid.datiControvaloreLordo);
					$('#tableControvaloreLordo tr:eq(0) th:eq(1)').html(datiMifid.importoControvaloreLordo);	//se importo e' modificato 
					
					$('#totaleImportoControvaloreLordo').html(datiMifid.totaleImportoControvaloreLordo);
					$('#totalePercentualeControvaloreLordo').html(datiMifid.totalePercentualeControvaloreLordo);

				   
				   $("#mifid2Tabella8").show();		
				   initTooltip(); //funzione di libreria per visualizzare Tooltip
			}
			
			function showDatiMifidTab9(datiMifid,controvaloreOperazione,nomeFondo) { 
				
//				numReg,deposito,tipoOpr, controvaloreOperazione, nomeFondo, codSocieta, nomeFondoSW, dataInserimento, primaChiamata
				
				 $('#strumentoFinanziario').text(nomeFondo);
				 $('#controvaloreOperazione').html(controvaloreOperazione + " &euro;");

//				 datiMifidPdfDisInv = JSON.stringify(datiMifid).replace(/&euro;/g,'').replace(/&#37;/,'');
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
				
//				   $('#tableCosti').bootstrapTable("destroy");
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
				
//				   $('#tableIncentivi').bootstrapTable("destroy");
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
			

	
