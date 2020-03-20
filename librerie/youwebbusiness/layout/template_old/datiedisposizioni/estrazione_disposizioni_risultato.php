<div id="mainSection">
                            





<script type="text/html" id="azienda-banca">
    <div class="form-horizontal">
        <div class="form-group">
            <label class="col-sm-1 col-xs-1">
                Azienda
            </label>
            <div class="col-sm-4 col-xs-11">
                <select class="form-control"
                        data-bind="options: $component.Aziende, optionsCaption: 'Tutti', optionsText: 'RagioneSociale', value: AziendaSelezionata"></select>
            </div>

            <div data-bind="if:AziendaSelezionata()">
                <label class="col-sm-offset-2 col-sm-1 col-xs-1">
                    SIA
                </label>
                <div class="col-sm-4 col-xs-11">
                    <input type="text" class="form-control" data-bind="value: AziendaSelezionata().CodiceSia, enable:false" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1 col-xs-1">
                Banca
            </label>
            <div class="col-sm-4 col-xs-11">
                <select class="form-control"
                        data-bind="options: $component.Banche, optionsCaption: 'Tutti', optionsText: function(item){return item.CodiceAbi() + ' - ' + item.DescrizioneBanca()}, value: BancaSelezionata"></select>
            </div>
        </div>
    </div>
</script>


<script type="text/javascript">
    ko.components.register('azienda-banca', {
        template: { element: 'azienda-banca' },
        viewModel: function (params) {
            var self = this;

            self.AziendaSelezionata = params.AziendaSelezionata;
            self.BancaSelezionata = params.BancaSelezionata;
            self.Identifier = params.Identifier;

            var _filterPiazzature = function () {
                var aziendaSelezionata = self.AziendaSelezionata() || null;

                return ko.utils.arrayFilter(PIAZZATURA, function (p) {
                    var current = new App.Common.PiazzaturaBo(p);

                    return (aziendaSelezionata === null || current.Azienda.Id() === aziendaSelezionata.Id());
                });
            };
            self.Aziende = ko.pureComputed(function () {
                return ko.utils.arrayGetDistinctValuesBy(ko.utils.arrayMap(PIAZZATURA, function (p) {
                    var current = new App.Common.PiazzaturaBo(p);

                    return current.Azienda;
                }), 'Id');
            }, self);

            self.Banche = ko.pureComputed(function () {
                return ko.utils.arrayGetDistinctValuesBy(ko.utils.arrayMap(_filterPiazzature(), function (p) {
                    var current = new App.Common.PiazzaturaBo(p);

                    return current.Rapporto;
                }), 'CodiceAbi');
            }, self);

            var _filterPiazzatureAbi = function (abi) {
                return ko.utils.arrayFilter(PIAZZATURA, function (p) {
                    var current = new App.Common.PiazzaturaBo(p);

                    return (abi === null || current.Rapporto.CodiceAbi() === abi);
                });
            };

            var _getIdentifier = function () {
                var abi = null;
                if (!App.Core.IsNullOrUndefined(self.BancaSelezionata()))
                    abi = self.BancaSelezionata().CodiceAbi();
                return ko.utils.arrayFilter(ko.utils.arrayMap(_filterPiazzatureAbi(abi), function (p) {
                    return p.Identifier;
                }), function (id) {
                    var aziendaSelezionata = self.AziendaSelezionata() || null;
                    return ((aziendaSelezionata === null || id.IdAzienda === aziendaSelezionata.Id()));
                });
            };

            var aziendaSelezionataSubscribe = self.AziendaSelezionata.subscribe(function () {
                self.Identifier(_getIdentifier());
            });

            var bancaSelezionataSubscribe = self.BancaSelezionata.subscribe(function () {
                self.Identifier(_getIdentifier());
            });
            // Initialize
            self.Init = function () {
                self.Identifier(_getIdentifier());
                if (self.Aziende().length == 1) {
                    self.AziendaSelezionata(self.Aziende()[0]);
                }
                if (self.Banche().length == 1) {
                    self.BancaSelezionata(self.Banche()[0]);
                }
            };
            self.Init();

            self.dispose = function () {
                aziendaSelezionataSubscribe.dispose();
                bancaSelezionataSubscribe.dispose();
            }
        }
    });
</script>


<script type="text/html" id="date-picker">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" />
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('date-picker', {
        template: { element: 'date-picker' },
        viewModel: function (params) {
            var self = this;

            self.enable = params.enable ? params.enable : ko.observable(true);

            // Model
            self.Date = params.Date;
            self.Id = ko.observable();
            var idSubscribe = self.Id.subscribe(function () {
                // run immidiatly after uniqueId binding ends
                $('#' + self.Id()).datepicker();
            });

            // Actions
            self.ShowPicker = function () {
                if(self.enable() != "false")
                    $('#' + self.Id()).datepicker('show');
            };

            self.dispose = function () {
                idSubscribe.dispose();
            };
        }
    });
</script>



<script type="text/html" id="feedback-messages">
    <div class="riquadro">
        <div data-bind="visible: PageTitle != null">
            <div class="flag" data-bind="css: TitleCssClass">&nbsp;</div>
            <h1 data-bind="text: PageTitle"></h1>
        </div>
        <div class="messagePanel visible" data-bind="css: CssClass">
            <h3 class="titleSection" data-bind="text: Title"></h3>
            <p>
                <strong style="white-space: pre-wrap" data-bind="text: Message">
                </strong>
            </p>
            <ul data-bind="foreach: Messages">
                <li data-bind="text: $data"></li>
            </ul>
        </div>
        <div data-bind="visible: Component != null">
            <!-- ko if: Component != null-->
                <!-- ko component:{name: Component.Name, params: Component.Params} -->
                <!-- /ko -->
            <!-- /ko -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-right">
            <!-- ko foreach: Buttons -->
            <input type="button" class="btn btn-primary" data-bind="value: Label, singleClick: Callback" />
            <!-- /ko -->
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('feedback-messages', {
        template: { element: 'feedback-messages' },
        viewModel: function (params) {
            var self = this;
            self.Title = params.Title || 'Esito Operazione';
            self.PageTitle = params.PageTitle || null;
            self.TitleCssClass = params.TitleCssClass || null;
            self.Message = params.Message || ko.observable('Operazione effettuata con successo.');
            self.Messages = params.Messages || [];
            self.Button = params.Button || null;
            self.Buttons = params.Buttons || [];
            self.CssClass = params.CssClass || 'success';
            self.Component = ko.unwrap(params.Component) || null;

            if (ko.isObservable(params.Buttons)) {
                var buttonsSubscribe = params.Buttons.subscribe(function () {
                    if (params.Buttons().length === 0) {
                        self.Buttons.push(new App.Core.UiButton({
                            Label: 'OK',
                            Callback: function () {
                                history.back();
                            }
                        }));
                    } else {
                        self.Buttons = params.Buttons;
                    }
                });
            }

            // Initialize
            self.Init = function () {
                if (self.Buttons.length === 0) {
                    self.Buttons.push(new App.Core.UiButton({
                        Label: 'OK',
                        Callback: function () {
                            history.back();
                        }
                    }));
                }
            };
            if (!ko.isObservable(params.Buttons)) {
                self.Init();
            }

            self.dispose = function () {
                if(ko.isObservable(params.Buttons)){
                    buttonsSubscribe.dispose();
                }
            }
        }
    });
</script>



<script type="text/html" id="validation-messages">
    <div data-bind="visible: ValidationSectionVisible">
        <div class="messagePanel error" style="display: block">
            <h3 class="titleSection">
                Errori
            </h3>
            <ul data-bind="foreach: Validation">
                <li>
                    <b data-bind="html: $component.getMessageError($data)"></b>
                </li>
            </ul>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('validation-messages', {
        template: { element: 'validation-messages' },
        viewModel: function (params) {
            var self = this;

            // params
            self.Validation = params.Validation;
            var componentTopicId = params.TopicId || '';

            // publish event name - you can customize the topic 
            var CHALLENGE_EVENT = componentTopicId + 'validation-messages.CHALLENGE';

            // visibility
            self.ValidationSectionVisible = ko.pureComputed(function () {
                return this.Validation().length > 0;
            }, self);

            self.getMessageError = function (data) {
                var errorMessage = ko.unwrap(data.ErrorMessage) || ko.unwrap(data.Message);

                return errorMessage;
            }

            // check on inserted messages
            var validationSubscribe = self.Validation.subscribe(function (changes) {
                var toDelete = [];

                ko.utils.arrayForEach(changes, function (change) {
                    switch (change.status) {
                        case "added":
                            var challengePrefix = "CHALLENGE_PHASE:";
                            var errorMessage = ko.unwrap(change.value.ErrorMessage) || ko.unwrap(change.value.Message);
                            var index = errorMessage.indexOf(challengePrefix);

                            if (index != -1) {
                                try {
                                    var challengeJson = JSON.parse(errorMessage.replace(challengePrefix, ""));

                                    ko.postbox.publish(CHALLENGE_EVENT, challengeJson);

                                    // li accodo per poi toglierli dalla visualizzazione
                                    toDelete.push(change.value);
                                } catch (e) {
                                    console.log(errorMessage);
                                    console.log(e);
                                }
                            }
                            break;
                        case "deleted":
                            break;
                    }
                });

                if (toDelete.length > 0) {
                    self.Validation.removeAll(toDelete);
                }

            }, null, "arrayChange");

            self.dispose = function () {
                validationSubscribe.dispose();
            }
        }
    });
</script>




