<?php
global $strongAuth;
global $authPrefix;
?>
<form id="<?php echo $authPrefix ?>Form" class="formGenerico">

    <div id="boxBenEsistentePrepagata" class="form-group">
        <div class="row">
            <div class="col-xs-7">
                <label for="inputBenPrepagata" class="control-label">Numero carta</label>
                <select id="inputBenPrepagata" class="form-control combobox" data-required="true"></select>
            </div>
            <div class="col-xs-5">
                <label class="control-label-output">&nbsp;</label>
                <div class="checkbox inline">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="salvaContattoPrepagata">
                        <span class="text">salva in rubrica</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->

    <div id="boxIntestPrepagata" class="form-group" style="display: none;">
        <div class="row">
            <div class="col-sm-12">
                <label for="outputIntestPrepagata" class="control-label">Intestatario</label>
                <span id="outputIntestPrepagata" class="output textinline"></span>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-xs-7">
                <label for="inputTypePrepagata" class="control-label">Tipo carta</label>
                <span id="outputTypePrepagata" class="output textinline" style="display: none;"></span>
                <select id="inputTypePrepagata" class="form-control">
                    <option value="" selected>Scegli</option>
                    <option value="jeans" data-tipo="jeans">Carta Je@ns</option>
                    <option value="kjeans" data-tipo="inrete">Carta Kje@ns</option>
                </select>
            </div>
            <div class="col-xs-5">
                <label for="inputImportoPrepagata" class="control-label">Importo</label>
                <input type="text" name="importo" id="inputImportoPrepagata" class="form-control clear-x" maxlength="12"
                       data-tooltip="importo massimo 2500,00 &euro;">
            </div>
        </div><!--/row-->
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