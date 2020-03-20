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



<script type="text/html" id="4db18459497f48dd9aca58e6bd408abc_5">
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
        template: { element: '4db18459497f48dd9aca58e6bd408abc_5' },
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





<div id="4db18459497f48dd9aca58e6bd408abc_6">
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
            $('.hide', $('#4db18459497f48dd9aca58e6bd408abc_6')).removeClass('hide');
        };
    };

    var uiHelper = new UiViewModel();

    $(document).ready(function () {
        ko.applyBindings(uiHelper, document.getElementById('4db18459497f48dd9aca58e6bd408abc_6'));

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










<script type="text/html" id="sedaselector-dataentry">
    <div class="riquadro">
        <div class="row">
            <div>
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Allineamento SEDA</h1>
            </div>
        </div>
        <div class="row">
            <div class="table-responsive">
                <div class="dataTables_wrapper" style="margin-top: 10px">
                    <table class="dataTable table">
                        <thead>
                            <tr>
                                <th style="width: 40px;">
                                    Opzione
                                </th>
                                <th>
                                    Descrizione
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <input type="radio" name="blockTye" value="INS" data-bind="checked: blockType" />
                                </td>
                                <td>
                                    Richiesta nuovo mandato
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="radio" name="blockTye" value="UPD" data-bind="checked: blockType" />
                                </td>
                                <td>
                                    Richiesta modifica mandato
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="radio" name="blockTye" value="DEL" data-bind="checked: blockType" />
                                </td>
                                <td>
                                    Richiesta cancellazione mandato
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="radio" name="blockTye" value="ACPT" data-bind="checked: blockType" />
                                </td>
                                <td>
                                    Risposta a richiesta di allineamento ad iniziativa debitore
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- SUBMIT ACTIONS -->
    <div class="text-right">
        <input type="button" class="btn btn-primary" value="Conferma" data-bind="singleClick: Confirm" />
    </div>
</script>

<script type="text/javascript">
    ko.components.register('sedaselector-dataentry', {
        template: { element: 'sedaselector-dataentry' },
        viewModel: function (params) {
            var self = this;

            // Params
            self.blockType = ko.observable('INS');

            // Actions
            self.Confirm = function () {
                ko.postbox.publish("SEDASELECTOR_SELECTED", self.blockType);

                location.hash = Sections.DATA_ENTRY;
            }
        }
    });
</script>





<script type="text/html" id="selettore-banca">
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
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="col-xs-3 no-padding">
                            <span>CUC</span>
                        </div>
                        <div class="col-xs-9 no-padding">
                            <strong data-bind="text: Cuc"></strong>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-3 no-padding">
                            <span>C.F./P.I.</span>
                        </div>
                        <div class="col-xs-9 no-padding">
                            <strong data-bind="text: IdentificativoFiscale"></strong>
                        </div>
                    </div>
                </div>
            </div>
            <div data-bind="visible: !App.Common.IdentifierIsValid(Identifier)">
                <div class="row">
                    <div class="col-xs-12" style="height: 80px; padding: 35px 20px">
                        <strong data-bind="text: $component.textSelettore"></strong>
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
                            <th data-bind="css: ThCss('Rapporto.CodiceAbi'), click: SortToggleObservable('Rapporto.CodiceAbi')" class="col-md-1">
                                ABI
                            </th>
                            <th data-bind="css: ThCss('Rapporto.DescrizioneBanca'), click: SortToggleObservable('Rapporto.DescrizioneBanca')">
                                Descrizione Banca
                            </th>
                            <th data-bind="css: ThCss('Azienda.RagioneSociale'), click: SortToggleObservable('Azienda.RagioneSociale')">
                                Intestazione
                            </th>
                        </tr>
                    </thead>
                    <tbody data-bind="foreach: Page">
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <td data-bind="text: Rapporto.CodiceAbi"></td>
                            <td data-bind="text: Rapporto.DescrizioneBanca"></td>
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
    ko.components.register('selettore-banca', {
        template: { element: 'selettore-banca' },
        viewModel: function (params) {
            var self = this;

            // Private
            var _computeSelectedOrdinante = function (identifier) {
                if (App.Common.IdentifierIsValid(identifier)) {
                    self.RapportiDataTableVisible(false);
                    var piazzatura = new App.Common.PiazzaturaBo(ko.utils.arrayFirst(PIAZZATURA, function (p) {
                        return p.Identifier.IdRapporto == identifier.IdRapporto();
                    }));

                    if (App.Common.IdentifierIsValid(piazzatura.Identifier)) {
                        if(self.Ordinante == null || !App.Common.IdentifierIsValid(self.Ordinante.Identifier)){
                            App.Common.MapIdentifier(self.Ordinante.Identifier, piazzatura.Identifier);
                        }
                        self.Ordinante.RagioneSociale(piazzatura.Azienda.RagioneSociale());
                        self.Ordinante.Cuc(piazzatura.Azienda.CodiceCuc());
                        self.Ordinante.IdentificativoFiscale(piazzatura.Azienda.PartitaIva() || piazzatura.Azienda.CodiceFiscale());
                        self.Ordinante.Conto(piazzatura.Rapporto.NumeroRapporto());
                        self.Ordinante.Iban(piazzatura.Rapporto.CodiceIban());
                        self.Ordinante.Cab(piazzatura.Rapporto.CodiceCab());
                        self.Ordinante.Abi(piazzatura.Rapporto.CodiceAbi());
                        self.DescrizioneBanca(piazzatura.Rapporto.DescrizioneBanca());

                        if (self.Callback()) {
                            self.Callback()(piazzatura);
                        }

                        return self.Ordinante;
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
            self.Callback = params.Callback;
            self.textSelettore = "Selezionare la banca dell'ordinante";

            self.ArrowToggle = ko.pureComputed(function () {
                return self.RapportiDataTableVisible() ? 'btnSelezioneCC icon-replace icon-arrowup active' : 'btnSelezioneCC icon-replace icon-arrowdown active';
            });

            self.PagedList = new App.Core.PagedObservableArray({
                allData: [new App.Common.PiazzaturaBo(null)],
                pageSize: 8,
                pageSizeDropDown: [8, 20, 50, 100],
                currentSort: 'Rapporto.Descrizione',
                currentSortIsAsc: true
            });

            self.ArrowVisible = ko.pureComputed(function () {
                return (params.ArrowVisible ? params.ArrowVisible() : true) && self.PagedList.AllData().length > 1;
            });

            self.FiltroVisible = ko.pureComputed(function () {
                return self.PagedList.AllData().length > 8;
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

                pagedListData = ko.utils.arrayMap(PIAZZATURA, function (p) {
                    var current = new App.Common.PiazzaturaBo(p);

                    return current;
                });

                if (pagedListData.length == 0) {
                    self.textSelettore = 'Non ci sono banche';
                } else if (pagedListData.length == 1) {
                    var piazzatura = pagedListData[0];
                    _mapIdentifierAndSetOrdinante(piazzatura.Identifier);
                } else if (self.Ordinante != null && App.Common.IdentifierIsValid(self.Ordinante.Identifier)) {
                    var idSoggetto = self.Ordinante.Identifier;
                    _mapIdentifierAndSetOrdinante(self.Ordinante.Identifier);
                }

                self.PagedList.AllData(pagedListData);
            };
            self.Init();
        }
    });
</script>



<script type="text/html" id="seda-ins">
    <div data-bind="with: disposizione.InitnReq">
        <div class="row">
            <h3 class="titleSection">
                Dati Aggiuntivi Ordinante
            </h3>
        </div>
        <div class="section">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-sm-3 col-xs-12">
                        <label class="control-label">Identificativo creditore</label>
                        <input type="text" class="form-control" data-bind="uppercaseText: CdtrSchmeId, enable: $component.DispoIsNotInDistinta" />
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                    <div class="col-sm-4 col-xs-12">
                        <label class="control-label">BIC</label>
                        <input type="text" class="form-control" data-bind="uppercaseText: CdtrAgt, enable: $component.DispoIsNotInDistinta" />
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                    <div class="col-sm-3 col-xs-12" style="padding-left: 0">
                        <label class="control-label">Tipo soggetto</label>
                        <select class="form-control" data-bind="options: $component.tipologieSoggetto, optionsText: 'V', optionsValue: 'K', value: CdtrSchmeTp, enable: $component.DispoIsNotInDistinta"></select>
                    </div>
                </div>
            </div>
        </div>

        <!-- CREDITORE EFFETTIVO -->
        <div class="section">
            <div class="row link" data-bind="click: $component.UltimateCreditorCollapse">
                <h3 class="titleSection">
                    Dati Creditore Effettivo
                </h3>
                <div class="collapse-img-position">
                    <div data-bind="css: $component.UltimateCreditorCollapseCss" />
                </div>
            </div>
            <div data-bind="slideVisible: $component.UltimateCreditorBodyVisible">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Ragione sociale</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltmtCdtr.Nm" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                            <label class="control-label"></label>
                            <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.UltimateCreditorAnagraficaSearch">&nbsp;</span>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Codice</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltmtCdtr.Codice" />
                        </div>
                    </div>
                </div>
                <div data-bind="component: { name: 'anagrafica-search', params: $component.UltimateCreditorAnagraficaModel }"></div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Tipo soggetto</label>
                            <select class="form-control" data-bind="options: $component.tipologieSoggetto, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: UltmtCdtr.TipoSoggetto"></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Identificativo</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable, value: UltmtCdtr.Id" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">BIC</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() && UltmtCdtr.TipoSoggetto() == 'PG', uppercaseText: UltmtCdtr.Bic" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding-right: 0; padding-left: 20px">
                            <label class="control-label" style="margin-left: -20px">Codice proprietario</label>
                            <div class="radio" style="font-weight: normal; margin-top: 0">
                                <input type="radio" name="codiceIns" value="CodiceProprietario" data-bind="enable: $component.UltimateCreditorEnable, checked: $component.CurrentCodice" />
                                <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() && $component.CodiceProprietarioActive(), value: UltmtCdtr.Prtry" />
                            </div>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                            <label class="control-label" style="margin-left: -20px">Codice</label>
                            <div class="radio" style="font-weight: normal; margin-top: 0">
                                <input type="radio" name="codiceIns" value="Codice" data-bind="enable: $component.UltimateCreditorEnable, checked: $component.CurrentCodice" />
                                <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() && $component.CodiceActive(), value: UltmtCdtr.Cd" />
                            </div>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">
                                Comune nascita
                            </label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() && UltmtCdtr.TipoSoggetto() == 'PF', value: UltmtCdtr.CityOfBirth" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding-left: 0">
                            <label class="control-label">Data nascita</label>
                            <date-picker params="enable: $component.UltimateCreditorPFEnable, Date: UltmtCdtr.BirthDt"></date-picker>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">
                                Provincia nascita
                            </label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() && UltmtCdtr.TipoSoggetto() == 'PF', value: UltmtCdtr.PrvcOfBirth" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">
                                Stato
                            </label>
                            <select class="form-control" data-bind="enable: $component.UltimateCreditorEnable() && UltmtCdtr.TipoSoggetto() == 'PF', options: $component.Nazioni, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: UltmtCdtr.CtryOfBirth"></select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Descrizione</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable, value: UltmtCdtr.Issr" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12" style="padding-left: 30px"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI DEBITORE -->
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Debitore
                </h3>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Ragione sociale</label>
                            <input type="text" class="form-control no-placeholder-italic" data-bind="value: Dbtr.Denominazione" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                            <label class="control-label"></label>
                            <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.DebtorAnagraficaSearch">&nbsp;</span>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Codice</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Dbtr.Codice" />
                        </div>
                    </div>
                </div>
                <div data-bind="component: { name: 'anagrafica-search', params: $component.DebtorAnagraficaModel }"></div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Indirizzo</label>
                            <input placeholder="opzionale" type="text" class="form-control" data-bind="value: Dbtr.Indirizzo.Via" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Stato</label>
                            <select class="form-control" data-bind="options: $component.Nazioni, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: Dbtr.Indirizzo.Nazione"></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">IBAN</label>
                            <input type="text" class="form-control" data-bind="uppercaseText: Dbtr.Iban" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">BIC</label>
                            <input placeholder="opzionale" type="text" class="form-control" data-bind="uppercaseText: Dbtr.Bic" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">C.F./P.I. debitore</label>
                            <input placeholder="opzionale" type="text" class="form-control" data-bind="uppercaseText: Dbtr.CodiceFiscale" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Cod. Fisc. sottoscrittore</label>
                            <input type="text" class="form-control" data-bind="uppercaseText: CFSottoscrittore" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label"></label>
                            <div class="form-field link-icon">
                                <span class="link-icon icon-creazioneUtenti link" data-bind="singleClick: $component.ToggleCheckAggiornaAnagrafica">
                                </span>
                                <input type="checkbox" data-bind="checked: $component.AggiornaAnagrafica" />
                                <label class="control-label">Aggiorna anagrafica</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI DEBITORE EFFETTIVO-->
        <div class="section">
            <div class="row link" data-bind="click: $component.UltimateDebtorCollapse">
                <h3 class="titleSection">
                    Dati Debitore Effettivo
                </h3>
                <div class="collapse-img-position">
                    <div data-bind="css: $component.UltimateDebtorCollapseCss" />
                </div>
            </div>
            <div data-bind="slideVisible: $component.UltimateDebtorBodyVisible">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Ragione sociale</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltmtDbtr.Nm" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                            <label class="control-label"></label>
                            <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.UltimateDebtorAnagraficaSearch">&nbsp;</span>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Codice</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltmtDbtr.Codice" />
                        </div>
                    </div>
                </div>
                <div data-bind="component: { name: 'anagrafica-search', params: $component.UltimateDebtorAnagraficaModel }"></div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Tipo soggetto</label>
                            <select class="form-control" data-bind="options: $component.tipologieSoggetto, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: UltmtDbtr.TipoSoggetto"></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Identificativo</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable, value: UltmtDbtr.Id" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">BIC</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() && UltmtDbtr.TipoSoggetto() == 'PG', uppercaseText: UltmtDbtr.Bic" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding-right: 0; padding-left: 20px">
                            <label class="control-label" style="margin-left: -20px">Codice proprietario</label>
                            <div class="radio" style="font-weight: normal; margin-top: 0">
                                <input type="radio" name="codiceDebitoreIns" value="CodiceProprietarioDebitore" data-bind="enable: $component.UltimateDebitorEnable, checked: $component.CurrentCodiceDebitore" />
                                <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() && $component.CodiceProprietarioDebitoreActive(), value: UltmtDbtr.Prtry" />
                            </div>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                            <label class="control-label" style="margin-left: -20px">Codice</label>
                            <div class="radio" style="font-weight: normal; margin-top: 0">
                                <input type="radio" name="codiceDebitoreIns" value="CodiceDebitore" data-bind="enable: $component.UltimateDebitorEnable, checked: $component.CurrentCodiceDebitore" />
                                <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() && $component.CodiceDebitoreActive(), value: UltmtDbtr.Cd" />
                            </div>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">
                                Comune di nascita
                            </label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() && UltmtDbtr.TipoSoggetto() == 'PF', value: UltmtDbtr.CityOfBirth" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Data di nascita</label>
                            <date-picker params="enable: $component.UltimateDebitorPFEnable, Date: UltmtDbtr.BirthDt"></date-picker>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Provincia di nascita</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() && UltmtDbtr.TipoSoggetto() == 'PF', value: UltmtDbtr.PrvcOfBirth" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Stato</label>
                            <select class="form-control" data-bind="enable: $component.UltimateDebitorEnable() && UltmtDbtr.TipoSoggetto() == 'PF', options: $component.Nazioni, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: UltmtDbtr.CtryOfBirth"></select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Descrizione</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable, value: UltmtDbtr.Issr" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI MANDATO-->
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Mandato
                </h3>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Codice mandato</label>
                            <input type="text" class="form-control no-placeholder-italic" data-bind="value: MndtId" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Data sottoscrizione</label>
                            <date-picker params="Date: DurationFromDate"></date-picker>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Identificativo mandato</label>
                            <input type="text" class="form-control" data-bind="value: MndtReqId" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Tipo mandato</label>
                            <select class="form-control" data-bind="options: $component.TipiMandato, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: LclInstrmPrtry"></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Sequenza incasso</label>
                            <select class="form-control" data-bind="options: $component.SequenzaIncassi, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: SeqTp"></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">ID documento</label>
                            <input placeholder="opzionale" type="text" class="form-control" data-bind="value: RfrDocNb" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('seda-ins', {
        template: { element: 'seda-ins' },
        viewModel: function (params) {
            var self = this;

            self.disposizione = params.disposizione
            self.tipologieSoggetto = params.tipologieSoggetto;
            self.Validation = params.Validation;
            self.Nazioni = params.Nazioni;
            self.CallbackDatiPrecedenti = params.CallbackDatiPrecedenti;
            self.AggiornaAnagrafica = params.AggiornaAnagrafica;
            self.DispoIsNotInDistinta = params.DispoIsNotInDistinta;

            self.UltimateCreditorBodyVisible = ko.observable(false);
            self.UltimateDebtorBodyVisible = ko.observable(false);
            self.UltimateCreditorCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.UltimateCreditorBodyVisible));
            self.UltimateDebtorCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.UltimateDebtorBodyVisible));
            self.CurrentCodice = ko.observable("CodiceProprietario");
            self.CurrentCodiceDebitore = ko.observable("CodiceProprietarioDebitore");
            self.CodiceProprietarioActive = ko.observable(true);
            self.CodiceActive = ko.observable(false);
            self.CodiceProprietarioDebitoreActive = ko.observable(true);
            self.CodiceDebitoreActive = ko.observable(false);

            self.TipiMandato = _tipiMandato;
            self.SequenzaIncassi = _sequenzaIncassi;

            self.UltimateCreditorEnable = ko.pureComputed(function () {
                return self.disposizione.InitnReq.UltmtCdtr.TipoSoggetto() != null;
            });

            self.UltimateCreditorPFEnable = ko.pureComputed(function () {
                return (self.UltimateCreditorEnable() && self.disposizione.InitnReq.UltmtCdtr.TipoSoggetto() == 'PF') ? 'true' : 'false';
            });

            self.UltimateDebitorPFEnable = ko.pureComputed(function () {
                return (self.UltimateDebitorEnable() && self.disposizione.InitnReq.UltmtDbtr.TipoSoggetto() == 'PF') ? 'true' : 'false';
            });

            self.UltimateDebitorEnable = ko.pureComputed(function () {
                return self.disposizione.InitnReq.UltmtDbtr.TipoSoggetto() != null;
            });

            self.UltimateCreditorAnagraficaModel = {
                Label: 'Fornitore',
                IdentifierPiazzatura: ko.observable(self.disposizione.Ordinante.Identifier),
                Soggetto: self.disposizione.InitnReq.UltmtCdtr,
                TipologiaAnagrafica: ko.observable('FO'),
                Visible: ko.observable(false),
                IsSeda: ko.observable(true),
                Callback: ko.observable(function (anagrafica) {
                    self.disposizione.InitnReq.UltmtCdtr.Nm(anagrafica.Denominazione());
                    self.disposizione.InitnReq.UltmtCdtr.Codice(anagrafica.Codice());
                })
            };

            self.DebtorAnagraficaModel = {
                Label: 'Cliente',
                IdentifierPiazzatura: ko.observable(self.disposizione.Ordinante.Identifier),
                Soggetto: self.disposizione.InitnReq.Dbtr,
                TipologiaAnagrafica: ko.observable('CL'),
                Visible: ko.observable(false),
                Callback: ko.observable(function (anagrafica) {
                    self.disposizione.InitnReq.CFSottoscrittore(anagrafica.CFSottoscrittore());
                    self.disposizione.InitnReq.MndtId(anagrafica.CodiceMandato());
                    self.disposizione.InitnReq.DurationFromDate(anagrafica.DataSottoscrizione());
                })
            };

            self.UltimateDebtorAnagraficaModel = {
                Label: 'Cliente',
                IdentifierPiazzatura: ko.observable(self.disposizione.Ordinante.Identifier),
                Soggetto: self.disposizione.InitnReq.UltmtDbtr,
                TipologiaAnagrafica: ko.observable('CL'),
                Visible: ko.observable(false),
                IsSeda: ko.observable(true),
                Callback: ko.observable(function (anagrafica) {
                    self.disposizione.InitnReq.UltmtDbtr.Nm(anagrafica.Denominazione());
                    self.disposizione.InitnReq.UltmtDbtr.Codice(anagrafica.Codice());
                })
            };

            self.UltimateCreditorCollapse = function () {
                console.log(self.CurrentCodice());
                self.UltimateCreditorBodyVisible(!self.UltimateCreditorBodyVisible());
            };

            self.UltimateDebtorCollapse = function () {
                self.UltimateDebtorBodyVisible(!self.UltimateDebtorBodyVisible());
            };

            var CurrentCodiceSubscribe = self.CurrentCodice.subscribe(function () {
                if (self.CurrentCodice() == 'CodiceProprietario') {
                    self.disposizione.InitnReq.UltmtCdtr.Cd(null);
                    self.CodiceProprietarioActive(true);
                    self.CodiceActive(false);
                } else {
                    self.disposizione.InitnReq.UltmtCdtr.Prtry(null);
                    self.CodiceProprietarioActive(false);
                    self.CodiceActive(true);
                }
            });

            var CurrentCodiceDebitoreSubscribe = self.CurrentCodiceDebitore.subscribe(function () {
                if (self.CurrentCodiceDebitore() == 'CodiceProprietario') {
                    self.disposizione.InitnReq.UltmtDbtr.Cd(null);
                    self.CodiceProprietarioDebitoreActive(true);
                    self.CodiceDebitoreActive(false);
                } else {
                    self.disposizione.InitnReq.UltmtDbtr.Prtry(null);
                    self.CodiceProprietarioDebitoreActive(false);
                    self.CodiceDebitoreActive(true);
                }
            });

            ko.postbox.subscribe("selettore-banche." + App.Seda.Allineamento.TipoBloccoLogico.INS + ".SELECTED", function (piazzatura) {
                self.disposizione.InitnReq.CdtrSchmeId(piazzatura.Azienda.CreditorId());
                self.disposizione.InitnReq.CdtrAgt(piazzatura.Rapporto.Bic());
                self.Validation.removeAll();
            });

            self.UltimateCreditorAnagraficaSearch = _anagraficaSearchVisible(self.UltimateCreditorAnagraficaModel, self.disposizione.Ordinante.Identifier, self.Validation);
            self.DebtorAnagraficaSearch = _anagraficaSearchVisible(self.DebtorAnagraficaModel, self.disposizione.Ordinante.Identifier, self.Validation);
            self.UltimateDebtorAnagraficaSearch = _anagraficaSearchVisible(self.UltimateDebtorAnagraficaModel, self.disposizione.Ordinante.Identifier, self.Validation);

            self.ToggleCheckAggiornaAnagrafica = function () {
                self.AggiornaAnagrafica(!self.AggiornaAnagrafica());
            };

            var ultmtCdtrTipoSoggettoSubscribe = self.disposizione.InitnReq.UltmtCdtr.TipoSoggetto.subscribe(function () {
                _setCountryToItaly(self.disposizione.InitnReq.UltmtCdtr.TipoSoggetto, self.disposizione.InitnReq.UltmtCdtr.CtryOfBirth);
            });

            var ultmtDbtrTipoSoggettoSubscribe = self.disposizione.InitnReq.UltmtDbtr.TipoSoggetto.subscribe(function () {
                _setCountryToItaly(self.disposizione.InitnReq.UltmtDbtr.TipoSoggetto, self.disposizione.InitnReq.UltmtDbtr.CtryOfBirth);
            });

            self.Init = function () {
                self.UltimateCreditorBodyVisible(self.disposizione.InitnReq.UltmtCdtr != null && self.disposizione.InitnReq.UltmtCdtr.Identifier != null && self.disposizione.InitnReq.UltmtCdtr.Identifier.Id() != null);
                self.CurrentCodice((self.disposizione.Identifier == null || self.disposizione.Identifier.Id() == null) || self.disposizione.InitnReq.UltmtCdtr.Cd() == null ? 'CodiceProprietario' : 'Codice');
                self.CurrentCodiceDebitore((self.disposizione.Identifier == null || self.disposizione.Identifier.Id() == null) || self.disposizione.InitnReq.UltmtDbtr.Cd() == null ? 'CodiceProprietarioDebitore' : 'CodiceDebitore');
                self.disposizione.InitnReq.Dbtr.TipologiaAnagrafica(App.Core.IsNullOrUndefined(self.disposizione.InitnReq.Dbtr.TipologiaAnagrafica()) ?
                    'CL' :
                    self.disposizione.InitnReq.Dbtr.TipologiaAnagrafica());
                self.AggiornaAnagrafica(false);
                self.disposizione.InitnReq.CdtrSchmeTp(self.disposizione.InitnReq.CdtrSchmeTp() || 'PG');

                if (!self.disposizione.InitnReq.Dbtr.Indirizzo.Nazione()) {
                    self.disposizione.InitnReq.Dbtr.Indirizzo.Nazione('IT');
                }

                ko.postbox.subscribe('ALLINEAMENTO_SEDA_' + App.Seda.Allineamento.TipoBloccoLogico.INS + ':NEWDISPO', function (disposizione) {
                    if (disposizione && self.disposizione.InitnReq.CdtrSchmeId()) {
                        disposizione.InitnReq.CdtrAgt(self.disposizione.InitnReq.CdtrAgt());
                        disposizione.InitnReq.CdtrSchmeId(self.disposizione.InitnReq.CdtrSchmeId());
                    } else {
                        var pagedListData = [];

                        pagedListData = ko.utils.arrayMap(PIAZZATURA, function (p) {
                            var current = new App.Common.PiazzaturaBo(p);

                            return current;
                        });

                        if (pagedListData.length == 1) {
                            var piazzatura = pagedListData[0];

                            self.disposizione.InitnReq.CdtrSchmeId(piazzatura.Azienda.CreditorId());
                            self.disposizione.InitnReq.CdtrAgt(piazzatura.Rapporto.Bic());
                        }
                    }
                });
            }

            self.Init();

            self.dispose = function () {
                CurrentCodiceSubscribe.dispose();
                CurrentCodiceDebitoreSubscribe.dispose();
                ultmtCdtrTipoSoggettoSubscribe.dispose();
                ultmtDbtrTipoSoggettoSubscribe.dispose();
            }
        }
    });
</script>



<script type="text/html" id="seda-upd">
    <div data-bind="with: disposizione.AmdmntReq">
        <div class="row">
            <h3 class="titleSection">
                Dati Aggiuntivi Ordinante
            </h3>
        </div>
        <div class="section">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-sm-3 col-xs-12">
                        <label class="control-label">Identificativo creditore</label>
                        <input type="text" class="form-control" data-bind="uppercaseText: CdtrSchmeId, enable: $component.DispoIsNotInDistinta" />
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                    <div class="col-sm-4 col-xs-12">
                        <label class="control-label">BIC</label>
                        <input type="text" class="form-control" data-bind="uppercaseText: CdtrAgt, enable: $component.DispoIsNotInDistinta" />
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                    <div class="col-sm-3 col-xs-12" style="padding-left: 0">
                        <label class="control-label">Tipo soggetto</label>
                        <select class="form-control" data-bind="options: $component.tipologieSoggetto, optionsText: 'V', optionsValue: 'K', value: CdtrSchmeTp, enable: $component.DispoIsNotInDistinta"></select>
                    </div>
                </div>
            </div>
        </div>

        <!-- CREDITORE EFFETTIVO -->
        <div class="section">
            <div class="row link" data-bind="click: $component.UltimateCreditorCollapse">
                <h3 class="titleSection">
                    Dati Creditore Effettivo
                </h3>
                <div class="collapse-img-position">
                    <div data-bind="css: $component.UltimateCreditorCollapseCss" />
                </div>
            </div>
            <div data-bind="slideVisible: $component.UltimateCreditorBodyVisible">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Ragione sociale</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltmtCdtr.Nm" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                            <label class="control-label"></label>
                            <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.UltimateCreditorAnagraficaSearch">&nbsp;</span>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Codice</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltmtCdtr.Codice" />
                        </div>
                    </div>
                </div>
                <div data-bind="component: { name: 'anagrafica-search', params: $component.UltimateCreditorAnagraficaModel }"></div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Tipo soggetto</label>
                            <select class="form-control" data-bind="options: $component.tipologieSoggetto, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: UltmtCdtr.TipoSoggetto"></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Identificativo</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable, value: UltmtCdtr.Id" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">BIC</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() && UltmtCdtr.TipoSoggetto() == 'PG', uppercaseText: UltmtCdtr.Bic" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding-right: 0; padding-left: 20px">
                            <label class="control-label" style="margin-left: -20px">Codice proprietario</label>
                            <div class="radio" style="font-weight: normal; margin-top: 0">
                                <input type="radio" name="codice" value="CodiceProprietario" data-bind="enable: $component.UltimateCreditorEnable, checked: $component.CurrentCodice" />
                                <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() && $component.CodiceProprietarioActive(), value: UltmtCdtr.Prtry" />
                            </div>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                            <label class="control-label" style="margin-left: -20px">Codice</label>
                            <div class="radio" style="font-weight: normal; margin-top: 0">
                                <input type="radio" name="codice" value="Codice" data-bind="enable: $component.UltimateCreditorEnable, checked: $component.CurrentCodice" />
                                <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() && $component.CodiceActive(), value: UltmtCdtr.Cd" />
                            </div>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">
                                Comune nascita
                            </label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() && UltmtCdtr.TipoSoggetto() == 'PF', value: UltmtCdtr.CityOfBirth" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding-left: 0">
                            <label class="control-label">Data nascita</label>
                            <date-picker params="enable: $component.UltimateCreditorPFEnable, Date: UltmtCdtr.BirthDt"></date-picker>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">
                                Provincia nascita
                            </label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() && UltmtCdtr.TipoSoggetto() == 'PF', value: UltmtCdtr.PrvcOfBirth" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">
                                Stato
                            </label>
                            <select class="form-control" data-bind="enable: $component.UltimateCreditorEnable() && UltmtCdtr.TipoSoggetto() == 'PF', options: $component.Nazioni, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: UltmtCdtr.CtryOfBirth"></select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Descrizione</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable, value: UltmtCdtr.Issr" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12" style="padding-left: 30px"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI DEBITORE -->
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Debitore
                </h3>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Ragione sociale</label>
                            <input type="text" class="form-control no-placeholder-italic" data-bind="value: Dbtr.Denominazione" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                            <label class="control-label"></label>
                            <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.DebtorAnagraficaSearch">&nbsp;</span>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Codice</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Dbtr.Codice" />
                        </div>
                    </div>
                </div>
                <div data-bind="component: { name: 'anagrafica-search', params: $component.DebtorAnagraficaModel }"></div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Indirizzo</label>
                            <input type="text" placeholder="opzionale" class="form-control" data-bind="value: Dbtr.Indirizzo.Via" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Stato</label>
                            <select class="form-control" data-bind="options: $component.Nazioni, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: Dbtr.Indirizzo.Nazione"></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">IBAN</label>
                            <input type="text" class="form-control" data-bind="uppercaseText: Dbtr.Iban" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">BIC</label>
                            <input placeholder="opzionale" type="text" class="form-control" data-bind="uppercaseText: Dbtr.Bic" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">C.F./P.I. debitore</label>
                            <input placeholder="opzionale" type="text" class="form-control" data-bind="uppercaseText: Dbtr.CodiceFiscale" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Cod. Fisc. sottoscrittore</label>
                            <input type="text" class="form-control" data-bind="uppercaseText: CFSottoscrittore" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label"></label>
                            <div class="form-field link-icon">
                                <span class="link-icon icon-creazioneUtenti link" data-bind="singleClick: $component.ToggleCheckAggiornaAnagrafica">
                                </span>
                                <input type="checkbox" data-bind="checked: $component.AggiornaAnagrafica" />
                                <label class="control-label">Aggiorna anagrafica</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI DEBITORE EFFETTIVO-->
        <div class="section">
            <div class="row link" data-bind="click: $component.UltimateDebtorCollapse">
                <h3 class="titleSection">
                    Dati Debitore Effettivo
                </h3>
                <div class="collapse-img-position">
                    <div data-bind="css: $component.UltimateDebtorCollapseCss" />
                </div>
            </div>
            <div data-bind="slideVisible: $component.UltimateDebtorBodyVisible">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Ragione sociale</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltmtDbtr.Nm" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                            <label class="control-label"></label>
                            <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.UltimateDebtorAnagraficaSearch">&nbsp;</span>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Codice</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltmtDbtr.Codice" />
                        </div>
                    </div>
                </div>
                <div data-bind="component: { name: 'anagrafica-search', params: $component.UltimateDebtorAnagraficaModel }"></div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Tipo soggetto</label>
                            <select class="form-control" data-bind="options: $component.tipologieSoggetto, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: UltmtDbtr.TipoSoggetto"></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Identificativo</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable, value: UltmtDbtr.Id" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">BIC</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() && UltmtDbtr.TipoSoggetto() == 'PG', uppercaseText: UltmtDbtr.Bic" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding-right: 0; padding-left: 20px">
                            <label class="control-label" style="margin-left: -20px">Codice proprietario</label>
                            <div class="radio" style="font-weight: normal; margin-top: 0">
                                <input type="radio" name="codiceDebitore" value="CodiceProprietarioDebitore" data-bind="enable: $component.UltimateDebitorEnable, checked: $component.CurrentCodiceDebitore" />
                                <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() && $component.CodiceProprietarioDebitoreActive(), value: UltmtDbtr.Prtry" />
                            </div>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                            <label class="control-label" style="margin-left: -20px">Codice</label>
                            <div class="radio" style="font-weight: normal; margin-top: 0">
                                <input type="radio" name="codiceDebitore" value="CodiceDebitore" data-bind="enable: $component.UltimateDebitorEnable, checked: $component.CurrentCodiceDebitore" />
                                <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() && $component.CodiceDebitoreActive(), value: UltmtDbtr.Cd" />
                            </div>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">
                                Comune di nascita
                            </label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() && UltmtDbtr.TipoSoggetto() == 'PF', value: UltmtDbtr.CityOfBirth" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Data di nascita</label>
                            <date-picker params="enable: $component.UltimateDebitorPFEnable, Date: UltmtDbtr.BirthDt"></date-picker>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Provincia di nascita</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() && UltmtDbtr.TipoSoggetto() == 'PF', value: UltmtDbtr.PrvcOfBirth" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Stato</label>
                            <select class="form-control" data-bind="enable: $component.UltimateDebitorEnable() && UltmtDbtr.TipoSoggetto() == 'PF', options: $component.Nazioni, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: UltmtDbtr.CtryOfBirth"></select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Descrizione</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable, value: UltmtDbtr.Issr" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI MANDATO-->
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Mandato
                </h3>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Codice mandato</label>
                            <input type="text" class="form-control no-placeholder-italic" data-bind="value: MndtId" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Data sottoscrizione</label>
                            <date-picker params="Date: DurationFromDate"></date-picker>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Identificativo mandato</label>
                            <input type="text" class="form-control" data-bind="value: MndtReqId" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Tipo mandato</label>
                            <select class="form-control" data-bind="options: $component.TipiMandato, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: LclInstrmPrtry"></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Sequenza incasso</label>
                            <select class="form-control" data-bind="options: $component.SequenzeIncasso, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: SeqTp"></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI MANDATO ORIGINARIO -->
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Per Modifica Mandato Originario
                </h3>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Richiesta modifica</label>
                            <select class="form-control" data-bind="options: $component.TipiRichiesta, optionsText: 'V', optionsValue: 'K', value: RsnCd"></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Domiciliazione mandato</label>
                            <select class="form-control" data-bind="options: $component.DomiciliazioniMandato, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: SvcLvlPrtry"></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Tipo soggetto</label>
                            <select class="form-control" data-bind="options: $component.tipologieSoggetto, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: OrgnlCdtrSchmeTp"></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Identificativo creditore originario</label>
                            <input type="text" class="form-control" data-bind="value: OrgnlCdtrSchmeId, enable: $component.OrgnlCdtrSchmeIdEnable" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Codice mandato originario</label>
                            <input type="text" class="form-control" data-bind="value: OrgnlMndtId" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Creditore originario</label>
                            <input type="text" class="form-control" data-bind="value: OrgnlCdtrNm" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Descrizione</label>
                            <input placeholder="opzionale" type="text" class="form-control" data-bind="value: OrgnlCdtrSchmeIssr, enable: $component.OrgnlCdtrSchmeIssrEnable" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('seda-upd', {
        template: { element: 'seda-upd' },
        viewModel: function (params) {
            var self = this;

            self.disposizione = params.disposizione
            self.tipologieSoggetto = params.tipologieSoggetto;
            self.Validation = params.Validation;
            self.Nazioni = params.Nazioni;
            self.CallbackDatiPrecedenti = params.CallbackDatiPrecedenti;
            self.DispoIsNotInDistinta = params.DispoIsNotInDistinta;

            self.UltimateCreditorBodyVisible = ko.observable(false);
            self.UltimateDebtorBodyVisible = ko.observable(false);
            self.UltimateCreditorCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.UltimateCreditorBodyVisible));
            self.UltimateDebtorCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.UltimateDebtorBodyVisible));
            self.CurrentCodice = ko.observable("CodiceProprietario");
            self.CurrentCodiceDebitore = ko.observable("CodiceProprietarioDebitore");
            self.CodiceProprietarioActive = ko.observable(true);
            self.CodiceActive = ko.observable(false);
            self.CodiceProprietarioDebitoreActive = ko.observable(true);
            self.CodiceDebitoreActive = ko.observable(false);
            self.AggiornaAnagrafica = params.AggiornaAnagrafica;

            self.TipiRichiesta = _tipiRichiesta;
            self.DomiciliazioniMandato = _domiciliazioniMandato;
            self.TipiMandato = _tipiMandato;
            self.SequenzeIncasso = _sequenzaIncassi;

            self.UltimateCreditorEnable = ko.pureComputed(function () {
                return self.disposizione.AmdmntReq.UltmtCdtr.TipoSoggetto() != null;
            });

            self.UltimateCreditorPFEnable = ko.pureComputed(function () {
                return (self.UltimateCreditorEnable() && self.disposizione.AmdmntReq.UltmtCdtr.TipoSoggetto() == 'PF') ? 'true' : 'false';
            });

            self.UltimateDebitorPFEnable = ko.pureComputed(function () {
                return (self.UltimateDebitorEnable() && self.disposizione.AmdmntReq.UltmtDbtr.TipoSoggetto() == 'PF') ? 'true' : 'false';
            });

            self.UltimateDebitorEnable = ko.pureComputed(function () {
                return self.disposizione.AmdmntReq.UltmtDbtr.TipoSoggetto() != null;
            });

            self.OrgnlCdtrSchmeIdEnable = ko.pureComputed(function () {
                return self.disposizione.AmdmntReq.OrgnlCdtrSchmeTp() != null;
            });

            self.OrgnlCdtrSchmeIssrEnable = ko.pureComputed(function () {
                return self.disposizione.AmdmntReq.OrgnlCdtrSchmeTp() == 'PF';
            });

            self.UltimateCreditorAnagraficaModel = {
                Label: 'Fornitore',
                IdentifierPiazzatura: ko.observable(self.disposizione.Ordinante.Identifier),
                Soggetto: self.disposizione.AmdmntReq.UltmtCdtr,
                TipologiaAnagrafica: ko.observable('FO'),
                Visible: ko.observable(false),
                IsSeda: ko.observable(true),
                Callback: ko.observable(function (anagrafica) {
                    self.disposizione.AmdmntReq.UltmtCdtr.Nm(anagrafica.Denominazione());
                    self.disposizione.AmdmntReq.UltmtCdtr.Codice(anagrafica.Codice());
                })
            };

            self.DebtorAnagraficaModel = {
                Label: 'Cliente',
                IdentifierPiazzatura: ko.observable(self.disposizione.Ordinante.Identifier),
                Soggetto: self.disposizione.AmdmntReq.Dbtr,
                TipologiaAnagrafica: ko.observable('CL'),
                Visible: ko.observable(false),
                Callback: ko.observable(function (anagrafica) {
                    self.disposizione.AmdmntReq.CFSottoscrittore(anagrafica.CFSottoscrittore());
                    self.disposizione.AmdmntReq.MndtId(anagrafica.CodiceMandato());
                    self.disposizione.AmdmntReq.DurationFromDate(anagrafica.DataSottoscrizione());
                })
            };

            self.UltimateDebtorAnagraficaModel = {
                Label: 'Cliente',
                IdentifierPiazzatura: ko.observable(self.disposizione.Ordinante.Identifier),
                Soggetto: self.disposizione.AmdmntReq.UltmtDbtr,
                TipologiaAnagrafica: ko.observable('CL'),
                Visible: ko.observable(false),
                IsSeda: ko.observable(true),
                Callback: ko.observable(function (anagrafica) {
                    self.disposizione.AmdmntReq.UltmtDbtr.Nm(anagrafica.Denominazione());
                    self.disposizione.AmdmntReq.UltmtDbtr.Codice(anagrafica.Codice());
                })
            };

            self.UltimateCreditorCollapse = function () {
                console.log(self.CurrentCodice());
                self.UltimateCreditorBodyVisible(!self.UltimateCreditorBodyVisible());
            };

            self.UltimateDebtorCollapse = function () {
                self.UltimateDebtorBodyVisible(!self.UltimateDebtorBodyVisible());
            };

            var CurrentCodiceSubscribe = self.CurrentCodice.subscribe(function () {
                if (self.CurrentCodice() == 'CodiceProprietario') {
                    self.disposizione.AmdmntReq.UltmtCdtr.Cd(null);
                    self.CodiceProprietarioActive(true);
                    self.CodiceActive(false);
                } else {
                    self.disposizione.AmdmntReq.UltmtCdtr.Prtry(null);
                    self.CodiceProprietarioActive(false);
                    self.CodiceActive(true);
                }
            });

            var CurrentCodiceDebitoreSubscribe = self.CurrentCodiceDebitore.subscribe(function () {
                if (self.CurrentCodiceDebitore() == 'CodiceProprietario') {
                    self.disposizione.AmdmntReq.UltmtDbtr.Cd(null);
                    self.CodiceProprietarioDebitoreActive(true);
                    self.CodiceDebitoreActive(false);
                } else {
                    self.disposizione.AmdmntReq.UltmtDbtr.Prtry(null);
                    self.CodiceProprietarioDebitoreActive(false);
                    self.CodiceDebitoreActive(true);
                }
            });

            ko.postbox.subscribe("selettore-banche." + App.Seda.Allineamento.TipoBloccoLogico.UPD + ".SELECTED", function (piazzatura) {
                self.disposizione.AmdmntReq.CdtrSchmeId(piazzatura.Azienda.CreditorId());
                self.disposizione.AmdmntReq.CdtrAgt(piazzatura.Rapporto.Bic());
                self.Validation.removeAll();
            });

            self.UltimateCreditorAnagraficaSearch = _anagraficaSearchVisible(self.UltimateCreditorAnagraficaModel, self.disposizione.Ordinante.Identifier, self.Validation);
            self.DebtorAnagraficaSearch = _anagraficaSearchVisible(self.DebtorAnagraficaModel, self.disposizione.Ordinante.Identifier, self.Validation);
            self.UltimateDebtorAnagraficaSearch = _anagraficaSearchVisible(self.UltimateDebtorAnagraficaModel, self.disposizione.Ordinante.Identifier, self.Validation);

            self.ToggleCheckAggiornaAnagrafica = function () {
                self.AggiornaAnagrafica(!self.AggiornaAnagrafica());
            };

            var ultmtCdtrTipoSoggettoSubscribe = self.disposizione.AmdmntReq.UltmtCdtr.TipoSoggetto.subscribe(function () {
                _setCountryToItaly(self.disposizione.AmdmntReq.UltmtCdtr.TipoSoggetto, self.disposizione.AmdmntReq.UltmtCdtr.CtryOfBirth);
            });

            var ultmtDbtrTipoSoggettoSubscribe = self.disposizione.AmdmntReq.UltmtDbtr.TipoSoggetto.subscribe(function () {
                _setCountryToItaly(self.disposizione.AmdmntReq.UltmtDbtr.TipoSoggetto, self.disposizione.AmdmntReq.UltmtDbtr.CtryOfBirth);
            });

            self.Init = function () {
                self.UltimateCreditorBodyVisible(self.disposizione.AmdmntReq.UltmtCdtr != null && self.disposizione.AmdmntReq.UltmtCdtr.Identifier != null && self.disposizione.AmdmntReq.UltmtCdtr.Identifier.Id() != null);
                self.CurrentCodice((self.disposizione.Identifier == null || self.disposizione.Identifier.Id() == null) || self.disposizione.AmdmntReq.UltmtCdtr.Cd() == null ? 'CodiceProprietario' : 'Codice');
                self.CurrentCodiceDebitore((self.disposizione.Identifier == null || self.disposizione.Identifier.Id() == null) || self.disposizione.AmdmntReq.UltmtDbtr.Cd() == null ? 'CodiceProprietarioDebitore' : 'CodiceDebitore');
                self.disposizione.AmdmntReq.Dbtr.TipologiaAnagrafica(App.Core.IsNullOrUndefined(self.disposizione.AmdmntReq.Dbtr.TipologiaAnagrafica()) ?
                    'CL' :
                    self.disposizione.AmdmntReq.Dbtr.TipologiaAnagrafica());
                self.disposizione.AmdmntReq.CdtrSchmeTp(self.disposizione.AmdmntReq.CdtrSchmeTp() || 'PG');
                self.AggiornaAnagrafica(false);

                ko.postbox.subscribe('ALLINEAMENTO_SEDA_' + App.Seda.Allineamento.TipoBloccoLogico.UPD + ':NEWDISPO', function (disposizione) {
                    if (disposizione && self.disposizione.AmdmntReq.CdtrSchmeId()) {
                        disposizione.AmdmntReq.CdtrAgt(self.disposizione.AmdmntReq.CdtrAgt());
                        disposizione.AmdmntReq.CdtrSchmeId(self.disposizione.AmdmntReq.CdtrSchmeId());
                    } else {
                        var pagedListData = [];

                        pagedListData = ko.utils.arrayMap(PIAZZATURA, function (p) {
                            var current = new App.Common.PiazzaturaBo(p);

                            return current;
                        });

                        if (pagedListData.length == 1) {
                            var piazzatura = pagedListData[0];

                            self.disposizione.AmdmntReq.CdtrSchmeId(piazzatura.Azienda.CreditorId());
                            self.disposizione.AmdmntReq.CdtrAgt(piazzatura.Rapporto.Bic());
                        }
                    }
                });

                if (!self.disposizione.AmdmntReq.Dbtr.Indirizzo.Nazione()) {
                    self.disposizione.AmdmntReq.Dbtr.Indirizzo.Nazione('IT');
                }
            }

            self.Init();

            self.dispose = function () {
                CurrentCodiceSubscribe.dispose();
                CurrentCodiceDebitoreSubscribe.dispose();
                ultmtCdtrTipoSoggettoSubscribe.dispose();
                ultmtDbtrTipoSoggettoSubscribe.dispose();
            }
        }
    });
