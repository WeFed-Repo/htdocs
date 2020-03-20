import React, {Component} from 'react';
import "./style.scss" ;

export default class extends Component {
    render() {
        let matricola =  this.props.userData[2].descrizione,
            linkcartaceo = "/docs/letterepromotori/presentazione_" + matricola + ".pdf",
            linkdinamico = "/docs/letterepromotori/presentazione_digitale_" + matricola + ".pdf";
        return(
            <div>
                <h1>Documenti personali</h1>
                <ul className="documenti-list">
                    <li><a href={ linkcartaceo } target="_blank" rel="noopener noreferrer"><i className="icon icon-file_pdf"></i><span>Lettera di presentazione </span></a></li>
                    <li><a href= { linkdinamico } target="_blank" rel="noopener noreferrer"><i className="icon icon-file_pdf"></i><span>Lettera di presentazione digitale</span></a></li>
                </ul>
            </div>
           
        )
    }
}