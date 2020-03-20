import React, { PureComponent } from 'react';
import moment from 'moment';

export default class extends PureComponent {
    render() {

        /* PARAMETRI */
        let day= this.props.day,
            appointments = this.props.appointments,
            dayApp = appointments[moment(day).format("YYYY/MM/DD")];


        // Filtra gli appuntamenti del giorno
        return (
            dayApp.map(function (obj) {
                    return (
                        <div className="appuntamento" key={obj.itemId }>
                            <div className={"dot " + obj.tipoAppuntamento }/>
                            <div className="titolo">{ obj.subject }</div>
                            <div><i>Dalle { moment(new Date(obj.startDate)).format("HH:mm") } alle { moment(new Date(obj.endDate)).format("HH:mm") }</i></div>
                            <div className="descrizione">{ obj.body }</div>
                        </div>
                    )

            })

        )
    }
}
