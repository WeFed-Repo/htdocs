$(document)
		.ready(
				function() {

					// $('.calendarioTOL').datepicker({
					// dateFormat: 'dd-mm-yy',
					// minDate: '-2Y',
					// maxDate: '+5D'
					// });

					$('.calendarioTOL')
							.datepicker(
									{
										minDate : '-2Y',
										maxDate : '+5D',
										buttonImage : '<c:out value="${resultBean.urlImages}"/>nGrafica/calendar.png',

									});

				});

function getIdContentInterno(el) {
	return $(el).parents('.contentInterno').attr('id');
}
function getSrcContentInterno(idDiv) {
	var src = $('#' + idDiv).attr('src');
	if (src != undefined)
		return src.replace(' ', '%20');
	else
		return null;
}

function openPopUp(url, pagina, width, height, full, scroll) {
	if (typeof url == 'undefined')
		return false;
	if (typeof pagina == 'undefined')
		pagina = '';
	if (typeof width == 'undefined')
		width = 720;
	if (typeof height == 'undefined')
		height = 450;
	if (typeof full == 'undefined')
		full = 0;
	if (typeof scroll == 'undefined')
		scroll = 1;
	// if (url.indexOf('datimercato')>=0) scroll=1;
	var params = 'toolbar=' + full + ',status=' + full + ',menubar=' + full
			+ ',scrollbars=' + scroll + ',location=' + full
			+ ',resizable=1,width=' + width + ',height=' + height;
	var winpopup = null;
	if (url.indexOf(getPathContext()) != 0 && url.indexOf("http") == -1
			&& url.indexOf("/HT") == -1
			&& url.indexOf("/XPLOGONMANAGER/") == -1)
		url = url;
	try {
		winpopup = window.open(url, pagina, params);
	} catch (err) {
	}
	if (winpopup == null) {
		var strMsg = '';
		strMsg = strMsg + 'ATTENZIONE.\n';
		strMsg = strMsg
				+ 'L\'apertura di un popup informativo è stata bloccata dal sistema.\n';
		strMsg = strMsg
				+ 'Per una completa e corretta navigazione, si consiglia di aggiungere\n';
		strMsg = strMsg
				+ 'questo indirizzo ai siti abilitati all\'apertura di finestre popup.\n';
		alert(strMsg);
	} else {
		try {
			winpopup.window.focus();
		} catch (err) {
		}
	}
}

function openElencoTitoliIndice(page) {
	var url = page;
	if (page.indexOf(getPathContext()) == -1 && page.indexOf("http") == -1)
		url = getPathContext() + url;
	url = url + '?';
	for ( var i = 1; i < arguments.length; i += 2) {
		if (arguments[i] === 'mercato'
				&& !('MTA|XET|PAR|AMS|NASDAQ'.indexOf(arguments[i + 1]) > -1)) {
			alert("Per questo strumento non è disponibile la lista titoli");
			return;
		}
		url += '&'
		url += arguments[i] + '='
		url += escape(unescape(arguments[i + 1]));
	}
	document.location.href = url;
}

function openDettaglioTitolo(page) {

	var tipoConvertito = '';
	var isin='';
	var codMercatoInfo='';
    var tipoConvertito='';
     
	for ( var i = 1; i < arguments.length; i += 2) {
		if (arguments[i] === 'tipoConvertito') {
			tipoConvertito = arguments[i + 1];	
		}
		else if (arguments[i] === 'isin') {
			isin = arguments[i + 1];	
		}
		else if (arguments[i] === 'codMercatoInfo') {
			codMercatoInfo = arguments[i + 1];
		}
	}
	var vect = {
		tipoConvertito : tipoConvertito,
		isin : isin,
		codMercatoInfo:codMercatoInfo
	};
	

	if (vect['tipoConvertito'] == '0' || !isAutorizzatoTol(vect)) {
		alert('Dettaglio non disponibile per questo strumento');
		return;
	}

	if (isFondo(vect)) {
		goToPage('/investimenti/fondiDettaglioFondo.do', 'codiceIsin',
				arguments[2]);
	} else {
		var url = page;
		if (page.indexOf(getPathContext()) == -1 && page.indexOf("http") == -1)
			url = getPathContext() + url;
		url = url + '?';
		for ( var i = 1; i < arguments.length; i += 2) {
			// if(arguments[i]==='codMercatoInfo' && arguments[i+1] === 'ETF'){
			// arguments[i+1] = 'MTA'
			// }
			if (arguments[i] === 'isin'
					&& (arguments[i + 1] === '' || arguments[i + 1] === undefined)) {
				alert("Per questo titolo non è disponibile il dettaglio");
				return;
			}
			url += '&'
			url += arguments[i] + '='
			url += escape(unescape(arguments[i + 1]));
		}
		document.location.href = url;
	}
	return url;
}


