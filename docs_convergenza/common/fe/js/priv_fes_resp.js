is4s = (typeof is4s == "undefined") ? is4s = false : is4s;

// Variabili generiche
var graphBankColor = {"Webank":"#8ab10b","BPM Banking": "#007A63","BL Banking": "#1C5E91","BM Banking":"#AA1224"}
var graphBarHeight = 40;

// Connettori per ajax
var fesOpeUrl = (!isLib) ? cgi_script + "/FMP/iconaOperativa.do" : "/include/ajax/fes_iconaoperativa.php";

var fesAutocompleteUrl = "";
if (!is4s) {
//	fesAutocompleteUrl = (!isLib) ? cgi_script + "/FMP/fdaAutoCom.do" : "/wscmn/xml/fes_autocomplete.json";
	fesAutocompleteUrl = (!isLib) ?  wrp_script_direct + "/investimenti/fdaAutoCom.action" : "/include/ajax/fes_autocomplete.json";
}
else
{
	fesAutocompleteUrl = (!isLib) ? cgi_script + "/FMP/fida/fidaAutoComplete4s.jsp" : "/include/ajax/fes_autocomplete.json";
}

var fesWlAddUrl = (!isLib) ? cgi_script +"/FMP/insertFundWL.do" : "/wscmn/html/fes_wlresults.html";

// Formatta i numeri in output
function formatNumber(el)
{
	if(Number(el))
	{
		// Arrotondamento
		el = Math.round((el*1000))/1000;
		var numberElements = el.toString().split(".");
		var numberDec = numberElements[1];
		var numberIntVal = numberElements[0].split("").reverse();
		var numberInt = "";
		for(x=0;x<numberIntVal.length;x++)
		{
			if (x%3 == 0 && x>0)  numberInt = "." + numberInt;
			numberInt = numberIntVal[x] + numberInt;
		}
		el = (numberElements[1])? numberInt + "," + numberDec : numberInt;
	}
	if (el == "0" || el == "" || el == null) el = "-";
	return el;
}


// Aggiungi a Watchlist
function addToWl()
{
	// Blocca l'interfaccia
	setLoadingOnObject("#wlInsert");
	$("#addWlForm").css("visibility","hidden");
	$.ajax({
		url:fesWlAddUrl + "?rand=" + Math.random(),
		dataType: "html",
		data: $("#addWlForm").serialize(),
		success: function(data)
			{
				// Messaggio di conferma
				$("#addWlForm").hide();
				$("#wlEnd #esitoCont").html("Fondo aggiunto alla watchlist<br><strong>"+  $("#addWlForm select option:selected").html() +"</strong>");
				$("#wlEnd .boxesito").addClass("positivo");
				unsetLoadingOnObject("#wlInsert");
				$("#wlEnd").show();
			},
		error: function ()
			{
				// Messaggio di errore
				$("#addWlForm").hide();
				$("#wlEnd .boxesito").addClass("negativo");
				$("#wlEnd #esitoCont").html("Si &egrave; verificato un errore.<br>Riprovare pi&ugrave; tardi.");
				unsetLoadingOnObject("#wlInsert");
				$("#wlEnd").show();
			}
	});
}


// Icona operativa
function fesIcoOpe()
{
	// Individua la provenienza del click in base ai wrapper
	var icoFrom = "";
	if($(".fondialert").length>0) icoFrom = "alert";
	if($(".fondiwatchlist").length>0) icoFrom = "wl";

	var icoMenu = $(this).parents(".icopad, .col-icone").find(".sezioneLinks2");
	// Svuota tutte le icone operative
	$(".sezioneLinks2").empty();
	// Distrugge eventuali overlay
	$("#wlAlert").remove();
	// Se &egrave; aperto, lo chiude
	if (icoMenu.css("display") == "none")
	{
		$(".sezioneLinks2").hide();
		$(".linkTooltip").removeClass("over");
		$(this).parents(".linkTooltip").addClass("over");
		// Mette l'overlay in caricamento
		icoMenu.html("<div style='background:url(/wscmn/img/ico2inf_loading.gif) no-repeat scroll 5px 1px #eee;border: 1px solid #cacaca;border-radius:3px;color: #aaa;padding:3px;width:124px;'>Caricamento...</div>");
		icoMenu.show();
		// Carica il layer con i dati in Ajax
		var opeOver = $(this).parent("td").find("sezionelinks2");
		var parameters = {"codicesocieta" : $(this).attr("codicesocieta"),"codicecomparto":$(this).attr("codicecomparto"),"divisa":$(this).attr("divisa"),"fondosicav":$(this).attr("fondosicav")};
		$.ajax({
			dataType: "html",
			url: fesOpeUrl +"?from="+ icoFrom + "&rand=" + Math.random(),
			data: parameters,
			success: function(data)
			{
				icoMenu.html(data);
			}
		});
	}
	else
	{
		icoMenu.hide();
		$(this).parents(".linkTooltip").removeClass("over");
	}
}
// Set icona operativa
function setIcopad()
{

	if ($("#contenuti").hasClass("porting")) {

		$.each($(".linkVai").not(".inited"),function(i,v) {
			var ico = $(v);
			if (!ico.attr("data-fundname")) {
				var fundname = "";
				/* Se e' la scheda confronta */
				if ($("#fesConfrontaCont").length>0) {
					if ($("#fesConfrontaCont").is(":visible")) {
						fundname = ico.parents(".icopad").find("strong").html();
						ico.attr("data-fundname",fundname);
						ico.click(fesIcoOpeOverlay).addClass("inited");
					}
				}

			};

		}
		);

	}
	else
	{
		$.each($(".linkVai"),function(i,v)
		{
			$(v).parent().find(".sezioneLinks2").css({"margin-left": "-113px", "margin-top": "-21px","display":"none"});
			$(v).click(fesIcoOpe);
		});
	}

}


