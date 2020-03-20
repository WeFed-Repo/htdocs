
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
					parametri = "height="+altezza+",width="+larghezza+",resizable=yes,scrollbars=yes,screenX="+sinistra+",left="+sinistra+",screenY="+sopra+",top="+sopra+",dependent=yes";
					if(titolo.indexOf('/')>=0){
						var arrTitolo = titolo.split('/'); 
						titolo = arrTitolo[arrTitolo.length-1];
					}
/*1.0.3.x*/			myWin = window.open(indirizzo, titolo, parametri);
//produzione		myWin = window.open("../../ibbweb/"+indirizzo, titolo, parametri);
					return myWin;
				}
				function dialogoCentratoWithoutScrolls(indirizzo,titolo,larghezza, altezza)
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
					parametri = "height="+altezza+",width="+larghezza+",resizable=yes,scrollbars=no,screenX="+sinistra+",left="+sinistra+",screenY="+sopra+",top="+sopra+",dependent=yes";
					myWin = window.open(indirizzo, titolo, parametri);
					return myWin;
				}
	
			
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
			
			
				function setSportello(id,cod_abi,cod_cab,localita,nome)
				{
				  document.forms[0].elements['anagrafica.coordinateBanca.ABI'].value=cod_abi;
				  document.forms[0].elements['anagrafica.coordinateBanca.CAB'].value=cod_cab;
				  var field = document.forms[0].elements['anagrafica.coordinateBanca.desBanca'];
				  var maxlength = field.getAttribute('maxlength')? field.getAttribute('maxlength'):60; 
				  field.value=nome.substring(0, maxlength);
				}
				
				
				function gotoservlet(url,title)
				{
				  dialogoCentratoWithScrolls(url, title, 700, 350);
				}
				
				
				function verificaSportello()
				{
					var abiDes = document.forms[0].elements['anagrafica.coordinateBanca.ABI'].value;
					var cabDes = document.forms[0].elements['anagrafica.coordinateBanca.CAB'].value;
					var localeutente = document.forms[0].elements['javascript.locale'];
					var linguautente = 'it';		
					if (localeutente != null)
					{
						linguautente = localeutente.value;
					}
			
					
					if(abiDes!='' && cabDes!='')
					{
/*1.0.3.x*/				threeParametersServlet('../../ibbweb/verifyabicab','cod-abi',abiDes,'cod-cab',cabDes,'verify','true','height=280,width=350,resizable=no,scrollbars=yes,screenX=600,dependent=yes','Selezionare tutti i campi obbligatori.');
//produzione			threeParametersServlet('verifyabicab','cod-abi',abiDes,'cod-cab',cabDes,'verify','true','height=280,width=350,resizable=no,scrollbars=yes,screenX=600,dependent=yes','Selezionare tutti i campi obbligatori.');
					}
					else
					{
						if (linguautente == 'it')
							alert("Inserire i codici ABI e CAB");
						else
							alert("Enter bank and branch codes");
					}
				}

				function lookupcreditorisearch()
				{
					var lookupServlet = "lookupfornitori" + fromWhereLookup + "search";
					
					//if (document.forms[0].elements['bonificoSepa.grpHdr.initgPty.nm'].value == "")
					if (document.forms[0].elements['contextSelectorData.id'].value == "")
					{
						alert("Selezionare prima un intestatario");
					}
					else
					{
//						if(document.forms[0].elements['bonificoSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.nm'].value=="")
						document.forms[0].elements['tipoRicerca']='fornitore';
						if(document.forms[0].elements['disposizione.beneficiario.nm'].value=="")
						{
							//redirect = lookupServlet+"?intestatario="+document.forms[0].elements['bonificoSepa.grpHdr.initgPty.nm'].value;
							redirect = lookupServlet+"?intestatario="+document.forms[0].elements['contextSelectorData.id'].value;
						}
						else
						{
							//redirect = lookupServlet+"?descrizione_destinatario="+document.forms[0].elements['bonificoSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.nm'].value+"&command=Cerca&intestatario="+document.forms[0].elements['bonificoSepa.grpHdr.initgPty.nm'].value;
							redirect = lookupServlet+"?descrizione_destinatario="+document.forms[0].elements['bonificoSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.nm'].value+"&command=Cerca&intestatario="+document.forms[0].elements['contextSelectorData.id'].value;
						}
						if (fromWhereLookup=="estero")
						{
							redirect = redirect + '&tipo_fornitore=E';
						}
						gotoservlet(redirect,"CercaNominativo");
					}
				}

				function lookupcreditorisearchWithCod()
				{
					var lookupServlet = "lookupfornitori"+ fromWhereLookup +"search";
					
					//if (document.forms[0].elements['bonificoSepa.grpHdr.initgPty.nm'].value == "")
					if (document.forms[0].elements['contextSelectorData.id'].value == "")
					{
						alert("Selezionare prima un intestatario");
					}
					else
					{
						if(document.forms[0].elements['codiceFornitore'].value=="")
						{
							//redirect = lookupServlet+"?intestatario="+document.forms[0].elements['bonificoSepa.grpHdr.initgPty.nm'].value;
							redirect = lookupServlet+"?intestatario="+document.forms[0].elements['contextSelectorData.id'].value;
						}
						else
						{
							//redirect = lookupServlet+"?codice_cliente_beneficiario="+document.forms[0].elements['codiceFornitore'].value+"&command=Cerca&intestatario="+document.forms[0].elements['bonificoSepa.grpHdr.initgPty.nm'].value;
							redirect = lookupServlet+"?codice_cliente_beneficiario="+document.forms[0].elements['codiceFornitore'].value+"&command=Cerca&intestatario="+document.forms[0].elements['contextSelectorData.id'].value;
						}
						if (fromWhereLookup=="estero")
						{
							redirect = redirect + '&tipo_fornitore=E';
						}
						gotoservlet(redirect,"CercaNominativo");
					}
				}
				
				function lookupdipendentisearch()
				{
					var lookupServlet = "lookupdipendentisearch";
					if (document.forms[0].elements['contextSelectorData.id'].value == "")
					{
						alert("Selezionare prima un intestatario");
					}
					else
					{
						if(document.forms[0].elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.nm'].value=="")
						{
							redirect = lookupServlet+"?intestatario="+document.forms[0].elements['contextSelectorData.id'].value;
						}
						else
						{
							redirect = lookupServlet+"?descrizione_destinatario="+document.forms[0].elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.nm'].value+"&command=Cerca&intestatario="+document.forms[0].elements['contextSelectorData.id'].value;
						}
						
						gotoservlet(redirect,"CercaNominativo");
					}
				}
	
				function lookupdipendentisearchWithCod()
				{
					var lookupServlet = "lookupdipendentisearch";
					if (document.forms[0].elements['contextSelectorData.id'].value == "")
					{
						alert("Selezionare prima un intestatario");
					}
					else
					{
						if(document.forms[0].elements['codiceFornitore'].value=="")
						{
							redirect = lookupServlet+"?intestatario="+document.forms[0].elements['contextSelectorData.id'].value;
						}
						else
						{
							redirect = lookupServlet+"?codice_cliente_beneficiario="+document.forms[0].elements['codiceFornitore'].value+"&command=Cerca&intestatario="+document.forms[0].elements['contextSelectorData.id'].value;
						}
						gotoservlet(redirect,"CercaNominativo");
					}
				}
				function lookupagency()
				{
						if(document.forms[0].elements['anagrafica.coordinateBanca.ABI'].value=="")
						{
//produzione           		gotoservlet("lookupagency","CercaAgenzia");
/*1.0.3.X*/					gotoservlet("../../ibbweb/lookupagency","CercaAgenzia");
						}
						else
						{
//produzione                gotoservlet("lookupagency?cod-abi="+document.forms[0].elements['anagrafica.coordinateBanca.ABI'].value+"&command=Cerca","CercaAgenzia");
/*1.0.3.X*/					gotoservlet("../../ibbweb/lookupagency?cod-abi="+document.forms[0].elements['anagrafica.coordinateBanca.ABI'].value+"&command=Cerca","CercaAgenzia");
					
						}
				}
				
				function setDivisa(p, descrizione)
				{
						document.forms[0].elements['anagrafica.coordinateBanca.codDivisaConto'].value=p;
				}
				
				
				function lookupcurrency()
				{		
						if(document.forms[0].elements['anagrafica.coordinateBanca.codDivisaConto'].value=="")
						{
							gotoservlet("../../ibbweb/lookupcurrency?cod_divisa=0&command=Cerca","CercaDivisa");
						}
						else
						{
							gotoservlet("../../ibbweb/lookupcurrency?cod_divisa="+document.forms[0].elements['anagrafica.coordinateBanca.codDivisaConto'].value+"&command=Cerca","CercaDivisa");
						}
				}
				
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
					indirizzo = "newstyle/" + indirizzo;
					parametri	= parametri + "resizable=yes,screenX="+sinistra+",left="+sinistra+",screenY="+sopra+",top="+sopra+",dependent=yes";
					myWin=open("../../ibbweb/"+indirizzo,titolo, parametri);
					return myWin;
				}
				function popHelpNew(indirizzo,titolo,parametri,larghezza,altezza)
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
					
					indirizzo = "newstyle/" + indirizzo;
						
					parametri	= parametri + "resizable=yes,screenX="+sinistra+",left="+sinistra+",screenY="+sopra+",top="+sopra+",dependent=yes";
					myWin=open("../../ibbweb2/"+indirizzo,titolo, parametri);
					return myWin;
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
    //bufferHTML += "<link type='text/css' rel='STYLESHEET' href='../bonifici_files/css/stile.css'>"
    bufferHTML += "<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'/>"
    bufferHTML += "</head>"
    bufferHTML += "<body>"
    bufferHTML += "<table align='center' border='0' cellspacing='0' cellpadding='0' height='100%'>"
    bufferHTML += "<tr><td align='center'>"
    bufferHTML += "<OBJECT classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='../bonifici_files/flash/swflash5r42.cab#version=5,0,0,0' WIDTH='390' HEIGHT='290' id='attesa' ALIGN=''>"
    bufferHTML += "<PARAM NAME='movie' VALUE='../static/images/attesa.swf'/>"
    bufferHTML += "<PARAM NAME='menu' VALUE='false'/>"
    bufferHTML += "<PARAM NAME='quality' VALUE='high'/>"
    bufferHTML += "<PARAM NAME='bgcolor' VALUE='#ffffff'/>"
    bufferHTML += "<EMBED src='../static/images/attesa.swf' loop='false' menu='false' quality='high' WIDTH='480' HEIGHT='300' NAME='attesa' ALIGN='' TYPE='application/x-shockwave-flash' PLUGINSPAGE='http://www.macromedia.com/go/getflashplayer'></EMBED>"
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
		// problema in internet explorer 6.0.29...
		// problema relativo alla stampa di pi� pdf senza aver prima
		//chiuso la pagina del pdf precedente
	}
}
	
	//funzione per eseguire l'encode di tutti i campi di testo di tutte
	//le form presenti nella pagina
	function encodeAll()
	{
	
		valori2= document.forms;
		
		for(j=0; j<valori2.length; j++)
		{
			valori3 = valori2[j];
			for(k=0; k<valori3.length; k++)
			{
				valori3[k].value = escape(valori3[k].value);
			}
		}
	}


	function dencodeAll()
	{
		valori2= document.forms;
		
		for(j=0; j<valori2.length; j++)
		{
			valori3 = valori2[j];
			for(k=0; k<valori3.length; k++)
			{
				valori3[k].value = unescape(valori3[k].value);
			}
		}
	}

