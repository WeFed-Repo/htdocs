const stati = {
    "iniziali": [
        "BOZZA", // Salvataggio backend
        "BOZZA_VALIDATA", // Salvataggio backend
        "RACCOLTA_PRODOTTI",
        "ADEMPIMENTI_NORMATIVI"],
    "int0": [
        "INT0_RIEPILOGO_DATI",
        "INT0_CERTIF_CREDENZIALI",
        "INT0_IDENTIF_CLIENTE",
        "INT0_FIRMA_PRECONTRATTUALE",
        "INT0_FIRMA_VESSATORIE",
        "INT0_FIRMA_INVESTIMENTO",
        "INT0_FIRMA_CONSULENTE" // Salvataggio backend
    ],
    "int1": [
        "INT1_RIEPILOGO_DATI",
        "INT1_CERTIF_CREDENZIALI",
        "INT1_IDENTIF_CLIENTE",
        "INT1_FIRMA_PRECONTRATTUALE",
        "INT1_FIRMA_VESSATORIE",
        "INT1_FIRMA_INVESTIMENTO",
        "INT1_FIRMA_CONSULENTE" // Salvataggio backend
    ],
    "finale": ["CONCLUSA"] // Salvataggio backend
}

// Ritorna tutti gli stati possibili per la pratica (a seconda del numero di intestatari ecc)
let getStatiPratica = (form) => {

    let stati_pratica = stati["iniziali"];

    if (form && form.field_numintestatari === "2") {

        // Caso con 2 intestatari
        if (form.field_ordineintestatari === "01") {

            stati_pratica = stati_pratica.concat(stati["int0"]);
            stati_pratica = stati_pratica.concat(stati["int1"]);

        }
        else {

            stati_pratica = stati_pratica.concat(stati["int1"]);
            stati_pratica = stati_pratica.concat(stati["int0"]);

        }
    }
    else {
        stati_pratica = stati_pratica.concat(stati["int0"]);
    }
    stati_pratica = stati_pratica.concat(stati["finale"]);
    return (stati_pratica);

}

// Ritorna un oggetto complesso contenente, per ogni stato, il suo livello di completamento rispetto alla validazione
let getAvanzamentoPratica = (form) => {
    var stato = stateInt(form);

    // Livelli generali (primi 4 step)
    let completo = true,
        corrente = false,
        avanzamento = {};
    getStatiPratica(form).forEach((val) => {
        if (stato === val) {
            avanzamento[val] = "completo";
            // è l'ultimo step completo
            corrente = true;
            completo = false;
        }
        else {
            if (corrente) {
                avanzamento[val] = "corrente";
                corrente = false;
            }
            else {
                avanzamento[val] = (completo) ? "completo" : "";
            }

        }
    });
    return (avanzamento);
}

let stateInt = (form) => {
    let cState = form.field_stato;
    if (stati["iniziali"].indexOf(cState) >= 0 || cState === "conclusa") {
        return cState
    }
    else {
        return ("INT" + form.field_intestcorrente + "_" + cState);
    }

}


let getNextState = (form) => {

    let stati = getStatiPratica(form);

    return stati[stati.indexOf(stateInt(form)) + 1].replace("INT0_", "").replace("INT1_", "");

}

let getNextInt = (form) => {
    let int = "0",
        stati = getStatiPratica(form);
    var nextState = stati[stati.indexOf(stateInt(form)) + 1];
    if (nextState.indexOf("INT") >= 0) { int = nextState.substring(3, 4) }
    return (int);
}

let getPrevState = (form) => {

    // Caso con 1 intestatario 
    let stati = getStatiPratica(form);
    return stati[stati.indexOf(stateInt(form)) - 1].replace("INT0_", "").replace("INT1_", "");
}

let getPrevInt = (form) => {
    let int = "0",
        stati = getStatiPratica(form);
    var nextState = stati[stati.indexOf(stateInt(form)) - 1];
    if (nextState.indexOf("INT") >= 0) { int = nextState.substring(3, 4) }
    return (int);
}

export { getStatiPratica, getAvanzamentoPratica, getNextState, getNextInt, getPrevState, getPrevInt };