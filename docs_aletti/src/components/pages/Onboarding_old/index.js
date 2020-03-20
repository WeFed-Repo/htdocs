import React, { Component } from 'react';
import { Route, Switch } from "react-router-dom";
import loader from 'functions/loader';
import './style.css';

const Search = loader(() => import('components/rad/search'));
const Stepper = loader(() => import('components/rad/stepper'));

class Onboarding extends Component {
    render() {
        return (
            <div className='onboarding'>
                <Switch>
                    <Route path='/onboarding/ricerca' component={ Search }/>
                    <Route path='/onboarding/inserimento/:bozzaId?' component={ Stepper }/>
                </Switch>
            </div>
        );
    }
}

export default Onboarding;
