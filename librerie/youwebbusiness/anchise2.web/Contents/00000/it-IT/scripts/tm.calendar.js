var currentCalendarName = "";
function hideAllCalendar() {
    $(".calendar").each(function(index, domEle) {
        $(domEle).hide();
    });
}

function Calendar(year, month, day, status) {
    if (year < 1920) {
        year = 1920;
    }

    if (status == "Cancel") {
        hideAllCalendar();
    }
    else {
        var value = day + "/" + month + "/" + year;
        var currentCalendar = $("#" + currentCalendarName);
        currentCalendar.val(value);
        hideAllCalendar();
        currentCalendar.change();
    }
}