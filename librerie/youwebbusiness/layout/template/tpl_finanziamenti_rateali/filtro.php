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
  <div class="bordered  pt-md-0 pt-lg-0">
    <div class="d-none d-md-block">
      <div class="table-heading table-heading-filters">
        <div class="table-heading-firstline row d-flex justify-content-between align-items-center">
          <div class="col">
            <h4 class="text-nowrap mb-0">Paramentri di ricerca: dal 21/12/2018 al 12/01/2019</h4>
          </div>
          <div class="col d-flex justify-content-end flex-nowrap align-items-center">
            <div class="d-flex flex-grow-0-x pl-2">
              <a href="javascript:void(0)" class="btn btn-white fl-left mb-0" data-filter-button="filterFinanziamenti">
                <i class="icon icon-arrow_down" title="icon-aggiorna"></i>
                Filtra
              </a>
            </div>
          </div>
        </div>

          <!-- FILTRI DESKTOP -->

        <div class="table-filters-accordion" data-filter-form="filterFinanziamenti" style="display:none">
          <form>
            <div class="row justify-content-between">
              <div class="col-12 ">
                <div class="form-row">
                  <div class="form-group col">
                    <label class="control-label">Tipo di rata</label>                    
                    <select  class="form-control">
                      <option selected>Tutti</option>
                      <option >A</option>
                      <option >B</option>
                      <option >C</option>                          
                    </select>                   
                  </div>

                  <div class="form-group col">
                    <label class="control-label">Periodo dal</label>
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
                    <label class="control-label">al</label>
                    <div class="input-group datepicker">
                      <input type="text" class="form-control" data-datepicker autocomplete="off" placeholder="Data"/>
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="icon icon-ico_calendario"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                
                  <div class="col-12 col-lg-4">
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
              </div>             
            </div>
          </form>

        </div>

          <!-- FINE FILTRI DESKTOP -->

      </div>
      <div>  
        <div class=" pt-0 d-none d-lg-block">
          <table data-bootstrap-table cellspacing="0" cellpadding="0" border="0" class="table table-striped" data-table-mobilized-desktop="finanziamentiTable">
            <thead>
              <tr>
                <!-- PER STAMPARE UNA CELLA CHE IN MOBILE SI VEDA COME TITOLO, USARE LA CLASSE .data-mobilized-title -->
                <th data-field="numeroRata" data-sortable="true">Numero rata</th>
                <th data-field="scadenza" data-sortable="true" class="center">Scadenza</th>
                <th data-field="importo" data-sortable="true"  data-formatter="tableCellValue" class="right">Importo</th>
                <th data-field="quotaCapitale" data-sortable="true" data-formatter="tableCellValue" class="right">Quota capitale</th>
                <th data-field="quotaInteressi" data-sortable="true" data-formatter="tableCellValue" class="right">Quota interessi</th>
                <th data-field="stato" data-sortable="true"  class="center">Stato</th>              
              </tr>
            </thead>
            <tbody>
              <?php // esempio ciclo per tabella in desktop ?>
              <?php for ($i = 0; $i <= 3; $i++) { ?>
                <tr data-index="<?= $i ?>">
                  <td>1</td>
                  <td>28/02/2019</td>
                  <td><span class="">3.216,65</span></td>
                  <td><span class="">3.216,65</span></td>
                  <td><span class="">3.216,65</span></td>
                  <td>Pagata</td>        
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
          <!-- Fine contenuto desktop -->

          <!-- Contenuto mobile -->
        <div class=" p-0 d-block d-lg-none">
          <div class="mobile-data" data-table-mobilized-mobile="finanziamentiTable"></div>
          </div>
          <!-- Fine contenuto mobile -->
        </div>
    </div>
        <!-- Fine contenuto desktop -->

        <!-- Contenuto mobile -->
      <div class="d-block d-md-none">

        <div class="mobile-data-heading d-flex flex-nowrap align-items-center">
          <div class="col">
            <h4 class="mb-0">Paramentri di ricerca: dal 21/12/2018 al 12/01/2019</h4>
          </div>
          <div class="d-flex flex-grow-0-x pl-2">
            <a href="javascript:void(0)" class="btn btn-white fl-left mb-0" data-filter-button="filterFinanziamenti">
              <i class="icon icon-arrow_down" title="icon-aggiorna"></i>
              Filtra
            </a>
          </div>
        </div>

              <!-- FILTRI MOBILE -->

        <div class="table-filters-accordion" data-filter-form="filterFinanziamenti" style="display:none">
                  <form>
                    <div class="row">              
                      <div class="col-12 col-lg-5">
                        <div class="form-row">
                          <div class="form-group col">
                            <label class="control-label">Tipo di rata</label>                    
                            <select  class="form-control">
                              <option selected>Tutti</option>
                              <option >A</option>
                              <option >B</option>
                              <option >C</option>                          
                            </select>                   
                          </div>                  
                        </div>
                      </div>
                    </div>

                    <div class="row">   
                      <div class="col-6 col-md-6 col-lg-5">
                        <label class="control-label">Periodo dal</label>
                        <div class="input-group datepicker">
                          <input type="text" class="form-control" data-datepicker autocomplete="off" placeholder="Data"/>
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <i class="icon icon-ico_calendario"></i>
                            </span>
                          </div>
                        </div>
                      </div>

                      <div class="col-6 col-md-6 col-lg-5">
                        <label class="control-label">al</label>
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

                    <div class="row ">
                      <div class="col-12 col-lg-4">
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
          <div>  
            <div class="pt-md-0 pt-lg-0 pt-0 d-none d-lg-block">
              <table data-bootstrap-table cellspacing="0" cellpadding="0" border="0" class="table table-striped" data-table-mobilized-desktop="finanziamentiTable">
                <thead>
              <tr>
                <!-- PER STAMPARE UNA CELLA CHE IN MOBILE SI VEDA COME TITOLO, USARE LA CLASSE .data-mobilized-title -->
                <th data-field="numeroRata" data-sortable="true" >Numero rata</th>
                <th data-field="scadenza" data-sortable="true" class="center">Scadenza</th>
                <th data-field="importo" data-sortable="true"  data-formatter="tableCellValue" class="right">Importo</th>
                <th data-field="quotaCapitale" data-sortable="true" data-formatter="tableCellValue" class="right">Quota capitale</th>
                <th data-field="quotaInteressi" data-sortable="true" data-formatter="tableCellValue" class="right">Quota interessi</th>
                <th data-field="stato" data-sortable="true"  class="center">Stato</th>              
              </tr>
            </thead>
            <tbody>
              <?php // esempio ciclo per tabella in desktop ?>
              <?php for ($i = 0; $i <= 3; $i++) { ?>
                <tr data-index="<?= $i ?>">
                  <td>1</td>
                  <td>28/02/2019</td>
                  <td><span class="">3.216,65</span></td>
                  <td><span class="">3.216,65</span></td>
                  <td><span class="">3.216,65</span></td>
                  <td>Pagata</td>        
                </tr>
              <?php } ?>
            </tbody>
              </table>
            </div>
                  <!-- Fine contenuto desktop -->

                  <!-- Contenuto mobile -->
            <div class="p-0 d-block d-lg-none">
              <div class="mobile-data" data-table-mobilized-mobile="finanziamentiTable"></div>
            </div>
                <!-- Fine contenuto mobile -->
              
          </div>
        </div>
      </div>
    </div>
        <!-- Fine contenuto mobile -->

  </div>

</section>
