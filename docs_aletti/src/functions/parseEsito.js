import getEsito from "functions/getEsito";

export default function parseEsito(json, parseData) {
    let esito = getEsito(json);
    if (esito.isOK && parseData) {
        esito.data = parseData(esito.data);
    }
    return esito;
};
