import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { DayPickerInputIt } from "components/parts/DayPickerIt";
import withHelp from "components/wrappers/withHelp";
import checkFieldProps from 'functions/rad/checkFieldProps';
import { FormGroup, Label, Input, FormFeedback } from 'reactstrap';
import _ from "lodash-es/lodash.default";

class DefaultDayPicker extends Component {
    constructor(props) {
        super(props);
        this.handleChange = this.handleChange.bind(this);
    }

    shouldComponentUpdate(nextProps) {
        return this.props.min !== nextProps.min ||
            this.props.max !== nextProps.max ||
            checkFieldProps(this.props, nextProps);
    }

    handleChange = value => {
        if (value) {
            value.setHours(0);
            value.setMinutes(0);
            value.setSeconds(0);
            value.setMilliseconds(0);
        }

        this.props.onChange(this.props.name, value ? value.getTime() : null);
    };

    disableDays = day => {
        const { min, max } = this.props;
        const dayTs = day.getTime();

        return (dayTs < min) || (dayTs > max);
    };

    render() {
        const { label, name, values, errors, touched, disabled, hasHelp, showYearSelect, min, max, ...inputProps } = this.props;
        const isTouched = !!_.get(touched, name);
        const error = _.get(errors, name);
        const InputNode = hasHelp ? withHelp(Input) : Input;
        let groupProps = {};
        let dayPickerProps = {};
        const value = _.get(values, name);
        const date = value ? new Date(value) : null;

        dayPickerProps.disabledDays = this.disableDays;
        dayPickerProps.fromMonth = new Date(parseInt(min, 10));
        dayPickerProps.toMonth = new Date(parseInt(max, 10));
        dayPickerProps.initialMonth = dayPickerProps.toMonth;
        dayPickerProps.showYearSelect = showYearSelect;

        inputProps.invalid = isTouched && !!error;
        inputProps.valid = isTouched && !error;
        inputProps.autoComplete = "off";
        inputProps.disabled = disabled;
        inputProps.id = name + '__input';

        if (inputProps.invalid) {
            groupProps.className = "error";
        }

        return (
            <FormGroup { ...groupProps }>
                <Label>{ label } </Label>
                <DayPickerInputIt
                    onDayChange={ this.handleChange }
                    value={ date }
                    inputProps={ inputProps }
                    component={ InputNode }
                    dayPickerProps={ dayPickerProps }
                />
                { inputProps.invalid && <FormFeedback>{ error }</FormFeedback> }
            </FormGroup>
        );
    }
}

DefaultDayPicker.propTypes = {
    min: PropTypes.number.isRequired,
    max: PropTypes.number.isRequired
};

export default DefaultDayPicker;
