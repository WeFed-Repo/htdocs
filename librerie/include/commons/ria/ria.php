<?php
global $contoLabelShortSingLow;
?>
<!--suppress JSUnusedLocalSymbols -->
<script type="text/javascript">
    /*** VALORI ***
     BPMBANKING,
     WEBANK,
     MOL,
     INTER,
     ILN,
     WSADMIN;
     */
    var sitoBanking = '<?php echo $sitoBanking ?>';
    var urlFpInv = '';
    var isComunita200Mov = false;

    // Pulsante il mio patrimonio
    var abilOroCap = <?php echo($abilOroCap ? "true" : "false"); ?>;

    // Permette le chiamate dispositive
    var pDis = <?php echo($permettiDispositive ? "true" : "false"); ?>;


    var rbfLinkObj = {
        'bonifico': 'BON',
        'giroconto': 'GIR',
        'carta': 'CJ'
    };
</script>

<!-- div per visualizzazione errori nel caricamento della RIA -->
<section class="boxesitoWrap" id="errorDiv0">
    <div class="boxesito attenzione">
        <div class="text">
            <h4>Attenzione</h4>
            <div id="errorContent0">
            </div>
        </div>
    </div>
</section>

<form id="form-ria-conto" class="formGenerico" role="form">
    <div class="form-group">
        <div class="row" id="ctnboxtable">
            <div class="col-sm-5">
                <label class="control-label" for="selectConti">Stai operando
                    sul <?php echo $contoLabelShortSingLow ?></label>
                <div class="form-inline" id="selez">
                    <div class="input-group">
                        <strong id="contoUnico"></strong>
                        <select onchange="cambiaConto();" id="selectConti" name="selectConti" class="form-control">
                            <option accountidtoshow="CT 01069 0000027152 EUR" accountid="01069 - 0000027152 - EUR"
                                    value="01069 - 0000027152 - EUR">CT 01069 0000027152 EUR
                            </option>
                            <option accountidtoshow="CT 01069 0000026986 EUR +DER" accountid="01069 - 0000026986 - EUR"
                                    value="01069 - 0000026986 - EUR">CT 01069 0000026986 EUR +DER
                            </option>
                            <option accountidtoshow="CC 00599 0000089342 EUR" accountid="00599 - 0000089342 - EUR" value="00599 - 0000089342 - EUR">CC 00599 0000089342 EUR @me</option>
                            <option accountidtoshow="CC 00599 0000074978 EUR +DER" accountid="00599 - 0000074978 - EUR" value="00599 - 0000074978 - EUR">CC 00599 0000074978 EUR @me +DER</option>
                            <option accountidtoshow="EMpos0 CC 00599 0000099102 EUR +DEP"
                                    accountid="00599 - 0000099102 - EUR" value="00599 - 0000099102 - EUR"
                                    selected="selected">EMpos0 CC 00599 0000099102 EUR +DEP
                            </option>
                            <option accountidtoshow="EMpos1 CC 00599 0000099112 EUR +DEP"
                                    accountid="00599 - 0000099112 - EUR" value="00599 - 0000099112 - EUR">EMpos1 CC
                                00599 0000099112 EUR +DEP
                            </option>
                            <option accountidtoshow="EMsenza0 CC 00599 0000099103 EUR +DEP"
                                    accountid="00599 - 0000099103 - EUR" value="00599 - 0000099103 - EUR">EMsenza0 CC
                                00599 0000099103 EUR +DEP
                            </option>
                            <option accountidtoshow="EMsenza1 CC 00599 0000099113 EUR +DEP"
                                    accountid="00599 - 0000099113 - EUR" value="00599 - 0000099113 - EUR">EMsenza1 CC
                                00599 0000099113 EUR +DEP
                            </option>
                            <option accountidtoshow="EMsenza2 CC 00599 0000099123 EUR +DEP"
                                    accountid="00599 - 0000099123 - EUR" value="00599 - 0000099123 - EUR">EMsenza2 CC
                                00599 0000099123 EUR +DEP
                            </option>
                            <option accountidtoshow="EMsenza3 CC 00599 0000099133 EUR +DEP"
                                    accountid="00599 - 0000099133 - EUR" value="00599 - 0000099133 - EUR">EMsenza3 CC
                                00599 0000099133 EUR +DEP
                            </option>
                            <option accountidtoshow="CC 00599 0000081080 EUR +DEP +DER"
                                    accountid="00599 - 0000081080 - EUR" value="00599 - 0000081080 - EUR">CC 00599
                                0000081080 EUR +DEP +DER
                            </option>
                        </select>
                        <div class="input-group-addon">
                            <a class="btn-icon" data-toggle="modal" data-target="#starAlert1"
                               title="La stella indica il conto che hai impostato come preferito">
                                <i class="icon icon-star_fill" title="icon-star_fill"></i>
                                <!--<i class="icon icon-star" title="icon-star"></i>-->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="nascondi-div" class="col-sm-7">
                <label class="control-label">&nbsp;</label><?php
                if (!$nascondiDati) {
                    ?>
                    <a href="http://libreriewebank.webank.local/connect.php?page=strutt_priv.php&tpl=tpl_priv_fp_my_ria.php&responsive=y&liv0=0&idx=true"
                       type="button" class="btn btn-primary btn-nascondi" title="Nascondi i dati"><i
                                class="icon icon-hide"></i><span class="icon-text">Nascondi i dati</span></a><?php
                } else {
                    ?>
                    <a href="http://libreriewebank.webank.local/connect.php?page=strutt_priv.php&tpl=tpl_priv_fp_my_ria.php&responsive=y&liv0=0&idx=false"
                       type="button" class="btn btn-primary btn-mostra" title=">Mostra i dati"><i
                                class="icon icon-show"></i><span class="icon-text">Mostra i dati</span></a><?php
                }
                if ($abilOroCap) {
                    ?><a type="button" class="btn btn-black hidden-sm mioPatrimonio" title="Il mio patrimonio"><span
                                class="glyph glyph-grafico_patrimonio"></span><span
                                class="glyph-text">IL MIO PATRIMONIO</span></a><?php
                }
                ?>
            </div>
        </div>
    </div>

    <?php if ($abilOroCap) { ?>
        <div class="form-group visible-sm-block">
            <div class="row">
                <div class="col-sm-6">
                    <a type="button" class="btn btn-black mioPatrimonio" title="Il mio patrimonio"><span
                                class="glyph glyph-grafico_patrimonio"></span><span
                                class="glyph-text">IL MIO PATRIMONIO</span></a>
                </div>
            </div>
        </div>
    <?php } ?>

    <?php
