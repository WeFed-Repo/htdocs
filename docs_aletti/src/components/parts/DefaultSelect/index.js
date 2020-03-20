import React, { Component } from 'react';
import PropTypes from "prop-types";
import { FormGroup, Label, CustomInput, FormFeedback } from 'reactstrap';
import checkFieldProps from 'functions/rad/checkFieldProps';
import withData from "components/wrappers/withData";
import _ from "lodash-es/lodash.default";
import './style.css';

const CustomInputWithData = withData(CustomInput);

class DefaultSelect extends Component {
    hasData() {
        return typeof this.props.loadData !== "undefined";
    }

    checkProgressProps(nextProps) {
        return this.hasData() && (
            this.props.isLoading !== nextProps.isLoading ||
            this.props.updatedAt !== nextProps.updatedAt ||
            this.props.data !== nextProps.data ||
            this.props.loadActive !== nextProps.loadActive ||
            this.props.parentValue !== nextProps.parentValue
        );
    }

    checkChildren(nextProps) {
        const propsHasChildren = this.props.hasOwnProperty('children');
        const nextPropsHasChildren = nextProps.hasOwnProperty('children');
        const bothHasChildren = propsHasChildren && nextPropsHasChildren;
        return (propsHasChildren !== nextPropsHasChildren) ||
            (bothHasChildren && this.props.children.length !== nextProps.children.length);
    }

    handleChange = (event) => {
        this.props.customOnChange(event.target.name, event.target.value + '|' + event.target.text);
    };

    shouldComponentUpdate(nextProps) {
        return this.checkChildren(nextProps) || this.checkProgressProps(nextProps) || checkFieldProps(this.props, nextProps);
    }

    render() {
        const { label, name, values, valueAndText, errors, touched, isLoading, data, parentValue, loadActive, loadData,  ...inputProps } = this.props;
        
        const isTouched = !!_.get(touched, name);
        const fieldError = _.get(errors, name);
        let groupProps = {};
        let progressProps = { isLoading, data, parentValue, loadActive, loadData };

        inputProps.invalid = isTouched && !!fieldError;
        inputProps.valid = isTouched && !fieldError;
        inputProps.name = this.props.name;
        inputProps.type = "select";
        inputProps.id = this.props.hasOwnProperty('id') ? this.props.id : this.props.name;
        inputProps.value = (this.props.hasOwnProperty('value') ? this.props.value : _.get(values, name)) || "";

        if (valueAndText) {
            inputProps.value = inputProps.value.split('|')[0];
            
            if (this.hasData()) {
                inputProps.valueAndText = true;
                
            } else {
                inputProps.onChange = this.handleChange;
            }
        }

        if (inputProps.invalid) {
            groupProps.className = "error";
        }
        
        
        return (
            <FormGroup { ...groupProps }>
                <Label for={ inputProps.id }>{ label }</Label>
                { this.hasData()
                    ? <CustomInputWithData { ...inputProps } { ...progressProps } />
                    : <CustomInput { ...inputProps } />
                }
                { inputProps.invalid && <FormFeedback>{ fieldError }</FormFeedback> }
            </FormGroup>
        );
    }
}

DefaultSelect.propTypes = {
    label: PropTypes.string.isRequired,
    name: PropTypes.string.isRequired,
    values: PropTypes.object,
    errors: PropTypes.object,
    touched: PropTypes.object
};

export default DefaultSelect;
