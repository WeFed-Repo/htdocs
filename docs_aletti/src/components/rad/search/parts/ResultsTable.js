import React, { PureComponent } from 'react';
import { Col, Row } from 'reactstrap';
import { tipi, pdt, stati } from 'components/rad/search/config';
import DefaultTable from 'components/parts/DefaultTable';
import momentIt from "functions/rad/momentIt";
import validationSettings from "functions/rad/validationSettings";
import { NavLink } from 'react-router-dom';

class ResultsTable extends PureComponent {
    constructor(props) {
        super(props);
        this.defaultSorted = [{
            dataField: 'id',
            order: 'asc'
        }];
        this.resultColumns = {
            "id": {
                text: 'Codice pratica',
                dataField: 'id',
                sortName: 'id',
                sort: true,
                headerClasses: "right",
                classes: "right",
                formatter: this.tableLink
            },
            "tipo": {
                text: "Tipo richiesta",
                dataField: "tipo",
                sortName: 'tipo',
                sort: true,
                formatter: this.tableTipo
            },
            "data": {
                text: "Data ins.",
                dataField: "data",
                sortName: 'data',
                sort: true,
                formatter: this.tableDate,
                classes: "right date",
                headerClasses: "right"
            },
            "cognome": {
                text: "Cognome",
                dataField: "cognome",
                sortName: 'cognome',
                sort: true
            },
            "nome": {
                text: "Nome",
                dataField: "nome",
                sortName: 'nome',
                sort: true
            },
            "intestatari": {
                text: 'N. intestatario',
                dataField: 'intestatari',
                sortName: 'intestatari',
                sort: true,
                headerClasses: "right",
                classes: "right"
            },
            "pdt": {
                text: "PDT",
                dataField: "pdt",
                formatter: this.tablePdt
            },
            "stato": {
                text: "Stato",
                dataField: "stato",
                sortName: 'stato',
                sort: true,
                formatter: this.tableStato
            }
        };
        this.columns = Object.keys(this.resultColumns).map(obj => {
            return this.resultColumns[obj];
        });
        this.selectRow = {
            mode: 'checkbox',
            clickToSelect: true,
            hideSelectAll: true,
            selectColumnPosition: 'right',
            classes: 'selected',
            onSelect: (row, isSelect) => props.onSelect(row, isSelect),
            selectionRenderer: ({ mode, ...rest }) => (
                <div className="custom-checkbox custom-control">
                    <input type={ mode } { ...rest } readOnly={true} className="custom-control-input"/>
                    <label className="custom-control-label"/>
                </div>
            )
        };
    }

    getOptionText = (options, optionValue) => {
        return options.reduce((optionText, option) => option.value === optionValue ? option.text : optionText, "");
    };

    tableLink = (val) => {
        return <NavLink to={ "/onboarding/inserimento/" + val }><span className="table-link">{ val }</span></NavLink>;
    };

    tableTipo = val => {
        return this.getOptionText(tipi, val);
    };

    tablePdt = val => {
        return this.getOptionText(pdt, val);
    };

    tableStato = val => {
        return this.getOptionText(stati, val);
    };

    tableDate = date => {
        return momentIt(date).format(validationSettings.dateFormat);
    };

    render() {
        const { tableData, selected } = this.props;
        let nonSelectable = tableData.reduce((keyArray, row) => {
            if (row.stato === "50") {
                keyArray.push(row.id);
            }
            return keyArray;
        }, []);
        const selectRow = {
            ...this.selectRow,
            selected,
            nonSelectable
        };

        return (
            <Row>
                <Col xs="12">
                    <DefaultTable columns={ this.columns } defaultSorted={ this.defaultSorted }
                                  selectRow={ selectRow } { ...this.props }
                                  data={ this.props.tableData }/>
                </Col>
            </Row>
        )
    }
}

export default ResultsTable;
