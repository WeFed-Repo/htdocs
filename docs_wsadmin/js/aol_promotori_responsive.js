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

/**
 * SWFObject v1.5: Flash Player detection and embed - http://blog.deconcept.com/swfobject/
 *
 * SWFObject is (c) 2007 Geoff Stearns and is released under the MIT License:
 * http://www.opensource.org/licenses/mit-license.php
 *
 */
if(typeof deconcept=="undefined"){var deconcept=new Object();}if(typeof deconcept.util=="undefined"){deconcept.util=new Object();}if(typeof deconcept.SWFObjectUtil=="undefined"){deconcept.SWFObjectUtil=new Object();}deconcept.SWFObject=function(_1,id,w,h,_5,c,_7,_8,_9,_a){if(!document.getElementById){return;}this.DETECT_KEY=_a?_a:"detectflash";this.skipDetect=deconcept.util.getRequestParameter(this.DETECT_KEY);this.params=new Object();this.variables=new Object();this.attributes=new Array();if(_1){this.setAttribute("swf",_1);}if(id){this.setAttribute("id",id);}if(w){this.setAttribute("width",w);}if(h){this.setAttribute("height",h);}if(_5){this.setAttribute("version",new deconcept.PlayerVersion(_5.toString().split(".")));}this.installedVer=deconcept.SWFObjectUtil.getPlayerVersion();if(!window.opera&&document.all&&this.installedVer.major>7){deconcept.SWFObject.doPrepUnload=true;}if(c){this.addParam("bgcolor",c);}var q=_7?_7:"high";this.addParam("quality",q);this.setAttribute("useExpressInstall",false);this.setAttribute("doExpressInstall",false);var _c=(_8)?_8:window.location;this.setAttribute("xiRedirectUrl",_c);this.setAttribute("redirectUrl","");if(_9){this.setAttribute("redirectUrl",_9);}};deconcept.SWFObject.prototype={useExpressInstall:function(_d){this.xiSWFPath=!_d?"expressinstall.swf":_d;this.setAttribute("useExpressInstall",true);},setAttribute:function(_e,_f){this.attributes[_e]=_f;},getAttribute:function(_10){return this.attributes[_10];},addParam:function(_11,_12){this.params[_11]=_12;},getParams:function(){return this.params;},addVariable:function(_13,_14){this.variables[_13]=_14;},getVariable:function(_15){return this.variables[_15];},getVariables:function(){return this.variables;},getVariablePairs:function(){var _16=new Array();var key;var _18=this.getVariables();for(key in _18){_16[_16.length]=key+"="+_18[key];}return _16;},getSWFHTML:function(){var _19="";if(navigator.plugins&&navigator.mimeTypes&&navigator.mimeTypes.length){if(this.getAttribute("doExpressInstall")){this.addVariable("MMplayerType","PlugIn");this.setAttribute("swf",this.xiSWFPath);}_19="<embed type=\"application/x-shockwave-flash\" src=\""+this.getAttribute("swf")+"\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\" style=\""+this.getAttribute("style")+"\"";_19+=" id=\""+this.getAttribute("id")+"\" name=\""+this.getAttribute("id")+"\" ";var _1a=this.getParams();for(var key in _1a){_19+=[key]+"=\""+_1a[key]+"\" ";}var _1c=this.getVariablePairs().join("&");if(_1c.length>0){_19+="flashvars=\""+_1c+"\"";}_19+="/>";}else{if(this.getAttribute("doExpressInstall")){this.addVariable("MMplayerType","ActiveX");this.setAttribute("swf",this.xiSWFPath);}_19="<object id=\""+this.getAttribute("id")+"\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\" style=\""+this.getAttribute("style")+"\">";_19+="<param name=\"movie\" value=\""+this.getAttribute("swf")+"\" />";var _1d=this.getParams();for(var key in _1d){_19+="<param name=\""+key+"\" value=\""+_1d[key]+"\" />";}var _1f=this.getVariablePairs().join("&");if(_1f.length>0){_19+="<param name=\"flashvars\" value=\""+_1f+"\" />";}_19+="</object>";}return _19;},write:function(_20){if(this.getAttribute("useExpressInstall")){var _21=new deconcept.PlayerVersion([6,0,65]);if(this.installedVer.versionIsValid(_21)&&!this.installedVer.versionIsValid(this.getAttribute("version"))){this.setAttribute("doExpressInstall",true);this.addVariable("MMredirectURL",escape(this.getAttribute("xiRedirectUrl")));document.title=document.title.slice(0,47)+" - Flash Player Installation";this.addVariable("MMdoctitle",document.title);}}if(this.skipDetect||this.getAttribute("doExpressInstall")||this.installedVer.versionIsValid(this.getAttribute("version"))){var n=(typeof _20=="string")?document.getElementById(_20):_20;n.innerHTML=this.getSWFHTML();return true;}else{if(this.getAttribute("redirectUrl")!=""){document.location.replace(this.getAttribute("redirectUrl"));}}return false;}};deconcept.SWFObjectUtil.getPlayerVersion=function(){var _23=new deconcept.PlayerVersion([0,0,0]);if(navigator.plugins&&navigator.mimeTypes.length){var x=navigator.plugins["Shockwave Flash"];if(x&&x.description){_23=new deconcept.PlayerVersion(x.description.replace(/([a-zA-Z]|\s)+/,"").replace(/(\s+r|\s+b[0-9]+)/,".").split("."));}}else{if(navigator.userAgent&&navigator.userAgent.indexOf("Windows CE")>=0){var axo=1;var _26=3;while(axo){try{_26++;axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash."+_26);_23=new deconcept.PlayerVersion([_26,0,0]);}catch(e){axo=null;}}}else{try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");}catch(e){try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");_23=new deconcept.PlayerVersion([6,0,21]);axo.AllowScriptAccess="always";}catch(e){if(_23.major==6){return _23;}}try{axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash");}catch(e){}}if(axo!=null){_23=new deconcept.PlayerVersion(axo.GetVariable("$version").split(" ")[1].split(","));}}}return _23;};deconcept.PlayerVersion=function(_29){this.major=_29[0]!=null?parseInt(_29[0]):0;this.minor=_29[1]!=null?parseInt(_29[1]):0;this.rev=_29[2]!=null?parseInt(_29[2]):0;};deconcept.PlayerVersion.prototype.versionIsValid=function(fv){if(this.major<fv.major){return false;}if(this.major>fv.major){return true;}if(this.minor<fv.minor){return false;}if(this.minor>fv.minor){return true;}if(this.rev<fv.rev){return false;}return true;};deconcept.util={getRequestParameter:function(_2b){var q=document.location.search||document.location.hash;if(_2b==null){return q;}if(q){var _2d=q.substring(1).split("&");for(var i=0;i<_2d.length;i++){if(_2d[i].substring(0,_2d[i].indexOf("="))==_2b){return _2d[i].substring((_2d[i].indexOf("=")+1));}}}return "";}};deconcept.SWFObjectUtil.cleanupSWFs=function(){var _2f=document.getElementsByTagName("OBJECT");for(var i=_2f.length-1;i>=0;i--){_2f[i].style.display="none";for(var x in _2f[i]){if(typeof _2f[i][x]=="function"){_2f[i][x]=function(){};}}}};if(deconcept.SWFObject.doPrepUnload){if(!deconcept.unloadSet){deconcept.SWFObjectUtil.prepUnload=function(){__flash_unloadHandler=function(){};__flash_savedUnloadHandler=function(){};window.attachEvent("onunload",deconcept.SWFObjectUtil.cleanupSWFs);};window.attachEvent("onbeforeunload",deconcept.SWFObjectUtil.prepUnload);deconcept.unloadSet=true;}}if(!document.getElementById&&document.all){document.getElementById=function(id){return document.all[id];};}var getQueryParamValue=deconcept.util.getRequestParameter;var FlashObject=deconcept.SWFObject;var SWFObject=deconcept.SWFObject;
/*
    http://www.JSON.org/json2.js
    2011-02-23

    Public Domain.

    NO WARRANTY EXPRESSED OR IMPLIED. USE AT YOUR OWN RISK.

    See http://www.JSON.org/js.html
 */
