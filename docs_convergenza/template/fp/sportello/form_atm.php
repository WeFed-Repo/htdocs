<?php
global $strongAuth;
global $authPrefix;
?>
<form id="<?php echo $authPrefix ?>Form" class="formGenerico">

    <div id="boxNuovaAtm" class="form-group">
        <div class="row">
            <div class="col-xs-7">
                <label for="inputBenAtm" class="control-label">Numero tessera</label>
                <select id="inputBenAtm" class="form-control combobox" data-required="true"></select>
            </div>
            <div class="col-xs-5">
                <label class="control-label-output">&nbsp;</label>
                <div class="checkbox inline">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="salvaContattoAtm">
                        <span class="text">salva in rubrica</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-12">
                <label for="inputIntestAtm" class="control-label">Intestatario</label>
                <span id="outputIntestAtm" class="output textinline" style="display:none;"></span>
                <input type="text" name="iban" id="inputIntestAtm" class="form-control clear-x" maxlength="50">
            </div><!--/span-->
        </div><!--/row-->
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-10">
                <label class="control-label-output">&nbsp;</label>
                <div class="checkbox inline">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="attTotemReadInput">
                        <span class="text">Confermo di aver compreso che per poter viaggiare &egrave; necessario attivare
						l'abbonamento sui totem presenti in tutte le stazioni della metropolitana o presso i 500 parcometri
						in citt&agrave;.</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <hr class="btnSeparator">

    <div class="row">
        <div class="col-sm-4 col-sm-offset-8"><a type="button" class="btn btn-primary btn-full" href="javascript:"
                                                 id="<?php echo $authPrefix ?>Page1Submit">Prosegui</a></div>
    </div>
</form>