import _ from "lodash-es/lodash.default";
import momentIt from 'functions/rad/momentIt';
import validationSettings from "functions/rad/validationSettings";
import { checkCF, checkCIN } from "functions/rad/cfFunctions";
import fixDate from "functions/fixDate";
import formatDate from "./formatDate";

function FieldValidation(errors, values) {
    this.errors = errors;
    this.values = values;
    this.isMultiFields = false;
}

// Validazione campi singoli e multipli
FieldValidation.prototype.required = function (isRequired = true, error = "Compila") {
    if (!this.isMultiFields) {
        this.isRequired = isRequired;
    }

    // Controllo eseguito soltanto sui campi singoli
    if (this.isValid && this.isRequired && !!this.name && !this.value) {
        _.set(this.errors, this.name, error);
        this.isValid = false;
    }

    return this;
};

// Validazione campi singoli
FieldValidation.prototype.field = function (name) {
    this.name = name;
    this.value = _.get(this.values, name);
    this.isValid = true;
    this.isRequired = false;

    return this;
};

FieldValidation.prototype.toSelect = function (isRequired) {
    return this.required(isRequired, "Seleziona");
};

FieldValidation.prototype.minLength = function (length) {
    if (this.isValid && this.value && this.value.length < length) {
        _.set(this.errors, this.name, "Inserire almeno " + length + " caratteri");
        this.isValid = false;
    }

    return this;
};

FieldValidation.prototype.alpha = function () {
    if (this.isValid && this.value) {
        if (/@/.test(this.value)) {
            _.set(this.errors, this.name, "Elimina il carattere @");
            this.isValid = false;
        } else if (/[0-9]/.test(this.value)) {
            _.set(this.errors, this.name, "Non è consentito utilizzare numeri");
            this.isValid = false;
        }
    }

    return this;
};

FieldValidation.prototype.alphaNum = function () {
    if (this.isValid && this.value) {
        if (!(/^[a-z0-9]+$/i).test(this.value)) {
            _.set(this.errors, this.name, "Si possono inserire soltanto lettere e numeri");
            this.isValid = false;
        }
    }

    return this;
};

FieldValidation.prototype.currency = function () {
    if (this.isValid && this.value) {
        if (!(/^[0-9]{1,11}(,[0-9]{1,2})?$/i).test(this.value)) {
            _.set(this.errors, this.name, "Si possono inserire soltanto numeri");
            this.isValid = false;
        }
    }

    return this;
};

FieldValidation.prototype.token = function (msg) {
    if (this.isValid && this.value) {
        if (!(/^[a-z0-9]{6}$/i).test(this.value)) {
            _.set(this.errors, this.name, msg || "Verifica");
            this.isValid = false;
        }
    }

    return this;
};

FieldValidation.prototype.date = function (dateMin, dateMax) {
    if (this.isValid && this.value) {
        const date = momentIt(this.value);

        if (date.isValid()) {
            const dateVal = date.valueOf();
            const dateMinVal = !dateMin ? validationSettings.dateMin : momentIt(dateMin, validationSettings.dateFormat).startOf('day').valueOf();
            const dateMaxVal = !dateMax ? null : momentIt(dateMax, validationSettings.dateFormat).startOf('day').valueOf();
            const dateMinText = momentIt(dateMinVal).format(validationSettings.dateFormat);

            if (dateVal < dateMinVal) {
                _.set(this.errors, this.name, "La data deve essere maggiore o uguale a " + dateMinText);
                this.isValid = false;
            } else if (dateMaxVal && dateVal > dateMaxVal) {
                _.set(this.errors, this.name, "La data deve essere minore o uguale a  " + dateMax);
                this.isValid = false;
            }
        } else {
            _.set(this.errors, this.name, "Verifica");
            this.isValid = false;
        }
    }

    return this;
};

FieldValidation.prototype.dateTillToday = function () {
    return this.date(null, momentIt().startOf('day').format(validationSettings.dateFormat));
};

FieldValidation.prototype.birthday = function () {
    if (this.isValid && this.value) {
        const date = momentIt(this.value).valueOf();
        const today = momentIt().valueOf();

        if (date > today) {
            _.set(this.errors, this.name, "La data è successiva a oggi");
            this.isValid = false;
        } else if (date < validationSettings.nascitaMin) {
            _.set(this.errors, this.name, "Verifica");
            this.isValid = false;
        } else if (date > validationSettings.nascitaMax) {
            _.set(this.errors, this.name, "L'intestatario deve essere maggiorenne");
            this.isValid = false;
        }
    }

    return this;
};

FieldValidation.prototype.email = function (otherEmail) {
    if (this.isValid && this.value) {
        const otherEmailValue = _.get(this.values, otherEmail);
        const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

        if (!emailRegex.test(this.value)) {
            _.set(this.errors, this.name, "Verifica");
            this.isValid = false;
        } else if (otherEmailValue && this.value === otherEmailValue) {
            _.set(this.errors, this.name, "Indica un indirizzo email diverso dagli altri intestatari");
            this.isValid = false;
        }

    }

    return this;
};

// Validazione campi multipli
FieldValidation.prototype.multiFields = function (isRequired = false) {
    this.isMultiFields = true;
    this.name = '';
    this.value = null;
    this.isValid = true;
    this.isRequired = isRequired;

    return this;
};

FieldValidation.prototype.checkField = function (name) {
    this.name = name;
    this.value = _.get(this.values, name);

    return this;
};

