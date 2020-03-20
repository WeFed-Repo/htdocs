/**
 *
 *  Utilita'.
 *
 *  Javascript Library for ciappini
 *
 *
 *  Copyright (c) 2001 Cedac
 *  author Luigi Tantini <luigi.tantini@cedac.com>
 *
 *
 *  Tested with: Explorer 6
 *               Netscape 4.73
 */

/*
	<FUNZIONE label="clearCheckBox">
	<AUTORE></AUTORE>
	<COMMENTO>
		Deseleziono un checkbox appartentente ad un gruppo(contiguo) di checkbox
		tutti con lo stesso nome *nome* e con posizione *desel*
		desel ha valore da 0 ad n-1 (con n=numero di checkbox)
		a form deve essere la prima.
	</COMMENTO>
	<PARAMETRO label="nome" DESCRIZIONE=""/>
	<PARAMETRO label="desel" DESCRIZIONE=""/>	
	</FUNZIONE>
*/

function clearCheckBox(nome,desel){
        var n = 0;
        for(var i=0; i<document.forms[0].elements.length; i++)
            if(document.forms[0].elements[i].name==nome) {
                if(n==desel) {
                    document.forms[0].elements[i].checked=0;
                    return document.forms[0].elements[i];
                }   else n++;
            }
        return null;
    }
 
/*
	<FUNZIONE label="clearCheckBox2">
	<AUTORE></AUTORE>
	<COMMENTO>
		Deseleziono un checkbox appartentente ad un gruppo(contiguo) di checkbox
        tutti con lo stesso nome *nome* e con posizione *desel*
        desel ha valore da 0 ad n-1 (con n=numero di checkbox)
        la form deve essere specificata fra i parametri
	</COMMENTO>
	<PARAMETRO label="form" DESCRIZIONE=""/>
	<PARAMETRO label="nome" DESCRIZIONE=""/>
	<PARAMETRO label="desel" DESCRIZIONE=""/>	
	</FUNZIONE>
*/ 

function clearCheckBox2(form,nome,desel){
        var n = 0;
        for(var i=0; i<form.elements.length; i++)
            if(form.elements[i].name==nome) {
                if(n==desel) {
                    form.elements[i].checked=0;
                    return form.elements[i];
                }   else n++;
            }
        return null;
    }

/*
	<FUNZIONE label="selectComboByOptionValue">
	<AUTORE></AUTORE>
	<COMMENTO>
		 Select a combo option by value.
	</COMMENTO>
	<PARAMETRO label="combo" DESCRIZIONE="A select reference."/>
	<PARAMETRO label="val" DESCRIZIONE="The string from which to select the option."/>		
	</FUNZIONE>
*/

function selectComboByOptionValue(combo,val)
{
    selIndex = combo.selectedIndex;
    i = 0;
    l = combo.options.length;
    found = false;
    while ((!found)&&(i<l))
    {
        if(combo.options[i].value==val)
        {
            selIndex = i;
            found = true;
        }
        else
        {
            i = i+1;
        }
    }
    if (selIndex != -1)
    {
        combo.options[selIndex].selected = true;
    }

}

/*
	<FUNZIONE label="selectComboByOptionText">
	<AUTORE></AUTORE>
	<COMMENTO>
		 Select a combo option by text.
	</COMMENTO>
	<PARAMETRO label="combo" DESCRIZIONE="A select reference."/>
	<PARAMETRO label="text" DESCRIZIONE="The string from which to select the option."/>		
	</FUNZIONE>
*/

function selectComboByOptionText(combo,text)
{
    selIndex = combo.selectedIndex;
    i = 0;
    l = combo.options.length;
    found = false;
    while ((!found)&&(i<l))
    {
        if(combo.options[i].text==text)
        {
            selIndex = i;
            found = true;
        }
        else
        {
            i = i+1;
        }
    }
    if (selIndex != -1)
    {
        combo.options[selIndex].selected = true;
    }

}

/*
	<FUNZIONE label="clearComboOptions">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>Accetta come parametro l'oggetto combo ripulisce tutti i valori.</COMMENTO>
	<PARAMETRO label="combo" DESCRIZIONE=""/>			
	</FUNZIONE>
*/

