var fromWhereLookup="";	
function cercaAnagraficaPopUp(url, titolo,idFunzione)
{
   	if (document.forms[0].elements['contextSelectorData.id'].value == "")
	{
		alert("Selezionare prima un intestatario");
	}
	else{
		if(document.forms[0].elements['pagamento.ragioneSociale'].value=="")
		{
				url = url+"?intestatario="+document.forms[0].elements['contextSelectorData.id'].value+"&idFunzione="+idFunzione;
			
		}
		else{
			url = url+"?intestatario="+document.forms[0].elements['contextSelectorData.id'].value+"&ragioneSociale="+document.forms[0].elements['pagamento.ragioneSociale'].value+"&idFunzione="+idFunzione;	
		}
		dialogoCentratoWithScrolls(url,titolo,'700', '300');
   	}
 }

 function cercaAnagraficaPopUpWithCod(url,titolo,idFunzione)
{
   	if (document.forms[0].elements['contextSelectorData.id'].value == "")
	{
		alert("Selezionare prima un intestatario");
	}
	else{
		if(document.forms[0].elements['pagamento.codiceFornitore'].value=="")
		{
				url = url+"?intestatario="+document.forms[0].elements['contextSelectorData.id'].value+"&idFunzione="+idFunzione;
		}
		else{
			url = url+"?intestatario="+document.forms[0].elements['contextSelectorData.id'].value+"&codice="+document.forms[0].elements['pagamento.codiceFornitore'].value+"&idFunzione="+idFunzione;
		}
    	dialogoCentratoWithScrolls(url,titolo,'700', '300');
    }
 }
 function setNominativo(elemento){
 		document.forms[0].elements['pagamento.ragioneSociale'].value=elemento['cognome'];	
 		document.forms[0].elements['pagamento.codiceFornitore'].value=elemento['codEsterna'];
		document.forms[0].elements['pagamento.indirizzoResidenza.indirizzo'].value = elemento['indirizzoResidenza.indirizzo'];
		document.forms[0].elements['pagamento.indirizzoResidenza.comune'].value = elemento['indirizzoResidenza.comune'];
		document.forms[0].elements['pagamento.indirizzoResidenza.CAP'].value = elemento['indirizzoResidenza.CAP'];
		document.forms[0].elements['pagamento.indirizzoResidenza.provincia'].value = elemento['indirizzoResidenza.codiceProvincia'];
		if (document.forms[0].abiIban[1].checked == true)
			{
				document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].value=elemento['coordinateBanca.ABI']
				document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CAB'].value=elemento['coordinateBanca.CAB']
				document.forms[0].elements['pagamento.coordinateBancaBeneficiario.numConto'].value=elemento['coordinateBanca.numConto']
				document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CIN'].value = elemento['coordinateBanca.CIN']
			}
		else
			{
				document.forms[0].elements['pagamento.coordinateBancaBeneficiario.IBAN'].value=elemento['coordinateBanca.IBAN'];
				setAbiIban();
			}
}
function changeRichiestaEsito(callType){
	intestatarioCbi = document.forms[0].elements['contextSelectorData.id'].value;
	bancaCbi = document.forms[0].elements['contextSelectorData.banca'].value;
    if (intestatarioCbi==""){
    	document.forms[0].elements['pagamento.richiestaEsito'].selectedIndex = 1;
    	alert("Selezionare prima un intestatario");
    }else{
    	if(bancaCbi==""){
			document.forms[0].elements['pagamento.richiestaEsito'].selectedIndex = 1;
    		alert("Selezionare prima la banca");
    	}else{
    		descrizione=document.forms[0].elements['contextSelectorData.descrizione'].value;
    		cf=document.forms[0].elements['contextSelectorData.cf'].value;
    		changeConto(callType);
    		document.forms[0].elements['contextSelectorData.descrizione'].value=descrizione;
    		document.forms[0].elements['contextSelectorData.cf'].value=cf;
    	}
    }
       	     	
}
/*function changeAbiban(scelta)
{ 
		if (scelta=='abi')
		{
			setAbiIban(true);
			//document.forms[0].elements['radioAbiIban'].value = fitToLength(document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].value,0,5) + fitToLength(document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CAB'].value,0,5) + fitToLength(document.forms[0].elements['pagamento.coordinateBancaBeneficiario.numConto'].value,0,12);
		}
		else
		{
			setAbiIban(false);
			//document.forms[0].elements['radioAbiIban'].value="";
		}
	
}*/
function checkedIBANABI(callType){
	if(callType!='insert'){
		if(document.forms[0].elements['pagamento.coordinateBancaBeneficiario.IBAN'].value!=""){
			document.forms[0].abiIban[1].checked=false;
		 	document.forms[0].abiIban[0].checked=true;
		 	setAbiIban();
		}else{
			if(document.forms[0].elements['pagamento.coordinateBancaBeneficiario.numConto'].value=="" && document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CIN'].value=="" &&
			document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].value=="" && document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CAB'].value=="" )
			{
				document.forms[0].abiIban[1].checked=false;
			 	document.forms[0].abiIban[0].checked=true;
			 	setAbiIban();
		 	}else{
				document.forms[0].abiIban[1].checked=true;
			 	document.forms[0].abiIban[1].disabled=false;
			 	document.forms[0].abiIban[0].checked=false;
			 	setAbiIban();
			 	if(document.forms[0].elements['asteriscoIban']!=null){
			 		document.getElementById('asteriscoIban').style.visibility = 'hidden';
			 	}
			}
		}
	}
}
function setAbiIban()
{
  if (document.forms[0].abiIban[1].checked == true) // caso ABI/CAB/CONTO selezionati
  {
    // set ABI/CAB/CONTO/CIN
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.numConto'].readOnly = false;
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CIN'].readOnly = false;
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].readOnly = false;
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CAB'].readOnly = false;
    
    //setto il colore dei campi a bianco
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.numConto'].style.backgroundColor = "#ffffff";
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CIN'].style.backgroundColor = "#ffffff";
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].style.backgroundColor = "#ffffff";
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CAB'].style.backgroundColor = "#ffffff";
    
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.IBAN'].value = "";
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.IBAN'].readOnly = true;
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.IBAN'].style.backgroundColor = "#e0e0e0";
  
  }
  else // caso IBAN selezionato
  {
    // set ABI/CAB/CONTO/CIN
    //setto valori a null
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.numConto'].value = "";
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CIN'].value = "";
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].value = "";
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CAB'].value = "";
    
    //setto i campi sola lettura
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.numConto'].readOnly = true;
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CIN'].readOnly = true;
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].readOnly = true;
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CAB'].readOnly = true;
    
    //setto il colore dei campi a grigio
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.numConto'].style.backgroundColor = "#e0e0e0";
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CIN'].style.backgroundColor = "#e0e0e0";
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].style.backgroundColor = "#e0e0e0";
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CAB'].style.backgroundColor = "#e0e0e0";
    
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.IBAN'].readOnly = false;
    document.forms[0].elements['pagamento.coordinateBancaBeneficiario.IBAN'].style.backgroundColor = "#ffffff";
  
  }
}
/*function setAbiIban(scelta) {

	if (scelta == false ) // caso IBAN selezionato	
	{
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.numConto'].value = "";
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CIN'].value = "";
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].value = "";
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CAB'].value = "";
							
		//setto i campi sola lettura
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.numConto'].readOnly = true;
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CIN'].readOnly = true;
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].readOnly = true;
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CAB'].readOnly = true;
	
		//setto il colore dei campi a grigio
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.numConto'].style.backgroundColor = "#e0e0e0";
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CIN'].style.backgroundColor = "#e0e0e0";
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].style.backgroundColor = "#e0e0e0";
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CAB'].style.backgroundColor = "#e0e0e0";
								
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.IBAN'].readOnly = false;
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.IBAN'].style.backgroundColor = "#ffffff";
		
	
	} else {
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.numConto'].readOnly = false;
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CIN'].readOnly = false;
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].readOnly = false;
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CAB'].readOnly = false;

		//setto il colore dei campi a bianco
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.numConto'].style.backgroundColor = "#ffffff";
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CIN'].style.backgroundColor = "#ffffff";
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].style.backgroundColor = "#ffffff";
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CAB'].style.backgroundColor = "#ffffff";
						
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.IBAN'].value = "";
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.IBAN'].readOnly = true;
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.IBAN'].style.backgroundColor = "#e0e0e0";
		
	}

}*/
function verificacab()
{
	if ((document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].value=="") || (document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CAB'].value==""))
	{
		alert("Inserire i codici ABI e CAB");
	}
	else
	{
		redirect="../../ibbweb/verifyabicab?cod-abi=" + document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].value + "&cod-cab=" + document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CAB'].value + "&verify=true";
		gotoservlet(redirect,"Sportello");
	}
}
function setAbiCabConto(tipoCampo, caratteriDaRiempire)
{
	if (document.forms[0].elements['pagamento.coordinateBancaBeneficiario.' + tipoCampo + ''].value!="")
	{
		document.forms[0].elements['pagamento.coordinateBancaBeneficiario.' + tipoCampo + ''].value = LPad(document.forms[0].elements['pagamento.coordinateBancaBeneficiario.' + tipoCampo + ''].value,caratteriDaRiempire,'0');
	}

}

