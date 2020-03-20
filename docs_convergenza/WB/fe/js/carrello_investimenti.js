/* CARRELLO - Chiamate AJAX */
// carrello_investimenti.js
//noinspection JSUnusedGlobalSymbols
var cgi_protocol=window.location.protocol  + "//";
var cgi_host=window.location.hostname;


function getCarrello(callback) {
	jqAJAXCall('get', 'json', wrp_script_direct + '/FMP/resp/finance/investimenti/ReturnCart.jsp', 
				function (json) {	//success
					getCarrelloOK(json, callback);
				}, 
				function (jqXHR, textStatus, errorThrown) {	//error
					getCarrelloKO(jqXHR, textStatus, errorThrown, callback);
				}, 
				{ type: 'fida', cf: Math.random() });	//input
}

function checkCarrello(cart, succFunc, failFunc) {
	jqAJAXCall('post', 'json', wrp_script_direct + '/FMP/resp/finance/investimenti/ReturnCart.jsp', 
				succFunc, failFunc, 
				{type: 'check',
				 cart: JSON.stringify(cart)
	});
}

function overwriteCarrello(cart, callback) {
	
	jqAJAXCall('post', 'json', wrp_script_direct + '/investimenti/CheckCart.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_portafogli_modello'
				 , function (json, status, jqXHR) {overwriteCarrelloOK(json, callback); }
				 , function (jqXHR, textStatus, errorThrown) { overwriteCarrelloKO(jqXHR, textStatus, errorThrown, callback);}
				 , { cart: JSON.stringify(cart) });
}

//aggiungi al carrello
function setCarrello(cart, callback) {
	checkCarrello(	cart, 
					function (json) {
					   checkCarrelloOK(json, cart, callback);
					}, function (jqXHR, textStatus, errorThrown) {
					   checkCarrelloKO(jqXHR, textStatus, errorThrown, callback);
					});
}

//noinspection JSUnusedGlobalSymbols
function delFondo(el, isin) {
	if ($('#idListaFondi tbody tr').length === 1) {		//tbFondi
// 	   openAlert('eliminaCarrello');
		$('#modalEliminaCarrelloLAbel').text("Eliminazione carrello portafoglio modello: " + cartBeanJson.profilo.toUpperCase()); 
		$('#modalTestoConfermaLabel').text("Vuoi procedere con l'eliminazione del carrello?");
		$('#modalEliminaCarrello').modalPlus(); 
	   return;
	}
// 	// Riga del fondo da rimuovere
// 	var riga = $(el).closest('tr');
// 	jqAJAXCall('post', 'json', wrp_script_direct + '/investimenti/CheckCart.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_portafogli_modello', 
// 			function (json) {  delFondoOK(json, riga);
// 			}, delFondoKO, { deleteFund: isin });
	
	$('#modalEliminaCarrelloLAbel').text("Eliminazione fondo con ISIN " + isin + " da carrello portafoglio modello: " + cartBeanJson.profilo.toUpperCase()); 
	$('#modalTestoConfermaLabel').text("Vuoi procedere con l'eliminazione del fondo da carrello?");
	$('#modalEliminaCarrello').modalPlus();
	
	
}

//noinspection JSUnusedGlobalSymbols
function delCarrello() {
	
	if ($('#idListaFondi tbody tr').length === 1 || idxFondoDel == -1) {		//Elimina carrello o Elimina unico fondo da carrello
		jqAJAXCall('post', 'json', wrp_script_direct + "/investimenti/CheckCart.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_portafogli_modello", 
				delCarrelloOK, delCarrelloKO, { deleteCart: 'OK' });	//cart.js
	}
	else{
		jqAJAXCall('post', 'json', wrp_script_direct + "/investimenti/CheckCart.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_portafogli_modello", 
				updateCarrello(idxFondoDel), delCarrelloKO, { deleteFund: isinFondoDel });
	}
	
}

var ordDirCart, ordColumnCart;

function changeParamCarrello(ordColumn) {
	var importo = new Number($('#importoFondiTotCart').val()).valueOf();	//getFieldIntValue('importoFondi')
//	if (importo === '') {    importo = 0; }
	if (isNaN(importo)) {
		importo = 0;
	}
	if (ordColumn !== '') {
		if (ordColumn === ordColumnCart) {
			ordDirCart *= -1;
		} else {
			ordColumnCart = ordColumn;
			ordDirCart = 1;
		}
	}
	jqAJAXCall('post', 'json', wrp_script_direct + '/FMP/resp/finance/investimenti/ChangeParameterCart.jsp', null, null, {
		"ordColumn": ordColumnCart,
		"ordDir": ordDirCart,
		"quantita": importo
	});
}
/* |FINE| CARRELLO - Chiamate AJAX */


