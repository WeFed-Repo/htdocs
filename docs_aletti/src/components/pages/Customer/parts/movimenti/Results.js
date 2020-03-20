import React, { PureComponent } from 'react';
import { Col, Row } from 'reactstrap';
import DefaultTable from 'components/parts/DefaultTable';
import { formatNumber } from 'functions/tableFunctions';

class Results extends PureComponent {
    constructor(props) {
        super(props);

        this.defaultSorted = [{
            dataField: 'dataContabile',
            order: 'desc'
        }];
        this.resultColumns = {
            "dataContabile": {
                text: "Data Contabile",
                dataField: "dataContabile",
                sortName: 'dataContabile',
                sort: true,
                classes: "right date",
                headerClasses: "right"
            },
            "dataValuta": {
                text: "Data valuta",
                dataField: "dataValuta",
                sortName: 'dataValuta',
                sort: true,
                classes: "right date",
                headerClasses: "right"
            },
            "importo": {
                text: "Importo",
                dataField: "importo",
                sortName: 'importo',
                sort: true,
                formatter: this.tableImporto,
                classes: "right",
                headerClasses: "right"
            },
            "divisa": {
                text: "Divisa",
                dataField: "divisa",
                sortName: 'divisa',
                sort: true
            },
            "descrizione": {
                text: "Causale/Descrizione",
                dataField: "descrizione",
                sortName: 'descrizione',
                sort: true
            }
        };
        this.columns = Object.keys(this.resultColumns).map(obj => {
            return this.resultColumns[obj];
        });
        // noinspection JSUnusedGlobalSymbols
        this.selectRow = {
            mode: 'checkbox',
            clickToSelect: true,
            hideSelectAll: false,
            selectColumnPosition: 'left',
            classes: 'selected',
            onSelect: (row, isSelect) => props.onSelect(row, isSelect),
            selectionHeaderRenderer: ({ mode, checked }) => (
                <div className="custom-checkbox custom-control">
                    <input type={ mode } checked={ checked } readOnly={ true } className="custom-control-input"/>
                    <label className="custom-control-label"/>
                </div>
            ),
            selectionRenderer: ({ mode, ...rest }) => (
                <div className="custom-checkbox custom-control">
                    <input type={ mode } { ...rest } readOnly={ true } className="custom-control-input"/>
                    <label className="custom-control-label"/>
                </div>
            )
        };
    }

    tableImporto = val => {
        return val < 0
            ? <span className="negativo">{ formatNumber(val, 2) }</span>
            : <span className="positivo">{ formatNumber(val, 2) }</span>;
    };

    render() {
         /* 
        const { selected } = this.props;
        RIMOSSO COME DA RICHIESTA E. BOLDRINI 06/12
        const selectRow = {
            ...this.selectRow,
            selected
        };*/
        const selectRow = false;

        return (
            <Row>
                <Col xs="12">
                    <DefaultTable columns={ this.columns } defaultSorted={ this.defaultSorted }
                                  selectRow={ selectRow } { ...this.props }
                                  data={ this.props.tableData } keyField="idMovimento"/>
                </Col>
            </Row>
        )
    }
}

export default Results;
