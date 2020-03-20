<div class="d-block d-lg-none no-margin-section">
    <section class="bordered m-0">
    <div class="row" data-toggle="modal" data-target="#mobileSelector">
        <div class="col-10 pb-3">
        <span class="dati-key pb-2">Nome Azienda S.r.l.</span>
        <span class="dati-value pb-2">Banca - 0534 - Banco BPM SPA</span>
        <span class="dati-value">Rapporto 89499 - 000000000456</span>
        <span class="dati-value">IT 56 V 03237 46446 123456789012</span>
        </div>
        <div class="col-2 align-self-stretch">
        <span class="btn-mobile-arrow d-flex align-items-center justify-content-end pb-3">
            <i class="icon-arrow_right"></i>
        </span>
        </div>
    </div>
    <div class="row">
        <div class="col-12 pb-3">
        <div class="separator separator--enable-lg mb-4 mt-0 p-0"></div>
        <div class="row d-flex align-items-center">
            <div class="col-5">
            <span class="dati-value pb-0 nowrap">Saldo disponibile:</span>
            </div>
            <div class="col">
            <span class="dati-value-big XXX-dati-value-max nowrap">0.000.000,00 EUR</span>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-5">
            <span class="dati-value pb-0 nowrap">Saldo contabile:</span>
            </div>
            <div class="col">
            <span class="dati-value-big nowrap">0.000.000,00 EUR</span>
            </div>
        </div>
        </div>
    </div>
    <!-- Modale filtro mobile -->
    <div class="modal fade" id="mobileSelector" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <a class="close btn-icon" data-dismiss="modal" aria-label="Close"></a>
            <h2 class="modal-title" id="myModalLabel">Help - Movimenti titoli</h2>
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
                            <th data-field="iban" data-sortable="true">IBAN</th>
                            <th data-field="intestazione" data-sortable="true">Intestazione</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php for ($i = 0; $i <= 3; $i++) { ?>
                            <tr data-index="<?= $i ?>">
                            <td style="">46446123456789012 - Nome Banca<br /> Alias nome banca</td>
                            <td style="">Nome Azienda S.r.l.</td>
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
                        <option selected>00000 - Nome banca</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col">
                        <label class="control-label">Conto</label>
                        <select  class="form-control">
                        <option selected>00000 - 00000000000</option>
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