function clearComboOptions(combo){
	var itemsNum = combo.length;
	for (i = itemsNum; i >= 0 ; i--){
		combo.options[i] = null;
	}
	combo.selectedIndex=0;
}

/*
	<FUNZIONE label="twoParametersServlet">
	<AUTORE></AUTORE>
	<COMMENTO>Calls a servlet with two parameters and open it in a new window.</COMMENTO>
	<PARAMETRO label="url" DESCRIZIONE=""/>
	<PARAMETRO label="name1" DESCRIZIONE=""/>
	<PARAMETRO label="value1" DESCRIZIONE=""/>
	<PARAMETRO label="name2" DESCRIZIONE=""/>
	<PARAMETRO label="value2" DESCRIZIONE=""/>
	<PARAMETRO label="features" DESCRIZIONE=""/>
	<PARAMETRO label="errDesc" DESCRIZIONE=""/>			
	</FUNZIONE>
*/

function twoParametersServlet(url,name1,value1,name2,value2,features,errDesc)
{
     if((value1 != "") && (value2 != ""))
     {
        var callUrl = url+"?"+name1+"="+value1+"&"+name2+"="+value2;
        window.open(callUrl, url, features);
     }
     else
     {
       alert(errDesc);
     }
}

/*
	<FUNZIONE label="threeParametersServlet">
	<AUTORE></AUTORE>
	<COMMENTO>Calls a servlet with three parameters and open it in a new window.</COMMENTO>
	<PARAMETRO label="url" DESCRIZIONE=""/>
	<PARAMETRO label="name1" DESCRIZIONE=""/>
	<PARAMETRO label="value1" DESCRIZIONE=""/>
	<PARAMETRO label="name2" DESCRIZIONE=""/>
	<PARAMETRO label="value2" DESCRIZIONE=""/>
	<PARAMETRO label="name3" DESCRIZIONE=""/>
	<PARAMETRO label="value3" DESCRIZIONE=""/>
	<PARAMETRO label="feature1" DESCRIZIONE=""/>
	<PARAMETRO label="errDesc" DESCRIZIONE=""/>			
	</FUNZIONE>
*/

function threeParametersServlet(url,name1,value1,name2,value2,name3,value3,feature1,errDesc)
{
     if((value1 != "") && (value2 != "") && (value3 != ""))
     {
     		var parametri = feature1.split(",");
			var t = parametri[1];
     		var largTMP = t.split("=");
			var p = parametri[0];
     		var altezzaTMP = p.split("=");
        	var callUrl = url+"?"+name1+"="+value1+"&"+name2+"="+value2+"&"+name3+"="+value3;
        dialogoCentratoWithScrolls(callUrl, url, largTMP[1], altezzaTMP[1]);
     }
     else
     {
       alert(errDesc);
     }
}

/*
	<FUNZIONE label="waitingMessagePdf">
	<AUTORE></AUTORE>
	<COMMENTO>Write a wait message to a window.</COMMENTO>
	<PARAMETRO label="windowOpened" DESCRIZIONE=""/>				
	</FUNZIONE>
*/

function waitingMessagePdf(windowOpened)
{

    var bufferHTML = "<head><title>Attendere</title>"
    bufferHTML += "<link type='text/css' rel='STYLESHEET' href='../bonifici_files/css/stile.css'>"
    bufferHTML += "<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'/>"
    bufferHTML += "</head>"
    bufferHTML += "<body>"
    bufferHTML += "<table align='center' border='0' cellspacing='0' cellpadding='0' height='100%'>"
    bufferHTML += "<tr><td align='center'>"
    bufferHTML += "<OBJECT classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='../bonifici_files/flash/swflash5r42.cab#version=5,0,0,0' WIDTH='390' HEIGHT='290' id='attesa' ALIGN=''>"
    bufferHTML += "<PARAM NAME='movie' VALUE='../bonifici_files/flash/attesa.swf'/>"
    bufferHTML += "<PARAM NAME='menu' VALUE='false'/>"
    bufferHTML += "<PARAM NAME='quality' VALUE='high'/>"
    bufferHTML += "<PARAM NAME='bgcolor' VALUE='#ffffff'/>"
    bufferHTML += "<EMBED src='../bonifici_files/flash/attesa.swf' loop='false' menu='false' quality='high' bgcolor='#ffffff'WIDTH='480' HEIGHT='300' NAME='attesa' ALIGN='' TYPE='application/x-shockwave-flash' PLUGINSPAGE='http://www.macromedia.com/go/getflashplayer'></EMBED>"
    bufferHTML += "</OBJECT>"
    bufferHTML += "</td>"
    bufferHTML += "</tr></table>"
    bufferHTML += "</body>"
	
	try
	{	
		windowOpened.document.write(bufferHTML)	
		windowOpened.document.close();
	}
	catch(e)
	{	
		// workaround per problema su internet explorer 6.0.29...
		// In alcuni casi internet explorer in caso di finestra gia di stampa gia aperta (doppia stampa consecutiva)
		//visualizzava errore javascript e bloccava la seconda stampa pdf. Catch dell'errore
	}
}

