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
   var isAlreadyBooked = (typeof isAlreadyBooked === 'undefined') ? 'false' : isAlreadyBooked;
    var setNextStepVisible = function(elToShow) {
          $(".step-cmb:visible").hide();
          $(elToShow).show();
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
         orarioSel: orarioSel
		},
		dataType: "json",
		success: function(data) {
          var dati_call = data,
            nOr = dati_call.fasce_orario_dispo,
            arg=  dati_call.arg,
            stato = dati_call.stato,
            orarioSelVal = $("input[name='orarioSel']").val();
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
               $(".selected-time").html(dati_call.orarioSel);
               $("#orarioSel").val(dati_call.orarioSel);
               isAlreadyBooked = "true";
               $(".icon-cmb").hide();
               $(".icon-cmb-ok").show();
               setNextStepVisible('#step-conferma');
            }
            if(stato ==="occupato") {
               
               if(orarioSelVal === "ora") { 
                  $('.step-cmb .btn-default').hide();
               }
               setNextStepVisible('#step-prenotato');
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
               //step3: riepilogo
                  $("#btn-conferma").on("click",function(){
                     setNextStepVisible('#step-riepilogo');
                     if(orarioSelVal === "ora") {
                        var msgTime = "«Chiamami ora!»."
                        $('.step-cmb .btn-default').hide();
                     }
                     else {
                        var msgTime = "l'orario " + orarioSelVal;
                        $('.step-cmb .btn-default').show();
                     }
                     
                     $(".selected-time").html(msgTime);
                  })

                  //step4:conferma
                  $("#btn-prenota").on("click",function(){
                     orarioSel = orarioSelVal;
                     callDipso(dispoUrl);
                  })
         }
      })
      }  
   $(function () {
      //chiamata a servizio per restituire gli orari disponibili
   var dispoUrl = "/include/ajax/cmb_json.php?rand=" + Math.random(),
       orariDispoWrapper = $("#orariDispoWrapper"),
       argWrapper =  $("#argWrapper");
       orarioSel = "";
       callDipso(dispoUrl);
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
   <section id="step-argomento" class="step-cmb">
      <h4 class="align-center">Per quale argomento vuoi essere ricontattato?</h4>
      <div id="argWrapper"></div>
      <div class="btn-align-right">
          <div>
            <a type="button" id="btn-conferma" class="btn btn-primary">prosegui</a>
          </div>
      </div>
   </section>
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
   <section id="step-conferma" class="step-cmb">
      <div class="align-center">
      <h4>CHIAMATA PRENOTATA</h4>
         <p>Per: <?php print $nameCliente ?><br>
         Al numero: <?php print $nCellulareCert ?><br>
         Fascia oraria: <span class="selected-time"></span></p>
         <p>
         Ti ricordiamo che verrai contattato da questo numero: <br>
         +39 xxx xxx xxx <span class="note">( effettueremo fino a 3 tentativi)</span></p>


         <p class="note">RICORDA: potrai annullare la chiamata fino a tutta l’ora precedente la fascia oraria concordata.</p>
         <div>
                  <div>
                     <a type="button" id="btn-close" class="btn btn-default">annulla prenotazione</a>
                     <a type="button" id="btn-close" data-dismiss="modal" class="btn btn-primary">chiudi</a>
                  </div>
               </div>
         </div>
    </section>
    <section id="step-prenotato" class="step-cmb">
         <h4>HAI UNA PRENOTAZIONE IN CORSO...</h4>
         <p>Per: <?php print $nameCliente ?><br>
         Al numero: <?php print $nCellulareCert ?><br>
         Fascia oraria: <span class="selected-time"></span></p>
         <p>
         Ti ricordiamo che verrai contattato da questo numero: <br>
         +39 xxx xxx xxx <span class="note">( effettueremo fino a 3 tentativi)</span></p>
         <p class="note">RICORDA: potrai annullare la chiamata fino a tutta l’ora precedente la fascia oraria concordata.</p>
         <div>
            <div>
                  <a classtype="button" class="btn btn-default">annulla prenotazione</a>
                  <a type="button" id="btn-close" data-dismiss="modal" class="btn btn-primary">chiudi</a>
                  </div>
            </div>
         </div>
    </section>
</form>