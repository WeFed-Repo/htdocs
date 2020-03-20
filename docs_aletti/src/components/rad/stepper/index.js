import React, { Component } from 'react';
import { Button } from 'reactstrap';
import { getDefaultBar, getDefaultSteps, getDefaultObject } from "components/rad/stepper/defaults";
import DefaultModal from "components/parts/DefaultModal";
import Bar from 'components/rad/stepper/Bar';
import Info from 'components/rad/stepper/Info';
import withLoading from 'components/wrappers/withLoading'
import getForm from 'functions/rad/getForm';
import getValidation from 'functions/rad/getValidation';
import isEmptyObject from "functions/isEmptyObject";
import fakeDelay from "functions/fakeDelay";
import fetchHandler from "functions/fetchHandler";
import { ambiente } from "functions/genericVars";
import Notify from 'functions/Notify';
import FlattenJs from "flattenjs";
import _ from "lodash-es/lodash.default";
import './style.css';

const DivWithLoading = withLoading((props) => <div className="stepper" { ...props }/>);
const loadBozzaUrl = (ambiente.isSviluppo || ambiente.isProduzione) ? "" : "/json_data/rad/bozze/bozza.json";
const sendStepUrl = (ambiente.isSviluppo || ambiente.isProduzione) ? "" : "/json_data/rad/stepper/step.json";
const cancelStepUrl = (ambiente.isSviluppo || ambiente.isProduzione) ? "" : "/json_data/rad/stepper/step.json";

class Stepper extends Component {
    constructor(props) {
        super(props);
        this.bozzaId = this.props.match.params.bozzaId;
        this.steps = getDefaultSteps();
        this.bar = getDefaultBar();
        this.sessions = [0, 0];
        this.state = {
            "residenzaEsteraModal": false,
            "stepModal": false,
            "showInfo": false,
            "bar_list": this.bar.list,
            "bar_activeStep": this.bar.activeStep,
            "bar_completedStep": this.bar.completedStep,
            "step_values": this.steps[this.bar.activeStep],
            "step_errors": getDefaultObject(),
            "step_touched": getDefaultObject(),
            "int2disabled": true,
            "isSubmitting": false,
            "isValidating": false,
            "isLoading": !!this.bozzaId,
            "error": null
        };
        this.validationBag = {
            getSteps: this.getSteps,
            getStepField: this.getStepField,
            setStepField: this.setStepField,
            getCurrentSession: this.getCurrentSession,
            setErrors: this.setErrors,
            setValues: this.setValues,
            setTouched: this.setTouched,
            setSubmitting: this.setSubmitting,
            setFieldValue: this.setFieldValue,
            intestatariOnChange: this.intestatariOnChange,
            submitForm: this.submitForm,
            validateForm: this.validateForm,
            startSession: this.startSession,
            endSession: this.endSession
        };
    }

    componentDidMount() {
        if (this.bozzaId) {
            this.loadBozza();
        }
    }

    //region VALIDATION
    setValues = (values, cb) => {
        this.setState({
            "step_values": values
        }, cb);
    };
    setErrors = (errors, cb) => {
        this.setState({
            "step_errors": errors
        }, cb);
    };
    setTouched = (touched, cb) => {
        this.setState({
            "step_touched": touched
        }, cb);
    };
    setSubmitting = (isSubmitting) => {
        this.setState({
            isSubmitting
        });
    };
    setValidating = (isValidating) => {
        this.setState({
            isValidating
        });
    };
    setFieldValue = (field, value, shouldValidate = true) => {
        let newValues = _.cloneDeep(this.state.step_values);

        _.set(newValues, field, value);

        this.setValues(newValues, () => {
            if (shouldValidate) {
                this.validateForm().catch(() => {
                });
            }
        });
    };
    handleChange = (event) => {
        const {
            type,
            name,
            id,
            value,
            checked
        } = event.target;
        let parsed;
        const field = name ? name : id;
        // noinspection CommaExpressionJS
        let val = /number|range/.test(type)
            ? ((parsed = parseFloat(value)), isNaN(parsed) ? '' : parsed)
            : /checkbox/.test(type) ? checked : value;

        this.setFieldValue(field, val);
    };
    intestatariOnChange = (key, value) => {
        this.setState({
            "int2disabled": value !== "2"
        });
    };
    submitForm = () => {
        let flattenvValues, touched;

        this.setSubmitting(true);

        flattenvValues = FlattenJs.convert(this.state.step_values);
        touched = Object.keys(flattenvValues).reduce((obj, field) => {
            _.set(obj, field, true);
            return obj;
        }, getDefaultObject());

        this.setTouched(touched);

        return this.validateForm().then(
            ////() => this.props.onSubmit(values, this.validationBag),
            () => this.sendStep(),
            () => {
                this.setStepStatus(this.state.bar_activeStep, -1);
                this.setSubmitting(false);
            }
        );
    };
    validateForm = () => {
        const prevHasErrors = this.state.bar_list[this.state.bar_activeStep] === -1;
        let doValidation;
        let errors;
        let hasErrors;

        this.setValidating(true);

        doValidation = getValidation(this.state.bar_activeStep);

        errors = doValidation(this.state.step_values, this.state.int2disabled, this.getStepField, this.getCurrentSession);
        hasErrors = !isEmptyObject(errors);

        this.setErrors(errors);

        if (prevHasErrors !== hasErrors) {
            this.setStepStatus(this.state.bar_activeStep, hasErrors ? -1 : 1);
        }

        this.setValidating(false);

        return new Promise((resolve, reject) => {
            if (hasErrors) {
                reject(errors);
            } else {
                resolve();
            }
        });
    };
    //endregion

