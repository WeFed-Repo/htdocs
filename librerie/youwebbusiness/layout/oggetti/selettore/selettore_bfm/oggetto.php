 <!-- SELETTORE -->
  <section class="selettore selettore-entrate-uscite mb-0 mb-md-2">
  
    <!-- testata filtri desktop-->
    <div class=" d-none d-lg-block">
      <section class="bordered p-3 m-0">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col col-md-10">
              <div class="row">
                  <div class="col col-md-5 col-lg-5">
                    <span class="dati-key">Ragione sociale:</span> 
                    <span class="dati-value">Nessuno</span>
                  </div>
                  <div class="col col-md-7 col-lg-7">
                    <span class="dati-key">Dossier:</span> 
                    <span class="dati-value">Nessuno</span>
                  </div>
              </div>
            </div>
            <div class="col col-lg-2">
                <a href="javascript:void(0)" class="btn btn-white fl-right mb-0" data-filter-button="filter-entrate-uscite">
                    <i class="icon icon-arrow_down" title="icon-aggiorna"></i> Cambia
                </a>
            </div>
        </div>
      </section>
    </div>
    <!-- testata filtri mobile-->
    <div class="d-block d-lg-none no-margin-section">
      <section class="bordered m-0">
      <div class="row" data-filter-button="filter-entrate-uscite">
          <div class="col-10">
          <div class="pb-0"><span class="dati-value d-inline">Nessuno</span></div>
          <div class="pb-3"><span class="dati-value d-inline">Nessuno</span></div>
          </div>
          <div class="col-2 align-self-stretch">
          <span class="btn-mobile-arrow d-flex align-items-center justify-content-end pb-3">
              <i class="icon-arrow_right"></i>
          </span>
          </div>
      </div>
      </section>
    </div>
    
    
    <!-- parte con la select e i checkbox -->
    <div class="no-margin-section">
      <section data-filter-form="filter-entrate-uscite" style="display:none;">
          <div class="bordered no-b-t">
            <?php virtual('/youwebbusiness/layout/oggetti/form/check_list/oggetto.php'); ?>
          </div>
      </section>
    </div>
</section>

