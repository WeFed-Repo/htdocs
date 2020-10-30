import {saveUrl} from "components/pages/Onboarding/common/parametri.js";

    export default  {

        url: saveUrl.SessioneFirme,
        
        data: (form,validazione) => {
    
            let val = (validazione)? validazione : false;
    
            // Oggetto "data" del form
            let dataObj = 
                {
                    "id": form.field_id,
                    "stato": "ATTESA_FIRMA_CONSULENTE",
                    "intestatarioCorrente": form.field_intestcorrente
                }
            
            console.log("------------------- OGGETTO DATA INVIATO --------------------");
            console.log(dataObj);
           
            return dataObj;
    
        }
    
    
}
