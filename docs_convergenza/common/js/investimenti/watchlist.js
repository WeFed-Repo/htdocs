var codSocieta="";
var wlAction = ["InsertFundIntoWLJson.action","DeleteFundFromWLJson.action","AddNewWLJson.action","RenameWlJson.action","DeleteWlJson.action"];
	
var addToWl = function(obj) {
	watchListOperazioni($("#wlSingolo").val(),obj.attr("data-isin"),"",$("#wlSingolo").html(),wlAction[0]);
}


//Funzione RIMOZIONE DA WATCHLIST (esempio)
var rimuoviDaWatchlist = function(el) {

	// Parametri in ingresso (es ISIN - lo riceve come attributo del link dell'icona operativa. E' possibile integrare altri parametri con lo stesso metodo (es: data-nome, ecc...))
//	var isin = $(el).attr("data-isin");
	var isin = el;

	// Chiude la modale attiva e mostra quella della rimozione da Watchlist
	$("#icoOpeModal").modal("hide");
	
	// Resetta la modale di rimozione e la apre
//	$("#wlRemoveIsin").html(isin);
	$("#wlRemoveIsin").html($("#icoOpeModalLabel").html());
	$("#wlRemoveOlIntro").show();
	$("#wlRemoveOlEsito").hide();
	$("#wlRemoveOl").modal("show");

	// Popola anche i campi per la rimozione (aggiungere quanto necessario)
	$("#isinToRemove").val(isin);

}


var datiToExcel = function wlToExcel() {

//	if(numWatchList>1){
//			var index = watchListForm.selectWatchList.selectedIndex;
//   			var valx = watchListForm.selectWatchList[index].value;
//   		}else	
//	 		var valx = $('input:hidden[name=idWatchList]').val();
    
    var url = wrp_script_direct + '/FMP/fida/watchListToExcel.jsp?idWL=' + $("#wlSingolo").val(); 

	window.location.href = url;
}

	
var addNewWatchList = function (nomeWL) {
		
		$("#fullPageWl").addClass("loading");
		$("#messaggioWl").hide();
		
		$.ajax({
			url		: wrp_script_direct + "/investimenti/" + wlAction[2] + "?cf=" + Math.random(),
			dataType	: "json",
			data		: {
				"nomeWL"			: nomeWL
			},
			success	: function(dataOutJSON, status, jqXHR) { 
				
				if (200 == jqXHR.status) {
					if(dataOutJSON.data.action == "success") {  
						
						loadWatchlistHomePage(dataOutJSON.data.idNewWL);
					
					} else if(dataOutJSON.data.action == "error"){
						setWlMessaggio("negativo", dataOutJSON.data.messaggio);
					}
				
				} else {
					setWlMessaggio("negativo", dataOutJSON.data.messaggio);
				}
				
			},
			error : function(jqXHR, status, errorThrown) {
				setWlMessaggio("negativo", messaggioErroreGenerico);
			},
			complete : function(jqXHR, status) {
				$("#fullPageWl").removeClass("loading");
				if($("#messaggioWl").is(":visible")==false) {
					setWlMessaggio("positivo",dataOutJSON.data.messaggio);
				}
			}
		});
		
		
	}
	
var renameWatchList = function (nomeWL) {
		
		$("#fullPageWl").addClass("loading");
		$("#messaggioWl").hide();
		var okMsg="";
		
		$.ajax({
			url		: wrp_script_direct + "/investimenti/" + wlAction[3] + "?cf=" + Math.random(),
			dataType	: "json",
			data		: {
				"nomeWL"			: nomeWL,
				"idWL"			: $("#wlSingolo").val()
			},
			success	: function(dataOutJSON, status, jqXHR) { 
				
				if (200 == jqXHR.status) {
					if(dataOutJSON.data.action == "success") {  
						
						okMsg = dataOutJSON.data.messaggio;
						loadWatchlistHomePage($("#wlSingolo").val());
					
					} else if(dataOutJSON.data.action == "error"){
						setWlMessaggio("negativo", dataOutJSON.data.messaggio);
					}
				
				} else {
					setWlMessaggio("negativo", dataOutJSON.data.messaggio);
				}
				
			},
			error : function(jqXHR, status, errorThrown) {
				setWlMessaggio("negativo", messaggioErroreGenerico);
			},
			complete : function(jqXHR, status) {
				$("#fullPageWl").removeClass("loading");
				
				if($("#messaggioWl").is(":visible")==false) {
					setWlMessaggio("positivo",okMsg);
				}
			}
		});
		
	}	


