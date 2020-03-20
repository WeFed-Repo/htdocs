/*
 * globals $:false, AJAXGenericCallASync:false, PDFObject:false, typeDocument:false, checkForm:false, isCertificatoAttivo:false, console:false
 */
/* exported embedPdf, prepareToSign */
"use strict";
// funzione generica per aprire i pdf inclusi
function openPdfEmbed(firstPDF) {
	if ($('.pdfEmbedded').length > 0) {
		$('.embed').click(function(event) {
			event.preventDefault();
			fixIEPdfEmbed();
			var parentPdf = $(this).closest('.pdfEmbedded');
			if (firstPDF) {
				parentPdf.find('.pdfToOpen').slideDown();
				parentPdf.find('.closePdfEmbedd').show();
			}
			if (parentPdf.find('.infoDis').length > 0) {
				parentPdf.find('.infoDis').remove();
				parentPdf.find('.infoKo').prop('checked', true);
				parentPdf.find('.infoKo').valid();
				parentPdf.find('.infoKo').remove();
				parentPdf.find('.infoOk').removeClass('ignore').removeClass('hidden-input');
			}
			parentPdf.find('.infoOk').click(function() {
				if (parentPdf.find('.infoDis').length) {
					return false;
				}
			});
		});
		$('.closePdfEmbedd').click(function() {
			$(this).closest('.pdfEmbedded').find('.pdfToOpen').slideUp();
			$(this).hide();
		});
	}
}
// funzione generica per includere i pdf
function embedPdf(docArray, ancoreArray) {
	var i, firstPDF, pdfObj = [], page;
	for (i = 0; i < docArray.length; i++) {
		if (typeof ancoreArray === "undefined") {
			page = 1;
		} else {
			page = ancoreArray[i];
		}
		pdfObj.push(new PDFObject({
		    url : docArray[i],
		    pdfOpenParams : {
		        navpanes : 1,
		        view : "FitH",
		        page : page
		    }
		}));
		pdfObj[i].embed("pdf" + (i + 1));
		firstPDF = pdfObj[0].embed("pdf1");
		if (!firstPDF) {
			$('.embed').eq(i).attr('href', docArray[i] + '#page=' + page);
		}
		openPdfEmbed(firstPDF);
	}
	if (!firstPDF) {
		var linkToOpen = $('.embed');
		linkToOpen.each(function() {
			$(this).bind('click', function() {
				window.open($(this).attr('href'));
			});
		});
	}
}
// gestione scroll pagina con pdf embed iE
function fixIEPdfEmbed() {
	if (navigator.appVersion.indexOf("MSIE") != -1 && $('.pdfObject').length > 0) {
		$(window).bind('scroll', function() {
			var i;
			for (i = 0; i < $('.pdfToOpen').length; i++)
				if ($(window).scrollTop() >= $('.pdfEmbedded').eq(0).offset().top - 160) {
					$('.navbar,.sectionTitle').hide();
				} else {
					$('.navbar,.sectionTitle').show();
				}
		});
	}
}
$(function() {
	/* previene il click sulla label disabled */
	$('input[type="checkbox"]').bind('click', function() {
		if ($(this).hasClass('hidden-input ignore')) {
			$(this).prop('checked', false)
		}
	})

	/*
	 * var params = { pdfOpenParams: { navpanes: 1, view: "FitH", pagemode: "thumbs" } };
	 */

	// funzioni di controllo dei form dei tre diversi step
	/*************************************************************************************************************************************************
	 * STEP1
	 ************************************************************************************************************************************************/
	// step1
	var formEl = $('#aolStep7');
	formEl.validate({
	    "rules" : {
	        "informativa1KO" : {
		        "required" : true
	        },
	        "presa_visione_PRECONT" : {
		        "required" : true
	        },
	        "informativa2KO" : {
		        "required" : true
	        },
	        "presa_visione_BAILIN" : {
		        "required" : true
	        }

	        
	    },
	    "messages" : {
	        "informativa1KO" : {
		        "required" : "Clicca su leggi per aprire l'informativa"
	        },
	        "presa_visione_PRECONT" : {
		        "required" : "Seleziona"
	        },
	        "informativa2KO" : {
		        "required" : "Clicca su leggi per aprire l'informativa"
	        },
	        "presa_visione_BAILIN" : {
		        "required" : "Seleziona"
	        }
	    }
	});
	$('#btnSubmit7').click(function() {
		checkForm(formEl);
	});
	// fine step1
	/*************************************************************************************************************************************************
	 * STEP2
	 ************************************************************************************************************************************************/
	// step2
	var formEl2 = $('#aolStep7b');
	formEl2.validate({
	    "rules" : {
	        "informativa2KO" : {
		        "required" : true
	        },
	        "presa_visione_ADEVER" : {
		        "required" : true
	        },
	        "informativa3KO" : {
		        "required" : true
	        },
	        "presa_visione_FATCA" : {
		        "required" : true
	        },
	        "informativa4KO" : {
		        "required" : true
	        },
	        "presa_visione_CONDIZ" : {
		        "required" : true
	        },
	        "informativa5KO" : {
		        "required" : true
	        },
	        "attestazione_ricezione" : {
		        "required" : true
	        },
	        "pin_firma" : {
		        "required" : true
	        },
	        "pin_firma1" : {
		        "required" : true
	        },
	        "codice_otp" : {
		        "required" : true
	        },
	        "codice_otp1" : {
		        "required" : true
	        }
	    },
	    "messages" : {
	        "informativa2KO" : {
		        "required" : "Clicca su leggi per aprire l'informativa"
	        },
	        "presa_visione_ADEVER" : {
		        "required" : "Seleziona"
	        },
	        "informativa3KO" : {
		        "required" : "Clicca su leggi per aprire l'informativa"
	        },
	        "presa_visione_FATCA" : {
		        "required" : "Seleziona"
	        },
	        "informativa4KO" : {
		        "required" : "Clicca su leggi per aprire l'informativa"
	        },
	        "presa_visione_CONDIZ" : {
		        "required" : "Seleziona"
	        },
	        "informativa5KO" : {
		        "required" : "Clicca su leggi per aprire l'informativa"
	        },
	        "attestazione_ricezione" : {
		        "required" : "Seleziona"
	        },
	        "pin_firma" : {
		        "required" : "Compila"
	        },
	        "pin_firma1" : {
		        "required" : "Compila"
	        },
	        "codice_otp" : {
		        "required" : "Compila"
	        },
	        "codice_otp1" : {
		        "required" : "Compila"
	        }
	    }
	});
	$('#btnSubmit7b').click(function() {
		checkForm(formEl2);
	});

	$('#firmaBtn1').click(function() {
		if (!$('#firmaBtn1').hasClass('disabled')) {
			formEl2.valid();
			if (formEl2.valid()) {
				sign(typeDocument[0], 1);
			}
		}
	});
	
	$('#resendOtp1').click(function() {
		if (!$('#resendOtp1').hasClass('disabled')) {
			resendOtp(typeDocument[0], 1);		
		}
	});

	// Controllo checkbox per invio OTP
	var checkInPage = $('input[type="checkbox"]').not('.step7b');
	checkInPage.bind('click', function() {
		var checkInPageVis = $('input[type="checkbox"]:visible'), checkInPageCheck = $('input[type="checkbox"]:checked');
		if (checkInPageCheck.length == checkInPageVis.length) {
			prepareToSign(typeDocument[0], 1);
		}
	});

	/*************************************************************************************************************************************************
	 * STEP3
	 ************************************************************************************************************************************************/
	// step3
	var formEl3 = $('#aolStep7c');
	formEl3.validate({
	    "rules" : {
	        "informativa6KO" : {
		        "required" : true
	        },
	        "clausole_vessatorie" : {
		        "required" : true
	        },
	        "pin_firma2" : {
		        "required" : true
	        },
	        "codice_otp2" : {
		        "required" : true
	        },
	        "informativa7KO" : {
		        "required" : true
	        },
	        "pin_firma3" : {
		        "required" : true
	        },
	        "codice_otp3" : {
		        "required" : true
	        }
	    },
	    "messages" : {
	        "informativa6KO" : {
		        "required" : "Clicca su leggi per aprire l'informativa"
	        },
	        "clausole_vessatorie" : {
		        "required" : "Seleziona"
	        },
	        "pin_firma2" : {
		        "required" : "Compila"
	        },
	        "codice_otp2" : {
		        "required" : "Compila"
	        },
	        "informativa7KO" : {
		        "required" : "Clicca su leggi per aprire l'informativa"
	        },
	        "pin_firma3" : {
		        "required" : "Compila"
	        },
	        "codice_otp3" : {
		        "required" : "Compila"
	        }
	    }
	});
	
	$('#btnSubmit7c').click(function() {
		checkForm(formEl3);
	});
	
	// Controllo checkbox per invio OTP
	$('#informativa6OK').bind('click', function() {
		if ($('#informativa6OK').is(':checked')) {
			prepareToSign(typeDocument[0], 2);
		}
	});
	
	$('#resendOtp2').click(function() {
		if (!$('#resendOtp2').hasClass('disabled')) {
			resendOtp(typeDocument[0], 2);
		}
	});
	
	var isValidFormA = false, isValidFormB = false;
	$('#firmaBtn2').click(function() {
		if (!$('#firmaBtn2').hasClass('disabled')) {
			isValidFormA = $('#informativa6OK,#informativa6KO,#pin_firma2,#codice_otp2').valid();
			if (isValidFormA) {
				sign(typeDocument[0], 2);
			}
		}
	});
	
	// Controllo checkbox per invio OTP
	$('#informativa7OK').bind('click', function() {
		if ($('#informativa7OK').is(':checked')) {
			prepareToSign(typeDocument[1], 3);
		}
	});
	
	$('#resendOtp3').click(function() {
		if (!$('#resendOtp3').hasClass('disabled')) {
			resendOtp(typeDocument[1], 3);
		}
	});
	
	$('#firmaBtn3').click(function() {
		if (!$('#firmaBtn3').hasClass('disabled')) {
			isValidFormB = $('#informativa7OK,#informativa7KO,#pin_firma3,#codice_otp3').valid();
			if (isValidFormB && !$('#firmaBtn3').is(":disabled")) {
				sign(typeDocument[1], 3);
			}	
		}
	});

});

