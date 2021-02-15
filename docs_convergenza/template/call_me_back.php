<!--codice per la jsp del prenota una chiamata-->
<!--fare una chiamata per invare l'ora attuale -->



<?php
   $nameCliente = $_POST['nameCliente'];
   $nCellulareCert = $_POST['nCellulareCert'];
   $timeNow = $_POST['timeNow'];

?>

<script type="text/javascript">
   var isAlreadyBooked = ($('input[name="isAlreadyBooked"]').length>0 && $('input[name="isAlreadyBooked"]').val()!="") ? $('input[name="isAlreadyBooked"]').val() : 'false',
       orarioSel =  $('input[name="orarioSel"]').length>0 ? $('input[name="orarioSel"]').val() : '',
       annullaFlag = (typeof annullaFlag === 'undefined') ? 'false' : annullaFlag,
       disservizioFlag = $('input[name="disservizioFlag"]').length>0 && $('input[name="disservizioFlag"]').val()!="" ? $('input[name="disservizioFlag"]').val() : 'false',
       fuoriOrario = $('input[name="fuoriOrario"]').length>0 && $('input[name="fuoriOrario"]').val()!="" ? $('input[name="fuoriOrario"]').val() : 'false',
       orarioNonDispo = $('input[name="orarioNonDispo"]').length>0 && $('input[name="orarioNonDispo"]').val()!="" ? $('input[name="orarioNonDispo"]').val() : 'false',
       argomento =  $('input[name="argomento"]').length>0 && $('input[name="argomento"]').val()!="" ? $('input[name="argomento"]').val() : '';

   //funzione  per visualizzare un dato step: 3 parametri: elemento da mostrare, attributo per il back del bottone, eventuale testo introduttivo,
   var setNextStepVisible = function(elToShow,el,textIntro) {
          $(".step-cmb:visible").hide();
          $(elToShow).find(".intro").html(textIntro);
          $(elToShow).find(".btn-back").attr('data-back',el);
          $(elToShow).show();
   }
  
   //funzione per settare orario selezionato e relativo testo
   var setOrarioSelected = function(orario) {
      
      $("input[name='orarioSel']").val(orario)
      orarioSelVal = orario;
      
      if(orarioSelVal === "ora") {
           var msgTime = "«Chiamami ora!»."
          $('.step-cmb .btn-default').hide();
       }
       else {
           var msgTime = "l'orario " + "<strong>" + orarioSelVal + "</strong>";
            $('.step-cmb .btn-default').show();
      }
      $(".selected-time").html(msgTime);
   }

   //funzione per costruire HTML (desktop e mobile ) in caso di orario disponibile
   var   setHtmlOrariDisponibili = function(orariDisponibili,arg) {
         var orariDispoWrapper = $(".orariDispoWrapper");
         orariDispoWrapper.empty();
         $("#btn-seleziona-orario").addClass("disabled").prop("disabled",true);
         if(typeof orariDisponibili !== 'undefined') {
            var htmlDeskTablet ="",
            htmlMobile = '<div class="spsel nosel" id="selectOrariDisponibili"  placeholder="Seleziona Orario"><input type="hidden" name="selectOrariDisponibiliInput"><div class="spsel-options"></div></div><div class="btn-align-center"><a id="btn-seleziona-orario" type="button" class="btn btn-primary disabled">Seleziona</a><br class="clear"></div>';
            if(isSmallDevice) {
               orariDispoWrapper.append(htmlMobile);
            }
            $.each(orariDisponibili,function(i,v){
               var isNotDisp = v.ndispo === 0 ? true : false,
                  classDis = isNotDisp ? "disabled" : "",
                  orario = (v.orario!=="ora") ? v.orario : "Chiamami ora!",
                  htmlDeskTablet = '<div class="orari-select ' + classDis + '">' + '<span class="text-time">' + orario  +  '</span>' + '<span class="text-dispo">(' + v.ndispo +  ' disponibili)</span>'  +  '<button class="btn-dispo btn btn-primary btn-small">Seleziona</button>' + '</div>';
                  InnerHtmlMobile = v.ndispo!==0 ? '<div class="spsel-option" data-value="' + v.orario + '"><a class="spsel-option-el">' + orario + '<span class="text-dispo only-detail"> (' + v.ndispo +  ' disponibili)</span>' + '</a></div>' : '';
                  if(isSmallDevice) {
                     $('.spsel-options').append(InnerHtmlMobile);
                  }
                  else {
                     orariDispoWrapper.append(htmlDeskTablet);
                  }
            })
            $("#selectOrariDisponibili").spSel(
               function(){ 
                  var SelectedOrario = $("input[name=selectOrariDisponibiliInput]").val();
                 orarioSelVal = SelectedOrario;
                 if(SelectedOrario!="") {
                  $("#btn-seleziona-orario").removeClass("disabled").prop("disabled",false);
                 }
               }
            );
            gotoStepArg(arg)
         }
   }
   //funzione di selezione orario 
   var handleSelectOrari = function() {
     
      var   btnSelectable = $(".orari-select:not(.disabled)"),
            selectSelectable = $("#selectOrariDisponibili .spsel-option-el");
            btnSelectable.on("click", function(event){
               el = $(this);
               if(el.hasClass("selected"))
               {
                  return false;
               }
               else {
                  btnSelectable.removeClass("selected").find(".btn-dispo").hide();
                  el.addClass("selected").find(".btn-dispo").show(200);
                  orarioSelVal = el.find(".text-time").text()=== "Chiamami ora!" ? "ora" : el.find(".text-time").text();
                  setOrarioSelected (orarioSelVal);
               }
            })
            
   }

   //funzione di passaggio da step 1 a 2 per popolare con argomenti 
   var gotoStepArg = function(arg) {
     
     $("#btn-seleziona-orario,.btn-dispo").on("click",function(e){
            
            e.preventDefault();
            var el = $(this).closest('section').attr('id');
            if(typeof(arg) !== 'undefined') {
               
               var argWrapper =  $(".argWrapper");
               argWrapper.empty();
                $("#btn-conferma:not('disabled')").addClass("disabled").attr("disabled",true);
               $.each(arg,function(i,v){
                  argWrapper.append ('<div class="radio inline"><label class="textWrapper"><input type="radio" name="arg"><span class="text"> ' + v + '</span></label></div>')
               })
               handleSelectArg();
               setNextStepVisible('#step-argomento',el);
            }
            else {
               setNextStepVisible('#step-riepilogo',el);
            }
            
         })
   }

   //funzione di selezione argomenti
   var handleSelectArg = function() {
      $('input[name="arg"]').on("click",function(e){
          $("#btn-conferma").removeClass("disabled").attr("disabled",false);
          $('input[name="argomento"]').val($(this).next('.text').text());
      })
   }

   
   var orariDisponibili,
       arg;
   var callDipso = function(dispoUrl) {
      $.ajax({
		url: dispoUrl,
		method: "post",
		data: {
         nameCliente : $('input[name="nameCliente"]').val(),
         nCellulareCert: $('input[name="nCellulareCert"]').val(),
         isAlreadyBooked: isAlreadyBooked,
			time: $('input[name="timeNow"]').val(),
         orarioSel: orarioSel,
         disservizioFlag: disservizioFlag,
         annullaFlag: annullaFlag,
         fuoriOrario: fuoriOrario,
         orarioNonDispo: orarioNonDispo,
         argomento: argomento
		},
		dataType: "json",
		success: function(data) {
         var dati_call = data,
            stato = dati_call.stato;
            orariDisponibili = dati_call.fasce_orario_dispo;
            arg=  dati_call.arg;
           
            //leggo il json di dati degli orari disponibili che mi torna il servizio e se mi tornano i dati costruisco dinamicamente i blocchi di orario
            //costruzione dell'html per accogliere i dati che provengono dal servizio per lo step 1
            // se la chiamata è success e mi resituisce gli orari disponibili
            //step 2: costruzione dell'html per accogliere i dati che provengono dal servizio (argomenti)
            
            
            if(stato === 'disponibile')
            {
               //salvo i dati per eventuali chiamate successive se orario poi non più disponibile
               orariDisponibiliStored = orariDisponibili.slice(0);
               setHtmlOrariDisponibili(orariDisponibili,arg);
               $('.step-cmb').eq(0).show();
            }
            // se la chiamata è success e mi restituisce la conferma di prenotazione
            if(stato ==="prenotato") {
               setOrarioSelected(dati_call.orarioSel);
               $('input[name="isAlreadyBooked"]').val("true");
               setStatoPrenotazione();
               setNextStepVisible('#step-conferma-prenotato','', '<p class="esito"><i class="icon icon-ico_cmb_prenotata_outline" title="chiamata prenotata"></i><span>Chiamata prenotata</span></p>');
            }
            if(stato ==="occupato") {
               setOrarioSelected (dati_call.orarioSel);
               $('input[name="isAlreadyBooked"]').val("true");
               setStatoPrenotazione();
               setNextStepVisible('#step-conferma-prenotato','', '<p class="esito"><i class="icon icon-ico_cmb_attesa_outline" title="prenotazione in corso"></i><span>Hai una prenotazione in corso…</p>');
            }
            if(stato ==="annullato") {
               annullaFlag = "false";
               $('input[name="isAlreadyBooked"]').val("false");
               setStatoPrenotazione();
               setOrarioSelected("");
               setNextStepVisible('#step-annullato','');
            }
            if(stato ==="disservizio") {
               $('input[name="disservizioFlag"]').val("true");
               setStatoPrenotazione();
               setNextStepVisible('#step-disservizio','');
               
            }
            if(stato ==="fuoriOrario") {
               $('input[name="fuoriOrario"]').val("true");
               setNextStepVisible('#step-fuoriOrario','');
            }
            if(stato ==="nonCertificato") {
               setNextStepVisible('#step-nonCertificato','');
            }
            if(stato ==="numeroNd") {
               
               setNextStepVisible('#step-numeroNd','');
            }
            if(stato=="orarioNd") {
               //nuovo funzione che mi riporta a step di scelta orari se non più disponibili, non faccio altra chiamata
              
               setNextStepVisible('#step-orarioNd','');
               $('#btn-altro-orario').on('click', function(){
               //modifico l'array degli orari disponibili che ho in pancia
                 orariDisponibiliStored = orariDisponibiliStored.map(function(el){
                    if(el.orario=== orarioSelVal) {
                       el.isDispo = "false",
                       el.ndispo = 0
                    }
                    return el;
                 });
                 setHtmlOrariDisponibili(orariDisponibiliStored,arg);
                 setNextStepVisible('#step-prenota','');
                 handleSelectOrari();
                 
              })
            }
            
            
            handleSelectOrari(); 
          },
          error: function() {
             alert("error")
          }
      })
      }  
   $(function () {
      var orariDisponibiliStored = [];
      //chiamata a servizio per restituire gli orari disponibili
      var dispoUrl = "/include/ajax/cmb_json.php?rand=" + Math.random();
      callDipso(dispoUrl);
      
      //step3: riepilogo
      $("#btn-conferma").on("click",function(){
            var el = $(this).closest('section').attr('id');
            setOrarioSelected (orarioSelVal);
            setNextStepVisible('#step-riepilogo', el);
      })
      //step4:conferma
      $("#btn-prenota").on("click",function(){
         orarioSel = orarioSelVal;
         argomento = $('input[name="argomento"]').val();
         callDipso(dispoUrl);
      })
      //annulla prenotazione
      $(".annulla-pre").on("click",function(){
         var el = $(this).closest('section').attr('id');
         setNextStepVisible('#step-annullaPre',el);
      })
      //conferma di annulla prenotazione 
      $("#annullaPreConf").on("click",function(){
         annullaFlag = "true";
         callDipso(dispoUrl);
      })
      //click sul bottone indietro
      $(".btn-back").on("click",function(){
         var stepPrev = $(this).attr("data-back");
         setNextStepVisible('#' + stepPrev,'');
      })
      
    })
    //se si passa da desktop a mobil e viceversa chiudo overlayer per ricostruire con il corretto html
    var isOnOpeningSmallDevice = isSmallDevice;
    $(window).resize(function() {
         findSmartDevice();
         if(isOnOpeningSmallDevice !== isSmallDevice )  {
            setHtmlOrariDisponibili(orariDisponibiliStored,arg);
            handleSelectOrari();
            isOnOpeningSmallDevice=isSmallDevice
      }
   });
