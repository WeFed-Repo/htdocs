import { connect } from 'react-redux';
import DefaultSelect from 'components/parts/DefaultSelect';
import { loadField } from "actions/rad/loadingFields";

const defaultField = {
    error: '',
    isOK: false,
    isError: false,
    isWarning: false,
    isLoading: false,
    description: ''
};

export default function getFieldLoader(category, parseData, hasParent) {
    const mapStateToProps = (state, props) => {
        const categoryState = state.rad.loadingFields[category];
        const loadingData = hasParent
            ? categoryState.data[categoryState.parentValue]
            : categoryState.data;
        const loadingField = categoryState.fields[props.name] || defaultField;
        return {
            updatedAt: loadingField.updatedAt,
            isLoading: loadingField.isLoading,
            isOK: loadingField.isOK,
            isError: loadingField.isError,
            isWarning: loadingField.isWarning,
            description: loadingField.description,
            data: loadingData
        }
    };

    let mapDispatchToProps;

    if (hasParent) {
        mapDispatchToProps = dispatch => ({
            loadData: (name, parentValue) => dispatch(loadField(category, name, parseData, parentValue))
        })
    } else {
        mapDispatchToProps = dispatch => ({
            loadData: (name) => dispatch(loadField(category, name, parseData))
        });
    }

    return connect(
        mapStateToProps,
        mapDispatchToProps
    )(DefaultSelect);
};
