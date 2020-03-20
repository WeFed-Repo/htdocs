<section>
      <form id="form_GeoBlock" method="post" action="/WEBWB/cartaConto/pannelloControlloModifica.do" class="formPannelloControllo">
         <input type="hidden" name="codContoCorrente" value="141|1973|340200121962" />
         
<script type="text/javascript">



$(document).ready(function(){
   $('#input_GeoBlock .datepicker').each(function(e){
      //default value
      var minDateDT = new Date();
      if ($(this).data("mindate")!=undefined) { // mindate = time in millisec
         minDateDT = new Date($(this).data("mindate"));
      }
      
      var maxDateDT = new Date();
      maxDateDT.setFullYear(maxDateDT.getFullYear() + 1);
      if ($(this).data("maxdate")!=undefined) { // maxdate = time in millisec
         maxDateDT = new Date($(this).data("maxdate"));
      }
      
      var excludeWeekOrHoliday = noWeekendsOrHolidays;
      if ($(this).data("noweekorholidays")!=undefined
            && $(this).data("noweekorholidays")!="false") {
         excludeWeekOrHoliday = function(){return [true, ''];}; // nothing to do
      } 
      
      $(this).datepicker({
         minDate: minDateDT,
         maxDate: maxDateDT,
         buttonImage: '/common/fe/img/pixel_trasp.gif',
         beforeShowDay: excludeWeekOrHoliday,
         prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
         nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>"
      });
      
   });
});


  
</script> 
<script>
   function mostraDivGeoBlock(id, esito) {
      mostraDivModifica("_"+id,esito);
      controllaFormDaChiudere(id);
      
      window.tipoProfiloDaForm = 'limitato';
      window.dataInizioDaForm = '10/10/2019';
      window.dataFineDaForm = '10/11/2019';
      
      disabilitaEtichettaRadio();
      controllaAbilitazioneData(window.tipoProfiloDaForm);
   
      $('#img_'+window.tipoProfiloDaForm).attr('src','/WB/fe/img/geoblock_'+window.tipoProfiloDaForm+'.png');
      $('#div_profilo_'+window.tipoProfiloDaForm).find('.label_ProfiloInternazionale').removeAttr('style');
      
      $('input[name="profiloInternazionale"], .imgProfiloInternazionale').click(function(){
         disabilitaRadioGeoBLOCK();
         var tipoProfiloSelezionato = $(this).attr('value');
         
         $('#img_'+tipoProfiloSelezionato).attr('src','/WB/fe/img/geoblock_'+tipoProfiloSelezionato+'.png');
         $('#div_profilo_'+tipoProfiloSelezionato).find('.label_ProfiloInternazionale').removeAttr('style');
         controllaAbilitazioneData(tipoProfiloSelezionato);
         
         if (tipoProfiloSelezionato != window.tipoProfiloDaForm) {
            $('#btn_modificaProfiloInternazionale').removeClass('disabled');
         } else {
            $('#btn_modificaProfiloInternazionale').addClass('disabled');
         }
         
      });
      
      $('#btn_modificaProfiloInternazionale').on('click', function(){
         if(!$('#btn_modificaProfiloInternazionale').hasClass("disabled")) modificaProfilo();
      });
      $('#btn_annullaRichiesta').click(nascondiSchedaConferma);
      
      $('#esitoGeoBlock').slideUp('fast');
      $('#dati_' + id).fadeOut('fast', function() {
         $('#input_' + id).fadeIn();
      });
         
   }
   
   function nascondiDivGeoBlock(id, esito) {
      nascondiDivModifica("_"+id,esito);
      $('#esitoGeoBlock').slideUp('fast');
      
      if($('#btn_modificaProfiloInternazionale').length && !$('#btn_modificaProfiloInternazionale').hasClass('disabled')) {
         
         $('#confirm').dialog('open');
         
         $('#yes').on('click', function(){
            $('#confirm').dialog('close');
            modificaProfilo();
            
            controllaFormDaChiudere(id);
            
         });
         
         $('#no').on('click', function(){
            $('#input_' + id).fadeOut('fast', function() {
               $('#dati_' + id).fadeIn();
            });
            
            //$('#dataDa_ProfiloInternazionale').datepicker("setDate", window.dataInizioDaForm);
            //$('#dataA_ProfiloInternazionale').datepicker("setDate", window.dataFineDaForm);
            
            disabilitaRadioGeoBLOCK();
            
            var myRadio = $('input[name=profiloInternazionale]');
            myRadio.filter('[value='+window.tipoProfiloDaForm+']').prop('checked', true);
            
            $('#img_'+window.tipoProfiloDaForm).attr('src','/WB/fe/img/geoblock_'+window.tipoProfiloDaForm+'.png');
            $('#div_profilo_'+window.tipoProfiloDaForm).find('.label_ProfiloInternazionale').removeAttr('style');
            
            controllaAbilitazioneData(window.tipoProfiloDaForm);
            $('#btn_modificaProfiloInternazionale').addClass('disabled');
            
            nascondiSchedaConferma();
            
            $('#confirm').dialog('close');
         });
         
      } else { 
         
         $('#input_' + id).fadeOut('fast', function() {
            $('#dati_' + id).fadeIn();
         });
      }
      
   }
   
   function modificaProfilo() {
      
      var myRadio = $('input[name=profiloInternazionale]');
      var checkedValue = myRadio.filter(':checked').val();
      
      if (checkedValue === 'mondo') {
         
         var dataDa = $('#dataDa_ProfiloInternazionale').val();
         var dataA = $('#dataA_ProfiloInternazionale').val();
         
         $('#conferma_dataDa').html(dataDa);
         $('#conferma_dataA').html(dataA);
         
         $('#richiesta_mondo').show();
         
         
      } else if (checkedValue === 'limitato') {
         $('#richiesta_limitato').show();
      }
      
      $('#input_GeoBlock').fadeOut('fast', function() {
         $('#invioRichiesta').fadeIn();
      });
   }
   
   function nascondiSchedaConferma() {
      $('#invioRichiesta').fadeOut('fast', function() {
         $('#input_GeoBlock').fadeIn();
         $('#richiesta_mondo').hide();
         $('#richiesta_limitato').hide();
      });
   }
   
   function controllaAbilitazioneData(tipoProfilo) {
            $("input[name='profiloInternazionale'][value="+tipoProfilo+"]").prop('checked', true);
      if (tipoProfilo == "mondo") {
         $('.dataProfiloMondo').attr('readonly', false);
         $('#dataDa_ProfiloInternazionale').datepicker("option","disabled",false);
         $('#dataA_ProfiloInternazionale').datepicker("option","disabled",false);
      } else {
         $('.dataProfiloMondo').attr('readonly', true);
         $('#dataDa_ProfiloInternazionale').datepicker("option","disabled",true);
         $('#dataA_ProfiloInternazionale').datepicker("option","disabled",true);
      }
   }
   
   function disabilitaEtichettaRadio() {
      $('.img_GeoBlock').find('.label_ProfiloInternazionale').each(function () {
         $(this).css('color','#888888');
      });
   }
   
   function disabilitaRadioGeoBLOCK() {
      disabilitaEtichettaRadio();
      $('.imgProfiloInternazionale').each(function (){
         var urlImg=$(this).attr('src');
         if (urlImg.indexOf('off')<0)
            $(this).attr('src',urlImg.substring(0,urlImg.length-4)+'_off.png');
      });
   }
   
   
