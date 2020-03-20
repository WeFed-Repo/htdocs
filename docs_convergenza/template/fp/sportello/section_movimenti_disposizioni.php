<article id="movDispoTab" class="col-xs-12 col-md-6">
    <div id="movDispoExp" style="display:none;">
        <div class="header clearfix tab">
            <ul class="spTab">
                <li class="firstTab tabAttivo">
                    <h4 class="spHeader">Movimenti dell'ultimo mese</h4>
                </li>
                <li>
                    <h4 class="spHeader">Esito disposizioni</h4>
                </li>
            </ul>
        </div>
        <div class="tabCont">
            <div id="movBox" class="well clearfix spBox">
                <section id="movContent" class="spContent clearfix">
                    <div class="spWrapper2">
                        <div id="errMovMsg" class="boxesito negativo" style="display:none">
                            <div class="middle">
                                <div class="text">
                                    <p class="nopadd"><strong>Errore caricamento dati</strong><br>
                                        Prova a ricaricare la pagina.</p>
                                </div>
                            </div>
                        </div>
                        <div id="noMovMsg" class="boxesito attenzione" style="display:none">
                            <div class="middle">
                                <div class="text">
                                    <p class="nopadd">Non sono presenti movimenti contabilizzati.</p>
                                </div>
                            </div>
                        </div>
                        <div id="bxsliderMovBox">
                            <div id="bxsliderMov">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="center th-data">Data</th>
                                            <th class="left th-desc">Descrizione</th>
                                            <th class="right th-imp">Importo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="form-group btnWrapper">
                        <div class="btn-align-right">
                            <a type="button" class="btn btn-primary" id="linkMovimenti" href="javascript:">Tutti i movimenti</a>
                        </div>
                    </div>
                </section>
                <div class="spZoom" style="display:none"></div>
                <div class="spCover">
                    <section id="movGraph" side="bottom" dimension="full" class="spSlide" style="display:none">
                        <div class="spWrapper">
                            <p id="graph">
                                <!--img class="hidden-phone" width="610" height="150" src="/librerie/img/grafico.png"/-->
                                <!--img class="visible-phone" width="480" height="118" src="/librerie/img/grafico_mobi.png"/-->
                            </p>
                            <div class="spBottom"></div>
                            <div class="spLine"></div>
                            <div class="spLeft spBack spIco spGreen1 fxZoomOut"></div>
                        </div>
                    </section>
                    <section id="movDetail" side="top" dimension="full" class="spSlide" style="display:none">
                        <div class="spWrapper2">
                            <table id="movTable2" class="table spTable">
                                <thead>
                                    <tr class="spThead">
                                        <th class="th-data">Data</th>
                                        <th class="th-desc">Descrizione</th>
                                        <th class="spRight th-imp">Importo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="spNoWrap"></td>
                                        <td class="linkDetail"></td>
                                        <td class="spRight spNoWrap"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <h5 class="spHeader2">Dettagli</h5>
                            <p id="movDetailText"></p>
                            <div class="spLine"></div>
                            <div class="spLeft spBack spIco spGreen1 fxZoomOut"></div>
                        </div>
                    </section>
                </div>
            </div><!--/.well -->
            <div id="dispoBox" class="well clearfix spBox" style="display: none;">
                <section id="dispoContent" class="spContent clearfix">
                    <div class="spWrapper2"> <!--con dati dispo ripristinare spWrapper2 -->
                        <div id="errDispoMsg" class="boxesito negativo" style="display:none">
                            <div class="middle">
                                <div class="text">
                                    <p class="nopadd"><strong>Errore caricamento dati</strong><br>
                                        Prova a ricaricare la pagina.</p>
                                </div>
                            </div>
                        </div>
                        <div id="noDispoMsg" class="boxesito attenzione" style="display:none">
                            <div class="middle">
                                <div class="text">
                                    <p class="nopadd">Non sono presenti disposizioni.</p>
                                </div>
                            </div>
                        </div>
                        <div id="bxsliderDispoBox">
                            <div id="bxsliderDispo" class="">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="center th-data">Data</th>
                                            <th class="left th-tipo">Tipologia</th>
                                            <th class="left th-stato">Stato</th>
                                            <th class="right th-imp">Importo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="form-group btnWrapper">
                        <div class="btn-align-right">
                            <a type="button" class="btn btn-primary" id="linkDiposizioni" href="javascript:">Tutti le
                                disposizioni</a>
                        </div>
                    </div>
                </section>
                <div class="spZoom" style="display:none"></div>
                <div class="spCover">
                    <section id="dispoDetail" side="top" dimension="full" class="spSlide" style="display:none">
                        <div class="spWrapper2">
                            <table id="dispoTable2" class="table spTable">
                                <thead>
                                    <tr class="spThead">
                                        <th class="th-data">Data</th>
                                        <th class="th-tipo">Tipologia</th>
                                        <th class="th-stato">Stato</th>
                                        <th class="spRight th-imp">Importo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="spNoWrap"></td>
                                        <td class="linkDetail"></td>
                                        <td class="spNoWrap"></td>
                                        <td class="spRight spNoWrap"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <h5 class="spHeader2">Descrizione</h5>
                            <div id="dispoDescBox">
                                <p id="dispoDescText"></p>
                            </div>
                            <a id="dispoDetailLink"></a>
                            <div class="spBottom"></div>
                            <div class="spLine"></div>
                            <div class="spLeft spBack spIco spGreen1 fxZoomOut"></div>
                        </div>
                    </section>
                </div>
            </div><!--/.well -->
        </div>
    </div>
</article><!--/span-->