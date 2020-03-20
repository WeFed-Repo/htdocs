 var _onsubmit=true;
    var _onchange=CHECK_ON_CHANGE;
    var _show =true;
	CHECK_REPEATED_SUBMIT=true;
	// manca il messaggio internazionale 
	

              
              
              
              
      	// validator name: anagrafica.intestatario  requiredCbiValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: anagrafica.intestatario 
	  function validate_anagrafica_intestatario_requiredCbiValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
             if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
		                return false;
            }

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.intestatario'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_intestatario','label.anagrafica.intestatario',"il campo \u00E8 obbligatorio","validate_anagrafica_intestatario_requiredCbiValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.codEsterna  requiredCbiValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: anagrafica.codEsterna 
	  function validate_anagrafica_codEsterna_requiredCbiValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
             if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
		                return false;
            }

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.codEsterna'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_codEsterna','label.anagrafica.codEsterna',"il campo \u00E8 obbligatorio","validate_anagrafica_codEsterna_requiredCbiValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.codEsterna  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.codEsterna 
	  function validate_anagrafica_codEsterna_stringlengthCbiValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            if (value != null && value != "") {
                
                    //trim field value
                    while (value.substring(0,1) == ' ')
                        value = value.substring(1, value.length);
                    while (value.substring(value.length-1, value.length) == ' ')
                        value = value.substring(0, value.length-1);
                if ((-1 > -1 && value.length < -1) ||
                    (16 > -1 && value.length > 16)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.codEsterna'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_codEsterna','label.anagrafica.codEsterna',"I caratteri immessi sono superiori ai 16 consentiti","validate_anagrafica_codEsterna_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.cognome  requiredCbiValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: anagrafica.cognome 
	  function validate_anagrafica_cognome_requiredCbiValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
             if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
		                return false;
            }

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.cognome'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_cognome','label.anagrafica.cognome',"il campo \u00E8 obbligatorio","validate_anagrafica_cognome_requiredCbiValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.cognome  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.cognome 
	  function validate_anagrafica_cognome_stringlengthCbiValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            if (value != null && value != "") {
                
                    //trim field value
                    while (value.substring(0,1) == ' ')
                        value = value.substring(1, value.length);
                    while (value.substring(value.length-1, value.length) == ' ')
                        value = value.substring(0, value.length-1);
                if ((-1 > -1 && value.length < -1) ||
                    (60 > -1 && value.length > 60)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.cognome'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_cognome','label.anagrafica.cognome',"I caratteri immessi sono superiori ai 60 consentiti","validate_anagrafica_cognome_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.cognome  switftStringValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;    
 
 
       // field name: anagrafica.cognome 
	  function validate_anagrafica_cognome_switftStringValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				

				if (!isSWIFTString(value)) return false; 
       	   		

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.cognome'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_cognome','label.anagrafica.cognome',"Alcuni campi contengono caratteri non ammessi. \n\nCaratteri ammessi: \nlettere [a-z][A-Z] \nnumeri[0-9] \ncarattere[spazio] \ncaratteri speciali[/-?:().,\'+]","validate_anagrafica_cognome_switftStringValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.codFiscale  minLengthNoSubmitValidator
      
			    _onsubmit=false;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.codFiscale 
	  function validate_anagrafica_codFiscale_minLengthNoSubmitValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            if (value != null && value != "") {
                
                    //trim field value
                    while (value.substring(0,1) == ' ')
                        value = value.substring(1, value.length);
                    while (value.substring(value.length-1, value.length) == ' ')
                        value = value.substring(0, value.length-1);
                if ((16 > -1 && value.length < 16) ||
                    (-1 > -1 && value.length > -1)) {
 
		                return false;
	            }
            } 
            
            

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.codFiscale'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_codFiscale','label.anagrafica.codFiscale',"@WARNING La lunghezza del codice fiscale non \u00E8\n corretta: il codice fiscale dovrebbe essere lungo\n esattamente 16 caratteri.","validate_anagrafica_codFiscale_minLengthNoSubmitValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.codFiscale  noSpecialCharValidatorForCF
      
			    _onsubmit=false;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.codFiscale 
	  function validate_anagrafica_codFiscale_noSpecialCharValidatorForCF(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
  				 if (value != null && value.length==16 && checkNoSpecialCharWithChar(value)!=null  ) {
   					
   					var notValidChar = checkNoSpecialCharWithChar(value);
   					setVariableIntoMessage(obj, 'CHARNOTVALID', notValidChar +'');
   					
   					return false;
				   }

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.codFiscale'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_codFiscale','label.anagrafica.codFiscale',"@WARNING Contiene un carattere non valido: @CHARNOTVALID.\nI caratteri validi sono le lettere e le cifre.","validate_anagrafica_codFiscale_noSpecialCharValidatorForCF", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.codFiscale  codiceFiscale
      
			    _onsubmit=false;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.codFiscale 
	  function validate_anagrafica_codFiscale_codiceFiscale(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
             if ((value != "") && 
             value.length==16 && 
             checkNoSpecialCharWithChar(value)==null)
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
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.codFiscale'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_codFiscale','label.anagrafica.codFiscale',"@WARNING Il codice fiscale non \u00E8 corretto:\n il codice di controllo non corrisponde.","validate_anagrafica_codFiscale_codiceFiscale", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.partitaIVA  minLengthNoSubmitValidator
      
			    _onsubmit=false;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.partitaIVA 
	  function validate_anagrafica_partitaIVA_minLengthNoSubmitValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            if (value != null && value != "") {
                
                    //trim field value
                    while (value.substring(0,1) == ' ')
                        value = value.substring(1, value.length);
                    while (value.substring(value.length-1, value.length) == ' ')
                        value = value.substring(0, value.length-1);
                if ((11 > -1 && value.length < 11) ||
                    (-1 > -1 && value.length > -1)) {
 
		                return false;
	            }
            } 
            
            

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.partitaIVA'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_partitaIVA','label.anagrafica.partitaIVA',"@WARNING La lunghezza della partita IVA non \u00E8\n corretta: la partita IVA dovrebbe essere lunga\n esattamente 11 caratteri.","validate_anagrafica_partitaIVA_minLengthNoSubmitValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.partitaIVA  onlyNumbersValidatorforPartIva
      
			    _onsubmit=false;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.partitaIVA 
	  function validate_anagrafica_partitaIVA_onlyNumbersValidatorforPartIva(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
			
  				if (value != null && value.length==11 && checkOnlyNumbersWithChar(value)!=null  ) {
  					
  					var notNumber = checkOnlyNumbersWithChar(value);
   					setVariableIntoMessage(obj, 'CHARNOTNUMBER', notNumber +'');
  					
   	  					return false;
				   }	
				   

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.partitaIVA'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_partitaIVA','label.anagrafica.partitaIVA',"@WARNING Contiene un carattere non valido: @CHARNOTNUMBER.\nI caratteri validi sono le cifre.","validate_anagrafica_partitaIVA_onlyNumbersValidatorforPartIva", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.partitaIVA  partitaIva
      
			    _onsubmit=false;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.partitaIVA 
	  function validate_anagrafica_partitaIVA_partitaIva(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
         	if ((value != null) && 
         	value.length==11 &&
         	checkOnlyNumbersWithChar(value)==null &&
         	(checkPIVA(value) == null))
            {
		                return false;
            }   
				   

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.partitaIVA'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_partitaIVA','label.anagrafica.partitaIVA',"@WARNING La partita IVA non \u00E8 valida: il codice di controllo non corrisponde.","validate_anagrafica_partitaIVA_partitaIva", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.indirizzoResidenza.indirizzo  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.indirizzoResidenza.indirizzo 
	  function validate_anagrafica_indirizzoResidenza_indirizzo_stringlengthCbiValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            if (value != null && value != "") {
                
                    //trim field value
                    while (value.substring(0,1) == ' ')
                        value = value.substring(1, value.length);
                    while (value.substring(value.length-1, value.length) == ' ')
                        value = value.substring(0, value.length-1);
                if ((-1 > -1 && value.length < -1) ||
                    (30 > -1 && value.length > 30)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.indirizzoResidenza.indirizzo'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_indirizzoResidenza_indirizzo','label.anagrafica.indirizzoResidenza.indirizzo',"I caratteri immessi sono superiori ai 30 consentiti","validate_anagrafica_indirizzoResidenza_indirizzo_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.indirizzoResidenza.indirizzo  requiredCbiValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: anagrafica.indirizzoResidenza.indirizzo 
	  function validate_anagrafica_indirizzoResidenza_indirizzo_requiredCbiValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
             if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
		                return false;
            }

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.indirizzoResidenza.indirizzo'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_indirizzoResidenza_indirizzo','label.anagrafica.indirizzoResidenza.indirizzo',"il campo \u00E8 obbligatorio","validate_anagrafica_indirizzoResidenza_indirizzo_requiredCbiValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.indirizzoResidenza.indirizzo  switftStringValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;    
 
 
       // field name: anagrafica.indirizzoResidenza.indirizzo 
	  function validate_anagrafica_indirizzoResidenza_indirizzo_switftStringValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				

				if (!isSWIFTString(value)) return false; 
       	   		

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.indirizzoResidenza.indirizzo'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_indirizzoResidenza_indirizzo','label.anagrafica.indirizzoResidenza.indirizzo',"Alcuni campi contengono caratteri non ammessi. \n\nCaratteri ammessi: \nlettere [a-z][A-Z] \nnumeri[0-9] \ncarattere[spazio] \ncaratteri speciali[/-?:().,\'+]","validate_anagrafica_indirizzoResidenza_indirizzo_switftStringValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.indirizzoResidenza.CAP  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.indirizzoResidenza.CAP 
	  function validate_anagrafica_indirizzoResidenza_CAP_stringlengthCbiValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            if (value != null && value != "") {
                
                    //trim field value
                    while (value.substring(0,1) == ' ')
                        value = value.substring(1, value.length);
                    while (value.substring(value.length-1, value.length) == ' ')
                        value = value.substring(0, value.length-1);
                if ((-1 > -1 && value.length < -1) ||
                    (5 > -1 && value.length > 5)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.indirizzoResidenza.CAP'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_indirizzoResidenza_CAP','label.anagrafica.indirizzoResidenza.CAP',"I caratteri immessi sono superiori ai 5 consentiti","validate_anagrafica_indirizzoResidenza_CAP_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.indirizzoResidenza.comune  requiredCbiValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: anagrafica.indirizzoResidenza.comune 
	  function validate_anagrafica_indirizzoResidenza_comune_requiredCbiValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
             if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
		                return false;
            }

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.indirizzoResidenza.comune'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_indirizzoResidenza_comune','label.anagrafica.indirizzoResidenza.comune',"il campo \u00E8 obbligatorio","validate_anagrafica_indirizzoResidenza_comune_requiredCbiValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.indirizzoResidenza.comune  switftStringValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;    
 
 
       // field name: anagrafica.indirizzoResidenza.comune 
	  function validate_anagrafica_indirizzoResidenza_comune_switftStringValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				

				if (!isSWIFTString(value)) return false; 
       	   		

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.indirizzoResidenza.comune'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_indirizzoResidenza_comune','label.anagrafica.indirizzoResidenza.comune',"Alcuni campi contengono caratteri non ammessi. \n\nCaratteri ammessi: \nlettere [a-z][A-Z] \nnumeri[0-9] \ncarattere[spazio] \ncaratteri speciali[/-?:().,\'+]","validate_anagrafica_indirizzoResidenza_comune_switftStringValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.indirizzoResidenza.provincia  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.indirizzoResidenza.provincia 
	  function validate_anagrafica_indirizzoResidenza_provincia_stringlengthCbiValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            if (value != null && value != "") {
                
                    //trim field value
                    while (value.substring(0,1) == ' ')
                        value = value.substring(1, value.length);
                    while (value.substring(value.length-1, value.length) == ' ')
                        value = value.substring(0, value.length-1);
                if ((-1 > -1 && value.length < -1) ||
                    (2 > -1 && value.length > 2)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.indirizzoResidenza.provincia'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_indirizzoResidenza_provincia','label.anagrafica.indirizzoResidenza.provincia',"I caratteri immessi sono superiori ai 2 consentiti","validate_anagrafica_indirizzoResidenza_provincia_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
              
      	// validator name: anagrafica.coordinateBanca.codPaese  esteroPaeseValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: anagrafica.coordinateBanca.codPaese 
	  function validate_anagrafica_coordinateBanca_codPaese_esteroPaeseValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            	//il paese e' obbligatorio, utilizzo un validator apposito
            	//perche' venga scatenato all'evento submit e non interferisca
            	//con la gestione delle widget su cambio Paese selezionato	    
            	    	
       	   		if (value == null || (value==-1) || value== '-1' || value=='' || value=='NNN') {
		                return false;
            	}
            

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.coordinateBanca.codPaese'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_coordinateBanca_codPaese','label.anagrafica.coordinateBanca.codPaese',"il campo \u00E8 obbligatorio","validate_anagrafica_coordinateBanca_codPaese_esteroPaeseValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.coordinateBanca.IBANEstero  ibanEsteroFieldCountryValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;    	         
 
 
       // field name: anagrafica.coordinateBanca.IBANEstero 
	  function validate_anagrafica_coordinateBanca_IBANEstero_ibanEsteroFieldCountryValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
					var chekIban = form.elements['anagrafica.coordinateBanca.IBANEstero'].value;
					var country =  form.elements['anagrafica.coordinateBanca.codPaese'].options[form.elements['anagrafica.coordinateBanca.codPaese'].selectedIndex].value;
					
					obj.callShowFunction=false;
					ArrayforIban();
					selectOK = checkIBANCountry(chekIban ,country, obj.actualMessage);
					var obj1=getValidation(field,ERROR,11);
       	     		if (selectOK!=null) {
       	     		   obj1.disableValidationOnSubmit=true; 
					   if (!selectOK) return false;
					}
					

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.coordinateBanca.IBANEstero'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_coordinateBanca_IBANEstero','label.anagrafica.coordinateBanca.IBANEstero',"@ERROR(10) Attenzione il codice IBAN non \u00E8 corretto! \nSi desidera procedere?","validate_anagrafica_coordinateBanca_IBANEstero_ibanEsteroFieldCountryValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.coordinateBanca.IBANEstero  ibanEsteroFieldFromCountryValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;   
 
 
       // field name: anagrafica.coordinateBanca.IBANEstero 
	  function validate_anagrafica_coordinateBanca_IBANEstero_ibanEsteroFieldFromCountryValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
					var chekIban = form.elements['anagrafica.coordinateBanca.IBANEstero'].value;
					var country = form.elements['anagrafica.coordinateBanca.codPaese'].options[form.elements['anagrafica.coordinateBanca.codPaese'].selectedIndex].value;
					
					ArrayforIban();
					obj.callShowFunction=false;
					
					selectOK = checkIBANfromCountry(chekIban, country ,obj.actualMessage);
					  
					if (!selectOK)
                    {
                        return false;
                    }
 
    
       	   		

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.coordinateBanca.IBANEstero'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_coordinateBanca_IBANEstero','label.anagrafica.coordinateBanca.IBANEstero',"@ERROR(11) Attenzione il codice IBAN non \u00E8 corretto! \nSi desidera procedere?","validate_anagrafica_coordinateBanca_IBANEstero_ibanEsteroFieldFromCountryValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.coordinateBanca.IBANEstero  switftStringValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;    
 
 
       // field name: anagrafica.coordinateBanca.IBANEstero 
	  function validate_anagrafica_coordinateBanca_IBANEstero_switftStringValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				

				if (!isSWIFTString(value)) return false; 
       	   		

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.coordinateBanca.IBANEstero'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_coordinateBanca_IBANEstero','label.anagrafica.coordinateBanca.IBANEstero',"Alcuni campi contengono caratteri non ammessi. \n\nCaratteri ammessi: \nlettere [a-z][A-Z] \nnumeri[0-9] \ncarattere[spazio] \ncaratteri speciali[/-?:().,\'+]","validate_anagrafica_coordinateBanca_IBANEstero_switftStringValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.coordinateBanca.BIC  bicLenghtValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.coordinateBanca.BIC 
	  function validate_anagrafica_coordinateBanca_BIC_bicLenghtValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
       	     	if (value != "" && value.length!=8 && value.length!=11)
       	     	{     
            	      return false;
       	   		}
       	   	
            

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.coordinateBanca.BIC'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_coordinateBanca_BIC','label.anagrafica.coordinateBanca.BIC',"La lunghezza deve essere di 8 o 11 caratteri","validate_anagrafica_coordinateBanca_BIC_bicLenghtValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.coordinateBanca.BIC  switftStringValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;    
 
 
       // field name: anagrafica.coordinateBanca.BIC 
	  function validate_anagrafica_coordinateBanca_BIC_switftStringValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				

				if (!isSWIFTString(value)) return false; 
       	   		

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.coordinateBanca.BIC'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_coordinateBanca_BIC','label.anagrafica.coordinateBanca.BIC',"Alcuni campi contengono caratteri non ammessi. \n\nCaratteri ammessi: \nlettere [a-z][A-Z] \nnumeri[0-9] \ncarattere[spazio] \ncaratteri speciali[/-?:().,\'+]","validate_anagrafica_coordinateBanca_BIC_switftStringValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.coordinateBanca.desBanca  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.coordinateBanca.desBanca 
	  function validate_anagrafica_coordinateBanca_desBanca_stringlengthCbiValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            if (value != null && value != "") {
                
                    //trim field value
                    while (value.substring(0,1) == ' ')
                        value = value.substring(1, value.length);
                    while (value.substring(value.length-1, value.length) == ' ')
                        value = value.substring(0, value.length-1);
                if ((-1 > -1 && value.length < -1) ||
                    (60 > -1 && value.length > 60)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.coordinateBanca.desBanca'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_coordinateBanca_desBanca','label.anagrafica.coordinateBanca.desBanca',"I caratteri immessi sono superiori ai 60 consentiti","validate_anagrafica_coordinateBanca_desBanca_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.coordinateBanca.desBanca  switftStringValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;    
 
 
       // field name: anagrafica.coordinateBanca.desBanca 
	  function validate_anagrafica_coordinateBanca_desBanca_switftStringValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				

				if (!isSWIFTString(value)) return false; 
       	   		

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.coordinateBanca.desBanca'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_coordinateBanca_desBanca','label.anagrafica.coordinateBanca.desBanca',"Alcuni campi contengono caratteri non ammessi. \n\nCaratteri ammessi: \nlettere [a-z][A-Z] \nnumeri[0-9] \ncarattere[spazio] \ncaratteri speciali[/-?:().,\'+]","validate_anagrafica_coordinateBanca_desBanca_switftStringValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.coordinateBanca.locSportello  switftStringValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;    
 
 
       // field name: anagrafica.coordinateBanca.locSportello 
	  function validate_anagrafica_coordinateBanca_locSportello_switftStringValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				

				if (!isSWIFTString(value)) return false; 
       	   		

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.coordinateBanca.locSportello'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_coordinateBanca_locSportello','label.anagrafica.coordinateBanca.locSportello',"Alcuni campi contengono caratteri non ammessi. \n\nCaratteri ammessi: \nlettere [a-z][A-Z] \nnumeri[0-9] \ncarattere[spazio] \ncaratteri speciali[/-?:().,\'+]","validate_anagrafica_coordinateBanca_locSportello_switftStringValidator", _onsubmit, _onchange);
        	
        
              
              
              
      	// validator name: anagrafica.coordinateBanca.codDivisaConto  fornitoriEsteriUppercaseValidator
      
			    _onsubmit=false;
			    _onchange=CHECK_ON_CHANGE;		  
 
 
       // field name: anagrafica.coordinateBanca.codDivisaConto 
	  function validate_anagrafica_coordinateBanca_codDivisaConto_fornitoriEsteriUppercaseValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
       	     	if (value != "")
       	     	{     
            	      field.value = value.toUpperCase();
            	      return true;
       	   		}
       	   		

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.coordinateBanca.codDivisaConto'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_coordinateBanca_codDivisaConto','label.anagrafica.coordinateBanca.codDivisaConto',"I caratteri devono essere almeno -1.  ","validate_anagrafica_coordinateBanca_codDivisaConto_fornitoriEsteriUppercaseValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.coordinateBanca.codDivisaConto  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.coordinateBanca.codDivisaConto 
	  function validate_anagrafica_coordinateBanca_codDivisaConto_stringlengthCbiValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            if (value != null && value != "") {
                
                    //trim field value
                    while (value.substring(0,1) == ' ')
                        value = value.substring(1, value.length);
                    while (value.substring(value.length-1, value.length) == ' ')
                        value = value.substring(0, value.length-1);
                if ((3 > -1 && value.length < 3) ||
                    (-1 > -1 && value.length > -1)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.coordinateBanca.codDivisaConto'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_coordinateBanca_codDivisaConto','label.anagrafica.coordinateBanca.codDivisaConto',"I caratteri devono essere almeno 3.  ","validate_anagrafica_coordinateBanca_codDivisaConto_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        	_onsubmit=true;
        	_onchange=CHECK_ON_NONE;
        	function validate_anagrafica_email_genericMailValidator(obj)
        	{     // var message= obj.message; var label=obj.label; 
        		    var form = obj.form; field = obj.field;
        			var value=null;
        			if ((field.type=="hidden")||(field.type=="text") || (field.type=="textarea"))  value=field.value;
        			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
        				
        		 		
        		
        	   
        			if (value!=null && value.length > 0){
        				if (value.length < 257){
        					return (emailCheck(value));
        				}else {
        					return false;
        				}
        			}
        			return true;
        		    }
        	     
        	if (document.getElementById("salvaForEsteri").elements['anagrafica.email'])  addValidation(showAlert,'salvaForEsteri','salvaForEsteri_anagrafica_email','label.anagrafica.email',"Formato dell\'indirizzo e-mail non valido","validate_anagrafica_email_genericMailValidator", _onsubmit, _onchange);
        	     
              
              
              
              
              



	    function validateForm_salvaForEsteri() {
				if (submitCount >= 1) { alert("Richiesta gia' inoltrata."); return false; } 
		        var form = document.getElementById("salvaForEsteri");
		        var o=new validationResult();
		        
		        var noerror= validateOnSubmitAll(o);
	            if (o.messageList.length>0) { 
		            var message="";
		            for (i=0;i<o.messageList.length;i++) message+=o.messageList[i].label+':' +o.messageList[i].actualMessage+'\n';
		            alert(message);
	            }
		        return noerror;

			//else if (annullaOperazione==true) return false;
			
			  
			
		}
		
		
		validateOnFieldAll();	
