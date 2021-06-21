<!-- TABELLA RISTILIZZATA  classi aggiuntive:
table-space-row => crea spazio tra le righe
table-header-light => stile chiaro dell'header
table-bkg-grayBG => colore grigio celle
table-font-small => font-size 12px
-->
<!--SEZIONE VISIBILE SU DESKTOP -->
<div class="d-none d-md-block">
   <div tm-bstable-v2="" class="px-3">
         <table data-bootstrap-table cellspacing="0" cellpadding="0" border="0" class="table space-row header-light bkg-grayBG font-small b-r-small" data-table-mobilized-desktop="NewTable">
      <thead>
      <tr>
         <!-- PER STAMPARE UNA CELLA CHE IN MOBILE SI VEDA COME TITOLO, USARE LA CLASSE .data-mobilized-title -->
         <th data-field=""></th>
         <th data-field="Categoria">Categoria</th>
         <th data-field="contabile" data-sortable="true">Rapporto</th>
         <th data-field="valuta" data-sortable="true">Descrizione</th>
         <th data-field="importo" data-sortable="true">Data prevista</th>
         <th data-field="divisa" data-sortable="true">Periodicità</th>
         <th data-field="causale" data-sortable="true">Importo</th>
      <th  data-field="azioni" data-sortable="false"></th>
      </tr>
   </thead>
   <tbody>
      <?php // esempio ciclo per tabella in desktop ?>
      <!-- CLASSI COLORE PER LE CATEGORIE-->
      <?php $array = array("bollette","fornitori", "operazionifinanziarie","ricavi","assicurazione","altrespese","servizi","tasse","trasporti","immobilizzazioni","intercompany","altrepassivita","altriproventi","risorseumane"); ?>
      <?php for ($i = 0; $i <= 13; $i++) { ?>
      <tr data-index="<?= $i ?>">
         <td class="wrapper-border-element">
            <span class="border-element b-r-l bkg-greenLighter_border"></span>
         </td>
         <td>
               <span class="text-with-squared">
               <span class="squared ico-wrapper bkg-bfm_<?= $array[$i] ?>"><i class="icon icon-category_<?= $array[$i] ?>"></i></span>
               <a href="#" class="text color-greenLink"><?= $array[$i] ?></a>
               </span>
         </td>
         <td>lorem ipsum</td>
         <!--SCON QUESTA CLASSE VIENE SETTATO UN MAX_WIDTH PER GARANTIRE L'ELLIPSED-->
         <td class="ellipsed">
               Lorem ipsum dolor sit amet long label Lorem ipsum dolor sit amet long label Lorem ipsum dolor sit amet long label Lorem ipsum dolor sit amet long label</div>
         </td>
         <td>01/02/2021</td>
         <td>EUR</td>
         <td>345</td>
         <td class="text-center">
            <div class="btn-group dropdown">
               <span type="button"
                     class="cursor-pointer"
                     data-toggle="dropdown"
                     aria-haspopup="true"
                     aria-expanded="false">
               <img src="./fe/img/icon/more.svg">
               </span>
               <div class="dropdown-menu">
               <a class="dropdown-item" href="#">Action</a>
               <a class="dropdown-item" href="#">Lorem ipsum dolor sit amet long label</a>
               <span class="dropdown-item disabled" disabled>Disabled</span>
               <a class="dropdown-item" href="#">Another action (<?php echo $i ?>)</a>
               <a class="dropdown-item" href="#">Something else here</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#">Separated link</a>
               </div>
            </div>
         </td>
      </tr>
      <?php } ?>
   </tbody>
   </table>
         <div class="clearfix"></div>
   </div>
   <div class="row justify-content-end mr-1">
   <a href="#">Vedi tutte</a>
   </div>
</div>


