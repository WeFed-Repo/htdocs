//FUNZIONI COMUNI //
/*** IE6 - Browser detection ***/
var isIE6 = ((typeof window.XMLHttpRequest == 'undefined') && (typeof ActiveXObject != 'undefined'));
/*** |FINE| IE6 - Browser detection ***/

function openPopup(address)
{
	window.open(address,"WeTools","scrollbars=auto, width=400, height=350, menubar=no, location=no, status=no");
}
/*** FUNZIONE CHECK E CONVERSIONE SOLO L' ID PER JQUERY SE NECESSARIO ***/
function jqc(element)
{
	var returnVal = element;
	if (jQuery.type(element) === "string")
	{
		//Se non comincia con # o punto mette il #
		returnVal = (element.indexOf("#") !== 0)? "#" + element : element;
	}
	return returnVal;
}
/* Accordion */
function ApriCartImpr (obj, esc) {
	var objEl = $(obj);
	var objImg = objEl.find('.bot:first');
	var objCartCont = objEl.closest('.cartcont');
	if (!objCartCont.length) { objCartCont = objEl.closest('.cartcontimg');}
	var objText = objCartCont.find('.esteso:first');
	if(esc) //caso di accordion auto escudenti - non più d'uno aperto
	{
		var objCont = objEl.closest('.tipoc');
		var objEls = objCont.find('p.tit');
		var objText = objCartCont.find('.esteso:first');
		
		if(objImg[0].src.search('_off.gif')>0)
			{
				for(i=0;i<=objEls.length;i++)
				{
				 var objImgs = objEls.find('.bot:first');
				 var objTexts = objEls.closest('.cartcont').find('.esteso:first');
				 
				$(objTexts).hide();
				$(objImgs).attr('src', $(objImgs).attr('src').replace('_on.gif','_off.gif'));
				$(objText).show();
				$(objImg).attr('src', $(objImg).attr('src').replace('_off.gif','_on.gif'));
				}
			}
			else{ApriCartImpr(obj)}
	}
	else { //caso di accordion NON auto escudenti - pi� d'uno aperto
		objText = objCartCont.find('.esteso');
		if (objImg[0].src.search('_off.gif')>0){
			objText.show();
			objImg.attr('src', objImg.attr('src').replace('_off.gif','_on.gif'));
		} else {
			objText.hide();
			objImg.attr('src', objImg.attr('src').replace('_on.gif','_off.gif'));
		}
	}
}

/* Accordion tr tabelle */
		
function switchDetail(aBtn)
{
	dettagli = aBtn.parentNode.parentNode.nextSibling;
	if (dettagli.className == undefined)
		{
			do  (dettagli = dettagli.nextSibling)
			while (dettagli.className == undefined);
		}
	if (aBtn.className == "espansione")
	{
		aBtn.className = "espansione aperto";
		dettagli.className = "dettaglioespandibile aperto";
	}
	else
	{
		aBtn.className = "espansione";
		dettagli.className = "dettaglioespandibile";
	}
}

/* Checkbox seleziona tutti */
	function selectallcheck(obj) 
	{
		var resulttableb = $(obj).closest('.resulttableb');		
		var inputcheckbox = $(resulttableb).find('input[type=checkbox]').not('noSelect');
		if($(obj).is(':checked')){$(inputcheckbox).prop('checked','checked')}
		else{$(inputcheckbox).prop('checked','')}
	}
	
	
// SETTA CHIOCCIOLA SU ELEMENTO IN CARICAMENTO (usa prototype)
// Rileva il massimo z-index in tutto il documento corrente
function getNextHighestZindex()
{
	var highestIndex = 0;
	$("div").each(function() {
		zInd = (this.style.zIndex) ? parseFloat(this.style.zIndex) : parseFloat($(this).css("z-index"));
		if (!isNaN(zInd) && zInd > highestIndex && zInd < 16777271) 
			{
				highestIndex = zInd;
			}
	});
	return (highestIndex + 1);
}

function getScrollY() {
	if(navigator.appName != "Microsoft Internet Explorer"){
		return window.pageYOffset;
	}
	else
	{
		if (navigator.userAgent.indexOf("MSIE 5.5") > -1)
		{
			return document.body.scrollTop;
		}
		else
		{
			return document.documentElement.scrollTop;
		}
	}
}

