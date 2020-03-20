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



<script type="text/html" id="cdaca5106ed041b4b8a994813143b8cd_5">
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
        template: { element: 'cdaca5106ed041b4b8a994813143b8cd_5' },
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






<div id="cdaca5106ed041b4b8a994813143b8cd_6">
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
            $('.hide', $('#cdaca5106ed041b4b8a994813143b8cd_6')).removeClass('hide');
        };
    };

    var uiHelper = new UiViewModel();

    $(document).ready(function () {
        ko.applyBindings(uiHelper, document.getElementById('cdaca5106ed041b4b8a994813143b8cd_6'));

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








<script type="text/html" id="filter-esito">

    <div class="riquadro">
        <div>
            <div style="float:left;">
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Esiti Riba - Rid - Mav</h1>
            </div>
        </div>
        <div class="clearall"></div>
        <div data-bind="with: Filter">
            <!-- VALIDATION -->
            <validation-messages params="Validation: $component.List.Validation"></validation-messages>
            <!-- SELEZIONE DATI-->
            <div class="section">
                <div class="row">
                    <h3 class="titleSection">
                        Dati
                    </h3>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="form-field-input col-xs-2">
                            <label class="control-label">
                                Rag. Soc./Intestatario:
                            </label>
                        </div>
                        <div class="form-field-input col-xs-4">
                            <div class="form-field">
                                <select class="form-control"
                                        data-bind="options: $component.Aziende, optionsCaption: 'Tutti', optionsText: 'RagioneSociale', value: $component.AziendaSelezionata"></select>
                            </div>
                        </div>
                        <div class="form-field-input col-xs-2">
                            <label class="control-label">
                                Sia:
                            </label>
                        </div>
                        <div class="form-field-input col-xs-2">
                            <div class="form-field">
                                <input type="text" class="form-control" data-bind="value: $component.CodSia, enable:false" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="form-field-input col-xs-2">
                            <label class="control-label">
                                Banca:
                            </label>
                        </div>
                        <div class="form-field-input col-xs-4">
                            <div class="form-field">
                                <select class="form-control"
                                        data-bind="options: $component.Banche, optionsCaption: 'Tutti', optionsText: 'Descrizione', value: $component.BancaSelezionata"></select>
                            </div>
                        </div>
                        <div class="form-field-input col-xs-2">
                            <label class="control-label">
                                Mostra
                            </label>
                        </div>
                        <div class="form-field-input col-xs-2">
                            <div class="form-field">
                                <select class="form-control"
                                        data-bind="options: $component.List.PageSizeDropDown, value: Size"></select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="form-field-input col-xs-2">
                            <label class="control-label">
                                Conto:
                            </label>
                        </div>
                        <div class="form-field-input col-xs-4">
                            <div class="form-field">
                                <select class="form-control"
                                        data-bind="options: $component.Conti, optionsCaption: 'Tutti', optionsText: 'Conto', value: $component.ContoSelezionato"></select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- AVANZATE -->
            <div class="section">
                <div class="row link" data-bind="click: $component.ToggleAdvancedFilter">
                    <h3 class="titleSection">
                        Avanzate
                    </h3>
                    <div class="collapse-img-position">
                        <div data-bind="css: $component.AvanzateCollapseCss" class="icon-replace icon-collapse active"></div>
                    </div>
                </div>
                <div data-bind="slideVisible: $component.AvanzateBodyVisible">
                    <div class="row">
                        <div class="col-xs-2 col-xs-offset-2">Da:</div>
                        <div class="col-xs-2 col-xs-offset-2">A:</div>
                    </div>
                    <div class="row">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-xs-2">Data scadenza:</label>
                                <div class="col-xs-3">
                                    <date-picker params="Date: DataScadenzaFrom"></date-picker>
                                </div>
                                <div class="col-xs-3 col-xs-offset-1">
                                    <date-picker params="Date: DataScadenzaTo"></date-picker>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-xs-2">Data caricamento</label>
                                <div class="col-xs-3">
                                    <date-picker params="Date: DataCaricamentoFrom"></date-picker>
                                </div>
                                <div class="col-xs-3 col-xs-offset-1">
                                    <date-picker params="Date: DataCaricamentoTo"></date-picker>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-xs-2">Importo</label>
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" data-bind="numericTextSeparator: ImportoFrom" />
                                </div>
                                <div class="col-xs-3 col-xs-offset-1">
                                    <input type="text" class="form-control" data-bind="numericTextSeparator: ImportoTo" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-xs-2">Debitore:</label>
                                <div class="col-xs-2">
                                    <input type="text" class="form-control" data-bind="value: DescrizioneDebitore" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-xs-2">Esiti:</label>
                                <div class="col-xs-2">
                                    <select class="form-control"
                                            data-bind="options: $component.Esiti, optionsCaption: 'Tutti', optionsText: 'description', optionsValue: 'value', value: $component.EsitoSelezionato"></select>
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
        <input type="button" class="btn btn-primary" value="Visualizza " data-bind="singleClick: Search" />
    </div>

</script>


<script type="text/javascript">
    ko.components.register('filter-esito',
        {
            template: { element: 'filter-esito' },
            viewModel: function(params) {
                var self = this;

                if (!params.List instanceof App.Core.PagedArrayAsync) {
                    throw "Parameter List not valid";
                }

                self.Filter = params.filter;
                self.List = params.list;
                self.Aziende = params.aziende;
                self.Banche = params.banche;
                self.Conti = params.conti
                self.AziendaSelezionata = params.aziendaSelezionata;
                self.BancaSelezionata = params.bancaSelezionata;
                self.ContoSelezionato = params.contoSelezionato;
                self.EsitoSelezionato = params.esitoSelezionato;
                self.Esiti = params.esiti;
                self.AvanzateBodyVisible = ko.observable(false);
                self.AvanzateCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.AvanzateBodyVisible));

                self.ToggleAdvancedFilter = function () {
                    self.AvanzateBodyVisible(!self.AvanzateBodyVisible());
                };
                
                self.CodSia = ko.pureComputed(function () {
                    if (self.AziendaSelezionata()) {
                        return self.AziendaSelezionata().CodiceSia();
                    } else {
                        return null;
                    }
                });

                self.Search = function () {
                    location.hash = Sections.RESULT;
                }
            }
        });
</script>


