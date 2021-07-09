<section>
   <!-- Titolo_001 -->
   <div class="titolo">
      <h1>
         <div class="row">
            <div class="col-sm-8">
               <span>CONTRATTI E PROPOSTE</span>
            </div>
         </div>
      </h1>
   </div>
</section>
<script type="text/javascript">
   // Esempio handler modale con contenuto dinamico (previsti Tipo "cc" e "fg")
   var apriModaleContatti = function(tipo){
       getAjaxModal({
           url: "parts/modali_contenuti_contatti.php",
           method: "POST",
           title: "Contattaci",
           class: "modal-footer-fixed",
           data: {
               tipocontatto: tipo
           }
       });
   }
</script>
<div class="section outerWrapperTab no-backgr">
   <div class="row">
      <div class="col-xs-12">
         <div class="innerWrapperTab">
            <ul>
               <li class="on"><a href="#" title="" role="button">In corso</a></li>
               <li><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_documenti_archivio.php&html=vr"  role="button">Archivio</a></li>
            </ul>
         </div>
         <div class="separator"></div>
      </div>
   </div>
</div>
<p>Trovi in questa pagina le pratiche in corso. Ogni pratica può contenere più documenti. <strong>Clicca su “sottoscrivi” per iniziare</strong> la sottoscrizione.
   Non trovi una pratica? Le pratiche <strong>vengono spostate nell’Archivio a partire dal giorno successivo</strong> la sottoscrizione, scadenza o rifiuto.
