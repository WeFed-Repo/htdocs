import React, { Component } from 'react';

export default class extends Component {

    render() {

        return(
            <div className="iframe-resp">
                <h3>questionario MIFID</h3>
                <a rel="nofollow" onClick={()=>this.props.setObState({field_sessionfirmeblob_idmifid: parseInt(Math.random()*50000), questMifid: false})}>Termina compilazione questionario</a>
            </div>
            
        )

    }

}