/*
	<FUNZIONE label="waitingMessage">
	<AUTORE></AUTORE>
	<COMMENTO>Write a wait message to a window with an abi background.</COMMENTO>
	<PARAMETRO label="windowOpened" DESCRIZIONE=""/>
	<PARAMETRO label="abi" DESCRIZIONE=""/>				
	</FUNZIONE>
*/

function waitingMessage(windowOpened, abi)
{
	var bufferHTML = "<head><title>Attendere</title>"
	bufferHTML += "<link type='text/css' rel='STYLESHEET' href='../bonifici_files/css/" + abi + "/stile.css'>"
	bufferHTML += "<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'/>"
	bufferHTML += "</head>"
	bufferHTML += "<body background='../bonifici_files/img/" + abi + "/background5.gif'>"
	bufferHTML += "<div id='menu1' style='POSITION: absolute; TOP: 0px;VISIBILITY: hidden;' onmouseout=\"parent.middle.layerTimeOut('menu1','onmouseoutDalLayer')\" onmouseover='parent.middle.clearTimeOut();'></div>"
	bufferHTML += "<div id='menu2' style='POSITION: absolute; TOP: 0px;VISIBILITY: hidden;' onmouseout=\"parent.middle.layerTimeOut('menu2','onmouseoutDalLayer')\" onmouseover='parent.middle.clearTimeOut();'></div>"
	bufferHTML += "<table align='center' border='0' cellspacing='0' cellpadding='0' height='100%'>"
	bufferHTML += "<tr><td align='center'>"
    bufferHTML += "<OBJECT classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='../bonifici_files/flash/swflash5r42.cab#version=5,0,0,0' WIDTH='390' HEIGHT='290' id='attesa' ALIGN=''>"
    bufferHTML += "<PARAM NAME='movie' VALUE='../bonifici_files/flash/attesa.swf'/>"
    bufferHTML += "<PARAM NAME='menu' VALUE='false'/>"
    bufferHTML += "<PARAM NAME='quality' VALUE='high'/>"
    bufferHTML += "<param name='wmode' value='transparent'>"
    bufferHTML += "<EMBED src='../bonifici_files/flash/attesa.swf' loop='false' menu='false' quality='high' wmode='transparent' WIDTH='480' HEIGHT='300' NAME='attesa' ALIGN='' TYPE='application/x-shockwave-flash' PLUGINSPAGE='http://www.macromedia.com/go/getflashplayer'></EMBED>"
    bufferHTML += "</OBJECT>"
    bufferHTML += "</td>"
    bufferHTML += "</tr></table>"
    bufferHTML += "</body>"
    windowOpened.document.write(bufferHTML)
    windowOpened.document.close();
}

// LAYER CODE //

/*
	<FUNZIONE label="moveLayer">
	<AUTORE></AUTORE>
	<COMMENTO>Descrizione........</COMMENTO>
	<PARAMETRO label="descrizione" DESCRIZIONE=""/>
	<PARAMETRO label="layerId" DESCRIZIONE=""/>
	<PARAMETRO label="nameSpan" DESCRIZIONE=""/>
	<PARAMETRO label="evt" DESCRIZIONE=""/>
	<PARAMETRO label="offsetXCorrection" DESCRIZIONE=""/>				
	</FUNZIONE>
*/

