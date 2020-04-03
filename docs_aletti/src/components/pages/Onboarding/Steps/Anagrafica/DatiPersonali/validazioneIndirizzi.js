const validazioneIndirizzi = (form, tpyeIndirizzo) => {
    // Inizializzazione oggetto errori
    
    let errors = {},
        obbligatorimsg = "Compila",
        obbligatorimsgSel = "Seleziona"
    //controllo sezione CAI - obbligatori solo se almeno un campo dell'accordion è compilato
    let campi_int1 = [
        form["field_anagraficablob_intestatari_0_tipoindirizzo" + tpyeIndirizzo],
        form["field_anagraficablob_intestatari_0_indirizzo" + tpyeIndirizzo],
        form["field_anagraficablob_intestatari_0_num" + tpyeIndirizzo],
        form["field_anagraficablob_intestatari_0_provincia" + tpyeIndirizzo]
    ],
        campi_int2 = [
            form["field_anagraficablob_intestatari_1_tipoindirizzo" + tpyeIndirizzo],
            form["field_anagraficablob_intestatari_1_indirizzo" + tpyeIndirizzo],
            form["field_anagraficablob_intestatari_1_num" + tpyeIndirizzo],
            form["field_anagraficablob_intestatari_1_provincia" + tpyeIndirizzo]
    ],
        isObbCampi_int1 = false,
        isObbCampi_int2 = false,
        obbligatori = [],
        obbligatoriSel = [];


    campi_int1.some((el) => {
        if (el != "") isObbCampi_int1 = true
    })
    campi_int2.some((el) => {
        if (el != "") isObbCampi_int2 = true
    })

    if (form["field_numintestatari"] === "1" && isObbCampi_int1) {
        obbligatori = ["field_anagraficablob_intestatari_0_indirizzo" + tpyeIndirizzo, "field_anagraficablob_intestatari_0_num" + tpyeIndirizzo]
        obbligatoriSel = ["field_anagraficablob_intestatari_0_tipoindirizzo" + tpyeIndirizzo, "field_anagraficablob_intestatari_0_provincia" + tpyeIndirizzo];
    }
    else if (form["field_numintestatari"] !== "1") {
        if (isObbCampi_int1 && !isObbCampi_int2) {
            obbligatori = ["field_anagraficablob_intestatari_0_indirizzo" + tpyeIndirizzo, "field_anagraficablob_intestatari_0_num" + tpyeIndirizzo]
            obbligatoriSel = ["field_anagraficablob_intestatari_0_tipoindirizzo" + tpyeIndirizzo, "field_anagraficablob_intestatari_0_provincia" + tpyeIndirizzo];
        }
        if (!isObbCampi_int1 && isObbCampi_int2) {
            obbligatori = ["field_anagraficablob_intestatari_1_indirizzo" + tpyeIndirizzo, "field_anagraficablob_intestatari_1_num" + tpyeIndirizzo]
            obbligatoriSel = ["field_anagraficablob_intestatari_1_tipoindirizzo" + tpyeIndirizzo, "field_anagraficablob_intestatari_1_provincia" + tpyeIndirizzo];
        }
        else if (isObbCampi_int1 && isObbCampi_int2) {
            obbligatori = ["field_anagraficablob_intestatari_0_indirizzo" + tpyeIndirizzo, "field_anagraficablob_intestatari_0_num" + tpyeIndirizzo, "field_anagraficablob_intestatari_1_indirizzo" + tpyeIndirizzo, "field_anagraficablob_intestatari_1_num" + tpyeIndirizzo];
            obbligatoriSel = ["field_anagraficablob_intestatari_0_tipoindirizzo" + tpyeIndirizzo, "field_anagraficablob_intestatari_0_provincia" + tpyeIndirizzo, "field_anagraficablob_intestatari_1_tipoindirizzo" + tpyeIndirizzo, "field_anagraficablob_intestatari_1_provincia" + tpyeIndirizzo];
        }
    }

    // Ciclo di controllo dei campi obbligatori 


    obbligatori.forEach((v, i) => {
        if (form[v] === "") errors[v] = obbligatorimsg;
    });
    obbligatoriSel.forEach((v, i) => {
        if (form[v] === "") errors[v] = obbligatorimsgSel;
    });
    // Ripassa l'oggetto con tutti gli errori del form visualizzato

    return (errors);
}

export default validazioneIndirizzi;