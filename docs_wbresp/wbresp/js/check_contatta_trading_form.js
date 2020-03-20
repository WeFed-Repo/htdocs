$(function() {
	var validateContatti = $( "#richiestaRegistrazione" ).validate({
		invalidHandler: function(form, validator) {
				var errors = validator.numberOfInvalids();
				if (errors) {                    
					spostaFocusOnError(validator,errors);
				}
			},
			submitHandler: function(form) {
				param = '';
				ajaxFormSubmitAsynch('richiestaRegistrazione',param, handleRichiestaRegistrazione,'esitoContatti')
			},
			rules: {
				nome: {
					required:true,
					checkLetter: true,
					minlength: 2,
					setServerError: true
					},
				cognome: {
					required:true,
					checkLetter: true,
					minlength: 2,
					setServerError: true
					},
				codicefiscale: {
					required: true,
					rangelength: [16, 16],
					checkCodiceFiscale: true,
					setServerError: true
					},
				prefCellulare: {
					required: true,
		            number: true,
		            rangelength: [3, 3],
					setServerError: true
					},
				cellulare: {
					required: true,
					number: true,
					rangelength: [6, 7],
					setServerError: true
				},
				prefTelefono:{
					number: true,
					maxlength: 4,
					required: {
						depends: function(element) {
							return $("#telefono2").is(":filled");
						}
					},
					setServerError: true
				},
				telefono2:{
					number: true,
					required: {
						depends: function(element) {
							return $("#prefTelefono").is(":filled");
						}
					},
					setServerError: true
				},
				email: {
					required: true,
					checkMail:true,
					setServerError: true
				},
				D7: {
					required: true,
					setServerError: true
				},
				D8: {
					required: true,
					setServerError: true
				}
				},
				errorPlacement: function (error,element) {
			if (element.attr('type')==='radio') {
				error.appendTo(element.closest('.has-error')).addClass('bottom');
				$('#D7-error,#D8-error').removeClass('bottom');
			}
			else if (element.hasClass('combobox'))
			{
				error.appendTo(element.closest('.has-error'));
			}
			else {
				error.insertAfter(element)
			};
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
	submitCombobox('richiestaRegistrazione');
	
	
	$('#modalContattaTrading').on('hidden.bs.modal', function () {
		showResetForm();
		validateContatti.resetForm();
	})
	$('#bottoneOk').on('click', function () {
		showResetForm();
		validateContatti.resetForm();
	})
})
$.validator.messages.required = 'Verifica';
$.validator.messages.number = 'Verifica';
$.validator.messages.maxlength = 'Verifica';
$.validator.messages.minlength = 'Verifica';
$.validator.messages.range = 'Verifica';
$.validator.messages.rangelength = 'Verifica';
$.validator.messages.email = 'Verifica';
jQuery.validator.addMethod("checkLetter", function(value, element) {
	return ctrlLetter(element);
},'Verifica');
jQuery.validator.addMethod("checkCodiceFiscale", function(value, element) {
		return ctrlCodiceFiscale('codicefiscale','cognome','nome');
	},'Verifica');
jQuery.validator.addMethod("checkMail", function(value, element) {
		return ctrlMail('email');
		
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
spostaFocus('prefCellulare','cellulare',3);
function resetForm(idForm) {
	var form = $('#' + idForm);
	//form.find('select').selectpicker('val', '');
	form.find('select').val('');
	form.find('input').val('');
	form.find('input[type="radio"]').attr('checked',false);
	form.find('.form-group').removeClass('has-error').removeClass('has-success');
	form.show();
}
function showResetForm(){
	resetForm('richiestaRegistrazione');
	$('#esitoContatti').hide();
	$('#esitoContatti').find('.esitoTxt').html('');
	$('#modalContattaTrading').find('.modal-header p').show();
 }
function handleRichiestaRegistrazione(jsonResponse){
	if (jsonResponse.ESITO && jsonResponse.ESITO == "OK"){
			$('#esitoContatti').show();
			$('#esitoContatti').find('.esitoTxt').html('<strong>Grazie per aver richiesto l\'aiuto del Trading Team.<br>Sarai ricontattato da un nostro esperto. </p>');
			$('#modalContattaTrading').find('.modal-header p').hide();
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
		else{// altri errori
			$('#esitoContatti').show();
			var mess = "<strong>Errore tecnico durante l'invio della richiesta.</strong>";
			$('#esitoContatti').find('.esitoTxt').html(mess).show();
			$('#richiestaRegistrazione').hide();
			$('#modalContattaTrading').find('.modal-header p').hide();
		}	 		
	}	
}

