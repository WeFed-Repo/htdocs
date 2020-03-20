export default function getEsito (json) {
    let res = {
        isOK: false,
        isError: false,
        isWarning: false,
        description: '',
        data: []
    };
    let type;
    if (json.esito) {
        type = json.esito.type || json.esito.tipo || json.esito.toString();
        if (typeof json.esito === 'undefined' || type.toUpperCase() === "OK") {
            res.isOK = true;
            res.data = (json.data) ? json.data : ((json.results) ? json.results : json);
        } else if (type === "E" || type === "W") {
            res.isError = type === "E";
            res.isWarning = type === "W";
            /** @namespace json.esito.messaggio */
            res.description = (json.esito.messaggio) ? json.esito.messaggio : ((json.esito.description) ? json.esito.description : "Errore dati generico.");
        }
    }
    return res;
};
