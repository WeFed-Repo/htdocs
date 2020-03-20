$(function () {
    /*
        DOCUMENTAZIONE DI UTILIZZO

        creare nuovo widget:
            $(selector, context).formAction({ param: { } });

            .param: l'oggetto _default contiene tutti i parametri utilizzabili con i relativi valori di default.


        ottenere l'oggetto bindato alla griglia:
            $(selector, context).data();
            ritorna l'oggetto contenente i parametri + l'oggetto tmFormAction: e.(anonymous function).(anonymous function) contenente il widget

    */

    $.widget('tm.formAction', {
        options: {
            param: {}

        },

        _default: {
            formTitle: undefined,
            tooltipToggleOpen: '',
            tooltipToggleClose: '',
            slideSpeed: 200,
            closeFormAfterAction: true,
            inputDefaultDescription: '',
            buttons: [],

            //predicati
            isExpandable: false,
            isOpen: false
        },

        _init: function () {

            var _param = $.extend(this._default, this.options.param);

            var title = _param.formTitle ? _param.formTitle : this.element.attr('tm-title');
            var isExpandable = _param.isExpandable ? true : this.element.attr('tm-expand') != undefined;

            if (_param.isOpen == false) {
                _param.isOpen = this.element.attr('tm-open') != undefined;
            }

            var tooltip = _param.isOpen ? _param.tooltipToggleOpen : _param.tooltipToggleClose;

            this.element.addClass('section');

            if (title) {
                this.element.prepend('' +
                    '<div class="row">' +
                    '<h3 class="titleSection">' + title + '</h3>' +
                    (isExpandable ? '<div class="toggle pull-right icon-replace ' + (_param.isOpen ? 'icon-collapse' : 'icon-expand') + ' active ' + (_param.isOpen ? 'open' : '') + '" title="' + tooltip + '" style="font-size: 2em; margin-right: 15px; cursor: pointer;"></div>' : '') +
                    '</div>'
                );
            }

            if (_param.buttons && _param.buttons.length > 0) {

                $('div.form-action-content', this.element).append('' +
                    '<div class="form-group">' +
                    '<div class="pull-right margin-bottom20 buttons-group">' +
                    '</div>' +
                    '</div>'
                );

                _param._inner = { buttons: {} };
                for (var i = 0; i < _param.buttons.length; i++) {

                    _param.buttons[i].id = 'formButton_' + i;
                    var _button = _param.buttons[i];

                    _param._inner.buttons[_button.id] = _button;


                    $('div.form-action-content div.buttons-group', this.element).append('<button name="' + _button.id + '" class="formButton ' + _button.classes + ' btn btn-primary" type="button">' + _button.text + '</button>');

                    $('button[name="' + _button.id + '"]', this.element).on('click', function () {
                        var scope = $(this).closest('.form-action').data();

                        if (!!scope.closeFormAfterAction) {
                            scope.tmFormAction.closeCriteria($(this).closest('.form-action').find('div.toggle'));
                        }

                        scope._inner.buttons[this.name].action();

                    });

                }

            }

            this.element.data(_param);

            if (isExpandable) {

                $(this.element).append('<div class="summary" style="margin-left: 5px; margin-right: 5px;"></div>');

                var toggle = $('div.toggle', this.element);

                if (_param.isOpen) {
                    $(this.element).data().tmFormAction.openCriteria(toggle, true);

                } else {
                    $(this.element).data().tmFormAction.closeCriteria(toggle, true);

                }

                $('div.toggle', this.element).on('click', function () {

                    var isOpen = $(this).hasClass('open');
                    var element = $(this).closest('.form-action');

                    if (isOpen) {

                        //stiamo chiudendo la sezione
                        element.data().tmFormAction.closeCriteria($(this));


                    } else {

                        //stiamo aprendo la sezione
                        element.data().tmFormAction.openCriteria($(this));

                    }

                });
            }

        },

        openCriteria: function (toggle, noSlideEffect) {
            var element = toggle.closest('.form-action');
            var slideSpeed = !!noSlideEffect ? 0 : $(element).data().slideSpeed;

            toggle.removeClass('icon-expand').removeClass('open').removeClass('icon-collapse');
            toggle.addClass('icon-collapse').addClass('open');

            toggle.attr('title', element.data().tooltipToggleOpen);

            $('div.form-action-content', element).slideDown(slideSpeed);
            $('div.summary', element).text('');

        },

        closeCriteria: function (toggle, noSlideEffect) {
            var element = toggle.closest('.form-action');
            var slideSpeed = !!noSlideEffect ? 0 : $(element).data().slideSpeed;

            toggle.removeClass('icon-expand').removeClass('open').removeClass('icon-collapse');
            toggle.addClass('icon-expand');

            toggle.attr('title', element.data().tooltipToggleClose);

            $('div.form-action-content', element).slideUp(slideSpeed);

            var filterString = '';
            var filterName = ''; //usato per raggruppare elementi con lo stesso nome
            var separator =
            {
                value: ', ',
                item: '; ',
                keyValue: ': '
            };

            $('div.form-action-content input[type="checkbox"], div.form-action-content input[type="radio"]', element).each(function (index, item) {

                if (this.checked == true) {
                    filterString += this.name == filterName ? (separator.value + this.value) : ((filterString != '' ? separator.item : '') + this.name + separator.keyValue + this.value);
                    filterName = this.name;
                }

            });

            filterString += filterString != '' ? separator.item : '';

            $('div.form-action-content select:not([multiple])', element).each(function (index, item) {

                if (this.options.length > 0) {

                    var _name = this.name;
                    var _value = this.options[this.selectedIndex].text;

                    if (_value != undefined && _value != '') {
                        filterString += '' + _name + separator.keyValue + _value + separator.item;
                    }

                }

            });

            $('div.form-action-content select[multiple]', element).each(function (index, item) {

                if (this.options.length > 0) {

                    var _name = this.name;
                    var _value = '';

                    $.each(this.selectedOptions, function () {
                        _value += this.text + separator.value;

                    });

                    _value = _value.trim();
                    _value = _value.substring(0, _value.length - 1);

                    if (_value != undefined && _value != '') {
                        filterString += '' + _name + separator.keyValue + _value + separator.item;
                    }

                }

            });

            $('div.form-action-content input:not([type="checkbox"]):not([type="radio"]), div.form-action-content textarea', element).each(function (index, item) {

                var _name = this.name;
                var _value = this.value;

                if (_value != undefined && _value != '') {
                    filterString += '' + _name + separator.keyValue + _value + separator.item;
                }

            });

            if (filterString != undefined && filterString.trim() != '') {

                filterString = filterString.trim();

                if (filterString[0] == separator.value.trim() || filterString[0] == separator.item.trim()) {
                    filterString = filterString.substring(1, filterString.length);

                }

                if (filterString.trim()[filterString.length - 1] == separator.value.trim() || filterString.trim()[filterString.length - 1] == separator.item.trim()) {
                    filterString = filterString.trim().substring(0, filterString.length - 1) + '.';

                }

            } else {
                filterString = element.data().inputDefaultDescription;

            }

            $('div.summary', element).text(filterString);

        }

    });

});
