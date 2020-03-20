const defaultCategory = {
    fields: {},
    data: [],
    parent: ''
};

const defaultField = {
    error: '',
    isOK: false,
    isError: false,
    isWarning: false,
    isLoading: false,
    description: ''
};
const defaultCategories = [
    'stati',
    'province',
    'comuni',
    'cap',
    'scopo_rapporto_cc',
    'scopo_rapporto_dt',
    'professione',
    'tipo_attivita_economica',
    'origine_patrimonio',
    'patrimonio_netto',
    'reddito_annuo'
].reduce((fieldsArr, field) => {
    fieldsArr[field] = {
        ...defaultCategory
    };
    return fieldsArr;
}, {});

const types = (state = defaultCategories, action) => {
    let newState;
    const category = state[action.category] || defaultCategory;
    const field = category.fields[action.name] || {
        ...defaultField,
        updatedAt: null
    };
    switch (action.type) {
        case 'LOAD_FIELD_REQUEST':
            newState = {
                ...state,
                [action.category]: {
                    ...category,
                    fields: {
                        ...category.fields,
                        [action.name]: {
                            ...field,
                            ...defaultField,
                            isLoading: true
                        }
                    }
                }
            };
            break;
        case 'LOAD_FIELD_SUCCESS':
            const hasParent = typeof action.parentValue !== 'undefined';

            newState = {
                ...state,
                [action.category]: {
                    ...category,
                    fields: {
                        ...category.fields,
                        [action.name]: {
                            ...field,
                            updatedAt: Date.now(),
                            isLoading: false,
                            isOK: true
                        }
                    }
                }
            };

            if (hasParent) {
                newState[action.category].data[action.parentValue] = action.data;
                newState[action.category].parentValue = action.parentValue;
            } else {
                newState[action.category].data = action.data;
            }

            break;
        case 'LOAD_FIELD_FAILURE':
            newState = {
                ...state,
                [action.category]: {
                    ...category,
                    fields: {
                        ...category.fields,
                        [action.name]: {
                            ...field,
                            updatedAt: Date.now(),
                            isLoading: false,
                            isError: action.esito.isError,
                            isWarning: action.esito.isWarning,
                            description: action.esito.description
                        }
                    }
                }
            };
            break;
        case 'LOAD_FIELD_CACHED':
        default:
            newState = null;
    }
    return newState || state;
};

export default types;