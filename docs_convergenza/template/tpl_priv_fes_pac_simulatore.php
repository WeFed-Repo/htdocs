<?php
$isConsultare = false;
?>

<h2>Simulatore PAC</h2>

<!-- HTML per sviluppo - inizio -->
<section>
    <h3>2. Scegli le caratteristiche del PAC</h3>
    <p>Definisci l'importo del versamento per ciascun fondo.</p>
    <table id="tableSimPac" data-toggle="table">
        <thead>
            <tr>
                <th class="left" data-field="nomefondo">Nome fondo</th>
                <th class="right" data-field="importoiniziale" data-formatter="pacSimulatore.thNumericFormatter">Investimento inziale (EUR)</th>
                <th class="right" data-field="importorata" data-width="165px" data-formatter="pacSimulatore.thSpinnerFormatter">Importo rata (EUR)</th>
                <th class="right" data-field="importototale" data-formatter="pacSimulatore.thNumericFormatter">Investimento totale (EUR)</th>
                <th class="right" data-field="percentuale">Percentuale investita</th>
                <th class="center" data-field="codicefida" data-formatter="pacSimulatore.thDeleteFormatter">Elimina</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
            <tr class="totali">
                <td class="left"><strong>TOTALE</strong></td>
                <td class="right bgWhite total"></td>
                <td class="right bgWhite total"></td>
                <td class="right bgWhite total"></td>
                <td class="right bgWhite totalPerc"></td>
                <td class="hidden-xs bgWhite brdWhite">&nbsp;</td>
            </tr>
        </tfoot>
    </table>
</section>
<section>
    <p>
        Seleziona l'arco temporale del PAC (inserisci una &laquo;data inizio Pac&raquo; a tua scelta precedente alla data odierna)</p>
    <form class="formGenerico borderFormRounded" role="form" id="formSimPac">
        <div class="form-group">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <label class="control-label">Data inizio PAC*</label>
                    <div class="form-inline">
                        <div class="input-group">
                            <input type="text" id="dateFrom" placeholder="gg/mm/aaaa" class="form-control clear-x">
                            <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <label class="control-label">Data fine PAC</label>
                    <div class="form-inline">
                        <div class="input-group">
                            <input type="text" id="dateTo" placeholder="gg/mm/aaaa" class="form-control clear-x">
                            <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <label class="control-label">Periodicit&agrave; dei versamenti</label>
                    <select id="selPeriodo" class="form-control">
                    </select>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <label class="control-label">Durata del piano</label>
                    <span class="output" id="durataPiano">- - -</span>
                </div>
            </div>
        </div>
        <div class="form-group btnWrapper">
            <div class="btn-align-left">
                <a type="button" class="btn btn-default backToRic">nuova ricerca</a>
            </div>
            <div class="btn-align-right">
                <a type="button" class="btn btn-primary" id="simPacSubmit">simula PAC</a>
            </div>
            <br class="clear">
        </div>
    </form>
