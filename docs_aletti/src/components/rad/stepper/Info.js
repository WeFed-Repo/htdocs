import React, { Component } from 'react';
import FileLink from "components/rad/common/FileLink";

class Info extends Component {
    render() {
        let className = "stepper-info";
        className += this.props.show ? ' open' : '';

        return (
            <div className={ className }>
                <section>
                    <h3>Promo</h3>
                    <p>Eventuale codice promo</p>
                </section>

                <section>
                    <h3>Tieni con te</h3>
                    <ul>
                        <li>Carta di identità</li>
                        <li>Codice Fiscale</li>
                        <li>Il tuo telefono cellulare</li>
                    </ul>
                </section>

                <section>
                    <h3>Documentazione informativa privacy</h3>
                    <FileLink label="Informativa privacy" link="http://www.alettibank.it/privacy/"/>
                </section>

                <section>
                    <h3>Documentazione informativa precontrattuale del conto corrente</h3>
                    <FileLink label="Foglio Informativo conto corrente ordinario consumatori OFS" link="http://trasparenza.bancopopolare.it/DWN/documenti/50385.pdf"/>
                    <FileLink label="Foglio Informativo conto corrente ordinario consumatori OFS – servizi accessory" link="http://trasparenza.bancopopolare.it/DWN/documenti/50386.pdf"/>
                    <FileLink label="Proposta contrattuale conto corrente" link="/docs/rad/A230010_000319_OFS_CC.pdf"/>
                    <FileLink label="Guida pratica al conto corrente" link="http://www.bancobpmspa.com/media/guida_conto_corrente.pdf"/>
                    <FileLink label="ABF in parole semplici" link="http://www.bancobpmspa.com/media/abf.pdf"/>
                    <FileLink label="Guida all'utilizzo del portale ABF" link="http://www.bancobpmspa.com/media/Guida-ricorso-abf.pdf"/>
                </section>

                <section>
                    <h3>Documentazione informativa precontrattuale sui servizi di investimento</h3>
                    <FileLink label="Informativa preliminare alla clientela Mifid" link="/docs/rad/J700000_000319_OFS_IPC.pdf"/>
                    <FileLink label="Proposta contrattuale servizi di investimento (fac simile)" link="/docs/rad/J700000_000319_OFS_SI.pdf"/>
                    <FileLink label="Aletti - Modulo standard per le informazioni da fornire ai depositanti" link="http://trasparenza.bancopopolare.it/DWN/documenti/49979.pdf"/>
                    <FileLink label="Arbitro per le Controversie Finanziarie (ACF)" link="https://www.acf.consob.it/"/>
                </section>

                <section className="mb-0">
                    <h3>Documentazione informativa precontrattuale del Deposito Titoli a custodia ed amministrazione</h3>
                    <FileLink label="Foglio informativo: Servizio di Deposito a Custodia e Amministrazione di Titoli e Strumenti Finanziar" link="http://trasparenza.bancopopolare.it/DWN/documenti/49752.pdf"/>
                    <FileLink label="Proposta contrattuale deposito titoli a custodia e amministrazione (fac simile)" link="/docs/rad/J700000_000319_OFS_DT.pdf"/>
                </section>
            </div>
        );
    }
}

export default Info;