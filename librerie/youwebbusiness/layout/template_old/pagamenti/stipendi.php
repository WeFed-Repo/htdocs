<div id="mainSection">
                            





<script type="text/html" id="paginatore">
    <div data-bind="visible: PagedList.Page().length > 0 && PagedList.PageCount() > 1">
        <!-- ko template: {name: PaginatorTemplate()} --><!-- /ko -->
    </div>
</script>

<script type="text/html" id="allNumbers">
    <div class="dataTables_paginate" data-bind="with: PagedList">
        <span data-bind="foreach: ko.utils.range(1, PageCount)">
            <a class="paginate_button" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)"></a>
        </span>
    </div>
</script>

<script type="text/html" id="leftNumbers">
    <div class="dataTables_paginate" data-bind="with: PagedList">
        <span data-bind="foreach: ko.utils.range(1, $component.MaxPages)">
            <a class="paginate_button" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)"></a>
        </span>
        <span><a class="paginate_ellipsis">...</a></span>
        <!--ko with: PageCount-->
        <span><a class="paginate_button" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)"></a></span>
        <!--/ko-->
    </div>
</script>

<script type="text/html" id="middleNumbers">
    <div class="dataTables_paginate" data-bind="with: PagedList">
        <span data-bind="foreach: ko.utils.range(1, 1)">
            <span><a class="paginate_button" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)"></a></span>
        </span>
        <span><a class="paginate_ellipsis">...</a></span>
        <span data-bind="foreach: ko.utils.range(PageIndex() - 1, PageIndex() + 1)">
            <a class="paginate_button" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)"></a>
        </span>
        <span><a class="paginate_ellipsis">...</a></span>
        <!--ko with: PageCount-->
        <span><a class="paginate_button" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)"></a></span>
        <!--/ko-->
    </div>
</script>

<script type="text/html" id="rightNumbers">
    <div class="dataTables_paginate" data-bind="with: PagedList">
        <span data-bind="foreach: ko.utils.range(1, 1)">
            <span><a class="paginate_button" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)"></a></span>
        </span>
        <span><a class="paginate_ellipsis">...</a></span>
        <span data-bind="foreach: ko.utils.range(PageCount()-4, PageCount)">
            <a class="paginate_button" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)"></a>
        </span>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('paginatore', {
        template: { element: 'paginatore' },
        viewModel: function (params) {
            var self = this;

            // Model
            self.PagedList = params.PagedList;
            self.PaginatorTemplate = ko.observable(null);
            self.MaxPages = 4;

            self.GetCurrentCss = function (index) {
                return (self.PagedList.PageIndex() == index) ? 'current' : '';
            }

            // Actions
            var initPaginator = function () {
                if (self.PagedList.PageCount() > self.MaxPages+1) {
                    if (self.PagedList.PageIndex() < self.MaxPages) {
                        self.PaginatorTemplate('leftNumbers');
                    } else if (self.PagedList.PageIndex() >= self.MaxPages && self.PagedList.PageIndex() < self.PagedList.PageCount() - 2) {
                        self.PaginatorTemplate('middleNumbers');
                    } else {
                        self.PaginatorTemplate('rightNumbers');
                    }
                } else {
                    if (self.PagedList.PageCount() > 1) {
                        self.MaxPages = self.PagedList.PageCount();
                    }
                    self.PaginatorTemplate('allNumbers');
                }
            };

            var pageSubscribe = self.PagedList.Page.subscribe(function () {
                initPaginator();
            });

            var pageCountSubscribe = self.PagedList.PageCount.subscribe(function () {
                self.Init();
            });

            // Initialize
            self.Init = function () {
                self.PaginatorTemplate(null);
                self.MaxPages = 4;

                initPaginator();
                //self.PagedList.PageIndex(1);
            };
            self.Init();

            self.dispose = function () {
                pageSubscribe.dispose();
                pageCountSubscribe.dispose();
            }
        }
    });
</script>


