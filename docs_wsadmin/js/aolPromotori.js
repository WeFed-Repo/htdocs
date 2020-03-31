AolPromotori = {};

var numInt = 0;

AolPromotori.onLoadStep1 = function() {

	numInt = getNumInt();

	noBack();
	showBlocks();

	if (!$('#titolo_studio_int1').is(':disabled')) {
		$('#titolo_studio_int1').focus();
	}

	ProvCom.updateComuni('divComune1', 'provincia_nascita_int1', 'comune_nascita_int1', 'comune_nascita_int1', 'no', 'Comune di nascita*');
	ProvCom.updateComuni('divComuneEmissione1', 'provincia_emissione_int1', 'comune_emissione_int1', 'comune_emissione_int1', 'no', 'Comune di rilascio*');
	ProvCom.updateComuni('divComuneResidenza1', 'provincia_int1', 'comune_int1', 'comune_int1', 'no', 'Comune*');
	ProvCom.updateComuni('divComuneRecapito1', 'provincia_recapito_int1', 'comune_recapito_int1', 'comune_recapito_int1', 'no', 'Comune*');
	ProvCom.updateComuni('divComuneDomicilioCAI1', 'provincia_domicilioCAI_int1', 'comune_domicilioCAI_int1', 'comune_domicilioCAI_int1', 'no', 'Comune*')

	if ($('via_recapito_int1').value != null && $('via_recapito_int1').value != '') {
		$('#divIndirizzoCorrispondenza1').addClass('expanded');
	}

	if ($('via_domicilioCAI_int1').value != null && $('via_domicilioCAI_int1').value != '') {
		$('#divIndirizzoCai1').addClass('expanded');
	}

	if ($('telefono_int1').value != '' || $('prefisso_int1').value != '' || $('telefono_2_int1').value != '' || $('prefisso_2_int1').value != '') {
		$('#divRecapitiTelefonici1').addClass('expanded');
	}
	
	displayTIN('residenzaFiscale_int1', 'tin1', 'TIN_int1');

	if (numInt > 1) {
		ProvCom.updateComuni('divComune2', 'provincia_nascita_int2', 'comune_nascita_int2', 'comune_nascita_int2', 'no', 'Comune di nascita*');
		ProvCom.updateComuni('divComuneEmissione2', 'provincia_emissione_int2', 'comune_emissione_int2', 'comune_emissione_int2', 'no', 'Comune di rilascio*');
		ProvCom.updateComuni('divComuneResidenza2', 'provincia_int2', 'comune_int2', 'comune_int2', 'no', 'Comune*');
		ProvCom.updateComuni('divComuneDomicilioCAI2', 'provincia_domicilioCAI_int2', 'comune_domicilioCAI_int2', 'comune_domicilioCAI_int2', 'no', 'Comune*')

		if ($('via_domicilioCAI_int2').value != null && $('via_domicilioCAI_int2').value != '') {
			$('#divIndirizzoCai2').addClass('expanded');
		}

		if ($('telefono_int2').value != '' || $('prefisso_int2').value != '' || $('telefono_2_int2').value != '' || $('prefisso_2_int2').value != '') {
			$('#divRecapitiTelefonici2').addClass('expanded');
		}
		
		displayTIN('residenzaFiscale_int2', 'tin2', 'TIN_int2');
	}

	if (numInt > 2) {
		ProvCom.updateComuni('divComune3', 'provincia_nascita_int3', 'comune_nascita_int3', 'comune_nascita_int3', 'no', 'Comune di nascita*');
		ProvCom.updateComuni('divComuneEmissione3', 'provincia_emissione_int3', 'comune_emissione_int3', 'comune_emissione_int3', 'no', 'Comune di rilascio*');
		ProvCom.updateComuni('divComuneResidenza3', 'provincia_int3', 'comune_int3', 'comune_int3', 'no', 'Comune*');
		ProvCom.updateComuni('divComuneDomicilioCAI3', 'provincia_domicilioCAI_int3', 'comune_domicilioCAI_int3', 'comune_domicilioCAI_int3', 'no', 'Comune*')

		if ($('via_domicilioCAI_int3').value != null && $('via_domicilioCAI_int3').value != '') {
			$('#divIndirizzoCai3').addClass('expanded');
		}

		if ($('telefono_int3').value != '' || $('prefisso_int3').value != '' || $('telefono_2_int3').value != '' || $('prefisso_2_int3').value != '') {
			$('#divRecapitiTelefonici3').addClass('expanded');
		}
		
		displayTIN('residenzaFiscale_int3', 'tin3', 'TIN_int3');
	}
}

AolPromotori.onLoadStep2 = function(identificazione) {
	numInt = getNumInt();
}

function displayTIN(idVal, idToDisplay, idValue) {
	if ($('#' + idVal).val().indexOf('STATI UNITI') >= 0) {
		$('#' + idToDisplay).css('visibility','visible');
		$('#' + idValue).focus();
	} else {
		$('#' + idToDisplay).css('visibility','hidden');
		$('#' + idValue).val('');
	}
}

function switchAgenzia() {
	$('identBonifico').hide();
	
	// Azzeramento campi bonifico
	$('#ibanclientebon_int1').val('');
	resetblockDocIndentita(1);

	if (numInt > 1) {
		$('#ibanclientebon_int2').val('');
		resetblockDocIndentita(2);
	}

	if (numInt > 2) {
		$('#ibanclientebon_int3').val('');
		resetblockDocIndentita(3);
	}
}

function switchBonifico() {
	$('identBonifico').show();

	$('#blockDocIndentita1').show();
	$('#linkNoDocIndentita1').show();
	$('#blockChooseOtherDoc1').hide();

	$('#blockDocIndentita2').show();
	$('#linkNoDocIndentita2').show();
	$('#blockChooseOtherDoc2').hide();

	$('#blockDocIndentita3').show();
	$('#linkNoDocIndentita3').show();
	$('#blockChooseOtherDoc3').hide();
}

function resetblockDocIndentita(i) {

	if (i == 1) {
		$('#numero_doc2_int1').val('');
		$('#comune_emissione2_int1').val('');
		$('#comune_emissione2_int1').removeAttr('disabled');
		$('#comune_emissione2_int1').removeAttr('class');
		$('#provincia_emissione2_int1').val('');
		$('#provincia_emissione2_int1').removeAttr('disabled');
		$('#provincia_emissione2_int1').removeAttr('class');
		$('#stato_emissione2_int1').val('ITALIA');
		$('#emesso_da2_int1').val('');
		$('#gg_emissione2_int1').val('');
		$('#mm_emissione2_int1').val('');
		$('#aa_emissione2_int1').val('');
		$('#altroDoc_int1').val('');

	} else if (i == 2) {
		$('#numero_doc2_int2').val('');
		$('#comune_emissione2_int2').val('');
		$('#comune_emissione2_int2').removeAttr('disabled');
		$('#comune_emissione2_int2').removeAttr('class');
		$('#provincia_emissione2_int2').val('');
		$('#provincia_emissione2_int2').removeAttr('disabled');
		$('#provincia_emissione2_int2').removeAttr('class');
		$('#stato_emissione2_int2').val('ITALIA');
		$('#emesso_da2_int2').val('');
		$('#gg_emissione2_int2').val('');
		$('#mm_emissione2_int2').val('');
		$('#aa_emissione2_int2').val('');
		$('#altroDoc_int2').val('');

	} else if (i == 3) {
		$('#numero_doc2_int3').val('');
		$('#comune_emissione2_int3').val('');
		$('#comune_emissione2_int3').removeAttr('disabled');
		$('#comune_emissione2_int3').removeAttr('class');
		$('#provincia_emissione2_int3').val('');
		$('#provincia_emissione2_int3').removeAttr('disabled');
		$('#provincia_emissione2_int3').removeAttr('class');
		$('#stato_emissione2_int3').val('ITALIA');
		$('#emesso_da2_int3').val('');
		$('#gg_emissione2_int3').val('');
		$('#mm_emissione2_int3').val('');
		$('#aa_emissione2_int3').val('');
		$('#altroDoc_int3').val('');
	}

}

function openListaAgenzie(urlAction) {
	cstPopup(urlAction, 'Lista Agenzia', '550', '370', 'yes');
}

function openCloseDt() {
	if ($('#ct').is(':checked')) {
		$('#aolDeposito').addClass('opened');
	} else {
		$('#aolDeposito').removeClass('opened');

		var obj = $('#aol input[name=ct_regimenew]:radio');
		obj.each(function(index, item) {
			$(item).removeAttr('checked');
		});

		obj = $('#aol input[name=ng_commissioni]:radio');
		obj.each(function(index, item) {
			$(item).removeAttr('checked');
		});

		obj = $('#aol input[name=colCt]:radio');
		obj.each(function(index, item) {
			$(item).removeAttr('checked');
		});

		if ($('#longOv').is(':checked')) {
			$('#longOv').removeAttr('checked');
		}
	}
}

function showBlocks() {
	var blocchi = new Array;
	blocchi[0] = $('primoIntestatario');
	blocchi[1] = $('secondoIntestatario');
	blocchi[2] = $('terzoIntestatario');

	var inputScelta = $('#numeroIntestatari input');
	inputScelta.each(function() {
		if ($('#' + this.id).is(':checked')) {
			var numberToShow = $('#' + this.id).val() - 1;
			for (j = 0; j < blocchi.length; j++) {
				if (j <= numberToShow) {
					blocchi[j].show();
				} else {
					blocchi[j].hide();
				}
				if (j != 0) {
					$(blocchi[j]).addClass('aolAcc');
				}
			}
		}
	});
}


function checkStato(value, idField1, idField2) {
	if (value == 'ITALIA' || value == '') {
		fieldEnable(idField1, true);
		fieldEnable(idField2, true);
	} else {
		$(idField1).value = '';
		$(idField1).className = '';
		fieldEnable(idField1, false);
		$(idField2).value = '';
		$(idField2).className = '';
		fieldEnable(idField2, false);
	}
}

// Campi parzialmente compilati
function parzCompilati(qualif, via, civico, cap, comune, provincia) {
	var almostANoEmptyFields = qualif.value != '' || via.value != '' || civico.value != '' || cap.value != '' || comune.value != '' || provincia.value != '';
	if (almostANoEmptyFields) {
		return true;
	} else {
		return false;
	}
}

