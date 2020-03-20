import FieldValidation from "functions/rad/validateField";
import { getDefaultObject } from "components/rad/stepper/defaults";
import _ from "lodash-es/lodash.default";

function isGroupRequired(values, prefix, fields) {
    return fields.some(function (field) {
        return _.get(values, prefix + field) !== '';
    });
}

export default function doValidation(values, int2disabled, getStepField) {
    let errors = getDefaultObject();
    let validateField = new FieldValidation(errors, values);

    const validateIntestatario = (errors, index) => {
        const intestatario = 'intestatari[' + index + '].';

        validateField.field(intestatario + 'cittadinanza').toSelect();
        validateField.field(intestatario + 'paese_nascita').toSelect();

        if (_.get(values, intestatario + 'paese_nascita').split('|')[0] === '86') {
            validateField.field(intestatario + 'provincia_nascita').toSelect();
            validateField.field(intestatario + 'comune_nascita').toSelect();
        }

        // Documento di identità
        validateField.field(intestatario + 'paese_rilascio').toSelect();
        validateField.field(intestatario + 'provincia_rilascio').toSelect();
        validateField.field(intestatario + 'comune_rilascio').toSelect();
        validateField.multiFields(true).document(
            /* typeName, numberName, releaseDateName, expirationDateName, birthdayName, releaseCountryName */
            intestatario + 'tipo_documento',
            intestatario + 'numero_documento',
            intestatario + 'data_rilascio',
            intestatario + 'data_scadenza',
            getStepField(0, intestatario + 'data_nascita'),
            _.get(values, intestatario + 'paese_rilascio')
        );
        validateField.field(intestatario + 'data_rilascio').required().dateTillToday();

        if (_.get(values, intestatario + 'paese_rilascio').split('|')[0] === '86') {
            validateField.field(intestatario + 'provincia_rilascio').toSelect();
        }

        validateField.field(intestatario + 'green_card').required();
        validateField.field(intestatario + 'soggiorno_usa').required();

        validateField.field(intestatario + 'tipo_indirizzo_residenza').toSelect();
        validateField.field(intestatario + 'nome_indirizzo_residenza').required();
        validateField.field(intestatario + 'numero_indirizzo_residenza').required();
        validateField.field(intestatario + 'provincia_residenza').toSelect();
        validateField.field(intestatario + 'comune_residenza').toSelect();
        validateField.field(intestatario + 'cap_residenza').toSelect();

        // gruppo domicilio
        const domicilioGroupRequired = isGroupRequired(values, intestatario, [
            'tipo_indirizzo_domicilio',
            'nome_indirizzo_domicilio',
            'numero_indirizzo_domicilio',
            'provincia_domicilio',
            'comune_domicilio',
            'cap_domicilio',
        ]);

        validateField.field(intestatario + 'tipo_indirizzo_domicilio').toSelect(domicilioGroupRequired);
        validateField.field(intestatario + 'nome_indirizzo_domicilio').required(domicilioGroupRequired);
        validateField.field(intestatario + 'numero_indirizzo_domicilio').required(domicilioGroupRequired);
        validateField.field(intestatario + 'provincia_domicilio').toSelect(domicilioGroupRequired);
        validateField.field(intestatario + 'comune_domicilio').toSelect(domicilioGroupRequired);
        validateField.field(intestatario + 'cap_domicilio').toSelect(domicilioGroupRequired);

        // gruppo corrispondenza
        const corrispondenzaGroupRequired = isGroupRequired(values, intestatario, [
            'tipo_indirizzo_corrispondenza',
            'nome_indirizzo_corrispondenza',
            'numero_indirizzo_corrispondenza',
            'provincia_corrispondenza',
            'comune_corrispondenza',
            'cap_corrispondenza',
        ]);

        validateField.field(intestatario + 'tipo_indirizzo_corrispondenza').toSelect(corrispondenzaGroupRequired);
        validateField.field(intestatario + 'nome_indirizzo_corrispondenza').required(corrispondenzaGroupRequired);
        validateField.field(intestatario + 'numero_indirizzo_corrispondenza').required(corrispondenzaGroupRequired);
        validateField.field(intestatario + 'provincia_corrispondenza').toSelect(corrispondenzaGroupRequired);
        validateField.field(intestatario + 'comune_corrispondenza').toSelect(corrispondenzaGroupRequired);
        validateField.field(intestatario + 'cap_corrispondenza').toSelect(corrispondenzaGroupRequired);

        // gruppo cai
        const caiGroupRequired = isGroupRequired(values, intestatario, [
            'tipo_indirizzo_cai',
            'nome_indirizzo_cai',
            'numero_indirizzo_cai',
            'provincia_cai',
            'comune_cai',
            'cap_cai',
        ]);

        validateField.field(intestatario + 'tipo_indirizzo_cai').toSelect(caiGroupRequired);
        validateField.field(intestatario + 'nome_indirizzo_cai').required(caiGroupRequired);
        validateField.field(intestatario + 'numero_indirizzo_cai').required(caiGroupRequired);
        validateField.field(intestatario + 'provincia_cai').toSelect(caiGroupRequired);
        validateField.field(intestatario + 'comune_cai').toSelect(caiGroupRequired);
        validateField.field(intestatario + 'cap_cai').toSelect(caiGroupRequired);

        validateField.field(
            ''
        ).phone(
            intestatario + 'prefisso_casa',
            intestatario + 'numero_casa'
        );

        validateField.field(
            ''
        ).phone(
            intestatario + 'prefisso_ufficio',
            intestatario + 'numero_ufficio'
        );

        return errors;
    };

    (int2disabled ? [0] : [0, 1]).reduce(validateIntestatario, errors);

    return errors;
}
