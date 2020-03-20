<h1>
  Saldo e Movimenti
  <button type="button" class="btn-icon-help" data-modal-help></button>
</h1>

<!-- Navigatore a tab -->
<div class="no-margin-section">
  <ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link active">Movimenti Online</a></li>
    <li class="nav-item"><a class="nav-link">Movimenti CBI</a></li>
  </ul>
</div>
<!-- Fine navigatore a tab -->

<!-- SELETTORE RAPPORTO DI ESEMPIO -->
<?php virtual('/youwebbusiness/layout/oggetti/selettore/selettore_rapporti/oggetto.php'); ?>
<!-- ./ SELETTORE RAPPORTO DI ESEMPIO -->

<div class="no-margin-section">
  <div class="mobile-form">
    <script type="text/javascript">
      var tableMovimenti,
          tbdata = [],
          randomWords = "lorem ipsum dolor sit amet consectetur adipisicing elit possimus nulla voluptas qui tempora odit iure sapiente quisquam praesentium ipsam error quod provident modi culpa quae blanditiis error deleniti suscipit neque";

        // Crea dei dati random per popolare la tabella
        for (x=0;x<=(Math.random()*100);x++) {
          tbdata.push({
            "contabile": parseInt(28-x/3) + "/02/2019",
            "link": "#",
            "valuta" : parseInt(28-x/3) + "/02/2019",
            "importo" : parseFloat( 10000 * Math.random() - 3000 ).toFixed( 2 ),
            "divisa": "EUR",
            "causale": parseInt((Math.random()*100) + 261),
            "descrizione": randomWords.split(" ").map(function(word){
              if(Math.random()>0.5) return (word + " ");
            }).join(" ")
          });
        }

    </script>

    <!-- Dati movimenti -->
    <section>
      <div class="bordered pt-md-0 pt-lg-0">
        <div class="d-none d-lg-block">
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

            <div class="table-filters-accordion" data-filter-form="filter01" style="display:none;">

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
            <!-- Contenuto desktop -->
            <div class="d-none d-lg-block">

              <script>
              $(function(){
                $('[data-modal-detail]').on('click',function(e){
                  $('[data-modal="detail"]').modal('show');
                  var index = $(this).data('modal-detail');
                  // NOTE inserire qui la chiamata ajax ai dati della tabella
                  // di dettaglio, usando il valore di data-modal-detail,
                  // che deve essere uguale all'id univoco della riga
                  console.log('RIGA NUMERO '+index);
                });
              });</script>

              <table id="tableMovimenti" data-bootstrap-table cellspacing="0" cellpadding="0" border="0" class="table table-striped" data-table-mobilized-desktop="saldoTable">
                 <thead>
                    <tr>
                      <th data-field="contabile" class="center"><span class="d-inline d-lg-none">Data</span> Contabile</th>
                      <th data-field="valuta" data-sortable="true" class="center"><span class="d-inline d-lg-none">Data</span> Valuta</th>
                      <th data-field="importo" data-sortable="true" data-formatter="tableCellValue" class="right data-mobilized-hide">Importo</th>
                      <th data-field="divisa" data-sortable="true" class="center data-mobilized-hide">Divisa</th>
                      <th data-field="importo_e_divisa" data-sortable="true" class="center d-table-cell d-md-none">Importo</th>
                      <th data-field="causale" data-sortable="true" class="data-mobilized-hide">Causale</th>
                      <th data-field="descrizione" data-sortable="false"  class="data-mobilized-fullwidth">Descrizione movimento</th>
                    </tr>
                 </thead>
                 <tbody>
                   <?php $i = 1; ?>
                   <tr data-index="<?= $i ?>">
                     <td><a href ="javascript:;" data-modal-detail='<?= $i ?>'>28/02/2019</a></td>
                     <td>28/02/2019</td>
                     <td><span class="negativo">-2.303,43</span></td>
                     <td>EUR</td>
                     <td><span class="negativo">-2.303,43 EUR</span></td>
                     <td>290</td>
                     <td>Lorem ipsum dolor sit amet possimus nulla tempora quisquam praesentium error quod provident deleniti suscipit</td>
                   </tr>
                   <?php $i++; ?>
                   <tr data-index="<?= $i ?>">
                     <td><a href ="javascript:;" data-modal-detail='<?= $i ?>'>27/02/2019</a></td>
                     <td>27/02/2019</td>
                     <td><span>5.575,49</span></td>
                     <td>EUR</td>
                     <td><span>5.575,49 EUR</span></td>
                     <td>308</td>
                     <td>Sit amet possimus nulla tempora quisquam praesentium error quod provident deleniti suscipit</td>
                   </tr>
                   <?php $i++; ?>
                   <tr data-index="<?= $i ?>">
                     <td><a href ="javascript:;" data-modal-detail='<?= $i ?>'>27/02/2019</a></td>
                     <td>27/02/2019</td>
                     <td><span>5.133,96</span></td>
                     <td>EUR</td>
                     <td><span>5.133,96 EUR</span></td>
                     <td>349</td>
                     <td>Tempora quisquam praesentium error quod provident deleniti suscipit Sit amet possimus nulla tempora quisquam praesentium error quod provident </td>
                   </tr>
                   <?php $i++; ?>
                 </tbody>
              </table>
            </div>
            <!-- Fine contenuto desktop -->
          </div>

        </div>
        <!-- Fine contenuto desktop -->

        <!-- Contenuto mobile -->
        <div class="d-block d-lg-none">

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
            <!-- Contenuto mobile -->
            <div class="d-block d-lg-none">
             <div id="movimentiMobile">

               <div class="mobile-data" data-table-mobilized-mobile="saldoTable"></div>

               <?php /*$i = 1; ?>
                <div class="mobile-data-block">
                   <div class="row">
                      <div class="col-12">
                         <div class="output-inline">
                            <label class="control-label">Importo</label>
                            <span class="output"><span class="negativo">-2.303,43</span> EUR</span>
                         </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-12">
                         <div class="output-inline">
                            <label class="control-label">Data contabile</label>
                            <span class="output"><a href ="javascript:;" data-modal-detail='<?= $i ?>'>28/02/2019</a></span>
                         </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-12">
                         <div class="output-inline">
                            <label class="control-label">Data valuta</label>
                            <span class="output">28/02/2019</span>
                         </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-12">
                         <div>
                            <label class="control-label">Descrizione</label>
                            <span class="output">Lorem ipsum dolor sit amet possimus nulla tempora quisquam praesentium error quod provident deleniti suscipit</span>
                         </div>
                      </div>
                   </div>
                </div>
                <?php $i++; ?>
                <div class="mobile-data-block">
                   <div class="row">
                      <div class="col-12">
                         <div class="output-inline">
                            <label class="control-label">Importo</label>
                            <span class="output">
                            <span class="">5.575,49</span> EUR
                            </span>
                         </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-12">
                         <div class="output-inline">
                            <label class="control-label">Data contabile</label>
                            <span class="output"><a href ="javascript:;" data-modal-detail='<?= $i ?>'>27/02/2019</a></span>
                         </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-12">
                         <div class="output-inline">
                            <label class="control-label">Data valuta</label>
                            <span class="output">27/02/2019</span>
                         </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-12">
                         <div>
                            <label class="control-label">Descrizione</label>
                            <span class="output">Sit amet possimus nulla tempora quisquam praesentium error quod provident deleniti suscipit</span>
                         </div>
                      </div>
                   </div>
                </div>
                <?php $i++; ?>
                <div class="mobile-data-block">
                   <div class="row">
                      <div class="col-12">
                         <div class="output-inline">
                           <label class="control-label">Importo</label>
                           <span class="output"><span class="">5.133,96</span> EUR</span></div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-12">
                         <div class="output-inline">
                           <label class="control-label">Data contabile</label>
                           <span class="output"><a href ="javascript:;" data-modal-detail='<?= $i ?>'>287/02/2019</a></span></div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-12">
                         <div class="output-inline">
                            <label class="control-label">Data valuta</label>
                            <span class="output">27/02/2019</span>
                         </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-12">
                         <div><label class="control-label">Descrizione</label>
                           <span class="output">Tempora quisquam praesentium error quod provident deleniti suscipit Sit amet possimus nulla tempora quisquam praesentium error quod provident</span>
                         </div>
                      </div>
                   </div>
                </div>
                <?php $i++; */?>
             </div>
          </div>
        <!-- Fine contenuto mobile -->
        </div>
      </div>
      <!-- Fine contenuto mobile -->

      </div>

    </section>

  </div>

  <div class="pt-3 pb-3">
    <!-- PAGINAZIONE -->
    <?php virtual('/youwebbusiness/layout/oggetti/tabelle/paginazione_e_totale/oggetto.php'); ?>
    <!-- ./ PAGINAZIONE -->
  </div>

</div>

<!-- MODALE HELP DI ESEMPIO -->
<?php virtual('/youwebbusiness/layout/oggetti/modale/modale_help/modale.php'); ?>
<!-- fine MODALE HELP DI ESEMPIO -->

<!-- MODALE DETTAGLIO DI ESEMPIO -->
<?php virtual('/youwebbusiness/layout/oggetti/modale/modale_dettaglio_con_help/modale.php'); ?>
<!-- fine MODALE DETTAGLIO DI ESEMPIO -->
