import React, {PureComponent} from 'react';
import "./style.scss";

export default class extends PureComponent {

    render() {

        return(
            <div className={"privacy-switch" + ((this.props.hiddenMode === true)? " hiddenmode": "")} onClick={this.props.switchPrivacyFunc}>
                <i className="icon icon-show"></i>
                <i className="icon icon-hide"></i>
            </div>
        )

    }


}
