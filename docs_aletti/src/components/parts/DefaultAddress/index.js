import React, {Component} from 'react';
import PropTypes from 'prop-types';
import { Row, Col, FormGroup, Label, Input, CustomInput, FormFeedback } from 'reactstrap';
import checkFieldProps from 'functions/rad/checkFieldProps';
import _ from 'lodash-es';
import './style.css';

class DefaultAddress extends Component {
    shouldComponentUpdate (nextProps) {
        return checkFieldProps(this.props, nextProps, this.props.streetType) ||
            checkFieldProps(this.props, nextProps, this.props.streetName) ||
            checkFieldProps(this.props, nextProps, this.props.streetNumber);
    }

    setInputProps (inputName, inputProps) {
        inputProps.name = inputName;
        inputProps.value = _.get(this.props.values, inputName) || "";
        inputProps.invalid = !!_.get(this.props.touched, inputName) && !!_.get(this.props.errors, inputName);
        inputProps.valid = !!_.get(this.props.touched, inputName) && !_.get(this.props.errors, inputName);

        return inputProps;
    }

    setValidationProps (inputName, inputProps, validationProps, groupProps) {
        validationProps.invalid = inputProps.invalid;
        validationProps.valid = inputProps.valid;
        validationProps.error = _.get(this.props.errors, inputName) || '';

        if (validationProps.invalid) {
            groupProps.className = "error";
        }
    }

    render () {
        const { streetLabel, numberLabel, streetType, streetName, streetNumber, ...inputProps } = this.props;
        let typeGroupProps = {};
        let nameGroupProps = {};
        let numberGroupProps = {};
        let typeValidationProps = {};
        let nameValidationProps = {};
        let numberValidationProps = {};
        let typeProps = {
            className: "defaultaddress-type",
            id: streetType,
            type: "select"
        };
        let nameProps = {
            maxLength: "50",
            className: "defaultaddress-name"
        };
        let numberProps = {
            maxLength: "10",
            className: "defaultaddress-number"
        };

        this.setInputProps(streetType, typeProps);
        this.setInputProps(streetName, nameProps);
        this.setInputProps(streetNumber, numberProps);

        this.setValidationProps(streetType, typeProps, typeValidationProps, typeGroupProps);
        this.setValidationProps(streetName, nameProps, nameValidationProps, nameGroupProps);
        this.setValidationProps(streetNumber, numberProps, numberValidationProps, numberGroupProps);

        return (
            <Row>
                <Col xs={3}>
                    <FormGroup {...typeGroupProps}>
                        <Label className="streetLabel">{streetLabel}</Label>
                        <CustomInput {...inputProps} {...typeProps}>
                            <option value=""/>
                            <option value="Via">Via</option>
                            <option value="Viale">Viale</option>
                            <option value="Corso">Corso</option>
                            <option value="Piazza">Piazza</option>
                            <option value="Piazzale">Piazzale</option>
                            <option value="Strada">Strada</option>
                            <option value="Stretto">Stretto</option>
                            <option value="Contrada">Contrada</option>
                            <option value="Vicolo">Vicolo</option>
                            <option value="Localit&agrave;<">Localit&agrave;</option>
                            <option value="Largo">Largo</option>
                            <option value="Vico">Vico</option>
                            <option value="Altro">Altro</option>
                        </CustomInput>
                        { typeValidationProps.invalid && <FormFeedback>{typeValidationProps.error}</FormFeedback> }
                    </FormGroup>
                </Col>
                <Col xs={6}>
                    <FormGroup {...nameGroupProps}>
                        <Label>&nbsp;</Label>
                        <Input {...inputProps} {...nameProps} />
                        { nameValidationProps.invalid && <FormFeedback>{nameValidationProps.error}</FormFeedback> }
                    </FormGroup>
                </Col>
                <Col xs={3}>
                    <FormGroup {...numberGroupProps}>
                        <Label>{numberLabel}</Label>
                        <Input {...inputProps} {...numberProps} />
                        { numberValidationProps.invalid && <FormFeedback>{numberValidationProps.error}</FormFeedback> }
                    </FormGroup>
                </Col>
            </Row>
        );
    }
}

DefaultAddress.propTypes = {
    streetLabel: PropTypes.string.isRequired,
    numberLabel: PropTypes.string.isRequired,
    streetType: PropTypes.string.isRequired,
    streetName: PropTypes.string.isRequired,
    streetNumber: PropTypes.string.isRequired
};

export default DefaultAddress;
