/*
INIT:
This will be called when the binding is first applied to an element
Set up any initial state, event handlers, etc. here

UPDATE:
This will be called once when the binding is first applied
and again whenever the associated observable changes value
Update the DOM element based on the supplied values here.

PARAMETERS:
•element — The DOM element involved in this binding

•valueAccessor — A JavaScript function that you can call to get the current model property that is involved in this binding. 
Call this without passing any parameters (i.e., call valueAccessor()) to get the current model property value.

•allBindingsAccessor — A JavaScript function that you can call to get all the model properties bound to this DOM element. 
Like valueAccessor, call it without any parameters to get the current bound model properties.

•viewModel — The view model object that was passed to ko.applyBindings. 
Inside a nested binding context, this parameter will be set to the current data item (e.g., inside a with: person binding, viewModel will be set to person).

•bindingContext — An object that holds the binding context available to this element’s bindings. 
This object includes special properties including $parent, $parents, and $root that can be used to access data that is bound against ancestors of this context.

*/
ko.bindingHandlers['singleClick'] = {
    init: function (element, valueAccessor, allBindingsAccessor) {
        $(element).unbind('click');
        $(element).bind('click', valueAccessor());
    }
};

function registerValidationRule(element, event, validationFunction) {
    $(element).unbind(event);
    ko.utils.registerEventHandler(element, event, validationFunction);
    koRootViewModel.addValidationRule(element, validationFunction);
}
/*
Used for numeric binding
*/
ko.bindingHandlers['numeric'] = {
    init: function (element, valueAccessor, allBindingsAccessor, viewModel, bindingContext) {
        // change      
        registerValidationRule(element, "change", function () {
            var value = $(element).val();
            var number = parseNumber(value);
            var observable = valueAccessor();
            if (!isNaN(number)) {
                observable(number);
                // required to re-set the element value when validation is passed but the value in the UI is 'wrong': e.g: 6,8,8
                $(element).val(number);
            }
            else {
                if (value == '') {
                    observable(value);
                } else {
                        // validationHandler.notifyError(element, NumericValidationError);
                }
            }
        });

        // keypress
        ko.utils.registerEventHandler(element, "keypress", function (event) {
            var isValid = onlyRealNumbersChars(event);
            if (!isValid) {
                event.preventDefault();
            }
        });
    },
    update: function (element, valueAccessor, allBindingsAccessor, viewModel, bindingContext) {
        var value = ko.utils.unwrapObservable(valueAccessor());
        var number = parseNumber(value);
        if (!isNaN(number)) {
            $(element).val(number.toString().replace('.', ','));
        } else {
            if (value == '') {
                $(element).val(value);
            }
        }
    }
};
function parseNumber(strVal) {
    if (strVal != null) {
        strVal = strVal.toString().replace(',', '.');
    }

    return parseFloat(strVal);
}

function onlyRealNumbersChars(e) {
    var keyCode;
    if (window.event || !e.which) // IE o NE?
    {
        keyCode = e.keyCode; // per IE
    }
    else if (e) // netscape
    {
        keyCode = e.which;
    }

    // backspace\tab
    if (keyCode == 8 || keyCode == 9) {
        return true;
    }

    if (keyCode < 48 || keyCode > 57) {
        if (keyCode != 44 && keyCode != 45)//ammesso solo virgola e meno
        {
            return false;
        }
    }
    return true;
}
/*
Used for numeric binding
*/
ko.bindingHandlers['numericrange'] = {
    init: function (element, valueAccessor, allBindingsAccessor, viewModel, bindingContext) {
        var minValue = allBindingsAccessor().minValue || 1;
        var maxValue = allBindingsAccessor().maxValue || 100;
        var fallbackValue = allBindingsAccessor().fallbackValue || minValue;
        
        // change      
        registerValidationRule(element, "change", function () {
            var value = $(element).val();
            var number = parseNumber(value);
            var observable = valueAccessor();
            if (!isNaN(number) && number >= minValue && number <= maxValue) {
                observable(number);
                // required to re-set the element value when validation is passed but the value in the UI is 'wrong': e.g: 6,8,8
                $(element).val(number);
            }
            else {
                if (value == '') {
                    observable(value);
                } else {
                    //validationHandler.notifyError(element, NumericValidationError);
                    observable(fallbackValue);
                    $(element).val(fallbackValue);
                }
            }
        });

        // keypress
        ko.utils.registerEventHandler(element, "keypress", function (event) {
            var isValid = onlyRealNumbersChars(event);
            if (!isValid) {
                event.preventDefault();
            }
        });
    },
    update: function (element, valueAccessor, allBindingsAccessor, viewModel, bindingContext) {
        var minValue = allBindingsAccessor().minValue || 1;
        var maxValue = allBindingsAccessor().maxValue || 100;

        var value = ko.utils.unwrapObservable(valueAccessor());
        var number = parseNumber(value);
        if (!isNaN(number) && number >= minValue && number <= maxValue) {
            $(element).val(number.toString().replace('.', ','));
        } else {
            if (value == '') {
                $(element).val(value);
            }
        }
    }
};
/*
Used for datetime binding:
*/


