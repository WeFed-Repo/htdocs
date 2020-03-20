/*
 * ajaxutils.js
 *
 * Funzioni per la gestione di funzionalita' AJAX
 * Asynchronous JavaScript And XML.
 *
 * Data: 20/09/2005
 * Autore: Vito Torciano <vito.torciano@cedac.com>
 */
 
 // ========================================
 // -= Variabili per la personalizzazione =-
 // ========================================
 
 var debug = false;
 var use_progress_bar = true;
 var first_call_delay = 3000;   // Attesa prima di effettuare la prima chiamata
 var polling_delay = 2500;      // Attesa fra due chiamate   
 
 /*
  * Colori progress bar
  */
 var colore_progress_bar = "#F7921E";
 var colore_bordo_progress_bar = "#003365";
 var colore_testo_progress_bar = "#003365";
 
 /*
  * Icone
  */
 var icona_eseguito = "img/semaforoverde.gif";
 var icona_in_esecuzione = "img/semaforogiallo.gif";
 var icona_in_attesa = "img/semaforogrigio.gif";
 
 var error_count = 0;
 
 // =============================================
 // -= FINE Variabili per la personalizzazione =-
 // =============================================
 
 var req;
 var isIE55 = (navigator.appVersion.indexOf("MSIE 5.5") != -1);
 var progress_url = "progress?command=get_percent_complete";
				
 var pbImages = new Array();
 pbImages[0] = new Image();
 pbImages[1] = new Image();
 pbImages[2] = new Image();
 pbImages[0].src = icona_in_attesa;
 pbImages[1].src = icona_in_esecuzione;
 pbImages[2].src = icona_eseguito;

 function get_random()
 {
    var ranNum= Math.round(Math.random()*100000);
    display("Random = " + ranNum, 2);
    return ranNum;
 }
 
 function createXMLHttpRequest() {
   try { return new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {}
   try { return new ActiveXObject("Microsoft.XMLHTTP"); } catch (e) {}
   try { return new XMLHttpRequest(); } catch(e) {}
   alert("XMLHttpRequest not supported");
   return null;
 }
 
 function initRequest(url) {
	req = createXMLHttpRequest();
 	req.open("GET", url + "&random="+get_random(), true);
	req.setRequestHeader("Content-Type", "text/xml; charset=utf-8");
	req.setRequestHeader("Cache-Control", "no-cache");
 	req.onreadystatechange = processPollRequest;
 }
 
 function pollTaskmaster() {
 	initRequest(progress_url);
 	req.send(null);
 }
 
 function processPollRequest() {
	 if(req) {
		display("==================", 2);                     
		try { display("ReadyState  " + req.readyState, 2); } catch (e) {}
		try { display("Status      " + req.status, 2); } catch(e) {}
		try { display("Status Text " + req.statustext, 2); } catch(e) {}
		display("==================", 2);                     
	 } else {
		display("req = null", 2);
     }
	 
	 if(req.readyState == 4) {
 		if(req.status == 200) {
 			try {
	 			var item = req.responseXML.getElementsByTagName("percent")[0];
	 			var percent = item.firstChild.nodeValue;
	 			var item = req.responseXML.getElementsByTagName("message")[0];
	 			var message2 = item.firstChild.nodeValue;
	 			var item = req.responseXML.getElementsByTagName("total-subtasks")[0];
	 			var totalSubtasks = item.firstChild.nodeValue;
	 			var item = req.responseXML.getElementsByTagName("subtask")[0];
	 			var currentSubtask = item.firstChild.nodeValue;
	 			
	 			// Gestione eventuale stato di elaborazione dell'archvio
	 			// (presente solo se è in elaborazione un file zip)
	 			var zipStatus; 				
	 			var zipProgressTag = req.responseXML.getElementsByTagName("zip-progress");
	 			if(zipProgressTag.length > 0){
	 				zipStatus = {};
	 				// popola zipStatus con valori trovati nel teg zip-progress
	 				for (var i = 0; i < zipProgressTag[0].childNodes.length; ++i) {
	 					item = zipProgressTag[0].childNodes[i];
	 					if (item.nodeName == "total") {
	 						zipStatus.total = item.firstChild.nodeValue;
	 					} else if (item.nodeName == "done") {
	 						zipStatus.done = item.firstChild.nodeValue;
	 					} else if (item.nodeName == "error") {
	 						zipStatus.error = item.firstChild.nodeValue;
	 					}
	 				}
	 			}

	 			if(debug) {
					display("Percent   : " + percent, 2);
					display("Message   : " + message2, 2);
					display("Subtask   : " + currentSubtask + "/" + totalSubtasks, 2);
				}
	 			if(progress_message[currentSubtask]) {
	 				message2 = progress_message[currentSubtask];
	 			}
	 			setVisible(true);
	 			showProgress(percent, message2, currentSubtask);
	 			
	 			// --- Aggiorna l'html che mostra lo stato di avanzamento dello zip
	 			if(zipStatus){
	 				setZipProgessVisible(true);
	 				showZipProgress(zipStatus);
	 			}
	 			// ---
	 			
				positionDiv();
			} catch(e) {
				error_count++;
			}
			
			if(percent < 100 || currentSubtask < totalSubtasks) {
				if(error_count < 3) {
					setTimeout("pollTaskmaster()", polling_delay);
				} else {
					display("Halted due to maximum error count reached.", 2);
				}
			}
			
 		}	// end if(req.status == 200)
 	}	// end if(req.readyState == 4)
 }
 
function setZipProgessVisible(visible){
	// rende visibile o meno il DIV HTML contenente la parte
	// sullo stato di avanzamento dello ZIP
	if(visible) {
		document.getElementById("zipProgress").style.visibility = "visible";
	} else {
		document.getElementById("zipProgress").style.visibility = "hidden";
	}
}

function showZipProgress(zipStatus){
	// aggiorna l'html con i dati releativi allo stato di eleborazione dello ZIP
	var inElab = parseInt(zipStatus.done) + 1;
	var totali = parseInt(zipStatus.total);
	if(inElab > totali) {
		inElab = totali;
	}
	document.getElementById("zipProgress").innerHTML = "<p class=\"rigaChiara\">Elaborazione del file <b>" + inElab + "</b> di <b>" + zipStatus.total + "</b>. In errore: <b>" + zipStatus.error + "</b></p>";
}
 
 // =======================================
 // = Funzioni relative alle Progress Bar =
 // =======================================
 
var targetId = -1;
var centerCell;
var size=40;
var increment = 100/size;
var currentPercent = 0;
var width = 0;
var height = 0;

// Mostra/Nasconde progress bar
function toggleVisible() {
	if(document.getElementById("progressbar").style.visibility == "visible") {
		setVisible(false);
	} else {
		setVisible(true);
	}
}

// Calcola dimensioni della finestra del browser per il piazzamento
// corretto del DIV della progress bar
function getWindowSize() {
  var myWidth = 0, myHeight = 0;
  if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
    myWidth = window.innerWidth;
    myHeight = window.innerHeight;
  } else if( document.documentElement &&
      ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    //IE 6+ in 'standards compliant mode'
    myWidth = document.documentElement.clientWidth;
    myHeight = document.documentElement.clientHeight;
  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    //IE 4 compatible
    myWidth = document.body.clientWidth;
    myHeight = document.body.clientHeight;
  }
  width = myWidth;
  height = myHeight;
}

