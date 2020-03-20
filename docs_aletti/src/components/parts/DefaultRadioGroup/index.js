import React, { Component } from 'react';
import { FormGroup, Label, ButtonGroup, Button, FormFeedback } from 'reactstrap';
import checkFieldProps from 'functions/rad/checkFieldProps';
import _ from "lodash-es/lodash.default";
import './style.css';

class DefaultRadioGroup extends Component {
    constructor(props) {
        super(props);
        this.handleClick = this.handleClick.bind(this);
    }

    handleClick(e) {
        this.props.onChange(this.props.name, e.currentTarget.dataset.value);
    }

    shouldComponentUpdate(nextProps) {
        return this.props.value !== nextProps.value ||
            this.props.buttons !== nextProps.buttons ||
            checkFieldProps(this.props, nextProps);
    }

    render() {
        const { label, name, values, value, errors, touched, buttons, disabled, note } = this.props;
        const isTouched = !!_.get(touched, name);
        const error = _.get(errors, name);
        const invalid = isTouched && !!error;
        const valid = isTouched && !error;
        const hasLabel = !!label;
        const currentValue = value || _.get(values, name);
        let buttonGroupProps = {
            className: ""
        };
        let groupProps = {
            className: ""
        };

        if (invalid) {
            groupProps.className += " error";
            buttonGroupProps.className += " invalid";
        }

        if (valid) {
            buttonGroupProps.className += " valid";
        }

        if (!hasLabel) {
            groupProps.className += " pt-0";
        }

        return (
            <FormGroup { ...groupProps }>
                { hasLabel && <Label>{ label }</Label> }
                <ButtonGroup { ...buttonGroupProps }>
                    {
                        buttons.map(button => (
                            <Button key={ button.value } name={ name } data-value={ button.value }
                                    onClick={ this.handleClick } disabled={ disabled }
                                    color={ currentValue === button.value ? "primary" : "outline-primary" }>{ button.label }</Button>
                        ))
                    }
                </ButtonGroup>
                { invalid && <FormFeedback>{ error }</FormFeedback> }
                { note && <p className="note mt-2">{ note }</p> }
            </FormGroup>
        );
    }
}

export default DefaultRadioGroup;
