<?php
global $strongAuth;
global $authPrefix;
?>
<form id="<?php echo $authPrefix ?>Form" class="formGenerico">
    <!--CASO RUBRICA BENEFICIARIO-->
    <div id="boxBenEsistente" class="form-group">
        <div class="row">
            <div class="col-sm-7">
                <label for="inputBen" class="control-label">Beneficiario</label>
                <select name="beneficiario" id="inputBen" class="form-control combobox" data-required="true"></select>
            </div>
            <div class="col-sm-5">
                <label class="control-label-output">&nbsp;</label>
                <div class="checkbox inline">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="salvaContatto">
                        <span class="text">salva in rubrica</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!--FINE CASO RUBRICA BENEFICIARIO-->

    <div class="form-group">
        <div class="row">
            <div class="col-sm-7">
                <label for="inputIBAN" class="control-label">IBAN</label>
                <span id="outputIBAN" class="output textinline" style="display:none;"></span>
                <input type="text" name="iban" id="inputIBAN"
                       data-tooltip="Non &egrave; possibile in questa sezione inserire bonifici verso Paesi non aderenti all'area Sepa"
                       class="form-control clear-x" maxlength="35">
            </div><!--/span-->
            <div class="col-sm-5">
                <label for="inputImporto" class="control-label">Importo</label>
                <input type="text" name="importo" id="inputImporto" data-tooltip="max 12500,00 &euro;" maxlength="12"
                       class="form-control clear-x">
            </div><!--/span-->
        </div><!--/row-->
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-7">
                <label for="inputNazione" class="control-label">Residenza beneficiario</label>
                <select name="nazione" id="inputNazione" class="form-control" data-required="true">
                </select>
            </div><!--/span-->
            <div class="col-sm-5">
                <label for="datepickerBonifico" class="control-label">Data di esecuzione</label>
                <div class="form-inline">
                    <div class="input-group">
                        <input type="text" id="datepickerBonifico" placeholder="gg/mm/aaaa" class="form-control clear-x"><a
                                class="input-group-addon date btn-icon" href="javascript:"><i
                                    class="icon icon-calendar_filled"></i></a>
                    </div>
                </div>
            </div><!--/span-->
        </div><!--/row-->
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-12">
                <label for="inputCausale" class="control-label">Causale</label>
                <input type="text" name="causale" id="inputCausale" maxlength="50" class="form-control clear-x">
            </div><!--/span-->
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
