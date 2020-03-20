/* 
 * Sostituito scrivendo un cookie di sessione nelle pagine associate all'autorizza distinte.
 * 
 * File correlati:
 * AutorizzaDistinte_NewController.cs e sua Index.cshtml
 * RicercaAutorizzaDistinteController.cs e sua GridAutorizzaDistinte.cshtml
 * 
 */
var sessionManagerProxy = {
    session: window.parent.frames["middle"].sessionManager,
    set: function (key, value) {
        this.session[key] = value;
    },
    get: function (key) {
        return this.session[key];
    }
};