/*
	<FUNZIONE label="collaps">
	<AUTORE>Marco Nazaro</AUTORE>
	<COMMENTO>nasconde e visualizza la riga contenente la table 
			  con le informazioni per il CVS
	</COMMENTO>
	<PARAMETRO label="id" DESCRIZIONE="numero della riga con tag TR da visualizzare o nascondere"/>							
	</FUNZIONE>
*/

function collaps(id){				
		var nomeImg = "img"+id;
		var nomeTr = "riga"+id;
		var field = document.getElementById(nomeTr);
		if (field == null) {
			return ;
		}

		if (field.style.display && field.style.display =='none')
		{
			if (field.style.removeProperty) {
				field.style.removeProperty("display");
			}else{
				if ((typeof field.style.removeAttribute) != 'undefined') {
					field.style.removeAttribute("display");
				}
			}
			document.all(nomeImg).src = "../newstyle/static/images/ico-collapse.png";
		}
		else
		{
			field.style.display = 'none';
			document.all(nomeImg).src = "../newstyle/static/images/ico-expand.png";
		}

}

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



function lookupCausale(FieldCausaleToFill)
					{
						fieldToFill = FieldCausaleToFill;
						gotoservlet("lookupCausale?causale_valutaria=" + FieldCausaleToFill.value, "causali");
					}

