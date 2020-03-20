<?php
global $authMsgOK;
global $authCustomMsgOK;
global $authBtnRepeat;
?>

<!--esito positivo-->
<div class="esitoOK" style="display: none;">
    <div class="boxesito positivo">
        <div class="text">
            <p><?php if ($authMsgOK != "") { ?>
                    <strong><?php echo $authMsgOK ?> correttamente</strong>
                <?php } else { ?>
                    <?php echo $authCustomMsgOK ?>
                <?php } ?></p>
        </div>
    </div>

    <div class="row spBtns">
        <div class="col-sm-12"><a type="button" class="btn btn-primary btn-full spReset"
                                  href="javascript:"><?php echo $authBtnRepeat ?></a></div>
    </div>
</div>

<!--esito negativo-->
<div class="esitoKO">
    <div class="boxesito negativo">
        <div class="text">
            <p><strong>Non &egrave; stato possibile eseguire l'operazione.</strong></p>
        </div>
    </div>

    <div class="row spBtns">
        <div class="col-sm-12"><a type="button" class="btn btn-default btn-full spRetry" href="javascript:">Riprova</a></div>
        <div class="col-sm-12"><a type="button" class="btn btn-default btn-full spReset" href="javascript:">Indietro</a></div>
    </div>
</div>