// Icona operativa versione PORTING
/*
var fesIcoOpeOverlay = function (){

	// Raccoglie tutti i parametri tramite il link
	var opelink = $(this);

	// Se non e' presente l'overlay lo genera e predispone i 2 oggetti per titolo e HTML
	if (!$("#icoOperModal").length)
	{
		icoOpeModal = getModal({id:"icoOpeModal",titolo: "", body: $("<div>").attr("id","icoOpeModalContent")});
		icoOpeModalTitle = $("#icoOpeModalLabel");
		icoOpeModalHtml = $("#icoOpeModalContent")
	}

	// Modifica titolo ed HTML
	icoOpeModal.modal("show");
	icoOpeModalTitle.html(opelink.attr("data-fundname"));
	icoOpeModalHtml.empty().addClass("loading");
	var parameters = {
		"codicesocieta" : opelink.attr("codicesocieta"),
		"codicecomparto":opelink.attr("codicecomparto"),
		"divisa":opelink.attr("divisa"),
		"fondosicav":opelink.attr("fondosicav")
	};
	if (opelink.attr("idalert")) parameters["idalert"] = opelink.attr("idalert");


	icoFrom = "";
	if($(".fondialert").length>0) icoFrom = "alert";
	if($(".fondiwatchlist").length>0) icoFrom = "wl";
	// Get dell'HTML
	$.ajax({
		dataType: "html",
		url: fesOpeUrl +"?from="+ icoFrom + "&rand=" + Math.random(),
		data: parameters,
		success: function(data)
		{
			if($(data).find("ul.azioni").length>0) {
				icoOpeModalHtml.empty().removeClass("loading").append($(data).find("ul.azioni"));
			}
			else
			{
				icoOpeModalHtml.empty().removeClass("loading").html(data);
			}

		}
	});

}
*/

// Ricerca nome o ISIN
$.fn.magicSearch = function(ajaxurl,callBack,options)
{
	var msfield = $(this);
	msfield.wrap($("<div>").addClass("magicSearch"));
	msphtext = msfield.attr("placeholder");
	var msOptList = $("<ul>").addClass("msList").hide();

	// Appende il pulsante per la ricerca, di fianco al campo stesso
	var msButton = $("<a>").addClass("msButton icon icon-r-dettaglio").attr({"href":"javascript:;","title":"Ricerca"});
	msButton.click(function()
		{
			// Se deve fare il reset, lo fa, altrimenti parte con la ricerca.
			if($(this).hasClass("reset"))
				{
					$(this).removeClass("reset icon-delete_table");
					$(this).addClass("icon-r-dettaglio").attr("title","Ricerca");
					msfield.val("");
					msOptList.hide();
					if(callBack) callBack();
				}
				else
				{
					if(msfield.val()!="" && msfield.val()!= msphtext) {
	 					msOptList.hide();
						if(callBack) callBack();
						$(this).removeClass("icon-r-dettaglio");
						$(this).addClass("reset icon-delete_table").attr("title","Annulla");
					}
				}
		}
	)

	msfield.parent().append(msButton,msOptList);
	msfield.on("keyup",function(e){

		msButton.removeClass("reset icon-delete_table").addClass("icon-r-dettaglio");

		e.preventDefault();
		if (msfield.val().length >= 2)
		{
			if(e.keyCode == 13) {
				msButton.click();
			}
			else
			{
				var inputJson = {svalue: msfield.val()};
				if(typeof nameCsrf!== "undefined" && typeof valueCsrf!=="undefined"){
					inputJson[nameCsrf] = valueCsrf;
				}
			$.ajax({
				url: ajaxurl,
				dataType: "json",
				method: "post",
				data: inputJson,
				success: function(data)
					{
						//Svuota l'elemento
						msOptList.empty();
						$.each(data,function (i,v)
						{
							var elem = $("<li>").append("<strong>"+ v.nome + "</strong><br>ISIN:" + v.isin).attr("href","javascript:;")
								elem.click(
								function() {
									var mSB = $(this).parents(".magicSearch");
									mSB.find("input").val(v.isin.toString()); // Sostituito nome con ISIN per ricerca univoca
									mSB.find("ul").hide();
									$(mSB.find(".msButton")).trigger("click");
								}
							);

							msOptList.append(elem);

						});
						msOptList.show();
					}
			});
			}
		}
		else
		{
			msOptList.hide();
		}
	});

	msfield.on("blur",function(){setTimeout(function(){msOptList.hide()},300)});

	// Declinazioni
	if (options)
	{
		if(options == "noButton") msButton.hide();
	}
}