<div id="9f7769de910f4f3e9121920d16ff6c69_7">
    <div class="alert-layer" data-bind="visible: IsAlertVisible" style="display: none;">
        <div class="alert alert-container alert-info" data-bind="css: CssClass">
            <div class="text-center">
                <strong>
                    Attenzione
                </strong>
            </div>
            <p data-bind="text: Message"></p>
            <div class="text-center">
                <input type="button" value="OK" data-bind="singleClick: OkAlert">
            </div>
        </div>
    </div>

    <div class="alert-layer" data-bind="visible: IsConfirmVisible" style="display: none;">
        <div class="alert alert-container alert-info" data-bind="css: CssClass">
            <div class="text-center">
                <strong>
                    Attenzione
                </strong>
            </div>
            <p style="white-space: pre-wrap; display: none;" data-bind="visible: Message().length > 0, text: Message"></p>
            <div data-bind="visible: Component() != null" style="display: none;">
                <!-- ko if: Component() != null--><!-- /ko -->
            </div>
            <div class="text-center">
                <input type="button" value="OK" data-bind="singleClick: ConfirmOk, hasFocus: ConfirmOkHasFocus">
                <input type="button" value="Annulla" data-bind="singleClick: ConfirmCancel">
            </div>
        </div>
    </div>

    <div class="loader-layer" data-bind="visible: IsLoaderVisible" style="display: none;">
        <div class="loader-container">
            <img alt="loading..." src="/anchise2.web/Contents/00000/it-IT/images/preloader.gif">
        </div>
    </div>
</div>

<script type="text/javascript">
    var UiViewModel = function () {
        var self = this;

        var _doNothing = function () {
            return;
        };
        // Model
        self.IsAlertVisible = ko.observable(false);
        self.IsConfirmVisible = ko.observable(false);
        self.IsLoaderVisible = ko.observable(false);
        self.Message = ko.observable('');
        self.CssClass = ko.observable('alert-info');
        self.AlertCallback = ko.observable(_doNothing);
        self.ConfirmOkHasFocus = ko.observable(false);
        self.ConfirmOkCallback = ko.observable(_doNothing);
        self.ConfirmCancelCallback = ko.observable(_doNothing);
        self.Component = ko.observable(null);
        // Actions
        self.Alert = function (params) {
            self.Message(params.text || '');
            self.CssClass(params.cssClass || 'alert-info');
            self.AlertCallback(params.okCallback || _doNothing);

            self.IsAlertVisible(true);
        }
        self.OkAlert = function () {
            self.AlertCallback()();
            self.IsAlertVisible(false);
        };
        self.Confirm = function (params) {
            self.Message(params.text || '');
            self.CssClass(params.cssClass || 'alert-info');
            self.ConfirmOkCallback(params.okCallback || _doNothing);
            self.ConfirmCancelCallback(params.cancelCallback || _doNothing);
            self.Component(params.component || null);

            self.ConfirmOkHasFocus(true);
            self.IsConfirmVisible(true);
        };
        self.ConfirmOk = function () {
            self.ConfirmOkCallback()();

            self.ConfirmOkHasFocus(false);
            self.IsConfirmVisible(false);
        };
        self.ConfirmCancel = function () {
            self.ConfirmCancelCallback()();

            self.ConfirmOkHasFocus(false);
            self.IsConfirmVisible(false);
        };
        self.ShowLoader = function () {
            self.IsLoaderVisible(true);
        };
        self.HideLoader = function () {
            self.IsLoaderVisible(false);
        };

        // Path Helpers
        self.ResourcesPathImage = function (imageRelativePath) {
            var absolutePath = '/anchise2.web/Contents/00000/it-IT/Images/imageFakeName?v=1980368';

            return absolutePath.replace('imageFakeName', imageRelativePath);
        }

        self.GetPinPadGif = function (secureType) {
            var relativePath = '/pp/dispositivo_' + secureType + '.gif';

            return self.ResourcesPathImage(relativePath);
        }

        // Initialize
        self.Init = function () {
            $('.hide', $('#9f7769de910f4f3e9121920d16ff6c69_7')).removeClass('hide');
        };
    };

    var uiHelper = new UiViewModel();

    $(document).ready(function () {
        ko.applyBindings(uiHelper, document.getElementById('9f7769de910f4f3e9121920d16ff6c69_7'));

        uiHelper.Init();
    });
</script>



<script type="text/javascript">
    (function () {
        var doc = $(document);

        // Ajax settings
        $.ajaxSetup({
            contentType: 'application/json'
        });

        doc.ajaxStop(function () {
            uiHelper.HideLoader();
        });

        // Datepicker settings
        $.datepicker.regional['it'] = {
            closeText: 'Chiudi',
            prevText: '&#x3c;Prec',
            nextText: 'Succ&#x3e;',
            currentText: 'Oggi',
            monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
            monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'],
            dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'],
            dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'],
            dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            //beforeShowDay: ....noWeekendsOrHolidays,
            //showOn: 'focus',
            //changeMonth: true,
            //changeYear: true,
            //minDate: new Date(1416524400000),
            maxDate: '+1Y'
        };

        $.datepicker.regional['en'] = {
            closeText: 'Close',
            prevText: '&#x3c;Prev',
            nextText: 'Next&#x3e;',
            currentText: 'Today',
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Dicember'],
            monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Agu', 'Sep', 'Oct', 'Nov', 'Dic'],
            dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
            dayNamesShort: ['Sun', 'Mon', 'Tue', 'Web', 'Thu', 'Fri', 'Sat'],
            dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            maxDate: '+1Y'
        };

        $.datepicker.setDefaults($.datepicker.regional['it']);
    })();
</script>

