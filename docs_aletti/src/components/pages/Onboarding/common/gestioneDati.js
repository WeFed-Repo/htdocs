import Functions from "components/functions";
import { getNextState } from "./gestioneStati";


const defaultFields = {
    "dataInserimento": "",
    "dataUltimoAggiornamento": "",
    "stato": "",
    "provenienza": "",
    "intestazione": "",
    "numIntestatari": "",
    "ordineIntestatari": "",
    "intestCorrente": "",
    "promotore": "",
    "expirationDate": "",
    "sessionFirmeBlob": {
        "idMifid": "",
        "informativaMifid": "",
        "depositoIncluso": "",
        "capitalizzazionePeriodica": {
            "codDisclaimer": "",
            "consenso": ""
        },
        "codicePratica": "",
        
        "intestatariFirme": {
            "0": {
                
                "fasciaRedditoNote":"",
                "origineRedditoNote":"",
                "fasciaPatrimonioNote": "",
                "origineFondiNote": "",
                "listRispAdever": {
                    "naturaScopo": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ],
                    "naturaScopoDeposito": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ],
                    "professione": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ],
                    "taeSettore": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ],
                    "fasciaReddito": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ],
                    "fasciaPatrimonio": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ],
                    "origineReddito": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ],
                    "origineFondi": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ],
                    "nazionalita": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ],
                    "provincia": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ]
                },
                "titolareEffettivo": "",
                "personaEsposta": ""
            },
            "1": {
                "fasciaRedditoNote":"",
                "origineRedditoNote":"",
                "fasciaPatrimonioNote": "",
                "origineFondiNote": "",
                "listRispAdever": {
                    "naturaScopo": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ],
                    "naturaScopoDeposito": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ],
                    "professione": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ],
                    "taeSettore": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ],
                    "fasciaReddito": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ],
                    "fasciaPatrimonio": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ],
                    "origineReddito": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ],
                    "origineFondi": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ],
                    "nazionalita": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ],
                    "provincia": [
                        {
                            "id": "",
                            "nome": ""
                        }
                    ]
                },
                "titolareEffettivo": "",
                "personaEsposta": ""
            }
        }
    },
    "anagraficaBlob": {
        "fileInformativaAperto": "",
        "privacyletta": "",
        "filiale": "",
        "intestatari": {
            "0": {
                "nome": "",
                "cognome": "",
                "nascita": "",
                "sesso": "",
                "codiceFiscale": "",
                "imgCodFiscale": [],
                "email": "",
                "prefisso": "",
                "telefono": "",
                "listPrivacy": [
                    {
                        "codDisclaimer": "ALETTI_ANAG_CONS_1",
                        "consenso": ""
                    },
                    {
                        "codDisclaimer": "ALETTI_ANAG_CONS_2",
                        "consenso": ""
                    },
                    {
                        "codDisclaimer": "ALETTI_ANAG_CONS_3",
                        "consenso": ""
                    },
                    {
                        "codDisclaimer": "ALETTI_ANAG_CONS_4",
                        "consenso": ""
                    },
                    {
                        "codDisclaimer": "ALETTI_ANAG_CONS_5",
                        "consenso": ""
                    }
                ],
                "paeseNascita": "",
                "provinciaNascita": "",
                "cittadinanza": "",
                "comuneNascita": "",
                "listResidenzeFiscale_length": "",
                "listResidenzeFiscale": [
                    {
                        "codiceUic": "86",
                        "tin": "",
                        "descrizione": "ITALIA",
                        "imgTin": []
                    },
                    {
                        "codiceUic": "",
                        "tin": "",
                        "descrizione": "",
                        "imgTin": []
                    },
                    {
                        "codiceUic": "",
                        "tin": "",
                        "descrizione": "",
                        "imgTin": []
                    },
                    {
                        "codiceUic": "",
                        "tin": "",
                        "descrizione": "",
                        "imgTin": []
                    }
                ],
                "codTipoDocumento": "",
                "numDocumento": "",
                "dataRilascioRinnovo": "",
                "dataScadenza": "",
                "paeseRilascio": "",
                "provinciaRilascio": "",
                "comuneRilascio": "",
                "imgDocIdentita": [],
                "tipoIndirizzoResidenza": "",
                "indirizzoResidenza": "",
                "numResidenza": "",
                "provinciaResidenza": "",
                "comuneResidenza": "",
                "capResidenza": "",
                "tipoIndirizzoCAI": "",
                "indirizzoCAI": "",
                "numCAI": "",
                "provinciaCAI": "",
                "comuneCAI": "",
                "capCAI": "",
                "tipoIndirizzoDomicilio": "",
                "indirizzoDomicilio": "",
                "numDomicilio": "",
                "provinciaDomicilio": "",
                "comuneDomicilio": "",
                "capDomicilio": "",
                "tipoIndirizzoCorrisp": "",
                "indirizzoCorrisp": "",
                "numCorrisp": "",
                "provinciaCorrisp": "",
                "comuneCorrisp": "",
                "capCorrisp": "",
                "prefissoFissoCasa": "",
                "numeroFissoCasa": "",
                "prefissoFissoUfficio": "",
                "numeroFissoUfficio": "",
                "codTitoloStudio": ""
            },
            "1": {
                "nome": "",
                "cognome": "",
                "nascita": "",
                "sesso": "",
                "codiceFiscale": "",
                "imgCodFiscale": [],
                "email": "",
                "prefisso": "",
                "telefono": "",
                "listPrivacy": [
                    {
                        "codDisclaimer": "ALETTI_ANAG_CONS_1",
                        "consenso": ""
                    },
                    {
                        "codDisclaimer": "ALETTI_ANAG_CONS_2",
                        "consenso": ""
                    },
                    {
                        "codDisclaimer": "ALETTI_ANAG_CONS_3",
                        "consenso": ""
                    },
                    {
                        "codDisclaimer": "ALETTI_ANAG_CONS_4",
                        "consenso": ""
                    },
                    {
                        "codDisclaimer": "ALETTI_ANAG_CONS_5",
                        "consenso": ""
                    }
                ],
                "paeseNascita": "",
                "provinciaNascita": "",
                "cittadinanza": "",
                "comuneNascita": "",
                "listResidenzeFiscale_length": "",
                "listResidenzeFiscale": [
                    {
                        "codiceUic": "86",
                        "tin": "",
                        "descrizione": "ITALIA",
                        "imgTin": []
                    },
                    {
                        "codiceUic": "",
                        "tin": "",
                        "descrizione": "",
                        "imgTin": []
                    },
                    {
                        "codiceUic": "",
                        "tin": "",
                        "descrizione": "",
                        "imgTin": []
                    },
                    {
                        "codiceUic": "",
                        "tin": "",
                        "descrizione": "",
                        "imgTin": []
                    }
                ],
                "codTipoDocumento": "",
                "numDocumento": "",
                "dataRilascioRinnovo": "",
                "dataScadenza": "",
                "paeseRilascio": "",
                "provinciaRilascio": "",
                "comuneRilascio": "",
                "imgDocIdentita": [],
                "tipoIndirizzoResidenza": "",
                "indirizzoResidenza": "",
                "numResidenza": "",
                "provinciaResidenza": "",
                "comuneResidenza": "",
                "capResidenza": "",
                "tipoIndirizzoCAI": "",
                "indirizzoCAI": "",
                "numCAI": "",
                "provinciaCAI": "",
                "comuneCAI": "",
                "capCAI": "",
                "tipoIndirizzoDomicilio": "",
                "indirizzoDomicilio": "",
                "numDomicilio": "",
                "provinciaDomicilio": "",
                "comuneDomicilio": "",
                "capDomicilio": "",
                "tipoIndirizzoCorrisp": "",
                "indirizzoCorrisp": "",
                "numCorrisp": "",
                "provinciaCorrisp": "",
                "comuneCorrisp": "",
                "capCorrisp": "",
                "prefissoFissoCasa": "",
                "numeroFissoCasa": "",
                "prefissoFissoUfficio": "",
                "numeroFissoUfficio": "",
                "codTitoloStudio": ""
            }
        }
    }
}




