import { stepsInitialValues } from 'reducers/rad/stepper/steps_values';

const defaultStep = {
    error: '',
    isOK: false,
    isError: false,
    isWarning: false,
    isLoading: false,
    description: '',
    validationErrors: {}
};
const defaultSteps = [0, 1, 2, 3, 4, 5, 6, 7].map((val) => ({
    ...defaultStep,
    updatedAt: null,
    values: stepsInitialValues[val],
    errors: {},
    touched: {}
}));

const steps = (state = defaultSteps, action) => {
    let newState;
    const step = state[action.num] || defaultStep;
    switch (action.type) {
        case 'SEND_STEP_REQUEST':
            newState = state.map((currStep, currStepNum) => {
                if (currStepNum === action.num) {
                    return {
                        ...currStep,
                        ...defaultStep,
                        isLoading: true
                    };
                } else {
                    return currStep;
                }
            });
            break;
        case 'SEND_STEP_SUCCESS':
            newState = state.map((currStep, currStepNum) => {
                if (currStepNum === action.num) {
                    return {
                        ...step,
                        updatedAt: Date.now(),
                        isLoading: false,
                        isOK: true,
                        values: action.values
                    };
                } else {
                    return currStep;
                }
            });
            break;
        case 'SEND_STEP_VALIDATION_ERROR':
            newState = state.map((currStep, currStepNum) => {
                if (currStepNum === action.num) {
                    return {
                        ...step,
                        updatedAt: Date.now(),
                        isLoading: false,
                        isError: true,
                        description: 'Errore validazione campi',
                        validationErrors: action.validationErrors
                    };
                } else {
                    return currStep;
                }
            });
            break;
        case 'SEND_STEP_FAILURE':
            newState = state.map((currStep, currStepNum) => {
                if (currStepNum === action.num) {
                    return {
                        ...step,
                        updatedAt: Date.now(),
                        isLoading: false,
                        isError: action.isError,
                        isWarning: action.isWarning,
                        description: action.description
                    };
                } else {
                    return currStep;
                }
            });
            break;
        case 'RESET_STEP_ERROR':
            newState = state.map((currStep, currStepNum) => {
                if (currStepNum === action.num) {
                    return {
                        ...step,
                        updatedAt: Date.now(),
                        isLoading: false,
                        isError: action.isError,
                        isWarning: action.isWarning,
                        description: action.description
                    };
                } else {
                    return currStep;
                }
            });
            break;
        default:
            newState = null;
    }
    return newState || state;
};

export default steps;
