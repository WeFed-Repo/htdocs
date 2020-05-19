<h2>Test anomalia tabella</h2>
<!-- DATO ORIGINALE 

<div class="mww-dom-component webank-component-table">
    <div class="bootstrap-table" id="mww-portfolioTable">
        <div class="fixed-columns" style="width: 218px;">
            <table cellspacing="0" cellpadding="0" border="0" data-fixed-cols="2"
                   class="has-fixed-cols table sortableTable" id="undefined_columnsort" style="width: 868px;">
                <thead>
                <tr>
                    <th class="center hasLegend" style="" data-field="iconaOp" tabindex="0">
                        <div class="th-inner ">&nbsp;</div>
                        <div class="fht-cell"></div>
                    </th>
                    <th class="left filter sortableTh sortedTh" style="" data-field="titolo" tabindex="0">
                        <div class="th-inner sortable both asc">Titolo/Fondo</div>
                        <div class="fht-cell"></div>
                        <div class="filter-wrap">
                            <div class="filter-toggle"><i class="icon icon-filter"></i><i class="icon icon-close"></i>
                            </div>
                            <input type="text" maxlength="20"></div>
                    </th>
                    <th class="left sortableTh" style="" data-field="mercato" tabindex="0">
                        <div class="th-inner sortable both">Mercato</div>
                        <div class="fht-cell"></div>
                    </th>
                    <th class="right sortableTh" style="" data-field="quantita" tabindex="0">
                        <div class="th-inner sortable both">Q.tà in portaf.</div>
                        <div class="fht-cell"></div>
                    </th>
                    <th class="right sortableTh" style="" data-field="quantitaDisponibile" tabindex="0">
                        <div class="th-inner sortable both">Q.tà disponibile</div>
                        <div class="fht-cell"></div>
                    </th>
                    <th class="right sortableTh" style="" data-field="prezzoMedioCarico" tabindex="0">
                        <div class="th-inner sortable both">Prz. medio carico</div>
                        <div class="fht-cell"></div>
                    </th>
                    <th class="right sortableTh" style="" data-field="ultimoPrezzo" tabindex="0">
                        <div class="th-inner sortable both">Ult. prz. ora</div>
                        <div class="fht-cell"></div>
                    </th>
                    <th class="right sortableTh" style="" data-field="controvaloreEur" tabindex="0">
                        <div class="th-inner sortable both">Controval. Eur</div>
                        <div class="fht-cell"></div>
                    </th>
                    <th class="right sortableTh" style="" data-field="profitAndLoss" tabindex="0">
                        <div class="th-inner sortable both">Utili/Perdite Eur Var %</div>
                        <div class="fht-cell"></div>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="dispari" data-index="0" data-uniqueid="a74c98bf-02fc-4809-b48c-9b258e62ea60">
                    <td class="center hasLegend" style="" data-field="iconaOp">
                        <div class="linkTooltip"><a href="#1" data-toggle="modal" data-target="#layerIconaOp"
                                                    title="scegli l'operazione da effettuare"
                                                    class="linkVai no-underline btn-icon"><i
                                class="icon icon-2x icon-ico_azioni02A"></i></a></div>
                    </td>
                    <td class="left filter sortableTh" style="" data-field="titolo"><a class="schedaTitolo"
                                                                                       mww-ic-bound="1">REP.OF ITALY
                        5,375% 03/15.6.2033-USD</a></td>
                    <td class="left sortableTh" style="" data-field="mercato">
                        <nobr class="mercato">EuroMOT<span class="table-btn-more"></span></nobr>
                    </td>
                    <td class="right sortableTh" style="" data-field="quantita">7.000</td>
                    <td class="right sortableTh" style="" data-field="quantitaDisponibile">7.000</td>
                    <td class="right sortableTh" style="" data-field="prezzoMedioCarico">114,95079</td>
                    <td class="right sortableTh" style="" data-field="ultimoPrezzo"><span data-value="115,46">115,46<br>11:52:53</span>
                    </td>
                    <td class="right sortableTh" style="" data-field="controvaloreEur">7.280,55</td>
                    <td class="right sortableTh" style="" data-field="profitAndLoss"><span data-value="17,59"
                                                                                           class="posi">17,59<br>0,24%</span>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr class="totali">
                    <td class="bgWhite brdWhite"></td>
                    <td class="right" colspan="1">Totale</td>
                    <td colspan="5"></td>
                    <td class="right" colspan="1">7.280,55</td>
                    <td class="right" colspan="1"><span data-value="17,59" class="posi">17,59<br>0,24%</span></td>
                </tr>
                </tfoot>
            </table>
        </div>
        <div class="fixed-table-toolbar"></div>
        <div class="fixed-table-container" style="padding-bottom: 0px;">
            <div class="fixed-table-header" style="display: none;">
                <table></table>
            </div>
            <div class="fixed-table-body">
                <div class="fixed-table-loading" style="top: 62px;">Caricamento in corso...</div>
                
            </div>
            <div class="fixed-table-footer" style="display: none;">
                <table>
                    <tbody>
                    <tr></tr>
                    </tbody>
                </table>
            </div>
            <div class="fixed-table-pagination" style="display: none;"></div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>