function openDetTitRicerca(page) {

	var tipoConvertito = '';
	var isin='';
	var codMercatoInfo='';
    var tipoConvertito='';
     
	for ( var i = 1; i < arguments.length; i += 2) {
		if (arguments[i] === 'tipoConvertito') {
			tipoConvertito = arguments[i + 1];	
		}
		else if (arguments[i] === 'isin') {
			isin = arguments[i + 1];	
		}
		else if (arguments[i] === 'codMercatoInfo') {
			codMercatoInfo = arguments[i + 1];
		}
	}
	var vect = {
		tipoConvertito : tipoConvertito,
		isin : isin,
		codMercatoInfo:codMercatoInfo
	};
	

	if (vect['tipoConvertito'] == '0' || !isAutorizzatoTol(vect)) {
		alert('Dettaglio non disponibile per questo strumento');
		return;
	}

	if (isFondo(vect)) {
		goToPage('/investimenti/fondiDettaglioFondo.do', 'codiceIsin',
				arguments[2]);
	} else {
		var url = page;
		if (page.indexOf(getPathContext()) == -1 && page.indexOf("http") == -1)
			url = getPathContext() + url;
		url = url + '?';
		for ( var i = 1; i < arguments.length; i += 2) {
			// if(arguments[i]==='codMercatoInfo' && arguments[i+1] === 'ETF'){
			// arguments[i+1] = 'MTA'
			// }
			if (arguments[i] === 'isin'
					&& (arguments[i + 1] === '' || arguments[i + 1] === undefined)) {
				alert("Per questo titolo non è disponibile il dettaglio");
				return;
			}
			url += '&'
			url += arguments[i] + '='
			url += escape(unescape(arguments[i + 1]));
		}
		if(window.location.pathname=="/WEBHT/investimenti/ricercaTitoliRapidaForm.do"){
			url+='&isRicerca=S'
		}
		if(window.location.pathname=="/template/popup_investimenti_bookOrdina_cerca.php"){
			url+='&isRicerca=R'
		}
		if(window.location.pathname=="/WEBHT/investimenti/titoliIndiceForm.do"){
			url+='&isRicerca=I'
		}
		document.location.href = url;
	}
}


function parentGoToPage(page) {
	var url = page;
	if (page.indexOf(getPathContext()) == -1 && page.indexOf("http") == -1)
		url = getPathContext() + url;
	url = url + '?';
	for ( var i = 1; i < arguments.length; i += 2) {
		url += '&'
		url += arguments[i] + '='
		url += escape(unescape(arguments[i + 1]));
	}
	opener.opener.document.location.href = url;
}

function Chiudi() {
	self.close();
}

function attestazioneOrdine(numOrdine) {
	var url = document.location.pathname + '?attestazione=S&numeroOrdine='
			+ numOrdine;
	openPopUp(url, 'AttestazioneOrdine', 600, 600, 0, 1);
}

function doSettaLimitePush(field) {
	var price = $('[data-grid="bookTab"][data-field="' + field + '"]').text();

	var obj = window.parent.document.getElementById('parPrezzo');
	if (obj != null) {
		obj.selectedIndex = 0;
		window.parent.document.getElementById('prezzoLimite').value = ''
				+ price;
	}
}

