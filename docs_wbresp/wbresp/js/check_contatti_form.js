$(function() {
	var validateContatti = $( "#formBoxNumeriVerdi" ).validate({
			invalidHandler: function(form, validator) {
				var errors = validator.numberOfInvalids();
				if (errors) {                    
					spostaFocusOnError(validator,errors);
				}
			},
			submitHandler: function(form) {
				param = '';
				ajaxFormSubmitAsynch('formBoxNumeriVerdi',param, handleBoxNumeriVerdi,'esitosendemail')
			},
			rules: {
				typeRic: {
					required:true,
					setServerError: true
				},
				nome: {
					required: true,
					checkLetter: true,
					setServerError: true
				},
				cognome: {
					required: true,
					checkLetter: true,
					setServerError: true
				},
				e_mail: {
					required: true,
					checkMail:true,
					setServerError: true
				},
				j_captcha_response: {
					required: true,
					setServerError: true
				}
			},
			errorPlacement: function (error,element) {
			if (element.attr('type')==='radio') {
				error.appendTo(element.closest('.has-error')).addClass('bottom');
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
	
	
	submitCombobox('formBoxNumeriVerdi');
	 
	$('select[name=\'typeRic\']').bind('change', function () {
		var selectedSelect = $(this).val(),
		selectedSelectText='';
		switch (selectedSelect) {
			case 'Sono gia cliente':
				selectedSelectText = 'Per una migliore gestione della richiesta, ti invitiamo a scriverci dalla tua sezione privata del sito di Webank.'
				break;
			case 'Modifica email':
				selectedSelectText='<ul><li><strong>accedi all\'\area privata</strong> inserendo i tuoi codici di accesso</li><li>clicca su Identit&agrave; e sicurezza > Recapiti > Email</li><li><strong>modifica l\'\indirizzo</strong> email precedentemente inserito</li></li>inserisci i codici di controllo che riceverai tramite <strong>sms e al nuovo indirizzo email</strong></li></ul><strong>Se desideri ulteriori informazioni, prosegui con la compilazione del form.</strong>';
				break;
			case 'Recupero codici accesso':
				selectedSelectText= 'Se hai <strong>smarrito o dimenticato user ID o  password di I livello</strong>, contatta direttamente il numero verde di Supporto gestione conto <strong>800 060 070</strong><br><br><strong>Se invece hai smarrito la Carta Servizi Telematici puoi richiederne una nuova direttamente online.</strong><br>Effettua normalemente la procedura di accesso al sito. Nella pagina dove dovresti inserire la passwordi di II livello, clicca sul &quot;Hai perso la Carta Servizi Telematici?&quot; e segui la procedura indicata.<br>Al primo accesso successivo alla ricezione della Carta, ti chiederemo di darne conferma online.<br><br><strong>Se desideri ulteriori informazioni, prosegui con la compilazione del form.</strong>'
				break;
			case 'Info conto e/o carte':
				selectedSelectText= 'Se desideri <strong>informazioni sul tuo conto e/o sulle tue carte</strong>, accedi all\'\area privata inserendo i tuoi codici di accesso  e <strong>consulta</strong> le sezioni <strong>Sportello e/o Carte.</strong>'
				break;
			default:
				selectedSelectText = '';
		}
		if(selectedSelectText != '')
		{
			$('#suggerimenticorto strong').html('Suggerimento');
			$('#suggerimenticorto p').html(selectedSelectText);
			$('#suggerimenticorto').show();
		}
		else {
			$('#suggerimenticorto').hide();
			//alert(selectedSelectText);
		}
	  })
	  validateContatti.resetForm();
	  
	  $('#modalContatti').on('hidden.bs.modal', function () {
		 $('#esitosendemail,#suggerimenticorto').hide();
		 $('#formBoxNumeriVerdi').show();
		 //$('#formBoxNumeriVerdi').find('select').selectpicker('deselectAll').selectpicker('refresh');
		 //$('#formBoxNumeriVerdi').find('select').selectpicker('val', '');
		 $('#formBoxNumeriVerdi').find('select').val('');
		 $('#formBoxNumeriVerdi').find('input').val('');
		 $('#formBoxNumeriVerdi').find('textarea').val('');
		 validateContatti.resetForm();
		 $('#modalContatti').find('.form-group').removeClass('has-error').removeClass('has-success');
	  })
})
$.validator.messages.required = 'Verifica';
$.validator.messages.number = 'Verifica';
$.validator.messages.range = 'Verifica';
$.validator.messages.rangelength = 'Verifica';
$.validator.messages.email = 'Verifica';
jQuery.validator.addMethod("checkLetter", function(value, element) {
		return ctrlLetter(element);
},'Verifica');
jQuery.validator.addMethod("checkMail", function(value, element) {
		return ctrlMail('e_mail');		

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


function handleBoxNumeriVerdi(jsonResponse){
	if (jsonResponse.ESITO && jsonResponse.ESITO == "OK"){
		$('#esitosendemail').html('<strong>Grazie per averci contattato!</strong><p>Risponderemo al pi&ugrave; presto alla tua segnalazione.</p>').show();;
		$('#formBoxNumeriVerdi').hide();
		
	}else{
		//errore captcha, genero nuovo captcha e riporto i dati
		if(jsonResponse.ESITO_CAPTCHA){
			$('.captchaImg').attr('src', './generaIMG.do?a='+Math.random()+ "'");
			serverError = true;
			//$( "#contactUserCaptcha").addClass('serverError');
			$( "#contactUserCaptcha" ).valid();
			serverError = false;
			//$( "#contactUserCaptcha").removeClass('serverError');
		}
		/*else if(jsonResponse.ESITOCOD ){   //errore codice
			var mess = "<strong>Errore durante l'invio della richiesta (codice "+jsonResponse.ESITOCOD+" ).</strong>";
			$('#esitosendemail').html(mess).show();
			$('#formBoxNumeriVerdi').hide();
			
		}*/ else{   // altri errori
			var mess = "<strong>Errore tecnico durante l'invio della richiesta.</strong>";
			$('#esitosendemail').html(mess).show();
			$('#formBoxNumeriVerdi').hide();
		}	 		
	}	
}
