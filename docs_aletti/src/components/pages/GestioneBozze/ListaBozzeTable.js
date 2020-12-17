import React, { Component } from 'react';
import { Col, Row } from 'reactstrap';
import DefaultTable from 'components/parts/DefaultTable';
import momentIt from "functions/rad/momentIt";
import { NavLink } from 'react-router-dom';

function apriPratica(cell, row) {
    // A seconda dello status mostra un azione differente
    let el = <span className={"bozza " + row.status}>{cell}</span>;
    if (row.status ==="avanzamento" || row.status==="comportamento") {
        el = <NavLink to={"/" + ((row.status==="comportamento")? "comportamento":"onboarding") +"/" + cell} className={"edit " + row.status }>{cell}</NavLink>;
    }
    
    return el;
    // return ()

}
const tableReturnData = date => {
    return momentIt(date).format("DD-MM-YYYY");
};
const tableReturnStato = (stato,row) => {
    return <span className={"stato " + row.status}>{stato}</span>;
};


const ListaBozzeColumns = [
    {
        text: 'Codice pratica',
        dataField: 'id',
        sortName: 'id',
        formatter: apriPratica,
        sort: true
    },
    {
        text: 'Data inserimento',
        dataField: 'dataInserimento',
        sortName: 'dataInserimento',
        sort: true,
        headerClasses: "center",
        classes: "center",
        formatter: tableReturnData

    },
    {
        text: 'Intestatari',
        dataField: 'intestazione',
        sortName: 'intestazione',
        sort: true
    },
    {
        text: 'stato',
        dataField: 'stato',
        sortName: 'stato',
        sort: true,
        formatter: tableReturnStato
    }
    /*
     ,
    {
        text: 'status',
        dataField: 'status',
        sortName: 'status',
        sort: true
    }
    */
]

class ListaBozzeTable extends Component {
    constructor(props) {
        super(props);
        this.selectRowBozze = {
            mode: 'checkbox',
            clickToSelect: true,
            hideSelectAll: true,
            selectColumnPosition: 'right',
            classes: 'selected',
            onSelect: (row, isSelect) => {
                this.props.selectedRow(row.id, isSelect);
            },
            selectionRenderer: ({ mode, ...rest }) => (
                <div className="custom-checkbox custom-control">
                    <input type={mode} {...rest} readOnly={true} className="custom-control-input" />
                    <label className="custom-control-label" />
                </div>
            )
        }
    }

    

    render() {

 

        return (
            <Row>
                <Col xs="12">
                    <DefaultTable
                        columns={ListaBozzeColumns}
                        data={this.props.data}
                        selectRow={this.selectRowBozze}
                    />
                </Col>
            </Row>
        )
    }

}

export default ListaBozzeTable;
