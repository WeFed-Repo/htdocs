function checkMaggiorenne(aa, mm, gg) {
	var birthDate = new Date(aa, mm - 1, gg);
	var limitDate = new Date(parseInt(new Date().getFullYear()) - 18, new Date().getMonth(), new Date().getDate());

	if (birthDate.getTime() > limitDate.getTime()) {
		return true;
	} else {
		return false;
	}
}

function checkStato(value, idField1, idField2) {

	if (value == 'ITALIA' || value == '') {
		fieldEnable(idField1, true);
		fieldEnable(idField2, true);
	} else {
		// Provincia
		$('#' + idField1).val('');
		$('#' + idField1).className = '';
		fieldEnable(idField1, false);

		// Comune
		$('#' + idField2).val('');
		$('#' + idField2).className = '';
		fieldEnable(idField2, false);
	}
}

function setAutoritaEmissione(idTipoDocumento, idStatoEmissione, idAutorita) {

	var statoEmissione = $('#' + idStatoEmissione).val();
	var tipoDocumento = $('#' + idTipoDocumento).val();

	if ('ITALIA' != statoEmissione) {
		$('#' + idAutorita).val('08');
	}

	// CartaIdentita("01", "Carta d'Identit�"),
	else if (tipoDocumento == '01') {
		$('#' + idAutorita).val('01');
	}

	// PatenteGuida("02","Patente di guida"),
	else if (tipoDocumento == '02') {
		$('#' + idAutorita).val('04');
	}

	// Passaporto("03", "Passaporto"),
	else if (tipoDocumento == '03') {
		$('#' + idAutorita).val('02');
	}

	// PortoArmi("04", "Porto d'armi"),
	else if (tipoDocumento == '04') {
		$('#' + idAutorita).val('02');
	}

	// TesseraPostale("05", "Tessera Postale"),
	else if (tipoDocumento == '05') {
		$('#' + idAutorita).val('05');
	}

	// Altro("06", "Altro"),
	else if (tipoDocumento == '06') {
		$('#' + idAutorita).val('99');
	}

	// TesseraMinisteriale("07","Tessera Ministeriale"),
	else if (tipoDocumento == '07') {
		$('#' + idAutorita).val('07');
	}

	// CartaIdentitaMinori("09","Certificato d'Identit� per minori"),
	else if (tipoDocumento == '09') {
		$('#' + idAutorita).val('01');
	}

	// LibrettoPensione("10","Libretto pensione"),
	else if (tipoDocumento == '10') {
		$('#' + idAutorita).val('10');
	}

	// PermessoSoggiorno("11","Permesso di soggiorno"),
	else if (tipoDocumento == '11') {
		$('#' + idAutorita).val('02');
	}

	// Fittizio("99", "Documento Fittizio");
	else if (tipoDocumento == '99') {
		$('#' + idAutorita).val('99');
	}
}

function controllaCF(cf) {
	var validi, i, s, set1, set2, setpari, setdisp;

	cf = cf.toUpperCase();
	if (cf.length != 16)
		return "La lunghezza del codice fiscale non � corretta";

	validi = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	for (i = 0; i < 16; i++) {
		if (validi.indexOf(cf.charAt(i)) == -1)
			return "Il codice fiscale contiene un carattere non valido";
	}

	// Controllo del CIN
	set1 = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	set2 = "ABCDEFGHIJABCDEFGHIJKLMNOPQRSTUVWXYZ";
	setpari = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	setdisp = "BAKPLCQDREVOSFTGUHMINJWZYX";
	s = 0;

	for (i = 1; i <= 13; i += 2)
		s += setpari.indexOf(set2.charAt(set1.indexOf(cf.charAt(i))));
	for (i = 0; i <= 14; i += 2)
		s += setdisp.indexOf(set2.charAt(set1.indexOf(cf.charAt(i))));
	if (s % 26 != cf.charCodeAt(15) - 'A'.charCodeAt(0))
		return "Il codice fiscale non � corretto";

	return "";
}

function verificaCodFis(FisIns, Cognome, Nome, DataNascita, Sesso) {
	var ret = true;
	FisIns = FisIns.toUpperCase();
	var first = FisIns.substring(0, 11);
	var fisCalc = calcoloCodFis(Cognome, Nome, DataNascita, Sesso);

	if (first != fisCalc) {
		ret = false;
	} else {
		return true;
	}
}

function calcoloCodFis(Cognome, Nome, DataNascita, Sesso) {
	Cognome = Cognome.toUpperCase();
	Nome = Nome.toUpperCase();
	ggmmaa = DataNascita.split("/");
	Sesso = Sesso.toUpperCase();

	TxtCodFis = "";

	// RICAVO IL COGNOME (1-3)
	Vocali = "";
	Consonanti = "";
	for ( var i = 0; i < Cognome.length; i++) {
		a = Cognome.charAt(i);
		if (/[AEIOU]/.test(a))
			Vocali += a;
		if (/[BCDFGHJKLMNPQRSTVWXYZ]/.test(a))
			Consonanti += a;
	}
	Consonanti = (Consonanti + Vocali + "XXX").substr(0, 3);
	TxtCodFis = Consonanti;

	// RICAVO IL NOME (4-6)
	Vocali = "";
	Consonanti = "";
	for ( var i = 0; i < Nome.length; i++) {
		a = Nome.charAt(i);
		if (/[AEIOU]/.test(a))
			Vocali += a;
		if (/[BCDFGHJKLMNPQRSTVWXYZ]/.test(a))
			Consonanti += a;
	}

	if (Consonanti.length > 3) {
		Consonanti = Consonanti.charAt(0) + Consonanti.substr(2, 2);
	} else {
		Consonanti = (Consonanti + Vocali + "XXX").substr(0, 3);
	}
	TxtCodFis += Consonanti;

	// Anno di nascita (7-8)
	aa = String(10000 + parseFloat(ggmmaa[2])).substr(3);
	TxtCodFis += aa;

	// Mese di nascita (9)
	TxtCodFis += (" ABCDEHLMPRST").charAt(ggmmaa[1]);

	// Giorno di nascita e sesso (10-11)
	Sesso = (Sesso == "F") ? 140 : 100;
	gg = String(parseFloat(ggmmaa[0]) + Sesso).substr(1);
	TxtCodFis += gg;

	return (TxtCodFis);
}

