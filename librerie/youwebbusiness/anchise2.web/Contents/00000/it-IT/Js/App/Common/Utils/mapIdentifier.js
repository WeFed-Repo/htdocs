var App;
(function (App) {
    (function (Common) {

        var _mapIdentifer = function (identifierBo, identifier) {
            var jsIdentifier = ko.toJS(identifier);

            identifierBo.Id(jsIdentifier.Id);
            identifierBo.Version(jsIdentifier.Version);
            identifierBo.IdAzienda(jsIdentifier.IdAzienda);
            identifierBo.IdRapporto(jsIdentifier.IdRapporto);
            identifierBo.Crypt(jsIdentifier.Crypt);
            identifierBo.Hash(jsIdentifier.Hash);
        }

        Common.MapIdentifier = _mapIdentifer;

    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