var firstError1 = '';
function validaIntestatario1() {

	var hasNoError = true;
	var onlyNumber = /^\d+$/;
	var onlyAlpha = '^[a-zA-Z0-9]+$';
	var numericExpression = /\d/;
	var regexDoc = /^[a-zA-Z]{2}[0-9]{6,7}$|^[0-9]{6,7}[a-zA-Z]{2}$/;

	with (document.aol) {

		var giorniNelmese = giorniNelMese(aa_nascita_int1.value, mm_nascita_int1.value);

		// Controllo validitÃ  nome
		if (nome_int1.value == "") {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'nome_int1');
			hasNoError = false;
		} else if (nome_int1.value.indexOf("@") != -1) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'nome_int1', 'Elimina il carattere @');
			hasNoError = false;
		} else if (nome_int1.value.match(numericExpression)) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'nome_int1', 'Non è consentito utilizzare numeri');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'nome_int1');
		}

		// Controllo validitÃ  cognome
		if (cognome_int1.value == "") {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'cognome_int1');
			hasNoError = false;
		} else if (cognome_int1.value.indexOf("@") != -1) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'cognome_int1', 'Elimina il carattere @');
			hasNoError = false;
		} else if (cognome_int1.value.match(numericExpression)) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'cognome_int1', 'Non è consentito utilizzare numeri');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'cognome_int1');
		}

		// Controllo validitÃ  data
		if (gg_nascita_int1.value.length != 2 || gg_nascita_int1.value == 'gg') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'gg_nascita_int1');
			hasNoError = false;
		} else if (!gg_nascita_int1.value.match(onlyNumber)) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'gg_nascita_int1', 'Verifica');
			hasNoError = false;
		} else if (gg_nascita_int1.value > 31 || gg_nascita_int1.value < 1) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'gg_nascita_int1', 'Verifica');
			hasNoError = false;
		} else if (gg_nascita_int1.value > giorniNelmese) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'gg_nascita_int1', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'gg_nascita_int1');
		}

		if (mm_nascita_int1.value.length != 2 || mm_nascita_int1.value == 'mm') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'mm_nascita_int1');
			hasNoError = false;
		} else if (!mm_nascita_int1.value.match(onlyNumber)) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'mm_nascita_int1', 'Verifica');
			hasNoError = false;
		} else if (mm_nascita_int1.value > 12 || mm_nascita_int1.value < 1) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'mm_nascita_int1', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'mm_nascita_int1');
		}

		if (aa_nascita_int1.value.length != 4 || aa_nascita_int1.value == 'aaaa') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'aa_nascita_int1');
			hasNoError = false;
		} else if (!aa_nascita_int1.value.match(onlyNumber)) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'aa_nascita_int1', 'Verifica');
			hasNoError = false;
		} else if (aa_nascita_int1.value < 1900) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'aa_nascita_int1', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'aa_nascita_int1');
		}

		if (gg_nascita_int1.value != "" && gg_nascita_int1.value != 'gg' && mm_nascita_int1.value != '' && mm_nascita_int1.value != 'mm' && aa_nascita_int1.value != ''
		        && aa_nascita_int1.value != 'aaaa') {
			if (isLaterThanToday(aa_nascita_int1.value, mm_nascita_int1.value, gg_nascita_int1.value)) {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'divDataNascita1', 'La data è successiva ad oggi');
				hasNoError = false;
			} else if (checkMaggiorenne(document.aol.aa_nascita_int1.value, document.aol.mm_nascita_int1.value, document.aol.gg_nascita_int1.value)) {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'divDataNascita1', 'L\'intestatario deve essere maggiorenne');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'divDataNascita1');
			}
		}

		if (!checkRadio(sesso_int1)) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'sesso_int1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'sesso_int1');
		}

		var msgFis1 = controllaCF(cod_fiscale_int1.value);
		var sex1 = 'M';
		if (sesso_int1[1].checked)
			sex1 = 'F';
		var dataNascita1 = gg_nascita_int1.value + '/' + mm_nascita_int1.value + '/' + aa_nascita_int1.value;

		if (cod_fiscale_int1.value == "") {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'cod_fiscale_int1');
			hasNoError = false;
		} else if (msgFis1 != "") {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'cod_fiscale_int1', msgFis1);
			hasNoError = false;
		} else if (!verificaCodFis(cod_fiscale_int1.value, cognome_int1.value, nome_int1.value, dataNascita1, sex1, 'primo')) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'cod_fiscale_int1', 'Il codice fiscale non è congruente ai dati inseriti');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'cod_fiscale_int1');
		}

		if (mail_int1.value == "") {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'mail_int1');
			hasNoError = false;
		} else if (!checkMail(mail_int1)) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'mail_int1', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'mail_int1');
		}

		if (prefisso_3_int1.value.length != 3) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'prefisso_3_int1');
			hasNoError = false;
		} else if (!prefisso_3_int1.value.match(onlyNumber)) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'prefisso_3_int1', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'prefisso_3_int1');
		}

		if (telefono_3_int1.value.length != 7 && telefono_3_int1.value.length != 6) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'telefono_3_int1');
			hasNoError = false;
		} else if (!telefono_3_int1.value.match(onlyNumber)) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'telefono_3_int1', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'telefono_3_int1');
		}

		if (operatore_int1.value == "") {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'operatore_int1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'operatore_int1');
		}

		// STATO NASCITA
		if (stato_nascita_int1.value == '') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'stato_nascita_int1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'stato_nascita_int1');
		}

		// CITTADINANZA NASCITA
		if (cittadinanza_int1.value == '') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'cittadinanza_int1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'cittadinanza_int1');
		}

		// PROVINCIA NASCITA
		if (provincia_nascita_int1.value == '' && (stato_nascita_int1.value == 'ITALIA' || stato_nascita_int1.value == '')) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'provincia_nascita_int1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'provincia_nascita_int1');
		}

		// COMUNE NASCITA
		if (comune_nascita_int1.value == '' && (stato_nascita_int1.value == 'ITALIA' || stato_nascita_int1.value == '')) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'comune_nascita_int1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'comune_nascita_int1');
		}
		
		// RESIDENZA FISCALE E TIN
		if (residenzaFiscale_int1.value == '') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'residenzaFiscale_int1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'residenzaFiscale_int1');
		}

		var regexTin = '^[A-Z0-9]{2}[ \-][A-Z0-9]{7}';
		if (residenzaFiscale_int1.value.indexOf('STATI UNITI') >= 0) {
			if (TIN_int1.value == '') {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'TIN_int1');
				hasNoError = false;
			} else if (!TIN_int1.value.match(regexTin)) {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'TIN_int1', 'Verifica');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'TIN_int1');
			}
		}

		// TITOLO DI STUDIO
		if (titolo_studio_int1.value == '') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'titolo_studio_int1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'titolo_studio_int1');
		}

		// COME HAI CONOSCIUTO WEBANK?
		if (come_conosce_int1.value == '') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'come_conosce_int1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'come_conosce_int1');
		}

		// TIPO DOCUMENTO
		if (tipo_doc_int1.value == '') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'tipo_doc_int1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'tipo_doc_int1');
		}

		// NUMERO DOCUMENTO

		if (numero_doc_int1.value == '') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'numero_doc_int1');
			hasNoError = false;
		} else if (!numero_doc_int1.value.match(onlyAlpha)) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'numero_doc_int1', 'Verifica');
			hasNoError = false;
		} else if (tipo_doc_int1.value == 'Carta d\'identitÃ ' && !regexDoc.test(numero_doc_int1.value)) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'numero_doc_int1', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'numero_doc_int1');
		}

		// DATA RILASCIO DOCUMENTO
		if (gg_emissione_int1.value.length != 2 || gg_emissione_int1.value == 'gg') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'gg_emissione_int1', 'Verifica');
			hasNoError = false;
		} else if (!gg_emissione_int1.value.match(onlyNumber)) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'gg_emissione_int1', 'Verifica');
			hasNoError = false;
		} else if (gg_emissione_int1.value > 31 || gg_emissione_int1.value < 1) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'gg_emissione_int1', 'Verifica');
			hasNoError = false;
		} else if (gg_emissione_int1.value > giorniNelMese(aa_emissione_int1.value, mm_emissione_int1.value)) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'gg_emissione_int1', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'gg_emissione_int1');
		}

		if (mm_emissione_int1.value.length != 2 || mm_emissione_int1.value == 'mm') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'mm_emissione_int1', 'Verifica');
			hasNoError = false;
		} else if (!mm_emissione_int1.value.match(onlyNumber)) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'mm_emissione_int1', 'Verifica');
			hasNoError = false;
		} else if (mm_emissione_int1.value > 12 || mm_emissione_int1.value < 1) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'mm_emissione_int1', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'mm_emissione_int1');
		}

		if (aa_emissione_int1.value.length != 4 || aa_emissione_int1.value == 'aaaa') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'aa_emissione_int1', 'Verifica');
			hasNoError = false;
		} else if (!aa_emissione_int1.value.match(onlyNumber)) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'aa_emissione_int1', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'aa_emissione_int1');
		}

		if (gg_emissione_int1.value != '' && gg_emissione_int1.value != 'gg' && mm_emissione_int1.value != '' && mm_emissione_int1.value != 'mm' && aa_emissione_int1.value != 'aaaa') {
			if (isLaterThanToday(aa_emissione_int1.value, mm_emissione_int1.value, gg_emissione_int1.value)) {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'divDataEmissione1', 'La data à¨ successiva ad oggi');
				hasNoError = false;
			} else if (!ctrlDataEmissione(aa_emissione_int1.value, mm_emissione_int1.value, gg_emissione_int1.value, tipo_doc_int1.value)) {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'divDataEmissione1', 'Il documento &egrave; scaduto');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'divDataEmissione1');
			}
		}

		// STATO RILASCIO DOCUMENTO
		if (stato_emissione_int1.value == '') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'stato_emissione_int1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'stato_emissione_int1');
		}

		// PROVINCIA RILASCIO DOCUMENTO
		if (provincia_emissione_int1.value == '' && (stato_emissione_int1.value == 'ITALIA' || stato_emissione_int1.value == '')) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'provincia_emissione_int1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'provincia_emissione_int1');
		}

		// COMUNE RILASCIO DOCUMENTO
		if (comune_emissione_int1.value == '' && (stato_emissione_int1.value == 'ITALIA' || stato_emissione_int1.value == '')) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'comune_emissione_int1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'comune_emissione_int1');
		}

		// QUALIFICATORE INDIRIZZO
		if (qualif_int1.value == '') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'qualif_int1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'qualif_int1');
		}

		// VIA INDIRIZZO
		if (via_int1.value == '') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'via_int1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'via_int1');
		}

		// CIVICO INDIRIZZO
		if (civico_int1.value == '') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'civico_int1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'civico_int1');
		}

		// CAP INDIRIZZO
		if (cap_int1.value == '') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'cap_int1');
			hasNoError = false;
		} else if (cap_int1.value.length < 5) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'cap_int1', 'Il CAP deve contenere 5 cifre');
			hasNoError = false;
		} else if (!ctrlCAP(cap_int1.value, comune_int1.value)) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'cap_int1', 'Inserisci CAP valido');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'cap_int1');
		}

		// PROVINCIA INDIRIZZO
		if (provincia_int1.value == '') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'provincia_int1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'provincia_int1');
		}

		// COMUNE INDIRIZZO
		if (comune_int1.value == '') {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'comune_int1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'comune_int1');
		}

		if (parzCompilati(qualif_recapito_int1, via_recapito_int1, civico_recapito_int1, cap_recapito_int1, provincia_recapito_int1, comune_recapito_int1)) {
			if (!$('#divIndirizzoCorrispondenza1').hasClass('expanded')) {
				$('#divIndirizzoCorrispondenza1').addClass(' expanded');
			}
		} else {
			if ($('#divIndirizzoCorrispondenza1').hasClass('expanded')) {
				$('#divIndirizzoCorrispondenza1').removeClass('expanded');
			}
		}

		if ($('#divIndirizzoCorrispondenza1').hasClass("expanded")) {

			// QUALIFICATORE RECAPITO
			if (qualif_recapito_int1.value == '') {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'qualif_recapito_int1');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'qualif_recapito_int1');
			}

			// VIA INDIRIZZO RECAPITO
			if (via_recapito_int1.value == '') {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'via_recapito_int1');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'via_recapito_int1');
			}

			// CIVICO INDIRIZZO RECAPITO
			if (civico_recapito_int1.value == '') {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'civico_recapito_int1');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'civico_recapito_int1');
			}

			// CAP INDIRIZZO RECAPITO
			if (cap_recapito_int1.value == '') {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'cap_recapito_int1');
				hasNoError = false;
			} else if (cap_recapito_int1.value.length < 5) {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'cap_recapito_int1', 'Il CAP deve contenere 5 cifre');
				hasNoError = false;
			} else if (!ctrlCAP(cap_recapito_int1.value, comune_recapito_int1.value)) {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'cap_recapito_int1', 'Il CAP non &egrave; corretto');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'cap_recapito_int1');
			}

			// PROVINCIA INDIRIZZO RECAPITO
			if (provincia_recapito_int1.value == '') {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'provincia_recapito_int1');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'provincia_recapito_int1');
			}

			// COMUNE INDIRIZZO RECAPITO
			if (comune_recapito_int1.value == '') {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'comune_recapito_int1');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'comune_recapito_int1');
			}
		}

		if (parzCompilati(qualif_domicilioCAI_int1, via_domicilioCAI_int1, civico_domicilioCAI_int1, cap_domicilioCAI_int1, comune_domicilioCAI_int1, provincia_domicilioCAI_int1)) {
			if (!$('#divIndirizzoCai1').hasClass('expanded')) {
				$('#divIndirizzoCai1').addClass(' expanded');
			}
		} else {
			if ($('#divIndirizzoCai1').hasClass('expanded')) {
				$('#divIndirizzoCai1').removeClass('expanded');
			}
		}

		if ($('#divIndirizzoCai1').hasClass("expanded")) {

			// QUALIFICATORE CAI
			if (qualif_domicilioCAI_int1.value == '') {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'qualif_domicilioCAI_int1');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'qualif_domicilioCAI_int1');
			}

			// VIA INDIRIZZO CAI
			if (via_domicilioCAI_int1.value == '') {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'via_domicilioCAI_int1');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'via_domicilioCAI_int1');
			}

			// CIVICO INDIRIZZO CAI
			if (civico_domicilioCAI_int1.value == '') {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'civico_domicilioCAI_int1');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'civico_domicilioCAI_int1');
			}

			// CAP INDIRIZZO CAI
			if (cap_domicilioCAI_int1.value == '') {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'cap_domicilioCAI_int1');
				hasNoError = false;
			} else if (cap_domicilioCAI_int1.value.length < 5) {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'cap_domicilioCAI_int1', 'Il CAP deve contenere 5 cifre');
				hasNoError = false;
			} else if (!ctrlCAP(cap_domicilioCAI_int1.value, comune_domicilioCAI_int1.value)) {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'cap_domicilioCAI_int1', 'Il CAP non &egrave; corretto');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'cap_domicilioCAI_int1');
			}

			// PROVINCIA INDIRIZZO CAI
			if (provincia_domicilioCAI_int1.value == '') {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'provincia_domicilioCAI_int1');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'provincia_domicilioCAI_int1');
			}

			// COMUNE INDIRIZZO CAI
			if (comune_domicilioCAI_int1.value == '') {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'comune_domicilioCAI_int1');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'comune_domicilioCAI_int1');
			}
		}

		// RECAPITI TELEFONICI
		if (parzCompilati(prefisso_int1, telefono_int1, prefisso_2_int1, telefono_2_int1, prefisso_int1, prefisso_int1)) {
			if (!$('#divRecapitiTelefonici1').hasClass('expanded')) {
				$('#divRecapitiTelefonici1').addClass(' expanded');
			}
		} else {
			if ($('#divRecapitiTelefonici1').hasClass('expanded')) {
				$('#divRecapitiTelefonici1').removeClass('expanded');
			}
		}

		if ($('#divRecapitiTelefonici1').hasClass("expanded")) {
			if (prefisso_int1.value != '' && telefono_int1.value == '') {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'telefono_int1');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'telefono_int1');
			}

			if (prefisso_int1.value == '' && telefono_int1.value != '') {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'prefisso_int1');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'prefisso_int1');
			}

			if (prefisso_2_int1.value != '' && telefono_2_int1.value == '') {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'telefono_2_int1');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'telefono_2_int1');
			}

			if (prefisso_2_int1.value == '' && telefono_2_int1.value != '') {
				firstError1 = setErrorAol(firstError1, 'intestatario1', 'prefisso_2_int1');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario1', 'prefisso_2_int1');
			}
		}

		// TU E WEBANK
		if (!checkRadio(isbpmcliente_int1)) {
			firstError1 = setErrorAol(firstError1, 'intestatario1', 'divIdentificazione1');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario1', 'divIdentificazione1');
		}

	}// END

	return hasNoError;
}

