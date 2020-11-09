import React, { Component } from 'react';
import DefaultCollapse from "components/parts/DefaultCollapse";
import Form from 'components/parts/Forms';

class FirmaDocs extends Component {

    constructor(props) {
        super(props);
        this.state= {
            checkstate : ""
        };
        this.generalOnChange=this.generalOnChange.bind(this);
    }

    generalOnChange(e) {
        Form.change(this,e);         
    }       

    
    

    render(){

        let docobj = {
            "accordions": [
                {
                    "title": <>Documentazione informativa <strong>Privacy</strong></>,
                    "files": [{
                        "name": "Informativa Privacy",
                        "url":"####",
                        "checkgroup" : [
                            <>Il cliente dichiara di aver preso visione della documentazione informativa precontrattuale che Banca Aletti ha consegnato.</> ,
                            <><strong>Ricezione copia proposta del contratto unitamente a copia di tutti i relativi allegati.</strong><br />Il cliente dichiara di aver ricevuto una copia di tutti i documenti contrattuali</>
                        ]
                    }]
                },
                {
                    "title": <>Documentazione informativa precontrattuale del conto corrente</>,
                    "files": [{
                        "name": "Informativa Privacy",
                        "url":"####",
                        "checkgroup" : [
                            <>Il cliente dichiara di aver preso visione della documentazione informativa precontrattuale che Banca Aletti ha consegnato.</> ,
                            <><strong>Ricezione copia proposta del contratto unitamente a copia di tutti i relativi allegati.</strong><br />Il cliente dichiara di aver ricevuto una copia di tutti i documenti contrattuali</>
                        ]
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
                            {el.files.map((file,i2)=>{
                                return (
                                    <div key={i2}>
                                    <Form.checkfile className="no-label"
                                        name={"file_"+i+"_"+i2}
                                        value={this.state["file_"+i+"_"+i2]}
                                        onChange={this.generalOnChange}
                                        filedescription={file.name}
                                        fileurl={file.url}
                                        filetype="pdf"
                                    >
                                    </Form.checkfile>
                                    {file.checkgroup && 
                                        // Se esistono "sottofiles"
                                        <Form.checkgroup className="no-label"
                                            name="checkstate"
                                            onChange={this.generalOnChange}
                                            value= {this.state.checkstate}
                                            disabled={!(this.state["file_"+i+"_"+i2])}
                                            orientation="vertical"
                                            options={file.checkgroup.map((option,index)=>{
                                                return ({
                                                    "text":option,
                                                    "value": "check_"+i+"_"+i2+"_"+index
                                                })
                                            })}
                                        >
                                        </Form.checkgroup>
                                    }
                                    </div>
                                )
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