function moveLayer(descrizione, layerId, nameSpan, evt, offsetXCorrection)
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
	else
		if(document.getElementById(layerId))
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
	
	// end html Layer //
	
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
			
			layer.style.posLeft = scrollCoords.x + evt.clientX;
			layer.style.posTop = scrollCoords.y + (evt.clientY-offsetFromCursor);
		}
		else if (document.getElementById)
		{
			layer = document.getElementById(layerId);
			offsetFromCursor = layer.offsetHeight + 10;
			
			if (window.opera && layer)
			{
				layer.style.left = evt.clientX + 'px';
				layer.style.top = (evt.clientY-offsetFromCursor) + 'px';
			}
			else if (layer && scrollCoords)
			{
				layer.style.left = (scrollCoords.x + evt.clientX) + 'px';
				layer.style.top = scrollCoords.y + (evt.clientY-offsetFromCursor)+ 'px';
			}
		}
	}
	// end offset Layer//
}

/*
	<FUNZIONE label="moveLayerDx">
	<AUTORE></AUTORE>
	<COMMENTO>Descrizione........</COMMENTO>
	<PARAMETRO label="descrizione" DESCRIZIONE=""/>
	<PARAMETRO label="layerId" DESCRIZIONE=""/>
	<PARAMETRO label="nameSpan" DESCRIZIONE=""/>
	<PARAMETRO label="evt" DESCRIZIONE=""/>
	<PARAMETRO label="offsetXCorrection" DESCRIZIONE=""/>				
	</FUNZIONE>
*/

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

/*
	<FUNZIONE label="hide">
	<AUTORE></AUTORE>
	<COMMENTO>Descrizione........</COMMENTO>
	<PARAMETRO label="object" DESCRIZIONE=""/>			
	</FUNZIONE>
*/

function hide(object)
{
	if (document.layers && document.layers[object] != null)
		document.layers[object].visibility = 'hidden';
	else if (document.all)
			document.all[object].style.visibility = 'hidden';
	else
			document.getElementById(object).style.visibility = 'hidden';
}

/*
	<FUNZIONE label="getScrollCoords">
	<AUTORE></AUTORE>
	<COMMENTO>Descrizione........</COMMENTO>				
	</FUNZIONE>
*/

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

// END LAYER CODE //

/*
	<FUNZIONE label="fitToLength">
	<AUTORE></AUTORE>
	<COMMENTO>Truncate string to the length spec., adding commas if the string is trucated.</COMMENTO>
	<PARAMETRO label="value" DESCRIZIONE="The string to elaborate."/>
	<PARAMETRO label="start" DESCRIZIONE="The starting index."/>
	<PARAMETRO label="length" DESCRIZIONE="The length to fit to."/>				
	</FUNZIONE>
*/

function fitToLength(value,start,length)
{
   var result = null;
   if (value.length > length)
   {
       result = value.substr(start,length-3)+"...";
   }
   else
   {
       result = value;
   }
   return result;
}

/*
	<FUNZIONE label="getSubString">
	<AUTORE></AUTORE>
	<COMMENTO>Truncate string to the length spec.</COMMENTO>
	<PARAMETRO label="value" DESCRIZIONE="The string to elaborate."/>
	<PARAMETRO label="start" DESCRIZIONE="The starting index."/>
	<PARAMETRO label="length" DESCRIZIONE="The length to fit to."/>				
	</FUNZIONE>
*/
function getSubString(value,start,length)
{
   var result = null;
   if (value.length > length)
   {
       result = value.substr(start,length);
   }
   else
   {
       result = value;
   }
   return result;
}

/*
	<FUNZIONE label="logout">
	<AUTORE></AUTORE>
	<COMMENTO>Descrizione........</COMMENTO>
	<PARAMETRO label="msg" DESCRIZIONE=""/>
	<PARAMETRO label="win" DESCRIZIONE=""/>					
	</FUNZIONE>
*/