var firstError2 = '';
function validaIntestatario2() {

	var hasNoError = true;
	var onlyNumber = /^\d+$/;
	var onlyAlpha = '^[a-zA-Z0-9]+$';
	var numericExpression = /\d/;
	var regexDoc = /^[a-zA-Z]{2}[0-9]{6,7}$|^[0-9]{6,7}[a-zA-Z]{2}$/;

	with (document.aol) {

		var giorniNelmese = giorniNelMese(aa_nascita_int2.value, mm_nascita_int2.value);

		// Controllo validitÃ  nome
		if (nome_int2.value == "") {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'nome_int2');
			hasNoError = false;
		} else if (nome_int2.value.indexOf("@") != -1) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'nome_int2', 'Elimina il carattere @');
			hasNoError = false;
		} else if (nome_int2.value.match(numericExpression)) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'nome_int2', 'Non è consentito utilizzare numeri');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'nome_int2');
		}

		// Controllo validitÃ  cognome
		if (cognome_int2.value == "") {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'cognome_int2');
			hasNoError = false;
		} else if (cognome_int2.value.indexOf("@") != -1) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'cognome_int2', 'Elimina il carattere @');
			hasNoError = false;
		} else if (cognome_int2.value.match(numericExpression)) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'cognome_int2', 'Non è consentito utilizzare numeri');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'cognome_int2');
		}

		// Controllo validitÃ  data
		if (gg_nascita_int2.value.length != 2 || gg_nascita_int2.value == 'gg') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'gg_nascita_int2');
			hasNoError = false;
		} else if (!gg_nascita_int2.value.match(onlyNumber)) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'gg_nascita_int2', 'Verifica');
			hasNoError = false;
		} else if (gg_nascita_int2.value > 31 || gg_nascita_int2.value < 1) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'gg_nascita_int2', 'Verifica');
			hasNoError = false;
		} else if (gg_nascita_int2.value > giorniNelmese) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'gg_nascita_int2', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'gg_nascita_int2');
		}

		if (mm_nascita_int2.value.length != 2 || mm_nascita_int2.value == 'mm') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'mm_nascita_int2');
			hasNoError = false;
		} else if (!mm_nascita_int2.value.match(onlyNumber)) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'mm_nascita_int2', 'Verifica');
			hasNoError = false;
		} else if (mm_nascita_int2.value > 12 || mm_nascita_int2.value < 1) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'mm_nascita_int2', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'mm_nascita_int2');
		}

		if (aa_nascita_int2.value.length != 4 || aa_nascita_int2.value == 'aaaa') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'aa_nascita_int2');
			hasNoError = false;
		} else if (!aa_nascita_int2.value.match(onlyNumber)) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'aa_nascita_int2', 'Verifica');
			hasNoError = false;
		} else if (aa_nascita_int2.value < 1900) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'aa_nascita_int2', 'Verifica');
		} else {
			unsetErrorAol('intestatario2', 'aa_nascita_int2');
		}

		if (gg_nascita_int2.value != "" && gg_nascita_int2.value != 'gg' && mm_nascita_int2.value != '' && mm_nascita_int2.value != 'mm' && aa_nascita_int2.value != ''
		        && aa_nascita_int2.value != 'aaaa') {
			if (isLaterThanToday(aa_nascita_int2.value, mm_nascita_int2.value, gg_nascita_int2.value)) {
				firstError2 = setErrorAol(firstError2, 'intestatario2', 'divDataNascita2', 'La data è successiva ad oggi');
				hasNoError = false;
			} else if (checkMaggiorenne(document.aol.aa_nascita_int2.value, document.aol.mm_nascita_int2.value, document.aol.gg_nascita_int2.value)) {
				firstError2 = setErrorAol(firstError2, 'intestatario2', 'divDataNascita2', 'L\'intestatario deve essere maggiorenne');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario2', 'divDataNascita2');
			}
		}

		if (!checkRadio(sesso_int2)) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'sesso_int2');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'sesso_int2');
		}

		var msgFis1 = controllaCF(cod_fiscale_int2.value);
		var sex1 = 'M';
		if (sesso_int2[1].checked)
			sex1 = 'F';
		var dataNascita1 = gg_nascita_int2.value + '/' + mm_nascita_int2.value + '/' + aa_nascita_int2.value;

		if (cod_fiscale_int2.value == "") {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'cod_fiscale_int2');
			hasNoError = false;
		} else if (msgFis1 != "") {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'cod_fiscale_int2', msgFis1);
			hasNoError = false;
		} else if (!verificaCodFis(cod_fiscale_int2.value, cognome_int2.value, nome_int2.value, dataNascita1, sex1, 'primo')) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'cod_fiscale_int2', 'Il codice fiscale non è congruente ai dati inseriti');
			hasNoError = false;
		} else if (cod_fiscale_int2.value == document.aol.cod_fiscale_int1.value) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'cod_fiscale_int2', 'Codice fiscale giÃ  inserito');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'cod_fiscale_int2');
		}

		var mail1 = mail_int1.value.toUpperCase();
		var mail2 = mail_int2.value.toUpperCase();

		if (mail_int2.value == "") {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'mail_int2');
			hasNoError = false;
		} else if (!checkMail(mail_int2)) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'mail_int2', 'Verifica');
			hasNoError = false;
		} else if (mail1 == mail2) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'mail_int2', 'Indica un indirizzo email diverso dagli altri intestatari');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'mail_int2');
		}

		// CELLULARE
		if (prefisso_3_int2.value.length != 3) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'prefisso_3_int2');
			hasNoError = false;
		} else if (!prefisso_3_int2.value.match(onlyNumber)) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'prefisso_3_int2', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'prefisso_3_int2');
		}

		if (telefono_3_int2.value.length != 7 && telefono_3_int2.value.length != 6) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'telefono_3_int2');
			hasNoError = false;
		} else if (!telefono_3_int2.value.match(onlyNumber)) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'telefono_3_int2', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'telefono_3_int2');
		}

		if (operatore_int2.value == "") {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'operatore_int2');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'operatore_int2');
		}

		// CONTROLLO UNIVOCITA CELLULARE
		var cellulare1 = prefisso_3_int1.value + '' + telefono_3_int1.value;
		var cellulare2 = prefisso_3_int2.value + '' + telefono_3_int2.value;

		if (cellulare1 == cellulare2) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'cellulareInt2', 'Indica un numero di cellulare diverso dagli altri intestatari');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'cellulareInt2');
		}

		// STATO NASCITA
		if (stato_nascita_int2.value == '') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'stato_nascita_int2');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'stato_nascita_int2');
		}

		// CITTADINANZA NASCITA
		if (cittadinanza_int2.value == '') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'cittadinanza_int2');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'cittadinanza_int2');
		}

		// PROVINCIA NASCITA
		if (provincia_nascita_int2.value == '' && (stato_nascita_int2.value == 'ITALIA' || stato_nascita_int2.value == '')) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'provincia_nascita_int2');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'provincia_nascita_int2');
		}

		// COMUNE NASCITA
		if (comune_nascita_int2.value == '' && (stato_nascita_int2.value == 'ITALIA' || stato_nascita_int2.value == '')) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'comune_nascita_int2');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'comune_nascita_int2');
		}
		
		// RESIDENZA FISCALE E TIN
		if (residenzaFiscale_int2.value == '') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'residenzaFiscale_int2');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'residenzaFiscale_int2');
		}

		var regexTin = '^[A-Z0-9]{2}[ \-][A-Z0-9]{7}';
		if (residenzaFiscale_int2.value.indexOf('STATI UNITI') >= 0) {
			if (TIN_int2.value == '') {
				firstError2 = setErrorAol(firstError2, 'intestatario2', 'TIN_int2');
				hasNoError = false;
			} else if (!TIN_int2.value.match(regexTin)) {
				firstError2 = setErrorAol(firstError2, 'intestatario2', 'TIN_int2', 'Verifica');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario2', 'TIN_int2');
			}
		}

		// TITOLO DI STUDIO
		if (titolo_studio_int2.value == '') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'titolo_studio_int2');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'titolo_studio_int2');
		}

		// TIPO DOCUMENTO
		if (tipo_doc_int2.value == '') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'tipo_doc_int2');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'tipo_doc_int2');
		}

		// NUMERO DOCUMENTO
		if (numero_doc_int2.value == '') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'numero_doc_int2');
			hasNoError = false;
		} else if (!numero_doc_int2.value.match(onlyAlpha)) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'numero_doc_int2', 'Verifica');
			hasNoError = false;
		} else if (tipo_doc_int2.value == 'Carta d\'identitÃ ' && !regexDoc.test(numero_doc_int2.value)) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'numero_doc_int2', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'numero_doc_int2');
		}

		// DATA RILASCIO DOCUMENTO
		if (gg_emissione_int2.value.length != 2 || gg_emissione_int2.value == 'gg') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'gg_emissione_int2', 'Verifica');
			hasNoError = false;
		} else if (!gg_emissione_int2.value.match(onlyNumber)) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'gg_emissione_int2', 'Verifica');
			hasNoError = false;
		} else if (gg_emissione_int2.value > 31 || gg_emissione_int2.value < 1) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'gg_emissione_int2', 'Verifica');
			hasNoError = false;
		} else if (gg_emissione_int2.value > giorniNelMese(aa_emissione_int2.value, mm_emissione_int2.value)) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'gg_emissione_int2', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'gg_emissione_int2');
		}

		if (mm_emissione_int2.value.length != 2 || mm_emissione_int2.value == 'mm') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'mm_emissione_int2', 'Verifica');
			hasNoError = false;
		} else if (!mm_emissione_int2.value.match(onlyNumber)) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'mm_emissione_int2', 'Verifica');
			hasNoError = false;
		} else if (mm_emissione_int2.value > 12 || mm_emissione_int2.value < 1) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'mm_emissione_int2', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'mm_emissione_int2');
		}

		if (aa_emissione_int2.value.length != 4 || aa_emissione_int2.value == 'aaaa') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'aa_emissione_int2', 'Verifica');
			hasNoError = false;
		} else if (!aa_emissione_int2.value.match(onlyNumber)) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'aa_emissione_int2', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'aa_emissione_int2');
		}

		if (gg_emissione_int2.value != '' && gg_emissione_int2.value != 'gg' && mm_emissione_int2.value != '' && mm_emissione_int2.value != 'mm' && aa_emissione_int2.value != 'aaaa') {
			if (isLaterThanToday(aa_emissione_int2.value, mm_emissione_int2.value, gg_emissione_int2.value)) {
				firstError2 = setErrorAol(firstError2, 'intestatario2', 'divDataEmissione2', 'La data è successiva ad oggi');
				hasNoError = false;
			} else if (!ctrlDataEmissione(aa_emissione_int2.value, mm_emissione_int2.value, gg_emissione_int2.value, tipo_doc_int2.value)) {
				firstError2 = setErrorAol(firstError2, 'intestatario2', 'divDataEmissione2', 'Il documento &egrave; scaduto');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario2', 'divDataEmissione2');
			}
		}

		// STATO RILASCIO DOCUMENTO
		if (stato_emissione_int2.value == '') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'stato_emissione_int2');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'stato_emissione_int2');
		}

		// PROVINCIA RILASCIO DOCUMENTO
		if (provincia_emissione_int2.value == '' && (stato_emissione_int2.value == 'ITALIA' || stato_emissione_int2.value == '')) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'provincia_emissione_int2');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'provincia_emissione_int2');
		}

		// COMUNE RILASCIO DOCUMENTO
		if (comune_emissione_int2.value == '' && (stato_emissione_int2.value == 'ITALIA' || stato_emissione_int2.value == '')) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'comune_emissione_int2');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'comune_emissione_int2');
		}

		// QUALIFICATORE INDIRIZZO
		if (qualif_int2.value == '') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'qualif_int2');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'qualif_int2');
		}

		// VIA INDIRIZZO
		if (via_int2.value == '') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'via_int2');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'via_int2');
		}

		// CIVICO INDIRIZZO
		if (civico_int2.value == '') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'civico_int2');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'civico_int2');
		}

		// CAP INDIRIZZO
		if (cap_int2.value == '') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'cap_int2');
			hasNoError = false;
		} else if (cap_int2.value.length < 5) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'cap_int2', 'Il CAP deve contenere 5 cifre');
			hasNoError = false;
		} else if (!ctrlCAP(cap_int2.value, comune_int2.value)) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'cap_int2', 'Il CAP non &egrave; corretto');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'cap_int2');
		}

		// PROVINCIA INDIRIZZO
		if (provincia_int2.value == '') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'provincia_int2');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'provincia_int2');
		}

		// COMUNE INDIRIZZO
		if (comune_int2.value == '') {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'comune_int2');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'comune_int2');
		}

		if (parzCompilati(qualif_domicilioCAI_int2, via_domicilioCAI_int2, civico_domicilioCAI_int2, cap_domicilioCAI_int2, comune_domicilioCAI_int2, provincia_domicilioCAI_int2)) {
			if (!$('#divIndirizzoCai2').hasClass("expanded")) {
				$('#divIndirizzoCai2').addClass(' expanded');
			}
		} else {
			if ($('#divIndirizzoCai2').hasClass("expanded")) {
				$('#divIndirizzoCai2').removeClass('expanded');
			}
		}

		if ($('#divIndirizzoCai2').hasClass("expanded")) {

			// QUALIFICATORE CAI
			if (qualif_domicilioCAI_int2.value == '') {
				firstError2 = setErrorAol(firstError2, 'intestatario2', 'qualif_domicilioCAI_int2');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario2', 'qualif_domicilioCAI_int2');
			}

			// VIA INDIRIZZO CAI
			if (via_domicilioCAI_int2.value == '') {
				firstError2 = setErrorAol(firstError2, 'intestatario2', 'via_domicilioCAI_int2');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario2', 'via_domicilioCAI_int2');
			}

			// CIVICO INDIRIZZO CAI
			if (civico_domicilioCAI_int2.value == '') {
				firstError2 = setErrorAol(firstError2, 'intestatario2', 'civico_domicilioCAI_int2');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario2', 'civico_domicilioCAI_int2');
			}

			// CAP INDIRIZZO CAI
			if (cap_domicilioCAI_int2.value == '') {
				firstError2 = setErrorAol(firstError2, 'intestatario2', 'cap_domicilioCAI_int2');
				hasNoError = false;
			} else if (cap_domicilioCAI_int2.value.length < 5) {
				firstError2 = setErrorAol(firstError2, 'intestatario2', 'cap_domicilioCAI_int2', 'Il CAP deve contenere 5 cifre');
				hasNoError = false;
			} else if (!ctrlCAP(cap_domicilioCAI_int2.value, comune_domicilioCAI_int2.value)) {
				firstError2 = setErrorAol(firstError2, 'intestatario2', 'cap_domicilioCAI_int2', 'Il CAP non &egrave; corretto');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario2', 'cap_domicilioCAI_int2');
			}

			// PROVINCIA INDIRIZZO CAI
			if (provincia_domicilioCAI_int2.value == '') {
				firstError2 = setErrorAol(firstError2, 'intestatario2', 'provincia_domicilioCAI_int2');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario2', 'provincia_domicilioCAI_int2');
			}

			// COMUNE INDIRIZZO CAI
			if (comune_domicilioCAI_int2.value == '') {
				firstError2 = setErrorAol(firstError2, 'intestatario2', 'comune_domicilioCAI_int2');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario2', 'comune_domicilioCAI_int2');
			}
		}

		// RECAPITI TELEFONICI
		if (parzCompilati(prefisso_int2, telefono_int2, prefisso_2_int2, telefono_2_int2, prefisso_int2, prefisso_int2)) {
			if (!$('#divRecapitiTelefonici2').hasClass('expanded')) {
				$('#divRecapitiTelefonici2').addClass(' expanded');
			}
		} else {
			if ($('#divRecapitiTelefonici2').hasClass('expanded')) {
				$('#divRecapitiTelefonici2').removeClass('expanded');
			}
		}

		if ($('#divRecapitiTelefonici2').hasClass("expanded")) {
			if (prefisso_int2.value != '' && telefono_int2.value == '') {
				firstError2 = setErrorAol(firstError2, 'intestatario2', 'telefono_int2');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario2', 'telefono_int2');
			}

			if (prefisso_int2.value == '' && telefono_int2.value != '') {
				firstError2 = setErrorAol(firstError2, 'intestatario2', 'prefisso_int2');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario2', 'prefisso_int2');
			}

			if (prefisso_2_int2.value != '' && telefono_2_int2.value == '') {
				firstError2 = setErrorAol(firstError2, 'intestatario2', 'telefono_2_int2');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario2', 'telefono_2_int2');
			}

			if (prefisso_2_int2.value == '' && telefono_2_int2.value != '') {
				firstError2 = setErrorAol(firstError2, 'intestatario2', 'prefisso_2_int2');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario2', 'prefisso_2_int2');
			}
		}

		// TU E WEBANK
		if (!checkRadio(isbpmcliente_int2)) {
			firstError2 = setErrorAol(firstError2, 'intestatario2', 'divIdentificazione2');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario2', 'divIdentificazione2');
		}

	}// END

	return hasNoError;
}

