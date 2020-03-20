  var _onsubmit=true;
    var _onchange=CHECK_ON_CHANGE;
    var _show =true;
	CHECK_REPEATED_SUBMIT=true;
	// manca il messaggio internazionale 
	

              
              
              
              
      	// validator name: contextSelectorData.id  requiredSepaField

			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: contextSelectorData.id 
	  function validate_contextSelectorData_id_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['contextSelectorData.id'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_contextSelectorData_id','label.contextSelectorData.id',"il campo \u00E8 obbligatorio","validate_contextSelectorData_id_requiredSepaField", _onsubmit, _onchange);
        	
        
              
              
              
              
              
              
              
              
              
      	// validator name: contextSelectorData.descrizione  requiredSepaField

			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: contextSelectorData.descrizione 
	  function validate_contextSelectorData_descrizione_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['contextSelectorData.descrizione'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_contextSelectorData_descrizione','label.contextSelectorData.descrizione',"il campo \u00E8 obbligatorio","validate_contextSelectorData_descrizione_requiredSepaField", _onsubmit, _onchange);
        	
        
              
      	// validator name: contextSelectorData.cf  requiredSepaField

			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: contextSelectorData.cf 
	  function validate_contextSelectorData_cf_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['contextSelectorData.cf'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_contextSelectorData_cf','label.contextSelectorData.cf',"il campo \u00E8 obbligatorio","validate_contextSelectorData_cf_requiredSepaField", _onsubmit, _onchange);
        	
        
              
      	// validator name: contextSelectorData.banca  requiredSepaField

			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: contextSelectorData.banca 
	  function validate_contextSelectorData_banca_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['contextSelectorData.banca'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_contextSelectorData_banca','label.contextSelectorData.banca',"il campo \u00E8 obbligatorio","validate_contextSelectorData_banca_requiredSepaField", _onsubmit, _onchange);
        	
        
              
      	// validator name: contextSelectorData.conto  requiredSepaField

			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: contextSelectorData.conto 
	  function validate_contextSelectorData_conto_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['contextSelectorData.conto'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_contextSelectorData_conto','label.contextSelectorData.conto',"il campo \u00E8 obbligatorio","validate_contextSelectorData_conto_requiredSepaField", _onsubmit, _onchange);
        	
        
              
              
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.nm  requiredSepaField

			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.nm 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_nm_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.nm'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_nm','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.nm',"il campo \u00E8 obbligatorio","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_nm_requiredSepaField", _onsubmit, _onchange);
        	
        
              
              
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.strtNm  sepaStipFieldsRequired

			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;	
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.strtNm 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_strtNm_sepaStipFieldsRequired(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           if (form.elements['formaPagamento'].value == 'CHK' && value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.strtNm'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_strtNm','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.strtNm',"il campo \u00E8 obbligatorio","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_strtNm_sepaStipFieldsRequired", _onsubmit, _onchange);
        	
        
              
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id  sepaCucRequired

			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;   
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id_sepaCucRequired(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           if (form.elements['esitoBeneficiario'].checked == true && form.elements['monitoraggioFinanziario'].checked==false && value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }   
			
   			return true;
		    }
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id',"il campo \u00E8 obbligatorio","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id_sepaCucRequired", _onsubmit, _onchange);
        	
        
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id  minLengthNoSubmitValidator

			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id_minLengthNoSubmitValidator(obj)
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
                if ((8 > -1 && value.length < 8) ||
                    (-1 > -1 && value.length > -1)) {
 
		                return false;
	            }
            } 
            
            
			
   			return true;
		    }
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id',"Il valore da inserire deve avere 8 caratteri.","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id_minLengthNoSubmitValidator", _onsubmit, _onchange);
        	
        
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id  noSpecialCharValidatorForCUC

			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			    
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id_noSpecialCharValidatorForCUC(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
  				 if (value != null && value.length==8 && checkNoSpecialCharWithChar(value)!=null  ) {
   					
   					var notValidChar = checkNoSpecialCharWithChar(value);
   					setVariableIntoMessage(obj, 'CHARNOTVALID', notValidChar +'');
   					
   					return false;
				   }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id',"@ERROR Il cuc contiene un carattere non valido: @CHARNOTVALID.\nI caratteri validi sono le lettere e le cifre.","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id_noSpecialCharValidatorForCUC", _onsubmit, _onchange);
        	
        
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id  cucValidator

			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id_cucValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
				
					if(value.length==8) 
					{
						if(checkCinCharacter(value)){
							return true;
						}else{
							return false;
						}
					}
			
   			return true;
		    }
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id',"Carattere di controllo CIN errato.","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id_cucValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.twnNm  sepaStipFieldsRequired

			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;	
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.twnNm 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_twnNm_sepaStipFieldsRequired(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           if (form.elements['formaPagamento'].value == 'CHK' && value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.twnNm'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_twnNm','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.twnNm',"il campo \u00E8 obbligatorio","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_twnNm_sepaStipFieldsRequired", _onsubmit, _onchange);
        	
        
              
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.pstCd  sepaStipFieldsRequired

			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;	
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.pstCd 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_pstCd_sepaStipFieldsRequired(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           if (form.elements['formaPagamento'].value == 'CHK' && value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.pstCd'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_pstCd','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.pstCd',"il campo \u00E8 obbligatorio","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_pstCd_sepaStipFieldsRequired", _onsubmit, _onchange);
        	
        
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.pstCd  minLengthNoSubmitValidator

			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.pstCd 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_pstCd_minLengthNoSubmitValidator(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.pstCd'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_pstCd','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.pstCd',"@WARNING Il valore da inserire deve avere almeno 5 caratteri.","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_pstCd_minLengthNoSubmitValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN  requiredSepaField

			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAcct_id_IBAN_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAcct_id_IBAN','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN',"il campo \u00E8 obbligatorio","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAcct_id_IBAN_requiredSepaField", _onsubmit, _onchange);
        	
        
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN  ibanCodiceNazioneField

			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAcct_id_IBAN_ibanCodiceNazioneField(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           var codNazione=value.substring(0,2).toUpperCase();
	           if (value != null && value != "" && codNazione!='IT') {
	                return false;
	            }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAcct_id_IBAN','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN',"Codice nazione puo\' essere valorizzata esclusiovamente con IT o SM","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAcct_id_IBAN_ibanCodiceNazioneField", _onsubmit, _onchange);
        	
        
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN  checkIBAN

				_onsubmit=true;
			    _onchange=CHECK_ON_NONE;		
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAcct_id_IBAN_checkIBAN(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
			   var iban=value;
				var vIban = validateIBAN(iban);
					if(vIban == -2 || vIban == -1) 
					{
						return false;
						
					}
			
   			return true;
		    }
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAcct_id_IBAN','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN',"@CONFIRM Attenzione!! IBAN beneficiario errato o mancante.\nSi desidera comunque procedere?","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAcct_id_IBAN_checkIBAN", _onsubmit, _onchange);
        	
        
              
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.ctrySubDvsn  sepaStipFieldsRequired

			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;	
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.ctrySubDvsn 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_ctrySubDvsn_sepaStipFieldsRequired(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           if (form.elements['formaPagamento'].value == 'CHK' && value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.ctrySubDvsn'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_ctrySubDvsn','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.ctrySubDvsn',"il campo \u00E8 obbligatorio","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_ctrySubDvsn_sepaStipFieldsRequired", _onsubmit, _onchange);
        	
        
              
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb  requiredSepaField

			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb',"il campo \u00E8 obbligatorio","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_requiredSepaField", _onsubmit, _onchange);
        	
        
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb  noSpecialCharValidatorForCF

			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_noSpecialCharValidatorForCF(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb',"@ERROR Il codice fiscale contiene un carattere non valido: @CHARNOTVALID.\nI caratteri validi sono le lettere e le cifre.","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_noSpecialCharValidatorForCF", _onsubmit, _onchange);
        	
        
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb  onlyNumbersValidatorforPartIva

			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_onlyNumbersValidatorforPartIva(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb',"@ERROR La partita IVA contiene un carattere non valido: @CHARNOTNUMBER.\nI caratteri validi sono le cifre.","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_onlyNumbersValidatorforPartIva", _onsubmit, _onchange);
        	
        
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb  partitaIva

			    _onsubmit=false;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_partitaIva(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb',"La partita IVA non e valida:\n il codice di controllo non corrisponde.","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_partitaIva", _onsubmit, _onchange);
        	
        
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb  codiceFiscale

			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_codiceFiscale(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb',"Il codice fiscale non \u00E8 corretto:\n il codice di controllo non corrisponde.","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_codiceFiscale", _onsubmit, _onchange);
        	
        
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb  checkCFPIVA

			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_checkCFPIVA(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb',"La lunghezza del dato inserito non e corretta:\n la partita IVA dovrebbe essere lunga\n esattamente 11 caratteri, \n il codice fiscale dovrebbe essere lungo\n esattamente 16 caratteri.\n La partita IVA non e valida:\n il codice di controllo non corrisponde.\n","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_checkCFPIVA", _onsubmit, _onchange);
        	
        
              
              
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue  requiredSepaField

			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__amt_instdAmt_stringValue_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__amt_instdAmt_stringValue','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue',"il campo \u00E8 obbligatorio","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__amt_instdAmt_stringValue_requiredSepaField", _onsubmit, _onchange);
        	
        
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue  importiNumero

			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE; 
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__amt_instdAmt_stringValue_importiNumero(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__amt_instdAmt_stringValue','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue',"Inserire un valore reale","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__amt_instdAmt_stringValue_importiNumero", _onsubmit, _onchange);
        	
        
              
      	// validator name: stipendioSepa.pmtInf.reqdExctnDt  requiredSepaField

			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: stipendioSepa.pmtInf.reqdExctnDt 
	  function validate_stipendioSepa_pmtInf_reqdExctnDt_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.reqdExctnDt'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_reqdExctnDt','label.stipendioSepa.pmtInf.reqdExctnDt',"il campo \u00E8 obbligatorio","validate_stipendioSepa_pmtInf_reqdExctnDt_requiredSepaField", _onsubmit, _onchange);
        	
        
      	// validator name: stipendioSepa.pmtInf.reqdExctnDt  sintaxDateValidator

				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: stipendioSepa.pmtInf.reqdExctnDt 
	  function validate_stipendioSepa_pmtInf_reqdExctnDt_sintaxDateValidator(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.reqdExctnDt'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_reqdExctnDt','label.stipendioSepa.pmtInf.reqdExctnDt',"La sintassi non \u00E8 corretta","validate_stipendioSepa_pmtInf_reqdExctnDt_sintaxDateValidator", _onsubmit, _onchange);
        	
        
      	// validator name: stipendioSepa.pmtInf.reqdExctnDt  validDateValidator

				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: stipendioSepa.pmtInf.reqdExctnDt 
	  function validate_stipendioSepa_pmtInf_reqdExctnDt_validDateValidator(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.reqdExctnDt'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_reqdExctnDt','label.stipendioSepa.pmtInf.reqdExctnDt',"La data inserita non \u00E8 valida","validate_stipendioSepa_pmtInf_reqdExctnDt_validDateValidator", _onsubmit, _onchange);
        	
        
      	// validator name: stipendioSepa.pmtInf.reqdExctnDt  checkInRangeValidator

				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: stipendioSepa.pmtInf.reqdExctnDt 
	  function validate_stipendioSepa_pmtInf_reqdExctnDt_checkInRangeValidator(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.reqdExctnDt'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_reqdExctnDt','label.stipendioSepa.pmtInf.reqdExctnDt',"L\'anno deve essere compreso tra il 1900 e il 2050","validate_stipendioSepa_pmtInf_reqdExctnDt_checkInRangeValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].pmtId.endToEndId  requiredSepaField

			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: stipendioSepa.pmtInf.cdtTrfTxInfArray[0].pmtId.endToEndId 
	  function validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__pmtId_endToEndId_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaStipSepa").elements['stipendioSepa.pmtInf.cdtTrfTxInfArray[0].pmtId.endToEndId'])  addValidation(showAlert,'salvaStipSepa','salvaStipSepa_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__pmtId_endToEndId','label.stipendioSepa.pmtInf.cdtTrfTxInfArray[0].pmtId.endToEndId',"il campo \u00E8 obbligatorio","validate_stipendioSepa_pmtInf_cdtTrfTxInfArray_0__pmtId_endToEndId_requiredSepaField", _onsubmit, _onchange);
        	
        
              
              
              
              
              
              
              



	    function validateForm_salvaStipSepa() {
				if (submitCount >= 1) { alert("Richiesta gia' inoltrata."); return false; } 
		        var form = document.getElementById("salvaStipSepa");
		        var o=new validationResult();
		        
				var noerror= validateOnSubmitAll(o);
	            if (o.messageList.length>0) { 
		            var message="";
		            for (i=0;i<o.messageList.length;i++) 
					{
						if (o.messageList[i].type!=CONFIRM)
						{
							message+=o.messageList[i].label+':' +o.messageList[i].actualMessage+'\n';
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
							message+=o.messageList[i].label+':' +o.messageList[i].actualMessage+'\n';
						}
					}
		            return confirm(message);
					
				}
				
		        return noerror;

			//else if (annullaOperazione==true) return false;
			
			  
			
		}
		
		
		validateOnFieldAll();		
