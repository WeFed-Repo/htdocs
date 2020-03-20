<?php
global $strongAuth;
global $authPrefix;
?>
<form id="<?php echo $authPrefix ?>Form" class="formGenerico">
    <div class="form-group">
        <div class="row">
            <div class="col-sm-12">
                <label for="inputRegione" class="control-label">Regione o Prov. autonoma</label>
                <select name="regione" id="inputRegione" class="form-control">
                    <option>Seleziona</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                <label for="inputVeicolo" class="control-label">Tipo di veicolo</label>
                <select name="veicolo" id="inputVeicolo" class="form-control">
                    <option>Seleziona</option>
                </select>
            </div>
            <div class="col-sm-6">
                <label for="inputTarga" class="control-label">Numero di targa</label>
                <input type="text" name="targa" id="inputTarga" maxlength="10" class="form-control">
            </div>
        </div>
    </div>

    <hr class="btnSeparator">

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