function checkMail(input) {
	return mailAddressValidator(input.value);
}

function checkRadio(obj) {
	for ( var i = 0; i < obj.length; i++) {
		if (obj[i].checked) {
			return true;
		}
	}
	return false;
}

function isBisestile(anno) {
	if (anno % 4 == 0) {
		if (anno % 100 == 0) {
			if (anno % 400 == 0) {
				return true;
			} else {
				return false;
			}
		} else {
			return true;
		}
	} else {
		return false;
	}
}

function giorniNelMese(anno, mese) {
	var bisestile = isBisestile(anno);

	switch (mese) {
	case '1':
	case '3':
	case '5':
	case '7':
	case '8':
	case '10':
	case '12':
	case '01':
	case '03':
	case '05':
	case '07':
	case '08':
		return 31;
	case '4':
	case '6':
	case '9':
	case '04':
	case '06':
	case '09':
	case '11':
		return 30;
	default:
		if (bisestile) {
			return 29;
		} else {
			return 28;
		}
	}
}

function isLaterThanToday(anno, mese, giorno) {
	var today = new Date()
	var gg_corrente = today.getDate();
	if (gg_corrente < 10)
		gg_corrente = "0" + String(gg_corrente);

	var mm_corrente = today.getMonth() + 1;
	if (mm_corrente < 10)
		mm_corrente = "0" + String(mm_corrente);

	var aa_corrente = today.getFullYear();

	if (anno > aa_corrente) {
		return true;
	}

	if (anno == aa_corrente) {
		if (mese > mm_corrente) {
			return true;
		}
	}

	if (anno == aa_corrente) {
		if (mese == mm_corrente) {
			if (giorno > gg_corrente) {
				return true;
			}
		}
	}
	return false;
}

function nextFocus(obj, next, value, length) {
	if (obj.value.length == length) {
		next.focus();
		next.value = "";
		next.className = "";
	} else {
		return;
	}
}

function ctrlCAP(valCap, valComune) {

	var valArr = valComune.split("~");
	var cap1 = valArr[1];
	var cap2 = valArr[2];

	if (valCap < cap1 || valCap > cap2) {
		return false;
	} else {
		return true;
	}
}

function ctrlDataEmissione(aa, mm, gg, tipoDoc) {

	var datScad = 1826;
	var strDate2 = '06/25/2003';
	var strDate1 = mm + '/' + gg + '/' + aa;

	datDate1 = Date.parse(strDate1);
	datDate2 = new Date();
	datDate3 = Date.parse(strDate2);
   
	datediff = ((datDate2 - datDate1) / (24 * 60 * 60 * 1000));
	datediff2 = datDate1 - datDate3;
	
	if (datediff2 > 0) {
		var datScad = 3652; // 10 anni
	}

	if ((tipoDoc.indexOf('Carta') != -1 || tipoDoc == '01') && datediff > datScad) {
		alert("errore carta");
		return false;
	} else if (datediff > 3652) {
		alert("errore altri doc");
		return false;
	} else {
		return true;
	}
}

function noBack() {
	if (history.forward() != null) {
		self.location.reload();
	}
}

// Imposta una select al valore passato come parametro
function impostaValoreSelect(idSelect, valore) {
	var el = $('#' + idSelect);
	if (el)
		el.val(valore);
}

function setErrorAol(firstError, idDivIntestatario, idField, value) {

	// Setto l'errore nel campo
	if (value) {
		setError(idField, value);
	} else {
		setError(idField);
	}

	// Il campo � contenuto in un accordion
	var isAccordion = $('#' + idDivIntestatario).length > 0;

	// L'accordion � aperto
	var isAccordionOpen = false;
	if (isAccordion) {
		isAccordionOpen = $('#' + idDivIntestatario).parent().parent().hasClass('expanded');
	}

	if (isAccordion) {
		if (isAccordionOpen) {

			if (firstError == '') {
				firstError = idField;
			}

		} else {

			// Setto errore nell'accordion
			setError(idDivIntestatario);

			if (firstError == '') {
				firstError = idDivIntestatario;
			}
		}

	} else {

		if (firstError == '') {
			firstError = idField;
		}
	}

	return firstError;
}

function unsetErrorAol(idDivIntestatario, idField) {
	unsetError(idField);
}

function unsetErrorAccordion(idDivIntestatario) {
	var isAccordion = $('#' + idDivIntestatario).length > 0;
	if (isAccordion) {
		unsetError(idDivIntestatario);
	}
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
