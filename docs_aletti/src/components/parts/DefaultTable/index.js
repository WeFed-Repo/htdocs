import React, { Component } from 'react';
import PropTypes from 'prop-types';
import BootstrapTable from 'react-bootstrap-table-next';
import paginationFactory from 'react-bootstrap-table2-paginator';
import 'react-bootstrap-table-next/dist/react-bootstrap-table2.min.css';
import 'react-bootstrap-table2-paginator/dist/react-bootstrap-table2-paginator.css';
import './style.css';

class DefaultTable extends Component {
    shouldComponentUpdate (nextProps) {
        return this.props.data !== nextProps.data
            || this.props.columns !== nextProps.columns
            || this.props.selectRow !== nextProps.selectRow;
    }

    render() {
        const { data, columns, defaultSorted, selectRow } = this.props;
        const dataLength = data.length;

        let tableProps = {
            bootstrap4: true,
            keyField: this.props.keyField || "id",
            data,
            columns,
            wrapperClasses: "horizontal-scroller",
            noDataIndication: "Nessun elemento da mostrare"
        };

        if (defaultSorted) {
            tableProps.defaultSorted = defaultSorted;
        }

        if (selectRow) {
            tableProps.selectRow = selectRow;
        }

        if (dataLength > 50) {
            const paginationOption = {
                sizePerPage: 50,
                pageStartIndex: 0,
                withFirstAndLast: true,
                alwaysShowAllBtns: true,
                hidePageListOnlyOnePage: true,
                firstPageText: '<<',
                prePageText: '<',
                nextPageText: '>',
                lastPageText: '>>',
                firstPageTitle: 'Prima pagina',
                prePageTitle: 'Pagina precedente',
                nextPageTitle: 'Pagina successiva',
                lastPageTitle: 'Ultima pagina'
            };

            const pageSizeOptions = [10, 20, 50, 100].filter(pageSize => pageSize <= dataLength);
            paginationOption.sizePerPageList = pageSizeOptions.map(size => {
                    return {
                        "text": size.toString(),
                        "value": size
                    }
                }
            );
            if (dataLength > 100) {
                paginationOption.sizePerPageList.push({
                    "text": "Tutti",
                    "value": dataLength
                })
            }
            tableProps.pagination = paginationFactory(paginationOption);
        }

        return (
            <BootstrapTable {...tableProps} />
        );
    }
}

DefaultTable.propTypes = {
    data: PropTypes.array.isRequired,
    columns: PropTypes.array.isRequired
};

export default DefaultTable;