/* CARRELLO - Callback */
/***
*
* @param json
* @param json.alert
* @param json.profilo
* @param json.numFondi
* @param callback
*/
function getCarrelloOK(json, callback) {
	
	var widget = $('#faseStart');
	if (json.alert) {
		widget.find('.carrelloType:first').html(json.profilo);
		widget.find('.carrelloNum:first').html(json.numFondi.toString());
		widget.show();
		if(callback == undefined)return;
		callback(json);
	}
//	Ritorna a FIDA il fallito caricamento del carrello
	else {
		if(callback == undefined)return; 
		callback(json);
	}
}

function getCarrelloKO(jqXHR, textStatus, errorThrown, callback) {
// Ritorna a FIDA il fallito caricamento del carrello
	if(callback == undefined)return;
	callback(null);
}

/***
*
* @param json
* @param json.alert
* @param json.cartOld
* @param json.cartNew
* @param cart
* @param callback
*/
function checkCarrelloOK(json, cart, callback) {
	
	if (json.alert) {
//	   var confermaIns = $('#confermaIns'),
//	       profiloOld = json.cartOld.charAt(0).toUpperCase() + json.cartOld.slice(1),
//	       profiloNew = json.cartNew.charAt(0).toUpperCase() + json.cartNew.slice(1),
//	       leftBtn = confermaIns.find('.btnformleft'),
//	       arrRightBtn = confermaIns.find('.btnformright');
//	   confermaIns.find('.cartOld').html(profiloOld);
//	   confermaIns.find('.cartNew').html(profiloNew);
//	   leftBtn.off('click')
//	       .click(function () {
//	    	   if(callback == undefined)return;
//	    	   callback(false);
//	           closeAlert('confermaIns');
//	       });
//	   arrRightBtn.eq(0).attr('title', 'vedi carrello "' + profiloOld + '"')
//	       .attr('href', wrp_script + '/wbOnetoone/2l/action/investimenti/ViewCart.action?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_portafogli_modello');
//	   arrRightBtn.eq(1).attr('title', 'vedi carrello "' + profiloNew + '"')
//	       .off('click')
//	       .click(function () {
//	           overwriteCarrello(cart, callback);
//	           closeAlert('confermaIns');
//	       });
//	   openAlert('confermaIns');
		overwriteCarrello(cart, callback);
	} else {
		overwriteCarrello(cart, callback);
	}
}

function checkCarrelloKO(jqXHR, textStatus, errorThrown, callback) {
	// Ritorna a FIDA il fallito inserimento del carrello
	if(callback == undefined)return;
	callback(false);
}

function overwriteCarrelloOK(json, callback) {
	
	var jsonObj = $.parseJSON(json.jsonStr);
	if (jsonObj.success) {
	   var widget = $('#faseStart');
	   widget.find('.carrelloType:first').html(jsonObj.profilo);
	   widget.find('.carrelloNum:first').html(jsonObj.numFondi);	//.toString()
	   widget.show();
	   if(callback == undefined)return;
	   callback(true);
	}
	// Ritorna a FIDA il fallito inserimento del carrello
	else {
		if(callback == undefined)return;
		callback(false);
	}
}

function overwriteCarrelloKO(jqXHR, textStatus, errorThrown, callback) {
	// Ritorna a FIDA il fallito inserimento del carrello
	if(callback == undefined)return;
	callback(false);
}

//function delFondoOK(json, riga) {
//	var jsonObj = $.parseJSON(json.jsonStr);
//	if (jsonObj.success) {
//		$('#modalEliminaCarrello').modalPlus('showMessage','Il fondo selezionato &#232; stato eliminato');
//		// Rimuove la riga del fondo
//	   riga.remove();
//	   aggiornaTotRimanente();
//	   zebra($('#idListaFondi tbody tr'));		//tbFondi
//	}
//}
//
//function delFondoKO(jqXHR, textStatus, errorThrown) {
//
//}