function logout(msg,win)
{
    alert(msg);
    parent.topframe.closing='true';
    dest = win.document.dummy.action;

    if (win.opener != null)
    {
        win.opener.parent.parent.parent.document.close();
        win.opener.parent.parent.parent.location.replace(dest);
        win.close();
    }
    else
    {
        win.parent.parent.parent.document.close();
        win.parent.parent.parent.location.replace(dest);
    }
}

/*
	<FUNZIONE label="getXsize">
	<AUTORE></AUTORE>
	<COMMENTO>Descrizione........</COMMENTO>						
	</FUNZIONE>
*/

function getXsize()
{
   currentx = screen.width;
   delta = currentx*3.75/100;
   out = Math.ceil(currentx-delta);
   if (out>=800)
   {
      return 800
   }
   else
   {
      return out;
   }
}

/*
	<FUNZIONE label="getYsize">
	<AUTORE></AUTORE>
	<COMMENTO>Descrizione........</COMMENTO>						
	</FUNZIONE>
*/

function getYsize()
{
   currenty = screen.height;
   delta = currenty*13.33/100;
   out = Math.ceil(currenty-delta);
   if (out>=600)
   {
      return 600
   }
   else
   {
     return out;
   }
}

/*
	<FUNZIONE label="getXmove">
	<AUTORE></AUTORE>
	<COMMENTO>Descrizione........</COMMENTO>						
	</FUNZIONE>
*/

function getXmove()
{
   currentx = screen.width;
   delta = 10*currentx/1024;
   return Math.ceil(delta);
}

/*
	<FUNZIONE label="getYmove">
	<AUTORE></AUTORE>
	<COMMENTO>Descrizione........</COMMENTO>						
	</FUNZIONE>
*/

function getYmove()
{
   currenty = screen.height;
   delta = 10*currenty/768;
   return Math.ceil(delta);
}

var hideMe = (document.layers) ? 'hide' : 'hidden';
var showMe = (document.layers) ? 'show' : 'visible';

/*
	<FUNZIONE label="getObject">
	<AUTORE></AUTORE>
	<COMMENTO>Descrizione........</COMMENTO>
	<PARAMETRO label="name" DESCRIZIONE=""/>						
	</FUNZIONE>
*/

function getObject(name)
{
    if(document.getElementById) return document.getElementById(name);
    else if(document.all) return document.all[name];
    else if(document.layers) return document.layers[name];
}

/*
	<FUNZIONE label="wait">
	<AUTORE></AUTORE>
	<COMMENTO>Descrizione........</COMMENTO>							
	</FUNZIONE>
*/

function wait()
{
  var lyr1 = (document.layers) ? getObject('main') : getObject('main').style;
  lyr1.visibility = hideMe;
  var lyr2 = (document.layers) ? getObject('wait') : getObject('wait').style;
  lyr2.visibility = showMe;
  return true;
}

/*
	<FUNZIONE label="main">
	<AUTORE></AUTORE>
	<COMMENTO>Descrizione........</COMMENTO>							
	</FUNZIONE>
*/

function main()
{
  var lyr1 = (document.layers) ? getObject('main') : getObject('main').style;
  lyr1.visibility = showMe;
  var lyr2 = (document.layers) ? getObject('wait') : getObject('wait').style;
  lyr2.visibility = hideMe;
  return true;
}

/*
	<FUNZIONE label="dialogoCentrato">
	<AUTORE>Luigi Tantini</AUTORE>
	<COMMENTO>Finestra di dialogo modale.</COMMENTO>
	<PARAMETRO label="indirizzo" DESCRIZIONE=""/>
	<PARAMETRO label="titolo" DESCRIZIONE=""/>
	<PARAMETRO label="larghezza" DESCRIZIONE=""/>
	<PARAMETRO label="altezza" DESCRIZIONE=""/>							
	</FUNZIONE>
*/

function dialogoCentrato(indirizzo,titolo,larghezza, altezza)
{
	if(window.screenX)
	{
		sinistra	= (window.outerWidth/2)+window.screenX-(larghezza/2);
		sopra		= (window.outerHeight/2)+window.screenY-(altezza/2);
	}
	else
	{
		// Per Internet Explorer
		sinistra	= (screen.availWidth/2)-(larghezza/2);
		sopra		= (screen.availHeight/2)-(altezza/2);
	}
	parametri	= "height="+altezza+",width="+larghezza+",resizable=yes,scrollbars=no,screenX="+sinistra+",left="+sinistra+",screenY="+sopra+",top="+sopra+",dependent=yes,location=no";
	myWin=open(indirizzo,titolo, parametri);
	return myWin;
}

