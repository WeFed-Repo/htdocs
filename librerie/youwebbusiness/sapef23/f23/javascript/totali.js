// Funzione per il reperimento di array per tipo (Es. 'interiImporto') con valore di default 
// "0" per interi, "00" per centesimi
function retrieveFields(tipo, defaultValue, totaleRighe) {

    var returnArray = new Array();
   
    for (var index = 0; index < totaleRighe; index++) {
        var nomeCampo = tipo + '[' + index + ']';
        if (document.f23MainForm.elements[nomeCampo].value == "") {
            returnArray[index] = defaultValue;
        } else {
            returnArray[index] = document.f23MainForm.elements[nomeCampo].value;
        }
    }
    
    return returnArray;
}

function mergeImporti(interi, centesimi) {

    var returnArray = new Array();
    var index = 0;
    
    while (null != interi[index]) {
        returnArray[index] = interi[index] + "." + centesimi[index];        
        index++;
    }
    
    return returnArray
}

function setTotale(importi) {
	
	var importo = 0;
	var interi = 0;
	var decimali = 0;
    var index = 0;
    
    while (null != importi[index]) {
    
        var intero = importi[index].substring(0, importi[index].indexOf('.'));
        var decimale = importi[index].substring(importi[index].indexOf('.') + 1);
        
        if (1 == decimale.length) {
        	decimale=decimale + "0";
        }
        interi += parseInt(intero,10);
        decimali += parseInt(decimale,10);
        index++;
    }
    
    importo = interi + (decimali /100);       
    importo = (Math.round(importo*100)/100);
    
    importoString = importo.toString();    
    if (importoString.indexOf('.') == -1) {
        // Importo senza decimali
        importoString += '.00';
    }    
    if( (importoString.substring(importoString.indexOf('.') + 1)).length == 1) {
    	importoString = importoString + "0";
    }
    
    var interiSaldoObject = document.getElementById('interiSaldoVers');
	var centSaldoObject = document.getElementById('centSaldoVers');

    interiSaldoObject.value = importoString.substring(0, importoString.indexOf('.'));
	centSaldoObject.value = importoString.substring(importoString.indexOf('.') + 1);
	document.f23MainForm.elements['saldo'].value = importoString;
	setSaldoFinale(interiSaldoObject.value, centSaldoObject.value)
}

function setSaldoFinale(interiSaldo, centSaldo) {
	document.f23MainForm.elements['interiSaldo'].value = interiSaldo;
	document.f23MainForm.elements['centSaldo'].value = centSaldo;
}

function setSaldoModello(totaleRighe) {

    // Mi ricavo tutti gli interi e tutti i centesimi per debito
	var arrayInteri = retrieveFields('versamento.tributi.interiImporto', '0', totaleRighe);
	var arrayCent = retrieveFields('versamento.tributi.centImporto', '00', totaleRighe);
	var importi = mergeImporti(arrayInteri, arrayCent);
	
	// Imposto il totale
	setTotale(importi);
}


function formattaCampo(campo, isCampoCent) {

	if (isCampoCent) {
	    if (campo.value == "") {
	        campo.value = '00';
	    } else {
			if (campo.value.length==1){
	            campo.value += '0';
	        }
	    }
	} else  {
	    if (campo.value == "") {
	        campo.value = '0';
	    }
	}
	
}

function tot(campo, totaleRighe) {

	if (isNaN(campo.value)) {
	    campo.value = '0';
	}
	
	if (campo.value.indexOf("+")!=-1) {
		campo.value = '0';
	}
	
	if (campo.value.indexOf(".")!=-1) {
		campo.value = '0';
	}
	
	if (campo.value.indexOf("e")!=-1) {
		campo.value = '0';
	}
	
	if (parseInt(campo.value, 10) < 0) {
		campo.value = '0';
	}
	
	var isCampoCent = campo.name.indexOf('centImporto') != -1;
	formattaCampo(campo, isCampoCent);
		
	var index = campo.name.substring(campo.name.indexOf('['));
	
	if (isCampoCent) {
		formattaCampo(document.f23MainForm.elements['versamento.tributi.interiImporto' + index], false);
	} else {
		formattaCampo(document.f23MainForm.elements['versamento.tributi.centImporto' + index], true);
	}
	
	setSaldoModello(totaleRighe);

}