<script>
    var Localization;
    (function (Localization) {
        // Stati Distinta
        (function (StatiDistinta) {
            var _statoDistinta_DA = 'Da Autorizzare';
            var _statoDistinta_AU = 'Autorizzata';
            var _statoDistinta_CO = 'Confermata';
            var _statoDistinta_PA = 'Parzialmente Autorizzata';
            var _statoDistinta_IM = 'In Modifica';


            StatiDistinta.GetLabel = function (statoDistinta) {
                switch (statoDistinta) {
                    case App.Common.StatiDistinta.IN_MODIFICA:
                        return _statoDistinta_IM;
                    case App.Common.StatiDistinta.DA_AUTORIZZARE:
                        return _statoDistinta_DA;
                    case App.Common.StatiDistinta.PARZIALMENTE_AUTORIZZATA:
                        return _statoDistinta_PA;
                    case App.Common.StatiDistinta.AUTORIZZATA:
                        return _statoDistinta_AU;
                    case App.Common.StatiDistinta.CONFERMATA:
                        return _statoDistinta_CO;
                    default:
                        return null;
                }
            };
            StatiDistinta.GetKeyValue = function () {
                return [
                    { K: App.Common.StatiDistinta.CONFERMATA, V: _statoDistinta_CO },
                    { K: App.Common.StatiDistinta.AUTORIZZATA, V: _statoDistinta_AU },
                    { K: App.Common.StatiDistinta.PARZIALMENTE_AUTORIZZATA, V: _statoDistinta_PA },
                    { K: App.Common.StatiDistinta.IN_MODIFICA, V: _statoDistinta_IM },
                    { K: App.Common.StatiDistinta.DA_AUTORIZZARE, V: _statoDistinta_DA }
                ];
            }
            StatiDistinta.DA_AUTORIZZARE = _statoDistinta_DA;
            StatiDistinta.AUTORIZZATA = _statoDistinta_AU;
            StatiDistinta.CONFERMATA = _statoDistinta_CO;
            StatiDistinta.PARZIALMENTE_AUTORIZZATA = _statoDistinta_PA;
            StatiDistinta.IN_MODIFICA = _statoDistinta_IM;
        })(Localization.StatiDistinta || (Localization.StatiDistinta = {}));

        // AddebitoComulativo
        Localization.ADDEBITO_CUMULATIVO_NR = 'Nessuna richiesta (Accordi banca)';
        Localization.ADDEBITO_CUMULATIVO_SI = 'SI - Solo se accordi banca';
        Localization.ADDEBITO_CUMULATIVO_NO = 'NO - Solo se accordi banca';

        Localization.GetAddebitoCumulativo = function (addebito) {
            return this["ADDEBITO_CUMULATIVO_" + addebito];
        };

        Localization.ACCREDITO_CUMULATIVO_NR = 'Nessuna richiesta (Accordi banca)';
        Localization.ACCREDITO_CUMULATIVO_SI = 'SI - Solo se accordi banca';
        Localization.ACCREDITO_CUMULATIVO_NO = 'NO - Solo se accordi banca';
        Localization.ACCREDITO_CUMULATIVO_MULTI = 'Distinta con più accrediti cumulativi';

        Localization.GetAccreditoCumulativo = function (accredito) {
            return this["ACCREDITO_CUMULATIVO_" + accredito];
        };

        Localization.LOCAL_INSTRUMENT_B2B = 'B2B - Veloce';
        Localization.LOCAL_INSTRUMENT_CORE = 'CORE - Ordinario';
        Localization.LOCAL_INSTRUMENT_B2B_LIST = 'B2B';
        Localization.LOCAL_INSTRUMENT_CORE_LIST = 'CORE';

        Localization.GetLocalInstrument = function (localInstrument) {
            return this["LOCAL_INSTRUMENT_" + localInstrument];
        };

        Localization.GetLocalInstrumentList = function (localInstrument) {
            return this["LOCAL_INSTRUMENT_" + localInstrument + "_LIST"];
        };

        // Tipologie dispositive
        (function (TipologieDispositive) {
            var _tipologiaDistinta_Bonifici = 'Bonifici';
            var _tipologiaDistinta_BonificiFiscali = 'Bonifici singoli';
            var _tipologiaDistinta_BonificiSingoli = 'Bonifici fiscali';
            var _tipologiaDistinta_Stipendi = 'Stipendi';
            var _tipologiaDistinta_Bonifico = 'Bonifico SEPA';
            var _tipologiaDistinta_BonificoSingolo = 'Bonifico SEPA Singolo';
            var _tipologiaDistinta_Stipendio = 'Stipendio SEPA';
            var _tipologiaDistinta_BonificoFiscale = 'Bonifico Fiscale';
            var _tipologiaDistinta_SDD = 'Incassi Direct Debit';
            var _tipologiaDistinta_SDD_plural = 'Incassi';
            var _tipologiaDistinta_SEDA = 'Allineamento SEDA';
            var _tipologiaDistinta_SEDAREM = 'Rendiconto SEDA';
            var _tipologiaEsito_SDD = 'Esiti Incassi Sepa Direct Debit';
            var _tipologiaDistinta_RIBA = 'Riba';
            var _tipologiaDistinta_RichiamiRIBA = 'Richiami RiBa';
            var _tipologiaDistinta_RitiroEffetti = 'Pagamento Riba';
            var _tipologiaDistinta_EffettiImpagati = 'Rifiuto Riba';
            var _tipologiaDistinta_BollettinoBancario = 'Bollettino Bancario';
            var _tipologiaDistinta_RitiroEffetti_plural = 'Pagamenti Riba';
            var _tipologiaDistinta_EffettiImpagati_plural = 'Rifiuti Riba';


            TipologieDispositive.GetPluralLabel = function (classeServizio) {
                switch (classeServizio) {
                    case App.Common.ClassiServizio.BONIFICO_SCT:
                        return _tipologiaDistinta_Bonifici;
                    case App.Common.ClassiServizio.BONIFICO_VELOCE_SCT:
                        return _tipologiaDistinta_BonificiSingoli;
                    case App.Common.ClassiServizio.BONIFICO_FISCALE_SCT:
                        return _tipologiaDistinta_BonificiFiscali;
                    case App.Common.ClassiServizio.STIPENDIO_SCT:
                        return _tipologiaDistinta_Stipendi;
                    case App.Common.ClassiServizio.INCASSIDIRECTDEBIT:
                        return _tipologiaDistinta_SDD_plural;
                    case App.Common.ClassiServizio.RITIROEFFETTI:
                        return _tipologiaDistinta_RitiroEffetti_plural;
                    case App.Common.ClassiServizio.EFFETTIIMPAGATI:
                        return _tipologiaDistinta_EffettiImpagati_plural;
                    default:
                        return null;
                }
            };
            TipologieDispositive.GetLabel = function (classeServizio) {
                switch (classeServizio) {
                    case App.Common.ClassiServizio.BONIFICO_SCT:
                    case App.Common.ClassiServizio.ESITI_PAG_BONIFICI:
                        return _tipologiaDistinta_Bonifico;
                    case App.Common.ClassiServizio.BONIFICO_VELOCE_SCT:
                    case App.Common.ClassiServizio.ESITI_PAG_BONIFICI:
                        return _tipologiaDistinta_BonificoSingolo;
                    case App.Common.ClassiServizio.BONIFICO_FISCALE_SCT:
                    case App.Common.ClassiServizio.ESITI_PAG_BONIFICI:
                        return _tipologiaDistinta_BonificoFiscale;
                    case App.Common.ClassiServizio.STIPENDIO_SCT:
                    case App.Common.ClassiServizio.ESITI_PAG_STIPENDI:
                        return _tipologiaDistinta_Stipendio;
                    case App.Common.ClassiServizio.INCASSIDIRECTDEBIT:
                        return _tipologiaDistinta_SDD;
                    case App.Common.ClassiServizio.ESITIINCASSISEPADIRECTDEBIT:
                        return _tipologiaEsito_SDD;
                    case App.Common.ClassiServizio.ALLINEAMENTOSEDA:
                        return _tipologiaDistinta_SEDA;
                    case App.Common.ClassiServizio.RICHIESTESEDA:
                        return _tipologiaDistinta_SEDAREM;
                    case App.Common.ClassiServizio.RIBA:
                        return _tipologiaDistinta_RIBA;
                    case App.Common.ClassiServizio.RICHIAMORIBA:
                        return _tipologiaDistinta_RichiamiRIBA;
                    case App.Common.ClassiServizio.RITIROEFFETTI:
                    case App.Common.ClassiServizio.ESITI_PAG_RIBA:
                        return _tipologiaDistinta_RitiroEffetti;
                    case App.Common.ClassiServizio.EFFETTIIMPAGATI:
                        return _tipologiaDistinta_EffettiImpagati;
                    case App.Common.ClassiServizio.BOLLETTINOBANCARIO:
                        return _tipologiaDistinta_BollettinoBancario;
                    default:
                        return null;
                }
            };

        })(Localization.TipologieDispositive || (Localization.TipologieDispositive = {}));


        // Esiti Beneficiario: Metodi pagamento
        (function (MetodiPagamento) {
            var _metodoPagamento_TRA = "Bonifico con esito all'ordinante";
            var _metodoPagamento_TRF = "Bonifico senza esito all'ordinante";

            MetodiPagamento.GetLabel = function (metodoPagamento) {
                switch (metodoPagamento) {
                    case "TRA":
                        return _metodoPagamento_TRA;
                    case "TRF":
                        return _metodoPagamento_TRF;
                    default:
                        return null;
                }
            };
        })(Localization.MetodiPagamento || (Localization.MetodiPagamento = {}));

        //MultiScadenza
        (function (MultiScadenza) {
            var _multiScadenza = "Multiscadenza";
            MultiScadenza.GetLabel = function (MultiScadenza) {

                if (App.Core.IsNullOrEmpty(MultiScadenza)) {
                    return _multiScadenza;
                } else {
                    return MultiScadenza;
                }
            };
        })(Localization.MultiScadenza || (Localization.MultiScadenza = {}));

        //MultiConto
        (function (MultiConto) {
            var _multiConto = "Multiconto";
            MultiConto.GetLabel = function (MultiConto) {
                if (App.Core.IsNullOrEmpty(MultiConto)) {
                    return _multiConto;
                } else {
                    return MultiConto;
                }
            };
        })(Localization.MultiConto || (Localization.MultiConto = {}));

        // Accredito Cumulativo
        (function (AccreditoCumulativo) {
            var _accreditoCumulativo_NR = "Nessuna richiesta (Accordi banca)";
            var _accreditoCumulativo_SI = "SI - Solo se accordi banca";
            var _accreditoCumulativo_NO = "NO - Solo se accordi banca";
            var _accreditoCumulativo_MULTI = "Distinta con più accrediti cumulativi";

            AccreditoCumulativo.GetLabel = function (AccreditoCumulativo) {
                switch (AccreditoCumulativo) {
                    case "NR":
                        return _accreditoCumulativo_NR;
                    case "SI":
                        return _accreditoCumulativo_SI;
                    case "NO":
                        return _accreditoCumulativo_NO;
                    case "MULTI":
                        return _accreditoCumulativo_MULTI;
                    default:
                        return null;
                }
            };
        })(Localization.AccreditoCumulativo || (Localization.AccreditoCumulativo = {}));

        // Esiti SDD: Stato esito
        (function (StatiEsito) {

            var _statoEsito_1 = "Confermata";
            var _statoEsito_2 = "Scartata";
            var _statoEsito_3 = "Parzialmente accettata";
            var _statoEsito_4 = "In lavorazione";
            var _statoEsito_5 = "Autorizzata";
            var _statoEsito_6 = "Addebitata";
            var _statoEsito_8 = "Scartata";
            var _statoEsito_9 = "Scartata da validazione tecnica";

            var _statoEsito_1_long = "La richiesta di pagamento è stata presa in carico dalla Banca";
            var _statoEsito_2_long = "La richiesta di pagamento è stata rifiutata per motivi formali o controlli sostanziali";
            var _statoEsito_3_long = "La richiesta di pagamento è stata parzialmente accettata";
            var _statoEsito_4_long = "La richiesta di pagamento è in lavorazione";
            var _statoEsito_5_long = "La richiesta di pagamento è stata autorizzata ed inviata alla Banca";
            var _statoEsito_6_long = "Addebitata";
            var _statoEsito_8_long = "La richiesta di pagamento è stata rifiutata per motivi formali o controlli sostanziali";
            var _statoEsito_9_long = "La richiesta di pagamento è stata rifiutata per motivi formali o controlli sostanziali";

            StatiEsito.GetLabel = function (statoEsito, isDescrizioneEstesa) {
                switch (statoEsito) {
                    case 1:
                        var result = isDescrizioneEstesa ? _statoEsito_1_long : _statoEsito_1;
                        return result;
                    case 2:
                        var result = isDescrizioneEstesa ? _statoEsito_2_long : _statoEsito_2;
                        return result;
                    case 3:
                        var result = isDescrizioneEstesa ? _statoEsito_3_long : _statoEsito_3;
                        return result;
                    case 4:
                        var result = isDescrizioneEstesa ? _statoEsito_4_long : _statoEsito_4;
                        return result;
                    case 5:
                        var result = isDescrizioneEstesa ? _statoEsito_5_long : _statoEsito_5;
                        return result;
                    case 6:
                        var result = isDescrizioneEstesa ? _statoEsito_6_long : _statoEsito_6;
                        return result;
                    case 8:
                        var result = isDescrizioneEstesa ? _statoEsito_8_long : _statoEsito_8;
                        return result;
                    case 9:
                        var result = isDescrizioneEstesa ? _statoEsito_9_long : _statoEsito_9;
                        return result;
                    default:
                        return statoEsito;
                }
            };
        })(Localization.StatiEsito || (Localization.StatiEsito = {}));

        // Esiti SDD: Stato esito valore
        (function (StatiEsitoVal) {

            var _statoEsitoVal_1 = "CONF,ACTC";
            var _statoEsitoVal_2 = "RJCT,TMTB";
            var _statoEsitoVal_3 = "PART";
            var _statoEsitoVal_8 = "RJCT,TMTB";
            var _statoEsitoVal_5 = "FIRM";
            var _statoEsitoVal_9 = "RJCT,TMTB,4-KO";

            StatiEsitoVal.GetLabel = function (statoEsitoVal) {
                switch (statoEsitoVal) {
                    case 1:
                        var result = _statoEsitoVal_1;
                        return result;
                    case 2:
                        var result = _statoEsitoVal_2;
                        return result;
                    case 3:
                        var result = _statoEsitoVal_3;
                        return result;
                    case 8:
                        var result = _statoEsitoVal_8;
                        return result;
                    case 5:
                        var result = _statoEsitoVal_5;
                        return result;
                    case 9:
                        var result = _statoEsitoVal_9;
                        return result;
                    default:
                        return null;
                }
            };
        })(Localization.StatiEsitoVal || (Localization.StatiEsitoVal = {}));

        // Esiti SDD: Sequenza Incasso
        (function (SequenzaIncasso) {
            var _sequenzaIncasso_FNAL = "FNAL - Ultima di una serie di incassi";
            var _sequenzaIncasso_FRST = "FRST - Prima di una serie di incassi";
            var _sequenzaIncasso_OOFF = "OOFF - Singola non ripetuta";
            var _sequenzaIncasso_RCUR = "RCUR - Per una serie di incassi";

            SequenzaIncasso.GetLabel = function (sequenzaIncasso) {
                switch (sequenzaIncasso) {
                    case "FNAL":
                        return _sequenzaIncasso_FNAL;
                    case "FRST":
                        return _sequenzaIncasso_FRST;
                    case "OOFF":
                        return _sequenzaIncasso_OOFF;
                    case "RCUR":
                        return _sequenzaIncasso_RCUR;
                    default:
                        return null;
                }
            };
        })(Localization.SequenzaIncasso || (Localization.SequenzaIncasso = {}));

        // Esiti SDD: Tipo Esito
        (function (TipoEsito) {
            var _tipoEsito_5 = "Grandi distinte con esiti dispositivi";
            var _tipoEsito_1 = "Dispositivo";
            var _tipoEsito_2 = "Esito incrociato con dispositivo";
            var _tipoEsito_3 = "Esito";
            var _tipoEsito_4 = "Grandi distinte";
            var _tipoEsito_9 = "Flussi SEDA e Remun. SEDA Debitore";

            TipoEsito.GetLabel = function (tipoEsito) {
                switch (tipoEsito) {
                    case 5:
                        return _tipoEsito_5;
                    case 1:
                        return _tipoEsito_1;
                    case 2:
                        return _tipoEsito_2;
                    case 3:
                        return _tipoEsito_3;
                    case 4:
                        return _tipoEsito_4;
                    case 9:
                        return _tipoEsito_9;
                    default:
                        return null;
                }
            };
        })(Localization.TipoEsito || (Localization.TipoEsito = {}));

        (function (TipoFlusso) {
            var _tipoFlusso_1 = "Nuovo SEDAC";
            var _tipoFlusso_2 = "Modifica SEDAC";
            var _tipoFlusso_3 = "Cancellazione SEDAC";
            var _tipoFlusso_4 = "Risposta SEDAC";
            var _tipoFlusso_5 = "Nuovo SEDAD";
            var _tipoFlusso_6 = "Modifica SEDAD";
            var _tipoFlusso_7 = "Cancellazione SEDAD";
            var _tipoFlusso_8 = "Risposta SEDAD";
            var _tipoFlusso_9 = "Multi Tipologia";

            TipoFlusso.GetLabel = function (tipoFlusso, isPresentiGrandiDistinte) {
                switch (tipoFlusso) {
                    case "NWC":
                        return _tipoFlusso_1;
                    case "MDC":
                        return _tipoFlusso_2;
                    case "DLC":
                        return _tipoFlusso_3;
                    case "REC":
                        return _tipoFlusso_4;
                    case "NWD":
                        return _tipoFlusso_5;
                    case "MDD":
                        return _tipoFlusso_6;
                    case "DLD":
                        return _tipoFlusso_7;
                    case "RED":
                        return _tipoFlusso_8;
                    default:
                        if (isPresentiGrandiDistinte) {
                            return _tipoFlusso_9;
                        }
                        return null;
                }
            };
        })(Localization.TipoFlusso || (Localization.TipoFlusso = {}));

        (function (TipoFlussoRendiconto) {
            var _tipoFlussoRendiconto_1 = "Rendiconto previsionale";
            var _tipoFlussoRendiconto_2 = "Richiesta rendiconto mandati";
            var _tipoFlussoRendiconto_3 = "Esito richiesta rendiconto";
            var _tipoFlussoRendiconto_4 = "Risposta negativa alla richiesta";

            TipoFlussoRendiconto.GetLabel = function (tipoFlussoRendiconto) {
                switch (tipoFlussoRendiconto) {
                    case "PREV":
                        return _tipoFlussoRendiconto_1;
                    case "REND":
                        return _tipoFlussoRendiconto_2;
                    case "RDET":
                        return _tipoFlussoRendiconto_3;
                    case "RNEG":
                        return _tipoFlussoRendiconto_4;
                    default:
                        return null;
                }
            };
        })(Localization.TipoFlussoRendiconto || (Localization.TipoFlussoRendiconto = {}));

        (function (TipoMandato) {
            var _tipoMandato_1 = "B2BSEDEM - Mandato B2B elettronico";
            var _tipoMandato_2 = "B2BSEDPM - Mandato B2B cartaceo";
            var _tipoMandato_3 = "COR1SEDEM - Mandato COR1 elettronico";
            var _tipoMandato_4 = "COR1SEDPM - Mandato COR1 cartaceo";
            var _tipoMandato_5 = "CORSEDEM - Mandato CORE elettronico";
            var _tipoMandato_6 = "CORSEDPM - Mandato CORE cartaceo";

            TipoMandato.GetLabel = function (tipoMandato) {
                switch (tipoMandato) {
                    case "B2BSEDEM":
                        return _tipoMandato_1;
                    case "B2BSEDPM":
                        return _tipoMandato_2;
                    case "COR1SEDEM":
                        return _tipoMandato_3;
                    case "COR1SEDPM":
                        return _tipoMandato_4;
                    case "CORSEDEM":
                        return _tipoMandato_5;
                    case "CORSEDPM":
                        return _tipoMandato_6;
                    default:
                        return null;
                }
            };
        })(Localization.TipoMandato || (Localization.TipoMandato = {}));

        // Esiti SEDA: Stati esito
        (function (StatiEsitoAllineamento) {
            var _statiEsitoAllineamento_ACTC = "Confermata";
            var _statiEsitoAllineamento_RJCT = "Scartata";
            var _statiEsitoAllineamento_PART = "Parzialmente accettata";
            var _statiEsitoAllineamento_PDNG = "In Lavorazione";
            var _statiEsitoAllineamento_FIRM = "Autorizzata";
            var _statiEsitoAllineamento_ACSC = "Addebitata";
            var _statiEsitoAllineamento_TMTT = "TRACKVNT";
            var _statiEsitoAllineamento_TMTB = "Scartata";

            StatiEsitoAllineamento.GetLabel = function (statiEsitoAllineamento) {
                switch (statiEsitoAllineamento) {
                    case "ACTC":
                        return _statiEsitoAllineamento_ACTC;
                    case "RJCT":
                        return _statiEsitoAllineamento_RJCT;
                    case "PART":
                        return _statiEsitoAllineamento_PART;
                    case "PDNG":
                        return _statiEsitoAllineamento_PDNG;
                    case "FIRM":
                        return _statiEsitoAllineamento_FIRM;
                    case "ACSC":
                        return _statiEsitoAllineamento_ACSC;
                    case "TMTT":
                        return _statiEsitoAllineamento_TMTT;
                    case "TMTB":
                        return _statiEsitoAllineamento_TMTB;
                    default:
                        return null;
                }
            };
        })(Localization.StatiEsitoAllineamento || (Localization.StatiEsitoAllineamento = {}));

        // Esiti SEDA: Stati esito
        (function (StatiEsitoAllineamentoInt) {
            var _statiEsitoAllineamento_ACTC = "Confermata";
            var _statiEsitoAllineamento_RJCT = "Scartata";
            var _statiEsitoAllineamento_PART = "Parzialmente accettata";
            var _statiEsitoAllineamento_PDNG = "In Lavorazione";
            var _statiEsitoAllineamento_FIRM = "Autorizzata";
            var _statiEsitoAllineamento_ACSC = "Addebitata";
            var _statiEsitoAllineamento_TMTT = "TRACKVNT";
            var _statiEsitoAllineamento_TMTB = "Scartata";

            StatiEsitoAllineamentoInt.GetLabel = function (statiEsitoAllineamentoInt) {
                switch (statiEsitoAllineamentoInt) {
                    case 1:
                        return _statiEsitoAllineamento_ACTC;
                    case 2:
                        return _statiEsitoAllineamento_RJCT;
                    case 3:
                        return _statiEsitoAllineamento_PART;
                    case 4:
                        return _statiEsitoAllineamento_PDNG;
                    case 5:
                        return _statiEsitoAllineamento_FIRM;
                    case 6:
                        return _statiEsitoAllineamento_ACSC;
                    case 7:
                        return _statiEsitoAllineamento_TMTT;
                    case 8:
                        return _statiEsitoAllineamento_TMTB;
                    default:
                        return null;
                }
            };
        })(Localization.StatiEsitoAllineamentoInt || (Localization.StatiEsitoAllineamentoInt = {}));

        // Configura Conti : TipoConto
        (function (TipoConto) {
            var _tipoConto_CC = "Conto Corrente (CC)";
            var _tipoConto_CA = "Conto Anticipi (CA)";
            var _tipoConto_CP = "Conto Portafoglio (CP)";
            var _tipoConto_DT = "Dossier Titoli (DT)";
            var _tipoConto_EC = "Estratto Conto (EC)";
            var _tipoConto_ES = "Conto Esiti (ES)";

            TipoConto.GetLabel = function (tipoConto) {
                switch (tipoConto) {
                    case "CC":
                        return _tipoConto_CC;
                    case "CA":
                        return _tipoConto_CA;
                    case "CP":
                        return _tipoConto_CP;
                    case "DT":
                        return _tipoConto_DT;
                    case "EC":
                        return _tipoConto_EC;
                    case "ES":
                        return _tipoConto_ES;
                    default:
                        return null;
                }
            };
        })(Localization.TipoConto || (Localization.TipoConto = {}));

        // Allineamento Seda : TipoBlocco
        (function (TipoBlocco) {
            var _tipoBlocco_INS = "Nuovo mandato SEDAC";
            var _tipoBlocco_UPD = "Modifica mandato SEDAC";
            var _tipoBlocco_DEL = "Cancellazione mandato SEDAC";
            var _tipoBlocco_ACPT = "Risp. Mandato SEDAC";

            TipoBlocco.GetLabel = function (tipoBlocco) {
                switch (tipoBlocco) {
                    case App.Seda.Allineamento.TipoBloccoLogico.INS:
                        return _tipoBlocco_INS;
                    case App.Seda.Allineamento.TipoBloccoLogico.UPD:
                        return _tipoBlocco_UPD;
                    case App.Seda.Allineamento.TipoBloccoLogico.DEL:
                        return _tipoBlocco_DEL;
                    case App.Seda.Allineamento.TipoBloccoLogico.ACPT:
                        return _tipoBlocco_ACPT;
                    default:
                        return null;
                }
            };
        })(Localization.TipoBlocco || (Localization.TipoBlocco = {}));

        // Esito Rendiconto SEDA: Trimestre
        (function (Trimestre) {
            var _trimestre1 = "Gennaio-Febbraio-Marzo";
            var _trimestre2 = "Aprile-Maggio-Giugno";
            var _trimestre3 = "Luglio-Agosto-Settembre";
            var _trimestre4 = "Ottobre-Novembre-Dicembre";

            Trimestre.GetLabel = function (trimestre) {
                switch (trimestre) {
                case 1:
                    return _trimestre1;
                case 2:
                    return _trimestre2;
                case 3:
                    return _trimestre3;
                case 4:
                    return _trimestre4;
                default:
                    return null;
                }
            };
        })(Localization.Trimestre || (Localization.Trimestre = {}));

        // Esito Rendiconto SEDA: Trimestre
        (function (TipoRichiesta) {
            var _tipoRichiestaALL = "ALL - Entrambe le tipologie";
            var _tipoRichiestaDMF = "DMF - Mandato Rilasciato dal Debitore";
            var _tipoRichiestaCMF = "CMF - Mandato Rilasciato dal Creditore";

            TipoRichiesta.GetLabel = function (tipoRichiesta) {
                switch (tipoRichiesta) {
                case "ALL":
                        return _tipoRichiestaALL;
                case "DMF":
                        return _tipoRichiestaDMF;
                case "CMF":
                        return _tipoRichiestaCMF;
                default:
                    return null;
                }
            };
        })(Localization.TipoRichiesta || (Localization.TipoRichiesta = {}));

         // Rendiconto SEDA: Tipo Richiesta Mandato
        (function (TipoRichiestaMandato) {
            var _tipoRichiestaALL = "ALL - Solo i mandati attivi";
            var _tipoRichiestaCHG = "CHG - Tutti i mandati";

            TipoRichiestaMandato.GetLabel = function (tipoRichiesta) {
                switch (tipoRichiesta) {
                case "ALL":
                        return _tipoRichiestaALL;
                case "CHG":
                        return _tipoRichiestaCHG;
                default:
                    return null;
                }
            };
        })(Localization.TipoRichiestaMandato || (Localization.TipoRichiestaMandato = {}));

         // Rendiconto SEDA: Domiciliazione Mandato
        (function (DomiciliazioneMandato) {
            var _domiciliazioneMandatoCMF = "CMF - Mandato Rilasciato dal Creditore";
            var _domiciliazioneMandatoDMF = "DMF - Mandato Rilasciato dal Debitore";

            DomiciliazioneMandato.GetLabel = function (domiciliazioneMandato) {
                switch (domiciliazioneMandato) {
                case "CMF":
                        return _domiciliazioneMandatoCMF;
                case "DMF":
                        return _domiciliazioneMandatoDMF;
                default:
                    return null;
                }
            };
        })(Localization.DomiciliazioneMandato || (Localization.DomiciliazioneMandato = {}));

        // Allineamento SEDA: Tipo Richiesta Originario
        (function (TipoRichiestaOriginario) {
            var _tipoRichiesta009 = "Nuovo Mandato";
            var _tipoRichiesta010 = "Modifica Mandato";
            var _tipoRichiesta011 = "Cancellazione Mandato";

            TipoRichiestaOriginario.GetLabel = function (tipoRichiesta) {
                switch (tipoRichiesta) {
                case "PAIN.009":
                        return _tipoRichiesta009;
                case "PAIN.010":
                        return _tipoRichiesta010;
                case "PAIN.011":
                        return _tipoRichiesta011;
                default:
                    return null;
                }
            };
        })(Localization.TipoRichiestaOriginario || (Localization.TipoRichiestaOriginario = {}));

        // Esito Allineamento Seda : EsitoFlusso
        (function (EsitoFlusso){
            var _rifiutata = "Rifiutata";
            var _accettata = "Accettata";

            EsitoFlusso.GetLabel = function (esitoFlusso) {
                if (esitoFlusso) {
                    return _accettata;
                } else {
                    return _rifiutata;
                }
            };
        })(Localization.EsitoFlusso || (Localization.EsitoFlusso = {}));

        // Esito Allineamento Seda : EsitoFlusso
        (function (CodiceRifiuto){
            var _MD01 = "Assenza del mandato";

            CodiceRifiuto.GetLabel = function (codiceRifiuto) {
                if (codiceRifiuto == 'MD01') {
                    return _MD01;
                } else {
                    return '';
                }
            };
        })(Localization.CodiceRifiuto || (Localization.CodiceRifiuto = {}));

        // Esiti Riba-Rid-Mav : Titoli Sezioni
        (function (EsitiSectionTitle){
            var _Riba = "Riba";
            var _Rid = "Rid";
            var _Mav = "Mav";

            EsitiSectionTitle.GetLabel = function (classeServizio) {
                switch (classeServizio) {
                    case App.Common.ClassiServizio.ESITI_RIBA:
                        return _Riba;
                    case App.Common.ClassiServizio.ESITI_RID:
                        return _Rid;
                    case App.Common.ClassiServizio.ESITI_MAV:
                        return _Mav;
                    default:
                        return null;
                }
            };
        })(Localization.EsitiSectionTitle || (Localization.EsitiSectionTitle = {}));

        // Esiti Altri Pagamenti : Titoli Sezioni
        (function (EsitiPagamentiSectionTitle){
            var _EsitiBollettinoBancario = "Esiti Bollettino Bancario";
            var _EsitiBonificoEstero = "Esiti Pagamenti Estero";
            var _EsitiRitiroEffettiRIBA = "Esiti Ritiro Effetti (Pagamenti Riba)";
            var _EsitiBonificiSEPA = "Esiti Bonifici SEPA";
            var _EsitiStipendiSEPA = "Esiti Stipendi SEPA";

            EsitiPagamentiSectionTitle.GetLabel = function (classeServizio) {
                switch (classeServizio) {
                    case App.Common.ClassiServizio.ESITI_PAG_BOLBAN:
                        return _EsitiBollettinoBancario;
                    case App.Common.ClassiServizio.ESITI_PAG_ESTERO:
                        return _EsitiBonificoEstero;
                    case App.Common.ClassiServizio.ESITI_PAG_RIBA:
                        return _EsitiRitiroEffettiRIBA;
                    case App.Common.ClassiServizio.ESITI_PAG_BONIFICI:
                        return _EsitiBonificiSEPA;
                    case App.Common.ClassiServizio.ESITI_PAG_STIPENDI:
                        return _EsitiStipendiSEPA;
                    default:
                        return null;
                }
            };
        })(Localization.EsitiPagamentiSectionTitle || (Localization.EsitiPagamentiSectionTitle = {}));

        // Esiti SDD: Stato esito
        (function (StatiEsito) {

            var _statoEsito_1 = "Confermata";
            var _statoEsito_2 = "Scartata";
            var _statoEsito_3 = "Parzialmente accettata";
            var _statoEsito_4 = "In lavorazione";
            var _statoEsito_5 = "Autorizzata";
            var _statoEsito_6 = "Addebitata";
            var _statoEsito_8 = "Scartata";
            var _statoEsito_9 = "Scartata da validazione tecnica";

            var _statoEsito_1_long = "La richiesta di pagamento è stata presa in carico dalla Banca";
            var _statoEsito_2_long = "La richiesta di pagamento è stata rifiutata per motivi formali o controlli sostanziali";
            var _statoEsito_3_long = "La richiesta di pagamento è stata parzialmente accettata";
            var _statoEsito_4_long = "La richiesta di pagamento è in lavorazione presso la Banca";
            var _statoEsito_5_long = "La richiesta di pagamento è stata autorizzata ed inviata alla Banca";
            var _statoEsito_6_long = "La richiesta di pagamento è stata regolata sul conto corrente di addebito";
            var _statoEsito_8_long = "La richiesta di pagamento è stata rifiutata per motivi formali o controlli sostanziali";
            var _statoEsito_9_long = "La richiesta di pagamento è stata presa in carico dalla Banca";

            StatiEsito.GetLabel = function (statoEsito, isDescrizioneEstesa) {
                switch (statoEsito) {
                    case 1:
                        var result = isDescrizioneEstesa ? _statoEsito_1_long : _statoEsito_1;
                        return result;
                    case 2:
                        var result = isDescrizioneEstesa ? _statoEsito_2_long : _statoEsito_2;
                        return result;
                    case 3:
                        var result = isDescrizioneEstesa ? _statoEsito_3_long : _statoEsito_3;
                        return result;
                    case 4:
                        var result = isDescrizioneEstesa ? _statoEsito_4_long : _statoEsito_4;
                        return result;
                    case 5:
                        var result = isDescrizioneEstesa ? _statoEsito_5_long : _statoEsito_5;
                        return result;
                    case 6:
                        var result = isDescrizioneEstesa ? _statoEsito_6_long : _statoEsito_6;
                        return result;
                    case 8:
                        var result = isDescrizioneEstesa ? _statoEsito_8_long : _statoEsito_8;
                        return result;
                    case 9:
                        var result = isDescrizioneEstesa ? _statoEsito_9_long : _statoEsito_9;
                        return result;
                    default:
                        return statoEsito;
                }
            };
        })(Localization.StatiEsito || (Localization.StatiEsito = {}));

    })(Localization || (Localization = {}));
