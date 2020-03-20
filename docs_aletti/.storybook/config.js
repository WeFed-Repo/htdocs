import { configure } from '@storybook/react';
import { setOptions } from '@storybook/addon-options';
import 'bootstrap/dist/css/bootstrap.min.css';
import '../src/storybook.css';

setOptions({
    name: 'ALETTI BANCA',
    url: 'http://www.alettibank.it',
    addonPanelInRight: true,
    selectedAddonPanel: 'storybook-addon-jsx'
});

configure(() => require('../src/stories'), module);
