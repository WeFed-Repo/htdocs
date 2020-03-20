var App;
(function (App) {
    (function (Common) {
        Common.IdentifierBo = function IdentifierBo(data) {
            if (typeof data === "undefined") { data = null; }
            
            var self = this;
            self.Id             = ko.observable(null);
            self.Version        = ko.observable(null);
            self.IdAzienda      = ko.observable(null);
            self.IdRapporto     = ko.observable(null);
            self.ClasseServizio = ko.observable(null);
            self.Crypt          = ko.observable(null);
            self.Hash = ko.observable(null);
            self.Crypted = ko.observable();
            
            if (data !== null) {
                self.Id(data.Id);
                self.Version(data.Version);
                self.IdAzienda(data.IdAzienda);
                self.IdRapporto(data.IdRapporto);
                self.ClasseServizio(data.ClasseServizio);
                self.Crypt(data.Crypt);
                self.Hash(data.Hash);
                self.Crypted(data.Crypted);
            }
        };
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
