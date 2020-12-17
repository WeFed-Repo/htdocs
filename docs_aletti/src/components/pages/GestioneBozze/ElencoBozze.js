import React, { Component } from 'react';
import { NavLink } from 'react-router-dom';
import { Row, Col, Button } from 'reactstrap';
import getData from "functions/getData";
import ListaBozzeTable from './ListaBozzeTable';
import DefaultCollapse from "components/parts/DefaultCollapse";
import momentIt from "functions/rad/momentIt";
import getDateDifference from 'functions/getDateDifference';
import DefaultModal from "components/parts/DefaultModal";
import Form from 'components/parts/Forms';
const urlDeleteBozze = { "svil": "/json_data/onboarding/deleteBozza.json", "prod": "/promotori/onboarding/rest/bozze/deleteBozza" }

export default class extends Component {
    constructor(props) {
        super(props);
        this.state = {
            localData: this.props.tableData,
            // Campi del form di ricerca
            form_intestatario: "",
            form_data_da: "",
            form_data_a: "",
            form_stato: "",
            is_form_data_a_active: false,
            //geation modale
            showModal: false,
            showModalType: '',
            // Checkbox per eliminare le bozze
            selectedRow: [],
            errors: []
        }
        
        this.filtraBozze = this.filtraBozze.bind(this);
        this.openModalBozza = this.openModalBozza.bind(this);
        this.closeModalDeleteBozza = this.closeModalDeleteBozza.bind(this);
        this.setSelectedRow = this.setSelectedRow.bind(this);
        this.getDeleteBozze = this.getDeleteBozze.bind(this);
        this.getDuplicaBozze = this.getDuplicaBozze.bind(this);


    }

    filtraBozze() {
        let filteredData = [],
            tthis = this;
        this.props.tableData.forEach(function (value, index) {

            let rigaOk = true;
            // Test per il campo
            if (rigaOk && tthis.state.form_intestatario !== "") {
                rigaOk = (value.intestazione.toLowerCase().indexOf(tthis.state.form_intestatario.toLowerCase()) >= 0)
            }
            //Test per lo stato
            let statoOk = true;
            if (statoOk && tthis.state.form_stato !== "" && tthis.state.form_stato !== "Seleziona") {
                statoOk = value.stato.replace('_', ' ') === tthis.state.form_stato.replace('_', ' ') ? true : false;
            }

            //Test per la data da cui far partire la ricerca
            let dataOk = true,
                dateFromSearch = (tthis.state.form_data_da).split('-').join('/'),
                dateInsertBozze = momentIt.utc(value.dataInserimento).format('DD/MM/YYYY'),
                dateToSearch = (tthis.state.form_data_a).split('-').join('/');
          
          
            if (dataOk && ((tthis.state.form_data_da !== "") || (tthis.state.form_data_a !== ""))) {
                dataOk = (getDateDifference(dateFromSearch, dateInsertBozze) >= 0) && (getDateDifference(dateToSearch, dateInsertBozze) <= 0) ? true : false;
            }

            if (statoOk && rigaOk && dataOk) {
                filteredData.push(value)
            }
            
        });
        this.setState({
            localData: filteredData
        })
    }
    
    //FUNZIONE CHE APRE OVERLAYER PER CHIEDERE SE SI VOGLIONO ELIMINARE LE BOZZE
    openModalBozza(modalType) {
        this.setState({ showModal: true, showModalType: modalType });
    }
    closeModalDeleteBozza() {
        this.setState({ showModal: false, showModalType: '' });
    }
    //FUNZIONE CHE SELEZIONA LE BOZZE DA ELIMINARE PER ID
    setSelectedRow(id, isSelect) {
        const listId = [...this.state.selectedRow];
        const Isid = (value) => {
            return value !== id
        }
        this.setState({
            selectedRow: isSelect ? listId.concat(id) : listId.filter(Isid)
        })
    }
    getDeleteBozze() {
        // CHIAMATA IN DELETE PER IL DELETE DELLE BOZZE
        this.closeModalDeleteBozza();
        this.setState({ isLoading: true });
        getData({
            url: urlDeleteBozze,
            method: "DELETE",

            data: {
                "listIds": this.state.selectedRow
            },
            success: (data) => {
                if (data && data.esito.type === 'OK') {
                    window.location.reload();
                }
            }

        })
    }
    getDuplicaBozze() {
        // CHIAMATA IN GET PER DUPLICARE LE BOZZE
        this.closeModalDeleteBozza();
        this.setState({ isLoading: true });
        getData({
            url: { "svil": "/json_data/onboarding/" + this.state.selectedRow + "/duplicaBozza.json", "prod": "/promotori/onboarding/rest/bozze/" + this.state.selectedRow + "/duplicaBozza" },
            method: "GET",
            success: (data) => {
                if (data && data.esito.type === 'OK') {
                    window.location.reload();
                }
            }

        })

    }
   
