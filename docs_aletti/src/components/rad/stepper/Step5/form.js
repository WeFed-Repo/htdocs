import React, { PureComponent } from 'react';
import { Form, Button, Row, Col } from 'reactstrap';
import DefaultCollapse from "components/parts/DefaultCollapse";
import DefaultOutput from "components/parts/DefaultOutput";
import DefaultInput from "components/parts/DefaultInput";
import DefaultSelect from "components/parts/DefaultSelect";
import DefaultPhoneNumber from "components/parts/DefaultPhoneNumber";
import withLoading from "components/wrappers/withLoading";
import { ambiente } from "functions/genericVars";
import isEmptyObject from "functions/isEmptyObject";
import fakeDelay from "functions/fakeDelay";
import fetchHandler from "functions/fetchHandler";
import getOperatoreDescription from "functions/rad/getOperatoreDescription";
import FieldValidation from "functions/rad/validateField";
import _ from "lodash-es/lodash.default";

const sendSmsUrl = (ambiente.isSviluppo || ambiente.isProduzione) ? "" : "/json_data/rad/bozze/bozza.json";
const sendEmailUrl = (ambiente.isSviluppo || ambiente.isProduzione) ? "" : "/json_data/rad/bozze/bozza.json";
const verifyOtpUrl = (ambiente.isSviluppo || ambiente.isProduzione) ? "" : "/json_data/rad/bozze/bozza.json";
const DivWithLoading = withLoading(props => <div { ...props }/>);

class IntestatarioForm extends PureComponent {
    constructor(props) {
        super(props);

        const { index, editPhone, confirmPhone, sendSMS, validatePhone, editEmail, confirmEmail, sendEmail, validateEmail } = this.props;

        this.validationBag = {
            editPhone: () => editPhone(index),
            confirmPhone: () => confirmPhone(index),
            sendSMS: () => sendSMS(index),
            validatePhone: () => validatePhone(index),
            editEmail: () => editEmail(index),
            confirmEmail: () => confirmEmail(index),
            sendEmail: () => sendEmail(index),
            validateEmail: () => validateEmail(index)
        }
    };

