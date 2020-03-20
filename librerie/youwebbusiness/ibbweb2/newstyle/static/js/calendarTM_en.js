// JavaScript Document
$(document).ready(function (e) {

    initDefault();
});

function initDefault() {
    // Datepicker settings
    $.datepicker.regional['en-GB'] = { 
        closeText: 'Done', 
        prevText: 'Prev', 
        nextText: 'Next', 
        currentText: 'Today', 
        monthNames: [ 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ], 
        monthNamesShort: [ 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' ], 
        dayNames: [ 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday' ], 
        dayNamesShort: [ 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat' ], 
        dayNamesMin: [ 'Su','Mo','Tu','We','Th','Fr','Sa' ], 
        dateFormat: 'dd/mm/yy', 
        firstDay: 1, 
        isRTL: false,
        maxDate: '+1Y'
    };

    $.datepicker.setDefaults($.datepicker.regional['en-GB']);
}