function delCarrelloOK(json) {
	var jsonObj = $.parseJSON(json.jsonStr);
	if (jsonObj.success) {
		$('#modalEliminaCarrello').modalPlus('showMessage','Il carrello &#232; stato eliminato. Reindrizzando automaticamente verso pagina di Portafoglio modello');
//	   callJSP('/wbOnetoone/mffida/servlet/portafogli/index.action', null, 'get=1&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_portafogli_modello');
		setTimeout(function(){
			callJSP('/wbOnetoone/mffida/servlet/portafogli/index.action',null,'get=1&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_portafogli_modello&showCart=true');
			}
		,2000);
	}
}

function delCarrelloKO(jqXHR, textStatus, errorThrown) {
	showError(true, "E", "l'operazione di visualizzare carrello non &egrave; possibile al momento");	//cart.js
}

function aggiornaTotRimanente() {
	var totFondiPerc = 100.0,
	importo = new Number($('#importoFondiTotCart').val()).valueOf(),	//getFieldIntValue('importoFondi')
	tbFondi = $('#idListaFondi'),						//tbFondi
	tbFondiBody = tbFondi.find('tbody:first'),
	tbFondiFootTr = tbFondi.find('tfoot tr:first');
	tbFondiBody.find('td.perc').each(function (index, item) {
		totFondiPerc -= parseFloat(item.innerHTML.replace('%', '').replace(',', '.'));
	});
//	var totImp = (importo === '') ? 0 : importo / 100 * totFondiPerc;
	var totImp = isNaN(importo) ? 0 : importo / 100 * totFondiPerc;
	if (totFondiPerc > 0) {
		tbFondiFootTr.show();
		tbFondiFootTr.find('.totPerc:first').html(totFondiPerc.toString() + ' %');
		tbFondiFootTr.find('.totImp:first').html("&euro; " + parseFloat(totImp).toLocaleString("it-IT",{minimumFractionDigits:0,maximumFractionDigits:0}));		//formatDots(totImp)
	} else {
		tbFondiFootTr.hide();
	}
}

//Calcolo degli importi da investire nei fondi del carrello
var changeParTimeout;

//noinspection JSUnusedGlobalSymbols
function aggiornaInvestimenti() {
	var importoFondi = $('#importoFondiTotCart'),	//importoFondi
	impValue = new Number($('#importoFondiTotCart').val()).valueOf(),	//getFieldIntValue(importoFondi)
	tbFondi = $('#idListaFondi'),				//tbFondi
	arrPerc = tbFondi.find('tbody .perc'),
	arrImp = tbFondi.find('tbody .imp'),
	arrStatus = tbFondi.find('tbody .status'),
	tuttiAcquistati = true;

//	if (impValue !== '') {
	if(!isNaN(impValue)){	 
		if (impValue > 1000000000) impValue = 1000000000;

		arrPerc.each(function (index, percEl) {
			var impEl = arrImp.eq(index);

			if (arrStatus[index].innerHTML.indexOf('acquistato') === -1) {
				var perc = parseFloat(percEl.innerHTML.replace('%', '').replace(',', '.')),
				impVal = impValue / 100 * perc;

				tuttiAcquistati = false;
				impEl.html("&euro; " + parseFloat(impVal).toLocaleString("it-IT",{minimumFractionDigits:0,maximumFractionDigits:0}));	//formatDots(impVal)
			} else impEl.html('');
		});
	} else {
		arrImp.each(function (index, impEl) {
			impEl = $(impEl);
			if (arrStatus[index].innerHTML.indexOf('acquistato') === -1) {
				impEl.html('&euro; 0');
				tuttiAcquistati = false;
			} else impEl.html('');
		});
	}

	if (tuttiAcquistati) 
		importoFondi.val('').attr('disabled', 'disabled');
	else 
		importoFondi.removeAttr('disabled').val(impValue);

	aggiornaTotRimanente();

	if (typeof changeParTimeout !== "undefined" && changeParTimeout) clearTimeout(changeParTimeout);

	changeParTimeout = setTimeout(function () {changeParamCarrello('')}, 500);
}
/* |FINE| CARRELLO - Callback */


//noinspection JSUnusedGlobalSymbols
function callCarrello() {
	var action = '/wbOnetoone/2l/action/investimenti/ViewCart.action?',
	param = 'tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_portafogli_modello';
	callExt(action, param);
}

//noinspection JSUnusedGlobalSymbols
function callTopS() {
	var action = '/wbOnetoone/mffida/servlet/toppicks/index.action?',
	param = 'OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_best_selected';
	callExt(action, param);
}