ko.bindingHandlers['datetimeISO'] = {
    init: function (element, valueAccessor, allBindingsAccessor, viewModel, bindingContext) {
        // change
        
        registerValidationRule(element, "change", function () {
            //debugger;
            var value = $(element).val();
            //$(element).css('border-color', '');
            var dateValue = moment(value, ["DD/MM/YYYY", "DD/MM/YYYY", "YYYY/MM/DDTHH:mm:ss"]);

            var observable = valueAccessor();
            if (dateValue != null && dateValue.isValid()) {
                if (dateValue.year() < 100) {
                    dateValue.add('y', 2000);
                }

                var formattedValue = '';
                if (value != '') {
                    formattedValue = dateValue.format("DD/MM/YYYY");
                }

                observable(formattedValue);
                // required to re-set the element value when validation is passed but the value in the UI is 'wrong': e.g: 08/03/20139
                $(element).val(formattedValue);
            }
            else {
                if (value != '') {
                    $(element).val("");
                    //$(element).css('border-color', 'red');
                    //validationHandler.notifyError(element, DateTimeValidationError);
                } else {
                    observable(value);
                }
            }
        });

        // keypress
        ko.utils.registerEventHandler(element, "keypress", function (event) {
            var isValid = onlyDateChars(event);
            if (!isValid) {
                event.preventDefault();
            }
        });
    },
    update: function (element, valueAccessor, allBindingsAccessor, viewModel, bindingContext) {
        var value = ko.utils.unwrapObservable(valueAccessor());
        var dateValue = moment(value, ["DD/MM/YYYY", "YYYY/MM/DDTHH:mm:ss"]);
        if (dateValue != null && dateValue.isValid()) {

            var formattedValue = dateValue.format("DD/MM/YYYY");
            $(element).val(formattedValue);
        } else {
            if (value == '') {
                $(element).val(value);
            }
        }
    }
};


ko.bindingHandlers['datetime'] = {
    init: function (element, valueAccessor, allBindingsAccessor, viewModel, bindingContext) {
        // change
        registerValidationRule(element, "change", function () {

            var value = $(element).val();
            var dateValue = moment(value, ["DD/MM/YYYY", "DD/MM/YYYY", "YYYY/MM/DDTHH:mm:ss"]);

            var observable = valueAccessor();
            if (dateValue != null && dateValue.isValid()) {
                if (dateValue.year() < 100) {
                    dateValue.add('y', 2000);
                }

                var formattedValue = '';
                if (value != '') {
                    formattedValue = dateValue.format("DD/MM/YYYY");
                }

                observable(formattedValue);
                // required to re-set the element value when validation is passed but the value in the UI is 'wrong': e.g: 08/03/20139
                $(element).val(formattedValue);
            }
            else {
                if (value != '') {
                    // validationHandler.notifyError(element, DateTimeValidationError);
                } else {
                    observable(value);
                }
            }
        });

        // keypress
        ko.utils.registerEventHandler(element, "keypress", function (event) {
            var isValid = onlyDateChars(event);
            if (!isValid) {
                event.preventDefault();
            }
        });
    },
    update: function (element, valueAccessor, allBindingsAccessor, viewModel, bindingContext) {
        var value = ko.utils.unwrapObservable(valueAccessor());
        var dateValue = moment(value, ["DD/MM/YYYY", "YYYY/MM/DDTHH:mm:ss"]);
        if (dateValue != null && dateValue.isValid()) {
            
            var formattedValue = dateValue.format("DD/MM/YYYY");
            $(element).val(formattedValue);
        } else {
            if (value == '') {
                $(element).val(value);
            }
        }
    }
};

