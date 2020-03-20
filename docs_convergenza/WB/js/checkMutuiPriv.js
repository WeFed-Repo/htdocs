var mainErrore = false;
var flagValidazione = true;

function validateCheckFields() {
	var valRet=false;
	var errors = [];
	if(!$('#visione_1')[0].checked){
		errors.push({ field: $("#visione_1_label"), text: 'prendere visione e salvare/stampare i pdf' });
	}
	if(!$('#visione_2')[0].checked){
		errors.push({ field: $("#visione_2_label"), text: 'prendere visione e salvare/stampare i pdf' });
	}
	if (errors.length > 0)	{
		setHasErrors(errors, "#mol");
		valRet=false;
	}else{
		valRet=true;
	}
	return valRet;
}

function mySpostaFocus(obj, next, e) {
	var keys = [8, 9, 16, 17, 18, 19, 20, 27, 33, 34, 35, 36, 37, 38, 39, 40, 45, 46, 144, 145];
	var code = 0;
	if (!e){
	  e = window.event;
	}
	if (e.keyCode){
	  code = e.keyCode;
	} else if (e.which) {
	  code = e.which;
	}
	if(jQuery.inArray(code, keys) == -1 && obj.value.length==obj.maxLength){
	  next.focus();
	}
} 

function checkFormPriv() {
	var valRet=false;
	var serverDate = new Date();
	var errors = [];
	if($('#finalita').val() == ""){
		errors.push({ field: $('#finalita'+'_label'), text: 'inserire la finalit&agrave; del mutuo ' });
	};
	if($('#subFinalita').val() == ""){
		errors.push({ field: $('#subFinalita'+'_label'), text: 'inserire la finalit&agrave; del mutuo ' });
	};
	if($('#statoRicerca').val() == ""){
		errors.push({ field: $('#statoRicerca'+'_label'), text: 'inserire lo stato ricerca immobile ' });
	};
	/*** DATA ROGITO ***/
	var flagDataRogito = false;
	if($('#mmRogito').val() == ""){
		errors.push({ field: $('#annoRogito'+'_label'), text: 'inserire la data prevista di attivazione mutuo ' });
	}else {
		flagDataRogito=checkNum($('#mmRogito'));  
		if (flagDataRogito == true){
			errors.push({ field: $('#annoRogito'+'_label'), text: 'inserire correttamente la data prevista di attivazione mutuo ' });
		}
    }
    if (flagDataRogito == false) {
    	if($('#annoRogito').val() == ""){
			errors.push({ field: $('#annoRogito'+'_label'), text: 'inserire la data prevista di attivazione mutuo ' });
			flagDataRogito = true;
    	} else {
			flagDataRogito = checkNum($('#annoRogito'));
			if (flagDataRogito == true){
				errors.push({ field: $('#annoRogito'+'_label'), text: 'inserire correttamente la data prevista di attivazione mutuo ' });
			}
	    }
    }
    if (flagDataRogito == false) {
        flagDataRogito = ctrlData($('#annoRogito') , $('#mmRogito') , $('#ggRogito') ,serverDate, 'paste');
        if (flagDataRogito == true){
			errors.push({ field: $('#annoRogito'+'_label'), text: 'inserire correttamente la data prevista di attivazione mutuo '});
        }
    }
	/*** provImmobile ***/
	if($('#provImmobile').val() == ""){
		errors.push({ field: $('#provImmobile'+'_label'), text: 'inserire la provincia ' });
	};
	/*** orarioContatto ***/
	if($('#orarioContatto').val() == ""){
		errors.push({ field: $('#orarioContatto'+'_label'), text: 'inserire la fascia oraria di contatto ' });
	};
	/*** MAIL ***/
	if($('#email').val() == ""){
		errors.push({ field: $('#email'+'_label'), text: 'inserire l&#39;indirizzo email ' });
	}else {
    	if(checkMail($('#email'))) {
    		errors.push({ field: $('#email'+'_label'), text: 'inserire correttamente l&#39;indirizzo email' });
    	}
	}		
	/*** RECAPITI TELEFONICI ***/
	$('#prefCellulare').val($.trim($('#prefCellulare').val()));
	$('#cellulare').val($.trim($('#cellulare').val()));
	$('#prefTelefono').val($.trim($('#prefTelefono').val()));
	$('#telefono').val($.trim($('#telefono').val()));
	$('#prefUfficio').val($.trim($('#prefUfficio').val()));
	$('#ufficio').val($.trim($('#ufficio').val()));
	//--- CONTROLLI CELLULARE -------------------------------------------------------------------------------
	if($('#prefCellulare').val() == "" && $('#cellulare').val() == ""){
		errors.push({ field: $('#prefCellulare'+'_label'), text: 'inserire il telefono cellulare' });
	};
    if ($('#prefCellulare').val() != "") {
		if (checkNum($('#prefCellulare'))) {
			errors.push({ field: $('#cellulare'+'_label'), text: 'inserire il prefisso del cellulare correttamente' });
		}
		if ($('#prefCellulare').val().length != 3) {
		   errors.push({ field: $('#cellulare'+'_label'), text: 'inserire il prefisso del cellullare correttamente'});
		}
	}
	else {
		 errors.push({ field: $('#cellulare'+'_label'), text: 'inserire il prefisso del cellullare'});
	}
    if ($('#cellulare').val() != "") {
    	if (checkNum( $('#cellulare'))) {
			 errors.push({ field: $('#cellulare'+'_label'), text: 'inserire il numero di cellullare correttamente'});
		}
		if ($('#cellulare').val().length != 7 && $('#cellulare').val().length != 6) {
			 errors.push({ field: $('#cellulare'+'_label'), text: 'il numero di cellulare deve essere massimo di 7 cifre'});
		}
	}
	else {
		 errors.push({ field: $('#cellulare'+'_label'), text: 'inserire il numero del cellullare'});
	}
    if ($('#operatore').val() == "" && ($('#prefCellulare').val()!="" || $('#cellulare').val()!="" )) {
    	errors.push({ field: $('#cellulare'+'_label'), text: 'inserire l&#39;operatore del cellullare '});
    }
	//-------------------------------------------------------------------------------------------------------		    
    /*** TELEFONO ABITAZIONE ***/
    var flagTelefono = false;
	if($('#prefTelefono').val() == "" && $('#telefono').val() != ""){
		errors.push({ field: $('#telefono'+'_label'), text: 'inserire il prefisso del telefono abitazione ' });
		flagTelefono = true;
	};
	if($('#prefTelefono').val() != "" && $('#telefono').val() == ""){
		errors.push({ field: $('#telefono'+'_label'), text: 'inserire il telefono abitazione  ' });
		flagTelefono = true;
	};
	if($('#prefTelefono').val() != "" && $('#telefono').val() != ""){
		flagTelefono = checkNum($('#prefTelefono'));
		if (flagTelefono==true){
			errors.push({ field: $('#telefono'+'_label'), text: 'inserire correttamente il telefono abitazione ' });
		}
		if (flagTelefono == false) {
			flagTelefono = checkNum($('#telefono'));
			if (flagTelefono==true){
				errors.push({ field: $('#telefono'+'_label'), text: 'inserire correttamente il telefono abitazione ' });
			};
		}
	};
    /*** TELEFONO UFFICIO ***/
    var telUfficio = false;
	if($('#prefUfficio').val() == "" && $('#ufficio').val() != ""){
		errors.push({ field: $('#ufficio'+'_label'), text: 'inserire il prefisso del telefono ufficio ' });
		telUfficio = true;
	};
	if($('#prefUfficio').val() != "" && $('#ufficio').val() == ""){
		errors.push({ field: $('#ufficio'+'_label'), text: 'inserire il telefono ufficio ' });
		telUfficio = true;
	};
	if($('#prefUfficio').val() != "" && $('#ufficio').val() != ""){
		telUfficio = checkNum($('#prefUfficio'));
		if (telUfficio==true){
			errors.push({ field: $('#ufficio'+'_label'), text: 'inserire correttamente il telefono ufficio ' });
		}
		if (telUfficio == false) {
			telUfficio = checkNum($('#ufficio'));
			if (telUfficio==true){
				errors.push({ field: $('#ufficio'+'_label'), text: 'inserire correttamente il telefono ufficio ' });
			}
		}
	};
	/*** INIZIO INTESTATARIO I ***/
		/*** DATI ANAGRAFICI ***/
	    /*** NAZIONALITA E CITTADINANZA ***/
	    if($('#estero').val() == "SI") {
			if ($('#nazionalita').val() == "") {
				errors.push({ field: $('#nazionalita'+'_label'), text: 'inserire la nazionalit&agrave; ' });
			};
			if ($('#cittadinanza').val() == "") {
				errors.push({ field: $('#cittadinanza'+'_label'), text: 'inserire la cittadinanza '});
			};	
	    }
	    /*** INDIRIZZO DI RESIDENZA ***/
	   	//parzCompilati function parzCompilati(c1,c2,c3,c4,c5, obbligatori)
	    //-----------------------------------------------------------------------------------------------------
	   	var b = false;
	   	var c1=$('#indirizzo');
	   	var c2=$('#civico');
	   	var c3=$('#cap');
	   	var c4=$('#provincia');
	   	var c5=$('#comune');
	   	var obbligatori=true;
		//toglo gli eventuali spazi inseriti
	    
		c1.value = rTrim(c1.val());
	    c2.value = rTrim(c2.val());
	    c3.value = rTrim(c3.val());
	    var emptyFilds = ((c1.val() == "") || (c2.val() == "") || (c3.val() == "") || (c4.val() == "") || (c5.val() == ""));
	    if (obbligatori) {
	    	if (emptyFilds) {
	    		b = true;
	    	}
	    }
	    else {
	    	if (emptyFilds && (!(c1.val() == "") || !(c2.val() == "") || !(c3.val() == "") || !(c4.val() == "") || !(c5.val() == ""))) {
	    		b = true;
	    	}
		}
	    if (b) {
			if (c1.val() == "") {
				var name= c1.attr('name'); 
				errors.push({ field: $('#'+name+'_label'), text: 'inserire l&#39;indirizzo'});
			} 
			else if (c2.val() == "") {
				var name= c2.attr('name');
				errors.push({ field: $('#'+name+'_label'), text: 'inserire il numero civico'});
			} 
			else if (c3.val() == "") {
				var name= c3.attr('name');
				errors.push({ field: $('#'+name+'_label'), text: 'inserire il cap'});
			} 
			else if (c4.val() == "") {
				var name= c4.attr('name');
				errors.push({ field: $('#'+name+'_label'), text: 'inserire la provincia'});
			} 
			else if (c5.val() == "") {
				var name= c5.attr('name');
				errors.push({ field: $('#'+name+'_label'), text: 'inserire il comune'});
			}
	    }
	   	//-----------------------------------------------------------------------------------------------------
		/*** VIA/PIAZZA ***/
		if($('#indirizzo').val() == ""){
			errors.push({ field: $('#indirizzo'+'_label'), text: 'inserire l&#39;indirizzo ' });
		};
		/*** CIVICO ***/
		if($('#civico').val() == ""){
			errors.push({ field: $('#civico'+'_label'), text: 'inserire il numero civico ' });
		};
		/*** cap ***/
		if($('#cap').val() == ""){
			errors.push({ field: $('#cap'+'_label'), text: 'inserire il cap '});
		}else{
			var checkNumCap = checkNum($('#cap'));
			if (checkNumCap==true){
				errors.push({ field: $('#cap'+'_label'), text: 'inserire correttamente il cap ' });
			}
		}
		if($('#provincia').val() == ""){
			errors.push({ field: $('#provincia'+'_label'), text: 'inserire la provincia ' });
		};
		if($('#comune').val() == ""){
			errors.push({ field: $('#comune'+'_label'), text: 'inserire il comune ' });
		};
		if($('#catProfessionale').val() == ""){
			errors.push({ field: $('#catProfessionale'+'_label'), text: 'inserire la categoria professionale ' });
		};
		/*** professione ***/
		if($('#professione').val() == null || $('#professione').val() == ""){
			errors.push({ field: $('#professione'+'_label'), text: 'inserire la professione ' });
		};
		/*** settore di attivita ***/
		if($('#settore').val() == ""){
			errors.push({ field: $('#settore'+'_label'), text: 'inserire il settore di attivit&agrave; ' });
		};
		
	    if ($('secondoform').style.display!='none'){
	    	
	    	/*** INIZIO INTESTATARIO II ***/
			/*** DATI ANAGRAFICI ***/
		    /*** nome_int1 ***/
			if($('#nome_int1').val() == ""){
				errors.push({ field: $('#nome_int1'+'_label'), text: 'inserire il nome del secondo intestatario ' });
			}else if (checkLet($('#nome_int1'))) {
				errors.push({ field: $('#nome_int1'+'_label'), text: 'inserire correttamente il nome del secondo intestatario' });
		    }
	    	
			if($('#cognome_int1').val() == ""){
				errors.push({ field: $('#cognome_int1'+'_label'), text: 'inserire il cognome del secondo intestatario ' });
			}else if (checkLet($('#cognome_int1'))) {
				errors.push({ field: $('#cognome_int1'+'_label'), text: 'inserire correttamente il cognome del secondo intestatario' });
		    }
	    	
		    /*** DATA DI NASCITA ***/
		    var flagNascitaInt1 = false;
		    if ($('#ggNascita_int1').val() == "") {
				errors.push({ field: $('#nascita_int1'+'_label'), text: 'inserire la data di nascita del secondo intestario ' });
				flagNascitaInt1 = true;
		    } 
		    else {
				flagNascitaInt1 = checkNum($('#ggNascita_int1')); 
		   		if (flagNascitaInt1==true) {
					errors.push({ field: $('#nascita_int1'+'_label'), text: 'inserire correttamente la data di nascita del secondo intestario ' });
		   		}
		    }
		    if (flagNascitaInt1 == false) {
			    if ($('#mmNascita_int1').val() == "") {
					errors.push({ field: $('#nascita_int1'+'_label'), text: 'inserire la data di nascita del secondo intestario ' });
					flagNascitaInt1 = true;
			    } 
			    else {
					flagNascitaInt1 = checkNum($('#mmNascita_int1'));
			   		if (flagNascitaInt1==true) {
						errors.push({ field: $('#nascita_int1'+'_label'), text: 'inserire correttamente la data di nascita del secondo intestario ' });
			   		}
			    }
		    }			    
		    if (flagNascitaInt1 == false) {
			    if ($('#annoNascita_int1').val()  == "") {
					errors.push({ field: $('#nascita_int1'+'_label'), text: 'inserire la data di nascita del secondo intestario '});
					flagNascitaInt1 = true;
			    } 
			    else {
					flagNascitaInt1 = checkNum($('#annoNascita_int1'));
			   		if (flagNascitaInt1==true) {
						errors.push({ field: $('#nascita_int1'+'_label'), text: 'inserire correttamente la data di nascita del secondo intestario ' });
			   		}
			    }
		    }
		    if (flagNascitaInt1 == false) {
		        flagNascitaInt1 = ctrlData($('#annoNascita_int1') , $('#mmNascita_int1')  , $('#ggNascita_int1'), serverDate,'false');
		   		if (flagNascitaInt1==true) {
					errors.push({ field: $('#nascita_int1'+'_label'), text: 'inserire correttamente la data di nascita del secondo intestario ' });
		   		}
		    }
		    if (flagNascitaInt1 == false) {
		    	flagNascitaInt1 = ctrlDataNascita($('#annoNascita_int1') , $('#mmNascita_int1')  , $('#ggNascita_int1') , "", serverDate);
		   		if (flagNascitaInt1==true) {
					errors.push({ field: $('#nascita_int1'+'_label'), text: 'inserire correttamente la data di nascita del secondo intestario ' });
		   		}
		    }
		    /*** SESSO_int1 ***/
		    var intestatarioInt1 = $('#intestatario').val();
		    try {
			    if (intestatarioInt1 == "") {
				    chk = $("[name='sesso_int1']").is(":checked");
				    if (chk == false) {
						errors.push({ field: $('#sesso_int1'+'_label'), text: 'inserire il sesso del secondo intestario ' });
				    }    
			    }
		    }
		    catch(e) {}
		    if ($('#cfisc_int1').val() == "") {
				errors.push({ field: $('#cfisc_int1'+'_label'), text: 'inserire il codice fiscale del secondo intestario ' });
		    } 
		    else {
				var errCfisc = false;
				var msgFis2 = ControllaCF($('#cfisc_int1').val());
				var sex2='M';
				if ($('#sesso_int1_f').is(":checked")) {
					sex2='F';
				}
				var DataNascita2 = $('#ggNascita_int1').val()+'/'+$('#mmNascita_int1').val()+'/'+$('#annoNascita_int1').val();
				if (msgFis2!="") {	
					errors.push({ field: $('#cfisc_int1'+'_label'), text: 'inserire un codice fiscale corretto del secondo intestatario ' });
				}
				else {
						var verCF= verificaCodFis($('#cfisc_int1').val(), $('#cognome_int1').val() , $('#nome_int1').val() , DataNascita2, sex2 );
						if (verCF==false){
							errors.push({ field: $('#cfisc_int1'+'_label'), text: 'inserire correttamente il codice fiscale' });
						}else{
							if ($('#cfisc').val().toUpperCase() == $('#cfisc_int1').val().toUpperCase()) {	
								errors.push({ field: $('#cfisc_int1'+'_label'), text: 'inserire un codice fiscale corretto del secondo intestatario ' });
							}
						}
				}
		    }
			/*** Estero_int1 ***/
		    if (intestatarioInt1 == "") {
			    chk = $("[name='estero_int1']").is(":checked");
			    if (chk == false) {
					errors.push({ field: $('#estero_int1'+'_label'), text: 'inserire il campo nato all estero del secondo intestatario ' });
			    }
		    }
		    // SE non estero_int1 
			 var esteroFlag = "SI";
			 if ($("#estero_int1_no").is(":checked")) {
				 esteroFlag = "NO";
			 }
		    if (esteroFlag=='NO' || $("[name='estero_int1']").is(":checked")==false){
				if ( $("#provNascita_int1").val()  == "" ) {
					errors.push({ field: $('#provNascita_int1'+'_label'), text: 'inserire la provincia di nascita del secondo intestatario ' });
			    }
			    if ( $("#comuneNascita_int1").val()  == "" ) {
					errors.push({ field: $('#comuneNascita_int1'+'_label'), text: 'inserire il comune di nascita del secondo intestatario ' });
			    }
		    }else{
			    if ( $("#nazionalita_int1").val()  == "" ) {
					errors.push({ field: $('#nazionalita_int1'+'_label'), text: 'inserire la nazionalit&agrave; del secondo intestario ' });
			    }
			    if ( $("#cittadinanza_int1").val()  == "" ) {
					errors.push({ field: $('#cittadinanza_int1'+'_label'), text: 'inserire la cittadinanza del secondo intestario ' });
			    }
		    }
		    /*** INDIRIZZO_int1 DI RESIDENZA ***/
		   	//parzCompilati function  parzCompilati(indirizzo_int1, civico_int1, cap_int1, provincia_int1, comune_int1, true);
		    //-----------------------------------------------------------------------------------------------------
		   	var t = false;
		   	var d1=$('#indirizzo_int1');
		   	var d2=$('#civico_int1');
		   	var d3=$('#cap_int1');
		   	var d4=$('#provincia_int1');
		   	var d5=$('#comune_int1');
		   	var obbligatoriP=true;
			//toglo gli eventuali spazi inseriti
		    d1.value = rTrim(d1.val());
		    d2.value = rTrim(d2.val());
		    d3.value = rTrim(d3.val());
		    var emptyFilds = ((d1.val() == "") || (d2.val() == "") || (d3.val() == "") || (d4.val() == "") || (d5.val() == ""));
		    if (obbligatoriP) {
		    	if (emptyFilds) {
		    		t = true;
		    	}
		    }
		    else {
		    	if (emptyFilds && (!(d1.val() == "") || !(d2.val() == "") || !(d3.val() == "") || !(d4.val() == "") || !(d5.val() == ""))) {
		    		t = true;
		    	}
			}
		    if (t) {
				if (d1.val() == "") {
					var name= d1.attr('name');
					errors.push({ field: $('#'+name+'_label'), text: 'inserire l&#39;indirizzo del secondo intestario'});
				} 
				else if (d2.val() == "") {
					var name= d2.attr('name');
					errors.push({ field: $('#'+name+'_label'), text: 'inserire il numero civico del secondo intestario'});
				} 
				else if (d3.val() == "") {
					var name= d3.attr('name');
					errors.push({ field: $('#'+name+'_label'), text: 'inserire il cap del secondo intestatario'});
				} 
				else if (d4.val() == "") {
					var name= d4.attr('name');
					errors.push({ field: $('#'+name+'_label'), text: 'nserire la provincia di domicilio del secondo intestatario'});
				} 
				else if (d5.val() == "") {
					var name= d5.attr('name');
					errors.push({ field: $('#'+name+'_label'), text: 'inserire il comune di domicilio del secondo intestatario'});
				}
		    }
		   	//-----------------------------------------------------------------------------------------------------
		    /*** VIA/PIAZZA ***/
			if($('#indirizzo_int1').val() == ""){
				errors.push({ field: $('#indirizzo_int1'+'_label'), text: 'inserire l&#39;indirizzo del secondo intestario ' });
			};
			/*** CIVICO ***/
			if($('#civico_int1').val() == ""){
				errors.push({ field: $('#civico_int1'+'_label'), text: 'inserire il numero civico del secondo intestario ' });
			};
			/*** cap ***/
			if($('#cap_int1').val() == ""){
				errors.push({ field: $('#cap_int1'+'_label'), text: 'inserire il cap del secondo intestatario '});
			}else{
				var checkNumCap = checkNum($('#cap_int1'));
				if (checkNumCap==true){
					errors.push({ field: $('#cap_int1'+'_label'), text: 'inserire correttamente il cap del secondo intestatario ' });
				}
			}
			if($('#provincia_int1').val() == ""){
				errors.push({ field: $('#provincia_int1'+'_label'), text: 'inserire la provincia di domicilio del secondo intestatario ' });
			};
			if($('#comune_int1').val() == ""){
				errors.push({ field: $('#comune_int1'+'_label'), text: 'inserire il comune di domicilio del secondo intestatario ' });
			};
			if($('#catProfessionale_int1').val() == ""){
				errors.push({ field: $('#catProfessionale_int1'+'_label'), text: 'inserire la categoria professionale del secondo intestatario '});
			};
			/*** professione ***/
			if($('#professione_int1').val() == null || $('#professione_int1').val() == ""){
				errors.push({ field: $('#professione_int1'+'_label'), text: 'inserire la professione del secondo intestatario '});
			};
			/*** settore di attivita ***/
			if($('#settore_int1').val() == ""){
				errors.push({ field: $('#settore_int1'+'_label'), text: 'inserire il settore di attivit&agrave; del secondo intestatario ' });
			};
		}
		else {
			$('#nome_int1').val('');
		}

	//-----------------------------------------------------
	if (errors.length > 0)	{
		setHasErrors(errors, "#mol");
		valRet=false;
	}else{
		valRet=true;
	}
	return valRet;
}

