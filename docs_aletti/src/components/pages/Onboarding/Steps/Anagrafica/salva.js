import {saveUrl} from "components/pages/Onboarding/common/parametri.js";
import {jsonFromFields} from "components/pages/Onboarding/common/gestioneDati.js";

export default  {

    url: saveUrl.Anagrafica,
    
    data: (form,validazione) => {

        let val = (validazione)? validazione : false;

        // Modifica l'oggetto per il salvataggio (alcuni nodi vanno convertiti da oggetto ad array 
        // e vanno rimossi i nodi intestatario che non servono)
        let anagrafica = jsonFromFields(form)["anagraficaBlob"];
        // listPrivacy
        // listResidenzeFiscale
        if (form.field_numintestatari==="" || form.field_numintestatari==="1") {
            // Tenere i dati di un solo intestatario
            delete anagrafica.intestatari[1];
        } 

        // Per ogni intestatario trasforma listPrivacy e listResidenzeFiscale in Array
        Object.keys(anagrafica.intestatari).forEach((v,i)=>{
            ["listPrivacy","listResidenzeFiscale"].forEach((field)=>{
                anagrafica.intestatari[v][field] = Object.keys(anagrafica.intestatari[v][field]).map((val)=>{
                        return(anagrafica.intestatari[v][field][val])
                   
                })
            });

            // Rimuove le residenze fiscali vuote
            anagrafica.intestatari[v]["listResidenzeFiscale"] =  anagrafica.intestatari[v]["listResidenzeFiscale"].filter(v=>{
                return v.codiceUic!=""
            })
        });

    

        // Oggetto "data" del form
        let dataObj = {
                "id": form.field_id,
                "validazione": val,
                "anagrafica": anagrafica,
                "ordineIntestatari": form.field_ordineintestatari
            }

        console.log("------------------- OGGETTO DATA INVIATO --------------------");
        console.log(dataObj);
        console.log(JSON.stringify(dataObj));
        return dataObj;
        
    }

}
