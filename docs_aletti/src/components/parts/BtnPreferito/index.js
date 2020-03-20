import React, { PureComponent } from 'react';
import { Button } from 'reactstrap';
import Notify from 'functions/Notify';
import getData from 'functions/getData';
import "./style.scss";


export default class extends PureComponent {

    constructor(props) {

        super(props);
        this.state = {
            isPreferito: false,
            isSetting: false
        }
        this.changePreferito = this.changePreferito.bind(this);

    }

    componentDidMount(){

        this.setState({
            isPreferito: this.props.preferito
        })
    }


    /* Funzioni per gestione dei preferiti */
    changePreferito() {

        // Verifica lo stato del "preferito"
        let urlSetPreferito = {
            "set" : {"svil": "/json_data/simpleEsitoOk.json", "prod": "/promotori/dashboard/rest/configuration/PREFERRED_CLIENT/upsert"},
            "unset": {"svil": "/json_data/simpleEsitoOk.json", "prod": "/promotori/dashboard/rest/configuration/PREFERRED_CLIENT/delete"},
        }

        
        if (!this.state.isSetting) {
            
            let tthis = this,
                mode =  (this.state.isPreferito)? "unset" : "set";

            getData({
                url: urlSetPreferito[mode],
                data: {
                    key: this.props.ndg
                },
                method:"POST",
                success: function(data) {
                    if (data.esito && data.esito.type ==="OK") {
                        tthis.setState({
                            isPreferito: !tthis.state.isPreferito,
                            isSetting: false
                        });

                        if (tthis.props.callback) {
                            tthis.props.callback()
                        }

                        Notify.success(((mode=== "set")? "Il cliente è inserito nei preferiti": "Il cliente non è più tra i preferiti"));
                    }
                    else
                    {
                        Notify.error("Si sono verificati degli errori");
                    }
                }
            })
        }

    }


    render() {
        return (
            <Button key={this.props.ndg} className={"preferito " + ((this.state.isPreferito) ? "on" : "off") + ((this.state.isSetting)? " is-setting" : "")} onClick={()=>this.changePreferito()}>
                    <i className="icon icon-star_fill" title="icon-star_fill"></i><i className="icon icon-star" title="icon-star"></i>
            </Button>
                
        )   
    }

}