// Posiziona il DIV della progress bar centrandolo
// nello schermo
function positionDiv() {
	getWindowSize();

	box_w = 500;
	box_h = 250;
	
	posx = (width / 2)-(box_w / 2);
	posy = (height / 2)-(box_h / 2) + 100;
	
	//alert("w:"+width+" h:"+height+" posx:"+posx+" posy:"+posy);
	
	document.getElementById("progressbar").style.width = box_w;
	document.getElementById("progressbar").style.height = box_h;
	document.getElementById("progressbar").style.bottom = posy;
	document.getElementById("progressbar").style.left = posx;
}

// Inizializza la progress bar per la prima volta
function createProgressBar() {
    positionDiv();
    var centerCellName;
    var tableText = "";
    for (x = 0; x < size; x++) {
      tableText += "<td id=\"progress_" + x + "\" width=\"10\" height=\"15\" bgcolor=\"" + colore_progress_bar + "\"/>";
      if (x == (size/2)) {
          centerCellName = "progress_" + x;
      }
    }
    var idiv = window.document.getElementById("barra");
    idiv.innerHTML = "<table class=\"rigaScura\" align=\"center\" style=\"text-weight: bold; border: 1px solid " + colore_bordo_progress_bar + "\" cellspacing=\"0\" cellpadding=\"0\"><tr>" + tableText + "</tr></table>";
    centerCell = window.document.getElementById(centerCellName);
}