    /* region STEP BAR */
    moveToStep = (stepNum) => {
        if (stepNum !== this.state.bar_activeStep && stepNum <= (this.state.bar_completedStep + 1)) {
            this.steps[this.state.bar_activeStep] = this.state.step_values;

            this.setState({
                step_values: this.steps[stepNum],
                step_errors: getDefaultObject(),
                step_touched: getDefaultObject(),
                bar_activeStep: stepNum
            });
        }
    };
    moveToPrevStep = () => {
        const activeStep = this.state.bar_activeStep;
        this.moveToStep(activeStep > 0 ? activeStep - 1 : 0);
    };
    moveToNextStep = () => {
        const activeStep = this.state.bar_activeStep;
        const stepsLen = this.state.bar_list.length;
        this.moveToStep(activeStep < stepsLen ? activeStep + 1 : stepsLen);
    };
    setStepStatus = (stepNum, stepStatus) => {
        const bar_list = this.state.bar_list;
        const bar_completedStep = this.state.bar_completedStep;
        let i = 0;

        this.setState({
            bar_list: bar_list.map(s => (i++ === stepNum) ? stepStatus : s),
            bar_completedStep: stepStatus === 1 ? Math.max(stepNum, bar_completedStep) : bar_completedStep
        });
    };
    /* endregion */

