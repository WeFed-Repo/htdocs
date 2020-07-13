import React,{Component} from "react";

export default class extends Component {

    /*
        STEP PER FIRMA: INIT -> ACCETTAZ_INFOCERT -> FIRMADOC
    */

    state = {
        step:"INIT"
    }

    render() {

        return(
            <>
                <h4>STEP {this.props.step}</h4>
                {this.state.step==="INIT" &&
                <>
                    Elenco documenti
                    Pulsante "Richiedi certificato"
                </>
                }
                 {this.state.step==="ACCETTAZ_INFOCERT" &&
                 // Inizializzazione
                <>
                    Elenco consensi
                    Pulsante "Prosegui"
                </>
                }
                {this.state.step==="FIRMADOC" &&
                 // Inizializzazione
                <>
                    firma
                    Firma il contratto (attiva il "prosegui totale")
                </>
                }
            </>
        )

    }

}