var deleteWatchList = function (nomeWL) {
		
		$("#fullPageWl").addClass("loading");
		$("#messaggioWl").hide();
		var okMsg = "";
		
		$.ajax({
			url		: wrp_script_direct + "/investimenti/" + wlAction[4] + "?cf=" + Math.random(),
			dataType	: "json",
			data		: {
				"nomeWL"			: nomeWL,
				"idWL"			: $("#wlSingolo").val()
			},
			success	: function(dataOutJSON, status, jqXHR) { 
				
				if (200 == jqXHR.status) {
					if(dataOutJSON.data.action == "success") {  
						
						okMsg = dataOutJSON.data.messaggio;
						loadWatchlistHomePage();
					
					} else if(dataOutJSON.data.action == "error"){
						setWlMessaggio("negativo", dataOutJSON.data.messaggio);
					}
				
				} else {
					setWlMessaggio("negativo", dataOutJSON.data.messaggio);
				}
				
			},
			error : function(jqXHR, status, errorThrown) {
				setWlMessaggio("negativo", messaggioErroreGenerico);
			},
			complete : function(jqXHR, status) {
				$("#fullPageWl").removeClass("loading");
				if($("#messaggioWl").is(":visible")==false) {
					setWlMessaggio("positivo", okMsg);
				}
			}
		});
		
		
	}
	
	
	
// Operazioni in watchlist
	var watchListOperazioni = function( idWL, codiceInterno, isin, nomeWL, action) {
		
		var messaggioErroreGenerico = "Si &egrave; verificato un errore di connessione";
		
		$("#layerFondi").modal("hide");
		$("#fullPageWl").addClass("loading");
		$("#messaggioWl").hide();
		var okMsg= "";
		
		$.ajax({
			url		: wrp_script_direct + "/investimenti/" + action + "?cf=" + Math.random(),
			dataType	: "json",
			data		: {
				"idWL" 			: idWL,
				"nomeWL"			: nomeWL,
				"codiceInterno"	: codiceInterno,
				"messaggio"		: escape(messaggioErroreGenerico),
				"isin"			: isin
			},
			success	: function(dataOutJSON, status, jqXHR) { 
				
				if (200 == jqXHR.status) {
					if(dataOutJSON.data.action == "success") {  
						
						okMsg = dataOutJSON.data.messaggio;
						loadWatchlistHomePage(idWL);
						
						
					} else if(dataOutJSON.data.action == "error"){
						setWlMessaggio("negativo", dataOutJSON.data.messaggio);
					}
				
				} else {
					setWlMessaggio("negativo", dataOutJSON.data.messaggio);
				}
				
			},
			error : function(jqXHR, status, errorThrown) {
				setWlMessaggio("negativo", messaggioErroreGenerico);
			},
			complete : function(jqXHR, status) {
				$("#fullPageWl").removeClass("loading");
				
				if($("#messaggioWl").is(":visible")==false) {
					setWlMessaggio("positivo", okMsg);
				}
			}
		});
		
	}

// Risultati della ricerca
	var showSearchResults = function(){
		// Impostare qui l'algoritmo di ricerca con i parametri corretti.
		// Qui viene emulato un semplice timeout
		
		$("#searchNome, #searchSocieta").hide();
		$("#searchResults").show().addClass("loading");
		$("#messaggioWl").hide();
		
		$.ajax({
			url : wrp_script_direct + "/investimenti/FesTabellaWatchListJson.action" + "?cf=" + Math.random(),
			dataType : "json",
			data : {
				codGruppo : codSocieta,
				descrizione : $("#nomeISIN").val()
				},
			success : function(data, status, jqXHR) { 
				if (200 == jqXHR.status) {
					setResultTable(data.watchListSel);
				} 
			},
			error : function(jqXHR, status, errorThrown) {

				var msg = "Si &egrave; verificato un errore di connessione";
				setWlMessaggio("negativo",msg);
//				showError(true, "E", msg);
			},
			complete : function(jqXHR, status) {
				$("#searchResults").removeClass("loading")
			}
		});
		
	}

	
	var setWlMessaggio = function (tipomsg,testo) {
		var msgW = $("#messaggioWl").show();
		msgW.find(".messaggioTesto").empty().append($("<p>").html(testo));
		msgW.find(".boxesito").removeClass("positivo negativo attenzione").addClass(tipomsg);
	};
	

