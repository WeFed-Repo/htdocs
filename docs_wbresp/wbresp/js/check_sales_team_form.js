$(function() {
	var validateSalesTeam = $( "#chatPromoForm" ).validate({
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
				D2: {
					required: true,
					setServerError: true
				},
				D6: {
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
				D15: {
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
	submitCombobox('chatPromoForm');
	viewServerValidation('fieldsErrors',':');
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