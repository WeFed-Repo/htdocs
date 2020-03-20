import parseEsito from "functions/parseEsito";
import isEmptyObject from 'functions/isEmptyObject';

const sendStepRequest = (num) => ({
    type: 'SEND_STEP_REQUEST',
    num
});

const sendStepSuccess = (num, values) => ({
    type: 'SEND_STEP_SUCCESS',
    num,
    values
});

const sendStepValidationError = (num, validationErrors) => ({
    type: 'SEND_STEP_VALIDATION_ERROR',
    num,
    validationErrors
});

const sendStepFailure = (num, esito) => ({
    type: 'SEND_STEP_FAILURE',
    num,
    isError: esito.isError,
    isWarning: esito.isWarning,
    description: esito.description
});

export const resetStepError = (num) => ({
    type: 'RESET_STEP_ERROR',
    num
});

export const sendStep = (num, values) => {
    return dispatch => {
        dispatch(sendStepRequest(num, values));
        return fetch('/json_data/rad/stepper/step.json', {
                headers: new Headers({
                    "Content-Type": "application/json"
                })
            })
            .then(response => response.json())
            .then(
                json => {
                    const esito = parseEsito(json);

                    if (esito.isOK) {
                        if (isEmptyObject(esito.data.validationErrors)) {
                            dispatch(sendStepSuccess(num, values));
                            return Promise.resolve();
                        } else {
                            dispatch(sendStepValidationError(num, esito.data.validationErrors));
                            return Promise.reject(esito.data.validationErrors);
                        }
                    } else {
                        dispatch(sendStepFailure(num, esito));
                        return Promise.reject();
                    }
                },
                error => {
                    dispatch(sendStepFailure(num, error));
                    return Promise.reject();
                })
    }
};
