import momentIt from 'functions/rad/momentIt';

let validationSettings = {};

validationSettings.dateFormat = "DD-MM-YYYY";
validationSettings.dateFullFormat = validationSettings.dateFormat + " HH:mm:SS";
validationSettings.dateMin = momentIt("01-01-1900", validationSettings.dateFormat).startOf('day').valueOf();
validationSettings.dateToday = momentIt().startOf('day').valueOf();
validationSettings.nascitaMax = momentIt().startOf('day').subtract(18, 'years').valueOf();
validationSettings.nascitaMin = validationSettings.dateMin;

export default validationSettings;
