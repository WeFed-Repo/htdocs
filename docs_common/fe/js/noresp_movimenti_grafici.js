/*** PAGINA DEI GRAFICI MOVIMENTI  ***
 *
 * @author Andrea Colanicchia - Thera
 *
 */
/*global $, AmCharts, jqAJAXCall, initPeriodo:true, initCategory:true, jqc,
	cgi_script, closeSelectRapp, createSelectRapp, createUniqTooltip, format2DecNum, getSelectedOption,
	isValidDate, librerie, moveToInteger, openPopOverLayer,
	pathLibrerie, setOverSelectRapp, setLoadingOnObject, sixMonthsAgo, today,
	unSetOverSelectRapp, unsetLoadingOnObject, updateUniqTooltip */

var movimentiFunction = (function () {
	"use strict";
	/*** VARIABILI GLOBALI ***/
	// Variabili associate a funzioni
	var doUpdateCharts,
		initBtnHandlers,initMovimenti,
		resetCharts,
		updateCharts,
		loadGrafico,
		initAll, createChartMovimenti, createChartCausali, clickSlice,
		loadDataFailure,
		rollOverSlice, rollOutSlice, preventClick,
		
		// Altre variabili
		pathMovimenti = '/movimenti',
		genContainer,
		contoEvo = false,
		accountId = null,
		coloriCausaliUsc = {
			// Blu
			'29': '#015F7F', //Cedole e dividendi
			'28': '#0073A7', //Compravendita titoli
			'27': '#0096DA', //Fondi e Sicav
			'30': '#00ADFC', //Spese ed eventi amministrativi
			'41': '#52C9FF', //Trasferimenti verso conto base (DER)
			'48': '#74D4FF', //Operatività overnight e prestito titoli
			'36': '#B8E9FF', //Canone piattaforma trading
			// Arancio
			'32': '#F67438', //Addebito carte di credito
			'33': '#F99668', //Prelievi Bancomat
			'34': '#FBC3AA', //Pagamenti Bancomat
			// Giallo
			'38': '#EEAF3E', //Mutui e prestiti
			'45': '#F2C26D', //Altri addebiti conto deposito
			// Grigio
			'40': '#929292', //Trasferimenti verso conto base (DEP)
			// Verde
			'25': '#005138', //*** Bonifici e giroconti ***
			'51': '#005138', //Bonifici Italia (imprese)
			'52': '#005138', //Bonifici esteri (imprese)
			'50': '#005138', //Giroconti (imprese)
			
			'26': '#4C8F22', //RID e utenze
			
			'24': '#00792C', //*** Pagamenti ***
			'54': '#00792C', //Mav
			'55': '#00792C', //Rav
			'56': '#00792C', //RiBa
			'46': '#00792C', //Tasse e spese varie
			'59': '#00792C', //Tributi F24
			'58': '#00792C', //Bollettini postali
			
			'42': '#76AD1C', //Trasferimenti verso conto derivati
			'39': '#509B5E', //Trasferimenti verso deposito
			'44': '#9EC05C', //Commissioni
			'43': '#A1C5A0', //Trasferimento liquidità e giroconti
			
			'23': '#B9D18A', //*** Addebito assegni ***
			'62': '#B9D18A', //Assegni (imprese)
			
			'37': '#C5DAC3', //Ricariche
			'-1': '#DAE6C1' //Altri addebiti
		},
		coloriCausaliEnt = {
			// Blu
			'6': '#015F7F', //Cedole e dividendi
			'5': '#0073A7', //Compravendita titoli
			'4': '#0096DA', //Fondi e Sicav
			'7': '#00ADFC', //Spese ed eventi amministrativi
			'17': '#52C9FF', //Trasferimenti da conto base (DER)
			'49': '#74D4FF', //Operatività overnight e prestito titoli
			'16': '#B8E9FF', //Margini 
			'18': '#DAF3FF', //Cash settlement
			'19': '#F0FBFF', //Profit/Loss
			// Giallo
			'20': '#EEAF3E', //Premi
			// Grigio
			'10': '#929292', //Trasferimenti da conto base (DEP)
			'14': '#BBBBBB', //Giro da vincolo
			// Verde
			'3': '#005138', //Bonifici e giroconti
			'12': '#005138', //Bonifici (carta conto)
			'1': '#4C8F22', //Stipendio/Pensione
			'61': '#4C8F22', //Stipendi (imprese)
			'2': '#00792C', //Versamenti
			'21': '#76AD1C', //Trasferimenti da conto derivati
			'11': '#509B5E', //Trasferimenti da deposito
			'15': '#9EC05C', //Accredito interessi
			'22': '#A1C5A0', //Trasferimento liquidità e giroconti
			'-2': '#B9D18A' //Altri accrediti
		},
		// Grafici
		layergrafici,
		firstSaldo = 0,
		lastSaldo = 0,
		scrollTopCausali = [0, 0],
		scrollTimeout = null,
		scrollInterval = 100,
		scrollLength = 5,
		causaliColors = [],
		causaliData = [],
		movimentiData = [],
		chartCausali = [],
		chartMov = null,
		chartMovDataArray = {},
		chartLevel = 10,
		meseMovDiff = 0,
		isLoadingChart = false;
	/*** |FINE| VARIABILI GLOBALI ***/


	/*** CHIAMATE AJAX GRAFICO ***/
	loadGrafico = function (type) {
		$('#layergrafici .layerboxgrafici').addClass('loading');
		if (typeof chartMovDataArray[meseMovDiff] !== 'undefined') { doUpdateCharts(chartMovDataArray[meseMovDiff]); }
		else {
			var url = '/WsMonthlyTransactionsGraph.do',
				AjaxUrl = (!librerie)? cgi_script + '/banking' + url : pathLibrerie + pathMovimenti + url.replace(/\.do(\?)?/i, '.php$1'), 
				dateObj, firstDay, lastDay, parameters;
			
			if (meseMovDiff === 0) {
				dateObj = new Date();
				lastDay = dateObj.format('dd/mm/yyyy');
				dateObj.setDate(1);
				firstDay = dateObj.format('dd/mm/yyyy');
			}
			else {
				dateObj = new Date().addMonths(meseMovDiff);
				dateObj.setDate(1);
				firstDay = dateObj.format('dd/mm/yyyy');
				dateObj.addMonths(1).setDate(0);
				lastDay = dateObj.format('dd/mm/yyyy');
			}
			
			parameters = {
				"accountId": $('#boxEsitoMovementsAccSel').val(),
				"startDate": firstDay,
				"endDate": lastDay,
				"cf": Math.random(),
				"contoEvo" : $('#idContoEvo').val()
			};
			
			if (type === 'next') { parameters.balance = lastSaldo; }
			else if (type === 'prev') { parameters.balance = firstSaldo; }
			
			jqAJAXCall('post', 'json', AjaxUrl, updateCharts, loadDataFailure, parameters);
		}
	};
	
	/*** |FINE| CHIAMATE AJAX GRAFICO ***/
/*** CREAZIONE/AGGIORNAMENTO ELEMENTI MOVIMENTI ***/
	loadDataFailure = function (msg) {
		var errorsSection1 = $('#errorsSection1'),
			errorMsgs = errorsSection1.find('#errorMessages1 li');
		if (typeof msg === 'undefined') {
			msg = 'Errore caricamento dati.';
		}
		
		errorsSection1.show();
		errorMsgs.eq(2).html(msg).show();
	};
   	/*** |FINE| CREAZIONE/AGGIORNAMENTO ELEMENTI MOVIMENTI ***/

	/*** EVENT HANDLERS GRAFICO ***/
	
	rollOverSlice = function (e, listInd) {
		layergrafici.find('.legendasp ul').eq(listInd).find('li').eq(e.dataItem.index).addClass('over');
	};

	rollOutSlice = function (e, listInd) {
		layergrafici.find('.legendasp ul').eq(listInd).find('li').eq(e.dataItem.index).removeClass('over');
	};

	clickSlice = function (e, listInd) {
		var li = layergrafici.find('.legendasp ul').eq(listInd).find('li').eq(e.dataItem.index);
		
		if (li.hasClass('selected')) { li.removeClass('selected'); }
		else {
			li.closest('ul').find('li').removeClass('selected');
			li.addClass('selected');
		}
	};
	/*** |FINE| EVENT HANDLERS GRAFICO ***/
	preventClick = function (e) {
		e.preventDefault();
		e.stopPropagation(); 
	};
	/*** |FINE| UTILITY FUNCTIONS MOVIMENTI ***/

	/*** CREAZIONE/AGGIORNAMENTO - Grafici ***/
	createChartCausali = function (idChartDiv) {
		var listInd, balloon;
		
		
		if (typeof chartCausali[idChartDiv] !== 'undefined') {
			$(jqc(idChartDiv)).empty();
			chartCausali[idChartDiv] = null;
		}
		
		// Grafico a torta
		chartCausali[idChartDiv] = new AmCharts.AmPieChart();
		chartCausali[idChartDiv].dataProvider = causaliData;
		chartCausali[idChartDiv].numberFormatter = {precision:2, decimalSeparator:',', thousandsSeparator:'.'};
		chartCausali[idChartDiv].percentFormatter = {precision:1, decimalSeparator:',', thousandsSeparator:'.'};
		chartCausali[idChartDiv].colors = causaliColors;
		chartCausali[idChartDiv].titleField = "title";
		chartCausali[idChartDiv].valueField = "value";
		chartCausali[idChartDiv].balloonText = "[[title]] EUR\n([[percents]]%)";
		chartCausali[idChartDiv].outlineThickness = 0;
		chartCausali[idChartDiv].labelsEnabled = false;
		chartCausali[idChartDiv].startDuration = 0;
		chartCausali[idChartDiv].angle = 15;
		chartCausali[idChartDiv].depth3D = 7;
		//chartCausali[idChartDiv].radius = 57;
		chartCausali[idChartDiv].innerRadius = 12;
		chartCausali[idChartDiv].marginTop = 0;
		chartCausali[idChartDiv].marginLeft = -2;
		chartCausali[idChartDiv].width = 145;
		chartCausali[idChartDiv].height = 120;
		chartCausali[idChartDiv].pullOutOnlyOne = true;
		chartCausali[idChartDiv].pullOutRadius = 8;
		chartCausali[idChartDiv].pullOutDuration = 1;
		
		// Event handlers
		listInd = (idChartDiv === 'graficosp1')? 0: 1;	
		
		chartCausali[idChartDiv].addListener('clickSlice', function (e) { clickSlice(e, listInd); });
		chartCausali[idChartDiv].addListener('rollOutSlice', function (e) { rollOutSlice(e, listInd); });
		chartCausali[idChartDiv].addListener('rollOverSlice', function (e) { rollOverSlice(e, listInd); });
		
		// Tooltip
		balloon = chartCausali[idChartDiv].balloon;
		balloon.fillColor = '#000000';
		balloon.color = '#ffffff';
		balloon.fontSize = 9;
		balloon.textAlign = 'middle';
		balloon.borderThickness = 0;
		balloon.adjustBorderColor = true;
		balloon.pointerWidth = 20;
		//balloon.horizontalPadding = 2;
		//balloon.verticalPadding = 2;
		balloon.cornerRadius = 0;

		// WRITE
		chartCausali[idChartDiv].write(idChartDiv);
	};

	createChartMovimenti = function () {
		var categoryAxis, valueAxis, chartCursor, graph;
		
		if (chartMov !== null) {
			$('#chartmov').empty();
			chartMov = null;
		}
		
		// SERIAL CHART    
		chartMov = new AmCharts.AmSerialChart();
		chartMov.numberFormatter = {precision:2, decimalSeparator:',', thousandsSeparator:'.'};
		chartMov.percentFormatter = {precision:1, decimalSeparator:',', thousandsSeparator:'.'};
		chartMov.pathToImages = "../amcharts/images/";
		chartMov.zoomOutButton = {
			backgroundAlpha: 0
		};
		chartMov.dataProvider = movimentiData;
		chartMov.categoryField = "date";
		chartMov.width = 700;
		chartMov.height = 140;

		// AXES
		// category
		categoryAxis = chartMov.categoryAxis;
		categoryAxis.dashLength = 1;
		categoryAxis.startOnAxis = false;
		categoryAxis.autoGridCount = false;
		categoryAxis.gridCount = 31;
		categoryAxis.gridAlpha = 0.15;
		categoryAxis.gridPosition = 'start';
		categoryAxis.axisAlpha = 0;

		// value                
		valueAxis = new AmCharts.ValueAxis();
		valueAxis.axisAlpha = 0;
		valueAxis.autoGridCount = false;
		valueAxis.gridCount = 4;
		valueAxis.gridAlpha = 0.15;
		valueAxis.maximum = chartLevel;
		valueAxis.minimum = (-1 * chartLevel);
		//valueAxis.unit = ' €';
		//valueAxis.position = 'right';
		valueAxis.stackType = "regular";
		valueAxis.labelsEnabled = true;
		chartMov.addValueAxis(valueAxis);

		// CURSOR
		chartCursor = new AmCharts.ChartCursor();
		chartCursor.cursorPosition = "mouse";
		chartCursor.cursorColor = "#666666";
		chartMov.addChartCursor(chartCursor);

		// GRAPH
		graph = new AmCharts.AmGraph();
		graph.type = "column";
		graph.descriptionField = "entTitle";
		graph.valueField = "ent";
		graph.colorField = "color";
		graph.balloonText = "Num. entrate: [[description]] EUR";
		graph.fillAlphas = 1;
		graph.fillColors = "#1ca21c";
		graph.lineAlpha = 0;
		graph.title = "Entrate";
		chartMov.addGraph(graph);
		
		// GRAPH
		graph = new AmCharts.AmGraph();
		graph.type = "column";
		graph.descriptionField = "uscTitle";
		graph.valueField = "usc";
		graph.colorField = "color2";
		graph.balloonText = "Num. uscite: [[description]] EUR";
		graph.fillAlphas = 1;
		graph.fillColors = "#dd291e";
		graph.lineAlpha = 0;
		graph.lineThickness = 0;
		graph.title = "Uscite";
		chartMov.addGraph(graph);
		
		// GRAPH
		graph = new AmCharts.AmGraph();
		graph.type = "smoothedLine";
		graph.descriptionField = "saldoTitle";
		graph.valueField = "saldo";
		graph.balloonText = "Saldo Contabile: [[description]] EUR";
		graph.bullet = "round";
		graph.bulletColor = "#FFFFFF";
		graph.bulletBorderColor = "#27d3ed";
		graph.bulletBorderThickness = 1;
		graph.bulletSize = 6;
		graph.title = "Price";
		graph.lineThickness = 1;
		graph.lineColor = "#27d3ed";
		chartMov.addGraph(graph);

		// WRITE
		chartMov.write("chartmov");
	};

	updateCharts = function (data) {		
		chartMovDataArray[meseMovDiff] = data;
		doUpdateCharts(data);
	};

	doUpdateCharts = function (data) {
		var boxListeCausali = layergrafici.find('.legendasp>div'),
			listeCausali = layergrafici.find('.legendasp ul'),
			graficospkoArr = layergrafici.find('.graficospko').hide(),
			slidelayerleft = layergrafici.find('.slidelayerleft:first'),
			slidelayerright = layergrafici.find('.slidelayerright:first'),
			slidedownArr = layergrafici.find('.slidedown').css({ visibility: 'hidden' }),
			mdlcenter = layergrafici.find('.mdlcenter:first'),
			todayPrevMonth = new Date().addMonths(meseMovDiff).addMonths(-1),
			todayNextMonth = new Date().addMonths(meseMovDiff).addMonths(1),
			datePrefix = new Date().addMonths(meseMovDiff).format('yyyymm'),
			i, totEnt = 0, totUsc = 0, totDiff = 0, totAddedPerc = 0, dataTot = 0, causaliUscCodes,
			limit1perc, limit2perc, percUnitTorta = 1, lastDayThisMonth, causaliEnt, maxValueEnt, causaliEntCodes, causaliEntTmp, causaliInd,
			hashSaldo, hashEnt, hashUsc, primoSaldo, maxValue, unoPerc, causaliUsc, causaliUscTmp, powOfTenBound, saldo, saldo100, range = [];
		
		// Resetto lo scroll delle causali
		scrollTopCausali = [0, 0];
		$('.legendasp').prop('scrollTop', 0);
		layergrafici.find('.slideup').css({ visibility: 'hidden' });
		
		// Frecce mese precedente e successivo
		if (meseMovDiff === -5) { slidelayerleft.hide(); }
		else { slidelayerleft.attr('title', 'Vai al mese di ' + todayPrevMonth.format('mmmm yyyy').toLowerCase()); }
		
		if (meseMovDiff === 0) { slidelayerright.hide(); }
		else { slidelayerright.attr('title', 'Vai al mese di ' + todayNextMonth.format('mmmm yyyy').toLowerCase()); }
		
		todayNextMonth.setDate(0);
		
		lastDayThisMonth = todayNextMonth.getDate();
		
		layergrafici.find('.layerboxgraficitop span:first').html(new Date().addMonths(meseMovDiff).format('mmmm yyyy').toUpperCase());
		listeCausali.eq(0).empty();
		causaliData.length = 0;
		causaliColors.length = 0;
		totAddedPerc = 0;
		dataTot = 0;
		
		// *** Grafico torta entrate ***
		if (data.movMese.catEnt.length > 0) {
			causaliEnt = {};
			maxValueEnt = 0;
			
			$.each(data.movMese.catEnt, function (index, item) {
				dataTot += item.valore;
				maxValueEnt = (maxValueEnt < item.valore)? item.valore : maxValueEnt;
				causaliEnt[coloriCausaliEnt[item.id]] = {"value": item.valore, "label": item.label, "fixValue": item.valore};
			});
			
			limit1perc = parseInt((dataTot * percUnitTorta)/ 100, 10);
			limit2perc = parseInt(limit1perc * 2, 10);
			
			// Controllo se ci sono fette sotto l'1%, e le aumento fino all'1%,
			// memorizzando il totale degli aumenti
			$.each(causaliEnt, function (key, value) {
				if (value.fixValue < limit1perc) {
					totAddedPerc += (limit1perc - value.fixValue);
					causaliEnt[key].fixValue = limit1perc;
				}
			});
			
			if (totAddedPerc > 0) {
				// Diminuisco le fette sopra al 2%, in proporzione alla loro grandezza
				$.each(causaliEnt, function (key, value) {
					if (value.fixValue >= limit2perc) { causaliEnt[key].fixValue -= (totAddedPerc * value.fixValue) / dataTot; }
				});
			}
			causaliEntCodes = [];
			$.each(coloriCausaliEnt, function (key, val) { causaliEntCodes.push(val); });
			causaliEntCodes.sort();
			causaliEntTmp = jQuery.extend(true, {}, causaliEnt);
			causaliEnt = {};
			$.each(coloriCausaliEnt, function (index, item) {
				if (typeof causaliEntTmp[item] !== 'undefined') { causaliEnt[item] = causaliEntTmp[item]; }
			});
			causaliInd = -1;
			$.each(causaliEnt, function (key, value) {
				causaliInd += 1;
				var label = (key === '#B9D18A')? 'Altri accrediti' : value.label,
					valueStr = format2DecNum(moveToInteger(value.value)),
					causaliIndTmp = causaliInd + 0;
				causaliData.push({"label": value.label, "value": value.fixValue, "title": valueStr});
				causaliColors.push(key);
				
				listeCausali.eq(0).append($('<li>')
					.mouseover(function () {
						chartCausali.graficosp1.rollOverSlice(causaliIndTmp);
					})
					.mouseout(function () {
						chartCausali.graficosp1.rollOutSlice(causaliIndTmp);
					})
					.click(function (e) {
						preventClick(e);
						chartCausali.graficosp1.clickSlice(causaliIndTmp);
					})
					.append($('<img>', {src: "/wscmn/img/ret/ico1gr_legendamov_" + key.replace('#', '') + ".gif", alt: ""}))
					.append($('<span>', {"class": "label"}).html(label + '<br/><span>' + valueStr + '&nbsp;&euro;</span>'))
				)
				.append($('<br>', {"class": "clear"}));
			});
		}
		
		if (boxListeCausali.eq(0).height() > 110) { slidedownArr.eq(0).css({ visibility: 'visible' }); }
		
		// Legenda causali entrate
		if (causaliData.length > 0) {
			graficospkoArr.eq(0).hide();
			$('#graficosp1').css({visibility: 'visible'});
			createChartCausali('graficosp1');
		} else {
			graficospkoArr.eq(0).show();
			$('#graficosp1').css({visibility: 'hidden'});
		}

		listeCausali.eq(1).empty();
		causaliData.length = 0;
		causaliColors.length = 0;
		totAddedPerc = 0;
		dataTot = 0;

		// *** Grafico torta uscite ***
		if (data.movMese.catUsc.length > 0) {
			causaliUsc = {};
			$.each(data.movMese.catUsc, function (index, item) {
				var value = Math.abs(item.valore);
				dataTot += value;
				causaliUsc[coloriCausaliUsc[item.id]] = {"value": value, "label": item.label, "fixValue": value};
			});
			
			limit1perc = parseInt((dataTot * percUnitTorta)/ 100, 10);
			limit2perc = parseInt(limit1perc * 2, 10);
			
			// Controllo se ci sono fette sotto l'1%, e le aumento fino all'1%,
			// memorizzando il totale degli aumenti
			$.each(causaliUsc, function (key, value) {
				if (value.fixValue < limit1perc) {
					totAddedPerc += (limit1perc - value.fixValue);
					causaliUsc[key].fixValue = limit1perc;
				}
			});
			
			if (totAddedPerc > 0) {
				// Diminuisco le fette sopra al 2%, in proporzione alla loro grandezza
				$.each(causaliUsc, function (key, value) {
					if (value.fixValue >= limit2perc) { causaliUsc[key].fixValue -= (totAddedPerc * value.fixValue) / dataTot; }
				});
			}
			causaliUscCodes = [];
			$.each(coloriCausaliUsc, function (key, val) { causaliUscCodes.push(val); });
			causaliUscCodes.sort();
			causaliUscTmp = jQuery.extend(true, {}, causaliUsc);
			causaliUsc = {};
			$.each(coloriCausaliUsc, function (index, item) {
				if (typeof causaliUscTmp[item] !== 'undefined') { causaliUsc[item] = causaliUscTmp[item]; }
			});
			causaliInd = -1;
			$.each(causaliUsc, function (key, value) {
				causaliInd += 1;
				var label = (key === '#005138')? 'Bonifici e giroconti' : (key === '#00792C')? 'Pagamenti' : (key === '#DAE6C1')? 'Altri addebiti' : value.label,
					valueStr = format2DecNum(moveToInteger(-1 * value.value)),
					causaliIndTmp = causaliInd + 0;
				causaliData.push({"label": label, "value": value.fixValue, "title": valueStr});
				causaliColors.push(key);
				
				listeCausali.eq(1).append($('<li>')
					.mouseover(function () {
						chartCausali.graficosp2.rollOverSlice(causaliIndTmp);
					})
					.mouseout(function () {
						chartCausali.graficosp2.rollOutSlice(causaliIndTmp);
					})
					.click(function (e) {
						preventClick(e);
						chartCausali.graficosp2.clickSlice(causaliIndTmp);
					})
					.append($('<img>', {src: "/wscmn/img/ret/ico1gr_legendamov_" + key.replace('#', '') + ".gif", alt: ""}))
					.append($('<span>', {"class": "label"}).html(label + '<br/><span>' + valueStr + '&nbsp;&euro;</span>'))
				)
				.append($('<br>', {"class": "clear"}));
			});
		}
		
		if (boxListeCausali.eq(1).height() > 110) { slidedownArr.eq(1).css({ visibility: 'visible' }); }
		
		// Legenda causali uscite
		if (causaliData.length > 0) {
			graficospkoArr.eq(1).hide();
			$('#graficosp2').css({visibility: 'visible'});
			createChartCausali("graficosp2");
		} else {
			graficospkoArr.eq(1).show();
			$('#graficosp2').css({visibility: 'hidden'});
		}
		
		firstSaldo = data.saldoIniziale;
		lastSaldo = data.saldoFinale;
		
		hashSaldo = data.movMese.saldo;
		hashEnt = data.movMese.listaEnt;
		hashUsc = data.movMese.listaUsc;
		primoSaldo = false;
		maxValue = firstSaldo;
		unoPerc = 0;
		movimentiData.length = 0;
		range.length = 0;
		// Calcolo il valore massimo tra entrate, uscite e saldo
		for (i = 1; i <= lastDayThisMonth; ++i) { range.push(i); }
		$.each(range, function (index, value) {
			var giorno = datePrefix + ((value.toString().length > 1)? value : '0' + value),
				ent = hashEnt[giorno], usc = hashUsc[giorno], saldo = hashSaldo[giorno], absUsc;
			if (typeof ent !== 'undefined') {
				if (maxValue < ent.tot) { maxValue = ent.tot; }
				
				totEnt += moveToInteger(ent.tot);
				totDiff += moveToInteger(ent.tot);
			}
			
			if (typeof usc !== 'undefined') {
				absUsc = Math.abs(usc.tot);
				
				if (maxValue < absUsc) { maxValue = absUsc; }
				
				totUsc += moveToInteger(usc.tot);
				totDiff += moveToInteger(usc.tot);
			}
			
			if (typeof saldo !== 'undefined') {
				if (maxValue < saldo) { maxValue = saldo; }
			}
		});
		
		// Totali entrate e uscite
		layergrafici.find('.mdlleft .posi:first').html(format2DecNum(totEnt));
		layergrafici.find('.mdlright .nega:first').html(format2DecNum(totUsc));
		
		// Frecce scorrimento liste causali
		if (totDiff === 0) {
			mdlcenter.removeClass('up').removeClass('down');
			mdlcenter.find('span').hide();
		} else {		
			if (totDiff > 0) { mdlcenter.removeClass('down').addClass('up'); }
			else { mdlcenter.removeClass('up').addClass('down'); }
			
			mdlcenter.find('.differenza:first').html(format2DecNum(totDiff));
			mdlcenter.find('span').show();
		}
		
		// *** Grafico movimenti ***
		powOfTenBound = Math.pow(10, (Math.ceil(Math.log(maxValue) / Math.LN10) - 1));
		saldo = lastSaldo;
		saldo100 = moveToInteger(lastSaldo);
		chartLevel = Math.ceil(maxValue / powOfTenBound) * powOfTenBound;
		unoPerc = parseFloat((maxValue / 20).toFixed(2));
		range.length = 0;
		for (i = 1; i <= 31; ++i) { range.push(i); }
		$.each(range.reverse(), function (index, value) {
			var giorno = datePrefix + ((value.toString().length > 1)? value : '0' + value), movObj = {date: value}, ent, usc;
			
			if (typeof hashSaldo[giorno] !== 'undefined') {
				saldo = hashSaldo[giorno];
				saldo100 = moveToInteger(saldo);
			}
			
			movObj.saldo = (saldo > unoPerc)? saldo : unoPerc;
			movObj.saldoTitle = format2DecNum(moveToInteger(saldo));
			
			if (lastDayThisMonth >= value) {
				if (typeof hashEnt[giorno] !== 'undefined') {
					ent = hashEnt[giorno];
					movObj.ent = (ent.tot > unoPerc)? ent.tot : unoPerc;
					movObj.entTitle = ent.num + ' - Tot. entrate: ' + format2DecNum(moveToInteger(ent.tot));
				}
				
				if (typeof hashUsc[giorno] !== 'undefined') {
					usc = hashUsc[giorno];
					movObj.usc = (usc.tot < -unoPerc)? usc.tot : -unoPerc;
					movObj.uscTitle = usc.num + ' - Tot. uscite: ' + format2DecNum(moveToInteger(usc.tot));
				}
			}
			
			movimentiData.push(movObj);
		});
		
		movimentiData.reverse();
		
		createChartMovimenti();
		
		$('#layergrafici .layerboxgrafici').removeClass('loading');
		isLoadingChart = false;
	};

	function resetresetCharts(refreshCache) {
		if (refreshCache) {
			$.each(chartMovDataArray, function (key) { delete chartMovDataArray[key]; });
		}
		
		meseMovDiff = 0;
		layergrafici.find('.slidelayerleft:first').show();
		layergrafici.find('.slidelayerright:first').hide();
	}
	resetCharts = function (refreshCache) {
		if (refreshCache) {
			$.each(chartMovDataArray, function (key) { delete chartMovDataArray[key]; });
		}
		
		meseMovDiff = 0;
		layergrafici.find('.slidelayerleft:first').show();
		layergrafici.find('.slidelayerright:first').hide();
	};
	/*** |FINE| CREAZIONE/AGGIORNAMENTO - Grafici ***/

	/*** INIZIALIZZAZIONE MOVIMENTI ***/
	initAll = function () {
		genContainer = $('#contenuti');
		layergrafici = $('#layergrafici');
		if (!genContainer) { genContainer = $('#content'); }
		contoEvo = $('#idContoEvo').val();
		accountId = $('#boxEsitoMovementsAccSel').val();
		// Cancello elementi da completare
		initMovimenti();
	};

	initMovimenti = function () {
		initBtnHandlers();
	};
	

	initBtnHandlers = function () {
		var linkGrafMov = $('#linkGrafMov');
		if (linkGrafMov.length) {
			linkGrafMov.click(function (e) {
				preventClick(e);
				if (isLoadingChart) { return; }
				isLoadingChart = true;
				resetCharts(false);
				openPopOverLayer('layergrafici', 'floating', 0);
				loadGrafico('start');
			});
		}
		layergrafici.find('.slidelayerleft:first').click(function (e) {
			preventClick(e);
			meseMovDiff -= 1;
			
			if (isLoadingChart) { return; }
			if (meseMovDiff === -5) { $(this).hide(); }
			
			layergrafici.find('.slidelayerright:first').show();
			isLoadingChart = true;
			loadGrafico('prev');
		});
		layergrafici.find('.slidelayerright:first').click(function (e) {
			preventClick(e);
			meseMovDiff += 1;
			
			if (isLoadingChart) { return; }
			if (meseMovDiff === 0) { $(this).hide(); }
			
			layergrafici.find('.slidelayerleft:first').show();
			isLoadingChart = true;
			loadGrafico('next');
		});
		layergrafici.find('.slideup').each(function (index, item) {
			item = $(item);
			item.mouseover(function (e) {
				var el = $(e.target),
					legendaspCont = el.closest('.legendaspCont'),
					legendaspOuter = legendaspCont.find('.legendasp:first'),
					scrollCausali;
				
				if (scrollTopCausali[index] < 0) {
					scrollTopCausali[index] = 0;
					el.css({ visibility: 'hidden' });
					return;
				}
				else {
					scrollCausali = function () {
						scrollTopCausali[index] -= scrollLength;
						
						if (scrollTopCausali[index] < 0) { scrollTopCausali[index] = 0; }
						
						legendaspOuter[0].scrollTop = scrollTopCausali[index];
						layergrafici.find('.slidedown').eq(index).css({ visibility: 'visible' });	
						scrollTimeout = null;
						
						if (scrollTopCausali[index] === 0) { el.css({ visibility: 'hidden' }); }
						else { scrollTimeout = setTimeout(scrollCausali, scrollInterval); }
					};
					
					if (scrollTimeout === null) { scrollTimeout = setTimeout(scrollCausali, scrollInterval); }
				}
			}).mouseout(function () {
				if (scrollTimeout !== null) {
					clearTimeout(scrollTimeout);
					scrollTimeout = null;
				}
			});
		});
		layergrafici.find('.slidedown').each(function (index, item) {
			item = $(item);
			item.mouseover(function (e) {
				var el = $(e.target),
					legendaspCont = el.closest('.legendaspCont'),
					legendaspOuter = legendaspCont.find('.legendasp:first'),
					diff = legendaspOuter[0].scrollHeight - legendaspOuter[0].offsetHeight,
					scrollCausali = null;
				
				if (scrollTopCausali[index] > diff) {
					scrollTopCausali[index] = diff;
					el.css({visibility: 'hidden'});
					return;
				}
				else {
					scrollCausali = function () {
						scrollTopCausali[index] += scrollLength;
						
						if (scrollTopCausali[index] > diff) { scrollTopCausali[index] = diff; }
						
						legendaspOuter[0].scrollTop = scrollTopCausali[index];
						layergrafici.find('.slideup').eq(index).css({ visibility: 'visible' });
						scrollTimeout = null;
						
						if (scrollTopCausali[index] === diff) { el.css({visibility: 'hidden'}); }
						else { scrollTimeout = setTimeout(scrollCausali, scrollInterval); }
					};
					
					if (scrollTimeout === null) { scrollTimeout = setTimeout(scrollCausali, scrollInterval); }
				}
			}).mouseout(function () {
				if (scrollTimeout !== null) {
					clearTimeout(scrollTimeout);
					scrollTimeout = null;
				}
			});
		});
	};


	/*** |FINE| INIZIALIZZAZIONE MOVIMENTI ***/
	/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
	
	return {
		"initAll": initAll,
		"resetCharts": resetCharts
	};
}());

$(function () {
	movimentiFunction.initAll();
	$('#boxEsitoMovementsAccSel').bind('change', function(){
		movimentiFunction.resetCharts(true);
	})
});