function loadWatchlistHomePage(wl) {
	
	$("#messaggioWl").hide();
	
	$.ajax({
		url : wrp_script_direct + "/investimenti/WatchListFundSelect.action" + "?cf=" + Math.random(),
		dataType : "json",
		data : {},
		success : function(dataOutJSON, status, jqXHR) { 
						var msg = "Si &egrave; verificato un errore di connessione";
						if (200 == jqXHR.status) {
							
							if(dataOutJSON.action == "SUCCESS") {   
								
								if(dataOutJSON.elencoWatchListJson.length>1){
									$("#wlSelect").empty();
									$.each(dataOutJSON.elencoWatchListJson, function(key, value) {
										$("#wlSelect").append($('<option>').val(value.id).text(value.name));
									});

									$("#wlSingolo").hide();
									$('#wlSelect').show();
									
									
									$('#wlSelect').val(wl==null ? 1 : wl);
									
									$("#wlSingolo").val($('#wlSelect :selected').val());
									$("#wlSingolo").text($('#wlSelect :selected').text());
									
// $('#wlSelect').change(function() {
// $("#wlSingolo").val($('#wlSelect :selected').val());
// $("#wlSingolo").text($('#wlSelect :selected').text());
// loadWatchList();
// });
								}
								else{
									$("#wlSelect").hide();
									$("#wlSingolo").text(dataOutJSON.elencoWatchListJson[0].name);
									$("#wlSingolo").val(dataOutJSON.elencoWatchListJson[0].id);
									$("#wlSingolo").show();
								}
								
								$("#idSezioneWatchList").show();
								loadWatchList();
								
								if(dataOutJSON.lstSocGest!=null && dataOutJSON.lstSocGest.length > 0 ) {
									
									setListaSocGest( dataOutJSON.lstSocGest );
									selectorBoxInit();
									
									$("#searchSocieta .selector-box").click(function(){
										codSocieta = $(this).attr("data-value");
										showSearchResults();
									});
								}
								
							}
							else if(dataOutJSON.action == "failure"){
								setWlMessaggio("negativo",dataOutJSON.errorMessage!=undefined && dataOutJSON.errorMessage!="" ? dataOutJSON.errorMessage : msg);
//								showError(true, "E", dataOutJSON.errorMessage!=undefined && dataOutJSON.errorMessage!="" ? dataOutJSON.errorMessage : msg);
							}
						}
						else {
							setWlMessaggio("negativo",dataOutJSON.errorMessage!=undefined && dataOutJSON.errorMessage!="" ? dataOutJSON.errorMessage : msg);
//							showError(true, "E", dataOutJSON.errorMessage!=undefined && dataOutJSON.errorMessage!="" ? dataOutJSON.errorMessage : msg);
						}
		},
		error : function(jqXHR, status, errorThrown) {
			var msg = "Si &egrave; verificato un errore di connessione";
			setWlMessaggio("negativo", msg);
//			showError(true, "E", msg);
		},
		complete : function(jqXHR, status) {
			$("#fullPageWl").removeClass("loading");
		}
	});
}


function setListaSocGest( lstSocGest ) {
	
		$.each(lstSocGest,function(i,v) {
			
			var img=$('<img class="img100" src="' + (v.img.indexOf("common")<0?"/common":"") + v.img + '"></img>');
			var nome = $('<span class="definition" style="heigth:70px">' + v.nome + '</span>');
			var div = $('<div class="selector-box" data-value="'+ v.codice + '" style="height:"></div>').html(img).append(nome);
			
			
			$("#listSocGest").append(div);
			
		});
}

function setResultTable( data ) {
	
	$("#searchResultsTable > tbody").find("tr").remove();
	$.each(data, function(i,v){
		
		$("#searchResultsTable > tbody:last-child").append(
			'<tr class="dispari">'
                + '<td>' + v.nome + '</td>'
                + '<td class="hidden-xs">' + v.isin + '</td>'
                + '<td><a class="btn-icon" data-isin="' + v.codiceInterno + '" onclick="addToWl($(this));"><i class="icon icon-add_filled"></i ></a></td>'
            + '</tr>'
		);
	});
	
	if( $("#searchResultsTable > tbody").find("tr").length > 0 ) {
		$("div").scrollTop($("#searchResultsTable tr:nth-child(1)").position());
	}
	
} 

var colonneTabFondiWatchList = [
	//per tablet
	{
		field   : 'icoope',
		title   : '',
		'class'	: 'icopad center visible-xs hidden-sm hidden-md hidden-lg hidden-xl'
	},
	{
		field   : 'check',
		title   : '',
		'class' : 'checkcol nosmall center'
	},
	{
		field   : 'desc',
		title   : 'Nome fondo',
		'class'	: 'left', 
//		"style" : 'min-width: 100px;',
		sortName: 'nome',
		sortable : true,
		order 	: 'asc'
	},
	{
		field   : 'categoria',
		title   : 'Categoria assogestioni',
		'class'	: 'left nosmall'
	},
	{
		field   : 'navVal',
		title   : 'NAV',
		'class'	: 'right' 
	},
	{
		field   : 'rendimento',
		title   : 'Rend. YTD %',
		'class'	: 'right nosmall',
		sortName: 'ytd',
		sortable: true
	},
//	{
//		field   : 'nav',
//		title   : 'NAV',
//		'class'	: 'right nosmall'
//	},
//	{
//		field   : 'valuta',
//		title   : 'Valuta',
//		'class'	: 'center nosmall'
//	},
	{
		field   : 'dataIns',
		title   : 'In WL dal',
		'class' : 'right nosmall'
	},
	{
		field   : 'navDataIns',
		title   : 'NAV data ins.',
		'class'	: 'right'
	},
	{
		field   : 'rendimentoPerTablet',
		title   : 'Rend. YTD %',
		'class'	: 'right visible-xs hidden-sm hidden-md hidden-lg hidden-xl',
		sortName: 'ytd',
		sortable: true
	},
	{
		field   : 'diffdal',
		title   : 'Var. %',
		'class'	: 'right',
		sortName: 'valoreVar',
		sortable: true
	},
	{
		field   : 'icoope',
		title   : '',
		'class'	: 'icopad center nosmall'
	},
	//tablet
	{
		field   : 'check',
		title   : '',
		'class' : 'checkcol center  visible-xs hidden-sm hidden-md hidden-lg hidden-xl'
	}
  ];