</script>



<script type="text/html" id="seda-canc">
    <div data-bind="with: disposizione.CxlReq">
        <div class="row">
            <h3 class="titleSection">
                Dati Aggiuntivi Ordinante
            </h3>
        </div>
        <div class="section">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-sm-3 col-xs-12">
                        <label class="control-label">Identificativo creditore</label>
                        <input type="text" class="form-control" data-bind="uppercaseText: OrgnlCdtrSchmeId, enable: $component.DispoIsNotInDistinta" />
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                    <div class="col-sm-4 col-xs-12">
                        <label class="control-label">BIC</label>
                        <input type="text" class="form-control" data-bind="uppercaseText: OrgnlCdtrAgt, enable: $component.DispoIsNotInDistinta" />
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                    <div class="col-sm-3 col-xs-12" style="padding-left: 0">
                        <label class="control-label">Tipo soggetto</label>
                        <select class="form-control" data-bind="options: $component.tipologieSoggetto, optionsText: 'V', optionsValue: 'K', value: OrgnlCdtrSchmeTp, enable: $component.DispoIsNotInDistinta"></select>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI DEBITORE -->
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Debitore
                </h3>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Ragione sociale</label>
                            <input type="text" class="form-control no-placeholder-italic" data-bind="value: OrgnlDbtr.Denominazione" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                            <label class="control-label"></label>
                            <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.DebtorAnagraficaSearch">&nbsp;</span>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Codice</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: OrgnlDbtr.Codice" />
                        </div>
                    </div>
                </div>
                <div data-bind="component: { name: 'anagrafica-search', params: $component.DebtorAnagraficaModel }"></div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">IBAN</label>
                            <input type="text" class="form-control" data-bind="uppercaseText: OrgnlDbtr.Iban" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">BIC</label>
                            <input placeholder="opzionale" type="text" class="form-control" data-bind="uppercaseText: OrgnlDbtr.Bic" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI MANDATO-->
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Mandato Originario
                </h3>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Codice mandato</label>
                            <input type="text" class="form-control no-placeholder-italic" data-bind="value: OrgnlMndtId" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Data sottoscrizione</label>
                            <date-picker params="Date: OrgnlDurationFromDate"></date-picker>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Identificativo mandato</label>
                            <input type="text" class="form-control" data-bind="value: OrgnlMndtReqId" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Tipo mandato</label>
                            <select class="form-control" data-bind="options: $component.TipiMandato, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: OrgnlLclInstrmPrtry"></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Sequenza incasso</label>
                            <select class="form-control" data-bind="options: $component.SequenzaIncassi, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: OrgnlSeqTp"></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Domiciliazione mandato</label>
                            <select class="form-control" data-bind="options: $component.DomiciliazioniMandato, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: OrgnlSvcLvlPrtry"></select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('seda-canc', {
        template: { element: 'seda-canc' },
        viewModel: function (params) {
            var self = this;

            self.disposizione = params.disposizione
            self.tipologieSoggetto = params.tipologieSoggetto;
            self.Validation = params.Validation;
            self.CallbackDatiPrecedenti = params.CallbackDatiPrecedenti;
            self.DispoIsNotInDistinta = params.DispoIsNotInDistinta;

            self.DomiciliazioniMandato = _domiciliazioniMandato;
            self.SequenzaIncassi = _sequenzaIncassi;
            self.TipiMandato = _tipiMandato;

            self.DebtorAnagraficaModel = {
                Label: 'Cliente',
                IdentifierPiazzatura: ko.observable(self.disposizione.Ordinante.Identifier),
                Soggetto: self.disposizione.CxlReq.OrgnlDbtr,
                TipologiaAnagrafica: ko.observable('CL'),
                Visible: ko.observable(false),
                Callback: ko.observable(function (anagrafica) {
                    self.disposizione.CxlReq.OrgnlMndtId(anagrafica.CodiceMandato());
                    self.disposizione.CxlReq.OrgnlDurationFromDate(anagrafica.DataSottoscrizione());
                })
            };

            ko.postbox.subscribe("selettore-banche." + App.Seda.Allineamento.TipoBloccoLogico.DEL + ".SELECTED", function (piazzatura) {
                self.disposizione.CxlReq.OrgnlCdtrSchmeId(piazzatura.Azienda.CreditorId());
                self.disposizione.CxlReq.OrgnlCdtrAgt(piazzatura.Rapporto.Bic());
                self.Validation.removeAll();
            });

            self.DebtorAnagraficaSearch = _anagraficaSearchVisible(self.DebtorAnagraficaModel, self.disposizione.Ordinante.Identifier, self.Validation);

            self.Init = function () {
                self.disposizione.CxlReq.OrgnlCdtrSchmeTp(self.disposizione.CxlReq.OrgnlCdtrSchmeTp() || 'PG');

                ko.postbox.subscribe('ALLINEAMENTO_SEDA_' + App.Seda.Allineamento.TipoBloccoLogico.DEL + ':NEWDISPO', function (disposizione) {
                    if (disposizione && self.disposizione.CxlReq.OrgnlCdtrSchmeId()) {
                        disposizione.CxlReq.OrgnlCdtrAgt(self.disposizione.CxlReq.OrgnlCdtrAgt());
                        disposizione.CxlReq.OrgnlCdtrSchmeId(self.disposizione.CxlReq.OrgnlCdtrSchmeId());
                    } else {
                        var pagedListData = [];

                        pagedListData = ko.utils.arrayMap(PIAZZATURA, function (p) {
                            var current = new App.Common.PiazzaturaBo(p);

                            return current;
                        });

                        if (pagedListData.length == 1) {
                            var piazzatura = pagedListData[0];

                            self.disposizione.CxlReq.OrgnlCdtrSchmeId(piazzatura.Azienda.CreditorId());
                            self.disposizione.CxlReq.OrgnlCdtrAgt(piazzatura.Rapporto.Bic());
                        }
                    }
                });
            }

            self.Init();
        }
    });