/* Assegna un tipo di conversione diverso per alcune chiavi: serve a gestire i boolean, i timestamp, ecc */
let typeKeys = {
    "boolean": [
        "field_anagraficablob_privacyletta",
        "field_anagraficablob_intestatari_0_listprivacy_0_consenso",
        "field_anagraficablob_intestatari_0_listprivacy_1_consenso",
        "field_anagraficablob_intestatari_0_listprivacy_2_consenso",
        "field_anagraficablob_intestatari_0_listprivacy_3_consenso",
        "field_anagraficablob_intestatari_0_listprivacy_4_consenso",
        
        "field_anagraficablob_intestatari_1_listprivacy_0_consenso",
        "field_anagraficablob_intestatari_1_listprivacy_1_consenso",
        "field_anagraficablob_intestatari_1_listprivacy_2_consenso",
        "field_anagraficablob_intestatari_1_listprivacy_3_consenso",
        "field_anagraficablob_intestatari_1_listprivacy_4_consenso",

        "field_sessionfirmeblob_depositoincluso",
        "field_sessionfirmeblob_informativamifid",
        "field_sessionfirmeblob_intestatarifirme_0_titolareeffettivo",
        "field_sessionfirmeblob_intestatarifirme_0_personaesposta",
        "field_sessionfirmeblob_intestatarifirme_0_cellcertif",
        "field_sessionfirmeblob_intestatarifirme_0_emailcertif",
        "field_sessionfirmeblob_intestatarifirme_1_sessioneconclusa",
        "field_sessionfirmeblob_intestatarifirme_1_titolareeffettivo"
        

    ],
    "timestamp": [
        "field_datainserimento",
        "field_dataultimoaggiornamento",
        "field_expirationdate",
        "field_anagraficablob_intestatari_0_nascita",
        "field_anagraficablob_intestatari_0_datarilasciorinnovo",
        "field_anagraficablob_intestatari_0_datascadenza",
        "field_anagraficablob_intestatari_1_nascita",
        "field_anagraficablob_intestatari_1_datarilasciorinnovo",
        "field_anagraficablob_intestatari_1_datascadenza"
    ],
    "file" : [
        "field_anagraficablob_intestatari_0_imgcodfiscale",
        "field_anagraficablob_intestatari_0_imgdocidentita",
        "field_anagraficablob_intestatari_0_listresidenzefiscale_0_imgtin",
        "field_anagraficablob_intestatari_0_listresidenzefiscale_1_imgtin",
        "field_anagraficablob_intestatari_0_listresidenzefiscale_2_imgtin",
        "field_anagraficablob_intestatari_0_listresidenzefiscale_3_imgtin",
        "field_anagraficablob_intestatari_1_imgcodfiscale",
        "field_anagraficablob_intestatari_1_imgdocidentita",
        "field_anagraficablob_intestatari_1_listresidenzefiscale_0_imgtin",
        "field_anagraficablob_intestatari_1_listresidenzefiscale_1_imgtin",
        "field_anagraficablob_intestatari_1_listresidenzefiscale_2_imgtin",
        "field_anagraficablob_intestatari_1_listresidenzefiscale_3_imgtin"

    ]
}

