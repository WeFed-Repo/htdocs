<!--codice per la jsp del prenota una chiamata-->
<!--fare una chiamata per invare l'ora attuale -->

<style>
   #orariDispoWrapper {
      margin: 0 -1%;
   }
   .orari-select {
      width:18%;
      float:left;
      border:2px solid #999; 
      cursor:pointer;
      margin-bottom:20px;
      text-align:center; 
      margin: 0 1% 20px 1%;
      padding:15px;
      min-height:50px;
      }
      .orari-select span {
         display:inline-block;
         width:100%;
      }
      .orari-select.disabled {
         cursor:not-allowed;
         background-color:#eee;
      }
      .orari-select.selected {
         border-color:#8ab10b;
      }
      .text-footer {
         clear:both;
         text-align:center;
      }
      .btn-dispo{
         display:none
      }
      .selected .btn-dispo {
        line-height:14px;
      }
      .selected .text-dispo{
         display:none
      }
      .step-cmb {
         display:none;
      }
</style>

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
       fuoriOrario = $('input[name="fuoriOrario"]').length>0 && $('input[name="fuoriOrario"]').val()!="" ? $('input[name="fuoriOrario"]').val() : 'false';

   //funzione  per visualizzare un dato step
   var setNextStepVisible = function(elToShow,textIntro) {
          $(".step-cmb:visible").hide();
          $(elToShow).find(".intro").html(textIntro);
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
           var msgTime = "l'orario " + orarioSelVal;
              $('.step-cmb .btn-default').show();
      }
      $(".selected-time").html(msgTime);
   }
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
         fuoriOrario: fuoriOrario
		},
		dataType: "json",
		success: function(data) {
         
          var dati_call = data,
            nOr = dati_call.fasce_orario_dispo,
            arg=  dati_call.arg,
            stato = dati_call.stato;
            //orarioSelVal = $("input[name='orarioSel']").val();
            //leggo il json di dati degli orari disponibili che mi torna il servizio e se mi tornano i dati costruisco dinamicamente i blocchi di orario
            //costruzione dell'html per accogliere i dati che provengono dal servizio per lo step 1
            // se la chiamata è success e mi resituisce gli orari disponibili
            
            if(stato === 'disponibile')
            {
               $.each(nOr,function(i,v){
                  var classDis = v.ndispo === 0 ? "disabled" : "";
                  $(orariDispoWrapper).append('<div class="orari-select ' + classDis + '">' + '<span class="text-time">' + v.orario  +  '</span>' + '<span class="text-dispo">(' + v.ndispo +  ' disponibili)</span>' + '<button class="btn-dispo">Seleziona</button>' + '</div>')
               })
               $('.step-cmb').eq(0).show();
            }
            // se la chiamata è success e mi restituisce la conferma di prenotazione
            if(stato ==="prenotato") {
               setOrarioSelected(dati_call.orarioSel);
               $('input[name="isAlreadyBooked"]').val("true"),
               setStatoPrenotazione();
               setNextStepVisible('#step-conferma-prenotato',"Chiamata prenotata");
            }
            if(stato ==="occupato") {
               setOrarioSelected (dati_call.orarioSel);
               $('input[name="isAlreadyBooked"]').val("true"),
               setStatoPrenotazione();
               setNextStepVisible('#step-conferma-prenotato',"Hai una prenotazione in corso…");
            }
            if(stato ==="annullato") {
               annullaFlag = "false";
               $('input[name="isAlreadyBooked"]').val("false"),
               setStatoPrenotazione();
               setOrarioSelected("");
               setNextStepVisible('#step-annullato');
            }
            if(stato ==="disservizio") {
               $('input[name="disservizioFlag"]').val("true");
               setStatoPrenotazione();
               setNextStepVisible('#step-disservizio');
            }
            if(stato ==="fuoriOrario") {
               $('input[name="fuoriOrario"]').val("true");
               setNextStepVisible('#step-fuoriOrario');
            }
            if(stato ==="nonCertificato") {
               setNextStepVisible('#step-nonCertificato');
            }
             //call back sul singolo elemento selezionato
             var  btnSel = $(".orari-select:not(.disabled)");
                 btnSel.on("click", function(event){
                        el = $(this);
                        if(el.hasClass("selected"))
                        {
                           return false;
                        }
                        else {
                           btnSel.removeClass("selected").find(".btn-dispo").hide();
                           el.addClass("selected").find(".btn-dispo").show(300);
                           orarioSelVal = el.find(".text-time").text();
                  }
               })
               //step 2: costruzione dell'html per accogliere i dati che provengono dal servizio
               $(".btn-dispo").on("click",function(){
                  $.each(arg,function(i,v){
                     $(argWrapper).append ('<div class="radio inline"><label class="textWrapper"><input type="radio" name="arg"><span class="text"> ' + v + '</span></label></div>')
                  })
                  setNextStepVisible('#step-argomento');
               })
          },
          error: function() {
             alert("error")
          }
      })
      }  
   $(function () {
      //chiamata a servizio per restituire gli orari disponibili
      var dispoUrl = "/include/ajax/cmb_json.php?rand=" + Math.random(),
         orariDispoWrapper = $("#orariDispoWrapper"),
         argWrapper =  $("#argWrapper");
         callDipso(dispoUrl);

      
   //step3: riepilogo
   $("#btn-conferma").on("click",function(){
         setOrarioSelected (orarioSelVal);
         setNextStepVisible('#step-riepilogo');
         
      })

      //step4:conferma
      $("#btn-prenota").on("click",function(){
         orarioSel = orarioSelVal;
         callDipso(dispoUrl);
      })
      
       //annulla prenotazione
      $(".annulla-pre").on("click",function(){
         setNextStepVisible('#step-annullaPre');
      
      })
      //annulla prenotazione step 1
      $("#annullaBack").on("click",function(){
         setNextStepVisible('#step-conferma-prenotato');
      })
      //conferma di annulla prenotazione 
      $("#annullaPreConf").on("click",function(){
         annullaFlag = "true";
         callDipso(dispoUrl);
      })
    })
    
 </script>


