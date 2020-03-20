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
           
        	if (document.getElementById("salvaCreEsteri").elements['anagrafica.intestatario'])  addValidation(showAlert,'salvaCreEsteri','salvaCreEsteri_anagrafica_intestatario','label.anagrafica.intestatario',"il campo \u00E8 obbligatorio","validate_anagrafica_intestatario_requiredCbiValidator", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaCreEsteri").elements['anagrafica.codEsterna'])  addValidation(showAlert,'salvaCreEsteri','salvaCreEsteri_anagrafica_codEsterna','label.anagrafica.codEsterna',"il campo \u00E8 obbligatorio","validate_anagrafica_codEsterna_requiredCbiValidator", _onsubmit, _onchange);
        	
        
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
           
        	if (document.getElementById("salvaCreEsteri").elements['anagrafica.codEsterna'])  addValidation(showAlert,'salvaCreEsteri','salvaCreEsteri_anagrafica_codEsterna','label.anagrafica.codEsterna',"I caratteri immessi sono superiori ai 16 consentiti","validate_anagrafica_codEsterna_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.SIA  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.SIA 
	  function validate_anagrafica_SIA_stringlengthCbiValidator(obj)
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
           
        	if (document.getElementById("salvaCreEsteri").elements['anagrafica.SIA'])  addValidation(showAlert,'salvaCreEsteri','salvaCreEsteri_anagrafica_SIA','label.anagrafica.SIA',"I caratteri devono essere almeno 5.  ","validate_anagrafica_SIA_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.codEstero  requiredCbiValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: anagrafica.codEstero 
	  function validate_anagrafica_codEstero_requiredCbiValidator(obj)
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
           
        	if (document.getElementById("salvaCreEsteri").elements['anagrafica.codEstero'])  addValidation(showAlert,'salvaCreEsteri','salvaCreEsteri_anagrafica_codEstero','label.anagrafica.codEstero',"il campo \u00E8 obbligatorio","validate_anagrafica_codEstero_requiredCbiValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.codEstero  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.codEstero 
	  function validate_anagrafica_codEstero_stringlengthCbiValidator(obj)
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
                    (9 > -1 && value.length > 9)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaCreEsteri").elements['anagrafica.codEstero'])  addValidation(showAlert,'salvaCreEsteri','salvaCreEsteri_anagrafica_codEstero','label.anagrafica.codEstero',"I caratteri immessi sono superiori ai 9 consentiti","validate_anagrafica_codEstero_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaCreEsteri").elements['anagrafica.cognome'])  addValidation(showAlert,'salvaCreEsteri','salvaCreEsteri_anagrafica_cognome','label.anagrafica.cognome',"il campo \u00E8 obbligatorio","validate_anagrafica_cognome_requiredCbiValidator", _onsubmit, _onchange);
        	
        
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
           
        	if (document.getElementById("salvaCreEsteri").elements['anagrafica.cognome'])  addValidation(showAlert,'salvaCreEsteri','salvaCreEsteri_anagrafica_cognome','label.anagrafica.cognome',"I caratteri immessi sono superiori ai 60 consentiti","validate_anagrafica_cognome_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
              
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
           
        	if (document.getElementById("salvaCreEsteri").elements['anagrafica.indirizzoResidenza.indirizzo'])  addValidation(showAlert,'salvaCreEsteri','salvaCreEsteri_anagrafica_indirizzoResidenza_indirizzo','label.anagrafica.indirizzoResidenza.indirizzo',"il campo \u00E8 obbligatorio","validate_anagrafica_indirizzoResidenza_indirizzo_requiredCbiValidator", _onsubmit, _onchange);
        	
        
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
           
        	if (document.getElementById("salvaCreEsteri").elements['anagrafica.indirizzoResidenza.indirizzo'])  addValidation(showAlert,'salvaCreEsteri','salvaCreEsteri_anagrafica_indirizzoResidenza_indirizzo','label.anagrafica.indirizzoResidenza.indirizzo',"I caratteri immessi sono superiori ai 30 consentiti","validate_anagrafica_indirizzoResidenza_indirizzo_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaCreEsteri").elements['anagrafica.indirizzoResidenza.CAP'])  addValidation(showAlert,'salvaCreEsteri','salvaCreEsteri_anagrafica_indirizzoResidenza_CAP','label.anagrafica.indirizzoResidenza.CAP',"I caratteri immessi sono superiori ai 5 consentiti","validate_anagrafica_indirizzoResidenza_CAP_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaCreEsteri").elements['anagrafica.indirizzoResidenza.comune'])  addValidation(showAlert,'salvaCreEsteri','salvaCreEsteri_anagrafica_indirizzoResidenza_comune','label.anagrafica.indirizzoResidenza.comune',"il campo \u00E8 obbligatorio","validate_anagrafica_indirizzoResidenza_comune_requiredCbiValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.indirizzoResidenza.comune  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.indirizzoResidenza.comune 
	  function validate_anagrafica_indirizzoResidenza_comune_stringlengthCbiValidator(obj)
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
                    (12 > -1 && value.length > 12)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaCreEsteri").elements['anagrafica.indirizzoResidenza.comune'])  addValidation(showAlert,'salvaCreEsteri','salvaCreEsteri_anagrafica_indirizzoResidenza_comune','label.anagrafica.indirizzoResidenza.comune',"I caratteri immessi sono superiori ai 12 consentiti","validate_anagrafica_indirizzoResidenza_comune_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaCreEsteri").elements['anagrafica.indirizzoResidenza.provincia'])  addValidation(showAlert,'salvaCreEsteri','salvaCreEsteri_anagrafica_indirizzoResidenza_provincia','label.anagrafica.indirizzoResidenza.provincia',"I caratteri devono essere almeno 2.  ","validate_anagrafica_indirizzoResidenza_provincia_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaCreEsteri").elements['anagrafica.coordinateBanca.codPaese'])  addValidation(showAlert,'salvaCreEsteri','salvaCreEsteri_anagrafica_coordinateBanca_codPaese','label.anagrafica.coordinateBanca.codPaese',"il campo \u00E8 obbligatorio","validate_anagrafica_coordinateBanca_codPaese_esteroPaeseValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.firma  stringlengthCbiValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.firma 
	  function validate_anagrafica_firma_stringlengthCbiValidator(obj)
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
                    (20 > -1 && value.length > 20)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaCreEsteri").elements['anagrafica.firma'])  addValidation(showAlert,'salvaCreEsteri','salvaCreEsteri_anagrafica_firma','label.anagrafica.firma',"I caratteri immessi sono superiori ai 20 consentiti","validate_anagrafica_firma_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
              



	    function validateForm_salvaCreEsteri() {
				if (submitCount >= 1) { alert("Richiesta gia' inoltrata."); return false; } 
		        var form = document.getElementById("salvaCreEsteri");
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
