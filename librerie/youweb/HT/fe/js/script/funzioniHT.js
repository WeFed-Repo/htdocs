
$(document).ready(function() {
	
	/** inizializzazione calendario javascript */
	$.datepicker.setDefaults({ 
		showOn: 'both', 
		buttonImage: getPathImages()+'calendar.jpg', 
		buttonText: 'Calendario',
		buttonImageOnly: true,
		changeMonth: true,
		changeYear: true,
		duration: 0,
		onChangeMonthYear: function(year, month, inst) {
			var data = $(this).datepicker("getDate");
			if(data) {
				data.setFullYear(year);
				data.setMonth(month - 1);
				$(this).datepicker("setDate", data);
			}
		}
	});
//	$('.calendarioDefault').datepicker();
	
	
	
	/** inizializzazione link da codificare */
	$('a.encodeUrl').click(function() {
		return encodeUrl(this);
	});
	
	/** inizializzazione ordinamento tabelle */
	loadTableOrd();
});

function openNews(id) {
	document.location.href=getPathContext() + "/news/dettaglio.do?id=" + id;
}
function OpenWindow(page, target, extraParams) {
	window.open(page, target, extraParams);
}

function goToPage(page) {
	var url = page;
	if (page.indexOf(getPathContext()) == -1 && page.indexOf("http") == -1) {
		url = getPathContext() + url;
	}
	if(arguments.length > 2) {
		url = url + '?';	
		for(var i = 1; i < arguments.length; i+=2){
			if(i > 1) {
				url += '&';
			}
			url += arguments[i] + '=';
			url += escape(arguments[i+1]);
		}
	}
	document.location.href=url;
}

/**
 * Fa il post di un link (al posto di un get) o di un url 
 * @param a: oggetto link (a href) o string url
 */
function encodeUrl(a) {
	var url = '';
	if(a.nodeType){
	if($(a).is('a')) {
		url = $(a).attr('href');
		
		/* ie fix */
		var host = a.host;
		if(host != '' && url.indexOf(host) >= 0) {
			url = url.substr(url.indexOf(host) + host.length);
		}
	} else {
		url = a;
	}
	} else {
		url = a;
	}
	
	if(url.indexOf(getPathContext()) == -1 && url.indexOf('/') == 0) {
		url = getPathContext() + url;
	}
	
	var urlWithoutParams = url;
	if (url.indexOf('?')!=-1) {
		var urlWithoutParams = url.substring(0, url.indexOf('?'));
	}
	var frmSubmit = $('<form></form>').attr('action', urlWithoutParams).attr('method', 'post').appendTo('body').hide();
	
	if(url.indexOf('?') != -1) {
		url = url.replace(/&amp;/g, '&');
		var params = url.substring(url.indexOf('?')+1).split('&');
		for(par in params){
			var value = params[par].split('=');
			
			$('<input />').attr('type', 'hidden')
				.attr('name', value[0])
				.attr('value', value[1])
				.appendTo(frmSubmit);
		}
	}
	frmSubmit.submit();
	return false;
}

/** Funzione per implementare l'ordinamento lato client */
function loadTableOrd() {
  
	$(".OUTLetFac table").each(function(i){
		loadOrd(this);
	});
}

