<!-- Modal -->
<div class="modal fade" data-modal="default">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header fit-content d-flex justify-content-between pb-1">
        <div class="row d-flex justify-content-between align-items-start w-100">
          <h5 class="col-sm-6 modal-title mt-2">
            Dettaglio progetto
          </h5>
          <p class="col-sm-6 pr-4 text-sm-left text-md-right mt-2 pt-1">
            Creato il : 20/02/2021 da Mario Rosside
          </p>
        </div>
        <div class="d-flex justify-content-start h-100">
          <div class="modal-toolbar align-items-start pt-2">
            <a href="#" aria-label="Print">
              <i class="icon icon-printer color-gray2"></i>
            </a>
            <a href="#" data-dismiss="modal" aria-label="Close">
              <img src="./fe/img/icon/close.svg">
            </a>
          </div>
        </div>
      </div>
      <div class="modal-body">
      <!--OGGETTO ARROW -->
      <section class="no-margin-section">
        <div class="bordered pb-3 arrow-box-wrapper">
            <section>
              <div class="row">
                <div class="col-12">
                  <h4>Progetto: lorem ipsum dolor </h4>
                  <p class="color-greenLink">02 marzo   <i class="icon icon-arrow_right_text"></i> 30 novembre</p>
                </div>
              </div>
            </section>
            <section>
              <div class="row arrow-separator-row">
                <div class="col-12 col-md-3">
                    <label class="control-label w-auto w-md-100 pr-3 pr-md-0">Budget prefissato</label>
                    <span class="text-output">80.000 &euro;</span>
                </div>
                <div class="col-12 col-md-1 text-center">
                  <div class="arrow-separator"></div>
                </div>
                <div class="col-12 col-md-3">
                    <label class="control-label w-auto w-md-100 pr-3 pr-md-0">Totale delle spese</label>
                    <span class="text-output">20.000 &euro;</span>
                </div>
                <div class="col-12 col-md-1 text-center">
                  <div class="arrow-separator"></div>
                </div>
                <div class="col-12 col-md-3">
                  <label class="control-label w-auto w-md-100 pr-3 pr-md-0">Budget disponibile</label>
                  <span class="text-output text-big color-greenLink">60.000 &euro;</span>
                </div>
              </div>
            </section>
        </div>
      </section>
      <!-- TABELLA IN ACCORDION CHE SCROLLA-->
      <section class="no-margin-section">
        <div class="accordion always-active bordered-style bordered-only-top with-squared ico-close-pa">
        <div class="card collapser">
          <div class="card-header d-flex justify-content-between align-items-top" data-toggle="collapse">
            <div class="row d-flex justify-content-between align-items-center w-100">
              <div class="col-md-7 col-lg-7 col-xl-8">
                  <h5 class="card-header-title mb-0">
                    <div class="text color-gray1"><span>Totale transazioni associate</span></div>
                  </h5>
              </div>
              <hr class="separator d-block d-md-none w-100 mt-3 mb-3">
              <div class="col-md-5 col-lg-5 col-xl-4">
                  <div class="row justify-content-md-end justify-content-between">
                  <div class="col-5 col-md-5 col-lg-4 col-xl-5 d-flex justify-content-md-end justify-content-between align-items-center">
                    <span class="color-gray2">10 transazioni</span>
                  </div>
                  <div class="col-5 col-md-5 col-lg-6 col-xl-5 pl-0 d-flex justify-content-end align-items-center">
                    <strong class="text color-gray1">750.000,86 &euro;</strong>
                  </div>
                  </div>
              </div>
              <span class="card-header-icon"></span>
            </div>
          </div>
          <div class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
              <div class="wrapper-table-scroll-y">
                <?php virtual('/youwebbusiness/layout/oggetti/tabelle/_tabella_space_white/oggetto.php');?>
            </div>
            </div>
          </div>
        </div>
        </div>
      </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
