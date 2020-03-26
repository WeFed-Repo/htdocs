prefissoSezioni = 'sezione(';
suffissoSezioni = ').';
prefissoRighe = 'riga[';
suffissoRighe = '].';
saldoSezioneInLavorazione = "";
isCampoCent = false;

// Funzione per il reperimento di array per tipo (Es. debito) con valore di default 
// "0" per interi, "00" per centesimi
function retrieveFields(sezione, tipo, defaultValue) {
    prefisso = prefissoSezioni + sezione + suffissoSezioni + prefissoRighe;
    index = 0;
    returnArray = new Array();
   
    while (null != document.f24MainForm.elements[prefisso + index + suffissoRighe + tipo]) {
        nomeCampo = prefisso + index + "]." + tipo;
        if (document.f24MainForm.elements[nomeCampo].value == "" || isNaN(document.f24MainForm.elements[nomeCampo].value)) {
            returnArray[index] = defaultValue;
        } else {
            returnArray[index] = document.f24MainForm.elements[nomeCampo].value;
        }
        index++;
    }
    
    return returnArray;
}

function mergeImporti(interi, centesimi) {
    returnArray = new Array();
    index = 0;
    
    while (null != interi[index]) {
        returnArray[index] = interi[index] + "." + centesimi[index];        
        index++;
    }
    
    return returnArray
}

function getTotale(importi) {
	returnTotale = 0;
	interi = 0;
	decimali = 0;
    index = 0;
    while (null != importi[index]) {
        intero = importi[index].substring(0, importi[index].indexOf('.'));
        decimale = importi[index].substring(importi[index].indexOf('.') + 1);
        if(1==decimale.length){
        	decimale=decimale+"0";
        }
        interi += parseInt(intero,10);
        decimali += parseInt(decimale,10);
        index++;
    }
    returnTotale = interi + (decimali /100);       
    returnTotale = (Math.round(returnTotale*100)/100);

    return returnTotale;
}

function setTotaleSezione(importo, sezione, tipo) {
    importoString = importo.toString();    
    if (importoString.indexOf('.') == -1) {
        // Importo senza decimali
        importoString += '.00';
    }    
    if((importoString.substring(importoString.indexOf('.') + 1)).length==1    ){
    	importoString=importoString+"0";
    }    
	if( ( (sezione=="accise") || (sezione=="accise2005") ) &&(tipo=="Credito" )){
	
    }else{
        document.f24MainForm.elements[prefissoSezioni + sezione + suffissoSezioni + 'interiTotale' + tipo].value = importoString.substring(0, importoString.indexOf('.'));
	    document.f24MainForm.elements[prefissoSezioni + sezione + suffissoSezioni + 'centTotale' + tipo].value = importoString.substring(importoString.indexOf('.') + 1);	    
    }
}

function setSaldoSezione(totaleDebito, totaleCredito, sezione) {
	if (totaleDebito.indexOf('.') == -1) {
	    totaleDebito += '.00';
	}
	if (totaleCredito.indexOf('.') == -1) {
	    totaleCredito += '.00';
	}
	totaleDebitoInteri = totaleDebito.substring(0, totaleDebito.indexOf('.'));
	totaleDebitoDecimali = totaleDebito.substring(totaleDebito.indexOf('.') + 1);
    if(totaleDebitoDecimali.length==1    ){
    	totaleDebitoDecimali=totaleDebitoDecimali+"0";
    }
	totaleCreditoInteri = totaleCredito.substring(0, totaleCredito.indexOf('.'));
	totaleCreditoDecimali = totaleCredito.substring(totaleCredito.indexOf('.') + 1);
    if(totaleCreditoDecimali.length==1    ){
    	totaleCreditoDecimali=totaleCreditoDecimali+"0";
    }
	interi = parseInt(totaleDebitoInteri, 10) - parseInt(totaleCreditoInteri, 10);
	decimali = parseInt(totaleDebitoDecimali, 10) - parseInt(totaleCreditoDecimali, 10);

	saldo = interi + (decimali /100);
	saldo = (Math.round(saldo*100)/100);	 
    saldoString = saldo.toString();   	
    if (saldoString.indexOf('.') == -1) {
        // Imposto i decimali
        saldoString += '.00';
    }
    if (saldoString.substring(saldoString.indexOf('.') + 1).length == 1) {
        // Imposto i decimali
        saldoString += '0';
    }
    // Imposto la variabile saldoSezioneInLavorazione per l'utilizzo comune
    saldoSezioneInLavorazione = saldoString;
    
    document.f24MainForm.elements[prefissoSezioni + sezione + suffissoSezioni + 'interiSaldo'].value = saldoString.substring(0, saldoString.indexOf('.'));
    if(saldoString.substring(saldoString.indexOf('.') + 1).length==1){
    	document.f24MainForm.elements[prefissoSezioni + sezione + suffissoSezioni + 'centSaldo'].value = saldoString.substring(saldoString.indexOf('.') + 1)+"0";
    }else{
    	document.f24MainForm.elements[prefissoSezioni + sezione + suffissoSezioni + 'centSaldo'].value = saldoString.substring(saldoString.indexOf('.') + 1);
    }
    
    
}