/* Funzione che pulisce i campi ricevuti trasformandoli nella codifica "locale" es: da timestamp a testo
    Ritorna solo il valore
*/
let decodeField = (fieldkey, fieldval) => {
    let outval = "";
    if (fieldval !== null && fieldval !== undefined) {

        /* Verifica se e' una data nella mappa typeKeys */
        if (typeKeys["timestamp"].indexOf(fieldkey) >= 0) {
            outval = Functions.timestampToText(fieldval);
        }
        else if (typeKeys["boolean"].indexOf(fieldkey) >= 0) {
            outval = (fieldval===true) ? "true" : ""
        }
        else if (typeKeys["file"].indexOf(fieldkey) >= 0) {
            outval = fieldval;
        }
        else {
            outval = fieldval.toString();
        }
    }
    return outval;
}

/* Funzione che trasforma i campi "locali" trasformandoli nella codifica richiesta dal backend es: da testo a timestamp
    Ritorna solo il valore
*/
let encodeField = (fieldkey, fieldval) => {
    let outval = "";
    if (fieldval !== null && fieldval !== undefined) {

        /* Verifica se e' una data nella mappa typeKeys */
        if (typeKeys["timestamp"].indexOf(fieldkey) >= 0) {
            outval = Functions.textToTimestamp(fieldval);
        }
        else if (typeKeys["boolean"].indexOf(fieldkey) >= 0) {
            outval = (fieldval === "true") ? true : false;
        }
        else {
            outval = fieldval;
        }
    }
    return outval;
}