    render() {
        const { values, touched, errors, control, loading, index, getStepField, handleChange } = this.props;
        const { editPhone, confirmPhone, sendSMS, validatePhone, editEmail, confirmEmail, sendEmail, validateEmail } = this.validationBag;
        const { emailEdit, phoneEdit, phoneSms, emailSent, phoneOtp, emailOtp } = control.intestatari[index];
        const inputPros = {
            type: "text",
            onChange: handleChange,
            values,
            errors,
            touched
        };
        const intestatario = values.intestatari[index];
        const intestatarioLoading = loading.intestatari[index];
        const prefix = "intestatari[" + index + "].";
        const nome = getStepField(0, "intestatari[" + index + "].nome");
        const cognome = getStepField(0, "intestatari[" + index + "].cognome");
        const nominativo = nome.toUpperCase() + ' ' + cognome.toUpperCase();

        return (
            <DefaultCollapse
                label={ "CERTIFICAZIONE RECAPITI" } nominativo={ nominativo } startsOpen={ true }
                hasErrors={ errors.intestatari && errors.intestatari[index] && !isEmptyObject(errors.intestatari[index]) }>

                <DivWithLoading isLoading={ intestatarioLoading.phone_isLoading }
                                error={ intestatarioLoading.phone_error }>
                    <h4>Verifica numero di cellulare</h4>
                    <p>1. Richiedi l'invio del codice di controllo, lo riceverai immediatamente con un sms. Ti servirà
                        per
                        verificare il tuo numero di cellulare. Se il numero di cellulare o l'operatore telefonico non
                        sono
                        corretti, puoi modificarli cliccando sull'icona al loro fianco.</p>

                    <Row>
                        <Col xs="12" sm="3">
                            {
                                !phoneEdit
                                    ? <DefaultOutput label="Numero di cellulare"
                                                     output={ intestatario.prefisso + ' ' + intestatario.numero }/>
                                    : <DefaultPhoneNumber { ...inputPros } prefixName={ prefix + "prefisso" }
                                                          numberName={ prefix + "numero" }
                                                          label="Numero di cellulare"/>
                            }
                        </Col>
                        <Col xs="12" sm="3">
                            {
                                !phoneEdit
                                    ? <DefaultOutput label="Operatore"
                                                     output={ getOperatoreDescription(intestatario.operatore) }/>
                                    : <DefaultSelect { ...inputPros } name={ prefix + "operatore" }
                                                     label="Operatore">
                                        <option value=""/>
                                        <option value="WIND">Wind</option>
                                        <option value="VODAF">Vodafone</option>
                                        <option value="TRE">Tre</option>
                                        <option value="TIM">Tim</option>
                                        <option value="POSTE">Poste Mobile</option>
                                        <option value="COOP">Coop Voce</option>
                                        <option value="UNO">Uno Mobile</option>
                                        <option value="TELEPASS">Telepass Mobile</option>
                                        <option value="MTV">Mtv Mobile</option>
                                        <option value="FASTWEB">Fastweb Mobile</option>
                                        <option value="DAILY">Daily Telecom Mobile</option>
                                        <option value="CONAD">Conad Insim</option>
                                        <option value="BT">BT Mobile</option>
                                        <option value="AMOBILE">A-Mobile</option>
                                        <option value="ALTRO">Altro...</option>
                                    </DefaultSelect>
                            }
                        </Col>
                        <Col xs="12" sm="6">
                            {
                                !phoneOtp &&
                                <>
                                    {
                                        !phoneEdit
                                            ? <Button type="button" color="primary" outline={ true } className="mt-3"
                                                      onClick={ editPhone } disabled={ phoneOtp }>Modifica</Button>
                                            : <Button type="button" color="primary" outline={ true } className="mt-3"
                                                      onClick={ confirmPhone }>Conferma</Button>
                                    }
                                    {
                                        !phoneSms
                                            ?
                                            <Button type="button" color="primary" outline={ true } className="ml-3 mt-3"
                                                    onClick={ sendSMS } disabled={ phoneEdit }>Invia codice via
                                                SMS</Button>
                                            :
                                            <Button type="button" color="primary" outline={ true } className="ml-3 mt-3"
                                                    onClick={ sendSMS } disabled={ phoneOtp }>Rimanda codice
                                                OTP</Button>
                                    }
                                </>
                            }

                        </Col>
                    </Row>

                    <p>2. Inserisci il codice di controllo che ti abbiamo inviato via sms per verificare il tuo numero
                        di
                        cellulare. Se non hai ricevuto o hai perso l'sms, puoi richiedere l'invio di un nuovo
                        codice.</p>

                    <Row>
                        {
                            phoneOtp
                                ? <Col xs="12" sm="3">
                                    <DefaultOutput label="Codice di controllo"
                                                   output={ <strong className="positivo">Verificato</strong> }/>
                                </Col>
                                : <>
                                    <Col xs="12" sm="3">
                                        <DefaultInput { ...inputPros } name={ prefix + "otp_sms" }
                                                      label="Codice di controllo" maxLength="6"
                                                      disabled={ !phoneSms || phoneOtp }/>
                                    </Col>
                                    <Col xs="12" sm="3" className="pt-sm-1">
                                        <Button type="button" color="primary" outline={ true } className="mt-sm-3"
                                                onClick={ validatePhone }
                                                disabled={ !phoneSms || phoneOtp }>Conferma e prosegui</Button>
                                    </Col>
                                </>
                        }
                    </Row>
                </DivWithLoading>

                <DivWithLoading isLoading={ intestatarioLoading.email_isLoading }
                                error={ intestatarioLoading.email_error }>
                    <h4 className="mt-3">Verifica email</h4>
                    <p>1. Richiedi l'invio del codice di controllo, lo riceverai immediatamente con un messaggio nella
                        tua
                        posta elettronica. Ti servirà per verificare il tuo indirizzo email. Se l'indirizzo email non è
                        corretto, puoi modificarlo cliccando sull'icona al suo fianco.</p>

                    <Row>
                        <Col xs="12" sm="3">
                            {
                                !emailEdit
                                    ? <DefaultOutput label="Email" output={ intestatario.email }/>
                                    : <DefaultInput { ...inputPros } name={ prefix + "email" }
                                                    label="Email" maxLength="128"/>
                            }
                        </Col>
                        <Col xs="12" sm="6">
                            {
                                !emailOtp &&
                                <>
                                    {
                                        !emailEdit
                                            ? <Button type="button" color="primary" outline={ true } className="mt-3"
                                                      onClick={ editEmail } disabled={ emailOtp }>Modifica</Button>
                                            : <Button type="button" color="primary" outline={ true } className="mt-3"
                                                      onClick={ confirmEmail }>Conferma</Button>
                                    }
                                    {
                                        !emailSent
                                            ?
                                            <Button type="button" color="primary" outline={ true } className="ml-3 mt-3"
                                                    onClick={ sendEmail } disabled={ emailEdit }>Invia codice via
                                                mail</Button>
                                            :
                                            <Button type="button" color="primary" outline={ true } className="ml-3 mt-3"
                                                    onClick={ sendEmail } disabled={ emailOtp }>Rimanda codice via
                                                mail</Button>
                                    }
                                </>
                            }
                        </Col>
                    </Row>

                    <p>2. Inserisci il codice di controllo che ti abbiamo inviato via email per verificare il tuo
                        indirizzo
                        di posta elettronica. Se non hai ricevuto o hai perso l'email, puoi richiedere l'invio di un
                        nuovo
                        codice.</p>

                    <Row>
                        {
                            emailOtp
                                ? <Col xs="12" sm="3">
                                    <DefaultOutput label="Codice di controllo"
                                                   output={ <strong className="positivo">Verificato</strong> }/>
                                </Col>
                                : <>
                                    <Col xs="12" sm="4">
                                        <DefaultInput { ...inputPros } name={ prefix + "otp_email" }
                                                      label="Codice di controllo" maxLength="6"
                                                      disabled={ !emailSent || emailOtp }/>
                                    </Col>
                                    <Col xs="12" sm="4" className="pt-sm-1">
                                        <Button type="button" color="primary" outline={ true } className="mt-sm-3"
                                                onClick={ validateEmail }
                                                disabled={ !emailSent || emailOtp }>Conferma e prosegui</Button>
                                    </Col>
                                </>
                        }
                    </Row>
                </DivWithLoading>
            </DefaultCollapse>
        )
    }
}

