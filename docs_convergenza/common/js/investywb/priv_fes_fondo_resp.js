// Indirizzo di base della scheda fondo
is4s = (typeof is4s == "undefined") ? is4s = false : is4s;

if (is4s && location.href.indexOf("bpmbanking.it")) {
	cgi_script = "https://wetoolscoll.bpmgrp.global:6032/wetools";
}

if (!is4s)
{
	fesFondoUrl = (!isLib)? wrp_script_direct + "/investimenti/SchedaFondo.action" : "/include/ajax/fes_scheda_fondo_resp.php";
	fesTempisticheUrl = (!isLib) ? wrp_script_direct+"/FMP/tempisticheSchedaFondo.jsp" : "/wscmn/html/fes_tempistiche.html";
	fesGestioneUrl = (!isLib) ? wrp_script_direct+"/FMP/societaGestioneSchedaFondo.jsp" : "/include/ajax/fes_gestione.html";

}
else
{
	fesFondoUrl = (!isLib)? wrp_script_direct + "/FMP/schedaFondo4s.do" : "/wscmn/4s/html/fes_fondo.html";
	fesTempisticheUrl = (!isLib) ? wrp_script_direct+"/FMP/fida/tempisticheSchedaFondo4s.jsp" : "/wscmn/4s/html/fes_tempistiche.html";
	fesGestioneUrl = (!isLib) ? wrp_script_direct+"/FMP/fida/societaGestioneSchedaFondo4s.jsp" : "/wscmn/4s/html/fes_gestione.html";
}



// Variabili generiche
// Colori per i grafici
var graphColors = ["#99cc66", "#0099cc", "#cc9966", "#d4bb47", "#91541d", "#ff9933", "#cc3333", "#006666", "#003399", "#666666",  "#8A0CCF", "#CD0D74", "#754DEB", "#DDDDDD", "#999999", "#333333", "#000000", "#57032A", "#CA9726", "#990000", "#4B0C25"];
var fesFondoWrap;

