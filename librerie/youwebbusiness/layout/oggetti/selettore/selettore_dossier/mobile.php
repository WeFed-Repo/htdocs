<div class="d-block d-lg-none no-margin-section">
    <section class="bordered m-0">
    <div class="row" data-toggle="modal" data-target="#mobileSelector">
        <div class="col-10">
        <div class="pb-0"><span class="dati-key d-inline">Ragione sociale:</span><span class="dati-value d-inline">Tutti</span></div>
        <div class="pb-3"><span class="dati-key d-inline">Dossier titoli:</span><span class="dati-value d-inline">Tutti</span></div>
        </div>
        <div class="col-2 align-self-stretch">
        <span class="btn-mobile-arrow d-flex align-items-center justify-content-end pb-3">
            <i class="icon-arrow_right"></i>
        </span>
        </div>
    </div>
    <!-- Modale filtro mobile -->
    <div class="modal fade" id="mobileSelector" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title" id="myModalLabel">Help - Dossier titoli</h2>
            <a class="close btn-icon" data-dismiss="modal" aria-label="Close"></a>
        </div>
        <div class="modal-body">

        <!-- MODALE -->
            <section data-toggle-filter-parent>
            <!-- scelte primarie filtri -->
            <div data-toggle-filter-elem="semplice">
                <div class="container-fluid">
                <div class="d-flex justify-content-center">
                    <button class="mb-3 btn btn-link" type="button" data-toggle-filter-btn="avanzato">
                    <i class="icon icon-mostra" title="icon-aggiorna"></i>
                    Ricerca avanzata
                    </button>
                </div>
                <input type="text" class="form-control" placeholder="Cerca">
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
                <div class="mt-3 d-flex justify-content-center">
                    <!-- PAGINATION -->
                    <?php virtual('/youwebbusiness/layout/oggetti/tabelle/paginazione/oggetto.php'); ?>
                    <!-- END PAGINATION -->
                </div>
                </div>
            </div>
            <div data-toggle-filter-elem="avanzato" style="display:none;">
                <div clasS="d-flex justify-content-center">
                <button class="btn btn-link fl-left" type="button" data-toggle-filter-btn="semplice">
                    <i class="icon icon-mostra" title="icon-aggiorna"></i>
                    Ricerca semplice
                </button>
                </div>
                <form class="form-grid">
                <div class="form-row">
                    <div class="form-group col">
                    <label class="control-label">Rag. Soc. / Intestatario</label>
                    <select  class="form-control">
                        <option selected>Tutti</option>
                    </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                    <label class="control-label">Banca</label>
                    <select  class="form-control">
                        <option selected>Tutti</option>
                    </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                    <label class="control-label">Numero Dossier</label>
                    <select  class="form-control">
                        <option selected>Tutti</option>
                    </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col text-center">
                    <button class="btn btn-primary">
                        <i class="icon icon-aggiorna" title="icon-aggiorna"></i>
                        Aggiorna
                    </button>
                    </div>
                </div>
                </form>
            </div>
            </section>
        <!-- FINE MODALE -->
        </div>
        </div>
    </div>
    </div>
    </section>
</div>