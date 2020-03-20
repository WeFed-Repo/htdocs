// noinspection JSUnusedGlobalSymbols
var StarStatus = { ON: 'ON', OFF: 'OFF', INACTIVE: 'INACTIVE' };

var Star = function (id, status, accountId, accountIdToShow) {
    var i_id = id;
    var i_status = status;
    var i_accountId = accountId;
    var i_accountIdToShow = accountIdToShow;

    // noinspection JSUnusedGlobalSymbols
    this.getId = function () {
        return i_id;
    };
    this.getStatus = function () {
        return status;
    };
    // noinspection JSUnusedGlobalSymbols
    this.setStatus = function (newStatus) {
        i_status = newStatus;
    };
    // noinspection JSUnusedGlobalSymbols
    this.getAccountId = function () {
        return i_accountId;
    };
    // noinspection JSUnusedGlobalSymbols
    this.setAccountId = function (newAccountId) {
        i_accountId = newAccountId;
    };
    // noinspection JSUnusedGlobalSymbols
    this.getAccountIdToShow = function () {
        return i_accountIdToShow;
    };
    // noinspection JSUnusedGlobalSymbols
    this.setAccountIdToShow = function (newAccountIdToShow) {
        i_accountIdToShow = newAccountIdToShow;
    };
};

var StarsManager;
if (typeof StarsManager == 'undefined') {

    StarsManager = new function () {
        var i_stars = {};

        // noinspection JSUnusedGlobalSymbols
        this.putStar = function (starId, status, accountId, accountIdToShow) {
            i_stars[starId] = new Star(starId, status, accountId, accountIdToShow);
        };
        // noinspection JSUnusedGlobalSymbols
        this.getStar = function (starId) {
            return i_stars[starId];
        };
        // noinspection JSUnusedGlobalSymbols
        this.getStars = function () {
            return i_stars;
        };
    };
}
