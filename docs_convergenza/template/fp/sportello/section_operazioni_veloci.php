<article class="col-xs-12 col-md-6">
    <h4 id="buttonHeader" class="strongTitle">Operazioni veloci<span id="operDesc"></span></h4>

    <div id="accordionOpsWrap" class="wrapLayer">
        <div class="panel-group panel-group-icon" id="accordionOps" role="tablist" aria-multiselectable="false">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headerOps1">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionOps" href="#collapseOps1"
                           aria-expanded="true" aria-controls="collapseOps1"><i
                                    class="icon title-icon icon-bonifico_ordinario_sportello"></i><span
                                    class="title-text">Bonifico</span><i class="icon icon-arrow_down"></i><i
                                            class="icon icon-arrow_up"></i></a>
                    </h4>
                </div>
                <?php
                $authPrefix = "bonifico";
                $authMsgOK = "Bonifico inserito";
                $authCustomMsgOK = "";
                $authBtnRepeat = "Disponi un nuovo bonifico";
                ?>
                <div id="collapseOps1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headerOps1">
                    <div class="panel-body">
                        <div id="<?php echo $authPrefix ?>Carousel" class="carouselPlus" data-loop="false"
                             data-variableHeight="true">
                            <div class="carouselPlusPages">
                                <div id="<?php echo $authPrefix ?>Page1" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("form_bonifico.php"); ?>
                                    </div>
                                </div>
                                <div id="<?php echo $authPrefix ?>Page2" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("autorizzazione_bonifico.php"); ?>
                                    </div>
                                </div>
                                <div id="<?php echo $authPrefix ?>Page3" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("conferma.php"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headerOps2">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionOps" href="#collapseOps2"
                           aria-expanded="false" aria-controls="collapseOps2"><i
                                    class="icon title-icon icon-ricarica_prepagata_sportello"></i><span
                                    class="title-text">Ricarica prepagata</span><i class="icon icon-arrow_down"></i><i
                                            class="icon icon-arrow_up"></i>
                        </a>
                    </h4>
                </div>
                <?php
                $authPrefix = "prepagata";
                $authMsgOK = "Ricarica effettuata";
                $authCustomMsgOK = "";
                $authBtnRepeat = "Effettua una nuova ricarica";
                ?>
                <div id="collapseOps2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headerOps2">
                    <div class="panel-body">
                        <div id="<?php echo $authPrefix ?>Carousel" class="carouselPlus" data-loop="false"
                             data-variableHeight="true">
                            <div class="carouselPlusPages">
                                <div id="<?php echo $authPrefix ?>Page1" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("form_prepagata.php"); ?>
                                    </div>
                                </div>
                                <div id="<?php echo $authPrefix ?>Page2" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("autorizzazione_prepagata.php"); ?>
                                    </div>
                                </div>
                                <div id="<?php echo $authPrefix ?>Page3" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("conferma.php"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headerOps3">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionOps" href="#collapseOps3"
                           aria-expanded="false" aria-controls="collapseOps3"><i
                                    class="icon title-icon icon-ricarica_cellulare_sportello"></i><span
                                    class="title-text">Ricarica cellulare</span><i class="icon icon-arrow_down"></i><i
                                            class="icon icon-arrow_up"></i>
                        </a>
                    </h4>
                </div>
                <?php
                $authPrefix = "cellulare";
                $authMsgOK = "Ricarica effettuata";
                $authCustomMsgOK = "";
                $authBtnRepeat = "Effettua una nuova ricarica";
                ?>
                <div id="collapseOps3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headerOps3">
                    <div class="panel-body">
                        <div id="<?php echo $authPrefix ?>Carousel" class="carouselPlus" data-loop="false"
                             data-variableHeight="true">
                            <div class="carouselPlusPages">
                                <div id="<?php echo $authPrefix ?>Page1" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("form_cellulare.php"); ?>
                                    </div>
                                </div>
                                <div id="<?php echo $authPrefix ?>Page2" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("autorizzazione_cellulare.php"); ?>
                                    </div>
                                </div>
                                <div id="<?php echo $authPrefix ?>Page3" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("conferma.php"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headerOps4">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionOps" href="#collapseOps4"
                           aria-expanded="false" aria-controls="collapseOps4"><i
                                    class="icon title-icon icon-bollettini_postali_sportello"></i><span
                                    class="title-text">Bollettino postale</span><i class="icon icon-arrow_down"></i><i
                                            class="icon icon-arrow_up"></i></a>
                    </h4>
                </div>
                <?php
                $authPrefix = "bollettino";
                $authMsgOK = "";
                $authCustomMsgOK = "<strong>Operazione completata correttamente</strong><br>Riceverai un'email di conferma del pagamento del bollettino";
                $authBtnRepeat = "Paga un nuovo bollettino";
                ?>
                <div id="collapseOps4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headerOps4">
                    <div class="panel-body">
                        <div id="<?php echo $authPrefix ?>Carousel" class="carouselPlus" data-loop="false"
                             data-variableHeight="true">
                            <div class="carouselPlusPages">
                                <div id="<?php echo $authPrefix ?>Page1" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("form_bollettino.php"); ?>
                                    </div>
                                </div>
                                <div id="<?php echo $authPrefix ?>Page1Bis" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("form_bollettino_bis.php"); ?>
                                    </div>
                                </div>
                                <div id="<?php echo $authPrefix ?>Page2" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("autorizzazione_bollettino.php"); ?>
                                    </div>
                                </div>
                                <div id="<?php echo $authPrefix ?>Page3" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("conferma.php"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headerOps5">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionOps" href="#collapseOps5"
                           aria-expanded="false" aria-controls="collapseOps5"><i
                                    class="icon title-icon icon-bollo_auto_sportello"></i><span class="title-text">Bollo auto</span><i
                                            class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
                    </h4>
                </div>
                <?php
                $authPrefix = "bollo";
                $authMsgOK = "";
                $authCustomMsgOK = "<strong>Operazione completata correttamente</strong><br><a href=\"javascript:\" id=\"bolloRicevuta\">Stampa la ricevuta</a>.";
                $authBtnRepeat = "Paga un altro bollo auto";
                ?>
                <div id="collapseOps5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headerOps5">
                    <div class="panel-body">
                        <div id="<?php echo $authPrefix ?>Carousel" class="carouselPlus" data-loop="false"
                             data-variableHeight="true">
                            <div class="carouselPlusPages">
                                <div id="<?php echo $authPrefix ?>Page1" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("form_bollo.php"); ?>
                                    </div>
                                </div>
                                <div id="<?php echo $authPrefix ?>Page2" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("autorizzazione_bollo.php"); ?>
                                    </div>
                                </div>
                                <div id="<?php echo $authPrefix ?>Page3" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("conferma.php"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headerOps6">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionOps" href="#collapseOps6"
                           aria-expanded="false" aria-controls="collapseOps6"><i
                                    class="icon title-icon icon-ricarica_atm_sportello"></i><span class="title-text">Abbonamento ATM</span><i
                                            class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i></a>
                    </h4>
                </div>
                <?php
                $authPrefix = "atm";
                $authMsgOK = "";
                $authCustomMsgOK = "<strong>Operazione completata correttamente</strong><br>Riceverai un'email a conferma dell'operazione.<br>Puoi verificare in ogni momento lo stato dell'operazione da te inserita alla pagina <a href=\"javascript:\" id=\"dispoDetailLinkATMb\">esito disposizioni</a>.<br>Se lo desideri, puoi salvare o stampare la <a href=\"javascript:\" id=\"ricevutaLinkATMb\">ricevuta di pagamento</a>.<br>";
                $authBtnRepeat = "Paga un altro abbonamento";
                ?>
                <div id="collapseOps6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headerOps6">
                    <div class="panel-body">
                        <div id="<?php echo $authPrefix ?>Carousel" class="carouselPlus" data-loop="false"
                             data-variableHeight="true">
                            <div class="carouselPlusPages">
                                <div id="<?php echo $authPrefix ?>Page1" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("form_atm.php"); ?>
                                    </div>
                                </div>
                                <div id="<?php echo $authPrefix ?>Page1Bis" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("form_atm_bis.php"); ?>
                                    </div>
                                </div>
                                <div id="<?php echo $authPrefix ?>Page2" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("autorizzazione_atm.php"); ?>
                                    </div>
                                </div>
                                <div id="<?php echo $authPrefix ?>Page3" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("conferma.php"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headerOps7">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionOps" href="#collapseOps7"
                           aria-expanded="false" aria-controls="collapseOps7"><i
                                    class="icon title-icon icon-bollettini_postali_sportello"></i><span
                                    class="title-text">MAV e RAV</span><i class="icon icon-arrow_down"></i><i
                                            class="icon icon-arrow_up"></i></a>
                    </h4>
                </div>
                <?php
                $authPrefix = "mavrav";
                $authMsgOK = "";
                $authCustomMsgOK = "<span id=\"mavravEsito\"></span>";
                $authBtnRepeat = "Paga un altro bollettino";
                ?>
                <div id="collapseOps7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headerOps7">
                    <div class="panel-body">
                        <div id="<?php echo $authPrefix ?>Carousel" class="carouselPlus" data-loop="false"
                             data-variableHeight="true">
                            <div class="carouselPlusPages">
                                <div id="<?php echo $authPrefix ?>Page1" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("form_mavrav.php"); ?>
                                    </div>
                                </div>
                                <div id="<?php echo $authPrefix ?>Page2" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("autorizzazione_mavrav.php"); ?>
                                    </div>
                                </div>
                                <div id="<?php echo $authPrefix ?>Page3" class="carouselPlusPage">
                                    <div class="sectioncont">
                                        <?php include("conferma.php"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="accordionOpsLoading" class="loadingLayer"></div>
        <?php if ($consultare): ?>
            <div class="boxConsultare">
                <div class="boxConsultareWrap">
                    <div class="boxConsultareMsg">
                        <section class="boxesitoWrap">
                            <div class="boxesito attenzione">
                                <div class="text">
                                    <p class="note">Per utilizzare le funzioni veloci accedi in modalit&agrave; &quot;Consultare
                                        e Disporre&quot;.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        <?php endif ?>
    </div>
</article>

<script type="text/javascript">
    overlayerConsultare = <?php echo ($consultare) ? 'true' : 'false'; ?>;
</script>
