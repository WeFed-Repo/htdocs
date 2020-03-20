 var _onsubmit=true;
    var _onchange=CHECK_ON_CHANGE;
    var _show =true;
	CHECK_REPEATED_SUBMIT=true;
	// manca il messaggio internazionale 
	

              
      	// validator name: intestatario  requiredCbiValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: intestatario 
	  function validate_intestatario_requiredCbiValidator(obj)
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
           
        	if (document.getElementById("salvaFlusso").elements['intestatario'])  addValidation(showAlert,'salvaFlusso','salvaFlusso_intestatario','label.intestatario',"il campo \u00E8 obbligatorio","validate_intestatario_requiredCbiValidator", _onsubmit, _onchange);
        	
        
              
      	// validator name: extfile_temp  requiredCbiValidator
      
			    _onsubmit=true;
			    _onchange=CHECK_ON_NONE;
 
 
       // field name: extfile_temp 
	  function validate_extfile_temp_requiredCbiValidator(obj)
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
           
        	if (document.getElementById("salvaFlusso").elements['extfile_temp'])  addValidation(showAlert,'salvaFlusso','salvaFlusso_extfile_temp','label.extfile_temp',"Attenzione: selezionare il file da importare.","validate_extfile_temp_requiredCbiValidator", _onsubmit, _onchange);
        	
        
              
              



	    function validateForm_salvaFlusso() {
				if (submitCount >= 1) { alert("Richiesta gia' inoltrata."); return false; } 
		        var form = document.getElementById("salvaFlusso");
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
