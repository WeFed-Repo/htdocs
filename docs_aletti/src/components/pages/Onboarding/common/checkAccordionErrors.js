const CheckAccordionErrors = (fieldsErrors, els) => {
    return fieldsErrors && els.some(els => {
        return fieldsErrors[els];
    });
}

export default CheckAccordionErrors;