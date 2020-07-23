import React, {PureComponent} from 'react';
import {Container} from 'reactstrap';
import logo from 'images/aletti_logo.png';
import logoWhite from 'images/aletti_logo_white.png';
import UserMenu from 'components/parts/UserMenu';
import SwitchPrivacy from 'components/parts/SwitchPrivacy';
import { NavLink } from 'react-router-dom';
import './style.css';
import HeaderSearchBar from '../../parts/HeaderSearchBar';

class Header extends PureComponent {

    render() {
        return (
            <header className='header'>
                <Container fluid={true}>
                    <NavLink to="/"><img src={this.props.styleType=== "default" ? logo : logoWhite} className="header-logo" alt="Banca Aletti"/></NavLink>
                    <div className="header-menu">
                        <SwitchPrivacy switchPrivacyFunc={this.props.switchPrivacyFunc} hiddenMode={this.props.hiddenMode} />
                        <HeaderSearchBar goToCustomersSearch={this.props.goToCustomersSearch}></HeaderSearchBar>
                        <UserMenu isLoadedUserData={this.props.isLoadedUserData} getUserData= {this.props.getUserData} userData={this.props.userData}/>
                    </div>
                </Container>
            </header>
        );
    }
}

export default Header;