function doSettaLimite(price) {
	var obj = window.parent.document.getElementById('parPrezzo');
	if (obj != null) {
		obj.selectedIndex = 0;
		// window.parent.document.getElementById('limitato').style.display='';
		window.parent.document.getElementById('prezzoLimite').value = ''
				+ price;
	}
}

function Stampa(x, el) {
	window.print();
}

function Stampa_tuoProtafoglio(){
	if (typeof isStampaInvestimenti == 'function') { 
			window.print();
	}else{
	window.location.href = getPathContext()+"/investimenti/titoliDossierStampa.do";
}
}

function isFondo(rowData) {
	if (rowData['tipoConvertito'] === undefined) { // se non esiste il tipo
													// allora siamo sulle pagine
													// dei fondi
		return true;
	} else if (rowData['tipoConvertito'] == 3) { // se il tipo è 3 siamo sul
													// portafoglio titoli del
													// tol e si è cliccato su un
													// fondo GESTIELLE
		return true;
	} else {
		return false;
	}

}

function isOrdineFondoAnnullabile(rowData) {
	if (rowData['ordineAnnullabile']=="true") {
		return true;
	}
	return false;
}

function isFondoSO(rowData) {
	if (isFondo(rowData)) {
		if (rowData['collocabile']=="true") {
			return true;
		}
	}
	return false;
}
function isFondoSW(rowData) {
	try {
		if (isDossierInformativo()) {
			// Se il dossier è informativo non deve operare sui fondi (Viene
			// gestito da isAutorizzatoTol)
			return false;
		}
	} catch (x) {
	}
	;
	if (isFondo(rowData)) {
		if (rowData['switchable']=="true") {
			return true;
		}
	}
	return false;
}

// funzione da chiamare se si vuole disabilitare
// un bottone del tabellatore
function disableButton() {
	return false;
}

function hidePopUpFunction() {
	return true;
}

function isAutorizzatoTol(rowData) {
	return (getLineaTol() != null && getLineaTol() != "" && !isFondo(rowData) && isTitoloOperabile(rowData));
}

function isTitoloOperabile(rowData) {
	var dossInfo = false;
	try {
		dossInfo = isDossierInformativo();
	} catch (x) {
	}
	;
	return !(dossInfo || (rowData['isin'] == undefined || rowData['isin'] == ""
			|| rowData['codMercatoInfo'] == undefined || rowData['codMercatoInfo'] == ""));
}

function isTitolo(rowData) {
	return !isFondo(rowData);
}


function openAjaxDialog(page) {

	var dialogArgs = {  position: { at: "center top"}};
	var dialogName = "";
	var url = page + '?';
	for ( var i = 1; i < arguments.length; i += 2) {
		if (arguments[i] === 'width') {
			dialogArgs.width = arguments[i + 1];
		} else if (arguments[i] === 'altezza') {
			dialogArgs.height = arguments[i + 1];
		} else if (arguments[i] === 'title') {
			dialogArgs.title = arguments[i + 1];
		} else if (arguments[i] === 'dialogName') {
			dialogName = arguments[i + 1];
			
		} else {
			url += '&'
			url += arguments[i] + '='
			url += escape(unescape(arguments[i + 1]));
		}
	}

	$().ajaxDialog(dialogName, url, dialogArgs, true);
	return false;
}

function closeAjaxDialog(buttonOrDialogId, reload) {
	if ($(buttonOrDialogId).is(':button')) {
		$(buttonOrDialogId).parents('.ui-dialog-content').dialog('close');
	} else {
		$('#' + buttonOrDialogId).dialog('close');
	}
	if (reload === undefined || reload === true) {
		window.location.reload();
	}
}

function fullSelect(id) {
	$('#' + id + '').val("");
	$('#' + id + '').focus();
	$('#' + id + '').select();
}

function openTitoloPopupDaCompravendi(isin, codMercatoInfo) {
	var d = new Date();
	var time = d.getTime();

	openPopUp(getPathContext() + '/investimenti/bookOrdina.do?isin=' + isin
			+ '&codMercatoInfo=' + codMercatoInfo + '', 'popup' + time + '',
			'400', '740', '0', 'yes');
}

