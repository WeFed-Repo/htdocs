import React, { Component } from 'react';
import DefaultCollapse from "components/parts/DefaultCollapse";
import Form from 'components/parts/Forms';

class FirmaDocs extends Component {

    constructor(props) {
        super(props);
        this.state= {
            checkstate : "",
            checkcontrolarray: []
        };
        this.generalOnChange=this.generalOnChange.bind(this);
    }

    docobj = {
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

    generalOnChange(e) {
        Form.change(this,e);         
    }       


    componentDidMount() {

        // Costruisce l'array per il confronto dei checkbox
        let cca = [];
        this.docobj["accordions"].forEach((v,i)=>{
            v.files.forEach((val,i2)=>{
                val.checkgroup.forEach((value,i3)=>{
                    cca.push("check_"+i+"_"+i2+"_"+i3)
                })
            })
        });
        this.docobj["checkgroup"].forEach((v,i)=>{
            cca.push("check_"+ i)
        })

        this.setState({
            checkcontrolarray: cca
        })

    }

    allChecked(checkvalue,checkarray) {
        var checkall = (checkvalue.split(",").sort().join(",") === checkarray.sort().join(","));
        return checkall;
    }
    
    render(){

        

        return(
            <section>
                {
                    this.docobj.accordions &&  this.docobj.accordions.map((el,i)=>{
                            return(
                            <DefaultCollapse key={i}
                            label={el.title}
                            className="search-collapse">
                            {el.files.map((file,i2)=>{
                                return (
                                    <div key={i2} className="margin-bottom-medium">
                                    <Form.checkfile className={"no-label " + (file.checkgroup && "no-margin-bottom")}
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
                                            cbchange={(val)=>{ if (this.allChecked(val,this.state.checkcontrolarray)) this.props.validFunction()} }
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
                { this.docobj.checkgroup && 
                    
            
                    <Form.checkgroup className="no-label"
                        name="checkstate"
                        onChange={this.generalOnChange}
                        value= {this.state.checkstate}
                        orientation="vertical"
                        cbchange={(val)=>{ if (this.allChecked(val,this.state.checkcontrolarray)) this.props.validFunction()} }
                        options={this.docobj.checkgroup.map((option,i)=>{
                       
                            return ({
                                "text":option,
                                "value": "check_"+i
                            })
                        })}
                    >
                    </Form.checkgroup>
                }    
            
                                                    
                <a onClick={this.props.validFunction}>Valida firma</a>
            </section>
        )
    }
}

export default FirmaDocs;