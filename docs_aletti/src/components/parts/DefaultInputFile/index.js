import React, { Component } from 'react';
import PropTypes from "prop-types";
import { FormGroup, Label, CustomInput, FormFeedback, Button } from 'reactstrap';
import DefaultModal from "components/parts/DefaultModal";
import DefaultPdfViewer from "components/parts/DefaultPdfViewer";
import checkFieldProps from 'functions/rad/checkFieldProps';
import withHelp from 'components/wrappers/withHelp';
import _ from 'lodash-es';
import './style.css';

class DefaultInputFile extends Component {
    state = {
        inputLabel: 'Scegli un file',
        inputError: '',
        pdfPreviewModal: false
    };

    shouldComponentUpdate(nextProps, nextState) {
        return this.checkState(nextState) || checkFieldProps(this.props, nextProps);
    }

    checkState = nextState => {
        return nextState.inputLabel !== this.state.inputLabel ||
            nextState.inputError !== this.state.inputError;
    };

    handleChange = event => {
        const input = event.target;
        const path = input.value;
        const files = input.files;
        const file = files[0];
        const allowedExtensions = /\.(jpg|jpeg|png|gif|pdf)$/i;

        if (!allowedExtensions.test(path)) {
            this.setState({
                inputLabel: 'Scegli un file',
                inputError: 'Carica soltanto file con estensione .jpeg, .jpg, .png, .gif o .pdf'
            });
            this.props.onChange(this.props.name, '');

            return false;
        } else if (files && file) {
            let reader = new FileReader();
            let that = this;

            reader.onload = function (readerEvt) {
                // noinspection JSUnresolvedVariable
                const binaryString = readerEvt.target.result;
                const base64String = btoa(binaryString);

                that.setState({
                    inputLabel: path.substring(path.lastIndexOf('\\') + 1),
                    inputError: ''
                });
                that.props.onChange(that.props.name, base64String);
            };

            reader.readAsBinaryString(file);
        }
    };

    closePdfPreviewModal = () => this.setState({ pdfPreviewModal: false });

    render() {
        const { label, name, values, errors, touched, ...inputProps } = this.props;
        const isTouched = !!_.get(touched, name);
        const error = _.get(errors, name) || this.state.inputError;
        let helpProps = {
            helpTitle: "Anteprima dell'immagine"
        };
        let groupProps = {};
        const InputNode = withHelp(CustomInput);
        const value = (this.props.hasOwnProperty('value') ? this.props.value : _.get(values, name)) || "";

        delete inputProps.loadData;
        inputProps.onChange = this.handleChange;
        inputProps.invalid = isTouched && !!error;
        inputProps.valid = isTouched && !error;
        inputProps.name = this.props.name;
        inputProps.type = 'file';
        inputProps.id = this.props.hasOwnProperty('id') ? this.props.id : this.props.name;
        inputProps.label = this.state.inputLabel;

        if (!value) {
            helpProps.helpContent = "Carica un file e ne vedrai l'anteprima";
        } else {
            helpProps.helpContent =
                <img className="img-fluid" src={ "data:*/*;base64," + value } alt="Anteprima dell'immagine caricata"/>;
        }

        if (inputProps.invalid) {
            groupProps.className = "error";
        }

        return (
            <>
                <FormGroup { ...groupProps }>
                    <Label>{ label } </Label>
                    <InputNode { ...inputProps } { ...helpProps } />
                    { inputProps.invalid && <FormFeedback>{ error }</FormFeedback> }
                </FormGroup>

                <DefaultModal show={ this.state.pdfPreviewModal }
                              close={ this.closePdfPreviewModal }
                              params={ { "modalTitle": 'Anteprima PDF' } }>

                    <DefaultPdfViewer file={ value }/>
                </DefaultModal>
            </>
        );
    }
}

DefaultInputFile.propTypes = {
    label: PropTypes.string.isRequired,
    name: PropTypes.string.isRequired,
    values: PropTypes.object,
    errors: PropTypes.object,
    touched: PropTypes.object,
    hasHelp: PropTypes.bool
};

export default DefaultInputFile;
