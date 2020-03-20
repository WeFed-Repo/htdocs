<h1>
    Richiedi finanziamento: Adeguata verifica
</h1>

<!-- Dati titolare effettivo -->
<div class="mobile-form no-margin-section mb-3">
<section class="mb-3 pb-0">
    <div class="bordered">
        <?php for ($i=1; $i <= 3; $i++) {  ?>
            <h3>Campo A - Dati titolare effettivo <?= $i ?></h3>
            <div class="row my-3">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6 d-flex">
                            <strong class="pr-2">Nome</strong> 
                            <span>Mario</span>
                        </div>
                        <div class="col d-flex">
                            <strong class="pr-2">Cognome</strong> 
                            <span>Rossi</span>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <strong class="pr-2">Codice Fiscale</strong> 
                    <span>XXXXXX00X00X000X</span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="control-label">Relazione tra Cliente e Titolare effettivo</label>
                    <select  class="form-control">
                        <option selected></option>
                    </select>
                </div>
                <div class="col">
                <label class="control-label">Note</label>
                <div class="input-group">
                    <input type="text" class="form-control" />
                </div>
                </div>
            </div>
        <?php } ?>
    </div> 
</section>
</div>
<!-- END Dati titolare effettivo -->

<!-- Caratteristiche rapporto -->
<div class="mobile-form no-margin-section mb-3">
<section class="mb-3 pb-0">
    <div class="bordered">
        <h3>Campo B - Caratteristiche rapporto</h3>
        <div class="row mb-3">
            <div class="col-md-4">
                <label class="control-label">Scopo prevalente del rapporto</label>
            <select  class="form-control">
                <option selected></option>
            </select>
            </div>
            <div class="col">
            <label class="control-label">Note</label>
            <div class="input-group">
                <input type="text" class="form-control" />
            </div>
            </div>
        </div>
    </div> 
</section>
</div>
<!-- END Caratteristiche rapporto -->

<!-- Informazione sul titolare del rapporto -->
<div class="mobile-form no-margin-section mb-3">
<section class="mb-3 pb-0">
    <div class="bordered p-3">
        <h3>Campo C - Informazione sul titolare del rapporto / dell'operazione</h3>
        <?php for ($i=1; $i <= 4; $i++) {  ?>
        <div class="d-block d-md-flex pt-3 pb-3 pb-md-0">
            <div class="flex-grow-1 pb-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, ullam, consequatur quisquam.
            </div>
            <div class="d-flex">
                <div class="px-3">
                    <div class="form-check radio mb-0">
                        <input class="form-check-input" type="radio" name="campo<?= $i ?>" value="">
                        <label class="form-check-label">SI</label>
                    </div>
                </div>
                <div class="px-3">
                    <div class="form-check radio mb-0">
                        <input class="form-check-input" type="radio" name="campo<?= $i ?>" value="">
                        <label class="form-check-label">NO</label>
                    </div>
                </div>
            </div>
        </div>
        <?php }  ?>
    </div> 
</section>
</div>
<!-- END Informazione sul titolare del rapporto -->

<!-- Dati esecutore -->
<div class="mobile-form no-margin-section ""  mb-3">
<section class="mb-3">
    <div class="bordered p-3">
        <h3>Campo D - Dati esecutore</h3>
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">Informazioni sull'esecutore per conto del titolare</label>
                <select  class="form-control">
                    <option selected></option>
                </select>
            </div>
            <div class="col">
                <label class="control-label">Attività Cod. T.A.E.</label>
                <select  class="form-control">
                    <option selected></option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">Provincia</label>
                <select  class="form-control">
                    <option selected></option>
                </select>
            </div>
            <div class="col">
                <label class="control-label">Paese dell'attività economica prevalente</label>
                <select  class="form-control">
                    <option selected></option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">Paesi relazioni di lavoro/commerciali</label>
                <select  class="form-control">
                    <option selected></option>
                </select>
            </div>
            <div class="col">
                <label class="control-label">Paesi relazioni di lavoro/commerciali</label>
                <select  class="form-control">
                    <option selected></option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label class="control-label">Relazioni tra cliente ed esecutore</label>
                <select  class="form-control">
                    <option selected></option>
                </select>
            </div>
            <div class="col"> </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="control-label">Note</label>
                <div class="input-group">
                    <input type="text" class="form-control" />
                </div>
            </div>
        </div>
    </div> 
</section>
</div>
<!-- END Dati esecutore -->

<!-- Pulsantiera -->
<div class="w-100">
    <a href="strutt_priv.php?tpl=tpl_smart_lending_3.php" class="btn btn-primary float-right">Conferma</a>
</div>
<!-- Fine pulsantiera -->