function loadOrd(i) {
	if($(i).parents('.OUT2ColDiff').size() > 0) {
  		//no ordinamento su tabelle riepilogo
		return;
	}
	
  	var th = $(i).find("th:first");
  	if (th.length == 0) {
  		return;
  	}
  		
  	//una tabella non può essere ordinabile se contenuta in un div con classe nosort
  	var nosort = $(i).parents("div").hasClass("nosort");
  	if(nosort){
  	  return;
  	}
  	
  	//Cerco le tabelle con header con colspan 2 e tabelle con classe server
  	if($(i).find("th[rowspan = 2]").length > 0 || $(i).hasClass("server")){
  	   return;
  	}
  	
  	$.tablesorter.addWidget({ 
  	    // give the widget a id 
  	    id: "sortIcons", 
  	    // format is called when the on init and when a sorting has finished 
  	    format: function(table) {
            $("thead th",table).each(function() {
            	$(this).children('span.s-ico').remove();
                if($(this).hasClass('headerSortUp')) {
                	$(this).append('<span class="s-ico"><span class="ui-grid-ico-sort ui-icon-asc ui-icon ui-icon-triangle-1-n ui-sort-ltr"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span>');
                } else if($(this).hasClass('headerSortDown')) {
                	$(this).append('<span class="s-ico"><span class="ui-grid-ico-sort ui-icon-asc ui-icon ui-icon-triangle-1-n ui-sort-ltr ui-state-disabled"></span><span class="ui-grid-ico-sort ui-icon-desc ui-icon ui-icon-triangle-1-s ui-sort-ltr"></span></span>');
                } else {
                	$(this).append('<span class="s-ico"></span>');
                }
            });
  	    } 
  	}); 
  	
   	if(jQuery.trim($(th).html()) == '&nbsp;' || jQuery.trim($(th).html())==''){
   	    $(i).tablesorter({widgets: ['zebra', 'sortIcons'],widgetZebra: {css: ["pari",""]},decimal:',',dateFormat:'dd/mm/yyyy',headers: { 0: { sorter: false}},debug:false});
   	}else{
   	   $(i).tablesorter({widgets: ['zebra', 'sortIcons'],widgetZebra: {css: ["pari",""]},decimal:',',dateFormat:'dd/mm/yyyy',debug:false});
   	}
}

function setCookie(risoluzione) {
	var expiredDate = new Date();
	expiredDate.setFullYear(expiredDate.getFullYear()+5);
	var cookie = "RisoluzioneSchermo="+risoluzione+"; expires="+expiredDate.toGMTString()+"; path="+escape('/')+";";
	document.cookie=cookie;
	window.location.reload();
    return false;
}

function exportExcel(strForm) {
	var url=document.location.pathname.replace('.do','.xls')+document.location.search;
	var params = 'scrollbars=1,menubar=1,resizable=1,width=400,height=200';
	var parameters=readForm(strForm);
	window.open(url+'?'+$.param(parameters),'exportXls',params);
}

//Funzione per leggere i campi di una form
function readForm(element){
	var parameters = [];
	var inputs = $('#'+element).find('input');
	var selects = $('#'+element).find('select');
	var text = $('#'+element).find('textarea');

	for(i=0;i<inputs.size();i++){
		var input = inputs[i];
		if(($(input).attr("type") == "radio" || $(input).attr("type") == "checkbox") && input.checked){
			var name = input.name;
			var value = input.value;
			parameters.push({name:name,value:value});					
		}
		if($(input).attr("type") == "text" || $(input).attr("type") == "hidden"){
		  	var name = input.name;
			var value = input.value;
			parameters.push({name:name,value:value});	
		}
	}
	
	for(i=0;i<text.size();i++){
		var txt = text[i];
		var name = txt.name;
		var value = txt.value;
		parameters.push({name:name,value:value});		
	}
	
	for(i=0;i<selects.size();i++){
		var select = selects[i];
		var name = select.name;
		var value = select.options[select.selectedIndex].value;
		parameters.push({name:name,value:value});
	}
	return parameters;
}

//  *********************************  DATEPICKER  **************************************
function noWeekendsOrHolidays(date) {
	var noWeekend = $.datepicker.noWeekends(date);

	if (noWeekend[0]) {
		var natDays = [
		               [1, 1], [6, 1],[25, 4], [1, 5], [2, 6], [15, 8], [1, 11], [8, 12], [25, 12], [26, 12]
		                                                                                                       ];
			                                                                                                       
		var today = new Date();
		var year = today.getFullYear();
		var easter = new Date(calcoloPasqua(year));
		if(today > easter){
			easter = new Date(calcoloPasqua(year + 1));
			natDays.push([easter.getDate(), easter.getMonth()+ 1]);
		}else{
			natDays.push([easter.getDate(), easter.getMonth()+ 1]);
		}
		
		for (i = 0; i < natDays.length; i++) {
			if (date.getMonth() == natDays[i][1] - 1 
					&& date.getDate() == natDays[i][0]) {
				return [false, ''];
			}
		}
		return [true, ''];
	} else {
			return noWeekend;
	}
	
	
}


