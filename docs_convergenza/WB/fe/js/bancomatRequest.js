var mappaComuni = new Array();

function reInviaFirma() {
	Firma.inviaOtp();
}

function pin2render() {
	var url = cgi_script + '/nsf/Pin2AjaxRender.do?',
	parameters = {},
	successFunc = function (resp) {
		$('#pin2render').html(resp);
	},
	failureFunc = function () {};
	jqAJAXCall('POST', 'html', url, successFunc, failureFunc, parameters);
}

function proseguiModulo(button) {
	buttonGlobal = button;
	$('#errorsSection').hide();
	do_preValidations();
	setLoadingOnObject('boxrichiesta',null,null,null);
	var url = cgi_script + '/nsf/RichiestaBancomatModulo.do?' + urlParams + '&OBS_REF=PRENDIFIRMA',
	parameters = $('#formrichiesta4').serialize(),
	successFunc = function (esito) {
		unsetLoadingOnObject('boxrichiesta');
		if ($('#indirizzomod').is(':hidden')) {
			$('#sped_Indirizzo').val('');
			$('#sped_Citta').val('');
			$('#sped_Cap').val('');
			$('#sped_Provincia').val('');
		}
		if (esito.code == 'ko' && esito.desc == 'action')  {
			for(var i = 0; i < esito.errors.length; i++) {
					addValidationError(esito.errors[i].fieldLabelID,esito.errors[i].message,true);
			}
			pin2render();
			$('#errorsSection').prependTo('#formrichiesta4');
			$('#errorsSection').show();
			setElementonView($('#errorsSection'));
		} else if (esito.code == 'ko') {
			$('#contformrichiesta2').hide();
			$('#contformrichiesta2output').show();
			$('.modifica').hide();
		} else {
			stepRichiesta(buttonGlobal,true);
			$('#spedDoc').html(esito.spedDoc);
			$('#contformrichiesta').hide();
			$('#contformrichiestaoutput').show();
			$('#contformrichiesta2').hide();
			$('#contformrichiesta2output').html('<strong>Hai preso visione del Manuale operativo - Condizioni generali - Istruzioni d\'uso della firma digitale - Informativa sui servizi a distanza e inviato la richiesta correttamente.');
			$('#contformrichiesta2output').show();
			$('#banner').show();
		}
	},
	failureFunc = function () { 
		unsetLoadingOnObject('boxrichiesta');
		alert('Errore generico, riprovare piï¿½ tardi.')
	};
	jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
}

function proseguiSalva(button) {
	$('#errorsSection').hide();
	do_preValidations();
	if($('#OTPfirma2').val() == '' || $('#firma2').val() == '') {
		if($('#firma2').val() == '') {
			addValidationError('labfirma2','Il campo "Codice firma" ï¿½ vuoto',true);
		}
		if($('#OTPfirma2').val() == '') {
			addValidationError('labOTPfirma2','Il campo "Codice di controllo" ï¿½ vuoto',true);
		}
		$('#errorsSection').prependTo('#formrichiesta3');
		$('#errorsSection').show();
		setElementonView($('#errorsSection'));
	} else {
		setLoadingOnObject('boxrichiesta',null,null,null);
		var url = cgi_script + '/nsf/WsBancomatRequestSalva.do?' + urlParams + '&OBS_REF=SALVACONTRATTO',
		parameters = parameters = $('#formotp2').serialize(true),
		successFunc = function (esito) {
			unsetLoadingOnObject('boxrichiesta');
			if (esito.code == 'ko' && esito.desc == 'block') {
				$('#contformrichiesta3').hide();
				$('#contformrichiesta3outputN').show();
				$('.modifica').hide();
			} else if (esito.code == 'ko') {
				for(var i = 0; i < esito.errors.length; i++) {
					addValidationError(esito.errors[i].fieldLabelID,esito.errors[i].message,true);
				}
				$('#errorsSection').prependTo('#formrichiesta3');
				$('#errorsSection').show();
				setElementonView($('#errorsSection'));
			} else {
				$('#errorsSection').hide();
				do_preValidations();
				stepRichiesta(button);
				$('contformrichiesta3').hide();
				$('contformrichiesta3output').show();
			}
		},
		failureFunc = function () { 
			unsetLoadingOnObject('boxrichiesta');
			alert('Errore generico, riprovare piï¿½ tardi.')
		};
		jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
	}
}

function abilitaFirma() {
	if($('#clausule').is(':checked') && $('#pdf').is(':checked')) {
		Firma.inviaOtp();
		$('#clausule').attr('disabled', 'disabled');
		$('#pdf').attr('disabled', 'disabled');
		$('#firma1').removeAttr('disabled');
		$('#Introd').hide();
		$('#firmaToolTip').show();
		$('#reInviaLink').removeAttr('hidden');
		$('#OTPfirma').removeAttr('disabled');
		$('#primoLinkContratto').attr('onclick','');
		$('#divfirma1').attr('onclick','proseguiFirma(this);this.blur();');
		$('#divfirma1').removeClass('buttDis');
	}
}

function abilitaFirma2() {
		Firma.inviaOtp();
		$('#salvataggioCheck').attr('disabled', 'disabled');
		$('#secondoLinkContratto').attr('onclick','');
		$('#salvaFirmaToolTip').show();
		$('#reInviaLink2').removeAttr('hidden');
		$('#IntrodSalva').hide();
		$('#firma2').removeAttr('disabled');
		$('#OTPfirma2').removeAttr('disabled');
		$('#divfirma2').attr('onclick','proseguiSalva(this);this.blur();');
		$('#divfirma2').removeClass('buttDis');
}

