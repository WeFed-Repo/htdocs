function AppViewModel(initParam) {
    var self = this;

    self.settings = $.extend({
        'mainPanelName': 'mainSection',
        'debugPanelName': 'koDebugContainer'

    }, initParam);


    /* -- sharedEvent -- */

    self.sharedEvent = ko.observable(false);

    self.sharedEventReset = function () {
        self.sharedEvent(false);
    };

    this.sharedEventFire = function () {
        self.sharedEvent(true);
    };

    /* -- sharedEvent -  */

    self.currentSection = '';

    self.findPath = function (pathToObject) {
        if (!pathToObject) {
            pathToObject = self.currentSection;
        }

        if (pathToObject !== undefined && pathToObject != null && pathToObject != '') {
            var found = false;
            var parts = pathToObject.split('.');
            var objectToSend = self;
            $.each(parts, function (index, item) {
                // debugger;
                objectToSend = objectToSend[item];
                //if (!objectToSend)
                //if (index == 0 && executeValidationRules) {
                //    if (!self.executeValidationRules(item)) {
                //        objectToSend = null;
                //        return false;
                //    }
                //}

                //if (!objectToSend)
                //    return false;
                //return true;
            });
            if (found) {
                return objectToSend;
            }
        }
        return null;
    };

    /* -- initializers -- */

    self.initializers = [];

    self._findInitializer = function (initName) {
        var toRet = null;
        if (initName) {
            $.each(self.initializers, function (index, initializer) {
                if (initializer['name'] == initName) {
                    toRet = initializer;
                    return true;
                }
                return false;
            });
        }
        return toRet;
    };

    self.setInitializer = function (initName, initializer) {
        var foundInitializer = self._findInitializer(initName);
        if (foundInitializer) {
            foundInitializer['initFunction'] = initializer;
        } else {
            self.initializers.push({ 'name': initName, 'initFunction': initializer });

        }
    };
    self.getInitializer = function (initName) {
        var foundInitializer = self._findInitializer(initName);
        if (foundInitializer) {
            return foundInitializer['initFunction'];
        }
        return null;
    };

    self.initializeProperty = function (propertyName, initializerName) {

        if (!initializerName) {
            initializerName = propertyName;
        }
        var foundProperty = self.getSubPart(propertyName);
        if (foundProperty) {
            // check if foundProperty is a function
            var foundValue = foundProperty();
            if (!foundValue) {
                var initializer = this.getInitializer(initializerName);
                if (initializer) {
                    var initializedValue = initializer();
                    foundProperty(ko.mapping.fromJS(initializedValue));
                    self._showDebugInfo();
                }
            }
        }
    };

    /* -- initializers -- */

    //self.validationRules = [];
    //self.addValidationRule = function (element, validationFunction) {
    //    self.validationRules.push(validationFunction);
    //};
    //self.clearValidationRules = function () {
    //    this.validationRules = [];
    //};
    //self.executeValidationRules = function (sectionName) {
    //    self.validationHandler.cumulative(true);
    //    if (self.validationRules) {
    //        $(self.validationRules).each(function (index, fn) {
    //            fn();
    //        });
    //    }

    //    var isValid = self.validationHandler.isValid();
    //    self.validationHandler.cumulative(false);
    //    return isValid;
    //};
    //self.validationHandler = {
    //    isCumulative: false,
    //    errors: [],
    //    cumulative: function (isCumulative) {
    //        self.isCumulative = isCumulative;
    //        if (isCumulative) {
    //            self.errors = [];
    //        } else {
    //            var msg = '';
    //            $(self.errors).each(function (index, err) {
    //                msg += err + '\r\n';
    //            });
    //            if (!this.isValid()) {
    //                alert(msg);
    //            }
    //        }
    //    },
    //    notifyError: function (element, msg) {
    //        if (!self.isCumulative) {
    //            alert(msg);
    //        } else {
    //            self.errors.push(element.id + " - " + msg);
    //        }
    //    },
    //    isValid: function () {
    //        return this.errors.length == 0;
    //    }
    //}
    self.getSubPart = function (pathToObject, executeValidationRules) {
        // debugger;
        if (!pathToObject) {
            pathToObject = self.currentSection;
        }

        if (pathToObject !== undefined && pathToObject != null && pathToObject != '') {
            var parts = pathToObject.split('.');
            var index = 0;
            var objectToSend = self;
            $.each(parts, function (index, item) {
                objectToSend = objectToSend[item];
                if (index == 0 && executeValidationRules) {
                    if (!self.executeValidationRules(item)) {
                        objectToSend = null;
                        return false;
                    }
                }

                if (!objectToSend)
                    return false;
                return true;
            });
            return objectToSend;
        }

        return null;
    };

    self.registerViewModel = function (viewModelName, viewModel, updateCurrentSection) {
        var childViewModel = self[viewModelName];
        if (childViewModel) {
            ko.mapping.fromJS(viewModel, childViewModel);
        } else {
            childViewModel = ko.mapping.fromJS(viewModel);
            self[viewModelName] = childViewModel;
        }

        if (updateCurrentSection) {
            self.currentSection = viewModelName;
        }
    };

    self.updateBindings = function () {
        // self.clearValidationRules();
        // debugger;
        // ko.applyBindings(koRootViewModel);

        //var koPanel = document.getElementById('MainSection');
        //ko.applyBindings(koRootViewModel, koPanel);

        var mainPanelName = self.settings['mainPanelName'];
        var childPanel = $('#' + mainPanelName).children().first();
        if (childPanel) {
            // prevent multiple apply not permitted from 3.2 knockout
            //TODO: DA VERIFICARE !!!
            ko.cleanNode(childPanel[0]);
            ko.applyBindings(koRootViewModel, childPanel[0]);
        } else {
            //TODO: DA VERIFICARE !!!
            ko.cleanNode(document.getElementById(mainPanelName));
            ko.applyBindings(koRootViewModel, document.getElementById(mainPanelName));
        }


        self._showDebugInfo();


        //debugger;
        //var debugPanel = document.getElementById('koDebug_container');
        //ko.applyBindings(koRootViewModel, debugPanel);


    };

    self._showDebugInfo = function () {
        try {
            var debugPanelName = self.settings['debugPanelName'];
            var container = $('#' + debugPanelName);
            if (container.length > 0) {

                container.html('<span>ko[<a data-toggle="collapse" href="#koDebug_container_volatile" aria-expanded="false" aria-controls="koDebug_container_volatile">&hellip;</a>]</span>' +
                    '<div class="collapse" id="koDebug_container_volatile" data-bind="text: ko.toJSON($root)"></div>');
                var debugPanel = $('#koDebug_container_volatile', container);
                if (debugPanel[0]) {
                    ko.applyBindings(koRootViewModel, debugPanel[0]);
                }
            }
        } catch (err) {
        }
    };

    self.getViewModel = function (koSectionName) {
        if (!koSectionName) {
            koSectionName = koRootViewModel.currentSection;
        }

        var objectToSend = koRootViewModel.getSubPart(koSectionName, true);
        if (objectToSend) {
            objectToSend = ko.mapping.toJS(objectToSend);
        }
        //if (koSectionName !== undefined && koSectionName != '') {
        //    if (koRootViewModel.executeValidationRules(koSectionName)) {
        //        var objectToSend = null;
        //        var viewModel = koRootViewModel[koSectionName];
        //            if (viewModel !== undefined) {
        //                objectToSend = ko.mapping.toJS(viewModel);
        //            }
        //            communicationLoadTarget(action, jTarget, objectToSend);
        //    }
        //}

        return objectToSend;
    };


};
