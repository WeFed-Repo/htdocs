$(function() {
	var validateMol = $( "#mol" ).validate({
		invalidHandler: function(form, validator) {
				popolaConvenzioni();
				var errors = validator.numberOfInvalids();
				if (errors) {                    
					spostaFocusOnError(validator,errors);
					if(!$('#infoPrivacy').hasClass('opened')){ $('#visione_1').attr('disabled',true); }
					if(!$('#allMutui').hasClass('opened')){ $('#visione_2').attr('disabled',true); }
					if(!$('#trasparenza').hasClass('opened')){ $('#visione_3').attr('disabled',true); }
				}
		},
		submitHandler: function(form) {
				popolaConvenzioni();
				form.submit();
		},
		rules: {
			statoRicerca: {
				required:true,
				setServerError: true
			},
			provImmobile: {
				required:true,
				setServerError: true
			},
			mmRogito: {
				required: true,
				rangelength: [2, 2],
				number: true,
				range: [01, 12],
				setServerError: true
			},
			annoRogito: {
				checkAnnoRichiesta: true,
				required: true,
				rangelength: [4, 4],
				number: true,
				setServerError: true
			},
			prefCellulare: {
				required: true,
				rangelength: [3, 3],
				number: true,
				setServerError: true
			},
			cellulare: {
				required: true,
				rangelength: [6, 7],
				number: true,
				setServerError: true
			},
			email: {
				required: true,
				checkMail:true,
				setServerError: true
			},
			nome: {
				required: true,
				checkLetter: true,
				setServerError: true
			},
			nome_int1: {
				required: true,
				checkLetter: true,
				setServerError: true
			},
			cognome: {
				required: true,
				checkLetter: true,
				setServerError: true
			},
			cognome_int1: {
				required: true,
				checkLetter: true,
				setServerError: true
			},
			ggNascita: {
				required: true,
				number: true,
				rangelength: [2, 2],
				range: [01, 31],
				checkAnnoNascita: true,
				setServerError: true
			},
			ggNascita_int1: {
				required: true,
				number: true,
				rangelength: [2, 2],
				range: [01, 31],
				checkAnnoNascita_int1: true,
				setServerError: true
			},
			mmNascita: {
				required: true,
				number: true,
				rangelength: [2, 2],
				range: [01, 12],
				checkAnnoNascita: true,
				setServerError: true
			},
			mmNascita_int1: {
				required: true,
				number: true,
				rangelength: [2, 2],
				range: [01, 12],
				checkAnnoNascita_int1: true,
				setServerError: true
			},
			annoNascita: {
				required: true,
				number: true,
				rangelength: [4, 4],
				range: [(aa_corrente - 120), aa_corrente - 18],
				checkAnnoNascita: true,
				setServerError: true
			},
			annoNascita_int1: {
				required: true,
				number: true,
				rangelength: [4, 4],
				range: [(aa_corrente - 120), aa_corrente - 18],
				checkAnnoNascita_int1: true,
				setServerError: true
			},
			sesso: {
				required: true,
				setServerError: true
			},
			sesso_int1: {
				required: true,
				setServerError: true
			},
			estero: {
				required: true,
				setServerError: true
			},
			estero_int1: {
				required: true,
				setServerError: true
			},
			cfisc : {
				required: true,
				rangelength: [16, 16],
				checkCodiceFiscale: true,
				setServerError: true
			},
			cfisc_int1 : {
				required: true,
				rangelength: [16, 16],
				checkCodiceFiscale_int1: true,
				setServerError: true
			},
			provNascita: {
				required: true,
				setServerError: true
			},
			provNascita_int1: {
				required: true,
				setServerError: true
			},
			nazionalita: {
				required: true,
				setServerError: true
			},
			nazionalita_int1: {
				required: true,
				setServerError: true
			},
			cittadinanza: {
				required: true,
				setServerError: true
			},
			cittadinanza_int1: {
				required: true,
				setServerError: true
			},
			comuneNascita:{
				required: true,
				setServerError: true
			},
			comuneNascita_int1:{
				required: true,
				setServerError: true
			},
			indirizzo: {
				required: true,
				setServerError: true
			},
			indirizzo_int1: {
				required: true,
				setServerError: true
			},
			civico: {
				required: true,
				setServerError: true
			},
			civico_int1: {
				required: true,
				setServerError: true
			},
			cap : {
				required: true,
				number: true,
				setServerError: true
			},
			cap_int1 : {
				required: true,
				number: true,
				setServerError: true
			},
			provincia: {
				required: true,
				setServerError: true
			},
			provincia_int1: {
				required: true,
				setServerError: true
			},
			comune: {
				required: true,
				setServerError: true
			},
			comune_int1: {
				required: true,
				setServerError: true
			},
			catProfessionale: {
				required: true,
				setServerError: true
			},
			catProfessionale_int1: {
				required: true,
				setServerError: true
			},
			professione: {
				required: true,
				setServerError: true
			},
			professione_int1: {
				required: true,
				setServerError: true
			},
			settore: {
				required: true,
				setServerError: true
			},
			settore_int1: {
				required: true,
				setServerError: true
			},
			visione_1: {
				required: true,
				setServerError: true
			},
			visione_2: {
				required: true,
				setServerError: true
			},
			visione_3: {
				required: true,
				setServerError: true
			},
			prefTelefono: {
				number: true,
				maxlength: 4,
				required: {
					depends: function(element) {
						return $("#telefono").is(":filled");
					}
				},
				setServerError: true
			},
			telefono: {
				number: true,
				required: {
					depends: function(element) {
						return $("#prefTelefono").is(":filled");
					}
				},
				setServerError: true
			},
			prefUfficio:{
				number: true,
				maxlength: 4,
				required: {
					depends: function(element) {
						return $("#ufficio").is(":filled");
					}
				},
				setServerError: true
			},
			ufficio:{
				number: true,
				required: {
					depends: function(element) {
						return $("#prefUfficio").is(":filled");
					}
				},
				setServerError: true
			},
			codPromotore: {
				checkCodicePromotore: true,
				setServerError: true
			},
			convenzioneWeb: {
				setServerError: true
			},
			codPresentatore: {
				setServerError: true
			}
		},
		errorPlacement: function (error,element) {
			if (element.attr('name')==='sesso' || element.attr('name')==='estero' || element.attr('name')==='sesso_int1' || element.attr('name')==='estero_int1') {
				error.appendTo(element.closest('.has-error')).addClass('bottom');
			}
			else if (element.attr('type')==='checkbox')
			{
				error.addClass('labelCheck').appendTo(element.closest('.has-error'));
			}
			else if (element.hasClass('combobox'))
			{
				error.appendTo(element.closest('.has-error'));
			}
			else {
				error.insertAfter(element);
			}
		},
		highlight: function (element, errorClass, validClass,error) {
			 $(element).closest( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
		},
		unhighlight: function (element, errorClass, validClass,error) {
			
			if($(element).val()!='')
			{
			$(element).parents( ".form-group").eq(0).addClass( "has-success" ).removeClass( "has-error" );
			}
			else
			{
			 $(element).parents( ".form-group").eq(0).removeClass( "has-success" ).removeClass( "has-error" );
			}
		}
	})
	//abilito il check dei documenti altrimenti non fa controllo validazione
	$( "#mol" ).find('button:not(\'.dropdown-toggle\')').bind('click',function() {
		$('#visione_1').attr('disabled',false);
		visTrue1 = $('#visione_1').is(':checked') ? true : false;
		$('#visione_2').attr('disabled',false);
		visTrue2 = $('#visione_2').is(':checked') ? true : false;
		$('#visione_3').attr('disabled',false);
		visTrue3 = $('#visione_3').is(':checked') ? true : false;
	})
	$('#infoPrivacy').bind('click', function() {
		$(this).addClass('opened');
		if($('#visione_1').is(':disabled')){$('#visione_1').attr('disabled',false).trigger('click')}
	})
	$('#allMutui').bind('click', function() {
		$(this).addClass('opened');
		if($('#visione_2').is(':disabled')){$('#visione_2').attr('disabled',false).trigger('click')}
	})
	$('#trasparenza').bind('click', function() {
		$(this).addClass('opened');
		if($('#visione_3').is(':disabled')){$('#visione_3').attr('disabled',false).trigger('click')}
	})
	$(".comprimi").click(function(){
		$('.addElement').find('*').removeClass('has-error');
		$('.addElement').find('*').removeClass('has-success');
		$('.addElement').find('label.error').remove();
		$('.addElement').find('input').val('');
		//$('.addElement').find('select').selectpicker('val', '');
		$('.addElement').find('select').val('');

	});
	 //funzione hide e show campi esteri
   $('input[name=\'estero\']').bind('click',function(index){
		if($(this).index($('input[name=\'estero\']'))==0)
		{
		  $('#natoItalia, #comuneNascitaDiv').hide();
		  $('#natoEstero, #cittadinanzaDiv').show();
		}
		else {
			$('#natoItalia, #comuneNascitaDiv').show();
			$('#natoEstero, #cittadinanzaDiv').hide();
		}
		
		//$('#natoItalia .combobox, #natoEstero .combobox, #comuneNascitaDiv .combobox, #cittadinanzaDiv .combobox ').selectpicker('val', '').closest('.form-group').removeClass('has-success').removeClass('has-error').find('label.error').remove();
		//$('#natoItalia .combobox, #natoEstero .combobox, #comuneNascitaDiv .combobox, #cittadinanzaDiv .combobox ').selectpicker('refresh');
		$('#natoItalia select, #natoEstero select, #comuneNascitaDiv select, #cittadinanzaDiv select ').val('').closest('.form-group').removeClass('has-success').removeClass('has-error').find('label.error').remove();
	});
   $('input[name=\'estero_int1\']').bind('click',function(index){
		if($(this).index($('input[name=\'estero_int1\']'))==0)
		{
		  $('#natoItalia_int1, #comuneNascitaDiv_int1').hide();
		  $('#natoEstero_int1, #cittadinanzaDiv_int1').show();
		}
		else {
			$('#natoItalia_int1, #comuneNascitaDiv_int1').show();
			$('#natoEstero_int1, #cittadinanzaDiv_int1').hide();
		}
		
		//$('#natoItalia_int1 .combobox, #natoEstero_int1 .combobox, #comuneNascitaDiv_int1 .combobox, #cittadinanzaDiv_int1 .combobox ').selectpicker('val', '').closest('.form-group').removeClass('has-success').removeClass('has-error').find('label.error').remove();
		//$('#natoItalia_int1 .combobox, #natoEstero_int1 .combobox, #comuneNascitaDiv_int1 .combobox, #cittadinanzaDiv_int1 .combobox ').selectpicker('refresh');
		$('#natoItalia_int1 select, #natoEstero_int1 select, #comuneNascitaDiv_int1 select, #cittadinanzaDiv_int1 select').val('').closest('.form-group').removeClass('has-success').removeClass('has-error').find('label.error').remove();
	}) 
    $('#catProfessionale,#catProfessionale_int1').bind('change',function(event){
		setCatprofessione(event.target.id)
	})
	submitCombobox('mol');
	viewServerValidation('allWrongFields','|');
 })
//unico messaggio di errore per tutti i campi
	$.validator.messages.required = 'Verifica';
	$.validator.messages.number = 'Verifica';
	$.validator.messages.range = 'Verifica';
	$.validator.messages.rangelength = 'Verifica';
	$.validator.messages.maxlength = 'Verifica';
	$.validator.messages.email = 'Verifica';
	jQuery.validator.addMethod("checkAnnoRichiesta", function(value, element) {
		return ctrlAnnoRogito('annoRogito');
	},'Verifica');
	jQuery.validator.addMethod("checkMail", function(value, element) {
		return ctrlMail('email');
		
	},'Verifica');
	jQuery.validator.addMethod("checkLetter", function(value, element) {
		return ctrlLetter(element);
		
	},'Verifica');
	jQuery.validator.addMethod("checkAnnoNascita", function(value, element) {
		return ctrlDataNascita('ggNascita','mmNascita','annoNascita',element);
		
	},'Verifica');
	jQuery.validator.addMethod("checkCodiceFiscale", function(value, element) {
		return ctrlCodiceFiscale('cfisc','cognome','nome','ggNascita','mmNascita','annoNascita','sesso');
	},'Verifica');
	
	//metodi intestatario secondo intestatario
	jQuery.validator.addMethod("checkAnnoNascita_int1", function(value, element) {
		return ctrlDataNascita('ggNascita_int1','mmNascita_int1','annoNascita_int1',element);
		
	},'Verifica');
	jQuery.validator.addMethod("checkCodiceFiscale_int1", function(value, element) {
		return ctrlCodiceFiscale('cfisc_int1','cognome_int1','nome_int1','ggNascita_int1','mmNascita_int1','annoNascita_int1','sesso_int1');
	},'Verifica');
	jQuery.validator.addMethod("checkCodicePromotore", function(value, element) {
		return ctrlCodicePromotore(value,element);
	},'Verifica');
	jQuery.validator.addMethod("setServerError", function(value, element) {
		if(serverError)
		{		
			return false
		}
		else {
		   return true
		}

	},'Verifica');
	
//funzione per focu su campo successivo
   spostaFocus('mmRogito','annoRogito',2);
   spostaFocus('prefCellulare','cellulare',3);
   spostaFocus('cellulare','operatore',7);
   spostaFocus('ggNascita','mmNascita',2);
   spostaFocus('mmNascita','annoNascita',2);
   spostaFocus('ggNascita_int1','mmNascita_int1',2);
   spostaFocus('mmNascita_int1','annoNascita_int1',2);
   spostaFocus('prefTelefono','telefono',4);
   spostaFocus('prefUfficio','ufficio',4);
   abilitaSelect('provNascita','comuneNascita');
   abilitaSelect('provincia','comune');
   abilitaSelect('provNascita_int1','comuneNascita_int1');
   abilitaSelect('provincia_int1','comune_int1');
//FUNZIONI PER I CONTROLLI
function ctrlAnnoRogito(aa) {
	var	anno = $('#' + aa).val();
	if (anno < aa_corrente) {
			return false;
	}
	else if(anno==aa_corrente)
	{
		if($('#mmRogito').val() < mm_corrente)
		{
			return false;
		}
		else {
		  return true;
		}
	}
	else {
		return true
	}
	
}

function ctrlCodicePromotore(value,element) {
	var valuePromotore = value.toUpperCase(),
		onlyNumber = /^\d+$/;
		 if (valuePromotore!=""){
		 if (valuePromotore.indexOf('PF') == -1) {
			  if (onlyNumber.test(valuePromotore)) {
				  return true;
			  }
			  else {
				   return false;
			  }
		  } 
		  else if (valuePromotore.indexOf('PF') == 0) {
			if (onlyNumber.test(valuePromotore.substring(2))) {
				  return true;
		    }
			else {
			     return false;
			}
		  } 
		  
		  else {
		    return true;
		  }
		}
		else {
			 return true;
		}
	  
}
function popolaConvenzioni() {
	var CodPreVal = $('#codPresentatore').val();
	if($('#convenzioneWeb').val() == 'GROUPONM1' && CodPreVal.indexOf('WEPRO-')!=0) {$('#codPresentatore').val('WEPRO-'+CodPreVal);}
}
