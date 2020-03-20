//INIZIO FUNCTION USATE PER TUTTI I TAB 
function addValidationErr(message, ulElement) {
	if (message && (message != '')) {
		var errorMessagesElem = document.getElementById(ulElement);
		$(errorMessagesElem).append('<li>' + message + '</li>\n');
	}
}

function reloadPagesData(_tab, fetchDep, fetchPortfoglio) {
	switch(_tab){
		case 1:
			aggiornaDatiPaginaConto();
			break;
		case 2:	
			if(!fetchDep && (typeof fetchDep != 'undefined')){
				aggiornaDatiPaginaDeposito();
			}
			break;
		case 3:
			aggiornaDatiPaginaCarte();
			break;
		case 4:
			if(!fetchPortfoglio && (typeof fetchPortfoglio != 'undefined')){
				aggiornaDatiPaginaPortafoglio();
			}
			break;
		case 5:
			aggiornaDatiPaginaTitoliIndici();
			break;
		case 6:
			aggiornaDatiPaginaSicurezza();
			break;
		case 7:
			aggiornaDatiPaginaFondi();
			break;
		default:{
			aggiornaDatiPaginaConto();
			aggiornaDatiPaginaDeposito();
			aggiornaDatiPaginaCarte();
			aggiornaDatiPaginaPortafoglio();
			aggiornaDatiPaginaTitoliIndici();
			aggiornaDatiPaginaSicurezza();
			aggiornaDatiPaginaFondi();
			break;
		}					
	}
}

function checkForConflicts(_eventId, _account) {
	// Recupero dati per il popolamento dalla form del tab deposito
	var url = cgi_script + '/wbOnetoone/resp/webank/ajax/json/checkConflicts.jsp',
    parameters = 'serviceId=' + _eventId + '&account=' + _account,
    successFunc = function (jsonObj) {
		if (jsonObj['conflict']) {				
			$('#conflictMsg').html(jsonObj['message']);
			$('#layeralert').modal();
		}
	}
	jqAJAXCall('POST', 'json', url , successFunc, null, parameters);
	
}

function selectTab(element) {
	var li_parent = $(element).parent();
	if (!li_parent.hasClass("on")) {
		li_parent.siblings().each(function( index ) {
			$(this).removeClass("on");
		});
		li_parent.addClass('on');
	}
}

function openCostiSms() {
	$.ajax({
		url :  cgi_script + '/sms/dettCondizioniServizio.action',
		dataType : 'html',
		success : function(data) {
			if(data != null) {
				$('#costiTable').html(data);
				$('#layerCostiSms').modal('show');
			} else {
				alert("Al momento non è possibile recuperare la tabella dei costi sms.")
			}
		},
		failure : function (data) {
			alert("Poblema nel recuperare la tabella dei costi sms.")
		}
	});
}
//FINE FUNCTION USATE PER TUTTI I TAB


//INIZIO FUNCTION TAB CONTO
$(function(){
	$('#confermaConto').on('hidden.bs.modal', function (e) {
		$("html, body").animate({ scrollTop: $("#tabsDivId").offset().top }, "fast");
	})
});

function hideHourAndDay() {
	if (!$("#saldoIsActiveSms").attr('checked') && !$("#saldoIsActiveEmail").attr('checked') && !$("#saldoIsActivePush").attr('checked')) {
		$("#orariob").hide();
        $("#giorno").hide();
        $("#hideDay").css("display","none");
        $("#saldoSendPeriod").removeAttr("checked");
        $("#giornaliero").removeAttr("checked");
	}
	if ($("#giornaliero").is(':checked')) {
		$("#orariob").show();
		$("#giorno").hide();
        $("#hideDay").css("display","none");
	}
	if ($("#saldoSendPeriod").is(':checked')) {
         $("#giorno").show();
         $("#orariob").show();
         $("#hideDay").css("display","block");
         $("#hideDay").addClass("orarioAlert");
    }
}