<script type="text/html" id="indirizzo-dataentry">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label  class="control-label">Tipo Indirizzo</label>
                <select class="form-control" data-bind="enable: TipoIndirizzoEnable, options: TipologieIndirizzo, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: Indirizzo.TipologiaIndirizzo"></select>
            </div>
            <div class="col-sm-1 col-xs-12"></div>
            <div class="col-sm-4 col-xs-12">
                <label  class="control-label">Indirizzo</label>
                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: DatiIndirizzoActive, value: Indirizzo.Via" />
            </div>
            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label  class="control-label">Numero</label>
                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: DatiIndirizzoActive, value: Indirizzo.Numero" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label  class="control-label">Comune</label>
                <input type="text" class="form-control no-placeholder-italic" data-bind="enable: (ComuneActive() || DatiIndirizzoActive()), value: Indirizzo.Comune, attr: {placeholder: comunePlaceholder}" />
            </div>
            <div class="col-sm-1 col-xs-12"></div>
            <div class="col-sm-2 col-xs-12">
                <label  class="control-label">Cap</label>
                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: DatiIndirizzoActive, value: Indirizzo.Cap" style="width:100px" />
            </div>
            <div class="col-sm-2 col-xs-12">
                <label  class="control-label">Prov.</label>
                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: DatiIndirizzoActive, value: Indirizzo.Provincia" />
            </div>
            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label  class="control-label">Stato</label>
                <select class="form-control" data-bind="enable: DatiIndirizzoActive, options: Nazioni, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: Indirizzo.Nazione"></select>
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('indirizzo-dataentry', {
        template: { element: 'indirizzo-dataentry' },
        viewModel: function (params) {
            var self = this;

            self.enable = params.enable ? params.enable : ko.observable(true);
            
            self.Indirizzo = params.Indirizzo;
            self.Iban = params.Iban || ko.observable('');
            self.comunePlaceholder = ko.observable('opzionale');

            self.TipologieIndirizzo = ko.observableArray(PROFILABLE_DISPOSIZIONI['TIPO_INDIRIZZO']);
            self.Nazioni = ko.observableArray(PROFILABLE_DISPOSIZIONI['NAZIONE']);
            self.ComuneActive = ko.observable(false);
            self.TipoIndirizzoEnable = ko.pureComputed(function () {
                return self.enable() != 'false' && self.enable() != false;
            });
            self.DatiIndirizzoActive = ko.computed(function () {
                var active = ((self.Indirizzo.TipologiaIndirizzo() && self.Indirizzo.TipologiaIndirizzo().length > 0) || (self.Indirizzo.Comune() && self.Indirizzo.Comune().length > 0));
                if (!active) {
                    self.Indirizzo.Via('');
                    self.Indirizzo.Numero('');
                    self.Indirizzo.Comune('');
                    self.Indirizzo.Cap('');
                    self.Indirizzo.Provincia('');
                    self.Indirizzo.Nazione('');
                }

                return active;
            });

            var ibanSubscribe = self.Iban.subscribe(function () {
                var paese = App.Core.GetPaese(self.Iban());

                self.ComuneActive((paese != '' && paese !== 'IT') || self.DatiIndirizzoActive());

                if (paese != '' && paese !== 'IT') {
                    self.comunePlaceholder('');
                } else {
                    self.comunePlaceholder('opzionale');
                }
            });

            self.dispose = function () {
                ibanSubscribe.dispose();
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



<script type="text/html" id="datiaggiuntivi-dataentry">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-3" style="padding:0">
                <div class="col-sm-6 col-xs-12" style="padding-left: 0">
                    <label class="control-label">Tipo Soggetto</label>
                    <select class="form-control" data-bind="enable: enable() != 'false', options: TipologieSoggetto, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: DatiAggiuntivi.TipoSoggetto"></select>
                </div>
                <div class="col-sm-6 col-xs-12" style="padding-right:0">
                    <label class="control-label">Tipo Codice</label>
                    <select class="form-control" data-bind="enable: DatiAggiuntiviActive, options: TipologieCodice, optionsCaption: '', optionsText: 'V', optionsValue: 'K', value: DatiAggiuntivi.TipoCodice"></select>
                </div>
            </div>
            <div class="col-sm-1 col-xs-12"></div>
            <div class="col-sm-4 col-xs-12">
                <label class="control-label">Descrizione Codice</label>
                <input type="text" class="form-control" data-bind="enable: DescrizioneCodiceActive, value: DatiAggiuntivi.DescrizioneCodice" />
            </div>
            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label class="control-label">Codice</label>
                <input type="text" class="form-control" data-bind="enable: DatiAggiuntiviActive, uppercaseText: DatiAggiuntivi.CodiceSoggetto" />
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('datiaggiuntivi-dataentry', {
        template: { element: 'datiaggiuntivi-dataentry' },
        viewModel: function (params) {
            var self = this;

            self.enable = params.enable ? params.enable : ko.observable(true);

            // ddl values for TipologieCodice if TipoSoggetto is Persona Fisica
            var tipoCodicePF = PROFILABLE_DISPOSIZIONI['TIPO_CODICE_SOGGETTO'].slice();
            ko.utils.arrayRemoveItem(tipoCodicePF, ko.utils.arrayFirst(tipoCodicePF, function (p) {
                return p.K == 'BEI'
            }));

            // ddl values for TipologieCodice if TipoSoggetto is Persona Giuridica
            var tipoCodicePG = PROFILABLE_DISPOSIZIONI['TIPO_CODICE_SOGGETTO'].slice();

            // Initialization of TipoCodice based on value of TipoSoggetto
            var initTipologieCodice = function () {
                if (self.DatiAggiuntivi.TipoSoggetto() == 'PF') {
                    self.TipologieCodice(tipoCodicePF);
                } else if (self.DatiAggiuntivi.TipoSoggetto() == 'PG') {
                    self.TipologieCodice(tipoCodicePG);
                }
            };

            // Initialization of DescrizioneCodice based on value of TipoCodice
            var initDescrizioneCodice = function () {
                if (self.DatiAggiuntivi.TipoCodice() === 'FIS') {
                    self.DatiAggiuntivi.DescrizioneCodice('ADE');
                } else if (self.DatiAggiuntivi.TipoCodice() === 'PRO') {
                    self.DatiAggiuntivi.DescrizioneCodice('CBI');
                } else {

                    self.DatiAggiuntivi.DescrizioneCodice('');
                }
            };

            // Model
            self.DatiAggiuntivi = params.DatiAggiuntivi;
            self.TipologieCodice = ko.observableArray();
            self.TipologieSoggetto = ko.observableArray(PROFILABLE_DISPOSIZIONI['TIPO_SOGGETTO']);

            // Find when some fields are active
            self.DatiAggiuntiviActive = ko.computed(function () {
                return (self.DatiAggiuntivi.TipoSoggetto() && self.DatiAggiuntivi.TipoSoggetto().length > 0);
            });
            self.DescrizioneCodiceActive = ko.computed(function () {
                return self.DatiAggiuntiviActive() &&
                       self.DatiAggiuntivi.TipoSoggetto() == 'PF' ||
                       (self.DatiAggiuntivi.TipoSoggetto() == 'PG' && self.DatiAggiuntivi.TipoCodice() != 'BEI');
            });

            // Subscribe to change value based on business request
            var tipoSoggettoSubscribe = self.DatiAggiuntivi.TipoSoggetto.subscribe(function () {
                initTipologieCodice();

                self.DatiAggiuntivi.TipoCodice('');
            });
            var tipoCodiceSubscribe = self.DatiAggiuntivi.TipoCodice.subscribe(function () {
                initDescrizioneCodice();
            });
            //var codiceSoggettoSubscribe = self.DatiAggiuntivi.CodiceSoggetto.subscribe(function () {
            //    self.DatiAggiuntivi.CodiceSoggetto(self.DatiAggiuntivi.CodiceSoggetto().toUpperCase());
            //});

            // Initialization
            self.Init = function () {
                initTipologieCodice();

                //initDescrizioneCodice();
            }
            self.Init();

            // Preventive measures against "with" data bind
            self.dispose = function () {
                //codiceSoggettoSubscribe.dispose();
                tipoSoggettoSubscribe.dispose();
                tipoCodiceSubscribe.dispose();
            }
        }
    });
</script>



<script type="text/html" id="cvs-dataentry">
    <div style="margin-bottom: 10px" data-bind="foreach: Cvs">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-sm-3 col-xs-12" style="padding: 0">
                    <label class="control-label">Tipo CVS</label>
                    <select class="form-control"
                            data-bind="options: $component.TipologieCvs, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: Tipologia"></select>
                </div>
                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                    <label class="control-label">Causale valutaria</label>
                    <select class="form-control"
                            data-bind="enable: CausaleValutariaEnable, options: $component.CausaliValutarie, optionsCaption: '', optionsText: 'V', optionsValue: 'K', value: CausaleValutaria"></select>
                </div>
                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                <div class="col-sm-3 col-xs-12" style="padding: 0">
                    <div class="col-sm-10" style="padding: 0">
                        <label class="control-label">Importo CVS</label>
                        <input type="text" class="form-control"
                               data-bind="enable: DatiCvsEnabled, numericTextSeparator: Importo" />
                    </div>
                    <div class="col-sm-1" style="padding: 0">
                        <label style="margin-top: 30px; font-weight:100">&nbsp;EUR</label>
                        <input type="text" class="form-control" disabled="disabled"
                               data-bind="value: Divisa, visible: false" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-right">
            <div class="col-xs-12">
                <input type="button" class="btn margin-top10"
                       value="Cancella"
                       data-bind="click: $component.CancelCvs" />
            </div>
        </div>
    </div>
    <div class="text-right" style="padding-right: 10px">
        <input type="button" class="btn"
               value="Aggiungi CVS"
               data-bind="singleClick: AddCvs, enable: AddCvsEnabled" />
    </div>
</script>

<script type="text/javascript">
    ko.components.register('cvs-dataentry', {
        template: { element: 'cvs-dataentry' },
        viewModel: function (params) {
            var self = this;

            self.Cvs = params.CvsObsArray;
            self.TipologieCvs = ko.observableArray(PROFILABLE_DISPOSIZIONI['TIPO_CAUSALE_VALUTARIA']);
            self.CausaliValutarie = ko.observableArray(PROFILABLE_DISPOSIZIONI['CAUSALE_VALUTARIA']);
            self.AddCvsEnabled = ko.computed(function () {
                return (!(self.Cvs() && self.Cvs().length == 3));
            });

            // Actions
            self.AddCvs = function () {
                self.Cvs.push(new App.Common.CvsBo(null));
            }
            self.CancelCvs = function (item) {
                self.Cvs.remove(item);
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



<script type="text/html" id="60d131c3624941b98e205667e7a7ef52_9">
    <div class="row background-darker">
        <div class="col-xs-11" data-bind="with: SelectedOrdinante" style="padding-left: 0">
            <div data-bind="visible: App.Common.IdentifierIsValid(Identifier)" style="margin-top: 10px">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="col-xs-3 no-padding">
                            <span>Intestato a</span>
                        </div>
                        <div class="col-xs-9 no-padding">
                            <strong data-bind="text: RagioneSociale"></strong>
                        </div>
                    </div>
                    <div class="col-xs-6" data-bind="visible: Conto() != null">
                        <div class="col-xs-3 no-padding">
                            <span>Rapporto</span>
                        </div>
                        <div class="col-xs-9 no-padding">
                            <strong data-bind="text: Conto"></strong>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="col-xs-3 no-padding">
                            <span>ABI - Banca</span>
                        </div>
                        <div class="col-xs-9 no-padding">
                            <strong data-bind="text: Abi"></strong>
                            -
                            <strong data-bind="text: $component.DescrizioneBanca"></strong>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-3 no-padding">
                            <span>CAB<!--ko if: Iban() != null--> - IBAN<!--/ko--></span>
                        </div>
                        <div class="col-xs-9 no-padding">
                            <strong data-bind="text: Cab"></strong>
                            <!--ko if: Iban() != null-->
                            <span>-</span>
                            <strong data-bind="text: Iban"></strong>
                            <!--/ko-->
                        </div>
                    </div>
                </div>
            </div>
            <div data-bind="visible: !App.Common.IdentifierIsValid(Identifier)">
                <div class="row">
                    <div class="col-xs-12" style="height: 80px; padding: 35px 20px">
                        <strong data-bind="text: $component.TestoSelettore"></strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-1 vertical-center" style="height: 80px">
            <a href="#" data-bind="click: RapportiDataTableVisibleToggle, css: ArrowToggle, visible: ArrowVisible"></a>
        </div>
    </div>
    <div class="row" data-bind="slideVisible: RapportiDataTableVisible">
        <div data-bind="with: PagedList">
            <div class="row" style="margin-top: 5px" data-bind="visible: $component.FiltroVisible">
                <div class="col-xs-6">
                    <div class="col-xs-2">
                        <label>Cerca</label>
                    </div>
                    <div class="col-xs-5">
                        <input type="text" class="form-control" data-bind="textInput: CercaText" />
                    </div>
                    <div class="col-xs-1">
                        <span class="icon-replace icon-search active">&nbsp;</span>
                    </div>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-4">
                    <div class="col-xs-2">
                        <label>Mostra</label>
                    </div>
                    <div class="col-xs-4">
                        <select class="form-control" data-bind="options: PageSizeDropDown, value: PageSize"></select>
                    </div>
                    <div class="col-xs-6">
                        <label>risultati per pagina</label>
                    </div>
                </div>
            </div>
            <div class="table-responsive tabSelezioneCC" style="margin-top: 10px;">
                <table class="dataTable table table-striped">
                    <thead>
                        <tr>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <th data-bind="css: ThCss('Rapporto.NumeroRapporto'), click: SortToggleObservable('Rapporto.NumeroRapporto')">
                                Rapporto
                            </th>
                            <!--/ko-->
                            <th data-bind="css: ThCss('Rapporto.CodiceAbi'), click: SortToggleObservable('Rapporto.CodiceAbi')" class="col-md-1">
                                ABI
                            </th>
                            <th data-bind="css: ThCss('Rapporto.CodiceCab'), click: SortToggleObservable('Rapporto.CodiceCab')" class="col-md-1">
                                CAB
                            </th>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <th data-bind="css: ThCss('Rapporto.CodiceIban'), click: SortToggleObservable('Rapporto.CodiceIban')">
                                IBAN
                            </th>
                            <!--/ko-->
                            <th data-bind="css: ThCss('Azienda.RagioneSociale'), click: SortToggleObservable('Azienda.RagioneSociale')">
                                Intestazione
                            </th>
                        </tr>
                    </thead>
                    <tbody data-bind="foreach: Page">
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto"></td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi"></td>
                            <td data-bind="text: Rapporto.CodiceCab"></td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban"></td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <paginatore params="PagedList: $data"></paginatore>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('selettore-rapporti', {
        template: { element: '60d131c3624941b98e205667e7a7ef52_9' },
        viewModel: function (params) {
            var self = this;

            // Private
            var _computeSelectedOrdinante = function (identifier) {
                if (App.Common.IdentifierIsValid(identifier)) {
                    self.RapportiDataTableVisible(false);
                    var piazzatura = new App.Common.PiazzaturaBo(ko.utils.arrayFirst(PIAZZATURA, function (p) {
                        return App.Common.IdentifiersAreEqual(p.Identifier, identifier);
                    }));

                    if (App.Common.IdentifierIsValid(piazzatura.Identifier)) {
                        App.Common.MapIdentifier(self.Ordinante.Identifier, piazzatura.Identifier);
                        self.Ordinante.RagioneSociale(piazzatura.Azienda.RagioneSociale());
                        self.Ordinante.Cuc(piazzatura.Azienda.CodiceCuc());
                        self.Ordinante.IdentificativoFiscale(self.Ordinante.IdentificativoFiscale() || null);
                        if (self.Options().ShowIban != false) {
                            self.Ordinante.Conto(piazzatura.Rapporto.NumeroRapporto());
                            self.Ordinante.Iban(piazzatura.Rapporto.CodiceIban());
                        }
                        self.Ordinante.Cab(piazzatura.Rapporto.CodiceCab());
                        self.Ordinante.Abi(piazzatura.Rapporto.CodiceAbi());
                        self.DescrizioneBanca(piazzatura.Rapporto.DescrizioneBanca());

                        ko.postbox.publish("selettore-rapporti.SELECTED", piazzatura);

                        return self.Ordinante;
                    } else if (self.Ordinante != null && self.Ordinante.Abi() !== null && self.Ordinante.Cab() != null && identifier.IdAzienda() != null) {
                        var piazzatura = new App.Common.PiazzaturaBo(ko.utils.arrayFirst(PIAZZATURA, function (p) {
                            return p.Rapporto.CodiceAbi == self.Ordinante.Abi() && p.Rapporto.CodiceCab == self.Ordinante.Cab() && p.Rapporto.IdAzienda == identifier.IdAzienda();
                        }));

                        if (App.Common.IdentifierIsValid(piazzatura.Identifier)) {
                            self.Ordinante.RagioneSociale(piazzatura.Azienda.RagioneSociale());
                            self.Ordinante.Cuc(piazzatura.Azienda.CodiceCuc());
                            self.Ordinante.Cab(piazzatura.Rapporto.CodiceCab());
                            self.Ordinante.Abi(piazzatura.Rapporto.CodiceAbi());
                            self.DescrizioneBanca(piazzatura.Rapporto.DescrizioneBanca());

                            return self.Ordinante;
                        }
                    } else {
                        return self.Ordinante;
                    }
                } else {
                    return self.Ordinante;
                }
            };
            var _mapIdentifierAndSetOrdinante = function (identifier) {
                App.Common.MapIdentifier(self.Ordinante.Identifier, identifier);
                self.SelectedOrdinante(_computeSelectedOrdinante(self.Ordinante.Identifier));
            }

            // Model
            self.Ordinante = ko.unwrap(params.Ordinante);
            self.RapportiDataTableVisible = ko.observable(false);
            self.SelectedOrdinante = ko.observable(new App.Common.OrdinanteBo());
            self.DescrizioneBanca = ko.observable(null);
            self.TestoSelettore = params.TestoSelettore || 'Seleziona il rapporto di addebito della disposizione';
            self.IsNotInDistina = params.IsNotInDistinta || ko.observable(false);
            self.Options = params.Options || ko.observable({ IdAzienda: null, CodiceAbi: null, ShowIban: true });

            self.ArrowToggle = ko.pureComputed(function () {
                return self.RapportiDataTableVisible() ? 'btnSelezioneCC icon-replace icon-arrowup active' : 'btnSelezioneCC icon-replace icon-arrowdown active';
            });

            self.PagedList = new App.Core.PagedObservableArray({
                allData: [new App.Common.PiazzaturaBo(null)],
                pageSize: 8,
                pageSizeDropDown: [8, 20, 50, 100],
                currentSort: 'Rapporto.Descrizione',
                currentSortIsAsc: true,
            });

            self.ArrowVisible = ko.pureComputed(function () {
                return (params.ArrowVisible ? params.ArrowVisible() : true) && self.PagedList.AllData().length > 1;
            });

            self.FiltroVisible = ko.pureComputed(function () {
                return self.PagedList.AllData().length > 8 || (self.Options().FilterAlwaysVisible || false);
            });

            // Actions
            self.RapportiDataTableVisibleToggle = function () {
                self.RapportiDataTableVisible(!self.RapportiDataTableVisible());
            };
            self.UpdateSelectedOrdinante = function (item) {
                self.RapportiDataTableVisible(false);
                _mapIdentifierAndSetOrdinante(item.Identifier);
            };

            // Initialize
            self.Init = function () {
                var pagedListData = [];
                var unique = {};

                $.map(PIAZZATURA, function (p) {
                    var current = new App.Common.PiazzaturaBo(p);
                    if (current.Rapporto.Stato() == App.Common.StatoRapporto.ATTIVO) {
                        if (self.Options().IdAzienda != null && self.Options().CodiceAbi == null) {
                            if (current.Azienda.Id() == self.Options().IdAzienda) {
                                pagedListData.push(current);
                            }
                        } else if (self.Options().IdAzienda != null && self.Options().CodiceAbi != null) {
                            var key = current.Azienda.Id() + current.Rapporto.CodiceAbi() + current.Rapporto.CodiceCab();
                            if (typeof (unique[key]) == "undefined") {
                                if (current.Azienda.Id() == self.Options().IdAzienda && current.Rapporto.CodiceAbi() == self.Options().CodiceAbi) {
                                    current.Rapporto.CodiceIban(null);
                                    pagedListData.push(current);
                                    unique[key] = 0;
                                }
                            }
                        } else {
                            pagedListData.push(current);
                        }
                    }
                });

                if (pagedListData.length == 0) {
                    self.TestoSelettore = 'Non ci sono rapporti';
                } else if (self.Ordinante != null && App.Common.IdentifierIsValid(self.Ordinante.Identifier) && self.Ordinante.Identifier.IdRapporto() != null) {
                    _mapIdentifierAndSetOrdinante(self.Ordinante.Identifier);
                } else if (self.Ordinante != null && App.Common.IdentifierIsValid(self.Ordinante.Identifier) && self.Ordinante.Identifier.IdRapporto() == null && !self.IsNotInDistina()) {
                    _mapIdentifierAndSetOrdinante(self.Ordinante.Identifier);
                } else if (pagedListData.length == 1) {
                    var piazzatura = pagedListData[0];
                    _mapIdentifierAndSetOrdinante(piazzatura.Identifier);
                } else if (self.Ordinante != null && App.Common.IdentifierIsValid(self.Ordinante.Identifier) && self.Ordinante.Identifier.IdRapporto() == null && self.IsNotInDistina()) {
                    App.Common.MapIdentifier(self.Ordinante.Identifier, new App.Common.IdentifierBo(null));
                }

                self.PagedList.AllData(pagedListData);
                if (self.Options().CercaText) {
                    self.PagedList.CercaText(self.Options().CercaText);
                }
            };
            self.Init();
        }
    });
</script>



<script type="text/html" id="stipendio-dataentry">
    <!-- SUCCESS MESSAGES -->
    <div data-bind="visible: SuccessMessagesVisible">
        <feedback-messages params="Component: SuccessComponent, Buttons: SuccessButtons, CssClass: 'alert', Message: SuccessMessage, TitleCssClass: 'disposizioneBonifico', PageTitle: $component.FeedbackTitle"></feedback-messages>
    </div>
    <div data-bind="visible: !SuccessMessagesVisible()">
        <div class="riquadro">
            <div>
                <div style="float:left;">
                    <div class="flag disposizioneBonifico">&nbsp;</div>
                    <h1>Stipendi: inserimento</h1>
                </div>
                <div style="float:left;padding-top:13px;">
                    <a class="icon-replace icon-help active link" onclick="javascript: showPopupHelp('/anchise2.web/Widget/Help/GetHelper', 'Chiudi', 'Stipendi', null);">Help On Line</a>
                </div>
            </div>
            <div class="clearall"></div>
            <div data-bind="with: Bonifico">
                <!-- VALIDATION -->
                <validation-messages params="Validation: $component.Validation"></validation-messages>
                <!-- SELETTORE RAPPORTI-->
                <div class="section">
                    <div class="row">
                        <h3 class="titleSection">
                            Rapporto selezionato
                        </h3>
                    </div>
                    <div data-bind="disableChildren: App.Common.IdentifierIsValid(IdentifierDistinta)">
                        <selettore-rapporti params="Ordinante: Ordinante, ArrowVisible: $component.DispoIsNotInDistinta"></selettore-rapporti>
                    </div>
                </div>
                <!-- DEBITORE EFFETTIVO -->
                <div class="section">
                    <div class="row link" data-bind="click: $component.DebitoreCollapse">
                        <h3 class="titleSection">
                            Debitore Effettivo
                        </h3>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.DebitoreCollapseCss" />
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.DebitoreBodyVisible">
                        <div class="row" style="margin-top: 10px">
                            <div class="col-xs-12">
                                <p>Sezione da compilare soltanto se il debitore effettivo è diverso dall'ordinante</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Ragione Sociale</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Debitore.Denominazione" />
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                                    <label>&nbsp;</label>
                                    <span style="display: block" class="icon-replace icon-search active link" data-bind="singleClick: $component.DebitoreEffettivoAnagraficaSearch">&nbsp;</span>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Codice</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Debitore.Codice" />
                                </div>
                            </div>
                        </div>

                        <div data-bind="component: { name: 'anagrafica-search', params: $component.DebitoreEffettivoAnagraficaModel }"></div>

                        <indirizzo-dataentry params="Indirizzo: Debitore.Indirizzo"></indirizzo-dataentry>
                    </div>
                </div>
                <!-- BENEFICIARIO -->
                <div class="section">
                    <div class="row">
                        <h3 class="titleSection">Dati Dipendente</h3>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Tipo Anagrafica</label>
                                    <select class="form-control" data-bind="options: $component.TipologieAnagrafica, optionsText: 'V', optionsValue: 'K', value: $component.BeneficiarioAnagraficaModel.TipologiaAnagrafica"></select>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Cognome Nome</label>
                                    <input type="text" class="form-control" data-bind="value: Beneficiario.Denominazione" />
                                </div>
                                <div class="col-sm-1 col-xs-12 no-padding">
                                    <label class="control-label"></label>
                                    <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.BeneficiarioAnagraficaSearch">&nbsp;</span>
                                </div>
                                <div class="col-sm-3 col-xs-12 no-padding">
                                    <label class="control-label">Codice</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Beneficiario.Codice" />
                                </div>
                            </div>
                        </div>

                        <div data-bind="component: { name: 'anagrafica-search', params: $component.BeneficiarioAnagraficaModel }"></div>

                        <indirizzo-dataentry params="Indirizzo: Beneficiario.Indirizzo, Iban: Beneficiario.Iban"></indirizzo-dataentry>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">IBAN</label>
                                    <input type="text" class="form-control" data-bind="uppercaseText: Beneficiario.Iban" />
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">BIC</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Beneficiario.Bic" />
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label"></label>
                                    <div class="form-field link-icon">
                                        <span class="link-icon icon-creazioneUtenti link" data-bind="singleClick: $component.ToggleCheckAggiornaAnagrafica">
                                        </span>
                                        <input type="checkbox" data-bind="checked: $component.AggiornaAnagrafica" />
                                        <label class="control-label">Aggiorna Anagrafica</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- AGGIUNTIVI BENEFICIARIO -->
                <div class="section">
                    <div class="row link" data-bind="click: $component.BeneficiarioCollapse">
                        <h3 class="titleSection">Dati Aggiuntivi Dipendente</h3>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.BeneficiarioCollapseCss" />
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.BeneficiarioBodyVisible">
                        <datiaggiuntivi-dataentry params="DatiAggiuntivi: Beneficiario.DatiAggiuntivi"></datiaggiuntivi-dataentry>
                    </div>
                </div>
                <!-- CREDITORE -->
                <div class="section">
                    <div class="row link" data-bind="click: $component.CreditoreCollapse">
                        <h3 class="titleSection">Creditore Effettivo</h3>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.CreditoreCollapseCss" />
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.CreditoreBodyVisible">
                        <div class="row" style="margin-top: 10px">
                            <div class="col-xs-12">
                                <p>Sezione da compilare soltanto se il creditore effettivo è diverso dal beneficiario</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Tipo Anagrafica</label>
                                    <select class="form-control" data-bind="options: $component.TipologieAnagrafica, optionsText: 'V', optionsValue: 'K', value: $component.CreditoreEffettivoAnagraficaModel.TipologiaAnagrafica"></select>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12" >
                                    <label class="control-label">Cognome Nome</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Creditore.Denominazione" />
                                </div>
                                <div class="col-sm-1 col-xs-12 no-padding">
                                    <label class="control-label">&nbsp;</label>
                                    <span style="display: block" class="icon-replace icon-search active link" data-bind="singleClick: $component.CreditoreEffettivoAnagraficaSearch">&nbsp;</span>
                                </div>
                                <div class="col-sm-3 col-xs-12 no-padding">
                                    <label class="control-label">Codice</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Creditore.Codice" />
                                </div>
                            </div>

                        </div>

                        <div data-bind="component: { name: 'anagrafica-search', params: $component.CreditoreEffettivoAnagraficaModel }"></div>

                        <indirizzo-dataentry params="Indirizzo: Creditore.Indirizzo"></indirizzo-dataentry>

                        <datiaggiuntivi-dataentry params="DatiAggiuntivi: Creditore.DatiAggiuntivi"></datiaggiuntivi-dataentry>
                    </div>
                </div>
                <!-- DATI BONIFICO -->
                <div class="section">
                    <div class="row">
                        <h3 class="titleSection">Dati Stipendi SEPA</h3>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Importo</label>
                                    <input type="text" class="form-control" data-bind="numericTextSeparator: Importo" />
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0">
                                    <label style="margin-top: 35px; font-weight:100">&nbsp;EUR</label>
                                    
                                    <input type="text" class="form-control" disabled="disabled" data-bind="value: Divisa, visible: false" />
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Codice univoco</label>
                                    <input type="text" class="form-control" data-bind="value: CodiceUnivoco" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding-right: 0; padding-left: 20px">
                                    <label class="control-label" style="margin-left: -20px">Causale codificata ISO</label>
                                    <div class="radio" style="font-weight: normal; margin-top: 0">
                                        <input type="radio" name="causale" value="CausaleIso" data-bind="checked: $component.CurrentCausale" />
                                        <select class="form-control"
                                                data-bind="enable: $component.CausaleIsoActive, options: $component.TipologieCausaleIso, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: CausaleIso"></select>
                                    </div>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                                    <label class="control-label" style="margin-left: -20px">Causale codificata libera</label>
                                    <div class="radio" style="font-weight: normal; margin-top: 0">
                                        <input type="radio" name="causale" value="CausaleLibera" data-bind="checked: $component.CurrentCausale" />
                                        <input type="text" class="form-control" data-bind="enable: $component.CausaleLiberaActive, value: CausaleLibera" />
                                    </div>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Descrizione causale</label>
                                    <textarea placeholder="opzionale" class="form-control no-placeholder-italic" data-bind="value: DescrizioneRiconcilazione"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FINALITA' -->
                <div class="section">
                    <div class="row link" data-bind="click: $component.FinalitaCollapse">
                        <h3 class="titleSection">Finalità Pagamento</h3>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.FinalitaCollapseCss " />
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.FinalitaBodyVisible">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding-right: 0; padding-left: 20px">
                                    <label class="control-label" style="margin-left: -20px">Finalità del pagamento codificata</label>
                                    <div class="radio" style="font-weight: normal;  margin-top: 0">
                                        <input type="radio" name="finalita" value="FinalitaCodificata" data-bind="checked: $component.CurrentFinalita" />
                                        <select class="form-control"
                                                data-bind="enable: $component.FinalitaCodificataActive, options: $component.TipologieFinalitaPagamento, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: FinalitaPagamento.Codice"></select>
                                    </div>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                                    <label class="control-label" style="margin-left: -20px">Finalità del pagamento libera</label>
                                    <div class="radio" style="font-weight: normal;  margin-top: 0">
                                        <input type="radio" name="finalita" value="FinalitaLibera" data-bind="checked: $component.CurrentFinalita" />
                                        <input type="text" placeholder="opzionale" class="form-control no-placeholder-italic" data-bind="enable: $component.FinalitaLiberaActive, value: FinalitaPagamento.DescrizioneLibera" />
                                    </div>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ESITO AL BENEFICIARIO -->
                <div class="section">
                    <div class="row">
                        <h3 class="titleSection">Esito al beneficiario</h3>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-sm-3 col-xs-12" style="padding-right: 0; padding-left: 20px">
                                <label class="checkbox" style="margin-top: 30px">
                                    <input type="checkbox" data-bind="enable: $component.EsitoAlBeneficiarioModalitaEnable, checked: $component.InviaEsitoAlBeneficiario" />
                                    <label style="font-weight: normal">Esito al beneficiario</label>
                                </label>
                            </div>
                            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                            <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                                <label class="control-label">Destinatario esito</label>
                                <input type="text" class="form-control" data-bind="enable: $component.EsitoAlBeneficiarioEnable, value: Esito.NomeSoggetto" />
                            </div>
                            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                            <div class="col-sm-3 col-xs-12" style="padding: 0">
                                <div class="col-sm-5" style="padding-left: 0">
                                    <label class="control-label">Modalità</label>
                                    <select class="form-control"
                                            data-bind="enable: $component.EsitoAlBeneficiarioEnable, options: $component.ModalitaEsito, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: Esito.ModalitaEsito"></select>
                                </div>
                                <div class="col-sm-7" style="padding-right: 0">
                                    <label class="control-label">CUC/E-mail</label>
                                    <input type="text" class="form-control" data-bind="enable: $component.EsitoAlBeneficiarioEnable, value: Esito.Cuc" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CVS -->
                <div class="section">
                    <div class="row link" data-bind="click: $component.CvsCollapse">
                        <h3 class="titleSection">
                            CVS
                        </h3>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.CvsCollapseCss " />
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.CvsBodyVisible">
                        <cvs-dataentry params="CvsObsArray: Cvs"></cvs-dataentry>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUBMIT ACTIONS -->
        <div class="text-right">
            <input type="button" class="btn btn-primary" value="Inserisci" data-bind="visible: CreateIsVisible, singleClick: Create" />
            <div data-bind="visible: !CreateIsVisible()">
                <input type="button" class="btn btn-primary" value="Annulla" data-bind="singleClick: Cancel" />
                <input type="button" class="btn btn-primary" value="Conferma" data-bind="singleClick: Update" />
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('stipendio-dataentry', {
        template: { element: 'stipendio-dataentry' },
        viewModel: function (params) {
            var self = this;
            var emailBeneficiario = "";
            var _urlToSave = "";

            // Model
            self.Bonifico = params.Bonifico;
            self.SuccessMessagesVisible = params.SuccessMessagesVisible || ko.observable(false);

            // extend params to show this value for which use this component
            params.CalledUrl = ko.observable();

            self.CryptDistintaSelected = self.Bonifico().IdentifierDistinta;
            self.DispoIsNotInDistinta = ko.observable(true);
            self.FeedbackTitle = ko.observable('Bonifici: Stipendi inserimento');
            self.SuccessMessage = ko.observable('Disposizione inserita correttamente.\nPer poter inviare la disposizione è necessario creare la distinta, aggregando le disposizioni');
            self.Validation = ko.observableArray([]);
            self.DebitoreBodyVisible = ko.observable(false);
            self.DebitoreCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.DebitoreBodyVisible));
            self.BeneficiarioBodyVisible = ko.observable(false);
            self.BeneficiarioCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.BeneficiarioBodyVisible));
            self.CreditoreBodyVisible = ko.observable(false);
            self.CreditoreCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.CreditoreBodyVisible));
            self.FinalitaBodyVisible = ko.observable(false);
            self.FinalitaCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.FinalitaBodyVisible));
            self.CvsBodyVisible = ko.observable(false);
            self.CvsCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.CvsBodyVisible));
            self.AggiornaAnagrafica = ko.observable(false);
            self.InviaEsitoAlBeneficiario = ko.observable(false);
            self.CausaleIsoActive = ko.observable(true);
            self.CausaleLiberaActive = ko.observable(false);
            self.CurrentCausale = ko.observable("CausaleIso");
            self.FinalitaCodificataActive = ko.observable(true);
            self.FinalitaLiberaActive = ko.observable(false);
            self.CurrentFinalita = ko.observable('FinalitaCodificata');
            self.TipologieCausaleIso = ko.observableArray(PROFILABLE_DISPOSIZIONI['CAUSALE_ISO']);
            self.TipologieFinalitaPagamento = ko.observableArray(PROFILABLE_DISPOSIZIONI['FINALITA_PAG_ISO']);
            self.ModalitaEsito = ko.observableArray(PROFILABLE_DISPOSIZIONI['MODALITA_ESITO']);
            self.SuccessButtons = ko.observableArray([]);
            self.BancaBeneficiario = ko.observable(null);
            self.FilialeBeneficiario = ko.observable(null);
            self.TipologieClienti = ko.observableArray([{ K: 'CL', V: 'CLIENTI' }]);
            self.TipologieAnagrafica = ko.observableArray([{ K: 'DI', V: 'DIPENDENTI' }, { K: 'FO', V: 'FORNITORI' }]);
            self.CreateIsVisible = ko.pureComputed(function () {
                return App.Common.IdentifierIsNotValid(self.Bonifico().Identifier) || self.Bonifico().Identifier.Id() == null;
            }, self);
            self.EsitoAlBeneficiarioEnable = ko.computed(function () {
                var nomeSoggetto = self.Bonifico().Esito.NomeSoggetto() || null;

                if (nomeSoggetto !== null) {
                    self.InviaEsitoAlBeneficiario(true);
                    return true;
                } else {
                    return self.InviaEsitoAlBeneficiario();
                }
            }, self);

            self.EsitoAlBeneficiarioModalitaEnable = ko.observable(true);
            self.DebitoreEffettivoAnagraficaModel = {
                Label: 'Cliente',
                IdentifierPiazzatura: ko.observable(self.Bonifico().Ordinante.Identifier),
                Soggetto: self.Bonifico().Debitore,
                TipologiaAnagrafica: ko.observable('CL'),
                Visible: ko.observable(false)
            };
            self.BeneficiarioAnagraficaModel = {
                Label: ko.observable('Dipendente'),
                IdentifierPiazzatura: ko.observable(self.Bonifico().Ordinante.Identifier),
                Soggetto: self.Bonifico().Beneficiario,
                TipologiaAnagrafica: ko.observable('DI'),
                Visible: ko.observable(false),
                Callback: ko.observable(function (anagrafica) {
                    emailBeneficiario = anagrafica.Email();
                    if (self.Bonifico().Esito.ModalitaEsito() === 'EMAL')
                        self.Bonifico().Esito.Cuc(anagrafica.Email());
                })
            };
            self.CreditoreEffettivoAnagraficaModel = {
                Label: ko.observable('Dipendente'),
                IdentifierPiazzatura: ko.observable(self.Bonifico().Ordinante.Identifier),
                Soggetto: self.Bonifico().Creditore,
                TipologiaAnagrafica: ko.observable('DI'),
                Visible: ko.observable(false)
            };
            self.SuccessComponent = new App.Core.UiComponent({
                Name: 'disposizione-sct-summary',
                Params: {
                    DisposizioneSct: self.Bonifico
                }
            });



            var initPopolaCampoCucEmail = function () {
                var esito = self.Bonifico().Esito;
                if (esito.ModalitaEsito() === 'EMAL') {
                    esito.Cuc(emailBeneficiario);
                } else {
                    esito.Cuc(null);
                }
            };

            var tipologiaAnagraficaSubscribe = self.BeneficiarioAnagraficaModel.TipologiaAnagrafica.subscribe(function () {
                self.Bonifico().Beneficiario.TipologiaAnagrafica(self.BeneficiarioAnagraficaModel.TipologiaAnagrafica());
            });

            var validationSubscribe = self.Validation.subscribe(function () {
                self.VisualizzaDatiAggiuntivi();
            });

            self.VisualizzaDatiAggiuntivi = function () {
                if (!self.BeneficiarioBodyVisible()
                    && self.Bonifico().Beneficiario.DatiAggiuntivi.TipoSoggetto() != null && self.Bonifico().Beneficiario.DatiAggiuntivi.TipoSoggetto() != ""
                    && (self.Bonifico().Beneficiario.DatiAggiuntivi.CodiceSoggetto() == null || self.Bonifico().Beneficiario.DatiAggiuntivi.CodiceSoggetto() == "")) {
                    self.BeneficiarioBodyVisible(true);
                }
            };

            // Actions
            self.ToggleCheckAggiornaAnagrafica = function () {
                self.AggiornaAnagrafica(!self.AggiornaAnagrafica());
            };

            var _currentCausaleCallback = function () {
                if (self.CurrentCausale() == 'CausaleIso') {
                    self.Bonifico().CausaleLibera(null);
                    self.CausaleIsoActive(true);
                    self.CausaleLiberaActive(false);
                    self.Bonifico().CausaleIso('SALA');
                } else {
                    self.Bonifico().CausaleIso(null);
                    self.CausaleIsoActive(false);
                    self.CausaleLiberaActive(true);
                }
            };
            var _currentFinalitaCallback = function () {
                if (self.CurrentFinalita() == 'FinalitaCodificata') {
                    self.Bonifico().FinalitaPagamento.DescrizioneLibera(null);
                    self.FinalitaCodificataActive(true);
                    self.FinalitaLiberaActive(false);
                } else {
                    self.Bonifico().FinalitaPagamento.Codice(null);
                    self.FinalitaCodificataActive(false);
                    self.FinalitaLiberaActive(true);
                }
            };
            var _esitoAlBeneficiarioCallback = function () {
                if (!self.InviaEsitoAlBeneficiario()) {
                    var esito = self.Bonifico().Esito;
                    esito.NomeSoggetto(null);
                    esito.ModalitaEsito(null);
                    esito.Cuc(null);
                } else {
                    var esito = self.Bonifico().Esito;
                    if (!esito.NomeSoggetto()) {
                        esito.NomeSoggetto(self.Bonifico().Beneficiario.Denominazione());
                    }
                }
            };
            var _createUpdateAjax = function (action) {

                params.CalledUrl(_urlToSave);

                Http.PostWithTxMon(_urlToSave, ko.toJSON(self.Bonifico))
                    .success(function (data) {
                        var result = new App.Core.StandardJsonResult(data);
                        if (data.HasError) {
                            ko.mapping.fromJS(result.Messages, null, self.Validation);
                            $("body,html").animate({ scrollTop: 0 }, '500');
                        } else {
                            ko.postbox.publish('disposizione-sct-summary.INITIALIZE');

                            _cleanSpalla();
                            $.ajax('/anchise2.web/Widget/LinkRapidi')
                                .success(function (html) {
                                    $(spallaName).append(html);

                                    $.ajax('/anchise2.web/Widget/InfoUtili/StipendioSctDispoCreata')
                                        .success(function (html) {
                                            $(spallaName).append(html);
                                        });
                                });
                            self.SuccessMessagesVisible(true);
                        }
                    });
            }
            var _anagraficaSearchVisible = function (anagraficaModel) {
                return function () {
                    if (App.Common.IdentifierIsNotValid(self.Bonifico().Ordinante.Identifier)) {
                        self.Validation.removeAll();
                        self.Validation.push(new App.Core.ValidationMessage({ ErrorMessage: 'Per poter accedere alla funzionalità di ricerca è necessario selezionare prima un rapporto.' }));
                    } else {
                        anagraficaModel.Visible(true);
                    }
                }
            }

            var bonificoSubscribe = self.Bonifico.subscribe(function () {
                // update angrafica models
                self.DebitoreEffettivoAnagraficaModel.IdentifierPiazzatura(self.Bonifico().Ordinante.Identifier);
                self.DebitoreEffettivoAnagraficaModel.Soggetto = self.Bonifico().Debitore;

                self.BeneficiarioAnagraficaModel.IdentifierPiazzatura(self.Bonifico().Ordinante.Identifier);
                self.BeneficiarioAnagraficaModel.Soggetto = self.Bonifico().Beneficiario;

                self.CreditoreEffettivoAnagraficaModel.IdentifierPiazzatura(self.Bonifico().Ordinante.Identifier);
                self.CreditoreEffettivoAnagraficaModel.Soggetto = self.Bonifico().Creditore;

                self.Init();
            });

            var ibanSubscribe = self.Bonifico().Ordinante.Iban.subscribe(function () {
                self.Validation.removeAll();
            });

            var tipologiaAnagraficaSubscribe = self.BeneficiarioAnagraficaModel.TipologiaAnagrafica.subscribe(function () {
                self.Bonifico().Beneficiario.TipologiaAnagrafica(self.BeneficiarioAnagraficaModel.TipologiaAnagrafica());
                self.BeneficiarioAnagraficaModel.Label(self.BeneficiarioAnagraficaModel.TipologiaAnagrafica() === 'DI' ? 'Dipendente' : 'Fornitore');
            });

            var creditoreEffettivoTipologiaAnagraficaSubscribe = self.CreditoreEffettivoAnagraficaModel.TipologiaAnagrafica.subscribe(function () {
                self.CreditoreEffettivoAnagraficaModel.Label(self.CreditoreEffettivoAnagraficaModel.TipologiaAnagrafica() === 'DI' ? 'Dipendente' : 'Fornitore');
            });

            var currentCausaleSubscribe = self.CurrentCausale.subscribe(_currentCausaleCallback);
            var currentFinalitaSubscribe = self.CurrentFinalita.subscribe(_currentFinalitaCallback);
            var inviaEsitoAlBeneficiarioSubscribe = self.InviaEsitoAlBeneficiario.subscribe(_esitoAlBeneficiarioCallback);
            self.DebitoreCollapse = function () {
                self.DebitoreBodyVisible(!self.DebitoreBodyVisible());
            };
            self.BeneficiarioCollapse = function () {
                self.BeneficiarioBodyVisible(!self.BeneficiarioBodyVisible());
            };
            self.CreditoreCollapse = function () {
                self.CreditoreBodyVisible(!self.CreditoreBodyVisible());
            };
            self.FinalitaCollapse = function () {
                self.FinalitaBodyVisible(!self.FinalitaBodyVisible());
            };
            self.CvsCollapse = function () {
                self.CvsBodyVisible(!self.CvsBodyVisible());
            };
            self.DebitoreEffettivoAnagraficaSearch = _anagraficaSearchVisible(self.DebitoreEffettivoAnagraficaModel);
            self.BeneficiarioAnagraficaSearch = _anagraficaSearchVisible(self.BeneficiarioAnagraficaModel);
            self.CreditoreEffettivoAnagraficaSearch = _anagraficaSearchVisible(self.CreditoreEffettivoAnagraficaModel);

            var ordinanteSelectedSubscribe = ko.postbox.subscribe("selettore-rapporti.SELECTED", function (piazzatura) {
                var codiceUnivoco = self.Bonifico().CodiceUnivoco();
                if (App.Core.IsNullOrUndefined(codiceUnivoco) || App.Core.IsNullOrEmpty(codiceUnivoco)) {
                    var cuc = self.Bonifico().Ordinante.Cuc() || 'CUC',
                        abi = self.Bonifico().Ordinante.Abi() || 'ABI';

                    codiceUnivoco = cuc + abi + App.Core.FormatDateTime(Date.now());

                    self.Bonifico().CodiceUnivoco(codiceUnivoco);
                }
                self.FilterModalitaEsito(piazzatura.Rapporto.CodiceAbi(), self.Bonifico().Ordinante.Cuc());
            }, null, true);

            self.FilterModalitaEsito = function (abi, cuc) {
                var abi_gruppo = ko.observableArray(ABI_GRUPPO);
                var cuc_non_validi = ko.observableArray(CUC_NON_VALIDI);

                var array_modalita = PROFILABLE_DISPOSIZIONI['MODALITA_ESITO'];

                //vedo se l'abi ordinante è del gruppo banco popolare
                var is_abi_gruppo = ko.utils.arrayFirst(abi_gruppo(), function (item) {
                    return abi === item.ABI;
                });
                //se l'abi non è del gruppo tolgo la mail dalle modalità di invio esito
                if (!is_abi_gruppo) {
                    array_modalita = ko.utils.arrayFilter(array_modalita, function (p) {
                        return p.K != 'EMAL';
                    });
                }

                //vedo se il cuc ordinante è non valido
                var is_cuc_non_valido = ko.utils.arrayFirst(cuc_non_validi(), function (item) {
                    return cuc === item.CUC;
                });
                //se il cuc dell'ordinante è VANTAGGT tolgo il CUC dalle modalità di invio esito
                if (is_cuc_non_valido) {
                    array_modalita = ko.utils.arrayFilter(array_modalita, function (p) {
                        return p.K != 'CBI';
                    });
                }

                //popolo il dropdown con il nuovo array
                self.ModalitaEsito(array_modalita);
                //se il nuovo array non ha elementi dececco e disabilito la checkbox invia esito
                if (array_modalita.length == 0 && self.InviaEsitoAlBeneficiario()) {
                    self.InviaEsitoAlBeneficiario(false);
                }
                self.EsitoAlBeneficiarioModalitaEnable(array_modalita.length > 0);
            }
            var _CheckExtraSEPA = function () {
                params.CalledUrl('/anchise2.web/StipendioSct/DataEntry/CheckExtraSEPA');
                //Verifica bonifico area Extra SEPA
                Http.Post('/anchise2.web/StipendioSct/DataEntry/CheckExtraSEPA', ko.toJSON({ iban: self.Bonifico().Beneficiario.Iban }))
                    .success(function (data) {
                        var result = new App.Core.StandardJsonResult(data);
                        if (data.HasError) {
                            //ko.mapping.fromJS(result.Messages[0].ErrorMessage, null, self.checkExtraSEPA);
                            uiHelper.Confirm({
                                text: ko.toJSON(result.Messages[0].ErrorMessage),
                                okCallback: _createUpdateAjax
                            });
                        }
                        else {
                            _createUpdateAjax();
                        }
                    });
            }
            self.Create = function () {
                _urlToSave = self.AggiornaAnagrafica() ?
                    '/anchise2.web/StipendioSct/DataEntry/CreateAndUpdateAnagrafica' :
                    '/anchise2.web/StipendioSct/DataEntry/Create';
                _CheckExtraSEPA();
            };
            self.Update = function () {
                _urlToSave = self.AggiornaAnagrafica() ?
                    '/anchise2.web/StipendioSct/DataEntry/UpdateAndUpdateAnagrafica' :
                    '/anchise2.web/StipendioSct/DataEntry/Update';

                if (!self.DispoIsNotInDistinta()) {
                    _urlToSave += "InDistinta";
                }
                _CheckExtraSEPA();
            };
            self.Cancel = function () {
                window.history.back();
            };

            // Initialization
            self.Init = function () {
                // Default value
                emailBeneficiario = "";
                self.Validation([]);
                self.SuccessMessagesVisible(false);
                self.DebitoreBodyVisible(self.Bonifico().Debitore != null && self.Bonifico().Debitore.Identifier != null && self.Bonifico().Debitore.Identifier.Id() != null);
                self.BeneficiarioBodyVisible(self.Bonifico().Beneficiario.DatiAggiuntivi.TipoCodice() != null);
                self.CreditoreBodyVisible(self.Bonifico().Creditore != null && self.Bonifico().Creditore.Denominazione() != null);
                self.FinalitaBodyVisible(self.Bonifico().FinalitaPagamento.Codice() != null || self.Bonifico().FinalitaPagamento.DescrizioneLibera() != null);
                self.AggiornaAnagrafica(false);
                self.CausaleIsoActive((App.Common.IdentifierIsNotValid(self.Bonifico().Identifier) || self.Bonifico().CausaleLibera() == null));
                self.CausaleLiberaActive(self.Bonifico().CausaleLibera() != null);
                self.CurrentCausale((App.Common.IdentifierIsNotValid(self.Bonifico().Identifier) || self.Bonifico().CausaleLibera() == null) ? 'CausaleIso' : 'CausaleLibera');
                self.FinalitaCodificataActive((App.Common.IdentifierIsNotValid(self.Bonifico().Identifier) || self.Bonifico().FinalitaPagamento.DescrizioneLibera() == null));
                self.FinalitaLiberaActive(self.Bonifico().FinalitaPagamento.DescrizioneLibera() != null);
                self.CurrentFinalita((App.Common.IdentifierIsNotValid(self.Bonifico().Identifier) || self.Bonifico().FinalitaPagamento.DescrizioneLibera() == null) ? 'FinalitaCodificata' : 'FinalitaLibera');
                self.CvsBodyVisible(self.Bonifico().Cvs() != null && self.Bonifico().Cvs().length > 0);
                self.Bonifico().Beneficiario.TipologiaAnagrafica(App.Core.IsNullOrUndefined(self.Bonifico().Beneficiario.TipologiaAnagrafica()) ?
                                                                            'DI' :
                                                                            self.Bonifico().Beneficiario.TipologiaAnagrafica());

                if (self.Bonifico().Identifier.Id() == null) {
                    // **************** DISPOSIZIONE NUOVA ****************
                    if (self.CurrentCausale() == 'CausaleIso') {
                        self.Bonifico().CausaleIso('SALA');
                    }

                    self.SuccessButtons([
                        new App.Core.UiButton({
                            Label: 'Nuovo Stipendio',
                            Callback: function () {
                                location.href = '/anchise2.web/StipendioSct/DataEntry';
                            }
                        }),
                        new App.Core.UiButton({
                            Label: 'Nuovo Stipendio con i dati precedenti',
                            Callback: function () {
                                self.Validation([]);
                                var bonifico = new App.Sct.DisposizioneSctBo({
                                    Ordinante: { Identifier: self.Bonifico().Ordinante.Identifier },
                                    Identifier: {
                                        Crypt: self.Bonifico().Identifier.Crypt(),
                                        Hash: self.Bonifico().Identifier.Hash(),
                                        ClasseServizio: self.Bonifico().Identifier.ClasseServizio()
                                    },
                                    Divisa: self.Bonifico().Divisa
                                });
                                self.InviaEsitoAlBeneficiario(false);
                                self.Bonifico(bonifico);
                                self.SuccessMessagesVisible(false);
                            }
                        }),
                        new App.Core.UiButton({
                            Label: 'crea Distinta',
                            Callback: function () {
                                var filtro = {
                                    cryptOrdinante: self.Bonifico().Ordinante.Identifier.Crypt(),
                                    abi: self.Bonifico().Ordinante.Abi()
                                };

                                location.href = "/anchise2.web/StipendioSct/SearchDisposizioni/IndexFromDataEntry?" + $.param(filtro);
                            }
                        })
                    ]);
                } else {
                    if (self.CryptDistintaSelected != null && self.CryptDistintaSelected.Crypt() != null) {
                        // **************** DISPOSIZIONE IN DISTINTA ****************
                        self.DispoIsNotInDistinta(false);
                        self.SuccessMessage('Disposizione modificata correttamente.\nPer poter procedere è necessario rigenerare la distinta');
                        self.FeedbackTitle('Stipendi: conferma modifica');
                        self.SuccessButtons([
                            new App.Core.UiButton({
                                Label: 'crea Distinta',
                                Callback: function () {
                                    window.history.back();
                                }
                            })
                        ]);
                    } else {
                        // **************** DISPOSIZIONE NON IN DISTINTA ****************
                        self.SuccessMessage('Disposizione modificata correttamente.\nPer poter inviare la disposizione è necessario creare la distinta, aggregando le disposizioni');
                        self.FeedbackTitle('Stipendi: conferma modifica');
                        _cleanSpalla();
                        $.ajax('/anchise2.web/Widget/LinkRapidi')
                        .success(function (html) {
                            $(spallaName).append(html);

                            $.ajax('/anchise2.web/Widget/InfoUtili/StipendioSctDataEntry')
                                .success(function (html) {
                                    $(spallaName).append(html);
                                });
                        });

                        self.SuccessButtons([
                                new App.Core.UiButton({
                                    Label: 'crea Distinta',
                                    Callback: function () {
                                        location.href = '/anchise2.web/StipendioSct/SearchDisposizioni'; /* TODO esporre i success buttons */
                                    }
                                })
                        ]);
                    }
                }

                self.modalitaEsitoSubscribe = self.Bonifico().Esito.ModalitaEsito.subscribe(function () {
                    initPopolaCampoCucEmail();
                });
            };
            self.Init();

            self.dispose = function () {
                tipoSoggettoSubscribe.dispose();
                validationSubscribe.dispose();
                bonificoSubscribe.dispose();
                ibanSubscribe.dispose();
                tipologiaAnagraficaSubscribe.dispose();
                currentCausaleSubscribe.dispose();
                currentFinalitaSubscribe.dispose();
                inviaEsitoAlBeneficiarioSubscribe.dispose();
                ordinanteSelectedSubscribe.dispose();
                creditoreEffettivoTipologiaAnagraficaSubscribe.dispose();
            }
        }
    });
