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


/*
 * SWFObject v1.5: Flash Player detection and embed - http://blog.deconcept.com/swfobject/
 */
if(typeof deconcept=="undefined"){var deconcept=new Object();}if(typeof deconcept.util=="undefined"){deconcept.util=new Object();}if(typeof deconcept.SWFObjectUtil=="undefined"){deconcept.SWFObjectUtil=new Object();}deconcept.SWFObject=function(_1,id,w,h,_5,c,_7,_8,_9,_a){if(!document.getElementById){return;}this.DETECT_KEY=_a?_a:"detectflash";this.skipDetect=deconcept.util.getRequestParameter(this.DETECT_KEY);this.params=new Object();this.variables=new Object();this.attributes=new Array();if(_1){this.setAttribute("swf",_1);}if(id){this.setAttribute("id",id);}if(w){this.setAttribute("width",w);}if(h){this.setAttribute("height",h);}if(_5){this.setAttribute("version",new deconcept.PlayerVersion(_5.toString().split(".")));}this.installedVer=deconcept.SWFObjectUtil.getPlayerVersion();if(!window.opera&&document.all&&this.installedVer.major>7){deconcept.SWFObject.doPrepUnload=true;}if(c){this.addParam("bgcolor",c);}var q=_7?_7:"high";this.addParam("quality",q);this.setAttribute("useExpressInstall",false);this.setAttribute("doExpressInstall",false);var _c=(_8)?_8:window.location;this.setAttribute("xiRedirectUrl",_c);this.setAttribute("redirectUrl","");if(_9){this.setAttribute("redirectUrl",_9);}};deconcept.SWFObject.prototype={useExpressInstall:function(_d){this.xiSWFPath=!_d?"expressinstall.swf":_d;this.setAttribute("useExpressInstall",true);},setAttribute:function(_e,_f){this.attributes[_e]=_f;},getAttribute:function(_10){return this.attributes[_10];},addParam:function(_11,_12){this.params[_11]=_12;},getParams:function(){return this.params;},addVariable:function(_13,_14){this.variables[_13]=_14;},getVariable:function(_15){return this.variables[_15];},getVariables:function(){return this.variables;},getVariablePairs:function(){var _16=new Array();var key;var _18=this.getVariables();for(key in _18){_16[_16.length]=key+"="+_18[key];}return _16;},getSWFHTML:function(){var _19="";if(navigator.plugins&&navigator.mimeTypes&&navigator.mimeTypes.length){if(this.getAttribute("doExpressInstall")){this.addVariable("MMplayerType","PlugIn");this.setAttribute("swf",this.xiSWFPath);}_19="<embed type=\"application/x-shockwave-flash\" src=\""+this.getAttribute("swf")+"\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\" style=\""+this.getAttribute("style")+"\"";_19+=" id=\""+this.getAttribute("id")+"\" name=\""+this.getAttribute("id")+"\" ";var _1a=this.getParams();for(var key in _1a){_19+=[key]+"=\""+_1a[key]+"\" ";}var _1c=this.getVariablePairs().join("&");if(_1c.length>0){_19+="flashvars=\""+_1c+"\"";}_19+="/>";}else{if(this.getAttribute("doExpressInstall")){this.addVariable("MMplayerType","ActiveX");this.setAttribute("swf",this.xiSWFPath);}_19="<object id=\""+this.getAttribute("id")+"\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\" style=\""+this.getAttribute("style")+"\">";_19+="<param name=\"movie\" value=\""+this.getAttribute("swf")+"\" />";var _1d=this.getParams();for(var key in _1d){_19+="<param name=\""+key+"\" value=\""+_1d[key]+"\" />";}var _1f=this.getVariablePairs().join("&");if(_1f.length>0){_19+="<param name=\"flashvars\" value=\""+_1f+"\" />";}_19+="</object>";}return _19;},write:function(_20){if(this.getAttribute("useExpressInstall")){var _21=new deconcept.PlayerVersion([6,0,65]);if(this.installedVer.versionIsValid(_21)&&!this.installedVer.versionIsValid(this.getAttribute("version"))){this.setAttribute("doExpressInstall",true);this.addVariable("MMredirectURL",escape(this.getAttribute("xiRedirectUrl")));document.title=document.title.slice(0,47)+" - Flash Player Installation";this.addVariable("MMdoctitle",document.title);}}if(this.skipDetect||this.getAttribute("doExpressInstall")||this.installedVer.versionIsValid(this.getAttribute("version"))){var n=(typeof _20=="string")?document.getElementById(_20):_20;n.innerHTML=this.getSWFHTML();return true;}else{if(this.getAttribute("redirectUrl")!=""){document.location.replace(this.getAttribute("redirectUrl"));}}return false;}};deconcept.SWFObjectUtil.getPlayerVersion=function(){var _23=new deconcept.PlayerVersion([0,0,0]);if(navigator.plugins&&navigator.mimeTypes.length){var x=navigator.plugins["Shockwave Flash"];if(x&&x.description){_23=new deconcept.PlayerVersion(x.description.replace(/([a-zA-Z]|\s)+/,"").replace(/(\s+r|\s+b[0-9]+)/,".").split("."));}}else{if(navigator.userAgent&&navigator.userAgent.indexOf("Windows CE")>=0){var axo=1;var _26=3;while(axo){try{_26++;axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash."+_26);_23=new deconcept.PlayerVersion([_26,0,0]);}catch(e){axo=null;}}}else{try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");}catch(e){try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");_23=new deconcept.PlayerVersion([6,0,21]);axo.AllowScriptAccess="always";}catch(e){if(_23.major==6){return _23;}}try{axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash");}catch(e){}}if(axo!=null){_23=new deconcept.PlayerVersion(axo.GetVariable("$version").split(" ")[1].split(","));}}}return _23;};deconcept.PlayerVersion=function(_29){this.major=_29[0]!=null?parseInt(_29[0]):0;this.minor=_29[1]!=null?parseInt(_29[1]):0;this.rev=_29[2]!=null?parseInt(_29[2]):0;};deconcept.PlayerVersion.prototype.versionIsValid=function(fv){if(this.major<fv.major){return false;}if(this.major>fv.major){return true;}if(this.minor<fv.minor){return false;}if(this.minor>fv.minor){return true;}if(this.rev<fv.rev){return false;}return true;};deconcept.util={getRequestParameter:function(_2b){var q=document.location.search||document.location.hash;if(_2b==null){return q;}if(q){var _2d=q.substring(1).split("&");for(var i=0;i<_2d.length;i++){if(_2d[i].substring(0,_2d[i].indexOf("="))==_2b){return _2d[i].substring((_2d[i].indexOf("=")+1));}}}return "";}};deconcept.SWFObjectUtil.cleanupSWFs=function(){var _2f=document.getElementsByTagName("OBJECT");for(var i=_2f.length-1;i>=0;i--){_2f[i].style.display="none";for(var x in _2f[i]){if(typeof _2f[i][x]=="function"){_2f[i][x]=function(){};}}}};if(deconcept.SWFObject.doPrepUnload){if(!deconcept.unloadSet){deconcept.SWFObjectUtil.prepUnload=function(){__flash_unloadHandler=function(){};__flash_savedUnloadHandler=function(){};window.attachEvent("onunload",deconcept.SWFObjectUtil.cleanupSWFs);};window.attachEvent("onbeforeunload",deconcept.SWFObjectUtil.prepUnload);deconcept.unloadSet=true;}}if(!document.getElementById&&document.all){document.getElementById=function(id){return document.all[id];};}var getQueryParamValue=deconcept.util.getRequestParameter;var FlashObject=deconcept.SWFObject;var SWFObject=deconcept.SWFObject;