ko.bindingHandlers['date'] = {
    init: function (element, valueAccessor, allBindingsAccessor, viewModel, bindingContext) {
        // change
        registerValidationRule(element, "change", function () {

            var value = $(element).val();
            var observable = valueAccessor();

            var dateValue = moment(value, ["DD/MM/YYYY"]);
            if (dateValue != null && dateValue.isValid()) {
                if (dateValue.year() < 100) {
                    dateValue.add('y', 2000);
                }

                var formattedValue = '';
                if (value != '') {
                    formattedValue = dateValue.format("DD/MM/YYYY");
                }

                observable(formattedValue);
                // required to re-set the element value when validation is passed but the value in the UI is 'wrong': e.g: 08/03/20139
                $(element).val(formattedValue);
            }
            else {
                if (value != '') {
                    // validationHandler.notifyError(element, DateTimeValidationError);
                } else {
                    observable(value);
                }
            }
        });

        // keypress
        ko.utils.registerEventHandler(element, "keypress", function (event) {
            var isValid = onlyDateChars(event);
            if (!isValid) {
                event.preventDefault();
            }
        });
    },
    update: function (element, valueAccessor, allBindingsAccessor, viewModel, bindingContext) {
        var value = ko.utils.unwrapObservable(valueAccessor());
        var dateValue = moment(value, ["DD/MM/YYYY"]);
        if (dateValue != null && dateValue.isValid()) {

            var formattedValue = dateValue.format("DD/MM/YYYY");
            $(element).val(formattedValue);
        } else {
            if (value == '') {
                $(element).val(value);
            }
        }
    }
};


//Bind date, store a javascript Date in the observable property and show date in italian format
ko.bindingHandlers['dateText'] = {
    init: function (element, valueAccessor, allBindingsAccessor, viewModel) {
        ko.utils.registerEventHandler(element, "change", function () {
            var value = valueAccessor();
            var viewModelValue = App.Core.IsNullOrEmpty(element.value) ?
                null :
                App.Core.ParseDate(element.value.trim());
            value(viewModelValue);
        });
    },
    update: function (element, valueAccessor, allBindingsAccessor, viewModel) {
        var value = ko.isObservable(valueAccessor()) ? valueAccessor()() : valueAccessor();
 
        var viewModelValue = App.Core.IsNullOrUndefined(value) ?
            null :
            App.Core.FormatDate(value);
 
        if (typeof element.type === "undefined" || element.type === "") {
            element.innerHTML = viewModelValue;
        } else {
            element.value = viewModelValue;
        }
    }
};


function onlyDateChars(e) {
    var keyCode;
    if (window.event || !e.which) // IE o NE?
    {
        keyCode = e.keyCode; // per IE
    }
    else if (e) // netscape
    {
        keyCode = e.which;
    }

    // backspace\tab
    if (keyCode == 8 || keyCode == 9) {
        return true;
    }

    if (keyCode < 47 || keyCode > 57) {
        return false;
    }
    return true;
}
/*
Used to update the value inside a dictionary property.
*/
ko.bindingHandlers['dictionary'] = {
    'init': function (element, valueAccessor, allBindings, viewModel, bindingContext) {
        var updateHandler = function () {
            var id = allBindings().id;
            var originalIban = allBindings().originalValue;
            var newIban = element.value;
            var modelValue = valueAccessor();

            if (modelValue[id] == undefined) {
                modelValue[id] = ko.observable();
            }

            if (newIban != originalIban) {
                modelValue[id](newIban);
            } else {
                modelValue[id] = undefined;
            }
        };
        ko.utils.registerEventHandler(element, "change", updateHandler);
    }
};

