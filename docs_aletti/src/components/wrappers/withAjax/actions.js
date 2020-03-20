import fakeDelay from 'functions/fakeDelay';

const loadDataRequest = (key) => ({
    type: 'LOAD_REQUEST',
    key
});

const loadDataSuccess = (key, json) => ({
    type: 'LOAD_SUCCESS',
    key,
    json,
    updatedAt: Date.now()
});

const loadDataFailure = (key, error) => ({
    type: 'LOAD_FAILURE',
    key,
    error
});

export const loadData = (key, url, params) => {
    return dispatch => {
        dispatch(loadDataRequest(key));

        let config = {
            "method": "GET",
            "headers": new Headers({
                "Accept": "application/json",
                "Content-Type": "application/json"
            })
        };

        if (params) {
            if (url.indexOf(".json") > 0) {
                url += Object.keys(params).reduce(function (qs, param) {
                    return (qs + "&" + param + "=" + params[param])
                }, "?")
            } else {
                config.method = "POST";
                config.body = JSON.stringify(params);
            }
        }

        return fakeDelay(0)
            .then(() => fetch(url, config))
            .then(
                response => {
                    if (response.ok) {
                        try {
                            return response.json();
                        } catch {
                            throw new Error("Errore JSON");
                        }
                    }
                    throw new Error("Errore 404");
                }
            )
            .then(json => dispatch(loadDataSuccess(key, json)))
            .catch(error => {
                return dispatch(loadDataFailure(key, 'Errore caricamento dati: ' + error.message));
            });
    }
};
