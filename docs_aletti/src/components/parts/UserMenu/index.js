import React, {PureComponent} from 'react';
import { NavLink } from 'react-router-dom';
import "./style.scss"

export default class UserMenu extends PureComponent {

    constructor(props) {
        super(props);
        this.nomePromotore = '';
        this.cognomePromotore = '';
        this.state = {
            userMenuOpened : false
        }
        this.toggleUserMenu = this.toggleUserMenu.bind(this);
        
    }

    toggleUserMenu() {
        this.setState({
            userMenuOpened : !this.state.userMenuOpened
        })
    }
    
    componentDidMount() {
        /* Scarica le informazioni del promotore */
        if (!this.props.isLoadedUserData) this.props.getUserData();
    }
    render() {
        if(this.props.userData[0] !== undefined) {
            this.nomePromotore = this.props.userData[0].descrizione;
            this.cognomePromotore =  this.props.userData[1].descrizione;
            
        }
        return(
             <div className={"user-menu " + ((this.state.userMenuOpened)? "opened" : "")} >
                <span className="user-menu-icon" onClick={this.toggleUserMenu}><i className="icon icon-r-user"></i></span>
                <div className={"user-menu-list " + ((!this.props.isLoadedUserData)? "loading" : "")}>
                    <div className="info">
                        <strong>{this.nomePromotore + ' ' +  this.cognomePromotore}</strong>
                    </div>
                    <ul onClick= {() => {this.toggleUserMenu()}}>
                        <li><NavLink to="/personalinfo">Dati personali</NavLink></li>
                        <li><NavLink to="/personaldocuments">Documenti personali</NavLink></li>
                        <li><NavLink to="/userdocuments">Documentazione</NavLink></li>
                        <li><a href="http://portale.intranet.servizi/portale/gestappl.nsf/jumppageLCL?OpenForm&APPL=PSRAC" target="_blank">Assistenza</a></li>
                    </ul>
                </div>
            </div>
        )

    }


}
