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



<script type="text/html" id="e810ba36320b4e1faa865a157c1e58fa_6">
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
        template: { element: 'e810ba36320b4e1faa865a157c1e58fa_6' },
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





<script type="text/html" id="amendmentinformation-dataentry">
    <div>
        <div class="row">
            <div class="col-sm-4">
                <label class="control-label">Modifica mandato originario</label>
                <select data-bind="options: IsEnableArray, optionsText: 'Descrizione', value: AmendmentInformation.AmendmentIndicator, optionsValue: 'Value'"></select>
            </div>
        </div>
        <div data-bind="with: AmendmentInformation">
            <div class="row">
                <div class="col-sm-4">
                    <label class="control-label">Codice mandato originario</label>
                    <input type="text" class="form-control no-placeholder-italic" data-bind="enable: AmendmentIndicator(), value: AmendmentInformationDetails.OriginalMandateIdentification" />
                </div>
                <div class="col-sm-4">
                    <label class="control-label">Data ultimo incasso</label>
                    <date-picker params="Date: AmendmentInformationDetails.OriginalFinalCollectionDate, enable: AmendmentIndicator() ? true : 'false'"></date-picker>
                </div>
                <div class="col-sm-4">
                    <label class="control-label">Frequenza originaria</label>
                    <select class="form-control" data-bind="enable: AmendmentIndicator(), options: $component.FrequenzeIncasso, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: AmendmentInformationDetails.OriginalFrequency"></select>
                </div>
            </div>
            <!-- ORIGINAL CREDITOR -->
            <div class="section">
                <div class="row">
                    <h3 class="titleSection">Dati creditore originario</h3>
                </div>
                <div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-sm-3 col-xs-12" style="padding: 0">
                                <label class="control-label">Ragione sociale</label>
                                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: AmendmentIndicator(), value: AmendmentInformationDetails.OriginalCreditor.Denominazione" />
                            </div>
                            <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                                <label class="control-label">&nbsp;</label>
                                <span style="display: block" class="icon-replace icon-search active link" data-bind="enable: AmendmentIndicator(), singleClick: $component.OriginalCreditorAnagraficaSearch">&nbsp;</span>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <label class="control-label">Codice</label>
                                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: AmendmentIndicator(), value: AmendmentInformationDetails.OriginalCreditor.Codice" />
                            </div>
                        </div>
                    </div>

                    <div data-bind="component: { name: 'anagrafica-search', params: $component.OriginalCreditorAnagraficaModel }"></div>

                    <indirizzo-dataentry params="Indirizzo: AmendmentInformationDetails.OriginalCreditor.Indirizzo, enable: AmendmentIndicator() ? true : 'false'"></indirizzo-dataentry>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-sm-3 col-xs-12" style="padding:0">
                                <label class="control-label">Tipo Codice</label>
                                <select class="form-control" data-bind="enable:AmendmentIndicator(), options: $component.TipoCodice, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: AmendmentInformationDetails.OriginalCreditor.DatiAggiuntivi.TipoCodice"></select>
                            </div>

                            <div class="col-sm-1 col-xs-12" style="padding-right: 0" />
                            <div class="col-sm-4 col-xs-12" style="padding-right: 0">
                                <label class="control-label">Codice</label>
                                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: AmendmentIndicator(), uppercaseText: AmendmentInformationDetails.OriginalCreditor.DatiAggiuntivi.CodiceSoggetto" />
                            </div>

                            <div class="col-sm-1 col-xs-12" style="padding-right: 0" />
                            <div class="col-sm-3 col-xs-12" style="padding: 0">
                                <label class="control-label">Descrizione Codice</label>
                                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: AmendmentIndicator(), value: AmendmentInformationDetails.OriginalCreditor.DatiAggiuntivi.DescrizioneCodice" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ORIGINAL DEBTOR -->
            <div class="section">
                <div class="row">
                    <h3 class="titleSection">Dati debitore originario</h3>
                </div>
                <div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-sm-3 col-xs-12" style="padding: 0">
                                <label class="control-label">Ragione sociale</label>
                                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: AmendmentIndicator(), value: AmendmentInformationDetails.OriginalDebtor.Denominazione" />
                            </div>
                            <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                                <label class="control-label">&nbsp;</label>
                                <span style="display: block" class="icon-replace icon-search active link" data-bind="singleClick: $component.OriginalDebtorAnagraficaSearch">&nbsp;</span>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <label class="control-label">Codice</label>
                                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: AmendmentIndicator(), value: AmendmentInformationDetails.OriginalDebtor.Codice" />
                            </div>
                        </div>
                    </div>

                    <div data-bind="component: { name: 'anagrafica-search', params: $component.OriginalDebtorAnagraficaModel }"></div>

                    <indirizzo-dataentry params="Indirizzo: AmendmentInformationDetails.OriginalDebtor.Indirizzo, enable: AmendmentIndicator() ? true : 'false'"></indirizzo-dataentry>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-sm-3 col-xs-12" style="padding-right: 0; padding-left: 20px">
                                <label class="control-label" style="margin-left: -20px">IBAN</label>
                                <div class="radio" style="font-weight: normal; margin-top: 0">
                                    <input type="radio" name="conto" value="contoIban" data-bind="enable:AmendmentIndicator(), checked: $component.CurrentConto" />
                                    <input type="text" class="form-control" data-bind="enable: ($component.ContoIbanActive() && AmendmentIndicator()), uppercaseText: AmendmentInformationDetails.OriginalDebtor.Iban" />
                                </div>
                            </div>
                            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                            <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                                <label class="control-label" style="margin-left: -20px">Identificativo conto</label>
                                <div class="radio" style="font-weight: normal; margin-top: 0">
                                    <input type="radio" name="conto" value="contoIdentificativo" data-bind="enable: AmendmentIndicator(), checked: $component.CurrentConto" />
                                    <input type="text" placeholder="opzionale" class="form-control no-placeholder-italic" data-bind="enable: ($component.ContoIdentificativoActive() && AmendmentIndicator()), value: AmendmentInformationDetails.OriginalDebtor.AccountIdentifier" />
                                </div>
                            </div>
                            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                            <div class="col-sm-3 col-xs-12" style="padding: 0">
                                <label class="control-label">BIC</label>
                                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: ($component.BicActive() && AmendmentIndicator()), value: AmendmentInformationDetails.OriginalDebtor.Bic" />
                            </div>
                        </div>
                    </div>

                    <datiaggiuntivi-dataentry params="DatiAggiuntivi: AmendmentInformationDetails.OriginalDebtor.DatiAggiuntivi, enable: AmendmentIndicator() ? true : 'false'"></datiaggiuntivi-dataentry>
                </div>
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('amendmentinformation-dataentry', {
        template: { element: 'amendmentinformation-dataentry' },
        viewModel: function (params) {
            var self = this;

            // Model
            self.AmendmentInformation = params.AmendmentInformation;
            self.IdentifierPiazzatura = params.IdentifierPiazzatura;

            self.FrequenzeIncasso = ko.observableArray(PROFILABLE_DISPOSIZIONI['FREQUENZA_INCASSI']);
            self.CurrentConto = ko.observable("contoIban");
            self.ContoIbanActive = ko.observable(true);
            self.ContoIdentificativoActive = ko.observable(false);
            self.BicActive = ko.observable(true);

            self.TipoCodice = ko.observableArray(PROFILABLE_DISPOSIZIONI['CRED_ORIGIN_TIPO_CODICE']);


            self.IsEnableArray = ko.observableArray([
                {
                    Descrizione: "Si",
                    Value: true
                },
                {
                    Descrizione: "No",
                    Value: false
                }
            ]);

            self.OriginalCreditorAnagraficaModel = {
                Label: 'Fornitore',
                IdentifierPiazzatura: self.IdentifierPiazzatura,
                Soggetto: self.AmendmentInformation.AmendmentInformationDetails.OriginalCreditor,
                TipologiaAnagrafica: ko.observable('FO'),
                Visible: ko.observable(false),
                Callback: ko.observable(function () {
                    ko.mapping.fromJS(new App.Common.DatiAggiuntiviBo(null), null, self.AmendmentInformation.AmendmentInformationDetails.OriginalCreditor.DatiAggiuntivi);
                })
            };

            self.OriginalDebtorAnagraficaModel = {
                Label: 'Cliente',
                IdentifierPiazzatura: self.IdentifierPiazzatura,
                Soggetto: self.AmendmentInformation.AmendmentInformationDetails.OriginalDebtor,
                TipologiaAnagrafica: ko.observable('CL'),
                Visible: ko.observable(false)
            };

            var currentContoSubscribe = self.CurrentConto.subscribe(function () {
                if (self.CurrentConto() == "contoIban") {
                    self.ContoIbanActive(true);
                    self.ContoIdentificativoActive(false);
                    self.BicActive(true);
                    self.AmendmentInformation.AmendmentInformationDetails.OriginalDebtor.AccountIdentifier(null);
                }
                else {
                    self.ContoIbanActive(false);
                    self.ContoIdentificativoActive(false);
                    self.BicActive(false);
                    self.AmendmentInformation.AmendmentInformationDetails.OriginalDebtor.AccountIdentifier("SMNDA");
                    self.AmendmentInformation.AmendmentInformationDetails.OriginalDebtor.Iban(null);
                    self.AmendmentInformation.AmendmentInformationDetails.OriginalDebtor.Bic(null);
                }
            });

            var _anagraficaSearchVisible = function (anagraficaModel) {
                return function () {
                    if (self.AmendmentInformation.AmendmentIndicator() == false)
                        return;
                    if (App.Common.IdentifierIsNotValid(self.IdentifierPiazzatura)) {
                        self.Validation.removeAll();
                        self.Validation.push(new App.Core.ValidationMessage({ ErrorMessage: 'Per poter accedere alla funzionalità di ricerca è necessario selezionare prima un rapporto.' }));
                    } else {
                        anagraficaModel.Visible(true);
                    }
                }
            }

            self.OriginalCreditorAnagraficaSearch = _anagraficaSearchVisible(self.OriginalCreditorAnagraficaModel);
            self.OriginalDebtorAnagraficaSearch = _anagraficaSearchVisible(self.OriginalDebtorAnagraficaModel);

            self.AmendmentInformation.AmendmentIndicator.subscribe(function () {
                if (!self.AmendmentInformation.AmendmentIndicator()) {
                    self.resetFields();
                }
            });

            self.resetFields = function () {
                self.AmendmentInformation.AmendmentInformationDetails.OriginalMandateIdentification(null);
                self.AmendmentInformation.AmendmentInformationDetails.OriginalFinalCollectionDate(null);
                self.AmendmentInformation.AmendmentInformationDetails.OriginalFrequency(null);

                //Creditore originario
                self.OriginalCreditorAnagraficaModel.Soggetto.Denominazione(null);
                self.OriginalCreditorAnagraficaModel.Soggetto.Codice(null);
                self.OriginalCreditorAnagraficaModel.Soggetto.Indirizzo.TipologiaIndirizzo(null);
                self.OriginalCreditorAnagraficaModel.Soggetto.Indirizzo.Cap(null);
                self.OriginalCreditorAnagraficaModel.Soggetto.Indirizzo.Comune(null);
                self.OriginalCreditorAnagraficaModel.Soggetto.Indirizzo.Provincia(null);
                self.OriginalCreditorAnagraficaModel.Soggetto.Indirizzo.Nazione(null);
                self.OriginalCreditorAnagraficaModel.Soggetto.Indirizzo.Numero(null);
                self.OriginalCreditorAnagraficaModel.Soggetto.Indirizzo.Via(null);
                self.OriginalCreditorAnagraficaModel.Soggetto.Indirizzo.Localita(null);
                self.OriginalCreditorAnagraficaModel.Soggetto.DatiAggiuntivi.TipoSoggetto(null);
                self.OriginalCreditorAnagraficaModel.Soggetto.DatiAggiuntivi.TipoCodice(null);
                self.OriginalCreditorAnagraficaModel.Soggetto.DatiAggiuntivi.CodiceSoggetto(null);
                self.OriginalCreditorAnagraficaModel.Soggetto.DatiAggiuntivi.DescrizioneCodice(null);

                //Debitore originario
                self.OriginalDebtorAnagraficaModel.Soggetto.Denominazione(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.Codice(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.Indirizzo.TipologiaIndirizzo(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.Indirizzo.Cap(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.Indirizzo.Comune(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.Indirizzo.Provincia(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.Indirizzo.Nazione(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.Indirizzo.Numero(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.Indirizzo.Via(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.Indirizzo.Localita(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.DatiAggiuntivi.TipoSoggetto(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.DatiAggiuntivi.TipoCodice(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.DatiAggiuntivi.CodiceSoggetto(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.DatiAggiuntivi.DescrizioneCodice(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.Iban(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.Bic(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.AccountIdentifier(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.DatiAggiuntivi.TipoSoggetto(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.DatiAggiuntivi.TipoCodice(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.DatiAggiuntivi.CodiceSoggetto(null);
                self.OriginalDebtorAnagraficaModel.Soggetto.DatiAggiuntivi.DescrizioneCodice(null);
            };
        }
    });
</script>


<script type="text/html" id="disposizione-sdd-summary">
    <div data-bind="with: DisposizioneSdd" style="font-size: 12px">
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
                                Intestato a:
                            </label>
                        </div>
                        <div class="col-xs-8  textTruncate">
                            <label data-bind="text: Debtor.Denominazione"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Iban:
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: Debtor.Iban"></label>
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
            </div>
            <div class="row">
                <div class="col-xs-12 white-block">
                    <div class="col-xs-12 text-center">
                        <h1>
                            Dati Incasso
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
                                        Tipologia incasso:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.LocalInstrument(LocalInstrument)"></label>
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
                            <label data-bind="text: RemittanceInformationUnstructured"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('disposizione-sdd-summary', {
        template: { element: 'disposizione-sdd-summary' },
        viewModel: function (params) {
            var self = this;
            
            self.DisposizioneSdd = params.DisposizioneSdd;
            var topicId = params.TopicId || '';
            var initAfterBinding = params.InitAfterBinding || false;

            self.DettaglioBanca = ko.observable(new App.Common.BancaModel(null));
            var retrieveBancaModel = function () {
                var dettaglio = new App.Common.BancaModel();

                dettaglio.Creditore.CodiceAbi(self.DisposizioneSdd().Ordinante.Abi());
                dettaglio.Creditore.CodiceCab(self.DisposizioneSdd().Ordinante.Cab());
                dettaglio.Creditore.Stato(App.Core.GetPaese(self.DisposizioneSdd().Ordinante.Iban()));
                dettaglio.Debitore.CodiceAbi(App.Core.GetAbi(self.DisposizioneSdd().Debtor.Iban()));
                dettaglio.Debitore.CodiceCab(App.Core.GetCab(self.DisposizioneSdd().Debtor.Iban()));
                dettaglio.Debitore.Stato(App.Core.GetPaese(self.DisposizioneSdd().Debtor.Iban()));

                Http.Post('/anchise2.web/Anagrafiche/Banca/GetDettaglioBanche', ko.toJSON(dettaglio))
                    .success(function (data) {
                        ko.mapping.fromJS(data, null, self.DettaglioBanca);
                    });
            };

            var initEvent = ko.postbox.subscribe(topicId + 'disposizione-sdd-summary.INITIALIZE', retrieveBancaModel);

            self.LocalInstrument = function (localInstrument) {
                return Localization.GetLocalInstrument(localInstrument())
            };

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



<script type="text/html" id="sdd-dataentry">
    <!-- SUCCESS MESSAGES -->
    <div data-bind="visible: SuccessMessagesVisible">
        <feedback-messages params="Component: SuccessComponent, Buttons: SuccessButtons, CssClass: 'alert', Message: SuccessMessage, PageTitle: $component.FeedbackTitle, TitleCssClass: 'incassi'"></feedback-messages>
    </div>
    <div data-bind="visible: !SuccessMessagesVisible()">
        <div class="riquadro">
            <div>
                <div style="float:left;">
                    <div class="flag incassi">&nbsp;</div>
                    <h1>Incasso Sdd: inserimento</h1>
                </div>
                <div style="float:left;padding-top:13px;">
                    <a class="icon-replace icon-help active link" onclick="javascript: showPopupHelp('/anchise2.web/Widget/Help/GetHelper', 'Chiudi', 'DisposizioneSdd', null);">Help On Line</a>
                </div>
            </div>
            <div class="clearall"></div>
            <div data-bind="with: Sdd">
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
                        <selettore-rapporti params="Ordinante: Ordinante, ArrowVisible: $component.DispoIsNotInDistinta, TestoSelettore: 'Seleziona il rapporto di accredito della disposizione'"></selettore-rapporti>
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        <h3 class="titleSection">
                            Dati aggiuntivi ordinante
                        </h3>
                    </div>
                    <div data-bind="disableChildren: App.Common.IdentifierIsValid(IdentifierDistinta)">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">IBAN Commissioni</label>
                                    <select class="form-control" data-bind="options: $component.Rapporti, optionsText: 'CodiceIban', optionsCaption: 'opzionale', optionsValue: function(rapporto){return rapporto.Identifier().Id}, value: ChargeIban, enable: $component.IbanCommissioniEnable"></select>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Identificativo creditore</label>
                                    <input type="text" class="form-control" data-bind="value: CreditorIdentification" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ULTIMATE CREDITOR -->
                <div class="section">
                    <div class="row link" data-bind="click: $component.UltimateCreditorCollapse">
                        <h3 class="titleSection">
                            Dati Creditore Effettivo
                        </h3>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.UltimateCreditorCollapseCss" />
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.UltimateCreditorBodyVisible, enableChildren: !IsUltimateCreditorSottodistinta()">
                        <div class="row" style="margin-top: 10px">
                            <div class="col-xs-12">
                                <p>Sezione da compilare soltanto se il creditore effettivo è diverso dall'ordinante</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Ragione Sociale</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltimateCreditor.Denominazione" />
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                                    <label class="control-label"></label>
                                    <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.UltimateCreditorAnagraficaSearch">&nbsp;</span>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Codice</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltimateCreditor.Codice" />
                                </div>
                            </div>
                        </div>
                        <div data-bind="component: { name: 'anagrafica-search', params: $component.UltimateCreditorAnagraficaModel }"></div>

                        <indirizzo-dataentry params="Indirizzo: UltimateCreditor.Indirizzo, enable: !IsUltimateCreditorSottodistinta()"></indirizzo-dataentry>
                    </div>
                </div>
                <!-- DEBTOR -->
                <div class="section">
                    <div class="row">
                        <h3 class="titleSection">Dati Debitore</h3>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12 no-padding">
                                    <label class="control-label">Ragione Sociale</label>
                                    <input type="text" class="form-control" data-bind="value: Debtor.Denominazione" />
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0">
                                    <label class="control-label"></label>
                                    <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.DebtorAnagraficaSearch">&nbsp;</span>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Codice</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Debtor.Codice" />
                                </div>
                            </div>
                        </div>

                        <div data-bind="component: { name: 'anagrafica-search', params: $component.DebtorAnagraficaModel }"></div>

                        <indirizzo-dataentry params="Indirizzo: Debtor.Indirizzo"></indirizzo-dataentry>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">IBAN</label>
                                    <input type="text" class="form-control" data-bind="uppercaseText: Debtor.Iban" />
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">BIC</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Debtor.Bic" />
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
                <!-- AGGIUNTIVI DEBTOR -->
                <div class="section">
                    <div class="row link" data-bind="click: $component.DatiAggiuntiviDebtorCollapse">
                        <h3 class="titleSection">Dati Aggiuntivi Debitore</h3>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.DatiAggiuntiviDebtorCollapseCss" />
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.DatiAggiuntiviDebtorBodyVisible">
                        <datiaggiuntivi-dataentry params="DatiAggiuntivi: Debtor.DatiAggiuntivi"></datiaggiuntivi-dataentry>
                    </div>
                </div>
                <!-- ULTIMATE DEBTOR -->
                <div class="section">
                    <div class="row link" data-bind="click: $component.UltimateDebtorCollapse">
                        <h3 class="titleSection">Dati Debitore Effettivo</h3>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.UltimateDebtorCollapseCss" />
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.UltimateDebtorBodyVisible">
                        <div class="row" style="margin-top: 10px">
                            <div class="col-xs-12">
                                <p>Sezione da compilare soltanto se il debitore effettivo è diverso dal debitore</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Ragione Sociale</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltimateDebtor.Denominazione" />
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                                    <label class="control-label">&nbsp;</label>
                                    <span style="display: block" class="icon-replace icon-search active link" data-bind="singleClick: $component.UltimateDebtorAnagraficaSearch">&nbsp;</span>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Codice</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltimateDebtor.Codice" />
                                </div>
                            </div>
                        </div>

                        <div data-bind="component: { name: 'anagrafica-search', params: $component.UltimateDebtorAnagraficaModel }"></div>

                        <indirizzo-dataentry params="Indirizzo: UltimateDebtor.Indirizzo"></indirizzo-dataentry>

                        <datiaggiuntivi-dataentry params="DatiAggiuntivi: UltimateDebtor.DatiAggiuntivi"></datiaggiuntivi-dataentry>
                    </div>
                </div>
                <!--MANDATE RELATED INFORMATION-->
                <div class="section">
                    <div class="row">
                        <h3 class="titleSection">Dati Mandato</h3>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Codice mandato</label>
                                    <input type="text" class="form-control no-placeholder-italic" data-bind="value: MandateRelatedInformation.MandateIdentification" />
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Data sottoscrizione</label>
                                    <date-picker params="Date: MandateRelatedInformation.DateOfSignature"></date-picker>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MANDATE RELATED INFORMATION - DATI AGGIUNTIVI -->
                <div class="section">
                    <div class="row link" data-bind="click: $component.DatiAggiuntiviMandateCollapse">
                        <h3 class="titleSection">Dati aggiuntivi mandato</h3>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.DatiAggiuntiviMandateCollapseCss" />
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.DatiAggiuntiviMandateBodyVisible">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12">
                                <label class="control-label">Firma digitale</label>
                                <input type="text" class="form-control no-placeholder-italic" data-bind="value: MandateRelatedInformation.ElectronicSignature, enable: false" />
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <label class="control-label">Frequenza incassi</label>
                                <select class="form-control" data-bind="options: $component.FrequenzeIncasso, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: MandateRelatedInformation.Frequency"></select>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <label class="control-label">Data prima richiesta</label>
                                <date-picker params="Date: MandateRelatedInformation.FirstCollectionDate"></date-picker>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <label class="control-label">Data ultima richiesta</label>
                                <date-picker params="Date: MandateRelatedInformation.FinalCollectionDate"></date-picker>
                            </div>
                        </div>
                    </div>
                </div>
                <!--AMEDMENT INFORMATION DETAILS-->
                <div class="section">
                    <div class="row link" data-bind="click: $component.AmedmentInformationCollapse">
                        <h3 class="titleSection">
                            Modifica dati mandato originario
                        </h3>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.AmedmentInformationCollapseCss" />
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.AmedmentInformationBodyVisible">
                        <amendmentinformation-dataentry params="AmendmentInformation: MandateRelatedInformation, IdentifierPiazzatura: Ordinante.Identifier"></amendmentinformation-dataentry>
                    </div>
                </div>
                <!-- DATI INCASSO -->
                <div class="section">
                    <div class="row">
                        <h3 class="titleSection">Dati incasso</h3>
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
                                    <label class="control-label">Codice univoco</label>
                                    <input type="text" class="form-control" data-bind="value: EndToEndIdentification" />
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Data scadenza</label>
                                    <date-picker params="Date: RequestedCollectionDate, enable: $component.DisableDataScadenza"></date-picker>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">
                                        Tipo incasso
                                    </label>
                                    <select class="form-control"
                                            data-bind="options: $component.TipoIncasso, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: LocalInstrument, enable: $component.DispoIsNotInDistinta"></select>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Sequenza incasso</label>
                                    <select class="form-control"
                                            data-bind="options: $component.SequenzeIncasso, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: SequenceType, enable: $component.DispoIsNotInDistinta"></select>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">
                                        Causale codificata ISO
                                    </label>
                                    <select class="form-control"
                                            data-bind="options: $component.CausaleIncasso, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: Purpose"></select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">
                                        Finalità incasso
                                    </label>
                                    <select class="form-control"
                                            data-bind="options: $component.FinalitaIncasso, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: CategoryPurpose"></select>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12"></div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">
                                        Descrizione causale
                                    </label>
                                    <textarea placeholder="opzionale" class="form-control no-placeholder-italic" data-bind="value: RemittanceInformationUnstructured"></textarea>
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
    ko.components.register('sdd-dataentry', {
        template: { element: 'sdd-dataentry' },
        viewModel: function (params) {
            var self = this;
            var _urlToSave = "";
            // Model
            self.Sdd = params.Sdd;
            self.SuccessMessagesVisible = params.SuccessMessagesVisible || ko.observable(false);

            // extend params to show this value for which use this component
            params.CalledUrl = ko.observable();

            self.CryptDistintaSelected = self.Sdd().IdentifierDistinta;
            self.FeedbackTitle = ko.observable('Incasso Sdd: conferma inserimento');
            self.SuccessMessage = ko.observable('Disposizione inserita correttamente.\nPer poter inviare la disposizione è necessario creare la distinta, aggregando le disposizioni');
            self.DispoIsNotInDistinta = ko.observable(true);
            self.Validation = ko.observableArray([]);
            self.AggiornaAnagrafica = ko.observable(false);
            self.FrequenzeIncasso = ko.observableArray(PROFILABLE_DISPOSIZIONI['FREQUENZA_INCASSI']);
            self.TipoIncasso = ko.observableArray(PROFILABLE_DISPOSIZIONI['TIPO_INCASSO']);
            self.FinalitaIncasso = ko.observableArray(PROFILABLE_DISPOSIZIONI['FINALITA_INCASSO']);
            self.SequenzeIncasso = ko.observableArray(PROFILABLE_DISPOSIZIONI['SEQUENZA_INCASSO']);
            self.CausaleIncasso = ko.observableArray(PROFILABLE_DISPOSIZIONI['CAUSALE_INCASSO']);
            self.CreateIsVisible = ko.pureComputed(function () {
                return App.Common.IdentifierIsNotValid(self.Sdd().Identifier) || self.Sdd().Identifier.Id() == null;
            }, self);
            self.IbanCommissioniEnable = ko.observable(false);

            // ---> collapse model
            self.UltimateCreditorBodyVisible = ko.observable(false);
            self.UltimateCreditorCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.UltimateCreditorBodyVisible));
            self.DatiAggiuntiviDebtorBodyVisible = ko.observable(false);
            self.DatiAggiuntiviDebtorCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.DatiAggiuntiviDebtorBodyVisible));
            self.UltimateDebtorBodyVisible = ko.observable(false);
            self.UltimateDebtorCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.UltimateDebtorBodyVisible));
            self.DatiAggiuntiviMandateBodyVisible = ko.observable(false);
            self.DatiAggiuntiviMandateCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.DatiAggiuntiviMandateBodyVisible));
            self.AmedmentInformationBodyVisible = ko.observable(false);
            self.AmedmentInformationCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.AmedmentInformationBodyVisible));
            self.CvsBodyVisible = ko.observable(false);
            self.CvsCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.CvsBodyVisible));
            self.DisableDataScadenza = ko.observable('true');
            // <--- collapse model

            self.DatiPrecedenti = false;
            self.FirstAccess = true;

            self.SuccessButtons = ko.observableArray([]);

            self.UltimateCreditorAnagraficaModel = {
                Label: 'Fornitore',
                IdentifierPiazzatura: ko.observable(self.Sdd().Ordinante.Identifier),
                Soggetto: self.Sdd().UltimateCreditor,
                TipologiaAnagrafica: ko.observable('FO'),
                Visible: ko.observable(false)
            };

            self.DebtorAnagraficaModel = {
                Label: 'Cliente',
                IdentifierPiazzatura: ko.observable(self.Sdd().Ordinante.Identifier),
                Soggetto: self.Sdd().Debtor,
                TipologiaAnagrafica: ko.observable('CL'),
                Visible: ko.observable(false),
                Callback: ko.observable(function (anagrafica) {
                    self.Sdd().MandateRelatedInformation.MandateIdentification(anagrafica.CodiceMandato());
                    self.Sdd().MandateRelatedInformation.DateOfSignature(anagrafica.DataSottoscrizione());
                })
            };

            self.UltimateDebtorAnagraficaModel = {
                Label: 'Cliente',
                IdentifierPiazzatura: ko.observable(self.Sdd().Ordinante.Identifier),
                Soggetto: self.Sdd().UltimateDebtor,
                TipologiaAnagrafica: ko.observable('CL'),
                Visible: ko.observable(false)
            };

            self.SuccessComponent = new App.Core.UiComponent({
                Name: 'disposizione-sdd-summary',
                Params: {
                    DisposizioneSdd: self.Sdd
                }
            });

            // Actions
            var _anagraficaSearchVisible = function (anagraficaModel) {
                return function () {
                    if (App.Common.IdentifierIsNotValid(self.Sdd().Ordinante.Identifier)) {
                        self.Validation.removeAll();
                        self.Validation.push(new App.Core.ValidationMessage({ ErrorMessage: 'Per poter accedere alla funzionalità di ricerca è necessario selezionare prima un rapporto.' }));
                    } else {
                        anagraficaModel.Visible(true);
                    }
                }
            };

            var dispoSubscribe = self.Sdd.subscribe(function () {
                // update angrafica models
                self.UltimateCreditorAnagraficaModel.IdentifierPiazzatura(self.Sdd().Ordinante.Identifier);
                self.UltimateCreditorAnagraficaModel.Soggetto = self.Sdd().UltimateCreditor;

                self.DebtorAnagraficaModel.IdentifierPiazzatura(self.Sdd().Ordinante.Identifier);
                self.DebtorAnagraficaModel.Soggetto = self.Sdd().Debtor;

                self.UltimateDebtorAnagraficaModel.IdentifierPiazzatura(self.Sdd().Ordinante.Identifier);
                self.UltimateDebtorAnagraficaModel.Soggetto = self.Sdd().UltimateDebtor;

                self.Init();
            });

            var getDescrizioniBanca = function () {

                self.Sdd().Debtor.Iban(self.Sdd().Debtor.Iban().toUpperCase());
                ko.postbox.publish('disposizione-sdd-summary.INITIALIZE');
            };

            var _createUpdateAjax = function () {

                params.CalledUrl(_urlToSave);
                Http.PostWithTxMon(_urlToSave, ko.toJSON(self.Sdd))
                    .success(function (data) {
                        var result = new App.Core.StandardJsonResult(data);
                        if (data.HasError) {
                            ko.mapping.fromJS(result.Messages, null, self.Validation);
                            $('body,html').animate({ scrollTop: 0 }, 800);
                        } else {
                            getDescrizioniBanca();
                            if (App.Common.IdentifierIsValid(self.Sdd().IdentifierSottoDistinta)) {
                                App.Common.MapIdentifier(self.Sdd().IdentifierSottoDistinta, result.Response.IdentifierSottoDistinta);
                            }

                            App.Core.CleanSpalla(spallaName);

                            $.ajax('/anchise2.web/Widget/LinkRapidi')
                                .success(function (html) {
                                    $(spallaName).append(html);

                                    
                                });
                            self.SuccessMessagesVisible(true);
                        }
                    });
            };

            self.Cancel = function () {
                window.history.back();
            };

            var _ValidateDateOfSignature = function () {
                params.CalledUrl('/anchise2.web/Sdd/DataEntry/ValidateDateOfSignature');
                Http.Post('/anchise2.web/Sdd/DataEntry/ValidateDateOfSignature', ko.toJSON({ dateOfSignature: self.Sdd().MandateRelatedInformation.DateOfSignature() }))
                    .success(function (data) {
                        var result = new App.Core.StandardJsonResult(data);
                        if (data.HasError) {
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
                    '/anchise2.web/Sdd/DataEntry/CreateAndUpdateAnagrafica' :
                    '/anchise2.web/Sdd/DataEntry/Create';

                _ValidateDateOfSignature();
            };
            self.Update = function () {
                _urlToSave = self.AggiornaAnagrafica() ?
                    '/anchise2.web/Sdd/DataEntry/UpdateAndUpdateAnagrafica' :
                    '/anchise2.web/Sdd/DataEntry/Update';

                if (!self.DispoIsNotInDistinta()) {
                    _urlToSave += "InDistinta";
                }

                _ValidateDateOfSignature();
            };

            self.ToggleCheckAggiornaAnagrafica = function () {
                self.AggiornaAnagrafica(!self.AggiornaAnagrafica());
            };

            // Search anagrafiche
            self.UltimateCreditorAnagraficaSearch = _anagraficaSearchVisible(self.UltimateCreditorAnagraficaModel);
            self.DebtorAnagraficaSearch = _anagraficaSearchVisible(self.DebtorAnagraficaModel);
            self.UltimateDebtorAnagraficaSearch = _anagraficaSearchVisible(self.UltimateDebtorAnagraficaModel);


            ko.postbox.subscribe("amendmentinformation-dataentry.ORIGINALDEBTORANAGRAFICASEARCH", function (model) {
                model.IdentifierPiazzatura = ko.observable(self.Sdd().Ordinante.Identifier);
                _anagraficaSearchVisible(model);
            });

            self.UltimateCreditorCollapse = function () {
                self.UltimateCreditorBodyVisible(!self.UltimateCreditorBodyVisible());
            };

            self.DatiAggiuntiviDebtorCollapse = function () {
                self.DatiAggiuntiviDebtorBodyVisible(!self.DatiAggiuntiviDebtorBodyVisible());
            };

            self.UltimateDebtorCollapse = function () {
                self.UltimateDebtorBodyVisible(!self.UltimateDebtorBodyVisible());
            };

            self.DatiAggiuntiviMandateCollapse = function () {
                self.DatiAggiuntiviMandateBodyVisible(!self.DatiAggiuntiviMandateBodyVisible());
            };

            self.AmedmentInformationCollapse = function () {
                self.AmedmentInformationBodyVisible(!self.AmedmentInformationBodyVisible());
            };

            self.CvsCollapse = function () {
                self.CvsBodyVisible(!self.CvsBodyVisible());
            };

            var ordinanteSelectedSubscribe = ko.postbox.subscribe("selettore-rapporti.SELECTED", function (piazzatura) {
                var codiceUnivoco = self.Sdd().EndToEndIdentification();

                if (App.Core.IsNullOrUndefined(codiceUnivoco) || App.Core.IsNullOrEmpty(codiceUnivoco)) {
                    var cuc = self.Sdd().Ordinante.Cuc() || 'CUC',
                        abi = self.Sdd().Ordinante.Abi() || 'ABI';

                    codiceUnivoco = cuc + abi + App.Core.FormatDateTime(Date.now());

                    self.Sdd().EndToEndIdentification(codiceUnivoco);
                }

                if (!self.DatiPrecedenti && (self.CryptDistintaSelected != null && self.CryptDistintaSelected.Crypt() == null) && !self.FirstAccess) {
                    self.Sdd().CreditorIdentification(piazzatura.Azienda.CreditorId());
                }

                self.FirstAccess = false;
                self.DatiPrecedenti = false;

            }, null, true);

            var _filterPiazzature = function (abi) {
                return ko.utils.arrayFilter(PIAZZATURA, function (p) {
                    var current = new App.Common.PiazzaturaBo(p);
                    var currentAbi = self.Sdd().Ordinante.Abi();
                    var currentAzienda = self.Sdd().Ordinante.Identifier.IdAzienda();

                    return (current.Azienda.Id() == currentAzienda && current.Rapporto.Stato() == App.Common.StatoRapporto.ATTIVO && current.Rapporto.CodiceAbi() == currentAbi && current.Rapporto.Identifier().Id != self.Sdd().Ordinante.Identifier.IdRapporto());
                });
            };

            self.Rapporti = ko.pureComputed(function () {
                return ko.utils.arrayMap(_filterPiazzature(), function (p) {
                    var current = new App.Common.PiazzaturaBo(p);

                    return current.Rapporto;
                });
            }, self);

            var RapportiSubscribe = self.Rapporti.subscribe(function () {
                self.IbanCommissioniEnable(self.Rapporti().length >= 1);
            });

            var tipoIndirizzoCredEffettivoSubscribe = self.Sdd().UltimateCreditor.Indirizzo.TipologiaIndirizzo.subscribe(function () {
                self.Sdd().UltimateCreditor.Indirizzo.Nazione('IT');
            });

            var tipoIndirizzoDebitoreSubscribe = self.Sdd().Debtor.Indirizzo.TipologiaIndirizzo.subscribe(function () {
                self.Sdd().Debtor.Indirizzo.Nazione('IT');
            });

            var tipoIndirizzoDebEffettivoSubscribe = self.Sdd().UltimateDebtor.Indirizzo.TipologiaIndirizzo.subscribe(function () {
                self.Sdd().UltimateDebtor.Indirizzo.Nazione('IT');
            });

            var tipoIndirizzoCredOriginarioSubscribe = self.Sdd().MandateRelatedInformation.AmendmentInformationDetails.OriginalCreditor.Indirizzo.TipologiaIndirizzo.subscribe(function () {
                self.Sdd().MandateRelatedInformation.AmendmentInformationDetails.OriginalCreditor.Indirizzo.Nazione('IT');
            });

            var tipoIndirizzoDebOriginarioSubscribe = self.Sdd().MandateRelatedInformation.AmendmentInformationDetails.OriginalDebtor.Indirizzo.TipologiaIndirizzo.subscribe(function () {
                self.Sdd().MandateRelatedInformation.AmendmentInformationDetails.OriginalDebtor.Indirizzo.Nazione('IT');
            });

            // Initialization
            self.Init = function () {
                // Default value
                self.Validation([]);
                self.SuccessMessagesVisible(false);
                self.AggiornaAnagrafica(false);
                self.UltimateCreditorBodyVisible(self.Sdd().UltimateCreditor != null && self.Sdd().UltimateCreditor.Identifier != null && self.Sdd().UltimateCreditor.Identifier.Id() != null);
                self.DatiAggiuntiviDebtorBodyVisible(self.Sdd().Debtor.DatiAggiuntivi.TipoCodice() != null);
                self.UltimateDebtorBodyVisible(self.Sdd().UltimateDebtor != null && self.Sdd().UltimateDebtor.Identifier != null && self.Sdd().UltimateDebtor.Identifier.Id() != null);
                self.DatiAggiuntiviMandateBodyVisible(self.Sdd().MandateRelatedInformation != null && (self.Sdd().MandateRelatedInformation.ElectronicSignature() != null || self.Sdd().MandateRelatedInformation.Frequency() != null || self.Sdd().MandateRelatedInformation.FirstCollectionDate() != null || self.Sdd().MandateRelatedInformation.FinalCollectionDate() != null));
                self.AmedmentInformationBodyVisible(self.Sdd().MandateRelatedInformation != null && self.Sdd().MandateRelatedInformation.AmendmentIndicator());
                self.CvsBodyVisible(self.Sdd().Cvs() != null && self.Sdd().Cvs().length > 0);

                self.Sdd().Debtor.TipologiaAnagrafica(App.Core.IsNullOrUndefined(self.Sdd().Debtor.TipologiaAnagrafica()) ?
                                                                            'CL' :
                                                                            self.Sdd().Debtor.TipologiaAnagrafica());
                self.CryptDistintaSelected = self.Sdd().IdentifierDistinta;

                if (self.Sdd().Identifier.Id() == null) {
                    // **************** DISPOSIZIONE NUOVA ****************

                    self.FirstAccess = false;

                    //preselezione del tipo Incasso a CORE
                    var tipoIncassoCore = self.TipoIncasso().filter(function (tipo) {
                        return tipo.K == "CORE";
                    });
                    self.Sdd().LocalInstrument(tipoIncassoCore[0].K);

                    //non è voluta una valorizzazione di default del campo
                    self.Sdd().RequestedCollectionDate(null);
                    //self.Sdd().MandateRelatedInformation.DateOfSignature(new Date(moment().startOf('day')));

                    self.SuccessButtons([
                            new App.Core.UiButton({
                                Label: 'Nuovo Incasso Sdd',
                                Callback: function () {
                                    location.href = '/anchise2.web/Sdd/DataEntry';
                                }
                            }),
                            new App.Core.UiButton({
                                Label: 'Nuovo Incasso Sdd con i dati precedenti',
                                Callback: function () {
                                    self.Validation([]);
                                    var Sdd = new App.Sdd.DisposizioneSddBo({
                                        Ordinante: { Identifier: self.Sdd().Ordinante.Identifier },
                                        Identifier: {
                                            Crypt: self.Sdd().Identifier.Crypt(),
                                            Hash: self.Sdd().Identifier.Hash(),
                                            ClasseServizio: self.Sdd().Identifier.ClasseServizio(),
                                        },
                                        Divisa: self.Sdd().Divisa,
                                        CreditorIdentification: self.Sdd().CreditorIdentification()
                                    });
                                    self.Sdd(Sdd);
                                    self.SuccessMessagesVisible(false);
                                    self.DatiPrecedenti = true;
                                }
                            }),
                            new App.Core.UiButton({
                                Label: 'crea Distinta',
                                Callback: function () {
                                    var filtro = {
                                        cryptOrdinante: self.Sdd().Ordinante.Identifier.Crypt(),
                                        abi: self.Sdd().Ordinante.Abi()
                                    };

                                    location.href = "/anchise2.web/Sdd/SearchDisposizioni?" + $.param(filtro);
                                }
                            })
                    ]);
                } else {
                    if (self.CryptDistintaSelected != null && self.CryptDistintaSelected.Crypt() != null) {
                        // **************** DISPOSIZIONE IN DISTINTA ****************
                        self.SuccessMessage('Disposizione modificata correttamente.\nPer poter procedere è necessario rigenerare la distinta');
                        self.FeedbackTitle('Incasso Sdd: conferma modifica');
                        self.DispoIsNotInDistinta(false);
                        self.DisableDataScadenza('false');
                        self.SuccessButtons([
                                new App.Core.UiButton({
                                    Label: 'crea Distinta',
                                    Callback: function () {
                                        ko.postbox.publish("DETAIL_DISPOSIZIONEDD:DISPOSIZIONE_UPDATED", self.Sdd().IdentifierSottoDistinta);
                                    }
                                })
                        ]);
                    } else {
                        // **************** DISPOSIZIONE NON IN DISTINTA ****************
                        self.FirstAccess = true;
                        self.SuccessMessage('Disposizione modificata correttamente.\nPer poter inviare la disposizione è necessario creare la distinta, aggregando le disposizioni');
                        self.FeedbackTitle('Incasso Sdd: conferma modifica');

                        App.Core.CleanSpalla(spallaName);

                        $.ajax('/anchise2.web/Widget/LinkRapidi')
                        .success(function (html) {
                            $(spallaName).append(html);

                            
                        });

                        getDescrizioniBanca();

                        self.SuccessButtons([
                                new App.Core.UiButton({
                                    Label: 'crea Distinta',
                                    Callback: function () {
                                        location.href = '/anchise2.web/Sdd/SearchDisposizioni'; /* TODO esporre i success buttons */
                                    }
                                })
                        ]);
                    }
                }
            };
            self.Init();

            self.dispose = function () {
                dispoSubscribe.dispose();
                ordinanteSelectedSubscribe.dispose();
                tipoIndirizzoCredEffettivoSubscribe.dispose();
                tipoIndirizzoDebitoreSubscribe.dispose();
                tipoIndirizzoDebEffettivoSubscribe.dispose();
                tipoIndirizzoCredOriginarioSubscribe.dispose();
                tipoIndirizzoDebOriginarioSubscribe.dispose();
                RapportiSubscribe.dispose();
            }
        }
    });
</script>






<div id="e810ba36320b4e1faa865a157c1e58fa_7">
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
            $('.hide', $('#e810ba36320b4e1faa865a157c1e58fa_7')).removeClass('hide');
        };
    };

    var uiHelper = new UiViewModel();

    $(document).ready(function () {
        ko.applyBindings(uiHelper, document.getElementById('e810ba36320b4e1faa865a157c1e58fa_7'));

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








<script type="text/html" id="list-esito">
    
    <div>
        <div class="riquadro">
            <div>
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Esiti Sepa Direct Debit</h1>
                <a class="icon-replace icon-help active link" onclick="javascript: showPopupHelp('/anchise2.web/Widget/Help/GetHelper', 'Chiudi', 'EsitiSdd', null);">Help On Line</a>
            </div>
            <!-- ko with: List -->
            <validation-messages params="Validation: Validation"></validation-messages>
            <div class="table-responsive">
                <div class="row">
                    <div class="form-group">
                        <div class="form-field-input col-xs-3">
                            <label class="control-label">
                                Rag.Soc./Intestatario:
                            </label>
                            <div class="form-field">
                                <select class="form-control"
                                        data-bind="options: $component.Aziende, optionsCaption: 'Tutti', optionsText: 'RagioneSociale', value: $component.AziendaSelezionata"></select>
                            </div>
                        </div>
                        
                        <div class="form-field-input col-xs-3">
                            <label class="control-label">
                                Banca:
                            </label>
                            <div class="form-field">
                                <select class="form-control"
                                        data-bind="options: $component.Banche, optionsCaption: 'Tutti', optionsText: 'Descrizione', value: $component.BancaSelezionata"></select>
                            </div>
                        </div>
                        
                        <div class="form-field-input col-xs-3">
                            <label class="control-label">
                                Conto:
                            </label>
                            <div class="form-field">
                                <select class="form-control"
                                        data-bind="options: $component.Conti, optionsCaption: 'Tutti', optionsText: 'Conto', value: $component.ContoSelezionato"></select>
                            </div>
                        </div>
                        
                        <div class="form-field-input col-xs-3">
                            <label class="control-label">
                                Stato incasso:
                            </label>
                            <div class="form-field">
                                <select class="form-control"
                                        data-bind="options: $component.StatoIncasso, optionsCaption: 'Tutti', optionsText: 'V', optionsValue: 'K', value: PagingFilter.StatoIncasso"></select>
                            </div>
                        </div>

                        <div class="form-field-input col-xs-4 col-xs-offset-4">
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
                                    <span class="resetFilter" data-bind="singleClick: $component.ResetFilter"></span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dataTables_wrapper" style="margin-top: 10px">
                    <table class="dataTable table">
                        <thead>
                            <tr>
                                <th data-bind="css: ThCss('1'), singleClick: SortToggle('1')" style="font-size: 13px; padding-left: 15px">
                                    Dato
                                </th>
                                <th data-bind="css: ThCss('2'), singleClick: SortToggle('2')" style="padding-left: 15px;font-size: 13px">
                                    Tipo incasso
                                </th>
                                <th data-bind="css: ThCss('3'), singleClick: SortToggle('3')" style="padding-left: 15px;font-size: 13px">
                                    Ordinante
                                </th>
                                <th data-bind="css: ThCss('4'), singleClick: SortToggle('4')" style="padding-left: 15px;font-size: 13px">
                                    Debitore
                                </th>
                                <th style="padding-left: 15px;font-size: 13px" ><!--data-bind="css: ThCss('5'), singleClick: SortToggle('5')"-->
                                    Info. Esito
                                </th>
                                <th data-bind="css: ThCss('6'), singleClick: SortToggle('6')" style="padding-left: 15px;font-size: 13px">
                                    Scadenza
                                </th>
                                <th data-bind="css: ThCss('7'), singleClick: SortToggle('7')" style="padding-left: 15px;font-size: 13px">
                                    Data ricezione
                                </th>
                                <th data-bind="css: ThCss('8'), singleClick: SortToggle('8')" style="padding-left: 10px;font-size: 13px">
                                    Importo
                                </th>
                                
                                <th style="padding-left: 10px;font-size: 13px">
                                    Sequenza incasso
                                </th>
                                <th style="padding-left: 10px;font-size: 13px">
                                    Stato incasso
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
                                    <!-- ko if: TipoEsito() == 3 -->
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }"></span>
                                    <!-- /ko -->

                                    <!-- valore = GI -->
                                    <!-- ko if: TipoEsito() == 5 --> 
                                    <span class="readOnly"></span>
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }"></span>
                                    <!-- /ko -->

                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 -->
                                    <span class="readOnly" data-bind="attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }"></span>
                                    <!-- /ko -->

                                </td>
                                <td data-bind="text: TipoIncasso"></td>
                                <td data-bind="text: RagioneSocialeCreditore"></td>
                                <td data-bind="text: RagioneSocialeDebitore"></td>
                                <td data-bind="text: $component.InfoEsito(CodStatoErrore(), DescrizioneLibera())"></td>
                                <td data-bind="dateText: DataScadenza"></td>
                                <td data-bind="dateText: DataFlusso"></td>
                                <td data-bind="text: $component.ImportoDivisa(Importo())" class="text-right"></td>

                                
                                <td data-bind="text: SequenzaIncasso" style="text-align: center;"></td>

                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.Localization(StatoEsito)"></a>
                                </td>
                                <!-- /ko -->

                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.SottoDistinteList">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.Localization(StatoEsito)"></a>
                                </td>
                                <!-- /ko -->
                                
                                <!-- ko if: (TipoEsito() == 4)-->
                                <td data-bind="text: $component.Localization(StatoEsito)"></td>
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
        
        <div id="export-lista-esiti" value="Esporta" style="float: right; margin-bottom: 1%"></div>
    </div>
    
    

</script>


<script type="text/javascript">
    ko.components.register('list-esito', {
        template: { element: 'list-esito' },
        viewModel: function (params) {
            var self = this;
            var tipoStampa = ko.observable();

            if (!params.List instanceof App.Core.PagedArrayAsync) {
                throw "Parameter List not valid";
            }

            self.ListStatiEsitiRo = params.ListStatiEsitiRo;
            self.List = params.List;
            self.Aziende = params.Aziende;
            self.Banche = params.Banche;
            self.Conti = params.Conti;
            self.Esito = params.Esito;
            self.Details = params.Details;
            self.SottoDistinte = params.SottoDistinte;
            self.DetailsRo = params.DetailsRo;
            self.AziendaSelezionata = params.AziendaSelezionata;
            self.BancaSelezionata = params.BancaSelezionata;
            self.ContoSelezionato = params.ContoSelezionato;
            self.StatoIncasso = params.StatoIncasso;
            self.PopupFilterVisible = ko.observable(false);
            self.PopupDetailVisible = ko.observable(false);
            self.FilterStampaPdf = ko.observable(new App.Sdd.FilterEsito());
            self.Localization = function (statoEsito) {
                return Localization.StatiEsito.GetLabel(statoEsito());
            };
            self.LocalizationTipoEsito = function (tipoEsito) {
                return Localization.TipoEsito.GetLabel(tipoEsito);
            };
            self.LocalizationSequenzaIncasso = function (sequenzaIncasso) {
                return Localization.SequenzaIncasso.GetLabel(sequenzaIncasso);
            };

            var statoScartata = self.StatoIncasso().filter(function (stato) {
                return stato.K == "RJCT,TMTB";
            });

            self.TipoEsitoCss = function (tipoEsito) {
                return "tipoesito_" + tipoEsito;
            };

            self.ImportoDivisa = function (value) {
                return App.Core.FormatNumberSeparation(value) + " EUR";
            };

            self.InfoEsito = function (codStatoErrore, descrizioneLibera) {
                var toRet = "";
                if (codStatoErrore && codStatoErrore.substring(0, 4) == 'NARR') {
                    if (descrizioneLibera)
                        toRet = codStatoErrore + " - " + descrizioneLibera;
                    else
                        toRet = "NARR - Motivo presente nelle inform. aggiuntive";
                } else {
                    toRet = codStatoErrore;
                }

                return toRet;
            }

            self.TogglePopupFilterVisible = function (event) {
                self.MapFilter(self.FilterStampaPdf());

                var date = new Date();
                date.setMonth(date.getMonth() - 1);
                var dateDispoFrom = moment(date).format('');

                self.FilterStampaPdf().DataInvioDisposizioneFrom(self.List.PagingFilter.DataInvioDisposizioneFrom() ? self.List.PagingFilter.DataInvioDisposizioneFrom() : dateDispoFrom);

                self.PopupFilterVisible(!self.PopupFilterVisible());
                tipoStampa = event.currentTarget.className.toString();
            }

            self.TogglePopupDetailVisible = function () {
                self.PopupDetailVisible(!self.PopupDetailVisible());
            }

            self.Search = function () {
                self.List.Validation.removeAll();
                self.List.PagingFilter.SortColumn("7");
                self.List.Search();
            }
            self.StampaPdf = function () {

                var data = ko.toJS(self.FilterStampaPdf);
                data.DataInvioDisposizioneFrom = self.FilterStampaPdf().DataInvioDisposizioneFrom() ? moment(self.FilterStampaPdf().DataInvioDisposizioneFrom()).format('') : null;
                data.DataInvioDisposizioneTo = self.FilterStampaPdf().DataInvioDisposizioneTo() ? moment(self.FilterStampaPdf().DataInvioDisposizioneTo()).format('') : null;
                data.DataScadenzaDisposizioneFrom = self.FilterStampaPdf().DataScadenzaDisposizioneFrom() ? moment(self.FilterStampaPdf().DataScadenzaDisposizioneFrom()).format('') : null;
                data.DataScadenzaDisposizioneTo = self.FilterStampaPdf().DataScadenzaDisposizioneTo() ? moment(self.FilterStampaPdf().DataScadenzaDisposizioneTo()).format('') : null;

                if (tipoStampa == 'printPdf' || tipoStampa == 'btn btn-primary') {
                    $.fileDownload('/anchise2.web/Stampe/StampeLista/StampaListaEsitiSdd', {
                        httpMethod: 'POST',
                        data: data
                    }).fail(function (responseHtml, url, error) {
                        $('body').html(responseHtml);
                    });
                }
                if (tipoStampa == 'printXls') {
                    $.fileDownload('/anchise2.web/Stampe/StampeLista/StampaListaEsitiSddXls', {
                        httpMethod: 'POST',
                        data: data
                    }).fail(function (responseHtml, url, error) {
                        $('body').html(responseHtml);
                    });
                }
            }

            self.DetailEsito = function (record) {
                location.hash = Sections.ESITO_DETAIL;
                Http
                    .Post("/anchise2.web/Sdd/SearchEsiti/Read", ko.toJSON(record))
                    .success(function (data) {
                        if (!data.HasError) {
                            self.Esito(new App.Sdd.EsitoBo(data.Response));
                        }
                    });

                Http
                    .Post("/anchise2.web/Sdd/SearchEsiti/StatiAvanzamentoList", ko.toJSON(record.IdEsito))
                    .success(function (data) {
                        if (!data.HasError) {
                            self.Details.AllData(data.Response.Items);
                        }
                    });
            }

            self.SottoDistinteList = function (record) {
                self.Esito(new App.Sdd.EsitoBo(ko.toJS(record)));
                self.MapFilter(self.SottoDistinte.PagingFilter);
                self.SottoDistinte.PagingFilter.IdEsito(record.IdEsito.Id());
                self.SottoDistinte.PagingFilter.IdDistinta(record.IdEsitoDistinta());
                self.SottoDistinte.Search();
            };

            self.ReturnToFilter = function () {
                location.hash = Sections.SEARCH;
            }
            self.ResetFilter = function () {
                self.List.PagingFilter.StartIndex(1);
                self.List.PagingFilter.CodiceAbi = null;
                self.List.PagingFilter.Size("10");
                self.List.PagingFilter.DataInvioDisposizioneFrom(null);
                self.List.PagingFilter.DataInvioDisposizioneTo(null);
                self.List.PagingFilter.DataScadenzaDisposizioneFrom(null);
                self.List.PagingFilter.DataScadenzaDisposizioneTo(null);
                self.List.PagingFilter.Debitore(null);
                self.AziendaSelezionata(null);
                self.BancaSelezionata(null);
                self.ContoSelezionato(null);
                self.List.PagingFilter.ImportoDisposizioneFrom(null);
                self.List.PagingFilter.ImportoDisposizioneTo(null);
                self.List.PagingFilter.ImportoDistintaFrom(null);
                self.List.PagingFilter.ImportoDistintaTo(null);
                self.List.PagingFilter.ImportoSottoDistintaFrom(null);
                self.List.PagingFilter.ImportoSottoDistintaTo(null);
                self.List.PagingFilter.SequenzaIncasso(null);
                self.List.PagingFilter.StatoIncasso(statoScartata[0].K);
                self.List.PagingFilter.TipoIncasso(null);

                self.List.Search();
            }

            self.MapFilter = function (filter) {
                filter.StartIndex(self.List.PagingFilter.StartIndex());
                filter.CodiceAbi = self.List.PagingFilter.CodiceAbi;
                filter.Size(self.List.PagingFilter.Size());
                filter.DataInvioDisposizioneFrom(self.List.PagingFilter.DataInvioDisposizioneFrom());
                filter.DataInvioDisposizioneTo(self.List.PagingFilter.DataInvioDisposizioneTo());
                filter.DataScadenzaDisposizioneFrom(self.List.PagingFilter.DataScadenzaDisposizioneFrom());
                filter.DataScadenzaDisposizioneTo(self.List.PagingFilter.DataScadenzaDisposizioneTo());
                filter.Debitore(self.List.PagingFilter.Debitore());
                filter.IdAzienda(self.List.PagingFilter.IdAzienda());
                filter.IdRapporto(self.List.PagingFilter.IdRapporto());
                filter.IdentifierEsito = self.List.PagingFilter.IdentifierEsito;
                filter.ImportoDisposizioneFrom(self.List.PagingFilter.ImportoDisposizioneFrom());
                filter.ImportoDisposizioneTo(self.List.PagingFilter.ImportoDisposizioneTo());
                filter.ImportoDistintaFrom(self.List.PagingFilter.ImportoDistintaFrom());
                filter.ImportoDistintaTo(self.List.PagingFilter.ImportoDistintaTo());
                filter.ImportoSottoDistintaFrom(self.List.PagingFilter.ImportoSottoDistintaFrom());
                filter.ImportoSottoDistintaTo(self.List.PagingFilter.ImportoSottoDistintaTo());
                filter.SequenzaIncasso(self.List.PagingFilter.SequenzaIncasso());
                filter.StatoIncasso(self.List.PagingFilter.StatoIncasso());
                filter.TipoIncasso(self.List.PagingFilter.TipoIncasso());
                filter.RagioneSociale(self.List.PagingFilter.RagioneSociale());
                filter.IsSortAscending(self.List.PagingFilter.IsSortAscending());
                filter.SortColumn(self.List.PagingFilter.SortColumn());
            }
        }
    });
</script>


<script type="text/html" id="esito-sdd-dettaglio">
    <div class="riquadro" style="font-size: 12px;">
        <div>
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Dettaglio Disposizione</h1>
            <a id="id-esito-dettaglio" class="icon-replace icon-help active link" onclick="javascript: showPopupHelp('/anchise2.web/Widget/Help/GetHelper', 'Chiudi', 'DetailEsitiSdd', null, null, 'popup-esito-dettaglio', 'id-esito-dettaglio');">Help On Line</a>
        </div>

        <div data-bind="with: Esito">
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
                                        Rag.Soc./Intestatario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: RagioneSocialeCreditore"></label>
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
                                    <label data-bind="text: CodiceSiaOrdinante"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Codice CUC:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CodiceCucOrdinante"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        ABI-Banca:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.AbiBanca"></label><!--RapportoAbiOrdinante-->
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        IBAN:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IbanOrdinante"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding: 0">
                                        IBAN commissioni:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IbanCommissioniOrdinante"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding: 0">
                                        Identificativo Creditore:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CodiceIdOrdinante"></label>
                                </div>
                            </div>

                        </div>

                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding: 0">
                                        Rag.Soc./Intestatario Creditore effettivo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: RagioneSocialeCreditoreEff"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Dati Debitore-->
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
                                        Rag.Soc./Intestatario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: RagioneSocialeDebitore"></label>
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
                                        IBAN:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IbanDebitore"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        BIC:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: BicDebitore"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Rag.Soc./Intestatario Debitore effettivo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: RagioneSocialeDebitoreEff"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Dati Disposizione-->
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12 text-center">
                            <h1>
                                Dati Disposizione
                            </h1>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Tipo dispositivo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Localization.TipologieDispositive.GetLabel(TipoDisposizione())"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Tipo incasso:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: TipoIncasso"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Importo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="numericTextSeparator: Importo"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Causale incasso:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CausaleIncassoId"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Data invio:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="dateText: DataFlusso"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Data scadenza:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="dateText: DataScadenza"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Descrizione incasso:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IdUnivocoPag"></label>
                                </div>
                            </div>
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
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Informazioni di riconciliazione:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: DescrizioneRiconciliazione"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Informazioni Aggiuntive-->
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12 text-center">
                            <h1>
                                Informazioni Aggiuntive
                            </h1>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Nome supporto distinta:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: NomeSupportoDistinta"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        ABI commissioni:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CommissioneCodiceAbi"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Importo commissioni:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <!-- ko if: ImportoCommissione() > 0 -->
                                    <label data-bind="numericTextSeparator: ImportoCommissione"></label>
                                    <!-- /ko -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
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
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Data sottoscrizione:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="dateText: DataSottoscrizione"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Stato incasso:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.LocalizationEsito(StatoEsito())"></label>
                                </div>
                            </div>
                            <!-- 2263 - revisione esiti sdd TODO: verificare valore -->
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Causale esito:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CodStatoErrore"></label>
                                </div>
                            </div>
                            <!-- 2263 - end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--ko if: Details.AllData().length > 0-->
        <div data-bind="with: Details">
            <div class="table-responsive">
                <div class="dataTables_wrapper" style="margin-top: 10px">
                    <table class="dataTable table">
                        <thead>
                            <tr>
                                <th data-bind="css: ThCss('DataCreazione'), click: SortToggle('DataCreazione')">
                                    Data creazione
                                </th>
                                <th data-bind="css: ThCss('DataCaricamento'), click: SortToggle('DataCaricamento')">
                                    Data caricamento
                                </th>
                                <th data-bind="css: ThCss('StatoMessaggio'), click: SortToggle('StatoMessaggio')">
                                    Stato
                                </th>
                                <th data-bind="css: ThCss('DescrizioneStato'), click: SortToggle('DescrizioneStato')">
                                    Descrizione stato
                                </th>
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: Page">
                            <tr>
                                <td style="text-align: center;" data-bind="dateText: DataCreazione"></td>
                                <td style="text-align: center;" data-bind="dateText: DataCaricamento"></td>
                                <td style="text-align: center; cursor: pointer;" data-bind="click: $component.SubDetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.LocalizationEsito(StatoMessaggio)"></a>
                                </td>
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
        <input type="button" class="btn btn-primary" value="Stampa" data-bind="singleClick: StampaPdf" />
        <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back" />
    </div>

    <!--popup-->
    <div class="modal-layer" data-bind=" visible: PopupDetailVisible">
        <div class="popup-container" style="position: relative;overflow-y: auto;height:70%; width: 30%">
            <div id="popup-title" class="row popup-riquadro popup-riquadro-top" style="font-size: smaller">
                <div class="clearfix">
                    <span>
                        <h1 id="popupTitolo">Dettaglio messaggio</h1>
                    </span>
                    <span class="popup-close-icon">
                        <a class="icon-replace icon-close active link" data-bind="singleClick: TogglePopupDetailVisible">Close</a>
                    </span>
                </div>
                <div class="riquadro">
                    <div class="table-responsive">
                        <div class="dataTables_wrapper" style="margin-top: 10px">
                            <table class="dataTable table">
                                <thead>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 30%">Stato messaggio</td>
                                        <td style="width: 7%">:</td>
                                        <td data-bind="text: LocalizationEsito(RecordSel().StatoMessaggio)"></td>
                                    </tr>
                                    <tr>
                                        <td>Descrizione stato</td>
                                        <td>:</td>
                                        <td data-bind="text: LocalizationEsito(RecordSel().StatoMessaggio,true)"></td>
                                    </tr>
                                    <tr>
                                        <td>Data creazione</td>
                                        <td>:</td>
                                        <td data-bind="dateText: RecordSel().DataCreazione"></td>
                                    </tr>
                                    <tr>
                                        <td>Data caricamento</td>
                                        <td>:</td>
                                        <td data-bind="dateText: RecordSel().DataCaricamento"></td>
                                    </tr>
                                    <tr>
                                        <td>Causale esito</td>
                                        <td>:</td>
                                        <td data-bind="text: RecordSel().CausaleEsito"></td>
                                    </tr>
                                    <tr>
                                        <td>Nome tag</td>
                                        <td>:</td>
                                        <td data-bind="text: RecordSel().NomeTag"></td>
                                    </tr>
                                    <tr>
                                        <td>Informazioni Aggiuntive</td>
                                        <td>:</td>
                                        <td data-bind="text: RecordSel().DescrizioneLibera"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <input type="button" class="btn" value="Stampa" data-bind="singleClick: StampaDettaglioPdf" />
                    <input type="button" class="btn" value="Chiudi" data-bind="singleClick: TogglePopupDetailVisible" />
                </div>
            </div>
        </div>
    </div>

</script>


<script type="text/javascript">
    ko.components.register('esito-sdd-dettaglio', {
        template: { element: 'esito-sdd-dettaglio' },
        viewModel: function (params) {
            var self = this;

            if (!params.List instanceof App.Core.PagedArrayAsync) {
                throw "Parameter List not valid";
            }

            self.PopupDetailVisible = ko.observable(false);
            self.RecordSel = ko.observable(new App.Sdd.EsitoDetailBo(null));

            self.LocalizationEsito = function (statoEsito, longValue) {
                return Localization.StatiEsito.GetLabel(statoEsito, longValue);
            };
            self.LocalizationSeqIncasso = function (sequenzaIncasso) {
                return Localization.SequenzaIncasso.GetLabel(sequenzaIncasso);
            };

            self.Esito = params.Esito;
            self.Details = params.Details;

            self.Back = function () { history.back(); };
            self.SubDetailEsito = function (record) {
                self.RecordSel(new App.Sdd.EsitoDetailBo(ko.toJS(record)));
                Http
                    .Post("/anchise2.web/Sdd/SearchEsiti/StatiAvanzamentoRead", ko.toJSON(self.RecordSel))
                    .success(function (data) {
                        if (!data.HasError) {
                            self.RecordSel(data.Response);
                        }
                    });

                self.TogglePopupDetailVisible();
            };

            self.StampaPdf = function (data) {
                var data = ko.toJS(self.Esito);
                data.DataFlusso = self.Esito().DataFlusso() ? moment(self.Esito().DataFlusso()).format('') : null;
                data.DataScadenza = self.Esito().DataScadenza() ? moment(self.Esito().DataScadenza()).format('') : null;
                data.DataSottoscrizione = self.Esito().DataSottoscrizione() ? moment(self.Esito().DataSottoscrizione()).format('') : null;

                $.fileDownload('/anchise2.web/Stampe/StampeDettaglio/StampaDettaglioEsitoSddPdf', {
                    httpMethod: 'POST',
                    data: data
                })
                .fail(function (responseHtml, url, error) {
                    $('body').html(responseHtml);
                });
            };

            self.StampaDettaglioPdf = function (data) {
                var data = ko.toJS(self.RecordSel);
                data.DataCaricamento = self.RecordSel().DataCaricamento ? moment(self.RecordSel().DataCaricamento).format('') : null;
                data.DataCreazione = self.RecordSel().DataCreazione ? moment(self.RecordSel().DataCreazione).format('') : null;
                $.fileDownload('/anchise2.web/Stampe/StampeDettaglio/StampaDettaglioStatoEsitoSddPdf', {
                    httpMethod: 'POST',
                    data: data
                })
                .fail(function (responseHtml, url, error) {
                    $('body').html(responseHtml);
                });
            };

            self.TogglePopupDetailVisible = function () {
                self.PopupDetailVisible(!self.PopupDetailVisible());
            }

            self.AbiBanca = ko.pureComputed(function () {
                var result = "";
                if (self.Esito().RapportoAbiOrdinante()) {
                    var banca = App.Common.GetBancheFromPiazzatura(_filterPiazzatureBanche(self.Esito().RapportoAbiOrdinante()));
                    if (banca.length == 1)
                        result = banca[0].CodiceAbi + " - " + banca[0].Descrizione;
                    else
                        result = self.Esito().RapportoAbiOrdinante();
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


<script type="text/html" id="esito-sdd-dettaglio-ro">
    <div class="riquadro" style="font-size: 12px;">
        <div>
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Esiti Sottodistinta</h1>
        </div>

        <div data-bind="with: Sottodistinta">
            <div class="section">
                <div class="row">

                    <!-- Dati Distinta-->
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12 text-center">
                            <h1>
                                Dati Sottodistinta
                            </h1>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Rag.Soc./Intestatario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Creditor.RagioneSociale"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        IBAN:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Creditor.Iban"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Tipo dispositivo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label>Esiti Incassi Sepa Direct Debit</label>
                                    
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Totale importi:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="numericTextSeparator: Importo"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Num. Dispo.:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.TotaleEsiti"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-2 col-xs-offset-3">
                                <label style="padding:0">
                                    Esiti totali:
                                </label>
                                <label style="text-decoration: underline; cursor: pointer;" data-bind="text: $component.TotaleEsiti, singleClick: $component.Search.bind($data,null)"></label>
                            </div>
                            <div class="col-sx-6" data-bind="foreach: $component.ListStatiEsitiRo">
                                <div class="col-xs-6" data-bind="class: $index() > 0 ? 'col-xs-offset-5' : ''">
                                    <label style="padding:0" data-bind="text: $component.Localization(Stato)">:</label>
                                    <label style="padding:0">:</label>
                                    <label style="text-decoration: underline; cursor: pointer;" data-bind="text: NumEsiti, singleClick: $component.Search.bind($data,$component.StatoEsitoVal(Stato))"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--ko if: DetailsRo-->
        <div data-bind="with: DetailsRo">
            <div class="table-responsive">
                <div class="dataTables_wrapper" style="margin-top: 10px">
                    <table class="dataTable table">
                        <thead>
                            <tr>
                                <th data-bind="css: ThCss('1'), singleClick: SortToggle('1')" style="font-size: 13px; padding-left: 15px">
                                    Dato
                                </th>
                                <th data-bind="css: ThCss('2'), singleClick: SortToggle('2')" style="font-size: 13px; padding-left: 15px">
                                    Debitore
                                </th>
                                <th data-bind="css: ThCss('3'), singleClick: SortToggle('3')" style="font-size: 13px; padding-left: 15px">
                                    Scadenza
                                </th>
                                <th data-bind="css: ThCss('4'), singleClick: SortToggle('4')" style="font-size: 13px; padding-left: 15px">
                                    Data ricezione
                                </th>
                                <th data-bind="css: ThCss('5'), singleClick: SortToggle('5')" style="font-size: 13px; padding-left: 15px">
                                    Importo
                                </th>
                                <th style="font-size: 13px; padding-left: 15px">
                                    Divisa
                                </th>
                                <th style="font-size: 13px; padding-left: 15px">
                                    Stato incasso
                                </th>
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: Page">
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() != 1 -->
                                    <span data-bind="class: $component.TipoEsitoCss(TipoEsito()), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }"></span>
                                    <!-- /ko -->
                                    <!-- ko if: TipoEsito() == 1 -->
                                    <span data-bind="class: $component.TipoEsitoCss(0), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }"></span>
                                    <!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 -->
                                    <span data-bind="class: $component.TipoEsitoCss(0), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }"></span>
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }"></span>
                                    <!-- /ko -->
                                    <!-- ko if: TipoEsito() == 3 -->
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }"></span>
                                    <!-- /ko -->

                                    <!-- valore = GI da verificare-->
                                    <!-- ko if: TipoEsito() == 5 --> 
                                    <span class="readOnly"></span>
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }"></span>
                                    <!-- /ko -->

                                    <!-- valore = GD da verificare-->
                                    <!-- ko if: TipoEsito() == 4 -->
                                    <span class="readOnly" data-bind="attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }"></span>
                                    <!-- /ko -->

                                </td>
                                <td style="text-align: center;" data-bind="text: RagioneSocialeDebitore"></td>
                                <td style="text-align: center;" data-bind="dateText: DataScadenza"></td>
                                <td style="text-align: center;" data-bind="dateText: DataFlusso"></td>
                                <td data-bind="numericTextSeparator: Importo" class="text-right"></td>
                                <td data-bind="text: Divisa"></td>
                                <td data-bind="text: $component.Localization(StatoEsito())"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <paginatore params="PagedList: $component.DetailsRo"></paginatore>
                <div data-bind="visible: Page().length === 0">
                    <search-no-result></search-no-result>
                </div>
            </div>
        </div>
        <!-- /ko -->
    </div>
    <div class="margin-bottom20 text-right">
        <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back" />
    </div>

</script>


<script type="text/javascript">
    ko.components.register('esito-sdd-dettaglio-ro', {
        template: { element: 'esito-sdd-dettaglio-ro' },
        viewModel: function (params) {
            var self = this;

            self.TipoEsitoCss = function (tipoEsito) {
                return "tipoesito_" + tipoEsito;
            };
            self.Localization = function (statoEsito) {
                return Localization.StatiEsito.GetLabel(statoEsito);
            };
            self.LocalizationTipoEsito = function (tipoEsito) {
                return Localization.TipoEsito.GetLabel(tipoEsito);
            };

            self.StatoEsitoVal = function (statoEsitoVal) {
                return Localization.StatiEsitoVal.GetLabel(statoEsitoVal);
            };

            self.Esito = params.Esito;
            self.Sottodistinta = params.Sottodistinta;
            self.DetailsRo = params.DetailsRo;
            self.ListStatiEsitiRo = params.ListStatiEsitiRo;
            self.TotaleEsiti = ko.observable(0);

            self.ListStatiEsitiRo.subscribe(function (value) {
                self.TotaleEsiti(0);
                value.forEach(function (element) {
                    self.TotaleEsiti(self.TotaleEsiti() + element.NumEsiti);
                });
            });

            self.Search = function (stato) {
                self.DetailsRo.PagingFilter.StatoIncasso(stato);
                self.DetailsRo.Search();
            };

            self.Back = function () {
                history.back();
            };
        }
    });
</script>


<script type="text/html" id="list-sottodistinte">
    
    <div>
        <div class="riquadro">
                <div>
                    <div class="flag riepilogo">&nbsp;</div>
                    <h1>Esiti Sottodistinte</h1>
                </div>
            <!-- ko with: SottoDistinte -->
            <validation-messages params="Validation: Validation"></validation-messages>
            <div class="table-responsive">
                <div class="dataTables_wrapper" style="margin-top: 10px">
                    <table class="dataTable table">
                        <thead>
                            <tr>
                                <th data-bind="css: ThCss('1'), singleClick: SortToggle('1')" style="padding-left: 15px;font-size: 13px">
                                    Scadenza
                                </th>
                                <th data-bind="css: ThCss('2'), singleClick: SortToggle('2')" style="padding-left: 15px;font-size: 13px">
                                    Ordini
                                </th>
                                <th data-bind="css: ThCss('3'), singleClick: SortToggle('3')" style="padding-left: 15px;font-size: 13px">
                                    Importo
                                </th>
                                <th style="padding-left: 10px;font-size: 13px">
                                    Divisa
                                </th>
                                <th data-bind="css: ThCss('5'), singleClick: SortToggle('5')" style="padding-left: 15px;font-size: 13px">
                                    Creditore
                                </th>
                                <th  style="padding-left: 15px;font-size: 13px">
                                    Sequenza incasso
                                </th>
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: Page">
                            <tr>
                                <!-- ko if: NumEsiti() > 0 -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsitoRo">
                                    <a href="#" style="text-decoration: underline" data-bind="dateText: RequestedCollectionDate"></a>
                                </td>
                                <!-- /ko -->
                                <!-- ko if: NumEsiti() == 0 -->
                                <td data-bind="dateText: RequestedCollectionDate"></td>
                                <!-- /ko -->
                                <td data-bind="text: NumeroOrdini"></td>
                                <td data-bind="numericTextSeparator: Importo" class="text-right"></td>
                                <td>EUR</td>
                                <td data-bind="text: Creditor.RagioneSociale"></td>
                                <td data-bind="text: $component.LocalizationIncassoSottodistinte(SequenceType)"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <paginatore params="PagedList: $component.SottoDistinte"></paginatore>
                <div data-bind="visible: Page().length === 0">
                    <search-no-result></search-no-result>
                </div>
            </div>
            <!-- /ko -->
        </div>
    </div>
    <div class="margin-bottom20 text-right">
        <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back" />
    </div>
</script>


<script type="text/javascript">
    ko.components.register('list-sottodistinte', {
        template: { element: 'list-sottodistinte' },
        viewModel: function (params) {
            var self = this;

            if (!params.SottoDistinte instanceof App.Core.PagedArrayAsync) {
                throw "Parameter SottoDistinte not valid";
            }

            self.SottoDistinte = params.SottoDistinte;
            self.DetailsRo = params.DetailsRo;
            self.Sottodistinta = params.Sottodistinta;
            self.Esito = params.Esito;
            self.ListStatiEsitiRo = params.ListStatiEsitiRo;
            self.Back = function () { history.back(); };

            self.LocalizationIncassoSottodistinte = function (sequenzaIncasso) {
                return Localization.SequenzaIncasso.GetLabel(sequenzaIncasso());
            };

            self.DetailEsitoRo = function (record) {
                location.hash = Sections.ESITO_DETAIL_RO;
                self.Sottodistinta(new App.Sdd.SottoDistintaEsitoBo(ko.toJS(record)));
                self.MapFilter(self.DetailsRo.PagingFilter);
                self.DetailsRo.PagingFilter.IdEsitoSottoDistinta(record.Identifier.Id());
                self.DetailsRo.PagingFilter.IdDistinta(self.Esito().IdEsitoDistinta());
                self.DetailsRo.Search();

                Http
                    .Post("/anchise2.web/Sdd/SearchEsiti/ListStatiRo", ko.toJSON(self.DetailsRo.PagingFilter))
                    .success(function (data) {
                        if (!data.HasError) {
                            self.ListStatiEsitiRo(data.Response);
                        }
                    });
            }

            self.MapFilter = function (filter) {
                filter.StartIndex(self.SottoDistinte.PagingFilter.StartIndex());
                filter.CodiceAbi = self.SottoDistinte.PagingFilter.CodiceAbi;
                filter.Size(self.SottoDistinte.PagingFilter.Size());
                filter.DataInvioDisposizioneFrom(self.SottoDistinte.PagingFilter.DataInvioDisposizioneFrom());
                filter.DataInvioDisposizioneTo(self.SottoDistinte.PagingFilter.DataInvioDisposizioneTo());
                filter.DataScadenzaDisposizioneFrom(self.SottoDistinte.PagingFilter.DataScadenzaDisposizioneFrom());
                filter.DataScadenzaDisposizioneTo(self.SottoDistinte.PagingFilter.DataScadenzaDisposizioneTo());
                filter.Debitore(self.SottoDistinte.PagingFilter.Debitore());
                filter.IdAzienda(self.SottoDistinte.PagingFilter.IdAzienda());
                filter.IdRapporto(self.SottoDistinte.PagingFilter.IdRapporto());
                filter.IdentifierEsito = self.SottoDistinte.PagingFilter.IdentifierEsito;
                filter.ImportoDisposizioneFrom(self.SottoDistinte.PagingFilter.ImportoDisposizioneFrom());
                filter.ImportoDisposizioneTo(self.SottoDistinte.PagingFilter.ImportoDisposizioneTo());
                filter.ImportoDistintaFrom(self.SottoDistinte.PagingFilter.ImportoDistintaFrom());
                filter.ImportoDistintaTo(self.SottoDistinte.PagingFilter.ImportoDistintaTo());
                filter.ImportoSottoDistintaFrom(self.SottoDistinte.PagingFilter.ImportoSottoDistintaFrom());
                filter.ImportoSottoDistintaTo(self.SottoDistinte.PagingFilter.ImportoSottoDistintaTo());
                filter.SequenzaIncasso(self.SottoDistinte.PagingFilter.SequenzaIncasso());
                filter.StatoIncasso(self.SottoDistinte.PagingFilter.StatoIncasso());
                filter.TipoIncasso(self.SottoDistinte.PagingFilter.TipoIncasso());
                filter.RagioneSociale(self.SottoDistinte.PagingFilter.RagioneSociale());
                filter.IsSortAscending(self.SottoDistinte.PagingFilter.IsSortAscending());
                filter.SortColumn(self.SottoDistinte.PagingFilter.SortColumn());
            }
        }
    });
</script>


<div id="e810ba36320b4e1faa865a157c1e58fa_5">
    <div id="e810ba36320b4e1faa865a157c1e58fa_3">
        <!-- RICERCA -->
        <div data-bind="visible: CurrentSection() == Sections.SEARCH" style="">
            <div class="riquadro">
                <div>
                    <div style="float:left;">
                        <div class="flag riepilogo">&nbsp;</div>
                        <h1>Esiti Sepa Direct Debit</h1>
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

                        <div class="form-horizontal">
                            <div class="form-group">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-xs-2">
                                            <label>
                                                Rag.Soc./Intestatario:
                                            </label>
                                        </div>
                                        <div class="col-xs-4">
                                            <select class="form-control" data-bind="options: Aziende, optionsCaption: 'Tutti', optionsText: 'RagioneSociale', value: AziendaSelezionata"><option value="">Tutti</option><option value="">AUTOMOBILE CLUB MODENA</option></select>
                                        </div>
                                        <div class="col-xs-2 col-xs-offset-1">
                                            <label>
                                                SIA:
                                            </label>
                                        </div>
                                        <div class="col-xs-2">
                                            <!-- ko if: AziendaSelezionata()-->
                                            <input type="text" class="form-control" data-bind="value: AziendaSelezionata().CodiceSia, enable:false" disabled="">
                                            <!-- /ko -->
                                            <!-- ko if: !AziendaSelezionata()--><!-- /ko -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-xs-2">
                                            <label>
                                                Banca:
                                            </label>
                                        </div>
                                        <div class="col-xs-4">
                                            <select class="form-control" data-bind="options: Banche, optionsCaption: 'Tutti', optionsText: 'Descrizione', value: BancaSelezionata"><option value="">Tutti</option><option value="">05034 - BANCO BPM S.P.A.</option></select>
                                        </div>
                                        <div class="col-xs-2 col-xs-offset-1">
                                            <label>
                                                Righe per pagina:
                                            </label>
                                        </div>
                                        <div class="col-xs-1">
                                            <select class="form-control" data-bind="options: List.PageSizeDropDown, value: List.Size"><option value="10">10</option><option value="20">20</option><option value="50">50</option><option value="100">100</option></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-xs-2">
                                            <label>
                                                Conto:
                                            </label>
                                        </div>
                                        <div class="col-xs-4">
                                            <select class="form-control" data-bind="options: Conti, optionsCaption: 'Tutti', optionsText: 'Conto', value: ContoSelezionato"><option value="">Tutti</option><option value="">12900 - 000000047658</option><option value="">12900 - 000000047659</option><option value="">12900 - 000000047661</option><option value="">11701 - 000000002407</option><option value="">11701 - 000000002417</option><option value="">11701 - 000000002418</option><option value="">11701 - 000000002419</option><option value="">11701 - 000000002420</option><option value="">11701 - 000000002421</option><option value="">11701 - 000000002422</option><option value="">11701 - 000000002423</option><option value="">11701 - 000000002424</option><option value="">11701 - 000000002425</option><option value="">11701 - 000000002426</option><option value="">11701 - 000000002427</option><option value="">11701 - 000000002428</option><option value="">11701 - 000000002429</option></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-xs-2">
                                            <label>
                                                Tipo incasso
                                            </label>
                                        </div>
                                        <div class="col-xs-2">
                                            <select class="form-control" data-bind="options: TipoIncasso, optionsCaption: 'Tutti', optionsText: 'V', optionsValue: 'K', value: List.PagingFilter.TipoIncasso"><option value="">Tutti</option><option value="B2B">B2B - Veloce</option><option value="CORE">CORE - Ordinario</option></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-xs-2">
                                            <label>
                                                Stato incasso
                                            </label>
                                        </div>
                                        <div class="col-xs-3">
                                            <select class="form-control" data-bind="options: StatoIncasso, optionsCaption: 'Tutti', optionsText: 'V', optionsValue: 'K', value: List.PagingFilter.StatoIncasso"><option value="">Tutti</option><option value="PART">Accettata parzialmente</option><option value="FIRM">Autorizzata</option><option value="CONF,ACTC">Confermata</option><option value="RJCT,TMTB">Scartata</option><option value="RJCT,TMTB,4-KO">Scartata da validazione tecnica</option></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-xs-2">
                                            <label>
                                                Sequenza incasso
                                            </label>
                                        </div>
                                        <div class="col-xs-4">
                                            <select class="form-control" data-bind="options: SequenzaIncasso, optionsCaption: 'Tutti', optionsText: 'V', optionsValue: 'K', value: List.PagingFilter.SequenzaIncasso"><option value="">Tutti</option><option value="FRST">FRST - Prima di una serie di incassi</option><option value="RCUR">RCUR – Per una serie di incassi</option><option value="FNAL">FNAL – Ultima di una serie di incassi</option><option value="OOFF">OOFF – Singola non ripetuta</option></select>
                                        </div>
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
                                    <div class="col-xs-2 col-xs-offset-2">Da:</div>
                                    <div class="col-xs-2 col-xs-offset-2">A:</div>
                                </div>
                                <div class="row">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label class="control-label col-xs-2">Data ricezione:</label>
                                            <div class="col-xs-3">
                                                <date-picker params="Date: List.PagingFilter.DataInvioDisposizioneFrom">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_1">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                                            </div>
                                            <div class="col-xs-3 col-xs-offset-1">
                                                <date-picker params="Date: List.PagingFilter.DataInvioDisposizioneTo">
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
                                            <label class="control-label col-xs-2">Data scadenza:</label>
                                            <div class="col-xs-3">
                                                <date-picker params="Date: List.PagingFilter.DataScadenzaDisposizioneFrom">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_3">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                                            </div>
                                            <div class="col-xs-3 col-xs-offset-1">
                                                <date-picker params="Date: List.PagingFilter.DataScadenzaDisposizioneTo">
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
                                <div class="row">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label class="control-label col-xs-2">Importo disposizione:</label>
                                            <div class="col-xs-2">
                                                <input type="text" class="form-control" data-bind="numericTextSeparator: List.PagingFilter.ImportoDisposizioneFrom">
                                            </div>
                                            <div class="col-xs-2 col-xs-offset-2">
                                                <input type="text" class="form-control" data-bind="numericTextSeparator: List.PagingFilter.ImportoDisposizioneTo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label class="control-label col-xs-2">Importo distinta:</label>
                                            <div class="col-xs-2">
                                                <input type="text" class="form-control" data-bind="numericTextSeparator: List.PagingFilter.ImportoDistintaFrom">
                                            </div>
                                            <div class="col-xs-2 col-xs-offset-2">
                                                <input type="text" class="form-control" data-bind="numericTextSeparator: List.PagingFilter.ImportoDistintaTo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label class="control-label col-xs-2">Importo sottodistinta:</label>
                                            <div class="col-xs-2">
                                                <input type="text" class="form-control" data-bind="numericTextSeparator: List.PagingFilter.ImportoSottoDistintaFrom">
                                            </div>
                                            <div class="col-xs-2 col-xs-offset-2">
                                                <input type="text" class="form-control" data-bind="numericTextSeparator: List.PagingFilter.ImportoSottoDistintaTo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label class="control-label col-xs-2">Debitore:</label>
                                            <div class="col-xs-2">
                                                <input type="text" class="form-control" data-bind="value: List.PagingFilter.Debitore">
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
                <input type="button" class="btn btn-primary" value="Visualizza " data-bind="singleClick: Search, enable: Aziende().length > 0 &amp;&amp; Banche().length > 0 &amp;&amp; Conti().length > 0">
            </div>
        </div>

        <div data-bind="visible: CurrentSection() == Sections.RESULT" style="display: none;">
            <list-esito params="List: List, SottoDistinte: SottoDistinte, Esito: Esito, Details: Details, DetailsRo: DetailsRo, ListStatiEsitiRo: ListStatiEsitiRo, Aziende: Aziende, Banche: Banche, Conti: Conti, StatoIncasso: StatoIncasso, AziendaSelezionata: AziendaSelezionata, BancaSelezionata: BancaSelezionata, ContoSelezionato: ContoSelezionato">
    
    <div>
        <div class="riquadro">
            <div>
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Esiti Sepa Direct Debit</h1>
                <a class="icon-replace icon-help active link" onclick="javascript: showPopupHelp('/anchise2.web/Widget/Help/GetHelper', 'Chiudi', 'EsitiSdd', null);">Help On Line</a>
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
                                Rag.Soc./Intestatario:
                            </label>
                            <div class="form-field">
                                <select class="form-control" data-bind="options: $component.Aziende, optionsCaption: 'Tutti', optionsText: 'RagioneSociale', value: $component.AziendaSelezionata"><option value="">Tutti</option><option value="">AUTOMOBILE CLUB MODENA</option></select>
                            </div>
                        </div>
                        
                        <div class="form-field-input col-xs-3">
                            <label class="control-label">
                                Banca:
                            </label>
                            <div class="form-field">
                                <select class="form-control" data-bind="options: $component.Banche, optionsCaption: 'Tutti', optionsText: 'Descrizione', value: $component.BancaSelezionata"><option value="">Tutti</option><option value="">05034 - BANCO BPM S.P.A.</option></select>
                            </div>
                        </div>
                        
                        <div class="form-field-input col-xs-3">
                            <label class="control-label">
                                Conto:
                            </label>
                            <div class="form-field">
                                <select class="form-control" data-bind="options: $component.Conti, optionsCaption: 'Tutti', optionsText: 'Conto', value: $component.ContoSelezionato"><option value="">Tutti</option><option value="">12900 - 000000047658</option><option value="">12900 - 000000047659</option><option value="">12900 - 000000047661</option><option value="">11701 - 000000002407</option><option value="">11701 - 000000002417</option><option value="">11701 - 000000002418</option><option value="">11701 - 000000002419</option><option value="">11701 - 000000002420</option><option value="">11701 - 000000002421</option><option value="">11701 - 000000002422</option><option value="">11701 - 000000002423</option><option value="">11701 - 000000002424</option><option value="">11701 - 000000002425</option><option value="">11701 - 000000002426</option><option value="">11701 - 000000002427</option><option value="">11701 - 000000002428</option><option value="">11701 - 000000002429</option></select>
                            </div>
                        </div>
                        
                        <div class="form-field-input col-xs-3">
                            <label class="control-label">
                                Stato incasso:
                            </label>
                            <div class="form-field">
                                <select class="form-control" data-bind="options: $component.StatoIncasso, optionsCaption: 'Tutti', optionsText: 'V', optionsValue: 'K', value: PagingFilter.StatoIncasso"><option value="">Tutti</option><option value="PART">Accettata parzialmente</option><option value="FIRM">Autorizzata</option><option value="CONF,ACTC">Confermata</option><option value="RJCT,TMTB">Scartata</option><option value="RJCT,TMTB,4-KO">Scartata da validazione tecnica</option></select>
                            </div>
                        </div>

                        <div class="form-field-input col-xs-4 col-xs-offset-4">
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
                                    <span class="resetFilter" data-bind="singleClick: $component.ResetFilter"></span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dataTables_wrapper" style="margin-top: 10px">
                    <table class="dataTable table">
                        <thead>
                            <tr>
                                <th data-bind="css: ThCss('1'), singleClick: SortToggle('1')" style="font-size: 13px; padding-left: 15px" class="sorting">
                                    Dato
                                </th>
                                <th data-bind="css: ThCss('2'), singleClick: SortToggle('2')" style="padding-left: 15px;font-size: 13px" class="sorting">
                                    Tipo incasso
                                </th>
                                <th data-bind="css: ThCss('3'), singleClick: SortToggle('3')" style="padding-left: 15px;font-size: 13px" class="sorting">
                                    Ordinante
                                </th>
                                <th data-bind="css: ThCss('4'), singleClick: SortToggle('4')" style="padding-left: 15px;font-size: 13px" class="sorting">
                                    Debitore
                                </th>
                                <th style="padding-left: 15px;font-size: 13px"><!--data-bind="css: ThCss('5'), singleClick: SortToggle('5')"-->
                                    Info. Esito
                                </th>
                                <th data-bind="css: ThCss('6'), singleClick: SortToggle('6')" style="padding-left: 15px;font-size: 13px" class="sorting">
                                    Scadenza
                                </th>
                                <th data-bind="css: ThCss('7'), singleClick: SortToggle('7')" style="padding-left: 15px;font-size: 13px" class="sorting_desc">
                                    Data ricezione
                                </th>
                                <th data-bind="css: ThCss('8'), singleClick: SortToggle('8')" style="padding-left: 10px;font-size: 13px" class="sorting">
                                    Importo
                                </th>
                                
                                <th style="padding-left: 10px;font-size: 13px">
                                    Sequenza incasso
                                </th>
                                <th style="padding-left: 10px;font-size: 13px">
                                    Stato incasso
                                </th>
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: Page">
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 -->
                                    <span data-bind="class: $component.TipoEsitoCss(0), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_0" title="Esito incrociato con dispositivo"></span>
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Esito incrociato con dispositivo"></span>
                                    <!-- /ko -->
                                    <!-- ko if: TipoEsito() == 3 --><!-- /ko -->

                                    <!-- valore = GI -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->

                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->

                                </td>
                                <td data-bind="text: TipoIncasso">CORE - Ordinario</td>
                                <td data-bind="text: RagioneSocialeCreditore">AUTOMOBILE CLUB MODENA</td>
                                <td data-bind="text: RagioneSocialeDebitore">FRANCHINI FABRIZIO</td>
                                <td data-bind="text: $component.InfoEsito(CodStatoErrore(), DescrizioneLibera())">AM04 - Il denaro disponibile per coprire l'importo della transazione non è sufficiente</td>
                                <td data-bind="dateText: DataScadenza">08/01/2019</td>
                                <td data-bind="dateText: DataFlusso">10/01/2019</td>
                                <td data-bind="text: $component.ImportoDivisa(Importo())" class="text-right">77,06 EUR</td>

                                
                                <td data-bind="text: SequenzaIncasso" style="text-align: center;">RCUR</td>

                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.Localization(StatoEsito)">Scartata</a>
                                </td>
                                <!-- /ko -->

                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 5) --><!-- /ko -->
                                
                                <!-- ko if: (TipoEsito() == 4)--><!-- /ko -->
                            </tr>
                        
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 -->
                                    <span data-bind="class: $component.TipoEsitoCss(0), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_0" title="Esito incrociato con dispositivo"></span>
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Esito incrociato con dispositivo"></span>
                                    <!-- /ko -->
                                    <!-- ko if: TipoEsito() == 3 --><!-- /ko -->

                                    <!-- valore = GI -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->

                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->

                                </td>
                                <td data-bind="text: TipoIncasso">CORE - Ordinario</td>
                                <td data-bind="text: RagioneSocialeCreditore">AUTOMOBILE CLUB MODENA</td>
                                <td data-bind="text: RagioneSocialeDebitore">MONTECCHI FABIO</td>
                                <td data-bind="text: $component.InfoEsito(CodStatoErrore(), DescrizioneLibera())">AM04 - Il denaro disponibile per coprire l'importo della transazione non è sufficiente</td>
                                <td data-bind="dateText: DataScadenza">08/01/2019</td>
                                <td data-bind="dateText: DataFlusso">10/01/2019</td>
                                <td data-bind="text: $component.ImportoDivisa(Importo())" class="text-right">61,06 EUR</td>

                                
                                <td data-bind="text: SequenzaIncasso" style="text-align: center;">RCUR</td>

                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.Localization(StatoEsito)">Scartata</a>
                                </td>
                                <!-- /ko -->

                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 5) --><!-- /ko -->
                                
                                <!-- ko if: (TipoEsito() == 4)--><!-- /ko -->
                            </tr>
                        
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 -->
                                    <span data-bind="class: $component.TipoEsitoCss(0), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_0" title="Esito incrociato con dispositivo"></span>
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Esito incrociato con dispositivo"></span>
                                    <!-- /ko -->
                                    <!-- ko if: TipoEsito() == 3 --><!-- /ko -->

                                    <!-- valore = GI -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->

                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->

                                </td>
                                <td data-bind="text: TipoIncasso">CORE - Ordinario</td>
                                <td data-bind="text: RagioneSocialeCreditore">AUTOMOBILE CLUB MODENA</td>
                                <td data-bind="text: RagioneSocialeDebitore">GAMMAITONI ELISA</td>
                                <td data-bind="text: $component.InfoEsito(CodStatoErrore(), DescrizioneLibera())">MD01 - No Mandate</td>
                                <td data-bind="dateText: DataScadenza">08/01/2019</td>
                                <td data-bind="dateText: DataFlusso">08/01/2019</td>
                                <td data-bind="text: $component.ImportoDivisa(Importo())" class="text-right">37,10 EUR</td>

                                
                                <td data-bind="text: SequenzaIncasso" style="text-align: center;">FRST</td>

                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.Localization(StatoEsito)">Scartata</a>
                                </td>
                                <!-- /ko -->

                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 5) --><!-- /ko -->
                                
                                <!-- ko if: (TipoEsito() == 4)--><!-- /ko -->
                            </tr>
                        
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 -->
                                    <span data-bind="class: $component.TipoEsitoCss(0), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_0" title="Esito incrociato con dispositivo"></span>
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Esito incrociato con dispositivo"></span>
                                    <!-- /ko -->
                                    <!-- ko if: TipoEsito() == 3 --><!-- /ko -->

                                    <!-- valore = GI -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->

                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->

                                </td>
                                <td data-bind="text: TipoIncasso">CORE - Ordinario</td>
                                <td data-bind="text: RagioneSocialeCreditore">AUTOMOBILE CLUB MODENA</td>
                                <td data-bind="text: RagioneSocialeDebitore">PRANDINI ROSANNA</td>
                                <td data-bind="text: $component.InfoEsito(CodStatoErrore(), DescrizioneLibera())">AC04 - Il conto specificato è chiuso</td>
                                <td data-bind="dateText: DataScadenza">08/01/2019</td>
                                <td data-bind="dateText: DataFlusso">08/01/2019</td>
                                <td data-bind="text: $component.ImportoDivisa(Importo())" class="text-right">77,10 EUR</td>

                                
                                <td data-bind="text: SequenzaIncasso" style="text-align: center;">RCUR</td>

                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.Localization(StatoEsito)">Scartata</a>
                                </td>
                                <!-- /ko -->

                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 5) --><!-- /ko -->
                                
                                <!-- ko if: (TipoEsito() == 4)--><!-- /ko -->
                            </tr>
                        
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 -->
                                    <span data-bind="class: $component.TipoEsitoCss(0), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_0" title="Esito incrociato con dispositivo"></span>
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Esito incrociato con dispositivo"></span>
                                    <!-- /ko -->
                                    <!-- ko if: TipoEsito() == 3 --><!-- /ko -->

                                    <!-- valore = GI -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->

                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->

                                </td>
                                <td data-bind="text: TipoIncasso">CORE - Ordinario</td>
                                <td data-bind="text: RagioneSocialeCreditore">AUTOMOBILE CLUB MODENA</td>
                                <td data-bind="text: RagioneSocialeDebitore">SALAMI LUCA</td>
                                <td data-bind="text: $component.InfoEsito(CodStatoErrore(), DescrizioneLibera())">MD01 - No Mandate</td>
                                <td data-bind="dateText: DataScadenza">08/01/2019</td>
                                <td data-bind="dateText: DataFlusso">08/01/2019</td>
                                <td data-bind="text: $component.ImportoDivisa(Importo())" class="text-right">77,10 EUR</td>

                                
                                <td data-bind="text: SequenzaIncasso" style="text-align: center;">RCUR</td>

                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.Localization(StatoEsito)">Scartata</a>
                                </td>
                                <!-- /ko -->

                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 5) --><!-- /ko -->
                                
                                <!-- ko if: (TipoEsito() == 4)--><!-- /ko -->
                            </tr>
                        
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 -->
                                    <span data-bind="class: $component.TipoEsitoCss(0), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_0" title="Esito incrociato con dispositivo"></span>
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Esito incrociato con dispositivo"></span>
                                    <!-- /ko -->
                                    <!-- ko if: TipoEsito() == 3 --><!-- /ko -->

                                    <!-- valore = GI -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->

                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->

                                </td>
                                <td data-bind="text: TipoIncasso">CORE - Ordinario</td>
                                <td data-bind="text: RagioneSocialeCreditore">AUTOMOBILE CLUB MODENA</td>
                                <td data-bind="text: RagioneSocialeDebitore">GADDI FRANCO</td>
                                <td data-bind="text: $component.InfoEsito(CodStatoErrore(), DescrizioneLibera())">MD01 - No Mandate</td>
                                <td data-bind="dateText: DataScadenza">08/01/2019</td>
                                <td data-bind="dateText: DataFlusso">08/01/2019</td>
                                <td data-bind="text: $component.ImportoDivisa(Importo())" class="text-right">61,10 EUR</td>

                                
                                <td data-bind="text: SequenzaIncasso" style="text-align: center;">RCUR</td>

                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.Localization(StatoEsito)">Scartata</a>
                                </td>
                                <!-- /ko -->

                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 5) --><!-- /ko -->
                                
                                <!-- ko if: (TipoEsito() == 4)--><!-- /ko -->
                            </tr>
                        
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 -->
                                    <span data-bind="class: $component.TipoEsitoCss(0), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_0" title="Esito incrociato con dispositivo"></span>
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Esito incrociato con dispositivo"></span>
                                    <!-- /ko -->
                                    <!-- ko if: TipoEsito() == 3 --><!-- /ko -->

                                    <!-- valore = GI -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->

                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->

                                </td>
                                <td data-bind="text: TipoIncasso">CORE - Ordinario</td>
                                <td data-bind="text: RagioneSocialeCreditore">AUTOMOBILE CLUB MODENA</td>
                                <td data-bind="text: RagioneSocialeDebitore">SECHI AUTOTRASPORTI SNC</td>
                                <td data-bind="text: $component.InfoEsito(CodStatoErrore(), DescrizioneLibera())">MD01 - No Mandate</td>
                                <td data-bind="dateText: DataScadenza">08/01/2019</td>
                                <td data-bind="dateText: DataFlusso">08/01/2019</td>
                                <td data-bind="text: $component.ImportoDivisa(Importo())" class="text-right">30,10 EUR</td>

                                
                                <td data-bind="text: SequenzaIncasso" style="text-align: center;">RCUR</td>

                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.Localization(StatoEsito)">Scartata</a>
                                </td>
                                <!-- /ko -->

                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 5) --><!-- /ko -->
                                
                                <!-- ko if: (TipoEsito() == 4)--><!-- /ko -->
                            </tr>
                        
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 -->
                                    <span data-bind="class: $component.TipoEsitoCss(0), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_0" title="Esito incrociato con dispositivo"></span>
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Esito incrociato con dispositivo"></span>
                                    <!-- /ko -->
                                    <!-- ko if: TipoEsito() == 3 --><!-- /ko -->

                                    <!-- valore = GI -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->

                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->

                                </td>
                                <td data-bind="text: TipoIncasso">CORE - Ordinario</td>
                                <td data-bind="text: RagioneSocialeCreditore">AUTOMOBILE CLUB MODENA</td>
                                <td data-bind="text: RagioneSocialeDebitore">SEBELIC NADIA</td>
                                <td data-bind="text: $component.InfoEsito(CodStatoErrore(), DescrizioneLibera())">MD01 - No Mandate</td>
                                <td data-bind="dateText: DataScadenza">08/01/2019</td>
                                <td data-bind="dateText: DataFlusso">02/01/2019</td>
                                <td data-bind="text: $component.ImportoDivisa(Importo())" class="text-right">37,06 EUR</td>

                                
                                <td data-bind="text: SequenzaIncasso" style="text-align: center;">RCUR</td>

                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.Localization(StatoEsito)">Scartata</a>
                                </td>
                                <!-- /ko -->

                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 5) --><!-- /ko -->
                                
                                <!-- ko if: (TipoEsito() == 4)--><!-- /ko -->
                            </tr>
                        
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 -->
                                    <span data-bind="class: $component.TipoEsitoCss(0), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_0" title="Esito incrociato con dispositivo"></span>
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Esito incrociato con dispositivo"></span>
                                    <!-- /ko -->
                                    <!-- ko if: TipoEsito() == 3 --><!-- /ko -->

                                    <!-- valore = GI -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->

                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->

                                </td>
                                <td data-bind="text: TipoIncasso">CORE - Ordinario</td>
                                <td data-bind="text: RagioneSocialeCreditore">AUTOMOBILE CLUB MODENA</td>
                                <td data-bind="text: RagioneSocialeDebitore">VERDE SALVATORE</td>
                                <td data-bind="text: $component.InfoEsito(CodStatoErrore(), DescrizioneLibera())">MD01 - No Mandate</td>
                                <td data-bind="dateText: DataScadenza">08/01/2019</td>
                                <td data-bind="dateText: DataFlusso">02/01/2019</td>
                                <td data-bind="text: $component.ImportoDivisa(Importo())" class="text-right">77,06 EUR</td>

                                
                                <td data-bind="text: SequenzaIncasso" style="text-align: center;">RCUR</td>

                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.Localization(StatoEsito)">Scartata</a>
                                </td>
                                <!-- /ko -->

                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 5) --><!-- /ko -->
                                
                                <!-- ko if: (TipoEsito() == 4)--><!-- /ko -->
                            </tr>
                        
                            <tr>
                                <td style="text-align: center;">
                                    <!-- ko if: TipoEsito() == 1 --><!-- /ko -->
                                    <!-- ko if: TipoEsito() == 2 -->
                                    <span data-bind="class: $component.TipoEsitoCss(0), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_0" title="Esito incrociato con dispositivo"></span>
                                    <span data-bind="class: $component.TipoEsitoCss(1), attr: { title: $component.LocalizationTipoEsito(TipoEsito()) }" class="tipoesito_1" title="Esito incrociato con dispositivo"></span>
                                    <!-- /ko -->
                                    <!-- ko if: TipoEsito() == 3 --><!-- /ko -->

                                    <!-- valore = GI -->
                                    <!-- ko if: TipoEsito() == 5 --><!-- /ko -->

                                    <!-- valore = GD -->
                                    <!-- ko if: TipoEsito() == 4 --><!-- /ko -->

                                </td>
                                <td data-bind="text: TipoIncasso">CORE - Ordinario</td>
                                <td data-bind="text: RagioneSocialeCreditore">AUTOMOBILE CLUB MODENA</td>
                                <td data-bind="text: RagioneSocialeDebitore">TREVISI FILIPPO</td>
                                <td data-bind="text: $component.InfoEsito(CodStatoErrore(), DescrizioneLibera())">MD01 - No Mandate</td>
                                <td data-bind="dateText: DataScadenza">08/01/2019</td>
                                <td data-bind="dateText: DataFlusso">02/01/2019</td>
                                <td data-bind="text: $component.ImportoDivisa(Importo())" class="text-right">77,06 EUR</td>

                                
                                <td data-bind="text: SequenzaIncasso" style="text-align: center;">RCUR</td>

                                <!-- ko if: (TipoEsito() != 4) && (TipoEsito() != 5) -->
                                <td style="cursor: pointer" data-bind="click: $component.DetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.Localization(StatoEsito)">Scartata</a>
                                </td>
                                <!-- /ko -->

                                <!-- link a grande distinta dettaglio -->
                                <!-- ko if: (TipoEsito() == 5) --><!-- /ko -->
                                
                                <!-- ko if: (TipoEsito() == 4)--><!-- /ko -->
                            </tr>
                        </tbody>
                    </table>
                </div>
                <paginatore params="PagedList: $component.List">
    <div data-bind="visible: PagedList.Page().length > 0 &amp;&amp; PagedList.PageCount() > 1" style="">
        <!-- ko template: {name: PaginatorTemplate()} -->
    <div class="dataTables_paginate" data-bind="with: PagedList">
        <span data-bind="foreach: ko.utils.range(1, PageCount)">
            <a class="paginate_button current" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)">1</a>
        
            <a class="paginate_button" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)">2</a>
        
            <a class="paginate_button" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)">3</a>
        
            <a class="paginate_button" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)">4</a>
        </span>
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
        
        <div id="export-lista-esiti" value="Esporta" style="float: right; margin-bottom: 1%"> <div class="tm-print">     <div class="btn-group undefined">         <button type="button" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">             Esporta <span class="caret" style="margin-left: 12px;"></span>         </button>         <ul class="dropdown-menu">                      <li>                 <a class="link-button Pdf-0" title="Export" style="padding: 10px; padding-right: 30px; padding-top: 5px; padding-bottom: 5px; font-size: 14px; font-family: Helvetica, Arial, sans-serif; font-weight: bold;">                     <div class="icon anchise-icon anchise-icon-export-Pdf"></div>                     <span style="margin-left: 12px;">Pdf</span>                 </a>             </li>             <li>                 <a class="link-button Excel-1" title="Export" style="padding: 10px; padding-right: 30px; padding-top: 5px; padding-bottom: 5px; font-size: 14px; font-family: Helvetica, Arial, sans-serif; font-weight: bold;">                     <div class="icon anchise-icon anchise-icon-export-Excel"></div>                     <span style="margin-left: 12px;">Excel</span>                 </a>             </li></ul>     </div>     <div class="print-popup"></div> </div></div>
    </div>
    
    

</list-esito>
        </div>

        <!-- ESITO DETAIL -->
        <div data-bind="visible: CurrentSection() == Sections.ESITO_DETAIL" style="display: none;">
            <esito-sdd-dettaglio params="Esito: Esito, Details: Details">
    <div class="riquadro" style="font-size: 12px;">
        <div>
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Dettaglio Disposizione</h1>
            <a id="id-esito-dettaglio" class="icon-replace icon-help active link" onclick="javascript: showPopupHelp('/anchise2.web/Widget/Help/GetHelper', 'Chiudi', 'DetailEsitiSdd', null, null, 'popup-esito-dettaglio', 'id-esito-dettaglio');">Help On Line</a>
        </div>

        <div data-bind="with: Esito">
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
                                        Rag.Soc./Intestatario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: RagioneSocialeCreditore"></label>
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
                                    <label data-bind="text: CodiceSiaOrdinante"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Codice CUC:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CodiceCucOrdinante"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        ABI-Banca:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.AbiBanca"></label><!--RapportoAbiOrdinante-->
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        IBAN:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IbanOrdinante"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding: 0">
                                        IBAN commissioni:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IbanCommissioniOrdinante"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding: 0">
                                        Identificativo Creditore:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CodiceIdOrdinante"></label>
                                </div>
                            </div>

                        </div>

                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding: 0">
                                        Rag.Soc./Intestatario Creditore effettivo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: RagioneSocialeCreditoreEff"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Dati Debitore-->
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
                                        Rag.Soc./Intestatario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: RagioneSocialeDebitore"></label>
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
                                        IBAN:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IbanDebitore"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        BIC:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: BicDebitore"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Rag.Soc./Intestatario Debitore effettivo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: RagioneSocialeDebitoreEff"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Dati Disposizione-->
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12 text-center">
                            <h1>
                                Dati Disposizione
                            </h1>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Tipo dispositivo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Localization.TipologieDispositive.GetLabel(TipoDisposizione())"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Tipo incasso:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: TipoIncasso"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Importo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="numericTextSeparator: Importo"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Causale incasso:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CausaleIncassoId"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Data invio:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="dateText: DataFlusso"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Data scadenza:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="dateText: DataScadenza"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Descrizione incasso:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: IdUnivocoPag"></label>
                                </div>
                            </div>
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
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Informazioni di riconciliazione:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: DescrizioneRiconciliazione"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Informazioni Aggiuntive-->
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12 text-center">
                            <h1>
                                Informazioni Aggiuntive
                            </h1>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Nome supporto distinta:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: NomeSupportoDistinta"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        ABI commissioni:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CommissioneCodiceAbi"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Importo commissioni:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <!-- ko if: ImportoCommissione() > 0 --><!-- /ko -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
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
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Data sottoscrizione:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="dateText: DataSottoscrizione"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Stato incasso:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.LocalizationEsito(StatoEsito())"></label>
                                </div>
                            </div>
                            <!-- 2263 - revisione esiti sdd TODO: verificare valore -->
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Causale esito:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: CodStatoErrore"></label>
                                </div>
                            </div>
                            <!-- 2263 - end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--ko if: Details.AllData().length > 0-->
        <div data-bind="with: Details">
            <div class="table-responsive">
                <div class="dataTables_wrapper" style="margin-top: 10px">
                    <table class="dataTable table">
                        <thead>
                            <tr>
                                <th data-bind="css: ThCss('DataCreazione'), click: SortToggle('DataCreazione')" class="sorting">
                                    Data creazione
                                </th>
                                <th data-bind="css: ThCss('DataCaricamento'), click: SortToggle('DataCaricamento')" class="sorting">
                                    Data caricamento
                                </th>
                                <th data-bind="css: ThCss('StatoMessaggio'), click: SortToggle('StatoMessaggio')" class="sorting">
                                    Stato
                                </th>
                                <th data-bind="css: ThCss('DescrizioneStato'), click: SortToggle('DescrizioneStato')" class="sorting_asc">
                                    Descrizione stato
                                </th>
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: Page">
                            <tr>
                                <td style="text-align: center;" data-bind="dateText: DataCreazione"></td>
                                <td style="text-align: center;" data-bind="dateText: DataCaricamento"></td>
                                <td style="text-align: center; cursor: pointer;" data-bind="click: $component.SubDetailEsito">
                                    <a href="#" style="text-decoration: underline" data-bind="text: $component.LocalizationEsito(StatoMessaggio)"></a>
                                </td>
                                <td data-bind="text: $component.LocalizationEsito(StatoMessaggio,true)"></td>
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
        <!-- /ko -->
    </div>
    <div class="margin-bottom20 text-right">
        <input type="button" class="btn btn-primary" value="Stampa" data-bind="singleClick: StampaPdf">
        <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back">
    </div>

    <!--popup-->
    <div class="modal-layer" data-bind=" visible: PopupDetailVisible" style="display: none;">
        <div class="popup-container" style="position: relative;overflow-y: auto;height:70%; width: 30%">
            <div id="popup-title" class="row popup-riquadro popup-riquadro-top" style="font-size: smaller">
                <div class="clearfix">
                    <span>
                        <h1 id="popupTitolo">Dettaglio messaggio</h1>
                    </span>
                    <span class="popup-close-icon">
                        <a class="icon-replace icon-close active link" data-bind="singleClick: TogglePopupDetailVisible">Close</a>
                    </span>
                </div>
                <div class="riquadro">
                    <div class="table-responsive">
                        <div class="dataTables_wrapper" style="margin-top: 10px">
                            <table class="dataTable table">
                                <thead>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 30%">Stato messaggio</td>
                                        <td style="width: 7%">:</td>
                                        <td data-bind="text: LocalizationEsito(RecordSel().StatoMessaggio)"></td>
                                    </tr>
                                    <tr>
                                        <td>Descrizione stato</td>
                                        <td>:</td>
                                        <td data-bind="text: LocalizationEsito(RecordSel().StatoMessaggio,true)"></td>
                                    </tr>
                                    <tr>
                                        <td>Data creazione</td>
                                        <td>:</td>
                                        <td data-bind="dateText: RecordSel().DataCreazione"></td>
                                    </tr>
                                    <tr>
                                        <td>Data caricamento</td>
                                        <td>:</td>
                                        <td data-bind="dateText: RecordSel().DataCaricamento"></td>
                                    </tr>
                                    <tr>
                                        <td>Causale esito</td>
                                        <td>:</td>
                                        <td data-bind="text: RecordSel().CausaleEsito"></td>
                                    </tr>
                                    <tr>
                                        <td>Nome tag</td>
                                        <td>:</td>
                                        <td data-bind="text: RecordSel().NomeTag"></td>
                                    </tr>
                                    <tr>
                                        <td>Informazioni Aggiuntive</td>
                                        <td>:</td>
                                        <td data-bind="text: RecordSel().DescrizioneLibera"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <input type="button" class="btn" value="Stampa" data-bind="singleClick: StampaDettaglioPdf">
                    <input type="button" class="btn" value="Chiudi" data-bind="singleClick: TogglePopupDetailVisible">
                </div>
            </div>
        </div>
    </div>

</esito-sdd-dettaglio>
        </div>

        <!-- ESITO DETAIL RO -->
        <div data-bind="visible: CurrentSection() == Sections.ESITO_DETAIL_RO" style="display: none;">
            <esito-sdd-dettaglio-ro params="Esito: Esito, Sottodistinta: Sottodistinta, DetailsRo: DetailsRo, ListStatiEsitiRo: ListStatiEsitiRo">
    <div class="riquadro" style="font-size: 12px;">
        <div>
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Esiti Sottodistinta</h1>
        </div>

        <div data-bind="with: Sottodistinta">
            <div class="section">
                <div class="row">

                    <!-- Dati Distinta-->
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12 text-center">
                            <h1>
                                Dati Sottodistinta
                            </h1>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Rag.Soc./Intestatario:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Creditor.RagioneSociale"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        IBAN:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Creditor.Iban"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Tipo dispositivo:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label>Esiti Incassi Sepa Direct Debit</label>
                                    
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Totale importi:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="numericTextSeparator: Importo"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Num. Dispo.:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: $component.TotaleEsiti">0</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-2 col-xs-offset-3">
                                <label style="padding:0">
                                    Esiti totali:
                                </label>
                                <label style="text-decoration: underline; cursor: pointer;" data-bind="text: $component.TotaleEsiti, singleClick: $component.Search.bind($data,null)">0</label>
                            </div>
                            <div class="col-sx-6" data-bind="foreach: $component.ListStatiEsitiRo"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--ko if: DetailsRo-->
        <div data-bind="with: DetailsRo">
            <div class="table-responsive">
                <div class="dataTables_wrapper" style="margin-top: 10px">
                    <table class="dataTable table">
                        <thead>
                            <tr>
                                <th data-bind="css: ThCss('1'), singleClick: SortToggle('1')" style="font-size: 13px; padding-left: 15px" class="sorting_desc">
                                    Dato
                                </th>
                                <th data-bind="css: ThCss('2'), singleClick: SortToggle('2')" style="font-size: 13px; padding-left: 15px" class="sorting">
                                    Debitore
                                </th>
                                <th data-bind="css: ThCss('3'), singleClick: SortToggle('3')" style="font-size: 13px; padding-left: 15px" class="sorting">
                                    Scadenza
                                </th>
                                <th data-bind="css: ThCss('4'), singleClick: SortToggle('4')" style="font-size: 13px; padding-left: 15px" class="sorting">
                                    Data ricezione
                                </th>
                                <th data-bind="css: ThCss('5'), singleClick: SortToggle('5')" style="font-size: 13px; padding-left: 15px" class="sorting">
                                    Importo
                                </th>
                                <th style="font-size: 13px; padding-left: 15px">
                                    Divisa
                                </th>
                                <th style="font-size: 13px; padding-left: 15px">
                                    Stato incasso
                                </th>
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: Page"></tbody>
                    </table>
                </div>
                <paginatore params="PagedList: $component.DetailsRo">
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
                <div data-bind="visible: Page().length === 0">
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
        </div>
        <!-- /ko -->
    </div>
    <div class="margin-bottom20 text-right">
        <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back">
    </div>

</esito-sdd-dettaglio-ro>
        </div>

        <!-- LIST SOTTODISTINTE -->
        <div data-bind="visible: CurrentSection() == Sections.ESITO_GD_SOTTODISTINTE" style="display: none;">
            <list-sottodistinte params="SottoDistinte: SottoDistinte, Sottodistinta: Sottodistinta,  List: List, Esito: Esito, DetailsRo: DetailsRo, ListStatiEsitiRo: ListStatiEsitiRo">
    
    <div>
        <div class="riquadro">
                <div>
                    <div class="flag riepilogo">&nbsp;</div>
                    <h1>Esiti Sottodistinte</h1>
                </div>
            <!-- ko with: SottoDistinte -->
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
                <div class="dataTables_wrapper" style="margin-top: 10px">
                    <table class="dataTable table">
                        <thead>
                            <tr>
                                <th data-bind="css: ThCss('1'), singleClick: SortToggle('1')" style="padding-left: 15px;font-size: 13px" class="sorting_desc">
                                    Scadenza
                                </th>
                                <th data-bind="css: ThCss('2'), singleClick: SortToggle('2')" style="padding-left: 15px;font-size: 13px" class="sorting">
                                    Ordini
                                </th>
                                <th data-bind="css: ThCss('3'), singleClick: SortToggle('3')" style="padding-left: 15px;font-size: 13px" class="sorting">
                                    Importo
                                </th>
                                <th style="padding-left: 10px;font-size: 13px">
                                    Divisa
                                </th>
                                <th data-bind="css: ThCss('5'), singleClick: SortToggle('5')" style="padding-left: 15px;font-size: 13px" class="sorting">
                                    Creditore
                                </th>
                                <th style="padding-left: 15px;font-size: 13px">
                                    Sequenza incasso
                                </th>
                            </tr>
                        </thead>
                        <tbody data-bind="foreach: Page"></tbody>
                    </table>
                </div>
                <paginatore params="PagedList: $component.SottoDistinte">
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
                <div data-bind="visible: Page().length === 0">
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
    </div>
    <div class="margin-bottom20 text-right">
        <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back">
    </div>
</list-sottodistinte>
        </div>

    </div>
</div>


<script type="text/javascript">

    var PIAZZATURA = [{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":812046,"ClasseServizio":0,"Crypt":"b1ZVQcMq/KIXUM/72CleSclVpUGRDtf8P6odd4m/KbGoXiCKw1qA0bqCTeeXCIRxdN95VMyeonJ7lSkL4UKiyisYOw7eMyXKV4qJAPIKTkrTv7Thk+ZJLmBMbhnToYnT6qQ20GdIt/XgJisRJxWsdw==","Hash":"CBFD2B5F41F449F0056AF6B1D4097A8E4FD6DD52F93CD3B1C6B5E476C51890D3"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"SEDE DI MODENA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":627308.50,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21402","Id":null,"IdAzienda":"106609","CodiceIban":"IT28J0503412900000000047658","CodiceAbi":"05034","CodiceCab":"12900","CodiceFiliale":"12900","NumeroRapporto":"000000047658","CodiceDivisa":"EUR","Descrizione":"000000047658","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000047658","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"812046","Type":101,"Crypt":"olX2YJsj/5QDqac4FtTQrdp2H1vm3hN59hLmfru2x9gep5oYn0I7Ijos/9+HYVVF","Hash":"58F39526470A635E9EA09736613E3AEBA913E65CED899ABBDE4E6074E9C83FAB"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"UXSqG8uKCw5jCjhj+LEPuPRhrZWkRq/aotez0n58GAilgwTrqgv9AswazN2REt/R","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":812047,"ClasseServizio":0,"Crypt":"k/ilJkjHaUjaFTxXQbnk5r9ssGfPhDO9hyh684EJjwfTILLra3K6wfEO6tUSjgar/gkO+IwFZqTCILoEZ985HrN+8T2Hw1VKZYHFl3RkjjIp7jPBQPKyQmgLsi1q/EHOR82abITxkhlFvVdbxleL3A==","Hash":"482200EFC137EF1DEAFFC7EB8275F1A55AA76E528622845EC9FDBC2A05BC4735"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"SEDE DI MODENA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":28225.84,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21402","Id":null,"IdAzienda":"106609","CodiceIban":"IT05K0503412900000000047659","CodiceAbi":"05034","CodiceCab":"12900","CodiceFiliale":"12900","NumeroRapporto":"000000047659","CodiceDivisa":"EUR","Descrizione":"000000047659","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000047659","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"812047","Type":101,"Crypt":"RrrfAqznZoS1ilj6FluXZt8C0u5F9X3YJBmLSRTNqFAZXBZbGUCAvDqvVwH51ldQ","Hash":"89F15DCCC64E6BDEE9719345BC97B3F324ACCB46361E8291FB7D00A4C75D4EF5"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"UXSqG8uKCw5jCjhj+LEPuPRhrZWkRq/aotez0n58GAilgwTrqgv9AswazN2REt/R","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":812048,"ClasseServizio":0,"Crypt":"SeLEvRYQnCq/Dp6b0UYPaqV+6mVGQIX1LxL32oBKb8Blqt53l6Ql5Yrq6g5GueaxmNaW9Hsje66F2RIOjXAlneQidaFzl3vncoMchekGxHuBiYvc+zy8wnjxvJ6thMpNSilSHIizg/Da2LqwWBujiA==","Hash":"06452A7C3EEAD4198663DBFD5586F48BF5A2A902FE7F0CBEB2565380162D292F"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"SEDE DI MODENA","UltimoAggiornamento":"2019-03-16T00:00:00","Saldo":29283.18,"DataSaldo":"2019-03-16T00:00:00","Stato":1,"Bic":"BAPPIT21402","Id":null,"IdAzienda":"106609","CodiceIban":"IT24E0503412900000000047661","CodiceAbi":"05034","CodiceCab":"12900","CodiceFiliale":"12900","NumeroRapporto":"000000047661","CodiceDivisa":"EUR","Descrizione":"000000047661","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000047661","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"812048","Type":101,"Crypt":"lEg6zjaRgSFSv9yFf32ZMoLwcjzGYgKHMnc/R5VO+CapNqaAdxQD9Hlzvi0f9QjJ","Hash":"0538216D0A356B76856BD134105146057B5A0DA5AC334295A6D96165CA3C8414"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"UXSqG8uKCw5jCjhj+LEPuPRhrZWkRq/aotez0n58GAilgwTrqgv9AswazN2REt/R","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582120,"ClasseServizio":0,"Crypt":"ObD5FvPHDcrKcf8Ewtyzs4Y52usGYuveymDJKyPWf5ITqjPj9KCVuqxkiKDLhxZGxfkeDLpfUBYAzHiIempfPDN+vcrLPV2IACyewfLJeYCJplQ8wUaYimOjRgvttI20csG2VRtd6U6i3ug1L9g/bA==","Hash":"1FD10B55BC7CEEB2504E58BC0EBD7F2194CA563F9B105D1063E16160436E018C"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":-3.50,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT64Y0503411701000000002407","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002407","CodiceDivisa":"EUR","Descrizione":"000000002407","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002407","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582120","Type":101,"Crypt":"JEBZwNse8fmjziaV1qcR30drDPkl5yzGkf3f8E/GebNfd9nSrNIHlYdGBxVVtqGJ","Hash":"4827D54C3C5627246FDCBDFB6FB00953248E39CF23B7326A65ADD455205C4E1F"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"UXSqG8uKCw5jCjhj+LEPuPRhrZWkRq/aotez0n58GAilgwTrqgv9AswazN2REt/R","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582121,"ClasseServizio":0,"Crypt":"uILnJ/B0sqUiVy00S5BfU6guIB1Xh9/iundxfdowJ8FJRAyV9qv1P+fODKziIKYdzAA8g3W3ZyB3z1o8oax+lB5+65baWk5x4aEnd7iToR5ZNNVSyPtFDpHR+SYS4iR4dLcbAgcKN8Yx0wgb57nAZw==","Hash":"47FB5969C254F36F84A22605CED4BBF36AB3EEFC1A7F8B815B0856EED28DC8AD"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT81X0503411701000000002417","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002417","CodiceDivisa":"EUR","Descrizione":"000000002417","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002417","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582121","Type":101,"Crypt":"eXvEfZFmZkQFpr3K4Jj+sHY0HBRdrgLM08Eh6x6EqIl6YIud7EEr10K70Na/nwlZ","Hash":"F715A2A9F46C6DF9896A9EFBA50A7696A02F3EE9A8F567DBCE5B4B6FFFD832DF"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"UXSqG8uKCw5jCjhj+LEPuPRhrZWkRq/aotez0n58GAilgwTrqgv9AswazN2REt/R","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582122,"ClasseServizio":0,"Crypt":"6muYMOccwEKmmYWA7A0UrkIGzn8N7zA5HExnWP2F6eFSab3x/5DVnjLAGFWJwR/9gs2GdszD931kUVM0gMicpXyxAyv4pdrd3nIis5p1dBbdOluxyobXTJz11CRcWYGxeMR3rPP9mQKPIC/xP4RdMA==","Hash":"A7CB57A28F38FCFFE8A001BA9F2D2BF0FE1E6F9B1278E354F23D5E9D1C946829"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT58Y0503411701000000002418","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002418","CodiceDivisa":"EUR","Descrizione":"000000002418","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002418","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582122","Type":101,"Crypt":"MHtTLQ75KYmcLqE/h4nsCIdBT93m0azkZy2D/sjP6Q6cVAdrYcGvGuC7spjliaoE","Hash":"D61200BF1F0867E0D64EBA4968F6F021F0DE98F1964E83F70A90E7962DF7400D"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"UXSqG8uKCw5jCjhj+LEPuPRhrZWkRq/aotez0n58GAilgwTrqgv9AswazN2REt/R","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582123,"ClasseServizio":0,"Crypt":"WfYk9A98ju8YUcMEqYZxsS20n+qphBBAcr79eHRpQFiDCa+AMovdkAF1ydT6lWy8e/a4Vc0Xnk6/XComCJOpnjHcs655zVenJfORmNf5xP8rX/eGkWgthDHw8saAeRxyZ+gXc6ZBVAX3tNLuSHA3YQ==","Hash":"2F740DBB5228F14B05DAF733A3DD0394A4184B079645409C767A4359A70AA1F5"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT35Z0503411701000000002419","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002419","CodiceDivisa":"EUR","Descrizione":"000000002419","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002419","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582123","Type":101,"Crypt":"3pDLI0mMFs5/wZ3VkgcpU5d65aaJFHvzxvZhsqUgsCI9T9TQljN30CdMgpxuQ9Jo","Hash":"E19DFC5BE3A7AB90168C4C706CE37E832452577080207778435CFBD38FA6E678"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"UXSqG8uKCw5jCjhj+LEPuPRhrZWkRq/aotez0n58GAilgwTrqgv9AswazN2REt/R","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582124,"ClasseServizio":0,"Crypt":"ldg+dp+b6W+nn5Akatxfr6Qi+8hCHwSs9Gh7+82jdtvodugZNQ1eCQtaRJuoQDhFFZdL9wcqHnfr92BrShmc7jMi2Sakd+v7uVTkb+FlHcrXolIuKYyWXRViqFoM8+xhC7juJV7QeOoBy8J3CGUGBA==","Hash":"985994BF9760B716B131D5E35690B4CBFA854B39EE8EDAED8DB20B5B62FF7664"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT89V0503411701000000002420","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002420","CodiceDivisa":"EUR","Descrizione":"000000002420","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002420","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582124","Type":101,"Crypt":"uuQ4TlSuIzM3EWWQAAG8MbrzCNSKwilmQSEjrRBRiFpIq58L/HzHDHh9mHjzd4r0","Hash":"2613591AC2733913295A572EEC057079222440F7B95151328466B7F82AEB6FB1"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"UXSqG8uKCw5jCjhj+LEPuPRhrZWkRq/aotez0n58GAilgwTrqgv9AswazN2REt/R","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582125,"ClasseServizio":0,"Crypt":"UHPYVkMJFdmQKrqzsQCy/gnm8f/7mLmT9MbHZRHc6AvbuCr+Fif7OcwZVGnBTSvahGDCoale6HJMoZ4lofF3gZOE04ye9myudIE7c+DdeOaNbsCvcMZ66gREILwTTmqw0JEo+MtuooM0TnmRl+jt1Q==","Hash":"71A692CE73486F3BE3F8EB098CA0474130527BFDBB8D1142AC84BA31ED24290D"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":2.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT66W0503411701000000002421","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002421","CodiceDivisa":"EUR","Descrizione":"000000002421","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002421","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582125","Type":101,"Crypt":"pk6W9tNilMySU+qV/P/29adnhSrpggR4+XTuHG+f/2K2iIIa9th60WH2tjebcc4a","Hash":"43737BBA294406A3B5574F8D21AD4C751DB6303A6E29B1B606BA11601905921D"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"UXSqG8uKCw5jCjhj+LEPuPRhrZWkRq/aotez0n58GAilgwTrqgv9AswazN2REt/R","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582126,"ClasseServizio":0,"Crypt":"+gLbyMEZw/l190b65LJSCCW8SXY/Vc7epAW+xJslS80Zjpahy/WzJCNP8XqkfaqW5hnuPOHYiuLbPK3MwYvNy69YtRlaaZPkmXF/n0MfCywJ3hK9GsuuTIuNQ3+1lepjfPiLfRjTyvIvU5Gx8DDb3g==","Hash":"8F1DE79715FE2F856941BF696D4FD80C8D6B6FD01F4A18872D4072F30523FAA9"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT43X0503411701000000002422","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002422","CodiceDivisa":"EUR","Descrizione":"000000002422","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002422","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582126","Type":101,"Crypt":"rSaaGliBctIEBHnYCV7O1I1N4m6wxM3d4mItHsTcAIdSvnp+mIHaL8XnHO/UG1dF","Hash":"CA6731A43BA6FEE489F2E5B0958679D340795D42FEBF90930E80360823A34C99"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"UXSqG8uKCw5jCjhj+LEPuPRhrZWkRq/aotez0n58GAilgwTrqgv9AswazN2REt/R","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582127,"ClasseServizio":0,"Crypt":"+AskaQwmridQaFMbauylcIsHYuDH1dVCup2aZj2YhMrxYUO9izwbxifXCW3mPFFoxYGjy5+y0t0aGBA2EI6C+UHZxe5oxsJ8W0et5f8DfoxopvNwjMDyvwMJkLNF2HxaJK9A4tygTz/Qz7AXEBi5yA==","Hash":"67D37D60CACDCA72F9C6963BD557C577FE068C0DFBBC648E5BF9E6F343CC9264"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT20Y0503411701000000002423","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002423","CodiceDivisa":"EUR","Descrizione":"000000002423","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002423","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582127","Type":101,"Crypt":"1SVjVptreS/as7ydw/hCUQhW4se7VuyLjYpMeZnSQ/O6B0KKYrucOKSgJ5yipUqA","Hash":"D097E24FDEA715C00D53E08407F1D8100D46ACCFA13A3D9796DFE864AF375C89"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"UXSqG8uKCw5jCjhj+LEPuPRhrZWkRq/aotez0n58GAilgwTrqgv9AswazN2REt/R","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582128,"ClasseServizio":0,"Crypt":"FVFS2VZoux+07A3G9YQa34bdk+h2jROeInfES5pU2KoNL1njlC0jhHcPp3Ze//ede1obyLumCB3uYqYBDfH6ql9Xp3eazgwtIyq4A5UQuupx8z3VDqQS3/rWu3MKVd/MNpxT7Y1WxdSR3glAwxNpXQ==","Hash":"75F447A17BC4BE5F03758F5BAC2CE631A2D8A125025F18D91942DAFD052BFC10"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT94Z0503411701000000002424","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002424","CodiceDivisa":"EUR","Descrizione":"000000002424","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002424","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582128","Type":101,"Crypt":"UUscoHPUj1sxvcVJ/jPdcpRRwgWuBcYEthpG5TUclvAVFyKAr0O9NPHkYn8bXQcT","Hash":"433C9EA10A49E8D42C5F01723378B38D03921FBFC72A2297FE503CF06CC45529"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"UXSqG8uKCw5jCjhj+LEPuPRhrZWkRq/aotez0n58GAilgwTrqgv9AswazN2REt/R","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582129,"ClasseServizio":0,"Crypt":"ugFIkDWyAR31uZdYQ/y/63gLmvpJCToKa95v2n4s72Zb5uVbCZK7EWzhsUwvfVUp7T607a6fEDlrnB7AUt0J/p/hQZX8ZZ5FSPCxlPiXIkm5AxAfLKYtNmhtfoEAFZOlFQkyVMU+K4c/YjaTLyHR/Q==","Hash":"5D95DFF4722F884C0E44AFE5D5DCAC9192E99B5733E5FB5254F074700D2A4CDF"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT64A0503411701000000002425","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002425","CodiceDivisa":"EUR","Descrizione":"000000002425","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002425","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582129","Type":101,"Crypt":"+gUdr9jlwKQRDkGf/lEJC6xwQ8AJGfcO7IEYFz1UMtfobPYe95u+JSLCBH1A4Yrk","Hash":"CAF26FA660DE2411CD2B9175FC79F0111F2E9071AEC620C20CD2A8FB440CAE85"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"UXSqG8uKCw5jCjhj+LEPuPRhrZWkRq/aotez0n58GAilgwTrqgv9AswazN2REt/R","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582130,"ClasseServizio":0,"Crypt":"o7K6zq1HST6MqA1MK0r2P5cmJfkSdGfdcBD7DARIbNYrlFC6OoOfw7QyZ84xrZMwIR+e7da3pwcSF3re5Evc7CEhseh7UeI3CIrLpK5cRB5HRbH3npFS+cOonKJcrYjBT/o0bBmoRuMkolCjlryOMQ==","Hash":"B032B84BA3B8E4E0D72A17FD30576AD1219F1437249A4135856DBEC3DBE0DAB4"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT41B0503411701000000002426","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002426","CodiceDivisa":"EUR","Descrizione":"000000002426","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002426","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582130","Type":101,"Crypt":"c0tNgks4JbNT/92AFtTqxuO7vFF/2n96p+9A3aTrjKA2PExHMIaBiAzfviBNhA1k","Hash":"F86A5FBBCE184C92BD416D3650F5E11A004A09B5FB7984FE232A9A6C3727ECF3"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"UXSqG8uKCw5jCjhj+LEPuPRhrZWkRq/aotez0n58GAilgwTrqgv9AswazN2REt/R","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582131,"ClasseServizio":0,"Crypt":"a/rZ1V0/lOeZV0kAZ7xrDKrOlIdQvgL5cJJhXCT7YJelCz+B5xT/BzOrFkUpWoOauPs6F10sVQqxDh5McOQiSzMc6zCGspWIgVJ2Rty/9iVTMwOY4MBkB6QVfXFPb3Ah+leydO9xdmWdqu+Yo5WhyA==","Hash":"0626B98197752A746DFBA443CA4E91EA02FB7405E3CA2F638EA23A14E6B6623C"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT18C0503411701000000002427","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002427","CodiceDivisa":"EUR","Descrizione":"000000002427","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002427","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582131","Type":101,"Crypt":"/j0ZtztuYbkK55odo1sDmhOyuMOGEBOAWepn//vEphxnGjVlDuNaSASUUJfAPXik","Hash":"342FD3E1875A4059AB2E33909A89A19C4D11152AFDCBFA90151D7BAD14F8245C"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"UXSqG8uKCw5jCjhj+LEPuPRhrZWkRq/aotez0n58GAilgwTrqgv9AswazN2REt/R","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582132,"ClasseServizio":0,"Crypt":"VuKkHqyQHbgGxrwa4larQrQOA2XpGQLP8IgxjRksaKsktI2lR1PCeo4B8r4TfPfC8+KOMJ73Ky5ffwEaoH8nuQ6nGQBWpajpYQF13kV1hzcyOgcWL32xOQAuVahuyBawlB8cO5iDbt/ySX6B/opbow==","Hash":"EC227731D8A137AB9415DBFA64DC3668DF18D55FEB62A8BC77626632B83D9460"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT92D0503411701000000002428","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002428","CodiceDivisa":"EUR","Descrizione":"000000002428","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002428","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582132","Type":101,"Crypt":"TXgV4udPSQGAklsuGIJJkRJsC8Lryu4SC4wZvUmNezAwmEB/8k1mb/RJY5NTPCQM","Hash":"F5F728943D8138B65375A70994F5F22F764B991FB82E1AEE44DC34FE7E4143D9"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"UXSqG8uKCw5jCjhj+LEPuPRhrZWkRq/aotez0n58GAilgwTrqgv9AswazN2REt/R","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582133,"ClasseServizio":0,"Crypt":"NL4B/K8L5UGvoW9aHZ/mfhmwludYE0NW0tE/PU4vLdG5dIvrx6Y9ASnIFI3tkpqAyuUfXavYgSru5r0K+6lSGuGDoj/9hcvTeZQKQX8CC1lUTl5GkVOKG80WeuPX6NnXBUlZfDHgKHml0lOznbPj1g==","Hash":"FE9A0C6C26C23D65348F34C920B300364B1CBBF63115765848F8E0F546907EF1"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT69E0503411701000000002429","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002429","CodiceDivisa":"EUR","Descrizione":"000000002429","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002429","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582133","Type":101,"Crypt":"0I9unDYLLFXmgVRIV+FWK7083dKZ9++ATaEwNum7+jXtW7t1p/8ToGw/ZjJcHmyV","Hash":"869CB53DC90B8069605C1533E635E56D08AD47A0CFBE8D41565EC432370772F4"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"UXSqG8uKCw5jCjhj+LEPuPRhrZWkRq/aotez0n58GAilgwTrqgv9AswazN2REt/R","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}}];
    var ESITO_SDD = {"STATO_INCASSO":[{"K":"PART","V":"Accettata parzialmente"},{"K":"FIRM","V":"Autorizzata"},{"K":"CONF,ACTC","V":"Confermata"},{"K":"RJCT,TMTB","V":"Scartata"},{"K":"RJCT,TMTB,4-KO","V":"Scartata da validazione tecnica"}],"TIPO_INCASSO":[{"K":"B2B","V":"B2B - Veloce"},{"K":"CORE","V":"CORE - Ordinario"}],"SEQUENZA_INCASSO":[{"K":"FRST","V":"FRST - Prima di una serie di incassi"},{"K":"RCUR","V":"RCUR – Per una serie di incassi"},{"K":"FNAL","V":"FNAL – Ultima di una serie di incassi"},{"K":"OOFF","V":"OOFF – Singola non ripetuta"}]};
    var filter = null;
    var Sections = {
        SEARCH: "#SEARCH",
        RESULT: "#RESULT",
        ESITO_DETAIL: "#ESITO_DETAIL",
        ESITO_DETAIL_RO: "#ESITO_DETAIL_RO",
        ESITO_GD_SOTTODISTINTE: "#ESITO_GD_SOTTODISTINTE"
    };

    var viewModel = function (pagingFilter) {
        var self = this;

        self.Piazzatura = ko.observableArray();
        self.AziendaSelezionata = ko.observable(null);
        self.BancaSelezionata = ko.observable(null);
        self.ContoSelezionato = ko.observable(null);
        self.CurrentSection = ko.observable(Sections.SEARCH);
        self.Esito = ko.observable(new App.Sdd.EsitoBo(null));
        self.Sottodistinta = ko.observable(new App.Sdd.SottoDistintaEsitoBo(null));
        self.ListStatiEsitiRo = ko.observableArray();

        self.Details = new App.Core.PagedObservableArray({
            allData: [new App.Sdd.EsitoDetailBo(null)]
        });

        self.DetailsRo = new App.Core.PagedArrayAsync({
            self: self,
            searchUrl: '/anchise2.web/Sdd/SearchEsiti/DetailRo',
            pagingFilter: new App.Sdd.FilterEsito(),
            pageSizeDropDown: [10, 20, 50, 100]
        });

        self.TipoIncasso = ko.observableArray(ESITO_SDD.TIPO_INCASSO);
        self.SequenzaIncasso = ko.observableArray(ESITO_SDD.SEQUENZA_INCASSO);
        self.StatoIncasso = ko.observableArray(ESITO_SDD.STATO_INCASSO);

        self.Search = function() {
            self.List.Validation.removeAll();
            self.List.PagingFilter.SortColumn("7");
            self.List.Search();
        };

        var exportItems = [
            {
                type: "Pdf",
                url: '/anchise2.web/Stampe/StampeLista/StampaListaEsitiSdd',
                fieldName: "json"
            },
            {
                type: "Excel",
                url: '/anchise2.web/Stampe/StampeLista/StampaListaEsitiSddXls',
                fieldName: "json"
            }
        ];
        self.List = new App.Core.PagedArrayAsync({
            self: self,
            searchUrl: '/anchise2.web/Sdd/SearchEsiti/Search',
            searchCallback: function() {
                if (self.List.Validation().length === 0) {
                    location.hash = Sections.RESULT;
                }
                Export.print("export-lista-esiti", exportItems, ko.mapping.toJS(self.List.PagingFilter));
            },
            pagingFilter: new App.Sdd.FilterEsito(),
            pageSizeDropDown: [10, 20, 50, 100]
        });

        self.SottoDistinte = new App.Core.PagedArrayAsync({
            self: self,
            searchUrl: '/anchise2.web/Sdd/SearchEsiti/ListSottoDistinte',
            searchCallback: function() {
                if (self.SottoDistinte.Validation().length === 0) {
                    location.hash = Sections.ESITO_GD_SOTTODISTINTE;
                }
            },
            pagingFilter: new App.Sdd.FilterEsito(),
            pageSizeDropDown: [10, 20, 50, 100]
        });

        var _filterPiazzatureAziende = function () {
            var CodiceAbi = self.BancaSelezionata() ? self.BancaSelezionata().CodiceAbi : null;
            var idRapporto = self.ContoSelezionato() ? self.ContoSelezionato().IdRapporto : null;

            return ko.utils.arrayFilter(PIAZZATURA, function (p) {
                var current = new App.Common.PiazzaturaBo(p);

                if(idRapporto && CodiceAbi) {
                    return (current.Identifier.IdRapporto() == idRapporto && current.Rapporto.CodiceAbi() == CodiceAbi);
                } else if(CodiceAbi) {
                    return (current.Rapporto.CodiceAbi() == CodiceAbi);
                } else if(idRapporto) {
                    return (current.Identifier.IdRapporto() == idRapporto);
                }

                return true;
            });
        };

        var _filterPiazzatureBanche = function () {
            var idAzienda = self.AziendaSelezionata() ? self.AziendaSelezionata().Id : null;
            idAzienda = typeof idAzienda == "function" ? idAzienda() : idAzienda;
            var idRapporto = self.ContoSelezionato() ? self.ContoSelezionato().IdRapporto : null;

            return ko.utils.arrayFilter(PIAZZATURA, function (p) {
                var current = new App.Common.PiazzaturaBo(p);

                if(idRapporto && idAzienda) {
                    return (idAzienda !== null && current.Azienda.Id() === idAzienda && current.Identifier.IdRapporto() == idRapporto);
                } else if(idRapporto) {
                    return (current.Identifier.IdRapporto() == idRapporto);
                }
                if(idAzienda)
                    return (idAzienda !== null && current.Azienda.Id() === idAzienda);
                return true;
            });
        };

        var _filterPiazzatureBancheAzienda = function () {
            var idAzienda = self.AziendaSelezionata() ? self.AziendaSelezionata().Id : null;
            idAzienda = typeof idAzienda == "function" ? idAzienda() : idAzienda;

            return ko.utils.arrayFilter(PIAZZATURA, function (p) {
                var current = new App.Common.PiazzaturaBo(p);

                if(idAzienda)
                    return (idAzienda !== null && current.Azienda.Id() === idAzienda);
                return true;
            });
        };

        var _filterPiazzatureConti = function () {
            var idAzienda = self.AziendaSelezionata() ? self.AziendaSelezionata().Id : null;
            idAzienda = typeof idAzienda == "function" ? idAzienda() : idAzienda;
            var CodiceAbi = self.BancaSelezionata() ? self.BancaSelezionata().CodiceAbi : null;

            return ko.utils.arrayFilter(PIAZZATURA, function (p) {
                var current = new App.Common.PiazzaturaBo(p);
                if(CodiceAbi && idAzienda) {
                    return (idAzienda !== null && current.Azienda.Id() === idAzienda && current.Rapporto.CodiceAbi() == CodiceAbi);
                } else if(CodiceAbi) {
                    return (current.Rapporto.CodiceAbi() == CodiceAbi);
                }

                return (idAzienda !== null && current.Azienda.Id() === idAzienda);
            });
        };

        self.AziendaSelezionata.subscribe(function(newValue) {

            self.List.PagingFilter.IdAzienda.removeAll();

            if (newValue) {
                var Id = typeof newValue.Id == "function" ? newValue.Id() : newValue.Id;
                var cuc = typeof newValue.Id == "function" ? newValue.CodiceCuc() : newValue.CodiceCuc;
                self.List.PagingFilter.IdAzienda.push(Id);
                if((self.ContoSelezionato() && self.ContoSelezionato().Azienda.CodiceCuc != cuc) || !self.ContoSelezionato()) {
                    self.ContoSelezionato(undefined);
                    self.CalcolaConti();
                }
                var bancheTemp = App.Common.GetBancheFromPiazzatura(_filterPiazzatureBanche());
                if(self.BancaSelezionata()) {
                    var result = bancheTemp.filter(function(obj) {
                        return obj.CodiceAbi == self.BancaSelezionata().CodiceAbi;
                    });
                    if((result.length == 1 && result[0].CodiceAbi != self.BancaSelezionata().CodiceAbi) || bancheTemp.length > 1)
                        self.CalcolaBanche();
                } else {
                    self.CalcolaBanche();
                }
            } else {
                if(self.AziendeTotali.length > 1) {
                    self.BancaSelezionata(null);
                    self.ContoSelezionato(null);
                    self.CalcolaAziende();
                    self.CalcolaBanche();
                    self.CalcolaConti();
                } else {
                    self.CalcolaBanche();
                    self.CalcolaConti();
                }
            }
        });

        self.BancaSelezionata.subscribe(function(newValue) {
            self.List.PagingFilter.CodiceAbi = null;

            if (newValue) {
                self.List.PagingFilter.CodiceAbi = newValue.CodiceAbi;
                if(!self.AziendaSelezionata() || !self.ContoSelezionato() || self.ContoSelezionato().Banca.CodiceAbi != newValue.CodiceAbi)
                    self.CalcolaConti();
                if(self.ContoSelezionato())
                    self.CalcolaConti(self.ContoSelezionato());
            } else {
                self.ContoSelezionato(null);
                self.CalcolaBanche();
                self.CalcolaConti();
            }
        });

        self.ContoSelezionato.subscribe(function(newValue) {
            self.List.PagingFilter.IdRapporto.removeAll();

            if (newValue) {
                self.List.PagingFilter.IdRapporto.push(newValue.IdRapporto);
                if(!self.AziendaSelezionata())
                    self.CalcolaAziende();
                else {
                    if(self.AziendaSelezionata().CodiceCuc() != newValue.Azienda.CodiceCuc)
                        self.CalcolaAziende(newValue.Azienda);
                }
                if((!self.BancaSelezionata() && self.AziendaSelezionata()))
                    self.CalcolaBanche();
                var conti = self.Conti();
                for(i = conti.length-1; i>=0; i--) {
                    if(conti[i].IdRapporto != newValue.IdRapporto && conti[i].Azienda.PartitaIva != self.AziendaSelezionata().PartitaIva())
                        conti.splice(i,1);
                }
                self.Conti(conti);
            }
        });

        self.AvanzateBodyVisible = ko.observable(false);
        self.AvanzateCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.AvanzateBodyVisible));
        self.ToggleAdvancedFilter = function() {
            self.AvanzateBodyVisible(!self.AvanzateBodyVisible());
        };

        self.Banche = ko.observableArray();
        self.CalcolaBanche = function () {
            var idAzienda = self.List.PagingFilter.IdAzienda() || null;

            var bancheTemp = App.Common.GetBancheFromPiazzatura(_filterPiazzatureBancheAzienda());

            for(var i = 0; i < bancheTemp.length; i++) {
                bancheTemp[i].Descrizione = bancheTemp[i].CodiceAbi + " - " + bancheTemp[i].Descrizione;
            }
            self.Banche(bancheTemp);

            if(bancheTemp.length == 1) {
                self.BancaSelezionata(bancheTemp[0]);
            } else if(self.ContoSelezionato()) {
                var toSelect = self.Banche().filter(function(obj) {
                    return obj.CodiceAbi == self.ContoSelezionato().Banca.CodiceAbi;
                });
                if(toSelect.length == 1)
                    self.BancaSelezionata(toSelect[0]);
            }
        };

        self.Aziende = ko.observableArray();
        self.AziendeTotali = [];
        self.CalcolaAziende = function (azienda) {
            var aziende = App.Common.GetAziendeFromPiazzatura(_filterPiazzatureAziende()); //self.Piazzatura()
            self.Aziende(aziende);

            if(aziende.length == 1) {
                self.AziendaSelezionata(aziende[0]);
            } else if(azienda)
                self.AziendaSelezionata(azienda);

            //**la combo aziende deve restare sempre popolata con tutte le aziende**
            var aziendeDaAggiungere = self.AziendeTotali.filter(function(obj) {
                for(var i = 0; i < aziende.length; i++) {
                    if(obj.PartitaIva() == aziende[i].PartitaIva())
                        return false;
                }
                return true;
            });
            aziendeDaAggiungere.forEach(function(element) {
                var temp = self.Aziende();
                temp.push(element);
                self.Aziende(temp);
            });
            //**end**
        };

        var _getContiFromPiazzatura = function (piazzatura) {
            piazzatura = piazzatura || [];

            return ko.utils.arrayGetDistinctValuesBy(ko.utils.arrayMap(piazzatura, function (p) {
                var current = new App.Common.PiazzaturaBo(p);
                var conto = {
                    IdRapporto: current.Identifier.IdRapporto,
                    CodiceCab: current.Rapporto.CodiceCab,
                    NumeroRapporto: current.Rapporto.NumeroRapporto,
                    Conto: current.Rapporto.CodiceCab() + " - " + current.Rapporto.NumeroRapporto(),
                    Banca: {
                        CodiceAbi: current.Rapporto.CodiceAbi,
                        DescrizioneBanca: current.Rapporto.DescrizioneBanca,
                        Descrizione: current.Rapporto.CodiceAbi() + " - " + current.Rapporto.DescrizioneBanca()
                    },
                    Azienda: current.Azienda
                };

                return ko.toJS(conto);
            }), 'IdRapporto');
        };

        self.Conti = ko.observableArray();
        self.CalcolaConti = function (conto) {
            var idAzienda = self.List.PagingFilter.IdAzienda() || null;

            var conti =  _getContiFromPiazzatura((idAzienda.length > 0) || (self.BancaSelezionata()) ? _filterPiazzatureConti() : self.Piazzatura());

            self.Conti(conti);

            if(conti.length == 1) {
                self.ContoSelezionato(conti[0]);
            } else if(conto) {
                var result = conti.filter(function(obj) {
                    return obj.IdRapporto == conto.IdRapporto;
                });
                if(result.length == 1)
                    self.ContoSelezionato(result[0]);
            }
        };

        // Initialize
        self.Init = function () {
            location.hash = Sections.SEARCH;

            $('#e810ba36320b4e1faa865a157c1e58fa_4').load('/anchise2.web/Widget/LinkRapidi');

            self.Piazzatura(PIAZZATURA);

            self.CalcolaAziende();
            self.AziendeTotali = self.Aziende();
            self.CalcolaBanche();
            self.CalcolaConti();

            var statoScartata = self.StatoIncasso().filter(function(stato) {
                return stato.K == "RJCT,TMTB";
            });

            self.List.PagingFilter.StatoIncasso(statoScartata[0].K);
        };
        self.Init();
    };

    var rootViewModel = new viewModel(filter);

    $(document).ready(function () {
        ko.applyBindings(rootViewModel, document.getElementById('e810ba36320b4e1faa865a157c1e58fa_3'));

        // Route
        var sammy = Sammy('#e810ba36320b4e1faa865a157c1e58fa_5', function() {
            this.get(Sections.SEARCH, function () {
                rootViewModel.CurrentSection(Sections.SEARCH);
            });

            this.get(Sections.RESULT, function() {
                rootViewModel.CurrentSection(Sections.RESULT);
            });

            this.get(Sections.ESITO_DETAIL, function() {
                rootViewModel.CurrentSection(Sections.ESITO_DETAIL);
            });

            this.get(Sections.ESITO_DETAIL_RO, function() {
                rootViewModel.CurrentSection(Sections.ESITO_DETAIL_RO);
            });

            this.get(Sections.ESITO_GD_SOTTODISTINTE, function() {
                rootViewModel.CurrentSection(Sections.ESITO_GD_SOTTODISTINTE);
            });
        });

        sammy.run();
    });

</script>



                        </div>