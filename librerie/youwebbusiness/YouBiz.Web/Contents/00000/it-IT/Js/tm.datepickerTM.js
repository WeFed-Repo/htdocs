/*
* *********************************************
* ui.datepickerTM - Client-side
* Version 1.0
* @requires jquery-jquery-1.11.3.min.js
* Copyright (c) 2016 David Passilongo
* *********************************************
*/

/*@Descrizione: Estensione widget datepicker*/

/*Esempio di chiamata sulla pagina e lato jquery

<input type="text" class="form-control dpk-dataDa" />
<a class="icon-replace icon-calendar active col-xs-1 datepicker-trigger" href="javascript:void(0);">Img Calendario</a>

$(".dpk-dataDa").datepickerTM({
    trigger: '.datepicker-trigger'//eventuale evento apertura calendario su altri tag html
    dateFormat: di default 'dd/mm/yy'
    regional: di default 'it'
    firstDay: di default 1;
    minDate: di default '-6Y';
    maxDate: di default '+1Y';
    isRTL: di default false;
    gotoCurrent: di default true;
    changeMonth: di default false;
    changeYear: di default false;
});
La funzione pubblica ExampleCode espone due proprietà
1) _getExampleHtmlElement serve per avere il codice html di aiuto per come dovrebbe essere a video il text e l'immagine del calendario
2) _getStructureOptions serve per avere visibile la struttura delle opzioni disponibili per personalizzare il datepicker corrente

*/

$.widget("ui.datepickerTM", {
    options: {
        regional: null,
        dateFormat: null,
        firstDay: null,
        minDate: null,
        maxDate: null,
        isRTL: null,
        gotoCurrent: null,
        changeMonth: null,
        changeYear: null
    },
    _init: function () {
        var $el = this.element;
        
        this._fixedOptionsDefault(this.options);
        $el.datepicker(this.options);
        this._initializeDatePicker(this.options);

        if (this.options && this.options.trigger) {
            $(this.options.trigger).bind("click", function () {
                $el.datepicker("show");
            });
        }
        


    },
    ExampleCode: function () {
        var toret = {};
        toret.HtmlExempleCode = this._getExampleHtmlElement();
        toret.StructureOptions = this._getStructureOptions();
        return toret;
    },
    _initializeDatePicker: function (paramOptions) {
        var settings = {
            dateFormat: paramOptions.dateFormat,
            firstDay: paramOptions.firstDay,
            minDate: paramOptions.minDate,
            maxDate: paramOptions.maxDate,
            isRTL: paramOptions.isRTL,
            gotoCurrent: paramOptions.gotoCurrent,
            changeMonth: paramOptions.changeMonth,
            changeYear: paramOptions.changeYear
        }

        $.datepicker.setDefaults(settings);

        if (paramOptions.regional == 'it') {
            $.datepicker.regional['it'] = {
                prevText: '&#x3c;Prec',
                nextText: 'Succ&#x3e;',
                currentText: 'Oggi',
                monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
                monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'],
                dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'],
                dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
                dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
            };
        }
        if (paramOptions.regional == 'en') {
            $.datepicker.regional['en'] = {
                prevText: '&#x3c;Prev',
                nextText: 'Next&#x3e;',
                currentText: 'Day',
            };
        }
        $.datepicker.setDefaults($.datepicker.regional[paramOptions.regional]);

    },
    _fixedOptionsDefault: function (paramOptions) {
        if (paramOptions.regional == null) {
            paramOptions.regional = 'it';
        } else {
            if (paramOptions.regional == 'it-IT') {
                paramOptions.regional = 'it';
            }
            if (paramOptions.regional == 'en-GB') {
                paramOptions.regional = 'en';
            }
        }
        paramOptions.dateFormat = paramOptions.dateFormat ? paramOptions.dateFormat : 'dd/mm/yy';
        paramOptions.firstDay = paramOptions.firstDay ? paramOptions.firstDay : 1;
        paramOptions.minDate = paramOptions.minDate ? paramOptions.minDate : '-6Y';
        paramOptions.maxDate = paramOptions.maxDate ? paramOptions.maxDate : '+1Y';
        paramOptions.isRTL = paramOptions.isRTL ? paramOptions.maxDate : false;
        paramOptions.gotoCurrent = paramOptions.gotoCurrent ? paramOptions.gotoCurrent : true;
        paramOptions.changeMonth = paramOptions.changeMonth ? paramOptions.changeMonth : false;
        paramOptions.changeYear = paramOptions.changeYear ? paramOptions.changeYear : false;
    },
    _getExampleHtmlElement: function () {
        var toret = '<div class="col-xs-6"><div class="col-xs-6"> \
        <div class="col-xs-8"><input type="text" class="form-control dpk-dataDa"/></div> \
        <div class="col-xs-3"><a class="icon-replace icon-calendar active col-xs-1 datepicker-trigger" href="javascript:void(0);">Calendario</a></div> \
        </div> \
        <div class="col-xs-6"> \
                <div class="col-xs-8"><input type="text" class="form-control dpk-dataA"/></div> \
                <div class="col-xs-3"><a class="icon-replace icon-calendar active col-xs-1 datepicker-trigger1" href="javascript:void(0);">Calendario</a></div> \
        </div></div>';
        return toret;
    },
    _getStructureOptions: function () {
        var toret = {
            regional: null,
            dateFormat: null,
            firstDay: null,
            minDate: null,
            maxDate: null,
            isRTL: null,
            gotoCurrent: null,
            changeMonth: null,
            changeYear: null
        };
        return toret;
    },

});