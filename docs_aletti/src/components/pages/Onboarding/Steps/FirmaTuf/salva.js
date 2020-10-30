import {saveUrl} from "components/pages/Onboarding/common/parametri.js";

    export default  {

        url: saveUrl.SessioneFirme,
        
        data: (form,validazione) => {
    
            let val = (validazione)? validazione : false;
    
            // Oggetto "data" del form
            let dataObj = 
                {
                    "id": form.field_id,
                    "stato": "FIRMA_TUF",
                    "intestatarioCorrente": form.field_intestcorrente
                }
            
            console.log("------------------- OGGETTO DATA INVIATO --------------------");
            console.log(dataObj);
           
            return dataObj;
    
        }
    
    
}