function checkReal(value)
{
	 decimal = false;
	 input = value.toString();
	 for (var i = 0; i < input.length; i++)
	 {
		 var inputChar = input.charAt(i);
		
		 // Skip the sign
		 if ((i == 0 && inputChar == "-") || (i == 0 && inputChar == "+"))
		 {
			 continue
		 }
		 remainingLength = input.length - i -1;
		 // Skip the FIRST '.' or ','
		 if ( (inputChar == "." && !decimal && (remainingLength!=0)) || (inputChar == "," && !decimal && (remainingLength!=0)))
		 {
			 decimal = true;
			 continue
		 }
		 if (inputChar < "0" || inputChar > "9")
		 {
		 	return false
		 }
	 }
	 return true;
} 
/*
 Funzione per rimuovere i decimali oltre la seconda cifra
*/
function togliDecimali(stringaCampo)
{
 cifraIntera = document.forms[0].elements[stringaCampo].value;
 
 var indiceDecimale = 0;
 
  for (var i = 0; i < cifraIntera.length; i++)
	 {
	 	 var inputChar = cifraIntera.charAt(i);
	 	 
	 	 
	 	 if (inputChar == "." || inputChar == ",")
	 	 {
	 	 	indiceDecimale = i;
	 	 	break;
	 	 }
	 }
	if(indiceDecimale!=0){
		 document.forms[0].elements[stringaCampo].value = cifraIntera.substring(0,indiceDecimale+3);
	 }
	 else{
	 	document.forms[0].elements[stringaCampo].value;
	 }
}

