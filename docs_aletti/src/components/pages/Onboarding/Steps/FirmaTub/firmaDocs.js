import React, { Component } from 'react';

class FirmaDocs extends Component {
    
    render(){
        return(
            <section>
                <p>Elemento autoconsistente per firma finale al quale viene appeso una volta valido, l'otp per la firma finale</p>
                <a onClick={this.props.validFunction}>Valida firma</a>
            </section>
        )
    }
}

export default FirmaDocs;