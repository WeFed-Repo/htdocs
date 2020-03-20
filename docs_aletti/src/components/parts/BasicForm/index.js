import React, { Component } from 'react';
import { FormGroup, Label, FormFeedback} from 'reactstrap';
import MomentLocaleUtils from "react-day-picker/moment";
import {DayPickerInputIt} from "components/parts/DayPickerIt";

import "./style.scss";

class FormInput extends Component {
   
    render() {

        /* Default type data*/
        let defaultProps = {
            label: "",
            className: "form-control",
            maxLength: 100,
            error: ""
        }

        let inputProps = Object.assign(defaultProps,this.props.params);

        return (
            <FormGroup className={(inputProps.error)?"error":""}>
                {inputProps.label && <Label>{inputProps.label} </Label> }
                <input {...inputProps}/>
                {inputProps.error && <FormFeedback>{inputProps.error}</FormFeedback>}
            </FormGroup>
        );
    }
}

class FormOutput extends Component {
   
    render() {

        /* Default type data*/
        let defaultProps = {
            label: "",
            className: "form-control output",
        }

        let inputProps = Object.assign(defaultProps,this.props.params);

        return (
            <FormGroup>
                <Label>{inputProps.label}</Label>
                <input type="hidden" ref={inputProps.ref} defaultValue={inputProps.defaultValue}/>
                <span className={inputProps.className}>{inputProps.defaultValue}</span>
            </FormGroup>
        );
    }
}

class FormVisualRadio extends Component {

    constructor(props){
        super(props);
        this.state={
            fvrVal: (this.props.params.defaultValue)? this.props.params.defaultValue : ""
        };
        this.changeVRvalue=this.changeVRvalue.bind(this);
    }

    componentDidMount(){
        this.props.params.changeFunction(this.props.params.defaultValue);
    }


    changeVRvalue(val) {
        
        this.setState({
            fvrVal: val
        });
        this.props.params.changeFunction(val);
    }


    render() {
         /* Default type data*/
         let defaultProps = {
            label: ""
        }
        let inputProps = Object.assign(defaultProps,this.props.params);
        let tthis = this;

        return (
            <FormGroup className={inputProps.error && "error"}>
                <Label>{inputProps.label}</Label>
                <input type="hidden" value={this.state.fvrVal} ref={inputProps.ref} name={inputProps.name}/>
                <div className="form-visual-radio">
                    {
                        inputProps.values && inputProps.values.map(function(v,i){
                            return(<div className={"button " + ((tthis.state.fvrVal===v.value)? "selected": "")} key={i} onClick={()=>{tthis.changeVRvalue(v.value)}}>{v.label}</div>)
                        })
                    }
                </div>
                {inputProps.error && <FormFeedback>{inputProps.error}</FormFeedback>}
            </FormGroup>
        );

    }

}

class FormDayPicker extends Component {

    render(){

        /* Default type data*/
        let defaultProps = {
                label: "",
                dayPickerProps: {
                    locale: "it",
                    localeUtils: MomentLocaleUtils
                }
            } 
        let inputProps = Object.assign(defaultProps,this.props.params);

        return(
            <FormGroup className={inputProps.error && "error"}>
                    <Label>{inputProps.label}</Label>
                    <DayPickerInputIt value={inputProps.defaultValue} inputProps={{ref:inputProps.ref,readOnly:true,className:"form-control"}}></DayPickerInputIt>
            </FormGroup>      
            )
    
    }    
}

class FormSelect extends Component {

    render(){

        let defaultProps = {
            label: "",
            className: "form-control",
            error: ""
        } 
        let inputProps = Object.assign(defaultProps,this.props.params);

        // Se esiste un Placeholder, aggiunge una "prima" option con il placeholder, altrimenti va in default sul primo valore assegnato
        
        return(
            <FormGroup className={inputProps.error && "error"}>
                    <Label>{inputProps.label}</Label>
                    <select name={inputProps.name} ref={inputProps.ref} className={inputProps.className} defaultValue={inputProps.defaultValue}>
                        {inputProps.placeholder && <option key={0.1} value={""}>{inputProps.placeholder}</option>}
                        {inputProps.values.map(function(v,i){
                            return(
                                <option key={i} value={v.value}>{v.label}</option>
                            )}
                        )}

                    </select>
                    {inputProps.error && <FormFeedback>{inputProps.error}</FormFeedback>}
            </FormGroup>  
        )

    }

}

export {FormInput,FormOutput,FormVisualRadio, FormDayPicker, FormSelect};