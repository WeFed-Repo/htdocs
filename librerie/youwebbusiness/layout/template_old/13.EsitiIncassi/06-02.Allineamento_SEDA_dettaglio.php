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



<script type="text/html" id="909fa6ad16c1496a891fd3f917f3a4e9_6">
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
        template: { element: '909fa6ad16c1496a891fd3f917f3a4e9_6' },
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



<script type="text/html" id="identificativo-previsionale-search">
    <div data-bind="visible: Visible" class="modal-layer">
        <div class="modal-container section" data-bind="with: List"style="margin-top: 10px">
            <div class="riquadro">
                <div class="clearfix">
                    <div class="flag associaUtente">&nbsp;</div>
                    <h1 data-bind="text: $component.Label"></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="col-xs-5 no-padding">
                        <label>Identificativo Previsionale</label>
                    </div>
                    <div class="col-xs-7 no-padding">
                        <input type="text" class="form-control" data-bind="value: PagingFilter.IdentificativoPrevisionale" />
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="col-xs-4 no-padding">
                        <label>BIC Debitore</label>
                    </div>
                    <div class="col-xs-5 no-padding">
                        <input type="text" class="form-control" data-bind="value: PagingFilter.BicDebitore" />
                    </div>
                </div>
            </div>
            <div style="margin:inherit"></div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="col-xs-5 no-padding">
                        <label>Trimestre richiesto</label>
                    </div>
                    <div class="col-xs-7 no-padding">
                        <select class="form-control" data-bind="options: $component.TrimestreRichiesto ,optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: PagingFilter.TrimestreRichiesto"></select>
                    </div>
                </div>

                <div class="col-xs-6">
                    <div class="col-xs-4 no-padding">
                        <label>Anno richiesto</label>
                    </div>
                    <div class="col-xs-5 no-padding">
                        <input type="text" class="form-control" data-bind="value: PagingFilter.AnnoRichiesto" />
                    </div>
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
                                <th>Identificativo Previsionale</th>
                                <th>Trimestre</th>
                                <th>Anno</th>
                                <th>BIC Debitore</th>
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: Page">
                            <tr data-bind="click: $component.UpdateSelectedItem">
                                <td data-bind="text: IdentificativoPrevisionale"></td>
                                <td data-bind="text: $component.LocalizationTrimestreRichiesto(Trimestre())"></td>
                                <td data-bind="text: Anno"></td>
                                <td data-bind="text: BICDebitore"></td>
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

    ko.components.register('identificativo-previsionale-search', {
        template: { element: 'identificativo-previsionale-search' },
        viewModel: function (params) {
            var self = this;

            //Model
            self.Label = params.Label;
            self.Visible = params.Visible;
            self.TrimestreRichiesto = params.TrimestreRichiesto;
            self.IdentifierPiazzatura = params.IdentifierPiazzatura;
            self.AbiOrdinante = params.AbiOrdinante;
            self.Callback = params.Callback || ko.observable($.noop);
            
            self.LocalizationTrimestreRichiesto = function (trimestre) {
                return Localization.Trimestre.GetLabel(trimestre);
            };

            self.List = new App.Core.PagedArrayAsync({
                self: self,
                searchUrl: '/anchise2.web/Seda/RichiestaDettaglioRendiconto/SearchIdentificativoPrevisionale',
                pagingFilter: new App.Seda.Rendiconto.FilterIdentificativoPrevisionale({ size: 8, IsSortAscending: true}),
                allData: []
            });

            self.UpdateSelectedItem = function (item) {
                var identificativoPrevisionale = new App.Seda.Rendiconto.IdentificativoPrevisionaleSedaBo(ko.toJS(item));

                self.Callback()(identificativoPrevisionale);

                self.ToggleVisible();
             };


            self.ToggleVisible = function () {
                self.Visible(!self.Visible());
            };

            var VisibleSubscription = self.Visible.subscribe(function () {
                if (self.Visible()) {
                    self.List.PagingFilter.AbiOrdinante(self.AbiOrdinante());
                    self.List.PagingFilter.IdAzienda(self.IdentifierPiazzatura().IdAzienda());
                    self.List.PagingFilter.IdentificativoPrevisionale('');
                    self.List.PagingFilter.TrimestreRichiesto('');
                    self.List.PagingFilter.AnnoRichiesto('');
                    self.List.PagingFilter.BicDebitore('');
                    self.List.Search();
                }
            });

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





<div id="909fa6ad16c1496a891fd3f917f3a4e9_7">
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
            var absolutePath = '/anchise2.web/Contents/00000/it-IT/Images/imageFakeName?v=1980363';

            return absolutePath.replace('imageFakeName', imageRelativePath);
        }

        self.GetPinPadGif = function (secureType) {
            var relativePath = '/pp/dispositivo_' + secureType + '.gif';

            return self.ResourcesPathImage(relativePath);
        }

        // Initialize
        self.Init = function () {
            $('.hide', $('#909fa6ad16c1496a891fd3f917f3a4e9_7')).removeClass('hide');
        };
    };

    var uiHelper = new UiViewModel();

    $(document).ready(function () {
        ko.applyBindings(uiHelper, document.getElementById('909fa6ad16c1496a891fd3f917f3a4e9_7'));

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
        Localization.ACCREDITO_CUMULATIVO_MULTI = 'Distinta con pi� accrediti cumulativi';

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
            var _accreditoCumulativo_MULTI = "Distinta con pi� accrediti cumulativi";

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

            var _statoEsito_1_long = "La richiesta di pagamento � stata presa in carico dalla Banca";
            var _statoEsito_2_long = "La richiesta di pagamento � stata rifiutata per motivi formali o controlli sostanziali";
            var _statoEsito_3_long = "La richiesta di pagamento � stata parzialmente accettata";
            var _statoEsito_4_long = "La richiesta di pagamento � in lavorazione";
            var _statoEsito_5_long = "La richiesta di pagamento � stata autorizzata ed inviata alla Banca";
            var _statoEsito_6_long = "Addebitata";
            var _statoEsito_8_long = "La richiesta di pagamento � stata rifiutata per motivi formali o controlli sostanziali";
            var _statoEsito_9_long = "La richiesta di pagamento � stata rifiutata per motivi formali o controlli sostanziali";

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

            var _statoEsito_1_long = "La richiesta di pagamento � stata presa in carico dalla Banca";
            var _statoEsito_2_long = "La richiesta di pagamento � stata rifiutata per motivi formali o controlli sostanziali";
            var _statoEsito_3_long = "La richiesta di pagamento � stata parzialmente accettata";
            var _statoEsito_4_long = "La richiesta di pagamento � in lavorazione presso la Banca";
            var _statoEsito_5_long = "La richiesta di pagamento � stata autorizzata ed inviata alla Banca";
            var _statoEsito_6_long = "La richiesta di pagamento � stata regolata sul conto corrente di addebito";
            var _statoEsito_8_long = "La richiesta di pagamento � stata rifiutata per motivi formali o controlli sostanziali";
            var _statoEsito_9_long = "La richiesta di pagamento � stata presa in carico dalla Banca";

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








<script type="text/html" id="list-esito">
    
    <div>
        <div class="riquadro">
            <div>
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Esiti Allineamento Seda</h1>
                
            </div>
            <!-- ko with: List -->
            <validation-messages params="Validation: Validation"></validation-messages>
            <div class="table-responsive">
                <div class="row">
                    <div class="form-group">
                        <div class="form-field-input col-xs-3">
                            <label class="control-label">
                                Rag. Soc./Intestatario
                            </label>
                            <div class="form-field">
                                <select class="form-control"
                                        data-bind="options: $component.Aziende, optionsCaption: 'Tutti', optionsText: 'RagioneSociale' , value: $component.AziendaSelezionata"></select>
                            </div>
                        </div>
                        <div class="form-field-input col-xs-3">
                            <label class="control-label">
                                Banca:
                            </label>
                            <div class="form-field">
                                <select class="form-control"
                                        data-bind="options: $component.Banche, optionsCaption: 'Tutti', optionsText: 'Descrizione' , optionsValue: 'CodiceAbi' , value: PagingFilter.CodiceAbi"></select>
                            </div>
                        </div>

                        <div class="form-field-input col-xs-4">
                            <label class="control-label">
                                Mostra
                            </label>
                            <div class="form-field">
                                <div class="col-xs-4">
                                    <select class="form-control"
                                            data-bind="options: PageSizeDropDown, value: PagingFilter.Size"></select>
                                </div>
                                <div class="col-xs-8">
                                    <span class="search" data-bind="singleClick: $component.Search"></span>
                                    <span class="returnToFilter" data-bind="singleClick: $component.ReturnToFilter"></span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="section">
                    <div class="row link" data-bind="click: $component.ToggleAdvancedFilter">
                        <label class="control-label col-xs-11" data-bind="text: $component.FiltriAvanzati, visible: !$component.AvanzateBodyVisible()"></label>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.AvanzateCollapseCss" class="icon-replace icon-collapse active"></div>
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.AvanzateBodyVisible" style="padding-top:13px">
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-xs-2">
                                    Tipo flusso:
                                </label>
                                <div class="col-xs-3">
                                    <select class="form-control"
                                            data-bind="options: $component.TipoFlusso, optionsCaption: 'Tutti', optionsText: 'V', optionsValue: 'K', value: PagingFilter.TipoFlusso"></select>
                                </div>
                                <label class="control-label col-xs-2">
                                    Stato:
                                </label>
                                <div class="col-xs-3">
                                    <select class="form-control"
                                            data-bind="options: $component.Stato, optionsCaption: 'Tutti', optionsText: 'V', optionsValue: 'K', value: PagingFilter.StatoEsito"></select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-2">Codice mandato:</label>
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control" data-bind="value: PagingFilter.CodiceMandato" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-2">C.F. sottoscrittore:</label>
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control" data-bind="value: PagingFilter.CodFiscSottoscrittore" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2 col-xs-offset-2">Da:</div>
                            <div class="col-xs-2 col-xs-offset-2">A:</div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-2">Data creazione:</label>
                                    <div class="col-xs-3">
                                        <date-picker params="Date: PagingFilter.DataCreazioneFrom"></date-picker>
                                    </div>
                                    <div class="col-xs-3 col-xs-offset-1">
                                        <date-picker params="Date: PagingFilter.DataCreazioneTo"></date-picker>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-2">Data ricezione</label>
                                    <div class="col-xs-3">
                                        <date-picker params="Date: PagingFilter.DataRicezioneFrom"></date-picker>
                                    </div>
                                    <div class="col-xs-3 col-xs-offset-1">
                                        <date-picker params="Date: PagingFilter.DataRicezioneTo"></date-picker>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="margin-bottom10 text-right">
                            <input type="button" class="btn btn-primary" value="Ricerca" data-bind="singleClick: $component.Search"/>
                        </div>
                    </div>
                </div>

                <div class="dataTables_wrapper" style="margin-top: 10px">
                    <table class="dataTable table">
                        <thead>
                            <tr>
                                <th data-bind="css: ThCss('1'), singleClick: $component.SerchLast('1')" style="padding-left: 15px;font-size: 13px">
                                    Dato
                                </th>
                                <th data-bind="css: ThCss('2'), singleClick: $component.SerchLast('2')" style="padding-left: 15px;font-size: 13px">
                                    Cliente
                                </th>
                                <th data-bind="css: ThCss('3'), singleClick: $component.SerchLast('3')" style="padding-left: 15px;font-size: 13px">
                                    Abi
                                </th>
                                <th data-bind="css: ThCss('4'), singleClick: $component.SerchLast('4')" style="padding-left: 15px;font-size: 13px">
                                    Creazione
                                </th>
                                <th data-bind="css: ThCss('5'), singleClick: $component.SerchLast('5')" style="padding-left: 15px;font-size: 13px">
                                    Ricezione
                                </th>
                                <th data-bind="css: ThCss('6'), singleClick: $component.SerchLast('6')" style="padding-left: 15px;font-size: 13px">
                                    Codice mandato
                                </th>
                                <th data-bind="css: ThCss('7'), singleClick: $component.SerchLast('7')" style="padding-left: 15px;font-size: 13px">
                                    C.F. sottoscrittore
                                </th>
                                <th data-bind="css: ThCss('8'), singleClick: $component.SerchLast('8')" style="padding-left: 15px;font-size: 13px">
                                    Tipo flusso
                                </th>
                                <th data-bind="css: ThCss('9'), singleClick: $component.SerchLast('9')" style="padding-left: 15px;font-size: 13px">
                                    Tipo mandato
                                </th>
                                <th data-bind="css: ThCss('10'), singleClick: $component.SerchLast('10')" style="padding-left: 15px;font-size: 13px">
                                    Num. Disposiz.
                                </th>
                                <th data-bind="css: ThCss('11'), singleClick: $component.SerchLast('11')" style="padding-left: 15px;font-size: 13px">
                                    Stato
                                </th>
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: Page">
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 -->
                                    <span data-bind="class: $component.TipoEsitoCss(0), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }"></span>
                                    <!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 -->
                                    <span data-bind="class: $component.TipoEsitoCss(0), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }"></span>
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }"></span>
                                    <!-- /ko -->
                                    <!-- ko if: (TipoEsito() == 3 || TipoEsito() == 9) -->
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }"></span>
                                    <!-- /ko -->
                                    <!-- GRANDI DISTINTE -->
                                    <!-- ko if: TipoEsito() == 5 -->
                                    <span class="readOnly"></span>
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }"></span>
                                    <!-- /ko -->
                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 -->
                                    <span class="readOnly" data-bind="attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }"></span>
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }"></span>
                                    <!-- /ko -->
                                </td>
                                <td data-bind="text: Debitore.Denominazione"></td>
                                <td data-bind="text: AbiOrdinante"></td>                                
                                <td data-bind="dateText: DataCreazione"></td>
                                <td data-bind="dateText: DataRicezione"></td>
                                <td data-bind="text: CodiceMandato"></td>
                                <td data-bind="text: Debitore.CodiceFiscale"></td>
                                <td data-bind="text: $component.LocalizationTipoFlusso(TipoFlusso())"></td>
                                <td data-bind="text: TipoMandato"></td>
                                <td data-bind="text: NumeroDisposizioni" style="text-align: center"></td>
                                <!--<td data-bind="text: $component.LocalizationStatiEsito(Stato())"></td>-->
                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.LocalizationStatiEsito(Stato())"></a>
                                </td>
                                <!-- /ko -->
                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 4) || (TipoEsito() == 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsitoGD">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.LocalizationStatiEsito(Stato())"></a>
                                </td>
                                <!-- /ko -->
                            </tr>
                        </tbody>
                    </table>
                </div>
                <paginatore params="PagedList: $component.List"></paginatore>
                <div data-bind="visible: Page().length === 0">
                    <search-no-result></search-no-result>
                </div>
            </div>
            <!-- /ko -->
        </div>
        <div id="export-lista-esiti-allineamento-seda" value="Esporta" style="float: right; margin-bottom: 1%"></div>
    </div>

</script>


<script type="text/javascript">
    ko.components.register('list-esito',
        {
            template: { element: 'list-esito' },
            viewModel: function(params) {
                var self = this;

                if (!params.List instanceof App.Core.PagedArrayAsync) {
                    throw "Parameter List not valid";
                }

                self.List = params.List;
                self.Esito = params.Esito;
                self.Aziende = params.Aziende;
                self.Banche = params.Banche;
                self.TipoFlusso = ko.observableArray(SEDA.TIPO_FLUSSO);
                self.Stato = ko.observableArray(SEDA.STATI_ESITO);
                self.AziendaSelezionata = params.AziendaSelezionata;
                self.StatiAvanzamentoList = params.StatiAvanzamentoList;
                self.PagingFilterLastSearch = params.PagingFilterLastSearch;
                self.AziendaSelezionataLastSearch = params.AziendaSelezionataLastSearch;

                self.AvanzateBodyVisible = ko.observable(false);
                self.AvanzateCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.AvanzateBodyVisible));
                self.ToggleAdvancedFilter = function() {
                    self.AvanzateBodyVisible(!self.AvanzateBodyVisible());
                };
                
                self.LocalizationTipoEsito = function (tipoEsito) {
                    return Localization.TipoEsito.GetLabel(tipoEsito);
                };
                self.TipoEsitoCss = function (tipoEsito) {
                    return "tipoesito_" + tipoEsito;
                };
                self.LocalizationTipoFlusso = function (tipoFlusso) {
                    return Localization.TipoFlusso.GetLabel(tipoFlusso, true);
                };
                self.LocalizationTipoMandato = function (tipoMandato) {
                    return Localization.TipoMandato.GetLabel(tipoMandato);
                };
                self.LocalizationStatiEsito = function (statiEsito) {
                    return Localization.StatiEsitoAllineamentoInt.GetLabel(statiEsito);
                }

                self.FiltriAvanzati = ko.computed(function () {
                    var filtri = "";

                    if (self.List.PagingFilter.TipoFlusso() != null &&
                        self.List.PagingFilter.TipoFlusso() != "") {
                        filtri += "Tipo flusso: " + Localization.TipoFlusso.GetLabel(self.List.PagingFilter.TipoFlusso()) + "; ";
                    }
                    if (self.List.PagingFilter.StatoEsito() != null &&
                        self.List.PagingFilter.StatoEsito() != "") {
                        filtri += "Stato: " + Localization.StatiEsitoAllineamento.GetLabel(self.List.PagingFilter.StatoEsito()) + "; ";
                    }
                    if (self.List.PagingFilter.CodiceMandato() != null &&
                        self.List.PagingFilter.CodiceMandato() != "") {
                        filtri += "Codice mandato: " + self.List.PagingFilter.CodiceMandato() + "; ";
                    }
                    if (self.List.PagingFilter.CodFiscSottoscrittore() != null &&
                        self.List.PagingFilter.CodFiscSottoscrittore() != "") {
                        filtri += "C.F. sottoscrittore: " + self.List.PagingFilter.CodFiscSottoscrittore() + "; ";
                    }
                    if (self.List.PagingFilter.DataCreazioneFrom() != null &&
                        self.List.PagingFilter.DataCreazioneFrom() != "") {
                        filtri += "Data creazione da: " +
                            moment(self.List.PagingFilter.DataCreazioneFrom()).format('DD/MM/YYYY') +
                            "; ";
                    }
                    if (self.List.PagingFilter.DataCreazioneTo() != null &&
                        self.List.PagingFilter.DataCreazioneTo() != "") {
                        filtri += "Data creazione a: " +
                            moment(self.List.PagingFilter.DataCreazioneTo()).format('DD/MM/YYYY') +
                            "; ";
                    }
                    if (self.List.PagingFilter.DataRicezioneFrom() != null &&
                        self.List.PagingFilter.DataRicezioneFrom() != "") {
                        filtri += "Data ricezione da: " +
                            moment(self.List.PagingFilter.DataRicezioneFrom()).format('DD/MM/YYYY') +
                            "; ";
                    }
                    if (self.List.PagingFilter.DataRicezioneTo() != null &&
                        self.List.PagingFilter.DataRicezioneTo() != "") {
                        filtri += "Data ricezione a: " +
                            moment(self.List.PagingFilter.DataRicezioneTo()).format('DD/MM/YYYY') +
                            "; ";
                    }

                    if (filtri == "") {
                        filtri = "Nessun filtro avanzato impostato";
                    }
                    return filtri;
                });


                self.Search = function () {
                    self.AvanzateBodyVisible(false);
                    self.List.Validation.removeAll();
                    self.List.Search();

                    self.AziendaSelezionataLastSearch(self.AziendaSelezionata());

                    self.PagingFilterLastSearch.StartIndex(self.List.PagingFilter.StartIndex());
                    self.PagingFilterLastSearch.CodiceAbi(self.List.PagingFilter.CodiceAbi());
                    self.PagingFilterLastSearch.Size(self.List.PagingFilter.Size());
                    self.PagingFilterLastSearch.DataCreazioneFrom(self.List.PagingFilter.DataCreazioneFrom());
                    self.PagingFilterLastSearch.DataCreazioneTo(self.List.PagingFilter.DataCreazioneTo());
                    self.PagingFilterLastSearch.DataRicezioneFrom(self.List.PagingFilter.DataRicezioneFrom());
                    self.PagingFilterLastSearch.DataRicezioneTo(self.List.PagingFilter.DataRicezioneTo());
                    self.PagingFilterLastSearch.TipoFlusso(self.List.PagingFilter.TipoFlusso());
                    self.PagingFilterLastSearch.StatoEsito(self.List.PagingFilter.StatoEsito());
                    self.PagingFilterLastSearch.CodiceMandato(self.List.PagingFilter.CodiceMandato());
                    self.PagingFilterLastSearch.CodFiscSottoscrittore(self.List.PagingFilter.CodFiscSottoscrittore());
                }

                self.SerchLast = function (columnNumber) {
                    return function () {
                        self.AziendaSelezionata(self.AziendaSelezionataLastSearch());
                        
                        self.List.PagingFilter.CodiceAbi(self.PagingFilterLastSearch.CodiceAbi());
                        self.List.PagingFilter.DataCreazioneFrom(self.PagingFilterLastSearch.DataCreazioneFrom());
                        self.List.PagingFilter.DataCreazioneTo(self.PagingFilterLastSearch.DataCreazioneTo());
                        self.List.PagingFilter.DataRicezioneFrom(self.PagingFilterLastSearch.DataRicezioneFrom());
                        self.List.PagingFilter.DataRicezioneTo(self.PagingFilterLastSearch.DataRicezioneTo());
                        self.List.PagingFilter.TipoFlusso(self.PagingFilterLastSearch.TipoFlusso());
                        self.List.PagingFilter.StatoEsito(self.PagingFilterLastSearch.StatoEsito());
                        self.List.PagingFilter.CodiceMandato(self.PagingFilterLastSearch.CodiceMandato());
                        self.List.PagingFilter.CodFiscSottoscrittore(self.PagingFilterLastSearch.CodFiscSottoscrittore());

                        self.List.SortToggle(columnNumber)();
                    }
                }

                self.DetailEsito = function(record) {
                    location.hash = Sections.ESITO_DETAIL;
                    Http
                        .Post("/anchise2.web/Seda/SearchEsitiAllineamento/Read", ko.toJSON(record))
                        .success(function(data) {
                            if (!data.HasError) {
                                self.Esito(new App.Seda.Allineamento.EsitoBo(data.Response));
                            }
                        });

                    Http
                        .Post("/anchise2.web/Seda/SearchEsitiAllineamento/StatiAvanzamentoList", ko.toJSON(record))
                        .success(function(data) {
                            if (!data.HasError) {
                                self.StatiAvanzamentoList.AllData(data.Response.Items);
                                self.StatiAvanzamentoList.Sort("DataCreazione", true);
                            }
                        });
                }

                self.DetailEsitoGD = function(record) {
                    location.hash = Sections.ESITO_DETAIL_READONLY;
                    Http
                        .Post("/anchise2.web/Seda/SearchEsitiAllineamento/ReadOnly", ko.toJSON(record))
                        .success(function(data) {
                            if (!data.HasError) {
                                self.Esito(new App.Seda.Allineamento.EsitoBo(data.Response));
                            }
                        });

                    Http
                        .Post("/anchise2.web/Seda/SearchEsitiAllineamento/StatiAvanzamentoListReadOnly", ko.toJSON(record))
                        .success(function(data) {
                            if (!data.HasError) {
                                self.StatiAvanzamentoList.AllData(data.Response.Items);
                                self.StatiAvanzamentoList.Sort("DataCreazione", true);
                            }
                        });
                }

                self.ReturnToFilter = function() {
                    location.hash = Sections.SEARCH;
                }

                self.ResetFilter = function() {
                    self.List.PagingFilter.StartIndex(1);
                    self.List.PagingFilter.CodiceAbi(null);
                    self.List.PagingFilter.Size("10");
                    self.List.PagingFilter.DataCreazioneFrom(null);
                    self.List.PagingFilter.DataCreazioneTo(null);
                    self.List.PagingFilter.DataRicezioneFrom(null);
                    self.List.PagingFilter.DataRicezioneTo(null);
                    self.AziendaSelezionata(null);
                    self.List.PagingFilter.TipoFlusso(null);
                    self.List.PagingFilter.CodiceMandato(null);
                    self.List.PagingFilter.CodFiscSottoscrittore(null);
                    self.List.PagingFilter.ClasseServizio(null);
                    self.List.PagingFilter.BloccoLogico(null);

                    self.List.Search();
                }

            }
        });
