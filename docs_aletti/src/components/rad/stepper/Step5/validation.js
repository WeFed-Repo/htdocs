import { getDefaultObject } from "components/rad/stepper/defaults";
import FieldValidation from "functions/rad/validateField";

export default function doValidation(values, int2disabled) {
    let errors = getDefaultObject();
    let validateField = new FieldValidation(errors, values);

    const validateIntestatario = (errors, index) => {
        const intestatario = 'intestatari[' + index + '].';

        validateField.field(intestatario + 'verifica_email').required();
        validateField.field(intestatario + 'verifica_cellulare').required();

        return errors;
    };

    (int2disabled ? [0] : [0, 1]).reduce(validateIntestatario, errors);

    return errors;
};
