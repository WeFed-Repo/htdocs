import consoleSviluppo from "../consoleSviluppo";

const CheckAccordionErrors = (fieldsErrors, els, e) => {
    console.log(e)
    return fieldsErrors && els.some(els => {
        return fieldsErrors[els];
    });
    
}

export default CheckAccordionErrors;