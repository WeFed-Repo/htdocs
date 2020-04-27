export default function(form) {

    // Inizializzazione oggetto errori
    let errors = {};

    // Controlla se i recapiti sono verificati
    if (form["field_sessionfirmeblob_intestatarifirme_"+ form.field_intestcorrente +"_cellcertif"]!=="true") {
        errors["field_sessionfirmeblob_intestatarifirme_"+ form.field_intestcorrente +"_cellcertif"] = "Occorre verificare il numero di cellulare";
    }
    if (form["field_sessionfirmeblob_intestatarifirme_"+ form.field_intestcorrente +"_emailcertif"]!=="true") {
        errors["field_sessionfirmeblob_intestatarifirme_"+ form.field_intestcorrente +"_emailcertif"] = "Occorre verificare l'indirizzo email";
    }

    // Ripassa l'oggetto con tutti gli errori del form visualizzato
    return (errors);

}