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
           
        	if (document.getElementById("salvaBoniMSepa").elements['contextSelectorData.id'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_contextSelectorData_id','label.contextSelectorData.id',"il campo \u00E8 obbligatorio","validate_contextSelectorData_id_requiredSepaField", _onsubmit, _onchange);
        	
        
              
              
              
              
              
              
              
              
              
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['contextSelectorData.descrizione'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_contextSelectorData_descrizione','label.contextSelectorData.descrizione',"il campo \u00E8 obbligatorio","validate_contextSelectorData_descrizione_requiredSepaField", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['contextSelectorData.cf'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_contextSelectorData_cf','label.contextSelectorData.cf',"il campo \u00E8 obbligatorio","validate_contextSelectorData_cf_requiredSepaField", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['contextSelectorData.banca'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_contextSelectorData_banca','label.contextSelectorData.banca',"il campo \u00E8 obbligatorio","validate_contextSelectorData_banca_requiredSepaField", _onsubmit, _onchange);
        	
        
              
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['contextSelectorData.conto'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_contextSelectorData_conto','label.contextSelectorData.conto',"il campo \u00E8 obbligatorio","validate_contextSelectorData_conto_requiredSepaField", _onsubmit, _onchange);
        	
        
              
              
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.nm  requiredSepaField
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.nm 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_nm_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.nm'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_nm','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.nm',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_nm_requiredSepaField", _onsubmit, _onchange);
        	
        
              
              
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.strtNm  requiredSepaField
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.strtNm 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_strtNm_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.strtNm'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_strtNm','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.strtNm',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_strtNm_requiredSepaField", _onsubmit, _onchange);
        	
        
              
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id  sepaCucRequired
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;   
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id_sepaCucRequired(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id_sepaCucRequired", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id  minLengthNoSubmitValidator
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id_minLengthNoSubmitValidator(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id',"Il valore da inserire deve avere 8 caratteri.","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id_minLengthNoSubmitValidator", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id  noSpecialCharValidatorForCUC
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			    
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id_noSpecialCharValidatorForCUC(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id',"@ERROR Il cuc contiene un carattere non valido: @CHARNOTVALID.\nI caratteri validi sono le lettere e le cifre.","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id_noSpecialCharValidatorForCUC", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id  cucValidator
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id_cucValidator(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.prtryId.id',"Carattere di controllo CIN errato.","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_prtryId_id_cucValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.twnNm  sepaSIRequired
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;	
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.twnNm 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_twnNm_sepaSIRequired(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
				var valueIban=form.elements['IBAN'].value.substring(0,2).toUpperCase();
	           if (valueIban!='IT' && (value==null || value=="" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.twnNm'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_twnNm','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.twnNm',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_twnNm_sepaSIRequired", _onsubmit, _onchange);
        	
        
              
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.pstCd  minLengthNoSubmitValidator
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.pstCd 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_pstCd_minLengthNoSubmitValidator(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.pstCd'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_pstCd','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.pstlAdr.pstCd',"@WARNING Il valore da inserire deve avere almeno 5 caratteri.","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_pstlAdr_pstCd_minLengthNoSubmitValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: nazioneCreditore  requiredSepaField
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: nazioneCreditore 
	  function validate_nazioneCreditore_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['nazioneCreditore'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_nazioneCreditore','label.nazioneCreditore',"il campo \u00E8 obbligatorio","validate_nazioneCreditore_requiredSepaField", _onsubmit, _onchange);
        	
        
              
              
              
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN  requiredSepaField
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAcct_id_IBAN_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAcct_id_IBAN','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAcct_id_IBAN_requiredSepaField", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN  checkIBAN
 
				_onsubmit=true;
			    _onchange=CHECK_ON_NONE;		
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAcct_id_IBAN_checkIBAN(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAcct_id_IBAN','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN',"@CONFIRM Attenzione!! IBAN beneficiario errato o mancante.\nSi desidera comunque procedere?","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAcct_id_IBAN_checkIBAN", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN  controlloNazioneIban
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
			   	
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAcct_id_IBAN_controlloNazioneIban(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
           		var tipoOperazione=form.elements['tipoOperazione'].value;
           		if(tipoOperazione=='updateDistinta'&& value!='null' && value!=""){
           			var codNazione=value.substring(0,2).toUpperCase();
           			var IBANIniziale=form.elements['IBANIniziale'].value.substring(0,2).toUpperCase();
           			if ((codNazione=='IT') && (IBANIniziale!='IT')) {
	                	return false;
	            	}	            	
	            	if ((codNazione!='IT') && (IBANIniziale=='IT')) {
	                	return false;
	            	}
           		}
	          	
           	
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAcct_id_IBAN','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAcct.id.IBAN',"Non \u00E8 possibile modificare lo stato dell IBAN beneficiario.","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAcct_id_IBAN_controlloNazioneIban", _onsubmit, _onchange);
        	
        
              
              
              
              
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAgt.finInstnId.BIC  sepaSIRequired
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;	
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAgt.finInstnId.BIC 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAgt_finInstnId_BIC_sepaSIRequired(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
				var valueIban=form.elements['IBAN'].value.substring(0,2).toUpperCase();
	           if (valueIban!='IT' && (value==null || value=="" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAgt.finInstnId.BIC'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAgt_finInstnId_BIC','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAgt.finInstnId.BIC',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAgt_finInstnId_BIC_sepaSIRequired", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAgt.finInstnId.BIC  bicLenghtValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAgt.finInstnId.BIC 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAgt_finInstnId_BIC_bicLenghtValidator(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
       	     	if (value != "" && value.length!=8 && value.length!=11)
       	     	{     
            	      return false;
       	   		}
       	   	
              
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAgt.finInstnId.BIC'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAgt_finInstnId_BIC','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAgt.finInstnId.BIC',"La lunghezza deve essere di 8 o 11 caratteri","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAgt_finInstnId_BIC_bicLenghtValidator", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAgt.finInstnId.BIC  bicValid
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAgt.finInstnId.BIC 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAgt_finInstnId_BIC_bicValid(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
					if(value!="") 
					{
						if(!(isBicValid(value))) return false;
					}
					
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAgt.finInstnId.BIC'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAgt_finInstnId_BIC','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtrAgt.finInstnId.BIC',"non \u00E8 corretto. Il codice di controllo non corrisponde.","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtrAgt_finInstnId_BIC_bicValid", _onsubmit, _onchange);
        	
        
              
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb  requiredSepaField
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_requiredSepaField", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb  noSpecialCharValidatorForCF
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_noSpecialCharValidatorForCF(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb',"@ERROR Il codice fiscale contiene un carattere non valido: @CHARNOTVALID.\nI caratteri validi sono le lettere e le cifre.","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_noSpecialCharValidatorForCF", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb  onlyNumbersValidatorforPartIva
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_onlyNumbersValidatorforPartIva(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb',"@ERROR La partita IVA contiene un carattere non valido: @CHARNOTNUMBER.\nI caratteri validi sono le cifre.","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_onlyNumbersValidatorforPartIva", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb  partitaIva
 
			    _onsubmit=false;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_partitaIva(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb',"La partita IVA non e valida:\n il codice di controllo non corrisponde.","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_partitaIva", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb  codiceFiscale
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_codiceFiscale(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb',"Il codice fiscale non \u00E8 corretto:\n il codice di controllo non corrisponde.","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_codiceFiscale", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb  checkCFPIVA
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_checkCFPIVA(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].cdtr.id.orgId.taxIdNb',"La lunghezza del dato inserito non e corretta:\n la partita IVA dovrebbe essere lunga\n esattamente 11 caratteri, \n il codice fiscale dovrebbe essere lungo\n esattamente 16 caratteri.\n La partita IVA non e valida:\n il codice di controllo non corrisponde.\n","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__cdtr_id_orgId_taxIdNb_checkCFPIVA", _onsubmit, _onchange);
        	
        
              
              
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue  requiredSepaField
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__amt_instdAmt_stringValue_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__amt_instdAmt_stringValue','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__amt_instdAmt_stringValue_requiredSepaField", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue  importiNumero
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE; 
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__amt_instdAmt_stringValue_importiNumero(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__amt_instdAmt_stringValue','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue',"Inserire un valore reale","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__amt_instdAmt_stringValue_importiNumero", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue  sommaTotaliSepa
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__amt_instdAmt_stringValue_sommaTotaliSepa(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
		           var totale=form.elements['totaleCVS'].value;
		           totale=parseFloat(totale);
		           var valore=parseFloat(value);
		           if( valore <= totale){
		           		return false;
		           }
 
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__amt_instdAmt_stringValue','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.stringValue',"Il totale di tutti gli importi CVS introdotti, deve essere inferiore all\'importo della distinta.","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__amt_instdAmt_stringValue_sommaTotaliSepa", _onsubmit, _onchange);
        	
        
              
              
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.ccy  requiredSepaField
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.ccy 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__amt_instdAmt_ccy_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.ccy'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__amt_instdAmt_ccy','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].amt.instdAmt.ccy',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__amt_instdAmt_ccy_requiredSepaField", _onsubmit, _onchange);
        	
        
              
      	// validator name: boniMultiSepa.pmtInf.reqdExctnDt  requiredSepaField
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: boniMultiSepa.pmtInf.reqdExctnDt 
	  function validate_boniMultiSepa_pmtInf_reqdExctnDt_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.reqdExctnDt'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_reqdExctnDt','label.boniMultiSepa.pmtInf.reqdExctnDt',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_pmtInf_reqdExctnDt_requiredSepaField", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.pmtInf.reqdExctnDt  sintaxDateValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: boniMultiSepa.pmtInf.reqdExctnDt 
	  function validate_boniMultiSepa_pmtInf_reqdExctnDt_sintaxDateValidator(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.reqdExctnDt'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_reqdExctnDt','label.boniMultiSepa.pmtInf.reqdExctnDt',"La sintassi non \u00E8 corretta","validate_boniMultiSepa_pmtInf_reqdExctnDt_sintaxDateValidator", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.pmtInf.reqdExctnDt  validDateValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: boniMultiSepa.pmtInf.reqdExctnDt 
	  function validate_boniMultiSepa_pmtInf_reqdExctnDt_validDateValidator(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.reqdExctnDt'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_reqdExctnDt','label.boniMultiSepa.pmtInf.reqdExctnDt',"La data inserita non \u00E8 valida","validate_boniMultiSepa_pmtInf_reqdExctnDt_validDateValidator", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.pmtInf.reqdExctnDt  checkInRangeValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: boniMultiSepa.pmtInf.reqdExctnDt 
	  function validate_boniMultiSepa_pmtInf_reqdExctnDt_checkInRangeValidator(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.reqdExctnDt'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_reqdExctnDt','label.boniMultiSepa.pmtInf.reqdExctnDt',"L\'anno deve essere compreso tra il 1900 e il 2050","validate_boniMultiSepa_pmtInf_reqdExctnDt_checkInRangeValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].pmtId.endToEndId  requiredSepaField
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE; 
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].pmtId.endToEndId 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__pmtId_endToEndId_requiredSepaField(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].pmtId.endToEndId'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__pmtId_endToEndId','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].pmtId.endToEndId',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__pmtId_endToEndId_requiredSepaField", _onsubmit, _onchange);
        	
        
              
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].purp.prtry  sepaCausaleRequired
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].purp.prtry 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__purp_prtry_sepaCausaleRequired(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
				var valueIban=form.elements['IBAN'].value.substring(0,2).toUpperCase();
	           if ((valueIban=='IT') && value != null && (value == "     " || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].purp.prtry'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__purp_prtry','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].purp.prtry',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__purp_prtry_sepaCausaleRequired", _onsubmit, _onchange);
        	
        
              
              
              
              
      	// validator name: monitoraggio.cucMip  sepaMonitoraggioRequired
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: monitoraggio.cucMip 
	  function validate_monitoraggio_cucMip_sepaMonitoraggioRequired(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           if (form.elements['monitoraggioFinanziario'].checked == true && value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }
	         
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['monitoraggio.cucMip'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_monitoraggio_cucMip','label.monitoraggio.cucMip',"il campo \u00E8 obbligatorio","validate_monitoraggio_cucMip_sepaMonitoraggioRequired", _onsubmit, _onchange);
        	
        
      	// validator name: monitoraggio.cucMip  minLengthNoSubmitValidator
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: monitoraggio.cucMip 
	  function validate_monitoraggio_cucMip_minLengthNoSubmitValidator(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['monitoraggio.cucMip'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_monitoraggio_cucMip','label.monitoraggio.cucMip',"Il valore da inserire deve avere 8 caratteri.","validate_monitoraggio_cucMip_minLengthNoSubmitValidator", _onsubmit, _onchange);
        	
        
      	// validator name: monitoraggio.cucMip  noSpecialCharValidatorForCUC
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			    
 
 
       // field name: monitoraggio.cucMip 
	  function validate_monitoraggio_cucMip_noSpecialCharValidatorForCUC(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['monitoraggio.cucMip'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_monitoraggio_cucMip','label.monitoraggio.cucMip',"@ERROR Il cuc contiene un carattere non valido: @CHARNOTVALID.\nI caratteri validi sono le lettere e le cifre.","validate_monitoraggio_cucMip_noSpecialCharValidatorForCUC", _onsubmit, _onchange);
        	
        
      	// validator name: monitoraggio.cucMip  cucValidator
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
 
 
       // field name: monitoraggio.cucMip 
	  function validate_monitoraggio_cucMip_cucValidator(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['monitoraggio.cucMip'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_monitoraggio_cucMip','label.monitoraggio.cucMip',"Carattere di controllo CIN errato.","validate_monitoraggio_cucMip_cucValidator", _onsubmit, _onchange);
        	
        
              
              
      	// validator name: monitoraggio.cup  sepaMonitoraggioRequired
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: monitoraggio.cup 
	  function validate_monitoraggio_cup_sepaMonitoraggioRequired(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           if (form.elements['monitoraggioFinanziario'].checked == true && value != null && (value == "" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }
	         
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['monitoraggio.cup'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_monitoraggio_cup','label.monitoraggio.cup',"il campo \u00E8 obbligatorio","validate_monitoraggio_cup_sepaMonitoraggioRequired", _onsubmit, _onchange);
        	
        
      	// validator name: monitoraggio.cup  stringlengthCbiValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: monitoraggio.cup 
	  function validate_monitoraggio_cup_stringlengthCbiValidator(obj)
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
                if ((15 > -1 && value.length < 15) ||
                    (-1 > -1 && value.length > -1)) {
 
		                return false;
	            }
            } 
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['monitoraggio.cup'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_monitoraggio_cup','label.monitoraggio.cup',"Il valore da inserire deve avere 15 caratteri.","validate_monitoraggio_cup_stringlengthCbiValidator", _onsubmit, _onchange);
        	
        
              
              
              
      	// validator name: boniMultiSepa.causaleValutariaCvs1  sepaCausaleCVS1Required
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;	  
 
 
       // field name: boniMultiSepa.causaleValutariaCvs1 
	  function validate_boniMultiSepa_causaleValutariaCvs1_sepaCausaleCVS1Required(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           var tipoCVS=form.elements['tipoCvs1'].value;
	           if((tipoCVS=='EMI' ||tipoCVS=='CVA' )&& (value=='' || value==null)){
	           		return false;
	           }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.causaleValutariaCvs1'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_causaleValutariaCvs1','label.boniMultiSepa.causaleValutariaCvs1',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_causaleValutariaCvs1_sepaCausaleCVS1Required", _onsubmit, _onchange);
        	
        
              
      	// validator name: tipoCvs1  sepaSIRequired
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;	
 
 
       // field name: tipoCvs1 
	  function validate_tipoCvs1_sepaSIRequired(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
				var valueIban=form.elements['IBAN'].value.substring(0,2).toUpperCase();
	           if (valueIban!='IT' && (value==null || value=="" || value.replace(/^\s+|\s+$/g,"").length == 0)) {
	                return false;
	            }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['tipoCvs1'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_tipoCvs1','label.tipoCvs1',"il campo \u00E8 obbligatorio","validate_tipoCvs1_sepaSIRequired", _onsubmit, _onchange);
        	
        
      	// validator name: tipoCvs1  sepaTipoCVS1Required
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: tipoCvs1 
	  function validate_tipoCvs1_sepaTipoCVS1Required(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           var tipoCVS2=form.elements['tipoCvs2'].value;
	           var tipoCVS3=form.elements['tipoCvs3'].value;
	           if((tipoCVS3!='   ' ||tipoCVS2!='   ') && (value=='   ' || value==null)){
	           		return false;
	           }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['tipoCvs1'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_tipoCvs1','label.tipoCvs1',"il campo \u00E8 obbligatorio","validate_tipoCvs1_sepaTipoCVS1Required", _onsubmit, _onchange);
        	
        
              
      	// validator name: boniMultiSepa.dataCvs1  sintaxDateValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: boniMultiSepa.dataCvs1 
	  function validate_boniMultiSepa_dataCvs1_sintaxDateValidator(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.dataCvs1'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_dataCvs1','label.boniMultiSepa.dataCvs1',"La sintassi non \u00E8 corretta","validate_boniMultiSepa_dataCvs1_sintaxDateValidator", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.dataCvs1  validDateValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: boniMultiSepa.dataCvs1 
	  function validate_boniMultiSepa_dataCvs1_validDateValidator(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.dataCvs1'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_dataCvs1','label.boniMultiSepa.dataCvs1',"La data inserita non \u00E8 valida","validate_boniMultiSepa_dataCvs1_validDateValidator", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.dataCvs1  checkInRangeValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: boniMultiSepa.dataCvs1 
	  function validate_boniMultiSepa_dataCvs1_checkInRangeValidator(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.dataCvs1'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_dataCvs1','label.boniMultiSepa.dataCvs1',"L\'anno deve essere compreso tra il 1900 e il 2050","validate_boniMultiSepa_dataCvs1_checkInRangeValidator", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.dataCvs1  sepaFieldCVS1Required
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;	  
 
 
       // field name: boniMultiSepa.dataCvs1 
	  function validate_boniMultiSepa_dataCvs1_sepaFieldCVS1Required(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           var tipoCVS=form.elements['tipoCvs1'].value;
	           if(tipoCVS=='EMI' && (value=='' || value==null)){
	           		return false;
	           }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.dataCvs1'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_dataCvs1','label.boniMultiSepa.dataCvs1',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_dataCvs1_sepaFieldCVS1Required", _onsubmit, _onchange);
        	
        
              
      	// validator name: boniMultiSepa.tariffaDoganaleCvs1  sepaFieldCVS1Required
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;	  
 
 
       // field name: boniMultiSepa.tariffaDoganaleCvs1 
	  function validate_boniMultiSepa_tariffaDoganaleCvs1_sepaFieldCVS1Required(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           var tipoCVS=form.elements['tipoCvs1'].value;
	           if(tipoCVS=='EMI' && (value=='' || value==null)){
	           		return false;
	           }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.tariffaDoganaleCvs1'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_tariffaDoganaleCvs1','label.boniMultiSepa.tariffaDoganaleCvs1',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_tariffaDoganaleCvs1_sepaFieldCVS1Required", _onsubmit, _onchange);
        	
        
              
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].rgltryRptgArray[0].rgltryDtls.amt.stringValue  importiNumero
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE; 
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].rgltryRptgArray[0].rgltryDtls.amt.stringValue 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__rgltryRptgArray_0__rgltryDtls_amt_stringValue_importiNumero(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].rgltryRptgArray[0].rgltryDtls.amt.stringValue'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__rgltryRptgArray_0__rgltryDtls_amt_stringValue','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].rgltryRptgArray[0].rgltryDtls.amt.stringValue',"Inserire un valore reale","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__rgltryRptgArray_0__rgltryDtls_amt_stringValue_importiNumero", _onsubmit, _onchange);
        	
        
              
              
              
      	// validator name: boniMultiSepa.causaleValutariaCvs2  sepaCausaleCVS2Required
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;	  
 
 
       // field name: boniMultiSepa.causaleValutariaCvs2 
	  function validate_boniMultiSepa_causaleValutariaCvs2_sepaCausaleCVS2Required(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           var tipoCVS=form.elements['tipoCvs2'].value;
	           if((tipoCVS=='EMI' ||tipoCVS=='CVA' )&& (value=='' || value==null)){
	           		return false;
	           }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.causaleValutariaCvs2'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_causaleValutariaCvs2','label.boniMultiSepa.causaleValutariaCvs2',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_causaleValutariaCvs2_sepaCausaleCVS2Required", _onsubmit, _onchange);
        	
        
              
      	// validator name: tipoCvs2  sepaTipoCVS2Required
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: tipoCvs2 
	  function validate_tipoCvs2_sepaTipoCVS2Required(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           var tipoCVS=form.elements['tipoCvs3'].value;
	           if(tipoCVS!='   ' && (value=='   ' || value==null)){
	           		return false;
	           }
 
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['tipoCvs2'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_tipoCvs2','label.tipoCvs2',"il campo \u00E8 obbligatorio","validate_tipoCvs2_sepaTipoCVS2Required", _onsubmit, _onchange);
        	
        
              
      	// validator name: boniMultiSepa.dataCvs2  sintaxDateValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: boniMultiSepa.dataCvs2 
	  function validate_boniMultiSepa_dataCvs2_sintaxDateValidator(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.dataCvs2'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_dataCvs2','label.boniMultiSepa.dataCvs2',"La sintassi non \u00E8 corretta","validate_boniMultiSepa_dataCvs2_sintaxDateValidator", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.dataCvs2  validDateValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: boniMultiSepa.dataCvs2 
	  function validate_boniMultiSepa_dataCvs2_validDateValidator(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.dataCvs2'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_dataCvs2','label.boniMultiSepa.dataCvs2',"La data inserita non \u00E8 valida","validate_boniMultiSepa_dataCvs2_validDateValidator", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.dataCvs2  checkInRangeValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: boniMultiSepa.dataCvs2 
	  function validate_boniMultiSepa_dataCvs2_checkInRangeValidator(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.dataCvs2'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_dataCvs2','label.boniMultiSepa.dataCvs2',"L\'anno deve essere compreso tra il 1900 e il 2050","validate_boniMultiSepa_dataCvs2_checkInRangeValidator", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.dataCvs2  sepaFieldCVS2Required
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;	  
 
 
       // field name: boniMultiSepa.dataCvs2 
	  function validate_boniMultiSepa_dataCvs2_sepaFieldCVS2Required(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           var tipoCVS=form.elements['tipoCvs2'].value;
	           if(tipoCVS=='EMI' && (value=='' || value==null)){
	           		return false;
	           }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.dataCvs2'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_dataCvs2','label.boniMultiSepa.dataCvs2',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_dataCvs2_sepaFieldCVS2Required", _onsubmit, _onchange);
        	
        
              
      	// validator name: boniMultiSepa.tariffaDoganaleCvs2  sepaFieldCVS2Required
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;	  
 
 
       // field name: boniMultiSepa.tariffaDoganaleCvs2 
	  function validate_boniMultiSepa_tariffaDoganaleCvs2_sepaFieldCVS2Required(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           var tipoCVS=form.elements['tipoCvs2'].value;
	           if(tipoCVS=='EMI' && (value=='' || value==null)){
	           		return false;
	           }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.tariffaDoganaleCvs2'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_tariffaDoganaleCvs2','label.boniMultiSepa.tariffaDoganaleCvs2',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_tariffaDoganaleCvs2_sepaFieldCVS2Required", _onsubmit, _onchange);
        	
        
              
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].rgltryRptgArray[1].rgltryDtls.amt.stringValue  importiNumero
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE; 
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].rgltryRptgArray[1].rgltryDtls.amt.stringValue 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__rgltryRptgArray_1__rgltryDtls_amt_stringValue_importiNumero(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].rgltryRptgArray[1].rgltryDtls.amt.stringValue'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__rgltryRptgArray_1__rgltryDtls_amt_stringValue','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].rgltryRptgArray[1].rgltryDtls.amt.stringValue',"Inserire un valore reale","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__rgltryRptgArray_1__rgltryDtls_amt_stringValue_importiNumero", _onsubmit, _onchange);
        	
        
              
              
              
      	// validator name: boniMultiSepa.causaleValutariaCvs3  sepaCausaleCVS3Required
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;	  
 
 
       // field name: boniMultiSepa.causaleValutariaCvs3 
	  function validate_boniMultiSepa_causaleValutariaCvs3_sepaCausaleCVS3Required(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           var tipoCVS=form.elements['tipoCvs3'].value;
	           if((tipoCVS=='EMI' ||tipoCVS=='CVA' )&& (value=='' || value==null)){
	           		return false;
	           }  
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.causaleValutariaCvs3'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_causaleValutariaCvs3','label.boniMultiSepa.causaleValutariaCvs3',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_causaleValutariaCvs3_sepaCausaleCVS3Required", _onsubmit, _onchange);
        	
        
              
              
      	// validator name: boniMultiSepa.dataCvs3  sintaxDateValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: boniMultiSepa.dataCvs3 
	  function validate_boniMultiSepa_dataCvs3_sintaxDateValidator(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.dataCvs3'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_dataCvs3','label.boniMultiSepa.dataCvs3',"La sintassi non \u00E8 corretta","validate_boniMultiSepa_dataCvs3_sintaxDateValidator", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.dataCvs3  validDateValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: boniMultiSepa.dataCvs3 
	  function validate_boniMultiSepa_dataCvs3_validDateValidator(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.dataCvs3'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_dataCvs3','label.boniMultiSepa.dataCvs3',"La data inserita non \u00E8 valida","validate_boniMultiSepa_dataCvs3_validDateValidator", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.dataCvs3  checkInRangeValidator
 
				_onsubmit=true;
			    _onchange=CHECK_ON_CHANGE;
			 
 
 
       // field name: boniMultiSepa.dataCvs3 
	  function validate_boniMultiSepa_dataCvs3_checkInRangeValidator(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.dataCvs3'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_dataCvs3','label.boniMultiSepa.dataCvs3',"L\'anno deve essere compreso tra il 1900 e il 2050","validate_boniMultiSepa_dataCvs3_checkInRangeValidator", _onsubmit, _onchange);
        	
        
      	// validator name: boniMultiSepa.dataCvs3  sepaFieldCVS3Required
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
			    
 
 
       // field name: boniMultiSepa.dataCvs3 
	  function validate_boniMultiSepa_dataCvs3_sepaFieldCVS3Required(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           var tipoCVS=form.elements['tipoCvs3'].value;
	           if(tipoCVS=='EMI' && (value=='' || value==null)){
	           		return false;
	           }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.dataCvs3'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_dataCvs3','label.boniMultiSepa.dataCvs3',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_dataCvs3_sepaFieldCVS3Required", _onsubmit, _onchange);
        	
        
              
      	// validator name: boniMultiSepa.tariffaDoganaleCvs3  sepaFieldCVS3Required
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
			    
 
 
       // field name: boniMultiSepa.tariffaDoganaleCvs3 
	  function validate_boniMultiSepa_tariffaDoganaleCvs3_sepaFieldCVS3Required(obj)
	  {     // var message= obj.message; var label=obj.label; 
		    var form = obj.form; field = obj.field;
			var value=null;
			if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
			if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
				
	           var tipoCVS=form.elements['tipoCvs3'].value;
	           if(tipoCVS=='EMI' && (value=='' || value==null)){
	           		return false;
	           }
			
   			return true;
		    }
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.tariffaDoganaleCvs3'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_tariffaDoganaleCvs3','label.boniMultiSepa.tariffaDoganaleCvs3',"il campo \u00E8 obbligatorio","validate_boniMultiSepa_tariffaDoganaleCvs3_sepaFieldCVS3Required", _onsubmit, _onchange);
        	
        
              
      	// validator name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].rgltryRptgArray[2].rgltryDtls.amt.stringValue  importiNumero
 
			    _onsubmit=true;
			    _onchange=CHECK_ON_CHANGE; 
 
 
       // field name: boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].rgltryRptgArray[2].rgltryDtls.amt.stringValue 
	  function validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__rgltryRptgArray_2__rgltryDtls_amt_stringValue_importiNumero(obj)
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
           
        	if (document.getElementById("salvaBoniMSepa").elements['boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].rgltryRptgArray[2].rgltryDtls.amt.stringValue'])  addValidation(showAlert,'salvaBoniMSepa','salvaBoniMSepa_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__rgltryRptgArray_2__rgltryDtls_amt_stringValue','label.boniMultiSepa.pmtInf.cdtTrfTxInfArray[0].rgltryRptgArray[2].rgltryDtls.amt.stringValue',"Inserire un valore reale","validate_boniMultiSepa_pmtInf_cdtTrfTxInfArray_0__rgltryRptgArray_2__rgltryDtls_amt_stringValue_importiNumero", _onsubmit, _onchange);
        	
        
              
              
              
 
 
 
	    function validateForm_salvaBoniMSepa() {
				if (submitCount >= 1) { alert("Richiesta gia' inoltrata."); return false; } 
		        var form = document.getElementById("salvaBoniMSepa");
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
		
