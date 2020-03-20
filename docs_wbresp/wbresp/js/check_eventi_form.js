$(function() {
	var validateEventi = $( "#richiestaRegistrazione" ).validate({
		invalidHandler: function(form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {                    
				spostaFocusOnError(validator,errors);
				if(!$('.openDoc').hasClass('opened'))
				{
					$('#liberatoria').attr('disabled',true);
				}
			}
		},
		submitHandler: function(form) {
				if(libTrue) {
					param = '';
					ajaxFormSubmitAsynch('richiestaRegistrazione', param, handleRichiestaRegistrazioneEventi,'esitoContatti')
				}
		},
		rules: {
			isCliente: {
				required:true,
				setServerError: true
			},
			nome: {
				required:true,
				checkLetter: true,
				setServerError: true
			},
			cognome: {
				required:true,
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
			mmNascita: {
				required: true,
				number: true,
				rangelength: [2, 2],
				range: [01, 12],
				checkAnnoNascita: true,
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
			sesso: {
				required: true,
				setServerError: true
			},
			codicefiscale: {
				required: true,
				rangelength: [16, 16],
				checkCodiceFiscale: true,
				setServerError: true
			},
			email: {
				required: true,
				checkMail:true,
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
			prefTelefono: {
				number: true,
				maxlength: 4,
				required: {
					depends: function(element) {
						return $("#telefono2").is(":filled");
					}
				},
				setServerError: true
			},
			telefono2: {
				number: true,
				required: {
					depends: function(element) {
						return $("#prefTelefono").is(":filled");
					}
				},
				setServerError: true
			},
			D2: {
				required: true,
				setServerError: true
			},
			D6: {
				required: true,
				setServerError: true
			},
			D14: {
				required: true,
				setServerError: true
			},
			categoria: {
				required: true,
				setServerError: true
			},
			D7: {
				required: true,
				setServerError: true
			},
			D8: {
				required: true,
				setServerError: true
			},
			liberatoria: {
				required: true
			}
		},	
		errorPlacement: function (error,element) {
			if (element.attr('type')==='radio')
			{
				error.appendTo(element.closest('.has-error'));
				if (element.attr('name')==='sesso')
				{
					error.addClass('bottom');
				}
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
	//abilito il check della liberatoria altrimneti non fa controllo validazione
	$( "#richiestaRegistrazione" ).find('button:not(\'.dropdown-toggle\')').bind('click',function() {
		$('#liberatoria').attr('disabled',false);
		libTrue = $('#liberatoria').is(':checked') ? true : false;
	})
	$('.openDoc').bind('click', function() {
		$(this).addClass('opened');
		if($('#liberatoria').is(':disabled')){$('#liberatoria').attr('disabled',false).trigger('click')}
	})
	$('#modalEventi').on('shown.bs.modal', function () {
		viewServerValidation('fieldsErrors',':');
	})
	$('#modalEventi').on('hidden.bs.modal', function () {
		 
		 //$('#richiestaRegistrazione').find('select').selectpicker('val', '').selectpicker('refresh');
		 $('#richiestaRegistrazione').find('select').val('');
		 
		 $('#richiestaRegistrazione').find('input[type="text"]').val('');
		 $('#citta').closest('.combobox').prop('disabled', true);
		 //$('#citta').closest('.combobox').selectpicker('refresh');
		 $('.openDoc').removeClass('opened');
		 $('#liberatoria').trigger('click').attr('disabled',true);
		 $('#richiestaRegistrazione').find('input[type="radio"]').attr('checked',false);
		 $('#richiestaRegistrazione').find('input[type="checkbox"]').attr('checked',false);
		 validateEventi.resetForm();
		 $('#richiestaRegistrazione').find('.form-group').removeClass('has-error').removeClass('has-success');
		 $('#richiestaRegistrazione').show();
		 $('#esitoContatti').find('.esitoTxt').html('');
		 $('#richiestaRegistrazione').find('input[type="radio"]').attr('checked',false);
		 $('#esitoContatti').hide();
		 $('#modalEventi').find('h2, .btn-whlit-print,.title-content img').show();
	  })
	submitCombobox('richiestaRegistrazione');
	viewServerValidation('fieldsErrors',':');
	spostaFocus('ggNascita','mmNascita',2);
	spostaFocus('mmNascita','annoNascita',2);
	spostaFocus('prefCellulare','cellulare',3);
	spostaFocus('prefTelefono','telefono2',4);
	abilitaSelect('provincia','citta');
})

jQuery.validator.addMethod("checkLetter", function(value, element) {
		return ctrlLetter(element);
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
jQuery.validator.addMethod("checkAnnoNascita", function(value, element) {
		return ctrlDataNascita('ggNascita','mmNascita','annoNascita',element);
		
	},'Verifica')
jQuery.validator.addMethod("checkCodiceFiscale", function(value, element) {
		return ctrlCodiceFiscale('codicefiscale','cognome','nome','ggNascita','mmNascita','annoNascita','sesso');
	},'Verifica');
jQuery.validator.addMethod("checkMail", function(value, element) {
		return ctrlMail('email');
		
	},'Verifica');
$.validator.messages.required = 'Verifica';
$.validator.messages.number = 'Verifica';
$.validator.messages.range = 'Verifica';
$.validator.messages.rangelength = 'Verifica';
$.validator.messages.maxlength = 'Verifica';
$.validator.messages.email = 'Verifica';
function handleRichiestaRegistrazioneEventi(jsonResponse){
	if (jsonResponse.ESITO && jsonResponse.ESITO == "OK"){
			$('#esitoContatti').show();
			$('#esitoContatti').find('.esitoTxt').html('Verr&agrave; inviata una mail di conferma all\'indirizzo mail che hai comunicato.');
			$('#richiestaRegistrazione').hide();
		
	}else{
		//errore di server sui campi
		if(jsonResponse.ESITO && jsonResponse.ESITO == "KO" && jsonResponse.CAMPI_ERRORE){
			serverError = true;
			fieldsErrorsArray = jsonResponse.CAMPI_ERRORE.split('|');
			for (var index = 0; index < fieldsErrorsArray.length; index++) {
				$('#richiestaRegistrazione').find("input[name='"+fieldsErrorsArray[index]+"']").valid();
			}
			serverError = false;
			
		}
		else if(jsonResponse.ESITO && jsonResponse.ESITO == "KO" && jsonResponse.MSG_ERRORE_TOP) {
			$('#esitoContatti').show();
			$('#esitoContatti').find('.esitoTxt').html('<strong>' + jsonResponse.MSG_ERRORE_TOP + '</strong>' + '<p>' + jsonResponse.MSG_ERRORE_BOTTOM + '</p>').css('text-align','left').show();
			$('#richiestaRegistrazione').hide();
			$('#modalEventi').find('#esitoContatti h2, .btn-whlit-print,#esitoContatti img').hide();
		}
		else{// altri errori
			$('#esitoContatti').show();
			var mess = "<strong>Errore tecnico durante l'invio della richiesta.</strong>";
			$('#esitoContatti').find('.esitoTxt').html(mess).show();
			$('#richiestaRegistrazione').hide();
			$('#modalEventi').find('#esitoContatti h2, .btn-whlit-print,#esitoContatti img').hide();
		}	 		
	}	
}
