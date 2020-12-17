import React, { Component } from 'react';
import { NavLink } from 'react-router-dom';
import { Nav, NavItem } from 'reactstrap';
import { ambiente } from 'functions/genericVars';
import './style.css';

class Menu extends Component {
    constructor(props) {
        super(props);
        this.state = {
            isModalOpened: false,
            modalParams: null,
            isMenuOpened: false,
        };
        this.openModal = this.openModal.bind(this);
        this.closeModal = this.closeModal.bind(this);
        this.toggleMenu = this.toggleMenu.bind(this);
        this.closeMenu = this.closeMenu.bind(this);
    }

    toggleMenu() {
        this.setState({
            isMenuOpened: !this.state.isMenuOpened
        })
    }

    closeMenu() {
        this.setState({
            isMenuOpened: false
        })
    }

    openModal(params) {
        this.setState({
            isModalOpened: true,
            modalParams: params
        })
    }

    closeModal() {
        this.setState({
            isModalOpened: false,
            modalParams: null
        })
    }

    render() {
        return (
            <nav className={ "menu " + ((this.state.isMenuOpened) ? "opened" : "") }>
                <div className='menu-button'><i className="icon icon-2x icon-arrow_right_filled"
                                                onClick={ this.toggleMenu }/></div>
                <Nav vertical className={ "menu-list" + ((this.props.hiddenMode) ? " hiddenmode" : "") }
                     onClick={ this.closeMenu }>
                    <NavItem  title="Dashboard">
                        <NavLink className='nav-link' activeClassName='active' to="/" exact><i
                            className="icon icon-2x icon-grafico_torta_filled"/><span
                            className='menu-name'>Cruscotto</span></NavLink>
                    </NavItem>
                    <NavItem  title="Portafoglio clienti">
                        <NavLink className='nav-link' activeClassName='active' to="/customerssearch"
                                 onClick={ () => this.props.goToCustomersSearch({ categoria: "TUTTI" }) }><i
                            className="icon icon-2x icon-r-famiglia"/><span
                            className='menu-name'>Portafoglio clienti</span></NavLink>
                    </NavItem>
                    <NavItem style={ { display: "none" } }>
                        <span className='nav-link disabled'><i className="icon icon-2x icon-big-movimenti"/><span
                            className='menu-name'>Sit. portafoglio</span></span>
                        <NavLink className='nav-link hidden' activeClassName='active' to="/commissioning"><i
                            className="icon icon-2x icon-big-movimenti"/><span
                            className='menu-name'>Sit. portafoglio</span></NavLink>
                    </NavItem>
                    {(window.localStorage["debugstate"] && window.localStorage["debugstate"]==="attivo") && <>
                    <NavItem title="Onboarding">
                        <NavLink className='nav-link' activeClassName='active' to="/onboarding">
                            <i className="icon icon-2x icon-attualita_filled"/><span
                            className='menu-name'>Onboarding</span>
                        </NavLink>
                    </NavItem>
                    <NavItem title="Gestione bozze">
                        <NavLink className='nav-link' activeClassName='active' to="/gestionebozze">
                            <i className="icon icon-2x icon-attach_filled"/><span className='menu-name'>Gestione bozze</span>
                        </NavLink>
                    </NavItem>
                    </>
                    }
                    {/*
                    <NavItem style={ { display: "none" } }>
                        <NavLink className='nav-link' activeClassName='active' to="/onboarding/ricerca"><i
                            className="icon icon-2x icon-attualita_filled"/><span
                            className='menu-name'>Onboarding</span></NavLink>
                        <NavLink className='nav-link sub-nav' activeClassName='active' to="/onboarding/ricerca"><i
                            className="icon icon-arrow_right"/><span
                            className='menu-name'>Ricerca richieste</span></NavLink>
                        <NavLink className='nav-link sub-nav' activeClassName='active' to="/onboarding/inserimento"><i
                            className="icon icon-arrow_right"/><span
                            className='menu-name'>Inserisci nuova richiesta</span></NavLink>
                    </NavItem>
                     */}
                    <NavItem style={ { display: "none" } }>
                        <span className='nav-link disabled'><i className="icon icon-2x icon-document_table"/><span
                            className='menu-name'>Gestione pratiche</span></span>
                        <NavLink className='nav-link hidden' activeClassName='active' to="/documents"><i
                            className="icon icon-2x icon-document_table"/><span
                            className='menu-name'>Gestione pratiche</span></NavLink>
                    </NavItem>
                    <NavItem title="Agenda">
                        {/* <span className='nav-link disabled'><i className="icon icon-2x icon-book"/><span className='menu-name'>Agenda</span></span>*/ }
                        <NavLink className='nav-link' activeClassName='active' to="/agenda"><i
                            className="icon icon-2x icon-book"/><span className='menu-name'>Agenda</span></NavLink>
                    </NavItem>
                    <NavItem title="Vai a R-Evolution">
                        <a className='nav-link' href={"http://portale.intranet.servizi/portale/GestAppl.nsf/jumppageLCL?openform&appl=" + ((ambiente.isSviluppo)? "ALETTI_REV_COLL" : "ALETTI_REV")} target="_blank"
                           rel="noopener noreferrer"><i className="icon icon-2x icon-scienza_filled"/><span
                            className='menu-name'>Vai a R-Evolution</span></a>
                    </NavItem>
                    <NavItem title="Vai a EuroVita">
                        <a className='nav-link' href="https://www.eurovita.it/" target="_blank"
                              rel="noopener noreferrer"><i className="icon icon-2x icon-trading_mondo"/><span
                            className='menu-name'>Vai a EuroVita</span></a>
                    </NavItem>
                    <NavItem title="Vai a Market Connect">
                        <a className='nav-link' href="http://portale.intranet.servizi/portale/GestAppl.nsf/jumppageLCL?openform&appl=MCWEB_N" target="_blank"
                              rel="noopener noreferrer"><i className="icon icon-2x icon-scheda_titolo"/><span
                            className='menu-name'>Vai a Market Connect</span></a>
                    </NavItem>
                    <NavItem title="Vai a GESPRO">
                        <a className='nav-link' href="http://portalnew.intranet.servizi/portale/gestappl.nsf/jumppageLCL?OpenForm&APPL=AF007" target="_blank"
                              rel="noopener noreferrer"><i className="icon icon-2x icon-scienza_filled"/><span
                            className='menu-name'>Vai a Vai a GESPRO</span></a>
                    </NavItem>
                </Nav>
            </nav>
        );
    }
}

export default Menu;