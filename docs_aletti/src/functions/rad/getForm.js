import Form1 from 'components/rad/stepper/Step1/form';
import Form2 from 'components/rad/stepper/Step2/form';
import Form3 from 'components/rad/stepper/Step3/form';
import Form4 from 'components/rad/stepper/Step4/form';
import Form5 from 'components/rad/stepper/Step5/form';
import Form6 from 'components/rad/stepper/Step6/form';
import Form7 from 'components/rad/stepper/Step7/form';
import Form8 from 'components/rad/stepper/Step8/form';

export default function getForm(num) {
    let Form;

    switch (num) {
        case 1:
            Form = Form2;
            break;
        case 2:
            Form = Form3;
            break;
        case 3:
            Form = Form4;
            break;
        case 4:
            Form = Form5;
            break;
        case 5:
            Form = Form6;
            break;
        case 6:
            Form = Form7;
            break;
        case 7:
            Form = Form8;
            break;
        default:
            Form = Form1
    }

    return Form;
};