//funzione d'appoggio per la function valida
function checkRadio(obj) {
	
	lun = obj.length;
	for(var i=0; i<lun; i++) {
		if (obj[i].checked) {
			return true;
		}
  	}
	return false;
}
function checkEstero(obj) {
	
	lun = obj.length;
	for(var i=0; i<lun; i++) {
    	   if (obj[i].checked) {
		
    		return true;
    	   }  
  	}
	return false;
}

function controlliCellulare(int) {
	
	with(document.mol) {
		if (int == 1) {	
		    if (prefCellulare.value == "" && cellulare.value == "") {
    			seleziona('cellulare','inserire il telefono cellulare');    
    			return false;
    		}
		    if (prefCellulare.value != "") {
				mainErrore = checkNum(prefCellulare , "cellulare");
				if (mainErrore) {
					seleziona('cellulare','inserire il prefisso del cellulare correttamente');
				   	return false;
				}
				if (prefCellulare.value.length != 3) {
				   seleziona('cellulare','inserire il prefisso del cellullare correttamente');
				   return false;
				}
			}
			else {
				seleziona('cellulare','inserire il prefisso del cellullare'); 
				return false;
			}
		    if (cellulare.value != "") {
				mainErrore = checkNum(cellulare , "cellulare");
				if (mainErrore) {
					seleziona('cellulare','inserire il numero di cellullare correttamente');
					return false;
				}
				if (cellulare.value.length != 7 && cellulare.value.length != 6) {
					seleziona('cellulare','il numero di cellulare deve essere massimo di 7 cifre');
					return false;
				}
			}
			else {
				seleziona('cellulare','inserire il numero del cellullare'); 
				return false;
			}
		    if (operatore.value == "" && (prefCellulare.value!="" || cellulare.value!="" )) {
		    	seleziona("cellulare","inserire l'operatore del cellullare nelle informazioni");
		    	return false;
		    }
		    pulisci('cellulare');
		}
		else if (int == 2) {
			
		}
	}
	return true;
}