</script>



<script type="text/html" id="seda-acpt">
    <div data-bind="with: disposizione.AccptncRpt">
        <div class="row">
            <h3 class="titleSection">
                Dati Aggiuntivi Ordinante
            </h3>
        </div>
        <div class="section">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-sm-3 col-xs-12">
                        <label class="control-label">Identificativo creditore</label>
                        <input type="text" class="form-control" data-bind="uppercaseText: OrgnlCdtrSchmeId, enable: $component.DispoIsNotInDistinta" />
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                    <div class="col-sm-4 col-xs-12">
                        <label class="control-label">BIC</label>
                        <input type="text" class="form-control" data-bind="uppercaseText: OrgnlCdtrAgt, enable: $component.DispoIsNotInDistinta" />
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                    <div class="col-sm-3 col-xs-12" style="padding-left: 0">
                        <label class="control-label">Tipo soggetto</label>
                        <select class="form-control" data-bind="options: $component.tipologieSoggetto, optionsText: 'V', optionsValue: 'K', value: OrgnlCdtrSchmeTp, enable: $component.DispoIsNotInDistinta"></select>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI DEBITORE -->
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Debitore
                </h3>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Ragione sociale</label>
                            <input type="text" class="form-control no-placeholder-italic" data-bind="value: OrgnlDbtr.Denominazione" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                            <label class="control-label"></label>
                            <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.DebtorAnagraficaSearch">&nbsp;</span>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Codice</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: OrgnlDbtr.Codice" />
                        </div>
                    </div>
                </div>
                <div data-bind="component: { name: 'anagrafica-search', params: $component.DebtorAnagraficaModel }"></div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Indirizzo</label>
                            <input type="text" placeholder="opzionale" class="form-control" data-bind="value: OrgnlDbtr.Indirizzo.Via" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Stato</label>
                            <select class="form-control" data-bind="options: $component.Nazioni, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: OrgnlDbtr.Indirizzo.Nazione"></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">IBAN</label>
                            <input type="text" placeholder="opzionale" class="form-control" data-bind="uppercaseText: OrgnlDbtr.Iban" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">BIC</label>
                            <input type="text" class="form-control" data-bind="uppercaseText: OrgnlDbtr.Bic" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">C.F./P.I. debitore</label>
                            <input type="text" placeholder="opzionale" class="form-control" data-bind="uppercaseText: OrgnlDbtr.CodiceFiscale" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Cod. Fisc. sottoscrittore</label>
                            <input type="text"  class="form-control" data-bind="uppercaseText: OrgnlCFSottoscrittore, attr: {placeholder: $component.phOpzionale}" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label"></label>
                            <div class="form-field link-icon">
                                <span class="link-icon icon-creazioneUtenti link" data-bind="singleClick: $component.ToggleCheckAggiornaAnagrafica">
                                </span>
                                <input type="checkbox" data-bind="checked: $component.AggiornaAnagrafica" />
                                <label class="control-label">Aggiorna anagrafica</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI RISPOSTA MANDATO-->
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Per Risposta Mandato
                </h3>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Identificativo richiesta originaria</label>
                            <input type="text" class="form-control no-placeholder-italic" data-bind="value: OrgnlMsgId" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Tipo richiesta originaria</label>
                            <select class="form-control" data-bind="options: $component.TipiRichiestaOriginaria, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: OrgnlMsgNmId"></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Codice mandato</label>
                            <input type="text" class="form-control" data-bind="value: OrgnlMndtId" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Domiciliazione mandato</label>
                            <select class="form-control" data-bind="options: $component.DomiciliazioniMandato, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: OrgnlSvcLvlPrtry"></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Identificativo mandato</label>
                            <input type="text" class="form-control" data-bind="value: OrgnlMndtReqId" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Tipo mandato</label>
                            <select class="form-control" data-bind="options: $component.TipiMandato, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: OrgnlLclInstrmPrtry"></select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Esito richiesta</label>
                            <select class="form-control" data-bind="value: $component.Accptd">
                                <option value="N">Rifiutata</option>
                                <option value="S">Accettata</option>
                            </select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Codice rifiuto</label>
                            <input type="text" class="form-control" data-bind="enable: false, value: $component.LocalizationCodiceRifiuto()" />
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-12 col-xs-12" style="padding: 0">
                            <label class="control-label">Motivazioni aggiuntive</label>
                            <textarea placeholder="opzionale" type="text" class="form-control" data-bind="value: AddtlRjctRsnInf" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</script>

<script type="text/javascript">
    ko.components.register('seda-acpt', {
        template: { element: 'seda-acpt' },
        viewModel: function (params) {
            var self = this;

            self.disposizione = params.disposizione
            self.tipologieSoggetto = params.tipologieSoggetto;
            self.Validation = params.Validation;
            self.Nazioni = params.Nazioni;
            self.CallbackDatiPrecedenti = params.CallbackDatiPrecedenti;
            self.DispoIsNotInDistinta = params.DispoIsNotInDistinta;

            self.AggiornaAnagrafica = params.AggiornaAnagrafica;
            self.Accptd = ko.observable('N');

            self.TipiRichiesta = _tipiRichiesta;
            self.TipiRichiestaOriginaria = _tipiRichiestaOriginaria;
            self.DomiciliazioniMandato = _domiciliazioniMandato;
            self.TipiMandato = _tipiMandato;
            self.phOpzionale = ko.computed(function () {
                return 'opzionale';
            });

            self.DebtorAnagraficaModel = {
                Label: 'Cliente',
                IdentifierPiazzatura: ko.observable(self.disposizione.Ordinante.Identifier),
                Soggetto: self.disposizione.AccptncRpt.OrgnlDbtr,
                TipologiaAnagrafica: ko.observable('CL'),
                Visible: ko.observable(false),
                Callback: ko.observable(function (anagrafica) {
                    self.disposizione.AccptncRpt.OrgnlDbtr.CodiceFiscale(anagrafica.CodiceFiscale());
                    self.disposizione.AccptncRpt.OrgnlCFSottoscrittore(anagrafica.CFSottoscrittore());
                    self.disposizione.AccptncRpt.OrgnlMndtId(anagrafica.CodiceMandato());
                })
            };

            var AccptdSubscribe = self.Accptd.subscribe(function () {
                self.disposizione.AccptncRpt.Accptd(self.Accptd() === 'S');

                if (self.Accptd() === 'N') {
                    self.disposizione.AccptncRpt.RjctRsnCd('MD01');
                } else {
                    self.disposizione.AccptncRpt.RjctRsnCd(null);
                }
            });

            ko.postbox.subscribe("selettore-banche." + App.Seda.Allineamento.TipoBloccoLogico.ACPT + ".SELECTED", function (piazzatura) {
                self.disposizione.AccptncRpt.OrgnlCdtrSchmeId(piazzatura.Azienda.CreditorId());
                self.disposizione.AccptncRpt.OrgnlCdtrAgt(piazzatura.Rapporto.Bic());
                self.Validation.removeAll();
            });

            self.DebtorAnagraficaSearch = _anagraficaSearchVisible(self.DebtorAnagraficaModel, self.disposizione.Ordinante.Identifier, self.Validation);

            self.ToggleCheckAggiornaAnagrafica = function () {
                self.AggiornaAnagrafica(!self.AggiornaAnagrafica());
            };

            self.LocalizationCodiceRifiuto = ko.pureComputed(function () {
                return Localization.CodiceRifiuto.GetLabel(self.disposizione.AccptncRpt.RjctRsnCd());
            });


            self.Init = function () {
                self.AggiornaAnagrafica(false);
                self.disposizione.AccptncRpt.OrgnlDbtr.TipologiaAnagrafica(App.Core.IsNullOrUndefined(self.disposizione.AccptncRpt.OrgnlDbtr.TipologiaAnagrafica()) ?
                    'CL' :
                    self.disposizione.AccptncRpt.OrgnlDbtr.TipologiaAnagrafica());
                self.disposizione.AccptncRpt.OrgnlCdtrSchmeTp(self.disposizione.AccptncRpt.OrgnlCdtrSchmeTp() || 'PG');

                if (App.Core.IsNullOrUndefined(self.disposizione.AccptncRpt.Accptd()) || !self.disposizione.AccptncRpt.Accptd()) {
                    self.Accptd('N');
                    self.disposizione.AccptncRpt.RjctRsnCd('MD01');
                } else {
                    self.Accptd('S');
                }

                ko.postbox.subscribe('ALLINEAMENTO_SEDA_' + App.Seda.Allineamento.TipoBloccoLogico.ACPT + ':NEWDISPO', function (disposizione) {
                    if (disposizione && self.disposizione.AccptncRpt.OrgnlCdtrSchmeId()) {
                        disposizione.AccptncRpt.OrgnlCdtrAgt(self.disposizione.AccptncRpt.OrgnlCdtrAgt());
                        disposizione.AccptncRpt.OrgnlCdtrSchmeId(self.disposizione.AccptncRpt.OrgnlCdtrSchmeId());
                    } else {
                        var pagedListData = [];

                        pagedListData = ko.utils.arrayMap(PIAZZATURA, function (p) {
                            var current = new App.Common.PiazzaturaBo(p);

                            return current;
                        });

                        if (pagedListData.length == 1) {
                            var piazzatura = pagedListData[0];

                            self.disposizione.AccptncRpt.OrgnlCdtrSchmeId(piazzatura.Azienda.CreditorId());
                            self.disposizione.AccptncRpt.OrgnlCdtrAgt(piazzatura.Rapporto.Bic());
                        }
                    }
                });

                if (!self.disposizione.AccptncRpt.OrgnlDbtr.Indirizzo.Nazione()) {
                    self.disposizione.AccptncRpt.OrgnlDbtr.Indirizzo.Nazione('IT');
                }
            }

            self.Init();

            self.dispose = function () {
                AccptdSubscribe.dispose();
            }
        }
    });
</script>


<script type="text/html" id="allineamento-seda-summary">
    <div data-bind="with: Disposizione" style="font-size: 12px">
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
                                Intestato
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="text: Ordinante.RagioneSociale"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Banca
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: $component.DettaglioBanca().Creditore.DescrizioneBanca"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 white-block">
                    <div class="col-xs-12">
                        <div class="text-center">
                            <h1>
                                Debitore
                            </h1>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Intestato
                            </label>
                        </div>
                        <div class="col-xs-8  textTruncate">
                            <label data-bind="text: $component.Debtor().Denominazione"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Iban:
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: $component.Debtor().Iban"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Banca
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: $component.DettaglioBanca().Debitore.DescrizioneBanca"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Filiale
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: $component.DettaglioBanca().Debitore.DescrizioneFiliale"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('allineamento-seda-summary', {
        template: { element: 'allineamento-seda-summary' },
        viewModel: function (params) {
            var self = this;
            
            self.Disposizione = params.Disposizione;
            
            self.DettaglioBanca = ko.observable(new App.Common.BancaModel(null));
            self.Debtor = ko.observable(self.Disposizione().GetBloccoLogico() ? self.Disposizione().GetBloccoLogico().Dbtr || self.Disposizione().GetBloccoLogico().OrgnlDbtr : new App.Common.SoggettoBo());
            
            var retrieveBancaModel = function () {
                self.Debtor(self.Disposizione().GetBloccoLogico() ? self.Disposizione().GetBloccoLogico().Dbtr || self.Disposizione().GetBloccoLogico().OrgnlDbtr : new App.Common.SoggettoBo());
                var dettaglio = new App.Common.BancaModel();

                dettaglio.Creditore.CodiceAbi(self.Disposizione().Ordinante.Abi());
                dettaglio.Debitore.CodiceAbi(App.Core.GetAbi(self.Debtor().Iban()));
                dettaglio.Debitore.CodiceCab(App.Core.GetCab(self.Debtor().Iban()));
                dettaglio.Debitore.Stato(App.Core.GetPaese(self.Debtor().Iban()));

                Http.Post('/anchise2.web/Anagrafiche/Banca/GetDettaglioBanche', ko.toJSON({ model: dettaglio, isSeda: true }))
                    .success(function (data) {
                        ko.mapping.fromJS(data, null, self.DettaglioBanca);
                    });
            };

            var initEvent = ko.postbox.subscribe('allineamento-seda-summary.INITIALIZE', retrieveBancaModel);

            self.LocalInstrument = function (localInstrument) {
                return Localization.GetLocalInstrument(localInstrument())
            };

            retrieveBancaModel();

            self.dispose = function () {
                // prevent multiple subscribe when this component is used inside with data-bind
                initEvent.dispose(); 
            }
        }
    });
</script>


<script type="text/html" id="allineamento-seda-dataentry">
    <!-- SUCCESS MESSAGES -->
    <div data-bind="visible: SuccessMessagesVisible">
        <feedback-messages params="Component: SuccessComponent, Buttons: SuccessButtons, CssClass: 'alert', Message: SuccessMessage, PageTitle: $component.FeedbackTitle, TitleCssClass: 'incassi'"></feedback-messages>
    </div>
    <div data-bind="visible: !SuccessMessagesVisible()">
        <div class="riquadro">
            <div class="row">
                <div>
                    <div class="flag riepilogo">&nbsp;</div>
                    <h1>Allineamento SEDA</h1>
                </div>
            </div>
            <div class="row" data-bind="with: Disposizione">
                <!-- VALIDATION -->
                <validation-messages params="Validation: $component.Validation"></validation-messages>
                <div class="section">
                    <div class="row">
                        <h3 class="titleSection">
                            Banca selezionata
                        </h3>
                    </div>
                    <div>
                        <selettore-banca params="Ordinante: Ordinante, Callback: $component.CallbackSelettoreBanche, ArrowVisible: $component.DispoIsNotInDistinta"></selettore-banca>
                    </div>
                </div>

                <div class="row, margin-top10" data-bind="visible: TipoBloccoLogico() == App.Seda.Allineamento.TipoBloccoLogico.INS">
                    <seda-ins params="disposizione: $data, tipologieSoggetto: $component.tipologieSoggetto, Validation: $component.Validation, Nazioni: $component.Nazioni, CallbackDatiPrecedenti: $component.CallbackDatiPrecedenti, AggiornaAnagrafica: $component.AggiornaAnagrafica, DispoIsNotInDistinta: $component.DispoIsNotInDistinta"></seda-ins>
                </div>

                <div class="row, margin-top10" data-bind="visible: TipoBloccoLogico() == App.Seda.Allineamento.TipoBloccoLogico.UPD">
                    <seda-upd params="disposizione: $data, tipologieSoggetto: $component.tipologieSoggetto, Validation: $component.Validation, Nazioni: $component.Nazioni, CallbackDatiPrecedenti: $component.CallbackDatiPrecedenti, AggiornaAnagrafica: $component.AggiornaAnagrafica, DispoIsNotInDistinta: $component.DispoIsNotInDistinta"></seda-upd>
                </div>

                <div class="row, margin-top10" data-bind="visible: TipoBloccoLogico() == App.Seda.Allineamento.TipoBloccoLogico.DEL">
                    <seda-canc params="disposizione: $data, tipologieSoggetto: $component.tipologieSoggetto, Validation: $component.Validation, Nazioni: $component.Nazioni, CallbackDatiPrecedenti: $component.CallbackDatiPrecedenti, DispoIsNotInDistinta: $component.DispoIsNotInDistinta"></seda-canc>
                </div>

                <div class="row, margin-top10" data-bind="visible: TipoBloccoLogico() == App.Seda.Allineamento.TipoBloccoLogico.ACPT">
                    <seda-acpt params="disposizione: $data, tipologieSoggetto: $component.tipologieSoggetto, Validation: $component.Validation, Nazioni: $component.Nazioni, CallbackDatiPrecedenti: $component.CallbackDatiPrecedenti, AggiornaAnagrafica: $component.AggiornaAnagrafica, DispoIsNotInDistinta: $component.DispoIsNotInDistinta"></seda-acpt>
                </div>
            </div>
        </div>

        <!-- SUBMIT ACTIONS -->
        <div class="text-right margin-top10">
            <input type="button" class="btn btn-primary" value="Annulla" data-bind="singleClick: Cancel" />
            <input type="button" class="btn btn-primary" data-bind="singleClick: Save, value: SaveButtonLabel" />
        </div>
    </div>
