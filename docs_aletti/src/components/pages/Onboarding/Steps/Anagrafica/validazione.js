export default function(form) {
    
    // Inizializzazione oggetto errori
    let errors = {},
        obbligatorimsgVis = "Prendi visione del documento e seleziona",
        obbligatorimsg = "Compila",
        obbligatorimsgSel = "Seleziona",
        codicemsgLength = "Il codice fiscale deve contenere 16 caratteri",
        mailmsgFormat = "Verifica",
        cimsgFormat = "Verifica" 

    
    //Obbligatori intestatario 1 
    let obbligator_int1 = [
        "field_anagraficablob_intestatari_0_nome",
        "field_anagraficablob_intestatari_0_cognome", 
        "field_anagraficablob_intestatari_0_nascita",
        "field_anagraficablob_intestatari_0_codicefiscale",
        "field_anagraficablob_intestatari_0_email",
        "field_anagraficablob_intestatari_0_imgcodfiscale_iddoc",
        "field_anagraficablob_intestatari_0_prefisso",
        "field_anagraficablob_intestatari_0_telefono",
        "field_anagraficablob_intestatari_0_listprivacy_0_consenso",
        "field_anagraficablob_intestatari_0_listprivacy_1_consenso",
        "field_anagraficablob_intestatari_0_listprivacy_2_consenso",
        "field_anagraficablob_intestatari_0_listprivacy_3_consenso",
        "field_anagraficablob_intestatari_0_listprivacy_4_consenso",
        "field_anagraficablob_intestatari_0_numdocumento",
        "field_anagraficablob_intestatari_0_datarilasciorinnovo",
        "field_anagraficablob_intestatari_0_datascadenza"
        
        ],
        obbligatoriSel_int1 = [
            "field_anagraficablob_intestatari_0_sesso",
            "field_anagraficablob_intestatari_0_paesenascita",
            "field_anagraficablob_intestatari_0_cittadinanza",
            "field_anagraficablob_intestatari_0_provincianascita",
            "field_anagraficablob_intestatari_0_comunenascita",
            "field_anagraficablob_intestatari_0_codtipodocumento",
            "field_anagraficablob_intestatari_0_provinciarilascio",
            "field_anagraficablob_intestatari_0_comunerilascio"
        ];
    
    //Obbligatori eventuale intestatario 2
    let obbligator_int2 = [
        "field_anagraficablob_intestatari_1_nome",
        "field_anagraficablob_intestatari_1_cognome",
        "field_anagraficablob_intestatari_1_nascita",
        "field_anagraficablob_intestatari_1_codicefiscale",
        "field_anagraficablob_intestatari_1_email",
        "field_anagraficablob_intestatari_1_imgcodfiscale_iddoc",
        "field_anagraficablob_intestatari_1_prefisso",
        "field_anagraficablob_intestatari_1_telefono",
        "field_anagraficablob_intestatari_1_listprivacy_0_consenso",
        "field_anagraficablob_intestatari_1_listprivacy_1_consenso",
        "field_anagraficablob_intestatari_1_listprivacy_2_consenso",
        "field_anagraficablob_intestatari_1_listprivacy_3_consenso",
        "field_anagraficablob_intestatari_1_listprivacy_4_consenso",
        "field_anagraficablob_intestatari_1_numdocumento",
        "field_anagraficablob_intestatari_1_datarilasciorinnovo",
        "field_anagraficablob_intestatari_1_datascadenza"
        ],
        obbligatoriSel_int2 = [
          "field_anagraficablob_intestatari_1_sesso",
          "field_anagraficablob_intestatari_1_paesenascita" ,
          "field_anagraficablob_intestatari_1_cittadinanza",
          "field_anagraficablob_intestatari_1_provincianascita",
          "field_anagraficablob_intestatari_1_comunenascita",
          "field_anagraficablob_intestatari_1_codtipodocumento",
          "field_anagraficablob_intestatari_0_provinciarilascio",
            "field_anagraficablob_intestatari_0_comunerilascio"
        ];

    //obbligatorio con selzione documento
    let obbligatoriVis = ["field_anagraficablob_privacyletta"]
    
    // Check campi obbligatori tramite array
    let obbligatori = form["field_numintestatari"]==="1" ? obbligator_int1 : obbligator_int1.concat(obbligator_int2),
        obbligatoriSel =  form["field_numintestatari"]==="1" ? ["field_numintestatari"].concat(obbligatoriSel_int1) : ["field_numintestatari"].concat(obbligatoriSel_int1).concat(obbligatoriSel_int2);
    

    // Eventuali campi obbligatori "condizionati" dalla presenza o dal valore di altri

    // Ciclo di controllo dei campi obbligatori 

    obbligatoriVis.forEach((v, i) => {
        if (form[v] === "") errors[v] = obbligatorimsgVis;
        
    });
    
    obbligatori.forEach((v, i) => {
       if (form[v] === "") errors[v] = obbligatorimsg;
        
    });
    obbligatoriSel.forEach((v, i) => {
        if (form[v] === "" || form[v] === "Seleziona") errors[v] = obbligatorimsgSel;
    });
   
    // Controllo sul codice fiscale
    //Lunghezza 16 caratteri
    if (form["field_anagraficablob_intestatari_0_codicefiscale"].length!="" && form["field_anagraficablob_intestatari_0_codicefiscale"].length < 16 ) errors["field_anagraficablob_intestatari_0_codicefiscale"] = codicemsgLength;
    if (form["field_anagraficablob_intestatari_1_codicefiscale"].length!="" && form["field_anagraficablob_intestatari_1_codicefiscale"].length < 16 ) errors["field_anagraficablob_intestatari_1_codicefiscale"] = codicemsgLength;
    
   // Controllo sulla mail
   const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
   if (form["field_anagraficablob_intestatari_0_email"].length!="" && !emailRegex.test(form["field_anagraficablob_intestatari_0_email"])) errors["field_anagraficablob_intestatari_0_email"] = mailmsgFormat;
   if (form["field_anagraficablob_intestatari_1_email"].length!="" && !emailRegex.test(form["field_anagraficablob_intestatari_1_email"])) errors["field_anagraficablob_intestatari_1_email"] = mailmsgFormat; 
    
   // Controllo sul formato della carta d'identità mail
   //VA FATTO SOLO SE NON  HO SELEZIONATO UN PAESE STRANIERO COME PAESE DI EMISSIONE
  
   if(form["field_anagraficablob_intestatari_0_paeserilascio"] === "86" || form["field_anagraficablob_intestatari_0_paeserilascio"] === "" )
   { 
    
    if(form["field_anagraficablob_intestatari_0_codtipodocumento"] ==="01"|| form["field_anagraficablob_intestatari_0_codtipodocumento"] ==="11" || form["field_anagraficablob_intestatari_0_codtipodocumento"] ==="12")
    {
         
         const ciRegex = /^([a-z]{2}\d{6,7}|\d{6,7}[a-z]{2}\d?)$/i;
         if(form["field_anagraficablob_intestatari_0_numdocumento"].length!="" && !ciRegex.test(form["field_anagraficablob_intestatari_0_numdocumento"])) {
             errors["field_anagraficablob_intestatari_0_numdocumento"] = cimsgFormat
         }
    }
   }
   if(form["field_anagraficablob_intestatari_1_paeserilascio"] === "86" || form["field_anagraficablob_intestatari_1_paeserilascio"] === "" )
   { 
    if(form["field_anagraficablob_intestatari_1_codtipodocumento"] ==="01"|| form["field_anagraficablob_intestatari_1_codtipodocumento"] ==="11" || form["field_anagraficablob_intestatari_1_codtipodocumento"] ==="12")
    {
            const ciRegex = /^([a-z]{2}\d{6,7}|\d{6,7}[a-z]{2}\d?)$/i;
            if(form["field_anagraficablob_intestatari_1_numdocumento"].length!="" && !ciRegex.test(form["field_anagraficablob_intestatari_1_numdocumento"])) {
                errors["field_anagraficablob_intestatari_1_numdocumento"] = cimsgFormat
            }
    }
    }
   // Ripassa l'oggetto con tutti gli errori del form visualizzato
   return (errors);
    

}