//funzione d'appoggio per la function valida
function ctrlDataEmissione( aa , mm , gg , intest, today, errField, errLabel) {
	
	var anno = aa.value;
	var mese = mm.value;
	var giorno = gg.value;
	
	if (intest == '2') {
		var ggNascita = document.mol.ggNascita_int1.value;
		var mmNascita = document.mol.mmNascita_int1.value;
		var aaaaNascita = document.mol.annoNascita_int1.value;
	}
	if (intest == '1') {
		var ggNascita = document.mol.ggNascita.value;
		var mmNascita = document.mol.mmNascita.value;
		var aaaaNascita = document.mol.annoNascita.value;
	}
	
	
	//controllo la validita' temporale dei documenti
	var datScad = 1826;
   	var strDate1 = mese+'/'+giorno+'/'+anno;
   	var strDate2 = '06/25/2003';
	datDate1 = Date.parse(strDate1);
	datDate2 = new Date();
	datDate3 = Date.parse(strDate2);
	datediff = ((datDate2-datDate1)/(24*60*60*1000));
	datediff2 = datDate1-datDate3;
	
	if (datediff2 > 0) {
		// 10 anni
		var datScad = 3652;
	}

   	if (intest == '2') {
		if (document.mol.tipoDocumento_int1.selectedIndex==1 && datediff > datScad) {
			seleziona(errField, errLabel);
			return true;
		} 
		else if (datediff > 3652) {
			seleziona(errField, errLabel);
			return true;
		}
	} 
   	else if (intest == '1') {
		if (document.mol.tipoDocumento.selectedIndex==1 && datediff > datScad) {
			seleziona(errField, errLabel);

			return true;
		} 
		else if (datediff > 3652) {
			seleziona(errField, errLabel);
			return true;
		}
    } 
	return false;
}