function salvaConto(action) {
	$('#confermaConto').addClass('loading');
	$('#erroriValidazioneConto').hide();
	$('#salvataggioConto').hide();
	
	var url = cgi_script + action,
    parameters = $('#smsContoForm').serialize()+ '&action=set',
    successFunc = function (jsonObj) {
		if (jsonObj.error) {
			$("#errorMessagesConto").empty();
			if (jsonObj.errors) {
				for (var id in jsonObj.errors) {
					addValidationErr(jsonObj.errors[id], "errorMessagesConto");
				}
			} else if (jsonObj.messaggio) {
				addValidationErr(jsonObj.messaggio, "errorMessagesConto");
			}
			$('#erroriValidazioneConto').show();	
		} else {
			populatePageElementsByJson(jsonObj);
			hideHourAndDay();
			$('#salvataggioConto').show();
		}
		$('#confermaConto').removeClass('loading');
		$('#confermaConto').modal('hide');
	};
	jqAJAXCall('POST', 'json', url , successFunc, null, parameters);
}

$(function() {
    $('#controlSwitchIcon_1').click(function() {
        $('#control_1').toggle();
        if($('#control_1').is(":visible")){
            
            $('#switchIcon_1').removeClass('icon-row_expand');
            $('#switchIcon_1').addClass('icon-row_contract');

        }else{
            $('#switchIcon_1').removeClass('icon-row_contract');
            $('#switchIcon_1').addClass('icon-row_expand');
        }
    });

    $('#controlSwitchIcon_2').click(function() {
        $('#control_2').toggle();
        if($('#control_2').is(":visible")){
            
            $('#switchIcon_2').removeClass('icon-row_expand');
            $('#switchIcon_2').addClass('icon-row_contract');

        }else{
            $('#switchIcon_2').removeClass('icon-row_contract');
            $('#switchIcon_2').addClass('icon-row_expand');
        }
    });

    $('#controlSwitchIcon_3').click(function() {
        $('#control_3').toggle();
        if($('#control_3').is(":visible")){
            
            $('#switchIcon_3').removeClass('icon-row_expand');
            $('#switchIcon_3').addClass('icon-row_contract');

        }else{
            $('#switchIcon_3').removeClass('icon-row_contract');
            $('#switchIcon_3').addClass('icon-row_expand');
        }
        
    });
    
	$("#giorno").hide();
    $("#orariob").hide();
 	$('input[name="saldoSendPeriod"]').on('click' , function(){
		if( $(this).val() === "7"){
	         $("#giorno").show();
	         $("#orariob").show();
	         $("#hideDay").css("display","block");
	         $("#hideDay").addClass("orarioAlert");
	     } else if( $(this).val() === "1"){
	         $("#orariob").show();
	         $("#giorno").hide();
	         $("#hideDay").css("display","none");
	     }
	});
});

//FINE FUNCTION TAB CONTO


//INIZIO FUNCTION TAB DEPOSITO

$(function(){
	$('#confermaDeposito').on('hidden.bs.modal', function (e) {
		$("html, body").animate({ scrollTop: $("#tabsDivId").offset().top }, "fast");
	})
});

function salvaDeposito(action) {
	$('#confermaDeposito').addClass('loading');
	$('#erroriValidazioneDeposito').hide();
	$('#salvataggioDeposito').hide();
	var url = cgi_script + action,
    parameters = $('#smsDepositoForm').serialize()+ '&action=set',
	successFunc = function (jsonObj) {
		if (jsonObj.error) {
			$("#errorMessagesDeposito").empty();
			if (jsonObj.errors) {
				for (var id in jsonObj.errors) {
					addValidationErr(jsonObj.errors[id], "errorMessagesDeposito");
				}
			} else if (jsonObj.messaggio) {
				addValidationErr(jsonObj.messaggio, "errorMessagesDeposito");
			}
			$('#erroriValidazioneDeposito').show();	
		} else {
			populatePageElementsByJson(jsonObj);
			$('#salvataggioDeposito').show();
		}
		$('#confermaDeposito').removeClass('loading');
		$('#confermaDeposito').modal('hide');
	};
	jqAJAXCall('POST', 'json', url , successFunc, null, parameters);
}