/*
 lookup alla quale passare il nome dei campi da cui prendere i 
 parametri per chiamare il popup!
 */
 				function lookupcreditorisearchName(strNome)
				{
					var lookupServlet = "lookupfornitori" + fromWhereLookup + "search";
					
					//if (document.forms[0].elements['bonificoSepa.grpHdr.initgPty.nm'].value == "")
					if (document.forms[0].elements['contextSelectorData.id'].value == "")
					{
						alert("Selezionare prima un intestatario");
					}
					else
					{
						if(document.forms[0].elements[strNome].value=="")
						{
							//redirect = lookupServlet+"?intestatario="+document.forms[0].elements['bonificoSepa.grpHdr.initgPty.nm'].value;
							redirect = lookupServlet+"?intestatario="+document.forms[0].elements['contextSelectorData.id'].value;
						}
						else
						{
							//redirect = lookupServlet+"?descrizione_destinatario="+document.forms[0].elements['bonificoSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.nm'].value+"&command=Cerca&intestatario="+document.forms[0].elements['bonificoSepa.grpHdr.initgPty.nm'].value;
							redirect = lookupServlet+"?descrizione_destinatario="+document.forms[0].elements[strNome].value+"&command=Cerca&intestatario="+document.forms[0].elements['contextSelectorData.id'].value;
						}
						if (fromWhereLookup=="estero")
						{
							redirect = redirect + '&tipo_fornitore=E';
						}
						gotoservlet(redirect,"CercaNominativo");
					}
				}