/* Crea un oggetto chiave valore dove 
CHIAVE è il campo vero e proprio così come arriva dal backend
VALORE contiene la chiave del campo "locale" ovvero il suo nome negli stati (es "field_intestatario_1...") 
*/
let objFormTranslate = function () {

    // Crea runtime l'oggetto di ricodifica attingendo dal default
    let objFormTranslate = {},
        prefissocampi = "field";

    // Ritorna i sottonodi di un nodo ricorsivamente
    let extractObject = (prefisso, json) => {
        let node = {};
        Object.keys(json).forEach((v, i) => {
            // Se non e' un array,un ulteriore oggetto o un tipo FILE...
            if (typeof json[v] !== "object" || json[v] === null || typeKeys["file"].indexOf(prefisso + "_" + v.toLowerCase())>=0) {
                node[v] = prefisso + "_" + v.toLowerCase();
            }
            else {
                node[v] = extractObject(prefisso + "_" + v.toLowerCase(), json[v])
            }
        });
        return node;
    }
    objFormTranslate = extractObject(prefissocampi, defaultFields, objFormTranslate);

    return objFormTranslate;

}();


// Ritorna un oggetto dal JSON grezzo da backend con tutti i dati "locali" aggiornati
// puo' essere usato anche per convertire l'oggetto di inizializzazione (JSON vuoto backend "defaultFields")
let fieldsFromJson = (json) => {

    // Converte un JSON da BACKEND (o vuoto) in un oggetto "monolivello" e lo ritorna interamente precompilato
    let formObj = {},
        prefissocampi = "field";

    // Ritorna i sottonodi di un nodo ricorsivamente
    let extractObject = (prefisso, json, formObj) => {
        Object.keys(json).forEach((v, i) => {
            // Se non e' un array o un ulteriore oggetto...
            if (typeof json[v] !== "object" || json[v] === null) {
                formObj[prefisso + "_" + v.toLowerCase()] = decodeField(prefisso + "_" + v.toLowerCase(), json[v]);
            }
            else {
                /* Se è un file lo preserva come oggetto */
                if (typeKeys["file"].indexOf(prefisso + "_" + v.toLowerCase())>=0) {
                    formObj[prefisso + "_" + v.toLowerCase()] = json[v];
                }
                else
                {

                    Object.assign(formObj, extractObject(prefisso + "_" + v.toLowerCase(), json[v], formObj));
                }
            }

        });
        return formObj;
    }
    formObj = extractObject(prefissocampi, json, formObj);

    console.log(formObj);
    return (formObj)
}

// Ritorna un oggetto contenente il JSON da inviare al backend partendo dai campi "locali" (raccolti in uno stato)
let jsonFromFields = (objState) => {

    // Cicla l'oggetto objFormTranslate ed assegna i vari valori provenienti dagli stati
    // console.log(objFormTranslate);

    let extractObject = (node, objState) => {
        let ntr = {};
        Object.keys(node).forEach((v, i) => {

            // Se non e' un array o un ulteriore oggetto...
            if (typeof node[v] !== "object" || node[v] === null) {
                ntr[v] = encodeField(node[v], objState[node[v]]);
            }
            else {
                ntr[v] = extractObject(node[v], objState);
            }

        });
        return ntr;
    }

    return extractObject(objFormTranslate, objState);

}

export { defaultFields, fieldsFromJson, jsonFromFields}