</script>


<script type="text/html" id="esito-allineamento-seda">
    <div class="riquadro">
        <div>
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Allineamento</h1>
            
        </div>

        <div data-bind="with: Esito" style="font-size: 12px;">
            <div class="section">
                <div class="row">

                    <!-- Dati Ordinante-->
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12 text-center">
                            <h1>
                                Dati Ordinante
                            </h1>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Rag. Soc./Intestatario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: RagioneSocialeOrdinante"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Codice SIA:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: SiaOrdinante"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Codice CUC:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CucOrdinante"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        ABI - Banca:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.AbiBanca"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        BIC:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: BicOrdinante"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding: 0">
                                        ID Creditore:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IdCreditore"></label>
                                </div>
                            </div>

                        </div>

                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding: 0">
                                        Rag. Soc./Intestatario Creditore effettivo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: RagioneSocialeCreditoreEff"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Dati Debitore-->
                    <!-- ko if: IdEsitoDistinta() == null -->
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12 text-center">
                            <h1>
                                Dati Debitore
                            </h1>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Rag. Soc./Intestatario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Debitore.Denominazione"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Identificativo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IdentificativoDebitore"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Indirizzo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Debitore.Indirizzo.Via"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        C.F. sottoscrittore:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Debitore.CodiceFiscale"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        IBAN:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Debitore.Iban"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        BIC:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Debitore.Bic"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Rag. Soc./Intestatario Debitore effettivo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: RagioneSocialeDebitoreEff"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Dati Flusso-->
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12 text-center">
                            <h1>
                                Dati Flusso
                            </h1>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Identificativo richiesta:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IdRichiesta"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Tipo flusso:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.LocalizationTipoFlusso(TipoFlusso())"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Data sottoscrizione:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="dateText: DataSottoscrizioneMandato"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Codice mandato:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CodiceMandato"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Sequenza incasso:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.LocalizationSeqIncasso(SequenzaIncasso())"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Identificativo mandato:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CodIdentificativoMandato"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Tipo mandato:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.LocalizationTipoMandato(TipoMandato())"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Informazioni Aggiuntive-->
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12 text-center">
                            <h1>
                                Informazioni aggiuntive
                            </h1>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Modifica richiesta da:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: ModificaRichiestaDa"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Domiciliazione mandato:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: DomiciliazioneMandato"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Codice mandato originario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CodiceMandatoOriginario"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Creditore originario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CreditoreOriginario"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        ID creditore originario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IdCreditoreOriginario"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        IBAN debitore originario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IbanDebitoreOriginario"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Stato:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.LocalizationEsito(Stato(), false)"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Esito per flussi SEDAC-->
                    <div data-bind="visible: (EsitoFlusso() || CodiceScarto() || MotivoAggiuntivoScarto())" class="col-xs-12 white-block">
                        <div class="col-xs-12 text-center">
                            <h1>
                                Esito per flussi sedac
                            </h1>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Esito:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.LocalizationEsitoFlusso(EsitoFlusso())"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Codice rifiuto:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CodiceScarto"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Motivazione aggiuntiva rifiuto:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: MotivoAggiuntivoScarto"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /ko -->

                </div>
            </div>
        </div>
        
        <!--ko if: StatiAvanzamentoList.AllData().length > 0-->
        <div data-bind="with: StatiAvanzamentoList" style="font-size: 12px;">
            <div class="table-responsive">
                <div class="dataTables_wrapper" style="margin-top: 10px">
                    <table class="dataTable table">
                        <thead>
                            <tr>
                                <th data-bind="css: ThCss('DataCreazione'), click: SortToggle('DataCreazione')" style="padding-left: 15px;font-size: 13px">
                                    Data creazione
                                </th>
                                <th data-bind="css: ThCss('DataCaricamento'), click: SortToggle('DataCaricamento')" style="padding-left: 15px;font-size: 13px">
                                    Data caricamento
                                </th>
                                <th data-bind="css: ThCss('StatoMessaggio'), click: SortToggle('StatoMessaggio')" style="padding-left: 15px;font-size: 13px">
                                    Stato
                                </th>
                                <th data-bind="css: ThCss('DescrizioneStato'), click: SortToggle('DescrizioneStato')" style="padding-left: 15px;font-size: 13px">
                                    Descrizione stato
                                </th>
                                <th style="padding-left: 15px;font-size: 13px">
                                    Informazioni aggiuntive
                                </th>
                                <th style="padding-left: 15px;font-size: 13px">
                                    Nome tag
                                </th>
                                <th style="padding-left: 15px;font-size: 13px">
                                    Descrizione libera
                                </th>
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: Page">
                            <tr>
                                <td style="text-align: center;" data-bind="dateText: DataCreazione"></td>
                                <td style="text-align: center;" data-bind="dateText: DataCaricamento"></td>

                                <td data-bind="text: $component.LocalizationEsito(StatoMessaggio)"></td>
                                
                                <td data-bind="text: $component.LocalizationEsito(StatoMessaggio,true)"></td>
                                <td data-bind="text: CausaleEsito"></td>
                                <td data-bind="text: NomeTag"></td>
                                <td data-bind="text: DescrizioneLibera"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <paginatore params="PagedList: $data"></paginatore>
            </div>
        </div>
        <!-- /ko -->
    </div>
    <div class="margin-bottom20 text-right">
        
        <div id="export-esiti-allineamento-seda-dett" value="Esporta" style="display: inline-block; vertical-align: top;"></div>
        <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back" />
    </div>

    <!--popup-->
    

