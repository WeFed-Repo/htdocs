

/*
oggetto x loggare in js senza alert.

per usarlo non c'e' da fare niente, nella funzione puoi mettere direttamente :
    log.debug('messaggio');
    log.info('messaggio');
    log.warn('messaggio');
    log.error('messaggio');
    log.dir('messaggio');

se trova console attiva utilizza console
altrimenti prova a scrivere html (in questo caso i log spariscono al refresh della pagina, quindi occhio a usarli nelle funzioni js che poi fanno submit)
se non riesce neppure a creare la parte html fa un alert

in produzione sostituire v_debugging
per non aver problemi di variabili non definite.
*/
var v_debugging = false;
if (v_debugging) {
  var log = {

   logDivId: 'debug',
   debugDiv: null,
   styles: [],   
   mode: null,
   logWin: null,
   
   resolveMode: function() {
     var m = 'ALERT';
     if (window.console) {
       if ((window.console.firebug != undefined) && (window.console.firebug != '')) {
         m = 'FIREBUG_CONSOLE';
       } 
       /*
       else {
         // chrome
         mode = 'GENERIC_CONSOLE';
         //for(var i in window.console) if(window.console.hasOwnProperty(i)) alert(i);
       }
       */
     } else if (false){
        this.debugDiv = this.createDebugDiv();
        if (this.debugDiv != null) {
          this.createStyles();
          m = 'HTML';
        }
     } else {
this.logWin = window.open('','myconsole',
  'width=350,height=250'
   +',menubar=0'
   +',toolbar=1'
   +',status=0'
   +',scrollbars=1'
   +',resizable=1');
this.createStyles();
m = 'WIN';

/*
newdocument=newwindow.document;
newdocument.write('Hello World.');
newdocument.close();
*/
     }
     return m;
   },

   debug: function(message) {
     this._print(message, 'debug');
   },

   info: function(message) {
     this._print(message, 'info');
   },

   warn: function(message) {
     this._print(message, 'warn');
   },

   error: function(message) {
     this._print(message, 'error');
   },

   dir: function(message) {
     this._print(message, 'dir');
   },

   _print: function(message, level) {
     level = (level) ? level : 'info';
     if (!this.mode) this.mode = this.resolveMode();
     switch(this.mode)
     {
     case 'FIREBUG_CONSOLE':
     //case 'GENERIC_CONSOLE':
       if (window.console.hasOwnProperty(level)) {
         window.console[level](message);
       } else {
         window.console.log('[NO APPENDER FOR LEVEL '+level+'] '+message);
       }
       break;

     case 'GENERIC_CONSOLE':
       if (window.console[level]) {
         window.console[level](message);
       } else {
         window.console.log('[NO APPENDER FOR LEVEL '+level+'] '+message);
       }
       break;
     case 'WIN':
       if (window.focus) {this.logWin.focus()}
       var logDoc = this.logWin.document;
       //alert('logDoc '+logDoc);
       var messageSpan = logDoc.createElement('span');
       messageSpan.setAttribute('style', ((this.styles[level])? this.styles[level] : this.styles['default']));
      messageSpan.innerHTML = '<b>['+level+']</b> '+message;

       logDoc.body.appendChild(messageSpan);
       var br = logDoc.createElement("br");
       logDoc.body.appendChild(br);
       break;

     case 'HTML':
         /*
       this.debugDiv = this.createDebugDiv();
       if (this.debugDiv != null) {
         this.createStyles();
       }
       */
       var messageSpan;
       if ( message.constructor == Array ) {
           var m = '';
           for (prop in message) {
               m += prop+ ' = '+message[prop];
           }
           messageSpan = this.createLogMessageSpan(m, level);
       } else if ( message.constructor == Object ) {
           var m = '';
           for (prop in message) {
               if (message.hasOwnProperty(prop)) {
                 m += prop+ ' = '+message[prop];
               }
           }
           messageSpan = this.createLogMessageSpan(m, level);
       } else {
           messageSpan = this.createLogMessageSpan(' {{ '+message.constructor + ' }} ' + message, level);
       }
       this.debugDiv.appendChild(messageSpan);
       var br = document.createElement("br");
       this.debugDiv.appendChild(br);
       break;
     default:
       alert('['+level+']'+message);
       break;
     }
   },

   createDebugDiv: function()
   {

      if (this.debugDiv != null) {
        return this.debugDiv;
      }
      var d = document.getElementById(this.logDivId);
      if (d != null) {
          return d;
       }
      var newdiv = document.createElement('div');
      newdiv.setAttribute('id', this.logDivId);
      newdiv.setAttribute('style', 'border: 1px solid #ccc;font-family: monospace;');
      document.body.appendChild(newdiv);
      return newdiv;
   },

   createLogMessageSpan: function (message, level) {
      var newdiv = document.createElement('span');
      newdiv.setAttribute('style', ((this.styles[level])? this.styles[level] : this.styles['default']));
      newdiv.innerHTML = '<b>['+level+']</b> '+message;
      return newdiv;
   },

   createStyles: function () {
     this.styles['debug'] = 'background-color: #eee;font-family: monospace;';
     this.styles['info'] = 'background-color: #eee;font-family: monospace;';
     this.styles['warn'] = 'background-color: #eee; border-left:30px solid #a66;font-family: monospace;';
     this.styles['error'] = 'background-color: #eee; border-left:30px solid #909;font-family: monospace;';
     this.styles['default'] = 'background-color: #fff;font-family: monospace;';
   }
  }
} else {
  var log = {
   debug: function(message) { },
   info: function(message) { },
   warn: function(message) { },
   error: function(message) { },
   dir: function(message) { }
}  
}


