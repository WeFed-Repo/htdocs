import React, {Component} from 'react';
import "./style.scss" ;

export default class extends Component {
    render() {
        return(
            <div>
                <h1>Documentazione</h1>
                <ul className="link-list">
                    <li><a href="http://portale.intranet.servizi/portale/gestappl.nsf/jumppagePDI?openForm&APPL=455" target="_blank" rel="noopener noreferrer">Modulistica per Offerta Fuori Sede Banca ALETTI</a></li>
                    <li><a href="http://portale.intranet.servizi/portale/gestappl.nsf/jumppagePDI?openForm&APPL=456" target="_blank" rel="noopener noreferrer">Normativa Promotori Aletti</a></li>
                    <li><a href="http://portale.intranet.servizi/portale/gestappl.nsf/jumppageLCL?OpenForm&APPL=ROPMI" target="_blank" rel="noopener noreferrer">ROP-Registro Operazioni Personali</a></li>
                    <li><a href="http://portale.intranet.servizi/portale/gestappl.nsf/jumppageLCL?openform&appl=FOGLI_AL" target="_blank" rel="noopener noreferrer">Trasparenza - Fogli Informativi e Informazioni Generali sul Credito Immobiliare Offerto a Consumatori in vigore</a></li>
                    <li><a href="http://portale.intranet.servizi/portale/splinter.nsf/lanciolin?OpenForm&appl=Altra%20documentazione%20e%20siti%20delle%20Società%20Prodotto" target="_blank" rel="noopener noreferrer">Altra documentazione e Siti delle Società Prodotto</a></li>
                    <li><a href="http://portale.intranet.servizi/portale/gestappl.nsf/jumppagePDI?openForm&APPL=302" target="_blank" rel="noopener noreferrer">Gestioni Patrimoniali Anima SGR</a></li>
                 </ul>
            </div>
           
        )
    }
}