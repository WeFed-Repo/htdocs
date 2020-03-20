var sdk;
var sdkParams;

(function (sdk, $, args) {
    sdk.utils = (function (utils, $, args) {
        utils.knockout = (function (knockout, $, args) {

            //internal helper
            var _helper = {

                parseDate: function (value, format, shortFormat) {
                    var date = moment(value.trim(), [format]).toDate();

                    if (date.getFullYear() < 1970) {
                        date = moment(moment(value.trim(), [shortFormat]).toDate());
                    }

                    return date;
                },

                isNullOrEmpty: function (value) {
                    return value === null || typeof value === "undefined" || value === '';
                }
            };

            //internal binding handlers
            var _bindingHandlers = {

                dateText: {
                    init: function (element, valueAccessor, allBindingsAccessor, viewModel) {
                        ko.utils.registerEventHandler(element, "change", function () {
                            var value = valueAccessor();

                            var viewModelValue = (_helper.isNullOrEmpty(element.value)) ?
                                '' : _helper.parseDate(element.value.trim(), "DD/MM/YYYY", "DD/MM/YY");

                            value(viewModelValue);
                        });
                    },
                    update: function (element, valueAccessor, allBindingsAccessor, viewModel) {

                        var value = ko.isObservable(valueAccessor()) ? valueAccessor()() : valueAccessor();

                        var viewModelValue = (value === null || typeof value === "undefined") ?
                            '' : moment(value).format("DD/MM/YYYY");

                        if (typeof element.type === "undefined" || element.type === '') {
                            element.innerHTML = viewModelValue;
                        } else {
                            element.value = viewModelValue;
                        }
                    }
                },

                importoText: {
                    init: function (element, valueAccessor, allBindingsAccessor, viewModel) {
                        ko.utils.registerEventHandler(element, "change", function () {
                            var value = valueAccessor();

                            var viewModelValue = (_helper.isNullOrEmpty(element.value)) ?
                                '' : parseFloat(element.value.trim().replace(',', '.'));

                            value(viewModelValue);
                        });
                    },
                    update: function (element, valueAccessor, allBindingsAccessor, viewModel) {

                        var value = ko.isObservable(valueAccessor()) ? valueAccessor()() : valueAccessor();

                        var viewModelValue = (value === null || typeof value === "undefined") ?
                            "" : sdk.utils.text.formatAmmountDecimal(value, 0, '');

                        if (typeof element.type === "undefined" || element.type === '') {
                            element.innerHTML = viewModelValue;
                        } else {
                            element.value = viewModelValue;
                        }
                    }
                }
            };

            //Export implementation
            var _setBindingHandlers = function (keys) {
                
                var internalKey;
                for (var i = 0; i < keys.length; i++) {
                    internalKey = keys[i].substring(3);
                    if (_bindingHandlers[internalKey] != undefined) {
                        ko.bindingHandlers['tm-' + internalKey] = _bindingHandlers[internalKey];
                    }
                }
            };

            var _getSelectUtils = function () {

                var _dicData = [];

                var _add = function (key, values) {  //add combo data by key
                    _dicData[key] = values;

                    if (_dicData[key].parentKeyPropertyName == undefined) {
                        _dicData[key].parentKeyPropertyName = 'parentKey'
                    }

                    if (_dicData[key].keyPropertyName == undefined) {
                        _dicData[key].keyPropertyName = 'key'
                    }
                };

                var _filterAndSet = function (key, condition, selectedKey) {  //combo filter by custom condition (+ selection)

                    var dataItem = _dicData[key];
                    if (dataItem != undefined) {
                        dataItem.propList([]);

                        if (condition != undefined) {

                            var item, found = false;
                            for (var i = 0; i < dataItem.data.length; i++) {
                                item = dataItem.data[i];

                                if (condition(item)) {
                                    dataItem.propList.push(item);
                                }

                                if (!found
                                    && selectedKey != undefined
                                    && item[dataItem.keyPropertyName] == selectedKey) {
                                    found = true;
                                    dataItem.propSelected(item[dataItem.keyPropertyName]);
                                }
                            }
                        }
                    }
                };

                var _filterCbo = function (key, parentValue) {  //combo filter by parent value
                    var dataItem = _dicData[key];
                    if (dataItem != undefined) {
                        dataItem.propList([]);

                        if (parentValue != undefined) {
                            var item;
                            for (var i = 0; i < dataItem.data.length; i++) {
                                item = dataItem.data[i];
                                if (item[dataItem.parentKeyPropertyName] == parentValue) {
                                    dataItem.propList.push(item);
                                }
                            }
                        }
                    }
                };

                return {
                    filterAndSet: _filterAndSet,
                    filterCbo: _filterCbo,
                    add: _add
                };
            };


            //Export
            knockout['getSelectUtils'] = _getSelectUtils;
            knockout['setBindingHandlers'] = _setBindingHandlers;

            return knockout;

        })(utils.knockout || {}, $, args.knockout || {});
        return utils;
    })(sdk.utils || {}, $, args.utils || {});
    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);
