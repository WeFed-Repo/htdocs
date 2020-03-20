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



<script type="text/html" id="eed100d7ffc449bf818f71d07daf62b2_10">
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
        template: { element: 'eed100d7ffc449bf818f71d07daf62b2_10' },
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



<script type="text/html" id="bonifico-dataentry">
    <!-- SUCCESS MESSAGES -->
    <div data-bind="visible: SuccessMessagesVisible">
        <feedback-messages params="Component: SuccessComponent, Buttons: SuccessButtons, CssClass: 'alert', Message: SuccessMessage, PageTitle: $component.FeedbackTitle, TitleCssClass: 'disposizioneBonifico'"></feedback-messages>
    </div>
    <div data-bind="visible: !SuccessMessagesVisible()">
        <div class="riquadro">
            <div>
                <div style="float:left;">
                    <div class="flag disposizioneBonifico">&nbsp;</div>
                    <h1>Bonifici: inserimento</h1>
                </div>
                <div style="float:left;padding-top:13px;">
                    <a class="icon-replace icon-help active link" onclick="javascript: showPopupHelp('/anchise2.web/Widget/Help/GetHelper', 'Chiudi', 'Bonifici', null);">Help On Line</a>
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
                            <div  data-bind="css: $component.DebitoreCollapseCss" />
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
                                    <label class="control-label"></label>
                                    <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.DebitoreEffettivoAnagraficaSearch">&nbsp;</span>
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
                        <h3 class="titleSection">Dati Beneficiario</h3>
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
                                    <label class="control-label">Ragione Sociale</label>
                                    <input type="text" class="form-control" data-bind="value: Beneficiario.Denominazione" />
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0">
                                    <label class="control-label"></label>
                                    <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.BeneficiarioAnagraficaSearch">&nbsp;</span>
                                </div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
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
                        <h3 class="titleSection">Dati Aggiuntivi Beneficiario</h3>
                        <div class="collapse-img-position">
                            <div  data-bind="css: $component.BeneficiarioCollapseCss" />
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
                            <div  data-bind="css: $component.CreditoreCollapseCss" />
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
                                    <label class="control-label">Cognome Nome</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Creditore.Denominazione" />
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                                    <label class="control-label">&nbsp;</label>
                                    <span style="display: block" class="icon-replace icon-search active link" data-bind="singleClick: $component.CreditoreEffettivoAnagraficaSearch">&nbsp;</span>
                                </div>
                                <div class="col-sm-4 col-xs-12">
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
                        <h3 class="titleSection">Dati Bonifico</h3>
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
                                    <label class="control-label">
                                        Tipo Bonifico
                                    </label>
                                    <select class="form-control"
                                            data-bind="options: $component.IsUrgPOptions, optionsText: 'text', optionsValue: 'value', value: IsUrgP, enable: $component.DispoIsNotInDistinta"></select>
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
                            <div  data-bind="css: $component.FinalitaCollapseCss " />
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.FinalitaBodyVisible">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding-right: 0; padding-left: 20px">
                                    <label class="control-label" style="margin-left: -20px">Finalità del pagamento codificata</label>
                                    <div class="radio" style="font-weight: normal; margin-top: 0">
                                        <input type="radio" name="finalita" value="FinalitaCodificata" data-bind="checked: $component.CurrentFinalita" />
                                        <select class="form-control"
                                                data-bind="enable: $component.FinalitaCodificataActive, options: $component.TipologieFinalitaPagamento, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: FinalitaPagamento.Codice"></select>
                                    </div>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                                    <label class="control-label" style="margin-left: -20px">Finalità del pagamento libera</label>
                                    <div class="radio" style="font-weight: normal; margin-top: 0">
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
                        <h3 class="titleSection">Esito Al beneficiario</h3>
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
                            <div  data-bind="css: $component.CvsCollapseCss " />
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
    ko.components.register('bonifico-dataentry', {
        template: { element: 'bonifico-dataentry' },
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
            self.FeedbackTitle = ko.observable('Bonifici: conferma inserimento');
            self.SuccessMessage = ko.observable('Disposizione inserita correttamente.\nPer poter inviare la disposizione è necessario creare la distinta, aggregando le disposizioni');
            self.DispoIsNotInDistinta = ko.observable(true);
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
            self.TipologieAnagrafica = ko.observableArray(PROFILABLE_DISPOSIZIONI['TIPO_ANAGRAFICA']);
            self.TipologieCausaleIso = ko.observableArray(PROFILABLE_DISPOSIZIONI['CAUSALE_ISO']);
            self.TipologieFinalitaPagamento = ko.observableArray(PROFILABLE_DISPOSIZIONI['FINALITA_PAG_ISO']);
            self.ModalitaEsito = ko.observableArray(PROFILABLE_DISPOSIZIONI['MODALITA_ESITO']);
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
            self.SuccessButtons = ko.observableArray([]);

            self.EsitoAlBeneficiarioModalitaEnable = ko.observable(true);

            self.IsUrgPOptions = [{
                text: 'Ordinario',
                value: false
            }, {
                text: 'Urgente',
                value: true
            }];
            var getDescrizioniBanca = function () {

                self.Bonifico().Beneficiario.Iban(self.Bonifico().Beneficiario.Iban().toUpperCase());

                ko.postbox.publish('disposizione-sct-summary.INITIALIZE');
            };

            self.DebitoreEffettivoAnagraficaModel = {
                Label: 'Cliente',
                IdentifierPiazzatura: ko.observable(self.Bonifico().Ordinante.Identifier),
                Soggetto: self.Bonifico().Debitore,
                TipologiaAnagrafica: ko.observable('CL'),
                Visible: ko.observable(false)
            };
            self.BeneficiarioAnagraficaModel = {
                Label: 'Fornitore',
                IdentifierPiazzatura: ko.observable(self.Bonifico().Ordinante.Identifier),
                Soggetto: self.Bonifico().Beneficiario,
                TipologiaAnagrafica: ko.observable('FO'),
                Visible: ko.observable(false),
                Callback: ko.observable(function (anagrafica) {
                    emailBeneficiario = anagrafica.Email();
                    if (self.Bonifico().Esito.ModalitaEsito() === 'EMAL')
                        self.Bonifico().Esito.Cuc(anagrafica.Email());
                })
            };
            self.CreditoreEffettivoAnagraficaModel = {
                Label: 'Fornitore',
                IdentifierPiazzatura: ko.observable(self.Bonifico().Ordinante.Identifier),
                Soggetto: self.Bonifico().Creditore,
                TipologiaAnagrafica: ko.observable('FO'),
                Visible: ko.observable(false)
            };
            self.SuccessComponent = new App.Core.UiComponent({
                Name: 'disposizione-sct-summary',
                Params: {
                    DisposizioneSct: self.Bonifico
                }
            });

            var initPopolaCampoCucEmail =function () {
                var esito = self.Bonifico().Esito;
                if (esito.ModalitaEsito() === 'EMAL') {
                    esito.Cuc(emailBeneficiario);
                } else {
                    esito.Cuc(null);
                }
            };

            var tipoSoggettoSubscribe = self.Bonifico().Beneficiario.DatiAggiuntivi.TipoSoggetto.subscribe(function () {
                self.VisualizzaDatiAggiuntivi();
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
                    self.Bonifico().CausaleIso('SUPP');
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

            var _createUpdateAjax = function () {
                params.CalledUrl(_urlToSave);
                Http.PostWithTxMon(_urlToSave, ko.toJSON(self.Bonifico))
                    .success(function (data) {
                        var result = new App.Core.StandardJsonResult(data);
                        if (data.HasError) {
                            ko.mapping.fromJS(result.Messages, null, self.Validation);
                            $('body,html').animate({ scrollTop: 0 }, 800);
                        } else {
                            getDescrizioniBanca();

                            _cleanSpalla();
                            $.ajax('/anchise2.web/Widget/LinkRapidi')
                                .success(function (html) {
                                    $(spallaName).append(html);

                                    $.ajax('/anchise2.web/Widget/InfoUtili/BonificoSctDispoCreata')
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
                params.CalledUrl('/anchise2.web/BonificoSct/DataEntry/CheckExtraSEPA');
                //Verifica bonifico area Extra SEPA
                Http.Post('/anchise2.web/BonificoSct/DataEntry/CheckExtraSEPA', ko.toJSON({ iban: self.Bonifico().Beneficiario.Iban }))
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
                    '/anchise2.web/BonificoSct/DataEntry/CreateAndUpdateAnagrafica' :
                    '/anchise2.web/BonificoSct/DataEntry/Create';
                _CheckExtraSEPA();
                
            };

            self.Update = function () {
                _urlToSave = self.AggiornaAnagrafica() ?
                    '/anchise2.web/BonificoSct/DataEntry/UpdateAndUpdateAnagrafica' :
                    '/anchise2.web/BonificoSct/DataEntry/Update';

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
                self.CvsBodyVisible(self.Bonifico().Cvs() != null && self.Bonifico().Cvs().length > 0);
                self.AggiornaAnagrafica(false);
                self.CausaleIsoActive((App.Common.IdentifierIsNotValid(self.Bonifico().Identifier) || self.Bonifico().CausaleLibera() == null));
                self.CausaleLiberaActive(self.Bonifico().CausaleLibera() != null);
                self.CurrentCausale((App.Common.IdentifierIsNotValid(self.Bonifico().Identifier) || self.Bonifico().CausaleLibera() == null) ? 'CausaleIso' : 'CausaleLibera');
                self.FinalitaCodificataActive((App.Common.IdentifierIsNotValid(self.Bonifico().Identifier) || self.Bonifico().FinalitaPagamento.DescrizioneLibera() == null));
                self.FinalitaLiberaActive(self.Bonifico().FinalitaPagamento.DescrizioneLibera() != null);
                self.CurrentFinalita((App.Common.IdentifierIsNotValid(self.Bonifico().Identifier) || self.Bonifico().FinalitaPagamento.DescrizioneLibera() == null) ? 'FinalitaCodificata' : 'FinalitaLibera');
                self.Bonifico().Beneficiario.TipologiaAnagrafica(App.Core.IsNullOrUndefined(self.Bonifico().Beneficiario.TipologiaAnagrafica()) ?
                                                                            'FO' :
                                                                            self.Bonifico().Beneficiario.TipologiaAnagrafica());

                if (self.Bonifico().Identifier.Id() == null) {
                    // **************** DISPOSIZIONE NUOVA ****************
                    if (self.CurrentCausale() == 'CausaleIso') {
                        self.Bonifico().CausaleIso('SUPP');
                    }

                    self.SuccessButtons([
                            new App.Core.UiButton({
                                Label: 'Nuovo Bonifico',
                                Callback: function () {
                                    location.href = '/anchise2.web/BonificoSct/DataEntry';
                                }
                            }),
                            new App.Core.UiButton({
                                Label: 'Nuovo Bonifico con i dati precedenti',
                                Callback: function () {
                                    self.Validation([]);
                                    var bonifico = new App.Sct.DisposizioneSctBo({
                                        Ordinante: { Identifier: self.Bonifico().Ordinante.Identifier },
                                        Identifier: {
                                            Crypt: self.Bonifico().Identifier.Crypt(),
                                            Hash: self.Bonifico().Identifier.Hash(),
                                            ClasseServizio: self.Bonifico().Identifier.ClasseServizio(),
                                        },
                                        Divisa: self.Bonifico().Divisa,
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

                                    location.href = "/anchise2.web/BonificoSct/SearchDisposizioni/IndexFromDataEntry?" + $.param(filtro);
                                }
                            })
                    ]);
                } else {
                    if (self.CryptDistintaSelected != null && self.CryptDistintaSelected.Crypt() != null) {
                        // **************** DISPOSIZIONE IN DISTINTA ****************
                        self.SuccessMessage('Disposizione modificata correttamente.\nPer poter procedere è necessario rigenerare la distinta');
                        self.FeedbackTitle('Bonifici: conferma modifica');
                        self.DispoIsNotInDistinta(false);
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
                        self.FeedbackTitle('Bonifici: conferma modifica');

                        _cleanSpalla();

                        $.ajax('/anchise2.web/Widget/LinkRapidi')
                        .success(function (html) {
                            $(spallaName).append(html);

                            $.ajax('/anchise2.web/Widget/InfoUtili/BonificoSctDataEntry')
                                .success(function (html) {
                                    $(spallaName).append(html);
                                });
                        });

                        getDescrizioniBanca();

                        self.SuccessButtons([
                                new App.Core.UiButton({
                                    Label: 'crea Distinta',
                                    Callback: function () {
                                        window.history.back();
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



<script type="text/html" id="bonifico-summary">
    <div data-bind="with: DisposizioneSct">
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Ordinante
                </h3>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="form-field-resume col-xs-4">
                        <label class="control-label">Conto di addebito:</label>
                        <span class="resume" data-bind="text: Ordinante.Conto"></span>
                    </div>
                    <div class="form-field-resume col-xs-4">
                        <label class="control-label">Intestato a:</label>
                        <span class="resume" data-bind="text: Ordinante.RagioneSociale"></span>
                    </div>
                    <div class="form-field-resume col-xs-4">
                        <label class="control-label">Filiale:</label>
                        <span class="resume"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Beneficiario
                </h3>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="form-field-resume col-xs-4">
                        <label class="control-label">Iban:</label>
                        <span class="resume" data-bind="text: Beneficiario.Iban"></span>
                    </div>
                    <div class="form-field-resume col-xs-4">
                        <label class="control-label">Intestato a:</label>
                        <span class="resume" data-bind="text: Beneficiario.Denominazione"></span>
                    </div>
                    <div class="form-field-resume col-xs-4">
                        <label class="control-label">Banca Beneficiario:</label>
                        <span class="resume" data-bind="text: Beneficiario.Bic"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="row">
                <h3 class="titleSection">
                    Dati Bonifico
                </h3>
            </div>
            <div class="row">
                <div class="form-group col-xs-4">
                    <div class="form-field-resume">
                        <label class="control-label">Importo:</label>
                        <span class="resume" data-bind="numericTextSeparator: Importo"></span>
                    </div>
                    <div class="form-field-resume">
                        <label class="control-label">Commissioni:</label>
                        <span class="resume">0,00</span>
                    </div>
                    <div class="form-field-resume">
                        <label class="control-label">Totale:</label>
                        <span class="resume" data-bind="numericText: Importo"></span>
                    </div>
                </div>
                <div class="form-group col-xs-4">
                    <div class="form-field-resume">
                        <label class="control-label">Data esecuzione:</label>
                        <span class="resume" data-bind="text: App.Core.FormatDate($component.DataEsecuzione())"></span>
                    </div>
                    <div class="form-field-resume">
                        <label class="control-label">Data valuta ordinante:</label>
                        <span class="resume" data-bind="text: App.Core.FormatDate($component.DataEsecuzione())"></span>
                    </div>
                    <div class="form-field-resume">
                        <label class="control-label">Data valuta beneficiario:</label>
                        <span class="resume" data-bind="text: App.Core.FormatDate($component.DataEsecuzione())"></span>
                    </div>
                </div>
                <div class="form-group col-xs-4">
                    <div class="form-field-resume">
                        <label class="control-label">Descrizione riconciliazione</label>
                        <span class="resume" data-bind="text: DescrizioneRiconcilazione"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('bonifico-summary', {
        template: { element: 'bonifico-summary' },
        viewModel: function (params) {
            var self = this;
            self.DisposizioneSct = params.DisposizioneSct;
            self.DataEsecuzione = params.DataEsecuzione || ko.observable(Date.now());
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


<script type="text/html" id="spalla-link-rapidi">
    <div class="riquadro ui-helper-clearfix">
        <div class="flag funzioniRecenti">&nbsp;</div>
        <h1 data-bind="text: Label"></h1>
        <ul class="quick-links">
            <li><a class="link" data-bind="singleClick: OpenDisposizioni">Elenco Disposizioni</a></li>
            <li><a class="link" data-bind="singleClick: OpenDistinte">Elenco Distinte</a></li>
        </ul>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('spalla-link-rapidi', {
        template: { element: 'spalla-link-rapidi' },
        viewModel: function (params) {
            var self = this;

            // Model
            self.Label = params.Label;
            self.Rapporto = params.Rapporto;
            // Action
            self.OpenDisposizioni = function () {
                location.href = "/anchise2.web/BonificoSct/SearchDisposizioni";
            }

            self.OpenDistinte = function () {
                location.href = "/anchise2.web/BonificoSct/SearchDistinte";
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


<script type="text/html" id="eed100d7ffc449bf818f71d07daf62b2_11">
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
                        <div class="col-xs-8 no-padding" style="margin-left:10px">
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
                        <div class="col-xs-8 no-padding" style="margin-left:10px">
                            <strong data-bind="text: Cab"></strong>
                            <!--ko if: Iban() != null-->
                            <span>-</span>
                            <strong data-bind="text: Iban"></strong>
                            <!--/ko-->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="col-xs-3 no-padding">
                            <span>Saldo Contabile</span>
                        </div>
                        <div class="col-xs-9 no-padding" data-bind="style:{ color: $component.Saldo.saldoContabile.Valore() < 0 ? 'red': '#003b79'}">
                            <!--ko if: $component.Saldo.saldoContabile != null-->
                            <strong data-bind="numericTextSeparator: $component.Saldo.saldoContabile.Valore"></strong>&nbsp;<strong data-bind="text: $component.Saldo.saldoContabile.CodiceDivisa"></strong>
                            <!--/ko-->
                            <!--ko if: $component.Saldo.dataContabile != null-->
                            &nbsp;al <strong data-bind="text: $component.Saldo.dataContabile"></strong>
                            <!--/ko-->
                            <!-- ko if: $component.Saldo.saldoContabile.Valore() == null-->
                            <strong data-bind="text: $component.SandoNonDisponibile" style="margin-left:-7px"></strong>
                            <!--/ko-->
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-3 no-padding">
                            <span>Saldo Disponibile</span>
                        </div>
                        <div class="col-xs-8 no-padding" data-bind="style:{ color: $component.Saldo.saldoDisponibile.Valore() < 0 ? 'red': '#003b79'}" style="margin-left:10px">
                            <!--ko if: $component.Saldo.saldoDisponibile != null-->
                            <strong data-bind="numericTextSeparator: $component.Saldo.saldoDisponibile.Valore"></strong>&nbsp;<strong data-bind="text: $component.Saldo.saldoDisponibile.CodiceDivisa"></strong>
                            <!--/ko-->
                            <!-- ko if: $component.Saldo.saldoDisponibile.Valore() == null-->
                            <strong data-bind="text: $component.SandoNonDisponibile" style="margin-left:-5px"></strong>
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
                            <th data-bind="css: ThCss('Saldo.saldoContabile.Valore'), click: SortToggleObservable('Saldo.saldoContabile.Valore')">
                                Saldo Contabile
                            </th>
                            <th data-bind="css: ThCss('Saldo.saldoDisponibile.Valore'), click: SortToggleObservable('Saldo.saldoDisponibile.Valore')">
                                Saldo Disponibile
                            </th>
                        </tr>
                    </thead>
                    <tbody data-bind="foreach: Page">
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto"></td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi" style="text-align:center"></td>
                            <td data-bind="text: Rapporto.CodiceCab" style="text-align:center"></td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban"></td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale"></td>
                            <!--ko if: Saldo != undefined-->
                            <td style="text-align: right">
                                <span data-bind="numericTextSeparator: Saldo.saldoContabile.Valore"></span>&nbsp;<span data-bind="text: Saldo.saldoContabile.CodiceDivisa"></span>
                            </td>
                            <td style="text-align: right">
                                <span data-bind="numericTextSeparator: Saldo.saldoDisponibile.Valore"></span>&nbsp;<span data-bind="text: Saldo.saldoDisponibile.CodiceDivisa"></span>
                            </td>
                            <!--/ko-->
                            <!--ko if: Saldo == undefined-->
                            <td></td>
                            <td></td>
                            <!--/ko-->
                        </tr>
                    </tbody>
                </table>
            </div>

            <paginatore params="PagedList: $data"></paginatore>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('rapporti-selector', {
        template: { element: 'eed100d7ffc449bf818f71d07daf62b2_11' },
        viewModel: function (params) {
            var self = this;

            // Private
            var _computeSelectedOrdinante = function (identifier) {
                if (App.Common.IdentifierIsValid(identifier)) {
                    self.RapportiDataTableVisible(false);
                    var piazzatura = new App.Common.PiazzaturaBo(ko.toJS(ko.utils.arrayFirst(self.PagedList.AllData(), function (p) {
                        var currIdentifier = App.Common.IdentifierIsValid(p.CbiIdentifier) ? p.CbiIdentifier : p.OnlineIdentifier;
                        return App.Common.IdentifiersOrCryptAreEqual(currIdentifier, identifier);
                    })));
                    var currentIdentifier = App.Common.IdentifierIsValid(piazzatura.CbiIdentifier) ? piazzatura.CbiIdentifier : piazzatura.OnlineIdentifier;
                    App.Common.MapIdentifier(piazzatura.Identifier, currentIdentifier);

                    if (App.Common.IdentifierIsValid(piazzatura.Identifier)) {
                        App.Common.MapIdentifier(self.Ordinante.Identifier, piazzatura.Identifier);
                        self.Ordinante.RagioneSociale(piazzatura.Azienda.RagioneSociale());
                        self.Ordinante.Cuc(piazzatura.Azienda.CodiceCuc());
                        self.Ordinante.Sia(piazzatura.Azienda.CodiceSia());
                        self.Ordinante.IdentificativoFiscale(self.Ordinante.IdentificativoFiscale() || null);
                        if (self.Options().ShowIban != false) {
                            self.Ordinante.Conto(piazzatura.Rapporto.NumeroRapporto());
                            self.Ordinante.Iban(piazzatura.Rapporto.CodiceIban());
                        }
                        self.Ordinante.Cab(piazzatura.Rapporto.CodiceCab());
                        self.Ordinante.Abi(piazzatura.Rapporto.CodiceAbi());
                        self.DescrizioneBanca(piazzatura.Rapporto.DescrizioneIstituto());

                        self.Saldo.saldoDisponibile.Valore(piazzatura.Saldo.saldoDisponibile.Valore());
                        self.Saldo.saldoDisponibile.CodiceDivisa(piazzatura.Saldo.saldoDisponibile.CodiceDivisa());

                        self.Saldo.saldoContabile.Valore(piazzatura.Saldo.saldoContabile.Valore());
                        self.Saldo.saldoContabile.CodiceDivisa(piazzatura.Saldo.saldoContabile.CodiceDivisa());

                        self.Saldo.dataContabile = piazzatura.Saldo.dataContabile() ? moment(piazzatura.Saldo.dataContabile()).format("DD/MM/YYYY") : piazzatura.Saldo.dataContabile();

                        ko.postbox.publish("selettore-rapporti.SELECTED", piazzatura);

                        return self.Ordinante;
                    } else if (self.Ordinante != null && self.Ordinante.Abi() !== null && self.Ordinante.Cab() != null && identifier.IdAzienda() != null) {
                        var piazzatura = new App.Common.PiazzaturaBo(ko.toJS(ko.utils.arrayFirst(self.PagedList.AllData(), function (p) {
                            return p.Rapporto.CodiceAbi == self.Ordinante.Abi() && p.Rapporto.CodiceCab == self.Ordinante.Cab() && p.Rapporto.idAzienda == identifier.idAzienda;
                        })));

                        if (App.Common.IdentifierIsValid(piazzatura.Identifier)) {
                            self.Ordinante.RagioneSociale(piazzatura.Azienda.RagioneSociale());
                            self.Ordinante.Cuc(piazzatura.Azienda.CodiceCuc());
                            self.Ordinante.Sia(piazzatura.Azienda.CodiceSia());
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

            self.SandoNonDisponibile = 'N.D.';
            self.Saldo = ko.observable(new App.Common.SaldoBo(null));
            self.Saldo.saldoContabile = new App.Common.SaldoValoreBo();
            self.Saldo.saldoDisponibile = new App.Common.SaldoValoreBo();

            self.PagedList = new App.Core.PagedObservableArray({
                allData: [new App.Common.PiazzaturaBo(null)],
                pageSize: 8,
                pageSizeDropDown: [8, 20, 50, 100],
                currentSort: 'Azienda.RagioneSociale',
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
                _mapIdentifierAndSetOrdinante(App.Common.IdentifierIsValid(item.CbiIdentifier) ? item.CbiIdentifier : item.OnlineIdentifier);
            };

            // Initialize
            self.Init = function (data) {
                var pagedListData = [];
                var unique = {};

                $.map(data, function (p) {
                    var current = new App.Common.PiazzaturaBo(p);
                    if (current.Rapporto.Status() == App.Common.StatoRapporto.ATTIVO || current.Rapporto.Status() == 0) {
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

                self.PagedList.AllData(pagedListData);

                if (pagedListData.length == 0) {
                    self.TestoSelettore = 'Non ci sono rapporti';
                } else if (pagedListData.length == 1) {
                    var piazzatura = pagedListData[0];
                    _mapIdentifierAndSetOrdinante(App.Common.IdentifierIsValid(piazzatura.CbiIdentifier) ? piazzatura.CbiIdentifier : piazzatura.OnlineIdentifier);
                } else if (self.Ordinante != null && App.Common.IdentifierIsValid(self.Ordinante.Identifier) && self.Ordinante.Identifier.IdRapporto() != null) {
                    _mapIdentifierAndSetOrdinante(self.Ordinante.Identifier);
                } else if (self.Ordinante != null && App.Common.IdentifierIsValid(self.Ordinante.Identifier) && self.Ordinante.Identifier.IdRapporto() == null && !self.IsNotInDistina()) {
                    _mapIdentifierAndSetOrdinante(self.Ordinante.Identifier);
                } else if (self.Ordinante != null && App.Common.IdentifierIsValid(self.Ordinante.Identifier) && self.Ordinante.Identifier.IdRapporto() == null && self.IsNotInDistina()) {
                    App.Common.MapIdentifier(self.Ordinante.Identifier, new App.Common.IdentifierBo(null));
                }

                //chiamata alla funzione di sort altrimenti non veniva fatta la prima volta quando carica il selettore.
                self.PagedList.SortToggleObservable('Azienda.RagioneSociale');

            };
            
            ko.postbox.subscribe('selettore-rapporti.INIT', self.Init);
        }
    });
</script>





<div id="eed100d7ffc449bf818f71d07daf62b2_12">
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
            var absolutePath = '/anchise2.web/Contents/00000/it-IT/Images/imageFakeName?v=1980365';

            return absolutePath.replace('imageFakeName', imageRelativePath);
        }

        self.GetPinPadGif = function (secureType) {
            var relativePath = '/pp/dispositivo_' + secureType + '.gif';

            return self.ResourcesPathImage(relativePath);
        }

        // Initialize
        self.Init = function () {
            $('.hide', $('#eed100d7ffc449bf818f71d07daf62b2_12')).removeClass('hide');
        };
    };

    var uiHelper = new UiViewModel();

    $(document).ready(function () {
        ko.applyBindings(uiHelper, document.getElementById('eed100d7ffc449bf818f71d07daf62b2_12'));

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

<script>
    var Resources = {
        InstantPaymentsOtpMessage: {
            'otp_Mismatch'      : "Pin errato",
            'otp_BadCartStatus' : "Stato del carrello errato",
            'otp_BadRequestor'  : "Richiedente errato",
            'otp_Disabled'      : "Disattivato",
            'otp_NextToken'     : "Richiesto next token",
            'otp_Repeated'      : "Passcode usato precedentemente",
            'otp_SystemError'   : "Errore di sistema"
        },
        NoRecord: "Non risulta alcun dato per i parametri di ricerca immessi.",
        SiNo: {
            'true':  "Si",
            'false': "No"
        },
        SiNoU: {
            'true':  "SI",
            'false': "NO"
        },
        EsitiRibaRidMav: {
            CausaliRiba: {
                '16000': "Spese e Commissioni (Promemoria Contabile)",
                '37000': "Importo riaddebitato delle RIBA insolute e precedentemente accreditate (Promemoria Contabile)",
                '30006': "Ricevuta Resa al Carico - Esito RIBA",
                '30008': "Ricevuta Richiamata - Esito RIBA",
                '30009': "Ricevuta resa al carico poichè presentata oltre i limiti dell'accordo - Esito RIBA",
                '30010': "Ricevuta Pagata - Esito RIBA",
                '30007': "Ricevuta non correttamente domiciliata - Esito RIBA",
                '42010': "Ricevuta Impagata - Esito RIBA"
            },
            CausaliMav: {
                '07000': "Disposizione Pagata - Esito MAV",
                '07006': "Disposizione Resa al Carico - Esito MAV",
                '07008': "Disposizione Richiamata - Esito MAV",
                '07010': "Disposizione Radiata - Esito MAV",
                '07011': "Disposizione Pagata Succesivamente alla Radiazione - Esito MAV"
            },
            CausaliRid: {
                '50001': "Disposizione Stornata per Conto Estinto - Esito RID",
                '50002': "Disposizione resa al carico poiche' presentata oltre i termini dell'accordo - Esito RID",
                '50003': "Disposizione Stornata per Insufficienza Fondi - Esito RID",
                '50004': "Disposizione Stornata a seguito di Opposizione del Debitore - Esito RID",
                '50006': "Disposizione Resa al Carico - Esito RID",
                '50007': "Disposizione Stornata per motivi tecnici/Mancato Allineamento Archivi - Esito RID",
                '50008': "Disposizione Richiamata - Esito RID",
                '50009': "Disposizione Contestata per motivi generici - Esito RID",
                '50010': "Disposizione Regolata"
            }
        },
        EsitiER: {
            CodiciErrore: {
                '001': 'file input vuoto',
                '021': 'record omesso',
                '022': 'record non ammesso',
                '023': 'record in eccesso',
                '024': 'errore di sequenza numero progressivo',
                '031': 'dato/i omesso/i',
                '032': 'dato/i non ammesso/i',
                '033': 'formato dato/i errato',
                '034': 'valore dato/i errato',
                '037': 'no corrispondenza dati',
                '042': 'soggetto non aderente',
                '043': 'errore struttura dati',
                '044': 'supporto senza dati dispositivi/informativi',
                '050': 'mancata quadratura',
                '053': 'chiave di controllo errata',
                '055': 'mittente fisico non coerente con anagrafica aderenti',
                '058': 'banca proponente non coerente con anagrafica aderenti',
                '059': 'mittente e ricevente entrambi imprese',
                '064': 'mittente e ricevente entrambi banche',
                '065': 'tipologia di servizio/flusso non gestita dal ricevente',
                '066': 'cliente non riconosciuto da Banca Passiva',
                '067': 'cliente non riconosciuto da Banca Proponente',
                '140': 'codice divisa errato',
                '141': 'importo formalmente errato',
                '999': 'supporto doppio',
                'XXX': 'gli errori rilevati sono in numero superiore a 12'
            }
        },
        StatiEsito: {
            '1': "Confermata",
            '2': "Scartata",
            '3': "Parzialmente accettata",
            '4': "In Lavorazione",
            '5': "Autorizzata",
            '6': "Addebitata",
            '7': "TRACKVNT",
            '8': "Scartata",
            '9': "Confermata"
        },
        PagamentiRiba: {
            Causali: {
                '31000': "31000 - Ritiro Effetti",
                '31100': "31100 - Rifiuto Effetti",
                '07700': "07700 - Bollettino Bancario",
                '33000': "33000 - Avviso Effetto",
                '27000': "27000 - Emolumenti - Generici",
                '27010': "27010 - Emolumenti - Pensione",
                '27020': "27020 - Emolumenti - Stipendi",
                '30006': "30006 - Ricevuta Resa al Carico - Esito RIBA",
                '30007': "30007 - Ricevuta non correttamente domiciliata - Esito RIBA",
                '30008': "30008 - Ricevuta Richiamata - Esito RIBA",
                '30009': "30009 - Ricevuta Ceduta oltre i limiti dell'accordo - Esito RIBA",
                '30010': "30010 - Ricevuta Pagata - Esito RIBA",
                '34000': "34000 - Giroconto",
                '42010': "42010 - Ricevuta Impagata - Esito RIBA",
                '48000': "48000 - Bonifici Generici",
                '48015': "48015 - Bonifici con previdenza complementare",
                '50001': "50001 - Disposizione Stornata per Conto Estinto - Esito RID",
                '50002': "50002 - Disposizione resa al carico poichè presentata oltre i termini dell'accordo - Esito RID",
                '50003': "50003 - Disposizione Stornata per Insufficienza Fondi - Esito RID",
                '50004': "50004 - Disposizione Stornata a seguito di Opposizione del Debitore - Esito RID - 50004",
                '50006': "50006 - Disposizione Resa al Carico - Esito RID",
                '50007': "50007 - Disposizione Stornata per motivi tecnici/Mancato Allineamento  Archivi - Esito RID",
                '50008': "50008 - Disposizione Richiamata - Esito RID",
                '50009': "50009 - Disposizione Contestata per motivi generici -  Esito RID",
                '50010': "50010 - Disposizione Pagata - Esito RID",
                '68000': "68000 - Storno disposizione",
                '7000':  "7000 - MAV",
                '7006':  "7006 - Disposizione Resa al Carico - Esito MAV",
                '7008':  "7008 - Disposizione Richiamata - Esito MAV",
                '7010':  "7010 - Disposizione Radiata - Esito MAV",
                '7011':  "7011 - Disposizione Pagata Succesivamente alla Radiazione - Esito MAV",
                '79000': "79000 - Girofondi",
                '90210': "90210 - Comunicazione di autorizzazione all'addebito in conto acquisita dalla banca domiciliataria",
                '90211': "90211 - Richiesta di autorizzazione all'addebito in conto acquisita dall'azienda clienta",
                '90212': "90212 - Accettazione della richiesta di autorizzazione all'addebito in conto",
                '90218': "90218 - Revoca dell'autorizzazione all'addebito su iniziativa del sottoscrittore",
                '90219': "90219 - Proposta di revoca dell'autorizzazione all'addebito su iniziativa dell'azienda cliente",
                '90309': "90309 - Storno comunicazione autoriz per flag storno non accettabile",
                '90310': "90310 - Storno della comunicazione di autorizzazione ricevuta dalla banca domiciliataria",
                '90311': "90311 - Diniego alla richiesta di autorizzazione all'addebito in conto effettuata dall'azienda cliente",
                '90312': "90312 - Diniego alla richiesta di autorizzazione all'addebito in conto per CAB errato",
                '90313': "90313 - Diniego alla richiesta di autorizzazione all'addebito in conto per numero di conto corrent errato",
                '90314': "90314 - Diniego alla richiesta di autorizzazione all'addebito in conto perchè il sottoscrittore non puo trarre sul conto corrente indicato",
                '90315': "90315 - Diniego alla richiesta di autorizzazione all'addebito in conto perchè flag di storno non accettabile",
                '90316': "90316 - Storno della richiesta di autorizzazione all'addebito in conto in quanto gia presente in archivio",
                '90318': "90318 - Storno della revoca su iniziativa del sottoscrittore effettuata presso l'azienda cliente",
                '90319': "90319 - Storno della proposta di revoca su iniziativa dell'azienda cliente",
                '90420': "90420 - Revoca dell'autorizzazione all'addebito in conto su richiesta dell'intestatario del conto di addebito",
                '90421': "90421 - Revoca dell'autorizzazione all'addebito in conto su iniziativa della banca domiciliataria",
                '90430': "90430 - Variazione delle coordinate bancarie di addebito",
                '90440': "90440 - Variazione coordinate d'azienda",
                '90450': "90450 - Proposta di revoca di autorizzazione all'addebito per cessazione del contratto",
                '90520': "90520 - Storno della revoca",
                '90530': "90530 - Storno della variazione delle coordinate bancarie",
                '90540': "90540 - Storno della richiesta dell'azienda cliente di variazione delle coordinate d'azienda",
                '90550': "90550 - Storno della prposta di revoca, comunicata dall'azienda cliente, per cessazione del contratto",
                '90560': "90560 - Storno della richiesta di revoca della domiciliazione per trasferimento delle deleghe",
                '90830': "90830 - Variazione coordinate a seguito della trasferibilità",
                '90840': "90840 - Storno della richiesta del'azienda di variazione delle coordinate d'azienda per trasferimento domiciliazione in corso",
                '91210': "91210 - Comunicazione informazioni deleghe per migrazioni a SEPA Direct Debit",
                '91211': "91211 - Richiesta informazioni deleghe per migrazione a SEPA Direct Debit",
                '91311': "91311 - Diniego alla comunicazione informazioni deleghe per migrazioni a SEPA Direct Debit",
                '99999': "99999 - Causale Fittizia",
                'ZV000': "ZV000 - rimborsi ad utenti RID",
                'ZZ000': "ZZ000 - bonifici da società emittenti carte di credito a favore di esercenti"
            },
            ListaDisposizioni: {
                'Titolo-11': "Rifiuto Riba: Creazione distinta",
                'Titolo-25': "Pagamento Riba: Creazione distinta",
            },
            ListaDistinte: {
                'Titolo-11': "Rifiuto Riba",
                'Titolo-25': "Pagamento Riba",
            },
            TipoEffetto: {
                '10': "Effetto con spese - 10",
                '20': "Effetto senza spese - 20",
                '30': "Ri.Ba. - 30"
            },
            AVista: "A vista",
            AScadenza: "A Scadenza",
            25: "Ritiro Effetti (Pagamento Riba)",
            11: "Effetti Impagati",
            Esiti: {
                Titles: {
                    '64': "Esiti Bollettino Bancario",
                    '65': "Esiti Pagamenti Estero",
                    '61': "Esiti Ritiro Effetti (Pagamenti Riba)",
                    '67': "Esiti Bonifici SEPA",
                    '68': "Esiti Stipendi SEPA",
                },
                EsitoOrdinante: {
                    'true':  "Si",
                    'false': "No"
                },
                TipoDato: {
                    '1': "Dispositivo",
                    '2': "Esito incrociato con dispositivo",
                    '3': "Esito",
                },
                TipoDispositivo: {
                    'ERF': "Ritiro Effetti (Pagamenti Riba)",
                    'EBE': "Pagamenti Estero",
                    'YST': "Stipendi SEPA",
                    'YBN': "Bonifici SEPA",
                    'EBB': "Bollettino Bancario"
                },
                StatoEsito: {
                    'ACTC' : "Confermata",
                    'RJCT' : "Scartata",
                    'PART' : "Parzialmente accettata",
                    'PDNG' : "In Lavorazione",
                    'FIRM' : "Autorizzata",
                    'ACSC' : "Addebitata",
                    'TMTT' : "TRACKVNT",
                    'TMTB' : "Scartata",
                    'CONF' : "Confermata",
                    'TEX_SS_ACTC' : "Confermata",
                    'TEX_SS_RJCT' : "Scartata",
                    'TEX_SS_PART' : "Parzialmente accettata",
                    'TEX_SS_PDNG' : "In Lavorazione",
                    'TEX_SS_FIRM' : "Autorizzata",
                    'TEX_SS_ACSC' : "Addebitata",
                    'TEX_SS_TMTT' : "TRACKVNT",
                    'TEX_SS_TMTB' : "Scartata",
                    'TEX_SS_CONF' : "Confermata"

                },
                CausaliCbi: {
                    '01':  "01-Valore ammesso per accordo tra le parti",
                    '02' : "02-Valore ammesso per accordo tra le parti",
                    '03' : "03-Valore ammesso per accordo tra le parti",
                    '04' : "04-Valore ammesso per accordo tra le parti",
                    '05' : "05-PREL. A 1/2 NS. S.A.",
                    '06' : "06-ACCREDITI R.I.D.",
                    '07' : "07-INC. ADD. NON PREAV.",
                    '08' : "08-R.I.D. IMPAGATI",
                    '09' : "09-INCASSO A 1/2 P.O.S.",
                    '10' : "10-ASSEGNO CIRCOLARE",
                    '11' : "11-UTENZE",
                    '12' : "12-UTENZE E COMMIS.",
                    '13' : "13-PREL. 1/2 ASS. N.",
                    '14' : "14-ACCREDITO CEDOLE/DIV",
                    '15' : "15-RIMB. FIN.TI/MUTUI",
                    '16' : "16-ADDEBITO COMMISSIONI",
                    '17' : "17-LOCAZ. PREMI ASS.",
                    '18' : "18-INTERESSI E COMP.",
                    '19' : "19-IMPOSTE E TASSE",
                    '20' : "20-CANONE CASS. SICUR.",
                    '21' : "21-CONTR. ASS.LI PREV.",
                    '22' : "22-CUSTODIA VALORI",
                    '24' : "24-PAG/INC. DOC. ITALIA",
                    '26' : "26-DISPOSIZIONE",
                    '27' : "27-ACCREDITO EMOLUMENTI",
                    '28' : "28-COMPRAVENDITA DIVISA",
                    '29' : "29-ACCREDITI RI.BA.",
                    '30' : "30-EFFETTI SBF",
                    '31' : "31-EFFETTI RITIRATI",
                    '32' : "32-EFFETTI RICHIAMATI",
                    '33' : "33-EFF. DIRET. RITIRATO",
                    '34' : "34-GIROCONTO",
                    '35' : "35-STORNI RI.BA.",
                    '36' : "36-INTERESSI INTEGR.",
                    '37' : "37-INSOLUTI RI.BA.",
                    '38' : "38-INT. ESTINZIONE",
                    '39' : "39-DISPOSIZ. EMOLUM.",
                    '40' : "40-VERS. CON E NS. ASS.",
                    '41' : "41-DISPOSIZ. A 1/2 S.A.",
                    '42' : "42-INSOLUTI/PROTESTATI",
                    '43' : "43-PAGAMENTO 1/2 P.O.S.",
                    '44' : "44-UTIL. CREDOC ESTERO",
                    '45' : "45-UTIL. CARTA CREDITO",
                    '46' : "46-MANDATO DI PAGAMENTO",
                    '47' : "47-UTIL. CREDOC ITALIA",
                    '48' : "48-ORDINE E CONTO",
                    '49' : "49-Valore ammesso per accordo tra le parti",
                    '50' : "50-PAGAMENTI DIVERSI",
                    '51' : "51-ASSEGNI TURISTICI",
                    '52' : "52-PRELEVAMENTO",
                    '53' : "53-UTIL. CREDOC ITALIA",
                    '55' : "55-ASSEGNO INS. O PROT.",
                    '56' : "56-RICAVO EFFETTI D.I.",
                    '57' : "57-ASS./VAGLIA IRR.",
                    '58' : "58-REVERSALE",
                    '60' : "60-RETTIFICA VALUTA",
                    '62' : "62-SALDO",
                    '63' : "63-SCONTO EFF. DIRETTI",
                    '64' : "64-SCONTO EFFETTI",
                    '65' : "65-COMPETENZE SCONTO",
                    '66' : "66-SPESE",
                    '68' : "68-STORNO SCRITTURA",
                    '70' : "70-COMPRAV. TITOLI CONT",
                    '72' : "72-UTIL. CREDOC ESTERO",
                    '74' : "74-VALORI BOLLATI",
                    '78' : "78-VERS. CONT. E NS.ASS",
                    '79' : "79-GIRO DA/A ALTRO IST.",
                    '80' : "80-COMPRAV. TIT. A TER.",
                    '81' : "81-ACC.NE RIP. TITOLI",
                    '82' : "82-ESTINZ. RIP. TITOLI",
                    '83' : "83-SOTT.NE TITOLI",
                    '84' : "84-TITOLI SCAD. O ESTR.",
                    '85' : "85-AUM. CAP. SOC. OP.S.",
                    '86' : "86-FINANZIAMENTI IMPORT",
                    '87' : "87-ANTICIPAZIONI EXPORT",
                    '88' : "88-Valore ammesso per accordo tra le parti",
                    '90' : "90-DOC.TE DA/PER EST.",
                    '91' : "91-PREL. S.A. ALTRO IST",
                    '92' : "92-LIBRETTO ASSEGNI",
                    '93' : "93-Valore ammesso per accordo tra le parti",
                    '94' : "94-COMM./SPESE OP. TIT.",
                    '95' : "95-COMM./SPESE OP. EST.",
                    '96' : "96-RETTIFICA IMPORTO",
                    '97' : "97-O/C MONTE TITOLI",
                    '98' : "98-PRELEV. CON CARTE EC",
                    '99' : "99-VARIE",
                    'AB' : "AB-PREL. 1/2 ASS. N.",
                    'Z1' : "Z1-GIRO DI CASH POOLING",
                    'Z2' : "Z2-VERSAMENTO DI ASSEGNI BANCARI",
                    'Z3' : "Z3-VERS. A. C. EMESSI DA ALTRE BANCHE",
                    'Z4' : "Z4-VERS. ASS. POSTALI NON STANDARD",
                    'Z5' : "Z5-VERSAMENTO INDIRETTO",
                    'Z6' : "Z6-PREL. A VALERE SU CREDITO SEMPL.",
                    'Z7' : "Z7-ACCREDITO RID",
                    'Z8' : "Z8-ACCREDITO MAV",
                    'Z9' : "Z9-INSOLUTO/STORNO RID",
                    'ZA' : "ZA-INSOLUTO MAV",
                    'ZB' : "ZB-INCASSO CERTIFICATI CONFORMITA",
                    'ZC' : "ZC-PAG. PER FORNITURA ELETTRICA",
                    'ZD' : "ZD-PAG. PER SERVIZIO TELEFONICO",
                    'ZE' : "ZE-PAG. PER SERVIZI ACQUA/GAS",
                    'ZF' : "ZF-PAG. PER OPER. SU PROD. DERIVATI",
                    'ZG' : "ZG-ACCR. PER OPER. SU PROD. DERIVATI",
                    'ZH' : "ZH-RIMB. TITOLI E/O FONDI COMUNI",
                    'ZI' : "ZI-BONIFICO DA ESTERO",
                    'ZL' : "ZL-BONIFICO SU ESTERO",
                    'ZM' : "ZM-SCONTO EFFETTI SULL ESTERO",
                    'ZN' : "ZN-NEGOZIAZIONE ASSEGNI SU ESTERO",
                    'ZP' : "ZP-COMM. E SPESE SU FIDEIUSSIONI",
                    'ZQ' : "ZQ-COMM. E SPESE SU CRED DOCUMENTA",
                    'ZR' : "ZR-PENALE",
                    'ZS' : "ZS-PRESTITI PERS/FINANZIAMENTI DIV",
                    'ZT' : "ZT-PAGAM/INCASSO BOLLETTINO BANC.",
                    'ZU' : "ZU-BONIFICO PREV COMPLEMENTARE",
                    'ZX' : "ZX-BONIFICO OGGETTO DI ONERI DEDUCIBILI O DETRAZ. IMPOSTA"
                },
                TipiMovimento: {
                    'NULL': "",
                    '26': "Assegno banca creditore",
                    '23': "Assegno banca ordinante",
                    '8': "Trattenere C/O banca",
                    'OTHERS': "Accredito sul C/C",
                    'CHK': "Assegno Sepa",
                    'TRA': "Bonifico SEPA con esito all'ordinante",
                    'TRF': "Bonifico SEPA senza esito all'ordinante",
                    'TRR': "Bonifico Sepa Con Esito Ricevuto"
                }
            }
        },
        BollettiniBancari: {
            Esiti: {
                ModPagamento: {
                    '1': "Per cassa",
                    '2': "Non per cassa",
                    '3': "Bankpass bollettino"
                },
                Dettaglio: {
                    ModPagamento: {
                    '1': "1 - Per cassa",
                    '2': "2 - Non per cassa",
                    '3': "3 - Bankpass bollettino"
                }
                }
            }
        }
    };
</script>







<script type="text/html" id="aggrega-disposizioni">
    <!-- SUCCESS MESSAGES -->
    <div data-bind="visible: SuccessMessagesVisible">
        <div data-bind="component: { name: 'aggrega-feedback-messages', params: FeedBackMessageParam }"></div>
    </div>
    <div data-bind="visible: !SuccessMessagesVisible()">
        <div class="riquadro">
            <div>
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Bonifici: creazione distinte</h1>
            </div>
            <div class="section">
                <!-- VALIDATION -->
                <validation-messages params="Validation: Validation"></validation-messages>
                <!-- AGGREGA -->
                <div data-bind="foreach: DistinteModel">
                    <div class="row margin-top10">
                        <h3 class="titleSection">
                            Distinta <span data-bind="text: $index() + 1"></span>
                        </h3>
                    </div>
                    <div data-bind="css: Selected() ? 'opacity-100' : 'opacity-50'">
                        <div style="font-size: 14px;" data-bind="css: DetailsVisible() ? 'row margin-top10 showcontent' : 'row margin-top10 hidecontent', singleClick: DetailsToggle">
                            <div class="col-xs-12" style="padding-top: 5px; padding-bottom: 5px;">
                                <input type="hidden" data-bind="checked: Selected" />
                                <span data-bind="css: DetailsVisible() ? 'glyphicon glyphicon-triangle-bottom' : 'glyphicon glyphicon-triangle-right'" />
                                &nbsp;
                                <span>Distinta contenente n. </span>
                                <strong data-bind="text: Distinta.NumeroOrdini"></strong>
                                <strong data-bind="text: Localization.TipologieDispositive.GetPluralLabel(Distinta.Identifier.ClasseServizio())"></strong>
                                <strong data-bind="text: Distinta.Disposizioni()[0].IsUrgP() ? 'Urgenti' : 'Ordinari'"></strong>
                                <span> per un importo di </span>
                                <strong data-bind="numericTextSeparator: Distinta.Importo"></strong>
                                <strong> EUR</strong>
                                <span> su conto di addebito </span>
                                <strong data-bind="text: Distinta.Intestatario.Conto"></strong>
                                <span> intestato a </span>
                                <strong data-bind="text: Distinta.Intestatario.RagioneSociale"></strong>
                            </div>
                        </div>
                        <div class="row" data-bind="slideVisible: DetailsVisible, with: DisposizioniPaged">
                            <table class="dataTable table">
                                <thead>
                                    <tr>
                                        <th>
                                            Importo
                                        </th>
                                        <th>
                                            Divisa
                                        </th>
                                        <th>
                                            Ragione Sociale
                                        </th>
                                        <th>
                                            IBAN
                                        </th>
                                    </tr>
                                </thead>
                                <tbody data-bind="foreach: Page">
                                    <tr>
                                        <td class="text-right"
                                            data-bind="numericTextSeparator: Importo"></td>
                                        <td class="text-center"
                                            data-bind="text: Divisa"></td>
                                        <td data-bind="text: CreditoreOBeneficiario.Denominazione"></td>
                                        <td class="text-center"
                                            data-bind="text: Beneficiario.Iban"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-center" data-bind="visible: PageCount() > 1">
                                <paginatore params="PagedList: $data"></paginatore>
                            </div>
                        </div>
                        <div class="row margin-top20 form-group">
                            <div class="form-field-input col-sm-4 col-xs-12">
                                <label class="control-label">
                                    Esito all'ordinante
                                </label>
                                <div class="form-field">
                                    <select class="form-control"
                                            data-bind="options: $component.EsitoOptions, optionsText: 'text', optionsValue: 'value', value: Distinta.EsitoOrdinante, enable: EsitoOrdinanteEnabled"></select>
                                </div>
                            </div>
                            <div class="form-field-input col-sm-4 col-xs-12">
                                <label class="control-label">
                                    Data esecuzione
                                </label>
                                <div class="form-field">
                                    <date-picker params="Date: Distinta.DataEsecuzione"></date-picker>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="row link" data-bind="click: DatiAggiuntiviCollapse">
                            <h3 class="titleSection">
                                Dati aggiuntivi Distinta <span data-bind="text: $index() + 1"></span>
                            </h3>
                            <div class="collapse-img-position">
                                <div data-bind="css: DatiAggiuntiviCollapseCss" />
                            </div>
                        </div>
                        <div data-bind="slideVisible: DatiAggiuntiviVisible">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="col-sm-4 col-xs-12" style="padding-right: 0; padding-left: 20px">
                                        <label class="control-label" style="margin-left: -20px">Tipo Conto codificato (Accordi Banca)</label>
                                        <div class="radio" style="font-weight: normal; margin-top: 0">
                                            <input type="radio" value="TipoContoCodificato" data-bind="checked: CurrentTipoConto, click: ChangeTipoConto()" />
                                            <select class="form-control"
                                                    data-bind="name: tipoConto + $index, enable: CodiceTipoContoActive, options: $component.TipologieContoOptions, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: Distinta.TipoConto.Codice"></select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                                        <label class="control-label" style="margin-left: -20px">Tipo conto libero (Accordi Banca)</label>
                                        <div class="radio" style="font-weight: normal; margin-top: 0">
                                            <input type="radio" value="TipoContoLibero" data-bind="name: tipoConto + $index, checked: CurrentTipoConto, click: ChangeTipoConto()" />
                                            <input type="text" placeholder="opzionale" class="form-control no-placeholder-italic" data-bind="enable: TipoContoLiberoActive, value: Distinta.TipoConto.DescrizioneLibera" />
                                        </div>
                                    </div>
                                    <div class="form-field-input col-sm-4 col-xs-12">
                                        <label class="control-label">
                                            Addebito cumulativo
                                        </label>
                                        <div class="form-field">
                                            <select class="form-control"
                                                    data-bind="enable: AddebitoCumulativoEnabled, options: $component.AddebitoCumulativoOptions, optionsText: 'V', optionsValue: 'K', value: Distinta.AddebitoCumulativo"></select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ACTIONS -->
        <div class="row margin-top20">
            <div class="col-xs-12 text-right">
                <input type="button" class="btn btn-primary" value="Annulla" data-bind="singleClick: Cancel" />
                <input type="button" class="btn btn-primary" value="Conferma" data-bind="singleClick: Confirm" />
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">

    function DistintaModel(data) {
        if (typeof data === "undefined") { data = null; }
        var self = this;

        self.Distinta = new App.Sct.DistintaSctBo(null);
        self.Selected = ko.observable(null);
        self.DetailsVisible = ko.observable(false);
        self.DisposizioniPaged = null;
        self.EsitoOrdinanteEnabled  = ko.observable(true);
        self.DatiAggiuntiviVisible  = ko.observable(false);
        self.CurrentTipoConto       = ko.observable('TipoContoCodificato');
        self.CodiceTipoContoActive  = ko.observable(true);
        self.TipoContoLiberoActive  = ko.observable(false);
        self.DatiAggiuntiviCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.DatiAggiuntiviVisible));

        if (data !== null) {
            self.Distinta = new App.Sct.DistintaSctBo(data.Distinta);
            self.AddebitoCumulativoEnabled = ko.pureComputed(function () {
                if (self.Distinta.NumeroOrdini() == 1) {
                    self.Distinta.AddebitoCumulativo = 'NR';
                    return false;
                }

                return true;
            }, this);
            self.Selected(data.Selected);
            self.DetailsVisible(data.DetailsVisible);
            self.DisposizioniPaged = new App.Core.PagedObservableArray({
                allData: self.Distinta.Disposizioni(),
                pageSize: 5
            });

            if (self.Distinta.Disposizioni()[0].IsUrgP()) {
                self.EsitoOrdinanteEnabled(false);
                self.Distinta.EsitoOrdinante(true);
            }
        }

        // Actions
        self.DetailsToggle = function () {
            self.DetailsVisible(!self.DetailsVisible());
        };

        self.ChangeTipoConto = function () {
            if (self.CurrentTipoConto() == 'TipoContoCodificato') {
                self.Distinta.TipoConto.DescrizioneLibera(null);
                self.CodiceTipoContoActive(true);
                self.TipoContoLiberoActive(false);
            } else {
                self.Distinta.TipoConto.Codice(null);
                self.CodiceTipoContoActive(false);
                self.TipoContoLiberoActive(true);
            }
        };

        self.DatiAggiuntiviCollapse = function () {
            self.DatiAggiuntiviVisible(!self.DatiAggiuntiviVisible());
        };
    }

    ko.components.register('aggrega-disposizioni', {
        template: { element: 'aggrega-disposizioni' },
        viewModel: function (params) {
            var self = this;

            //check params
            if (!ko.isObservable(params.Distinte)) {
                throw "aggrega-disposizioni : arg Distinte not valid";
            }
            self.EsitoOptions = [{
                text: 'Si',
                value: true
            }, {
                text: 'No',
                value: false
            }];
            
            // Bo Model
            self.Distinte          = params.Distinte;

            var distinteSubscribe = self.Distinte.subscribe(function () {
                // set default
                self.Validation.removeAll();
                self.DistinteModel.removeAll();
                self.SuccessMessagesVisible(false);
                ko.utils.arrayForEach(self.Distinte(), function (distinta) {
                    distinta.AddebitoCumulativo('NR');

                    self.DistinteModel.push(new DistintaModel({
                        Distinta: ko.toJS(distinta),
                        Selected: true
                    }));
                });
            });
            
            self.Validation = ko.observableArray([]);
            self.DistinteModel = ko.observableArray([]);
            self.AddebitoCumulativoOptions = PROFILABLE_DISTINTE['ACCREDITO_CUMULATIVO'];
            self.TipologieContoOptions = PROFILABLE_DISTINTE['TIPO_CONTO'];
            self.SuccessMessagesVisible = ko.observable(false);
            self.FeedBackMessageParam = {
                Messages: ko.observableArray(),
                Distinte: ko.observableArray([])
            };

            // Actions
            self.Cancel = function () {
                window.history.back();
            };

            self.Confirm = function () {
                var distinte = [];
                ko.utils.arrayForEach(self.DistinteModel(), function (item) {
                    if (item.Selected())
                        distinte.push(item.Distinta);
                });

                if (distinte.length === 0) {
                    uiHelper.Alert({
                        text: 'Selezionare almeno un elemento dalla lista.'
                    });
                } else {
                    Http.PostWithTxMon("/anchise2.web/BonificoSct/SearchDisposizioni/Crea", ko.toJSON(distinte))
                        .success(function (data) {
                            var result = new App.Core.StandardJsonResult(data);

                            if (result.HasError && (result.Response == null || result.Response.length === 0)) {
                                self.Validation(result.Messages);
                            } else {
                                ko.utils.arrayForEach(result.Response, function (item) {
                                    self.FeedBackMessageParam.Distinte.push(new App.Sct.DistintaSctBo(item));
                                });

                                self.FeedBackMessageParam.Messages(ko.utils.arrayMap(result.Messages, function (item) {
                                    return item.ErrorMessage;
                                }));

                                _cleanSpalla();

                                $.ajax('/anchise2.web/Widget/LinkRapidi')
                                .success(function (html) {
                                    $(spallaName).append(html);

                                    $.ajax('/anchise2.web/Widget/InfoUtili/BonificoSctDistintaCreata')
                                        .success(function (html) {
                                            $(spallaName).append(html);
                                        });
                                });

                                self.SuccessMessagesVisible(true);
                            }
                        });
                }
            };

            self.dispose = function () {
                distinteSubscribe.dispose();
            }
        }
    });
</script>


<script type="text/html" id="list-disposizioni">
    <div data-bind="visible: DeleteSuccessVisible()">
        <feedback-messages params="Buttons: SuccessButton"></feedback-messages>
    </div>
    <div data-bind="visible: !DeleteSuccessVisible()">
        <div class="riquadro">
            <div>
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Bonifici: creazione distinte</h1>
            </div>
            <validation-messages params="Validation: $component.ValidationConfirm"></validation-messages>
            <validation-messages params="Validation: ListDisposizioni.Validation"></validation-messages>
            <!-- ko with: ListDisposizioni -->
            <div class="table-responsive">
                <div class="row">
                    <div class="form-group">
                        <div class="form-field-input col-xs-4">
                            <label class="control-label">
                                Azienda
                            </label>
                            <div class="form-field">
                                <select class="form-control"
                                        data-bind="options: $component.Aziende, optionsCaption: 'Tutti', optionsText: 'RagioneSociale', optionsValue: 'Id', value: PagingFilter.IdAzienda"></select>
                            </div>
                        </div>
                        <div class="form-field-input col-xs-4">
                            <label class="control-label">
                                Banca
                            </label>
                            <div class="form-field">
                                <select class="form-control"
                                        data-bind="options: $component.Banche, optionsCaption: 'Tutti', optionsText: 'Descrizione', optionsValue: 'CodiceAbi', value: PagingFilter.CodiceAbi"></select>
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
                <div class="dataTables_wrapper" style="margin-top: 10px">
                    <table class="dataTable table">
                        <thead>
                            <tr>
                                <th data-bind="css: ThCss('1'), singleClick: SortToggle('1')" style="width: 90px">
                                    Importo
                                </th>
                                <th style="width: 80px">
                                    Divisa
                                </th>
                                <th data-bind="css: ThCss('2'), singleClick: SortToggle('2')" style="width: 60px">
                                    ABI
                                </th>
                                <th data-bind="css: ThCss('3'), singleClick: SortToggle('3')" style="width: 60px">
                                    CAB
                                </th>
                                <th data-bind="css: ThCss('4'), singleClick: SortToggle('4')">
                                    Rapporto
                                </th>
                                <th data-bind="css: ThCss('5'), singleClick: SortToggle('5')" style="width: 100px">
                                    Beneficiario
                                </th>
                                <th data-bind="css: ThCss('6'), singleClick: SortToggle('6')">
                                    IBAN Beneficiario
                                </th>
                                <th>
                                    Esito benef
                                </th>
                                <th data-bind="click: $component.AggregateSelectAllToggle">
                                    Aggrega
                                </th>
                                <th data-bind="click: $component.DeleteSelectAllToggle">
                                    Elimina
                                </th>
                                <th>
                                    Modifica
                                </th>
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: Page">
                            <tr>
                                <td data-bind="numericTextSeparator: Importo" class="text-right"></td>
                                <td data-bind="text: Divisa"></td>
                                <td data-bind="text: Ordinante.Abi"></td>
                                <td data-bind="text: Ordinante.Cab"></td>
                                <td data-bind="text: Ordinante.Conto"></td>
                                <td data-bind="text: CreditoreOBeneficiario.Denominazione"></td>
                                <td data-bind="text: Beneficiario.Iban"></td>
                                <td data-bind="text: HasEsitoAlBeneficiario() ? 'Si' : 'No'"></td>
                                <td class="text-center">
                                    <input type="checkbox" data-bind="checkedValue: $data, checked: $component.DispoToAggregate.indexOf($data) > -1, click: $component.AggregateCheck" />
                                </td>
                                <td class="text-center">
                                    <input type="checkbox" data-bind="checkedValue: $data, checked: $component.DispoToDelete.indexOf($data) > -1, click: $component.DeleteCheck" />
                                </td>
                                <td style="cursor: pointer" data-bind="click: $component.EditBonifico" class="text-center">
                                    <a href="#">
                                        Modifica
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <paginatore params="PagedList: $data"></paginatore>
                </div>
                <div data-bind="visible: Page().length === 0">
                    <search-no-result></search-no-result>
                </div>
            </div>
            <!-- /ko -->
        </div>
        <div class="margin-bottom20 text-right">
            <input type="button" class="btn btn-primary" value="Conferma" data-bind="singleClick: Confirm" />
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('list-disposizioni', {
        template: { element: 'list-disposizioni' },
        viewModel: function (params) {
            var self = this;
            var _filterPiazzature = function () {
                var idAzienda = self.ListDisposizioni.PagingFilter.IdAzienda() || null;

                return ko.utils.arrayFilter(PIAZZATURA, function (p) {
                    var current = new App.Common.PiazzaturaBo(p);

                    return (idAzienda !== null && current.Azienda.Id() === idAzienda);
                });
            };
            var _resetPagingFilter = function () {
                self.ListDisposizioni.PagingFilter.StartIndex(1);
                self.ListDisposizioni.PagingFilter.IdentifierRapporti([]);
            };

            if (!params.ListDisposizioni instanceof App.Core.PagedArrayAsync) {
                throw "Parameter ListDisposizioni not valid";
            }

            // Model
            self.ValidationConfirm = ko.observableArray([]);
            self.ListDisposizioni = params.ListDisposizioni;
            self.DispoToDelete = params.DispoToDelete;
            self.DispoToAggregate = params.DispoToAggregate;
            
            self.ListDisposizioni.Callback = function () {
                // richiesta di perdere la selezione multipla quando si ritorna sulla pagina di ricerca
                _resetCheckbox();
            };

            self.Search = function () {
                _resetCheckbox();
                self.ListDisposizioni.Search();
            };

            self.SuccessButton = [new App.Core.UiButton({
                Label: 'OK',
                Callback: function () {
                    self.DeleteSuccessVisible(false);
                }
            })];
            self.DeleteSuccessVisible = ko.observable(false);

            self.Aziende = ko.pureComputed(function () {
                _resetPagingFilter();

                return App.Common.GetAziendeFromPiazzatura(PIAZZATURA);
            }, self);
            self.Banche = ko.pureComputed(function () {
                    
                _resetPagingFilter();

                return App.Common.GetBancheFromPiazzatura(_filterPiazzature());
            }, self);

            // Action
            var _resetCheckbox = function () {
                self.DispoToAggregate([]);
                self.DispoToDelete([]);
            };

            var _cancellaDisposizioni = function () {
                Http.Post("/anchise2.web/BonificoSct/SearchDisposizioni/Cancella", ko.toJSON(rootViewModel.DispoToDelete()))
                    .success(function (data) {
                        var result = new App.Core.StandardJsonResult(data);
                        if (result.HasError) {
                            ko.mapping.fromJS(result.Messages, null, self.ListDisposizioni.Validation);
                            $("body").animate({ scrollTop: 0 }, '500');
                        } else {
                            ko.mapping.fromJS([], null, self.ListDisposizioni.Validation);

                            self.DispoToDelete([]);
                            self.ListDisposizioni.FirstPage();
                            self.DeleteSuccessVisible(true);
                        }
                    });
            };

            var pageIndexSubscribe = self.ListDisposizioni.PageIndex.subscribe(function () {
                _resetCheckbox();
            });

            var pageSortSubscribe = self.ListDisposizioni.PagingFilter.IsSortAscending.subscribe(function () {
                _resetCheckbox();
            });

            var sortColumnSubscribe = self.ListDisposizioni.PagingFilter.SortColumn.subscribe(function () {
                _resetCheckbox();
            });


            self.AggregateSelectAllToggle = function () {
                if (self.DispoToAggregate().length > 0) {
                    _resetCheckbox();
                } else {
                    _resetCheckbox();
                    ko.utils.arrayPushAll(self.DispoToAggregate, self.ListDisposizioni.Page());
                }
            };
            self.DeleteSelectAllToggle = function () {
                if (self.DispoToDelete().length > 0) {
                    _resetCheckbox();
                } else {
                    _resetCheckbox();
                    ko.utils.arrayPushAll(self.DispoToDelete, self.ListDisposizioni.Page());
                }
            };
            self.DeleteCheck = function (data) {
                if (self.DispoToDelete.indexOf(data) === -1) {
                    self.DispoToDelete.push(data);
                } else {
                    self.DispoToDelete.remove(data);
                }

                self.DispoToAggregate([]);
                return true; //ko can proceed with checked binding
            };
            self.AggregateCheck = function (data) {
                if (self.DispoToAggregate.indexOf(data) === -1) {
                    self.DispoToAggregate.push(data);
                } else {
                    self.DispoToAggregate.remove(data);
                }

                self.DispoToDelete([]);
                return true; //ko can proceed with checked binding
            };
            self.EditBonifico = function (data) {
                location.hash = Sections.SEARCH + '/' + encodeURIComponent(data.Identifier.Crypt());
            };
            self.Confirm = function () {
                if (self.DispoToAggregate().length > 0) {
                    self.ValidationConfirm.removeAll();
                    location.hash = Sections.AGGREGATE;
                } else if (self.DispoToDelete().length > 0) {
                    self.ValidationConfirm.removeAll();
                    uiHelper.Confirm({
                        text: 'Sei sicuro di voler cancellare le disposizioni selezionate?',
                        okCallback: _cancellaDisposizioni
                    });
                } else {
                    self.ValidationConfirm.removeAll();
                    self.ValidationConfirm.push(new App.Core.ValidationMessage({ ErrorMessage: 'Selezionare almeno un elemento dalla lista.' }));
                }
            };
            self.ReturnToFilter = function () {

                Http.Post("/anchise2.web/BonificoSct/SearchDisposizioni/BackToFilter", ko.toJSON(self.ListDisposizioni.PagingFilter))
                    .success(function () {
                        location.href = "/youbiz.web/Integration/Home/IndexAnchiseFull/71";
                    });
            }

            self.dispose = function () {
                pageIndexSubscribe.dispose();
                pageSortSubscribe.dispose();
                sortColumnSubscribe.dispose();
            }
        }
    });
</script>



<script type="text/html" id="aggregate-distinte-details">
    <div data-bind="foreach: Distinte" class="section">
        <div class="row">
            <h3 class="titleSection">
                Distinta <span data-bind="text: $index() + 1"></span>
            </h3>
        </div>
        <div class="row">
            <div class="col-xs-12 white-block">
                <div class="text-center">
                    <h1>
                        Dati Distinta
                    </h1>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Ordinante:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Intestatario.RagioneSociale"></label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Conto di addebito:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Intestatario.Iban"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Importo:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="numericTextSeparator: Importo()"></label><label>&nbsp;EUR</label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Addebito cumulativo
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: AddebitoCumulativo"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    N. bonifici
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: NumeroOrdini"></label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Data esecuzione:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataEsecuzione"></label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('aggregate-distinte-details', {
        template: { element: 'aggregate-distinte-details' },
        viewModel: function (params) {
            var self = this;

            self.Distinte = params.Distinte;
        }
    });
</script>


<script type="text/html" id="aggrega-feedback-messages">
    <div data-bind="component: { name: 'feedback-messages', params: FeedBackMessageParam }"></div>
</script>

<script type="text/javascript">
    ko.components.register('aggrega-feedback-messages', {
        template: { element: 'aggrega-feedback-messages' },
        viewModel: function (params) {
            var self = this;

            self.Distinte = params.Distinte || ko.observableArray();
            self.Messages = params.Messages || ko.observableArray();

            self.FeedBackMessageParam = {
                Buttons: [
                new App.Core.UiButton({
                    Label: 'Torna ad aggregare',
                    Callback: function () {
                        self.Distinte([]);
                        history.back();
                    }
                }),
                new App.Core.UiButton({
                    Label: 'Vai alla autorizzazione',
                    Callback: function () {
                        var filtro = {
                            SortColumn: 1,
                            IsSortAscending: false,
                            Stato: App.Common.StatiDistinta.DA_AUTORIZZARE
                        };
                        App.Core.SetFiltroDistinteSessionStorage(filtro);
                        location.href = '/anchise2.web/BonificoSct/SearchDistinte';
                    }
                })
                ],
                CssClass: 'alert',
                PageTitle: 'Bonifici: conferma creazione distinta',
                TitleCssClass: 'riepilogo',
                Message: 'Distinte create correttamente.\nPer procedere con l\'invio è necessario Autorizzare le distinte',
                Messages: self.Messages,
                Component: {
                    Name: 'aggregate-distinte-details',
                    Params: {
                        Distinte: self.Distinte
                    }
                }
            };
        }
    });
</script>




<div id="eed100d7ffc449bf818f71d07daf62b2_5">
    <div id="eed100d7ffc449bf818f71d07daf62b2_4">
        <!-- AGGREGA -->
        <div data-bind="visible: CurrentSection() == Sections.AGGREGATE" style="display: none;">
            <div data-bind="component: { name: 'aggrega-disposizioni', params: AggregaParams }">
    <!-- SUCCESS MESSAGES -->
    <div data-bind="visible: SuccessMessagesVisible" style="display: none;">
        <div data-bind="component: { name: 'aggrega-feedback-messages', params: FeedBackMessageParam }">
    <div data-bind="component: { name: 'feedback-messages', params: FeedBackMessageParam }">
    <div class="riquadro">
        <div data-bind="visible: PageTitle != null">
            <div class="flag riepilogo" data-bind="css: TitleCssClass">&nbsp;</div>
            <h1 data-bind="text: PageTitle">Bonifici: conferma creazione distinta</h1>
        </div>
        <div class="messagePanel visible alert" data-bind="css: CssClass">
            <h3 class="titleSection" data-bind="text: Title">Esito Operazione</h3>
            <p>
                <strong style="white-space: pre-wrap" data-bind="text: Message">Distinte create correttamente.
Per procedere con l'invio è necessario Autorizzare le distinte</strong>
            </p>
            <ul data-bind="foreach: Messages"></ul>
        </div>
        <div data-bind="visible: Component != null">
            <!-- ko if: Component != null-->
                <!-- ko component:{name: Component.Name, params: Component.Params} -->
    <div data-bind="foreach: Distinte" class="section"></div>
<!-- /ko -->
            <!-- /ko -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-right">
            <!-- ko foreach: Buttons -->
            <input type="button" class="btn btn-primary" data-bind="value: Label, singleClick: Callback" value="Torna ad aggregare">
            
            <input type="button" class="btn btn-primary" data-bind="value: Label, singleClick: Callback" value="Vai alla autorizzazione">
            <!-- /ko -->
        </div>
    </div>
</div>
</div>
    </div>
    <div data-bind="visible: !SuccessMessagesVisible()">
        <div class="riquadro">
            <div>
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Bonifici: creazione distinte</h1>
            </div>
            <div class="section">
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
                <!-- AGGREGA -->
                <div data-bind="foreach: DistinteModel"></div>
            </div>
        </div>
        <!-- ACTIONS -->
        <div class="row margin-top20">
            <div class="col-xs-12 text-right">
                <input type="button" class="btn btn-primary" value="Annulla" data-bind="singleClick: Cancel">
                <input type="button" class="btn btn-primary" value="Conferma" data-bind="singleClick: Confirm">
            </div>
        </div>
    </div>
</div>
        </div>
        <div data-bind="visible: CurrentSection() == Sections.AGGREGATE_SUMMARY" style="display: none;">
            <div data-bind="component: { name: 'aggrega-feedback-messages', params: AggregaFeedbackParams }">
    <div data-bind="component: { name: 'feedback-messages', params: FeedBackMessageParam }">
    <div class="riquadro">
        <div data-bind="visible: PageTitle != null">
            <div class="flag riepilogo" data-bind="css: TitleCssClass">&nbsp;</div>
            <h1 data-bind="text: PageTitle">Bonifici: conferma creazione distinta</h1>
        </div>
        <div class="messagePanel visible alert" data-bind="css: CssClass">
            <h3 class="titleSection" data-bind="text: Title">Esito Operazione</h3>
            <p>
                <strong style="white-space: pre-wrap" data-bind="text: Message">Distinte create correttamente.
Per procedere con l'invio è necessario Autorizzare le distinte</strong>
            </p>
            <ul data-bind="foreach: Messages"></ul>
        </div>
        <div data-bind="visible: Component != null">
            <!-- ko if: Component != null-->
                <!-- ko component:{name: Component.Name, params: Component.Params} -->
    <div data-bind="foreach: Distinte" class="section"></div>
<!-- /ko -->
            <!-- /ko -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-right">
            <!-- ko foreach: Buttons -->
            <input type="button" class="btn btn-primary" data-bind="value: Label, singleClick: Callback" value="Torna ad aggregare">
            
            <input type="button" class="btn btn-primary" data-bind="value: Label, singleClick: Callback" value="Vai alla autorizzazione">
            <!-- /ko -->
        </div>
    </div>
</div>
</div>
        </div>
        <!-- DATA ENTRY DISPOSIZIONE -->
        <div data-bind="visible: CurrentSection() == Sections.DATA_ENTRY" style="display: none;">
            <div data-bind="component: { name: 'bonifico-dataentry', params: BonificoParams }">
    <!-- SUCCESS MESSAGES -->
    <div data-bind="visible: SuccessMessagesVisible" style="display: none;">
        <feedback-messages params="Component: SuccessComponent, Buttons: SuccessButtons, CssClass: 'alert', Message: SuccessMessage, PageTitle: $component.FeedbackTitle, TitleCssClass: 'disposizioneBonifico'">
    <div class="riquadro">
        <div data-bind="visible: PageTitle != null">
            <div class="flag disposizioneBonifico" data-bind="css: TitleCssClass">&nbsp;</div>
            <h1 data-bind="text: PageTitle">Bonifici: conferma inserimento</h1>
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
            <input type="button" class="btn btn-primary" data-bind="value: Label, singleClick: Callback" value="Nuovo Bonifico">
            
            <input type="button" class="btn btn-primary" data-bind="value: Label, singleClick: Callback" value="Nuovo Bonifico con i dati precedenti">
            
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
                    <h1>Bonifici: inserimento</h1>
                </div>
                <div style="float:left;padding-top:13px;">
                    <a class="icon-replace icon-help active link" onclick="javascript: showPopupHelp('/anchise2.web/Widget/Help/GetHelper', 'Chiudi', 'Bonifici', null);">Help On Line</a>
                </div>
            </div>
            <div class="clearall"></div>
            <div data-bind="with: Bonifico">
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
            <a href="#" data-bind="click: RapportiDataTableVisibleToggle, css: ArrowToggle, visible: ArrowVisible" class="btnSelezioneCC icon-replace icon-arrowdown active"></a>
        </div>
    </div>
    <div class="row" data-bind="slideVisible: RapportiDataTableVisible" style="display: none;">
        <div data-bind="with: PagedList">
            <div class="row" style="margin-top: 5px" data-bind="visible: $component.FiltroVisible">
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
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000004263</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">61620</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT76R0503461620000000004263</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">CONSORZIO P.R.U. STADIO CONEGL</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000000342</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">11751</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT89I0503411751000000000342</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">GE.CO.VE. IMMOBILIARE S.R.L.</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">alias</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">11702</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT72Y0503411702000000060316</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">GESCO S.R.L.</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">alias</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">01005</td>
                            <td data-bind="text: Rapporto.CodiceCab">11700</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT95R0100511700000000001722</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">GESCO S.R.L.</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">100000001175</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">03069</td>
                            <td data-bind="text: Rapporto.CodiceCab">18465</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT47Y0306918465100000001175</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">PIEVE S.R.L.</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">pippo</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">11702</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT53I0503411702000000003149</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">PIEVE S.R.L.</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">alias conto 000000365990</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">11751</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT18W0503411751000000365990</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">QUERCIA SRL</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">100000001022</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">03069</td>
                            <td data-bind="text: Rapporto.CodiceCab">18465</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT40I0306918465100000001022</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">SAN FERMO 12 S.R.L.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <paginatore params="PagedList: $data">
    <div data-bind="visible: PagedList.Page().length > 0 &amp;&amp; PagedList.PageCount() > 1">
        <!-- ko template: {name: PaginatorTemplate()} -->
    <div class="dataTables_paginate" data-bind="with: PagedList">
        <span data-bind="foreach: ko.utils.range(1, PageCount)">
            <a class="paginate_button current" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)">1</a>
        
            <a class="paginate_button" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)">2</a>
        
            <a class="paginate_button" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)">3</a>
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
                            <div data-bind="css: $component.DebitoreCollapseCss" class="icon-replace icon-expand active"></div>
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.DebitoreBodyVisible" style="display: none;">
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
                                    <label class="control-label"></label>
                                    <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.DebitoreEffettivoAnagraficaSearch">&nbsp;</span>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Codice</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Debitore.Codice">
                                </div>
                            </div>
                        </div>
                        <div data-bind="component: { name: 'anagrafica-search', params: $component.DebitoreEffettivoAnagraficaModel }">
    <div data-bind="visible: Visible" class="modal-layer" style="display: none;">
        <div class="modal-container section" data-bind="with: List">
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
                        <h3 class="titleSection">Dati Beneficiario</h3>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Tipo Anagrafica</label>
                                    <select class="form-control" data-bind="options: $component.TipologieAnagrafica, optionsText: 'V', optionsValue: 'K', value: $component.BeneficiarioAnagraficaModel.TipologiaAnagrafica"><option value="FO">FORNITORI</option></select>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Ragione Sociale</label>
                                    <input type="text" class="form-control" data-bind="value: Beneficiario.Denominazione">
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0">
                                    <label class="control-label"></label>
                                    <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.BeneficiarioAnagraficaSearch">&nbsp;</span>
                                </div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Codice</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Beneficiario.Codice">
                                </div>
                            </div>
                        </div>

                        <div data-bind="component: { name: 'anagrafica-search', params: $component.BeneficiarioAnagraficaModel }">
    <div data-bind="visible: Visible" class="modal-layer" style="display: none;">
        <div class="modal-container section" data-bind="with: List">
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
                        <h3 class="titleSection">Dati Aggiuntivi Beneficiario</h3>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.BeneficiarioCollapseCss" class="icon-replace icon-expand active"></div>
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.BeneficiarioBodyVisible" style="display: none;">
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
                            <div data-bind="css: $component.CreditoreCollapseCss" class="icon-replace icon-expand active"></div>
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.CreditoreBodyVisible" style="display: none;">
                        <div class="row" style="margin-top: 10px">
                            <div class="col-xs-12">
                                <p>Sezione da compilare soltanto se il creditore effettivo è diverso dal beneficiario</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Cognome Nome</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Creditore.Denominazione">
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                                    <label class="control-label">&nbsp;</label>
                                    <span style="display: block" class="icon-replace icon-search active link" data-bind="singleClick: $component.CreditoreEffettivoAnagraficaSearch">&nbsp;</span>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Codice</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Creditore.Codice">
                                </div>
                            </div>
                        </div>

                        <div data-bind="component: { name: 'anagrafica-search', params: $component.CreditoreEffettivoAnagraficaModel }">
    <div data-bind="visible: Visible" class="modal-layer" style="display: none;">
        <div class="modal-container section" data-bind="with: List">
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
                        <h3 class="titleSection">Dati Bonifico</h3>
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
                                    <label class="control-label">
                                        Tipo Bonifico
                                    </label>
                                    <select class="form-control" data-bind="options: $component.IsUrgPOptions, optionsText: 'text', optionsValue: 'value', value: IsUrgP, enable: $component.DispoIsNotInDistinta"><option value="">Ordinario</option><option value="">Urgente</option></select>
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
                                        <select class="form-control" data-bind="enable: $component.CausaleIsoActive, options: $component.TipologieCausaleIso, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: CausaleIso"><option value="">Seleziona</option><option value="BONU">BONU - Pag. di un bonus</option><option value="CASH">CASH - Istruzioni di cash management</option><option value="CBLK">CBLK - Card Bulk Clearing</option><option value="CCRD">CCRD - Pag. carta di credito</option><option value="CORT">CORT - Regolamento relativo a transaz.</option><option value="DCRD">DCRD - Pag. carta di debito</option><option value="DIVI">DIVI - Pag. di dividendi</option><option value="DVPM">DVPM - DeliverAgainstPayment</option><option value="EPAY">EPAY - Pag. tramite online-banking</option><option value="FCOL">FCOL - Fee Collection</option><option value="GOVT">GOVT - Pag. a/da autorita governative</option><option value="HEDG">HEDG - Pag. di operazioni di hedging</option><option value="ICCP">ICCP - Rimborso pag. carta di credito</option><option value="IDCP">IDCP - Rimborso pag. carta di debito</option><option value="INTC">INTC - Pag. tra aziende stesso gruppo</option><option value="INTE">INTE - Pag. di interessi</option><option value="LOAN">LOAN - Trasferimento di un prestito</option><option value="OTHR">OTHR - Altre tipologie di pag.</option><option value="RVPM">RVPM - ReceiveAgainstPayment</option><option value="SECU">SECU - Transaz. relativa la pag. titoli</option><option value="SSBE">SSBE - Transaz. beneficio spese sociali</option><option value="SUPP">SUPP - Pag. verso fornitori</option><option value="TAXS">TAXS - Pag. di tasse</option><option value="TRAD">TRAD - Pag. per transaz. commerciale</option><option value="TREA">TREA - Pag. per operazioni di tesoreria</option><option value="VATX">VATX - Pag. IVA</option><option value="WHLD">WHLD - Pag. tasse trattenute alla fonte</option></select>
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
                            <div data-bind="css: $component.FinalitaCollapseCss " class="icon-replace icon-expand active"></div>
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.FinalitaBodyVisible" style="display: none;">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding-right: 0; padding-left: 20px">
                                    <label class="control-label" style="margin-left: -20px">Finalità del pagamento codificata</label>
                                    <div class="radio" style="font-weight: normal; margin-top: 0">
                                        <input type="radio" name="finalita" value="FinalitaCodificata" data-bind="checked: $component.CurrentFinalita">
                                        <select class="form-control" data-bind="enable: $component.FinalitaCodificataActive, options: $component.TipologieFinalitaPagamento, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: FinalitaPagamento.Codice"><option value="">opzionale</option><option value="ACCT">ACCT - AccountManagement</option><option value="ADCS">ADCS - AdvisoryDonationCopyrightServices</option><option value="ADMG">ADMG - AdministrativeManagement</option><option value="ADVA">ADVA - AdvancePayment</option><option value="AEMP">AEMP - ActiveEmploymentPolicy</option><option value="AGRT">AGRT - AgriculturalTransfer</option><option value="AIRB">AIRB - Air</option><option value="ALLW">ALLW - Allowance </option><option value="ALMY">ALMY - AlimonyPayment</option><option value="ANNI">ANNI - Annuity</option><option value="ANTS">ANTS - AnesthesiaServices</option><option value="AREN">AREN - Accounts Receivables Entry</option><option value="B112">B112 - Trailer Fee Payment</option><option value="BBSC">BBSC - Baby Bonus Scheme </option><option value="BCDM">BCDM - BearerChequeDomestic</option><option value="BCFG">BCFG - BearerChequeForeign</option><option value="BECH">BECH - ChildBenefit</option><option value="BENE">BENE - UnemploymentDisabilityBenefit</option><option value="BEXP">BEXP - BusinessExpenses</option><option value="BFWD">BFWD - Bond Forward</option><option value="BKDF">BKDF - Bank Loan Delayed Draw Funding</option><option value="BKFE">BKFE - Bank Loan Fees</option><option value="BKFM">BKFM - Bank Loan Funding Memo</option><option value="BKIP">BKIP - Bank Loan Accrued Interest Payment</option><option value="BKPP">BKPP - Bank Loan Principal Paydown</option><option value="BLDM">BLDM - BuildingMaintenance</option><option value="BNET">BNET - Bond Forward Netting</option><option value="BOCE">BOCE - Back Office Conversion Entry</option><option value="BONU">BONU - BonusPayment.</option><option value="BR12">BR12 - Trailer Fee Rebate</option><option value="BUSB">BUSB - Bus</option><option value="CAFI">CAFI - Custodian Management fee In-house</option><option value="CASH">CASH - CashManagementTransfer</option><option value="CBFF">CBFF - CapitalBuilding</option><option value="CBFR">CBFR - CapitalBuildingRetirement </option><option value="CBLK">CBLK - Card Bulk Clearing</option><option value="CBTV">CBTV - CableTVBill</option><option value="CCHD">CCHD - Cash compensation, Helplessness, Disability</option><option value="CCIR">CCIR - Cross Currency IRS</option><option value="CCPC">CCPC - CCP Cleared Initial Margin</option><option value="CCPM">CCPM - CCP Cleared Variation Margin</option><option value="CCRD">CCRD - CreditCardPayment </option><option value="CCSM">CCSM - CCP Cleared Initial Margin Segregated Cash</option><option value="CDBL">CDBL - CreditCardBill</option><option value="CDCB">CDCB - CardPayment with CashBack</option><option value="CDCD">CDCD - CashDisbursement</option><option value="CDCS">CDCS - Cash Disbursement with Surcharging</option><option value="CDDP">CDDP - Card Deferred Payment</option><option value="CDEP">CDEP - Credit default event payment</option><option value="CDOC">CDOC - OriginalCredit </option><option value="CDQC">CDQC - QuasiCash </option><option value="CFDI">CFDI - Capital falling due In-house</option><option value="CFEE">CFEE - CancellationFee</option><option value="CGDD">CGDD - CardGeneratedDirectDebit</option><option value="CHAR">CHAR - CharityPayment</option><option value="CLPR">CLPR - CarLoanPrincipalRepayment</option><option value="CMDT">CMDT - CommodityTransfer</option><option value="COLL">COLL - CollectionPayment</option><option value="COMC">COMC - CommercialPayment</option><option value="COMM">COMM - Commission</option><option value="COMT">COMT - ConsumerThirdPartyConsolidatedPayment</option><option value="CORT">CORT - Trade Settlement Payment</option><option value="COST">COST - Costs</option><option value="CPKC">CPKC - Carpark Charges </option><option value="CPYR">CPYR - Copyright</option><option value="CRDS">CRDS - Credit DefaultSwap</option><option value="CRPR">CRPR - Cross Product</option><option value="CRSP">CRSP - Credit Support</option><option value="CRTL">CRTL - Credit Line</option><option value="CSDB">CSDB - CashDisbursement</option><option value="CSLP">CSLP - CompanySocialLoanPaymentToBank</option><option value="CVCF">CVCF - ConvalescentCareFacility</option><option value="DBTC">DBTC - DebitCollectionPayment</option><option value="DCRD">DCRD - Debit Card Payment</option><option value="DEPT">DEPT - Deposit</option><option value="DERI">DERI - Derivatives</option><option value="DIVD">DIVD - Dividend</option><option value="DMEQ">DMEQ - DurableMedicaleEquipment</option><option value="DNTS">DNTS - DentalServices</option><option value="DSMT">DSMT - Printed Order Disbursement</option><option value="DVPM">DVPM - Deliver Against Payment</option><option value="ECPG">ECPG - GuaranteedEPayment</option><option value="ECPR">ECPR - EPaymentReturn</option><option value="ECPU">ECPU - NonGuaranteedEPayment</option><option value="EDUC">EDUC - Education </option><option value="ELEC">ELEC - ElectricityBill</option><option value="ENRG">ENRG - Energies</option><option value="EPAY">EPAY - Epayment</option><option value="EQPT">EQPT - Equity Option</option><option value="EQUS">EQUS - Equity Swap</option><option value="ESTX">ESTX - EstateTax</option><option value="ETUP">ETUP - E-Purse Top Up</option><option value="EXPT">EXPT - Exotic Option</option><option value="EXTD">EXTD - Exchange Traded Derivatives</option><option value="FACT">FACT - Factor Update related payment</option><option value="FAND">FAND - FinancialAidInCaseOfNaturalDisaster</option><option value="FCOL">FCOL - Fee Collection</option><option value="FCPM">FCPM - Late Payment of Fees &amp; Charges </option><option value="FEES">FEES - Fees</option><option value="FERB">FERB - Ferry</option><option value="FIXI">FIXI - Fixed Income</option><option value="FNET">FNET - Futures Netting Payment</option><option value="FORW">FORW - Forward Foreign Exchange</option><option value="FREX">FREX - ForeignExchange</option><option value="FUTR">FUTR - Futures</option><option value="FWBC">FWBC - Forward Broker Owned Cash Collateral</option><option value="FWCC">FWCC - Forward Client Owned Cash Collateral</option><option value="FWLV">FWLV - Foreign Worker Levy </option><option value="FWSB">FWSB - Forward Broker Owned Cash Collateral Segregated</option><option value="FWSC">FWSC - Forward Client Owned Segregated Cash Collateral</option><option value="FXNT">FXNT - Foreign Exchange Related Netting</option><option value="GASB">GASB - GasBill</option><option value="GDDS">GDDS - PurchaseSaleOfGoods</option><option value="GDSV">GDSV - PurchaseSaleOfGoodsAndServices</option><option value="GFRP">GFRP - GuaranteeFundRightsPayment</option><option value="GOVI">GOVI - GovernmentInsurance</option><option value="GOVT">GOVT - GovernmentPayment</option><option value="GSCB">GSCB - PurchaseSaleOfGoodsAndServicesWithCashBack</option><option value="GSTX">GSTX - Goods &amp; Services Tax </option><option value="GVEA">GVEA - Austrian Government Employees Category A</option><option value="GVEB">GVEB - Austrian Government Employees Category B</option><option value="GVEC">GVEC - Austrian Government Employees Category C</option><option value="GVED">GVED - Austrian Government Employees Category D</option><option value="GWLT">GWLT - GovermentWarLegislationTransfer</option><option value="HEDG">HEDG - Hedging</option><option value="HLRP">HLRP - HousingLoanRepayment</option><option value="HLTC">HLTC - HomeHealthCare</option><option value="HLTI">HLTI - HealthInsurance</option><option value="HREC">HREC - Housing Related Contribution</option><option value="HSPC">HSPC - HospitalCare</option><option value="HSTX">HSTX - HousingTax</option><option value="ICCP">ICCP - IrrevocableCreditCardPayment</option><option value="ICRF">ICRF - IntermediateCareFacility</option><option value="IDCP">IDCP - IrrevocableDebitCardPayment</option><option value="IHRP">IHRP - InstalmentHirePurchaseAgreement</option><option value="INPC">INPC - InsurancePremiumCar</option><option value="INSM">INSM - Installment</option><option value="INSU">INSU - InsurancePremium</option><option value="INTC">INTC - IntraCompanyPayment</option><option value="INTE">INTE - Interest</option><option value="INTX">INTX - IncomeTax</option><option value="INVS">INVS - Investment &amp; Securities </option><option value="IVPT">IVPT - Invoice Payment </option><option value="LBIN">LBIN - Lending Buy-In Netting</option><option value="LBRI">LBRI - LaborInsurance</option><option value="LCOL">LCOL - Lending Cash Collateral Free Movement</option><option value="LFEE">LFEE - Lending Fees</option><option value="LICF">LICF - LicenseFee</option><option value="LIFI">LIFI - LifeInsurance</option><option value="LIMA">LIMA - LiquidityManagement</option><option value="LMEQ">LMEQ - Lending Equity marked-to-market  cash collateral</option><option value="LMFI">LMFI - Lending Fixed Income marked-to-market cash collateral</option><option value="LMRK">LMRK - Lending unspecified type of marked-to-market cash collateral</option><option value="LOAN">LOAN - Loan</option><option value="LOAR">LOAR - LoanRepayment</option><option value="LREB">LREB - Lending rebate payments</option><option value="LREV">LREV - Lending Revenue Payments</option><option value="LSFL">LSFL - Lending Claim Payment</option><option value="LTCF">LTCF - LongTermCareFacility</option><option value="MARG">MARG - Daily margin on listed derivatives </option><option value="MBSB">MBSB - MBS Broker Owned Cash Collateral</option><option value="MBSC">MBSC - MBS Client Owned Cash Collateral </option><option value="MCDM">MCDM - MultiCurrenyChequeDomestic</option><option value="MCFG">MCFG - MultiCurrenyChequeForeign</option><option value="MDCS">MDCS - MedicalServices</option><option value="MGCC">MGCC - Futures Initial Margin  </option><option value="MGSC">MGSC - Futures Initial Margin Client Owned Segregated Cash Collateral </option><option value="MSVC">MSVC - MultipleServiceTypes</option><option value="MTUP">MTUP - Mobile Top Up</option><option value="NETT">NETT - Netting</option><option value="NITX">NITX - NetIncomeTax</option><option value="NOWS">NOWS - NotOtherwiseSpecified</option><option value="NWCH">NWCH - NetworkCharge</option><option value="NWCM">NWCM - NetworkCommunication</option><option value="OCCC">OCCC - Client owned OCC pledged collateral</option><option value="OCDM">OCDM - OrderChequeDomestic</option><option value="OCFG">OCFG - OrderChequeForeign</option><option value="OFEE">OFEE - OpeningFee</option><option value="OPBC">OPBC - OTC Option Broker owned Cash collateral </option><option value="OPCC">OPCC - OTC Option Client owned Cash collateral </option><option value="OPSB">OPSB - OTC Option Broker Owned Segregated Cash Collateral </option><option value="OPSC">OPSC - OTC Option Client Owned Cash Segregated Cash Collateral </option><option value="OPTN">OPTN - FX Option</option><option value="OTCD">OTCD - OTC Derivatives</option><option value="OTHR">OTHR - Other</option><option value="OTLC">OTLC - OtherTelecomRelatedBill</option><option value="PADD">PADD - Preauthorized debit</option><option value="PAYR">PAYR - Payroll</option><option value="PENO">PENO - PaymentBasedOnEnforcementOrder</option><option value="PENS">PENS - PensionPayment</option><option value="PHON">PHON - TelephoneBill</option><option value="POPE">POPE - Point of Purchase Entry</option><option value="PPTI">PPTI - PropertyInsurance</option><option value="PRCP">PRCP - PricePayment</option><option value="PRME">PRME - PreciousMetal</option><option value="PTSP">PTSP - PaymentTerms</option><option value="PTXP">PTXP - Property Tax </option><option value="RCKE">RCKE - Re-presented Check Entry</option><option value="RCPT">RCPT - ReceiptPayment</option><option value="RDTX">RDTX - Road Tax </option><option value="REBT">REBT - Rebate </option><option value="REFU">REFU - Refund</option><option value="RENT">RENT - Rent</option><option value="REPO">REPO - Repurchase Agreement</option><option value="RHBS">RHBS - RehabilitationSupport</option><option value="RIMB">RIMB - Reimbursement of a previous erroneous transaction</option><option value="RINP">RINP - RecurringInstallmentPayment</option><option value="RLWY">RLWY - Railway</option><option value="ROYA">ROYA - Royalties</option><option value="RPBC">RPBC - Bi-lateral repo broker owned collateral </option><option value="RPCC">RPCC - Repo client owned collateral </option><option value="RPNT">RPNT - Bi-lateral repo internet netting</option><option value="RPSB">RPSB - Bi-lateral repo broker owned segregated cash collateral </option><option value="RPSC">RPSC - Bi-lateral Repo client owned segregated cash collateral</option><option value="RRBN">RRBN - Round Robin</option><option value="RVPM">RVPM - Receive Against Payment</option><option value="RVPO">RVPO - Reverse Repurchase Agreement</option><option value="SAVG">SAVG - Savings</option><option value="SBSC">SBSC - Securities Buy Sell Sell Buy Back</option><option value="SCIE">SCIE - Single Currency IRS Exotic</option><option value="SCIR">SCIR - Single Currency IRS</option><option value="SCRP">SCRP - Securities Cross Products</option><option value="SCVE">SCVE - PurchaseSaleOfServices</option><option value="SECU">SECU - Securities</option><option value="SEPI">SEPI - Securities Purchase In-house</option><option value="SHBC">SHBC - Broker owned collateral Short Sale</option><option value="SHCC">SHCC - Client owned collateral Short Sale</option><option value="SHSL">SHSL - Short Sell</option><option value="SLEB">SLEB - Securities Lending And Borrowing</option><option value="SLOA">SLOA - SecuredLoan</option><option value="SLPI">SLPI - PaymentSlipInstruction</option><option value="SPLT">SPLT - Split payments</option><option value="SSBE">SSBE - SocialSecurityBenefit</option><option value="STDY">STDY - Study</option><option value="SUBS">SUBS - Subscription</option><option value="SUPP">SUPP - SupplierPayment</option><option value="SWBC">SWBC - Swap Broker owned cash collateral </option><option value="SWCC">SWCC - Swap Client owned cash collateral </option><option value="SWFP">SWFP - Swap contract final payment</option><option value="SWPP">SWPP - Swap contract partial payment</option><option value="SWPT">SWPT - Swaption</option><option value="SWRS">SWRS - Swap contract reset payment</option><option value="SWSB">SWSB - Swaps Broker Owned Segregated Cash Collateral </option><option value="SWSC">SWSC - Swaps Client Owned Segregated Cash Collateral </option><option value="SWUF">SWUF - Swap contract upfront payment</option><option value="TAXR">TAXR - TaxRefund</option><option value="TAXS">TAXS - TaxPayment</option><option value="TBAN">TBAN - TBA pair-off netting</option><option value="TBAS">TBAS - To Be Announced</option><option value="TBBC">TBBC - TBA Broker owned cash collateral</option><option value="TBCC">TBCC - TBA Client owned cash collateral</option><option value="TBIL">TBIL - Telecommunications Bill </option><option value="TCSC">TCSC - Town Council Service Charges </option><option value="TELI">TELI - Telephone-Initiated Transaction</option><option value="TLRF">TLRF - Non-US mutual fund trailer fee payment</option><option value="TLRR">TLRR - Non-US mutual fund trailer fee rebate payment</option><option value="TMPG">TMPG - TMPG claim payment</option><option value="TPRI">TPRI - Tri Party Repo Interest</option><option value="TPRP">TPRP - Tri-party Repo netting</option><option value="TRAD">TRAD - TradeServices</option><option value="TRCP">TRCP - Treasury Cross Product</option><option value="TREA">TREA - TreasuryPayment</option><option value="TRFD">TRFD - TrustFund</option><option value="TRNC">TRNC - TruncatedPaymentSlip</option><option value="TRPT">TRPT - RoadPricing</option><option value="TRVC">TRVC - TravellerCheque</option><option value="UBIL">UBIL - Utilities </option><option value="VATX">VATX - ValueAddedTaxPayment</option><option value="VIEW">VIEW - VisionCare</option><option value="WEBI">WEBI - Internet-Initiated Transaction</option><option value="WHLD">WHLD - WithHolding</option><option value="WTER">WTER - WaterBill</option></select>
                                    </div>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                                    <label class="control-label" style="margin-left: -20px">Finalità del pagamento libera</label>
                                    <div class="radio" style="font-weight: normal; margin-top: 0">
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
                        <h3 class="titleSection">Esito Al beneficiario</h3>
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
                            <div data-bind="css: $component.CvsCollapseCss " class="icon-replace icon-expand active"></div>
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.CvsBodyVisible" style="display: none;">
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
        <!-- NONE -->
        <div data-bind="visible: CurrentSection() == Sections.NONE" style="display: none;">

        </div>
        <!-- SEARCH -->
        <div data-bind="visible: CurrentSection() == Sections.SEARCH" style="">
                <list-disposizioni params="ListDisposizioni: ListDisposizioni, DispoToDelete: DispoToDelete, DispoToAggregate: DispoToAggregate">
    <div data-bind="visible: DeleteSuccessVisible()" style="display: none;">
        <feedback-messages params="Buttons: SuccessButton">
    <div class="riquadro">
        <div data-bind="visible: PageTitle != null" style="display: none;">
            <div class="flag" data-bind="css: TitleCssClass">&nbsp;</div>
            <h1 data-bind="text: PageTitle"></h1>
        </div>
        <div class="messagePanel visible success" data-bind="css: CssClass">
            <h3 class="titleSection" data-bind="text: Title">Esito Operazione</h3>
            <p>
                <strong style="white-space: pre-wrap" data-bind="text: Message">Operazione effettuata con successo.</strong>
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
    <div data-bind="visible: !DeleteSuccessVisible()">
        <div class="riquadro">
            <div>
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Bonifici: creazione distinte</h1>
            </div>
            <validation-messages params="Validation: $component.ValidationConfirm">
    <div data-bind="visible: ValidationSectionVisible" style="display: none;">
        <div class="messagePanel error" style="display: block">
            <h3 class="titleSection">
                Errori
            </h3>
            <ul data-bind="foreach: Validation"></ul>
        </div>
    </div>
</validation-messages>
            <validation-messages params="Validation: ListDisposizioni.Validation">
    <div data-bind="visible: ValidationSectionVisible" style="display: none;">
        <div class="messagePanel error" style="display: block">
            <h3 class="titleSection">
                Errori
            </h3>
            <ul data-bind="foreach: Validation"></ul>
        </div>
    </div>
</validation-messages>
            <!-- ko with: ListDisposizioni -->
            <div class="table-responsive">
                <div class="row">
                    <div class="form-group">
                        <div class="form-field-input col-xs-4">
                            <label class="control-label">
                                Azienda
                            </label>
                            <div class="form-field">
                                <select class="form-control" data-bind="options: $component.Aziende, optionsCaption: 'Tutti', optionsText: 'RagioneSociale', optionsValue: 'Id', value: PagingFilter.IdAzienda"><option value="">Tutti</option><option value="12">CONSORZIO P.R.U. STADIO CONEGL</option><option value="318683">GE.CO.VE. IMMOBILIARE S.R.L.</option><option value="9">GESCO S.R.L.</option><option value="633660">PIEVE S.R.L.</option><option value="8">QUERCIA SRL</option><option value="514369">SAN FERMO 12 S.R.L.</option><option value="13">SAR.MAR. SPA</option></select>
                            </div>
                        </div>
                        <div class="form-field-input col-xs-4">
                            <label class="control-label">
                                Banca
                            </label>
                            <div class="form-field">
                                <select class="form-control" data-bind="options: $component.Banche, optionsCaption: 'Tutti', optionsText: 'Descrizione', optionsValue: 'CodiceAbi', value: PagingFilter.CodiceAbi"><option value="">Tutti</option></select>
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
                <div class="dataTables_wrapper" style="margin-top: 10px">
                    <table class="dataTable table">
                        <thead>
                            <tr>
                                <th data-bind="css: ThCss('1'), singleClick: SortToggle('1')" style="width: 90px" class="sorting_desc">
                                    Importo
                                </th>
                                <th style="width: 80px">
                                    Divisa
                                </th>
                                <th data-bind="css: ThCss('2'), singleClick: SortToggle('2')" style="width: 60px" class="sorting">
                                    ABI
                                </th>
                                <th data-bind="css: ThCss('3'), singleClick: SortToggle('3')" style="width: 60px" class="sorting">
                                    CAB
                                </th>
                                <th data-bind="css: ThCss('4'), singleClick: SortToggle('4')" class="sorting">
                                    Rapporto
                                </th>
                                <th data-bind="css: ThCss('5'), singleClick: SortToggle('5')" style="width: 100px" class="sorting">
                                    Beneficiario
                                </th>
                                <th data-bind="css: ThCss('6'), singleClick: SortToggle('6')" class="sorting">
                                    IBAN Beneficiario
                                </th>
                                <th>
                                    Esito benef
                                </th>
                                <th data-bind="click: $component.AggregateSelectAllToggle">
                                    Aggrega
                                </th>
                                <th data-bind="click: $component.DeleteSelectAllToggle">
                                    Elimina
                                </th>
                                <th>
                                    Modifica
                                </th>
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: Page">
                            <tr>
                                <td data-bind="numericTextSeparator: Importo" class="text-right">112.211,91</td>
                                <td data-bind="text: Divisa">EUR</td>
                                <td data-bind="text: Ordinante.Abi">05034</td>
                                <td data-bind="text: Ordinante.Cab">61620</td>
                                <td data-bind="text: Ordinante.Conto">000000004263</td>
                                <td data-bind="text: CreditoreOBeneficiario.Denominazione">COMUNE DI SAN  MARTINO B.A. TESORERIA</td>
                                <td data-bind="text: Beneficiario.Iban">IT39W0521659790000000000730</td>
                                <td data-bind="text: HasEsitoAlBeneficiario() ? 'Si' : 'No'">No</td>
                                <td class="text-center">
                                    <input type="checkbox" data-bind="checkedValue: $data, checked: $component.DispoToAggregate.indexOf($data) > -1, click: $component.AggregateCheck" value="[object Object]">
                                </td>
                                <td class="text-center">
                                    <input type="checkbox" data-bind="checkedValue: $data, checked: $component.DispoToDelete.indexOf($data) > -1, click: $component.DeleteCheck" value="[object Object]">
                                </td>
                                <td style="cursor: pointer" data-bind="click: $component.EditBonifico" class="text-center">
                                    <a href="#">
                                        Modifica
                                    </a>
                                </td>
                            </tr>
                        
                            <tr>
                                <td data-bind="numericTextSeparator: Importo" class="text-right">41.211,00</td>
                                <td data-bind="text: Divisa">EUR</td>
                                <td data-bind="text: Ordinante.Abi">05034</td>
                                <td data-bind="text: Ordinante.Cab">61620</td>
                                <td data-bind="text: Ordinante.Conto">000000004263</td>
                                <td data-bind="text: CreditoreOBeneficiario.Denominazione">COMUNE DI SAN  MARTINO B.A. TESORERIA</td>
                                <td data-bind="text: Beneficiario.Iban">IT39W0521659790000000000730</td>
                                <td data-bind="text: HasEsitoAlBeneficiario() ? 'Si' : 'No'">No</td>
                                <td class="text-center">
                                    <input type="checkbox" data-bind="checkedValue: $data, checked: $component.DispoToAggregate.indexOf($data) > -1, click: $component.AggregateCheck" value="[object Object]">
                                </td>
                                <td class="text-center">
                                    <input type="checkbox" data-bind="checkedValue: $data, checked: $component.DispoToDelete.indexOf($data) > -1, click: $component.DeleteCheck" value="[object Object]">
                                </td>
                                <td style="cursor: pointer" data-bind="click: $component.EditBonifico" class="text-center">
                                    <a href="#">
                                        Modifica
                                    </a>
                                </td>
                            </tr>
                        
                            <tr>
                                <td data-bind="numericTextSeparator: Importo" class="text-right">111,00</td>
                                <td data-bind="text: Divisa">EUR</td>
                                <td data-bind="text: Ordinante.Abi">05034</td>
                                <td data-bind="text: Ordinante.Cab">61620</td>
                                <td data-bind="text: Ordinante.Conto">000000004263</td>
                                <td data-bind="text: CreditoreOBeneficiario.Denominazione">COMUNE DI SAN  MARTINO B.A. TESORERIA</td>
                                <td data-bind="text: Beneficiario.Iban">IT39W0521659790000000000730</td>
                                <td data-bind="text: HasEsitoAlBeneficiario() ? 'Si' : 'No'">No</td>
                                <td class="text-center">
                                    <input type="checkbox" data-bind="checkedValue: $data, checked: $component.DispoToAggregate.indexOf($data) > -1, click: $component.AggregateCheck" value="[object Object]">
                                </td>
                                <td class="text-center">
                                    <input type="checkbox" data-bind="checkedValue: $data, checked: $component.DispoToDelete.indexOf($data) > -1, click: $component.DeleteCheck" value="[object Object]">
                                </td>
                                <td style="cursor: pointer" data-bind="click: $component.EditBonifico" class="text-center">
                                    <a href="#">
                                        Modifica
                                    </a>
                                </td>
                            </tr>
                        
                            <tr>
                                <td data-bind="numericTextSeparator: Importo" class="text-right">78,00</td>
                                <td data-bind="text: Divisa">EUR</td>
                                <td data-bind="text: Ordinante.Abi">05034</td>
                                <td data-bind="text: Ordinante.Cab">61620</td>
                                <td data-bind="text: Ordinante.Conto">000000004263</td>
                                <td data-bind="text: CreditoreOBeneficiario.Denominazione">COMUNE DI SAN  MARTINO B.A. TESORERIA</td>
                                <td data-bind="text: Beneficiario.Iban">IT39W0521659790000000000730</td>
                                <td data-bind="text: HasEsitoAlBeneficiario() ? 'Si' : 'No'">No</td>
                                <td class="text-center">
                                    <input type="checkbox" data-bind="checkedValue: $data, checked: $component.DispoToAggregate.indexOf($data) > -1, click: $component.AggregateCheck" value="[object Object]">
                                </td>
                                <td class="text-center">
                                    <input type="checkbox" data-bind="checkedValue: $data, checked: $component.DispoToDelete.indexOf($data) > -1, click: $component.DeleteCheck" value="[object Object]">
                                </td>
                                <td style="cursor: pointer" data-bind="click: $component.EditBonifico" class="text-center">
                                    <a href="#">
                                        Modifica
                                    </a>
                                </td>
                            </tr>
                        </tbody>
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
        <div class="margin-bottom20 text-right">
            <input type="button" class="btn btn-primary" value="Conferma" data-bind="singleClick: Confirm">
        </div>
    </div>
</list-disposizioni>
        </div>
    </div>

    <div id="eed100d7ffc449bf818f71d07daf62b2_7">
        
<div id="eed100d7ffc449bf818f71d07daf62b2_8" class="hide">
    <div class="riquadro">
        
        <div data-bind="html: TitleBlock"></div>
        
        <validation-messages params="Validation: Validation, TopicId: 'eed100d7ffc449bf818f71d07daf62b2_9'">
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
        var CHALLENGE_CONTINUE = 'eed100d7ffc449bf818f71d07daf62b2_9validation-messages.CHALLENGE';

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
            $('#eed100d7ffc449bf818f71d07daf62b2_8').removeClass('hide');
        };
        self.Hide = function () {
            $('#eed100d7ffc449bf818f71d07daf62b2_8').addClass('hide');
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
</div>

<script type="text/javascript">
    var PROFILABLE_DISPOSIZIONI = {"CAUSALE_ISO":[{"K":"BONU","V":"BONU - Pag. di un bonus"},{"K":"CASH","V":"CASH - Istruzioni di cash management"},{"K":"CBLK","V":"CBLK - Card Bulk Clearing"},{"K":"CCRD","V":"CCRD - Pag. carta di credito"},{"K":"CORT","V":"CORT - Regolamento relativo a transaz."},{"K":"DCRD","V":"DCRD - Pag. carta di debito"},{"K":"DIVI","V":"DIVI - Pag. di dividendi"},{"K":"DVPM","V":"DVPM - DeliverAgainstPayment"},{"K":"EPAY","V":"EPAY - Pag. tramite online-banking"},{"K":"FCOL","V":"FCOL - Fee Collection"},{"K":"GOVT","V":"GOVT - Pag. a/da autorita governative"},{"K":"HEDG","V":"HEDG - Pag. di operazioni di hedging"},{"K":"ICCP","V":"ICCP - Rimborso pag. carta di credito"},{"K":"IDCP","V":"IDCP - Rimborso pag. carta di debito"},{"K":"INTC","V":"INTC - Pag. tra aziende stesso gruppo"},{"K":"INTE","V":"INTE - Pag. di interessi"},{"K":"LOAN","V":"LOAN - Trasferimento di un prestito"},{"K":"OTHR","V":"OTHR - Altre tipologie di pag."},{"K":"RVPM","V":"RVPM - ReceiveAgainstPayment"},{"K":"SECU","V":"SECU - Transaz. relativa la pag. titoli"},{"K":"SSBE","V":"SSBE - Transaz. beneficio spese sociali"},{"K":"SUPP","V":"SUPP - Pag. verso fornitori"},{"K":"TAXS","V":"TAXS - Pag. di tasse"},{"K":"TRAD","V":"TRAD - Pag. per transaz. commerciale"},{"K":"TREA","V":"TREA - Pag. per operazioni di tesoreria"},{"K":"VATX","V":"VATX - Pag. IVA"},{"K":"WHLD","V":"WHLD - Pag. tasse trattenute alla fonte"}],"CAUSALE_VALUTARIA":[{"K":"9984","V":"Acquisti/vendite tra banche residenti di altre attività sull'estero MV - 9984"},{"K":"9983","V":"Acquisti/vendite tra banche residenti di valori mobiliari e derivati MV - 9983"},{"K":"9850","V":"Acquisti/vendite, da/a banche residenti, di altre attività sull'estero MV/CVS(f) - 9850"},{"K":"9851","V":"Acquisti/vendite, da/a banche residenti, di altre attività sull'estero MV/CVS(f) - 9851"},{"K":"9849","V":"Acquisti/vendite, da/a banche residenti, di beni e diritti immobiliari MV/CVS(f) - 9849"},{"K":"9842","V":"Acquisti/vendite, da/a banche residenti, di partecipazioni MV/CVS(f) - 9842"},{"K":"9843","V":"Acquisti/vendite, da/a banche residenti, di partecipazioni MV/CVS(f) - 9843"},{"K":"9848","V":"Acquisti/vendite, da/a banche residenti, di strumenti derivati MV/CVS(f) - 9848"},{"K":"9846","V":"Acquisti/vendite, da/a banche residenti, di strumenti di mercato monetario MV/CVS(f) - 9846"},{"K":"9847","V":"Acquisti/vendite, da/a banche residenti, di strumenti di mercato monetario MV/CVS(f) - 9847"},{"K":"9844","V":"Acquisti/vendite, da/a banche residenti, di titoli azionari MV/CVS(f) - 9844"},{"K":"9845","V":"Acquisti/vendite, da/a banche residenti, di titoli obbligazionari MV/CVS(f) - 9845"},{"K":"23","V":"Acquisto di merce all'estero che non viene importata CVS(m) - 23"},{"K":"21","V":"Acquisto di merce all'estero per integrazione forniture CVS(m) - 21"},{"K":"22","V":"Acquisto di merce all'estero per la rivendita in transito (transito acquisto) CVS(m) - 22"},{"K":"7032","V":"Acquisto/vendita contro euro di BB in valuta con banche residenti MV - 7032"},{"K":"7031","V":"Acquisto/vendita contro euro di BB in valuta con cambiavalute residenti MV - 7031"},{"K":"7030","V":"Acquisto/vendita contro euro di BB in valuta con clientela residente MV - 7030"},{"K":"7033","V":"Acquisto/vendita contro euro di BB in valuta con non residenti MV - 7033"},{"K":"7034","V":"Acquisto/vendita di BB in valuta con banche residenti MV - 7034"},{"K":"7035","V":"Acquisto/vendita di BB in valuta con non residenti MV - 7035"},{"K":"9960","V":"Adeguamento valore contabile crediti MV - 9960"},{"K":"8661","V":"Altre attività a breve termine (investimenti esteri)- banche MV - 8661"},{"K":"661","V":"Altre attività a breve termine (investimenti esteri)- non banche MV/CVS(f) - 661"},{"K":"8660","V":"Altre attività a breve termine (investimenti italiani) - banche MV - 8660"},{"K":"660","V":"Altre attività a breve termine (investimenti italiani)- non banche MV/CVS(f) - 660"},{"K":"8663","V":"Altre attività a medio e lungo termine (investimenti esteri) - banche MV - 8663"},{"K":"663","V":"Altre attività a medio e lungo termine (investimenti esteri)- non banche MV/CVS(f) - 663"},{"K":"8662","V":"Altre attività a medio e lungo termine (investimenti italiani) -banche MV - 8662"},{"K":"662","V":"Altre attività a medio e lungo termine (investimenti italiani)- non banche MV/CVS(f) - 662"},{"K":"6619","V":"Altre transazioni governative MV/CVS(nm) - 6619"},{"K":"628","V":"Altri regolamenti connessi a strumenti derivati MV/CVS(f) - 628"},{"K":"629","V":"Altri regolamenti connessi a strumenti derivati MV/CVS(f) - 629"},{"K":"8629","V":"Altri regolamenti connessi a strumenti derivati emessi da non residenti - banche MV - 8629"},{"K":"8628","V":"Altri regolamenti connessi a strumenti derivati emessi da residenti - banche MV - 8628"},{"K":"1112","V":"Altri regolamenti per tecnologia MV/CVS(nm) - 1112"},{"K":"6708","V":"Altri servizi agricoli ed estrattivi MV/CVS(nm) - 6708"},{"K":"6685","V":"Altri servizi aziendali MV/CVS(nm) - 6685"},{"K":"1306","V":"Altri servizi culturali MV/CVS(nm) - 1306"},{"K":"6709","V":"Altri servizi forniti tra imprese controllate MV/CVS(nm) - 6709"},{"K":"6711","V":"Altri trasferimenti in conto capitale MV - 6711"},{"K":"642","V":"Ammortamenti di prestiti a breve termine - non banche MV/CVS(f) - 642"},{"K":"643","V":"Ammortamenti di prestiti a medio e lungo termine - non banche MV/CVS(f) - 643"},{"K":"8642","V":"Ammortamenti di prestiti e finanziamenti a breve termine con non residenti - banche MV - 8642"},{"K":"8643","V":"Ammortamenti di prestiti e finanziamenti a medio e lungo termine - banche MV - 8643"},{"K":"9913","V":"Arbitraggi MV - 9913"},{"K":"6686","V":"Assegni, effetti, altri valori cambiari non onorati MV - 6686"},{"K":"1108","V":"Assistenza tecnica connessa a cessioni e diritti di sfruttamento MV/CVS(nm) - 1108"},{"K":"8602","V":"Assunzione di partecipazioni al capitale di OO.II. non monetari - banche MV - 8602"},{"K":"602","V":"Assunzione di partecipazioni al capitale di OO.II. non monetari - non banche MV/CVS(f) - 602"},{"K":"600","V":"Assunzione di partecipazioni non rappresentate da titoli - non banche MV/CVS(f) - 600"},{"K":"8600","V":"Assunzione di partecipazioni rappresentate o meno da titoli - banche MV - 8600"},{"K":"1307","V":"Audiovisivi e servizi collegati MV/CVS(nm) - 1307"},{"K":"204","V":"Biglietti aerei MV/CVS(nm) - 204"},{"K":"202","V":"Biglietti marittimi MV/CVS(nm) - 202"},{"K":"212","V":"Biglietti terrestri MV/CVS(nm) - 212"},{"K":"218","V":"Bunkeraggi e provviste di bordo MV/CVS(nm) - 218"},{"K":"6630","V":"Canoni e fitti MV/CVS(nm) - 6630"},{"K":"8603","V":"Cessione di partecipazioni al capitale di OO.II. non monetari - banche MV - 8603"},{"K":"603","V":"Cessione di partecipazioni al capitale di OO.II. non monetari - non banche MV/CVS(f) - 603"},{"K":"601","V":"Cessione di partecipazioni non rappresentate da titoli - non banche MV/CVS(f) - 601"},{"K":"8601","V":"Cessione di partecipazioni rappresentate o meno da titoli - banche MV - 8601"},{"K":"1100","V":"Cessioni di brevetti MV/CVS(nm) - 1100"},{"K":"1106","V":"Cessioni di invenzioni MV/CVS(nm) - 1106"},{"K":"1102","V":"Cessioni di know how MV/CVS(nm) - 1102"},{"K":"1118","V":"Cessioni di marchi di fabbrica, modelli e disegni MV/CVS(nm) - 1118"},{"K":"8706","V":"Commissioni e competenze (banche) MV - 8706"},{"K":"9855","V":"Commissioni e competenze in valuta addebitate/accreditate a controparte residente MV - 9855"},{"K":"6632","V":"Compensi di mediazione MV/CVS(nm) - 6632"},{"K":"6633","V":"Compensi per contratti d'agenzia MV/CVS(nm) - 6633"},{"K":"6634","V":"Compensi per contratti di commissione MV/CVS(nm) - 6634"},{"K":"6706","V":"Compensi per servizi finanziari MV/CVS(nm) - 6706"},{"K":"6631","V":"Compensi vari MV/CVS(nm) - 6631"},{"K":"6620","V":"Contributi da/a Organismi Internazionali MV/CVS(nm) - 6620"},{"K":"6605","V":"Contributi previdenziali MV/CVS(nm) - 6605"},{"K":"3660","V":"D.L. 25.9.01 n.350 - Altre attività a breve termine (investimenti italiani)- non banche MV/CVS(f) - 3660"},{"K":"3662","V":"D.L. 25.9.01 n.350 - Altre attività a medio e lungo termine (investimenti italiani)- non banche MV/CVS(f) - 3662"},{"K":"3629","V":"D.L. 25.9.01 n.350 - Altri regolamenti connessi a strumenti derivati MV/CVS(f) - 3629"},{"K":"3642","V":"D.L. 25.9.01 n.350 - Ammortamenti di prestiti a breve termine - non banche MV/CVS(f) - 3642"},{"K":"3643","V":"D.L. 25.9.01 n.350 - Ammortamenti di prestiti a medio e lungo termine - non banche MV/CVS(f) - 3643"},{"K":"3601","V":"D.L. 25.9.01 n.350 - Cessione di partecipazioni non rappresentate da titoli - non banche MV/CVS(nr) - 3601"},{"K":"3609","V":"D.L. 25.9.01 n.350 - Disinvestimenti di strumenti mercato monetario con codifica ISIN - non banche MV/CVS(nr) - 3609"},{"K":"3611","V":"D.L. 25.9.01 n.350 - Disinvestimenti di strumenti mercato monetario senza codifica ISIN - non banche MV/CVS(nr) - 3611"},{"K":"3605","V":"D.L. 25.9.01 n.350 - Disinvestimenti di titoli azionari e quote di fondi comuni - non banche MV/CVS(nr) - 3605"},{"K":"3607","V":"D.L. 25.9.01 n.350 - Disinvestimenti di titoli obbligazionari - non banche MV/CVS(nr) - 3607"},{"K":"3651","V":"D.L. 25.9.01 n.350 - Disinvestimenti in beni e diritti immobiliari - non banche MV/CVS(f) - 3651"},{"K":"3627","V":"D.L. 25.9.01 n.350 - Liquidazione per differenza su altri strumenti derivati MV/CVS(f) - 3627"},{"K":"3632","V":"D.L. 25.9.01 n.350 - Liquidazione per differenza su strumenti derivati MV/CVS(f) - 3632"},{"K":"3622","V":"D.L. 25.9.01 n.350 - Margini iniziali su strumenti derivati trattati su mercati esteri - non banche MV/CVS(f) - 3622"},{"K":"3652","V":"D.L. 25.9.01 n.350 - Movimentazione C/C e depositi all'estero di residenti - non banche MV/CVS(f) - 3652"},{"K":"3625","V":"D.L. 25.9.01 n.350 - Premi su strumenti derivati emessi da non residenti - non banche MV/CVS(f) - 3625"},{"K":"3645","V":"D.L. 25.9.01 n.350 - Riporti e pronti contro termine su titoli esteri (estinzioni) - non banche MV/CVS(f) - 3645"},{"K":"3647","V":"D.L. 25.9.01 n.350 - Riporti e pronti contro termine su titoli italiani (estinzioni) - non banche MV/CVS(f) - 3647"},{"K":"3308","V":"D.L. 25.9.01 n.350 - Versamento di BB in euro e valuta MV - 3308"},{"K":"3310","V":"D.L. 25.9.01 n.350 - Versamento di mezzi di pagamento in euro e valuta MV - 3310"},{"K":"8528","V":"Dietimi regolati con non residenti su valori mobiliari emessi da non residenti - banche MV - 8528"},{"K":"528","V":"Dietimi regolati con non residenti su valori mobiliari emessi da non residenti - non banche MV/CVS(nm) - 528"},{"K":"8527","V":"Dietimi regolati con non residenti su valori mobiliari emessi da residenti - banche MV/CVS(nm) - 8527"},{"K":"527","V":"Dietimi regolati con non residenti su valori mobiliari emessi da residenti - non banche MV/CVS(nm) - 527"},{"K":"9856","V":"Dietimi regolati con residenti su valori mobiliari emessi da non residenti MV/CVS(nm) - 9856"},{"K":"1203","V":"Diritti d'autore - altri MV/CVS(nm) - 1203"},{"K":"1202","V":"Diritti d'autore - opere letterarie MV/CVS(nm) - 1202"},{"K":"1201","V":"Diritti d'autore - opere musicali MV/CVS(nm) - 1201"},{"K":"1305","V":"Diritti d'immagine MV/CVS(nm) - 1305"},{"K":"1101","V":"Diritti di sfruttamento di brevetti MV/CVS(nm) - 1101"},{"K":"1117","V":"Diritti di sfruttamento di marchi di fabbrica, modelli, disegni e know-how MV/CVS(nm) - 1117"},{"K":"8609","V":"Disinvestimenti di strumenti mercato monetario con codifica ISIN - banche (2) MV/CVS(nr) - 8609"},{"K":"609","V":"Disinvestimenti di strumenti mercato monetario con codifica ISIN - non banche MV/CVS(f) - 609"},{"K":"8611","V":"Disinvestimenti di strumenti mercato monetario senza codifica ISIN - banche (2) MV/CVS(nr) - 8611"},{"K":"611","V":"Disinvestimenti di strumenti mercato monetario senza codifica ISIN - non banche MV/CVS(f) - 611"},{"K":"8605","V":"Disinvestimenti di titoli azionari e quote di fondi comuni - banche (2) MV/CVS(nr) - 8605"},{"K":"605","V":"Disinvestimenti di titoli azionari e quote di fondi comuni - non banche MV/CVS(f) - 605"},{"K":"8607","V":"Disinvestimenti di titoli obbligazionari - banche (2) MV/CVS(nr) - 8607"},{"K":"607","V":"Disinvestimenti di titoli obbligazionari - non banche MV/CVS(f) - 607"},{"K":"8651","V":"Disinvestimenti in beni e diritti immobiliari - banche MV - 8651"},{"K":"651","V":"Disinvestimenti in beni e diritti immobiliari - non banche MV/CVS(f) - 651"},{"K":"8521","V":"Dividendi - banche MV - 8521"},{"K":"521","V":"Dividendi - non banche MV/CVS(nm) - 521"},{"K":"640","V":"Erogazioni di prestiti a breve termine - non banche MV/CVS(f) - 640"},{"K":"641","V":"Erogazioni di prestiti a medio e lungo termine - non banche MV/CVS(f) - 641"},{"K":"8640","V":"Erogazioni di prestiti e finanziamenti a breve termine con non residenti - banche MV - 8640"},{"K":"8641","V":"Erogazioni di prestiti e finanziamenti a medio e lungo termine - banche MV - 8641"},{"K":"8670","V":"Escussione fidejussioni per operazioni correnti mercantili - banche MV - 8670"},{"K":"670","V":"Escussione fidejussioni per operazioni correnti mercantili - non banche MV/CVS(nm) - 670"},{"K":"8671","V":"Escussione fidejussioni per operazioni correnti non mercantili - banche MV - 8671"},{"K":"671","V":"Escussione fidejussioni per operazioni correnti non mercantili - non banche MV/CVS(nm) - 671"},{"K":"8672","V":"Escussione fidejussioni per operazioni finanziarie - banche MV - 8672"},{"K":"672","V":"Escussione fidejussioni per operazioni finanziarie - non banche MV/CVS(nm) - 672"},{"K":"8673","V":"Escussione fidejussioni per operazioni interne o estero / estero - banche MV - 8673"},{"K":"673","V":"Escussione fidejussioni per operazioni interne o estero / estero - non banche MV/CVS(nm) - 673"},{"K":"30","V":"Esportazione in definitiva CVS(m) - 30"},{"K":"31","V":"Esportazione in leasing CVS(m) - 31"},{"K":"32","V":"Esportazione per esecuzione di lavori all'estero CVS(m) - 32"},{"K":"33","V":"Esportazione temporanea per lavorazione per conto di residenti CVS(m) - 33"},{"K":"9815","V":"Finanziamenti in valuta a residenti per altri motivi MV - 9815"},{"K":"9814","V":"Finanziamenti in valuta a residenti per esportazioni di beni e servizi MV - 9814"},{"K":"9813","V":"Finanziamenti in valuta a residenti per importazioni di beni e servizi MV - 9813"},{"K":"9820","V":"Finanziamenti in valuta passati a sofferenza / trasformati in partecipazione MV - 9820"},{"K":"1110","V":"Formazione del personale MV/CVS(nm) - 1110"},{"K":"10","V":"Importazione in definitiva CVS(m) - 10"},{"K":"11","V":"Importazione in leasing CVS(m) - 11"},{"K":"13","V":"Importazione in temporanea (o in regime di sospensione fiscale) CVS(m) - 13"},{"K":"15","V":"Importazioni temporanee diverse CVS(m) - 15"},{"K":"6636","V":"Imposte e tasse MV/CVS(nm) - 6636"},{"K":"9981","V":"Incasso di effetti a carico di non residenti scontati a residenti MV - 9981"},{"K":"6675","V":"Indennizzi SACE MV/CVS(nm) - 6675"},{"K":"6638","V":"Indennizzi, penali, risarcimento danni MV/CVS(nm) - 6638"},{"K":"6661","V":"Ingaggi e premi a sportivi MV/CVS(nm) - 6661"},{"K":"524","V":"Interessi su depositi - non banche MV/CVS(nm) - 524"},{"K":"8524","V":"Interessi su depositi e conti - banche MV - 8524"},{"K":"512","V":"Interessi su prestiti - non banche MV/CVS(nm) - 512"},{"K":"8512","V":"Interessi su prestiti e finanziamenti - banche MV - 8512"},{"K":"9854","V":"Interessi, redditi, dividendi in valuta con controparte residente MV - 9854"},{"K":"8650","V":"Investimenti in beni e diritti immobiliari - banche MV - 8650"},{"K":"650","V":"Investimenti in beni e diritti immobiliari - non banche MV/CVS(f) - 650"},{"K":"8608","V":"Investimenti in strumenti mercato monetario con codifica ISIN - banche (1) MV/CVS(nr) - 8608"},{"K":"608","V":"Investimenti in strumenti mercato monetario con codifica ISIN - non banche MV/CVS(f) - 608"},{"K":"8610","V":"Investimenti in strumenti mercato monetario senza codifica ISIN - banche (1) MV/CVS(nr) - 8610"},{"K":"610","V":"Investimenti in strumenti mercato monetario senza codifica ISIN - non banche MV/CVS(f) - 610"},{"K":"8604","V":"Investimenti in titoli azionari e quote di fondi comuni - banche (1) MV/CVS(nr) - 8604"},{"K":"604","V":"Investimenti in titoli azionari e quote di fondi comuni - non banche MV/CVS(f) - 604"},{"K":"8606","V":"Investimenti in titoli obbligazionari - banche (1) MV/CVS(nr) - 8606"},{"K":"606","V":"Investimenti in titoli obbligazionari - non banche MV/CVS(f) - 606"},{"K":"1109","V":"Invio di tecnici ed esperti MV/CVS(nm) - 1109"},{"K":"106","V":"Lavorazioni per conto MV - 106"},{"K":"6701","V":"Lavori e impianti all'estero MV/CVS(nm) - 6701"},{"K":"6702","V":"Lavori e impianti in Italia MV/CVS(nm) - 6702"},{"K":"114","V":"Leasing (non banche) MV - 114"},{"K":"8114","V":"Leasing finanziario (banche) MV - 8114"},{"K":"8115","V":"Leasing operativo (banche) MV - 8115"},{"K":"8626","V":"Liquidazione per differenza su altri strumenti derivati MV - 8626"},{"K":"8627","V":"Liquidazione per differenza su altri strumenti derivati MV - 8627"},{"K":"626","V":"Liquidazione per differenza su altri strumenti derivati MV/CVS(f) - 626"},{"K":"627","V":"Liquidazione per differenza su altri strumenti derivati MV/CVS(f) - 627"},{"K":"8631","V":"Liquidazione per differenza su strumenti derivati MV - 8631"},{"K":"8632","V":"Liquidazione per differenza su strumenti derivati MV - 8632"},{"K":"631","V":"Liquidazione per differenza su strumenti derivati MV/CVS(f) - 631"},{"K":"632","V":"Liquidazione per differenza su strumenti derivati MV/CVS(f) - 632"},{"K":"7051","V":"MP emessi da non residenti in euro e valuta negoziati contro euro con cambiavalute residenti MV - 7051"},{"K":"7053","V":"MP emessi da non residenti in euro e valuta negoziati contro euro con non residenti MV - 7053"},{"K":"7050","V":"MP emessi da non residenti in euro e valuta negoziati contro euro con residenti MV - 7050"},{"K":"7054","V":"MP emessi da non residenti in euro e valuta versati su conti di non residenti MV - 7054"},{"K":"7052","V":"MP emessi da non residenti in euro e valuta versati su conti di residenti MV - 7052"},{"K":"7055","V":"MP emessi da residenti in euro e valuta negoziati contro euro con non residenti MV - 7055"},{"K":"7056","V":"MP emessi da residenti in euro e valuta versati su conti di non residenti MV - 7056"},{"K":"9966","V":"Mancato esercizio di opzioni MV - 9966"},{"K":"1113","V":"Manutenzione e riparazione computer MV/CVS(nm) - 1113"},{"K":"8621","V":"Margini giornalieri su strumenti derivati emessi da non residenti - banche MV - 8621"},{"K":"621","V":"Margini giornalieri su strumenti derivati emessi da non residenti - non banche MV/CVS(f) - 621"},{"K":"620","V":"Margini giornalieri su strumenti derivati emessi da residenti - non banche MV/CVS(f) - 620"},{"K":"8622","V":"Margini iniziali su strumenti derivati trattati su mercati esteri - banche MV - 8622"},{"K":"622","V":"Margini iniziali su strumenti derivati trattati su mercati esteri - non banche MV/CVS(f) - 622"},{"K":"623","V":"Margini iniziali su strumenti derivati trattati su mercato italiano - non banche MV/CVS(f) - 623"},{"K":"652","V":"Movimentazione C/C e depositi all'estero di residenti - non banche MV/CVS(f) - 652"},{"K":"8694","V":"Movimentazione di conti \"loro\" MV - 8694"},{"K":"8692","V":"Movimentazione di conti \"nostri\" MV - 8692"},{"K":"8684","V":"Movimentazione di depositi attivi a breve termine - banche MV - 8684"},{"K":"8686","V":"Movimentazione di depositi attivi a medio/lungo termine - banche MV - 8686"},{"K":"8685","V":"Movimentazione di depositi passivi a breve termine - banche MV - 8685"},{"K":"8687","V":"Movimentazione di depositi passivi a medio/lungo termine - banche MV - 8687"},{"K":"9980","V":"Negoziazioni con non residenti di effetti a carico di residenti MV - 9980"},{"K":"9901","V":"Negoziazioni valuta contro euro con non residenti MV - 9901"},{"K":"9905","V":"Negoziazioni valuta contro euro con residenti MV - 9905"},{"K":"203","V":"Noli e noleggi aerei MV/CVS(nm) - 203"},{"K":"201","V":"Noli e noleggi marittimi MV/CVS(nm) - 201"},{"K":"205","V":"Noli e noleggi terrestri MV/CVS(nm) - 205"},{"K":"207","V":"Noli e noleggi vari MV/CVS(nm) - 207"},{"K":"664","V":"Operazioni di non residenti sul mercato mobiliare italiano MV/CVS(f) - 664"},{"K":"8664","V":"Operazioni di non residenti sul mercato mobiliare italiano MV/CVS(f) - 8664"},{"K":"6612","V":"Operazioni di transito MV - 6612"},{"K":"7010","V":"Operazioni di valore inferiore a 12.500 euro (soglia di esenzione) MV - 7010"},{"K":"8110","V":"Oro non monetario (banche) MV - 8110"},{"K":"6687","V":"Parcelle professionali MV/CVS(nm) - 6687"},{"K":"6601","V":"Pensioni MV/CVS(nm) - 6601"},{"K":"6690","V":"Perdite di esercizio MV/CVS(nm) - 6690"},{"K":"6716","V":"Premi lordi su altre assicurazioni MV/CVS(nm) - 6716"},{"K":"6714","V":"Premi lordi su assicurazioni trasporto merci MV/CVS(nm) - 6714"},{"K":"6703","V":"Premi lordi su assicurazioni vita e fondi pensione MV/CVS(nm) - 6703"},{"K":"6718","V":"Premi lordi su riassicurazioni MV/CVS(nm) - 6718"},{"K":"8625","V":"Premi su strumenti derivati emessi da non residenti - banche MV - 8625"},{"K":"625","V":"Premi su strumenti derivati emessi da non residenti - non banche MV/CVS(f) - 625"},{"K":"8624","V":"Premi su strumenti derivati emessi da residenti - banche MV/CVS(nr) - 8624"},{"K":"624","V":"Premi su strumenti derivati emessi da residenti - non banche MV/CVS(f) - 624"},{"K":"6713","V":"Proventi non classificati MV - 6713"},{"K":"6688","V":"Recupero crediti MV/CVS(nm) - 6688"},{"K":"8525","V":"Redditi su altri investimenti - banche MV - 8525"},{"K":"525","V":"Redditi su altri investimenti - non banche MV/CVS(nm) - 525"},{"K":"8522","V":"Redditi su altri titoli obbligazionari - banche MV - 8522"},{"K":"522","V":"Redditi su altri titoli obbligazionari - non banche MV/CVS(nm) - 522"},{"K":"8516","V":"Redditi su partecipazioni - banche MV - 8516"},{"K":"516","V":"Redditi su partecipazioni non rappresentate da titoli - non banche MV/CVS(nm) - 516"},{"K":"8523","V":"Redditi su strumenti di mercato monetario - banche MV - 8523"},{"K":"523","V":"Redditi su strumenti di mercato monetario - non banche MV/CVS(nm) - 523"},{"K":"8526","V":"Redditi su titoli obbligazionari italiani collocati all'estero - banche MV - 8526"},{"K":"526","V":"Redditi su titoli obbligazionari italiani collocati all'estero - non banche MV/CVS(nm) - 526"},{"K":"6712","V":"Regolamenti automatizzati con non residenti MV - 6712"},{"K":"9939","V":"Regolamenti automatizzati tra non residenti MV - 9939"},{"K":"320","V":"Regolamenti per emissioni travellers' cheque MV - 320"},{"K":"319","V":"Regolamenti tra emittenti carte di credito MV/CVS(nm) - 319"},{"K":"104","V":"Regolamento per merci MV - 104"},{"K":"17","V":"Reimportazione di merce esportata in temporanea ad altro titolo CVS(m) - 17"},{"K":"16","V":"Reimportazione di merce lavorata all'estero per conto di residenti CVS(m) - 16"},{"K":"6710","V":"Remissione di debiti (banche) MV - 6710"},{"K":"7015","V":"Restituzione all'estero di somme non assegnate a residenti MV - 7015"},{"K":"6679","V":"Ricerche di mercato MV/CVS(nm) - 6679"},{"K":"36","V":"Riesportazione di merce importata in temporanea ad altro titolo CVS(m) - 36"},{"K":"35","V":"Riesportazione di merce lavorata in Italia per conto di non residenti CVS(m) - 35"},{"K":"7058","V":"Rimessa/incasso di MP emessi da non residenti MV - 7058"},{"K":"7057","V":"Rimessa/incasso di MP emessi da residenti MV - 7057"},{"K":"6689","V":"Rimesse emigrati ed immigrati MV/CVS(nm) - 6689"},{"K":"6624","V":"Rimpatrio / espatrio definitivo MV - 6624"},{"K":"113","V":"Riparazioni MV/CVS(nm) - 113"},{"K":"9840","V":"Riporti e pronti contro termine in valua su titoli esteri MV - 9840"},{"K":"9841","V":"Riporti e pronti contro termine in valuta su titoli esteri MV - 9841"},{"K":"9852","V":"Riporti e pronti contro termine in valuta su titoli italiani MV - 9852"},{"K":"9853","V":"Riporti e pronti contro termine in valuta su titoli italiani MV - 9853"},{"K":"8644","V":"Riporti e pronti contro termine su titoli esteri (accensioni) - banche MV - 8644"},{"K":"644","V":"Riporti e pronti contro termine su titoli esteri (accensioni) - non banche MV/CVS(f) - 644"},{"K":"8645","V":"Riporti e pronti contro termine su titoli esteri (estinzioni) - banche MV - 8645"},{"K":"645","V":"Riporti e pronti contro termine su titoli esteri (estinzioni) - non banche MV/CVS(f) - 645"},{"K":"8646","V":"Riporti e pronti contro termine su titoli italiani (accensioni) - banche MV - 8646"},{"K":"646","V":"Riporti e pronti contro termine su titoli italiani (accensioni) - non banche MV/CVS(f) - 646"},{"K":"8647","V":"Riporti e pronti contro termine su titoli italiani (estinzioni) - banche MV - 8647"},{"K":"647","V":"Riporti e pronti contro termine su titoli italiani (estinzioni) - non banche MV/CVS(f) - 647"},{"K":"6717","V":"Risarcimenti su altre assicurazioni MV/CVS(nm) - 6717"},{"K":"6715","V":"Risarcimenti su assicurazioni trasporto merci MV/CVS(nm) - 6715"},{"K":"6704","V":"Risarcimenti su assicurazioni vita e fondi pensione MV/CVS(nm) - 6704"},{"K":"6719","V":"Risarcimenti su riassicurazioni MV/CVS(nm) - 6719"},{"K":"6602","V":"Salari e stipendi MV/CVS(nm) - 6602"},{"K":"6647","V":"Saldi di compensazione MV - 6647"},{"K":"6691","V":"Scioglimento di contratti, pagamento d'indebito MV/CVS(nm) - 6691"},{"K":"6705","V":"Servizi ausiliari di assicurazione MV/CVS(nm) - 6705"},{"K":"6680","V":"Servizi di consulenza fiscale e contabile MV/CVS(nm) - 6680"},{"K":"1114","V":"Servizi di data processing e data base MV/CVS(nm) - 1114"},{"K":"1116","V":"Servizi di informazione MV/CVS(nm) - 1116"},{"K":"6683","V":"Servizi di ricerca e sviluppo MV/CVS(nm) - 6683"},{"K":"6676","V":"Servizi di telecomunicazione MV/CVS(nm) - 6676"},{"K":"6681","V":"Servizi legali MV/CVS(nm) - 6681"},{"K":"221","V":"Servizi logistici e di assistenza al trasporto - aerei MV/CVS(nm) - 221"},{"K":"222","V":"Servizi logistici e di assistenza al trasporto - altri MV/CVS(nm) - 222"},{"K":"220","V":"Servizi logistici e di assistenza al trasporto - marittimi MV/CVS(nm) - 220"},{"K":"6700","V":"Servizi postali e di corriere MV/CVS(nm) - 6700"},{"K":"6682","V":"Servizi pubblicitari MV/CVS(nm) - 6682"},{"K":"1115","V":"Servizi vari informatici MV/CVS(nm) - 1115"},{"K":"1107","V":"Software MV/CVS(nm) - 1107"},{"K":"7014","V":"Somme a disposizione di residenti da classificare MV - 7014"},{"K":"6622","V":"Spese militari MV/CVS(nm) - 6622"},{"K":"6618","V":"Spese per consolati, ambasciate ecc. MV/CVS(nm) - 6618"},{"K":"6648","V":"Spese sanitarie MV - 6648"},{"K":"6621","V":"Stipendi personale consolati/ambasciate all'estero MV - 6621"},{"K":"801","V":"Storni per operazioni correnti mercantili MV - 801"},{"K":"802","V":"Storni per operazioni correnti non mercantili MV - 802"},{"K":"803","V":"Storni per operazioni finanziarie MV - 803"},{"K":"1111","V":"Studi tecnici ed engineering MV/CVS(nm) - 1111"},{"K":"6693","V":"Successioni e donazioni MV/CVS(nm) - 6693"},{"K":"6635","V":"Sussidi e regalie MV/CVS(nm) - 6635"},{"K":"6692","V":"Trasferimenti a seguito di provvedimenti giudiziari MV/CVS(nm) - 6692"},{"K":"307","V":"Trasferimenti di banconote di paesi aderenti all'UEM MV - 307"},{"K":"308","V":"Trasferimenti di banconote in EURO MV - 308"},{"K":"302","V":"Trasferimenti di banconote italiane MV - 302"},{"K":"8690","V":"Trasferimento saldi su conti di regolamento netto (EBA, ecc.) MV - 8690"},{"K":"39","V":"Trasformazione in definitiva con regolamento di altre temporanee esportazioni CVS(m) - 39"},{"K":"20","V":"Trasformazione in definitiva con regolamento di altre temporanee importazioni CVS(m) - 20"},{"K":"38","V":"Trasformazione in definitiva con regolamento di merci esportate per lavorazione CVS(m) - 38"},{"K":"19","V":"Trasformazione in definitiva con regolamento di merci importate per lavorazione CVS(m) - 19"},{"K":"6707","V":"Trattamento dei rifiuti e disinquinamento MV/CVS(nm) - 6707"},{"K":"9962","V":"Variazione per adeguamento contabile titoli in portafoglio MV - 9962"},{"K":"41","V":"Vendita di merce all'estero acquistata per il transito (transito vendita) CVS(m) - 41"},{"K":"42","V":"Vendita di merce all'estero non importata CVS(m) - 42"},{"K":"40","V":"Vendita di merce che non viene esportata CVS(m) - 40"},{"K":"7037","V":"Versamenti/prelevamenti di BB Euro su/da conti di non residenti MV - 7037"},{"K":"7036","V":"Versamenti/prelevamenti di BB in valuta su/da conti di residenti MV - 7036"},{"K":"300","V":"Viaggi MV/CVS(nm) - 300"},{"K":"12","V":"importazione per esecuzione di lavori in Italia CVS(m) - 12"},{"K":"24","V":"nuovi esiti Bollettino Bancari - RIFIUTATI"},{"K":"14","V":"nuovi esiti Pagamenti Esteri - RIFIUTATI"},{"K":"34","V":"nuovi esiti Ritiro Effetti - RIFIUTATI"}],"TIPO_CAUSALE_VALUTARIA":[{"K":"SNR","V":"Soggetto non residente"},{"K":"CVA","V":"assegnazione causale valutaria"},{"K":"INF","V":"inferiore al limite CVS"}],"MODALITA_ESITO":[{"K":"CBI","V":"CUC"},{"K":"EMAL","V":"E-Mail"}],"NAZIONE":[{"K":"AF","V":"Afghanistan"},{"K":"AL","V":"Albania"},{"K":"DZ","V":"Algeria"},{"K":"AD","V":"Andorra"},{"K":"AO","V":"Angola"},{"K":"AI","V":"Anguilla"},{"K":"AQ","V":"Antartide"},{"K":"AG","V":"Antigua e Barbuda"},{"K":"SA","V":"Arabia Saudita"},{"K":"AR","V":"Argentina"},{"K":"AM","V":"Armenia"},{"K":"AW","V":"Aruba"},{"K":"AU","V":"Australia"},{"K":"AT","V":"Austria"},{"K":"AZ","V":"Azerbaigian"},{"K":"BS","V":"Bahamas"},{"K":"BH","V":"Bahrain"},{"K":"BD","V":"Bangladesh"},{"K":"BB","V":"Barbados"},{"K":"BE","V":"Belgio"},{"K":"BZ","V":"Belize"},{"K":"BJ","V":"Benin"},{"K":"BM","V":"Bermuda"},{"K":"BT","V":"Bhutan"},{"K":"BY","V":"Bielorussia"},{"K":"MM","V":"Birmania"},{"K":"BO","V":"Bolivia"},{"K":"BA","V":"Bosnia ed Erzegovina"},{"K":"BW","V":"Botswana"},{"K":"BR","V":"Brasile"},{"K":"BN","V":"Brunei"},{"K":"BG","V":"Bulgaria"},{"K":"BF","V":"Burkina Faso"},{"K":"BI","V":"Burundi"},{"K":"KH","V":"Cambogia"},{"K":"CM","V":"Camerun"},{"K":"CA","V":"Canada"},{"K":"CV","V":"Capo Verde"},{"K":"TD","V":"Ciad"},{"K":"CL","V":"Cile"},{"K":"CN","V":"Cina"},{"K":"CY","V":"Cipro"},{"K":"VA","V":"Città del Vaticano"},{"K":"CO","V":"Colombia"},{"K":"KP","V":"Corea del Nord"},{"K":"KR","V":"Corea del Sud"},{"K":"CR","V":"Costa Rica"},{"K":"CI","V":"Costa d'Avorio"},{"K":"HR","V":"Croazia"},{"K":"CU","V":"Cuba"},{"K":"CW","V":"Curaçao"},{"K":"DK","V":"Danimarca"},{"K":"DM","V":"Dominica"},{"K":"AE","V":"Dubai"},{"K":"EC","V":"Ecuador"},{"K":"EG","V":"Egitto"},{"K":"SV","V":"El Salvador"},{"K":"ER","V":"Eritrea"},{"K":"EE","V":"Estonia"},{"K":"ET","V":"Etiopia"},{"K":"FJ","V":"Figi"},{"K":"PH","V":"Filippine"},{"K":"FI","V":"Finlandia"},{"K":"FR","V":"Francia"},{"K":"GA","V":"Gabon"},{"K":"GM","V":"Gambia"},{"K":"GE","V":"Georgia"},{"K":"GS","V":"Georgia del Sud e isole Sandwich meridionali"},{"K":"DE","V":"Germania"},{"K":"GH","V":"Ghana"},{"K":"JM","V":"Giamaica"},{"K":"JP","V":"Giappone"},{"K":"GI","V":"Gibilterra"},{"K":"DJ","V":"Gibuti"},{"K":"JO","V":"Giordania"},{"K":"GR","V":"Grecia"},{"K":"GD","V":"Grenada"},{"K":"GL","V":"Groenlandia"},{"K":"GP","V":"Guadalupa"},{"K":"GU","V":"Guam"},{"K":"GT","V":"Guatemala"},{"K":"GG","V":"Guernsey"},{"K":"GN","V":"Guinea"},{"K":"GQ","V":"Guinea Equatoriale"},{"K":"GW","V":"Guinea-Bissau"},{"K":"GY","V":"Guyana"},{"K":"GF","V":"Guyana Francese"},{"K":"HT","V":"Haiti"},{"K":"HN","V":"Honduras"},{"K":"HK","V":"Hong Kong"},{"K":"IN","V":"India"},{"K":"ID","V":"Indonesia"},{"K":"IR","V":"Iran"},{"K":"IQ","V":"Iraq"},{"K":"IE","V":"Irlanda"},{"K":"IS","V":"Islanda"},{"K":"BV","V":"Isola Bouvet"},{"K":"NF","V":"Isola Norfolk"},{"K":"CX","V":"Isola del Natale (Christmas Island)"},{"K":"IM","V":"Isola di Man"},{"K":"BQ","V":"Isole BES"},{"K":"KY","V":"Isole Cayman"},{"K":"CC","V":"Isole Cocos e Keeling"},{"K":"KM","V":"Isole Comore"},{"K":"CK","V":"Isole Cook"},{"K":"FO","V":"Isole Faer Oer"},{"K":"FK","V":"Isole Falkland"},{"K":"HM","V":"Isole Heard e McDonald"},{"K":"MP","V":"Isole Marianne Settentrionali"},{"K":"MH","V":"Isole Marshall"},{"K":"PN","V":"Isole Pitcairn"},{"K":"SB","V":"Isole Salomone"},{"K":"TC","V":"Isole Turks e Caicos"},{"K":"VI","V":"Isole Vergini Americane"},{"K":"VG","V":"Isole Vergini Britanniche"},{"K":"UM","V":"Isole minori esterne degli Stati Uniti"},{"K":"AX","V":"Isole Åland"},{"K":"IL","V":"Israele"},{"K":"IT","V":"Italia"},{"K":"JE","V":"Jersey"},{"K":"KZ","V":"Kazakistan"},{"K":"KE","V":"Kenya"},{"K":"KG","V":"Kirghizistan"},{"K":"KI","V":"Kiribati"},{"K":"KW","V":"Kuwait"},{"K":"LA","V":"Laos"},{"K":"LS","V":"Lesotho"},{"K":"LV","V":"Lettonia"},{"K":"LB","V":"Libano"},{"K":"LR","V":"Liberia"},{"K":"LY","V":"Libia"},{"K":"LI","V":"Liechtenstein"},{"K":"LT","V":"Lituania"},{"K":"LU","V":"Lussemburgo"},{"K":"MO","V":"Macao"},{"K":"MK","V":"Macedonia"},{"K":"MG","V":"Madagascar"},{"K":"MW","V":"Malawi"},{"K":"MV","V":"Maldive"},{"K":"MY","V":"Malesia"},{"K":"ML","V":"Mali"},{"K":"MT","V":"Malta"},{"K":"MA","V":"Marocco"},{"K":"MQ","V":"Martinica"},{"K":"MR","V":"Mauritania"},{"K":"MU","V":"Mauritius"},{"K":"YT","V":"Mayotte"},{"K":"MX","V":"Messico"},{"K":"MD","V":"Moldavia"},{"K":"MC","V":"Monaco"},{"K":"MN","V":"Mongolia"},{"K":"ME","V":"Montenegro"},{"K":"MS","V":"Montserrat"},{"K":"MZ","V":"Mozambico"},{"K":"NA","V":"Namibia"},{"K":"NR","V":"Nauru"},{"K":"NP","V":"Nepal"},{"K":"NI","V":"Nicaragua"},{"K":"NE","V":"Niger"},{"K":"NG","V":"Nigeria"},{"K":"NU","V":"Niue"},{"K":"NO","V":"Norvegia"},{"K":"NC","V":"Nuova Caledonia"},{"K":"NZ","V":"Nuova Zelanda"},{"K":"OM","V":"Oman"},{"K":"NL","V":"Paesi Bassi"},{"K":"PK","V":"Pakistan"},{"K":"PW","V":"Palau"},{"K":"PA","V":"Panama"},{"K":"PG","V":"Papua Nuova Guinea"},{"K":"PY","V":"Paraguay"},{"K":"PE","V":"Perù"},{"K":"PF","V":"Polinesia Francese"},{"K":"PL","V":"Polonia"},{"K":"PR","V":"Porto Rico"},{"K":"PT","V":"Portogallo"},{"K":"QA","V":"Qatar"},{"K":"GB","V":"Regno Unito"},{"K":"CZ","V":"Repubblica Ceca"},{"K":"CF","V":"Repubblica Centrafricana"},{"K":"CD","V":"Repubblica Democratica del Congo"},{"K":"CD","V":"Repubblica Democratica del Congo"},{"K":"DO","V":"Repubblica Dominicana"},{"K":"CG","V":"Repubblica del Congo"},{"K":"TW","V":"Repubblica di Cina (Taiwan)"},{"K":"RO","V":"Romania"},{"K":"RW","V":"Ruanda"},{"K":"RU","V":"Russia"},{"K":"RE","V":"Réunion"},{"K":"EH","V":"Sahara Occidentale"},{"K":"KN","V":"Saint Kitts e Nevis"},{"K":"PM","V":"Saint Pierre e Miquelon"},{"K":"VC","V":"Saint Vincent e Grenadine"},{"K":"BL","V":"Saint-Barthélemy"},{"K":"MF","V":"Saint-Martin"},{"K":"WS","V":"Samoa"},{"K":"AS","V":"Samoa Americane"},{"K":"SM","V":"San Marino"},{"K":"SH","V":"Sant'Elena"},{"K":"LC","V":"Santa Lucia"},{"K":"ST","V":"Sao Tomé e Principe"},{"K":"SN","V":"Senegal"},{"K":"RS","V":"Serbia"},{"K":"SC","V":"Seychelles"},{"K":"SL","V":"Sierra Leone"},{"K":"SG","V":"Singapore"},{"K":"SX","V":"Sint Maarten"},{"K":"SY","V":"Siria"},{"K":"SK","V":"Slovacchia"},{"K":"SI","V":"Slovenia"},{"K":"SO","V":"Somalia"},{"K":"ES","V":"Spagna"},{"K":"LK","V":"Sri Lanka"},{"K":"FM","V":"Stati Federati di Micronesia"},{"K":"US","V":"Stati Uniti d'America"},{"K":"PS","V":"Stato di Palestina"},{"K":"ZA","V":"Sudafrica"},{"K":"SD","V":"Sudan"},{"K":"SS","V":"Sudan del Sud"},{"K":"SR","V":"Suriname"},{"K":"SJ","V":"Svalbard e Jan Mayen"},{"K":"SE","V":"Svezia"},{"K":"CH","V":"Svizzera"},{"K":"SZ","V":"Swaziland"},{"K":"TJ","V":"Tagikistan"},{"K":"TZ","V":"Tanzania"},{"K":"IO","V":"Territori Britannici dell'Oceano Indiano"},{"K":"TF","V":"Territori Francesi del Sud"},{"K":"TH","V":"Thailandia"},{"K":"TL","V":"Timor Est"},{"K":"TL","V":"Timor Est"},{"K":"TG","V":"Togo"},{"K":"TK","V":"Tokelau"},{"K":"TO","V":"Tonga"},{"K":"TT","V":"Trinidad e Tobago"},{"K":"TN","V":"Tunisia"},{"K":"TR","V":"Turchia"},{"K":"TM","V":"Turkmenistan"},{"K":"TV","V":"Tuvalu"},{"K":"UA","V":"Ucraina"},{"K":"UG","V":"Uganda"},{"K":"HU","V":"Ungheria"},{"K":"UY","V":"Uruguay"},{"K":"UZ","V":"Uzbekistan"},{"K":"VU","V":"Vanuatu"},{"K":"VE","V":"Venezuela"},{"K":"VN","V":"Vietnam"},{"K":"WF","V":"Wallis e Futuna"},{"K":"YE","V":"Yemen"},{"K":"ZM","V":"Zambia"},{"K":"ZW","V":"Zimbabwe"}],"TIPO_ANAGRAFICA":[{"K":"FO","V":"FORNITORI"}],"TIPO_SOGGETTO":[{"K":"PF","V":"Persona Fisica"},{"K":"PG","V":"Persona Giuridica"}],"TIPO_CODICE_SOGGETTO":[{"K":"ALT","V":"Altro Codice"},{"K":"FIS","V":"C.Fis. / P.Iva / VAT"},{"K":"PRO","V":"CUC CBI"},{"K":"BEI","V":"Identificativo BEI"}],"FINALITA_PAG_ISO":[{"K":"ACCT","V":"ACCT - AccountManagement"},{"K":"ADCS","V":"ADCS - AdvisoryDonationCopyrightServices"},{"K":"ADMG","V":"ADMG - AdministrativeManagement"},{"K":"ADVA","V":"ADVA - AdvancePayment"},{"K":"AEMP","V":"AEMP - ActiveEmploymentPolicy"},{"K":"AGRT","V":"AGRT - AgriculturalTransfer"},{"K":"AIRB","V":"AIRB - Air"},{"K":"ALLW","V":"ALLW - Allowance "},{"K":"ALMY","V":"ALMY - AlimonyPayment"},{"K":"ANNI","V":"ANNI - Annuity"},{"K":"ANTS","V":"ANTS - AnesthesiaServices"},{"K":"AREN","V":"AREN - Accounts Receivables Entry"},{"K":"B112","V":"B112 - Trailer Fee Payment"},{"K":"BBSC","V":"BBSC - Baby Bonus Scheme "},{"K":"BCDM","V":"BCDM - BearerChequeDomestic"},{"K":"BCFG","V":"BCFG - BearerChequeForeign"},{"K":"BECH","V":"BECH - ChildBenefit"},{"K":"BENE","V":"BENE - UnemploymentDisabilityBenefit"},{"K":"BEXP","V":"BEXP - BusinessExpenses"},{"K":"BFWD","V":"BFWD - Bond Forward"},{"K":"BKDF","V":"BKDF - Bank Loan Delayed Draw Funding"},{"K":"BKFE","V":"BKFE - Bank Loan Fees"},{"K":"BKFM","V":"BKFM - Bank Loan Funding Memo"},{"K":"BKIP","V":"BKIP - Bank Loan Accrued Interest Payment"},{"K":"BKPP","V":"BKPP - Bank Loan Principal Paydown"},{"K":"BLDM","V":"BLDM - BuildingMaintenance"},{"K":"BNET","V":"BNET - Bond Forward Netting"},{"K":"BOCE","V":"BOCE - Back Office Conversion Entry"},{"K":"BONU","V":"BONU - BonusPayment."},{"K":"BR12","V":"BR12 - Trailer Fee Rebate"},{"K":"BUSB","V":"BUSB - Bus"},{"K":"CAFI","V":"CAFI - Custodian Management fee In-house"},{"K":"CASH","V":"CASH - CashManagementTransfer"},{"K":"CBFF","V":"CBFF - CapitalBuilding"},{"K":"CBFR","V":"CBFR - CapitalBuildingRetirement "},{"K":"CBLK","V":"CBLK - Card Bulk Clearing"},{"K":"CBTV","V":"CBTV - CableTVBill"},{"K":"CCHD","V":"CCHD - Cash compensation, Helplessness, Disability"},{"K":"CCIR","V":"CCIR - Cross Currency IRS"},{"K":"CCPC","V":"CCPC - CCP Cleared Initial Margin"},{"K":"CCPM","V":"CCPM - CCP Cleared Variation Margin"},{"K":"CCRD","V":"CCRD - CreditCardPayment "},{"K":"CCSM","V":"CCSM - CCP Cleared Initial Margin Segregated Cash"},{"K":"CDBL","V":"CDBL - CreditCardBill"},{"K":"CDCB","V":"CDCB - CardPayment with CashBack"},{"K":"CDCD","V":"CDCD - CashDisbursement"},{"K":"CDCS","V":"CDCS - Cash Disbursement with Surcharging"},{"K":"CDDP","V":"CDDP - Card Deferred Payment"},{"K":"CDEP","V":"CDEP - Credit default event payment"},{"K":"CDOC","V":"CDOC - OriginalCredit "},{"K":"CDQC","V":"CDQC - QuasiCash "},{"K":"CFDI","V":"CFDI - Capital falling due In-house"},{"K":"CFEE","V":"CFEE - CancellationFee"},{"K":"CGDD","V":"CGDD - CardGeneratedDirectDebit"},{"K":"CHAR","V":"CHAR - CharityPayment"},{"K":"CLPR","V":"CLPR - CarLoanPrincipalRepayment"},{"K":"CMDT","V":"CMDT - CommodityTransfer"},{"K":"COLL","V":"COLL - CollectionPayment"},{"K":"COMC","V":"COMC - CommercialPayment"},{"K":"COMM","V":"COMM - Commission"},{"K":"COMT","V":"COMT - ConsumerThirdPartyConsolidatedPayment"},{"K":"CORT","V":"CORT - Trade Settlement Payment"},{"K":"COST","V":"COST - Costs"},{"K":"CPKC","V":"CPKC - Carpark Charges "},{"K":"CPYR","V":"CPYR - Copyright"},{"K":"CRDS","V":"CRDS - Credit DefaultSwap"},{"K":"CRPR","V":"CRPR - Cross Product"},{"K":"CRSP","V":"CRSP - Credit Support"},{"K":"CRTL","V":"CRTL - Credit Line"},{"K":"CSDB","V":"CSDB - CashDisbursement"},{"K":"CSLP","V":"CSLP - CompanySocialLoanPaymentToBank"},{"K":"CVCF","V":"CVCF - ConvalescentCareFacility"},{"K":"DBTC","V":"DBTC - DebitCollectionPayment"},{"K":"DCRD","V":"DCRD - Debit Card Payment"},{"K":"DEPT","V":"DEPT - Deposit"},{"K":"DERI","V":"DERI - Derivatives"},{"K":"DIVD","V":"DIVD - Dividend"},{"K":"DMEQ","V":"DMEQ - DurableMedicaleEquipment"},{"K":"DNTS","V":"DNTS - DentalServices"},{"K":"DSMT","V":"DSMT - Printed Order Disbursement"},{"K":"DVPM","V":"DVPM - Deliver Against Payment"},{"K":"ECPG","V":"ECPG - GuaranteedEPayment"},{"K":"ECPR","V":"ECPR - EPaymentReturn"},{"K":"ECPU","V":"ECPU - NonGuaranteedEPayment"},{"K":"EDUC","V":"EDUC - Education "},{"K":"ELEC","V":"ELEC - ElectricityBill"},{"K":"ENRG","V":"ENRG - Energies"},{"K":"EPAY","V":"EPAY - Epayment"},{"K":"EQPT","V":"EQPT - Equity Option"},{"K":"EQUS","V":"EQUS - Equity Swap"},{"K":"ESTX","V":"ESTX - EstateTax"},{"K":"ETUP","V":"ETUP - E-Purse Top Up"},{"K":"EXPT","V":"EXPT - Exotic Option"},{"K":"EXTD","V":"EXTD - Exchange Traded Derivatives"},{"K":"FACT","V":"FACT - Factor Update related payment"},{"K":"FAND","V":"FAND - FinancialAidInCaseOfNaturalDisaster"},{"K":"FCOL","V":"FCOL - Fee Collection"},{"K":"FCPM","V":"FCPM - Late Payment of Fees & Charges "},{"K":"FEES","V":"FEES - Fees"},{"K":"FERB","V":"FERB - Ferry"},{"K":"FIXI","V":"FIXI - Fixed Income"},{"K":"FNET","V":"FNET - Futures Netting Payment"},{"K":"FORW","V":"FORW - Forward Foreign Exchange"},{"K":"FREX","V":"FREX - ForeignExchange"},{"K":"FUTR","V":"FUTR - Futures"},{"K":"FWBC","V":"FWBC - Forward Broker Owned Cash Collateral"},{"K":"FWCC","V":"FWCC - Forward Client Owned Cash Collateral"},{"K":"FWLV","V":"FWLV - Foreign Worker Levy "},{"K":"FWSB","V":"FWSB - Forward Broker Owned Cash Collateral Segregated"},{"K":"FWSC","V":"FWSC - Forward Client Owned Segregated Cash Collateral"},{"K":"FXNT","V":"FXNT - Foreign Exchange Related Netting"},{"K":"GASB","V":"GASB - GasBill"},{"K":"GDDS","V":"GDDS - PurchaseSaleOfGoods"},{"K":"GDSV","V":"GDSV - PurchaseSaleOfGoodsAndServices"},{"K":"GFRP","V":"GFRP - GuaranteeFundRightsPayment"},{"K":"GOVI","V":"GOVI - GovernmentInsurance"},{"K":"GOVT","V":"GOVT - GovernmentPayment"},{"K":"GSCB","V":"GSCB - PurchaseSaleOfGoodsAndServicesWithCashBack"},{"K":"GSTX","V":"GSTX - Goods & Services Tax "},{"K":"GVEA","V":"GVEA - Austrian Government Employees Category A"},{"K":"GVEB","V":"GVEB - Austrian Government Employees Category B"},{"K":"GVEC","V":"GVEC - Austrian Government Employees Category C"},{"K":"GVED","V":"GVED - Austrian Government Employees Category D"},{"K":"GWLT","V":"GWLT - GovermentWarLegislationTransfer"},{"K":"HEDG","V":"HEDG - Hedging"},{"K":"HLRP","V":"HLRP - HousingLoanRepayment"},{"K":"HLTC","V":"HLTC - HomeHealthCare"},{"K":"HLTI","V":"HLTI - HealthInsurance"},{"K":"HREC","V":"HREC - Housing Related Contribution"},{"K":"HSPC","V":"HSPC - HospitalCare"},{"K":"HSTX","V":"HSTX - HousingTax"},{"K":"ICCP","V":"ICCP - IrrevocableCreditCardPayment"},{"K":"ICRF","V":"ICRF - IntermediateCareFacility"},{"K":"IDCP","V":"IDCP - IrrevocableDebitCardPayment"},{"K":"IHRP","V":"IHRP - InstalmentHirePurchaseAgreement"},{"K":"INPC","V":"INPC - InsurancePremiumCar"},{"K":"INSM","V":"INSM - Installment"},{"K":"INSU","V":"INSU - InsurancePremium"},{"K":"INTC","V":"INTC - IntraCompanyPayment"},{"K":"INTE","V":"INTE - Interest"},{"K":"INTX","V":"INTX - IncomeTax"},{"K":"INVS","V":"INVS - Investment & Securities "},{"K":"IVPT","V":"IVPT - Invoice Payment "},{"K":"LBIN","V":"LBIN - Lending Buy-In Netting"},{"K":"LBRI","V":"LBRI - LaborInsurance"},{"K":"LCOL","V":"LCOL - Lending Cash Collateral Free Movement"},{"K":"LFEE","V":"LFEE - Lending Fees"},{"K":"LICF","V":"LICF - LicenseFee"},{"K":"LIFI","V":"LIFI - LifeInsurance"},{"K":"LIMA","V":"LIMA - LiquidityManagement"},{"K":"LMEQ","V":"LMEQ - Lending Equity marked-to-market  cash collateral"},{"K":"LMFI","V":"LMFI - Lending Fixed Income marked-to-market cash collateral"},{"K":"LMRK","V":"LMRK - Lending unspecified type of marked-to-market cash collateral"},{"K":"LOAN","V":"LOAN - Loan"},{"K":"LOAR","V":"LOAR - LoanRepayment"},{"K":"LREB","V":"LREB - Lending rebate payments"},{"K":"LREV","V":"LREV - Lending Revenue Payments"},{"K":"LSFL","V":"LSFL - Lending Claim Payment"},{"K":"LTCF","V":"LTCF - LongTermCareFacility"},{"K":"MARG","V":"MARG - Daily margin on listed derivatives "},{"K":"MBSB","V":"MBSB - MBS Broker Owned Cash Collateral"},{"K":"MBSC","V":"MBSC - MBS Client Owned Cash Collateral "},{"K":"MCDM","V":"MCDM - MultiCurrenyChequeDomestic"},{"K":"MCFG","V":"MCFG - MultiCurrenyChequeForeign"},{"K":"MDCS","V":"MDCS - MedicalServices"},{"K":"MGCC","V":"MGCC - Futures Initial Margin  "},{"K":"MGSC","V":"MGSC - Futures Initial Margin Client Owned Segregated Cash Collateral "},{"K":"MSVC","V":"MSVC - MultipleServiceTypes"},{"K":"MTUP","V":"MTUP - Mobile Top Up"},{"K":"NETT","V":"NETT - Netting"},{"K":"NITX","V":"NITX - NetIncomeTax"},{"K":"NOWS","V":"NOWS - NotOtherwiseSpecified"},{"K":"NWCH","V":"NWCH - NetworkCharge"},{"K":"NWCM","V":"NWCM - NetworkCommunication"},{"K":"OCCC","V":"OCCC - Client owned OCC pledged collateral"},{"K":"OCDM","V":"OCDM - OrderChequeDomestic"},{"K":"OCFG","V":"OCFG - OrderChequeForeign"},{"K":"OFEE","V":"OFEE - OpeningFee"},{"K":"OPBC","V":"OPBC - OTC Option Broker owned Cash collateral "},{"K":"OPCC","V":"OPCC - OTC Option Client owned Cash collateral "},{"K":"OPSB","V":"OPSB - OTC Option Broker Owned Segregated Cash Collateral "},{"K":"OPSC","V":"OPSC - OTC Option Client Owned Cash Segregated Cash Collateral "},{"K":"OPTN","V":"OPTN - FX Option"},{"K":"OTCD","V":"OTCD - OTC Derivatives"},{"K":"OTHR","V":"OTHR - Other"},{"K":"OTLC","V":"OTLC - OtherTelecomRelatedBill"},{"K":"PADD","V":"PADD - Preauthorized debit"},{"K":"PAYR","V":"PAYR - Payroll"},{"K":"PENO","V":"PENO - PaymentBasedOnEnforcementOrder"},{"K":"PENS","V":"PENS - PensionPayment"},{"K":"PHON","V":"PHON - TelephoneBill"},{"K":"POPE","V":"POPE - Point of Purchase Entry"},{"K":"PPTI","V":"PPTI - PropertyInsurance"},{"K":"PRCP","V":"PRCP - PricePayment"},{"K":"PRME","V":"PRME - PreciousMetal"},{"K":"PTSP","V":"PTSP - PaymentTerms"},{"K":"PTXP","V":"PTXP - Property Tax "},{"K":"RCKE","V":"RCKE - Re-presented Check Entry"},{"K":"RCPT","V":"RCPT - ReceiptPayment"},{"K":"RDTX","V":"RDTX - Road Tax "},{"K":"REBT","V":"REBT - Rebate "},{"K":"REFU","V":"REFU - Refund"},{"K":"RENT","V":"RENT - Rent"},{"K":"REPO","V":"REPO - Repurchase Agreement"},{"K":"RHBS","V":"RHBS - RehabilitationSupport"},{"K":"RIMB","V":"RIMB - Reimbursement of a previous erroneous transaction"},{"K":"RINP","V":"RINP - RecurringInstallmentPayment"},{"K":"RLWY","V":"RLWY - Railway"},{"K":"ROYA","V":"ROYA - Royalties"},{"K":"RPBC","V":"RPBC - Bi-lateral repo broker owned collateral "},{"K":"RPCC","V":"RPCC - Repo client owned collateral "},{"K":"RPNT","V":"RPNT - Bi-lateral repo internet netting"},{"K":"RPSB","V":"RPSB - Bi-lateral repo broker owned segregated cash collateral "},{"K":"RPSC","V":"RPSC - Bi-lateral Repo client owned segregated cash collateral"},{"K":"RRBN","V":"RRBN - Round Robin"},{"K":"RVPM","V":"RVPM - Receive Against Payment"},{"K":"RVPO","V":"RVPO - Reverse Repurchase Agreement"},{"K":"SAVG","V":"SAVG - Savings"},{"K":"SBSC","V":"SBSC - Securities Buy Sell Sell Buy Back"},{"K":"SCIE","V":"SCIE - Single Currency IRS Exotic"},{"K":"SCIR","V":"SCIR - Single Currency IRS"},{"K":"SCRP","V":"SCRP - Securities Cross Products"},{"K":"SCVE","V":"SCVE - PurchaseSaleOfServices"},{"K":"SECU","V":"SECU - Securities"},{"K":"SEPI","V":"SEPI - Securities Purchase In-house"},{"K":"SHBC","V":"SHBC - Broker owned collateral Short Sale"},{"K":"SHCC","V":"SHCC - Client owned collateral Short Sale"},{"K":"SHSL","V":"SHSL - Short Sell"},{"K":"SLEB","V":"SLEB - Securities Lending And Borrowing"},{"K":"SLOA","V":"SLOA - SecuredLoan"},{"K":"SLPI","V":"SLPI - PaymentSlipInstruction"},{"K":"SPLT","V":"SPLT - Split payments"},{"K":"SSBE","V":"SSBE - SocialSecurityBenefit"},{"K":"STDY","V":"STDY - Study"},{"K":"SUBS","V":"SUBS - Subscription"},{"K":"SUPP","V":"SUPP - SupplierPayment"},{"K":"SWBC","V":"SWBC - Swap Broker owned cash collateral "},{"K":"SWCC","V":"SWCC - Swap Client owned cash collateral "},{"K":"SWFP","V":"SWFP - Swap contract final payment"},{"K":"SWPP","V":"SWPP - Swap contract partial payment"},{"K":"SWPT","V":"SWPT - Swaption"},{"K":"SWRS","V":"SWRS - Swap contract reset payment"},{"K":"SWSB","V":"SWSB - Swaps Broker Owned Segregated Cash Collateral "},{"K":"SWSC","V":"SWSC - Swaps Client Owned Segregated Cash Collateral "},{"K":"SWUF","V":"SWUF - Swap contract upfront payment"},{"K":"TAXR","V":"TAXR - TaxRefund"},{"K":"TAXS","V":"TAXS - TaxPayment"},{"K":"TBAN","V":"TBAN - TBA pair-off netting"},{"K":"TBAS","V":"TBAS - To Be Announced"},{"K":"TBBC","V":"TBBC - TBA Broker owned cash collateral"},{"K":"TBCC","V":"TBCC - TBA Client owned cash collateral"},{"K":"TBIL","V":"TBIL - Telecommunications Bill "},{"K":"TCSC","V":"TCSC - Town Council Service Charges "},{"K":"TELI","V":"TELI - Telephone-Initiated Transaction"},{"K":"TLRF","V":"TLRF - Non-US mutual fund trailer fee payment"},{"K":"TLRR","V":"TLRR - Non-US mutual fund trailer fee rebate payment"},{"K":"TMPG","V":"TMPG - TMPG claim payment"},{"K":"TPRI","V":"TPRI - Tri Party Repo Interest"},{"K":"TPRP","V":"TPRP - Tri-party Repo netting"},{"K":"TRAD","V":"TRAD - TradeServices"},{"K":"TRCP","V":"TRCP - Treasury Cross Product"},{"K":"TREA","V":"TREA - TreasuryPayment"},{"K":"TRFD","V":"TRFD - TrustFund"},{"K":"TRNC","V":"TRNC - TruncatedPaymentSlip"},{"K":"TRPT","V":"TRPT - RoadPricing"},{"K":"TRVC","V":"TRVC - TravellerCheque"},{"K":"UBIL","V":"UBIL - Utilities "},{"K":"VATX","V":"VATX - ValueAddedTaxPayment"},{"K":"VIEW","V":"VIEW - VisionCare"},{"K":"WEBI","V":"WEBI - Internet-Initiated Transaction"},{"K":"WHLD","V":"WHLD - WithHolding"},{"K":"WTER","V":"WTER - WaterBill"}],"TIPO_INDIRIZZO":[{"K":"PBOX","V":"Indirizzo della casella postale"},{"K":"DLVY","V":"Indirizzo di consegna"},{"K":"MLTO","V":"Indirizzo di corrispondenza postale"},{"K":"BIZZ","V":"Indirizzo di domicilio"},{"K":"HOME","V":"Indirizzo di residenza"},{"K":"ADDR","V":"Indirizzo postale completo"}]};
    var PROFILABLE_DISTINTE = {"ACCREDITO_CUMULATIVO":[{"K":"AS","V":"NO - Solo se accordi banca"},{"K":"NR","V":"Nessuna richiesta (Accordi banca)"},{"K":"AC","V":"SI - Solo se accordi banca"}],"TIPO_CONTO":[{"K":"CACC","V":"CACC - Corrente"},{"K":"CASH","V":"CASH - Pagamento Contanti"},{"K":"CHAR","V":"CHAR - Commissioni"},{"K":"CISH","V":"CISH - Entrata Contanti"},{"K":"COMM","V":"COMM - Commissioni"},{"K":"LLSV","V":"LLSV - Conto di Risparmio di Liquidità Limitata"},{"K":"LOAN","V":"LOAN - Prestito"},{"K":"MGLD","V":"MGLD - Prestito Marginale"},{"K":"MOMA","V":"MOMA - Mercato Finanziario"},{"K":"NREX","V":"NREX - Esterno Non Residente"},{"K":"ODFT","V":"ODFT - Scoperto"},{"K":"ONDP","V":"ONDP - Deposito Notturno"},{"K":"OTHR","V":"OTHR - Altro Conto"},{"K":"SACC","V":"SACC - Liquidazione"},{"K":"SLRY","V":"SLRY - Stipendio"},{"K":"SVGS","V":"SVGS - Risparmi"},{"K":"TAXE","V":"TAXE - Tasse"},{"K":"TRAN","V":"TRAN - Conto di Transazione"},{"K":"TRAS","V":"TRAS - Negozazione Contanti"}]};
    var PIAZZATURA = [{"Identifier":{"Id":null,"Version":null,"IdAzienda":8,"IdRapporto":1306091,"ClasseServizio":0,"Crypt":"pmwiT1A/J+RQmH53i+toLA2rmdGmsBx8IyVDo2t6CU+p3ya7RJ3i8cXqmaGeUJ3NAq+R5HpGdvonTRgtI+SY8pnAWzCRRlWfX8qiyCqslnAoMeRBShj8H4vXt/uhnV/W7toU8qxf/8cTZV1IH6i9mQ==","Hash":"0A80656DF6358337D178D6850F043F1D1ECAF93377D4DC517C00A0F722A2B2BC"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VERONA AG. 30 - CASSA MERCATO ORTOF","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":98.98,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21011","Id":null,"IdAzienda":"8","CodiceIban":"IT18W0503411751000000365990","CodiceAbi":"05034","CodiceCab":"11751","CodiceFiliale":"11751","NumeroRapporto":"000000365990","CodiceDivisa":"EUR","Descrizione":"000000365990","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"alias conto 000000365990","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1306091","Type":102,"Crypt":"FSckuTA50kO1oWDxSrZwzoZuz1Q5KIWvr3eaCVJGmrEoNUwu+7vuH2dDPMShNZFz","Hash":"5A880F0F671BB86DF8A9CD5867263F2453CB63FE10DF767CA886826BFB44E3DD"},"Status":0},"Azienda":{"Id":8,"CodiceAzienda":"100000004","RagioneSociale":"QUERCIA SRL","CodiceSia":"AYRJA","CodiceCuc":"0796702F","CreditorId":null,"CodiceFiscale":"01994840237","PartitaIva":"01994840237","StatoAzienda":1,"Identifier":{"Id":"8","Type":1,"Crypt":"JmfnN6S7nVAessiXrDLB6quM9sM9aQ85vM+q6Xm6PJsazspxBCnYV9XvpcgKzJN2","Hash":"54FAB8F8760C80126B8EE29580E7195C8E31EC1C695C02DB0F7E23232330F522"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":9,"IdRapporto":1272210,"ClasseServizio":0,"Crypt":"xlV1lE/mmK+ggN+bGQem16o/Bpd18O7DS3UOfQCrUqUk0BX0dkOy1FPYsaizQJrLQuJZcOBKf8Kep7qtZMf9bPaDTzAwVxLCAS95nAz8L7btPirg6kVF6UsL9eDIWimohR1v9WjQ9M7dikyxqjARjw==","Hash":"E474DCF58A3962C1C735BCB7C1951346D9414E91B5D6EEF8C4B5E76E98F15336"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VERONA AG. 1","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":293.62,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21002","Id":null,"IdAzienda":"9","CodiceIban":"IT72Y0503411702000000060316","CodiceAbi":"05034","CodiceCab":"11702","CodiceFiliale":"11702","NumeroRapporto":"000000060316","CodiceDivisa":"EUR","Descrizione":"000000060316","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"alias","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1272210","Type":102,"Crypt":"ksZrwyYBgUhoVWkFfF9/UTmDeHDs5ywajJL2OZF7y0kOuLzMF5TBF4HQXZj7FDDO","Hash":"466B12B71C9C5ABF73FAEB38AFD987424EF7F141DD954462B74200D8ABADBBE3"},"Status":0},"Azienda":{"Id":9,"CodiceAzienda":"100000005","RagioneSociale":"GESCO S.R.L.","CodiceSia":"AYL8W","CodiceCuc":"0796681G","CreditorId":null,"CodiceFiscale":"10656190153","PartitaIva":"10656190153","StatoAzienda":1,"Identifier":{"Id":"9","Type":1,"Crypt":"PV9C6M8I7zCkhpLLfUECxTXGrvHdzwedRp/fB0w8gWJlGuz3pfabNCDQuH7wvvW8","Hash":"D216B56EF621B997BDB4530302136B594226516B1D35BAF0E464531756EF51B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":9,"IdRapporto":1338134,"ClasseServizio":0,"Crypt":"ceqx1yw+kjy77A7YGLJm/OaT/hbfU3iE8gntIRTn9ljKW5DCPIc07HM0wG+0ck4jrpeWL98KbVCmT4M1wWD0OZy365BTEFvGxwa8oB84RW+cewEDdtFfEbHodPAPYMZhOVQELvZZ7Z5B4VKoZnDjvA==","Hash":"BE037D0376CF7F419BB8CA2EB055BCF873333F87BCC8F8E73CBE73CA117EBF23"},"Rapporto":{"DescrizioneBanca":"BANCA NAZIONALE DEL LAVORO SPA","DescrizioneSportello":"AG.IN SEDE VERONA","UltimoAggiornamento":"2019-01-11T00:00:00","Saldo":215.90,"DataSaldo":"2019-01-11T00:00:00","Stato":1,"Bic":null,"Id":null,"IdAzienda":"9","CodiceIban":"IT95R0100511700000000001722","CodiceAbi":"01005","CodiceCab":"11700","CodiceFiliale":"11700","NumeroRapporto":"000000001722","CodiceDivisa":"EUR","Descrizione":"000000001722","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"alias","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1338134","Type":102,"Crypt":"qoWL7roTdUR0csXG+Ep1nO14uAwLbGyz+K/k5GfN32ekmSbjSPglasdnb+GjJFVf","Hash":"DCC4D63E51E1BCDA4EF8350981704E4ABF9E46999B3AC348CA6F70B779FE3457"},"Status":0},"Azienda":{"Id":9,"CodiceAzienda":"100000005","RagioneSociale":"GESCO S.R.L.","CodiceSia":"AYL8W","CodiceCuc":"0796681G","CreditorId":null,"CodiceFiscale":"10656190153","PartitaIva":"10656190153","StatoAzienda":1,"Identifier":{"Id":"9","Type":1,"Crypt":"PV9C6M8I7zCkhpLLfUECxTXGrvHdzwedRp/fB0w8gWJlGuz3pfabNCDQuH7wvvW8","Hash":"D216B56EF621B997BDB4530302136B594226516B1D35BAF0E464531756EF51B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":13,"IdRapporto":11494,"ClasseServizio":0,"Crypt":"9sBYCGblTNKXjcsUkd3aGs0um5OGxlJtGMTt5XLXqoFzaaxxf+H7StLdjACLOwb17ekD339c1VOk9JxwC/z97smY50yuJvEQlN/eEXYYqEE6IrX9ia49eHrU58pj+NEFOBo4RwRB6d39xwsqGPZJuQ==","Hash":"939319AF50A6F52E7D4A75017EB1B1D56D20677901012F49E4F7AD57C4E6F6C3"},"Rapporto":{"DescrizioneBanca":"BANCA MONTE DEI PASCHI DI SIENA S.P.A.","DescrizioneSportello":"AGENZIA N. 1","UltimoAggiornamento":"2018-12-24T00:00:00","Saldo":0.00,"DataSaldo":"2018-12-24T00:00:00","Stato":2,"Bic":null,"Id":null,"IdAzienda":"13","CodiceIban":"IT59A0103011701000000598345","CodiceAbi":"01030","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000598345","CodiceDivisa":"EUR","Descrizione":"000000598345","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000598345","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"11494","Type":102,"Crypt":"LoElPFjfIZ3SkG24PWmAGnVq3zZU/+W+W0MfblqzyGPmSVw6NGl3ycZqSP9SUnnj","Hash":"90B3BCF5390C4293EE4158BFB07FDD3692546FA4A873F5C9842D34A46C86A623"},"Status":0},"Azienda":{"Id":13,"CodiceAzienda":"100000003","RagioneSociale":"SAR.MAR. SPA","CodiceSia":"B0300","CodiceCuc":"0261148Q","CreditorId":null,"CodiceFiscale":"01239860230","PartitaIva":"01239860230","StatoAzienda":1,"Identifier":{"Id":"13","Type":1,"Crypt":"UOlfpWBqtkr+UBtvc2ojtCMfsmCKQ1cITk2NrX+BwhhRLYAClfQ5Y6nUwtYJeGQo","Hash":"E6C4B1D1202FE7AAA1767B8D6D19E05FB626D778385F88060B50A5E138D9C287"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":13,"IdRapporto":11493,"ClasseServizio":0,"Crypt":"NTSMVtcMLu2yMJY7inRwDKmSaNy11pJErx41o5QmXiIms/c0eI39ZQrmItvstj3RlkNVg7AiVBL31lrJB2hFBFE6n308K3EpuQD0IDWcE4VXS6CkzxZn8R7KQ6St4Ey+wIKXdNzMrc+b6wJ/5e34Rw==","Hash":"C3A67DAE083EAF1480F3EDF75B7CCC01632CC309AB509CF63D978B5041A6679F"},"Rapporto":{"DescrizioneBanca":"BANCA MONTE DEI PASCHI DI SIENA S.P.A.","DescrizioneSportello":"AGENZIA N. 1","UltimoAggiornamento":"2019-01-10T00:00:00","Saldo":481.13,"DataSaldo":"2019-01-10T00:00:00","Stato":1,"Bic":null,"Id":null,"IdAzienda":"13","CodiceIban":"IT58S0103011701000000386065","CodiceAbi":"01030","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000386065","CodiceDivisa":"EUR","Descrizione":"000000386065","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000386065","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"11493","Type":102,"Crypt":"UdXiA4mXDFi5KILb2XdAYxTonesy8VSlsxElF3IIcrRSWuMvaKfsi/8Y+4R7yKqg","Hash":"0B43B2D200F9E5FB46F0A971476D2794F6BC9567C22B03435C6FBAE65ECC3588"},"Status":0},"Azienda":{"Id":13,"CodiceAzienda":"100000003","RagioneSociale":"SAR.MAR. SPA","CodiceSia":"B0300","CodiceCuc":"0261148Q","CreditorId":null,"CodiceFiscale":"01239860230","PartitaIva":"01239860230","StatoAzienda":1,"Identifier":{"Id":"13","Type":1,"Crypt":"UOlfpWBqtkr+UBtvc2ojtCMfsmCKQ1cITk2NrX+BwhhRLYAClfQ5Y6nUwtYJeGQo","Hash":"E6C4B1D1202FE7AAA1767B8D6D19E05FB626D778385F88060B50A5E138D9C287"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":13,"IdRapporto":9055,"ClasseServizio":0,"Crypt":"8UJbCqK0+eYufuZAeJbJtC5V5LyfDl38XMCs6w9VWxIF3CvpKpBPUIz6fhQi3Qss28w6LEo7GrlqCwAxIg69SgU7n6hn6cjNNS7NhtCK9wV2ECdIWyWAWZIL3er+xun2oCzlfcJzhb1tbCwz/ovM0Q==","Hash":"10FD13E60A97762FFFB43FE8B7B8AF7593DCF22F221854328817731BB6166D89"},"Rapporto":{"DescrizioneBanca":"BANCA NAZIONALE DEL LAVORO SPA","DescrizioneSportello":"AG.IN SEDE VERONA","UltimoAggiornamento":"2019-01-11T00:00:00","Saldo":5858.69,"DataSaldo":"2019-01-11T00:00:00","Stato":1,"Bic":null,"Id":null,"IdAzienda":"13","CodiceIban":"IT26G0100511700000000012648","CodiceAbi":"01005","CodiceCab":"11700","CodiceFiliale":"11700","NumeroRapporto":"000000012648","CodiceDivisa":"EUR","Descrizione":"000000012648","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000012648","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"9055","Type":102,"Crypt":"+8CqmVs80z48GRzO2+MEbZCwB3Z4fFhU9GnOFQcYoLkMnUwJ2Sf9AwBtdNqUBid4","Hash":"7D0613292A37315394F09B5E7D9B94F52DED7DA86EAB3BB52D13559E136EC3F4"},"Status":0},"Azienda":{"Id":13,"CodiceAzienda":"100000003","RagioneSociale":"SAR.MAR. SPA","CodiceSia":"B0300","CodiceCuc":"0261148Q","CreditorId":null,"CodiceFiscale":"01239860230","PartitaIva":"01239860230","StatoAzienda":1,"Identifier":{"Id":"13","Type":1,"Crypt":"UOlfpWBqtkr+UBtvc2ojtCMfsmCKQ1cITk2NrX+BwhhRLYAClfQ5Y6nUwtYJeGQo","Hash":"E6C4B1D1202FE7AAA1767B8D6D19E05FB626D778385F88060B50A5E138D9C287"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":12,"IdRapporto":812850,"ClasseServizio":0,"Crypt":"t1Fqrup3g99JaTsC7+8LrNwJFfWKwNCaFZUZRIDYCaqKAso+IwcjGIdDhKzdJcxh3VJjfYGi/Jukxc+HKC03rhjJwq9bdCNRghVoRO5xu9v1N+cKrvfNIAQ89a8VEd5AFUTWA2LRfQaP7FB1y1r4Cg==","Hash":"C8F036BEA755A8AADA2AA698BE06C8AE27A6BD971EE22229C72DA929EACD51AE"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"CONEGLIANO","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":1102.65,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21027","Id":null,"IdAzienda":"12","CodiceIban":"IT76R0503461620000000004263","CodiceAbi":"05034","CodiceCab":"61620","CodiceFiliale":"61620","NumeroRapporto":"000000004263","CodiceDivisa":"EUR","Descrizione":"000000004263","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000004263","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"812850","Type":102,"Crypt":"wMFKQNXOtoWbSEZj6ryVADy9BkkdTblelOv+zHKW/1v6R0cPESt6fUVMZc7Qa1X7","Hash":"14EC44636FC0D9536D11B58D1C07DF5CB2CE95590D8AC069CBE59F6B595F5651"},"Status":0},"Azienda":{"Id":12,"CodiceAzienda":"100000008","RagioneSociale":"CONSORZIO P.R.U. STADIO CONEGL","CodiceSia":"AYRLG","CodiceCuc":"0796765T","CreditorId":"","CodiceFiscale":"03818360269","PartitaIva":"03818360269","StatoAzienda":1,"Identifier":{"Id":"12","Type":1,"Crypt":"gHgtl4MUfTSgFbTTFUudQ/x22MoDhIKVLQjw2GDD6PyyljlVh+RRMbzajz7gV9Gd","Hash":"A7E428A09430172AED14C8C06CA4DD02EDD7A3C4A193680C3A497D711A112527"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":13,"IdRapporto":1598381,"ClasseServizio":0,"Crypt":"KxJTdamyD/v34zp8W9b9TGwCfca7AhAX35eOa1BsND+LvhqgblPxViG4MF/xom8hKbHVSJII0XT+f5siYO3vwuDgPPxhmQose3joizezDnTDq5bsU4NteSs3rr52Ed+/PxjI2fHSkZsGeM4zKvDXLg==","Hash":"B2F11424528F6B0CB86648F87A89E5EB9E8CDFEDBDF9D2CE835FA5C2893093B5"},"Rapporto":{"DescrizioneBanca":"BPER BANCA S.P.A.","DescrizioneSportello":"AG. 1 VERONA","UltimoAggiornamento":"2019-01-11T00:00:00","Saldo":1296.18,"DataSaldo":"2019-01-11T00:00:00","Stato":1,"Bic":null,"Id":null,"IdAzienda":"13","CodiceIban":"IT25D0538711702000002366573","CodiceAbi":"05387","CodiceCab":"11702","CodiceFiliale":"11702","NumeroRapporto":"000002366573","CodiceDivisa":"EUR","Descrizione":"000002366573","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000002366573","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1598381","Type":102,"Crypt":"VaBe9JpkDRRYcTBpytW82J8KHWrah9qhu5IwhbOSbLXMfWfR+q8JCmGrtPEIMI7h","Hash":"8488164A71C110365B7AD1D05AE7306DECA3773368FA38773E957514E0DB1AF2"},"Status":0},"Azienda":{"Id":13,"CodiceAzienda":"100000003","RagioneSociale":"SAR.MAR. SPA","CodiceSia":"B0300","CodiceCuc":"0261148Q","CreditorId":null,"CodiceFiscale":"01239860230","PartitaIva":"01239860230","StatoAzienda":1,"Identifier":{"Id":"13","Type":1,"Crypt":"UOlfpWBqtkr+UBtvc2ojtCMfsmCKQ1cITk2NrX+BwhhRLYAClfQ5Y6nUwtYJeGQo","Hash":"E6C4B1D1202FE7AAA1767B8D6D19E05FB626D778385F88060B50A5E138D9C287"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":13,"IdRapporto":1276558,"ClasseServizio":0,"Crypt":"w7khMtW08HzpxXHba1e0D6MIOD/CpAAVHLADBHrjuzZ1PdZO0IXCqvuot29zbkOoNpMdJehKYB6fCJ0r979aA9C6Li6PDZmHY7pxCjNz+Q4PGFoZbyzMOcT5v+3WJSC5srD3Ki/K28N8ruJLAe02xQ==","Hash":"6B962984EAF4C6718DF38EAFF2AF01BE6C858870956A14F52D891A0097F11133"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VERONA AG. 1","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":-12516.44,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21002","Id":null,"IdAzienda":"13","CodiceIban":"IT52C0503411702000000122821","CodiceAbi":"05034","CodiceCab":"11702","CodiceFiliale":"11702","NumeroRapporto":"000000122821","CodiceDivisa":"EUR","Descrizione":"000000122821","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000122821","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1276558","Type":102,"Crypt":"B1tEBJw+Rvisq8amZEkgSYAKrcjw/Y6gkbsoFNY0TxbiKzPVggmrzhhflnvByuAA","Hash":"F6F3F7D5E7A45B477C2DEC9647ED74BFDBE3BD30891B74CF67436B6834C9762F"},"Status":0},"Azienda":{"Id":13,"CodiceAzienda":"100000003","RagioneSociale":"SAR.MAR. SPA","CodiceSia":"B0300","CodiceCuc":"0261148Q","CreditorId":null,"CodiceFiscale":"01239860230","PartitaIva":"01239860230","StatoAzienda":1,"Identifier":{"Id":"13","Type":1,"Crypt":"UOlfpWBqtkr+UBtvc2ojtCMfsmCKQ1cITk2NrX+BwhhRLYAClfQ5Y6nUwtYJeGQo","Hash":"E6C4B1D1202FE7AAA1767B8D6D19E05FB626D778385F88060B50A5E138D9C287"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":13,"IdRapporto":2149559,"ClasseServizio":0,"Crypt":"fynFOlyio7osVDKV2DpVeO9bCyw916K6oOykKuYI2/5625gZHBXgHW7Ojsz6NucBY2JqCnRZmX8UkDHP39Vz9xX5jfyXRA27siN/uxKmQ6MvC7hPACCBUtDS2ZnvrlBmJ3+6ZAyqQQkP2gJCFq0PwQ==","Hash":"076CDD95C007C7BABD5FDAB00350AB5E008358DAEA51E2FBC4625A5EC5ECE3E5"},"Rapporto":{"DescrizioneBanca":"UNICREDIT SPA","DescrizioneSportello":"FIL.OPERATIVA TRIVENETO OCCID.","UltimoAggiornamento":"2018-11-23T00:00:00","Saldo":260.88,"DataSaldo":"2018-11-23T00:00:00","Stato":2,"Bic":null,"Id":null,"IdAzienda":"13","CodiceIban":"IT10E0200811758000104961280","CodiceAbi":"02008","CodiceCab":"11758","CodiceFiliale":"11758","NumeroRapporto":"000104961280","CodiceDivisa":"EUR","Descrizione":"000104961280","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000104961280","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2149559","Type":102,"Crypt":"rq2X9cPvyC1zjjwsF6BWyR5PGw3Wd6/WJa62c/pmpxefpgoYagOKWIxJzHQZTjNa","Hash":"72A31472D1EF715048CFC7EB9C630933D62A4B48FAF73FB56E202340A5D73B99"},"Status":0},"Azienda":{"Id":13,"CodiceAzienda":"100000003","RagioneSociale":"SAR.MAR. SPA","CodiceSia":"B0300","CodiceCuc":"0261148Q","CreditorId":null,"CodiceFiscale":"01239860230","PartitaIva":"01239860230","StatoAzienda":1,"Identifier":{"Id":"13","Type":1,"Crypt":"UOlfpWBqtkr+UBtvc2ojtCMfsmCKQ1cITk2NrX+BwhhRLYAClfQ5Y6nUwtYJeGQo","Hash":"E6C4B1D1202FE7AAA1767B8D6D19E05FB626D778385F88060B50A5E138D9C287"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":13,"IdRapporto":2149560,"ClasseServizio":0,"Crypt":"C14HTeF5f/m/5929OYrK2+8YJKjimXeZx/M+ENgAwki5pbgEqbs2bxG+mNJ9AOC8gN7wBRYN5GqTG77T09xl6Iqxpgj1V3Sgdazu7M4ynBga7lTy70W6O7hslsHSyRE9PU1U5IC+GOzx8zKSscevIA==","Hash":"19BC5B418053CC943EEB5FA4E101F35506570ECA83EF9957C0D56E07F4004DB6"},"Rapporto":{"DescrizioneBanca":"UNICREDIT SPA","DescrizioneSportello":"FIL.OPERATIVA TRIVENETO OCCID.","UltimoAggiornamento":"2018-11-23T00:00:00","Saldo":225.55,"DataSaldo":"2018-11-23T00:00:00","Stato":2,"Bic":null,"Id":null,"IdAzienda":"13","CodiceIban":"IT29X0200811758000104866179","CodiceAbi":"02008","CodiceCab":"11758","CodiceFiliale":"11758","NumeroRapporto":"000104866179","CodiceDivisa":"EUR","Descrizione":"000104866179","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000104866179","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2149560","Type":102,"Crypt":"zfgRqF1n7SvuTwX0IYpXnaeljO72d6h/PX8q2rxopcU4T8ZOV9Ygh4MNYHDQGs1q","Hash":"F563A3B32E243A9BE4E9AF4D96EA2FF4F0373135FC4ADA1F9A051E54308636BB"},"Status":0},"Azienda":{"Id":13,"CodiceAzienda":"100000003","RagioneSociale":"SAR.MAR. SPA","CodiceSia":"B0300","CodiceCuc":"0261148Q","CreditorId":null,"CodiceFiscale":"01239860230","PartitaIva":"01239860230","StatoAzienda":1,"Identifier":{"Id":"13","Type":1,"Crypt":"UOlfpWBqtkr+UBtvc2ojtCMfsmCKQ1cITk2NrX+BwhhRLYAClfQ5Y6nUwtYJeGQo","Hash":"E6C4B1D1202FE7AAA1767B8D6D19E05FB626D778385F88060B50A5E138D9C287"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":13,"IdRapporto":2156215,"ClasseServizio":0,"Crypt":"BjRfVjBxh80cNVn+wkhnUtqCVM4yETavk4Weft81vGg/Xi2tqrobTS6HXgrW9g+EjChwcO6YnWbs4tLy4KjL3bDJk0y2hVxHRcu/9CP6SMHxDwmF4MNOjpr+3c9Nda1/sGkGuCakH2zO/NP7godxUg==","Hash":"D3D91CCC2C522E3D2C55EC51EAAB9D6EF9AE4E63157D5DE4EC7649569E809C19"},"Rapporto":{"DescrizioneBanca":"BANCA MONTE DEI PASCHI DI SIENA S.P.A.","DescrizioneSportello":"AGENZIA N. 1","UltimoAggiornamento":"2019-01-10T00:00:00","Saldo":382.82,"DataSaldo":"2019-01-10T00:00:00","Stato":1,"Bic":null,"Id":null,"IdAzienda":"13","CodiceIban":"IT23V0103011701000000815942","CodiceAbi":"01030","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000815942","CodiceDivisa":"EUR","Descrizione":"000000815942","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000815942","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2156215","Type":102,"Crypt":"lf2jveZdH5DAMnCVmvPurfS2k+TSe8fQwLrRiLDr9eCsv4X4l9q7Nj9UsrCrGsz3","Hash":"7BF29EE96FD4E8C76F0EA44C578552020D3090E852B360EB252B4D75D67B290F"},"Status":0},"Azienda":{"Id":13,"CodiceAzienda":"100000003","RagioneSociale":"SAR.MAR. SPA","CodiceSia":"B0300","CodiceCuc":"0261148Q","CreditorId":null,"CodiceFiscale":"01239860230","PartitaIva":"01239860230","StatoAzienda":1,"Identifier":{"Id":"13","Type":1,"Crypt":"UOlfpWBqtkr+UBtvc2ojtCMfsmCKQ1cITk2NrX+BwhhRLYAClfQ5Y6nUwtYJeGQo","Hash":"E6C4B1D1202FE7AAA1767B8D6D19E05FB626D778385F88060B50A5E138D9C287"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":633660,"IdRapporto":2177932,"ClasseServizio":0,"Crypt":"4YfFv4nJ7rBmZOPiFnJe0/vH13bmzMlkUKx5ALcyJXYrIlkbN+86rn885EnmiLoOZY+94eYNy50ZYEuy6THRdfwYam7HmeN9tc6b4oGMkff4Mn0U7iZmZItnWQRReedIZhae2Cf4NuV+EcKonCWlIQ==","Hash":"ECEFA2746D31BA8B7C0C499CCFD7667040EC8464DF864E7BA38A5019C3294EE8"},"Rapporto":{"DescrizioneBanca":"INTESA SANPAOLO SPA","DescrizioneSportello":"VERONA VIA E. FERMI","UltimoAggiornamento":"2019-01-11T00:00:00","Saldo":589.55,"DataSaldo":"2019-01-11T00:00:00","Stato":1,"Bic":null,"Id":null,"IdAzienda":"633660","CodiceIban":"IT47Y0306918465100000001175","CodiceAbi":"03069","CodiceCab":"18465","CodiceFiliale":"18465","NumeroRapporto":"100000001175","CodiceDivisa":"EUR","Descrizione":"100000001175","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"100000001175","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2177932","Type":102,"Crypt":"NPHxqVigCU9ITeJjwP5QwR3uDV3hLLsjyfE6LqpkLXmmngI73LL+GUtouDLUa3/m","Hash":"F97FA4DACA68C76ED3CA70BBE8FC8E495F41504C26ECB3EB0148FAA76B16E7A5"},"Status":0},"Azienda":{"Id":633660,"CodiceAzienda":"600243036","RagioneSociale":"PIEVE S.R.L.","CodiceSia":"45K66","CodiceCuc":"1081825C","CreditorId":null,"CodiceFiscale":"03204770238","PartitaIva":"03204770238","StatoAzienda":1,"Identifier":{"Id":"633660","Type":1,"Crypt":"tvBckNC8ybhavESp79EvpmuHyVZdUyFcZQt8J9oDr5wpYshRFIUSRWGu2VM4ZIFQ","Hash":"49AA516A202644C1DA4488FDC95CAEE841D5072C156E2AD71656FADFB6AD5694"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":514369,"IdRapporto":2177949,"ClasseServizio":0,"Crypt":"xllvXwfQefwBa5Af4sV3EVzhddTfk2KPOs4KNPt/qjzWa+FYNhzNf0fWDvXgM2eRLqgHL4aMCYdQI0DbLwn3P0Um7Yc0ju1hCCwGhhXZy+P35ohU/5pHqI2U+Nj1ro3bMjMMJfte6yq+UYYttAdULQ==","Hash":"606000781013AEF86C44DE448B206287F89A65E8E85855FD727AF48B3E2872CF"},"Rapporto":{"DescrizioneBanca":"INTESA SANPAOLO SPA","DescrizioneSportello":"VERONA VIA E. FERMI","UltimoAggiornamento":"2019-01-11T00:00:00","Saldo":380.46,"DataSaldo":"2019-01-11T00:00:00","Stato":1,"Bic":null,"Id":null,"IdAzienda":"514369","CodiceIban":"IT40I0306918465100000001022","CodiceAbi":"03069","CodiceCab":"18465","CodiceFiliale":"18465","NumeroRapporto":"100000001022","CodiceDivisa":"EUR","Descrizione":"100000001022","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"100000001022","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2177949","Type":102,"Crypt":"xhzn8ravr6M+CY89UwHeeAUTl2e/LfpKh72rH+qNxHywHBI1uUFKtzXIqEC0OUiO","Hash":"7C351617AD481DD3363EFB5D8E05B8E674E096AB5FD14AFF7FC5C6E3F47A4E4C"},"Status":0},"Azienda":{"Id":514369,"CodiceAzienda":"600233950","RagioneSociale":"SAN FERMO 12 S.R.L.","CodiceSia":"BDGT9","CodiceCuc":"1038806X","CreditorId":null,"CodiceFiscale":"03590990234","PartitaIva":"03590990234","StatoAzienda":1,"Identifier":{"Id":"514369","Type":1,"Crypt":"RJ8jTI9Rl3htoff+u4fBYPDgwnwYniAcgFnLaEblS6t75rCh29ch22cb3XfXNMmd","Hash":"3E367AFE6DC0716FEDB0545018E2097F1EC11972FF36D530879325F8E4499B62"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":13,"IdRapporto":2538954,"ClasseServizio":0,"Crypt":"UMxTWN44HtPLj4ClWxKy4wI5FQIhb1eAT0/5LHrrhZYuWWk01TKkP+Cpj7yiYVWMopbXeM9Pw3EzGo0Fbmn/UDFO+iwjmf0xxirjVAYG+51nnDrpQqDB+7q6GgdfQwH0hcz9Xe4klMvcwFnfzdZJmA==","Hash":"F9E8EE85B065109BAF6A5899C049A69520E033CDD8078BB6C0B8AE26B612D60C"},"Rapporto":{"DescrizioneBanca":"UNICREDIT SPA","DescrizioneSportello":"FILIALE OPERATIVA ROMA 1","UltimoAggiornamento":"2019-01-11T00:00:00","Saldo":172.02,"DataSaldo":"2019-01-11T00:00:00","Stato":1,"Bic":null,"Id":null,"IdAzienda":"13","CodiceIban":"IT98K0200805364000104961280","CodiceAbi":"02008","CodiceCab":"05364","CodiceFiliale":"05364","NumeroRapporto":"000104961280","CodiceDivisa":"EUR","Descrizione":"000104961280","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000104961280","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2538954","Type":102,"Crypt":"otylDnoqU4TDhqHkZYRBMTbuF6dfK6motqPwS3WN04oKx3UqlL6vjpvd8qQhIXa6","Hash":"4DFC152C1F39622EBEF952E827ABF3BCE04039D28E86EC2CCF4C8C42015F8DC7"},"Status":0},"Azienda":{"Id":13,"CodiceAzienda":"100000003","RagioneSociale":"SAR.MAR. SPA","CodiceSia":"B0300","CodiceCuc":"0261148Q","CreditorId":null,"CodiceFiscale":"01239860230","PartitaIva":"01239860230","StatoAzienda":1,"Identifier":{"Id":"13","Type":1,"Crypt":"UOlfpWBqtkr+UBtvc2ojtCMfsmCKQ1cITk2NrX+BwhhRLYAClfQ5Y6nUwtYJeGQo","Hash":"E6C4B1D1202FE7AAA1767B8D6D19E05FB626D778385F88060B50A5E138D9C287"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":13,"IdRapporto":2538955,"ClasseServizio":0,"Crypt":"CkFdXtd+7ZNEr3P/CuRdD6oBA5Um3Ot468a8bs55X9Ox0niI+nMvyM7HDASVqLlrkqwTyTzSp/2CN3VyNGSJ9SWA2dmS3jZ6qxw902vpkVI6z7gj/hRnMsmU7kozq9/hSu40UxmhWYwmWYUzVIkpqQ==","Hash":"400DE95D31048ECE9F7A3713752E9F4BF2C325F69A21272843B3BCFD7C35621D"},"Rapporto":{"DescrizioneBanca":"UNICREDIT SPA","DescrizioneSportello":"FILIALE OPERATIVA ROMA 1","UltimoAggiornamento":"2019-01-11T00:00:00","Saldo":440.94,"DataSaldo":"2019-01-11T00:00:00","Stato":1,"Bic":null,"Id":null,"IdAzienda":"13","CodiceIban":"IT13D0200805364000104866179","CodiceAbi":"02008","CodiceCab":"05364","CodiceFiliale":"05364","NumeroRapporto":"000104866179","CodiceDivisa":"EUR","Descrizione":"000104866179","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000104866179","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2538955","Type":102,"Crypt":"FI/at/uXD6FvHdAdRntv8O7Lz8Wbdo4I7R396CsZkeI/0RRGUcVTiso35LViTQ/0","Hash":"09217C4FE654D485D8B0B2D728A2E600B7C891334B87F6F9950CA363E57222FF"},"Status":0},"Azienda":{"Id":13,"CodiceAzienda":"100000003","RagioneSociale":"SAR.MAR. SPA","CodiceSia":"B0300","CodiceCuc":"0261148Q","CreditorId":null,"CodiceFiscale":"01239860230","PartitaIva":"01239860230","StatoAzienda":1,"Identifier":{"Id":"13","Type":1,"Crypt":"UOlfpWBqtkr+UBtvc2ojtCMfsmCKQ1cITk2NrX+BwhhRLYAClfQ5Y6nUwtYJeGQo","Hash":"E6C4B1D1202FE7AAA1767B8D6D19E05FB626D778385F88060B50A5E138D9C287"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":13,"IdRapporto":2177539,"ClasseServizio":0,"Crypt":"lUqVpnuX4EWnv07QiWV70FLoAo1Vh7yNAdAj7o/tNWUSQsOEq7x+kM3rSEOSz9xYNB/mINiXduV6WdpcPPrvJAQuotkAyrI8rHzpW1ddgnVVLANHh/zonguONfvg1YRjP+tauZwgY7vJuokjOdPrYQ==","Hash":"63830D3BB7177F32F96BA21D2CE9156008C46BB8C1583F1DEF51C9C4512FCE4C"},"Rapporto":{"DescrizioneBanca":"INTESA SANPAOLO SPA","DescrizioneSportello":"VERONA VIA E. FERMI","UltimoAggiornamento":"2019-01-11T00:00:00","Saldo":-49819.63,"DataSaldo":"2019-01-11T00:00:00","Stato":1,"Bic":null,"Id":null,"IdAzienda":"13","CodiceIban":"IT28G0306918465100000001579","CodiceAbi":"03069","CodiceCab":"18465","CodiceFiliale":"18465","NumeroRapporto":"100000001579","CodiceDivisa":"EUR","Descrizione":"100000001579","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"100000001579","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2177539","Type":102,"Crypt":"bRpEv+94NFnFCtemffScgLGcEiGz7ryuw6/398ZQmQz9rn9yv/5uDb21sR+dDYgC","Hash":"912B4A36B2A64356AACD962761AA5F078AB44BD4DF9BE3B9F8334EA63BDC5E1E"},"Status":0},"Azienda":{"Id":13,"CodiceAzienda":"100000003","RagioneSociale":"SAR.MAR. SPA","CodiceSia":"B0300","CodiceCuc":"0261148Q","CreditorId":null,"CodiceFiscale":"01239860230","PartitaIva":"01239860230","StatoAzienda":1,"Identifier":{"Id":"13","Type":1,"Crypt":"UOlfpWBqtkr+UBtvc2ojtCMfsmCKQ1cITk2NrX+BwhhRLYAClfQ5Y6nUwtYJeGQo","Hash":"E6C4B1D1202FE7AAA1767B8D6D19E05FB626D778385F88060B50A5E138D9C287"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":13,"IdRapporto":2563167,"ClasseServizio":0,"Crypt":"2AoogDwsY+pg3H1u6JCpAg8vjiHfNcJHLa1DbeXhLwyj7M6htpX2MQme8fcfspZgBOLKTHr3DLYn0m/exsg0R01+PGnBYFCrKmR1hCjusv38gfPKOqIUHLT3CquMxmysOWk5me94XSB33tye/ObETg==","Hash":"1C494505E9F434B714228298535ABD34E0A5BE13F01574F669F14F1E95443E7D"},"Rapporto":{"DescrizioneBanca":"BPER BANCA S.P.A.","DescrizioneSportello":"AG. 1 VERONA","UltimoAggiornamento":"2019-01-11T00:00:00","Saldo":-300000.00,"DataSaldo":"2019-01-11T00:00:00","Stato":1,"Bic":null,"Id":null,"IdAzienda":"13","CodiceIban":"IT91O0538711702000003016271","CodiceAbi":"05387","CodiceCab":"11702","CodiceFiliale":"11702","NumeroRapporto":"000003016271","CodiceDivisa":"EUR","Descrizione":"000003016271","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000003016271","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2563167","Type":102,"Crypt":"lk0/YCettfghBPcNCECKOqBVzSVLb/xfKJ4AOLdodMSYAxXcCJ9MmyuBVbbskMtU","Hash":"1CE80D084D9223E165C3F9767C8A57FF6AA3A33D672A0235B74A42458BF86575"},"Status":0},"Azienda":{"Id":13,"CodiceAzienda":"100000003","RagioneSociale":"SAR.MAR. SPA","CodiceSia":"B0300","CodiceCuc":"0261148Q","CreditorId":null,"CodiceFiscale":"01239860230","PartitaIva":"01239860230","StatoAzienda":1,"Identifier":{"Id":"13","Type":1,"Crypt":"UOlfpWBqtkr+UBtvc2ojtCMfsmCKQ1cITk2NrX+BwhhRLYAClfQ5Y6nUwtYJeGQo","Hash":"E6C4B1D1202FE7AAA1767B8D6D19E05FB626D778385F88060B50A5E138D9C287"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":13,"IdRapporto":1654446,"ClasseServizio":0,"Crypt":"xxNoQ1boJD6/RQWiVwyjygZSZfqB8fDI5ds8AZOAI1fGo0Uhh+vKuWjHd3wsmHXFhuz8r5zBtjH4XbxCQXbWL1Xsk5OVOmEMyWM8Il6tYi6w0ehXJb3fciRgq5eUiL55+fKVSVaHQo7ayCk7kOwwCQ==","Hash":"6F087FF294DA8F0B8BD19439DE52091B96C786AEDA14F620BF744C09D0C75B04"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VERONA AG. 1","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":0.00,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21002","Id":null,"IdAzienda":"13","CodiceIban":"IT08Q0503411702000000002013","CodiceAbi":"05034","CodiceCab":"11702","CodiceFiliale":"11702","NumeroRapporto":"000000002013","CodiceDivisa":"EUR","Descrizione":"000000002013","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002013","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1654446","Type":102,"Crypt":"nzCKf0UDWEmu+Ym9DGWSs+xtkFEDV4Bymhqvkj9etLWwAkxAAW0we01/xkUmCHDT","Hash":"A664D19BB625518489D61FBC13D826DFBAFC149C2B889B3BE96276E4EC392DF5"},"Status":0},"Azienda":{"Id":13,"CodiceAzienda":"100000003","RagioneSociale":"SAR.MAR. SPA","CodiceSia":"B0300","CodiceCuc":"0261148Q","CreditorId":null,"CodiceFiscale":"01239860230","PartitaIva":"01239860230","StatoAzienda":1,"Identifier":{"Id":"13","Type":1,"Crypt":"UOlfpWBqtkr+UBtvc2ojtCMfsmCKQ1cITk2NrX+BwhhRLYAClfQ5Y6nUwtYJeGQo","Hash":"E6C4B1D1202FE7AAA1767B8D6D19E05FB626D778385F88060B50A5E138D9C287"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":318683,"IdRapporto":1163764,"ClasseServizio":0,"Crypt":"NuIIl1je/Zvvd08Ky4tlIGWmgvZV1toRMwXySV/7IIxqtGgIxcw/poyyAKClVWLBCayRCKcQisoaNxY6yD4fcb22UfrTO81LRrEFqvDgiswqEJFEUcBy6MZ+UIN2OYn2BIPRjvuPKPny6cQ9ixE16w==","Hash":"20A7E8F1C9ACA08C18CDC630CF5BA97C0FD7D47E52CBA1CAA590CB666A4EE63B"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VERONA AG. 30 - CASSA MERCATO ORTOF","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":451872.42,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21011","Id":null,"IdAzienda":"318683","CodiceIban":"IT89I0503411751000000000342","CodiceAbi":"05034","CodiceCab":"11751","CodiceFiliale":"11751","NumeroRapporto":"000000000342","CodiceDivisa":"EUR","Descrizione":"000000000342","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000000342","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1163764","Type":102,"Crypt":"CY/ufZIPdDFqnbUWTHOWerJHI9otnbghzmVGHfxcRCuUNss3lmE9zC+0PHkFbeHZ","Hash":"24D7E6A67FEC1281D1274295EF87F072F098C724438B2AB5215C8D9D83F6238D"},"Status":0},"Azienda":{"Id":318683,"CodiceAzienda":"600043299","RagioneSociale":"GE.CO.VE. IMMOBILIARE S.R.L.","CodiceSia":"BNYGJ","CodiceCuc":"1159135N","CreditorId":null,"CodiceFiscale":"04161560232","PartitaIva":"04161560232","StatoAzienda":1,"Identifier":{"Id":"318683","Type":1,"Crypt":"0M50kNPDj+uccVb4u/UAySQgl67PTB6c4UC+6WGwxQa2vpYFawAz8AOz4HYIk1Y1","Hash":"9715DF31BD19DBCB11C7F67E2D0FBC80A773FA58037C7049F8C2DCFDE9BB6B59"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":633660,"IdRapporto":2556607,"ClasseServizio":0,"Crypt":"YQ1Tpq/syGDVpxrvGWXj0NcqgKdwJLUGSBO5AL1hgD4kCzSyUJUMkLHjJdZRLmnXWuBVp18X5luQTaG0MQxIPdHVtNNxHDV2lBTcuMZARYymvcQicuhfnl8vINSfBGEatrdZJvqbwiNELdf1n6Gh9A==","Hash":"1BD8D466D3042E5146A8E2EABF39E54F03E3362DBD61221F9163F757C669FCC2"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VERONA AG. 1","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":1531.60,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21002","Id":null,"IdAzienda":"633660","CodiceIban":"IT53I0503411702000000003149","CodiceAbi":"05034","CodiceCab":"11702","CodiceFiliale":"11702","NumeroRapporto":"000000003149","CodiceDivisa":"EUR","Descrizione":"000000003149","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"pippo","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2556607","Type":102,"Crypt":"tnDNEnIKEvX+1sLIL0Ai7RXLCrCHhVzx/qOh7/k4ZAq+T2FHRw2UT2MFVvybWj43","Hash":"4A91E688352441157CFFBC402A78C6E67389EBF0CF4B04FCABB0A3F6D4398282"},"Status":0},"Azienda":{"Id":633660,"CodiceAzienda":"600243036","RagioneSociale":"PIEVE S.R.L.","CodiceSia":"45K66","CodiceCuc":"1081825C","CreditorId":null,"CodiceFiscale":"03204770238","PartitaIva":"03204770238","StatoAzienda":1,"Identifier":{"Id":"633660","Type":1,"Crypt":"tvBckNC8ybhavESp79EvpmuHyVZdUyFcZQt8J9oDr5wpYshRFIUSRWGu2VM4ZIFQ","Hash":"49AA516A202644C1DA4488FDC95CAEE841D5072C156E2AD71656FADFB6AD5694"}}}];
    var ABI_GRUPPO = [{"ABI":"03102","Banca":"BANCA ALETTI & C. BANCA DI INVESTIMENTO MOBILIARE S.P.A."},{"ABI":"03336","Banca":"CREDITO BERGAMASCO S.P.A."},{"ABI":"05034","Banca":"BANCO POPOLARE SOCIETA' COOPERATIVA"},{"ABI":"05164","Banca":"BANCA POPOLARE DI LODI S.P.A."},{"ABI":"05188","Banca":"BANCA POPOLARE DI VERONA - S. GEMINIANO E S. PROSPERO S.P.A."},{"ABI":"05228","Banca":"BANCA POPOLARE DI CREMA S.P.A."},{"ABI":"05512","Banca":"BANCA POPOLARE DI CREMONA"},{"ABI":"05584","Banca":"BANCA POPOLARE DI MILANO"},{"ABI":"05608","Banca":"BANCA POPOLARE DI NOVARA S.P.A."},{"ABI":"06200","Banca":"CASSA DI RISPARMIO DI LUCCA PISA LIVORNO S.P.A"}];
    var CUC_NON_VALIDI = [{"CUC":"VANTAGGT"}];
    var filter = {"IdAzienda":null,"IdentifierRapporti":null,"IdentifierDisposizioni":null,"IdentifierDistinta":null,"CodiceAbi":null,"ImportoDa":null,"ImportoA":null,"ClassiServizio":[1,2,32,69],"Beneficiario":null,"StartIndex":null,"Size":null,"SortColumn":null,"IsSortAscending":null};
    var Sections = {
        SEARCH: "#SEARCH",
        DATA_ENTRY: "#DATA_ENTRY",
        AGGREGATE: "#AGGREGATE",
        AGGREGATE_SUMMARY: "#AGGREGATE_SUMMARY",
        CHALLENGE: "#CHALLENGE",
        NONE: "#NONE"
    };
    var spallaName = "#eed100d7ffc449bf818f71d07daf62b2_6";

    var _cleanSpalla = function(){
        $(spallaName).html('');
    };

    var viewModel = function(pagingFilter) {
        var self = this;

        // Model
        self.ListDisposizioni = new App.Core.PagedArrayAsync({
            self: self,
            mappingResponse: App.Sct.DisposizioneSctBo,
            searchUrl: '/anchise2.web/BonificoSct/SearchDisposizioni/SearchToCreate',
            pagingFilter: new App.Common.FilterDisposizioni(pagingFilter),
            pageSizeDropDown: [10, 20, 50, 100]
        });
        self.BonificoParams = {
            Bonifico : ko.observable(new App.Sct.DisposizioneSctBo(null)),
            SuccessMessagesVisible : ko.observable(false)
        };
        self.AggregaParams = {
            Distinte :  ko.observableArray()
        };
        self.AggregaFeedbackParams = {
            Messages: ko.observableArray(),
            Distinte: ko.observableArray()
        };
        self.DispoToDelete        = ko.observableArray([]);
        self.DispoToAggregate     = ko.observableArray([]);
        self.CurrentSection       = ko.observable();

        // Init
        self.Init = function () {
            self.DispoToDelete([]);
            self.DispoToAggregate([]);
            self.AggregaFeedbackParams.Messages([]);
            self.AggregaFeedbackParams.Distinte([]);
            location.hash = Sections.SEARCH;
        };
        self.Init();
    }

    var rootViewModel = new viewModel(filter);

    var challenge = new challengeViewModel({
        SubmitUrl: ko.observable()
    });

    $(document).ready(function () {
        ko.applyBindings(rootViewModel, document.getElementById('eed100d7ffc449bf818f71d07daf62b2_4'));

        ko.applyBindings(challenge, document.getElementById('eed100d7ffc449bf818f71d07daf62b2_7'));

        // Route
        var sammy = Sammy('#eed100d7ffc449bf818f71d07daf62b2_5', function() {
            var _aggrega = function (context) {
                Http.Post("/anchise2.web/BonificoSct/SearchDisposizioni/Aggrega", ko.toJSON(rootViewModel.DispoToAggregate()))
                    .success(function (data) {
                        var result = new App.Core.StandardJsonResult(data);
                        if (result.HasError) {
                            rootViewModel.ListDisposizioni.Validation(result.Messages);
                            context.redirect(Sections.SEARCH);
                        }else {
                            _cleanSpalla();

                            $.ajax('/anchise2.web/Widget/LinkRapidi')
                            .success(function (html) {
                                $(spallaName).append(html);

                                $.ajax('/anchise2.web/Widget/InfoUtili/BonificoSctAggrega')
                                    .success(function (html) {
                                        $(spallaName).append(html);
                                    });
                            });

                            rootViewModel.AggregaParams.Distinte.removeAll();

                            var distinte = [];
                            ko.utils.arrayForEach(ko.toJS(result.Response) || [], function (item) {
                                distinte.push(new App.Sct.DistintaSctBo(item));
                            });
                            rootViewModel.AggregaParams.Distinte(distinte);
                            rootViewModel.CurrentSection(Sections.AGGREGATE);
                        }
                    });
            };
            var _read = function (crypt, context) {
                var disposizioneSct = ko.utils.arrayFirst(rootViewModel.ListDisposizioni.Page(), function (item) {
                    return item.Identifier.Crypt() == crypt;
                });

                Http.Post('/anchise2.web/BonificoSct/DataEntry/Read', ko.toJSON(disposizioneSct))
                    .success(function (data) {
                        var result = new App.Core.StandardJsonResult(data);

                        if (result.HasError) {
                            rootViewModel.ListDisposizioni.Validation(result.Messages);
                            context.redirect(Sections.SEARCH);
                        }else {
                            rootViewModel.BonificoParams.Bonifico(new App.Sct.DisposizioneSctBo(result.Response));
                            rootViewModel.CurrentSection(Sections.DATA_ENTRY);
                        }
                    });
            };

            this.get(Sections.SEARCH, function () {
                rootViewModel.Init();
                rootViewModel.ListDisposizioni.Search();
                rootViewModel.CurrentSection(Sections.SEARCH);
                challenge.Hide();

                _cleanSpalla();

                $.ajax('/anchise2.web/Widget/LinkRapidi')
                .success(function (html) {
                    $(spallaName).append(html);

                    $.ajax('/anchise2.web/Widget/InfoUtili/BonificoSctListaDisposizioni')
                        .success(function (html) {
                            $(spallaName).append(html);
                        });
                });
            });

            this.get(Sections.AGGREGATE, function() {
                challenge.Hide();

                var context = this;
                if (rootViewModel.DispoToAggregate().length == 0){
                    this.redirect(Sections.SEARCH);
                }else {
                    _aggrega(context);
                }
            });

            this.get(Sections.SEARCH + '/:Id', function() {
                challenge.Hide();

                var context = this;
                var crypt = decodeURIComponent(context.params.Id);

                _read(crypt, context);
            });

            this.get(Sections.CHALLENGE, function () {
                rootViewModel.CurrentSection(Sections.NONE);
            });
        });
        sammy.run();
    });

    var challengeSuccessEvent = ko.postbox.subscribe("challenge.SUCCESS", $.noop);
    var challengeValidationErrorEvent = ko.postbox.subscribe("challenge.VALIDATION_ERROR", $.noop);

    var disposeChallengeEvent = function () {
        challengeSuccessEvent.dispose();
        challengeValidationErrorEvent.dispose();
    };

    var configureDataEntryChallenge = function () {
        location.hash = Sections.CHALLENGE;

        // visualizzo alcuni dati della disposizione in testa al challenge
        challenge.Components.removeAll();
        challenge.Components.push(new App.Core.UiComponent({
            Name: 'disposizione-sct-summary',
            Params: {
                DisposizioneSct: rootViewModel.BonificoParams.Bonifico,
                InitAfterBinding: true
            }
        }));
        // url da chiamare per fare il submit del challenge
        challenge.SubmitUrl(rootViewModel.BonificoParams.CalledUrl() + 'Challenge');
        // evento scatenato quando la fase di challenge è stata superata con successo
        challengeSuccessEvent = ko.postbox.subscribe("challenge.SUCCESS", function(data){
            rootViewModel.BonificoParams.SuccessMessagesVisible(true);

            rootViewModel.CurrentSection(Sections.DATA_ENTRY);

            challenge.Hide();
        });
    };

    var configureAggregateChallenge = function () {
        rootViewModel.CurrentSection(Sections.NONE);
        // non visualizzo nessun template in testa al challenge
        challenge.Components.removeAll();

        challenge.SubmitUrl('/anchise2.web/BonificoSct/SearchDisposizioni/CreateChallenge');

        challengeSuccessEvent = ko.postbox.subscribe("challenge.SUCCESS", function (data) {
            var result = new App.Core.StandardJsonResult(data);

            aggregateChallengeProceed(result);
        });
        
        challengeValidationErrorEvent = ko.postbox.subscribe("challenge.VALIDATION_ERROR", function (data) {
            var result = new App.Core.StandardJsonResult(data);

            if (result.Response != null && result.Response.length !== 0) {
                aggregateChallengeProceed(result);
            }
        });
    };

    var aggregateChallengeProceed = function (standardJsonResult) {
        var aggregaFeedback = rootViewModel.AggregaFeedbackParams;

        ko.utils.arrayForEach(standardJsonResult.Response, function (item) {
            aggregaFeedback.Distinte.push(new App.Sct.DistintaSctBo(item));
        });

        aggregaFeedback.Messages(ko.utils.arrayMap(standardJsonResult.Messages, function (item) {
            return item.ErrorMessage;
        }));

        challenge.Hide();
        rootViewModel.CurrentSection(Sections.AGGREGATE_SUMMARY);
    }

    ko.postbox.subscribe('validation-messages.CHALLENGE', function (data) {
        disposeChallengeEvent();

        if (rootViewModel.CurrentSection() == Sections.DATA_ENTRY) {
            configureDataEntryChallenge();
        }else {
            configureAggregateChallenge();
        }
    });
</script>



                        </div>