function setSportello(id,cod_abi,cod_cab,localita,nome)
{
	document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].value = fitToLength(cod_abi,0,5);
	document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CAB'].value = fitToLength(cod_cab,0,5);
}

function lookupcreditoriCbisearch(tipoPagamento)
{
	var lookupServlet;
	if(tipoPagamento=='STIPENDIO'){
		lookupServlet = "lookupdipendentisearch";
	}else{
		lookupServlet = "lookupfornitori" + fromWhereLookup + "search";
	}
	
	
	if (document.forms[0].elements['contextSelectorData.id'].value == "")
	{
		alert("Selezionare prima un intestatario");
	}
	else
	{
		if(document.forms[0].elements['pagamento.ragioneSociale'].value=="")
		{
			redirect = lookupServlet+"?intestatario="+document.forms[0].elements['contextSelectorData.id'].value;
		}
		else
		{
			redirect = lookupServlet+"?descrizione_destinatario="+document.forms[0].elements['pagamento.ragioneSociale'].value+"&command=Cerca&intestatario="+document.forms[0].elements['contextSelectorData.id'].value;
		}
		if (fromWhereLookup=="estero")
		{
			redirect = redirect + '&tipo_fornitore=E';
		}
		gotoservlet(redirect,"CercaNominativo");
	}
	

}
/*function lookupcreditorisearchWithCod(tipoPagamento)
{
  var lookupServlet ;
  if(tipoPagamento=='STIPENDIO'){
		lookupServlet = "lookupdipendentisearch";
	}else{
		lookupServlet = "lookupfornitori" + fromWhereLookup + "search";
	}
  
  if (document.forms[0].elements['contextSelectorData.id'].value == "")
  {
  alert("Selezionare prima un intestatario");
  }
  else
  {
  if(document.forms[0].elements['pagamento.codiceFornitore'].value=="")
  {
 	 redirect = lookupServlet+"?intestatario="+document.forms[0].elements['contextSelectorData.id'].value;
  }
  else
  {
 	redirect = lookupServlet+"?codice_cliente_beneficiario="+document.forms[0].elements['pagamento.codiceFornitore'].value+"&command=Cerca&intestatario="+document.forms[0].elements['contextSelectorData.id'].value;
  }
  if (fromWhereLookup=="estero")
  {
  	redirect = redirect + '&tipo_fornitore=E';
  }
  	gotoservlet(redirect,"CercaNominativo");
  }
}*/
/*function setNominativoEstero(id, descrizione,indirizzo, comune, divisa_accredito, tipo_data_ben, addebito_spese, tipo_pagamento, tipo_avviso, tipo_contatto, codice_paese, iban, bic, desc_banca_estero, localita_banca_estera)
{
		document.forms[0].elements['pagamento.codiceFornitore'].value=id;
		document.forms[0].elements['pagamento.ragioneSociale'].value = "";
		document.forms[0].elements['pagamento.indirizzoResidenza.indirizzo'].value = "";
		document.forms[0].elements['pagamento.indirizzoResidenza.comune'].value = "";
		document.forms[0].elements['pagamento.indirizzoResidenza.CAP'].value = "";
		document.forms[0].elements['pagamento.codiceFornitore'].value=id;
		if (document.forms[0].abiIban[1].checked == true)
			{
				document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].value=fitToLength(abi,0,5);
				document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CAB'].value=fitToLength(cab,0,5);
				document.forms[0].elements['pagamento.coordinateBancaBeneficiario.numConto'].value=fitToLength(numero_conto,0,12);
				document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CIN'].value = fitToLength(cin,0,1);
			}
		else
			{
				document.forms[0].elements['pagamento.coordinateBancaBeneficiario.IBAN'].value=fitToLength(iban_it,0,27);
				setAbiIban();
			}
	
	//if (document.forms[0].elements['pagamento.coordinateBancaBeneficiario.IBAN'].value!="")
	//{
	//	document.forms[0].abiIban[0].checked=true;
		
	//	setAbiIban(false);
	//}	
}
*/