$(function() {
    $('#controlSwitchIcon_4').click(function() {
        $('#control_4').toggle();
        if($('#control_4').is(":visible")){
            
            $('#switchIcon_4').removeClass('icon-row_expand');
            $('#switchIcon_4').addClass('icon-row_contract');

        }else{
            $('#switchIcon_4').removeClass('icon-row_contract');
            $('#switchIcon_4').addClass('icon-row_expand');
        }
    });


    $('#controlSwitchIcon_5').click(function() {
        $('#control_5').toggle();
        if($('#control_5').is(":visible")){
            
            $('#switchIcon_5').removeClass('icon-row_expand');
            $('#switchIcon_5').addClass('icon-row_contract');
        }else{
            $('#switchIcon_5').removeClass('icon-row_contract');
            $('#switchIcon_5').addClass('icon-row_expand');
        }
    });

});

//FINE FUNCTION TAB DEPOSITO

//INIZIO FUNCTION TAB CARTE
$(function(){
	$('#confermaCarte').on('hidden.bs.modal', function (e) {
		$("html, body").animate({ scrollTop: $("#tabsDivId").offset().top }, "fast");
	})
});

function manageSelectCarte() {
	if ($("#bankomatCards").val() == "Nessuna carta bancomat disponibile") {
		$('box_carteForm').hide();
		$('#nessunaCarta').show();				
		$('#presenteCarta').hide();
	} else {
		$('#box_carteForm').show();
		$('#nessunaCarta').hide();
		$('#presenteCarta').show();
	}
}

function manageInputCarte() {
	if ($("#bankomatCards").val() == "Nessuna carta bancomat disponibile") {	
		$('#presenteCarta').hide();
		$('#box_carteForm').hide();
		$('#nessunaCarta').show();
	} else {
		$('#presenteCarta').show();
		$('#box_carteForm').show();
		$('#nessunaCarta').hide();
	}
}

//Popolo le select delle carte bancomat associate al c/c
function populateBancomatSelect(account, action){
	
	$('#erroriValidazioneCarte').hide();
	$('#salvataggioCarte').hide();
	
	// Recupero dati per il popolamento dalla form del tab carte
	var url = cgi_script + action,
    parameters = account,
    successFunc = function (jsonObj) {
		populateBancomatSelectByJson('bankomatCards', jsonObj);
		//Seleziono la option con il valore passato in request
		selectOptionByValue('bankomatCards', '<%= request.getParameter("carta") %>');
		manageInputCarte();
    }
	jqAJAXCall('POST', 'json', url , successFunc, null, parameters);
}

function populateBancomatSelectByJson(selectID, jsonObj) {
	var sel = document.getElementById(selectID);				
	if (sel != null) {		
		sel.options.length = 0;		
		for (var j = 0; j < jsonObj.length; j++)
			sel.options[j] = new Option(getCartaOscurata(4, jsonObj[j]), jsonObj[j]);
	}
}

function getCartaOscurata(charsVisibili, carta) {	
	var newlen = carta.length - charsVisibili;
	var cartaOsc = null;
	var pattern = /[0-9]/;

	if(carta.search(pattern) == -1)
		cartaOsc = carta;
	else {
		cartaOsc = carta.substr(newlen, carta.length);

		for (var i = 0; i < newlen;i++)
			cartaOsc = "*" + cartaOsc;
	}
	
	return cartaOsc;
}	

function getAccount() {
	return $("#accountsForCarte").val();
}

function getCarta() {
	return carta = $("#bankomatCards").val();
}

