var App;
(function (App) {
    (function (Common) {
        var CvsBo = (function () {
            function CvsBo(data) {
                if (typeof data === "undefined") { data = null; }

                var self = this;

                self.Tipologia        = ko.observable(null);
                self.CausaleValutaria = ko.observable(null);
                self.Importo          = ko.observable(null);
                self.Divisa           = ko.observable('EUR');
                self.DatiCvsEnabled = ko.computed(function () {
                    var enabled = !App.Core.IsNullOrUndefined(this.Tipologia()) && this.Tipologia().length > 0;

                    if (!enabled) {
                        self.Importo(null);
                    }

                    return enabled;
                }, self);
                self.CausaleValutariaEnable = ko.computed(function () {
                    var enabled = this.DatiCvsEnabled() && this.Tipologia() == 'CVA';

                    if (!enabled) {
                        self.CausaleValutaria(null);
                    }

                    return enabled;
                }, self);
                
                if (data !== null) {
                    self.Tipologia(data.Tipologia);
                    self.CausaleValutaria(data.CausaleValutaria);
                    self.Importo(data.Importo);
                    self.Divisa(data.Divisa);
                }
            }
            return CvsBo;
        })();
        Common.CvsBo = CvsBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