//funzione d'appoggio per la function valida
function checkNum(obj) {
	var num = obj.val();
	if (num == "") {
		return true;
	}
	for(var i = 0 ; i < num.length ; i++) {
		if ((num.charAt(i) < '0') || (num.charAt(i) > '9')) {
			//break;
			return true;
		}
	}
	return false;
}

//funzione d'appoggio per la function valida
function checkLet(obj , errLabel) {
  	num = obj.val();
  	if (num == "") {
	  	return true;
  	}
  	for ( var i=0; i < num.length; i++) {
  		if (( num.charAt(i) >= '0') && (num.charAt(i) <= '9')) {
  			//seleziona(errLabel);
  			//break;
  			return true;
  		}
  	}
  	return false;
}

//funzione d'appoggio per la function valida
function ctrlData(aa , mm , gg, today, future) {
	var anno = aa.val();
	var mese = mm.val();
	var giorno = gg.val();
	var limite;
	var bisestile = false;
	//var today = new Date(serverDate)
	
	//bisogna recuperare il giorno (su 2 cifre) odierno
	var gg_corrente = today.getDate();
	if (gg_corrente < 10) {
		gg_corrente = "0" + String(gg_corrente);
	}
	//bisogna recuperare il mese (su 2 cifre) odierno
	var mm_corrente = today.getMonth() + 1;
	if (mm_corrente < 10) {
	   	mm_corrente = "0" + String(mm_corrente);
	}
	//bisogna recuperare il giorno (su 4cifre) corrente
	var aa_corrente = today.getFullYear();


    if ((giorno.length > 0) && (giorno.length < 2)) {
    	//seleziona(errField, errLabel);
    	return true;
  	}

    if (( mese.length > 0) && (mese.length < 2)) {
    	//seleziona(errField, errLabel);
    	return true;
  	}
    if ((anno.length > 0) && (anno.length < 4)) {
    	//seleziona(errField, errLabel);
    	return true;
  	}

    if ((giorno > 31) || (giorno < 1)) {
    	//seleziona(errField, errLabel);
    	return true;
    }
    if ((mese > 12) || ( mese < 1)) {
    	//seleziona(errField, errLabel);
    	return true;
    }
  	if ((anno % 4) == 0) {
  		if ((anno % 100) == 0) {
  			if ((anno%400) == 0) {
    			bisestile = true;
    		} 
    		else {
    			bisestile = false;
    		}
  		} 
  		else {
    		bisestile = true;
  		}
  	} 
  	else {
  		bisestile = false;
  	}

  	switch (mese) {
  		case '1':
  		case '3':
  		case '5':
  		case '7':
  		case '8':
  		case '10':
  		case '12':
  		case '01':
  		case '03':
  		case '05':
  		case '07':
  		case '08':
  			limite = 31;
  			break;
  		case '4':
  		case '6':
  		case '9':
  		case '04':
  		case '06':
  		case '09':
  		case '11':
  			limite=30;
  			break;
  		default:
  			limite = 28;
      		if (bisestile) {
      			limite = 29;
      		}
  	}

  	if (giorno > limite) {
		//seleziona(errField, errLabel);
    	return true;
  	}

	if (future == 'false'){
	  	if (anno > aa_corrente) {
	  		//seleziona(errField, errLabel);
	  		return true;
	  	}
	  	if (anno == aa_corrente) {
	  		if (mese > mm_corrente) {
	  			//seleziona(errField, errLabel);
	  			return true;
	  		}
	  	}
	  	if (anno == aa_corrente) {
	  		if (mese ==  mm_corrente) {
	  			if (giorno > gg_corrente) {
	  				//seleziona(errField, errLabel);
	  				return true;
	  			}
	    		}
	  	}
	}
	else if (future == 'paste'){
	  	if (anno < aa_corrente) {
	  		//seleziona(errField, errLabel);
	  		return true;
	  	}
	  	if (anno == aa_corrente) {
	  		if (mese < mm_corrente) {
	  			//seleziona(errField, errLabel);
	  			return true;
	  		}
	  	}
	}
  	return false;
}

