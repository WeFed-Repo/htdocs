<?php
global $strongAuth;
global $authPrefix;
?>
<form id="<?php echo $authPrefix ?>Form" class="formGenerico">
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                <div class="radio inline">
                    <label class="textWrapper">
                        <input type="radio" value="premarcato" name="inputTipoBollettino" id="inputBollettinoPre">
                        <span class="text">Bollettino premarcato<br>(gi&agrave; compilato)</span>
                    </label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="radio inline">
                    <label class="textWrapper">
                        <input type="radio" value="bianco" name="inputTipoBollettino" id="inputBollettinoWhite">
                        <span class="text">Bollettino bianco<br>(da compilare)</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div id="boxBollettino" class="arrHidden">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6" id="boxAccreditoBollettino">
                    <label for="inputBenBollettino" class="control-label">C/C postale di accredito</label>
                    <input type="tel" name="inputAccreBollettino" id="inputBenBollettino" class="form-control clear-x"
                           maxlength="20">
                </div>
                <div class="col-sm-6">
                    <label for="inputImportoBollettino" class="control-label">Importo</label>
                    <input type="text" name="inputImportoBollettino" id="inputImportoBollettino"
                           class="form-control clear-x" maxlength="12">
                </div>
            </div>
        </div>

        <div class="form-group" id="boxBollettinoPre" style="display:none">
            <div class="row">
                <div class="col-sm-6">
                    <label for="codiceBoll" class="control-label">Codice bollettino</label>
                    <input type="tel" maxlength="18" name="codiceBoll" id="codiceBoll" class="form-control clear-x">
                </div>
                <div id="tipoBollBox" class="col-sm-6">
                    <label class="control-label" for="tipoBoll">Tipo bollettino</label>
                    <select type="text" id="tipoBoll" name="tipoBoll" class="form-control" aria-label="Codice bollettino">
                        <option value="896">896</option>
                        <option value="674">674</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group" id="boxBollettinoWhite" style="display:none">
            <div class="row">
                <div class="col-sm-6">
                    <label for="benBollettino" class="control-label">Intestato a</label>
                    <input type="text" name="benBollettino" id="benBollettino" class="form-control clear-x"
                           maxlength="50">
                </div>
                <div class="col-sm-6">
                    <label for="causaleBollettino" class="control-label">Causale</label>
                    <input type="text" name="causaleBollettino" id="causaleBollettino" class="form-control clear-x"
                           maxlength="50">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label for="datepickerBollettino" class="control-label">Data di esecuzione</label>
                    <div class="form-inline">
                        <div class="input-group">
                            <input type="text" id="datepickerBollettino" placeholder="gg/mm/aaaa" class="form-control clear-x"><a
                                    class="input-group-addon date btn-icon" href="javascript:"><i
                                        class="icon icon-calendar_filled"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="btnSeparator">

        <div class="row">
            <div class="col-sm-4 col-sm-offset-8"><a type="button" class="btn btn-primary btn-full" href="javascript:"
                                                     id="<?php echo $authPrefix ?>Page1Submit">Prosegui</a></div>
        </div>
    </div>
</form>
