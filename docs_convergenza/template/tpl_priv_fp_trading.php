<?php
$visual = isset($_GET['visual']) && $_GET['visual'] == 'y';
?>

<style type="text/css">
    @import url("/WB/fe/css/fp_trading.css");
</style>

<div id="fpTrading">
	<?php if ($visual) { ?>
        <!-- VISUAL APERTURA CONTO -->
        <section>
            <div class="boxApriDepTit">
                <div class="titleApriDepTit"><a href="javascript:">Vuoi investire? Apri il deposito titoli <span class="arrowApriDepTit"><i
                                    class="icon icon-arrow_right"></i></span></a></div>
                <div class="row">
                    <div class="col-sm-6">v
                        <div class="platformApriDepTit">
                            <div class="icoLinkApriDepTit"><i class="icon icon-trading"></i></div>
                            <div class="infoLinkApriDepTit">
                                <div class="titleLinkApriDepTit"><a href="javascript:">PIATTAFORME <span class="arrowApriDepTit"><i
                                                    class="icon icon-arrow_right"></i></span></a></div>
                                <div class="textLinkApriDepTit">Scopri la nostra T3: per accedere alla versione demo ti basta utilizzare le
                                    credenziali (User ID e password) di accesso al conto.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="walletApriDepTit">
                            <div class="icoLinkApriDepTit"><i class="icon icon-trading_euro"></i></div>
                            <div class="infoLinkApriDepTit">
                                <div class="titleLinkApriDepTit"><a href="javascript:">PORTAFOGLIO VIRTUALE <span class="arrowApriDepTit"><i
                                                    class="icon icon-arrow_right"></i></span></a></div>
                                <div class="textLinkApriDepTit">Simula i tuoi investimenti e costruisci il tuo portafoglio nella massima flessibilit&agrave;!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- VISUAL APERTURA CONTO -->
	<?php } else { ?>
        <!-- GRAFICO CON DATI TABELLARI -->
        <!-- Deposito titoli -->
        <section>
            <form class="formGenerico borderFormRounded output" role="form" id="formSelRapporto">
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5">
                            <label class="control-label-output">Deposito titoli</label>
                            <div id="sceltaRapporto" class="selectRapp">
                                <input id="sceltaRapportoVal" type="hidden" class="value" name="rapporto" value="xxxaaaaaa"/>
                                <a href="javascript:" class="inputOption inputSx form-control">
                            <span class="inputDx">
                                <span class="input">
                                    xxx/aaaaaa
                                </span>
                            </span>
                                </a>
                                <div class="selector" style="display: none;">
                            <span class="group">
                                <a value="xxxaaaaaa" href="javascript:" class="selectorOptions selected">
                                <strong>xxx/aaaaaa</strong><br/>
                                Nome Nome Cognome Cognome1</a>
                            </span>
                                    <span class="group">
                                <a value="xxxbbbbbb" href="javascript:" class="selectorOptions">
                                <strong>xxx/bbbbbb</strong><br/>
                                Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
                            </span>
                                    <span class="group">
                                <a value="xxxcccccc" href="javascript:" class="selectorOptions">
                                <strong>xxx/cccccc</strong><br/>
                                Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
                                Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
                                Nome Nome Cognome Cognome5</a>
                            </span>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-8 col-sm-3">
                            <label class="control-label-output">Totale liquidit&agrave;</label>
                            <span class="output txthelp" data-toggle="tooltip">4.213,46 al gg/mm/aaaa</span>
                            <div class="htmlTooltip">
                                08/07/2016: <strong><span id="tot_investibile_1">4.213,46</span>&nbsp;€</strong>
                                <br>11/07/2016: <strong><span id="tot_investibile_1a">4.213,46</span>&nbsp;€</strong>
                                <br>12/07/2016: <strong><span id="tot_investibile_2">4.213,46</span>&nbsp;€</strong>
                                <br>13/07/2016: <strong><span id="tot_investibile_3">4.213,46</span>&nbsp;€</strong>
                                <br>14/07/2016: <strong><span id="tot_investibile_4">4.213,46</span>&nbsp;€</strong>
                            </div>
                        </div>
                        <div class="col-xs-2 col-sm-2 no-label">
                            <a href="javascript:" class="no-underline btn-icon"><i class="icon icon-2x icon-zoom_piu_filled"></i></a>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <!-- Fine deposito titoli -->

        <section>
            <h4 id="tradingChartTitle" class="strongTitle hidden-xs">Grafico relativo al controvalore EUR attuale</h4>
            <div class="row">
                <div class="col-sm-4">
                    <div class="totChart">
                        <div class="lblTotChart">CONTROVALORE MERCATO</div>
                        <div class="valTotChart">99.999.002,50 <span class="valuta">Eur</span></div>
                    </div>
                    <div class="totChart">
                        <div class="lblTotChart">P&L ASSOLUTO</div>
                        <div class="valTotChart posi">99.999.002,50 <span class="valuta">Eur</span></div>
                    </div>
                    <div id="chartwrap">
                        <div id="outercircle"></div>
                        <div id="chartdiv"></div>
                        <div id="innercircle"></div>
                        <div id="chartCover" style="display: none;">
                            <div id="chartCoverText">
                                <p>Si &egrave; verificato un problema
                                    <br> durante il caricamento dei dati.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="headerContainerNoBootS">
                        <div class="tableContainerNoBootS">
                            <table id="chartLegend">
                                <thead>
                                    <tr>
                                        <th class="nome left"></th>
                                        <th class="valore right">Controv. EUR attuale</th>
                                        <th class="valore right hidden-xs">Controv. EUR investito</th>
                                        <th class="valore right">P&L Assoluto</th>
                                        <th class="valore right hidden-xs">Var. %</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="dispari">
                                        <td class="nome left"><span class="nomeVal nomeAit">Azioni italia</span></td>
                                        <td class="valore right"><span>99.999.999,00</span></td>
                                        <td class="valore right hidden-xs"><span>99.999.999,00</span></td>
                                        <td class="valore right"><span class="posi">99.999.999,00</span></td>
                                        <td class="valore right hidden-xs"><span class="posi">999,99</span></td>
                                    </tr>
                                    <tr class="pari">
                                        <td class="nome left"><span class="nomeVal nomeAes">Azioni Estero</span></td>
                                        <td class="valore right"><span>99.999.999,00</span></td>
                                        <td class="valore right hidden-xs"><span>99.999.999,00</span></td>
                                        <td class="valore right"><span class="nega">-99.999.999,00</span></td>
                                        <td class="valore right hidden-xs"><span class="nega">-999,99</span></td>
                                    </tr>
                                    <tr class="dispari">
                                        <td class="nome left"><span class="nomeVal nomeObb">Obbligazioni</span></td>
                                        <td class="valore right"><span>99.999.999,00</span></td>
                                        <td class="valore right hidden-xs"><span>99.999.999,00</span></td>
                                        <td class="valore right"><span class="posi">99.999.999,00</span></td>
                                        <td class="valore right hidden-xs"><span class="posi">999,99</span></td>
                                    </tr>
                                    <tr class="pari">
                                        <td class="nome left"><span class="nomeVal nomeDvt">Derivati</span></td>
                                        <td class="valore right"><span>99.999.999,00</span></td>
                                        <td class="valore right hidden-xs"><span>99.999.999,00</span></td>
                                        <td class="valore right"><span class="nega">-99.999.999,00</span></td>
                                        <td class="valore right hidden-xs"><span class="nega">-999,99</span></td>
                                    </tr>
                                    <tr class="dispari">
                                        <td class="nome left"><span class="nomeVal nomeCwc">CW/Certificates</span></td>
                                        <td class="valore right"><span>99.999.999,00</span></td>
                                        <td class="valore right hidden-xs"><span>99.999.999,00</span></td>
                                        <td class="valore right"><span class="posi">99.999.999,00</span></td>
                                        <td class="valore right hidden-xs"><span class="posi">999,99</span></td>
                                    </tr>
                                    <tr class="pari">
                                        <td class="nome left"><span class="nomeVal nomeEtf">ETF</span></td>
                                        <td class="valore right"><span>99.999.999,00</span></td>
                                        <td class="valore right hidden-xs"><span>99.999.999,00</span></td>
                                        <td class="valore right"><span class="nega">-99.999.999,00</span></td>
                                        <td class="valore right hidden-xs"><span class="nega">-999,99</span></td>
                                    </tr>
                                    <tr class="dispari">
                                        <td class="nome left"><span class="nomeVal nomeMar">Marginazione</span></td>
                                        <td class="valore right"><span>99.999.999,00</span></td>
                                        <td class="valore right hidden-xs"><span>99.999.999,00</span></td>
                                        <td class="valore right"><span class="posi">99.999.999,00</span></td>
                                        <td class="valore right hidden-xs"><span class="posi">999,99</span></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="totali">
                                        <td class="nome left"><span class="nomeVal">TOTALE</span></td>
                                        <td class="valore right"><span>99.999.999,00</span></td>
                                        <td class="valore right hidden-xs"><span>99.999.999,00</span></td>
                                        <td class="valore right"><span class="nega">-999.999.999,00</span></td>
                                        <td class="valore right hidden-xs"><span class="nega">-999,99</span></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tradingChartBtns" class="form-group btnWrapper">
                <div class="btn-align-right"><a type="button" class="btn btn-primary" id="">Vai al portafoglio</a></div>
                <br class="clear">
            </div>
        </section>
        <!-- FINE | GRAFICO CON DATI TABELLARI -->


        <!-- BOX ATTENZIONE ALTERNATIVO AL GRAFICO PER ASSENZA POSIZIONI APERTE -->
        <section class="boxesitoWrap">
            <div class="boxesito attenzione">
                <div class="text">
                    <p><strong>Non ci sono posizioni aperte</strong><br>Dolor lorem sit amet, consectetur adipisicing elit. Impedit consectetur, voluptates harum alias, vero libero facere dicta natus molestias dolor neque eos aperiam amet. Tenetur eius, quasi voluptas velit explicabo.</p>
                </div>
            </div>
        </section>

        <!-- FINE BOX ATTENZIONE ALTERNATIVO AL GRAFICO PER ASSENZA POSIZIONI APERTE -->

        <!-- BANNER T3 -->
        <section class="hidden-xs">
            <div id="tradingBanner" class="hidden-xs">
                <span class="ban-cta">
                <a href="#">
                    Scopri la tua nuova piattaforma T3 <i class="icon icon-arrow_right"></i>
                </a>
                </span>
                <a href="#" class="ban-img"><img src="/WB/fe/img/banner_T3.png" alt="Banner T3"></a>
                <a href="#" class="ban-img"><img src="/WB/fe/img/banner_T3open.png" alt="Banner T3"></a>
                <a href="#" class="ban-img"><img src="/WB/fe/img/banner_T3noframe.png" alt="Banner T3"></a>
            </div>
        </section>

        <!-- FINE | BANNER T3 -->

        <!-- NEWS TRADING -->
        <script>
            // Esempio automazione grafici indicativa
            $(function () {
                $(".wrapTradInd *[data-graph]").click(function () {

                    var grLink = $(this);
                    var grFunWrapper = grLink.parents(".wrapTradInd");

                    // Chiude eventuali spazi mobile aperti (resetta gli stati);
                    grFunWrapper.find("tr.grTr").empty().hide();
                    grFunWrapper.find(".btn-icon").removeClass("on");
                    grLink.addClass("on");
                    var graphSpaceMobile;
                    if (!grLink.parents("tr").next("tr").hasClass("grTr")) {
                        grLink.parents("tr").after($("<tr>").addClass("grTr visible-xs"));
                    }
                    graphSpaceMobile = grLink.parents("tr").next("tr").empty();
                    graphSpaceMobile.append($("<td>").attr("colspan", 5).append($("<div>").addClass("boxTradInd"))).show();

                    // Prepara il div con il grafico e lo appende laddove necessario
                    var graphEl = $("<div>").append(
                        $("<div>").addClass("boxTradIndTop").html("<strong>Euro/USD FX</strong><i class=\"icon icon-arrow_trading_right\"></i>" + grLink.attr("data-graph-name")),
                        $("<div>").addClass("boxTradIndMiddle").html("<img src=\"/WB/fe/img/trading_chart_bg.png\" alt=\"Sfondo grafico trading\">"),
                        $("<div>").addClass("boxTradIndBottom").html("<strong>Stato</strong><i class=\"icon icon-arrow_trading_right\"></i>aperto")
                    );

                    grFunWrapper.find(".boxTradInd").empty().removeClass("loading").append(graphEl);

                    // Se necessario scrolla fino al titolo
                    if ($(window).width() <= 767) {
                        $("html, body").animate({
                            scrollTop: grLink.offset().top - 75
                        }, 500);
                    }
                }).eq(0).trigger("click");
            });
        </script>
        <section>
            <div class="navContSecondLev" id="tradingInfo">
                <div class=" outerTab">
                    <ul class="tabWrapper tabsmall hidden-xs">
                        <li class=""><a href="#heading1b">Indici</a></li>
                        <li class=""><a href="#heading2b">Futures</a></li>
                        <li class=""><a href="#heading3b">Watchlist</a></li>
                        <li class=""><a href="#heading4b">Cambi</a></li>
                        <li class=""><a href="#heading5b">News</a></li>
                    </ul>
                </div>
                <div class="separator"></div>
                <div class="panel-group panel-fill" id="tradingInfoContent" role="tablist">
                    <div class="panel panel-default">
                        <div class="panel-heading visible-xs" role="tab" id="heading1b">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse1b" aria-expanded="false"
                                   aria-controls="collapse1b" class="collapsed">Indici<i class="icon icon-arrow_down"></i><i
                                            class="icon icon-arrow_up"></i></a>
                            </h4></div>
                        <div id="collapse1b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1b">
                            <div class="panel-body">
                                <div class="tab-wrap">
                                    <div class="wrapTradInd">
                                        <div class="wrapTabTradInd">
                                            <table class="tabTradInd">
                                                <thead>
                                                    <tr>
                                                        <th class="left">Mercati</th>
                                                        <th class="right val">Valore&nbsp;&euro;</th>
                                                        <th class="right trend" colspan="2">Tendenza&nbsp;%</th>
                                                        <th class="center">Grafico</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="dispari">
                                                        <td class="left"><a href="">FTSE MIB</a></td>
                                                        <td class="right">22.583,66</td>
                                                        <td class="center"><i class="icon icon-1x icon-trend_up"></i></td>
                                                        <td class="right"><span class="posi">0,91</span></td>
                                                        <td class="center"><a class="no-underline btn-icon" data-graph="AA3123"
                                                                              data-graph-name="FTSE MIB"><span
                                                                        class="glyph glyph-arrow_trading_fill glyph-mini"
                                                                        title="glyph-arrow_trading_fill"></span><span
                                                                        class="glyph glyph-arrow_trading_line glyph-mini"
                                                                        title="glyph-arrow_trading_fill"></span></a></td>
                                                    </tr>
                                                    <tr class="pari">
                                                        <td class="left"><a href="">FTSE Italia All Share</a></td>
                                                        <td class="right">24.952,71</td>
                                                        <td class="center"><i class="icon icon-1x icon-trend_up"></i></td>
                                                        <td class="right"><span class="posi">0,77</span></td>
                                                        <td class="center"><a href="javascript:" class="no-underline btn-icon" data-graph="AA3123"
                                                                              data-graph-name="FTSE Italia All Share"><span
                                                                        class="glyph glyph-arrow_trading_fill glyph-mini"></span><span
                                                                        class="glyph glyph-arrow_trading_line glyph-mini"
                                                                        title="glyph-arrow_trading_fill"></span></a></td>
                                                    </tr>
                                                    <tr class="dispari">
                                                        <td class="left"><a href="">FTSE Italia Star</a></td>
                                                        <td class="right">37.681,97</td>
                                                        <td class="center"><i class="icon icon-1x icon-trend_down"></i></td>
                                                        <td class="right"><span class="nega">-0,23</span></td>
                                                        <td class="center"><a href="javascript:" class="no-underline btn-icon" data-graph="AA3123"
                                                                              data-graph-name="FTSE Italia Star"><span
                                                                        class="glyph glyph-arrow_trading_fill glyph-mini"></span><span
                                                                        class="glyph glyph-arrow_trading_line glyph-mini"
                                                                        title="glyph-arrow_trading_fill"></span></a></td>
                                                    </tr>
                                                    <tr class="pari">
                                                        <td class="left"><a href="">DOW JONES</a></td>
                                                        <td class="right">23.461,34</td>
                                                        <td class="center"><i class="icon icon-1x icon-trend_up"></i></td>
                                                        <td class="right"><span class="posi">0,81</span></td>
                                                        <td class="center"><a href="javascript:" class="no-underline btn-icon" data-graph="AA3123"
                                                                              data-graph-name="DOW JONES"><span
                                                                        class="glyph glyph-arrow_trading_fill glyph-mini"></span><span
                                                                        class="glyph glyph-arrow_trading_line glyph-mini"
                                                                        title="glyph-arrow_trading_fill"></span></a></td>
                                                    </tr>
                                                    <tr class="dispari">
                                                        <td class="left"><a href="">NASDAQ 100</a></td>
                                                        <td class="right">6.068,36</td>
                                                        <td class="center"><i class="icon icon-1x icon-trend_np"></i></td>
                                                        <td class="right">0,00</td>
                                                        <td class="center"><a href="javascript:" class="no-underline btn-icon" data-graph="AA3123"
                                                                              data-graph-name="NASDAQ 100"><span
                                                                        class="glyph glyph-arrow_trading_fill glyph-mini"
                                                                        title="glyph-arrow_trading_fill"></span><span
                                                                        class="glyph glyph-arrow_trading_line glyph-mini"
                                                                        title="glyph-arrow_trading_fill"></span></a></td>
                                                    </tr>
                                                    <tr class="pari">
                                                        <td class="left"><a href="">FTSE 100</a></td>
                                                        <td class="right">7.521,56</td>
                                                        <td class="center"><i class="icon icon-1x icon-trend_down"></i></td>
                                                        <td class="right"><span class="nega">-0,04</span></td>
                                                        <td class="center"><a href="javascript:" class="no-underline btn-icon" data-graph="AA3123"
                                                                              data-graph-name="FTSE 100"><span
                                                                        class="glyph glyph-arrow_trading_fill glyph-mini"></span><span
                                                                        class="glyph glyph-arrow_trading_line glyph-mini"
                                                                        title="glyph-arrow_trading_fill"></span></a></td>
                                                    </tr>
                                                    <tr class="dispari">
                                                        <td class="left"><a href="">IBEX 35</a></td>
                                                        <td class="right">10.184,5</td>
                                                        <td class="center"><i class="icon icon-1x icon-trend_up"></i></td>
                                                        <td class="right"><span class="posi">0,23</span></td>
                                                        <td class="center"><a href="javascript:" class="no-underline btn-icon" data-graph="AA3123"
                                                                              data-graph-name="IBEX 35"><span
                                                                        class="glyph glyph-arrow_trading_fill glyph-mini"></span><span
                                                                        class="glyph glyph-arrow_trading_line glyph-mini"
                                                                        title="glyph-arrow_trading_fill"></span></a></td>
                                                    </tr>
                                                    <tr class="pari">
                                                        <td class="left"><a href="">AEX</a></td>
                                                        <td class="right">544,91</td>
                                                        <td class="center"><i class="icon icon-1x icon-trend_down"></i></td>
                                                        <td class="right"><span class="nega">-0,19</span></td>
                                                        <td class="center"><a href="javascript:" class="no-underline btn-icon" data-graph="AA3123"
                                                                              data-graph-name="AEX"><span
                                                                        class="glyph glyph-arrow_trading_fill glyph-mini"></span><span
                                                                        class="glyph glyph-arrow_trading_line glyph-mini"
                                                                        title="glyph-arrow_trading_fill"></span></a></td>
                                                    </tr>
                                                    <tr class="dispari">
                                                        <td class="left"><a href="">SDAX 30</a></td>
                                                        <td class="right">13.016,82</td>
                                                        <td class="center"><i class="icon icon-1x icon-trend_up"></i></td>
                                                        <td class="right"><span class="posi">0,11</span></td>
                                                        <td class="center"><a href="javascript:" class="no-underline btn-icon" data-graph="AA3123"
                                                                              data-graph-name="DAX 30"><span
                                                                        class="glyph glyph-arrow_trading_fill glyph-mini"></span><span
                                                                        class="glyph glyph-arrow_trading_line glyph-mini"
                                                                        title="glyph-arrow_trading_fill"></span></a></td>
                                                    </tr>
                                                    <tr class="pari">
                                                        <td class="left"><a href="">NIKKEI</a></td>
                                                        <td class="right">21.691,14</td>
                                                        <td class="center"><i class="icon icon-1x icon-sp_rifiutata"></i></td>
                                                        <td class="right">n.d.</td>
                                                        <td class="center"><a href="javascript:" class="no-underline btn-icon" data-graph="AA3123"
                                                                              data-graph-name="NIKKEI"><span
                                                                        class="glyph glyph-arrow_trading_fill glyph-mini"></span><span
                                                                        class="glyph glyph-arrow_trading_line glyph-mini"
                                                                        title="glyph-arrow_trading_fill"></span></a></td>
                                                    </tr>
                                                    <tr class="dispari">
                                                        <td class="left"><a href="">PSI20</a></td>
                                                        <td class="right">5.414,77</td>
                                                        <td class="center"><i class="icon icon-1x icon-trend_down"></i></td>
                                                        <td class="right"><span class="nega">-0,4</span></td>
                                                        <td class="center"><a href="javascript:" class="no-underline btn-icon" data-graph="AA3123"
                                                                              data-graph-name="PSI20"><span
                                                                        class="glyph glyph-arrow_trading_fill glyph-mini"></span><span
                                                                        class="glyph glyph-arrow_trading_line glyph-mini"
                                                                        title="glyph-arrow_trading_fill"></span></a></td>
                                                    </tr>
                                                    <tr class="pari">
                                                        <td class="left"><!-- esempio voce senza link -->S&amp;P 500</td>
                                                        <td class="right">2.569,87</td>
                                                        <td class="center"><i class="icon icon-1x icon-trend_up"></i></td>
                                                        <td class="right"><span class="posi">0,19</span></td>
                                                        <td class="center"><a href="javascript:" class="no-underline btn-icon" data-graph="AA3123"
                                                                              data-graph-name="S&amp;P 500"><span
                                                                        class="glyph glyph-arrow_trading_fill glyph-mini"></span><span
                                                                        class="glyph glyph-arrow_trading_line glyph-mini"
                                                                        title="glyph-arrow_trading_fill"></span></a></td>
                                                    </tr>
                                                    <tr class="dispari">
                                                        <td class="left"><!-- esempio voce senza link -->Euro Stoxx 50</td>
                                                        <td class="right">3.611,38</td>
                                                        <td class="center"><i class="icon icon-1x icon-trend_up"></i></td>
                                                        <td class="right"><span class="posi">0,07</span></td>
                                                        <td class="center"><a href="javascript:" class="no-underline btn-icon" data-graph="AA3123"
                                                                              data-graph-name="Euro Stoxx 50"><span
                                                                        class="glyph glyph-arrow_trading_fill glyph-mini"></span><span
                                                                        class="glyph glyph-arrow_trading_line glyph-mini"
                                                                        title="glyph-arrow_trading_fill"></span></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="legend" colspan="5">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <i class="icon icon-1x icon-trend_up"></i>Rialzo
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <i class="icon icon-1x icon-trend_down"></i>Ribasso
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <i class="icon icon-1x icon-trend_np"></i>Invariato
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <i class="icon icon-1x icon-sp_rifiutata"></i>Chiuso
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="boxTradInd hidden-xs">
                                            <div class="boxTradIndTop"><strong>Euro/USD FX</strong><i class="icon icon-arrow_trading_right"></i><a
                                                        href="javascript:">FTSE MIB</a></div>
                                            <div class="boxTradIndMiddle"><!-- SPAZIO PER IL GRAFICO ESTERNO --><img
                                                        src="/WB/fe/img/trading_chart_bg.png" alt="Sfondo grafico trading"/>
                                                <!-- FINE SPAZIO PER IL GRAFICO ESTERNO --></div>
                                            <div class="boxTradIndBottom"><strong>Stato</strong><i class="icon icon-arrow_trading_right"></i>aperto
                                            </div>
                                        </div>
                                    </div>
                                    <p class="note bottom">(*) Quotazioni mercati esteri ritardate di 15 min. ( 20 min. Nyse, Nikkei e FTSE) se non
                                        hai sottoscritto le quotazioni in tempo reale.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading visible-xs" role="tab" id="heading2b">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse2b" aria-expanded="false"
                                   aria-controls="collapse2b" class="collapsed">Futures<i class="icon icon-arrow_down"></i><i
                                            class="icon icon-arrow_up"></i></a>
                            </h4></div>
                        <div id="collapse2b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2b">
                            <div class="panel-body">
								<?php virtual("./tpl_priv_fp_trading_table_futures.php"); ?> </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading visible-xs" role="tab" id="heading3b">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse3b" aria-expanded="false"
                                   aria-controls="collapse3b" class="collapsed">Watchlist<i class="icon icon-arrow_down"></i><i
                                            class="icon icon-arrow_up"></i></a>
                            </h4></div>
                        <div id="collapse3b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3b">
                            <div class="panel-body">
                                <section class="boxesitoWrap">
                                    <div class="boxesito attenzione">
                                        <div class="text">
                                            <p>Non sono presenti titoli in questa Watchlist. Aggiungi ora quelli che vuoi monitorare.</p>
                                        </div>
                                    </div>
                                </section>
								<?php virtual("./tpl_priv_fp_trading_table_watchlist.php"); ?>
                                <div id="watchlistBtns" class="form-group btnWrapper">
                                    <div class="btn-align-right"><a type="button" class="btn btn-primary" id="">Modifica</a> <a type="button"
                                                                                                                                class="btn btn-primary"
                                                                                                                                id="">Dettagli e altre
                                            watchlist</a></div>
                                    <br class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading visible-xs" role="tab" id="heading4b">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse4b" aria-expanded="false"
                                   aria-controls="collapse4b" class="collapsed">Cambi<i class="icon icon-arrow_down"></i><i
                                            class="icon icon-arrow_up"></i></a>
                            </h4></div>
                        <div id="collapse4b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4b">
                            <div class="panel-body">
                                <div class="tab-wrap">
                                    <section class="boxesitoWrap">
                                        <div class="boxesito negativo">
                                            <div class="text">
                                                <h3>Si &egrave; verificato un errore</h3>
                                                <p>Impossibile mostrare i dati. Ti preghiamo di riprovare pi&ugrave; tardi.</p>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="wrapTradChange">
                                        <p class="note">Quotazioni valute del 18/10/2017</p>
                                        <table class="tabTradCambi">
                                            <thead>
                                                <tr>
                                                    <th class="left">Valuta</th>
                                                    <th class="right">Tasso</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="dispari">
                                                    <td class="left">Euro/Dollaro</td>
                                                    <td class="right">1,1694</td>
                                                </tr>
                                                <tr class="pari">
                                                    <td class="left">Euro/Sterlina</td>
                                                    <td class="right">0,894</td>
                                                </tr>
                                                <tr class="dispari">
                                                    <td class="left">Euro/Franco svizzero</td>
                                                    <td class="right">1,1063</td>
                                                </tr>
                                                <tr class="pari">
                                                    <td class="left">Euro/Franco svizzero</td>
                                                    <td class="right">1,1063</td>
                                                </tr>
                                                <tr class="dispari">
                                                    <td class="left">Euro/Yen</td>
                                                    <td class="right">130,28</td>
                                                </tr>
                                                <tr class="pari">
                                                    <td class="left">Euro/Dollaro Australiano</td>
                                                    <td class="right">1,4693</td>
                                                </tr>
                                                <tr class="dispari">
                                                    <td class="left">Euro/Dollaro Canadese</td>
                                                    <td class="right">1,4608</td>
                                                </tr>
                                                <tr class="pari">
                                                    <td class="left">Euro/Fiorino Ungherese</td>
                                                    <td class="right">305,49</td>
                                                </tr>
                                                <tr class="dispari">
                                                    <td class="left">Euro/Corona Norvegese</td>
                                                    <td class="right">9,3035</td>
                                                </tr>
                                                <tr class="pari">
                                                    <td class="left">Euro/Dollaro Neozelandese</td>
                                                    <td class="right">1,5712</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading visible-xs" role="tab" id="heading5b">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse5b" aria-expanded="false"
                                   aria-controls="collapse5b" class="collapsed">News<i class="icon icon-arrow_down"></i><i
                                            class="icon icon-arrow_up"></i></a>
                            </h4></div>
                        <div id="collapse5b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5b">
                            <div class="panel-body">
                                <div class="tab-wrap">
                                    <div class="navContSecondLev" id="tradingNewsTab">
                                        <div class=" outerTab">
                                            <ul class="tabWrapper tabflex hidden-xs">
                                                <li class=""><a href="#heading51b">Notizie intraday</a></li>
                                                <li class=""><a href="#heading52b">Notizie di analisi tecnica e fondamentale</a></li>
                                            </ul>
                                        </div>
                                        <div class="separator"></div>
                                        <div class="panel-group panel-fill sub-panel" id="accordion2" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading visible-xs" role="tab" id="heading51b">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse51b" aria-expanded="false"
                                                           aria-controls="collapse1b" class="collapsed">Notizie intradat<i
                                                                    class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
                                                    </h4></div>
                                                <div id="collapse51b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading51b">
                                                    <div class="panel-body">
                                                        <div class="tab-wrap">
                                                            <div class="tradingNewsBox">
                                                                <div class="tradingNewsDate"> 27/11/2017 - 10:44</div>
                                                                <a class="tradingNewsLink" href="javascript:">Piazza Affari festeggia l'accordo
                                                                    Londra-Ue, bene Unicredit</a></div>
                                                            <div class="tradingNewsBox">
                                                                <div class="tradingNewsDate"> 27/11/2017 - 11:44</div>
                                                                <a class="tradingNewsLink" href="javascript:">The Telegraph: Accordo su Brexit a 45-55
                                                                    miliardi</a></div>
                                                            <div class="tradingNewsBox">
                                                                <div class="tradingNewsDate"> 27/11/2017 - 11:46</div>
                                                                <a class="tradingNewsLink" href="javascript:">Bper, patrimonio oltre il livello minimo
                                                                    chiesto dalla Bce</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading visible-xs" role="tab" id="heading52b">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse52b" aria-expanded="false"
                                                           aria-controls="collapse2b" class="collapsed">Notizie di analisi tecnica e fondamentale<i
                                                                    class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
                                                    </h4></div>
                                                <div id="collapse52b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading52b">
                                                    <div class="panel-body">
                                                        <div class="tab-wrap">
                                                            <div class="tradingNewsBox">
                                                                <div class="tradingNewsDate"> 27/11/2017 - 10:44</div>
                                                                <a class="tradingNewsLink" href="javascript:">Piazza Affari festeggia l'accordo
                                                                    Londra-Ue, bene Unicredit</a></div>
                                                            <div class="tradingNewsBox">
                                                                <div class="tradingNewsDate"> 27/11/2017 - 11:44</div>
                                                                <a class="tradingNewsLink" href="javascript:">The Telegraph: Accordo su Brexit a 45-55
                                                                    miliardi</a></div>
                                                            <div class="tradingNewsBox">
                                                                <div class="tradingNewsDate"> 27/11/2017 - 11:46</div>
                                                                <a class="tradingNewsLink" href="javascript:">Bper, patrimonio oltre il livello minimo
                                                                    chiesto dalla Bce</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        //inizializzazione dei tab-accordion
                                        //TRASFORMA IL TAB DI CONTENUTO IN ACCORDION SU MOBILE
                                        //possono coesistere più gruppo di tab/accordion in pagina
                                        //parametri: id contenitore e incice tab ch edeve essere aperto al load
                                        $(function () {
                                            resizeTab('tradingNewsTab', 0);
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                //inizializzazione dei tab-accordion
                //TRASFORMA IL TAB DI CONTENUTO IN ACCORDION SU MOBILE
                //possono coesistere più gruppo di tab/accordion in pagina
                //parametri: id contenitore e incice tab ch edeve essere aperto al load
                $(function () {
                    resizeTab('tradingInfo', 0);
                });
            </script>
        </section>
        <!-- FINE | NEWS TRADING -->

        <script>
            var chartData = [{
                "category": "Azioni Italia",
                "value": 10
            }, {
                "category": "Azioni estere",
                "value": 50
            }, {
                "category": "Obbligazioni",
                "value": 100
            }, {
                "category": "Derivati",
                "value": 500
            }, {
                "category": "Covered warrant / Certificates",
                "value": 1000
            }, {
                "category": "ETF",
                "value": 5000
            }, {
                "category": "Marginazione",
                "value": 10000
            }];

            
            /*
            Esempio caso senza dati (se occorre, inserire classe "empty" su "chartwrap")
            */
            /*
            var chartData = [{
                "category": "Azioni Italia",
                "value": 0
            }, {
                "category": "Azioni estere",
                "value": 0
            }, {
                "category": "Obbligazioni",
                "value": 0
            }, {
                "category": "Derivati",
                "value": 0
            }, {
                "category": "Covered warrant / Certificates",
                "value": 0
            }, {
                "category": "ETF",
                "value": 0
            }, {
                "category": "Marginazione",
                "value": 0
            }];
            */
           

        </script>
        <script type="text/javascript" src="/common/fe/assets/amcharts/amcharts.js"></script>
        <script type="text/javascript" src="/common/fe/assets/amcharts/pie.js"></script>
        <script type="text/javascript" src="/WB/fe/js/fp_trading.js"></script>

        <!--overlayer tabella saldi -->
        <div class="modal fade" id="layerDettSaldi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header"><a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i
                                    class="icon icon-alert_error_fill icon-2x"></i></a>
                        <h2 class="modal-title" id="myModalLabel">Saldo</h2></div>
                    <div class="modal-body">
                        <section>
                            <p>In questa pagina &egrave; mostrato il calcolo del <strong>saldo disponibile</strong> del tuo conto corrente.</p>
                            <p>Rispetto al saldo contabile, il saldo disponibile tiene conto dell'eventuale <strong>fido</strong> e di <strong>operazioni</strong>
                                di banking, trading e investimenti effettuate, <strong>ma non ancora contabilizzate.</strong></p>
                        </section>
                        <section>
                            <h3>Conto CC 01099 0000049199 EUR<br> Intestato a IOLE TOLVE</h3>
                            <table id="saldoContTable">
                                <tbody>
                                    <tr class="total">
                                        <td class="left fix3Col"><strong>Saldo Contabile</strong></td>
                                        <td class="center bgkWhite"><strong>&euro; 4.213,46</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table id="table1" class="fixed">
                                <thead>
                                    <tr>
                                        <th class="left fix3Col bgkWhite brdWhite" data-field="primo">&nbsp;</th>
                                        <th class="center" data-field="secondo">al 01/07/2016</th>
                                        <th class="center" data-field="terzo">al 01/07/2016</th>
                                        <th class="center" data-field="quarto">al 01/07/2016</th>
                                        <th class="right" data-field="quinto">al 01/07/2016</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="total">
                                        <td class="left"><span class="txthelp"><strong class="closeable"
                                                                                       data-title="Per &quot;movimenti non contabilizzati &quot; si intendono le operazioni in accredito (&lt;strong>preavvisi&lt;/strong&gt;) o in addebito (&lt;strong&gt;impegni&lt;/strong&gt;) già effettuate sul conto, ma non ancora registrate."
                                                                                       data-toggle="tooltip">Movimenti non contabilizzati</strong></span>
                                        </td>
                                        <td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
                                        <td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
                                        <td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
                                        <td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
                                    </tr>
                                    <tr class="total merged">
                                        <td class="right"><strong>Totale impegni banking</strong></td>
                                        <td class="bgkWhite center posi">&euro; 0,00</td>
                                        <td class="bgkWhite"></td>
                                        <td class="bgkWhite"></td>
                                        <td class="bgkWhite"></td>
                                    </tr>
                                    <tr class="merged">
                                        <td class="right text-small">operazioni sul sito</td>
                                        <td class="bgkWhite center posi">&euro; 0,00</td>
                                        <td class="bgkWhite"></td>
                                        <td class="bgkWhite"></td>
                                        <td class="bgkWhite"></td>
                                    </tr>
                                    <tr class="merged">
                                        <td class="right text-small">operazioni con la carta di debito</td>
                                        <td class="bgkWhite center posi">&euro; 0,00</td>
                                        <td class="bgkWhite"></td>
                                        <td class="bgkWhite"></td>
                                        <td class="bgkWhite"></td>
                                    </tr>
                                    <tr class="merged">
                                        <td class="right text-small"><span class="txthelp closeable"
                                                                           data-title="Nelle &quot;altre operazioni&quot; sono comprese, in particolare:&lt;ul&gt;&lt;li&gt;operazioni presso agenzie territoriali&lt;/li&gt;&lt;li&gt;operazioni tramite lo &quot;Sportello telefonico&quot;&lt;/li&gt;&lt;li&gt;operazioni tramite sportelli Self Service BPM&lt;/li&gt;&lt;/ul&gt;"
                                                                           data-toggle="tooltip">altre operazioni</span></td>
                                        <td class="bgkWhite center posi">&euro; 0,00</td>
                                        <td class="bgkWhite"></td>
                                        <td class="bgkWhite"></td>
                                        <td class="bgkWhite"></td>
                                    </tr>
                                    <tr class="total merged">
                                        <td class="right"><span class="txthelp closeable"
                                                                data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in &lt;strong&gt;impegni&lt;/strong&gt; e &lt;strong&gt;preavvisi&lt;/strong&gt;.&lt;br&gt;&lt;ul&gt;&lt;li&gt;Gli &lt;strong&gt;impegni&lt;/strong&gt; sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.&lt;/li&gt;&lt;li&gt;I &lt;strong&gt;preavvisi&lt;/strong&gt; sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.&lt;/li&gt;&lt;/ul&gt;"
                                                                data-toggle="tooltip"><strong>Totale impegni trading</strong></span></td>
                                        <td class="bgkWhite center posi">&euro; 0,00</td>
                                        <td class="bgkWhite"></td>
                                        <td class="bgkWhite"></td>
                                        <td class="bgkWhite"></td>
                                    </tr>
                                    <tr class="merged">
                                        <td class="right text-small">liquidit&agrave; impegnata per ordini immessi e non ancora eseguiti</td>
                                        <td class="bgkWhite center nega">&euro; 0,00</td>
                                        <td class="bgkWhite"></td>
                                        <td class="bgkWhite"></td>
                                        <td class="bgkWhite"></td>
                                    </tr>
                                    <tr class="merged">
                                        <td class="right text-small">liquidit&agrave; impegnata per margine di garanzia overnight</td>
                                        <td class="bgkWhite center nega">&euro; 0,00</td>
                                        <td class="bgkWhite"></td>
                                        <td class="bgkWhite"></td>
                                        <td class="bgkWhite"></td>
                                    </tr>
                                    <tr class="merged">
                                        <td class="right text-small">P&amp;L potenziale impegnato per margine di garanzia overnight</td>
                                        <td class="bgkWhite center nega">&euro; 0,00</td>
                                        <td class="bgkWhite"></td>
                                        <td class="bgkWhite"></td>
                                        <td class="bgkWhite"></td>
                                    </tr>
                                    <tr class="merged">
                                        <td class="right text-small"><span class="txthelp closeable" data-title="&gt;" data-toggle="tooltip">liquidit&agrave; impegnata per operativit&agrave; intraday</span>
                                        </td>
                                        <td class="bgkWhite center nega">&euro; 0,00</td>
                                        <td class="bgkWhite"></td>
                                        <td class="bgkWhite"></td>
                                        <td class="bgkWhite"></td>
                                    </tr>
                                    <tr>
                                        <td class="right text-small">Compravendita/acquisto</td>
                                        <td class="bgkWhite right nega">&euro; 0,00</td>
                                        <td class="bgkWhite right nega">&euro; 0,00</td>
                                        <td class="bgkWhite right nega">&euro; 0,00</td>
                                        <td class="bgkWhite right nega">&euro; 0,00</td>
                                    </tr>
                                    <tr class="total">
                                        <td class="right"><span class="txthelp closeable" data-toggle="tooltip"
                                                                data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in &lt;strong&gt;impegni&lt;/strong&gt; e &lt;strong&gt;preavvisi&lt;/strong&gt;.&lt;br&gt;&lt;ul&gt;&lt;li&gt;Gli &lt;strong&gt;impegni&lt;/strong&gt; sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.&lt;/li&gt;&lt;li&gt;I &lt;strong&gt;preavvisi&lt;/strong&gt; sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.&lt;/li&gt;&lt;/ul&gt;"><strong>Totale preavvisi trading</strong></span>
                                        </td>
                                        <td class="bgkWhite right posi">&euro; 0,00</td>
                                        <td class="bgkWhite right posi">&euro; 0,00</td>
                                        <td class="bgkWhite right posi">&euro; 0,00</td>
                                        <td class="bgkWhite right posi">&euro; 0,00</td>
                                    </tr>
                                    <tr>
                                        <td class="right text-small">Compravendita/acquisto</td>
                                        <td class="bgkWhite right posi">&euro; 0,00</td>
                                        <td class="bgkWhite right posi">&euro; 0,00</td>
                                        <td class="bgkWhite right posi">&euro; 0,00</td>
                                        <td class="bgkWhite right posi">&euro; 0,00</td>
                                    </tr>
                                    <tr class="total merged">
                                        <td class="right"><span class="txthelp closeable" data-toggle="tooltip"
                                                                data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in &lt;strong&gt;impegni&lt;/strong&gt; e &lt;strong&gt;preavvisi&lt;/strong&gt;.&lt;br&gt;&lt;ul&gt;&lt;li&gt;Gli &lt;strong&gt;impegni&lt;/strong&gt; sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.&lt;/li&gt;&lt;li&gt;I &lt;strong&gt;preavvisi&lt;/strong&gt; sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.&lt;/li&gt;&lt;/ul&gt;"><strong>Totale impegni fondi</strong></span>
                                        </td>
                                        <td class="bgkWhite center posi">&euro; 0,00</td>
                                        <td class="bgkWhite right posi"></td>
                                        <td class="bgkWhite right posi"></td>
                                        <td class="bgkWhite right posi"></td>
                                    </tr>
                                    <tr class="total merged">
                                        <td class="right"><span class="txthelp closeable" data-toggle="tooltip"
                                                                data-title="Le operazioni non contabilizzate di trading e investimenti sono distinte in &lt;strong&gt;impegni&lt;/strong&gt; e &lt;strong&gt;preavvisi&lt;/strong&gt;.&lt;br&gt;&lt;ul&gt;&lt;li&gt;Gli &lt;strong&gt;impegni&lt;/strong&gt; sono movimenti in addebito (es. ordini di acquisto di titoli) e incidono sul saldo disponibile già al momento dell’inserimento online dell’ordine.&lt;/li&gt;&lt;li&gt;I &lt;strong&gt;preavvisi&lt;/strong&gt; sono movimenti in accredito (es. ordini di vendita di titoli) e incidono sul saldo disponibile soltanto al momento delle loro contabilizzazione effettiva.&lt;/li&gt;&lt;/ul&gt;"><strong>Totale preavvisi fondi</strong></span>
                                        </td>
                                        <td class="bgkWhite center posi">&euro; 0,00</td>
                                        <td class="bgkWhite right posi"></td>
                                        <td class="bgkWhite right posi"></td>
                                        <td class="bgkWhite right posi"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table id="table2" class="fixed">
                                <thead>
                                    <tr>
                                        <th class="left fix3Col bgkWhite brdWhite" data-field="primo">&nbsp;</th>
                                        <th class="center" data-field="secondo">al 01/07/2016</th>
                                        <th class="center" data-field="terzo">al 01/07/2016</th>
                                        <th class="center" data-field="quarto">al 01/07/2016</th>
                                        <th class="right" data-field="quinto">al 01/07/2016</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="total">
                                        <td class="left"><strong>Saldo disponibile</strong></td>
                                        <td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
                                        <td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
                                        <td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
                                        <td class="right bgkWhite"><strong>&euro; 0,00</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4>Operativit&agrave; overnight</h4>
                            <table id="">
                                <tbody>
                                    <tr class="total">
                                        <td class="left fix3Col"><strong>Liquidit&agrave; impegnata per vendita short</strong></td>
                                        <td class="center bgkWhite"><strong>&euro; 4.213,46</strong></td>
                                    </tr>
                                    <tr class="total">
                                        <td class="left fix3Col"><strong>Importo accreditato per operativit&agrave; long overnight</strong></td>
                                        <td class="center bgkWhite"><strong>&euro; 4.213,46</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!--overlayer risultati -->
        <div class="modal fade slide-right" id="risulatiTitoli" tabindex="-1" role="dialog" aria-labelledby="risulatiTitoli">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header"><a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i
                                    class="icon icon-alert_error_fill icon-2x"></i></a>
                        <h2 class="modal-title" id="risulatiTitoli">Risultati della ricerca</h2></div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12">
                                    <section>
                                        <table id="tableRicercaTitoli" class="formGenerico">
                                            <thead>
                                                <tr>
                                                    <th class="center" data-field="radio" data-formatter="setRadioRicerca"></th>
                                                    <th data-field="descrizione" class="left">Descrizione</th>
                                                    <th data-field="isin">Codice ISIN</th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <div class="form-group btnWrapper">
                                            <div class="btn-align-right"><a type="button" class="btn btn-primary" id="" href="javascript:"
                                                                            onclick="unObscurateElement('#fieldsInsOrd');$('#ultimoPrezzoInfo,#tableTit').show()"
                                                                            data-dismiss="modal" role="button" title="Conferma ricerca">conferma</a>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<?php } ?>
</div>