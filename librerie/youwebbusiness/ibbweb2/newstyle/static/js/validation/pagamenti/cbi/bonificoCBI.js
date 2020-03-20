    var _onsubmit=true;
    var _onchange=CHECK_ON_CHANGE;
    var _show =true;
	CHECK_REPEATED_SUBMIT=true;
	// manca il messaggio internazionale 
	
 
              
              
              
      	// validator name: contextSelectorData.id  requiredCbiField
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: contextSelectorData.id 
	  function validate_contextSelectorData_id_requiredCbiField(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
				if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }
	                
			    
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['contextSelectorData.id'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_contextSelectorData_id','label.contextSelectorData.id',"il campo \u00E8 obbligatorio","validate_contextSelectorData_id_requiredCbiField", _onsubmit, _onchange);
        	
        
              
              
              
              
              
              
              
              
              
      	// validator name: contextSelectorData.descrizione  requiredCbiField
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: contextSelectorData.descrizione 
	  function validate_contextSelectorData_descrizione_requiredCbiField(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
				if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }
	                
			    
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['contextSelectorData.descrizione'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_contextSelectorData_descrizione','label.contextSelectorData.descrizione',"il campo \u00E8 obbligatorio","validate_contextSelectorData_descrizione_requiredCbiField", _onsubmit, _onchange);
        	
        
              
      	// validator name: contextSelectorData.cf  requiredCbiField
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: contextSelectorData.cf 
	  function validate_contextSelectorData_cf_requiredCbiField(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
				if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }
	                
			    
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['contextSelectorData.cf'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_contextSelectorData_cf','label.contextSelectorData.cf',"il campo \u00E8 obbligatorio","validate_contextSelectorData_cf_requiredCbiField", _onsubmit, _onchange);
        	
        
      	// validator name: contextSelectorData.cf  noSpecialCharValidatorForCF
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: contextSelectorData.cf 
	  function validate_contextSelectorData_cf_noSpecialCharValidatorForCF(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
  				 if (value != null && value.length==16 && checkNoSpecialCharWithChar(value)!=null  ) {
   					
   					var notValidChar = checkNoSpecialCharWithChar(value);
   					setVariableIntoMessage(obj, 'CHARNOTVALID', notValidChar +'');
   					
   					return false;
				   }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['contextSelectorData.cf'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_contextSelectorData_cf','label.contextSelectorData.cf',"@ERROR Il codice fiscale contiene un carattere non valido: @CHARNOTVALID.\nI caratteri validi sono le lettere e le cifre.","validate_contextSelectorData_cf_noSpecialCharValidatorForCF", _onsubmit, _onchange);
        	
        
      	// validator name: contextSelectorData.cf  onlyNumbersValidatorforPartIva
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: contextSelectorData.cf 
	  function validate_contextSelectorData_cf_onlyNumbersValidatorforPartIva(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
			
  				if (value != null && value.length==11 && checkOnlyNumbersWithChar(value)!=null  ) {
  					
  					var notNumber = checkOnlyNumbersWithChar(value);
   					setVariableIntoMessage(obj, 'CHARNOTNUMBER', notNumber +'');
  					
   	  					return false;
				   }	
				   
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['contextSelectorData.cf'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_contextSelectorData_cf','label.contextSelectorData.cf',"@ERROR La partita IVA contiene un carattere non valido: @CHARNOTNUMBER.\nI caratteri validi sono le cifre.","validate_contextSelectorData_cf_onlyNumbersValidatorforPartIva", _onsubmit, _onchange);
        	
        
      	// validator name: contextSelectorData.cf  partitaIva
 
			    _onsubmit=false;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: contextSelectorData.cf 
	  function validate_contextSelectorData_cf_partitaIva(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
         	if ((value != null) && (value.length==11) &&(checkOnlyNumbersWithChar(value)==null)){
           	 if((checkPIVA(value) == null))
		         return false;
		     else
		     	return true;
            }   
				   
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['contextSelectorData.cf'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_contextSelectorData_cf','label.contextSelectorData.cf',"La partita IVA non e valida:\n il codice di controllo non corrisponde.","validate_contextSelectorData_cf_partitaIva", _onsubmit, _onchange);
        	
        
      	// validator name: contextSelectorData.cf  codiceFiscale
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: contextSelectorData.cf 
	  function validate_contextSelectorData_cf_codiceFiscale(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
             if ((value != "") && value.length==16 && checkNoSpecialCharWithChar(value)==null)
             {
             	if (isCodiceFiscale(value) == false)
             		return false;
             	else
             	{
             		field.value=value.toUpperCase();
             		return true;
             	}
             }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['contextSelectorData.cf'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_contextSelectorData_cf','label.contextSelectorData.cf',"Il codice fiscale non \u00E8 corretto:\n il codice di controllo non corrisponde.","validate_contextSelectorData_cf_codiceFiscale", _onsubmit, _onchange);
        	
        
      	// validator name: contextSelectorData.cf  checkCFPIVA
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: contextSelectorData.cf 
	  function validate_contextSelectorData_cf_checkCFPIVA(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
             if ((value != "") && (value.length!=16)&&(value.length!=11))
             {
             	return false;
             }
             
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['contextSelectorData.cf'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_contextSelectorData_cf','label.contextSelectorData.cf',"La lunghezza del dato inserito non e corretta:\n la partita IVA dovrebbe essere lunga\n esattamente 11 caratteri, \n il codice fiscale dovrebbe essere lungo\n esattamente 16 caratteri.\n La partita IVA non e valida:\n il codice di controllo non corrisponde.\n","validate_contextSelectorData_cf_checkCFPIVA", _onsubmit, _onchange);
        	
        
              
      	// validator name: contextSelectorData.banca  requiredCbiField
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: contextSelectorData.banca 
	  function validate_contextSelectorData_banca_requiredCbiField(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
				if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }
	                
			    
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['contextSelectorData.banca'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_contextSelectorData_banca','label.contextSelectorData.banca',"il campo \u00E8 obbligatorio","validate_contextSelectorData_banca_requiredCbiField", _onsubmit, _onchange);
        	
        
              
      	// validator name: contextSelectorData.conto  requiredCbiField
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: contextSelectorData.conto 
	  function validate_contextSelectorData_conto_requiredCbiField(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
				if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }
	                
			    
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['contextSelectorData.conto'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_contextSelectorData_conto','label.contextSelectorData.conto',"il campo \u00E8 obbligatorio","validate_contextSelectorData_conto_requiredCbiField", _onsubmit, _onchange);
        	
        
              
              
      	// validator name: pagamento.ragioneSociale  requiredCbiField
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: pagamento.ragioneSociale 
	  function validate_pagamento_ragioneSociale_requiredCbiField(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
				if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }
	                
			    
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.ragioneSociale'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_ragioneSociale','label.pagamento.ragioneSociale',"il campo \u00E8 obbligatorio","validate_pagamento_ragioneSociale_requiredCbiField", _onsubmit, _onchange);
        	
        
              
              
              
      	// validator name: pagamento.indirizzoResidenza.CAP  minLengthNoSubmitValidator
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: pagamento.indirizzoResidenza.CAP 
	  function validate_pagamento_indirizzoResidenza_CAP_minLengthNoSubmitValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            if (value != null && value != "") {
                
                    //trim field value
                    while (value.substring(0,1) == ' ')
                        value = value.substring(1, value.length);
                    while (value.substring(value.length-1, value.length) == ' ')
                        value = value.substring(0, value.length-1);
                if ((5 > -1 && value.length < 5) ||
                    (-1 > -1 && value.length > -1)) {
 
		                return false;
	            }
            } 
            
            
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.indirizzoResidenza.CAP'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_indirizzoResidenza_CAP','label.pagamento.indirizzoResidenza.CAP',"@WARNING Il valore da inserire deve avere almeno 5 caratteri.","validate_pagamento_indirizzoResidenza_CAP_minLengthNoSubmitValidator", _onsubmit, _onchange);
        	
        
              
              
              
      	// validator name: pagamento.coordinateBancaBeneficiario.IBAN  requiredIBANCbiField
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;  
 
 
       // field name: pagamento.coordinateBancaBeneficiario.IBAN 
	  function validate_pagamento_coordinateBancaBeneficiario_IBAN_requiredIBANCbiField(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
					tipoCausale = form.elements['pagamento.causale'].value;
				   	if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0) && (tipoCausale!='ZV000')) {
	                return false;
	            }  
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.coordinateBancaBeneficiario.IBAN'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_coordinateBancaBeneficiario_IBAN','label.pagamento.coordinateBancaBeneficiario.IBAN',"il campo \u00E8 obbligatorio","validate_pagamento_coordinateBancaBeneficiario_IBAN_requiredIBANCbiField", _onsubmit, _onchange);
        	
        
      	// validator name: pagamento.coordinateBancaBeneficiario.IBAN  checkCbiIBAN
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;  
			 
 
 
       // field name: pagamento.coordinateBancaBeneficiario.IBAN 
	  function validate_pagamento_coordinateBancaBeneficiario_IBAN_checkCbiIBAN(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
      	   
       	     	if (value != "" && ((!checkIBAN(value, "", "", "")) ||(validateIBAN(value)==-1)) )
       	     	{     
            	      return false;
       	   		}
       	   		
        
           
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.coordinateBancaBeneficiario.IBAN'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_coordinateBancaBeneficiario_IBAN','label.pagamento.coordinateBancaBeneficiario.IBAN',"formato del codice non corretto","validate_pagamento_coordinateBancaBeneficiario_IBAN_checkCbiIBAN", _onsubmit, _onchange);
        	
        
      	// validator name: pagamento.coordinateBancaBeneficiario.IBAN  checkIBAN
 
				_onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: pagamento.coordinateBancaBeneficiario.IBAN 
	  function validate_pagamento_coordinateBancaBeneficiario_IBAN_checkIBAN(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
			  	if(value != null && (value != "" || value.replace(/^\s+|\s+$/g,"").length != 0)){
				  	var iban=value;
					var vIban = validateIBAN(iban);
						if(vIban == -2 || vIban == -1) 
						{
							return false;
							
						}
				}
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.coordinateBancaBeneficiario.IBAN'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_coordinateBancaBeneficiario_IBAN','label.pagamento.coordinateBancaBeneficiario.IBAN',"@CONFIRM Attenzione!! \n\nIBAN beneficiario errato o mancante.\n\nSi desidera comunque procedere?\n","validate_pagamento_coordinateBancaBeneficiario_IBAN_checkIBAN", _onsubmit, _onchange);
        	
        
              
              
              
              
      	// validator name: pagamento.coordinateBancaBeneficiario.numConto  accountValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: pagamento.coordinateBancaBeneficiario.numConto 
	  function validate_pagamento_coordinateBancaBeneficiario_numConto_accountValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
        	 		var tmp=checkAccountFormat(value,0,12);
        	 		if ((value != "") && (tmp.indexOf('false')==0))
        	 	  	{
            	      field.value = tmp.substring(5,tmp.length);
            	      return false;
        	   		
        	   		} else 		{
            	      //aggiunta di zeri
            	      field.value = tmp;
            	      return true;
        	   		
        	   		}  
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.coordinateBancaBeneficiario.numConto'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_coordinateBancaBeneficiario_numConto','label.pagamento.coordinateBancaBeneficiario.numConto',"Numero di conto errato.\nI valori permessi sono 12.\nControllare il numero di conto proposto! ","validate_pagamento_coordinateBancaBeneficiario_numConto_accountValidator", _onsubmit, _onchange);
        	
        
              
              
              
      	// validator name: pagamento.importo  requiredCbiField
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: pagamento.importo 
	  function validate_pagamento_importo_requiredCbiField(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
				if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }
	                
			    
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.importo'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_importo','label.pagamento.importo',"il campo \u00E8 obbligatorio","validate_pagamento_importo_requiredCbiField", _onsubmit, _onchange);
        	
        
      	// validator name: pagamento.importo  importiNumero
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE; 
 
 
       // field name: pagamento.importo 
	  function validate_pagamento_importo_importiNumero(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           if ((value != null) &&  !checkReal(field.value)) {
	                return false;
	            }   
				if ((value != null) &&  (!decimaliCorretti(field.value)))
				{
					return false;
				}
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.importo'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_importo','label.pagamento.importo',"Inserire un valore reale","validate_pagamento_importo_importiNumero", _onsubmit, _onchange);
        	
        
      	// validator name: pagamento.importo  importoMassimo
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE; 
			
 
 
       // field name: pagamento.importo 
	  function validate_pagamento_importo_importoMassimo(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           if (value != null) {
	              if(!calcolaMax(field.value)){
	              	return false;
	              }
				}
			 
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.importo'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_importo','label.pagamento.importo',"Valore massimo ammesso 99.999.999.999,99","validate_pagamento_importo_importoMassimo", _onsubmit, _onchange);
        	
        
              
      	// validator name: pagamento.causale  rimborsiUtenti
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: pagamento.causale 
	  function validate_pagamento_causale_rimborsiUtenti(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
				tipoCausale = form.elements['pagamento.causale'].value;
				conto = form.elements['pagamento.coordinateBancaBeneficiario.numConto'].value;
				codiceCliente = form.elements['pagamento.codiceFornitore'].value;
				codiceIban = form.elements['pagamento.coordinateBancaBeneficiario.IBAN'].value;
				if ((tipoCausale == 'ZV000') && (conto == "") && (codiceCliente == "") && (codiceIban == "")) return false; 
				if((tipoCausale == 'ZV000') && (conto != "") && (codiceCliente != ""))return false;
				if((tipoCausale == 'ZV000') && (codiceCliente != "") && (codiceIban != ""))return false;
                
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.causale'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_causale','label.pagamento.causale',"I bonifici con causale ZV000 devono avere valorizzato \nil conto del beneficiario oppure \nil codice cliente beneficiario ma non entrambi.","validate_pagamento_causale_rimborsiUtenti", _onsubmit, _onchange);
        	
        
      	// validator name: pagamento.causale  causale79000
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: pagamento.causale 
	  function validate_pagamento_causale_causale79000(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
				tipoCausale = form.elements['pagamento.causale'].value;
				ibanOrdinante=form.elements['contextSelectorData.iban'].value;
				ibanBeneficiario=form.elements['pagamento.coordinateBancaBeneficiario.IBAN'].value;
				if(ibanOrdinante !=" " && ibanBeneficiario!=" " && tipoCausale == '79000'){
					abiOrdinante = ibanOrdinante.substring(5,10);
					abiBeneficiario = ibanBeneficiario.substring(5,10);
					if(abiBeneficiario==abiOrdinante)return false;
				}
				                
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.causale'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_causale','label.pagamento.causale',"Per il tipo di Causale selezionata, il codice ABI Beneficiario e il codice ABI Ordinante non devono coincidere.","validate_pagamento_causale_causale79000", _onsubmit, _onchange);
        	
        
      	// validator name: pagamento.causale  causale34000
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: pagamento.causale 
	  function validate_pagamento_causale_causale34000(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
				tipoCausale = form.elements['pagamento.causale'].value;
				ibanOrdinante=form.elements['contextSelectorData.iban'].value;
				ibanBeneficiario=form.elements['pagamento.coordinateBancaBeneficiario.IBAN'].value;
				if(ibanOrdinante !=" " && ibanBeneficiario!=" " && tipoCausale == '34000' ){
					abiOrdinante = ibanOrdinante.substring(5,10);
					abiBeneficiario = ibanBeneficiario.substring(5,10);
					if(abiBeneficiario!=abiOrdinante)return false;
				}
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.causale'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_causale','label.pagamento.causale',"Per il tipo di Causale selezionata, il codice ABI Beneficiario e il codice ABI Ordinante devono coincidere.","validate_pagamento_causale_causale34000", _onsubmit, _onchange);
        	
        
              
      	// validator name: pagamento.dataAddebito  sintaxDateValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: pagamento.dataAddebito 
	  function validate_pagamento_dataAddebito_sintaxDateValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            	if ((value != null)  && value != "" && (checkSyntaxDate(field.value) == false))
            	{
            		return false;
	            }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.dataAddebito'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_dataAddebito','label.pagamento.dataAddebito',"La sintassi non \u00E8 corretta","validate_pagamento_dataAddebito_sintaxDateValidator", _onsubmit, _onchange);
        	
        
      	// validator name: pagamento.dataAddebito  validDateValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: pagamento.dataAddebito 
	  function validate_pagamento_dataAddebito_validDateValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            	if ((value != null) && value != "" && checkSyntaxDate(field.value) == true)
            	{	
            		var esitoValidateData = checkValidDate(value); 
            		
            		if (esitoValidateData==false)
            			return false;
            		else
            			field.value=preformatDate(value);	
	            }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.dataAddebito'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_dataAddebito','label.pagamento.dataAddebito',"La data inserita non \u00E8 valida","validate_pagamento_dataAddebito_validDateValidator", _onsubmit, _onchange);
        	
        
      	// validator name: pagamento.dataAddebito  checkInRangeValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: pagamento.dataAddebito 
	  function validate_pagamento_dataAddebito_checkInRangeValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            	if ((value != null) && 
            		value != "" && 
            	    checkSyntaxDate(field.value) == true 
            	    && checkValidDate(value)==true &&
	            	checkDateInRange(value)==false)
	            	{
	            		return false;
		            } 
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.dataAddebito'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_dataAddebito','label.pagamento.dataAddebito',"L\'anno deve essere compreso tra il 1900 e il 2050","validate_pagamento_dataAddebito_checkInRangeValidator", _onsubmit, _onchange);
        	
        
      	// validator name: pagamento.dataAddebito  validDateCBI
 
				_onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: pagamento.dataAddebito 
	  function validate_pagamento_dataAddebito_validDateCBI(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            	if ((value != null)  && value != "")
            	{
            		d=new Date();
					todayDateValue=new Date();
					todayDateValue.setTime("0");
					todayDateValue.setFullYear(d.getFullYear());
					todayDateValue.setMonth(d.getMonth(),d.getDate());
					if (value.length > 0)
					{
						payDate = new Date();
						payDate.setTime("0");
						payDate.setFullYear(value.substr(6,4));
						payDate.setMonth(eval(value.substr(3,2)-1),value.substr(0,2));
						if (payDate<todayDateValue)
						{
							return false;
						}
					}
	            }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.dataAddebito'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_dataAddebito','label.pagamento.dataAddebito',"@CONFIRM Attenzione!!!\nLa data esecuzione e precedente alla data odierna.\nSi desidera comunque procedere?\n","validate_pagamento_dataAddebito_validDateCBI", _onsubmit, _onchange);
        	
        
              
      	// validator name: pagamento.dataValuta  sintaxDateValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: pagamento.dataValuta 
	  function validate_pagamento_dataValuta_sintaxDateValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            	if ((value != null)  && value != "" && (checkSyntaxDate(field.value) == false))
            	{
            		return false;
	            }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.dataValuta'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_dataValuta','label.pagamento.dataValuta',"La sintassi non \u00E8 corretta","validate_pagamento_dataValuta_sintaxDateValidator", _onsubmit, _onchange);
        	
        
      	// validator name: pagamento.dataValuta  validDateValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: pagamento.dataValuta 
	  function validate_pagamento_dataValuta_validDateValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            	if ((value != null) && value != "" && checkSyntaxDate(field.value) == true)
            	{	
            		var esitoValidateData = checkValidDate(value); 
            		
            		if (esitoValidateData==false)
            			return false;
            		else
            			field.value=preformatDate(value);	
	            }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.dataValuta'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_dataValuta','label.pagamento.dataValuta',"La data inserita non \u00E8 valida","validate_pagamento_dataValuta_validDateValidator", _onsubmit, _onchange);
        	
        
      	// validator name: pagamento.dataValuta  checkInRangeValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: pagamento.dataValuta 
	  function validate_pagamento_dataValuta_checkInRangeValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            	if ((value != null) && 
            		value != "" && 
            	    checkSyntaxDate(field.value) == true 
            	    && checkValidDate(value)==true &&
	            	checkDateInRange(value)==false)
	            	{
	            		return false;
		            } 
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.dataValuta'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_dataValuta','label.pagamento.dataValuta',"L\'anno deve essere compreso tra il 1900 e il 2050","validate_pagamento_dataValuta_checkInRangeValidator", _onsubmit, _onchange);
        	
        
      	// validator name: pagamento.dataValuta  validDateCBI
 
				_onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: pagamento.dataValuta 
	  function validate_pagamento_dataValuta_validDateCBI(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            	if ((value != null)  && value != "")
            	{
            		d=new Date();
					todayDateValue=new Date();
					todayDateValue.setTime("0");
					todayDateValue.setFullYear(d.getFullYear());
					todayDateValue.setMonth(d.getMonth(),d.getDate());
					if (value.length > 0)
					{
						payDate = new Date();
						payDate.setTime("0");
						payDate.setFullYear(value.substr(6,4));
						payDate.setMonth(eval(value.substr(3,2)-1),value.substr(0,2));
						if (payDate<todayDateValue)
						{
							return false;
						}
					}
	            }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.dataValuta'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_dataValuta','label.pagamento.dataValuta',"@CONFIRM Attenzione!!!\nLa data valuta banca beneficiario e precedente alla data odierna.\nSi desidera comunque procedere?\n","validate_pagamento_dataValuta_validDateCBI", _onsubmit, _onchange);
        	
        
              
      	// validator name: pagamento.desPagamento  requiredCbiField
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: pagamento.desPagamento 
	  function validate_pagamento_desPagamento_requiredCbiField(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
				if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }
	                
			    
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['pagamento.desPagamento'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_pagamento_desPagamento','label.pagamento.desPagamento',"il campo \u00E8 obbligatorio","validate_pagamento_desPagamento_requiredCbiField", _onsubmit, _onchange);
        	
        
              
              
      	// validator name: contextSelectorData.codiceUnivoco  richiestaCodiceUnivoco
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;	
				
 
 
       // field name: contextSelectorData.codiceUnivoco 
	  function validate_contextSelectorData_codiceUnivoco_richiestaCodiceUnivoco(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
				
				richiestaEsito= form.elements['pagamento.richiestaEsito'].value;
				if (value == "" && (richiestaEsito!="4") && (richiestaEsito!=" "))
       	     	{     
            	      return false;
       	   		}
					
				
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniCbi").elements['contextSelectorData.codiceUnivoco'])  addValidation(showAlert,'salvaBoniCbi','salvaBoniCbi_contextSelectorData_codiceUnivoco','label.contextSelectorData.codiceUnivoco',"Specificare il codice univoco","validate_contextSelectorData_codiceUnivoco_richiestaCodiceUnivoco", _onsubmit, _onchange);
        	
        
              
              
              
 
 
 
	    function validateForm_salvaBoniCbi() {
				if (submitCount >= 1) { alert("Richiesta gia' inoltrata."); return false; } 
		        var form = document.getElementById("salvaBoniCbi");
		        var o=new validationResult();
		        
				var noerror= validateOnSubmitAll(o);
	            if (o.messageList.length>0) { 
		            var message="";
		            for (i=0;i<o.messageList.length;i++) 
					{
						if (o.messageList[i].type!=CONFIRM)
						{
							message+=o.messageList[i].label+' : ' +o.messageList[i].actualMessage+'\n';
						}
					}
		            if (!noerror) alert(message);
	            }
				if (noerror && o.confirmCount>0)
				{	//non ci sono errori ma vi sono delle conferme da richiedere all'utente
		            var message="";
		            for (i=0;i<o.messageList.length;i++) 
					{
						if (o.messageList[i].type==CONFIRM)
						{
							//message+=o.messageList[i].label+':' +o.messageList[i].actualMessage+'\n';
							if(!( confirm(o.messageList[i].label+':' +'\n'+o.messageList[i].actualMessage+'\n'))) return false;
						}
						 
					}
		           
					 
				}
				
		        return noerror;
 
			//else if (annullaOperazione==true) return false;
			
			  
			
		}
		
		
		validateOnFieldAll();	
