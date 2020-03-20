import React, { Component } from 'react';
import PropTypes from "prop-types";
import { FormGroup, Label, Input, FormFeedback } from 'reactstrap';
import checkFieldProps from 'functions/rad/checkFieldProps';
import withHelp from 'components/wrappers/withHelp';
import _ from 'lodash-es';
import './style.css';

const InputWithHelp = withHelp(Input);

class DefaultInput extends Component {
    shouldComponentUpdate(nextProps) {
        return (
            this.props.helpTitle !== nextProps.helpTitle ||
            this.props.helpContent !== nextProps.helpContent ||
            this.props.hasHelp !== nextProps.hasHelp ||
            checkFieldProps(this.props, nextProps)
        );
    }

    render() {
        const { label, name, values, errors, touched, hasHelp, ...inputProps } = this.props;
        const isTouched = !!_.get(touched, name);
        const error = _.get(errors, name);
        let groupProps = {};
        const InputNode = hasHelp ? InputWithHelp : Input;

        delete inputProps.loadData;
        inputProps.invalid = isTouched && !!error;
        inputProps.valid = isTouched && !error;
        inputProps.name = this.props.name;

        if (!this.props.hasOwnProperty('type') || this.props.type === 'datepicker') {
            inputProps.type = 'text';
        }

        inputProps.id = this.props.hasOwnProperty('id') ? this.props.id : this.props.name;
        inputProps.value = (this.props.hasOwnProperty('value') ? this.props.value : _.get(values, name)) || "";


        if (inputProps.invalid) {
            groupProps.className = "error";
        }
        
        

        return (
            <FormGroup { ...groupProps }>
                <Label>{ label } </Label>
                <InputNode { ...inputProps } />
                { inputProps.invalid && <FormFeedback>{ error }</FormFeedback> }
            </FormGroup>
        );
    }
}

DefaultInput.propTypes = {
    label: PropTypes.string.isRequired,
    name: PropTypes.string.isRequired,
    values: PropTypes.object,
    errors: PropTypes.object,
    touched: PropTypes.object,
    hasHelp: PropTypes.bool
};

export default DefaultInput;