function loadWatchList() {
	
	$('#tableFondiWatchlist').hide();
	$("#wlConsole").hide();
	$("#messaggioWl").hide();
	$("#sectionWl > .form-group").hide();
	
	$.ajax({
		url : wrp_script_direct + "/investimenti/WatchListFundLoad.action" + "?cf=" + Math.random(),
		dataType : "json",
		data : {idWL: $("#wlSingolo").val()},
		success : function(dataOutJSON, status, jqXHR) { 
						var msg = "Si &egrave; verificato un errore di connessione";
						if (200 == jqXHR.status) {
							
							if(dataOutJSON.action == "SUCCESS") {   
								
								$('#tableFondiWatchlist').bootstrapTable({
									data	 : {},
									sortOrder		 : "asc",
						            sortName		 : "desc",
									columns	 : colonneTabFondiWatchList,
									rowStyle : function(row, index) {
													if(index % 2 == 0) {
														return { classes: 'dispari'	}
													}
													else { 	
														return { classes: 'pari'}
													}
												}
								});
								
								// Attiva gli automatismi della tabella
								// ICONA OPERATIVA
								if(dataOutJSON.elencoFondiWatchListJson==null || 1>dataOutJSON.elencoFondiWatchListJson.length) {
									$("#tableWatchlist").show().addClass("noconf");
								} else {

									$('#tableFondiWatchlist').show();
									
									$('#tableFondiWatchlist').bootstrapTable('load', dataOutJSON.elencoFondiWatchListJson);
									$("#sectionWl > .form-group").show();
										
									$(".linkVai").click(fesIcoOpeOverlay);
									
									// CHECK CONFRONTA
									$("input[name=confCheck]").click(function(){
										var ttEv = $("input[name=confCheck]:checked");
										var thisEl = $(this);
										var ttMsg = "";
										
										$("#wlConfronta").removeClass("btn-disabled");
											
											// Determina il testo da inserire
											// nel tooltip
											if(thisEl.is(":checked"))
											{
												if(ttEv.length>=2)
												{
													if (ttEv.length>2) {
														thisEl.attr("checked" , false);
														ttMsg = "E' possibile confrontare al massimo 2 fondi"
													}
													else
													{
														ttMsg = "<strong>Fondo aggiunto al confronto.</strong><br>&Egrave; possibile confrontare al massimo 2 fondi alla volta.";
													}
												}
												else
												{
													ttMsg = "<strong>Fondo aggiunto al confronto.</strong><br>Lo trovi alla pagina \"confronta\".";
												}
											}
											else
											{
												ttMsg = "Hai rimosso un elemento dal confronto";
												if (ttEv.length<=0) $("#wlConfronta").addClass("btn-disabled");
												
											}
	
											// Chiude eventuali tooltip aperti
											$(".tooltip:visible").hide();
											thisEl.attr("data-toggle","tooltip");
											thisEl.tooltip({trigger: "manual", html: true})
												.attr('data-original-title', ttMsg)
												.tooltip('show');
	
									});
	
									$("#searchResultsTable").show().removeClass("noconf");
								
								}
								
								
								$('#sectionWl').show();
								$('#tableFondiWatchlist').show();
								
								if($("#wlSingolo").val() != 1) {
									$("#wlConsole").show();
								}
								
							} else if(dataOutJSON.action == "warning"){
							
								setWlMessaggio("attenzione",dataOutJSON.errorMessage!=undefined && dataOutJSON.errorMessage!="" ? dataOutJSON.errorMessage : msg);
//								showError(true, "W", dataOutJSON.errorMessage!=undefined && dataOutJSON.errorMessage!="" ? dataOutJSON.errorMessage : msg);
								
								$('#sectionWl').show();
								
								
								if($("#wlSingolo").val() != 1){
									$("#wlConsole").show();
								}
								
							} else if(dataOutJSON.action == "failure"){
								setWlMessaggio("negativo",dataOutJSON.errorMessage!=undefined && dataOutJSON.errorMessage!="" ? dataOutJSON.errorMessage : msg);
//								showError(true, "E", dataOutJSON.errorMessage!=undefined && dataOutJSON.errorMessage!="" ? dataOutJSON.errorMessage : msg);
							}
							
					}
					else {
						setWlMessaggio("negativo",dataOutJSON.errorMessage!=undefined && dataOutJSON.errorMessage!="" ? dataOutJSON.errorMessage : msg);
//						showError(true, "E", dataOutJSON.errorMessage!=undefined && dataOutJSON.errorMessage!="" ? dataOutJSON.errorMessage : msg);
					}
		},
		error : function(jqXHR, status, errorThrown) {
			var msg = "Si &egrave; verificato un errore di connessione";
			setWlMessaggio("negativo", msg);
//			showError(true, "E", msg);
		},
		complete : function(jqXHR, status) {
			$("#fullPageWl").removeClass("loading");
		}
	});
}