function salvaCarte(action) {
	$('#confermaCarte').addClass('loading');
	$('#erroriValidazioneCarte').hide();
	$('#salvataggioCarte').hide();
	var url = cgi_script + action,
    parameters = $('#smsCarteForm').serialize()+'&action=set',
    successFunc = function (jsonObj) {
		//In caso errore di validazione
		if (jsonObj.error) {
			$("#errorMessagesCarte").empty();
			if (jsonObj.errors) {
				for (var id in jsonObj.errors) {
					addValidationErr(jsonObj.errors[id], "errorMessagesCarte");
				}
			} else if (jsonObj.messaggio) {
				addValidationErr(jsonObj.messaggio, "errorMessagesCarte");
			}
			$('#erroriValidazioneCarte').show();	
		} else {
			populatePageElementsByJson(jsonObj);
			$('#salvataggioCarte').show();
		}
		$('#confermaCarte').removeClass('loading');
		$('#confermaCarte').modal('hide');
	};
	
	jqAJAXCall('POST', 'json', url , successFunc, null, parameters);
}

$(function() {
    $('#cswi_4_carte').click(function() {controlSwitchIcon_4
        $('#c_4_carte').toggle();control_4
        if($('#c_4_carte').is(":visible")){
            
            $('#si_4_carte').removeClass('icon-row_expand');switchIcon_4
            $('#si_4_carte').addClass('icon-row_contract');

        }else{
            $('#si_4_carte').removeClass('icon-row_contract');
            $('#si_4_carte').addClass('icon-row_expand');
        }
    });


    $('#cswi_5_carte').click(function() {
        $('#c_5_carte').toggle();
        if($('#c_5_carte').is(":visible")){
            
            $('#si_5_carte').removeClass('icon-row_expand');
            $('#si_5_carte').addClass('icon-row_contract');
        }else{
            $('#si_5_carte').removeClass('icon-row_contract');
            $('#si_5_carte').addClass('icon-row_expand');
        }
    });
});
//FINE FUNCTION TAB CARTE


//INIZIO FUNCTION TAB TRADING
$(function(){
	$('#confermaPortafoglio').on('hidden.bs.modal', function (e) {
		$("html, body").animate({ scrollTop: $("#tabsDivId").offset().top }, "fast");
	})
});

function hideHourAndDayPortafoglio() {
	if (!$("#controvaloreIsActiveSms").attr('checked') && !$("#controvaloreIsActiveEmail").attr('checked')) {
		$("#orarioP").hide();
        $("#giornoP").hide();
        $("#hideDayP").css("display", "none");
        $("#controvaloreSendPeriod").removeAttr("checked");
        $("#giornalieroP").removeAttr("checked");
	}
	if ($("#giornalieroP").is(':checked')) {
		$("#orarioP").show();
		$("#giornoP").hide();
        $("#hideDayP").css("display", "none");
	}
	if ($("#controvaloreSendPeriod").is(':checked')) {
         $("#giornoP").show();
         $("#orarioP").show();
         $("#hideDayP").css("display", "block");
         $("#hideDayP").addClass("orarioAlert");
    }
}

function sbloccaSelectDepositi() {
	//Alla fine del caricamento della pagina e dell'esecuzione delle chiamata Ajax get se il periodo è "giornaliero" disabilita la scelta del giorno della settimana
	if($("#controvaloreSendPeriod").val() == 1) {
		$('#controvaloreSendDay').attr('disabled', true);
	} else {
		$('#controvaloreSendDay').removeAttr('disabled');
	}
	$('#erroriValidazionePortafoglio').hide();
	$('#salvataggioPortafoglio').hide();
	
}

function salvaPortafoglio(action) {
	$('#confermaPortafoglio').addClass('loading');
	$('#erroriValidazionePortafoglio').hide();
	$('#salvataggioPortafoglio').hide();
	// Recupero dati per il popolamento dalla form del tab conto
	var url = cgi_script + action,
    parameters = $('#smsPortafoglioForm').serialize()+'&action=set',
    successFunc = function (jsonObj) {
		//In caso errore di validazione
		if (jsonObj.error) {
			$("#errorMessagesPortafoglio").empty();
			if (jsonObj.errors) {
				for (var id in jsonObj.errors) {
					addValidationErr(jsonObj.errors[id], "errorMessagesPortafoglio");
				}
			} else if (jsonObj.messaggio) {
				addValidationErr(jsonObj.messaggio, "errorMessagesPortafoglio");
			}
			$('#erroriValidazionePortafoglio').show();	
		} else {
			populatePageElementsByJson(jsonObj);
			hideHourAndDayPortafoglio();
			$('#salvataggioPortafoglio').show();
		}
		$('#confermaPortafoglio').removeClass('loading');
		$('#confermaPortafoglio').modal('hide');
	};
	
	jqAJAXCall('POST', 'json', url , successFunc, null, parameters);
}