/*
	<FUNZIONE label="dialogoCentratoWithScrolls">
	<AUTORE>Luigi Tantini</AUTORE>
	<COMMENTO>Finestra di dialogo modale con scroll bars.</COMMENTO>
	<PARAMETRO label="indirizzo" DESCRIZIONE=""/>
	<PARAMETRO label="titolo" DESCRIZIONE=""/>
	<PARAMETRO label="larghezza" DESCRIZIONE=""/>
	<PARAMETRO label="altezza" DESCRIZIONE=""/>							
	</FUNZIONE>
*/

//DELETE DELETE
/*function popuponclick(indirizzo,titolo,parametri)
{
myWin = window.open(indirizzo,titolo,parametri);  
}

function closepopup()
{
 if(myWin!='' && false == myWin.closed)
 {
 myWin.close();
 }
 else
 {
 alert('Window already closed!');
 }
}
*/


function dialogoCentratoWithScrolls(indirizzo,titolo,larghezza, altezza)
{
	
	if(window.screenX)
	{
		sinistra	= (window.outerWidth/2)+window.screenX-(larghezza/2);
		sopra		= (window.outerHeight/2)+window.screenY-(altezza/2);
	}
	else
	{
		// Per Internet Explorer
		sinistra	= (screen.availWidth/2)-(larghezza/2);
		sopra		= (screen.availHeight/2)-(altezza/2);
	}
	parametri	= "height="+altezza+",width="+larghezza+",resizable=yes,scrollbars=yes,screenX="+sinistra+",left="+sinistra+",screenY="+sopra+",top="+sopra+",dependent=yes,location=no";
	//ITEC creo un tiolo nuovo per ogni nuova pagina aperta per evitare conflitti tra i browser 
 	titolo1= Math.round(new Date().getTime()/1000.0);
	myWin=window.open(indirizzo,titolo1,parametri);
	
	
	return myWin;
}

/*
	<FUNZIONE label="popHelp">
	<AUTORE>Piero Bargellini,Adriano Antonelli</AUTORE>
	<COMMENTO>Finestra di dialogo modale per i link che puntano agli help.</COMMENTO>
	<PARAMETRO label="indirizzo" DESCRIZIONE=""/>
	<PARAMETRO label="titolo" DESCRIZIONE=""/>
	<PARAMETRO label="parametri" DESCRIZIONE="toolbar='yes or no',scrollbars='yes or no',status='yes or no',width='valore numerico larghezza',height='valore numerico altezza'"/>
	<PARAMETRO label="larghezza" DESCRIZIONE="Valore numerico."/>
	<PARAMETRO label="altezza" DESCRIZIONE="Valore numerico."/>							
	</FUNZIONE>
*/

function popHelp(indirizzo,titolo,parametri,larghezza,altezza)
{
	if(window.screenX)
	{
		sinistra	= (window.outerWidth/2)+window.screenX-(larghezza/2);
		sopra		= (window.outerHeight/2)+window.screenY-(altezza/2);
	}
	else
	{
		// Per Internet Explorer
		sinistra	= (screen.availWidth/2)-(larghezza/2);
		sopra		= (screen.availHeight/2)-(altezza/2);
	}
	parametri	= parametri + "resizable=yes,screenX="+sinistra+",left="+sinistra+",screenY="+sopra+",top="+sopra+",dependent=yes";
	myWin=open(indirizzo,titolo, parametri);
	return myWin;
}

/*
	<FUNZIONE label="collaps">
	<AUTORE>Piero Bargellini</AUTORE>
	<COMMENTO>Nasconde o visualizza il blocco tr nell'onclick del bottone o dell' immagine.</COMMENTO>
	<PARAMETRO label="id" DESCRIZIONE=""/>							
	</FUNZIONE>
*/

