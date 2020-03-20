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
            <!-- ANTIFRODE SMASH SMS -->
            <form id="<?php echo $authPrefix ?>Page2FormSmashSMS" class="formGeneric" style="display: none">
                <div class="form-group requiredField">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>Per proseguire con la disposizione è necessario inserire una nuova OTP SMS.
                                Clicca su &quot;Genera Password&quot; per ricevere il codice</p>
                        </div>
                    </div>
                </div>
                <hr class="btnSeparator">
                <div class="row">
                    <div class="col-sm-4"><a type="button" class="btn btn-default btn-full spBack"
                                             href="javascript:">Indietro</a></div>
                    <div class="col-sm-6 col-sm-offset-2"><a type="button" class="btn btn-primary btn-full" href="javascript:"
                                                             id="<?php echo $authPrefix ?>Page2SubmitSmashSMS">Genera password</a>
                    </div>
                </div>
            </form>

            <!-- ANTIFRODE SMASH OTP -->
            <form id="<?php echo $authPrefix ?>Page2FormSmash" class="formGeneric" style="display: none">
                <div class="form-group requiredField">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="control-label" for="<?php echo $authPrefix ?>Page2InputSmash">Inserisci il <strong>codice</strong> OTP ricevuto via SMS</label>
                            <input type="text" class="form-control" id="<?php echo $authPrefix ?>Page2InputSmash"
                                   maxlength="6"/>
                        </div>
                    </div>
                </div>
                <hr class="btnSeparator">
                <div class="row">
                    <div class="col-sm-4"><a type="button" class="btn btn-default btn-full spBack"
                                             href="javascript:">Indietro</a></div>
                    <div class="col-sm-4 col-sm-offset-4"><a type="button" class="btn btn-primary btn-full" href="javascript:"
                                                             id="<?php echo $authPrefix ?>Page2SubmitSmash">Prosegui</a>
                    </div>
                </div>
            </form>

            <!-- TOKEN FISICO -->
            <form id="<?php echo $authPrefix ?>Page2FormToken" class="formGeneric" style="display: none">
                <h4>Conferma richiesta</h4>
                <div class="form-group requiredField">
                    <div class="row">
                        <div class="col-sm-12">
                            <label class="control-label" for="<?php echo $authPrefix ?>Page2InputToken">Per autorizzare l'operazione, inserisci il codice generato dal tuo token.</label>
                            <ol>
                                <li>Sblocca il token con il Pin</li>
                                <li>Premi il tasto 1 del token per generare il codice OTP</li>
                                <li>Inserisci il codice OTP visualizzato sul display del token</li>
                            </ol>
                            <input type="text" class="form-control" id="<?php echo $authPrefix ?>Page2InputToken"
                                   maxlength="6"/>
                        </div>
                    </div>
                </div>
                <hr class="btnSeparator">
                <div class="row">
                    <div class="col-sm-4"><a type="button" class="btn btn-default btn-full spBack"
                                             href="javascript:">Indietro</a></div>
                    <div class="col-sm-4 col-sm-offset-4"><a type="button" class="btn btn-primary btn-full" href="javascript:"
                                                             id="<?php echo $authPrefix ?>Page2SubmitToken">Prosegui</a>
                    </div>
                </div>
            </form>

            <!-- APP -->
            <form id="<?php echo $authPrefix ?>Page2FormApp" class="formGeneric" style="display: none">
                <div id="<?php echo $authPrefix ?>Page2FormAppOK" class="appOK">
                    <p>
                        <strong>Autorizza l'operazione dall'app</strong>
                    </p>
                    <ol>
                        <li>Fai tap sulla notifica di richiesta autorizzazione che hai ricevuto</li>
                        <li>Procedi inserendo il codice pin o utilizza il fingerprint</li>
                    </ol>
                    <div class="row">
                        <div class="col-sm-3"><a type="button" class="btn btn-default btn-full spBack" href="javascript:">Indietro</a>
                        </div>
                        <div class="col-sm-8 col-sm-offset-1">
                            Per inserire direttamente la &quot;password usa e getta&quot;
                            <a href="javascript:" id="<?php echo $authPrefix ?>Page2SubmitChange">clicca qui</a>
                        </div>
                    </div>
                </div>
                <div id="<?php echo $authPrefix ?>Page2FormAppKO">
                    <p>
                        <strong>Autorizza l'operazione dall'app</strong>
                    </p>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-8">
                                Non hai visualizzato la notifica push sull'app?
                            </div>
                            <div class="col-sm-4">
                                <a type="button" class="btn btn-primary btn-full" href="javascript:"
                                   id="<?php echo $authPrefix ?>Page2BackToAppOK">Riattivala</a>
                            </div>
                        </div>
                    </div>
                    <div class="strSeparator"><span>oppure</span></div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-8">
                                <span>Inserisci il <strong>codice</strong> ottenuto dalla funzione &quot;genera OTP&quot; sull'app</span>
                            </div>
                            <div class="col-sm-4">
                                <label class="control-label" for="<?php echo $authPrefix ?>Page2InputApp">Codice</label>
                                <input type="text" class="form-control" id="<?php echo $authPrefix ?>Page2InputApp"
                                       maxlength="6"/>
                            </div>
                        </div>
                    </div>
                    <hr class="btnSeparator">
                    <div class="row">
                        <div class="col-sm-4"><a type="button" class="btn btn-default btn-full spBack" href="javascript:">Indietro</a>
                        </div>
                        <div class="col-sm-4 col-sm-offset-4"><a type="button" class="btn btn-primary btn-full"
                                                                 href="javascript:"
                                                                 id="<?php echo $authPrefix ?>Page2SubmitAppKO">Prosegui</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
