export default function(form) {

    // Inizializzazione oggetto errori
    let errors = {},
        obbligatorimsg = "Compila";

    
    //Obbligatori intestatario 1 
    let obbligator_int1 = ["field_anagraficablob_intestatari_0_nome"];
    
    //Obbligatori eventuale intestatario 2
    let obbligator_int2 = ["field_anagraficablob_intestatari_1_nome"];
    
    // Check campi obbligatori tramite array
    let obbligatori = form["field_numintestatari"]==="2" ?  ["field_numintestatari", "field_anagraficablob_privacyletta"].concat(obbligator_int1).concat(obbligator_int2) : ["field_numintestatari", "field_anagraficablob_privacyletta"].concat(obbligator_int1) 


    // Eventuali campi obbligatori "condizionati" dalla presenza o dal valore di altri

    // Ciclo di controllo dei campi obbligatori 
    obbligatori.forEach((v, i) => {
        if (form[v] === "") errors[v] = obbligatorimsg;
        
    });
   
    // Integrazione altri controlli sui campi 
    

    // Ripassa l'oggetto con tutti gli errori del form visualizzato
    return (errors);


}