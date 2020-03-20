var App;
(function (App) {
    (function (Seda) {
        (function (Allineamento) {
            Allineamento.UltmtSubjectBo = (function () {
                return function (data) {
                    if (typeof data === "undefined") { data = null; }

                    // Codice anagrafica
                    this.Codice = ko.observable(null);
                    // Ragione sociale
                    this.Nm = ko.observable(null);
                    // Tipo soggetto
                    this.TipoSoggetto = ko.observable(null);
                    // Bic
                    this.Bic = ko.observable(null);
                    // Identificativo
                    this.Id = ko.observable(null);
                    // Codice
                    this.Cd = ko.observable(null);
                    // Codice proprietario
                    this.Prtry = ko.observable(null);
                    // Descrizione
                    this.Issr = ko.observable(null);
                    // Data di nascita
                    this.BirthDt = ko.observable(null);
                    // Provincia di nascita
                    this.PrvcOfBirth = ko.observable(null);
                    // Comune di nascita
                    this.CityOfBirth = ko.observable(null);
                    // Stato di nascita
                    this.CtryOfBirth = ko.observable(null);

                    this.Identifier = new App.Common.IdentifierBo(null);
                    this.IdentifierAnagrafica = new App.Common.IdentifierBo(null);

                    if (data != null) {
                        this.Codice(data.Codice);
                        this.Nm(data.Nm);
                        this.TipoSoggetto(data.TipoSoggetto);
                        this.Bic(data.Bic);
                        this.Id(data.Id);
                        this.Cd(data.Cd);
                        this.Prtry(data.Prtry);
                        this.Issr(data.Issr);

                        if (data.BirthDt !== null && data.BirthDt !== "undefined") {
                            this.BirthDt(new Date(moment(data.BirthDt)));
                        }

                        this.PrvcOfBirth(data.PrvcOfBirth);
                        this.CityOfBirth(data.CityOfBirth);
                        this.CtryOfBirth(data.CtryOfBirth);

                        this.Identifier = new App.Common.IdentifierBo(data.Identifier);
                        this.IdentifierAnagrafica = new App.Common.IdentifierBo(data.IdentifierAnagrafica);
                    }
                };
            })();
        })(App.Seda.Allineamento || (App.Seda.Allineamento = {}))
    })(App.Seda || (App.Seda = {}));
})(App || (App = {}));