<!--SEZIONE VISIBILE SU MOBILE DOPO LA TRASFORMAZIONE DELLA TABELLA -->
<div class="d-block d-md-none">
<div tm-bstable-v2="" tm-table-elenco-progetti="">
   <div tablecontext="135" style="">
      <div tm-table-header="" style="display: none;">
         <div class="d-flex justify-content-between align-items-end py-1">
            <div class="d-flex px-3 justify-content-start" tm-table-pagination=""></div>
            <div class="d-flex px-3 justify-content-end" tm-table-actions=""></div>
         </div>
      </div>
      <div tm-bstable-v2="">
         <div class="bootstrap-table">
            <div class="fixed-table-toolbar"></div>
            <div class="fixed-table-container" style="padding-bottom: 0px;">
               <div class="fixed-table-header" style="display: none;">
                  <table></table>
               </div>
               <div class="fixed-table-body">
                  <div class="fixed-table-loading table table-bordered table-hover" style="top: 0px; display: none;">
                     <span class="loading-wrap">
                     <span class="loading-text">Loading, please wait</span>
                     <span class="animation-wrap"><span class="animation-dot"></span></span>
                     </span>
                  </div>
                  <table id="tableElencoProgetti" data-bootstrap-table="" cellspacing="0" cellpadding="0" border="0" class="table space-row header-light bkg-grayBG font-small b-r-small table-hover" data-table-mobilized-desktop="NewTable" style="margin-top: 0px;">
                     <thead style="display: none;">
                        <tr>
                           <th style="" data-field="">
                              <div class="th-inner "></div>
                              <div class="fht-cell"></div>
                           </th>
                           <th style="" data-field="Numero">
                              <div class="th-inner ">Nome Progetto</div>
                              <div class="fht-cell"></div>
                           </th>
                           <th style="" data-field="DataEmissione">
                              <div class="th-inner ">Data Inizio</div>
                              <div class="fht-cell"></div>
                           </th>
                           <th style="" data-field="ImportoTotale">
                              <div class="th-inner sortable both">Data Fine</div>
                              <div class="fht-cell"></div>
                           </th>
                           <th style="" data-field="Nome">
                              <div class="th-inner sortable both">Budget Disponibile</div>
                              <div class="fht-cell"></div>
                           </th>
                           <th class="center" style="" data-field="5">
                              <div class="th-inner "></div>
                              <div class="fht-cell"></div>
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        <div class="mobile-data">
                           <div class="mobile-data-block border-0">
                              <div class="mobile-data-block bkg-grayBG wrapper-border-element" data-index="0">
                                 <span class="border-element b-r-l bkg-greenLighter_border"></span>
                                 <div class="row">
                                    <div class="col-4 output-inline">
                                       <label class="control-label font-weight-bold">Nome Progetto</label>
                                    </div>
                                    <div class="col-8 text-right text-break">
                                       <span class="output"><a href="javascript:;" tm-detail-index="0">Progetto_0</a></span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-4 output-inline">
                                       <label class="control-label font-weight-bold">Data Inizio</label>
                                    </div>
                                    <div class="col-8 text-right text-break">
                                       <span class="output">01/01/2020</span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-4 output-inline">
                                       <label class="control-label font-weight-bold">Data Fine</label>
                                    </div>
                                    <div class="col-8 text-right text-break">
                                       <span class="output">31/12/2021</span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-4 output-inline">
                                       <label class="control-label font-weight-bold">Budget Disponibile</label>
                                    </div>
                                    <div class="col-8 text-right text-break">
                                       <span class="output">1.000,00</span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-12 d-flex justify-content-end text-break">
                                       <button class="btn btn-white in-table" tm-row-associa="">Scegli</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="mobile-data-block border-0">
                              <div class="mobile-data-block bkg-grayBG wrapper-border-element" data-index="1">
                                 <span class="border-element b-r-l bkg-greenLighter_border"></span>
                                 <div class="row">
                                    <div class="col-4 output-inline">
                                       <label class="control-label font-weight-bold">Nome Progetto</label>
                                    </div>
                                    <div class="col-8 text-right text-break">
                                       <span class="output"><a href="javascript:;" tm-detail-index="1">Progetto_1</a></span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-4 output-inline">
                                       <label class="control-label font-weight-bold">Data Inizio</label>
                                    </div>
                                    <div class="col-8 text-right text-break">
                                       <span class="output">01/01/2020</span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-4 output-inline">
                                       <label class="control-label font-weight-bold">Data Fine</label>
                                    </div>
                                    <div class="col-8 text-right text-break">
                                       <span class="output">31/12/2021</span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-4 output-inline">
                                       <label class="control-label font-weight-bold">Budget Disponibile</label>
                                    </div>
                                    <div class="col-8 text-right text-break">
                                       <span class="output">1.001,00</span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-12 d-flex justify-content-end text-break">
                                       <button class="btn btn-white in-table" tm-row-associa="">Scegli</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="mobile-data-block border-0">
                              <div class="mobile-data-block bkg-grayBG wrapper-border-element" data-index="2">
                                 <span class="border-element b-r-l bkg-greenLighter_border"></span>
                                 <div class="row">
                                    <div class="col-4 output-inline">
                                       <label class="control-label font-weight-bold">Nome Progetto</label>
                                    </div>
                                    <div class="col-8 text-right text-break">
                                       <span class="output"><a href="javascript:;" tm-detail-index="2">Progetto_2</a></span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-4 output-inline">
                                       <label class="control-label font-weight-bold">Data Inizio</label>
                                    </div>
                                    <div class="col-8 text-right text-break">
                                       <span class="output">01/01/2020</span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-4 output-inline">
                                       <label class="control-label font-weight-bold">Data Fine</label>
                                    </div>
                                    <div class="col-8 text-right text-break">
                                       <span class="output">31/12/2021</span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-4 output-inline">
                                       <label class="control-label font-weight-bold">Budget Disponibile</label>
                                    </div>
                                    <div class="col-8 text-right text-break">
                                       <span class="output">1.002,00</span>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-12 d-flex justify-content-end text-break">
                                       <button class="btn btn-white in-table" tm-row-associa="">Scegli</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </tbody>
                  </table>
               </div>
               <div class="fixed-table-footer" style="display: none;">
                  <table>
                     <thead>
                        <tr></tr>
                     </thead>
                  </table>
               </div>
            </div>
            <div class="fixed-table-pagination" style="display: none;">
               <div class="float-left pagination-detail">
                  <span class="pagination-info">
                  Showing 1 to 10 of 100 rows
                  </span>
                  <span class="page-list">
                     <span class="btn-group dropdown dropup">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class="page-size">
                        10
                        </span>
                        <span class="caret"></span>
                        </button>
                        <div class="dropdown-menu"><a class="dropdown-item active" href="#">10</a><a class="dropdown-item " href="#">25</a><a class="dropdown-item " href="#">50</a><a class="dropdown-item " href="#">100</a></div>
                     </span>
                     rows per page
                  </span>
               </div>
               <div class="float-right pagination">
                  <ul class="pagination">
                     <li class="page-item page-pre"><a class="page-link" href="#">‹</a></li>
                     <li class="page-item active"><a class="page-link" href="#">1</a></li>
                     <li class="page-item"><a class="page-link" href="#">2</a></li>
                     <li class="page-item"><a class="page-link" href="#">3</a></li>
                     <li class="page-item"><a class="page-link" href="#">4</a></li>
                     <li class="page-item"><a class="page-link" href="#">5</a></li>
                     <li class="page-item page-last-separator disabled"><a class="page-link" href="#">...</a></li>
                     <li class="page-item"><a class="page-link" href="#">10</a></li>
                     <li class="page-item page-next"><a class="page-link" href="#">›</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
      <div tm-table-footer="" style="display: none;">
         <div class="row align-items-center py-1 m-0">
            <div class="col-12 px-3" tm-table-itemscount=""></div>
            <div class="col px-3 d-flex justify-content-center" tm-table-pages=""></div>
         </div>
      </div>
   </div>
</div>
</div>