/*

/*
    http://www.JSON.org/json2.js
    2011-02-23

    Public Domain.

    NO WARRANTY EXPRESSED OR IMPLIED. USE AT YOUR OWN RISK.

    See http://www.JSON.org/js.html
 */
var JSON;if(!JSON){JSON={}}(function(){function f(n){return n<10?"0"+n:n}if(typeof Date.prototype.toJSON!=="function"){Date.prototype.toJSON=function(key){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+f(this.getUTCMonth()+1)+"-"+f(this.getUTCDate())+"T"+f(this.getUTCHours())+":"+f(this.getUTCMinutes())+":"+f(this.getUTCSeconds())+"Z":null};String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(key){return this.valueOf()}}var cx=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,escapable=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,gap,indent,meta={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},rep;function quote(string){escapable.lastIndex=0;return escapable.test(string)?'"'+string.replace(escapable,function(a){var c=meta[a];return typeof c==="string"?c:"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+string+'"'}function str(key,holder){var i,k,v,length,mind=gap,partial,value=holder[key];if(value&&typeof value==="object"&&typeof value.toJSON==="function"){value=value.toJSON(key)}if(typeof rep==="function"){value=rep.call(holder,key,value)}switch(typeof value){case"string":return quote(value);case"number":return isFinite(value)?String(value):"null";case"boolean":case"null":return String(value);case"object":if(!value){return"null"}gap+=indent;partial=[];if(Object.prototype.toString.apply(value)==="[object Array]"){length=value.length;for(i=0;i<length;i+=1){partial[i]=str(i,value)||"null"}v=partial.length===0?"[]":gap?"[\n"+gap+partial.join(",\n"+gap)+"\n"+mind+"]":"["+partial.join(",")+"]";gap=mind;return v}if(rep&&typeof rep==="object"){length=rep.length;for(i=0;i<length;i+=1){if(typeof rep[i]==="string"){k=rep[i];v=str(k,value);if(v){partial.push(quote(k)+(gap?": ":":")+v)}}}}else{for(k in value){if(Object.prototype.hasOwnProperty.call(value,k)){v=str(k,value);if(v){partial.push(quote(k)+(gap?": ":":")+v)}}}}v=partial.length===0?"{}":gap?"{\n"+gap+partial.join(",\n"+gap)+"\n"+mind+"}":"{"+partial.join(",")+"}";gap=mind;return v}}if(typeof JSON.stringify!=="function"){JSON.stringify=function(value,replacer,space){var i;gap="";indent="";if(typeof space==="number"){for(i=0;i<space;i+=1){indent+=" "}}else{if(typeof space==="string"){indent=space}}rep=replacer;if(replacer&&typeof replacer!=="function"&&(typeof replacer!=="object"||typeof replacer.length!=="number")){throw new Error("JSON.stringify")}return str("",{"":value})}}if(typeof JSON.parse!=="function"){JSON.parse=function(text,reviver){var j;function walk(holder,key){var k,v,value=holder[key];if(value&&typeof value==="object"){for(k in value){if(Object.prototype.hasOwnProperty.call(value,k)){v=walk(value,k);if(v!==undefined){value[k]=v}else{delete value[k]}}}}return reviver.call(holder,key,value)}text=String(text);cx.lastIndex=0;if(cx.test(text)){text=text.replace(cx,function(a){return"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4)})}if(/^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,""))){j=eval("("+text+")");return typeof reviver==="function"?walk({"":j},""):j}throw new SyntaxError("JSON.parse")}}}());

//FUNZIONI COMUNI //
/*** IE6 - Browser detection ***/
var isIE6 = ((typeof window.XMLHttpRequest == 'undefined') && (typeof ActiveXObject != 'undefined'));
/*** |FINE| IE6 - Browser detection ***/

/*** FIX PER I CAMPI  IN IE 7***/
function fixInputIE()  {
//fix per IE7 nel determinare le larghezze
if ($.browser.msie && $.browser.version < 8)
	{
	var inputToFix = $('[type=text]');
	inputToFix.each(function(){
		$(this).css('width',$(this).closest('.focusOut').innerWidth() -16)
		})
	}
}
/***FINE  FIX PER I CAMPI  IN IE 7***/

/*** FOCUS SUI CAMPI****/
function setFocusIn(){
	var inputToFocus = $('#aolleft').find('[type=text],select');
	inputToFocus.wrap('<span class="focusOut"></span>');
	
	inputToFocus.each(function(){
		$(this).bind('focusin', function() {
			if ($(this).closest('.focusIn').length==0)
			{
				$(this).closest('span').attr('class','focusIn')
			}
			
		})
		$(this).bind('focusout', function() {
			$(this).closest('span').attr('class','focusOut')
		})
	})
	}
/*** FINE FOCUS SUI CAMPI****/
/*** CONCRETIZZA UN COUNTER SU UN DATO CAMPO ***/
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
/*** FINE CONCRETIZZA UN COUNTER SU UN DATO CAMPO ***/
// Rileva il massimo z-index in tutto il documento corrente
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
/*** FRAMEWORK TOOLTIP ****/
//Inizializzazione dell'oggetto tooltip
function ttInit ()
{
	ttBox = $("<div>").attr("id","ttBox").html("<div class=\"arrow top\"></div><div id=\"ttCont\"><a id=\"ttClose\" href=\"javascript:;\"></a><div id=\"ttContText\"></div></div><div class=\"arrow bottom\"></div>").hide();
	$("body > *:first-child").before(ttBox);
	ttBoxText = ttBox.find("#ttContText");
	ttBoxArrowTop = ttBox.find(".arrow.top");
	ttBoxArrowBottom = ttBox.find(".arrow.bottom");
	try {
		ttxClose = $("#ttClose");
		if (ttxClose.length) ttxClose.click(function(){ttBox.hide();});
	} catch (err) { }
	$(window).on("resize",ttHide);
}

/* Mostra il tooltip relativo all'oggetto */		
function ttShow(e, ttEl)
{
	
	
	ttEl = (typeof ttEl === 'undefined')? $(this) : ttEl;
	
	if(ttEl.attr("data-tooltip") || ttEl.attr("data-error"))
	{
		switch(ttEl.attr("class"))
		{
			case "small" :
			ttBox.css('width','180px')
			break;
			
			case "medium" :
			ttBox.css('width','400px')
			break;
			
			case "large" :
			ttBox.css('width','600px')
			break;
			
			case "" :
			ttBox.css("width","auto");
			break;
		}
		
		if (ttEl.attr("data-error"))
			{
				ttHtml = (ttEl.attr("data-tooltip").indexOf("#")==0) ? $(ttEl.attr("data-tooltip")).html() : ttEl.attr("data-tooltip");
				ttBox.addClass("error");
			}
		else
			{
				ttBoxText.html(ttEl.attr("data-tooltip")); 
				ttBox.removeClass("error");
			}
		ttBoxArrowBottom.show();
		ttBoxArrowTop.hide();
		ttBox.css("visibility","hidden").show();
		//Posiziona il tooltip
		setTimeout(function(){
		ttBox.position({my: "center bottom", at: "center top", of: ttEl});
		if (ttEl.offset().top < ttBox.offset().top) 
		{
			ttBoxArrowTop.show();
			ttBoxArrowBottom.hide();
		}
	
		ttBox.css({"visibility":"visible","z-index":getNextHighestZindex()});
		},100)
		//var ttxWidth = ($.browser.msie)? (($.browser.version <= 7)? "auto" : ttBoxText.width() + "px") : (ttBoxText.width() + ttxClose.width() + "px");
		//ttBoxText.css("width",ttxWidth);
		
		/* Inverte la posizione della freccia, se necessario */
		
	
		ttBox.show();
		// Ripete lo show, dopo l'apparizione del tastierino numerico
		//setTimeout(function(){if(ttBox.css("display") == "none" && isTouch) ttBox.show();},300);
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
	ttEl = wrapper.find("*[data-tooltip],*[data-error]");
	ttElFocusOut = wrapper.find ("*[data-focusout]");
	if(ttEl.length)
	{
		if (!$("#ttBox").length) ttInit();
		$.each(ttEl,function(i,el)
			{
				if (ttElFocusOut.length) {$(el).focusout(ttHide)}
				//Resetta hide e blur
				
					if ($(el).is("input, textarea"))
					{
						$(el).on("focus", ttShow);
						
						//$(el).on("click", ttShow);
					}
					else
					{
						$(el).on("click", ttShow);
						//$(el).on("focus", ttShow);
					}
			}
		);
	}
	
}
/*** FINE FRAMEWORK TOOLTIP ****/
/*** VISUALIZZAZIONE ACCORDION INTESTATARI ****/

var showAcc = function(idSelect){
	idSelect = $('#' + idSelect);
	$(idSelect).change(function () {
		switch($(this).find("option:selected").text())
		{
			case 'solo a me' :
			$('.aolAccTop').eq(0).hide();
			$('.aolAcc').eq(0).addClass('expanded')
			$('.aolAcc').eq(1).hide();
			$('.aolAcc').eq(2).hide();
			break;
			
			case 'a me ed a un\'altra persona' :
			$('.aolAcc').eq(0).addClass('expanded');
			$('.aolAccTop').eq(0).show();
			$('.aolAcc').eq(1).show().removeClass('expanded');
			$('.aolAcc').eq(2).hide();
			break;
			
			case 'a me e ad altre due persone' :
			$('.aolAcc').eq(0).addClass('expanded');
			$('.aolAccTop').eq(0).show();
			$('.aolAcc').eq(1).show().removeClass('expanded')
			$('.aolAcc').eq(2).show().removeClass('expanded')
			break;
		}
	fixInputIE();
	})

}
/*** FINE VISUALIZZAZIONE ACCORDION INTESTATARI ****/
/*** OGGETTO ESPANDIBILE ***/
/* Valorizzare exclusive come true se l'apertura dell'accordion deve chiudere tutti gli altri*/
function switchExp(abutt, exclusive)
{
	var accordion = $(abutt).closest('.aolAcc,.expandable');
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
	fixInputIE();
}
/*** FINE OGGETTO ESPANDIBILE ***/



$(window).on("load", function (){ttSet($('body')),setFocusIn(),fixInputIE(),showAcc('num_intestatari')});