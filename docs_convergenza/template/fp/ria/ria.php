<div id="riadesktop">
    <!--suppress JSUnusedLocalSymbols -->
    <script type="text/javascript">
        var pathRia = '/ria';
        var rbfLinkObj = {
            'bonifico': 'BON',
            'giroconto': 'GIR',
            'carta': 'CJ'
        };
    </script>

    <!-- div per visualizzazione errori nel caricamento della RIA -->
    <section class="boxesitoWrap" id="errorDiv0" style="display: none;">
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
                    <label class="control-label" for="selectConti">Stai operando sul conto</label>
                    <div class="form-inline">
                        <div class="input-group loading" id="riaDesktopWrap"></div>
                    </div>
                </div>
                <div id="nascondi-div" class="col-sm-7">
                    <label class="control-label">&nbsp;</label><?php
					if (!$nascondiDati) {
						?>
                        <a href="/template/strutt_webank.php?tpl=tpl_priv_fp_myhome.php&idx=true"
                           type="button" class="btn btn-primary btn-nascondi" title="Nascondi i dati"><i
                                    class="icon icon-hide"></i><span class="icon-text">Nascondi i dati</span></a><?php
					} else {
						?>
                        <a href="/template/strutt_webank.php?tpl=tpl_priv_fp_myhome.php&idx=false"
                           type="button" class="btn btn-primary btn-mostra" title=">Mostra i dati"><i
                                    class="icon icon-show"></i><span class="icon-text">Mostra i dati</span></a><?php
					}
					?><a href="javascript:" type="button" class="btn btn-black hidden-sm mioPatrimonio" title="Il mio patrimonio" data-toggle="modal" data-target="#mioPatrimonioModal"><span
                                class="glyph glyph-grafico_patrimonio"></span><span
                                class="glyph-text">IL MIO PATRIMONIO</span></a>
                </div>
            </div>
        </div>

        <div class="form-group visible-sm-block">
            <div class="row">
                <div class="col-sm-6">
                    <a href="javascript:" type="button" class="btn btn-black mioPatrimonio" title="Il mio patrimonio" data-toggle="modal" data-target="#mioPatrimonioModal"><span
                                class="glyph glyph-grafico_patrimonio"></span><span
                                class="glyph-text">IL MIO PATRIMONIO</span></a>
                </div>
            </div>
        </div>

		<?php
		if (!$nascondiDati) {
			?>
            <div id="layerBianco"><img src="/WB/fe/img/ico2inf_loading.gif" alt="">caricamento in corso...</div>

            <div class="form-group" id="showIban" style="display:none;">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="control-label">Il tuo IBAN</label>
                        <span class="output output-icon">
                            <span id="ibanCCEst"></span>
                            <span class="icon-group">
                                <a id="LBlinkDettagliCoordinateEst" href="" title="Dettagli" class="btn-icon"><i class="icon icon-zoom_ria_filled icon-2x"
                                                                                                                 title="Dettagli"></i></a><!--
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
                    <li id="tabRia2">
                        <a href="javascript:" class="tabRiaCont">Trasferimenti</a>
                    </li>
                    <li id="tabRia3">
                        <a href="javascript:" class="tabRiaCont">Linee vincolate</a>
                    </li>
                </ul>
            </div>
            <div class="separator"></div>
            <div class="panel-group panel-fill panel-group-ria" role="tablist" aria-multiselectable="true">

                <!-- situazione attuale -->
				<?php include("part/contentRia1.php") ?>
                <!-- /situazione attuale -->

                <!-- trasferimenti -->
				<?php include("part/contentRia2.php") ?>
                <!-- /trasferimenti -->

                <!-- vincolate -->
				<?php include("part/contentRia3.php") ?>
                <!-- /vincolate -->
            </div>
        </div>

        <!-- popup conferme -->
		<?php include("part/popUpConferme.php") ?>
        <!-- /popup conferme -->
		<?php
	}
	?>
</div>
