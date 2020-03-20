var App;
(function (App) {
    (function (Common) {
        var FilterAbiCab = (function () {
            function FilterAbiCab(data) {
                if (typeof data === "undefined") { data = null; }

                this.DescrizioneBanca      = ko.observable(null);
                this.DescrizionFiliale     = ko.observable(null);
                this.Abi                   = ko.observable(null);
                this.Cab                   = ko.observable(null);
                this.Provincia             = ko.observable(null);
                this.Comune                = ko.observable(null);
                this.Localita              = ko.observable(null);
                this.Cap                   = ko.observable(null);
                this.Indirizzo             = ko.observable(null);
                this.DataChiusuraSportello = ko.observable(null);
                App.Core.BasePagingFilterAsync.call(this, data);

                if (data !== null) {
                    this.DescrizioneBanca(data.DescrizioneBanca);
                    this.DescrizionFiliale(data.DescrizionFiliale);
                    this.Abi(data.Abi);
                    this.Cab(data.Cab);
                    this.Provincia(data.Provincia);
                    this.Comune(data.Comune);
                    this.Localita(data.Localita);
                    this.Cap(data.Cap);
                    this.Indirizzo(data.Indirizzo);
                    if (data.DataChiusuraSportello !== null && data.DataChiusuraSportello !== "undefined")
                        this.DataChiusuraSportello(new Date(moment(data.DataChiusuraSportello)));
                }
            }
            return FilterAbiCab;
        })();
        Common.FilterAbiCab = FilterAbiCab;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
