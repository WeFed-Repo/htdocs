/* FUNZIONI COMUNI */
// Fix trim per IE <= 8
if (typeof String.prototype.trim !== 'function') {
	String.prototype.trim = function() {
		return this.replace(/^\s+|\s+$/g, ''); 
	};
}

// Controlla se una data e' reale
function isDate(sDate) {
	checkDate = sDate.split("/");
	var test = new Date(checkDate[2],checkDate[1],checkDate[0]);
	return (test.toString() === "NaN" || test.toString() === "Invalid Date") ? false : true; 
} 
/* VARIABILI E CONTROLLI PER DISPOSITIVI */
//variabile che controlla se il dipositivo è touch
isTouch = ('ontouchstart' in document.documentElement)? true : false;

//Passa al campo indicato se viene raggiunta una certa lunghezza
function skipnext(el,max,skipfield)
{
	if(!((navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPhone/i)) && isTouch))
	{
		if ($(el).val().length >= max)
		{
			$(skipfield).focus();
		}
	}
}

/* Taglia il testo a x caratteri nei contenitori che lo richiedono */
contTextCut = function(){
	$.each($("*[data-textcut]"),function(){
		var el = $(this);
		var ttCut = el.html();
		var ttLen = parseFloat(el.attr("data-textcut"));
		el.attr("title",ttCut).html((ttCut.length>ttLen) ? ttCut.substring(0,ttLen) + "..." :ttCut);
	});
}

/*** FRAMEWORK TOOLTIP ****/
//Inizializzazione dell'oggetto tooltip
function ttInit ()
{
	ttBox = $("<div>").attr("id","ttBox").html("<div class=\"arrow top\"></div><div class=\"arrow left\"></div><div id=\"ttCont\"><a id=\"ttClose\" href=\"javascript:;\"></a><div id=\"ttContText\"></div></div><div class=\"arrow bottom\"></div>").hide();
	$("body > *:first-child").before(ttBox);
	ttBoxText = ttBox.find("#ttContText");
	ttBoxArrowTop = ttBox.find(".arrow.top");
	ttBoxArrowBottom = ttBox.find(".arrow.bottom");
	ttBoxArrowLeft = ttBox.find(".arrow.left");
	try {
		ttxClose = $("#ttClose");
		if (ttxClose.length) ttxClose.click(function(){ttBox.hide();});
	} catch (err) { }
	$(window).on("resize",ttHide);
}

/* Mostra il tooltip relativo all'oggetto */		
function ttShow(e, ttEl)
{

	if (!$("#ttBox").length) ttInit();
	ttEl = (typeof ttEl === 'undefined')? $(this) : ttEl;
	if(ttEl.attr("data-tooltip") || ttEl.attr("data-error"))
	{
		ttBoxText.css("width","auto");
		var ttHtml = "";
		if (ttEl.attr("data-error"))
			{
				ttHtml = (ttEl.attr("data-error").indexOf("#")===0) ? $(ttEl.attr("data-error")).html() : ttEl.attr("data-error");
				ttBox.addClass("error");
			}
		else
			{
				ttHtml = (ttEl.attr("data-tooltip").indexOf("#")===0) ? $(ttEl.attr("data-tooltip")).html() : ttEl.attr("data-tooltip");
				ttBox.removeClass("error");
			}

		if (ttHtml !== '') {
			ttBoxText.html(ttHtml);
			ttBoxArrowBottom.show();
			ttBoxArrowTop.hide();
			ttBoxArrowLeft.hide();
			ttBox.css("visibility","hidden").show();
			ttBox.position({my: "center bottom", at: "center top", of: ttEl});
			

			// Overflow top/bottom
			if (ttEl.offset().top < ttBox.offset().top) 
			{
				ttBoxArrowTop.show();
				ttBoxArrowBottom.hide();
				ttBoxArrowLeft.hide();
			}

			// Overflow sinistro 
			if (ttBox.offset().left<0) {
				ttBoxArrowTop.hide();
				ttBoxArrowBottom.hide();
				ttBoxArrowLeft.show();	
				ttBox.position({my: "left center", at: "right top", of: ttEl})
			};

			var ttxWidth = ($.browser.msie)? (($.browser.version <= 7)? "auto" : ttBoxText.width() + "px") : (ttBoxText.width() + ttxClose.width()/2 + "px");
			ttBoxText.css("width",ttxWidth);
			ttBox.css({"visibility":"visible","z-index":getNextHighestZindex()});
			/* Inverte la posizione della freccia, se necessario */
			ttBox.show();
			// Ripete lo show, dopo l'apparizione del tastierino numerico
			setTimeout(function(){if(ttBox.css("display") === "none" && isTouch) ttBox.show();},300);
		}
	}
}
/* Nasconde il tooltip*/
function ttHide()
{
	$("#ttBox").hide();
}