</script>



<script type="text/html" id="anagrafica-search">
    <div data-bind="visible: Visible" class="modal-layer">
        <div class="modal-container section" data-bind="with: List">
            <div class="riquadro">
                <div class="clearfix">
                    <div class="flag associaUtente">&nbsp;</div>
                    <h1 data-bind="text: $component.Label"></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <label>Ragione Sociale</label>
                    <input type="text" class="form-control" data-bind="value: PagingFilter.Denominazione" />
                </div>
                <div class="col-sm-4 col-xs-12">
                    <label>
                        <span>Cod.</span>
                        <span data-bind="text: $component.Label"></span>
                    </label>
                    <input type="text" class="form-control" data-bind="value: PagingFilter.Codice" />
                </div>
                <div class="col-sm-4 col-xs-12">
                    <label>IBAN</label>
                    <input type="text" class="form-control" data-bind="value: PagingFilter.Iban" />
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center margin-top10">
                    <input type="button" class="btn btn-primary" value="Cerca" data-bind="singleClick: Search" />
                </div>
            </div>
            <div class="row">
                <div class="table-responsive tabSelezioneCC margin-top10">
                    <table class="dataTable table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Ragione Sociale
                                </th>
                                <th>
                                    Comune
                                </th>
                                <th>
                                    IBAN
                                </th>
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: Page">
                            <tr data-bind="click: $component.UpdateSelectedItem">
                                <td data-bind="text: Denominazione"></td>
                                <td data-bind="text: Indirizzo.Comune"></td>
                                <td data-bind="text: Iban"></td>
                            </tr>
                        </tbody>
                    </table>
                    <paginatore params="PagedList: $data"></paginatore>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-right margin-top10">
                        <input type="button" class="btn btn-primary" value="Chiudi" data-bind="singleClick: $component.ToggleVisible" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">

    ko.components.register('anagrafica-search', {
        template: { element: 'anagrafica-search' },
        viewModel: function (params) {
            var self = this;

            // Model
            self.Label = params.Label;
            self.Soggetto = params.Soggetto;
            self.IdentifierPiazzatura = params.IdentifierPiazzatura;
            self.IdentifierAzienda = params.IdentifierAzienda;
            self.TipologiaAnagrafica = params.TipologiaAnagrafica;
            self.Visible = params.Visible;
            self.Callback = params.Callback || ko.observable($.noop);
            self.CallbackSvuota = params.CallbackSvuota || ko.observable($.noop);
            self.ShowSvuotaButton = params.ShowSvuotaButton || ko.observable(false);
            self.IsSeda = params.IsSeda || ko.observable(false);
            
            self.List = new App.Core.PagedArrayAsync({
                self: self,
                searchUrl: '/anchise2.web/Anagrafiche/Search/SearchAnagrafiche',
                pagingFilter: new App.Common.FilterAnagrafiche({ size: 8, IsSortAscending: true, TipologiaAnagrafica: self.TipologiaAnagrafica() }),
                allData: []
            });

            self.ToggleVisible = function () {
                self.Visible(!self.Visible());
            };
            var VisibleSubscription = self.Visible.subscribe(function () {
                if (self.Visible()) {
                    App.Common.MapIdentifier(self.List.PagingFilter.IdentifierPiazzatura, self.IdentifierPiazzatura);

                    if (App.Common.IdentifierIsValid(self.IdentifierAzienda)) {
                        App.Common.MapIdentifier(self.List.PagingFilter.IdentifierAzienda, self.IdentifierAzienda);
                    }

                    self.List.PagingFilter.Codice('');
                    self.List.PagingFilter.Denominazione('');
                    self.List.PagingFilter.Iban('');
                    self.List.PagingFilter.TipologiaAnagrafica(self.TipologiaAnagrafica());
                    self.List.Search();
                }
            });

            self.UpdateSelectedItem = function (item) {
                var anagrafica = new App.Common.AnagraficaBo(ko.toJS(item));
                App.Common.MapIdentifier(self.Soggetto.IdentifierAnagrafica, anagrafica.Identifier);
                if (!self.IsSeda()) {
                    self.Soggetto.TipologiaAnagrafica(anagrafica.TipologiaAnagrafica());
                    self.Soggetto.Denominazione(anagrafica.Denominazione());
                    self.Soggetto.Codice(anagrafica.Codice());
                    self.Soggetto.CodiceFiscale(anagrafica.CodiceFiscale());
                    self.Soggetto.PartitaIva(anagrafica.PartitaIva());
                    self.Soggetto.Iban(anagrafica.Iban());
                    self.Soggetto.Bic(anagrafica.Bic());
                    ko.mapping.fromJS(ko.toJS(anagrafica.DatiAggiuntivi), null, self.Soggetto.DatiAggiuntivi);
                    ko.mapping.fromJS(ko.toJS(anagrafica.Indirizzo), null, self.Soggetto.Indirizzo);
                    if (self.Soggetto.Indirizzo.Via() !== null && self.Soggetto.Indirizzo.TipologiaIndirizzo() !== null) {
                        self.Soggetto.Indirizzo.TipologiaIndirizzo('ADDR');
                    }
                }

                self.Callback()(anagrafica);

                self.ToggleVisible();
            };

            self.dispose = function () {
                VisibleSubscription.dispose();
            }
        }
    });

    //scrolling del menu modale
    var startingPosition = 0;
    var minPosition = 170;
    window.onscroll = function () {
        if ($(".modal-container").is(':visible')) {
            var pageOffset = window.pageYOffset;
            var newPosition = startingPosition > minPosition ? startingPosition - pageOffset : minPosition - pageOffset;
            $(".modal-container").css('top', newPosition + 'px');
        } else {
            //qui serve per far aprire il popup al centro della pagina anche dopo aver scrollato molto in basso
            $(".modal-container").css('top', '20%');
            startingPosition = window.pageYOffset;
        }
    };
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



<script type="text/html" id="search-no-result">
    <div class="messagePanel alert" style="display: block">
        <h3 class="titleSection">
            Esito Operazione
        </h3>
        <p>
            <strong>
                Non risulta alcun dato per i parametri di ricerca immessi.
            </strong>
        </p>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('search-no-result', {
        template: { element: 'search-no-result' },
        viewModel: function (params) {
            var self = this;

        }
    });
</script>



<script type="text/html" id="disposizione-sct-summary">
    <div data-bind="with: DisposizioneSct" style="font-size: 12px">
        <div class="section">
            <div class="row">
                <div class="col-xs-6 white-block">
                    <div class="col-xs-12">
                        <div class="text-center">
                            <h1>
                                Ordinante
                            </h1>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                Intestato a:
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="text: Ordinante.RagioneSociale"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Iban:
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: Ordinante.Iban"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Banca:
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: $component.DettaglioBanca().Debitore.DescrizioneBanca"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Filiale:
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: $component.DettaglioBanca().Debitore.DescrizioneFiliale"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 white-block">
                    <div class="col-xs-12">
                        <div class="text-center">
                            <h1>
                                Beneficiario
                            </h1>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Intestato a:
                            </label>
                        </div>
                        <div class="col-xs-8  textTruncate">
                            <label data-bind="text: Beneficiario.Denominazione"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Iban:
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: Beneficiario.Iban"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Banca:
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: $component.DettaglioBanca().Creditore.DescrizioneBanca"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Filiale:
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: $component.DettaglioBanca().Creditore.DescrizioneFiliale"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 white-block">
                    <div class="col-xs-12 text-center">
                        <h1>
                            Dati Bonifico
                        </h1>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-6 no-padding">
                            <div class="col-xs-12">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding: 0">
                                        Importo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="numericTextSeparator: Importo"></label><label>&nbsp;EUR</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-12">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding: 0">
                                        Tipologia bonifico:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IsUrgP() ? 'Urgente' : 'Ordinario'"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-2">
                            <label class="control-label" style="padding: 0">
                                Descrizione causale:
                            </label>
                        </div>
                        <div class="col-xs-10 textTruncate" style="padding-left: 6.5px">
                            <label data-bind="text: DescrizioneRiconcilazione"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('disposizione-sct-summary', {
        template: { element: 'disposizione-sct-summary' },
        viewModel: function (params) {
            var self = this;
            
            self.DisposizioneSct = params.DisposizioneSct;
            var topicId = params.TopicId || '';
            var initAfterBinding = params.InitAfterBinding || false;

            self.DettaglioBanca = ko.observable(new App.Common.BancaModel(null));
            var retrieveBancaModel = function () {
                var dettaglio = new App.Common.BancaModel();

                dettaglio.Debitore.CodiceAbi(self.DisposizioneSct().Ordinante.Abi());
                dettaglio.Debitore.CodiceCab(self.DisposizioneSct().Ordinante.Cab());
                dettaglio.Debitore.Stato(App.Core.GetPaese(self.DisposizioneSct().Ordinante.Iban()));
                dettaglio.Creditore.CodiceAbi(App.Core.GetAbi(self.DisposizioneSct().Beneficiario.Iban()));
                dettaglio.Creditore.CodiceCab(App.Core.GetCab(self.DisposizioneSct().Beneficiario.Iban()));
                dettaglio.Creditore.Stato(App.Core.GetPaese(self.DisposizioneSct().Beneficiario.Iban()));

                Http.Post('/anchise2.web/Anagrafiche/Banca/GetDettaglioBanche', ko.toJSON(dettaglio))
                    .success(function (data) {
                        ko.mapping.fromJS(data, null, self.DettaglioBanca);
                    });
            };

            var initEvent = ko.postbox.subscribe(topicId + 'disposizione-sct-summary.INITIALIZE', retrieveBancaModel);

            if (initAfterBinding) {
                retrieveBancaModel();
            }

            self.dispose = function () {
                // prevent multiple subscribe when this component is used inside with data-bind
                initEvent.dispose(); 
            }
        }
    });
</script>


<script type="text/html" id="distinta-testata-dettaglio">
    <div data-bind="with: Distinta">
        <div class="section">
            <div class="row">
                <div class="col-xs-12 white-block">
                    <div class="col-xs-12 text-center">
                        <h1>
                            Dati Distinta
                        </h1>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Rag.Soc. Intestatario
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Intestatario.RagioneSociale"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Codice SIA mittente
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Intestatario.Sia"></label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Codice CUC mittente
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Intestatario.Cuc"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Codice ABI ricevente
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Intestatario.Abi"></label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Descrizione banca
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: $component.DescrizioneBancaRicevente"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Tipo dispositivo
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Localization.TipologieDispositive.GetLabel(Identifier.ClasseServizio())"></label> <span class="readOnly" data-bind="visible: IsSolaLettura()"></span>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Modalita' di pagamento
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Localization.TipologieDispositive.GetLabel(Identifier.ClasseServizio())"></label>
                                <label data-bind="visible: EsitoOrdinante">con esito all'ordinante</label>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Numero disposizioni
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: NumeroOrdini"></label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Totale importi
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="numericTextSeparator: Importo"></label><label>&nbsp;EUR</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Data esecuzione
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataEsecuzione"></label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Esito ordinante
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: (EsitoOrdinante() ? 'SI' : 'NO')"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">

                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Tipologia bonifico:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: IsUrgP() ? 'Urgente' : 'Ordinario'"></label>
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Addebito cumulativo
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: $component.AddebitoCumulativo"></label>
                            </div>
                        </div>
                    </div>

                    
                    <hr />
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Stato distinta
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: $component.StatoDistinta"></label>
                            </div>
                        </div>
                        <div class="col-xs-6" data-bind="visible: $component.IsFirmatariVisible">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Autorizzata da
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Firmatari"></label>
                            </div>
                        </div>

                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-12">
                                <div class="col-xs-2">
                                    <label class="control-label" style="padding: 0">
                                        Nome supporto
                                    </label>
                                </div>
                                <div class="no-padding">
                                    <div class=" col-xs-8" style=" padding-left: 6px;" data-bind="visible: !$component.MessageIdInEdit()">
                                        <label style=" min-width: 190px" data-bind="text: NomeSupporto"></label>
                                        <span style="display: inline-block;" class="icon-replace icon-edit active link" data-bind="visible: $component.NomeSupportoEditable(),click: $component.ToggleMsgIdEdit ">&nbsp;</span>
                                    </div>
                                    <div class="col-xs-6" style=" padding-left: 6px;" data-bind="visible: $component.MessageIdInEdit()">
                                        <input type="text" class="form-control no-placeholder-italic" data-bind="value: NomeSupporto" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Data creazione
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataCreazione"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding" data-bind="visible: $component.IsAutorizzataOrConfermata">
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Data spedizione
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateTimeText: DataSpedizione"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding" data-bind="visible: $component.IsAutorizzataOrConfermata">
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Data disponib. banca
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateTimeText: DataDisponibilita"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding" data-bind="visible: $component.IsConfermata">
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Data conferma
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataConferma"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('distinta-testata-dettaglio', {
        template: { element: 'distinta-testata-dettaglio' },
        viewModel: function (params) {
            var self = this;

            // Model
            self.Distinta = params.Distinta;
            self.DescrizioneBancaRicevente = ko.observable(null);
            self.IdentifierDistinta = ko.observable(self.Distinta().Identifier);
            self.MessageIdInEdit = params.MessageIdInEdit || ko.observable(false);
            self.EnableEditDisposizioni = params.EnableEditDisposizioni || false;

            self.IsFirmatariVisible = ko.pureComputed(function () {
                return self.Distinta().StatoDistinta() == App.Common.StatiDistinta.PARZIALMENTE_AUTORIZZATA || self.IsAutorizzataOrConfermata();
            });
            self.IsAutorizzataOrConfermata = ko.pureComputed(function () {
                return self.Distinta().StatoDistinta() == App.Common.StatiDistinta.AUTORIZZATA || self.Distinta().StatoDistinta() == App.Common.StatiDistinta.CONFERMATA;
            });
            self.IsConfermata = ko.pureComputed(function () {
                return self.Distinta().StatoDistinta() == App.Common.StatiDistinta.CONFERMATA;
            });

            self.AddebitoCumulativo = ko.pureComputed(function () {
                var addebito = 'NR';

                if (self.Distinta().AddebitoCumulativo() != null) {
                    addebito = self.Distinta().AddebitoCumulativo();
                }

                return Localization.GetAddebitoCumulativo(addebito);
            });
            self.StatoDistinta = ko.pureComputed(function () {
                return Localization.StatiDistinta.GetLabel(self.Distinta().StatoDistinta());
            });

            // Action

            self.ToggleMsgIdEdit = function () {
                self.MessageIdInEdit(!self.MessageIdInEdit());
            }
            self.NomeSupportoEditable = ko.pureComputed(function () {
                return ko.unwrap(self.SottoDistinta) == null && (self.Distinta().StatoDistinta() != App.Common.StatiDistinta.AUTORIZZATA && self.Distinta().StatoDistinta() != App.Common.StatiDistinta.CONFERMATA) && self.EnableEditDisposizioni;
            });


            var distintaSubscribe = self.Distinta.subscribe(function () {
                self.Init();
            });

            self.Init = function () {
                var filtroAbiCab = new App.Common.FilterAbiCab({
                    Abi: self.Distinta().Intestatario.Abi(),
                    DataChiusuraSportello: null
                });

                Http.Post('/anchise2.web/Anagrafiche/Banca/SearchAbiCab', ko.toJSON(filtroAbiCab))
                    .success(function (data) {
                        var result = new App.Core.StandardJsonResult(data);

                        if (!result.HasError && result.Response.length > 0) {

                            self.DescrizioneBancaRicevente(result.Response[0].DescrizioneBanca);
                        }
                    });
            }

            self.Init();

            self.dispose = function () {
                distintaSubscribe.dispose();
            }
        }
    });
