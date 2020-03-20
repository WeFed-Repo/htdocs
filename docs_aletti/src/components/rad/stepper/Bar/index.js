import React, { PureComponent } from 'react';
import PropTypes from "prop-types";
import Session from 'components/rad/stepper/Bar/Session';
import { Button } from 'reactstrap';
import './style.css';

class Bar extends PureComponent {
    handleClick = e => {
        e.preventDefault();
        this.props.moveToStep(e.currentTarget.dataset.step * 1);
    };

    render() {
        const { list, activeStep, completedStep, showInfo, toggleInfo, getCurrentSession } = this.props;
        const infoButtonText = showInfo ? "Chiudi info" : "Apri info";
        let openIdx = Math.min(completedStep + 1, list.length);
        let idx = 0;
         return (
            <div className="bar-wrap">
                <div className="bar d-flex justify-content-between">
                    <div className="d-flex justify-content-start">
                        <ul className="steps">
                            {
                                list.map(step => {
                                    let stepIdx = idx;
                                    let stepNum = ++idx;
                                    let stepProps = {
                                        "key": stepIdx,
                                        "data-step": stepIdx,
                                        "className": 'bar-step'
                                    };
                                    const isOpen = stepIdx <= openIdx;
                                    const isActive = stepIdx === Number(activeStep);
                                    switch (step) {
                                        case -1:
                                            stepProps.className += " invalid";
                                            break;
                                        case 1:
                                            stepProps.className += " valid";
                                            break;
                                        default: /* 0 */
                                            stepProps.className += " empty";
                                            break;
                                    }
                                    if (isActive) {
                                        stepProps.className += " active";
                                    }
                                    if (isOpen) {
                                        stepProps.className += " open";
                                        if (!isActive) {
                                            stepProps.onClick = this.handleClick
                                        }
                                    }
                                    return (
                                        <li { ...stepProps }>
                                            <span className="bar-step-num">{ stepNum }</span>
                                        </li>
                                    );
                                })
                            }
                        </ul>
                    </div>
                    <div className="d-flex justify-content-end">
                        <Session activeStep={ activeStep } currentSession={ getCurrentSession() }/>
                        <div className="info-btn">
                            <Button color="primary" outline block={ true }
                                    onClick={ toggleInfo }>{ infoButtonText }</Button>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

Bar.propTypes = {
    "activeStep": PropTypes.number.isRequired,
    "completedStep": PropTypes.number.isRequired,
    "list": PropTypes.arrayOf(PropTypes.number).isRequired,
    "moveToStep": PropTypes.func.isRequired
};

export default Bar;