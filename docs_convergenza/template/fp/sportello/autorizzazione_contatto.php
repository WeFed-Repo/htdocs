<?php
global $cellPhone;
global $authPrefix;
global $authMsgKO;
global $authMsgOK;
global $authCustomMsgOK;
?>

<div class="spBottWrap contOverflow">
    <div class="wrapTrasferisci">
        <div class="spBottBox">
            <!-- ANTIFRODE SMASH -->
            <form class="<?php echo $authPrefix ?>Page2FormSmashSMS contattoFormSmashSMS formGeneric" style="display: none">
                <div class="form-group requiredField">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>Per proseguire con la disposizione è necessario inserire una nuova OTP SMS. Clicca su &quot;Genera Password&quot; per ricevere il codice</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row spBtns">
                    <div class="col-sm-4"><a href="javascript:" class="spBack"><i
                                    class="icon icon-arrow_trading_right icon-rotate-180"></i></a></div>
                    <div class="col-sm-8"><a href="javascript:"
                                             class="btn btn-primary btn-full <?php echo $authPrefix ?>Page2SubmitSmashSMS">Genera password</a>
                    </div>
                </div>
            </form>
            <form class="<?php echo $authPrefix ?>Page2FormSmash contattoFormSmash formGeneric" style="display: none">
                <div class="form-group requiredField">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="control-label">Codice OTP ricevuto via SMS</label>
                            <input type="text" class="form-control <?php echo $authPrefix ?>Page2InputSmash"
                                   maxlength="6" aria-label="Codice OTP ricevuto via SMS"/>
                        </div>
                    </div>
                </div>
                <div class="row spBtns">
                    <div class="col-sm-6"><a href="javascript:" class="spBack"><i
                                    class="icon icon-arrow_trading_right icon-rotate-180"></i></a></div>
                    <div class="col-sm-6"><a href="javascript:"
                                             class="btn btn-primary btn-full <?php echo $authPrefix ?>Page2SubmitSmash">Prosegui</a>
                    </div>
                </div>
            </form>

            <!-- TOKEN FISICO -->
            <form class="<?php echo $authPrefix ?>Page2FormToken contattoFormToken formGeneric" style="display: none">
                <div class="form-group requiredField">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="control-label"><strong>Codice</strong> generato dal tuo token</label>
                            <input type="text" class="form-control <?php echo $authPrefix ?>Page2InputToken"
                                   maxlength="6" aria-label="Codice OTP generato dal token"/>
                        </div>
                    </div>
                </div>
                <div class="row spBtns">
                    <div class="col-sm-6"><a href="javascript:" class="spBack"><i
                                    class="icon icon-arrow_trading_right icon-rotate-180"></i></a></div>
                    <div class="col-sm-6"><a href="javascript:"
                                             class="btn btn-primary btn-full <?php echo $authPrefix ?>Page2SubmitToken">Prosegui</a>
                    </div>
                </div>
            </form>

            <!-- APP -->
            <form class="<?php echo $authPrefix ?>Page2FormApp contattoFormApp formGeneric" style="display: none">
                <div class="<?php echo $authPrefix ?>Page2FormAppOK appOK">
                    <p>
                        <strong>Autorizza l'operazione dall'app</strong>
                    </p>
                    <ol>
                        <li>Fai tap sulla notifica di richiesta autorizzazione che hai ricevuto</li>
                        <li>Procedi inserendo il codice pin o utilizza il fingerprint</li>
                    </ol>
                    <div class="row">
                        <div class="col-sm-2"><a href="javascript:" class="spBack"><i
                                        class="icon icon-arrow_trading_right icon-rotate-180"></i></a></div>
                        <div class="col-sm-10">
                            Per inserire direttamente la &quot;password usa e getta&quot;
                            <a href="javascript:" class="<?php echo $authPrefix ?>Page2SubmitChange">clicca qui</a>
                        </div>
                    </div>
                </div>
                <div class="<?php echo $authPrefix ?>Page2FormAppKO">
                    <p class="form-group">
                        <a type="button" href="javascript:"
                           class="btn btn-primary btn-full <?php echo $authPrefix ?>Page2BackToAppOK">Riattiva la notifica sull'app</a></p>
                    <div class="strSeparator"><span>oppure</span></div>
                    <div class="form-group requiredField">
                        <p><span>Inserisci il <strong>codice</strong> generato dall'app</span><br>
                            <input type="text" class="form-control <?php echo $authPrefix ?>Page2InputApp"
                                   maxlength="6" aria-label="Token generato dall'app"/>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><a href="javascript:" class="spBack"><i
                                        class="icon icon-arrow_trading_right icon-rotate-180"></i></a></div>
                        <div class="col-sm-6 col-sm-offset-2"><a type="button" href="javascript:"
                                                                 class="btn btn-primary btn-full <?php echo $authPrefix ?>Page2SubmitAppKO">Prosegui</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