/* LOADING OVERLAY */
/*
	Setta il loading overlay
	- L'oggetto overlay ha sempre l'id uguale a quello dell'oggetto origine con append di "_loadingoverlay".
	- obj e' l'oggetto da ricoprire
	- Il parametro opzionale objlowerlimit contiene un eventuale altro id oggetto al quale far "arrivare" l'overlay
	- Il parametro opzionale coloroverlay contiene un eventuale altro colore di sfondo da attribuire all'overlay
	- Il parametro opzionale imgBck contiene un eventuale immagine di sfondo da attribuire all'overlay
*/

function setLoadingOnObject (idobj,idobjlowerlimit, coloroverlay, imgBck) 
{
	   var obj = $(jqc(idobj));
		idobj = "#" + obj.attr('id');
		objlowerlimit = $(idobjlowerlimit);
	//assegna l'oggetto ad una variabile
	//crea un nuovo div necessario a nascondere tutto con l'id ricavato
	var overlay = $("<div>", {
		'id':  obj.attr('id') + "_loadingoverlay",
		'class': "loadingOverlay"
	});
	if (coloroverlay) {
		overlay.css('backgroundColor', 'coloroverlay');
	}
	if (imgBck) {
		overlay.css('backgroundImage', 'imgBck').addClass('img');
	}
	$('body').append(overlay);
	
	//Proprieta' overlay impostate via JS 
	overlay.css({
		height: obj.height() - 1 + 'px',
		zIndex: getNextHighestZindex(),
		top: obj.offset().top + 'px',
		width: obj.width() + 'px', 
		left: obj.offset().left + 'px'
	});

	//Riassegna le proprieta' in caso di TR
	if (obj.is("tr")) {
		overlay.css({ width: obj.width() - 2 + 'px', left: obj.offset().left + 1 + 'px'	});
	}
	//Reimposta altezza e larghezza se esiste objlowerlimit
	if (objlowerlimit.length) {
		lowerobject = objlowerlimit;
		overlay.height(lowerobject.offset().top - obj.offset().top + lowerobject.height() + 'px');
		overlay.width(lowerobject.offset().left - obj.offset().left + lowerobject.width() + 'px');
		if (lowerobject[0].tagName.toLowerCase() === 'tr') {
			overlay.width(lowerobject.offset().left - obj.offset().left + lowerobject.width() - 2 + 'px');
		}
	} 
	
	//inserisce la chiocciola di caricamento
	var loadingimage = $("<img>");
	//seleziona il da farsi in base alla grandezza dell' overlay
	//determina il padding-top dell'immagine all'interno dell'oggetto loader 
	if (overlay.height() < 37) {
		//chiocciola piccola
		loadingimage.attr('src', '/wscmn/img/ico2inf_loading.gif');
		if (overlay.height() > 16) { loadingimage.css('paddingTop', (overlay.height() / 2) - 8 + 'px'); }	
		else {loadingimage.height(loadingimage.width(overlay.height() - 2 + 'px')); }
	}
	else {
	    // chiocciola grande
		loadingimage.attr('src', '/wscmn/img/ico2inf_loadingbig.gif');
		if (overlay.height() / 2 > 16) {   
		    loadingimage.css('paddingTop', (overlay.height() / 2) - 16 + 'px');
		}
	}
	
	if (overlay.attr('class') == 'loadingOverlay' + ' ' + 'img') {
		//chiocciola piccola
		loadingimage.attr('src', '/img/ret/ico2inf_loading_green.gif');
		if (overlay.height() > 16) { loadingimage.css('paddingTop', (overlay.height() / 2) - 8 + 'px'); }	
		else {
			loadingimage.height((overlay.height() - 2) + 'px');
			loadingimage.width((overlay.height() - 2) + 'px');
		}
	}
	overlay.append(loadingimage);
	
	//Controlla la grandezza dell'overlayer e, qualora superasse lo schermo, mette la chiocciola nella prima posizione verticale in alto visibile
	//L'oggetto esce dallo schermo nella parte superiore
	
	if ((obj.offset().top - $(window).scrollTop()) < 0) {
		//Se l'oggetto sta nello schermo...
		if ((obj.offset().top + overlay.height() - $(window).scrollTop()) > 0) {
			loadingimage.css('paddingTop', ($(window).scrollTop() - obj.offset().top  + 1 + 'px'));
		}
	}
	// L'oggetto esce dallo schermo nella parte inferiore
	else if ((obj.offset().top + overlay.height()) - ($(window).scrollTop() + $(window).height()) > 0) {
		//Se l'oggetto sta nello schermo...
		if ((obj.offset().top) - ($(window).scrollTop() + $(window).height() ) < 0) {
			loadingimage.css('paddingTop', '1px');
		}
	}
	// Addiziona l'evento onresize per tutti gli elementi loading in overlay se la funzione non e' definita
	$(window).on("resize", loadinglayersResize);
}

 /*
	Rileva il loading overlay dall'id di obj e lo distrugge
*/
function unsetLoadingOnObject (idobj) {
    idobj = jqc(idobj);
	var overlay = $(idobj + '_loadingoverlay');
	if (overlay.length) overlay.remove();
	
	// Se non sono piu' visibili loading overlay rimuove la funzione onresize
	if (!$('div.loadingOverlay').length) { $(window).off("resize", loadinglayersResize); }
}
 
 
/*
	Se si ridimensiona lo schermo...
*/
function loadinglayersResize () 
{
var loadinglayers = $('div.loadingOverlay');
for (i=0; i<loadinglayers.length; i++)
	{
	var obj = $('#' + loadinglayers[i].id.replace('_loadingoverlay','')).eq(0);
	loadinglayers[i].style.left = obj.offset().left + 'px';
	if (obj.attr('tagName').toLowerCase() == 'tr')
		{
		loadinglayers[i].style.left = obj.offset().left + 1 + 'px';
		}
	}
 }

 /* Posizione di un elemento*/
 function objPosition(el) {
	var posleft = postop = 0;
	if (el.offsetParent) {
	  posleft = el.offsetLeft
	  postop = el.offsetTop
	  while (el = el.offsetParent) {
	   posleft += el.offsetLeft
	   postop += el.offsetTop
	  }
	}
	var result = new Object ();
	result['left']  = posleft ;
	result['top']  = postop ;
	return result;
}