class StepForm extends PureComponent {
    constructor(props) {
        super(props);
        const { getStepField, int2disabled, values } = this.props;
        const indexArr = int2disabled ? [0] : [0, 1];
        const loadingDefault = {
            email_isLoading: false,
            email_error: null,
            phone_isLoading: false,
            phone_error: null
        };
        let touchedDefault = {
            email: true,
            prefisso: true,
            numero: true,
            operatore: true,
            otp_sms: true,
            otp_email: true
        };
        let intestatari = indexArr.reduce((arr, index) => {
            arr[index] = {
                email: getStepField(0, "intestatari[" + index + "].email"),
                prefisso: getStepField(0, "intestatari[" + index + "].prefisso"),
                numero: getStepField(0, "intestatari[" + index + "].numero"),
                operatore: getStepField(0, "intestatari[" + index + "].operatore"),
                otp_sms: "",
                otp_email: ""
            };
            return arr;
        }, [{}, {}]);
        let intestatariControl = indexArr.reduce((arr, index) => {
            const intestatario = values.intestatari[index];
            arr[index] = {
                emailEdit: false,
                emailSent: intestatario.verifica_email,
                emailOtp: intestatario.verifica_email,
                phoneEdit: false,
                phoneSms: intestatario.verifica_cellulare,
                phoneOtp: intestatario.verifica_cellulare
            };
            return arr;
        }, [{}, {}]);

        this.state = {
            values: {
                intestatari
            },
            errors: {
                intestatari: [{}, {}]
            },
            touched: {
                intestatari: [touchedDefault, touchedDefault]
            },
            control: {
                intestatari: intestatariControl
            },
            loading: {
                intestatari: [{ ...loadingDefault }, { ...loadingDefault }]
            }
        };

        this.validationBag = {
            handleChange: this.handleChange,
            handelValidation: this.handelValidation,
            handelTokenValidation: this.handelTokenValidation,
            editEmail: this.editEmail,
            editPhone: this.editPhone,
            confirmEmail: this.confirmEmail,
            confirmPhone: this.confirmPhone,
            sendEmail: this.sendEmail,
            sendSMS: this.sendSMS,
            validateEmail: this.validateEmail,
            validatePhone: this.validatePhone
        };
    };

