import React, { Component } from 'react';
import DefaultCollapse from "components/parts/DefaultCollapse";
import Form from 'components/parts/Forms';

class FirmaDocs extends Component {

    render(){

        let docobj = {
            "accordions": [
                {
                    "title": <>Documentazione informativa <strong>Privacy</strong></>,
                    "files": [{
                        "name": "Informativa Privacy",
                        "url":"####",
                    }]
                },
                {
                    "title": <>Documentazione informativa precontrattuale del conto corrente</>,
                    "files": [{
                        "name": "Informativa Privacy",
                        "url":"####",
                    }]
                }]
            ,
            "checkgroup" : [
                    <>Il cliente dichiara di aver preso visione della documentazione informativa precontrattuale che Banca Aletti ha consegnato.</> ,
                    <><strong>Ricezione copia proposta del contratto unitamente a copia di tutti i relativi allegati.</strong><br />Il cliente dichiara di aver ricevuto una copia di tutti i documenti contrattuali</>
                ]
            
            }

        return(
            <section>
                {
                    docobj.accordions &&  docobj.accordions.map((el,i)=>{
                            return(
                            <DefaultCollapse key={i}
                            label={el.title}
                            className="search-collapse">
                            {el.files.map((file)=>{
                                return ("A")
                            })}
                            </DefaultCollapse>
                           )
                    })
                }                
                <a onClick={this.props.validFunction}>Valida firma</a>
            </section>
        )
    }
}

export default FirmaDocs;