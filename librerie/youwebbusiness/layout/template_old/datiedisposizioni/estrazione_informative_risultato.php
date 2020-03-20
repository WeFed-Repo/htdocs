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




<div id="cbe66409e5f24614aa7164f6079f4566_7">
    <div class="alert-layer" data-bind="visible: IsAlertVisible" style="display: none;">
        <div class="alert alert-container alert-info" data-bind="css: CssClass">
            <div class="text-center">
                <strong>
                    Attenzione
                </strong>
            </div>
            <p data-bind="text: Message">Attenzione! Verranno scaricati tutti i movimenti mai estratti.
Proseguendo, per ripetere l'operazione con gli stessi movimenti, sara' necessario specificare un intervallo temporale.
Si vuole proseguire?
</p>
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
            <p style="white-space: pre-wrap;" data-bind="visible: Message().length > 0, text: Message">Attenzione! Verranno scaricati tutti i movimenti mai estratti.
Proseguendo, per ripetere l'operazione con gli stessi movimenti, sara' necessario specificare un intervallo temporale.
Si vuole proseguire?
</p>
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
            $('.hide', $('#cbe66409e5f24614aa7164f6079f4566_7')).removeClass('hide');
        };
    };

    var uiHelper = new UiViewModel();

    $(document).ready(function () {
        ko.applyBindings(uiHelper, document.getElementById('cbe66409e5f24614aa7164f6079f4566_7'));

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






<div id="cbe66409e5f24614aa7164f6079f4566_5">
    <div id="cbe66409e5f24614aa7164f6079f4566_4">
        <!-- RICERCA -->
        <div data-bind="visible: CurrentSection() == Sections.SEARCH" style="display: none;">
            <div class="riquadro">
                <div>
                    <div style="float:left;">
                        <div class="flag riepilogo">&nbsp;</div>
                        <h1>Estrai Dati Informativi</h1>
                    </div>
                    <div style="float:left;padding-top:13px;">
                        <a class="icon-replace icon-help active link" onclick="javascript: showPopupHelp('/anchise2.web/Widget/Help/GetHelper', 'Chiudi', 'EstrInfo', null);">Help On Line</a>
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

            <div data-bind="if:AziendaSelezionata()"></div>
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
                                        <select class="form-control" data-bind="options: Tipologia, optionsText: 'V', optionsValue: 'K', value: Filter().TagProductCbi, optionsCaption: 'Seleziona'"><option value="">Seleziona</option><option value="RH">RH - Movimenti e Saldi C/C</option><option value="RP">RP - Movimenti e Saldi Portafoglio</option><option value="SL">SL - Strutture Libere</option><option value="DT">DT - Dossier Titoli</option><option value="RA">RA - Conti Anticipi</option><option value="EP">EP - Esiti Pagamenti</option><option value="IB">IB - Esiti Ri.Ba</option><option value="IM">IM - Esiti M.Av</option><option value="IR">IR - Esiti R.I.D.</option><option value="BB">BB - Esiti Bollettino Bancario</option><option value="A4">A4 - Esiti di accettazione/rifiuto</option><option value="Q4">Q4 - Esiti di quietanza</option><option value="AV">AV - Avvisatura Effetti</option><option value="AP">STAT_RPT_PSD_AP - Esiti Ritiro Effetti</option><option value="AB">STAT_RPT_PSD_AB - Esiti Bollettino Bancario</option><option value="PE">STAT_RPT_PSD_PE - Esiti Pagamenti Estero</option><option value="YB">STAT_RPT_DISP_PAG_BONI - Esiti Bonifici SEPA</option><option value="YS">STAT-RPT-DISP-PAG_STIP - Esiti Stipendi SEPA</option><option value="YW">ESITO_BON_ORD_BEN - Esiti Pag. SEPA al Benef</option><option value="YI">STAT_RPT_INC_SDD – Esiti Incassi Direct Debit</option><option value="RD">REMUNERATION_SEDA - Rendiconto SEDA</option><option value="EC">EC - Estratto Conto Periodico</option></select>
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
                                <label class="control-label col-xs-3">Data caricamento:</label>
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
                                <label class="control-label col-xs-3">Crea un file per Azienda</label>
                                <div class="col-xs-3">
                                    <input type="checkbox" data-bind="checked: Filter().SingleFileForCompany">
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
    var PIAZZATURA = [{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":1985188,"ClasseServizio":0,"Crypt":"3fq63pIj4psq26vdXnYRKnCXbirSn2PDliYGefNYwWIqbFv6c7J5ZtwgqXXkD4MWiStO+DJGpPXEprzflWexOYA4gqxyIlNeNu4Pf0FrCY6oQ1Vl8PRHnoNk267qY2AKPDtqv+2xiS71axLdHC6OBA==","Hash":"D374C314BDDFC6C460B92535229CC4C9EE8501BD14A048F638E4621307E94B93"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI MILANO S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2018-11-23T00:00:00","Saldo":778416.67,"DataSaldo":"2018-11-23T00:00:00","Stato":2,"Bic":null,"Id":null,"IdAzienda":"588536","CodiceIban":"IT12J0558433470000000011905","CodiceAbi":"05584","CodiceCab":"33470","CodiceFiliale":"33470","NumeroRapporto":"000000011905","CodiceDivisa":"EUR","Descrizione":"000000011905","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000011905","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1985188","Type":101,"Crypt":"0XaspMFsev3rxFHM0uTSo7zJ5ZvSUpx+7TAxrpicVvHkRpgsy+p+FzHkr87qlD/X","Hash":"06A52ED21B6107249063B262C4DA5316ED4DE000998212F1994AD1ED4A32E623"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2015171,"ClasseServizio":0,"Crypt":"Vfp9qN4RtTiCJj7gN/Vu9QaMBug3vtIUJWlNBrJx2tN13u58wfRyZ3V5wKO9Zo5ayP98AbuK+PcWhJT6QiOfL3dxCVoy91DLYHkaMQ39IeWgM0ic87A4jql4pDJt/TzTr1IkzEqe7sqKqsG7JRS0Uw==","Hash":"0C9FD4A70294BB09C9EC7CA7C915890E8983F857674086CD81E9FFD88ABE2707"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI MILANO S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2018-11-23T00:00:00","Saldo":32617.94,"DataSaldo":"2018-11-23T00:00:00","Stato":2,"Bic":null,"Id":null,"IdAzienda":"588536","CodiceIban":"IT91I0558433470USD181000600","CodiceAbi":"05584","CodiceCab":"33470","CodiceFiliale":"33470","NumeroRapporto":"USD181000600","CodiceDivisa":"USD","Descrizione":"USD181000600","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"USD181000600","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2015171","Type":101,"Crypt":"YSOedjDQxIMQ9iewehen8jIvOFtLRl8oaKskYcn7rgZk1SoQxTOLt5/Pg4O/w72M","Hash":"BB9CF7B7618ACD9A9A7E3CE1C69B7A4F0901770382C9FC138FA9C1F332F74114"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2287792,"ClasseServizio":0,"Crypt":"+SzqUt3UMZiNJzryWgDalIaJhdhuXfIsqPSQhvoYzzHI9QJW4ffnR04u+uLYGMODBEKrs4BKO+6Eo9BOaX6GBDv0UX2Nf0tR6i3pYMcy2VBGfnOQoZDKyyYK+ggWNekHbyE2yIKcePkg/BI0LPU0gw==","Hash":"64CD9595592C9482FF4F164DC021441499CDA00CE463C5F2D5D3625F8BEB862B"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI MILANO S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"0001-01-01T00:00:00","Saldo":0.0,"DataSaldo":null,"Stato":1,"Bic":null,"Id":null,"IdAzienda":"588536","CodiceIban":null,"CodiceAbi":"05584","CodiceCab":"33470","CodiceFiliale":"33470","NumeroRapporto":"000000011905","CodiceDivisa":"EUR","Descrizione":"000000011905","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000011905","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2287792","Type":106,"Crypt":"2XyKseoF+Txrnz1YuP9BFBuolWxgNSedgb7E8o2MnIqPfQkR4Hstysk9PycO4Op8","Hash":"9EC8A6A7A9977E550C178DF722B9BF09F0B1AB2359E8EFCDD0B7B0904FAE90D3"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2323603,"ClasseServizio":0,"Crypt":"V+UOqZZk9cWSA5T8F9vQpWdZD8iZ8r1Wz8zdcFrquszs6hbrCrCxMXoB+xMRA3WjG/zQhLzrfS3D+l4E8DoPz391rdVQavFLdvHAmD65QTiGq0msLjghifz0FxoRqJvvWuGOmx58yghyYSL1IEBvgQ==","Hash":"C6D097F446EDE31E36EECE4841C883A73D2A42D2AB3461149880CEB2D62D4F2E"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI MILANO S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2018-11-09T00:00:00","Saldo":0.0,"DataSaldo":null,"Stato":2,"Bic":null,"Id":null,"IdAzienda":"588536","CodiceIban":null,"CodiceAbi":"05584","CodiceCab":"33470","CodiceFiliale":"33470","NumeroRapporto":"180918059276","CodiceDivisa":"USD","Descrizione":"180918059276","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"180918059276","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2323603","Type":100,"Crypt":"Qni4V3o7c9T1fSdszjoQIKYUw1yCt9YfawdJO+Mwk5xP/SpQBLPNsVuGMVU5xDXN","Hash":"881A1D4599150EAD3B3F807D4BC13261F037D9CE271C5FED5EBFDF655DA003B5"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2351134,"ClasseServizio":0,"Crypt":"JO/T4q4yz+kL7CHoe88aqG7CuwmEJ3B8Lpb3YLYIsyCvh46ycoar4W9PXJ693OdLj5X7k5bkAT7IXV2JZRlyCtusPZcUOUIVkWQHkasslFMCUJ9NaaT4AcRrK6wkQVJ//pMNGAueCoNT4WYsn1+BQA==","Hash":"91077AB5D96F67DB1CBDE6BBD8956A809B454B58EF93CBF6AE7119EA16BE1A56"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI MILANO S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2018-11-06T00:00:00","Saldo":0.0,"DataSaldo":null,"Stato":2,"Bic":null,"Id":null,"IdAzienda":"588536","CodiceIban":null,"CodiceAbi":"05584","CodiceCab":"33470","CodiceFiliale":"33470","NumeroRapporto":"180628091594","CodiceDivisa":"EUR","Descrizione":"180628091594","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"180628091594","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2351134","Type":100,"Crypt":"FeM/gsW7DB86Dit6dBVeyEqAT2T8QWFOBb7t/VVUovGsUMbyX+VuvUhPrwiLXFM+","Hash":"CE5CCA364590B5EF8330BF608D98762CA531BEA8C6D8B4A7D6B199C0E3EFCF01"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2039856,"ClasseServizio":0,"Crypt":"/I3W4Q3F3APMUuF7yTq+VXkXYMMAx+6aVvhyn2n7SJ2ufNHOx+poRyxj6ap0Wl4SJlZbQn1nzSYjSMYZZR4kzT783O2EDaTGz9mcZl68sZ5ykvcG1yNV+hNYX1SE/gtmYo7nRCWbIHJ7y9UVVMwoqA==","Hash":"6CAC059F14F06C07615C2C71E0260191E06DD1499069463C7AFE1566E9B2B065"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI MILANO S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"0001-01-01T00:00:00","Saldo":0.0,"DataSaldo":null,"Stato":1,"Bic":null,"Id":null,"IdAzienda":"588536","CodiceIban":null,"CodiceAbi":"05584","CodiceCab":"33470","CodiceFiliale":"33470","NumeroRapporto":"000030105620","CodiceDivisa":"EUR","Descrizione":"000030105620","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000030105620","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2039856","Type":103,"Crypt":"5Tfkh1+5v5rWyhunlY08xYV/NaTRXiYiCkVF4klRiRSv+jLgZDWU5VmLXvoI2ehc","Hash":"42413253252C6515DAE8CD6EF48EC75C076457F54E26BE41211EE6D82F83495C"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2351135,"ClasseServizio":0,"Crypt":"N0iCrXJCtVEqPTNkl19qcdyHzEyKAPGudLIKGdF5s+PRz2lyzPKD31zyqnK9Q0P7r6jEwmsXWmnZkkdFkmDaV5vZ9PGBIJkcwQdomyYAFY17kE5NX+0tzHYKGRHlRPazGkRrixk/mDlabCVbEBu0NA==","Hash":"14EF5DA22F3CE70C55C7C632480E4F9D7E698D557D928AF244EF71C65C66FE78"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI MILANO S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2018-11-06T00:00:00","Saldo":0.0,"DataSaldo":null,"Stato":2,"Bic":null,"Id":null,"IdAzienda":"588536","CodiceIban":null,"CodiceAbi":"05584","CodiceCab":"33470","CodiceFiliale":"33470","NumeroRapporto":"181106058453","CodiceDivisa":"EUR","Descrizione":"181106058453","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"181106058453","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2351135","Type":100,"Crypt":"mPV0pq9s2ERTCYdu9F0+ZxVlPVaunUdtfl5vHrba6Fpvz9aWWgUzI8MdvtAPC84o","Hash":"BD26B7B725572A5A561BE330D0C5D24C998D362363B3F52A35D0638329554753"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2357663,"ClasseServizio":0,"Crypt":"ObQ7TLMujP8bU33vQxCqVB/oVF2ZG8LGcwUt6oy076GF+CAhxMaYsJlw9fLcib6l2XpZg424oFuWWZxrLDdkW94MPQnAdoBgwirAShVDzj2HTZjizVxYLYs4WcHYWyuJw1RSMhQMpRiVA9virhCJdA==","Hash":"2B36D8B9668A75664E1DD5205CF98C4DD5CA46E4C70FBBC01F0D6CBEC41CC875"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI MILANO S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2018-11-19T00:00:00","Saldo":0.0,"DataSaldo":null,"Stato":2,"Bic":null,"Id":null,"IdAzienda":"588536","CodiceIban":null,"CodiceAbi":"05584","CodiceCab":"33470","CodiceFiliale":"33470","NumeroRapporto":"181115048638","CodiceDivisa":"USD","Descrizione":"181115048638","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"181115048638","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2357663","Type":100,"Crypt":"KFXJ0F+R3pjzmjX74kQzZQG4UorFOKH/UgZlUSggq1ZBXpBu9LcHou1Q4o2np7GF","Hash":"D3CFED791B235F7E06A301ADE764153077E7DD420919CBF8120C1351FDF0D941"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2359202,"ClasseServizio":0,"Crypt":"GeeP0RBlDhRVqeWd8rPkTJS0upm+DKfxdOmZ44DSHGqeWFHKehhhLfO/P4oqSfYhT+0lEX2aPWXvM4U9dArugrdD3yynOui/toD3cQxtq4fESc0YHmsUfJZgAqh+0T7OCioDWBItSfzbVW7/Atu6OQ==","Hash":"44DA8EB765CC69D1468D9E4E7169A1112F6DD3763B4FFB8A2501D5CA3345388D"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI MILANO S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2018-11-21T00:00:00","Saldo":0.0,"DataSaldo":null,"Stato":2,"Bic":null,"Id":null,"IdAzienda":"588536","CodiceIban":null,"CodiceAbi":"05584","CodiceCab":"33470","CodiceFiliale":"33470","NumeroRapporto":"180720067056","CodiceDivisa":"EUR","Descrizione":"180720067056","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"180720067056","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2359202","Type":100,"Crypt":"BRH3weVfKzd/RHGsEOZqtS8kXOo+JA6U1fHJHU5z2hNwLPJp2lLURYK5izGnj0ut","Hash":"22095FFF5EEA335BAC2104DC44B6AB333475DE98D1F510A737E487839F9DE3EC"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2359203,"ClasseServizio":0,"Crypt":"zpNSL74UGfiS30S15thXgw4XChF6yT5Ptb4OoW41fr0bR9vV7ZOt5IIOl/E3Reji9TEERpyKhPEszBCLD4Nb/WRMwmmBqRYFjXAARMN9f0ok8k1ujoWpasXMIvRgQY1KU8quifd57J3oWG05BS3DPw==","Hash":"D4E680030AACA7A6E597DAD383BC762087887B6F0FD89BBB86CF6E16CAF9B3B5"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI MILANO S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2018-11-21T00:00:00","Saldo":0.0,"DataSaldo":null,"Stato":2,"Bic":null,"Id":null,"IdAzienda":"588536","CodiceIban":null,"CodiceAbi":"05584","CodiceCab":"33470","CodiceFiliale":"33470","NumeroRapporto":"181121042915","CodiceDivisa":"EUR","Descrizione":"181121042915","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"181121042915","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2359203","Type":100,"Crypt":"Ve5/ZWnLEGYy4pw376BkPYt3hYSb5BPVc4IU+EH7WT1CSemILTchr/XXpiOIvH0q","Hash":"ABD16A8490E93FD96E6EEF4D891916125AE5D70FE29EADA1234819CBF4C1776D"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2360387,"ClasseServizio":0,"Crypt":"Qt+YBkZlIK3Fhlt3eIoB4XCUOw+uDB2onfki8uuvVW7C3Q+usj9FvpMyJPE6AyzlO9VFkozGQUwS4jxwzTh7kYKyDVGwB/p6WOSOPmtdu1nDJfIurE2FkXe/QAnw0cfYbMZDdjNT4vDYhONg7XFnmQ==","Hash":"F431F5DAF95E44D1014A2A8B56EC0E1B5918FFA1E64D589FF6D795DF57601DE4"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI MILANO S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2018-11-23T00:00:00","Saldo":0.0,"DataSaldo":null,"Stato":2,"Bic":null,"Id":null,"IdAzienda":"588536","CodiceIban":null,"CodiceAbi":"05584","CodiceCab":"33470","CodiceFiliale":"33470","NumeroRapporto":"181122065172","CodiceDivisa":"EUR","Descrizione":"181122065172","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"181122065172","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2360387","Type":100,"Crypt":"j5N3KG8H7lGawUdmdWzH3HhhCDGPygWhoGqhVfn6pYlusFQOd2DQlT6L8kqC4fXy","Hash":"BAEE90E3477221A31A0869D1A3C67EF2798ED77E7D3B34F895B85055CD84E4D9"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2527665,"ClasseServizio":0,"Crypt":"TLkwwnYlMYnJWcg3KFtS6WewZJEeBm89gp8slEsV61Ma8WKKku7m89j+79kuBMhBFCQPuI7xk/0vcizUIn3i8L762fTwSIDjcW1+E3qToZO4nft57mvQqumcSzQiQdOBnu9yL1Glj6V3uYJde8AbfA==","Hash":"8E4051F9960927CDC7AA1EE09D049A582EACDEF059F7D6B8E67BA5B96F184752"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"0001-01-01T00:00:00","Saldo":0.0,"DataSaldo":null,"Stato":1,"Bic":"BAPPIT21792","Id":null,"IdAzienda":"588536","CodiceIban":null,"CodiceAbi":"05034","CodiceCab":"33473","CodiceFiliale":"33473","NumeroRapporto":"000000011905","CodiceDivisa":"EUR","Descrizione":"000000011905","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000011905                                                                                        ","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2527665","Type":106,"Crypt":"Q5isCx50D+TBvHglJdSUY6QM6cJMcU7tEB0roValBtIC+/gNQlJczRLCslfOrIvU","Hash":"F942FDC73080FC7C447AB2F43CC390CF939928F7BF652D54F4A003E73D01CEFD"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2473573,"ClasseServizio":0,"Crypt":"sZYNOlw0sSOITh+kVfz9Kqwi2Lp9J4V9RsJh6JDA8hgar5U5yJ40ZsAlR9lFaK2qQ4oGhlyH4oy8JeMuIbbdBKKvIN/B6JKawor+kw6UK8U+EkGgf4xdDf0TCIe3VJZvp1gZmCqVMDIGVTPxvlB4xg==","Hash":"154AAE6237494F95FB44B5D936A1F40FB3F3B9F45816479D85FFABC538EF8C87"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"0001-01-01T00:00:00","Saldo":0.0,"DataSaldo":null,"Stato":1,"Bic":"BAPPIT21792","Id":null,"IdAzienda":"588536","CodiceIban":null,"CodiceAbi":"05034","CodiceCab":"33473","CodiceFiliale":"33473","NumeroRapporto":"000030105620","CodiceDivisa":"EUR","Descrizione":"000030105620","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000030105620                                                                                        ","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2473573","Type":103,"Crypt":"TN704BK1voMNPCWhOF8aiUdBqP2PRafq9IXOTff4Jqcwc36SEHf1v6JHAVzUuerU","Hash":"EBE115366ABC93B5D3B63ED395F00EFD5CC39CDC00CAEED694B0E1ABD77A65B7"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2455525,"ClasseServizio":0,"Crypt":"o2mUTQ0Hb0HTkZZNy9fTQpY6H4YdMXQL5x82n68+RhHC8TAnWNnWjdbBwiqyvaksMyaP3sIewdBHCglsK9kUZSQtnHqK23X3FpZ6AToArxsz6BFsOs3CUVzquRfCG/fAK9lkvMqq/h1YJuvJf9gqkw==","Hash":"965AA916692C3474F18952F40E152B13D996D688A528B2F0DCD98830BA2B9254"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":205437.77,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21792","Id":null,"IdAzienda":"588536","CodiceIban":"IT38V0503433473000000011905","CodiceAbi":"05034","CodiceCab":"33473","CodiceFiliale":"33473","NumeroRapporto":"000000011905","CodiceDivisa":"EUR","Descrizione":"000000011905","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000011905                                                                                        ","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2455525","Type":101,"Crypt":"NHY3GitHfibLQPzO9pzy5NcBmJ/zYXF+ylNtdbG796oYO6GKPCRrK+QWTpVSgU0I","Hash":"F45B70E1F0F747C80DDE5F99FB2A1B9617F550FD7E980F732EF233E6B9E69E6C"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2550181,"ClasseServizio":0,"Crypt":"TjoB2wj3gcP1CZUW6Ayc8mDvcZ/VjsTaSDswoUdH0LmRCOWJrPC3YCXjQ1ZmpVm06SwBUZ6NGEDENJpjNeg/nxbB6kvUvNwQemxCak27j+hStFg3JR3lFQQ9g5rvNxR75qg9RJT25koBPa2d3DQGrw==","Hash":"B6B55325313971FC4D642D613F7C51FCE51DAC1A1188096ED090E65BC671A0E6"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2018-11-30T00:00:00","Saldo":0.0,"DataSaldo":null,"Stato":2,"Bic":"BAPPIT21792","Id":null,"IdAzienda":"588536","CodiceIban":null,"CodiceAbi":"05034","CodiceCab":"33473","CodiceFiliale":"33473","NumeroRapporto":"181115048638","CodiceDivisa":"USD","Descrizione":"181115048638","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"181115048638","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2550181","Type":100,"Crypt":"NO38hroupwpPs6+ddzvxZzWmCg2gImehdpuRSEIDLzBjprc9xRKXcq1wRel0lHhQ","Hash":"010E004E817E14803656230B236E628E1BBC5F7B5FA71A0880567C249E95CC16"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2580959,"ClasseServizio":0,"Crypt":"jnG4n+z38qkeM8Soedz10X8UKsXmne9xfRcAnVEmn73x1VX9ezqO9q9kNME9GbpqjPnLKKz8/ensOlj5K2qnqldMrZKaKWWyKJKAWcswfqAUwQjOPNTPYYsgXX0PT+/Zv6VRRZ2tKyJvyDDe0QbddQ==","Hash":"ACDFAC51A002EAB1538AAF15602BE70F71ACDEF1D5C27F1E937F40460808445E"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2019-01-11T00:00:00","Saldo":0.0,"DataSaldo":null,"Stato":1,"Bic":"BAPPIT21792","Id":null,"IdAzienda":"588536","CodiceIban":null,"CodiceAbi":"05034","CodiceCab":"33473","CodiceFiliale":"33473","NumeroRapporto":"180911051176","CodiceDivisa":"EUR","Descrizione":"180911051176","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"180911051176","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2580959","Type":100,"Crypt":"3ZMF1rJRcUdXEyOXTVXRfOPWwWu9OlEDCB1KXH2coNqxXYRrzsMkIstnD2WiOWn3","Hash":"542C2DA739A4FB5FA17978193333465C9EDE68BB541C80859DC2B88EF73552AE"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2538010,"ClasseServizio":0,"Crypt":"zkP58jhlP/3UvcddSUhfQNObqRh72DhT3FJtbPQP3WC6OZEMK1RGG/6fz1tHKNA0QSTxBDUvxgCzezS3fPrrctdkHZD5YnQd7scvCjwM2R5ZFEMoVM90QqE2H3JUYcfiik3S4e2stEGw+2MHdXDK+A==","Hash":"3B88B2A605037F4758F94F0D7A6D41C340E47A381EDA0E54F587E1952CF330B7"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":130686.27,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21792","Id":null,"IdAzienda":"588536","CodiceIban":"IT95U0503433473USD181000600","CodiceAbi":"05034","CodiceCab":"33473","CodiceFiliale":"33473","NumeroRapporto":"USD181000600","CodiceDivisa":"USD","Descrizione":"USD181000600","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"USD181000600","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2538010","Type":101,"Crypt":"xB9PYC1rNzpnnNm43Tq68d3uzp0v4W3e2mplmRVmVsGypM9Z2A7SyPhpn/ja8Cvg","Hash":"6AD176FFE5B5A3ED16EFCDA4EA4B07AC6C4948DD749B69B70EC7A7CCB4DFBFA7"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2538011,"ClasseServizio":0,"Crypt":"eOlPqqFl392zBr0PveFctQPUnL0NFZUQv6ePYar8orQKSP5QOhQY369a0VDNr6D7KjPWX3dP5hdaZKK7vZkHONqq0IftsH8tbP/wTkjuhBlRWwwQ4lgzMVVK+NIaoLuUf/sbXiXOwMUTjcNG4J/yQQ==","Hash":"A9DA79FA8D75CE3970FC17554F09DFC1FB73FED83B4B64F92AF05A324DD6BEE2"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"MILANO AG. 36","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":-2277518.39,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AI0","Id":null,"IdAzienda":"588536","CodiceIban":"IT28A0503401636EUR700001843","CodiceAbi":"05034","CodiceCab":"01636","CodiceFiliale":"01636","NumeroRapporto":"EUR700001843","CodiceDivisa":"EUR","Descrizione":"EUR700001843","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"EUR700001843","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2538011","Type":101,"Crypt":"NdCLD3lN5Z7kgRHbr7ZVNKXAdliEqmeucOCaP9vWOsW5O8OOPnZSGRPB2sEMehjy","Hash":"837B0E9195BB36CA36199285BA2E258310F59A3614CEC2A78BE2BDE485AF079B"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2538012,"ClasseServizio":0,"Crypt":"iFT2OS/8wsUYbiSzVGS2raMvIQmy1C8nIMiV37plO9Ik39baYjyo6ZdbH3ZwIND5MK+9vfmck709LH8Z8/YFZCd5gdjukWnrtSGOo3drw1vj68gj9c2ecTUzkt0o9q94Edh16dHiDiU5DiBzPqFc2A==","Hash":"DFF08128C41D0657AAD329C6619BCF2548BC8B9BECE631643C9CB74A7A874B7C"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"MILANO AG. 36","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":0.00,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AI0","Id":null,"IdAzienda":"588536","CodiceIban":"IT48N0503401636EUR800004456","CodiceAbi":"05034","CodiceCab":"01636","CodiceFiliale":"01636","NumeroRapporto":"EUR800004456","CodiceDivisa":"EUR","Descrizione":"EUR800004456","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"EUR800004456","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2538012","Type":101,"Crypt":"Oyg8C2mlzfQPWPF/78cJ+bp9M9EkokgkTBYB+LI5Tl3O2ARDLpt4z8swt7jyeFBw","Hash":"77BA9CE355CEF9B1F7FF8360957583848E65BFBCCFE4C27EBACBF13B2500DEC4"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"6plMBMbH6CVZAUcl/p+PnimOtz9dRzn0RAlad0FO2yTBPJyBTwKCLpDJu7Qav76k","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}}];
    var SERVIZI_INFORMATIVI = [{"K":"RH","V":"RH - Movimenti e Saldi C/C"},{"K":"RP","V":"RP - Movimenti e Saldi Portafoglio"},{"K":"SL","V":"SL - Strutture Libere"},{"K":"DT","V":"DT - Dossier Titoli"},{"K":"RA","V":"RA - Conti Anticipi"},{"K":"EP","V":"EP - Esiti Pagamenti"},{"K":"IB","V":"IB - Esiti Ri.Ba"},{"K":"IM","V":"IM - Esiti M.Av"},{"K":"IR","V":"IR - Esiti R.I.D."},{"K":"BB","V":"BB - Esiti Bollettino Bancario"},{"K":"A4","V":"A4 - Esiti di accettazione/rifiuto"},{"K":"Q4","V":"Q4 - Esiti di quietanza"},{"K":"AV","V":"AV - Avvisatura Effetti"},{"K":"AP","V":"STAT_RPT_PSD_AP - Esiti Ritiro Effetti"},{"K":"AB","V":"STAT_RPT_PSD_AB - Esiti Bollettino Bancario"},{"K":"PE","V":"STAT_RPT_PSD_PE - Esiti Pagamenti Estero"},{"K":"YB","V":"STAT_RPT_DISP_PAG_BONI - Esiti Bonifici SEPA"},{"K":"YS","V":"STAT-RPT-DISP-PAG_STIP - Esiti Stipendi SEPA"},{"K":"YW","V":"ESITO_BON_ORD_BEN - Esiti Pag. SEPA al Benef"},{"K":"YI","V":"STAT_RPT_INC_SDD – Esiti Incassi Direct Debit"},{"K":"RD","V":"REMUNERATION_SEDA - Rendiconto SEDA"},{"K":"EC","V":"EC - Estratto Conto Periodico"}]
    var jFilter = null;
    var Sections = {
        SEARCH: "#SEARCH",
        RESULT: "#RESULT",
    };

    function viewModel(filter) {
        var self = this;
        self.Filter = ko.observable(new App.Utility.FilterFlowInfo(filter));

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

        self.Tipologia = ko.observableArray(SERVIZI_INFORMATIVI);


        self.AvanzateBodyVisible = ko.observable(false);
        self.AvanzateCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.AvanzateBodyVisible));


        self.AvanzateCollapse = function() {
            self.AvanzateBodyVisible(!self.AvanzateBodyVisible());
        };

        self.Estrai = function() {
            self.Validation.removeAll();

            // Elimina l'iframe generato da un precedente fileDownload.
            var iframe = $('body').children().last();
            if (iframe.prop('tagName') == 'IFRAME') iframe.remove();

            if(App.Core.IsNullOrUndefined(self.Filter().DataFrom()) && App.Core.IsNullOrUndefined(self.Filter().DataTo())){
                uiHelper.Confirm({
                    text: 'Attenzione! Verranno scaricati tutti i movimenti mai estratti.\nProseguendo, per ripetere l\'operazione con gli stessi movimenti, sara\' necessario specificare un intervallo temporale.\nSi vuole proseguire?\n',
                    okCallback: _generaZip
                });
            } else {
                _generaZip();
            }
        }

        var _generaZip = function() {
            $.fileDownload('/anchise2.web/Estrazioni/Informative/GenerateZip', {
                data: { json: ko.toJSON(self.Filter()) },
                httpMethod: "POST",
                prepareCallback: function(url){uiHelper.ShowLoader();}
            })
            .fail(function(responseHtml, url, error) {
                uiHelper.HideLoader();
                try{
                    var messages = $.parseJSON(responseHtml);
                    var result = [new App.Core.StandardJsonResult(messages.validation), new App.Core.StandardJsonResult(messages.result)];
                    if (result[0].HasError) {
                        ko.mapping.fromJS(result[0].Messages, null, self.Validation);
                        $("body").animate({ scrollTop: 0 }, '500');
                    } else if (result[1].HasError) {
                        self.Message(result[1].Messages[0].ErrorMessage);
                        self.CssClass('alert');
                        location.hash = Sections.RESULT;
                    } else {
                        self.Message('Non risulta alcun dato per i parametri di ricerca immessi');
                        self.CssClass('alert');
                        location.hash = Sections.RESULT;
                    }
                } catch (e) {
                    self.Message('Operazione fallita');
                    self.CssClass('error');
                    location.hash = Sections.RESULT;
                }
            })
            .done(function() {
                uiHelper.HideLoader();
            })
            .then(function() {
                uiHelper.HideLoader();
            });

        }


        $.ajax('/anchise2.web/Widget/LinkRapidi')
            .success(function(html){
                $('#cbe66409e5f24614aa7164f6079f4566_6').append(html);
            });
        location.hash = Sections.SEARCH;
    }

    var rootViewModel = new viewModel(jFilter);

    $(document).ready(function () {
        ko.applyBindings(rootViewModel, document.getElementById('cbe66409e5f24614aa7164f6079f4566_4'));

        // Route
        var sammy = Sammy('#cbe66409e5f24614aa7164f6079f4566_5', function() {
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
                        <div class="clearfix"></div>
                    