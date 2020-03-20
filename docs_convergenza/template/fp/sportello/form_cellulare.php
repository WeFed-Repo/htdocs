<?php
global $strongAuth;
global $authPrefix;
?>
<form id="<?php echo $authPrefix ?>Form" class="formGenerico">

    <div id="boxBenEsistenteCellulare" class="form-group">
        <div class="row">
            <div class="col-xs-7">
                <label for="inputBenCellulare" class="control-label">Numero cellulare</label>
                <select id="inputBenCellulare" class="form-control combobox" data-required="true"></select>
            </div>
            <div class="col-xs-5">
                <label class="control-label-output">&nbsp;</label>
                <div class="checkbox inline">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="salvaContattoCellulare">
                        <span class="text">salva in rubrica</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->

    <div class="form-group">
        <div class="row">
            <div class="col-sm-12">
                <label for="inputIntestCellulare" class="control-label">Intestatario</label>
                <span id="outputIntestCellulare" class="output textinline" style="display:none;"></span>
                <input type="text" name="iban" id="inputIntestCellulare" class="form-control clear-x" maxlength="50">
            </div><!--/span-->
        </div><!--/row-->
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-xs-7">
                <label for="inputOperCellulare" class="control-label">Operatore</label>
                <span id="outputOperCellulare" class="output textinline" style="display: none;"></span>
                <select id="inputOperCellulare" class="form-control">
                    <option value="" selected>Scegli</option>
                    <option value="POSTE">POSTE MOBILE</option>
                    <option value="TIM">TIM</option>
                    <option value="TRE">TRE</option>
                    <option value="VODAF">VODAFONE</option>
                    <option value="WIND">WIND</option>
                </select>
            </div>
            <div class="col-xs-5">
                <label for="inputImportoCellulare" class="control-label">Importo</label>
                <select id="inputImportoCellulare" disabled="disabled" class="form-control" name="importo">
                    <option value="0">Scegli</option>
                </select>
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