import React,{Component} from "react";

export default class extends Component {

    state = {
        step:""
    }

    render() {

        return(
            <>
                <h4>STEP {this.props.step}</h4>
                {this.state.step==="" &&
                <>
                    Elenco documenti
                    Pulsante ""
                </>
                }
            </>
        )

    }

}