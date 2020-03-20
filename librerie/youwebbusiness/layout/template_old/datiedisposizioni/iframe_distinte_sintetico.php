<!DOCTYPE html>
<html lang="en" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head></head>
<body> 

<div class="mainContent center col-xs-80" id="mainContent">
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



<div id="eaa3d3074eb746638678cb8a345fd7ec_6">
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
            $('.hide', $('#eaa3d3074eb746638678cb8a345fd7ec_6')).removeClass('hide');
        };
    };

    var uiHelper = new UiViewModel();

    $(document).ready(function () {
        ko.applyBindings(uiHelper, document.getElementById('eaa3d3074eb746638678cb8a345fd7ec_6'));

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







<script type="text/html" id="distinta-sct-dettaglio">
    <div data-bind="visible: DeleteSuccessVisible()">
        <feedback-messages params="Buttons: SuccessButton,Message: Message, CssClass: CssClass"></feedback-messages>
    </div>
    <div data-bind="visible: !DeleteSuccessVisible()">
        <div class="riquadro">
            <div>
                <div class="flag riepilogo">&nbsp;</div>
                <h1 data-bind="text: Title"></h1>
            </div>
            <validation-messages params="Validation: Validazioni"></validation-messages>

            <distinta-testata-dettaglio params="Distinta: Distinta, MessageIdInEdit: MessageIdInEdit, EnableEditDisposizioni: $component.EnableEditDisposizioni"></distinta-testata-dettaglio>

            <div class="text-right">
                <input type="button" class="btn btn-primary" value="dettaglio" data-bind="singleClick: ChangeRowView" />
                <input type="button" class="btn btn-primary" value="genera" data-bind="visible: GeneraVisible, singleClick: Genera, enable:!MessageIdInEdit()" />
            </div>
            <div>
                <!-- ko with: Disposizioni -->
                <div class="row">
                    <div class="form-field-input col-xs-5">
                        <label class="control-label">
                            Destinatario
                        </label>
                        <div class="form-field">
                            <input type="text" class="form-control" data-bind="value: PagingFilter.Beneficiario" />
                        </div>
                    </div>
                    <div class="form-field-input col-xs-2">
                        <label class="control-label">
                            Importo Da
                        </label>
                        <div class="form-field">
                            <input type="text" class="form-control" data-bind="numericTextSeparator: PagingFilter.ImportoDa" />
                        </div>
                    </div>
                    <div class="form-field-input col-xs-2">
                        <label class="control-label">
                            Importo A
                        </label>
                        <div class="form-field">
                            <input type="text" class="form-control" data-bind="numericTextSeparator: PagingFilter.ImportoA" />
                        </div>
                    </div>
                    <div class="form-field-input col-xs-3">
                        <label class="control-label">
                            Mostra
                        </label>
                        <div class="form-field">
                            <div class="col-xs-4">
                                <select class="form-control"
                                        data-bind="options: PageSizeDropDown, value: PagingFilter.Size"></select>
                            </div>
                            <div class="col-xs-8">
                                <span class="icon-replace icon-search active" style="cursor: pointer" data-bind="singleClick: Search"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <div class="dataTables_wrapper" style="margin-top: 10px">
                            <table class="dataTable table">
                                <thead data-bind="visible: $component.TemplateRiga() == 'sintetico'">
                                    <tr>
                                        <th data-bind="css: ThCss('1'), singleClick: SortToggle('1')">
                                            Importo
                                        </th>
                                        <th>
                                            Divisa
                                        </th>
                                        <th data-bind="css: ThCss('2'), singleClick: SortToggle('2')">
                                            ABI
                                        </th>
                                        <th data-bind="css: ThCss('3'), singleClick: SortToggle('3')">
                                            CAB
                                        </th>
                                        <th data-bind="css: ThCss('4'), singleClick: SortToggle('4')">
                                            Rapporto
                                        </th>
                                        <th data-bind="css: ThCss('5'), singleClick: SortToggle('5')">
                                            Beneficiario
                                        </th>
                                        <th data-bind="css: ThCss('6'), singleClick: SortToggle('6')">
                                            IBAN Beneficiario
                                        </th>
                                        <th>
                                            Elimina
                                        </th>
                                        <th>
                                            Modifica
                                        </th>
                                    </tr>
                                </thead>
                                <tbody data-bind="foreach: Page">
                                    <tr data-bind="visible: $component.TemplateRiga() != 'sintetico'">
                                        <th colspan="9">
                                            <p>pagamento Numero: <span data-bind="text: $index() + 1"></span></p>
                                        </th>
                                    </tr>
                                    <tr data-bind="component: {name: 'riga-disposizione-sct', params: {Disposizione: $data, TemplateRiga: $component.TemplateRiga, DispoToDelete: $component.DispoToDelete, IdentifierDistinta: $component.IdentifierDistinta, StatoDistinta: $component.Distinta().StatoDistinta, TotaleElementi: $component.Disposizioni.TotaleElementi, EnableEditDisposizioni: $component.EnableEditDisposizioni}}"></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <paginatore params="PagedList: $data"></paginatore>
                </div>
                <!--/ko-->
            </div>
        </div>
        <div class="text-right">
            <div id="export-distinta-dett" value="Esporta" style="display: inline-block; vertical-align: top;"></div>
            <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back" />
            <input type="button" class="btn btn-primary" value="Conferma" data-bind="singleClick: Confirm, visible: $component.ConfirmVisible" />
        </div>
    </div>
</script>

<script type="text/javascript">
    ko.components.register('distinta-sct-dettaglio', {
        template: { element: 'distinta-sct-dettaglio' },
        viewModel: function (params) {
            var self = this;
            var _filterPiazzature = function () {
                var idAzienda = self.Disposizioni.PagingFilter.IdAzienda() || null;

                return ko.utils.arrayFilter(PIAZZATURA, function (p) {
                    var current = new App.Common.PiazzaturaBo(p);

                    return (idAzienda !== null && current.Azienda.Id() === idAzienda);
                });
            };
            // Model
            self.CssClass = ko.observable('');
            self.Message = ko.observable('');
            self.Distinta = params.Distinta;
            self.Title = params.Title;self.SearchUrl = params.SearchUrl || '/anchise2.web/Autorizzazione/SearchDisposizioni/Search';
            self.EnableEditDisposizioni = params.EnableEditDisposizioni || false;
            self.Back = params.Back || function () { history.back(); };
            self.Disposizioni = new App.Core.PagedArrayAsync({
                self: self,
                mappingResponse: App.Sct.DisposizioneSctBo,
                searchUrl: self.SearchUrl,
                pagingFilter: new App.Common.FilterDisposizioni({ SortColumn: 5, IsSortAscending: true }),
                pageSizeDropDown: [10, 20, 50, 100],
                searchCallback: function () {
                    try {
                        getPrintUrl(self.TemplateRiga());
                        Export.print("export-distinta-dett", exportItems, ko.mapping.toJS(self.Disposizioni.PagingFilter));
                    } catch (ex){}
                }
            });
            self.TemplateRiga = ko.observable('sintetico');
            self.DispoToDelete = ko.observableArray([]);
            self.DeleteSuccessVisible = ko.observable(false);
            self.IdentifierDistinta = ko.observable(self.Distinta().Identifier);
            self.Validazioni = ko.observableArray([]);
            self.MessageIdInEdit = ko.observable(false);

            self.ConfirmVisible = ko.pureComputed(function () {
                return !self.IsAutorizzataOrConfermata() && self.EnableEditDisposizioni;
            }, self);
            self.IsAutorizzataOrConfermata = ko.pureComputed(function () {
                return self.Distinta().StatoDistinta() == App.Common.StatiDistinta.AUTORIZZATA || self.Distinta().StatoDistinta() == App.Common.StatiDistinta.CONFERMATA;
            });

            self.GeneraVisible = ko.pureComputed(function () {
                return self.Distinta().StatoDistinta() == App.Common.StatiDistinta.IN_MODIFICA;
            });

            self.StatoDistinta = ko.pureComputed(function () {
                return Localization.StatiDistinta.GetLabel(self.Distinta().StatoDistinta());
            });
            self.SuccessButton = [new App.Core.UiButton({
                Label: 'OK',
                Callback: function () {
                    location.reload();
                }
            })];

            // Action
            self.Disposizioni.Callback = function () {
                self.DispoToDelete.removeAll();
            };

            var distintaSubscribe = self.Distinta.subscribe(function () {
                self.IdentifierDistinta(self.Distinta().Identifier);
                self.Init();
            });

            self.Genera = function () {
                Http.Post("/anchise2.web/Autorizzazione/DetailDistintaBridge/Genera", ko.toJSON(self.Distinta))
                    .success(function (data) {
                        var result = new App.Core.StandardJsonResult(data);
                        if (result.HasError) {
                            ko.mapping.fromJS(result.Messages, null, self.Validazioni);
                            $("body").animate({ scrollTop: 0 }, '500');
                        } else {
                            self.DeleteSuccessVisible(true);
                        }
                    });
            };

            var exportItems = [
                {
                    type: "Pdf",
                    url: !params.Back ? '/anchise2.web/Stampe/StampeDettaglio/StampaDettaglioSinteticoPdfFromElenco' : '/anchise2.web/Stampe/StampeDettaglio/StampaDettaglioSinteticoPdfFromAutorizza'
                }
            ];

            function getPrintUrl (template) {
                if (!params.Back) {
                    if (template === 'sintetico') {
                        exportItems[0].url = '/anchise2.web/Stampe/StampeDettaglio/StampaDettaglioSinteticoPdfFromElenco';
                    } else {
                        exportItems[0].url = '/anchise2.web/Stampe/StampeDettaglio/StampaDettaglioPdfFromElenco';
                    }
                } else {
                    if (template === 'sintetico') {
                        exportItems[0].url = '/anchise2.web/Stampe/StampeDettaglio/StampaDettaglioSinteticoPdfFromAutorizza';
                    } else {
                        exportItems[0].url = '/anchise2.web/Stampe/StampeDettaglio/StampaDettaglioPdfFromAutorizza';
                    }
                }
            }

            self.ChangeRowView = function (event) {
                if (self.TemplateRiga() === 'sintetico') {
                    self.TemplateRiga('dettaglio');
                    $(event.target).val('Sintetico');
                    
                    getPrintUrl('dettaglio');
                } else {
                    self.TemplateRiga('sintetico');
                    $(event.target).val('dettaglio');

                    getPrintUrl('sintetico');
                }

                Export.print("export-distinta-dett", exportItems, ko.mapping.toJS(self.Disposizioni.PagingFilter));
            };

            var cancellaDisposizioni = function () {
                self.Validazioni.removeAll();
                var dist = self.Distinta();

                if (self.DispoToDelete().length > 0) {
                    dist.Disposizioni = ko.utils.arrayMap(self.DispoToDelete(), function (item) { return item; })
                }

                Http.Post("/anchise2.web/Autorizzazione/SearchDistinte/UpdateMsgId", ko.toJSON(dist))
                    .success(function (data) {
                        var result = new App.Core.StandardJsonResult(data);
                        self.CssClass(result.CssClass);
                        if (result.HasError) {
                            ko.mapping.fromJS(result.Messages, null, self.Validazioni);
                            $("body").animate({ scrollTop: 0 }, '500');
                        } else {
                            self.Message('Disposizione modificata correttamente.' + '\r\n' + 'Per poter procedere è necessario rigenerare la distinta tramite il pulsante GENERA.');

                            ko.mapping.fromJS([], null, self.Validazioni);
                            self.DispoToDelete([]);
                            self.Disposizioni.FirstPage();
                            self.DeleteSuccessVisible(true);
                        }
                    });
            };
            self.Confirm = function () {
                if ((self.DispoToDelete().length > 0 || self.MessageIdInEdit()) && self.DispoToDelete().length < self.Disposizioni.TotaleElementi()) {
                    if (self.DispoToDelete().length > 0 && self.MessageIdInEdit()) {
                        uiHelper.Confirm({
                            text: 'Sei sicuro di voler cancellare le disposizioni selezionate e di modificare il Nome Supporto?',
                            okCallback: cancellaDisposizioni
                        });
                    } else if (self.DispoToDelete().length > 0) {
                        uiHelper.Confirm({
                            text: 'Sei sicuro di voler cancellare le disposizioni selezionate?',
                            okCallback: cancellaDisposizioni
                        });
                    } else {
                        uiHelper.Confirm({
                            text: 'Sei sicuro di modificare il Nome Supporto?',
                            okCallback: cancellaDisposizioni
                        });
                    }
                } else if (self.DispoToDelete().length == self.Disposizioni.TotaleElementi()) {
                    self.Validazioni.removeAll();
                    self.Validazioni.push(new App.Core.ValidationMessage({ ErrorMessage: 'Non è possibile cancellare tutte le disposizioni all\'interno di una distinta' }));
                } else if (!self.MessageIdInEdit()) {
                    self.Validazioni.removeAll();
                    self.Validazioni.push(new App.Core.ValidationMessage({ ErrorMessage: 'Selezionare almeno un elemento dalla lista o modificare il Nome Supporto.' }));
                }
            };

            self.Init = function () {
                App.Common.MapIdentifier(self.Disposizioni.PagingFilter.IdentifierDistinta, self.Distinta().Identifier);
                self.Disposizioni.PagingFilter.IdAzienda = self.Distinta().Intestatario.Identifier.IdAzienda();
                self.Disposizioni.Search();
                self.Message('Operazione effettuata con successo.');
                self.CssClass('success');

                Export.print("export-distinta-dett", exportItems, ko.mapping.toJS(self.Disposizioni.PagingFilter));
            }

            self.Init();

            self.dispose = function () {
                distintaSubscribe.dispose();
            }
        }
    });
</script>


<form id="formEditBonifico" style="display: none" action="/anchise2.web/Autorizzazione/DataEntry/Readsubmit">
    <input id="formIdDispo" type="text" name="Identifier.Crypt">
</form>

<script type="text/html" id="riga-disposizione-sct">
    <!-- ko template: {name: TemplateRiga()} --><!-- /ko -->
</script>

<script type="text/html" id="sintetico">
    <!-- ko with: Disposizione -->
    <td data-bind="numericTextSeparator: Importo"></td>
    <td data-bind="text: Divisa"></td>
    <td data-bind="text: Ordinante.Abi"></td>
    <td data-bind="text: Ordinante.Cab"></td>
    <td data-bind="text: Ordinante.Conto"></td>
    <td class="textTruncate" data-bind="text: CreditoreOBeneficiario.Denominazione"></td>
    <td data-bind="text: Beneficiario.Iban"></td>
    <td class="text-center">
        <input type="checkbox" data-bind="value: $data, checked: $component.DispoToDelete, visible: $component.CancellaVisible" />
    </td>
    <td style="cursor: pointer" data-bind="visible: $component.ModificaVisible">
        <a data-bind ="click: $component.EditBonifico">
            Modifica
        </a>
    </td>
    <td data-bind="visible: !$component.ModificaVisible()">
    </td>
    <!-- /ko -->
</script>

<script type="text/html" id="dettaglio">
    <!-- ko with: Disposizione -->
    <td colspan="9">
        <div class="row">
            <div class="col-xs-12 white-block">
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                ABI-CAB-Conto Mittente
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="text: Ordinante.Abi() + '-' + Ordinante.Cab() + '-' + Ordinante.Conto()"></label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Ragione sociale Debitore Effettivo
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="text: Debitore.Denominazione"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Beneficiario
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="text: Beneficiario.Denominazione"></label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                IBAN
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="text: Beneficiario.Iban"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                BIC
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="text: Beneficiario.Bic"></label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Ragione sociale Creditore Effettivo
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="text: Creditore.Denominazione"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Importo
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="numericTextSeparator: Importo"></label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Divisa
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: Divisa"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Codice univoco
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="text: CodiceUnivoco"></label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                Descrizione per riconciliazione
                            </label>
                        </div>
                        <div class="col-xs-8 textTruncate">
                            <label data-bind="text: DescrizioneRiconcilazione"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <div class="col-xs-4">
                            <label class="control-label" style="padding: 0">
                                esito beneficiario
                            </label>
                        </div>
                        <div class="col-xs-8">
                            <label data-bind="text: HasEsitoAlBeneficiario() ? 'Si' : 'No'"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </td>
    <!-- /ko -->
</script>

<script type="text/javascript">
    ko.components.register('riga-disposizione-sct', {
        template: { element: 'riga-disposizione-sct' },
        viewModel: function (params) {
            var self = this;
            
            // Model
            self.Disposizione           = params.Disposizione;
            self.DispoToDelete          = params.DispoToDelete;
            self.TemplateRiga           = params.TemplateRiga;
            self.IdentifierDistinta     = params.IdentifierDistinta;
            self.StatoDistinta          = params.StatoDistinta;
            self.TotaleElementi         = params.TotaleElementi;
            self.EnableEditDisposizioni = ko.unwrap(params.EnableEditDisposizioni) || false;

            self.ModificaVisible = ko.pureComputed(function () {
                return self.StatoDistinta() != App.Common.StatiDistinta.AUTORIZZATA &&
                       self.StatoDistinta() != App.Common.StatiDistinta.CONFERMATA &&
                       self.EnableEditDisposizioni;
            });

            self.CancellaVisible = ko.pureComputed(function () {
                return (self.TotaleElementi() > 1 &&
                        (self.StatoDistinta() != App.Common.StatiDistinta.AUTORIZZATA && self.StatoDistinta() != App.Common.StatiDistinta.CONFERMATA) &&
                        self.EnableEditDisposizioni
                    );
            });

            // Action
            self.EditBonifico = function (data) {
                var form = $('#formEditBonifico');
                $('#formIdDispo').val(data.Identifier.Crypt());
                $('#formIdOrdinante').val(data.Ordinante.Identifier.Crypt());
                form.submit();
            };
        }
    });
</script>

<div id="eaa3d3074eb746638678cb8a345fd7ec_4">
            
                <distinta-sct-dettaglio params="Distinta: Distinta, Title: 'Distinta SCT', SearchUrl: '/anchise2.web/Autorizzazione/SearchDisposizioni/Search', Back: BackToAuthorizeList">
    <div data-bind="visible: DeleteSuccessVisible()" style="display: none;">
        <feedback-messages params="Buttons: SuccessButton,Message: Message, CssClass: CssClass">
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
                <h1 data-bind="text: Title">Distinta SCT</h1>
            </div>
            <validation-messages params="Validation: Validazioni">
    <div data-bind="visible: ValidationSectionVisible" style="display: none;">
        <div class="messagePanel error" style="display: block">
            <h3 class="titleSection">
                Errori
            </h3>
            <ul data-bind="foreach: Validation"></ul>
        </div>
    </div>
</validation-messages>

            <distinta-testata-dettaglio params="Distinta: Distinta, MessageIdInEdit: MessageIdInEdit, EnableEditDisposizioni: $component.EnableEditDisposizioni">
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
                                <label data-bind="text: Intestatario.RagioneSociale">C.P.C. INOX SPA</label>
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
                                <label data-bind="text: Intestatario.Sia">73586</label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Codice CUC mittente
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Intestatario.Cuc">VANTAGGT</label>
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
                                <label data-bind="text: Intestatario.Abi">05034</label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding:0">
                                    Descrizione banca
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: $component.DescrizioneBancaRicevente">BANCO BPM S.P.A.</label>
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
                                <label data-bind="text: Localization.TipologieDispositive.GetLabel(Identifier.ClasseServizio())">Bonifico SEPA</label> <span class="readOnly" data-bind="visible: IsSolaLettura()" style="display: none;"></span>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Modalita' di pagamento
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: Localization.TipologieDispositive.GetLabel(Identifier.ClasseServizio())">Bonifico SEPA</label>
                                <label data-bind="visible: EsitoOrdinante" style="display: none;">con esito all'ordinante</label>
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
                                <label data-bind="text: NumeroOrdini">3</label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Totale importi
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="numericTextSeparator: Importo">600,00</label><label>&nbsp;EUR</label>
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
                                <label data-bind="dateText: DataEsecuzione">25/10/2017</label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Esito ordinante
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: (EsitoOrdinante() ? 'SI' : 'NO')">NO</label>
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
                                <label data-bind="text: IsUrgP() ? 'Urgente' : 'Ordinario'">Ordinario</label>
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Addebito cumulativo
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: $component.AddebitoCumulativo">Nessuna richiesta (Accordi banca)</label>
                            </div>
                        </div>
                    </div>

                    
                    <hr>
                    <div class="col-xs-12 no-padding">
                        <div class="col-xs-6">
                            <div class="col-xs-4">
                                <label class="control-label" style="padding: 0">
                                    Stato distinta
                                </label>
                            </div>
                            <div class="col-xs-8">
                                <label data-bind="text: $component.StatoDistinta">Da Autorizzare</label>
                            </div>
                        </div>
                        <div class="col-xs-6" data-bind="visible: $component.IsFirmatariVisible" style="display: none;">
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
                                        <label style=" min-width: 190px" data-bind="text: NomeSupporto">XBN00588536/171025/00033586852</label>
                                        <span style="display: none;" class="icon-replace icon-edit active link" data-bind="visible: $component.NomeSupportoEditable(),click: $component.ToggleMsgIdEdit ">&nbsp;</span>
                                    </div>
                                    <div class="col-xs-6" style="padding-left: 6px; display: none;" data-bind="visible: $component.MessageIdInEdit()">
                                        <input type="text" class="form-control no-placeholder-italic" data-bind="value: NomeSupporto">
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
                                <label data-bind="dateText: DataCreazione">25/10/2017</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 no-padding" data-bind="visible: $component.IsAutorizzataOrConfermata" style="display: none;">
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
                    <div class="col-xs-12 no-padding" data-bind="visible: $component.IsAutorizzataOrConfermata" style="display: none;">
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
                    <div class="col-xs-12 no-padding" data-bind="visible: $component.IsConfermata" style="display: none;">
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
</distinta-testata-dettaglio>

            <div class="text-right">
                <input type="button" class="btn btn-primary" value="dettaglio" data-bind="singleClick: ChangeRowView">
                <input type="button" class="btn btn-primary" value="genera" data-bind="visible: GeneraVisible, singleClick: Genera, enable:!MessageIdInEdit()" style="display: none;">
            </div>
            <div>
                <!-- ko with: Disposizioni -->
                <div class="row">
                    <div class="form-field-input col-xs-5">
                        <label class="control-label">
                            Destinatario
                        </label>
                        <div class="form-field">
                            <input type="text" class="form-control" data-bind="value: PagingFilter.Beneficiario">
                        </div>
                    </div>
                    <div class="form-field-input col-xs-2">
                        <label class="control-label">
                            Importo Da
                        </label>
                        <div class="form-field">
                            <input type="text" class="form-control" data-bind="numericTextSeparator: PagingFilter.ImportoDa">
                        </div>
                    </div>
                    <div class="form-field-input col-xs-2">
                        <label class="control-label">
                            Importo A
                        </label>
                        <div class="form-field">
                            <input type="text" class="form-control" data-bind="numericTextSeparator: PagingFilter.ImportoA">
                        </div>
                    </div>
                    <div class="form-field-input col-xs-3">
                        <label class="control-label">
                            Mostra
                        </label>
                        <div class="form-field">
                            <div class="col-xs-4">
                                <select class="form-control" data-bind="options: PageSizeDropDown, value: PagingFilter.Size"><option value="10">10</option><option value="20">20</option><option value="50">50</option><option value="100">100</option></select>
                            </div>
                            <div class="col-xs-8">
                                <span class="icon-replace icon-search active" style="cursor: pointer" data-bind="singleClick: Search"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <div class="dataTables_wrapper" style="margin-top: 10px">
                            <table class="dataTable table">
                                <thead data-bind="visible: $component.TemplateRiga() == 'sintetico'">
                                    <tr>
                                        <th data-bind="css: ThCss('1'), singleClick: SortToggle('1')" class="sorting">
                                            Importo
                                        </th>
                                        <th>
                                            Divisa
                                        </th>
                                        <th data-bind="css: ThCss('2'), singleClick: SortToggle('2')" class="sorting">
                                            ABI
                                        </th>
                                        <th data-bind="css: ThCss('3'), singleClick: SortToggle('3')" class="sorting">
                                            CAB
                                        </th>
                                        <th data-bind="css: ThCss('4'), singleClick: SortToggle('4')" class="sorting">
                                            Rapporto
                                        </th>
                                        <th data-bind="css: ThCss('5'), singleClick: SortToggle('5')" class="sorting_asc">
                                            Beneficiario
                                        </th>
                                        <th data-bind="css: ThCss('6'), singleClick: SortToggle('6')" class="sorting">
                                            IBAN Beneficiario
                                        </th>
                                        <th>
                                            Elimina
                                        </th>
                                        <th>
                                            Modifica
                                        </th>
                                    </tr>
                                </thead>
                                <tbody data-bind="foreach: Page">
                                    <tr data-bind="visible: $component.TemplateRiga() != 'sintetico'" style="display: none;">
                                        <th colspan="9">
                                            <p>pagamento Numero: <span data-bind="text: $index() + 1">1</span></p>
                                        </th>
                                    </tr>
                                    <tr data-bind="component: {name: 'riga-disposizione-sct', params: {Disposizione: $data, TemplateRiga: $component.TemplateRiga, DispoToDelete: $component.DispoToDelete, IdentifierDistinta: $component.IdentifierDistinta, StatoDistinta: $component.Distinta().StatoDistinta, TotaleElementi: $component.Disposizioni.TotaleElementi, EnableEditDisposizioni: $component.EnableEditDisposizioni}}">
    <!-- ko template: {name: TemplateRiga()} -->
    <!-- ko with: Disposizione -->
    <td data-bind="numericTextSeparator: Importo">300,00</td>
    <td data-bind="text: Divisa">EUR</td>
    <td data-bind="text: Ordinante.Abi">05034</td>
    <td data-bind="text: Ordinante.Cab">33473</td>
    <td data-bind="text: Ordinante.Conto">000000011905</td>
    <td class="textTruncate" data-bind="text: CreditoreOBeneficiario.Denominazione">COMUNE DI SAN  MARTINO B.A. TESORERIA</td>
    <td data-bind="text: Beneficiario.Iban">IT39W0521659790000000000730</td>
    <td class="text-center">
        <input type="checkbox" data-bind="value: $data, checked: $component.DispoToDelete, visible: $component.CancellaVisible" value="[object Object]" style="display: none;">
    </td>
    <td style="cursor: pointer; display: none;" data-bind="visible: $component.ModificaVisible">
        <a data-bind="click: $component.EditBonifico">
            Modifica
        </a>
    </td>
    <td data-bind="visible: !$component.ModificaVisible()">
    </td>
    <!-- /ko -->
<!-- /ko -->
</tr>
                                
                                    <tr data-bind="visible: $component.TemplateRiga() != 'sintetico'" style="display: none;">
                                        <th colspan="9">
                                            <p>pagamento Numero: <span data-bind="text: $index() + 1">2</span></p>
                                        </th>
                                    </tr>
                                    <tr data-bind="component: {name: 'riga-disposizione-sct', params: {Disposizione: $data, TemplateRiga: $component.TemplateRiga, DispoToDelete: $component.DispoToDelete, IdentifierDistinta: $component.IdentifierDistinta, StatoDistinta: $component.Distinta().StatoDistinta, TotaleElementi: $component.Disposizioni.TotaleElementi, EnableEditDisposizioni: $component.EnableEditDisposizioni}}">
    <!-- ko template: {name: TemplateRiga()} -->
    <!-- ko with: Disposizione -->
    <td data-bind="numericTextSeparator: Importo">100,00</td>
    <td data-bind="text: Divisa">EUR</td>
    <td data-bind="text: Ordinante.Abi">05034</td>
    <td data-bind="text: Ordinante.Cab">33473</td>
    <td data-bind="text: Ordinante.Conto">000000011905</td>
    <td class="textTruncate" data-bind="text: CreditoreOBeneficiario.Denominazione">parodi annamaria</td>
    <td data-bind="text: Beneficiario.Iban">IT08H0558432440000000015900</td>
    <td class="text-center">
        <input type="checkbox" data-bind="value: $data, checked: $component.DispoToDelete, visible: $component.CancellaVisible" value="[object Object]" style="display: none;">
    </td>
    <td style="cursor: pointer; display: none;" data-bind="visible: $component.ModificaVisible">
        <a data-bind="click: $component.EditBonifico">
            Modifica
        </a>
    </td>
    <td data-bind="visible: !$component.ModificaVisible()">
    </td>
    <!-- /ko -->
<!-- /ko -->
</tr>
                                
                                    <tr data-bind="visible: $component.TemplateRiga() != 'sintetico'" style="display: none;">
                                        <th colspan="9">
                                            <p>pagamento Numero: <span data-bind="text: $index() + 1">3</span></p>
                                        </th>
                                    </tr>
                                    <tr data-bind="component: {name: 'riga-disposizione-sct', params: {Disposizione: $data, TemplateRiga: $component.TemplateRiga, DispoToDelete: $component.DispoToDelete, IdentifierDistinta: $component.IdentifierDistinta, StatoDistinta: $component.Distinta().StatoDistinta, TotaleElementi: $component.Disposizioni.TotaleElementi, EnableEditDisposizioni: $component.EnableEditDisposizioni}}">
    <!-- ko template: {name: TemplateRiga()} -->
    <!-- ko with: Disposizione -->
    <td data-bind="numericTextSeparator: Importo">200,00</td>
    <td data-bind="text: Divisa">EUR</td>
    <td data-bind="text: Ordinante.Abi">05034</td>
    <td data-bind="text: Ordinante.Cab">33473</td>
    <td data-bind="text: Ordinante.Conto">000000011905</td>
    <td class="textTruncate" data-bind="text: CreditoreOBeneficiario.Denominazione">simona piontini</td>
    <td data-bind="text: Beneficiario.Iban">IT10B0558485220000000042865</td>
    <td class="text-center">
        <input type="checkbox" data-bind="value: $data, checked: $component.DispoToDelete, visible: $component.CancellaVisible" value="[object Object]" style="display: none;">
    </td>
    <td style="cursor: pointer; display: none;" data-bind="visible: $component.ModificaVisible">
        <a data-bind="click: $component.EditBonifico">
            Modifica
        </a>
    </td>
    <td data-bind="visible: !$component.ModificaVisible()">
    </td>
    <!-- /ko -->
<!-- /ko -->
</tr>
                                </tbody>
                            </table>
                        </div>
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
                <!--/ko-->
            </div>
        </div>
        <div class="text-right">
            <div id="export-distinta-dett" value="Esporta" style="display: inline-block; vertical-align: top;">  <div class="tm-print">     <div class="btn-group undefined">         <button type="button" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">             Esporta <span class="caret" style="margin-left: 12px;"></span>         </button>         <ul class="dropdown-menu">                      <li>                 <a class="link-button Pdf-0" title="Export" style="padding: 10px; padding-right: 30px; padding-top: 5px; padding-bottom: 5px; font-size: 14px; font-family: Helvetica, Arial, sans-serif; font-weight: bold;">                     <div class="icon anchise-icon anchise-icon-export-Pdf"></div>                     <span style="margin-left: 12px;">Pdf</span>                 </a>             </li></ul>     </div>     <div class="print-popup"></div> </div></div>
            <input type="button" class="btn btn-primary" value="Indietro" data-bind="singleClick: Back">
            <input type="button" class="btn btn-primary" value="Conferma" data-bind="singleClick: Confirm, visible: $component.ConfirmVisible" style="display: none;">
        </div>
    </div>
</distinta-sct-dettaglio>
            

</div>

<script type="text/javascript">
    var jDistinta = {"IdDivisa":"EUR","EsitoOrdinante":false,"AddebitoCumulativo":"NR","DataEsecuzione":"2017-10-25T00:00:00","IsUrgP":false,"Disposizioni":null,"TipoConto":{"Codice":null,"DescrizioneLibera":null},"Beneficiario":null,"Identifier":{"Id":33586852,"Version":499502178,"IdAzienda":588536,"IdRapporto":2455525,"ClasseServizio":1,"Crypt":"blJn4qfK1lvAWr/Fm0ksKd8lFhxXoqPS1a3VNS+qJz2T+Wy1P9qOlVRm62rdhvf3jkgE8ivNAxfaSjTxOsoEqsOrfswvlaccpHY82I8tsQdcTSNF5lmW7pG5wZeZEQrfrVpxvU1zozOLoyHn1S/mmETmIQZwRCuayt52eWFIXOE=","Hash":"02C6B99F9457FA1D798B808C9AE5D759F173808EAC69F06B04698138E3DDB25F"},"NumeroOrdini":3,"NomeSupporto":"XBN00588536/171025/00033586852","StatoDistinta":1,"Firmatari":null,"DataCreazione":"2017-10-25T09:53:54.263","DataSpedizione":null,"DataDisponibilita":null,"DataConferma":null,"Intestatario":{"Identifier":{"Id":null,"Version":null,"IdAzienda":588536,"IdRapporto":2455525,"ClasseServizio":0,"Crypt":"IJ/a5phBzexCr38qBx5cW3CmERE05H/aDTeCCQyBKPV2+2yRJjhJq+tb4C9fIhsciyJh+J8Qo+VOc4Ri8LO91PUpi+Q5BCQ66+ZODdHiBWHvyKtUh2ldsN2UmkkQRUCUP1ayFjsVAiAKL7z7kHGBvw==","Hash":"965AA916692C3474F18952F40E152B13D996D688A528B2F0DCD98830BA2B9254"},"RagioneSociale":"C.P.C. INOX SPA","Cuc":"VANTAGGT","IdentificativoFiscale":"13336550150","Conto":"000000011905                                      ","Iban":"IT38V0503433473000000011905","Abi":"05034","Cab":"33473","Sia":"73586","StatoRapporto":1},"Flow":{"Id":{"Id":-2114000064,"Version":null,"IdAzienda":null,"IdRapporto":null,"ClasseServizio":0,"Crypt":"bj/ZlQGMF4GOhRiDRiAiBu+MTbA755D1WSRzmQUYnoa/A2zvD0KoE8S2I8PzlO9JHqhHLpPp7RHuLIuXaz+Crgc8ohWawFh82g7snyRKlR1esBZ8eb2HaHpbQ4GcxstJua71LnZwLqJxPla12/LOWw==","Hash":"0012601CB8B665D7EA27B41DAACD559CA8D5EE3891A2B6BCC9A3040E54D09021"},"DataCreazione":null,"DataInvio":null,"Content":null},"PotereFirma":0,"Certificato":0,"Importo":600.00,"Esito":false,"Tipo":0,"CheckIban":1};

    function rootViewModel(distinta) {
        var self = this;

        self.Distinta = ko.observable(new App.Sct.DistintaSctBo(distinta));

        self.BackToAuthorizeList = function () {
            location.href = '/youbiz.web/Integration/Home/IndexAnchiseAutorizzaDistinte';
        };

        self.Init = function () {
            $('#eaa3d3074eb746638678cb8a345fd7ec_5').load('/anchise2.web/Widget/LinkRapidi');
        }
        self.Init();
    }

    var viewModel = new rootViewModel(jDistinta);

    $(document).ready(function () {
        ko.applyBindings(viewModel, document.getElementById('eaa3d3074eb746638678cb8a345fd7ec_4'));
    });
</script>


                        </div>
                        <div class="clearfix"></div>
                    </div>
</body>
</html>
