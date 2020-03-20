// Indirizzo di base della scheda fondo
is4s = (typeof is4s == "undefined") ? is4s = false : is4s;

if (is4s && location.href.indexOf("bpmbanking.it")) {
	cgi_script = "https://wetoolscoll.bpmgrp.global:6032/wetools";
}

if (!is4s)
{
	fesFondoUrl = (!isLib)? cgi_script + "/FMP/schedaFondo.do" : "/wscmn/html/fes_fondo.html";
	fesTempisticheUrl = (!isLib) ? cgi_script+"/FMP/tempisticheSchedaFondo.jsp" : "/wscmn/html/fes_tempistiche.html";
	fesGestioneUrl = (!isLib) ? cgi_script+"/FMP/societaGestioneSchedaFondo.jsp" : "/wscmn/html/fes_gestione.html";
}
else
{
	fesFondoUrl = (!isLib)? cgi_script + "/FMP/schedaFondo4s.do" : "/wscmn/4s/html/fes_fondo.html";
	fesTempisticheUrl = (!isLib) ? cgi_script+"/FMP/fida/tempisticheSchedaFondo4s.jsp" : "/wscmn/4s/html/fes_tempistiche.html";
	fesGestioneUrl = (!isLib) ? cgi_script+"/FMP/fida/societaGestioneSchedaFondo4s.jsp" : "/wscmn/4s/html/fes_gestione.html";
}



// Variabili generiche
// Colori per i grafici
var graphColors = ["#99cc66", "#0099cc", "#cc9966", "#d4bb47", "#91541d", "#ff9933", "#cc3333", "#006666", "#003399", "#666666",  "#8A0CCF", "#CD0D74", "#754DEB", "#DDDDDD", "#999999", "#333333", "#000000", "#57032A", "#CA9726", "#990000", "#4B0C25"];

