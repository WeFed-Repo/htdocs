<!-- INIZO TABELLA AGGIORNATA -->
<style>
   [tm-bsTable-v2] .bootstrap-table {
   margin: 0;
   padding: 0;
   }
</style>
<div tm-section-tabella="">
   <div class="no-margin-section mobile-form pt-0" data-bind="visible: Control.showTableFilter()">
      <section class="bordered mt-2 px-0 pt-2">
         <div class="container-fluid">
            <div class="row align-items-center table-heading-firstline d-flex justify-content-between">
               <div class="col-auto mt-2 mb-2">
                  <h4 class="text-nowrap mb-0">Lorem ipsum</h4>
               </div>
               <div class="justify-content-end">
                  <div tm-action="">
                     <div tm-actions="" class="azioni-tabella">
                        <a href="javascript:void(0);" tm-action-link="Pdf" class="tm-norows-hide" style="text-decoration: none !important;">
                        <span>
                        <img src="fe/img/icon/pdf.svg">
                        </span>
                        </a>
                        <a href="javascript:void(0);" tm-action-link="CSV" class="tm-norows-hide" style="text-decoration: none !important;">
                        <span>
                        <img src="fe/img/icon/excel.svg">
                        </span>
                        </a>
                        <a href="javascript:void(0);" tm-action-link="CSV2000" class="tm-norows-hide" style="text-decoration: none !important;">
                        <span>
                        <img src="fe/img/icon/excel2000.svg">
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row align-items-center table-heading-firstline d-flex"> <!--tolta la classe justify-content-between -->
                <!--cambiata la classe da col-10 a col-auto -->
                <div class="col-auto">
                  <div tm-pagination="" class="mt-2 mb-2">
                     <div class="azioni-tabella d-flex ml-1 mr-1">
                        <div class="mr-3 nowrap" tm-page-list-label="">Elementi per pagina</div>
                        <ul class="list-inline nowrap page-list">
                           <li class="list-inline-item active" page-size="10">
                              10
                           </li>
                           <li class="list-inline-item page-list-event" page-size="25">
                              <a href="javascript:void(0);">25</a>
                           </li>
                           <li class="list-inline-item page-list-event" page-size="50">
                              <a href="javascript:void(0);">50</a>
                           </li>
                           <li class="list-inline-item page-list-event" page-size="100">
                              <a href="javascript:void(0);">100</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-auto">
               <!--bottone operazioni massive-->
               <!-- BOX ASSOCIA PROGETTO -->
                
                <!-- ./ BOX ASSOCIA PROGETTO-->
               <!-- ko if: Control.enableAutorizzazioneMultipla() && Control.isCheckAllMobileVisible() --><!-- /ko -->
            </div>
         </div>
         
         
         <!-- NOUOVA SEZIONE TOP TABELLE-->
         <hr>
         <div class="table-heading-bordered">
            <div class="row align-items-center justify-content-between">
               <div class="col-auto">
                  <div tm-pagination="" class="mt-2 mb-2">
                     <div class="azioni-tabella d-flex ml-1 mr-1">
                        <div class="mr-3 nowrap" tm-page-list-label="">Elementi per pagina</div>
                        <ul class="list-inline nowrap page-list">
                           <li class="list-inline-item active" page-size="10">
                              10
                           </li>
                           <li class="list-inline-item page-list-event" page-size="25">
                              <a href="javascript:void(0);">25</a>
                           </li>
                           <li class="list-inline-item page-list-event" page-size="50">
                              <a href="javascript:void(0);">50</a>
                           </li>
                           <li class="list-inline-item page-list-event" page-size="100">
                              <a href="javascript:void(0);">100</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  
               </div>
               <div class="justify-content-end">
                     <div tm-action="">
                        <div tm-actions="" class="azioni-tabella">
                           <a href="javascript:void(0);" tm-action-link="Pdf" class="tm-norows-hide" style="text-decoration: none !important;">
                           <span>
                           <img src="fe/img/icon/pdf.svg">
                           </span>
                           </a>
                           <a href="javascript:void(0);" tm-action-link="CSV" class="tm-norows-hide" style="text-decoration: none !important;">
                           <span>
                           <img src="fe/img/icon/excel.svg">
                           </span>
                           </a>
                           <a href="javascript:void(0);" tm-action-link="CSV2000" class="tm-norows-hide" style="text-decoration: none !important;">
                           <span>
                           <img src="fe/img/icon/excel2000.svg">
                           </span>
                           </a>
                        </div>
                     </div>
                  </div>
               
            </div>
         </div>
         
         
         <div tm-table="">
            <div tablecontext="1422c770dbf14a0aa37c472776f1d98f_3" style="">
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
                           <div class="fixed-table-loading table table-bordered table-hover" style="top: 51px;">
                              <span class="loading-wrap">
                              <span class="loading-text">Loading, please wait</span>
                              <span class="animation-wrap"><span class="animation-dot"></span></span>
                              </span>
                           </div>
                           <table id="tableEsempioSviluppo" cellspacing="0" cellpadding="0" border="0" class="table table-striped table-striped-double table-hover" data-pagination="true" data-sort-name="Chain.Data" data-sort-order="desc" style="margin-top: 0px;">
                              <thead>
                                 <tr>
                                    <th style="" data-field="0">
                                       <div class="th-inner "></div>
                                       <div class="fht-cell"></div>
                                    </th>
                                    <th class="center">
                                       <!-- stato active-->
                                       <!-- <div tm-icon-plus-minus="" class="ico-btn plus-minus bg-transparent color-white is-active"></div> -->
                                       <a data-trigger="hover" data-placement="top"  data-toogle-class="tooltip-no-mw"  data-toggle="tooltip" title="<span class='font-size-small'><strong>Espandi</strong><br>Mostra tutte le informazioni</span>" href="javascript:;">
                                          <span tm-icon-plus-minus="" class="ico-btn plus-minus bg-transparent color-white"></span>
                                       </a>
                                    </th>
                                    <th class="center" style="" data-field="Chain.Data">
                                       <div class="th-inner sortable both desc">Data creaz.</div>
                                       <div class="fht-cell"></div>
                                    </th>
                                    <th class="center" style="" data-field="Chain.Azienda.RagioneSociale">
                                       <div class="th-inner sortable both">Azienda</div>
                                       <div class="fht-cell"></div>
                                    </th>
                                    <th class="center" style="" data-field="Chain.Banca.Abi">
                                       <div class="th-inner sortable both">ABI</div>
                                       <div class="fht-cell"></div>
                                    </th>
                                    <th class="center" style="" data-field="Chain.Rapporto.NumeroRapporto">
                                       <div class="th-inner sortable both">Rapporto</div>
                                       <div class="fht-cell"></div>
                                    </th>
                                    <th class="center" style="" data-field="Chain.NumeroOrdini">
                                       <div class="th-inner sortable both">N. disp.</div>
                                       <div class="fht-cell"></div>
                                    </th>
                                    <th class="center" style="" data-field="Chain.Tipologia.Descrizione">
                                       <div class="th-inner sortable both">Tipo disp.</div>
                                       <div class="fht-cell"></div>
                                    </th>
                                    
                                    <th class="center" style="" data-field="Chain.Importo.Value">
                                       <div class="th-inner sortable both">Importo</div>
                                       <div class="fht-cell"></div>
                                    </th>
                                    <th style="" data-field="9">
                                       <div class="th-inner "></div>
                                       <div class="fht-cell"></div>
                                    </th>
                                    <th style="" data-field="10">
                                       <div class="th-inner "></div>
                                       <div class="fht-cell"></div>
                                    </th>
                                    <th style="" data-field="11">
                                       <div class="th-inner "></div>
                                       <div class="fht-cell"></div>
                                    </th>
                                 </tr>
                              </thead>
                              <tbody class="accordion">
                                 <tr class="highlight" data-index="0">
                                    <td class="text-center">
                                        <div class="form-check-inline checkbox"><input type="checkbox" name=""><label></label></div>
                                    </td>
                                    <td class="text-center">
                                       <div tm-icon-plus-minus="" class="ico-btn plus-minus bg-transparent color-greenLink" id="openAcc"></div>
                                    </td>
                                    <td class="center"><a href="javascript:;" data-modal-detail="0" tm-link-detail="">07/04/2021</a></td>
                                    <td></td>
                                    <td><div class="wrapper-icon-bullet"><span class="color-bfm_status_inscadenza icon-bullet"></span> <span class="text">in scadenza</span></div></td>
                                    <td>000000047661</td>
                                    <td class="center">1</td>
                                    <td>F24</td>
                                    <td class="right"><span class="tm-importo ">123,00 EUR</span></td>
                                    <td class="center">
                                        <!--esempio di tooltip che si apre top, dark, di diemensioni auto fino ad una certa larghezza e al focus/  data-offset aggiunto per spostarlo un poco sulla sinistra--->
                                          <div class="btn-group">
                                             <a data-container="#tableEsempioSviluppo" data-offset="-100 0" data-toogle-class="tooltip-dark tooltip-w-auto" href="javascript:;" data-placement="top" data-toggle="tooltip" title="<p class='text-center mb-0'><strong>Movimento associato manualmente</strong></p>" data-trigger="focus">
                                                <i class="icon icon-link_documento color-gray3"></i>
                                             </a>
                                          </div>
                                    </td>
                                    <td class="center">
                                        <!--esempio di tooltip che si apre top, dark, di diemensioni auto fino ad una certa larghezza e al focus/  data-offset aggiunto per spostarlo un poco sulla sinistra--->
                                          <div class="btn-group">
                                             <a data-container="#tableEsempioSviluppo" data-offset="-100 0" data-toogle-class="tooltip-dark tooltip-w-auto" href="javascript:;" data-placement="top" data-toggle="tooltip" title="<p class='text-center mb-0'><strong>Movimento associato automaticamente</strong></p>" data-trigger="focus">
                                                <i class="icon icon-dividi color-gray3"></i>
                                             </a>
                                          </div>
                                    </td>
                                    <td class="center">
                                       <div class="btn-group">
                                          <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <img src="fe/img/icon/more.svg">
                                          </a>
                                          <div class="dropdown-menu" x-placement="left-start" tm-menu-dropdown="">
                                             <a role="button" class="dropdown-item" tm-delete-index="0">Elimina</a>
                                          </div>
                                       </div>
                                    </td>
                                    
                                 </tr>
                                 <tr style="display:none">
                                    <td class="slide-col-0" colspan="13">
                                    <div class="wrapper-table-inner-scroll-y">
                                       <table id="tableInner" cellspacing="0" cellpadding="0" border="0" class="table table-striped table-hover" data-pagination="true" data-sort-name="Chain.Data" data-sort-order="desc" style="margin-top: 0px;">
                                       <thead>
                                          <tr>
                                             <th style="" data-field="0">
                                                <div class="th-inner">Modalit&agrave; di pagamento</div>
                                                <div class="fht-cell"></div>
                                             </th>
                                             <th style="" data-field="0">
                                                <div class="th-inner ">Tipo pagamento</div>
                                                <div class="fht-cell"></div>
                                             </th>
                                             <th class="center" style="" data-field="">
                                                <div class="th-innerc">Data scadenza</div>
                                                <div class="fht-cell"></div>
                                             </th>
                                             <th class="center" style="" data-field="">
                                                <div class="th-inner">Importo</div>
                                                <div class="fht-cell"></div>
                                             </th>
                                             <th class="center" style="" data-field="">
                                                <div class="th-inner"></div>
                                                <div class="fht-cell"></div>
                                             </th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>Contante</td>
                                             <td>Pagamento a rate</td>
                                             <td class="center">12/12/2021</td>
                                             <td class="right">10.000,00 &euro;</td>
                                             <td class="center"><div class="form-check-inline checkbox"><input type="checkbox" name=""><label></label></div></td>
                                          </tr>
                                          <tr>
                                             <td>Contante</td>
                                             <td>Pagamento a rate</td>
                                             <td class="center">12/12/2021</td>
                                             <td class="right">10.000,00 &euro;</td>
                                             <td class="center"><div class="form-check-inline checkbox"><input type="checkbox" name=""><label></label></div></td>
                                          </tr>
                                          <tr>
                                             <td>Contante</td>
                                             <td>Pagamento a rate</td>
                                             <td class="center">12/12/2021</td>
                                             <td class="right">10.000,00 &euro;</td>
                                             <td class="center"><div class="form-check-inline checkbox"><input type="checkbox" name=""><label></label></div></td>
                                          </tr>
                                          <tr>
                                             <td>Contante</td>
                                             <td>Pagamento a rate</td>
                                             <td class="center">12/12/2021</td>
                                             <td class="right">10.000,00 &euro;</td>
                                             <td class="center"><div class="form-check-inline checkbox"><input type="checkbox" name=""><label></label></div></td>
                                          </tr>
                                          <tr>
                                             <td>Contante</td>
                                             <td>Pagamento a rate</td>
                                             <td class="center">12/12/2021</td>
                                             <td class="right">10.000,00 &euro;</td>
                                             <td class="center"><div class="form-check-inline checkbox"><input type="checkbox" name=""><label></label></div></td>
                                          </tr>
                                       </tbody>
                                       </table>
                                    </div>
                                    </td>
                                 </tr>
                                 <tr data-index="1" style="border-bottom: solid 1px #eeeeee;">
                                     <td class="text-center wrapper-border-element">
                                     <a class="border-element bkg-gray1" href="javascript:;" data-container="#tableEsempioSviluppo" data-toogle-class="tooltip-dark tooltip-w-auto tooltip-m-h-td" data-placement="right" data-toggle="tooltip" title="<p class='text-center mb-0'><strong>Creato il 12/04/2021 da Mario Rossi</strong></p>" data-trigger="focus">
                                      </a>
                                      <div class="form-check-inline checkbox"><input type="checkbox" name="checkOperazioniMassive"><label></label></div>
                                    </td>
                                    <td class="text-center">
                                      
                                       <div tm-icon-plus-minus="" class="ico-btn plus-minus bg-transparent color-greenlink"></div>
                                    </td>
                                    
                                    <td class="center"><a href="javascript:;" data-modal-detail="1" tm-link-detail="">07/04/2021</a></td>
                                    <td>
                                       AUTOMOBILE CLUB - A.C. - MODEN
                                    </td>
                                    <td><div class="wrapper-icon-bullet"><span class="color-bfm_status_scaduta icon-bullet"></span> <span class="text">scaduta</span></div></td>
                                    <td>000000047658                                      </td>
                                    <td class="center">1</td>
                                    <td>F24</td>
                                    <td class="right"><span class="tm-importo ">99,00 EUR</span></td>
                                    <td class="center">
                                        <!--esempio di tooltip che si apre top, dark, di diemensioni auto fino ad una certa larghezza e al focus--->
                                          <div class="btn-group">
                                             <a  data-container="#tableEsempioSviluppo" data-offset="-100 0" data-toogle-class="tooltip-dark tooltip-w-auto" href="javascript:;" data-placement="top" data-toggle="tooltip" title="<p class='text-center mb-0'><strong>Movimento associato manualmente</strong></p>" data-trigger="focus">
                                                <i class="icon icon-link_documento"></i>
                                             </a>
                                          </div>
                                    </td>
                                    <td class="center">
                                        <!--esempio di tooltip che si apre top, dark, di diemensioni auto fino ad una certa larghezza e al focus/  data-offset aggiunto per spostarlo un poco sulla sinistra--->
                                          <div class="btn-group">
                                             <a data-container="#tableEsempioSviluppo" data-offset="-100 0" data-toogle-class="tooltip-dark tooltip-w-auto" href="javascript:;" data-placement="top" data-toggle="tooltip" title="<p class='text-center mb-0'><strong>Movimento associato automaticamente</strong></p>" data-trigger="focus">
                                                <i class="icon icon-dividi"></i>
                                             </a>
                                          </div>
                                    </td>
                                    <td class="center">
                                       <div class="btn-group">
                                          <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <img src="fe/img/icon/more.svg">
                                          </a>
                                          <div class="dropdown-menu" x-placement="left-start" tm-menu-dropdown="">
                                             <a role="button" class="dropdown-item" tm-copy-index="1">Copia</a>
                                             <a role="button" class="dropdown-item" tm-delete-index="1">Elimina</a>
                                             <div class="dropdown-divider"></div>
                                             <a class="dropdown-item" href="#">Separated link</a>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="slide-col-1" style="display:none;"></td>
                                    <td class="slide-col-1" style="display:none;" colspan="12">
                                    </td>
                                 </tr>
                                 <tr data-index="2" style="border-bottom: solid 1px #eeeeee;">
                                   <td class="text-center">
                                        <div class="form-check-inline checkbox"><input type="checkbox" name="checkOperazioniMassive"><label></label></div>
                                    </td>
                                    <td class="text-center">
                                       <div tm-icon-plus-minus="" class="ico-btn plus-minus bg-transparent color-greenLink is-active"></div>
                                    </td>
                                    <td class="center"><a href="javascript:;" data-modal-detail="2" tm-link-detail="">01/04/2021</a></td>
                                    <td>
                                       AUTOMOBILE CLUB - A.C. - MODEN
                                    </td>
                                    <td><div class="wrapper-icon-bullet"><span class="color-bfm_status_incassata icon-bullet"></span> <span class="text">incassata</span></div></td>
                                    <td>000000047661                                      </td>
                                    <td class="center">2</td>
                                    <td>F24</td>
                                   
                                    <td class="right"><span class="tm-importo ">124,68 EUR</span></td>
                                    <td></td>
                                    <td></td>
                                    <td class="center">
                                       <div class="btn-group">
                                          <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <img src="fe/img/icon/more.svg">
                                          </a>
                                          <div class="dropdown-menu" x-placement="left-start" tm-menu-dropdown="">
                                             <a role="button" class="dropdown-item" tm-delete-index="2">Elimina</a>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="slide-col-2" style="display:none;"></td>
                                    <td class="slide-col-2" style="display:none;" colspan="12">
                                    </td>
                                 </tr>
                                 <tr data-index="3" style="border-bottom: solid 1px #eeeeee;">
                                    <td class="text-center">
                                        <div class="form-check-inline checkbox"><input type="checkbox" name="checkOperazioniMassive"><label></label></div>
                                    </td>
                                    <td class="text-center">
                                       <div tm-icon-plus-minus="" class="ico-btn plus-minus bg-transparent color-greenLink"></div>
                                    </td>
                                    <td class="center"><a href="javascript:;" data-modal-detail="3" tm-link-detail="">01/04/2021</a></td>
                                    <td>
                                       AUTOMOBILE CLUB - A.C. - MODEN
                                    </td>
                                    <td><div class="wrapper-icon-bullet"><span class="color-bfm_status_parzialmente_incassata icon-bullet"></span> <span class="text">parzialmente incassata</span></div></td>
                                    <td>000000047659                                      </td>
                                    <td class="center">2</td>
                                    <td>F24</td>
                                    <td class="right"><span class="tm-importo ">20,00 EUR</span></td>
                                    <td>
                                    </td>
                                    <td></td>
                                    <td class="center">
                                       <div class="btn-group">
                                          <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <img src="fe/img/icon/more.svg">
                                          </a>
                                          <div class="dropdown-menu" x-placement="left-start" tm-menu-dropdown="">
                                             <a role="button" class="dropdown-item" tm-delete-index="3">Elimina</a>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="slide-col-3" style="display:none;"></td>
                                    <td class="slide-col-3" style="display:none;" colspan="12">
                                    </td>
                                 </tr>
                                 <tr data-index="4" style="border-bottom: solid 1px #eeeeee;">
                                    <td class="text-center">
                                        <div class="form-check-inline checkbox"><input type="checkbox" name="checkOperazioniMassive"><label></label></div>
                                    </td>
                                    <td class="text-center">
                                       <div tm-icon-plus-minus="" class="ico-btn plus-minus bg-transparent color-greenLink"></div>
                                    </td>
                                    <td class="center"><a href="javascript:;" data-modal-detail="4" tm-link-detail="">01/04/2021</a></td>
                                    <td>
                                       AUTOMOBILE CLUB - A.C. - MODEN
                                    </td>
                                    <td>05034</td>
                                    <td>000000047659                                      </td>
                                    <td class="center">2</td>
                                    <td>F24</td>
                                   
                                    <td class="right"><span class="tm-importo ">2,47 EUR</span></td>
                                    <td>
                                    </td>
                                    <td></td>
                                    <td class="center">
                                       <div class="btn-group">
                                          <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <img src="fe/img/icon/more.svg">
                                          </a>
                                          <div class="dropdown-menu" x-placement="left-start" tm-menu-dropdown="">
                                             <a role="button" class="dropdown-item" tm-delete-index="4">Elimina</a>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="slide-col-4" style="display:none;"></td>
                                    <td class="slide-col-4" style="display:none;" colspan="12">
                                    </td>
                                 </tr>
                                 <tr data-index="5" style="border-bottom: solid 1px #eeeeee;">
                                    <td class="text-center">
                                        <div class="form-check-inline checkbox"><input type="checkbox" name="checkOperazioniMassive"><label></label></div>
                                    </td>
                                    <td class="text-center">
                                       <div tm-icon-plus-minus="" class="ico-btn plus-minus bg-transparent is-active color-greenLink"></div>
                                    </td>
                                    <td class="center"><a href="javascript:;" data-modal-detail="5" tm-link-detail="">01/04/2021</a></td>
                                    <td>
                                       AUTOMOBILE CLUB - A.C. - MODEN
                                    </td>
                                    <td>05034</td>
                                    <td>000000047659                                      </td>
                                    <td class="center">2</td>
                                    <td>F24</td>
                                    
                                    <td class="right"><span class="tm-importo ">2,47 EUR</span></td>
                                    <td>
                                    </td>
                                    <td></td>
                                    <td class="center">
                                       <div class="btn-group">
                                          <a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <img src="fe/img/icon/more.svg">
                                          </a>
                                          <div class="dropdown-menu" x-placement="left-start" tm-menu-dropdown="">
                                             <a role="button" class="dropdown-item" tm-delete-index="5">Elimina</a>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                
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
                           Showing 1 to 10 of 145 rows
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
                              <li class="page-item"><a class="page-link" href="#">15</a></li>
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
         <div class="container-fluid">
            <div class="row align-items-center pb-3 mt-3">
               <div class="col-12 col-md-4 d-flex align-items-start">
                  <span tm-itemscount="">Totale 145 elementi</span>      
               </div>
               <div class="col-12 col-md-4 d-flex justify-content-center" tm-navigation="">
                  <ul class="pagination is-centered bstable-v2" tm-table-pagination="">
                     <li class="page-item page-item-arrow page-item-arrow-pre" style="visibility: hidden;" tm-page-pre="">
                        <span href="javascript:void(0);" class="page-link" aria-label="Previous"><i class="icon-arrow_left"></i></span>
                     </li>
                     <li class="page-item active" tm-page-index="1">
                        <span href="javascript:void(0);" class="page-link">1</span>
                     </li>
                     <li class="page-item " tm-page-index="2">
                        <span href="javascript:void(0);" class="page-link">2</span>
                     </li>
                     <li class="page-item " tm-page-index="3">
                        <span href="javascript:void(0);" class="page-link">3</span>
                     </li>
                     <li class="page-item " tm-page-index="4">
                        <span href="javascript:void(0);" class="page-link">4</span>
                     </li>
                     <li class="page-item " tm-page-index="5">
                        <span href="javascript:void(0);" class="page-link">5</span>
                     </li>
                     <li class="page-item">...</li>
                     <li class="page-item " tm-page-index="15">
                        <span href="javascript:void(0);" class="page-link">15</span>
                     </li>
                     <li class="page-item page-item-arrow page-item-arrow-next" tm-page-next="">
                        <span href="javascript:void(0);" class="page-link" aria-label="Next"><i class="icon-arrow_right"></i></span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>

         <!-- nuova riga dei totali--->
         <div class="container-fluid">
            <div class="row align-items-center pb-3 mt-3">
               <div class="col-12 col-md-4 d-flex align-items-start">
                  <span class="font-size-16"><strong>Totale: 30 elementi - Transazioni selezionate: 4</strong></span>      
               </div>
               <div class="col-12 col-md-8 d-flex justify-content-end" tm-navigation="">
               <span class="font-size-16"><strong>Totali transazioni selezionate: <span class="color-greenLink">14.982,55</span></strong></span> 
               </div>
            </div>
         </div>
      </section>
   </div>
</div>
<!-- FINE TABELLA AGGIORNATA -->
<!--emulazione per apertura riga di tabella con dettaglio (solo esemplificativa) -->
<script>
$("#openAcc").on("click", function(){
   $(this).toggleClass("is-active");
   $(this).closest("tr").next("tr").slideToggle(200);
})
</script>