// RIMUOVE CHIOCCIOLA SU CARICAMENTO
/* Tooltip */
function showTooltip(el, message)
{
	toolTip = document.getElementById("tooltip");
	if (!toolTip)
	{
		toolTip = document.createElement("div");
		toolTip.id = "tooltip";
		var firstnode = document.getElementsByTagName("body")[0].firstChild;
		firstnode.parentNode.insertBefore(toolTip,firstnode);
		toolTip.style.zIndex = getNextHighestZindex();
	}
	toolTip.innerHTML = "<div>" +  message + "</div>";
	toolTip.style.visibility = "hidden";
	toolTip.style.display = "block";
	//Calcolo della posizione dell'oggetto
	toolTip.style.top = (objPosition(el)['top'] + el.offsetHeight) + "px" ;
	toolTip.style.left = (objPosition(el)['left']- Math.round(toolTip.offsetWidth/2) + Math.round(el.offsetWidth/2)) + "px";
	toolTip.style.visibility = "visible";
}

function hideTooltip()
{
	toolTip.style.display = "none";
}
// Fine tooltip

/* TABELLA AD ESPANSIONE A RIGHE */
function switchDetailRows (button)
{
	var rigaorigine = button.parentNode.parentNode;
	var tuttelerighe = rigaorigine.parentNode.getElementsByTagName("TR");
	
	if (rigaorigine.className=='green')
	{
		//chiude
		rigaorigine.className='espandibile';
		classasis = "dettaglioespandibile aperto";
		classtobe = "dettaglioespandibile"; 
	}
	
	else if (rigaorigine.className=='grigio green')
	{
		//chiude
		rigaorigine.className='espandibile grigio';
		classasis = "dettaglioespandibile aperto";
		classtobe = "dettaglioespandibile"; 
	}
	
	else if (rigaorigine.className=='espandibile grigio')
	{
		//apre
		rigaorigine.className='grigio green';
		classasis = "dettaglioespandibile";
		classtobe = "dettaglioespandibile aperto"; 
	}
	
	else
	{
		//apre
		rigaorigine.className = 'green';
		classasis = "dettaglioespandibile";
		classtobe = "dettaglioespandibile aperto";
	}
	
	
	
	
	for (i=0;i<tuttelerighe.length;i++)
		{
			if (tuttelerighe[i] == rigaorigine)
			{
				
				if (tuttelerighe[i+1])
				{
					x = i + 1;
					
					stop = true;
					do
					{
						if (tuttelerighe[x].className == classasis) tuttelerighe[x].className = classtobe;
						
						x++;
						if (tuttelerighe[x])
						{
							if (tuttelerighe[x].className != classasis) stop = false;
						}
						else
						{
							stop = false;
						}
					} while (stop);
				}
			}
		
	
		}
		
	
		
}


