import React, { Component } from 'react';
import { ListGroupItemHeading } from 'reactstrap';

export default class extends Component {

    state = {
        loading: true
    }

    componentDidMount() {

        // Acquisisce i dati della pratica in base all'id


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

        return (<h2>Rilevazione comportamento</h2>)

    }

}