var firstError3 = '';
function validaIntestatario3() {

	var hasNoError = true;
	var onlyNumber = /^\d+$/;
	var onlyAlpha = '^[a-zA-Z0-9]+$';
	var regexDoc = /^[a-zA-Z]{2}[0-9]{6,7}$|^[0-9]{6,7}[a-zA-Z]{2}$/;

	with (document.aol) {

		var numericExpression = /\d/;
		var onlyNumber = /^\d+$/;
		var giorniNelmese = giorniNelMese(aa_nascita_int3.value, mm_nascita_int3.value);

		// Controllo validitÃ  nome
		if (nome_int3.value == "") {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'nome_int3');
			hasNoError = false;
		} else if (nome_int3.value.indexOf("@") != -1) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'nome_int3', 'Elimina il carattere @');
			hasNoError = false;
		} else if (nome_int3.value.match(numericExpression)) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'nome_int3', 'Non è consentito utilizzare numeri');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'nome_int3');
		}

		// Controllo validitÃ  cognome
		if (cognome_int3.value == "") {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'cognome_int3');
			hasNoError = false;
		} else if (cognome_int3.value.indexOf("@") != -1) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'cognome_int3', 'Elimina il carattere @');
			hasNoError = false;
		} else if (cognome_int3.value.match(numericExpression)) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'cognome_int3', 'Non è consentito utilizzare numeri');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'cognome_int3');
		}

		// Controllo validitÃ  data
		if (gg_nascita_int3.value.length != 2 || gg_nascita_int3.value == 'gg') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'gg_nascita_int3');
			hasNoError = false;
		} else if (!gg_nascita_int3.value.match(onlyNumber)) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'gg_nascita_int3', 'Verifica');
			hasNoError = false;
		} else if (gg_nascita_int3.value > 31 || gg_nascita_int3.value < 1) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'gg_nascita_int3', 'Verifica');
			hasNoError = false;
		} else if (gg_nascita_int3.value > giorniNelmese) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'gg_nascita_int3', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'gg_nascita_int3');
		}

		if (mm_nascita_int3.value.length != 2 || mm_nascita_int3.value == 'mm') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'mm_nascita_int3');
			hasNoError = false;
		} else if (!mm_nascita_int3.value.match(onlyNumber)) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'mm_nascita_int3', 'Verifica');
			hasNoError = false;
		} else if (mm_nascita_int3.value > 12 || mm_nascita_int3.value < 1) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'mm_nascita_int3', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'mm_nascita_int3');
		}

		if (aa_nascita_int3.value.length != 4 || aa_nascita_int3.value == 'aaaa') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'aa_nascita_int3');
			hasNoError = false;
		} else if (!aa_nascita_int3.value.match(onlyNumber)) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'aa_nascita_int3', 'Verifica');
			hasNoError = false;
		} else if (aa_nascita_int3.value < 1900) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'aa_nascita_int2', 'Verifica');
		} else {
			unsetErrorAol('intestatario3', 'aa_nascita_int3');
		}

		if (gg_nascita_int3.value != "" && gg_nascita_int3.value != 'gg' && mm_nascita_int3.value != '' && mm_nascita_int3.value != 'mm' && aa_nascita_int3.value != ''
		        && aa_nascita_int3.value != 'aaaa') {
			if (isLaterThanToday(aa_nascita_int3.value, mm_nascita_int3.value, gg_nascita_int3.value)) {
				firstError3 = setErrorAol(firstError3, 'intestatario3', 'divDataNascita3', 'La data è successiva ad oggi');
				hasNoError = false;
			} else if (checkMaggiorenne(document.aol.aa_nascita_int3.value, document.aol.mm_nascita_int3.value, document.aol.gg_nascita_int3.value)) {
				firstError3 = setErrorAol(firstError3, 'intestatario3', 'divDataNascita3', 'L\'intestatario deve essere maggiorenne');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario3', 'divDataNascita3');
			}
		}

		if (!checkRadio(sesso_int3)) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'sesso_int3');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'sesso_int3');
		}

		var msgFis1 = controllaCF(cod_fiscale_int3.value);
		var sex1 = 'M';
		if (sesso_int3[1].checked)
			sex1 = 'F';
		var dataNascita1 = gg_nascita_int3.value + '/' + mm_nascita_int3.value + '/' + aa_nascita_int3.value;

		if (cod_fiscale_int3.value == "") {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'cod_fiscale_int3');
			hasNoError = false;
		} else if (msgFis1 != "") {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'cod_fiscale_int3', msgFis1);
			hasNoError = false;
		} else if (!verificaCodFis(cod_fiscale_int3.value, cognome_int3.value, nome_int3.value, dataNascita1, sex1, 'primo')) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'cod_fiscale_int3', 'Il codice fiscale non è congruente ai dati inseriti');
			hasNoError = false;
		} else if (cod_fiscale_int3.value == document.aol.cod_fiscale_int1.value || cod_fiscale_int3.value == cod_fiscale_int2.value) {
			firstError2 = setErrorAol(firstError2, 'intestatario3', 'cod_fiscale_int3', 'Codice fiscale giÃ  inserito');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'cod_fiscale_int3');
		}

		var mail1 = mail_int1.value.toUpperCase();
		var mail2 = mail_int2.value.toUpperCase();
		var mail3 = mail_int3.value.toUpperCase();

		if (mail_int3.value == "") {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'mail_int3');
			hasNoError = false;
		} else if (!checkMail(mail_int3)) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'mail_int3', 'Verifica');
			hasNoError = false;
		} else if (mail3 == mail1 || mail3 == mail2) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'mail_int3', 'Indica un indirizzo email diverso dagli altri intestatari');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'mail_int3');
		}

		if (prefisso_3_int3.value.length != 3) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'prefisso_3_int3');
			hasNoError = false;
		} else if (!prefisso_3_int3.value.match(onlyNumber)) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'prefisso_3_int3', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'prefisso_3_int3');
		}

		if (telefono_3_int3.value.length != 7 && telefono_3_int3.value.length != 6) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'telefono_3_int3');
			hasNoError = false;
		} else if (!telefono_3_int3.value.match(onlyNumber)) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'telefono_3_int3', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'telefono_3_int3');
		}

		if (operatore_int3.value == "") {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'operatore_int3');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'operatore_int3');
		}

		// CONTROLLO UNIVOCITA CELLULARE
		var cellulare1 = prefisso_3_int1.value + '' + telefono_3_int1.value;
		var cellulare2 = prefisso_3_int2.value + '' + telefono_3_int2.value;
		var cellulare3 = prefisso_3_int3.value + '' + telefono_3_int3.value;

		if (cellulare3 == cellulare1 || cellulare3 == cellulare2) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'cellulareInt3', 'Indica un numero di cellulare diverso dagli altri intestatari');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'cellulareInt3');
		}

		// STATO NASCITA
		if (stato_nascita_int3.value == '') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'stato_nascita_int3');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'stato_nascita_int3');
		}

		// CITTADINANZA NASCITA
		if (cittadinanza_int3.value == '') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'cittadinanza_int3');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'cittadinanza_int3');
		}

		// PROVINCIA NASCITA
		if (provincia_nascita_int3.value == '' && (stato_nascita_int3.value == 'ITALIA' || stato_nascita_int3.value == '')) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'provincia_nascita_int3');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'provincia_nascita_int3');
		}

		// COMUNE NASCITA
		if (comune_nascita_int3.value == '' && (stato_nascita_int3.value == 'ITALIA' || stato_nascita_int3.value == '')) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'comune_nascita_int3');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'comune_nascita_int3');
		}
		
		// RESIDENZA FISCALE E TIN
		if (residenzaFiscale_int3.value == '') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'residenzaFiscale_int3');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'residenzaFiscale_int3');
		}

		var regexTin = '^[A-Z0-9]{2}[ \-][A-Z0-9]{7}';
		if (residenzaFiscale_int3.value.indexOf('STATI UNITI') >= 0) {
			if (TIN_int3.value == '') {
				firstError3 = setErrorAol(firstError3, 'intestatario3', 'TIN_int3');
				hasNoError = false;
			} else if (!TIN_int3.value.match(regexTin)) {
				firstError3 = setErrorAol(firstError3, 'intestatario3', 'TIN_int3', 'Verifica');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario3', 'TIN_int3');
			}
		}

		// TITOLO DI STUDIO
		if (titolo_studio_int3.value == '') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'titolo_studio_int3');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'titolo_studio_int3');
		}

		// TIPO DOCUMENTO
		if (tipo_doc_int3.value == '') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'tipo_doc_int3');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'tipo_doc_int3');
		}

		// NUMERO DOCUMENTO
		if (numero_doc_int3.value == '') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'numero_doc_int3');
			hasNoError = false;
		} else if (!numero_doc_int3.value.match(onlyAlpha)) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'numero_doc_int3', 'Verifica');
			hasNoError = false;
		} else if (tipo_doc_int3.value == 'Carta d\'identitÃ ' && !regexDoc.test(numero_doc_int3.value)) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'numero_doc_int3', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'numero_doc_int3');
		}

		// DATA RILASCIO DOCUMENTO
		if (gg_emissione_int3.value.length != 2 || gg_emissione_int3.value == 'gg') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'gg_emissione_int3', 'Verifica');
			hasNoError = false;
		} else if (!gg_emissione_int3.value.match(onlyNumber)) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'gg_emissione_int3', 'Verifica');
			hasNoError = false;
		} else if (gg_emissione_int3.value > 31 || gg_emissione_int3.value < 1) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'gg_emissione_int3', 'Verifica');
			hasNoError = false;
		} else if (gg_emissione_int3.value > giorniNelMese(aa_emissione_int3.value, mm_emissione_int3.value)) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'gg_emissione_int3', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'gg_emissione_int3');
		}

		if (mm_emissione_int3.value.length != 2 || mm_emissione_int3.value == 'mm') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'mm_emissione_int3', 'Verifica');
			hasNoError = false;
		} else if (!mm_emissione_int3.value.match(onlyNumber)) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'mm_emissione_int3', 'Verifica');
			hasNoError = false;
		} else if (mm_emissione_int3.value > 12 || mm_emissione_int3.value < 1) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'mm_emissione_int3', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'mm_emissione_int3');
		}

		if (aa_emissione_int3.value.length != 4 || aa_emissione_int3.value == 'aaaa') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'aa_emissione_int3', 'Verifica');
			hasNoError = false;
		} else if (!aa_emissione_int3.value.match(onlyNumber)) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'aa_emissione_int3', 'Verifica');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'aa_emissione_int3');
		}

		if (gg_emissione_int3.value != '' && gg_emissione_int3.value != 'gg' && mm_emissione_int3.value != '' && mm_emissione_int3.value != 'mm' && aa_emissione_int3.value != 'aaaa') {
			if (isLaterThanToday(aa_emissione_int2.value, mm_emissione_int2.value, gg_emissione_int2.value)) {
				firstError3 = setErrorAol(firstError3, 'intestatario3', 'divDataEmissione3', 'La data è successiva ad oggi');
				hasNoError = false;
			} else if (!ctrlDataEmissione(aa_emissione_int3.value, mm_emissione_int3.value, gg_emissione_int3.value, tipo_doc_int3.value)) {
				firstError3 = setErrorAol(firstError3, 'intestatario3', 'divDataEmissione3', 'Il documento &egrave; scaduto');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario3', 'divDataEmissione3');
			}
		}

		// STATO RILASCIO DOCUMENTO
		if (stato_emissione_int3.value == '') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'stato_emissione_int3');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'stato_emissione_int3');
		}

		// PROVINCIA RILASCIO DOCUMENTO
		if (provincia_emissione_int3.value == '' && (stato_emissione_int3.value == 'ITALIA' || stato_emissione_int3.value == '')) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'provincia_emissione_int3');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'provincia_emissione_int3');
		}

		// COMUNE RILASCIO DOCUMENTO
		if (comune_emissione_int3.value == '' && (stato_emissione_int3.value == 'ITALIA' || stato_emissione_int3.value == '')) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'comune_emissione_int3');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'comune_emissione_int3');
		}

		// QUALIFICATORE INDIRIZZO
		if (qualif_int3.value == '') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'qualif_int3');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'qualif_int3');
		}

		// VIA INDIRIZZO
		if (via_int3.value == '') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'via_int3');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'via_int3');
		}

		// CIVICO INDIRIZZO
		if (civico_int3.value == '') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'civico_int3');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'civico_int3');
		}

		// CAP INDIRIZZO
		if (cap_int3.value == '') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'cap_int3');
			hasNoError = false;
		} else if (cap_int3.value.length < 5) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'cap_int3', 'Il CAP deve contenere 5 cifre');
			hasNoError = false;
		} else if (!ctrlCAP(cap_int3.value, comune_int3.value)) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'cap_int3', 'Il CAP non &egrave; corretto');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'cap_int3');
		}

		// PROVINCIA INDIRIZZO
		if (provincia_int3.value == '') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'provincia_int3');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'provincia_int3');
		}

		// COMUNE INDIRIZZO
		if (comune_int3.value == '') {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'comune_int3');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'comune_int3');
		}

		if (parzCompilati(qualif_domicilioCAI_int3, via_domicilioCAI_int3, civico_domicilioCAI_int3, cap_domicilioCAI_int3, comune_domicilioCAI_int3, provincia_domicilioCAI_int3)) {
			if (!$('#divIndirizzoCai3').hasClass("expanded")) {
				$('#divIndirizzoCai3').addClass(' expanded');
			}
		} else {
			if ($('#divIndirizzoCai3').hasClass("expanded")) {
				$('#divIndirizzoCai3').removeClass('expanded');
			}
		}

		if ($('#divIndirizzoCai3').hasClass("expanded")) {

			// QUALIFICATORE CAI
			if (qualif_domicilioCAI_int3.value == '') {
				firstError3 = setErrorAol(firstError3, 'intestatario3', 'qualif_domicilioCAI_int3');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario3', 'qualif_domicilioCAI_int3');
			}

			// VIA INDIRIZZO CAI
			if (via_domicilioCAI_int3.value == '') {
				firstError3 = setErrorAol(firstError3, 'intestatario3', 'via_domicilioCAI_int3');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario3', 'via_domicilioCAI_int3');
			}

			// CIVICO INDIRIZZO CAI
			if (civico_domicilioCAI_int3.value == '') {
				firstError3 = setErrorAol(firstError3, 'intestatario3', 'civico_domicilioCAI_int3');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario3', 'civico_domicilioCAI_int3');
			}

			// CAP INDIRIZZO CAI
			if (cap_domicilioCAI_int3.value == '') {
				firstError3 = setErrorAol(firstError3, 'intestatario3', 'cap_domicilioCAI_int3');
				hasNoError = false;
			} else if (cap_domicilioCAI_int3.value.length < 5) {
				firstError3 = setErrorAol(firstError3, 'intestatario3', 'cap_domicilioCAI_int3', 'Il CAP deve contenere 5 cifre');
				hasNoError = false;
			} else if (!ctrlCAP(cap_domicilioCAI_int3.value, comune_domicilioCAI_int3.value)) {
				firstError3 = setErrorAol(firstError3, 'intestatario3', 'cap_domicilioCAI_int3', 'Il CAP non &egrave; corretto');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario3', 'cap_domicilioCAI_int3');
			}

			// PROVINCIA INDIRIZZO CAI
			if (provincia_domicilioCAI_int3.value == '') {
				firstError3 = setErrorAol(firstError3, 'intestatario3', 'provincia_domicilioCAI_int3');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario3', 'provincia_domicilioCAI_int3');
			}

			// COMUNE INDIRIZZO CAI
			if (comune_domicilioCAI_int3.value == '') {
				firstError3 = setErrorAol(firstError3, 'intestatario3', 'comune_domicilioCAI_int3');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario3', 'comune_domicilioCAI_int3');
			}
		}

		// RECAPITI TELEFONICI
		if (parzCompilati(prefisso_int3, telefono_int3, prefisso_2_int3, telefono_2_int3, prefisso_int3, prefisso_int3)) {
			if (!$('#divRecapitiTelefonici3').hasClass('expanded')) {
				$('#divRecapitiTelefonici3').addClass(' expanded');
			}
		} else {
			if ($('#divRecapitiTelefonici3').hasClass('expanded')) {
				$('#divRecapitiTelefonici3').removeClass('expanded');
			}
		}

		if ($('#divRecapitiTelefonici3').hasClass("expanded")) {
			if (prefisso_int3.value != '' && telefono_int3.value == '') {
				firstError3 = setErrorAol(firstError3, 'intestatario3', 'telefono_int3');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario3', 'telefono_int3');
			}

			if (prefisso_int3.value == '' && telefono_int3.value != '') {
				firstError3 = setErrorAol(firstError3, 'intestatario3', 'prefisso_int3');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario3', 'prefisso_int3');
			}

			if (prefisso_2_int3.value != '' && telefono_2_int3.value == '') {
				firstError3 = setErrorAol(firstError3, 'intestatario3', 'telefono_2_int3');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario3', 'telefono_2_int3');
			}

			if (prefisso_2_int3.value == '' && telefono_2_int3.value != '') {
				firstError3 = setErrorAol(firstError3, 'intestatario3', 'prefisso_2_int3');
				hasNoError = false;
			} else {
				unsetErrorAol('intestatario3', 'prefisso_2_int3');
			}
		}

		// TU E WEBANK
		if (!checkRadio(isbpmcliente_int3)) {
			firstError3 = setErrorAol(firstError3, 'intestatario3', 'divIdentificazione3');
			hasNoError = false;
		} else {
			unsetErrorAol('intestatario3', 'divIdentificazione3');
		}

	}// END

	return hasNoError;
}

