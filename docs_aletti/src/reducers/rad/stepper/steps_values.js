import _ from "lodash-es/lodash.default";

const isTest = true;
const testData = isTest
    ? [
        {
            "nome": "Andrea",
            "cognome": "Colanicchia",
            "data_nascita": 111448800000,
            "sesso": "M",
            "codice_fiscale": "CLNNDR73L14H501X",
            "email": "aa@aa",
            "prefisso": "0039",
            "numero": "123456789",
            "operatore": "TRE",
            "privacy_1": "1",
            "privacy_2": "1",
            "privacy_3": "1",
            "privacy_4": "1",
            "privacy_5": "1"
        },
        {
            "cittadinanza": "86",
            "paese_nascita": "86",
            "provincia_nascita": "MI",
            "comune_nascita": "MILANO",
            "residenza_1": "",
            "tin_1": "",
            "residenza_2": "",
            "tin_2": "",
            "residenza_3": "",
            "tin_3": "",
            "green_card": "",
            "soggiorno_usa": "",
            "tipo_documento": "01",
            "numero_documento": "AA123456",
            "paese_rilascio": "86",
            "provincia_rilascio": "MI",
            "comune_rilascio": "MILANO",
            "data_rilascio": 1262300400000,
            "data_scadenza": 1577833200000,
            "immagine_documento": "",
            "tipo_indirizzo_residenza": "Via",
            "nome_indirizzo_residenza": "Dante",
            "numero_indirizzo_residenza": "1",
            "provincia_residenza": "MI",
            "comune_residenza": "MILANO",
            "cap_residenza": "20100",
            "tipo_indirizzo_domicilio": "",
            "nome_indirizzo_domicilio": "",
            "numero_indirizzo_domicilio": "",
            "provincia_domicilio": "",
            "comune_domicilio": "",
            "cap_domicilio": "",
            "tipo_indirizzo_corrispondenza": "",
            "nome_indirizzo_corrispondenza": "",
            "numero_indirizzo_corrispondenza": "",
            "presso_corrispondenza": "",
            "provincia_corrispondenza": "",
            "comune_corrispondenza": "",
            "cap_corrispondenza": "",
            "tipo_indirizzo_cai": "",
            "nome_indirizzo_cai": "",
            "numero_indirizzo_cai": "",
            "provincia_cai": "",
            "comune_cai": "",
            "cap_cai": "",
            "presso_cai": "",
            "prefisso_casa": "0039",
            "numero_casa": "44656464",
            "prefisso_ufficio": "0039",
            "numero_ufficio": "8152513",
            "titolo_studio": "diploma"
        },
        {
            "servizio-investimento": true,
            "deposito-titoli": true
        },
        {
            "titolare": true,
            "politicamente-esposto": false,
            "scopo-rapporto-cc": "",
            "scopo-rapporto-ct": "",
            "seconda-cittadinanza": "",
            "professione": "",
            "tipo-attivita": "",
            "stato-svolgimento": "86",
            "provincia-svolgimento": "MI",
            "origine-patrimonio": "",
            "pa-dichiarazione": "",
            "pa-ovvero": "",
            "conflitto-dichiarazione": "",
            "capitalizzazione": "1"
        },
        {},
        {},
        {},
        {}]
    : [{}, {}, {}, {}, {}, {}, {}, {}];

