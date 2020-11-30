import React, { Component } from 'react';
import DefaultCollapse from "components/parts/DefaultCollapse";
import Form from 'components/parts/Forms';
import { ambiente } from 'functions/genericVars';

class FirmaDocs extends Component {

    constructor(props) {
        super(props);
        this.state= {
            checkstate : "",
            checkcontrolarray: []
        };
        this.generalOnChange=this.generalOnChange.bind(this);
    }

    

    generalOnChange(e) {
        Form.change(this,e);         
    }       


    componentDidMount() {

        // Costruisce l'array per il confronto dei checkbox
        let cca = [];
        this.docobj["accordions"] && this.docobj["accordions"].forEach((v,i)=>{
            v.files && v.files.forEach((val,i2)=>{
                val.checkgroup && val.checkgroup.forEach((value,i3)=>{
                    cca.push("check_"+i+"_"+i2+"_"+i3)
                })
            })
        });
        this.docobj["checkgroup"] && this.docobj["checkgroup"].forEach((v,i)=>{
            cca.push("check_"+ i)
        })

        this.setState({
            checkcontrolarray: cca
        })

    }

    docobj = this.props.docobj;

    allChecked(checkvalue,checkarray) {
        var checkall = (checkvalue.split(",").sort().join(",") === checkarray.sort().join(","));
        return checkall;
    }

    checkedAllFiles(form,allfiles) {
        console.log(allfiles);
        console.log(form);
        let statusok = true;
        allfiles.forEach((v)=>{
            if (v.indexOf("file_")<0 || statusok) {
                if (form[v]!==true) statusok = false;
            }
        });
        return (statusok)
    }
    
    render(){

        let allfiles = [];

        return(
            <section>
                {
                    this.docobj.accordions &&  this.docobj.accordions.map((el,i)=>{
                            return(
                            <DefaultCollapse key={i}
                            label={el.title}
                            className="search-collapse bordered-collapse">
                                <div className="onboarding-block margin-bottom-medium">    
                                { el.files.map((file,i2)=>{
                                    allfiles.push("file_"+i+"_"+i2)
                                    return (
                                        <div key={i2}>
                                            <Form.checkfile className="no-label no-margin-bottom"
                                                name={"file_"+i+"_"+i2}
                                                value={this.state["file_"+i+"_"+i2]}
                                                onChange={this.generalOnChange}
                                                filedescription={file.name}
                                                fileurl={(ambiente.isLocale || ambiente.isLibrerie)? "/json_data/pdf_stream" : "/promotori/onboarding/rest/documentale/"+file.id+"/getDoc"}
                                                download={file.name.replace(" ","_").toLowerCase() + ".pdf"}
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
                                                    output={this.allChecked(this.state.checkstate,this.state.checkcontrolarray)}
                                                    cbchange={(val)=>{ if (this.allChecked(val,this.state.checkcontrolarray)) { this.props.validFunction()} else {this.props.invalidFunction()}} }
                                                    options={file.checkgroup.map((option,index)=>{
                                                
                                                        return ({
                                                            "text":option,
                                                            "value": "check_"+i+"_"+i2+"_"+index
                                                        })
                                                    })}
                                                >
                                                </Form.checkgroup>
                                            }
                                       </div>)})}
                                </div>
                            </DefaultCollapse>
                           )
                    })
                } 
                { this.docobj.checkgroup && 
                    // Checkbox "liberi" condizionati a tutti i file da vedere
            
                    <Form.checkgroup className="no-label"
                        name="checkstate"
                        onChange={this.generalOnChange}
                        value= {this.state.checkstate}
                        disabled={!this.checkedAllFiles(this.state,allfiles)}
                        orientation="vertical"
                        output={this.allChecked(this.state.checkstate,this.state.checkcontrolarray)}
                        cbchange={(val)=>{ if (this.allChecked(val,this.state.checkcontrolarray)) { this.props.validFunction()} else {this.props.invalidFunction()}} }
                        options={this.docobj.checkgroup.map((option,i)=>{
                       
                            return ({
                                "text":option,
                                "value": "check_"+i
                            })
                        })}
                    >
                    </Form.checkgroup>
                }    
            </section>
        )
    }
}

export default FirmaDocs;