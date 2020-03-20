<form class="<?php echo $authPrefix ?>Form formGenerico">
    <div class="form-group requiredField">
        <label class="control-label">Importo del bonifico &euro;</label>
        <div class="form-inline">
            <div class="input-group">
                <input type="hidden" name="importoPref" class="inputImportoPrefContatto" aria-label="">
                <input type="text" name="importo" class="inputImportoContatto form-control clear-x"
                       data-tooltip="max 12500,00 &euro;" maxlength="12" aria-label="Importo del bonifico">
                <div class="input-group-addon"><a href="javascript:" class="no-underline btn-icon"><i
                                class="icon icon-star_fill"></i></a></div>
            </div>
        </div>
    </div>

    <div class="form-group requiredField">
        <label class="control-label">Causale del bonifico</label>
        <input type="text" name="causale" class="form-control clear-x inputCausaleContatto" maxlength="50"
               data-error="" aria-label="Causale del bonifico">
    </div>

    <div class="form-group">
        <a type="button" class="btn btn-primary btn-full <?php echo $authPrefix ?>Page1Submit" href="javascript:">Prosegui</a>
    </div>
</form>
