import React, { PureComponent } from 'react';
import PropTypes from 'prop-types';

class Session extends PureComponent {
    render() {
        const { activeStep, currentSession } = this.props;
        let sessionText;

        if (activeStep < 2) {
            sessionText = 'CONSULENTE FINANZIARIO'
        } else {
            sessionText = 'INTESTATARIO ' + (currentSession + 1);
        }

        return <div className="session">
            Sessione <strong>{ sessionText }</strong><br/>
        </div>;
    }
}

Session.propTypes = {
    activeStep: PropTypes.number.isRequired,
    currentSession: PropTypes.number.isRequired
};

export default Session;
