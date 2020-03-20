export default function(form) {

    // Inizializzazione oggetto errori
    let errors = {},
        obbligatorimsg = "Compila";

    // Check campi obbligatori tramite array
    let obbligatori = [];

    // Eventuali campi obbligatori "condizionati" dalla presenza o dal valore di altri

    // Ciclo di controllo dei campi obbligatori 
    obbligatori.forEach((v, i) => {
        if (form[v] === "") errors[v] = obbligatorimsg;
    });

    // Integrazione altri controlli sui campi 


    // Ripassa l'oggetto con tutti gli errori del form visualizzato
    return (errors);

}