import React, { Component } from 'react';
import { CustomInput, FormFeedback } from 'reactstrap';
import _ from "lodash-es/lodash.default";
import checkFieldProps from "functions/rad/checkFieldProps";
import './style.css';

class DefaultCheck extends Component {
    shouldComponentUpdate(nextProps) {
        return checkFieldProps(this.props, nextProps);
    }

    render() {
        let { label, name, values, errors, touched, disabled, note, ...inputProps } = this.props;
        const isTouched = !!_.get(touched, name);
        const error = _.get(errors, name);
        const value = this.props.hasOwnProperty('value') ? this.props.value : _.get(values, name);

        inputProps.name = this.props.name;
        inputProps.type = "checkbox";
        inputProps.invalid = isTouched && !!error;
        inputProps.valid = isTouched && !error;
        inputProps.id = this.props.hasOwnProperty('id') ? this.props.id : this.props.name;

        if (disabled) {
            inputProps.className = "disabled";
        }

        return (
            <CustomInput { ...inputProps } label={ label } checked={ value } disabled={ disabled }>
                { inputProps.invalid && <FormFeedback>{ error }</FormFeedback> }
                { note && <p className="note">{ note }</p> }
            </CustomInput>
        )
    }
}

export default DefaultCheck;