function calcoloPasqua(year){
	var a = year % 19;
	var b = Math.floor(year/100);
	var c = year % 100;
	var d = Math.floor(b/4);
	var e = b % 4;
	var f = Math.floor((b+8) / 25);
	var g = Math.floor((b-f+1) / 3);
	var h = (19*a + b - d - g + 15) % 30;
	var i = Math.floor(c/4);
	var j = c % 4;
	var k = (32 + 2*e + 2*i - h - j) % 7;
	var m = Math.floor((a + 11*h + 22*k) / 451);
	var month = Math.floor((h + k - 7*m + 114) / 31)-1;
	var day = ((h + k - 7*m +114) % 31) + 1;
	var easter = new Date(year,month,day);
	var dayOffset = 1; // 
	var millisecondOffset = dayOffset * 24 * 60 * 60 * 1000;
	easter.setTime(easter.getTime() + millisecondOffset); 

	return easter.getTime();
}


//  *********************************  POPUP DIALOG AJAX  *******************************
$.fn.ajaxDialog = function (idDivDialog, url, customDialogOptions, autoOpen) {

	var divDialog = $('<div />').attr('id', idDivDialog).appendTo('body');			
	var	defaultDialogOptions = {
			autoOpen: false,
			width: 630,
			minHeight: 150,
			bgiframe: true,
			modal: true,
			title: 'Popup',
			position: { my: "center", at: "center", of: window},
			resizeStop: function(event, ui) {
				divDialog.css('max-height', ($(window).height() - 80) + 'px');
			}
		};
	var options = $.extend({},defaultDialogOptions,customDialogOptions);

	if(autoOpen === true) {
		options.close = function(event,ui){
			divDialog.remove();
		}
	}
	
	divDialog.css('max-height', ($(window).height() - 80) + 'px');
	divDialog.dialog(options);
	
	var openDialog = function() {
		var loadingImg = $('<img />').attr('src', getPathImages() + 'loading.gif');
		var divImg = $('<div />');
		divImg.css('height', options.minHeight + 'px');
		loadingImg.css('position', 'absolute');
		loadingImg.css('margin-left', '-16px'); //half img
		loadingImg.css('top', '50%');
		loadingImg.css('left', '50%');
		divImg.html(loadingImg);
		divDialog.html(divImg);
		divDialog.dialog('open');
		divDialog.load(url, {}, postLoadCallback);
		
	}
	if(autoOpen === true) {
		openDialog();
	} else if($(this).is(':button') || $(this).is('a')) {
		$(this).click(openDialog);
	} else {
		return;
	}
	
	function postLoadCallback() {
		$(':input', divDialog).css('cursor', '');
		divDialog.dialog('open');
		divDialog.dialog('enable');
		divDialog.dialog('option', 'position', options.position);
		
		loadTableOrd();
					
		var clicked, forms = $('form', divDialog);
		
		submitFun = function() {
			$(':input', divDialog).css('cursor', 'wait');
			divDialog.dialog('disable');
			var params = $(this).serializeArray();
			if(clicked != null) {
				params.push({name: clicked.name, value: clicked.value});
			}
			divDialog.load(this.action, params, postLoadCallback);
			return false;
		}
		
		//submit by JS, es:   this.form.submit()
		forms.each(function() {			
			this.submit = submitFun;
		});
		
		//submit by <input type="submit"
		$(':submit', forms).click(function(e) {
			clicked = e.target;
		});
		forms.submit(submitFun);
		$(divDialog).trigger( "openDialog" );
	}	
}

jQuery.fn.extend({
    valTrigger: function (value) {
        $(this).val(value).trigger("change");
        return $(this).val();
    }
});
