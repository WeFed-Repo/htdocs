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

<!--recupero l'orario passato dall'overlayer per chiamare i servizi in base all'ora -->
<?php
 $time = $_POST['time'];
?>
<script type="text/javascript">
   //chiamata a servizio per restituire gli orari disponibili
   var dispoUrl = "/include/ajax/cmb_json.php?rand=" + Math.random(),
       orariDispoWrapper = $("#orariDispoWrapper"),
       argWrapper =  $("#argWrapper");
       
   $.ajax({
		url: dispoUrl,
		method: "post",
		data: {
			time: $('input[name="time"]').val()
		},
		dataType: "json",
		success: function(data) {
         var dati_call = data,
            nOr = dati_call.fasce_orario_dispo,
            arg=  dati_call.arg;
            //leggo il json di dati degli orari disponibili che mi torna il servizio e costruisco dinamicamente i blocchi di orario
            //costruzione dell'html per accogliere i dati che provengono dal servizio per lo step 1
            $.each(nOr,function(i,v){
               var classDis = v.ndispo === 0 ? "disabled" : "";
               $(orariDispoWrapper).append('<div class="orari-select ' + classDis + '">' + '<span class="text-time">' + v.orario  +  '</span>' + '<span class="text-dispo">(' + v.ndispo +  ' disponibili)</span>' + '<button class="btn-dispo">Seleziona</button>' + '</div>')
            })
            $(orariDispoWrapper).append('<input id="orarioSel" name="orarioSel" type="hidden" val=""></input>');
            $('.step-cmb').eq(0).show();
            //call back sul singolo elemento selezionato
             var  btnSel = $(".orari-select:not(.disabled)"),
                  orarioSelVal = $("input[name='orarioSel']").val(),
                  setNextStepVisible = function(el) {
                        $(el).hide();
                        $(el).next('.step-cmb').show();
                  }
                  btnSel.on("click", function(event){
                     el = $(this);
                     if(el.hasClass("selected"))
                     {
                        return false
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
                     setNextStepVisible('#step-prenota');
                  })
                  //step3: riepilogo
                     $("#btn-conferma").on("click",function(){
                        setNextStepVisible('#step-argomento');
                        var msgTime = orarioSelVal === "ora" ? "«Chiamami ora!»." : "l'orario " + orarioSelVal;
                        $(".selected-time").html(msgTime);
                     })

                     //step4:conferma
                     $("#btn-prenota").on("click",function(){
                        setNextStepVisible('#step-riepilogo');
                     
                     })
              }
   })
   
   
   
       

   

   

   

</script>

<!-- step 1: scelta della fascia oraria-->
<form class="formGenerico" action="">
   <?php print '<input type="hidden" name="time" value="' . $time . '"/>' ?>
  
   
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
      <p>Nome_Cliente, hai selezionato <span class="selected-time"></span><p>
      <p>Un nostro operatore ti contatter&agrave; nella fascia oraria stabilita.</p>
      <p class="noMargin">Il numero da cui riceverai la chiamata &egrave; il: <br>
      +39 xxx xxx xxx <br> </p>
      <ul class="note">
        <li>Effettueremo un massimo di 3 tentativi</li>
        <li>La chiamata sar&agrave; soggetta a registrazione</li>
      </ul>
      <p>Ti chiameremo al seguente numero: <br>
      numero_cliente_cert. <br>
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
      <p>OK<p>
      
   </section>
</form>