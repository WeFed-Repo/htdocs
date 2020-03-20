import React, {Component} from 'react';




export default class extends Component {
    render() {
        return(
            


            <div>

                {this.props.contents==='first' && <p>primo contenuto</p>}
                {this.props.contents==='second' && <p>sec contenuto</p>}
                <h1>Documentazione</h1>
                {this.props.contents==='first' && <p>primo contenuto</p>}
                {this.props.contents==='second' && <p>sec contenuto</p>}
            </div>
           
        )
    }
}