function openTitoloPopupDaCompravendi2(isin, codMercatoInfo) {
	var d = new Date();
	var time = d.getTime();

	openPopUp(getPathContext() + '/investimenti/bookOrdina2.do?isin=' + isin
			+ '&codMercatoInfo=' + codMercatoInfo + '', 'popup' + time + '',
			'400', '740', '0', 'yes');
}

function openTitoloPopupSimulato() {
	if (confirm("Attenzione si sta abbandonando la sezione di simulazione per accedere alla pagina compra/vendita")) {
		var d = new Date();
		var time = d.getTime();
		var isin = '';
		var codMercatoInfo = '';

		for ( var i = 0; i < arguments.length; i += 2) {
			if (arguments[i] === 'isin') {
				isin = arguments[i + 1];
			} else if (arguments[i] === 'codMercatoInfo') {
				codMercatoInfo = arguments[i + 1];
			}
		}
		openPopUp(getPathContext() + '/investimenti/bookOrdina.do?isin=' + isin
				+ '&codMercatoInfo=' + codMercatoInfo + '',
				'popup' + time + '', '400', '740', '0', 'yes');
	}
}

function openDettaglioDaSimulato() {
	if (confirm("Attenzione si sta abbandonando la sezione di simulazione per accedere alla pagina di Dettaglio Titolo")) {
		var isin = '';
		var codMercatoInfo = '';
		var simbolo = '';
		for ( var i = 0; i < arguments.length; i += 2) {
			if (arguments[i] === 'isin') {
				isin = arguments[i + 1];
			} else if (arguments[i] === 'codMercatoInfo') {
				codMercatoInfo = arguments[i + 1];
			} else if (arguments[i] === 'simbolo') {
				simbolo = arguments[i + 1];
			}
		}
		goToPage('/investimenti/dettaglioTitolo.do', 'isin', isin,
				'codMercatoInfo', codMercatoInfo, 'simbolo', simbolo);
	}
}

function openTitoloPopupDaTabellatore() {
	var d = new Date();
	var time = d.getTime();
	var isin = '';
	var codMercatoInfo = '';

	for ( var i = 0; i < arguments.length; i += 2) {
		if (arguments[i] === 'isin') {
			isin = arguments[i + 1];
		} else if (arguments[i] === 'codMercatoInfo') {
			codMercatoInfo = arguments[i + 1];
		}
	}
	openPopUp('/template/popup_investimenti_bookOrdina.php?isin=' + isin
			+ '&codMercatoInfo=' + codMercatoInfo + '', 'popup' + time + '',
			'500', '740', '0', 'yes');
}

function openPopupDaTabellatore(page) {
	var url = page;
	var d = new Date();
	var time = d.getTime();
	var width = 400;
	var height = 700;
	if (page.indexOf(getPathContext()) == -1 && page.indexOf("http") == -1)
		//url = getPathContext() + url;
		url = url;

	url = url + '?';
	for ( var i = 1; i < arguments.length; i += 2) {
		if (arguments[i] === 'width') {
			width = arguments[i + 1];
		} else if (arguments[i] === 'height') {
			height = arguments[i + 1];
		} else {
			url += '&'
			url += arguments[i] + '='
			url += escape(unescape(arguments[i + 1]));
		}
	}
	openPopUp(url, time, width, height, '0', 'yes');
}

function numberFormat(val, decimal) {
	var frm = $.jgrid.formatter.number;
	frm.decimalPlaces = decimal;
	frm.thousandsSeparator = ".";
	frm.decimalSeparator = ",";
	return $.fmatter.util.NumberFormat(val, frm);
}

function formatOra(dataString) {
	// data arriva nel formato gg/mm/aaaa hh.mm.ss, trasformo in hh:mm
	var ora = "-";
	if (!isEmpty(dataString)) {
		var oraStringArray = dataString.split(" ");
		if (oraStringArray.length > 1) {
			var oraString = oraStringArray[1];
			var oraArray = oraString.split(".");
			if (oraArray.length > 1) {
				ora = oraArray[0] + ":" + oraArray[1]
				return ora;
			}
		}
	}
	return ora
}

