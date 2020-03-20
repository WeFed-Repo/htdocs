<!-- NOTE: gli attributi data-filter-button e data-filter-form servono per aprire e chiudere il filtro. Se in pagina c'è necessità di avere più accordion di filtri, cambiare il valore dei due attributi sia nella versione desktop che nella versione mobile.

esempio
PRIMA FORM:
in desktop
data-filter-button=form01 data-filter-form=form01
in mobile
data-filter-button=form01 data-filter-form=form01

SECONDA FORM
in desktop
data-filter-button=form02 data-filter-form=form02
in mobile
data-filter-button=form02 data-filter-form=form02
-->


<section>
  <div class="bordered pt-md-0 pt-lg-0">
    <div class="d-none d-md-block">
      <div class="table-heading table-heading-filters">
        <div class="table-heading-firstline row d-flex justify-content-between align-items-center">
          <div class="col">
            <h4 class="text-nowrap mb-0">Movimenti Conto</h4>
          </div>
          <div class="col d-flex justify-content-end flex-nowrap align-items-center">
            <div class="filter-cell pr-2">
              <div class="form-check  radio">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option1">
                <label class="form-check-label" for="inlineRadio1">Tutti</label>
              </div>
            </div>
            <div class="filter-cell pr-2">
              <div class="form-check  radio">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option2">
                <label class="form-check-label" for="inlineRadio2">Entrate</label>
              </div>
            </div>
            <div class="filter-cell pr-2">
              <div class="form-check  radio">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option3" disabled>
                <label class="form-check-label" for="inlineRadio3">Uscite</label>
              </div>
            </div>
            <div class="d-flex flex-grow-0-x pl-2">
              <a href="javascript:void(0)" class="btn btn-white fl-left mb-0" data-filter-button="filter01">
                <i class="icon icon-arrow_down" title="icon-aggiorna"></i>
                Filtra
              </a>
            </div>
          </div>
        </div>

<!-- FILTRI DESKTOP -->

        <div class="table-filters-accordion" data-filter-form="filter01" style="display:none">

          <form>
            <div class="row justify-content-between">
              <div class="col-12 col-lg-5">
                <div class="form-row">
                  <div class="form-group col">
                    <label class="control-label">Data da</label>
                    <div class="input-group datepicker">
                      <input type="text" class="form-control" data-datepicker autocomplete="off" placeholder="Data"/>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="icon icon-ico_calendario"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col">
                    <label class="control-label">Data a</label>
                    <div class="input-group datepicker">
                      <input type="text" class="form-control" data-datepicker autocomplete="off" placeholder="Data"/>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="icon icon-ico_calendario"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-5">
                <div class="form-row">
                  <div class="form-group col">
                    <label>Importo da</label>
                    <input type="text" class="form-control" placeholder="Text">
                  </div>
                  <div class="form-group col">
                    <label>Importo a</label>
                    <input type="text" class="form-control" placeholder="Text">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-md-7 col-lg-8">
                <label>Descrizione</label>
                <input type="text" class="form-control" placeholder="Text">
              </div>
              <div class="col-12 col-md-5 col-lg-4">
                <div class="form-row">
                  <div class="form-group col-6">
                    <button class="btn btn-white btn-block no-label-md">
                      Reset
                    </button>
                  </div>
                  <div class="form-group col-6">
                    <button class="btn btn-white btn-block no-label-md">
                      Conferma
                    </button>
                  </div>
                </div>
              </div>
            </div>

          </form>

        </div>

<!-- FINE FILTRI DESKTOP -->

      </div>

      <div>
        <p>
          * INSERIRE QUI TABELLA - CONTENUTO *
        </p>
      </div>

    </div>
    <!-- Fine contenuto desktop -->

    <!-- Contenuto mobile -->
    <div class="d-block d-md-none">

      <div class="mobile-data-heading d-flex flex-nowrap align-items-center">
        <div class="col">
          <h4 class="mb-0">Movimenti Conto</h4>
        </div>
        <div class="d-flex flex-grow-0-x pl-2">
          <a href="javascript:void(0)" class="btn btn-white fl-left mb-0" data-filter-button="filter01">
            <i class="icon icon-arrow_down" title="icon-aggiorna"></i>
            Filtra
          </a>
        </div>
      </div>

<!-- FILTRI MOBILE -->

        <div class="table-filters-accordion" data-filter-form="filter01" style="display:none">

          <form>

            <div class="row justify-content-between radio-inline">
              <div class="col">
                <div class="radio control-group">
                    <input class="form-check-input" type="radio" name="inlineRadioOptionsMobile" value="option2" checked>
                    <label class="form-check-label" for="inlineRadioOptionsMobile">Tutti</label>
                  </div>
              </div>
              <div class="col">
                <div class="radio control-group">
                    <input class="form-check-input" type="radio" name="inlineRadioOptionsMobile" value="option2">
                    <label class="form-check-label" for="inlineRadioOptionsMobile">Entrate</label>
                  </div>
              </div>
              <div class="col">
                <div class="radio control-group">
                    <input class="form-check-input" type="radio" name="inlineRadioOptionsMobile" value="option3" disabled>
                    <label class="form-check-label" for="inlineRadioOptionsMobile">Uscite</label>
                  </div>
                </div>
              </div>

              <div class="o-separator-line mb-4"></div>

              <div class="row justify-content-between">

                <div class="col-12 col-lg-5">
                  <div class="form-row">
                    <div class="form-group col">
                      <label class="control-label">Data da</label>
                      <div class="input-group datepicker">
                        <input type="text" class="form-control" data-datepicker autocomplete="off" placeholder="Data"/>
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <i class="icon icon-ico_calendario"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col">
                      <label class="control-label">Data a</label>
                      <div class="input-group datepicker">
                        <input type="text" class="form-control" data-datepicker autocomplete="off" placeholder="Data"/>
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <i class="icon icon-ico_calendario"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-lg-5">
                  <div class="form-row">
                    <div class="form-group col">
                      <label>Importo da</label>
                      <input type="text" class="form-control" placeholder="Text">
                    </div>
                    <div class="form-group col">
                      <label>Importo a</label>
                      <input type="text" class="form-control" placeholder="Text">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-md-7 col-lg-8">
                  <label>Descrizione</label>
                  <input type="text" class="form-control" placeholder="Text">
                </div>
                <div class="col-12 col-md-5 col-lg-4">
                  <div class="form-row">
                    <div class="form-group col-6">
                      <button class="btn btn-white btn-block no-label">
                        Reset
                      </button>
                    </div>
                    <div class="form-group col-6">
                      <button class="btn btn-white btn-block no-label">
                        Conferma
                      </button>
                    </div>
                  </div>
                </div>
              </div>

          </form>

        </div>

<!-- FINE FILTRI MOBILE -->

      <div class="mobile-data">
        <p>
          * INSERIRE QUI TABELLA - CONTENUTO *
        </p>
      </div>
    </div>
    <!-- Fine contenuto mobile -->

  </div>

</section>