<form class="formGenerico" action="">
   <?php print '<input type="hidden" name="timeNow" value="' . $timeNow . '"/>' ?>
  
   <!-- step 1: scelta della fascia oraria-->
   <section id="step-prenota" class="step-cmb">
      <h4 class="align-center">Vuoi parlare con un nostro operatore oggi? <br>
      Indicaci a che ora, ti chiamiamo noi.</h4>
      <div id="orariDispoWrapper"></div>
      <div class="text-footer">
         <p>Il servizio &egrave; disponibile dal luned&igrave; al venerd&igrave; XX - XX e il sabato XX – XX.
         Sono esclusi i giorni festivi. </p>
      </div>
   </section>
   <!-- step 2: scelta argomento-->
   <section id="step-argomento" class="step-cmb">
      <h4 class="align-center">Per quale argomento vuoi essere ricontattato?</h4>
      <div id="argWrapper"></div>
      <div class="btn-align-right">
          <div>
            <a type="button" id="btn-conferma" class="btn btn-primary">prosegui</a>
          </div>
      </div>
   </section>
   <!-- step 3: riepilogo-->
   <section id="step-riepilogo" class="step-cmb">
      <p> <?php print $nameCliente ?>, hai selezionato <span class="selected-time"></span><p>
      <p>Un nostro operatore ti contatter&agrave; nella fascia oraria stabilita.</p>
      <p class="noMargin">Il numero da cui riceverai la chiamata &egrave; il: <br>
      +39<?php print $nCellulareCert ?> <br> </p>
      <ul class="note">
        <li>Effettueremo un massimo di 3 tentativi</li>
        <li>La chiamata sar&agrave; soggetta a registrazione</li>
      </ul>
      <p>Ti chiameremo al seguente numero: <br>
      <?php print $nCellulareCert ?>. <br>
      <span class="note">(Questo &egrave; il tuo numero certificato, se  &grave; cambiato <a href="#">aggiornalo prima di prenotare</a>).</span>
      </p>
      <p>Per confermare la prenotazione clicca su «prenota».</p>
       <div class="btn-align-right">
          <div>
            <a type="button" id="btn-prenota" class="btn btn-primary">prenota</a>
          </div>
      </div>
   </section>
   <!-- step 4: conferma e warning già prenotato cambia solo il titolo che è settato dinamicamente-->
   <section id="step-conferma-prenotato" class="step-cmb">
      <div class="align-center">
         <h4 class="intro"></h4>
         <p>Per: <?php print $nameCliente ?><br>
         Al numero: <?php print $nCellulareCert ?><br>
         Fascia oraria: <span class="selected-time"></span></p>
         <p>
         Ti ricordiamo che verrai contattato da questo numero: <br>
         +39 xxx xxx xxx <span class="note">( effettueremo fino a 3 tentativi)</span></p>
         <p class="note">RICORDA: potrai annullare la chiamata fino a tutta l’ora precedente la fascia oraria concordata.</p>
        <div>
            <a type="button"  class="btn btn-default annulla-pre">annulla prenotazione</a>
            <a type="button" id="btn-close" data-dismiss="modal" class="btn btn-primary">chiudi</a>
         </div>
      </div>
   </section>
   <!-- step 5: annulla prenotazione-->
   <section id="step-annullaPre" class="step-cmb">
         <h4>Sei sicuro di voler annullare la prenotazione?</h4>
      <div>
         <a id="annullaBack" type="button"  class="btn btn-default">indietro</a>
         <a id="annullaPreConf" type="button" id="btn-close" class="btn btn-primary">annulla prenotazione</a>
      </div>
   </section>
   <!-- step 5: annulla prenotazione-->
   <section id="step-annullato" class="step-cmb">
         <h4>Prenotazione annullata</h4>
      <div>
         <a type="button" id="btn-close" data-dismiss="modal" class="btn btn-primary">chiudi</a>
      </div>
   </section>
   <!-- step 6: annulla disservizio-->
   <section id="step-disservizio" class="step-cmb">
      <p>Il servizio di prenotazione chiamata non è al momento disponibile.</p>
      <p>Stiamo aggiornando i nostri sistemi per poterti offrire un servizio sempre più accurato.</p>
      <p>Ci scusiamo per il disagio, riprova più tardi.</p>

      <div>
         <a type="button" id="btn-close" data-dismiss="modal" class="btn btn-primary">chiudi</a>
      </div>
   </section>
   <!-- step 7: fuori orario-->
   <section id="step-fuoriOrario" class="step-cmb">
      <p>Il servizio di prenotazione chiamata ti permette di scegliere quando essere ricontatto da un nostro operatore.<p>
      
      <p>Ti ricordiamo che il servizio è disponibile:</p>
      <p><strong>dal lunedì al venerdì dalle XX:XX alle XX:XX e il sabato dalle XX:XX alle XX:XX.
      Sono esclusi i giorni festivi.</strong>


      <div>
         <a type="button" id="btn-close" data-dismiss="modal" class="btn btn-primary">chiudi</a>
      </div>
   </section>
   <!-- step 8: cell- non certificato-->
   <section id="step-nonCertificato" class="step-cmb"> 
      <p>Il servizio di prenotazione chiamata ti permette di scegliere quando essere ricontatto da un nostro operatore.<p>
      <p>Per poterti contattare abbiamo bisogno di un numero di cellullare valido.</p>
      <p>Il numero in nostro possesso non risulta certificato.<p>
         Clicca sul pulsante qui sotto per certificarlo ora.
      <div>
         <a type="button" id="btn-close" data-dismiss="modal" class="btn btn-default">chiudi</a>
         <a type="button" id="btn-close" class="btn btn-primary">certifica cellulare</a>
      </div>
   </section>
</form>