</script>
<style>
   #pannelloFaseDiModifica {
   height: 200px;
   text-align: center;
   padding-top: 75px;
   }
   #riquadroFaseDiModifica {
   margin: auto;
   border: 2px solid red;
   border-radius: 5px;
   width: 85%;
   padding-top: 10px;
   padding-bottom: 10px;
   color: red;
   display: flex;
   align-items: center;
   }
</style>
<div class="formWrapper">
   <div class="titolo">
      <div class="row">
         <div class="col-sm-8">
            
            
            
            











   <h3 class="titleSection titleForm">

   
      Profilo Internazionale
   
   
   
   
      <span style="width: 16px;">
         





   









      </span>
      <span style="clear: right;">&nbsp;</span>
   

   </h3>



         </div>
         <div class="col-sm-4">
            <a id="btnRicerca" href="javascript:mostraDivGeoBlock('GeoBlock')" role="button" aria-pressed="false" class="btn-align-right"><i class="icon icon-edit_fill ico-title"></i></a>
         </div>
      </div>
   </div>
   
   







   


   <input type="hidden" name="formModificata" value="GeoBlock" />
   <div class="form-group" style="" id="dati_GeoBlock">
      <div class="row">
         <div class="col-xs-12">
            <p>
               
                  
                  
                  
                     Il profilo attuale &egrave;
                     Limitato
                  
               
            </p>
         </div>
      </div>
     
   </div>
   <div id="input_GeoBlock">
   
   
      
      
      
         <div class="form-group">
            <div class="row">
               <div class="col-xs-12">
                  <p>
                  <div>
                     <strong>
                        PARTI PER UN PAESE EXTRAEUROPEO?
                     </strong>
                  </div>
                  <div>
                     Mantieni sicura la tua carta: decidi tu e quando pu&ograve; essere utilizzata.
                  </div>
                  <div style="padding-top: 15px;">
                     Con <strong>GeoBLOCK</strong>, il servizio di <strong>prevenzione frodi</strong> puoi abilitare l'utilizzo della carta secondo due diversi profili: <strong>Limitato</strong> e <strong>Mondo</strong>. Il profilo assegnato automaticamente &egrave; Limitato. Se devi partire per un paese extraeuropeo, attiva il profilo "Mondo" <strong>solo per il periodo di permanenza all'estero</strong>.<br/>Al termine del tuo soggiorno la tua carta torner&agrave; ad avere, in automatico, il profilo Limitato. In questo modo aumenterai la sicurezza.
                  </div>
                  </p>
               </div>
            </div>
            
            <input type="radio" name="profiloInternazionale" value="unknow" style="display: none;" />
            
            <div class="row">
               <div class="col-md-4">
                  <div class="row">
                     <div class="col-md-2 hidden-xs">&nbsp;</div>
                     <div class="col-md-10 col-xs-12">
                        <label>
                           <input type="radio" name="profiloInternazionale" value="limitato" checked="checked" id="radio_profilo_limitato" class="sfondoForm" />
                           Profilo 
                           Limitato
                        </label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-2 hidden-xs">&nbsp;</div>
                     <div class="col-md-10 col-xs-12">
                        <label for="radio_profilo_limitato">
                           <img src="/WB/fe/img/geoblock_limitato_off.png" id="img_limitato" class="imgProfiloInternazionale" />
                        </label>
                     </div>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                     <div class="col-xs-10">
                        <p>
                           Puoi utilizzare la tua carta nei Paesi indicati nell'elenco. Lascia impostato questo profilo per garantire una <strong>maggior sicurezza</strong>. Se devi recarti in un Paese non compreso nell'elenco, ricordati di attivare il profilo "Mondo".
                        </p>
                        <p>
                           <strong>Paesi compresi nel profilo Limitato</strong>: Albania, Andorra, Antartide, Armenia, Austria, Azerbajan, Bielorussia, Belgio, Bosnia Erzegovina, Bulgaria, Cipro, Croazia, Danimarca, Estonia, Finlandia, Francia, Georgia, Germania, Gibilterra, Gran Bretagna, Grecia, Groellandia, Guadalupe, Irlanda, Islanda, Israele, Kazakistan, Lettonia, Liechtenstein, Lituania, Lussemburgo, Macedonia, Malta, Martinica, Moldavia, Principato di Monaco, Olanda, Norvegia, Polonia, Portogallo, Rep. Ceca, Romania, Russia, San Marino, Serbia-Montenegro-Kossovo, Slovacchia, Slovenia, Spagna, Svezia, Svizzera, Stato della Citt&agrave; del Vaticano, Tajikistan, Turchia, Turkeministan, Ucraina, Ungheria.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="row">
                     <div class="col-md-2 hidden-xs">&nbsp;</div>
                     <div class="col-md-10 col-xs-12">
                        <label>
                           <input type="radio" name="profiloInternazionale" value="mondo" id="radio_profilo_mondo" class="sfondoForm" />
                           Profilo 
                           Mondo
                        </label>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-2 hidden-xs">&nbsp;</div>
                     <div class="col-md-10 col-xs-12">
                        <label for="radio_profilo_mondo">
                           <img src="/WB/fe/img/geoblock_mondo_off.png" id="img_mondo" class="imgProfiloInternazionale" />
                        </label>
                     </div>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                     <div class="col-xs-12">
                        <p>
                           Puoi prelevare e effettuare pagamenti in tutto il mondo. Ti consigliamo di inserire la data di scadenza del profilo oltre la quale la tua carta torner&agrave; ad avere il profilo Limitato. Attivando il profilo "Mondo" solo per il periodo di permanenza all'estero potrai prevenire il rischio di frodi. L'attivazione di questo periodo pu&ograve; essere temporanea o definitiva.
                        </p>
                        
                       
                         <div class="row">
                           <div class="form-field-input col-xs-6 col-sm-6">
                             <div class="form-field">
                                  <label class="control-label">Data di attivazione</label>
                                  <div class="input-group">
                                     <div class="editable-input">
                                     
                                     <input 
                                       type="text" 
                                       name="dataDa" 
                                       data-mindate="
                                       
                                       " 
                                       data-maxdate="
                                       
                                       " 
                                       size="12" 
                                       data-noweekorholidays="false"
                                       value=''
                                       id="dataDa_ProfiloInternazionale" 
                                       class="form-control datepicker input-inline clear-x wauto"
                                    />
                                     
                                     </div>
                                     <a class="input-group-addon date btn-icon" href="javascript:;"><i class="icon icon-calendar_filled"></i></a>
                                 </div>
                             </div>
                           </div>
                           <div class="form-field-input col-xs-6 col-sm-6">
                             <div class="form-field">
                                  <label class="control-label">Data di scadenza</label>
                                  <div class="input-group">
                                     <div class="editable-input">
                                     
                                     <input 
                                       type="text" 
                                       name="dataA" 
                                       data-mindate="
                                       
                                       " 
                                       data-maxdate="
                                       
                                       
                                       " 
                                       size="12"
                                       data-noweekorholidays="false" 
                                       value=''
                                       id="dataA_ProfiloInternazionale" 
                                       class="form-control datepicker input-inline clear-x wauto"
                                    />
                                     
                                     </div>
                                     <a class="input-group-addon date btn-icon" href="javascript:;"><i class="icon icon-calendar_filled"></i></a>
                                 </div>
                             </div>
                           </div>
                         </div>
                      
                        
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      
      <div class="alignRight btnWrapper">
         <a type="input" href="javascript:nascondiDivGeoBlock('GeoBlock')" class="btn btn-default">
            Annulla
         </a>
         <button type="button" id="btn_modificaProfiloInternazionale" class="btn btn-primary disabled execute">Modifica</button>
      </div>
     
   </div>
   
   <div id="invioRichiesta" style="display: none;">
      <div class="form-group">
         <div id="richiesta_limitato" class="row" style="display: none;">
            <div class="col-md-4 text-center">
               <label>
                  <span class="col-md-12">
                     <input type="radio" class="sfondoForm hidden-xs" id="radio_profilo_conferma_limitato" checked="checked"/>
                     <span class="label_ProfiloInternazionale">
                        Profilo 
                        Limitato
                     </span>
                  </span>
                  <span class="col-md-12">
                     <img src="/WB/fe/img/geoblock_limitato.png" id="img_conferma_limitato" class="imgProfiloInternazionale" title="Profilo Limitato" alt="Profilo Limitato" />
                  </span>
               </label>
            </div>
            <div class="col-md-7 profiloInternazionale_corpo">
               <div class="row">
                  Stai attivando la tua carta al Profilo Limitato.
               </div>
            </div>
         </div>
         <div id="richiesta_mondo" class="row" style="display: none;">
            <div class="col-md-4 text-center">
               <label>
                  <span class="col-md-12">
                     <input type="radio" class="sfondoForm" id="radio_profilo_conferma_mondo" checked="checked"/>
                     <span class="label_ProfiloInternazionale">
                        Profilo 
                        Mondo
                     </span>
                  </span>
                  <span class="col-md-12">
                     <img src="/WB/fe/img/geoblock_mondo.png" id="img_conferma_mondo" class="imgProfiloInternazionale" title="Profilo Mondo" alt="Profilo Mondo" />
                  </span>
               </label>
            </div>
            <div class="col-md-7 profiloInternazionale_corpo">
               <div class="row">
                  Stai attivando la tua carta ad effettuare prelevamenti e pagamenti in tutto il mondo.
               </div>
               <div class="row" style="padding-top: 20px;">
                  <div class="col-md-6" style="padding-left: 0px;">
                     <span class="float-xs-left">Data inizio servizio&nbsp;</span>
                     <strong><span id="conferma_dataDa"></span></strong>
                  </div>
                  <div class="col-md-6" style="padding-left: 0px;">
                     <span class="float-xs-left">Data fine servizio&nbsp;</span>
                     <strong><span id="conferma_dataA"></span></strong>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="alignRight btnWrapper">
         <button type="button" id="btn_annullaRichiesta" class="btn btn-default">
            Annulla
         </button>
         <input type="submit" value="Invia Richiesta" id="btn_inviaRichiesta" class="btn btn-primary execute" alt="Invia Richiesta" />
      </div>
      <hr class="hrSeparator">
   </div>
   
</div>





      </form>
   </section>

