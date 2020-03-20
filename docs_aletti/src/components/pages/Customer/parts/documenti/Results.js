import React, { PureComponent } from 'react';
import { Col, Row } from 'reactstrap';
import DefaultTable from 'components/parts/DefaultTable';
import { formatNumber } from 'functions/tableFunctions';

class Results extends PureComponent {
    constructor(props) {
        super(props);

        this.defaultSorted = [{
            dataField: 'dataRiferimento',
            order: 'desc'
        }];
        this.resultColumns = {
            "pdf": {
                text: '',
                dataField: 'linkPdf',
                headerClasses: "center",
                classes: "withIco",
                formatter: this.tablePdf,
                events: {
                    onClick: event => {
                        event.stopPropagation();
                    }
                }
            },
            "dataRiferimento": {
                text: "Data riferimento",
                dataField: "dataRiferimento",
                sortName: 'dataRiferimento',
                sort: true,
                classes: "right date",
                headerClasses: "right"
            },
            "tipologia": {
                text: "Tipo documento",
                dataField: "descrModulo",
                sortName: 'descrModulo',
                sort: true
            },
            "importo": {
                text: "Importo (EUR)",
                dataField: "importo",
                sortName: 'importo',
                sort: true,
                formatter: this.tableImporto,
                classes: "right",
                headerClasses: "right"
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

    tablePdf = (url) => {
        return <span className="btn-ico">
            <a href={ url } target="_blank" rel="noopener noreferrer">
                <i className="icon icon-pdf_circle_filled"/>
            </a>
        </span>;
    };

    tableImporto = val => {
        return !val
            ? ""
            : (
                val < 0
                    ? <span className="negativo">{ formatNumber(val, 2) }</span>
                    : <span className="positivo">{ formatNumber(val, 2) }</span>
            );
    };

    render() {
        /*
        const { selected } = this.props;
        
        const selectRow = {
            ...this.selectRow,
            selected
        };
        */

        return (
            <Row>
                <Col xs="12">
                    <DefaultTable columns={ this.columns } defaultSorted={ this.defaultSorted }
                                  selectRow={ false /*selectRow rimossa in data 11/12/2019 rich. E. Boldrini */ } { ...this.props }
                                  data={ this.props.tableData } keyField="idDocumento"/>
                </Col>
            </Row>
        )
    }
}

export default Results;
