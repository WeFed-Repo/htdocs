import FieldValidation from "functions/rad/validateField";
import { getDefaultObject } from "components/rad/stepper/defaults";

export default function doValidation(values) {
    let errors = getDefaultObject();
    let validateField = new FieldValidation(errors, values);

    validateField.field('informativa_mifid_consegnata').required(true, 'Seleziona');

    return errors;
};