$(function() {
    $('#csi_1').click(function() {
        $('#c_1').toggle();
        if($('#c_1').is(":visible")){
            
            $('#si_1').removeClass('icon-row_expand');
            $('#si_1').addClass('icon-row_contract');

        }else{
            $('#si_1').removeClass('icon-row_contract');
            $('#si_1').addClass('icon-row_expand');
        }
    });
	$("#giornoP").hide();
    $("#orarioP").hide();
 	$('input[name="controvaloreSendPeriod"]').on('click', function(){
		if( $(this).val() === "7"){
	         $("#giornoP").show();
	         $("#orarioP").show();
	         $("#hideDayP").css("display","block");
	         $("#hideDayP").addClass("orarioAlert");
	     } else if( $(this).val() === "1"){
	         $("#orarioP").show();
	         $("#giornoP").hide();
	         $("#hideDayP").css("display","none");
	     }
	});
 });
//FINE FUNCTION TAB TRADING


//INIZIO FUNCTION TAB FONDI
$(function(){
	$('#confermaFondi').on('hidden.bs.modal', function (e) {
		$("html, body").animate({ scrollTop: $("#tabsDivId").offset().top }, "fast");
	})
});

function salvaFondi(action) {
	$('#confermaFondi').addClass('loading');
	$('#erroriValidazioneFondi').hide();
	$('#salvataggioFondi').hide();
			
	var url = cgi_script + action,
	parameters = $('#smsFondiForm').serialize()+'&action=set',
	successFunc = function (jsonObj) {
		//In caso errore di validazione
		if (jsonObj.error) {
			$("#errorMessagesFondi").empty();
			if (jsonObj.errors) {
				for (var id in jsonObj.errors) {
					addValidationErr(jsonObj.errors[id], "errorMessagesFondi");
				}
			} else if (jsonObj.messaggio) {
				addValidationErr(jsonObj.messaggio, "errorMessagesFondi");
			}
			$('#erroriValidazioneFondi').show();	
		} else {
			populatePageElementsByJson(jsonObj);
			$('#salvataggioFondi').show();
		}
		$('#confermaFondi').removeClass('loading');
		$('#confermaFondi').modal('hide');
	};
			
	jqAJAXCall('POST', 'json', url , successFunc, null, parameters);
}
//FINE FUNCTION TAB FONDI

//INIZIO FUNCTION TAB SICUREZZA
$(function(){
	$('#confermaSicurezza').on('hidden.bs.modal', function (e) {
		$("html, body").animate({ scrollTop: $("#tabsDivId").offset().top }, "fast");
	})
});

function salvaSicurezza(action) {
	$('#confermaSicurezza').addClass('loading');
	$('#erroriValidazioneSicurezza').hide();
	$('#salvataggioSicurezza').hide();
	
	var url = cgi_script + action,
    parameters = $('#smsSicurezzaForm').serialize()+'&action=set',
    successFunc = function (jsonObj) {
		if (jsonObj.error) {
			$("#errorMessagesSicurezza").empty();
			if (jsonObj.errors) {
				for (var id in jsonObj.errors) {
					addValidationErr(jsonObj.errors[id], "errorMessagesSicurezza");
				}
			} else if (jsonObj.messaggio) {
				addValidationErr(jsonObj.messaggio, "errorMessagesSicurezza");
			}
			$('#erroriValidazioneSicurezza').show();	
		} else {
			populatePageElementsByJson(jsonObj);
			$('#salvataggioSicurezza').show();
		}
		$('#confermaSicurezza').removeClass('loading');
		$('#confermaSicurezza').modal('hide');
	};
	jqAJAXCall('POST', 'json', url , successFunc, null, parameters);
}
//FINE FUNCTION TAB SICUREZZA