</script>


<script type="text/javascript">
    ko.components.register('esito-allineamento-seda', {
        template: { element: 'esito-allineamento-seda' },
        viewModel: function (params) {
            var self = this;

            if (!params.List instanceof App.Core.PagedArrayAsync) {
                throw "Parameter List not valid";
            }

            //self.PopupDetailVisible = ko.observable(false);
            self.RecordSel = ko.observable(new App.Seda.StatoAvanzamentoBo(null));

            self.Esito = params.Esito;
            self.StatiAvanzamentoList = params.StatiAvanzamentoList;

            self.LocalizationEsito = function (statoEsito, longValue) {
                return Localization.StatiEsito.GetLabel(statoEsito, longValue);
            };

            self.LocalizationTipoFlusso = function (tipoFlusso) {
                return Localization.TipoFlusso.GetLabel(tipoFlusso);
            };

            self.LocalizationSeqIncasso = function (sequenzaIncasso) {
                return Localization.SequenzaIncasso.GetLabel(sequenzaIncasso);
            };

            self.LocalizationTipoMandato = function (tipoMandato) {
                return Localization.TipoMandato.GetLabel(tipoMandato);
            };


            self.LocalizationEsitoFlusso = function(esitoFlusso) {
                return Localization.EsitoFlusso.GetLabel(esitoFlusso);
            }

            self.Back = function () { history.back(); };
            var exportItems = [
            {
                type: "Pdf",
                url: '/anchise2.web/Stampe/StampeDettaglio/StampaEsitiDettaglioAllineamentoSeda',
            }
            ];

            var esitoSubscribe = self.Esito.subscribe(function () {
                Export.print("export-esiti-allineamento-seda-dett", exportItems, ko.mapping.toJS(self.Esito));
            });

            self.StampaPdf = function (data) {
                var data = ko.toJS(self.Esito);
                //data.DataFlusso = self.Esito().DataFlusso() ? moment(self.Esito().DataFlusso()).format('') : null;
                //data.DataScadenza = self.Esito().DataScadenza() ? moment(self.Esito().DataScadenza()).format('') : null;
                //data.DataSottoscrizione = self.Esito().DataSottoscrizione() ? moment(self.Esito().DataSottoscrizione()).format('') : null;

                $.fileDownload('/anchise2.web/Stampe/StampeDettaglio/StampaDettaglioEsitoAllineamentoSedaPdf', {
                    httpMethod: 'POST',
                    data: data
                })
                .fail(function (responseHtml, url, error) {
                    $('body').html(responseHtml);
                });
            };

            

            self.StampaDettaglioPdf = function (data) {
                var data = ko.toJS(self.RecordSel);
                //data.DataCaricamento = self.RecordSel().DataCaricamento ? moment(self.RecordSel().DataCaricamento).format('') : null;
                //data.DataCreazione = self.RecordSel().DataCreazione ? moment(self.RecordSel().DataCreazione).format('') : null;
                $.fileDownload('/anchise2.web/Stampe/StampeDettaglio/StampaDettaglioStatoEsitoAllineamentoSedaPdf', {
                    httpMethod: 'POST',
                    data: data
                })
                .fail(function (responseHtml, url, error) {
                    $('body').html(responseHtml);
                });
            };

            //self.TogglePopupDetailVisible = function () {
            //    self.PopupDetailVisible(!self.PopupDetailVisible());
            //}

            self.AbiBanca = ko.pureComputed(function () {
                var result = "";
                if (self.Esito().AbiOrdinante()) {
                    var banca = App.Common.GetBancheFromPiazzatura(_filterPiazzatureBanche(self.Esito().AbiOrdinante()));
                    if (banca.length == 1)
                        result = banca[0].CodiceAbi + " - " + banca[0].Descrizione;
                    else
                        result = self.Esito().AbiOrdinante();
                }

                return result;
            }, self);

            var _filterPiazzatureBanche = function (Abi) {
                return ko.utils.arrayFilter(PIAZZATURA, function (p) {
                    var current = new App.Common.PiazzaturaBo(p);
                    return (current.Rapporto.CodiceAbi() === Abi);
                });
            };
        }
    });
