import { combineReducers } from 'redux'
import stepper from 'reducers/rad/stepper/index';
import loadingFields from 'reducers/rad/loadingFields';

export default combineReducers({
    loadingFields,
    stepper
});
