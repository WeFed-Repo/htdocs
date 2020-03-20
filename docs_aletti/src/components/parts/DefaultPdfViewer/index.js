import React from 'react';
import { Document, Page } from 'react-pdf';

export default props => (
    <div>
        <Document
            file={ props.file }>
            <Page pageNumber={ 1 }/>
        </Document>
    </div>
);
