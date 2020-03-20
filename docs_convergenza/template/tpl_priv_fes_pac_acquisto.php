<h2>Acquisto PAC</h2>

<!-- HTML per sviluppo - inizio --><section>
    <form class="formGenerico borderFormRounded bgPin32" role="form" id="form86">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label class="control-label">Conto di addebito</label>
                    <div class="form-inline">
                        <div class="input-group">
                            <select class="form-control" id="conti">
                                <option value="01077 - 0000049476 - EUR" accountid="01077 - 0000049476 - EUR" accountidtoshow="CC 01077 0000049476 EUR">CC 01077 0000049476 EUR</option>
                                <option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
                                <option value="01077 - 0000049478 - EUR" accountid="01077 - 0000049478 - EUR" accountidtoshow="CC 01077 0000049478 EUR">CC 01077 0000049478 EUR</option>
                                <option value="01077 - 0000049479 - EUR" accountid="01077 - 0000049479 - EUR" accountidtoshow="CC 01077 0000049479 EUR">CC 01077 0000049479 EUR</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label class="control-label">Disponibilit&agrave; attuale</label>
                    <span id="disponibilita" class="output"></span>
                </div>
            </div>
        </div>
    </form>
</section>
<section>
    <h4>Elenco fondi selezionati per il tuo PAC</h4>
    <table data-toggle="table" id="tableBuyPac" data-checkbox-header="false" class="fix-OuterTable2">
        <thead>
            <tr>
                <th class="left" data-field="nomefondo" data-formatter="pacAcquisto.thStringFormatter">Nome fondo</th>
                <th class="center" data-field="importorata" data-formatter="pacAcquisto.thSpinnerRataFormatter" data-width="175px">Importo rata (EUR)</th>
                <th class="center" data-field="numerorateiniziali" data-formatter="pacAcquisto.thSpinnerVersInizFormatter" data-width="140px">Num. vers. iniziali</th>
                <th class="left" data-field="listaVersTot" data-formatter="pacAcquisto.thSelectVersTotFormatter" data-width="80">Num. vers. totali</th>
                <th class="left" data-field="listaPeriodicita" data-formatter="pacAcquisto.thSelectPeriodicitaFormatter" data-width="160">Periodicit&agrave;</th>
                <th class="right" data-field="investimentotale" data-formatter="pacAcquisto.thNumericFormatter">Invest. totale (EUR)</th>
                <th class="right" data-field="investimentoiniziale" data-formatter="pacAcquisto.thNumericFormatter">Invest. iniziale (EUR)</th>
                <th class="center" data-field="codicefida" data-formatter="pacAcquisto.thDeleteFormatter">Elimina</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
            <tr class="totali">
                <td class="left"><strong>TOTALE</strong></td>
                <td class="right bgWhite total"></td>
                <td class="hidden-xs">&nbsp;</td>
                <td class="hidden-xs">&nbsp;</td>
                <td class="hidden-xs">&nbsp;</td>
                <td class="right bgWhite total"></td>
                <td class="right bgWhite total"></td>
                <td class="hidden-xs bgWhite brdWhite">&nbsp;</td>
            </tr>
        </tfoot>
    </table>
    <div class="form-group btnWrapper">
        <div class="btn-align-left">
            <a type="button" class="btn btn-default backToRic" href="#!">nuova ricerca</a>
        </div>
        <div class="btn-align-right">
            <a type="button" class="btn btn-primary" href="#!" id="nextBuyPac">prosegui con l'acquisto</a>
        </div>
        <br class="clear">
    </div>
</section>

<hr>

<div>
    <section>
        <div id="fesDisclaimer" class="note"></div>
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
<form id="buyPac" action="" method="POST" style="display:none">
    <!-- Da valorizzare -->
    <input type="hidden" id="cart" name="cart" value="">
    <input type="hidden" id="conto" name="conto" value="">
    <input type="hidden" id="depSimPac" name="depSimPac" value="true">
</form>
<!-- HTML per sviluppo - fine -->

<script type="text/javascript">
var contiConf = {
    "01077-0000049476-EUR": 1005681.12,
    "01077-0000049477-EUR": -312.34,
    "01077-0000049478-EUR": 2232332,
    "01077-0000049479-EUR": 0
};
</script>

<script type="text/javascript">
var isLibrerie = true;
var compraConf = {
    "data":[
        /* {
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
            "cancellato": false,
            "acquistato": true,
            "acquisto": {
                "importorata": 1800,
                "numerorateiniziali": 18,
                "versamentiTotali": 20,
                "periodicita": "T",
                "investimentotale": 36000,
                "investimentoiniziale": 32400
            },
            "codicefida":"MGAMAX1",
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
                "Q":{
                    "idpiano":"M1",
                    "numerorateiniziali":4,
                    "tipopiano":"A",
                    "numeroratepiano":"9,15,10",
                    "importoratainiziale":300,
                    "importoratasuccessiva":300
                },
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
            "cancellato": true,
            "acquistato": false,
            "codicefida":"MGAMAX2",
            "cfam":"-",
            "casadigestione":"135",
            "descrcasadigestione":"M&G Investment Funds (1)",
            "ctaz":"A",
            "datalancio":"1972-12-29",
            "anticiporate":"N",
            "nomefondo":"M&G North American Dividend AH EUR",
            "isin":"GB00B2QWD268",
            "fondosicav":"S"
        }, */
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
            "acquisto": {
                "importorata": 6150.0,
                "versamentiiniziali": 0.0,
                "versamentitotali": 0.0,
                "periodicita": "",
                "importoinizialie": 0.0,
                "importototale": 0.0
            },
            "cancellato": false,
            "acquistato": false,
            "codicefida":"MGAMAX3",
            "cfam":"-",
            "casadigestione":"135",
            "descrcasadigestione":"M&G Investment Funds (1)",
            "ctaz":"A",
            "datalancio":"1972-12-29",
            "anticiporate":"S",
            "nomefondo":"M&G North American Dividend A EUR",
            "isin":"GB0030926959",
            "fondosicav":"S"
        },
        /* {
            "periodicita":{
                "Q":{
                    "idpiano":"M1",
                    "numerorateiniziali":4,
                    "tipopiano":"A",
                    "numeroratepiano":"9,15,10",
                    "importoratainiziale":300,
                    "importoratasuccessiva":300
                },
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
            "cancellato": true,
            "acquistato": false,
            "codicefida":"MGAMAX4",
            "cfam":"-",
            "casadigestione":"135",
            "descrcasadigestione":"M&G Investment Funds (1)",
            "ctaz":"A",
            "datalancio":"1972-12-29",
            "anticiporate":"N",
            "nomefondo":"M&G North American Dividend AH EUR",
            "isin":"GB00B2QWD268",
            "fondosicav":"S"
        }, */
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
            "cancellato": false,
            "acquistato": false,
            "acquisto": {
                "importorata": 1125,
                "versamentiiniziali": 7,
                "versamentitotali": 20,
                "periodicita": "T",
                "importoinizialie": 7875,
                "importototale": 22500
            },
            "codicefida":"MGAMAX5",
            "cfam":"-",
            "casadigestione":"135",
            "descrcasadigestione":"M&G Investment Funds (1)",
            "ctaz":"A",
            "datalancio":"1972-12-29",
            "anticiporate":"S",
            "nomefondo":"M&G North American Dividend A EUR",
            "isin":"GB0030926959",
            "fondosicav":"S"
        }
    ]
};
</script>
<script type="text/javascript" src="/common/fe/js/priv_fes_pac_acquisto.js"></script>