/*** TOOLTIP UNICO - Tooltip da usare su tutto il sito ***
 *
 * @author      Andrea Colanicchia
 */

// Crea il tooltip posizionandolo relativamente alla posizione del mouse
// dim: pu� avere come valore 'large', 'medium', 'small' oppure un numero per la larghezza in pixel
function createUniqTooltip (e, el, dim) {
	el = $(el)
	e = $.event.fix(e || window.event);
	if (el.length) { //controlla se l'elemento esiste
		var uniqTooltipText = ((el.hasClass('uniqTooltipText')) || (el.hasClass('uniqTooltipIco')))? el : el.closest('.uniqTooltipText'),
			idTooltip = 'uniqTooltip',
			isStatic = uniqTooltipText.hasClass('static'), //tooltip che non si sposta col mouse, e si richiude da solo
			isFixed = uniqTooltipText.hasClass('fixed'), //tooltip che non si sposta col mouse e si apre al click 
			isOver = uniqTooltipText.hasClass('over'), //tooltip che si apre con il testo sopra e la freccia verso il basso
			
			offsetTop = 22,
			offsetLeft = 0,
			offsetParent = $('body:first'),
			elPos = uniqTooltipText.find('.uniqTooltipPos:first');
		
		if (isStatic || isFixed) {
			idTooltip = uniqTooltipText.attr('id') + 'tooltip';
			offsetLeft = (isOver)? 0 : 0;
			offsetTop = isStatic? 0 : -4;
			offsetParent = el.offsetParent();
			
			if (offsetParent.attr('tagName') && offsetParent.attr('tagName').toUpperCase() == 'HTML') offsetParent = uniqTooltipText;
		}
		
		if (isFixed){
			el[0].parentNode.className ='opened';
		}
		
		var idTooltipIframe = idTooltip + 'Iframe',
			tooltip = $('#' + idTooltip),
			tooltipIframe = $('#' + idTooltipIframe);
		
		//Crea il tooltip, se non esiste
		if (!tooltip.length) {
			if (isNaN(parseFloat(dim))) {
				switch (dim) {
					case 'large':
						var body = '<div class="uniqTooltipBody blarge">',
							arrow = '<div class="uniqTooltipArrow alarge">',
							arrowgiu = '<div class="uniqTooltipArrowgiu alarge"></div>';
						break;
					case 'medium':
						var body = '<div class="uniqTooltipBody bmedium">',
							arrow = '<div class="uniqTooltipArrow amedium">',
							arrowgiu = '<div class="uniqTooltipArrowgiu amedium"></div>';
						break;
					case 'small':
						var body = '<div class="uniqTooltipBody bsmall">',
							arrow = '<div class="uniqTooltipArrow asmall">',
							arrowgiu = '<div class="uniqTooltipArrowgiu asmall"></div>';
						break;
					default:
						var body = '<div class="uniqTooltipBody bsmall">',
							arrow = '<div class="uniqTooltipArrow">',
							arrowgiu = '<div class="uniqTooltipArrowgiu"></div>';
						break;
				}
			} else  {
				var arrowPos = Math.floor(parseFloat(dim) / 2) - 5,
					body = '<div class="uniqTooltipBody bsmall" style="width:' + dim + 'px">',
					arrow = '<div class="uniqTooltipArrow" style="left:' + arrowPos + 'px">',
					arrowgiu = '<div class="uniqTooltipArrowgiu"></div>';
			}
			
			//Aggiunta iconcina di chiusura per il tooltip
			if (isOver) {
				tooltip = $('<div id="' + idTooltip + '" class="uniqTooltip"></div>').html(
					'<div class="uniqTooltipPos">' +
						body +
						'<a class="closeUniqTooltip" href="javascript:void(0);" onclick="removeUniqTooltip(event, document.getElementById(\''+ idTooltip.replace("tooltip","") +'\'))">&nbsp;</a>' + 
							'<div class="uniqTooltipContent">' +
								uniqTooltipText.find('.uniqTooltipInnerHTML')[0].innerHTML + 
							'</div>' + arrowgiu  +
						'</div>'
					+ '</div>');
			}
			else {
				tooltip = $('<div id="' + idTooltip + '" class="uniqTooltip"></div>').html(
					'<div class="uniqTooltipPos">' +
						arrow + '</div>' +
						body +
							'<div class="uniqTooltipContent">' +
								uniqTooltipText.find('.uniqTooltipInnerHTML')[0].innerHTML +
							'</div>' + 
						'</div>' 
						
					+ '</div>');
			}
				
			offsetParent.append(tooltip);
		}
		
		if (isIE6) {
			if (!tooltipIframe.length) {
				tooltipIframe = $('<iframe src="" id="' + idTooltipIframe + '" class="objIframe"></iframe>').hide();
				offsetParent.append(tooltipIframe);
			}
		}
		
		var tooltipDim = { height: tooltip.height(), width: tooltip.width() },
			tooltipBody = tooltip.find('.uniqTooltipBody:first'),
			tooltipBodyDim = { height: tooltipBody.height(), width: tooltipBody.width() },
			tooltipBodyPos = tooltipBody.position(),
			elDim = { height: el.height(), width: el.width() },
			tooltipTop, tooltipLeft,
			viewportWidth = $(window).width(),
			viewportScrollLeft = $(window).scrollLeft();
		
		tooltip.removeClass('left');
		tooltip.removeClass('right');

		if (isStatic || isFixed) { //tooltip in posizione fissa
			if (isIE6 == false) {
				if (isOver) {tooltipTop = -tooltipBodyDim.height - tooltip.find('.uniqTooltipArrowgiu:first').height(); }
				else {tooltipTop = elDim.height;}
			}
			else {
				if (isOver) {tooltipTop = - tooltipBodyDim.height;}
				else {tooltipTop = elDim.height;}
				
			}
			
			tooltipTop += offsetTop;

			var tooltipLeft = (offsetLeft - Math.floor(tooltipBodyDim.width / 2) + Math.floor(elDim.width / 2));
		}
		else { //tooltip che si muove con il mouse
			var mouseLeft = e.pageX,
				mouseTop = e.pageY;
			tooltipLeft = (offsetLeft + mouseLeft - Math.floor(tooltipBodyDim.width / 2));
			
			tooltipTop = offsetTop + mouseTop;
		
			if ((tooltipLeft < viewportScrollLeft) || (tooltipBodyDim.width > viewportWidth)) {
				tooltip.addClass('left');
				tooltipLeft = mouseLeft - 11;
			}
			else if ((tooltipLeft - viewportScrollLeft + tooltipBodyDim.width) > viewportWidth) {
				tooltip.addClass('right');
				tooltipLeft = mouseLeft - tooltipBodyDim.width + 11;
			}
		}

		if (isIE6) {
			tooltipIframe.css({
				top: tooltipTop + 'px',
				left: tooltipLeft + 'px',
				width: tooltipDim.width + 'px',
				height: tooltipBodyDim.height + 6 + 'px',
				display: 'block',
				zIndex: 1000
			});
		
			if (!isStatic && !isFixed) {
				tooltip.css({
					width: tooltipBodyDim.width + 'px'
				});
			}
		}
		
		tooltip.css({
			width: tooltipBodyDim.width + 'px',
			height: tooltipBodyDim.height + 6 + 'px',
			top: tooltipTop + 'px',
			left: tooltipLeft + 'px',
			zIndex: 1001
		});
	
		//il tooltip statico si richiude da solo dopo 0,5 secondi
		if (isStatic) {
			var func = function() { removeUniqTooltip(e, el); }
			
			setTimeout(func, 5000);
		}
	}
}

