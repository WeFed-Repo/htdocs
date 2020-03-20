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



<script type="text/html" id="b89ce8c4160b46b391a5051a98ccaf2b_5">
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
    <div class="row" data-bind="slideVisible: RapportiDataTableVisible" style="display:block">
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
        template: { element: 'b89ce8c4160b46b391a5051a98ccaf2b_5' },
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






<div id="b89ce8c4160b46b391a5051a98ccaf2b_6">
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
            var absolutePath = '/anchise2.web/Contents/00000/it-IT/Images/imageFakeName?v=01980360';

            return absolutePath.replace('imageFakeName', imageRelativePath);
        }

        self.GetPinPadGif = function (secureType) {
            var relativePath = '/pp/dispositivo_' + secureType + '.gif';

            return self.ResourcesPathImage(relativePath);
        }

        // Initialize
        self.Init = function () {
            $('.hide', $('#b89ce8c4160b46b391a5051a98ccaf2b_6')).removeClass('hide');
        };
    };

    var uiHelper = new UiViewModel();

    $(document).ready(function () {
        ko.applyBindings(uiHelper, document.getElementById('b89ce8c4160b46b391a5051a98ccaf2b_6'));

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












<script type="text/html" id="incassoriba-abi-cab-search">
    <div class="modal-layer" data-bind="visible: Visible">
        <div class="modal-container section">
            <div class="row">
                <h3 class="titleSection">
                    Ricerca Abi Cab
                </h3>
            </div>
            <div class="row">
                <p>
                    
    Questo servizio consente di ricercare le coordinate bancarie effettuando una ricerca per ognuno dei campi nella tabella sottostante.
    I dati sono aggiornati settimanalmente. Per eseguire la ricerca è necessario compilare almeno un campo.
  
                </p>
            </div>
            <!-- FILTER -->
            <div data-bind="with: FilterAbiCab">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <label>Banca</label>
                        <input type="text" class="form-control"
                               data-bind="textInput: DescrizioneBanca" />
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <label>Città o località</label>
                        <input type="text" class="form-control"
                               data-bind="textInput: Comune" />
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <label>Codice ABI della banca</label>
                        <input type="text" class="form-control"
                               data-bind="textInput: Abi" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <label>Codice CAB della banca</label>
                        <input type="text" class="form-control"
                               data-bind="textInput: Cab" />
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <label>Provincia</label>
                        <input type="text" class="form-control" disabled="disabled" title="funzionalità temporanemente disabilitata"
                               data-bind="textInput: Provincia" />
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <label>CAP</label>
                        <input type="text" class="form-control"
                               data-bind="textInput: Cap" />
                    </div>
                </div>
            </div>
            <!-- TABLE RESULT -->
            <div data-bind="with: List">
                <div class="table-responsive">
                    <div class="dataTables_wrapper" style="margin-top: 10px">
                        <table class="dataTable table table-striped">
                            <thead>
                                <tr>
                                    <th data-bind="css: ThCss('1'), singleClick: SortToggle('1')">
                                        ABI
                                    </th>
                                    <th data-bind="css: ThCss('2'), singleClick: SortToggle('2')">
                                        CAB
                                    </th>
                                    <th data-bind="css: ThCss('3'), singleClick: SortToggle('3')">
                                        Banca
                                    </th>
                                    <th data-bind="css: ThCss('4'), singleClick: SortToggle('4')">
                                        Filiale
                                    </th>
                                </tr>
                            </thead>
                            <tbody data-bind="foreach: Page">
                                <tr data-bind="click: $component.SelectedAbiCab">
                                    <td data-bind="text: CodiceAbi"></td>
                                    <td data-bind="text: CodiceCab"></td>
                                    <td data-bind="text: DescrizioneBanca"></td>
                                    <td data-bind="text: DescrizioneFiliale"></td>
                                </tr>
                            </tbody>
                        </table>
                        <paginatore params="PagedList: $data"></paginatore>
                    </div>
                    <div data-bind="visible: Page().length === 0">
                        <search-no-result></search-no-result>
                    </div>
                </div>
                <!-- ACTIONS -->
                <div class="text-right margin-top20">
                    <input type="button" class="btn btn-primary" value="Cerca"
                           data-bind="singleClick: $component.Search" />
                    <input type="button" class="btn btn-primary" value="Chiudi"
                           data-bind="singleClick: $component.Close" />
                </div>
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('incassoriba-abi-cab-search', {
        template: { element: 'incassoriba-abi-cab-search' },
        viewModel: function (params) {
            var self = this;

            // Models
            self.Visible = params.Visible;
            self.FilterAbiCab = params.filter || ko.observable(new App.Common.FilterAbiCab(null));
            self.callbackSelectedItem = params.callbackSelectedItem || $.noop;
            self.List = new App.Core.PagedArrayAsync({
                self: self,
                searchUrl: '/anchise2.web/Anagrafiche/Banca/SearchAbiCab',
                pagingFilter: self.FilterAbiCab(),
                pageSizeDropDown: [10, 20, 50, 100]
            });

            self.PageCountLabel = ko.pureComputed(function () {
                return 'Page ' + this.List.PagingFilter.StartIndex() + ' of ' + this.List.PageCount();
            }, self);

            // Actions
            var visibleSubscribe = self.Visible.subscribe(function () {
                if (self.Visible()) {
                    self.Init();
                }
            });
            self.Search = function () {
                self.List.Search();
            };
            self.Close = function () {
                self.Visible(false);
            };
            self.SelectedAbiCab = function (item) {
                if (self.callbackSelectedItem) {
                    self.callbackSelectedItem(item);
                }

                self.Close();
            }
            // Init
            self.Init = function () {
                if (self.FilterAbiCab().Abi()) {
                    self.List.Search();
                }
            };
            self.Init();

            self.dispose = function () {
                visibleSubscribe.dispose();
            }
        }
    });
</script>



<script type="text/html" id="incassoriba-abi-cab-detail">
    <div class="modal-layer" data-bind="visible: Visible">
        <div class="modal-container section">
            <div class="row">
                <h3 class="titleSection">
                    Sportello
                </h3>
            </div>
            <div data-bind="with: AbiCab, visible: DetailVisible">
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                Nome banca
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: DescrizioneBanca"></label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                ABI
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: CodiceAbi"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                Sportello
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: DescrizioneFiliale"></label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                CAB
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: CodiceCab"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                Comune
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: Indirizzo.Comune"></label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                Località
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: Indirizzo.Localita"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                Indirizzo
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: Indirizzo.Via"></label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                CAP
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: Indirizzo.Cap"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                Prov.
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: Indirizzo.Provincia"></label>
                        </div>
                    </div>
                </div>
            </div>

            <div data-bind=", visible: !DetailVisible()">
                <search-no-result></search-no-result>
            </div>

            <!-- ACTIONS -->
            <div class="text-right margin-top20">
                <input type="button" class="btn btn-primary" value="Chiudi" data-bind="singleClick: $component.Close" />
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('incassoriba-abi-cab-detail', {
        template: { element: 'incassoriba-abi-cab-detail' },
        viewModel: function (params) {
            var self = this;

            // Models
            self.Visible = params.Visible;
            self.filter = params.filter;
            self.AbiCab = new App.Common.AbiCabBo(null);

            self.DetailVisible = ko.pureComputed(function () {
                return self.AbiCab.DescrizioneBanca() != null;
            });

            // Actions
            var visibleSubscribe = self.Visible.subscribe(function () {
                if (self.Visible()) {
                    self.Init();
                }
            });

            var visibleSubscribe = self.Visible.subscribe(function () {
                if (self.Visible()) {
                    self.Init();
                }
            });

            self.Close = function () {
                self.Visible(false);
            };
            
            // Init
            self.Init = function () {
                if (self.filter().Abi() && self.filter().Cab()) {
                    var dettaglio = new App.Common.BancaModel();

                    dettaglio.Creditore.CodiceAbi(self.filter().Abi());
                    dettaglio.Creditore.CodiceCab(self.filter().Cab());

                    Http.Post('/anchise2.web/Anagrafiche/Banca/GetDettaglioBanche', ko.toJSON({ model: dettaglio, isSeda: false }))
                    .success(function (data) {
                        ko.mapping.fromJS(data.Creditore, null, self.AbiCab);
                    });
                }
            };
            self.Init();

            self.dispose = function () {
                visibleSubscribe.dispose();
            }
        }
    });
</script>



<script type="text/html" id="disposizione-incassoriba-summary">
    <div data-bind="with: disposizione" style="font-size: 12px">
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
                            <label data-bind="text: Debitore.Denominazione"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Abi - Cab:
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: $component.codAbiDebitore() + ' - ' + $component.codCabDebitore()"></label>
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
                            Dati Riba
                        </h1>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-6 no-padding">
                            <div class="col-xs-12">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding: 0">
                                        Importo
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
                                        Data Scadenza
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="dateText: DataScadenza"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-2">
                            <label class="control-label" style="padding: 0">
                                Descrizione
                            </label>
                        </div>
                        <div class="col-xs-10 textTruncate" style="padding-left: 6.5px">
                            <label data-bind="text: DescrizioneRiba"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('disposizione-incassoriba-summary', {
        template: { element: 'disposizione-incassoriba-summary' },
        viewModel: function (params) {
            var self = this;
            
            self.disposizione = params.disposizione;
            var topicId = params.TopicId || '';
            var initAfterBinding = params.InitAfterBinding || false;

            self.DettaglioBanca = ko.observable(new App.Common.BancaModel(null));
            self.codAbiDebitore = ko.pureComputed(function () {
                return self.disposizione().CodAbiDomiciliataria() || App.Core.GetAbi(self.disposizione().Debitore.Iban());
            });

            self.codCabDebitore = ko.pureComputed(function () {
                return self.disposizione().CodCabDomiciliataria() || App.Core.GetCab(self.disposizione().Debitore.Iban());
            });

            var retrieveBancaModel = function () {
                var dettaglio = new App.Common.BancaModel();
                
                dettaglio.Creditore.CodiceAbi(self.disposizione().Ordinante.Abi());
                dettaglio.Creditore.CodiceCab(self.disposizione().Ordinante.Cab());
                dettaglio.Debitore.CodiceAbi(self.codAbiDebitore());
                dettaglio.Debitore.CodiceCab(self.codCabDebitore());

                Http.Post('/anchise2.web/Anagrafiche/Banca/GetDettaglioBanche', ko.toJSON(dettaglio))
                    .success(function (data) {
                        ko.mapping.fromJS(data, null, self.DettaglioBanca);
                    });
            };

            var initEvent = ko.postbox.subscribe(topicId + 'disposizione-incassoriba-summary.INITIALIZE', retrieveBancaModel);

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

<script type="text/html" id="incasso-riba-dataentry">
    <!-- SUCCESS MESSAGES -->
    <div data-bind="visible: SuccessMessagesVisible">
        <feedback-messages params="Component: SuccessComponent, Buttons: SuccessButtons, CssClass: 'alert', Message: SuccessMessage, PageTitle: $component.FeedbackTitle, TitleCssClass: 'incassi'"></feedback-messages>
    </div>
    <div data-bind="visible: !SuccessMessagesVisible()">
        <div class="riquadro">
            <div>
                <div style="float:left;">
                    <div class="flag incassi">&nbsp;</div>
                    <h1>Riba</h1>
                </div>
                
            </div>
            <div class="clearall"></div>
            <div data-bind="with: disposizione">
                <!-- VALIDATION -->
                <validation-messages params="Validation: $component.Validation"></validation-messages>
                <!-- SELETTORE RAPPORTI-->
                
                <div class="section">
                    <div class="row">
                        <h3 class="titleSection">
                            Rapporto selezionato
                        </h3>
                    </div>
                    <div>
                        <selettore-rapporti params="Ordinante: Ordinante, ArrowVisible: $component.DispoIsNotInDistinta, TestoSelettore: 'Seleziona il rapporto di accredito della disposizione', IsNotInDistinta: $component.DispoIsNotInDistinta"></selettore-rapporti>
                    </div>
                </div>
                <div class="section">
                    <div class="row">
                        <h3 class="titleSection">
                            Dati Ordinante
                        </h3>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Denominazione Ordinante</label>
                                    <input type="text" class="form-control" data-bind="value: DenominazioneCreditore, enable: $component.DispoIsNotInDistinta" maxlength="20" />
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Descrizione Ordinante</label>
                                    <input type="text" class="form-control" data-bind="value: DescrizioneCreditore, enable: $component.DispoIsNotInDistintae" />
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">P.IVA/Cod. Fisc. Ordinante</label>
                                    <input type="text" class="form-control" data-bind="value: Ordinante.IdentificativoFiscale, enable: $component.DispoIsNotInDistinta" maxlength="16" />
                                </div>
                            </div>
                        </div>
                        <div class="row" data-bind="visible: $component.DispoIsNotInDistinta">
                            <div class="col-xs-12">
                                
                                <div class="col-sm-4 col-xs-12" style="padding: 0">
                                    <input type="checkbox" data-bind="checked: FlgRibaEstera" />
                                    <label class="control-label">Soggetto non residente</label>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                            </div>
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
                                        <label class="control-label">Ragione sociale</label>
                                        <input type="text" class="form-control" data-bind="value: Debitore.Denominazione" maxlength="60"/>
                                    </div>
                                    <div class="col-sm-1 col-xs-12" style="padding: 0">
                                        <label class="control-label"></label>
                                        <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.DebtorAnagraficaSearch">&nbsp;</span>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <label class="control-label">Codice</label>
                                        <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Debitore.Codice" maxlength="16"/>
                                    </div>
                                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>

                                    <div class="col-sm-3 col-xs-12" style="padding: 0">
                                        <label class="control-label">P.IVA/Cod. Fisc. Debitore</label>
                                        <input type="text" class="form-control" data-bind="uppercaseText: Debitore.CodiceFiscale" maxlength="16"/>
                                    </div>
                                </div>
                            </div>

                            <div data-bind="component: { name: 'anagrafica-search', params: $component.DebtorAnagraficaModel }"></div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="col-sm-3 col-xs-12" style="padding: 0">
                                        <label class="control-label">Indirizzo</label>
                                        <input type="text" class="form-control no-placeholder-italic" data-bind="value: Debitore.Indirizzo.Via" maxlength="30"/>
                                    </div>
                                    <div class="col-sm-1 col-xs-12"></div>
                                    <div class="col-sm-4 col-xs-12">
                                        <label class="control-label">Comune</label>
                                        <input type="text" class="form-control" data-bind="uppercaseText: Debitore.Indirizzo.Comune" maxlength="22"/>
                                    </div>
                                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                    <div class="col-sm-1 col-xs-12" style="padding-left: 0" >
                                        <label class="control-label">Cap</label>
                                        <input type="text" class="form-control no-placeholder-italic" data-bind="value: Debitore.Indirizzo.Cap" maxlength="5"/>
                                    </div>
                                    <div class="col-sm-2 col-xs-12" style="padding: 0">
                                        <label class="control-label">Prov.</label>
                                        <input type="text" class="form-control no-placeholder-italic" data-bind="uppercaseText: Debitore.Indirizzo.Provincia" maxlength="2"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                    <div class="col-sm-4 col-xs-12"></div>
                                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="col-sm-1 col-xs-12" style="padding-right: 0; padding-left: 20px">
                                        <label class="control-label" style="margin-left: -20px">Abi</label>
                                        <div class="radio" style="font-weight: normal; margin-top: 0">
                                            <input type="radio" name="codiceIns" value="DebitoreAbi" data-bind="checked: $component.CurrentCoordinate" />
                                            <input type="text" class="form-control" data-bind="value: CodAbiDomiciliataria, enable: $component.AbiCabEnable" maxlength="5"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-1 col-xs-12">
                                        <label class="control-label"></label>
                                        <span style="display: block; margin-top: 15px; margin-left:-5px" class="icon-replace icon-search active link" data-bind="singleClick: $component.FindAbiCab">&nbsp;</span>
                                    </div>
                                    <div class="col-sm-1 col-xs-12" style="padding: 0">
                                        <label class="control-label">Cab</label>
                                        <input type="text" placeholder="opzionale" class="form-control" data-bind="value: CodCabDomiciliataria, enable: $component.AbiCabEnable" maxlength="5"/>
                                    </div>
                                    <div class="col-sm-1 col-xs-12" style="padding: 0">
                                        <label class="control-label"></label>
                                        <span style="display: block; margin-top: 15px" class="icon-replace icon-check active link" data-bind="singleClick: $component.DetailAbiCab">&nbsp;</span>
                                    </div>
                                    <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                                        <label class="control-label" style="margin-left: -20px">Iban</label>
                                        <div class="radio" style="font-weight: normal; margin-top: 0">
                                            <input type="radio" name="codiceIns" value="DebitoreIban" data-bind="checked: $component.CurrentCoordinate" />
                                            <input type="text" class="form-control" data-bind="value: Debitore.Iban, enable: $component.IbanEnable" maxlength="27"/>
                                        </div>
                                    </div>
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
                    <!-- DATI RIBA -->
                    <div class="section">
                        <div class="row">
                            <h3 class="titleSection">Dati Riba</h3>
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
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <label class="control-label">Scadenza</label><br />
                                        <date-picker params="Date: DataScadenza"></date-picker>
                                    </div>
                                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                    <div class="col-sm-3 col-xs-12" style="padding: 0">
                                        <label class="control-label">Numero ricevuta</label>
                                        <input type="text" placeholder="opzionale" class="form-control" data-bind="value: NumeroRicevuta" maxlength="10"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="col-sm-3 col-xs-12" style="padding: 0">
                                        <label class="control-label">Tipo Documento</label>
                                        <select class="form-control" data-bind="options: $component.TipiDocumento, optionsText: 'V', optionsValue: 'K', value: TipoDocumento"></select>
                                    </div>
                                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                    <div class="col-sm-4 col-xs-12">
                                        <label class="control-label">Esito Pagamento</label>
                                        <select class="form-control" data-bind="options: $component.EsitiPagamento, optionsText: 'V', optionsCaption: 'opzionale', optionsValue: 'K', value: RichiestaEsito"></select>
                                    </div>
                                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                    <div class="col-sm-3 col-xs-12" style="padding: 0">
                                        <label class="control-label">
                                            Descrizione Riba
                                        </label>
                                        <textarea class="form-control no-placeholder-italic" data-bind="value: DescrizioneRiba" maxlength="80"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div data-bind="component: { name: 'incassoriba-abi-cab-search', params: $component.SearchAbiCabModel }"></div>
                <div data-bind="component: { name: 'incassoriba-abi-cab-detail', params: $component.DetailAbiCabModel }"></div>
            </div>
            
        </div>
        <!-- SUBMIT ACTIONS -->
        <div class="text-right">
            <input type="button" class="btn btn-primary" value="Inserisci" data-bind="visible: CreateIsVisible, singleClick: Confirm" />
            <div data-bind="visible: !CreateIsVisible()">
                <input type="button" class="btn btn-primary" value="Annulla" data-bind="singleClick: Cancel" />
                <input type="button" class="btn btn-primary" value="Conferma" data-bind="singleClick: Confirm" />
            </div>
        </div>
        
    </div>
</script>

<script type="text/javascript">
    ko.components.register('incasso-riba-dataentry', {
        template: { element: 'incasso-riba-dataentry' },
        viewModel: function (params) {
            var self = this;
            // Model
            self.SuccessMessagesVisible = params.SuccessMessagesVisible || ko.observable(false);
            self.disposizione = params.disposizione;

            // extend params to show this value for which use this component
            self.TipiDocumento = ko.observableArray(PROFILABLE_DISPOSIZIONI['TIPO_DOCUMENTO']);
            self.EsitiPagamento = ko.observableArray(PROFILABLE_DISPOSIZIONI['ESITO_PAGAMENTO']);
            self.CurrentCoordinate = ko.observable('DebitoreAbi');
            self.AbiCabEnable = ko.observable(true);
            self.IbanEnable = ko.observable(false);
            self.IsDatiPrecedenti = ko.observable(false);

            self.AbiCabSearchVisible = ko.observable(false);
            self.FilterAbiCab = ko.observable(new App.Common.FilterAbiCab(null));

            self.AbiCabDetailVisible = ko.observable(false);

            self.CryptDistintaSelected = null;
            self.FeedbackTitle = ko.observable('Riba: conferma inserimento');
            self.SuccessMessage = ko.observable('Disposizione inserita correttamente.\nPer poter inviare la disposizione è necessario creare la distinta, aggregando le disposizioni');
            self.DispoIsNotInDistinta = ko.observable(true);
            self.Validation = ko.observableArray([]);
            self.AggiornaAnagrafica = ko.observable(false);
            self.CreateIsVisible = ko.pureComputed(function () {
                return App.Common.IdentifierIsNotValid(self.disposizione().Identifier) || self.disposizione().Identifier.Id() == null;
            }, self);

            self.SuccessButtons = ko.observableArray([]);

            self.DebtorAnagraficaModel = {
                Label: 'Cliente',
                IdentifierPiazzatura: ko.observable(self.disposizione().Ordinante.Identifier),
                Soggetto: self.disposizione().Debitore,
                TipologiaAnagrafica: ko.observable('CL'),
                Visible: ko.observable(false),
                Callback: ko.observable(function (anagrafica) {
                    self.disposizione().CodAbiDomiciliataria(anagrafica.Abi());
                    self.disposizione().CodCabDomiciliataria(anagrafica.Cab());

                    if ((self.disposizione().CodAbiDomiciliataria() == null || self.disposizione().CodAbiDomiciliataria().length == 0) && self.disposizione().Debitore.Iban() != null) {
                        self.CurrentCoordinate('DebitoreIban');
                    } else {
                        self.CurrentCoordinate('DebitoreAbi');
                    }

                    self.disposizione().Debitore.CodiceFiscale(anagrafica.CodiceFiscale() || anagrafica.PartitaIva());
                    self.disposizione().Debitore.Indirizzo.Provincia(anagrafica.Indirizzo.CodProvincia());
                    self.disposizione().TipoDocumento(anagrafica.TipoDocumento());
                    //self.disposizione().Debitore.Indirizzo.Via(self.disposizione().Debitore.Indirizzo.Via().substr(0, 30));
                })
            };

            self.SearchAbiCabModel = {
                Visible: self.AbiCabSearchVisible,
                filter: self.FilterAbiCab,
                callbackSelectedItem: function (item) {
                    self.disposizione().CodAbiDomiciliataria(item.CodiceAbi());
                    self.disposizione().CodCabDomiciliataria(item.CodiceCab());
                }
            };

            self.DetailAbiCabModel = {
                Visible: self.AbiCabDetailVisible,
                filter: self.FilterAbiCab,
            };

            self.SuccessComponent = new App.Core.UiComponent({
                Name: 'disposizione-incassoriba-summary',
                Params: {
                    disposizione: self.disposizione
                }
            });

            // Actions
            var _anagraficaSearchVisible = function (anagraficaModel) {
                return function () {
                    if (App.Common.IdentifierIsNotValid(self.disposizione().Ordinante.Identifier)) {
                        self.Validation.removeAll();
                        self.Validation.push(new App.Core.ValidationMessage({ ErrorMessage: 'Per poter accedere alla funzionalità di ricerca è necessario selezionare prima un rapporto.' }));
                    } else {
                        anagraficaModel.Visible(true);
                    }
                }
            };

            self.FindAbiCab = function (item) {
                self.FilterAbiCab().Abi(self.disposizione().CodAbiDomiciliataria());
                self.FilterAbiCab().Cab(self.disposizione().CodCabDomiciliataria());

                self.AbiCabSearchVisible(true);
            };

            self.DetailAbiCab = function () {
                self.FilterAbiCab().Abi(self.disposizione().CodAbiDomiciliataria());
                self.FilterAbiCab().Cab(self.disposizione().CodCabDomiciliataria());

                self.AbiCabDetailVisible(true);
            }

            self.Cancel = function () {
                self.Validation.removeAll();
                window.history.back();
            };

            self.Confirm = function () {
                if (self.disposizione().Importo() == 0) {
                    uiHelper.Confirm({
                        text: 'Attenzione!\nStai inserendo una Riba con importo pari a 0.\nVuoi comunque procedere con l\'inserimento?',
                        okCallback: self.Save
                    });
                } else {
                    self.Save();
                }
            };

            self.Save = function () {
                if (self.disposizione().DataScadenza()) {
                    self.disposizione().DataScadenza().toJSON = function () { return moment(this).format("YYYY-MM-DDTHH:mm:ss"); }
                }
                self.disposizione().Debitore.TipologiaAnagrafica = self.DebtorAnagraficaModel.TipologiaAnagrafica;
                Http.PostWithTxMon('/anchise2.web/IncassiRiba/DataEntry/Save', ko.toJSON({ model: self.disposizione, updateanagrafica: self.AggiornaAnagrafica }))
                    .success(function (data) {
                        var result = new App.Core.StandardJsonResult(data);
                        if (data.HasError) {
                            ko.mapping.fromJS(result.Messages, null, self.Validation);
                            $('body,html').animate({ scrollTop: 0 }, 800);
                        } else {
                            App.Core.CleanSpalla(spallaName);
                            self.disposizione().NumeroRicevuta(result.Response.NumeroRicevuta);
                            self.AggiornaAnagrafica(false);
                            $.ajax('/anchise2.web/Widget/LinkRapidi')
                                .success(function (html) {
                                    $(spallaName).append(html);
                                });

                            ko.postbox.publish("disposizione-incassoriba-summary.INITIALIZE");

                            self.SuccessMessagesVisible(true);
                        }
                    });
            }

            self.ToggleCheckAggiornaAnagrafica = function () {
                self.AggiornaAnagrafica(!self.AggiornaAnagrafica());
            };

            // Search anagrafiche
            self.DebtorAnagraficaSearch = _anagraficaSearchVisible(self.DebtorAnagraficaModel);

            var currentCoordinateSubscribe = self.CurrentCoordinate.subscribe(function () {
                if (self.CurrentCoordinate() == 'DebitoreAbi') {
                    self.AbiCabEnable(true);
                    self.IbanEnable(false);
                    self.disposizione().Debitore.Iban('');
                } else {
                    self.AbiCabEnable(false);
                    self.IbanEnable(true);
                }
            });

            ko.postbox.subscribe('disposizione-riba.INITIALIZE', function () {
                self.DebtorAnagraficaModel.Soggetto = self.disposizione().Debitore;
            });

            ko.postbox.subscribe("selettore-rapporti.SELECTED", function (piazzatura) {
                if (!self.IsDatiPrecedenti()) {
                    self.disposizione().Ordinante.IdentificativoFiscale(piazzatura.Azienda.CodiceFiscale() || piazzatura.Azienda.PartitaIva());
                    self.disposizione().DenominazioneCreditore(piazzatura.Azienda.RagioneSociale().substr(0, 20));
                    self.disposizione().DescrizioneCreditore(piazzatura.Azienda.RagioneSociale());
                }

                self.IsDatiPrecedenti(false);
            }, null, true);

            // Initialization
            self.Init = function () {
                // Default value
                self.Validation([]);
                self.SuccessMessagesVisible(false);
                self.AggiornaAnagrafica(false);

                if (self.disposizione().Identifier.Id() == null) {
                    self.SuccessButtons([
                        new App.Core.UiButton({
                            Label: 'Nuova Riba',
                            Callback: function () {
                                location.href = '/anchise2.web/IncassiRiba/DataEntry';
                            }
                        }),
                        new App.Core.UiButton({
                            Label: 'Nuova Riba con i dati precedenti',
                            Callback: function () {
                                self.Validation([]);
                                self.IsDatiPrecedenti(true);
                                var dispo = new App.Riba.IncassiRiba.DisposizioneRibaBo({
                                    Ordinante: { Identifier: self.disposizione().Ordinante.Identifier, IdentificativoFiscale: self.disposizione().Ordinante.IdentificativoFiscale() },
                                    Identifier: {
                                        Crypt: self.disposizione().Identifier.Crypt(),
                                        Hash: self.disposizione().Identifier.Hash(),
                                        ClasseServizio: self.disposizione().Identifier.ClasseServizio(),
                                    },
                                    Divisa: self.disposizione().Divisa(),
                                    DenominazioneCreditore: self.disposizione().DenominazioneCreditore(),
                                    DescrizioneCreditore: self.disposizione().DescrizioneCreditore(),
                                    DataScadenza : null
                                });
                                self.disposizione(dispo);
                                self.SuccessMessagesVisible(false);

                                ko.postbox.publish('disposizione-riba.INITIALIZE');
                            }
                        }),
                        new App.Core.UiButton({
                            Label: 'crea Distinta',
                            Callback: function () {
                                var filtro = {
                                    cryptOrdinante: self.disposizione().Ordinante.Identifier.Crypt(),
                                    abi: self.disposizione().Ordinante.Abi()
                                };

                                location.href = '/anchise2.web/IncassiRiba/CreaDistintaIncassoRiba?' + $.param(filtro);
                            }
                        })
                    ]);
                } else {
                    // UPDATE DISPOSIZIONE IN DISTINTA
                    if (self.disposizione().IdentifierDistinta != null && self.disposizione().IdentifierDistinta.Crypt() != null) {
                        self.SuccessMessage('Disposizione modificata correttamente.\nPer poter procedere è necessario rigenerare la distinta');
                        self.FeedbackTitle('Riba: conferma modifica');
                        self.DispoIsNotInDistinta(false);
                        self.IsDatiPrecedenti(true);

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
                        self.FeedbackTitle('Riba: conferma modifica');
                        self.DispoIsNotInDistinta(true);
                        self.IsDatiPrecedenti(true);

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
            };

            var _disposizioneSubscribe = self.disposizione.subscribe(function () {
                self.DebtorAnagraficaModel.IdentifierPiazzatura(self.disposizione().Ordinante.Identifier);

                self.Init();
            });

            self.Init();

            self.dispose = function () {
                _disposizioneSubscribe.dispose();
            }
        }
    });
</script>

<div id="b89ce8c4160b46b391a5051a98ccaf2b_3">
    <div data-bind="visible: CurrentSection() == Sections.DATA_ENTRY" style="">
        <incasso-riba-dataentry params="disposizione: disposizione">
    <!-- SUCCESS MESSAGES -->
    <div data-bind="visible: SuccessMessagesVisible" style="display: none;">
        <feedback-messages params="Component: SuccessComponent, Buttons: SuccessButtons, CssClass: 'alert', Message: SuccessMessage, PageTitle: $component.FeedbackTitle, TitleCssClass: 'incassi'">
    <div class="riquadro">
        <div data-bind="visible: PageTitle != null">
            <div class="flag incassi" data-bind="css: TitleCssClass">&nbsp;</div>
            <h1 data-bind="text: PageTitle">Riba: conferma inserimento</h1>
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
    <div data-bind="with: disposizione" style="font-size: 12px">
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
                            <label data-bind="text: Debitore.Denominazione"></label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Abi - Cab:
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: $component.codAbiDebitore() + ' - ' + $component.codCabDebitore()"> - </label>
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
                            Dati Riba
                        </h1>
                    </div>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-6 no-padding">
                            <div class="col-xs-12">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding: 0">
                                        Importo
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
                                        Data Scadenza
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="dateText: DataScadenza"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-2">
                            <label class="control-label" style="padding: 0">
                                Descrizione
                            </label>
                        </div>
                        <div class="col-xs-10 textTruncate" style="padding-left: 6.5px">
                            <label data-bind="text: DescrizioneRiba"></label>
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
            <input type="button" class="btn btn-primary" data-bind="value: Label, singleClick: Callback" value="Nuova Riba">
            
            <input type="button" class="btn btn-primary" data-bind="value: Label, singleClick: Callback" value="Nuova Riba con i dati precedenti">
            
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
                    <h1>Riba</h1>
                </div>
                
            </div>
            <div class="clearall"></div>
            <div data-bind="with: disposizione">
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
                    <div>
                        <selettore-rapporti params="Ordinante: Ordinante, ArrowVisible: $component.DispoIsNotInDistinta, TestoSelettore: 'Seleziona il rapporto di accredito della disposizione', IsNotInDistinta: $component.DispoIsNotInDistinta">
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
            <a href="#" data-bind="click: RapportiDataTableVisibleToggle, css: ArrowToggle, visible: ArrowVisible" class="btnSelezioneCC icon-replace icon-arrowdown active"></a>
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
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000047659</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">12900</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT05K0503412900000000047659</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">AUTOMOBILE CLUB MODENA</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000002427</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">11701</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT18C0503411701000000002427</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">AUTOMOBILE CLUB MODENA</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000002423</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">11701</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT20Y0503411701000000002423</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">AUTOMOBILE CLUB MODENA</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000047661</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">12900</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT24E0503412900000000047661</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">AUTOMOBILE CLUB MODENA</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000047658</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">12900</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT28J0503412900000000047658</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">AUTOMOBILE CLUB MODENA</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000002419</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">11701</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT35Z0503411701000000002419</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">AUTOMOBILE CLUB MODENA</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000002426</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">11701</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT41B0503411701000000002426</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">AUTOMOBILE CLUB MODENA</td>
                        </tr>
                    
                        <tr data-bind="click: $component.UpdateSelectedOrdinante" class="link">
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.DescrizionePersonalizzata || Rapporto.NumeroRapporto">000000002422</td>
                            <!--/ko-->
                            <td data-bind="text: Rapporto.CodiceAbi">05034</td>
                            <td data-bind="text: Rapporto.CodiceCab">11701</td>
                            <!--ko if: $component.Options().ShowIban != false-->
                            <td data-bind="text: Rapporto.CodiceIban">IT43X0503411701000000002422</td>
                            <!--/ko-->
                            <td data-bind="text: Azienda.RagioneSociale">AUTOMOBILE CLUB MODENA</td>
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
                <div class="section">
                    <div class="row">
                        <h3 class="titleSection">
                            Dati Ordinante
                        </h3>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">Denominazione Ordinante</label>
                                    <input type="text" class="form-control" data-bind="value: DenominazioneCreditore, enable: $component.DispoIsNotInDistinta" maxlength="20">
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label">Descrizione Ordinante</label>
                                    <input type="text" class="form-control" data-bind="value: DescrizioneCreditore, enable: $component.DispoIsNotInDistintae" disabled="">
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0">
                                    <label class="control-label">P.IVA/Cod. Fisc. Ordinante</label>
                                    <input type="text" class="form-control" data-bind="value: Ordinante.IdentificativoFiscale, enable: $component.DispoIsNotInDistinta" maxlength="16">
                                </div>
                            </div>
                        </div>
                        <div class="row" data-bind="visible: $component.DispoIsNotInDistinta">
                            <div class="col-xs-12">
                                
                                <div class="col-sm-4 col-xs-12" style="padding: 0">
                                    <input type="checkbox" data-bind="checked: FlgRibaEstera">
                                    <label class="control-label">Soggetto non residente</label>
                                </div>
                                <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                <div class="col-sm-3 col-xs-12" style="padding: 0"></div>
                            </div>
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
                                        <label class="control-label">Ragione sociale</label>
                                        <input type="text" class="form-control" data-bind="value: Debitore.Denominazione" maxlength="60">
                                    </div>
                                    <div class="col-sm-1 col-xs-12" style="padding: 0">
                                        <label class="control-label"></label>
                                        <span style="display: block; margin-top: 15px" class="icon-replace icon-search active link" data-bind="singleClick: $component.DebtorAnagraficaSearch">&nbsp;</span>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <label class="control-label">Codice</label>
                                        <input placeholder="opzionale" type="text" class="form-control no-placeholder-italic" data-bind="value: Debitore.Codice" maxlength="16">
                                    </div>
                                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>

                                    <div class="col-sm-3 col-xs-12" style="padding: 0">
                                        <label class="control-label">P.IVA/Cod. Fisc. Debitore</label>
                                        <input type="text" class="form-control" data-bind="uppercaseText: Debitore.CodiceFiscale" maxlength="16">
                                    </div>
                                </div>
                            </div>

                            <div data-bind="component: { name: 'anagrafica-search', params: $component.DebtorAnagraficaModel }">
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

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="col-sm-3 col-xs-12" style="padding: 0">
                                        <label class="control-label">Indirizzo</label>
                                        <input type="text" class="form-control no-placeholder-italic" data-bind="value: Debitore.Indirizzo.Via" maxlength="30">
                                    </div>
                                    <div class="col-sm-1 col-xs-12"></div>
                                    <div class="col-sm-4 col-xs-12">
                                        <label class="control-label">Comune</label>
                                        <input type="text" class="form-control" data-bind="uppercaseText: Debitore.Indirizzo.Comune" maxlength="22">
                                    </div>
                                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                    <div class="col-sm-1 col-xs-12" style="padding-left: 0">
                                        <label class="control-label">Cap</label>
                                        <input type="text" class="form-control no-placeholder-italic" data-bind="value: Debitore.Indirizzo.Cap" maxlength="5">
                                    </div>
                                    <div class="col-sm-2 col-xs-12" style="padding: 0">
                                        <label class="control-label">Prov.</label>
                                        <input type="text" class="form-control no-placeholder-italic" data-bind="uppercaseText: Debitore.Indirizzo.Provincia" maxlength="2">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                    <div class="col-sm-4 col-xs-12"></div>
                                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="col-sm-1 col-xs-12" style="padding-right: 0; padding-left: 20px">
                                        <label class="control-label" style="margin-left: -20px">Abi</label>
                                        <div class="radio" style="font-weight: normal; margin-top: 0">
                                            <input type="radio" name="codiceIns" value="DebitoreAbi" data-bind="checked: $component.CurrentCoordinate">
                                            <input type="text" class="form-control" data-bind="value: CodAbiDomiciliataria, enable: $component.AbiCabEnable" maxlength="5">
                                        </div>
                                    </div>
                                    <div class="col-sm-1 col-xs-12">
                                        <label class="control-label"></label>
                                        <span style="display: block; margin-top: 15px; margin-left:-5px" class="icon-replace icon-search active link" data-bind="singleClick: $component.FindAbiCab">&nbsp;</span>
                                    </div>
                                    <div class="col-sm-1 col-xs-12" style="padding: 0">
                                        <label class="control-label">Cab</label>
                                        <input type="text" placeholder="opzionale" class="form-control" data-bind="value: CodCabDomiciliataria, enable: $component.AbiCabEnable" maxlength="5">
                                    </div>
                                    <div class="col-sm-1 col-xs-12" style="padding: 0">
                                        <label class="control-label"></label>
                                        <span style="display: block; margin-top: 15px" class="icon-replace icon-check active link" data-bind="singleClick: $component.DetailAbiCab">&nbsp;</span>
                                    </div>
                                    <div class="col-sm-4 col-xs-12" style="padding-left: 30px">
                                        <label class="control-label" style="margin-left: -20px">Iban</label>
                                        <div class="radio" style="font-weight: normal; margin-top: 0">
                                            <input type="radio" name="codiceIns" value="DebitoreIban" data-bind="checked: $component.CurrentCoordinate">
                                            <input type="text" class="form-control" data-bind="value: Debitore.Iban, enable: $component.IbanEnable" maxlength="27" disabled="">
                                        </div>
                                    </div>
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
                    <!-- DATI RIBA -->
                    <div class="section">
                        <div class="row">
                            <h3 class="titleSection">Dati Riba</h3>
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
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <label class="control-label">Scadenza</label><br>
                                        <date-picker params="Date: DataScadenza">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_1">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                                    </div>
                                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                    <div class="col-sm-3 col-xs-12" style="padding: 0">
                                        <label class="control-label">Numero ricevuta</label>
                                        <input type="text" placeholder="opzionale" class="form-control" data-bind="value: NumeroRicevuta" maxlength="10">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="col-sm-3 col-xs-12" style="padding: 0">
                                        <label class="control-label">Tipo Documento</label>
                                        <select class="form-control" data-bind="options: $component.TipiDocumento, optionsText: 'V', optionsValue: 'K', value: TipoDocumento"><option value="0">Secondo accordi</option><option value="1">Ri.Ba.</option><option value="2">Conferma d'ordine</option></select>
                                    </div>
                                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                    <div class="col-sm-4 col-xs-12">
                                        <label class="control-label">Esito Pagamento</label>
                                        <select class="form-control" data-bind="options: $component.EsitiPagamento, optionsText: 'V', optionsCaption: 'opzionale', optionsValue: 'K', value: RichiestaEsito"><option value="">opzionale</option><option value="1">Si</option><option value="2">No</option></select>
                                    </div>
                                    <div class="col-sm-1 col-xs-12" style="padding: 0"></div>
                                    <div class="col-sm-3 col-xs-12" style="padding: 0">
                                        <label class="control-label">
                                            Descrizione Riba
                                        </label>
                                        <textarea class="form-control no-placeholder-italic" data-bind="value: DescrizioneRiba" maxlength="80"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-bind="component: { name: 'incassoriba-abi-cab-search', params: $component.SearchAbiCabModel }">
    <div class="modal-layer" data-bind="visible: Visible" style="display: none;">
        <div class="modal-container section">
            <div class="row">
                <h3 class="titleSection">
                    Ricerca Abi Cab
                </h3>
            </div>
            <div class="row">
                <p>
                    
    Questo servizio consente di ricercare le coordinate bancarie effettuando una ricerca per ognuno dei campi nella tabella sottostante.
    I dati sono aggiornati settimanalmente. Per eseguire la ricerca è necessario compilare almeno un campo.
  
                </p>
            </div>
            <!-- FILTER -->
            <div data-bind="with: FilterAbiCab">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <label>Banca</label>
                        <input type="text" class="form-control" data-bind="textInput: DescrizioneBanca">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <label>Città o località</label>
                        <input type="text" class="form-control" data-bind="textInput: Comune">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <label>Codice ABI della banca</label>
                        <input type="text" class="form-control" data-bind="textInput: Abi">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <label>Codice CAB della banca</label>
                        <input type="text" class="form-control" data-bind="textInput: Cab">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <label>Provincia</label>
                        <input type="text" class="form-control" disabled="disabled" title="funzionalità temporanemente disabilitata" data-bind="textInput: Provincia">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <label>CAP</label>
                        <input type="text" class="form-control" data-bind="textInput: Cap">
                    </div>
                </div>
            </div>
            <!-- TABLE RESULT -->
            <div data-bind="with: List">
                <div class="table-responsive">
                    <div class="dataTables_wrapper" style="margin-top: 10px">
                        <table class="dataTable table table-striped">
                            <thead>
                                <tr>
                                    <th data-bind="css: ThCss('1'), singleClick: SortToggle('1')" class="sorting_desc">
                                        ABI
                                    </th>
                                    <th data-bind="css: ThCss('2'), singleClick: SortToggle('2')" class="sorting">
                                        CAB
                                    </th>
                                    <th data-bind="css: ThCss('3'), singleClick: SortToggle('3')" class="sorting">
                                        Banca
                                    </th>
                                    <th data-bind="css: ThCss('4'), singleClick: SortToggle('4')" class="sorting">
                                        Filiale
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
                <!-- ACTIONS -->
                <div class="text-right margin-top20">
                    <input type="button" class="btn btn-primary" value="Cerca" data-bind="singleClick: $component.Search">
                    <input type="button" class="btn btn-primary" value="Chiudi" data-bind="singleClick: $component.Close">
                </div>
            </div>
        </div>
    </div>
</div>
                <div data-bind="component: { name: 'incassoriba-abi-cab-detail', params: $component.DetailAbiCabModel }">
    <div class="modal-layer" data-bind="visible: Visible" style="display: none;">
        <div class="modal-container section">
            <div class="row">
                <h3 class="titleSection">
                    Sportello
                </h3>
            </div>
            <div data-bind="with: AbiCab, visible: DetailVisible" style="display: none;">
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                Nome banca
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: DescrizioneBanca"></label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                ABI
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: CodiceAbi"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                Sportello
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: DescrizioneFiliale"></label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                CAB
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: CodiceCab"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                Comune
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: Indirizzo.Comune"></label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                Località
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: Indirizzo.Localita"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                Indirizzo
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: Indirizzo.Via"></label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                CAP
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: Indirizzo.Cap"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding:0">
                                Prov.
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: Indirizzo.Provincia"></label>
                        </div>
                    </div>
                </div>
            </div>

            <div data-bind=", visible: !DetailVisible()">
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

            <!-- ACTIONS -->
            <div class="text-right margin-top20">
                <input type="button" class="btn btn-primary" value="Chiudi" data-bind="singleClick: $component.Close">
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
        <!-- SUBMIT ACTIONS -->
        <div class="text-right">
            <input type="button" class="btn btn-primary" value="Inserisci" data-bind="visible: CreateIsVisible, singleClick: Confirm">
            <div data-bind="visible: !CreateIsVisible()" style="display: none;">
                <input type="button" class="btn btn-primary" value="Annulla" data-bind="singleClick: Cancel">
                <input type="button" class="btn btn-primary" value="Conferma" data-bind="singleClick: Confirm">
            </div>
        </div>
        
    </div>
</incasso-riba-dataentry>
    </div>
</div>

<script type="text/javascript">
    var PIAZZATURA = [{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":812046,"ClasseServizio":0,"Crypt":"eBtWIsT+3T2b5ZsqVL69MEGcK9UlHn3JdF/zZ1MECoUzKZd8CaKCK67W99Yx6w70LHMo9eJadySP15n+QVAnnMBE0wW1bB6keSLRsts961j5VD+fXBbV0w6IOcQ++hcvK7F9F7Wm+i+4nnC/UBUxAA==","Hash":"CBFD2B5F41F449F0056AF6B1D4097A8E4FD6DD52F93CD3B1C6B5E476C51890D3"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"SEDE DI MODENA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":627308.50,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21402","Id":null,"IdAzienda":"106609","CodiceIban":"IT28J0503412900000000047658","CodiceAbi":"05034","CodiceCab":"12900","CodiceFiliale":"12900","NumeroRapporto":"000000047658","CodiceDivisa":"EUR","Descrizione":"000000047658","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000047658","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"812046","Type":102,"Crypt":"KWNetndwQs1QkDRY93RdGqjTSpOJdvsRPlQbA5T+ngUUGLQz1/1WbbBi+6KOU0rl","Hash":"6E7FDB76C38D60E838B7CD8C79B23EDB1DE4EB7A9DDF3D9208D790D38C216856"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"j1m6SEH76RnD6mw7WF+3kNjCxNhNlpFe8hyCdk8jHob624//BuzFJpMFEYbIue8J","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":812047,"ClasseServizio":0,"Crypt":"atzfp0sgVtmQ88fHiJWlEwAE4whI1Grx60NENJ+RGTj9jNOQP51d+RAV38OzSpRuSv7iB1SV52lVnsh86Vl6x61wTDoZeSFUJAjLvaE3YqfdgHDVOuGORNa3rV4AtppMTCBgRXHnk6jy2ysxeegHEA==","Hash":"482200EFC137EF1DEAFFC7EB8275F1A55AA76E528622845EC9FDBC2A05BC4735"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"SEDE DI MODENA","UltimoAggiornamento":"2019-01-12T00:00:00","Saldo":28225.84,"DataSaldo":"2019-01-12T00:00:00","Stato":1,"Bic":"BAPPIT21402","Id":null,"IdAzienda":"106609","CodiceIban":"IT05K0503412900000000047659","CodiceAbi":"05034","CodiceCab":"12900","CodiceFiliale":"12900","NumeroRapporto":"000000047659","CodiceDivisa":"EUR","Descrizione":"000000047659","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000047659","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"812047","Type":102,"Crypt":"5pCBwmXHTDQrx8TMh/lJEmfpVW2fR4YvnMdKxSPw7E5UK91+/B+0wyx+Se+F92Rd","Hash":"02A2A814B2605AC37223A7C7E72E37DD90CCFCFEC7E989013C06A486838AA89B"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"j1m6SEH76RnD6mw7WF+3kNjCxNhNlpFe8hyCdk8jHob624//BuzFJpMFEYbIue8J","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":812048,"ClasseServizio":0,"Crypt":"sdjIEcSSSz31PlHBS71yFKU7nJmMFZv6mQ9p3NNizUnV4dZYZ/KeClrT0gclbYC/FbxOzLq9M7RhPGffeK4mfR9IrzZ5dXDK25VPyluIurXJyCeD2dBiUuT3yxcaBgNWGIhXxcQVcPsfdaPZvz7Wuw==","Hash":"06452A7C3EEAD4198663DBFD5586F48BF5A2A902FE7F0CBEB2565380162D292F"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"SEDE DI MODENA","UltimoAggiornamento":"2019-03-16T00:00:00","Saldo":29283.18,"DataSaldo":"2019-03-16T00:00:00","Stato":1,"Bic":"BAPPIT21402","Id":null,"IdAzienda":"106609","CodiceIban":"IT24E0503412900000000047661","CodiceAbi":"05034","CodiceCab":"12900","CodiceFiliale":"12900","NumeroRapporto":"000000047661","CodiceDivisa":"EUR","Descrizione":"000000047661","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000047661","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"812048","Type":102,"Crypt":"zYCVlL7S2XmXrLLWxDUGzX3IDLmU7Kwjx5rmCnZ9r+D5LJ5PW1+eypK/+Q6XZr2G","Hash":"85FB515C95AB1A36DCE1AC9019756A0551A787CCC2F11BFEF6FA1B7CA7E112B7"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"j1m6SEH76RnD6mw7WF+3kNjCxNhNlpFe8hyCdk8jHob624//BuzFJpMFEYbIue8J","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582120,"ClasseServizio":0,"Crypt":"lPbhfSw4tfusLKP6tHyvHhhxV2tX0jJPQTIJTrJYMBCubbRlgcyKGBU71pxwW0Nmviezg4DwnIGUkH3merasmMWXkHw2aS7CI1BZDGka7v7FiAmTxJi64VIB+SI0R7eMFPTYsc5DlpATUQ6BX/OyTw==","Hash":"1FD10B55BC7CEEB2504E58BC0EBD7F2194CA563F9B105D1063E16160436E018C"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":-3.50,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT64Y0503411701000000002407","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002407","CodiceDivisa":"EUR","Descrizione":"000000002407","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002407","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582120","Type":102,"Crypt":"+cq9jJPIXbhEqUv/MIoKX9F7wVUoilMMH46rKHjA7FZuA4kDPsc0lZN2oP78vO/4","Hash":"576501DF114DD31DD6C5B4BE8D112B3995A470C9E0D4AB88510F7B8D74CB6898"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"j1m6SEH76RnD6mw7WF+3kNjCxNhNlpFe8hyCdk8jHob624//BuzFJpMFEYbIue8J","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582121,"ClasseServizio":0,"Crypt":"C9xYVShSb52aAeoqVBaUlmbDGWsaetdlkgfg73YqWy2PbWzasu+CgQpsf/cxOXECdxqEhG0Yo1981u0RVoOhaqlwCntn125i74A51T8VHme3m452NgqWKh6KkVf54VS659InX6mSpgNIS1cnwfLniA==","Hash":"47FB5969C254F36F84A22605CED4BBF36AB3EEFC1A7F8B815B0856EED28DC8AD"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT81X0503411701000000002417","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002417","CodiceDivisa":"EUR","Descrizione":"000000002417","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002417","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582121","Type":102,"Crypt":"GdAxw6+AwX9LClMxWO81aFbZEiM/4qboCNunnHlKuJOnXmYVKuwz2o6N/1FwekLM","Hash":"76DDD4F1443131E60430CFD12522A4FE7A10B6C0E88762250B565C0E4B4726D5"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"j1m6SEH76RnD6mw7WF+3kNjCxNhNlpFe8hyCdk8jHob624//BuzFJpMFEYbIue8J","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582122,"ClasseServizio":0,"Crypt":"khqHrcJoRcbOIXuxsGKYikGylBJIruc7O8EGgANVCvzNM8h6u78A7Sx6VkKYWVJxAVucAoRcQK6PG8D7AsLUtg5Kl/gLTOSoAtz3Ik232Ye7pjbZsxN+035ywP61R1wTbQJojaQdNexCXc7FvTxE3A==","Hash":"A7CB57A28F38FCFFE8A001BA9F2D2BF0FE1E6F9B1278E354F23D5E9D1C946829"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT58Y0503411701000000002418","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002418","CodiceDivisa":"EUR","Descrizione":"000000002418","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002418","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582122","Type":102,"Crypt":"pZSi39WLQprW3sCXe+Oea+MT3Z0m1/mmMVWyUOb1Zoi4vi7edRjGe5YWBxDpAYRe","Hash":"C8246B62531522DFE4343D99AAEC020CA79DE74435754696C1DD33AA717A833D"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"j1m6SEH76RnD6mw7WF+3kNjCxNhNlpFe8hyCdk8jHob624//BuzFJpMFEYbIue8J","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582123,"ClasseServizio":0,"Crypt":"6hl2ghhU6rxBnCBeErfanVBs/zThK6yYnWJQxmoHE+Rws4OKQp4oDbRbSTkXuBbn9OJHy9NaLvveE3Tn2XxLUlwPvqv+yIZW8bmPR9a5FXOaH3R+rtFh2BdabTvUbOcBeR91H3o5xL0L8efaP9pZgQ==","Hash":"2F740DBB5228F14B05DAF733A3DD0394A4184B079645409C767A4359A70AA1F5"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT35Z0503411701000000002419","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002419","CodiceDivisa":"EUR","Descrizione":"000000002419","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002419","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582123","Type":102,"Crypt":"pfWbk21Av4bh7W6bQ6PiFsT4Q1myWDJV1quDb0ZgtWtuNPRct5k3mAYjonynJm4K","Hash":"C319C5A398B7051AEC09AC26C78CD1A28981C32AB304536CDC71CB966D8EC2EE"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"j1m6SEH76RnD6mw7WF+3kNjCxNhNlpFe8hyCdk8jHob624//BuzFJpMFEYbIue8J","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582124,"ClasseServizio":0,"Crypt":"FO8FA9g4AIjkshQ6sFNovaudOrib5FwKCkbyDdH5LM/8LWko4ojrJlA2++i8eSrkbyqLYkamMlDl+7l/NfoEOcerXqNzQhIeOXVuLGypmY7C4OrmTKsiuPJzwM80l5cqOe7AxRzcdf90l6a2ub8QAA==","Hash":"985994BF9760B716B131D5E35690B4CBFA854B39EE8EDAED8DB20B5B62FF7664"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT89V0503411701000000002420","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002420","CodiceDivisa":"EUR","Descrizione":"000000002420","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002420","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582124","Type":102,"Crypt":"BrYp1BTINhfFNhBYUeF9hlL1kDLP0BWd/WFBbADG+a8f3OlXkAdGR+BbF2gMKy22","Hash":"7ACB5B31E72373FB7988E33EAD49DD3E7795B8E273E49C04AC1146E7804B0101"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"j1m6SEH76RnD6mw7WF+3kNjCxNhNlpFe8hyCdk8jHob624//BuzFJpMFEYbIue8J","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582125,"ClasseServizio":0,"Crypt":"v8YQgbhSi9jPeXy3CNqqgn2tLNB0a/zrqwZCOfAfqqCzY8WrwdTcMx2eqKIeMCv/MtN1cIxKwQOoJn08B++8Qnv9JA9pU/RoGAd8XPDLej8jN9KIWnc1lzQZLIuAm5tpkZJY8VVA9bl3kd9UxsvBrQ==","Hash":"71A692CE73486F3BE3F8EB098CA0474130527BFDBB8D1142AC84BA31ED24290D"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":2.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT66W0503411701000000002421","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002421","CodiceDivisa":"EUR","Descrizione":"000000002421","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002421","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582125","Type":102,"Crypt":"W021gdcTLXfiBATMmPwadeaOQzTi3FBN64To6HVP13CLbT37wYIurqAvq01jCgiA","Hash":"187A1CA7AF63CD53EBAFFA4694BAF3D3A64F828D8EFF8B85482818731B2A92FC"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"j1m6SEH76RnD6mw7WF+3kNjCxNhNlpFe8hyCdk8jHob624//BuzFJpMFEYbIue8J","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582126,"ClasseServizio":0,"Crypt":"1W8pKg3cxRlzHWVh2RMPCh+FHht+yebDcbqmnhlwuCDB2pnkwaZY9jR5MLm9v5O5gbChikngyi90sdITiqKg8Pq8GA9GkYr+WZKQW341EdlCSe0ABDUHmjH9MZ1m4Il04arCuxbThnPirua9X/NcTw==","Hash":"8F1DE79715FE2F856941BF696D4FD80C8D6B6FD01F4A18872D4072F30523FAA9"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT43X0503411701000000002422","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002422","CodiceDivisa":"EUR","Descrizione":"000000002422","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002422","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582126","Type":102,"Crypt":"XzF5x3tfTYNv2xOAfx/HC68fdAGulUKXqP/Ey6h3I1ouhniAc67PrTBH6J/+cidg","Hash":"3B3AEC7C2DC7EFBAE622862FD8544CCAD62A71D1D777B6E7BFC9A9F7153FCBC0"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"j1m6SEH76RnD6mw7WF+3kNjCxNhNlpFe8hyCdk8jHob624//BuzFJpMFEYbIue8J","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582127,"ClasseServizio":0,"Crypt":"aHHXY9jf3vEg/Cm9vlN3RXh4WODicayAVGtPW1uYiVs0Xun9Jb5oABRjl7L4dWwf7q1jAXQzJX5jOPhQJq2vwZADB4ViO7wd4x+8UDDKq++hRXI1qhpzQGxR4uFfGzTQeidYl2UYVyE+maqdBuzuFQ==","Hash":"67D37D60CACDCA72F9C6963BD557C577FE068C0DFBBC648E5BF9E6F343CC9264"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT20Y0503411701000000002423","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002423","CodiceDivisa":"EUR","Descrizione":"000000002423","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002423","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582127","Type":102,"Crypt":"yCkGbzKgVDOXt7ziHaNs5MGHau6ICZV/V03FmqNTM0ALw8DApmHXT619/4DunCSA","Hash":"B6FFE6D4B1F76C9C862BF745D5C156A2F898624A05FFEB7A648DE709A76FB27C"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"j1m6SEH76RnD6mw7WF+3kNjCxNhNlpFe8hyCdk8jHob624//BuzFJpMFEYbIue8J","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582128,"ClasseServizio":0,"Crypt":"10Sn4cm7wL9BItBNtA6jHVVg8YWagtSbmKPjuSt3ZjyFEGBiOXwoATVcDMLWpfAG2nlhS4OQ0n8uDT3MPQtu+Q/5tHfnQMg2XxKkx+3vmC5GCHNhAi1d90Rv30djjIv7rFUmbAWJODF2yk3ApR8/Ow==","Hash":"75F447A17BC4BE5F03758F5BAC2CE631A2D8A125025F18D91942DAFD052BFC10"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT94Z0503411701000000002424","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002424","CodiceDivisa":"EUR","Descrizione":"000000002424","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002424","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582128","Type":102,"Crypt":"hb+6gS9PPtt+UgrtqF5fPOy9P0VFgToWpKYgMi5/lDwmuv72KXIFJeIkx1FNT/NK","Hash":"5D8BBBC366819B0E8901BB51E013A26D948E5A99ED4BC0F2ACBCB9866719F492"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"j1m6SEH76RnD6mw7WF+3kNjCxNhNlpFe8hyCdk8jHob624//BuzFJpMFEYbIue8J","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582129,"ClasseServizio":0,"Crypt":"K2LawyC9ARxz+FhsBvsNDGasLyOuHBDfHL+3R6Eu6ubcvg9/0xy/7jHmYt1wqz8Ypph9sNwjFscI/A3jKT43OOGOUogOwlO+xzlHBYdnzigCIeFYZhS+Y0ygTiX4e0itKNKRIzdTs/CgDr+vyXrDCg==","Hash":"5D95DFF4722F884C0E44AFE5D5DCAC9192E99B5733E5FB5254F074700D2A4CDF"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT64A0503411701000000002425","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002425","CodiceDivisa":"EUR","Descrizione":"000000002425","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002425","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582129","Type":102,"Crypt":"ViVdiC8XoaAyK5/iHCCNybe3Yi2OFH9ajhYtEiK9LvCzErB0GmRG+uybaRVmuxWw","Hash":"681482A02BC6A8D6A4DB0BFCFE3C021AEA6C8C119EE06F137994B8948EABA4F0"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"j1m6SEH76RnD6mw7WF+3kNjCxNhNlpFe8hyCdk8jHob624//BuzFJpMFEYbIue8J","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582130,"ClasseServizio":0,"Crypt":"P7t+3nyoXZWvLA+JNSCsWuomftsb0PSBFsviFmqogjn2Uu79/DRgIgQgrswu4BqSWiAetgT8lkJ2QduhcvKtwiwqjakukFoCYEeKtUT2+sce81XredzKF6qBpjRjGi1MqRFjU3JaNYRjfG9iZWRllQ==","Hash":"B032B84BA3B8E4E0D72A17FD30576AD1219F1437249A4135856DBEC3DBE0DAB4"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT41B0503411701000000002426","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002426","CodiceDivisa":"EUR","Descrizione":"000000002426","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002426","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582130","Type":102,"Crypt":"wgw2gth8MBwD0EdMYH9C+jlr+siUxbBc7j7ASOcktXEXb4uAbxgCZmvkUIKavDqQ","Hash":"38A913771F99EC52B23F2A4AC5C168F5BED83111EE6545153B7CFD34C31E2091"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"j1m6SEH76RnD6mw7WF+3kNjCxNhNlpFe8hyCdk8jHob624//BuzFJpMFEYbIue8J","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582131,"ClasseServizio":0,"Crypt":"FUKj4gAPJsD58PPIuDitF4JuklJcqqYtxNs3r9llP0kL6puE20HtbEMjPtYkf/NIiJZtpYzu64H52rmhKCwc4ZfZoK6HQty5ha4H3DE5ZbVFy/Uh3QhmfpJzvQa7UXxMvZtXN+meHgjqlvHAGfExdQ==","Hash":"0626B98197752A746DFBA443CA4E91EA02FB7405E3CA2F638EA23A14E6B6623C"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT18C0503411701000000002427","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002427","CodiceDivisa":"EUR","Descrizione":"000000002427","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002427","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582131","Type":102,"Crypt":"okzMnLTqrBWEh7LLaNTP/LbO2q8WEqCk8vQOMtzXspAcYqUF2VnhF3KV7BMzAmZn","Hash":"1D863707CB0772F373EEC4AABA0022E39D891E5A2D8FC0805784CDD0F2AD7265"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"j1m6SEH76RnD6mw7WF+3kNjCxNhNlpFe8hyCdk8jHob624//BuzFJpMFEYbIue8J","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582132,"ClasseServizio":0,"Crypt":"H42ayjJhVWXHsyNy4zRz2HsThl4IRSPQkL1QU6MuaotCtEjGOFoN2F+Y83N8A7c3ZKHkgcoCHaskZ05IkJLEgUUvcYbAUma735CJOUb6uTI8u6DtKF8vqkbfVqvoYv0H7o4aY/kaoYEmJcTx3c9rmg==","Hash":"EC227731D8A137AB9415DBFA64DC3668DF18D55FEB62A8BC77626632B83D9460"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT92D0503411701000000002428","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002428","CodiceDivisa":"EUR","Descrizione":"000000002428","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002428","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582132","Type":102,"Crypt":"/aKIEdCVM5iMiuRIF76mkfXDl8lo20T8fGg1XlsngwafMWizrJN7j0sysLufSI+0","Hash":"D9BFE4EE1CB52C61EDB2860134E7DAAC878970BF38829442181C8D7BE7700E90"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"j1m6SEH76RnD6mw7WF+3kNjCxNhNlpFe8hyCdk8jHob624//BuzFJpMFEYbIue8J","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":2582133,"ClasseServizio":0,"Crypt":"wl/8eCykRgh/qnLO72X/99iN6JGfQM/KpQG/4PDOKs/KyhutlCUcg7jHJUtyMnaIUPcM5er4P9dOjjRHiSiHT5eZjM6479wKeRGl1oGU1U6KRfxeAgA3TmD2YEqt2Ha+nOUHBy6cLqhIhZ/FIVOV4w==","Hash":"FE9A0C6C26C23D65348F34C920B300364B1CBBF63115765848F8E0F546907EF1"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"FILIALE CONTROPARTI ISTITUZIONALI","UltimoAggiornamento":"2019-03-19T00:00:00","Saldo":0.00,"DataSaldo":"2019-03-19T00:00:00","Stato":1,"Bic":"BAPPIT22C34","Id":null,"IdAzienda":"106609","CodiceIban":"IT69E0503411701000000002429","CodiceAbi":"05034","CodiceCab":"11701","CodiceFiliale":"11701","NumeroRapporto":"000000002429","CodiceDivisa":"EUR","Descrizione":"000000002429","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000002429","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"2582133","Type":102,"Crypt":"ssOt4dgZXspeiaje3XzwZYiBPhh+9kf7swveAkiDgh2yV1/8/HLv55cA4Y29d+hE","Hash":"83C2C9A3C4EB921A30E250F39E759EDD9A0084AEE3009EFAC91A80BCFF69ACC4"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"j1m6SEH76RnD6mw7WF+3kNjCxNhNlpFe8hyCdk8jHob624//BuzFJpMFEYbIue8J","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}}];
    var PROFILABLE_DISPOSIZIONI = {"TIPO_DOCUMENTO":[{"K":"0","V":"Secondo accordi"},{"K":"1","V":"Ri.Ba."},{"K":"2","V":"Conferma d'ordine"}],"ESITO_PAGAMENTO":[{"K":"1","V":"Si"},{"K":"2","V":"No"}]};

    var jDisposizione = {"DataScadenza":null,"CodAbiDomiciliataria":null,"CodCabDomiciliataria":null,"DenominazioneCreditore":null,"DescrizioneCreditore":null,"DescrizioneRiba":null,"NumeroRicevuta":null,"TipoDocumento":null,"Debitore":null,"FlgRibaEstera":null,"RichiestaEsito":null,"ListCabOrdinante":null,"Identifier":{"Id":null,"Version":null,"IdAzienda":null,"IdRapporto":null,"ClasseServizio":20,"Crypt":"HcJo5Wk3dPtVwBqj2UMQZAcQe/d6Te691Bagwfu8WBqmCasri1495nRVXRKvQRF8YTbelR+YxIsEyc5NbJGjT+uddocVCg4H97UDc55fo91VpaWMzrEhe/RHNqPMammE","Hash":"DA32AA3A0E8BCDA234320D31B5C23DB776E6FDFF014BD0965B288DF8881FA68E"},"IdentifierDistinta":null,"Ordinante":null,"Importo":null,"Divisa":null,"Position":null};
    var Sections = {
        DATA_ENTRY: "#DATA_ENTRY",
    };

    var spallaName = "#b89ce8c4160b46b391a5051a98ccaf2b_4";

    // Business ViewModel
    function viewModel(disposizione) {
        var self= this;

        self.CurrentSection = ko.observable();
        self.disposizione = ko.observable(new App.Riba.IncassiRiba.DisposizioneRibaBo(disposizione));

        // Init
        self.Init = function () {
            location.hash = Sections.DATA_ENTRY;
        };
        self.Init();
    }

    var rootViewModel = new viewModel(jDisposizione);

    $(document).ready(function () {
        ko.applyBindings(rootViewModel, document.getElementById('b89ce8c4160b46b391a5051a98ccaf2b_3'));

        // Route
        var sammy = Sammy('#b89ce8c4160b46b391a5051a98ccaf2b_3', function() {
            this.get(Sections.DATA_ENTRY, function() {
                rootViewModel.CurrentSection(Sections.DATA_ENTRY);

                ko.postbox.publish('disposizione-riba.INITIALIZE');

                $.ajax('/anchise2.web/Widget/LinkRapidi').success(function (html) {
                    $(spallaName).append(html);
                });
            });
        });
        sammy.run();
    });
</script>




                        </div>