import React, {PureComponent} from 'react';
import {NavLink} from "react-router-dom"
import './style.scss';

class HeaderSearchBar extends PureComponent {

    constructor(props) {
        super(props);
        this.state = {
            opened: false,
            selectValue: "nome",
            form_nome: "",
            form_ndg: "",
            form_strumento: ""
        }
        /*
        this.toggleSearch = this.toggleSearch.bind(this);
        */
        this.updateSelectValue = this.updateSelectValue.bind(this);
        this.updateInputValue = this.updateInputValue.bind(this);
    }

    updateSelectValue(e){
        this.setState({
            selectValue: e.target.value,
            form_nome:"",
            form_ndg:"",
            form_strumento: ""
        });
    }

    updateInputValue(e,mask){
        let filteredvalue = e.target.value;
        // Applica un filtro se necessario
        if(mask) {
           if (mask === "number"){
                filteredvalue = filteredvalue.replace(/\D/g,'')
           }
        }
        this.setState({
            [e.target.name]:filteredvalue
        })
    }


    render(){

        let activeRicerca = (this.state.form_nome.length>=3 || this.state.form_ndg.length>=3 || this.state.form_strumento.length>=3)? true : false;

        return(
            <div className={"hsb" + ((this.state.opened)?" opened": "")}>
                <select className="form-control" onChange={this.updateSelectValue} value={this.state.selectValue}>
                    <option value="nome">Nome cliente</option>
                    <option value="ndg">NDG cliente</option>
                    <option value="strumento">Strumento</option>
                </select>
                <input className="form-control" name="form_nome" maxLength="50" placeholder="Ricerca..." onChange={this.updateInputValue} value={this.state.form_nome} style={(this.state.selectValue!=="nome")? {display:"none"}:{}}></input>
                <input className="form-control" name="form_ndg" maxLength="20" placeholder="Ricerca..." onChange={(e)=>this.updateInputValue(e,"number")} value={this.state.form_ndg} style={(this.state.selectValue!=="ndg")? {display:"none"}:{}}></input>
                <input className="form-control" name="form_strumento" maxLength="20" placeholder="Ricerca..." onChange={this.updateInputValue} value={this.state.form_strumento} style={(this.state.selectValue!=="strumento")? {display:"none"}:{}}></input>
                <div className="search-btn search-toggle" onClick={()=>this.setState({opened:true})} title="Attiva ricerca libera"><i className="icon icon-zoom_big"></i></div>
                <div className="search-btn search-annulla" title="Annulla ricerca" onClick={()=>this.setState({opened:false})} style={{display: (activeRicerca)? "none" : "inline-block"}}><i>&times;</i></div>
                <NavLink to="/customerssearch" title="Ricerca" className="search-btn search-go"  style={{display: (activeRicerca)? "inline-block" : "none"}} onClick={()=>{this.setState({opened:true});this.props.goToCustomersSearch({categoria: "TUTTI", nome:this.state.form_nome,ndg:this.state.form_ndg, strumento: this.state.form_strumento })}}><i className="icon icon-zoom_big"></i></NavLink>
            </div>
        )

    }
}

export default HeaderSearchBar;