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
/** * IE6 - Browser detection ** */
var isIE6 = ((typeof window.XMLHttpRequest == 'undefined') && (typeof ActiveXObject != 'undefined'));
/** * |FINE| IE6 - Browser detection ** */

/* Setta l'errore nel campo */
function setError(fieldId, message)
{
	//Risale indietro fino al suo PARENT predisposto ad accogliere la classe error
	field = ('#' + fieldId);
	errorBox = field;
	
	if (!($(errorBox).attr("tagName") == "FIELDSET" || $(errorBox).hasClass('fieldblock') || $(errorBox).hasClass('aolAccTitle')))
	{
		var errorfather = $(errorBox).parent().get(0);
		if($(errorBox).parent().get(0).tagName!='LABEL') {if($(errorBox).closest('span').hasClass('uniqTooltipPos')){var errorfather = $(errorBox).parents().eq(3);}else {var errorfather = $(errorBox).parent().get(0);}}
		else{var errorfather = $(errorBox).closest('fieldset')}
	$(errorfather).addClass('error');
	}
	else{$(errorBox).addClass('error');}
	
//Se � settato il messaggio, lo cambia come richiesto
	if (message)
	{
		var errorspans = $(errorBox).closest('.error').find('span.errortext');
		if (errorspans.parent().get(0) == errorBox)
		{
			errorspans.text(message);
		}
		else
		{
			errorspans.text('');
			errorspans.filter(':last').text(message);
		}
		
	
	}
	
}

/* Resetta l'errore nel campo */
function unsetError(fieldId)
{
	//Risale indietro fino al suo PARENT predisposto ad accogliere la classe error
	field = ('#' + fieldId);
	errorBox = field;
		if (!($(errorBox).attr("tagName") == "FIELDSET" || $(errorBox).hasClass('fieldblock') || $(errorBox).hasClass('aolAccTitle')))
	{
		var errorfather = $(errorBox).parent().get(0);
		if($(errorBox).parent().get(0)){
		if($(errorBox).parent().get(0).tagName!='LABEL') {if($(errorBox).closest('span').hasClass('uniqTooltipPos')){var errorfather = $(errorBox).parents().eq(3);}else {var errorfather = $(errorBox).parent().get(0);}}
		
		else{var errorfather = $(errorBox).closest('fieldset')}
		}
		$(errorfather).removeClass('error');
	}
	else{$(errorBox).removeClass('error');}
}


/* FINE GESTIONE ERRORI */
/* funzione che disabilita l'accordion*/
function disableAcc(obj,id,secondId) {
$(id).parentNode.className='aolAcc';
 if(obj.checked) 
	{$(id).hide(); $(secondId).show(); }
	else{$(id).show();  $(secondId).hide();}
 
}

/* Funzione di addizione/rimozione generica eventi */
function addEvent(o, n, h) {
	// alert(o);
	if (o.attachEvent){
		// alert("attachEvent");
		o.attachEvent("on" + n, h);
	} else {
		// alert("addEventListener " + n + h);
		o.addEventListener(n, h, false);
	}
}
function removeEvent(o, n, h) {
	// alert(o);
	if (o.attachEvent){
		// alert("attachEvent");
		o.detachEvent("on" + n, h);
	} else {
		// alert("addEventListener " + n + h);
		o.removeEventListener(n, h, false);
	}
}