</script>




<div id="60d131c3624941b98e205667e7a7ef52_10">
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
            var absolutePath = '/anchise2.web/Contents/00000/it-IT/Images/imageFakeName?v=1980369';

            return absolutePath.replace('imageFakeName', imageRelativePath);
        }

        self.GetPinPadGif = function (secureType) {
            var relativePath = '/pp/dispositivo_' + secureType + '.gif';

            return self.ResourcesPathImage(relativePath);
        }

        // Initialize
        self.Init = function () {
            $('.hide', $('#60d131c3624941b98e205667e7a7ef52_10')).removeClass('hide');
        };
    };

    var uiHelper = new UiViewModel();

    $(document).ready(function () {
        ko.applyBindings(uiHelper, document.getElementById('60d131c3624941b98e205667e7a7ef52_10'));

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







<div id="60d131c3624941b98e205667e7a7ef52_5" data-bind="visible: IsVisible">
    <div data-bind="component: { name: 'stipendio-dataentry', params: StipendioParams }">
    <!-- SUCCESS MESSAGES -->
    <div data-bind="visible: SuccessMessagesVisible" style="display: none;">
        <feedback-messages params="Component: SuccessComponent, Buttons: SuccessButtons, CssClass: 'alert', Message: SuccessMessage, TitleCssClass: 'disposizioneBonifico', PageTitle: $component.FeedbackTitle">
    <div class="riquadro">
        <div data-bind="visible: PageTitle != null">
            <div class="flag disposizioneBonifico" data-bind="css: TitleCssClass">&nbsp;</div>
            <h1 data-bind="text: PageTitle">Bonifici: Stipendi inserimento</h1>
        </div>
        <div class="messagePanel visible alert" data-bind="css: CssClass">
            <h3 class="titleSection" data-bind="text: Title">Esito Operazione</h3>
            <p>
                <strong style="white-space: pre-wrap" data-bind="text: Message">Disposizione inserita correttamente.
Per poter inviare la disposizione è necessario creare la distinta, aggregando le disposizioni</strong>
            </p>
            <ul data-bind="foreach: Messages"></ul>
        </div>
        <div data-bind="visible: Component != null">
            <!-- ko if: Component != null-->
                <!-- ko component:{name: Component.Name, params: Component.Params} -->
    <div data-bind="with: DisposizioneSct" style="font-size: 12px">
        <div class="section">
            <div class="row">
                <div class="col-xs-6 white-block">
                    <div class="col-xs-12">
                        <div class="text-center">
                            <h1>
                                Ordinante
                            </h1>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                Intestato a:
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="text: Ordinante.RagioneSociale"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Iban:
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: Ordinante.Iban"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Banca:
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: $component.DettaglioBanca().Debitore.DescrizioneBanca"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Filiale:
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: $component.DettaglioBanca().Debitore.DescrizioneFiliale"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 white-block">
                    <div class="col-xs-12">
                        <div class="text-center">
                            <h1>
                                Beneficiario
                            </h1>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Intestato a:
                            </label>
                        </div>
                        <div class="col-xs-8  textTruncate">
                            <label data-bind="text: Beneficiario.Denominazione"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Iban:
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: Beneficiario.Iban"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Banca:
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: $component.DettaglioBanca().Creditore.DescrizioneBanca"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Filiale:
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: $component.DettaglioBanca().Creditore.DescrizioneFiliale"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 white-block">
                    <div class="col-xs-12 text-center">
                        <h1>
                            Dati Bonifico
                        </h1>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-6 no-padding">
                            <div class="col-xs-12">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding: 0">
                                        Importo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="numericTextSeparator: Importo"></label><label>&nbsp;EUR</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-12">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding: 0">
                                        Tipologia bonifico:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IsUrgP() ? 'Urgente' : 'Ordinario'">Ordinario</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-2">
                            <label class="control-label" style="padding: 0">
                                Descrizione causale:
                            </label>
                        </div>
                        <div class="col-xs-10 textTruncate" style="padding-left: 6.5px">
                            <label data-bind="text: DescrizioneRiconcilazione"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- /ko -->
            <!-- /ko -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-right">
            <!-- ko foreach: Buttons -->
            <input type="button" class="btn btn-primary" data-bind="value: Label, singleClick: Callback" value="Nuovo Stipendio">
            
            <input type="button" class="btn btn-primary" data-bind="value: Label, singleClick: Callback" value="Nuovo Stipendio con i dati precedenti">
            
            <input type="button" class="btn btn-primary" data-bind="value: Label, singleClick: Callback" value="crea Distinta">
            <!-- /ko -->
        </div>
    </div>
</feedback-messages>
    </div>
    <div data-bind="visible: !SuccessMessagesVisible()">
        <div class="riquadro">
            <div>
                <div style="float:left;">
                    <div class="flag disposizioneBonifico">&nbsp;</div>
                    <h1>Stipendi: inserimento</h1>
                </div>
                <div style="float:left;padding-top:13px;">
                    <a class="icon-replace icon-help active link" onclick="javascript: showPopupHelp('/anchise2.web/Widget/Help/GetHelper', 'Chiudi', 'Stipendi', null);">Help On Line</a>
                </div>
            </div>
            <div class="clearall"></div>
            <div data-bind="with: Bonifico">
                <!-- VALIDATION -->
                <validation-messages params="Validation: $component.Validation">
    <div data-bind="visible: ValidationSectionVisible" style="">
        <div class="messagePanel error" style="display: block">
            <h3 class="titleSection">
                Errori
            </h3>
            <ul data-bind="foreach: Validation">
                <li>
                    <b data-bind="html: $component.getMessageError($data)">Seleziona il rapporto di addebito</b>
                </li>
            
                <li>
                    <b data-bind="html: $component.getMessageError($data)">Beneficiario: Il campo ragione sociale è obbligatorio</b>
                </li>
            
                <li>
                    <b data-bind="html: $component.getMessageError($data)">Beneficiario: II campo Iban è obbligatorio</b>
                </li>
            
                <li>
                    <b data-bind="html: $component.getMessageError($data)">Il campo Importo deve essere compreso tra 0,01 e 999999999,99</b>
                </li>
            
                <li>
                    <b data-bind="html: $component.getMessageError($data)">Il campo Codice Univoco è obbligatorio</b>
                </li>
            </ul>
        </div>
    </div>
</validation-messages>
                <!-- SELETTORE RAPPORTI-->
                <div class="section">
                    <div class="row">
                        <h3 class="titleSection">
                            Rapporto selezionato
                        </h3>
                    </div>
                    <div data-bind="disableChildren: App.Common.IdentifierIsValid(IdentifierDistinta)">
                        <selettore-rapporti params="Ordinante: Ordinante, ArrowVisible: $component.DispoIsNotInDistinta">
    <div class="row background-darker">
        <div class="col-xs-11" data-bind="with: SelectedOrdinante" style="padding-left: 0">
            <div data-bind="visible: App.Common.IdentifierIsValid(Identifier)" style="margin-top: 10px; display: none;">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="col-xs-3 no-padding">
                            <span>Intestato a</span>
                        </div>
                        <div class="col-xs-9 no-padding">
                            <strong data-bind="text: RagioneSociale"></strong>
                        </div>
                    </div>
                    <div class="col-xs-6" data-bind="visible: Conto() != null" style="display: none;">
                        <div class="col-xs-3 no-padding">
                            <span>Rapporto</span>
                        </div>
                        <div class="col-xs-9 no-padding">
                            <strong data-bind="text: Conto"></strong>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="col-xs-3 no-padding">
                            <span>ABI - Banca</span>
                        </div>
                        <div class="col-xs-9 no-padding">
                            <strong data-bind="text: Abi"></strong>
                            -
                            <strong data-bind="text: $component.DescrizioneBanca"></strong>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-3 no-padding">
                            <span>CAB<!--ko if: Iban() != null--><!--/ko--></span>
                        </div>
                        <div class="col-xs-9 no-padding">
                            <strong data-bind="text: Cab"></strong>
                            <!--ko if: Iban() != null--><!--/ko-->
                        </div>
                    </div>
                </div>
            </div>
            <div data-bind="visible: !App.Common.IdentifierIsValid(Identifier)">
                <div class="row">
                    <div class="col-xs-12" style="height: 80px; padding: 35px 20px">
                        <strong data-bind="text: $component.TestoSelettore">Seleziona il rapporto di addebito della disposizione</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-1 vertical-center" style="height: 80px">
            <a href="#" data-bind="click: RapportiDataTableVisibleToggle, css: ArrowToggle, visible: ArrowVisible" class="btnSelezioneCC icon-replace icon-arrowup active"></a>
        </div>
    </div>
    <div class="row" data-bind="slideVisible: RapportiDataTableVisible" style="display: block;">
        <div data-bind="with: PagedList">
            <div class="row" style="margin-top: 5px; display: none;" data-bind="visible: $component.FiltroVisible">
                <div class="col-xs-6">
                    <div class="col-xs-2">
                        <label>Cerca</label>
                    </div>
                    <div class="col-xs-5">
                        <input type="text" class="form-control" data-bind="textInput: CercaText">
                    </div>
                    <div class="col-xs-1">
                        <span class="icon-replace icon-search active">&nbsp;</span>
                    </div>
                </div>
                <div class="col-xs-2"></div>
                <div class="col-xs-4">
                    <div class="col-xs-2">
                        <label>Mostra</label>
                    </div>
                    <div class="col-xs-4">
                        <select class="form-control" data-bind="options: PageSizeDropDown, value: PageSize"><option value="8">8</option><option value="20">20</option><option value="50">50</option><option value="100">100</option></select>
                    </div>
                    <div class="col-xs-6">
                        <label>risultati per pagina</label>
                    </div>
                </div>
            </div>
            <div class="table-responsive tabSelezioneCC" style="margin-top: 10px;">
                <table class="dataTable table table-striped">
                    <thead>
                        <tr>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <th data-bind="css: ThCss('Rapporto.NumeroRapporto'), click: SortToggleObservable('Rapporto.NumeroRapporto')" class="sorting">
                                Rapporto
                            </th>
                            <!--/ko-->
                            <th data-bind="css: ThCss('Rapporto.CodiceAbi'), click: SortToggleObservable('Rapporto.CodiceAbi')" class="col-md-1 sorting">
                                ABI
                            </th>
                            <th data-bind="css: ThCss('Rapporto.CodiceCab'), click: SortToggleObservable('Rapporto.CodiceCab')" class="col-md-1 sorting">
                                CAB
                            </th>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <th data-bind="css: ThCss('Rapporto.CodiceIban'), click: SortToggleObservable('Rapporto.CodiceIban')" class="sorting">
                                IBAN
                            </th>
                            <!--/ko-->
                            <th data-bind="css: ThCss('Azienda.RagioneSociale'), click: SortToggleObservable('Azienda.RagioneSociale')" class="sorting_asc">
                                Intestazione
                            </th>
                        </tr>
                    </thead>
                    <tbody data-bind="foreach: Page">
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">EUR700001843</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">01636</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT28A0503401636EUR700001843</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">C.P.C. INOX SPA</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000011905                                                                                        </td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">33473</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT38V0503433473000000011905</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">C.P.C. INOX SPA</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">EUR800004456</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">01636</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT48N0503401636EUR800004456</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">C.P.C. INOX SPA</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">USD181000600</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">33473</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT95U0503433473USD181000600</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">C.P.C. INOX SPA</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <paginatore params="PagedList: $data">
    <div data-bind="visible: PagedList.Page().length > 0 &amp;&amp; PagedList.PageCount() > 1" style="display: none;">
        <!-- ko template: {name: PaginatorTemplate()} -->
    <div class="dataTables_paginate" data-bind="with: PagedList">
        <span data-bind="foreach: ko.utils.range(1, PageCount)">
            <a class="paginate_button current" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)">1</a>
        </span>
    </div>
<!-- /ko -->
    </div>
</paginatore>
        </div>
    </div>
</selettore-rapporti>
                    </div>
                </div>
                <!-- DEBITORE EFFETTIVO -->
                <div class="section">
                    <div class="row link" data-bind="click: $component.DebitoreCollapse">
                        <h3 class="titleSection">
                            Debitore Effettivo
                        </h3>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.DebitoreCollapseCss" class="icon-replace icon-collapse active"></div>
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.DebitoreBodyVisible" style="display: block;">
                        <div class="row" style="margin-top: 10px">
                            <div class="col-xs-12">
                                <p>Sezione da compilare soltanto se il debitore effettivo è diverso dall'ordinante</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Ragione Sociale</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Debitore.Denominazione">
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                                    <label>&nbsp;</label>
                                    <span style="display: block" class="icon-replace icon-search active link" data-bind="singleClick: $component.DebitoreEffettivoAnagraficaSearch">&nbsp;</span>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Codice</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Debitore.Codice">
                                </div>
                            </div>
                        </div>

                        <div data-bind="component: { name: 'anagrafica-search', params: $component.DebitoreEffettivoAnagraficaModel }">
    <div data-bind="visible: Visible" class="modal-layer" style="display: none;">
        <div class="modal-container section" data-bind="with: List" style="top: 20%;">
            <div class="riquadro">
                <div class="clearfix">
                    <div class="flag associaUtente">&nbsp;</div>
                    <h1 data-bind="text: $component.Label">Cliente</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <label>Ragione Sociale</label>
                    <input type="text" class="form-control" data-bind="value: PagingFilter.Denominazione">
                </div>
                <div class="col-sm-4 col-xs-12">
                    <label>
                        <span>Cod.</span>
                        <span data-bind="text: $component.Label">Cliente</span>
                    </label>
                    <input type="text" class="form-control" data-bind="value: PagingFilter.Codice">
                </div>
                <div class="col-sm-4 col-xs-12">
                    <label>IBAN</label>
                    <input type="text" class="form-control" data-bind="value: PagingFilter.Iban">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center margin-top10">
                    <input type="button" class="btn btn-primary" value="Cerca" data-bind="singleClick: Search">
                </div>
            </div>
            <div class="row">
                <div class="table-responsive tabSelezioneCC margin-top10">
                    <table class="dataTable table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Ragione Sociale
                                </th>
                                <th>
                                    Comune
                                </th>
                                <th>
                                    IBAN
                                </th>
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: Page"></tbody>
                    </table>
                    <paginatore params="PagedList: $data">
    <div data-bind="visible: PagedList.Page().length > 0 &amp;&amp; PagedList.PageCount() > 1" style="display: none;">
        <!-- ko template: {name: PaginatorTemplate()} -->
    <div class="dataTables_paginate" data-bind="with: PagedList">
        <span data-bind="foreach: ko.utils.range(1, PageCount)">
            <a class="paginate_button current" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)">1</a>
        </span>
    </div>
<!-- /ko -->
    </div>
</paginatore>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-right margin-top10">
                        <input type="button" class="btn btn-primary" value="Chiudi" data-bind="singleClick: $component.ToggleVisible">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                        <indirizzo-dataentry params="Indirizzo: Debitore.Indirizzo">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label class="control-label">Tipo Indirizzo</label>
                <select class="form-control" data-bind="enable: TipoIndirizzoEnable, options: TipologieIndirizzo, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: Indirizzo.TipologiaIndirizzo"><option value="">opzionale</option><option value="PBOX">Indirizzo della casella postale</option><option value="DLVY">Indirizzo di consegna</option><option value="MLTO">Indirizzo di corrispondenza postale</option><option value="BIZZ">Indirizzo di domicilio</option><option value="HOME">Indirizzo di residenza</option><option value="ADDR">Indirizzo postale completo</option></select>
            </div>
            <div class="col-sm-1 col-xs-12"></div>
            <div class="col-sm-4 col-xs-12">
                <label class="control-label">Indirizzo</label>
                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: DatiIndirizzoActive, value: Indirizzo.Via" disabled="">
            </div>
            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label class="control-label">Numero</label>
                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: DatiIndirizzoActive, value: Indirizzo.Numero" disabled="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label class="control-label">Comune</label>
                <input type="text" class="form-control no-placeholder-italic" data-bind="enable: (ComuneActive() || DatiIndirizzoActive()), value: Indirizzo.Comune, attr: {placeholder: comunePlaceholder}" disabled="" placeholder="opzionale">
            </div>
            <div class="col-sm-1 col-xs-12"></div>
            <div class="col-sm-2 col-xs-12">
                <label class="control-label">Cap</label>
                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: DatiIndirizzoActive, value: Indirizzo.Cap" style="width:100px" disabled="">
            </div>
            <div class="col-sm-2 col-xs-12">
                <label class="control-label">Prov.</label>
                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: DatiIndirizzoActive, value: Indirizzo.Provincia" disabled="">
            </div>
            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label class="control-label">Stato</label>
                <select class="form-control" data-bind="enable: DatiIndirizzoActive, options: Nazioni, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: Indirizzo.Nazione" disabled=""><option value="">opzionale</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antartide</option><option value="AG">Antigua e Barbuda</option><option value="SA">Arabia Saudita</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaigian</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BE">Belgio</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BY">Bielorussia</option><option value="MM">Birmania</option><option value="BO">Bolivia</option><option value="BA">Bosnia ed Erzegovina</option><option value="BW">Botswana</option><option value="BR">Brasile</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambogia</option><option value="CM">Camerun</option><option value="CA">Canada</option><option value="CV">Capo Verde</option><option value="TD">Ciad</option><option value="CL">Cile</option><option value="CN">Cina</option><option value="CY">Cipro</option><option value="VA">Città del Vaticano</option><option value="CO">Colombia</option><option value="KP">Corea del Nord</option><option value="KR">Corea del Sud</option><option value="CR">Costa Rica</option><option value="CI">Costa d'Avorio</option><option value="HR">Croazia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="DK">Danimarca</option><option value="DM">Dominica</option><option value="AE">Dubai</option><option value="EC">Ecuador</option><option value="EG">Egitto</option><option value="SV">El Salvador</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Etiopia</option><option value="FJ">Figi</option><option value="PH">Filippine</option><option value="FI">Finlandia</option><option value="FR">Francia</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="GS">Georgia del Sud e isole Sandwich meridionali</option><option value="DE">Germania</option><option value="GH">Ghana</option><option value="JM">Giamaica</option><option value="JP">Giappone</option><option value="GI">Gibilterra</option><option value="DJ">Gibuti</option><option value="JO">Giordania</option><option value="GR">Grecia</option><option value="GD">Grenada</option><option value="GL">Groenlandia</option><option value="GP">Guadalupa</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GQ">Guinea Equatoriale</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="GF">Guyana Francese</option><option value="HT">Haiti</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Irlanda</option><option value="IS">Islanda</option><option value="BV">Isola Bouvet</option><option value="NF">Isola Norfolk</option><option value="CX">Isola del Natale (Christmas Island)</option><option value="IM">Isola di Man</option><option value="BQ">Isole BES</option><option value="KY">Isole Cayman</option><option value="CC">Isole Cocos e Keeling</option><option value="KM">Isole Comore</option><option value="CK">Isole Cook</option><option value="FO">Isole Faer Oer</option><option value="FK">Isole Falkland</option><option value="HM">Isole Heard e McDonald</option><option value="MP">Isole Marianne Settentrionali</option><option value="MH">Isole Marshall</option><option value="PN">Isole Pitcairn</option><option value="SB">Isole Salomone</option><option value="TC">Isole Turks e Caicos</option><option value="VI">Isole Vergini Americane</option><option value="VG">Isole Vergini Britanniche</option><option value="UM">Isole minori esterne degli Stati Uniti</option><option value="AX">Isole Åland</option><option value="IL">Israele</option><option value="IT">Italia</option><option value="JE">Jersey</option><option value="KZ">Kazakistan</option><option value="KE">Kenya</option><option value="KG">Kirghizistan</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="LA">Laos</option><option value="LS">Lesotho</option><option value="LV">Lettonia</option><option value="LB">Libano</option><option value="LR">Liberia</option><option value="LY">Libia</option><option value="LI">Liechtenstein</option><option value="LT">Lituania</option><option value="LU">Lussemburgo</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MV">Maldive</option><option value="MY">Malesia</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MA">Marocco</option><option value="MQ">Martinica</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Messico</option><option value="MD">Moldavia</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MZ">Mozambico</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NO">Norvegia</option><option value="NC">Nuova Caledonia</option><option value="NZ">Nuova Zelanda</option><option value="OM">Oman</option><option value="NL">Paesi Bassi</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua Nuova Guinea</option><option value="PY">Paraguay</option><option value="PE">Perù</option><option value="PF">Polinesia Francese</option><option value="PL">Polonia</option><option value="PR">Porto Rico</option><option value="PT">Portogallo</option><option value="QA">Qatar</option><option value="GB">Regno Unito</option><option value="CZ">Repubblica Ceca</option><option value="CF">Repubblica Centrafricana</option><option value="CD">Repubblica Democratica del Congo</option><option value="CD">Repubblica Democratica del Congo</option><option value="DO">Repubblica Dominicana</option><option value="CG">Repubblica del Congo</option><option value="TW">Repubblica di Cina (Taiwan)</option><option value="RO">Romania</option><option value="RW">Ruanda</option><option value="RU">Russia</option><option value="RE">Réunion</option><option value="EH">Sahara Occidentale</option><option value="KN">Saint Kitts e Nevis</option><option value="PM">Saint Pierre e Miquelon</option><option value="VC">Saint Vincent e Grenadine</option><option value="BL">Saint-Barthélemy</option><option value="MF">Saint-Martin</option><option value="WS">Samoa</option><option value="AS">Samoa Americane</option><option value="SM">San Marino</option><option value="SH">Sant'Elena</option><option value="LC">Santa Lucia</option><option value="ST">Sao Tomé e Principe</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SY">Siria</option><option value="SK">Slovacchia</option><option value="SI">Slovenia</option><option value="SO">Somalia</option><option value="ES">Spagna</option><option value="LK">Sri Lanka</option><option value="FM">Stati Federati di Micronesia</option><option value="US">Stati Uniti d'America</option><option value="PS">Stato di Palestina</option><option value="ZA">Sudafrica</option><option value="SD">Sudan</option><option value="SS">Sudan del Sud</option><option value="SR">Suriname</option><option value="SJ">Svalbard e Jan Mayen</option><option value="SE">Svezia</option><option value="CH">Svizzera</option><option value="SZ">Swaziland</option><option value="TJ">Tagikistan</option><option value="TZ">Tanzania</option><option value="IO">Territori Britannici dell'Oceano Indiano</option><option value="TF">Territori Francesi del Sud</option><option value="TH">Thailandia</option><option value="TL">Timor Est</option><option value="TL">Timor Est</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad e Tobago</option><option value="TN">Tunisia</option><option value="TR">Turchia</option><option value="TM">Turkmenistan</option><option value="TV">Tuvalu</option><option value="UA">Ucraina</option><option value="UG">Uganda</option><option value="HU">Ungheria</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis e Futuna</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
            </div>
        </div>
    </div>