function ableInformativaTel(button) {
	$('#accetto2').val('Y');
	$('#contrattoTel').removeAttr('onclick');
	$('#contrattoTel').attr('disabled','disabled');
	$('#contrattoTel2').prev('.hovfin').hide();
	$('#contrattoTel2').removeAttr('disabled');
	$('#resendInfo').html("Se il cliente non ha ricevuto la mail <a href=\"javascript:sendInformativa();\">clicca qui</a> per reinviargliela.");
}

function proseguiFirma(button) {
	buttonGlobal = button;
	$('#errorsSection').hide();
	do_preValidations();
	if($('#OTPfirma').val() == '' || $('#firma1').val() == '') {
		if($('#firma1').val() == '') {
			addValidationError('labfirma1','Il campo "Codice firma" ï¿½ vuoto',true);
		}
		if($('#OTPfirma').val() == '') {
			addValidationError('labOTPfirma1','Il campo "Codice di controllo" ï¿½ vuoto',true);
		}
		$('#errorsSection').prependTo('#formrichiesta2');
		$('#errorsSection').show();
		setElementonView($('#errorsSection'));
	} else {
		setLoadingOnObject('boxrichiesta',null,null,null);
		var url = cgi_script + '/nsf/WsBancomatRequestFirma.do?' + urlParams + '&OBS_REF=FIRMACONTRATTO',
		parameters = $('#formotp').serialize(true),
		successFunc = function (esito) {
			unsetLoadingOnObject('boxrichiesta');
			if (esito.code == 'ko' && esito.desc == 'block')  {
				$('#contformrichiesta2').hide();
				$('#contformrichiesta2output').show();
				$('.modifica').hide();
			} else if (esito.code == 'ko') {
				for(var i = 0; i < esito.errors.length; i++) {
					addValidationError(esito.errors[i].fieldLabelID,esito.errors[i].message,true);
				}
				$('#errorsSection').prependTo('#formrichiesta2');
				$('#errorsSection').show();
				setElementonView($('#errorsSection'));
			} else {
				$('#errorsSection').hide();
				do_preValidations();
				stepRichiesta(buttonGlobal,true);
				$('#contformrichiesta').hide();
				$('#contformrichiestaoutput').show();
				$('#contformrichiesta2').hide();
				$('#contformrichiesta2output').html('<strong>Hai firmato correttamente online il contratto del bancomat</strong>');
				$('#contformrichiesta2output').show();
				$('#contformrichiesta3').show();
				$('#banner').show();
			}
		},
		failureFunc = function () { 
			unsetLoadingOnObject('boxrichiesta');
			alert('Errore generico, riprovare piï¿½ tardi.')
		};
		jqAJAXCall('POST', 'json', url, successFunc, failureFunc, parameters);
	}
}

function comuneChange(val) {

	var cap1 = 0;
	var cap2 = 0;

	 $('#sped_Cap').val('');
	
	if(val == '') {
		  $('#sped_Cap_NoValue').show();
		  $('#sped_Cap').hide();
	} else {

		  $('#sped_Cap_NoValue').hide();
		  $('#sped_Cap').show();
	}
}

function changeAddress(operation) {
	if(operation === 0) {
		$('#annullaBott').addClass('margBottomSmall').removeClass('aButtoncons');
		$('#annullaBott').addClass('disabled');
		$('#annullaBott').html("<a class=\"flRight linkTodisable\" href=\"javascript:;\" onclick=\"\"><span>annulla modifica</span></a>");
	} else if (operation === 1) {
		$('#annullaBott').removeClass('bottdis flRight disabled margBottomSmall').addClass('aButtoncons');
		$('#annullaBott').html("<a class=\"flRight linkTodisable\" href=\"javascript:;\" onclick=\"resetIndirizzo();$('#indirizzosped').show();$('#indirizzomod').hide();\"><span>annulla modifica</span></a>");
	}
}

function showBancomatEs(valore, numero, massimale) {

	var idconto = $('#idconto').val();
	
	if (valore != 'SD' && valore != 'DP') {
		massimale = '05WBAK';
		$('#divEstinguere').attr('style','display:none');
		$('#estinzioneValue').val('');
	} else {
		$('#divEstinguere').attr('style','display:block');
		$('#estinzioneValue').val(numero);
	}
	
}

function callMassimali(numero, massimale, idConto) {
	
	var agenziaCod = idConto.split(" - ")[0];
	var contoCod = idConto.split(" - ")[1];
	var url = cgi_script + '/nsf/MassimaliRequest.do',
	parameters = {
		numeroCarta : numero,
		massimaleCarta : massimale,
		agenzia : agenziaCod,
		conto : contoCod
	},
	successFunc = function (html) {
		$('#divMassimali').html(html);
		$('#massimaleValueOf').val(massimale);
	},
	failureFunc = function () {};
	jqAJAXCall('POST', 'html', url, successFunc, failureFunc, parameters);
	
}

function resetIndirizzoBR() {
	if(!$('#annullaMod').hasClass('disabled')) {
		$('#sped_Presso').val('');
		$('#sped_Indirizzo').val('');
		$('#sped_Provincia').val('');
		$('#comune').html('<label class="control-label" id="citta">Comune</label><select name="sped_Citta_Mod" id="sped_Citta" class="form-control"><option value="">Seleziona prima la provincia</option></select>');
		$('#sped_Cap_NoValue').show();
		$('#sped_Cap').hide();
		$('#sped_Cap').val('');
	}
}