function collaps(id) {
    if (document.all) {
        var nomeImg = "img" + id
        if (document.getElementById(id).style.display == 'none') {
            document.getElementById(id).style.display = 'block';
            document.all(nomeImg).src = "../newstyle/static/images/ico-collapse.png";
        }
        else {
            document.getElementById(id).style.display = 'none';
            document.all(nomeImg).src = "../newstyle/static/images/ico-expand.png";
        }
    }
}

// restituisce un oggetto data partendo da stringa in formato 'gg/mm/aaaa'
// l'orario dell'oggetto e' settato a 00:00:00
function dateObject(dateString)
{
	if (dateString == undefined) return null;
	if (dateString.length < 10) return null;
	
	var d = dateString.substring(0,2); 
	var ms = dateString.substring(3,5);
	var m = parseInt(ms);
	m = m - 1;
	var y = dateString.substring(6,10);
	
	var dObj = new Date();
	dObj.setDate(d);
	dObj.setMonth(m);
	dObj.setYear(y);
	dObj.setHours(0);
	dObj.setMinutes(0);
	dObj.setSeconds(0);
	return dObj;
}

// confronta un oggetto Date con la data di oggi e restituisce true se l'oggetto testato e' oggi o una data precedente
function scadenzaMinoreUgualeOggi(dataScadenza)
{
    var todayDate = new Date();
    todayDate.setHours(0);
    todayDate.setMinutes(0);
    todayDate.setSeconds(0);
        
    if (todayDate.getYear() < dataScadenza.getYear()) { return false; }
    if (dataScadenza.getYear() < todayDate.getYear()) { return true; }
    
    // sono lo stesso anno, confronto mese
    if (todayDate.getMonth() < dataScadenza.getMonth()) { return false; }
    if (dataScadenza.getMonth() < todayDate.getMonth()) { return true; }
    
    // sono lo stesso mese, confronto giorno
    if (todayDate.getDate() < dataScadenza.getDate()) { return false; }
    return true;
}

// http://phpjs.org/functions/number_format/
// https://raw.github.com/kvz/phpjs/master/functions/strings/number_format.js
function number_format (number, decimals, dec_point, thousands_sep) {
	  // *     example 1: number_format(1234.56);
	  // *     returns 1: '1,235'
	  // *     example 2: number_format(1234.56, 2, ',', ' ');
	  // *     returns 2: '1 234,56'
	  // *     example 3: number_format(1234.5678, 2, '.', '');
	  // *     returns 3: '1234.57'
	  // *     example 4: number_format(67, 2, ',', '.');
	  // *     returns 4: '67,00'
	  // *     example 5: number_format(1000);
	  // *     returns 5: '1,000'
	  // *     example 6: number_format(67.311, 2);
	  // *     returns 6: '67.31'
	  // *     example 7: number_format(1000.55, 1);
	  // *     returns 7: '1,000.6'
	  // *     example 8: number_format(67000, 5, ',', '.');
	  // *     returns 8: '67.000,00000'
	  // *     example 9: number_format(0.9, 0);
	  // *     returns 9: '1'
	  // *    example 10: number_format('1.20', 2);
	  // *    returns 10: '1.20'
	  // *    example 11: number_format('1.20', 4);
	  // *    returns 11: '1.2000'
	  // *    example 12: number_format('1.2000', 3);
	  // *    returns 12: '1.200'
	  // *    example 13: number_format('1 000,50', 2, '.', ' ');
	  // *    returns 13: '100 050.00'
	  // Strip all characters but numerical ones.
	  number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
	  var n = !isFinite(+number) ? 0 : +number,
	    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
	    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
	    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
	    s = '',
	    toFixedFix = function (n, prec) {
	      var k = Math.pow(10, prec);
	      return '' + Math.round(n * k) / k;
	    };
	  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
	  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
	  if (s[0].length > 3) {
	    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
	  }
	  if ((s[1] || '').length < prec) {
	    s[1] = s[1] || '';
	    s[1] += new Array(prec - s[1].length + 1).join('0');
	  }
	  return s.join(dec);
	}

function setVisible(id, vis) 
{
	if(vis)
		document.getElementById(id).style.visibility = 'visible';
	else
		document.getElementById(id).style.visibility = 'hidden';
}