// Rimuove il tooltip
function removeUniqTooltip(e, el) {
	var el = $(el),
		uniqTooltipText = ((el.hasClass('uniqTooltipText')) || (el.hasClass('uniqTooltipIco')))? el : el.closest('.uniqTooltipText'),
		idTooltip = 'uniqTooltip',
		isStatic = uniqTooltipText.hasClass('static'), //true se classe tooltip contiene 'static'
		isFixed = uniqTooltipText.hasClass('fixed'); //true se classe tooltip contiene 'fixed'
	
	if ((isStatic) || (isFixed)) {
		idTooltip = uniqTooltipText.attr('id') + 'tooltip';
	}
	if (isFixed){
			el[0].parentNode.className = 'closed';
	}
	var idTooltipIframe = idTooltip + 'Iframe',
		tooltip = $('#' + idTooltip),
		tooltipIframe = $('#' + idTooltipIframe);
	
	if (tooltip.length) tooltip.remove();
	
	if (isIE6) {
		if (tooltipIframe.length) tooltipIframe.remove();
	}
}

function updateUniqTooltip(e, el) {
	var el = $(el), uniqTooltipText = ((el.hasClass('uniqTooltipText')) || (el.hasClass('uniqTooltipIco')))? el : el.closest('.uniqTooltipText'),
		idTooltip = 'uniqTooltip',
		isStatic = uniqTooltipText.hasClass('static'), //true se classe tooltip contiene 'static'
		isFixed = uniqTooltipText.hasClass('fixed'), //true se classe tooltip contiene 'fixed'
		isOver = uniqTooltipText.hasClass('over'); //true se classe tooltip contiene 'over'
	
	if ((isStatic) || (isFixed)) idTooltip = uniqTooltipText.attr('id') + 'tooltip';
	
	var tooltip = $('#' + idTooltip);
	
	//Aggiorna il tooltip, se esiste
	if (tooltip.length) {
		var tooltipContent = tooltip.find('.uniqTooltipContent:first'),
			hiddenContent = el.find('.uniqTooltipInnerHTML:first');
		
		tooltipContent.html(hiddenContent.html());
	}
}
/*** |FINE| TOOLTIP UNICO - Tooltip da usare su tutto il sito ***/