<script type="text/html" id="list-esito">

    <div>
        <div class="riquadro">
            <div>
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Esiti Riba - Rid - Mav</h1>
                
            </div>
            <div class="table-responsive">
                <!--ko with: Filter-->
                <!-- VALIDATION -->
                <validation-messages params="Validation: $component.List.Validation"></validation-messages>
                <div class="row">
                    <div class="form-group">
                        <div class="form-field-input col-xs-3">
                            <label class="control-label">
                                Rag. Soc./Intestatario
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
                                Mostra
                            </label>
                            <div class="form-field">
                                <div class="col-xs-4">
                                    <select class="form-control"
                                            data-bind="options: $component.List.PageSizeDropDown, value: Size"></select>
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
                    <div data-bind="slideVisible: $component.AvanzateBodyVisible">
                        <div class="row">
                            <div class="col-xs-2 col-xs-offset-2">Da:</div>
                            <div class="col-xs-2 col-xs-offset-2">A:</div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-2">Data scadenza:</label>
                                    <div class="col-xs-3">
                                        <date-picker params="Date: DataScadenzaFrom"></date-picker>
                                    </div>
                                    <div class="col-xs-3 col-xs-offset-1">
                                        <date-picker params="Date: DataScadenzaTo"></date-picker>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-2">Data caricamento</label>
                                    <div class="col-xs-3">
                                        <date-picker params="Date: DataCaricamentoFrom"></date-picker>
                                    </div>
                                    <div class="col-xs-3 col-xs-offset-1">
                                        <date-picker params="Date: DataCaricamentoTo"></date-picker>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-2">Importo</label>
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control" data-bind="numericTextSeparator: ImportoFrom" />
                                    </div>
                                    <div class="col-xs-3 col-xs-offset-1">
                                        <input type="text" class="form-control" data-bind="numericTextSeparator: ImportoTo" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-2">Debitore:</label>
                                    <div class="col-xs-2">
                                        <input type="text" class="form-control" data-bind="value: DescrizioneDebitore" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-2">Esiti:</label>
                                    <div class="col-xs-2">
                                        <select class="form-control"
                                                data-bind="options: $component.Esiti, optionsCaption: 'Tutti', optionsText: 'description', optionsValue: 'value', value: $component.EsitoSelezionato"></select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="margin-bottom10 text-right">
                            <input type="button" class="btn btn-primary" value="Ricerca" data-bind="singleClick: $component.Search" />
                        </div>
                    </div>
                </div>
                <!--/ko-->
                <div data-bind="visible: List.PagingFilter.ListaClassiServizio().length == 0 || List.PagingFilter.ListaClassiServizio.indexOf(App.Common.ClassiServizio.ESITI_RIBA) >= 0">
                    <h3 class="titleSection" style="margin-top: 10px">Riba</h3>
                    <table id="tableRiba" class="table">
                        <tbody>
                            <!-- result-->
                        </tbody>
                        <thead>
                            <tr>
                                <th dt-columnProperty="Ordinante.RagioneSociale" dt-sortColumn="1">
                                    Creditore
                                </th>
                                <th dt-columnProperty="DataScadenza" dt-dataType="date" dt-sortColumn="2">
                                    Scadenza
                                </th>
                                <th dt-columnProperty="DataCaricamento" dt-dataType="date" dt-sortColumn="3" dt-clickable="link">
                                    Caricamento
                                </th>
                                <th dt-columnProperty="Importo" dt-dataType="import" dt-sortColumn="4" dt-negativeValueColor="#ae0101">
                                    Importo
                                </th>
                                <th dt-fixedValue="EUR" class="dt-nosort">
                                    Divisa
                                </th>
                                <th dt-columnProperty="Causale" dt-sortColumn="6" dt-resource="EsitiRibaRidMav.CausaliRiba">
                                    Causale
                                </th>
                                <th dt-columnProperty="Debitore.Denominazione" dt-sortColumn="7">
                                    Debitore
                                </th>
                                <th dt-columnProperty="RiferimentoDebito" class="dt-nosort">
                                    Riferimento Debito
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div data-bind="visible: List.PagingFilter.ListaClassiServizio().length == 0 || List.PagingFilter.ListaClassiServizio.indexOf(App.Common.ClassiServizio.ESITI_RID) >= 0">
                    <h3 class="titleSection" style="margin-top: 10px">Rid</h3>
                    <table id="tableRid" class="table">
                        <tbody>
                            <!-- result-->
                        </tbody>
                        <thead>
                            <tr>
                                <th dt-columnProperty="Ordinante.RagioneSociale" dt-sortColumn="1">
                                    Creditore
                                </th>
                                <th dt-columnProperty="DataScadenza" dt-dataType="date" dt-sortColumn="2" dt-clickable="link">
                                    Scadenza
                                </th>
                                <th dt-columnProperty="DataCaricamento" dt-dataType="date" dt-sortColumn="3">
                                    Caricamento
                                </th>
                                <th dt-columnProperty="Importo" dt-dataType="import" dt-sortColumn="4" dt-negativeValueColor="#ae0101">
                                    Importo
                                </th>
                                <th dt-fixedValue="EUR" class="dt-nosort">
                                    Divisa
                                </th>
                                <th dt-columnProperty="Causale" dt-sortColumn="6" dt-resource="EsitiRibaRidMav.CausaliRid">
                                    Causale
                                </th>
                                <th dt-columnProperty="Debitore.Denominazione" dt-sortColumn="7">
                                    Debitore
                                </th>
                                <th dt-columnProperty="RiferimentoDebito" class="dt-nosort">
                                    Riferimento Debito
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div data-bind="visible: List.PagingFilter.ListaClassiServizio().length == 0 || List.PagingFilter.ListaClassiServizio.indexOf(App.Common.ClassiServizio.ESITI_MAV) >= 0">
                    <h3 class="titleSection" style="margin-top: 10px">Mav</h3>
                    <table id="tableMav" class="table">
                        <tbody>
                            <!-- result-->
                        </tbody>
                        <thead>
                            <tr>
                                <th dt-columnProperty="Ordinante.RagioneSociale" dt-sortColumn="1">
                                    Creditore
                                </th>
                                <th dt-columnProperty="DataScadenza" dt-dataType="date" dt-sortColumn="2" dt-clickable="link">
                                    Scadenza
                                </th>
                                <th dt-columnProperty="DataCaricamento" dt-dataType="date" dt-sortColumn="3">
                                    Caricamento
                                </th>
                                <th dt-columnProperty="Importo" dt-dataType="import" dt-sortColumn="4" dt-negativeValueColor="#ae0101">
                                    Importo
                                </th>
                                <th dt-fixedValue="EUR" class="dt-nosort">
                                    Divisa
                                </th>
                                <th dt-columnProperty="Causale" dt-sortColumn="6" dt-resource="EsitiRibaRidMav.CausaliMav">
                                    Causale
                                </th>
                                <th dt-columnProperty="Debitore.Denominazione" dt-sortColumn="7">
                                    Debitore
                                </th>
                                <th dt-columnProperty="RiferimentoDebito" class="dt-nosort">
                                    Riferimento Debito
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
            <div id="export-lista-esiti-riba-rid-mav" value="Esporta" style="float: right; margin-bottom: 1%"></div>
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
                self.Filter = params.filter;
                self.Aziende = params.aziende;
                self.Banche = params.banche;
                self.Conti = params.conti;
                self.AziendaSelezionata = params.aziendaSelezionata;
                self.BancaSelezionata = params.bancaSelezionata;
                self.ContoSelezionato = params.contoSelezionato;
                self.Search = params.search;
                self.EsitoSelezionato = params.esitoSelezionato;
                self.Esiti = params.esiti;

                self.AvanzateBodyVisible = ko.observable(false);
                self.AvanzateCollapseCss = ko.pureComputed(App.Core.CssCollapse(self.AvanzateBodyVisible));
                self.ToggleAdvancedFilter = function () {
                    self.AvanzateBodyVisible(!self.AvanzateBodyVisible());
                };

                self.FiltriAvanzati = ko.computed(function () {
                    var filtri = "";

                    if (self.List.PagingFilter.DataScadenzaFrom() != null &&
                        self.List.PagingFilter.DataScadenzaFrom() != "") {
                        filtri += 'Data scadenza da: ' +
                            moment(self.List.PagingFilter.DataScadenzaFrom()).format('DD/MM/YYYY') +
                            "; ";
                    }
                    if (self.List.PagingFilter.DataScadenzaTo() != null &&
                        self.List.PagingFilter.DataScadenzaTo() != "") {
                        filtri += 'Data scadenza a: ' +
                            moment(self.List.PagingFilter.DataScadenzaTo()).format('DD/MM/YYYY') +
                            "; ";
                    }
                    if (self.List.PagingFilter.DataCaricamentoFrom() != null &&
                        self.List.PagingFilter.DataCaricamentoFrom() != "") {
                        filtri +='Data caricamento da: ' +
                            moment(self.List.PagingFilter.DataCaricamentoFrom()).format('DD/MM/YYYY') +
                            "; ";
                    }
                    if (self.List.PagingFilter.DataCaricamentoTo() != null &&
                        self.List.PagingFilter.DataCaricamentoTo() != "") {
                        filtri += 'Data caricamento a: ' +
                            moment(self.List.PagingFilter.DataCaricamentoTo()).format('DD/MM/YYYY') +
                            "; ";
                    }
                    if (self.List.PagingFilter.ImportoFrom() != null &&
                        self.List.PagingFilter.ImportoFrom() != "") {
                        filtri += 'Importo da: ' +
                            self.List.PagingFilter.ImportoFrom() +
                            "; ";
                    }
                    if (self.List.PagingFilter.ImportoTo() != null &&
                        self.List.PagingFilter.ImportoTo() != "") {
                        filtri += 'Importo a: ' +
                            self.List.PagingFilter.ImportoTo() +
                            "; ";
                    }
                    if (self.List.PagingFilter.DescrizioneDebitore() != null &&
                        self.List.PagingFilter.DescrizioneDebitore() != "") {
                        filtri += 'Descrizione debitore: ' +
                            self.List.PagingFilter.DescrizioneDebitore() +
                            "; ";
                    }
                    if (self.List.PagingFilter.ListaClassiServizio() != null &&
                        self.List.PagingFilter.ListaClassiServizio().length == 1) {
                        filtri += 'Esito: ' +
                            Localization.EsitiSectionTitle.GetLabel(self.List.PagingFilter.ListaClassiServizio()[0]) +
                            "; ";
                    }

                    if (filtri == "") {
                        filtri = "Nessun filtro avanzato impostato";
                    }
                    return filtri;
                });

                self.ReturnToFilter = function () {
                    location.hash = Sections.SEARCH;
                }

                self.GetTitleLocalization = function (item) {
                    return Localization.EsitiSectionTitle.GetLabel(item.IdEsito.ClasseServizio());
                }

                self.dispose = function () {
                    _pageSubscribe.dispose();
                }
            }
        });
</script>


<script type="text/html" id="esito-mav">
    <div class="riquadro">
        <div>
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Dettaglio esito Mav</h1>
        </div>

        <div data-bind="with: Esito" style="font-size: 12px;">
            <div class="section">
                <div class="row">
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Descrizione creditore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.RagioneSociale"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Scadenza:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataScadenza"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Importo:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="numericTextSeparator: Importo"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Divisa:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Divisa"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Causale:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Causale"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice SIA ricevente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Sia"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice ABI mittente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Abi"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice CAB mittente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Cab"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice rapporto mittente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Conto"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Tipo debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: TipoDebitore"></label>
                                <text> - </text>
                                <label data-bind="text: TipoDebitoreDesc"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Codice"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Descrizione debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Denominazione"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice Fiscale debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.CodiceFiscale"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Indirizzo debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Indirizzo.Via"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    CAP debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Indirizzo.Cap"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Comune debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Indirizzo.Comune"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice ABI debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: DbtrAbi"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice CAB debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: DbtrCab"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Importo spese:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="numericTextSeparator: ImportoSpese"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Valuta debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataValuta"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Rif. promemoria:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: RifPromemoria"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Caricamento:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataCaricamento"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Rif. debito:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: RiferimentoDebito"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="margin-bottom20 text-right">
        
        <div id="export-dett-esiti-mav" value="Esporta" style="float: right; margin-bottom: 1%"></div>
        <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back" />
    </div>

</script>


<script type="text/javascript">

    ko.components.register('esito-mav', {
        template: { element: 'esito-mav' },
        viewModel: function (params) {
            var self = this;

            self.Esito = params.Esito;

            self.Back = function () { history.back(); };

        }
    });
</script>


<script type="text/html" id="esito-rid">
    <div class="riquadro">
        <div>
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Dettaglio esito Rid</h1>
        </div>

        <div data-bind="with: Esito" style="font-size: 12px;">
            <div class="section">
                <div class="row">
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Descrizione creditore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.RagioneSociale"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Scadenza originaria:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataScadenza"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Importo:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="numericTextSeparator: Importo"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Divisa:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Divisa"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Causale:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Causale"></label>
                                <text> - </text>
                                <label data-bind="text: CausaleStorno"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice SIA ricevente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Sia"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice ABI mittente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Abi"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice CAB mittente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Cab"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice rapporto mittente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Conto"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Tipo debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: TipoDebitore"></label>
                                <text> - </text>
                                <label data-bind="text: TipoDebitoreDesc"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Codice"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Descrizione debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Denominazione"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice Fiscale debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.CodiceFiscale"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Indirizzo debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Indirizzo.Via"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    CAP debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Indirizzo.Cap"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Comune debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Indirizzo.Comune"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice ABI debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: DbtrAbi"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice CAB debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: DbtrCab"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Importo spese:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="numericTextSeparator: ImportoSpese"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Scadenza effettiva:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataScadenzaEffettiva"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Rif. promemoria:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: RifPromemoria"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Caricamento:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataCaricamento"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Rif. debito:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: RiferimentoDebito"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Facolta' storno di addebito:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: FacoltaStorno"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="margin-bottom20 text-right">
        
        <div id="export-dett-esiti-rid" value="Esporta" style="float: right; margin-bottom: 1%"></div>
        <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back" />
    </div>

</script>


