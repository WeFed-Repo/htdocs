import FieldValidation from "functions/rad/validateField";
import { getDefaultObject } from "components/rad/stepper/defaults";
import _ from "lodash-es/lodash.default";

export default function doValidation(values, int2disabled) {
    let errors = getDefaultObject();
    let validateField = new FieldValidation(errors, values);

    if (!values.privacy_consegnata) {
        errors.privacy_consegnata = "Prendi visione del documento e seleziona";
    }

    const validateIntestatario = (errors, index) => {
        const intestatario = 'intestatari[' + index + '].';
        const otherIntestatario = index
            ? 'intestatari[0].'
            : !int2disabled ? 'intestatari[1].' : '';
        const otherEmail = otherIntestatario
            ? otherIntestatario + 'email'
            : '';
        const otherPrefix = otherIntestatario
            ? otherIntestatario + 'prefisso'
            : '';
        const otherNumber = otherIntestatario
            ? otherIntestatario + 'numero'
            : '';

        validateField.field(intestatario + 'nome').required().alpha();
        validateField.field(intestatario + 'cognome').required().alpha();
        validateField.field(intestatario + 'data_nascita').required().birthday();
        validateField.field(intestatario + 'sesso').toSelect();
        validateField.field(
            intestatario + 'codice_fiscale'
        ).required().cf(
            intestatario + 'nome',
            intestatario + 'cognome',
            intestatario + 'data_nascita',
            intestatario + 'sesso'
        );
        validateField.field(
            intestatario + 'email'
        ).required().email(otherEmail);
        validateField.field(intestatario + 'operatore').toSelect();
        validateField.field(
            ''
        ).required().phone(
            intestatario + 'prefisso',
            intestatario + 'numero',
            otherPrefix,
            otherNumber
        );

        const privacy1 = _.get(values, intestatario + 'privacy_1');

        if (!privacy1) {
            _.set(errors, intestatario + 'privacy_1', "Compila");
        } else if (privacy1 === "0") {
            _.set(errors, intestatario + 'privacy_1', "Se non presti il consenso non sarai aggiornato sulle offerte riservate ai nostri clienti");
        }

        validateField.field(intestatario + 'privacy_2').required();
        validateField.field(intestatario + 'privacy_3').required();
        validateField.field(intestatario + 'privacy_4').required();
        validateField.field(intestatario + 'privacy_5').required();

        return errors;
    };

    (int2disabled ? [0] : [0, 1]).reduce(validateIntestatario, errors);

    return errors;
};
