import React, { PureComponent } from 'react';
import { Form, Button, Row, Col } from 'reactstrap';
import DefaultSelect from "components/parts/DefaultSelect";
import DefaultTextarea from "components/parts/DefaultTextarea";
import DefaultInput from "components/parts/DefaultInput";

class StepForm extends PureComponent {
    constructor(props) {
        super(props);
        this.state = {
            substep: 0,
            otp: false,
            otpOK: false
        };
        this.nextSubstep = this.nextSubstep.bind(this);
        this.sendOtp = this.sendOtp.bind(this);
        this.confirmOtp = this.confirmOtp.bind(this);
    }

    nextSubstep() {
        this.setState(state => {
            const newSubStep = state.substep + 1;
            if (newSubStep === 3) {
                this.props.submitForm();
            }
            return {
                substep: newSubStep
            };
        });
    }

    sendOtp() {
        this.setState({
            otp: true
        });
    }

    confirmOtp() {
        this.setState({
            otpOK: true
        });
    }

    render() {
        const { values, touched, errors, isSubmitting, handleChange } = this.props;
        const inputPros = {
            type: "text",
            onChange: handleChange,
            values,
            errors,
            touched
        };
        return (
            <Form autoComplete="off">
                { this.state.substep === 0 &&
                    <div>
                        <h2>FIRMA PER ATTESTAZIONE RICONOSCIMENTO INTESTATARIO 1</h2>

                        <Row>
                            <Col xs="12" sm="4">
                                <DefaultInput { ...inputPros } name="intestatari[0].codice-pin" label="PIN di firma"
                                              disabled={ this.state.otp }/>
                            </Col>
                            <Col xs="12" sm="4" className="pt-sm-1">
                                <Button type="button" color="primary" outline={ true } className="mt-sm-3 mb-5" disabled={ this.state.otp }
                                        onClick={ this.sendOtp }>CONFERMA</Button>

                                {
                                    this.state.otp &&
                                    <Button type="button" color="primary" outline={ true } className="mt-sm-3 mb-5 ml-sm-3" disabled={ this.state.otpOK }
                                                onClick={ this.sendOtp }>REINVIA CODICE OTP</Button>
                                }
                            </Col>
                        </Row>

                        {
                            this.state.otp &&
                            <Row>
                                <Col xs="12" sm="4">
                                    <DefaultInput { ...inputPros } name="intestatari[0].codice-otp2" label="Codice OTP inviato via SMS"
                                                  disabled={ this.state.otpOK }/>
                                </Col>
                                <Col xs="12" sm="4" className="pt-sm-1">
                                    <Button type="button" color="primary" className="mt-sm-3" onClick={ this.confirmOtp }>CONFERMA E
                                        PROSEGUI</Button>
                                </Col>
                            </Row>
                        }

                        <div className="form-footer-wrap">
                            <div className="form-footer">
                                <div className="d-flex justify-content-end">
                                    <Button type="button" color="primary" disabled={ isSubmitting } onClick={ this.nextSubstep }>SALVA
                                        E PROSEGUI</Button>
                                </div>
                            </div>
                        </div>
                    </div>
                }
                { this.state.substep === 1 &&
                    <div>
                        <h4>La richiesta è stata salvata correttamente</h4>

                        <p>A breve sarà inviata una mail di conferma sulla casella di posta personale e
                            sulla casella PEC del cliente.</p>

                        <div className="form-footer-wrap">
                            <div className="form-footer">
                                <div className="d-flex justify-content-end">
                                    <Button type="button" color="primary" disabled={ isSubmitting } onClick={ this.nextSubstep }>SALVA
                                        E PROSEGUI</Button>
                                </div>
                            </div>
                        </div>
                    </div>
                }
                { this.state.substep === 2 &&
                    <div>
                        <h2>RILEVAZIONE COMPORTAMENTO INTESTATARIO 1</h2>

                        <DefaultSelect { ...inputPros } name="intestatari[0].comportamento" label="Descrizione del comportamento tenuto dal cliente">
                            <option value=""/>
                            <option value="Normale">Normale</option>
                            <option value="Riluttante">Riluttante</option>
                            <option value="Modificato">Ha modificato l’operazione in funzione delle informazioni richieste</option>
                            <option value="Accompagnato">Accompagnato da soggetti terzi non giustificati</option>
                        </DefaultSelect>

                        <DefaultTextarea { ...inputPros } name="intestatari[0].note" label="Note"/>

                        <div className="form-footer-wrap">
                            <div className="form-footer">
                                <div className="d-flex justify-content-end">
                                    <Button type="button" color="primary" disabled={ isSubmitting } onClick={ this.nextSubstep }>SALVA
                                        E PROSEGUI</Button>
                                </div>
                            </div>
                        </div>
                    </div>
                }
                { this.state.substep === 3 &&
                    <div>
                        <h4>La richiesta è stata inserita correttamente</h4>
                    </div>
                }
            </Form>
        )
    }
}

export default StepForm;