-->
<script type="text/javascript">
    $(function(){
        $("#sampleTable").bootstrapTable();
    });
</script>
<table cellspacing="0" cellpadding="0" border="0" data-fixed-cols="2"  class="has-fixed-cols table sortableTable" id="sampleTable">
                    <thead>
                    <tr>
                        <th class="center hasLegend" style="" data-field="iconaOp" tabindex="0"></th>
                        <th class="left filter" style="" data-field="titolo" data-sort="true" tabindex="0">Titolo/Fondo</th>
                        <th class="left" style="" data-field="mercato" tabindex="0">Mercato</th>
                        <th class="right " style="" data-field="quantita" tabindex="0">Q.tà in portaf.</th>
                        <th class="right" style="" data-field="quantitaDisponibile" tabindex="0">Q.tà disponibile</th>
                        <th class="right" style="" data-field="prezzoMedioCarico" tabindex="0">Prz. medio carico</th>
                        <th class="right " style="" data-field="ultimoPrezzo" tabindex="0">Ult. prz. ora</th>
                        <th class="right " style="" data-field="controvaloreEur" tabindex="0">Controval. Eur</th>
                        <th class="right " style="" data-field="profitAndLoss" tabindex="0">Utili/Perdite Eur Var %</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="dispari" data-index="0" data-uniqueid="a74c98bf-02fc-4809-b48c-9b258e62ea60">
                        <td class="center hasLegend" style="" data-field="iconaOp">
                            <div class="linkTooltip"><a href="#1" data-toggle="modal" data-target="#layerIconaOp"
                                                        title="scegli l'operazione da effettuare"
                                                        class="linkVai no-underline btn-icon"><i
                                    class="icon icon-2x icon-ico_azioni02A"></i></a></div>
                        </td>
                        <td class="left filter sortableTh" style="" data-field="titolo"><a class="schedaTitolo">REP.OF
                            ITALY 5,375% 03/15.6.2033-USD</a></td>
                        <td class="left sortableTh" style="" data-field="mercato">
                            <nobr class="mercato">EuroMOT<span class="table-btn-more"></span></nobr>
                        </td>
                        <td class="right sortableTh" style="" data-field="quantita">7.000</td>
                        <td class="right sortableTh" style="" data-field="quantitaDisponibile">7.000</td>
                        <td class="right sortableTh" style="" data-field="prezzoMedioCarico">114,95079</td>
                        <td class="right sortableTh" style="" data-field="ultimoPrezzo"><span data-value="115,46">115,46<br>11:52:53</span>
                        </td>
                        <td class="right sortableTh" style="" data-field="controvaloreEur">7.280,55</td>
                        <td class="right sortableTh" style="" data-field="profitAndLoss"><span data-value="17,59"
                                                                                               class="posi">17,59<br>0,24%</span>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr class="totali">
                        <td class="bgWhite brdWhite"></td>
                        <td class="right" colspan="1">Totale</td>
                        <td colspan="5"></td>
                        <td class="right" colspan="1">7.280,55</td>
                        <td class="right" colspan="1"><span data-value="17,59" class="posi">17,59<br>0,24%</span></td>
                    </tr>
                    </tfoot>
                </table>