export const intestatariInitialValues = [{
    "nome": "",
    "cognome": "",
    "data_nascita": null,
    "sesso": "",
    "codice_fiscale": "",
    "email": "",
    "prefisso": "0039",
    "numero": "",
    "operatore": "",
    "privacy_1": "",
    "privacy_2": "",
    "privacy_3": "",
    "privacy_4": "",
    "privacy_5": "",
    ...testData[0]
}, {
    "cittadinanza": "",
    "paese_nascita": "",
    "provincia_nascita": "",
    "comune_nascita": "",
    "residenza_1": "",
    "tin_1": "",
    "residenza_2": "",
    "tin_2": "",
    "residenza_3": "",
    "tin_3": "",
    "green_card": "",
    "soggiorno_usa": "",
    "tipo_documento": "",
    "numero_documento": "",
    "paese_rilascio": "",
    "provincia_rilascio": "",
    "comune_rilascio": "",
    "data_rilascio": null,
    "data_scadenza": null,
    "immagine_documento": "",
    "tipo_indirizzo_residenza": "",
    "nome_indirizzo_residenza": "",
    "numero_indirizzo_residenza": "",
    "provincia_residenza": "",
    "comune_residenza": "",
    "cap_residenza": "",
    "tipo_indirizzo_domicilio": "",
    "nome_indirizzo_domicilio": "",
    "numero_indirizzo_domicilio": "",
    "provincia_domicilio": "",
    "comune_domicilio": "",
    "cap_domicilio": "",
    "tipo_indirizzo_corrispondenza": "",
    "nome_indirizzo_corrispondenza": "",
    "numero_indirizzo_corrispondenza": "",
    "presso_corrispondenza": "",
    "provincia_corrispondenza": "",
    "comune_corrispondenza": "",
    "cap_corrispondenza": "",
    "tipo_indirizzo_cai": "",
    "nome_indirizzo_cai": "",
    "numero_indirizzo_cai": "",
    "provincia_cai": "",
    "comune_cai": "",
    "cap_cai": "",
    "presso_cai": "",
    "prefisso_casa": "0039",
    "numero_casa": "",
    "prefisso_ufficio": "0039",
    "numero_ufficio": "",
    "titolo_studio": "",
    "come_conosci_aletti": "",
    ...testData[1]
}, {
    "servizio-investimento": false,
    "deposito-titoli": false,
    ...testData[2]
}, {
    "titolare": false,
    "politicamente-esposto": "",
    "scopo-rapporto-cc": "",
    "scopo-rapporto-ct": "",
    "seconda-cittadinanza": "",
    "professione": "",
    "tipo-attivita": "",
    "stato-svolgimento": "",
    "provincia-svolgimento": "",
    "origine-patrimonio": "",
    "pa-dichiarazione": "",
    "pa-ovvero": "",
    "conflitto-dichiarazione": "",
    "capitalizzazione": "",
    ...testData[3]
}, {
    "cellulare": "0039 333123456789",
    "operatore": "Vodafone",
    "email": "aaa@aaa.aa",
    ...testData[4]
}, {
    "identita_accertata": "",
    ...testData[5]
}, {
    "nome": "Giovanni",
    "cognome": "Cosmi",
    "data_nascita": "01-01-1980",
    "comune_nascita": "MILANO",
    "tipo_indirizzo_residenza": "CORSO",
    "nome_indirizzo_residenza": "MAGENTA",
    "numero_indirizzo_residenza": "1",
    "provincia_residenza": "MILANO",
    "comune_residenza": "MILANO",
    "cond_generali": "",
    "disposizioni": "",
    "doc_feq": false,
    "doc_pec": false,
    "cond_feq": "",
    "cond_pec": "",
    "info_precontrattuale_cc": "",
    "info_precontrattuale_dt": "",
    "info_precontrattuale_si": "",
    "doc_privacy": "",
    "doc_antiriciclaggio": "",
    "doc_cond_econ": "",
    "doc_recesso": "",
    "doc_fatca": "",
    "doc_dt": "",
    "codice-otp": "",
    ...testData[6]
}, {
    "comportamento": "",
    "note": "",
    "codice-pin": "",
    "codice-otp2": "",
    ...testData[7]
}];

export const stepsInitialValues = [{
    "privacy_consegnata": isTest,
    "promotore": "852 - Mario Testa",
    "num_intestatari": "1",
    "convenzione": "",
    "promozione": "",
    "filiale": "37121 Verona - Via Zambelli 26",
    "intestatari": [
        _.cloneDeep(intestatariInitialValues[0]),
        _.cloneDeep(intestatariInitialValues[0])
    ]
}, {
    "intestatari": [
        _.cloneDeep(intestatariInitialValues[1]),
        _.cloneDeep(intestatariInitialValues[1])
    ]
}, {
    "intestatari": [
        _.cloneDeep(intestatariInitialValues[2]),
        _.cloneDeep(intestatariInitialValues[2])
    ]
}, {
    "intestatari": [
        _.cloneDeep(intestatariInitialValues[3]),
        _.cloneDeep(intestatariInitialValues[3])
    ]
}, {
    "intestatari": [
        _.cloneDeep(intestatariInitialValues[4]),
        _.cloneDeep(intestatariInitialValues[4])
    ]
}, {
    "intestatari": [
        _.cloneDeep(intestatariInitialValues[5]),
        _.cloneDeep(intestatariInitialValues[5])
    ]
}, {
    "intestatari": [
        _.cloneDeep(intestatariInitialValues[6]),
        _.cloneDeep(intestatariInitialValues[6])
    ]
}, {
    "intestatari": [
        _.cloneDeep(intestatariInitialValues[7]),
        _.cloneDeep(intestatariInitialValues[7])
    ]
}];