</p>
<!-- rivisitazione oggetto-->
<section class="font-table">
   <!-- ROW 0 -->
   <div class="row header-col right-space-small noMargin">
      <div class="col-sm-12">
         <!-- ROW 0.1 -->
         <div class="row row-eq-height pract-toggle-head alignItemCenter-desktop">
            <div class="col-sm-5">
               <h3 class="titleSection titleForm">Pratica</h3>
            </div>
            <div class="col-sm-2">
               <h3 class="titleSection titleForm">Avviata da</h3>
            </div>
            <div class="col-sm-2">
               <h3 class="titleSection titleForm">Scadenza</h3>
            </div>
            <div class="col-sm-3">
               <h3 class="titleSection titleForm">Stato</h3>
            </div>
         </div>
         <!-- END ROW 0.1 -->
      </div>
   </div>
   <!-- END ROW 0 -->
   <div class="row pract-toggle boxed no-accordion-title">
      <div class="col-sm-12">
         <!-- ROW 1.1 -->
         <div class="row row-eq-height pract-toggle-head  right-space-small marginBottomMedium">
            <div class="col-sm-5 col-xs-11">
               <!-- Text with Icon + sub-text -->                    
               <div class="text">
                  <div class="text underline dark">
                      <a href="javascript:;" data-toggle="tooltip" title="PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI N.12345">
                          <strong class="text ellipsis"> PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI  N.12345</strong>
                      </a>
                    </div>
                  <div class="sub-text">INV-0015</div>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Avviata da</div>
               <!-- Casistica Icon -->
               <div class="text-with-icon ">
                  <a onclick="apriModaleContatti('fg')" class="no-underline"><span class="icon icon-assistenza_telefono v-centered" title="icon-numeroverde_desktop"></span><span class="text dark no-underline"><strong>Gestore</strong></span></a>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Scadenza</div>
               <span class="text"><strong>20/03/2021</strong></span>
            </div>
            <div class="col-sm-3 col-xs-12">
               <div class="visible-xs">
                  <div class="mobile-label">Stato</div>
                  <div class="text-with-icon">
                     <a class="no-underline" data-target="#modaleInfo" data-toggle="modal">
                        <!-- immagine di stato-->
                        <span class="text no-underline"><span class="dark"><strong>NUOVA</strong></span></span>
                        <i class="icon icon-ico_help_filled_tab v-centered right"></i>
                     </a>
                  </div>
               </div>
               <div class="hidden-xs">
                  <div class="text-with-icon">
                     <a class="no-underline" data-toggle="tooltip" title="Potrai iniziare la sottoscrizione della pratica una volta che il cointestatario avrà completato la sua parte.">
                     <span class="text no-underline"><span class="dark"><strong>NUOVA</strong></span></span>
                     <i class="icon icon-ico_help_filled_tab  v-centered"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="wrapper-icon-fixed">
               <div class="linked-icon">
                   <div class="text-with-icon right-icon">
                    <a href="#"><span class="icon icon-trash_filled"></span><span class="text">Rifiuta</span></a>
                </div>
               </div>
            </div>
         </div>
         <div class="row row-eq-height pract-toggle-head alignItemCenter-desktop marginBottomMedium">
            <div class="col-xs-12">
               <div class="text-with-icon ico-large">
                  <a href="#">
                  <span class="image-icon pdf"></span>
                  </a>
                  <span class="text dark">PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI N.12345</span>
                  <span class="sub-text">Proposta di consulenza in materia di investimenti e operazioni su strumenti finanziari, raccomandata dal tuo gestore, personalizzata per te e
                  adeguata al tuo profilo di rischio. <a href="#">Vedi il pdf per i dettagli</a></span>
               </div>
            </div>
         </div>
         <div class="wrapper-pos-accordion">
            <div class="row row-eq-height pract-toggle-head alignItemCenter-desktop collapser">
               <div class="col-xs-12 col-sm-8">
                  <div class="text-with-icon">
                     <a class="linker" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
                     <span class="icon icon-arrow_down" title="icon-arrow_down"></span>
                     <span class="icon icon-arrow_up" title="icon-arrow_up"></span>
                     <span class="text no-underline">Anteprima documenti da sottoscrivere</span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row collapse" id="collapse1" aria-expanded="true" style="">
               <div class="col-sm-12">
                  <div class="accord-content noPadding">
                     <div class="history-elements">
                        <!-- ROW 1.2.1 -->
                        <div class="row">
                           <div class="col-xs-9 col-sm-7">
                              <div class="history-element inactive">
                                 <div class="bullet-wrapper-target">
                                    <div class="bullet-wrapper">
                                       <div class="bullet"></div>
                                       <div class="bullet-route"></div>
                                    </div>
                                 </div>
                                 <div class="text-with-icon-target">
                                    <!-- Casistica Icon -->
                                    <div class="text-with-icon">
                                       <a href="#">
                                       <span class="image-icon pdf"></span>
                                       <span class="text inactive">Nome_documento_1</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-3 noPaddingMob">
                              <div class="group-wrapper with-spunta ">
                                 <div class="group-element">-</div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-2 align-center noPaddingMob">
                              <div class="group-wrapper ">
                                 <div class="group-element"><span class="text">-</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END ROW 1.2.1 -->
                        <!-- ROW 1.2.2 -->
                        <div class="row">
                           <div class="col-xs-9 col-sm-7">
                              <div class="history-element inactive">
                                 <div class="bullet-wrapper-target">
                                    <div class="bullet-wrapper">
                                       <div class="bullet"></div>
                                       <div class="bullet-route"></div>
                                    </div>
                                 </div>
                                 <div class="text-with-icon-target">
                                    <!-- Casistica Icon -->
                                    <div class="text-with-icon">
                                       <a href="#">
                                       <span class="image-icon pdf"></span>
                                       <span class="text inactive">Nome_documento_1</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-3 noPaddingMob">
                              <div class="group-wrapper with-spunta ">
                                 <div class="group-element">-</div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-2 align-center noPaddingMob align-center">
                              <div class="group-wrapper ">
                                 <div class="group-element"><span class="text">-</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END ROW 1.2.2 -->
                        <!-- ROW 1.2.3 -->
                        <div class="row">
                           <div class="col-xs-9 col-sm-7">
                              <div class="history-element inactive">
                                 <div class="bullet-wrapper-target">
                                    <div class="bullet-wrapper">
                                       <div class="bullet"></div>
                                       <div class="bullet-route"></div>
                                    </div>
                                 </div>
                                 <div class="text-with-icon-target">
                                    <!-- Casistica Icon -->
                                    <div class="text-with-icon">
                                       <a href="#">
                                       <span class="image-icon pdf"></span>
                                       <span class="text inactive">Nome_documento_1</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-3 noPaddingMob">
                              <div class="group-wrapper with-spunta ">
                                 <div class="group-element">-</div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-2 align-center noPaddingMob align-center">
                              <div class="group-wrapper ">
                                 <div class="group-element"><span class="text">-</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END ROW 1.2.3 -->
                     </div>
                  </div>
               </div>
            </div>
            <div class="wrapper-pos-cta btn-wrapper col-xs-2 col-sm-2">
               <a type="button" href="#" class="btn btn-primary noMargin" title="sottoscrivi">Sottoscrivi</a>
            </div>
         </div>
      </div>
   </div>



   <div class="row pract-toggle boxed no-accordion-title">
      <div class="col-sm-12">
         <!-- ROW 2.1 -->
         <div class="row row-eq-height pract-toggle-head  right-space-small marginBottomMedium">
            <div class="col-sm-5 col-xs-11">
               <!-- Text with Icon + sub-text -->                    
               <div class="text">
                  <div class="text underline dark">
                      <a href="javascript:;" data-toggle="tooltip" title="PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI N.12345">
                          <strong class="text ellipsis"> PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI  N.12345</strong>
                      </a>
                    </div>
                  <div class="sub-text">INV-0015</div>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Avviata da</div>
               <!-- Casistica Icon -->
               <div class="text-with-icon ">
                  <a onclick="apriModaleContatti('fg')" class="no-underline"><span class="icon icon-assistenza_telefono v-centered v-centered" title="icon-numeroverde_desktop"></span><span class="text dark no-underline"><strong>Gestore</strong></span></a>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Scadenza</div>
               <span class="text "><strong>20/03/2021</strong></span>
            </div>
            <div class="col-sm-3 col-xs-12">
               <div class="visible-xs">
                  <div class="mobile-label">Stato</div>
                  <div class="text-with-icon">
                     <a class="no-underline" data-target="#modaleInfo" data-toggle="modal">
                        <!-- immagine di stato-->
                        <span class="text no-underline"><span class="dark"><strong>NUOVA</strong></span></span>
                        <i class="icon icon-ico_help_filled_tab v-centered right"></i>
                     </a>
                  </div>
               </div>
               <div class="hidden-xs">
                  <div class="text-with-icon">
                     <a class="no-underline" data-toggle="tooltip" title="Potrai iniziare la sottoscrizione della pratica una volta che il cointestatario avrà completato la sua parte.">
                     <span class="text no-underline"><span class="dark"><strong>NUOVA</strong></span></span>
                     <i class="icon icon-ico_help_filled_tab  v-centered"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="wrapper-icon-fixed">
               <div class="linked-icon">
                   <div class="text-with-icon right-icon">
                    <a href="#"><span class="icon icon-trash_filled"></span><span class="text">Rifiuta</span></a>
                </div>
               </div>
            </div>
         </div>
         <div class="row row-eq-height pract-toggle-head alignItemCenter-desktop marginBottomMedium">
            <div class="col-xs-12">
               <span class="text dark">ABILITAZIONE CONSULENZA FINANZIARIA IN OAD</span>
                <span class="sub-text">Abilitazione all’utilizzo del servizio di consulenza finanziaria secondo tecniche di comunicazione a distanza.</span>
               
            </div>
         </div>
         <div class="wrapper-pos-accordion">
            <div class="row row-eq-height pract-toggle-head alignItemCenter-desktop collapser">
               <div class="col-xs-12 col-sm-8">
                  <div class="text-with-icon">
                     <a class="linker" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                     <span class="icon icon-arrow_down" title="icon-arrow_down"></span>
                     <span class="icon icon-arrow_up" title="icon-arrow_up"></span>
                     <span class="text no-underline">Anteprima documenti da sottoscrivere</span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row collapse" id="collapse2" aria-expanded="true" style="">
               <div class="col-sm-12">
                  <div class="accord-content noPadding">
                     <div class="history-elements">
                        <!-- ROW 1.2.1 -->
                        <div class="row">
                           <div class="col-xs-9 col-sm-7">
                              <div class="history-element inactive">
                                 <div class="bullet-wrapper-target">
                                    <div class="bullet-wrapper">
                                       <div class="bullet"></div>
                                       <div class="bullet-route"></div>
                                    </div>
                                 </div>
                                 <div class="text-with-icon-target">
                                    <!-- Casistica Icon -->
                                    <div class="text-with-icon">
                                       <a href="#">
                                       <span class="image-icon pdf"></span>
                                       <span class="text inactive">Nome_documento_1</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-3 noPaddingMob">
                              <div class="group-wrapper with-spunta ">
                                 <div class="group-element">-</div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-2 align-center noPaddingMob align-center">
                              <div class="group-wrapper ">
                                 <div class="group-element"><span class="text">-</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END ROW 1.2.1 -->
                        <!-- ROW 1.2.2 -->
                        <div class="row">
                           <div class="col-xs-9 col-sm-7">
                              <div class="history-element inactive">
                                 <div class="bullet-wrapper-target">
                                    <div class="bullet-wrapper">
                                       <div class="bullet"></div>
                                       <div class="bullet-route"></div>
                                    </div>
                                 </div>
                                 <div class="text-with-icon-target">
                                    <!-- Casistica Icon -->
                                    <div class="text-with-icon">
                                       <a href="#">
                                       <span class="image-icon pdf"></span>
                                       <span class="text inactive">Nome_documento_1</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-3 noPaddingMob">
                              <div class="group-wrapper with-spunta ">
                                 <div class="group-element">-</div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-2 align-center noPaddingMob">
                              <div class="group-wrapper ">
                                 <div class="group-element"><span class="text">-</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END ROW 1.2.2 -->
                        <!-- ROW 1.2.3 -->
                        <div class="row">
                           <div class="col-xs-9 col-sm-7">
                              <div class="history-element inactive">
                                 <div class="bullet-wrapper-target">
                                    <div class="bullet-wrapper">
                                       <div class="bullet"></div>
                                       <div class="bullet-route"></div>
                                    </div>
                                 </div>
                                 <div class="text-with-icon-target">
                                    <!-- Casistica Icon -->
                                    <div class="text-with-icon">
                                       <a href="#">
                                       <span class="image-icon pdf"></span>
                                       <span class="text inactive">Nome_documento_1</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-3 noPaddingMob">
                              <div class="group-wrapper with-spunta ">
                                 <div class="group-element">-</div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-3 align-center noPaddingMob">
                              <div class="group-wrapper ">
                                 <div class="group-element"><span class="text">-</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END ROW 1.2.3 -->
                     </div>
                  </div>
               </div>
            </div>
            <div class="wrapper-pos-cta btn-wrapper col-xs-12 col-sm-2">
               <div class="">
                  <a type="button" href="#" class="btn btn-primary noMargin" title="sottoscrivi">Sottoscrivi</a>
               </div>
            </div>
         </div>
      </div>
   </div>


    <! -- NO ACCORDION content -->
   <div class="row pract-toggle boxed no-accordion-title no-accordion-content">
      <div class="col-sm-12">
         <!-- ROW 3.1 -->
         <div class="row row-eq-height pract-toggle-head  right-space-small marginBottomMedium">
            <div class="col-sm-5 col-xs-11">
               <!-- Text with Icon + sub-text -->                    
               <div class="text">
                  <div class="text underline dark"><strong> REGOLAMENTO INTERESSI DEBITORI</strong></div>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Avviata da</div>
               <!-- Casistica Icon -->
               <div class="text-with-icon ">
                  <a onclick="apriModaleContatti('fg')" class="no-underline"><span class="icon icon-assistenza_telefono v-centered v-centered" title="icon-numeroverde_desktop"></span><span class="text dark no-underline"><strong>Gestore</strong></span></a>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Scadenza</div>
               <span class="text "><strong>20/03/2021</strong></span>
            </div>
            <div class="col-sm-3 col-xs-12">
               <div class="visible-xs">
                  <div class="mobile-label">Stato</div>
                  <div class="text-with-icon">
                     <a class="no-underline" data-target="#modaleInfo" data-toggle="modal">
                        <!-- immagine di stato-->
                        <span class="text no-underline"><span class="dark"><strong>NUOVA</strong></span></span>
                        <i class="icon icon-ico_help_filled_tab v-centered right"></i>
                     </a>
                  </div>
               </div>
               <div class="hidden-xs">
                  <div class="text-with-icon">
                     <a class="no-underline" data-toggle="tooltip" title="Potrai iniziare la sottoscrizione della pratica una volta che il cointestatario avrà completato la sua parte.">
                     <span class="text no-underline"><span class="dark"><strong>NUOVA</strong></span></span>
                     <i class="icon icon-ico_help_filled_tab  v-centered"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="wrapper-icon-fixed">
               <div class="linked-icon">
                   <div class="text-with-icon right-icon">
                    <a href="#"><span class="icon icon-trash_filled"></span><span class="text">Rifiuta</span></a>
                </div>
               </div>
            </div>
         </div>
         <div class="row row-eq-height pract-toggle-head alignItemCenter-desktop marginBottomMedium">
            <div class="col-xs-12">
               <span class="text dark">REGOLAMENTO INTERESSI DEBITORI</span>
                <span class="sub-text">Consenso all’addebito automatico degli interessi debitori (anatocismo).</span>
               
            </div>
         </div>
         <div class="wrapper-pos-accordion">
            <div class="wrapper-pos-cta btn-wrapper col-xs-12 col-sm-2">
               <div class="">
                  <a type="button" href="#" class="btn btn-primary noMargin" title="sottoscrivi">Sottoscrivi</a>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!--RIPRENDI -->
   <div class="row pract-toggle boxed no-accordion-title">
      <div class="col-sm-12">
         <!-- ROW 2.1 -->
         <div class="row row-eq-height pract-toggle-head  right-space-small marginBottomMedium">
         <div class="col-sm-5 col-xs-11">
               <!-- Text with Icon + sub-text -->                    
               <div class="text">
                  <div class="text underline dark">
                      <a href="javascript:;" data-toggle="tooltip" title="PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI N.12345">
                          <strong class="text ellipsis"> PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI  N.12345</strong>
                      </a>
                    </div>
                  <div class="sub-text">INV-0015</div>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Avviata da</div>
               <!-- Casistica Icon -->
               <div class="text-with-icon ">
                  <a onclick="apriModaleContatti('fg')" class="no-underline"><span class="icon icon-assistenza_telefono v-centered v-centered" title="icon-numeroverde_desktop"></span><span class="text dark no-underline"><strong>Gestore</strong></span></a>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Scadenza</div>
               <span class="text "><strong>20/03/2021</strong></span>
            </div>
            <div class="col-sm-3 col-xs-12">
               <div class="visible-xs">
                  <div class="mobile-label">Stato</div>
                  <div class="text-with-icon">
                     <a class="no-underline" data-target="#modaleInfo" data-toggle="modal">
                        <!-- immagine di stato-->
                        <span class="text no-underline"><span class="dark"><strong>FIRMATA PARZIALMENTE</strong></span></span>
                        <i class="icon icon-ico_help_filled_tab v-centered right"></i>
                     </a>
                  </div>
               </div>
               <div class="hidden-xs">
                  <div class="text-with-icon">
                     <a class="no-underline" data-toggle="tooltip" title="Potrai iniziare la sottoscrizione della pratica una volta che il cointestatario avrà completato la sua parte.">
                     <span class="text no-underline"><span class="dark"><strong>FIRMATA PARZIALMENTE</strong></span></span>
                     <i class="icon icon-ico_help_filled_tab  v-centered"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="wrapper-icon-fixed">
               <div class="linked-icon">
                   <div class="text-with-icon right-icon">
                    <a href="#"><span class="icon icon-trash_filled"></span><span class="text">Rifiuta</span></a>
                </div>
               </div>
            </div>
         </div>
         <div class="row row-eq-height pract-toggle-head alignItemCenter-desktop marginBottomMedium">
            <div class="col-xs-12">
               <div class="text-with-icon ico-large">
                  <a href="#">
                  <span class="image-icon pdf"></span>
                  </a>
                  <span class="text dark">PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI N.12345</span>
                  <span class="sub-text">Proposta di consulenza in materia di investimenti e operazioni su strumenti finanziari, raccomandata dal tuo gestore, personalizzata per te e
                  adeguata al tuo profilo di rischio. <a href="#">Vedi il pdf per i dettagli</a></span>
               </div>
            </div>
         </div>
         <div class="wrapper-pos-accordion">
            <div class="row row-eq-height pract-toggle-head alignItemCenter-desktop collapser">
               <div class="col-xs-12 col-sm-8">
                  <div class="text-with-icon">
                     <a class="linker" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
                     <span class="icon icon-arrow_down" title="icon-arrow_down"></span>
                     <span class="icon icon-arrow_up" title="icon-arrow_up"></span>
                     <span class="text no-underline">Anteprima documenti da sottoscrivere</span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row collapse" id="collapse3" aria-expanded="true" style="">
               <div class="col-sm-12">
                  <div class="accord-content noPadding">
                     <div class="history-elements">
                        <!-- ROW 1.2.1 -->
                        <div class="row">
                           <div class="col-xs-9 col-sm-7">
                              <div class="history-element inactive">
                                 <div class="bullet-wrapper-target">
                                    <div class="bullet-wrapper">
                                       <div class="bullet"></div>
                                       <div class="bullet-route"></div>
                                    </div>
                                 </div>
                                 <div class="text-with-icon-target">
                                    <!-- Casistica Icon -->
                                    <div class="text-with-icon">
                                       <a href="#">
                                       <span class="image-icon pdf"></span>
                                       <span class="text inactive">Nome_documento_1</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-3 noPaddingMob">
                              <div class="group-wrapper with-spunta ">
                                 <div class="group-element">-</div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-2 align-center noPaddingMob align-center">
                              <div class="group-wrapper ">
                                 <div class="group-element"><span class="text">-</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END ROW 1.2.1 -->
                        <!-- ROW 1.2.2 -->
                        <div class="row">
                           <div class="col-xs-9 col-sm-7">
                              <div class="history-element inactive">
                                 <div class="bullet-wrapper-target">
                                    <div class="bullet-wrapper">
                                       <div class="bullet"></div>
                                       <div class="bullet-route"></div>
                                    </div>
                                 </div>
                                 <div class="text-with-icon-target">
                                    <!-- Casistica Icon -->
                                    <div class="text-with-icon">
                                       <a href="#">
                                       <span class="image-icon pdf"></span>
                                       <span class="text inactive">Nome_documento_1</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-3 noPaddingMob">
                              <div class="group-wrapper with-spunta ">
                                 <div class="group-element">-</div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-2 align-center noPaddingMob">
                              <div class="group-wrapper ">
                                 <div class="group-element"><span class="text">-</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END ROW 1.2.2 -->
                        <!-- ROW 1.2.3 -->
                        <div class="row">
                           <div class="col-xs-9 col-sm-7">
                              <div class="history-element inactive">
                                 <div class="bullet-wrapper-target">
                                    <div class="bullet-wrapper">
                                       <div class="bullet"></div>
                                       <div class="bullet-route"></div>
                                    </div>
                                 </div>
                                 <div class="text-with-icon-target">
                                    <!-- Casistica Icon -->
                                    <div class="text-with-icon">
                                       <a href="#">
                                       <span class="image-icon pdf"></span>
                                       <span class="text inactive">Nome_documento_1</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-3 noPaddingMob">
                              <div class="group-wrapper with-spunta ">
                                 <div class="group-element">-</div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-3 align-center noPaddingMob">
                              <div class="group-wrapper ">
                                 <div class="group-element"><span class="text">-</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END ROW 1.2.3 -->
                     </div>
                  </div>
               </div>
            </div>
            <div class="wrapper-pos-cta btn-wrapper col-xs-12 col-sm-2">
               <div class="">
                  <a type="button" href="#" class="btn btn-primary noMargin" title="sottoscrivi">Riprendi</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   
   <!-- stato già sottoscritta -->
   <div class="row pract-toggle boxed no-accordion-title">
      <div class="col-sm-12">
         <!-- ROW 4.1 -->
         <div class="row row-eq-height pract-toggle-head  right-space-small marginBottomMedium">
         <div class="col-sm-5 col-xs-11">
               <!-- Text with Icon + sub-text -->                    
               <div class="text">
                  <div class="text underline dark">
                      <a href="javascript:;" data-toggle="tooltip" title="PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI N.12345">
                          <strong class="text ellipsis"> PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI  N.12345</strong>
                      </a>
                    </div>
                  <div class="sub-text">INV-0015</div>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Avviata da</div>
               <!-- Casistica Icon -->
               <div class="text-with-icon">
                  <a onclick="apriModaleContatti('fg')" class="no-underline"><span class="icon icon-assistenza_telefono v-centered" title="icon-numeroverde_desktop"></span><span class="text dark no-underline"><strong>Gestore</strong></span></a>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Scadenza</div>
               <span class="text "><strong>20/03/2021</strong></span>
            </div>
            <div class="col-sm-3 col-xs-12">
               <div class="visible-xs">
                  <div class="mobile-label">Stato</div>
                  <div class="text-with-icon">
                     <a class="no-underline" data-target="#modaleInfo" data-toggle="modal">
                        <!-- immagine di stato-->
                        <span class="text no-underline"><span class="dark"><strong>SOTTOSCRITTA</strong></span></span>
                        <i class="icon icon-ico_help_filled_tab v-centered right"></i>
                     </a>
                  </div>
               </div>
               <div class="hidden-xs">
                  <div class="text-with-icon">
                     <a class="no-underline" data-toggle="tooltip" title="Potrai iniziare la sottoscrizione della pratica una volta che il cointestatario avrà completato la sua parte.">
                     <span class="text no-underline"><span class="dark"><strong>SOTTOSCRITTA</strong></span></span>
                     <i class="icon icon-ico_help_filled_tab  v-centered"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="wrapper-icon-fixed">
               <div class="linked-icon">
                   <div class="text-with-icon right-icon">
                    <a href="#"><span class="icon icon-trash_filled"></span><span class="text">Rifiuta</span></a>
                </div>
               </div>
            </div>
         </div>
         <div class="row row-eq-height pract-toggle-head alignItemCenter-desktop marginBottomMedium">
            <div class="col-xs-12">
               <div class="text-with-icon ico-large">
                  <a href="#">
                  <span class="image-icon pdf"></span>
                  </a>
                  <span class="text dark">PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI N.12345</span>
                  <span class="sub-text">Proposta di consulenza in materia di investimenti e operazioni su strumenti finanziari, raccomandata dal tuo gestore, personalizzata per te e
                  adeguata al tuo profilo di rischio. <a href="#">Vedi il pdf per i dettagli</a></span>
               </div>
            </div>
         </div>
         <div class="wrapper-pos-accordion">
            <div class="row row-eq-height pract-toggle-head alignItemCenter-desktop collapser">
               <div class="col-xs-12 col-sm-8">
                  <div class="text-with-icon">
                     <a class="linker" data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false" aria-controls="collapse4">
                     <span class="icon icon-arrow_down" title="icon-arrow_down"></span>
                     <span class="icon icon-arrow_up" title="icon-arrow_up"></span>
                     <span class="text no-underline">Anteprima documenti da sottoscrivere</span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row collapse" id="collapse4" aria-expanded="true" style="">
               <div class="col-sm-12">
                  <div class="accord-content noPadding">
                  <div class="history-elements">
                            <!-- ROW 7.2.1 -->
                                <div class="row">
                                    <div class="col-xs-9 col-sm-7">
                                       <div class="history-element">
                                            <div class="bullet-wrapper-target">                                  
                                                <div class="bullet-wrapper">
                                                    <div class="bullet"></div> 
                                                    <div class="bullet-route"></div>                               
                                                </div>
                                            </div>
                                            <div class="text-with-icon-target">
                                                <!-- Casistica Icon -->
                                                <div class="text-with-icon">
                                                    <a href="#">
                                                        <span class="image-icon pdf"></span>
                                                        <span class="text positive2">Nome_documento_1</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-2 col-sm-3 noPaddingMob">                           
                                        <div class="group-wrapper  with-spunta">
                                            <div class="group-element">
                                                <span class="image-icon stato-ok"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 col-sm-2 align-center noPaddingMob">                           
                                        <div class="group-wrapper">
                                            <div class="group-element">
                                                <span class="text">20/03/2021</span>
                                            </div>
                                        </div>
                                    </div>       
                                </div>
                            <!-- END ROW 7.2.1 -->

                            <!-- ROW 7.2.2 -->
                            <div class="row">
                                    <div class="col-xs-9 col-sm-7">
                                       <div class="history-element">
                                            <div class="bullet-wrapper-target">                                  
                                                <div class="bullet-wrapper">
                                                    <div class="bullet"></div> 
                                                    <div class="bullet-route"></div>                               
                                                </div>
                                            </div>
                                            <div class="text-with-icon-target">
                                                <!-- Casistica Icon -->
                                                <div class="text-with-icon">
                                                    <a href="#">
                                                        <span class="image-icon pdf"></span>
                                                        <span class="text positive2">Nome_documento_1</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-2 col-sm-3 noPaddingMob">                           
                                        <div class="group-wrapper  with-spunta">
                                            <div class="group-element">
                                            <span class="image-icon stato-ok"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 col-sm-2 align-center noPaddingMob">                           
                                        <div class="group-wrapper">
                                            <div class="group-element">
                                                <span class="text">20/03/2021</span>
                                            </div>
                                        </div>
                                    </div>      
                                </div>
                            <!-- END ROW 7.2.2 -->
                            <!-- ROW 7.2.3 -->
                            <div class="row">
                                    <div class="col-xs-9 col-sm-7 col-lm-8">
                                       <div class="history-element positive2">
                                            <div class="bullet-wrapper-target">                                  
                                                <div class="bullet-wrapper">
                                                    <div class="bullet"></div> 
                                                    <div class="bullet-route"></div>                               
                                                </div>
                                            </div>
                                            <div class="text-with-icon-target">
                                                <!-- Casistica Icon -->
                                                <div class="text-with-icon">
                                                    <a href="#">
                                                        <span class="image-icon pdf"></span>
                                                        <span class="text positive2">Nome_documento_1</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-2 col-sm-3 noPaddingMob">                           
                                        <div class="group-wrapper  with-spunta">
                                            <div class="group-element">
                                                <span class="image-icon stato-ok"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 col-sm-2 align-center noPaddingMob">                           
                                        <div class="group-wrapper">
                                            <div class="group-element">
                                                <span class="text positive2">20/03/2021</span>
                                            </div>
                                        </div>
                                    </div>      
                            </div>
                           
                        </div>
                  </div>
               </div>
            </div>
            <div class="wrapper-pos-cta col-xs-12 col-sm-2">
                <div class="text-with-icon">
                        <span class="image-icon stato-ok" title="sottoscritta"></span>
                        <span class="text positive2">Sottoscritta</span>
                </div>
            </div>
         </div>
      </div>
   </div>

   
   <!-- stato sottoscrivere disabilitato -->
   <div class="row pract-toggle boxed no-accordion-title">
      <div class="col-sm-12">
         <!-- ROW 1.1 -->
         <div class="row row-eq-height pract-toggle-head  right-space-small marginBottomMedium">
         <div class="col-sm-5 col-xs-11">
               <!-- Text with Icon + sub-text -->                    
               <div class="text">
                  <div class="text underline dark">
                      <a href="javascript:;" data-toggle="tooltip" title="PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI N.12345">
                          <strong class="text ellipsis"> PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI  N.12345</strong>
                      </a>
                    </div>
                  <div class="sub-text">INV-0015</div>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Avviata da</div>
               <!-- Casistica Icon -->
               <div class="text-with-icon ">
                  <a onclick="apriModaleContatti('fg')" class="no-underline"><span class="icon icon-assistenza_telefono v-centered v-centered" title="icon-numeroverde_desktop"></span><span class="text dark no-underline"><strong>Gestore</strong></span></a>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Scadenza</div>
               <span class="text ">20/03/2021</span>
            </div>
            <div class="col-sm-3 col-xs-12">
               <div class="visible-xs">
                  <div class="mobile-label">Stato</div>
                  <div class="text-with-icon">
                     <a class="no-underline" data-target="#modaleInfo" data-toggle="modal">
                        <!-- immagine di stato-->
                        <span class="text no-underline"><span class="dark"><strong>NUOVA</strong></span></span>
                        <i class="icon icon-ico_help_filled_tab v-centered right"></i>
                     </a>
                  </div>
               </div>
               <div class="hidden-xs">
                        <div class="text-with-icon">
                            <a class="no-underline" data-toggle="tooltip" title="Potrai iniziare la sottoscrizione della pratica una volta che il cointestatario avrà completato la sua parte.">
                                <span class="text no-underline">
                                    <span class="dark no-underline"><strong>NUOVA</strong></span>
                                    <br>
                                    <span class="sub-text">In attesa di cointestatario</span>
                                </span>
                                <i class="icon icon-ico_help_filled_tab  v-centered"></i>
                            </a>
                        </div>
               </div>
            </div>
            <div class="wrapper-icon-fixed">
               <div class="linked-icon disabled">
                   <div class="text-with-icon right-icon">
                    <a href="#"><span class="icon icon-trash_filled"></span><span class="text">Rifiuta</span></a>
                </div>
               </div>
            </div>
         </div>
         <div class="row row-eq-height pract-toggle-head alignItemCenter-desktop marginBottomMedium">
            <div class="col-xs-12">
               <div class="text-with-icon ico-large">
                  <a href="#">
                  <span class="image-icon pdf"></span>
                  </a>
                  <span class="text dark">PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI N.12345</span>
                  <span class="sub-text">Proposta di consulenza in materia di investimenti e operazioni su strumenti finanziari, raccomandata dal tuo gestore, personalizzata per te e
                  adeguata al tuo profilo di rischio. <a href="#">Vedi il pdf per i dettagli</a></span>
               </div>
            </div>
         </div>
         <div class="wrapper-pos-accordion">
            <div class="row row-eq-height pract-toggle-head alignItemCenter-desktop collapser">
               <div class="col-xs-12 col-sm-8">
                  <div class="text-with-icon">
                     <a class="linker" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse5">
                     <span class="icon icon-arrow_down" title="icon-arrow_down"></span>
                     <span class="icon icon-arrow_up" title="icon-arrow_up"></span>
                     <span class="text no-underline">Anteprima documenti da sottoscrivere</span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row collapse" id="collapse5" aria-expanded="true" style="">
               <div class="col-sm-12">
                  <div class="accord-content noPadding">
                     <div class="history-elements">
                        <!-- ROW 1.2.1 -->
                        <div class="row">
                           <div class="col-xs-9 col-sm-7">
                              <div class="history-element inactive">
                                 <div class="bullet-wrapper-target">
                                    <div class="bullet-wrapper">
                                       <div class="bullet"></div>
                                       <div class="bullet-route"></div>
                                    </div>
                                 </div>
                                 <div class="text-with-icon-target">
                                    <!-- Casistica Icon -->
                                    <div class="text-with-icon">
                                       <a href="#">
                                       <span class="image-icon pdf"></span>
                                       <span class="text inactive">Nome_documento_1</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-3 noPaddingMob">
                              <div class="group-wrapper with-spunta ">
                                 <div class="group-element">-</div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-2 noPaddingMob align-center">
                              <div class="group-wrapper ">
                                 <div class="group-element"><span class="text">-</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END ROW 1.2.1 -->
                        <!-- ROW 1.2.2 -->
                        <div class="row">
                           <div class="col-xs-9 col-sm-7">
                              <div class="history-element inactive">
                                 <div class="bullet-wrapper-target">
                                    <div class="bullet-wrapper">
                                       <div class="bullet"></div>
                                       <div class="bullet-route"></div>
                                    </div>
                                 </div>
                                 <div class="text-with-icon-target">
                                    <!-- Casistica Icon -->
                                    <div class="text-with-icon">
                                       <a href="#">
                                       <span class="image-icon pdf"></span>
                                       <span class="text inactive">Nome_documento_1</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-3 noPaddingMob">
                              <div class="group-wrapper with-spunta ">
                                 <div class="group-element">-</div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-2 noPaddingMob align-center">
                              <div class="group-wrapper ">
                                 <div class="group-element"><span class="text">-</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END ROW 1.2.2 -->
                        <!-- ROW 1.2.3 -->
                        <div class="row">
                           <div class="col-xs-9 col-sm-7">
                              <div class="history-element inactive">
                                 <div class="bullet-wrapper-target">
                                    <div class="bullet-wrapper">
                                       <div class="bullet"></div>
                                       <div class="bullet-route"></div>
                                    </div>
                                 </div>
                                 <div class="text-with-icon-target">
                                    <!-- Casistica Icon -->
                                    <div class="text-with-icon">
                                       <a href="#">
                                       <span class="image-icon pdf"></span>
                                       <span class="text inactive">Nome_documento_1</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-3 noPaddingMob">
                              <div class="group-wrapper with-spunta ">
                                 <div class="group-element">-</div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-2 noPaddingMob align-center">
                              <div class="group-wrapper ">
                                 <div class="group-element"><span class="text">-</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END ROW 1.2.3 -->
                     </div>
                  </div>
               </div>
            </div>
            <div class="wrapper-pos-cta btn-wrapper col-xs-2 col-sm-2">
               <a type="button" href="#" class="btn btn-primary noMargin disabled" title="sottoscrivi">Sottoscrivi</a>
            </div>
         </div>
      </div>
   </div>


  

   <!-- stato in attesa di cointestatario -->
   <div class="row pract-toggle boxed no-accordion-title">
      <div class="col-sm-12">
         <!-- ROW 4.1 -->
         <div class="row row-eq-height pract-toggle-head  right-space-small marginBottomMedium">
         <div class="col-sm-5 col-xs-11">
               <!-- Text with Icon + sub-text -->                    
               <div class="text">
                  <div class="text underline dark">
                      <a href="javascript:;" data-toggle="tooltip" title="PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI N.12345">
                          <strong class="text ellipsis"> PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI  N.12345</strong>
                      </a>
                    </div>
                  <div class="sub-text">INV-0015</div>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Avviata da</div>
               <!-- Casistica Icon -->
               <div class="text-with-icon ">
                  <a onclick="apriModaleContatti('fg')" class="no-underline"><span class="icon icon-assistenza_telefono v-centered v-centered" title="icon-numeroverde_desktop"></span><span class="text dark no-underline"><strong>Gestore</strong></span></a>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Scadenza</div>
               <span class="text ">20/03/2021</span>
            </div>
            <div class="col-sm-3 col-xs-12">
               <div class="visible-xs">
                  <div class="mobile-label">Stato</div>
                  <div class="text-with-icon">
                     <a class="no-underline" data-target="#modaleInfo" data-toggle="modal">
                            <span class="text no-underline">
                                <span class="dark"><strong>FIRMATA PARZIALMENTE</strong></span>
                                <br>
                                <span class="sub-text">In attesa di cointestatario</span>
                            </span>
                            <i class="icon icon-ico_help_filled_tab  v-centered right"></i>
                     </a>
                  </div>
               </div>
               <div class="hidden-xs">
                <div class="text-with-icon">
                        <a class="no-underline" data-toggle="tooltip" title="Potrai iniziare la sottoscrizione della pratica una volta che il cointestatario avrà completato la sua parte.">
                            <span class="text no-underline">
                                <span class="dark"><strong>FIRMATA PARZIALMENTE</strong></span>
                                <br>
                                <span class="sub-text">In attesa di cointestatario</span>
                            </span>
                            <i class="icon icon-ico_help_filled_tab  v-centered"></i>
                        </a>
                    </div>
               </div>
            </div>
            <div class="wrapper-icon-fixed">
               <div class="linked-icon">
                   <div class="text-with-icon right-icon">
                    <a href="#"><span class="icon icon-trash_filled"></span><span class="text">Rifiuta</span></a>
                </div>
               </div>
            </div>
         </div>
         <div class="row row-eq-height pract-toggle-head alignItemCenter-desktop marginBottomMedium">
            <div class="col-xs-12">
               <div class="text-with-icon ico-large">
                  <a href="#">
                  <span class="image-icon pdf"></span>
                  </a>
                  <span class="text dark">PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI N.12345</span>
                  <span class="sub-text">Proposta di consulenza in materia di investimenti e operazioni su strumenti finanziari, raccomandata dal tuo gestore, personalizzata per te e
                  adeguata al tuo profilo di rischio. <a href="#">Vedi il pdf per i dettagli</a></span>
               </div>
            </div>
         </div>
         <div class="wrapper-pos-accordion">
            <div class="row row-eq-height pract-toggle-head alignItemCenter-desktop collapser">
               <div class="col-xs-12 col-sm-8">
                  <div class="text-with-icon">
                     <a class="linker" data-toggle="collapse" href="#collapse6" role="button" aria-expanded="false" aria-controls="collapse6">
                     <span class="icon icon-arrow_down" title="icon-arrow_down"></span>
                     <span class="icon icon-arrow_up" title="icon-arrow_up"></span>
                     <span class="text no-underline">Anteprima documenti da sottoscrivere</span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row collapse" id="collapse6" aria-expanded="true" style="">
               <div class="col-sm-12">
                  <div class="accord-content noPadding">
                  <div class="history-elements">
                            <!-- ROW 7.2.1 -->
                                <div class="row">
                                    <div class="col-xs-9 col-sm-7">
                                       <div class="history-element">
                                            <div class="bullet-wrapper-target">                                  
                                                <div class="bullet-wrapper">
                                                    <div class="bullet"></div> 
                                                    <div class="bullet-route"></div>                               
                                                </div>
                                            </div>
                                            <div class="text-with-icon-target">
                                                <!-- Casistica Icon -->
                                                <div class="text-with-icon">
                                                    <a href="#">
                                                        <span class="image-icon pdf"></span>
                                                        <span class="text positive2">Nome_documento_1</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-2 col-sm-3 noPaddingMob">                           
                                        <div class="group-wrapper  with-spunta">
                                            <div class="group-element">
                                                <span class="image-icon stato-ok"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 col-sm-2 align-center noPaddingMob">                           
                                        <div class="group-wrapper">
                                            <div class="group-element">
                                                <span class="text">20/03/2021</span>
                                            </div>
                                        </div>
                                    </div>       
                                </div>
                            <!-- END ROW 7.2.1 -->

                            <!-- ROW 7.2.2 -->
                            <div class="row">
                                    <div class="col-xs-9 col-sm-7">
                                       <div class="history-element">
                                            <div class="bullet-wrapper-target">                                  
                                                <div class="bullet-wrapper">
                                                    <div class="bullet"></div> 
                                                    <div class="bullet-route"></div>                               
                                                </div>
                                            </div>
                                            <div class="text-with-icon-target">
                                                <!-- Casistica Icon -->
                                                <div class="text-with-icon">
                                                    <a href="#">
                                                        <span class="image-icon pdf"></span>
                                                        <span class="text positive2">Nome_documento_1</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-2 col-sm-3 noPaddingMob">                           
                                        <div class="group-wrapper  with-spunta">
                                            <div class="group-element">
                                            <span class="image-icon stato-ok"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 col-sm-2 align-center noPaddingMob">                           
                                        <div class="group-wrapper">
                                            <div class="group-element">
                                                <span class="text">20/03/2021</span>
                                            </div>
                                        </div>
                                    </div>      
                                </div>
                            <!-- END ROW 7.2.2 -->
                            <!-- ROW 7.2.3 -->
                            <div class="row">
                                    <div class="col-xs-9 col-sm-7 col-lm-8">
                                       <div class="history-element positive2">
                                            <div class="bullet-wrapper-target">                                  
                                                <div class="bullet-wrapper">
                                                    <div class="bullet"></div> 
                                                    <div class="bullet-route"></div>                               
                                                </div>
                                            </div>
                                            <div class="text-with-icon-target">
                                                <!-- Casistica Icon -->
                                                <div class="text-with-icon">
                                                    <a href="#">
                                                        <span class="image-icon pdf"></span>
                                                        <span class="text positive2">Nome_documento_1</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-2 col-sm-3 noPaddingMob">                           
                                        <div class="group-wrapper  with-spunta">
                                            <div class="group-element">
                                                <span class="image-icon stato-ok"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 col-sm-2 align-center noPaddingMob">                           
                                        <div class="group-wrapper">
                                            <div class="group-element">
                                                <span class="text positive2">20/03/2021</span>
                                            </div>
                                        </div>
                                    </div>      
                            </div>
                           
                        </div>
                  </div>
               </div>
            </div>
            <div class="wrapper-pos-cta col-xs-12 col-sm-2">
                <div class="text-with-icon">
                        <span class="image-icon stato-wait" title="in attesa"></span>
                        <span class="text">In attesa<br> cointestatario</span>
                </div>
            </div>
         </div>
      </div>
   </div>

   <!-- stato rifiutata -->
   <div class="row pract-toggle boxed no-accordion-title">
      <div class="col-sm-12">
         <!-- ROW 4.1 -->
         <div class="row row-eq-height pract-toggle-head  right-space-small marginBottomMedium">
         <div class="col-sm-5 col-xs-11">
               <!-- Text with Icon + sub-text -->                    
               <div class="text">
                  <div class="text underline dark">
                      <a href="javascript:;" data-toggle="tooltip" title="PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI N.12345">
                          <strong class="text ellipsis"> PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI  N.12345</strong>
                      </a>
                    </div>
                  <div class="sub-text">INV-0015</div>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Avviata da</div>
               <!-- Casistica Icon -->
               <div class="text-with-icon ">
                  <a onclick="apriModaleContatti('fg')" class="no-underline"><span class="icon icon-assistenza_telefono v-centered v-centered" title="icon-numeroverde_desktop"></span><span class="text dark no-underline"><strong>Gestore</strong></span></a>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Scadenza</div>
               <span class="text ">20/03/2021</span>
            </div>
            <div class="col-sm-3 col-xs-12">
               <div class="visible-xs">
                  <div class="mobile-label">Stato</div>
                  <div class="text-with-icon">
                     <a class="no-underline" data-target="#modaleInfo" data-toggle="modal">
                            <span class="text no-underline">
                                <span class="dark"><strong>SCADUTA</strong></span>
                              
                            </span>
                            <i class="icon icon-ico_help_filled_tab  v-centered right"></i>
                     </a>
                  </div>
               </div>
               <div class="hidden-xs">
                <div class="text-with-icon">
                        <a class="no-underline" data-toggle="tooltip" title="Potrai iniziare la sottoscrizione della pratica una volta che il cointestatario avrà completato la sua parte.">
                            <span class="text no-underline">
                                <span class="dark"><strong>SCADUTA</strong></span>
                               
                            </span>
                            <i class="icon icon-ico_help_filled_tab  v-centered"></i>
                        </a>
                    </div>
               </div>
            </div>
           
         </div>
         <div class="row row-eq-height pract-toggle-head alignItemCenter-desktop marginBottomMedium">
            <div class="col-xs-12">
               <div class="text-with-icon ico-large">
                  <a href="#">
                  <span class="image-icon pdf"></span>
                  </a>
                  <span class="text dark">PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI N.12345</span>
                  <span class="sub-text">Proposta di consulenza in materia di investimenti e operazioni su strumenti finanziari, raccomandata dal tuo gestore, personalizzata per te e
                  adeguata al tuo profilo di rischio. <a href="#">Vedi il pdf per i dettagli</a></span>
               </div>
            </div>
         </div>
         <div class="wrapper-pos-accordion">
            <div class="row row-eq-height pract-toggle-head alignItemCenter-desktop collapser">
               <div class="col-xs-12 col-sm-8">
                  <div class="text-with-icon">
                     <a class="linker" data-toggle="collapse" href="#collapse7" role="button" aria-expanded="false" aria-controls="collapse7">
                     <span class="icon icon-arrow_down" title="icon-arrow_down"></span>
                     <span class="icon icon-arrow_up" title="icon-arrow_up"></span>
                     <span class="text no-underline">Anteprima documenti da sottoscrivere</span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row collapse" id="collapse7" aria-expanded="true" style="">
               <div class="col-sm-12">
                  <div class="accord-content noPadding">
                  <div class="history-elements">
                            <!-- ROW 7.2.1 -->
                                <div class="row">
                                    <div class="col-xs-9 col-sm-7">
                                       <div class="history-element">
                                            <div class="bullet-wrapper-target">                                  
                                                <div class="bullet-wrapper">
                                                    <div class="bullet"></div> 
                                                    <div class="bullet-route"></div>                               
                                                </div>
                                            </div>
                                            <div class="text-with-icon-target">
                                                <!-- Casistica Icon -->
                                                <div class="text-with-icon">
                                                    <a href="#">
                                                        <span class="image-icon pdf"></span>
                                                        <span class="text positive2">Nome_documento_1</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-2 col-sm-3 noPaddingMob">                           
                                        <div class="group-wrapper  with-spunta">
                                            <div class="group-element">
                                                <span class="image-icon stato-ok"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 col-sm-2 align-center noPaddingMob">                           
                                        <div class="group-wrapper">
                                            <div class="group-element">
                                                <span class="text">20/03/2021</span>
                                            </div>
                                        </div>
                                    </div>       
                                </div>
                            <!-- END ROW 7.2.1 -->

                            <!-- ROW 7.2.2 -->
                            <div class="row">
                                    <div class="col-xs-9 col-sm-7">
                                       <div class="history-element">
                                            <div class="bullet-wrapper-target">                                  
                                                <div class="bullet-wrapper">
                                                    <div class="bullet"></div> 
                                                    <div class="bullet-route"></div>                               
                                                </div>
                                            </div>
                                            <div class="text-with-icon-target">
                                                <!-- Casistica Icon -->
                                                <div class="text-with-icon">
                                                    <a href="#">
                                                        <span class="image-icon pdf"></span>
                                                        <span class="text positive2">Nome_documento_1</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-2 col-sm-3 noPaddingMob">                           
                                        <div class="group-wrapper  with-spunta">
                                            <div class="group-element">
                                            <span class="image-icon stato-ok"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 col-sm-2 align-center noPaddingMob">                           
                                        <div class="group-wrapper">
                                            <div class="group-element">
                                                <span class="text">20/03/2021</span>
                                            </div>
                                        </div>
                                    </div>      
                                </div>
                            <!-- END ROW 7.2.2 -->
                            <!-- ROW 7.2.3 -->
                            <div class="row">
                                    <div class="col-xs-9 col-sm-7 col-lm-8">
                                       <div class="history-element positive2">
                                            <div class="bullet-wrapper-target">                                  
                                                <div class="bullet-wrapper">
                                                    <div class="bullet"></div> 
                                                    <div class="bullet-route"></div>                               
                                                </div>
                                            </div>
                                            <div class="text-with-icon-target">
                                                <!-- Casistica Icon -->
                                                <div class="text-with-icon">
                                                    <a href="#">
                                                        <span class="image-icon pdf"></span>
                                                        <span class="text positive2">Nome_documento_1</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-2 col-sm-3 noPaddingMob">                           
                                        <div class="group-wrapper  with-spunta">
                                            <div class="group-element">
                                                <span class="image-icon stato-ok"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 col-sm-2 align-center noPaddingMob">                           
                                        <div class="group-wrapper">
                                            <div class="group-element">
                                                <span class="text positive2">20/03/2021</span>
                                            </div>
                                        </div>
                                    </div>      
                            </div>
                           
                        </div>
                  </div>
               </div>
            </div>
            <div class="wrapper-pos-cta col-xs-12 col-sm-2">
                <div class="text-with-icon">
                        <span class="image-icon stato-ko" title="sacduta"></span>
                        <span class="text negative">Scaduta</span>
                </div>
            </div>
         </div>
      </div>
   </div>
   
   
   <!-- stato revocata -->
   <div class="row pract-toggle boxed no-accordion-title">
      <div class="col-sm-12">
         <!-- ROW 1.1 -->
         <div class="row row-eq-height pract-toggle-head  right-space-small marginBottomMedium">
         <div class="col-sm-5 col-xs-11">
               <!-- Text with Icon + sub-text -->                    
               <div class="text">
                  <div class="text underline dark">
                      <a href="javascript:;" data-toggle="tooltip" title="PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI N.12345">
                          <strong class="text ellipsis"> PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI  N.12345</strong>
                      </a>
                    </div>
                  <div class="sub-text">INV-0015</div>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Avviata da</div>
               <!-- Casistica Icon -->
               <div class="text-with-icon ">
                  <a onclick="apriModaleContatti('fg')" class="no-underline"><span class="icon icon-assistenza_telefono v-centered v-centered" title="icon-numeroverde_desktop"></span><span class="text dark no-underline"><strong>Gestore</strong></span></a>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Scadenza</div>
               <span class="text"><strong>20/03/2021</strong></span>
            </div>
            <div class="col-sm-3 col-xs-12">
               <div class="visible-xs">
                  <div class="mobile-label">Stato</div>
                  <div class="text-with-icon">
                     <a class="no-underline" data-target="#modaleInfo" data-toggle="modal">
                        <!-- immagine di stato-->
                        <span class="text no-underline"><span class="dark"><strong>REVOCATA DA GESTORE</strong></span></span>
                        <i class="icon icon-ico_help_filled_tab v-centered right"></i>
                     </a>
                  </div>
               </div>
               <div class="hidden-xs">
                  <div class="text-with-icon">
                     <a class="no-underline" data-toggle="tooltip" title="Potrai iniziare la sottoscrizione della pratica una volta che il cointestatario avrà completato la sua parte.">
                     <span class="text no-underline"><span class="dark"><strong>REVOCATA DA GESTORE</strong></span></span>
                     <i class="icon icon-ico_help_filled_tab  v-centered"></i>
                     </a>
                  </div>
               </div>
            </div>
            
         </div>
         <div class="row row-eq-height pract-toggle-head alignItemCenter-desktop marginBottomMedium">
            <div class="col-xs-12">
               <div class="text-with-icon ico-large">
                  <a href="#">
                  <span class="image-icon pdf"></span>
                  </a>
                  <span class="text dark">PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI N.12345</span>
                  <span class="sub-text">Proposta di consulenza in materia di investimenti e operazioni su strumenti finanziari, raccomandata dal tuo gestore, personalizzata per te e
                  adeguata al tuo profilo di rischio. <a href="#">Vedi il pdf per i dettagli</a></span>
               </div>
            </div>
         </div>
         <div class="wrapper-pos-accordion">
            <div class="row row-eq-height pract-toggle-head alignItemCenter-desktop collapser">
               <div class="col-xs-12 col-sm-8">
                  <div class="text-with-icon">
                     <a class="linker" data-toggle="collapse" href="#collapse8" role="button" aria-expanded="false" aria-controls="collapse8">
                     <span class="icon icon-arrow_down" title="icon-arrow_down"></span>
                     <span class="icon icon-arrow_up" title="icon-arrow_up"></span>
                     <span class="text no-underline">Anteprima documenti da sottoscrivere</span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row collapse" id="collapse8" aria-expanded="true" style="">
               <div class="col-sm-12">
                  <div class="accord-content noPadding">
                     <div class="history-elements">
                        <!-- ROW 1.2.1 -->
                        <div class="row">
                           <div class="col-xs-9 col-sm-7">
                              <div class="history-element">
                                 <div class="bullet-wrapper-target">
                                    <div class="bullet-wrapper">
                                       <div class="bullet"></div>
                                       <div class="bullet-route"></div>
                                    </div>
                                 </div>
                                 <div class="text-with-icon-target">
                                    <!-- Casistica Icon -->
                                    <div class="text-with-icon">
                                       <a href="#">
                                       <span class="image-icon pdf"></span>
                                       <span class="text positive">Nome_documento_1</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-3 noPaddingMob">
                              <div class="group-wrapper with-spunta ">
                                 <div class="group-element">-</div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-2 align-center noPaddingMob">
                              <div class="group-wrapper ">
                                 <div class="group-element"><span class="text">-</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END ROW 1.2.1 -->
                        <!-- ROW 1.2.2 -->
                        <div class="row">
                           <div class="col-xs-9 col-sm-7">
                              <div class="history-element">
                                 <div class="bullet-wrapper-target">
                                    <div class="bullet-wrapper">
                                       <div class="bullet"></div>
                                       <div class="bullet-route"></div>
                                    </div>
                                 </div>
                                 <div class="text-with-icon-target">
                                    <!-- Casistica Icon -->
                                    <div class="text-with-icon">
                                       <a href="#">
                                       <span class="image-icon pdf"></span>
                                       <span class="text positive">Nome_documento_1</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-3 noPaddingMob">
                              <div class="group-wrapper with-spunta ">
                                 <div class="group-element">-</div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-2 align-center noPaddingMob align-center">
                              <div class="group-wrapper ">
                                 <div class="group-element"><span class="text">-</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END ROW 1.2.2 -->
                        <!-- ROW 1.2.3 -->
                        <div class="row">
                           <div class="col-xs-9 col-sm-7">
                              <div class="history-element inactive">
                                 <div class="bullet-wrapper-target">
                                    <div class="bullet-wrapper">
                                       <div class="bullet"></div>
                                       <div class="bullet-route"></div>
                                    </div>
                                 </div>
                                 <div class="text-with-icon-target">
                                    <!-- Casistica Icon -->
                                    <div class="text-with-icon">
                                       <a href="#">
                                       <span class="image-icon pdf"></span>
                                       <span class="text inactive">Nome_documento_1</span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-3 noPaddingMob">
                              <div class="group-wrapper with-spunta ">
                                 <div class="group-element">-</div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-2 align-center noPaddingMob align-center">
                              <div class="group-wrapper ">
                                 <div class="group-element"><span class="text">-</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END ROW 1.2.3 -->
                     </div>
                  </div>
               </div>
            </div>
            <div class="wrapper-pos-cta col-xs-2 col-sm-2">
            <div class="text-with-icon">
                        <span class="image-icon stato-ko" title="revocata"></span>
                        <span class="text negative">Revocata</span>
                     </div>
            </div>
         </div>
      </div>
   </div>


   <!-- errore caricamento-->
    <!-- stato revocata -->
    <div class="row pract-toggle boxed no-accordion-title">
      <div class="col-sm-12">
         <!-- ROW 1.1 -->
         <div class="row row-eq-height pract-toggle-head  right-space-small marginBottomMedium">
            <div class="col-sm-5 col-xs-11">
               <!-- Text with Icon + sub-text -->                    
               <div class="text">
                  <div class="text underline dark">
                      <a href="javascript:;" data-toggle="tooltip" title="PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI N.12345">
                          <strong class="text ellipsis"> PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI PROPOSTA DI CONSULENZA IN MATERIA DI INVESTIMENTI  N.12345</strong>
                      </a>
                    </div>
                  <div class="sub-text">INV-0015</div>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Avviata da</div>
               <!-- Casistica Icon -->
               <div class="text-with-icon ">
                  <a onclick="apriModaleContatti('fg')" class="no-underline"><span class="icon icon-assistenza_telefono v-centered v-centered" title="icon-numeroverde_desktop"></span><span class="text dark no-underline"><strong>Gestore</strong></span></a>
               </div>
            </div>
            <div class="col-sm-2 col-xs-6">
               <div class="mobile-label">Scadenza</div>
               <span class="text"><strong>20/03/2021</strong></span>
            </div>
            <div class="col-sm-3 col-xs-12">
               <div class="visible-xs">
                  <div class="mobile-label">Stato</div>
                  <div class="text-with-icon">
                     <a class="no-underline" data-target="#modaleInfo" data-toggle="modal">
                        <!-- immagine di stato-->
                        <span class="text no-underline"><span class="dark"><strong>SCADUTA</strong></span></span>
                        <i class="icon icon-ico_help_filled_tab v-centered right"></i>
                     </a>
                  </div>
               </div>
               <div class="hidden-xs">
                  <div class="text-with-icon">
                     <a class="no-underline" data-toggle="tooltip" title="Potrai iniziare la sottoscrizione della pratica una volta che il cointestatario avrà completato la sua parte.">
                     <span class="text no-underline"><span class="dark"><strong>SCADUTA</strong></span></span>
                     <i class="icon icon-ico_help_filled_tab  v-centered"></i>
                     </a>
                  </div>
               </div>
            </div>
            
         </div>
         <div class="box-alert-inline warning">
                             <div class="box-alert-inline-esito">
                                <i class="icon icon-alert_caution" title="icon-alert_caution"></i>
                                 <p>SI È VERIFICATO UN PROBLEMA NEL CARICAMENTO DELLE INFORMAZIONI</p>
                             </div>
                             <div class="text-with-icon"><a href="#"><i class="icon icon-reload" title="icon-trash_filled"></i>
                                <span class="text">Ricarica la pagina</span></a>
                            </div>
                        </div>
        
      </div>
   </div>
</section>
<script>
   $('.pract-toggle-head a[data-toggle="collapse"]').click(function(){
       /* appende una classe per la stilizzazione del posizionamento del bottone e dell'elimina*/
       var pracTCont = $(this).closest(".wrapper-pos-accordion").find(".accord-content");
       // Simulazione Data Loading
       pracTCont.addClass("loading");
       // Simulazione Data Loading
       setTimeout(function(){ pracTCont.removeClass("loading"); }, 1000);
    
       
   });
</script>
<?php include ("parts/documenti_modali.php") ?>