var prepareToSign = function(typeDocument, step) {
	if (isCertificatoAttivo) {

		showMsg('Attendi l\'invio del Codice OTP sul tuo cellulare.');

		var parameters = 'comando=PREPARE' + '&typeDocument=' + typeDocument + '&step=' + step;
		console.log("CALL firmaDigitale, parameters [" + parameters + "]");
		AJAXGenericCallASync('POST', '/aol/firmaDigitale.do',
		// Success
		function(data) {
			if (data.isEsito) {
				// Invio otp
				sendOtp(typeDocument, step, data.dossierId);
			} else {
				showMsg(data.descr);
			}
		},
		// Error
		function() {
			showMsg('Errore chiamata, riprova');
		}, parameters);
	}
};

var sendOtp = function(typeDocument, nFirma, dossierId) {
	if (isCertificatoAttivo) {
		var parameters = 'comando=SENDOTP' + '&typeDocument=' + typeDocument + '&step=' + nFirma + '&dossierId' + nFirma + '=' + dossierId;
		console.log("CALL firmaDigitale, parameters [" + parameters + "]");
		AJAXGenericCallASync('POST', '/aol/firmaDigitale.do',
		// Success
		function(data) {
			console.log("CALL firmaDigitale, parameters [" + parameters + "] esito [" + data.isEsito + "]");

			// Nascondo overlay di attesa
			$('#overlayInfo').modal('hide');

			if (data.isEsito) {

				// Abilito il box firma
				visBoxFirma(nFirma, true);

				// Valorizzo dossier per controllo
				$('#dossierId' + nFirma).val(dossierId);

			} else {
				showMsg(data.descr);
			}
		},
		// Error
		function() {
			showMsg('Errore chiamata, riprova.');
		}, parameters);
	}
};

