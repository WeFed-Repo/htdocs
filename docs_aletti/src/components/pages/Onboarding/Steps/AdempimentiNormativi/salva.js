import {saveUrl} from "components/pages/Onboarding/common/parametri.js";
import {jsonFromFields} from "components/pages/Onboarding/common/gestioneDati.js";
import {getNextInt} from "components/pages/Onboarding/common/gestioneStati.js";
 
export default  {

    url: saveUrl.SessioneFirme,
    
    data: (form,validazione) => {

        console.log(form)

        let val = (validazione)? validazione : false;

        // Rimappa un nuovo oggetto con le varie risposte dell'Adever
        let returnkv = (obj)=>{
            let kwo = {};
            kwo[""]="";
            obj.forEach((val)=>{
                kwo[val.value] = val.text;
            })
            return kwo;
        }

        let adever = {};
        Object.keys(form.domini).filter((v)=>{return (v.indexOf("adever_")>=0)}).forEach((v)=>{
            adever[v.toString()] = returnkv(form.domini[v]);
        });

        let adeverIds = [
            "field_sessionfirmeblob_intestatarifirme_0_listrispadever_naturascopo_0_id",
            "field_sessionfirmeblob_intestatarifirme_0_listrispadever_naturascopodeposito_0_id",
            "field_sessionfirmeblob_intestatarifirme_0_listrispadever_professione_0_id",
            "field_sessionfirmeblob_intestatarifirme_0_listrispadever_taesettore_0_id",
            "field_sessionfirmeblob_intestatarifirme_0_listrispadever_fasciareddito_0_id",
            "field_sessionfirmeblob_intestatarifirme_0_listrispadever_fasciapatrimonio_0_id",
            "field_sessionfirmeblob_intestatarifirme_0_listrispadever_originereddito_0_id",
            "field_sessionfirmeblob_intestatarifirme_0_listrispadever_originefondi_0_id",
            "field_sessionfirmeblob_intestatarifirme_0_listrispadever_nazionalita_0_id",
            "field_sessionfirmeblob_intestatarifirme_0_listrispadever_provincia_0_id",
            "field_sessionfirmeblob_intestatarifirme_1_listrispadever_naturascopo_0_id",
            "field_sessionfirmeblob_intestatarifirme_1_listrispadever_naturascopodeposito_0_id",
            "field_sessionfirmeblob_intestatarifirme_1_listrispadever_professione_0_id",
            "field_sessionfirmeblob_intestatarifirme_1_listrispadever_taesettore_0_id",
            "field_sessionfirmeblob_intestatarifirme_1_listrispadever_fasciareddito_0_id",
            "field_sessionfirmeblob_intestatarifirme_1_listrispadever_fasciapatrimonio_0_id",
            "field_sessionfirmeblob_intestatarifirme_1_listrispadever_originereddito_0_id",
            "field_sessionfirmeblob_intestatarifirme_1_listrispadever_originefondi_0_id",
            "field_sessionfirmeblob_intestatarifirme_1_listrispadever_nazionalita_0_id",
            "field_sessionfirmeblob_intestatarifirme_1_listrispadever_provincia_0_id"
        ]

        // Assegna i nomi partendo dagli ID
        adeverIds.forEach((v)=>{
            // Determina il dominio da cui attingere
            let dominio = "adever_" + v.replace("field_sessionfirmeblob_","").replace("intestatarifirme_0_","").replace("intestatarifirme_1_","").replace("listrispadever_","").replace("_0_id","");
            form[v.replace("_0_id","_0_nome")] = adever[dominio][form[v]];
            
        })

        // Compone l'oggetto firme
        let sFirme =  jsonFromFields(form)["sessionFirmeBlob"];
        let listInt = ["0","1"];
        if (form["field_numintestatari"] !== "2") {
            listInt = ["0"];
            delete sFirme["intestatariFirme"]["1"];
        }
        
        // Converte i dati del questionario da array ad oggetti
        
        listInt.forEach((int)=>{
            Object.keys(sFirme["intestatariFirme"][int]["listRispAdever"]).forEach((key)=>{
                if (sFirme["intestatariFirme"][int]["listRispAdever"][key][0]["id"] !=="") {
                    sFirme["intestatariFirme"][int]["listRispAdever"][key] = Array(sFirme["intestatariFirme"][int]["listRispAdever"][key][0])
                }
                else
                {
                    delete sFirme["intestatariFirme"][int]["listRispAdever"][key];
                }
            })
        });
        

        // Assembla l'oggetto per la spedizione
        let firme =  {
            "capitalizzazionePeriodica": {"consenso":form["field_sessionfirmeblob_capitalizzazioneperiodica_consenso"]==="true","codDisclaimer":"ALETTI_CAP_PERIODICA"},
            "intestatariFirme":sFirme["intestatariFirme"]
        };
       

        // Oggetto "data" del form
        let dataObj = {
                "id": form.field_id,
                "firme":firme,
                "intestatarioCorrente": getNextInt(form),
                "stato": "ADEMPIMENTI_NORMATIVI"
            }

        console.log("------------------- OGGETTO DATA INVIATO --------------------");
        console.log(dataObj);
        console.log(JSON.stringify(dataObj));
       
        return dataObj;

    }

}
