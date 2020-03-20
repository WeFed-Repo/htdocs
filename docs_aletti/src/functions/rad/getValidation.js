import doValidation1 from 'components/rad/stepper/Step1/validation';
import doValidation2 from 'components/rad/stepper/Step2/validation';
import doValidation3 from 'components/rad/stepper/Step3/validation';
import doValidation4 from 'components/rad/stepper/Step4/validation';
import doValidation5 from 'components/rad/stepper/Step5/validation';
import doValidation6 from 'components/rad/stepper/Step6/validation';
import doValidation7 from 'components/rad/stepper/Step7/validation';
import doValidation8 from 'components/rad/stepper/Step8/validation';

export default function getValidation(num) {
    let doValidation;

    switch (num) {
        case 1:
            doValidation = doValidation2;
            break;
        case 2:
            doValidation = doValidation3;
            break;
        case 3:
            doValidation = doValidation4;
            break;
        case 4:
            doValidation = doValidation5;
            break;
        case 5:
            doValidation = doValidation6;
            break;
        case 6:
            doValidation = doValidation7;
            break;
        case 7:
            doValidation = doValidation8;
            break;
        default:
            doValidation = doValidation1
    }

    return doValidation;
};