// Setting dei tooltip a livello globale
function ttSet(wrapper)
{
	wrapper = $(wrapper);
	//ttEl = wrapper.find("*[data-tooltip],*[data-error]");
	ttEl = wrapper.find("*[data-tooltip], *[data-error], select, input, textarea");
	if(ttEl.length)
	{
		if (!$("#ttBox").length) ttInit();
		$.each(ttEl,function(i,el)
			{
				el = $(el);
				//Resetta hide e blur
				if (el.is("select"))
				{
					el.focus(ttShow);
					//applico il blur solo se non contiene dei link il tooltip
					if (el.is("select") && el.next('.ttHtmlContent').find('a').length===0) {el.blur(ttHide);}
					
				}
				else if (el.is("input, textarea"))
				{
					el.focus(ttShow).keydown(ttHide).blur(ttHide);
				}
				else
				{
					el.click(ttShow);
				}
			}
			
		);
	}
}
$(window).on("load", function () {ttSet($('body')); });
/* FRAMEWORK GESTIONE ERRORI */
/* Setta gli errori in un wrapper, una volta fornita una matrice */
/* Formato della matrice:
	field: "id" o oggetto direttamente
	text: "testo HTML dell'errore "
*/
function setErrors (errorMatrix, wrapper)
{
	wrapper = $(wrapper);
	resetErrors(wrapper);
	if (errorMatrix.length) {
		$.each(errorMatrix, function(index, error) { 
			setError(error.field,error.text,wrapper);
		});
		getFirstError(wrapper);
	}
}

/* resetta tutti gli errori in un wrapper */
function resetErrors(wrapper)
{
	wrapper = $(wrapper);
	wrapper.find("fieldset, .fieldWrap, .pinInput, div[class*=\"span\"],.form-item,label,div[class*=\"col-\"]").removeClass("errore");
	wrapper.find("input[data-error], textarea[data-error], select[data-error], div[data-error], fieldset[data-error],label[data-error], a[data-error]").removeAttr("data-error");
	ttHide();
}

/* Setta l'errore su di un singolo oggetto (campo o altro, risalendo al suo fieldset)*/
function setError(field,errortext,wrapper)
{
	field = $(field);
	// Trova il primo parent contenente un etichetta
	var errorWrapper = $(field).closest("fieldset ,div.fieldWrap, div.pinInput, div[class*=\"span\"], div[class*=\"col-\"],.form-item", wrapper);
	if (!errorWrapper.length) errorWrapper = $(field).closest("fieldset,div.fieldWrap,div.pinInput,div[class*=\"span\"],.form-item,label",wrapper);
	errorWrapper.addClass("errore");
	field.attr("data-error",errortext);
}
/* Posiziona il focus sul primo errore */
function getFirstError(wrapper)
{
	//Cerca nella pagina il primo errore
	var firstErr = wrapper.find("*[data-error]").eq(0);
	if (!($("body").hasClass("webview") && (firstErr.prop("tagName").toLowerCase() == "select"))) {
		firstErr.focus();	
	}
	setTimeout(function(){ttShow(null, firstErr);},10);
}

/* FUNZIONI GENERICHE GESTIONE DEGLI OVERLAYER */
function applyLayer(wrapper, layerobject)
{
	
	var layerid = layerobject.attr("id");
	if (!$("#" + layerid).length)
	{
		//Crea il loading layer e la sua funzione di riposizionamento
		window[layerid] = layerobject;
		window[layerid].attr("wrapperid",wrapper.attr("id"));
	
		window[layerid + "_repos"] = function() {
			if($('#layerpop').length==0)
			{
				$(window[layerid]).removeClass("small");
				$(window[layerid]).css({'width':wrapper.width()+'px', 'height': wrapper.height() + 'px', 'z-index': getNextHighestZindex(),"top":wrapper.offset().top,"left":wrapper.offset().left});
				if (window[layerid].hasClass("loadlayer")) if (wrapper.height() < 40) $(window[layerid]).addClass("small");
			}
		};
	}
	if(!window[layerid].is($("body > *:first-child"))) {
		$("body > *:first-child").before(window[layerid]);
	}
	
	//$(window).on("resize",function() {if($('#layerpop').length==0) {console.log('passa');window[layerid + "_repos"]}});
	$(window).on("resize",window[layerid + "_repos"]);
	$(window).on("scroll",window[layerid + "_repos"]);
	
	window[layerid].attr("id", layerid);
	window[layerid + "_repos"]();
	window[layerid].css("display","none");
	window[layerid].fadeIn();
}