</script>


<script type="text/html" id="esito-allineamento-seda-readonly">
    <div class="riquadro">
        <div>
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Allineamento</h1>
            
        </div>

        <div data-bind="with: Esito" style="font-size: 12px;">
            <div class="section">
                <div class="row">

                    <!-- Dati Ordinante-->
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12 text-center">
                            <h1>
                                Dati Ordinante
                            </h1>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Rag. Soc./Intestatario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: RagioneSocialeOrdinante"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Codice SIA:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: SiaOrdinante"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Codice CUC:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CucOrdinante"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        ABI - Banca:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.AbiBanca"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Stato:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.LocalizationEsito(Stato(), false)"></label>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Identificativo richiesta:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IdRichiesta"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /ko -->

                </div>
            </div>
        </div>
        
        <!--ko if: StatiAvanzamentoList.AllData().length > 0-->
        <div data-bind="with: StatiAvanzamentoList" style="font-size: 12px;">
            <div class="table-responsive">
                <div class="dataTables_wrapper" style="margin-top: 10px">
                    <table class="dataTable table">
                        <thead>
                            <tr>
                                <th data-bind="css: ThCss('DataCreazione'), click: SortToggle('DataCreazione')" style="padding-left: 15px;font-size: 13px">
                                    Data creazione
                                </th>
                                <th data-bind="css: ThCss('DataCaricamento'), click: SortToggle('DataCaricamento')" style="padding-left: 15px;font-size: 13px">
                                    Data caricamento
                                </th>
                                <th data-bind="css: ThCss('StatoMessaggio'), click: SortToggle('StatoMessaggio')" style="padding-left: 15px;font-size: 13px">
                                    Stato
                                </th>
                                <th data-bind="css: ThCss('DescrizioneStato'), click: SortToggle('DescrizioneStato')" style="padding-left: 15px;font-size: 13px">
                                    Descrizione stato
                                </th>
                                <!-- Campi rimossi perch� non esistenti nelle Grandi Distinte (ReadOnly)-->
                                
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: Page">
                            <tr>
                                <td style="text-align: center;" data-bind="dateText: DataCreazione"></td>
                                <td style="text-align: center;" data-bind="dateText: DataCaricamento"></td>

                                <td data-bind="text: $component.LocalizationEsito(StatoMessaggio)"></td>
                                
                                <td data-bind="text: $component.LocalizationEsito(StatoMessaggio,true)"></td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
                <paginatore params="PagedList: $data"></paginatore>
            </div>
        </div>
        <!-- /ko -->
    </div>
    <div class="margin-bottom20 text-right">
        
        <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back" />
    </div>

</script>


<script type="text/javascript">
    ko.components.register('esito-allineamento-seda-readonly', {
        template: { element: 'esito-allineamento-seda-readonly' },
        viewModel: function (params) {
            var self = this;

            if (!params.List instanceof App.Core.PagedArrayAsync) {
                throw "Parameter List not valid";
            }

            //self.PopupDetailVisible = ko.observable(false);
            self.RecordSel = ko.observable(new App.Seda.StatoAvanzamentoBo(null));

            self.Esito = params.Esito;
            self.StatiAvanzamentoList = params.StatiAvanzamentoList;

            self.LocalizationEsito = function (statoEsito, longValue) {
                return Localization.StatiEsito.GetLabel(statoEsito, longValue);
            };

            self.LocalizationTipoFlusso = function (tipoFlusso) {
                return Localization.TipoFlusso.GetLabel(tipoFlusso);
            };

            self.LocalizationSeqIncasso = function (sequenzaIncasso) {
                return Localization.SequenzaIncasso.GetLabel(sequenzaIncasso);
            };

            self.LocalizationTipoMandato = function (tipoMandato) {
                return Localization.TipoMandato.GetLabel(tipoMandato);
            };


            self.LocalizationEsitoFlusso = function(esitoFlusso) {
                return Localization.EsitoFlusso.GetLabel(esitoFlusso);
            }

            self.Back = function () { history.back(); };

            self.StampaPdf = function (data) {
                var data = ko.toJS(self.Esito);
                //data.DataFlusso = self.Esito().DataFlusso() ? moment(self.Esito().DataFlusso()).format('') : null;
                //data.DataScadenza = self.Esito().DataScadenza() ? moment(self.Esito().DataScadenza()).format('') : null;
                //data.DataSottoscrizione = self.Esito().DataSottoscrizione() ? moment(self.Esito().DataSottoscrizione()).format('') : null;

                $.fileDownload('/anchise2.web/Stampe/StampeDettaglio/StampaDettaglioEsitoAllineamentoSedaPdf', {
                    httpMethod: 'POST',
                    data: data
                })
                .fail(function (responseHtml, url, error) {
                    $('body').html(responseHtml);
                });
            };

            

            self.StampaDettaglioPdf = function (data) {
                var data = ko.toJS(self.RecordSel);
                //data.DataCaricamento = self.RecordSel().DataCaricamento ? moment(self.RecordSel().DataCaricamento).format('') : null;
                //data.DataCreazione = self.RecordSel().DataCreazione ? moment(self.RecordSel().DataCreazione).format('') : null;
                $.fileDownload('/anchise2.web/Stampe/StampeDettaglio/StampaDettaglioStatoEsitoAllineamentoSedaPdf', {
                    httpMethod: 'POST',
                    data: data
                })
                .fail(function (responseHtml, url, error) {
                    $('body').html(responseHtml);
                });
            };

            //self.TogglePopupDetailVisible = function () {
            //    self.PopupDetailVisible(!self.PopupDetailVisible());
            //}

            self.AbiBanca = ko.pureComputed(function () {
                var result = "";
                if (self.Esito().AbiOrdinante()) {
                    var banca = App.Common.GetBancheFromPiazzatura(_filterPiazzatureBanche(self.Esito().AbiOrdinante()));
                    if (banca.length == 1)
                        result = banca[0].CodiceAbi + " - " + banca[0].Descrizione;
                    else
                        result = self.Esito().AbiOrdinante();
                }

                return result;
            }, self);

            var _filterPiazzatureBanche = function (Abi) {
                return ko.utils.arrayFilter(PIAZZATURA, function (p) {
                    var current = new App.Common.PiazzaturaBo(p);
                    return (current.Rapporto.CodiceAbi() === Abi);
                });
            };
        }
    });
</script>