//identifica la meta' orizzontale della pagina
function getPageWidth () {
	// the more standards compliant browsers (mozilla/netscape/opera/IE7)
	if (typeof window.innerWidth != 'undefined') {
		return window.innerWidth
	}
	// IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)
	else if (typeof document.documentElement != 'undefined'
			&& typeof document.documentElement.clientWidth !=
			'undefined' && document.documentElement.clientWidth != 0) {
		return document.documentElement.clientWidth
		viewportheight = document.documentElement.clientHeight
	}
	// older versions of IE
	else {
		return document.getElementsByTagName('body')[0].clientWidth
	}
}

function getPageHeight () {
	// the more standards compliant browsers (mozilla/netscape/opera/IE7)
	if (typeof window.innerHeight != 'undefined') {
		return window.innerHeight
	}
	// IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)
	else if (typeof document.documentElement != 'undefined'
			&& typeof document.documentElement.clientHeight !=
			'undefined' && document.documentElement.clientHeight != 0) {
		return document.documentElement.clientHeight
	}
	// older versions of IE
	else {
		return document.getElementsByTagName('body')[0].clientHeight
	}
}

//scrolling amount
function getScrollY() {
	if(navigator.appName != "Microsoft Internet Explorer"){
		return window.pageYOffset;
	}
	else
	{
		if (navigator.userAgent.indexOf("MSIE 5.5") > -1)
		{
			return document.body.scrollTop;
		}
		else
		{
			return document.documentElement.scrollTop;
		}
	}
}
		
//tab credenziali		
function selectTab(el, contentPrefix, tabIndex) {
	if ($(contentPrefix + tabIndex)) {
	
		
		$(el).closest('tr').find('td').each(function (index) {
			if (index === tabIndex) {
				$(this).addClass('on').removeClass('off');
				$(contentPrefix + index).show();
			} else {
				$(this).removeClass('on').addClass('off');
				$(contentPrefix + index).hide();
			}
		});
	}
}

function openPopupLeg(address)
{
	window.open(address,"WeTools","scrollbars=yes, width=400, height=350, menubar=no, location=no, status=no");
}

/* WRAPPER PER EX Generic Call*/
function AJAXGenericCall(method, url, successFunc, failureFunc, parameters, type) {
	if (!type) type = "json"; 
	jqAJAXCall(method, type, url, successFunc, failureFunc, parameters);
}

/* Wrapper per Ajax Request */
function jqAJAXCall(method, type, url, successFunc, failureFunc, parameters) {
	var ajaxOptions = { type: method, url: url };
	// 'json', 'xml', 'html'
	if (type) { ajaxOptions.dataType = type; }
	if (successFunc) { ajaxOptions.success = successFunc; }
	if (failureFunc) { ajaxOptions.error = failureFunc; }
	if (parameters) { ajaxOptions.data = parameters}
	$.ajax(ajaxOptions);
}

