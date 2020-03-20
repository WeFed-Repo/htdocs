$(function() {
	var validateContatti = $( "#inviaerroreinfo" ).validate({
			invalidHandler: function(form, validator) {
				var errors = validator.numberOfInvalids();
				if (errors) {                    
					spostaFocusOnError(validator,errors);
				}
			},
			submitHandler: function(form) {
				form.submit();
				$('#sendemailLogin').find('.title-content').html('<strong>Ti ringraziamo per averci contattato</strong><p>Riceverai un\'email quando il servizio sar&agrave; nuovamente disponibile.<br\/><br\/>Webank - Banca Popolare di Milano</p>');
				$('#sendemailLogin').modal('show');
			},
			rules: {
				nome: {
					required:true,
					checkLetter: true
				},
				e_mail: {
					required: true,
					checkMail:true
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
})
$.validator.messages.required = 'Verifica';
jQuery.validator.addMethod("checkLetter", function(value, element) {
		return ctrlLetter(element);
},'Verifica');
jQuery.validator.addMethod("checkMail", function(value, element) {
		return ctrlMail('e_mail');		

	},'Verifica');