    /* region STEPS */
    getSteps = () => {
        let steps = [...this.steps];
        steps[this.state.bar_activeStep] = this.state.step_values;

        return steps;
    };
    getStepField = (stepNum, fieldName) => {
        const stepValues = stepNum === this.state.bar_activeStep ? this.state.step_values : this.steps[stepNum];

        return _.get(stepValues, fieldName);
    };
    setStepField = (stepNum, fieldName, fieldValue) => {
        const stepValues = stepNum === this.state.bar_activeStep ? this.state.step_values : this.steps[stepNum];

        return _.set(stepValues, fieldName, fieldValue);
    };
    makeCall = (url, body, cb) => {
        this.setState({
            "isLoading": true,
            "error": null
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
                    this.setState({
                        isLoading: false
                    });
                }, error => {
                    this.setState({
                        isLoading: false,
                        error
                    });
                })
        });
    };
    loadBozza = () => {
        this.makeCall(loadBozzaUrl, null, results => {
            let nextStepToComplete, completedStep, activeStep;

            this.steps = results.steps;
            this.bar = results.bar;
            activeStep = 5; // Test step

            // Test step
            this.bar.list = this.bar.list.map((step, index) => index < activeStep ? 1 : step);
            this.sessions[0] = 1;

            nextStepToComplete = results.bar.list.findIndex(status => !status);
            completedStep = nextStepToComplete - 1;

            this.setState({
                "int2disabled": results.int2disabled,
                "bar_list": this.bar.list,
                "bar_completedStep": completedStep,
                "bar_activeStep": activeStep,
                "step_values": this.steps[activeStep],
                "step_errors": getDefaultObject(),
                "step_touched": getDefaultObject()
            });
        });
    };
    sendStep = () => {
        this.makeCall(sendStepUrl, null, results => {
            let activeStep = this.state.bar_activeStep;
            if (isEmptyObject(results.validationErrors)) {
                this.setStepStatus(this.state.bar_activeStep, 1);
                this.setState(state => ({
                    "bar_completedStep": state.bar_completedStep >= state.bar_activeStep ? state.bar_completedStep : state.bar_activeStep
                }), () => {
                    if (activeStep < 7) {
                        this.moveToNextStep();
                    }
                });

                if (activeStep < 7) {
                    Notify.success("Step " + (activeStep + 1) + " salvato correttamente.");
                } else {
                    Notify.success("Richiesta inserita correttamente.");
                }
            } else {
                this.setErrors(results.validationErrors);
                this.setStepStatus(this.state.bar_activeStep, -1);
            }
            this.setSubmitting(false);
        });
    };
    closeStep = () => {
        this.props.history.push(`/onboarding/ricerca`);
    };
    saveAndCloseStep = () => {
        this.makeCall(sendStepUrl, null, () => this.props.history.push(`/onboarding/ricerca`));
        this.closeStepModal();
    };
    cancelStep = () => {
        this.makeCall(cancelStepUrl, null, () => this.props.history.push(`/onboarding/ricerca`));
        this.closeStepModal();
    };
    startSession = (intNum) => {
        this.sessions = this.sessions.map((session, index) => index === intNum
            ? 1
            : session === 2
                ? 2
                : 0
        );
    };
    endSession = (intNum) => {
        this.sessions[intNum] = 2
    };
    getCurrentSession = () => {
        return this.sessions[0] === 1
            ? 0
            : this.sessions[1] === 1
                ? 1
                : -1;
    };
    /* endregion */

    /* region MODALS */
    openResidenzaEsteraModal = () => this.setState({ "residenzaEsteraModal": true });
    closeResidenzaEsteraModal = () => this.setState({ "residenzaEsteraModal": false });
    openStepModal = () => this.setState({ "stepModal": true });
    closeStepModal = () => this.setState({ "stepModal": false });
    /* endregion */

    toggleInfo = () => {
        this.setState(state => ({
            "showInfo": !state.showInfo
        }));
    };

    render() {
        const Form = getForm(this.state.bar_activeStep);
        const barProps = {
            "list": this.state.bar_list,
            "activeStep": this.state.bar_activeStep,
            "completedStep": this.state.bar_completedStep,
            "moveToStep": this.moveToStep,
            "toggleInfo": this.toggleInfo,
            "getCurrentSession": this.getCurrentSession,
            "showInfo": this.state.showInfo
        };
        const formProps = {
            "values": this.state.step_values,
            "errors": this.state.step_errors,
            "touched": this.state.step_touched,
            "int2disabled": this.state.int2disabled,
            "residenzaEsteraModal": this.state.residenzaEsteraModal,
            ...this.validationBag,
            handleChange: this.handleChange,
            moveToPrevStep: this.moveToPrevStep,
            moveToNextStep: this.moveToNextStep,
            openResidenzaEsteraModal: this.openResidenzaEsteraModal,
            openStepModal: this.openStepModal
        };

        return (
            <DivWithLoading isLoading={ this.state.isLoading } error={ this.state.error }>
                <Bar { ...barProps } />
                <div className="form-wrap">
                    <h1>Apertura conto</h1>
                    <Form { ...formProps }/>
                </div>

                <Info show={ this.state.showInfo }/>

                <DefaultModal show={ this.state.residenzaEsteraModal }
                              close={ this.closeResidenzaEsteraModal }
                              params={ { "modalTitle": 'Indizi di residenza all\'estero' } }>

                    <p>In qualità di soggetto (anche) fiscalmente non residente in Italia
                        ovvero di sussistenza di indizi di residenza all’estero ti informiamo
                        che non è possibile procedere con l'apertura del rapporto.
                        Rivolgiti alla tua filiale di riferimento per scoprire i prodotti a te
                        riservati. Il tuo Consulente Finanziario ti guiderà nella scelta.</p>

                    <div className="d-flex justify-content-center">
                        <Button type="button" color="primary" className="mx-2"
                                onClick={ this.cancelStep } title="OK">OK</Button>
                    </div>
                </DefaultModal>

                <DefaultModal show={ this.state.stepModal }
                              close={ this.closeStepModal }
                              params={ { "modalTitle": 'Chiusura scheda' } }>

                    <p>Vuoi salvare i dati?</p>

                    <div className="d-flex justify-content-center">
                        <Button type="button" color="secondary" className="mx-2"
                                onClick={ this.closeStep } title="No">No</Button>
                        <Button type="button" color="primary" className="mx-2"
                                onClick={ this.saveAndCloseStep } title="Sì">Sì</Button>
                    </div>
                </DefaultModal>
            </DivWithLoading>
        )
    }
}

export default Stepper;