function rimuoviDaWatchlistAction() {
	
	$("#wlRemoveOl").modal("hide");
	$("#fullPageWl").addClass("loading");
	$("#messaggioWl").hide();
	var msg = "Si &egrave; verificato un errore di connessione";
	
	$.ajax({
		url : wrp_script_direct + "/investimenti/" + wlAction[1] + "?cf=" + Math.random(),
		dataType : "json",
		data : {
			idWL: $("#wlSingolo").val(), 
			isin:$("#isinToRemove").val()
		},
		success : function(dataOutJSON, status, jqXHR) { 
			
			var data = dataOutJSON.data;
			
			if (200 == jqXHR.status) {
				if(data.action == "success") {   
					
					loadWatchList();
					okMsg = data.messaggio;
					
				} else {
					setWlMessaggio("negativo",data.errorMessage!=undefined && dataOutJSON.errorMessage!="" ? dataOutJSON.errorMessage : msg);
//					showError(true, "E", dataOutJSON.errorMessage!=undefined && dataOutJSON.errorMessage!="" ? dataOutJSON.errorMessage : msg);
				}
			}
		},
		error : function(jqXHR, status, errorThrown) {
			setWlMessaggio("negativo", msg);
		},
		complete : function(jqXHR, status) {
			
			$("#fullPageWl").removeClass("loading");
			if($("#messaggioWl").is(":visible")==false) {
				setWlMessaggio("positivo", okMsg);
			}
			
		}
		
		});
	
}






// nasconde/visualizza sezione di errore/warning/successo
// show = true/false; tipo="E"(error)/"W"(warning)/"S"(success)
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




