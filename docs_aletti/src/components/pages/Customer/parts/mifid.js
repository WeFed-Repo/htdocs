import React, {PureComponent} from 'react';
import {Row,Col} from 'reactstrap';
import DefaultOutput from "components/parts/DefaultOutput";
import {deNull} from 'functions/tableFunctions';

export default class extends PureComponent {

    render() {

        let customerData = this.props.data;

        return(
            <div className="bordered-block">
                <h2 className="bordered-block-title">Profilo MIFID</h2>
                <Row>
                    <Col lg="4">
                        <DefaultOutput label="Classificazione cliente" output={customerData.profiloMifid && deNull(customerData.profiloMifid.classificazioneClienteDescr)}/>
                    </Col>
                    <Col lg="4">
                        <DefaultOutput label="Livello esperienza/conoscenza" output={ customerData.profiloMifid && deNull(customerData.profiloMifid.livelloDiEsperienzaDescr)}/>
                    </Col>
                    <Col lg="4">
                        <DefaultOutput label="Data scadenza" output={customerData.profiloMifid && deNull(customerData.profiloMifid.dataScadenza)}/>
                    </Col>
                </Row>
            </div>
        )
    }
}