</script>








<script type="text/html" id="extraction-summary">
    <div>L'operazione estrarrà <span data-bind="text: ExtractedFlowSummary[0].DistTotali"></span> distinte con le seguenti caratteristiche:</div>
    <br />
    <div data-bind="style: {'max-height': '100px', 'overflow-y': ExtractedFlowSummary.length > 4 ? 'scroll' : ''}">
        <div data-bind="foreach: ExtractedFlowSummary">
            <div>
                <span data-bind="text: DistAzienda"></span> distinte dell'azienda <span data-bind="text: Azienda"></span> per un totale di € <span data-bind="numericTextSeparator: ImportoAzienda"></span>
            </div>
        </div>
    </div>
    <br />
    <div>Si desidera procedere con l'estrazione?</div>
</script>

<script type="text/javascript">
    ko.components.register('extraction-summary', {
        template: { element: 'extraction-summary' },
        viewModel: function (params) {
            var self = this;
            self.ExtractedFlowSummary = ko.utils.arrayFilter(params, function (s) {
                return new App.Utility.ExtractedFlowSummary(s);
            });
        }
    });
</script>

<div id="9f7769de910f4f3e9121920d16ff6c69_5">
    <div id="9f7769de910f4f3e9121920d16ff6c69_4">
        <!-- RICERCA -->
        <div data-bind="visible: CurrentSection() == Sections.SEARCH" style="display: none;">
            <div class="riquadro">
                <div>
                    <div style="float:left;">
                        <div class="flag riepilogo">&nbsp;</div>
                        <h1>Estrai Disposizioni</h1>
                    </div>
                    <div style="float:left;padding-top:13px;">
                        <a class="icon-replace icon-help active link" onclick="javascript: showPopupHelp('/anchise2.web/Widget/Help/GetHelper', 'Chiudi', 'EstrDispo', null);">Help On Line</a>
                    </div>
                </div>
                <div class="clearall"></div>
                <div>
                    <!-- VALIDATION -->
                    <validation-messages params="Validation: Validation">
    <div data-bind="visible: ValidationSectionVisible" style="display: none;">
        <div class="messagePanel error" style="display: block">
            <h3 class="titleSection">
                Errori
            </h3>
            <ul data-bind="foreach: Validation"></ul>
        </div>
    </div>
