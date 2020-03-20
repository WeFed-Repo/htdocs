import React, { PureComponent } from 'react';
import PropTypes from 'prop-types';
import { Card, CardHeader, Collapse } from "reactstrap";
import DefaultCheck from 'components/parts/DefaultCheck';
import './style.css';
import _ from "lodash-es/lodash.default";

class DefaultCheckCollapse extends PureComponent {
    toggleCollapse = () => {
        const { disabled, name, values, customChange } = this.props;
        if (!disabled) {
            const value = _.get(values, name);
            customChange(name, !value);
        }
    };

    render() {
        const { disabled, hasErrors, label, name, values, onChange } = this.props;
        const value = _.get(values, name);
        const isOpen = !disabled && value;
        const errors = hasErrors ? { [name]: "..." } : {};
        const touched = hasErrors ? { [name]: true } : {};
        const checkProps = {
            name,
            label,
            disabled,
            errors,
            touched,
            value,
            onChange
        };
        let cardProps = {
            className: "default-check-collapse"
        };
        let tag = 'h4';

        if (this.props.isParent) {
            cardProps.className += ' parent';
            tag = 'h3';
        }

        if (this.props.className) {
            cardProps.className += ' ' + this.props.className;
        }

        if (disabled) {
            cardProps.className += " default-check-collapse-disabled"
        } else {
            if (isOpen) {
                cardProps.className += " default-check-collapse-open"
            }
            if (hasErrors) {
                cardProps.className += " default-check-collapse-errors"
            }
        }

        return (
            <Card { ...cardProps }>
                <CardHeader tag={ tag } onClick={ this.toggleCollapse }>
                    <DefaultCheck { ...checkProps } />
                    <div className="no-select"/>
                </CardHeader>
                <Collapse isOpen={ isOpen }>
                    <div className="default-check-collapse-wrap">
                        { this.props.children }
                    </div>
                </Collapse>
            </Card>
        )
    }
}

DefaultCheckCollapse.propTypes = {
    name: PropTypes.string.isRequired,
    label: PropTypes.string.isRequired,
    disabled: PropTypes.bool,
    startsOpen: PropTypes.bool,
    isParent: PropTypes.bool
};

export default DefaultCheckCollapse;
