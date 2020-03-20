/*
    PROTOTYPES EXTENSIONS
    
    . string

        > format()
          funziona come String.Format('', params[]) di .NET

            ESEMPIO:
            '{0} {0} {1}'.format('ciao', 'mondo')           out: 'ciao ciao mondo'

        > normalizePos()
          elimina il primo carattere (per la normalizzazione del codice postazione)

        > isEmptyOrWhiteSpace()
          predicato per verificare che la stringa non sia vuota o composta da soli spazi


*/

//STRING
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