/* LOADING OVERLAY */
function setLoadingOn(wrapper)
{
	wrapper = $(wrapper);
	var layerobject = $("<div>").addClass("loadlayer").attr("id", wrapper.attr("id") + "_loadlayer");
	applyLayer(wrapper, layerobject);
}

function unsetLoadingOn(wrapper)
{
	wrapper = $(wrapper);
	var loadlayerid = wrapper.attr("id") + "_loadlayer";
	if (window[loadlayerid] && window[loadlayerid].length)
	{
		$(window).off("resize",window[loadlayerid + "_repos"]);
		$(window).off("scroll",window[loadlayerid + "_repos"]);
		window[loadlayerid].remove();
		window[loadlayerid] = null;
	}
}

/* GESTIONE OVERLAYER ERRORI
	options.wrapper = contenitore da coprire
	options.msgText = testo HTML del box
	options.boxClass = classe da applicare per definire il tipo di box ('negativo', 'positivo' e 'attenzione')
	options.addictClass = classe addizionale, p.es.	'roundedCorners' per i bordi arrotondati
	options.closeable = (boolean) se il box ha la "X" di chiusura
*/
function setMsgOn(options)
{
	
	options.wrapper = $(options.wrapper);
	var errlayer = $("<div>").addClass("errorlayer").attr("id", options.wrapper.attr("id") + "_errorlayer"), errclose;
	if (typeof options.addictClass !== 'undefined') { errlayer.addClass(options.addictClass); }
	if (typeof options.closeable === 'undefined' || options.closeable) {
		errclose = $("<a>").addClass("errclose").html("&nbsp;")
			.click(function() {
				$(window).off("resize",window[errlayer.attr("id") + "_repos"]);
				$(window).off("scroll",window[errlayer.attr("id") + "_repos"]);
				$(this).closest(".errorlayer").remove(); 
			});
		errlayer.append(errclose);
	}
	errBoxText = $(
		'<div class="boxesito ' + options.boxClass + '">' + 
			'<div class="middle">' + 
				'<span class="imgCont"></span>' + 
				'<div class="text">' + options.msgText + '</div>' + 
			'</div>' + 
		'</div>');
	errlayer.append(errBoxText);
	applyLayer(options.wrapper, errlayer);
	// centra il box di errore verticalmente
	errBoxText.css("margin-top", Math.round((errlayer.height() - errBoxText.height()) / 2) + "px");
}

/* STILIZZAZIONE DEI FORM (base) */
function cChecksSwitch(element,fName,fValue,fBeh)
{
	var relInp = $("input[name="+fName+"]");
	var relBox = (fBeh==="radiobutt") ? $(element) : $(element).parent().find("." + fBeh);
	var allChecks = (fBeh==="radiobutt") ? $(element).parents(".checkContMultiWrap").find("a"): $(element).parents("fieldset").find("." + fBeh);
	//Resetta tutto se il tipo è radio
	if (fBeh === "radio" || fBeh === "radiobutt"){
		allChecks.removeClass("checked");
		relInp.val("");
	}
	if (relInp.val().indexOf(fValue)<0)
	{
		relBox.addClass("checked");
		relInp.val(fValue);
	}
}
function cChecks (fieldType, fieldName, data)
{
	var fd = data.fields;
	var dv = "";
	fieldsHtml = "";
	for(x=0;x<fd.length;x++)
	{
		if (fd[x].defaultValue) dv = fd[x].value;
		checkedAtt = (fd[x].defaultValue) ? " checked" : "";
		switch (fieldType)
		{
			case "radio":
				fieldsHtml= fieldsHtml + "<div class=\"checkCont\"><div class=\""+ fieldType + checkedAtt+"\" onclick=\"cChecksSwitch(this,'"+fieldName+"','"+fd[x].value+"','"+ fieldType + "')\"><div></div></div><label onclick=\"cChecksSwitch(this,'"+fieldName+"','"+fd[x].value+"','"+ fieldType + "')\">"+ fd[x].label + "</label></div>";
				break;
				
			case "radiobutt":
				fieldsHtml= fieldsHtml + "<a href=\"javascript:;\" class=\"" + checkedAtt +"\" style=\"width: "+ 100/fd.length  +"%\"onclick=\"cChecksSwitch(this,'"+fieldName+"','"+fd[x].value+"','"+ fieldType + "')\">"+ fd[x].label + "</a>";
				break;
		}
		
	}
	if (fieldType ==="radiobutt") fieldsHtml = "<div class=\"checkContMultiWrap\">" + fieldsHtml + "</div>";
	fieldsHtml = "<input type=\"hidden\" name=\""+ fieldName +"\" value=\""+ dv + "\" />" + fieldsHtml;
	document.write(fieldsHtml);
}

