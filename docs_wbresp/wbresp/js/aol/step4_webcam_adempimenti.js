/* globals $:false, testIniziale:false, checkForm:false */
"use strict";
$(function() {

	var formEl = $('#aolStep4_webcam'), formValidator = formEl.validate({
	    "rules" : {
	        "informativaPrivacyInfocert" : {
		        "required" : true
	        },
	        
	        "informativaOK" : {
		        "required" : true
	        },
	        
	        "consensoPrivacyInfocert" : {
	        	"required" : true
	        }
	    },
	    "messages" : {
	        "informativaPrivacyInfocert" : {
		        "required" : "Clicca sul link per aprire l'informativa"
	        },

	        "informativaOK" : {
		        "required" : "Seleziona"
	        },
	        
	        "consensoPrivacyInfocert" : {
		        "required" : "Seleziona"
	        }
	    }
	});

	$('#lnkInformativa').click(function() {
		var informativaDis = $('#informativaDis'), informativaKO;
		if (informativaDis.length) {
			informativaDis.remove();
			informativaKO = $('#informativaKO');
			informativaKO.prop('checked', true);
			formValidator.element('#informativaKO');
			informativaKO.remove();
			$('#informativaOK').removeClass('ignore').removeClass('hidden-input').prop('checked', true).val("1");
		}
	});
	$('#informativaOK').click(function() {
		if ($('#informativaDis').length) {
			return false;
		}
	});
	
    // Overlay consenso
    $('#acconsento1a').click(function() {
    	if (!$('#informativaOK').prop('checked')) {
    		return false;
    	}
    });

    $('#acconsento1b').click(function() {
    	if ($('#informativaOK').prop('checked')) {
		    $('#acconsento1a, #acconsento1b').prop('checked', false);
		    $('#overlayConsensoNegato').modal();
    	} else {
    		return false;
    	}
    });
    
    $('#btnConsensoOK').click(function() {
        $('#acconsento1a').prop('checked', true);
        $('#overlayConsensoNegato').modal('hide');
    });
	
	$('#verificaProsegui').click(function() {
		checkForm(formEl);
		if (formEl.valid()) {
			formEl.submit();
		}
	});
});
