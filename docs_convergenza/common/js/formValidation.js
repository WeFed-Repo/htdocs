/*-----------------------------------------------------*/
/* Funzioni per la gestione della validazione dei form (secondo le specifiche CONDES) */
/*-----------------------------------------------------*/
/*
* Uso: ---- Per usare questa gestione si devono ottemperare i seguenti punti: 1) Definire una funzione (es: validationImpl(data) ) quale
* implementazione delle validazioni specifiche. Il nome di tale funzione deve poi essere fornito come argomento della funzione di cui al punto 3). La
* funzione chiamerï¿œ addValidationError(labelId, message) per ogni label da marcare e/o ogni messaggio da mostrare. (es:
* addValidationError('lbl_nome', 'Il dato &lt;nome&gt; deve essere specificato.'); ) Il nome della funzione puï¿œ coincidere con "validationImpl()" o
* essere diversa. La lblId puï¿œ essere un nome singolo o un array. 2) Definire una sezione di nome "errorsSection" (es: <div id="errorsSection"
* style="display: none;"> ) che rappresenta l'area in cui compariranno tutti i messaggi di errore. All'interno della quale ci deve essere un'altra
* sezione di nome "errorMessages" (es: <ul class="alert" id="errorMessages"> ) e di tipo <ul> a cui saranno aggiunti i messaggi in forma <li> come da
* specifiche CONDES. Vedere errorsSection.jsp 3) Chiamare la validazione "doValidations(validationImpl, data)" fornendo il nome della funzione di
* implementazione specifica di cui al punto 1). (es: <... onclick="return doValidations(validationImpl, null);"... > )
*/
/* ======================================================================================================== */
var dbgLvlOff = 0,
    dbgLvlErr = 1,
    dbgLvlWarn = 2,
    dbgLvlInf = 3,
    dbgLvlDbg = 4;
var dbgLvlDescriptions = ['', 'Error', 'Warning', 'Info', 'Debug'];

function Logger(lvl) { 
    this.currentLvl = lvl;
    this.log = function (lvl, functionName, message) {
        if (!(lvl > this.currentLvl)) {
            if (typeof console !== 'undefined') {
                console.log(dbgLvlDescriptions[lvl] + ' - ' + functionName + ': ' + message);
            } else {
                alert(dbgLvlDescriptions[lvl] + ' - ' + functionName + ': ' + message);
            }
        }
    };
    this.error = function (functionName, message) {
        this.log(dbgLvlErr, functionName, message);
    };
    this.warning = function (functionName, message) {
        this.log(dbgLvlWarn, functionName, message);
    };
    this.info = function (functionName, message) {
        this.log(dbgLvlInf, functionName, message);
    };
    this.debug = function (functionName, message) {
        this.log(dbgLvlDbg, functionName, message);
    };
    this.begin = function (functionName, message) {
        this.log(dbgLvlDbg, functionName, 'Begin...' + (message ? (' - ' + message) : ''));
    };
    this.end = function (functionName) {
        this.log(dbgLvlDbg, functionName, '... end.');
    };
}

// noinspection JSUnusedGlobalSymbols
var dbgLvl_prod = dbgLvlOff,
    dbgLvl_svil = dbgLvlWarn,
    dbgLvl_max = dbgLvlDbg;

var dbgLvl;
if (typeof (dbgLvl) === 'undefined' || !dbgLvl) dbgLvl = dbgLvl_prod;
var logger = new Logger(dbgLvl);

/* ======================================================================================================== */
function isArray(testObject) {
    return testObject && !(testObject.propertyIsEnumerable('length')) && typeof testObject === 'object' && typeof testObject.length === 'number';
}

/* ======================================================================================================== */
/* Sezione relativa alla marcatura (evidenziazione) delle label dei campi */

/* ======================================================================================================== */
function PointedOutLabel(id, prevColor) {
    this.id = id;
    this.prevColor = prevColor;
}

var pointedOutLabels = [];