</script>

<script type="text/javascript">
    var _setCountryToItaly = function (tipoSoggetto, countryToSet) {
        if (tipoSoggetto() == 'PF' && !countryToSet()) {
            countryToSet('IT');
        } else {
            countryToSet('');
        }
    };

    var _anagraficaSearchVisible = function (anagraficaModel, identifierOrdinante, validation) {
        return function () {
            if (App.Common.IdentifierIsNotValid(identifierOrdinante)) {
                validation.removeAll();
                validation.push(new App.Core.ValidationMessage({ ErrorMessage: 'Per poter accedere alla funzionalità di ricerca è necessario selezionare prima una banca.' }));
            } else {
                anagraficaModel.Visible(true);
            }
        }
    };

    ko.components.register('allineamento-seda-dataentry', {
        template: { element: 'allineamento-seda-dataentry' },
        viewModel: function (params) {
            var self = this;

            // Model
            self.Disposizione = params.disposizione;

            self.Validation = ko.observableArray([]);
            self.SuccessMessagesVisible = ko.observable(false);
            self.tipologieSoggetto = ko.observableArray(PROFILABLE_DISPOSIZIONI['TIPO_SOGGETTO']);
            self.Nazioni = ko.observableArray(PROFILABLE_DISPOSIZIONI['NAZIONE']);
            self.SuccessButtons = ko.observableArray([]);
            self.SuccessMessage = ko.observable('Disposizione inserita correttamente.\nPer poter inviare la disposizione è necessario creare la distinta, aggregando le disposizioni');
            self.FeedbackTitle = ko.observable('Allineamento SEDA: conferma inserimento');
            self.CallbackDatiPrecedenti = ko.observable(null);
            self.AggiornaAnagrafica = ko.observable(false);
            self.CallbackSelettoreBanche = ko.observable(function (piazzatura) {
                ko.postbox.publish("selettore-banche." + self.Disposizione().TipoBloccoLogico() + ".SELECTED", piazzatura);
            });
            self.SaveButtonLabel = ko.observable('Inserisci');
            self.DispoIsNotInDistinta = ko.observable(true);

            self.SuccessComponent = new App.Core.UiComponent({
                Name: ko.observable('allineamento-seda-summary'),
                Params: {
                    Disposizione: self.Disposizione
                }
            });

            // Actions
            ko.postbox.subscribe("SEDASELECTOR_SELECTED", function (blockType) {
                self.Disposizione().TipoBloccoLogico(App.Seda.Allineamento.TipoBloccoLogico[blockType()]);

                ko.postbox.publish('ALLINEAMENTO_SEDA_' + self.Disposizione().TipoBloccoLogico() + ':NEWDISPO');
            });

            ko.postbox.subscribe("selettore-banche.SELECTED", function () {
                self.Validation.removeAll();
            });

            self.Cancel = function () {
                self.Disposizione(new App.Seda.Allineamento.DisposizioneSedaBo({
                    Identifier: {
                        Crypt: self.Disposizione().Identifier.Crypt(),
                        Hash: self.Disposizione().Identifier.Hash(),
                        ClasseServizio: self.Disposizione().Identifier.ClasseServizio(),
                    },
                    TipoBloccoLogico: App.Seda.Allineamento.TipoBloccoLogico.INS
                }));
                self.Validation.removeAll();
                history.back();
            }

            self.Save = function () {
                Http.PostWithTxMon('/anchise2.web/Seda/DataEntry/Save', ko.toJSON({ model: self.Disposizione, updateanagrafica: self.AggiornaAnagrafica }))
                    .success(function (data) {
                        var result = new App.Core.StandardJsonResult(data);
                        if (data.HasError) {
                            ko.mapping.fromJS(result.Messages, null, self.Validation);
                            $('body,html').animate({ scrollTop: 0 }, 800);
                        } else {
                            ko.postbox.publish('allineamento-seda-summary.INITIALIZE');

                            App.Core.CleanSpalla(spallaName);

                            self.AggiornaAnagrafica(false);
                            $.ajax('/anchise2.web/Widget/LinkRapidi')
                                .success(function (html) {
                                    $(spallaName).append(html);
                                });
                            self.SuccessMessagesVisible(true);
                        }
                    });
            }

            var _init = function () {
                // NUOVA DISPOSIZIONE
                if (self.Disposizione().Identifier.Id() == null) {
                    self.SaveButtonLabel('Inserisci');
                    self.DispoIsNotInDistinta(true);

                    self.SuccessButtons([
                        new App.Core.UiButton({
                            Label: 'Nuovo Allineamento SEDA',
                            Callback: function () {
                                self.Disposizione(new App.Seda.Allineamento.DisposizioneSedaBo({
                                    Identifier: {
                                        Crypt: self.Disposizione().Identifier.Crypt(),
                                        Hash: self.Disposizione().Identifier.Hash(),
                                        ClasseServizio: self.Disposizione().Identifier.ClasseServizio(),
                                    },
                                    TipoBloccoLogico: self.Disposizione().TipoBloccoLogico()
                                }));
                                self.Validation.removeAll();
                                self.SuccessMessagesVisible(false);
                            }
                        }),
                        new App.Core.UiButton({
                            Label: 'Nuovo Allineamento SEDA con i dati precedenti',
                            Callback: function () {
                                self.Validation([]);
                                var dispo = new App.Seda.Allineamento.DisposizioneSedaBo({
                                    Ordinante: { Identifier: self.Disposizione().Ordinante.Identifier },
                                    Identifier: {
                                        Crypt: self.Disposizione().Identifier.Crypt(),
                                        Hash: self.Disposizione().Identifier.Hash(),
                                        ClasseServizio: self.Disposizione().Identifier.ClasseServizio(),
                                    },
                                    TipoBloccoLogico: self.Disposizione().TipoBloccoLogico()
                                });

                                ko.postbox.publish('ALLINEAMENTO_SEDA_' + self.Disposizione().TipoBloccoLogico() + ':NEWDISPO', dispo);

                                self.Disposizione(dispo);
                                self.SuccessMessagesVisible(false);
                            }
                        }),
                        new App.Core.UiButton({
                            Label: 'crea Distinta',
                            Callback: function () {
                                var filtro = {
                                    cryptOrdinante: self.Disposizione().Ordinante.Identifier.Crypt(),
                                    abi: self.Disposizione().Ordinante.Abi()
                                };

                                location.href = "/anchise2.web/Seda/SearchAllineamentiSeda?" + $.param(filtro);
                            }
                        })
                    ]);
                } else {
                    // UPDATE DISPOSIZIONE IN DISTINTA
                    if (self.Disposizione().IdentifierDistinta != null && self.Disposizione().IdentifierDistinta.Crypt() != null) {
                        self.SaveButtonLabel('Conferma');
                        self.SuccessMessage('Disposizione modificata correttamente.\nPer poter procedere è necessario rigenerare la distinta');
                        self.FeedbackTitle('Allineamento SEDA: conferma modifica');
                        self.DispoIsNotInDistinta(false);

                        self.SuccessButtons([
                            new App.Core.UiButton({
                                Label: 'crea Distinta',
                                Callback: function () {
                                    self.SuccessMessagesVisible(false);
                                    history.back();
                                }
                            })
                        ]);
                    } else {
                        // UPDATE DISPOSIZIONE NON IN DISTINTA
                        self.SuccessMessage('Disposizione modificata correttamente.\nPer poter inviare la disposizione è necessario creare la distinta, aggregando le disposizioni');
                        self.FeedbackTitle('Allineamento SEDA: conferma modifica');
                        self.SaveButtonLabel('Conferma');
                        self.DispoIsNotInDistinta(true);

                        self.SuccessButtons([
                            new App.Core.UiButton({
                                Label: 'crea Distinta',
                                Callback: function () {
                                    self.SuccessMessagesVisible(false);
                                    history.back();
                                }
                            })
                        ]);
                    }
                }
            }

            var _disposizioneSubscribe = self.Disposizione.subscribe(function () {
                _init();
            });

            _init();

            self.dispose = function () {
                _disposizioneSubscribe.dispose();
            }
        }
    });
</script>

<div id="4db18459497f48dd9aca58e6bd408abc_3">
    <div data-bind="visible: CurrentSection() == Sections.SELECTION" style="display: none;">
        <sedaselector-dataentry>
    <div class="riquadro">
        <div class="row">
            <div>
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Allineamento SEDA</h1>
            </div>
        </div>
        <div class="row">
            <div class="table-responsive">
                <div class="dataTables_wrapper" style="margin-top: 10px">
                    <table class="dataTable table">
                        <thead>
                            <tr>
                                <th style="width: 40px;">
                                    Opzione
                                </th>
                                <th>
                                    Descrizione
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <input type="radio" name="blockTye" value="INS" data-bind="checked: blockType">
                                </td>
                                <td>
                                    Richiesta nuovo mandato
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="radio" name="blockTye" value="UPD" data-bind="checked: blockType">
                                </td>
                                <td>
                                    Richiesta modifica mandato
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="radio" name="blockTye" value="DEL" data-bind="checked: blockType">
                                </td>
                                <td>
                                    Richiesta cancellazione mandato
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="radio" name="blockTye" value="ACPT" data-bind="checked: blockType">
                                </td>
                                <td>
                                    Risposta a richiesta di allineamento ad iniziativa debitore
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- SUBMIT ACTIONS -->
    <div class="text-right">
        <input type="button" class="btn btn-primary" value="Conferma" data-bind="singleClick: Confirm">
    </div>
</sedaselector-dataentry>
    </div>
    <div data-bind="visible: CurrentSection() == Sections.DATA_ENTRY" style="">
        <allineamento-seda-dataentry params="disposizione: disposizioneSeda">
    <!-- SUCCESS MESSAGES -->
    <div data-bind="visible: SuccessMessagesVisible" style="display: none;">
        <feedback-messages params="Component: SuccessComponent, Buttons: SuccessButtons, CssClass: 'alert', Message: SuccessMessage, PageTitle: $component.FeedbackTitle, TitleCssClass: 'incassi'">
    <div class="riquadro">
        <div data-bind="visible: PageTitle != null">
            <div class="flag incassi" data-bind="css: TitleCssClass">&nbsp;</div>
            <h1 data-bind="text: PageTitle">Allineamento SEDA: conferma inserimento</h1>
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
    <div data-bind="with: Disposizione" style="font-size: 12px">
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
                                Intestato
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="text: Ordinante.RagioneSociale">AUTOMOBILE CLUB MODENA</label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Banca
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: $component.DettaglioBanca().Creditore.DescrizioneBanca">BANCO BPM S.P.A.</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 white-block">
                    <div class="col-xs-12">
                        <div class="text-center">
                            <h1>
                                Debitore
                            </h1>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Intestato
                            </label>
                        </div>
                        <div class="col-xs-8  textTruncate">
                            <label data-bind="text: $component.Debtor().Denominazione"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Iban:
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: $component.Debtor().Iban"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Banca
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: $component.DettaglioBanca().Debitore.DescrizioneBanca"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Filiale
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: $component.DettaglioBanca().Debitore.DescrizioneFiliale"></label>
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
            <input type="button" class="btn btn-primary" data-bind="value: Label, singleClick: Callback" value="Nuovo Allineamento SEDA">
            
            <input type="button" class="btn btn-primary" data-bind="value: Label, singleClick: Callback" value="Nuovo Allineamento SEDA con i dati precedenti">
            
            <input type="button" class="btn btn-primary" data-bind="value: Label, singleClick: Callback" value="crea Distinta">
            <!-- /ko -->
        </div>
    </div>
</feedback-messages>
    </div>
    <div data-bind="visible: !SuccessMessagesVisible()">
        <div class="riquadro">
            <div class="row">
                <div>
                    <div class="flag riepilogo">&nbsp;</div>
                    <h1>Allineamento SEDA</h1>
                </div>
            </div>
            <div class="row" data-bind="with: Disposizione">
                <!-- VALIDATION -->
                <validation-messages params="Validation: $component.Validation">
    <div data-bind="visible: ValidationSectionVisible" style="display: none;">
        <div class="messagePanel error" style="display: block">
            <h3 class="titleSection">
                Errori
            </h3>
            <ul data-bind="foreach: Validation"></ul>
        </div>
    </div>
