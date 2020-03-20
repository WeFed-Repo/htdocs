
	var URL_RICERCA 		= wrp_script_direct +"/investimenti/RicercaDepositoCollocamenti.action?rand=";
	var URL_DETT_ORDINE 	= wrp_script_direct +"/investimenti/DettaglioOrdineCollocamentiJSON.action?rand=";
	var URL_REVOCA_ORDINE 	= wrp_script_direct +"/investimenti/RevocaOrdineCollocamentiJson.action?rand=";
	
	var datiOrdineRevoca =  {};
	var datiMifid = {};
	var beanJson = {};
	var dettOrdine = {};
	var ordineSelezionata = {};
	
	var tableCols = {
		"dataOrdine" : {
			"class" : "left",
			"data-sortable" : "true",
			"fullname" : "Data "
			//,"data-sort-name": "data"
		},
		"numOrdine" : {
			"class" : "left",
			"data-sortable" : "true",
			"fullname" : "N. ordine"
			//,"data-sort-name": "data"
		},
		"titolo" : {
			"class" : "left",
			"data-sortable" : "true",
			"fullname" : "Titolo"
		},
		"deposito" : {
			"class" : "left",
			"data-sortable" : "true",
			"fullname" : "Deposito"
		},
		"operazione" : {
			"class" : "left",
			"data-sortable" : "true",
			"fullname" : "Operazione"
			//,"data-sort-name": "dataord"
		},
		"stato" : {
			"class" : "left",
			"data-sortable" : "true",
			"fullname" : "Stato"
//			,"titleToolTip": 	"				<ul>"+											//Non funziona con data-sortable
//								"	            	<li> ANN:  Annullato</li>"+
//								"					<li> ODA:  Ordine da autorizzare</li>"+
//								"					<li> ODC:  Ordine da confermare</li>"+
//								"					<li> EP:   Eseguito parziale</li>"+
//								"					<li> ET:   Eseguito totale</li>"+
//								"					<li> IT:   Ineseguito totale</li>"+
//								"					<li> IP:   Ineseguito parziale</li>"+
//								"					<li> INS:  Inserito</li>"+
//								"					<li> INV:  Inviato</li>"+
//								"					<li> OC:   Ordini di operazioni chiuse</li>"+
//								"					<li> RAC:  Raccolto</li>"+
//								"					<li> REVI:	Revoca inserita</li>"+
//								"					<li> REVR:	Revoca raccolta</li>"+
//								"					<li> REVP:	Revoca parziale</li>"+
//								"					<li> REV:	Revocato</li>"+
//								"					<li> RI:	Rifiutato</li>"+
//								"					<li> STO:	Stornato</li>"+
//								"				</ul>"
		},
		"prezzoinserito" : {
			"class" : "left",
			"data-sortable" : "false",
			"fullname" : "Prezzo ins."
		},
		"quantitainserita" : {
			"class" : "left",
			"data-sortable" : "false",
			"fullname" : "Q.t&agrave; inserita<br>Q.t&agrave; eseguita"
		},
		"funzioni" : {
			"class" : "left",
			"data-sortable" : "false",
			"fullname" : "Funzioni"
		}

	}

	var tableColSel = {
		"sintesi" : [ "dataOrdine", "numOrdine", "titolo", "deposito", "operazione", "stato", "prezzoinserito", "quantitainserita", "funzioni" ]
	}

	
	
	
	var setWlMessaggio = function (tipomsg,testo) {
		var msgW = $("#messaggioSOF").show();
		msgW.find(".messaggioTesto").empty().append($("<p>").html(testo));
		msgW.find(".boxesito").removeClass("positivo negativo attenzione").addClass(tipomsg);
	}
	
	
	
	var buildTabella = function (data) {
		var tHead = $("<tr>");
		$.each(tableColSel["sintesi"], function(k, v) {
			var tcoldata = tableCols[v];
			var tcol=$("<th>").attr({
				"data-field" : v,
				"data-sortable" : tcoldata["data-sortable"]
			}).addClass(tcoldata["class"]).html(tcoldata.fullname);
			
			if (tcoldata["data-sort-name"]) {
				tcol.attr({"data-sort-name": tcoldata["data-sort-name"]});
			}
			
			//Non funziona insieme con data-sortable
//			if(tcoldata["titleToolTip"]){
//				tcol.html("<span class=\"txthelp\" title=\" " + tcoldata["titleToolTip"] + " \" data-toggle=\"tooltip\">" + tcoldata.fullname + "</span>");
//			}
			
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
			sortName : "dataEseguito",
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
				buttonImage : "/WB/fe/img/pixel_trasp.gif",
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
				buttonImage : "/WB/fe/img/pixel_trasp.gif",
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

				if(undefined != data.data) {
					// Aggiornamento dei dati
					beanJson = $.parseJSON(data.data);
					if( "success"== beanJson.action){
						$("#fondiTrovati").html(beanJson.ordini.length==1? beanJson.ordini.length + " fondo trovato" : beanJson.ordini.length + " fondi trovati");
						$("#fondiTrovati").show();
						$("#iconaHelp").show();
						var dcorr = [];
						
						$.each(beanJson.ordini,function(i,val) {
							var v = {};
							var gma = val.dataEseguito.split('/');
							v.dataord = new Date(parseInt(gma[2]), parseInt(gma[1])-1,parseInt(gma[0])).getTime();
// 							v.nomeord = v.nome.substring(v.nome.indexOf('Fondo"')+ 'Fondo"'.length +1,v.nome.indexOf('</a>'));
							
						
							v.dataOrdine 		= val.dataEseguito;
							v.numOrdine  		= val.numeroRegistrazione;
							v.titolo 	 		= val.descrizioneEstesa;
							v.deposito			= val.codiceDeposito;
							v.operazione 		= val.operazione;
							v.stato 	 		= val.stato!=null? val.stato.acronimo : "";
							v.prezzoinserito 	= val.prezzoInserito;
							v.quantitainserita 	= val.quantitaInserita;
// 							v.index = i;
							v.funzioni = "<a class=\"btn-icon\" onclick=\"javascript: viewDettOrdini(this);\" " + " id=\"dettOrd_" + i + "\"" +
											" href='#'><i class='icon icon-small-zoom_more' alt='lente' title='dettagli'></i></a>";	//TODO
						
							//TODO - 				
//							if(val.revocabile){
//								v.funzioni += "<a onclick=\"javascript: confermaRevoca(this);\" " + " id=\"revOrd_" + i + "\"" + " href='#'>" +
//												"<i class='icon icon-alert_error_fill' alt='Se desideri, puoi annullare quest&#39;ordine che hai inserito.' " +
//												" title='Se desideri, puoi annullare quest&#39;ordine che hai inserito.'"  + " id='img_" + i + "'></i></a>";
//							}
//							else{
//								v.funzioni += " <i class=\"btn-icon icon icon-alert_error_fill disabled\"></i>";
//							}
											
							dcorr.push(v);
						}); 
						
						buildTabella(dcorr);
					}
					else {
						setWlMessaggio("negativo","Nessun Ordine trovato");
						$("#fondiTrovati").hide();
						$("#iconaHelp").hide();
						buildTabella();
					}	
					
				}
				else {
					setWlMessaggio("negativo","Nessun Ordine trovato");
					$("#fondiTrovati").hide();
					$("#iconaHelp").hide();
					buildTabella();
				}

			},
			error: function(jqXHR, status, errorThrown){
				setWlMessaggio("negativo",errorThrown);
				$("#fondiTrovati").hide();
				$("#iconaHelp").hide();
				
			},
			complete : function(jqXHR, status) {
				$("#results, #ricercaOrdini").removeClass("loading");
				bindEvent("#btnInvio","click",getTableOrdini);
			}
		});
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
			if ($("#numero").val().length==0 || numberOnly.test($("#numero").val())==true || $("#anno").val().length==0 || $("#terminale").val().length==0) {
				setWlMessaggio("negativo","Inserire Numero di registrazione");
				return false;
			}

			$("#deposito").val("allDeposit");
			
		}

		
		$("#periodo").val("SI"); 		
		
		$("#checkNumOrd").val(10);	
		
		$("#typeResearch").val("0");
		if($("#periodoSelect").is(":visible") || $("#tipoRicerca").val()!='D') {
			
			var oggi = new Date();
			
			 dataDa = $("#periodoSelect > select option:selected").val();
			 dataA = oggi.getDate() + "/" + (oggi.getMonth()+1)  + "/" + oggi.getFullYear();
			 
			 $("#typeResearch").val("0");
// 			 $("#numeroOperazioni").val("30");
			 
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
		 
		 
// 		 $("#typeResearch").val( $("#tipoRicerca").val());
		 
		 return true;
		 
	}
	
	


	function bindEvent(selector, eventAction, bindFunction) {
		$(selector).on(eventAction,bindFunction);
		$(selector).removeAttr('disabled');
	}


	function unbindEvent(selector,eventAction) {
		$(selector).off(eventAction);
		$(selector).attr("disabled","disabled");
	}
	
	function loadDepositi () {
		
		$.ajax({
			url		: wrp_script_direct + "/investimenti/SituazioneOrdiniInitJson.action" ,
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
	
	function viewDettOrdini(ele){
		var idOrd =  ele.id.split("_")[1];
		ordineSelezionata = beanJson.ordini[idOrd];
		$.ajax({
			url : URL_DETT_ORDINE + Math.random() ,
			dataType : "json",
			data : {numeroReg : ordineSelezionata.numeroRegistrazione},
			success : function(data) {
				if(undefined != data.dettaglioOrdine) {
					$("#layerDettColl").modal("show");
					$("#sezioneMifid").addClass("loading");
					dettaglioOrdine = $.parseJSON(data.dettaglioOrdine);
					$("#layerDettCollLabel").text("Dettagli ordine " + ordineSelezionata.numeroRegistrazione);
					$("#dettTitoloColl")	.text(ordineSelezionata.descrizioneEstesa);
					$("#dettOprColl")		.text(ordineSelezionata.operazione);
					$("#dettStatoColl")		.text(ordineSelezionata.stato.derscizioneSito);
					$("#dettDtOrdColl")		.text(ordineSelezionata.dataEseguito);
					$("#dettQuantitaInsColl").text(ordineSelezionata.quantitaInserita);
					$("#dettCommColl")		.text(dettaglioOrdine.properties.Commissioni);
					$("#dettContoColl")		.text(dettaglioOrdine.properties.Contocorrente);
					$("#dettDepColl")		.text(dettaglioOrdine.deposito);
					$("#dettIntColl")		.text(dettaglioOrdine.intestazioneDeposito);
					
					datiMifid = (data.datiMifid!=undefined) ? $.parseJSON(data.datiMifid) : {};	
					datiMifid.strumentoFinanziario = ordineSelezionata.descrizioneEstesa;
					datiMifid.controvaloreOperazione = ordineSelezionata.quantitaInserita; 	//prezzoInserito
					showDatiMifid2_tab8(datiMifid);
				}
				else {
					setWlMessaggio("negativo","Dettaglio Ordine non trovato");
				}
			},
			error: function(jqXHR, status, errorThrown){
				setWlMessaggio("negativo",errorThrown);
			},
			complete : function(jqXHR, status) {
				$("#sezioneMifid").removeClass("loading");
			}
		});
	}
	
	function confermaRevoca(ele){
		var idOrd =  ele.id.split("_")[1];
		ordineSelezionata = beanJson.ordini[idOrd];
		$('#modalAnnullaOrdine').modalPlus();
		
		$("#modalAnnullaOrdineLAbel").html("Revoca " + (ordineSelezionata["operazione"] == undefined ? "" : "<strong>" + ordineSelezionata["operazione"] + "</strong>"));
		$("#modalAnnullaOrdineLAbel").attr("style","text-align:center;");
		$("#modalTestoConferma").html("Conferma revoca ordine num.:" + (ordineSelezionata["numeroRegistrazione"] == undefined ? "" : "<strong>" + ordineSelezionata["numeroRegistrazione"] + "</strong>"));

	}
	
	function inviaDatiRevoca() {
		$("#modalAnnullaOrdine").addClass("loading");
		$.ajax({
			   url:URL_REVOCA_ORDINE + Math.random() ,
			   	dataType : "json",
				data : {numeroReg : ordineSelezionata.numeroRegistrazione}, 
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
					 $("#modalAnnullaOrdine").removeClass("loading");
					 
				}
		   });
	}
	
	
 	$(document).ready(function() {

 		loadDepositi();
 		
 		$("#tipoRicerca").change(function() {
 			$("#messaggioSOF").hide();
 			if ($(this).val() == "R") {  // ricerca per numero di registrazione
 				//$("idStrumPeriodo").hide();
 				$("#row1").hide();
 				$("#idDepositoTitoli").hide();
 				$("#sezNumReg").show();
 				$("#numeroRegistrazione").val("");
//  				$("#terminale").text("&WEB");
//  				$("#anno").text(("" + new Date().getFullYear()).substring(2));
//  				$("#terminale").val($("#terminale").text());
//  				$("#anno").val($("#anno").text());
 				$("#numero").text("");
 			} else {
 				$("#row1").show();
 				$("#sezNumReg").hide();
 				$("#idStrumPeriodo").show();
 				$("#idDepositoTitoli").show();
 				$("#numeroRegistrazione").val("");
 				$("#terminale").val("");
 				$("#anno").val("");
 				$("#numero").val("");
 			}
 			
 		});
 		

		// Switch periodo
		$("#switchPeriodo").click(function() {
			$("#periodoSelect, #periodoDate").toggle();
			
			$("#typeResearch").val("0");
			if($("#periodoSelect").is(":visible")){
				$("#typeResearch").val("1");
			}
			
		});

		$('#periodoSelect').change(function() {
			 $("#numeroOperazioni").val($("#periodoSelect :selected").attr('id'));
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
		
		$("#btnInvio").click(getTableOrdini);


		// Blocca il numero di colonne inseribili

        $('#modalAnnullaSi').click(function () {
        	inviaDatiRevoca();
 		});
        
      $('#btnToExcel').click (function tabToExcel() {
        	var url = wrp_script + "/FMP/situazioneOrdiniToExcel.jsp?isPDF=true&isXLS=true";
        	window.location.href = url; 
        });
      
 });