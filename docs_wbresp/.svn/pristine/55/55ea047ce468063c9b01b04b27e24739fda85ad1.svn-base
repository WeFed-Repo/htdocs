/* globals $:false, AJAXGenericCall:false */
/* exported ProvCom */
"use strict";

var ProvCom = {};

ProvCom.updateProvince = function(idSelect, idStato) {
	var attive = true;
	if(idSelect.indexOf("nascita") >= 0) {
		attive = false;
	}
	
    var val = $('#' + idStato).val();
    if (val !== '') {
    	ProvCom.updateValues(idSelect, 'stato=' + val + '&attive=' + attive);
    } else {
    	ProvCom.emptySelect(idSelect);
    }
};

ProvCom.updateComuni = function(idSelect, idProvincia, idCap) {
	var attive = true;
	if(idSelect.indexOf("nascita") >= 0) {
		attive = false;
	}
	
    var val = $('#' + idProvincia).val();
    if (val !== '') {
    	ProvCom.updateValues(idSelect, 'provincia=' + val + '&attive=' + attive);
    } else {
    	ProvCom.emptySelect(idSelect);
    }
    if (typeof idCap !== 'undefined') {
    	ProvCom.emptySelect(idCap);
    }
};

ProvCom.updateCap = function(idSelect, idComune) {
    var val = $('#' + idComune).val();
    if (val !== '') {
    	ProvCom.updateValues(idSelect, 'comune=' + val);
    } else {
    	ProvCom.emptySelect(idSelect);
    }
};

ProvCom.checkStato = function(idStato, idField1, idField2, idField3) {
	var statoEl = $('#' + idStato),
        stato = statoEl.val(),
        isDisabled = statoEl.prop('disabled'),
		field3 = (typeof idField3 !== 'undefined')? $('#' + idField3) : [];

	if (/italia/.test(stato.toLowerCase())) {
        if (!isDisabled) {
            $('#' + idField1).prop('disabled', false);
            $('#' + idField2).prop('disabled', false);
            if (field3.length) {
                $('#' + idField3).prop('disabled', false);
            }
        }
        ProvCom.updateProvince(idField1, idStato);
	} else {
		$('#' + idField1).prop('disabled', true).val('');
		$('#' + idField2).prop('disabled', true).val('');
		if (field3.length) {
			$('#' + idField3).prop('disabled', true);
		}
	}
};

ProvCom.checkStatoFATCA = function(idStato, idField1, idField2, idField3) {
    var stato = $('#' + idStato).val(),
        field3 = (typeof idField3 !== 'undefined') ? $('#' + idField3) : [];

    if (/italia/.test(stato.toLowerCase())) {
        $('#' + idField1).replaceWith(
        	$('<select name="' + idField1 + '" id="' + idField1 + '" class="form-control indProv"><option value="">seleziona</option></select>')
        );
        $('#' + idField2).replaceWith(
    		$('<select name="' + idField2 + '" id="' + idField2 + '" class="form-control indCom"><option value="">seleziona</option></select>')
        );
        ProvCom.updateProvince(idField1, idStato);

        if (field3.length) {
	        $('#' + idField3).replaceWith(
	    		$('<select name="' + idField3 + '" id="' + idField3 + '" class="form-control indCap"><option value="">seleziona</option></select>')
	        );
	    }
    } else {
        $('#' + idField1).replaceWith(
        	$('<input name="' + idField1 + '" id="' + idField1 + '" class="form-control indProv" value="">')
        );
        $('#' + idField2).replaceWith(
    		$('<input name="' + idField2 + '" id="' + idField2 + '" class="form-control indCom" value="">')
        );
        if (field3.length) {
	        $('#' + idField3).replaceWith(
	    		$('<input name="' + idField3 + '" id="' + idField3 + '" class="form-control indCap" value="">')
	        );
	    }
    }
};

ProvCom.updateValues = function (idSelect, parameters) {
    AJAXGenericCall('POST', '/aol/privati/webank/statiprovinciecomuni.jsp',

        function(data) {
            var obj = $.parseJSON(data);

            if (obj.isEsito) {

                var vet = obj.vetRes;

                // Reset
                $('#' + idSelect).empty();

                if (vet.length > 2) {

                    $('#' + idSelect).append($('<option>', {
                        value: '',
                        text: 'seleziona'
                    }));
                }

                // Valorizzazione
                for (var i = 0; i < vet.length; i++) {
                    $('#' + idSelect).append($('<option>', {
                        value: vet[i].value,
                        text: vet[i].value.split("~")[0]
                    }));
                }
            }
        },

        function() {
            // Todo
        },

        parameters
    );
};

ProvCom.emptySelect = function (idSelect) {
	$('#' + idSelect).empty().append($("<option></option>").val("").text("seleziona"));
};
