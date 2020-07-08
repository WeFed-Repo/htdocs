/* globals $:false, setFormGroupCell:false, setFormGroupDate:false, checkForm:false,  resetElementError */
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
		formRules.rules["patrimonioAv_int" + i] = "required";
		formRules.rules["redditoAnnuoAv_note_int" + i] = "required";
		formRules.rules["origineRedditoAv_note_int" + i] = "required";
		formRules.rules["patrimonioAv_note_int" + i] = "required";
		formRules.rules["originePatrimonioAv_note_int" + i] = "required";
		
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
		formRules.messages["patrimonioAv_int" + i] = "Seleziona";
		formRules.messages["redditoAnnuoAv_note_int" + i] ="Compila";
		formRules.messages["origineRedditoAv_note_int" + i] ="Compila";
		formRules.messages["patrimonioAv_note_int" + i] ="Compila";
		formRules.messages["originePatrimonioAv_note_int" + i] ="Compila"; 
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
	
	/** * GESTIONE CAMPI NOTE DA SELECT REDDITO E PATRIMONIO ** */
	var selectNote = $(".select-note"),
		fieldNote = $(".field-note"),
		
		//CON CARATTERI ACCENTATI
		//ciRegexNote = /[a-zA-Z0-9/\s\u00C0-\u00F6\u00F8-\u00FF]+/;
		
		//SENZA CARATTERI ACCENTATI
		ciRegexNote = /[a-zA-Z0-9/\s]+/;
	
	//controllo immissione lettere accentate e non, numeri e spazio
	fieldNote.on('keypress', function (event) {
		var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
			if (!ciRegexNote.test(key)) {
				event.preventDefault();
				return false;
		}
	});
	//INIBIRE COPIA E INCOLLA
	fieldNote.on('paste', function (event) {
		return false;
	})

	//controllo per abilitazione/disabilitazione campo note e suo reset - deliver
	var ckeckValueSelected = function() {
		selectNote.each (function(){
			var valueSelSelected = $(this).find("option:selected").text(),
				fieldNoteSel = $(this).closest(".row").find(".field-note");
				if(valueSelSelected.toLowerCase().indexOf("altro") !== -1) {
					fieldNoteSel.attr("disabled",false);
					//formValidator.element(fieldNoteSel);
					
				}
				else {
					fieldNoteSel.attr("disabled",true).val("");
					resetElementError(fieldNoteSel)
				}
		});
	}
	ckeckValueSelected()
	selectNote.on("change", function() {
		ckeckValueSelected();
	});
	/* GESTIONE CAMPI NOTE DA SELECT REDDITO E PATRIMONIO */
	
	
	$('#btnSubmit').click(function() {
		checkForm(formEl);
	});

	// OVERLAY
	$('.persPol').click(function() {
		$('#overlaypersPol').modal();
	});

	
});