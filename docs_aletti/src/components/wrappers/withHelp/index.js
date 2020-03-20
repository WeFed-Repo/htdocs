import React, { PureComponent } from 'react';
import PropTypes from 'prop-types';
import { InputGroup, InputGroupAddon, Popover, PopoverHeader, PopoverBody } from 'reactstrap';
import getDisplayName from 'functions/getDisplayname';
import './style.css';

export default function withHelp(WrappedComponent) {
    class withHelp extends PureComponent {
        constructor(props) {
            super(props);

            this.state = {
                popoverOpen: false
            };

            this.toggle = this.toggle.bind(this);
        }

        toggle() {
            this.setState({
                popoverOpen: !this.state.popoverOpen
            });
        }

        render() {
            const { helpTitle, helpContent, ...passThroughProps } = this.props;
            const idIcon = (passThroughProps.name || passThroughProps.id).replace('[', '').replace(']', '').replace('.', '_');
            let iconProps = {
                id: idIcon + '__help',
                onClick: this.toggle
            };

            return (
                <React.Fragment>
                    <InputGroup>
                        <WrappedComponent { ...passThroughProps } />
                        <InputGroupAddon addonType="append"><i
                            className="icon icon-help_outline" { ...iconProps } /></InputGroupAddon>
                    </InputGroup>
                    <Popover placement="top-end" isOpen={ this.state.popoverOpen } target={ iconProps.id }
                             toggle={ this.toggle }>
                        <PopoverHeader>{ helpTitle }</PopoverHeader>
                        <PopoverBody>{ helpContent }</PopoverBody>
                    </Popover>
                </React.Fragment>
            );
        }
    }

    withHelp.propTypes = {
        helpTitle: PropTypes.string,
        helpContent: PropTypes.node
    };

    withHelp.displayName = 'withHelp(' + getDisplayName(WrappedComponent) + ')';

    return withHelp;
};
