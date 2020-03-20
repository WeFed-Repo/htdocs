var App;
(function (App) {
    (function (Core) {
        var BasePagingFilterAsync = (function () {
            function BasePagingFilterAsync(data) {
                if (typeof data === "undefined") {
                    data = null;
                }
                this.IsSortAscending = ko.observable(false);
                this.Size            = ko.observable(10);
                this.SortColumn      = ko.observable(1);
                this.StartIndex      = ko.observable(1);
                
                if (data !== null) {
                    this.IsSortAscending(data.IsSortAscending != null ? data.IsSortAscending : false);
                    this.Size(data.Size || 10);
                    this.SortColumn(data.SortColumn || 1);
                    this.StartIndex(data.StartIndex || 1);
                }
            }
            return BasePagingFilterAsync;
        })();
        Core.BasePagingFilterAsync = BasePagingFilterAsync;
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));