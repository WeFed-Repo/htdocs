<div class="d-none d-lg-block">
    <!-- testata filtri -->
    <section class="bordered p-3 m-0">
    <div class="row d-flex justify-content-between align-items-center">
        <div class="col col-md-10">
        <div class="row">
            <div class="col col-md-5 col-lg-5">
            <span class="dati-key">Ragione sociale:</span> <span class="dati-value">Tutti</span>
            </div>
            <div class="col col-md-7 col-lg-7">
            <span class="dati-key">Dossier:</span> <span class="dati-value">Tutti</span>
            </div>
            <div class="col col-md-2 d-none d-sm-block d-md-none align-self-end">
            <a href="javascript:void(0)" class="btn btn-white fl-right mb-0 mb-md-3 mb-lg-0" data-filter-button="filter-dossier-desktop">
                <i class="icon icon-arrow_down" title="icon-aggiorna"></i> Cambia
            </a>
            </div>
        </div>
        </div>
        <div class="col col-lg-2 d-none d-lg-block">
        <a href="javascript:void(0)" class="btn btn-white fl-right mb-0" data-filter-button="filter-dossier-desktop">
            <i class="icon icon-arrow_down" title="icon-aggiorna"></i> Cambia
        </a>
        </div>
    </div>
    </section>
    <!-- parte a scomparsa dei filtri -->
    <section data-filter-form="filter-dossier-desktop" style="display:none;" data-toggle-filter-parent>
    <!-- scelte primarie filtri -->
    <div data-toggle-filter-elem="semplice">

        <!-- FILTRO SEMPLICE -->
        <div class="bordered no-b-t">
        <form class="form-grid mb-3">
            <div class="form-row">
            <div class="form-group col-md-4 col-lg-4 mb-0">
                <input type="text" class="form-control mb-0" placeholder="Cerca">
            </div>
            <div class="form-group col-md-3 col-lg-4 mb-0 d-flex justify-content-center">
                <button class="mb-0 btn btn-link fl-left" type="button" data-toggle-filter-btn="avanzato">
                <i class="icon icon-mostra" title="icon-aggiorna"></i>
                Ricerca avanzata
                </button>
            </div>
            <div class="form-group col-md-5 col-lg-4 mb-0 pr-0 d-flex align-items-center justify-content-end">
                <!-- PAGINATION -->
                <?php virtual('/youwebbusiness/layout/oggetti/tabelle/paginazione/oggetto.php'); ?>
                <!-- END PAGINATION -->
            </div>
            </div>
        </form>
        <table cellspacing="0" cellpadding="0" border="0" class="table table-striped" data-bootstrap-table>
            <thead>
                <tr>
                <th data-field="intestazione" data-sortable="true">Intestazione</th>
                <th data-field="banca" data-sortable="true">Banca</th>
                <th data-field="iban" data-sortable="true">RAPPORTO</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i <= 5; $i++) { ?>
                <tr data-index="<?= $i ?>">
                    <td style="">Nome Azienda S.r.l.</td>
                    <td style="">05034  - Banco Bpm</td>
                    <td style="">0503 01424 12345678901200</td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
    </div>

    <div data-toggle-filter-elem="avanzato" style="display:none;">
        <div class="bordered no-b-t">
        <div clasS="d-flex justify-content-center">
            <button class="btn btn-link fl-left" type="button" data-toggle-filter-btn="semplice">
            <i class="icon icon-mostra" title="icon-aggiorna"></i>
            Ricerca semplice
            </button>
        </div>
        <form class="form-grid">
            <div class="form-row align-items-end">
            <div class="form-group col">
                <label class="control-label">Rag. Soc. / Intestatario</label>
                <select  class="form-control">
                <option selected>Tutti</option>
                </select>
            </div>
            <div class="form-group col">
                <label class="control-label">Banca</label>
                <select  class="form-control">
                <option selected>Tutti</option>
                </select>
            </div>
            <div class="form-group col">
                <label class="control-label">Numero Dossier</label>
                <select  class="form-control">
                <option selected>Tutti</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-white fl-left mb-0">
                <i class="icon icon-aggiorna" title="icon-aggiorna"></i>
                Aggiorna
                </button>
            </div>
            </div>
        </form>
        </div>
    </div>

    </section>
</div>