<script type="text/javascript">
    ko.components.register('esito-rid', {
        template: { element: 'esito-rid' },
        viewModel: function (params) {
            var self = this;

            self.Esito = params.Esito;

            self.Back = function () { history.back(); };

            self.StampaPdf = function (data) {
                var data = ko.toJS(self.Esito);

                
            };

            //self.AbiBanca = ko.pureComputed(function () {
            //    var result = "";
            //    if (self.Esito().AbiOrdinante()) {
            //        var banca = App.Common.GetBancheFromPiazzatura(_filterPiazzatureBanche(self.Esito().AbiOrdinante()));
            //        if (banca.length == 1)
            //            result = banca[0].CodiceAbi + " - " + banca[0].Descrizione;
            //        else
            //            result = self.Esito().AbiOrdinante();
            //    }

            //    return result;
            //}, self);

            //var _filterPiazzatureBanche = function (Abi) {
            //    return ko.utils.arrayFilter(PIAZZATURA, function (p) {
            //        var current = new App.Common.PiazzaturaBo(p);
            //        return (current.Rapporto.CodiceAbi() === Abi);
            //    });
            //};
        }
    });
</script>


<script type="text/html" id="esito-riba">
    <div class="riquadro">
        <div>
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Dettaglio esito Riba</h1>
        </div>

        <div data-bind="with: Esito" style="font-size: 12px;">
            <div class="section">
                <div class="row">
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Descrizione creditore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.RagioneSociale"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Scadenza:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataScadenza"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Importo:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="numericTextSeparator: Importo"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Divisa:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Divisa"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Causale:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Causale"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice SIA ricevente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Sia"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice ABI mittente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Abi"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice CAB mittente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Cab"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice rapporto mittente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Conto"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Tipo debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: TipoDebitore"></label>
                                <text> - </text>
                                <label data-bind="text: TipoDebitoreDesc"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Codice"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Descrizione debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Denominazione"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice Fiscale debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.CodiceFiscale"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Indirizzo debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Indirizzo.Via"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    CAP debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Indirizzo.Cap"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Comune debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Indirizzo.Comune"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice ABI debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: DbtrAbi"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice CAB debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: DbtrCab"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Importo spese:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="numericTextSeparator: ImportoSpese"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Valuta debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataValuta"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Rif. promemoria:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: RifPromemoria"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Caricamento:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataCaricamento"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Rif. debito:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: RiferimentoDebito"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Numero ricevuta:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: NumeroRicevuta"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="margin-bottom20 text-right">
        
        <div id="export-dett-esiti-riba" value="Esporta" style="float: right; margin-bottom: 1%"></div>
        <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back" />
    </div>

</script>


<script type="text/javascript">
    ko.components.register('esito-riba', {
        template: { element: 'esito-riba' },
        viewModel: function (params) {
            var self = this;

            self.Esito = params.Esito;

            self.Back = function () { history.back(); };

            self.StampaPdf = function (data) {
                var data = ko.toJS(self.Esito);
            };

        }
    });
</script>




<script type="text/html" id="riga-errore-scartoriba">
    <!-- ko template: {name: TemplateRiga()} --><!-- /ko -->
</script>

<script type="text/html" id="sintetico">
    <!-- ko with: Errore -->
    <td data-bind="text: TipoValore"></td>
    <td data-bind="text: ValoreErrato"></td>
    <td data-bind="text: $component.LocalizeCodiceErrore(CodiceErrore)"></td>
    <!-- /ko -->
</script>

<script type="text/html" id="dettaglio">
    <!-- ko with: Errore -->
    <td colspan="9">
        <div class="row">
            <div class="col-xs-12 white-block">
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                RagioneSocialeDebitore
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="text: RagioneSocialeDebitore"></label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Codice ABI debitore
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="text: AbiDebitore"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Codice CAB debitore
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="text: CabDebitore"></label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Importo
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="numericTextSeparator: Importo"></label><label>&nbsp;EUR</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Data Scadenza
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="dateText: DataScadenza"></label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Tipo Valore
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="text: TipoValore"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Valore Errato
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="text: ValoreErrato"></label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Codice Errore - Descrizione
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="text: $component.LocalizeCodiceErrore(CodiceErrore)"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </td>
    <!-- /ko -->
</script>

<script type="text/javascript">
    ko.components.register('riga-errore-scartoriba', {
        template: { element: 'riga-errore-scartoriba' },
        viewModel: function (params) {
            var self = this;
            // Model
            self.Errore = params.Errore;
            self.TemplateRiga = params.TemplateRiga;

            self.LocalizeCodiceErrore = function (codErrore) {
                return codErrore + ' - ' + ko.utils.GetResource('EsitiER.CodiciErrore.' + codErrore);
            };
        }
    });
</script>

<script type="text/html" id="scarto-incasso-riba">
    <div class="riquadro">
        <div>
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Dettaglio Scarto Incasso Riba</h1>
        </div>

        <div data-bind="with: Esito" style="font-size: 12px;">
            <div class="section">
                <div class="row">
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Descrizione creditore:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Ordinante.RagioneSociale"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Codice SIA ricevente:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Ordinante.Sia"></label>
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
                                        Nome Supporto:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <!-- ko if: IsIncrociata -->
                                    <a data-bind="text: NomeSupporto, singleClick: $component.GoToDistinta" style="cursor: pointer; text-decoration: underline"></a>
                                    <!-- /ko -->
                                    <!-- ko if: !IsIncrociata() -->
                                    <span data-bind="text: NomeSupporto"></span>
                                    <!-- /ko -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Data Creazione:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="dateText: DataCreazione"></label>
                                </div>
                            </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-right">
            <input id="change-row-button" type="button" class="btn btn-primary" value="dettaglio" data-bind="singleClick: ChangeRowView" />
        </div>

        <div>
            <!--ko with: ElencoErrori-->
            <div class="row">
                <div class="table-responsive">
                    <div class="dataTables_wrapper" style="margin-top: 10px">
                        <table class="dataTable table">
                            <thead data-bind="visible: $component.TemplateRiga() == 'sintetico'">
                                <tr>
                                    <th>
                                        Tipo Valore
                                    </th>
                                    <th>
                                        Valore Errato
                                    </th>
                                    <th>
                                        Codice Errore - Descrizione
                                    </th>
                                </tr>
                            </thead>
                            <tbody data-bind="foreach: Page">
                                <tr data-bind="visible: $component.TemplateRiga() != 'sintetico'">
                                    <th colspan="9">
                                        <p>Errore numero <span data-bind="text: $index() + 1"></span></p>
                                    </th>
                                </tr>
                                <tr data-bind="component: {name: 'riga-errore-scartoriba', params: {Errore: $data, TemplateRiga: $component.TemplateRiga}}"></tr>
                            </tbody>
                        </table>
                    </div>
                    <paginatore params="PagedList: $data"></paginatore>
                </div>
            </div>
            <!--/ko-->
        </div>

    </div>
    <div class="margin-bottom20 text-right">
        
        <div id="export-dett-esiti-scarti-riba" value="Esporta" style="float: right; margin-bottom: 1%"></div>
        <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back" />
    </div>

</script>


<script type="text/javascript">
    ko.components.register('scarto-incasso-riba', {
        template: { element: 'scarto-incasso-riba' },
        viewModel: function (params) {
            var self = this;

            self.Esito = params.Esito;

            self.Back = function () { history.back(); };
            self.TemplateRiga = ko.observable('sintetico');
            self.ElencoErrori = new App.Core.PagedObservableArray({
                allData: [new App.Riba.IncassiRiba.ErroreScartoRibaBo(null)]
            });

            self.ChangeRowView = function (event) {
                if (self.TemplateRiga() === 'sintetico') {
                    self.TemplateRiga('dettaglio');
                    $(event.target).val('Sintetico');
                } else {
                    self.TemplateRiga('sintetico');
                    $(event.target).val('dettaglio');
                }
            };

            self.StampaPdf = function (data) {
                var data = ko.toJS(self.Esito);
            };

            self.AbiBanca = ko.pureComputed(function () {
                var result = "";
                if (self.Esito().Ordinante.Abi()) {
                    var banca = App.Common.GetBancheFromPiazzatura(_filterPiazzatureBanche(self.Esito().Ordinante.Abi()));
                    if (banca.length == 1)
                        result = banca[0].CodiceAbi + " - " + banca[0].Descrizione;
                    else
                        result = self.Esito().Ordinante.Abi();
                }

                return result;
            }, self);

            self.GoToDistinta = function () {
                var distinta = new App.Riba.IncassiRiba.DistintaRibaBo({ Identifier: ko.toJS(self.Esito().IdDistinta)});

                App.Core.SetDistinteSessionStorage(distinta);
                App.Core.SetEsitiSessionStorage(self.Esito);

                location.href = '/anchise2.web/IncassiRiba/DettaglioDistintaIncassoRiba';
            }

            var _esitoSubscribe = self.Esito.subscribe(function () {
                Http
                        .Post("/anchise2.web/IncassiRiba/SearchEsitiIncassoRiba/ErroriScartoList", ko.toJSON(self.Esito))
                        .success(function(data) {
                            if (!data.HasError) {
                                self.ElencoErrori.AllData(data.Response.Items);
                            }
                        });
            });

            var _filterPiazzatureBanche = function (Abi) {
                return ko.utils.arrayFilter(PIAZZATURA, function (p) {
                    var current = new App.Common.PiazzaturaBo(p);
                    return (current.Rapporto.CodiceAbi() === Abi);
                });
            };

            self.dispose = function(){
                _esitoSubscribe.dispose();
            }
        }
    });
</script>


