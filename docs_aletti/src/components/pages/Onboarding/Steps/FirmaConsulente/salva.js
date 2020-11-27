import {saveUrl} from "components/pages/Onboarding/common/parametri.js";



    export default  {

        url: saveUrl.SessioneFirme,
        
        data: (form,validazione) => {
            
            let val = (validazione)? validazione : false;

            // Determina se lo stato corrente e' BOZZA_DA_COMPLETARE o INSERITA_DA_INVIARE (A SECONDA DELLA POSIZIONE NEL FLUSSO)
            let localState = "INSERITA_DA_INVIARE";
            if (form.field_numintestatari==="2") {
                if (form.field_intestcorrente.toString() === form.field_ordineintestatari.split("")[0])  localState = "BOZZA_DA_COMPLETARE";
            }
    
            // Oggetto "data" del form
            let dataObj = 
                {
                    "id": form.field_id,
                    "stato": localState,
                    "intestatarioCorrente": form.field_intestcorrente,
                    "firme": {
                            "otpCons": "",
                            "pinCons" : ""
                    }
                }
            
            console.log("------------------- OGGETTO DATA INVIATO --------------------");
            console.log(dataObj);
           
            return dataObj;
    
        }
    
    
}