/* Lettura e scrittura localstorage o cookies */
// Scrittura/lettura dati su localStorage o cookie statico
var wStore = (function(){
	// true se il browser non utilizza localHost (lo inizializza una volta sola)
	var checkStorage = (("localStorage" in window) && window["localStorage"] !== null),

	write = function (key,value,expdays) 
	{
		if(checkStorage)
		{
			// utilizza localStorage
			localStorage.setItem(key, value);
		}
		else
		{
			// Scrive nel cookie
			var expdate=new Date();
			if (typeof expdays == "undefined")
				{			
					expdays= 365;
				}
			expdate.setDate(expdate.getDate() + expdays);
			document.cookie = key + "=" + escape(value) + "; expires=" + expdate.toUTCString();
		}
	},
	
	read = function(key)
	{
		if(checkStorage)
		{
			// legge da localStorage
			return localStorage.getItem(key);
		}
		else
		{
			// Legge dal cookie
			var valToReturn = null;
			$.each(document.cookie.split(";"), function(i, v) {
				if (v.split("=")[0] == key) {
					valToReturn = unescape(v.split("=")[1]);
				}
			});
			return valToReturn;
		}
	}
	
	session = function(key,value){
		var hasSS = (("localStorage" in window) && window["localStorage"] !== null);
		if (hasSS) {
			if (typeof value !="undefined"){
				// Scrive
				sessionStorage[key] = value;
			}
			return sessionStorage[key];
		}
		else
		{
			// Scrive un cookie
			var valToReturn = null;
			if (typeof value !="undefined"){
				var expdate=new Date();
				expdate.setDate(expdate.getDate() + 1);
				document.cookie = key + "=" + escape(value) + "; expires=" + expdate.toUTCString();
			}
			$.each(document.cookie.split(";"), function(i, v) {
				if (v.split("=")[0] == key) {
					valToReturn = unescape(v.split("=")[1]);
				}
			});
			return valToReturn;
		}
	}
	
	return {write: write, read: read, session: session}
}());





/*overlayer contestuale
options.state = aperto/chiuso
options.idOverlayer = id dell'overlayer
option.slideToggle = effetto comparsa
*/

var initOverlayerContext = function(options) {
	var idOverlayer = $('#' + options.idOverlayer),
		state = options.state;
		slideToggleEffect = false;
	openOverlayerContext(state,idOverlayer,slideToggleEffect);
	idOverlayer.find('a.openStateLayer').click(function(){
		if($(this).closest('.overlayerContextTitle').length) {state = 'opened';}
		else{state = 'closed';}
		openOverlayerContext(state,idOverlayer,true);
	});
	idOverlayer.find('.overlayerContextTitle a.openStateLayer').bind('mouseover mouseleave', function(){
		idOverlayer.toggleClass('over');
	});
};

var openOverlayerContext = function(state,idOverlayer,slideToggleEffect) {
	if(state==='opened') { //se l'overlayer deve essere apperto al load della pagina
	
	obscurateAll(4); //mette livello oscurato su tutta la pagina
	idOverlayer.find('.overlayerContextTitle a.openStateLayer').hide(); //nasconde pulsante di apertura della modalita chiuso
	stylesInline = {
		zIndex : getNextHighestZindex(),
		width: $('#objOverlayer').innerWidth()
	};
	idOverlayer.css(stylesInline);
	idOverlayer.closest('.overlayerContextWrapper').css('z-index',getNextHighestZindex());
	}
	
	else if(state==='closed') {
		idOverlayer.find('.overlayerContextTitle a.openStateLayer').show();
		idOverlayer.css('z-index',0);
		idOverlayer.closest('.overlayerContextWrapper').css('z-index',0);
		if($('#layerpop').length) unobscurateAll(); //toglie livello oscurato su tutta la pagina
		ttHide();
	}
	idOverlayer.attr('class', 'overlayerContext' + ' ' + state);
	if(slideToggleEffect) {$('.overlayerContextDetails').slideToggle("100");}
	else if(!slideToggleEffect && state==='opened' ) {$('.overlayerContextDetails').show();}
	else{$('.overlayerContextDetails').hide();}
};

//sotto tab assegnazione classi con hover uguale ad active
function initTabInner(){
	$('.tabInner li.off').delegate('a',"mouseleave mouseover", function() {
		$('.tabInner li').toggleClass('on off');
	});
}

