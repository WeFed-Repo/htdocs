function copyDivContent(src, dst) {
	var divDst = document.getElementById(dst);
	var divSrc = document.getElementById(src);
	divDst.innerHTML = divSrc.innerHTML;
}

function ajaxCall(url, aParams, callback, idHtmlElem){
	ajaxCallExt(url, aParams, callback, idHtmlElem, null);
}

function ajaxCallExt(url, aParams, callback, idHtmlElem, callbackError){
	var xmlhttp = false;

	// Se Mozilla, Firefox, Opera, Safari
	if (window.XMLHttpRequest) {
	   xmlhttp = new XMLHttpRequest();
	// Se IE
	} else if (window.ActiveXObject) {
	   try {
	      // Versione 5.5 o inferiore
	      xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");

	   } catch (e) {
	      try {
	      // Versione 5.5 o superiore
	      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");

	      } catch (e) {
	      }
	   }
	}

	// Se oggetto non istanziato: errore
	if (!xmlhttp) {
	   //alert("ERRORE: AJAX non supportato da questo browser!");
	   handleError(callbackError, idHtmlElem);
	   return false;
	}

	// Il ritorno viene intercettato da questa funzione
	xmlhttp.onreadystatechange = function() {
    	readyStateChangeHandler(xmlhttp, callback, idHtmlElem, callbackError); // your function goes here
	};

	// Apro la connessione verso il server in modo asincrono
	xmlhttp.open('POST', url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	var sParams = "";
	for (x=0; x<aParams.length; x++) {
		if (x!=0)
			sParams += "&";
		sParams += aParams[x][0] + "=" + encodeURI(aParams[x][1]);
	}
	xmlhttp.send(sParams);
}

function readyStateChangeHandler(xmlhttp, callback, idHtmlElem, callbackError) {
   // 4 significa completato
   if (xmlhttp.readyState == 4) {
      // Codice di ritorno del server: 200 vuol dire OK
      if (xmlhttp.status == 200) {
         // Leggo il ritorno in formato XML
         //if (callback) {
            eval(callback + '(xmlhttp, idHtmlElem);');
        //}
      } else if (xmlhttp.status == 404) {
         //alert("ERRORE: L'url richiesto non esiste!");
         handleError(callbackError, idHtmlElem);
      } else {
         //alert("ERRORE: Codice di ritorno=" + xmlhttp.status);
         handleError(callbackError, idHtmlElem);
      }
   }
}

function isArray(obj) {
	if (obj.constructor.toString().indexOf("Array") == -1)
		return false;
	else
		return true;
}

function handleError(callbackError, idHtmlElem) {
	if (callbackError == null)
		displayError(idHtmlElem);
	else
		eval(callbackError + '();');
}

function displayError(idHtmlElem) {
	var msgErr = '<div id="ctnboxconto">'+
				 '  <img src="/wbx-pri/img/ico_alert_big.gif" alt="Alert" title="Alert" align="absmiddle" style="margin:40px 10px 40px 30px;" />La funzione al momento non è disponibile...'+
				 '</div>';
	if (isArray(idHtmlElem)) {
		for (key in idHtmlElem) {
			idEl = idHtmlElem[key];
			htmlElem = document.getElementById(idEl);
			htmlElem.innerHTML = msgErr;
		}
	}
	else {
		htmlElem = document.getElementById(idHtmlElem);
		htmlElem.innerHTML = msgErr;
	}
}

// Searches first occurrence of <xmlSearchTag> tag inside
// <xmlHttp> XMLHttpRequest object, and place content into
// <idHtmlElem> html element
// If <debug> = true, alerts some infos

function placeHtmlPortionIntoElem(xmlHttp, xmlSearchTag, idHtmlElem){
	placeHtmlPortionIntoElemDebug(xmlHttp, xmlSearchTag, idHtmlElem, false);
}

function placeHtmlPortionIntoElemDebug(xmlHttp, xmlSearchTag, idHtmlElem, debug)
{
	if (debug)
		alert(xmlHttp.responseText);
	var htmlElem = document.getElementById(idHtmlElem);
	if (htmlElem == undefined) {
		if (debug)
			alert("Cannot find HTML element with ID=<"+idHtmlElem+">!");
		return;
	}
	var txt = getXMLElementContent(xmlHttp, xmlSearchTag, debug);
	if (debug)
		alert(txt);
	htmlElem.innerHTML = txt;
}

function getXMLElementContent(xmlHttp, xmlSearchTag, debug)
{
	var respXML = xmlHttp.responseXML;
	if (respXML == null) {
		if (debug)
			alert("Response XML is null!");
		return;
	}
    var el = respXML.getElementsByTagName(xmlSearchTag);
	if (el == undefined) {
		if (debug)
			alert("Cannot find XML tag <"+xmlSearchTag+"> in XMLHttpResponse.responseXML!");
		return;
	}

	// Pointing at first child of collection
	var el = el[0];
    var txt = "";

	if(el && el.hasChildNodes())
    {
		el = el.firstChild;
		do {
			txt += el.nodeValue;
			el = el.nextSibling;
		}
		while(el);
	} else {
		if(debug)
			alert("Cannot find contents in XMLHttpResponse.responseXML.xmlSearchTag!");
		return;
	}

	return txt;
}
