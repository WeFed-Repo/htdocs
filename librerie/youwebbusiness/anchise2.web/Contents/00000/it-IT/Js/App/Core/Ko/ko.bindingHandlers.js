// Visible alternative
ko.bindingHandlers['slideVisible'] = {
    init: function (element, valueAccessor) {
        var value = valueAccessor();
        $(element).toggle(ko.unwrap(value));
    },
    update: function (element, valueAccessor) {
        var value = valueAccessor();
        ko.unwrap(value) ? $(element).slideDown() : $(element).slideUp();
    }
};

// Visible alternative
ko.bindingHandlers['slideLateral'] = {
    init: function (element, valueAccessor) {
        var value = valueAccessor();
        $(element).toggle(ko.unwrap(value));
    },
    update: function (element, valueAccessor) {
        var value = valueAccessor();
        ko.unwrap(value) ? $(element).show("slide", { direction: "right" }, 1000) : $(element).hide("slide", { direction: "left" }, 1000);
    }
};

// Bind numeric text 
ko.bindingHandlers['numericText'] = {
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
                    element.innerHTML = App.Core.FormatNumber(decimal);
                } else {
                    element.value = App.Core.FormatNumber(decimal);
                }
            }
        } else {
            valueAccessor()(null);
            element.value = "";
        }
    }
};

ko.bindingHandlers['numeric'] = {

    init: function (element, valueAccessor) {

        $(element).on("keydown", function (event) {

            // Allow: backspace, delete, tab, escape, and enter

            if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 ||

                // Allow: Ctrl+A

            (event.keyCode == 65 && event.ctrlKey === true) ||

                // Allow: F5

            (event.keyCode == 116) ||

                // Allow: home, end, left, right

            (event.keyCode >= 35 && event.keyCode <= 39)) {

                // let it happen, don't do anything

                return;

            }

            else {

                // Ensure that it is a number and stop the keypress

                if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {

                    event.preventDefault();

                }

            }

        });

    }

};

ko.bindingHandlers['valueAsInt'] = {

    init: function (element, valueAccessor, allBindingsAccessor) {

        var observable = valueAccessor(),

        interceptor = ko.computed({

            read: function () {

                var val = ko.utils.unwrapObservable(observable);

                return (observable() ? observable().toString() : observable());

            },

            write: function (newValue) {

                observable(newValue ? parseInt(newValue, 10) : undefined);

            },

            owner: this

        });

        ko.applyBindingsToNode(element, { value: interceptor });

    }

};


// Binding numeric text with dot for thousands separator
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
            element.value = "";
        }
    }
};

// Bind date, store a javascript Date in the observable property and show date in italian format
ko.bindingHandlers['dateText'] = {
    init: function (element, valueAccessor, allBindingsAccessor, viewModel) {
        ko.utils.registerEventHandler(element, "change", function () {
            var value = valueAccessor();
            
            var viewModelValue = App.Core.IsNullOrEmpty(element.value) ?
                "" :
                App.Core.ParseDate(element.value.trim());
            
            value(viewModelValue);
        });
    },
    update: function (element, valueAccessor, allBindingsAccessor, viewModel) {
        var value = ko.isObservable(valueAccessor()) ? valueAccessor()() : valueAccessor();

        var viewModelValue = App.Core.IsNullOrUndefined(value) || value == '' ?
            "" :
            App.Core.FormatDate(value);

        if (typeof element.type === "undefined" || element.type === "") {
            element.innerHTML = viewModelValue;
        } else {
            element.value = viewModelValue;
        }
    }
};

// Bind datetime, store a javascript Date in the observable property and show date in italian format
ko.bindingHandlers['dateTimeText'] = {
    init: function (element, valueAccessor, allBindingsAccessor, viewModel) {
        ko.utils.registerEventHandler(element, "change", function () {
            var value = valueAccessor();
            var viewModelValue = App.Core.IsNullOrEmpty(element.value) ?
                "" :
                App.Core.ParseDateTimeFormatted(element.value.trim(), "DD/MM/YYYY HH:mm", "DD/MM/YY HH:mm");
            value(viewModelValue);
        });
    },
    update: function (element, valueAccessor, allBindingsAccessor, viewModel) {
        var value = ko.isObservable(valueAccessor()) ? valueAccessor()() : valueAccessor();
        var viewModelValue = App.Core.IsNullOrUndefined(value) ?
            "" :
            moment(value).format("DD/MM/YYYY HH:mm");

        if (typeof element.type === "undefined" || element.type === "") {
            element.innerHTML = viewModelValue;
        } else {
            element.value = viewModelValue;
        }
    }
};