/* Marca la label di campo per la segnalazione dell'errore. */
function pointoutLabel(labelId) {
    var functionName = ('pointoutLabel()');
    logger.begin(functionName, 'labelId <' + labelId + '>.');

    // Ignoro "noField"
    if (labelId && (labelId === 'noField' || labelId === 'noLabel')) {
        logger.debug(functionName, '... label ignored: <' + labelId + '>.');
        logger.end(functionName);
        return false;
    }

    // Aggancio l'elemento html.
    var lblElem = document.getElementById(labelId);
    if (lblElem && lblElem.tagName !== 'INPUT') {
        //memorizzo il form di appartenenza
        if (!validationFormDOMObject)
            validationFormDOMObject = $(lblElem).closest("form");
        // .. salvo il colore attuale.
        var currentColor = lblElem.style.color;
        logger.debug(functionName, '... currentColor <' + currentColor + '>.');
        // .. imposto il colore di marcatura
        if ($(lblElem).hasClass('errorBor')) {
            $(lblElem).addClass('on');
        } else {
            lblElem.style.color = 'red';
        }
        // memorizzo l'elemento nella lista di quelli marcati/da ripristinare.
        var element = new PointedOutLabel(labelId, currentColor);
        var found = false;
        for (var idxL = 0; idxL < pointedOutLabels.length; ++idxL) {
            var k = pointedOutLabels[idxL];
            if (k.id === element.id) {
                found = true;
                break;
            }
        }
        if (found === false)
            pointedOutLabels.push(element);
    } else {
        if (!lblElem) {
            logger.warning(functionName, 'Element not found for label <' + labelId + '>.');
        } else {
            logger.warning(functionName, 'Wrong element for label <' + labelId + '>: is (uncorrectly) an "<input type...>".');
        }
    }

    logger.end(functionName);
    return true;
}

/* Marca le label di campo per la segnalazione dell'errore. */
function pointoutLabels(labelIds) {
    var functionName = ('pointoutLabels()');
    logger.begin(functionName, 'labelIds.length <' + labelIds.length + '>.');

    // Per ogni label...
    for (var idxL = 0; idxL < labelIds.length; ++idxL) {
        pointoutLabel(labelIds[idxL]);
    }

    logger.end(functionName);
}

/* Smarca tutte le label di campo */
function unpointoutLabels() {
    var functionName = ('unpointoutLabels()');
    logger.begin(functionName);

    logger.debug(functionName, 'pointedOutLabels.length: <' + pointedOutLabels.length + '>.');

    // Per ogni marcatura fatta...
    for (var idxL = 0; idxL < pointedOutLabels.length; ++idxL) {
        var pointedOutLabel = pointedOutLabels[idxL];
        // aggancio l'elemento html
        var lblElem = document.getElementById(pointedOutLabel.id);
        if (lblElem) {
            // ripristino il colore originale
            if ($(lblElem).hasClass('errorBor on')) {
                $(lblElem).removeClass('on');
            } else {
                lblElem.style.color = pointedOutLabel.prevColor;
            }
        } else {
            logger.warning(functionName, 'Label <' + pointedOutLabel.id + '> not found in DOM.');
        }
    }

    // Per ogni campo visibile toglie la classe "errore" qualora presente nel container centrale
    $("#contenuti").find("input, select, textarea").removeClass('errore');
    // Fine rimozione classe sui campi

    logger.end(functionName);
}

/* ======================================================================================================== */
/* Sezione relativa alla gestione della validazione */
/*
* La validazione vera e propria, specifica per i singoli campi, deve essere fatta in una funzione il cui nome dovrï¿œ essere fornito. Uso:
* doValidations(validationImpl, data) - ritorna <true> se _non_ ci sono errori.
*/
/* ======================================================================================================== */
var validationErrors; // boolean
var validationFormDOMObject; // form
/* Toglie tutti i messaggi di errore dalla sezione */
function removeAllValidationErrors() {
    var functionName = ('removeAllValidationErrors()');
    logger.begin(functionName);

    // Aggancio l'elemento html 'lista errori'
    var errorMessagesElem = $('#errorMessages');
    if (!errorMessagesElem.length) {
        throw new Error('Missing element <errorMessages>.');
    }

    // .. e svuoto.
    errorMessagesElem.html('');
    validationErrors = false;
    validationFormDOMObject = null;
    logger.end(functionName);
}

/*
* Aggiunge il messaggio nella sezione errori isOutOfScopeIntentional: fornire true se la chiamata a questa funzione ï¿œ eseguita intenzionalmente fuori
* del normale ciclo di validazione; altrimenti sarï¿œ notificato come errore di programmazione. Un tipico caso di <isOutOfScopeIntentional> ï¿œ gestito
* da addActionMessages.jsp
*/

function addValidationError(labelId, message, isOutOfScopeIntentional) {
    var functionName = ('addValidationError()');

    if (arguments.length === 1) {
        message = labelId;
        labelId = null;
    }

    logger.begin(functionName);

    validationErrors = true;

    // Notifico se: non ï¿œ nel contesto di una validazione (mancata chiamata a doValidations())
    if (!isDoValidationsRunning && !isOutOfScopeIntentional && !isOutOfScopeAlreadyNotified) {
        isOutOfScopeAlreadyNotified = true;
        logger.error(functionName, 'Function invoked unintentionally out of doValidations() scope.');
    }

    if (labelId) {
        if (isArray(labelId)) {
            pointoutLabels(labelId);
        } else if (!(labelId === '')) {
            var pointed = pointoutLabel(labelId);
            if (!pointed) {
                logger.info(functionName, '... label <' + labelId + '> not pointed for message <' + message + '>.')
            }
        }
    }

    if (message && message !== '') {
        var errorMessagesElem = $('#errorMessages');
        if (!errorMessagesElem.length) {
            throw new Error('Missing element <errorMessages>.');
        }
        if (message.substr(0, 5) !== 'HTML_') {
            message = $('<div>').html(message).text();
        } else {
            message = message.substr(5);
        }
        errorMessagesElem.append($('<li>').html(message));
    }

    logger.end(functionName);
}