var resendOtp = function(typeDocument, nFirma) {
	// TODO Verificare con una variabile di controllo se la prima sendOtp è stata inviata correttamente
	if (isCertificatoAttivo) {
		var parameters = 'comando=RESENDOTP&typeDocument=' + typeDocument + '&step=' + nFirma + '&dossierId' + nFirma + '=' + $('#dossierId' + nFirma).val();
		console.log("CALL firmaDigitale, parameters [" + parameters + "]");
		AJAXGenericCallASync('POST', '/aol/firmaDigitale.do',
		// Success
		function(data) {
			console.log("CALL firmaDigitale, parameters [" + parameters + "] esito [" + data.isEsito + "]");
			if (data.isEsito) {
				// TODO
			} else {
				showMsg(data.descr);
			}
		},
		// Error
		function() {
			showMsg('Errore chiamata, riprova.');
		}, parameters);
	}
};

var sign = function(typeDocument, nFirma) {
	if (isCertificatoAttivo) {

		showMsg('Attendi l\'apposizione della firma sul documento.');

		var parameters = 'comando=SIGN' + '&typeDocument=' + typeDocument + '&step=' + nFirma + '&dossierId' + nFirma + '=' + $('#dossierId' + nFirma).val();;
		console.log("CALL firmaDigitale, parameters [" + parameters + "]");
		parameters = parameters + "&pin=" + $('#pin_firma' + nFirma).val() + "&otp=" + $('#codice_otp' + nFirma).val();
		AJAXGenericCallASync('POST', '/aol/firmaDigitale.do',
		// Success
		function(data) {
			console.log("CALL firmaDigitale, parameters [" + parameters + "] esito [" + data.isEsito + "]");

			// Nascondo overlay di attesa
			$('#overlayInfo').modal('hide');

			if (data.isEsito) {
				signComplete(nFirma);
				showMsg('L\'apposizione della firma digitale si e\' conclusa correttamente');
			} else {
				showMsg(data.descr);
			}
		},
		// Error
		function() {
			// showMsg('Codice OTP e/o PIN errato/i.');
			showMsg('Errore chiamata, riprova');
		}, parameters);
	}
};

