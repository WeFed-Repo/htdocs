var sdk;
var sdkParams;
// required: moment.js --> 2.1.0
(function (sdk, $, args) {
    // namespace Sdk.Utils
    sdk.utils = (function (utils, $, args) {
        // namespace sdk.utils.text
        utils.text = (function (text, $, args) {

            var formatAmmountDecimal = function (decimalValue, defaultValue, currency) {
                var toRet = '';
                if (decimalValue != undefined && decimalValue !== '') {
                    toRet = decimalValue.formatMoney(2, ',', '.');
                    if (currency != undefined && currency != '') {
                        toRet = toRet + ' ' + currency;
                    }
                } else {
                    toRet = defaultValue;
                }
                return toRet;
            };

            text["formatAmmountDecimal"] = formatAmmountDecimal;            
            return text;

        })(utils.text || {}, $, args.text || {});
        // end namespace sdk.utils.text
        return utils;
    })(sdk.utils || {}, $, args.utils || {});
    // end namespace sdk.utils
    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);