/* ======================================================================================================== */
/* Esegue il ciclo di validazione: pre-, -impl, post- */
var isInLoop = false;
var isDoValidationsRunning = false;
var isOutOfScopeAlreadyNotified = false;
var firstError = true;
var subtitle = ''; // valore assunto: viene sostituito da errorsSection.jsp

/***
 *
 * @param validationImpl
 * @param data
 * @returns {boolean}
 */
function doValidations(validationImpl, data) {
    var functionName = ('doValidations()');
    logger.begin(functionName);

    try {
        if (isInLoop) {
            // noinspection ExceptionCaughtLocallyJS
            throw new Error('Code error.');
        }
        isInLoop = true;

        isDoValidationsRunning = true; // isOutOfScopeAlreadyNotified = false; inutile.
        var validationImplException = null;

        // Resetta/nasconde
        if (typeof (validationImpl) !== 'string' || validationImpl !== '*onlyShow') {
            try {
                do_preValidations();
            } catch (e) {
                // noinspection ExceptionCaughtLocallyJS
                throw new Error('Exception detected in do_preValidations(): ' + e.message);
            }
        }

        // Esegue controlli e aggiunge errori se: non ï¿œ solo *RESET
        if (typeof validationImpl === 'string' && validationImpl === '*reset') {
            logger.debug(functionName, "... only reset; no validations");
        } else if (typeof validationImpl === 'string' && validationImpl === '*onlyShow') {
            logger.debug(functionName, "... only show; no validations");
        } else if (typeof validationImpl === 'function') {
            try {
                validationImpl(data);
            } catch (e) { // Posticipa l'eventuale eccezione.
                validationImplException = e;
                if (!logger.currentLvl < dbgLvlErr) {
                    addValidationError("noField", ('Exception detected in \'' + validationImpl.name + '()\' (validationImpl): ' + e.message), false);
                }
            }
        }

        // Visualizza
        if (typeof (validationImpl) !== 'string' || validationImpl !== '*reset') {
            try {
                do_postValidations();
            } catch (e) {
                // noinspection ExceptionCaughtLocallyJS
                throw new Error('Exception detected in do_postValidations(): ' + e.message);
            }
        }

        // Gestione posticipata dell'eccezione di validationImpl
        if (validationImplException !== null) {
            // noinspection ExceptionCaughtLocallyJS
            throw new Error('Exception detected in \'' + validationImpl.name + '()\' (validationImpl): ' + validationImplException.message);
        }
    } catch (e) {
        validationErrors = true;
        logger.error(functionName, (typeof (e) === 'string' ? e : e.message));
    }

    isDoValidationsRunning = false;

    logger.end(functionName);
    isInLoop = false;

    return (!validationErrors);
}

/* Esegue la fase di pre-validazione: disattiva tutti gli stati di errore */
function do_preValidations() {
    var functionName = ('do_preValidations()');
    logger.begin(functionName);

    // Aggancio l'elemento html 'sezione errori'
    var errorsSectionElem = $('#errorsSection');
    if (errorsSectionElem.length) {
        // chiudo la sezione
        errorsSectionElem.hide();
        // ripristino il sottotitolo originale
        $('#error_box').children().first().html(subtitle);
    } else {
        logger.error(functionName, '#errorsSection element not found in document.');
    }

    // Ripristino lo stato di tutte le label marcate precedentemente
    unpointoutLabels();

    // Cancello tutti messaggi di errore presenti in sezione.
    try {
        removeAllValidationErrors();
        firstError = true;
    } catch (e) {
        logger.error(functionName, e);
    }

    logger.end(functionName);
}