<div id="909fa6ad16c1496a891fd3f917f3a4e9_5">
    <div id="909fa6ad16c1496a891fd3f917f3a4e9_3">
        <!-- RICERCA -->
        <div data-bind="visible: CurrentSection() == Sections.SEARCH" style="display: none;">
            <div class="riquadro">
                <div>
                    <div style="float:left;">
                        <div class="flag riepilogo">&nbsp;</div>
                        <h1>Esiti Allineamento Seda</h1>
                    </div>
                </div>
                <div class="clearall"></div>
                <div>
                    <!-- VALIDATION -->
                    <validation-messages params="Validation: List.Validation">
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
                        <div class="row">
                            <div class="form-group">
                                <div class="form-field-input col-xs-3">
                                    <label class="control-label">
                                        Rag. Soc./Intestatario:
                                    </label>
                                    <div class="form-field">
                                        <select class="form-control" data-bind="options: Aziende, optionsCaption: 'Tutti', optionsText: 'RagioneSociale', value: AziendaSelezionata"><option value="">Tutti</option><option value="">AUTOMOBILE CLUB MODENA</option></select>
                                    </div>
                                </div>
                                <div class="form-field-input col-xs-3">
                                    <label class="control-label">
                                        Banca:
                                    </label>
                                    <div class="form-field">
                                        <select class="form-control" data-bind="options: Banche, optionsCaption: 'Tutti', optionsText: 'Descrizione', optionsValue: 'CodiceAbi', value: List.PagingFilter.CodiceAbi"><option value="">Tutti</option><option value="05188">BANCA POPOLARE DI VERONA - S. GEMINIANO E S. PROSPERO S.P.A.</option><option value="05034">BANCO BPM S.P.A.</option></select>
                                    </div>
                                </div>
                                <div class="form-field-input col-xs-2">
                                    <label class="control-label">
                                        Mostra
                                    </label>
                                    <div class="form-field">
                                        <select class="form-control" data-bind="options: List.PageSizeDropDown, value: List.PagingFilter.Size"><option value="10">10</option><option value="20">20</option><option value="50">50</option><option value="100">100</option></select>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- AVANZATE -->
                    <div class="section">
                        <div class="row link" data-bind="click: ToggleAdvancedFilter">
                            <h3 class="titleSection">
                                Avanzate
                            </h3>
                            <div class="collapse-img-position">
                                <div data-bind="css: AvanzateCollapseCss" class="icon-collapse icon-replace active"></div>
                            </div>
                        </div>
                        <div data-bind="slideVisible: AvanzateBodyVisible" style="display: block;">

                            <div class="row">
                                <div class="form-group">
                                    <label class="control-label col-xs-2">
                                        Tipo flusso:
                                    </label>
                                    <div class="col-xs-3">
                                        <select class="form-control" data-bind="options: TipoFlusso, optionsCaption: 'Tutti', optionsText: 'V', optionsValue: 'K', value: List.PagingFilter.TipoFlusso"><option value="">Tutti</option><option value="NWC">Nuovo mandato SEDAC</option><option value="MDC">Modifica mandato SEDAC</option><option value="DLC">Cancellazione mandato SEDAC</option><option value="REC">Risposta mandato SEDAC</option><option value="NWD">Nuovo mandato SEDAD</option><option value="MDD">Modifica mandato SEDAD</option><option value="DLD">Cancellazione mandato SEDAD</option><option value="RED">Risposta mandato SEDAD</option></select>
                                    </div>
                                    <label class="control-label col-xs-2">
                                        Stato:
                                    </label>
                                    <div class="col-xs-3">
                                        <select class="form-control" data-bind="options: Stato, optionsCaption: 'Tutti', optionsText: 'V', optionsValue: 'K', value: List.PagingFilter.StatoEsito"><option value="">Tutti</option><option value="FIRM">Autorizzata</option><option value="ACTC">Confermata</option><option value="RJCT">Scartata</option></select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-xs-2">Codice mandato:</label>
                                        <div class="col-xs-3">
                                            <input type="text" class="form-control" data-bind="value: List.PagingFilter.CodiceMandato">
                                        </div>
                                        <label class="control-label col-xs-2">C.F. sottoscrittore:</label>
                                        <div class="col-xs-3">
                                            <input type="text" class="form-control" data-bind="value: List.PagingFilter.CodFiscSottoscrittore">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2 col-xs-offset-2">Da:</div>
                                <div class="col-xs-2 col-xs-offset-2">A:</div>
                            </div>
                            <div class="row">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-xs-2">Data creazione:</label>
                                        <div class="col-xs-3">
                                            <date-picker params="Date: List.PagingFilter.DataCreazioneFrom">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_1">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                                        </div>
                                        <div class="col-xs-3 col-xs-offset-1">
                                            <date-picker params="Date: List.PagingFilter.DataCreazioneTo">
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
                            </div>
                            <div class="row">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-xs-2">Data ricezione</label>
                                        <div class="col-xs-3">
                                            <date-picker params="Date: List.PagingFilter.DataRicezioneFrom">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_3">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                                        </div>
                                        <div class="col-xs-3 col-xs-offset-1">
                                            <date-picker params="Date: List.PagingFilter.DataRicezioneTo">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_4">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SUBMIT ACTIONS -->
            <div class="margin-bottom20 text-right">
                <input type="button" class="btn btn-primary" value="Visualizza " data-bind="singleClick: Search">
            </div>
        </div>

        <div data-bind="visible: CurrentSection() == Sections.RESULT" style="display: none;">
            <list-esito params="List: List, Esito: Esito, Aziende: Aziende, Banche: Banche, AziendaSelezionata: AziendaSelezionata, StatiAvanzamentoList: StatiAvanzamentoList, PagingFilterLastSearch: PagingFilterLastSearch, AziendaSelezionataLastSearch: AziendaSelezionataLastSearch">
    
    <div>
        <div class="riquadro">
            <div>
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Esiti Allineamento Seda</h1>
                
            </div>
            <!-- ko with: List -->
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
            <div class="table-responsive">
                <div class="row">
                    <div class="form-group">
                        <div class="form-field-input col-xs-3">
                            <label class="control-label">
                                Rag. Soc./Intestatario
                            </label>
                            <div class="form-field">
                                <select class="form-control" data-bind="options: $component.Aziende, optionsCaption: 'Tutti', optionsText: 'RagioneSociale' , value: $component.AziendaSelezionata"><option value="">Tutti</option><option value="">AUTOMOBILE CLUB MODENA</option></select>
                            </div>
                        </div>
                        <div class="form-field-input col-xs-3">
                            <label class="control-label">
                                Banca:
                            </label>
                            <div class="form-field">
                                <select class="form-control" data-bind="options: $component.Banche, optionsCaption: 'Tutti', optionsText: 'Descrizione' , optionsValue: 'CodiceAbi' , value: PagingFilter.CodiceAbi"><option value="">Tutti</option><option value="05188">BANCA POPOLARE DI VERONA - S. GEMINIANO E S. PROSPERO S.P.A.</option><option value="05034">BANCO BPM S.P.A.</option></select>
                            </div>
                        </div>

                        <div class="form-field-input col-xs-4">
                            <label class="control-label">
                                Mostra
                            </label>
                            <div class="form-field">
                                <div class="col-xs-4">
                                    <select class="form-control" data-bind="options: PageSizeDropDown, value: PagingFilter.Size"><option value="10">10</option><option value="20">20</option><option value="50">50</option><option value="100">100</option></select>
                                </div>
                                <div class="col-xs-8">
                                    <span class="search" data-bind="singleClick: $component.Search"></span>
                                    <span class="returnToFilter" data-bind="singleClick: $component.ReturnToFilter"></span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="section">
                    <div class="row link" data-bind="click: $component.ToggleAdvancedFilter">
                        <label class="control-label col-xs-11" data-bind="text: $component.FiltriAvanzati, visible: !$component.AvanzateBodyVisible()">Nessun filtro avanzato impostato</label>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.AvanzateCollapseCss" class="icon-replace icon-collapse active icon-expand"></div>
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.AvanzateBodyVisible" style="padding-top: 13px; display: none;">
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-xs-2">
                                    Tipo flusso:
                                </label>
                                <div class="col-xs-3">
                                    <select class="form-control" data-bind="options: $component.TipoFlusso, optionsCaption: 'Tutti', optionsText: 'V', optionsValue: 'K', value: PagingFilter.TipoFlusso"><option value="">Tutti</option><option value="NWC">Nuovo mandato SEDAC</option><option value="MDC">Modifica mandato SEDAC</option><option value="DLC">Cancellazione mandato SEDAC</option><option value="REC">Risposta mandato SEDAC</option><option value="NWD">Nuovo mandato SEDAD</option><option value="MDD">Modifica mandato SEDAD</option><option value="DLD">Cancellazione mandato SEDAD</option><option value="RED">Risposta mandato SEDAD</option></select>
                                </div>
                                <label class="control-label col-xs-2">
                                    Stato:
                                </label>
                                <div class="col-xs-3">
                                    <select class="form-control" data-bind="options: $component.Stato, optionsCaption: 'Tutti', optionsText: 'V', optionsValue: 'K', value: PagingFilter.StatoEsito"><option value="">Tutti</option><option value="FIRM">Autorizzata</option><option value="ACTC">Confermata</option><option value="RJCT">Scartata</option></select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-2">Codice mandato:</label>
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control" data-bind="value: PagingFilter.CodiceMandato">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-2">C.F. sottoscrittore:</label>
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control" data-bind="value: PagingFilter.CodFiscSottoscrittore">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2 col-xs-offset-2">Da:</div>
                            <div class="col-xs-2 col-xs-offset-2">A:</div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-2">Data creazione:</label>
                                    <div class="col-xs-3">
                                        <date-picker params="Date: PagingFilter.DataCreazioneFrom">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_5">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                                    </div>
                                    <div class="col-xs-3 col-xs-offset-1">
                                        <date-picker params="Date: PagingFilter.DataCreazioneTo">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_6">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-2">Data ricezione</label>
                                    <div class="col-xs-3">
                                        <date-picker params="Date: PagingFilter.DataRicezioneFrom">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_7">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                                    </div>
                                    <div class="col-xs-3 col-xs-offset-1">
                                        <date-picker params="Date: PagingFilter.DataRicezioneTo">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_8">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="margin-bottom10 text-right">
                            <input type="button" class="btn btn-primary" value="Ricerca" data-bind="singleClick: $component.Search">
                        </div>
                    </div>
                </div>

                <div class="dataTables_wrapper" style="margin-top: 10px">
                    <table class="dataTable table">
                        <thead>
                            <tr>
                                <th data-bind="css: ThCss('1'), singleClick: $component.SerchLast('1')" style="padding-left: 15px;font-size: 13px" class="sorting_desc">
                                    Dato
                                </th>
                                <th data-bind="css: ThCss('2'), singleClick: $component.SerchLast('2')" style="padding-left: 15px;font-size: 13px" class="sorting">
                                    Cliente
                                </th>
                                <th data-bind="css: ThCss('3'), singleClick: $component.SerchLast('3')" style="padding-left: 15px;font-size: 13px" class="sorting">
                                    Abi
                                </th>
                                <th data-bind="css: ThCss('4'), singleClick: $component.SerchLast('4')" style="padding-left: 15px;font-size: 13px" class="sorting">
                                    Creazione
                                </th>
                                <th data-bind="css: ThCss('5'), singleClick: $component.SerchLast('5')" style="padding-left: 15px;font-size: 13px" class="sorting">
                                    Ricezione
                                </th>
                                <th data-bind="css: ThCss('6'), singleClick: $component.SerchLast('6')" style="padding-left: 15px;font-size: 13px" class="sorting">
                                    Codice mandato
                                </th>
                                <th data-bind="css: ThCss('7'), singleClick: $component.SerchLast('7')" style="padding-left: 15px;font-size: 13px" class="sorting">
                                    C.F. sottoscrittore
                                </th>
                                <th data-bind="css: ThCss('8'), singleClick: $component.SerchLast('8')" style="padding-left: 15px;font-size: 13px" class="sorting">
                                    Tipo flusso
                                </th>
                                <th data-bind="css: ThCss('9'), singleClick: $component.SerchLast('9')" style="padding-left: 15px;font-size: 13px" class="sorting">
                                    Tipo mandato
                                </th>
                                <th data-bind="css: ThCss('10'), singleClick: $component.SerchLast('10')" style="padding-left: 15px;font-size: 13px" class="sorting">
                                    Num. Disposiz.
                                </th>
                                <th data-bind="css: ThCss('11'), singleClick: $component.SerchLast('11')" style="padding-left: 15px;font-size: 13px" class="sorting">
                                    Stato
                                </th>
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: Page">
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 --><!-- /ko -->
                                    <!-- ko if: (TipoEsito() == 3 || TipoEsito() == 9) -->
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Flussi SEDA e Remun. SEDA Debitore"></span>
                                    <!-- /ko -->
                                    <!-- GRANDI DISTINTE -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->
                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->
                                </td>
                                <td data-bind="text: Debitore.Denominazione">LOSI ANDREA</td>
                                <td data-bind="text: AbiOrdinante">05034</td>                                
                                <td data-bind="dateText: DataCreazione">15/10/2018</td>
                                <td data-bind="dateText: DataRicezione">16/10/2018</td>
                                <td data-bind="text: CodiceMandato">AVLC94EL501DT</td>
                                <td data-bind="text: Debitore.CodiceFiscale"></td>
                                <td data-bind="text: $component.LocalizationTipoFlusso(TipoFlusso())">Cancellazione SEDAD</td>
                                <td data-bind="text: TipoMandato">CORSEDEM</td>
                                <td data-bind="text: NumeroDisposizioni" style="text-align: center">1</td>
                                <!--<td data-bind="text: $component.LocalizationStatiEsito(Stato())"></td>-->
                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.LocalizationStatiEsito(Stato())">Confermata</a>
                                </td>
                                <!-- /ko -->
                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 4) || (TipoEsito() == 5) --><!-- /ko -->
                            </tr>
                        
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 --><!-- /ko -->
                                    <!-- ko if: (TipoEsito() == 3 || TipoEsito() == 9) -->
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Flussi SEDA e Remun. SEDA Debitore"></span>
                                    <!-- /ko -->
                                    <!-- GRANDI DISTINTE -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->
                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->
                                </td>
                                <td data-bind="text: Debitore.Denominazione">SALAMI GIACOMO</td>
                                <td data-bind="text: AbiOrdinante">05034</td>                                
                                <td data-bind="dateText: DataCreazione">16/10/2018</td>
                                <td data-bind="dateText: DataRicezione">16/10/2018</td>
                                <td data-bind="text: CodiceMandato">AVLC94AA685LN</td>
                                <td data-bind="text: Debitore.CodiceFiscale">STRVRI30R62D037W</td>
                                <td data-bind="text: $component.LocalizationTipoFlusso(TipoFlusso())">Modifica SEDAD</td>
                                <td data-bind="text: TipoMandato">CORSEDPM</td>
                                <td data-bind="text: NumeroDisposizioni" style="text-align: center">1</td>
                                <!--<td data-bind="text: $component.LocalizationStatiEsito(Stato())"></td>-->
                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.LocalizationStatiEsito(Stato())">Confermata</a>
                                </td>
                                <!-- /ko -->
                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 4) || (TipoEsito() == 5) --><!-- /ko -->
                            </tr>
                        
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 --><!-- /ko -->
                                    <!-- ko if: (TipoEsito() == 3 || TipoEsito() == 9) -->
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Flussi SEDA e Remun. SEDA Debitore"></span>
                                    <!-- /ko -->
                                    <!-- GRANDI DISTINTE -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->
                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->
                                </td>
                                <td data-bind="text: Debitore.Denominazione">GALEAZZI ANGELO</td>
                                <td data-bind="text: AbiOrdinante">05034</td>                                
                                <td data-bind="dateText: DataCreazione">16/10/2018</td>
                                <td data-bind="dateText: DataRicezione">16/10/2018</td>
                                <td data-bind="text: CodiceMandato">AVLC94DX528BP</td>
                                <td data-bind="text: Debitore.CodiceFiscale">NOTPRESENT</td>
                                <td data-bind="text: $component.LocalizationTipoFlusso(TipoFlusso())">Modifica SEDAD</td>
                                <td data-bind="text: TipoMandato">CORSEDPM</td>
                                <td data-bind="text: NumeroDisposizioni" style="text-align: center">1</td>
                                <!--<td data-bind="text: $component.LocalizationStatiEsito(Stato())"></td>-->
                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.LocalizationStatiEsito(Stato())">Confermata</a>
                                </td>
                                <!-- /ko -->
                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 4) || (TipoEsito() == 5) --><!-- /ko -->
                            </tr>
                        
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 --><!-- /ko -->
                                    <!-- ko if: (TipoEsito() == 3 || TipoEsito() == 9) -->
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Flussi SEDA e Remun. SEDA Debitore"></span>
                                    <!-- /ko -->
                                    <!-- GRANDI DISTINTE -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->
                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->
                                </td>
                                <td data-bind="text: Debitore.Denominazione">MONARI GILDO</td>
                                <td data-bind="text: AbiOrdinante">05034</td>                                
                                <td data-bind="dateText: DataCreazione">16/10/2018</td>
                                <td data-bind="dateText: DataRicezione">16/10/2018</td>
                                <td data-bind="text: CodiceMandato">AVLC94AF166TS.</td>
                                <td data-bind="text: Debitore.CodiceFiscale">MNRGLD31A13F257X</td>
                                <td data-bind="text: $component.LocalizationTipoFlusso(TipoFlusso())">Modifica SEDAD</td>
                                <td data-bind="text: TipoMandato">CORSEDPM</td>
                                <td data-bind="text: NumeroDisposizioni" style="text-align: center">1</td>
                                <!--<td data-bind="text: $component.LocalizationStatiEsito(Stato())"></td>-->
                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.LocalizationStatiEsito(Stato())">Confermata</a>
                                </td>
                                <!-- /ko -->
                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 4) || (TipoEsito() == 5) --><!-- /ko -->
                            </tr>
                        
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 --><!-- /ko -->
                                    <!-- ko if: (TipoEsito() == 3 || TipoEsito() == 9) -->
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Flussi SEDA e Remun. SEDA Debitore"></span>
                                    <!-- /ko -->
                                    <!-- GRANDI DISTINTE -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->
                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->
                                </td>
                                <td data-bind="text: Debitore.Denominazione">MONARI GILDO</td>
                                <td data-bind="text: AbiOrdinante">05034</td>                                
                                <td data-bind="dateText: DataCreazione">16/10/2018</td>
                                <td data-bind="dateText: DataRicezione">16/10/2018</td>
                                <td data-bind="text: CodiceMandato">AVLC94AF166TS,</td>
                                <td data-bind="text: Debitore.CodiceFiscale">MNRGLD31A13F257X</td>
                                <td data-bind="text: $component.LocalizationTipoFlusso(TipoFlusso())">Modifica SEDAD</td>
                                <td data-bind="text: TipoMandato">CORSEDPM</td>
                                <td data-bind="text: NumeroDisposizioni" style="text-align: center">1</td>
                                <!--<td data-bind="text: $component.LocalizationStatiEsito(Stato())"></td>-->
                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.LocalizationStatiEsito(Stato())">Confermata</a>
                                </td>
                                <!-- /ko -->
                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 4) || (TipoEsito() == 5) --><!-- /ko -->
                            </tr>
                        
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 --><!-- /ko -->
                                    <!-- ko if: (TipoEsito() == 3 || TipoEsito() == 9) -->
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Flussi SEDA e Remun. SEDA Debitore"></span>
                                    <!-- /ko -->
                                    <!-- GRANDI DISTINTE -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->
                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->
                                </td>
                                <td data-bind="text: Debitore.Denominazione">CAMPANA CARLO</td>
                                <td data-bind="text: AbiOrdinante">05034</td>                                
                                <td data-bind="dateText: DataCreazione">16/10/2018</td>
                                <td data-bind="dateText: DataRicezione">16/10/2018</td>
                                <td data-bind="text: CodiceMandato">AVLC94EB211JR</td>
                                <td data-bind="text: Debitore.CodiceFiscale">CMPCRL36S30F257Y</td>
                                <td data-bind="text: $component.LocalizationTipoFlusso(TipoFlusso())">Modifica SEDAD</td>
                                <td data-bind="text: TipoMandato">CORSEDEM</td>
                                <td data-bind="text: NumeroDisposizioni" style="text-align: center">1</td>
                                <!--<td data-bind="text: $component.LocalizationStatiEsito(Stato())"></td>-->
                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.LocalizationStatiEsito(Stato())">Confermata</a>
                                </td>
                                <!-- /ko -->
                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 4) || (TipoEsito() == 5) --><!-- /ko -->
                            </tr>
                        
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 --><!-- /ko -->
                                    <!-- ko if: (TipoEsito() == 3 || TipoEsito() == 9) -->
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Flussi SEDA e Remun. SEDA Debitore"></span>
                                    <!-- /ko -->
                                    <!-- GRANDI DISTINTE -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->
                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->
                                </td>
                                <td data-bind="text: Debitore.Denominazione">PRAMPOLINI FRANCO</td>
                                <td data-bind="text: AbiOrdinante">05034</td>                                
                                <td data-bind="dateText: DataCreazione">16/10/2018</td>
                                <td data-bind="dateText: DataRicezione">16/10/2018</td>
                                <td data-bind="text: CodiceMandato">AVLC94DY490YS</td>
                                <td data-bind="text: Debitore.CodiceFiscale"></td>
                                <td data-bind="text: $component.LocalizationTipoFlusso(TipoFlusso())">Risposta SEDAD</td>
                                <td data-bind="text: TipoMandato">CORSEDEM</td>
                                <td data-bind="text: NumeroDisposizioni" style="text-align: center">1</td>
                                <!--<td data-bind="text: $component.LocalizationStatiEsito(Stato())"></td>-->
                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.LocalizationStatiEsito(Stato())">Confermata</a>
                                </td>
                                <!-- /ko -->
                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 4) || (TipoEsito() == 5) --><!-- /ko -->
                            </tr>
                        
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 --><!-- /ko -->
                                    <!-- ko if: (TipoEsito() == 3 || TipoEsito() == 9) -->
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Flussi SEDA e Remun. SEDA Debitore"></span>
                                    <!-- /ko -->
                                    <!-- GRANDI DISTINTE -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->
                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->
                                </td>
                                <td data-bind="text: Debitore.Denominazione">CARTELLI GIAN LUCA</td>
                                <td data-bind="text: AbiOrdinante">05034</td>                                
                                <td data-bind="dateText: DataCreazione">16/10/2018</td>
                                <td data-bind="dateText: DataRicezione">16/10/2018</td>
                                <td data-bind="text: CodiceMandato">AVLC94FJ391WD</td>
                                <td data-bind="text: Debitore.CodiceFiscale"></td>
                                <td data-bind="text: $component.LocalizationTipoFlusso(TipoFlusso())">Risposta SEDAD</td>
                                <td data-bind="text: TipoMandato">CORSEDEM</td>
                                <td data-bind="text: NumeroDisposizioni" style="text-align: center">1</td>
                                <!--<td data-bind="text: $component.LocalizationStatiEsito(Stato())"></td>-->
                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.LocalizationStatiEsito(Stato())">Confermata</a>
                                </td>
                                <!-- /ko -->
                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 4) || (TipoEsito() == 5) --><!-- /ko -->
                            </tr>
                        
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 --><!-- /ko -->
                                    <!-- ko if: (TipoEsito() == 3 || TipoEsito() == 9) -->
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Flussi SEDA e Remun. SEDA Debitore"></span>
                                    <!-- /ko -->
                                    <!-- GRANDI DISTINTE -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->
                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->
                                </td>
                                <td data-bind="text: Debitore.Denominazione">FRAULINI FABIO</td>
                                <td data-bind="text: AbiOrdinante">05034</td>                                
                                <td data-bind="dateText: DataCreazione">16/10/2018</td>
                                <td data-bind="dateText: DataRicezione">16/10/2018</td>
                                <td data-bind="text: CodiceMandato">AVLC94EB151JZ</td>
                                <td data-bind="text: Debitore.CodiceFiscale">FRLFBA89R21L885Y</td>
                                <td data-bind="text: $component.LocalizationTipoFlusso(TipoFlusso())">Risposta SEDAD</td>
                                <td data-bind="text: TipoMandato">CORSEDEM</td>
                                <td data-bind="text: NumeroDisposizioni" style="text-align: center">1</td>
                                <!--<td data-bind="text: $component.LocalizationStatiEsito(Stato())"></td>-->
                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.LocalizationStatiEsito(Stato())">Confermata</a>
                                </td>
                                <!-- /ko -->
                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 4) || (TipoEsito() == 5) --><!-- /ko -->
                            </tr>
                        
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 --><!-- /ko -->
                                    <!-- ko if: (TipoEsito() == 3 || TipoEsito() == 9) -->
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Flussi SEDA e Remun. SEDA Debitore"></span>
                                    <!-- /ko -->
                                    <!-- GRANDI DISTINTE -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->
                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->
                                </td>
                                <td data-bind="text: Debitore.Denominazione">LOSI ANDREA</td>
                                <td data-bind="text: AbiOrdinante">05034</td>                                
                                <td data-bind="dateText: DataCreazione">16/10/2018</td>
                                <td data-bind="dateText: DataRicezione">16/10/2018</td>
                                <td data-bind="text: CodiceMandato">AVLC94EL501DT</td>
                                <td data-bind="text: Debitore.CodiceFiscale">not provided</td>
                                <td data-bind="text: $component.LocalizationTipoFlusso(TipoFlusso())">Risposta SEDAD</td>
                                <td data-bind="text: TipoMandato">CORSEDEM</td>
                                <td data-bind="text: NumeroDisposizioni" style="text-align: center">1</td>
                                <!--<td data-bind="text: $component.LocalizationStatiEsito(Stato())"></td>-->
                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.LocalizationStatiEsito(Stato())">Confermata</a>
                                </td>
                                <!-- /ko -->
                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 4) || (TipoEsito() == 5) --><!-- /ko -->
                            </tr>
                        </tbody>
                    </table>
                </div>
                <paginatore params="PagedList: $component.List">
    <div data-bind="visible: PagedList.Page().length > 0 &amp;&amp; PagedList.PageCount() > 1" style="">
        <!-- ko template: {name: PaginatorTemplate()} -->
    <div class="dataTables_paginate" data-bind="with: PagedList">
        <span data-bind="foreach: ko.utils.range(1, $component.MaxPages)">
            <a class="paginate_button current" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)">1</a>
        
            <a class="paginate_button" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)">2</a>
        
            <a class="paginate_button" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)">3</a>
        
            <a class="paginate_button" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)">4</a>
        </span>
        <span><a class="paginate_ellipsis">...</a></span>
        <!--ko with: PageCount-->
        <span><a class="paginate_button" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)">232</a></span>
        <!--/ko-->
    </div>
