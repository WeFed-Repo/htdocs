<form class="<?php echo $authPrefix ?>Form formGenerico">
    <div class="form-group">
        <label class="control-label-output">Numero carta da ricaricare</label>
        <span class="inputBenCjContatto output">&nbsp;</span>
    </div>

    <div class="form-group requiredField">
        <label class="control-label">Importo ricarica &euro;</label>
        <input type="text" name="importo" class="inputImportoCjContatto form-control clear-x" maxlength="12"
               data-tooltip="importo massimo 2500,00 &euro;" aria-label="Importo ricarica">
    </div>

    <div class="form-group">
        <a type="button" class="btn btn-primary btn-full <?php echo $authPrefix ?>Page1Submit" href="javascript:">Prosegui</a>
    </div>
</form>
