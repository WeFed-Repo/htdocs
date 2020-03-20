import { getDefaultObject } from "components/rad/stepper/defaults";
import FieldValidation from "functions/rad/validateField";
import _ from "lodash-es/lodash.default";

export default function doValidation(values, int2disabled, getStepField) {
    let errors = getDefaultObject();
    let validateField = new FieldValidation(errors, values);

    validateField.field('autorizzazione_anatocismo').required(true, 'Seleziona');

    const validateIntestatario = (errors, index) => {
        const intestatario = 'intestatari[' + index + '].';

        validateField.field(intestatario + 'titolare').required(true, 'Seleziona');
        validateField.field(intestatario + 'politicamente_esposto').required(true, 'Seleziona');
        validateField.field(intestatario + 'scopo_rapporto_cc').toSelect();
        validateField.field(intestatario + 'scopo_rapporto_dt').toSelect();
        validateField.field(intestatario + 'professione').toSelect();
        validateField.field(intestatario + 'tipo_attivita_economica').toSelect();

        if (_.get(values, intestatario + 'stato_svolgimento').split('|')[0] === '86') {
            validateField.field(intestatario + 'provincia_svolgimento').toSelect();
        }

        validateField.field(intestatario + 'origine_patrimonio').toSelect();
        validateField.field(intestatario + 'patrimonio_netto').toSelect();

        if (_.get(values, intestatario + 'patrimonio_netto') === '0') {
            validateField.field(intestatario + 'note_patrimonio').required();
        }

        validateField.field(intestatario + 'reddito_annuo').toSelect();

        if (_.get(values, intestatario + 'reddito_annuo') === '0') {
            validateField.field(intestatario + 'note_reddito').required();
        }

        return errors;
    };

    (int2disabled ? [0] : [0, 1]).reduce(validateIntestatario, errors);

    return errors;
};