FieldValidation.prototype.cf = function (nome, cognome, dataNascita, sesso) {
    if (this.isValid && this.value) {
        if (this.value.length !== 16) {
            _.set(this.errors, this.name, "Compila");
        } else {
            const cfVal = this.value.toUpperCase();

            if (!/[A-Z0-9]+/.test(cfVal)) {
                _.set(this.errors, this.name, "Contiene un carattere non valido");
                this.isValid = false;
            } else {
                const nomeVal = _.get(this.values, nome) || "";
                const cognomeVal = _.get(this.values, cognome) || "";
                const dataNascitaVal = formatDate(_.get(this.values, dataNascita)) || "";
                const sessoVal = _.get(this.values, sesso) || "";

                if (cognomeVal && nomeVal && dataNascitaVal && sessoVal) {
                    if (!checkCF(
                        cognomeVal.toUpperCase(),
                        nomeVal.toUpperCase(),
                        dataNascitaVal.toUpperCase(),
                        sessoVal.toUpperCase(),
                        cfVal.substring(0, 11)
                    )) {
                        _.set(this.errors, this.name, "Non è congruente ai dati inseriti");
                        this.isValid = false;
                    } else if (!checkCIN(cfVal)) {
                        _.set(this.errors, this.name, "Non è corretto");
                        this.isValid = false;
                    }
                }
            }
        }
    }

    return this;
};

FieldValidation.prototype.phone = function (prefixName, numberName, otherPrefixName, otherNumberName) {
    if (this.isValid) {
        const prefixValue = _.get(this.values, prefixName);
        const numberValue = _.get(this.values, numberName);
        const phoneValue = prefixValue + numberValue;
        const otherPrefixValue = _.get(this.values, otherPrefixName);
        const otherNumberValue = _.get(this.values, otherNumberName);
        const otherPhoneValue = otherPrefixValue + otherNumberValue;
        const samePhoneError = "Indica un numero di cellulare diverso dagli altri intestatari";
        const emptyPrefix = !prefixValue || prefixValue.length < 3;
        const emptyNumber = !numberValue || numberValue.length < 9;

        if (this.isRequired || !!numberValue) {
            if (emptyPrefix) {
                if (emptyNumber) {
                    _.set(this.errors, prefixName, "Compila i campi prefisso e numero");
                    _.set(this.errors, numberName, "Compila i campi prefisso e numero");
                } else {
                    _.set(this.errors, prefixName, "Compila il campo prefisso");
                }
                this.isValid = false;
            } else if (emptyNumber) {
                _.set(this.errors, numberName, "Compila il campo numero");
                this.isValid = false;
            }
        }

        if (this.isValid && !!phoneValue && !!otherPhoneValue && phoneValue === otherPhoneValue) {
            _.set(this.errors, prefixName, samePhoneError);
            _.set(this.errors, numberName, samePhoneError);
            this.isValid = false;
        }
    }

    return this;
};

FieldValidation.prototype.document = function (typeName, numberName, releaseDateName, expirationDateName, birthday, releaseCountry) {
    if (!!releaseCountry && !!birthday) {
        this.checkField(typeName).toSelect();
        this.checkField(numberName).required().alphaNum();
        this.checkField(releaseDateName).required().date();
        this.checkField(expirationDateName).required().date();
    } else {
        this.isValid = false;
    }

    if (this.isValid) {
        const typeValue = _.get(this.values, typeName);
        const numberValue = _.get(this.values, numberName);
        const releaseDateValue = fixDate(momentIt(_.get(this.values, releaseDateName)));
        const expirationDateValue = fixDate(momentIt(_.get(this.values, expirationDateName)));
        const today = fixDate(momentIt());
        let userAge;

        fixDate(momentIt(birthday));

        // Verifica se l'utente risiede in Italia
        if (releaseCountry.split('|')[0] === '86') {
            if (typeValue === "01") {
                // *** Carta d'identità ***
                // Per i test vedere https://regex101.com/r/6rYk0o/1
                let numberTest = /^([a-z]{2}\d{6,7}|\d{6,7}[a-z]{2}\d?)$/i;

                if (numberTest.test(numberValue)) {
                    _.set(this.errors, numberName, "Verifica");
                    this.isValid = false;
                }

                const isNuoveNorme = releaseDateValue.diff(fixDate(momentIt([2011, 4, 13]))) > 0;
                userAge = releaseDateValue.diff(birthday, 'years');

                if (isNuoveNorme) {
                    if ((userAge < 3 && releaseDateValue.diff(today, 'years') > 4) ||
                        (userAge < 18 && releaseDateValue.diff(today, 'years') > 6) ||
                        (userAge >= 18 && releaseDateValue.diff(today, 'years') > 11)) {
                        _.set(this.errors, expirationDateName, "Verifica");
                        this.isValid = false;
                    }
                } else {
                    if (expirationDateValue.diff(releaseDateValue, 'years', true) > 11) {
                        _.set(this.errors, expirationDateName, "Verifica");
                        this.isValid = false;
                    }
                }
            } else if (typeValue === "02") {
                // *** Patente ***
                // Età dell'utente al momento del rilascio del documento
                userAge = releaseDateValue.diff(birthday, 'years');

                if ((userAge < 55 && releaseDateValue.diff(today, 'years') > 11) ||
                    (userAge >= 55 && releaseDateValue.diff(today, 'years') > 6)) {
                    _.set(this.errors, expirationDateName, "Verifica");
                    this.isValid = false;
                }
            } else if (typeValue === "03") {
                // *** Passaporto ***
                if (expirationDateValue.diff(releaseDateValue, 'years', true) > 10) {
                    _.set(this.errors, expirationDateName, "Verifica");
                    this.isValid = false;
                }
            }
        } else {
            // Controllo per paesi stranieri
            if (expirationDateValue.diff(releaseDateValue) > 0) {
                _.set(this.errors, expirationDateName, "Verifica");
                this.isValid = false;
            }
        }
    }

    return this;
};

export default FieldValidation;