    getIntestatarioIndex = name => name.match(/\[(\d)]/)[1] * 1;

    updateLoading = (index, loading, cb) => {
        this.setState(state => {
            let newLoading = _.cloneDeep(state.loading);

            newLoading.intestatari[index] = {
                ...newLoading.intestatari[index],
                ...loading
            };

            return {
                loading: newLoading
            }
        }, () => {
            if (cb) {
                cb();
            }
        });
    };

    updateControl = (index, control, cb) => {
        this.setState(state => {
            let newControl = _.cloneDeep(state.control);

            newControl.intestatari[index] = {
                ...newControl.intestatari[index],
                ...control
            };

            return {
                control: newControl
            }
        }, () => {
            if (cb) {
                cb();
            }
        });
    };

    handleChange = (e) => {
        const input = e.target;

        this.setState(state => {
            let newValues = _.cloneDeep(state.values);

            _.set(newValues, input.name, input.value);

            return {
                values: newValues
            };
        }, () => {
            const field = input.name.split('.')[1];
            const index = this.getIntestatarioIndex(input.name);
            switch (field) {
                case "email":
                    this.handelValidation(index, "email");
                    break;
                case "prefisso":
                case "numero":
                case "operatore":
                    this.handelValidation(index, "phone");
                    break;
                case "otp_email":
                    this.handelTokenValidation(index, "email");
                    break;
                case "otp_sms":
                    this.handelTokenValidation(index, "sms");
                    break;
                default:
                    break;
            }
        });
    };

    handelValidation = (index, type) => {
        const { int2disabled } = this.props;
        const { values } = this.state;
        const intestatario = 'intestatari[' + index + '].';
        const otherIntestatario = index
            ? 'intestatari[0].'
            : !int2disabled ? 'intestatari[1].' : '';
        let errors = _.cloneDeep(this.state.errors);
        let validateField = new FieldValidation(errors, values);
        let isOK = true;

        if (type === 'email') {
            delete errors.intestatari[index].email;
            const otherEmail = otherIntestatario
                ? otherIntestatario + 'email'
                : '';

            validateField.field(
                intestatario + 'email'
            ).required().email(otherEmail);

            if (errors.intestatari[index].email) {
                isOK = false;
            }
        }

        if (type === 'phone') {
            delete errors.intestatari[index].prefisso;
            delete errors.intestatari[index].numero;
            delete errors.intestatari[index].operatore;

            const otherPrefix = otherIntestatario
                ? otherIntestatario + 'prefisso'
                : '';
            const otherNumber = otherIntestatario
                ? otherIntestatario + 'numero'
                : '';

            validateField.field(intestatario + 'operatore').toSelect();
            validateField.field(
                ''
            ).required().phone(
                intestatario + 'prefisso',
                intestatario + 'numero',
                otherPrefix,
                otherNumber
            );

            if (errors.intestatari[index].prefisso ||
                errors.intestatari[index].numero ||
                errors.intestatari[index].operatore) {
                isOK = false;
            }
        }

        this.setState({
            errors
        });

        return isOK;
    };

    handelTokenValidation = (index, type) => {
        const { values } = this.state;
        const intestatario = 'intestatari[' + index + '].';
        let errors = _.cloneDeep(this.state.errors);
        let validateField = new FieldValidation(errors, values);
        let isOK = true;

        delete errors.intestatari[index]['otp_' + type];

        validateField.field(
            intestatario + 'otp_' + type
        ).required().token();

        if (errors.intestatari[index]['otp_' + type]) {
            isOK = false;
        }

        this.setState({
            errors
        });

        return isOK;
    };

    editEmail = (index) => {
        this.updateControl(index, {
            emailEdit: true,
            emailSent: false
        });
    };

    editPhone = (index) => {
        this.updateControl(index, {
            phoneEdit: true,
            phoneSms: false
        });
    };

    confirmEmail = (index) => {
        if (this.handelValidation(index, 'email')) {
            const intestatario = this.state.values.intestatari[index];
            this.props.setStepField(0, "intestatari[" + index + "].email", intestatario.email);
            this.updateControl(index, {
                emailEdit: false
            });
        }
    };

