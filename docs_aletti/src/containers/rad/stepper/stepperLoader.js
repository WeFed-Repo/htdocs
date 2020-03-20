import { connect } from 'react-redux';
//import { moveToStep } from 'actions/rad/stepper/barActions';
import Stepper from 'components/rad/stepper';

const mapStateToProps = state => ({
    steps: state.rad.stepper.steps,
    bar: state.rad.stepper.bar
});

export default connect(
    mapStateToProps,
    null //mapDispatchToProps
)(Stepper);
