import _ from "lodash-es/lodash.default";

const imageString = "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";
const isTest = true;
const testData = isTest
    ? [
        {
            "nome": "Mario",
            "cognome": "Bianchi",
            "data_nascita": 315529200000,
            "sesso": "M",
            "codice_fiscale": "BNCMRA80A01F205D",
            "num_immagini_cf": "1",
            "immagine_cf": imageString,
            "immagine_cf_fronte": "",
            "immagine_cf_retro": "",
            "email": "aa@aa.it",
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
            "cittadinanza": "86|ITALIA",
            "paese_nascita": "86|ITALIA",
            "provincia_nascita": "MI",
            "comune_nascita": "MILANO",
            "residenza_1": "",
            "tin_1": "",
            "residenza_2": "",
            "tin_2": "",
            "residenza_3": "",
            "tin_3": "",
            "num_immagini_tin": "1",
            "immagine_tin": imageString,
            "immagine_tin_fronte": "",
            "immagine_tin_retro": "",
            "green_card": "0",
            "soggiorno_usa": "0",
            "tipo_documento": "01|Carta d'identità (cartacea, elettronica, rinnovata)",
            "numero_documento": "AA123456",
            "paese_rilascio": "86|ITALIA",
            "provincia_rilascio": "MI",
            "comune_rilascio": "MILANO",
            "data_rilascio": 1262300400000,
            "data_scadenza": 1577833200000,
            "immagine_firma": imageString,
            "immagine_documento": imageString,
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
            "numero_casa": "446564647",
            "prefisso_ufficio": "0039",
            "numero_ufficio": "815251389",
            "titolo_studio": "diploma|Diploma"
        },
        {},
        {
            "titolare": true,
            "scopo_rapporto_cc": "9|Risparmio",
            "scopo_rapporto_dt": "10|Finanziamento",
            "professione": "2|Lavoratore autonomo",
            "tipo_attivita_economica": "991|Professioni tecnico/scientifiche (architetti, ingegneri, chimici, biologi, agronomi, periti, geometri, ecc.)",
            "stato_svolgimento": "86|ITALIA",
            "provincia_svolgimento": "MI",
            "origine_patrimonio": "1|Redditi di lavoro autonomo",
            "patrimonio_netto": "4|Da 40.001  a 75.000",
            "note_patrimonio": "",
            "reddito_annuo": "4|Da 40.001  a 75.000",
            "note_reddito": "",
            "seconda_cittadinanza": ""
        },
        {
            "verifica_cellulare": true,
            "verifica_email": true
        },
        {},
        {},
        {}]
    : [{}, {}, {}, {}, {}, {}, {}, {}];
const testDataInt2 = isTest
    ? [{
        "nome": "Anna",
        "cognome": "Rossi",
        "data_nascita": 473382000000,
        "sesso": "F",
        "codice_fiscale": "RSSNNA85A41F205T",
        "immagine_cf": imageString,
        "email": "bb@bb.it",
        "prefisso": "0039",
        "numero": "321654987",
        "operatore": "TRE"
    }, {}, {}, {}, {}, {}, {}, {}]
    : [{}, {}, {}, {}, {}, {}, {}, {}];
const intestatario = [{
    "nome": "",
    "cognome": "",
    "data_nascita": null,
    "sesso": "",
    "codice_fiscale": "",
    "num_immagini_cf": "1",
    "immagine_cf": "",
    "immagine_cf_fronte": "",
    "immagine_cf_retro": "",
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
    "num_immagini_tin": "1",
    "immagine_tin": "",
    "immagine_tin_fronte": "",
    "immagine_tin_retro": "",
    "green_card": "",
    "soggiorno_usa": "",
    "tipo_documento": "",
    "numero_documento": "",
    "paese_rilascio": "",
    "provincia_rilascio": "",
    "comune_rilascio": "",
    "data_rilascio": null,
    "data_scadenza": null,
    "immagine_firma": "",
    "num_immagini_documento": "1",
    "immagine_documento": "",
    "immagine_documento_fronte": "",
    "immagine_documento_retro": "",
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
}, {}, {
    "titolare": false,
    "politicamente_esposto": "",
    "scopo_rapporto_cc": "",
    "scopo_rapporto_dt": "",
    "professione": "",
    "tipo_attivita_economica": "",
    "stato_svolgimento": "",
    "provincia_svolgimento": "",
    "origine_patrimonio": "",
    "patrimonio_netto": "",
    "note_patrimonio": "",
    "reddito_annuo": "",
    "note_reddito": "",
    "seconda_cittadinanza": "",
    ...testData[3]
}, {
    "verifica_cellulare": false,
    "verifica_email": false,
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
    "codice_otp": "",
    ...testData[6]
}, {
    "comportamento": "",
    "note": "",
    "codice_pin": "",
    "codice_otp_2": "",
    ...testData[7]
}];
const steps = [{
    "privacy_consegnata": isTest,
    "promotore": "852 - Mario Testa",
    "promozione": "",
    "filiale": "37121 Verona - Via Zambelli 26",
    "intestatari": [
        _.cloneDeep(intestatario[0]),
        _.cloneDeep({ ...intestatario[0], ...testDataInt2[0] })
    ]
}, {
    "intestatari": [
        _.cloneDeep(intestatario[1]),
        _.cloneDeep({ ...intestatario[1], ...testDataInt2[1] })
    ]
}, {
    "deposito_titoli": false,
    "regime_fiscale": "amministrativo",
    "tipo_commissioni": "variabile",
    "informativa_mifid_consegnata": false
}, {
    "autorizzazione_anatocismo": isTest ? "1" : "",
    "intestatari": [
        _.cloneDeep(intestatario[3]),
        _.cloneDeep(intestatario[3])
    ]
}, {
    "intestatari": [
        _.cloneDeep(intestatario[4]),
        _.cloneDeep(intestatario[4])
    ]
}, {
    "intestatari": [
        _.cloneDeep(intestatario[5]),
        _.cloneDeep(intestatario[5])
    ]
}, {
    "intestatari": [
        _.cloneDeep(intestatario[6]),
        _.cloneDeep(intestatario[6])
    ]
}, {
    "intestatari": [
        _.cloneDeep(intestatario[7]),
        _.cloneDeep(intestatario[7])
    ]
}];

const stepToShow = 0;
const bar = {
    list: [0, 0, 0, 0, 0, 0, 0, 0].map((val, idx) => idx < stepToShow ? 1 : 0),
    activeStep: stepToShow,
    completedStep: stepToShow - 1
};
const defaultObject = {
    "intestatari": [
        {},
        {}
    ]
};

export const getDefaultObject = () => _.cloneDeep(defaultObject);
export const getDefaultBar = () => _.cloneDeep(bar);
export const getDefaultSteps = () => _.cloneDeep(steps);