//funzione d'appoggio per la function valida
function ctrlDataNascita(aa , mm , gg , intest, today) {
	
	var anno = aa.value;
	var mese = mm.value;
  	var giorno = gg.value;
  	//var today=new Date(serverDate);
  	//bisogna recuperare il giorno (su 2 cifre) odierno
 	var ggOggi  = today.getDate();
  	if (ggOggi < 10) {
  		ggOggi="0"+String(ggOggi);
  	}
	//bisogna recuperare il mese (su 2 cifre) odierno
	var mmOggi  = today.getMonth()+1;
	if (mmOggi < 10) {
		mmOggi = "0" + String(mmOggi);
	}
	//bisogna recuperare l'anno (su 4 cifre) corrente
	var aaaaOggi  = today.getFullYear();

	if (anno == (aaaaOggi - 18)) {
		if (mese == mmOggi) {
			if (giorno > ggOggi) {
				//seleziona(errLabel);
				return true;
			}
		}
	    if (mese > mmOggi) {
	    	//seleziona(errLabel);
	    	return true;
	    }
	}
	if ((anno > (aaaaOggi - 18)) || (anno < (aaaaOggi - 120))) {
		//seleziona( errLabel );
	    return true;    
	}
	return false;
}

//funzione d'appoggio per la function valida
function checkMail(input) {	
	var inputvalue = input.val().toLowerCase();
	var pattern = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;		//migliore
    if (!pattern.test(inputvalue)) {  
    	//seleziona(errLabel,"inserire correttamente l'indirizzo email");
		return true;   
    }
    else {
    	return false;
    }
}

function rTrim(str) {
    var newstr = str;
    while (newstr.charAt(newstr.length - 1) == " ") {
        newstr = newstr.substring(0, newstr.length - 1);
    }
    return newstr;
}

function trim(str) {
	
	var newstr = "";
	for (var i = 0; i < str.length; i++) {
		if (str.charAt(i) != " ") {
			newstr = newstr+str.charAt(i);
		}
	}
    return newstr;
}

//funzione di appoggio per controllare se ci sono campi parzialmente compilati
function parzCompilati(c1,c2,c3,c4,c5, obbligatori) {
	
	var b = false;
	//toglo gli eventuali spazi inseriti
    c1.value = rTrim(c1.value);
    c2.value = rTrim(c2.value);
    c3.value = rTrim(c3.value);
    
    var emptyFilds = ((c1.value == "") || (c2.value == "") || (c3.value == "") || (c4.value == "") || (c5.value == ""));
    
    if (obbligatori) {
    	if (emptyFilds) {
    		b = true;
    	}
    }
    else {
    	if (emptyFilds && (!(c1.value == "") || !(c2.value == "") || !(c3.value == "") || !(c4.value == "") || !(c5.value == ""))) {
    		b = true;
    	}
	}
	
    if (b) {
		//controllo su quale campo fare il focus
		if (c1.value == "") {
			seleziona(c1.getAttribute('name'));
		} 
		else if (c2.value == "") {
			seleziona(c2.getAttribute('name'));
		} 
		else if (c3.value == "") {
			seleziona(c3.getAttribute('name'));
		} 
		else if (c4.value == "") {
			seleziona(c4.getAttribute('name'));
		} 
		else if (c5.value == "") {
			seleziona(c5.getAttribute('name'));//solo il focus se no ho errore
		}
    }
	return b;
}

function verificaCodFis(FisIns, Cognome, Nome, DataNascita, Sesso) {

	var ret = true;
	FisIns = FisIns.toUpperCase();
	var first = FisIns.substring(0, 11);
	var fisCalc = CalcoloCodFis(Cognome, Nome, DataNascita, Sesso);
	var splitFis = fisCalc.split('~');
	if (first != fisCalc) {
		ret = false;
		//with (document.mol) {
			//focus
			//if (numInt == 'secondo'){
				//seleziona ('cfisc_int1','inserire correttamente il codice fiscale');
			//}
			//else if (numInt == 'primo') {
				//seleziona ('cfisc','inserire correttamente il codice fiscale');
			//}
		//}
	}
	return ret;
}

function CalcoloCodFis(Cognome, Nome, DataNascita, Sesso) {

	Cognome = Cognome.toUpperCase();
	Nome = Nome.toUpperCase();
	ggmmaa = DataNascita.split("/");
	Sesso = Sesso.toUpperCase();
	//CodiceComune = CodiceComune.toUpperCase();

	//	qui costruisco il codice
	TxtCodFis = "";
    
	//	RICAVO IL COGNOME (1-3)
	Vocali = "";
	Consonanti = "";
	for (var i = 0; i < Cognome.length; i++) {
		a = Cognome.charAt(i);
		if (/[AEIOU]/.test(a)) {
			Vocali += a;
		}
		if (/[BCDFGHJKLMNPQRSTVWXYZ]/.test(a)) {
			Consonanti += a;
		}
	}
	Consonanti = (Consonanti+Vocali+"XXX").substr(0,3);
	TxtCodFis = Consonanti; 
    
	//	RICAVO IL NOME (4-6)
	Vocali = "";
	Consonanti = "";
	for (var i = 0; i < Nome.length; i++) {
		a = Nome.charAt(i);
		if (/[AEIOU]/.test(a)) {
			Vocali += a;
		}
		if (/[BCDFGHJKLMNPQRSTVWXYZ]/.test(a)) {
			Consonanti += a;
		}
	}
	if (Consonanti.length > 3) {
		//	isolo la prima, terza e quarta consonante
		Consonanti = Consonanti.charAt(0)+Consonanti.substr(2,2);
	} 
	else {
		Consonanti = (Consonanti+Vocali+"XXX").substr(0,3);
	}
	TxtCodFis += Consonanti;
    
	//	Anno di nascita (7-8)
	aa = String(10000+parseFloat(ggmmaa[2])).substr(3);
	TxtCodFis += aa;
    
	//	Mese di nascita (9)
	TxtCodFis += (" ABCDEHLMPRST").charAt(ggmmaa[1]);
    
	//	Giorno di nascita e sesso (10-11)
	Sesso = (Sesso=="F")?140:100;
	gg = String(parseFloat(ggmmaa[0]) + Sesso).substr(1);
	TxtCodFis += gg;

	//controlli non attualmente possibili
	return (TxtCodFis);

}