/* Mette la barra verde automaticamente a fianco al blocco AOL corrispondente al campo in focus */
function activeAolBlocks()
{
	aolblocks = $(".aolblock");
	for (i=0; i<aolblocks.length; i++)
	{
		aolblockfields = new Array();
		for (x=0; x<aolblocks[i].getElementsByTagName("INPUT").length; x++) aolblockfields.push(aolblocks[i].getElementsByTagName("input")[x]);
		for (x=0; x<aolblocks[i].getElementsByTagName("SELECT").length; x++) aolblockfields.push(aolblocks[i].getElementsByTagName("select")[x]);
		for (x=0; x<aolblocks[i].getElementsByTagName("TEXTAREA").length; x++) aolblockfields.push(aolblocks[i].getElementsByTagName("textarea")[x]);
		for (x=0; x<aolblocks[i].getElementsByTagName("A").length; x++) aolblockfields.push(aolblocks[i].getElementsByTagName("A")[x]);
		
		for (x=0; x<aolblockfields.length; x++)
		{
			$(aolblockfields[x]).attr("aolblockindex", i);
			
			if (navigator.userAgent.indexOf('Chrome/') > 0 || navigator.userAgent.indexOf('Safari/') > 0 ) 
			{
			$(aolblockfields[x]).bind('click',function(event){this.focus()})
			
			
			}
			$(aolblockfields[x]).bind('focus', function(event){ if(aolblocks[this.getAttribute("aolblockindex")].className.indexOf(" on")<0) aolblocks[this.getAttribute("aolblockindex")].className = aolblocks[this.getAttribute("aolblockindex")].className + " on";})
			$(aolblockfields[x]).bind('blur', function(event){aolblocks[this.getAttribute("aolblockindex")].className = aolblocks[this.getAttribute("aolblockindex")].className.replace(" on","")})
		}
	}
	
}

/* Concretizza un counter su un dato campo */
function setCounterOnField (idField, maxChar)
{
	var fieldToCount = $(idField);
	var fieldCounter = document.createElement("div");
	fieldCounter.className = "fieldCounter";
	fieldCounter.innerHTML = "<span>" + fieldToCount.value.length + "</span>/" + maxChar + " caratteri";
	var fieldCounterFunction = "counterOnField('" + idField + "','"+ maxChar + "')";
	fieldToCountCont = fieldToCount.parentNode;
	fieldToCountCont.insertBefore(fieldCounter,fieldToCountCont.firstChild);
	fieldToCount.maxChar = maxChar;
	fieldToCount.fieldCounter = fieldCounter.getElementsByTagName("span")[0];
	fieldToCount.onkeyup = function(){this.fieldCounter.innerHTML = this.value.length};
}

/* Scrolla sull'elemento del quale si ha l'id */
function setViewElement (elementId)
{
	elemento = $('#' + elementId).parents().eq(0);
	elemento = $(elemento);
	var offseterror = $('#' + elementId).offset()
	$('html, body').animate({scrollTop:offseterror.top}, 'slow');
	$(elementId).focus();
}


/* Tooltip verde */
function showGreenToolTip(oggetto,testoHtml,e)
{
	oggetto = $(oggetto);
	var greenTooltip = $("greentooltip");
	if ($('#greentooltip').length == 0) 
	{
		greenTooltip = document.createElement("div");
		greenTooltip.id = "greentooltip";
		document.getElementsByTagName("BODY")[0].insertBefore(greenTooltip,document.getElementsByTagName("div")[0]);
	}
	greenTooltip.style.display = 'block';
	greenTooltip.style.visibility = 'hidden';
	greenTooltip.innerHTML = "<p>" + testoHtml + "</p>";
	var offset = oggetto.offset();
	greenTooltip.style.top =offset.top + oggetto.innerHeight() + 6 +'px';
	greenTooltip.style.left = offset.left + "px";
	greenTooltip.style.visibility = 'visible';
}

function hideGreenToolTip(element)
{
	greenTooltip = $("greentooltip");
	if ($('#greentooltip').length != 0) 
	{
		greenTooltip.style.display = 'none';
	}
}

/* Rimuove le diciture opzionale e la relativa classe */
function removeOpt(field, optValue)
{
	if (field.value == optValue)
	{
		field.value = "";
		field.className = "";
	}
}

