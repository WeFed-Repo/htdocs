import React, { PureComponent } from 'react';
import { Row, Col } from 'reactstrap';
import DefaultSelect from "components/parts/DefaultSelect";
import DefaultOutput from "components/parts/DefaultOutput";
import UltimiMovimenti from "./movimenti/Ultimi";
import UltimiDocumenti from "./documenti/Ultimi";

export default class extends PureComponent {
    state = {
        conto: (this.props.conti && Object.keys(this.props.conti)[0]) ? Object.keys(this.props.conti)[0] : ""
    };

    changeConto = e => {
        this.setState({
            conto: e.target.value
        });
    };

    render() {
        if (this.props.conti) {
            let contiData = this.props.conti;

            return (
                <div className="bordered-block-select no-border">
                    <div className="bordered-block-select-block">
                        { (contiData && Object.keys(contiData).length > 1) &&
                        <DefaultSelect label="Conto" name="conto" onChange={ this.changeConto } loadActive={ true }
                                       values={ this.state }>
                            { Object.keys(contiData).map(function (obj, i) {
                                return <option key={ "conto" + i } value={ obj }>{ obj }</option>
                            }) }
                        </DefaultSelect>
                        }
                        { contiData && Object.keys(contiData).length === 1 &&
                        <DefaultOutput label="Conto" output={ Object.keys(contiData)[0] }/> }
                    </div>
                    <div className="bordered-block-select-cont" key={ this.state.conto }>
                        <Row>
                            <Col lg="6">
                                <h2>Ultimi movimenti</h2>
                                <UltimiMovimenti conti={ this.props.conti } conto={ this.state.conto }
                                                 intestazione={ this.props.intestazione }/>
                            </Col>
                            <Col lg="6">
                                <h2>Ultimi documenti</h2>
                                <UltimiDocumenti contoData={ this.props.conti[this.state.conto] }
                                                 intestazione={ this.props.intestazione }/>
                            </Col>
                        </Row>
                    </div>
                </div>
            )
        } else {
            return ("Nessun conto disponibile");
        }
    }
}
