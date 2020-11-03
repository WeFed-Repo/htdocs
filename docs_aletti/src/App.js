import React, { Component } from 'react';
import 'functions/genericVars';
import { BrowserRouter } from 'react-router-dom';
import Header from 'components/structure/Header';
import Menu from 'components/structure/Menu';
import Main from 'components/structure/Main';
import { ToastContainer } from 'react-toastify';
import { ambiente } from "functions/genericVars";
import getData from 'functions/getData';
import 'react-toastify/dist/ReactToastify.min.css';
import './App.css';
import { Button } from 'reactstrap';

/* Fix del forEach per UncontrolledCollapse (ReactStrap) su IE */
if (window.NodeList && !NodeList.prototype.forEach) {
    NodeList.prototype.forEach = function (callback, thisArg) {
        thisArg = thisArg || window;
        for (var i = 0; i < this.length; i++) {
            callback.call(thisArg, this[i], i, this);
        }
    };
}

/* Polyfill per Reactstrap Carousel su IE11 (CustomEvent) */
if ( typeof window.CustomEvent !== "function" ) {
    function CustomEvent ( event, params ) {
        params = params || { bubbles: false, cancelable: false, detail: null };
        var evt = document.createEvent( 'CustomEvent' );
        evt.initCustomEvent( event, params.bubbles, params.cancelable, params.detail );
        return evt;
    }
    window.CustomEvent = CustomEvent;
}
 

class App extends Component {
    constructor(props) {
        super(props);
        this.state = {
            hiddenMode: false,
            fsNominativo: "",
            searchData:{},
            userData : [],
            isLoadedUserData : false,
            styleType: (typeof window !== 'undefined' && localStorage.getItem('theme')!==null)? localStorage.getItem('theme') : 'default'
        };
        this.switchPrivacyFunc = this.switchPrivacyFunc.bind(this);
        this.launchSearch = this.launchSearch.bind(this);
        this.goToCustomersSearch = this.goToCustomersSearch.bind(this);
        this.getUserData = this.getUserData.bind(this);

    };
   
    switchPrivacyFunc() {
        this.setState({
            hiddenMode: !this.state.hiddenMode
        });
    }

    launchSearch(value){
        this.setState({
            fsNominativo: value
        })
    }

    goToCustomersSearch(data){
        this.setState({
            searchData: data
        })
    }
    getUserData() {
        let that = this;
        getData ({
            url: {"svil":"/json_data/dati_promotore.json","prod":"/promotori/dashboard/rest/promotore/dati"},
            success: (data)=>{
                that.setState({
                    userData: (data.results)? data.results : [],
                    isLoadedUserData: true
                });
               
            }
        });
    }

    toggleStyle= () => {
        let style = this.state.styleType==='default' ? 'light' : 'default'
        this.setState({
            styleType: style
        },    localStorage.setItem('theme', style)
        )

    };
    
    

    render() {
        if (typeof window !== 'undefined') {
            localStorage.setItem('theme',this.state.styleType);
        }
        return (
            <BrowserRouter>
                <div className={"app" + " " + this.state.styleType}>
                    {ambiente.isLibrerie && <div className="style-type"><Button onClick={ this.toggleStyle } role="button">Stile: <strong>{this.state.styleType}</strong></Button></div>}
                    <Header styleType= { this.state.styleType } switchPrivacyFunc={ this.switchPrivacyFunc } hiddenMode={ this.state.hiddenMode } launchSearch={this.launchSearch} goToCustomersSearch={this.goToCustomersSearch} changefNominativo={this.changefNominativo}  getUserData = {this.getUserData } isLoadedUserData= {this.state.isLoadedUserData} userData ={this.state.userData}/>
                    <Menu hiddenMode={ this.state.hiddenMode } goToCustomersSearch={this.goToCustomersSearch}/>
                    <Main hiddenMode={ this.state.hiddenMode } fsNominativo={this.state.fsNominativo} searchData={this.state.searchData} goToCustomersSearch={this.goToCustomersSearch} getUserData = {this.getUserData } isLoadedUserData= {this.state.isLoadedUserData} userData ={this.state.userData}/>
                    <ToastContainer newestOnTop={ true }/>
             </div>
            </BrowserRouter>
        );
    }
}

export default App;