</validation-messages>
                    <!-- SELEZIONE DATI-->

                    <div class="section">
                        <div class="row">
                            <h3 class="titleSection">
                                Dati
                            </h3>
                        </div>
                        <div>
                            <azienda-banca params="{AziendaSelezionata: AziendaSelezionata, BancaSelezionata: BancaSelezionata, Identifier: Filter().Identifier}">
    <div class="form-horizontal">
        <div class="form-group">
            <label class="col-sm-1 col-xs-1">
                Azienda
            </label>
            <div class="col-sm-4 col-xs-11">
                <select class="form-control" data-bind="options: $component.Aziende, optionsCaption: 'Tutti', optionsText: 'RagioneSociale', value: AziendaSelezionata"><option value="">Tutti</option><option value="">C.P.C. INOX SPA</option></select>
            </div>

            <div data-bind="if:AziendaSelezionata()">
                <label class="col-sm-offset-2 col-sm-1 col-xs-1">
                    SIA
                </label>
                <div class="col-sm-4 col-xs-11">
                    <input type="text" class="form-control" data-bind="value: AziendaSelezionata().CodiceSia, enable:false" disabled="">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-1 col-xs-1">
                Banca
            </label>
            <div class="col-sm-4 col-xs-11">
                <select class="form-control" data-bind="options: $component.Banche, optionsCaption: 'Tutti', optionsText: function(item){return item.CodiceAbi() + ' - ' + item.DescrizioneBanca()}, value: BancaSelezionata"><option value="">Tutti</option><option value="">05584 - BANCA POPOLARE DI MILANO S.P.A.</option><option value="">05034 - BANCO BPM S.P.A.</option></select>
            </div>
        </div>
    </div>