</indirizzo-dataentry>
                    </div>
                </div>
                <!-- BENEFICIARIO -->
                <div class="section">
                    <div class="row">
                        <h3 class="titleSection">Dati Dipendente</h3>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Tipo Anagrafica</label>
                                    <select class="form-control" data-bind="options: $component.TipologieAnagrafica, optionsText: 'V', optionsValue: 'K', value: $component.BeneficiarioAnagraficaModel.TipologiaAnagrafica"><option value="DI">DIPENDENTI</option><option value="FO">FORNITORI</option></select>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Cognome Nome</label>
                                    <input type="text" class="form-control" data-bind="value: Beneficiario.Denominazione">
                                </div>
                                <div class="col-sm-1 col-xs-12 no-padding">
                                    <label class="control-label"></label>
                                    <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.BeneficiarioAnagraficaSearch">&nbsp;</span>
                                </div>
                                <div class="col-sm-3 col-xs-12 no-padding">
                                    <label class="control-label">Codice</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Beneficiario.Codice">
                                </div>
                            </div>
                        </div>

                        <div data-bind="component: { name: 'anagrafica-search', params: $component.BeneficiarioAnagraficaModel }">
    <div data-bind="visible: Visible" class="modal-layer" style="display: none;">
        <div class="modal-container section" data-bind="with: List" style="top: 20%;">
            <div class="riquadro">
                <div class="clearfix">
                    <div class="flag associaUtente">&nbsp;</div>
                    <h1 data-bind="text: $component.Label">Dipendente</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <label>Ragione Sociale</label>
                    <input type="text" class="form-control" data-bind="value: PagingFilter.Denominazione">
                </div>
                <div class="col-sm-4 col-xs-12">
                    <label>
                        <span>Cod.</span>
                        <span data-bind="text: $component.Label">Dipendente</span>
                    </label>
                    <input type="text" class="form-control" data-bind="value: PagingFilter.Codice">
                </div>
                <div class="col-sm-4 col-xs-12">
                    <label>IBAN</label>
                    <input type="text" class="form-control" data-bind="value: PagingFilter.Iban">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center margin-top10">
                    <input type="button" class="btn btn-primary" value="Cerca" data-bind="singleClick: Search">
                </div>
            </div>
            <div class="row">
                <div class="table-responsive tabSelezioneCC margin-top10">
                    <table class="dataTable table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Ragione Sociale
                                </th>
                                <th>
                                    Comune
                                </th>
                                <th>
                                    IBAN
                                </th>
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: Page"></tbody>
                    </table>
                    <paginatore params="PagedList: $data">
    <div data-bind="visible: PagedList.Page().length > 0 &amp;&amp; PagedList.PageCount() > 1" style="display: none;">
        <!-- ko template: {name: PaginatorTemplate()} -->
    <div class="dataTables_paginate" data-bind="with: PagedList">
        <span data-bind="foreach: ko.utils.range(1, PageCount)">
            <a class="paginate_button current" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)">1</a>
        </span>
    </div>
<!-- /ko -->
    </div>
</paginatore>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-right margin-top10">
                        <input type="button" class="btn btn-primary" value="Chiudi" data-bind="singleClick: $component.ToggleVisible">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                        <indirizzo-dataentry params="Indirizzo: Beneficiario.Indirizzo, Iban: Beneficiario.Iban">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label class="control-label">Tipo Indirizzo</label>
                <select class="form-control" data-bind="enable: TipoIndirizzoEnable, options: TipologieIndirizzo, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: Indirizzo.TipologiaIndirizzo"><option value="">opzionale</option><option value="PBOX">Indirizzo della casella postale</option><option value="DLVY">Indirizzo di consegna</option><option value="MLTO">Indirizzo di corrispondenza postale</option><option value="BIZZ">Indirizzo di domicilio</option><option value="HOME">Indirizzo di residenza</option><option value="ADDR">Indirizzo postale completo</option></select>
            </div>
            <div class="col-sm-1 col-xs-12"></div>
            <div class="col-sm-4 col-xs-12">
                <label class="control-label">Indirizzo</label>
                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: DatiIndirizzoActive, value: Indirizzo.Via" disabled="">
            </div>
            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label class="control-label">Numero</label>
                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: DatiIndirizzoActive, value: Indirizzo.Numero" disabled="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label class="control-label">Comune</label>
                <input type="text" class="form-control no-placeholder-italic" data-bind="enable: (ComuneActive() || DatiIndirizzoActive()), value: Indirizzo.Comune, attr: {placeholder: comunePlaceholder}" disabled="" placeholder="opzionale">
            </div>
            <div class="col-sm-1 col-xs-12"></div>
            <div class="col-sm-2 col-xs-12">
                <label class="control-label">Cap</label>
                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: DatiIndirizzoActive, value: Indirizzo.Cap" style="width:100px" disabled="">
            </div>
            <div class="col-sm-2 col-xs-12">
                <label class="control-label">Prov.</label>
                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: DatiIndirizzoActive, value: Indirizzo.Provincia" disabled="">
            </div>
            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label class="control-label">Stato</label>
                <select class="form-control" data-bind="enable: DatiIndirizzoActive, options: Nazioni, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: Indirizzo.Nazione" disabled=""><option value="">opzionale</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antartide</option><option value="AG">Antigua e Barbuda</option><option value="SA">Arabia Saudita</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaigian</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BE">Belgio</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BY">Bielorussia</option><option value="MM">Birmania</option><option value="BO">Bolivia</option><option value="BA">Bosnia ed Erzegovina</option><option value="BW">Botswana</option><option value="BR">Brasile</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambogia</option><option value="CM">Camerun</option><option value="CA">Canada</option><option value="CV">Capo Verde</option><option value="TD">Ciad</option><option value="CL">Cile</option><option value="CN">Cina</option><option value="CY">Cipro</option><option value="VA">Città del Vaticano</option><option value="CO">Colombia</option><option value="KP">Corea del Nord</option><option value="KR">Corea del Sud</option><option value="CR">Costa Rica</option><option value="CI">Costa d'Avorio</option><option value="HR">Croazia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="DK">Danimarca</option><option value="DM">Dominica</option><option value="AE">Dubai</option><option value="EC">Ecuador</option><option value="EG">Egitto</option><option value="SV">El Salvador</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Etiopia</option><option value="FJ">Figi</option><option value="PH">Filippine</option><option value="FI">Finlandia</option><option value="FR">Francia</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="GS">Georgia del Sud e isole Sandwich meridionali</option><option value="DE">Germania</option><option value="GH">Ghana</option><option value="JM">Giamaica</option><option value="JP">Giappone</option><option value="GI">Gibilterra</option><option value="DJ">Gibuti</option><option value="JO">Giordania</option><option value="GR">Grecia</option><option value="GD">Grenada</option><option value="GL">Groenlandia</option><option value="GP">Guadalupa</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GQ">Guinea Equatoriale</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="GF">Guyana Francese</option><option value="HT">Haiti</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Irlanda</option><option value="IS">Islanda</option><option value="BV">Isola Bouvet</option><option value="NF">Isola Norfolk</option><option value="CX">Isola del Natale (Christmas Island)</option><option value="IM">Isola di Man</option><option value="BQ">Isole BES</option><option value="KY">Isole Cayman</option><option value="CC">Isole Cocos e Keeling</option><option value="KM">Isole Comore</option><option value="CK">Isole Cook</option><option value="FO">Isole Faer Oer</option><option value="FK">Isole Falkland</option><option value="HM">Isole Heard e McDonald</option><option value="MP">Isole Marianne Settentrionali</option><option value="MH">Isole Marshall</option><option value="PN">Isole Pitcairn</option><option value="SB">Isole Salomone</option><option value="TC">Isole Turks e Caicos</option><option value="VI">Isole Vergini Americane</option><option value="VG">Isole Vergini Britanniche</option><option value="UM">Isole minori esterne degli Stati Uniti</option><option value="AX">Isole Åland</option><option value="IL">Israele</option><option value="IT">Italia</option><option value="JE">Jersey</option><option value="KZ">Kazakistan</option><option value="KE">Kenya</option><option value="KG">Kirghizistan</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="LA">Laos</option><option value="LS">Lesotho</option><option value="LV">Lettonia</option><option value="LB">Libano</option><option value="LR">Liberia</option><option value="LY">Libia</option><option value="LI">Liechtenstein</option><option value="LT">Lituania</option><option value="LU">Lussemburgo</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MV">Maldive</option><option value="MY">Malesia</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MA">Marocco</option><option value="MQ">Martinica</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Messico</option><option value="MD">Moldavia</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MZ">Mozambico</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NO">Norvegia</option><option value="NC">Nuova Caledonia</option><option value="NZ">Nuova Zelanda</option><option value="OM">Oman</option><option value="NL">Paesi Bassi</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua Nuova Guinea</option><option value="PY">Paraguay</option><option value="PE">Perù</option><option value="PF">Polinesia Francese</option><option value="PL">Polonia</option><option value="PR">Porto Rico</option><option value="PT">Portogallo</option><option value="QA">Qatar</option><option value="GB">Regno Unito</option><option value="CZ">Repubblica Ceca</option><option value="CF">Repubblica Centrafricana</option><option value="CD">Repubblica Democratica del Congo</option><option value="CD">Repubblica Democratica del Congo</option><option value="DO">Repubblica Dominicana</option><option value="CG">Repubblica del Congo</option><option value="TW">Repubblica di Cina (Taiwan)</option><option value="RO">Romania</option><option value="RW">Ruanda</option><option value="RU">Russia</option><option value="RE">Réunion</option><option value="EH">Sahara Occidentale</option><option value="KN">Saint Kitts e Nevis</option><option value="PM">Saint Pierre e Miquelon</option><option value="VC">Saint Vincent e Grenadine</option><option value="BL">Saint-Barthélemy</option><option value="MF">Saint-Martin</option><option value="WS">Samoa</option><option value="AS">Samoa Americane</option><option value="SM">San Marino</option><option value="SH">Sant'Elena</option><option value="LC">Santa Lucia</option><option value="ST">Sao Tomé e Principe</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SY">Siria</option><option value="SK">Slovacchia</option><option value="SI">Slovenia</option><option value="SO">Somalia</option><option value="ES">Spagna</option><option value="LK">Sri Lanka</option><option value="FM">Stati Federati di Micronesia</option><option value="US">Stati Uniti d'America</option><option value="PS">Stato di Palestina</option><option value="ZA">Sudafrica</option><option value="SD">Sudan</option><option value="SS">Sudan del Sud</option><option value="SR">Suriname</option><option value="SJ">Svalbard e Jan Mayen</option><option value="SE">Svezia</option><option value="CH">Svizzera</option><option value="SZ">Swaziland</option><option value="TJ">Tagikistan</option><option value="TZ">Tanzania</option><option value="IO">Territori Britannici dell'Oceano Indiano</option><option value="TF">Territori Francesi del Sud</option><option value="TH">Thailandia</option><option value="TL">Timor Est</option><option value="TL">Timor Est</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad e Tobago</option><option value="TN">Tunisia</option><option value="TR">Turchia</option><option value="TM">Turkmenistan</option><option value="TV">Tuvalu</option><option value="UA">Ucraina</option><option value="UG">Uganda</option><option value="HU">Ungheria</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis e Futuna</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
            </div>
        </div>
    </div>
</indirizzo-dataentry>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">IBAN</label>
                                    <input type="text" class="form-control" data-bind="uppercaseText: Beneficiario.Iban">
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">BIC</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Beneficiario.Bic">
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label"></label>
                                    <div class="form-field link-icon">
                                        <span class="link-icon icon-creazioneUtenti link" data-bind="singleClick: $component.ToggleCheckAggiornaAnagrafica">
                                        </span>
                                        <input type="checkbox" data-bind="checked: $component.AggiornaAnagrafica">
                                        <label class="control-label">Aggiorna Anagrafica</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- AGGIUNTIVI BENEFICIARIO -->
                <div class="section">
                    <div class="row link" data-bind="click: $component.BeneficiarioCollapse">
                        <h3 class="titleSection">Dati Aggiuntivi Dipendente</h3>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.BeneficiarioCollapseCss" class="icon-replace icon-collapse active"></div>
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.BeneficiarioBodyVisible" style="display: block;">
                        <datiaggiuntivi-dataentry params="DatiAggiuntivi: Beneficiario.DatiAggiuntivi">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-3" style="padding:0">
                <div class="col-sm-6 col-xs-12" style="padding-left: 0">
                    <label class="control-label">Tipo Soggetto</label>
                    <select class="form-control" data-bind="enable: enable() != 'false', options: TipologieSoggetto, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: DatiAggiuntivi.TipoSoggetto"><option value="">opzionale</option><option value="PF">Persona Fisica</option><option value="PG">Persona Giuridica</option></select>
                </div>
                <div class="col-sm-6 col-xs-12" style="padding-right:0">
                    <label class="control-label">Tipo Codice</label>
                    <select class="form-control" data-bind="enable: DatiAggiuntiviActive, options: TipologieCodice, optionsCaption: '', optionsText: 'V', optionsValue: 'K', value: DatiAggiuntivi.TipoCodice" disabled=""><option value=""></option></select>
                </div>
            </div>
            <div class="col-sm-1 col-xs-12"></div>
            <div class="col-sm-4 col-xs-12">
                <label class="control-label">Descrizione Codice</label>
                <input type="text" class="form-control" data-bind="enable: DescrizioneCodiceActive, value: DatiAggiuntivi.DescrizioneCodice" disabled="">
            </div>
            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label class="control-label">Codice</label>
                <input type="text" class="form-control" data-bind="enable: DatiAggiuntiviActive, uppercaseText: DatiAggiuntivi.CodiceSoggetto" disabled="">
            </div>
        </div>
    </div>
</datiaggiuntivi-dataentry>
                    </div>
                </div>
                <!-- CREDITORE -->
                <div class="section">
                    <div class="row link" data-bind="click: $component.CreditoreCollapse">
                        <h3 class="titleSection">Creditore Effettivo</h3>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.CreditoreCollapseCss" class="icon-replace icon-collapse active"></div>
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.CreditoreBodyVisible" style="display: block;">
                        <div class="row" style="margin-top: 10px">
                            <div class="col-xs-12">
                                <p>Sezione da compilare soltanto se il creditore effettivo è diverso dal beneficiario</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Tipo Anagrafica</label>
                                    <select class="form-control" data-bind="options: $component.TipologieAnagrafica, optionsText: 'V', optionsValue: 'K', value: $component.CreditoreEffettivoAnagraficaModel.TipologiaAnagrafica"><option value="DI">DIPENDENTI</option><option value="FO">FORNITORI</option></select>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Cognome Nome</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Creditore.Denominazione">
                                </div>
                                <div class="col-sm-1 col-xs-12 no-padding">
                                    <label class="control-label">&nbsp;</label>
                                    <span style="display: block" class="icon-replace icon-search active link" data-bind="singleClick: $component.CreditoreEffettivoAnagraficaSearch">&nbsp;</span>
                                </div>
                                <div class="col-sm-3 col-xs-12 no-padding">
                                    <label class="control-label">Codice</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Creditore.Codice">
                                </div>
                            </div>

                        </div>

                        <div data-bind="component: { name: 'anagrafica-search', params: $component.CreditoreEffettivoAnagraficaModel }">
    <div data-bind="visible: Visible" class="modal-layer" style="display: none;">
        <div class="modal-container section" data-bind="with: List" style="top: 20%;">
            <div class="riquadro">
                <div class="clearfix">
                    <div class="flag associaUtente">&nbsp;</div>
                    <h1 data-bind="text: $component.Label">Dipendente</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <label>Ragione Sociale</label>
                    <input type="text" class="form-control" data-bind="value: PagingFilter.Denominazione">
                </div>
                <div class="col-sm-4 col-xs-12">
                    <label>
                        <span>Cod.</span>
                        <span data-bind="text: $component.Label">Dipendente</span>
                    </label>
                    <input type="text" class="form-control" data-bind="value: PagingFilter.Codice">
                </div>
                <div class="col-sm-4 col-xs-12">
                    <label>IBAN</label>
                    <input type="text" class="form-control" data-bind="value: PagingFilter.Iban">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center margin-top10">
                    <input type="button" class="btn btn-primary" value="Cerca" data-bind="singleClick: Search">
                </div>
            </div>
            <div class="row">
                <div class="table-responsive tabSelezioneCC margin-top10">
                    <table class="dataTable table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Ragione Sociale
                                </th>
                                <th>
                                    Comune
                                </th>
                                <th>
                                    IBAN
                                </th>
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: Page"></tbody>
                    </table>
                    <paginatore params="PagedList: $data">
    <div data-bind="visible: PagedList.Page().length > 0 &amp;&amp; PagedList.PageCount() > 1" style="display: none;">
        <!-- ko template: {name: PaginatorTemplate()} -->
    <div class="dataTables_paginate" data-bind="with: PagedList">
        <span data-bind="foreach: ko.utils.range(1, PageCount)">
            <a class="paginate_button current" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)">1</a>
        </span>
    </div>
<!-- /ko -->
    </div>
</paginatore>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-right margin-top10">
                        <input type="button" class="btn btn-primary" value="Chiudi" data-bind="singleClick: $component.ToggleVisible">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                        <indirizzo-dataentry params="Indirizzo: Creditore.Indirizzo">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label class="control-label">Tipo Indirizzo</label>
                <select class="form-control" data-bind="enable: TipoIndirizzoEnable, options: TipologieIndirizzo, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: Indirizzo.TipologiaIndirizzo"><option value="">opzionale</option><option value="PBOX">Indirizzo della casella postale</option><option value="DLVY">Indirizzo di consegna</option><option value="MLTO">Indirizzo di corrispondenza postale</option><option value="BIZZ">Indirizzo di domicilio</option><option value="HOME">Indirizzo di residenza</option><option value="ADDR">Indirizzo postale completo</option></select>
            </div>
            <div class="col-sm-1 col-xs-12"></div>
            <div class="col-sm-4 col-xs-12">
                <label class="control-label">Indirizzo</label>
                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: DatiIndirizzoActive, value: Indirizzo.Via" disabled="">
            </div>
            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label class="control-label">Numero</label>
                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: DatiIndirizzoActive, value: Indirizzo.Numero" disabled="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label class="control-label">Comune</label>
                <input type="text" class="form-control no-placeholder-italic" data-bind="enable: (ComuneActive() || DatiIndirizzoActive()), value: Indirizzo.Comune, attr: {placeholder: comunePlaceholder}" disabled="" placeholder="opzionale">
            </div>
            <div class="col-sm-1 col-xs-12"></div>
            <div class="col-sm-2 col-xs-12">
                <label class="control-label">Cap</label>
                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: DatiIndirizzoActive, value: Indirizzo.Cap" style="width:100px" disabled="">
            </div>
            <div class="col-sm-2 col-xs-12">
                <label class="control-label">Prov.</label>
                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: DatiIndirizzoActive, value: Indirizzo.Provincia" disabled="">
            </div>
            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label class="control-label">Stato</label>
                <select class="form-control" data-bind="enable: DatiIndirizzoActive, options: Nazioni, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: Indirizzo.Nazione" disabled=""><option value="">opzionale</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antartide</option><option value="AG">Antigua e Barbuda</option><option value="SA">Arabia Saudita</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaigian</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BE">Belgio</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BY">Bielorussia</option><option value="MM">Birmania</option><option value="BO">Bolivia</option><option value="BA">Bosnia ed Erzegovina</option><option value="BW">Botswana</option><option value="BR">Brasile</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambogia</option><option value="CM">Camerun</option><option value="CA">Canada</option><option value="CV">Capo Verde</option><option value="TD">Ciad</option><option value="CL">Cile</option><option value="CN">Cina</option><option value="CY">Cipro</option><option value="VA">Città del Vaticano</option><option value="CO">Colombia</option><option value="KP">Corea del Nord</option><option value="KR">Corea del Sud</option><option value="CR">Costa Rica</option><option value="CI">Costa d'Avorio</option><option value="HR">Croazia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="DK">Danimarca</option><option value="DM">Dominica</option><option value="AE">Dubai</option><option value="EC">Ecuador</option><option value="EG">Egitto</option><option value="SV">El Salvador</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Etiopia</option><option value="FJ">Figi</option><option value="PH">Filippine</option><option value="FI">Finlandia</option><option value="FR">Francia</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="GS">Georgia del Sud e isole Sandwich meridionali</option><option value="DE">Germania</option><option value="GH">Ghana</option><option value="JM">Giamaica</option><option value="JP">Giappone</option><option value="GI">Gibilterra</option><option value="DJ">Gibuti</option><option value="JO">Giordania</option><option value="GR">Grecia</option><option value="GD">Grenada</option><option value="GL">Groenlandia</option><option value="GP">Guadalupa</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GQ">Guinea Equatoriale</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="GF">Guyana Francese</option><option value="HT">Haiti</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Irlanda</option><option value="IS">Islanda</option><option value="BV">Isola Bouvet</option><option value="NF">Isola Norfolk</option><option value="CX">Isola del Natale (Christmas Island)</option><option value="IM">Isola di Man</option><option value="BQ">Isole BES</option><option value="KY">Isole Cayman</option><option value="CC">Isole Cocos e Keeling</option><option value="KM">Isole Comore</option><option value="CK">Isole Cook</option><option value="FO">Isole Faer Oer</option><option value="FK">Isole Falkland</option><option value="HM">Isole Heard e McDonald</option><option value="MP">Isole Marianne Settentrionali</option><option value="MH">Isole Marshall</option><option value="PN">Isole Pitcairn</option><option value="SB">Isole Salomone</option><option value="TC">Isole Turks e Caicos</option><option value="VI">Isole Vergini Americane</option><option value="VG">Isole Vergini Britanniche</option><option value="UM">Isole minori esterne degli Stati Uniti</option><option value="AX">Isole Åland</option><option value="IL">Israele</option><option value="IT">Italia</option><option value="JE">Jersey</option><option value="KZ">Kazakistan</option><option value="KE">Kenya</option><option value="KG">Kirghizistan</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="LA">Laos</option><option value="LS">Lesotho</option><option value="LV">Lettonia</option><option value="LB">Libano</option><option value="LR">Liberia</option><option value="LY">Libia</option><option value="LI">Liechtenstein</option><option value="LT">Lituania</option><option value="LU">Lussemburgo</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MV">Maldive</option><option value="MY">Malesia</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MA">Marocco</option><option value="MQ">Martinica</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Messico</option><option value="MD">Moldavia</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MZ">Mozambico</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NO">Norvegia</option><option value="NC">Nuova Caledonia</option><option value="NZ">Nuova Zelanda</option><option value="OM">Oman</option><option value="NL">Paesi Bassi</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua Nuova Guinea</option><option value="PY">Paraguay</option><option value="PE">Perù</option><option value="PF">Polinesia Francese</option><option value="PL">Polonia</option><option value="PR">Porto Rico</option><option value="PT">Portogallo</option><option value="QA">Qatar</option><option value="GB">Regno Unito</option><option value="CZ">Repubblica Ceca</option><option value="CF">Repubblica Centrafricana</option><option value="CD">Repubblica Democratica del Congo</option><option value="CD">Repubblica Democratica del Congo</option><option value="DO">Repubblica Dominicana</option><option value="CG">Repubblica del Congo</option><option value="TW">Repubblica di Cina (Taiwan)</option><option value="RO">Romania</option><option value="RW">Ruanda</option><option value="RU">Russia</option><option value="RE">Réunion</option><option value="EH">Sahara Occidentale</option><option value="KN">Saint Kitts e Nevis</option><option value="PM">Saint Pierre e Miquelon</option><option value="VC">Saint Vincent e Grenadine</option><option value="BL">Saint-Barthélemy</option><option value="MF">Saint-Martin</option><option value="WS">Samoa</option><option value="AS">Samoa Americane</option><option value="SM">San Marino</option><option value="SH">Sant'Elena</option><option value="LC">Santa Lucia</option><option value="ST">Sao Tomé e Principe</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SY">Siria</option><option value="SK">Slovacchia</option><option value="SI">Slovenia</option><option value="SO">Somalia</option><option value="ES">Spagna</option><option value="LK">Sri Lanka</option><option value="FM">Stati Federati di Micronesia</option><option value="US">Stati Uniti d'America</option><option value="PS">Stato di Palestina</option><option value="ZA">Sudafrica</option><option value="SD">Sudan</option><option value="SS">Sudan del Sud</option><option value="SR">Suriname</option><option value="SJ">Svalbard e Jan Mayen</option><option value="SE">Svezia</option><option value="CH">Svizzera</option><option value="SZ">Swaziland</option><option value="TJ">Tagikistan</option><option value="TZ">Tanzania</option><option value="IO">Territori Britannici dell'Oceano Indiano</option><option value="TF">Territori Francesi del Sud</option><option value="TH">Thailandia</option><option value="TL">Timor Est</option><option value="TL">Timor Est</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad e Tobago</option><option value="TN">Tunisia</option><option value="TR">Turchia</option><option value="TM">Turkmenistan</option><option value="TV">Tuvalu</option><option value="UA">Ucraina</option><option value="UG">Uganda</option><option value="HU">Ungheria</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis e Futuna</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
            </div>
        </div>
    </div>