<!-- /ko -->
    </div>
</paginatore>
                <div data-bind="visible: Page().length === 0" style="display: none;">
                    <search-no-result>
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
</search-no-result>
                </div>
            </div>
            <!-- /ko -->
        </div>
        <div id="export-lista-esiti-allineamento-seda" value="Esporta" style="float: right; margin-bottom: 1%"> <div class="tm-print">     <div class="btn-group undefined">         <button type="button" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">             Esporta <span class="caret" style="margin-left: 12px;"></span>         </button>         <ul class="dropdown-menu">                      <li>                 <a class="link-button Pdf-0" title="Export" style="padding: 10px; padding-right: 30px; padding-top: 5px; padding-bottom: 5px; font-size: 14px; font-family: Helvetica, Arial, sans-serif; font-weight: bold;">                     <div class="icon anchise-icon anchise-icon-export-Pdf"></div>                     <span style="margin-left: 12px;">Pdf</span>                 </a>             </li></ul>     </div>     <div class="print-popup"></div> </div></div>
    </div>

</list-esito>
        </div>
        <!-- ESITO DETAIL -->
        <div data-bind="visible: CurrentSection() == Sections.ESITO_DETAIL" style="">
            <esito-allineamento-seda params="Esito: Esito, StatiAvanzamentoList: StatiAvanzamentoList">
    <div class="riquadro">
        <div>
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Allineamento</h1>
            
        </div>

        <div data-bind="with: Esito" style="font-size: 12px;">
            <div class="section">
                <div class="row">

                    <!-- Dati Ordinante-->
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12 text-center">
                            <h1>
                                Dati Ordinante
                            </h1>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Rag. Soc./Intestatario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: RagioneSocialeOrdinante">AUTOMOBILE CLUB MODENA</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Codice SIA:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: SiaOrdinante">AVLC9</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Codice CUC:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CucOrdinante">0748872E</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        ABI - Banca:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.AbiBanca">05034 - BANCO BPM S.P.A.</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        BIC:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: BicOrdinante">BAPPIT22XXX</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding: 0">
                                        ID Creditore:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IdCreditore">IT280010000000179340369</label>
                                </div>
                            </div>

                        </div>

                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding: 0">
                                        Rag. Soc./Intestatario Creditore effettivo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: RagioneSocialeCreditoreEff"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Dati Debitore-->
                    <!-- ko if: IdEsitoDistinta() == null -->
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12 text-center">
                            <h1>
                                Dati Debitore
                            </h1>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Rag. Soc./Intestatario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Debitore.Denominazione">LOSI ANDREA</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Identificativo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IdentificativoDebitore"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Indirizzo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Debitore.Indirizzo.Via"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        C.F. sottoscrittore:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Debitore.CodiceFiscale"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        IBAN:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Debitore.Iban">IT71U0200858010000028473804</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        BIC:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Debitore.Bic">UNCRITMMXXX</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Rag. Soc./Intestatario Debitore effettivo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: RagioneSocialeDebitoreEff"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Dati Flusso-->
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12 text-center">
                            <h1>
                                Dati Flusso
                            </h1>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Identificativo richiesta:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IdRichiesta">Pain20181015194751005</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Tipo flusso:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.LocalizationTipoFlusso(TipoFlusso())">Cancellazione SEDAD</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Data sottoscrizione:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="dateText: DataSottoscrizioneMandato">01/01/2013</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Codice mandato:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CodiceMandato">AVLC94EL501DT</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Sequenza incasso:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.LocalizationSeqIncasso(SequenzaIncasso())">RCUR - Per una serie di incassi</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Identificativo mandato:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CodIdentificativoMandato">C0-20181012-881155458142</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Tipo mandato:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.LocalizationTipoMandato(TipoMandato())">CORSEDEM - Mandato CORE elettronico</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Informazioni Aggiuntive-->
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12 text-center">
                            <h1>
                                Informazioni aggiuntive
                            </h1>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Modifica richiesta da:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: ModificaRichiestaDa"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Domiciliazione mandato:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: DomiciliazioneMandato">CMF</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Codice mandato originario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CodiceMandatoOriginario"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Creditore originario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CreditoreOriginario"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        ID creditore originario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IdCreditoreOriginario"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        IBAN debitore originario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IbanDebitoreOriginario"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Stato:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.LocalizationEsito(Stato(), false)">Confermata</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Esito per flussi SEDAC-->
                    <div data-bind="visible: (EsitoFlusso() || CodiceScarto() || MotivoAggiuntivoScarto())" class="col-xs-12 white-block">
                        <div class="col-xs-12 text-center">
                            <h1>
                                Esito per flussi sedac
                            </h1>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Esito:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.LocalizationEsitoFlusso(EsitoFlusso())">Rifiutata</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Codice rifiuto:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CodiceScarto">MD16</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Motivazione aggiuntiva rifiuto:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: MotivoAggiuntivoScarto"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /ko -->

                </div>
            </div>
        </div>
        
        <!--ko if: StatiAvanzamentoList.AllData().length > 0--><!-- /ko -->
    </div>
    <div class="margin-bottom20 text-right">
        
        <div id="export-esiti-allineamento-seda-dett" value="Esporta" style="display: inline-block; vertical-align: top;"> <div class="tm-print">     <div class="btn-group undefined">         <button type="button" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">             Esporta <span class="caret" style="margin-left: 12px;"></span>         </button>         <ul class="dropdown-menu">                      <li>                 <a class="link-button Pdf-0" title="Export" style="padding: 10px; padding-right: 30px; padding-top: 5px; padding-bottom: 5px; font-size: 14px; font-family: Helvetica, Arial, sans-serif; font-weight: bold;">                     <div class="icon anchise-icon anchise-icon-export-Pdf"></div>                     <span style="margin-left: 12px;">Pdf</span>                 </a>             </li></ul>     </div>     <div class="print-popup"></div> </div></div>
        <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back">
    </div>

    <!--popup-->
    

