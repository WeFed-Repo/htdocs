﻿// JavaScript Document
$(document).ready(function (e) {

    initDefault();
});

function initDefault() {
    // Datepicker settings
    $.datepicker.regional['it'] = {
        closeText: 'Chiudi',
        prevText: '&#x3c;Prev',
        nextText: 'Succ&#x3e;',
        currentText: 'Oggi',
        monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
        monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'],
        dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        //beforeShowDay: ....noWeekendsOrHolidays,
        //showOn: 'focus',
        //changeMonth: true,
        //changeYear: true,
        //minDate: new Date(1416524400000),
        maxDate: '+1Y'
    };
    $.datepicker.setDefaults($.datepicker.regional['it']);
}