<div id="cdaca5106ed041b4b8a994813143b8cd_4">
    <div id="cdaca5106ed041b4b8a994813143b8cd_2">
        <!-- RICERCA -->
        <div data-bind="visible: CurrentSection() == Sections.SEARCH" style="display: none;">
            <filter-esito params="filter: PagingFilter, list: List, aziende: Aziende, banche: Banche, conti: Conti, aziendaSelezionata: AziendaSelezionata, bancaSelezionata: BancaSelezionata, contoSelezionato: ContoSelezionato, esitoSelezionato: EsitoSelezionato, esiti: Esiti">

    <div class="riquadro">
        <div>
            <div style="float:left;">
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Esiti Riba - Rid - Mav</h1>
            </div>
        </div>
        <div class="clearall"></div>
        <div data-bind="with: Filter">
            <!-- VALIDATION -->
            <validation-messages params="Validation: $component.List.Validation">
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
                        <div class="form-field-input col-xs-2">
                            <label class="control-label">
                                Rag. Soc./Intestatario:
                            </label>
                        </div>
                        <div class="form-field-input col-xs-4">
                            <div class="form-field">
                                <select class="form-control" data-bind="options: $component.Aziende, optionsCaption: 'Tutti', optionsText: 'RagioneSociale', value: $component.AziendaSelezionata"><option value="">Tutti</option><option value="">AUTOMOBILE CLUB MODENA</option></select>
                            </div>
                        </div>
                        <div class="form-field-input col-xs-2">
                            <label class="control-label">
                                Sia:
                            </label>
                        </div>
                        <div class="form-field-input col-xs-2">
                            <div class="form-field">
                                <input type="text" class="form-control" data-bind="value: $component.CodSia, enable:false" disabled="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="form-field-input col-xs-2">
                            <label class="control-label">
                                Banca:
                            </label>
                        </div>
                        <div class="form-field-input col-xs-4">
                            <div class="form-field">
                                <select class="form-control" data-bind="options: $component.Banche, optionsCaption: 'Tutti', optionsText: 'Descrizione', value: $component.BancaSelezionata"><option value="">Tutti</option><option value="">05188 - BANCA POPOLARE DI VERONA - S. GEMINIANO E S. PROSPERO S.P.A.</option><option value="">05034 - BANCO BPM S.P.A.</option></select>
                            </div>
                        </div>
                        <div class="form-field-input col-xs-2">
                            <label class="control-label">
                                Mostra
                            </label>
                        </div>
                        <div class="form-field-input col-xs-2">
                            <div class="form-field">
                                <select class="form-control" data-bind="options: $component.List.PageSizeDropDown, value: Size"><option value="10">10</option><option value="20">20</option><option value="50">50</option><option value="100">100</option></select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="form-field-input col-xs-2">
                            <label class="control-label">
                                Conto:
                            </label>
                        </div>
                        <div class="form-field-input col-xs-4">
                            <div class="form-field">
                                <select class="form-control" data-bind="options: $component.Conti, optionsCaption: 'Tutti', optionsText: 'Conto', value: $component.ContoSelezionato"><option value="">Tutti</option><option value="">12900 - 000000047659</option><option value="">12900 - 000000047659</option></select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- AVANZATE -->
            <div class="section">
                <div class="row link" data-bind="click: $component.ToggleAdvancedFilter">
                    <h3 class="titleSection">
                        Avanzate
                    </h3>
                    <div class="collapse-img-position">
                        <div data-bind="css: $component.AvanzateCollapseCss" class="icon-collapse icon-replace active"></div>
                    </div>
                </div>
                <div data-bind="slideVisible: $component.AvanzateBodyVisible" style="display: block;">
                    <div class="row">
                        <div class="col-xs-2 col-xs-offset-2">Da:</div>
                        <div class="col-xs-2 col-xs-offset-2">A:</div>
                    </div>
                    <div class="row">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-xs-2">Data scadenza:</label>
                                <div class="col-xs-3">
                                    <date-picker params="Date: DataScadenzaFrom">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_1">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                                </div>
                                <div class="col-xs-3 col-xs-offset-1">
                                    <date-picker params="Date: DataScadenzaTo">
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
                                <label class="control-label col-xs-2">Data caricamento</label>
                                <div class="col-xs-3">
                                    <date-picker params="Date: DataCaricamentoFrom">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_3">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                                </div>
                                <div class="col-xs-3 col-xs-offset-1">
                                    <date-picker params="Date: DataCaricamentoTo">
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
                                <label class="control-label col-xs-2">Importo</label>
                                <div class="col-xs-3">
                                    <input type="text" class="form-control" data-bind="numericTextSeparator: ImportoFrom">
                                </div>
                                <div class="col-xs-3 col-xs-offset-1">
                                    <input type="text" class="form-control" data-bind="numericTextSeparator: ImportoTo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-xs-2">Debitore:</label>
                                <div class="col-xs-2">
                                    <input type="text" class="form-control" data-bind="value: DescrizioneDebitore">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-xs-2">Esiti:</label>
                                <div class="col-xs-2">
                                    <select class="form-control" data-bind="options: $component.Esiti, optionsCaption: 'Tutti', optionsText: 'description', optionsValue: 'value', value: $component.EsitoSelezionato"><option value="">Tutti</option><option value="58">Mav</option><option value="56">Riba</option><option value="57">Rid</option></select>
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

</filter-esito>
        </div>

        <div data-bind="visible: CurrentSection() == Sections.RESULT" style="">
            <list-esito params="List: List, filter: PagingFilter, search: Search, aziende: Aziende, banche: Banche, conti: Conti, aziendaSelezionata: AziendaSelezionata, bancaSelezionata: BancaSelezionata, contoSelezionato: ContoSelezionato, esitoSelezionato: EsitoSelezionato, esiti: Esiti">

    <div>
        <div class="riquadro">
            <div>
                <div class="flag riepilogo">&nbsp;</div>
                <h1>Esiti Riba - Rid - Mav</h1>
                
            </div>
            <div class="table-responsive">
                <!--ko with: Filter-->
                <!-- VALIDATION -->
                <validation-messages params="Validation: $component.List.Validation">
    <div data-bind="visible: ValidationSectionVisible" style="display: none;">
        <div class="messagePanel error" style="display: block">
            <h3 class="titleSection">
                Errori
            </h3>
            <ul data-bind="foreach: Validation"></ul>
        </div>
    </div>
</validation-messages>
                <div class="row">
                    <div class="form-group">
                        <div class="form-field-input col-xs-3">
                            <label class="control-label">
                                Rag. Soc./Intestatario
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
                                <select class="form-control" data-bind="options: $component.Banche, optionsCaption: 'Tutti', optionsText: 'Descrizione', value: $component.BancaSelezionata"><option value="">Tutti</option><option value="">05188 - BANCA POPOLARE DI VERONA - S. GEMINIANO E S. PROSPERO S.P.A.</option><option value="">05034 - BANCO BPM S.P.A.</option></select>
                            </div>
                        </div>
                        <div class="form-field-input col-xs-3">
                            <label class="control-label">
                                Conto:
                            </label>
                            <div class="form-field">
                                <select class="form-control" data-bind="options: $component.Conti, optionsCaption: 'Tutti', optionsText: 'Conto', value: $component.ContoSelezionato"><option value="">Tutti</option><option value="">12900 - 000000047659</option><option value="">12900 - 000000047659</option></select>
                            </div>
                        </div>

                        <div class="form-field-input col-xs-3">
                            <label class="control-label">
                                Mostra
                            </label>
                            <div class="form-field">
                                <div class="col-xs-4">
                                    <select class="form-control" data-bind="options: $component.List.PageSizeDropDown, value: Size"><option value="10">10</option><option value="20">20</option><option value="50">50</option><option value="100">100</option></select>
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
                        <label class="control-label col-xs-11" data-bind="text: $component.FiltriAvanzati, visible: !$component.AvanzateBodyVisible()" style="display: none;">Nessun filtro avanzato impostato</label>
                        <div class="collapse-img-position">
                            <div data-bind="css: $component.AvanzateCollapseCss" class="icon-collapse icon-replace active"></div>
                        </div>
                    </div>
                    <div data-bind="slideVisible: $component.AvanzateBodyVisible" style="display: block;">
                        <div class="row">
                            <div class="col-xs-2 col-xs-offset-2">Da:</div>
                            <div class="col-xs-2 col-xs-offset-2">A:</div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-2">Data scadenza:</label>
                                    <div class="col-xs-3">
                                        <date-picker params="Date: DataScadenzaFrom">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_5">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                                    </div>
                                    <div class="col-xs-3 col-xs-offset-1">
                                        <date-picker params="Date: DataScadenzaTo">
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
                                    <label class="control-label col-xs-2">Data caricamento</label>
                                    <div class="col-xs-3">
                                        <date-picker params="Date: DataCaricamentoFrom">
    <div class="col-xs-9 no-padding">
        <input type="text" class="form-control datepicker hasDatepicker" data-bind="enable: enable() != 'false', dateText: Date, uniqueId: Id" id="ko_unique_7">
    </div>
    <div class="col-xs-2">
        <a class="icon-replace icon-calendar active" href="javascript:void(0);" data-bind="singleClick: ShowPicker"></a>
    </div>