var signComplete = function(nFirma) {
	switch (nFirma) {
	case 1:

		$('#informativa2OK,#informativa2KO').attr('disabled', true);
		$('#informativa3OK,#informativa3KO').attr('disabled', true);
		$('#informativa4OK,#informativa4KO').attr('disabled', true);

		$('#signOK' + nFirma).val('1');
		if (checkSigns()) {
			$('#btnSubmit7b').attr('disabled', false).removeClass('disabled');
		}
		break;
	case 2:
		$('#informativa6OK,#informativa6KO').attr('disabled', true);

		$('#signOK' + nFirma).val('1');
		if (checkSigns()) {
			$('#btnSubmit7c').attr('disabled', false).removeClass('disabled');
		}
		break;
	case 3:
		$('#informativa7OK,#informativa7KO').attr('disabled', true);

		$('#signOK' + nFirma).val('1');
		if (checkSigns()) {
			$('#btnSubmit7c').attr('disabled', false).removeClass('disabled');
		}
		break;
	}

	// Disabilito il box firma
	visBoxFirma(nFirma, false);
};

var checkSigns = function(msg) {
	var ret = true;
	var signToVerify = $('.signOK');
	signToVerify.each(function() {
		ret = ret && $(this).val() == '1';
	});
	console.log("CALL firmaDigitale, firme completate [" + ret + "]");
	return ret;
};

var showMsg = function(msg) {
	$('#text').html('');
	$('#title').html('Attenzione');
	if (msg && msg != '') {
		$('#text').html(msg);
	} else {
		$('#text').html('Errore chiamata, riprova.');
	}
	$('#overlayInfo').modal('show');
};

var visBoxFirma = function(nFirma, toAble) {
	if (toAble) {
		$('#pin_firma' + nFirma).attr('disabled', false).removeClass('disabled');
		$('#codice_otp' + nFirma).attr('disabled', false).removeClass('disabled');
		$('#resendOtp' + nFirma).removeAttr('style');
		$('#firmaBtn' + nFirma).attr('disabled', false).removeClass('disabled');
	} else {
		$('#pin_firma' + nFirma).attr('disabled', true).addClass('disabled');
		$('#codice_otp' + nFirma).attr('disabled', true).addClass('disabled');
		$('#resendOtp' + nFirma).attr('style', 'display:none');
		$('#firmaBtn' + nFirma).attr('disabled', true).addClass('disabled');
	}
};