function isEmpty(str) {
	return (!str || 0 === str.length);
}

function loadComboRicercaAvanzata(url, combo) {
	var name = $(combo).attr('name');
	var form = $(combo).parents('form');
	var indexSelect = $('select', form).index(combo);
	var comboSuccessiva = $('select', form)[indexSelect + 1];

	$('select', form).not(combo).each(function() {
		var i = $('select', form).index(this);
		if (i > indexSelect) {
			$('option:not(:first-child)', this).remove();
		}
	})

	var value = $(combo).val();
	$.get(url, name + '=' + value, function(datiCombo) {
		$.each(datiCombo, function(key, value) {
			var opt = $('<option></option>').val(key).text(value);
			$(comboSuccessiva).append(opt);
		});
	});
}

function risultatoRicercaPopUP() {
	var url = '/template/popup_investimenti_bookOrdina_cerca.php';
	var param = $('#formRicercaTitoli').serialize()
	url = url + '?' + param;
	openPopUp(url, 'Ricerca Titolo', '600', '400', '0', 'yes');
}

var indiciMouseOver = false;

function richiestaIndici() {
	
	$('#loadingindici').show();
	$('#marqueeWrapper').fadeTo( 0, 0.33 );

	// cancello eventuali timeout rimasti appesi
	clearTimeout($('#scorr').data('timeout'));

	var url = getPathContext() + '/investimenti/indiciScorrimento.do';
	var pageIndici = '/investimenti/indici.do';

	function callbackIndici(json) {

		$('#loadingindici').hide();
		$('#marqueeWrapper').fadeTo(0, 1 );
		$('#scorr').empty();

		if (json['error'] === 'true' || json['warning'] === 'true') {

			$('#actions').hide();
			var box = $('#scorr');

			$('<div></div>', {
				'class' : 'ui-state-highlight ui-corner-all boxMsg'
			})
					.append(
							'<span class="ui-icon ui-icon-info"></span><strong>Attenzione:</strong> <span class="msg">'
									+ json['message'] + '</span>')
					.appendTo(box).position({
						of : box,
						my : 'center center',
						at : 'center center'
					});

		} else {
			var righe = json['rows'];
			if (righe != null) {
				for (i = 0; i < righe.length; i++) {
					var denom = righe[i]['denominazione'];
					var perc = numberFormat(righe[i]['lastVarPerc'], 2);
					var last = numberFormat(righe[i]['last'], 0);
					var mercato = righe[i]['mercato'];
					var codice = righe[i]['codice'];
					var chain = righe[i]['chain'];

					var data = righe[i]['ora'];
					var ora = formatOra(data)
					// array con le lunghezze delle colonne bootstrap
					// caso con solo due colonne
					var widthArray = [ 9, 0, 0, 3 ];
					// caso a quattro colonne
					if (typeof indiciHomepage != 'undefined' && indiciHomepage) {
						widthArray = [ 6, 2, 2, 2 ]
					}
					// nome indice
					var col1 = $('<div class="col-xs-' + widthArray[0]
							+ '"></div>')
					var a = $('<a></a>')
							.attr(
									'href',
									getPathContext()
											+ '/investimenti/titoliIndiceForm.do?mercato='
											+ mercato + '&chain=' + chain
											+ '&codice=' + codice);
					
					$(a).attr("title", denom);
					
					a.text(denom);
					col1.append(a);
					// variazione percentuale
					var label = $('<strong></strong>').text(
							' ' + perc + '%' + ' ');
					// colore in funzione del segno
					if (('' + perc).indexOf('-') > -1) {
						label.attr('class', 'negativo');
					} else {
						label.attr('class', 'positivo');
					}
					var label2 = $('<strong></strong>').text(last);
				
					var col2 = $('<div class="col-xs-' + widthArray[3]
							+ ' oRight"></div>');
					col2.append(label);

					var col3 = $('<div class="col-xs-' + widthArray[1]
							+ ' oRight"></div>');
					col3.append(ora);

					var col4 = $('<div class="col-xs-' + widthArray[2]
							+ ' oRight"></div>');
					col4.append(last);

					// se sono in home visualizzo la versione con piu colonne
					if (typeof indiciHomepage != 'undefined' && indiciHomepage) {
						
						$('<div class="row"></div>').appendTo('#scorr').append(
								col1).append(col4).append(col3).append(col2);
					} else {
						$('#oraRefresh').empty();
						$('#oraRefresh').text(ora);
						$('<div class="row"></div>').appendTo('#scorr').append(
								col1).append(col2);
					}
				}
			}
		}
		
		

		// invocazione ciclica
		setTimeout(richiestaIndici, 60000);
	}

	// chiamata ajax
	$.getJSON(url, callbackIndici);

}