    confirmPhone = (index) => {
        if (this.handelValidation(index, 'phone')) {
            const intestatario = this.state.values.intestatari[index];
            this.props.setStepField(0, "intestatari[" + index + "].prefisso", intestatario.prefisso);
            this.props.setStepField(0, "intestatari[" + index + "].numero", intestatario.numero);
            this.props.setStepField(0, "intestatari[" + index + "].operatore", intestatario.operatore);
            this.updateControl(index, {
                phoneEdit: false
            });
        }
    };

    sendEmail = (index) => {
        this.makeCall(index, 'email', sendEmailUrl, null, () => {
            this.updateControl(index, {
                emailSent: true
            });
        });
    };

    sendSMS = (index) => {
        this.makeCall(index, 'phone', sendSmsUrl, null, () => {
            this.updateControl(index, {
                phoneSms: true
            });
        });
    };

    validateEmail = (index) => {
        if (this.handelTokenValidation(index, 'email')) {
            this.makeCall(index, 'email', verifyOtpUrl, null, () => {
                this.updateControl(index, {
                    emailOtp: true
                }, () => {
                    this.props.setFieldValue('intestatari[' + index + '].verifica_email', true)
                });
            });
        }
    };

    validatePhone = (index) => {
        if (this.handelTokenValidation(index, 'sms')) {
            this.makeCall(index, 'phone', verifyOtpUrl, null, () => {
                this.updateControl(index, {
                    phoneOtp: true
                }, () => {
                    this.props.setFieldValue('intestatari[' + index + '].verifica_cellulare', true)
                });
            });
        }
    };

    makeCall = (index, type, url, body, cb) => {
        this.updateLoading(index, {
            [type + "_isLoading"]: true,
            [type + "_error"]: null
        }, () => {
            fakeDelay(1000)
                .then(() => fetchHandler(fetch(url, {
                    headers: new Headers({
                        "Accept": "application/json",
                        "Content-Type": "application/json"
                    }),
                    method: (ambiente.isSviluppo || ambiente.isProduzione) ? "POST" : "GET",
                    body: (ambiente.isSviluppo || ambiente.isProduzione) ? JSON.stringify(body) : null
                })))
                .then(results => {
                    if (cb) {
                        cb(results);
                    }
                    this.updateLoading(index, {
                        [type + "_isLoading"]: false
                    });
                }, error => {
                    this.updateLoading(index, {
                        [type + "_isLoading"]: false,
                        [type + "_error"]: error
                    });
                })
        });
    };

    render() {
        const { int2disabled, isSubmitting, moveToPrevStep, openStepModal, getStepField, setStepField, submitForm } = this.props;
        const intestatarioProps = {
            getStepField,
            setStepField,
            ...this.state,
            ...this.validationBag
        };
        return (
            <Form autoComplete="off">
                <h2>Verifica email e cellulare</h2>

                <p>Aletti tutela la tua sicurezza: per questo motivo occorre indicare dei recapiti che appartengano
                    esclusivamente a te e confermarli con la semplice verifica che segue. Assicurati di avere a portata
                    di mano il
                    tuo cellulare e l'accesso alla casella email: ti invieremo un codice di controllo per confermare i
                    tuoi dati. La
                    certificazione dei tuoi recapiti email e cellulare sarà necessaria per attivare e utilizzare il
                    servizio di Firma
                    elettronica.</p>

                <div className="mb-4">
                    <IntestatarioForm index={ 0 } { ...intestatarioProps } />
                </div>

                {
                    !int2disabled &&
                    <div className="mb-4">
                        <IntestatarioForm index={ 1 } { ...intestatarioProps } className="mb-3"/>
                    </div>
                }

                <div className="form-footer-wrap">
                    <div className="form-footer d-flex justify-content-between">
                        <div className="d-flex justify-content-start">
                            <Button type="button" color="secondary" disabled={ isSubmitting }
                                    onClick={ moveToPrevStep } title="Indietro">Indietro</Button>
                        </div>
                        <div className="d-flex justify-content-end">
                            <Button type="button" color="primary" disabled={ isSubmitting } className="mr-3"
                                    onClick={ openStepModal } title="Chiudi scheda">Chiudi</Button>
                            <Button type="button" color="primary" disabled={ isSubmitting }
                                    onClick={ submitForm }>Prosegui</Button>
                        </div>
                    </div>
                </div>
            </Form>
        )
    }
}

export default StepForm;
