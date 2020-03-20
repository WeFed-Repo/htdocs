    var _onsubmit=true;
    var _onchange=CHECK_ON_CHANGE;
    var _show =true;
	CHECK_REPEATED_SUBMIT=true;
	// manca il messaggio internazionale 
	

              
              
              
      	// validator name: anagrafica.intestatario  requiredIntestatario
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: anagrafica.intestatario 
	  function validate_anagrafica_intestatario_requiredIntestatario(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
                
	            if (value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
 						var tmp= new IteratorMessage();
	            		
	            		while (tmp.next())  { 
	            		   var msg=tmp.getMessage(); 
	            		   if (msg==undefined) continue;
	            		   if (msg.index!=obj.index) msg.disableValidationOnSubmit=true; 
	            		   }
	                    var tmp= new IteratorMessage();
		                return false;
	            } else  
	            {
	            		var tmp= new IteratorMessage();
	            		
	            		while (tmp.next())  { 
	            		   var msg=tmp.getMessage(); 
	            		   if (msg==undefined) continue;
	            		   msg.disableValidationOnSubmit=false; 
	            		   }
	            	
		                return true;
	            }   
	            

   			return true;
		    }
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.intestatario'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_intestatario','label.anagrafica.intestatario',"il campo \u00E8 obbligatorio","validate_anagrafica_intestatario_requiredIntestatario", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.codEsterna'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_codEsterna','label.anagrafica.codEsterna',"il campo \u00E8 obbligatorio","validate_anagrafica_codEsterna_requiredCbiValidator", _onsubmit, _onchange);
        	
        
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
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.codEsterna'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_codEsterna','label.anagrafica.codEsterna',"I caratteri immessi sono superiori ai 16 consentiti","validate_anagrafica_codEsterna_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
              
      	// validator name: anagrafica.cognome  requiredCbiValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
       // field name: anagrafica.codCUCIdentAnagGen 
	  function validate_anagrafica_codCUCIdentAnagGen_stringlengthCbiValidator(obj)
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
                    (16 > -1 && value.length > 10)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.codCUCIdentAnagGen'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_codCUCIdentAnagGen','label.anagrafica.codCUCIdentAnagGen',"I caratteri immessi sono superiori ai 10 consentiti","validate_anagrafica_codCUCIdentAnagGen_stringlengthCbiValidator", _onsubmit, _onchange);





            
              
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
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.cognome'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_cognome','label.anagrafica.cognome',"il campo \u00E8 obbligatorio","validate_anagrafica_cognome_requiredCbiValidator", _onsubmit, _onchange);
        	
        
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
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.cognome'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_cognome','label.anagrafica.cognome',"I caratteri immessi sono superiori ai 60 consentiti","validate_anagrafica_cognome_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.nome  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.nome 
	  function validate_anagrafica_nome_stringlengthCbiValidator(obj)
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
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.nome'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_nome','label.anagrafica.nome',"I caratteri immessi sono superiori ai 30 consentiti","validate_anagrafica_nome_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.strDataNascita  sintaxDateValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.strDataNascita 
	  function validate_anagrafica_strDataNascita_sintaxDateValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            	if ((value != null)  && value != "" && (checkSyntaxDate(field.value) == false))
            	{
            		return false;
	            }

   			return true;
		    }
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.strDataNascita'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_strDataNascita','label.anagrafica.strDataNascita',"La sintassi non \u00E8 corretta","validate_anagrafica_strDataNascita_sintaxDateValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.strDataNascita  validDateValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.strDataNascita 
	  function validate_anagrafica_strDataNascita_validDateValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
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
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.strDataNascita'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_strDataNascita','label.anagrafica.strDataNascita',"La data inserita non \u00E8 valida","validate_anagrafica_strDataNascita_validDateValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.strDataNascita  checkInRangeValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.strDataNascita 
	  function validate_anagrafica_strDataNascita_checkInRangeValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
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
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.strDataNascita'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_strDataNascita','label.anagrafica.strDataNascita',"L\'anno deve essere compreso tra il 1900 e il 2050","validate_anagrafica_strDataNascita_checkInRangeValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.indirizzoNascita.comune  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.indirizzoNascita.comune 
	  function validate_anagrafica_indirizzoNascita_comune_stringlengthCbiValidator(obj)
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
                    (25 > -1 && value.length > 25)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.indirizzoNascita.comune'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_indirizzoNascita_comune','label.anagrafica.indirizzoNascita.comune',"I caratteri immessi sono superiori ai 25 consentiti","validate_anagrafica_indirizzoNascita_comune_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
              
              
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
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.codFiscale'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_codFiscale','label.anagrafica.codFiscale',"@WARNING La lunghezza del codice fiscale non \u00E8\n corretta: il codice fiscale dovrebbe essere lungo\n esattamente 16 caratteri.","validate_anagrafica_codFiscale_minLengthNoSubmitValidator", _onsubmit, _onchange);
        	
        
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
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.codFiscale'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_codFiscale','label.anagrafica.codFiscale',"@WARNING Contiene un carattere non valido: @CHARNOTVALID.\nI caratteri validi sono le lettere e le cifre.","validate_anagrafica_codFiscale_noSpecialCharValidatorForCF", _onsubmit, _onchange);
        	
        
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
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.codFiscale'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_codFiscale','label.anagrafica.codFiscale',"@WARNING Il codice fiscale non \u00E8 corretto:\n il codice di controllo non corrisponde.","validate_anagrafica_codFiscale_codiceFiscale", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.partitaIVA'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_partitaIVA','label.anagrafica.partitaIVA',"@WARNING La lunghezza della partita IVA non \u00E8\n corretta: la partita IVA dovrebbe essere lunga\n esattamente 11 caratteri.","validate_anagrafica_partitaIVA_minLengthNoSubmitValidator", _onsubmit, _onchange);
        	
        
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
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.partitaIVA'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_partitaIVA','label.anagrafica.partitaIVA',"@WARNING Contiene un carattere non valido: @CHARNOTNUMBER.\nI caratteri validi sono le cifre.","validate_anagrafica_partitaIVA_onlyNumbersValidatorforPartIva", _onsubmit, _onchange);
        	
        
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
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.partitaIVA'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_partitaIVA','label.anagrafica.partitaIVA',"@WARNING La partita IVA non \u00E8 valida: il codice di controllo non corrisponde.","validate_anagrafica_partitaIVA_partitaIva", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.indirizzoResidenza.indirizzo'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_indirizzoResidenza_indirizzo','label.anagrafica.indirizzoResidenza.indirizzo',"I caratteri immessi sono superiori ai 30 consentiti","validate_anagrafica_indirizzoResidenza_indirizzo_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
              
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
                if ((2 > -1 && value.length < 2) ||
                    (-1 > -1 && value.length > -1)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.indirizzoResidenza.provincia'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_indirizzoResidenza_provincia','label.anagrafica.indirizzoResidenza.provincia',"I caratteri devono essere almeno 2.  ","validate_anagrafica_indirizzoResidenza_provincia_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.indirizzoResidenza.CAP'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_indirizzoResidenza_CAP','label.anagrafica.indirizzoResidenza.CAP',"I caratteri immessi sono superiori ai 5 consentiti","validate_anagrafica_indirizzoResidenza_CAP_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
              
      	// validator name: anagrafica.codClienteRid  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.codClienteRid 
	  function validate_anagrafica_codClienteRid_stringlengthCbiValidator(obj)
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
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.codClienteRid'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_codClienteRid','label.anagrafica.codClienteRid',"I caratteri immessi sono superiori ai 16 consentiti","validate_anagrafica_codClienteRid_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
              
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
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.coordinateBanca.desBanca'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_coordinateBanca_desBanca','label.anagrafica.coordinateBanca.desBanca',"I caratteri immessi sono superiori ai 60 consentiti","validate_anagrafica_coordinateBanca_desBanca_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.coordinateBanca.ABI  abiValidator
      
			    _onsubmit=false;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.coordinateBanca.ABI 
	  function validate_anagrafica_coordinateBanca_ABI_abiValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
         		var tmp =checkABICAB(value);
         		if ((value != "") && (tmp == null))
        	    {
		                return false;
	            } else 
           	    {		if (tmp!=null) field.value=tmp;
		                return true;
	            }  
 

   			return true;
		    }
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.coordinateBanca.ABI'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_coordinateBanca_ABI','label.anagrafica.coordinateBanca.ABI',"Codice ABI non corretto.","validate_anagrafica_coordinateBanca_ABI_abiValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.coordinateBanca.ABI  abiRangeValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: anagrafica.coordinateBanca.ABI 
	  function validate_anagrafica_coordinateBanca_ABI_abiRangeValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
				//setVariableIntoMessage(obj,'FIELD','ABI');
                setVariableIntoMessage(obj,'MIN','01000');
                setVariableIntoMessage(obj,'MAX','10999');
                
				var rxp = /^([0-9]{5,5}){0,1}$/i;
         		if (!value.match(rxp)) return false;
         		else  if ((value!='')&&((value < '01000')||(value >'10999'))) return false;


   			return true;
		    }
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.coordinateBanca.ABI'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_coordinateBanca_ABI','label.anagrafica.coordinateBanca.ABI',"deve essere compreso tra \" @MIN \" e \" @MAX \"","validate_anagrafica_coordinateBanca_ABI_abiRangeValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.coordinateBanca.CAB  abiValidator
      
			    _onsubmit=false;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.coordinateBanca.CAB 
	  function validate_anagrafica_coordinateBanca_CAB_abiValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
         		var tmp =checkABICAB(value);
         		if ((value != "") && (tmp == null))
        	    {
		                return false;
	            } else 
           	    {		if (tmp!=null) field.value=tmp;
		                return true;
	            }  
 

   			return true;
		    }
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.coordinateBanca.CAB'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_coordinateBanca_CAB','label.anagrafica.coordinateBanca.CAB',"Codice ABI non corretto.","validate_anagrafica_coordinateBanca_CAB_abiValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.coordinateBanca.CAB  cabRangeValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: anagrafica.coordinateBanca.CAB 
	  function validate_anagrafica_coordinateBanca_CAB_cabRangeValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
                //setVariableIntoMessage(obj,'FIELD','CAB');
                setVariableIntoMessage(obj,'MIN','00001');
                setVariableIntoMessage(obj,'MAX','99999');
                
				var rxp = /^([0-9]{5,5}){0,1}$/i;
         		if (!value.match(rxp)) return false;
        		else  if ((value!='')&&((value < '00001')||(value >'99999'))) return false;
       

   			return true;
		    }
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.coordinateBanca.CAB'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_coordinateBanca_CAB','label.anagrafica.coordinateBanca.CAB',"deve essere compreso tra \" @MIN \" e \" @MAX \"","validate_anagrafica_coordinateBanca_CAB_cabRangeValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.coordinateBanca.numConto  accountValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.coordinateBanca.numConto 
	  function validate_anagrafica_coordinateBanca_numConto_accountValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
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
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.coordinateBanca.numConto'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_coordinateBanca_numConto','label.anagrafica.coordinateBanca.numConto',"Numero di conto errato.\nI valori permessi sono 12.\nControllare il numero di conto proposto! ","validate_anagrafica_coordinateBanca_numConto_accountValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.coordinateBanca.CIN  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.coordinateBanca.CIN 
	  function validate_anagrafica_coordinateBanca_CIN_stringlengthCbiValidator(obj)
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
                    (1 > -1 && value.length > 1)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.coordinateBanca.CIN'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_coordinateBanca_CIN','label.anagrafica.coordinateBanca.CIN',"I caratteri immessi sono superiori ai 1 consentiti","validate_anagrafica_coordinateBanca_CIN_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.coordinateBanca.IBAN  ibanFieldLengthValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: anagrafica.coordinateBanca.IBAN 
	  function validate_anagrafica_coordinateBanca_IBAN_ibanFieldLengthValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
       	     	if ((form.elements['anagrafica.coordinateBanca.CAB'].value=='')&&(form.elements['anagrafica.coordinateBanca.ABI'].value=='')) return true;
       	     	if ((value != "") && (value.length!=27))
       	     	{     var obj1=getValidation(field,ERROR,15);
       	     		  obj1.disableValidationOnSubmit=true; 
            	      return false;
       	   		} else {     
            	      var obj1=getValidation(field,ERROR,15);
       	     		  obj1.disableValidationOnSubmit=false;     
       	   		}

   			return true;
		    }
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.coordinateBanca.IBAN'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_coordinateBanca_IBAN','label.anagrafica.coordinateBanca.IBAN',"@ERROR(14) Il codice IBAN deve essere lungo 27 caratteri alfanumerici.","validate_anagrafica_coordinateBanca_IBAN_ibanFieldLengthValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.coordinateBanca.IBAN  ibanFieldValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: anagrafica.coordinateBanca.IBAN 
	  function validate_anagrafica_coordinateBanca_IBAN_ibanFieldValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
       	   	 	if ((form.elements['anagrafica.coordinateBanca.CAB'].value=='')&&(form.elements['anagrafica.coordinateBanca.ABI'].value=='')) return true;
       	   
       	     	if (value != "" && (!checkIBAN(value, form.elements['anagrafica.coordinateBanca.ABI'].value, form.elements['anagrafica.coordinateBanca.CAB'].value, form.elements['anagrafica.coordinateBanca.numConto'].value)))
       	     	{     
            	      return false;
       	   		}

			

   			return true;
		    }
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.coordinateBanca.IBAN'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_coordinateBanca_IBAN','label.anagrafica.coordinateBanca.IBAN',"@ERROR(15) Il codice IBAN deve corrispondere con i codici ABI, CAB e N. Conto.","validate_anagrafica_coordinateBanca_IBAN_ibanFieldValidator", _onsubmit, _onchange);
        	
        
              
              
              
              
              
              
              
      	// validator name: anagrafica.quietanzaF24ragioneSociale  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.quietanzaF24ragioneSociale 
	  function validate_anagrafica_quietanzaF24ragioneSociale_stringlengthCbiValidator(obj)
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
                    (45 > -1 && value.length > 45)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.quietanzaF24ragioneSociale'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_quietanzaF24ragioneSociale','label.anagrafica.quietanzaF24ragioneSociale',"I caratteri immessi sono superiori ai 45 consentiti","validate_anagrafica_quietanzaF24ragioneSociale_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
              
      	// validator name: anagrafica.indirizzoQuietanzaF24.comune  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.indirizzoQuietanzaF24.comune 
	  function validate_anagrafica_indirizzoQuietanzaF24_comune_stringlengthCbiValidator(obj)
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
                    (25 > -1 && value.length > 25)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.indirizzoQuietanzaF24.comune'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_indirizzoQuietanzaF24_comune','label.anagrafica.indirizzoQuietanzaF24.comune',"I caratteri immessi sono superiori ai 25 consentiti","validate_anagrafica_indirizzoQuietanzaF24_comune_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.indirizzoQuietanzaF24.CAP  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.indirizzoQuietanzaF24.CAP 
	  function validate_anagrafica_indirizzoQuietanzaF24_CAP_stringlengthCbiValidator(obj)
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
                if ((5 > -1 && value.length < 5) ||
                    (-1 > -1 && value.length > -1)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.indirizzoQuietanzaF24.CAP'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_indirizzoQuietanzaF24_CAP','label.anagrafica.indirizzoQuietanzaF24.CAP',"I caratteri devono essere almeno 5.  ","validate_anagrafica_indirizzoQuietanzaF24_CAP_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.indirizzoQuietanzaF24.provincia  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.indirizzoQuietanzaF24.provincia 
	  function validate_anagrafica_indirizzoQuietanzaF24_provincia_stringlengthCbiValidator(obj)
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
                if ((2 > -1 && value.length < 2) ||
                    (-1 > -1 && value.length > -1)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaClienti").elements['anagrafica.indirizzoQuietanzaF24.provincia'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_indirizzoQuietanzaF24_provincia','label.anagrafica.indirizzoQuietanzaF24.provincia',"I caratteri devono essere almeno 2.  ","validate_anagrafica_indirizzoQuietanzaF24_provincia_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
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
        	     
        	if (document.getElementById("salvaClienti").elements['anagrafica.email'])  addValidation(showAlert,'salvaClienti','salvaClienti_anagrafica_email','label.anagrafica.email',"Formato dell\'indirizzo e-mail non valido","validate_anagrafica_email_genericMailValidator", _onsubmit, _onchange);
        	        



	    function validateForm_salvaClienti() {
				if (submitCount >= 1) { alert("Richiesta gia' inoltrata."); return false; } 
		        var form = document.getElementById("salvaClienti");
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
		
		
