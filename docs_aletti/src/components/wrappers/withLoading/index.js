import React, {Component} from 'react';
import PropTypes from 'prop-types';
import { Button } from 'reactstrap';
import getDisplayName from 'functions/getDisplayname';
import './style.css';

export default function withLoading(WrappedComponent) {
    class withLoading extends Component {
        render() {
            const { isLoading, pastDelay, timedOut, error, message, reset, style, ...passThroughProps } = this.props;
            const messageOrLoading = isLoading || pastDelay || timedOut || error || message;
            const msg = error ? (error.message || error) : (message || '');
            const styleProps = {};

            if (style && style.display) {
                styleProps.style = { display: style.display };
            }

            return (
                <div className="withloading" {...styleProps}>
                    { messageOrLoading && (
                        <div className="withloading-content">{
                        msg !== ''
                                ? <div className="withloading-msg">
                                    <p className="withloading-msg-text">{msg}</p>
                                    { reset && (
                                        <p className="withloading-msg-btn"><Button onClick={reset}>Chiudi</Button></p>
                                    )}
                                    </div>
                                : <i className="icon icon-update withloading-icon"/>
                        }</div>
                    )}
                    { WrappedComponent && <WrappedComponent {...passThroughProps} /> }
                </div>
            );
        }
    }
    withLoading.propTypes = {
        isLoading: PropTypes.bool,
        pastDelay: PropTypes.bool,
        timedOut: PropTypes.bool,
        error: PropTypes.oneOfType([
            PropTypes.bool,
            PropTypes.instanceOf(Error)
        ]),
        retry: PropTypes.func,
        reset: PropTypes.func,
        message: PropTypes.string
    };
    withLoading.displayName = 'withLoading(' + getDisplayName(WrappedComponent) + ')';
    return withLoading;
};