</esito-allineamento-seda>
        </div>

        <!-- ESITO DETAIL READ ONLY -->
        <div data-bind="visible: CurrentSection() == Sections.ESITO_DETAIL_READONLY" style="display: none;">
            <esito-allineamento-seda-readonly params="Esito: Esito, StatiAvanzamentoList: StatiAvanzamentoList">
    <div class="riquadro">
        <div>
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Allineamento</h1>
            
        </div>

        <div data-bind="with: Esito" style="font-size: 12px;">
            <div class="section">
                <div class="row">

                    <!-- Dati Ordinante-->
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12 text-center">
                            <h1>
                                Dati Ordinante
                            </h1>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Rag. Soc./Intestatario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: RagioneSocialeOrdinante">AUTOMOBILE CLUB MODENA</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Codice SIA:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: SiaOrdinante">AVLC9</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Codice CUC:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CucOrdinante">0748872E</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        ABI - Banca:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.AbiBanca">05034 - BANCO BPM S.P.A.</label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Stato:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.LocalizationEsito(Stato(), false)">Confermata</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Identificativo richiesta:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IdRichiesta">Pain20181015194751005</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /ko -->

                </div>
            </div>
        </div>
        
        <!--ko if: StatiAvanzamentoList.AllData().length > 0--><!-- /ko -->
    </div>
    <div class="margin-bottom20 text-right">
        
        <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back">
    </div>