function titoliPreferitiHome() {

	$('#loadingtitolipreferiti').show();
	$('#pref').fadeTo( 0, 0.33 );
	
	var url = getPathContext()
			+ '/investimenti/titoliSimulatiJson.do?tipoRapportoSimulato=PREF&codLista=INVESTIMENT_PREF_DEFAULT_LIST';

	function callbackTitoli(json) {

		$('#loadingtitolipreferiti').hide();
		$('#pref').fadeTo(0, 1 );
		
		$('#pref').empty();

		if (json['error'] === 'true' || json['warning'] === 'true') {

			var box = $('#pref');

			$('<div></div>', {
				'class' : 'ui-state-highlight ui-corner-all boxMsg'
			})
					.append(
							'<span class="ui-icon ui-icon-info"></span><strong>Attenzione:</strong> <span class="msg">'
									+ json['message'] + '</span>')
					.appendTo(box).position({
						of : box,
						my : 'center center',
						at : 'center center'
					});

		} else {

			var table = $('<table class="table"></table>').attr('id',
					'tableTitoliHome').appendTo('#pref');

			var colheader = '<thead><tr><th></th><th class="oLeft">Titolo</th><th>P. di Mercato</th><th>Var %</th><th>Trend</th></tr></thead>';

			table.append(colheader);

			var righe = json['rows'];

			if (righe != null) {

				for (i = 0; i < righe.length; i++) {

					var idMovimento = righe[i]['idMovimento'];
					var titolo = righe[i]['titolo'];
					var linkDenominazione = "openDettaglioTitolo('/investimenti/dettaglioTitolo.do', 'isin', '"+ titolo.isin +"', 'codMercatoInfo', '"+titolo.codMercatoInfo+"', 'symbol', '"+titolo.simbolo+"', 'tipoConvertito', '"+titolo.tipoConvertito+"')";
					var denominazione = righe[i]['titolo'].denominazione;
					var prezzoDiMercato = numberFormat(titolo.quotazione.last,
							4);
					var variazionePercentuale = numberFormat(
							titolo.quotazione.variazionePercentuale, 2);
					var trend = titolo.quotazione.trend;
					var trendImg = trendFmt(trend);
					var codice = titolo.isin;
					var mercato = titolo.descMercato;

					// link al titolo
					var col1 = $('<td></td>');
					var a = $('<a class="btn btn-cv"></a>')
							.attr(
									'href',
									getPathContext()
											+ '/investimenti/compraVendiTitolo.do?isin='
											+ codice + '&codMercatoInfo='
											+ mercato + '&simbolo='
											+ denominazione)
							.attr("title", "C/V" + " " + denominazione);
					a.text("C/V");
					col1.append(a);

					// denominazione
					var denominazioneTrunc=denominazione;
					if(denominazioneTrunc.length>18 && denominazioneTrunc.indexOf(' ')==-1){
						denominazioneTrunc=denominazioneTrunc.substr(0,18)+'...';
					}
					var denominazioneLabel = $('<strong></strong>').text(
							' ' + denominazione + ' ');
					var col2 = $('<td></td>');
					var js = $("<a href=\"#\"></a>").attr('onclick', linkDenominazione).text(denominazioneTrunc).attr("title", denominazione);
					
					col2.append(js);
					// prezzo di mercato
					var td1=$('<td  class="oRight"></td>');
					var col3 = $('<div data-source="lightstreamer" data-grid="quoteTab" data-item="'+'QUOTE.-.'+titolo.codMercatoInfo+'.'+titolo.simbolo+'.0.TYPE'+'" data-field="LAST" frmType="D4"></div>');
					col3.append(settaQuotePref(titolo.quotazione.last,'last'));
					td1.append(col3);
					// variazione percentuale
					var variazionePercentualeLabel = $('<strong></strong>')
							.text(variazionePercentuale);
					var td2=$('<td  class="oRight"></td>');
					var col4 = $('<div data-source="lightstreamer" data-grid="quoteTab" data-item="'+'QUOTE.-.'+titolo.codMercatoInfo+'.'+titolo.simbolo+'.0.TYPE'+'" data-field="VAR_PERC" frmType="D2"></div>');
					var variazionePercentualeLabel = $('<strong></strong>').text(settaQuotePref(titolo.quotazione.variazionePercentuale,'variazionePercentuale'));
					col4.append(variazionePercentualeLabel);
					td2.append(col4);
					if (('' + variazionePercentuale).indexOf('-') > -1) {
						variazionePercentualeLabel.attr('class', 'negativo');
					} else {
						variazionePercentualeLabel.attr('class', 'positivo');
					}

					// trend
					var td3=$('<td  class="oRight"></td>');
					var col5 = $('<div style="width: 50%; float:left;"></div><div class="" style="display: none;" frmtype="TREND" data-field="TRDDIR_CAH" data-item="'+'QUOTE.-.'+titolo.codMercatoInfo+'.'+titolo.simbolo+'.0.TYPE'+'" data-grid="quoteTab" data-source="lightstreamer">/HT/IMAGES/TOL/b_stabile.gif</div>');
					col5.append(trendFmt(trend,'QUOTE.-.'+titolo.codMercatoInfo+'.'+titolo.simbolo+'.0.TYPEimg'));
					td3.append(col5);
					
					$('<tr></tr>').appendTo(table).append(col1).append(col2)
							.append(td1).append(td2).append(td3);

				}
			}
			$("#tableTitoliHome tr:odd").addClass('odd');
			$("#tableTitoliHome tr:even").addClass('even');
		}
		
	}

	
	function settaQuotePref(value, quotaName){

		if(value != null){
			//formattazione ore
			if(quotaName === 'ora'){
				value = $.fmatter.util.DateFormat('d/m/Y H:i', value, 'H:i', $.jgrid.formatter.date)
			}
			if(quotaName === 'oraMinimo' || quotaName === 'oraMassimo'){
				value = $.fmatter.util.DateFormat('d/m/Y H:i', value, 'H:i', $.jgrid.formatter.date)
			}
			//formattazione quantità
			if(quotaName === 'quantitaAsk' || quotaName === 'quantitaBid' ||  quotaName === 'volume'){
				value = numberFormat(value,0);
			}
			//formattazione prezzi
			if(quotaName === 'ask' || quotaName === 'bid' || quotaName === 'last' || quotaName === 'minimoGiorno' || quotaName === 'massimoGiorno' || quotaName === 'apertura'){
				value = numberFormat(value,4);
			}
			if(quotaName === 'controvalore'  || quotaName === 'quantitaTotale'){
				value = numberFormat(value,0);
			}
			if(quotaName === 'variazionePercApertura'  || quotaName === 'variazionePercentuale'){
				value = numberFormat(value,2);
			}
			if(quotaName=='note' && value==''){
			  value='n.d.'
			}
		}else{
			value='n.d.'
		}
		return value;
	}
	
	function trendFmt(cellval){
		trendFmt(cellval,null);
	}
	
	function trendFmt(cellval,id) {
		if (id==null){
			if (cellval == '3') {
				return '<img alt="stabile" title="stabile" src="/HT/IMAGES/TOL/b_stabile.gif">';
			} else if (cellval == '2') {
				return '<img alt="scende" title="scende" src="/HT/IMAGES/TOL/b_scende_rossa.gif">';
			} else if (cellval == '1') {
				return '<img alt="cresce" title="cresce" src="/HT/IMAGES/TOL/b_cresce_verde.gif">';
			} else {
				return '&nbsp;';
			}
		} else{
			if (cellval == '3') {
				return '<img alt="stabile" title="stabile" name="'+id+'" src="/HT/IMAGES/TOL/b_stabile.gif">';
			} else if (cellval == '2') {
				return '<img alt="scende" title="scende" name="'+id+'" src="/HT/IMAGES/TOL/b_scende_rossa.gif">';
			} else if (cellval == '1') {
				return '<img alt="cresce" title="cresce" name="'+id+'" src="/HT/IMAGES/TOL/b_cresce_verde.gif">';
			} else {
				return '&nbsp;';
			}	
		}
		
	}

	// chiamata ajax
	$.getJSON(url, callbackTitoli);

}

