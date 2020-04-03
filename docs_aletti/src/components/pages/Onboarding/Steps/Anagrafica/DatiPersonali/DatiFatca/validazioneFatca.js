const validazioneFatca = (form) => {
    // Inizializzazione oggetto errori

    let errors = {},
        obbligatorimsg = "Compila",

        //controllo sezione CAI - obbligatori solo se almeno un campo dell'accordion è compilato
        obbligator_int1 = [
            "field_anagraficablob_intestatari_0_listresidenzefiscale_1_tin",
            "field_anagraficablob_intestatari_0_listresidenzefiscale_2_tin",
            "field_anagraficablob_intestatari_0_listresidenzefiscale_3_tin"
        ],
        obbligator_int2 = [
            "field_anagraficablob_intestatari_1_listresidenzefiscale_1_tin",
            "field_anagraficablob_intestatari_1_listresidenzefiscale_2_tin",
            "field_anagraficablob_intestatari_1_listresidenzefiscale_3_tin"
        ];

    //Ciclo di controllo dei campi obbligatori 

    let obbligatori = form["field_numintestatari"] === "1" ? obbligator_int1 : obbligator_int1.concat(obbligator_int2);
    console.log(obbligatori)
    obbligatori.forEach((v, i) => {
        if (form[v] === "") errors[v] = obbligatorimsg;
    });



    return (errors);
}

export default validazioneFatca;