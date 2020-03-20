import fakeDelay from 'functions/fakeDelay';
import { ambiente } from "functions/genericVars";
import parseEsito from "functions/parseEsito";

export const loadFieldRequest = (category, name) => ({
    type: 'LOAD_FIELD_REQUEST',
    category,
    name
});

export const loadFieldSuccess = (category, name, parentValue, data) => ({
    type: 'LOAD_FIELD_SUCCESS',
    category,
    name,
    parentValue,
    data
});

export const loadFieldCached = (category, name) => ({
    type: 'LOAD_FIELD_CACHED',
    category,
    name
});

export const loadFieldFailure = (category, name, esito) => ({
    type: 'LOAD_FIELD_FAILURE',
    category,
    name,
    esito
});

export const loadField = (category, name, parseData, parentValue) => {
    const url = ambiente.isSviluppo
        ? '/promotori/onboarding/rest/domini/nazioni/active'
        : '/json_data/rad/loadingFields/' + category + '.json';

    const config = {
        "method": "GET",
        "headers": new Headers({
            "Accept": "application/json",
            "Content-Type": "application/json"
        })
    };

    return (dispatch, getState) => {
        const hasParentValue = typeof parentValue !== 'undefined';

        if (hasParentValue) {
            if (parentValue === "") {
                return dispatch(loadFieldCached(""));
            } else if (getState().rad.loadingFields[category].data[parentValue]) {
                return dispatch(loadFieldCached(name));
            }
        } else if (getState().rad.loadingFields[category].data.length) {
            return dispatch(loadFieldCached(category, name));
        }

        dispatch(loadFieldRequest(category, name));
        return fakeDelay(1000)
            .then(() => fetch(url, config))
            .then(response => response.json())
            .then(
                json => {
                    const esito = parseEsito(json, parseData);

                    if (esito.isOK) {
                        dispatch(loadFieldSuccess(category, name, parentValue, esito.data));
                        return Promise.resolve();
                    } else {
                        dispatch(loadFieldFailure(category, name, esito));
                        return Promise.reject();
                    }
                },
                error => {
                    dispatch(loadFieldFailure(category, name, error));
                    return Promise.reject();
                })

    }
};
