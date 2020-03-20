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



<script type="text/html" id="a93cc8455a504e7ba1f31eeb2da7131c_10">
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
        template: { element: 'a93cc8455a504e7ba1f31eeb2da7131c_10' },
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






<div id="a93cc8455a504e7ba1f31eeb2da7131c_11">
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
            $('.hide', $('#a93cc8455a504e7ba1f31eeb2da7131c_11')).removeClass('hide');
        };
    };

    var uiHelper = new UiViewModel();

    $(document).ready(function () {
        ko.applyBindings(uiHelper, document.getElementById('a93cc8455a504e7ba1f31eeb2da7131c_11'));

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







<div id="a93cc8455a504e7ba1f31eeb2da7131c_5" data-bind="visible: IsVisible">
    <div data-bind="component: { name: 'sdd-dataentry', params: SddParams }">
    <!-- SUCCESS MESSAGES -->
    <div data-bind="visible: SuccessMessagesVisible" style="display: none;">
        <feedback-messages params="Component: SuccessComponent, Buttons: SuccessButtons, CssClass: 'alert', Message: SuccessMessage, PageTitle: $component.FeedbackTitle, TitleCssClass: 'incassi'">
    <div class="riquadro">
        <div data-bind="visible: PageTitle != null">
            <div class="flag incassi" data-bind="css: TitleCssClass">&nbsp;</div>
            <h1 data-bind="text: PageTitle">Incasso Sdd: conferma inserimento</h1>
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
                                    <label data-bind="text: $component.LocalInstrument(LocalInstrument)">CORE - Ordinario</label>
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
<!-- /ko -->
            <!-- /ko -->
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-right">
            <!-- ko foreach: Buttons -->
            <input type="button" class="btn btn-primary" data-bind="value: Label, singleClick: Callback" value="Nuovo Incasso Sdd">
            
            <input type="button" class="btn btn-primary" data-bind="value: Label, singleClick: Callback" value="Nuovo Incasso Sdd con i dati precedenti">
            
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
                <validation-messages params="Validation: $component.Validation">
    <div data-bind="visible: ValidationSectionVisible" style="">
        <div class="messagePanel error" style="display: block">
            <h3 class="titleSection">
                Errori
            </h3>
            <ul data-bind="foreach: Validation">
                <li>
                    <b data-bind="html: $component.getMessageError($data)">Selezionare il rapporto di accredito</b>
                </li>
            
                <li>
                    <b data-bind="html: $component.getMessageError($data)">Identificativo creditore obbligatorio</b>
                </li>
            
                <li>
                    <b data-bind="html: $component.getMessageError($data)">Debitore obbligatorio</b>
                </li>
            
                <li>
                    <b data-bind="html: $component.getMessageError($data)">Codice mandato obbligatorio</b>
                </li>
            
                <li>
                    <b data-bind="html: $component.getMessageError($data)">Data sottoscrizione non valida</b>
                </li>
            
                <li>
                    <b data-bind="html: $component.getMessageError($data)">Importo non valido</b>
                </li>
            
                <li>
                    <b data-bind="html: $component.getMessageError($data)">Sequenza incasso obbligatoria</b>
                </li>
            
                <li>
                    <b data-bind="html: $component.getMessageError($data)">Codice univoco obbligatorio</b>
                </li>
            
                <li>
                    <b data-bind="html: $component.getMessageError($data)">Data scadenza obbligatoria</b>
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
                        <selettore-rapporti params="Ordinante: Ordinante, ArrowVisible: $component.DispoIsNotInDistinta, TestoSelettore: 'Seleziona il rapporto di accredito della disposizione'">
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
                        <strong data-bind="text: $component.TestoSelettore">Seleziona il rapporto di accredito della disposizione</strong>
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
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000003827</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">33980</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT26K0503433980000000003827</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">CONDOMINIO ACLI</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000001521</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">33920</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT03G0503433920000000001521</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">CONDOMINIO AMENDOLA 2</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000004099</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">33980</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT05W0503433980000000004099</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">CONDOMINIO BRAMBILLA</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000006780</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">52990</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT70A0503452990000000006780</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">CONDOMINIO C.A. CRESPI RAPP.TO</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000002328</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">33920</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT79Q0503433920000000002328</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">CONDOMINIO CASA A1</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000005354</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">33980</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT46Q0503433980000000005354</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">CONDOMINIO DELLA COSTA PRIMO</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000013652</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">33980</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT54M0503433980000000013652</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">CONDOMINIO DON ATTILIO CRESPI </td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000002375</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">33920</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT10Z0503433920000000002375</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">CONDOMINIO EDILCOOP DUE CASA A</td>
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
        
            <a class="paginate_button" data-bind="text: $data, click: $component.PagedList.GoToPage, css: $component.GetCurrentCss($data)">4</a>
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
                                    <select class="form-control" data-bind="options: $component.Rapporti, optionsText: 'CodiceIban', optionsCaption: 'opzionale', optionsValue: function(rapporto){return rapporto.Identifier().Id}, value: ChargeIban, enable: $component.IbanCommissioniEnable" disabled=""><option value="">opzionale</option></select>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Identificativo creditore</label>
                                    <input type="text" class="form-control" data-bind="value: CreditorIdentification">
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
                            <div data-bind="css: $component.UltimateCreditorCollapseCss" class="icon-replace icon-collapse active"></div>
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.UltimateCreditorBodyVisible, enableChildren: !IsUltimateCreditorSottodistinta()" style="display: block;">
                        <div class="row" style="margin-top: 10px">
                            <div class="col-xs-12">
                                <p>Sezione da compilare soltanto se il creditore effettivo è diverso dall'ordinante</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Ragione Sociale</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltimateCreditor.Denominazione">
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                                    <label class="control-label"></label>
                                    <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.UltimateCreditorAnagraficaSearch">&nbsp;</span>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Codice</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltimateCreditor.Codice">
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

                        <indirizzo-dataentry params="Indirizzo: UltimateCreditor.Indirizzo, enable: !IsUltimateCreditorSottodistinta()">
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
                                    <input type="text" class="form-control" data-bind="value: Debtor.Denominazione">
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0">
                                    <label class="control-label"></label>
                                    <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.DebtorAnagraficaSearch">&nbsp;</span>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Codice</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Debtor.Codice">
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

                        <indirizzo-dataentry params="Indirizzo: Debtor.Indirizzo">
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
                                    <input type="text" class="form-control" data-bind="uppercaseText: Debtor.Iban">
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">BIC</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Debtor.Bic">
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
                <!-- AGGIUNTIVI DEBTOR -->
                <div class="section">
                    <div class="row link" data-bind="click: $component.DatiAggiuntiviDebtorCollapse">
                        <h3 class="titleSection">Dati Aggiuntivi Debitore</h3>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.DatiAggiuntiviDebtorCollapseCss" class="icon-replace icon-collapse active"></div>
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.DatiAggiuntiviDebtorBodyVisible" style="display: block;">
                        <datiaggiuntivi-dataentry params="DatiAggiuntivi: Debtor.DatiAggiuntivi">
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
                <!-- ULTIMATE DEBTOR -->
                <div class="section">
                    <div class="row link" data-bind="click: $component.UltimateDebtorCollapse">
                        <h3 class="titleSection">Dati Debitore Effettivo</h3>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.UltimateDebtorCollapseCss" class="icon-replace icon-collapse active"></div>
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.UltimateDebtorBodyVisible" style="display: block;">
                        <div class="row" style="margin-top: 10px">
                            <div class="col-xs-12">
                                <p>Sezione da compilare soltanto se il debitore effettivo è diverso dal debitore</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Ragione Sociale</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltimateDebtor.Denominazione">
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                                    <label class="control-label">&nbsp;</label>
                                    <span style="display: block" class="icon-replace icon-search active link" data-bind="singleClick: $component.UltimateDebtorAnagraficaSearch">&nbsp;</span>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Codice</label>
                                    <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: UltimateDebtor.Codice">
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

                        <indirizzo-dataentry params="Indirizzo: UltimateDebtor.Indirizzo">
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

                        <datiaggiuntivi-dataentry params="DatiAggiuntivi: UltimateDebtor.DatiAggiuntivi">
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
                                    <input type="text" class="form-control no-placeholder-italic" data-bind="value: MandateRelatedInformation.MandateIdentification">
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Data sottoscrizione</label>
                                    <date-picker params="Date: MandateRelatedInformation.DateOfSignature">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_1">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
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
                            <div data-bind="css: $component.DatiAggiuntiviMandateCollapseCss" class="icon-replace icon-collapse active"></div>
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.DatiAggiuntiviMandateBodyVisible" style="display: block;">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12">
                                <label class="control-label">Firma digitale</label>
                                <input type="text" class="form-control no-placeholder-italic" data-bind="value: MandateRelatedInformation.ElectronicSignature, enable: false" disabled="">
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <label class="control-label">Frequenza incassi</label>
                                <select class="form-control" data-bind="options: $component.FrequenzeIncasso, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: MandateRelatedInformation.Frequency"><option value="">opzionale</option><option value="ADHO">ADHO - Su richiesta o quando necessario</option><option value="DAIL">DAIL - Giornaliero</option><option value="INDA">INDA - diverse volte al giorno</option><option value="MIAN">MIAN - Smestrale o due volte all'anno</option><option value="MNTH">MNTH - Mensile o una volta al mese</option><option value="QURT">QURT - Trimestrale o quattro volte all'anno</option><option value="WEEK">WEEK - Settimanale</option><option value="YEAR">YEAR - Annuale (una volta all'anno)</option></select>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <label class="control-label">Data prima richiesta</label>
                                <date-picker params="Date: MandateRelatedInformation.FirstCollectionDate">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_2">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <label class="control-label">Data ultima richiesta</label>
                                <date-picker params="Date: MandateRelatedInformation.FinalCollectionDate">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_3">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
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
                            <div data-bind="css: $component.AmedmentInformationCollapseCss" class="icon-replace icon-collapse active"></div>
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.AmedmentInformationBodyVisible" style="display: block;">
                        <amendmentinformation-dataentry params="AmendmentInformation: MandateRelatedInformation, IdentifierPiazzatura: Ordinante.Identifier">
    <div>
        <div class="row">
            <div class="col-sm-4">
                <label class="control-label">Modifica mandato originario</label>
                <select data-bind="options: IsEnableArray, optionsText: 'Descrizione', value: AmendmentInformation.AmendmentIndicator, optionsValue: 'Value'"><option value="">Si</option><option value="">No</option></select>
            </div>
        </div>
        <div data-bind="with: AmendmentInformation">
            <div class="row">
                <div class="col-sm-4">
                    <label class="control-label">Codice mandato originario</label>
                    <input type="text" class="form-control no-placeholder-italic" data-bind="enable: AmendmentIndicator(), value: AmendmentInformationDetails.OriginalMandateIdentification" disabled="">
                </div>
                <div class="col-sm-4">
                    <label class="control-label">Data ultimo incasso</label>
                    <date-picker params="Date: AmendmentInformationDetails.OriginalFinalCollectionDate, enable: AmendmentIndicator() ? true : 'false'">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" disabled="" id="ko_unique_5">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                </div>
                <div class="col-sm-4">
                    <label class="control-label">Frequenza originaria</label>
                    <select class="form-control" data-bind="enable: AmendmentIndicator(), options: $component.FrequenzeIncasso, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: AmendmentInformationDetails.OriginalFrequency" disabled=""><option value="">opzionale</option><option value="ADHO">ADHO - Su richiesta o quando necessario</option><option value="DAIL">DAIL - Giornaliero</option><option value="INDA">INDA - diverse volte al giorno</option><option value="MIAN">MIAN - Smestrale o due volte all'anno</option><option value="MNTH">MNTH - Mensile o una volta al mese</option><option value="QURT">QURT - Trimestrale o quattro volte all'anno</option><option value="WEEK">WEEK - Settimanale</option><option value="YEAR">YEAR - Annuale (una volta all'anno)</option></select>
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
                                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: AmendmentIndicator(), value: AmendmentInformationDetails.OriginalCreditor.Denominazione" disabled="">
                            </div>
                            <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                                <label class="control-label">&nbsp;</label>
                                <span style="display: block" class="icon-replace icon-search active link" data-bind="enable: AmendmentIndicator(), singleClick: $component.OriginalCreditorAnagraficaSearch">&nbsp;</span>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <label class="control-label">Codice</label>
                                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: AmendmentIndicator(), value: AmendmentInformationDetails.OriginalCreditor.Codice" disabled="">
                            </div>
                        </div>
                    </div>

                    <div data-bind="component: { name: 'anagrafica-search', params: $component.OriginalCreditorAnagraficaModel }">
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

                    <indirizzo-dataentry params="Indirizzo: AmendmentInformationDetails.OriginalCreditor.Indirizzo, enable: AmendmentIndicator() ? true : 'false'">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label class="control-label">Tipo Indirizzo</label>
                <select class="form-control" data-bind="enable: TipoIndirizzoEnable, options: TipologieIndirizzo, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: Indirizzo.TipologiaIndirizzo" disabled=""><option value="">opzionale</option><option value="PBOX">Indirizzo della casella postale</option><option value="DLVY">Indirizzo di consegna</option><option value="MLTO">Indirizzo di corrispondenza postale</option><option value="BIZZ">Indirizzo di domicilio</option><option value="HOME">Indirizzo di residenza</option><option value="ADDR">Indirizzo postale completo</option></select>
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
                            <div class="col-sm-3 col-xs-12" style="padding:0">
                                <label class="control-label">Tipo Codice</label>
                                <select class="form-control" data-bind="enable:AmendmentIndicator(), options: $component.TipoCodice, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: AmendmentInformationDetails.OriginalCreditor.DatiAggiuntivi.TipoCodice" disabled=""><option value="">opzionale</option><option value="SEPA">Codice Interno</option><option value="ARNU">Alien Registration Number</option><option value="CUST">Customer Identification Number</option><option value="DRLC">Drivers License Number</option><option value="EMPL">Employee Identification Number</option><option value="NIDN">National Identity Number</option><option value="CCPT">Passport Number</option><option value="SOSE">Social Security Number</option><option value="TXID">Tax Identification Number</option></select>
                            </div>

                            <div class="col-sm-1 col-xs-12" style="padding-right: 0"></div>
                            <div class="col-sm-4 col-xs-12" style="padding-right: 0">
                                <label class="control-label">Codice</label>
                                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: AmendmentIndicator(), uppercaseText: AmendmentInformationDetails.OriginalCreditor.DatiAggiuntivi.CodiceSoggetto" disabled="">
                            </div>

                            <div class="col-sm-1 col-xs-12" style="padding-right: 0"></div>
                            <div class="col-sm-3 col-xs-12" style="padding: 0">
                                <label class="control-label">Descrizione Codice</label>
                                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: AmendmentIndicator(), value: AmendmentInformationDetails.OriginalCreditor.DatiAggiuntivi.DescrizioneCodice" disabled="">
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
                                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: AmendmentIndicator(), value: AmendmentInformationDetails.OriginalDebtor.Denominazione" disabled="">
                            </div>
                            <div class="col-sm-1 col-xs-12" style="padding-right: 0">
                                <label class="control-label">&nbsp;</label>
                                <span style="display: block" class="icon-replace icon-search active link" data-bind="singleClick: $component.OriginalDebtorAnagraficaSearch">&nbsp;</span>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <label class="control-label">Codice</label>
                                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: AmendmentIndicator(), value: AmendmentInformationDetails.OriginalDebtor.Codice" disabled="">
                            </div>
                        </div>
                    </div>

                    <div data-bind="component: { name: 'anagrafica-search', params: $component.OriginalDebtorAnagraficaModel }">
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

                    <indirizzo-dataentry params="Indirizzo: AmendmentInformationDetails.OriginalDebtor.Indirizzo, enable: AmendmentIndicator() ? true : 'false'">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-sm-3 col-xs-12" style="padding: 0">
                <label class="control-label">Tipo Indirizzo</label>
                <select class="form-control" data-bind="enable: TipoIndirizzoEnable, options: TipologieIndirizzo, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: Indirizzo.TipologiaIndirizzo" disabled=""><option value="">opzionale</option><option value="PBOX">Indirizzo della casella postale</option><option value="DLVY">Indirizzo di consegna</option><option value="MLTO">Indirizzo di corrispondenza postale</option><option value="BIZZ">Indirizzo di domicilio</option><option value="HOME">Indirizzo di residenza</option><option value="ADDR">Indirizzo postale completo</option></select>
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
                            <div class="col-sm-3 col-xs-12" style="padding-right: 0; padding-left: 20px">
                                <label class="control-label" style="margin-left: -20px">IBAN</label>
                                <div class="radio" style="font-weight: normal; margin-top: 0">
                                    <input type="radio" name="conto" value="contoIban" data-bind="enable:AmendmentIndicator(), checked: $component.CurrentConto" disabled="">
                                    <input type="text" class="form-control" data-bind="enable: ($component.ContoIbanActive() &amp;&amp; AmendmentIndicator()), uppercaseText: AmendmentInformationDetails.OriginalDebtor.Iban" disabled="">
                                </div>
                            </div>
                            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                            <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                                <label class="control-label" style="margin-left: -20px">Identificativo conto</label>
                                <div class="radio" style="font-weight: normal; margin-top: 0">
                                    <input type="radio" name="conto" value="contoIdentificativo" data-bind="enable: AmendmentIndicator(), checked: $component.CurrentConto" disabled="">
                                    <input type="text" placeholder="opzionale" class="form-control no-placeholder-italic" data-bind="enable: ($component.ContoIdentificativoActive() &amp;&amp; AmendmentIndicator()), value: AmendmentInformationDetails.OriginalDebtor.AccountIdentifier" disabled="">
                                </div>
                            </div>
                            <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                            <div class="col-sm-3 col-xs-12" style="padding: 0">
                                <label class="control-label">BIC</label>
                                <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="enable: ($component.BicActive() &amp;&amp; AmendmentIndicator()), value: AmendmentInformationDetails.OriginalDebtor.Bic" disabled="">
                            </div>
                        </div>
                    </div>

                    <datiaggiuntivi-dataentry params="DatiAggiuntivi: AmendmentInformationDetails.OriginalDebtor.DatiAggiuntivi, enable: AmendmentIndicator() ? true : 'false'">
    <div class="row">
        <div class="col-xs-12">
            <div class="col-xs-3" style="padding:0">
                <div class="col-sm-6 col-xs-12" style="padding-left: 0">
                    <label class="control-label">Tipo Soggetto</label>
                    <select class="form-control" data-bind="enable: enable() != 'false', options: TipologieSoggetto, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: DatiAggiuntivi.TipoSoggetto" disabled=""><option value="">opzionale</option><option value="PF">Persona Fisica</option><option value="PG">Persona Giuridica</option></select>
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
        </div>
    </div>
</amendmentinformation-dataentry>
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
                                    <input type="text" class="form-control" data-bind="numericTextSeparator: Importo">
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0">
                                    <label style="margin-top: 35px; font-weight:100">&nbsp;EUR</label>
                                    <input type="text" class="form-control" disabled="disabled" data-bind="value: Divisa, visible: false" style="display: none;">
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Codice univoco</label>
                                    <input type="text" class="form-control" data-bind="value: EndToEndIdentification">
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Data scadenza</label>
                                    <date-picker params="Date: RequestedCollectionDate, enable: $component.DisableDataScadenza">
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
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">
                                        Tipo incasso
                                    </label>
                                    <select class="form-control" data-bind="options: $component.TipoIncasso, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: LocalInstrument, enable: $component.DispoIsNotInDistinta"><option value="">Seleziona</option><option value="B2B">B2B - Veloce</option><option value="CORE">CORE - Ordinario</option></select>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Sequenza incasso</label>
                                    <select class="form-control" data-bind="options: $component.SequenzeIncasso, optionsCaption: 'Seleziona', optionsText: 'V', optionsValue: 'K', value: SequenceType, enable: $component.DispoIsNotInDistinta"><option value="">Seleziona</option><option value="FRST">FRST - Prima di una serie di incassi</option><option value="RCUR">RCUR – Per una serie di incassi</option><option value="FNAL">FNAL – Ultima di una serie di incassi</option><option value="OOFF">OOFF – Singola non ripetuta</option></select>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">
                                        Causale codificata ISO
                                    </label>
                                    <select class="form-control" data-bind="options: $component.CausaleIncasso, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: Purpose"><option value="">opzionale</option><option value="ACCT">ACCT - Account management</option><option value="ADMG">ADMG - Administrative Management</option><option value="ADVA">ADVA - Advance payment</option><option value="AEMP">AEMP - Active Employment Policy</option><option value="AGRT">AGRT - Agricultural transfer</option><option value="AIRB">AIRB - Air</option><option value="ALMY">ALMY - Alimony payment</option><option value="ANNI">ANNI - Annuity</option><option value="ANTS">ANTS - Anesthesia services</option><option value="AREN">AREN - Accounts  receivables  entry</option><option value="BECH">BECH - Child benefit</option><option value="BENE">BENE - Unemployment disab. benefit</option><option value="BEXP">BEXP - Business expenses</option><option value="BLDM">BLDM - Building Maintenance</option><option value="BOCE">BOCE - Back office conversion entry</option><option value="BONU">BONU - Bonus payment.</option><option value="BUSB">BUSB - Bus</option><option value="CASH">CASH - Cash management transfer</option><option value="CBFF">CBFF - Capital building</option><option value="CBTV">CBTV - Cable t v bill</option><option value="CCRD">CCRD - Credit card payment</option><option value="CDBL">CDBL - Credit card bill</option><option value="CDCB">CDCB - Card paym.t with cash back</option><option value="CDCD">CDCD - Cash disbursement</option><option value="CDCS">CDCS - Cash Disbursem. with Surcharging</option><option value="CDOC">CDOC - Original credit</option><option value="CDQC">CDQC - Quasi cash</option><option value="CFEE">CFEE - Cancellation fee</option><option value="CHAR">CHAR - Charity payment</option><option value="CLPR">CLPR - Car loan principal repayment</option><option value="CMDT">CMDT - Commodity transfer</option><option value="COLL">COLL - Collection payment</option><option value="COMC">COMC - Commercial payment</option><option value="COMM">COMM - Commission</option><option value="COMT">COMT - Consum. third party paym.</option><option value="COST">COST - Costs</option><option value="CPYR">CPYR - Copyright</option><option value="CSDB">CSDB - Cash disbursement</option><option value="CSLP">CSLP - Cpy social loan payment bank</option><option value="CVCF">CVCF - Convalescent care facility</option><option value="DBTC">DBTC - Debit collection payment</option><option value="DCRD">DCRD - Debit  card  payment</option><option value="DEPT">DEPT - Deposit</option><option value="DERI">DERI - Derivatives</option><option value="DIVD">DIVD - Dividend</option><option value="DMEQ">DMEQ - Durable medicale equipment</option><option value="DNTS">DNTS - Dental services</option><option value="ELEC">ELEC - Electricity bill</option><option value="ENRG">ENRG - Energies</option><option value="ESTX">ESTX - Estate tax</option><option value="ETUP">ETUP - E-Purse Top Up</option><option value="FAND">FAND - Financial Aid Natural Disaster</option><option value="FERB">FERB - Ferry</option><option value="FREX">FREX - Foreign exchange</option><option value="GASB">GASB - Gas bill</option><option value="GDDS">GDDS - Purchase sale goods</option><option value="GDSV">GDSV - Purchase sale goods/servic.</option><option value="GFRP">GFRP - Guarantee Fund Rights Payment</option><option value="GOVI">GOVI - Government insurance</option><option value="GOVT">GOVT - Government payment</option><option value="GSCB">GSCB - Purchase sale G./S. cash back</option><option value="GVEA">GVEA - Austrian gov. employ cat. a</option><option value="GVEB">GVEB - Austrian gov. employ cat. b</option><option value="GVEC">GVEC - Austrian gov. employ cat. c</option><option value="GVED">GVED - Austrian gov. employ cat. d</option><option value="GWLT">GWLT - Goverment War Legislation Trans.</option><option value="HEDG">HEDG - Hedging</option><option value="HLRP">HLRP - Housing loan repayment</option><option value="HLTC">HLTC - Home health care</option><option value="HLTI">HLTI - Health insurance</option><option value="HSPC">HSPC - Hospital care</option><option value="HSTX">HSTX - Housing tax</option><option value="ICCP">ICCP - Irrevocable credit card paym</option><option value="ICRF">ICRF - Intermediate care facility</option><option value="IDCP">IDCP - Irrevocable debit card paym.</option><option value="IHRP">IHRP - Instalment hire purchase agr</option><option value="INPC">INPC - Insurance premium car</option><option value="INSM">INSM - Installment</option><option value="INSU">INSU - Insurance premium</option><option value="INTC">INTC - Intra company payment</option><option value="INTE">INTE - Interest</option><option value="INTX">INTX - Income tax</option><option value="LBRI">LBRI - Labor insurance</option><option value="LICF">LICF - License fee</option><option value="LIFI">LIFI - Life insurance</option><option value="LIMA">LIMA - Liquidity management</option><option value="LOAN">LOAN - Loan</option><option value="LOAR">LOAR - Loan repayment</option><option value="LTCF">LTCF - Long term care facility</option><option value="MDCS">MDCS - Medical services</option><option value="MSVC">MSVC - Multiple service types</option><option value="MTUP">MTUP - Mobile Top Up</option><option value="NETT">NETT - Netting</option><option value="NITX">NITX - Net income tax</option><option value="NOWS">NOWS - Not otherwise specified</option><option value="NWCH">NWCH - Network charge</option><option value="NWCM">NWCM - Network communication</option><option value="OFEE">OFEE - Opening fee</option><option value="OTHR">OTHR - Other</option><option value="OTLC">OTLC - Other telecom related bill</option><option value="PADD">PADD - Preauthorized debit</option><option value="PAYR">PAYR - Payroll</option><option value="PENO">PENO - Payment Based Enforcement Order</option><option value="PENS">PENS - Pension payment</option><option value="PHON">PHON - Telephone bill</option><option value="POPE">POPE - Point of  purchase  entry</option><option value="PPTI">PPTI - Property insurance</option><option value="PRCP">PRCP - Price payment</option><option value="PRME">PRME - Precious metal</option><option value="PTSP">PTSP - Payment terms</option><option value="RCKE">RCKE - Re-presented  check  entry</option><option value="RCPT">RCPT - Receipt payment</option><option value="REFU">REFU - Refund</option><option value="RENT">RENT - Rent</option><option value="RHBS">RHBS - Rehabilitation Support</option><option value="RINP">RINP - Recurring installment paym.</option><option value="RLWY">RLWY - Railway</option><option value="ROYA">ROYA - Royalties</option><option value="SALA">SALA - Salary payment</option><option value="SAVG">SAVG - Savings</option><option value="SCVE">SCVE - Purchase sale of services</option><option value="SECU">SECU - Securities</option><option value="SSBE">SSBE - Social security benefit</option><option value="STDY">STDY - Study</option><option value="SUBS">SUBS - Subscription</option><option value="SUPP">SUPP - Supplier payment</option><option value="TAXR">TAXR - TaxRefund</option><option value="TAXS">TAXS - Tax payment</option><option value="TELI">TELI - Telephone-initiated  transac.</option><option value="TRAD">TRAD - Trade services</option><option value="TREA">TREA - Treasury payment</option><option value="TRFD">TRFD - Trust fund</option><option value="VATX">VATX - Value added tax payment</option><option value="VIEW">VIEW - Vision care</option><option value="WEBI">WEBI - Internet-initiated  transac.</option><option value="WHLD">WHLD - With holding</option><option value="WTER">WTER - Water bill</option></select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">
                                        Finalità incasso
                                    </label>
                                    <select class="form-control" data-bind="options: $component.FinalitaIncasso, optionsCaption: 'opzionale', optionsText: 'V', optionsValue: 'K', value: CategoryPurpose"><option value="">opzionale</option><option value="SUPP">SUPP - Pag. verso fornitori</option><option value="BONU">BONU - Pag. di un bonus</option><option value="CASH">CASH - Istruzioni di cash management</option><option value="CCRD">CCRD - Pag. carta di credito</option><option value="CORT">CORT - Regolamento relativo a transaz.</option><option value="DCRD">DCRD - Pag. carta di debito</option><option value="DIVI">DIVI - Pag. di dividendi</option><option value="EPAY">EPAY - Pag. tramite online-banking</option><option value="GOVT">GOVT - Pag. a/da autorita governative</option><option value="HEDG">HEDG - Pag. di operazioni di hedging</option><option value="ICCP">ICCP - Rimborso pag. carta di credito</option><option value="IDCP">IDCP - Rimborso pag. carta di debito</option><option value="INTC">INTC - Pag. tra aziende stesso gruppo</option><option value="INTE">INTE - Pag. di interessi</option><option value="LOAN">LOAN - Trasferimento di un prestito</option><option value="OTHR">OTHR - Altre tipologie di pag.</option><option value="PENS">PENS - Pag. di pensioni</option><option value="SALA">SALA - Pag. di salari</option><option value="SECU">SECU - Transaz. relativa la pag. titoli</option><option value="SSBE">SSBE - Transaz. beneficio spese sociali</option><option value="TAXS">TAXS - Pag. di tasse</option><option value="TRAD">TRAD - Pag. per transaz. commerciale</option><option value="TREA">TREA - Pag. per operazioni di tesoreria</option><option value="VATX">VATX - Pag. IVA</option><option value="WHLD">WHLD - Pag. tasse trattenute alla fonte</option></select>
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

<div id="a93cc8455a504e7ba1f31eeb2da7131c_6">
    
<div id="a93cc8455a504e7ba1f31eeb2da7131c_8" class="hide">
    <div class="riquadro">
        
        <div data-bind="html: TitleBlock"><div class="clearfix"><div class="flag incassi">&nbsp;</div><h1>Incasso Sdd: inserimento</h1></div></div>
        
        <validation-messages params="Validation: Validation, TopicId: 'a93cc8455a504e7ba1f31eeb2da7131c_9'">
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
        var CHALLENGE_CONTINUE = 'a93cc8455a504e7ba1f31eeb2da7131c_9validation-messages.CHALLENGE';

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
            $('#a93cc8455a504e7ba1f31eeb2da7131c_8').removeClass('hide');
        };
        self.Hide = function () {
            $('#a93cc8455a504e7ba1f31eeb2da7131c_8').addClass('hide');
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
    var PIAZZATURA = [{"Identifier":{"Id":null,"Version":null,"IdAzienda":265302,"IdRapporto":1408587,"ClasseServizio":0,"Crypt":"flKX4n+RU1CygcRqKD+sVh7Z5KqdC7vG6zOeIhhCEmyymTiGY7qr5OAZJhEu1mr7zai7LTK5wpna+YqWbmUn4Zh6T44egzLCD4tpIJtqak1gNsxPNLorEkbCjqSc4L03cnCsAnGZ13kiNWXkhZp1mw==","Hash":"6C8210691A8EA0569DD739F343516888EEDAAC43CA679935F90B66D96BC17417"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VAPRIO D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":1590.03,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AD8","Id":null,"IdAzienda":"265302","CodiceIban":"IT26K0503433980000000003827","CodiceAbi":"05034","CodiceCab":"33980","CodiceFiliale":"33980","NumeroRapporto":"000000003827","CodiceDivisa":"EUR","Descrizione":"000000003827","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000003827","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1408587","Type":102,"Crypt":"JlTTuo6nWMyW6ayHSWK30nxvjRwJhXpymwG7jlZcPf+czeLTqzHS919WkMnTTop6","Hash":"A6409A6D43F8625167F438F417AF00D76B76EED716A9B866F70BD033844C0B78"},"Status":0},"Azienda":{"Id":265302,"CodiceAzienda":"200051371","RagioneSociale":"CONDOMINIO ACLI","CodiceSia":"BI9GP","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91509290150","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"265302","Type":1,"Crypt":"ZnJIUzyxTRE0F4jKP9UwS5YzN/Yv+WN/xJD85s0YKej5dSrTfAxwqMvvAJOwzikm","Hash":"D8AA941B6EB1CC0F8E3649C994207D1E141ABBACC6B9DA1B83EDC6D31D9B00AC"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":265304,"IdRapporto":1380486,"ClasseServizio":0,"Crypt":"9k7xCK/LLy7eISlcnCvCSrmBa3M9LPVfRqDhAJfzxTMqforZf0l+zcAI1pCVI94+ZRrw6vCzYmbweF92E8ABti0nAnWWdBhS/WvXZ63CCq3wDrgat62fVihHNBpsqPbVANaNUUYfIXVMiQOFzlahmQ==","Hash":"7FD160B709D0DA2BC3CE722F500743D1D373135D08E227D9E768A89DBC4A0B9A"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VAPRIO D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":1444.11,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AD8","Id":null,"IdAzienda":"265304","CodiceIban":"IT22Z0503433980000000004688","CodiceAbi":"05034","CodiceCab":"33980","CodiceFiliale":"33980","NumeroRapporto":"000000004688","CodiceDivisa":"EUR","Descrizione":"000000004688","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000004688","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1380486","Type":102,"Crypt":"3uXh/7/JF4DPYmrW/vjkTeL5NpAKFzbKyqmLtj+TLTGDvXlJUJRqh4hWu5qmOLy5","Hash":"993DEA78857E28680233B265AF395E6303FDA797E201A8DC7F4DAE5AD4C50BDD"},"Status":0},"Azienda":{"Id":265304,"CodiceAzienda":"200051373","RagioneSociale":"CONDOMINIO\"LA TORRE\" C/O STUDI","CodiceSia":"BISYC","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91538730150","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"265304","Type":1,"Crypt":"eqMWormgXovjK8n1L1zr1+faLDv6ZjRmIui4QF30rSFNAGBFOZ3LJQN5H5K7CcoE","Hash":"8DE5E4DE5AA0414A2A61C4E3210EE21F27290B149911BD68B8D793651FAE01B4"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":265303,"IdRapporto":1408588,"ClasseServizio":0,"Crypt":"fMJ2VNKVVsMCdy7SZMHG89TQJd5cLRxLqF5vubF6odODtS5r9OZS2/um6uNBg3Co5Vf0d2zIyAMvAloj4V+8KEaDUNLEPkmkEeDtPoJ3cOzAg58hqJ1NYccKHIC6/Q+V1F/86Wv6SAAzP0PPxITuOA==","Hash":"AB119FD5D8D9325B143A9A1B5722BDB8C05A31FF28B0CC6E65CEEA9B932BD406"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VAPRIO D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":192.46,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AD8","Id":null,"IdAzienda":"265303","CodiceIban":"IT05W0503433980000000004099","CodiceAbi":"05034","CodiceCab":"33980","CodiceFiliale":"33980","NumeroRapporto":"000000004099","CodiceDivisa":"EUR","Descrizione":"000000004099","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000004099","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1408588","Type":102,"Crypt":"HJ934eoO3wCro1qnc0cW81ZQcaLU2+xCG9avtiIyyXXxgYdPXwdLvOVH2roEcREY","Hash":"14F1BF5CC59DC2C11852D5BB37AE7B33CC7E32CFAB108C82CD017CA1668FCAED"},"Status":0},"Azienda":{"Id":265303,"CodiceAzienda":"200051372","RagioneSociale":"CONDOMINIO BRAMBILLA","CodiceSia":"BI9GQ","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91521970151","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"265303","Type":1,"Crypt":"grDbfHpb0hPd7UZxO0csGo4xl/9m4UGRiyGPYeCVPSBOg0O68KlPQ1P/4ZE0aE9b","Hash":"AB012B91D684D3AFF263683DF12C8CAF49AAF76E1B772FE3C165E86BCB868556"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":265305,"IdRapporto":1382733,"ClasseServizio":0,"Crypt":"aERLJQAY/aQ9beZbbbPr0T5/kHS5B+2XTOZm5lG/etGndkMoKlktk7/YcfgudEGMh/FpzA35xiA/2lap6T69e4j9+g0FogOr8gbsvZ5UG/vdpQiN9Q/ohuA5qJ8CncxyfzibLMEoqQGw0F5g0sD4Zg==","Hash":"7E59AA2B18B0F36928E24E8334FB85ACF0BCC3B2B62670C5B3A534DB88227557"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VAPRIO D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":5208.97,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AD8","Id":null,"IdAzienda":"265305","CodiceIban":"IT70I0503433980000000004831","CodiceAbi":"05034","CodiceCab":"33980","CodiceFiliale":"33980","NumeroRapporto":"000000004831","CodiceDivisa":"EUR","Descrizione":"000000004831","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000004831","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1382733","Type":102,"Crypt":"rDKup4LfsKeLs3bWV5IzrvGTVQkWAChhwxB3HSqJyQa1StlIDbFcr0vA4XT/wVRZ","Hash":"7956C6AE1E6BFC8FDA42E088B412568762066CD45317DB6014ECA3FB89BF7649"},"Status":0},"Azienda":{"Id":265305,"CodiceAzienda":"200051374","RagioneSociale":"CONDOMINIO\"DELLA COSTA II\"","CodiceSia":"2L890","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91522060150","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"265305","Type":1,"Crypt":"bHeUr/43ny4hxRmobDqVlAyzZ3+322Rld2NGuXumKbMUKhyGWkX660JweNIctGkD","Hash":"AC9C2CB233C4C8B975673FC5901D77C0F84ABC85F5EC479A61B45C3E805188C7"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":265306,"IdRapporto":1408589,"ClasseServizio":0,"Crypt":"M6YN16m1dTO0oCKoo5T27KzF+hXrJnDDPf4/SosYQ/P2JkTmHXX9naCJpduwBJZH0iL/jL/dMlba2eX7SxV75OG+lu1fd+g7OgOvIsHPAkD3JMr9/8C8IyMXnxnChSh2VJRF1oTWe5egKVhIlDZDRg==","Hash":"7920F74495B23CC87A8C77F2ED2F8F1E75985B50A1875D3F8690CE335D7775CF"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VAPRIO D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":953.86,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AD8","Id":null,"IdAzienda":"265306","CodiceIban":"IT54M0503433980000000004728","CodiceAbi":"05034","CodiceCab":"33980","CodiceFiliale":"33980","NumeroRapporto":"000000004728","CodiceDivisa":"EUR","Descrizione":"000000004728","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000004728","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1408589","Type":102,"Crypt":"mk2lUb/xw107QTrQ8E2F3I7YsNNnO91rlNK965yhg5NTFlzqANXFlpN4zNvha6cA","Hash":"A06E8A6DE7E8C591EED25FF4E3C051483CAA0F54A54DEA38E212F00C00017DE8"},"Status":0},"Azienda":{"Id":265306,"CodiceAzienda":"200051375","RagioneSociale":"CONDOMINIO VIA MARCONI 20 RAPP","CodiceSia":"BI9GY","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91540660155","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"265306","Type":1,"Crypt":"mWukepoT1olw9LR3UDxOBUyqUc7k+3w3U7viv1j2YekmA1fFNMrZeDcr1cwSH32U","Hash":"005EFB74EEE9A95107B221AB933FFE70ED1E8AB04788FE2B32ED41E8FB18065D"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":265307,"IdRapporto":1414344,"ClasseServizio":0,"Crypt":"vwr7Wl7gjrzhv5rfZUjkBx/o3smsVIoZ3tzqPAx+9qz0ZIiPYmAkkPs1Ks6bJAP1xZSsS/RH+qyfBB7hU8SosXfs4nZwKBkYrQyhDESrXdbcL2a7eRQR5wFc9avsfvjeECk9Wsxfwrt5m+mWZwrYbA==","Hash":"BCC4E4F43C4580EA2D0831699276E6AA374C828078BBCEF58C67B6788D8D7D69"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VAPRIO D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":8477.51,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AD8","Id":null,"IdAzienda":"265307","CodiceIban":"IT77F0503433980000000013607","CodiceAbi":"05034","CodiceCab":"33980","CodiceFiliale":"33980","NumeroRapporto":"000000013607","CodiceDivisa":"EUR","Descrizione":"000000013607","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000013607","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1414344","Type":102,"Crypt":"MvedvAzAndIIqKX54q8sJKbMhNG7Y6qP1njMBlnqgt97gaQ1Wmx/8/SDw0Teh9vA","Hash":"5FFD45FD9C296AF0F66E2525EC479A8CD184D04F3509C0405C5899FE5A27C097"},"Status":0},"Azienda":{"Id":265307,"CodiceAzienda":"200051377","RagioneSociale":"CONDOMINIO ELIANA C RAPPRESENT","CodiceSia":"AZL2Y","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91543760150","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"265307","Type":1,"Crypt":"yPYVEyg91D5o1yDnh6V0qU1mTPSRLOc7V00/8KQ8P3NPDbxr71SZFOUt42P8XCMX","Hash":"A942913966A8D3C50D729A6100D5A1F4267E4AD34CAB5B5DB378395A070FCABD"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":265308,"IdRapporto":1414345,"ClasseServizio":0,"Crypt":"+0W7xry5/pU0a1MaeYhOpFAtFWah/PGqqP2b3Vtl7S8QoOqAYLM+aTcZd9vcAKIN7QIqL0O3Vgogk4BSPjquBj0wZ7llHZUhSeWLgLSKlsQSnQbKquz5k55yIMX9vSWKs/2Fst09m+NB8tR5HnFJng==","Hash":"8A8C4A459777F7CE60916FDF88053A388FA55CDBF449EBAAA68F0CA90FBF8D51"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VAPRIO D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":3738.62,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AD8","Id":null,"IdAzienda":"265308","CodiceIban":"IT54G0503433980000000013608","CodiceAbi":"05034","CodiceCab":"33980","CodiceFiliale":"33980","NumeroRapporto":"000000013608","CodiceDivisa":"EUR","Descrizione":"000000013608","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000013608","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1414345","Type":102,"Crypt":"C7UEDJajQSP47hrOzxU+AQfmtr3rElD0c+HfNo19PSzodn/dEZaM1hjxMM7qcYsI","Hash":"0B0BDDB98CAB0FEC1BB62313D84CDAD3C2B7A6FC7DB862405B4EADB5E2E3D276"},"Status":0},"Azienda":{"Id":265308,"CodiceAzienda":"200051378","RagioneSociale":"CONDOMINIO ELIANA D RAPPRESENT","CodiceSia":"AZL23","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91543850159","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"265308","Type":1,"Crypt":"w62/ZC/bbT2SqJ1V0scn6B1/y/jlIk9ywABrJFpiJHJR/EpsBCw4nlgIIoWInxom","Hash":"8ADDB03CE8649CA2610F05266A6927F0040C0BDF7B69B3368A6DCEC52526F7F6"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":268164,"IdRapporto":1408730,"ClasseServizio":0,"Crypt":"r2s5iEjBaqSV0pw/uAHkDgPKGBcS2Oc/1zV7FWFoeEw5yNsSauAQ+wX5EC5zMOBF1BR0Mcc4MZ46xhJrJ9/s8DIhHFEYYs2gWYHqtUmBUDzCeblU/fOgl1144zVZl3NXm4s2x/EB/Fg+rMDnVdEjNQ==","Hash":"31E03D12EA0597832828BF7C5D7A0EA6A9576F33006FD68902BCAB801DC29106"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FARA GERA D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":4558.69,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AB8","Id":null,"IdAzienda":"268164","CodiceIban":"IT70A0503452990000000006780","CodiceAbi":"05034","CodiceCab":"52990","CodiceFiliale":"52990","NumeroRapporto":"000000006780","CodiceDivisa":"EUR","Descrizione":"000000006780","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000006780","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1408730","Type":102,"Crypt":"RTQCUkkSxKWMcGewvmnI/+vgpTEtIw1Gs+YLb3vsj+EdrBtMHyJCin51UcsNoD1t","Hash":"35C93A625C871FF175CB9669A7D859074217D84AED8CD21F1DE9B60B1C360229"},"Status":0},"Azienda":{"Id":268164,"CodiceAzienda":"200052041","RagioneSociale":"CONDOMINIO C.A. CRESPI RAPP.TO","CodiceSia":"BJMHB","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"93001150163","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"268164","Type":1,"Crypt":"kdqCe3fKMoyASVTtcsLAzxs0IWFhEpW9HBYU7T1HpViLpzd2mViRnEC/LazbIuW6","Hash":"5FF8097F134598BAA8384250F397C1B67C6DFDA1A90F0E3504B876BC64FD887C"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":274222,"IdRapporto":1409041,"ClasseServizio":0,"Crypt":"EJbgmbedVQNCqGmgS5+OnJeH7Hj+V2g3sHqUZfxZ4shiH9bPtvS02ZPGO0zffQG94vLns1lHHHBd6JN022ZAj9COKLcpJRiI4fx3e5fnv1HiBMOHT6Baw9PQ/wmx1bFuU/EYM61b3nbDz3HGce6huQ==","Hash":"1499545C95440FEF13ACC35F29E007EEBC4A4438E933E2FD0DCE15E274E5F0F8"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FARA GERA D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":2461.72,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AB8","Id":null,"IdAzienda":"274222","CodiceIban":"IT56U0503452990000000005950","CodiceAbi":"05034","CodiceCab":"52990","CodiceFiliale":"52990","NumeroRapporto":"000000005950","CodiceDivisa":"EUR","Descrizione":"000000005950","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000005950","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1409041","Type":102,"Crypt":"JIxenewc7B/ig5FKD56liC3IsaZio0Af26nE3YptgGxdECN38F4zQu+rf6HzMx+z","Hash":"B329BDECA3AD567B92435BBB6046AAE940DC48B7726E325592F7815DFD83A936"},"Status":0},"Azienda":{"Id":274222,"CodiceAzienda":"200053431","RagioneSociale":"CONDOMINIO MADONNINA","CodiceSia":"BJ08H","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"93001120166","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"274222","Type":1,"Crypt":"UcuWD8wDNTI50oCsf4wkPV7c5FCYvWZPFV2u4rBroitNkSIYc31Sy2bdrazyPBYG","Hash":"9C84DC3B554FC8848EA34101D49B5AE561AF8533DCC76A6DACD0FB6756254ECA"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":274223,"IdRapporto":1409042,"ClasseServizio":0,"Crypt":"wPhr/7zOtdgcG9AOO0FWIXyLn7hzrMmZbGQnEBina4HJl9IS16B/Fcf/dlL2wjltobvyN0BpmrPgZh7b7R+pnbncoqmrUa61nvSxPvqKv3TmvkYFwQ5yUMP0/+F92q8T5joktfNJ+FiYMdimXuaGvg==","Hash":"A5C598F52262B4B1E090709AE1BD9E465D2AB9D782620B142DC8613431095C35"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FARA GERA D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":9402.51,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AB8","Id":null,"IdAzienda":"274223","CodiceIban":"IT75Y0503452990000000002598","CodiceAbi":"05034","CodiceCab":"52990","CodiceFiliale":"52990","NumeroRapporto":"000000002598","CodiceDivisa":"EUR","Descrizione":"000000002598","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002598","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1409042","Type":102,"Crypt":"AgDbSd1CX29RcG5HMnXd+LEd0fo2iP0sGMHySB/XCTR0wQgPFr2PbFjr5AJUJ9Rb","Hash":"E599940830C124EC5CD97F0FF77CA2D8F114C3E08553B53A35271D3120419D1E"},"Status":0},"Azienda":{"Id":274223,"CodiceAzienda":"200053432","RagioneSociale":"CONDOMINIO LE BETULLE","CodiceSia":"BJ08I","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"93008760162","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"274223","Type":1,"Crypt":"i2nUJfxxix9tZPayKIhCD2YdlIFYc/6iKJKxx2MO0DKlyxIzlqoIjiFXi+DIMN0D","Hash":"A38C226689F47654B8050A16A85183761186C86CB497A41E5E5A6D77EAE11820"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":265313,"IdRapporto":1384710,"ClasseServizio":0,"Crypt":"nZ7ITC6G+XuFKPE6SB7KRvJ2X1ZeJSyZLVhpuz8WFs2xZJA71FFW9By+gqfmj60bymhtC9xNfOplrx3UCn85YFmQpXz+gT5zzr5f0kN1StLPDihK1KQcL7WAm/GoW+Nk4MnYHz/MnQO98+pSg4qu6w==","Hash":"A4B9B72A5D5FEC75FFC42DE292C890CB6CBE4843F8184A94853A6F47C0008E6E"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VAPRIO D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":10263.03,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AD8","Id":null,"IdAzienda":"265313","CodiceIban":"IT25J0503433980000000005325","CodiceAbi":"05034","CodiceCab":"33980","CodiceFiliale":"33980","NumeroRapporto":"000000005325","CodiceDivisa":"EUR","Descrizione":"000000005325","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000005325","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1384710","Type":102,"Crypt":"+eV2s7snRlSbNNJI8uyDDt2eTlys4da/0THRnWblXfJCzFJqPChjx6T+tmHCCSUj","Hash":"EA9732D530931888976B9C10A13735B9BCD6F064E01EE8DF5BD31E85B6FC5D38"},"Status":0},"Azienda":{"Id":265313,"CodiceAzienda":"200051383","RagioneSociale":"CONDOMINIO I GIARDINI RAPPRESE","CodiceSia":"%BACT","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"93017470167","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"265313","Type":1,"Crypt":"CIJsHPLkZoiKRBJTviMvrlPLKhZGocAseLRAXrZI7y41EzHIbVs5B7PXQGMhUwEd","Hash":"8A3B0C1133638848D9E51D14993C4F525715F879A3B38A600F2ECF4E6F94387A"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":265316,"IdRapporto":1384711,"ClasseServizio":0,"Crypt":"EqZM27GaewaYlGu0r/MIzAdTla2HosWwGM+XHAXXvsQf3zSk7y7nBpOHrseDju2g9xgH9WGUphLHCFyDi3/OVVa26Mzn7oYWL3eJEsDhtcobyKMaOcBcFlj8PQwJg36VgzjweIrnbrro9VzdARCAcA==","Hash":"9977DD924D6E591F3F800B957BCA673D8B5F59751D1A98D184F4FFEA14F947A5"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VAPRIO D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":1127.90,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AD8","Id":null,"IdAzienda":"265316","CodiceIban":"IT88Y0503433980000000013710","CodiceAbi":"05034","CodiceCab":"33980","CodiceFiliale":"33980","NumeroRapporto":"000000013710","CodiceDivisa":"EUR","Descrizione":"000000013710","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000013710","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1384711","Type":102,"Crypt":"tODVaW6O4qedHSEPH6Eg6NbxaKBga0Q+UXx9iHpKA+Lb4ybFvEUO2C5cOe0hEUSo","Hash":"C1495E92618D3F2B1FCCBA2ED7E8467D32DBA2060C1CC658D14968D24230AB25"},"Status":0},"Azienda":{"Id":265316,"CodiceAzienda":"200051386","RagioneSociale":"CONDOMINIO VILLA PALENI RAPPRE","CodiceSia":"%BACW","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91541020151","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"265316","Type":1,"Crypt":"99802qH/LaAiGOVW9gpW7fKBMs9vtrFlIqkHCOV2a2A2dQNZqbShIgrFhMumzxbF","Hash":"7C64365FA99E3F70758BBB48ED714C2EA5037B3376A24A52D3656212DD2580DF"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":265314,"IdRapporto":1413596,"ClasseServizio":0,"Crypt":"s9MNNb+QHK5j0y0DbUul+Bit9RvahR+7q7ujIClqH0BOKusrHtGCo7D/uI+svGGwAjEnDiJDurXjl87BGG0y7afpoHFrTrSWnlqSQNTbFIN9RXUxt6tOCyQdR7hQMrd1QTuXMQU2vdZIDFHL5dRwzA==","Hash":"95FB4F5597272FF707B0481AC831E5CD5D485B78305734B0B7165FADE6559CF5"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VAPRIO D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":787.16,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AD8","Id":null,"IdAzienda":"265314","CodiceIban":"IT11L0503433980000000005236","CodiceAbi":"05034","CodiceCab":"33980","CodiceFiliale":"33980","NumeroRapporto":"000000005236","CodiceDivisa":"EUR","Descrizione":"000000005236","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000005236","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1413596","Type":102,"Crypt":"iGI1lYveXATfs2KP0NyctzkIEMHTqFDpLQIPPusqynzHmSj8Wo/EOtUC60eAk7O9","Hash":"BAB86EE01A9D72D9B27674BA78224598EDC17F10EFA815878FDCB5A25C00D3E8"},"Status":0},"Azienda":{"Id":265314,"CodiceAzienda":"200051384","RagioneSociale":"RESIDENCE EMILIA RAPPRESENTATO","CodiceSia":"AXN6D","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91531570157","PartitaIva":"91531570157","StatoAzienda":1,"Identifier":{"Id":"265314","Type":1,"Crypt":"TZzWV/2EfaCzXb4lXQzmUanx3uFytseVPioFFBqZlpKGz0TDntGgp4f06/+0X9wl","Hash":"1C1F255B9BA45748F0D68E64EAE19A5856D12CE0290F4639E73EAF129004E169"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":265315,"IdRapporto":1414346,"ClasseServizio":0,"Crypt":"1i7j04Eo3nrArvwT5pD7t6zPIWigzBhvw74Vti60v2RTPmnuXZ5wllHUiXifU3ffZ0XNdbj0+AgWuRaQHLD4rm4XTcNZXNJsraiJ7kYjcCYf6Id0udIhan3uFT+4XGvCt6ADbgzaMBFyN8HwXNWYQQ==","Hash":"218B667DFF926B8D5E9FDDA2BC1A5B030A09540E146F2C721567CC94D47C3FCA"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VAPRIO D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":3777.14,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AD8","Id":null,"IdAzienda":"265315","CodiceIban":"IT31H0503433980000000013609","CodiceAbi":"05034","CodiceCab":"33980","CodiceFiliale":"33980","NumeroRapporto":"000000013609","CodiceDivisa":"EUR","Descrizione":"000000013609","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000013609","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1414346","Type":102,"Crypt":"GIus2VKN3avEcVWCan5LsGqtfWVjUo5k1MtzRV9+wp6C2qd6yTTBZqlY6HB5bFhj","Hash":"6D319435C22AF4640FFA8F8C9E556E6DC528D462019CBF65E675EA6E0B188A51"},"Status":0},"Azienda":{"Id":265315,"CodiceAzienda":"200051385","RagioneSociale":"CONDOMINIO LA MONTAGNETTA C/O ","CodiceSia":"AZL3A","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91535840150","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"265315","Type":1,"Crypt":"XOiq89TJg/J2GKygnPg4u/B0zSW09oGFPhaGuJuxHbxqCrpw/LXmXXwgE7ZvRZBQ","Hash":"481DBC95DF3F9F7FA7A5BC425707DF83E30376F75E1C120C3C55763B3CE43193"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":265310,"IdRapporto":1414582,"ClasseServizio":0,"Crypt":"qPfQjl5BEjuRThqkUbniIdvO4rNztf9laMalwRgJgbXeUnTevw2ygFiYxI7229cy0UdZYbaaoHaiug9GAc/u546T+LDnIl86u5yYABHYeMnEZG14CyMG/4wc8d5GUIuqYVdMlqoTBnqjcJ/mpP45dQ==","Hash":"3DA6422D961DC14482FFB3EEC0C6C7AA24F13317F49B39DB0B047AC672DB12F5"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VAPRIO D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":12985.64,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AD8","Id":null,"IdAzienda":"265310","CodiceIban":"IT16J0503433980000000013635","CodiceAbi":"05034","CodiceCab":"33980","CodiceFiliale":"33980","NumeroRapporto":"000000013635","CodiceDivisa":"EUR","Descrizione":"000000013635","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000013635","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1414582","Type":102,"Crypt":"L5iopj7Nyq1wlf6W0h95KeFftFa7o4/hynGBXpXfwi3rCuV+agwvEtSp8v/NviqL","Hash":"02B8CA450B5F7051B809580E3E5C946F52825D787EA03DA4CEC3CE02CDB9411D"},"Status":0},"Azienda":{"Id":265310,"CodiceAzienda":"200051380","RagioneSociale":"CONDOMINIO RESIDENZA DEI TIGLI","CodiceSia":"AZ630","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"93022630169","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"265310","Type":1,"Crypt":"a5yP1U/fewoAcuftVfkR0DUjgdbujTqs7/KUy048oVfGi0bb4GWZekCGA/nxXmaF","Hash":"F70559FBA281FD91233C87FEE098BB11997289B9CE769F20E6454A31EF8DF90E"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":265312,"IdRapporto":1415552,"ClasseServizio":0,"Crypt":"hHJPqTpAez5UzWuJ2MisV+z9htkzEok9vJg8fkQLwAA9ZkJgNZ10yfQ6HXhDP62AzJMpCgPLiQqjLnOHYlwVh5FVRarEigoZNK9kS2TfOj6BkpGI4+LmWCK5MgWXii+ZlY8jpUG769wpESEbX7Q6Dw==","Hash":"174241C4D36DE7BF12AC936427FB6F3EE47073EDCE4869CCDE3B08A897F303C2"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VAPRIO D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":4827.53,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AD8","Id":null,"IdAzienda":"265312","CodiceIban":"IT54M0503433980000000013652","CodiceAbi":"05034","CodiceCab":"33980","CodiceFiliale":"33980","NumeroRapporto":"000000013652","CodiceDivisa":"EUR","Descrizione":"000000013652","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000013652","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1415552","Type":102,"Crypt":"vUxqw3JO+Y4nZ4FZbE1CVv7xwQc1CMV92qVDccoiCr5Sbc5K8Q26WLcUkvbkgdMz","Hash":"14776001FD4F7F12B906E28A9614256743C555DA65322BE3D970D0D79953EB8A"},"Status":0},"Azienda":{"Id":265312,"CodiceAzienda":"200051382","RagioneSociale":"CONDOMINIO DON ATTILIO CRESPI ","CodiceSia":"A135N","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91547850155","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"265312","Type":1,"Crypt":"2VU/xAP8Wp9IDLjyRm/+vMIhgQeRUQsagvW96SUi3Gj94hdAmkJDJVkwtGVus+pi","Hash":"198E1ACCAE286692259BCD812697F34C5A3F5659C9DC07178C0CDE8D31B7AACA"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":275905,"IdRapporto":1411360,"ClasseServizio":0,"Crypt":"c8oJjaNHFP+IBian+ocmubMDSB968HbbXMrbvVOXxvSWvqkXGxsBC0nKlYv3SGYHbGEGmyUBh2oiU5vAxIiXT4geA/8u4+2cIztows6jAF1GARmTvbmITinmVrl+EKaNm7xfswOQbrHnrmTXsQcsZg==","Hash":"8E10BECDB4DB55ABB3D3651475C848EFAC08FD84979786466C9DA0AC5CEB9496"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VAPRIO D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":17065.12,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AD8","Id":null,"IdAzienda":"275905","CodiceIban":"IT46Q0503433980000000005354","CodiceAbi":"05034","CodiceCab":"33980","CodiceFiliale":"33980","NumeroRapporto":"000000005354","CodiceDivisa":"EUR","Descrizione":"000000005354","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000005354","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1411360","Type":102,"Crypt":"JIuzMSSiKSGkmk7YencdB6czUeS/Z5PgfGwxlqOgQcqVzKqAe1lCxqoJ/5dbObdR","Hash":"AACFC9B5BC5806AC73561DAD131CC1DD28FE81F044D7215D8B78ECFF92D72555"},"Status":0},"Azienda":{"Id":275905,"CodiceAzienda":"200053810","RagioneSociale":"CONDOMINIO DELLA COSTA PRIMO","CodiceSia":"806V1","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91540710158","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"275905","Type":1,"Crypt":"kSpBDPXqd8wMzprcKbPT0VZRUlAX/FsnbBf7E8VUkyHaQYJHRfLKrpYkS6XBMl+u","Hash":"851017E6400CE3A389D1F4BA2523BA8BE63ACA0E01CC241F6D93C281E874FDA8"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":300872,"IdRapporto":1405924,"ClasseServizio":0,"Crypt":"6/iDxHtAV0tvsCNFC18037Dh2CRw0DvbHthrZ9FiQFFRZccDJpfDrv/LC+BaFNmWC2PBYAoKTFfxnGM4o78ht+RelbSP/B4qYl5kYlCB6k94BO+yKX7XQJVEXPeV8HvccHLmgK7LJfUXEGEmxBZkXA==","Hash":"4241AF769CAA837DB29B9029380239A06BC75C57B3E6C9C38BDAB8BFA0C8AD2D"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"CASSANO D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":2646.28,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AB4","Id":null,"IdAzienda":"300872","CodiceIban":"IT75W0503432800000000011399","CodiceAbi":"05034","CodiceCab":"32800","CodiceFiliale":"32800","NumeroRapporto":"000000011399","CodiceDivisa":"EUR","Descrizione":"000000011399","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000011399","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1405924","Type":102,"Crypt":"U+Qm8UEjXnXn+7mZIszWfUyEa0JBFHGsyq0AGsfvmoQ21oeBHFSAkh4QkstHq5r1","Hash":"DD84936E7EF52BB2BA23EA1E7ACF49B5F81D580ED6BA5E471DB33DDA95F94DC7"},"Status":0},"Azienda":{"Id":300872,"CodiceAzienda":"200059054","RagioneSociale":"CONDOMINIO IL GELSO","CodiceSia":"AIRZR","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91534090153","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"300872","Type":1,"Crypt":"rSo4Kgz94UOLEqT6NkddYGV7MXNKG+S6Cib8h4mJh6F25EWsIMUuqcLvdbSUvVGV","Hash":"0FAEE1FC737A6A8C9E7DDE7AEE9C3C0B32BB06B19ACC21124954FA863C05B01C"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":274224,"IdRapporto":1409043,"ClasseServizio":0,"Crypt":"ECyLXRQjI8RPbWpBeM+N4lvth7ezlHL3DVHfOfhb+L2K3ZDiaZ+y4C/+NcaEfNTCKZILoJyLmwXIR0zhHA6GeAWOzrbB+PL5FHxyMuDrubUgW7I12vQP6ArbaO60JT4mlxCPd3GMvwIs8tbPRSSnng==","Hash":"6CBB77E8E34B558EF66C43AF2647FA38409406657C146FDC798F8314D52B55D1"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FARA GERA D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":1629.02,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AB8","Id":null,"IdAzienda":"274224","CodiceIban":"IT42G0503452990000000000926","CodiceAbi":"05034","CodiceCab":"52990","CodiceFiliale":"52990","NumeroRapporto":"000000000926","CodiceDivisa":"EUR","Descrizione":"000000000926","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000000926","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1409043","Type":102,"Crypt":"em1OsyRW+LAIJKN3slohY2K9AEi3kFt9Zuc05k2QUzEwr4RA32zU1t+7Tw55hxIO","Hash":"956CE0AC0CD3CE82AB187FB4C2A73FB5E4368B4B98996733C33D334CAD7AC324"},"Status":0},"Azienda":{"Id":274224,"CodiceAzienda":"200053433","RagioneSociale":"CONDOMINIO NIGRITELLA","CodiceSia":"BJ08J","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"93001970164","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"274224","Type":1,"Crypt":"uTtEQJn94nKL5DRjpbRnm/bKBH41dIj8CBtqLcZyt75HoKK3xUVM8GmAL9LhA13/","Hash":"6371071A0CD8AF9788046E4173084AA4B1C47119244444F15BD56EB51D9AB853"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":274225,"IdRapporto":1409044,"ClasseServizio":0,"Crypt":"443RmfK/mg0diJApLbLkEI3MQPSfkE6LMQVnjJRnEpF/KCnqiAA0hAjjxhtGHumZFSr12r0NP394XEnMokIZDG9kfZrBLXBOyiuVwnkfORt9JHR+93aqec1CHbhvTaJochGAA8FBSW1p62kLaMhP3Q==","Hash":"2D75DEB3309256952335DA8915753A46625C92B15A559BB2AD1B6E68D6427D08"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FARA GERA D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":224.91,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AB8","Id":null,"IdAzienda":"274225","CodiceIban":"IT96I0503452990000000006403","CodiceAbi":"05034","CodiceCab":"52990","CodiceFiliale":"52990","NumeroRapporto":"000000006403","CodiceDivisa":"EUR","Descrizione":"000000006403","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000006403","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1409044","Type":102,"Crypt":"UFhIadycRCN5p/bh093hd1rLeP2qg5MJKS0jtrhKpJJDwH9JisReVwU1H4Y068u4","Hash":"156E090D36120A710560BCF966A23EEDC0D196006ABA27D061371B21A0AEBA37"},"Status":0},"Azienda":{"Id":274225,"CodiceAzienda":"200053434","RagioneSociale":"CONDOMINIO PIROVANO","CodiceSia":"BJ08Q","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"93017480166","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"274225","Type":1,"Crypt":"fvpiNUAKp6j9zQVx30sWaPzZJMK2XDbDITUJUv/aNrjXUTymz4kpw/e4qZX1r1WO","Hash":"83FB2D8C986D06983F602ABCB6B6C50ED4FC8356692A33975608921F4C6BF25B"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":274226,"IdRapporto":1409045,"ClasseServizio":0,"Crypt":"hziIIKlwlVABWEX9VSzyrfLrEMBHll3rc18ZFb3umJvdvdP1wyKifnEd9lzMEN37zXoayuE2DbZsDaFxbLZr2eyYlmqUgoixuF5MwCGfEDtYKOGPKPKN/ZudALO4ir/QAnXpl8iu0B9+kwkR4WKWFA==","Hash":"61E2F02E10B5552E3B1E7B74362F3815D1A82914407BAB417C7BD4E7570C7264"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FARA GERA D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":4235.10,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AB8","Id":null,"IdAzienda":"274226","CodiceIban":"IT98Q0503452990000000002384","CodiceAbi":"05034","CodiceCab":"52990","CodiceFiliale":"52990","NumeroRapporto":"000000002384","CodiceDivisa":"EUR","Descrizione":"000000002384","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002384","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1409045","Type":102,"Crypt":"G9Eyt9pUBNzJ6CfoaJUz+ZveOXRO+tQq0cJtiveNc6k40ggeX15Ih1KoIfpd3UJO","Hash":"5CA6B866FBD0D39CA7A1938AA609125B48F932280CA0787C304F74AAD3FF08D6"},"Status":0},"Azienda":{"Id":274226,"CodiceAzienda":"200053435","RagioneSociale":"CONDOMINIO S.MARCO","CodiceSia":"BJ08R","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"93007520161","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"274226","Type":1,"Crypt":"h3Z2kKTapZRxaCR2CRL5amQ3t/z30y3ZgIF5Pi7ay3tSGNrrCmv6t2kNKQKu1JAu","Hash":"897A6D21877A349CEA98BF2921C60C210DE3C44B01FDC19F6DB0AE63C938E8A6"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":274227,"IdRapporto":1409046,"ClasseServizio":0,"Crypt":"MERD6Kkjq7ecwfX/ZmLd2SiDBu6foWS/N1pn84BiT/xXs6ehcUbFzscSFr/3vroxWpnH9nDUBQNFJndV+M2pMZK3Knm3fiOzw8eGonVV9affL2bTfa/lDu2X7wEP7UtUul8h0eiKO+UIUbufiSXXBQ==","Hash":"B6819517B4C56448C58CF72D17BFE55D720800C582E578713C35B66E7DC28DB9"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FARA GERA D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":4202.51,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AB8","Id":null,"IdAzienda":"274227","CodiceIban":"IT56I0503452990000000003146","CodiceAbi":"05034","CodiceCab":"52990","CodiceFiliale":"52990","NumeroRapporto":"000000003146","CodiceDivisa":"EUR","Descrizione":"000000003146","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000003146","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1409046","Type":102,"Crypt":"vDPLdqUR8W5W2pXqtmfVhu4CspeXFJENHaWCVU7KYE7soCbqRokuam+YdYIoBVGS","Hash":"EA1C5B7DFF4B541226443767B562EC136539470CB72E3BC77E0C6426046C9E76"},"Status":0},"Azienda":{"Id":274227,"CodiceAzienda":"200053436","RagioneSociale":"CONDOMINIO S.ALESSANDRO","CodiceSia":"BJ08S","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"93007510162","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"274227","Type":1,"Crypt":"PgEboAZxNRnPMgrEoObc1Rum+0Jn2h0RLbGNtH45S0/2JEj2kUX1HQLYND1YEjI0","Hash":"4AD5A2BBB5C42720F5A7811BCFC18C8BB7B558DDC5A2A2A4111092F4C7B33A2E"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":276838,"IdRapporto":1396089,"ClasseServizio":0,"Crypt":"EI4YnN/jZKm3oHT5N00HnEnAv4aJQlf7kvxBhPu9NZVE2NJCdYb5eDTRYEWvVGKZTcce4NeDU4XT0dL64enkTkSD+HdlDQFCydg4yu7LhUAqzRCbcWtZLv0tm7P8DbC7hHNl0+ACcqcnEonb7kYt7w==","Hash":"AA70222338F140EB973D55922D0057DEA62312DD4448A218B8D98A1FD73FFF5A"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"TREZZO SULL'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":54.54,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AP1","Id":null,"IdAzienda":"276838","CodiceIban":"IT79Q0503433920000000002328","CodiceAbi":"05034","CodiceCab":"33920","CodiceFiliale":"33920","NumeroRapporto":"000000002328","CodiceDivisa":"EUR","Descrizione":"000000002328","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002328","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1396089","Type":102,"Crypt":"cYeODDxaBNAhA3pzGW9DyFxWdE/+zXoebSN/hn7qh0pD2buXLE0Xw6nrvhqLyHMR","Hash":"4D2EA6DEEDDF15697ED9F619F97AEB47C9633E65FC00511F51572223566F9885"},"Status":0},"Azienda":{"Id":276838,"CodiceAzienda":"200054079","RagioneSociale":"CONDOMINIO CASA A1","CodiceSia":"AD770","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91531650157","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"276838","Type":1,"Crypt":"+8CdLOQT7NleoBO8ztDJyIVUiPKal19xvfpjza/kUX7ESXCX3pRf9VuLToSJocYb","Hash":"014056A33AB14F2F987F1C349565D4F5D6B98607F524085D168BC3724FC27D97"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":276843,"IdRapporto":1396342,"ClasseServizio":0,"Crypt":"EC/s+nQO8w5naNIzQqFjNrJyxoa79mLtTDg5BFK2IJQr+/yhF8hA3DSbhAm62F7m5+6cUURkR906n/e1JmGkjCeEQmfB1vCNiiSVmJhxU1wMNIp2dXfZyVSSrPMicuQanU8m9FyAMbgTi1SA4RYVrw==","Hash":"F4C754F1136F45F4113F828866BC3985DAB9DD1DBD1CAB2A70C0AF719B4EFD2A"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"TREZZO SULL'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":6471.94,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AP1","Id":null,"IdAzienda":"276843","CodiceIban":"IT03G0503433920000000001521","CodiceAbi":"05034","CodiceCab":"33920","CodiceFiliale":"33920","NumeroRapporto":"000000001521","CodiceDivisa":"EUR","Descrizione":"000000001521","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000001521","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1396342","Type":102,"Crypt":"zShLzRJ1Tbt1C9mSXbeFsDPOVD5hH7R/I2E7t4BeZJwrFE8YQnGsmQur0NKnGfKF","Hash":"747E2D481BAA5BC9F286D47D7F641E88881B723654F195417EA962C3C016DD00"},"Status":0},"Azienda":{"Id":276843,"CodiceAzienda":"200054084","RagioneSociale":"CONDOMINIO AMENDOLA 2","CodiceSia":"AE0RN","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91506280154","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"276843","Type":1,"Crypt":"jiY2R6IlmJ4GkBGnPiVO/osvMEa4LFi9viMvxEnfExptX+m1sihDmzkWFmHzd+bf","Hash":"AB92144A37FB49091734F62FD35EA11DDFEE85B5FC130361EF690CAAA3502218"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":276840,"IdRapporto":1413595,"ClasseServizio":0,"Crypt":"WXyGdZlTvObMgzpquzLa2WfoW51zzUQUd6G+U5sqBD6aP+RmtSTGrqEZ+PxUIqEtMIZv7RZFsDng0fSqGT01Fwv8ifik0GEtgkM2ND1fHNfN0cUnV6uqzJQ64BIxppoHrPddkN3UD4qFUBrprQrdgg==","Hash":"905EF4B6793141E8E6869BEE232AE0950E98B9F95889F5C3EA2BF5EB6D8D1540"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"TREZZO SULL'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":30133.23,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AP1","Id":null,"IdAzienda":"276840","CodiceIban":"IT37T0503433920000000001748","CodiceAbi":"05034","CodiceCab":"33920","CodiceFiliale":"33920","NumeroRapporto":"000000001748","CodiceDivisa":"EUR","Descrizione":"000000001748","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000001748","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1413595","Type":102,"Crypt":"IH1WTvChhi3e4SBc9CnIV226r3sF9VXz//kgpeZyPWoWc83V+hUkNQrKQ8djOUyS","Hash":"877BC6C6722842D0A78CFBBF3C75DD590CAD112275509942F051D8665357809C"},"Status":0},"Azienda":{"Id":276840,"CodiceAzienda":"200054081","RagioneSociale":"CONDOMINIO\"PALAZZO MORO\"","CodiceSia":"AXN28","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91516300158","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"276840","Type":1,"Crypt":"6hAX7P688CLADGiRM8SOv9TRedCZJ/chG+tFbCEa3iB88DgDNcv6y9xgorYIpl9M","Hash":"D815831D41F57DC0C805D3EE4EC44C4662399AE9EDB5F9701F972831B604F716"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":457876,"IdRapporto":2578085,"ClasseServizio":0,"Crypt":"l0XqnvUlpifEAcH6HQbs6uZgqNrMT+x7Q5Am3ETZzuxx4MKw8k6yjZ+KXVIDG7V/qaa6/psM9BY7o3lBesKl6N5HJYSwO/O+FX9R+65vTIaY8AriudqVP2r3IvCshrGZ64ydV8fxCT6dKEGbhKgLzA==","Hash":"22DED3C4E44508FC732F64B27BAC009936FDCD97329A34C7B8F857BDCF65AD25"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"VAPRIO D'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":52.51,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AD8","Id":null,"IdAzienda":"457876","CodiceIban":"IT98K0503433980000000005441","CodiceAbi":"05034","CodiceCab":"33980","CodiceFiliale":"33980","NumeroRapporto":"000000005441","CodiceDivisa":"EUR","Descrizione":"000000005441","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000005441","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2578085","Type":102,"Crypt":"3xfHtaoSJNsDdKPghzmDUqlQc8b3+azhPCHeEyDVgISWaghSznWCiMbGX35desIm","Hash":"4FFABAEF2B72280D2F8AB303DE8EB349A6DE9B06FA18ABECBCD1C8794EDC9FC8"},"Status":0},"Azienda":{"Id":457876,"CodiceAzienda":"600176041","RagioneSociale":"STUDIO SCARPELLINI SNC DI SCAR","CodiceSia":"0571W","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"04580070961","PartitaIva":"04580070961","StatoAzienda":1,"Identifier":{"Id":"457876","Type":1,"Crypt":"wO+5uQxV+Kc1ucgqc4GyoN4JRHLZHjYgnt7YdMTVIEjsnJNUWMEDaG0eWUiIOcue","Hash":"C23C518758270B234E62B35374537691FA0FEFEC2B15594BD08464B2512D0BC1"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":276839,"IdRapporto":1395353,"ClasseServizio":0,"Crypt":"W13BzvYMatNmKpYzll7E4ORYrgHlXpHxK2eiNcBGinh/9NHuNlaXxOSJ3t6XPasoWE9yPeylkNlTnPy0Y7q4D+qQKfw0zwuzEmOKcVhDKDMah4zHuUDhbLZiigALOue4DlMJr5o+nw8hQfzJjBbPKw==","Hash":"1E02A8C033F8D1C66C1F0006B8E9888E3A77DD3C345EAB26B233BFA9E1CBB1A1"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"TREZZO SULL'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":2859.53,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AP1","Id":null,"IdAzienda":"276839","CodiceIban":"IT10Z0503433920000000002375","CodiceAbi":"05034","CodiceCab":"33920","CodiceFiliale":"33920","NumeroRapporto":"000000002375","CodiceDivisa":"EUR","Descrizione":"000000002375","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002375","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1395353","Type":102,"Crypt":"QAb+3PDYD0d2u43DKRE8Q3Q7dGQk74uu/MeRVEQhPERBrrWRudufeA73R2FZFS5I","Hash":"707CF867F40D28A0786F6F6AC543CFF1850B9841D2DDBD26900D3F8BBBE10D06"},"Status":0},"Azienda":{"Id":276839,"CodiceAzienda":"200054080","RagioneSociale":"CONDOMINIO EDILCOOP DUE CASA A","CodiceSia":"ABTR5","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91530920155","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"276839","Type":1,"Crypt":"wpEVbnWagVRT0x9riw2Teo0JMdNDiXlBLKq0yiBbMUBCnR303YcUX5ax57Tqt6dw","Hash":"ECF113276CAC1BCD64ACAEAAE640049CD851B96F6F5E141341E9CD3F4351481E"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":276841,"IdRapporto":1395606,"ClasseServizio":0,"Crypt":"bJlylZ462BHPLxGlWcF7mQuaxzpgeszjHg9XRo8s4VVtexY5YVFlbz2YTTzaNl9UIPTl6FMpdQlXQiTmbOLCEMugOY/uypV00yc0qCPAqpoCkuWmp83tMo0hmqSAiaujcyVg8aTcAuqgJiKaN62k7g==","Hash":"B05C744171939C3B5A64E03BA34264A5A879EF3B4271CFE88778A083DF713A89"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"TREZZO SULL'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":8896.51,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AP1","Id":null,"IdAzienda":"276841","CodiceIban":"IT88V0503433920000000001459","CodiceAbi":"05034","CodiceCab":"33920","CodiceFiliale":"33920","NumeroRapporto":"000000001459","CodiceDivisa":"EUR","Descrizione":"000000001459","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000001459","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1395606","Type":102,"Crypt":"34XXBInXYiHYO6PnT8x83itL8iZ/dGpEI29dWktQs3AAXNCqS+1ladlzC+BB5lSb","Hash":"BCAE43D54853BB6220AE791A1F5828B9931AF461244CDF17CCF84B7D1C1CEC96"},"Status":0},"Azienda":{"Id":276841,"CodiceAzienda":"200054082","RagioneSociale":"CONDOMINIO ROCCA 11","CodiceSia":"ACRGY","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91511570151","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"276841","Type":1,"Crypt":"3MEpypwzSIvSuFdB5pn/9nU9WVF7mTUMxVvqq4a9ekrQn567zSRwf/y9Eq0AVJNM","Hash":"EDBC5F51195CF71853DF5CF5F7DA81729F63298DF7DDB11F6039DAE8C5ED5045"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":276835,"IdRapporto":1397016,"ClasseServizio":0,"Crypt":"yTvjk3ygAjVlj4knUCDP6g3Mh7xDB0F/l4ukR0tOxVkAVlC1n5ycuXtEpUqfaWPMfEra256rfQ1VxIlkAfrVtQxJuAqkPx1R73sQLQDITpeUlkka04/o5kQ8+r+KmYSy4kpKg3LL2bzNl8KI+U9lvQ==","Hash":"956BEB707F2CC3DF0F0C692C09C05FB6E30B7E6D83C001D92889EB645858ABD2"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"TREZZO SULL'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":7444.90,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AP1","Id":null,"IdAzienda":"276835","CodiceIban":"IT83U0503433920000000002156","CodiceAbi":"05034","CodiceCab":"33920","CodiceFiliale":"33920","NumeroRapporto":"000000002156","CodiceDivisa":"EUR","Descrizione":"000000002156","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002156","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1397016","Type":102,"Crypt":"/6vi/JUrtWvAUzUAn4qaR1DgDLutiVsChAxj7Z1OXftOTBwnttUd71ULU/C80RKg","Hash":"408DB9B12AA72865E2472361A0F6E8EFABF78233C164480AA3B4BD3A32AEB480"},"Status":0},"Azienda":{"Id":276835,"CodiceAzienda":"200054058","RagioneSociale":"CONDOMINIO SAN GIOVANNI","CodiceSia":"A5CDA","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91520220152","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"276835","Type":1,"Crypt":"776OUwyjnGdZuAsFfQsZD4JCEh9Q66S4C56iuN1ZDvKvvLsOTQ4HGY2PsOL7hE43","Hash":"1E197B289F4ECE8EC30FB369BDDD31948CFBE4800127DAC2ED0DA151CCF45086"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":276844,"IdRapporto":1397148,"ClasseServizio":0,"Crypt":"L5Iz/J5e33yfwQ7+VW4KHr9Uw0Ruf43i2RR3xJZZcoccAwXas1tlluV786Ft2X6vs32xa672uHsM4YqZDrsa2CW7s8UXta5Vgv6CvC3dZ+NmfgDZ6zJGDfKThV6wGGIr2faWlip0ZDErWRYqreOHgQ==","Hash":"845C200CE8307BB55423D099EE7FC3CB306037E5ECFDD6D0323DB109B207F5DD"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"TREZZO SULL'ADDA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":1184.54,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21AP1","Id":null,"IdAzienda":"276844","CodiceIban":"IT96F0503433920000000002103","CodiceAbi":"05034","CodiceCab":"33920","CodiceFiliale":"33920","NumeroRapporto":"000000002103","CodiceDivisa":"EUR","Descrizione":"000000002103","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002103","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"1397148","Type":102,"Crypt":"VXhUYcV8xKUMMYiYPUopir8EM2Nt8hkzgv9/us3BAPdvkgePxEQGw7+BgDP/L82g","Hash":"59483CAF23F40DF778A5540C12075CE929CFE6CF32AC1A6D5C8A86453F0D2E47"},"Status":0},"Azienda":{"Id":276844,"CodiceAzienda":"200054085","RagioneSociale":"CONDOMINIO VIA BIFFI 1/3","CodiceSia":"A5QT5","CodiceCuc":"VANTAGGT","CreditorId":null,"CodiceFiscale":"91538020156","PartitaIva":null,"StatoAzienda":1,"Identifier":{"Id":"276844","Type":1,"Crypt":"aQjbg2cKCayA2omfMbyCbSIVzJ+PhbgV519gr5W7IvZJw5iEwqYZnEO41JfuzlK8","Hash":"2E806A00153F26FCC8A4DC8B49AC8CB2BD65807A923EA55E14DC2A8017E210F9"}}}];
    var PROFILABLE_DISPOSIZIONI = {"CAUSALE_VALUTARIA":[{"K":"9984","V":"Acquisti/vendite tra banche residenti di altre attività sull'estero MV - 9984"},{"K":"9983","V":"Acquisti/vendite tra banche residenti di valori mobiliari e derivati MV - 9983"},{"K":"9850","V":"Acquisti/vendite, da/a banche residenti, di altre attività sull'estero MV/CVS(f) - 9850"},{"K":"9851","V":"Acquisti/vendite, da/a banche residenti, di altre attività sull'estero MV/CVS(f) - 9851"},{"K":"9849","V":"Acquisti/vendite, da/a banche residenti, di beni e diritti immobiliari MV/CVS(f) - 9849"},{"K":"9842","V":"Acquisti/vendite, da/a banche residenti, di partecipazioni MV/CVS(f) - 9842"},{"K":"9843","V":"Acquisti/vendite, da/a banche residenti, di partecipazioni MV/CVS(f) - 9843"},{"K":"9848","V":"Acquisti/vendite, da/a banche residenti, di strumenti derivati MV/CVS(f) - 9848"},{"K":"9846","V":"Acquisti/vendite, da/a banche residenti, di strumenti di mercato monetario MV/CVS(f) - 9846"},{"K":"9847","V":"Acquisti/vendite, da/a banche residenti, di strumenti di mercato monetario MV/CVS(f) - 9847"},{"K":"9844","V":"Acquisti/vendite, da/a banche residenti, di titoli azionari MV/CVS(f) - 9844"},{"K":"9845","V":"Acquisti/vendite, da/a banche residenti, di titoli obbligazionari MV/CVS(f) - 9845"},{"K":"23","V":"Acquisto di merce all'estero che non viene importata CVS(m) - 23"},{"K":"21","V":"Acquisto di merce all'estero per integrazione forniture CVS(m) - 21"},{"K":"22","V":"Acquisto di merce all'estero per la rivendita in transito (transito acquisto) CVS(m) - 22"},{"K":"7032","V":"Acquisto/vendita contro euro di BB in valuta con banche residenti MV - 7032"},{"K":"7031","V":"Acquisto/vendita contro euro di BB in valuta con cambiavalute residenti MV - 7031"},{"K":"7030","V":"Acquisto/vendita contro euro di BB in valuta con clientela residente MV - 7030"},{"K":"7033","V":"Acquisto/vendita contro euro di BB in valuta con non residenti MV - 7033"},{"K":"7034","V":"Acquisto/vendita di BB in valuta con banche residenti MV - 7034"},{"K":"7035","V":"Acquisto/vendita di BB in valuta con non residenti MV - 7035"},{"K":"9960","V":"Adeguamento valore contabile crediti MV - 9960"},{"K":"8661","V":"Altre attività a breve termine (investimenti esteri)- banche MV - 8661"},{"K":"661","V":"Altre attività a breve termine (investimenti esteri)- non banche MV/CVS(f) - 661"},{"K":"8660","V":"Altre attività a breve termine (investimenti italiani) - banche MV - 8660"},{"K":"660","V":"Altre attività a breve termine (investimenti italiani)- non banche MV/CVS(f) - 660"},{"K":"8663","V":"Altre attività a medio e lungo termine (investimenti esteri) - banche MV - 8663"},{"K":"663","V":"Altre attività a medio e lungo termine (investimenti esteri)- non banche MV/CVS(f) - 663"},{"K":"8662","V":"Altre attività a medio e lungo termine (investimenti italiani) -banche MV - 8662"},{"K":"662","V":"Altre attività a medio e lungo termine (investimenti italiani)- non banche MV/CVS(f) - 662"},{"K":"6619","V":"Altre transazioni governative MV/CVS(nm) - 6619"},{"K":"628","V":"Altri regolamenti connessi a strumenti derivati MV/CVS(f) - 628"},{"K":"629","V":"Altri regolamenti connessi a strumenti derivati MV/CVS(f) - 629"},{"K":"8629","V":"Altri regolamenti connessi a strumenti derivati emessi da non residenti - banche MV - 8629"},{"K":"8628","V":"Altri regolamenti connessi a strumenti derivati emessi da residenti - banche MV - 8628"},{"K":"1112","V":"Altri regolamenti per tecnologia MV/CVS(nm) - 1112"},{"K":"6708","V":"Altri servizi agricoli ed estrattivi MV/CVS(nm) - 6708"},{"K":"6685","V":"Altri servizi aziendali MV/CVS(nm) - 6685"},{"K":"1306","V":"Altri servizi culturali MV/CVS(nm) - 1306"},{"K":"6709","V":"Altri servizi forniti tra imprese controllate MV/CVS(nm) - 6709"},{"K":"6711","V":"Altri trasferimenti in conto capitale MV - 6711"},{"K":"642","V":"Ammortamenti di prestiti a breve termine - non banche MV/CVS(f) - 642"},{"K":"643","V":"Ammortamenti di prestiti a medio e lungo termine - non banche MV/CVS(f) - 643"},{"K":"8642","V":"Ammortamenti di prestiti e finanziamenti a breve termine con non residenti - banche MV - 8642"},{"K":"8643","V":"Ammortamenti di prestiti e finanziamenti a medio e lungo termine - banche MV - 8643"},{"K":"9913","V":"Arbitraggi MV - 9913"},{"K":"6686","V":"Assegni, effetti, altri valori cambiari non onorati MV - 6686"},{"K":"1108","V":"Assistenza tecnica connessa a cessioni e diritti di sfruttamento MV/CVS(nm) - 1108"},{"K":"8602","V":"Assunzione di partecipazioni al capitale di OO.II. non monetari - banche MV - 8602"},{"K":"602","V":"Assunzione di partecipazioni al capitale di OO.II. non monetari - non banche MV/CVS(f) - 602"},{"K":"600","V":"Assunzione di partecipazioni non rappresentate da titoli - non banche MV/CVS(f) - 600"},{"K":"8600","V":"Assunzione di partecipazioni rappresentate o meno da titoli - banche MV - 8600"},{"K":"1307","V":"Audiovisivi e servizi collegati MV/CVS(nm) - 1307"},{"K":"204","V":"Biglietti aerei MV/CVS(nm) - 204"},{"K":"202","V":"Biglietti marittimi MV/CVS(nm) - 202"},{"K":"212","V":"Biglietti terrestri MV/CVS(nm) - 212"},{"K":"218","V":"Bunkeraggi e provviste di bordo MV/CVS(nm) - 218"},{"K":"6630","V":"Canoni e fitti MV/CVS(nm) - 6630"},{"K":"8603","V":"Cessione di partecipazioni al capitale di OO.II. non monetari - banche MV - 8603"},{"K":"603","V":"Cessione di partecipazioni al capitale di OO.II. non monetari - non banche MV/CVS(f) - 603"},{"K":"601","V":"Cessione di partecipazioni non rappresentate da titoli - non banche MV/CVS(f) - 601"},{"K":"8601","V":"Cessione di partecipazioni rappresentate o meno da titoli - banche MV - 8601"},{"K":"1100","V":"Cessioni di brevetti MV/CVS(nm) - 1100"},{"K":"1106","V":"Cessioni di invenzioni MV/CVS(nm) - 1106"},{"K":"1102","V":"Cessioni di know how MV/CVS(nm) - 1102"},{"K":"1118","V":"Cessioni di marchi di fabbrica, modelli e disegni MV/CVS(nm) - 1118"},{"K":"8706","V":"Commissioni e competenze (banche) MV - 8706"},{"K":"9855","V":"Commissioni e competenze in valuta addebitate/accreditate a controparte residente MV - 9855"},{"K":"6632","V":"Compensi di mediazione MV/CVS(nm) - 6632"},{"K":"6633","V":"Compensi per contratti d'agenzia MV/CVS(nm) - 6633"},{"K":"6634","V":"Compensi per contratti di commissione MV/CVS(nm) - 6634"},{"K":"6706","V":"Compensi per servizi finanziari MV/CVS(nm) - 6706"},{"K":"6631","V":"Compensi vari MV/CVS(nm) - 6631"},{"K":"6620","V":"Contributi da/a Organismi Internazionali MV/CVS(nm) - 6620"},{"K":"6605","V":"Contributi previdenziali MV/CVS(nm) - 6605"},{"K":"3660","V":"D.L. 25.9.01 n.350 - Altre attività a breve termine (investimenti italiani)- non banche MV/CVS(f) - 3660"},{"K":"3662","V":"D.L. 25.9.01 n.350 - Altre attività a medio e lungo termine (investimenti italiani)- non banche MV/CVS(f) - 3662"},{"K":"3629","V":"D.L. 25.9.01 n.350 - Altri regolamenti connessi a strumenti derivati MV/CVS(f) - 3629"},{"K":"3642","V":"D.L. 25.9.01 n.350 - Ammortamenti di prestiti a breve termine - non banche MV/CVS(f) - 3642"},{"K":"3643","V":"D.L. 25.9.01 n.350 - Ammortamenti di prestiti a medio e lungo termine - non banche MV/CVS(f) - 3643"},{"K":"3601","V":"D.L. 25.9.01 n.350 - Cessione di partecipazioni non rappresentate da titoli - non banche MV/CVS(nr) - 3601"},{"K":"3609","V":"D.L. 25.9.01 n.350 - Disinvestimenti di strumenti mercato monetario con codifica ISIN - non banche MV/CVS(nr) - 3609"},{"K":"3611","V":"D.L. 25.9.01 n.350 - Disinvestimenti di strumenti mercato monetario senza codifica ISIN - non banche MV/CVS(nr) - 3611"},{"K":"3605","V":"D.L. 25.9.01 n.350 - Disinvestimenti di titoli azionari e quote di fondi comuni - non banche MV/CVS(nr) - 3605"},{"K":"3607","V":"D.L. 25.9.01 n.350 - Disinvestimenti di titoli obbligazionari - non banche MV/CVS(nr) - 3607"},{"K":"3651","V":"D.L. 25.9.01 n.350 - Disinvestimenti in beni e diritti immobiliari - non banche MV/CVS(f) - 3651"},{"K":"3627","V":"D.L. 25.9.01 n.350 - Liquidazione per differenza su altri strumenti derivati MV/CVS(f) - 3627"},{"K":"3632","V":"D.L. 25.9.01 n.350 - Liquidazione per differenza su strumenti derivati MV/CVS(f) - 3632"},{"K":"3622","V":"D.L. 25.9.01 n.350 - Margini iniziali su strumenti derivati trattati su mercati esteri - non banche MV/CVS(f) - 3622"},{"K":"3652","V":"D.L. 25.9.01 n.350 - Movimentazione C/C e depositi all'estero di residenti - non banche MV/CVS(f) - 3652"},{"K":"3625","V":"D.L. 25.9.01 n.350 - Premi su strumenti derivati emessi da non residenti - non banche MV/CVS(f) - 3625"},{"K":"3645","V":"D.L. 25.9.01 n.350 - Riporti e pronti contro termine su titoli esteri (estinzioni) - non banche MV/CVS(f) - 3645"},{"K":"3647","V":"D.L. 25.9.01 n.350 - Riporti e pronti contro termine su titoli italiani (estinzioni) - non banche MV/CVS(f) - 3647"},{"K":"3308","V":"D.L. 25.9.01 n.350 - Versamento di BB in euro e valuta MV - 3308"},{"K":"3310","V":"D.L. 25.9.01 n.350 - Versamento di mezzi di pagamento in euro e valuta MV - 3310"},{"K":"8528","V":"Dietimi regolati con non residenti su valori mobiliari emessi da non residenti - banche MV - 8528"},{"K":"528","V":"Dietimi regolati con non residenti su valori mobiliari emessi da non residenti - non banche MV/CVS(nm) - 528"},{"K":"8527","V":"Dietimi regolati con non residenti su valori mobiliari emessi da residenti - banche MV/CVS(nm) - 8527"},{"K":"527","V":"Dietimi regolati con non residenti su valori mobiliari emessi da residenti - non banche MV/CVS(nm) - 527"},{"K":"9856","V":"Dietimi regolati con residenti su valori mobiliari emessi da non residenti MV/CVS(nm) - 9856"},{"K":"1203","V":"Diritti d'autore - altri MV/CVS(nm) - 1203"},{"K":"1202","V":"Diritti d'autore - opere letterarie MV/CVS(nm) - 1202"},{"K":"1201","V":"Diritti d'autore - opere musicali MV/CVS(nm) - 1201"},{"K":"1305","V":"Diritti d'immagine MV/CVS(nm) - 1305"},{"K":"1101","V":"Diritti di sfruttamento di brevetti MV/CVS(nm) - 1101"},{"K":"1117","V":"Diritti di sfruttamento di marchi di fabbrica, modelli, disegni e know-how MV/CVS(nm) - 1117"},{"K":"8609","V":"Disinvestimenti di strumenti mercato monetario con codifica ISIN - banche (2) MV/CVS(nr) - 8609"},{"K":"609","V":"Disinvestimenti di strumenti mercato monetario con codifica ISIN - non banche MV/CVS(f) - 609"},{"K":"8611","V":"Disinvestimenti di strumenti mercato monetario senza codifica ISIN - banche (2) MV/CVS(nr) - 8611"},{"K":"611","V":"Disinvestimenti di strumenti mercato monetario senza codifica ISIN - non banche MV/CVS(f) - 611"},{"K":"8605","V":"Disinvestimenti di titoli azionari e quote di fondi comuni - banche (2) MV/CVS(nr) - 8605"},{"K":"605","V":"Disinvestimenti di titoli azionari e quote di fondi comuni - non banche MV/CVS(f) - 605"},{"K":"8607","V":"Disinvestimenti di titoli obbligazionari - banche (2) MV/CVS(nr) - 8607"},{"K":"607","V":"Disinvestimenti di titoli obbligazionari - non banche MV/CVS(f) - 607"},{"K":"8651","V":"Disinvestimenti in beni e diritti immobiliari - banche MV - 8651"},{"K":"651","V":"Disinvestimenti in beni e diritti immobiliari - non banche MV/CVS(f) - 651"},{"K":"8521","V":"Dividendi - banche MV - 8521"},{"K":"521","V":"Dividendi - non banche MV/CVS(nm) - 521"},{"K":"640","V":"Erogazioni di prestiti a breve termine - non banche MV/CVS(f) - 640"},{"K":"641","V":"Erogazioni di prestiti a medio e lungo termine - non banche MV/CVS(f) - 641"},{"K":"8640","V":"Erogazioni di prestiti e finanziamenti a breve termine con non residenti - banche MV - 8640"},{"K":"8641","V":"Erogazioni di prestiti e finanziamenti a medio e lungo termine - banche MV - 8641"},{"K":"8670","V":"Escussione fidejussioni per operazioni correnti mercantili - banche MV - 8670"},{"K":"670","V":"Escussione fidejussioni per operazioni correnti mercantili - non banche MV/CVS(nm) - 670"},{"K":"8671","V":"Escussione fidejussioni per operazioni correnti non mercantili - banche MV - 8671"},{"K":"671","V":"Escussione fidejussioni per operazioni correnti non mercantili - non banche MV/CVS(nm) - 671"},{"K":"8672","V":"Escussione fidejussioni per operazioni finanziarie - banche MV - 8672"},{"K":"672","V":"Escussione fidejussioni per operazioni finanziarie - non banche MV/CVS(nm) - 672"},{"K":"8673","V":"Escussione fidejussioni per operazioni interne o estero / estero - banche MV - 8673"},{"K":"673","V":"Escussione fidejussioni per operazioni interne o estero / estero - non banche MV/CVS(nm) - 673"},{"K":"30","V":"Esportazione in definitiva CVS(m) - 30"},{"K":"31","V":"Esportazione in leasing CVS(m) - 31"},{"K":"32","V":"Esportazione per esecuzione di lavori all'estero CVS(m) - 32"},{"K":"33","V":"Esportazione temporanea per lavorazione per conto di residenti CVS(m) - 33"},{"K":"9815","V":"Finanziamenti in valuta a residenti per altri motivi MV - 9815"},{"K":"9814","V":"Finanziamenti in valuta a residenti per esportazioni di beni e servizi MV - 9814"},{"K":"9813","V":"Finanziamenti in valuta a residenti per importazioni di beni e servizi MV - 9813"},{"K":"9820","V":"Finanziamenti in valuta passati a sofferenza / trasformati in partecipazione MV - 9820"},{"K":"1110","V":"Formazione del personale MV/CVS(nm) - 1110"},{"K":"10","V":"Importazione in definitiva CVS(m) - 10"},{"K":"11","V":"Importazione in leasing CVS(m) - 11"},{"K":"13","V":"Importazione in temporanea (o in regime di sospensione fiscale) CVS(m) - 13"},{"K":"15","V":"Importazioni temporanee diverse CVS(m) - 15"},{"K":"6636","V":"Imposte e tasse MV/CVS(nm) - 6636"},{"K":"9981","V":"Incasso di effetti a carico di non residenti scontati a residenti MV - 9981"},{"K":"6675","V":"Indennizzi SACE MV/CVS(nm) - 6675"},{"K":"6638","V":"Indennizzi, penali, risarcimento danni MV/CVS(nm) - 6638"},{"K":"6661","V":"Ingaggi e premi a sportivi MV/CVS(nm) - 6661"},{"K":"524","V":"Interessi su depositi - non banche MV/CVS(nm) - 524"},{"K":"8524","V":"Interessi su depositi e conti - banche MV - 8524"},{"K":"512","V":"Interessi su prestiti - non banche MV/CVS(nm) - 512"},{"K":"8512","V":"Interessi su prestiti e finanziamenti - banche MV - 8512"},{"K":"9854","V":"Interessi, redditi, dividendi in valuta con controparte residente MV - 9854"},{"K":"8650","V":"Investimenti in beni e diritti immobiliari - banche MV - 8650"},{"K":"650","V":"Investimenti in beni e diritti immobiliari - non banche MV/CVS(f) - 650"},{"K":"8608","V":"Investimenti in strumenti mercato monetario con codifica ISIN - banche (1) MV/CVS(nr) - 8608"},{"K":"608","V":"Investimenti in strumenti mercato monetario con codifica ISIN - non banche MV/CVS(f) - 608"},{"K":"8610","V":"Investimenti in strumenti mercato monetario senza codifica ISIN - banche (1) MV/CVS(nr) - 8610"},{"K":"610","V":"Investimenti in strumenti mercato monetario senza codifica ISIN - non banche MV/CVS(f) - 610"},{"K":"8604","V":"Investimenti in titoli azionari e quote di fondi comuni - banche (1) MV/CVS(nr) - 8604"},{"K":"604","V":"Investimenti in titoli azionari e quote di fondi comuni - non banche MV/CVS(f) - 604"},{"K":"8606","V":"Investimenti in titoli obbligazionari - banche (1) MV/CVS(nr) - 8606"},{"K":"606","V":"Investimenti in titoli obbligazionari - non banche MV/CVS(f) - 606"},{"K":"1109","V":"Invio di tecnici ed esperti MV/CVS(nm) - 1109"},{"K":"106","V":"Lavorazioni per conto MV - 106"},{"K":"6701","V":"Lavori e impianti all'estero MV/CVS(nm) - 6701"},{"K":"6702","V":"Lavori e impianti in Italia MV/CVS(nm) - 6702"},{"K":"114","V":"Leasing (non banche) MV - 114"},{"K":"8114","V":"Leasing finanziario (banche) MV - 8114"},{"K":"8115","V":"Leasing operativo (banche) MV - 8115"},{"K":"8626","V":"Liquidazione per differenza su altri strumenti derivati MV - 8626"},{"K":"8627","V":"Liquidazione per differenza su altri strumenti derivati MV - 8627"},{"K":"626","V":"Liquidazione per differenza su altri strumenti derivati MV/CVS(f) - 626"},{"K":"627","V":"Liquidazione per differenza su altri strumenti derivati MV/CVS(f) - 627"},{"K":"8631","V":"Liquidazione per differenza su strumenti derivati MV - 8631"},{"K":"8632","V":"Liquidazione per differenza su strumenti derivati MV - 8632"},{"K":"631","V":"Liquidazione per differenza su strumenti derivati MV/CVS(f) - 631"},{"K":"632","V":"Liquidazione per differenza su strumenti derivati MV/CVS(f) - 632"},{"K":"7051","V":"MP emessi da non residenti in euro e valuta negoziati contro euro con cambiavalute residenti MV - 7051"},{"K":"7053","V":"MP emessi da non residenti in euro e valuta negoziati contro euro con non residenti MV - 7053"},{"K":"7050","V":"MP emessi da non residenti in euro e valuta negoziati contro euro con residenti MV - 7050"},{"K":"7054","V":"MP emessi da non residenti in euro e valuta versati su conti di non residenti MV - 7054"},{"K":"7052","V":"MP emessi da non residenti in euro e valuta versati su conti di residenti MV - 7052"},{"K":"7055","V":"MP emessi da residenti in euro e valuta negoziati contro euro con non residenti MV - 7055"},{"K":"7056","V":"MP emessi da residenti in euro e valuta versati su conti di non residenti MV - 7056"},{"K":"9966","V":"Mancato esercizio di opzioni MV - 9966"},{"K":"1113","V":"Manutenzione e riparazione computer MV/CVS(nm) - 1113"},{"K":"8621","V":"Margini giornalieri su strumenti derivati emessi da non residenti - banche MV - 8621"},{"K":"621","V":"Margini giornalieri su strumenti derivati emessi da non residenti - non banche MV/CVS(f) - 621"},{"K":"620","V":"Margini giornalieri su strumenti derivati emessi da residenti - non banche MV/CVS(f) - 620"},{"K":"8622","V":"Margini iniziali su strumenti derivati trattati su mercati esteri - banche MV - 8622"},{"K":"622","V":"Margini iniziali su strumenti derivati trattati su mercati esteri - non banche MV/CVS(f) - 622"},{"K":"623","V":"Margini iniziali su strumenti derivati trattati su mercato italiano - non banche MV/CVS(f) - 623"},{"K":"652","V":"Movimentazione C/C e depositi all'estero di residenti - non banche MV/CVS(f) - 652"},{"K":"8694","V":"Movimentazione di conti \"loro\" MV - 8694"},{"K":"8692","V":"Movimentazione di conti \"nostri\" MV - 8692"},{"K":"8684","V":"Movimentazione di depositi attivi a breve termine - banche MV - 8684"},{"K":"8686","V":"Movimentazione di depositi attivi a medio/lungo termine - banche MV - 8686"},{"K":"8685","V":"Movimentazione di depositi passivi a breve termine - banche MV - 8685"},{"K":"8687","V":"Movimentazione di depositi passivi a medio/lungo termine - banche MV - 8687"},{"K":"9980","V":"Negoziazioni con non residenti di effetti a carico di residenti MV - 9980"},{"K":"9901","V":"Negoziazioni valuta contro euro con non residenti MV - 9901"},{"K":"9905","V":"Negoziazioni valuta contro euro con residenti MV - 9905"},{"K":"203","V":"Noli e noleggi aerei MV/CVS(nm) - 203"},{"K":"201","V":"Noli e noleggi marittimi MV/CVS(nm) - 201"},{"K":"205","V":"Noli e noleggi terrestri MV/CVS(nm) - 205"},{"K":"207","V":"Noli e noleggi vari MV/CVS(nm) - 207"},{"K":"664","V":"Operazioni di non residenti sul mercato mobiliare italiano MV/CVS(f) - 664"},{"K":"8664","V":"Operazioni di non residenti sul mercato mobiliare italiano MV/CVS(f) - 8664"},{"K":"6612","V":"Operazioni di transito MV - 6612"},{"K":"7010","V":"Operazioni di valore inferiore a 12.500 euro (soglia di esenzione) MV - 7010"},{"K":"8110","V":"Oro non monetario (banche) MV - 8110"},{"K":"6687","V":"Parcelle professionali MV/CVS(nm) - 6687"},{"K":"6601","V":"Pensioni MV/CVS(nm) - 6601"},{"K":"6690","V":"Perdite di esercizio MV/CVS(nm) - 6690"},{"K":"6716","V":"Premi lordi su altre assicurazioni MV/CVS(nm) - 6716"},{"K":"6714","V":"Premi lordi su assicurazioni trasporto merci MV/CVS(nm) - 6714"},{"K":"6703","V":"Premi lordi su assicurazioni vita e fondi pensione MV/CVS(nm) - 6703"},{"K":"6718","V":"Premi lordi su riassicurazioni MV/CVS(nm) - 6718"},{"K":"8625","V":"Premi su strumenti derivati emessi da non residenti - banche MV - 8625"},{"K":"625","V":"Premi su strumenti derivati emessi da non residenti - non banche MV/CVS(f) - 625"},{"K":"8624","V":"Premi su strumenti derivati emessi da residenti - banche MV/CVS(nr) - 8624"},{"K":"624","V":"Premi su strumenti derivati emessi da residenti - non banche MV/CVS(f) - 624"},{"K":"6713","V":"Proventi non classificati MV - 6713"},{"K":"6688","V":"Recupero crediti MV/CVS(nm) - 6688"},{"K":"8525","V":"Redditi su altri investimenti - banche MV - 8525"},{"K":"525","V":"Redditi su altri investimenti - non banche MV/CVS(nm) - 525"},{"K":"8522","V":"Redditi su altri titoli obbligazionari - banche MV - 8522"},{"K":"522","V":"Redditi su altri titoli obbligazionari - non banche MV/CVS(nm) - 522"},{"K":"8516","V":"Redditi su partecipazioni - banche MV - 8516"},{"K":"516","V":"Redditi su partecipazioni non rappresentate da titoli - non banche MV/CVS(nm) - 516"},{"K":"8523","V":"Redditi su strumenti di mercato monetario - banche MV - 8523"},{"K":"523","V":"Redditi su strumenti di mercato monetario - non banche MV/CVS(nm) - 523"},{"K":"8526","V":"Redditi su titoli obbligazionari italiani collocati all'estero - banche MV - 8526"},{"K":"526","V":"Redditi su titoli obbligazionari italiani collocati all'estero - non banche MV/CVS(nm) - 526"},{"K":"6712","V":"Regolamenti automatizzati con non residenti MV - 6712"},{"K":"9939","V":"Regolamenti automatizzati tra non residenti MV - 9939"},{"K":"320","V":"Regolamenti per emissioni travellers' cheque MV - 320"},{"K":"319","V":"Regolamenti tra emittenti carte di credito MV/CVS(nm) - 319"},{"K":"104","V":"Regolamento per merci MV - 104"},{"K":"17","V":"Reimportazione di merce esportata in temporanea ad altro titolo CVS(m) - 17"},{"K":"16","V":"Reimportazione di merce lavorata all'estero per conto di residenti CVS(m) - 16"},{"K":"6710","V":"Remissione di debiti (banche) MV - 6710"},{"K":"7015","V":"Restituzione all'estero di somme non assegnate a residenti MV - 7015"},{"K":"6679","V":"Ricerche di mercato MV/CVS(nm) - 6679"},{"K":"36","V":"Riesportazione di merce importata in temporanea ad altro titolo CVS(m) - 36"},{"K":"35","V":"Riesportazione di merce lavorata in Italia per conto di non residenti CVS(m) - 35"},{"K":"7058","V":"Rimessa/incasso di MP emessi da non residenti MV - 7058"},{"K":"7057","V":"Rimessa/incasso di MP emessi da residenti MV - 7057"},{"K":"6689","V":"Rimesse emigrati ed immigrati MV/CVS(nm) - 6689"},{"K":"6624","V":"Rimpatrio / espatrio definitivo MV - 6624"},{"K":"113","V":"Riparazioni MV/CVS(nm) - 113"},{"K":"9840","V":"Riporti e pronti contro termine in valua su titoli esteri MV - 9840"},{"K":"9841","V":"Riporti e pronti contro termine in valuta su titoli esteri MV - 9841"},{"K":"9852","V":"Riporti e pronti contro termine in valuta su titoli italiani MV - 9852"},{"K":"9853","V":"Riporti e pronti contro termine in valuta su titoli italiani MV - 9853"},{"K":"8644","V":"Riporti e pronti contro termine su titoli esteri (accensioni) - banche MV - 8644"},{"K":"644","V":"Riporti e pronti contro termine su titoli esteri (accensioni) - non banche MV/CVS(f) - 644"},{"K":"8645","V":"Riporti e pronti contro termine su titoli esteri (estinzioni) - banche MV - 8645"},{"K":"645","V":"Riporti e pronti contro termine su titoli esteri (estinzioni) - non banche MV/CVS(f) - 645"},{"K":"8646","V":"Riporti e pronti contro termine su titoli italiani (accensioni) - banche MV - 8646"},{"K":"646","V":"Riporti e pronti contro termine su titoli italiani (accensioni) - non banche MV/CVS(f) - 646"},{"K":"8647","V":"Riporti e pronti contro termine su titoli italiani (estinzioni) - banche MV - 8647"},{"K":"647","V":"Riporti e pronti contro termine su titoli italiani (estinzioni) - non banche MV/CVS(f) - 647"},{"K":"6717","V":"Risarcimenti su altre assicurazioni MV/CVS(nm) - 6717"},{"K":"6715","V":"Risarcimenti su assicurazioni trasporto merci MV/CVS(nm) - 6715"},{"K":"6704","V":"Risarcimenti su assicurazioni vita e fondi pensione MV/CVS(nm) - 6704"},{"K":"6719","V":"Risarcimenti su riassicurazioni MV/CVS(nm) - 6719"},{"K":"6602","V":"Salari e stipendi MV/CVS(nm) - 6602"},{"K":"6647","V":"Saldi di compensazione MV - 6647"},{"K":"6691","V":"Scioglimento di contratti, pagamento d'indebito MV/CVS(nm) - 6691"},{"K":"6705","V":"Servizi ausiliari di assicurazione MV/CVS(nm) - 6705"},{"K":"6680","V":"Servizi di consulenza fiscale e contabile MV/CVS(nm) - 6680"},{"K":"1114","V":"Servizi di data processing e data base MV/CVS(nm) - 1114"},{"K":"1116","V":"Servizi di informazione MV/CVS(nm) - 1116"},{"K":"6683","V":"Servizi di ricerca e sviluppo MV/CVS(nm) - 6683"},{"K":"6676","V":"Servizi di telecomunicazione MV/CVS(nm) - 6676"},{"K":"6681","V":"Servizi legali MV/CVS(nm) - 6681"},{"K":"221","V":"Servizi logistici e di assistenza al trasporto - aerei MV/CVS(nm) - 221"},{"K":"222","V":"Servizi logistici e di assistenza al trasporto - altri MV/CVS(nm) - 222"},{"K":"220","V":"Servizi logistici e di assistenza al trasporto - marittimi MV/CVS(nm) - 220"},{"K":"6700","V":"Servizi postali e di corriere MV/CVS(nm) - 6700"},{"K":"6682","V":"Servizi pubblicitari MV/CVS(nm) - 6682"},{"K":"1115","V":"Servizi vari informatici MV/CVS(nm) - 1115"},{"K":"1107","V":"Software MV/CVS(nm) - 1107"},{"K":"7014","V":"Somme a disposizione di residenti da classificare MV - 7014"},{"K":"6622","V":"Spese militari MV/CVS(nm) - 6622"},{"K":"6618","V":"Spese per consolati, ambasciate ecc. MV/CVS(nm) - 6618"},{"K":"6648","V":"Spese sanitarie MV - 6648"},{"K":"6621","V":"Stipendi personale consolati/ambasciate all'estero MV - 6621"},{"K":"801","V":"Storni per operazioni correnti mercantili MV - 801"},{"K":"802","V":"Storni per operazioni correnti non mercantili MV - 802"},{"K":"803","V":"Storni per operazioni finanziarie MV - 803"},{"K":"1111","V":"Studi tecnici ed engineering MV/CVS(nm) - 1111"},{"K":"6693","V":"Successioni e donazioni MV/CVS(nm) - 6693"},{"K":"6635","V":"Sussidi e regalie MV/CVS(nm) - 6635"},{"K":"6692","V":"Trasferimenti a seguito di provvedimenti giudiziari MV/CVS(nm) - 6692"},{"K":"307","V":"Trasferimenti di banconote di paesi aderenti all'UEM MV - 307"},{"K":"308","V":"Trasferimenti di banconote in EURO MV - 308"},{"K":"302","V":"Trasferimenti di banconote italiane MV - 302"},{"K":"8690","V":"Trasferimento saldi su conti di regolamento netto (EBA, ecc.) MV - 8690"},{"K":"39","V":"Trasformazione in definitiva con regolamento di altre temporanee esportazioni CVS(m) - 39"},{"K":"20","V":"Trasformazione in definitiva con regolamento di altre temporanee importazioni CVS(m) - 20"},{"K":"38","V":"Trasformazione in definitiva con regolamento di merci esportate per lavorazione CVS(m) - 38"},{"K":"19","V":"Trasformazione in definitiva con regolamento di merci importate per lavorazione CVS(m) - 19"},{"K":"6707","V":"Trattamento dei rifiuti e disinquinamento MV/CVS(nm) - 6707"},{"K":"9962","V":"Variazione per adeguamento contabile titoli in portafoglio MV - 9962"},{"K":"41","V":"Vendita di merce all'estero acquistata per il transito (transito vendita) CVS(m) - 41"},{"K":"42","V":"Vendita di merce all'estero non importata CVS(m) - 42"},{"K":"40","V":"Vendita di merce che non viene esportata CVS(m) - 40"},{"K":"7037","V":"Versamenti/prelevamenti di BB Euro su/da conti di non residenti MV - 7037"},{"K":"7036","V":"Versamenti/prelevamenti di BB in valuta su/da conti di residenti MV - 7036"},{"K":"300","V":"Viaggi MV/CVS(nm) - 300"},{"K":"12","V":"importazione per esecuzione di lavori in Italia CVS(m) - 12"},{"K":"24","V":"nuovi esiti Bollettino Bancari - RIFIUTATI"},{"K":"14","V":"nuovi esiti Pagamenti Esteri - RIFIUTATI"},{"K":"34","V":"nuovi esiti Ritiro Effetti - RIFIUTATI"}],"TIPO_CAUSALE_VALUTARIA":[{"K":"SNR","V":"Soggetto non residente"},{"K":"CVA","V":"assegnazione causale valutaria"},{"K":"INF","V":"inferiore al limite CVS"}],"TIPO_INDIRIZZO":[{"K":"PBOX","V":"Indirizzo della casella postale"},{"K":"DLVY","V":"Indirizzo di consegna"},{"K":"MLTO","V":"Indirizzo di corrispondenza postale"},{"K":"BIZZ","V":"Indirizzo di domicilio"},{"K":"HOME","V":"Indirizzo di residenza"},{"K":"ADDR","V":"Indirizzo postale completo"}],"NAZIONE":[{"K":"AF","V":"Afghanistan"},{"K":"AL","V":"Albania"},{"K":"DZ","V":"Algeria"},{"K":"AD","V":"Andorra"},{"K":"AO","V":"Angola"},{"K":"AI","V":"Anguilla"},{"K":"AQ","V":"Antartide"},{"K":"AG","V":"Antigua e Barbuda"},{"K":"SA","V":"Arabia Saudita"},{"K":"AR","V":"Argentina"},{"K":"AM","V":"Armenia"},{"K":"AW","V":"Aruba"},{"K":"AU","V":"Australia"},{"K":"AT","V":"Austria"},{"K":"AZ","V":"Azerbaigian"},{"K":"BS","V":"Bahamas"},{"K":"BH","V":"Bahrain"},{"K":"BD","V":"Bangladesh"},{"K":"BB","V":"Barbados"},{"K":"BE","V":"Belgio"},{"K":"BZ","V":"Belize"},{"K":"BJ","V":"Benin"},{"K":"BM","V":"Bermuda"},{"K":"BT","V":"Bhutan"},{"K":"BY","V":"Bielorussia"},{"K":"MM","V":"Birmania"},{"K":"BO","V":"Bolivia"},{"K":"BA","V":"Bosnia ed Erzegovina"},{"K":"BW","V":"Botswana"},{"K":"BR","V":"Brasile"},{"K":"BN","V":"Brunei"},{"K":"BG","V":"Bulgaria"},{"K":"BF","V":"Burkina Faso"},{"K":"BI","V":"Burundi"},{"K":"KH","V":"Cambogia"},{"K":"CM","V":"Camerun"},{"K":"CA","V":"Canada"},{"K":"CV","V":"Capo Verde"},{"K":"TD","V":"Ciad"},{"K":"CL","V":"Cile"},{"K":"CN","V":"Cina"},{"K":"CY","V":"Cipro"},{"K":"VA","V":"Città del Vaticano"},{"K":"CO","V":"Colombia"},{"K":"KP","V":"Corea del Nord"},{"K":"KR","V":"Corea del Sud"},{"K":"CR","V":"Costa Rica"},{"K":"CI","V":"Costa d'Avorio"},{"K":"HR","V":"Croazia"},{"K":"CU","V":"Cuba"},{"K":"CW","V":"Curaçao"},{"K":"DK","V":"Danimarca"},{"K":"DM","V":"Dominica"},{"K":"AE","V":"Dubai"},{"K":"EC","V":"Ecuador"},{"K":"EG","V":"Egitto"},{"K":"SV","V":"El Salvador"},{"K":"ER","V":"Eritrea"},{"K":"EE","V":"Estonia"},{"K":"ET","V":"Etiopia"},{"K":"FJ","V":"Figi"},{"K":"PH","V":"Filippine"},{"K":"FI","V":"Finlandia"},{"K":"FR","V":"Francia"},{"K":"GA","V":"Gabon"},{"K":"GM","V":"Gambia"},{"K":"GE","V":"Georgia"},{"K":"GS","V":"Georgia del Sud e isole Sandwich meridionali"},{"K":"DE","V":"Germania"},{"K":"GH","V":"Ghana"},{"K":"JM","V":"Giamaica"},{"K":"JP","V":"Giappone"},{"K":"GI","V":"Gibilterra"},{"K":"DJ","V":"Gibuti"},{"K":"JO","V":"Giordania"},{"K":"GR","V":"Grecia"},{"K":"GD","V":"Grenada"},{"K":"GL","V":"Groenlandia"},{"K":"GP","V":"Guadalupa"},{"K":"GU","V":"Guam"},{"K":"GT","V":"Guatemala"},{"K":"GG","V":"Guernsey"},{"K":"GN","V":"Guinea"},{"K":"GQ","V":"Guinea Equatoriale"},{"K":"GW","V":"Guinea-Bissau"},{"K":"GY","V":"Guyana"},{"K":"GF","V":"Guyana Francese"},{"K":"HT","V":"Haiti"},{"K":"HN","V":"Honduras"},{"K":"HK","V":"Hong Kong"},{"K":"IN","V":"India"},{"K":"ID","V":"Indonesia"},{"K":"IR","V":"Iran"},{"K":"IQ","V":"Iraq"},{"K":"IE","V":"Irlanda"},{"K":"IS","V":"Islanda"},{"K":"BV","V":"Isola Bouvet"},{"K":"NF","V":"Isola Norfolk"},{"K":"CX","V":"Isola del Natale (Christmas Island)"},{"K":"IM","V":"Isola di Man"},{"K":"BQ","V":"Isole BES"},{"K":"KY","V":"Isole Cayman"},{"K":"CC","V":"Isole Cocos e Keeling"},{"K":"KM","V":"Isole Comore"},{"K":"CK","V":"Isole Cook"},{"K":"FO","V":"Isole Faer Oer"},{"K":"FK","V":"Isole Falkland"},{"K":"HM","V":"Isole Heard e McDonald"},{"K":"MP","V":"Isole Marianne Settentrionali"},{"K":"MH","V":"Isole Marshall"},{"K":"PN","V":"Isole Pitcairn"},{"K":"SB","V":"Isole Salomone"},{"K":"TC","V":"Isole Turks e Caicos"},{"K":"VI","V":"Isole Vergini Americane"},{"K":"VG","V":"Isole Vergini Britanniche"},{"K":"UM","V":"Isole minori esterne degli Stati Uniti"},{"K":"AX","V":"Isole Åland"},{"K":"IL","V":"Israele"},{"K":"IT","V":"Italia"},{"K":"JE","V":"Jersey"},{"K":"KZ","V":"Kazakistan"},{"K":"KE","V":"Kenya"},{"K":"KG","V":"Kirghizistan"},{"K":"KI","V":"Kiribati"},{"K":"KW","V":"Kuwait"},{"K":"LA","V":"Laos"},{"K":"LS","V":"Lesotho"},{"K":"LV","V":"Lettonia"},{"K":"LB","V":"Libano"},{"K":"LR","V":"Liberia"},{"K":"LY","V":"Libia"},{"K":"LI","V":"Liechtenstein"},{"K":"LT","V":"Lituania"},{"K":"LU","V":"Lussemburgo"},{"K":"MO","V":"Macao"},{"K":"MK","V":"Macedonia"},{"K":"MG","V":"Madagascar"},{"K":"MW","V":"Malawi"},{"K":"MV","V":"Maldive"},{"K":"MY","V":"Malesia"},{"K":"ML","V":"Mali"},{"K":"MT","V":"Malta"},{"K":"MA","V":"Marocco"},{"K":"MQ","V":"Martinica"},{"K":"MR","V":"Mauritania"},{"K":"MU","V":"Mauritius"},{"K":"YT","V":"Mayotte"},{"K":"MX","V":"Messico"},{"K":"MD","V":"Moldavia"},{"K":"MC","V":"Monaco"},{"K":"MN","V":"Mongolia"},{"K":"ME","V":"Montenegro"},{"K":"MS","V":"Montserrat"},{"K":"MZ","V":"Mozambico"},{"K":"NA","V":"Namibia"},{"K":"NR","V":"Nauru"},{"K":"NP","V":"Nepal"},{"K":"NI","V":"Nicaragua"},{"K":"NE","V":"Niger"},{"K":"NG","V":"Nigeria"},{"K":"NU","V":"Niue"},{"K":"NO","V":"Norvegia"},{"K":"NC","V":"Nuova Caledonia"},{"K":"NZ","V":"Nuova Zelanda"},{"K":"OM","V":"Oman"},{"K":"NL","V":"Paesi Bassi"},{"K":"PK","V":"Pakistan"},{"K":"PW","V":"Palau"},{"K":"PA","V":"Panama"},{"K":"PG","V":"Papua Nuova Guinea"},{"K":"PY","V":"Paraguay"},{"K":"PE","V":"Perù"},{"K":"PF","V":"Polinesia Francese"},{"K":"PL","V":"Polonia"},{"K":"PR","V":"Porto Rico"},{"K":"PT","V":"Portogallo"},{"K":"QA","V":"Qatar"},{"K":"GB","V":"Regno Unito"},{"K":"CZ","V":"Repubblica Ceca"},{"K":"CF","V":"Repubblica Centrafricana"},{"K":"CD","V":"Repubblica Democratica del Congo"},{"K":"CD","V":"Repubblica Democratica del Congo"},{"K":"DO","V":"Repubblica Dominicana"},{"K":"CG","V":"Repubblica del Congo"},{"K":"TW","V":"Repubblica di Cina (Taiwan)"},{"K":"RO","V":"Romania"},{"K":"RW","V":"Ruanda"},{"K":"RU","V":"Russia"},{"K":"RE","V":"Réunion"},{"K":"EH","V":"Sahara Occidentale"},{"K":"KN","V":"Saint Kitts e Nevis"},{"K":"PM","V":"Saint Pierre e Miquelon"},{"K":"VC","V":"Saint Vincent e Grenadine"},{"K":"BL","V":"Saint-Barthélemy"},{"K":"MF","V":"Saint-Martin"},{"K":"WS","V":"Samoa"},{"K":"AS","V":"Samoa Americane"},{"K":"SM","V":"San Marino"},{"K":"SH","V":"Sant'Elena"},{"K":"LC","V":"Santa Lucia"},{"K":"ST","V":"Sao Tomé e Principe"},{"K":"SN","V":"Senegal"},{"K":"RS","V":"Serbia"},{"K":"SC","V":"Seychelles"},{"K":"SL","V":"Sierra Leone"},{"K":"SG","V":"Singapore"},{"K":"SX","V":"Sint Maarten"},{"K":"SY","V":"Siria"},{"K":"SK","V":"Slovacchia"},{"K":"SI","V":"Slovenia"},{"K":"SO","V":"Somalia"},{"K":"ES","V":"Spagna"},{"K":"LK","V":"Sri Lanka"},{"K":"FM","V":"Stati Federati di Micronesia"},{"K":"US","V":"Stati Uniti d'America"},{"K":"PS","V":"Stato di Palestina"},{"K":"ZA","V":"Sudafrica"},{"K":"SD","V":"Sudan"},{"K":"SS","V":"Sudan del Sud"},{"K":"SR","V":"Suriname"},{"K":"SJ","V":"Svalbard e Jan Mayen"},{"K":"SE","V":"Svezia"},{"K":"CH","V":"Svizzera"},{"K":"SZ","V":"Swaziland"},{"K":"TJ","V":"Tagikistan"},{"K":"TZ","V":"Tanzania"},{"K":"IO","V":"Territori Britannici dell'Oceano Indiano"},{"K":"TF","V":"Territori Francesi del Sud"},{"K":"TH","V":"Thailandia"},{"K":"TL","V":"Timor Est"},{"K":"TL","V":"Timor Est"},{"K":"TG","V":"Togo"},{"K":"TK","V":"Tokelau"},{"K":"TO","V":"Tonga"},{"K":"TT","V":"Trinidad e Tobago"},{"K":"TN","V":"Tunisia"},{"K":"TR","V":"Turchia"},{"K":"TM","V":"Turkmenistan"},{"K":"TV","V":"Tuvalu"},{"K":"UA","V":"Ucraina"},{"K":"UG","V":"Uganda"},{"K":"HU","V":"Ungheria"},{"K":"UY","V":"Uruguay"},{"K":"UZ","V":"Uzbekistan"},{"K":"VU","V":"Vanuatu"},{"K":"VE","V":"Venezuela"},{"K":"VN","V":"Vietnam"},{"K":"WF","V":"Wallis e Futuna"},{"K":"YE","V":"Yemen"},{"K":"ZM","V":"Zambia"},{"K":"ZW","V":"Zimbabwe"}],"TIPO_ANAGRAFICA":[{"K":"FO","V":"FORNITORI"}],"TIPO_SOGGETTO":[{"K":"PF","V":"Persona Fisica"},{"K":"PG","V":"Persona Giuridica"}],"TIPO_CODICE_SOGGETTO":[{"K":"ALT","V":"Altro Codice"},{"K":"FIS","V":"C.Fis. / P.Iva / VAT"},{"K":"PRO","V":"CUC CBI"},{"K":"BEI","V":"Identificativo BEI"}],"TIPO_INCASSO":[{"K":"B2B","V":"B2B - Veloce"},{"K":"CORE","V":"CORE - Ordinario"}],"FREQUENZA_INCASSI":[{"K":"ADHO","V":"ADHO - Su richiesta o quando necessario"},{"K":"DAIL","V":"DAIL - Giornaliero"},{"K":"INDA","V":"INDA - diverse volte al giorno"},{"K":"MIAN","V":"MIAN - Smestrale o due volte all'anno"},{"K":"MNTH","V":"MNTH - Mensile o una volta al mese"},{"K":"QURT","V":"QURT - Trimestrale o quattro volte all'anno"},{"K":"WEEK","V":"WEEK - Settimanale"},{"K":"YEAR","V":"YEAR - Annuale (una volta all'anno)"}],"SEQUENZA_INCASSO":[{"K":"FRST","V":"FRST - Prima di una serie di incassi"},{"K":"RCUR","V":"RCUR – Per una serie di incassi"},{"K":"FNAL","V":"FNAL – Ultima di una serie di incassi"},{"K":"OOFF","V":"OOFF – Singola non ripetuta"}],"CAUSALE_INCASSO":[{"K":"ACCT","V":"ACCT - Account management"},{"K":"ADMG","V":"ADMG - Administrative Management"},{"K":"ADVA","V":"ADVA - Advance payment"},{"K":"AEMP","V":"AEMP - Active Employment Policy"},{"K":"AGRT","V":"AGRT - Agricultural transfer"},{"K":"AIRB","V":"AIRB - Air"},{"K":"ALMY","V":"ALMY - Alimony payment"},{"K":"ANNI","V":"ANNI - Annuity"},{"K":"ANTS","V":"ANTS - Anesthesia services"},{"K":"AREN","V":"AREN - Accounts  receivables  entry"},{"K":"BECH","V":"BECH - Child benefit"},{"K":"BENE","V":"BENE - Unemployment disab. benefit"},{"K":"BEXP","V":"BEXP - Business expenses"},{"K":"BLDM","V":"BLDM - Building Maintenance"},{"K":"BOCE","V":"BOCE - Back office conversion entry"},{"K":"BONU","V":"BONU - Bonus payment."},{"K":"BUSB","V":"BUSB - Bus"},{"K":"CASH","V":"CASH - Cash management transfer"},{"K":"CBFF","V":"CBFF - Capital building"},{"K":"CBTV","V":"CBTV - Cable t v bill"},{"K":"CCRD","V":"CCRD - Credit card payment"},{"K":"CDBL","V":"CDBL - Credit card bill"},{"K":"CDCB","V":"CDCB - Card paym.t with cash back"},{"K":"CDCD","V":"CDCD - Cash disbursement"},{"K":"CDCS","V":"CDCS - Cash Disbursem. with Surcharging"},{"K":"CDOC","V":"CDOC - Original credit"},{"K":"CDQC","V":"CDQC - Quasi cash"},{"K":"CFEE","V":"CFEE - Cancellation fee"},{"K":"CHAR","V":"CHAR - Charity payment"},{"K":"CLPR","V":"CLPR - Car loan principal repayment"},{"K":"CMDT","V":"CMDT - Commodity transfer"},{"K":"COLL","V":"COLL - Collection payment"},{"K":"COMC","V":"COMC - Commercial payment"},{"K":"COMM","V":"COMM - Commission"},{"K":"COMT","V":"COMT - Consum. third party paym."},{"K":"COST","V":"COST - Costs"},{"K":"CPYR","V":"CPYR - Copyright"},{"K":"CSDB","V":"CSDB - Cash disbursement"},{"K":"CSLP","V":"CSLP - Cpy social loan payment bank"},{"K":"CVCF","V":"CVCF - Convalescent care facility"},{"K":"DBTC","V":"DBTC - Debit collection payment"},{"K":"DCRD","V":"DCRD - Debit  card  payment"},{"K":"DEPT","V":"DEPT - Deposit"},{"K":"DERI","V":"DERI - Derivatives"},{"K":"DIVD","V":"DIVD - Dividend"},{"K":"DMEQ","V":"DMEQ - Durable medicale equipment"},{"K":"DNTS","V":"DNTS - Dental services"},{"K":"ELEC","V":"ELEC - Electricity bill"},{"K":"ENRG","V":"ENRG - Energies"},{"K":"ESTX","V":"ESTX - Estate tax"},{"K":"ETUP","V":"ETUP - E-Purse Top Up"},{"K":"FAND","V":"FAND - Financial Aid Natural Disaster"},{"K":"FERB","V":"FERB - Ferry"},{"K":"FREX","V":"FREX - Foreign exchange"},{"K":"GASB","V":"GASB - Gas bill"},{"K":"GDDS","V":"GDDS - Purchase sale goods"},{"K":"GDSV","V":"GDSV - Purchase sale goods/servic."},{"K":"GFRP","V":"GFRP - Guarantee Fund Rights Payment"},{"K":"GOVI","V":"GOVI - Government insurance"},{"K":"GOVT","V":"GOVT - Government payment"},{"K":"GSCB","V":"GSCB - Purchase sale G./S. cash back"},{"K":"GVEA","V":"GVEA - Austrian gov. employ cat. a"},{"K":"GVEB","V":"GVEB - Austrian gov. employ cat. b"},{"K":"GVEC","V":"GVEC - Austrian gov. employ cat. c"},{"K":"GVED","V":"GVED - Austrian gov. employ cat. d"},{"K":"GWLT","V":"GWLT - Goverment War Legislation Trans."},{"K":"HEDG","V":"HEDG - Hedging"},{"K":"HLRP","V":"HLRP - Housing loan repayment"},{"K":"HLTC","V":"HLTC - Home health care"},{"K":"HLTI","V":"HLTI - Health insurance"},{"K":"HSPC","V":"HSPC - Hospital care"},{"K":"HSTX","V":"HSTX - Housing tax"},{"K":"ICCP","V":"ICCP - Irrevocable credit card paym"},{"K":"ICRF","V":"ICRF - Intermediate care facility"},{"K":"IDCP","V":"IDCP - Irrevocable debit card paym."},{"K":"IHRP","V":"IHRP - Instalment hire purchase agr"},{"K":"INPC","V":"INPC - Insurance premium car"},{"K":"INSM","V":"INSM - Installment"},{"K":"INSU","V":"INSU - Insurance premium"},{"K":"INTC","V":"INTC - Intra company payment"},{"K":"INTE","V":"INTE - Interest"},{"K":"INTX","V":"INTX - Income tax"},{"K":"LBRI","V":"LBRI - Labor insurance"},{"K":"LICF","V":"LICF - License fee"},{"K":"LIFI","V":"LIFI - Life insurance"},{"K":"LIMA","V":"LIMA - Liquidity management"},{"K":"LOAN","V":"LOAN - Loan"},{"K":"LOAR","V":"LOAR - Loan repayment"},{"K":"LTCF","V":"LTCF - Long term care facility"},{"K":"MDCS","V":"MDCS - Medical services"},{"K":"MSVC","V":"MSVC - Multiple service types"},{"K":"MTUP","V":"MTUP - Mobile Top Up"},{"K":"NETT","V":"NETT - Netting"},{"K":"NITX","V":"NITX - Net income tax"},{"K":"NOWS","V":"NOWS - Not otherwise specified"},{"K":"NWCH","V":"NWCH - Network charge"},{"K":"NWCM","V":"NWCM - Network communication"},{"K":"OFEE","V":"OFEE - Opening fee"},{"K":"OTHR","V":"OTHR - Other"},{"K":"OTLC","V":"OTLC - Other telecom related bill"},{"K":"PADD","V":"PADD - Preauthorized debit"},{"K":"PAYR","V":"PAYR - Payroll"},{"K":"PENO","V":"PENO - Payment Based Enforcement Order"},{"K":"PENS","V":"PENS - Pension payment"},{"K":"PHON","V":"PHON - Telephone bill"},{"K":"POPE","V":"POPE - Point of  purchase  entry"},{"K":"PPTI","V":"PPTI - Property insurance"},{"K":"PRCP","V":"PRCP - Price payment"},{"K":"PRME","V":"PRME - Precious metal"},{"K":"PTSP","V":"PTSP - Payment terms"},{"K":"RCKE","V":"RCKE - Re-presented  check  entry"},{"K":"RCPT","V":"RCPT - Receipt payment"},{"K":"REFU","V":"REFU - Refund"},{"K":"RENT","V":"RENT - Rent"},{"K":"RHBS","V":"RHBS - Rehabilitation Support"},{"K":"RINP","V":"RINP - Recurring installment paym."},{"K":"RLWY","V":"RLWY - Railway"},{"K":"ROYA","V":"ROYA - Royalties"},{"K":"SALA","V":"SALA - Salary payment"},{"K":"SAVG","V":"SAVG - Savings"},{"K":"SCVE","V":"SCVE - Purchase sale of services"},{"K":"SECU","V":"SECU - Securities"},{"K":"SSBE","V":"SSBE - Social security benefit"},{"K":"STDY","V":"STDY - Study"},{"K":"SUBS","V":"SUBS - Subscription"},{"K":"SUPP","V":"SUPP - Supplier payment"},{"K":"TAXR","V":"TAXR - TaxRefund"},{"K":"TAXS","V":"TAXS - Tax payment"},{"K":"TELI","V":"TELI - Telephone-initiated  transac."},{"K":"TRAD","V":"TRAD - Trade services"},{"K":"TREA","V":"TREA - Treasury payment"},{"K":"TRFD","V":"TRFD - Trust fund"},{"K":"VATX","V":"VATX - Value added tax payment"},{"K":"VIEW","V":"VIEW - Vision care"},{"K":"WEBI","V":"WEBI - Internet-initiated  transac."},{"K":"WHLD","V":"WHLD - With holding"},{"K":"WTER","V":"WTER - Water bill"}],"FINALITA_INCASSO":[{"K":"SUPP","V":"SUPP - Pag. verso fornitori"},{"K":"BONU","V":"BONU - Pag. di un bonus"},{"K":"CASH","V":"CASH - Istruzioni di cash management"},{"K":"CCRD","V":"CCRD - Pag. carta di credito"},{"K":"CORT","V":"CORT - Regolamento relativo a transaz."},{"K":"DCRD","V":"DCRD - Pag. carta di debito"},{"K":"DIVI","V":"DIVI - Pag. di dividendi"},{"K":"EPAY","V":"EPAY - Pag. tramite online-banking"},{"K":"GOVT","V":"GOVT - Pag. a/da autorita governative"},{"K":"HEDG","V":"HEDG - Pag. di operazioni di hedging"},{"K":"ICCP","V":"ICCP - Rimborso pag. carta di credito"},{"K":"IDCP","V":"IDCP - Rimborso pag. carta di debito"},{"K":"INTC","V":"INTC - Pag. tra aziende stesso gruppo"},{"K":"INTE","V":"INTE - Pag. di interessi"},{"K":"LOAN","V":"LOAN - Trasferimento di un prestito"},{"K":"OTHR","V":"OTHR - Altre tipologie di pag."},{"K":"PENS","V":"PENS - Pag. di pensioni"},{"K":"SALA","V":"SALA - Pag. di salari"},{"K":"SECU","V":"SECU - Transaz. relativa la pag. titoli"},{"K":"SSBE","V":"SSBE - Transaz. beneficio spese sociali"},{"K":"TAXS","V":"TAXS - Pag. di tasse"},{"K":"TRAD","V":"TRAD - Pag. per transaz. commerciale"},{"K":"TREA","V":"TREA - Pag. per operazioni di tesoreria"},{"K":"VATX","V":"VATX - Pag. IVA"},{"K":"WHLD","V":"WHLD - Pag. tasse trattenute alla fonte"}],"CRED_ORIGIN_TIPO_CODICE":[{"K":"SEPA","V":"Codice Interno"},{"K":"ARNU","V":"Alien Registration Number"},{"K":"CUST","V":"Customer Identification Number"},{"K":"DRLC","V":"Drivers License Number"},{"K":"EMPL","V":"Employee Identification Number"},{"K":"NIDN","V":"National Identity Number"},{"K":"CCPT","V":"Passport Number"},{"K":"SOSE","V":"Social Security Number"},{"K":"TXID","V":"Tax Identification Number"}]};
    var jBonifico = {"IdentifierSottoDistinta":null,"ChargeIban":null,"ChargeCodIban":null,"CreditorIdentification":null,"UltimateCreditor":null,"IsUltimateCreditorSottodistinta":false,"Debtor":null,"UltimateDebtor":null,"MandateRelatedInformation":null,"Divisa":"EUR","EndToEndIdentification":null,"RequestedCollectionDate":"0001-01-01T00:00:00","LocalInstrument":null,"SequenceType":null,"CategoryPurpose":null,"Purpose":null,"PurposeDescription":null,"RemittanceInformationUnstructured":null,"Cvs":null,"Identifier":{"Id":null,"Version":null,"IdAzienda":null,"IdRapporto":null,"ClasseServizio":12,"Crypt":"drnukew10VWCdb3oM3O29XQ9HQ/e6qtqA0E36bTQC5AdrwshuyPXfcgJHcifKBF5g0v4uheWFMiBVfTcP4Vzs/a8djp/bJx5yintC26FyFaXItgfeIOlgL5YoBKdfnbT","Hash":"DDE07959A7488C7091C028A494C79F95E0E81EA3E5A9A11B8653EA7596D1F0A6"},"IdentifierDistinta":null,"Ordinante":null,"Importo":null,"Position":null};
    var jValidation = [];

    var spallaName = "#a93cc8455a504e7ba1f31eeb2da7131c_7";

    // Business ViewModel
    function viewModel(bonifico) {
        var self= this;

        self.IsVisible = ko.observable(true);
        self.SddParams = {
            Sdd : ko.observable(new App.Sdd.DisposizioneSddBo(bonifico)),
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
                $(spallaName).append(html);

                
            });
    }

    var rootViewModel = new viewModel(jBonifico);

    var challenge = new challengeViewModel({
        SubmitUrl: ko.observable(),
        TitleBlock: '<div class="clearfix">' +
                        '<div class="flag incassi">&nbsp;</div>' +
                        '<h1>' +
                            'Incasso Sdd: inserimento' +
                        '</h1>' +
                    '</div>'
    });

    ko.postbox.subscribe('validation-messages.CHALLENGE', function () {
        rootViewModel.Hide();

        // visualizzo alcuni dati della distinta in testa al challenge
        challenge.Components.removeAll();
        challenge.Components.push(new App.Core.UiComponent({
            Name: 'disposizione-sdd-summary',
            Params: {
                DisposizioneSdd: rootViewModel.SddParams.Sdd,
                InitAfterBinding: true
            }
        }));

        challenge.SubmitUrl(rootViewModel.SddParams.CalledUrl() + 'Challenge');
    });

    ko.postbox.subscribe('challenge.SUCCESS', function(data){
        rootViewModel.SddParams.SuccessMessagesVisible(true);

        rootViewModel.Show();

        challenge.Hide();
    });

    $(document).ready(function () {
        ko.applyBindings(rootViewModel, document.getElementById('a93cc8455a504e7ba1f31eeb2da7131c_5'));

        ko.applyBindings(challenge, document.getElementById('a93cc8455a504e7ba1f31eeb2da7131c_6'));
    });
</script>



                        </div>