function ControllaCF(cf) {
	
    var validi, i, s, set1, set2, setpari, setdisp;
    if(cf == '')  {
    	return '';
    }
    cf = cf.toUpperCase();
    if(cf.length != 16) {
        return "La lunghezza del codice fiscale non Ã¨ \n"
        +"corretta: il codice fiscale dovrebbe essere lungo\n"
        +"esattamente 16 caratteri.\n";
    }
    validi = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    for (i = 0; i < 16; i++) {
        if (validi.indexOf( cf.charAt(i) ) == -1) {
            return "Il codice fiscale contiene un carattere non valido `" +
                cf.charAt(i) +
                "'.\nI caratteri validi sono le lettere e le cifre.\n";
        }
    }
    set1 = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    set2 = "ABCDEFGHIJABCDEFGHIJKLMNOPQRSTUVWXYZ";
    setpari = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    setdisp = "BAKPLCQDREVOSFTGUHMINJWZYX";
    s = 0;
    for (i = 1; i <= 13; i += 2) {
        s += setpari.indexOf( set2.charAt( set1.indexOf( cf.charAt(i) )));
    }
    for (i = 0; i <= 14; i += 2) {
        s += setdisp.indexOf( set2.charAt( set1.indexOf( cf.charAt(i) )));
    }
    if (s%26 != cf.charCodeAt(15)-'A'.charCodeAt(0)) {
        return "Il codice fiscale non &#232; corretto:\n"+
            "il codice di controllo non corrisponde.\n";
    }
    return "";
}

function seleziona(nameFld,errFld, outFunction) {
	var flag = false;
    if (outFunction){
       flag  = true;
    }
    addValidationError(nameFld.toLowerCase()+"_td",errFld, flag);
    if (mainErrore == true) {
            $('#errorsSection').focus();
    }
    mainErrore = true;
}

function pulisci(nameFld) {
	
	}


function chgEstero(intestatario) {
	
	if (intestatario == 1) {
		var obj = document.mol.estero;
		var val = "";
		lun = obj.length;

	  	for (var i = 0; i < lun; i++) {
	  		if (obj[i].checked) {
	      		val = obj[i].value;
	    	}
	  	}
		if (val == "Si") {
		    show('natoEstero');
		    show('cittadinanzaDiv');
		    hide('natoItalia');
		    hide('comuneNascitaDiv');
		}
		else {
		    hide('natoEstero');
		    hide('cittadinanzaDiv');
		    show('natoItalia');
		    show('comuneNascitaDiv');
		}
	}else{
		var obj = document.mol.estero_int1;
		var val = "";
		lun = obj.length;

	  	for (var i = 0; i < lun; i++) {
	  		if (obj[i].checked) {
	      		val = obj[i].value;
	    	}
	  	}
		if (val == "Si") {
		    show('natoEstero_int1');
		    show('cittadinanzaDiv_int1');
		    hide('natoItalia_int1');
		    hide('comuneNascitaInt1Div');
		}
		else {
		    hide('natoEstero_int1');
		    hide('cittadinanzaDiv_int1');
		    show('natoItalia_int1');
		    show('comuneNascitaInt1Div');
		}
	}
}

function hide(idDiv) {
 
	var browserType;
	if (document.layers) {
		browserType = "nn4";
	}
	if (document.all) { 
		browserType = "ie";
	}
	if (window.navigator.userAgent.toLowerCase().match("gecko")) {
		browserType= "gecko"; 
	}

	if (browserType == "gecko") {
		document.poppedLayer = eval('$(\''+idDiv+'\')');
  	}
	else if (browserType == "ie") {
		document.poppedLayer = eval('document.all[\''+idDiv+'\']');
	}
	else {
		document.poppedLayer =eval('document.layers[\'`'+idDiv+'\']');
	}
  	//document.poppedLayer.style.visibility = "visible";
  	document.poppedLayer.style.display = "none";
}

function show(idDiv) {
	
	var browserType;
	
	if (document.layers) {
		browserType = "nn4";
	}
	if (document.all) { 
		browserType = "ie";
	}
	if (window.navigator.userAgent.toLowerCase().match("gecko")) {
	   browserType= "gecko"; 
	}
	if (browserType == "gecko") {
	     document.poppedLayer = eval('$(\''+idDiv+'\')');
	}
	else if (browserType == "ie") {
	     document.poppedLayer = eval('document.all[\''+idDiv+'\']');
	}
	else {
		document.poppedLayer = eval('document.layers[\'`'+idDiv+'\']');
	}
	document.poppedLayer.style.visibility = "visible";
	document.poppedLayer.style.display = "block";
}

function clearDateField(field) {
	
	if (isNaN(field.value)) {
		field.value = "";
	}
}

function  updateRilasciatoDa(value, suffix){	
	if (value=="Carta d'identita"){
	   $('rilasciatoDa'+suffix).value='COMUNE';
	}else if  (value=="Patente"){
	   $('rilasciatoDa'+suffix).value='PREFETTURA';
	}else if (value=="Passaporto"){
	   $('rilasciatoDa'+suffix).value='QUESTURA';
	}else {
	    $('rilasciatoDa'+suffix).value='';
	}
}