/* Dummy: Nel caso non fosse definita l'implementazione specifica... */
// noinspection JSUnusedGlobalSymbols
function validationImpl(data) {
    if (logger.currentLvl < dbgLvlWarn) {
        return;
    }

    var functionName = ('validationImpl()');
    logger.begin(functionName);

    logger.warning(functionName, 'No validationImpl defined; default assumed.');

    if (logger.currentLvl < dbgLvlDbg) {
        return;
    }

    if (data) {
        if (isArray(data)) {
            if (data.length === 0) {
                logger.debug('Argument provided is an Array of zero elements.');
            } else {
                if (confirm(functionName + ': Argument provided is an Array of ' + data.length + ' elements. Do you wish to log them?')) {
                    for (var idxA = 0; idxA < data.length; ++idxA) {
                        logger.debug('Elem [' + idxA + '] has value <' + data[idxA] + '>.');
                        if (data.length > 5 && idxA > 0 && data.length % 5 === 0) {
                            if (!confirm('Continue?')) {
                                break;
                            }
                        }
                    }
                }
            }
        }
    }

    logger.end(functionName);
}

/* Esegue la fase di post-validazione: visualizza la sezione errori. */
function do_postValidations() {
    var functionName = ('do_postValidations()');
    logger.begin(functionName);

    // Se ci sono errori...
    if (validationErrors) {
        // Aggancio l'elemento html 'sezione errori'...
        var errorsSectionElem = $('#errorsSection');
        if (errorsSectionElem.length) {
            // e visualizzo.
            if (validationErrors)
                errorsSectionElem.prependTo(validationFormDOMObject);
            errorsSectionElem.show();
            setElementonView(errorsSectionElem);
        } else {
            logger.error(functionName, '#errorsSection element not found in document.');
        }
    }
    logger.end(functionName);
}

/* Aggiunge il messaggio di errore ed esegue select e focus del campo errato. */
// noinspection JSUnusedGlobalSymbols
function setCommonErrorCondition(fieldLabelId, message, form, fieldName, fieldIdx) {
    addValidationError(fieldLabelId, message);

    if (!firstError) {
        return;
    }

    // Condizione per non alterare
    form = $(form);
    if (!fieldName) {
        fieldName = fieldLabelId
    }
    if (fieldName === 'noField' || fieldName === 'noLabel') {
        return;
    }
    var fieldToSign = form.find('[name=' + fieldName + ']');
    if (fieldToSign) {
        if (!fieldToSign.hasClass('error')) {
            fieldToSign.addClass('error');
        }
        // Fine apposizione classe sui campi
        try {
            // Individua il campo sul quale mettere l'errore
            if (fieldIdx) {
                fieldToSign = fieldToSign.eq(fieldIdx);
            }
            fieldToSign.trigger('focus').trigger('select');
            firstError = false;
        } catch (e) {
            // protezione contro IE
            if (e.message !== 'Can\'t move focus to the control because it is invisible, not enabled, or of a type that does not accept the focus.') {
                throw new Error("Unable to select/set focus on field named <" + fieldName + (fieldIdx ? ('[' + fieldIdx + ']') : '') + "> due to: " + e.message);
            }
        }
    }
}

/* Aggiunge il messaggio di avviso ed esegue select e focus dei campi da controllare. */
// noinspection JSUnusedGlobalSymbols
function setCommonWarningCondition(fieldLabelId, message, newSubtitle, form, fieldName, fieldIdx) {
    var functionName = ('setCommonWarningCondition()');
    if (validationErrors)
        logger.warning(functionName, 'setCommonWarningCondition invoked in the presence of validation errors!');

    if (!newSubtitle) newSubtitle = '';

    $('#error_box').children().first().html(newSubtitle);

    addValidationError(fieldLabelId, message);

    // Individua il campo sul quale mettere l'errore
    var fieldToSign;
    if (fieldIdx) {
        fieldToSign = form[fieldName][fieldIdx];
    } else {
        fieldToSign = form[fieldName];
    }
    if (fieldToSign) {
        if (fieldToSign.className) {
            if (fieldToSign.className.indexOf("error") < 0) {
                fieldToSign.className = fieldToSign.className + " errore";
            }
        } else {
            fieldToSign.className = " errore";
        }
    }
    if (!firstError) return;

    if (!fieldName) fieldName = fieldLabelId;
    if (fieldName === 'noField' || fieldName === 'noLabel') return;

    try {
        if (fieldIdx) { // il field passato ï¿œ un array...
            if (form[fieldName][fieldIdx].focus) {
                form[fieldName][fieldIdx].focus();
            }
            if (form[fieldName][fieldIdx].select) {
                form[fieldName][fieldIdx].select();
            }
        } else {
            if (form[fieldName].focus) {
                form[fieldName].focus();
            }
            if (form[fieldName].select) {
                form[fieldName].find();
            }
        }
        firstError = false;
    } catch (e) {
        // protezione contro IE
        if (e.message !== 'Can\'t move focus to the control because it is invisible, not enabled, or of a type that does not accept the focus.')
            throw new Error("Unable to select/set focus on field named <" + fieldName + (fieldIdx ? ('[' + fieldIdx + ']') : '') + "> due to: " + e.message);
    }
}