// Mostra la scheda fondo
function fesFondoShow(params)
{
	// Prepara il contenitore, se necessario
	if(!$("#fesFondoWrapper").length)
	{
		fesFondoWrap = $("<div>").attr({"id": "fesFondoWrapper"});
		$("#contenuti").append(fesFondoWrap);
	}
	else
	{
		//Lo svuota e basta
		fesFondoWrap.empty();
	}
	// Nasconde la ricerca
	$("#fesRicWrap").hide();
	$("#fesLeftSel").hide();
	// Nasconde le note legali 
	$("#fesNote").hide();
	
	// Mostra il contenitore, inizializzandolo come "in caricamento"
	fesFondoWrap.append($("<img>").attr({"src":"/wscmn/img/ico2inf_loadingbig.gif"}).css({"padding-left":"315px","padding-top":"60px"})).show();

	// Carica i contenuti, via AJAX
	$.ajax({
		url: fesFondoUrl + "?" + location.href.split("?")[1] + "&rand=" + Math.random(),
		dataType: "html",
		data: params,
		success: function(data)
			{
				
				fesFondoWrap.html(data);
				// Inizializzazione dell'html ricevuto
				
				// Sposta le note se necessario
				if (is4s) $("#contenuti").append ($("#contenuti>.note"));

				// Tooltip
				ttSet(fesFondoWrap);
				
				// Div grafico non disponibile
				gNoDisp = $("<div>").html("Grafico non disponibile").addClass("gNoDisp");
			
				// Iniezione codice tempistiche
				if(!is4s){
					$.ajax({
						url: fesTempisticheUrl + "?rand=" + Math.random(),
						dataType: "html",
						data: {idSicav: societa, Cfam: cfam},
						success: function(data)
							{
								$("#tempi").html(data);
								// Inizializzazione accordion
								$(".accordionsepa .opening").click(function(){
									if($(this).hasClass("active"))
									{
										// Chiude l'accordion
										$(this).removeClass("active");
										$(this).parent().find(".expanded").slideUp();
									}
									else
									{
										// Apre l'accordion 
										$(this).addClass("active");
										$(this).parent().find(".expanded").slideDown();
									}
								});
								
								$(".accordionsepa").eq(0).find(".opening").addClass("active");
								$(".accordionsepa").eq(0).find(".expanded").show();
								
							},
						error: function()
							{
								alert("Errore ric. dati tempistiche");
							}
					
					});
				}	
				
				fondoViewData = function() 
					{
						if (!is4s){
						switchTab('tabAlert','tab', $(this).attr("data-tabid"), 5); 
						newTabSelected(this);
						}
						else
						{
							$(this).parents(".accobox").toggleClass("expanded");
						}
						
						// Inizializza i vari tab (es:carica i dati via ajax o plotta i grafici)
						switch ($(this).attr("data-tabid"))
						{
							case "1":
								if (dati_sintesi.length>0)
								{
									// Sintesi
									fesPlotGraph ({

										gType: "serial",
										gData: dati_sintesi,
										gCategory: "chiave",
										gIdDest: "grafico_sintesi",
										dataFormat: "",
										gLines: [
											{
												title: "Andamento fondo",
												lineColor: graphBankColor[getBank()],
												valueField: "valore",
												label: "descvalore"
											},
											{
												title: "Indice: " + nome_indice.cut(25),
												lineColor: "#999",
												valueField: "indice",
												label: "descindice",
												dashLength: 3
											}
										]


									});
								}
								else
								{
									$("#grafico_sintesi").empty().append(gNoDisp);
								}
								
								// Asset allocation
								if (typeof data_assetallocation != "undefined")
								{
									fesPlotGraph ({
										gType: "bar",
										gData: data_assetallocation,
										gCategory: "chiave",
										gIdDest: "grafico_assetallocation",
										colorfield: "color",
										dataFormat: "%",
										title: "Percentuale composizione",
										valueField: "valore"
									});
								}
							break;
							
							case "2":
							// Grafico e rendimenti
							
							var gCont = $("#grafico_fondo");
							gCont.empty();
							// Controlla se l'oggetto è riempito
							var isDataEmpty = true;
							$.each(dati_graficofondo,function(key,value){isDataEmpty = false})
							if (!isDataEmpty)
							{
								// Crea gli elementi del grafico e li popola
								gSpace = $("<div>").attr({"id":"grafico_fondo_space"});
								// Select
								var gSelect = $("<select>");
								$.each(dati_graficofondo, function(k,v){
									var opt = $("<option>").attr({"value": k.toString()}).html(k.toString());
									if(k.toString() == "1 anno") opt.attr({"selected": true});
									gSelect.append(opt);
								});
								gSelect.on("change",function(){
									gSpacePlot(dati_graficofondo[$(this).val()]);
								});
								gSelectBlock = $("<div>").addClass("fesGraphSelector");
								gSelectBlock.append($("<label>").html("Seleziona un periodo:"),gSelect);
								gCont.append(gSpace,gSelectBlock);
								
								// Funzione che riempie il grafico
								gSpacePlot = function(dataToPlot)
								{
									gSpace.empty();
									fesPlotGraph (


										{
											gType: "serial",
											gData: dataToPlot,

											gCategory: "chiave",
											gIdDest: "grafico_fondo_space",
											dataFormat: "",
											gLines: [
												{
													title: "Andamento fondo",
													lineColor: graphBankColor[getBank()],
													valueField: "valore"
												},
												{
													title: "Indice: " + nome_indice,
													lineColor: "#999",
													valueField: "indice",
													dashLength: 3
												}
											]
										}
									);
								}
								gSelect.trigger("change");							
							}

							else
							{
								gCont.append(gNoDisp);
							}
							
							break;
							
							case "4":
								
								// Composizione: Asset allocation
								if (typeof data_assetallocation != "undefined" && $('#grafico_asset_composizione').length>0)
								{
									fesPlotGraph ({
										gType: "bar",
										gData: data_assetallocation,
										gCategory: "chiave",
										gIdDest: "grafico_asset_composizione",
										colorfield: "color",
										dataFormat: "%",
										title: "Percentuale composizione",
										valueField: "valore"
									});
								}
								
								// Composizione: Distribuzione
								if (typeof dati_distribuzione != "undefined" && $('#grafico_distribuzione').length>0)
								{
									fesPlotGraph ({
										gType: "bar",
										gData: dati_distribuzione,
										gCategory: "chiave",
										gIdDest: "grafico_distribuzione",
										colorfield: "color",
										dataFormat: "%",
										valueField: "valore"
									});
								}

								// Composizione: Settori
								
								if (typeof dati_settori != "undefined" && $('#grafico_settori').length>0)
								{
									fesPlotGraph ({
										gType: "bar",
										gData: dati_settori,
										gCategory: "chiave",
										gIdDest: "grafico_settori",
										colorfield: "color",
										dataFormat: "%",
										valueField: "valore"
									});
								}
								// Composizione: Top ten
								
								if (typeof dati_topten != "undefined" && $('#grafico_topten').length)
								{
									fesPlotGraph ({
										gType: "bar",
										gData: dati_topten,
										gCategory: "chiave",
										gIdDest: "grafico_topten",
										colorfield: "color",
										dataFormat: "%",
										valueField: "valore"
									});
								}
								
								// Composizione: Esposizione
								if (typeof dati_esposizione != "undefined" && $('#grafico_esposizione').length )
								{
									fesPlotGraph ({
										gType: "bar",
										gData: dati_esposizione,
										gCategory: "chiave",
										gIdDest: "grafico_esposizione",
										colorfield: "color",
										dataFormat: "%",
										valueField: "valore"
									}); 
								}
							break;
							
							case "5":
								var tabCont5 = $("#tabAlert5");
								
								// Se non sono presenti contenuti...
								if (tabCont5.find("*:first-child").length <= 0)
								{
									// Chiocciola di loading
									tabCont5.append($("<img>").attr({"src":"/wscmn/img/ico2inf_loadingbig.gif"}).css("padding","50px 322px"));
									// Invoca i contenuti
									$.ajax({
										url: fesGestioneUrl,
										data: {idSicav:societa, CodSocieta: codSocieta},
										dataType: "html",
										success: function(data)
										{
											tabCont5.html(data);
										}
									});
								}
							break;
							
						}
						
					}

				// Tabs
				if (!is4s)
				{
					$(".tabellatabs a").on("over",newTabOn);
					$(".tabellatabs a").on("out",newTabOff);
					$(".tabellatabs a").click(fondoViewData);
				}
				else
				{
					$(".accobox .accotitle").click(fondoViewData);
				}

				// Pulsante "torna a ricerca"
				// Se è valorizzato il "Frompage"
				$(".fesBackRicerca").html(($("#fromPage").val()!="" && $("#fromPage").val()!="null") ? "Torna indietro" : "Torna a ricerca");
				$(".fesBackRicerca").click(
					function()
					{
						if ($("#fromPage").val()!="" && $("#fromPage").val()!="null")
						{
							location.href = $("#fromPage").val();
						}
						else
						{
							$("#fromPage").val("");
							fesFondoWrap.hide();
							if(!fesRicStarted)
							{
								fesRicShow();
							}
							else
							{
								$("#fesRicWrap").show();
							}
						}
					}
				);
				
				// Attivazione primo tab
				$(".tabellatabs a[data-tabid=1]").trigger("click");
				$(".accotitle").eq(0).trigger("click");
			},
		error: function() 
			{
				alert("Errore ricezione dati scheda fondo");
			}
	});
}

// Carica la scheda fondo
function fesFondoStart(params)
{
	fesFondoParams = params;
	$(document).ready(function() {fesFondoShow(fesFondoParams)});
}