function refreshProfessione(field, slavefield, slaveFieldValue) {
	// Option("label","valore")
	var categoria_professione = field.value; 	
	var length = slavefield.length;
	slavefield.disabled=false;
	//reset select professione		
	for (var i=length-1; i >= 0; i--) {
		slavefield.options[i] = null;
	}
		
	slavefield.options[0] = new Option("Seleziona","");
	if (categoria_professione == "") {
		slavefield.options[0].selected = true;
		slavefield.disabled=true;
	}
	else {
		var newLenght = 0;
//		if (categoria_professione == "Non occupati") {
//			slavefield.options[1] = new Option("casalinga","casalinga");	
//			slavefield.options[2] = new Option("pensionato","pensionato");
//			slavefield.options[3] = new Option("disoccupato","disoccupato");
//			slavefield.options[4] = new Option("studente","studente");
//			slavefield.options[5] = new Option("militare di leva","militare di leva");
//			slavefield.options[6] = new Option("redditiere","redditiere");
//			newLenght = 6;
//		}
//		else if (categoria_professione == "Lavoratori dipendenti") {
//			slavefield.options[1] = new Option("funzionario","funzionario")
//			slavefield.options[2] = new Option("dirigente","dirigente")
//			slavefield.options[3] = new Option("impiegato","impiegato")
//			slavefield.options[4] = new Option("quadro","quadro")
//			slavefield.options[5] = new Option("a tempo determinato","a tempo determinato")	
//			slavefield.options[6] = new Option("docente universitario","docente universitario")
//			slavefield.options[7] = new Option("magistrato","magistrato")
//			slavefield.options[8] = new Option("insegnante di ruolo","insegnante di ruolo")
//			slavefield.options[9] = new Option("rappresentante del clero","rappresentante del clero")
//			slavefield.options[10] = new Option("medico ospedaliero","medico ospedaliero")
//			slavefield.options[11] = new Option("commesso","commesso")
//			slavefield.options[12] = new Option("paramedico","paramedico")
//			slavefield.options[13] = new Option("operaio specializzato","operaio specializzato")
//			slavefield.options[14] = new Option("operaio comune","operaio comune")
//			slavefield.options[15] = new Option("guardia","guardia")
//			slavefield.options[16] = new Option("bidello","bidello")
//			slavefield.options[17] = new Option("portiere","portiere")
//			slavefield.options[18] = new Option("camionista","camionista")
//			slavefield.options[19] = new Option("militare ufficiale","militare ufficiale")
//			slavefield.options[20] = new Option("militare sottoufficiale","militare sottoufficiale")
//			slavefield.options[21] = new Option("militare non graduato","militare non graduato")
//			slavefield.options[22] = new Option("vigile del fuoco","vigile del fuoco")	
//			slavefield.options[23] = new Option("vigile urbano","vigile urbano")	
//			newLenght = 23;
//		}	
//		else if (categoria_professione == "Lavoratori autonomi") {
//			slavefield.options[1] = new Option("commercialista","commercialista");
//			slavefield.options[2] = new Option("architetto","architetto");
//			slavefield.options[3] = new Option("ingegnere","ingegnere");
//			slavefield.options[4] = new Option("medico","medico");
//			slavefield.options[5] = new Option("notaio","notaio");
//			slavefield.options[6] = new Option("avvocato","avvocato");
//			slavefield.options[7] = new Option("consulente finanziario","consulente finanziario");
//			slavefield.options[8] = new Option("perito","perito");
//			slavefield.options[9] = new Option("ragioniere","ragioniere");
//			slavefield.options[10] = new Option("geometra","geometra");	
//			slavefield.options[11] = new Option("agente assicurazione","agente assicurazione");
//			slavefield.options[12] = new Option("agente","agente");
//			slavefield.options[13] = new Option("rappresentante di commercio","rappresentante di commercio");
//			slavefield.options[14] = new Option("consulente aziendale","consulente aziendale");
//			slavefield.options[15] = new Option("agricoltore diretto e simili","agricoltore diretto e simili");
//			slavefield.options[16] = new Option("autotrasportatore (proprietario)","autotrasportatore (proprietario)");
//			slavefield.options[17] = new Option("artista","artista");
//			slavefield.options[18] = new Option("sportivo professionale","sportivo professionale");
//			slavefield.options[19] = new Option("artigiano (barbiere, sarto, etc.)","artigiano (barbiere, sarto, etc.)");
//			slavefield.options[20] = new Option("commerciante","commerciante");
//			slavefield.options[21] = new Option("pubblico esercente","pubblico esercente")	;
//			slavefield.options[22] = new Option("socio di societ\340","socio di societa");
//			slavefield.options[23] = new Option("collaboratrice domestica","collaboratrice domestica");
//			slavefield.options[24] = new Option("lavoro a domicilio","lavoro a domicilio");
//			slavefield.options[25] = new Option("altro lavoro in proprio","altro lavoro in proprio");
//			newLenght = 25;
//		}
//		else 
		if (categoria_professione == "Lavoratore autonomo") {
			slavefield.options[1] = new Option("commercialista","commercialista");
			slavefield.options[2] = new Option("avvocato","avvocato");
			slavefield.options[3] = new Option("notaio","notaio");
			slavefield.options[4] = new Option("medico","medico");
			slavefield.options[5] = new Option("ingegnere","ingegnere");
			slavefield.options[6] = new Option("architetto","architetto");
			slavefield.options[7] = new Option("geometra","geometra");
			slavefield.options[8] = new Option("ragioniere","ragioniere");
			slavefield.options[9] = new Option("perito","perito");
			slavefield.options[10] = new Option("consulente finanziario","consulente finanziario");
			slavefield.options[11] = new Option("agente assicurativo","agente assicurativo");
			slavefield.options[12] = new Option("agente","agente");
			slavefield.options[13] = new Option("rappresentante di commercio","rappresentante di commercio");
			slavefield.options[14] = new Option("consulente aziendale","consulente aziendale");
			slavefield.options[15] = new Option("autotrasportatore (proprietario)","autotrasportatore (proprietario)");
			slavefield.options[16] = new Option("artista","artista");
			slavefield.options[17] = new Option("sportivo professionale","sportivo professionale");
			slavefield.options[18] = new Option("agricoltore coldiretto e simili","agricoltore coldiretto e simili");
			slavefield.options[19] = new Option("artigiano (barbiere, sarto, ecc...)","artigiano (barbiere, sarto, ecc...)");
			slavefield.options[20] = new Option("commerciante","commerciante");	
			slavefield.options[21] = new Option("pubblico esercente","pubblico esercente");	
			slavefield.options[22] = new Option("socio di societa'","socio di societa'");
			slavefield.options[23] = new Option("collaboratrice domestica","collaboratrice domestica");
			slavefield.options[24] = new Option("lavoro a domicilio","lavoro a domicilio");
			slavefield.options[25] = new Option("altro lavoro in proprio","altro lavoro in proprio");
			newLenght = 25;
		}
		else if (categoria_professione == "Lavoratore dipendente a tempo indeterminato") {
			slavefield.options[1] = new Option("dirigente","dirigente");
			slavefield.options[2] = new Option("funzionario","funzionario");
			slavefield.options[3] = new Option("clero","clero");
			slavefield.options[4] = new Option("medico ospedaliero","medico ospedaliero");
			slavefield.options[5] = new Option("impiegato","impiegato");
			slavefield.options[6] = new Option("operaio specializzato","operaio specializzato");
			slavefield.options[7] = new Option("paramedico","paramedico");
			slavefield.options[8] = new Option("commesso","commesso");
			slavefield.options[9] = new Option("operaio comune","operaio comune");
			slavefield.options[10] = new Option("guardia","guardia");
			slavefield.options[11] = new Option("bidello","bidello");
			slavefield.options[12] = new Option("portiere","portiere");
			slavefield.options[13] = new Option("camionista","camionista");
			slavefield.options[14] = new Option("militare ufficiale","militare ufficiale");
			slavefield.options[15] = new Option("militare sotto ufficiale","militare sotto ufficiale");
			slavefield.options[16] = new Option("militare non graduato","militare non graduato");
			slavefield.options[17] = new Option("vigile del fuoco","vigile del fuoco");
			slavefield.options[18] = new Option("vigile urbano","vigile urbano");
			slavefield.options[19] = new Option("docente universitario","docente universitario");	
			slavefield.options[20] = new Option("magistrato","magistrato");	
			slavefield.options[21] = new Option("insegnante di ruolo","insegnante di ruolo");
			newLenght = 21;
		}
		else if (categoria_professione == "Lavoratore dipendente a tempo determinato / prestazione d'opera (sup.30 mesi)") {
			slavefield.options[1] = new Option("dirigente","dirigente");
			slavefield.options[2] = new Option("funzionario","funzionario");
			slavefield.options[3] = new Option("clero","clero");
			slavefield.options[4] = new Option("medico ospedaliero","medico ospedaliero");
			slavefield.options[5] = new Option("impiegato","impiegato");
			slavefield.options[6] = new Option("operaio specializzato","operaio specializzato");
			slavefield.options[7] = new Option("paramedico","paramedico");
			slavefield.options[8] = new Option("commesso","commesso");
			slavefield.options[9] = new Option("operaio comune","operaio comune");
			slavefield.options[10] = new Option("guardia","guardia");
			slavefield.options[11] = new Option("bidello","bidello");
			slavefield.options[12] = new Option("portiere","portiere");
			slavefield.options[13] = new Option("camionista","camionista");
			slavefield.options[14] = new Option("militare ufficiale","militare ufficiale");
			slavefield.options[15] = new Option("militare sotto ufficiale","militare sotto ufficiale");
			slavefield.options[16] = new Option("militare non graduato","militare non graduato");
			slavefield.options[17] = new Option("vigile del fuoco","vigile del fuoco");
			slavefield.options[18] = new Option("vigile urbano","vigile urbano");
			slavefield.options[19] = new Option("docente universitario","docente universitario");	
			slavefield.options[20] = new Option("magistrato","magistrato");	
			slavefield.options[21] = new Option("insegnante di ruolo","insegnante di ruolo");
			newLenght = 21;
		}
		else if (categoria_professione == "Lavoratore dipendente a tempo determinato / prestazione d'opera (inf.30 mesi)") {
			slavefield.options[1] = new Option("dirigente","dirigente");
			slavefield.options[2] = new Option("funzionario","funzionario");
			slavefield.options[3] = new Option("clero","clero");
			slavefield.options[4] = new Option("medico ospedaliero","medico ospedaliero");
			slavefield.options[5] = new Option("impiegato","impiegato");
			slavefield.options[6] = new Option("operaio specializzato","operaio specializzato");
			slavefield.options[7] = new Option("paramedico","paramedico");
			slavefield.options[8] = new Option("commesso","commesso");
			slavefield.options[9] = new Option("operaio comune","operaio comune");
			slavefield.options[10] = new Option("guardia","guardia");
			slavefield.options[11] = new Option("bidello","bidello");
			slavefield.options[12] = new Option("portiere","portiere");
			slavefield.options[13] = new Option("camionista","camionista");
			slavefield.options[14] = new Option("militare ufficiale","militare ufficiale");
			slavefield.options[15] = new Option("militare sotto ufficiale","militare sotto ufficiale");
			slavefield.options[16] = new Option("militare non graduato","militare non graduato");
			slavefield.options[17] = new Option("vigile del fuoco","vigile del fuoco");
			slavefield.options[18] = new Option("vigile urbano","vigile urbano");
			slavefield.options[19] = new Option("docente universitario","docente universitario");	
			slavefield.options[20] = new Option("magistrato","magistrato");	
			slavefield.options[21] = new Option("insegnante di ruolo","insegnante di ruolo");
			newLenght = 21;
		}
		else if (categoria_professione == "Lavoratore con contratto di lavoro particolare (es.: a progetto, di formazione, ecc.)") {
			slavefield.options[1] = new Option("dirigente","dirigente");
			slavefield.options[2] = new Option("funzionario","funzionario");
			slavefield.options[3] = new Option("clero","clero");
			slavefield.options[4] = new Option("medico ospedaliero","medico ospedaliero");
			slavefield.options[5] = new Option("impiegato","impiegato");
			slavefield.options[6] = new Option("operaio specializzato","operaio specializzato");
			slavefield.options[7] = new Option("paramedico","paramedico");
			slavefield.options[8] = new Option("commesso","commesso");
			slavefield.options[9] = new Option("operaio comune","operaio comune");
			slavefield.options[10] = new Option("guardia","guardia");
			slavefield.options[11] = new Option("bidello","bidello");
			slavefield.options[12] = new Option("portiere","portiere");
			slavefield.options[13] = new Option("camionista","camionista");
			slavefield.options[14] = new Option("lavoratore con contratto a tempo determinato","lavoratore con contratto a tempo determinato");
			slavefield.options[15] = new Option("militare ufficiale","militare ufficiale");
			slavefield.options[16] = new Option("militare sotto ufficiale","militare sotto ufficiale");
			slavefield.options[17] = new Option("militare non graduato","militare non graduato");
			slavefield.options[18] = new Option("vigile del fuoco","vigile del fuoco");
			slavefield.options[19] = new Option("vigile urbano","vigile urbano");
			slavefield.options[20] = new Option("docente universitario","docente universitario");	
			slavefield.options[21] = new Option("magistrato","magistrato");	
			slavefield.options[22] = new Option("insegnante di ruolo","insegnante di ruolo");
			newLenght = 22;
		}
		else if (categoria_professione == "Soggetto senza occupazione") {
			slavefield.options[1] = new Option("redditiere","redditiere");
			slavefield.options[2] = new Option("casalinga","casalinga");
			slavefield.options[3] = new Option("pensionato","pensionato");
			slavefield.options[4] = new Option("disoccupato","disoccupato");
			slavefield.options[5] = new Option("militare di leva","militare di leva");
			slavefield.options[6] = new Option("studente","studente");
			newLenght = 6;
		}
		if (slaveFieldValue != "") {
			for (var index = 0; index < newLenght; index++) {
				if (slavefield.options[index].value == slaveFieldValue) {
					slavefield.options[index].selected = true;
					index = newLenght;
				}
			}
		}
	}
}

