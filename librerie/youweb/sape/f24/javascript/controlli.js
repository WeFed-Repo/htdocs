// La User-Agent contiene l'informazione relativa al tipo di browser utilizzato, alla sua versione e alla piattaforma 

var SOWIN = (navigator.userAgent.toLowerCase().indexOf("win") > -1) ? 1 : 0;
var SOMAC = (navigator.userAgent.toLowerCase().indexOf("mac") > -1) ? 1 : 0;
var SOLIN = (navigator.userAgent.toLowerCase().indexOf("linux") > -1) ? 1 : 0; 
var SOALT = (!SOWIN && !SOMAC && !SOLIN) ? 1 : 0;

var OP = ((ind1 = navigator.userAgent.indexOf("Opera")) > -1) ? 1 : 0; 
var punto = (OP) ? navigator.userAgent.indexOf(".",ind1):0;
var OP5 = (OP && parseInt(navigator.userAgent.substr(punto-1)) == 5) ? 1 : 0;
var OP6 = (OP && parseInt(navigator.userAgent.substr(punto-1)) == 6) ? 1 : 0;

var IE = ((ind2 = navigator.appVersion.indexOf("MSIE")) > -1 && !OP) ? 1 : 0;
var IE4 = (IE && parseInt(navigator.appVersion.substr(ind2+5)) == 4) ? 1 : 0;
var IE5 = (IE && parseInt(navigator.appVersion.substr(ind2+5)) == 5) ? 1 : 0;
var IE6 = (IE && parseInt(navigator.appVersion.substr(ind2+5)) == 6) ? 1 : 0;

var NN = (navigator.appName.indexOf("Netscape")>-1) ? 1 : 0;
var NN4 = (NN && parseInt(navigator.appVersion)==4) ? 1 : 0;
var NN5 = (NN && parseInt(navigator.appVersion)==5) ? 1 : 0;
var NN6 = (NN && parseInt(navigator.appVersion)>4) ? 1 : 0;

// Questa funzione si aspetta tre parametri : 
// msg          - il primo e' la stringa che verra' scritta nel messaggio di conferma.
// isMultiCheck - il secondo e' una stringa che se non viene impostata o e' impostata a "false" ,
//                non ti permette di selezionare piu' di un check, se viene impostato a "true" salta il controllo
// noCheck      - il terzo parametro se impostato a 'true' permette di selezionare piu' di una riga

function checkMultiSelezione(msg, isMultiCheck, noCheck) {        	
	var elementSelected = false;
	var appo = "true";	
	if ( (null == isMultiCheck) || ("false" == isMultiCheck) ){
		appo = "false";	
	}
	elementsCount = document.forms[1].elements.length;
	for (var i=0; i < elementsCount; i++) {
		var e = document.forms[1].elements[i]
		if (e.checked) {
			if ((elementSelected == true) && (appo == "false")) {
					alert("Attenzione: non e' possibile selezionare piu' di una riga per questa operazione.");
				return false;
			} else {
				elementSelected = true;
			}							
		}
	}
	
	if ("true" == noCheck) {
	    elementSelected = true;
	}
	
	if (elementSelected == false) {
		alert ('Attenzione: per effettuare questa operazione selezionare una riga.');
		return false;
	} else {
		if (null != msg) { return (confirm(msg));
		}
		else { return true;
		}
	}
}

//codice modifica $MOD699$
