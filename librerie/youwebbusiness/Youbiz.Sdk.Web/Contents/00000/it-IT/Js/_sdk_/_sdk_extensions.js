/*
    PROTOTYPES EXTENSIONS
    
    . string

        > format()
          funziona come String.Format('', params[]) di .NET

            ESEMPIO:
            '{0} {0} {1}'.format('ciao', 'mondo')           out: 'ciao ciao mondo'

        > formatUnicorn
        funziona come String.Format(params[]) di .NET
        '{0} {0} {1}'.format('ciao', 'mondo')           out: 'ciao ciao mondo'
        '{p1} {p2}'.format({p1:"ciao", p2:"mondo"})           out: 'ciao mondo'


        > normalizePos()
          elimina il primo carattere (per la normalizzazione del codice postazione)

        > isEmptyOrWhiteSpace()
          predicato per verificare che la stringa non sia vuota o composta da soli spazi


*/

//STRING

String.prototype.formatUnicorn = String.prototype.formatUnicorn ||
    function () {
        "use strict";
        var str = this.toString();
        if (arguments.length) {
            var t = typeof arguments[0];
            var key;
            var args = ("string" === t || "number" === t) ?
                Array.prototype.slice.call(arguments)
                : arguments[0];

            for (key in args) {
                str = str.replace(new RegExp("\\{" + key + "\\}", "gi"), args[key]);
            }
        }

        return str;
    };


String.prototype.format = function () {
    var args = arguments;

    return this.replace(/{(\d+)}/g, function (match, number) {

        return typeof args[number] != 'undefined' ? args[number] : match;
    });
};



String.prototype.normalizePos = function () {

    return this.substring(1);
};

String.prototype.isEmptyOrWhiteSpace = function () {

    return this.replace(/\s/g, '') == '';
};


//NUMBER


//ARRAY


//OBJECT


