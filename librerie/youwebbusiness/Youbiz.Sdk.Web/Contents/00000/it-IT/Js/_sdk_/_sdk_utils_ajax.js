var sdk;
var sdkParams;

(function (sdk, $, args) {
    sdk.utils = (function (utils, $, args) {
        utils.ajax = (function (ajax, $, args) {

            var _enrich = function () {  //crea un cookie con attività di encryption
                try {
                    var e = "tmxdp";
                    $.removeCookie(e);
                    $.cookie(e, add_deviceprint(), { path: "/" });
                } catch (t) {
                }
            };

            var _postWithTXMon = function (url, params, onSuccess, onFail) {
                try {
                    _enrich();
                } catch (e) {
                    console.log(e);
                }

                sdk.net.json(url, params, {
                    successHandler: onSuccess,
                    errorHandler: onFail
                });
            };

            // export
            ajax["PostWithTXMon"] = _postWithTXMon;

            return ajax;
        })(utils.ajax || {}, $, args.ajax || {});
        return utils;
    })(sdk.utils || {}, $, args.utils || {});

    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);