$(function() {
	
	var cacheAC = {},
//	autoCompUrl = wrp_script + "/FMP/fdaAutoCom.do",	//da struts-config-fmp.xml
	autoCompUrl = wrp_script_direct + "/investimenti/fdaAutoCom.action",
	showSearchResults,
	icoopeUrl = "";
	
	var tendinaNomeIsin = function(ul, item) {
	    "use strict";
		    var resultItem,
		        x = new RegExp('\\b' + $.ui.autocomplete.escapeRegex(this.term), 'ig');
			
			resultItem = item.label.replace(x, function(Match) {
			    return '<strong>' + Match + '</strong>';
			});
			
			return $("<li></li>").data("item.autocomplete", item).append("<a class='autocomplete_link'>" + resultItem + "</a>").appendTo(ul.css("z-index", getNextHighestZindex()));
	}
	
	
	$("#wlSelect").change(function(){
		
		if($(this).val() == "1") {  // Watch list standard
			$("#wlConsole").hide()
			$("#wlSelWrap").switchClass("col-xs-8","col-xs-12",200);
		} else {
			$("#wlConsole").delay(201).fadeIn();
			$("#wlSelWrap").switchClass("col-xs-12","col-xs-8",200);
		}
		
		// Inserisce il nome della WL come valore predefinito per il cambio nome
		// o l'eleminazione
		$("#wlSingolo").val($('#wlSelect :selected').val());
		$("#wlSingolo").text($('#wlSelect :selected').text());
		$("#wlNameEdit").val($(this).find("option:selected").text())
		$("#wlNameElimina").text($(this).find("option:selected").text());

		loadWatchList();
		
	});
	
	// Pulsanti di azione sulla watchlist wlCreaBtn
	$("#wlCrea").click(function(){
		// Nasconde tutti i blocchi di gestione WL
		
		$(".wlFormBlock").hide();
		$("wlCreaForm").show();
		$("#layerWl").modal("show");
	});
	
	
	// Pulsanti di azione sulla watchlist wlCreaBtn
	$("#wlCreaBtn").click(function(){
		// Nasconde tutti i blocchi di gestione WL
		
		
		addNewWatchList($("#newWLnome").val());
		
		$(".wlFormBlock").show();
		$("wlCreaForm").hide();
		$("#layerWl").modal("hide");
	});
	
	
	
	
	
	$("#wlAggiungi").click(function() {
		
		$("#nomeISIN").val("");
		codSocieta="";

		if (!$(this).hasClass("btn-disabled")) {
			// Reset dell'aggiunta fondi
			$("#searchIntro").show();
			$("#searchNome, #searchSocieta, #searchResults").hide();
			$("#layerFondi").modal("show");
			$('div .selector-box.selected').removeClass('selected');
		}

	});
	
	
	// Interazioni sulla modale (esempio controlli)

	// Bottoni di "smistamento"
	$("#btSearchNome").click(function(){
		$("#searchIntro").hide();
		$("#searchNome").show();
	});

	$("#btSearchSocieta").click(function(){
		$("#searchIntro").hide();
		$("#searchSocieta").show();
	});


// $("#searchSocieta .selector-box").click(showSearchResults);
	
	if(undefined!=$("#nomeISIN").html()){ 
	$("#nomeISIN").keydown(function (event) {
            if (event.which === 13) {
                event.preventDefault();
            }}).autoComplete([], {
            minLength: 0,
            filter: function(request, response) {
                var term = $.trim(request.term),
                    chars = request.term.replace(/\s+/g, "");
	                if (chars.length < 3) {
                    	$("#nomeISIN").autocomplete("close");
                	} else {
					if (term in cacheAC) {
                        	response(cacheAC[term]);
                        	return;
                    	}
                    else {
	                    $.getJSON(autoCompUrl, { "svalue": request.term }, function(res) {
	                        var data = res;
	                        if (data.length) {
	                            data = $.map(data, function(item) {
	                                return { "label": item.nome, "value": item.isin };
	                            });
	                        }
	                        cacheAC[term] = data;
	                        response(data);
	                    });
                    }
                }
            },
            selectable: false,
            clearable: true,
            renderItem: tendinaNomeIsin
        });
	} 
	
	
	$("#wlEdit").click(function(){
		$(".wlFormBlock").hide();
		$("wlEditForm").show();
		$("#layerWl").modal("show");
	});
	
	
	$("#wlEditBtn").click(function(){
		// Nasconde tutti i blocchi di gestione WL
		
		renameWatchList($("#wlNameEdit").val());
		
		$(".wlFormBlock").show();
		$("wlEditForm").hide();
		$("#layerWl").modal("hide");
	});
	
	$("#wlElimina").click(function(){
		$(".wlFormBlock").hide();
		$("wlEliminaForm").show();
		$("#layerWl").modal("show");
		
	});
	
	$("#wlEliminaBtn").click(function(){

		deleteWatchList($("#wlNameElimina").val());
		
		$(".wlFormBlock").show();
		$("wlEliminaForm").hide();
		$("#layerWl").modal("hide");
	});

	
	// Bottoni "annulla"
	$("#layerWl .btn-annulla").click(function(){
		$("#layerWl").modal("hide");
	});
	
	// $("#wlAggiungi").toggleClass("btn-disabled",data.length>=10);
	// Inizializzazione bottone confronta (esemplificativa)
	$("#wlConfronta").addClass("btn-disabled").click(function() {
		//
		if (!$(this).hasClass("btn-disabled")) {
			// Esempio dei dati per il link (modificare a piacimento)
			var dataConf="";
			$.each($("input[name=confCheck]:checked"),function(i,v){
				if(i>0) {
					dataConf+="|" + $(v).val();
				} else {
					dataConf+=$(v).val();
				}
			});
//			location.href= wrp_script + "/wbOnetoone/2l/jsp/FMP/fida/ricerca.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&confronta=" + dataConf;
			location.href= wrp_script + "/wbOnetoone/2l/action/investimenti/RicercaFondi.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta&confronta=" + dataConf;
		}

	});

	
	$("#btnToExcel").click(function(){
		datiToExcel();
	});
	
});




