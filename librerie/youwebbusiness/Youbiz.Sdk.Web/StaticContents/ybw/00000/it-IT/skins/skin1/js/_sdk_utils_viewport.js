/*
      ++++++++++++++++++++++++++++++++++++++++++++++++++++
        DOCUMENTAZIONE
      ------------------
        componente              SDK.UTILS.VIEWPORT
        ultimo aggiornamento    17/05/2018
      ++++++++++++++++++++++++++++++++++++++++++++++++++++

      Espone tutte le utility inerenti al viewport.
      Inoltre sull'ascolto dell'onchange del viewport (a seconda del match con un breakpoint) notifica il cambio della dimensione. La notifica si chiama sdk.global.viewport.onChange.<breakpoint>

      sdk.utils.viewport.register: function(handler)                registra l'handler passato come parametro sul messaggio del cambio di mediaquery
      sdk.utils.viewport.match: function(string)                    restituisce un BOOLEANO che identifica se il viewport è in match con il breakpoint passato come parametro (esempio: 'xs', 'sm', ...)
      sdk.utils.viewport.getBreakpoints: function()                 restituisce TUTTI i breakpoint definiti       
*/

var sdk;
var sdkParams;
(function (sdk, $, args) {

    sdk.utils = (function (utils, $, args) {

        utils.viewport = (function (viewport, $, args) {

            // CONSTANTS
            //TODO: se bisogna modificare i breakpoint a disposizione (o aggiungerne di nuovi), MODIFICARE IL CONTENUTO DI QUESTO OGGETTO
            var _BREAKPOINTS_ = {
                xsmall: window.matchMedia('(max-width: 576px)'),
                small: window.matchMedia('(max-width: 767px)'),
                medium: window.matchMedia('(max-width: 991px)'),
                large: window.matchMedia('(max-width: 1200px)'),
                xlarge: window.matchMedia('(min-width: 1200px)')
            };

            var _getBreakpoints = {};

            var _MESSAGENAME_ = 'sdk.global.viewport.onChange';
            var _MARGIN_TOP_ = 70;

            // LOGIC
            for (var breakpoint in _BREAKPOINTS_) {
                _BREAKPOINTS_[breakpoint].addListener(function (e) { sdk.utils.pubsub.send(_MESSAGENAME_, { mediaquery: e, breakpoint: breakpoint }) });
                _getBreakpoints[breakpoint] = breakpoint;
            }

            // HANDLERS

            var _match = function (breakpoint) {

                if (breakpoint != undefined && typeof breakpoint == 'string') {

                    return _BREAKPOINTS_[breakpoint].matches;
                }

                return false;
            };

            var _getCurrent = function () {

                var matched;

                if (_BREAKPOINTS_.xlarge.matches) {

                    matched = 'xlarge';
                }

                if (_BREAKPOINTS_.large.matches) {

                    matched = 'large';
                }

                if (_BREAKPOINTS_.medium.matches) {

                    matched = 'medium';
                }

                if (_BREAKPOINTS_.small.matches) {

                    matched = 'small';
                }

                if (_BREAKPOINTS_.xsmall.matches) {
                    
                    matched = 'xsmall';
                }

                return matched;
            };

            var _register = function (handler) {

                sdk.utils.pubsub.register(_MESSAGENAME_, handler);
            }

            var _scrollTo = function (element, marginTop) {

                element = $(element);
                marginTop = parseInt(marginTop);
                if (isNaN(marginTop)) { // se marginTop non è un numero allora prende il default, altrimenti prendiamo il valore intero

                    marginTop = 10;
                }

                var position = element.offset();
                var margin = (_MARGIN_TOP_ + marginTop);

                // portiamo la pagina dove è posizionato l'elemento specificato.
                // se il messagePanel ha un margine inferiore a panelMargin rispetto al top di pagina allora andiamo fino al top di pagina.
                $('html,body').scrollTop((position.top - margin) < 0 ? 0 : (position.top - margin));

            };

            // EXPORT
            viewport.breakpoint = _getBreakpoints;
            viewport.match = _match;
            viewport.register = _register;
            viewport.getCurrent = _getCurrent;
            viewport.scrollTo = _scrollTo;

            return viewport;

        })(utils.viewport || {}, $, args.viewport || {});

        return utils;
    })(sdk.utils || {}, $, args.utils || {});

    return sdk;

})(sdk || (sdk = {}), jQuery, sdkParams);