if (!$nascondiDati) {
?>
    <div id="layerBianco"><img src="/img/ret/ico2inf_loading.gif" alt="">caricamento in corso...</div>

    <div class="form-group" id="showIban" style="display:none;">
        <div class="row">
            <div class="col-sm-12">
                <label class="control-label">Il tuo IBAN</label>
                <span class="output output-icon">
                	<span id="ibanCCEst"></span>
					<span class="icon-group">
						<a id="LBlinkDettagliCoordinateEst" href="" title="Dettagli" class="btn-icon"><i class="icon icon-zoom_ria_filled icon-2x" title="Dettagli"></i></a><!--
						--><a id="LBlinkInviaCoordinateEst" href="javascript:" title="Invia per email" class="btn-icon"><i
                                    class="icon icon-mail_ria_filled icon-2x" title="Invia per email"></i></a><!--
						--><a id="LBlinkStampaCoordinateEst" target="blank" href="javascript:" title="Stampa"
                              class="btn-icon"><i class="icon icon-print_ria_filled icon-2x" title="Stampa"></i></a>
					</span>
				</span>
            </div>
        </div>
    </div>
<?php
}
?>
</form>

<?php
if (!$nascondiDati) {
?>
    <hr class="separator-graf">

    <div class="navContSecondLev" id="contenuti545" style="display: none;">
        <div class="outerTab">
            <ul class="tabWrapper tabsmall hidden-xs tabContainer1">
                <li id="tabRia1" class="on">
                    <a href="javascript:" class="tabRiaCont">Situazione attuale</a>
                </li>
                <?php
                if ($permettiDispositive) {
                    ?>
                    <li id="tabRia2">
                        <a href="javascript:" class="tabRiaCont">Trasferimenti</a>
                    </li>
                    <?php
                }
                ?>
                <li id="tabRia3">
                    <a href="javascript:" class="tabRiaCont">Linee vincolate</a>
                </li>
            </ul>
        </div>
        <div class="separator"></div>
        <div class="panel-group panel-fill panel-group-ria" role="tablist" aria-multiselectable="true">

            <!-- situazione attuale -->
            <?php virtual("/librerie/include/commons/ria/part/contentRia1.php") ?>
            <!-- /situazione attuale -->

            <?php
            if ($permettiDispositive) {
                ?>
                <!-- trasferimenti -->
                <?php virtual("/librerie/include/commons/ria/part/contentRia2.php") ?>
                <!-- /trasferimenti -->
                <?php
            }
            ?>
            <!-- vincolate -->
            <?php virtual("/librerie/include/commons/ria/part/contentRia3.php") ?>
            <!-- /vincolate -->
        </div>
    </div>

    <!-- popup conferme -->
    <?php virtual("/librerie/include/commons/ria/part/popUpConferme.php") ?>
    <!-- /popup conferme -->
<?php
}
?>