/*
* La visualizzazione della progress bar viene ritardata fino
* alla ricezione del primo aggiornamento, in modo da non
* visualizzare nulla nel caso di distinte molto piccole.
*/

function showProgress(percentage, text, subTask) {
	if(null == text || text == "") {
		if(progress_message[0]) {
			text = progress_message[0];
		} else {
			text = "Attendere prego...";
		}
	}
    document.getElementById("messaggio").innerHTML = text;
    var percentageText = "";
    if (percentage < 0) {
    	percentage = 0;
    }
    if (percentage > 100) {
    	percentage = 100;
    }
    if (percentage < 10) {
        percentageText = "&nbsp;" + percentage;
    } else {
        percentageText = percentage;
    }
    centerCell.innerHTML = "<span style=\"color: " + colore_testo_progress_bar + "; font-weight: bold;\">"+percentageText+"%</span>";
    var tableText = "";
    for (x = 0; x < size; x++) {
      var cell = window.document.getElementById("progress_" + x);
      if ((cell) && percentage/x < increment) {
        cell.style.backgroundColor = "white";
      } else {
        cell.style.backgroundColor = "#F7921E";
      }      
    }
    
    // Aggiornamento immagini
    try {
	    for(x = 1; x <= 4; x++) {
	    	imageName = "pb_img" + x;
	    	//display("Image name = " + imageName, 2);
	    	img = document.getElementById(imageName);
	    	if(x < subTask) {
	    		try { img.src = pbImages[2].src; } catch(e) {}
	    	} else if(x == subTask){
	    		try { img.src = pbImages[1].src; } catch(e) {}
	    	} else {
	    		try { img.src = pbImages[0].src; } catch(e) {}
	    	}
	    }
    } catch(e) {}
}

// Mostra/Nasconde progress bar
function setVisible(vis) {
	if(vis == true) {
		document.getElementById("progressbar").style.visibility = "visible";
    try {
		  document.getElementById("main-div").style.visibility = "hidden";
    } catch(e) {}
	} else {
		document.getElementById("progressbar").style.visibility = "hidden";
    try {
		  document.getElementById("main-div").style.visibility = "visible";
    } catch(e) {}
	}
}

function startProgressBar() {
	createProgressBar();
	if(debug == true) {
		opendebug();
	}
    if(use_progress_bar == false) {
        display("Progress Bar is disabled", 1);
    	return false;
    }
    positionDiv();
    window.onresize = function() { positionDiv(); }
	
    display("startProgressBar()...", 1);
	currentPercent = 0;
	showProgress(0);
	//setVisible(true);
	setTimeout("pollTaskmaster()", first_call_delay);
}



 // ============================================
 // = Fine funzioni relative alle Progress Bar =
 // ============================================

// Funzionalita' per il debug

var dialog = null;
var dialog_loaded = false;

function opendebug()
{
   dialog = window.open("html/debugger.html","debug","height=500,width=425");
}

function closeDebug()
{
   if(dialog)
   {
      dialog.close();
   }
}
//window.onload = opendebug;
//window.onunload = closeDebug;

function display(msgText,mode)
{
   if(dialog)
   {
   	try {
      dialog.setField(msgText, mode);
    } catch(e) {;}
   }
}