</validation-messages>
                <div class="section">
                    <div class="row">
                        <h3 class="titleSection">
                            Banca selezionata
                        </h3>
                    </div>
                    <div>
                        <selettore-banca params="Ordinante: Ordinante, Callback: $component.CallbackSelettoreBanche, ArrowVisible: $component.DispoIsNotInDistinta">
    <div class="row background-darker">
        <div class="col-xs-11" data-bind="with: SelectedOrdinante" style="padding-left: 0">
            <div data-bind="visible: App.Common.IdentifierIsValid(Identifier)" style="margin-top: 10px">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="col-xs-3 no-padding">
                            <span>Intestato a</span>
                        </div>
                        <div class="col-xs-9 no-padding">
                            <strong data-bind="text: RagioneSociale">AUTOMOBILE CLUB MODENA</strong>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-3 no-padding">
                            <span>ABI - Banca</span>
                        </div>
                        <div class="col-xs-9 no-padding">
                            <strong data-bind="text: Abi">05034</strong>
                            -
                            <strong data-bind="text: $component.DescrizioneBanca">BANCO BPM S.P.A.</strong>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="col-xs-3 no-padding">
                            <span>CUC</span>
                        </div>
                        <div class="col-xs-9 no-padding">
                            <strong data-bind="text: Cuc">0748872E</strong>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-3 no-padding">
                            <span>C.F./P.I.</span>
                        </div>
                        <div class="col-xs-9 no-padding">
                            <strong data-bind="text: IdentificativoFiscale">00179340369</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div data-bind="visible: !App.Common.IdentifierIsValid(Identifier)" style="display: none;">
                <div class="row">
                    <div class="col-xs-12" style="height: 80px; padding: 35px 20px">
                        <strong data-bind="text: $component.textSelettore">Selezionare la banca dell'ordinante</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-1 vertical-center" style="height: 80px">
            <a href="#" data-bind="click: RapportiDataTableVisibleToggle, css: ArrowToggle, visible: ArrowVisible" class="btnSelezioneCC icon-replace icon-arrowdown active" style="display: none;"></a>
        </div>
    </div>
    <div class="row" data-bind="slideVisible: RapportiDataTableVisible" style="display: none;">
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
                            <th data-bind="css: ThCss('Rapporto.CodiceAbi'), click: SortToggleObservable('Rapporto.CodiceAbi')" class="col-md-1 sorting">
                                ABI
                            </th>
                            <th data-bind="css: ThCss('Rapporto.DescrizioneBanca'), click: SortToggleObservable('Rapporto.DescrizioneBanca')" class="sorting">
                                Descrizione Banca
                            </th>
                            <th data-bind="css: ThCss('Azienda.RagioneSociale'), click: SortToggleObservable('Azienda.RagioneSociale')" class="sorting_asc">
                                Intestazione
                            </th>
                        </tr>
                    </thead>
                    <tbody data-bind="foreach: Page">
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.DescrizioneBanca">BANCO BPM S.P.A.</td>
                            <td data-bind="text: Azienda.RagioneSociale">AUTOMOBILE CLUB MODENA</td>
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
</selettore-banca>
                    </div>
                </div>

                <div class="row, margin-top10" data-bind="visible: TipoBloccoLogico() == App.Seda.Allineamento.TipoBloccoLogico.INS" style="display: none;">
                    <seda-ins params="disposizione: $data, tipologieSoggetto: $component.tipologieSoggetto, Validation: $component.Validation, Nazioni: $component.Nazioni, CallbackDatiPrecedenti: $component.CallbackDatiPrecedenti, AggiornaAnagrafica: $component.AggiornaAnagrafica, DispoIsNotInDistinta: $component.DispoIsNotInDistinta">
    <div data-bind="with: disposizione.InitnReq">
        <div class="row">
            <h3 class="titleSection">
                Dati Aggiuntivi Ordinante
            </h3>
        </div>
        <div class="section">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-sm-3 col-xs-12">
                        <label class="control-label">Identificativo creditore</label>
                        <input type="text" class="form-control" data-bind="uppercaseText: CdtrSchmeId, enable: $component.DispoIsNotInDistinta">
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                    <div class="col-sm-4 col-xs-12">
                        <label class="control-label">BIC</label>
                        <input type="text" class="form-control" data-bind="uppercaseText: CdtrAgt, enable: $component.DispoIsNotInDistinta">
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                    <div class="col-sm-3 col-xs-12" style="padding-left: 0">
                        <label class="control-label">Tipo soggetto</label>
                        <select class="form-control" data-bind="options: $component.tipologieSoggetto, optionsText: 'V', optionsValue: 'K', value: CdtrSchmeTp, enable: $component.DispoIsNotInDistinta"><option value="PF">Persona Fisica</option><option value="PG">Persona Giuridica</option></select>
                    </div>
                </div>
            </div>
        </div>

        <!-- CREDITORE EFFETTIVO -->
        <div class="section">
            <div class="row link" data-bind="click: $component.UltimateCreditorCollapse">
                <h3 class="titleSection">
                    Dati Creditore Effettivo
                </h3>
                <div class="collapse-img-position">
                    <div data-bind="css: $component.UltimateCreditorCollapseCss" class="icon-replace icon-expand active"></div>
                </div>
            </div>
            <div data-bind="slideVisible: $component.UltimateCreditorBodyVisible" style="display: none;">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Ragione sociale</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltmtCdtr.Nm">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                            <label class="control-label"></label>
                            <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.UltimateCreditorAnagraficaSearch">&nbsp;</span>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Codice</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltmtCdtr.Codice">
                        </div>
                    </div>
                </div>
                <div data-bind="component: { name: 'anagrafica-search', params: $component.UltimateCreditorAnagraficaModel }">
    <div data-bind="visible: Visible" class="modal-layer" style="display: none;">
        <div class="modal-container section" data-bind="with: List" style="top: 20%;">
            <div class="riquadro">
                <div class="clearfix">
                    <div class="flag associaUtente">&nbsp;</div>
                    <h1 data-bind="text: $component.Label">Fornitore</h1>
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
                        <span data-bind="text: $component.Label">Fornitore</span>
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

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Tipo soggetto</label>
                            <select class="form-control" data-bind="options: $component.tipologieSoggetto, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: UltmtCdtr.TipoSoggetto"><option value="">opzionale</option><option value="PF">Persona Fisica</option><option value="PG">Persona Giuridica</option></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Identificativo</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable, value: UltmtCdtr.Id" disabled="">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">BIC</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() &amp;&amp; UltmtCdtr.TipoSoggetto() == 'PG', uppercaseText: UltmtCdtr.Bic" disabled="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding-right: 0; padding-left: 20px">
                            <label class="control-label" style="margin-left: -20px">Codice proprietario</label>
                            <div class="radio" style="font-weight: normal; margin-top: 0">
                                <input type="radio" name="codiceIns" value="CodiceProprietario" data-bind="enable: $component.UltimateCreditorEnable, checked: $component.CurrentCodice" disabled="">
                                <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() &amp;&amp; $component.CodiceProprietarioActive(), value: UltmtCdtr.Prtry" disabled="">
                            </div>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                            <label class="control-label" style="margin-left: -20px">Codice</label>
                            <div class="radio" style="font-weight: normal; margin-top: 0">
                                <input type="radio" name="codiceIns" value="Codice" data-bind="enable: $component.UltimateCreditorEnable, checked: $component.CurrentCodice" disabled="">
                                <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() &amp;&amp; $component.CodiceActive(), value: UltmtCdtr.Cd" disabled="">
                            </div>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">
                                Comune nascita
                            </label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() &amp;&amp; UltmtCdtr.TipoSoggetto() == 'PF', value: UltmtCdtr.CityOfBirth" disabled="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding-left: 0">
                            <label class="control-label">Data nascita</label>
                            <date-picker params="enable: $component.UltimateCreditorPFEnable, Date: UltmtCdtr.BirthDt">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" disabled="" id="ko_unique_15">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">
                                Provincia nascita
                            </label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() &amp;&amp; UltmtCdtr.TipoSoggetto() == 'PF', value: UltmtCdtr.PrvcOfBirth" disabled="">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">
                                Stato
                            </label>
                            <select class="form-control" data-bind="enable: $component.UltimateCreditorEnable() &amp;&amp; UltmtCdtr.TipoSoggetto() == 'PF', options: $component.Nazioni, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: UltmtCdtr.CtryOfBirth" disabled=""><option value="">opzionale</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antartide</option><option value="AG">Antigua e Barbuda</option><option value="SA">Arabia Saudita</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaigian</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BE">Belgio</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BY">Bielorussia</option><option value="MM">Birmania</option><option value="BO">Bolivia</option><option value="BA">Bosnia ed Erzegovina</option><option value="BW">Botswana</option><option value="BR">Brasile</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambogia</option><option value="CM">Camerun</option><option value="CA">Canada</option><option value="CV">Capo Verde</option><option value="TD">Ciad</option><option value="CL">Cile</option><option value="CN">Cina</option><option value="CY">Cipro</option><option value="VA">Città del Vaticano</option><option value="CO">Colombia</option><option value="KP">Corea del Nord</option><option value="KR">Corea del Sud</option><option value="CR">Costa Rica</option><option value="CI">Costa d'Avorio</option><option value="HR">Croazia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="DK">Danimarca</option><option value="DM">Dominica</option><option value="AE">Dubai</option><option value="EC">Ecuador</option><option value="EG">Egitto</option><option value="SV">El Salvador</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Etiopia</option><option value="FJ">Figi</option><option value="PH">Filippine</option><option value="FI">Finlandia</option><option value="FR">Francia</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="GS">Georgia del Sud e isole Sandwich meridionali</option><option value="DE">Germania</option><option value="GH">Ghana</option><option value="JM">Giamaica</option><option value="JP">Giappone</option><option value="GI">Gibilterra</option><option value="DJ">Gibuti</option><option value="JO">Giordania</option><option value="GR">Grecia</option><option value="GD">Grenada</option><option value="GL">Groenlandia</option><option value="GP">Guadalupa</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GQ">Guinea Equatoriale</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="GF">Guyana Francese</option><option value="HT">Haiti</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Irlanda</option><option value="IS">Islanda</option><option value="BV">Isola Bouvet</option><option value="NF">Isola Norfolk</option><option value="CX">Isola del Natale (Christmas Island)</option><option value="IM">Isola di Man</option><option value="BQ">Isole BES</option><option value="KY">Isole Cayman</option><option value="CC">Isole Cocos e Keeling</option><option value="KM">Isole Comore</option><option value="CK">Isole Cook</option><option value="FO">Isole Faer Oer</option><option value="FK">Isole Falkland</option><option value="HM">Isole Heard e McDonald</option><option value="MP">Isole Marianne Settentrionali</option><option value="MH">Isole Marshall</option><option value="PN">Isole Pitcairn</option><option value="SB">Isole Salomone</option><option value="TC">Isole Turks e Caicos</option><option value="VI">Isole Vergini Americane</option><option value="VG">Isole Vergini Britanniche</option><option value="UM">Isole minori esterne degli Stati Uniti</option><option value="AX">Isole Åland</option><option value="IL">Israele</option><option value="IT">Italia</option><option value="JE">Jersey</option><option value="KZ">Kazakistan</option><option value="KE">Kenya</option><option value="KG">Kirghizistan</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="LA">Laos</option><option value="LS">Lesotho</option><option value="LV">Lettonia</option><option value="LB">Libano</option><option value="LR">Liberia</option><option value="LY">Libia</option><option value="LI">Liechtenstein</option><option value="LT">Lituania</option><option value="LU">Lussemburgo</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MV">Maldive</option><option value="MY">Malesia</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MA">Marocco</option><option value="MQ">Martinica</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Messico</option><option value="MD">Moldavia</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MZ">Mozambico</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NO">Norvegia</option><option value="NC">Nuova Caledonia</option><option value="NZ">Nuova Zelanda</option><option value="OM">Oman</option><option value="NL">Paesi Bassi</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua Nuova Guinea</option><option value="PY">Paraguay</option><option value="PE">Perù</option><option value="PF">Polinesia Francese</option><option value="PL">Polonia</option><option value="PR">Porto Rico</option><option value="PT">Portogallo</option><option value="QA">Qatar</option><option value="GB">Regno Unito</option><option value="CZ">Repubblica Ceca</option><option value="CF">Repubblica Centrafricana</option><option value="CD">Repubblica Democratica del Congo</option><option value="CD">Repubblica Democratica del Congo</option><option value="DO">Repubblica Dominicana</option><option value="CG">Repubblica del Congo</option><option value="TW">Repubblica di Cina (Taiwan)</option><option value="RO">Romania</option><option value="RW">Ruanda</option><option value="RU">Russia</option><option value="RE">Réunion</option><option value="EH">Sahara Occidentale</option><option value="KN">Saint Kitts e Nevis</option><option value="PM">Saint Pierre e Miquelon</option><option value="VC">Saint Vincent e Grenadine</option><option value="BL">Saint-Barthélemy</option><option value="MF">Saint-Martin</option><option value="WS">Samoa</option><option value="AS">Samoa Americane</option><option value="SM">San Marino</option><option value="SH">Sant'Elena</option><option value="LC">Santa Lucia</option><option value="ST">Sao Tomé e Principe</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SY">Siria</option><option value="SK">Slovacchia</option><option value="SI">Slovenia</option><option value="SO">Somalia</option><option value="ES">Spagna</option><option value="LK">Sri Lanka</option><option value="FM">Stati Federati di Micronesia</option><option value="US">Stati Uniti d'America</option><option value="PS">Stato di Palestina</option><option value="ZA">Sudafrica</option><option value="SD">Sudan</option><option value="SS">Sudan del Sud</option><option value="SR">Suriname</option><option value="SJ">Svalbard e Jan Mayen</option><option value="SE">Svezia</option><option value="CH">Svizzera</option><option value="SZ">Swaziland</option><option value="TJ">Tagikistan</option><option value="TZ">Tanzania</option><option value="IO">Territori Britannici dell'Oceano Indiano</option><option value="TF">Territori Francesi del Sud</option><option value="TH">Thailandia</option><option value="TL">Timor Est</option><option value="TL">Timor Est</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad e Tobago</option><option value="TN">Tunisia</option><option value="TR">Turchia</option><option value="TM">Turkmenistan</option><option value="TV">Tuvalu</option><option value="UA">Ucraina</option><option value="UG">Uganda</option><option value="HU">Ungheria</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis e Futuna</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Descrizione</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable, value: UltmtCdtr.Issr" disabled="">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12" style="padding-left: 30px"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI DEBITORE -->
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Debitore
                </h3>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Ragione sociale</label>
                            <input type="text" class="form-control no-placeholder-italic" data-bind="value: Dbtr.Denominazione">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                            <label class="control-label"></label>
                            <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.DebtorAnagraficaSearch">&nbsp;</span>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Codice</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Dbtr.Codice">
                        </div>
                    </div>
                </div>
                <div data-bind="component: { name: 'anagrafica-search', params: $component.DebtorAnagraficaModel }">
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

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Indirizzo</label>
                            <input placeholder="opzionale" type="text" class="form-control" data-bind="value: Dbtr.Indirizzo.Via">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Stato</label>
                            <select class="form-control" data-bind="options: $component.Nazioni, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: Dbtr.Indirizzo.Nazione"><option value="">opzionale</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antartide</option><option value="AG">Antigua e Barbuda</option><option value="SA">Arabia Saudita</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaigian</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BE">Belgio</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BY">Bielorussia</option><option value="MM">Birmania</option><option value="BO">Bolivia</option><option value="BA">Bosnia ed Erzegovina</option><option value="BW">Botswana</option><option value="BR">Brasile</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambogia</option><option value="CM">Camerun</option><option value="CA">Canada</option><option value="CV">Capo Verde</option><option value="TD">Ciad</option><option value="CL">Cile</option><option value="CN">Cina</option><option value="CY">Cipro</option><option value="VA">Città del Vaticano</option><option value="CO">Colombia</option><option value="KP">Corea del Nord</option><option value="KR">Corea del Sud</option><option value="CR">Costa Rica</option><option value="CI">Costa d'Avorio</option><option value="HR">Croazia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="DK">Danimarca</option><option value="DM">Dominica</option><option value="AE">Dubai</option><option value="EC">Ecuador</option><option value="EG">Egitto</option><option value="SV">El Salvador</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Etiopia</option><option value="FJ">Figi</option><option value="PH">Filippine</option><option value="FI">Finlandia</option><option value="FR">Francia</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="GS">Georgia del Sud e isole Sandwich meridionali</option><option value="DE">Germania</option><option value="GH">Ghana</option><option value="JM">Giamaica</option><option value="JP">Giappone</option><option value="GI">Gibilterra</option><option value="DJ">Gibuti</option><option value="JO">Giordania</option><option value="GR">Grecia</option><option value="GD">Grenada</option><option value="GL">Groenlandia</option><option value="GP">Guadalupa</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GQ">Guinea Equatoriale</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="GF">Guyana Francese</option><option value="HT">Haiti</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Irlanda</option><option value="IS">Islanda</option><option value="BV">Isola Bouvet</option><option value="NF">Isola Norfolk</option><option value="CX">Isola del Natale (Christmas Island)</option><option value="IM">Isola di Man</option><option value="BQ">Isole BES</option><option value="KY">Isole Cayman</option><option value="CC">Isole Cocos e Keeling</option><option value="KM">Isole Comore</option><option value="CK">Isole Cook</option><option value="FO">Isole Faer Oer</option><option value="FK">Isole Falkland</option><option value="HM">Isole Heard e McDonald</option><option value="MP">Isole Marianne Settentrionali</option><option value="MH">Isole Marshall</option><option value="PN">Isole Pitcairn</option><option value="SB">Isole Salomone</option><option value="TC">Isole Turks e Caicos</option><option value="VI">Isole Vergini Americane</option><option value="VG">Isole Vergini Britanniche</option><option value="UM">Isole minori esterne degli Stati Uniti</option><option value="AX">Isole Åland</option><option value="IL">Israele</option><option value="IT">Italia</option><option value="JE">Jersey</option><option value="KZ">Kazakistan</option><option value="KE">Kenya</option><option value="KG">Kirghizistan</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="LA">Laos</option><option value="LS">Lesotho</option><option value="LV">Lettonia</option><option value="LB">Libano</option><option value="LR">Liberia</option><option value="LY">Libia</option><option value="LI">Liechtenstein</option><option value="LT">Lituania</option><option value="LU">Lussemburgo</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MV">Maldive</option><option value="MY">Malesia</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MA">Marocco</option><option value="MQ">Martinica</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Messico</option><option value="MD">Moldavia</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MZ">Mozambico</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NO">Norvegia</option><option value="NC">Nuova Caledonia</option><option value="NZ">Nuova Zelanda</option><option value="OM">Oman</option><option value="NL">Paesi Bassi</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua Nuova Guinea</option><option value="PY">Paraguay</option><option value="PE">Perù</option><option value="PF">Polinesia Francese</option><option value="PL">Polonia</option><option value="PR">Porto Rico</option><option value="PT">Portogallo</option><option value="QA">Qatar</option><option value="GB">Regno Unito</option><option value="CZ">Repubblica Ceca</option><option value="CF">Repubblica Centrafricana</option><option value="CD">Repubblica Democratica del Congo</option><option value="CD">Repubblica Democratica del Congo</option><option value="DO">Repubblica Dominicana</option><option value="CG">Repubblica del Congo</option><option value="TW">Repubblica di Cina (Taiwan)</option><option value="RO">Romania</option><option value="RW">Ruanda</option><option value="RU">Russia</option><option value="RE">Réunion</option><option value="EH">Sahara Occidentale</option><option value="KN">Saint Kitts e Nevis</option><option value="PM">Saint Pierre e Miquelon</option><option value="VC">Saint Vincent e Grenadine</option><option value="BL">Saint-Barthélemy</option><option value="MF">Saint-Martin</option><option value="WS">Samoa</option><option value="AS">Samoa Americane</option><option value="SM">San Marino</option><option value="SH">Sant'Elena</option><option value="LC">Santa Lucia</option><option value="ST">Sao Tomé e Principe</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SY">Siria</option><option value="SK">Slovacchia</option><option value="SI">Slovenia</option><option value="SO">Somalia</option><option value="ES">Spagna</option><option value="LK">Sri Lanka</option><option value="FM">Stati Federati di Micronesia</option><option value="US">Stati Uniti d'America</option><option value="PS">Stato di Palestina</option><option value="ZA">Sudafrica</option><option value="SD">Sudan</option><option value="SS">Sudan del Sud</option><option value="SR">Suriname</option><option value="SJ">Svalbard e Jan Mayen</option><option value="SE">Svezia</option><option value="CH">Svizzera</option><option value="SZ">Swaziland</option><option value="TJ">Tagikistan</option><option value="TZ">Tanzania</option><option value="IO">Territori Britannici dell'Oceano Indiano</option><option value="TF">Territori Francesi del Sud</option><option value="TH">Thailandia</option><option value="TL">Timor Est</option><option value="TL">Timor Est</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad e Tobago</option><option value="TN">Tunisia</option><option value="TR">Turchia</option><option value="TM">Turkmenistan</option><option value="TV">Tuvalu</option><option value="UA">Ucraina</option><option value="UG">Uganda</option><option value="HU">Ungheria</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis e Futuna</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">IBAN</label>
                            <input type="text" class="form-control" data-bind="uppercaseText: Dbtr.Iban">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">BIC</label>
                            <input placeholder="opzionale" type="text" class="form-control" data-bind="uppercaseText: Dbtr.Bic">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">C.F./P.I. debitore</label>
                            <input placeholder="opzionale" type="text" class="form-control" data-bind="uppercaseText: Dbtr.CodiceFiscale">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Cod. Fisc. sottoscrittore</label>
                            <input type="text" class="form-control" data-bind="uppercaseText: CFSottoscrittore">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label"></label>
                            <div class="form-field link-icon">
                                <span class="link-icon icon-creazioneUtenti link" data-bind="singleClick: $component.ToggleCheckAggiornaAnagrafica">
                                </span>
                                <input type="checkbox" data-bind="checked: $component.AggiornaAnagrafica">
                                <label class="control-label">Aggiorna anagrafica</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI DEBITORE EFFETTIVO-->
        <div class="section">
            <div class="row link" data-bind="click: $component.UltimateDebtorCollapse">
                <h3 class="titleSection">
                    Dati Debitore Effettivo
                </h3>
                <div class="collapse-img-position">
                    <div data-bind="css: $component.UltimateDebtorCollapseCss" class="icon-replace icon-expand active"></div>
                </div>
            </div>
            <div data-bind="slideVisible: $component.UltimateDebtorBodyVisible" style="display: none;">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Ragione sociale</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltmtDbtr.Nm">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                            <label class="control-label"></label>
                            <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.UltimateDebtorAnagraficaSearch">&nbsp;</span>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Codice</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltmtDbtr.Codice">
                        </div>
                    </div>
                </div>
                <div data-bind="component: { name: 'anagrafica-search', params: $component.UltimateDebtorAnagraficaModel }">
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

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Tipo soggetto</label>
                            <select class="form-control" data-bind="options: $component.tipologieSoggetto, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: UltmtDbtr.TipoSoggetto"><option value="">opzionale</option><option value="PF">Persona Fisica</option><option value="PG">Persona Giuridica</option></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Identificativo</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable, value: UltmtDbtr.Id" disabled="">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">BIC</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() &amp;&amp; UltmtDbtr.TipoSoggetto() == 'PG', uppercaseText: UltmtDbtr.Bic" disabled="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding-right: 0; padding-left: 20px">
                            <label class="control-label" style="margin-left: -20px">Codice proprietario</label>
                            <div class="radio" style="font-weight: normal; margin-top: 0">
                                <input type="radio" name="codiceDebitoreIns" value="CodiceProprietarioDebitore" data-bind="enable: $component.UltimateDebitorEnable, checked: $component.CurrentCodiceDebitore" disabled="">
                                <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() &amp;&amp; $component.CodiceProprietarioDebitoreActive(), value: UltmtDbtr.Prtry" disabled="">
                            </div>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                            <label class="control-label" style="margin-left: -20px">Codice</label>
                            <div class="radio" style="font-weight: normal; margin-top: 0">
                                <input type="radio" name="codiceDebitoreIns" value="CodiceDebitore" data-bind="enable: $component.UltimateDebitorEnable, checked: $component.CurrentCodiceDebitore" disabled="">
                                <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() &amp;&amp; $component.CodiceDebitoreActive(), value: UltmtDbtr.Cd" disabled="">
                            </div>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">
                                Comune di nascita
                            </label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() &amp;&amp; UltmtDbtr.TipoSoggetto() == 'PF', value: UltmtDbtr.CityOfBirth" disabled="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Data di nascita</label>
                            <date-picker params="enable: $component.UltimateDebitorPFEnable, Date: UltmtDbtr.BirthDt">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" disabled="" id="ko_unique_16">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Provincia di nascita</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() &amp;&amp; UltmtDbtr.TipoSoggetto() == 'PF', value: UltmtDbtr.PrvcOfBirth" disabled="">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Stato</label>
                            <select class="form-control" data-bind="enable: $component.UltimateDebitorEnable() &amp;&amp; UltmtDbtr.TipoSoggetto() == 'PF', options: $component.Nazioni, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: UltmtDbtr.CtryOfBirth" disabled=""><option value="">opzionale</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antartide</option><option value="AG">Antigua e Barbuda</option><option value="SA">Arabia Saudita</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaigian</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BE">Belgio</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BY">Bielorussia</option><option value="MM">Birmania</option><option value="BO">Bolivia</option><option value="BA">Bosnia ed Erzegovina</option><option value="BW">Botswana</option><option value="BR">Brasile</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambogia</option><option value="CM">Camerun</option><option value="CA">Canada</option><option value="CV">Capo Verde</option><option value="TD">Ciad</option><option value="CL">Cile</option><option value="CN">Cina</option><option value="CY">Cipro</option><option value="VA">Città del Vaticano</option><option value="CO">Colombia</option><option value="KP">Corea del Nord</option><option value="KR">Corea del Sud</option><option value="CR">Costa Rica</option><option value="CI">Costa d'Avorio</option><option value="HR">Croazia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="DK">Danimarca</option><option value="DM">Dominica</option><option value="AE">Dubai</option><option value="EC">Ecuador</option><option value="EG">Egitto</option><option value="SV">El Salvador</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Etiopia</option><option value="FJ">Figi</option><option value="PH">Filippine</option><option value="FI">Finlandia</option><option value="FR">Francia</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="GS">Georgia del Sud e isole Sandwich meridionali</option><option value="DE">Germania</option><option value="GH">Ghana</option><option value="JM">Giamaica</option><option value="JP">Giappone</option><option value="GI">Gibilterra</option><option value="DJ">Gibuti</option><option value="JO">Giordania</option><option value="GR">Grecia</option><option value="GD">Grenada</option><option value="GL">Groenlandia</option><option value="GP">Guadalupa</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GQ">Guinea Equatoriale</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="GF">Guyana Francese</option><option value="HT">Haiti</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Irlanda</option><option value="IS">Islanda</option><option value="BV">Isola Bouvet</option><option value="NF">Isola Norfolk</option><option value="CX">Isola del Natale (Christmas Island)</option><option value="IM">Isola di Man</option><option value="BQ">Isole BES</option><option value="KY">Isole Cayman</option><option value="CC">Isole Cocos e Keeling</option><option value="KM">Isole Comore</option><option value="CK">Isole Cook</option><option value="FO">Isole Faer Oer</option><option value="FK">Isole Falkland</option><option value="HM">Isole Heard e McDonald</option><option value="MP">Isole Marianne Settentrionali</option><option value="MH">Isole Marshall</option><option value="PN">Isole Pitcairn</option><option value="SB">Isole Salomone</option><option value="TC">Isole Turks e Caicos</option><option value="VI">Isole Vergini Americane</option><option value="VG">Isole Vergini Britanniche</option><option value="UM">Isole minori esterne degli Stati Uniti</option><option value="AX">Isole Åland</option><option value="IL">Israele</option><option value="IT">Italia</option><option value="JE">Jersey</option><option value="KZ">Kazakistan</option><option value="KE">Kenya</option><option value="KG">Kirghizistan</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="LA">Laos</option><option value="LS">Lesotho</option><option value="LV">Lettonia</option><option value="LB">Libano</option><option value="LR">Liberia</option><option value="LY">Libia</option><option value="LI">Liechtenstein</option><option value="LT">Lituania</option><option value="LU">Lussemburgo</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MV">Maldive</option><option value="MY">Malesia</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MA">Marocco</option><option value="MQ">Martinica</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Messico</option><option value="MD">Moldavia</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MZ">Mozambico</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NO">Norvegia</option><option value="NC">Nuova Caledonia</option><option value="NZ">Nuova Zelanda</option><option value="OM">Oman</option><option value="NL">Paesi Bassi</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua Nuova Guinea</option><option value="PY">Paraguay</option><option value="PE">Perù</option><option value="PF">Polinesia Francese</option><option value="PL">Polonia</option><option value="PR">Porto Rico</option><option value="PT">Portogallo</option><option value="QA">Qatar</option><option value="GB">Regno Unito</option><option value="CZ">Repubblica Ceca</option><option value="CF">Repubblica Centrafricana</option><option value="CD">Repubblica Democratica del Congo</option><option value="CD">Repubblica Democratica del Congo</option><option value="DO">Repubblica Dominicana</option><option value="CG">Repubblica del Congo</option><option value="TW">Repubblica di Cina (Taiwan)</option><option value="RO">Romania</option><option value="RW">Ruanda</option><option value="RU">Russia</option><option value="RE">Réunion</option><option value="EH">Sahara Occidentale</option><option value="KN">Saint Kitts e Nevis</option><option value="PM">Saint Pierre e Miquelon</option><option value="VC">Saint Vincent e Grenadine</option><option value="BL">Saint-Barthélemy</option><option value="MF">Saint-Martin</option><option value="WS">Samoa</option><option value="AS">Samoa Americane</option><option value="SM">San Marino</option><option value="SH">Sant'Elena</option><option value="LC">Santa Lucia</option><option value="ST">Sao Tomé e Principe</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SY">Siria</option><option value="SK">Slovacchia</option><option value="SI">Slovenia</option><option value="SO">Somalia</option><option value="ES">Spagna</option><option value="LK">Sri Lanka</option><option value="FM">Stati Federati di Micronesia</option><option value="US">Stati Uniti d'America</option><option value="PS">Stato di Palestina</option><option value="ZA">Sudafrica</option><option value="SD">Sudan</option><option value="SS">Sudan del Sud</option><option value="SR">Suriname</option><option value="SJ">Svalbard e Jan Mayen</option><option value="SE">Svezia</option><option value="CH">Svizzera</option><option value="SZ">Swaziland</option><option value="TJ">Tagikistan</option><option value="TZ">Tanzania</option><option value="IO">Territori Britannici dell'Oceano Indiano</option><option value="TF">Territori Francesi del Sud</option><option value="TH">Thailandia</option><option value="TL">Timor Est</option><option value="TL">Timor Est</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad e Tobago</option><option value="TN">Tunisia</option><option value="TR">Turchia</option><option value="TM">Turkmenistan</option><option value="TV">Tuvalu</option><option value="UA">Ucraina</option><option value="UG">Uganda</option><option value="HU">Ungheria</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis e Futuna</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Descrizione</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable, value: UltmtDbtr.Issr" disabled="">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI MANDATO-->
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Mandato
                </h3>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Codice mandato</label>
                            <input type="text" class="form-control no-placeholder-italic" data-bind="value: MndtId">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Data sottoscrizione</label>
                            <date-picker params="Date: DurationFromDate">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_17">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Identificativo mandato</label>
                            <input type="text" class="form-control" data-bind="value: MndtReqId">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Tipo mandato</label>
                            <select class="form-control" data-bind="options: $component.TipiMandato, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: LclInstrmPrtry"><option value="">Seleziona</option><option value="B2BSEDEM">B2BSEDEM - Mandato B2B elettronico</option><option value="B2BSEDPM">B2BSEDPM - Mandato B2B cartaceo</option><option value="COR1SEDEM">COR1SEDEM - Mandato COR1 elettronico</option><option value="COR1SEDPM">COR1SEDPM - Mandato COR1 cartaceo</option><option value="CORSEDEM">CORSEDEM - Mandato CORE elettronico</option><option value="CORSEDPM">CORSEDPM - Mandato CORE cartaceo</option></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Sequenza incasso</label>
                            <select class="form-control" data-bind="options: $component.SequenzaIncassi, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: SeqTp"><option value="">Seleziona</option><option value="OOFF">OOFF – Singola non ripetuta</option><option value="RCUR">RCUR – utilizzata per incassi regolari</option></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">ID documento</label>
                            <input placeholder="opzionale" type="text" class="form-control" data-bind="value: RfrDocNb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</seda-ins>
                </div>

                <div class="row, margin-top10" data-bind="visible: TipoBloccoLogico() == App.Seda.Allineamento.TipoBloccoLogico.UPD" style="">
                    <seda-upd params="disposizione: $data, tipologieSoggetto: $component.tipologieSoggetto, Validation: $component.Validation, Nazioni: $component.Nazioni, CallbackDatiPrecedenti: $component.CallbackDatiPrecedenti, AggiornaAnagrafica: $component.AggiornaAnagrafica, DispoIsNotInDistinta: $component.DispoIsNotInDistinta">
    <div data-bind="with: disposizione.AmdmntReq">
        <div class="row">
            <h3 class="titleSection">
                Dati Aggiuntivi Ordinante
            </h3>
        </div>
        <div class="section">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-sm-3 col-xs-12">
                        <label class="control-label">Identificativo creditore</label>
                        <input type="text" class="form-control" data-bind="uppercaseText: CdtrSchmeId, enable: $component.DispoIsNotInDistinta">
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                    <div class="col-sm-4 col-xs-12">
                        <label class="control-label">BIC</label>
                        <input type="text" class="form-control" data-bind="uppercaseText: CdtrAgt, enable: $component.DispoIsNotInDistinta">
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                    <div class="col-sm-3 col-xs-12" style="padding-left: 0">
                        <label class="control-label">Tipo soggetto</label>
                        <select class="form-control" data-bind="options: $component.tipologieSoggetto, optionsText: 'V', optionsValue: 'K', value: CdtrSchmeTp, enable: $component.DispoIsNotInDistinta"><option value="PF">Persona Fisica</option><option value="PG">Persona Giuridica</option></select>
                    </div>
                </div>
            </div>
        </div>

        <!-- CREDITORE EFFETTIVO -->
        <div class="section">
            <div class="row link" data-bind="click: $component.UltimateCreditorCollapse">
                <h3 class="titleSection">
                    Dati Creditore Effettivo
                </h3>
                <div class="collapse-img-position">
                    <div data-bind="css: $component.UltimateCreditorCollapseCss" class="icon-replace icon-expand active"></div>
                </div>
            </div>
            <div data-bind="slideVisible: $component.UltimateCreditorBodyVisible" style="display: none;">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Ragione sociale</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltmtCdtr.Nm">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                            <label class="control-label"></label>
                            <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.UltimateCreditorAnagraficaSearch">&nbsp;</span>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Codice</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltmtCdtr.Codice">
                        </div>
                    </div>
                </div>
                <div data-bind="component: { name: 'anagrafica-search', params: $component.UltimateCreditorAnagraficaModel }">
    <div data-bind="visible: Visible" class="modal-layer" style="display: none;">
        <div class="modal-container section" data-bind="with: List" style="top: 20%;">
            <div class="riquadro">
                <div class="clearfix">
                    <div class="flag associaUtente">&nbsp;</div>
                    <h1 data-bind="text: $component.Label">Fornitore</h1>
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
                        <span data-bind="text: $component.Label">Fornitore</span>
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

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Tipo soggetto</label>
                            <select class="form-control" data-bind="options: $component.tipologieSoggetto, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: UltmtCdtr.TipoSoggetto"><option value="">opzionale</option><option value="PF">Persona Fisica</option><option value="PG">Persona Giuridica</option></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Identificativo</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable, value: UltmtCdtr.Id" disabled="">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">BIC</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() &amp;&amp; UltmtCdtr.TipoSoggetto() == 'PG', uppercaseText: UltmtCdtr.Bic" disabled="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding-right: 0; padding-left: 20px">
                            <label class="control-label" style="margin-left: -20px">Codice proprietario</label>
                            <div class="radio" style="font-weight: normal; margin-top: 0">
                                <input type="radio" name="codice" value="CodiceProprietario" data-bind="enable: $component.UltimateCreditorEnable, checked: $component.CurrentCodice" disabled="">
                                <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() &amp;&amp; $component.CodiceProprietarioActive(), value: UltmtCdtr.Prtry" disabled="">
                            </div>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                            <label class="control-label" style="margin-left: -20px">Codice</label>
                            <div class="radio" style="font-weight: normal; margin-top: 0">
                                <input type="radio" name="codice" value="Codice" data-bind="enable: $component.UltimateCreditorEnable, checked: $component.CurrentCodice" disabled="">
                                <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() &amp;&amp; $component.CodiceActive(), value: UltmtCdtr.Cd" disabled="">
                            </div>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">
                                Comune nascita
                            </label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() &amp;&amp; UltmtCdtr.TipoSoggetto() == 'PF', value: UltmtCdtr.CityOfBirth" disabled="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding-left: 0">
                            <label class="control-label">Data nascita</label>
                            <date-picker params="enable: $component.UltimateCreditorPFEnable, Date: UltmtCdtr.BirthDt">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" disabled="" id="ko_unique_18">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">
                                Provincia nascita
                            </label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable() &amp;&amp; UltmtCdtr.TipoSoggetto() == 'PF', value: UltmtCdtr.PrvcOfBirth" disabled="">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">
                                Stato
                            </label>
                            <select class="form-control" data-bind="enable: $component.UltimateCreditorEnable() &amp;&amp; UltmtCdtr.TipoSoggetto() == 'PF', options: $component.Nazioni, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: UltmtCdtr.CtryOfBirth" disabled=""><option value="">opzionale</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antartide</option><option value="AG">Antigua e Barbuda</option><option value="SA">Arabia Saudita</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaigian</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BE">Belgio</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BY">Bielorussia</option><option value="MM">Birmania</option><option value="BO">Bolivia</option><option value="BA">Bosnia ed Erzegovina</option><option value="BW">Botswana</option><option value="BR">Brasile</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambogia</option><option value="CM">Camerun</option><option value="CA">Canada</option><option value="CV">Capo Verde</option><option value="TD">Ciad</option><option value="CL">Cile</option><option value="CN">Cina</option><option value="CY">Cipro</option><option value="VA">Città del Vaticano</option><option value="CO">Colombia</option><option value="KP">Corea del Nord</option><option value="KR">Corea del Sud</option><option value="CR">Costa Rica</option><option value="CI">Costa d'Avorio</option><option value="HR">Croazia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="DK">Danimarca</option><option value="DM">Dominica</option><option value="AE">Dubai</option><option value="EC">Ecuador</option><option value="EG">Egitto</option><option value="SV">El Salvador</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Etiopia</option><option value="FJ">Figi</option><option value="PH">Filippine</option><option value="FI">Finlandia</option><option value="FR">Francia</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="GS">Georgia del Sud e isole Sandwich meridionali</option><option value="DE">Germania</option><option value="GH">Ghana</option><option value="JM">Giamaica</option><option value="JP">Giappone</option><option value="GI">Gibilterra</option><option value="DJ">Gibuti</option><option value="JO">Giordania</option><option value="GR">Grecia</option><option value="GD">Grenada</option><option value="GL">Groenlandia</option><option value="GP">Guadalupa</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GQ">Guinea Equatoriale</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="GF">Guyana Francese</option><option value="HT">Haiti</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Irlanda</option><option value="IS">Islanda</option><option value="BV">Isola Bouvet</option><option value="NF">Isola Norfolk</option><option value="CX">Isola del Natale (Christmas Island)</option><option value="IM">Isola di Man</option><option value="BQ">Isole BES</option><option value="KY">Isole Cayman</option><option value="CC">Isole Cocos e Keeling</option><option value="KM">Isole Comore</option><option value="CK">Isole Cook</option><option value="FO">Isole Faer Oer</option><option value="FK">Isole Falkland</option><option value="HM">Isole Heard e McDonald</option><option value="MP">Isole Marianne Settentrionali</option><option value="MH">Isole Marshall</option><option value="PN">Isole Pitcairn</option><option value="SB">Isole Salomone</option><option value="TC">Isole Turks e Caicos</option><option value="VI">Isole Vergini Americane</option><option value="VG">Isole Vergini Britanniche</option><option value="UM">Isole minori esterne degli Stati Uniti</option><option value="AX">Isole Åland</option><option value="IL">Israele</option><option value="IT">Italia</option><option value="JE">Jersey</option><option value="KZ">Kazakistan</option><option value="KE">Kenya</option><option value="KG">Kirghizistan</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="LA">Laos</option><option value="LS">Lesotho</option><option value="LV">Lettonia</option><option value="LB">Libano</option><option value="LR">Liberia</option><option value="LY">Libia</option><option value="LI">Liechtenstein</option><option value="LT">Lituania</option><option value="LU">Lussemburgo</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MV">Maldive</option><option value="MY">Malesia</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MA">Marocco</option><option value="MQ">Martinica</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Messico</option><option value="MD">Moldavia</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MZ">Mozambico</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NO">Norvegia</option><option value="NC">Nuova Caledonia</option><option value="NZ">Nuova Zelanda</option><option value="OM">Oman</option><option value="NL">Paesi Bassi</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua Nuova Guinea</option><option value="PY">Paraguay</option><option value="PE">Perù</option><option value="PF">Polinesia Francese</option><option value="PL">Polonia</option><option value="PR">Porto Rico</option><option value="PT">Portogallo</option><option value="QA">Qatar</option><option value="GB">Regno Unito</option><option value="CZ">Repubblica Ceca</option><option value="CF">Repubblica Centrafricana</option><option value="CD">Repubblica Democratica del Congo</option><option value="CD">Repubblica Democratica del Congo</option><option value="DO">Repubblica Dominicana</option><option value="CG">Repubblica del Congo</option><option value="TW">Repubblica di Cina (Taiwan)</option><option value="RO">Romania</option><option value="RW">Ruanda</option><option value="RU">Russia</option><option value="RE">Réunion</option><option value="EH">Sahara Occidentale</option><option value="KN">Saint Kitts e Nevis</option><option value="PM">Saint Pierre e Miquelon</option><option value="VC">Saint Vincent e Grenadine</option><option value="BL">Saint-Barthélemy</option><option value="MF">Saint-Martin</option><option value="WS">Samoa</option><option value="AS">Samoa Americane</option><option value="SM">San Marino</option><option value="SH">Sant'Elena</option><option value="LC">Santa Lucia</option><option value="ST">Sao Tomé e Principe</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SY">Siria</option><option value="SK">Slovacchia</option><option value="SI">Slovenia</option><option value="SO">Somalia</option><option value="ES">Spagna</option><option value="LK">Sri Lanka</option><option value="FM">Stati Federati di Micronesia</option><option value="US">Stati Uniti d'America</option><option value="PS">Stato di Palestina</option><option value="ZA">Sudafrica</option><option value="SD">Sudan</option><option value="SS">Sudan del Sud</option><option value="SR">Suriname</option><option value="SJ">Svalbard e Jan Mayen</option><option value="SE">Svezia</option><option value="CH">Svizzera</option><option value="SZ">Swaziland</option><option value="TJ">Tagikistan</option><option value="TZ">Tanzania</option><option value="IO">Territori Britannici dell'Oceano Indiano</option><option value="TF">Territori Francesi del Sud</option><option value="TH">Thailandia</option><option value="TL">Timor Est</option><option value="TL">Timor Est</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad e Tobago</option><option value="TN">Tunisia</option><option value="TR">Turchia</option><option value="TM">Turkmenistan</option><option value="TV">Tuvalu</option><option value="UA">Ucraina</option><option value="UG">Uganda</option><option value="HU">Ungheria</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis e Futuna</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Descrizione</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateCreditorEnable, value: UltmtCdtr.Issr" disabled="">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12" style="padding-left: 30px"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI DEBITORE -->
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Debitore
                </h3>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Ragione sociale</label>
                            <input type="text" class="form-control no-placeholder-italic" data-bind="value: Dbtr.Denominazione">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                            <label class="control-label"></label>
                            <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.DebtorAnagraficaSearch">&nbsp;</span>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Codice</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Dbtr.Codice">
                        </div>
                    </div>
                </div>
                <div data-bind="component: { name: 'anagrafica-search', params: $component.DebtorAnagraficaModel }">
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

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Indirizzo</label>
                            <input type="text" placeholder="opzionale" class="form-control" data-bind="value: Dbtr.Indirizzo.Via">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Stato</label>
                            <select class="form-control" data-bind="options: $component.Nazioni, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: Dbtr.Indirizzo.Nazione"><option value="">opzionale</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antartide</option><option value="AG">Antigua e Barbuda</option><option value="SA">Arabia Saudita</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaigian</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BE">Belgio</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BY">Bielorussia</option><option value="MM">Birmania</option><option value="BO">Bolivia</option><option value="BA">Bosnia ed Erzegovina</option><option value="BW">Botswana</option><option value="BR">Brasile</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambogia</option><option value="CM">Camerun</option><option value="CA">Canada</option><option value="CV">Capo Verde</option><option value="TD">Ciad</option><option value="CL">Cile</option><option value="CN">Cina</option><option value="CY">Cipro</option><option value="VA">Città del Vaticano</option><option value="CO">Colombia</option><option value="KP">Corea del Nord</option><option value="KR">Corea del Sud</option><option value="CR">Costa Rica</option><option value="CI">Costa d'Avorio</option><option value="HR">Croazia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="DK">Danimarca</option><option value="DM">Dominica</option><option value="AE">Dubai</option><option value="EC">Ecuador</option><option value="EG">Egitto</option><option value="SV">El Salvador</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Etiopia</option><option value="FJ">Figi</option><option value="PH">Filippine</option><option value="FI">Finlandia</option><option value="FR">Francia</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="GS">Georgia del Sud e isole Sandwich meridionali</option><option value="DE">Germania</option><option value="GH">Ghana</option><option value="JM">Giamaica</option><option value="JP">Giappone</option><option value="GI">Gibilterra</option><option value="DJ">Gibuti</option><option value="JO">Giordania</option><option value="GR">Grecia</option><option value="GD">Grenada</option><option value="GL">Groenlandia</option><option value="GP">Guadalupa</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GQ">Guinea Equatoriale</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="GF">Guyana Francese</option><option value="HT">Haiti</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Irlanda</option><option value="IS">Islanda</option><option value="BV">Isola Bouvet</option><option value="NF">Isola Norfolk</option><option value="CX">Isola del Natale (Christmas Island)</option><option value="IM">Isola di Man</option><option value="BQ">Isole BES</option><option value="KY">Isole Cayman</option><option value="CC">Isole Cocos e Keeling</option><option value="KM">Isole Comore</option><option value="CK">Isole Cook</option><option value="FO">Isole Faer Oer</option><option value="FK">Isole Falkland</option><option value="HM">Isole Heard e McDonald</option><option value="MP">Isole Marianne Settentrionali</option><option value="MH">Isole Marshall</option><option value="PN">Isole Pitcairn</option><option value="SB">Isole Salomone</option><option value="TC">Isole Turks e Caicos</option><option value="VI">Isole Vergini Americane</option><option value="VG">Isole Vergini Britanniche</option><option value="UM">Isole minori esterne degli Stati Uniti</option><option value="AX">Isole Åland</option><option value="IL">Israele</option><option value="IT">Italia</option><option value="JE">Jersey</option><option value="KZ">Kazakistan</option><option value="KE">Kenya</option><option value="KG">Kirghizistan</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="LA">Laos</option><option value="LS">Lesotho</option><option value="LV">Lettonia</option><option value="LB">Libano</option><option value="LR">Liberia</option><option value="LY">Libia</option><option value="LI">Liechtenstein</option><option value="LT">Lituania</option><option value="LU">Lussemburgo</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MV">Maldive</option><option value="MY">Malesia</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MA">Marocco</option><option value="MQ">Martinica</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Messico</option><option value="MD">Moldavia</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MZ">Mozambico</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NO">Norvegia</option><option value="NC">Nuova Caledonia</option><option value="NZ">Nuova Zelanda</option><option value="OM">Oman</option><option value="NL">Paesi Bassi</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua Nuova Guinea</option><option value="PY">Paraguay</option><option value="PE">Perù</option><option value="PF">Polinesia Francese</option><option value="PL">Polonia</option><option value="PR">Porto Rico</option><option value="PT">Portogallo</option><option value="QA">Qatar</option><option value="GB">Regno Unito</option><option value="CZ">Repubblica Ceca</option><option value="CF">Repubblica Centrafricana</option><option value="CD">Repubblica Democratica del Congo</option><option value="CD">Repubblica Democratica del Congo</option><option value="DO">Repubblica Dominicana</option><option value="CG">Repubblica del Congo</option><option value="TW">Repubblica di Cina (Taiwan)</option><option value="RO">Romania</option><option value="RW">Ruanda</option><option value="RU">Russia</option><option value="RE">Réunion</option><option value="EH">Sahara Occidentale</option><option value="KN">Saint Kitts e Nevis</option><option value="PM">Saint Pierre e Miquelon</option><option value="VC">Saint Vincent e Grenadine</option><option value="BL">Saint-Barthélemy</option><option value="MF">Saint-Martin</option><option value="WS">Samoa</option><option value="AS">Samoa Americane</option><option value="SM">San Marino</option><option value="SH">Sant'Elena</option><option value="LC">Santa Lucia</option><option value="ST">Sao Tomé e Principe</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SY">Siria</option><option value="SK">Slovacchia</option><option value="SI">Slovenia</option><option value="SO">Somalia</option><option value="ES">Spagna</option><option value="LK">Sri Lanka</option><option value="FM">Stati Federati di Micronesia</option><option value="US">Stati Uniti d'America</option><option value="PS">Stato di Palestina</option><option value="ZA">Sudafrica</option><option value="SD">Sudan</option><option value="SS">Sudan del Sud</option><option value="SR">Suriname</option><option value="SJ">Svalbard e Jan Mayen</option><option value="SE">Svezia</option><option value="CH">Svizzera</option><option value="SZ">Swaziland</option><option value="TJ">Tagikistan</option><option value="TZ">Tanzania</option><option value="IO">Territori Britannici dell'Oceano Indiano</option><option value="TF">Territori Francesi del Sud</option><option value="TH">Thailandia</option><option value="TL">Timor Est</option><option value="TL">Timor Est</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad e Tobago</option><option value="TN">Tunisia</option><option value="TR">Turchia</option><option value="TM">Turkmenistan</option><option value="TV">Tuvalu</option><option value="UA">Ucraina</option><option value="UG">Uganda</option><option value="HU">Ungheria</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis e Futuna</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">IBAN</label>
                            <input type="text" class="form-control" data-bind="uppercaseText: Dbtr.Iban">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">BIC</label>
                            <input placeholder="opzionale" type="text" class="form-control" data-bind="uppercaseText: Dbtr.Bic">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">C.F./P.I. debitore</label>
                            <input placeholder="opzionale" type="text" class="form-control" data-bind="uppercaseText: Dbtr.CodiceFiscale">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Cod. Fisc. sottoscrittore</label>
                            <input type="text" class="form-control" data-bind="uppercaseText: CFSottoscrittore">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label"></label>
                            <div class="form-field link-icon">
                                <span class="link-icon icon-creazioneUtenti link" data-bind="singleClick: $component.ToggleCheckAggiornaAnagrafica">
                                </span>
                                <input type="checkbox" data-bind="checked: $component.AggiornaAnagrafica">
                                <label class="control-label">Aggiorna anagrafica</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI DEBITORE EFFETTIVO-->
        <div class="section">
            <div class="row link" data-bind="click: $component.UltimateDebtorCollapse">
                <h3 class="titleSection">
                    Dati Debitore Effettivo
                </h3>
                <div class="collapse-img-position">
                    <div data-bind="css: $component.UltimateDebtorCollapseCss" class="icon-replace icon-expand active"></div>
                </div>
            </div>
            <div data-bind="slideVisible: $component.UltimateDebtorBodyVisible" style="display: none;">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Ragione sociale</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltmtDbtr.Nm">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                            <label class="control-label"></label>
                            <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.UltimateDebtorAnagraficaSearch">&nbsp;</span>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Codice</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltmtDbtr.Codice">
                        </div>
                    </div>
                </div>
                <div data-bind="component: { name: 'anagrafica-search', params: $component.UltimateDebtorAnagraficaModel }">
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

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Tipo soggetto</label>
                            <select class="form-control" data-bind="options: $component.tipologieSoggetto, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: UltmtDbtr.TipoSoggetto"><option value="">opzionale</option><option value="PF">Persona Fisica</option><option value="PG">Persona Giuridica</option></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Identificativo</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable, value: UltmtDbtr.Id" disabled="">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">BIC</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() &amp;&amp; UltmtDbtr.TipoSoggetto() == 'PG', uppercaseText: UltmtDbtr.Bic" disabled="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding-right: 0; padding-left: 20px">
                            <label class="control-label" style="margin-left: -20px">Codice proprietario</label>
                            <div class="radio" style="font-weight: normal; margin-top: 0">
                                <input type="radio" name="codiceDebitore" value="CodiceProprietarioDebitore" data-bind="enable: $component.UltimateDebitorEnable, checked: $component.CurrentCodiceDebitore" disabled="">
                                <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() &amp;&amp; $component.CodiceProprietarioDebitoreActive(), value: UltmtDbtr.Prtry" disabled="">
                            </div>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                            <label class="control-label" style="margin-left: -20px">Codice</label>
                            <div class="radio" style="font-weight: normal; margin-top: 0">
                                <input type="radio" name="codiceDebitore" value="CodiceDebitore" data-bind="enable: $component.UltimateDebitorEnable, checked: $component.CurrentCodiceDebitore" disabled="">
                                <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() &amp;&amp; $component.CodiceDebitoreActive(), value: UltmtDbtr.Cd" disabled="">
                            </div>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">
                                Comune di nascita
                            </label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() &amp;&amp; UltmtDbtr.TipoSoggetto() == 'PF', value: UltmtDbtr.CityOfBirth" disabled="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Data di nascita</label>
                            <date-picker params="enable: $component.UltimateDebitorPFEnable, Date: UltmtDbtr.BirthDt">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" disabled="" id="ko_unique_19">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Provincia di nascita</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable() &amp;&amp; UltmtDbtr.TipoSoggetto() == 'PF', value: UltmtDbtr.PrvcOfBirth" disabled="">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Stato</label>
                            <select class="form-control" data-bind="enable: $component.UltimateDebitorEnable() &amp;&amp; UltmtDbtr.TipoSoggetto() == 'PF', options: $component.Nazioni, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: UltmtDbtr.CtryOfBirth" disabled=""><option value="">opzionale</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antartide</option><option value="AG">Antigua e Barbuda</option><option value="SA">Arabia Saudita</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaigian</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BE">Belgio</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BY">Bielorussia</option><option value="MM">Birmania</option><option value="BO">Bolivia</option><option value="BA">Bosnia ed Erzegovina</option><option value="BW">Botswana</option><option value="BR">Brasile</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambogia</option><option value="CM">Camerun</option><option value="CA">Canada</option><option value="CV">Capo Verde</option><option value="TD">Ciad</option><option value="CL">Cile</option><option value="CN">Cina</option><option value="CY">Cipro</option><option value="VA">Città del Vaticano</option><option value="CO">Colombia</option><option value="KP">Corea del Nord</option><option value="KR">Corea del Sud</option><option value="CR">Costa Rica</option><option value="CI">Costa d'Avorio</option><option value="HR">Croazia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="DK">Danimarca</option><option value="DM">Dominica</option><option value="AE">Dubai</option><option value="EC">Ecuador</option><option value="EG">Egitto</option><option value="SV">El Salvador</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Etiopia</option><option value="FJ">Figi</option><option value="PH">Filippine</option><option value="FI">Finlandia</option><option value="FR">Francia</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="GS">Georgia del Sud e isole Sandwich meridionali</option><option value="DE">Germania</option><option value="GH">Ghana</option><option value="JM">Giamaica</option><option value="JP">Giappone</option><option value="GI">Gibilterra</option><option value="DJ">Gibuti</option><option value="JO">Giordania</option><option value="GR">Grecia</option><option value="GD">Grenada</option><option value="GL">Groenlandia</option><option value="GP">Guadalupa</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GQ">Guinea Equatoriale</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="GF">Guyana Francese</option><option value="HT">Haiti</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Irlanda</option><option value="IS">Islanda</option><option value="BV">Isola Bouvet</option><option value="NF">Isola Norfolk</option><option value="CX">Isola del Natale (Christmas Island)</option><option value="IM">Isola di Man</option><option value="BQ">Isole BES</option><option value="KY">Isole Cayman</option><option value="CC">Isole Cocos e Keeling</option><option value="KM">Isole Comore</option><option value="CK">Isole Cook</option><option value="FO">Isole Faer Oer</option><option value="FK">Isole Falkland</option><option value="HM">Isole Heard e McDonald</option><option value="MP">Isole Marianne Settentrionali</option><option value="MH">Isole Marshall</option><option value="PN">Isole Pitcairn</option><option value="SB">Isole Salomone</option><option value="TC">Isole Turks e Caicos</option><option value="VI">Isole Vergini Americane</option><option value="VG">Isole Vergini Britanniche</option><option value="UM">Isole minori esterne degli Stati Uniti</option><option value="AX">Isole Åland</option><option value="IL">Israele</option><option value="IT">Italia</option><option value="JE">Jersey</option><option value="KZ">Kazakistan</option><option value="KE">Kenya</option><option value="KG">Kirghizistan</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="LA">Laos</option><option value="LS">Lesotho</option><option value="LV">Lettonia</option><option value="LB">Libano</option><option value="LR">Liberia</option><option value="LY">Libia</option><option value="LI">Liechtenstein</option><option value="LT">Lituania</option><option value="LU">Lussemburgo</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MV">Maldive</option><option value="MY">Malesia</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MA">Marocco</option><option value="MQ">Martinica</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Messico</option><option value="MD">Moldavia</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MZ">Mozambico</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NO">Norvegia</option><option value="NC">Nuova Caledonia</option><option value="NZ">Nuova Zelanda</option><option value="OM">Oman</option><option value="NL">Paesi Bassi</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua Nuova Guinea</option><option value="PY">Paraguay</option><option value="PE">Perù</option><option value="PF">Polinesia Francese</option><option value="PL">Polonia</option><option value="PR">Porto Rico</option><option value="PT">Portogallo</option><option value="QA">Qatar</option><option value="GB">Regno Unito</option><option value="CZ">Repubblica Ceca</option><option value="CF">Repubblica Centrafricana</option><option value="CD">Repubblica Democratica del Congo</option><option value="CD">Repubblica Democratica del Congo</option><option value="DO">Repubblica Dominicana</option><option value="CG">Repubblica del Congo</option><option value="TW">Repubblica di Cina (Taiwan)</option><option value="RO">Romania</option><option value="RW">Ruanda</option><option value="RU">Russia</option><option value="RE">Réunion</option><option value="EH">Sahara Occidentale</option><option value="KN">Saint Kitts e Nevis</option><option value="PM">Saint Pierre e Miquelon</option><option value="VC">Saint Vincent e Grenadine</option><option value="BL">Saint-Barthélemy</option><option value="MF">Saint-Martin</option><option value="WS">Samoa</option><option value="AS">Samoa Americane</option><option value="SM">San Marino</option><option value="SH">Sant'Elena</option><option value="LC">Santa Lucia</option><option value="ST">Sao Tomé e Principe</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SY">Siria</option><option value="SK">Slovacchia</option><option value="SI">Slovenia</option><option value="SO">Somalia</option><option value="ES">Spagna</option><option value="LK">Sri Lanka</option><option value="FM">Stati Federati di Micronesia</option><option value="US">Stati Uniti d'America</option><option value="PS">Stato di Palestina</option><option value="ZA">Sudafrica</option><option value="SD">Sudan</option><option value="SS">Sudan del Sud</option><option value="SR">Suriname</option><option value="SJ">Svalbard e Jan Mayen</option><option value="SE">Svezia</option><option value="CH">Svizzera</option><option value="SZ">Swaziland</option><option value="TJ">Tagikistan</option><option value="TZ">Tanzania</option><option value="IO">Territori Britannici dell'Oceano Indiano</option><option value="TF">Territori Francesi del Sud</option><option value="TH">Thailandia</option><option value="TL">Timor Est</option><option value="TL">Timor Est</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad e Tobago</option><option value="TN">Tunisia</option><option value="TR">Turchia</option><option value="TM">Turkmenistan</option><option value="TV">Tuvalu</option><option value="UA">Ucraina</option><option value="UG">Uganda</option><option value="HU">Ungheria</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis e Futuna</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Descrizione</label>
                            <input type="text" class="form-control" data-bind="enable: $component.UltimateDebitorEnable, value: UltmtDbtr.Issr" disabled="">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI MANDATO-->
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Mandato
                </h3>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Codice mandato</label>
                            <input type="text" class="form-control no-placeholder-italic" data-bind="value: MndtId">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Data sottoscrizione</label>
                            <date-picker params="Date: DurationFromDate">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_20">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Identificativo mandato</label>
                            <input type="text" class="form-control" data-bind="value: MndtReqId">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Tipo mandato</label>
                            <select class="form-control" data-bind="options: $component.TipiMandato, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: LclInstrmPrtry"><option value="">Seleziona</option><option value="B2BSEDEM">B2BSEDEM - Mandato B2B elettronico</option><option value="B2BSEDPM">B2BSEDPM - Mandato B2B cartaceo</option><option value="COR1SEDEM">COR1SEDEM - Mandato COR1 elettronico</option><option value="COR1SEDPM">COR1SEDPM - Mandato COR1 cartaceo</option><option value="CORSEDEM">CORSEDEM - Mandato CORE elettronico</option><option value="CORSEDPM">CORSEDPM - Mandato CORE cartaceo</option></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Sequenza incasso</label>
                            <select class="form-control" data-bind="options: $component.SequenzeIncasso, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: SeqTp"><option value="">Seleziona</option><option value="OOFF">OOFF – Singola non ripetuta</option><option value="RCUR">RCUR – utilizzata per incassi regolari</option></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI MANDATO ORIGINARIO -->
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Per Modifica Mandato Originario
                </h3>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Richiesta modifica</label>
                            <select class="form-control" data-bind="options: $component.TipiRichiesta, optionsText: 'V', optionsValue: 'K', value: RsnCd"><option value="MD16">MD16 - Modif. richiesta dal Pagatore</option><option value="MD17">MD17 - Modif. richiesta dal Benficiario</option><option value="MD18">MD18 - Modif. richiesta da entrambi</option></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Domiciliazione mandato</label>
                            <select class="form-control" data-bind="options: $component.DomiciliazioniMandato, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: SvcLvlPrtry"><option value="">Seleziona</option><option value="CMF">CMF - Mandato Rilasciato dal Creditore</option><option value="DMF">DMF - Mandato Rilasciato dal Debitore</option></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Tipo soggetto</label>
                            <select class="form-control" data-bind="options: $component.tipologieSoggetto, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: OrgnlCdtrSchmeTp"><option value="">opzionale</option><option value="PF">Persona Fisica</option><option value="PG">Persona Giuridica</option></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Identificativo creditore originario</label>
                            <input type="text" class="form-control" data-bind="value: OrgnlCdtrSchmeId, enable: $component.OrgnlCdtrSchmeIdEnable" disabled="">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Codice mandato originario</label>
                            <input type="text" class="form-control" data-bind="value: OrgnlMndtId">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Creditore originario</label>
                            <input type="text" class="form-control" data-bind="value: OrgnlCdtrNm">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Descrizione</label>
                            <input placeholder="opzionale" type="text" class="form-control" data-bind="value: OrgnlCdtrSchmeIssr, enable: $component.OrgnlCdtrSchmeIssrEnable" disabled="">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</seda-upd>
                </div>

                <div class="row, margin-top10" data-bind="visible: TipoBloccoLogico() == App.Seda.Allineamento.TipoBloccoLogico.DEL" style="display: none;">
                    <seda-canc params="disposizione: $data, tipologieSoggetto: $component.tipologieSoggetto, Validation: $component.Validation, Nazioni: $component.Nazioni, CallbackDatiPrecedenti: $component.CallbackDatiPrecedenti, DispoIsNotInDistinta: $component.DispoIsNotInDistinta">
    <div data-bind="with: disposizione.CxlReq">
        <div class="row">
            <h3 class="titleSection">
                Dati Aggiuntivi Ordinante
            </h3>
        </div>
        <div class="section">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-sm-3 col-xs-12">
                        <label class="control-label">Identificativo creditore</label>
                        <input type="text" class="form-control" data-bind="uppercaseText: OrgnlCdtrSchmeId, enable: $component.DispoIsNotInDistinta">
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                    <div class="col-sm-4 col-xs-12">
                        <label class="control-label">BIC</label>
                        <input type="text" class="form-control" data-bind="uppercaseText: OrgnlCdtrAgt, enable: $component.DispoIsNotInDistinta">
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                    <div class="col-sm-3 col-xs-12" style="padding-left: 0">
                        <label class="control-label">Tipo soggetto</label>
                        <select class="form-control" data-bind="options: $component.tipologieSoggetto, optionsText: 'V', optionsValue: 'K', value: OrgnlCdtrSchmeTp, enable: $component.DispoIsNotInDistinta"><option value="PF">Persona Fisica</option><option value="PG">Persona Giuridica</option></select>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI DEBITORE -->
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Debitore
                </h3>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Ragione sociale</label>
                            <input type="text" class="form-control no-placeholder-italic" data-bind="value: OrgnlDbtr.Denominazione">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                            <label class="control-label"></label>
                            <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.DebtorAnagraficaSearch">&nbsp;</span>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Codice</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: OrgnlDbtr.Codice">
                        </div>
                    </div>
                </div>
                <div data-bind="component: { name: 'anagrafica-search', params: $component.DebtorAnagraficaModel }">
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

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">IBAN</label>
                            <input type="text" class="form-control" data-bind="uppercaseText: OrgnlDbtr.Iban">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">BIC</label>
                            <input placeholder="opzionale" type="text" class="form-control" data-bind="uppercaseText: OrgnlDbtr.Bic">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI MANDATO-->
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Mandato Originario
                </h3>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Codice mandato</label>
                            <input type="text" class="form-control no-placeholder-italic" data-bind="value: OrgnlMndtId">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Data sottoscrizione</label>
                            <date-picker params="Date: OrgnlDurationFromDate">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_21">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Identificativo mandato</label>
                            <input type="text" class="form-control" data-bind="value: OrgnlMndtReqId">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Tipo mandato</label>
                            <select class="form-control" data-bind="options: $component.TipiMandato, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: OrgnlLclInstrmPrtry"><option value="">Seleziona</option><option value="B2BSEDEM">B2BSEDEM - Mandato B2B elettronico</option><option value="B2BSEDPM">B2BSEDPM - Mandato B2B cartaceo</option><option value="COR1SEDEM">COR1SEDEM - Mandato COR1 elettronico</option><option value="COR1SEDPM">COR1SEDPM - Mandato COR1 cartaceo</option><option value="CORSEDEM">CORSEDEM - Mandato CORE elettronico</option><option value="CORSEDPM">CORSEDPM - Mandato CORE cartaceo</option></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Sequenza incasso</label>
                            <select class="form-control" data-bind="options: $component.SequenzaIncassi, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: OrgnlSeqTp"><option value="">opzionale</option><option value="OOFF">OOFF – Singola non ripetuta</option><option value="RCUR">RCUR – utilizzata per incassi regolari</option></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Domiciliazione mandato</label>
                            <select class="form-control" data-bind="options: $component.DomiciliazioniMandato, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: OrgnlSvcLvlPrtry"><option value="">Seleziona</option><option value="CMF">CMF - Mandato Rilasciato dal Creditore</option><option value="DMF">DMF - Mandato Rilasciato dal Debitore</option></select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</seda-canc>
                </div>

                <div class="row, margin-top10" data-bind="visible: TipoBloccoLogico() == App.Seda.Allineamento.TipoBloccoLogico.ACPT" style="display: none;">
                    <seda-acpt params="disposizione: $data, tipologieSoggetto: $component.tipologieSoggetto, Validation: $component.Validation, Nazioni: $component.Nazioni, CallbackDatiPrecedenti: $component.CallbackDatiPrecedenti, AggiornaAnagrafica: $component.AggiornaAnagrafica, DispoIsNotInDistinta: $component.DispoIsNotInDistinta">
    <div data-bind="with: disposizione.AccptncRpt">
        <div class="row">
            <h3 class="titleSection">
                Dati Aggiuntivi Ordinante
            </h3>
        </div>
        <div class="section">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-sm-3 col-xs-12">
                        <label class="control-label">Identificativo creditore</label>
                        <input type="text" class="form-control" data-bind="uppercaseText: OrgnlCdtrSchmeId, enable: $component.DispoIsNotInDistinta">
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                    <div class="col-sm-4 col-xs-12">
                        <label class="control-label">BIC</label>
                        <input type="text" class="form-control" data-bind="uppercaseText: OrgnlCdtrAgt, enable: $component.DispoIsNotInDistinta">
                    </div>
                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                    <div class="col-sm-3 col-xs-12" style="padding-left: 0">
                        <label class="control-label">Tipo soggetto</label>
                        <select class="form-control" data-bind="options: $component.tipologieSoggetto, optionsText: 'V', optionsValue: 'K', value: OrgnlCdtrSchmeTp, enable: $component.DispoIsNotInDistinta"><option value="PF">Persona Fisica</option><option value="PG">Persona Giuridica</option></select>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI DEBITORE -->
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Debitore
                </h3>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Ragione sociale</label>
                            <input type="text" class="form-control no-placeholder-italic" data-bind="value: OrgnlDbtr.Denominazione">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                            <label class="control-label"></label>
                            <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.DebtorAnagraficaSearch">&nbsp;</span>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Codice</label>
                            <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: OrgnlDbtr.Codice">
                        </div>
                    </div>
                </div>
                <div data-bind="component: { name: 'anagrafica-search', params: $component.DebtorAnagraficaModel }">
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

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Indirizzo</label>
                            <input type="text" placeholder="opzionale" class="form-control" data-bind="value: OrgnlDbtr.Indirizzo.Via">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Stato</label>
                            <select class="form-control" data-bind="options: $component.Nazioni, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: OrgnlDbtr.Indirizzo.Nazione"><option value="">opzionale</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antartide</option><option value="AG">Antigua e Barbuda</option><option value="SA">Arabia Saudita</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaigian</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BE">Belgio</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BY">Bielorussia</option><option value="MM">Birmania</option><option value="BO">Bolivia</option><option value="BA">Bosnia ed Erzegovina</option><option value="BW">Botswana</option><option value="BR">Brasile</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambogia</option><option value="CM">Camerun</option><option value="CA">Canada</option><option value="CV">Capo Verde</option><option value="TD">Ciad</option><option value="CL">Cile</option><option value="CN">Cina</option><option value="CY">Cipro</option><option value="VA">Città del Vaticano</option><option value="CO">Colombia</option><option value="KP">Corea del Nord</option><option value="KR">Corea del Sud</option><option value="CR">Costa Rica</option><option value="CI">Costa d'Avorio</option><option value="HR">Croazia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="DK">Danimarca</option><option value="DM">Dominica</option><option value="AE">Dubai</option><option value="EC">Ecuador</option><option value="EG">Egitto</option><option value="SV">El Salvador</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Etiopia</option><option value="FJ">Figi</option><option value="PH">Filippine</option><option value="FI">Finlandia</option><option value="FR">Francia</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="GS">Georgia del Sud e isole Sandwich meridionali</option><option value="DE">Germania</option><option value="GH">Ghana</option><option value="JM">Giamaica</option><option value="JP">Giappone</option><option value="GI">Gibilterra</option><option value="DJ">Gibuti</option><option value="JO">Giordania</option><option value="GR">Grecia</option><option value="GD">Grenada</option><option value="GL">Groenlandia</option><option value="GP">Guadalupa</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GQ">Guinea Equatoriale</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="GF">Guyana Francese</option><option value="HT">Haiti</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Irlanda</option><option value="IS">Islanda</option><option value="BV">Isola Bouvet</option><option value="NF">Isola Norfolk</option><option value="CX">Isola del Natale (Christmas Island)</option><option value="IM">Isola di Man</option><option value="BQ">Isole BES</option><option value="KY">Isole Cayman</option><option value="CC">Isole Cocos e Keeling</option><option value="KM">Isole Comore</option><option value="CK">Isole Cook</option><option value="FO">Isole Faer Oer</option><option value="FK">Isole Falkland</option><option value="HM">Isole Heard e McDonald</option><option value="MP">Isole Marianne Settentrionali</option><option value="MH">Isole Marshall</option><option value="PN">Isole Pitcairn</option><option value="SB">Isole Salomone</option><option value="TC">Isole Turks e Caicos</option><option value="VI">Isole Vergini Americane</option><option value="VG">Isole Vergini Britanniche</option><option value="UM">Isole minori esterne degli Stati Uniti</option><option value="AX">Isole Åland</option><option value="IL">Israele</option><option value="IT">Italia</option><option value="JE">Jersey</option><option value="KZ">Kazakistan</option><option value="KE">Kenya</option><option value="KG">Kirghizistan</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="LA">Laos</option><option value="LS">Lesotho</option><option value="LV">Lettonia</option><option value="LB">Libano</option><option value="LR">Liberia</option><option value="LY">Libia</option><option value="LI">Liechtenstein</option><option value="LT">Lituania</option><option value="LU">Lussemburgo</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MV">Maldive</option><option value="MY">Malesia</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MA">Marocco</option><option value="MQ">Martinica</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Messico</option><option value="MD">Moldavia</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MZ">Mozambico</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NO">Norvegia</option><option value="NC">Nuova Caledonia</option><option value="NZ">Nuova Zelanda</option><option value="OM">Oman</option><option value="NL">Paesi Bassi</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua Nuova Guinea</option><option value="PY">Paraguay</option><option value="PE">Perù</option><option value="PF">Polinesia Francese</option><option value="PL">Polonia</option><option value="PR">Porto Rico</option><option value="PT">Portogallo</option><option value="QA">Qatar</option><option value="GB">Regno Unito</option><option value="CZ">Repubblica Ceca</option><option value="CF">Repubblica Centrafricana</option><option value="CD">Repubblica Democratica del Congo</option><option value="CD">Repubblica Democratica del Congo</option><option value="DO">Repubblica Dominicana</option><option value="CG">Repubblica del Congo</option><option value="TW">Repubblica di Cina (Taiwan)</option><option value="RO">Romania</option><option value="RW">Ruanda</option><option value="RU">Russia</option><option value="RE">Réunion</option><option value="EH">Sahara Occidentale</option><option value="KN">Saint Kitts e Nevis</option><option value="PM">Saint Pierre e Miquelon</option><option value="VC">Saint Vincent e Grenadine</option><option value="BL">Saint-Barthélemy</option><option value="MF">Saint-Martin</option><option value="WS">Samoa</option><option value="AS">Samoa Americane</option><option value="SM">San Marino</option><option value="SH">Sant'Elena</option><option value="LC">Santa Lucia</option><option value="ST">Sao Tomé e Principe</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SY">Siria</option><option value="SK">Slovacchia</option><option value="SI">Slovenia</option><option value="SO">Somalia</option><option value="ES">Spagna</option><option value="LK">Sri Lanka</option><option value="FM">Stati Federati di Micronesia</option><option value="US">Stati Uniti d'America</option><option value="PS">Stato di Palestina</option><option value="ZA">Sudafrica</option><option value="SD">Sudan</option><option value="SS">Sudan del Sud</option><option value="SR">Suriname</option><option value="SJ">Svalbard e Jan Mayen</option><option value="SE">Svezia</option><option value="CH">Svizzera</option><option value="SZ">Swaziland</option><option value="TJ">Tagikistan</option><option value="TZ">Tanzania</option><option value="IO">Territori Britannici dell'Oceano Indiano</option><option value="TF">Territori Francesi del Sud</option><option value="TH">Thailandia</option><option value="TL">Timor Est</option><option value="TL">Timor Est</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad e Tobago</option><option value="TN">Tunisia</option><option value="TR">Turchia</option><option value="TM">Turkmenistan</option><option value="TV">Tuvalu</option><option value="UA">Ucraina</option><option value="UG">Uganda</option><option value="HU">Ungheria</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis e Futuna</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">IBAN</label>
                            <input type="text" placeholder="opzionale" class="form-control" data-bind="uppercaseText: OrgnlDbtr.Iban">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">BIC</label>
                            <input type="text" class="form-control" data-bind="uppercaseText: OrgnlDbtr.Bic">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">C.F./P.I. debitore</label>
                            <input type="text" placeholder="opzionale" class="form-control" data-bind="uppercaseText: OrgnlDbtr.CodiceFiscale">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Cod. Fisc. sottoscrittore</label>
                            <input type="text" class="form-control" data-bind="uppercaseText: OrgnlCFSottoscrittore, attr: {placeholder: $component.phOpzionale}" placeholder="opzionale">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12"></div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label"></label>
                            <div class="form-field link-icon">
                                <span class="link-icon icon-creazioneUtenti link" data-bind="singleClick: $component.ToggleCheckAggiornaAnagrafica">
                                </span>
                                <input type="checkbox" data-bind="checked: $component.AggiornaAnagrafica">
                                <label class="control-label">Aggiorna anagrafica</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DATI RISPOSTA MANDATO-->
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Per Risposta Mandato
                </h3>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Identificativo richiesta originaria</label>
                            <input type="text" class="form-control no-placeholder-italic" data-bind="value: OrgnlMsgId">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Tipo richiesta originaria</label>
                            <select class="form-control" data-bind="options: $component.TipiRichiestaOriginaria, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: OrgnlMsgNmId"><option value="">Seleziona</option><option value="PAIN.009">Nuovo Mandato</option><option value="PAIN.010">Modifica Mandato</option><option value="PAIN.011">Cancellazione Mandato</option></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Codice mandato</label>
                            <input type="text" class="form-control" data-bind="value: OrgnlMndtId">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Domiciliazione mandato</label>
                            <select class="form-control" data-bind="options: $component.DomiciliazioniMandato, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: OrgnlSvcLvlPrtry"><option value="">Seleziona</option><option value="CMF">CMF - Mandato Rilasciato dal Creditore</option><option value="DMF">DMF - Mandato Rilasciato dal Debitore</option></select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Identificativo mandato</label>
                            <input type="text" class="form-control" data-bind="value: OrgnlMndtReqId">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Tipo mandato</label>
                            <select class="form-control" data-bind="options: $component.TipiMandato, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: OrgnlLclInstrmPrtry"><option value="">Seleziona</option><option value="B2BSEDEM">B2BSEDEM - Mandato B2B elettronico</option><option value="B2BSEDPM">B2BSEDPM - Mandato B2B cartaceo</option><option value="COR1SEDEM">COR1SEDEM - Mandato COR1 elettronico</option><option value="COR1SEDPM">COR1SEDPM - Mandato COR1 cartaceo</option><option value="CORSEDEM">CORSEDEM - Mandato CORE elettronico</option><option value="CORSEDPM">CORSEDPM - Mandato CORE cartaceo</option></select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-3 col-xs-12" style="padding: 0">
                            <label class="control-label">Esito richiesta</label>
                            <select class="form-control" data-bind="value: $component.Accptd">
                                <option value="N">Rifiutata</option>
                                <option value="S">Accettata</option>
                            </select>
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-4 col-xs-12">
                            <label class="control-label">Codice rifiuto</label>
                            <input type="text" class="form-control" data-bind="enable: false, value: $component.LocalizationCodiceRifiuto()" disabled="">
                        </div>
                        <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                        <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-sm-12 col-xs-12" style="padding: 0">
                            <label class="control-label">Motivazioni aggiuntive</label>
                            <textarea placeholder="opzionale" type="text" class="form-control" data-bind="value: AddtlRjctRsnInf"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</seda-acpt>
                </div>
            </div>
        </div>

        <!-- SUBMIT ACTIONS -->
        <div class="text-right margin-top10">
            <input type="button" class="btn btn-primary" value="Annulla" data-bind="singleClick: Cancel">
            <input type="button" class="btn btn-primary" data-bind="singleClick: Save, value: SaveButtonLabel" value="Inserisci">
        </div>
    </div>
