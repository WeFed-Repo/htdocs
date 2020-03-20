import React, { PureComponent } from 'react';
import PropTypes from 'prop-types';
import './style.css';

class FileLink extends PureComponent {
    constructor(props) {
        super(props);
        this.state = {
            clicked: false
        };
        this.handleClick = this.handleClick.bind(this);
        this.renderChildren = this.renderChildren.bind(this);
    }

    handleClick() {
        if (!this.state.clicked) {
            this.setState({
                clicked: true
            });
        }
    }

    renderChildren() {
        return React.Children.map(this.props.children, child => {
            return React.cloneElement(child, {
                disabled: !this.state.clicked
            })
        }, this);
    }

    render() {
        const { link, label, ...passedThroughProps } = this.props;
        return (
            <div className="filelink">
                <div className="filelink-wrap d-flex flex-row justify-content-start align-items-start">
                    <i className="icon icon-file_pdf_fill"/>
                    <a href={link} onClick={ this.handleClick } className="filelink-label" target="_blank"
                       rel="noopener noreferrer" {...passedThroughProps}>{ label }</a>
                </div>
                { this.renderChildren() }
            </div>
        )
    }
}

FileLink.propTypes = {
    label: PropTypes.string.isRequired,
    link: PropTypes.string.isRequired
};

export default FileLink;
