
const validazioneFatca = (form) => {
    // Inizializzazione oggetto errori
   
    let listaTinRequested = form.domini.nazioni_attive.filter((el) => { return el.flagTin === "S" }).map((obj) => {
        return obj.value;
    });
    let errors = {},
        obbligatorimsg = "Compila",

        //controllo sezione CAI - obbligatori solo se almeno un campo dell'accordion è compilato
        obbligator_int1 = [
            
        ],
        obbligator_int2 = [
            
        ];
        

    //Ciclo di controllo dei campi obbligatori 
   listaTinRequested.map((v, i) => {
       if(form["field_anagraficablob_intestatari_0_listresidenzefiscale_1_codiceuic"] === v.toString() )
         {
            obbligator_int1.push("field_anagraficablob_intestatari_0_listresidenzefiscale_1_tin") 
        }
        if(form["field_anagraficablob_intestatari_0_listresidenzefiscale_2_codiceuic"] === v.toString() )
        {
            obbligator_int1.push("field_anagraficablob_intestatari_0_listresidenzefiscale_2_tin") 
        }
        if(form["field_anagraficablob_intestatari_0_listresidenzefiscale_3_codiceuic"] === v.toString() )
        {
            obbligator_int1.push("field_anagraficablob_intestatari_0_listresidenzefiscale_3_tin") 
        }
    
    })
    listaTinRequested.map((v, i) => {
        if(form["field_anagraficablob_intestatari_1_listresidenzefiscale_1_codiceuic"] === v.toString() )
          {
             obbligator_int2.push("field_anagraficablob_intestatari_1_listresidenzefiscale_1_tin") 
         }
         if(form["field_anagraficablob_intestatari_1_listresidenzefiscale_2_codiceuic"] === v.toString() )
         {
             obbligator_int2.push("field_anagraficablob_intestatari_1_listresidenzefiscale_2_tin") 
         }
         if(form["field_anagraficablob_intestatari_1_listresidenzefiscale_3_codiceuic"] === v.toString() )
         {
             obbligator_int2.push("field_anagraficablob_intestatari_1_listresidenzefiscale_3_tin") 
         }
     
     })
    let obbligatori = form["field_numintestatari"] === "1" ? obbligator_int1 : obbligator_int1.concat(obbligator_int2);
    
    obbligatori.forEach((v, i) => {
        
        if (form[v] === "") errors[v] = obbligatorimsg;
    
    
    });



    return (errors);
}

export default validazioneFatca;