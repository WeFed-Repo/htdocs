/* globals $:false, checkForm:false */
"use strict";

$(function() {
	var formElArr = $("[name='formCaricaDoc']");

	// Validazione form
	formElArr.each(function () {
		var formEl = $(this);
		formEl.validate({
		    "rules" : {
			    "file_upload" : {
			    	"required": true,
	                "accept": "image/png,image/jpeg,application/pdf"
			    }
		    },
		    "messages" : {
			    "file_upload" : {
			    	"required": "Compila",
	            	"accept": "Tipo file non valido. Verifica il formato e riprova."
			    }
		    }
		});
	    formEl.find("button[type='submit']").click(function () {
	        checkForm(formEl);
	    });
	});
});
