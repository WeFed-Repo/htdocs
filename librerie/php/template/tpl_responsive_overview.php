<h2>Overview</h2>

<!-- Sezione iniziale -->
    <div class="slider-section loading">

        <button class="slider-button btn btn-primary" onclick="$('.slider-button').removeClass('btn-primary');$(this).addClass('btn-primary');$('.slide').removeClass('slide-active');$('.slide-01').addClass('slide-active')">WORLD MAP</button>
        <button class="slider-button btn" onclick="$('.slider-button').removeClass('btn-primary');$(this).addClass('btn-primary');$('.slide').removeClass('slide-active');$('.slide-02').addClass('slide-active')">GRAFICI COMPARATIVI</button>

        <div class="slider-map-graph">
            <div class="slide slide-01 slide-active">
                <div class="map-container">
                    <img class="map-bkg" src="/fe/img/trading_world_map.png" />
                    <div class="map-pin" id="mrk_dowjones" data-mrk="DOW JONES">
                        <div class="map-tooltip is-positivo">
                            <span class="map-tooltip--title">DowJones</span>
                            <span class="map-tooltip--perc"></span>
                            <span class="map-tooltip--value"></span>
                        </div>
                    </div>
                    <div class="map-pin" id="mrk_nasdaq" data-mrk="NASDAQ 100">
                        <div class="map-tooltip pos-bottom is-positivo">
                            <span class="map-tooltip--title"> Nasdaq 100</span>
                            <span class="map-tooltip--perc"></span>
                            <span class="map-tooltip--value"></span>
                        </div>
                    </div>
                    <div class="map-pin" id="mrk_ftse" data-mrk="FTSE">
                        <div class="map-tooltip is-negativo">
                            <span class="map-tooltip--title">Ftse 100</span>
                            <span class="map-tooltip--perc"></span>
                            <span class="map-tooltip--value"></span>
                        </div>
                    </div>
                    <div class="map-pin" id="mrk_cac" data-mrk="CAC 40">
                        <div class="map-tooltip pos-bottom is-negativo">
                            <span class="map-tooltip--title">Cac40</span>
                            <span class="map-tooltip--perc"></span>
                            <span class="map-tooltip--value"></span>
                        </div>
                    </div>
                    <div class="map-pin" id="mrk_ftsemib" data-mrk="MIB">
                        <div class="map-tooltip pos-bottom pos-right is-positivo">
                            <span class="map-tooltip--title">Ftse Mib</span>
                            <span class="map-tooltip--perc"></span>
                            <span class="map-tooltip--value"></span>
                        </div>
                    </div>
                    <div class="map-pin" id="mrk_dax" data-mrk="DAX 30">
                        <div class="map-tooltip pos-right is-negativo">
                            <span class="map-tooltip--title">Dax</span>
                            <span class="map-tooltip--perc"></span>
                            <span class="map-tooltip--value"></span>
                        </div>
                    </div>
                    <div class="map-pin" id="mrk_nikkei" data-mrk="NIKKEI">
                        <div class="map-tooltip is-negativo">
                            <span class="map-tooltip--title">Nikkei</span>
                            <span class="map-tooltip--perc"></span>
                            <span class="map-tooltip--value"></span>
                        </div>
                    </div>
                </div>

                <!-- SLIDER -->
                <form id="mapTimelineWrapper" class="formGenerico preventivatore" role="form">
                    <div class="form-group">
                      <div id="mapTimeline" class="slider-box sliderWithTicks">
                            <div class="slider-wrap">
                                <div class="slider-trail trail-bg">
                                    <div class="ui-slider-handle">
                                        <div class="slider-cursor"></div>
                                        <!--div class="sliderText"></div-->
                                    </div>
                                </div>
                        <div class="sliderTicks sliderTicksHighlight"></div>
                            </div>
                      </div>
                      <select class="form-control slider-alt"></select>
                    </div>
                </form>

                <script>
                  var milestones, mapdata;
                  $(function () {
                    var mapvector = false,
                        opt = [
                            { name: 'Ultimi 12 mesi', },
                            { name: 'Ultimi 6 mesi', },
                            { name: 'Ultimi 3 mesi', },
                            { name: 'Ultima settimana', },
                            { name: new Date(Date.now()).toLocaleDateString('it-IT', {year: '2-digit', month: '2-digit', day: '2-digit' }), /* TODAY */ }
                          ],
                        optCount = (opt.length-1);

                    // chiamata ai calori di mercato
                    $.ajax({
                        url: '/librerie/include/commons/ajax/mercatoindici/azioni.php',
                        success: function(data) {
                          // dati della mappa
                          mapdata = data.mapVector;
                                                    
                          // inizializzaizone slider
                          $("#mapTimeline").sliderPlus({
                            value: optCount,
                            custom: opt,
                            slide: function(e,ui){
                                fillMapTooltips( mapdata[ui.value] );
                            }
                          });
                          fillMapTooltips( mapdata[optCount] );
                          $('.slider-section').removeClass('loading');
                        }
                     });
                  });
                  // Inietta nei tooltips i valori, recuperando il tooltip corretto attaverso il data-mrk
                  function fillMapTooltips( array ){
                    $.map( array, function( val ) {
                      var tooltip = $('[data-mrk="'+val.nome+'"]');
                      var status;
                      if( val.perc[0] == '-' ) {
                        status = 'is-negativo';
                      } else {
                        status = 'is-positivo';
                      }
                      tooltip.find('.map-tooltip')
                        .removeClass('is-negativo')
                        .removeClass('is-positivo')
                        .addClass(status);
                      tooltip.find('.map-tooltip--perc').html(val.perc);
                      tooltip.find('.map-tooltip--value').html(val.val);
                    });
                  }
                </script>
                <!-- SLIDER end -->
            </div>

            <div class="slide slide-02">
                <div class="graph-container">
                    <?php /*
                    <!-- desktop -->
                    <div class="graph-time" id="graph_time">
                        <ul class="time-list">
                            <li class="active"><a href="#graph_time">1 giorno</a></li>
                            <li><a href="javascript:void(0)">1 settimana</a></li>
                            <li><a href="javascript:void(0)">1 mese</a></li>
                            <li><a href="javascript:void(0)">3 mesi</a></li>
                            <li><a href="javascript:void(0)">6 mesi</a></li>
                            <li><a href="javascript:void(0)">1 anno</a></li>
                        </ul>
                    </div>

                    <!-- mobile -->
                    <div class="graph-time" id="graph_time_mobile">
                        <div class="btn-group graph-time-select">
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Periodo:
                                <span class="selected-label">1 giorno</span>
                                <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                                <li class="active"><a href="#graph_time">1 giorno</a></li>
                                <li><a href="javascript:void(0)">1 settimana</a></li>
                                <li><a href="javascript:void(0)">1 mese</a></li>
                                <li><a href="javascript:void(0)">3 mesi</a></li>
                                <li><a href="javascript:void(0)">6 mesi</a></li>
                                <li><a href="javascript:void(0)">1 anno</a></li>
                          </ul>
                        </div>

                    </div>
                    */ ?>

                    <iframe src="http://www.google.com" class="graph-placeholder"></iframe>
                    <div class="graph-legend" id="graph_legend">
                        <ul class="legend-list">
                            <li id="legend_ftsemib"> FTSE MIB (F-MIB) </li>
                            <li id="legend_ftse"> FTSE 100 (F-100) </li>
                            <li id="legend_dax"> DAX 30 (DAX) </li>
                            <li id="legend_dowjones"> DAX 30 (DJ) </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