function setSaldoParziale(campo) {
	var sezione = new Array();
	sezione[0]="auto";
	saldoParzialeInt=0;
	saldoParzialeCent=0;
	saldoSezioneIntero=0;
	saldoSezioneCentesimi=0;
	saldoParziale=0;	
	for(var i=0; i<sezione.length; i++){	
		saldoSezioneIntero=document.f24MainForm.elements["sezione("+sezione[i]+").interiSaldo"].value;
		if(saldoSezioneIntero.length!=0){		
			saldoParzialeInt=parseInt(saldoParzialeInt,10)+parseInt(saldoSezioneIntero,10);		
		}		
		saldoSezioneCentesimi=document.f24MainForm.elements["sezione("+sezione[i]+").centSaldo"].value;
		if(saldoSezioneCentesimi.length!=0){         
			if(saldoSezioneIntero.toString().indexOf("-")!=-1){
				saldoParzialeCent=parseInt(saldoParzialeCent,10)-parseInt(saldoSezioneCentesimi,10);			
			}else{
				saldoParzialeCent=parseInt(saldoParzialeCent,10)+parseInt(saldoSezioneCentesimi,10);			
			}
		}
		
	}	
	saldoParziale=saldoParzialeInt+(saldoParzialeCent/100);	
	saldoParziale=Math.round(saldoParziale*100)/100;
	
	saldoParzialeStr = saldoParziale.toString();
	if(saldoParzialeStr.indexOf(".") == -1){
		// il saldo parziale e' nella forma xxx (e' un intero, non ha decimali)
		saldoParzialeStr = saldoParzialeStr + '.00';
	} else {
		if (saldoParzialeStr.indexOf(".") == (saldoParzialeStr.length - 2)) {
			// il saldo parziale e' nella forma xxx.y (un decimale dopo il punto)
			saldoParzialeStr = saldoParzialeStr + '0';
		}
	}
	
	document.f24MainForm.elements['saldoParziale'].value = saldoParzialeStr;

	setSaldoFinale(saldoParzialeStr.substring(0, saldoParzialeStr.indexOf(".")), saldoParzialeStr.substring(saldoParzialeStr.indexOf(".") + 1));

}

function setSaldoFinale(interiSaldo, centSaldo) {
	document.f24MainForm.elements['interiSaldo'].value = interiSaldo;
	document.f24MainForm.elements['centSaldo'].value = centSaldo;
}

function impostaCentesimi(campo) {
	if (campo.value == "") {
		campo.value = '00';
	} else if (campo.value.length==1) {
		campo.value += '0';
	}
}

function impostaInteri(campo) {
	if (campo.value == "") {
		campo.value = '0';
	}
}

function fillWithZero(campo) {
	if (isNaN(campo.value)) {
	    campo.value = '0';
	}
	isCampoCent = campo.name.indexOf('cent') != -1;
	
	if (isCampoCent) {
	    if (campo.value == "") {
	        campo.value = '00';
	    } else {
			if (campo.value.length==1){
	            campo.value += '0';
	        }
	    }
	}
	if (!isCampoCent) {
	    if (campo.value == "") {
	        campo.value = '0';
	    }
	}
}

function tot(campo, sezione) {
	
	if (
			(campo.name.indexOf('interi') != -1)
		&&	(campo.value.indexOf(',') != -1)
	    )
	{
	  submitAvailable = false;
	  alert('La virgola nella parte intera dell\'importo non ? consentita.\n' +
	  	'Per i decimali usare l\'apposito campo.\n'+
	  	'Si prega di correggere l\'importo e verificare');
	  submitAvailable = true;
	  campo.focus();
	  
	} else {
	
	if (
			(campo.name.indexOf('interi') != -1)
		&&	(campo.value.indexOf('.') != -1)
	    )
	{
	 submitAvailable = false;
	 alert('La parte intera dell\'importo deve essere compilata senza il separatore delle migliaia.\n'+
	 	'(il valore viene corretto automaticamente. Si prega di verificare).');
	 while (campo.value.indexOf('.') != -1)
	 	campo.value = campo.value.substring(0, campo.value.indexOf('.')) +
	 			campo.value.substring(campo.value.indexOf('.') + 1 , campo.value.length);
	 submitAvailable = true;
	}

	if (isNaN(campo.value)) {
	    campo.value = '0';
	}

	
	if (
			(campo.name.indexOf('cent') != -1)
		&&	(campo.value.indexOf('.') != -1)
	    )
	{
	  submitAvailable = false;
	  while (campo.value.indexOf('.') != -1)
	  	campo.value = campo.value.substring(0, campo.value.indexOf('.')) +
	  			campo.value.substring(campo.value.indexOf('.') + 1 , campo.value.length);
	  submitAvailable = true;
	}
	
	isCampoCent = campo.name.indexOf('cent') != -1;
	
	if (isCampoCent) {
	    if (campo.value == "") {
	        campo.value = '00';
	    } else {
			if (campo.value.length==1){
	            campo.value += '0';
	        }
	    }
	}
	if (!isCampoCent) {
	    if (campo.value == "") {
	        campo.value = '0';
	    }
	}
	
	if (sezione) {
	
    // Mi ricavo tutti gli interi e tutti i centesimi per debito
	arrayInteri = retrieveFields(sezione, 'interiImportoDebito', '0');
	arrayCent = retrieveFields(sezione, 'centImportoDebito', '00');		
	importiDebito = mergeImporti(arrayInteri, arrayCent);
		
	totaleDebito = getTotale(importiDebito);		
	// Imposto il totale debito nei due campi di sezione interi e centesimi
	setTotaleSezione(totaleDebito, sezione, 'Debito');	
	// Mi ricavo importi a credito
	arrayInteri = retrieveFields(sezione, 'interiImportoCredito', '0');
	arrayCent = retrieveFields(sezione, 'centImportoCredito', '00');		
	importiCredito = mergeImporti(arrayInteri, arrayCent);

    totaleCredito = getTotale(importiCredito); 

	setTotaleSezione(totaleCredito, sezione, 'Credito');	
	setSaldoSezione(totaleDebito.toString(), totaleCredito.toString(), sezione);	
	// Elaboro il saldo parziale
	setSaldoParziale(campo);
	}
	}
}