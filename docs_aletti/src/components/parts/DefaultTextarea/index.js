import React, {Component} from 'react';
import { FormGroup, Label, Input, FormFeedback } from 'reactstrap';
import checkFieldProps from 'functions/rad/checkFieldProps';
import _ from 'lodash-es';
import './style.css';

class DefaultInput extends Component {
    shouldComponentUpdate (nextProps) {
        return checkFieldProps(this.props, nextProps);
    }

    render() {
        const { label, name, values, errors, touched, ...inputProps } = this.props;
        const isTouched = !!_.get(touched, name);
        const error = _.get(errors, name);
        let groupProps = {};

        delete inputProps.loadData;
        inputProps.invalid = isTouched && !!error;
        inputProps.name = this.props.name;

        inputProps.type = 'textarea';

        inputProps.id = this.props.hasOwnProperty('id') ? this.props.id : this.props.name;
        inputProps.value =  this.props.hasOwnProperty('value') ? this.props.value : _.get(values, name);

        if (inputProps.invalid) {
            groupProps.className = "error";
        }

        return (
            <FormGroup {...groupProps}>
                <Label for={inputProps.id}>{label} </Label>
                <Input {...inputProps} />
                { inputProps.invalid && <FormFeedback>{error}</FormFeedback> }
            </FormGroup>
        );
    }
}

export default DefaultInput;
