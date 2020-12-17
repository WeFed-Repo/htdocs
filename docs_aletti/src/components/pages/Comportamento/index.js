import React, { Component } from 'react';
import getData from "functions/getData";

export default class extends Component {

    state = {
        loading: true,
        bozzaData: null,
        comportamenti: null
    }

    componentDidMount() {

        
        let idpratica = this.props.match.params &&  this.props.match.params.id; 
        if (!idpratica){
            window.location.href="/gestionebozze"
        }
        else
        {
            // Acquisisce i dati della pratica in base all'id
            getData({
                url: { "svil": "/json_data/onboarding/getBozzaById_svil.json", "prod": "/promotori/onboarding/rest/bozze/" + idpratica + "/getBozza" },
                success: (data)=>{
                    if (data && data.results) this.setState({
                        bozzaData:data
                    });
                    // Carica i dati dai domini per avere i comportamenti
                    getData({
                        url: { "svil": "/json_data/onboarding/listaDomini.json", "prod": "/promotori/onboarding/rest/domini/lista" },
                        success: (ddata)=> {
                            if (ddata && ddata.results && ddata.results["RILEV_COMPORTAMENTO"]) {
                                this.setState({
                                    loading: false,
                                    comportamenti: ddata.results["RILEV_COMPORTAMENTO"].map((el)=>{return ({"value":el.codice,"text":el.descrizione})})
                                })
                            }
                            else
                            {
                                alert("Nei dati dei domini non è presente il nodo \"RILEV_COMPORTAMENTO\"");
                            }
                        },
                        error: ()=>{
                            alert("Si sono verificati errori durante il recupero dei dati dei domini");
                        }
                    })
                },
                error: ()=> {
                    alert("I dati relativi alla pratica non possono essere recuperati.")
                }
            })
        }



    }

    /*

    Salvataggio 

    {
 "id":55,
 "firme":{
"intestatariFirme":
{
"0":
{ → indica la sezione relativa al primo intestatario
"notaComportamento":"nota da box input",
 "comportamentoRisp": → record delle descrizione ( da Domini )
{
 "id": 1,
 “label”:”NORMALE”
}
},
 “1” :
{ → indica le risposte per il secondo intestatario se esiste
 "notaComportamento":"nota da box input",
 "comportamentoRisp": → record delle descrizione ( da Domini )
{
 "id": 5,
 “label”:”RILUTTANTE”
}
}
}
},
"stato":"RILEVAMENTO_COMPORTAMENTO"
}

    */

    render() {

        return (
            <>
                <h2>Rilevazione comportamento</h2>
                <div className={(this.state.loading?"loading":"")}>

                </div>    
            </>
        )

    }

}