</allineamento-seda-dataentry>
    </div>
</div>

<script type="text/javascript">
    var PIAZZATURA = [{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":812046,"ClasseServizio":0,"Crypt":"/HYUc4QLUtZJp5DaXMjJrV5nLBPI/mbuPnZDFXhXBKdSm+13eWT3i7X9tu5mw5sn/zuJ82Qx7L8y42cqIz2qebX8IHPOEyP/yHREX0vdmZ9JsvXCh4LJ+XymoSDyfkAw82TRbLfDqCMU98caJeF8OQ==","Hash":"CBFD2B5F41F449F0056AF6B1D4097A8E4FD6DD52F93CD3B1C6B5E476C51890D3"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"SEDE DI MODENA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":627308.50,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21402","Id":null,"IdAzienda":"106609","CodiceIban":"IT28J0503412900000000047658","CodiceAbi":"05034","CodiceCab":"12900","CodiceFiliale":"12900","NumeroRapporto":"000000047658","CodiceDivisa":"EUR","Descrizione":"000000047658","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000047658","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"812046","Type":102,"Crypt":"rxa5CB63hvFLfnqY72Ti2NZ+VGXKG5KWtiOZzihHAdYfqCvN9ip2yXQj5B61cfUd","Hash":"6E7FDB76C38D60E838B7CD8C79B23EDB1DE4EB7A9DDF3D9208D790D38C216856"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"tVVRoC5ZfczuE28mrd9C/JYLEu0PLUv8wvBdTvz5fwIXaHhu7c1tbBN2LiOS29th","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}}];
    var PROFILABLE_DISPOSIZIONI = {"TIPO_SOGGETTO":[{"K":"PF","V":"Persona Fisica"},{"K":"PG","V":"Persona Giuridica"}],"TIPO_RICHIESTA":[{"K":"MD16","V":"MD16 - Modif. richiesta dal Pagatore"},{"K":"MD17","V":"MD17 - Modif. richiesta dal Benficiario"},{"K":"MD18","V":"MD18 - Modif. richiesta da entrambi"}],"DOMICILIAZIONE_MANDATO":[{"K":"CMF","V":"CMF - Mandato Rilasciato dal Creditore"},{"K":"DMF","V":"DMF - Mandato Rilasciato dal Debitore"}],"TIPO_RICHIESTA_ORIGINARIA":[{"K":"PAIN.009","V":"Nuovo Mandato"},{"K":"PAIN.010","V":"Modifica Mandato"},{"K":"PAIN.011","V":"Cancellazione Mandato"}],"TIPO_MANDATO":[{"K":"B2BSEDEM","V":"B2BSEDEM - Mandato B2B elettronico"},{"K":"B2BSEDPM","V":"B2BSEDPM - Mandato B2B cartaceo"},{"K":"COR1SEDEM","V":"COR1SEDEM - Mandato COR1 elettronico"},{"K":"COR1SEDPM","V":"COR1SEDPM - Mandato COR1 cartaceo"},{"K":"CORSEDEM","V":"CORSEDEM - Mandato CORE elettronico"},{"K":"CORSEDPM","V":"CORSEDPM - Mandato CORE cartaceo"}],"SEQUENZA_INCASSO_SEDA":[{"K":"OOFF","V":"OOFF – Singola non ripetuta"},{"K":"RCUR","V":"RCUR – utilizzata per incassi regolari"}],"NAZIONE":[{"K":"AF","V":"Afghanistan"},{"K":"AL","V":"Albania"},{"K":"DZ","V":"Algeria"},{"K":"AD","V":"Andorra"},{"K":"AO","V":"Angola"},{"K":"AI","V":"Anguilla"},{"K":"AQ","V":"Antartide"},{"K":"AG","V":"Antigua e Barbuda"},{"K":"SA","V":"Arabia Saudita"},{"K":"AR","V":"Argentina"},{"K":"AM","V":"Armenia"},{"K":"AW","V":"Aruba"},{"K":"AU","V":"Australia"},{"K":"AT","V":"Austria"},{"K":"AZ","V":"Azerbaigian"},{"K":"BS","V":"Bahamas"},{"K":"BH","V":"Bahrain"},{"K":"BD","V":"Bangladesh"},{"K":"BB","V":"Barbados"},{"K":"BE","V":"Belgio"},{"K":"BZ","V":"Belize"},{"K":"BJ","V":"Benin"},{"K":"BM","V":"Bermuda"},{"K":"BT","V":"Bhutan"},{"K":"BY","V":"Bielorussia"},{"K":"MM","V":"Birmania"},{"K":"BO","V":"Bolivia"},{"K":"BA","V":"Bosnia ed Erzegovina"},{"K":"BW","V":"Botswana"},{"K":"BR","V":"Brasile"},{"K":"BN","V":"Brunei"},{"K":"BG","V":"Bulgaria"},{"K":"BF","V":"Burkina Faso"},{"K":"BI","V":"Burundi"},{"K":"KH","V":"Cambogia"},{"K":"CM","V":"Camerun"},{"K":"CA","V":"Canada"},{"K":"CV","V":"Capo Verde"},{"K":"TD","V":"Ciad"},{"K":"CL","V":"Cile"},{"K":"CN","V":"Cina"},{"K":"CY","V":"Cipro"},{"K":"VA","V":"Città del Vaticano"},{"K":"CO","V":"Colombia"},{"K":"KP","V":"Corea del Nord"},{"K":"KR","V":"Corea del Sud"},{"K":"CR","V":"Costa Rica"},{"K":"CI","V":"Costa d'Avorio"},{"K":"HR","V":"Croazia"},{"K":"CU","V":"Cuba"},{"K":"CW","V":"Curaçao"},{"K":"DK","V":"Danimarca"},{"K":"DM","V":"Dominica"},{"K":"AE","V":"Dubai"},{"K":"EC","V":"Ecuador"},{"K":"EG","V":"Egitto"},{"K":"SV","V":"El Salvador"},{"K":"ER","V":"Eritrea"},{"K":"EE","V":"Estonia"},{"K":"ET","V":"Etiopia"},{"K":"FJ","V":"Figi"},{"K":"PH","V":"Filippine"},{"K":"FI","V":"Finlandia"},{"K":"FR","V":"Francia"},{"K":"GA","V":"Gabon"},{"K":"GM","V":"Gambia"},{"K":"GE","V":"Georgia"},{"K":"GS","V":"Georgia del Sud e isole Sandwich meridionali"},{"K":"DE","V":"Germania"},{"K":"GH","V":"Ghana"},{"K":"JM","V":"Giamaica"},{"K":"JP","V":"Giappone"},{"K":"GI","V":"Gibilterra"},{"K":"DJ","V":"Gibuti"},{"K":"JO","V":"Giordania"},{"K":"GR","V":"Grecia"},{"K":"GD","V":"Grenada"},{"K":"GL","V":"Groenlandia"},{"K":"GP","V":"Guadalupa"},{"K":"GU","V":"Guam"},{"K":"GT","V":"Guatemala"},{"K":"GG","V":"Guernsey"},{"K":"GN","V":"Guinea"},{"K":"GQ","V":"Guinea Equatoriale"},{"K":"GW","V":"Guinea-Bissau"},{"K":"GY","V":"Guyana"},{"K":"GF","V":"Guyana Francese"},{"K":"HT","V":"Haiti"},{"K":"HN","V":"Honduras"},{"K":"HK","V":"Hong Kong"},{"K":"IN","V":"India"},{"K":"ID","V":"Indonesia"},{"K":"IR","V":"Iran"},{"K":"IQ","V":"Iraq"},{"K":"IE","V":"Irlanda"},{"K":"IS","V":"Islanda"},{"K":"BV","V":"Isola Bouvet"},{"K":"NF","V":"Isola Norfolk"},{"K":"CX","V":"Isola del Natale (Christmas Island)"},{"K":"IM","V":"Isola di Man"},{"K":"BQ","V":"Isole BES"},{"K":"KY","V":"Isole Cayman"},{"K":"CC","V":"Isole Cocos e Keeling"},{"K":"KM","V":"Isole Comore"},{"K":"CK","V":"Isole Cook"},{"K":"FO","V":"Isole Faer Oer"},{"K":"FK","V":"Isole Falkland"},{"K":"HM","V":"Isole Heard e McDonald"},{"K":"MP","V":"Isole Marianne Settentrionali"},{"K":"MH","V":"Isole Marshall"},{"K":"PN","V":"Isole Pitcairn"},{"K":"SB","V":"Isole Salomone"},{"K":"TC","V":"Isole Turks e Caicos"},{"K":"VI","V":"Isole Vergini Americane"},{"K":"VG","V":"Isole Vergini Britanniche"},{"K":"UM","V":"Isole minori esterne degli Stati Uniti"},{"K":"AX","V":"Isole Åland"},{"K":"IL","V":"Israele"},{"K":"IT","V":"Italia"},{"K":"JE","V":"Jersey"},{"K":"KZ","V":"Kazakistan"},{"K":"KE","V":"Kenya"},{"K":"KG","V":"Kirghizistan"},{"K":"KI","V":"Kiribati"},{"K":"KW","V":"Kuwait"},{"K":"LA","V":"Laos"},{"K":"LS","V":"Lesotho"},{"K":"LV","V":"Lettonia"},{"K":"LB","V":"Libano"},{"K":"LR","V":"Liberia"},{"K":"LY","V":"Libia"},{"K":"LI","V":"Liechtenstein"},{"K":"LT","V":"Lituania"},{"K":"LU","V":"Lussemburgo"},{"K":"MO","V":"Macao"},{"K":"MK","V":"Macedonia"},{"K":"MG","V":"Madagascar"},{"K":"MW","V":"Malawi"},{"K":"MV","V":"Maldive"},{"K":"MY","V":"Malesia"},{"K":"ML","V":"Mali"},{"K":"MT","V":"Malta"},{"K":"MA","V":"Marocco"},{"K":"MQ","V":"Martinica"},{"K":"MR","V":"Mauritania"},{"K":"MU","V":"Mauritius"},{"K":"YT","V":"Mayotte"},{"K":"MX","V":"Messico"},{"K":"MD","V":"Moldavia"},{"K":"MC","V":"Monaco"},{"K":"MN","V":"Mongolia"},{"K":"ME","V":"Montenegro"},{"K":"MS","V":"Montserrat"},{"K":"MZ","V":"Mozambico"},{"K":"NA","V":"Namibia"},{"K":"NR","V":"Nauru"},{"K":"NP","V":"Nepal"},{"K":"NI","V":"Nicaragua"},{"K":"NE","V":"Niger"},{"K":"NG","V":"Nigeria"},{"K":"NU","V":"Niue"},{"K":"NO","V":"Norvegia"},{"K":"NC","V":"Nuova Caledonia"},{"K":"NZ","V":"Nuova Zelanda"},{"K":"OM","V":"Oman"},{"K":"NL","V":"Paesi Bassi"},{"K":"PK","V":"Pakistan"},{"K":"PW","V":"Palau"},{"K":"PA","V":"Panama"},{"K":"PG","V":"Papua Nuova Guinea"},{"K":"PY","V":"Paraguay"},{"K":"PE","V":"Perù"},{"K":"PF","V":"Polinesia Francese"},{"K":"PL","V":"Polonia"},{"K":"PR","V":"Porto Rico"},{"K":"PT","V":"Portogallo"},{"K":"QA","V":"Qatar"},{"K":"GB","V":"Regno Unito"},{"K":"CZ","V":"Repubblica Ceca"},{"K":"CF","V":"Repubblica Centrafricana"},{"K":"CD","V":"Repubblica Democratica del Congo"},{"K":"CD","V":"Repubblica Democratica del Congo"},{"K":"DO","V":"Repubblica Dominicana"},{"K":"CG","V":"Repubblica del Congo"},{"K":"TW","V":"Repubblica di Cina (Taiwan)"},{"K":"RO","V":"Romania"},{"K":"RW","V":"Ruanda"},{"K":"RU","V":"Russia"},{"K":"RE","V":"Réunion"},{"K":"EH","V":"Sahara Occidentale"},{"K":"KN","V":"Saint Kitts e Nevis"},{"K":"PM","V":"Saint Pierre e Miquelon"},{"K":"VC","V":"Saint Vincent e Grenadine"},{"K":"BL","V":"Saint-Barthélemy"},{"K":"MF","V":"Saint-Martin"},{"K":"WS","V":"Samoa"},{"K":"AS","V":"Samoa Americane"},{"K":"SM","V":"San Marino"},{"K":"SH","V":"Sant'Elena"},{"K":"LC","V":"Santa Lucia"},{"K":"ST","V":"Sao Tomé e Principe"},{"K":"SN","V":"Senegal"},{"K":"RS","V":"Serbia"},{"K":"SC","V":"Seychelles"},{"K":"SL","V":"Sierra Leone"},{"K":"SG","V":"Singapore"},{"K":"SX","V":"Sint Maarten"},{"K":"SY","V":"Siria"},{"K":"SK","V":"Slovacchia"},{"K":"SI","V":"Slovenia"},{"K":"SO","V":"Somalia"},{"K":"ES","V":"Spagna"},{"K":"LK","V":"Sri Lanka"},{"K":"FM","V":"Stati Federati di Micronesia"},{"K":"US","V":"Stati Uniti d'America"},{"K":"PS","V":"Stato di Palestina"},{"K":"ZA","V":"Sudafrica"},{"K":"SD","V":"Sudan"},{"K":"SS","V":"Sudan del Sud"},{"K":"SR","V":"Suriname"},{"K":"SJ","V":"Svalbard e Jan Mayen"},{"K":"SE","V":"Svezia"},{"K":"CH","V":"Svizzera"},{"K":"SZ","V":"Swaziland"},{"K":"TJ","V":"Tagikistan"},{"K":"TZ","V":"Tanzania"},{"K":"IO","V":"Territori Britannici dell'Oceano Indiano"},{"K":"TF","V":"Territori Francesi del Sud"},{"K":"TH","V":"Thailandia"},{"K":"TL","V":"Timor Est"},{"K":"TL","V":"Timor Est"},{"K":"TG","V":"Togo"},{"K":"TK","V":"Tokelau"},{"K":"TO","V":"Tonga"},{"K":"TT","V":"Trinidad e Tobago"},{"K":"TN","V":"Tunisia"},{"K":"TR","V":"Turchia"},{"K":"TM","V":"Turkmenistan"},{"K":"TV","V":"Tuvalu"},{"K":"UA","V":"Ucraina"},{"K":"UG","V":"Uganda"},{"K":"HU","V":"Ungheria"},{"K":"UY","V":"Uruguay"},{"K":"UZ","V":"Uzbekistan"},{"K":"VU","V":"Vanuatu"},{"K":"VE","V":"Venezuela"},{"K":"VN","V":"Vietnam"},{"K":"WF","V":"Wallis e Futuna"},{"K":"YE","V":"Yemen"},{"K":"ZM","V":"Zambia"},{"K":"ZW","V":"Zimbabwe"}]};

    var _tipiMandato = ko.observableArray(PROFILABLE_DISPOSIZIONI['TIPO_MANDATO']);
    var _sequenzaIncassi = ko.observableArray(PROFILABLE_DISPOSIZIONI['SEQUENZA_INCASSO_SEDA']);
    var _tipiRichiesta = ko.observableArray(PROFILABLE_DISPOSIZIONI['TIPO_RICHIESTA']);
    var _domiciliazioniMandato = ko.observableArray(PROFILABLE_DISPOSIZIONI['DOMICILIAZIONE_MANDATO']);
    var _tipiRichiestaOriginaria = ko.observableArray(PROFILABLE_DISPOSIZIONI['TIPO_RICHIESTA_ORIGINARIA']);

    var jDisposizione = {"TipoBloccoLogico":0,"InitnReq":null,"AmdmntReq":null,"CxlReq":null,"AccptncRpt":null,"Identifier":{"Id":null,"Version":null,"IdAzienda":null,"IdRapporto":null,"ClasseServizio":31,"Crypt":"lqOh6oCNDI87DIPWdUZWBKZ6VBxrcKp7t9+8Py5EreYn3MOKA88jSXa7usHrFvZV+8M0qoy/WE07HVZ2cfB7v2VgiqpBJr1+hTHW6hr1c5WwMlyd1qVmPiSn30Klzefe","Hash":"AACE8B1E644361D3872A6BABDED918A9C94DE30EE4C42FF95D545C0134C45C70"},"IdentifierDistinta":null,"Ordinante":null,"Importo":null,"Divisa":null,"Position":null};
    var Sections = {
        SELECTION: "#SELECTION",
        DATA_ENTRY: "#DATA_ENTRY",
    };

    var spallaName = "#4db18459497f48dd9aca58e6bd408abc_4";

    // Business ViewModel
    function viewModel(disposizione) {
        var self= this;

        self.CurrentSection = ko.observable();
        self.disposizioneSeda = ko.observable(new App.Seda.Allineamento.DisposizioneSedaBo(disposizione));

        // Init
        self.Init = function () {
            location.hash = Sections.SELECTION;
        };
        self.Init();
    }

    var rootViewModel = new viewModel(jDisposizione);

    $(document).ready(function () {
        ko.applyBindings(rootViewModel, document.getElementById('4db18459497f48dd9aca58e6bd408abc_3'));

        // Route
        var sammy = Sammy('#4db18459497f48dd9aca58e6bd408abc_3', function() {
            this.get(Sections.SELECTION, function () {
                rootViewModel.Init();
                rootViewModel.CurrentSection(Sections.SELECTION);

                App.Core.CleanSpalla(spallaName);

                $.ajax('/anchise2.web/Widget/LinkRapidi')
                .success(function (html) {
                    $(spallaName).append(html);
                });
            });

            this.get(Sections.DATA_ENTRY, function() {
                rootViewModel.CurrentSection(Sections.DATA_ENTRY);
            });
        });
        sammy.run();
    });
</script>




                        </div>