function updateStatoRicImm(finalita,nomeAcquisto,nomeSurroga,statoRicercaValue) {

	var selIndex = $('subFinalita').selectedIndex;
	var selValue = $('subFinalita').value;
	var statoRicerca = $('statoRicerca');
	if (selIndex == 0) {
		statoRicerca.selectedIndex = 0;
		statoRicerca.disabled = true;
		statoRicerca.style.display = "";
		$('uniqueStatoRicerca').style.display = "none";
	}
	else {
		statoRicerca.disabled = false;
		var srSelIndex = 0;
		if ( (finalita == nomeSurroga) || (finalita == nomeAcquisto && selIndex == 3) ) {
			srSelIndex = 5;
		}
		statoRicerca.selectedIndex = srSelIndex;
		if (srSelIndex != 0) {
			$('uniqueStatoRicerca').innerHTML = '<strong>' + statoRicerca.options[srSelIndex].text + '</strong>';
			statoRicerca.style.display = "none";
			$('uniqueStatoRicerca').style.display = "";
		}
		else {
			statoRicerca.style.display = "";
			if (statoRicercaValue) {
				statoRicerca.value = statoRicercaValue;
			}			
			$('uniqueStatoRicerca').style.display = "none";
		}
	}
}

function showAllPageErrors() {
	var allWF = $('allWrongFields');
    var allErrors = (allWF) ? allWF.value : '';
    if (allErrors.length > 0) {
            var errorsArray = allErrors.split(';');
            for (var index = 0; index < errorsArray.length; index++) {
                    var field = errorsArray[index];
                    var errmsg ="";
                    if (field=='convenzioneWeb'){
                       errmsg = "codice convenzione errato";
                    }else{
                       errmsg = "campo errato";
                    }
                    seleziona(errorsArray[index],errmsg,true);
            }
            doValidations('*onlyShow');
    }
}

function setValueField(fieldId, value) {
	var obj = $(fieldId);
	if (fieldId == "intestatario") {
		value = value.replace(/.*~/,'');
	}else {
		obj.value = value;
	}
}

function replaceIfNotDigit(str) {
    return str.replace(/[^0-9]/g, "");
}