/** 
 * Copyright 2008 Enterprise S.p.A. (Rome, Italy).  
 * Use is subject to license terms. All rights reserved. 
 *  
 *  http://www.enterprisespa.it 
 */

	/*===================================================================
		Sinossi: formatImportoEuroAutomatico([importoHost],[attrImportoHost],int,dec);
	===================================================================
		Descrizione:
		Formattazione dei campi importo da gestire sull'onBlur dei campi interessati.
		I campi vengono formattati nel seguente modo: aaaaa,bbbbbb
		L'utente deve digitare i punti come separatori delle migliaia
	===================================================================*/
	function formatImportoEuroAutomatico(importoHost, attrImportoHost,int,dec){
		var importoValue = "";
		var importoHostValue = "";		
		var iform = document.forms['formInserimento'];
		
		/* ********************************** */
		/* se il campo importo e' vuoto va eliminato anche il valore dell'importo host*/
		/* ********************************** */
		if(iform.elements[importoHost].value==""){
			iform.elements[importoHost].value="";
		}
		
		
		/* ********************************** */
		/*   validazione del campo importo    */
		/* ********************************** */	
		var ret = controllaValoreNumerico(iform,importoHost,int,dec); //controllo formattazione standard importi e numerici
		
		var alertMsg1 = "ATTENZIONE: \nInserire solo numeri.";
		var alertMsg2 = "ATTENZIONE: \nInserire i punti (separatore di migliaia) in modo corretto.";
		var alertMsg3 = "ATTENZIONE: \nTroppe virgole";
		var alertMsg4 = "ATTENZIONE: \nL\'intero deve essere di massimo ";		
		var alertMsg5 = "ATTENZIONE: \nI decimali devono essere di massimo ";
		var alertMsg6 = " cifre.";		
		var alertMsg7 = "ATTENZIONE: \nNel campo appena digitato\nci sono degli spazi tra le cifre.";		

		if(linguaLabelsT1500 == "E"){					
			alertMsg1 = "ATTENTION: \nType only numbers.";
			alertMsg2 = "ATTENTION: \nType points correctly.";
			alertMsg3 = "ATTENTION: \nToo many commas";
			alertMsg4 = "ATTENTION: \nThe integer must have maximum ";
			alertMsg5 = "ATTENTION: \nThe decimal must have maximum ";
			alertMsg6 = " digit.";			
			alertMsg7 = "ATTENTION: \nIn just typed field\nthere are spaces between the numbers.";				
		}
		
		switch(ret){
			case 1:
				alert(alertMsg1);
				break;
			case 2:
				alert(alertMsg2);
				break;
			case 3:
				alert(alertMsg3);
				break;
			case 4:
				alert(alertMsg4+ int + alertMsg6);
				break;
			case 5:
				alert(alertMsg5 + dec + alertMsg6);
				break;
			case 7:
				alert(alertMsg7);
				break;
			default:
				break;
		}
		if(ret!=0){
			return;//esce
		}
		
		/* ************************************* */
		/*   formattazione del campo importo     */
		/* ************************************* */
    	if(typeof iform.elements[importoHost] == "object"){
    		importoValue = iform.elements[importoHost].value;	
    	} 	    	
    	importoValue=importoValue.replace(/\./g,"");//elimina il punto inserito
    	importoValue=Trim(importoValue);

    	if(importoValue != ""){
    		var arr1 = importoValue.split(",");
    		var decimali = ",00";
    		var intero = arr1[0];
    		var param = intero.length;
    		var interoStringa = "";	
    		var tripletta = "";

    		if(arr1[1]){
    			decimali = ","+arr1[1];
    			if(decimali.length == 2){
    				decimali = decimali+"0";
    			}
    			if(decimali.length == 1){
    				decimali = decimali+"00";
    			}    			
    		}

    		var numIntervalli=null;
    		if(intero.length>3){
    			numIntervalli = Math.floor(intero.length/3);			
    		}
    		var paragone = 3*numIntervalli;
    		if(intero.length == paragone){
    			numIntervalli = numIntervalli-1;
    		}
    		for(y=0; y<numIntervalli; y++){		
    			param = param-3;		
    			tripletta = intero.substr(param,3)
    			interoStringa = "."+tripletta+interoStringa;
    		}
    		primeCifre = intero.substr(0,param);
    		intero = primeCifre+interoStringa;
    		importoValue = intero+decimali;
    		
    		
    		
    		document.forms['formInserimento'].elements[importoHost].value = importoValue;    		
    		document.forms['formInserimento'].elements[attrImportoHost].value = "D";    	
    		
    		}
    	return;
	}


	
	function formatCambioEuro(iform, importoHost, attrImportoHost,int,dec){
		
		var importoValue = "";
		var importoHostValue = "";
		
		/* ********************************** */
		/*   validazione del campo importo    */
		/* ********************************** */
		var ret = controllaValoreNumerico(iform,importoHost,int,dec); //controllo formattazione standard importi e numerici
		
		var alertMsg1 = "ATTENZIONE: \nInserire solo numeri.";
		var alertMsg2 = "ATTENZIONE: \nInserire i punti (separatore di migliaia) in modo corretto.";
		var alertMsg3 = "ATTENZIONE: \nTroppe virgole";
		var alertMsg4 = "ATTENZIONE: \nL\'intero deve essere di massimo ";		
		var alertMsg5 = "ATTENZIONE: \nI decimali devono essere di massimo ";
		var alertMsg6 = " cifre.";		
		var alertMsg7 = "ATTENZIONE \n Non devono essere digitati decimali.";
		var alertMsg8 = "ATTENZIONE: \nNel campo appena digitato\nci sono degli spazi tra le cifre.";		

		if(linguaLabelsT1500 == "E"){					
			alertMsg1 = "ATTENTION: \nType only numbers.";
			alertMsg2 = "ATTENTION: \nType points correctly.";
			alertMsg3 = "ATTENTION: \nToo many commas";
			alertMsg4 = "ATTENTION: \nThe integer must have maximum ";
			alertMsg5 = "ATTENTION: \nThe decimal must have maximum ";
			alertMsg6 = " digit.";		
			alertMsg7 = "ATTENTION: \nYou have not to enter decimal numbers.";
			alertMsg8 = "ATTENTION: \nIn just typed field\nthere are spaces between the numbers.";				
		}
		
		switch(ret){
			case 1:
				alert(alertMsg1);
				break;
			case 2:
				alert(alertMsg2);
				break;
			case 3:
				alert(alertMsg3);
				break;
			case 4:
				alert(alertMsg4 +int+ alertMsg6);
				break;
			case 5:
				alert(alertMsg5 +dec+ alertMsg6);
				break;
			case 6:
				alert(alertMsg7);
				break;
			case 7:
				alert(alertMsg8);
				break;
			default:
				break;
		}
		if(ret!=0){
			return;//esce
		}
		
		/* ************************************* */
		/*   formattazione del campo importo     */
		/* ************************************* */		
    	if(typeof document.forms['formInserimento'].elements[importoHost] == "object"){
    		importoValue = document.forms['formInserimento'].elements[importoHost].value;	
    	} 	
    	
    	if(importoValue != ""){
    		var arr1 = importoValue.split(",");
    		var decimali = "";
    		var intero = arr1[0];
    		var param = intero.length;
    		var interoStringa = "";	
    		var tripletta = "";

    		if(arr1[1]){
    			decimali = arr1[1];
    			if(decimali.length == 7){
    				decimali = decimali+"0";
    			}
    			if(decimali.length == 6){
    				decimali = decimali+"00";
    			}
    			if(decimali.length == 5){
    				decimali = decimali+"000";
    			}
    			if(decimali.length == 4){
    				decimali = decimali+"0000";
    			}
    			if(decimali.length == 3){
    				decimali = decimali+"00000";
    			}    	    			
    			if(decimali.length == 2){
    				decimali = decimali+"000000";
    			}
    			if(decimali.length == 1){
    				decimali = decimali+"0000000";
    			}  
    			decimali = ","+decimali;
    		}else{
    			decimali = ",00000000";
    		}

    		if(intero.length>3){
    			var numIntervalli = Math.floor(intero.length/3);			
    		}
    		var paragone = 3*numIntervalli;
    		if(intero.length == paragone){
    			numIntervalli = numIntervalli-1;
    		}
    		for(y=0; y<numIntervalli; y++){		
    			param = param-3;		
    			tripletta = intero.substr(param,3)
    			interoStringa = "."+tripletta+interoStringa;
    		}
    		primeCifre = intero.substr(0,param);
    	
    		intero = primeCifre+interoStringa;
    		importoValue = intero+decimali;

    		document.forms['formInserimento'].elements[importoHost].value = importoValue;    		
    		document.forms['formInserimento'].elements[attrImportoHost].value = "D";
    	}
    	return true;
	}    
	
	
	function formatTassoEuro(iform, importo, importoHost, attrImportoHost){

		var importoValue = "";
		var importoHostValue = "";
		
		/* ********************************** */
		/* se il campo importo e' vuoto va eliminato anche il valore dell'importo host*/
		/* ********************************** */
		if(document.forms['formInserimento'].elements[importo].value==""){
			document.forms['formInserimento'].elements[importoHost].value="";
		}
		
		/* ********************************** */
		/*   validazione del campo importo    */
		/* ********************************** */
		var ret = controllaValoreNumerico(iform,importo,5,8); //controllo formattazione standard importi e numerici
		switch(ret){
			case 1:
				setAlert("ATTENZIONE: \nInserire solo numeri.", importo);
				break;
			case 2:
				setAlert("ATTENZIONE: \nInserire virgole per delimitare i decimali.", importo);
				break;
			case 3:
				setAlert("ATTENZIONE: \nTroppe virgole.", importo);
				break;
			case 4:
				setAlert("ATTENZIONE \nL\'intero deve essere di massimo 5 cifre.", importo);
				break;
			case 5:
				setAlert("ATTENZIONE \nI decimali devono essere di massimo 8 cifre.", importo);
				break;
			case 6:
				setAlert("ATTENZIONE \n Non devono essere digitati decimali.", importo);
				break;
			case 7:
				setAlert("ATTENZIONE: \nNel campo appena digitato \nci sono degli spazi tra le cifre.", importo);
				break;
			default:
				break;
		}
		if(ret!=0){
			if(objErrato=="")objErrato =  importo;
			return;//esce
		}
		
		/* ************************************* */
		/*   formattazione del campo importo     */
		/* ************************************* */
    	if(typeof document.forms['formInserimento'].elements[importo] == "object"){
    		importoValue = document.forms['formInserimento'].elements[importo].value;	
    	} 	

    	if(importoValue != ""){
    		var arr1 = importoValue.split(",");
    		var decimali = "";
    		var intero = arr1[0];
    		var param = intero.length;
    		var interoStringa = "";	
    		var tripletta = "";

    		if(arr1[1]){	
    			decimali = arr1[1];
    			if(decimali.length == 7){
    				decimali = decimali+"0";
    			}
    			if(decimali.length == 6){
    				decimali = decimali+"00";
    			}
    			if(decimali.length == 5){
    				decimali = decimali+"000";
    			}
    			if(decimali.length == 4){
    				decimali = decimali+"0000";
    			}
    			if(decimali.length == 3){
    				decimali = decimali+"00000";
    			}    	    			
    			if(decimali.length == 2){
    				decimali = decimali+"000000";
    			}
    			if(decimali.length == 1){
    				decimali = decimali+"0000000";
    			}    
    			decimali = ","+decimali;
    		}else{
    			decimali = ",00000000";
    		}

    		if(intero.length>3){
    			var numIntervalli = Math.floor(intero.length/3);			
    		}
    		var paragone = 3*numIntervalli;
    		if(intero.length == paragone){
    			numIntervalli = numIntervalli-1;
    		}
    		for(y=0; y<numIntervalli; y++){		
    			param = param-3;		
    			tripletta = intero.substr(param,3)
    			interoStringa = "."+tripletta+interoStringa;
    		}
    		primeCifre = intero.substr(0,param);
    	
    		intero = primeCifre+interoStringa;
    		importoValue = intero+decimali;
    		document.forms['formInserimento'].elements[importo].value = importoValue;    		
    		cdAttributo = "A"+importo.substring(1,6);    		
    		importoHostValue = importoValue.replace(/\./g,"");
    		document.forms['formInserimento'].elements[importoHost].value = importoHostValue;
    		if(document.forms['formInserimento'].elements[cdAttributo]){
    			if(document.forms['formInserimento'].elements[cdAttributo].value != ""){
    				document.forms['formInserimento'].elements[attrImportoHost].value = document.forms['formInserimento'].elements[cdAttributo].value;
    			}else{
        			document.forms['formInserimento'].elements[attrImportoHost].value = "D";
        		}
    		}else{
    			document.forms['formInserimento'].elements[attrImportoHost].value = "D";
    		}
    	}
    	return true;
	}    
	

		
	/*===================================================================
		Sinossi: controllaValoreNumerico([codicedato]);
	===================================================================
		I campi vengono formattati nel seguente modo: x.xxx.xxx,dd
	===================================================================*/
	function controllaValoreNumerico(iform,fld,a,b){
		
		pos,pos2 = "-1";
		var dec,val,valInt,pos,pos2 = "";
		var valintero = "";
		
		
		
		val = new String(document.forms['formInserimento'].elements[fld].value);
		
		
		
		val = Trim(val);
		
		
		
		chr = val.match(/[^\s\,\.0123456789]/g);
		
		if(val.match(/\S\s+\S/g)!=null){
			return 7;
		}
		if (chr!=null) {
			return 1;	
		}else{
			//controlla che nell'importo i punti siano inseriti correttamente
			var arr1 = val.split(".");
			for(i=0;i<arr1.length;i++){
				var str = "";
				if(arr1[i].indexOf(',')!=-1){
					str = arr1[i].substring(0,arr1[i].indexOf(','));
				}else{
					str = arr1[i];
				}
				if(i!=0 && str.length!=3){
					return 2;
				}
			}
			//controlla che le virgole siano state inserite correttamente
			pos = val.lastIndexOf(".");
			pos2 = val.lastIndexOf(",");
			if (pos2!="-1"){
				dec = val.substring(pos2 +1,val.length);
				valInt = val.substring(0,pos2);
				var virgole = valInt.match(/\,/g);
				if(virgole!=null){
					return 3;//troppe virgole
				}
			}
		}
		
		//controlla che le cifre (interi e decimali) siano stati inseriti correttamente
		pos = val.lastIndexOf(",");
		if(pos=='-1'){
			intero = val;
			valintero = intero.replace(/\./g,"");//elimina il punto inserito
			decimali = 0;
		}else{
			intero = val.substring(0,pos);
			valintero = intero.replace(/\./g,"");//elimina il punto inserito
			decimali = val.substring(pos +1,val.length);
		}
		if(a){
			if(a<valintero.length){
				return 4;//intero max n cifre
			}
		}
		if(b){
			if(b<decimali.length){
				return 5;//decimali max n cifre
			}
		}else{
			if(b<decimali.length){
				return 6;//Non devono essere digitati decimali
			}
		}
		return 0;
	}
	
	function isNumerico(value){
		var val = new String(value);
		var chr = val.match(/[^\s\,\.0123456789]/g);

		if (chr!=null) {
			return false;	
		}		
		return true;
	}	