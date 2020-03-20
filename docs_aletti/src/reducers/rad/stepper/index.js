import {combineReducers} from 'redux'
import bar from 'reducers/rad/stepper/bar';
import steps from 'reducers/rad/stepper/steps';

export default combineReducers({
    bar,
    steps
});
