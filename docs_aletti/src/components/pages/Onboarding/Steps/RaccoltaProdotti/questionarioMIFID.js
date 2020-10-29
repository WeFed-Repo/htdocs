import React, { Component } from 'react';
import {ambiente} from "functions/genericVars";

export default class extends Component {

    componentDidMount() {
        let tthis = this;
        window.setMifid = function(obj){
            tthis.props.setObState({field_sessionfirmeblob_idmifid: obj.idQuestionario, questMifid: false})
        }
     }
 

    render() {

     
        let iframeSrc = (ambiente.name==="locale")? "/_iframe_testing.htm" : "/promotori/dashboard/goToMifidQuest";

        return(<>
                <button onClick={()=>window.setMifid({idQuestionario:Math.random()})}>Termina questionario</button>
                <iframe className="iframe-resp" name="iframe_mifid" src={iframeSrc}></iframe>
            </>
        )

    }

}