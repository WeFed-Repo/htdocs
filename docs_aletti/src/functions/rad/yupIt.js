import * as yupIt from 'yup';
import momentIt from 'functions/rad/momentIt';
import { yupItMessages } from "functions/rad/yupItMessages";
import validationSettings from "functions/rad/validationSettings";
import { checkCIN, checkCF } from "functions/rad/cfFunctions";
import formatDate from "functions/rad/formatDate";

function createMessage(yup, type, method) {
    let msg = yupItMessages[type][method];
    return yup.prefix ? yup.prefix.toUpperCase() + ": " + msg.toLowerCase() : msg;
}


/***** MIXED *****/
yupIt.mixed.prototype["requiredIt"] = function (message) {
    return this.required(message || createMessage(this, "mixed", "require"));
};
yupIt.mixed.prototype["typeErrorIt"] = function (message) {
    return this.typeError(message || createMessage(this, "mixed", "notType"));
};
yupIt.mixed.prototype["prefixIt"] = function (prefix) {
    this["prefix"] = prefix;
    return this;
};


/***** STRING *****/
yupIt.string.prototype["lengthIt"] = function (length, message) {
    return this.length(length, message || createMessage(this, "string", "length"));
};
yupIt.string.prototype["minIt"] = function (min, message) {
    return this.min(min, message || createMessage(this, "string", "min"));
};
yupIt.string.prototype["maxIt"] = function (max, message) {
    return this.max(max, message || createMessage(this, "string", "max"));
};
yupIt.string.prototype["emailIt"] = function (message) {
    return this.email(message || createMessage(this, "string", "email"));
};
yupIt.string.prototype["numericIt"] = function (message) {
    return this.matches(/[0-9]*/, message || createMessage(this, "string", "numeric"));
};
yupIt.string.prototype["noNumericIt"] = function (message) {
    return this.matches(/^[^0-9]*$/, message || createMessage(this, "string", "noNumeric"));
};
yupIt.string.prototype["prefissoIt"] = function () {
    return this.prefixIt("Prefisso").numericIt().maxIt(5);
};
yupIt.string.prototype["numeroIt"] = function () {
    return this.prefixIt("Numero").numericIt().maxIt(10);
};
yupIt.string.prototype["numeroFissoIt"] = function () {
    return this.prefixIt("Numero").numericIt().maxIt(10);
};
yupIt.string.prototype["codiceFiscaleIt"] = function (nome, cognome, nascita, sesso) {
    return this.test('cf', "", function (value) {
            const { path, createError } = this;
            let result = true;
            let message = "";

            if (typeof value !== "undefined" && value.length === 16) {
                const cfVal = value.toUpperCase();
                const nomeVal = this.resolve(nome) || "";
                const cognomeVal = this.resolve(cognome) || "";
                const nascitaVal = formatDate(this.resolve(nascita)) || "";
                const sessoVal = this.resolve(sesso) || "";

                if (cognomeVal !== "" && nomeVal !== "" && nascitaVal !== "" && sessoVal !== "") {
                    if (!checkCF(
                        cognomeVal.toUpperCase(),
                        nomeVal.toUpperCase(),
                        nascitaVal.toUpperCase(),
                        sessoVal.toUpperCase(),
                        cfVal.substring(0, 11)
                    )) {
                        result = false;
                        message = "Verifica";
                    } else if (!checkCIN(cfVal)) {
                        result = false;
                        message = "Verifica l'ultimo carattere";
                    }
                }

                return result || createError({ path, message });
            }
        }
    )
};


/***** NUMBER *****/
yupIt.number.prototype["minIt"] = function (min, message) {
    return this.min(min, message || createMessage(this, "number", "min"));
};
yupIt.number.prototype["maxIt"] = function (max, message) {
    return this.max(max, message || createMessage(this, "number", "max"));
};
yupIt.number.prototype["moreThanIt"] = function (min, message) {
    return this.moreThan(min, message || createMessage(this, "number", "moreThan"));
};
yupIt.number.prototype["lessThanIt"] = function (max, message) {
    return this.lessThan(max, message || createMessage(this, "number", "lessThan"));
};
yupIt.number.prototype["positiveIt"] = function (message) {
    return this.positive(message || createMessage(this, "number", "positive"));
};
yupIt.number.prototype["negativeIt"] = function (message) {
    return this.negative(message || createMessage(this, "number", "negative"));
};
yupIt.number.prototype["integerIt"] = function (message) {
    return this.integer(message || createMessage(this, "number", "integer"));
};
yupIt.number.prototype["nascitaIt"] = function () {
    return this.nullable()
        .minIt(validationSettings.nascitaMin, "Data minima " + momentIt(validationSettings.nascitaMin).format(validationSettings.dateFormat))
        .maxIt(validationSettings.nascitaMax, "Data massima " + momentIt(validationSettings.nascitaMax).format(validationSettings.dateFormat));
};


/***** DATE *****/
yupIt.date.prototype["parseIt"] = function () {
    return this.transform(function (currentValue, originalValue) {
        let date;
        if (originalValue !== null && originalValue !== "") {
            date = momentIt(originalValue, validationSettings.dateFormat, true);
            date = date.isValid() ? date.toDate() : new Date('');
        } else {
            date = originalValue;
        }
        return date;
    });
};
yupIt.date.prototype["minIt"] = function (min, message) {
    return this.min(min, message || createMessage(this, "date", "min"));
};
yupIt.date.prototype["maxIt"] = function (max, message) {
    return this.max(max, message || createMessage(this, "date", "max"));
};

export default yupIt;
