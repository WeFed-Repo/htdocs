export default function(form) {

    // Inizializzazione oggetto errori
    let errors = {},
        obbligatorimsg = "Compila";

    // Check campi obbligatori tramite array
    let obbligatori = ["field_sessionfirmeblob_naturascopo_0_id","field_sessionfirmeblob_capitalizzazioneperiodica_consenso"];

    // Eventuali campi obbligatori "condizionati" dalla presenza o dal valore di altri

   

    // Campi obbligatori primo intestatario
    let obbligatori1int = [
        "field_sessionfirmeblob_intestatarifirme_0_titolareeffettivo",
        "field_sessionfirmeblob_intestatarifirme_0_personaesposta",
        "field_sessionfirmeblob_intestatarifirme_0_listrispadever_professione_0_id",
        "field_sessionfirmeblob_intestatarifirme_0_listrispadever_taesettore_0_id",
        "field_sessionfirmeblob_intestatarifirme_0_listrispadever_nazionalita_0_id",
        "field_sessionfirmeblob_intestatarifirme_0_listrispadever_fasciareddito_0_id",
        "field_sessionfirmeblob_intestatarifirme_0_listrispadever_originereddito_0_id",
        "field_sessionfirmeblob_intestatarifirme_0_listrispadever_fasciapatrimonio_0_id",
        "field_sessionfirmeblob_intestatarifirme_0_listrispadever_originefondi_0_id"
    ];

    // Altri campi obbligatori condizionati 
    if (form["field_sessionfirmeblob_depositoincluso"]==="true")  obbligatori.push("field_sessionfirmeblob_naturascopodeposito_0_id");
    if (form["field_sessionfirmeblob_intestatarifirme_0_listrispadever_nazionalita_0_id"]==="86") obbligatori1int.push("field_sessionfirmeblob_intestatarifirme_0_listrispadever_provincia_0_id");
    
    obbligatori = obbligatori.concat(obbligatori1int);
    
    // Aggiunge altri campi obbligatori a seconda del numero di intestatari coinvolti
    if(form["field_numintestatari"]==="2") {
        obbligatori = obbligatori.concat(obbligatori1int.map((val)=>{return (val.replace("intestatarifirme_0_","intestatarifirme_1_"))}));
    }

     // Ciclo di controllo dei campi obbligatori 
    obbligatori.forEach((v, i) => {
        if (form[v] === "") errors[v] = obbligatorimsg;
    });

    // Ripassa l'oggetto con tutti gli errori del form visualizzato
    return (errors);

}