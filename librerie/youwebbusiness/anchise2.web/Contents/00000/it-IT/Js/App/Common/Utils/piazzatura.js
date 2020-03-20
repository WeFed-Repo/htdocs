var App;
(function (App) {
    (function (Common) {

        var _getAziendeFromPiazzatura = function (piazzatura, sortFn) {
            piazzatura = piazzatura || [];
            sortFn = sortFn || function (a, b) {
                var rsA = a.RagioneSociale().toUpperCase();
                var rsB = b.RagioneSociale().toUpperCase();
                if (rsA < rsB) {
                    return -1;
                }
                if (rsA > rsB) {
                    return 1;
                }

                return 0;
            };

            var aziende = ko.utils.arrayGetDistinctValuesBy(ko.utils.arrayMap(piazzatura, function (p) {
                var current = new App.Common.PiazzaturaBo(p);

                return current.Azienda;
            }), 'Id')


            return aziende.sort(sortFn);
        };

        var _getBancheFromPiazzatura = function (piazzatura) {
            piazzatura = piazzatura || [];

            return ko.utils.arrayGetDistinctValuesBy(ko.utils.arrayMap(piazzatura, function (p) {
                var current = new App.Common.PiazzaturaBo(p);
                var banca = new App.Common.BancaBo();

                banca.CodiceAbi(current.Rapporto.CodiceAbi);
                banca.Descrizione(current.Rapporto.DescrizioneBanca);

                return ko.toJS(banca);
            }), 'Descrizione');
        };

        Common.GetAziendeFromPiazzatura = _getAziendeFromPiazzatura;
        Common.GetBancheFromPiazzatura = _getBancheFromPiazzatura;

    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
