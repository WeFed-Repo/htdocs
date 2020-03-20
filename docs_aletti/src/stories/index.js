import React from 'react';
import {setAddon, storiesOf} from '@storybook/react';
import JSXAddon from 'storybook-addon-jsx';
import DefaultTable from 'components/parts/DefaultTable';
import customersJson from '../../api/"json_data/customers';

setAddon(JSXAddon);

const columns = [{
    Header: 'Id',
    accessor: 'id' // String-based value accessors!
}, {
    Header: 'First name',
    accessor: 'firstName'
}, {
    Header: 'Last name',
    accessor: 'lastName'
}, {
    Header: 'UUID',
    accessor: 'uuid'
}];

storiesOf('DefaultTable', module)
    .addWithJSX('Basic', () => <DefaultTable columns={columns} data={customersJson.customers} />)
    .addWithJSX('Dò', () => <DefaultTable columns={columns} data={[]} />);
