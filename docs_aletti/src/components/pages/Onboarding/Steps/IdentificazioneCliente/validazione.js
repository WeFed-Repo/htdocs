export default function(form) {

    // Inizializzazione oggetto errori
    let errors = {};

    if (form["field_sessionfirmeblob_intestatarifirme_"+ form["field_intestcorrente"] +"_identitaaccertata"]==="") {
        errors["field_sessionfirmeblob_intestatarifirme_"+ form["field_intestcorrente"] +"_identitaaccertata"]="Compila"
    }

    // Ripassa l'oggetto con tutti gli errori del form visualizzato
    return (errors);

}