/*
	Funzione che setta la visibilit� dei campi all'occorenza
*/
function setVisible(id, vis){
	var el = document.getElementById(id);
	if (!el) {
		return;
	}
	if(vis)
		el.style.visibility = 'visible';
	else
		el.style.visibility = 'hidden';
}
/*
<FUNZIONE label="lockFieldByName">
<AUTORE>Fernando Raji</AUTORE>
<COMMENTO>
	lock or unlock the DOM element selected by name		
</COMMENTO>
<PARAMETRO label="name" 	DESCRIZIONE="string: 	name of the DOM element"/>
<PARAMETRO label="lock" 	DESCRIZIONE="boolean:	true = lock; 	false = unlock"/>
<PARAMETRO label="grayed" 	DESCRIZIONE="boolean:	true = grayed; 	false = white"/>
</FUNZIONE>
*/
function lockFieldByName(name, lock, grayed){
	var elems = document.getElementsByName(name);
	if (elems && elems.length < 1) {
		return;
	}
	lockFieldByID(elems[0].id, lock, grayed);
}
/*
<FUNZIONE label="lockFieldByID">
<AUTORE>Fernando Raji</AUTORE>
<COMMENTO>
	lock or unlock the DOM element selected by ID		
</COMMENTO>
<PARAMETRO label="name" 	DESCRIZIONE="string: 	name of the DOM element"/>
<PARAMETRO label="lock" 	DESCRIZIONE="boolean:	true = lock; 	false = unlock"/>
<PARAMETRO label="grayed" 	DESCRIZIONE="boolean:	true = grayed; 	false = white"/>
</FUNZIONE>
*/
function lockFieldByID(id, lock, grayed){
	
	var field = document.forms[0].elements[id];
	// disabled property
	if(lock){
		field.setAttribute('disabled',lock);
	}else {
		if ((typeof field.removeAttribute) != 'undefined') {
			field.removeAttribute('disabled');
		}
	}
	// background-color
	if (!field.style) { return; }

	if(lock && grayed){
		field.style.backgroundColor = '#D4D4D4';	// gray
	}else{
		if ((typeof field.style.removeProperty) != 'undefined') {
			field.style.removeProperty ("background-color");
		}else{
			if ((typeof field.style.removeAttribute) != 'undefined') {
				field.style.removeAttribute ("backgroundColor");
			}
		}
	}
	// border-color
	//if ((field.type=="select-one")||(field.type=="select-multiple")){
	//	field.style.borderColor = 'transparent';
	//}
}


				function lookupcreditorimultisearch()
				{
					var lookupServlet = "lookupfornitori" + fromWhereLookup + "search";
					
					if (document.forms[0].elements['contextSelectorData.id'].value == "")
					{
						alert("Selezionare prima un intestatario");
					}
					else
					{
						if(document.forms[0].elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.nm'].value=="")
						{
							redirect = lookupServlet+"?intestatario="+document.forms[0].elements['contextSelectorData.id'].value;
						}
						else
						{
							redirect = lookupServlet+"?descrizione_destinatario="+document.forms[0].elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.nm'].value+"&command=Cerca&intestatario="+document.forms[0].elements['contextSelectorData.id'].value;
						}
						if (fromWhereLookup=="estero")
						{
							redirect = redirect + '&tipo_fornitore=E';
						}
						gotoservlet(redirect,"CercaNominativo");
					}
				}

/*
	La funzione viene utilizzata per il popup delle causali valutarie
	nei bonifici sepa e in questa personalizzazione vi � il controllo
	per non eseguirlo se il link da cui parte la richiesta fa riferimento
	a un campo di testo disabilitato.
*/	
function lookupCausaleIfNotDisabled(FieldCausaleToFill)
{
	fieldToFill = FieldCausaleToFill;
	if (fieldToFill.disabled == false) {
		gotoservlet("lookupCausale?causale_valutaria=" + FieldCausaleToFill.value, "causali");
	}

}