function stringIsEmpty(strin)
{
//if(((typeof unknownVariable != "undefined") &&
//(typeof unknownVariable.valueOf() == "string")) &&
//(unknownVariable.length > 0)) {
// || (typeof strin.valueOf() != "string") 
  return ((!strin) || (0 === strin.length));
}

function getParamsInQuery(qs) {
    var params = {};
    if (stringIsEmpty(qs))
    {
        return params;
    }
    //elimino il carattere '?' iniziale
    if (qs.substring(0,1) == '?')
    {
      qs = qs.substring(1, qs.length);
    }
    var args = qs.split('&');
    for (var i = 0; i < args.length; i++) {
      if (args[i].indexOf('=') != -1) {
        var pair = args[i].split('=');
        var name = decodeURIComponent(pair[0]);
        var value = (pair.length == 2) ? decodeURIComponent(pair[1]) : '';
        //debug('getQueryParams "' + name + '" = "' + value + '"');
        params[name] = value;
      }
    }
    return params;
}
/*
* ritorna un array associativo di tutti i parametri in query string (presa da location.search)
*/
function getQueryParams() {
    var qs = location.search;
    return getParamsInQuery(qs);
}

function getParamInQueryString( name, qs) {
  var params = getParamsInQuery(qs);
  if (name in params) {
    var param = params[name];
    return (stringIsEmpty(param)) ? '' : param;
  }
  return '';
}

/*
ritorna (sempre come stringa) il valore di un parametro GET (preso da location.search).
se la variabile richiesta non e' settata, o no e' valorizzata torna ''
*/
function getQueryParam( name )
{
  var qs = location.search;
  return getParamInQueryString(name, qs);
}