/* GESTIONE ABILITAZIONE/DISABILITAZIONE CAMPI */
function fieldEnable (idObject, enabled)
{
	var obj = $(idObject);
	var objCont =  $(obj).parent('label').get(0);
	var fields = new Array();
	
	if (obj.nodeName != "INPUT" && obj.nodeName != "SELECT" && obj.nodeName != "TEXTAREA")
	{
		fields = $('obj input', 'obj select', 'obj textarea');
	}
	else
	{
		fields.push (obj);
		
	}
	
	for (x=0; x < fields.length ; x++)
	{
		
		if (enabled==true)
		{
			
			fields[x].disabled = false;
			fields[x].className = fields[x].className.replace("disabled","");
			var miniTT =$(objCont).find('.miniTT:first');
			if (miniTT.length!=0) {miniTT.css('display','none')}
		}
		else
		{
			
			fields[x].disabled = true;
			fields[x].className = fields[x].className + "disabled";
			var miniTT =$(objCont).find('.miniTT:first');
			if (miniTT.length==0) {miniTT.css('display','block')}
		}
	}
}

/* Attivazione link gia' visitati */
function setVisitedLink(aelement)
{
	//Se necessario gli mette la classe visited
	if (aelement.className.indexOf("visited")<0)
	{
		aelement.className = aelement.className + " visited";
	}
	
	//Se non c'� gia' l'immagine (ovvero ci ha gia' cliccato)
	if (aelement.parentNode.parentNode.className)
	{
		if (aelement.parentNode.getElementsByTagName("IMG").length == 0 && aelement.parentNode.parentNode.className == "documentlist")
		{
			visitedimg = document.createElement("img");
			visitedimg.className = "visitedImg";
			visitedimg.src = "/img/img_or_visited.gif"; 
			aelement.parentNode.appendChild(visitedimg);
		}
	}
}

/* Switch aperto/chiuso oggetto espandibile*/
/* Valorizzare exclusive come true se l'apertura dell'accordion deve chiudere tutti gli altri*/
function switchExp(abutt, exclusive)
{
	var accordion = $(abutt.parentNode.parentNode);
	if (accordion.attr('class').indexOf("expanded") >= 0)
	{
		accordion.attr('class', accordion.attr('class').replace("expanded",""));
	}
	else
	{
		
		//Se l'apertura dell'accordion deve essere esclusiva
		if (exclusive)
		{
			accordioncont = $(accordion).parent().get(0);
			var accordions = $(accordioncont).find('.expanded');
			accordions.attr('class', accordion.attr('class').replace("expanded",""));
		}
		accordion.attr('class', accordion.attr('class') + ' ' + 'expanded');
	}
}

/* Apre in overlayer blocco nascosto spalla destra */
function hideCond (obj) 
{
	var contHidden = $(obj).closest('.promoopen').find('span.condizionidetails');
	var contBox = $('#boxpromocont');
	contHidden.fadeOut(300);
	$(obj).removeClass('opened');
	if (contBox) {setTimeout(resetZindex,300)}
}  

/* Assegna z-index progressivi quando overlayer aperto*/
function progZindex()
{
	var cont = document.getElementById('boxpromocont').getElementsByTagName('div');
	for(i=0; i<cont.length; i++) 
	{
		if(cont[i].className.indexOf('boxpromoright')>-1)
			{
				cont[i].style.zIndex = cont.length-i;
			} 
	}
} 
/* riporta zIndex quando overlayer chiuso*/
function resetZindex()
{
	var cont = document.getElementById('boxpromocont').getElementsByTagName('div');
	for(i=0; i<cont.length; i++) 
	{
		if(cont[i].className.indexOf('boxpromoright')>-1)
			{
				cont[i].style.zIndex= 0;
			} 
	}
}
function showCond (obj) 
{
	var contHidden = $(obj).closest('.promoopen').find('span.condizionidetails');
	var contBox = $('#boxpromocont');
	contHidden.fadeIn(300);
	$(obj).addClass('opened');
	if (contBox) //se esistono pi� box racchiusi in un id
		{
			progZindex();
		}
}  
/* Lista doc AOL */
function switchAolDoclist(docpulsante)
{
	aoldoclista = jqc("aoldoclist");
	docimmagine = docpulsante.getElementsByTagName("img")[0];
	if ($(aoldoclista).is(':hidden'))
	{
		docimmagine.src="/img/tit_documentazione_opened.gif";
		$(aoldoclista).fadeIn(300);
		
	}
	else
	{
		docimmagine.src = "/img/tit_documentazione_closed.gif";
		$(aoldoclista).fadeOut(300);
	}
}
/* Apre e chiude tutti gli accordion */
function aolAccOpenAll(aElement)
{
	aolAcc = $(".aolAcc");
	//Seleziona tutti gli accordion
	if (aElement.innerHTML.indexOf("Apri")<0)
	{
		//Chiude tutti gli accordion
		aolAcc.removeClass(" expanded");
		aElement.innerHTML = "Apri tutti";
	}
	else
	{
		//Apre tutti gli accordion
		aolAcc.addClass(" expanded");
		aElement.innerHTML = "Chiudi tutti";
	}
}