</date-picker>
                                    </div>
                                    <div class="col-xs-3 col-xs-offset-1">
                                        <date-picker params="Date: DataCaricamentoTo">
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
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-2">Importo</label>
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control" data-bind="numericTextSeparator: ImportoFrom">
                                    </div>
                                    <div class="col-xs-3 col-xs-offset-1">
                                        <input type="text" class="form-control" data-bind="numericTextSeparator: ImportoTo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-2">Debitore:</label>
                                    <div class="col-xs-2">
                                        <input type="text" class="form-control" data-bind="value: DescrizioneDebitore">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-2">Esiti:</label>
                                    <div class="col-xs-2">
                                        <select class="form-control" data-bind="options: $component.Esiti, optionsCaption: 'Tutti', optionsText: 'description', optionsValue: 'value', value: $component.EsitoSelezionato"><option value="">Tutti</option><option value="58">Mav</option><option value="56">Riba</option><option value="57">Rid</option></select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="margin-bottom10 text-right">
                            <input type="button" class="btn btn-primary" value="Ricerca" data-bind="singleClick: $component.Search">
                        </div>
                    </div>
                </div>
                <!--/ko-->
                <div data-bind="visible: List.PagingFilter.ListaClassiServizio().length == 0 || List.PagingFilter.ListaClassiServizio.indexOf(App.Common.ClassiServizio.ESITI_RIBA) >= 0">
                    <h3 class="titleSection" style="margin-top: 10px">Riba</h3>
                    <div id="tableRiba_wrapper" class="dataTables_wrapper no-footer"><table id="tableRiba" class="table no-footer dataTable" role="grid" aria-describedby="tableRiba_info">
                        <tbody><tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">Non risulta alcun dato per i parametri di ricerca immessi.</td></tr></tbody>
                        <thead>
                            <tr role="row" class=""><th dt-columnproperty="Ordinante.RagioneSociale" dt-sortcolumn="1" class="sorting" tabindex="0" aria-controls="tableRiba" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                    Creditore
                                : activate to sort column descending" style="width: 99px;">
                                    Creditore
                                </th><th dt-columnproperty="DataScadenza" dt-datatype="date" dt-sortcolumn="2" class="sorting_desc sorting" tabindex="0" aria-controls="tableRiba" rowspan="1" colspan="1" aria-label="
                                    Scadenza
                                : activate to sort column ascending" style="width: 106px;">
                                    Scadenza
                                </th><th dt-columnproperty="DataCaricamento" dt-datatype="date" dt-sortcolumn="3" dt-clickable="link" class="sorting" tabindex="0" aria-controls="tableRiba" rowspan="1" colspan="1" aria-label="
                                    Caricamento
                                : activate to sort column ascending" style="width: 130px;">
                                    Caricamento
                                </th><th dt-columnproperty="Importo" dt-datatype="import" dt-sortcolumn="4" dt-negativevaluecolor="#ae0101" class="sorting" tabindex="0" aria-controls="tableRiba" rowspan="1" colspan="1" aria-label="
                                    Importo
                                : activate to sort column ascending" style="width: 83px;">
                                    Importo
                                </th><th dt-fixedvalue="EUR" class="dt-nosort sorting_disabled" tabindex="0" aria-controls="tableRiba" rowspan="1" colspan="1" aria-label="
                                    Divisa
                                : activate to sort column ascending" style="width: 67px;">
                                    Divisa
                                </th><th dt-columnproperty="Causale" dt-sortcolumn="6" dt-resource="EsitiRibaRidMav.CausaliRiba" class="sorting" tabindex="0" aria-controls="tableRiba" rowspan="1" colspan="1" aria-label="
                                    Causale
                                : activate to sort column ascending" style="width: 86px;">
                                    Causale
                                </th><th dt-columnproperty="Debitore.Denominazione" dt-sortcolumn="7" class="sorting" tabindex="0" aria-controls="tableRiba" rowspan="1" colspan="1" aria-label="
                                    Debitore
                                : activate to sort column ascending" style="width: 91px;">
                                    Debitore
                                </th><th dt-columnproperty="RiferimentoDebito" class="dt-nosort sorting_disabled" tabindex="0" aria-controls="tableRiba" rowspan="1" colspan="1" aria-label="
                                    Riferimento Debito
                                : activate to sort column ascending" style="width: 191px;">
                                    Riferimento Debito
                                </th></tr>
                        </thead>
                    </table></div>
                </div>
                <div data-bind="visible: List.PagingFilter.ListaClassiServizio().length == 0 || List.PagingFilter.ListaClassiServizio.indexOf(App.Common.ClassiServizio.ESITI_RID) >= 0">
                    <h3 class="titleSection" style="margin-top: 10px">Rid</h3>
                    <div id="tableRid_wrapper" class="dataTables_wrapper no-footer"><table id="tableRid" class="table no-footer dataTable" role="grid" aria-describedby="tableRid_info">
                        <tbody><tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">Non risulta alcun dato per i parametri di ricerca immessi.</td></tr></tbody>
                        <thead>
                            <tr role="row"><th dt-columnproperty="Ordinante.RagioneSociale" dt-sortcolumn="1" class="sorting" tabindex="0" aria-controls="tableRid" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                    Creditore
                                : activate to sort column descending" style="width: 99px;">
                                    Creditore
                                </th><th dt-columnproperty="DataScadenza" dt-datatype="date" dt-sortcolumn="2" dt-clickable="link" class="sorting_desc sorting" tabindex="0" aria-controls="tableRid" rowspan="1" colspan="1" aria-label="
                                    Scadenza
                                : activate to sort column ascending" style="width: 106px;">
                                    Scadenza
                                </th><th dt-columnproperty="DataCaricamento" dt-datatype="date" dt-sortcolumn="3" class="sorting" tabindex="0" aria-controls="tableRid" rowspan="1" colspan="1" aria-label="
                                    Caricamento
                                : activate to sort column ascending" style="width: 130px;">
                                    Caricamento
                                </th><th dt-columnproperty="Importo" dt-datatype="import" dt-sortcolumn="4" dt-negativevaluecolor="#ae0101" class="sorting" tabindex="0" aria-controls="tableRid" rowspan="1" colspan="1" aria-label="
                                    Importo
                                : activate to sort column ascending" style="width: 83px;">
                                    Importo
                                </th><th dt-fixedvalue="EUR" class="dt-nosort sorting_disabled" tabindex="0" aria-controls="tableRid" rowspan="1" colspan="1" aria-label="
                                    Divisa
                                : activate to sort column ascending" style="width: 67px;">
                                    Divisa
                                </th><th dt-columnproperty="Causale" dt-sortcolumn="6" dt-resource="EsitiRibaRidMav.CausaliRid" class="sorting" tabindex="0" aria-controls="tableRid" rowspan="1" colspan="1" aria-label="
                                    Causale
                                : activate to sort column ascending" style="width: 86px;">
                                    Causale
                                </th><th dt-columnproperty="Debitore.Denominazione" dt-sortcolumn="7" class="sorting" tabindex="0" aria-controls="tableRid" rowspan="1" colspan="1" aria-label="
                                    Debitore
                                : activate to sort column ascending" style="width: 91px;">
                                    Debitore
                                </th><th dt-columnproperty="RiferimentoDebito" class="dt-nosort sorting_disabled" tabindex="0" aria-controls="tableRid" rowspan="1" colspan="1" aria-label="
                                    Riferimento Debito
                                : activate to sort column ascending" style="width: 191px;">
                                    Riferimento Debito
                                </th></tr>
                        </thead>
                    </table></div>
                </div>
                <div data-bind="visible: List.PagingFilter.ListaClassiServizio().length == 0 || List.PagingFilter.ListaClassiServizio.indexOf(App.Common.ClassiServizio.ESITI_MAV) >= 0">
                    <h3 class="titleSection" style="margin-top: 10px">Mav</h3>
                    <div id="tableMav_wrapper" class="dataTables_wrapper no-footer"><table id="tableMav" class="table no-footer dataTable" role="grid" aria-describedby="tableMav_info">
                        <tbody><tr class="odd"><td valign="top" colspan="8" class="dataTables_empty">Non risulta alcun dato per i parametri di ricerca immessi.</td></tr></tbody>
                        <thead>
                            <tr role="row"><th dt-columnproperty="Ordinante.RagioneSociale" dt-sortcolumn="1" class="sorting" tabindex="0" aria-controls="tableMav" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                    Creditore
                                : activate to sort column descending" style="width: 0px;">
                                    Creditore
                                </th><th dt-columnproperty="DataScadenza" dt-datatype="date" dt-sortcolumn="2" dt-clickable="link" class="sorting_desc sorting" tabindex="0" aria-controls="tableMav" rowspan="1" colspan="1" aria-label="
                                    Scadenza
                                : activate to sort column ascending" style="width: 0px;">
                                    Scadenza
                                </th><th dt-columnproperty="DataCaricamento" dt-datatype="date" dt-sortcolumn="3" class="sorting" tabindex="0" aria-controls="tableMav" rowspan="1" colspan="1" aria-label="
                                    Caricamento
                                : activate to sort column ascending" style="width: 0px;">
                                    Caricamento
                                </th><th dt-columnproperty="Importo" dt-datatype="import" dt-sortcolumn="4" dt-negativevaluecolor="#ae0101" class="sorting" tabindex="0" aria-controls="tableMav" rowspan="1" colspan="1" aria-label="
                                    Importo
                                : activate to sort column ascending" style="width: 0px;">
                                    Importo
                                </th><th dt-fixedvalue="EUR" class="dt-nosort sorting_disabled" tabindex="0" aria-controls="tableMav" rowspan="1" colspan="1" aria-label="
                                    Divisa
                                : activate to sort column ascending" style="width: 0px;">
                                    Divisa
                                </th><th dt-columnproperty="Causale" dt-sortcolumn="6" dt-resource="EsitiRibaRidMav.CausaliMav" class="sorting" tabindex="0" aria-controls="tableMav" rowspan="1" colspan="1" aria-label="
                                    Causale
                                : activate to sort column ascending" style="width: 0px;">
                                    Causale
                                </th><th dt-columnproperty="Debitore.Denominazione" dt-sortcolumn="7" class="sorting" tabindex="0" aria-controls="tableMav" rowspan="1" colspan="1" aria-label="
                                    Debitore
                                : activate to sort column ascending" style="width: 0px;">
                                    Debitore
                                </th><th dt-columnproperty="RiferimentoDebito" class="dt-nosort sorting_disabled" tabindex="0" aria-controls="tableMav" rowspan="1" colspan="1" aria-label="
                                    Riferimento Debito
                                : activate to sort column ascending" style="width: 0px;">
                                    Riferimento Debito
                                </th></tr>
                        </thead>
                    </table></div>
                </div>
            </div>
        </div>
            <div id="export-lista-esiti-riba-rid-mav" value="Esporta" style="float: right; margin-bottom: 1%">   <div class="tm-print">     <div class="btn-group undefined">         <button type="button" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">             Esporta <span class="caret" style="margin-left: 12px;"></span>         </button>         <ul class="dropdown-menu">                      <li>                 <a class="link-button Pdf-0" title="Export" style="padding: 10px; padding-right: 30px; padding-top: 5px; padding-bottom: 5px; font-size: 14px; font-family: Helvetica, Arial, sans-serif; font-weight: bold;">                     <div class="icon anchise-icon anchise-icon-export-Pdf"></div>                     <span style="margin-left: 12px;">Pdf</span>                 </a>             </li></ul>     </div>     <div class="print-popup"></div> </div></div>
        </div>

</list-esito>
        </div>
        <!-- ESITO DETAIL -->
        <div data-bind="visible: CurrentSection() == Sections.ESITO_DETAIL_MAV" style="display: none;">
            <esito-mav params="Esito: EsitoDetailMav">
    <div class="riquadro">
        <div>
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Dettaglio esito Mav</h1>
        </div>

        <div data-bind="with: Esito" style="font-size: 12px;">
            <div class="section">
                <div class="row">
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Descrizione creditore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.RagioneSociale"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Scadenza:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataScadenza"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Importo:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="numericTextSeparator: Importo"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Divisa:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Divisa"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Causale:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Causale"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice SIA ricevente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Sia"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice ABI mittente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Abi"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice CAB mittente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Cab"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice rapporto mittente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Conto"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Tipo debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: TipoDebitore"></label>
                                <text> - </text>
                                <label data-bind="text: TipoDebitoreDesc"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Codice"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Descrizione debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Denominazione"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice Fiscale debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.CodiceFiscale"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Indirizzo debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Indirizzo.Via"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    CAP debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Indirizzo.Cap"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Comune debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Indirizzo.Comune"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice ABI debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: DbtrAbi"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice CAB debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: DbtrCab"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Importo spese:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="numericTextSeparator: ImportoSpese"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Valuta debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataValuta"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Rif. promemoria:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: RifPromemoria"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Caricamento:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataCaricamento"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Rif. debito:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: RiferimentoDebito"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="margin-bottom20 text-right">
        
        <div id="export-dett-esiti-mav" value="Esporta" style="float: right; margin-bottom: 1%"></div>
        <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back">
    </div>