</section>
<div id="containerSimPac" style="display: none">
    <hr>
    <section>
        <p>
            Il simulatore ricostruisce, per l'arco temporale selezionato, l'andamento storico di un Piano di Risparmio dei fondi scelti (fino a 5) e mostra l'evoluzione nel tempo del capitale finale versato periodicamente.</p>
        <form class="formGenerico borderFormRounded" role="form" id="formChartPac">
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <label class="control-label">Visualizza</label>
                        <select class="form-control" id="selChartPac">
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <label class="control-label">Legenda</label>
                        <span class="legendSimPac legendColumn"></span>Fondi versati
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <label class="control-label hidden-xs">&nbsp;</label>
                        <span class="legendSimPac legendLine"></span>Capitale finale
                    </div>
                </div>
            </div>

            <!-- HTML -->
            <div id="chartSimPacDiv"></div>
        </form>
        <div id="infoGraficoPAC" class="formGenerico borderFormRounded">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <label class="control-label">Periodo versamento PAC</label>
                    <span class="output" id="graficoPeriodo"></span>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <label class="control-label">Variazione %</label>
                    <span class="output" id="graficoVariazione"></span>
                </div>
            </div>
        </div>
    </section>
    <section>
        <h4>Seleziona e sottoscrivi</h4>
        <p class="table-desc-text">
            Se desideri sottoscrivere uno o pi&ugrave; fondi della tua simulazione, seleziona i fondi e clicca sul carrello</p>
        <table data-toggle="table" id="tableSelPac" data-checkbox-header="false" >
            <thead>
                <tr>
                    <th class="left" data-field="nomefondo">Nome fondo</th>
                    <th class="right" data-field="totVersato" data-formatter="pacSimulatore.thNumericFormatter">Totale versato (EUR)</th>
                    <th class="right" data-field="totFondo" data-formatter="pacSimulatore.thNumericFormatter">Valore fondo (EUR)</th>
                    <th class="right" data-field="percentuale">Percentuale investita</th>
                    <th class="right" data-field="rendimento" data-formatter="pacSimulatore.thPercFormatter">Rend. lordo annualizzato</th>
                    <?php if (!$isConsultare) { ?>
                    <th class="center nodet" data-checkbox="true" data-field="selected">Seleziona</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <div class="form-group btnWrapper">
            <div class="btn-align-left">
                <a type="button" class="btn btn-default backToRic" href="#!">nuova ricerca</a>
            </div>
            <div class="btn-align-right">
                <a type="button" class="btn btn-primary btn-disabled" disabled href="#!" id="nextSimPac">procedi all'acquisto</a>
            </div>
            <br class="clear">
        </div>
    </section>
</div>
<div class="modal fade slide-right" id="layerDelete" tabindex="-1" role="dialog" aria-labelledby="labelDelete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="labelDelete">Eliminazione fondo</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">Vuoi procedere con l'eliminazione del fondo?</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="form-group btnWrapper">
                    <div class="btn-align-left">
                        <a type="button" class="btn btn-primary" id="deleteOK">procedi</a>
                    </div>
                    <br class="clear">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade slide-right" id="layerNoDelete" tabindex="-1" role="dialog" aria-labelledby="labelNoDelete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="labelNoDelete">Eliminazione fondo</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">&Egrave; necessario avere almeno un fondo nella simulazione.</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<div class="modal fade slide-right" id="layerAcquisto" tabindex="-1" role="dialog" aria-labelledby="labelAcquisto">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="labelAcquisto">Acquisto fondi</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 fesDisclaimer"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="form-group btnWrapper">
                    <div class="btn-align-right">
                        <a type="button" class="btn btn-primary" data-dismiss="modal" id="simPacOK">accetto</a>
                    </div>
                    <div class="btn-align-right">
                        <a type="button" class="btn btn-primary" data-dismiss="modal">non accetto</a>
                    </div>
                    <br class="clear">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade slide-right" id="layerError" tabindex="-1" role="dialog" aria-labelledby="labelError">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="labelError">Errore</h2>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12" id="errorText"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<hr>

<section>
    <div class="note fesDisclaimer"></div>
</section>

<form id="showBuyPac" action="" method="POST" style="display:none">
    <!-- Da valorizzare -->
    <input type="hidden" id="codicifida" name="codicifida" value="">
    <input type="hidden" id="isin" name="isin" value="">
    <input type="hidden" id="iir" name="iir" value="">
</form>
<!-- HTML per sviluppo - fine -->

<script type="text/javascript">
var isLibrerie = true;
var is4s = false;
var pacConf = {
    "data":[
        {
            "periodicita":{
                "T":{
                    "idpiano":"M1",
                    "numerorateiniziali":5,
                    "tipopiano":"A",
                    "numeroratepiano":"12,20,40",
                    "importoratainiziale":225,
                    "importoratasuccessiva":225
                },
                "M":{
                    "idpiano":"M1",
                    "numerorateiniziali":14,
                    "tipopiano":"C",
                    "numeroratepiano":"36,60,120",
                    "importoratainiziale":75,
                    "importoratasuccessiva":75
                }
            },
            "codicefida":"MGAMAXD",
            "cfam":"-",
            "casadigestione":"135",
            "descrcasadigestione":"M&G Investment Funds (1)",
            "ctaz":"A",
            "datalancio":"1972-12-29",
            "anticiporate":"N",
            "nomefondo":"M&G North American Dividend A $",
            "isin":"GB00B1RXYR32",
            "fondosicav":"S"
        },
        {
            "periodicita":{
                "T":{
                    "idpiano":"M1",
                    "numerorateiniziali":5,
                    "tipopiano":"A",
                    "numeroratepiano":"12,20,40",
                    "importoratainiziale":225,
                    "importoratasuccessiva":225
                },
                "M":{
                    "idpiano":"M1",
                    "numerorateiniziali":14,
                    "tipopiano":"C",
                    "numeroratepiano":"36,60,120",
                    "importoratainiziale":75,
                    "importoratasuccessiva":75
                }
            },
            "codicefida":"MGAMAX",
            "cfam":"-",
            "casadigestione":"135",
            "descrcasadigestione":"M&G Investment Funds (1)",
            "ctaz":"A",
            "datalancio":"1972-12-29",
            "anticiporate":"N",
            "nomefondo":"M&G North American Dividend A EUR",
            "isin":"GB0030926959",
            "fondosicav":"S"
        },
        {
            "periodicita":{
                "T":{
                    "idpiano":"M1",
                    "numerorateiniziali":5,
                    "tipopiano":"A",
                    "numeroratepiano":"12,20,40",
                    "importoratainiziale":225,
                    "importoratasuccessiva":225
                },
                "M":{
                    "idpiano":"M1",
                    "numerorateiniziali":14,
                    "tipopiano":"C",
                    "numeroratepiano":"36,60,120",
                    "importoratainiziale":75,
                    "importoratasuccessiva":75
                }
            },
            "codicefida":"MGAMAXH",
            "cfam":"-",
            "casadigestione":"135",
            "descrcasadigestione":"M&G Investment Funds (1)",
            "ctaz":"A",
            "datalancio":"1972-12-29",
            "anticiporate":"N",
            "nomefondo":"M&G North American Dividend AH EUR",
            "isin":"GB00B2QWD268",
            "fondosicav":"S"
        }
    ]
};
</script>
<script type="text/javascript" src="/common/fe/assets/amcharts/amcharts.js?a="></script>
<script type="text/javascript" src="/common/fe/assets/amcharts/serial.js?a="></script>
<script type="text/javascript" src="/common/fe/js/priv_fes_pac_simulatore.js"></script>
<script type="text/javascript">
$(function() {
    if (!is4s && $(".fesDisclaimer").length) {
        $.ajax({
            url: "/common/fe/html/SimulPac_Disclaimer.html?rand=" + Math.random(),
            dataType: "html",
            success: function(data) {
                $(".fesDisclaimer").append(data);
                $(".fesDisclaimer > p").removeClass('note');
            }
        });
    }
});
</script>
