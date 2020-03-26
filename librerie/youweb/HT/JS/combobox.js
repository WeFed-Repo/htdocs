
$.widget("ui.combobox", {
    version: "@VERSION",

    widgetEventPrefix: "combobox-",

    uiCombo: null,
    uiInput: null,
    _wasOpen: false,
    options:{},

    _create: function() {
        var self = this,
            select = this.element.hide(),
            input, wrapper;

        input = this.uiInput =
            $("<input />")
            .insertAfter(select)
            .addClass("ui-widget ui-widget-content  ui-combobox-input form-control")
            .val(select.children(':selected').text().replace(/^\s\s*/, '').replace(/\s\s*$/, ''))
            .attr('tabindex', select.attr('tabindex'))
            .attr('aria-autocomplete', 'inline');
        wrapper = this.uiCombo =
            input.wrap('<span>')
            .parent()
            .addClass('ui-combobox')
            .insertAfter(select);

        input
            .autocomplete({
                delay: 0,
                minLength: 0,

                appendTo: wrapper,
                source: $.proxy(this, "_linkSelectList"),
                select: function(event, ui) {
                    $(this).attr('title', ui.item.value);
                }
            }).focusin(function() {
                oldValue = $(this).val();
                $(this).val("");
            }).focusout(function() {
                $(this).val(oldValue);
            });

        $("<button>")
            .attr("tabIndex", -1)
            .attr("type", "button")
            .insertAfter(input)
            .button({
                icons: {
                    primary: "ui-icon-triangle-1-s"
                },
                text: false
            })
            .removeClass("ui-corner-all")
            .addClass("ui-button-icon ui-combobox-button combobox-arrow");

        // Our items have HTML tags.  The default rendering uses text()
        // to set the content of the <a> tag.  We need html().
        input.data("ui-autocomplete")._renderItem = function(ul, item) {
            ul.attr('role', 'listbox')
                .attr('aria-expanded', 'true');

            return $("<li>")
                .attr('class', item.option.className)
                .attr('role', 'option')	
                .append($("<a>").html(item.label))
                .appendTo(ul);

        };
        this._on(this._events);
    },

    _linkSelectList: function(request, response) {
        var matcher = new RegExp($.ui.autocomplete.escapeRegex(request.term), 'i');
        response(this.element.children('option:not([style*="display: none"])').map(function() {
            var text = $(this).text().replace(/^\s\s*/, '').replace(/\s\s*$/, '')
            var value = $(this).attr('value').replace(/^\s\s*/, '').replace(/\s\s*$/, '')
            var id = $(this).attr('id');
            if (this.value && (!request.term || matcher.test(text))) {
                var optionData = {
                    label: text,
                    value: text,
                    id: id,
                    option: this
                };
                if (request.term) {
                    optionData.label = text.replace(
                        new RegExp(
                            "(?![^&;]+;)(?!<[^<>]*)(" +
                            $.ui.autocomplete.escapeRegex(request.term) +
                            ")(?![^<>]*>)(?![^&;]+;)", "gi"),
                        "<strong>$1</strong>");
                }
                return optionData;
            }
        }));
    },

    _events: {
        "autocompletechange input": function(event, ui) {
            var $el = $(event.currentTarget);
            var changedOption = ui.item ? ui.item.option : null;
            if (!ui.item) {
                var matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex($el.val()) + "$", "i"),
                    valid = false,
                    matchContains = null,
                    iContains = 0,
                    iSelectCtr = -1,
                    iSelected = -1,
                    optContains = null;
                if (this.options.autofillsinglematch) {
                    matchContains = new RegExp($.ui.autocomplete.escapeRegex($el.val()), "i");
                }

                this.element.children("option").each(function() {
                    var t = $(this).text().replace(/^\s\s*/, '').replace(/\s\s*$/, '');
                    if (t.match(matcher)) {
                        this.selected = valid = true;
                        return false;
                    }
                    if (matchContains) {
                        // look for items containing the value
                        iSelectCtr++;
                        if (t.match(matchContains)) {
                            iContains++;
                            optContains = $(this);
                            iSelected = iSelectCtr;
                        }
                    }
                });

                if (!valid) {
                    // autofill option:  if there is just one match, then select the matched option
                    if (iContains == 1) {
                        changedOption = optContains[0];
                        changedOption.selected = true;
                        var t2 = optContains.text().replace(/^\s\s*/, '').replace(/\s\s*$/, '');
                        $el.val(t2);
                        $el.data('ui-autocomplete').term = t2;
                        this.element.prop('selectedIndex', iSelected);

                    } else {
                        // remove invalid value, as it didn't match anything
                        $el.val('');
                        // Internally, term must change before another search is performed
                        // if the same search is performed again, the menu won't be shown
                        // because the value didn't actually change via a keyboard event
                        $el.data('ui-autocomplete').term = '';

                        this.element.prop('selectedIndex', -1);
                    }
                }
            }

            this._trigger("change", event, {
                item: changedOption
            });
        },

        "autocompleteselect input": function(event, ui) {
            ui.item.option.selected = true;
            oldValue = $(ui.item.option).text().replace(/^\s\s*/, '').replace(/\s\s*$/, '')
            // onChange(ui.item.option);    
            this._trigger('select', event, {
                item: ui.item.option
            });
        },

        "autocompleteopen input": function(event, ui) {
            this.uiCombo.children('.ui-autocomplete')
                .outerWidth(this.uiCombo.outerWidth(true));
        },

        "mousedown .ui-combobox-button": function(event) {
            this._wasOpen = this.uiInput.autocomplete("widget").is(":visible");
        },

        // click sul triangolo che apre la combobox 
        "click .ui-combobox-button": function(event) {
            this.uiInput.focus();
            // close if already visible
            if (this._wasOpen)
                return;
            // pass empty string as value to search for, displaying all results
            this.uiInput.autocomplete("search", "");
        }
    },

    _destroy: function() {
        this.element.show();
        this.uiCombo.replaceWith(this.element);
    },

    widget: function() {
        return this.uiCombo;
    },

    _getCreateEventData: function() {
        return {
            select: this.element,
            combo: this.uiCombo,
            input: this.uiInput
        };
    }
});