    render() {
        
        
        
       
        return (<>
            <DefaultCollapse label="RICERCA AVANZATA" startsOpen={this.state.collapseOpened}
                className="search-collapse">
                <form>
                    <Row>
                        <Col lg="3">
                            <Form.input
                                label="Nominativo"
                                placeholder="Nome cliente"
                                value={this.state.form_intestatario}
                                name="form_intestatario"
                                onChange={(e) => Form.change(this, e)}
                            >
                            </Form.input>
                        </Col>
                        <Col lg="3">
                            <Form.select 
                            label="Stato" 
                            value={this.state.form_stato} 
                            name="form_stato" 
                            options={this.props.statiPratica} 
                            onChange={(e) => Form.change(this, e)}
                            >
                        </Form.select>
                        </Col>
                        <Col lg="3">
                            <Form.date 
                            label="Data da:" 
                            value={this.state.form_data_da} 
                            name="form_data_da" 
                            onChange={(e) => Form.change(this, e)}
                            dateTo = {this.state.form_data_a} 
                            ></Form.date>
                        </Col>
                        <Col lg="3">
                            <Form.date 
                            label="Data a:" 
                            value={this.state.form_data_a} 
                            name="form_data_a" 
                            onChange={(e) => Form.change(this, e)}
                            dateFrom={this.state.form_data_da} 
                            >
                            </Form.date>
                        </Col>
                    </Row>
                    <Row>
                        <Col lg="12"><Button className="btn-primary right" onClick={this.filtraBozze}>Cerca</Button></Col>
                    </Row>
                </form>
            </DefaultCollapse>
            <div>
                <ListaBozzeTable data={this.state.localData} getListaBozze={this.props.getListaBozze} selectedRow={this.setSelectedRow} ></ListaBozzeTable>
            </div>
            <div className="d-flex justify-content-end console">
                <Button className="btn-primary" onClick={this.openModalBozza.bind(this, 0)}>Elimina</Button>
                <Button className="btn-primary" onClick={this.openModalBozza.bind(this, 1)}>Duplica</Button>
                <NavLink to="/onboarding"><Button className="btn-primary">Inserisci nuovo</Button></NavLink>
            </div>

            <DefaultModal show={this.state.showModal}
                close={this.closeModalDeleteBozza}
                params={{ "modalTitle": 'Attenzione' }}>
                {this.state.showModalType === 0 && (<p>
                    {this.state.selectedRow.length === 0 ? "Seleziona almeno una pratica" : "Confermi l'eliminazione delle pratiche?"}
                </p>)}
                {this.state.showModalType === 1 && (<p>
                    {this.state.selectedRow.length === 0 ? "Seleziona una pratica" : "Confermi di voler duplicare la pratica?"}
                </p>)}
                <div className="btn-console">
                    {this.state.showModalType === 0 && (<Button color="primary" className="center" onClick={this.state.selectedRow.length !== 0 ? this.getDeleteBozze : this.closeModalDeleteBozza}
                        title="OK">OK</Button>)}
                    {this.state.showModalType === 1 && (<Button color="primary" className="center" onClick={this.state.selectedRow.length !== 0 ? this.getDuplicaBozze : this.closeModalDeleteBozza}
                        title="OK">OK</Button>)}
                </div>
            </DefaultModal>
           
           
           
        </>)

    }

}