</azienda-banca>
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-sm-1 col-xs-1">
                                        Tipologia
                                    </label>
                                    <div class="form-field col-sm-4 col-xs-11">
                                        <select class="form-control" data-bind="options: Tipologia, optionsText: 'V', optionsValue: 'K', valueAsInt: Filter().Product, optionsCaption: 'Seleziona'"><option value="">Seleziona</option><option value="5">Allineamento Archivi IBAN</option><option value="6">Assegni Circolari</option><option value="7">Assegni di Quietanza</option><option value="8">Bollettino Bancario</option><option value="1">Bonifici SEPA</option><option value="10">Bonifico Estero</option><option value="11">Effetti Impagati</option><option value="12">Incassi Direct Debit</option><option value="13">Incassi Estero</option><option value="14">M.Av</option><option value="16">Pagamento Deleghe F24</option><option value="17">Pagamento F24 Elementi Identificativi</option><option value="18">R.I.D</option><option value="19">Revoche F24</option><option value="20">Ri.Ba.</option><option value="21">Richiamo M.Av</option><option value="22">Richiamo R.I.D</option><option value="23">Richiamo Ri.Ba.</option><option value="24">Richieste rendiconto mandati SEDA</option><option value="25">Ritiro Effetti (Pagamento Riba)</option><option value="3">Stipendi SEPA</option><option value="27">Strutture Libere</option><option value="28">Variazioni Coordinate RID</option></select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-sm-1 col-xs-1">
                                        Formato
                                    </label>
                                    <div class="form-field col-sm-4 col-xs-11">
                                        <select class="form-control" data-bind="options: Formato, optionsText: 'V', optionsValue: 'K', value: Filter().Type"><option value="CSV">CSV</option><option value="CBI">CBI</option></select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- AVANZATE -->
                <div class="section">
                    <div class="row link" data-bind="click: AvanzateCollapse">
                        <h3 class="titleSection">
                            Avanzate
                        </h3>
                        <div class="collapse-img-position">
                            <img title="collapse" data-bind="css: AvanzateCollapseCss" class="icon-replace icon-collapse active">
                        </div>
                    </div>
                    <div data-bind="slideVisible: AvanzateBodyVisible" style="display: block;">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-xs-offset-3 col-xs-4">Da:</label>
                                <label class="control-label col-xs-4">A:</label>
                            </div>
                        </div>
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-xs-3">Data creazione:</label>
                                <div class="col-xs-3">
                                    <date-picker params="Date: Filter().DataFrom">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_1">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                                </div>
                                <div class="col-xs-offset-1 col-xs-3">
                                    <date-picker params="Date: Filter().DataTo">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_2">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                                </div>
                            </div>
                        </div>
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-xs-3">Importo:</label>
                                <div class="col-xs-3">
                                    <input placeholder="opzionale" type="text" class="form-control" data-bind="numericText: Filter().ImportoFrom">
                                </div>
                                <div class="col-xs-offset-1 col-xs-3">
                                    <input placeholder="opzionale" type="text" class="form-control" data-bind="numericText: Filter().ImportoTo">
                                </div>
                            </div>
                        </div>
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-xs-3">Numero disposizioni:</label>
                                <div class="col-xs-3">
                                    <input placeholder="opzionale" type="text" class="form-control" data-bind="numeric: Filter().NumTransaction, valueAsInt: Filter().NumTransaction">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SUBMIT ACTIONS -->
            <div class="text-right">
                <input type="button" class="btn btn-primary" value="Estrai" data-bind="singleClick: Estrai">
            </div>
        </div>

        <!-- ESITO OPERAZIONE -->
        <div data-bind="visible: CurrentSection() == Sections.RESULT" style="">
            <feedback-messages params="TitleCssClass: 'flag riepilogo', PageTitle: 'Info', Message: Message, CssClass: CssClass">
    <div class="riquadro">
        <div data-bind="visible: PageTitle != null">
            <div class="flag riepilogo" data-bind="css: TitleCssClass">&nbsp;</div>
            <h1 data-bind="text: PageTitle">Info</h1>
        </div>
        <div class="messagePanel visible alert" data-bind="css: CssClass">
            <h3 class="titleSection" data-bind="text: Title">Esito Operazione</h3>
            <p>
                <strong style="white-space: pre-wrap" data-bind="text: Message">Non risulta alcun dato per i parametri di ricerca immessi</strong>
            </p>
            <ul data-bind="foreach: Messages"></ul>
        </div>
        <div data-bind="visible: Component != null" style="display: none;">
            <!-- ko if: Component != null--><!-- /ko -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-right">
            <!-- ko foreach: Buttons -->
            <input type="button" class="btn btn-primary" data-bind="value: Label, singleClick: Callback" value="OK">
            <!-- /ko -->
        </div>
    </div>
</feedback-messages>
        </div>
    </div>
</div>