//inizializzazione della libreria uniform
function initUniform (wrapper) {
	var uniformBtn = wrapper.find('.uniformBtn'),
		uniformBtnDis = uniformBtn.filter('.disabled');
	//inizializzazione bottoni abilitati e disabilitati
	if (uniformBtn.length) {
		//elimino le icone di Font Awesome
		uniformBtn.each(function () {
			var btn = $(this),
				iconBefore = btn.find('.icon-before').detach(),
				iconAfter = btn.find('.icon-after').detach(),
				uniformBtnWrapper;
			btn.uniform({
				buttonClass: 'uniformBtnWrapper',
				disabledClass: 'disabled'
			}).html('&nbsp;');
			uniformBtnWrapper = btn.closest('.uniformBtnWrapper');
			// Rimetto le eventuali icone tolte
			if (iconBefore.length) {
				uniformBtnWrapper.find('span:first').prepend(iconBefore);
			}
			if (iconAfter.length) {
				uniformBtnWrapper.find('span:first').append(iconAfter);
			}
			// Applico la classe miniBtn ai bottoni mini
			if (btn.hasClass('miniBtn')) {
				uniformBtnWrapper.addClass('miniBtn');
			}
			// Applico la classe smallBtn ai bottoni piccoli
			if (btn.hasClass('smallBtn')) {
				uniformBtnWrapper.addClass('smallBtn');
			}
			// Applico la classe disabledBtn ai bottoni disabilitati
			if (btn.hasClass('disabledBtn')) {
				uniformBtnWrapper.addClass('disabledBtn');
			}
			// Applico la classe greyBtn ai bottoni disabilitati
			if (btn.hasClass('greyBtn')) {
				uniformBtnWrapper.addClass('greyBtn');
			}
			// Applico la classe ie se l'utente usa IE7-8
			if (isIE7 || isIE8) {
				uniformBtnWrapper.addClass('ie');
			}
		});
	}
}

/* Porting videoplayer per landing */
overPlayVideo = function(videoToPlay){
	var videoCb = function (){
		videolibloaded = true;
		// Crea l'overlay con tanto di container
		if ($("#videoLayer").length == 0) {

			var vidoverlay = $("<div>").addClass("layeralert3").attr({"id":"videoLayer"});
			var vClose = $("<img>").attr({"src":"/img/ret/layeralert_x.gif","alt":"chiudi"}).click(function(){
				$("#videoLayer").hide();
				$("#videoplayer1").empty();
			});
			vidoverlay.append(
				$("<div>").addClass("head").append(vClose),
				$("<div>").addClass("body").append(
					$("<div>").addClass("videoPlayer").attr("id","videoplayer1").css({"min-height":"350px","width":"100%"})
					)
				);
			$("body").append(vidoverlay.hide());
		}
		// Apre l'overlay 		
		openAlert("videoLayer");

		// Inserisce il video 
		getVideo({
			wrapper: "#videoplayer1",
			videopath : videoToPlay,
			autoplay: false,
			initialVolume: 0.8
		});
	}

	if (typeof videolibloaded == "undefined" ) {
		$.getScript("/wscmn/fe/js/priv_videoplayer.js",videoCb);
	}
	else
	{
		videoCb();
	}
}



$(document).ready(function() {
	initUniform($(this));
	contTextCut();
});


/* Funzione gestione errori in tabelle */
var setErrorsOnTable = function(table,obj) {

	resetErrorsOnTable(table);
	if (obj) {
		 $.each(obj,function(k,v){
		 	setErrorOnTable (v.fieldname,v.errortext);
		 });
	}
	 
	// Scrolla sul primo errore
	$("html, body").animate({scrollTop: $(".errorRow").offset().top},500)

}

var setErrorOnTable = function (fieldname,errortext) {

	// Prepara il TR con l'errore
	var trerror = $("<tr>").addClass("erroreTabella").append($("<td>").attr("colspan","2").html(errortext));
	$("*[name='"+fieldname+"']").parents("tr").addClass("errorRow");
	var lastTr = $("*[name='"+fieldname+"']").last().parents("tr");
	lastTr.after(trerror);
	
}

var resetErrorsOnTable = function (tb) {
	tb.find(".errorRow").removeClass("errorRow");
	tb.find(".erroreTabella").remove();
}


/* workaround iFrame*/
$(function(){
	$('#funzione').on("load",function(){
		$('#funzione').contents().find('a,input[type=radio],button').bind('click',function(e) {
		   setTimeout(function(){parent.calcHeight()},100);
		});
	});
});