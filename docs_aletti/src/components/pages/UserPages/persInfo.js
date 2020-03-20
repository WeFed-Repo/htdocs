import React, { Component } from 'react';
import { Col, Row, Button } from 'reactstrap';
import DefaultModal from "components/parts/DefaultModal";
import logo from 'images/aletti_logo.png';
import "./style.scss" ;

export default class extends Component {
    state = {
        bigliettoModal: false
    };

    openBigliettoModal = () => this.setState({ bigliettoModal: true });

    closeBigliettoModal = () => this.setState({ bigliettoModal: false });

    printBiglietto = () => window.print();

    render() {
        const { userData } = this.props;
        const dataToShow = [userData[0], userData[1], userData[4], userData[10], userData[11], userData[9], userData[3], userData[5], ' ', userData[13], userData[14]];
        const userDataObj = userData.reduce((obj, item) => {
            if (!!item && typeof item === 'object') {
                const key = item.codice.replace(/ /g, '_').toLowerCase();

                obj[key] = item.descrizione;
            }

            return obj;
        }, {});
        return (
            <div>
                <h1>Dati personali</h1>

                <div className={ "personal-data-box " + ((!this.props.isLoadedUserData) ? "loading" : "") }>
                    <Row>
                        {
                            dataToShow.filter(item => !!item && typeof item === 'object').map((v) => (
                                <Col lg="4" key={ v.codice.replace(/ /g, '').toLowerCase() } className="col-info">
                                    <span className="info-name"> { v.codice } </span>
                                    <span className="info-date">{ v.descrizione || " " }</span>
                                </Col>
                            ))
                        }
                    </Row>
                    <hr/>
                    <Button className="right" color="primary" onClick={ this.openBigliettoModal }>Stampa
                        biglietto</Button>
                </div>

                <DefaultModal show={ this.state.bigliettoModal }github jleetutorial
                              close={ this.closeBigliettoModal }
                              modalProps={ {
                                  "size": "sm",
                                  "id": "bigliettoModal"
                              } }
                              params={
                                  {modalTitle: "Biglietto da visita"}
                              }>
                    <section>
                        <img id="logo" src={ logo } className="img-fluid mb-5" alt="Banca Aletti"/>

                        <p className="mb-5">
                            <strong>{ userDataObj.nome } { userDataObj.cognome }</strong><br/>
                            Consulente Finanziario Agente
                        </p>

                        <p>
                            C. { userDataObj.cellulare }<br/>
                            { userDataObj.email_aziendale } 
                        </p>
                    </section>

                    <div className="btn-console">
                        <Button color="primary" className="center" onClick={ this.printBiglietto }
                                title="Stampa">Stampa</Button>
                    </div>
                </DefaultModal>
            </div>
        )
    }
}