</indirizzo-dataentry>

                        <datiaggiuntivi-dataentry params="DatiAggiuntivi: Creditore.DatiAggiuntivi">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-3" style="padding:0">
                <div class="col-sm-6 col-xs-12" style="padding-left: 0">
                    <label class="control-label">Tipo Soggetto</label>
                    <select class="form-control" data-bind="enable: enable() != 'false', options: TipologieSoggetto, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: DatiAggiuntivi.TipoSoggetto"><option value="">opzionale</option><option value="PF">Persona Fisica</option><option value="PG">Persona Giuridica</option></select>
                </div>
                <div class="col-sm-6 col-xs-12" style="padding-right:0">
                    <label class="control-label">Tipo Codice</label>
                    <select class="form-control" data-bind="enable: DatiAggiuntiviActive, options: TipologieCodice, optionsCaption: '', optionsText: 'V', optionsValue: 'K', value: DatiAggiuntivi.TipoCodice" disabled=""><option value=""></option></select>
                </div>
            </div>
            <div class="col-sm-1 col-xs-12"></div>
            <div class="col-sm-4 col-xs-12">
                <label class="control-label">Descrizione Codice</label>
                <input type="text" class="form-control" data-bind="enable: DescrizioneCodiceActive, value: DatiAggiuntivi.DescrizioneCodice" disabled="">
            </div>
            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label class="control-label">Codice</label>
                <input type="text" class="form-control" data-bind="enable: DatiAggiuntiviActive, uppercaseText: DatiAggiuntivi.CodiceSoggetto" disabled="">
            </div>
        </div>
    </div>
</datiaggiuntivi-dataentry>
                    </div>
                </div>
                <!-- DATI BONIFICO -->
                <div class="section">
                    <div class="row">
                        <h3 class="titleSection">Dati Stipendi SEPA</h3>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Importo</label>
                                    <input type="text" class="form-control" data-bind="numericTextSeparator: Importo">
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0">
                                    <label style="margin-top: 35px; font-weight:100">&nbsp;EUR</label>
                                    
                                    <input type="text" class="form-control" disabled="disabled" data-bind="value: Divisa, visible: false" style="display: none;">
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Codice univoco</label>
                                    <input type="text" class="form-control" data-bind="value: CodiceUnivoco">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding-right: 0; padding-left: 20px">
                                    <label class="control-label" style="margin-left: -20px">Causale codificata ISO</label>
                                    <div class="radio" style="font-weight: normal; margin-top: 0">
                                        <input type="radio" name="causale" value="CausaleIso" data-bind="checked: $component.CurrentCausale">
                                        <select class="form-control" data-bind="enable: $component.CausaleIsoActive, options: $component.TipologieCausaleIso, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: CausaleIso"><option value="">Seleziona</option><option value="PENS">PENS - Pag. di pensioni</option><option value="SALA">SALA - Pag. di salari</option></select>
                                    </div>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                                    <label class="control-label" style="margin-left: -20px">Causale codificata libera</label>
                                    <div class="radio" style="font-weight: normal; margin-top: 0">
                                        <input type="radio" name="causale" value="CausaleLibera" data-bind="checked: $component.CurrentCausale">
                                        <input type="text" class="form-control" data-bind="enable: $component.CausaleLiberaActive, value: CausaleLibera" disabled="">
                                    </div>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Descrizione causale</label>
                                    <textarea placeholder="opzionale" class="form-control no-placeholder-italic" data-bind="value: DescrizioneRiconcilazione"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FINALITA' -->
                <div class="section">
                    <div class="row link" data-bind="click: $component.FinalitaCollapse">
                        <h3 class="titleSection">Finalità Pagamento</h3>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.FinalitaCollapseCss " class="icon-replace icon-collapse active"></div>
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.FinalitaBodyVisible" style="display: block;">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding-right: 0; padding-left: 20px">
                                    <label class="control-label" style="margin-left: -20px">Finalità del pagamento codificata</label>
                                    <div class="radio" style="font-weight: normal;  margin-top: 0">
                                        <input type="radio" name="finalita" value="FinalitaCodificata" data-bind="checked: $component.CurrentFinalita">
                                        <select class="form-control" data-bind="enable: $component.FinalitaCodificataActive, options: $component.TipologieFinalitaPagamento, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: FinalitaPagamento.Codice"><option value="">opzionale</option><option value="PENS">PENS - PensionPayment</option><option value="SALA">SALA - SalaryPayment</option></select>
                                    </div>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                                    <label class="control-label" style="margin-left: -20px">Finalità del pagamento libera</label>
                                    <div class="radio" style="font-weight: normal;  margin-top: 0">
                                        <input type="radio" name="finalita" value="FinalitaLibera" data-bind="checked: $component.CurrentFinalita">
                                        <input type="text" placeholder="opzionale" class="form-control no-placeholder-italic" data-bind="enable: $component.FinalitaLiberaActive, value: FinalitaPagamento.DescrizioneLibera" disabled="">
                                    </div>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ESITO AL BENEFICIARIO -->
                <div class="section">
                    <div class="row">
                        <h3 class="titleSection">Esito al beneficiario</h3>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-sm-3 col-xs-12" style="padding-right: 0; padding-left: 20px">
                                <label class="checkbox" style="margin-top: 30px">
                                    <input type="checkbox" data-bind="enable: $component.EsitoAlBeneficiarioModalitaEnable, checked: $component.InviaEsitoAlBeneficiario">
                                    <label style="font-weight: normal">Esito al beneficiario</label>
                                </label>
                            </div>
                            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                            <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                                <label class="control-label">Destinatario esito</label>
                                <input type="text" class="form-control" data-bind="enable: $component.EsitoAlBeneficiarioEnable, value: Esito.NomeSoggetto" disabled="">
                            </div>
                            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                            <div class="col-sm-3 col-xs-12" style="padding: 0">
                                <div class="col-sm-5" style="padding-left: 0">
                                    <label class="control-label">Modalità</label>
                                    <select class="form-control" data-bind="enable: $component.EsitoAlBeneficiarioEnable, options: $component.ModalitaEsito, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: Esito.ModalitaEsito" disabled=""><option value="">Seleziona</option><option value="CBI">CUC</option><option value="EMAL">E-Mail</option></select>
                                </div>
                                <div class="col-sm-7" style="padding-right: 0">
                                    <label class="control-label">CUC/E-mail</label>
                                    <input type="text" class="form-control" data-bind="enable: $component.EsitoAlBeneficiarioEnable, value: Esito.Cuc" disabled="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CVS -->
                <div class="section">
                    <div class="row link" data-bind="click: $component.CvsCollapse">
                        <h3 class="titleSection">
                            CVS
                        </h3>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.CvsCollapseCss " class="icon-replace icon-collapse active"></div>
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.CvsBodyVisible" style="display: block;">
                        <cvs-dataentry params="CvsObsArray: Cvs">
    <div style="margin-bottom: 10px" data-bind="foreach: Cvs"></div>
    <div class="text-right" style="padding-right: 10px">
        <input type="button" class="btn" value="Aggiungi CVS" data-bind="singleClick: AddCvs, enable: AddCvsEnabled">
    </div>
</cvs-dataentry>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUBMIT ACTIONS -->
        <div class="text-right">
            <input type="button" class="btn btn-primary" value="Inserisci" data-bind="visible: CreateIsVisible, singleClick: Create">
            <div data-bind="visible: !CreateIsVisible()" style="display: none;">
                <input type="button" class="btn btn-primary" value="Annulla" data-bind="singleClick: Cancel">
                <input type="button" class="btn btn-primary" value="Conferma" data-bind="singleClick: Update">
            </div>
        </div>
    </div>
</div>
</div>

<div id="60d131c3624941b98e205667e7a7ef52_4">
    
<div id="60d131c3624941b98e205667e7a7ef52_7" class="hide">
    <div class="riquadro">
        
        <div data-bind="html: TitleBlock"><div class="clearfix"><div class="flag disposizioneBonifico">&nbsp;</div><h1>Stipendi: inserimento</h1></div></div>
        
        <validation-messages params="Validation: Validation, TopicId: '60d131c3624941b98e205667e7a7ef52_8'">
    <div data-bind="visible: ValidationSectionVisible" style="display: none;">
        <div class="messagePanel error" style="display: block">
            <h3 class="titleSection">
                Errori
            </h3>
            <ul data-bind="foreach: Validation"></ul>
        </div>
    </div>
</validation-messages>
        
        <!-- ko foreach: Components --><!-- /ko -->
        
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Conferma operazione
                </h3>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-6">
                    <div>
                        Per proseguire l'operazione è necessario inserire il codice di 6 cifre inviato via SMS al numero
                        <span data-bind="text: Phone"></span>
                        <br>
                        <span style="display: none">
                            Restano a disposizione <span data-bind="text: AttemptsLeft"></span> tentativi
                        </span>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="otp-phone">&nbsp;</div>
                </div>
                <div class="col-xs-4">
                    <input type="text" class="col-md-6" style="margin-top: 20px;" data-bind="textInput: ChallengeCode, hasFocus: CodeFocus, enable: CanResubmit">
                </div>
            </div>
        </div>
    </div>
    <!-- SUBMIT ACTIONS -->
    <div class="text-right">
        <input type="button" class="btn btn-primary" value="Conferma" data-bind="singleClick: Submit, enable: SubmitEnable" disabled="">
    </div>
</div>

<script>
    function challengeViewModel(params) {
        var self = this;

        // params
        self.SubmitUrl = params.SubmitUrl;
        self.TitleBlock = params.TitleBlock; // possibilità di aggiungere un blocco di html statico come titolo
        self.Components = params.Components || ko.observableArray(); // possibilità di iniettare dei component
        var componentTopicId = params.TopicId || '';
        var beginTopicId = params.BeginTopicId || '';

        // publish event name - you can customize the topic
        var VALIDATION_ERROR = componentTopicId + 'challenge.VALIDATION_ERROR';
        var SUCCESS = componentTopicId + 'challenge.SUCCESS';

        // subscribe event name
        var CHALLENGE_BEGIN = beginTopicId + 'validation-messages.CHALLENGE';
        var CHALLENGE_CONTINUE = '60d131c3624941b98e205667e7a7ef52_8validation-messages.CHALLENGE';

        // model
        self.CanResubmit = ko.observable(true);
        self.Validation = ko.observableArray([]);
        self.ChallengeCode = ko.observable();
        self.CodeFocus = ko.observable();
        self.ChallengeId = ko.observable();
        self.AttemptsLeft = ko.observable();
        self.Phone = ko.observable();
        self.Cart = ko.observable(null);

        // visibility
        self.Show = function () {
            $('#60d131c3624941b98e205667e7a7ef52_7').removeClass('hide');
        };
        self.Hide = function () {
            $('#60d131c3624941b98e205667e7a7ef52_7').addClass('hide');
        };
        // actions
        var _noPhone = '*********';
        var _reset = function () {
            self.Validation([]);
            self.ChallengeCode(null);
            self.CodeFocus(true);

            self.ChallengeId(null);
            self.Phone(_noPhone);
            self.AttemptsLeft(null);
        };
        var _init = function (data) {
            _reset();

            self.ChallengeId(data.ChallengeId);
            self.Phone(data.ChallengeDevice || _noPhone);
            self.AttemptsLeft(data.AttemptsLeft || null);

            if (App.Core.GetCartInfoSessionStorage()) {
                self.Cart(App.Core.GetCartInfoSessionStorage());
            }

            self.Show();
        }
        var _canResubmit = function (messages) {
            var result = ko.utils.arrayFirst(messages, function (item) {
                // il validationMessage è troppo povero di informazioni
                return item.ErrorMessage == 'Operazione non concessa per motivi di sicurezza.';
            });
            
            return result == null || result == undefined;
        }

        // se qualcuno scatena l'evento allora il challengeViewModel si setta su uno stato iniziale
        var beginEvent = ko.postbox.subscribe(CHALLENGE_BEGIN, function (data) {
            _init(data);
        });

        // se il component validation-messages di questo viewModel scatena un evento di challenge significa che 
        // il transaction monitor vuole che si resti nella fase di challenge
        var continueEvent = ko.postbox.subscribe(CHALLENGE_CONTINUE, function (data) {
            _init(data);

            self.Validation.push(new App.Core.ValidationMessage({ ErrorMessage: 'Il codice inserito non è corretto' }));
        });

        self.SubmitEnable = ko.computed(function () {
            var code = self.ChallengeCode() || '';

            return code.length > 0 && self.CanResubmit();
        });

        // azione di sblocco della fase di challenge
        self.Submit = function () {
            var data = {
                data: {
                    ChallengeId: self.ChallengeId(),
                    ChallengeResponse: self.ChallengeCode()
                }
            };

            if (self.Cart()) {
                data.cart = self.Cart();
            }
            var challengeAttemptData = ko.toJSON(data);

            Http.PostWithTxMon(ko.unwrap(self.SubmitUrl), challengeAttemptData)
                .success(function (data) {
                    var result = new App.Core.StandardJsonResult(data);

                    if (result.HasError) {
                        _reset();

                        self.Validation(result.Messages);

                        self.CanResubmit(_canResubmit(result.Messages));

                        // pubblico l'evento e le informazioni che hanno scaturito l'errore
                        ko.postbox.publish(VALIDATION_ERROR, data);
                    } else {
                        // la fase di challenge è finita con esito positivo
                        ko.postbox.publish(SUCCESS, data);
                    }
                }).error(function (xhr, textStatus, errorThrown) {
                    self.Validation(xhr.responseJSON.Messages);
                    ko.postbox.publish(VALIDATION_ERROR, xhr.responseJSON);
                });
        };

        self.dispose = function () {
            beginEvent.dispose();

            continueEvent.dispose();
        };

    }
</script>
</div>