// Mostra la scheda fondo
function fesFondoShow(params)
{

	// WORKAROUND PER MANCATA DIVISIONE DELLA PAGINA 
	if ($("#fesFondoWrap").length<=0) $("#contenuti").prepend($("<div>").attr({"id": "fesFondoWrap"}).addClass("loading"));
	$("#fesRicWrap").hide();
	$("#id_label").hide();
	// FINE WORKAROUND PER MANCATA DIVISIONE DELLA PAGINA 
	fesFondoWrap = $("#fesFondoWrap").empty().addClass("loading").show();


	// Carica i contenuti, via AJAX
	$.ajax({
		url: fesFondoUrl + "?rand=" + Math.random(),
		dataType: "html",
		data: params,
		success: function(data)
			{
				
				fesFondoWrap.html(data);

				// Tooltip
				initTooltip(fesFondoWrap);
				
				// Div grafico non disponibile
				gNoDisp = $("<div>").html("Grafico non disponibile").addClass("gNoDisp");
				
				var fondoDataInit = function() 
					{


						// TAB SINTESI 
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
										lineColor: graphBankColor["Webank"],	//getBank()
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
							$("#grafico_sintesi").empty().append(gNoDisp.clone());
						}
						

						// Asset allocation
						if (typeof data_assetallocation != "undefined")
						{
							
							if (data_assetallocation.length>0) {
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
							else
							{
								$('#grafico_assetallocation').empty().append(gNoDisp.clone());
							}
						}
	

						if (typeof dati_graficofondo != "undefined") {
							// Grafico e rendimenti
							var gCont = $("#grafico_fondo");
							gCont.empty();
							// Controlla se l'oggetto � riempito
							var isDataEmpty = true;
							$.each(dati_graficofondo,function(key,value){isDataEmpty = false})
							if (!isDataEmpty)
							{
								// Crea gli elementi del grafico e li popola
								gSpace = $("<div>").attr({"id":"grafico_fondo_space"});
								// Select
								gSelect = $("<select>").addClass("form-control");
								$.each(dati_graficofondo, function(k,v){
									var opt = $("<option>").attr({"value": k.toString()}).html(k.toString());
									if(k.toString() == "1 anno") opt.attr({"selected": true});
									gSelect.append(opt);
								});
								
								gSelectBlock = $("<div>").addClass("fesGraphSelector form-group");
								gSelectBlock.append($("<label>").html("Seleziona un periodo").addClass("control-label"),gSelect);
								gCont.append($("<div>").addClass("row").append($("<div>").addClass("col-sm-6").append(gSelectBlock)),gSpace);
								
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
													lineColor: graphBankColor["Webank"],
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
								gSelect.on("change",function(){
									gSpacePlot(dati_graficofondo[$(this).val()]);
								});
								gSelect.trigger("change");							
							}

							else
							{
								gCont.append(gNoDisp.clone());
							}
						}	
	
								
								// Composizione: Asset allocation
								if (typeof data_assetallocation != "undefined" && $('#grafico_asset_composizione').length>0)
								{
									if (data_assetallocation.length>0) {
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
									else
									{
										$('#grafico_asset_composizione').empty().append(gNoDisp.clone());
									}
								}
								
								// Composizione: Distribuzione
								if (typeof dati_distribuzione != "undefined" && $('#grafico_distribuzione').length>0) {
									if (dati_distribuzione.length>0)
									{
										fesPlotGraph ({
											gType: "bar",
											gData: dati_distribuzione,
											gCategory: "chiave",
											gIdDest: "grafico_distribuzione",
											colorfield: "color",
											dataFormat: "%",
											title: "Percentuale distribuzione",
											valueField: "valore"
										});
									}
									else
									{
										$('#grafico_distribuzione').empty().append(gNoDisp.clone());
									}
								}
								

								// Composizione: Settori
								
								if (typeof dati_settori != "undefined" && $('#grafico_settori').length>0)
								{
									if (dati_settori.length>0)
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
									else
									{
										$('#grafico_settori').empty().append(gNoDisp.clone());
									}
								}
								// Composizione: Top ten
								
								if (typeof dati_topten != "undefined" && $('#grafico_topten').length)
								{
									if (dati_topten.length>0)
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
									else
									{
										$('#grafico_topten').empty().append(gNoDisp.clone());
									}
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

								var tabCont5 = $("#tabAlert5");
								
								// Se non sono presenti contenuti...
								if (tabCont5.find("*:first-child").length <= 0)
								{
									// Chiocciola di loading
									tabCont5.addClass("loading");
									// Invoca i contenuti
									$.ajax({
										url: fesGestioneUrl,
										data: {idSicav:societa, CodSocieta: codSocieta},
										dataType: "html",
										success: function(data)
										{
											tabCont5.removeClass("loading").html(data);
										}
									});
								}
					
					
						
					};

				$("a[data-int-id]").click(function(e){
					fondoDataInit()
					if ($(this).is("*[data-toggle='collapse']")) {
						if ($(this).parents(".panel").children(".panel-collapse").hasClass("in")) {
							// Blocca la chiusura dei pannelli gi� aperti
							e.stopPropagation();
						}
						else
						{
							setTimeout(function(){$("html, body").animate({scrollTop: $("#sfTab").offset().top})},200);
						}
					}

				});


				// Creazione del carousel degli ultimi fondi visualizzati 
				var ultimiFondiMobile = $("#ultimiFondiDesk .fundBox").clone(true);
				var ultimiFondiMobilePages = $("<div>").addClass("carouselPlusPages");
				var ultimiFondiMobileDots = $("<div>").addClass("carouselPlusNav");
				$.each(ultimiFondiMobile, function(i,v) {
					ultimiFondiMobileDots.append($("<div>").addClass("carouselPlusBtn"));
					ultimiFondiMobilePages.append($("<div>").addClass("carouselPlusPage").append($("<div>").addClass("carouselPlusPageWrap").append($(v))));
				});
				var ufCarousel =  $("<div>").addClass("carouselPlus visible-xs").attr({"data-loop":"true","id":"ultimiFondiMobile"}).append(
					ultimiFondiMobilePages,
					ultimiFondiMobileDots
				);

				$("#ultimiFondiDesk").parent().append(ufCarousel);
				ufCarousel.carouselPlus('currentPage', 0)


								
				// Attivazione primo tab
				$("#sfTab a").eq(0).trigger("click");
				fesFondoWrap.removeClass("loading");

			},
		error: function() 
			{
				alert("Errore ricezione dati scheda fondo");
				fesFondoWrap.removeClass("loading");			}
		,complete: function(){
			if(params.showButtonContainer!=undefined){
				if(!params.showButtonContainer){
					$(".btn-console,.SFIndietro,.SFAlert,.SFWatchList,#idSFUltimiTreFondi").hide();
					$($(".fundPanel")[1]).hide();
				}
			}
		}	
	});
}

// Carica la scheda fondo
function fesFondoStart(params)
{
	fesFondoParams = params;
	$(document).ready(function() {fesFondoShow(fesFondoParams)});
}