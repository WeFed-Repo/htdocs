<?php
$nascondiDati = isset($_GET['idx']) && $_GET['idx'] == 'true';
?>

<style type="text/css">
    @import url("/WB/fe/css/fp_ria.css");
</style>

<div id="myhometop" class="hidden-xs">
    <form class="formGenerico borderFormRounded" role="form" id="form03">
        <div class="row">
            <div class="col-sm-12">
                <label class="control-label label-paolo" for="paoloDomanda">Paolo può esserti d'aiuto!</label>
                <div class="form-inline">
                    <div class="input-group">
                        <div class="input-group-addon first input-btn input-paolo">
                            <img src="/WB/fe/img/priv_tool_paolo.png" alt="Assistente virtuale">
                        </div>
                        <input maxlength="" id="paoloDomanda" value=""
                               type="text" name=""
                               class="form-control clear-x"
                               placeholder="fagli una domanda...">
                        <div class="input-group-addon input-btn">
                            <a type="button" class="btn btn-primary btn-minw" id="">Chiedi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<section>
    <div id="riaBannerWrap">
        <div id="riaBanner">
			<a href="javascript:" title=""><img class="img-resp" src="/WB/upload/cellette/banner_kjeans.jpg"></a>
            <!--p>BANNER T3</p-->
        </div>
    </div>
</section>

<?php
include("fp/ria/riaMobile.php");
?>

<?php if (!$isMobile): ?>
    <div class="hidden-xs">
        <span class="accesso flRight note">Ultimo accesso<br/>03/04/13 10:25</span>
        <div class="navContSecondLev" id="myHomeTabs">
            <div class="outerTab">
                <ul class="tabWrapper tabsmall hidden-xs">
                    <li><a href="#conto1">I miei conti</a></li>
                    <li><a href="#conto2">Le mie carte</a></li>
                    <li><a href="#conto3">I miei finanziamenti</a></li>
                </ul>
            </div>
            <div class="separator"></div>
            <div class="panel-group panel-fill" role="tablist" aria-multiselectable="true" id="accordion2">
                <div class="panel panel-default">
                    <div id="conto1" class="panel-collapse collapse riacontainer loading" role="tabpanel">
                        <div class="panel-body">
                            <div class="tab-wrap">
								<?php include("fp/ria/ria.php"); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div id="conto2" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                            <div class="tab-wrap">
								<?php include("../include/oggetti/Tabelle/Milano/Tabella_001__Carte/oggetto.php"); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div id="conto3" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                            <div class="tab-wrap">
								<?php include("../include/oggetti/Form/Milano/FORM_001/oggetto.php"); ?>
								<?php include("../include/oggetti/Form/Milano/FORM_001/oggetto.php"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(function () {
                resizeTab('myHomeTabs', 0);
            });
        </script>

        <div class="layeralert2" id="layeralert1" style="display: none;">
            <div class="head handle"
                 onmouseover="this.style.cursor='move'; $('layeralert1').dragHandle = new Draggable('layeralert1',{handle: 'handle'}, { scroll: window });">
                <img src="/WB/fe/img/layeralert_x.gif" alt="chiudi" onclick="closePopOverLayer('layeralert1')"/></div>
            <div class="body">
                <div class="important">
                    <div id="contcont">
                        <h2>Lorem ipsum lorem ipsum</h2>
                        <table class="condiz">
                            <tr class="pari">
                                <td class="primo">Lorem ipsum lorem ipsum</td>
                                <td class="tipo fontBold">Lorem ipsum lorem ipsum</td>
                            </tr>
                            <tr class="dispari">
                                <td class="primo">Lorem ipsum lorem ipsum</td>
                                <td class="tipo fontBold">Lorem ipsum lorem ipsum</td>
                            </tr>
                            <tr class="pari">
                                <td class="primo">Lorem ipsum lorem ipsum</td>
                                <td class="tipo fontBold">Lorem ipsum lorem ipsum</td>
                            </tr>
                            <tr class="dispari">
                                <td class="primo">Lorem ipsum lorem ipsum</td>
                                <td class="tipo fontBold">Lorem ipsum lorem ipsum</td>
                            </tr>
                            <tr class="pari">
                                <td class="primo">Lorem ipsum lorem ipsum</td>
                                <td class="tipo fontBold">Lorem ipsum lorem ipsum</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br class="clear"/></div>
            <div class="foot"></div>
        </div>

        <script>
            var srvTs = '<?php print time() * 1000; ?>';
        </script>

        <script>
            function layerconti(conto, intestatari) {
                openPopOverLayer('layeralertconti', 'float', 1);
                $('contenuto').innerHTML = '<div><p>Per operare sul conto corrente indicato, &egrave; necessario che <strong>tutti gli intestatari</strong> richiedano ' + 'l\'\<strong>abilitazione</strong> al servizio <strong><%=wsVisitorInfo.getShortSiteName()%></strong> presso la propria <strong>agenzia <%=wsVisitorInfo.getShortBankName()%></strong>.</p>' + '</div>' + '<div class="row">' + '<div class="col-xs-12 col-md-4">' + '<label class="nomefield"><strong>Conto corrente n°</strong></label><br>' + '<span class="output">' + conto + '</span>' + '</div>' + '<div class="col-xs-12 col-md-8">' + '<label class="nomefield"><strong>Intestato a</strong></label><br>' + '<span class="output">' + intestatari + '</span>' + '</div>' + '</div>';
            }
        </script>
    </div>
<?php endif ?>

<div class="modal fade" id="mioPatrimonioModal" tabindex="-1" role="dialog" aria-labelledby="mioPatrimonioLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
                <h2 class="modal-title" id="mioPatrimonioLabel">Il mio patrimonio</h2>
            </div>
            <div class="modal-body">
				<?php include("tpl_priv_full_patrimonio.php") ?>
            </div>
        </div>
    </div>
</div>

<script src="/common/fe/assets/amcharts/amcharts.js?r=<?php echo $random ?>"></script>
<script src="/common/fe/assets/amcharts/serial.js?r=<?php echo $random ?>"></script>
<script src="/common/fe/assets/amcharts/pie.js?r=<?php echo $random ?>"></script>
<script src="/common/fe/assets/amcharts/plugins/responsive/responsive.min.js?r=<?php echo $random ?>"></script>
<script src="/WB/fe/js/calcoloInteressiVincoli.js?r=<?php echo $random ?>"></script>
<script src="/WB/fe/js/widgets.js?r=<?php echo $random ?>"></script>
<script src="/WB/fe/js/ria.js?r=<?php echo $random ?>"></script>
<script src="/WB/fe/js/riaLinksLibrerie.js?r=<?php echo $random ?>"></script>
<script src="/WB/fe/js/riaUtilities.js?r=<?php echo $random ?>"></script>
<script src="/WB/fe/js/riaAnimazioni.js?r=<?php echo $random ?>"></script>
<script src="/WB/fe/js/riaNavigazione.js?r=<?php echo $random ?>"></script>
<script src="/WB/fe/js/riaChiamate.js?r=<?php echo $random ?>"></script>
<script src="/WB/fe/js/riaDispositive.js?r=<?php echo $random ?>"></script>

<script>

</script>