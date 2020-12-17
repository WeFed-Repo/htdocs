import React, { Component } from 'react';
import { Switch, Route, Redirect, withRouter } from 'react-router-dom';
import { Container } from 'reactstrap';
import loader from 'functions/loader';
import './style.css';

const Dashboard = loader(() => import('components/pages/Dashboard'));
const CustomersSearch = loader(() => import('components/pages/CustomersSearch'));
const Customer = loader(() => import('components/pages/Customer'));
const Revolution = loader(() => import('components/pages/Revolution'));
const Commissioning = loader(() => import('components/pages/Commissioning'));
const Agenda = loader(() => import('components/pages/Agenda'));
const Onboarding = loader(() => import('components/pages/Onboarding'));
const GestioneBozze = loader(() => import('components/pages/GestioneBozze'));
const News = loader(() => import('components/pages/News'));
const Documents = loader(() => import('components/pages/Documents'));
const Test = loader(() => import('components/pages/Test'));
const None = loader(() => import('components/pages/None'));
const UserDoc= loader(()=> import('components/pages/UserPages/userDoc'));
const PersInfo= loader(()=> import('components/pages/UserPages/persInfo'));
const PersDoc = loader(()=> import('components/pages/UserPages/persDoc'));
const Testiframe = loader(()=> import('components/pages/Testiframe'));
const FormFields = loader(() => import('components/pages/FormFields'));
const Comportamento = loader(() => import('components/pages/Comportamento'));
const Debug = loader(() => import('components/pages/Debug'));

class Main extends Component {

    render() {
       
        return (
            <div className="main">
                <Container fluid={ true }>
                    <div className="content-wrapper">
                        <Switch>
                            <Redirect from="/index.html" to="/"/>
                            <Route exact path='/' component={ () => <Dashboard hiddenMode={ this.props.hiddenMode }
                                                                            goToCustomersSearch={ this.props.goToCustomersSearch }/> }/>
                            <Route path='/customerssearch'
                                component={ () => <CustomersSearch searchData={ this.props.searchData }/> }/>
                            <Route path='/customer/:ndg?' component={ Customer }/>
                            <Route path='/revolution' component={ Revolution }/>
                            <Route path='/commissioning' component={ Commissioning }/>
                            <Route path='/agenda' component={ Agenda }/>
                            <Route path='/onboarding/:id?' component={ Onboarding }/>
                            <Route path='/comportamento/:id?' component={ Comportamento }/>
                            <Route path='/gestionebozze' component={ GestioneBozze }/>
                            <Route path='/news' component={ News }/>
                            <Route path='/documents' component={ Documents }/>
                            <Route path='/test' component={ Test }/>
                            <Route path='/personalinfo' component={ () => <PersInfo isLoadedUserData={this.props.isLoadedUserData} getUserData= {this.props.getUserData} userData ={this.props.userData}/> }  />
                            <Route path='/personaldocuments' component={() => <PersDoc isLoadedUserData={this.props.isLoadedUserData} getUserData= {this.props.getUserData} userData ={this.props.userData}/> }  />
                            <Route path='/userdocuments' component={ UserDoc }  />
                            <Route path='/testiframe' component={ Testiframe }  />
                            <Route path='/formfields' component={ FormFields }  />
                            <Route path='/debug' component={ Debug }  />
                            <Route component={ None }/>
                        </Switch>
                    </div>
                </Container>
            </div>
        );
    }
}

export default withRouter(Main);