//noinspection JSUnusedGlobalSymbols
function callPortafogliModello() {
	var action = '/wbOnetoone/mffida/servlet/portafogli/index.action?',
	param = 'OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_portafogli_modello&get=1';
	callExt(action, param);
}

//noinspection JSUnusedGlobalSymbols
function callAlertPortafogliModello(pageName) {
	var obs_key = '',
//	action = '/wbOnetoone/2l/do/wbOnetoone/sms/fida/alertPortafMod.do?';		//da chiamare alertAttiviFondiSicav
//	if (pageName === 'PortafogliModello') {
//	obs_key = 'nav_priv_wbx_portafogli_modello';
//	} else if (pageName === 'TopSelection') {
//	obs_key = 'nav_priv_wbx_best_selected';
//	}

	action = '/wbOnetoone/2l/jsp/FMP/resp/alert/alertAttiviFondiSicav.action?';
	var param = 'OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_sf_alert' ;
	callExt(action, param);
}

//noinspection JSUnusedGlobalSymbols
function callProfili() {
	var action = '/wbOnetoone/mffida/servlet/profili/index.action?',
	param = 'OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_portafogli_modello';	//nav_priv_wbx_profili_investitore
	callExt(action, param);
}

//noinspection JSUnusedGlobalSymbols
function apriSchedaFondoFida(codiceFida) {
	
//	if (arguments.length>1) {
//		var param = codiceFidaISIN + "&tipoDocumento=" + tipo;
//		
//		window.open(wrp_invest_direct + "/investimenti/ApriDocumenti.action?keyDocumento=" + param,"_blank");
//	} else {
		
		var obs = "OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto_new&";
		var action = "/wbOnetoone/2l/action/investywb/RicercaFondi.action?" + obs;
		var param = "codicefida=" + codiceFida + "&fondo=true";
		
		callExt(action, param);
//	}


}


function callExt(action, param) {
	top.document.location.href = cgi_protocol + cgi_host + wrp_script + action + param + "&cf=" + Math.random();
}

/* FONDI - Layer pdf **/
//TODO - verifica se serve
function getFogliInfo(isin, tipo) {
	
	var param = isin + "&tipoDocumento=" + tipo;
	window.open(cgi_protocol + cgi_host + wrp_invest_direct + "/investimenti/ApriDocumenti.action?keyDocumento=" + param,"_blank");
	
//	jqAJAXCall('get', 'json', wrp_script_direct + '/FMP/FogliInformativi.jsp', getFogliInfoOK, getFogliInfoKO, {
//	   societaGestione: fondo,
//	   cf: Math.random()
//	});
}

var layer = null;

function getFogliInfoOK(html) {
	var layer = $('#layerFogliInfo');
	var layerTitolo = $('#myModalLabel');
//	if (!layer.length) {
//	layer = $('<div>', { 'id': 'layerFogliInfo', 'class': 'layeralert3', 'style': 'display:none' });
//	$('body').append(layer);
//	}
	layerTitolo.html(html.titolo);
	layer.html(html.body);
//	layer.find('.head img:first').click(function () {
//	unobscurateAll();
//	layer.remove();
//	layer = null;
//	closeAlert('layerFogliInfo');
//	});
//	layer.draggable({ handle: ".handle", scroll: "window" });

//	obscurateAll(1);
	openAlert('#layerSepa');
}


function openAlert(idJq) {
	
	$(idJq).modal('show');
	
}

function getFogliInfoKO(jqXHR, textStatus, errorThrown) {
}
/* |FINE| FONDI - Layer pdf */


