import React, { PureComponent } from 'react';
import { Form, Button } from 'reactstrap';
import DefaultRadioGroup from "components/parts/DefaultRadioGroup";

class StepForm extends PureComponent {
    render() {
        const { values, touched, errors, isSubmitting, handleChange, setFieldValue, submitForm } = this.props;
        const inputPros = {
            type: "text",
            onChange: handleChange,
            values,
            errors,
            touched
        };
        return (
            <Form autoComplete="off">
                <div id="identificazione">
                    <p>Ai sensi della normativa antiriciclaggio (d.lgs231/07) sei tenuto a compiere alcuni
                        adempimenti e a
                        fornire dichiarazioni e informazioni personali.<br/>
                        Ti ricordiamo che il rilascio di false informazioni oppure omissioni può comportare
                        conseguenze
                        anche di natura penale.</p>

                    <p><strong>L'identificazione compiuta sarà propedeutica per il rilascio del certificato
                        della FEQ OneShot
                        e della casella di posta certificata presso InfoCert.</strong></p>

                    <h3>Identificazione intestatario 1</h3>

                    <DefaultRadioGroup { ...inputPros } name="intestatari[0].identita_accertata"
                                       label="Identità accertata"
                                       onChange={ setFieldValue } buttons={ [
                        { label: "Sì", value: "1" },
                        { label: "No", value: "0" }
                    ] }/>

                    <div className="form-footer-wrap">
                        <div className="form-footer">
                            <div className="d-flex justify-content-end">
                                <Button type="button" color="primary" disabled={ isSubmitting }
                                        onClick={ submitForm }>AVVIA ENROLLMENT INTESTATARIO 1</Button>
                            </div>
                        </div>
                    </div>
                </div>
            </Form>
        )
    }
}

export default StepForm;
