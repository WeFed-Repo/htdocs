export default function(form) {
    
    // Inizializzazione oggetto errori
    let errors = {},
        obbligatorimsg = "Compila",
        obbligatorimsgSel = "Seleziona",
        codicemsgLength = "Il codice fiscale deve contenere 16 caratteri",
        mailmsgFormat = "Verifica"

    
    //Obbligatori intestatario 1 
    let obbligator_int1 = [
        "field_anagraficablob_intestatari_0_nome",
        "field_anagraficablob_intestatari_0_cognome", 
        "field_anagraficablob_intestatari_0_nascita",
        "field_anagraficablob_intestatari_0_codicefiscale",
        "field_anagraficablob_intestatari_0_email"
        ],
        obbligatoriSel_int1 = [
        "field_anagraficablob_intestatari_0_sesso"    
        ];
    
    //Obbligatori eventuale intestatario 2
    let obbligator_int2 = [
        "field_anagraficablob_intestatari_1_nome",
        "field_anagraficablob_intestatari_1_cognome",
        "field_anagraficablob_intestatari_1_nascita",
        "field_anagraficablob_intestatari_1_codicefiscale",
        "field_anagraficablob_intestatari_1_email"
        ],
        obbligatoriSel_int2 = [
        "field_anagraficablob_intestatari_1_sesso"    
        ];
    
    // Check campi obbligatori tramite array
    let obbligatori = form["field_numintestatari"]==="1" ? ["field_anagraficablob_privacyletta"].concat(obbligator_int1) : ["field_anagraficablob_privacyletta"].concat(obbligator_int1).concat(obbligator_int2),
        obbligatoriSel =  form["field_numintestatari"]==="1" ? ["field_numintestatari"].concat(obbligatoriSel_int1) : ["field_numintestatari"].concat(obbligatoriSel_int1).concat(obbligatoriSel_int2);
    

    // Eventuali campi obbligatori "condizionati" dalla presenza o dal valore di altri

    // Ciclo di controllo dei campi obbligatori 
    obbligatori.forEach((v, i) => {
        if (form[v] === "") errors[v] = obbligatorimsg;
        
    });
    obbligatoriSel.forEach((v, i) => {
        if (form[v] === "") errors[v] = obbligatorimsgSel;
    });
   
    // Controllo sul codice fiscale
    //Lunghezza 16 caratteri
    if (form["field_anagraficablob_intestatari_0_codicefiscale"].length!="" && form["field_anagraficablob_intestatari_0_codicefiscale"].length < 16 ) errors["field_anagraficablob_intestatari_0_codicefiscale"] = codicemsgLength;
    if (form["field_anagraficablob_intestatari_1_codicefiscale"].length!="" && form["field_anagraficablob_intestatari_1_codicefiscale"].length < 16 ) errors["field_anagraficablob_intestatari_1_codicefiscale"] = codicemsgLength;
    
   // Controllo sulla mail
   const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
   if (form["field_anagraficablob_intestatari_0_email"].length!="" && !emailRegex.test(form["field_anagraficablob_intestatari_0_email"])) errors["field_anagraficablob_intestatari_0_email"] = mailmsgFormat;
   if (form["field_anagraficablob_intestatari_1_email"].length!="" && !emailRegex.test(form["field_anagraficablob_intestatari_1_email"])) errors["field_anagraficablob_intestatari_1_email"] = mailmsgFormat; 
    // Ripassa l'oggetto con tutti gli errori del form visualizzato
    return (errors);
    

}