function callCompravendita(isin, mercato, valuta) {
    var mer = "";
    var divisa = "";
    var searchAction = "";
    var searchParam = "";
    var isWebank = wrp_script === '/webankpri';
    var navParam = '?tabId=nav_priv_wbx_trading&OBSKEY=nav_priv_wbx_inserim_ordini';
    if (mercato === 'otc') {
        searchAction = '/2l/do/otc/quickSearch.do';
        searchParam = '&PF=N&type=simple&tipoTitolo=1&descrizione=';
        mer = 'EM|OOTC';
    } else if (mercato === 'FNDB') {
    	navParam = '?tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto_new';
//		searchAction ='/2l/action/investimenti/BuyFundSelect.action';
		searchAction ='/2l/action/investywb/AcquistoFondo.action';
		searchParam='&codIsin=' + isin ;
		mer = 'IT|F1';
		divisa = "&divisa=" + valuta;
    } else if (mercato === 'FNDS') {
        navParam = '?tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vendita'
        searchAction = '/2l/do/FMP/researchFundMS.do';
        searchParam = '&codIsin=' + isin;
        mer = 'morningStar';
        divisa = "&divisa=" + valuta;
    } else if (mercato === 'topPicks') {	
    	navParam = '?tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto_new';
//		searchAction ='/2l/action/investimenti/BuyFundSelect.action';
		searchAction ='/2l/action/investywb/AcquistoFondo.action';
		searchParam='&codIsin=' + isin ;
		mer = 'topPicks';
		divisa = "&divisa=" + valuta;
    } else if (mercato === 'ETF' && isWebank) {
        searchAction = '/2l/do/FMP/insertOrderFinanceWT.do';
        searchParam = '&method=index&titolo=' + isin;
        mer = 'MI|EQCON|E';
        navParam = '?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_trading_wt&OBSKEY=nav_priv_wbx_inseri_ordini_wt';
    } else if (mercato === 'ETF' && !isWebank) {
        searchAction = '/2l/do/FMP/RicercaSemplice.do';
        searchParam = '&tipoDescrizione=ISIN&descrizione=' + isin;
        mer = 'IT|F1';
    } else {
        searchAction = '/2l/do/FMP/RicercaSemplice.do';
        searchParam = '&tipoDescrizione=ISIN&descrizione=' + isin;
        mer = 'IT|' + mercato;
    }
    var hrefValue = cgi_protocol + cgi_host + wrp_script + '/wbOnetoone' + searchAction + navParam + searchParam + '&mercato=' + mer + divisa;


    top.document.location.href = hrefValue;

}

function callCompravenditaFondi(isin, mercato, agenzia, deposito, sottodeposito) {
    var mer = "";
    var searchAction = "";
    var searchParam = "";
    var navParam = '?tabId=nav_priv_wbx_trading&OBSKEY=nav_priv_wbx_inserim_ordini';
    var depositoCompleto = agenzia + '/' + deposito + '/' + sottodeposito;

    if (mercato === 'FNDB') {
    	navParam = '?tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto_new';
		searchAction ='/2l/action/investywb/AcquistoFondo.action';	//'/2l/action/investimenti/BuyFundSelect.action'
		searchParam='&codIsin=' + isin + '&deposito=' + depositoCompleto;
		mer = 'IT|F1';
    } 
//    else if (mercato === 'FNDS') {
//        navParam = '?tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_vendita'
//        searchAction = '/2l/do/FMP/researchFundMS.do';
//        searchParam = '&codIsin=' + isin + '&deposito=' + depositoCompleto;
//        mer = 'morningStar';
//    } else {
//        searchAction = '/2l/do/FMP/RicercaSemplice.do';
//        searchParam = '&tipoDescrizione=ISIN&descrizione=' + isin;
//        mer = 'IT|' + mercato;
//    }
    var hrefValue = cgi_protocol + cgi_host + wrp_script + '/wbOnetoone' + searchAction + navParam + searchParam + '&portafoglio=true';

    top.document.location.href = hrefValue;
}


//function zebra(righe) {
//  var cont = 1;
//  
//  righe.each(function (index, row) {
//      row = $(row);
//      if (row.is(':visible')) {
//          if (cont == 1) {
//              if (!row.hasClass('pari')) row.addClass('pari');
//              
//              row.removeClass('dispari');
//          }
//          else {
//              if (!row.hasClass('dispari')) row.addClass('dispari');
//              
//              row.removeClass('pari');
//          }
//          
//          cont *= -1;
//      }
//  });
//}

//per aggiungere fondi/modificare fondi - chiamata da iFrameFidaContent.jsp
function visualizzaCarrelloInsMod(){
	
	jqAJAXCall('get', 'json', wrp_script_direct + '/FMP/resp/finance/investimenti/ReturnCart.jsp', 
			function(json){
				setCarrello(json, undefined);
//				console.log("OK:"+json);
//				var widget = $('#faseStart');
//				widget.find('.carrelloType:first').html(json.profilo);
//				widget.find('.carrelloNum:first').html(json.numFondi);	
//				widget.show();
			}, 
			function(param){console.log("KO")} ,
			{ type: 'fida', cf: Math.random() });
}
