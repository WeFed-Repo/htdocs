import React, { PureComponent } from 'react';
import DefaultOutput from "components/parts/DefaultOutput";
import DefaultSelect from "components/parts/DefaultSelect";
import Rischio from './rischio';
import DatiBancari from './datiBancari';
import { deNull } from 'functions/tableFunctions';

export default class extends PureComponent {
    state = {
        consu: (this.props.data) ? Object.keys(this.props.data)[0] : ""
    };

    changeConsu = e => {
        this.setState({
            consu: e.target.value
        })
    };

    render() {
        let consuData = this.props.data;

        return (
            <div className="bordered-block-select">
                <div className="bordered-block-select-block">
                    { consuData && Object.keys(consuData).length > 1 &&
                    <DefaultSelect label="Consu" name="consu" onChange={ this.changeConsu } loadActive={ true }
                                   values={ this.state }>
                        { Object.keys(consuData).map(function (obj) {
                            return <option key={ obj } value={ obj }>{ obj }</option>
                        }) }
                    </DefaultSelect> }
                    { consuData && Object.keys(consuData).length === 1 &&
                    <DefaultOutput label="Consu" output={ deNull(this.state.consu) }/> }
                </div>
                <div className="bordered-block-select-cont" key={ this.state.consu }>
                    <Rischio data={ consuData && consuData[this.state.consu] && consuData[this.state.consu][0] }/>
                    <DatiBancari ndg={ this.props.ndg } tipocontratto={ this.state.consu }
                                 intestazione={ this.props.intestazione }/>
                </div>
            </div>
        )
    }
}