<!-- Fine della sezione iniziale -->



<!-- Automazioni indicative -->
<script type="text/javascript">
    // Esempio automazione grafici indicativa
    $(function(){

        $(".wrapTradInd *[data-graph]").click(function(){

            var grLink = $(this);
            var grFunWrapper =  grLink.parents(".wrapTradInd");

            // Chiude eventuali spazi mobile aperti (resetta gli stati);
            grFunWrapper.find("tr.grTr").empty().hide();
            grFunWrapper.find(".btn-icon").removeClass("on");
            grLink.addClass("on");
            var graphSpaceMobile;
            if (!grLink.parents("tr").next("tr").hasClass("grTr"))
            {
                grLink.parents("tr").after($("<tr>").addClass("grTr visible-xs"));
            }
            graphSpaceMobile = grLink.parents("tr").next("tr").empty();
            graphSpaceMobile.append($("<td>").attr("colspan",5).append($("<div>").addClass("boxTradInd"))).show();

            // Prepara il div con il grafico e lo appende laddove necessario
                var graphEl = $("<div>").append(
                  $("<div>").addClass("boxTradIndTop").html("<strong>Euro/USD FX</strong><i class=\"icon icon-arrow_trading_right\"></i>"+ grLink.attr("data-graph-name")),
                  $("<div>").addClass("boxTradIndMiddle").html("<img src=\"/wscmn/fe/img/trading_chart_bg.png\" />"),
                  $("<div>").addClass("boxTradIndBottom").html("<strong>Stato</strong><i class=\"icon icon-arrow_trading_right\"></i>aperto")
                );

            var graphSpaces = grFunWrapper.find(".boxTradInd").empty().removeClass("loading").append(graphEl);

            // Se necessario scrolla fino al titolo
            if($(window).width()<=767) {
                $("html, body").animate({
                    scrollTop: grLink.offset().top - 75
                },500);
            }

        }).eq(0).trigger("click");

    });
    </script>
    <!-- Fine automazioni indicative -->

    <section>
        <div class="navContSecondLev" id="tradingInfo">
            <div class=" outerTab">
                <ul class="tabWrapper tabsmall hidden-xs">
                    <li class=""><a href="#heading1b">Indici</a></li>
                    <li class=""><a href="#heading4b">Cambi</a></li>
                    <li class=""><a href="#heading5b">News</a></li>
                </ul>
            </div>
            <div class="separator"></div>
            <div class="panel-group panel-fill" id="tradingInfoContent" role="tablist">
                <div class="panel panel-default">
                    <div class="panel-heading visible-xs" role=" tab"="" id="heading1b">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapse1b" aria-expanded="false" aria-controls="collapse1b" class="collapsed">Indici<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
                        </h4> </div>
                    <div id="collapse1b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1b">
                        <div class="panel-body">
                            <?php virtual("tpl_priv_fp_trading_table_indici.php"); ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading visible-xs" role=" tab"="" id="heading4b">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapse4b" aria-expanded="false" aria-controls="collapse4b" class="collapsed">Cambi<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
                        </h4> </div>
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
                                    <table class="tabTradCambi" cellspacing="0" cellpadding="0" border="0">
                                        <thead>
                                            <tr>
                                                <th class="left">Valuta</th>
                                                <th class="right">Tasso</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="dispari">
                                                <td class="left"><img src="/wscmn/fe/img/ico_flagDoll.png" class="imgFlag"> Euro/Dollaro</td>
                                                <td class="right">1,1694</td>
                                            </tr>
                                            <tr class="pari">
                                                <td class="left"><img src="/wscmn/fe/img/ico_flagSter.png" class="imgFlag"> Euro/Sterlina</td>
                                                <td class="right">0,894</td>
                                            </tr>
                                            <tr class="dispari">
                                                <td class="left"><img src="/wscmn/fe/img/ico_flagSviz.png" class="imgFlag"> Euro/Franco svizzero</td>
                                                <td class="right">1,1063</td>
                                            </tr>
                                            <tr class="dispari">
                                                <td class="left"><img src="/wscmn/fe/img/ico_flagGiap.png" class="imgFlag"> Euro/Yen</td>
                                                <td class="right">130,28</td>
                                            </tr>
                                            <tr class="pari">
                                                <td class="left"><img src="/wscmn/fe/img/ico_flagAust.png" class="imgFlag"> Euro/Dollaro Australiano</td>
                                                <td class="right">1,4693</td>
                                            </tr>
                                            <tr class="dispari">
                                                <td class="left"><img src="/wscmn/fe/img/ico_flagCana.png" class="imgFlag"> Euro/Dollaro Canadese</td>
                                                <td class="right">1,4608</td>
                                            </tr>
											<tr class="pari">
                                                <td class="left"><img src="/wscmn/fe/img/ico_flagNorv.png" class="imgFlag"> Euro/Corona Norvegese</td>
                                                <td class="right">9,3035</td>
                                            </tr>
											<tr class="dispari">
                                                <td class="left"><img src="/wscmn/fe/img/ico_flagNeol.png" class="imgFlag"> Euro/Dollaro Neozelandese</td>
                                                <td class="right">1,5712</td>
                                            </tr>
											<tr class="pari">
                                                <td class="left"><img src="/wscmn/fe/img/ico_flagSvez.png" class="imgFlag"> Euro/Corona Svedese</td>
                                                <td class="right">305,49</td>
                                            </tr>
                                            <tr class="dispari">
                                                <td class="left"><img src="/wscmn/fe/img/ico_flagTurc.png" class="imgFlag"> Euro/Nuova Lira Turca</td>
                                                <td class="right">1,5712</td>
                                            </tr>
											<tr class="pari">
                                                <td class="left"><img src="/wscmn/fe/img/ico_flagSafr.png" class="imgFlag"> Euro/Rand Sudafricano</td>
                                                <td class="right">1,1063</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading visible-xs" role=" tab"="" id="heading5b">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapse5b" aria-expanded="false" aria-controls="collapse5b" class="collapsed">News<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
                        </h4> </div>
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
                                            <div class="panel-heading visible-xs" role=" tab"="" id="heading51b">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse51b" aria-expanded="false" aria-controls="collapse1b" class="collapsed">Notizie intradat<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
                                                </h4> </div>
                                            <div id="collapse51b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading51b">
                                                <div class="panel-body">
                                                    <div class="tab-wrap">
                                                        <div class="tradingNewsBox">
                                                            <div class="tradingNewsDate"> 27/11/2017 - 10:44</div> <a class="tradingNewsLink" href="#!">Piazza Affari festeggia l'accordo Londra-Ue, bene Unicredit</a> </div>
                                                        <div class="tradingNewsBox">
                                                            <div class="tradingNewsDate"> 27/11/2017 - 11:44</div> <a class="tradingNewsLink" href="#!">The Telegraph: Accordo su Brexit a 45-55 miliardi</a> </div>
                                                        <div class="tradingNewsBox">
                                                            <div class="tradingNewsDate"> 27/11/2017 - 11:46</div> <a class="tradingNewsLink" href="#!">Bper, patrimonio oltre il livello minimo chiesto dalla Bce</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading visible-xs" role=" tab"="" id="heading52b">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse52b" aria-expanded="false" aria-controls="collapse2b" class="collapsed">Notizie di analisi tecnica e fondamentale<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
                                                </h4> </div>
                                            <div id="collapse52b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading52b">
                                                <div class="panel-body">
                                                   <div class="tab-wrap">
                                                        <div class="tradingNewsBox">
                                                            <div class="tradingNewsDate"> 27/11/2017 - 10:44</div> <a class="tradingNewsLink" href="#!">Piazza Affari festeggia l'accordo Londra-Ue, bene Unicredit</a> </div>
                                                        <div class="tradingNewsBox">
                                                            <div class="tradingNewsDate"> 27/11/2017 - 11:44</div> <a class="tradingNewsLink" href="#!">The Telegraph: Accordo su Brexit a 45-55 miliardi</a> </div>
                                                        <div class="tradingNewsBox">
                                                            <div class="tradingNewsDate"> 27/11/2017 - 11:46</div> <a class="tradingNewsLink" href="#!">Bper, patrimonio oltre il livello minimo chiesto dalla Bce</a> </div>
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
                                $(function() {
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
        $(function() {
            resizeTab('tradingInfo', 0);
        });
        </script>
    </section>
    <!-- FINE | NEWS TRADING -->
    <p class="note">
        <strong>NYSE Disclaimer</strong>: As your agreement for the receipt and use of market data provides, the securities markets reserve all rights to the market data that they make available; do not to guarantee that data; and shall not be liable for any loss due either to their negligence or to any cause beyond their reasonable control.
    </p>
