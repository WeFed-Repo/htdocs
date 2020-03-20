$(function() {
	var validateFreeMember = $( "#richiestaRegistrazione" ).validate({
		invalidHandler: function(form, validator) {
				var errors = validator.numberOfInvalids();
				if (errors) {                    
					spostaFocusOnError(validator,errors);
				}
				
		},
		rules: {
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
			codicefiscale : {
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
			D2: {
				required: true,
				setServerError: true
			},
			D4: {
				required: true,
				setServerError: true
			},
			D5: {
				required: true,
				setServerError: true
			},
			D6: {
				required: true,
				setServerError: true
			},
			D11: {
				required: true,
				setServerError: true
			},
			D13: {
				required: true,
				setServerError: true
			},
			D1: {
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
			cap: {
				number: true,
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
			passwordField: {
				setServerError: true
			},
			passwordField2: {
				setServerError: true
			},
			j_captcha_response: {
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

	$('#email').bind('keyup',function() {
		$('#usernameFM').html($(this).val());
	})
	submitCombobox('richiestaRegistrazione');
	viewServerValidation('fieldsErrors',':');
})
spostaFocus('ggNascita','mmNascita',2);
spostaFocus('mmNascita','annoNascita',2);
spostaFocus('cap','provincia',5);
spostaFocus('prefCellulare','cellulare',3);
spostaFocus('prefTelefono','telefono2',4);
generaCaptcha();
abilitaSelect('provincia','citta');
	$.validator.messages.required = 'Verifica';
	$.validator.messages.number = 'Verifica';
	$.validator.messages.range = 'Verifica';
	$.validator.messages.rangelength = 'Verifica';
	$.validator.messages.maxlength = 'Verifica';
	$.validator.messages.email = 'Verifica';
jQuery.validator.addMethod("checkAnnoNascita", function(value, element) {
		return ctrlDataNascita('ggNascita','mmNascita','annoNascita',element);
		
	},'Verifica');
jQuery.validator.addMethod("checkCodiceFiscale", function(value, element) {
		return ctrlCodiceFiscale('codicefiscale','cognome','nome','ggNascita','mmNascita','annoNascita','sesso');
	},'Verifica');
jQuery.validator.addMethod("checkLetter", function(value, element) {
		return ctrlLetter(element);
		
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
