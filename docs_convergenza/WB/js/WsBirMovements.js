/*
 * Requisiti
 *  - Per addValidationError() serve formValidationHandling.js
 * 
 * Nota:
 *  27/10/2008
 *   - Per passaggio a monoframe, modificato radicalmente.
 */

/* Restituisce esito test se i caratteri passati sono solo cifre */
var reOnlyDigits = new RegExp('^[0-9]+$');

function areOnlyDigits(characters) {
    return reOnlyDigits.test(characters);
}

/* Elimina spazi all'inizio e alla fine della stringa */

// noinspection JSUnusedGlobalSymbols
function stripBlanks(str) {
    // elimina tutti i caratteri blank dall'inizio della stringa
    while (str.charAt(0) === ' ') {
        str = str.substr(1);
    }
    // elimina tutti caratteri blank dalla fine della stringa
    while (str.charAt(str.length - 1) === ' ') {
        str = str.substr(0, str.length - 1);
    }

    return str;
}

/* elimina gli eventuali zeri alla sinistra del valore passato compe parametro */

// noinspection JSUnusedGlobalSymbols
function togliZeri(valore) {
    var lunghezza = valore.length;
    for (var i = 0; i < lunghezza; i++) {
        if (valore.charAt(0) === '0') {
            valore = valore.substring(1, valore.length);
            if (lunghezza === '1') {
                valore = '0';
            }
        } else if (valore.charAt(i) !== '0') {
            return valore;
        }
    }
    return valore;
}

/* Aggiunge l'errore ed evidenzia la label corrispondente */
function setCommonErrorCondition(fieldLabelId, message, form, fieldName) {
    addValidationError(fieldLabelId, message);

    if (!fieldName) {
        fieldName = fieldLabelId;
    }
    if (form[fieldName].focus) {
        form[fieldName].focus();
    }
    if (form[fieldName].select) {
        form[fieldName].select();
    }
}

/* Controllo campo vuoto */
function checkFieldValue(formObj) {
    var fieldValue = String(formObj.value);
    return fieldValue !== "";
}

/* Controlli su campi data */
function checkDay(formObj) {
    var value = formObj.value;
    if (value === "") return true;
    else if (value < 1 || value > 31) {
        return false;
    }
    return true;
}

function checkMonth(formObj) {
    var value = formObj.value;
    if (value === "") return true;
    else return !(value < 1 || value > 12);

}

function checkYear(formObj) {
    var value = formObj.value;
    if (value === "") return true;
    else return !(value < 1850 || value > 2000);
}

/* Validazione della form */
function checkForm(form) {
    // Verifica sul numero carta
    if (!checkFieldValue(form.cardNumber)) {
        setCommonErrorCondition('numcard', 'Inserire il numero di carta!', form, 'cardNumber');
    } else {
        // Campo carta di lunghezza 16 per tipologia jeans oppure lunghezza 8 per tipologia bir
        var lunghezzaCampoCarta = 0;
        if (form.type.value === 'bir') {//WsConstants.cardType.BIR_CARD
            lunghezzaCampoCarta = 8; // carta di tipologia bir
        } else lunghezzaCampoCarta = 16; // carta di tipologia inRete o BIR

        //Lunghezza campo carta specifico
        var tmp = String(form.cardNumber.value);
        if (tmp.length !== lunghezzaCampoCarta) {
            setCommonErrorCondition('numcard', "Il numero della carta deve essere composto da " + lunghezzaCampoCarta + " cifre, non da " + tmp.length + "!", form, 'cardNumber');
        }
    }

    //Controllo Data - non obbligatoria ma se inserita va validata
    //Giorno
    if (!checkFieldValue(form.nascitaGiorno)) {
        setCommonErrorCondition('datnasc', 'Inserire il giorno di nascita dell\'intestatario della carta!', form, 'nascitaGiorno');
    } else if (!areOnlyDigits(form.nascitaGiorno.value)) {
        setCommonErrorCondition('datnasc', 'Inserire solo cifre nel campo \"giorno di nascita\" dell\'intestatario della carta!', form, 'nascitaGiorno');
    } else if (!checkDay(form.nascitaGiorno)) {
        setCommonErrorCondition('datnasc', 'Attenzione, giorno di nascita dell\'intestatario della carta inesatto!', form, 'nascitaGiorno');
    }
    //Mese
    if (!checkFieldValue(form.nascitaMese)) {
        setCommonErrorCondition('datnasc', 'Inserire il mese di nascita dell\'intestatario della carta!', form, 'nascitaMese');
    } else if (!areOnlyDigits(form.nascitaMese.value)) {
        setCommonErrorCondition('datnasc', 'Inserire solo cifre nel campo \"mese di nascita\" dell\'intestatario della carta!', form, 'nascitaMese');
    } else if (!checkMonth(form.nascitaMese)) {
        setCommonErrorCondition('datnasc', 'Attenzione, mese di nascita dell\'intestatario della carta inesatto!', form, 'nascitaMese');
    }
    //Anno
    if (!checkFieldValue(form.nascitaAnno)) {
        setCommonErrorCondition('datnasc', 'Inserire l\'anno di nascita dell\'intestatario della carta!', form, 'nascitaAnno');
    } else if (!areOnlyDigits(form.nascitaAnno.value)) {
        setCommonErrorCondition('datnasc', 'Inserire solo cifre nel campo \"anno di nascita\" dell\'intestatario della carta!', form, 'nascitaAnno');
    } else if (!checkYear(form.nascitaAnno)) {
        setCommonErrorCondition('datnasc', 'Attenzione, anno di nascita dell\'intestatario della carta inesatto!', form, 'nascitaAnno');
    }

    //controllo importo
    if (checkFieldValue(form.importoDa)) {
        if (!areOnlyDigits(form.importoDa.value)) {
            setCommonErrorCondition('importo', 'Inserire solo cifre nel campo \"importo da\"!', form, 'importoDa');
        }
    }
    if (checkFieldValue(form.importoA)) {
        if (!areOnlyDigits(form.importoA.value)) {
            setCommonErrorCondition('importo', 'Inserire solo cifre nel campo \"importo a\"!', form, 'importoA');
        }
    }

    //controllo periodi
    // noinspection JSUnresolvedVariable
    var periodoDa = form.periodoAnnoDa.value + form.periodoMeseDa.value + form.periodoGiornoDa.value;
    // noinspection JSUnresolvedVariable
    var periodoAl = form.periodoAnnoAl.value + form.periodoMeseAl.value + form.periodoGiornoAl.value;
    if (periodoDa > periodoAl) {
        setCommonErrorCondition('periodo', 'Il campo \"Periodo dal\" deve avere data antecedente al campo \"Periodo al\"!', form, 'periodoAnnoDa');
    }

    //controllo importi
    var impDa = parseInt(form.importoDa.value);
    var impA = parseInt(form.importoA.value);
    if (impDa > impA) {
        setCommonErrorCondition('importo', 'Il campo \"Importo da\" deve essere inferiore od uguale al campo \"Importo a\"!', form, 'importoDa');
    }
}