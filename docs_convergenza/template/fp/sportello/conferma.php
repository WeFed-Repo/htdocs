<?php
global $authMsgOK;
global $authCustomMsgOK;
global $authBtnRepeat;
?>

<!--esito positivo-->
<div class="esitoOK">
    <div class="boxesito positivo">
        <div class="text">
            <p><?php if ($authMsgOK != "") { ?>
                    <strong><?php echo $authMsgOK ?> correttamente</strong>
                <?php } else { ?>
                    <?php echo $authCustomMsgOK ?>
                <?php } ?></p>
        </div>
    </div>

    <div class="form-group btnWrapper">
        <div class="btn-align-right">
            <a type="button" class="btn btn-primary spReset" href="javascript:"><?php echo $authBtnRepeat ?></a>
        </div>
        <br class="clear">
    </div>
</div>

<!--esito negativo-->
<div class="esitoKO" style="display: none;">
    <div class="boxesito negativo">
        <div class="text">
            <p><strong>Non &egrave; stato possibile eseguire <?php echo $authMsgOK ?>.</strong></p>
        </div>
    </div>

    <div class="form-group btnWrapper">
        <div class="btn-align-left">
            <a type="button" class="btn btn-default spRetry" href="javascript:">Riprova</a>
            <a type="button" class="btn btn-default spReset" href="javascript:">Indietro</a>
        </div>
        <br class="clear">
    </div>
</div>