/* Espansione riga tabella protafoglio extra */
function createDettRow(titRow) {
	var resulttable = titRow.closest('.resulttable'),
		dettRow = resulttable.find('.dettRow:first'),
		divId = titRow.attr('id') + "chartDiv";
	if (titRow.hasClass('selRow')) {
		titRow.removeClass('selRow');
		dettRow.remove();
	}
	else {
		if (dettRow.length) {
			resulttable.find('.selRow:first').removeClass('selRow');
			dettRow.remove();
		}
		titRow.addClass('selRow').after("\n<tr class=\"dettRow\" style=\"border-bottom: 1px dotted #CACACA;\">\n<td colspan=\"7\"><div id=\"" + divId + "\" class=\"chart\"></div></td>\n</tr>");
	}
}

/* GESTIONE ABILITAZIONE/DISABILITAZIONE CAMPI */
function fieldEnable (idObject, enabled)
{
	var obj = $(idObject);
	var objCont = $(obj.parentNode)
	var fields = new Array();
	if (obj.tagName != "INPUT" && obj.tagName != "SELECT" && obj.tagName != "TEXTAREA")
	{
		fields = obj.select("input", "select", "textarea");
	}
	else
	{
		fields.push (obj);
	}
	for (x=0; x < fields.length ; x++)
	{
		if (enabled)
		{
			fields[x].disabled = false;
			fields[x].className = fields[x].className.replace(" disabled","");
		
		}
		else
		{
			fields[x].disabled = true;
			fields[x].className = fields[x].className + "disabled";
		}
	}
}

/* FORMATTAZIONE NUMERI */
// Formatta decimali e migliaia
function formattaNumeriOutput (numero) {
	var segno, parti, result;
	segno = (parseFloat(numero) < 0)? '-' : '';
	parti = numero.toString().replace(segno, '').split('.');
	result = segno + formatDots(parti[0]);
	// Controllo se ci sono i decimali
	if (parti.length > 1) {
		result += ',' + parti[1];
	}
	return result;
}

/* Formatta migliaia */
function formatDots(numberText)
{
	// inizializza la stringa da "ritornare"
	var formattedNum ="";
	// Converte il numero in stringa
	numberText = numberText + "";
	// crea la nuova stringa partendo dal fondo
	for (x=numberText.length;x>0;x--)
	{
		if((x - numberText.length)%3 == 0 && formattedNum.length>0) formattedNum = "." + formattedNum;
		formattedNum = numberText.substr((x-1), 1) + formattedNum;
	}
	return formattedNum;
}
/* |FINE| FORMATTAZIONE NUMERI */


// oscura tutto
function obscurateAll (opacitylevel)
{
	// controlla che tutto non sia gia'oscurato da qualcosa
	if (!$('#layerpop').length)
	{
		layerpop = $('<DIV>').attr("id","layerpop");
		$("body").append(layerpop);
		if ($('#overlayerLight').length) {$('#layerpop').attr("class","overlayerchiaro")}
		layerpop.css({"height": $(window).height() + 'px',  "margin-top":  $(window).scrollTop() + 'px',"z-index":getNextHighestZindex()});
		if (opacitylevel)layerpop.css({"opacity":opacitylevel/10, "filter" : 'alpha(opacity=' + opacitylevel * 10 + ')'});
		obscuratescroll = function() {layerpop.css("margin-top", $(window).scrollTop() + "px")};
		obscurateresize = function() {layerpop.css("height", $(window).height() + "px")};
		$(window).on("resize",obscurateresize);
		$(window).on("scroll",obscuratescroll);
	}
}

function unobscurateAll ()
{

	if (window.obscurateresize) $(window).off("resize", obscurateresize);
	if (window.obscuratescroll) $(window).off("scroll", obscuratescroll);
	if (layerpop) layerpop.remove(); 
}


// funzione che apre un popup con overlayer
// mode = 'fixed' overlayer con margin-top fisso da css
// mode = 'floating' overlayer sempre centrato nella pagina
function openPopOverLayer (idElement, mode, opacitylevel)
{
	obscurateAll(opacitylevel);
	openAlert(idElement, mode);
}
// chiude l'overlayer + l'oscuratore
function closePopOverLayer (idElement)
{
	closeAlert(idElement);
	unobscurateAll();
}

