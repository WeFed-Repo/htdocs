// Formati per datepicker
$.datepicker.setDefaults({
    showOn: "both",
    dayNames: ["Domenica", "Lunedi'", "Martedi'", "Mercoledi'", "Giovedi'", "Venerdi'", "Sabato"],
    dayNamesMin: ["D", "L", "M", "M", "G", "V", "S"],
    monthNames: ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"],
    monthNamesShort: ["Gen", "Feb", "Mar", "Apr", "Mag", "Giu", "Lug", "Ago", "Set", "Ott", "Nov", "Dic"],
    dateFormat: "dd/mm/yy",
    currentText: "Oggi",
    buttonText: "",
    firstDay: 1,
    beforeShowDay: $.datepicker.noWeekends
});

sdk.utils.pubsub.register('calendar.setOptions', function (param) {

    var selector = '[data-datepicker]';
    if (param && param.selector) {
        selector = param.selector;
    }

    if (param && param.data) {
        var data = $.extend({ disabledWeekends: true, minDate: undefined, maxDate: undefined, default: undefined }, param.data);

        if (data.disabledWeekends === false) {
            $(selector).datepicker('option', 'beforeShowDay', function (date) { return [true, '']; });
        }

        if (data.minDate && data.minDate != '') {
            $(selector).datepicker('option', 'minDate', data.minDate);
        }

        if (data.maxDate && data.maxDate != '') {
            $(selector).datepicker('option', 'maxDate', data.maxDate);
        }

        if (data.default && typeof(data.default) == 'string') {
            $(selector).datepicker('option', 'defaultDate', data.default);
            $(selector).val(data.default);
        }
    }

});


/* Funzioni di formattazione tabelle *
var tableCellValue = function (value) {
    return ("<span class='" + ((value < 0) ? "negativo" : "") + "'>" + getValueString(value) + "</span>");
}

var largeField = function (obj) {
    return ("<div class='largeFieldText'>" + obj + "</div>");
}

/* MobileDataBlock - Blocco dati per mobile *
var mobileDataBlock = function (obj) {
    var mbDb = $("<div>").addClass("mobile-data-block")
    $.each(obj, function (i, field) {
        var fieldHtml = $("<div>").addClass((field.class) ? field.class : "").append(
            $("<label>").addClass("control-label").html(field["label"]),
            $("<span>").addClass("output").html(field["output"])
        );
        var fw = $("<div>").addClass("row").append($("<div>").addClass("col-12").append(fieldHtml));
        mbDb.append(fw);
    })
    return mbDb;
}

/* Formattazioni *
var getValueString = function (value) {
    var valString = "";
    /*if (value) {
        //valStrings = value.toFixed(2).toString().split(".");
        valStrings = value.toString().split(".");
        valString = valStrings[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".") + "," + valStrings[1];
    }*
    valString = value;
    return valString;
}

var formatLink = function (value, row) {
    return "<a href='" + row.link + "'>" + value + "</a>";
}
*/