function portafoglioWidgetHome(numDossier) {

	// http://testbyweb.intranet.servizi:7482/WEBHT/investimenti/titoliDossierJson.do?_search=false&nd=1433411138632&numRighe=500&numPagina=1&sidx=&sord=asc
	var url = getPathContext() + '/investimenti/titoliDossierJson.do?nd='
			+ numDossier + '&numRighe=500&numPagina=1&sidx=&sord=asc';

	function callbackPortafoglio(json) {

		$('#portafoglio').empty();

		if (json['error'] === 'true' || json['warning'] === 'true') {

			var box = $('#portafoglio');
			$('<div></div>', {
				'class' : 'ui-state-highlight ui-corner-all boxMsg'
			})
					.append(
							'<span class="ui-icon ui-icon-info"></span><strong>Attenzione:</strong> <span class="msg">'
									+ json['message'] + '</span>')
					.appendTo(box).position({
						of : box,
						my : 'center center',
						at : 'center center'
					});

		} else {

			var table = $('<table></table>').attr('id', 'tableTitoliHome')
					.appendTo('#portafoglio');

			var colheader = '<tr><th></th><th>Mercato</th><th>Utile/Perdita</th></tr>';

			table.append(colheader);

			var righe = json['rows'];

			if (righe != null) {

				for (i = 0; i < righe.length; i++) {

					var raggruppamento = righe[i]['descRaggruppamento'];
					// filtro per ottenere solo le righe dei totali
					if (raggruppamento != null) {
						var datiJqGrid = righe[i]['datiJqGrid'];
						var label = datiJqGrid['titoloTot']

						var controvaloreCaricoEuro = righe[i]['controvaloreCaricoEuro'];
						var controvaloreMercatoEuro = righe[i]['controvaloreMercatoEuro'];

						var col1 = $('<td></td>');
						col1.append(label);

						var col2 = $('<td></td>');
						col2.append(numberFormat(controvaloreCaricoEuro, 2));

						var col3 = $('<td></td>');
						col3.append(numberFormat(controvaloreMercatoEuro, 2));

					}

					$('<tr></tr>').appendTo(table).append(col1).append(col2)
							.append(col3)

				}
			}

		}

	}

	// chiamata ajax
	$.getJSON(url, callbackPortafoglio);

}

function InvestimentiRevoca() {
	if (confirm('Confermi la cancellazione dell\'ordine?')) {
		var params = [];
		for ( var i = 0; i < arguments.length; i++) {
			params.push(arguments[i]);
		}
		params.push('title');
		params.push('Cancellazione ordine');
		params.push('width');
		params.push(600);

		openAjaxDialog.apply(this, params);
	}
}

function isDettaglioTol(rowData){
	if(rowData['metodoDettaglio'] == 7) 
		return true;
	else 
		return false;
}

function isNotRit(){
	if (getLineaTol() != null && getLineaTol() != "RIT"){
		return true;
	} 
	return false;
}
fndConfronto = function(fondiInput, codAreaFinanza) {
	return goToPage("/investimenti/fondiConfrontoFondiInit.do", fondiInput, codAreaFinanza);
}