/*
 * Requisiti
 *  - Per addValidationError() serve formValidationHandling.js
 * 
 * Nota:
 *  11/09/2008
 *   - Per passaggio a monoframe, modificato radicalmente e portato a common.
 *   - checkNum() => checkNumber()
 */

/* Restituisce esito test se i caratteri passati sono solo cifre */
var reOnlyDigits = new RegExp('^[0-9]+$');

function areOnlyDigits(characters) {
    return reOnlyDigits.test(characters);
}

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

function spazi(num) {
    if (num === '') {
        return num;
    }

    var stringa = '';
    for (var i = 0; i < num.length; i++) {
        if (num.charAt(i) === ' ') {
            stringa += '+';
        } else stringa += num.charAt(i);
    }

    return stringa;
}

function checkNumber(fieldValue, minLimit, maxLimit, fieldName) {
    if (fieldValue === '') {
        return 'Inserire un numero nel campo ' + fieldName + '.';
    }
    if (!areOnlyDigits(fieldValue)) {
        return 'Inserire solo cifre nel campo ' + fieldName + '.';
    }
    if (minLimit && fieldValue < minLimit) {
        return 'Il valore ' + fieldValue + ' &egrave; inferiore al limite minimo ' + minLimit + ' per il campo ' + fieldName + '.';
    }
    if (maxLimit && fieldValue > maxLimit) {
        return 'Il valore ' + fieldValue + ' &egrave; superiore al limite massimo ' + maxLimit + ' per il campo ' + fieldName + '.';
    }

    return null;
}

// noinspection JSUnusedGlobalSymbols
function checkCampo(str, nomecampo, campo) {
    var strippedStr = stripBlanks(str);
    if (strippedStr === '') {
        setCommonErrorCondition(campo, ('Inserire il campo ' + nomecampo + '!'), form, campo);
    }
}

function checkForm(form, func) {
    var esito;
    if (func === 'R') {
        if ((esito = checkNumber(form.cardNumber.value, null, null, 'Numero carta')) != null) {
            setCommonErrorCondition('cardNumber', esito, form, 'cardNumber');
        }
        if ((esito = checkNumber(form.intAmount.value, null, null, 'Importo')) != null) {
            setCommonErrorCondition('amount', esito, form, 'intAmount');
        }
        if ((esito = checkNumber(form.decAmount.value, null, null, 'Importo decimale')) != null) {
            setCommonErrorCondition('amount', esito, form, 'decAmount');
        }
    } else if (func === 'I') {
        if ((esito = checkNumber(form.cardNumber.value, null, null, 'Numero carta')) != null) {
            setCommonErrorCondition('cardNumber', esito, form, 'cardNumber');
        }
    } else if (func === 'E') {
        // noinspection JSUnresolvedVariable
        if (form.typePinCarta[0].checked === false && form.typePinCarta[1].checked === false) {
            setCommonErrorCondition('typePinCarta', 'Selezionare la Tipologia!', form, null);
        }
        // noinspection JSUnresolvedVariable
        if ((esito = checkNumber(form.codeRequest.value, null, null, 'Codice di richiesta'))) {
            setCommonErrorCondition('codeRequest_lbl', esito, form, 'codeRequest');
        }
    } else if (func === 'RQ') {
        // noinspection JSUnresolvedVariable
        if (!form.receiving[0].checked && !form.receiving[1].checked) {
            setCommonErrorCondition('receiving', 'Selezionare la Modalit&agrave; di ricezione contratto.', form, null);
        }
        // noinspection JSUnresolvedVariable
        if (!form.accepted.checked) {
            setCommonErrorCondition('accepted_lbl', 'Selezionare \'accetto\' per proseguire.', form, 'accepted');
        }
    }

    return true;
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