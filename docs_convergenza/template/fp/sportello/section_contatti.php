<article id="boxContact" class="col-xs-12">
    <h4 class="strongTitle">Contatti veloci</h4>

    <div id="boxContactWrap" class="wrapLayer">
        <div class="row">
            <div class="col-sm-6 col-md-4 spPersonCol" data-person-num="0">
                <?php include("contatto.php"); ?>
            </div>
            <div class="col-sm-6 col-md-4 spPersonCol" data-person-num="1">
                <?php include("contatto.php"); ?>
            </div>
            <div class="col-sm-6 col-md-4 spPersonCol" data-person-num="2">
                <?php include("contatto.php"); ?>
            </div>
            <div class="col-sm-6 col-md-4 spPersonCol" data-person-num="3">
                <?php include("contatto.php"); ?>
            </div>
            <div class="col-sm-6 col-md-4 spPersonCol" data-person-num="4">
                <?php include("contatto.php"); ?>
            </div>
            <div class="col-sm-6 col-md-4 spPersonCol" data-person-num="5">
                <?php include("contatto.php"); ?>
            </div>
            <div class="col-sm-6 col-md-4 spPersonAdd" style="display: none;">
                <div class="spPersonWrap">
                    <div class="spPersonBox spPersonBoxAdd">
                        <h4>Aggiungi nuovo contatto</h4>
                        <form id="formAddContatto">
                            <div class="form-group requiredField">
                                <label for="selectAddContatto">Seleziona dalla rubrica i contatti che usi pi&ugrave;
                                    spesso.</label>
                                <select id="selectAddContatto" name="" class="form-control">
                                    <option value="">Seleziona</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <a id="proseguiAddContatto" type="button" class="btn btn-primary btn-full"
                                   href="javascript:">Prosegui</a>
                            </div>
                        </form>
                    </div>
                    <div class="spPersonOpsBox">
                        <div class="spPersonOpsInfo">
                            <div class="spPersonOpsIcon"><i class="icon icon-add"></i></div>
                            <div class="spPersonOpsSep"><i class="icon icon-ellipsis-h"></i></div>
                            <div class="spPersonOpsImgWrap">
                                <div class="spPersonOpsImg"></div>
                            </div>
                            <div class="spPersonOpsName">
                                <span class="spPersonOpsFirstName"></span>
                                <span class="spPersonOpsLastName"></span>
                            </div>
                            <a href="javascript:" class="spPersonOpsClose"><i class="icon icon-close_toolbox"></i></a>
                        </div>
                        <div class="spPersonOpsDetails">
                            <div class="formGenerico">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-3"><label class="control-label-output">IBAN</label></div>
                                        <div class="col-xs-9"><span id="outputSetIbanContatto"
                                                                    class="output ibanVal"></span></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-5"><label class="control-label-output">N. cellulare</label>
                                        </div>
                                        <div class="col-xs-7"><span id="outputSetCellContatto"
                                                                    class="output">&nbsp;</span></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-4"><label class="control-label-output">N. carta</label></div>
                                        <div class="col-xs-8"><span id="outputSetPrepagataContatto" class="output">&nbsp;</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <a type="button" id="proseguiSetContatto" class="btn btn-primary btn-full"
                                       href="javascript:">Prosegui</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="boxContactLoading" class="loadingLayer"></div>

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
</article><!--/span-->

<script type="text/javascript">
    overlayerConsultare = <?php echo ($consultare) ? 'true' : 'false'; ?>;
</script>