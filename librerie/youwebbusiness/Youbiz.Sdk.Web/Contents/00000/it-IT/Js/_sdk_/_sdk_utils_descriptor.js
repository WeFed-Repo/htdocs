var sdk;
var sdkParams;

(function (sdk, $, args) {
    sdk.utils = (function (utils, $, args) {
        utils.descriptor = (function (descriptor, $, args) {

            var _init = function (elements) {

                elements = $(elements);

                var constructor = function ($elements) {

                    var me = this;

                    me.KEY_NAME = 'tm-key';
                    me.templates = [];
                    me.$elements = $elements;

                    var template;
                    $elements.each(function (index, item) {
                        template = {};
                        template.template = item;

                        $.each(this.attributes, function (index, item) {

                            switch (this.name) {
                                case 'id': {
                                    template['name'] = this.value;
                                    break;
                                }
                                case 'tm-breakpoints': {
                                    template['breakpoints'] = (this.value != undefined ?
                                        this.value.split(' ')
                                        : undefined);
                                    break;
                                }
                                default: {
                                    if (this.name.indexOf('tm-') == 0) {
                                        template[this.name] = this.value;
                                    }
                                    break;
                                }
                            }
                        });

                        me.templates.push(template);
                    });

                    //return first template that match with given breakPoint and given keyValue (or undefined)
                    var _getTemplate = function (breakPoint, keyValue) {

                        for (var i = 0; i < me.templates.length; i++) {

                            var template = me.templates[i];
                            if (template[me.KEY_NAME] == keyValue
                                && (template.breakpoints == undefined || (template.breakpoints.indexOf(breakPoint) > -1))) {
                                return template;
                            }
                        }

                        return undefined;
                    };

                    return {
                        get: _getTemplate
                    };
                };

                return new constructor(elements);
            };

            //export
            descriptor['create'] = _init;
            return descriptor;

        })(utils.descriptor || {}, $, args.descriptor || {});

        return utils;
    })(sdk.utils || {}, $, args.utils || {});

    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);