import React, { PureComponent } from 'react';
import { FormGroup, Label, Input, InputGroupAddon, Button, InputGroup } from 'reactstrap';
import './style.css';
import DefaultOutput from "../DefaultOutput";
import _ from "lodash-es/lodash.default";

class DefaultOutputWithModify extends PureComponent {
    render() {
        const { label, output, handleModify, ...inputProps } = this.props;

        return (
            <FormGroup className="output-with-modify">
                <Label>{ label }</Label>
                <InputGroup>
                    <Input { ...inputProps } plaintext>{ output }</Input>
                    <InputGroupAddon addonType="append">
                        <Button type="button" color="primary" outline={ true }
                                onClick={ handleModify } title="Modifica">Modifica</Button>
                    </InputGroupAddon>
                </InputGroup>
            </FormGroup>
        );
    }
}

export default DefaultOutputWithModify;