// Bind datetime esteso a hh:mm:ss
ko.bindingHandlers['dateTime2Text'] = {
    init: function (element, valueAccessor, allBindingsAccessor, viewModel) {
        ko.utils.registerEventHandler(element, "change", function () {
            var value = valueAccessor();
            var viewModelValue = App.Core.IsNullOrEmpty(element.value) ?
                "" :
                App.Core.ParseDateTimeFormatted(element.value.trim(), "DD/MM/YYYY HH:mm:ss", "DD/MM/YY HH:mm:ss");
            value(viewModelValue);
        });
    },
    update: function (element, valueAccessor, allBindingsAccessor, viewModel) {
        var value = ko.isObservable(valueAccessor()) ? valueAccessor()() : valueAccessor();
        var viewModelValue = App.Core.IsNullOrUndefined(value) ?
            "" :
            moment(value).format("DD/MM/YYYY HH:mm:ss");

        if (typeof element.type === "undefined" || element.type === "") {
            element.innerHTML = viewModelValue;
        } else {
            element.value = viewModelValue;
        }
    }
};

// Generate a unique identifier for a tag
ko.bindingHandlers['uniqueId'] = {
    init: function (element, valueAccessor) {
        var value = valueAccessor();
        var identifier = value.id || ko.bindingHandlers.uniqueId.prefix + (++ko.bindingHandlers.uniqueId.counter);

        element.id = identifier;
        value(identifier);
    },
    counter: 0,
    prefix: "ko_unique_"
};

// Enable all children
ko.bindingHandlers['enableChildren'] = {
    'update': function (element, valueAccessor) {
        var value = ko.utils.unwrapObservable(valueAccessor());

        if (value && element.disabled) {
            element.removeAttribute('disabled');
            $(element).find('*').removeAttr('disabled');
        } else if ((!value) && (!element.disabled)) {
            element.disabled = true;
            $(element).find('*').attr('disabled', 'disabled');
        }
    }
};

// Disable all children
ko.bindingHandlers['disableChildren'] = {
    'update': function (element, valueAccessor) {
        ko.bindingHandlers['enableChildren']['update'](element, function () { return !ko.utils.unwrapObservable(valueAccessor()) });
    }
};

ko.bindingHandlers['cbiText'] = {
    init: function (element, valueAccessor, allBindingsAccessor) {
        ko.utils.registerEventHandler(element, "keypress", function (event) {
            if (!cbiValidation(event)) {
                event.preventDefault();
            }
        });

        ko.utils.registerEventHandler(element, "change", function (event) {
            var value = valueAccessor();
            var inputValue = event.target.value;

            value(inputValue);
        });
    },
    update: function (element, valueAccessor, allBindingsAccessor, viewModel) {
        var value = ko.isObservable(valueAccessor()) ? valueAccessor()() : valueAccessor();
        
        if (typeof element.type === "undefined" || element.type === "") {
            element.innerHTML = value;
        } else {
            element.value = value;
        }
    }
}

// Binding uppercase text
ko.bindingHandlers['uppercaseText'] = {
    init: function (element, valueAccessor, allBindingsAccessor) {
        ko.utils.registerEventHandler(element, "keyup", function (event) {
            var value = valueAccessor();
            var inputValue = event.target.value;

            value(inputValue);
        });

        var observable = valueAccessor(),

            interceptor = ko.computed({

                read: function () {

                    var val = ko.utils.unwrapObservable(observable);

                    return (observable() ? observable().toString() : observable());

                },

                write: function (newValue) {

                    observable(newValue ? newValue.toUpperCase() : '');

                },

                owner: this

            });

        ko.applyBindingsToNode(element, { value: interceptor });
    },
    update: function (element, valueAccessor, allBindingsAccessor) {
        var value = ko.isObservable(valueAccessor()) ? valueAccessor()() : valueAccessor();
        
        if (element.tagName == "INPUT") {
            var start = element.selectionStart;
            var end = element.selectionEnd;
        }


        if (!App.Core.IsNullOrUndefined(value)) {
            var uppercase = value.toUpperCase();

            if (ko.isObservable(valueAccessor()))
                valueAccessor()(uppercase);

            if (typeof element.type === "undefined") {
                element.innerHTML = uppercase;
            } else {
                element.value = uppercase;
            }

            if (element.tagName == "INPUT") {
                element.setSelectionRange(start, end); // reset cursor position
            }

        } else {
            valueAccessor()(null);
            element.value = "";
        }
    }
};

/*
ko.bindingHandlers['uppercaseText'] = {
    init: function (element, valueAccessor, allBindings, viewModel, bindingContext) {
        ko.bindingHandlers["value"].init(element, valueAccessor, allBindings);
    },
    update: function (element, valueAccessor, allBindings, viewModel, bindingContext) {

        var newValue = ko.utils.unwrapObservable(valueAccessor()) || "";
        
        if (element.tagName == "INPUT") {
            var start = element.selectionStart;
            var end = element.selectionEnd;
        }

        ko.selectExtensions.writeValue(element, newValue); // set element value

        if (element.tagName == "INPUT") {
            element.setSelectionRange(start, end); // reset cursor position
        }
    }
};
*/

function cbiValidation(e) {
    var keyCode;
    var cbiValidChars = /^[0-9a-zA-Z\/\-\?:\(\)\.,'\+ ]+$/;

    var charCode = (event.which) ? event.which : event.keyCode;
    var charValue = String.fromCharCode(keyCode);
    return charCode > 31 && cbiValidChars.test(charValue);
}