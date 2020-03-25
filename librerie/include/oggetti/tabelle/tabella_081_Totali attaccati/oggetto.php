<h4 class="strongTitle">Il mio portafoglio</h4>

<form class="formGenerico" role="form">
    <!--caso con selettore rapporto -->
    <div class="form-group">
        <div class="row">
            <div class="col-xs-12 col-sm-5">
                <label class="control-label-output">Deposito titoli</label>
                <div id="sceltaRapporto" class="selectRapp">
                <input id="sceltaRapportoVal" type="hidden" class="value" name="sottorapporto" value="xxxaaaaaa"/>
                <a href="javascript:;" class="inputOption inputSx form-control">
                    <span class="inputDx">
                        <span class="input">
                            xxx/aaaaaa
                        </span>
                    </span>
                </a>
                <div class="selector" style="display: none;">
                    <span class="group">
                        <a value="xxxaaaaaa" href="javascript:;" class="selectorOptions first selected">
                        <strong>xxx/aaaaaa</strong><br/>
                        Nome Nome Cognome Cognome1</a>
                    </span>
                    <span class="group">
                        <a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">
                        <strong>xxx/bbbbbb - tutti i sottodepositi</strong><br/>
                        Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
                        <a value="xxxbbbbbb0" href="javascript:;" class="selectorOptions">
                        <strong>xxx/bbbbbb/0</strong><br/>
                        Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
                        <a value="xxxbbbbbb1" href="javascript:;" class="selectorOptions">
                        <strong>xxx/bbbbbb/1</strong><br/>
                        Nome Nome Cognome Cognome1</a>
                        <a value="xxxbbbbbb2" href="javascript:;" class="selectorOptions">
                        <strong>xxx/bbbbbb/2</strong><br/>
                        Nome Nome Cognome Cognome2</a>
                    </span>
                    <span class="group">
                        <a value="xxxcccccc" href="javascript:;" class="selectorOptions">
                            <strong>xxx/cccccc</strong><br/>
                            Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
                            Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
                            Nome Nome Cognome Cognome5</a>
                        <a value="xxxcccccc0" href="javascript:;" class="selectorOptions">
                            <strong>xxx/cccccc/0</strong><br/>
                            Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
                            Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
                            Nome Nome Cognome Cognome5</a>
                        <a value="xxxcccccc1" href="javascript:;" class="selectorOptions">
                            <strong>xxx/cccccc/1</strong><br/>
                            Nome Nome Cognome Cognome1</a>
                        <a value="xxxcccccc2" href="javascript:;" class="selectorOptions">
                            <strong>xxx/cccccc/2</strong><br/>
                            Nome Nome Cognome Cognome2</a>
                        <a value="xxxcccccc3" href="javascript:;" class="selectorOptions">
                            <strong>xxx/cccccc/3</strong><br/>
                            Nome Nome Cognome Cognome3</a>
                        <a value="xxxcccccc4" href="javascript:;" class="selectorOptions">
                            <strong>xxx/cccccc/4</strong><br/>
                            Nome Nome Cognome Cognome4</a>
                        <a value="xxxcccccc5" href="javascript:;" class="selectorOptions">
                            <strong>xxx/cccccc/5</strong><br/>
                            Nome Nome Cognome Cognome5</a>
                    </span>
                </div>
            </div>

            </div>
            <div class="col-xs-8 col-sm-5">
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
            <div class="col-xs-2 col-sm-2">
                <a href="#1" class="no-underline btn-icon" data-toggle="modal" data-target="#layerDettSaldi"><i class="icon icon-2x icon-zoom_piu_filled"></i ></a>
            </div>
        </div>
    </div>
</form>

<table id="data-grid-investimenti" cellspacing="0" cellpadding="0" border="0" class="sortableTable" data-unique-id="id">
    <thead>
        <tr>
            <th data-field="type" data-sortable="true" class="left">Tipologia</th>
            <th data-field="cvalinv" data-formatter="formatNum" data-sortable="true" class="right">Controvalore<br>investito</th>
            <th data-field="cvalatt" data-formatter="formatNum" data-sortable="true" class="right">CTV attuale/<br>alla scadenza</th>
            <th data-field="varass" data-formatter="colorNum" data-sortable="true" class="right">Var assol.</th>
            <th data-field="varperc" data-formatter="colorNum" data-sortable="true" class="right">Var %</th>
        </tr>
    </thead>
    <tfoot>
        <tr class="totali">
            <td><strong>Totale</strong></td>
            <td id="totCValInv" class="right bgWhite"></td>
            <td id="totCValAtt" class="right bgWhite"></td>
            <td id="totVarAss" class="right bgWhite"></td>
            <td id="totVarPerc" class="right bgWhite"></td>
        </tr>
    </tfoot>
</table>
<p class="note">(*) Per i PCT il controvalore &egrave; calcolato alla scadenza.</p>

<div class="form-group">
    <div class="btn-align-right">
      <a type="button" class="btn btn-primary">Portafoglio operativo</a>
    </div>
    <br class="clear">
</div>

<script>
/* tabella popolata con chiamata ai investimenti*/
var $tableInvestimenti = $('#data-grid-investimenti'),
    data = [{
        type: 'Fondi e Sicav',
        cvalinv: 72927.83,
        cvalatt: 81891.31,
        varass: 8963.48,
        varperc: 12.29
    }, {
        type: 'PCT*',
        cvalinv: 16386.33,
        cvalatt: 6386.33,
        varass: -10000.00,
        varperc: -61.03
    }],
    formatNum = function (value) {
        return format2DecNum(moveToInteger(value));
    },
    colorNum = function (value) {
      var className = value < 0 ? 'nega' : 'posi';
      return '<span class="' + className + '">' + formatNum(value) + '</span>';
    };
$(function() {
    //settare entrate e uscite
    var setInvInTable = function(data) {
        var totCValInv = 0,
            totCValAtt = 0,
            totVarAss = 0,
            totVarPerc = 0;
        $.each(data, function(index, item) {
            totCValInv += item.cvalinv;
            totCValAtt += item.cvalatt;
            totVarAss += item.varass;
        });
        totVarPerc = 100 * (totVarAss / totCValInv);
        $('#totCValInv').html(formatNum(totCValInv));
        $('#totCValAtt').html(formatNum(totCValAtt));
        $('#totVarAss').html(colorNum(totVarAss));
        $('#totVarPerc').html(colorNum(totVarPerc));
    }
    $tableInvestimenti.bootstrapTable({
        data: data,
        sortable: true,
        sortName: "type",
        sortOrder: "asc",
        rowStyle: function(row, index) {
            if (index % 2 == 0) {
                return {
                    classes: 'dispari'
                }
            } else {
                return {
                    classes: 'pari'
                }
            }
        }
    });
    setInvInTable(data);
    $(window).resize(function() {
        $tableInvestimenti.bootstrapTable('refreshOptions', {
            detailView: isSmallDevice
        });
        fixCols();
    });
});
</script>