function getNumInt() {
	var numInt = 0;
	var inputScelta = $('#numeroIntestatari input');
	for (i = 0; i < inputScelta.length; i++) {
		if (inputScelta[i].checked) {
			return numInt = i + 1;
		}
	}
}

function valida() {
	var numInt = getNumInt();

	firstError1 = '';
	firstError2 = '';
	firstError3 = '';

	var e1 = true;
	var e2 = true;
	var e3 = true;

	if (numInt == 1) {
		e1 = validaIntestatario1();
	}

	if (numInt == 2) {
		e1 = validaIntestatario1();
		e2 = validaIntestatario2();
	}

	if (numInt == 3) {
		e1 = validaIntestatario1();
		e2 = validaIntestatario2();
		e3 = validaIntestatario3();
	}

	if (e1) {
		if ($('#intestatario1').length) {
			unsetError('intestatario1');
		}
	}

	if (e2) {
		if ($('#intestatario2').length) {
			unsetError('intestatario2');
		}
	}

	if (e3) {
		if ($('#intestatario3').length) {
			unsetError('intestatario3');
		}
	}

	if (e1 && e2 && e3) {
		document.aol.submit();

	} else {
		if (firstError1 != '') {
			if (numInt == 1) {
				setViewElement(firstError1);
			} else if (numInt > 1 && !$('#intestatario1').parent().parent().hasClass("expanded")) {
				setViewElement('intestatario1');
			} else {
				setViewElement(firstError1);
			}
		}

		if (firstError2 != '' && firstError1 == '') {
			if (numInt > 1 && !$('#intestatario2').parent().parent().hasClass("expanded")) {
				setViewElement('intestatario2');
			} else {
				setViewElement(firstError2);
			}
		}

		if (firstError3 != '' && firstError1 == '' && firstError2 == '') {
			if (numInt > 1 && !$('#intestatario3').parent().parent().hasClass("expanded")) {
				setViewElement('intestatario3');
			} else {
				setViewElement(firstError3);
			}
		}
	}
}