var JSON;if(!JSON){JSON={}}(function(){function f(n){return n<10?"0"+n:n}if(typeof Date.prototype.toJSON!=="function"){Date.prototype.toJSON=function(key){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+f(this.getUTCMonth()+1)+"-"+f(this.getUTCDate())+"T"+f(this.getUTCHours())+":"+f(this.getUTCMinutes())+":"+f(this.getUTCSeconds())+"Z":null};String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(key){return this.valueOf()}}var cx=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,escapable=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,gap,indent,meta={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},rep;function quote(string){escapable.lastIndex=0;return escapable.test(string)?'"'+string.replace(escapable,function(a){var c=meta[a];return typeof c==="string"?c:"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+string+'"'}function str(key,holder){var i,k,v,length,mind=gap,partial,value=holder[key];if(value&&typeof value==="object"&&typeof value.toJSON==="function"){value=value.toJSON(key)}if(typeof rep==="function"){value=rep.call(holder,key,value)}switch(typeof value){case"string":return quote(value);case"number":return isFinite(value)?String(value):"null";case"boolean":case"null":return String(value);case"object":if(!value){return"null"}gap+=indent;partial=[];if(Object.prototype.toString.apply(value)==="[object Array]"){length=value.length;for(i=0;i<length;i+=1){partial[i]=str(i,value)||"null"}v=partial.length===0?"[]":gap?"[\n"+gap+partial.join(",\n"+gap)+"\n"+mind+"]":"["+partial.join(",")+"]";gap=mind;return v}if(rep&&typeof rep==="object"){length=rep.length;for(i=0;i<length;i+=1){if(typeof rep[i]==="string"){k=rep[i];v=str(k,value);if(v){partial.push(quote(k)+(gap?": ":":")+v)}}}}else{for(k in value){if(Object.prototype.hasOwnProperty.call(value,k)){v=str(k,value);if(v){partial.push(quote(k)+(gap?": ":":")+v)}}}}v=partial.length===0?"{}":gap?"{\n"+gap+partial.join(",\n"+gap)+"\n"+mind+"}":"{"+partial.join(",")+"}";gap=mind;return v}}if(typeof JSON.stringify!=="function"){JSON.stringify=function(value,replacer,space){var i;gap="";indent="";if(typeof space==="number"){for(i=0;i<space;i+=1){indent+=" "}}else{if(typeof space==="string"){indent=space}}rep=replacer;if(replacer&&typeof replacer!=="function"&&(typeof replacer!=="object"||typeof replacer.length!=="number")){throw new Error("JSON.stringify")}return str("",{"":value})}}if(typeof JSON.parse!=="function"){JSON.parse=function(text,reviver){var j;function walk(holder,key){var k,v,value=holder[key];if(value&&typeof value==="object"){for(k in value){if(Object.prototype.hasOwnProperty.call(value,k)){v=walk(value,k);if(v!==undefined){value[k]=v}else{delete value[k]}}}}return reviver.call(holder,key,value)}text=String(text);cx.lastIndex=0;if(cx.test(text)){text=text.replace(cx,function(a){return"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4)})}if(/^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,""))){j=eval("("+text+")");return typeof reviver==="function"?walk({"":j},""):j}throw new SyntaxError("JSON.parse")}}}());
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
//FUNZIONI COMUNI //
/*** IE6 - Browser detection ***/
var isIE6 = ((typeof window.XMLHttpRequest == 'undefined') && (typeof ActiveXObject != 'undefined'));
/*** |FINE| IE6 - Browser detection ***/

/* Apre in overlayer blocco nascosto spalla destra */
function showCond (obj) 
{
	var contHidden = $(obj).closest('.promoopen').find('span.condizionidetails');
	var contBox = $('#boxpromocont');
	if($(window).width() >= 768){
		contHidden.fadeToggle(300);
		$(obj).toggleClass('opened');
	}
	else {
	   openPopMobile(contHidden.html(),'condizioni')
	}
	if (contBox) //se esistono pi� box racchiusi in un id
		{
			progZindex();
		}
} 

/* Setta l'errore nel campo */
/*** SETTA ERRORE ****/
function setError(fieldId, message)
{
	//Risale indietro fino al suo PARENT predisposto ad accogliere la classe error
	var field = ('#' + fieldId),
		errorBox = field,
		errorfather;
		
	if ($(errorBox).closest('div').hasClass('fieldBlock')) {
		errorfather = $(errorBox).closest('div');
		$(errorfather).addClass('error');}
    
	else{$(errorBox).addClass('error');}

	//Se è settato il messaggio, lo cambia come richiesto
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
/*** RESETTA ERRORE ****/
function unsetError(fieldId)
{
	field = ('#' + fieldId);
	errorBox = field;
	if ($(errorBox).closest('div').hasClass('fieldBlock')) {
		var errorfather = $(errorBox).closest('div');
		$(errorfather).removeClass('error');}
    
	else{$(errorBox).removeClass('error');}
	offSetDoc();
	
}

/* FINE GESTIONE ERRORI */

/* funzione che disabilita l'accordion*/
function disableAcc(obj,id,secondId) {
$(id).parentNode.className='aolAcc';
 if(obj.checked) 
	{$(id).hide(); $(secondId).show(); }
	else{$(id).show();  $(secondId).hide();}
 
}


/* GESTIONE ABILITAZIONE/DISABILITAZIONE CAMPI */
function fieldEnable(idObject, enabled) {
	var obj = $(idObject),
		objCont =  $(obj).parent('label').get(0),
		tooltipWarning = $(objCont).attr('data-tooltip'),
		fields = [];
		
	if (obj.nodeName !== "INPUT" && obj.nodeName !== "SELECT" && obj.nodeName !== "TEXTAREA") {
		fields = $('obj input', 'obj select', 'obj textarea');
	}
	else {
		fields.push (obj);
	}
	$(fields).each(function() {
		if (enabled===true)
			{
				$(this).removeAttr('disabled');
				$(this).attr('class',$(this).attr('class').replace('disabled',''));
				if (tooltipWarning.length!==0) {$(objCont).attr('data-tooltip','') }
			}
			else
			{
				$(this).attr('disabled','disabled');
				$(this).attr('class',$(this).addClass('disabled'));
			}
	})
}

/* FIX DEI FORMS */
// Insieme di funzioni da riconsiderare in fase di riprogettazione: utilizzate in accoglienza, per ora.


/* FINE FIX DEI FORMS*/

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

/* Mette la barra verde automaticamente a fianco al blocco AOL corrispondente al campo in focus */

function activeAolBlocks()
{
	aolBlocksEl = $("fieldset input, fieldset select, fieldset textarea, fieldset a");
	if(aolBlocksEl){
	aolSetEvi = function() {
		$("fieldset").removeClass("on");
		$(this).parents("fieldset").addClass("on");
		
	};
	aolBlocksEl.click (aolSetEvi);
	aolBlocksEl.bind('focus', aolSetEvi);
	aolBlocksEl.bind('blur', function(){$("fieldset").removeClass("on");});
	}
}

/* Lista doc AOL */
function switchAolDoclist(docpulsante)
{
	aoldoclista = jqc("aoldoclist");
	docimmagine = docpulsante.getElementsByTagName("img")[0];
	//*if(!$('#aoldoclistAncorato').length)
	//{
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
	//}
	/*else{
		if ($(aoldoclista).is(':visible'))
		{
			docimmagine.src="/img/tit_documentazione_opened.gif";
			$(aoldoclista).css('visibility','visible');
		}
		else
		{
			
			docimmagine.src = "/img/tit_documentazione_closed.gif";
			$(aoldoclista).css('visibility','hidden');
		}
	}*/
}

/* Apre e chiude tutti gli accordion */
function aolAccOpenAll(aElement)
{
	aolAcc = $(".aolAcc");
	//Seleziona tutti gli accordion
	if (aElement.innerHTML.indexOf("Apri")<0)
	{
		//Chiude tutti gli accordion
		aolAcc.removeClass("expanded");
		aElement.innerHTML = "Apri tutti";
	}
	else
	{
		//Apre tutti gli accordion
		aolAcc.addClass("expanded");
		aElement.innerHTML = "Chiudi tutti";
	}
}

/*** CONCRETIZZA UN COUNTER SU UN DATO CAMPO ***/
function setCounterOnField (idField, maxChar)
{
	var fieldToCount = $('#' + idField),
		fieldToCountCont = fieldToCount.closest('div'),
		fieldCounter = $('<div class="fieldCounter"/>'),
		fieldCounterFunction = "counterOnField('" + idField + "','"+ maxChar + "')";
	
	fieldCounter.html("<span>" + fieldToCount.val().length + "</span>/" + maxChar + " caratteri");
	fieldToCountCont.prepend(fieldCounter);
	fieldToCount.bind('keyup',function(){fieldCounter.find('span').eq(0).html($(this).val().length)});
}
/*** FINE CONCRETIZZA UN COUNTER SU UN DATO CAMPO ***/

/* Rimuove le diciture opzionale e la relativa classe */
function removeOpt(field, optValue)
{
	if (field.value == optValue)
	{
		$(field).attr('value','')
		$(field).removeClass('opzionale');
	}
}
function focusOnOptionalField() {
   var aolOptionalFields = $(".aolblock input.opzionale,.aolblock textarea.opzionale");
   aolOptionalFields.bind('focusin', function(event) {
		if($(this).hasClass('opzionale')){
		$(this).attr('value','')
		$(this).removeClass('opzionale');
		}
	});
	
}

/* Funzione che rimette il nome dell'intestatario */
function reintestaBarra(idCamponome, idCampocognome, idBarraintestatario, blocktextdefault)
{
	//se ci sono sia il nome che il cognome allora procede, altrimenti no.
	var camponome = $(idCamponome);
	var campocognome = $(idCampocognome);
	var barraintestatario = $(idBarraintestatario)
	if (camponome.value != "" && campocognome.value != "")
	{
		//Ricalcola il testo (eventualmente tagliandolo)
		intestatarioText =  blocktextdefault + " - " + camponome.value + " " + campocognome.value
		if (intestatarioText.length > 50)
		{
			intestatarioText = intestatarioText.substring(0,45) + "..."
		}
		if (barraintestatario.getElementsByTagName("embed").length>0 || barraintestatario.getElementsByTagName("object").length)
		{
			//Se ha fatto il replacement
			barraintestatario.getElementsByTagName("span")[1].innerHTML = intestatarioText;
		}
		else
		{
			//Per Ipad e "soci"
			barraintestatario.getElementsByTagName("span")[0].innerHTML = intestatarioText;
		}
	}
}

/* Switch aperto/chiuso oggetto espandibile*/
/* Valorizzare exclusive come true se l'apertura dell'accordion deve chiudere tutti gli altri*/
function switchExp(abutt, exclusive)
{
	var accordion = $(abutt).closest('.aolAcc,.expandable,.subaoldoclist'),
		accordioncont,
		accordions;
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
			accordions = $(accordioncont).find('.expanded');
			accordions.attr('class', accordion.attr('class').replace("expanded",""));
		}
		accordion.attr('class', accordion.attr('class') + ' ' + 'expanded');
	}
	ttHide();
}

/* Apertura overlay contattaci */
function openContattaci(indice)
{
	var vociFooter = document.getElementById('footer').getElementsByTagName('a');
	var btnContinua = document.getElementById('continua');
	var btnClose = document.getElementById('close');
	var linksArray = new Array;
	linksArray[0] = "#";
	linksArray[1] = "/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_trasparenza_nw&amp;OBS_KEY=pro_wbn_trasparenza";
	linksArray[2] = "/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_privacy_nw&amp;OBS_KEY=pro_wbn_privacy";
	linksArray[3] = "/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_sicurezza_nw&amp;OBS_KEY=pro_wbn_sicurezza";
	linksArray[4] = "/webankpub/wb/fpServizi.do?tabId=nav_pub_wb_partnership_nw&amp;OBS_KEY=pro_wbn_partnership";
	linksArray[5] = "/webankpub/wb/schedaContattiStampa.do?tabId=nav_pub_wb_newsroom_nw&amp;OBS_KEY=pro_wbn_newsroom&amp;KEY4=pro4_contatti_stampa";
	linksArray[6] = "/webankpub/wb/fpSocial.do?tabId=nav_pub_wb_newsroom_nw&amp;OBS_KEY=pro_wbn_newsroom";
	linksArray[7] = "/webankpub/wb/PartecipaHome.do?tabId=nav_pub_wb_partecipa_nw&amp;OBS_KEY=pro_wbn_partecipa";
	linksArray[8] = "http://www.youtube.com/webanktv";
	openPopOverLayer ('contattaci','floating');
	for(i = 0; i<vociFooter.length+1; i++)
	{
		btnContinua.setAttribute('href',linksArray[indice]);
		if(indice>7) {btnContinua.setAttribute('target','blank'); btnClose.setAttribute('target','blank');}
		btnClose.setAttribute('href',linksArray[indice]);
	}
	if(document.getElementById('CalendarPickerControl'))
	{
		document.getElementById('CalendarPickerControl').style.zIndex = getNextHighestZindex();
	}
}


/* Espansione */
function viewVisualContent (topElement)
{
	var visualblock = $(topElement.parentNode);
	var container = visualblock.parentNode.select(".detailcont .corpo")[0];
	var detailbox = $(container.parentNode);
	detailbox.hide();
	var detailtop = detailbox.select(".top")[0];
	topElements = visualblock.parentNode.select(".boxtop");
	for (x=0; x<topElements.length; x++)
		{
			if (topElements[x].className== "boxtop opened") topElements[x].className = "boxtop";
			if (topElements[x] == topElement) detailtop.className = "top top" + (x+1);
		}
	
	topElement.className = "boxtop opened";
	
	var content = visualblock.select(".boxcontent")[0].innerHTML;
	//Assegna il contenuto al container
	container.innerHTML = content;
	detailbox.appear({duration:0.3,queue: 'end'});
}

/* Scrolla sull'elemento del quale si ha l'id */
function setViewElement (elementId)
{
	elemento = $('#' + elementId).parents().eq(0);
	elemento = $(elemento);
	var offseterror = $('#' + elementId).offset()
	if($(window).width() < 768){
	var deltaTopHeader = $('#header').height() + $('#menu').height();
	}
	else {
	var deltaTopHeader = 0;
	}
	$('html, body').animate({scrollTop:offseterror.top - deltaTopHeader}, 'slow');
	$(elementId).focus();
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
// fix per il placeholder dove non � supportato
IEfixPh = function(){
	if (($.browser.msie && $.browser.version < 10) || ($.browser.mozilla && $.browser.version <= 4))
	{
	inputPH = $("input[placeholder]:not(input[type=password]), textarea[placeholder]");
	for(x=0;x<inputPH.length;x++)
	{
	   inputPH.each(function(i) {
	   var item = $(this);
       var text = item.attr('placeholder');
       if (item.val() === '') 
		{
			item.val(text);
			item.css('color', '#a7a7a7');
			item.blur();
		}
		item.bind('focusin.placeholder', function(event) {
		   if (item.val() === text)
		   item.val('');
		   item.css('color', '');
		  
		});
 
        item.bind('focusout.placeholder', function(event) {
        if (item.val() === '')
        {
        item.val(text);
        item.css('color', '#a7a7a7');
        }
       });
    });
	}
	}
}

function openPopMobile(htmlContent,idOverlayer) {
	var overlayerMobile = $('<div id="' + idOverlayer + '" class="overlayer"></div>');
	$('body').append(overlayerMobile);
	overlayerMobile.append($('<div class="abbandono aol"><div class="overlayertitle"><h3 class="hiddenDesktop">Verifica le condizioni</h3><a href="#" onclick="closePopOverLayer(' + "'" + idOverlayer +  "'" + ')" class="chiudi" id="closeCondizioni"></a></div><div class="overlayerbody"></div></div>'));
	overlayerMobile.find('.overlayerbody').html('<span class="sep"></span>' + htmlContent)
	overlayerMobile.find('.condizionidetails').show();
	overlayerMobile.css('max-height', $(window).height())
	openPopOverLayer (idOverlayer,'floating');
}


// Rende gli overlay sensibili al click
function makeFocusable(overlay)
{
	overlay = jqc(overlay);
	// Prototipizza l'oggetto in modo che si possa passare anche solo l'ID
	var overlay = $(overlay);
	// L'evento viene istanziato come propriet� dell'oggetto, solo se necessario
	if (!overlay.mF)
	{
		overlay.mF = overlay.on("click", function() 
		{
			nzi = getNextHighestZindex();
			if (this.style.zIndex < (nzi -1))
			this.style.zIndex = nzi;
		});
	}
}

// OBSERVATION
// SEMPLICE LETTURA COOKIE OBSERVATION
function obsReadCookie(chiave) {
	var cookieval = "";
	$.each(document.cookie.split(";"), function(i, v) {
	if (v.split("=")[0].replace(" ","") == chiave) {
		cookieval = unescape(v.split("=")[1]);
		}
	});
	return cookieval;
}
// TRACCIA LE OBSERVATION
function obsTrace(obsnumber, params)
{
	// Lettura cookie
	var obsCookie = obsReadCookie("WsId");
	
	// Analizza cgi_script
	var obsBank = shortBankName.toUpperCase();
	var obsServizio = (cgi_script.indexOf("pri")>0)? "Privati" : "Pubblica";
	var obsSession = obsReadCookie("JSESSIONID");
	
	var obsUser = "";
	$.each(obsSession, function(i,v){
		var teststr ="1234567890";
		if (teststr.indexOf(v)>=0) obsUser = obsUser + v;
	});
	
	// Traccia in XML qualsiasi dato, spedito come observation
	var obsCode = "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?><observation type=\""+ obsnumber +"\" side=\"fe\">"
				+ "<commonvalues>"
				+ "<cookie>" + obsCookie + "</cookie>"
				+ "<prodotto>" + obsBank +  "</prodotto>"
				+ "<servizio>"+ obsServizio + "</servizio>"
				+ "<sessione>"+ obsSession + "</sessione>"
				+ "<user>" + parseFloat(obsUser).toString(36) + "</user>"
				+ "</commonvalues>"
				+ "<specificvalues>";
	if (params) {
		$.each(params,function(k,v){
			obsCode = obsCode + "<property name=\""+k+"\"><![CDATA[" + v + "]]></property>"
		});
	}
	obsCode = obsCode + "</specificvalues></observation>";
	$.ajax({
		url: cgi_script + "/common/obs/XmlObservationWriter.jsp",
		data: obsCode,
		cache: false,
 		contentType: "json",
		processData: false,
		type: "POST",
		success: function (data)
			{
				console.debug("obs traced: " + data["OK"]);
			}
	});
}

/* gestione box paolo e chat in aol*/
function loadboxServiziTopAol(){
 if($('#boxServiziTopAol').length){
			$('#boxServiziTopAol .condizionidetailsOverlayer').draggable();
			
			var elemToMove = $('.boxServiziTopAolChat'); 
			var elemToMoveNew = elemToMove.clone();
			elemToMoveNew.insertBefore($('#virtAss')).show();
			elemToMove.remove();
			$('#boxServiziTopAol .boxServiziTopAolAss').mouseover(function(){$(this).find('img').eq(0).attr('src','/img/link_chiedi_paolo_over.png')});
			$('#boxServiziTopAol .boxServiziTopAolAss').mouseout(function(){$(this).find('img').eq(0).attr('src','/img/link_chiedi_paolo.png')})
			$('#boxServiziTopAol #c2mToolbar.boxServiziTopAolChat').mouseover(function(){$(this).find('img').eq(0).attr('src','/img/link_chatta_over.png')});
			$('#boxServiziTopAol #c2mToolbar.boxServiziTopAolChat').mouseout(function(){$(this).find('img').eq(0).attr('src','/img/link_chatta.png')})
			$('#boxServiziTopAol #boxServiziTopAolNum').mouseover(function(){$(this).find('img').eq(0).attr('src','/img/link_numeri_utili_over.png')});
			$('#boxServiziTopAol #boxServiziTopAolNum').mouseout(function(){$(this).find('img').eq(0).attr('src','/img/link_numeri_utili.png')});
 
 }
}
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

/*** FUNZIONE CHE RICOLLOCA I PROSSIMI PASSI E I DOCUMENTI CONTRATTUALI IN SPALLA DESTRA****/
function offSetDoc(){
		if($('#aoldoclistAncorato').length) //controlla se c'� l'elenco dei doc in spalla destra da ancorare
		{
			
			var bloccoPrev,
				ingombroElencoDocPre,
				ingombroBottonieraSx,
				nextStepLimit,
				fattoreAlfa;
			//DOCUMENTI DEVONO ESSERE ANCORATI BOTTOM
				nextStepLimit = $('#aoldoclistAncorato');
				bloccoPrev = nextStepLimit.prev();
				ingombroElencoDocPre = bloccoPrev.offset().top + bloccoPrev.innerHeight(); // spazio occupato da elemento precedente next step comprensivo della sua altezza
				ingombroBottonieraSx = $('#ancoraDoc').offset().top + $('#ancoraDoc').innerHeight() // spazio occupato dal top da elemento bottoniera comprensivo della sua altezza
				fattoreAlfa = ingombroBottonieraSx - ingombroElencoDocPre - nextStepLimit.innerHeight();
				$('#aoldoclistAncorato').css('height',$('#aoldoclistAncorato').innerHeight())
				if(fattoreAlfa>0) {nextStepLimit.css('margin-top',fattoreAlfa);}
				else{nextStepLimit.css('margin-top',0);}
				nextStepLimit.css('visibility','visible')
		}
}
function reoffSetDoc(){
$( ".productPush input[type=checkbox]" ).bind( "click", function() {
    offSetDoc()
});
}
/*** FINE FUNZIONE CHE RICOLLOCA I PROSSIMI PASSI E I DOCUMENTI CONTRATTUALI IN SPALLA DESTRA****/

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
		if (ttxClose.length) {ttxClose.click(function(){ttBox.hide();});}
	} catch (err) { }
	$(window).on("resize",ttHide);
}

/* Mostra il tooltip relativo all'oggetto */		
function ttShow(e, ttEl)
{
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
			ttBox.css("visibility","hidden").show();
			ttBox.css('max-width',$('#aolleft').width());
			//Posiziona il tooltip
			setTimeout(function(){
			ttBox.position({my: "center bottom", at: "center top", of: ttEl});
			
			 var pageWidth = $(window).width(); 
				if( $(window).width()< 768){
					ttBox.css('max-width',ttEl.closest('.fieldBlock,div').width());
					ttBox.position({my: "center bottom", at: "center top", of: ttEl.closest('.fieldBlock,div')});
				}
			
			
			if (ttEl.offset().top < ttBox.offset().top) 
			{
				ttBoxArrowTop.show();
				ttBoxArrowBottom.hide();
			}
			ttxWidth ='auto';
			ttBoxText.css("width",ttxWidth);
			ttBox.css({"visibility":"visible","z-index":getNextHighestZindex()});
			},100);
			/* Inverte la posizione della freccia, se necessario */
			ttBox.show();
		}
	}
}
/* Nasconde il tooltip*/
function ttHide()
{
	$("#ttBox").hide();
}

// Setting dei tooltip a livello globale
function ttSet(wrapper) {
	wrapper = $(wrapper);
	ttEl = wrapper.find("*[data-tooltip],*[data-error]");
	ttElFocusOut = wrapper.find ("*[data-focusout]");
	if(ttEl.length)
	{
		if (!$("#ttBox").length) {ttInit();}
		$.each(ttEl,function(i,el)
			{
				if (ttElFocusOut.length) {$(el).focusout(ttHide);}
				//Resetta hide e blur
				
					if ($(el).is("input, textarea"))
					{
						$(el).on("focus", ttShow).keydown(ttHide);
					}
					else if($(window).width() < 768 && $(el).hasClass('openPopMobile'))
					{
					   $(el).bind("click",  function() {openPopMobile($('.promogreen .ttHtmlContent').html(),'promoGreen')});
					}
					else 
					{
						$(el).on("click", ttShow);
					}
			}
		);
	}
	
}
/*** FINE FRAMEWORK TOOLTIP ****/
function setLeftSideBehaviour() {
	var rightSide = $('#aolright');
	var heightMenu = $('#aolright').height();
	function openLeftSide() {
	rightSide.animate({
			'right': '-1%'
		}, 100, 'swing', function(){$('#openLeftSide').css('left','25%')});
		var overlayerMenu = $('<div id="layerpopMenu"></div>');
		
		
		$('#aolleft').css('height',$(window).height() - 105 + 'px');
		$('#pagecontainer').css('height', $(window).height() + 'px');
		$('#pagecontainer').css('overflow','hidden');
		$('body').css('overflow','hidden');
		$('#aolright').css('height', '100%' );
		$('#aolright').css('margin-top','0');
		$('#aolright').css('overflow','auto');
		
		$('body').append(overlayerMenu);
		overlayerMenu.css('height', $(window).height() + 'px');
		$('#openLeftSide').addClass('opened');
	};
	function closeLeftSide() {
		rightSide.animate({
			'right': '-100%'
		}, 100, 'swing', function(){$('#openLeftSide').css('left','none')});
		
		$('#layerpopMenu').remove();
		$('#footer').show();
		$('#aolleft').css('height','auto');
		$('body').css('overflow','auto');
		$('#pagecontainer').css('height', 'auto');
		$('#pagecontainer').css('overflow','visible');
		$('#aolright').css('height', 'auto' );
		$('#openLeftSide').removeClass('opened');
	};
	$('#aolright').swipe({
    swipeRight: function(event) {
		closeLeftSide()
	},
	threshold:0
    });
	$('#openLeftSide').bind('click', function(){
	   if(!$(this).hasClass('opened')) {
		openLeftSide();
	   }
	   else {
	   closeLeftSide();
	   }
	});
	
}

/* **** Eventi al load dell'aol *** */
addEvent (window,"load", function()
	{
		activeAolBlocks();
		focusOnOptionalField();
		initHiddenCondition();
		IEfixPh();
		offSetDoc();
		reoffSetDoc();
		ttSet($('body'));
	}
);
function startboxServiziTopAol()
{
	$(window).load(loadboxServiziTopAol);
}
$(window).on('resize', function() {
    if($('#openLeftSide').hasClass('opened'))
	{
	$('#openLeftSide').trigger( "click" );
	}
})
/*gestione colonna sinistra iphone e tablet */
$(window).on('scroll', function() {
	ttHide();
})