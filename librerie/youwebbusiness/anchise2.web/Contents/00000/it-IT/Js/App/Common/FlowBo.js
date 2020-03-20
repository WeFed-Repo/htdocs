var App;
(function (App) {
    (function (Common) {
        var FlowBo = (function () {
            function FlowBo(data) {
                if (typeof data === "undefined") { data = null; }

                this.Key           = ko.observable(null);
                this.DataCreazione = ko.observable(null);
                this.DataInvio     = ko.observable(null);

                var self = this;
                if (data !== null) {
                    self.Key(data.Key);
                    if (data.DataCreazione !== null && data.DataCreazione !== "undefined")
                        self.DataCreazione(new Date(common(data.DataCreazione)));
                    if (data.DataInvio !== null && data.DataInvio !== "undefined")
                        self.DataInvio(new Date(common(data.DataInvio)));
                }
            }
            return FlowBo;
        })();
        Common.FlowBo = FlowBo;
    })(App.Common || (App.Common = {}));
    var Common = App.Common;
})(App || (App = {}));