var firstError = '';
var error = true;
function validaStep2(numInt, identificazione) {
	
	firstError = '';
	error = true;

	with (document.aol) {

		if (!checkRadio(col)) {
			error = false;
			firstError = setErrorAol(firstError, null, 'contabili', 'Seleziona');
		} else {
			unsetError('contabili', 'Seleziona');
		}
		
		if ($('#ct').is(':checked')) {
			if (!checkRadio(ct_regimenew)) {
				error = false;
				firstError = setErrorAol(firstError, null, 'regime', 'Seleziona');
			} else {
				unsetError('regime', 'Seleziona');
			}

			if (!checkRadio(ng_commissioni)) {
				error = false;
				firstError = setErrorAol(firstError, null, 'commissioni', 'Seleziona');
			} else {
				unsetError('commissioni', 'Seleziona');
			}

			if (!checkRadio(colCt)) {
				error = false;
				firstError = setErrorAol(firstError, null, 'contabiliCt', 'Seleziona');
			} else {
				unsetError('contabiliCt', 'Seleziona');
			}
		}

		if (identificazione) {
			
			var radiBtns = $('.aolblock :input[name=modalita_riconoscimento]');
	
			if (!radiBtns.is(':checked')) {
				firstError = setErrorAol(firstError, null, 'divIdentificazione', 'Scegli la procedura di identificazione');
				error = false;
			} else {
				unsetError('divIdentificazione');
			}
	
			// Validazione sezione identificazone a distanza (bonifico)
			if ($('#chooseBonifico').is(':checked')) {

				var onlyNumber = /^\d+$/;
				var onlyAlpha = '^[a-zA-Z0-9]+$';
				var regexDoc = /^[a-zA-Z]{2}[0-9]{6,7}$|^[0-9]{6,7}[a-zA-Z]{2}$/;
	
				if (!(typeof ibanclientebon_int1 === 'undefined')) {
					validaIban('ibanclientebon_int1');
				}
	
				var docIdentita1 = !($('#blockDocIndentita1').css('display') == 'none');
				var altroDocIdentita1 = !($('#blockChooseOtherDoc1').css('display') == 'none');
				if (docIdentita1 && !altroDocIdentita1) {
	
					// TIPO DOCUMENTO
					if (tipo_doc2_int1.value == '') {
						firstError = setErrorAol(firstError, 'intestatarioId1', 'tipo_doc2_int1');
						error = false;
					} else {
						unsetErrorAol('intestatarioId1', 'tipo_doc2_int1');
					}
	
					// NUMERO DOCUMENTO
					if (numero_doc2_int1.value == '') {
						firstError = setErrorAol(firstError, 'intestatarioId1', 'numero_doc2_int1');
						error = false;
					} else if (!numero_doc2_int1.value.match(onlyAlpha)) {
						firstError = setErrorAol(firstError, 'intestatarioId1', 'numero_doc2_int1', 'Verifica');
						error = false;
					} else if ((tipo_doc2_int1.value == 'Carta d\'identitÃ ' && stato_emissione2_int1.value == 'ITALIA') && !regexDoc.test(numero_doc2_int1.value)) {
						firstError = setErrorAol(firstError, 'intestatarioId1', 'numero_doc2_int1', 'Verifica');
						error = false;
					} else {
						unsetErrorAol('intestatarioId1', 'numero_doc2_int1');
					}
	
					// DATA RILASCIO DOCUMENTO
					if (gg_emissione2_int1.value.length != 2 || gg_emissione2_int1.value == 'gg') {
						firstError = setErrorAol(firstError, 'intestatarioId1', 'gg_emissione2_int1');
						error = false;
					} else if (!gg_emissione2_int1.value.match(onlyNumber)) {
						firstError = setErrorAol(firstError, 'intestatarioId1', 'gg_emissione2_int1', 'Verifica');
						error = false;
					} else if (gg_emissione2_int1.value > 31 || gg_emissione2_int1.value < 1) {
						firstError = setErrorAol(firstError, 'intestatarioId1', 'gg_emissione2_int1', 'Verifica');
						error = false;
					} else if (gg_emissione2_int1.value > giorniNelMese(aa_emissione2_int1.value, mm_emissione2_int1.value)) {
						firstError = setErrorAol(firstError, 'intestatarioId1', 'gg_emissione2_int1', 'Verifica');
						error = false;
					} else {
						unsetErrorAol('intestatarioId1', 'gg_emissione2_int1');
					}
	
					if (mm_emissione2_int1.value.length != 2 || mm_emissione2_int1.value == 'mm') {
						firstError = setErrorAol(firstError, 'intestatarioId1', 'mm_emissione2_int1');
						error = false;
					} else if (!mm_emissione2_int1.value.match(onlyNumber)) {
						firstError = setErrorAol(firstError, 'intestatarioId1', 'mm_emissione2_int1', 'Verifica');
						error = false;
					} else if (mm_emissione2_int1.value > 12 || mm_emissione2_int1.value < 1) {
						firstError = setErrorAol(firstError, 'intestatarioId1', 'mm_emissione2_int1', 'Verifica');
						error = false;
					} else {
						unsetErrorAol('intestatarioId1', 'mm_emissione2_int1');
					}
	
					if (aa_emissione2_int1.value.length != 4 || aa_emissione2_int1.value == 'aaaa') {
						firstError = setErrorAol(firstError, 'intestatarioId1', 'aa_emissione2_int1');
						error = false;
					} else if (!aa_emissione2_int1.value.match(onlyNumber)) {
						firstError = setErrorAol(firstError, 'intestatarioId1', 'aa_emissione2_int1', 'Verifica');
						error = false;
					} else {
						unsetErrorAol('intestatarioId1', 'aa_emissione2_int1');
					}
	
					if (gg_emissione2_int1.value != '' && gg_emissione2_int1.value != 'gg' && mm_emissione2_int1.value != '' && mm_emissione2_int1.value != 'mm' && aa_emissione2_int1.value != 'aaaa') {
						if (isLaterThanToday(aa_emissione2_int1.value, mm_emissione2_int1.value, gg_emissione2_int1.value)) {
							firstError = setErrorAol(firstError, 'intestatarioId1', 'divDataEmissione1', 'La data è successiva ad oggi');
							error = false;
						} else if (!ctrlDataEmissione(aa_emissione2_int1.value, mm_emissione2_int1.value, gg_emissione2_int1.value, tipo_doc2_int1.value)) {
							firstError = setErrorAol(firstError, 'intestatarioId1', 'divDataEmissione1', 'Il documento è scaduto');
							error = false;
						} else {
							unsetErrorAol('intestatarioId1', 'divDataEmissione1');
						}
					}
	
					// STATO RILASCIO DOCUMENTO
					if (stato_emissione2_int1.value == '') {
						firstError = setErrorAol(firstError, 'intestatarioId1', 'stato_emissione2_int1');
						error = false;
					} else {
						unsetErrorAol('intestatarioId1', 'stato_emissione2_int1');
					}
	
					// PROVINCIA RILASCIO DOCUMENTO
					if (provincia_emissione2_int1.value == '' && (stato_emissione2_int1.value == 'ITALIA' || stato_emissione2_int1.value == '')) {
						firstError = setErrorAol(firstError, 'intestatarioId1', 'provincia_emissione2_int1');
						error = false;
					} else {
						unsetErrorAol('intestatarioId1', 'provincia_emissione2_int1');
					}
	
					// COMUNE RILASCIO DOCUMENTO
					if (comune_emissione2_int1.value == '' && (stato_emissione2_int1.value == 'ITALIA' || stato_emissione2_int1.value == '')) {
						firstError = setErrorAol(firstError, 'intestatarioId1', 'comune_emissione2_int1');
						error = false;
					} else {
						unsetErrorAol('intestatarioId1', 'comune_emissione2_int1');
					}
	
				} else if (!docIdentita1 && altroDocIdentita1) {
	
					if (altroDoc_int1.value == '') {
						firstError = setErrorAol(firstError, 'intestatarioId1', 'altroDoc_int1');
						error = false;
					} else {
						unsetErrorAol('intestatarioId1', 'altroDoc_int1');
					}
	
				}
	
				// SECONDO INTESTATARIO
				if (numInt > 1) {
	
					if (!(typeof ibanclientebon_int2 === 'undefined')) {
						validaIban('ibanclientebon_int2');
					}
	
					var docIdentita2 = !($('#blockDocIndentita2').css('display') == 'none');
					var altroDocIdentita2 = !($('#blockChooseOtherDoc2').css('display') == 'none');
					if (docIdentita2 && !altroDocIdentita2) {
	
						// TIPO DOCUMENTO
						if (tipo_doc2_int2.value == '') {
							firstError = setErrorAol(firstError, 'intestatarioId2', 'tipo_doc2_int2');
							error = false;
						} else {
							unsetErrorAol('intestatarioId2', 'tipo_doc2_int2');
						}
	
						// NUMERO DOCUMENTO
						if (numero_doc2_int2.value == '') {
							firstError = setErrorAol(firstError, 'intestatarioId2', 'numero_doc2_int2');
							error = false;
						} else if (!numero_doc2_int2.value.match(onlyAlpha)) {
							firstError = setErrorAol(firstError, 'intestatarioId2', 'numero_doc2_int2', 'Verifica');
							error = false;
						} else if ((tipo_doc2_int2.value == 'Carta d\'identitÃ ' && stato_emissione2_int2.value == 'ITALIA') && !regexDoc.test(numero_doc2_int2.value)) {
							firstError = setErrorAol(firstError, 'intestatarioId2', 'numero_doc2_int2', 'Verifica');
							error = false;
						} else {
							unsetErrorAol('intestatarioId2', 'numero_doc2_int2');
						}
	
						// DATA RILASCIO DOCUMENTO
						if (gg_emissione2_int2.value.length != 2 || gg_emissione2_int2.value == 'gg') {
							firstError = setErrorAol(firstError, 'intestatarioId2', 'gg_emissione2_int2');
							error = false;
						} else if (!gg_emissione2_int2.value.match(onlyNumber)) {
							firstError = setErrorAol(firstError, 'intestatarioId2', 'gg_emissione2_int2', 'Verifica');
							error = false;
						} else if (gg_emissione2_int2.value > 31 || gg_emissione2_int2.value < 1) {
							firstError = setErrorAol(firstError, 'intestatarioId2', 'gg_emissione2_int2', 'Verifica');
							error = false;
						} else if (gg_emissione2_int2.value > giorniNelMese(aa_emissione2_int2.value, mm_emissione2_int2.value)) {
							firstError = setErrorAol(firstError, 'intestatarioId2', 'gg_emissione2_int2', 'Verifica');
							error = false;
						} else {
							unsetErrorAol('intestatarioId2', 'gg_emissione2_int2');
						}
	
						if (mm_emissione2_int2.value.length != 2 || mm_emissione2_int2.value == 'mm') {
							firstError = setErrorAol(firstError, 'intestatarioId2', 'mm_emissione2_int2');
							error = false;
						} else if (!mm_emissione2_int2.value.match(onlyNumber)) {
							firstError = setErrorAol(firstError, 'intestatarioId2', 'mm_emissione2_int2', 'Verifica');
							error = false;
						} else if (mm_emissione2_int2.value > 12 || mm_emissione2_int2.value < 1) {
							firstError = setErrorAol(firstError, 'intestatarioId2', 'mm_emissione2_int2', 'Verifica');
							error = false;
						} else {
							unsetErrorAol('intestatarioId2', 'mm_emissione2_int2');
						}
	
						if (aa_emissione2_int2.value.length != 4 || aa_emissione2_int2.value == 'aaaa') {
							firstError = setErrorAol(firstError, 'intestatarioId2', 'aa_emissione2_int2');
							error = false;
						} else if (!aa_emissione2_int2.value.match(onlyNumber)) {
							firstError = setErrorAol(firstError, 'intestatarioId2', 'aa_emissione2_int2', 'Verifica');
							error = false;
						} else {
							unsetErrorAol('intestatarioId2', 'aa_emissione2_int2');
						}
	
						if (gg_emissione2_int2.value != '' && gg_emissione2_int2.value != 'gg' && mm_emissione2_int2.value != '' && mm_emissione2_int2.value != 'mm' && aa_emissione2_int2.value != 'aaaa') {
							if (isLaterThanToday(aa_emissione2_int2.value, mm_emissione2_int2.value, gg_emissione2_int2.value)) {
								firstError = setErrorAol(firstError, 'intestatarioId2', 'divDataEmissione2', 'La data è successiva ad oggi');
								error = false;
							} else if (!ctrlDataEmissione(aa_emissione2_int2.value, mm_emissione2_int2.value, gg_emissione2_int2.value, tipo_doc2_int2.value)) {
								firstError = setErrorAol(firstError, 'intestatarioId2', 'divDataEmissione2', 'Il documento è scaduto');
								error = false;
							} else {
								unsetErrorAol('intestatarioId2', 'divDataEmissione2');
							}
						}
	
						// STATO RILASCIO DOCUMENTO
						if (stato_emissione2_int2.value == '') {
							firstError = setErrorAol(firstError, 'intestatarioId2', 'stato_emissione2_int2');
							error = false;
						} else {
							unsetErrorAol('intestatarioId2', 'stato_emissione2_int2');
						}
	
						// PROVINCIA RILASCIO DOCUMENTO
						if (provincia_emissione2_int2.value == '' && (stato_emissione2_int2.value == 'ITALIA' || stato_emissione2_int2.value == '')) {
							firstError = setErrorAol(firstError, 'intestatarioId2', 'provincia_emissione2_int2');
							error = false;
						} else {
							unsetErrorAol('intestatarioId2', 'provincia_emissione2_int2');
						}
	
						// COMUNE RILASCIO DOCUMENTO
						if (comune_emissione2_int2.value == '' && (stato_emissione2_int2.value == 'ITALIA' || stato_emissione2_int2.value == '')) {
							firstError = setErrorAol(firstError, 'intestatarioId2', 'comune_emissione2_int2');
							error = false;
						} else {
							unsetErrorAol('intestatarioId2', 'comune_emissione2_int2');
						}
	
					} else if (!docIdentita2 && altroDocIdentita2) {
	
						if (altroDoc_int2.value == '') {
							firstError = setErrorAol(firstError, 'intestatarioId2', 'altroDoc_int2');
							error = false;
						} else {
							unsetErrorAol('intestatarioId2', 'altroDoc_int2');
						}
	
					}
	
				}// fine secondo intestatario
	
				// TERZO INTESTATARIO
				if (numInt > 2) {
	
					if (!(typeof ibanclientebon_int3 === 'undefined')) {
						validaIban('ibanclientebon_int3');
					}
	
					var docIdentita3 = !($('#blockDocIndentita3').css('display') == 'none');
					var altroDocIdentita3 = !($('#blockChooseOtherDoc3').css('display') == 'none');
					if (docIdentita3 && !altroDocIdentita3) {
	
						// TIPO DOCUMENTO
						if (tipo_doc2_int3.value == '') {
							firstError = setErrorAol(firstError, 'intestatarioId3', 'tipo_doc2_int3');
							error = false;
						} else {
							unsetErrorAol('intestatarioId3', 'tipo_doc2_int3');
						}
	
						// NUMERO DOCUMENTO
						if (numero_doc2_int3.value == '') {
							firstError = setErrorAol(firstError, 'intestatarioId3', 'numero_doc2_int3');
							error = false;
						} else if (!numero_doc2_int3.value.match(onlyAlpha)) {
							firstError = setErrorAol(firstError, 'intestatarioId3', 'numero_doc2_int3', 'Verifica');
							error = false;
						} else if ((tipo_doc2_int3.value == 'Carta d\'identitÃ ' && stato_emissione2_int3.value == 'ITALIA') && !regexDoc.test(numero_doc2_int3.value)) {
							firstError = setErrorAol(firstError, 'intestatarioId3', 'numero_doc2_int3', 'Verifica');
							error = false;
						} else {
							unsetErrorAol('intestatarioId3', 'numero_doc2_int3');
						}
	
						// DATA RILASCIO DOCUMENTO
						if (gg_emissione2_int3.value.length != 2 || gg_emissione2_int3.value == 'gg') {
							firstError = setErrorAol(firstError, 'intestatarioId3', 'gg_emissione2_int3');
							error = false;
						} else if (!gg_emissione2_int3.value.match(onlyNumber)) {
							firstError = setErrorAol(firstError, 'intestatarioId3', 'gg_emissione2_int3', 'Verifica');
							error = false;
						} else if (gg_emissione2_int3.value > 31 || gg_emissione2_int3.value < 1) {
							firstError = setErrorAol(firstError, 'intestatarioId3', 'gg_emissione2_int3', 'Verifica');
							error = false;
						} else if (gg_emissione2_int3.value > giorniNelMese(aa_emissione2_int3.value, mm_emissione2_int3.value)) {
							firstError = setErrorAol(firstError, 'intestatarioId3', 'gg_emissione2_int3', 'Verifica');
							error = false;
						} else {
							unsetErrorAol('intestatarioId3', 'gg_emissione2_int3');
						}
	
						if (mm_emissione2_int3.value.length != 2 || mm_emissione2_int3.value == 'mm') {
							firstError = setErrorAol(firstError, 'intestatarioId3', 'mm_emissione2_int3');
							error = false;
						} else if (!mm_emissione2_int3.value.match(onlyNumber)) {
							firstError = setErrorAol(firstError, 'intestatarioId3', 'mm_emissione2_int3', 'Verifica');
							error = false;
						} else if (mm_emissione2_int3.value > 12 || mm_emissione2_int3.value < 1) {
							firstError = setErrorAol(firstError, 'intestatarioId3', 'mm_emissione2_int3', 'Verifica');
							error = false;
						} else {
							unsetErrorAol('intestatarioId3', 'mm_emissione2_int3');
						}
	
						if (aa_emissione2_int3.value.length != 4 || aa_emissione2_int3.value == 'aaaa') {
							firstError = setErrorAol(firstError, 'intestatarioId3', 'aa_emissione2_int3');
							error = false;
						} else if (!aa_emissione2_int3.value.match(onlyNumber)) {
							firstError = setErrorAol(firstError, 'intestatarioId3', 'aa_emissione2_int3', 'Verifica');
							error = false;
						} else {
							unsetErrorAol('intestatarioId3', 'aa_emissione2_int3');
						}
	
						if (gg_emissione2_int3.value != '' && gg_emissione2_int3.value != 'gg' && mm_emissione2_int3.value != '' && mm_emissione2_int3.value != 'mm' && aa_emissione2_int3.value != 'aaaa') {
							if (isLaterThanToday(aa_emissione2_int3.value, mm_emissione2_int3.value, gg_emissione2_int3.value)) {
								firstError = setErrorAol(firstError, 'intestatarioId3', 'divDataEmissione3', 'La data è successiva ad oggi');
								error = false;
							} else if (!ctrlDataEmissione(aa_emissione2_int3.value, mm_emissione2_int3.value, gg_emissione2_int3.value, tipo_doc2_int3.value)) {
								firstError = setErrorAol(firstError, 'intestatarioId3', 'divDataEmissione3', 'Il documento è scaduto');
								error = false;
							} else {
								unsetErrorAol('intestatarioId3', 'divDataEmissione3');
							}
						}
	
						// STATO RILASCIO DOCUMENTO
						if (stato_emissione2_int3.value == '') {
							firstError = setErrorAol(firstError, 'intestatarioId3', 'stato_emissione2_int3');
							error = false;
						} else {
							unsetErrorAol('intestatarioId3', 'stato_emissione2_int3');
						}
	
						// PROVINCIA RILASCIO DOCUMENTO
						if (provincia_emissione2_int3.value == '' && (stato_emissione2_int3.value == 'ITALIA' || stato_emissione2_int3.value == '')) {
							firstError = setErrorAol(firstError, 'intestatarioId3', 'provincia_emissione2_int3');
							error = false;
						} else {
							unsetErrorAol('intestatarioId3', 'provincia_emissione2_int3');
						}
	
						// COMUNE RILASCIO DOCUMENTO
						if (comune_emissione2_int3.value == '' && (stato_emissione2_int3.value == 'ITALIA' || stato_emissione2_int3.value == '')) {
							firstError = setErrorAol(firstError, 'intestatarioId3', 'comune_emissione2_int3');
							error = false;
						} else {
							unsetErrorAol('intestatarioId3', 'comune_emissione2_int3');
						}
	
					} else if (!docIdentita3 && altroDocIdentita3) {
	
						if (altroDoc_int3.value == '') {
							firstError = setErrorAol(firstError, 'intestatarioId3', 'altroDoc_int3');
							error = false;
						} else {
							unsetErrorAol('intestatarioId3', 'altroDoc_int3');
						}
					}
	
				} //fine terzo intestatario
			} //fine sezione identificazione a distanza
		} //fine sezione identificazione
		
		// --------------------------------------- risultato validazione
		if (error) {
			document.aol.submit();
		} else {
			setViewElement(firstError);
		}
	}
}

