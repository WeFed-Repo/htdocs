/* globals $:false, setFormGroupCell:false, setFormGroupDate:false, checkForm:false */
"use strict";
$(function() {
	var numPanel = $('.accordion-group > .panel').length, mono = !numPanel, numInt = mono ? 1 : numPanel, formEl = $('#aolStep5'), formRules = {
	    "rules" : {
		    "capitalizzazione_interessi" : {
			    "required" : true
		    }
	    },
	    "messages" : {
		    "capitalizzazione_interessi" : {
			    "required" : "Seleziona"
		    }
	    }
	}, formShowPanelError, formValidator, i;

	// Rules
	formRules.rules.titolare = "required";
	formRules.messages.titolare = "Seleziona";
	formRules.rules.usoConto = "required";
	formRules.messages.usoConto = "Seleziona";

	for (i = 1; i <= numInt; ++i) {
		/** * RULES ** */

		formRules.rules["politicEspostaAv_int" + i] = "required";
		formRules.rules["intestatario_int" + i] = "required";
		formRules.rules["professioneAv_int" + i] = "required";
		formRules.rules["dettaglioSettoreAv_int" + i] = "required";
		formRules.rules["statoAttivitaAv_int" + i] = "required";
		formRules.rules["provinciaAttivitaAv_int" + i] = "required";
		formRules.rules["origineRedditoAv_int" + i] = "required";
		formRules.rules["originePatrimonioAv_int" + i] = "required";
		formRules.rules["redditoAnnuoAv_int" + i] = "required";

		/** * MESSAGES ** */
		formRules.messages["politicEspostaAv_int" + i] = "Seleziona";
		formRules.messages["intestatario_int" + i] = "Seleziona";
		formRules.messages["professioneAv_int" + i] = "Seleziona";
		formRules.messages["dettaglioSettoreAv_int" + i] = "Seleziona";
		formRules.messages["statoAttivitaAv_int" + i] = "Seleziona";
		formRules.messages["provinciaAttivitaAv_int" + i] = "Seleziona";
		formRules.messages["origineRedditoAv_int" + i] = "Seleziona";
		formRules.messages["originePatrimonioAv_int" + i] = "Seleziona";
		formRules.messages["redditoAnnuoAv_int" + i] = "Seleziona";
	}

	if (!mono) {
		formRules.invalidHandler = function() {
			// Al submit in caso di errori fa espandere i panel che li contengono
			formShowPanelError = true;
		};

		formRules.showErrors = function() {
			// Mostra gli errori
			this.defaultShowErrors();

			if (formShowPanelError) {
				formShowPanelError = false;
				// Apre i panel che contengono errori
				formEl.find('.panel-collapse').not('.in').each(function() {
					var panel = $(this);
					if (panel.find('.error').not('label').length) {
						panel.collapse('show');
					}
				});
			}
		};
	}

	formValidator = formEl.validate(formRules);

	setFormGroupCell(formEl, formValidator);
	setFormGroupDate(formEl, formValidator);

	$('#btnSubmit').click(function() {
		checkForm(formEl);
	});

	// OVERLAY
	$('.persPol').click(function() {
		$('#overlaypersPol').modal();
	});
});
