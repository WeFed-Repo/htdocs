import React, { PureComponent } from 'react';
import PropTypes from 'prop-types';
import { Modal, ModalHeader, ModalBody } from 'reactstrap';
import './style.scss'

class DefaultModal extends PureComponent {
    render() {
        return (
            this.props.show &&
            <Modal isOpen={ this.props.show } { ...this.props.modalProps } className={ this.props.className } >
                <ModalHeader toggle={ this.props.close }>{ this.props.params.modalTitle }</ModalHeader>
                <ModalBody>{ this.props.children }</ModalBody>
            </Modal>
        )
    }
}

DefaultModal.propType = {
    show: PropTypes.bool.isRequired,
    close: PropTypes.func.isRequired,
    params: PropTypes.shape({
        modalTitle: PropTypes.string.isRequired
    }).isRequired
};

export default DefaultModal;