function getQsForParam(paramKey) {
    var paramValue = getQueryParam(paramKey);
    var qs = (stringIsEmpty(paramValue)) ? '' : paramKey+'='+paramValue;
    return qs;
}
function getScrollCoords()
{
	if (typeof window.pageXOffset != 'undefined')
		return {x: window.pageXOffset, y: window.pageYOffset};
	else if ((!document.compatMode || document.compatMode == 'BackCompat') && document.body && typeof document.body.scrollLeft != 'undefined')
		return {x: document.body.scrollLeft, y: document.body.scrollTop};
	else if (document.compatMode == 'CSS1Compat' && document.documentElement && typeof document.documentElement.scrollLeft != 'undefined')
		return {x: document.documentElement.scrollLeft, y:document.documentElement.scrollTop};
	else
		return null;
}
function hide(object)
{
	if (document.layers && document.layers[object] != null)
		document.layers[object].visibility = 'hidden';
	else if (document.all)
			document.all[object].style.visibility = 'hidden';
	else
			document.getElementById(object).style.visibility = 'hidden';
}
function moveLayerDx(descrizione, layerId, nameSpan, evt, offsetXCorrection)
{
	
	// start html Layer //
	
	var text1 = '<table bgcolor="#000000" cellpadding="0" cellspacing="1" border="0"><tr><td><table bgcolor="#FFFFE1" cellpadding="0" cellspacing="0" border="0"><tr><td><table cellpadding="2" cellspacing="1"><tr><td class="testoBlackSmall">';
	var text2 = '</td></tr></table></td></tr></table></td></tr></table>';

	if(document.layers)
	{
		document.layers[layerId].document.open();
		document.layers[layerId].document.write(text1 + descrizione + text2);
		document.layers[layerId].document.close();
	}
	else if(document.getElementById(layerId))
		{
			document.getElementById(layerId).innerHTML = text1 + descrizione + text2;
		}
	if (document.layers && document.layers[layerId] != null)
	{
		document.layers[layerId].visibility = 'visible';
	}
	else if (document.all)
		{
			document.all[layerId].style.visibility = 'visible';
		}
		else
		{
			document.getElementById(layerId).style.visibility = 'visible';
		}
		
	// end Layer //
	
	// start offset Layer//
	if (document.layers)
	{
		document.layers[layerId].moveTo(evt.pageX + offsetXCorrection, evt.pageY);
	}
	else
	{
		var scrollCoords = getScrollCoords();
		var layer;
		var offsetFromCursor;
		
		if (document.all)
		{
			layer = document.all[layerId];
			offsetFromCursor = layer.offsetHeight + 10;
			layer.style.posLeft = scrollCoords.x + (evt.clientX-150);
			layer.style.posTop = scrollCoords.y + (evt.clientY-offsetFromCursor);
		}
		else if (document.getElementById)
		{
			layer = document.getElementById(layerId);
			offsetFromCursor = layer.offsetHeight + 10;
			if (window.opera && layer)
			{
				layer.style.left = (evt.clientX-150) + 'px';
				layer.style.top = (evt.clientY-offsetFromCursor) + 'px';
			}
			else if (layer && scrollCoords)
			{
				layer.style.left = scrollCoords.x + (evt.clientX-150) + 'px';
				layer.style.top = scrollCoords.y + (evt.clientY-offsetFromCursor) + 'px';
			}
		}
	}
	// end offset Layer//
}


// aggiorna il valore di tutte le select con matchClass se viene modificato il valore di una.
// la verifica e' fatta in base ad un campo hidden con name="orig_"+selectId che contiene il valore originale
function updateIfChanged(matchClass, confirmMessage) {
    var elems = getElementsByClassName(matchClass);
    var size = elems.length;
    //alert("size="+size);
    if (size < 2) {
        return true;
    }
    for (var i=0; i<size; i++) {
        var el = elems[i];
        var orig = getElementByName('prev_'+el.name);
        //alert("el="+el.value+"  orig="+orig.value);
        if (el.value != orig.value) {
            var changeAll = confirm(confirmMessage);
            if (changeAll) {
                changeSelectsWithClassName(matchClass, el.value);
                //return true;
            } else {
                el.value = orig.value;
                //return false;
            }
            return false;
        }
    }
    return true;
}

function alertIfChanged(matchClass, confirmMessage) {
    var elems = getElementsByClassName(matchClass);
    var size = elems.length;
    //if (size < 2) { return true; }
    for (var i=0; i<size; i++) {
        var el = elems[i];
        var orig = getElementByName('prev_'+el.name);
        if (el.value != orig.value) {
            var changeAll = confirm(confirmMessage);
            if (changeAll !== true) {
                el.value = orig.value;
            }
            return false;
        }
    }
    return true;
}

// se almeno un elemento della classe e' cambiato, chiede confirm
// OK: lascia i valori
// NO: riporta tutti i valori a quelli originali
function confirmIfChanged(matchClass, confirmMessage) {
    var elems = getElementsByClassName(matchClass);
    var size = elems.length;
    var changed = false
    var returnValue = true;
    //if (size < 2) { return true; }
    for (var i=0; i<size; i++) {
        var el = elems[i];
        var orig = getElementByName('prev_'+el.name);
        if (el.value != orig.value) {
            changed = true;
            break;
        }
    }
    if (changed) {
      var userConfirm = confirm(confirmMessage);
      if (!userConfirm) {
        for (var i=0; i<size; i++) {
            var el = elems[i];
            var orig = getElementByName('prev_'+el.name);
            el.value = orig.value;
        }
        returnValue = false;
      }
    }
    return returnValue;
}

