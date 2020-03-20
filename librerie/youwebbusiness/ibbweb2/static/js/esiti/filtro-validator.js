    var _onsubmit=true;
    var _onchange=CHECK_ON_CHANGE;
    var _show =true;
    CHECK_REPEATED_SUBMIT=true;
    // manca il messaggio internazionale 
    

              
              
              
              
              
              
              
              
              
              
        // validator name: filtroEsiti.dataRicezioneMin  sintaxDateValidator

                _onsubmit=true;
                _onchange=CHECK_ON_CHANGE;
             
 
 
       // field name: filtroEsiti.dataRicezioneMin 
      function validate_filtroEsiti_dataRicezioneMin_sintaxDateValidator(obj)
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
           
            if (document.getElementById("listaEsitiPC").elements['filtroEsiti.dataRicezioneMin'])  addValidation(showAlert,'listaEsitiPC','listaEsitiPC_filtroEsiti_dataRicezioneMin','label.filtroEsiti.dataRicezioneMin',"La sintassi non \u00E8 corretta","validate_filtroEsiti_dataRicezioneMin_sintaxDateValidator", _onsubmit, _onchange);
            
        
        // validator name: filtroEsiti.dataRicezioneMin  validDateValidator

                _onsubmit=true;
                _onchange=CHECK_ON_CHANGE;
             
 
 
       // field name: filtroEsiti.dataRicezioneMin 
      function validate_filtroEsiti_dataRicezioneMin_validDateValidator(obj)
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
           
            if (document.getElementById("listaEsitiPC").elements['filtroEsiti.dataRicezioneMin'])  addValidation(showAlert,'listaEsitiPC','listaEsitiPC_filtroEsiti_dataRicezioneMin','label.filtroEsiti.dataRicezioneMin',"La data inserita non \u00E8 valida","validate_filtroEsiti_dataRicezioneMin_validDateValidator", _onsubmit, _onchange);
            
        
        // validator name: filtroEsiti.dataRicezioneMin  checkInRangeValidator

                _onsubmit=true;
                _onchange=CHECK_ON_CHANGE;
             
 
 
       // field name: filtroEsiti.dataRicezioneMin 
      function validate_filtroEsiti_dataRicezioneMin_checkInRangeValidator(obj)
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
           
            if (document.getElementById("listaEsitiPC").elements['filtroEsiti.dataRicezioneMin'])  addValidation(showAlert,'listaEsitiPC','listaEsitiPC_filtroEsiti_dataRicezioneMin','label.filtroEsiti.dataRicezioneMin',"L\'anno deve essere compreso tra il 1900 e il 2050","validate_filtroEsiti_dataRicezioneMin_checkInRangeValidator", _onsubmit, _onchange);
            
        
        // validator name: filtroEsiti.dataRicezioneMin  incrocioDateInvio

                _onsubmit=true;
                _onchange=CHECK_ON_NONE;
 
 
       // field name: filtroEsiti.dataRicezioneMin 
      function validate_filtroEsiti_dataRicezioneMin_incrocioDateInvio(obj)
      {     // var message= obj.message; var label=obj.label; 
            var form = obj.form; field = obj.field;
            var value=null;
            if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
            if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
                
                var dataInvioMin  = form.elements['filtroEsiti.dataRicezioneMin'].value;
                var dataInvioMax  = form.elements['filtroEsiti.dataRicezioneMax'].value;

            return(confrontaDate(dataInvioMin,dataInvioMax));
                    
            
            return true;
            }
           
            if (document.getElementById("listaEsitiPC").elements['filtroEsiti.dataRicezioneMin'])  addValidation(showAlert,'listaEsitiPC','listaEsitiPC_filtroEsiti_dataRicezioneMin','label.filtroEsiti.dataRicezioneMin',"La data di invio iniziale deve essere minore di quella finale","validate_filtroEsiti_dataRicezioneMin_incrocioDateInvio", _onsubmit, _onchange);
            
        
              
        // validator name: filtroEsiti.dataRicezioneMax  sintaxDateValidator

                _onsubmit=true;
                _onchange=CHECK_ON_CHANGE;
             
 
 
       // field name: filtroEsiti.dataRicezioneMax 
      function validate_filtroEsiti_dataRicezioneMax_sintaxDateValidator(obj)
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
           
            if (document.getElementById("listaEsitiPC").elements['filtroEsiti.dataRicezioneMax'])  addValidation(showAlert,'listaEsitiPC','listaEsitiPC_filtroEsiti_dataRicezioneMax','label.filtroEsiti.dataRicezioneMax',"La sintassi non \u00E8 corretta","validate_filtroEsiti_dataRicezioneMax_sintaxDateValidator", _onsubmit, _onchange);
            
        
        // validator name: filtroEsiti.dataRicezioneMax  validDateValidator

                _onsubmit=true;
                _onchange=CHECK_ON_CHANGE;
             
 
 
       // field name: filtroEsiti.dataRicezioneMax 
      function validate_filtroEsiti_dataRicezioneMax_validDateValidator(obj)
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
           
            if (document.getElementById("listaEsitiPC").elements['filtroEsiti.dataRicezioneMax'])  addValidation(showAlert,'listaEsitiPC','listaEsitiPC_filtroEsiti_dataRicezioneMax','label.filtroEsiti.dataRicezioneMax',"La data inserita non \u00E8 valida","validate_filtroEsiti_dataRicezioneMax_validDateValidator", _onsubmit, _onchange);
            
        
        // validator name: filtroEsiti.dataRicezioneMax  checkInRangeValidator

                _onsubmit=true;
                _onchange=CHECK_ON_CHANGE;
             
 
 
       // field name: filtroEsiti.dataRicezioneMax 
      function validate_filtroEsiti_dataRicezioneMax_checkInRangeValidator(obj)
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
           
            if (document.getElementById("listaEsitiPC").elements['filtroEsiti.dataRicezioneMax'])  addValidation(showAlert,'listaEsitiPC','listaEsitiPC_filtroEsiti_dataRicezioneMax','label.filtroEsiti.dataRicezioneMax',"L\'anno deve essere compreso tra il 1900 e il 2050","validate_filtroEsiti_dataRicezioneMax_checkInRangeValidator", _onsubmit, _onchange);
            
        
              
        // validator name: filtroEsiti.dataEsecuzioneMin  sintaxDateValidator

                _onsubmit=true;
                _onchange=CHECK_ON_CHANGE;
             
 
 
       // field name: filtroEsiti.dataEsecuzioneMin 
      function validate_filtroEsiti_dataEsecuzioneMin_sintaxDateValidator(obj)
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
           
            if (document.getElementById("listaEsitiPC").elements['filtroEsiti.dataEsecuzioneMin'])  addValidation(showAlert,'listaEsitiPC','listaEsitiPC_filtroEsiti_dataEsecuzioneMin','label.filtroEsiti.dataEsecuzioneMin',"La sintassi non \u00E8 corretta","validate_filtroEsiti_dataEsecuzioneMin_sintaxDateValidator", _onsubmit, _onchange);
            
        
        // validator name: filtroEsiti.dataEsecuzioneMin  validDateValidator

                _onsubmit=true;
                _onchange=CHECK_ON_CHANGE;
             
 
 
       // field name: filtroEsiti.dataEsecuzioneMin 
      function validate_filtroEsiti_dataEsecuzioneMin_validDateValidator(obj)
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
           
            if (document.getElementById("listaEsitiPC").elements['filtroEsiti.dataEsecuzioneMin'])  addValidation(showAlert,'listaEsitiPC','listaEsitiPC_filtroEsiti_dataEsecuzioneMin','label.filtroEsiti.dataEsecuzioneMin',"La data inserita non \u00E8 valida","validate_filtroEsiti_dataEsecuzioneMin_validDateValidator", _onsubmit, _onchange);
            
        
        // validator name: filtroEsiti.dataEsecuzioneMin  checkInRangeValidator

                _onsubmit=true;
                _onchange=CHECK_ON_CHANGE;
             
 
 
       // field name: filtroEsiti.dataEsecuzioneMin 
      function validate_filtroEsiti_dataEsecuzioneMin_checkInRangeValidator(obj)
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
           
            if (document.getElementById("listaEsitiPC").elements['filtroEsiti.dataEsecuzioneMin'])  addValidation(showAlert,'listaEsitiPC','listaEsitiPC_filtroEsiti_dataEsecuzioneMin','label.filtroEsiti.dataEsecuzioneMin',"L\'anno deve essere compreso tra il 1900 e il 2050","validate_filtroEsiti_dataEsecuzioneMin_checkInRangeValidator", _onsubmit, _onchange);
            
        
        // validator name: filtroEsiti.dataEsecuzioneMin  incrocioDateEsecuzione

                _onsubmit=true;
                _onchange=CHECK_ON_NONE;
                
 
 
       // field name: filtroEsiti.dataEsecuzioneMin 
      function validate_filtroEsiti_dataEsecuzioneMin_incrocioDateEsecuzione(obj)
      {     // var message= obj.message; var label=obj.label; 
            var form = obj.form; field = obj.field;
            var value=null;
            if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
            if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
                
                var dataEsecMin  = form.elements['filtroEsiti.dataEsecuzioneMin'].value;
                var dataEsecMax = form.elements['filtroEsiti.dataEsecuzioneMax'].value;

            return(confrontaDate(dataEsecMin,dataEsecMax));
            
            
            return true;
            }
           
            if (document.getElementById("listaEsitiPC").elements['filtroEsiti.dataEsecuzioneMin'])  addValidation(showAlert,'listaEsitiPC','listaEsitiPC_filtroEsiti_dataEsecuzioneMin','label.filtroEsiti.dataEsecuzioneMin',"La data di esecuzione iniziale deve essere minore di quella finale","validate_filtroEsiti_dataEsecuzioneMin_incrocioDateEsecuzione", _onsubmit, _onchange);
            
        
              
        // validator name: filtroEsiti.dataEsecuzioneMax  sintaxDateValidator

                _onsubmit=true;
                _onchange=CHECK_ON_CHANGE;
             
 
 
       // field name: filtroEsiti.dataEsecuzioneMax 
      function validate_filtroEsiti_dataEsecuzioneMax_sintaxDateValidator(obj)
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
           
            if (document.getElementById("listaEsitiPC").elements['filtroEsiti.dataEsecuzioneMax'])  addValidation(showAlert,'listaEsitiPC','listaEsitiPC_filtroEsiti_dataEsecuzioneMax','label.filtroEsiti.dataEsecuzioneMax',"La sintassi non \u00E8 corretta","validate_filtroEsiti_dataEsecuzioneMax_sintaxDateValidator", _onsubmit, _onchange);
            
        
        // validator name: filtroEsiti.dataEsecuzioneMax  validDateValidator

                _onsubmit=true;
                _onchange=CHECK_ON_CHANGE;
             
 
 
       // field name: filtroEsiti.dataEsecuzioneMax 
      function validate_filtroEsiti_dataEsecuzioneMax_validDateValidator(obj)
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
           
            if (document.getElementById("listaEsitiPC").elements['filtroEsiti.dataEsecuzioneMax'])  addValidation(showAlert,'listaEsitiPC','listaEsitiPC_filtroEsiti_dataEsecuzioneMax','label.filtroEsiti.dataEsecuzioneMax',"La data inserita non \u00E8 valida","validate_filtroEsiti_dataEsecuzioneMax_validDateValidator", _onsubmit, _onchange);
            
        
        // validator name: filtroEsiti.dataEsecuzioneMax  checkInRangeValidator

                _onsubmit=true;
                _onchange=CHECK_ON_CHANGE;
             
 
 
       // field name: filtroEsiti.dataEsecuzioneMax 
      function validate_filtroEsiti_dataEsecuzioneMax_checkInRangeValidator(obj)
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
           
            if (document.getElementById("listaEsitiPC").elements['filtroEsiti.dataEsecuzioneMax'])  addValidation(showAlert,'listaEsitiPC','listaEsitiPC_filtroEsiti_dataEsecuzioneMax','label.filtroEsiti.dataEsecuzioneMax',"L\'anno deve essere compreso tra il 1900 e il 2050","validate_filtroEsiti_dataEsecuzioneMax_checkInRangeValidator", _onsubmit, _onchange);
            
        
              
        // validator name: filtroEsiti.importoSingolaDispoMin  importiNumero

                _onsubmit=true;
                _onchange=CHECK_ON_CHANGE; 
 
 
       // field name: filtroEsiti.importoSingolaDispoMin 
      function validate_filtroEsiti_importoSingolaDispoMin_importiNumero(obj)
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
           
            if (document.getElementById("listaEsitiPC").elements['filtroEsiti.importoSingolaDispoMin'])  addValidation(showAlert,'listaEsitiPC','listaEsitiPC_filtroEsiti_importoSingolaDispoMin','label.filtroEsiti.importoSingolaDispoMin',"Inserire un valore corretto!","validate_filtroEsiti_importoSingolaDispoMin_importiNumero", _onsubmit, _onchange);
            
        
        // validator name: filtroEsiti.importoSingolaDispoMin  incrocioImporti

                _onsubmit=true;
                _onchange=CHECK_ON_NONE;
 
 
       // field name: filtroEsiti.importoSingolaDispoMin 
      function validate_filtroEsiti_importoSingolaDispoMin_incrocioImporti(obj)
      {     // var message= obj.message; var label=obj.label; 
            var form = obj.form; field = obj.field;
            var value=null;
            if ((field.type=="hidden")||(field.type=="text")||(field.type=="textarea"))  value=field.value;
            if ((field.type=="select-one")||(field.type=="select-multiple")) value=field.options[field.selectedIndex].value;
                
                var importoMinimo  = form.elements['filtroEsiti.importoSingolaDispoMin'].value;
                var importoMassimo = form.elements['filtroEsiti.importoSingolaDispoMax'].value;

            return(confrontaImporto(importoMinimo,importoMassimo));
            
            
            return true;
            }
           
            if (document.getElementById("listaEsitiPC").elements['filtroEsiti.importoSingolaDispoMin'])  addValidation(showAlert,'listaEsitiPC','listaEsitiPC_filtroEsiti_importoSingolaDispoMin','label.filtroEsiti.importoSingolaDispoMin',"L\'importo iniziale deve essere minore di quello finale","validate_filtroEsiti_importoSingolaDispoMin_incrocioImporti", _onsubmit, _onchange);
            
        
              
        // validator name: filtroEsiti.importoSingolaDispoMax  importiNumero

                _onsubmit=true;
                _onchange=CHECK_ON_CHANGE; 
 
 
       // field name: filtroEsiti.importoSingolaDispoMax 
      function validate_filtroEsiti_importoSingolaDispoMax_importiNumero(obj)
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
           
            if (document.getElementById("listaEsitiPC").elements['filtroEsiti.importoSingolaDispoMax'])  addValidation(showAlert,'listaEsitiPC','listaEsitiPC_filtroEsiti_importoSingolaDispoMax','label.filtroEsiti.importoSingolaDispoMax',"Inserire un valore corretto!","validate_filtroEsiti_importoSingolaDispoMax_importiNumero", _onsubmit, _onchange);
            
        
              
              



        function validateForm_listaEsitiPC() {
                if (submitCount >= 1) { alert("Richiesta gia' inoltrata."); return false; } 
                var form = document.getElementById("listaEsitiPC");
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
                {   //non ci sono errori ma vi sono delle conferme da richiedere all'utente
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
        
