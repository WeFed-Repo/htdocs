/////*
////* *********************************************
////* tm.datepick - Client-side
////* Version 1.0
////* @requires jquery-jquery-1.11.3.min.js
////* Copyright (c) 2016 David Passilongo
////* *********************************************
////*/

(function($) {
$.widget("tm.datepick", {
    options: {
        regional: null,
        dateFormat: null,
        minDate: null,
        maxDate: null,
        yearRange: null,
        firstDay: null,
        isRTL: null,
        gotoCurrent: null,
        changeMonth: null,
        changeYear: null,
        isDispo: true
    },
    _init: function () {
        var $el = this.element;
        //$el.addClass("ybb-calendar");
        //fixo eventuali valori di default che sono a null
        this._fixedParamOptions(this.options);
        //fixo eventuali valori di default a null
        $el.datepicker(this.options);
        //aggancio dell'evento click da un controllo esterno
        
        if (this.options && this.options.trigger) {
            $(this.options.trigger).bind("click", function () {
                $el.datepicker("show");
            });
        }
        //aggancio dell'evento click da un controllo esterno
        //Inizializzo il calendario
        this._initializePicker(this.options);
        //Inizializzo il calendario
    },
    _fixedParamOptions: function (option) {
        if (option != null) {
            if (option.regional == null) {
                this.options.regional = 'it';
            }
            if (option.dateFormat == null) {
                this.options.dateFormat = 'dd/mm/yy';
            }
            
            if (option.minDate == null) {
                this.options.minDate = '-1Y';
            } else {
                var gestDataMin = moment(option.minDate, 'DD/MM/YYYY', true);
                if (!gestDataMin.isValid()) {
                    this.options.minDate = '+1Y';
                } else {
                    //Data impostata dall'esterno
                    var currentMinDate = moment(option.minDate, "DD/MM/YYYY").year();
                    this.option.minDate = this.setNumberYear(currentMinDate, true);
                }
                
            }
            if (option.maxDate == null) {
                this.options.maxDate = '+1Y';
            } else {
                var gestDataMax = moment(option.maxDate, 'DD/MM/YYYY', true);
                if (!gestDataMax.isValid()) {
                    this.options.maxDate = '+1Y';
                } else {
                    //Data impostata dall'esterno
                    var currentMaxDate = moment(option.maxDate, "DD/MM/YYYY").year();
                    this.option.maxDate = this.setNumberYear(currentMaxDate, false);
                }
            }

            if (option.firstDay == null) {
                this.options.firstDay = 1;
            }
            if (option.isRTL == null) {
                this.options.isRTL = false;
            }
            if (option.gotoCurrent == null) {
                this.options.gotoCurrent = true;
            }
            if (option.changeMonth == null) {
                this.options.changeMonth = false;
            }
            if (option.changeYear == null) {
                this.options.changeYear = false;
            }
            if (option.isDispo == null) {
                this.options.isDispo = true;
            }

        }

    },
    _initializePicker: function (option) {
        
        var localRegional = 'it';
        var disabledWeekend = this.noWeekendsOrHolidays;
        
        if (option != null) {
            if (option.regional != null) {
                localRegional = option.regional;
            }

            //isDispo=false --> considero il calendario senza disabilitazioni di date
            if (!option.isDispo) {
                disabledWeekend = null;
            }
        }
        
        switch (localRegional) {
            case 'it':
                $.datepicker.regional['it'] = {
                    prevText: '&#x3c;Prec',
                    nextText: 'Succ&#x3e;',
                    currentText: 'Oggi',
                    monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
                    monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'],
                    dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'],
                    dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
                    dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
                    beforeShowDay: disabledWeekend
                    
                };                
                break;
            case 'en':
                $.datepicker.regional['en'] = {
                    prevText: '&#x3c;Prev',
                    nextText: 'Next&#x3e;',
                    currentText: 'Day',
                    beforeShowDay: disabledWeekend
                };
                break;
            default:
                $.datepicker.regional['it'] = {
                    prevText: '&#x3c;Prec',
                    nextText: 'Succ&#x3e;',
                    currentText: 'Oggi',
                    monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
                    monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'],
                    dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'],
                    dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
                    dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
                    beforeShowDay: disabledWeekend
                };
        }
        $.datepicker.setDefaults($.datepicker.regional[localRegional]);
    },

    setNumberYear: function (parameter, negative) {
        var res=0;
        var currentYear = moment().year();
        if (negative) {
            res = parseInt(currentYear) - parseInt(parameter);
            return '-' + res + 'Y';
        } else {
            res = parseInt(parameter) - parseInt(currentYear);
            return '+' + res + 'Y';
        }
    },

    noWeekendsOrHolidays: function (date) {
        //if (option != null) {
        //    if (option.isDispo) {

        //    }
        //}

        var noWeekend = $.datepicker.noWeekends(date);
        if (noWeekend[0]) {
            var natDays = [[1, 1], [6, 1], [25, 4], [1, 5], [2, 6], [15, 8], [1, 11], [8, 12], [25, 12], [26, 12]];

            var today = new Date();
            var year = today.getFullYear();
            var easter = new Date(this.calcoloPasqua);
            if (today > easter) {
                easter = new Date(this.calcoloPasqua1);
                natDays.push([easter.getDate(), easter.getMonth() + 1]);
            } else {
                natDays.push([easter.getDate(), easter.getMonth() + 1]);
            }

            for (var i = 0; i < natDays.length; i++) {
                if (date.getMonth() == natDays[i][1] - 1
                    && date.getDate() == natDays[i][0]) {
                    return [false, ''];
                }
            }
            return [true, ''];
        } else {
            return noWeekend;
        }
    },
    calcoloPasqua: function () {
        var a = year % 19;
        var b = Math.floor(year / 100);
        var c = year % 100;
        var d = Math.floor(b / 4);
        var e = b % 4;
        var f = Math.floor((b + 8) / 25);
        var g = Math.floor((b - f + 1) / 3);
        var h = (19 * a + b - d - g + 15) % 30;
        var i = Math.floor(c / 4);
        var j = c % 4;
        var k = (32 + 2 * e + 2 * i - h - j) % 7;
        var m = Math.floor((a + 11 * h + 22 * k) / 451);
        var month = Math.floor((h + k - 7 * m + 114) / 31) - 1;
        var day = ((h + k - 7 * m + 114) % 31) + 1;
        var easter = new Date(year, month, day);
        var dayOffset = 1; // 
        var millisecondOffset = dayOffset * 24 * 60 * 60 * 1000;
        easter.setTime(easter.getTime() + millisecondOffset);

        return easter.getTime();
    },
    calcoloPasqua1: function () {
        year++;
        var a = year % 19;
        var b = Math.floor(year / 100);
        var c = year % 100;
        var d = Math.floor(b / 4);
        var e = b % 4;
        var f = Math.floor((b + 8) / 25);
        var g = Math.floor((b - f + 1) / 3);
        var h = (19 * a + b - d - g + 15) % 30;
        var i = Math.floor(c / 4);
        var j = c % 4;
        var k = (32 + 2 * e + 2 * i - h - j) % 7;
        var m = Math.floor((a + 11 * h + 22 * k) / 451);
        var month = Math.floor((h + k - 7 * m + 114) / 31) - 1;
        var day = ((h + k - 7 * m + 114) % 31) + 1;
        var easter = new Date(year, month, day);
        var dayOffset = 1; // 
        var millisecondOffset = dayOffset * 24 * 60 * 60 * 1000;
        easter.setTime(easter.getTime() + millisecondOffset);

        return easter.getTime();
    }
    
});    
})(jQuery);