$(function() {

	var validateLogin = $("#loginUser").validate({
	    invalidHandler : function(form, validator) {
		    var errors = validator.numberOfInvalids();
		    if (errors) {
			    spostaFocusOnError(validator, errors);
		    }
	    },
	    rules : {
	        userName : {
	            required : true,
	            rangelength : [ 16, 16 ]
	        },
	        password : {
		        required : true
	        },
	        confermaPassword : {
		        required : true
	        },
	        mail : {
		        required : true
	        },
	    },
	    messages : {
	        userName : {
	            required : "Compila",
	            rangelength : "La lunghezza del codice fiscale non &egrave; corretta"
	        },
	        password : {
		        required : "Compila",
	        },
	        confermaPassword : {
		        required : "Compila",
	        },
	        mail : {
		        required : "Compila",
	        },
	    },
	    highlight : function(element, errorClass, validClass, error) {
		    $(element).closest(".form-group").addClass("has-error").removeClass("has-success");
	    },
	    unhighlight : function(element, errorClass, validClass, error) {

		    if ($(element).val() !== '') {
			    $(element).parents(".form-group").eq(0).addClass("has-success").removeClass("has-error");
		    } else {
			    $(element).parents(".form-group").eq(0).removeClass("has-success").removeClass("has-error");
		    }
	    }
	});

	$('#recuperaPsw,#recPwsUrl').bind('click', function(event) {
		event.preventDefault();
		var userVal = $('input[name=\'userName\']').val(), textMess = '';
		if (userVal === '') {
			textMess = '&Egrave; necessario inserire il codice fiscale per poter continuare.';
			$('#recuperaPswMsg').find('.title-content').html(textMess);
			$('#recuperaPswMsg').modal('show');
		} else if (userVal !== '' && userVal.length < 16) {
			textMess = 'Il codice fiscale deve essere di 16 caratteri';
			$('#recuperaPswMsg').find('.title-content').html(textMess);
			$('#recuperaPswMsg').modal('show');
		} else {
			location.href = $(this).attr('href') + '&cf=' + userVal;
		}
	});

	// Login apertura conto
	var formStatoAperturaconto = $('#formStatoAperturaconto');
	if (formStatoAperturaconto.length) {
		$("#btn-invia").click(function(event) {
			var otpenabled;
			event.preventDefault();

			// Controllo del codice fiscale
			if (formStatoAperturaconto.valid()) {
				otpenabled = $(".otpenabled");
				if (otpenabled.is(":visible")) {

					// formStatoAperturaconto.submit();
					validaotp();
					
				} else {

					// Propone il campo OTP
					// otpenabled.show();

					sendotp();
				}
			}
		});
		$("#recuperaOtp").click(function(event) {
			var otpenabled;
			event.preventDefault();

			// Controllo del codice fiscale
			if (formStatoAperturaconto.valid()) {
				var otpenabled;
				event.preventDefault();
				
				// Controllo del codice fiscale
				if (formStatoAperturaconto.valid()) {
					otpenabled = $(".otpenabled");
					if (otpenabled.is(":visible")) {
						sendotp();
					}
				}
			}
		});
		formStatoAperturaconto.validate({
		    "rules" : {
			    "userName" : {
			        "required" : true,
			        "rangelength" : [ 16, 16 ],
			        "codicefiscale" : [ "", "", "", "" ]
			    }
		    // , "otp": "required" //FIXME mi da errore anche se campo non è visibile
		    },
		    "messages" : {
			    "userName" : {
			        "required" : "Compila",
			        "rangelength" : "La lunghezza del codice fiscale non &egrave; corretta",
			        "codicefiscale" : "Verifica"
			    }
		    ,"otp": "Compila" //FIXME mi da errore anche se campo non è visibile
		    }
		});
	}

	// Login apertura conto
	var formAol = $('#aol');
	if (formAol.length) {
		$("#btn-invia").click(function(event) {
			var otpenabled;
			event.preventDefault();

			// Controllo del codice fiscale
			if (formAol.valid()) {
				otpenabled = $(".otpenabled");
				if (otpenabled.is(":visible")) {
					formAol.submit();
				} else {
					// Propone il campo OTP
					otpenabled.show();
				}
			}
		});
		formAol.validate({
		    "rules" : {
			    "password" : {
			        "required" : true,
			        "rangelength" : [ 8, 30 ]
			    }
		    },
		    "messages" : {
			    "password" : {
			        "required" : "Compila",
			        "rangelength" : "Almeno 8 caratteri"
			    }
		    }
		});
	}
});

showError = function(msg) {
	$('#title').html('Attenzione');
	$('#text').html(msg);
	$('#overlayInfo').modal('show');
};
