<?php
global $strongAuth;
global $authPrefix;
?>
<form id="<?php echo $authPrefix ?>Form" class="formGenerico">
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                <label for="selectMavrav" class="control-label">Tipo pagamento</label>
                <select name="tipoPagamentoMavrav" id="selectMavrav" class="form-control">
                    <option>Mav</option>
                    <option>Rav</option>
                </select>
            </div>
            <div class="col-sm-6">
                <label for="codiceMavrav" class="control-label">Codice Mav/Rav</label>
                <input type="text" name="codiceMavrav" id="codiceMavrav" maxlength="17" class="form-control clear-x">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                <label for="inputImportoMavrav" class="control-label">Importo</label>
                <input id="inputImportoMavrav" name="inputImportoMavrav" type="text" class="form-control">
            </div>
            <div class="col-sm-6">
                <label for="datepickerMavRav" class="control-label">Data di esecuzione</label>
                <div class="form-inline">
                    <div class="input-group">
                        <input type="text" id="datepickerMavRav" placeholder="gg/mm/aaaa" class="form-control clear-x"><a
                                class="input-group-addon date btn-icon" href="javascript:"><i
                                    class="icon icon-calendar_filled"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-8"><span class="otpMsg" style="display: none;">Ti invieremo un sms con un codice per completare l'operazione</span>
            </div>
            <div class="col-sm-4">
                <div class="btnWrapper">
                    <div class="btn-align-right">
                        <a type="button" id="<?php echo $authPrefix ?>Page1Submit" class="btn btn-primary"
                           href="javascript:">Prosegui</a>
                    </div>
                    <br class="clear">
                </div>
            </div>
        </div>
    </div>
</form>