// Plottaggio dei grafici (3 tipi)
function fesPlotGraph (conf)
{
	// GRAFICO
	var chart;

	// Legenda
	var legend = new AmCharts.AmLegend();

	switch (conf.gType) {
		// Grafico tipo seriale
		case "serial":

			// CONFIGURAZIONE DEL GRAFICO
			chart = new AmCharts.AmSerialChart();
			chart.marginTop = 10;
			chart.marginRight = 10;
			chart.marginLeft = 10;

			// Tratta l'array inserendo le descrizioni per ogni valore
			$.each(conf.gData, function(i,v)
			{
				if (typeof v.valore1 == "undefined") {
					conf.gData[i].descvalore  = v.valore + " EUR" + ((v.valoredollari)? " ("+v.valoredollari+ " " + v.valuta +  ")" : "");
					conf.gData[i].descindice  = v.indice + " EUR" + ((v.indicedollari)? " ("+v.indicedollari+" USD)" : "");
				}
				else
				{
					conf.gData[i].descvalore  = v.valore1 + " EUR";
					conf.gData[i].descindice  = v.valore2 + " EUR";
				}
			});
			// Ritratta le chiavi errate come data per il tab "grafico"
			/*
			if (conf.gIdDest == "grafico_fondo_space")
			{
				$.each(conf.gData,function(i,v){
					conf.gData[i].chiave = new Date (conf.gData[i].chiave.split(",")[0],conf.gData[i].chiave.split(",")[1],conf.gData[i].chiave.split(",")[2]);
				});
			}
			*/
			chart.dataProvider = conf.gData;

			chart.categoryField = conf.gCategory;
			chart.numberFormatter = {precision:2, decimalSeparator:',', thousandsSeparator:'.'}
			$.each(conf.gLines, function(i,v)
				{
					// Valori quotazione
					graph = new AmCharts.AmGraph();
					graph.title = v.title;
					graph.lineColor = v.lineColor;
					graph.bulletSize = 5;
					graph.lineThickness = 2;
					graph.balloonText = (v.valueField=="valore" || v.valueField=="valore1") ? "[[descvalore]]": "[[descindice]]";
					graph.valueField = v.valueField;
					if (v.dashLength) graph.dashLength = v.dashLength;
					chart.addGraph(graph);
				}
			);


			var categoryAxis = chart.categoryAxis;

			categoryAxis.autoGridCount = false;
			categoryAxis.showFirstLabel = true;
			categoryAxis.equalSpacing = true;
			categoryAxis.fontSize = 9;
			categoryAxis.color = "#999";
			categoryAxis.categoryFunction = function (v)
				{
					if($.browser.msie && conf.gIdDest == "grafico_sintesi") 
					{
						return v ? new Date(v).format("d mmm@yyyy").toString().replace("@","<br>") : '';
					}
					else
					{
						return v ? new Date(v).format("dd mmm\nyyyy") : '';
					}
					
				}
			categoryAxis.dashLength = 1;
			categoryAxis.gridAlpha = 0.3;

			// Cursore
			var chartCursor = new AmCharts.ChartCursor();
			chartCursor.cursorColor = "#aaa";
			chart.addChartCursor(chartCursor);

		break;

		// Grafico tipo torta (non utilizzato)
		case "pie":
			chart = new AmCharts.AmPieChart();
			chart.dataProvider = conf.gData;
			chart.titleField = conf.titleField;
			chart.valueField = conf.valueField;
			chart.colors = graphColors;
			chart.angle = 40;
			chart.depth3D = 20;
			chart.outlineAlpha = 50;
			chartoutlineColor = "#ffffff";
			chart.labelsEnabled = false;
		break;


		// Grafico tipo istogramma
		case "bar":

			chart = new AmCharts.AmSerialChart();
			chart.marginTop = 20;
			chart.marginRight = 40;
			chart.marginLeft = 20;
			chart.dataProvider = conf.gData;
			chart.categoryAxis["gridAlpha"] = 0;
			chart.categoryField = conf.gCategory;
			// Stabilisce l'altezza del contenitore in base alla quantit� di dati ricevuti
			$("#" + conf.gIdDest).css("height", 50 + (conf.gData.length * graphBarHeight) + "px");

			// Valori
			graph = new AmCharts.AmGraph();
			graph.type = "column";
			graph.title = conf.title;
			graph.lineAlpha = 1;
			graph.fillAlphas = 0.6;
			graph.balloonText = "[[category]]: [[value]]" + conf.dataFormat;
			graph.balloonColor = "#999";
			graph.labelText = "[[value]]" + conf.dataFormat;
			if (conf.gIdDest == "grafico_assetallocation"|| conf.gIdDest == "grafico_asset_composizione" || conf.gIdDest == "grafico_esposizione" || conf.gIdDest == "grafico_asset1" || conf.gIdDest == "grafico_asset2")
			{
				graph.fillColorsField = conf.colorfield;
			}
			else
			{
				graph.lineColor = conf.colorfield;

				graph.fillAlphas = 0.5;
			}
			graph.lineThickness = 1;
			if (conf.gIdDest == "grafico_topten")
			{

				// Rielabora i dati per ottenere l'alpha
				var minAlpha = 0.2;
				var maxAlpha = 1;
				var alphaDelta = (maxAlpha-minAlpha)/conf.gData.length;
				$.each(conf.gData, function(i,v){

					v.fillAlpha = maxAlpha;
					maxAlpha = maxAlpha - alphaDelta;

				});

				gDataDebug = conf.gData;
				graph.fillColor = ["#8ab10b"];
				graph.lineColor = ["#8ab10b"];
				graph.alphaField = "fillAlpha";
			}
			else
			{
				graph.lineColorField = conf.colorfield;
				graph.fillColorsField = conf.colorfield;
			}
			graph.valueField = conf.valueField;
			chart.rotate = true;
			chart.addGraph(graph);

		break;

	}

	if (conf.gType != "bar")
		{
		legend.valueText = (conf.gType == "pie") ? "[[value]]%" : "";
		legend.position = "top";
		legend.verticalGap = 5;
		legend.markerSize = 10;
		chart.addLegend(legend);
		}

	// Correzione valueaxis con percentuali (per tutti)
	var valueAxis = new AmCharts.ValueAxis();
    valueAxis.dashLength = 1;
	if(conf.gType != "serial")
	{
		valueAxis.labelFunction = function(v) {

			return (v!=0) ? formatNumber(v) + "%" : "0";
		};
	}
	chart.addValueAxis(valueAxis);

	// Costruzione del grafico
	chart.write(conf.gIdDest);
	chart.invalidateSize();

}