//se almeno un elemento della classe è cambiato, ritorna true
function checkIfChanged(matchClass) {
    var elems = getElementsByClassName(matchClass);
    var size = elems.length;
    var changed = false
    var returnValue = true;
    //if (size < 2) { return true; }
    for (var i=0; i<size; i++) {
        var el = elems[i];
        var orig = getElementByName('prev_'+el.name);
        if (el.value != orig.value) {
            changed = true;
            break;
        }
    }
    return changed;
}    

// courtesy of http://www.reddit.com/user/itsnotlupus @
// http://bit.ly/upcWxw
// console.log( printf("I have %d cats, 2 %s, and %i bird. %v", -3, "dogs", 1.43, window) );
function printf(msg) {
  var args = Array.prototype.slice.call(arguments,1), arg;
  return msg.replace(/(%[disv])/g, function(a,val) {
    arg = args.shift();
    if (arg !== undefined) {
      switch(val.charCodeAt(1)){
        case 100: return +arg; // d
        case 105: return Math.round(+arg); // i
        case 115: return String(arg); // s
        case 118: return arg; // v
      }
    }
    return val;
  });
}

function checkDateIncassi(matchClass, confirmMessage) {
    var elems = getElementsByClassName(matchClass);
    var size = elems.length;
    for (var i=0; i<size; i++) {
        var el = elems[i];
        if (!el) { continue; }
          var success = checkDateIncassiSingleElement(el, confirmMessage);
          if (success !== true) { return false; }
    
    }
    return true;
}

function checkDateIncassiSingleElement(el, confirmMessage) {
    var orig = getElementByName('prev_'+el.name);
    var min = getElementByName('min_'+el.name);
    var max = getElementByName('max_'+el.name);
    var inputDate = el.value;
    var origDate = orig.value;
    var minDate = min.value;
    var maxDate = max.value;
    if (!isValidDate(inputDate)) {
        alert("Attenzione! Data Scadenza: la sintassi non è corretta");
        return false;
    }
    if (/*(inputDate != origDate) && (*/ !dateInRange(minDate, inputDate, maxDate)) {
       var message = printf(confirmMessage, inputDate, minDate, maxDate);
       alert(message);
       return false;
    }
    return true;
}

function isIbanNaz(iban) {
  if (!iban || iban.length < 2) return false;
  var countryCode = iban.substring(0,2).toUpperCase();
  return ("IT" == countryCode);
}

function checkIbanIncassi(matchClass, confirmMessage) {
    var elems = getElementsByClassName(matchClass);
    var size = elems.length;
    for (var i=0; i<size; i++) {
        var el = elems[i];
        if (!el) { continue; }
          if (!el.value || 0 === el.value.length) {
             alert("IBAN Posizione "+(i+1)+" : Il campo è obbligatorio")
             return false;
          }
          var success = checkIbanIncassiSingleElement(el, confirmMessage);
          if (success !== true) { return false; }
        
    }
    return true;
}

function checkIbanIncassiSingleElement(el, confirmMessage) {
  var orig = getElementByName('prev_'+el.name);
  var newIban = el.value;
  var origIban = orig.value;
  if (isIbanNaz(newIban) != isIbanNaz(origIban)) {
     alert(confirmMessage);
     return false;
  }
  if (!checkDigitIBAN(newIban) ) {
     alert('Formato iban non corretto: '+newIban);
     return false;
  }
  return true;
}

// return elemento con nome "elementName".
// nel caso ce ne sia + di uno, return il primo
// se non ne trova, return ""
function getElementByName(elementName) {
    var elems = document.getElementsByName(elementName);
    return ((elems.length > 0) ? elems[0] : "");
}

// restituisce array di elementi html con classe "matchClass"
function getElementsByClassName(matchClass) {
    var elemWithClass = [];
    var elems = document.getElementsByTagName('*');
    var size = elems.length;
    for (var i=0; i<size; i++) {
        var el = elems[i];
        if (!el) { continue; }
        if((' ' + el.className + ' ').indexOf(' ' + matchClass + ' ') > -1) {
            //console.log(" - found "+el.name+": "+el.value);
            elemWithClass.push(el);
        }
    }
    return elemWithClass;
}

// setta value="newValue" per tutte le select con classe "matchClass"
// utile nelle liste con modifica di un dato che si deve riflettere su tutte le righe
function changeSelectsWithClassName(matchClass, newValue) {
    var elems = getElementsByClassName(matchClass);
    var size = elems.length;
    for (var i=0; i<size; i++) {
        var el = elems[i];
        if (!el) { continue; }
        var orig = getElementByName('prev_'+el.name);
        el.value = newValue;
        orig.value = newValue;
    }
}

