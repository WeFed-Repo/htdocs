import React, {PureComponent} from 'react';
import DefaultModal from 'components/parts/DefaultModal';
import HelpCont from './contents.js';
import './style.scss';


export default class extends PureComponent {

    constructor(props) {
        super(props);
        this.state = {
            isHelpOpened: false
        }
        this.openHelp = this.openHelp.bind(this);
        this.closeHelp = this.closeHelp.bind(this);
    }

    openHelp (params) {
        this.setState({
          isHelpOpened: true
        })
    }

    closeHelp () {
        this.setState({
          isHelpOpened: false
        })
    }

    render() {
        return(
            <div className="help">
                <DefaultModal show={this.state.isHelpOpened} close={this.closeHelp} params={{modalTitle: "Help" }}>
                    <HelpCont arg={this.props.arg} />
                </DefaultModal>
                <span className="opener" onClick={this.openHelp}><i className="icon icon-info_fill"></i></span>
            </div>

        )
    }

}