/* ICONA OPERATIVA JSON VERSIONE IBRIDA */
var fesOpeUrlNew = (!isLib) ? wrp_script_direct + "/investimenti/IconaOperativaInvest.action" : "/include/ajax/fes_iconaoperativa.php";
var fesIcoOpeOverlay = function (){

	// Raccoglie tutti i parametri tramite il link
	var opelink = $(this);

	// Se non e' presente l'overlay lo genera e predispone i 2 oggetti per titolo e HTML
	if (!$("#icoOperModal").length)
	{
		icoOpeModal = getModal({id:"icoOpeModal",titolo: "", body: $("<div>").attr("id","icoOpeModalContent")});
		icoOpeModalTitle = $("#icoOpeModalLabel");
		icoOpeModalHtml = $("#icoOpeModalContent");
	}

	// Modifica titolo ed HTML
	icoOpeModal.modal("show");
	icoOpeModalTitle.html(opelink.attr("data-fundname"));
	icoOpeModalHtml.empty().addClass("loading");
	var parameters = {
		"codicesocieta" : opelink.attr("codicesocieta"),
		"codicecomparto":opelink.attr("codicecomparto"),
		"divisa":opelink.attr("divisa"),
		"fondosicav":opelink.attr("fondosicav")
	};
	if (opelink.attr("idalert")) parameters["idalert"] = opelink.attr("idalert");
	//quando arriva da Investimenti - Situazione PAC
	if (opelink.attr("radioQuoteSitPac")) 
		parameters["radioQuoteSitPac"] = opelink.attr("radioQuoteSitPac");

	icoFrom = "";
	if($(".fondialert").length>0) icoFrom = "alert";
	if($(".fondiwatchlist").length>0) icoFrom = "wl";
	// Get dell'HTML
	$.ajax({
		dataType: "html",	//html	json
		url: fesOpeUrlNew +"?from="+ icoFrom + "&rand=" + Math.random(),
		data: parameters,
		success: function(data)
		{
			icoOpeModalHtml.empty().html(data);
			icoOpeModalHtml.removeClass("loading");
		}
	});

}
