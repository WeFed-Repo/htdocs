import React, {Component} from 'react';
import { FormGroup, Label, Input, FormFeedback } from 'reactstrap';
import { conformToMask } from 'react-text-mask';
import checkFieldProps from 'functions/rad/checkFieldProps';
import _ from 'lodash-es';
import './style.css';

class DefaultMaskedInput extends Component {
    shouldComponentUpdate (nextProps) {
        return checkFieldProps(this.props, nextProps);
    }

    render() {
        const { label, name, values, errors, touched, mask, ...inputProps } = this.props;
        const isTouched = !!_.get(touched, name);
        const error = _.get(errors, name);
        let groupProps = {};

        delete inputProps.loadData;
        inputProps.invalid = isTouched && !!error;
        inputProps.name = this.props.name;
        inputProps.className = 'form-control';

        if (!this.props.hasOwnProperty('type') || this.props.type === 'datepicker') {
            inputProps.type = 'text';
        }

        inputProps.id = this.props.hasOwnProperty('id') ? this.props.id : this.props.name;
        inputProps.value =  this.props.hasOwnProperty('value') ? this.props.value : _.get(values, name);

        if (inputProps.invalid) {
            groupProps.className = "error";
            inputProps.className += ' is-invalid';
        }

        const conformed = conformToMask(inputProps.value, mask, { keepCharPositions: true, guide: false });
        inputProps.value = conformed.conformedValue;

        return (
            <FormGroup {...groupProps}>
                <Label>{label} </Label>
                <Input {...inputProps} />
                { inputProps.invalid && <FormFeedback>{error}</FormFeedback> }
            </FormGroup>
        );
    }
}

export default DefaultMaskedInput;
