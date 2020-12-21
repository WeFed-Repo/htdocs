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
         display: inline-block;
         line-height:14px;
      }
      .selected .text-dispo{
         display:none
      }
</style>

<!--recupero l'orario passato dall'overlayer per chiamare i servizi in base all'ora -->
<?php
 $time = $_POST['time'];
 //print $time;

?>
<script type="text/javascript">
   
   dati_call = {
     "esito":"ok",
     "fasce_orario_dispo": [
         {
            "orario" : "ora",
            "is-dispo" : "true",
            "ndispo": 10
         },
         {
            "orario" : "11.00-12.00",
            "is-dispo" : "true",
            "ndispo": 3
         },
         {
            "orario" : "12.00-13.00",
            "is-dispo" : "true",
            "ndispo": 3
         },
         {
            "orario" : "12.00-13.00",
            "is-dispo" : "true",
            "ndispo": 3
         },
         {
            "orario" : "13.00-14.00",
            "is-dispo" : "false",
            "ndispo": 0
         },
         {
            "orario" : "14.00-15.00",
            "is-dispo" : "true",
            "ndispo": 3
         },
         {
            "orario" : "15.00-16.00",
            "is-dispo" : "false",
            "ndispo": 0
         },
         {
            "orario" : "16.00-17.00",
            "is-dispo" : "true",
            "ndispo": 10
         },
         {
            "orario" : "17.00-18.00",
            "is-dispo" : "true",
            "ndispo": 10
         },
         {
            "orario" : "17.00-18.00",
            "is-dispo" : "true",
            "ndispo": 10
         },
         {
            "orario" : "18.00-19.00",
            "is-dispo" : "true",
            "ndispo": 10
         },
         {
            "orario" : "19.00-20.00",
            "is-dispo" : "true",
            "ndispo": 10
         },
         {
            "orario" : "20.00-21.00",
            "is-dispo" : "true",
            "ndispo": 10
         },
         {
            "orario" : "21.00-22.00",
            "is-dispo" : "true",
            "ndispo": 10
         }
        
     ],
     "arg" :[
        "argomento uno",
        "argomento due"
     ]
   }
   //leggo il json di dati degli orari disponibili che mi torna il servizio e costruisco dinamicamente i blocchi di orario
   var orariDispoWrapper = $("#orariDispoWrapper"),
       nOr = dati_call.fasce_orario_dispo;
   
       //costruzione dell'html per accogliere i dati che provengono dal servizio
   $.each(nOr,function(i,v){
      var classDis = v.ndispo === 0 ? "disabled" : "";
       $(orariDispoWrapper).append('<div class="orari-select ' + classDis + '">' + '<span class="text-time">' + v.orario  +  '</span>' + '<span class="text-dispo">(' + v.ndispo +  ' disponibili)</span>' + '<button class="btn-dispo">Prenota</button>' + '</div>')
   })
   $(orariDispoWrapper).append('<input name="orarioSel" type="hidden" value=></input>')

   //call back sul singolo elemento selezionato
   var btnSel = $(".orari-select:not(.disabled)");
   btnSel.on("click", function(){
      el = $(this);
      btnSel.removeClass("selected");
      el.addClass("selected");
      $("input[name='orarioSel']").val(el.find(".text-time").text());
   })    
</script>

<!-- step 1: scelta della fascia oraria-->
<section id="prenotaStep1">
   <h4 class="align-center">Vuoi parlare con un nostro operatore oggi? <br>
   Indicaci a che ora, ti chiamiamo noi.</h4>
   <div id="orariDispoWrapper"></div>
   <div class="text-footer">
      <p>Il servizio &egrave; disponibile dal luned&igrave; al venerd&igrave; XX - XX e il sabato XX – XX.
      Sono esclusi i giorni festivi. </p>
   </div>
</section>