</script>


<form class="formGenerico" action="">
   <?php print '<input type="hidden" name="timeNow" value="' . $timeNow . '"/>' ?>
   <!-- step 1: scelta della fascia oraria-->
   <section id="step-prenota" class="step-cmb">
      <h4>Vuoi parlare con un nostro operatore oggi? Indicaci a che ora, ti chiamiamo noi.</h4>
      <div class="orariDispoWrapper"></div>
      <div class="text-footer">
         <p>Il servizio &egrave; disponibile dal luned&igrave; al venerd&igrave; XX - XX e il sabato XX – XX.
         Sono esclusi i giorni festivi. </p>
      </div>
     
   </section>
   <!-- step 2: scelta argomento-->
   <section id="step-argomento" class="step-cmb">
      <h4>Per quale argomento vuoi essere ricontattato?</h4>
      <div class="argWrapper"></div>
      <div class="btn-align-center">
          <div>
             <a type="button" id="btn-indietro" class="btn btn-default btn-back" data-back="step-prenota">indietro</a>
             <a type="button" id="btn-conferma" class="btn btn-primary disabled" disabled>prosegui</a>
          </div>
      </div>
   </section>
   <!-- step 3: riepilogo-->
   <section id="step-riepilogo" class="step-cmb">
      <p> <?php print $nameCliente ?>, hai selezionato <span class="selected-time"></span><p>
      
      <div class="row">
            <div class="col-sm-12">
                <div class="testoIcona ico-fp">
                    <i class="icon icon-2x flLeft icon-" title=""></i>
                    <div class="leftTesto">
                        <p>Un nostro operatore ti contatter&agrave; nella fascia oraria stabilita.</p>
                        <p>Il numero da cui riceverai la chiamata &egrave; il: <?php print '<strong>'.$nCellulareCert.'</strong>' ?></p>
                        <p>Effettueremo un massimo di 3 tentativi; la chiamata sar&agrave; soggetta a registrazione </p>
                    </div>	
                </div>
            </div>
      </div>
      <div class="row">
            <div class="col-sm-12">
                <div class="testoIcona ico-fp">
                    <i class="icon icon-2x flLeft icon icon-cellulare" title=""></i>
                    <div class="leftTesto">
                        <p>Ti chiameremo al seguente numero: <?php print '<strong>' .$nCellulareCert.'</strong>' ?>.</p>
                        <p>(Questo &egrave; il tuo numero certificato, se  &egrave; cambiato <a href="#">aggiornalo prima di prenotare</a>).</p>
                    </div>	
                </div>
            </div>
      </div>
      <p>Per confermare la prenotazione clicca su «prenota».</p>
      <div class="btn-align-center">
          <div>
            <a type="button" id="btn-indietro" class="btn btn-default btn-back" data-back="step-argomento">indietro</a>
            <a type="button" id="btn-prenota" class="btn btn-primary">prenota</a>
          </div>
      </div>
   </section>
   <!-- step 4: conferma e warning già prenotato cambia solo il titolo che è settato dinamicamente-->
   <section id="step-conferma-prenotato" class="step-cmb">
      <div class="align-center">
         <h4 class="intro"></h4>
         <p>Per: <?php print '<strong>' .$nameCliente.'</strong>' ?><br>
         Al numero: <?php print '<strong>'.$nCellulareCert.'</strong>' ?><br>
         Fascia oraria: <span class="selected-time"></span></p>
         <p>
         Ti ricordiamo che verrai contattato da questo numero: <br>
         <?php print '<strong>'.$nCellulareCert.'</strong>' ?> <span class="span-small">(effettueremo fino a 3 tentativi)</span></p>
         <p class="p-small">RICORDA: potrai annullare la chiamata fino a tutta l’ora precedente la fascia oraria concordata.</p>
         <div class="btn-align-center">
            <a type="button"  class="btn btn-default annulla-pre">annulla prenotazione</a>
            <a type="button" id="btn-close" data-dismiss="modal" class="btn btn-primary">chiudi</a>
         </div>
      </div>
   </section>
   <!-- step 5: annulla prenotazione-->
   <section id="step-annullaPre" class="step-cmb">
      <h4>Sei sicuro di voler annullare la prenotazione?</h4>
      <div class="btn-align-center">
         <a type="button" id="btn-indietro" class="btn btn-default btn-back" data-back="step-conferma-prenotato">indietro</a>
         <a id="annullaPreConf" type="button" id="btn-close" class="btn btn-primary">annulla prenotazione</a>
      </div>
   </section>
   
   <!-- step 5: annulla prenotazione-->
   <section id="step-annullato" class="step-cmb">
      <p class="esito">
         <i class="icon icon-trash_outline" title="prenotazione annullata"></i>
         <span>Prenotazione annullata</span>
      </p>
      <div class="btn-align-center">
         <a type="button" id="btn-close" data-dismiss="modal" class="btn btn-primary">chiudi</a>
      </div>
   </section>
   <!-- step 6: annulla disservizio-->
   <section id="step-disservizio" class="step-cmb">
      <div class="align-center">
         <p class="esito">
            <span class="glyph glyph-ico_cmb_disservizio" title=""><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
         </p>
         <p>Il servizio di prenotazione chiamata non è al momento disponibile.</p>
         <p>Stiamo aggiornando i nostri sistemi per poterti offrire un servizio sempre più accurato.</p>
         <p>Ci scusiamo per il disagio, riprova più tardi.</p>
         <div class="btn-align-center">
            <a type="button" id="btn-close" data-dismiss="modal" class="btn btn-primary">chiudi</a>
          </div>
      </div>
   </section>
   <!-- step 7: fuori orario-->
   <section id="step-fuoriOrario" class="step-cmb">
     <div class="align-center">
         <p class="esito">
            <i class="icon icon-ico_cmb_indisponibile_outline" title="fuori orario"></i>
         </p>
         <p>Il servizio di prenotazione chiamata ti permette di scegliere quando essere ricontatto da un nostro operatore.<p>
         <p>Ti ricordiamo che il servizio &egrave; disponibile:</p>
         <p><strong>dal lunedì al venerdì dalle XX:XX alle XX:XX e il sabato dalle XX:XX alle XX:XX.
         Sono esclusi i giorni festivi.</strong>
         <div class="btn-align-center"><a type="button" id="btn-close" data-dismiss="modal" class="btn btn-primary">chiudi</a></div>
      </div>
   </section>
   <!-- step 8: cell- non certificato-->
   <section id="step-nonCertificato" class="step-cmb">
      <div class="align-center">
         <p>Il servizio di prenotazione chiamata ti permette di scegliere quando essere ricontatto da un nostro operatore.</p>
         <p>Per poterti contattare abbiamo bisogno di un numero di cellullare valido.</p>
         <p><strong>Il numero in nostro possesso non risulta certificato.</strong></p>
            <p>Clicca sul pulsante qui sotto per certificarlo ora.</p>
         <div class="align-center">
            <a type="button" id="btn-close" data-dismiss="modal" class="btn btn-default">chiudi</a>
            <a type="button" id="btn-close" class="btn btn-primary">certifica cellulare</a>
         </div>
      </div>
   </section>
   <!-- step 8: cell- non certificato-->
   <section id="step-numeroNd" class="step-cmb">
      <div class="align-center">
         <p>Il servizio di prenotazione chiamata ti permette di scegliere quando essere ricontatto da un nostro operatore.</p>
         <p>Per poterti contattare abbiamo bisogno di un numero di cellullare valido.</p>
         <p><strong>Non risulta alcun numero nei nostri archivi.</strong></p>
            <p>Clicca sul pulsante qui sotto per certificarlo ora.</p>
         <div class="align-center">
            <a type="button" id="btn-close" data-dismiss="modal" class="btn btn-default">chiudi</a>
            <a type="button" id="btn-close" class="btn btn-primary">inserisci numero</a>
         </div>
      </div>
   </section>
    <!-- step orario non più disponibile mentre si fa la chiamata-->
    <section id="step-orarioNd" class="step-cmb">
      <div>
         <p>La fascia oraria che avevi selezionato non è pù dipsonibile</p>
         <p>Puoi sceglierne un'altra tra quelle rimaste</p>
         <div class="align-center">
           
            <a type="button" id="btn-altro-orario" class="btn btn-primary">scegli un altro orario</a>
         </div>
      </div>
   </section>
</form>