import {saveUrl} from "components/pages/Onboarding/common/parametri.js";
import {getNextInt} from "components/pages/Onboarding/common/gestioneStati.js";

    export default  {

        url: saveUrl.SessioneFirme,
        
        data: (form,validazione) => {
    
            let val = (validazione)? validazione : false;
    
            // Oggetto "data" del form
            let dataObj = {
                    "id": form.field_id,
                    "stato": "RIEPILOGO_DATI",
                    "intestatarioCorrente": getNextInt(form)
                    
                }
    
            console.log("------------------- OGGETTO DATA INVIATO --------------------");
            console.log(dataObj);
           
            return dataObj;
    
        }
    
    
}
