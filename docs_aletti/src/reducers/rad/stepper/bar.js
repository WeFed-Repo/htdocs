const stepToShow = 0;
const defaultStepper = {
    list: [0, 0, 0, 0, 0, 0, 0, 0].map((val, idx) => idx < stepToShow ? 1 : 0),
    activeStep: stepToShow,
    completedStep: stepToShow - 1
};

const bar = (state = defaultStepper, action) => {
    return (action.type === 'LOAD_BAR')
        ? { ...action.bar }
        : state;
};

export default bar;
