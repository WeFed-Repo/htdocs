import momentIt from 'functions/rad/momentIt';

const getDateDifference = (date1, date2) => {
    // console.log(date1)
    const now = momentIt(date1, "DDMMYYYY"),
        end = momentIt(date2, "DDMMYYYY"),
        dayDiff = end.diff(now, 'day');
    if (isNaN(dayDiff)) return null;
    return dayDiff;
};

export default getDateDifference;