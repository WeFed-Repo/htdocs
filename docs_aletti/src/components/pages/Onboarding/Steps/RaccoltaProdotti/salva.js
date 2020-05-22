import {saveUrl} from "components/pages/Onboarding/common/parametri.js";
import { getNextInt } from "../../common/gestioneStati";

export default  {

    url: saveUrl.SessioneFirme,
    
    data: (form,validazione) => {

        let val = (validazione)? validazione : false;

        // Oggetto "data" del form
        let dataObj = {
                "id": form.field_id,
                "firme": {
                    "idMifid":form.field_sessionfirmeblob_idmifid,
                    "depositoIncluso": (form.field_sessionfirmeblob_depositoincluso==="true"),
                    "informativaMifid": (form.field_sessionfirmeblob_informativamifid==="true")
                },
                "stato": "RACCOLTA_PRODOTTI",
                "intestatarioCorrente": getNextInt(form)
                
            }

        console.log("------------------- OGGETTO DATA INVIATO --------------------");
        console.log(dataObj);
        console.log(JSON.stringify(dataObj));
       
        return dataObj;

    }

}
