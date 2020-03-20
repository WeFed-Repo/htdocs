import React, { Component } from 'react';
import PropTypes from 'prop-types';
import { FormGroup, Label } from 'reactstrap';
import DefaultCheck from 'components/parts/DefaultCheck';
import _ from "lodash-es";
import './style.css';

class DefaultCheckGroup extends Component {
    render() {
        const { label, checks, ...inputProps } = this.props;
        let groupProps = {
            className: "defaultcheckgroup"
        };
        let groupInvalid = false;
        let extendedChecks;

        inputProps.type = "checkbox";

        extendedChecks = checks.map(check => {
            if (!!_.get(this.props.touched, check.name) && !!_.get(this.props.errors, check.name)) {
                groupInvalid = true;
            }
            return check;
        });

        if (this.props.hasOwnProperty('disabled')) {
            groupProps.disabled = this.props.disabled;
            inputProps.disabled = this.props.disabled;
        }

        if (groupInvalid) {
            groupProps.className += " error";
        }

        return (
            <FormGroup { ...groupProps }>
                { label && <Label>{ label } </Label> }
                <div>
                    { extendedChecks.map(check => <DefaultCheck key={ check.name } { ...inputProps } { ...check }/>) }
                </div>
            </FormGroup>
        );
    }
}

DefaultCheckGroup.propTypes = {
    checks: PropTypes.arrayOf(PropTypes.shape({
        name: PropTypes.string,
        label: PropTypes.string
    }))
};

export default DefaultCheckGroup;
