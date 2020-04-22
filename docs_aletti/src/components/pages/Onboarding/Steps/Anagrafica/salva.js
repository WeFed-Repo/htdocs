import {saveUrl} from "components/pages/Onboarding/common/parametri.js";
import {jsonFromFields} from "components/pages/Onboarding/common/gestioneDati.js";

export default  {

    url: saveUrl.Anagrafica,
    
    data: (form,validazione) => {

        let val = (validazione)? validazione : false;

        // Oggetto "data" del form
        let dataObj = {
                "id": form.field_id,
                "validazione": val,
                "anagrafica": jsonFromFields(form)["anagraficaBlob"],
                "ordineIntestatari": form.field_ordineintestatari
            }


        console.log("------------------- OGGETTO DATA INVIATO --------------------");
        console.log(dataObj);
       
        return dataObj;

    }

}
