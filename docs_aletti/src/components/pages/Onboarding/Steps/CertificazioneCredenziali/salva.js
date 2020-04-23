import {saveUrl} from "components/pages/Onboarding/common/parametri.js";
import {jsonFromFields} from "components/pages/Onboarding/common/gestioneDati.js";

    export default  {

        url: saveUrl.SessioneFirme,
        
        data: (form,validazione) => {
    
            let val = (validazione)? validazione : false;
    
            // Oggetto "data" del form
            let dataObj = 
                {
                    "id": form.field_id,
                    "firme":
                        {
                        "intestatariFirme":
                            {
                                [form.field_intestcorrente]: { 
                                "cellCertif":true,
                                "emailCertif":true,
                            }
                        }
                    },
                    "stato": "CERTIF_CREDENZIALI",
                    "intestatarioCorrente": form.field_intestcorrente
                }
            
            console.log("------------------- OGGETTO DATA INVIATO --------------------");
            console.log(dataObj);
           
            return dataObj;
    
        }
    
    
}