/* **** Eventi al load dell'aol *** */
/* Colora il blocco di campi */
addEvent (window,"load", function()
	{
		activeAolBlocks();
		initHiddenCondition();
		checkStyling();
	}
)
function getNextHighestZindex()
{
var highestIndex = 0;
var currentIndex = 0;
var elArray = Array();
if (navigator.userAgent.indexOf("MSIE 5.5") > -1)
{
elArray = document.all;
}
else
{
elArray = document.getElementsByTagName('*');
}
for(var i=0; i < elArray.length; i++){
if(window.getComputedStyle){
currentIndex = parseFloat(document.defaultView.getComputedStyle(elArray[i],null).getPropertyValue('z-index'));
if(!isNaN(currentIndex) && currentIndex >= highestIndex && currentIndex < 16777271){highestIndex = currentIndex;}
}
if (elArray[i].currentStyle){
//stile dell'elemento
currentIndex = parseFloat(elArray[i].currentStyle['zIndex']);
if(!isNaN(currentIndex) && currentIndex >= highestIndex && currentIndex < 16777271){highestIndex = currentIndex;}
}
if (elArray[i].style.zIndex){
//stile dell'elemento
currentIndex = parseFloat(elArray[i].style.zIndex);
if(!isNaN(currentIndex) && currentIndex >= highestIndex && currentIndex < 16777271){highestIndex = currentIndex;}
}
}
return(highestIndex+1);
} 
/* WRAPPER PER EX Generic Call*/
function AJAXGenericCall(method, url, successFunc, failureFunc, parameters, type) {
	if (!type) type = "json"; 
	jqAJAXCall(method, type, url, successFunc, failureFunc, parameters);
}

function jqAJAXCall(method, type, url, successFunc, failureFunc, parameters) {
	var ajaxOptions = { type: method, url: url };
	// 'json', 'xml', 'html'
	if (type) { ajaxOptions.dataType = type; }
	if (successFunc) { ajaxOptions.success = successFunc; }
	if (failureFunc) { ajaxOptions.error = failureFunc; }
	if (parameters) { ajaxOptions.data = parameters}
	$.ajax(ajaxOptions);
}

/* Wrapper per Ajax Request */

/*** TOOLTIP UNICO - Tooltip da usare su tutto il sito ***
 *
 * @author      Andrea Colanicchia
 */