<script type="text/javascript">
    var PIAZZATURA = [{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":1985188,"ClasseServizio":0,"Crypt":"LspCtQSUihaVNXBOsXrwLmhv+WtKbsJ9Dyc1tV2tEEywN1m4Vl8wLudGgPJNGuiwamPxnTVwEpE8iFL0hHO8bOU54He4kIM8cgvns209peLES6bIZBVkPCzjD4Pso+nLaPDqwGuNqgjPLhZILXo62Q==","Hash":"D374C314BDDFC6C460B92535229CC4C9EE8501BD14A048F638E4621307E94B93"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI MILANO S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2018-11-23T00:00:00","Saldo":778416.67,"DataSaldo":"2018-11-23T00:00:00","Stato":2,"Bic":null,"Id":null,"IdAzienda":"588536","CodiceIban":"IT12J0558433470000000011905","CodiceAbi":"05584","CodiceCab":"33470","CodiceFiliale":"33470","NumeroRapporto":"000000011905","CodiceDivisa":"EUR","Descrizione":"000000011905","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000011905","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1985188","Type":101,"Crypt":"S3PUF4nTMQOdqEdQXTWdk8YMcn11TCGmsHConAWY+7wQssAsSzXpV1QGZLIkIDWM","Hash":"06A52ED21B6107249063B262C4DA5316ED4DE000998212F1994AD1ED4A32E623"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"d9zecInrH9431LBAxs+HdFy+t3r1rmWNjk3MkJtLr02XuCM0MDemA0jIny7eAYwA","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":1985188,"ClasseServizio":0,"Crypt":"cjpms82n0sP6RyIw+k9GfqiqNN6MDql83xDu5JK4EwwmW/dxSExIRFjCyskRPpcDVaA1CLZFXWcfZ6E3EjH9UuGzQYBH6k4+jlnxKEatn9Gk+noBvbYw/DAtwbsjtnemaoa45vn45LaV+PvAuU8wwQ==","Hash":"D374C314BDDFC6C460B92535229CC4C9EE8501BD14A048F638E4621307E94B93"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI MILANO S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2018-11-23T00:00:00","Saldo":778416.67,"DataSaldo":"2018-11-23T00:00:00","Stato":2,"Bic":null,"Id":null,"IdAzienda":"588536","CodiceIban":"IT12J0558433470000000011905","CodiceAbi":"05584","CodiceCab":"33470","CodiceFiliale":"33470","NumeroRapporto":"000000011905","CodiceDivisa":"EUR","Descrizione":"000000011905","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000011905","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1985188","Type":102,"Crypt":"8WdYkgl6SSSf1s+jvOXJ3pZr8hivCf1EwxTwpi1eL/NfOOmeYjGhOnJqYHEJvbBy","Hash":"01B6BBF1BB743C9BA0AB75D1C6B5FD44123C6D23E381EECCD8A3D97844086DD9"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"d9zecInrH9431LBAxs+HdFy+t3r1rmWNjk3MkJtLr02XuCM0MDemA0jIny7eAYwA","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2015171,"ClasseServizio":0,"Crypt":"nZecm/XT1xv5eNzAiYev/uy9LEZkVraDSq6LtktTwRjdsyU5+GnsPzVp2rgNP5Xp5zPw24dZc4vGRzCeG2qdCrTrxIwV/SDy9RyGkuKzc+b1ayAZud9kxGPxHHnDnszqgAfVNyaGbK+il33cJiY8sA==","Hash":"0C9FD4A70294BB09C9EC7CA7C915890E8983F857674086CD81E9FFD88ABE2707"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI MILANO S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2018-11-23T00:00:00","Saldo":32617.94,"DataSaldo":"2018-11-23T00:00:00","Stato":2,"Bic":null,"Id":null,"IdAzienda":"588536","CodiceIban":"IT91I0558433470USD181000600","CodiceAbi":"05584","CodiceCab":"33470","CodiceFiliale":"33470","NumeroRapporto":"USD181000600","CodiceDivisa":"USD","Descrizione":"USD181000600","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"USD181000600","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2015171","Type":101,"Crypt":"NwvsEJXMZc/QA+9lOzonj9EYwM0MFfcx9GztZSA6BSRXiiZgltKTWpTkVVJMOrmN","Hash":"BB9CF7B7618ACD9A9A7E3CE1C69B7A4F0901770382C9FC138FA9C1F332F74114"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"d9zecInrH9431LBAxs+HdFy+t3r1rmWNjk3MkJtLr02XuCM0MDemA0jIny7eAYwA","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2015171,"ClasseServizio":0,"Crypt":"MUIs5r771S7cH0p6MIqWopeO9ITqzGiFD7+lQWlMjF15KFgIKZLr4cXKflC/ucLwC93H6Xu02mxPokiK/EdYPBXfiP+48u3wXLEQC7VvdKd/KbPoQl5swi5PCEFp4/Ux9wgtlEhMNFJormm+6Ih3xg==","Hash":"0C9FD4A70294BB09C9EC7CA7C915890E8983F857674086CD81E9FFD88ABE2707"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI MILANO S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2018-11-23T00:00:00","Saldo":32617.94,"DataSaldo":"2018-11-23T00:00:00","Stato":2,"Bic":null,"Id":null,"IdAzienda":"588536","CodiceIban":"IT91I0558433470USD181000600","CodiceAbi":"05584","CodiceCab":"33470","CodiceFiliale":"33470","NumeroRapporto":"USD181000600","CodiceDivisa":"USD","Descrizione":"USD181000600","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"USD181000600","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2015171","Type":102,"Crypt":"QdpPaC921A/8VNoJ3E6lSMzFAdf23ez4rrovALvlejYKsr7CtbHY0+HeyTiSK/xh","Hash":"359C291C917DAF96CDF97FA17F309A6D3CE1E0EC4C20D9BAD9584FE81FC6D47E"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"d9zecInrH9431LBAxs+HdFy+t3r1rmWNjk3MkJtLr02XuCM0MDemA0jIny7eAYwA","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2455525,"ClasseServizio":0,"Crypt":"9YVEkaMsljR6m2vFy/Hd99vqVPNsyEi2AEj5/WnkAwLQQNzCtXFEuFbAGtvK3G+mnimQMDi6FSwywODa9lclBiY4IGEcO4N+TeDoNt+4AVwUBC04TroI4rl5xkwHNfcDbnhrqpCHKYt0zr8Bfq5eRA==","Hash":"965AA916692C3474F18952F40E152B13D996D688A528B2F0DCD98830BA2B9254"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":205437.77,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21792","Id":null,"IdAzienda":"588536","CodiceIban":"IT38V0503433473000000011905","CodiceAbi":"05034","CodiceCab":"33473","CodiceFiliale":"33473","NumeroRapporto":"000000011905","CodiceDivisa":"EUR","Descrizione":"000000011905","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000011905                                                                                        ","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2455525","Type":101,"Crypt":"s0Kax2DzYoSDkJFqOdHENRQIZr3jYevL0/vy3CzJB2eXDNC5Xsn1IEkVZQlnvL9X","Hash":"F45B70E1F0F747C80DDE5F99FB2A1B9617F550FD7E980F732EF233E6B9E69E6C"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"d9zecInrH9431LBAxs+HdFy+t3r1rmWNjk3MkJtLr02XuCM0MDemA0jIny7eAYwA","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2455525,"ClasseServizio":0,"Crypt":"A7MsfUnNIzju7XJaiUOzHvItxi2QoRGUQV+cEYya5FKKZ/tlgZDaKNhtDg2PiU2lRkG78I1w3mrAggXo8i9aN3E4V6qsSQdh1l2xG2qJMH7iSqimtUo3WtZ3YoqX3xF9jQxgRmrEj+G0PsRkC/IGRw==","Hash":"965AA916692C3474F18952F40E152B13D996D688A528B2F0DCD98830BA2B9254"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":205437.77,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21792","Id":null,"IdAzienda":"588536","CodiceIban":"IT38V0503433473000000011905","CodiceAbi":"05034","CodiceCab":"33473","CodiceFiliale":"33473","NumeroRapporto":"000000011905","CodiceDivisa":"EUR","Descrizione":"000000011905","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000011905                                                                                        ","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2455525","Type":102,"Crypt":"EUB1tK7E7g+7COhtoTdIB0niGBBg2p7dWzuEbkd90O0jmM+ZohlSOJdxDxG6W2gf","Hash":"27F3FD689AC7226B1670A1235AE8CADE5308BF7C48950611D20D5A4AB9953D9E"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"d9zecInrH9431LBAxs+HdFy+t3r1rmWNjk3MkJtLr02XuCM0MDemA0jIny7eAYwA","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2538010,"ClasseServizio":0,"Crypt":"aa89jLJKKkNLPPIHlsxaVp2CORB+N32qQIDd9sx5GnX3tO97NwGXzbXqb6tNbloxP8snU6C8z69X344Un4FB0vl9xpiyub+y7jV7rJtxjUaZaQ6QUKiYD++WBE0f7h6nlnrVy5T6Gp/IebAbjKUHhw==","Hash":"3B88B2A605037F4758F94F0D7A6D41C340E47A381EDA0E54F587E1952CF330B7"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":130686.27,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21792","Id":null,"IdAzienda":"588536","CodiceIban":"IT95U0503433473USD181000600","CodiceAbi":"05034","CodiceCab":"33473","CodiceFiliale":"33473","NumeroRapporto":"USD181000600","CodiceDivisa":"USD","Descrizione":"USD181000600","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"USD181000600","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2538010","Type":101,"Crypt":"yrTjKbLfLkixL191zV4ZmOExuxoP7iPqkLqt+oYcYSASLm510iVQS/QD1yaA0ck1","Hash":"6AD176FFE5B5A3ED16EFCDA4EA4B07AC6C4948DD749B69B70EC7A7CCB4DFBFA7"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"d9zecInrH9431LBAxs+HdFy+t3r1rmWNjk3MkJtLr02XuCM0MDemA0jIny7eAYwA","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2538010,"ClasseServizio":0,"Crypt":"yEjs9H4BUe2pI8EYyOZvE4WCk0rKgpXnjmp6WEzeUySCZBAxoswd++8CX2kvAB2n+RDaJFsWfxhUXn0HQAl1RuKliQgh68BT1Jcdg7puCELWcprvAfFcpm04+Wt1Gdmg49rLB0YgWeN8QcUaQtOfgw==","Hash":"3B88B2A605037F4758F94F0D7A6D41C340E47A381EDA0E54F587E1952CF330B7"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":130686.27,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21792","Id":null,"IdAzienda":"588536","CodiceIban":"IT95U0503433473USD181000600","CodiceAbi":"05034","CodiceCab":"33473","CodiceFiliale":"33473","NumeroRapporto":"USD181000600","CodiceDivisa":"USD","Descrizione":"USD181000600","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"USD181000600","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2538010","Type":102,"Crypt":"0ILMGeod5Dh/9eN3ktnaOR5dJFJgi+H4Ky/iEgN30wzUkYTAYVIwEBx/NkwqBzb1","Hash":"FC03CB3E877F9DAD4FAF64C772F333446D89539639BDB89B52EB9490AF54E191"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"d9zecInrH9431LBAxs+HdFy+t3r1rmWNjk3MkJtLr02XuCM0MDemA0jIny7eAYwA","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2538011,"ClasseServizio":0,"Crypt":"vR93WHoUw9tisRlW07b8ibWB4Jtn0x/YuUviiFad6IXQ8E67T9INm9kpMEeCWxAhg3gtWsxWO8ksmNFR1CLbKlR1GAzM3JVHuv4Qm0Bnwfhrbivm5JsZMyGlJhHxhB50cmj+FeagUPJBtzoRMdyreA==","Hash":"A9DA79FA8D75CE3970FC17554F09DFC1FB73FED83B4B64F92AF05A324DD6BEE2"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"MILANO AG. 36","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":-2277518.39,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AI0","Id":null,"IdAzienda":"588536","CodiceIban":"IT28A0503401636EUR700001843","CodiceAbi":"05034","CodiceCab":"01636","CodiceFiliale":"01636","NumeroRapporto":"EUR700001843","CodiceDivisa":"EUR","Descrizione":"EUR700001843","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"EUR700001843","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2538011","Type":101,"Crypt":"Nn0SzOzd+nAg8WwmRgHTyL9wTUJJoZ5xjuhQ6Kj1oEb0UMR9t+0C83UmdcFGMlwt","Hash":"837B0E9195BB36CA36199285BA2E258310F59A3614CEC2A78BE2BDE485AF079B"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"d9zecInrH9431LBAxs+HdFy+t3r1rmWNjk3MkJtLr02XuCM0MDemA0jIny7eAYwA","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2538011,"ClasseServizio":0,"Crypt":"2+aUOmrS1FQV9bbZz53+yCspLZq3Maue1mqZTO9pFG2tJztYYe8WgCH4AxAAAqp2OwAi0VZhC1ae5cdXOonSlxJi07h8ATUX+8G8UYrzkbpAHaq+L1QU13lksKnyMiCbWLyjYwTTRqkMQs0FCF9CgQ==","Hash":"A9DA79FA8D75CE3970FC17554F09DFC1FB73FED83B4B64F92AF05A324DD6BEE2"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"MILANO AG. 36","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":-2277518.39,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AI0","Id":null,"IdAzienda":"588536","CodiceIban":"IT28A0503401636EUR700001843","CodiceAbi":"05034","CodiceCab":"01636","CodiceFiliale":"01636","NumeroRapporto":"EUR700001843","CodiceDivisa":"EUR","Descrizione":"EUR700001843","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"EUR700001843","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2538011","Type":102,"Crypt":"EyTcDszA+UpPQu5u7woN9udClsBhHtxl8zMtdnIZ6RMqzqV/uGqeUNinPtCceR45","Hash":"7819029E594A7926C626DE62FB8A7FD66E953BE91E15AEA777D6C52E62ECBC41"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"d9zecInrH9431LBAxs+HdFy+t3r1rmWNjk3MkJtLr02XuCM0MDemA0jIny7eAYwA","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2538012,"ClasseServizio":0,"Crypt":"5wWJXRqt68/piRhRF5/kw2aAqh8taeww32Ub2MSFKYqt0HeYMnbTTalBdaAS1mlTR7UVeQUuqYAY3rQA+BRq6YbmF2ZMnsNBkqqD4Z0KmC2gDPzMo4bnyfC3m0XagZTC7nRcVV5WALhK4AIjnzHEtQ==","Hash":"DFF08128C41D0657AAD329C6619BCF2548BC8B9BECE631643C9CB74A7A874B7C"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"MILANO AG. 36","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":0.00,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AI0","Id":null,"IdAzienda":"588536","CodiceIban":"IT48N0503401636EUR800004456","CodiceAbi":"05034","CodiceCab":"01636","CodiceFiliale":"01636","NumeroRapporto":"EUR800004456","CodiceDivisa":"EUR","Descrizione":"EUR800004456","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"EUR800004456","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2538012","Type":101,"Crypt":"bYU6G9l9vRl7bI6puVnNIVbrBurfY6sKQm3EBmSL/XK+nGEEu6sUvX7c3sxqqoQS","Hash":"77BA9CE355CEF9B1F7FF8360957583848E65BFBCCFE4C27EBACBF13B2500DEC4"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"d9zecInrH9431LBAxs+HdFy+t3r1rmWNjk3MkJtLr02XuCM0MDemA0jIny7eAYwA","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2538012,"ClasseServizio":0,"Crypt":"PNji6UmX36PcG8M0t1m12x1mz2hNcWO1aFXfsqLYcPFC6QblASuaDwt9AFBAOwCW+HPWeuXum3dGE60ChNBA1XUVvgVqhSPM0ty1HXAz1WLjCzeM5BrAocl1cOwia4/1IVYBbKzDjSyNSrT9tLyTtg==","Hash":"DFF08128C41D0657AAD329C6619BCF2548BC8B9BECE631643C9CB74A7A874B7C"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"MILANO AG. 36","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":0.00,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AI0","Id":null,"IdAzienda":"588536","CodiceIban":"IT48N0503401636EUR800004456","CodiceAbi":"05034","CodiceCab":"01636","CodiceFiliale":"01636","NumeroRapporto":"EUR800004456","CodiceDivisa":"EUR","Descrizione":"EUR800004456","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"EUR800004456","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2538012","Type":102,"Crypt":"8AJDUjyAWQgG6OQkIxx0+547J6WWrq6VroMH1MYWk+AvJ7D0W4n1NatyMPtaowtc","Hash":"25B9D434EE53DDE81BAAB69464DE5879763ACF50E677B2C6A82777D10649A2EC"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"d9zecInrH9431LBAxs+HdFy+t3r1rmWNjk3MkJtLr02XuCM0MDemA0jIny7eAYwA","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}}];
    var PROFILABLE_EXTRACTIONS = {"TIPO_FORMATO":[{"K":"CSV","V":"CSV"},{"K":"CBI","V":"CBI"}]};
    var SERVIZI_DISPOSITIVI = [{"K":"5","V":"Allineamento Archivi IBAN"},{"K":"6","V":"Assegni Circolari"},{"K":"7","V":"Assegni di Quietanza"},{"K":"8","V":"Bollettino Bancario"},{"K":"1","V":"Bonifici SEPA"},{"K":"10","V":"Bonifico Estero"},{"K":"11","V":"Effetti Impagati"},{"K":"12","V":"Incassi Direct Debit"},{"K":"13","V":"Incassi Estero"},{"K":"14","V":"M.Av"},{"K":"16","V":"Pagamento Deleghe F24"},{"K":"17","V":"Pagamento F24 Elementi Identificativi"},{"K":"18","V":"R.I.D"},{"K":"19","V":"Revoche F24"},{"K":"20","V":"Ri.Ba."},{"K":"21","V":"Richiamo M.Av"},{"K":"22","V":"Richiamo R.I.D"},{"K":"23","V":"Richiamo Ri.Ba."},{"K":"24","V":"Richieste rendiconto mandati SEDA"},{"K":"25","V":"Ritiro Effetti (Pagamento Riba)"},{"K":"3","V":"Stipendi SEPA"},{"K":"27","V":"Strutture Libere"},{"K":"28","V":"Variazioni Coordinate RID"}];
    var jFilter = {"Product":0,"ImportoFrom":null,"ImportoTo":null,"Type":null,"NumTransaction":null,"StatiDistinta":null,"Identifier":null,"IdCompany":null,"CodAbi":null,"DataFrom":null,"DataTo":null,"StartIndex":null,"Size":null,"SortColumn":null,"IsSortAscending":null};
    var Sections = {
        SEARCH: "#SEARCH",
        RESULT: "#RESULT",
    };

    function viewModel(filter) {
        var self = this;
        self.Filter = ko.observable(new App.Utility.FilterFlowTransaction(filter));

        self.CurrentSection       = ko.observable(Sections.SEARCH);

        self.AziendaSelezionata = ko.observable();
        self.BancaSelezionata = ko.observable();

        self.Validation = ko.observableArray([]);
        self.Message = ko.observable();
        self.CssClass = ko.observable('success');

        self.AziendaSelezionata.subscribe(function() {
            if (App.Core.IsNullOrUndefined(self.AziendaSelezionata()))
                self.Filter().IdCompany(null);
            else
                self.Filter().IdCompany(self.AziendaSelezionata().Id);
        });

        self.BancaSelezionata.subscribe(function() {
            if (App.Core.IsNullOrUndefined(self.BancaSelezionata()))
                self.Filter().CodAbi(null);
            else
                self.Filter().CodAbi(self.BancaSelezionata().CodiceAbi);
        });

        self.Tipologia = ko.observableArray(SERVIZI_DISPOSITIVI);
        self.Formato = ko.observableArray(PROFILABLE_EXTRACTIONS['TIPO_FORMATO']);


        self.AvanzateBodyVisible = ko.observable(false);
        self.AvanzateCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.AvanzateBodyVisible));


        self.AvanzateCollapse = function() {
            self.AvanzateBodyVisible(!self.AvanzateBodyVisible());
        };

        self.Estrai = function() {
            self.Validation.removeAll();
            Http.Post('/anchise2.web/Estrazioni/Dispositive/PrepareDownload', ko.toJSON(self.Filter()))
                .success(function(data) {
                    // Elimina l'iframe generato da un precedente fileDownload.
                    var iframe = $('body').children().last();
                    if (iframe.prop('tagName') == 'IFRAME') iframe.remove();
                    var result = [new App.Core.StandardJsonResult(data.validation), new App.Core.StandardJsonResult(data.result)];
                    if (result[0].HasError) {
                        ko.mapping.fromJS(result[0].Messages, null, self.Validation);
                        $("body").animate({ scrollTop: 0 }, '500');
                    } else if (result[1].HasError) {
                        self.Message(result[1].Messages[0].ErrorMessage);
                        self.CssClass('alert');
                        location.hash = Sections.RESULT;
                    } else if (result[1].Response.Items.length > 0) {
                        uiHelper.Confirm({
                            component:  { Name: 'extraction-summary', Params: result[1].Response.Items },
                            okCallback: _generaZip
                        });
                    } else {
                        self.Message('Non risulta alcun dato per i parametri di ricerca immessi');
                        self.CssClass('alert');
                        location.hash = Sections.RESULT;
                    }
                });
        }

        var _generaZip = function() {

            $.fileDownload('/anchise2.web/Estrazioni/Dispositive/GenerateZip', {
                data: { json: ko.toJSON(self.Filter()) },
                httpMethod: "POST",
                prepareCallback: function(url){uiHelper.ShowLoader();}
            })
            .fail(function(a) {
                uiHelper.HideLoader();
                self.Message('Operazione fallita');
                self.CssClass('error');
                location.hash = Sections.RESULT;
            })
            .then(function() {
                uiHelper.HideLoader();
            });

        }

        $.ajax('/anchise2.web/Widget/LinkRapidi')
            .success(function(html){
                $('#9f7769de910f4f3e9121920d16ff6c69_6').append(html);
            });
        location.hash = Sections.SEARCH;
    }

    var rootViewModel = new viewModel(jFilter);

    $(document).ready(function () {
        ko.applyBindings(rootViewModel, document.getElementById('9f7769de910f4f3e9121920d16ff6c69_4'));

        // Route
        var sammy = Sammy('#9f7769de910f4f3e9121920d16ff6c69_5', function() {
            this.get(Sections.SEARCH, function () {
                rootViewModel.CurrentSection(Sections.SEARCH);
            });

            this.get(Sections.RESULT, function() {
                rootViewModel.CurrentSection(Sections.RESULT);
            });
        });
        sammy.run();
    });


</script>




                        </div>