/**
 * @description Effettua la chiamata ajax al server
 * @param String Nome del metodo GET o POST
 * @param String Url per la chiamata al server senza cgi
 * @param Function Nome della funzione che bisogna eseguire in caso di risposta positiva
 * @param Function Nome della funzione che bisogna eseguire in caso di risposta negativa
 * @param Array Contiene i parametri che bisogna passare al server per effettuare la chiamata
 */
AJAXGenericCall = function(method, url, successFunc, failureFunc, parameters) {
	jqAJAXCallSync('POST', null, cgi_script + url, successFunc, failureFunc, parameters);
}

function jqAJAXCallSync(method, type, url, successFunc, failureFunc, parameters) {
	var ajaxOptions = {
	    type : method,
	    url : url
	};
	// 'json', 'xml', 'html'
	if (type) {
		ajaxOptions.dataType = type;
	}
	if (successFunc) {
		ajaxOptions.success = successFunc;
	}
	if (failureFunc) {
		ajaxOptions.failure = failureFunc;
	}
	if (parameters) {
		ajaxOptions.data = parameters
	}

	ajaxOptions.async = false;

	$.ajax(ajaxOptions);
}

validaIban = function(idIban) {
	if ($('#' + idIban).val() == '') {
		error = false;
		firstError = setErrorAol(firstError, null, idIban, 'Inserisci');

	} else if ($('#' + idIban).val().length < 27) {
		error = false;
		firstError = setErrorAol(firstError, null, idIban, 'L\'Iban deve contenere 27 caratteri.');

	} else {
		
		unsetError(idIban);

		var parameters = 'iban=' + $('#' + idIban).val();
		AJAXGenericCall('POST', '/aoladmin/validaIban.do',

		function(data) {
			sucCallbackFields(data, idIban);
		},

		failureCallbackFields, parameters);
	}
}

sucCallbackFields = function(data, idIban) {
	if (!data.isItaliano) {
		error = false;
		firstError = setErrorAol(
		        firstError,
		        null,
		        idIban,
        		'L\'Iban inserito è di un conto corrente aperto presso un Istituto di Monetica Elettronica e non consente l\'identificazione tramite bonifico. Inserisci l\'Iban di un conto corrente aperto presso una banca.');

	} else if (!data.isValid) {
		error = false;
		firstError = setErrorAol(firstError, null, idIban, 'L\'Iban inserito non è corretto. Riprova.');

	} else if (!data.isNotInBlackList) {
		error = false;
		firstError = setErrorAol(
		        firstError,
		        null,
		        idIban,
        		'L\'Iban inserito è di un conto corrente aperto presso un Istituto di Monetica Elettronica e non consente l\'identificazione tramite bonifico. Inserisci l\'Iban di un conto corrente aperto presso una banca.');

	} else {
		unsetError(idIban);
	}
}

failureCallbackFields = function(data) {
	// TODO
}
