import React, { PureComponent } from 'react';
import { FormGroup, Label, Input } from 'reactstrap';
import './style.css';

class DefaultOutput extends PureComponent {
    render() {
        const { label, output, className, ...inputProps } = this.props;

        return (
            <FormGroup className={ className }>
                <Label>{ label }</Label>
                <Input { ...inputProps } plaintext>{ output }</Input>
            </FormGroup>
        );
    }
}

export default DefaultOutput;