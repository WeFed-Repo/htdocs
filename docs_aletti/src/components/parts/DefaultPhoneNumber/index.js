import React, {Component} from 'react';
import PropTypes from 'prop-types';
import { FormGroup, Label, InputGroup, Input, FormFeedback } from 'reactstrap';
import checkFieldProps from 'functions/rad/checkFieldProps';
import './style.css';
import _ from "lodash-es/lodash.default";

class DefaultPhoneNumber extends Component {
    shouldComponentUpdate (nextProps) {
        return checkFieldProps(this.props, nextProps, this.props.prefixName) ||
            checkFieldProps(this.props, nextProps, this.props.numberName);
    }

    render () {
        const { label,  values, errors, touched, prefixName, numberName, ...inputProps } = this.props;
        let groupProps = {};
        let validationProps = {};
        let prefixProps = {
            maxLength: "5",
            className: "col-4 defaultphonenumber-prefix"
        };
        let numberProps = {
            maxLength: "10",
            className: "col-8 defaultphonenumber-number"
        };

        prefixProps.name = prefixName;
        prefixProps.value = _.get(values, prefixName) || "";
        prefixProps.invalid = !!_.get(touched, prefixName) && !!_.get(errors, prefixName);
        prefixProps.valid = !!_.get(touched, prefixName) && !_.get(errors, prefixName);

        numberProps.name = numberName;
        numberProps.value = _.get(values, numberName) || "";
        numberProps.invalid = !!_.get(touched, numberName) && !!_.get(errors, numberName);
        numberProps.valid = !!_.get(touched, numberName) && !_.get(errors, numberName);

        validationProps.invalid = prefixProps.invalid || numberProps.invalid;
        validationProps.error = _.get(errors, prefixName) || _.get(errors, numberName) || '';

        if (validationProps.invalid) {
            groupProps.className = "error";
        }

        return (
            <FormGroup {...groupProps}>
                <Label>{label}</Label>
                <InputGroup>
                    <Input {...inputProps} {...prefixProps} placeholder="Prefisso" />
                    <Input {...inputProps} {...numberProps} placeholder="Numero" />
                </InputGroup>
                { validationProps.invalid && <FormFeedback>{validationProps.error}</FormFeedback> }
            </FormGroup>
        );
    }
}

DefaultPhoneNumber.propTypes = {
    label: PropTypes.string.isRequired,
    prefixName: PropTypes.string.isRequired,
    numberName: PropTypes.string.isRequired
};

export default DefaultPhoneNumber;