/* Funzione per chiamate standart tipo "dashboard" */
import { ambiente } from 'functions/genericVars';

export default function getData(params){

    /*
    Parametri per l'oggetto "params":
    url: puo' essere una semplice stringa oppure un oggetto contenente {
            "svil": "url di sviluppo locale con dati mock"
            "prod": "url per la BUILD (valido anche negli ambienti dinamici)"
        }
    method: indicare il metodo in maiuscolo es: "DELETE"
    data: oggetto dati da passare in POST es:
            {
                datoinpost1: "123",
                datoinpost2: "345"
            }
    success: callback
    */

    // Estende il default con quanto necessario
    let fetchUrl = (typeof params.url === "object")? params.url[(ambiente.isLocale || ambiente.isLibrerie)? "svil" : "prod"] : params.url;

    // Se si e' in GET accoda i parametri eventuali all'url
    if (params.data && (ambiente.isLocale || ambiente.isLibrerie)) {
        fetchUrl += ((fetchUrl.indexOf("?")>0)? "&" : "?") + Object.keys(params.data).map(k=>"&"+ encodeURI(k) +"="+encodeURI(params.data[k])).join();
    }
    
    // chiamata ai dati
    fetch(fetchUrl,{
        method : (ambiente.isSviluppo || ambiente.isProduzione) ? ((params.method) ? params.method : "POST") : "GET",
        headers: new Headers({
            "Accept": "application/json",
            "Content-Type": "application/json"
        }) ,
        body :  (ambiente.isSviluppo || ambiente.isProduzione) ? JSON.stringify(params.data) : null
        }).catch(function(error){
            console.log(error)
        }).then(response => {
            if (response.ok) {
                try {
                    return response.json()
                } catch {
                    console.log("Errore nel ricevimento dati");
                    params.error();
                }
            }
            else
            {
                console.log("* Errore " + response.status + " -> " + fetchUrl);
                params.error();
            }
        }).then(function(json) {
            if(json) { 
                params.success(json);
            }
            
        })
}