/*
verifica che dateUnderTest sia compresa tra from e to
formato: dd/mm/yyyy
se date coincidono sono considerate ok
*/
function dateInRange(from, dateUnderTest, to) {
    return (correctDateSequence(from, dateUnderTest) && correctDateSequence(dateUnderTest, to));
}

/*
Questa funzione verifica che la data 'data_al' sia successiva alla data 'data_dal'
Torna true se le date sono nella sequenza giusta oppure coincidenti
format: dd/mm/yyyy
*/
function correctDateSequence(data_dal, data_al)
{
  
  if ((data_dal =='') || (data_al==''))
    return true;
  
  var ANNO_DAL = data_dal.substr(6,4);
  var MESE_DAL = eval(data_dal.substr(3,2)-1);
  var GIORNO_DAL = data_dal.substr(0,2);
  
  var ANNO_AL = data_al.substr(6,4);
  var MESE_AL = (data_al.substr(3,2)-1);
  var GIORNO_AL = data_al.substr(0,2);
  
  var dal = new Date(ANNO_DAL, MESE_DAL, GIORNO_DAL );
  var al = new Date(ANNO_AL, MESE_AL, GIORNO_AL );
  //console.log("dal="+dal+" al="+al);
  
  return (al >= dal);
}

/*
aggiunge un evento javascript es onchange/onclick
a tutti gli elementi che hanno la classe css
l'evento e' senza "on" davanti, quindi: "change", "click"...
*/
function attachEventToClass(cssClass, eventId, callback) {
    var elems = getElementsByClassName(cssClass);
    var size = elems.length;
    for (var i=0; i<size; i++) {
        var el = elems[i];
        if (!el) { continue; }
        if (el.addEventListener) {
          el.addEventListener(eventId, callback, false);
        } else if (el.attachEvent)  {
          el.attachEvent('on'+eventId, callback);
        }
    }
}

/*

console.log(isValidDate('10-12-1961'));
console.log(isValidDate('12/11/1961'));
console.log(isValidDate('02-11-1961'));
console.log(isValidDate('12/01/1961'));
console.log(isValidDate('13-11-1961'));
console.log(isValidDate('11-31-1961'));
console.log(isValidDate('11-31-1061'));
*/
function isValidDate(date)
{
    var matches = /^(\d{2})[-\/](\d{2})[-\/](\d{4})$/.exec(date);
    if (matches == null) return false;
    var d = matches[1];
    var m = matches[2] - 1;
    var y = matches[3];
    var composedDate = new Date(y, m, d);
    return composedDate.getDate() == d &&
            composedDate.getMonth() == m &&
            composedDate.getFullYear() == y;
}

//Check the checksum of a Ceditor-ID.
function CRIDokay(crid)
{
  return ChecksumCRID(crid) == "97";
}

// Calculate 2-digit checksum of a CRID.
function ChecksumCRID(crid)
{
  var country  = crid.substring(0, 2);
  var checksum = crid.substring(2, 4);
  ////// OMIT BUSINESS CODE var crcode   = crid.substring(4);
  var crcode   = crid.substring(7);

  // Assemble digit string
  var digits = "";
  for (var i = 0; i < crcode.length; ++i)
  {
    var ch = crcode.charAt(i).toUpperCase();
    if ("0" <= ch && ch <= "9")
      digits += ch;
    else
      digits += capital2digits(ch);
  }
  
  for (var i = 0; i < country.length; ++i)
  {
    var ch = country.charAt(i);
    digits += capital2digits(ch);
  }
  digits += checksum;

  // Calculate checksum
  checksum = 98 - mod97(digits);
  return fill0("" + checksum, 2);
}

// Convert a capital letter into digits: A -> 10 ... Z -> 35 (ISO 13616).
function capital2digits(ch)
{
  var capitals = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  for (var i = 0; i < capitals.length; ++i)
    if (ch == capitals.charAt(i))
      break;
  return i + 10;
}

// Modulo 97 for huge numbers given as digit strings.
function mod97(digit_string)
{
  var m = 0;
  for (var i = 0; i < digit_string.length; ++i)
    m = (m * 10 + parseInt(digit_string.charAt(i))) % 97;
  return m;
}

// Fill the string with leading zeros until length is reached.
function fill0(s, l)
{
  while (s.length < l)
    s = "0" + s;
  return s;
}