</esito-allineamento-seda-readonly>
        </div>
    </div>
</div>


<script type="text/javascript">

    var filter = null;
    var Sections = {
        SEARCH: "#SEARCH",
        RESULT: "#RESULT",
        ESITO_DETAIL: "#ESITO_DETAIL",
        ESITO_DETAIL_READONLY: "#ESITO_DETAIL_READONLY"
    };
    var PIAZZATURA = [{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":580202,"ClasseServizio":0,"Crypt":"71wOezzgqhTYCv4MBKq9Xo/mBtCVwDe2arEqau215jpXXoaiDNVnmregbm9i5SW7SdJLj21fxcsv3EwOHh4yWSaCCnfSsm2kHBiLLlXFdXG9iH61ctHEDGd3rpC2yhksLRrCHVAOuqsAtfxwwIjiuA==","Hash":"C83101B9F26C9C6A3502644A1651E934C20FD6C2534A8E594BB49A5C5360E540"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI VERONA - S. GEMINIANO E S. PROSPERO S.P.A.","DescrizioneSportello":"SEDE DI MODENA","UltimoAggiornamento":"0001-01-01T00:00:00","Saldo":0.0,"DataSaldo":null,"Stato":1,"Bic":null,"Id":null,"IdAzienda":"106609","CodiceIban":null,"CodiceAbi":"05188","CodiceCab":"12900","CodiceFiliale":"12900","NumeroRapporto":"000000047659","CodiceDivisa":"EUR","Descrizione":"000000047659","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000047659","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"580202","Type":106,"Crypt":"Cg5lhgGAGLaNx0txxUUfTV940zMs8zzCb94HTlHsyB8P2m1faFxhRm3F9UxBVSWv","Hash":"7C45C1171430AA8D3A4605CF142F6324167FD961F5EC7C21CBD9093F6DB18276"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"WjwmE3SxGsEFNE/NUHBghMoZ0q9vnVlZbfnbxIQqQuYyqdKE7Gw10UrFUnsUxO/Q","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":812046,"ClasseServizio":0,"Crypt":"GcFk+pPJTE/A2OBvhYUCWtX+9T6jbQ2llLVUBnJDrTiiaHyj4qygJXyLFaqR/cJKSXZg/7096EAV0fSVUzbr1pfJhM9kUgFdL6bOFCcSMiVBwLe/TarC7wBqX4SqvOjiq/fheU6IAnncCwOJ+pdsBQ==","Hash":"CBFD2B5F41F449F0056AF6B1D4097A8E4FD6DD52F93CD3B1C6B5E476C51890D3"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"SEDE DI MODENA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":627308.50,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21402","Id":null,"IdAzienda":"106609","CodiceIban":"IT28J0503412900000000047658","CodiceAbi":"05034","CodiceCab":"12900","CodiceFiliale":"12900","NumeroRapporto":"000000047658","CodiceDivisa":"EUR","Descrizione":"000000047658","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000047658","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"812046","Type":101,"Crypt":"/pIqMKG+io+H3OjsL6Sz3KcgIlCJGmVe3pNhR8fIQKomQ6K7UIpPNilB8mmk7NO1","Hash":"58F39526470A635E9EA09736613E3AEBA913E65CED899ABBDE4E6074E9C83FAB"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"WjwmE3SxGsEFNE/NUHBghMoZ0q9vnVlZbfnbxIQqQuYyqdKE7Gw10UrFUnsUxO/Q","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}}];
    var SEDA = {"TIPO_FLUSSO":[{"K":"NWC","V":"Nuovo mandato SEDAC"},{"K":"MDC","V":"Modifica mandato SEDAC"},{"K":"DLC","V":"Cancellazione mandato SEDAC"},{"K":"REC","V":"Risposta mandato SEDAC"},{"K":"NWD","V":"Nuovo mandato SEDAD"},{"K":"MDD","V":"Modifica mandato SEDAD"},{"K":"DLD","V":"Cancellazione mandato SEDAD"},{"K":"RED","V":"Risposta mandato SEDAD"}],"STATI_ESITO":[{"K":"FIRM","V":"Autorizzata"},{"K":"ACTC","V":"Confermata"},{"K":"RJCT","V":"Scartata"}]};

    var viewModel = function (pagingFilter) {
        var self = this;

        self.CurrentSection = ko.observable(Sections.SEARCH);
        self.Esito = ko.observable(new App.Seda.Allineamento.EsitoBo(null));
        self.Aziende = ko.observableArray();
        self.Banche = ko.observableArray();
        self.TipoFlusso = ko.observableArray(SEDA.TIPO_FLUSSO);
        self.Stato = ko.observableArray(SEDA.STATI_ESITO);
        self.AziendaSelezionata = ko.observable();
        self.AziendaSelezionataLastSearch = ko.observable();
        self.PagingFilterLastSearch = new App.Seda.Allineamento.FilterEsito();

        var exportItems = [
            {
                type: "Pdf",
                url: '/anchise2.web/Stampe/StampeLista/StampaListaEsitiAllineamentoSeda'
            }
        ];

        self.Search = function() {
            self.List.Validation.removeAll();
            self.List.Search();
            
            self.AziendaSelezionataLastSearch(self.AziendaSelezionata());

            self.PagingFilterLastSearch.StartIndex(self.List.PagingFilter.StartIndex());
            self.PagingFilterLastSearch.CodiceAbi(self.List.PagingFilter.CodiceAbi());
            self.PagingFilterLastSearch.Size(self.List.PagingFilter.Size());
            self.PagingFilterLastSearch.DataCreazioneFrom(self.List.PagingFilter.DataCreazioneFrom());
            self.PagingFilterLastSearch.DataCreazioneTo(self.List.PagingFilter.DataCreazioneTo());
            self.PagingFilterLastSearch.DataRicezioneFrom(self.List.PagingFilter.DataRicezioneFrom());
            self.PagingFilterLastSearch.DataRicezioneTo(self.List.PagingFilter.DataRicezioneTo());
            self.PagingFilterLastSearch.TipoFlusso(self.List.PagingFilter.TipoFlusso());
            self.PagingFilterLastSearch.StatoEsito(self.List.PagingFilter.StatoEsito());
            self.PagingFilterLastSearch.CodiceMandato(self.List.PagingFilter.CodiceMandato());
            self.PagingFilterLastSearch.CodFiscSottoscrittore(self.List.PagingFilter.CodFiscSottoscrittore());
        };

        self.List = new App.Core.PagedArrayAsync({
            self: self,
            searchUrl: '/anchise2.web/Seda/SearchEsitiAllineamento/Search',
            searchCallback: function() {
                if (self.List.Validation().length === 0) {
                    location.hash = Sections.RESULT;
                }
                Export.print("export-lista-esiti-allineamento-seda", exportItems, ko.mapping.toJS(self.List.PagingFilter));
            },
            pagingFilter: new App.Seda.Allineamento.FilterEsito(),
            pageSizeDropDown: [10, 20, 50, 100]
        });

        self.StatiAvanzamentoList = new App.Core.PagedObservableArray({
            allData: [new App.Seda.StatoAvanzamentoBo(null)]
        });

        self.AvanzateBodyVisible = ko.observable(false);
        self.AvanzateCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.AvanzateBodyVisible));
        self.ToggleAdvancedFilter = function() {
            self.AvanzateBodyVisible(!self.AvanzateBodyVisible());
        };

        var _filterPiazzature = function () {
            var idAzienda = self.List.PagingFilter.IdAzienda() || null;

            return ko.utils.arrayFilter(PIAZZATURA, function (p) {
                var current = new App.Common.PiazzaturaBo(p);

                return (idAzienda != null && idAzienda != "" && current.Azienda.Id() == idAzienda);
            });
        };

        var _resetPagingFilter = function () {
            self.List.PagingFilter.StartIndex(1);
        };

        self.Aziende = ko.pureComputed(function () {
            //_resetPagingFilter();
            return App.Common.GetAziendeFromPiazzatura(PIAZZATURA);
        }, self);
        self.Banche = ko.pureComputed(function () {
            //_resetPagingFilter();
            return App.Common.GetBancheFromPiazzatura(_filterPiazzature());
        }, self);

        self.AziendaSelezionata.subscribe(function(newValue) {
            self.List.PagingFilter.IdAzienda(null);
            if(newValue && newValue != "")
                self.List.PagingFilter.IdAzienda(newValue.Id());
        });

        // Initialize
        self.Init = function () {
            location.hash = Sections.SEARCH;

            $('#909fa6ad16c1496a891fd3f917f3a4e9_4').load('/anchise2.web/Widget/LinkRapidi');

        };
        self.Init();
    };

    var rootViewModel = new viewModel(filter);

    $(document).ready(function () {
        ko.applyBindings(rootViewModel, document.getElementById('909fa6ad16c1496a891fd3f917f3a4e9_3'));

        // Route
        var sammy = Sammy('#909fa6ad16c1496a891fd3f917f3a4e9_5', function() {
            this.get(Sections.SEARCH, function () {
                rootViewModel.CurrentSection(Sections.SEARCH);
            });
            this.get(Sections.RESULT, function () {
                rootViewModel.CurrentSection(Sections.RESULT);
            });
            this.get(Sections.ESITO_DETAIL, function () {
                rootViewModel.CurrentSection(Sections.ESITO_DETAIL);
            });
            this.get(Sections.ESITO_DETAIL_READONLY, function () {
                rootViewModel.CurrentSection(Sections.ESITO_DETAIL_READONLY);
            });
        });

        sammy.run();
    });

</script>



                        </div>