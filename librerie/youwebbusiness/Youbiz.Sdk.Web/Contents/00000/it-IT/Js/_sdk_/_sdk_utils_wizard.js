var sdk;
var sdkParams;
/*
    [Purpose]: manage wizard templates based on client size
    [Dependences]: jquery, jsrender, sdk.utils.descriptor, sdk.utils.viewport
    [Usage example]:
            var wizard = sdk.utils.wizard.create(<script path>, <wizard path>, <handlers>);
            wizard.start();
*/
(function (sdk, $, args) {
    sdk.utils = (function (utils, $, args) {
        utils.wizard = (function (wizard, $, args) {

            var _init = function (templates, context, handlers) {

                templates = $(templates);
                context = $(context);
                if (handlers == undefined) { handlers = {}; }

                var constructor = function ($templates, $context, handlers) {

                    var me = this;
                    me.KEY_NAME = 'tm-key';
                    me.WIZARD_NAME = 'tm-wizard-template';
                    me.$templates = $templates;
                    me.$context = $context;

                    me.descriptors = sdk.utils.descriptor.create($templates);
                    me.currentTemplate = {};
                    $.each($context.find('[' + me.WIZARD_NAME + ']'), function (key, value) {
                        me.currentTemplate[$(value).attr(me.WIZARD_NAME)] = { name: '' };
                    });


                    //Handlers
                    me.getTemplate = (handlers.getTemplate != undefined ?
                        handlers.getTemplate : function (step, bp, hardRefresh) {  //get current template (if newer or forced)

                            var tpl = me.descriptors.get(bp, step);
                            var currentTpl = me.currentTemplate[step];

                            if (hardRefresh
                                || currentTpl == undefined
                                || (tpl != undefined && tpl.name != currentTpl.name)) {
                                return tpl;
                            }
                            return undefined;
                        });

                    me.getContainer = (handlers.getContainer != undefined ?
                        handlers.getContainer : function (wizardValue) {  //get container of current step
                            return $context.find('[' + me.WIZARD_NAME + '="' + wizardValue + '"]')
                        });

                    me.onStepPreRender = (handlers.onStepPreRender != undefined ?
                        handlers.onStepPreRender : undefined);  //pre-render function

                    me.onStepPostRender = (handlers.onStepPostRender != undefined ?
                        handlers.onStepPostRender : undefined);  //post-render function


                    //Internal
                    me.templateRefresh = function (dscList, paramList) {  //reload templates with params 

                        var $container, dsc;
                        var parameter = undefined;

                        for (var i = 0; i < dscList.length; i++) {

                            if (paramList != undefined) { parameter = paramList[i]; }
                            dsc = dscList[i];

                            if (dsc != undefined) {
                                $container = me.getContainer(dsc[me.KEY_NAME]);

                                if (me.onStepPreRender != undefined) {  //pre-render
                                    me.onStepPreRender($.extend(true, {}, dsc));
                                }

                                tpl = $.templates(dsc.template.text);  //render
                                $container.html(tpl.render({ param: parameter }));

                                if (me.onStepPostRender != undefined) {  //post-render
                                    me.onStepPostRender($.extend(true, {}, dsc));
                                }

                                me.currentTemplate[dsc[me.KEY_NAME]] = dsc;
                            }
                        }
                    };

                    me.sizeChanged = function () {  //load new templates on breakpoint changed

                        var bp = sdk.utils.viewport.getCurrent();

                        var newDsc = [];  //get new descriptors
                        var currentKeys = Object.keys(me.currentTemplate);
                        for (var i = 0; i < currentKeys.length; i++) {
                            newDsc.push(me.getTemplate(currentKeys[i], bp));
                        }

                        me.templateRefresh(newDsc);  //refresh all steps
                    };

                    return {

                        start: function () {  //load templates + breakpoint listener

                            me.sizeChanged();
                            sdk.utils.viewport.register(me.sizeChanged);
                        },

                        refresh: function (step, data) {  //reload step with new data

                            var bp = sdk.utils.viewport.getCurrent();
                            var dsc = [me.getTemplate(step, bp, true)];

                            me.templateRefresh(dsc, [data]);
                        }
                    };
                };

                return new constructor(templates, context, handlers);
            };


            //Export
            wizard['create'] = _init;
            return wizard;

        })(utils.wizard || {}, $, args.wizard || {});

        return utils;
    })(sdk.utils || {}, $, args.utils || {});

    return sdk;
})(sdk || (sdk = {}), jQuery, sdkParams);