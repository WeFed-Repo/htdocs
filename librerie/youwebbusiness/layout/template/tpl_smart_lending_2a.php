<h1>
    Richiedi finanziamento: Adeguata verifica
</h1>

<!-- Dati identificativi -->
<div class="mobile-form no-margin-section mb-3">
<section class="mb-3 pb-0">
    <div class="bordered">
        <h3>Campo A - Dati identificativi del titolare del rapporto <?= $i ?></h3>
        <div class="row my-3">
            <div class="col-12">
                <div class="row">
                    <div class="col d-flex">
                        <strong class="pr-2">Denom. / Rag.&nbsp;sociale</strong> 
                        <span>Nome azienda</span>
                    </div>
                    <div class="col d-flex">
                        <strong class="pr-2">Partita IVA</strong> 
                        <span>2345678901234</span>
                    </div>
                    <div class="col d-flex">
                        <strong class="pr-2">Codice Fiscale</strong> 
                        <span>XXXXXX00X00X000X</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <label class="control-label">Paese Società Controllante</label>
                <select  class="form-control">
                    <option selected></option>
                </select>
            </div>
        </div>
    </div> 
</section>
</div>
<!-- END Dati identificativi -->

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

<!-- Pulsantiera -->
<div class="w-100">
    <a href="strutt_priv.php?tpl=tpl_smart_lending.php" class="btn btn-primary float-right">Contiunua</a>
</div>
<!-- Fine pulsantiera -->