<script type="text/javascript">
    var PROFILABLE_DISPOSIZIONI = {"CAUSALE_ISO":[{"K":"PENS","V":"PENS - Pag. di pensioni"},{"K":"SALA","V":"SALA - Pag. di salari"}],"CAUSALE_VALUTARIA":[{"K":"9984","V":"Acquisti/vendite tra banche residenti di altre attività sull'estero MV - 9984"},{"K":"9983","V":"Acquisti/vendite tra banche residenti di valori mobiliari e derivati MV - 9983"},{"K":"9850","V":"Acquisti/vendite, da/a banche residenti, di altre attività sull'estero MV/CVS(f) - 9850"},{"K":"9851","V":"Acquisti/vendite, da/a banche residenti, di altre attività sull'estero MV/CVS(f) - 9851"},{"K":"9849","V":"Acquisti/vendite, da/a banche residenti, di beni e diritti immobiliari MV/CVS(f) - 9849"},{"K":"9842","V":"Acquisti/vendite, da/a banche residenti, di partecipazioni MV/CVS(f) - 9842"},{"K":"9843","V":"Acquisti/vendite, da/a banche residenti, di partecipazioni MV/CVS(f) - 9843"},{"K":"9848","V":"Acquisti/vendite, da/a banche residenti, di strumenti derivati MV/CVS(f) - 9848"},{"K":"9846","V":"Acquisti/vendite, da/a banche residenti, di strumenti di mercato monetario MV/CVS(f) - 9846"},{"K":"9847","V":"Acquisti/vendite, da/a banche residenti, di strumenti di mercato monetario MV/CVS(f) - 9847"},{"K":"9844","V":"Acquisti/vendite, da/a banche residenti, di titoli azionari MV/CVS(f) - 9844"},{"K":"9845","V":"Acquisti/vendite, da/a banche residenti, di titoli obbligazionari MV/CVS(f) - 9845"},{"K":"23","V":"Acquisto di merce all'estero che non viene importata CVS(m) - 23"},{"K":"21","V":"Acquisto di merce all'estero per integrazione forniture CVS(m) - 21"},{"K":"22","V":"Acquisto di merce all'estero per la rivendita in transito (transito acquisto) CVS(m) - 22"},{"K":"7032","V":"Acquisto/vendita contro euro di BB in valuta con banche residenti MV - 7032"},{"K":"7031","V":"Acquisto/vendita contro euro di BB in valuta con cambiavalute residenti MV - 7031"},{"K":"7030","V":"Acquisto/vendita contro euro di BB in valuta con clientela residente MV - 7030"},{"K":"7033","V":"Acquisto/vendita contro euro di BB in valuta con non residenti MV - 7033"},{"K":"7034","V":"Acquisto/vendita di BB in valuta con banche residenti MV - 7034"},{"K":"7035","V":"Acquisto/vendita di BB in valuta con non residenti MV - 7035"},{"K":"9960","V":"Adeguamento valore contabile crediti MV - 9960"},{"K":"8661","V":"Altre attività a breve termine (investimenti esteri)- banche MV - 8661"},{"K":"661","V":"Altre attività a breve termine (investimenti esteri)- non banche MV/CVS(f) - 661"},{"K":"8660","V":"Altre attività a breve termine (investimenti italiani) - banche MV - 8660"},{"K":"660","V":"Altre attività a breve termine (investimenti italiani)- non banche MV/CVS(f) - 660"},{"K":"8663","V":"Altre attività a medio e lungo termine (investimenti esteri) - banche MV - 8663"},{"K":"663","V":"Altre attività a medio e lungo termine (investimenti esteri)- non banche MV/CVS(f) - 663"},{"K":"8662","V":"Altre attività a medio e lungo termine (investimenti italiani) -banche MV - 8662"},{"K":"662","V":"Altre attività a medio e lungo termine (investimenti italiani)- non banche MV/CVS(f) - 662"},{"K":"6619","V":"Altre transazioni governative MV/CVS(nm) - 6619"},{"K":"628","V":"Altri regolamenti connessi a strumenti derivati MV/CVS(f) - 628"},{"K":"629","V":"Altri regolamenti connessi a strumenti derivati MV/CVS(f) - 629"},{"K":"8629","V":"Altri regolamenti connessi a strumenti derivati emessi da non residenti - banche MV - 8629"},{"K":"8628","V":"Altri regolamenti connessi a strumenti derivati emessi da residenti - banche MV - 8628"},{"K":"1112","V":"Altri regolamenti per tecnologia MV/CVS(nm) - 1112"},{"K":"6708","V":"Altri servizi agricoli ed estrattivi MV/CVS(nm) - 6708"},{"K":"6685","V":"Altri servizi aziendali MV/CVS(nm) - 6685"},{"K":"1306","V":"Altri servizi culturali MV/CVS(nm) - 1306"},{"K":"6709","V":"Altri servizi forniti tra imprese controllate MV/CVS(nm) - 6709"},{"K":"6711","V":"Altri trasferimenti in conto capitale MV - 6711"},{"K":"642","V":"Ammortamenti di prestiti a breve termine - non banche MV/CVS(f) - 642"},{"K":"643","V":"Ammortamenti di prestiti a medio e lungo termine - non banche MV/CVS(f) - 643"},{"K":"8642","V":"Ammortamenti di prestiti e finanziamenti a breve termine con non residenti - banche MV - 8642"},{"K":"8643","V":"Ammortamenti di prestiti e finanziamenti a medio e lungo termine - banche MV - 8643"},{"K":"9913","V":"Arbitraggi MV - 9913"},{"K":"6686","V":"Assegni, effetti, altri valori cambiari non onorati MV - 6686"},{"K":"1108","V":"Assistenza tecnica connessa a cessioni e diritti di sfruttamento MV/CVS(nm) - 1108"},{"K":"8602","V":"Assunzione di partecipazioni al capitale di OO.II. non monetari - banche MV - 8602"},{"K":"602","V":"Assunzione di partecipazioni al capitale di OO.II. non monetari - non banche MV/CVS(f) - 602"},{"K":"600","V":"Assunzione di partecipazioni non rappresentate da titoli - non banche MV/CVS(f) - 600"},{"K":"8600","V":"Assunzione di partecipazioni rappresentate o meno da titoli - banche MV - 8600"},{"K":"1307","V":"Audiovisivi e servizi collegati MV/CVS(nm) - 1307"},{"K":"204","V":"Biglietti aerei MV/CVS(nm) - 204"},{"K":"202","V":"Biglietti marittimi MV/CVS(nm) - 202"},{"K":"212","V":"Biglietti terrestri MV/CVS(nm) - 212"},{"K":"218","V":"Bunkeraggi e provviste di bordo MV/CVS(nm) - 218"},{"K":"6630","V":"Canoni e fitti MV/CVS(nm) - 6630"},{"K":"8603","V":"Cessione di partecipazioni al capitale di OO.II. non monetari - banche MV - 8603"},{"K":"603","V":"Cessione di partecipazioni al capitale di OO.II. non monetari - non banche MV/CVS(f) - 603"},{"K":"601","V":"Cessione di partecipazioni non rappresentate da titoli - non banche MV/CVS(f) - 601"},{"K":"8601","V":"Cessione di partecipazioni rappresentate o meno da titoli - banche MV - 8601"},{"K":"1100","V":"Cessioni di brevetti MV/CVS(nm) - 1100"},{"K":"1106","V":"Cessioni di invenzioni MV/CVS(nm) - 1106"},{"K":"1102","V":"Cessioni di know how MV/CVS(nm) - 1102"},{"K":"1118","V":"Cessioni di marchi di fabbrica, modelli e disegni MV/CVS(nm) - 1118"},{"K":"8706","V":"Commissioni e competenze (banche) MV - 8706"},{"K":"9855","V":"Commissioni e competenze in valuta addebitate/accreditate a controparte residente MV - 9855"},{"K":"6632","V":"Compensi di mediazione MV/CVS(nm) - 6632"},{"K":"6633","V":"Compensi per contratti d'agenzia MV/CVS(nm) - 6633"},{"K":"6634","V":"Compensi per contratti di commissione MV/CVS(nm) - 6634"},{"K":"6706","V":"Compensi per servizi finanziari MV/CVS(nm) - 6706"},{"K":"6631","V":"Compensi vari MV/CVS(nm) - 6631"},{"K":"6620","V":"Contributi da/a Organismi Internazionali MV/CVS(nm) - 6620"},{"K":"6605","V":"Contributi previdenziali MV/CVS(nm) - 6605"},{"K":"3660","V":"D.L. 25.9.01 n.350 - Altre attività a breve termine (investimenti italiani)- non banche MV/CVS(f) - 3660"},{"K":"3662","V":"D.L. 25.9.01 n.350 - Altre attività a medio e lungo termine (investimenti italiani)- non banche MV/CVS(f) - 3662"},{"K":"3629","V":"D.L. 25.9.01 n.350 - Altri regolamenti connessi a strumenti derivati MV/CVS(f) - 3629"},{"K":"3642","V":"D.L. 25.9.01 n.350 - Ammortamenti di prestiti a breve termine - non banche MV/CVS(f) - 3642"},{"K":"3643","V":"D.L. 25.9.01 n.350 - Ammortamenti di prestiti a medio e lungo termine - non banche MV/CVS(f) - 3643"},{"K":"3601","V":"D.L. 25.9.01 n.350 - Cessione di partecipazioni non rappresentate da titoli - non banche MV/CVS(nr) - 3601"},{"K":"3609","V":"D.L. 25.9.01 n.350 - Disinvestimenti di strumenti mercato monetario con codifica ISIN - non banche MV/CVS(nr) - 3609"},{"K":"3611","V":"D.L. 25.9.01 n.350 - Disinvestimenti di strumenti mercato monetario senza codifica ISIN - non banche MV/CVS(nr) - 3611"},{"K":"3605","V":"D.L. 25.9.01 n.350 - Disinvestimenti di titoli azionari e quote di fondi comuni - non banche MV/CVS(nr) - 3605"},{"K":"3607","V":"D.L. 25.9.01 n.350 - Disinvestimenti di titoli obbligazionari - non banche MV/CVS(nr) - 3607"},{"K":"3651","V":"D.L. 25.9.01 n.350 - Disinvestimenti in beni e diritti immobiliari - non banche MV/CVS(f) - 3651"},{"K":"3627","V":"D.L. 25.9.01 n.350 - Liquidazione per differenza su altri strumenti derivati MV/CVS(f) - 3627"},{"K":"3632","V":"D.L. 25.9.01 n.350 - Liquidazione per differenza su strumenti derivati MV/CVS(f) - 3632"},{"K":"3622","V":"D.L. 25.9.01 n.350 - Margini iniziali su strumenti derivati trattati su mercati esteri - non banche MV/CVS(f) - 3622"},{"K":"3652","V":"D.L. 25.9.01 n.350 - Movimentazione C/C e depositi all'estero di residenti - non banche MV/CVS(f) - 3652"},{"K":"3625","V":"D.L. 25.9.01 n.350 - Premi su strumenti derivati emessi da non residenti - non banche MV/CVS(f) - 3625"},{"K":"3645","V":"D.L. 25.9.01 n.350 - Riporti e pronti contro termine su titoli esteri (estinzioni) - non banche MV/CVS(f) - 3645"},{"K":"3647","V":"D.L. 25.9.01 n.350 - Riporti e pronti contro termine su titoli italiani (estinzioni) - non banche MV/CVS(f) - 3647"},{"K":"3308","V":"D.L. 25.9.01 n.350 - Versamento di BB in euro e valuta MV - 3308"},{"K":"3310","V":"D.L. 25.9.01 n.350 - Versamento di mezzi di pagamento in euro e valuta MV - 3310"},{"K":"8528","V":"Dietimi regolati con non residenti su valori mobiliari emessi da non residenti - banche MV - 8528"},{"K":"528","V":"Dietimi regolati con non residenti su valori mobiliari emessi da non residenti - non banche MV/CVS(nm) - 528"},{"K":"8527","V":"Dietimi regolati con non residenti su valori mobiliari emessi da residenti - banche MV/CVS(nm) - 8527"},{"K":"527","V":"Dietimi regolati con non residenti su valori mobiliari emessi da residenti - non banche MV/CVS(nm) - 527"},{"K":"9856","V":"Dietimi regolati con residenti su valori mobiliari emessi da non residenti MV/CVS(nm) - 9856"},{"K":"1203","V":"Diritti d'autore - altri MV/CVS(nm) - 1203"},{"K":"1202","V":"Diritti d'autore - opere letterarie MV/CVS(nm) - 1202"},{"K":"1201","V":"Diritti d'autore - opere musicali MV/CVS(nm) - 1201"},{"K":"1305","V":"Diritti d'immagine MV/CVS(nm) - 1305"},{"K":"1101","V":"Diritti di sfruttamento di brevetti MV/CVS(nm) - 1101"},{"K":"1117","V":"Diritti di sfruttamento di marchi di fabbrica, modelli, disegni e know-how MV/CVS(nm) - 1117"},{"K":"8609","V":"Disinvestimenti di strumenti mercato monetario con codifica ISIN - banche (2) MV/CVS(nr) - 8609"},{"K":"609","V":"Disinvestimenti di strumenti mercato monetario con codifica ISIN - non banche MV/CVS(f) - 609"},{"K":"8611","V":"Disinvestimenti di strumenti mercato monetario senza codifica ISIN - banche (2) MV/CVS(nr) - 8611"},{"K":"611","V":"Disinvestimenti di strumenti mercato monetario senza codifica ISIN - non banche MV/CVS(f) - 611"},{"K":"8605","V":"Disinvestimenti di titoli azionari e quote di fondi comuni - banche (2) MV/CVS(nr) - 8605"},{"K":"605","V":"Disinvestimenti di titoli azionari e quote di fondi comuni - non banche MV/CVS(f) - 605"},{"K":"8607","V":"Disinvestimenti di titoli obbligazionari - banche (2) MV/CVS(nr) - 8607"},{"K":"607","V":"Disinvestimenti di titoli obbligazionari - non banche MV/CVS(f) - 607"},{"K":"8651","V":"Disinvestimenti in beni e diritti immobiliari - banche MV - 8651"},{"K":"651","V":"Disinvestimenti in beni e diritti immobiliari - non banche MV/CVS(f) - 651"},{"K":"8521","V":"Dividendi - banche MV - 8521"},{"K":"521","V":"Dividendi - non banche MV/CVS(nm) - 521"},{"K":"640","V":"Erogazioni di prestiti a breve termine - non banche MV/CVS(f) - 640"},{"K":"641","V":"Erogazioni di prestiti a medio e lungo termine - non banche MV/CVS(f) - 641"},{"K":"8640","V":"Erogazioni di prestiti e finanziamenti a breve termine con non residenti - banche MV - 8640"},{"K":"8641","V":"Erogazioni di prestiti e finanziamenti a medio e lungo termine - banche MV - 8641"},{"K":"8670","V":"Escussione fidejussioni per operazioni correnti mercantili - banche MV - 8670"},{"K":"670","V":"Escussione fidejussioni per operazioni correnti mercantili - non banche MV/CVS(nm) - 670"},{"K":"8671","V":"Escussione fidejussioni per operazioni correnti non mercantili - banche MV - 8671"},{"K":"671","V":"Escussione fidejussioni per operazioni correnti non mercantili - non banche MV/CVS(nm) - 671"},{"K":"8672","V":"Escussione fidejussioni per operazioni finanziarie - banche MV - 8672"},{"K":"672","V":"Escussione fidejussioni per operazioni finanziarie - non banche MV/CVS(nm) - 672"},{"K":"8673","V":"Escussione fidejussioni per operazioni interne o estero / estero - banche MV - 8673"},{"K":"673","V":"Escussione fidejussioni per operazioni interne o estero / estero - non banche MV/CVS(nm) - 673"},{"K":"30","V":"Esportazione in definitiva CVS(m) - 30"},{"K":"31","V":"Esportazione in leasing CVS(m) - 31"},{"K":"32","V":"Esportazione per esecuzione di lavori all'estero CVS(m) - 32"},{"K":"33","V":"Esportazione temporanea per lavorazione per conto di residenti CVS(m) - 33"},{"K":"9815","V":"Finanziamenti in valuta a residenti per altri motivi MV - 9815"},{"K":"9814","V":"Finanziamenti in valuta a residenti per esportazioni di beni e servizi MV - 9814"},{"K":"9813","V":"Finanziamenti in valuta a residenti per importazioni di beni e servizi MV - 9813"},{"K":"9820","V":"Finanziamenti in valuta passati a sofferenza / trasformati in partecipazione MV - 9820"},{"K":"1110","V":"Formazione del personale MV/CVS(nm) - 1110"},{"K":"10","V":"Importazione in definitiva CVS(m) - 10"},{"K":"11","V":"Importazione in leasing CVS(m) - 11"},{"K":"13","V":"Importazione in temporanea (o in regime di sospensione fiscale) CVS(m) - 13"},{"K":"15","V":"Importazioni temporanee diverse CVS(m) - 15"},{"K":"6636","V":"Imposte e tasse MV/CVS(nm) - 6636"},{"K":"9981","V":"Incasso di effetti a carico di non residenti scontati a residenti MV - 9981"},{"K":"6675","V":"Indennizzi SACE MV/CVS(nm) - 6675"},{"K":"6638","V":"Indennizzi, penali, risarcimento danni MV/CVS(nm) - 6638"},{"K":"6661","V":"Ingaggi e premi a sportivi MV/CVS(nm) - 6661"},{"K":"524","V":"Interessi su depositi - non banche MV/CVS(nm) - 524"},{"K":"8524","V":"Interessi su depositi e conti - banche MV - 8524"},{"K":"512","V":"Interessi su prestiti - non banche MV/CVS(nm) - 512"},{"K":"8512","V":"Interessi su prestiti e finanziamenti - banche MV - 8512"},{"K":"9854","V":"Interessi, redditi, dividendi in valuta con controparte residente MV - 9854"},{"K":"8650","V":"Investimenti in beni e diritti immobiliari - banche MV - 8650"},{"K":"650","V":"Investimenti in beni e diritti immobiliari - non banche MV/CVS(f) - 650"},{"K":"8608","V":"Investimenti in strumenti mercato monetario con codifica ISIN - banche (1) MV/CVS(nr) - 8608"},{"K":"608","V":"Investimenti in strumenti mercato monetario con codifica ISIN - non banche MV/CVS(f) - 608"},{"K":"8610","V":"Investimenti in strumenti mercato monetario senza codifica ISIN - banche (1) MV/CVS(nr) - 8610"},{"K":"610","V":"Investimenti in strumenti mercato monetario senza codifica ISIN - non banche MV/CVS(f) - 610"},{"K":"8604","V":"Investimenti in titoli azionari e quote di fondi comuni - banche (1) MV/CVS(nr) - 8604"},{"K":"604","V":"Investimenti in titoli azionari e quote di fondi comuni - non banche MV/CVS(f) - 604"},{"K":"8606","V":"Investimenti in titoli obbligazionari - banche (1) MV/CVS(nr) - 8606"},{"K":"606","V":"Investimenti in titoli obbligazionari - non banche MV/CVS(f) - 606"},{"K":"1109","V":"Invio di tecnici ed esperti MV/CVS(nm) - 1109"},{"K":"106","V":"Lavorazioni per conto MV - 106"},{"K":"6701","V":"Lavori e impianti all'estero MV/CVS(nm) - 6701"},{"K":"6702","V":"Lavori e impianti in Italia MV/CVS(nm) - 6702"},{"K":"114","V":"Leasing (non banche) MV - 114"},{"K":"8114","V":"Leasing finanziario (banche) MV - 8114"},{"K":"8115","V":"Leasing operativo (banche) MV - 8115"},{"K":"8626","V":"Liquidazione per differenza su altri strumenti derivati MV - 8626"},{"K":"8627","V":"Liquidazione per differenza su altri strumenti derivati MV - 8627"},{"K":"626","V":"Liquidazione per differenza su altri strumenti derivati MV/CVS(f) - 626"},{"K":"627","V":"Liquidazione per differenza su altri strumenti derivati MV/CVS(f) - 627"},{"K":"8631","V":"Liquidazione per differenza su strumenti derivati MV - 8631"},{"K":"8632","V":"Liquidazione per differenza su strumenti derivati MV - 8632"},{"K":"631","V":"Liquidazione per differenza su strumenti derivati MV/CVS(f) - 631"},{"K":"632","V":"Liquidazione per differenza su strumenti derivati MV/CVS(f) - 632"},{"K":"7051","V":"MP emessi da non residenti in euro e valuta negoziati contro euro con cambiavalute residenti MV - 7051"},{"K":"7053","V":"MP emessi da non residenti in euro e valuta negoziati contro euro con non residenti MV - 7053"},{"K":"7050","V":"MP emessi da non residenti in euro e valuta negoziati contro euro con residenti MV - 7050"},{"K":"7054","V":"MP emessi da non residenti in euro e valuta versati su conti di non residenti MV - 7054"},{"K":"7052","V":"MP emessi da non residenti in euro e valuta versati su conti di residenti MV - 7052"},{"K":"7055","V":"MP emessi da residenti in euro e valuta negoziati contro euro con non residenti MV - 7055"},{"K":"7056","V":"MP emessi da residenti in euro e valuta versati su conti di non residenti MV - 7056"},{"K":"9966","V":"Mancato esercizio di opzioni MV - 9966"},{"K":"1113","V":"Manutenzione e riparazione computer MV/CVS(nm) - 1113"},{"K":"8621","V":"Margini giornalieri su strumenti derivati emessi da non residenti - banche MV - 8621"},{"K":"621","V":"Margini giornalieri su strumenti derivati emessi da non residenti - non banche MV/CVS(f) - 621"},{"K":"620","V":"Margini giornalieri su strumenti derivati emessi da residenti - non banche MV/CVS(f) - 620"},{"K":"8622","V":"Margini iniziali su strumenti derivati trattati su mercati esteri - banche MV - 8622"},{"K":"622","V":"Margini iniziali su strumenti derivati trattati su mercati esteri - non banche MV/CVS(f) - 622"},{"K":"623","V":"Margini iniziali su strumenti derivati trattati su mercato italiano - non banche MV/CVS(f) - 623"},{"K":"652","V":"Movimentazione C/C e depositi all'estero di residenti - non banche MV/CVS(f) - 652"},{"K":"8694","V":"Movimentazione di conti \"loro\" MV - 8694"},{"K":"8692","V":"Movimentazione di conti \"nostri\" MV - 8692"},{"K":"8684","V":"Movimentazione di depositi attivi a breve termine - banche MV - 8684"},{"K":"8686","V":"Movimentazione di depositi attivi a medio/lungo termine - banche MV - 8686"},{"K":"8685","V":"Movimentazione di depositi passivi a breve termine - banche MV - 8685"},{"K":"8687","V":"Movimentazione di depositi passivi a medio/lungo termine - banche MV - 8687"},{"K":"9980","V":"Negoziazioni con non residenti di effetti a carico di residenti MV - 9980"},{"K":"9901","V":"Negoziazioni valuta contro euro con non residenti MV - 9901"},{"K":"9905","V":"Negoziazioni valuta contro euro con residenti MV - 9905"},{"K":"203","V":"Noli e noleggi aerei MV/CVS(nm) - 203"},{"K":"201","V":"Noli e noleggi marittimi MV/CVS(nm) - 201"},{"K":"205","V":"Noli e noleggi terrestri MV/CVS(nm) - 205"},{"K":"207","V":"Noli e noleggi vari MV/CVS(nm) - 207"},{"K":"664","V":"Operazioni di non residenti sul mercato mobiliare italiano MV/CVS(f) - 664"},{"K":"8664","V":"Operazioni di non residenti sul mercato mobiliare italiano MV/CVS(f) - 8664"},{"K":"6612","V":"Operazioni di transito MV - 6612"},{"K":"7010","V":"Operazioni di valore inferiore a 12.500 euro (soglia di esenzione) MV - 7010"},{"K":"8110","V":"Oro non monetario (banche) MV - 8110"},{"K":"6687","V":"Parcelle professionali MV/CVS(nm) - 6687"},{"K":"6601","V":"Pensioni MV/CVS(nm) - 6601"},{"K":"6690","V":"Perdite di esercizio MV/CVS(nm) - 6690"},{"K":"6716","V":"Premi lordi su altre assicurazioni MV/CVS(nm) - 6716"},{"K":"6714","V":"Premi lordi su assicurazioni trasporto merci MV/CVS(nm) - 6714"},{"K":"6703","V":"Premi lordi su assicurazioni vita e fondi pensione MV/CVS(nm) - 6703"},{"K":"6718","V":"Premi lordi su riassicurazioni MV/CVS(nm) - 6718"},{"K":"8625","V":"Premi su strumenti derivati emessi da non residenti - banche MV - 8625"},{"K":"625","V":"Premi su strumenti derivati emessi da non residenti - non banche MV/CVS(f) - 625"},{"K":"8624","V":"Premi su strumenti derivati emessi da residenti - banche MV/CVS(nr) - 8624"},{"K":"624","V":"Premi su strumenti derivati emessi da residenti - non banche MV/CVS(f) - 624"},{"K":"6713","V":"Proventi non classificati MV - 6713"},{"K":"6688","V":"Recupero crediti MV/CVS(nm) - 6688"},{"K":"8525","V":"Redditi su altri investimenti - banche MV - 8525"},{"K":"525","V":"Redditi su altri investimenti - non banche MV/CVS(nm) - 525"},{"K":"8522","V":"Redditi su altri titoli obbligazionari - banche MV - 8522"},{"K":"522","V":"Redditi su altri titoli obbligazionari - non banche MV/CVS(nm) - 522"},{"K":"8516","V":"Redditi su partecipazioni - banche MV - 8516"},{"K":"516","V":"Redditi su partecipazioni non rappresentate da titoli - non banche MV/CVS(nm) - 516"},{"K":"8523","V":"Redditi su strumenti di mercato monetario - banche MV - 8523"},{"K":"523","V":"Redditi su strumenti di mercato monetario - non banche MV/CVS(nm) - 523"},{"K":"8526","V":"Redditi su titoli obbligazionari italiani collocati all'estero - banche MV - 8526"},{"K":"526","V":"Redditi su titoli obbligazionari italiani collocati all'estero - non banche MV/CVS(nm) - 526"},{"K":"6712","V":"Regolamenti automatizzati con non residenti MV - 6712"},{"K":"9939","V":"Regolamenti automatizzati tra non residenti MV - 9939"},{"K":"320","V":"Regolamenti per emissioni travellers' cheque MV - 320"},{"K":"319","V":"Regolamenti tra emittenti carte di credito MV/CVS(nm) - 319"},{"K":"104","V":"Regolamento per merci MV - 104"},{"K":"17","V":"Reimportazione di merce esportata in temporanea ad altro titolo CVS(m) - 17"},{"K":"16","V":"Reimportazione di merce lavorata all'estero per conto di residenti CVS(m) - 16"},{"K":"6710","V":"Remissione di debiti (banche) MV - 6710"},{"K":"7015","V":"Restituzione all'estero di somme non assegnate a residenti MV - 7015"},{"K":"6679","V":"Ricerche di mercato MV/CVS(nm) - 6679"},{"K":"36","V":"Riesportazione di merce importata in temporanea ad altro titolo CVS(m) - 36"},{"K":"35","V":"Riesportazione di merce lavorata in Italia per conto di non residenti CVS(m) - 35"},{"K":"7058","V":"Rimessa/incasso di MP emessi da non residenti MV - 7058"},{"K":"7057","V":"Rimessa/incasso di MP emessi da residenti MV - 7057"},{"K":"6689","V":"Rimesse emigrati ed immigrati MV/CVS(nm) - 6689"},{"K":"6624","V":"Rimpatrio / espatrio definitivo MV - 6624"},{"K":"113","V":"Riparazioni MV/CVS(nm) - 113"},{"K":"9840","V":"Riporti e pronti contro termine in valua su titoli esteri MV - 9840"},{"K":"9841","V":"Riporti e pronti contro termine in valuta su titoli esteri MV - 9841"},{"K":"9852","V":"Riporti e pronti contro termine in valuta su titoli italiani MV - 9852"},{"K":"9853","V":"Riporti e pronti contro termine in valuta su titoli italiani MV - 9853"},{"K":"8644","V":"Riporti e pronti contro termine su titoli esteri (accensioni) - banche MV - 8644"},{"K":"644","V":"Riporti e pronti contro termine su titoli esteri (accensioni) - non banche MV/CVS(f) - 644"},{"K":"8645","V":"Riporti e pronti contro termine su titoli esteri (estinzioni) - banche MV - 8645"},{"K":"645","V":"Riporti e pronti contro termine su titoli esteri (estinzioni) - non banche MV/CVS(f) - 645"},{"K":"8646","V":"Riporti e pronti contro termine su titoli italiani (accensioni) - banche MV - 8646"},{"K":"646","V":"Riporti e pronti contro termine su titoli italiani (accensioni) - non banche MV/CVS(f) - 646"},{"K":"8647","V":"Riporti e pronti contro termine su titoli italiani (estinzioni) - banche MV - 8647"},{"K":"647","V":"Riporti e pronti contro termine su titoli italiani (estinzioni) - non banche MV/CVS(f) - 647"},{"K":"6717","V":"Risarcimenti su altre assicurazioni MV/CVS(nm) - 6717"},{"K":"6715","V":"Risarcimenti su assicurazioni trasporto merci MV/CVS(nm) - 6715"},{"K":"6704","V":"Risarcimenti su assicurazioni vita e fondi pensione MV/CVS(nm) - 6704"},{"K":"6719","V":"Risarcimenti su riassicurazioni MV/CVS(nm) - 6719"},{"K":"6602","V":"Salari e stipendi MV/CVS(nm) - 6602"},{"K":"6647","V":"Saldi di compensazione MV - 6647"},{"K":"6691","V":"Scioglimento di contratti, pagamento d'indebito MV/CVS(nm) - 6691"},{"K":"6705","V":"Servizi ausiliari di assicurazione MV/CVS(nm) - 6705"},{"K":"6680","V":"Servizi di consulenza fiscale e contabile MV/CVS(nm) - 6680"},{"K":"1114","V":"Servizi di data processing e data base MV/CVS(nm) - 1114"},{"K":"1116","V":"Servizi di informazione MV/CVS(nm) - 1116"},{"K":"6683","V":"Servizi di ricerca e sviluppo MV/CVS(nm) - 6683"},{"K":"6676","V":"Servizi di telecomunicazione MV/CVS(nm) - 6676"},{"K":"6681","V":"Servizi legali MV/CVS(nm) - 6681"},{"K":"221","V":"Servizi logistici e di assistenza al trasporto - aerei MV/CVS(nm) - 221"},{"K":"222","V":"Servizi logistici e di assistenza al trasporto - altri MV/CVS(nm) - 222"},{"K":"220","V":"Servizi logistici e di assistenza al trasporto - marittimi MV/CVS(nm) - 220"},{"K":"6700","V":"Servizi postali e di corriere MV/CVS(nm) - 6700"},{"K":"6682","V":"Servizi pubblicitari MV/CVS(nm) - 6682"},{"K":"1115","V":"Servizi vari informatici MV/CVS(nm) - 1115"},{"K":"1107","V":"Software MV/CVS(nm) - 1107"},{"K":"7014","V":"Somme a disposizione di residenti da classificare MV - 7014"},{"K":"6622","V":"Spese militari MV/CVS(nm) - 6622"},{"K":"6618","V":"Spese per consolati, ambasciate ecc. MV/CVS(nm) - 6618"},{"K":"6648","V":"Spese sanitarie MV - 6648"},{"K":"6621","V":"Stipendi personale consolati/ambasciate all'estero MV - 6621"},{"K":"801","V":"Storni per operazioni correnti mercantili MV - 801"},{"K":"802","V":"Storni per operazioni correnti non mercantili MV - 802"},{"K":"803","V":"Storni per operazioni finanziarie MV - 803"},{"K":"1111","V":"Studi tecnici ed engineering MV/CVS(nm) - 1111"},{"K":"6693","V":"Successioni e donazioni MV/CVS(nm) - 6693"},{"K":"6635","V":"Sussidi e regalie MV/CVS(nm) - 6635"},{"K":"6692","V":"Trasferimenti a seguito di provvedimenti giudiziari MV/CVS(nm) - 6692"},{"K":"307","V":"Trasferimenti di banconote di paesi aderenti all'UEM MV - 307"},{"K":"308","V":"Trasferimenti di banconote in EURO MV - 308"},{"K":"302","V":"Trasferimenti di banconote italiane MV - 302"},{"K":"8690","V":"Trasferimento saldi su conti di regolamento netto (EBA, ecc.) MV - 8690"},{"K":"39","V":"Trasformazione in definitiva con regolamento di altre temporanee esportazioni CVS(m) - 39"},{"K":"20","V":"Trasformazione in definitiva con regolamento di altre temporanee importazioni CVS(m) - 20"},{"K":"38","V":"Trasformazione in definitiva con regolamento di merci esportate per lavorazione CVS(m) - 38"},{"K":"19","V":"Trasformazione in definitiva con regolamento di merci importate per lavorazione CVS(m) - 19"},{"K":"6707","V":"Trattamento dei rifiuti e disinquinamento MV/CVS(nm) - 6707"},{"K":"9962","V":"Variazione per adeguamento contabile titoli in portafoglio MV - 9962"},{"K":"41","V":"Vendita di merce all'estero acquistata per il transito (transito vendita) CVS(m) - 41"},{"K":"42","V":"Vendita di merce all'estero non importata CVS(m) - 42"},{"K":"40","V":"Vendita di merce che non viene esportata CVS(m) - 40"},{"K":"7037","V":"Versamenti/prelevamenti di BB Euro su/da conti di non residenti MV - 7037"},{"K":"7036","V":"Versamenti/prelevamenti di BB in valuta su/da conti di residenti MV - 7036"},{"K":"300","V":"Viaggi MV/CVS(nm) - 300"},{"K":"12","V":"importazione per esecuzione di lavori in Italia CVS(m) - 12"},{"K":"24","V":"nuovi esiti Bollettino Bancari - RIFIUTATI"},{"K":"14","V":"nuovi esiti Pagamenti Esteri - RIFIUTATI"},{"K":"34","V":"nuovi esiti Ritiro Effetti - RIFIUTATI"}],"TIPO_CAUSALE_VALUTARIA":[{"K":"SNR","V":"Soggetto non residente"},{"K":"CVA","V":"assegnazione causale valutaria"},{"K":"INF","V":"inferiore al limite CVS"}],"MODALITA_ESITO":[{"K":"CBI","V":"CUC"},{"K":"EMAL","V":"E-Mail"}],"NAZIONE":[{"K":"AF","V":"Afghanistan"},{"K":"AL","V":"Albania"},{"K":"DZ","V":"Algeria"},{"K":"AD","V":"Andorra"},{"K":"AO","V":"Angola"},{"K":"AI","V":"Anguilla"},{"K":"AQ","V":"Antartide"},{"K":"AG","V":"Antigua e Barbuda"},{"K":"SA","V":"Arabia Saudita"},{"K":"AR","V":"Argentina"},{"K":"AM","V":"Armenia"},{"K":"AW","V":"Aruba"},{"K":"AU","V":"Australia"},{"K":"AT","V":"Austria"},{"K":"AZ","V":"Azerbaigian"},{"K":"BS","V":"Bahamas"},{"K":"BH","V":"Bahrain"},{"K":"BD","V":"Bangladesh"},{"K":"BB","V":"Barbados"},{"K":"BE","V":"Belgio"},{"K":"BZ","V":"Belize"},{"K":"BJ","V":"Benin"},{"K":"BM","V":"Bermuda"},{"K":"BT","V":"Bhutan"},{"K":"BY","V":"Bielorussia"},{"K":"MM","V":"Birmania"},{"K":"BO","V":"Bolivia"},{"K":"BA","V":"Bosnia ed Erzegovina"},{"K":"BW","V":"Botswana"},{"K":"BR","V":"Brasile"},{"K":"BN","V":"Brunei"},{"K":"BG","V":"Bulgaria"},{"K":"BF","V":"Burkina Faso"},{"K":"BI","V":"Burundi"},{"K":"KH","V":"Cambogia"},{"K":"CM","V":"Camerun"},{"K":"CA","V":"Canada"},{"K":"CV","V":"Capo Verde"},{"K":"TD","V":"Ciad"},{"K":"CL","V":"Cile"},{"K":"CN","V":"Cina"},{"K":"CY","V":"Cipro"},{"K":"VA","V":"Città del Vaticano"},{"K":"CO","V":"Colombia"},{"K":"KP","V":"Corea del Nord"},{"K":"KR","V":"Corea del Sud"},{"K":"CR","V":"Costa Rica"},{"K":"CI","V":"Costa d'Avorio"},{"K":"HR","V":"Croazia"},{"K":"CU","V":"Cuba"},{"K":"CW","V":"Curaçao"},{"K":"DK","V":"Danimarca"},{"K":"DM","V":"Dominica"},{"K":"AE","V":"Dubai"},{"K":"EC","V":"Ecuador"},{"K":"EG","V":"Egitto"},{"K":"SV","V":"El Salvador"},{"K":"ER","V":"Eritrea"},{"K":"EE","V":"Estonia"},{"K":"ET","V":"Etiopia"},{"K":"FJ","V":"Figi"},{"K":"PH","V":"Filippine"},{"K":"FI","V":"Finlandia"},{"K":"FR","V":"Francia"},{"K":"GA","V":"Gabon"},{"K":"GM","V":"Gambia"},{"K":"GE","V":"Georgia"},{"K":"GS","V":"Georgia del Sud e isole Sandwich meridionali"},{"K":"DE","V":"Germania"},{"K":"GH","V":"Ghana"},{"K":"JM","V":"Giamaica"},{"K":"JP","V":"Giappone"},{"K":"GI","V":"Gibilterra"},{"K":"DJ","V":"Gibuti"},{"K":"JO","V":"Giordania"},{"K":"GR","V":"Grecia"},{"K":"GD","V":"Grenada"},{"K":"GL","V":"Groenlandia"},{"K":"GP","V":"Guadalupa"},{"K":"GU","V":"Guam"},{"K":"GT","V":"Guatemala"},{"K":"GG","V":"Guernsey"},{"K":"GN","V":"Guinea"},{"K":"GQ","V":"Guinea Equatoriale"},{"K":"GW","V":"Guinea-Bissau"},{"K":"GY","V":"Guyana"},{"K":"GF","V":"Guyana Francese"},{"K":"HT","V":"Haiti"},{"K":"HN","V":"Honduras"},{"K":"HK","V":"Hong Kong"},{"K":"IN","V":"India"},{"K":"ID","V":"Indonesia"},{"K":"IR","V":"Iran"},{"K":"IQ","V":"Iraq"},{"K":"IE","V":"Irlanda"},{"K":"IS","V":"Islanda"},{"K":"BV","V":"Isola Bouvet"},{"K":"NF","V":"Isola Norfolk"},{"K":"CX","V":"Isola del Natale (Christmas Island)"},{"K":"IM","V":"Isola di Man"},{"K":"BQ","V":"Isole BES"},{"K":"KY","V":"Isole Cayman"},{"K":"CC","V":"Isole Cocos e Keeling"},{"K":"KM","V":"Isole Comore"},{"K":"CK","V":"Isole Cook"},{"K":"FO","V":"Isole Faer Oer"},{"K":"FK","V":"Isole Falkland"},{"K":"HM","V":"Isole Heard e McDonald"},{"K":"MP","V":"Isole Marianne Settentrionali"},{"K":"MH","V":"Isole Marshall"},{"K":"PN","V":"Isole Pitcairn"},{"K":"SB","V":"Isole Salomone"},{"K":"TC","V":"Isole Turks e Caicos"},{"K":"VI","V":"Isole Vergini Americane"},{"K":"VG","V":"Isole Vergini Britanniche"},{"K":"UM","V":"Isole minori esterne degli Stati Uniti"},{"K":"AX","V":"Isole Åland"},{"K":"IL","V":"Israele"},{"K":"IT","V":"Italia"},{"K":"JE","V":"Jersey"},{"K":"KZ","V":"Kazakistan"},{"K":"KE","V":"Kenya"},{"K":"KG","V":"Kirghizistan"},{"K":"KI","V":"Kiribati"},{"K":"KW","V":"Kuwait"},{"K":"LA","V":"Laos"},{"K":"LS","V":"Lesotho"},{"K":"LV","V":"Lettonia"},{"K":"LB","V":"Libano"},{"K":"LR","V":"Liberia"},{"K":"LY","V":"Libia"},{"K":"LI","V":"Liechtenstein"},{"K":"LT","V":"Lituania"},{"K":"LU","V":"Lussemburgo"},{"K":"MO","V":"Macao"},{"K":"MK","V":"Macedonia"},{"K":"MG","V":"Madagascar"},{"K":"MW","V":"Malawi"},{"K":"MV","V":"Maldive"},{"K":"MY","V":"Malesia"},{"K":"ML","V":"Mali"},{"K":"MT","V":"Malta"},{"K":"MA","V":"Marocco"},{"K":"MQ","V":"Martinica"},{"K":"MR","V":"Mauritania"},{"K":"MU","V":"Mauritius"},{"K":"YT","V":"Mayotte"},{"K":"MX","V":"Messico"},{"K":"MD","V":"Moldavia"},{"K":"MC","V":"Monaco"},{"K":"MN","V":"Mongolia"},{"K":"ME","V":"Montenegro"},{"K":"MS","V":"Montserrat"},{"K":"MZ","V":"Mozambico"},{"K":"NA","V":"Namibia"},{"K":"NR","V":"Nauru"},{"K":"NP","V":"Nepal"},{"K":"NI","V":"Nicaragua"},{"K":"NE","V":"Niger"},{"K":"NG","V":"Nigeria"},{"K":"NU","V":"Niue"},{"K":"NO","V":"Norvegia"},{"K":"NC","V":"Nuova Caledonia"},{"K":"NZ","V":"Nuova Zelanda"},{"K":"OM","V":"Oman"},{"K":"NL","V":"Paesi Bassi"},{"K":"PK","V":"Pakistan"},{"K":"PW","V":"Palau"},{"K":"PA","V":"Panama"},{"K":"PG","V":"Papua Nuova Guinea"},{"K":"PY","V":"Paraguay"},{"K":"PE","V":"Perù"},{"K":"PF","V":"Polinesia Francese"},{"K":"PL","V":"Polonia"},{"K":"PR","V":"Porto Rico"},{"K":"PT","V":"Portogallo"},{"K":"QA","V":"Qatar"},{"K":"GB","V":"Regno Unito"},{"K":"CZ","V":"Repubblica Ceca"},{"K":"CF","V":"Repubblica Centrafricana"},{"K":"CD","V":"Repubblica Democratica del Congo"},{"K":"CD","V":"Repubblica Democratica del Congo"},{"K":"DO","V":"Repubblica Dominicana"},{"K":"CG","V":"Repubblica del Congo"},{"K":"TW","V":"Repubblica di Cina (Taiwan)"},{"K":"RO","V":"Romania"},{"K":"RW","V":"Ruanda"},{"K":"RU","V":"Russia"},{"K":"RE","V":"Réunion"},{"K":"EH","V":"Sahara Occidentale"},{"K":"KN","V":"Saint Kitts e Nevis"},{"K":"PM","V":"Saint Pierre e Miquelon"},{"K":"VC","V":"Saint Vincent e Grenadine"},{"K":"BL","V":"Saint-Barthélemy"},{"K":"MF","V":"Saint-Martin"},{"K":"WS","V":"Samoa"},{"K":"AS","V":"Samoa Americane"},{"K":"SM","V":"San Marino"},{"K":"SH","V":"Sant'Elena"},{"K":"LC","V":"Santa Lucia"},{"K":"ST","V":"Sao Tomé e Principe"},{"K":"SN","V":"Senegal"},{"K":"RS","V":"Serbia"},{"K":"SC","V":"Seychelles"},{"K":"SL","V":"Sierra Leone"},{"K":"SG","V":"Singapore"},{"K":"SX","V":"Sint Maarten"},{"K":"SY","V":"Siria"},{"K":"SK","V":"Slovacchia"},{"K":"SI","V":"Slovenia"},{"K":"SO","V":"Somalia"},{"K":"ES","V":"Spagna"},{"K":"LK","V":"Sri Lanka"},{"K":"FM","V":"Stati Federati di Micronesia"},{"K":"US","V":"Stati Uniti d'America"},{"K":"PS","V":"Stato di Palestina"},{"K":"ZA","V":"Sudafrica"},{"K":"SD","V":"Sudan"},{"K":"SS","V":"Sudan del Sud"},{"K":"SR","V":"Suriname"},{"K":"SJ","V":"Svalbard e Jan Mayen"},{"K":"SE","V":"Svezia"},{"K":"CH","V":"Svizzera"},{"K":"SZ","V":"Swaziland"},{"K":"TJ","V":"Tagikistan"},{"K":"TZ","V":"Tanzania"},{"K":"IO","V":"Territori Britannici dell'Oceano Indiano"},{"K":"TF","V":"Territori Francesi del Sud"},{"K":"TH","V":"Thailandia"},{"K":"TL","V":"Timor Est"},{"K":"TL","V":"Timor Est"},{"K":"TG","V":"Togo"},{"K":"TK","V":"Tokelau"},{"K":"TO","V":"Tonga"},{"K":"TT","V":"Trinidad e Tobago"},{"K":"TN","V":"Tunisia"},{"K":"TR","V":"Turchia"},{"K":"TM","V":"Turkmenistan"},{"K":"TV","V":"Tuvalu"},{"K":"UA","V":"Ucraina"},{"K":"UG","V":"Uganda"},{"K":"HU","V":"Ungheria"},{"K":"UY","V":"Uruguay"},{"K":"UZ","V":"Uzbekistan"},{"K":"VU","V":"Vanuatu"},{"K":"VE","V":"Venezuela"},{"K":"VN","V":"Vietnam"},{"K":"WF","V":"Wallis e Futuna"},{"K":"YE","V":"Yemen"},{"K":"ZM","V":"Zambia"},{"K":"ZW","V":"Zimbabwe"}],"TIPO_ANAGRAFICA":[{"K":"FO","V":"FORNITORI"},{"K":"FE","V":"FORNITORI ESTERO"}],"TIPO_SOGGETTO":[{"K":"PF","V":"Persona Fisica"},{"K":"PG","V":"Persona Giuridica"}],"TIPO_CODICE_SOGGETTO":[{"K":"ALT","V":"Altro Codice"},{"K":"FIS","V":"C.Fis. / P.Iva / VAT"},{"K":"PRO","V":"CUC CBI"},{"K":"BEI","V":"Identificativo BEI"}],"FINALITA_PAG_ISO":[{"K":"PENS","V":"PENS - PensionPayment"},{"K":"SALA","V":"SALA - SalaryPayment"}],"TIPO_INDIRIZZO":[{"K":"PBOX","V":"Indirizzo della casella postale"},{"K":"DLVY","V":"Indirizzo di consegna"},{"K":"MLTO","V":"Indirizzo di corrispondenza postale"},{"K":"BIZZ","V":"Indirizzo di domicilio"},{"K":"HOME","V":"Indirizzo di residenza"},{"K":"ADDR","V":"Indirizzo postale completo"}]};
    var PIAZZATURA = [{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":1985188,"ClasseServizio":0,"Crypt":"cRbem9p0h6Oz3rmMbNNJkO4wx6T8OZji1K5PUS2AOufrVbwLdTiOkGdLK0aQJolG+Cl/q09mMwAucr46RQdrNzDEitCw3Dr+uNC6pwbR5PDKODhUJz8Kp3oZwV9rfZYw9w0cPbuf0ubKLjeKLm/ygw==","Hash":"D374C314BDDFC6C460B92535229CC4C9EE8501BD14A048F638E4621307E94B93"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI MILANO S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2018-11-23T00:00:00","Saldo":778416.67,"DataSaldo":"2018-11-23T00:00:00","Stato":2,"Bic":null,"Id":null,"IdAzienda":"588536","CodiceIban":"IT12J0558433470000000011905","CodiceAbi":"05584","CodiceCab":"33470","CodiceFiliale":"33470","NumeroRapporto":"000000011905","CodiceDivisa":"EUR","Descrizione":"000000011905","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000011905","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1985188","Type":102,"Crypt":"krn9pybAl0EqM5YcbMZsP87SQ1NK25FBKnOWglR9aaZX/IhMD/kqf5iwQyLVyQ2G","Hash":"01B6BBF1BB743C9BA0AB75D1C6B5FD44123C6D23E381EECCD8A3D97844086DD9"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"8WgHfPb/OB0morBd6uCAMJDfK7SceeNc9mX7ipzBr4JudxIyCHEHsnZYdeyuRp9q","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2015171,"ClasseServizio":0,"Crypt":"308uhpXUz4fro0gD3VT4Z5yqc5a3uO70nAszN0qo0m4igIiYrA4XLQYi1CDjrrN0YCm7Zl3wXG1JpcVI4wqo935sX/Hme7Qr8nLuZ9WTd/33SbGm51fu0XNc4RgcRt7gcVuWsZfYPN5h4R/03i3QZA==","Hash":"0C9FD4A70294BB09C9EC7CA7C915890E8983F857674086CD81E9FFD88ABE2707"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI MILANO S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2018-11-23T00:00:00","Saldo":32617.94,"DataSaldo":"2018-11-23T00:00:00","Stato":2,"Bic":null,"Id":null,"IdAzienda":"588536","CodiceIban":"IT91I0558433470USD181000600","CodiceAbi":"05584","CodiceCab":"33470","CodiceFiliale":"33470","NumeroRapporto":"USD181000600","CodiceDivisa":"USD","Descrizione":"USD181000600","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"USD181000600","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2015171","Type":102,"Crypt":"c/2siTZoxiZbDgq4rbKfbTwbtqQ0ZeUP1xz/0flGAYZAg403ba0ztzdUm/hY09jI","Hash":"359C291C917DAF96CDF97FA17F309A6D3CE1E0EC4C20D9BAD9584FE81FC6D47E"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"8WgHfPb/OB0morBd6uCAMJDfK7SceeNc9mX7ipzBr4JudxIyCHEHsnZYdeyuRp9q","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2455525,"ClasseServizio":0,"Crypt":"NhNnRfk3NS8mcyri6AaAbDSn1YSOWRgsoclKUuJf2MJhfGZGdvelJV43krmSH6DueOoGbqjDD5y0HY5CnaXewW/s1H7hig0N9HJ7JOsIKeIzKam4QTiNm6ykWGlLl1kQjaq1rg8Zwrx3D+LX7OX/nQ==","Hash":"965AA916692C3474F18952F40E152B13D996D688A528B2F0DCD98830BA2B9254"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":205437.77,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21792","Id":null,"IdAzienda":"588536","CodiceIban":"IT38V0503433473000000011905","CodiceAbi":"05034","CodiceCab":"33473","CodiceFiliale":"33473","NumeroRapporto":"000000011905","CodiceDivisa":"EUR","Descrizione":"000000011905","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000011905                                                                                        ","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2455525","Type":102,"Crypt":"NeTwbul16RIj8Ko1dhSNGPQDknlOg+0XCI8yeBIRheRMR/Aa6k2GjZf/uiOQRGfc","Hash":"27F3FD689AC7226B1670A1235AE8CADE5308BF7C48950611D20D5A4AB9953D9E"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"8WgHfPb/OB0morBd6uCAMJDfK7SceeNc9mX7ipzBr4JudxIyCHEHsnZYdeyuRp9q","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2538010,"ClasseServizio":0,"Crypt":"abi4QN0RUES9ofx1mHJ1sIqVO9u7QnQJ0n7/DPUOpSjyv8je29CMd3Wo7yF1L36tENQTGoEOygzC5S3+uCLiEhm2gpE5f8GArx/uFA8eJPyulLUktT7TXRTZE/b2qzuCNtr3mdngERltQ1QYxhXCLw==","Hash":"3B88B2A605037F4758F94F0D7A6D41C340E47A381EDA0E54F587E1952CF330B7"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"AG.72","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":130686.27,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21792","Id":null,"IdAzienda":"588536","CodiceIban":"IT95U0503433473USD181000600","CodiceAbi":"05034","CodiceCab":"33473","CodiceFiliale":"33473","NumeroRapporto":"USD181000600","CodiceDivisa":"USD","Descrizione":"USD181000600","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"USD181000600","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2538010","Type":102,"Crypt":"ZmDYw2xviiLX7wP+wk9n29sfRqqzOtPFMF2OmhG1HnF3v8G63xyTn7PX+pMbL99l","Hash":"FC03CB3E877F9DAD4FAF64C772F333446D89539639BDB89B52EB9490AF54E191"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"8WgHfPb/OB0morBd6uCAMJDfK7SceeNc9mX7ipzBr4JudxIyCHEHsnZYdeyuRp9q","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2538011,"ClasseServizio":0,"Crypt":"TajzjpkWdpJWbeFIg2IB2fYxdmtHn7gzQKs8Go9FESQ//MBj1qwu3/6IbvYIqxWT03PrBCnwJwGFwO4oXSAyfbLEWBaLm79w6uTBI/BwgUSC5ZyJqZ1bK/dGBDytmYG8FlR+JES6dJ4Pw4/wk+vdiA==","Hash":"A9DA79FA8D75CE3970FC17554F09DFC1FB73FED83B4B64F92AF05A324DD6BEE2"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"MILANO AG. 36","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":-2277518.39,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AI0","Id":null,"IdAzienda":"588536","CodiceIban":"IT28A0503401636EUR700001843","CodiceAbi":"05034","CodiceCab":"01636","CodiceFiliale":"01636","NumeroRapporto":"EUR700001843","CodiceDivisa":"EUR","Descrizione":"EUR700001843","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"EUR700001843","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2538011","Type":102,"Crypt":"HHB1/dlS/XEAgMpQlWpbNKZ1T2DGUhteewCpN+CPV9+MH8Sk0IMK6frXAV5MkIT/","Hash":"7819029E594A7926C626DE62FB8A7FD66E953BE91E15AEA777D6C52E62ECBC41"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"8WgHfPb/OB0morBd6uCAMJDfK7SceeNc9mX7ipzBr4JudxIyCHEHsnZYdeyuRp9q","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2538012,"ClasseServizio":0,"Crypt":"BUQpOQ7sSksexeCJnl79mSYtWVDeXSpvb7/FOshl1/+keim8/gLoGMUI6EW330FIyxGvVq/xdVtVkuyzw8YlgEH/U2YIEBVaE7gyiSnMtJxlJ79MixysXC8D2C8vaOG93FdPgvIbmoKr+E0IqpjH8Q==","Hash":"DFF08128C41D0657AAD329C6619BCF2548BC8B9BECE631643C9CB74A7A874B7C"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"MILANO AG. 36","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":0.00,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AI0","Id":null,"IdAzienda":"588536","CodiceIban":"IT48N0503401636EUR800004456","CodiceAbi":"05034","CodiceCab":"01636","CodiceFiliale":"01636","NumeroRapporto":"EUR800004456","CodiceDivisa":"EUR","Descrizione":"EUR800004456","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"EUR800004456","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2538012","Type":102,"Crypt":"OyOwS38dKK9qy6zPcFxoazoLwRCdkwn/ERx8AjGldGSaRN49RmZMJ/iE+AJU1uiS","Hash":"25B9D434EE53DDE81BAAB69464DE5879763ACF50E677B2C6A82777D10649A2EC"},"Status":0},"Azienda":{"Id":588536,"CodiceAzienda":"800015887","RagioneSociale":"C.P.C. INOX SPA","CodiceSia":"73586","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"02801530961","PartitaIva":"13336550150","StatoAzienda":1,"Identifier":{"Id":"588536","Type":1,"Crypt":"8WgHfPb/OB0morBd6uCAMJDfK7SceeNc9mX7ipzBr4JudxIyCHEHsnZYdeyuRp9q","Hash":"E12783BA2384637DFA2B43CBECF2A2A51E2963C92AB2754BD985ED53C65BC0D2"}}}];
    var ABI_GRUPPO = [{"ABI":"03102","Banca":"BANCA ALETTI & C. BANCA DI INVESTIMENTO MOBILIARE S.P.A."},{"ABI":"03336","Banca":"CREDITO BERGAMASCO S.P.A."},{"ABI":"05034","Banca":"BANCO POPOLARE SOCIETA' COOPERATIVA"},{"ABI":"05164","Banca":"BANCA POPOLARE DI LODI S.P.A."},{"ABI":"05188","Banca":"BANCA POPOLARE DI VERONA - S. GEMINIANO E S. PROSPERO S.P.A."},{"ABI":"05228","Banca":"BANCA POPOLARE DI CREMA S.P.A."},{"ABI":"05512","Banca":"BANCA POPOLARE DI CREMONA"},{"ABI":"05584","Banca":"BANCA POPOLARE DI MILANO"},{"ABI":"05608","Banca":"BANCA POPOLARE DI NOVARA S.P.A."},{"ABI":"06200","Banca":"CASSA DI RISPARMIO DI LUCCA PISA LIVORNO S.P.A"}];
    var CUC_NON_VALIDI = [{"CUC":"VANTAGGT"}];
    var jBonifico = {"Debitore":null,"Beneficiario":null,"Creditore":null,"DescrizioneRiconcilazione":null,"CodiceUnivoco":null,"CausaleIso":null,"CausaleLibera":null,"IsUrgP":false,"FinalitaPagamento":null,"Esito":null,"Cvs":null,"Divisa":"EUR","IdentifierAzienda":null,"Identifier":{"Id":null,"Version":null,"IdAzienda":null,"IdRapporto":null,"ClasseServizio":3,"Crypt":"WqciaJvcpZmJraSCZunxfzLJ0MMAl5Mh5Nw2BX5yaINpNnwpWHffvqubFryIxt/QoDEpP9lDqiZ8xB3XemuQKOJqt/ACLSatlEVDNAppXALH/KqB6tvSOGsiIXhGqa25","Hash":"4AAD7D609D9A2C4053007A84B2A4C3AB020B8D3726B604C87AA1D0FC5A7F2238"},"IdentifierDistinta":null,"Ordinante":null,"Importo":null,"Position":null};
    var jValidation = [];

    var spallaName = "#60d131c3624941b98e205667e7a7ef52_6";

    var _cleanSpalla = function(){
        $(spallaName).html('');
    };

    // Business ViewModel
    function viewModel(bonifico) {
        var self= this;

        self.IsVisible = ko.observable(true);
        self.StipendioParams = {
            Bonifico : ko.observable(new App.Sct.DisposizioneSctBo(bonifico)),
            SuccessMessagesVisible : ko.observable(false)
        };

        // Visibility
        self.Hide = function () {
            self.IsVisible(false);
        }
        self.Show = function () {
            self.IsVisible(true);
        }

        $.ajax('/anchise2.web/Widget/LinkRapidi')
            .success(function(html){
                $('#60d131c3624941b98e205667e7a7ef52_6').append(html);

                $.ajax('/anchise2.web/Widget/InfoUtili/StipendioSctDataEntry')
                    .success(function(html){
                        $('#60d131c3624941b98e205667e7a7ef52_6').append(html);
                    });
            });
    }

    var rootViewModel = new viewModel(jBonifico);

    var challenge = new challengeViewModel({
        SubmitUrl: ko.observable(),
        TitleBlock: '<div class="clearfix">' +
                        '<div class="flag disposizioneBonifico">&nbsp;</div>' +
                        '<h1>' +
                            'Stipendi: inserimento' +
                        '</h1>' +
                    '</div>'
    });

    ko.postbox.subscribe('validation-messages.CHALLENGE', function () {
        rootViewModel.Hide();

        // visualizzo alcuni dati della disposizione in testa al challenge
        challenge.Components.removeAll();
        challenge.Components.push(new App.Core.UiComponent({
            Name: 'disposizione-sct-summary',
            Params: {
                DisposizioneSct: rootViewModel.StipendioParams.Bonifico,
                InitAfterBinding: true
            }
        }));

        challenge.SubmitUrl(rootViewModel.StipendioParams.CalledUrl() + 'Challenge');
    });

    ko.postbox.subscribe('challenge.SUCCESS', function(data){
        rootViewModel.StipendioParams.SuccessMessagesVisible(true);

        rootViewModel.Show();

        challenge.Hide();
    });

    $(document).ready(function () {
        ko.applyBindings(rootViewModel, document.getElementById('60d131c3624941b98e205667e7a7ef52_5'));

        ko.applyBindings(challenge, document.getElementById('60d131c3624941b98e205667e7a7ef52_4'));
    });
</script>


                        </div>