ko.bindingHandlers['class'] = {
    'init': function (element, valueAccessor, allBindings, viewModel, bindingContext) {
        debugger;
    },
    update: function (element, valueAccessor) {
        debugger;
        var currentValue = ko.utils.unwrapObservable(valueAccessor()),
            prevValue = element['__ko__previousClassValue__'],

            // Handles updating adding/removing classes
            addOrRemoveClasses = function (singleValueOrArray, shouldHaveClass) {
                if (Object.prototype.toString.call(singleValueOrArray) === '[object Array]') {
                    ko.utils.arrayForEach(singleValueOrArray, function (cssClass) {
                        var value = ko.utils.unwrapObservable(cssClass);
                        ko.utils.toggleDomNodeCssClass(element, value, shouldHaveClass);
                    });
                } else if (singleValueOrArray) {
                    ko.utils.toggleDomNodeCssClass(element, singleValueOrArray, shouldHaveClass);
                }
            };

        // Remove old value(s) (preserves any existing CSS classes)
        addOrRemoveClasses(prevValue, false);

        // Set new value(s)
        addOrRemoveClasses(currentValue, true);

        // Store a copy of the current value
        if (currentValue) {
            element['__ko__previousClassValue__'] = currentValue.concat();
        } else {
            element['__ko__previousClassValue__'] = '';
        }
            
        
    }
};

// Here's a custom Knockout binding that makes elements shown/hidden via jQuery's fadeIn()/fadeOut() methods
// Could be stored in a separate utility library
ko.bindingHandlers['fadeVisible'] = {
    init: function (element, valueAccessor) {
        // Initially set the element to be instantly visible/hidden depending on the value
        var value = valueAccessor();
        $(element).toggle(ko.unwrap(value)); // Use "unwrapObservable" so we can handle values that may or may not be observable
    },
    update: function (element, valueAccessor) {
        // Whenever the value subsequently changes, slowly fade the element in or out
        var value = valueAccessor();
        ko.unwrap(value) ? $(element).fadeIn() : $(element).fadeOut();
    }
};

ko.bindingHandlers['numericTextSeparator'] = {
    init: function (element, valueAccessor, allBindingsAccessor) {
        ko.utils.registerEventHandler(element, "keypress", function (event) {
            var isValid = onlyRealNumbersChars(event);
            if (!isValid) {
                event.preventDefault();
            }
        });

        ko.utils.registerEventHandler(element, "change", function (event) {
            var value = valueAccessor();
            var inputValue = event.target.value;

            value(inputValue);
        });
    },
    update: function (element, valueAccessor, allBindingsAccessor) {
        var value = ko.isObservable(valueAccessor()) ? valueAccessor()() : valueAccessor();

        if (!App.Core.IsNullOrUndefined(value)) {
            var decimal = App.Core.ParseNumber(value);

            if (isNaN(decimal)) {
                valueAccessor()(null);
                element.value = "";
            } else {
                decimal = Math.round(decimal * 100) / 100;

                if (ko.isObservable(valueAccessor()))
                    valueAccessor()(decimal);

                if (typeof element.type === "undefined") {
                    element.innerHTML = App.Core.FormatNumberSeparation(decimal);
                } else {
                    element.value = App.Core.FormatNumberSeparation(decimal);
                }
            }
        } else {
            valueAccessor()(null);
            element.value = "";
        }
    }
};


ko.bindingHandlers['juiEnable'] = {
    'update': function (element, valueAccessor) {
        
        var value = ko.utils.unwrapObservable(valueAccessor());
        if (value && element.disabled)
            element.removeAttribute("disabled");
        else if ((!value) && (!element.disabled))
            element.disabled = true;
        
        var $element = $(element);
        
        if ($element.hasClass("ui-button")) {
            $element.button("option", "disabled", !value);
        }
        
        

    } 
};