/*
 * $(function(){ // Cambio "watchlist $("#wlSelect").change(function(){
 * if($(this).val() == "standard") { $("#wlConsole").hide()
 * $("#wlSelWrap").switchClass("col-xs-8","col-xs-12",200); } else {
 * $("#wlConsole").delay(201).fadeIn();
 * $("#wlSelWrap").switchClass("col-xs-12","col-xs-8",200); } // Inserisce il
 * nome della WL come valore predefinito per il cambio nome o l'eleminazione
 * $("#wlNameEdit").val($(this).find("option:selected").text())
 * $("#wlNameElimina").text($(this).find("option:selected").text()); }); //
 * Pulsanti di azione sulla watchlist $("#wlCrea").click(function(){ // Nasconde
 * tutti i blocchi di gestione WL $(".wlFormBlock").hide();
 * $("wlCreaForm").show(); $("#layerWl").modal("show"); })
 * 
 * 
 * $("#wlEdit").click(function(){ $(".wlFormBlock").hide();
 * $("wlEditForm").show(); $("#layerWl").modal("show"); });
 * 
 * 
 * $("#wlElimina").click(function(){ $(".wlFormBlock").hide();
 * $("wlEliminaForm").show(); $("#layerWl").modal("show"); }); // Bottoni
 * "annulla" $("#layerWl .btn-annulla").click(function(){
 * $("#layerWl").modal("hide"); });
 * 
 * 
 * }); // Esempio di automazione per la ricerca di un fondo da inserire nella
 * watchlist var cacheAC = {}, autoCompUrl = "/wscmn/xml/fes_autocomplete.json",
 * showSearchResults, icoopeUrl = "", $tableWatchlist; // Set di un messaggio
 * (esempio indicativo) // Tipomsg = "positivo", "negativo", "attenzione" var
 * setWlMessaggio = function (tipomsg,testo) { var msgW =
 * $("#messaggioWl").show(); msgW.find(".messaggioTesto").empty().append($("<p>").html(testo));
 * msgW.find(".boxesito").removeClass("positivo errore
 * attenzione").addClass(tipomsg); };
 * 
 * 
 * var tendinaNomeIsin = function(ul, item) { "use strict"; var resultItem, x =
 * new RegExp('\\b' + $.ui.autocomplete.escapeRegex(this.term), 'ig');
 * 
 * resultItem = item.label.replace(x, function(Match) { return '<strong>' +
 * Match + '</strong>'; }); return $("<li></li>") .data("item.autocomplete",
 * item) .append("<a class='autocomplete_link'>" + resultItem + "</a>")
 * .appendTo(ul.css("z-index", getNextHighestZindex())); } // Emulazione
 * funzione aggiunta a watchlist (es: dato un isin) var addToWl = function() { //
 * Mette la pagina in loading (es: per repost/refresh?)
 * $("#fullPageWl").addClass("loading"); // Chiude la popup
 * setWlMessaggio("positivo","Hai aggiunto il fondo XXXX alla watchlist XYZ"); //
 * Effettua l'operazione di inserimento lato BE... // ...alla fine della quale
 * ricarica la watchlist
 * 
 * loadWatchlist();
 * 
 * $("#layerFondi").modal("hide"); } // Stilizzazione celle positivo/negativo
 * var formatPosNeg = function(val) { return {"classes":
 * (Number(val.replace(",",".")>=0)? "posi right" : "nega right")}; } //
 * Caricamento di una watchlist (dati indicativi) var loadWatchlist =
 * function(){
 * 
 * $("#fullPageWl").addClass("loading"); // Es: come parametro utilizzo il
 * valore della SELECT $.ajax({ url:
 * "/librerie/include/commons/ajax/fes_watchlist.php", data: { "idWL" :
 * $("#wlSelect").val() }, dataType: "json", method: "POST", error: function() {
 * alert("Si e' verificato un errore durante il caricamento dei dati");
 * $("#fullPageWl").removeClass("loading"); }, success: function(data){
 * 
 * $(".tooltip:visible").hide();
 * 
 * if (data.esito == "ok") { $("#wlConfronta").addClass("btn-disabled"); if
 * (data.watchList.length == 0) { $("#messaggioWlNofondi").show();
 * $("#tableWatchlist").hide(); } else { $("#messaggioWlNofondi").hide();
 * 
 * var tableData = data.watchList;
 * 
 * //mostra o nasconde la colonna di confronto if (tableData.length<1) {
 * $("#tableWatchlist").show().addClass("noconf"); } else { // Modifica i dati
 * ricevuti per inserire il blocco checkbox e l'icona operativa "speciale"
 * $.each(tableData,function(i,v){ // Link iniziale tableData[i].fundlink = "<a
 * href=\"" + tableData[i].url +"\">"+ tableData[i].nome + "</a>"; // Checkbox
 * tableData[i].check = "<input type=\"checkbox\" name=\"confCheck\" value=\""+
 * v.isin +"\">"; // Icona operativa tableData[i].icoope = "<a
 * class=\"linkVai\" title=\"scegli l'operazione da effettuare\"
 * href=\"javascript:;\" codicesocieta=\""+v.codicesocieta+"\"
 * codicecomparto=\""+v.codicecomparto+"\" divisa=\""+v.val+"\"
 * fondosicav=\""+v.fondosicav+"\" data-fundname=\""+v.nome+"\"><i class=\"icon
 * icon-2x icon-ico_azioni02A\"></i></a>"; // assembla il dato HTML Var% dal
 * tableData[i].diffdal = "<span class=\""+ ((tableData[i].diff>=0)? "posi" :
 * "nega")+"\">"+ tableData[i].diff + "</span><br><span
 * class=\"dettagli\">dal " + tableData[i].datains + "</span>"; // Crea il nav
 * con la valuta tableData[i].navval = tableData[i].przultimo + "<br>" +
 * tableData[i].val; // Crea il nav datains con la valuta
 * tableData[i].navvaldatains = tableData[i].przinserimento + "<br>" +
 * tableData[i].val;
 * 
 * });
 * 
 * $tableWatchlist.bootstrapTable("load", tableData); // Attiva gli automatismi
 * della tabella // ICONA OPERATIVA $(".linkVai").click(fesIcoOpeOverlay); //
 * CHECK CONFRONTA $("input[name=confCheck]").click(function(){ var ttEv =
 * $("input[name=confCheck]:checked"); var thisEl = $(this); var ttMsg = "";
 * 
 * $("#wlConfronta").removeClass("btn-disabled"); // Determina il testo da
 * inserire nel tooltip if(thisEl.is(":checked")) { if(ttEv.length>=2) { if
 * (ttEv.length>2) { thisEl.attr("checked" , false); ttMsg = "E' possibile
 * confrontare al massimo 2 fondi" } else { ttMsg = "<strong>Fondo aggiunto al
 * confronto.</strong><br>&Egrave; possibile confrontare al massimo 2 fondi
 * alla volta."; } } else { ttMsg = "<strong>Fondo aggiunto al confronto.</strong><br>Lo
 * trovi alla pagina \"confronta\"."; } } else { ttMsg = "Hai rimosso un
 * elemento dal confronto"; if (ttEv.length<=0)
 * $("#wlConfronta").addClass("btn-disabled"); } // Chiude eventuali tooltip
 * aperti $(".tooltip:visible").hide(); thisEl.attr("data-toggle","tooltip");
 * thisEl.tooltip({trigger: "manual", html: true}) .attr('data-original-title',
 * ttMsg) .tooltip('show');
 * 
 * });
 * 
 * $("#searchResultsTable").show().removeClass("noconf"); } // Limite massimo di
 * fondi (10) $("#wlAggiungi").toggleClass("btn-disabled",data.length>=10) } }
 * else { // Mostra il messaggio d'errore //alert("Si e' verificato un errore
 * durante il caricamento dei dati"); }
 * 
 * $("#fullPageWl").removeClass("loading"); }
 * 
 * }); } // Funzioni "onload" $(function(){ // Autocomplete nome fondo/ISIN
 * $("#nomeISIN").keydown(function (event) { if (event.which === 13) {
 * event.preventDefault(); } }).autoComplete([], { minLength: 0, filter:
 * function(request, response) { var term = $.trim(request.term), chars =
 * request.term.replace(/\s+/g, ""); if (chars.length < 3) {
 * $("#nomeISIN").autocomplete("close"); } else { if (term in cacheAC) {
 * response(cacheAC[term]); return; } else { $.getJSON(autoCompUrl, { "svalue":
 * request.term }, function(res) { var data = res; if (data.length) { data =
 * $.map(data, function(item) { return { "label": item.nome, "value": item.isin };
 * }); } cacheAC[term] = data; response(data); }); } } }, selectable: false,
 * clearable: true, renderItem: tendinaNomeIsin }); // Blocco funzioni Aggiunta
 * fondi a WL // Tabella bootstrap // Inizializzazione tabella di bootstrap;
 * $tableWatchlist = $('#tableWatchlist').bootstrapTable({ sortable: true,
 * sortName: "fundlink", sortOrder: "asc", pagination : "true", pageSize: 15,
 * pageList: [15, 30, 60, 'tutti'], rowStyle: function(row, index) { if(index %
 * 2 == 0) { return { classes: 'dispari' } } else { return { classes: 'pari' } } }
 * 
 * }); // Apertura della modale $("#wlAggiungi").click(function(){
 * 
 * if (!$(this).hasClass("btn-disabled")) { // Reset dell'aggiunta fondi
 * $("#searchIntro").show(); $("#searchNome, #searchSocieta,
 * #searchResults").hide(); $("#layerFondi").modal("show"); }
 * 
 * }); // Interazioni sulla modale (esempio controlli)
 * 
 * //Bottoni di "smistamento" $("#btSearchNome").click(function(){
 * $("#searchIntro").hide(); $("#searchNome").show(); });
 * 
 * $("#btSearchSocieta").click(function(){ $("#searchIntro").hide();
 * $("#searchSocieta").show(); }); // Risultati della ricerca showSearchResults =
 * function(){ // Impostare qui l'algoritmo di ricerca con i parametri corretti. //
 * Qui viene emulato un semplice timeout $("#searchNome,
 * #searchSocieta").hide(); $("#searchResults").show().addClass("loading")
 * setTimeout(function(){$("#searchResults").removeClass("loading")},500) }
 * $("#searchSocieta .selector-box").click(showSearchResults); //
 * Inizializzazione watchlist corrente $("#wlSelect").change(loadWatchlist); //
 * Inizializzazione bottone confronta (esemplificativa)
 * $("#wlConfronta").addClass("btn-disabled").click(function(){ // if
 * (!$(this).hasClass("btn-disabled")) { // Esempio dei dati per il link
 * (modificare a piacimento) var dataConf = [];
 * $.each($("input[name=confCheck]:checked"),function(i,v){
 * dataConf.push($(v).val()); }); alert(dataConf); }
 * 
 * }); // Inizializzazione watchlist loadWatchlist();
 * 
 * });
 * 
 */		