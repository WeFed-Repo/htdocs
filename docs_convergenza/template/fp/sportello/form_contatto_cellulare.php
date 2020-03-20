<form class="<?php echo $authPrefix ?>Form formGenerico">
    <div class="form-group">
        <label class="control-label-output">Numero da ricaricare</label>
        <span class="inputBenCellContatto output">&nbsp;</span>
    </div>

    <div class="form-group requiredField">
        <label class="control-label">Importo ricarica &euro;</label>
        <select name="importo" class="inputImportoCellContatto form-control" disabled="disabled" aria-label="Importo ricarica">
            <option value="">Scegli</option>
        </select>
    </div>

    <div class="form-group">
        <a type="button" class="btn btn-primary btn-full <?php echo $authPrefix ?>Page1Submit" href="javascript:">Prosegui</a>
    </div>
</form>
