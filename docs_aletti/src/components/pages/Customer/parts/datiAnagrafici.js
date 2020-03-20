import React, { PureComponent } from 'react';
import { Row, Col } from 'reactstrap';
import { deNull } from 'functions/tableFunctions';
import { Link } from 'react-router-dom';
import DefaultOutput from "components/parts/DefaultOutput";

export default class extends PureComponent {

    render() {

        let customerData = this.props.data;

        return (

            <div className="bordered-block">
                <h2>Dati Anagrafici</h2>
                <Row>
                    <Col lg="4">
                        <DefaultOutput label="Indirizzo di residenza"
                                       output={ deNull(customerData.indirizzoResidenza) }/>
                    </Col>
                    <Col lg="4">
                        <DefaultOutput label="Telefono ufficio" output={ deNull(customerData.telefonoUfficio) }/>
                        { /*
                            <div className="output-with-icon">
                                <p className="form-control-plaintext">{deNull(customerData.indirizzopreferito)}</p>
                                <span className="ico-btn"><i className="icon icon-big-edit"></i></span>
                            </div>
                            */ }
                    </Col>
                    <Col lg="4">
                        <DefaultOutput label="E-mail" output={ <a
                            href={ "mailto:" + customerData.email }>{ deNull(customerData.email) }</a> }/>
                    </Col>
                </Row>

                <Row>
                    <Col lg="4">
                        <DefaultOutput className="mb-0" label="Telefono" output={ deNull(customerData.telefonoCasa) }/>
                    </Col>
                    <Col lg="4">
                        <DefaultOutput className="mb-0" label="Cellulare" output={ deNull(customerData.cellulare) }/>
                    </Col>
                    <Col lg="4">
                        <DefaultOutput className="mb-0" label="PEC" output={ <a
                            href={ "mailto:" + customerData.emailPec }>{ deNull(customerData.emailPec) }</a> }/>
                    </Col>
                </Row>

                {customerData.cointestatari && customerData.cointestatari.length>0 && 
                <>
                <hr></hr>
                <h2>Cointestatari</h2>
                <Row>
                    <Col xs="12">
                    {customerData.cointestatari.map(function(v,i){
                        return(
                            <a href={"/customer/" + v.ndgAletti} className="nav-btn-link" key={i}>{v.nominativo}</a>
                            )
                    })}
                    </Col>
                </Row>
                </>}
            </div>

        )
    }
}