// Crea il tooltip posizionandolo relativamente alla posizione del mouse
// dim: pu� avere come valore 'large', 'medium', 'small' oppure un numero per la larghezza in pixel
function createUniqTooltip (e, el, dim, idToAnc) {
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
					case 'extralarge':
						var body = '<div class="uniqTooltipBody blarge">',
							arrow = '<div class="uniqTooltipArrow alarge">',
							arrowgiu = '<div class="uniqTooltipArrowgiu alarge"></div>';
						break;
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
				var arrowPos = Math.floor(parseFloat(dim) / 2) - 5;
				 //tooltip ancorato a contenitore pagina
				 if(idToAnc) {
				 var offsetId = $('#' + idToAnc).offset();
				 var offsetEl = el.offset();
				 var arrowPos =(offsetEl.left - offsetId.left)
				 }
					body = '<div class="uniqTooltipBody" style="width:' + dim + 'px">',
					arrow = '<div class="uniqTooltipArrow" style="left:' + arrowPos + 'px">',
					arrowgiu = '<div class="uniqTooltipArrowgiu" style="left:' + arrowPos + 'px"></div>';
			   
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
		
		var tooltipDim = {height: tooltip.height(), width: tooltip.width()},
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
			//parametro che ne determina il posizionamento
			
			if(idToAnc){
			    tooltipLeft = 0;
				var offsetId = $('#' + idToAnc).offset();
				var offsetEl = el.offset();
				tooltip.css('margin-left', -(offsetEl.left - offsetId.left));
				}
				
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

function showCondOverlayer(obj,elToAnchor) 
{
	//elToAnchor diventa l'elemento padre dell'obj di classe ancoraT
	elToAnchor = ($(obj).closest('.ancoraT').length) ? $(obj).closest('.ancoraT') : $(obj); // altrimenti � l'obj stesso
	var contHidden = $(obj).closest('div').find('.condizionidetailsOverlayer');
	var contHiddenVis = $('.condizionidetailsWrapper .condizionidetailsOverlayer:visible');
	if(contHidden && contHidden.is(':hidden')){
		
		contHidden.show();
		contHidden.css({
			'position':'absolute',
			'z-index': getNextHighestZindex()
		});
		if(!$(obj).attr('data-AnchorPosition')) 
		{
		contHidden.position({my: "center bottom", at: "center top", of: elToAnchor}); //DI DEFAULT LO ANCORA CENTRATO ALTRIMENTI SI POSSONO AGGIUNGERE DATA NELL'HTML E COSTRUIRE VARI CASE
		}
		else{
		switch ($(obj).attr('data-AnchorPosition'))
			{
				case "rTrT" :
				contHidden.position({my: "right top", at: "right top", of: elToAnchor});
				break;
				
				case "lBlT" :
				contHidden.position({my: "left bottom", at: "left top", of: elToAnchor, collision: 'none'});
				break;
				
				case "rTrB" :
				contHidden.position({my: "right top", at: "right bottom", of: elToAnchor});
				break;
				
				case "lBlB" :
				contHidden.position({my: "left bottom", at: "left bottom", of: elToAnchor});
				break;
				
			}
		}
		//gestione overlayer in un unico gruppo contemporanei e sovrapposti
		if (contHiddenVis.length)
		{
			if (contHiddenVis.length>0) {contHidden.css('margin-top',10* contHiddenVis.length)};
		}
		
		//if(contHidden.closest('.prodDescription').length){contHidden.addClass('marginNega')}
	}
} 
function hideCondOverlayer(obj) 
{
	var contHidden = $(obj).closest('div').find('.condizionidetailsOverlayer'),
		aClose = contHidden.find('a.closeOverlayer');
	aClose.bind('click',function() {
		contHidden.hide();
		contHidden.css('margin-top',0);
		if(contHidden.hasClass('marginNega')) contHidden.removeClass('marginNega')
	});
} 
function initHiddenCondition()
{
	if ($('.showConditionOverlayer').length) {$('.showConditionOverlayer').bind('click',function(obj,elToAnchor) {showCondOverlayer(this,elToAnchor);hideCondOverlayer(this);});}
} 

/*** FUNZIONE CHE MOSTRA LA MODALITA' BONIFICO ***/
$(function() {$(".modBonificoInput").bind( "click", function() {
	if($(this).is(":checked")) {
		$(this).closest('.aolblockwrapper').find('.listagenzia').eq(0).hide();
		$(this).closest('.aolblockwrapper').find('.modBonifico').eq(0).show();
	}
	else
	{
		$(this).closest('.aolblockwrapper').find('.listagenzia').eq(0).show();
		$(this).closest('.aolblockwrapper').find('.modBonifico').eq(0).hide();
	}
})
})

//funzione per stilizzare i checkbox
function checkStyling() {
	$('input[type=\'checkbox\']').addClass('stilizzato').after('<div class="optiontext"></div>')
}