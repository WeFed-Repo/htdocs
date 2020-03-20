<?php
global $strongAuth;
global $authPrefix;
?>
<form id="<?php echo $authPrefix ?>FormBis" class="formGenerico">

    <div id="atmInfo">
        <div class="saldoGroup">
            <div class="row">
                <div class="col-xs-5">
                    <span class="saldoLabel">Numero tessera</span>
                </div>
                <div class="col-xs-7">
                    <span class="saldoVal"></span>
                </div>
            </div>
        </div>
        <div class="saldoGroup">
            <div class="row">
                <div class="col-xs-5">
                    <span class="saldoLabel">Intestatario</span>
                </div>
                <div class="col-xs-7">
                    <span class="saldoVal"></span>
                </div>
            </div>
        </div>
        <div class="saldoGroup">
            <div class="row">
                <div class="col-xs-5">
                    <span class="saldoLabel">Servizio</span>
                </div>
                <div class="col-xs-7 atmLogo">
                    <img src="/WB/fe/img/logo_atm.gif" alt="Logo ATM">
                </div>
            </div>
        </div>
    </div>

    <div id="WrapperAbbATM" class="radioWrapper">
        <label for="" class="control-label">Tipo di abbonamento</label><br>
        <div id="WrapperInnerAbbATM" data-error=""></div>
    </div>

    <div class="form-group">
        <div class="row otpMsg" style="display: none;">
            <div class="col-span-12"><span>Ti invieremo un sms con un codice per completare l'operazione</span></div>
        </div>
        <div class="row">
            <div class="col-sm-4"><a type="button" class="btn btn-default btn-full spBack" href="javascript:">Indietro</a></div>
            <div class="col-sm-4 col-sm-offset-4"><a type="button" class="btn btn-primary btn-full" href="javascript:"
                                                     id="<?php echo $authPrefix ?>Page1BisSubmit">Prosegui</a></div>
        </div>
    </div>
</form>