</esito-mav>
        </div>
        <div data-bind="visible: CurrentSection() == Sections.ESITO_DETAIL_RID" style="display: none;">
            <esito-rid params="Esito: EsitoDetailRid">
    <div class="riquadro">
        <div>
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Dettaglio esito Rid</h1>
        </div>

        <div data-bind="with: Esito" style="font-size: 12px;">
            <div class="section">
                <div class="row">
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Descrizione creditore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.RagioneSociale"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Scadenza originaria:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataScadenza"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Importo:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="numericTextSeparator: Importo"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Divisa:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Divisa"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Causale:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Causale"></label>
                                <text> - </text>
                                <label data-bind="text: CausaleStorno"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice SIA ricevente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Sia"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice ABI mittente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Abi"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice CAB mittente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Cab"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice rapporto mittente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Conto"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Tipo debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: TipoDebitore"></label>
                                <text> - </text>
                                <label data-bind="text: TipoDebitoreDesc"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Codice"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Descrizione debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Denominazione"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice Fiscale debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.CodiceFiscale"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Indirizzo debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Indirizzo.Via"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    CAP debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Indirizzo.Cap"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Comune debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Indirizzo.Comune"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice ABI debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: DbtrAbi"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice CAB debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: DbtrCab"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Importo spese:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="numericTextSeparator: ImportoSpese"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Scadenza effettiva:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataScadenzaEffettiva"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Rif. promemoria:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: RifPromemoria"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Caricamento:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataCaricamento"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Rif. debito:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: RiferimentoDebito"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Facolta' storno di addebito:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: FacoltaStorno"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="margin-bottom20 text-right">
        
        <div id="export-dett-esiti-rid" value="Esporta" style="float: right; margin-bottom: 1%"></div>
        <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back">
    </div>

</esito-rid>
        </div>
        <div data-bind="visible: CurrentSection() == Sections.ESITO_DETAIL_RIBA" style="display: none;">
            <esito-riba params="Esito: EsitoDetailRiba">
    <div class="riquadro">
        <div>
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Dettaglio esito Riba</h1>
        </div>

        <div data-bind="with: Esito" style="font-size: 12px;">
            <div class="section">
                <div class="row">
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Descrizione creditore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.RagioneSociale"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Scadenza:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataScadenza"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Importo:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="numericTextSeparator: Importo"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Divisa:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Divisa"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Causale:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Causale"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice SIA ricevente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Sia"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice ABI mittente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Abi"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice CAB mittente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Cab"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice rapporto mittente:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Ordinante.Conto"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Tipo debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: TipoDebitore"></label>
                                <text> - </text>
                                <label data-bind="text: TipoDebitoreDesc"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Codice"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Descrizione debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Denominazione"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice Fiscale debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.CodiceFiscale"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Indirizzo debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Indirizzo.Via"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    CAP debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Indirizzo.Cap"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Comune debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Debitore.Indirizzo.Comune"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice ABI debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: DbtrAbi"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Codice CAB debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: DbtrCab"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Importo spese:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="numericTextSeparator: ImportoSpese"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Valuta debitore:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataValuta"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Rif. promemoria:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: RifPromemoria"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Caricamento:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="dateText: DataCaricamento"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Rif. debito:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: RiferimentoDebito"></label>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Numero ricevuta:
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: NumeroRicevuta"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="margin-bottom20 text-right">
        
        <div id="export-dett-esiti-riba" value="Esporta" style="float: right; margin-bottom: 1%"></div>
        <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back">
    </div>

</esito-riba>
        </div>
        <div data-bind="visible: CurrentSection() == Sections.ESITO_DETAIL_SCARTORIBA" style="display: none;">
            <scarto-incasso-riba params="Esito: EsitoDetailScartoRiba">
    <div class="riquadro">
        <div>
            <div class="flag riepilogo">&nbsp;</div>
            <h1>Dettaglio Scarto Incasso Riba</h1>
        </div>

        <div data-bind="with: Esito" style="font-size: 12px;">
            <div class="section">
                <div class="row">
                    <div class="col-xs-12 white-block">
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Descrizione creditore:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Ordinante.RagioneSociale"></label>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Codice SIA ricevente:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="text: Ordinante.Sia"></label>
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
                                        Nome Supporto:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <!-- ko if: IsIncrociata --><!-- /ko -->
                                    <!-- ko if: !IsIncrociata() -->
                                    <span data-bind="text: NomeSupporto"></span>
                                    <!-- /ko -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 no-padding">
                            <div class="col-xs-6">
                                <div class="col-xs-4">
                                    <label class="control-label" style="padding:0">
                                        Data Creazione:
                                    </label>
                                </div>
                                <div class="col-xs-8">
                                    <label data-bind="dateText: DataCreazione"></label>
                                </div>
                            </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-right">
            <input id="change-row-button" type="button" class="btn btn-primary" value="dettaglio" data-bind="singleClick: ChangeRowView">
        </div>

        <div>
            <!--ko with: ElencoErrori-->
            <div class="row">
                <div class="table-responsive">
                    <div class="dataTables_wrapper" style="margin-top: 10px">
                        <table class="dataTable table">
                            <thead data-bind="visible: $component.TemplateRiga() == 'sintetico'">
                                <tr>
                                    <th>
                                        Tipo Valore
                                    </th>
                                    <th>
                                        Valore Errato
                                    </th>
                                    <th>
                                        Codice Errore - Descrizione
                                    </th>
                                </tr>
                            </thead>
                            <tbody data-bind="foreach: Page">
                                <tr data-bind="visible: $component.TemplateRiga() != 'sintetico'" style="display: none;">
                                    <th colspan="9">
                                        <p>Errore numero <span data-bind="text: $index() + 1">1</span></p>
                                    </th>
                                </tr>
                                <tr data-bind="component: {name: 'riga-errore-scartoriba', params: {Errore: $data, TemplateRiga: $component.TemplateRiga}}">
    <!-- ko template: {name: TemplateRiga()} -->
    <!-- ko with: Errore -->
    <td data-bind="text: TipoValore"></td>
    <td data-bind="text: ValoreErrato"></td>
    <td data-bind="text: $component.LocalizeCodiceErrore(CodiceErrore)">null - undefined</td>
    <!-- /ko -->
<!-- /ko -->
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
            <!--/ko-->
        </div>

    </div>
    <div class="margin-bottom20 text-right">
        
        <div id="export-dett-esiti-scarti-riba" value="Esporta" style="float: right; margin-bottom: 1%"></div>
        <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back">
    </div>

</scarto-incasso-riba>
        </div>
    </div>
</div>


