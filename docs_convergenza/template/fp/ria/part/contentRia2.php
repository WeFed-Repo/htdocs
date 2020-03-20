<div id="contentRia2" class="tab-content contentRia formGenerico">
    <div id="tabTrasferimenti" class="navContSecondLev">
        <div class="outerTab">
            <ul class="tabWrapper tabsmall hidden-xs">
                <li id="tabTrasf1"><a href="javascript:">Singolo</a></li>
                <li id="tabTrasf2"><a href="javascript:">Periodici</a></li>
            </ul>
        </div>
        <div class="separator"></div>
        <div class="panel-group panel-fill panel-group-ria" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div id="contentTrasf1" class="panel-collapse collapse" role="tabpanel">
                    <div class="panel-body">
                        <div class="tab-wrap">
                            <!-- manuali -->
                            <div class="trasfManualiR2">
                                <!-- div per visualizzazione errori campi form -->
                                <section class="boxesitoWrap" id="errorDiv2">
                                    <div class="boxesito negativo">
                                        <div class="text">
                                            <div id="errorContent2">
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="trasfIntro">
                                    <p>Il trasferimento da
                                        conto a deposito (e viceversa) &egrave; <strong>velocissimo</strong>:
                                        si aggiornano immediatamente il <strong>saldo contabile</strong> e il <strong>saldo
                                            disponibile</strong>.</p>
                                </section>

                                <section>
                                    <div id="trasferimentiBox3" class="row">
                                        <div class="hidden-sm col-md-1"></div>
                                        <div class="col-sm-12 col-md-4">
                                            <div class="riaTrasf riaTrasf1a">
                                                <div class="form-group requiredField">
                                                    <label for="importoCDversamenti" class="control-label">Versa sul
                                                        deposito</label>
                                                    <div class="riaTrasfInput">
                                                        <input type="text" id="importoCDversamenti"
                                                               class="form-control clear-x"/>
                                                        <button id="aggiungiCDversamenti" type="button"
                                                                class="btn btn-primary" data-dismiss="modal">Esegui
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6">
                                                        <label class="dispLabel">Disponibilit&agrave;</label>
                                                        <span class="dispVal visible-sm-inline-block"><a
                                                                    href="javascript:" class="dispTrasfCDLink"><span
                                                                        class="dispImp"></span>&nbsp;<span
                                                                        class="valuta"></span></a></span>
                                                    </div>
                                                    <div class="col-md-6 visible-md visible-lg">
                                                        <span class="output dispVal"><a href="javascript:"
                                                                                        class="dispTrasfCDLink"><span
                                                                        class="dispImp"></span>&nbsp;<span
                                                                        class="valuta"></span></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="riaTrasf riaTrasf1b">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6">
                                                        <label class="dispLabel">Il dep. diventa</label>
                                                        <span class="dispVal diventaCDTr visible-sm-inline-block"><span
                                                                    class="dispImp"></span>&nbsp;<span
                                                                    class="valuta"></span></span>
                                                    </div>
                                                    <div class="col-md-6 visible-md visible-lg">
                                                        <span class="output dispVal"><span
                                                                    class="dispImp diventaCDTr"></span>&nbsp;<span
                                                                    class="valuta"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hidden-sm col-md-2"></div>
                                        <div class="col-sm-12 col-md-4">
                                            <div class="riaTrasf riaTrasf2a">
                                                <div class="form-group requiredField">
                                                    <label for="importoCCversamenti" class="control-label">Versa
                                                        sul conto corrente</label>
                                                    <div class="riaTrasfInput">
                                                        <input type="text" id="importoCCversamenti"
                                                               class="form-control clear-x"/>
                                                        <button id="aggiungiCCversamenti" type="button"
                                                                class="btn btn-primary" data-dismiss="modal">Esegui
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6">
                                                        <label class="dispLabel">Disponibilit&agrave;</label>
                                                        <span class="dispVal visible-sm-inline-block"><a
                                                                    href="javascript:" class="dispTrasfCCLink"><span
                                                                        class="dispImp"></span>&nbsp;<span
                                                                        class="valuta"></span></a></span>
                                                    </div>
                                                    <div class="col-md-6 visible-md visible-lg">
                                                        <span class="output dispVal"><a href="javascript:"
                                                                                        class="dispTrasfCCLink"><span
                                                                        class="dispImp"></span>&nbsp;<span
                                                                        class="valuta"></span></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="riaTrasf riaTrasf2b">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6">
                                                        <label class="dispLabel">Il conto diventa</label>
                                                        <span class="dispVal diventaCCTr visible-sm-inline-block"><span
                                                                    class="dispImp"></span>&nbsp;<span
                                                                    class="valuta"></span></span>
                                                    </div>
                                                    <div class="col-md-6 visible-md visible-lg">
                                                        <span class="output dispVal"><span
                                                                    class="dispImp diventaCCTr"></span>&nbsp;<span
                                                                    class="valuta"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hidden-xs hidden-sm col-md-1"></div>
                                    </div>
                                </section>
                            </div>
                            <div class="clear"></div>
                            <!-- fine manuali -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div id="contentTrasf2" class="panel-collapse collapse" role="tabpanel">
                    <div class="panel-body">
                        <div class="tab-wrap">
                            <div class="trasferimentiRicorrenti trasfRicorr" id="contentTrasfRicorr1">
                                <h4 class="strongTitle">Trasferimenti periodici inseriti</h4>
                                <section id="divTrasfRic">
                                    <table id="tabellaTrasfRic" data-toggle="table">
                                        <thead>
                                            <tr>
                                                <th class="left">Importo <span class="valuta"></span></th>
                                                <th class="left">Periodicit&agrave;</th>
                                                <th class="center">Dal</th>
                                                <th class="center">Scadenza ordine</th>
                                                <th class="center">Gestione</th>
                                            </tr>
                                        </thead>
                                        <tbody id="bodyTableTS"></tbody>
                                    </table>
                                </section>

                                <section>
                                    <div class="form-group btnWrapper">
                                        <div class="btn-align-right">
                                            <a type="button" class="btn btn-primary" id="nuovoTrasf" href="javascript:"
                                               title="Imposta nuovo trasferimento periodico">Imposta nuovo trasferimento
                                                periodico</a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </section>

                                <section class="boxesitoWrap boxesitoBottom">
                                    <div class="boxesito attenzione">
                                        <div class="text">
                                            <div>
                                                Gli annullamenti dei trasferimenti periodici inseriti entro le ore 20:00
                                                avranno
                                                effetto dal primo giorno lavorativo successivo all'inserimento stesso.
                                                Richieste inserite dopo le ore 20:00 avranno invece effetto dal secondo
                                                giorno
                                                lavorativo successivo all'inserimento stesso.
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="nuovoTrasferimentiRicorrenti trasfRicorr" id="contentTrasfRicorr2">
                                <!-- div per visualizzazione errori campi form -->
                                <section class="boxesitoWrap" id="errorDiv3">
                                    <div class="boxesito negativo">
                                        <div class="text">
                                            <div id="errorContent3">
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <form id="ricorrentiForm">
                                    <h4 class="strongTitle">Imposta trasferimento periodico verso il deposito</h4>
                                    <div class="row form-group">
                                        <div class="col-sm-4 requiredField">
                                            <label for="importoTRf" id="labelImportoTR" class="control-label">Importo</label>
                                            <input type="text" name="importo" id="importoTRf" data-error="" class="form-control clear-x">
                                        </div>
                                        <div class="col-sm-4 requiredField">
                                            <label for="aPartireDaTRf" id="labelApartireDaTR" class="control-label">A partire da</label>
                                            <div class="form-inline">
                                                <div class="input-group">
                                                    <input type="text" name="aPartire" id="aPartireDaTRf"
                                                           class="form-control clear-x" placeholder="gg/mm/aaaa"
                                                           data-error=""><a class="input-group-addon date btn-icon"
                                                                            href="javascript:"><i
                                                                class="icon icon-calendar_filled"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 requiredField">
                                            <label class="control-label" for="frequenzaTRf">Frequenza</label>
                                            <select name="frequenza" id="frequenzaTRf" class="form-control"></select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-6 col-md-5">
                                            <label class="control-label">Scadenza</label>
                                            <div id="scadenzeLabeleRadio" class="row">
                                                <div class="col-xs-6 requiredField">
                                                    <div class="radio inline">
                                                        <label class="textWrapper" for="revoca">
                                                            <input type="radio" id="revoca" name="scadenzaTRf" value="a revoca" class="radio">
                                                            <span class="text">a richiesta</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 requiredField">
                                                    <div class="radio inline">
                                                        <label id="labelNumeroTR" class="textWrapper" for="dopoN">
                                                            <input type="radio" id="dopoN" name="scadenzaTRf" value="dopo" class="radio">
                                                            <span class="text">automatica</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="scadenza"><span id="scadenzaTRfLAB"></span></span>
                                        </div>
                                        <div class="col-sm-2 col-md-3 requiredField">
                                            <div id="numeroTRfDiv" style="display:none">
                                                <label class="control-label visible-sm" for="numeroTRf">N. vers.</label>
                                                <label class="control-label hidden-sm" for="numeroTRf">N.
                                                    versamenti</label>
                                                <input type="text" name="numero" id="numeroTRf" class="numero form-control clear-x" maxlength="4">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-4">
                                            <div class="btnWrapper bottomZero">
                                                <div class="btn-full">
                                                    <a type="button" href="javascript:" class="btn btn-primary"
                                                       title="Imposta" id="ImpostaTrasRicorrente">Procedi</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="numeroTRfOK" value="">
                                    <input type="hidden" id="scadenzaTRfOK" value="">
                                </form>

                                <hr class="separator-ria separator-small">

                                <section>
                                    <h4 class="strongTitle" id="titGraficoProiezioneTRic">Come aumenter&agrave; il tuo deposito?</h4>
                                    <div id="graficoProiezioneTRicDiv" class="graficoProiezioneTRicDiv"></div>
                                    <div id="LegendaGraficoProiezioneTRicDiv">
                                        <span class="legenda legAumen"><i class="icon icon-indicatore_legenda"></i> Aumento previsto del deposito</span>
                                        <span class="legenda legTrasf"><i class="icon icon-indicatore_legenda"></i> Trasferimento  periodico</span>
                                    </div>
                                    <hr class="separator-ria separator-small">
                                    <p class="note">Il grafico si riferisce ai soli trasferimenti periodici e non ad
                                        altre tipologie di trasferimenti (per esempio, singolo).</p>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