/*function setNominativo( id, descrizione, cf_piva, indirizzo, comune, cap, provincia, abi, cab, descrizione_banca, p_iva, iban, cin, codice_causale, disposizione_default, divisa_accredito, tipo_data_ben, addebito_spese, tipo_pagamento, tipo_avviso, tipo_contatto, codice_paese, numero_conto, bic, iban_it, desc_banca_estero, localita_banca_estera, codice_destinatario, tipo_codice)
						
{
		document.forms[0].elements['pagamento.codiceFornitore'].value=codice_destinatario;
		document.forms[0].elements['pagamento.ragioneSociale'].value = fitToLength(descrizione,0,90);
		
		document.forms[0].elements['pagamento.indirizzoResidenza.indirizzo'].value=fitToLength(indirizzo,0,30);
		document.forms[0].elements['pagamento.indirizzoResidenza.comune'].value = comune;
		document.forms[0].elements['pagamento.indirizzoResidenza.provincia'].value = fitToLength(provincia,0,2);
		document.forms[0].elements['pagamento.indirizzoResidenza.CAP'].value=fitToLength(cap,0,5);
		if (document.forms[0].abiIban[1].checked == true)
			{
				document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].value=fitToLength(abi,0,5);
				document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CAB'].value=fitToLength(cab,0,5);
				document.forms[0].elements['pagamento.coordinateBancaBeneficiario.numConto'].value=fitToLength(numero_conto,0,12);
				document.forms[0].elements['pagamento.coordinateBancaBeneficiario.CIN'].value = fitToLength(cin,0,1);
			}
		else
			{
				document.forms[0].elements['pagamento.coordinateBancaBeneficiario.IBAN'].value=fitToLength(iban_it,0,27);
				setAbiIban();
			}
	
//	if (document.forms[0].elements['pagamento.coordinateBancaBeneficiario.IBAN'].value!="")
//	{
//		document.forms[0].abiIban[0].checked=true;
		
//		setAbiIban(false);
//	}	
}
*/
function lookupagencyCbi()
{
		if(document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].value=="")
		{
           	gotoservlet("../../ibbweb/lookupagency","CercaAgenzia");
		}
		else
		{
          	gotoservlet("../../ibbweb/lookupagency?cod-abi="+document.forms[0].elements['pagamento.coordinateBancaBeneficiario.ABI'].value+"&command=Cerca","CercaAgenzia");
		}
}
function CheckAnnulla(callType) {
		if(callType=='update') {
			if(document.getElementById('dialogform')!=null){
				document.getElementById('dialogform').setAttribute('action','/ibbweb/creadistinte');
			    var annForm = document.getElementById('dialogform');
			    annForm.submit();
			}else{
				document.forms[0].action='/ibbweb/creadistinte';
				return true;
			}
			
			return false;
		}
		if(callType=='updateDistinta') {
			if(document.getElementById('dialogform')!=null){
				document.getElementById('dialogform').setAttribute('action','/ibbweb/dettagliodistinta');
			    var annForm = document.getElementById('dialogform');
			    annForm.submit();
			}else{
				document.forms[0].action='/ibbweb/dettagliodistinta';
				return true;
			}
			
			return false;
		}
		if(callType=='insert' || callType=='insertCopia') {
			document.forms[0].action="/ibbweb/mainpage";
	   		 return true;
		}
		return true;
}

  
// ammette solo numeri e punto.
// altri valori non vengono inseriti in campo input.
// creata nuova funzione perche' la precedente (onlyRealNumbers) si comportava diversamente (ammetteva virgole e non punti) ed
// era dichiarata diverse volte in modi diversi
function soloNumeriEPunto(evento){   

    if(window.event || !evento.which) // IE o NE?
    {
        tasto = evento.keyCode; // per IE
    }
    else if(evento) // netscape
    {
        tasto = evento.which;
    }
    // alert('tasto = '+tasto);
    // gestione caso tasto backspace e tab
    if (tasto == 8 || tasto == 9 )
    {
        return true;
    }   
        
    if (tasto < 48 || tasto > 57 )
    {
        if( tasto != 46  )//ammesso solo punto
        {
            return false;
        }
    }
    return true;  
}

