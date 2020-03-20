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
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.intestatario'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_intestatario','label.anagrafica.intestatario',"il campo \u00E8 obbligatorio","validate_anagrafica_intestatario_requiredCbiValidator", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.codEsterna'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_codEsterna','label.anagrafica.codEsterna',"il campo \u00E8 obbligatorio","validate_anagrafica_codEsterna_requiredCbiValidator", _onsubmit, _onchange);
        	
        
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
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.codEsterna'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_codEsterna','label.anagrafica.codEsterna',"I caratteri immessi sono superiori ai 16 consentiti","validate_anagrafica_codEsterna_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.cognome'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_cognome','label.anagrafica.cognome',"il campo \u00E8 obbligatorio","validate_anagrafica_cognome_requiredCbiValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.cognome  esteroRagioneSocialeValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.cognome 
	  function validate_anagrafica_cognome_esteroRagioneSocialeValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
       	   	 	if (value != "")
       	     	{        	     		
       	     		var objNazione = form.elements['anagrafica.coordinateBanca.codPaese'];
					var valNazione = objNazione.options[objNazione.selectedIndex].value;
					 
					 //francia = max 24 caratteri di ragione sociale
       	     		if (valNazione == '029')
       	     		{
       	     			if (value.length > 24)
       	     				return false;
       	     		}
       	     		else 
       	     		{
       	     			if (value.length > 30)
       	     				return false;
       	     		}
       	   		}
       	   	

   			return true;
		    }
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.cognome'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_cognome','label.anagrafica.cognome',"Il valore da inserire non puo avere piu di 24 caratteri","validate_anagrafica_cognome_esteroRagioneSocialeValidator", _onsubmit, _onchange);
        	
        
              
              
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
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.indirizzoResidenza.indirizzo'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_indirizzoResidenza_indirizzo','label.anagrafica.indirizzoResidenza.indirizzo',"I caratteri immessi sono superiori ai 30 consentiti","validate_anagrafica_indirizzoResidenza_indirizzo_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
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
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.indirizzoResidenza.indirizzo'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_indirizzoResidenza_indirizzo','label.anagrafica.indirizzoResidenza.indirizzo',"il campo \u00E8 obbligatorio","validate_anagrafica_indirizzoResidenza_indirizzo_requiredCbiValidator", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.indirizzoResidenza.CAP'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_indirizzoResidenza_CAP','label.anagrafica.indirizzoResidenza.CAP',"I caratteri immessi sono superiori ai 5 consentiti","validate_anagrafica_indirizzoResidenza_CAP_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.indirizzoResidenza.comune'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_indirizzoResidenza_comune','label.anagrafica.indirizzoResidenza.comune',"il campo \u00E8 obbligatorio","validate_anagrafica_indirizzoResidenza_comune_requiredCbiValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.indirizzoResidenza.comune  esteroLocalitaValidator
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.indirizzoResidenza.comune 
	  function validate_anagrafica_indirizzoResidenza_comune_esteroLocalitaValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
       	   		//la localit? varia secondo paese 
       	   	 	if (value != "")
       	     	{        	     		
       	     		var objNazione = form.elements['anagrafica.coordinateBanca.codPaese'];
					var valNazione = objNazione.options[objNazione.selectedIndex].value;
					 
					//spagna = max 20 caratteri di localita
       	     		if (valNazione == '067')
       	     		{
       	     			if (value.length > 20)
       	     				return false;
       	     		}
       	     		else 
       	     		{
       	     			if (value.length > 22)
       	     				return false;
       	     		}
       	   		}
       	   		

   			return true;
		    }
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.indirizzoResidenza.comune'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_indirizzoResidenza_comune','label.anagrafica.indirizzoResidenza.comune',"Il valore da inserire non puo avere piu di 20 caratteri","validate_anagrafica_indirizzoResidenza_comune_esteroLocalitaValidator", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.indirizzoResidenza.provincia'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_indirizzoResidenza_provincia','label.anagrafica.indirizzoResidenza.provincia',"I caratteri devono essere almeno 2.  ","validate_anagrafica_indirizzoResidenza_provincia_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.coordinateBanca.codPaese'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_coordinateBanca_codPaese','label.anagrafica.coordinateBanca.codPaese',"il campo \u00E8 obbligatorio","validate_anagrafica_coordinateBanca_codPaese_esteroPaeseValidator", _onsubmit, _onchange);
        	
        
              
              
      	// validator name: anagrafica.coordinateBanca.abiCab  esteroCoordinateBancarieRequired
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.coordinateBanca.abiCab 
	  function validate_anagrafica_coordinateBanca_abiCab_esteroCoordinateBancarieRequired(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            	//le coordinate bancarie nazionali sono obbligatorie
            	//se selezionato il primo radio 
       	   		if (form.elements['abiIban'][0].checked && value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
		                return false;
            	}
            	
            	
            

   			return true;
		    }
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.coordinateBanca.abiCab'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_coordinateBanca_abiCab','label.anagrafica.coordinateBanca.abiCab',"il campo \u00E8 obbligatorio","validate_anagrafica_coordinateBanca_abiCab_esteroCoordinateBancarieRequired", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.coordinateBanca.abiCab  esteroCoordinateBancarieMin
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.coordinateBanca.abiCab 
	  function validate_anagrafica_coordinateBanca_abiCab_esteroCoordinateBancarieMin(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
       	   		//le coordinate bancarie variano da paese 
       	   		//solo se il primo radio e' selezionato
       	   	 	if (value != "" && form.elements['abiIban'][0].checked)
       	     	{        	     		
       	     		var objNazione = form.elements['anagrafica.coordinateBanca.codPaese'];
					var valNazione = objNazione.options[objNazione.selectedIndex].value;
					 
					//spa = min 8 caratteri di coordinate bancarie
       	     		if (valNazione == '067')
       	     		{
       	     			if (value.length < 8)
       	     			{
       	     				setVariableIntoMessage(obj, 'MIN', '8');
       	     				return false;
       	     			}	
       	     		}
       	     		else 
       	     		{
       	     			if (value.length < 10)
       	     			{
       	     				setVariableIntoMessage(obj, 'MIN', '10');
       	     				return false;
       	     			}
       	     				
       	     		}
       	   		}
       	   		

   			return true;
		    }
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.coordinateBanca.abiCab'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_coordinateBanca_abiCab','label.anagrafica.coordinateBanca.abiCab',"Il valore da inserire deve avere almeno @MIN caratteri","validate_anagrafica_coordinateBanca_abiCab_esteroCoordinateBancarieMin", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.coordinateBanca.abiCab  esteroCoordinateBancarieMax
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.coordinateBanca.abiCab 
	  function validate_anagrafica_coordinateBanca_abiCab_esteroCoordinateBancarieMax(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
       	   		//le coordinate bancarie variano da paese 
       	   		//solo se il primo radio e' selezionato
       	   	 	if (value != "" && form.elements['abiIban'][0].checked)
       	     	{        	     		
       	     		var objNazione = form.elements['anagrafica.coordinateBanca.codPaese'];
					var valNazione = objNazione.options[objNazione.selectedIndex].value;
					 
					//spagna = min 8 caratteri di coordinate bancarie
       	     		if (valNazione == '067')
       	     		{
       	     			if (value.length > 8)
       	     			{
       	     				setVariableIntoMessage(obj, 'MAX', '8');
       	     				return false;
       	     			}
       	     				
       	     		}
       	     		else 
       	     		{
       	     			if (value.length > 10)
       	     			{
       	     				setVariableIntoMessage(obj, 'MAX', '10');
       	     				return false;
       	     			}
       	     				
       	     		}
       	   		}
       	   	

   			return true;
		    }
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.coordinateBanca.abiCab'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_coordinateBanca_abiCab','label.anagrafica.coordinateBanca.abiCab',"Il valore da inserire non puo avere piu di @MAX caratteri","validate_anagrafica_coordinateBanca_abiCab_esteroCoordinateBancarieMax", _onsubmit, _onchange);
        	
        
              
              
              
      	// validator name: anagrafica.coordinateBanca.numConto  esteroContoCorrente
      
			    _onsubmit=false;
			    _onchange=CHECK_ON_CHANGE;		 
 
 
       // field name: anagrafica.coordinateBanca.numConto 
	  function validate_anagrafica_coordinateBanca_numConto_esteroContoCorrente(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
       	   		//il conto corrente varia secondo paese ed e' obbligatorio
       	   		//solo se il primo radio e' selezionato
       	   	 	if (value != "" && form.elements['abiIban'][0].checked)
       	     	{        	     		
       	     		var objNazione = form.elements['anagrafica.coordinateBanca.codPaese'];
					var valNazione = objNazione.options[objNazione.selectedIndex].value;
					var maxLenConto = 0;
					var minLenConto = 0;
					 
					//spagna = max 10 caratteri di conto corrente
       	     		if (valNazione == '067')
       	     		{
       	     			maxLenConto = 10;
       	     			minLenConto = 10;
       	     		}
       	     		else
       	     		{
       	     			maxLenConto = 11;
       	     			minLenConto = 11;
       	     		}
       	     		
       	     		//prima di procedere con la verifica
       	     		//se sto usando come paese spagna
       	     		//e il conto e' valorizzato mostro l'asterisco
       	     		if (valNazione == '067')
       	     			document.getElementById('asterisco4').style.visibility = 'visible';
       	     		
       	     		var noSpecialChar = checkNoSpecialChar(value);
   					var tmp=checkAccountFormat(value,minLenConto,maxLenConto);
   					var localeUtente = form.elements['debitoriesteri.locale'].value;
   					   					   					
   					if ((value != "") && (tmp.indexOf('false')==0))
        	 	  	{
            	      setVariableIntoMessage(obj, 'MIN', minLenConto + '');
            	      
            	      if (noSpecialChar) 
            	      	setVariableIntoMessage(obj, 'AGGIUNTAMESS', '');
            	      else
            	      {
            	      	if (localeUtente=='it')
            	      		setVariableIntoMessage(obj, 'AGGIUNTAMESS', 'Sono presenti dei caratteri non validi');
            	      	else if (localeUtente=='en')
            	      		setVariableIntoMessage(obj, 'AGGIUNTAMESS', 'Invalid characters are present');
            	      	else
            	      		setVariableIntoMessage(obj, 'AGGIUNTAMESS', '');
            	      }
            	      
            	      field.value = tmp.substring(5,tmp.length);
            	      return false;
        	   		
        	   		} else 	{
            	      //aggiunta di zeri
            	      field.value = tmp;
            	      return true;
        
        	   		} 
       	   		}
       	   	

   			return true;
		    }
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.coordinateBanca.numConto'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_coordinateBanca_numConto','label.anagrafica.coordinateBanca.numConto',"Il valore da inserire deve avere almeno @MIN caratteri alfanumerici. @AGGIUNTAMESS \n\nControllare la soluzione proposta.","validate_anagrafica_coordinateBanca_numConto_esteroContoCorrente", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.coordinateBanca.numConto  esteroContoCorrenteMax
      
 				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: anagrafica.coordinateBanca.numConto 
	  function validate_anagrafica_coordinateBanca_numConto_esteroContoCorrenteMax(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
            	            	
       	   		if (form.elements['abiIban'][0].checked && value != null ) {
       	   		
       	   		var objNazione = form.elements['anagrafica.coordinateBanca.codPaese'];
				var valNazione = objNazione.options[objNazione.selectedIndex].value;
					
					//francia			 			
       	     		if (valNazione == '029')
       	     		{
       	     			if (value.length > 11)
       	     			{
       	     				setVariableIntoMessage(obj, 'MAXCHAR', '11');
       	     				return false;
       	     			}
       	     			
       	     				
       	     		}
       	     		else if (valNazione == '067')
       	     		{	
       	     			if (value.length > 10)
       	     			{
       	     				setVariableIntoMessage(obj, 'MAXCHAR', '10');
       	     				return false;
       	     			}
       	     		}
       	     		else
       	     		{
       	     			if (value.length > 11)
       	     			{
       	     				return false;
       	     				setVariableIntoMessage(obj, 'MAXCHAR', '11');
       	     			}
       	     			else
       	     				return true;
       	     		}   
            	}

   			return true;
		    }
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.coordinateBanca.numConto'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_coordinateBanca_numConto','label.anagrafica.coordinateBanca.numConto',"Il valore da inserire non puo avere piu di @MAXCHAR caratteri numerici.\nControllare la soluzione proposta. ","validate_anagrafica_coordinateBanca_numConto_esteroContoCorrenteMax", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.coordinateBanca.CIN  esteroCINRequiredValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;			    
 
 
       // field name: anagrafica.coordinateBanca.CIN 
	  function validate_anagrafica_coordinateBanca_CIN_esteroCINRequiredValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
  				
  				//per la francia il cin e' obbligatorio
  				//per la spagna solo se il conto e' valorizzato          	
       	   		if (form.elements['abiIban'][0].checked &&  (value == null || value == "")) {
       	   		
       	   		var objNazione = form.elements['anagrafica.coordinateBanca.codPaese'];
				var valNazione = objNazione.options[objNazione.selectedIndex].value;
										 			
       	     		if (valNazione == '029')
       	     		{
       	     			return false;
       	     		}
       	     		else if (valNazione == '067')
       	     		{	
       	     			var valConto = form.elements['anagrafica.coordinateBanca.numConto'].value;
       	     			if (valConto == null || valConto == "")
       	     				return true;
       	     			else
       	     				return false;
       	     				
       	     		}
       	     		else
       	     		{
       	     			return true;
       	     		}   
            	}
     	
  

   			return true;
		    }
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.coordinateBanca.CIN'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_coordinateBanca_CIN','label.anagrafica.coordinateBanca.CIN',"il campo \u00E8 obbligatorio","validate_anagrafica_coordinateBanca_CIN_esteroCINRequiredValidator", _onsubmit, _onchange);
        	
        
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
                if ((2 > -1 && value.length < 2) ||
                    (-1 > -1 && value.length > -1)) {
 
		                return false;
	            }
            } 

   			return true;
		    }
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.coordinateBanca.CIN'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_coordinateBanca_CIN','label.anagrafica.coordinateBanca.CIN',"I caratteri devono essere almeno 2.  ","validate_anagrafica_coordinateBanca_CIN_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
              
      	// validator name: anagrafica.coordinateBanca.IBAN  esteroIbanRequiredValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: anagrafica.coordinateBanca.IBAN 
	  function validate_anagrafica_coordinateBanca_IBAN_esteroIbanRequiredValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
       	   		//l'iban e' obbligatorio se selezionato il secondo radio
       	   		// utilizzo un validator apposito perche' venga scatenato all'evento submit 
       	   		// e non interferisca con il toUppercase che avviene ad onchange()	   
       	   		if (form.elements['abiIban'][1].checked && value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
		                return false;
            	}
            

   			return true;
		    }
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.coordinateBanca.IBAN'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_coordinateBanca_IBAN','label.anagrafica.coordinateBanca.IBAN',"il campo \u00E8 obbligatorio","validate_anagrafica_coordinateBanca_IBAN_esteroIbanRequiredValidator", _onsubmit, _onchange);
        	
        
      	// validator name: anagrafica.coordinateBanca.IBAN  esteroIbanValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: anagrafica.coordinateBanca.IBAN 
	  function validate_anagrafica_coordinateBanca_IBAN_esteroIbanValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
       	   		//il validatore avviene on submit e deve verificare
       	   		//se e' corretto per il paese selezionato
       	     	if (value != "" && form.elements['abiIban'][1].checked)
       	     	{        	     		
       	     		var valIban = form.elements['anagrafica.coordinateBanca.IBAN'].value;
					var objNazione = form.elements['anagrafica.coordinateBanca.codPaese'];
					var valNazione = objNazione.options[objNazione.selectedIndex].value;
										 
       	     		if (valNazione == '029')
       	     		{
       	     			if(controllaIBANFrancia(valIban)==false)
	       	     			return false;

       	     				
       	     		}
       	     		else
       	     		{
       	     			if(controllaIBANSpagna(valIban)==false)
       	     				return false;
       	     		}
       	   		}
       	   	

   			return true;
		    }
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.coordinateBanca.IBAN'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_coordinateBanca_IBAN','label.anagrafica.coordinateBanca.IBAN',"formato del codice non corretto","validate_anagrafica_coordinateBanca_IBAN_esteroIbanValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: anagrafica.coordinateBanca.locSportello  requiredCbiValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: anagrafica.coordinateBanca.locSportello 
	  function validate_anagrafica_coordinateBanca_locSportello_requiredCbiValidator(obj)
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
           
        	if (document.getElementById("salvaDebEsteri").elements['anagrafica.coordinateBanca.locSportello'])  addValidation(showAlert,'salvaDebEsteri','salvaDebEsteri_anagrafica_coordinateBanca_locSportello','label.anagrafica.coordinateBanca.locSportello',"il campo \u00E8 obbligatorio","validate_anagrafica_coordinateBanca_locSportello_requiredCbiValidator", _onsubmit, _onchange);
        	
        
              
              



	    function validateForm_salvaDebEsteri() {
				if (submitCount >= 1) { alert("Richiesta gia' inoltrata."); return false; } 
		        var form = document.getElementById("salvaDebEsteri");
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