// apre una popup fissa da css o style nella pagina
// elemento ancora opzionale e serve per agganciare il layer ad un altro elemento di qualsiasi natura (i parametri TOP e LEFT sono configurabili nello
// stile per posizionare l'elemento rispetto a questo)
function openFixedAlert (idElement, anchorElement)
{
	openAlert (idElement, "fixed", anchorElement);
}

// apre una popup sempre centrata nella pagina
function openAlert (idElement, mode, anchorElement)
{
	idOl = jqc(idElement);
	var overlayer = $(idOl),
		// Detect handle draggable
		overdrag = overlayer.find(".handle"),
		overflow = overlayer.find('.overflow'),
		//heightLimit = Math.round($(window).height() * 0.6666666667);
		heightLimit = $(window).height();
	if (!(overlayer.is($("body > div:first-child")))) {
		$("body > div:first-child").before(overlayer);
	}
	// Resetta top e left
	overlayer.css({ "margin-top": 0, "margin-left": 0, "left": 0, "top": 0 })
	overlayer.show();
	
	// FIX PER DRAGGABLE PROTOTYPE DA DISMETTERE
	if (overdrag.length) {
		if (overdrag.attr("onmouseover")) {
			if (overdrag.attr("onmouseover").indexOf("Draggable") > 0) {
				overdrag.attr("onmouseover","");
			}
		}
		overdrag.css("cursor", "move");
		overlayer.draggable({ handle: ".handle", scroll: "window" });
	}
	
	// Toglile il wrapper "overflow" prima di calcolare l'altezza dell'overlayer
	if (overflow.length) {
		overlayer.find('.tithelp:first').unwrap();
	}
	
	// Quando l'altezza del layer e' > di quella della finestra,
	// fissa altezza max dell'overlayer in percentuale della risoluzione dello schermo, usando il wrapper "overflow"
	if(overlayer.outerHeight() > heightLimit)
	{
		overlayer.find('.body').wrapInner('<div class="overflow" />');
		overlayer.find('.overflow').css({
				'height': (heightLimit - 50) + 'px',
				'overflow-y': 'auto',
				'width': '100%'
		});
	}
	
	if (anchorElement)
	{
		idAnchorElement = jqc(anchorElement);
		anchoralertresize =  new Function ("$('"+ idOl + "').css({'margin-left': $('"+ idAnchorElement+ "').offset().left + 'px', 'margin-top': $('"+ idAnchorElement+ "').offset().top + 'px'})");
		$(window).on("resize", anchoralertresize);
		anchoralertresize();
	}
	else if (mode === "fixed" || (overlayer.height() > $(window).height()))
	{
		fixedalertresize = new Function ("$('"+ idOl +"').css({'margin-left': Math.round(($(window).width() - $('"+ idOl +"').width())/2) + 'px'})");
		$(window).on("resize", fixedalertresize);
		fixedalertresize();
	}
	else
	{
		alertresize = new Function ("$('"+ idOl +"').css({'margin-left': Math.round(($(window).width() - $('"+ idOl +"').width())/2) + 'px', 'margin-top': $(window).scrollTop() + Math.round(($(window).height() - $('"+ idOl +"').height())/2) + 'px'})");
		alertscroll =  new Function ("$('"+ idOl +"').css({'margin-top': $(window).scrollTop() + Math.round(($(window).height() - $('"+ idOl + "').height())/2) + 'px'})");
		$(window).on("resize",alertresize);
		$(window).on("scroll",alertscroll);
		alertresize();
	}
	
	
	/* Se l'overlay e' fuori dallo schermo , scolla fino al suo top */
	if (overlayer.offset().top < $(document).scrollTop()) $(document).scrollTop(overlayer.offset().top);
	
	
	overlayer.css("z-index", getNextHighestZindex());
	/* Fine openalert */
}

// chiude un alert qualsiasi (occorre indicarlo se esiste un overlayer o un padre altrimenti si puo' omettere e saranno riabilitate tutte le select
// nella pagina)
function closeAlert (idElement,idFather)
{
	
	idElement = jqc(idElement);
	if ($(idElement).length)
	{
		/* Rimuove tutti gli eventi */
		if (window.alertscroll) $(window).off("scroll", alertscroll);
		if (window.alertresize) $(window).off("resize", alertresize);
		if (window.fixedalertresize) $(window).off("resize", fixedalertresize);
		if (window.anchoralertresize) $(window).off("resize",anchoralertresize)
		
		$(idElement).hide();
		
	}
}