<script type="text/javascript">

    var filter = null;
    var param = {
            dataSourceUrl: '/anchise2.web/IncassiRiba/SearchEsitiIncassoRiba/Search',
            initialItemSelector: function (index, item) {
                return false;
            },

            selectFirst: false,
            enabledRow: false,
            minElementForNotPagination: 8,
            resNoRecord: ko.utils.GetResource("NoRecord"),
            noTopSearch: true,
            isOrderList: false,
            columnDefs: [{ targets: 'dt-nosort', orderable: false }],
            maxPages: 4,
            detailCallback: function (data) {
                App.Core.SetEsitiSessionStorage(data);
                exportItems[0].url = '/anchise2.web/Stampe/StampeDettaglio/StampaDettaglioEsitoRibaRidMavPdf';
                if (data.IdEsito.ClasseServizio == App.Common.ClassiServizio.ESITI_MAV) {
                    Export.print("export-dett-esiti-mav", exportItems, ko.mapping.toJS(data));
                    location.hash = Sections.ESITO_DETAIL_MAV;
                } else if (data.IdEsito.ClasseServizio == App.Common.ClassiServizio.ESITI_RID) {
                    Export.print("export-dett-esiti-rid", exportItems, ko.mapping.toJS(data));
                    location.hash = Sections.ESITO_DETAIL_RID;
                } else if (data.IdEsito.ClasseServizio == App.Common.ClassiServizio.ESITI_RIBA) {
                    Export.print("export-dett-esiti-riba", exportItems, ko.mapping.toJS(data));
                    location.hash = Sections.ESITO_DETAIL_RIBA;
                } else if (data.IdEsito.ClasseServizio == App.Common.ClassiServizio.SCARTI_INCASSI_RIBA) {
                    Export.print("export-dett-esiti-scarti-riba", exportItems, ko.mapping.toJS(data));
                    location.hash = Sections.ESITO_DETAIL_SCARTORIBA;
                }
            }
        }
    var Sections = {
        SEARCH: "#SEARCH",
        RESULT: "#RESULT",
        ESITO_DETAIL_MAV: "#ESITO_DETAILMAV",
        ESITO_DETAIL_RIBA: "#ESITO_DETAILRIBA",
        ESITO_DETAIL_RID: "#ESITO_DETAILRID",
        ESITO_DETAIL_SCARTORIBA: "#ESITO_DETAIL_SCARTORIBA"
    };
    var PIAZZATURA = [{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":580202,"ClasseServizio":0,"Crypt":"RQi2hyV0M0x/WHC8oaYhxlPNdJvJq+N1+QM/W6Kh7T67TSBAYGv1XO6HeyWnFefrzhOIBGVQVtWXP/EKG45rg2K2lkU+XxaqCYhrCyTKP57pRaXuNXN97JieJYqBVvLqsir8E+8CWiTk1Vas3tFiSA==","Hash":"C83101B9F26C9C6A3502644A1651E934C20FD6C2534A8E594BB49A5C5360E540"},"Rapporto":{"DescrizioneBanca":"BANCA POPOLARE DI VERONA - S. GEMINIANO E S. PROSPERO S.P.A.","DescrizioneSportello":"SEDE DI MODENA","UltimoAggiornamento":"0001-01-01T00:00:00","Saldo":0.0,"DataSaldo":null,"Stato":1,"Bic":null,"Id":null,"IdAzienda":"106609","CodiceIban":null,"CodiceAbi":"05188","CodiceCab":"12900","CodiceFiliale":"12900","NumeroRapporto":"000000047659","CodiceDivisa":"EUR","Descrizione":"000000047659","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000047659","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"580202","Type":106,"Crypt":"jqMXMjbLZn8waP4qaji8HVYtfrFth0rTmNvcAPZXN5rVk4B/ctULcqSs6wpJuIx3","Hash":"7C45C1171430AA8D3A4605CF142F6324167FD961F5EC7C21CBD9093F6DB18276"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"6qovvr064+ziZ/kZt8pverkjA7gsEAO4XKpzuWDxSRNTQvQhjH1iO3DxvGina2tx","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}},{"Identifier":{"Id":null,"Version":null,"IdAzienda":106609,"IdRapporto":858312,"ClasseServizio":0,"Crypt":"kYWESHuoFN1DnkbtZqVWEG07e/kh8umSHJ7trIJ9kiaxww4JI86M93zAbGDPc8TtB0AZo15063EcyPQBRDN63KRRaXNihAJzu4EzJV8r8bnjnfcjPwqJZBp37uo4ng+T0oQkTVlludYxSAy7JnQSWA==","Hash":"77BA16B756E4701C7002757B4B46553938A78648A3999BABCC600B299ABC27AC"},"Rapporto":{"DescrizioneBanca":"BANCO BPM S.P.A.","DescrizioneSportello":"SEDE DI MODENA","UltimoAggiornamento":"0001-01-01T00:00:00","Saldo":0.0,"DataSaldo":null,"Stato":1,"Bic":"BAPPIT21402","Id":null,"IdAzienda":"106609","CodiceIban":null,"CodiceAbi":"05034","CodiceCab":"12900","CodiceFiliale":"12900","NumeroRapporto":"000000047659","CodiceDivisa":"EUR","Descrizione":"000000047659","DescrizioneAzienda":null,"DescrizioneIntestatario":null,"DescrizioneRapporto":null,"DescrizionePersonalizzata":"000000047659","DescrizioneIstituto":null,"CategoriaGruppo":null,"Categoria":null,"TipoRapporto":null,"Particolare":null,"Identifier":{"Id":"858312","Type":106,"Crypt":"bZUwjT+/01xbrk+5Xm4Wp34Pq18WeMDo8ciixqnnCHDHnrbAkzXfso0iem0skD2/","Hash":"AE858267D98FB7541F49AD50612F16E30684F471111135666EC43B3B469EB15B"},"Status":0},"Azienda":{"Id":106609,"CodiceAzienda":"100042308","RagioneSociale":"AUTOMOBILE CLUB MODENA","CodiceSia":"AVLC9","CodiceCuc":"0748872E","CreditorId":"IT280010000000179340369","CodiceFiscale":"00179340369","PartitaIva":"00179340369","StatoAzienda":1,"Identifier":{"Id":"106609","Type":1,"Crypt":"6qovvr064+ziZ/kZt8pverkjA7gsEAO4XKpzuWDxSRNTQvQhjH1iO3DxvGina2tx","Hash":"4F6009BC51B26C567A31D7A19B3DB5EF931D3D07BFBE27F9F1BFF911140EC9B9"}}}];

    var exportItems = [
        {
            type: "Pdf",
            url: '/anchise2.web/Stampe/StampeLista/StampaListaEsitiRibaRidMav',
            fieldName: "json"
        }
    ];

    var _filterPiazzature = function (filter) {
        var idAzienda = filter.IdAzienda() || null;

        return ko.utils.arrayFilter(PIAZZATURA, function (p) {
            var current = new App.Common.PiazzaturaBo(p);

            return (idAzienda != null && idAzienda != "" && current.Azienda.Id() == idAzienda);
        });
    };

    var viewName = '#cdaca5106ed041b4b8a994813143b8cd_2';

    var viewModel = function (pagingFilter) {
        var self = this;

        var _filterPiazzatureAziende = function () {
            var CodiceAbi = self.BancaSelezionata() ? self.BancaSelezionata().CodiceAbi : null;
            var idRapporto = self.ContoSelezionato() ? self.ContoSelezionato().IdRapporto : null;

            return ko.utils.arrayFilter(PIAZZATURA, function (p) {
                var current = new App.Common.PiazzaturaBo(p);

                if (idRapporto && CodiceAbi) {
                    return (current.Identifier.IdRapporto() == idRapporto && current.Rapporto.CodiceAbi() == CodiceAbi);
                } else if (CodiceAbi) {
                    return (current.Rapporto.CodiceAbi() == CodiceAbi);
                } else if (idRapporto) {
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

                if (idRapporto && idAzienda) {
                    return (idAzienda !== null && current.Azienda.Id() === idAzienda && current.Identifier.IdRapporto() == idRapporto);
                } else if (idRapporto) {
                    return (current.Identifier.IdRapporto() == idRapporto);
                }
                if (idAzienda)
                    return (idAzienda !== null && current.Azienda.Id() === idAzienda);
                return true;
            });
        };

        var _filterPiazzatureBancheAzienda = function () {
            var idAzienda = self.AziendaSelezionata() ? self.AziendaSelezionata().Id : null;
            idAzienda = typeof idAzienda == "function" ? idAzienda() : idAzienda;

            return ko.utils.arrayFilter(PIAZZATURA, function (p) {
                var current = new App.Common.PiazzaturaBo(p);

                if (idAzienda)
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
                if (CodiceAbi && idAzienda) {
                    return (idAzienda !== null && current.Azienda.Id() === idAzienda && current.Rapporto.CodiceAbi() == CodiceAbi);
                } else if (CodiceAbi) {
                    return (current.Rapporto.CodiceAbi() == CodiceAbi);
                }

                return (idAzienda !== null && current.Azienda.Id() === idAzienda);
            });
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

        self.CurrentSection = ko.observable(Sections.SEARCH);
        self.EsitoDetailMav = ko.observable(new App.Riba.IncassiRiba.EsitoDetailMAVBo(null));
        self.EsitoDetailRiba = ko.observable(new App.Riba.IncassiRiba.EsitoDetailRIBABo(null));
        self.EsitoDetailRid = ko.observable(new App.Riba.IncassiRiba.EsitoDetailRIDBo(null));
        self.EsitoDetailScartoRiba = ko.observable(new App.Riba.IncassiRiba.EsitoDetailScartoRIBABo(null));
        self.PagingFilter = new App.Riba.IncassiRiba.FilterEsito();
        self.PagingFilter.SortColumn = 2;
        //self.pagingFilter.ListaClassiServizio.push(App.Common.ClassiServizio.ESITI_RIBA);
        //self.pagingFilter.ListaClassiServizio.push(App.Common.ClassiServizio.ESITI_RID);
        //self.pagingFilter.ListaClassiServizio.push(App.Common.ClassiServizio.ESITI_MAV);
        self.Banche = ko.observableArray();
        self.Aziende = ko.observableArray();
        self.Conti = ko.observableArray();
        self.AziendaSelezionata = ko.observable(null);
        self.BancaSelezionata = ko.observable(null);
        self.ContoSelezionato = ko.observable(null);
        self.Piazzatura = ko.observableArray();
        self.EsitoSelezionato = ko.observable(null);
        self.IsFromDetail = ko.observable(false);
        self.Esiti = ko.pureComputed(function () {
            return [
                {
                    value: App.Common.ClassiServizio.ESITI_MAV,
                    description: Localization.EsitiSectionTitle.GetLabel(App.Common.ClassiServizio.ESITI_MAV)
                },
                {
                    value: App.Common.ClassiServizio.ESITI_RIBA,
                    description: Localization.EsitiSectionTitle.GetLabel(App.Common.ClassiServizio.ESITI_RIBA)
                },
                {
                    value: App.Common.ClassiServizio.ESITI_RID,
                    description: Localization.EsitiSectionTitle.GetLabel(App.Common.ClassiServizio.ESITI_RID)
                }];
        });

        self.AziendeTotali = [];

        self.CalcolaAziende = function (azienda) {
            var aziende = App.Common.GetAziendeFromPiazzatura(_filterPiazzatureAziende()); //self.Piazzatura()
            self.Aziende(aziende);

            if (aziende.length == 1) {
                self.AziendaSelezionata(aziende[0]);
            } else if (azienda)
                self.AziendaSelezionata(azienda);

            //**la combo aziende deve restare sempre popolata con tutte le aziende**
            var aziendeDaAggiungere = self.AziendeTotali.filter(function (obj) {
                for (var i = 0; i < aziende.length; i++) {
                    if (obj.PartitaIva() == aziende[i].PartitaIva())
                        return false;
                }
                return true;
            });
            aziendeDaAggiungere.forEach(function (element) {
                var temp = self.Aziende();
                temp.push(element);
                self.Aziende(temp);
            });
            //**end**
        };

        self.CalcolaBanche = function () {
            var idAzienda = self.PagingFilter.IdAzienda() || null;

            var bancheTemp = App.Common.GetBancheFromPiazzatura(_filterPiazzatureBancheAzienda());

            for (var i = 0; i < bancheTemp.length; i++) {
                bancheTemp[i].Descrizione = bancheTemp[i].CodiceAbi + " - " + bancheTemp[i].Descrizione;
            }
            self.Banche(bancheTemp);

            if (bancheTemp.length == 1) {
                self.BancaSelezionata(bancheTemp[0]);
            } else if (self.ContoSelezionato()) {
                var toSelect = self.Banche().filter(function (obj) {
                    return obj.CodiceAbi == self.ContoSelezionato().Banca.CodiceAbi;
                });
                if (toSelect.length == 1)
                    self.BancaSelezionata(toSelect[0]);
            }
        };

        self.CalcolaConti = function (conto) {
            var idAzienda = self.PagingFilter.IdAzienda() || null;

            var conti = _getContiFromPiazzatura((idAzienda) || (self.BancaSelezionata()) ? _filterPiazzatureConti() : self.Piazzatura());

            self.Conti(conti);

            if (conti.length == 1) {
                self.ContoSelezionato(conti[0]);
            } else if (conto) {
                var result = conti.filter(function (obj) {
                    return obj.IdRapporto == conto.IdRapporto;
                });
                if (result.length == 1)
                    self.ContoSelezionato(result[0]);
            }
        };
        self.List = new App.Core.PagedArrayAsync({
            self: self,
            searchUrl: '/anchise2.web/IncassiRiba/SearchEsitiIncassoRiba/Search',
            searchCallback: function () {
                if (self.List.Validation().length === 0) {
                    rootViewModel.CurrentSection(Sections.RESULT);
                }
                exportItems[0].url = '/anchise2.web/Stampe/StampeLista/StampaListaEsitiRibaRidMav';
                Export.print("export-lista-esiti-riba-rid-mav", exportItems, ko.mapping.toJS(self.List.PagingFilter));
            },
            pagingFilter: new App.Riba.IncassiRiba.FilterEsito(),
            pageSizeDropDown: [10, 20, 50, 100]
        });

        self.AziendaSelezionata.subscribe(function (newValue) {

            self.PagingFilter.IdAzienda(null);

            if (newValue) {
                var Id = typeof newValue.Id == "function" ? newValue.Id() : newValue.Id;
                var cuc = typeof newValue.Id == "function" ? newValue.CodiceCuc() : newValue.CodiceCuc;
                self.PagingFilter.IdAzienda(Id);
                if ((self.ContoSelezionato() && self.ContoSelezionato().Azienda.CodiceCuc != cuc) || !self.ContoSelezionato()) {
                    self.ContoSelezionato(undefined);
                    self.CalcolaConti();
                }
                var bancheTemp = App.Common.GetBancheFromPiazzatura(_filterPiazzatureBanche());
                if (self.BancaSelezionata()) {
                    var result = bancheTemp.filter(function (obj) {
                        return obj.CodiceAbi == self.BancaSelezionata().CodiceAbi;
                    });
                    if ((result.length == 1 && result[0].CodiceAbi != self.BancaSelezionata().CodiceAbi) || bancheTemp.length > 1)
                        self.CalcolaBanche();
                } else {
                    self.CalcolaBanche();
                }
            } else {
                if (self.AziendeTotali.length > 1) {
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

        self.BancaSelezionata.subscribe(function (newValue) {
            self.PagingFilter.CodiceAbi(null);

            if (newValue) {
                self.PagingFilter.CodiceAbi(newValue.CodiceAbi);
                if (!self.AziendaSelezionata() || !self.ContoSelezionato() || self.ContoSelezionato().Banca.CodiceAbi != newValue.CodiceAbi)
                    self.CalcolaConti();
                if (self.ContoSelezionato())
                    self.CalcolaConti(self.ContoSelezionato());
            } else {
                self.ContoSelezionato(null);
                self.CalcolaBanche();
                self.CalcolaConti();
            }
        });

        self.ContoSelezionato.subscribe(function (newValue) {
            self.PagingFilter.ListaRapporti(null);

            if (newValue) {
                self.PagingFilter.ListaRapporti(newValue.IdRapporto);
                if (!self.AziendaSelezionata())
                    self.CalcolaAziende();
                else {
                    if (self.AziendaSelezionata().CodiceCuc() != newValue.Azienda.CodiceCuc)
                        self.CalcolaAziende(newValue.Azienda);
                }
                if ((!self.BancaSelezionata() && self.AziendaSelezionata()))
                    self.CalcolaBanche();
                var conti = self.Conti();
                for (i = conti.length - 1; i >= 0; i--) {
                    if (conti[i].IdRapporto != newValue.IdRapporto && conti[i].Azienda.PartitaIva != self.AziendaSelezionata().PartitaIva())
                        conti.splice(i, 1);
                }
                self.Conti(conti);
            }
        });

        self.EsitoSelezionato.subscribe(function (newValue) {
            self.PagingFilter.ListaClassiServizio.removeAll();

            if (newValue) {
                self.PagingFilter.ListaClassiServizio.push(newValue);
            }
        });

        var paramRiba = $.extend(true, {}, param);
        var paramRid = $.extend(true, {}, param);
        var paramMav = $.extend(true, {}, param);
        var reInitFilters = function (filter) {
            //filter.ListaClassiServizio.removeAll();
            //filter.ListaClassiServizio(self.PagingFilter.ListaClassiServizio());

            //self.PagingFilter = ko.mapping.fromJS(ko.mapping.toJS(filter), null, self.PagingFilter);
            //self.List.PagingFilter = ko.mapping.fromJS(ko.mapping.toJS(filter), null, self.List.PagingFilter);
        }

        self.Search = function () {
            //if (!self.IsFromDetail()) {
                self.List.PagingFilter = ko.mapping.fromJS(self.PagingFilter, null, self.List.PagingFilter);

                // INIT RIBA
                paramRiba.pagingFilter = new App.Riba.IncassiRiba.FilterEsito(ko.mapping.toJS(self.List.PagingFilter));
                paramRiba.pagingFilter.ListaClassiServizio.removeAll();
                
                // INIT RID
                paramRid.pagingFilter = new App.Riba.IncassiRiba.FilterEsito(ko.mapping.toJS(self.List.PagingFilter));
                paramRid.pagingFilter.ListaClassiServizio.removeAll();

                // INIT MAV
                paramMav.pagingFilter = new App.Riba.IncassiRiba.FilterEsito(ko.mapping.toJS(self.List.PagingFilter));
                paramMav.pagingFilter.ListaClassiServizio.removeAll();
                
                if (self.PagingFilter.ListaClassiServizio().length == 0) {
                    paramRiba.pagingFilter.ListaClassiServizio.push(App.Common.ClassiServizio.ESITI_RIBA);
                    paramRid.pagingFilter.ListaClassiServizio.push(App.Common.ClassiServizio.ESITI_RID);
                    paramMav.pagingFilter.ListaClassiServizio.push(App.Common.ClassiServizio.ESITI_MAV);
                } else if (self.PagingFilter.ListaClassiServizio()[0] == App.Common.ClassiServizio.ESITI_RIBA){
                    paramRiba.pagingFilter.ListaClassiServizio.push(App.Common.ClassiServizio.ESITI_RIBA);
                } else if (self.PagingFilter.ListaClassiServizio()[0] == App.Common.ClassiServizio.ESITI_RID){
                    paramRid.pagingFilter.ListaClassiServizio.push(App.Common.ClassiServizio.ESITI_RID);
                } else if (self.PagingFilter.ListaClassiServizio()[0] == App.Common.ClassiServizio.ESITI_MAV){
                    paramMav.pagingFilter.ListaClassiServizio.push(App.Common.ClassiServizio.ESITI_MAV);
                }
                self.List.Filters = [paramRiba.pagingFilter, paramRid.pagingFilter, paramMav.pagingFilter];
            //}
            $('#tableRiba', viewName).PagedList({
                param: paramRiba
            }).bind("pagedlistcomplete", function () {
                rootViewModel.CurrentSection(Sections.RESULT);
                reInitFilters(paramRiba.pagingFilter);
                Export.print("export-lista-esiti-riba-rid-mav", exportItems, ko.mapping.toJS(self.List.Filters));
                });

            $('#tableRid', viewName).PagedList({
                param: paramRid
            }).bind("pagedlistcomplete", function () {
                rootViewModel.CurrentSection(Sections.RESULT);
                reInitFilters(paramRid.pagingFilter);
                Export.print("export-lista-esiti-riba-rid-mav", exportItems, ko.mapping.toJS(self.List.Filters));
            });

            $('#tableMav', viewName).PagedList({
                param: paramMav
            }).bind("pagedlistcomplete", function () {
                rootViewModel.CurrentSection(Sections.RESULT);
                reInitFilters(paramMav.pagingFilter);
                Export.print("export-lista-esiti-riba-rid-mav", exportItems, ko.mapping.toJS(self.List.Filters));
                });

            exportItems[0].url = '/anchise2.web/Stampe/StampeLista/StampaListaEsitiRibaRidMav';
            self.IsFromDetail(false);

        }

        // Initialize
        self.Init = function () {
            App.Core.SetEsitiSessionStorage(null);
            location.hash = Sections.SEARCH;

            self.Piazzatura(PIAZZATURA);

            self.AziendeTotali = self.Aziende();

            self.CalcolaAziende();
            self.CalcolaBanche();
            self.CalcolaConti();

            $('#cdaca5106ed041b4b8a994813143b8cd_3').load('/anchise2.web/Widget/LinkRapidi');

        };
        self.Init();
    };

    var rootViewModel = new viewModel(filter);

    $(document).ready(function () {
        ko.applyBindings(rootViewModel, document.getElementById('cdaca5106ed041b4b8a994813143b8cd_2'));

        // Route
        var sammy = Sammy('#cdaca5106ed041b4b8a994813143b8cd_4', function () {
            var _read = function (sucessCallback) {
                var esito = App.Core.GetEsitiSessionStorage();
                var context = this;

                Http.Post('/anchise2.web/IncassiRiba/SearchEsitiIncassoRiba/Read', ko.toJSON(esito))
                    .success(function (data) {
                    var result = new App.Core.StandardJsonResult(data);

                    if (result.HasError) {
                        rootViewModel.List.Validation(result.Messages);
                        context.redirect(Sections.RESULT);
                    } else {
                        if (!App.Core.GetDistinteSessionStorage()) {
                            rootViewModel.IsFromDetail(true);
                        } else {
                            App.Core.SetDistinteSessionStorage(null)
                        }

                        sucessCallback(result.Response);
                    }
                });
            };

            this.get(Sections.SEARCH, function () {
                rootViewModel.CurrentSection(Sections.SEARCH);
            });
            this.get(Sections.RESULT, function () {
                rootViewModel.Search();
            });
            this.get(Sections.ESITO_DETAIL_MAV, function () {
                _read(function (data) {
                    rootViewModel.EsitoDetailMav(new App.Riba.IncassiRiba.EsitoDetailMAVBo(data));
                    rootViewModel.CurrentSection(Sections.ESITO_DETAIL_MAV);
                });
            });
            this.get(Sections.ESITO_DETAIL_RID, function () {
                _read(function (data) {
                    rootViewModel.EsitoDetailRid(new App.Riba.IncassiRiba.EsitoDetailRIDBo(data));
                    rootViewModel.CurrentSection(Sections.ESITO_DETAIL_RID);
                });
            });
            this.get(Sections.ESITO_DETAIL_RIBA, function () {
                _read(function (data) {
                    rootViewModel.EsitoDetailRiba(new App.Riba.IncassiRiba.EsitoDetailRIBABo(data));
                    rootViewModel.CurrentSection(Sections.ESITO_DETAIL_RIBA);
                });
            });
            this.get(Sections.ESITO_DETAIL_SCARTORIBA, function () {
                _read(function (data) {
                    rootViewModel.EsitoDetailScartoRiba(new App.Riba.IncassiRiba.EsitoDetailScartoRIBABo(data));
                    rootViewModel.CurrentSection(Sections.ESITO_DETAIL_SCARTORIBA);
                });
            });
        });

        sammy.run();
    });

</script>



                        </div>